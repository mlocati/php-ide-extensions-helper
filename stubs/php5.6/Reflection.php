<?php
// Start of extension: Reflection
// - parsed on POSIX with PHP 5.6.35 (extension version $Id: 5f15287237d5f78d75b19c26915aa7bd83dee8b8 $)
// - parsed on Windows with PHP 5.6.35 (extension version $Id: 5f15287237d5f78d75b19c26915aa7bd83dee8b8 $)

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
     * @param Reflector $reflector The reflection to export.
     * @param bool|null $return Setting to <code>TRUE</code> will return the export,
     * as opposed to emitting it. Setting to <code>FALSE</code> (the default) will do the opposite.
     *
     * @return string If the <code>return</code> parameter
     * is set to <code>TRUE</code>, then the export is returned as a <code>string</code>,
     * otherwise <code>NULL</code> is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflection.export.php
     */
    public static function export(Reflector $reflector, $return = false)
    {
    }

    /**
     * Gets modifier names
     *
     * @param int $modifiers Bitfield of the modifiers to get.
     *
     * @return array An array of modifier names.
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
     * Indicates class that is
     * abstract because of its definition.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.reflectionclass.php#reflectionclass.constants
     */
    const IS_EXPLICIT_ABSTRACT = 32;

    /**
     * Indicates final
     * class.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.reflectionclass.php#reflectionclass.constants
     */
    const IS_FINAL = 64;

    /**
     * Indicates class that is
     * abstract because it has some abstract methods.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.reflectionclass.php#reflectionclass.constants
     */
    const IS_IMPLICIT_ABSTRACT = 16;

    /**
     * Name of the class. Read-only, throws
     * <code>ReflectionException</code> in attempt to write.
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.reflectionclass.php#reflectionclass.props
     */
    public $name = '';

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
     * @return string A string representation of this <code>ReflectionClass</code> instance.
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
     * @param mixed $argument The reflection to export.
     * @param bool|null $return Setting to <code>TRUE</code> will return the export,
     * as opposed to emitting it. Setting to <code>FALSE</code> (the default) will do the opposite.
     *
     * @return string If the <code>return</code> parameter
     * is set to <code>TRUE</code>, then the export is returned as a <code>string</code>,
     * otherwise <code>NULL</code> is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.export.php
     */
    public static function export($argument, $return = false)
    {
    }

    /**
     * Gets defined constant
     *
     * @param string $name Name of the constant.
     *
     * @return mixed Value of the constant.
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
     * @return array An <code>array</code> of constants, where the keys hold the name
     * and the values the value of the constants.
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
     * @return ReflectionMethod A <code>ReflectionMethod</code> object reflecting the class' constructor, or <code>NULL</code> if the class
     * has no constructor.
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
     * @return array An <code>array</code> of default properties, with the key being the name of
     * the property and the value being the default value of the property or <code>NULL</code>
     * if the property doesn't have a default value. The function does not distinguish
     * between static and non static properties and does not take visibility modifiers
     * into account.
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
     * @return string The doc comment if it exists, otherwise <code>FALSE</code>
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
     * @return int The ending line number of the user defined class, or <code>FALSE</code> if unknown.
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
     * @return ReflectionExtension A <code>ReflectionExtension</code> object representing the extension which defined the class,
     * or <code>NULL</code> for user-defined classes.
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
     * @return string The name of the extension which defined the class, or <code>FALSE</code> for user-defined classes.
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
     * @return string Returns the filename of the file in which the class has been defined.
     * If the class is defined in the PHP core or in a PHP extension, <code>FALSE</code>
     * is returned.
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
     * @return array A numerical array with interface names as the values.
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
     * @return array An associative <code>array</code> of interfaces, with keys as interface
     * names and the array values as <code>ReflectionClass</code> objects.
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
     * @param string $name The method name to reflect.
     *
     * @return ReflectionMethod A <code>ReflectionMethod</code>.
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
     * @param int $filter Filter the results to include only methods with certain attributes. Defaults
     * to no filtering.
     *
     * @return array An <code>array</code> of <code>ReflectionMethod</code> objects
     * reflecting each method.
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
     * @return int Returns bitmask of
     * modifier constants.
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
     * @return string The class name.
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
     * @return string The namespace name.
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
     * @return ReflectionClass A <code>ReflectionClass</code> or <code>NULL</code> if there's no parent.
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
     * @param int $filter The optional filter, for filtering desired property types. It's configured using
     * the ReflectionProperty constants,
     * and defaults to all property types.
     *
     * @return array An array of <code>ReflectionProperty</code> objects.
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
     * @param string $name The property name.
     *
     * @return ReflectionProperty A <code>ReflectionProperty</code>.
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
     * @return string The class short name.
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
     * @return int The starting line number, as an <code>integer</code>.
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
     * @return array The static properties, as an <code>array</code>.
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
     * @param string $name The name of the static property for which to return a value.
     * @param mixed $def_value A default value to return in case the class does not declare a static
     * property with the given <code>name</code>. If the property does
     * not exist and this argument is omitted, a
     * <code>ReflectionException</code> is thrown.
     *
     * @return mixed The value of the static property.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.getstaticpropertyvalue.php
     */
    public function getStaticPropertyValue($name, $def_value = null)
    {
    }

    /**
     * Returns an array of trait aliases
     *
     * @return array Returns an array with new method names in keys and original names (in the
     * format <code>"TraitName::original"</code>) in values.
     * Returns <code>NULL</code> in case of an error.
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
     * @return array Returns an array with trait names in values.
     * Returns <code>NULL</code> in case of an error.
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
     * @return array Returns an array with trait names in keys and instances of trait's
     * <code>ReflectionClass</code> in values.
     * Returns <code>NULL</code> in case of an error.
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
     * @param string $name The name of the constant being checked for.
     *
     * @return bool <code>TRUE</code> if the constant is defined, otherwise <code>FALSE</code>.
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
     * @param string $name Name of the method being checked for.
     *
     * @return bool <code>TRUE</code> if it has the method, otherwise <code>FALSE</code>
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
     * @param string $name Name of the property being checked for.
     *
     * @return bool <code>TRUE</code> if it has the property, otherwise <code>FALSE</code>
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
     * @param string $interface The interface name.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @return bool Returns <code>TRUE</code> if the class is cloneable, <code>FALSE</code> otherwise.
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
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @param mixed $object The object being compared to.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @param string $class The class name being checked against.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @return bool Returns <code>TRUE</code> if this is a trait, <code>FALSE</code> otherwise.
     * Returns <code>NULL</code> in case of an error.
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
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @param mixed $args Accepts a variable number of arguments which are passed to the class
     * constructor, much like <code>call_user_func</code>.
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
     * @param array $args The parameters to be passed to the class constructor as an <code>array</code>.
     *
     * @return mixed Returns a new instance of the class.
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
     * @param string $name Property name.
     * @param mixed $value New property value.
     *
     * @return void No value is returned.
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
     * Name of the extension, same as calling the
     * <code>ReflectionExtension::getName</code>
     * method.
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.reflectionextension.php#reflectionextension.props
     */
    public $name = '';

    /**
     * Clones
     *
     * @return void No value is returned, if called a fatal error will occur.
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
     * @return string Returns the exported extension as a string, in the same way as the
     * <code>ReflectionExtension::export</code>.
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
     * @param string $name The reflection to export.
     * @param string|null $return Setting to <code>TRUE</code> will return the export,
     * as opposed to emitting it. Setting to <code>FALSE</code> (the default) will do the opposite.
     *
     * @return string If the <code>return</code> parameter
     * is set to <code>TRUE</code>, then the export is returned as a <code>string</code>,
     * otherwise <code>NULL</code> is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionextension.export.php
     */
    public static function export($name, $return = false)
    {
    }

    /**
     * Gets classes
     *
     * @return array An array of <code>ReflectionClass</code> objects, one
     * for each class within the extension. If no classes are defined,
     * an empty array is returned.
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
     * @return array An <code>array</code> of class names, as defined in the extension.
     * If no classes are defined, an empty array is returned.
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
     * @return array An associative array with constant names as keys.
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
     * @return array An associative <code>array</code> with dependencies as keys and
     * either <code>Required</code>, <code>Optional</code>
     * or <code>Conflicts</code> as the values.
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
     * @return array An associative array of <code>ReflectionFunction</code> objects,
     * for each function defined in the extension with the keys being the function
     * names. If no function are defined, an empty array is returned.
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
     * @return array An associative <code>array</code> with the ini entries as keys,
     * with their defined values as values.
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
     * @return string The extensions name.
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
     * @return string The version of the extension.
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
     * @return void Information about the extension.
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
     * @return void Returns <code>TRUE</code> for extensions loaded by <code>extension</code>, <code>FALSE</code>
     * otherwise.
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
     * @return void Returns <code>TRUE</code> for extensions loaded by <code>dl</code>,
     * <code>FALSE</code> otherwise.
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
     * Indicates deprecated functions.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.reflectionfunction.php#reflectionfunction.constants
     */
    const IS_DEPRECATED = 262144;

    /**
     * Name of the function. Read-only, throws
     * <code>ReflectionException</code> in attempt to write.
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.reflectionfunction.php#reflectionfunction.props
     */
    public $name = '';

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
     * @return string Returns <code>ReflectionFunction::export</code>-like output for
     * the function.
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
     * @param string $name The reflection to export.
     * @param string $return Setting to <code>TRUE</code> will return the export,
     * as opposed to emitting it. Setting to <code>FALSE</code> (the default) will do the opposite.
     *
     * @return string If the <code>return</code> parameter
     * is set to <code>TRUE</code>, then the export is returned as a <code>string</code>,
     * otherwise <code>NULL</code> is returned.
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
     * @return Closure Returns <code>Closure</code>.
     * Returns <code>NULL</code> in case of an error.
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
     * @param mixed $parameter
     *
     * @return mixed Returns the result of the invoked function call.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunction.invoke.php
     */
    public function invoke($parameter = null)
    {
    }

    /**
     * Invokes function args
     *
     * @param array $args The passed arguments to the function as an array, much like
     * <code>call_user_func_array</code> works.
     *
     * @return mixed Returns the result of the invoked function
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
     * @return bool <code>TRUE</code> if it's disable, otherwise <code>FALSE</code>
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
     * Name of the function. Read-only, throws
     * <code>ReflectionException</code> in attempt to write.
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.reflectionfunctionabstract.php#reflectionfunctionabstract.props
     */
    public $name = '';

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
     * @return void The string.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.tostring.php
     */
    abstract public function __toString();

    /**
     * Returns the scope associated to the closure
     *
     * @return ReflectionClass Returns the class on success or <code>NULL</code> on failure.
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
     * @return mixed Returns <code>$this</code> pointer.
     * Returns <code>NULL</code> in case of an error.
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
     * @return string The doc comment if it exists, otherwise <code>FALSE</code>
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
     * @return int The ending line number of the user defined function, or <code>FALSE</code> if unknown.
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
     * @return ReflectionExtension The extension information, as a <code>ReflectionExtension</code> object.
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
     * @return string The extensions name.
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
     * @return string The file name.
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
     * @return string The name of the function.
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
     * @return string The namespace name.
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
     * @return int The number of parameters.
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
     * @return int The number of required parameters.
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
     * @return array The parameters, as a <code>ReflectionParameter</code> object.
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
     * @return string The short name of the function.
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
     * @return int The starting line number.
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
     * @return array An <code>array</code> of static variables.
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
     * @return bool <code>TRUE</code> if it's in a namespace, otherwise <code>FALSE</code>
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
     * @return bool Returns <code>TRUE</code> if the function is a <code>Closure</code>, otherwise <code>FALSE</code>.
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
     * @return bool <code>TRUE</code> if it's deprecated, otherwise <code>FALSE</code>
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
     * @return bool Returns <code>TRUE</code> if the function is generator, <code>FALSE</code> if it is not or <code>NULL</code>
     * on failure.
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
     * @return bool <code>TRUE</code> if it's internal, otherwise <code>FALSE</code>
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
     * @return bool <code>TRUE</code> if it's user-defined, otherwise false;
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
     * @return bool Returns <code>TRUE</code> if the function is variadic, otherwise <code>FALSE</code>.
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
     * @return bool <code>TRUE</code> if it returns a reference, otherwise <code>FALSE</code>
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
     * Indicates that the method is abstract.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.reflectionmethod.php#reflectionmethod.constants
     */
    const IS_ABSTRACT = 2;

    /**
     * Indicates that the method is final.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.reflectionmethod.php#reflectionmethod.constants
     */
    const IS_FINAL = 4;

    /**
     * Indicates that the method is private.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.reflectionmethod.php#reflectionmethod.constants
     */
    const IS_PRIVATE = 1024;

    /**
     * Indicates that the method is protected.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.reflectionmethod.php#reflectionmethod.constants
     */
    const IS_PROTECTED = 512;

    /**
     * Indicates that the method is public.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.reflectionmethod.php#reflectionmethod.constants
     */
    const IS_PUBLIC = 256;

    /**
     * Indicates that the method is static.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.reflectionmethod.php#reflectionmethod.constants
     */
    const IS_STATIC = 1;

    /**
     * Class name
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.reflectionmethod.php#reflectionmethod.props
     */
    public $class = '';

    /**
     * Method name
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.reflectionmethod.php#reflectionmethod.props
     */
    public $name = '';

    /**
     * Constructs a ReflectionMethod
     *
     * @param mixed $class_or_method
     * @param mixed $name
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
     * @return string A string representation of this <code>ReflectionMethod</code> instance.
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
     * @param string $class The class name.
     * @param string $name The name of the method.
     * @param bool|null $return Setting to <code>TRUE</code> will return the export,
     * as opposed to emitting it. Setting to <code>FALSE</code> (the default) will do the opposite.
     *
     * @return string If the <code>return</code> parameter
     * is set to <code>TRUE</code>, then the export is returned as a <code>string</code>,
     * otherwise <code>NULL</code> is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.export.php
     */
    public static function export($class, $name, $return = false)
    {
    }

    /**
     * Returns a dynamically created closure for the method
     *
     * @param mixed $object Forbidden for static methods, required for other methods.
     *
     * @return Closure Returns <code>Closure</code>.
     * Returns <code>NULL</code> in case of an error.
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
     * @return ReflectionClass A <code>ReflectionClass</code> object of the class that the
     * reflected method is part of.
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
     * @return int A numeric representation of the modifiers. The modifiers are listed below.
     * The actual meanings of these modifiers are described in the
     * predefined constants.
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
     * @return ReflectionMethod A <code>ReflectionMethod</code> instance of the method prototype.
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
     * @param mixed $object The object to invoke the method on. For static methods, pass
     * <code>null</code> to this parameter.
     * @param mixed $parameter Zero or more parameters to be passed to the method.
     * It accepts a variable number of parameters which are passed to the method.
     *
     * @return mixed Returns the method result.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.invoke.php
     */
    public function invoke($object, $parameter)
    {
    }

    /**
     * Invoke args
     *
     * @param mixed $object The object to invoke the method on. In case of static methods, you can pass
     * <code>null</code> to this parameter.
     * @param array $args The parameters to be passed to the function, as an <code>array</code>.
     *
     * @return mixed Returns the method result.
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
     * @return bool <code>TRUE</code> if the method is abstract, otherwise <code>FALSE</code>
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
     * @return bool <code>TRUE</code> if the method is a constructor, otherwise <code>FALSE</code>
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
     * @return bool <code>TRUE</code> if the method is a destructor, otherwise <code>FALSE</code>
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
     * @return bool <code>TRUE</code> if the method is final, otherwise <code>FALSE</code>
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
     * @return bool <code>TRUE</code> if the method is private, otherwise <code>FALSE</code>
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
     * @return bool <code>TRUE</code> if the method is protected, otherwise <code>FALSE</code>
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
     * @return bool <code>TRUE</code> if the method is public, otherwise <code>FALSE</code>
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
     * @return bool <code>TRUE</code> if the method is static, otherwise <code>FALSE</code>
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
     * @param bool $accessible <code>TRUE</code> to allow accessibility, or <code>FALSE</code>.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.2, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.setaccessible.php
     */
    public function setAccessible($accessible)
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
     * @param string $argument The reflection to export.
     * @param bool $return Setting to <code>TRUE</code> will return the export,
     * as opposed to emitting it. Setting to <code>FALSE</code> (the default) will do the opposite.
     *
     * @return string If the <code>return</code> parameter
     * is set to <code>TRUE</code>, then the export is returned as a <code>string</code>,
     * otherwise <code>NULL</code> is returned.
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
     * Name of the parameter. Read-only, throws
     * <code>ReflectionException</code> in attempt to write.
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.reflectionparameter.php#reflectionparameter.props
     */
    public $name = '';

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
     * @return bool <code>TRUE</code> if <code>NULL</code> is allowed, otherwise <code>FALSE</code>
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
     * @return bool Returns <code>TRUE</code> if the parameter can be passed by value, <code>FALSE</code> otherwise.
     * Returns <code>NULL</code> in case of an error.
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
     * @param string $function The function name.
     * @param string $parameter The parameter name.
     * @param bool $return Setting to <code>TRUE</code> will return the export,
     * as opposed to emitting it. Setting to <code>FALSE</code> (the default) will do the opposite.
     *
     * @return string The exported reflection.
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
     * @return ReflectionClass A <code>ReflectionClass</code> object.
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
     * @return ReflectionClass A <code>ReflectionClass</code> object or <code>NULL</code> if called on function.
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
     * @return ReflectionFunctionAbstract A <code>ReflectionFunction</code> object.
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
     * @return mixed The parameters default value.
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
     * @return string Returns string on success or <code>NULL</code> on failure.
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
     * @return string The name of the reflected parameter.
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
     * @return int The position of the parameter, left to right, starting at position #0.
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
     * @return bool <code>TRUE</code> if an <code>array</code> is expected, <code>FALSE</code> otherwise.
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
     * @return bool Returns <code>TRUE</code> if the parameter is <code>callable</code>, <code>FALSE</code> if it is
     * not or <code>NULL</code> on failure.
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
     * @return bool <code>TRUE</code> if a default value is available, otherwise <code>FALSE</code>
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
     * @return bool Returns <code>TRUE</code> if the default value is constant, <code>FALSE</code> if it is not or
     * <code>NULL</code> on failure.
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
     * @return bool <code>TRUE</code> if the parameter is optional, otherwise <code>FALSE</code>
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
     * @return bool <code>TRUE</code> if the parameter is passed in by reference, otherwise <code>FALSE</code>
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
     * @return bool Returns <code>TRUE</code> if the parameter is variadic, otherwise <code>FALSE</code>.
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
     * Indicates private
     * properties.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.reflectionproperty.php#reflectionproperty.constants
     */
    const IS_PRIVATE = 1024;

    /**
     * Indicates protected
     * properties.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.reflectionproperty.php#reflectionproperty.constants
     */
    const IS_PROTECTED = 512;

    /**
     * Indicates public
     * properties.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.reflectionproperty.php#reflectionproperty.constants
     */
    const IS_PUBLIC = 256;

    /**
     * Indicates static
     * properties.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.reflectionproperty.php#reflectionproperty.constants
     */
    const IS_STATIC = 1;

    /**
     * Name of the class where the property is defined. Read-only, throws
     * <code>ReflectionException</code> in attempt to write.
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.reflectionproperty.php#reflectionproperty.props
     */
    public $class = '';

    /**
     * Name of the property. Read-only, throws
     * <code>ReflectionException</code> in attempt to write.
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.reflectionproperty.php#reflectionproperty.props
     */
    public $name = '';

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
     * @param string $name The property name.
     * @param bool $return Setting to <code>TRUE</code> will return the export,
     * as opposed to emitting it. Setting to <code>FALSE</code> (the default) will do the opposite.
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
     * @return ReflectionClass A <code>ReflectionClass</code> object.
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
     * @return string The property doc comment.
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
     * @return int A numeric representation of the modifiers.
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
     * @return string The name of the reflected property.
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
     * @param mixed $object If the property is non-static an object must be provided to fetch the
     * property from. If you want to fetch the default property without
     * providing an object use <code>ReflectionClass::getDefaultProperties</code>
     * instead.
     *
     * @return mixed The current value of the property.
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
     * @return bool <code>TRUE</code> if the property was declared at compile-time, or <code>FALSE</code> if
     * it was created at run-time.
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
     * @return bool <code>TRUE</code> if the property is private, <code>FALSE</code> otherwise.
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
     * @return bool <code>TRUE</code> if the property is protected, <code>FALSE</code> otherwise.
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
     * @return bool <code>TRUE</code> if the property is public, <code>FALSE</code> otherwise.
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
     * @return bool <code>TRUE</code> if the property is static, <code>FALSE</code> otherwise.
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
     * @param bool $accessible <code>TRUE</code> to allow accessibility, or <code>FALSE</code>.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionproperty.setaccessible.php
     */
    public function setAccessible($accessible)
    {
    }

    /**
     * Set property value
     *
     * @param mixed $object If the property is non-static an object must be provided to change
     * the property on. If the property is static this parameter is left
     * out and only <code>value</code> needs to be provided.
     * @param mixed $value The new value.
     *
     * @return void No value is returned.
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
     * Name of the extension. Read-only, throws
     * <code>ReflectionException</code> in attempt to write.
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.reflectionzendextension.php#reflectionzendextension.props
     */
    public $name = '';

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
     * @param string $name
     * @param bool $return
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
