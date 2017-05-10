<?php
// Documentation generated automatically for extension Reflection v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
// No INI entries
// No constants defined
interface Reflector
{
    public static function export();
    public function __toString();
}
class Reflection
{
    public static function export(Reflector $reflector, $return = null)
    {
    }
    public static function getModifierNames($modifiers)
    {
    }
}
class ReflectionClass implements Reflector
{
    const IS_EXPLICIT_ABSTRACT = 32;
    const IS_FINAL = 4;
    const IS_IMPLICIT_ABSTRACT = 16;
    public $name = '';
    public static function export($argument, $return = null)
    {
    }
    public function __construct($argument)
    {
    }
    public function __toString()
    {
    }
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
    public function getMethod($name)
    {
    }
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
    public function getProperties($filter = null)
    {
    }
    public function getProperty($name)
    {
    }
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
    final private function __clone()
    {
    }
    public function hasConstant($name)
    {
    }
    public function hasMethod($name)
    {
    }
    public function hasProperty($name)
    {
    }
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
    public function isSubclassOf($class)
    {
    }
    public function isTrait()
    {
    }
    public function isUserDefined()
    {
    }
    public function newInstance($args)
    {
    }
    public function newInstanceArgs(array $args = null)
    {
    }
    public function newInstanceWithoutConstructor()
    {
    }
    public function setStaticPropertyValue($name, $value)
    {
    }
}
class ReflectionClassConstant implements Reflector
{
    public $class = '';
    public $name = '';
    public static function export($class, $name, $return = null)
    {
    }
    public function __construct($class, $name)
    {
    }
    public function __toString()
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
    final private function __clone()
    {
    }
}
class ReflectionException extends Exception
{
}
class ReflectionExtension implements Reflector
{
    public $name = '';
    public static function export($name, $return = null)
    {
    }
    public function __construct($name)
    {
    }
    public function __toString()
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
    final private function __clone()
    {
    }
}
class ReflectionFunction extends ReflectionFunctionAbstract implements Reflector
{
    const IS_DEPRECATED = 262144;
    public $name = '';
    public static function export($name, $return = null)
    {
    }
    public function __construct($name)
    {
    }
    public function __toString()
    {
    }
    public function getClosure()
    {
    }
    public function invoke($args = null)
    {
    }
    public function invokeArgs(array $args)
    {
    }
    public function isDisabled()
    {
    }
}
abstract class ReflectionFunctionAbstract implements Reflector
{
    public $name = '';
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
    final private function __clone()
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
class ReflectionGenerator
{
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
    public function getTrace($options = null)
    {
    }
}
class ReflectionMethod extends ReflectionFunctionAbstract implements Reflector
{
    const IS_ABSTRACT = 2;
    const IS_FINAL = 4;
    const IS_PRIVATE = 1024;
    const IS_PROTECTED = 512;
    const IS_PUBLIC = 256;
    const IS_STATIC = 1;
    public $class = '';
    public $name = '';
    public static function export($class, $name, $return = null)
    {
    }
    public function __construct($class_or_method, $name = null)
    {
    }
    public function __toString()
    {
    }
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
    public function invoke($object, $args)
    {
    }
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
    public function setAccessible($value)
    {
    }
}
class ReflectionNamedType extends ReflectionType
{
    public function getName()
    {
    }
}
class ReflectionObject extends ReflectionClass implements Reflector
{
    const IS_EXPLICIT_ABSTRACT = 32;
    const IS_FINAL = 4;
    const IS_IMPLICIT_ABSTRACT = 16;
    public static function export($argument, $return = null)
    {
    }
    public function __construct($argument)
    {
    }
}
class ReflectionParameter implements Reflector
{
    public $name = '';
    public static function export($function, $parameter, $return = null)
    {
    }
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
    public function getType()
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
    final private function __clone()
    {
    }
}
class ReflectionProperty implements Reflector
{
    const IS_PRIVATE = 1024;
    const IS_PROTECTED = 512;
    const IS_PUBLIC = 256;
    const IS_STATIC = 1;
    public $class = '';
    public $name = '';
    public static function export($class, $name, $return = null)
    {
    }
    public function __construct($class, $name)
    {
    }
    public function __toString()
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
    public function setAccessible($visible)
    {
    }
    public function setValue($object, $value = null)
    {
    }
    final private function __clone()
    {
    }
}
class ReflectionType
{
    public function __toString()
    {
    }
    public function allowsNull()
    {
    }
    public function isBuiltin()
    {
    }
    final private function __clone()
    {
    }
}
class ReflectionZendExtension implements Reflector
{
    public $name = '';
    public static function export($name, $return = null)
    {
    }
    public function __construct($name)
    {
    }
    public function __toString()
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
    final private function __clone()
    {
    }
}
// No functions defined