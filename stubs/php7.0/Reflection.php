<?php
// Start of extension: Reflection
// - parsed on POSIX with PHP 7.0.28 (extension version 7.0.28)
// - parsed on Windows with PHP 7.0.28 (extension version 7.0.28)

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
     * @param Reflector $reflector
     * @param mixed|null $return
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflection.export.php
     */
    public static function export($reflector, $return = null): string
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
    public static function getModifierNames($modifiers): array
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
    public function __toString(): string
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
    public static function export($argument, $return = null): string
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
    public function getConstants(): array
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
    public function getDefaultProperties(): array
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
    public function getDocComment(): string
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
    public function getEndLine(): int
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
    public function getExtensionName(): string
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
    public function getFileName(): string
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
    public function getInterfaceNames(): array
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
    public function getInterfaces(): array
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
    public function getMethods($filter = null): array
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
    public function getModifiers(): int
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
    public function getName(): string
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
    public function getNamespaceName(): string
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
    public function getProperties($filter = null): array
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
    public function getShortName(): string
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
    public function getStartLine(): int
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
    public function getStaticProperties(): array
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
    public function getTraitAliases(): array
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
    public function getTraitNames(): array
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
    public function getTraits(): array
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
    public function hasConstant($name): bool
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
    public function hasMethod($name): bool
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
    public function hasProperty($name): bool
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
    public function implementsInterface($interface): bool
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
    public function inNamespace(): bool
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
    public function isAbstract(): bool
    {
    }

    /**
     * Checks if class is anonymous
     *
     * @return bool
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
     * @return bool
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
     * @return bool
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
     * @param mixed $object
     *
     * @return bool
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
     * @return bool
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
     * @return bool
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
     * @return bool
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
     * @return bool
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
     * @param mixed $class
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.issubclassof.php
     */
    public function isSubclassOf($class): bool
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
    public function isTrait(): bool
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
    public function isUserDefined(): bool
    {
    }

    /**
     * Creates a new class instance from given arguments
     *
     * @param mixed $args
     *
     * @return object
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
     * @param array[]|null $args
     *
     * @return object
     *
     * @since PHP 5 >= 5.1.3, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionclass.newinstanceargs.php
     */
    public function newInstanceArgs($args = null)
    {
    }

    /**
     * Creates a new class instance without invoking the constructor
     *
     * @return object
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
    public function __toString(): string
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
    public static function export($name, $return = null): string
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
    public function getClasses(): array
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
    public function getClassNames(): array
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
    public function getConstants(): array
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
    public function getDependencies(): array
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
    public function getFunctions(): array
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
    public function getINIEntries(): array
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
    public function getName(): string
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
    public function getVersion(): string
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
    public function __toString(): string
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
    public static function export($name, $return = null): string
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
     * @param array[] $args
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunction.invokeargs.php
     */
    public function invokeArgs($args)
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
     * @return object
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
    public function getDocComment(): string
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
    public function getEndLine(): int
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
    public function getExtensionName(): string
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
    public function getFileName(): string
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
    public function getName(): string
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
    public function getNamespaceName(): string
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
    public function getNumberOfParameters(): int
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
    public function getNumberOfRequiredParameters(): int
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
    public function getParameters(): array
    {
    }

    /**
     * Gets the specified return type of a function
     *
     * @return ReflectionType
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionfunctionabstract.getreturntype.php
     */
    public function getReturnType()
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
    public function getShortName(): string
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
    public function getStartLine(): int
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
    public function getStaticVariables(): array
    {
    }

    /**
     * Checks if the function has a specified return type
     *
     * @return bool
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
     * @return bool
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
     * @return bool
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
     * @return bool
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
     * @return bool
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
     * @return bool
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
     * @return bool
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
     * @return bool
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
     * @return bool
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
     * @return string
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
     * @return Generator
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/reflectiongenerator.getexecutinggenerator.php
     */
    public function getExecutingGenerator()
    {
    }

    /**
     * Gets the currently executing line of the generator
     *
     * @return int
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
     * @return ReflectionFunctionAbstract
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/reflectiongenerator.getfunction.php
     */
    public function getFunction()
    {
    }

    /**
     * Gets the <code>$this</code> value of the generator
     *
     * @return object
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
     * @param mixed|null $options
     *
     * @return array
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/reflectiongenerator.gettrace.php
     */
    public function getTrace($options = null): array
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
    public function __toString(): string
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
    public static function export($class, $name, $return = null): string
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
    public function getModifiers(): int
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
     * @param array[] $args
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionmethod.invokeargs.php
     */
    public function invokeArgs($object, $args)
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
    public function isAbstract(): bool
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
    public function isConstructor(): bool
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
    public function isDestructor(): bool
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
    public function isFinal(): bool
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
    public function isPrivate(): bool
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
    public function isProtected(): bool
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
    public function isPublic(): bool
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
    public function isStatic(): bool
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
    public static function export($argument, $return = null): string
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
    public function __toString(): string
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
    public function allowsNull(): bool
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
    public function canBePassedByValue(): bool
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
    public static function export($function, $parameter, $return = null): string
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
    public function getDefaultValueConstantName(): string
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
    public function getName(): string
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
    public function getPosition(): int
    {
    }

    /**
     * Gets a parameter's type
     *
     * @return ReflectionType
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/reflectionparameter.gettype.php
     */
    public function getType()
    {
    }

    /**
     * Checks if parameter has a type
     *
     * @return bool
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
     * @return bool
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
     * @return bool
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
     * @return bool
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
     * @return bool
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
     * @return bool
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
     * @return bool
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
     * @return bool
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
    public function __toString(): string
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
    public static function export($class, $name, $return = null): string
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
    public function getDocComment(): string
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
    public function getModifiers(): int
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
    public function getName(): string
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
    public function isDefault(): bool
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
    public function isPrivate(): bool
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
    public function isProtected(): bool
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
    public function isPublic(): bool
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
    public function isStatic(): bool
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
     * @return string
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
     * @return bool
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
     * @return bool
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
    public function __toString(): string
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
    public static function export($name, $return = null): string
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
