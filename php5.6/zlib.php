<?php
// Start of extension: zlib
// - parsed on POSIX with PHP 5.6.34 (extension version 2.0)
// - parsed on Windows with PHP 5.6.34 (extension version 2.0)

/**
 * @link http://www.php.net/manual/en/zlib.constants.php#constant.force-deflate
 *
 * @var int
 */
const FORCE_DEFLATE = 15;

/**
 * @link http://www.php.net/manual/en/zlib.constants.php#constant.force-gzip
 *
 * @var int
 */
const FORCE_GZIP = 31;

/**
 * ZLIB compression algorithm as per RFC 1950. Available as of PHP 7.0.0.
 *
 * @link http://www.php.net/manual/en/zlib.constants.php#constant.zlib-encoding-deflate
 *
 * @var int
 */
const ZLIB_ENCODING_DEFLATE = 15;

/**
 * GZIP algorithm as per RFC 1952. Available as of PHP 7.0.0.
 *
 * @link http://www.php.net/manual/en/zlib.constants.php#constant.zlib-encoding-gzip
 *
 * @var int
 */
const ZLIB_ENCODING_GZIP = 31;

/**
 * DEFLATE algorithm as per RFC 1951. Available as of PHP 7.0.0.
 *
 * @link http://www.php.net/manual/en/zlib.constants.php#constant.zlib-encoding-raw
 *
 * @var int
 */
const ZLIB_ENCODING_RAW = -15;

/**
 * Close an open gz-file pointer
 *
 * mixed $fp
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzclose.php
 */
function gzclose($fp)
{
}

/**
 * Compress a string
 *
 * mixed $data
 * mixed|null $level
 * mixed|null $encoding
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzcompress.php
 */
function gzcompress($data, $level = null, $encoding = null)
{
}

/**
 * Decodes a gzip compressed string
 *
 * mixed $data
 * mixed|null $max_decoded_len
 *
 * @return string
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzdecode.php
 */
function gzdecode($data, $max_decoded_len = null)
{
}

/**
 * Deflate a string
 *
 * mixed $data
 * mixed|null $level
 * mixed|null $encoding
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzdeflate.php
 */
function gzdeflate($data, $level = null, $encoding = null)
{
}

/**
 * Create a gzip compressed string
 *
 * mixed $data
 * mixed|null $level
 * mixed|null $encoding
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzencode.php
 */
function gzencode($data, $level = null, $encoding = null)
{
}

/**
 * Test for <code>EOF</code> on a gz-file pointer
 *
 * mixed $fp
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzeof.php
 */
function gzeof($fp)
{
}

/**
 * Read entire gz-file into an array
 *
 * mixed $filename
 * mixed|null $use_include_path
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzfile.php
 */
function gzfile($filename, $use_include_path = null): array
{
}

/**
 * Get character from gz-file pointer
 *
 * mixed $fp
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzgetc.php
 */
function gzgetc($fp)
{
}

/**
 * Get line from file pointer
 *
 * mixed $fp
 * mixed|null $length
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzgets.php
 */
function gzgets($fp, $length = null)
{
}

/**
 * Get line from gz-file pointer and strip HTML tags
 *
 * mixed $fp
 * mixed|null $length
 * mixed|null $allowable_tags
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzgetss.php
 */
function gzgetss($fp, $length = null, $allowable_tags = null)
{
}

/**
 * Inflate a deflated string
 *
 * mixed $data
 * mixed|null $max_decoded_len
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzinflate.php
 */
function gzinflate($data, $max_decoded_len = null)
{
}

/**
 * Open gz-file
 *
 * mixed $filename
 * mixed $mode
 * mixed|null $use_include_path
 *
 * @return resource
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzopen.php
 */
function gzopen($filename, $mode, $use_include_path = null)
{
}

/**
 * Output all remaining data on a gz-file pointer
 *
 * mixed $fp
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzpassthru.php
 */
function gzpassthru($fp)
{
}

/**
 * Alias of <code>gzwrite</code>
 *
 * mixed $fp
 * mixed $str
 * mixed|null $length
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzputs.php
 */
function gzputs($fp, $str, $length = null)
{
}

/**
 * Binary-safe gz-file read
 *
 * mixed $fp
 * mixed $length
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzread.php
 */
function gzread($fp, $length)
{
}

/**
 * Rewind the position of a gz-file pointer
 *
 * mixed $fp
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzrewind.php
 */
function gzrewind($fp)
{
}

/**
 * Seek on a gz-file pointer
 *
 * mixed $fp
 * mixed $offset
 * mixed|null $whence
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzseek.php
 */
function gzseek($fp, $offset, $whence = null)
{
}

/**
 * Tell gz-file pointer read/write position
 *
 * mixed $fp
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gztell.php
 */
function gztell($fp)
{
}

/**
 * Uncompress a compressed string
 *
 * mixed $data
 * mixed|null $max_decoded_len
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzuncompress.php
 */
function gzuncompress($data, $max_decoded_len = null)
{
}

/**
 * Binary-safe gz-file write
 *
 * mixed $fp
 * mixed $str
 * mixed|null $length
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzwrite.php
 */
function gzwrite($fp, $str, $length = null)
{
}

/**
 * ob_start callback function to gzip output buffer
 *
 * mixed $data
 * mixed $flags
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ob-gzhandler.php
 */
function ob_gzhandler($data, $flags)
{
}

/**
 * Output a gz-file
 *
 * mixed $filename
 * mixed|null $use_include_path
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readgzfile.php
 */
function readgzfile($filename, $use_include_path = null)
{
}

/**
 * Uncompress any raw/gzip/zlib encoded data
 *
 * mixed $data
 * mixed|null $max_decoded_len
 *
 * @return string
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.zlib-decode.php
 */
function zlib_decode($data, $max_decoded_len = null)
{
}

/**
 * Compress data with the specified encoding
 *
 * mixed $data
 * mixed $encoding
 * mixed|null $level
 *
 * @return string
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.zlib-encode.php
 */
function zlib_encode($data, $encoding, $level = null)
{
}

/**
 * Returns the coding type used for output compression
 *
 * @return string
 *
 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.zlib-get-coding-type.php
 */
function zlib_get_coding_type()
{
}
