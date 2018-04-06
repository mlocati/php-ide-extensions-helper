<?php
// Start of extension: Core
// - parsed on POSIX with PHP 5.6.34 (extension version 5.6.34)
// - parsed on Windows with PHP 5.6.34 (extension version 5.6.34)

/**
 * The class name. The class name includes the namespace
 * it was declared in (e.g. <code>Foo\Bar</code>).
 * Note that as of PHP 5.4 __CLASS__ works also in traits. When used
 * in a trait method, __CLASS__ is the name of the class the trait
 * is used in.
 *
 * @link http://www.php.net/manual/en/language.constants.predefined.php#constant.class
 *
 * @var string
 */
define('__CLASS__', 'Name\\Space\\ClassName');

/**
 * The directory of the file. If used inside an include,
 * the directory of the included file is returned. This is equivalent
 * to <code>dirname(__FILE__)</code>. This directory name
 * does not have a trailing slash unless it is the root directory.
 *
 * @link http://www.php.net/manual/en/language.constants.predefined.php#constant.dir
 *
 * @var string
 */
define('__DIR__', '/path/to');

/**
 * The full path and filename of the file with symlinks resolved. If used inside an include,
 * the name of the included file is returned.
 *
 * @link http://www.php.net/manual/en/language.constants.predefined.php#constant.file
 *
 * @var string
 */
define('__FILE__', '/path/to/file.php');

/**
 * The function name.
 *
 * @link http://www.php.net/manual/en/language.constants.predefined.php#constant.function
 *
 * @var string
 */
define('__FUNCTION__', 'functionName');

/**
 * The current line number of the file.
 *
 * @link http://www.php.net/manual/en/language.constants.predefined.php#constant.line
 *
 * @var int
 */
define('__LINE__', 1);

/**
 * The class method name.
 *
 * @link http://www.php.net/manual/en/language.constants.predefined.php#constant.method
 *
 * @var string
 */
define('__METHOD__', 'Name\\Space\\ClassName::functionName');

/**
 * The name of the current namespace.
 *
 * @link http://www.php.net/manual/en/language.constants.predefined.php#constant.namespace
 *
 * @var string
 */
define('__NAMESPACE__', 'Name\\Space');

/**
 * The trait name. The trait name includes the namespace
 * it was declared in (e.g. <code>Foo\Bar</code>).
 *
 * @link http://www.php.net/manual/en/language.constants.predefined.php#constant.trait
 *
 * @var string
 */
define('__TRAIT__', 'Name\\Space\\TraitName');

/**
 * @var int
 */
const DEBUG_BACKTRACE_IGNORE_ARGS = 2;

/**
 * @var int
 */
const DEBUG_BACKTRACE_PROVIDE_OBJECT = 1;

/**
 * @var string
 */
const DEFAULT_INCLUDE_PATH = '.:/usr/local/lib/php';

/**
 * All errors and warnings, as supported, except of level
 * <code>E_STRICT</code> prior to PHP 5.4.0.
 *
 * @link http://www.php.net/manual/en/errorfunc.constants.php#errorfunc.constants.errorlevels.e-strict
 *
 * @var int
 */
const E_ALL = 32767;

/**
 * Fatal compile-time errors. This is like an <code>E_ERROR</code>,
 * except it is generated by the Zend Scripting Engine.
 *
 * @link http://www.php.net/manual/en/errorfunc.constants.php#errorfunc.constants.errorlevels.e-compile-error
 *
 * @var int
 */
const E_COMPILE_ERROR = 64;

/**
 * Compile-time warnings (non-fatal errors). This is like an
 * <code>E_WARNING</code>, except it is generated by the Zend
 * Scripting Engine.
 *
 * @link http://www.php.net/manual/en/errorfunc.constants.php#errorfunc.constants.errorlevels.e-compile-warning
 *
 * @var int
 */
const E_COMPILE_WARNING = 128;

/**
 * Fatal errors that occur during PHP's initial startup. This is like an
 * <code>E_ERROR</code>, except it is generated by the core of PHP.
 *
 * @link http://www.php.net/manual/en/errorfunc.constants.php#errorfunc.constants.errorlevels.e-core-error
 *
 * @var int
 */
const E_CORE_ERROR = 16;

/**
 * Warnings (non-fatal errors) that occur during PHP's initial startup.
 * This is like an <code>E_WARNING</code>, except it is generated
 * by the core of PHP.
 *
 * @link http://www.php.net/manual/en/errorfunc.constants.php#errorfunc.constants.errorlevels.e-core-warning
 *
 * @var int
 */
const E_CORE_WARNING = 32;

/**
 * Run-time notices. Enable this to receive warnings about code
 * that will not work in future versions.
 *
 * @link http://www.php.net/manual/en/errorfunc.constants.php#errorfunc.constants.errorlevels.e-deprecated-error
 *
 * @var int
 */
const E_DEPRECATED = 8192;

/**
 * Fatal run-time errors. These indicate errors that can not be
 * recovered from, such as a memory allocation problem.
 * Execution of the script is halted.
 *
 * @link http://www.php.net/manual/en/errorfunc.constants.php#errorfunc.constants.errorlevels.e-error
 *
 * @var int
 */
const E_ERROR = 1;

/**
 * Run-time notices. Indicate that the script encountered something that
 * could indicate an error, but could also happen in the normal course of
 * running a script.
 *
 * @link http://www.php.net/manual/en/errorfunc.constants.php#errorfunc.constants.errorlevels.e-notice
 *
 * @var int
 */
const E_NOTICE = 8;

/**
 * Compile-time parse errors. Parse errors should only be generated by
 * the parser.
 *
 * @link http://www.php.net/manual/en/errorfunc.constants.php#errorfunc.constants.errorlevels.e-parse
 *
 * @var int
 */
const E_PARSE = 4;

/**
 * Catchable fatal error. It indicates that a probably dangerous error
 * occurred, but did not leave the Engine in an unstable state. If the error
 * is not caught by a user defined handle (see also
 * <code>set_error_handler</code>), the application aborts as it
 * was an <code>E_ERROR</code>.
 *
 * @link http://www.php.net/manual/en/errorfunc.constants.php#errorfunc.constants.errorlevels.e-recoverable-error
 *
 * @var int
 */
const E_RECOVERABLE_ERROR = 4096;

/**
 * Enable to have PHP suggest changes
 * to your code which will ensure the best interoperability
 * and forward compatibility of your code.
 *
 * @link http://www.php.net/manual/en/errorfunc.constants.php#errorfunc.constants.errorlevels.e-strict
 *
 * @var int
 */
const E_STRICT = 2048;

/**
 * User-generated warning message. This is like an
 * <code>E_DEPRECATED</code>, except it is generated in PHP code by
 * using the PHP function <code>trigger_error</code>.
 *
 * @link http://www.php.net/manual/en/errorfunc.constants.php#errorfunc.constants.errorlevels.e-user-deprecated
 *
 * @var int
 */
const E_USER_DEPRECATED = 16384;

/**
 * User-generated error message. This is like an
 * <code>E_ERROR</code>, except it is generated in PHP code by
 * using the PHP function <code>trigger_error</code>.
 *
 * @link http://www.php.net/manual/en/errorfunc.constants.php#errorfunc.constants.errorlevels.e-user-error
 *
 * @var int
 */
const E_USER_ERROR = 256;

/**
 * User-generated notice message. This is like an
 * <code>E_NOTICE</code>, except it is generated in PHP code by
 * using the PHP function <code>trigger_error</code>.
 *
 * @link http://www.php.net/manual/en/errorfunc.constants.php#errorfunc.constants.errorlevels.e-user-notice
 *
 * @var int
 */
const E_USER_NOTICE = 1024;

/**
 * User-generated warning message. This is like an
 * <code>E_WARNING</code>, except it is generated in PHP code by
 * using the PHP function <code>trigger_error</code>.
 *
 * @link http://www.php.net/manual/en/errorfunc.constants.php#errorfunc.constants.errorlevels.e-user-warning
 *
 * @var int
 */
const E_USER_WARNING = 512;

/**
 * Run-time warnings (non-fatal errors). Execution of the script is not
 * halted.
 *
 * @link http://www.php.net/manual/en/errorfunc.constants.php#errorfunc.constants.errorlevels.e-warning
 *
 * @var int
 */
const E_WARNING = 2;

/**
 * @link http://www.php.net/manual/en/maxdb.constants.php
 *
 * @var bool
 */
const FALSE = false;

/**
 * @link http://www.php.net/manual/en/function.get-defined-constants.php
 *
 * @var null
 */
const NULL = null;

/**
 * @var string
 */
const PEAR_EXTENSION_DIR = '/usr/local/lib/php/extensions/no-debug-non-zts-20131226';

/**
 * @var string
 */
const PEAR_INSTALL_DIR = '/usr/local/lib/php';

/**
 * @var string
 */
const PHP_BINARY = '/usr/local/bin/php';

/**
 * @var string
 */
const PHP_BINDIR = '/usr/local/bin';

/**
 * @var string
 */
const PHP_CONFIG_FILE_PATH = '/usr/local/etc/php';

/**
 * @var string
 */
const PHP_CONFIG_FILE_SCAN_DIR = '/usr/local/etc/php/conf.d';

/**
 * @var string
 */
const PHP_DATADIR = '/usr/local/share/php';

/**
 * @var int
 */
const PHP_DEBUG = 0;

/**
 * @var string
 */
const PHP_EOL = "\n";

/**
 * @var string
 */
const PHP_EXTENSION_DIR = '/usr/local/lib/php/extensions/no-debug-non-zts-20131226';

/**
 * @var string
 */
const PHP_EXTRA_VERSION = '';

/**
 * @var float
 */
const PHP_INT_MAX = 9223372036854775807;

/**
 * @var int
 */
const PHP_INT_SIZE = 8;

/**
 * @var string
 */
const PHP_LIBDIR = '/usr/local/lib/php';

/**
 * @var string
 */
const PHP_LOCALSTATEDIR = '/usr/local/var';

/**
 * @var int
 */
const PHP_MAJOR_VERSION = 5;

/**
 * WARNING: this may be available on POSIX but not on Windows
 *
 * @var string
 */
const PHP_MANDIR = '/usr/local/php/man';

/**
 * @var int
 */
const PHP_MAXPATHLEN = 4096;

/**
 * @var int
 */
const PHP_MINOR_VERSION = 6;

/**
 * @var string
 */
const PHP_OS = 'Linux';

/**
 * Indicates that the output buffer has been cleaned.
 * Available since PHP 5.4.
 *
 * @link http://www.php.net/manual/en/outcontrol.constants.php#constant.php-output-handler-clean
 *
 * @var int
 */
const PHP_OUTPUT_HANDLER_CLEAN = 2;

/**
 * Controls whether an output buffer created by
 * <code>ob_start</code> can be cleaned.
 * Available since PHP 5.4.
 *
 * @link http://www.php.net/manual/en/outcontrol.constants.php#constant.php-output-handler-cleanable
 *
 * @var int
 */
const PHP_OUTPUT_HANDLER_CLEANABLE = 16;

/**
 * Indicates that the buffer has been flushed, but output buffering will
 * continue.
 * As of PHP 5.4, this is an alias for
 * <code>PHP_OUTPUT_HANDLER_WRITE</code>.
 *
 * @link http://www.php.net/manual/en/outcontrol.constants.php#constant.php-output-handler-cont
 *
 * @var int
 */
const PHP_OUTPUT_HANDLER_CONT = 0;

/**
 * @var int
 */
const PHP_OUTPUT_HANDLER_DISABLED = 8192;

/**
 * Indicates that output buffering has ended.
 * As of PHP 5.4, this is an alias for
 * <code>PHP_OUTPUT_HANDLER_FINAL</code>.
 *
 * @link http://www.php.net/manual/en/outcontrol.constants.php#constant.php-output-handler-end
 *
 * @var int
 */
const PHP_OUTPUT_HANDLER_END = 8;

/**
 * Indicates that this is the final output buffering operation.
 * Available since PHP 5.4.
 *
 * @link http://www.php.net/manual/en/outcontrol.constants.php#constant.php-output-handler-final
 *
 * @var int
 */
const PHP_OUTPUT_HANDLER_FINAL = 8;

/**
 * Indicates that the buffer has been flushed.
 * Available since PHP 5.4.
 *
 * @link http://www.php.net/manual/en/outcontrol.constants.php#constant.php-output-handler-flush
 *
 * @var int
 */
const PHP_OUTPUT_HANDLER_FLUSH = 4;

/**
 * Controls whether an output buffer created by
 * <code>ob_start</code> can be flushed.
 * Available since PHP 5.4.
 *
 * @link http://www.php.net/manual/en/outcontrol.constants.php#constant.php-output-handler-flushable
 *
 * @var int
 */
const PHP_OUTPUT_HANDLER_FLUSHABLE = 32;

/**
 * Controls whether an output buffer created by
 * <code>ob_start</code> can be removed before the end of the script.
 * Available since PHP 5.4.
 *
 * @link http://www.php.net/manual/en/outcontrol.constants.php#constant.php-output-handler-removable
 *
 * @var int
 */
const PHP_OUTPUT_HANDLER_REMOVABLE = 64;

/**
 * Indicates that output buffering has begun.
 *
 * @link http://www.php.net/manual/en/outcontrol.constants.php#constant.php-output-handler-start
 *
 * @var int
 */
const PHP_OUTPUT_HANDLER_START = 1;

/**
 * @var int
 */
const PHP_OUTPUT_HANDLER_STARTED = 4096;

/**
 * The default set of output buffer flags; currently equivalent to
 * <code>PHP_OUTPUT_HANDLER_CLEANABLE</code> |
 * <code>PHP_OUTPUT_HANDLER_FLUSHABLE</code> |
 * <code>PHP_OUTPUT_HANDLER_REMOVABLE</code>.
 * Available since PHP 5.4.
 *
 * @link http://www.php.net/manual/en/outcontrol.constants.php#constant.php-output-handler-stdflags
 *
 * @var int
 */
const PHP_OUTPUT_HANDLER_STDFLAGS = 112;

/**
 * Indicates that the output buffer is being flushed, and had data to output.
 * Available since PHP 5.4.
 *
 * @link http://www.php.net/manual/en/outcontrol.constants.php#constant.php-output-handler-write
 *
 * @var int
 */
const PHP_OUTPUT_HANDLER_WRITE = 0;

/**
 * @var string
 */
const PHP_PREFIX = '/usr/local';

/**
 * @var int
 */
const PHP_RELEASE_VERSION = 34;

/**
 * @var string
 */
const PHP_SAPI = 'cli';

/**
 * @var string
 */
const PHP_SHLIB_SUFFIX = 'so';

/**
 * @var string
 */
const PHP_SYSCONFDIR = '/usr/local/etc';

/**
 * @var string
 */
const PHP_VERSION = '5.6.34';

/**
 * @var int
 */
const PHP_VERSION_ID = 50634;

/**
 * This is a domain controller
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @link http://www.php.net/manual/en/info.constants.php#constant.php-windows-nt-domain-controller
 *
 * @var int
 */
const PHP_WINDOWS_NT_DOMAIN_CONTROLLER = 2;

/**
 * This is a server system (eg. Server 2008/2003/2000), note that if this is a 
 * domain controller its reported as <code>PHP_WINDOWS_NT_DOMAIN_CONTROLLER</code>.
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @link http://www.php.net/manual/en/info.constants.php#constant.php-windows-nt-server
 *
 * @var int
 */
const PHP_WINDOWS_NT_SERVER = 3;

/**
 * This is a workstation system (eg. Vista/XP/2000/NT4)
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @link http://www.php.net/manual/en/info.constants.php#constant.php-windows-nt-workstation
 *
 * @var int
 */
const PHP_WINDOWS_NT_WORKSTATION = 1;

/**
 * The Windows build number (for example, Windows Vista with SP1 applied is build 6001)
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @link http://www.php.net/manual/en/info.constants.php#constant.php-windows-version-build
 *
 * @var int
 */
const PHP_WINDOWS_VERSION_BUILD = 16299;

/**
 * The major version of Windows, this can be either <code>4</code> (NT4/Me/98/95), 
 * <code>5</code> (XP/2003 R2/2003/2000) or <code>6</code> (Vista/2008/7/8/8.1).
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @link http://www.php.net/manual/en/info.constants.php#constant.php-windows-version-major
 *
 * @var int
 */
const PHP_WINDOWS_VERSION_MAJOR = 10;

/**
 * The minor version of Windows, this can be either <code>0</code> (Vista/2008/2000/NT4/95), 
 * <code>1</code> (XP), <code>2</code> (2003 R2/2003/XP x64), <code>10</code> (98) 
 * or <code>90</code> (ME).
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @link http://www.php.net/manual/en/info.constants.php#constant.php-windows-version-minor
 *
 * @var int
 */
const PHP_WINDOWS_VERSION_MINOR = 0;

/**
 * The platform that PHP currently is running on, this value is <code>2</code> on Windows 
 * Vista/XP/2000/NT4, Server 2008/2003 and on Windows ME/98/95 this value is <code>1</code>.
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @link http://www.php.net/manual/en/info.constants.php#constant.php-windows-version-platform
 *
 * @var int
 */
const PHP_WINDOWS_VERSION_PLATFORM = 2;

/**
 * This contains the value used to determine the <code>PHP_WINDOWS_NT_*</code>
 * constants. This value may be one of the <code>PHP_WINDOWS_NT_*</code> constants 
 * indicating the platform type.
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @link http://www.php.net/manual/en/info.constants.php#constant.php-windows-version-producttype
 *
 * @var int
 */
const PHP_WINDOWS_VERSION_PRODUCTTYPE = 1;

/**
 * The major version of the service pack installed, this value is <code>0</code> 
 * if no service pack is installed. For example, Windows XP with service pack 3 installed 
 * will make this value <code>3</code>.
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @link http://www.php.net/manual/en/info.constants.php#constant.php-windows-version-sp-major
 *
 * @var int
 */
const PHP_WINDOWS_VERSION_SP_MAJOR = 0;

/**
 * The minor version of the service pack installed, this value is <code>0</code> 
 * if no service pack is installed.
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @link http://www.php.net/manual/en/info.constants.php#constant.php-windows-version-sp-minor
 *
 * @var int
 */
const PHP_WINDOWS_VERSION_SP_MINOR = 0;

/**
 * The suitemask is a bitmask that can tell if various features of Windows is installed, 
 * see the table below for possible bitfield values.
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @link http://www.php.net/manual/en/info.constants.php#constant.php-windows-version-suitemask
 *
 * @var int
 */
const PHP_WINDOWS_VERSION_SUITEMASK = 256;

/**
 * @var int
 */
const PHP_ZTS = 0;

/**
 * @var resource
 */
const STDERR = 'Resource id #3';

/**
 * @var resource
 */
const STDIN = 'Resource id #1';

/**
 * @var resource
 */
const STDOUT = 'Resource id #2';

/**
 * @link http://www.php.net/manual/en/maxdb.constants.php
 *
 * @var bool
 */
const TRUE = true;

/**
 * @var int
 */
const UPLOAD_ERR_CANT_WRITE = 7;

/**
 * @var int
 */
const UPLOAD_ERR_EXTENSION = 8;

/**
 * @var int
 */
const UPLOAD_ERR_FORM_SIZE = 2;

/**
 * @var int
 */
const UPLOAD_ERR_INI_SIZE = 1;

/**
 * @var int
 */
const UPLOAD_ERR_NO_FILE = 4;

/**
 * @var int
 */
const UPLOAD_ERR_NO_TMP_DIR = 6;

/**
 * @var int
 */
const UPLOAD_ERR_OK = 0;

/**
 * @var int
 */
const UPLOAD_ERR_PARTIAL = 3;

/**
 * @var bool
 */
const ZEND_DEBUG_BUILD = false;

/**
 * @var bool
 */
const ZEND_THREAD_SAFE = false;

/**
 * Interface to provide accessing objects as arrays.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.arrayaccess.php
 */
interface ArrayAccess
{
    /**
     * @param mixed $offset
     */
    public function offsetExists($offset);

    /**
     * @param mixed $offset
     */
    public function offsetGet($offset);

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value);

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset);
}

/**
 * Interface for external iterators or objects that can be iterated
 * themselves internally.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.iterator.php
 */
interface Iterator extends Traversable
{
    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current();

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key();

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next();

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind();

    public function valid();
}

/**
 * Interface to create an external Iterator.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.iteratoraggregate.php
 */
interface IteratorAggregate extends Traversable
{
    public function getIterator();
}

/**
 * Interface for customized serializing.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.serializable.php
 */
interface Serializable
{
    /**
     * Generates a storable representation of a value
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.serialize.php
     */
    public function serialize();

    /**
     * Creates a PHP value from a stored representation
     *
     * @param mixed $serialized
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.unserialize.php
     */
    public function unserialize($serialized);
}

/**
 * Interface to detect if a class is traversable using foreach.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.traversable.php
 */
interface Traversable
{
}

/**
 * Class used to represent anonymous
 * functions.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.closure.php
 */
final class Closure
{
    private function __construct()
    {
    }

    /**
     * @param mixed $closure
     * @param mixed $newthis
     * @param mixed|null $newscope
     */
    public static function bind($closure, $newthis, $newscope = null)
    {
    }

    /**
     * @param mixed $newthis
     * @param mixed|null $newscope
     */
    public function bindTo($newthis, $newscope = null)
    {
    }
}

/**
 * An Error Exception.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.php#class.errorexception
 */
class ErrorException extends Exception
{
    /**
     * @param mixed|null $message
     * @param mixed|null $code
     * @param mixed|null $severity
     * @param mixed|null $filename
     * @param mixed|null $lineno
     * @param mixed|null $previous
     */
    public function __construct($message = null, $code = null, $severity = null, $filename = null, $lineno = null, $previous = null)
    {
    }

    final public function getSeverity()
    {
    }
}

/**
 * <code>Exception</code> is the base class for
 * all Exceptions in PHP 5, and the base class for all user exceptions in PHP
 * 7.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.php#class.exception
 */
class Exception
{
    final private function __clone()
    {
    }

    /**
     * @param mixed|null $message
     * @param mixed|null $code
     * @param mixed|null $previous
     */
    public function __construct($message = null, $code = null, $previous = null)
    {
    }

    public function __toString()
    {
    }

    public function __wakeup()
    {
    }

    final public function getCode()
    {
    }

    final public function getFile()
    {
    }

    final public function getLine()
    {
    }

    final public function getMessage()
    {
    }

    final public function getPrevious()
    {
    }

    final public function getTrace()
    {
    }

    final public function getTraceAsString()
    {
    }
}

/**
 * <code>Generator</code> objects are returned from generators.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.generator.php
 */
final class Generator implements Iterator
{
    public function __wakeup()
    {
    }

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * @param mixed $value
     */
    public function send($value)
    {
    }

    /**
     * @param mixed $exception
     */
    public function throw($exception)
    {
    }

    public function valid()
    {
    }
}

class stdClass
{
}

/**
 * Creates an alias for a class
 *
 * @param mixed $user_class_name
 * @param mixed $alias_name
 * @param mixed|null $autoload
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.class-alias.php
 */
function class_alias($user_class_name, $alias_name, $autoload = null)
{
}

/**
 * Checks if the class has been defined
 *
 * @param mixed $classname
 * @param mixed|null $autoload
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.class-exists.php
 */
function class_exists($classname, $autoload = null)
{
}

/**
 * Create an anonymous (lambda-style) function
 *
 * @param mixed $args
 * @param mixed $code
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @deprecated as of PHP 7.2.0
 *
 * @link http://www.php.net/manual/en/function.create-function.php
 */
function create_function($args, $code)
{
}

/**
 * Generates a backtrace
 *
 * @param mixed|null $options
 * @param mixed|null $limit
 *
 * @return array
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.debug-backtrace.php
 */
function debug_backtrace($options = null, $limit = null): array
{
}

/**
 * Prints a backtrace
 *
 * @param mixed|null $options
 *
 * @return void
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.debug-print-backtrace.php
 */
function debug_print_backtrace($options = null)
{
}

/**
 * Defines a named constant
 *
 * @param mixed $constant_name
 * @param mixed $value
 * @param mixed $case_insensitive
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.define.php
 */
function define($constant_name, $value, $case_insensitive)
{
}

/**
 * Checks whether a given named constant exists
 *
 * @param mixed $constant_name
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.defined.php
 */
function defined($constant_name)
{
}

/**
 * Return the current key and value pair from an array and advance the array cursor
 *
 * @param mixed $arr
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @deprecated as of PHP 7.2.0
 *
 * @link http://www.php.net/manual/en/function.each.php
 */
function each(&$arr): array
{
}

/**
 * Sets which PHP errors are reported
 *
 * @param mixed|null $new_error_level
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.error-reporting.php
 */
function error_reporting($new_error_level = null)
{
}

/**
 * Find out whether an extension is loaded
 *
 * @param mixed $extension_name
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.extension-loaded.php
 */
function extension_loaded($extension_name)
{
}

/**
 * Return an item from the argument list
 *
 * @param mixed $arg_num
 *
 * @return mixed
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.func-get-arg.php
 */
function func_get_arg($arg_num)
{
}

/**
 * Returns an array comprising a function's argument list
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.func-get-args.php
 */
function func_get_args(): array
{
}

/**
 * Returns the number of arguments passed to the function
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.func-num-args.php
 */
function func_num_args()
{
}

/**
 * Return <code>TRUE</code> if the given function has been defined
 *
 * @param mixed $function_name
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.function-exists.php
 */
function function_exists($function_name)
{
}

/**
 * Forces collection of any existing garbage cycles
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gc-collect-cycles.php
 */
function gc_collect_cycles()
{
}

/**
 * Deactivates the circular reference collector
 *
 * @return void
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gc-disable.php
 */
function gc_disable()
{
}

/**
 * Activates the circular reference collector
 *
 * @return void
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gc-enable.php
 */
function gc_enable()
{
}

/**
 * Returns status of the circular reference collector
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gc-enabled.php
 */
function gc_enabled()
{
}

/**
 * The "Late Static Binding" class name
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.get-called-class.php
 */
function get_called_class()
{
}

/**
 * Returns the name of the class of an object
 *
 * @param mixed|null $object
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.get-class.php
 */
function get_class($object = null)
{
}

/**
 * Gets the class methods' names
 *
 * @param mixed $class
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.get-class-methods.php
 */
function get_class_methods($class): array
{
}

/**
 * Get the default properties of the class
 *
 * @param mixed $class_name
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.get-class-vars.php
 */
function get_class_vars($class_name): array
{
}

/**
 * Returns an array with the name of the defined classes
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.get-declared-classes.php
 */
function get_declared_classes(): array
{
}

/**
 * Returns an array of all declared interfaces
 *
 * @return array
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.get-declared-interfaces.php
 */
function get_declared_interfaces(): array
{
}

/**
 * Returns an array of all declared traits
 *
 * @return array
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.get-declared-traits.php
 */
function get_declared_traits(): array
{
}

/**
 * Returns an associative array with the names of all the constants and their values
 *
 * @param mixed|null $categorize
 *
 * @return array
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.get-defined-constants.php
 */
function get_defined_constants($categorize = null): array
{
}

/**
 * Returns an array of all defined functions
 *
 * @return array
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.get-defined-functions.php
 */
function get_defined_functions(): array
{
}

/**
 * Returns an array of all defined variables
 *
 * @return array
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.get-defined-vars.php
 */
function get_defined_vars(): array
{
}

/**
 * Returns an array with the names of the functions of a module
 *
 * @param mixed $extension_name
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.get-extension-funcs.php
 */
function get_extension_funcs($extension_name): array
{
}

/**
 * Returns an array with the names of included or required files
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.get-included-files.php
 */
function get_included_files(): array
{
}

/**
 * Returns an array with the names of all modules compiled and loaded
 *
 * @param mixed|null $zend_extensions
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.get-loaded-extensions.php
 */
function get_loaded_extensions($zend_extensions = null): array
{
}

/**
 * Gets the properties of the given object
 *
 * @param mixed $obj
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.get-object-vars.php
 */
function get_object_vars($obj): array
{
}

/**
 * Retrieves the parent class name for object or class
 *
 * @param mixed|null $object
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.get-parent-class.php
 */
function get_parent_class($object = null)
{
}

/**
 * Alias of <code>get_included_files</code>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.get-required-files.php
 */
function get_required_files()
{
}

/**
 * Returns the resource type
 *
 * @param mixed $res
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.get-resource-type.php
 */
function get_resource_type($res)
{
}

/**
 * Checks if the interface has been defined
 *
 * @param mixed $classname
 * @param mixed|null $autoload
 *
 * @return bool
 *
 * @since PHP 5 >= 5.0.2, PHP 7
 *
 * @link http://www.php.net/manual/en/function.interface-exists.php
 */
function interface_exists($classname, $autoload = null)
{
}

/**
 * Checks if the object is of this class or has this class as one of its parents
 *
 * @param mixed $object
 * @param mixed $class_name
 * @param mixed|null $allow_string
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.is-a.php
 */
function is_a($object, $class_name, $allow_string = null)
{
}

/**
 * Checks if the object has this class as one of its parents or implements it
 *
 * @param mixed $object
 * @param mixed $class_name
 * @param mixed|null $allow_string
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.is-subclass-of.php
 */
function is_subclass_of($object, $class_name, $allow_string = null)
{
}

/**
 * Checks if the class method exists
 *
 * @param mixed $object
 * @param mixed $method
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.method-exists.php
 */
function method_exists($object, $method)
{
}

/**
 * Checks if the object or class has a property
 *
 * @param mixed $object_or_class
 * @param mixed $property_name
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.property-exists.php
 */
function property_exists($object_or_class, $property_name)
{
}

/**
 * Restores the previous error handler function
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.restore-error-handler.php
 */
function restore_error_handler()
{
}

/**
 * Restores the previously defined exception handler function
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.restore-exception-handler.php
 */
function restore_exception_handler()
{
}

/**
 * Sets a user-defined error handler function
 *
 * @param mixed $error_handler
 * @param mixed|null $error_types
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.set-error-handler.php
 */
function set_error_handler($error_handler, $error_types = null)
{
}

/**
 * Sets a user-defined exception handler function
 *
 * @param mixed $exception_handler
 *
 * @return callable
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.set-exception-handler.php
 */
function set_exception_handler($exception_handler): callable
{
}

/**
 * Binary safe case-insensitive string comparison
 *
 * @param mixed $str1
 * @param mixed $str2
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.strcasecmp.php
 */
function strcasecmp($str1, $str2)
{
}

/**
 * Binary safe string comparison
 *
 * @param mixed $str1
 * @param mixed $str2
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.strcmp.php
 */
function strcmp($str1, $str2)
{
}

/**
 * Get string length
 *
 * @param mixed $str
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.strlen.php
 */
function strlen($str)
{
}

/**
 * Binary safe case-insensitive string comparison of the first n characters
 *
 * @param mixed $str1
 * @param mixed $str2
 * @param mixed $len
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.strncasecmp.php
 */
function strncasecmp($str1, $str2, $len)
{
}

/**
 * Binary safe string comparison of the first n characters
 *
 * @param mixed $str1
 * @param mixed $str2
 * @param mixed $len
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.strncmp.php
 */
function strncmp($str1, $str2, $len)
{
}

/**
 * Checks if the trait exists
 *
 * @param mixed $traitname
 * @param mixed|null $autoload
 *
 * @return bool
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.trait-exists.php
 */
function trait_exists($traitname, $autoload = null)
{
}

/**
 * Generates a user-level error/warning/notice message
 *
 * @param mixed $message
 * @param mixed|null $error_type
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.trigger-error.php
 */
function trigger_error($message, $error_type = null)
{
}

/**
 * Alias of <code>trigger_error</code>
 *
 * @param mixed $message
 * @param mixed|null $error_type
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.user-error.php
 */
function user_error($message, $error_type = null)
{
}

/**
 * Gets the version of the current Zend engine
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.zend-version.php
 */
function zend_version()
{
}