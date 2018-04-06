<?php
// Start of extension: Reflection
// - parsed on POSIX with PHP 7.2.3 (extension version 7.2.3)
// - parsed on Windows with PHP 7.2.4 (extension version 7.2.4)

/**
 * <code>Reflector</code> is an interface implemented by all
 * exportable Reflection classes.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.reflector.php
 */
interface Reflector
{
    public function __toString();

    public static function export();
}

/**
 * The reflection class.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.reflection.php
 */
class Reflection
{
    /**
     * @param Reflector $reflector
     * @param mixed|null $return
     */
    public static function export($reflector, $return = null)
    {
    }

    /**
     * @param mixed $modifiers
     */
    public static function getModifierNames($modifiers)
    {
    }
}

/**
 * The <code>ReflectionClass</code> class reports
 * information about a class.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.reflectionclass.php
 */
class ReflectionClass implements Reflector
{
    final private function __clone()
    {
    }

    /**
     * @param mixed $argument
     */
    public function __construct($argument)
    {
    }

    public function __toString()
    {
    }

    /**
     * @param mixed $argument
     * @param mixed|null $return
     */
    public static function export($argument, $return = null)
    {
    }

    /**
     * @param mixed $name
     */
    public function getConstant($name)
    {
    }

    public function getConstants()
    {
    }

    public function getConstructor()
    {
    }

    public function getDefaultProperties()
    {
    }

    public function getDocComment()
    {
    }

    public function getEndLine()
    {
    }

    public function getExtension()
    {
    }

    public function getExtensionName()
    {
    }

    public function getFileName()
    {
    }

    public function getInterfaceNames()
    {
    }

    public function getInterfaces()
    {
    }

    /**
     * @param mixed $name
     */
    public function getMethod($name)
    {
    }

    /**
     * @param mixed|null $filter
     */
    public function getMethods($filter = null)
    {
    }

    public function getModifiers()
    {
    }

    public function getName()
    {
    }

    public function getNamespaceName()
    {
    }

    public function getParentClass()
    {
    }

    /**
     * @param mixed|null $filter
     */
    public function getProperties($filter = null)
    {
    }

    /**
     * @param mixed $name
     */
    public function getProperty($name)
    {
    }

    /**
     * @param mixed $name
     */
    public function getReflectionConstant($name)
    {
    }

    public function getReflectionConstants()
    {
    }

    public function getShortName()
    {
    }

    public function getStartLine()
    {
    }

    public function getStaticProperties()
    {
    }

    /**
     * @param mixed $name
     * @param mixed|null $default
     */
    public function getStaticPropertyValue($name, $default = null)
    {
    }

    public function getTraitAliases()
    {
    }

    public function getTraitNames()
    {
    }

    public function getTraits()
    {
    }

    /**
     * @param mixed $name
     */
    public function hasConstant($name)
    {
    }

    /**
     * @param mixed $name
     */
    public function hasMethod($name)
    {
    }

    /**
     * @param mixed $name
     */
    public function hasProperty($name)
    {
    }

    /**
     * @param mixed $interface
     */
    public function implementsInterface($interface)
    {
    }

    public function inNamespace()
    {
    }

    public function isAbstract()
    {
    }

    public function isAnonymous()
    {
    }

    public function isCloneable()
    {
    }

    public function isFinal()
    {
    }

    /**
     * @param mixed $object
     */
    public function isInstance($object)
    {
    }

    public function isInstantiable()
    {
    }

    public function isInterface()
    {
    }

    public function isInternal()
    {
    }

    public function isIterable()
    {
    }

    public function isIterateable()
    {
    }

    /**
     * @param mixed $class
     */
    public function isSubclassOf($class)
    {
    }

    public function isTrait()
    {
    }

    public function isUserDefined()
    {
    }

    /**
     * @param mixed $args
     */
    public function newInstance($args)
    {
    }

    /**
     * @param array[]|null $args
     */
    public function newInstanceArgs($args = null)
    {
    }

    public function newInstanceWithoutConstructor()
    {
    }

    /**
     * @param mixed $name
     * @param mixed $value
     */
    public function setStaticPropertyValue($name, $value)
    {
    }
}

/**
 * The <code>ReflectionClassConstant</code> class reports
 * information about a class constant.
 *
 * @since PHP 7 >= 7.1.0
 *
 * @link http://www.php.net/manual/en/class.reflectionclassconstant.php
 */
class ReflectionClassConstant implements Reflector
{
    final private function __clone()
    {
    }

    /**
     * @param mixed $class
     * @param mixed $name
     */
    public function __construct($class, $name)
    {
    }

    public function __toString()
    {
    }

    /**
     * @param mixed $class
     * @param mixed $name
     * @param mixed|null $return
     */
    public static function export($class, $name, $return = null)
    {
    }

    public function getDeclaringClass()
    {
    }

    public function getDocComment()
    {
    }

    public function getModifiers()
    {
    }

    public function getName()
    {
    }

    public function getValue()
    {
    }

    public function isPrivate()
    {
    }

    public function isProtected()
    {
    }

    public function isPublic()
    {
    }
}

/**
 * The ReflectionException class.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.reflectionexception.php
 */
class ReflectionException extends Exception
{
}

/**
 * The <code>ReflectionExtension</code> class reports
 * information about an extension.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.reflectionextension.php
 */
class ReflectionExtension implements Reflector
{
    final private function __clone()
    {
    }

    /**
     * @param mixed $name
     */
    public function __construct($name)
    {
    }

    public function __toString()
    {
    }

    /**
     * @param mixed $name
     * @param mixed|null $return
     */
    public static function export($name, $return = null)
    {
    }

    public function getClasses()
    {
    }

    public function getClassNames()
    {
    }

    public function getConstants()
    {
    }

    public function getDependencies()
    {
    }

    public function getFunctions()
    {
    }

    public function getINIEntries()
    {
    }

    public function getName()
    {
    }

    public function getVersion()
    {
    }

    public function info()
    {
    }

    public function isPersistent()
    {
    }

    public function isTemporary()
    {
    }
}

/**
 * The <code>ReflectionFunction</code> class reports
 * information about a function.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.reflectionfunction.php
 */
class ReflectionFunction extends ReflectionFunctionAbstract
{
    /**
     * @param mixed $name
     */
    public function __construct($name)
    {
    }

    public function __toString()
    {
    }

    /**
     * @param mixed $name
     * @param mixed|null $return
     */
    public static function export($name, $return = null)
    {
    }

    public function getClosure()
    {
    }

    /**
     * @param mixed|null $args
     */
    public function invoke($args = null)
    {
    }

    /**
     * @param array[] $args
     */
    public function invokeArgs($args)
    {
    }

    public function isDisabled()
    {
    }
}

/**
 * A parent class to <code>ReflectionFunction</code>, read its
 * description for details.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.reflectionfunctionabstract.php
 */
abstract class ReflectionFunctionAbstract implements Reflector
{
    final private function __clone()
    {
    }

    public function getClosureScopeClass()
    {
    }

    public function getClosureThis()
    {
    }

    public function getDocComment()
    {
    }

    public function getEndLine()
    {
    }

    public function getExtension()
    {
    }

    public function getExtensionName()
    {
    }

    public function getFileName()
    {
    }

    public function getName()
    {
    }

    public function getNamespaceName()
    {
    }

    public function getNumberOfParameters()
    {
    }

    public function getNumberOfRequiredParameters()
    {
    }

    public function getParameters()
    {
    }

    public function getReturnType()
    {
    }

    public function getShortName()
    {
    }

    public function getStartLine()
    {
    }

    public function getStaticVariables()
    {
    }

    public function hasReturnType()
    {
    }

    public function inNamespace()
    {
    }

    public function isClosure()
    {
    }

    public function isDeprecated()
    {
    }

    public function isGenerator()
    {
    }

    public function isInternal()
    {
    }

    public function isUserDefined()
    {
    }

    public function isVariadic()
    {
    }

    public function returnsReference()
    {
    }
}

/**
 * The <code>ReflectionGenerator</code> class reports
 * information about a generator.
 *
 * @since PHP 7
 *
 * @link http://www.php.net/manual/en/class.reflectiongenerator.php
 */
class ReflectionGenerator
{
    /**
     * @param mixed $generator
     */
    public function __construct($generator)
    {
    }

    public function getExecutingFile()
    {
    }

    public function getExecutingGenerator()
    {
    }

    public function getExecutingLine()
    {
    }

    public function getFunction()
    {
    }

    public function getThis()
    {
    }

    /**
     * @param mixed|null $options
     */
    public function getTrace($options = null)
    {
    }
}

/**
 * The <code>ReflectionMethod</code> class reports
 * information about a method.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.reflectionmethod.php
 */
class ReflectionMethod extends ReflectionFunctionAbstract
{
    /**
     * @param mixed $class_or_method
     * @param mixed|null $name
     */
    public function __construct($class_or_method, $name = null)
    {
    }

    public function __toString()
    {
    }

    /**
     * @param mixed $class
     * @param mixed $name
     * @param mixed|null $return
     */
    public static function export($class, $name, $return = null)
    {
    }

    /**
     * @param mixed $object
     */
    public function getClosure($object)
    {
    }

    public function getDeclaringClass()
    {
    }

    public function getModifiers()
    {
    }

    public function getPrototype()
    {
    }

    /**
     * @param mixed $object
     * @param mixed $args
     */
    public function invoke($object, $args)
    {
    }

    /**
     * @param mixed $object
     * @param array[] $args
     */
    public function invokeArgs($object, $args)
    {
    }

    public function isAbstract()
    {
    }

    public function isConstructor()
    {
    }

    public function isDestructor()
    {
    }

    public function isFinal()
    {
    }

    public function isPrivate()
    {
    }

    public function isProtected()
    {
    }

    public function isPublic()
    {
    }

    public function isStatic()
    {
    }

    /**
     * @param mixed $value
     */
    public function setAccessible($value)
    {
    }
}

/**
 * @link http://www.php.net/manual/en/class.reflectionnamedtype.php
 */
class ReflectionNamedType extends ReflectionType
{
    public function getName()
    {
    }
}

/**
 * The <code>ReflectionObject</code> class reports
 * information about an <code>object</code>.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.reflectionobject.php
 */
class ReflectionObject extends ReflectionClass
{
    /**
     * @param mixed $argument
     */
    public function __construct($argument)
    {
    }

    /**
     * @param mixed $argument
     * @param mixed|null $return
     */
    public static function export($argument, $return = null)
    {
    }
}

/**
 * The <code>ReflectionParameter</code> class retrieves
 * information about function's or method's parameters.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.reflectionparameter.php
 */
class ReflectionParameter implements Reflector
{
    final private function __clone()
    {
    }

    /**
     * @param mixed $function
     * @param mixed $parameter
     */
    public function __construct($function, $parameter)
    {
    }

    public function __toString()
    {
    }

    public function allowsNull()
    {
    }

    public function canBePassedByValue()
    {
    }

    /**
     * @param mixed $function
     * @param mixed $parameter
     * @param mixed|null $return
     */
    public static function export($function, $parameter, $return = null)
    {
    }

    public function getClass()
    {
    }

    public function getDeclaringClass()
    {
    }

    public function getDeclaringFunction()
    {
    }

    public function getDefaultValue()
    {
    }

    public function getDefaultValueConstantName()
    {
    }

    public function getName()
    {
    }

    public function getPosition()
    {
    }

    /**
     * Get the type of a variable
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.gettype.php
     */
    public function getType(): string
    {
    }

    public function hasType()
    {
    }

    public function isArray()
    {
    }

    public function isCallable()
    {
    }

    public function isDefaultValueAvailable()
    {
    }

    public function isDefaultValueConstant()
    {
    }

    public function isOptional()
    {
    }

    public function isPassedByReference()
    {
    }

    public function isVariadic()
    {
    }
}

/**
 * The <code>ReflectionProperty</code> class reports
 * information about classes properties.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.reflectionproperty.php
 */
class ReflectionProperty implements Reflector
{
    final private function __clone()
    {
    }

    /**
     * @param mixed $class
     * @param mixed $name
     */
    public function __construct($class, $name)
    {
    }

    public function __toString()
    {
    }

    /**
     * @param mixed $class
     * @param mixed $name
     * @param mixed|null $return
     */
    public static function export($class, $name, $return = null)
    {
    }

    public function getDeclaringClass()
    {
    }

    public function getDocComment()
    {
    }

    public function getModifiers()
    {
    }

    public function getName()
    {
    }

    /**
     * @param mixed|null $object
     */
    public function getValue($object = null)
    {
    }

    public function isDefault()
    {
    }

    public function isPrivate()
    {
    }

    public function isProtected()
    {
    }

    public function isPublic()
    {
    }

    public function isStatic()
    {
    }

    /**
     * @param mixed $visible
     */
    public function setAccessible($visible)
    {
    }

    /**
     * @param mixed $object
     * @param mixed|null $value
     */
    public function setValue($object, $value = null)
    {
    }
}

/**
 * The <code>ReflectionType</code> class reports
 * information about a function's return type.
 *
 * @since PHP 7
 *
 * @link http://www.php.net/manual/en/class.reflectiontype.php
 */
class ReflectionType
{
    final private function __clone()
    {
    }

    public function __toString()
    {
    }

    public function allowsNull()
    {
    }

    public function isBuiltin()
    {
    }
}

/**
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.reflectionzendextension.php
 */
class ReflectionZendExtension implements Reflector
{
    final private function __clone()
    {
    }

    /**
     * @param mixed $name
     */
    public function __construct($name)
    {
    }

    public function __toString()
    {
    }

    /**
     * @param mixed $name
     * @param mixed|null $return
     */
    public static function export($name, $return = null)
    {
    }

    public function getAuthor()
    {
    }

    public function getCopyright()
    {
    }

    public function getName()
    {
    }

    public function getURL()
    {
    }

    public function getVersion()
    {
    }
}