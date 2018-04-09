<?php
// Start of extension: Reflection
// - parsed on POSIX with PHP 5.6.34 (extension version $Id: 5f15287237d5f78d75b19c26915aa7bd83dee8b8 $)
// - parsed on Windows with PHP 5.6.34 (extension version $Id: 5f15287237d5f78d75b19c26915aa7bd83dee8b8 $)

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
    /**
     * To string
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflector.tostring.php
     */
    public function __toString();

    /**
     * Exports
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflector.export.php
     */
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
     * Exports
     *
     * @param Reflector $reflector
     * @param mixed|null $return
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflection.export.php
     */
    public static function export(Reflector $reflector, $return = null)
    {
    }

    /**
     * Gets modifier names
     *
     * @param mixed $modifiers
     *
     * @return array
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflection.getmodifiernames.php
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
    /**
     * @var int
     */
    const IS_EXPLICIT_ABSTRACT = 32;

    /**
     * @var int
     */
    const IS_FINAL = 64;

    /**
     * @var int
     */
    const IS_IMPLICIT_ABSTRACT = 16;

    final private function __clone()
    {
    }

    /**
     * Constructs a ReflectionClass
     *
     * @param mixed $argument
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.construct.php
     */
    public function __construct($argument)
    {
    }

    /**
     * Returns the string representation of the ReflectionClass object
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.tostring.php
     */
    public function __toString()
    {
    }

    /**
     * Exports a class
     *
     * @param mixed $argument
     * @param mixed|null $return
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.export.php
     */
    public static function export($argument, $return = null)
    {
    }

    /**
     * Gets defined constant
     *
     * @param mixed $name
     *
     * @return mixed
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getconstant.php
     */
    public function getConstant($name)
    {
    }

    /**
     * Gets constants
     *
     * @return array
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getconstants.php
     */
    public function getConstants()
    {
    }

    /**
     * Gets the constructor of the class
     *
     * @return ReflectionMethod
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getconstructor.php
     */
    public function getConstructor()
    {
    }

    /**
     * Gets default properties
     *
     * @return array
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getdefaultproperties.php
     */
    public function getDefaultProperties()
    {
    }

    /**
     * Gets doc comments
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getdoccomment.php
     */
    public function getDocComment()
    {
    }

    /**
     * Gets end line
     *
     * @return int
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getendline.php
     */
    public function getEndLine()
    {
    }

    /**
     * Gets a <code>ReflectionExtension</code> object for the extension which defined the class
     *
     * @return ReflectionExtension
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getextension.php
     */
    public function getExtension()
    {
    }

    /**
     * Gets the name of the extension which defined the class
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getextensionname.php
     */
    public function getExtensionName()
    {
    }

    /**
     * Gets the filename of the file in which the class has been defined
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getfilename.php
     */
    public function getFileName()
    {
    }

    /**
     * Gets the interface names
     *
     * @return array
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getinterfacenames.php
     */
    public function getInterfaceNames()
    {
    }

    /**
     * Gets the interfaces
     *
     * @return array
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getinterfaces.php
     */
    public function getInterfaces()
    {
    }

    /**
     * Gets a <code>ReflectionMethod</code> for a class method
     *
     * @param mixed $name
     *
     * @return ReflectionMethod
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getmethod.php
     */
    public function getMethod($name)
    {
    }

    /**
     * Gets an array of methods
     *
     * @param mixed|null $filter
     *
     * @return array
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getmethods.php
     */
    public function getMethods($filter = null)
    {
    }

    /**
     * Gets the class modifiers
     *
     * @return int
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getmodifiers.php
     */
    public function getModifiers()
    {
    }

    /**
     * Gets class name
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getname.php
     */
    public function getName()
    {
    }

    /**
     * Gets namespace name
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getnamespacename.php
     */
    public function getNamespaceName()
    {
    }

    /**
     * Gets parent class
     *
     * @return ReflectionClass
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getparentclass.php
     */
    public function getParentClass()
    {
    }

    /**
     * Gets properties
     *
     * @param mixed|null $filter
     *
     * @return array
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getproperties.php
     */
    public function getProperties($filter = null)
    {
    }

    /**
     * Gets a <code>ReflectionProperty</code> for a class's property
     *
     * @param mixed $name
     *
     * @return ReflectionProperty
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getproperty.php
     */
    public function getProperty($name)
    {
    }

    /**
     * Gets short name
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getshortname.php
     */
    public function getShortName()
    {
    }

    /**
     * Gets starting line number
     *
     * @return int
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getstartline.php
     */
    public function getStartLine()
    {
    }

    /**
     * Gets static properties
     *
     * @return array
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getstaticproperties.php
     */
    public function getStaticProperties()
    {
    }

    /**
     * Gets static property value
     *
     * @param mixed $name
     * @param mixed|null $default
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getstaticpropertyvalue.php
     */
    public function getStaticPropertyValue($name, $default = null)
    {
    }

    /**
     * Returns an array of trait aliases
     *
     * @return array
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.gettraitaliases.php
     */
    public function getTraitAliases()
    {
    }

    /**
     * Returns an array of names of traits used by this class
     *
     * @return array
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.gettraitnames.php
     */
    public function getTraitNames()
    {
    }

    /**
     * Returns an array of traits used by this class
     *
     * @return array
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.gettraits.php
     */
    public function getTraits()
    {
    }

    /**
     * Checks if constant is defined
     *
     * @param mixed $name
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.hasconstant.php
     */
    public function hasConstant($name)
    {
    }

    /**
     * Checks if method is defined
     *
     * @param mixed $name
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.hasmethod.php
     */
    public function hasMethod($name)
    {
    }

    /**
     * Checks if property is defined
     *
     * @param mixed $name
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.hasproperty.php
     */
    public function hasProperty($name)
    {
    }

    /**
     * Implements interface
     *
     * @param mixed $interface
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.implementsinterface.php
     */
    public function implementsInterface($interface)
    {
    }

    /**
     * Checks if in namespace
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.innamespace.php
     */
    public function inNamespace()
    {
    }

    /**
     * Checks if class is abstract
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.isabstract.php
     */
    public function isAbstract()
    {
    }

    /**
     * Returns whether this class is cloneable
     *
     * @return bool
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.iscloneable.php
     */
    public function isCloneable()
    {
    }

    /**
     * Checks if class is final
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.isfinal.php
     */
    public function isFinal()
    {
    }

    /**
     * Checks class for instance
     *
     * @param mixed $object
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.isinstance.php
     */
    public function isInstance($object)
    {
    }

    /**
     * Checks if the class is instantiable
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.isinstantiable.php
     */
    public function isInstantiable()
    {
    }

    /**
     * Checks if the class is an interface
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.isinterface.php
     */
    public function isInterface()
    {
    }

    /**
     * Checks if class is defined internally by an extension, or the core
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.isinternal.php
     */
    public function isInternal()
    {
    }

    /**
     * Checks if iterateable
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.isiterateable.php
     */
    public function isIterateable()
    {
    }

    /**
     * Checks if a subclass
     *
     * @param mixed $class
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.issubclassof.php
     */
    public function isSubclassOf($class)
    {
    }

    /**
     * Returns whether this is a trait
     *
     * @return bool
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.istrait.php
     */
    public function isTrait()
    {
    }

    /**
     * Checks if user defined
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.isuserdefined.php
     */
    public function isUserDefined()
    {
    }

    /**
     * Creates a new class instance from given arguments
     *
     * @param mixed $args
     *
     * @return mixed
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.newinstance.php
     */
    public function newInstance($args)
    {
    }

    /**
     * Creates a new class instance from given arguments
     *
     * @param array|null $args
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.3, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.newinstanceargs.php
     */
    public function newInstanceArgs(array $args = null)
    {
    }

    /**
     * Creates a new class instance without invoking the constructor
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.newinstancewithoutconstructor.php
     */
    public function newInstanceWithoutConstructor()
    {
    }

    /**
     * Sets static property value
     *
     * @param mixed $name
     * @param mixed $value
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.setstaticpropertyvalue.php
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
 * information about an extension.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.reflectionextension.php
 */
class ReflectionExtension implements Reflector
{
    /**
     * Clones
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionextension.clone.php
     */
    final private function __clone()
    {
    }

    /**
     * Constructs a ReflectionExtension
     *
     * @param mixed $name
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionextension.construct.php
     */
    public function __construct($name)
    {
    }

    /**
     * To string
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionextension.tostring.php
     */
    public function __toString()
    {
    }

    /**
     * Export
     *
     * @param mixed $name
     * @param mixed|null $return
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionextension.export.php
     */
    public static function export($name, $return = null)
    {
    }

    /**
     * Gets classes
     *
     * @return array
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionextension.getclasses.php
     */
    public function getClasses()
    {
    }

    /**
     * Gets class names
     *
     * @return array
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionextension.getclassnames.php
     */
    public function getClassNames()
    {
    }

    /**
     * Gets constants
     *
     * @return array
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionextension.getconstants.php
     */
    public function getConstants()
    {
    }

    /**
     * Gets dependencies
     *
     * @return array
     *
     * @since PHP 5 >= 5.1.3, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionextension.getdependencies.php
     */
    public function getDependencies()
    {
    }

    /**
     * Gets extension functions
     *
     * @return array
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionextension.getfunctions.php
     */
    public function getFunctions()
    {
    }

    /**
     * Gets extension ini entries
     *
     * @return array
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionextension.getinientries.php
     */
    public function getINIEntries()
    {
    }

    /**
     * Gets extension name
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionextension.getname.php
     */
    public function getName()
    {
    }

    /**
     * Gets extension version
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionextension.getversion.php
     */
    public function getVersion()
    {
    }

    /**
     * Print extension info
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.4, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionextension.info.php
     */
    public function info()
    {
    }

    /**
     * Returns whether this extension is persistent
     *
     * @return void
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionextension.ispersistent.php
     */
    public function isPersistent()
    {
    }

    /**
     * Returns whether this extension is temporary
     *
     * @return void
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionextension.istemporary.php
     */
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
     * @var int
     */
    const IS_DEPRECATED = 262144;

    /**
     * Constructs a ReflectionFunction object
     *
     * @param mixed $name
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunction.construct.php
     */
    public function __construct($name)
    {
    }

    /**
     * To string
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunction.tostring.php
     */
    public function __toString()
    {
    }

    /**
     * Exports function
     *
     * @param mixed $name
     * @param mixed|null $return
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunction.export.php
     */
    public static function export($name, $return = null)
    {
    }

    /**
     * Returns a dynamically created closure for the function
     *
     * @return Closure
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunction.getclosure.php
     */
    public function getClosure()
    {
    }

    /**
     * Invokes function
     *
     * @param mixed|null $args
     *
     * @return mixed
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunction.invoke.php
     */
    public function invoke($args = null)
    {
    }

    /**
     * Invokes function args
     *
     * @param array $args
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunction.invokeargs.php
     */
    public function invokeArgs(array $args)
    {
    }

    /**
     * Checks if function is disabled
     *
     * @return bool
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunction.isdisabled.php
     */
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
    /**
     * Clones function
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.clone.php
     */
    final private function __clone()
    {
    }

    /**
     * To string
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.tostring.php
     */
    abstract public function __toString();

    /**
     * Returns the scope associated to the closure
     *
     * @return ReflectionClass
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.getclosurescopeclass.php
     */
    public function getClosureScopeClass()
    {
    }

    /**
     * Returns this pointer bound to closure
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.getclosurethis.php
     */
    public function getClosureThis()
    {
    }

    /**
     * Gets doc comment
     *
     * @return string
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.getdoccomment.php
     */
    public function getDocComment()
    {
    }

    /**
     * Gets end line number
     *
     * @return int
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.getendline.php
     */
    public function getEndLine()
    {
    }

    /**
     * Gets extension info
     *
     * @return ReflectionExtension
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.getextension.php
     */
    public function getExtension()
    {
    }

    /**
     * Gets extension name
     *
     * @return string
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.getextensionname.php
     */
    public function getExtensionName()
    {
    }

    /**
     * Gets file name
     *
     * @return string
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.getfilename.php
     */
    public function getFileName()
    {
    }

    /**
     * Gets function name
     *
     * @return string
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.getname.php
     */
    public function getName()
    {
    }

    /**
     * Gets namespace name
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.getnamespacename.php
     */
    public function getNamespaceName()
    {
    }

    /**
     * Gets number of parameters
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.getnumberofparameters.php
     */
    public function getNumberOfParameters()
    {
    }

    /**
     * Gets number of required parameters
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.getnumberofrequiredparameters.php
     */
    public function getNumberOfRequiredParameters()
    {
    }

    /**
     * Gets parameters
     *
     * @return array
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.getparameters.php
     */
    public function getParameters()
    {
    }

    /**
     * Gets function short name
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.getshortname.php
     */
    public function getShortName()
    {
    }

    /**
     * Gets starting line number
     *
     * @return int
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.getstartline.php
     */
    public function getStartLine()
    {
    }

    /**
     * Gets static variables
     *
     * @return array
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.getstaticvariables.php
     */
    public function getStaticVariables()
    {
    }

    /**
     * Checks if function in namespace
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.innamespace.php
     */
    public function inNamespace()
    {
    }

    /**
     * Checks if closure
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.isclosure.php
     */
    public function isClosure()
    {
    }

    /**
     * Checks if deprecated
     *
     * @return bool
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.isdeprecated.php
     */
    public function isDeprecated()
    {
    }

    /**
     * Returns whether this function is a generator
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.isgenerator.php
     */
    public function isGenerator()
    {
    }

    /**
     * Checks if is internal
     *
     * @return bool
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.isinternal.php
     */
    public function isInternal()
    {
    }

    /**
     * Checks if user defined
     *
     * @return bool
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.isuserdefined.php
     */
    public function isUserDefined()
    {
    }

    /**
     * Checks if the function is variadic
     *
     * @return bool
     *
     * @since PHP 5 >= 5.6.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.isvariadic.php
     */
    public function isVariadic()
    {
    }

    /**
     * Checks if returns reference
     *
     * @return bool
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.returnsreference.php
     */
    public function returnsReference()
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
     * @var int
     */
    const IS_ABSTRACT = 2;

    /**
     * @var int
     */
    const IS_FINAL = 4;

    /**
     * @var int
     */
    const IS_PRIVATE = 1024;

    /**
     * @var int
     */
    const IS_PROTECTED = 512;

    /**
     * @var int
     */
    const IS_PUBLIC = 256;

    /**
     * @var int
     */
    const IS_STATIC = 1;

    /**
     * Constructs a ReflectionMethod
     *
     * @param mixed $class_or_method
     * @param mixed|null $name
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.construct.php
     */
    public function __construct($class_or_method, $name = null)
    {
    }

    /**
     * Returns the string representation of the Reflection method object
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.tostring.php
     */
    public function __toString()
    {
    }

    /**
     * Export a reflection method
     *
     * @param mixed $class
     * @param mixed $name
     * @param mixed|null $return
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.export.php
     */
    public static function export($class, $name, $return = null)
    {
    }

    /**
     * Returns a dynamically created closure for the method
     *
     * @param mixed $object
     *
     * @return Closure
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.getclosure.php
     */
    public function getClosure($object)
    {
    }

    /**
     * Gets declaring class for the reflected method
     *
     * @return ReflectionClass
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.getdeclaringclass.php
     */
    public function getDeclaringClass()
    {
    }

    /**
     * Gets the method modifiers
     *
     * @return int
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.getmodifiers.php
     */
    public function getModifiers()
    {
    }

    /**
     * Gets the method prototype (if there is one)
     *
     * @return ReflectionMethod
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.getprototype.php
     */
    public function getPrototype()
    {
    }

    /**
     * Invoke
     *
     * @param mixed $object
     * @param mixed $args
     *
     * @return mixed
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.invoke.php
     */
    public function invoke($object, $args)
    {
    }

    /**
     * Invoke args
     *
     * @param mixed $object
     * @param array $args
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.invokeargs.php
     */
    public function invokeArgs($object, array $args)
    {
    }

    /**
     * Checks if method is abstract
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.isabstract.php
     */
    public function isAbstract()
    {
    }

    /**
     * Checks if method is a constructor
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.isconstructor.php
     */
    public function isConstructor()
    {
    }

    /**
     * Checks if method is a destructor
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.isdestructor.php
     */
    public function isDestructor()
    {
    }

    /**
     * Checks if method is final
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.isfinal.php
     */
    public function isFinal()
    {
    }

    /**
     * Checks if method is private
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.isprivate.php
     */
    public function isPrivate()
    {
    }

    /**
     * Checks if method is protected
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.isprotected.php
     */
    public function isProtected()
    {
    }

    /**
     * Checks if method is public
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.ispublic.php
     */
    public function isPublic()
    {
    }

    /**
     * Checks if method is static
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.isstatic.php
     */
    public function isStatic()
    {
    }

    /**
     * Set method accessibility
     *
     * @param mixed $value
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.2, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.setaccessible.php
     */
    public function setAccessible($value)
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
     * Constructs a ReflectionObject
     *
     * @param mixed $argument
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionobject.construct.php
     */
    public function __construct($argument)
    {
    }

    /**
     * Export
     *
     * @param mixed $argument
     * @param mixed|null $return
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionobject.export.php
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
    /**
     * Clone
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.clone.php
     */
    final private function __clone()
    {
    }

    /**
     * Construct
     *
     * @param mixed $function
     * @param mixed $parameter
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.construct.php
     */
    public function __construct($function, $parameter)
    {
    }

    /**
     * To string
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.tostring.php
     */
    public function __toString()
    {
    }

    /**
     * Checks if null is allowed
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.allowsnull.php
     */
    public function allowsNull()
    {
    }

    /**
     * Returns whether this parameter can be passed by value
     *
     * @return bool
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.canbepassedbyvalue.php
     */
    public function canBePassedByValue()
    {
    }

    /**
     * Exports
     *
     * @param mixed $function
     * @param mixed $parameter
     * @param mixed|null $return
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.export.php
     */
    public static function export($function, $parameter, $return = null)
    {
    }

    /**
     * Get the type hinted class
     *
     * @return ReflectionClass
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.getclass.php
     */
    public function getClass()
    {
    }

    /**
     * Gets declaring class
     *
     * @return ReflectionClass
     *
     * @since PHP 5 >= 5.1.3, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.getdeclaringclass.php
     */
    public function getDeclaringClass()
    {
    }

    /**
     * Gets declaring function
     *
     * @return ReflectionFunctionAbstract
     *
     * @since PHP 5 >= 5.1.3, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.getdeclaringfunction.php
     */
    public function getDeclaringFunction()
    {
    }

    /**
     * Gets default parameter value
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.0.3, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.getdefaultvalue.php
     */
    public function getDefaultValue()
    {
    }

    /**
     * Returns the default value's constant name if default value is constant or null
     *
     * @return string
     *
     * @since PHP 5 >= 5.4.6, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.getdefaultvalueconstantname.php
     */
    public function getDefaultValueConstantName()
    {
    }

    /**
     * Gets parameter name
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.getname.php
     */
    public function getName()
    {
    }

    /**
     * Gets parameter position
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.3, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.getposition.php
     */
    public function getPosition()
    {
    }

    /**
     * Checks if parameter expects an array
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.isarray.php
     */
    public function isArray()
    {
    }

    /**
     * Returns whether parameter MUST be callable
     *
     * @return bool
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.iscallable.php
     */
    public function isCallable()
    {
    }

    /**
     * Checks if a default value is available
     *
     * @return bool
     *
     * @since PHP 5 >= 5.0.3, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.isdefaultvalueavailable.php
     */
    public function isDefaultValueAvailable()
    {
    }

    /**
     * Returns whether the default value of this parameter is constant
     *
     * @return bool
     *
     * @since PHP 5 >= 5.4.6, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.isdefaultvalueconstant.php
     */
    public function isDefaultValueConstant()
    {
    }

    /**
     * Checks if optional
     *
     * @return bool
     *
     * @since PHP 5 >= 5.0.3, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.isoptional.php
     */
    public function isOptional()
    {
    }

    /**
     * Checks if passed by reference
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.ispassedbyreference.php
     */
    public function isPassedByReference()
    {
    }

    /**
     * Checks if the parameter is variadic
     *
     * @return bool
     *
     * @since PHP 5 >= 5.6.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.isvariadic.php
     */
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
    /**
     * @var int
     */
    const IS_PRIVATE = 1024;

    /**
     * @var int
     */
    const IS_PROTECTED = 512;

    /**
     * @var int
     */
    const IS_PUBLIC = 256;

    /**
     * @var int
     */
    const IS_STATIC = 1;

    /**
     * Clone
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionproperty.clone.php
     */
    final private function __clone()
    {
    }

    /**
     * Construct a ReflectionProperty object
     *
     * @param mixed $class
     * @param mixed $name
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionproperty.construct.php
     */
    public function __construct($class, $name)
    {
    }

    /**
     * To string
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionproperty.tostring.php
     */
    public function __toString()
    {
    }

    /**
     * Export
     *
     * @param mixed $class
     * @param mixed $name
     * @param mixed|null $return
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionproperty.export.php
     */
    public static function export($class, $name, $return = null)
    {
    }

    /**
     * Gets declaring class
     *
     * @return ReflectionClass
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionproperty.getdeclaringclass.php
     */
    public function getDeclaringClass()
    {
    }

    /**
     * Gets the property doc comment
     *
     * @return string
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionproperty.getdoccomment.php
     */
    public function getDocComment()
    {
    }

    /**
     * Gets the property modifiers
     *
     * @return int
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionproperty.getmodifiers.php
     */
    public function getModifiers()
    {
    }

    /**
     * Gets property name
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionproperty.getname.php
     */
    public function getName()
    {
    }

    /**
     * Gets value
     *
     * @param mixed|null $object
     *
     * @return mixed
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionproperty.getvalue.php
     */
    public function getValue($object = null)
    {
    }

    /**
     * Checks if property is a default property
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionproperty.isdefault.php
     */
    public function isDefault()
    {
    }

    /**
     * Checks if property is private
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionproperty.isprivate.php
     */
    public function isPrivate()
    {
    }

    /**
     * Checks if property is protected
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionproperty.isprotected.php
     */
    public function isProtected()
    {
    }

    /**
     * Checks if property is public
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionproperty.ispublic.php
     */
    public function isPublic()
    {
    }

    /**
     * Checks if property is static
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionproperty.isstatic.php
     */
    public function isStatic()
    {
    }

    /**
     * Set property accessibility
     *
     * @param mixed $visible
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionproperty.setaccessible.php
     */
    public function setAccessible($visible)
    {
    }

    /**
     * Set property value
     *
     * @param mixed $object
     * @param mixed|null $value
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionproperty.setvalue.php
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
    /**
     * Clone handler
     *
     * @return void
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionzendextension.clone.php
     */
    final private function __clone()
    {
    }

    /**
     * Constructor
     *
     * @param mixed $name
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionzendextension.construct.php
     */
    public function __construct($name)
    {
    }

    /**
     * To string handler
     *
     * @return string
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionzendextension.tostring.php
     */
    public function __toString()
    {
    }

    /**
     * Export
     *
     * @param mixed $name
     * @param mixed|null $return
     *
     * @return string
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionzendextension.export.php
     */
    public static function export($name, $return = null)
    {
    }

    /**
     * Gets author
     *
     * @return string
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionzendextension.getauthor.php
     */
    public function getAuthor()
    {
    }

    /**
     * Gets copyright
     *
     * @return string
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionzendextension.getcopyright.php
     */
    public function getCopyright()
    {
    }

    /**
     * Gets name
     *
     * @return string
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionzendextension.getname.php
     */
    public function getName()
    {
    }

    /**
     * Gets URL
     *
     * @return string
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionzendextension.geturl.php
     */
    public function getURL()
    {
    }

    /**
     * Gets version
     *
     * @return string
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionzendextension.getversion.php
     */
    public function getVersion()
    {
    }
}
