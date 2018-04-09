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
 * @param resource $zp The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <code>gzopen</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzclose.php
 */
function gzclose($zp)
{
}

/**
 * Compress a string
 *
 * @param string $data The data to compress.
 * @param int|null $level The level of compression. Can be given as 0 for no compression up to 9
 * for maximum compression.
 * @param int|null $encoding One of <code>ZLIB_ENCODING_*</code> constants.
 *
 * @return string The compressed string or <code>FALSE</code> if an error occurred.
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzcompress.php
 */
function gzcompress($data, $level = -1, $encoding = ZLIB_ENCODING_DEFLATE)
{
}

/**
 * Decodes a gzip compressed string
 *
 * @param string $data The data to decode, encoded by <code>gzencode</code>.
 * @param int $length The maximum length of data to decode.
 *
 * @return string The decoded string, or <code>FALSE</code> if an error occurred.
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzdecode.php
 */
function gzdecode($data, $length = null)
{
}

/**
 * Deflate a string
 *
 * @param string $data The data to deflate.
 * @param int|null $level The level of compression. Can be given as 0 for no compression up to 9
 * for maximum compression. If not given, the default compression level will
 * be the default compression level of the zlib library.
 * @param int|null $encoding One of <code>ZLIB_ENCODING_*</code> constants.
 *
 * @return string The deflated string or <code>FALSE</code> if an error occurred.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzdeflate.php
 */
function gzdeflate($data, $level = -1, $encoding = ZLIB_ENCODING_RAW)
{
}

/**
 * Create a gzip compressed string
 *
 * @param string $data The data to encode.
 * @param int|null $level The level of compression. Can be given as 0 for no compression up to 9
 * for maximum compression. If not given, the default compression level will
 * be the default compression level of the zlib library.
 * @param int|null $encoding_mode The encoding mode. Can be <code>FORCE_GZIP</code> (the default)
 * or <code>FORCE_DEFLATE</code>.
 *
 * @return string The encoded string, or <code>FALSE</code> if an error occurred.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzencode.php
 */
function gzencode($data, $level = -1, $encoding_mode = FORCE_GZIP)
{
}

/**
 * Test for <code>EOF</code> on a gz-file pointer
 *
 * @param resource $zp The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <code>gzopen</code>.
 *
 * @return int Returns <code>TRUE</code> if the gz-file pointer is at <code>EOF</code> or an error occurs;
 * otherwise returns <code>FALSE</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzeof.php
 */
function gzeof($zp)
{
}

/**
 * Read entire gz-file into an array
 *
 * @param string $filename The file name.
 * @param int|null $use_include_path You can set this optional parameter to <code>1</code>, if you
 * want to search for the file in the include_path too.
 *
 * @return array An array containing the file, one line per cell, empty lines included, and with newlines still attached.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzfile.php
 */
function gzfile($filename, $use_include_path = 0)
{
}

/**
 * Get character from gz-file pointer
 *
 * @param resource $zp The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <code>gzopen</code>.
 *
 * @return string The uncompressed character or <code>FALSE</code> on <code>EOF</code> (unlike <code>gzeof</code>).
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzgetc.php
 */
function gzgetc($zp)
{
}

/**
 * Get line from file pointer
 *
 * @param resource $zp The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <code>gzopen</code>.
 * @param int $length The length of data to get.
 *
 * @return string The uncompressed string, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzgets.php
 */
function gzgets($zp, $length = null)
{
}

/**
 * Get line from gz-file pointer and strip HTML tags
 *
 * @param resource $zp The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <code>gzopen</code>.
 * @param int $length The length of data to get.
 * @param string $allowable_tags You can use this optional parameter to specify tags which should not
 * be stripped.
 *
 * @return string The uncompressed and stripped string, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzgetss.php
 */
function gzgetss($zp, $length = null, $allowable_tags = null)
{
}

/**
 * Inflate a deflated string
 *
 * @param string $data The data compressed by <code>gzdeflate</code>.
 * @param int|null $length The maximum length of data to decode.
 *
 * @return string The original uncompressed data or <code>FALSE</code> on error.
 * The function will return an error if the uncompressed data is more than
 * 32768 times the length of the compressed input <code>data</code>
 * or more than the optional parameter <code>length</code>.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzinflate.php
 */
function gzinflate($data, $length = 0)
{
}

/**
 * Open gz-file
 *
 * @param string $filename The file name.
 * @param string $mode As in <code>fopen</code> (<code>rb</code> or
 * <code>wb</code>) but can also include a compression level
 * (<code>wb9</code>) or a strategy: <code>f</code> for
 * filtered data as in <code>wb6f</code>, <code>h</code> for
 * <code>Huffman only compression</code> as in <code>wb1h</code>.
 * (See the description of <code>deflateInit2</code>
 * in <code>zlib.h</code> for
 * more information about the strategy parameter.)
 * @param int|null $use_include_path You can set this optional parameter to <code>1</code>, if you
 * want to search for the file in the include_path too.
 *
 * @return resource Returns a file pointer to the file opened, after that, everything you read
 * from this file descriptor will be transparently decompressed and what you
 * write gets compressed.
 * If the open fails, the function returns <code>FALSE</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzopen.php
 */
function gzopen($filename, $mode, $use_include_path = 0)
{
}

/**
 * Output all remaining data on a gz-file pointer
 *
 * @param resource $zp The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <code>gzopen</code>.
 *
 * @return int The number of uncompressed characters read from <code>gz</code>
 * and passed through to the input, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzpassthru.php
 */
function gzpassthru($zp)
{
}

/**
 * Alias of <code>gzwrite</code>
 *
 * @param mixed $fp
 * @param mixed $str
 * @param mixed $length
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
 * @param resource $zp The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <code>gzopen</code>.
 * @param int $length The number of bytes to read.
 *
 * @return string The data that have been read.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzread.php
 */
function gzread($zp, $length)
{
}

/**
 * Rewind the position of a gz-file pointer
 *
 * @param resource $zp The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <code>gzopen</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzrewind.php
 */
function gzrewind($zp)
{
}

/**
 * Seek on a gz-file pointer
 *
 * @param resource $zp The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <code>gzopen</code>.
 * @param int $offset The seeked offset.
 * @param int|null $whence <code>whence</code> values are:
 * <ul>
 * <li><code>SEEK_SET</code> - Set position equal to <code>offset</code> bytes.</li>
 * <li><code>SEEK_CUR</code> - Set position to current location plus <code>offset</code>.</li>
 * </ul>
 *
 * @return int Upon success, returns 0; otherwise, returns -1. Note that seeking
 * past EOF is not considered an error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzseek.php
 */
function gzseek($zp, $offset, $whence = SEEK_SET)
{
}

/**
 * Tell gz-file pointer read/write position
 *
 * @param resource $zp The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <code>gzopen</code>.
 *
 * @return int The position of the file pointer or <code>FALSE</code> if an error occurs.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gztell.php
 */
function gztell($zp)
{
}

/**
 * Uncompress a compressed string
 *
 * @param string $data The data compressed by <code>gzcompress</code>.
 * @param int|null $length The maximum length of data to decode.
 *
 * @return string The original uncompressed data or <code>FALSE</code> on error.
 * The function will return an error if the uncompressed data is more than
 * 32768 times the length of the compressed input <code>data</code>
 * or more than the optional parameter <code>length</code>.
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzuncompress.php
 */
function gzuncompress($data, $length = 0)
{
}

/**
 * Binary-safe gz-file write
 *
 * @param resource $zp The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <code>gzopen</code>.
 * @param string $string The string to write.
 * @param int $length The number of uncompressed bytes to write. If supplied, writing will
 * stop after <code>length</code> (uncompressed) bytes have been
 * written or the end of <code>string</code> is reached,
 * whichever comes first.
 *
 * @return int Returns the number of (uncompressed) bytes written to the given gz-file
 * stream.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzwrite.php
 */
function gzwrite($zp, $string, $length = null)
{
}

/**
 * ob_start callback function to gzip output buffer
 *
 * @param string $buffer
 * @param int $mode
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ob-gzhandler.php
 */
function ob_gzhandler($buffer, $mode)
{
}

/**
 * Output a gz-file
 *
 * @param string $filename The file name. This file will be opened from the filesystem and its
 * contents written to standard output.
 * @param int|null $use_include_path You can set this optional parameter to <code>1</code>, if you
 * want to search for the file in the include_path too.
 *
 * @return int Returns the number of (uncompressed) bytes read from the file. If
 * an error occurs, <code>FALSE</code> is returned and unless the function was
 * called as <code>@readgzfile</code>, an error message is
 * printed.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readgzfile.php
 */
function readgzfile($filename, $use_include_path = 0)
{
}

/**
 * Uncompress any raw/gzip/zlib encoded data
 *
 * @param string $data
 * @param string $max_decoded_len
 *
 * @return string Returns the uncompressed data, or <code>FALSE</code> on failure.
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
 * @param string $data The data to compress.
 * @param int $encoding The compression algorithm. Either <code>ZLIB_ENCODING_RAW</code>,
 * <code>ZLIB_ENCODING_DEFLATE</code> or
 * <code>ZLIB_ENCODING_GZIP</code>.
 * @param int|null $level
 *
 * @return string
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.zlib-encode.php
 */
function zlib_encode($data, $encoding, $level = -1)
{
}

/**
 * Returns the coding type used for output compression
 *
 * @return string Possible return values are <code>gzip</code>, <code>deflate</code>,
 * or <code>FALSE</code>.
 *
 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.zlib-get-coding-type.php
 */
function zlib_get_coding_type()
{
}
