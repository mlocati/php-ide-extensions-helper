<?php
// Start of extension: fileinfo
// - parsed on POSIX with PHP 7.2.3 (extension version 1.0.5)
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
     * @param mixed $string
     * @param mixed|null $options
     * @param mixed|null $context
     */
    public function buffer($string, $options = null, $context = null)
    {
    }

    /**
     * Reads entire file into an array
     *
     * @param mixed $filename
     * @param mixed|null $options
     * @param mixed|null $context
     *
     * @return array
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.file.php
     */
    public function file($filename, $options = null, $context = null): array
    {
    }

    /**
     * @param mixed|null $options
     * @param mixed|null $arg
     */
    public function finfo($options = null, $arg = null)
    {
    }

    /**
     * @param mixed $options
     */
    public function set_flags($options)
    {
    }
}

/**
 * Return information about a string buffer
 *
 * @param mixed $finfo
 * @param mixed $string
 * @param mixed|null $options
 * @param mixed|null $context
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL fileinfo >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.finfo-buffer.php
 */
function finfo_buffer($finfo, $string, $options = null, $context = null): string
{
}

/**
 * Close fileinfo resource
 *
 * @param mixed $finfo
 *
 * @return bool
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
 * @param mixed $finfo
 * @param mixed $filename
 * @param mixed|null $options
 * @param mixed|null $context
 *
 * @return string
 *
 * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.finfo-file.php
 */
function finfo_file($finfo, $filename, $options = null, $context = null): string
{
}

/**
 * Create a new fileinfo resource
 *
 * @param mixed|null $options
 * @param mixed|null $arg
 *
 * @return resource
 *
 * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.finfo-open.php
 */
function finfo_open($options = null, $arg = null)
{
}

/**
 * Set libmagic configuration options
 *
 * @param mixed $finfo
 * @param mixed $options
 *
 * @return bool
 *
 * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.finfo-set-flags.php
 */
function finfo_set_flags($finfo, $options): bool
{
}

/**
 * Detect MIME Content-type for a file
 *
 * @param mixed $string
 *
 * @return string
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mime-content-type.php
 */
function mime_content_type($string): string
{
}
