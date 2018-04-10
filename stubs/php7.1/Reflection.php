<?php
// Start of extension: Reflection
// - parsed on POSIX with PHP 7.1.16 (extension version 7.1.16)
// - parsed on Windows with PHP 7.1.16 (extension version 7.1.16)

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
    public function __toString(): string;

    /**
     * Exports
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflector.export.php
     */
    public static function export(): string;
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
    public static function export(Reflector $reflector, bool $return = false): string
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
    public static function getModifierNames(int $modifiers): array
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
    const IS_FINAL = 4;

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
    public function __toString(): string
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
    public static function export($argument, bool $return = false): string
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
    public function getConstant(string $name)
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
    public function getConstants(): array
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
    public function getConstructor(): ReflectionMethod
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
    public function getDefaultProperties(): array
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
    public function getDocComment(): string
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
    public function getEndLine(): int
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
    public function getExtension(): ReflectionExtension
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
    public function getExtensionName(): string
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
    public function getFileName(): string
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
    public function getInterfaceNames(): array
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
    public function getInterfaces(): array
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
    public function getMethod(string $name): ReflectionMethod
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
    public function getMethods(int $filter = null): array
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
    public function getModifiers(): int
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
    public function getName(): string
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
    public function getNamespaceName(): string
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
    public function getParentClass(): ReflectionClass
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
    public function getProperties(int $filter = null): array
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
    public function getProperty(string $name): ReflectionProperty
    {
    }

    /**
     * Gets a <code>ReflectionClassConstant</code> for a class's constant
     *
     * @param string $name The class constant name.
     *
     * @return ReflectionClassConstant A <code>ReflectionClassConstant</code>.
     *
     * @since PHP 7 >= 7.1.0
     *
     * @link http://www.php.net/manual/en/reflectionclass.getreflectionconstant.php
     */
    public function getReflectionConstant(string $name): ReflectionClassConstant
    {
    }

    /**
     * Gets class constants
     *
     * @return array An array of <code>ReflectionClassConstant</code> objects.
     *
     * @since PHP 7 >= 7.1.0
     *
     * @link http://www.php.net/manual/en/reflectionclass.getreflectionconstants.php
     */
    public function getReflectionConstants(): array
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
    public function getShortName(): string
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
    public function getStartLine(): int
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
    public function getStaticProperties(): array
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
    public function getStaticPropertyValue(string $name, $def_value = null)
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
    public function getTraitAliases(): array
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
    public function getTraitNames(): array
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
    public function getTraits(): array
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
    public function hasConstant(string $name): bool
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
    public function hasMethod(string $name): bool
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
    public function hasProperty(string $name): bool
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
    public function implementsInterface(string $interface): bool
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
    public function inNamespace(): bool
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
    public function isAbstract(): bool
    {
    }

    /**
     * Checks if class is anonymous
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.isanonymous.php
     */
    public function isAnonymous(): bool
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
    public function isCloneable(): bool
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
    public function isFinal(): bool
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
    public function isInstance($object): bool
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
    public function isInstantiable(): bool
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
    public function isInterface(): bool
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
    public function isInternal(): bool
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
    public function isIterateable(): bool
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
    public function isSubclassOf(string $class): bool
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
    public function isTrait(): bool
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
    public function isUserDefined(): bool
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
    public function setStaticPropertyValue(string $name, $value): void
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
    /**
     * Name of the class where the class constant is defined. Read-only, throws
     * <code>ReflectionException</code> in attempt to write.
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.reflectionclassconstant.php#reflectionclassconstant.props
     */
    public $class = '';

    /**
     * Name of the class constant. Read-only, throws
     * <code>ReflectionException</code> in attempt to write.
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.reflectionclassconstant.php#reflectionclassconstant.props
     */
    public $name = '';

    final private function __clone()
    {
    }

    /**
     * Constructs a ReflectionClassConstant
     *
     * @param mixed $class
     * @param mixed $name
     *
     * @since PHP 7 >= 7.1.0
     *
     * @link http://www.php.net/manual/en/reflectionclassconstant.construct.php
     */
    public function __construct($class, $name)
    {
    }

    /**
     * Returns the string representation of the ReflectionClassConstant object
     *
     * @return string A string representation of this <code>ReflectionClassConstant</code> instance.
     *
     * @since PHP 7 >= 7.1.0
     *
     * @link http://www.php.net/manual/en/reflectionclassconstant.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * Export
     *
     * @param mixed $class The reflection to export.
     * @param string $name The class constant name.
     * @param bool $return Setting to <code>TRUE</code> will return the export,
     * as opposed to emitting it. Setting to <code>FALSE</code> (the default) will do the opposite.
     *
     * @return string
     *
     * @since PHP 7 >= 7.1.0
     *
     * @link http://www.php.net/manual/en/reflectionclassconstant.export.php
     */
    public static function export($class, string $name, bool $return = null): string
    {
    }

    /**
     * Gets declaring class
     *
     * @return ReflectionClass A <code>ReflectionClass</code> object.
     *
     * @since PHP 7 >= 7.1.0
     *
     * @link http://www.php.net/manual/en/reflectionclassconstant.getdeclaringclass.php
     */
    public function getDeclaringClass(): ReflectionClass
    {
    }

    /**
     * Gets doc comments
     *
     * @return string The doc comment if it exists, otherwise <code>FALSE</code>
     *
     * @since PHP 7 >= 7.1.0
     *
     * @link http://www.php.net/manual/en/reflectionclassconstant.getdoccomment.php
     */
    public function getDocComment(): string
    {
    }

    /**
     * Gets the class constant modifiers
     *
     * @return int A numeric representation of the modifiers.
     * The actual meanings of these modifiers are described in the
     * predefined constants.
     *
     * @since PHP 7 >= 7.1.0
     *
     * @link http://www.php.net/manual/en/reflectionclassconstant.getmodifiers.php
     */
    public function getModifiers(): int
    {
    }

    /**
     * Get name of the constant
     *
     * @return string Returns the constant's name.
     *
     * @since PHP 7 >= 7.1.0
     *
     * @link http://www.php.net/manual/en/reflectionclassconstant.getname.php
     */
    public function getName(): string
    {
    }

    /**
     * Gets value
     *
     * @return mixed The value of the class constant.
     *
     * @since PHP 7 >= 7.1.0
     *
     * @link http://www.php.net/manual/en/reflectionclassconstant.getvalue.php
     */
    public function getValue()
    {
    }

    /**
     * Checks if class constant is private
     *
     * @return bool <code>TRUE</code> if the class constant is private, otherwise <code>FALSE</code>
     *
     * @since PHP 7 >= 7.1.0
     *
     * @link http://www.php.net/manual/en/reflectionclassconstant.isprivate.php
     */
    public function isPrivate(): bool
    {
    }

    /**
     * Checks if class constant is protected
     *
     * @return bool <code>TRUE</code> if the class constant is protected, otherwise <code>FALSE</code>
     *
     * @since PHP 7 >= 7.1.0
     *
     * @link http://www.php.net/manual/en/reflectionclassconstant.isprotected.php
     */
    public function isProtected(): bool
    {
    }

    /**
     * Checks if class constant is public
     *
     * @return bool <code>TRUE</code> if the class constant is public, otherwise <code>FALSE</code>
     *
     * @since PHP 7 >= 7.1.0
     *
     * @link http://www.php.net/manual/en/reflectionclassconstant.ispublic.php
     */
    public function isPublic(): bool
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
    final private function __clone(): void
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
    public function __toString(): string
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
    public static function export(string $name, string $return = false): string
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
    public function getClasses(): array
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
    public function getClassNames(): array
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
    public function getConstants(): array
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
    public function getDependencies(): array
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
    public function getFunctions(): array
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
    public function getINIEntries(): array
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
    public function getName(): string
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
    public function getVersion(): string
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
    public function info(): void
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
    public function isPersistent(): void
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
    public function isTemporary(): void
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
    public function __toString(): string
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
    public static function export(string $name, string $return = null): string
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
    public function getClosure(): Closure
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
    public function isDisabled(): bool
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
    final private function __clone(): void
    {
    }

    /**
     * Returns the scope associated to the closure
     *
     * @return ReflectionClass Returns the class on success or <code>NULL</code> on failure.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.getclosurescopeclass.php
     */
    public function getClosureScopeClass(): ReflectionClass
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
    public function getDocComment(): string
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
    public function getEndLine(): int
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
    public function getExtension(): ReflectionExtension
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
    public function getExtensionName(): string
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
    public function getFileName(): string
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
    public function getName(): string
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
    public function getNamespaceName(): string
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
    public function getNumberOfParameters(): int
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
    public function getNumberOfRequiredParameters(): int
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
    public function getParameters(): array
    {
    }

    /**
     * Gets the specified return type of a function
     *
     * @return ReflectionType Returns a <code>ReflectionType</code> object if a return type is
     * specified, <code>NULL</code> otherwise.
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.getreturntype.php
     */
    public function getReturnType(): ReflectionType
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
    public function getShortName(): string
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
    public function getStartLine(): int
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
    public function getStaticVariables(): array
    {
    }

    /**
     * Checks if the function has a specified return type
     *
     * @return bool Returns <code>TRUE</code> if the function is a specified return type, otherwise <code>FALSE</code>.
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.hasreturntype.php
     */
    public function hasReturnType(): bool
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
    public function inNamespace(): bool
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
    public function isClosure(): bool
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
    public function isDeprecated(): bool
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
    public function isGenerator(): bool
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
    public function isInternal(): bool
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
    public function isUserDefined(): bool
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
    public function isVariadic(): bool
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
    public function returnsReference(): bool
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
     * Constructs a ReflectionGenerator object
     *
     * @param mixed $generator
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/reflectiongenerator.construct.php
     */
    public function __construct($generator)
    {
    }

    /**
     * Gets the file name of the currently executing generator
     *
     * @return string Returns the full path and file name of the currently executing generator.
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/reflectiongenerator.getexecutingfile.php
     */
    public function getExecutingFile(): string
    {
    }

    /**
     * Gets the executing <code>Generator</code> object
     *
     * @return Generator Returns the currently executing <code>Generator</code> object.
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/reflectiongenerator.getexecutinggenerator.php
     */
    public function getExecutingGenerator(): Generator
    {
    }

    /**
     * Gets the currently executing line of the generator
     *
     * @return int Returns the line number of the currently executing statement in the generator.
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/reflectiongenerator.getexecutingline.php
     */
    public function getExecutingLine(): int
    {
    }

    /**
     * Gets the function name of the generator
     *
     * @return ReflectionFunctionAbstract Returns a <code>ReflectionFunctionAbstract</code> class. This will
     * be <code>ReflectionFunction</code> for functions, or
     * <code>ReflectionMethod</code> for methods.
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/reflectiongenerator.getfunction.php
     */
    public function getFunction(): ReflectionFunctionAbstract
    {
    }

    /**
     * Gets the <code>$this</code> value of the generator
     *
     * @return mixed Returns the <code>$this</code> value, or <code>NULL</code> if the generator was
     * not created in a class context.
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/reflectiongenerator.getthis.php
     */
    public function getThis()
    {
    }

    /**
     * Gets the trace of the executing generator
     *
     * @param int|null $options The value of <code>options</code> can be any of the following
     * the following flags.
     *
     * @return array Returns the trace of the currently executing generator.
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/reflectiongenerator.gettrace.php
     */
    public function getTrace(int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT): array
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
    public function __toString(): string
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
    public static function export(string $class, string $name, bool $return = false): string
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
    public function getClosure($object): Closure
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
    public function getDeclaringClass(): ReflectionClass
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
    public function getModifiers(): int
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
    public function getPrototype(): ReflectionMethod
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
    public function isAbstract(): bool
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
    public function isConstructor(): bool
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
    public function isDestructor(): bool
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
    public function isFinal(): bool
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
    public function isPrivate(): bool
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
    public function isProtected(): bool
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
    public function isPublic(): bool
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
    public function isStatic(): bool
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
    public function setAccessible(bool $accessible): void
    {
    }
}

/**
 * @link http://www.php.net/manual/en/class.reflectionnamedtype.php
 */
class ReflectionNamedType extends ReflectionType
{
    /**
     * Get the text of the type hint
     *
     * @return string Returns the text of the type hint.
     *
     * @since PHP 7 >= 7.1.0
     *
     * @link http://www.php.net/manual/en/reflectionnamedtype.getname.php
     */
    public function getName(): string
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
    public static function export(string $argument, bool $return = null): string
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
    final private function __clone(): void
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
    public function __toString(): string
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
    public function allowsNull(): bool
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
    public function canBePassedByValue(): bool
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
    public static function export(string $function, string $parameter, bool $return = null): string
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
    public function getClass(): ReflectionClass
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
    public function getDeclaringClass(): ReflectionClass
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
    public function getDeclaringFunction(): ReflectionFunctionAbstract
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
    public function getDefaultValueConstantName(): string
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
    public function getName(): string
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
    public function getPosition(): int
    {
    }

    /**
     * Gets a parameter's type
     *
     * @return ReflectionType Returns a <code>ReflectionType</code> object if a parameter type is
     * specified, <code>NULL</code> otherwise.
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.gettype.php
     */
    public function getType(): ReflectionType
    {
    }

    /**
     * Checks if parameter has a type
     *
     * @return bool <code>TRUE</code> if a type is specified, <code>FALSE</code> otherwise.
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.hastype.php
     */
    public function hasType(): bool
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
    public function isArray(): bool
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
    public function isCallable(): bool
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
    public function isDefaultValueAvailable(): bool
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
    public function isDefaultValueConstant(): bool
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
    public function isOptional(): bool
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
    public function isPassedByReference(): bool
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
    public function isVariadic(): bool
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
    final private function __clone(): void
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
    public function __toString(): string
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
    public static function export($class, string $name, bool $return = null): string
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
    public function getDeclaringClass(): ReflectionClass
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
    public function getDocComment(): string
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
    public function getModifiers(): int
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
    public function getName(): string
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
    public function isDefault(): bool
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
    public function isPrivate(): bool
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
    public function isProtected(): bool
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
    public function isPublic(): bool
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
    public function isStatic(): bool
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
    public function setAccessible(bool $accessible): void
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
    public function setValue($object, $value = null): void
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

    /**
     * To string
     *
     * @return string Returns the type of the parameter.
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/reflectiontype.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * Checks if null is allowed
     *
     * @return bool <code>TRUE</code> if <code>NULL</code> is allowed, otherwise <code>FALSE</code>
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/reflectiontype.allowsnull.php
     */
    public function allowsNull(): bool
    {
    }

    /**
     * Checks if it is a built-in type
     *
     * @return bool <code>TRUE</code> if it's a built-in type, otherwise <code>FALSE</code>
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/reflectiontype.isbuiltin.php
     */
    public function isBuiltin(): bool
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
    final private function __clone(): void
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
    public function __toString(): string
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
    public static function export(string $name, bool $return = null): string
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
    public function getAuthor(): string
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
    public function getCopyright(): string
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
    public function getName(): string
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
    public function getURL(): string
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
    public function getVersion(): string
    {
    }
}
