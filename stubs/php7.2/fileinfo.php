<?php
// Start of extension: fileinfo
// - parsed on POSIX with PHP 7.2.4 (extension version 1.0.5)
// - parsed on Windows with PHP 7.2.4 (extension version 1.0.5)

/**
 * Return all matches, not just the first.
 *
 * @link http://www.php.net/manual/en/fileinfo.constants.php#constant.fileinfo-continue
 *
 * @var int
 */
const FILEINFO_CONTINUE = 32;

/**
 * Look at the contents of blocks or character special devices.
 *
 * @link http://www.php.net/manual/en/fileinfo.constants.php#constant.fileinfo-devices
 *
 * @var int
 */
const FILEINFO_DEVICES = 8;

/**
 * Returns the file extension appropiate for a the MIME type detected in
 * the file.
 * For types that commonly have multiple file extensions, such as <code>JPEG</code>
 * images, then the return value is multiple extensions speparated by a forward slash e.g.:
 * <code>"jpeg/jpg/jpe/jfif"</code>. For unknown types not available in the
 * <code>magic.mime</code> database, then return value is <code>"???"</code>.
 * Available since PHP 7.2.0.
 *
 * @link http://www.php.net/manual/en/fileinfo.constants.php#constant.fileinfo-extension
 *
 * @var int
 */
const FILEINFO_EXTENSION = 16777216;

/**
 * Return the mime type and mime encoding as defined by RFC 2045.
 *
 * @link http://www.php.net/manual/en/fileinfo.constants.php#constant.fileinfo-mime
 *
 * @var int
 */
const FILEINFO_MIME = 1040;

/**
 * Return the mime encoding of the file.
 * Available since PHP 5.3.0.
 *
 * @link http://www.php.net/manual/en/fileinfo.constants.php#constant.fileinfo-mime-encoding
 *
 * @var int
 */
const FILEINFO_MIME_ENCODING = 1024;

/**
 * Return the mime type.
 * Available since PHP 5.3.0.
 *
 * @link http://www.php.net/manual/en/fileinfo.constants.php#constant.fileinfo-mime-type
 *
 * @var int
 */
const FILEINFO_MIME_TYPE = 16;

/**
 * No special handling.
 *
 * @link http://www.php.net/manual/en/fileinfo.constants.php#constant.fileinfo-none
 *
 * @var int
 */
const FILEINFO_NONE = 0;

/**
 * If possible preserve the original access time.
 *
 * @link http://www.php.net/manual/en/fileinfo.constants.php#constant.fileinfo-preserve-atime
 *
 * @var int
 */
const FILEINFO_PRESERVE_ATIME = 128;

/**
 * Don't translate unprintable characters to a <code>\ooo</code> octal
 * representation.
 *
 * @link http://www.php.net/manual/en/fileinfo.constants.php#constant.fileinfo-raw
 *
 * @var int
 */
const FILEINFO_RAW = 256;

/**
 * Follow symlinks.
 *
 * @link http://www.php.net/manual/en/fileinfo.constants.php#constant.fileinfo-symlink
 *
 * @var int
 */
const FILEINFO_SYMLINK = 2;

/**
 * This class provides an object oriented interface into the fileinfo
 * functions.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL fileinfo >= 0.1.0
 *
 * @link http://www.php.net/manual/en/class.finfo.php
 */
class finfo
{
    /**
     * Alias of finfo_buffer()
     *
     * @param string|null $string
     * @param int|null $options
     * @param resource|null $context
     *
     * @return string Returns a textual description of the <code>string</code>
     * argument, or <code>FALSE</code> if an error occurred.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL fileinfo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/finfo.buffer.php
     */
    public function buffer(string $string = null, int $options = FILEINFO_NONE, $context = null): string
    {
    }

    /**
     * Alias of finfo_file()
     *
     * @param string|null $file_name
     * @param int|null $options
     * @param resource|null $context
     *
     * @return string Returns a textual description of the contents of the
     * <code>file_name</code> argument, or <code>FALSE</code> if an error occurred.
     *
     * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/finfo.file.php
     */
    public function file(string $file_name = null, int $options = FILEINFO_NONE, $context = null): string
    {
    }

    /**
     * @param mixed $options
     * @param mixed $arg
     */
    public function finfo($options = null, $arg = null)
    {
    }

    /**
     * Alias of finfo_set_flags()
     *
     * @param int $options
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/finfo.set-flags.php
     */
    public function set_flags(int $options): bool
    {
    }
}

/**
 * Return information about a string buffer
 *
 * @param resource $finfo Fileinfo resource returned by <code>finfo_open</code>.
 * @param string|null $string Content of a file to be checked.
 * @param int|null $options One or disjunction of more Fileinfo
 * constants.
 * @param resource|null $context
 *
 * @return string Returns a textual description of the <code>string</code>
 * argument, or <code>FALSE</code> if an error occurred.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL fileinfo >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.finfo-buffer.php
 */
function finfo_buffer($finfo, string $string = null, int $options = FILEINFO_NONE, $context = null): string
{
}

/**
 * Close fileinfo resource
 *
 * @param resource $finfo Fileinfo resource returned by <code>finfo_open</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.finfo-close.php
 */
function finfo_close($finfo): bool
{
}

/**
 * Return information about a file
 *
 * @param resource $finfo Fileinfo resource returned by <code>finfo_open</code>.
 * @param string|null $file_name Name of a file to be checked.
 * @param int|null $options One or disjunction of more Fileinfo
 * constants.
 * @param resource|null $context For a description of <code>contexts</code>, refer to .
 *
 * @return string Returns a textual description of the contents of the
 * <code>file_name</code> argument, or <code>FALSE</code> if an error occurred.
 *
 * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.finfo-file.php
 */
function finfo_file($finfo, string $file_name = null, int $options = FILEINFO_NONE, $context = null): string
{
}

/**
 * Create a new fileinfo resource
 *
 * @param int|null $options One or disjunction of more Fileinfo
 * constants.
 * @param string|null $magic_file Name of a magic database file, usually something like
 * <code>/path/to/magic.mime</code>. If not specified, the
 * <code>MAGIC</code> environment variable is used. If the
 * environment variable isn't set, then PHP's bundled magic database will
 * be used.
 *
 * @return resource (Procedural style only)
 * Returns a magic database resource on success or <code>FALSE</code> on failure.
 *
 * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.finfo-open.php
 */
function finfo_open(int $options = FILEINFO_NONE, string $magic_file = null)
{
}

/**
 * Set libmagic configuration options
 *
 * @param resource $finfo Fileinfo resource returned by <code>finfo_open</code>.
 * @param int $options One or disjunction of more Fileinfo
 * constants.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.finfo-set-flags.php
 */
function finfo_set_flags($finfo, int $options): bool
{
}

/**
 * Detect MIME Content-type for a file
 *
 * @param string $filename Path to the tested file.
 *
 * @return string Returns the content type in MIME format, like
 * <code>text/plain</code> or <code>application/octet-stream</code>.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mime-content-type.php
 */
function mime_content_type(string $filename): string
{
}
