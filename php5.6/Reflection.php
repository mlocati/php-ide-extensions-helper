<?php
// Start of extension: Reflection
// - parsed on POSIX with PHP 5.6.34 (extension version $Id: 5f15287237d5f78d75b19c26915aa7bd83dee8b8 $)
// - parsed on Windows with PHP 5.6.34 (extension version $Id: 5f15287237d5f78d75b19c26915aa7bd83dee8b8 $)

/**
 * <code>Reflector</code> is an interface implemented by all
 *     exportable Reflection classes.
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
     * Reflector $reflector
     * mixed|null $return
     */
    public static function export($reflector, $return = null)
    {
    }

    /**
     * mixed $modifiers
     */
    public static function getModifierNames($modifiers)
    {
    }
}

/**
 * The <code>ReflectionClass</code> class reports
 *     information about a class.
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
     * mixed $argument
     */
    public function __construct($argument)
    {
    }

    public function __toString()
    {
    }

    /**
     * mixed $argument
     * mixed|null $return
     */
    public static function export($argument, $return = null)
    {
    }

    /**
     * mixed $name
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
     * mixed $name
     */
    public function getMethod($name)
    {
    }

    /**
     * mixed|null $filter
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
     * mixed|null $filter
     */
    public function getProperties($filter = null)
    {
    }

    /**
     * mixed $name
     */
    public function getProperty($name)
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
     * mixed $name
     * mixed|null $default
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
     * mixed $name
     */
    public function hasConstant($name)
    {
    }

    /**
     * mixed $name
     */
    public function hasMethod($name)
    {
    }

    /**
     * mixed $name
     */
    public function hasProperty($name)
    {
    }

    /**
     * mixed $interface
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

    public function isCloneable()
    {
    }

    public function isFinal()
    {
    }

    /**
     * mixed $object
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

    public function isIterateable()
    {
    }

    /**
     * mixed $class
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
     * mixed $args
     */
    public function newInstance($args)
    {
    }

    /**
     * array|null $args
     */
    public function newInstanceArgs(array $args = null)
    {
    }

    public function newInstanceWithoutConstructor()
    {
    }

    /**
     * mixed $name
     * mixed $value
     */
    public function setStaticPropertyValue($name, $value)
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
 *     information about an extension.
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
     * mixed $name
     */
    public function __construct($name)
    {
    }

    public function __toString()
    {
    }

    /**
     * mixed $name
     * mixed|null $return
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
 *     information about a function.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.reflectionfunction.php
 */
class ReflectionFunction extends ReflectionFunctionAbstract
{
    /**
     * mixed $name
     */
    public function __construct($name)
    {
    }

    public function __toString()
    {
    }

    /**
     * mixed $name
     * mixed|null $return
     */
    public static function export($name, $return = null)
    {
    }

    public function getClosure()
    {
    }

    /**
     * mixed|null $args
     */
    public function invoke($args = null)
    {
    }

    /**
     * array $args
     */
    public function invokeArgs(array $args)
    {
    }

    public function isDisabled()
    {
    }
}

/**
 * A parent class to <code>ReflectionFunction</code>, read its
 *     description for details.
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

    abstract public function __toString();

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

    public function getShortName()
    {
    }

    public function getStartLine()
    {
    }

    public function getStaticVariables()
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
 * The <code>ReflectionMethod</code> class reports
 *     information about a method.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.reflectionmethod.php
 */
class ReflectionMethod extends ReflectionFunctionAbstract
{
    /**
     * mixed $class_or_method
     * mixed|null $name
     */
    public function __construct($class_or_method, $name = null)
    {
    }

    public function __toString()
    {
    }

    /**
     * mixed $class
     * mixed $name
     * mixed|null $return
     */
    public static function export($class, $name, $return = null)
    {
    }

    /**
     * mixed $object
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
     * mixed $object
     * mixed $args
     */
    public function invoke($object, $args)
    {
    }

    /**
     * mixed $object
     * array $args
     */
    public function invokeArgs($object, array $args)
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
     * mixed $value
     */
    public function setAccessible($value)
    {
    }
}

/**
 * The <code>ReflectionObject</code> class reports
 *     information about an <code>object</code>.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.reflectionobject.php
 */
class ReflectionObject extends ReflectionClass
{
    /**
     * mixed $argument
     */
    public function __construct($argument)
    {
    }

    /**
     * mixed $argument
     * mixed|null $return
     */
    public static function export($argument, $return = null)
    {
    }
}

/**
 * The <code>ReflectionParameter</code> class retrieves
 *     information about function's or method's parameters.
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
     * mixed $function
     * mixed $parameter
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
     * mixed $function
     * mixed $parameter
     * mixed|null $return
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
 *     information about classes properties.
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
     * mixed $class
     * mixed $name
     */
    public function __construct($class, $name)
    {
    }

    public function __toString()
    {
    }

    /**
     * mixed $class
     * mixed $name
     * mixed|null $return
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
     * mixed|null $object
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
     * mixed $visible
     */
    public function setAccessible($visible)
    {
    }

    /**
     * mixed $object
     * mixed|null $value
     */
    public function setValue($object, $value = null)
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
     * mixed $name
     */
    public function __construct($name)
    {
    }

    public function __toString()
    {
    }

    /**
     * mixed $name
     * mixed|null $return
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
