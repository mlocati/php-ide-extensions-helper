<?php
class DocGenerator
{
    /**
     * @var string
     */
    const INDENT = '    ';

    /**
     * @var string
     */
    const NEWLINE = "\n";

    /**
     * @var ReflectionExtension
     */
    protected $extension;

    /**
     * @var string
     */
    protected $namespaces;

    /**
     * @param string $extensionName
     */
    public function __construct($extensionName)
    {
        if (!extension_loaded($extensionName)) {
            throw new Exception("Extension not loaded: {$extensionName}");
        }
        $this->extension = new ReflectionExtension($extensionName);
        $this->namespaces = [''];
        foreach ($this->extension->getClasses() as $rc) {
            /* @var ReflectionClass $rc */
            $namespace = (string) $rc->getNamespaceName();
            if (!in_array($namespace, $this->namespaces, true)) {
                $this->namespaces[] = $namespace;
            }
        }
        foreach ($this->extension->getFunctions() as $rf) {
            /* @var ReflectionFunction $rf */
            $namespace = (string) $rf->getNamespaceName();
            if (!in_array($namespace, $this->namespaces, true)) {
                $this->namespaces[] = (string) $namespace;
            }
        }
    }

    /**
     * @return bool
     */
    protected function hasNamespaces()
    {
        return $this->namespaces !== [] && $this->namespaces !== [''];
    }

    /**
     * @return string
     */
    public function getAll()
    {
        $lines = $this->mergeLines([
            $this->getHead(),
            $this->getReturn(),
            $this->getINIEntries(),
            $this->getConstants(),
            $this->getClasses(),
            $this->getFunctions(),
        ]);

        return implode(static::NEWLINE, $lines);
    }

    /**
     * @return string[]
     */
    protected function getHead()
    {
        $phpVersion = PHP_VERSION;

        return [
            '<?php',
            "// Documentation generated automatically for extension {$this->extension->getName()} v{$this->extension->getVersion()} with PHP v{$phpVersion}",
            '',
        ];
    }

    /**
     * @return string[]
     */
    protected function getReturn()
    {
        $result = [
            '' => [
                "// This file doesn't do anything: it's only useful to help editors autocompletion features",
                'return;',
            ],
        ];

        if ($this->hasNamespaces() === false) {
            $result = $result[''];
        }

        return $result;
    }

    /**
     * @return string[]
     */
    protected function getINIEntries()
    {
        $result = [];
        $iniEntries = $this->extension->getINIEntries();
        if (count($iniEntries) === 0) {
            $result[] = '// No INI entries';
        } else {
            $result[] = '/*';
            $result[] = ' * INI entries:';
            foreach ($iniEntries as $name => $value) {
                $result[] = " * {$name} = " . $this->serializeValue($value);
            }
            $result[] = ' */';
        }

        return $result;
    }

    /**
     * @return string[]|string[][]
     */
    protected function getConstants()
    {
        $constants = $this->extension->getConstants();
        if (count($constants) === 0) {
            $result = ['// No constants defined'];
        } else {
            ksort($constants);
            $result[''] = [];
            foreach ($constants as $name => $value) {
                $result[''][] = "const $name = " . $this->serializeValue($value) . ';';
            }
            if ($this->hasNamespaces() === false) {
                $result = $result[''];
            }
        }

        return $result;
    }

    /**
     * @return string[]|string[][]
     */
    protected function getClasses()
    {
        $classes = $this->extension->getClasses();
        /* @var ReflectionClass[] $classes */
        if (count($classes) === 0) {
            $result = ['// No classes defined'];
        } else {
            usort($classes, function (ReflectionClass $a, ReflectionClass $b) {
                if ($a->isInterface() !== $b->isInterface()) {
                    $cmp = $a->isInterface() ? -1 : 1;
                } else {
                    $cmp = strcasecmp($a->getShortName(), $b->getShortName());
                }

                return $cmp;
            });
            foreach ($classes as $class) {
                $namespace = (string) $class->getNamespaceName();
                if (!isset($result[$namespace])) {
                    $result[$namespace] = [];
                }
                $result[$namespace] = array_merge($result[$namespace], $this->getClass($class));
            }
            if ($this->hasNamespaces() === false) {
                $result = $result[''];
            }
        }

        return $result;
    }

    /**
     * @param ReflectionClass $class
     *
     * @return string[]
     */
    protected function getClass(ReflectionClass $class)
    {
        $result = [];
        $modifiers = $class->getModifiers();
        $header = '';
        $interfaces = [];
        $allInterfaces = $class->getInterfaceNames();
        foreach ($allInterfaces as $interface) {
            $inherited = false;
            foreach ($allInterfaces as $otherInterface) {
                if ($otherInterface !== $interface && in_array($interface, class_implements($otherInterface)) === true) {
                    $inherited = true;
                    break;
                }
            }
            if ($inherited === false) {
                $interfaces[] = $interface;
            }
        }
        usort($interfaces, 'strnatcasecmp');
        /* @var string[] $interfaces */
        if ($class->isInterface()) {
            $header .= 'interface ' . $class->getShortName();
            switch (count($interfaces)) {
                case 0:
                    break;
                case 1:
                    $header .= ' extends ' . $interfaces[0];
                    break;
                default:
                    throw new Exception("An interface can't extend more that one interface");
            }
        } else {
            $parentClass = $class->getParentClass();
            if ($parentClass) {
                $parentClassName = $parentClass->getName();
                if ($parentClass->getNamespaceName() !== $class->getNamespaceName()) {
                    $parentClassName = '\\' . lrtrim($parentClassName, '\\');
                }
                $parentInterfaces = $parentClass->getInterfaceNames();
                if (!empty($parentInterfaces)) {
                    $interfaces = array_filter(
                        $interfaces,
                        function ($interface) use ($parentInterfaces) {
                            return in_array($interface, $parentInterfaces) === false;
                        }
                    );
                }
            } else {
                $parentClassName = '';
            }
            if (($modifiers & (ReflectionClass::IS_EXPLICIT_ABSTRACT | ReflectionClass::IS_IMPLICIT_ABSTRACT)) !== 0) {
                $header .= 'abstract ';
            }
            if (($modifiers & ReflectionClass::IS_FINAL) !== 0) {
                $header .= 'final ';
            }
            $header .= 'class ' . $class->getShortName();
            if ($parentClassName !== '') {
                $header .= ' extends ' . $parentClassName;
            }
            if (count($interfaces) > 0) {
                $header .= ' implements ' . implode(', ', $interfaces);
            }
        }
        $result[] = $header;
        $result[] .= '{';
        $constants = $class->getConstants();
        if (count($constants) > 0) {
            ksort($constants);
            $constantLines = [];
            foreach ($constants as $name => $value) {
                $constantLines[] .= "const {$name} = " . $this->serializeValue($value) . ';';
            }
            $result = array_merge($result, $this->indent($constantLines));
        }
        $properties = array_filter(
            $class->getProperties(),
            function (ReflectionProperty $property) use ($class) {
                return $property->getDeclaringClass()->getName() === $class->getName();
            }
        );
        /* @var ReflectionProperty[] $properties */
        if (count($properties) > 0) {
            usort($properties, function (ReflectionProperty $a, ReflectionProperty $b) {
                if ($a->isStatic() != $b->isStatic()) {
                    return $a->isStatic() ? -1 : 1;
                }
                if ($a->isPrivate() != $b->isPrivate()) {
                    return $a->isStatic() ? -1 : 1;
                }
                if ($a->isProtected() != $b->isProtected()) {
                    return $a->isProtected() ? -1 : 1;
                }

                return strcasecmp($a->getName(), $b->getName());
            });
            $propertyLines = [];
            $defaultProperties = $class->getDefaultProperties();
            foreach ($properties as $property) {
                $propertyLines = array_merge($propertyLines, $this->getClassProperty($property, isset($defaultProperties[$property->getName()]) ? $defaultProperties[$property->getName()] : null));
            }
            $result = array_merge($result, $this->indent($propertyLines));
        }
        $methods = array_filter(
            $class->getMethods(),
            function (ReflectionMethod $method) use ($class) {
                return $method->getDeclaringClass()->getName() === $class->getName();
            }
        );
        /* @var ReflectionMethod[] $methods */
        if (count($methods) > 0) {
            usort($methods, function (ReflectionMethod $a, ReflectionMethod $b) {
                if ($a->isStatic() != $b->isStatic()) {
                    return $a->isStatic() ? -1 : 1;
                }
                if ($a->isPrivate() != $b->isPrivate()) {
                    return $a->isStatic() ? -1 : 1;
                }
                if ($a->isProtected() != $b->isProtected()) {
                    return $a->isProtected() ? -1 : 1;
                }

                return strcasecmp($a->getName(), $b->getName());
            });
            $methodLines = [];
            foreach ($methods as $method) {
                $methodLines = array_merge($methodLines, $this->getClassMethod($method, $class->isInterface()));
            }
            $result = array_merge($result, $this->indent($methodLines));
        }
        $result[] .= '}';

        return $result;
    }

    /**
     * @param ReflectionProperty $property
     * @param mixed $defaultValue
     *
     * @return string[]
     */
    private function getClassProperty(ReflectionProperty $property, $defaultValue)
    {
        if ($property->isPrivate()) {
            $h = 'private';
        } elseif ($property->isProtected()) {
            $h = 'protected';
        } else {
            $h = 'public';
        }
        if ($property->isStatic()) {
            $h .= ' static';
        }
        $h .= ' $' . $property->getName();
        if ($defaultValue !== null) {
            $h .= ' = ' . $this->serializeValue($defaultValue);
        }
        $h .= ';';

        return [$h];
    }

    /**
     * @param ReflectionMethod $method
     *
     * @return string[]
     */
    private function getClassMethod(ReflectionMethod $method, $forInterface)
    {
        if ($method->getName() === 'connect') {
            $a = 1;
        }
        $h = '';
        if ($method->isFinal()) {
            $h .= 'final ';
        }
        if ($method->isPrivate()) {
            $h .= 'private ';
        } elseif ($method->isProtected()) {
            $h .= 'protected ';
        } else {
            $h .= 'public ';
        }
        if ($method->isStatic()) {
            $h .= 'static ';
        }
        if ($method->isAbstract() && !$forInterface) {
            $h .= 'abstract ';
        }
        $h .= $this->getFunctionOrMethod($method);

        if ($method->isAbstract()) {
            $result = [
                $h . ';',
            ];
        } else {
            $result = [
                $h,
                '{',
                '}',
            ];
        }

        return $result;
    }

    /**
     * @return string[]|string[][]
     */
    protected function getFunctions()
    {
        $functions = $this->extension->getFunctions();
        /* @var ReflectionFunction[] $functions */
        if (count($functions) === 0) {
            $result = ['// No functions defined'];
        } else {
            $result = [];
            foreach ($functions as $function) {
                $namespace = (string) $function->getNamespaceName();
                if (!isset($result[$namespace])) {
                    $result[$namespace] = [];
                }
                $namespace = (string) $function->getNamespaceName();
                $result[$namespace] = array_merge($result[$namespace], $this->getFunction($function));
            }
            if ($this->hasNamespaces() === false) {
                $result = $result[''];
            }
        }

        return $result;
    }

    /**
     * @param ReflectionFunction $function
     *
     * @return string[]
     */
    protected function getFunction(ReflectionFunction $function)
    {
        return [
            $this->getFunctionOrMethod($function),
            '{',
            '}',
        ];
    }

    /**
     * @param ReflectionFunctionAbstract $fm
     *
     * @return string
     */
    protected function getFunctionOrMethod(ReflectionFunctionAbstract $fm)
    {
        $result = 'function ' . $fm->getShortName();
        $result .= '(';
        $parameters = $fm->getParameters();
        /* @var ReflectionParameter[] $parameters */
        foreach ($parameters as $i => $parameter) {
            if ($i > 0) {
                $result .= ', ';
            }
            $type = method_exists($parameter, 'getType') ? $parameter->getType() : null;
            if ($type !== null) {
                $result .= $type->__toString() . ' ';
            }
            $isVariadic = method_exists($parameter, 'isVariadic') && $parameter->isVariadic();
            if ($isVariadic) {
                $result .= '...';
            }
            if ($parameter->isPassedByReference()) {
                $result .= '&';
            }
            $result .= '$' . $parameter->getName();
            if (!$isVariadic) {
                if ($parameter->isDefaultValueAvailable()) {
                    $result .= ' = ' . $this->serializeValue($parameter->getDefaultValue());
                } elseif ($parameter->isOptional()) {
                    $result .= ' = null';
                }
            }
        }
        $result .= ')';
        $rt = method_exists($fm, 'getReturnType') ? $fm->getReturnType() : null;
        if ($rt !== null) {
            $result .= ' : ' . $rt->__toString();
        }

        return $result;
    }

    /**
     * @param array $lines
     *
     * @return string[]
     */
    protected function mergeLines(array $sets)
    {
        $result = [];
        foreach ($sets as $lines) {
            if ($this->hasNamespaces()) {
                $linesWithoutNamespace = [];
                foreach ($lines as $key => $value) {
                    if (is_numeric($key)) {
                        $linesWithoutNamespace[] = $value;
                    }
                }
                $result = array_merge($result, $linesWithoutNamespace);
            } else {
                $result = array_merge($result, $lines);
            }
        }
        if ($this->hasNamespaces()) {
            foreach ($this->namespaces as $namespace) {
                $linesInNamespace = [];
                foreach ($sets as $lines) {
                    foreach ($lines as $key => $value) {
                        if ($key === $namespace) {
                            $linesInNamespace = array_merge($linesInNamespace, $value);
                        }
                    }
                }
                if (count($linesInNamespace) > 0) {
                    $result[] = $namespace === '' ? 'namespace {' : "namespace {$namespace} {";
                    $result = array_merge($result, $this->indent($linesInNamespace));
                    $result[] = '}';
                }
            }
        }

        return $result;
    }

    /**
     * @param array $array
     * @param int $level
     *
     * @return array
     */
    protected function indent(array $array, $level = 1)
    {
        $result = [];
        $indentBy = str_repeat(static::INDENT, $level);
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $result[$key] = $this->indent($value, $level);
            } else {
                $result[$key] = ($value === '') ? '' : ($indentBy . $value);
            }
        }

        return $result;
    }

    /**
     * @param mixed $value
     *
     * @return string
     */
    protected function serializeValue($value)
    {
        switch (gettype($value)) {
            case 'boolean':
            case 'integer':
            case 'double':
            case 'NULL':
                $result = json_encode($value);
                break;
            case 'string':
                $result = $this->serializeString($value);
                break;
            case 'array':
                if (count($value) > 0) {
                    $result = trim(var_export($value, true));
                } else {
                    $result = '[]';
                }
                break;
            case 'object':
            case 'resource':
            default:
                $result = trim(var_export($value, true));
                break;
        }

        return $result;
    }

    /**
     * @param string $value
     *
     * @return string
     */
    protected function serializeString($value)
    {
        $map = [
            "\n" => '\n',
            "\r" => '\r',
            "\t" => '\t',
            "\v" => '\v',
            "\e" => '\e',
            "\f" => '\f',
            '\\' => '\\\\',
            "'" => '\\\'',
            '"' => '\\"',
            '$' => '\$',
        ];
        $minOrd = ord(' ');
        $maxOrd = 0x7f;
        $container = "'";
        $result = '';
        $length = strlen($value);
        for ($index = 0; $index < $length; ++$index) {
            $char = $value[$index];
            if (isset($map[$char])) {
                if ($char !== "'" && $char !== '\\') {
                    $container = '"';
                }
                $result .= $map[$char];
            } else {
                $ord = ord($char);
                if ($ord < $minOrd || $ord > $maxOrd) {
                    $result .= '\\x' . substr(dechex($ord), -2);
                } else {
                    $result .= $char;
                }
            }
        }

        return "{$container}{$result}{$container}";
    }
}
