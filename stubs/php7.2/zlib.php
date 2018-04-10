<?php
// Start of extension: zlib
// - parsed on POSIX with PHP 7.2.4 (extension version 7.2.4)
// - parsed on Windows with PHP 7.2.4 (extension version 7.2.4)

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
 * Available as of PHP 7.0.0.
 *
 * @link http://www.php.net/manual/en/zlib.constants.php#constant.zlib-block
 *
 * @var int
 */
const ZLIB_BLOCK = 5;

/**
 * @var int
 */
const ZLIB_BUF_ERROR = -5;

/**
 * @var int
 */
const ZLIB_DATA_ERROR = -3;

/**
 * Available as of PHP 7.0.0.
 *
 * @link http://www.php.net/manual/en/zlib.constants.php#constant.zlib-default-strategy
 *
 * @var int
 */
const ZLIB_DEFAULT_STRATEGY = 0;

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
 * @var int
 */
const ZLIB_ERRNO = -1;

/**
 * Available as of PHP 7.0.0.
 *
 * @link http://www.php.net/manual/en/zlib.constants.php#constant.zlib-filtered
 *
 * @var int
 */
const ZLIB_FILTERED = 1;

/**
 * Available as of PHP 7.0.0.
 *
 * @link http://www.php.net/manual/en/zlib.constants.php#constant.zlib-finish
 *
 * @var int
 */
const ZLIB_FINISH = 4;

/**
 * Available as of PHP 7.0.0.
 *
 * @link http://www.php.net/manual/en/zlib.constants.php#constant.zlib-fixed
 *
 * @var int
 */
const ZLIB_FIXED = 4;

/**
 * Available as of PHP 7.0.0.
 *
 * @link http://www.php.net/manual/en/zlib.constants.php#constant.zlib-full-flush
 *
 * @var int
 */
const ZLIB_FULL_FLUSH = 3;

/**
 * Available as of PHP 7.0.0.
 *
 * @link http://www.php.net/manual/en/zlib.constants.php#constant.zlib-huffman-only
 *
 * @var int
 */
const ZLIB_HUFFMAN_ONLY = 2;

/**
 * @var int
 */
const ZLIB_MEM_ERROR = -4;

/**
 * @var int
 */
const ZLIB_NEED_DICT = 2;

/**
 * Available as of PHP 7.0.0.
 *
 * @link http://www.php.net/manual/en/zlib.constants.php#constant.zlib-no-flush
 *
 * @var int
 */
const ZLIB_NO_FLUSH = 0;

/**
 * @var int
 */
const ZLIB_OK = 0;

/**
 * Available as of PHP 7.0.0.
 *
 * @link http://www.php.net/manual/en/zlib.constants.php#constant.zlib-partial-flush
 *
 * @var int
 */
const ZLIB_PARTIAL_FLUSH = 1;

/**
 * Available as of PHP 7.0.0.
 *
 * @link http://www.php.net/manual/en/zlib.constants.php#constant.zlib-rle
 *
 * @var int
 */
const ZLIB_RLE = 3;

/**
 * @var int
 */
const ZLIB_STREAM_END = 1;

/**
 * @var int
 */
const ZLIB_STREAM_ERROR = -2;

/**
 * Available as of PHP 7.0.0.
 *
 * @link http://www.php.net/manual/en/zlib.constants.php#constant.zlib-sync-flush
 *
 * @var int
 */
const ZLIB_SYNC_FLUSH = 2;

/**
 * @var int
 */
const ZLIB_VERNUM = 4736;

/**
 * @var string
 */
const ZLIB_VERSION = '1.2.8';

/**
 * @var int
 */
const ZLIB_VERSION_ERROR = -6;

/**
 * Incrementally deflate data
 *
 * @param resource $context A context created with <code>deflate_init</code>.
 * @param string $data A chunk of data to compress.
 * @param int|null $flush_mode One of <code>ZLIB_BLOCK</code>,
 * <code>ZLIB_NO_FLUSH</code>,
 * <code>ZLIB_PARTIAL_FLUSH</code>,
 * <code>ZLIB_SYNC_FLUSH</code> (default),
 * <code>ZLIB_FULL_FLUSH</code>, <code>ZLIB_FINISH</code>.
 * Normally you will want to set <code>ZLIB_NO_FLUSH</code> to
 * maximize compression, and <code>ZLIB_FINISH</code> to terminate
 * with the last chunk of data. See the zlib manual for a
 * detailed description of these constants.
 *
 * @return string Returns a chunk of compressed data, or <code>FALSE</code> on failure.
 *
 * @since PHP 7
 *
 * @link http://www.php.net/manual/en/function.deflate-add.php
 */
function deflate_add($context, string $data, int $flush_mode = ZLIB_SYNC_FLUSH): string
{
}

/**
 * Initialize an incremental deflate context
 *
 * @param int $encoding One of the <code>ZLIB_ENCODING_*</code> constants.
 * @param array|null $options An associative array which may contain the following elements:
 * <ul>
 * <li>
 * <code><code>level</code></code>
 * The compression level in range -1..9; defaults to -1.
 * </li>
 * <li>
 * <code><code>memory</code></code>
 * The compression memory level in range 1..9; defaults to 8.
 * </li>
 * <li>
 * <code><code>window</code></code>
 * The zlib window size (logarithmic) in range 8..15; defaults to 15.
 * </li>
 * <li>
 * <code><code>strategy</code></code>
 * One of <code>ZLIB_FILTERED</code>,
 * <code>ZLIB_HUFFMAN_ONLY</code>, <code>ZLIB_RLE</code>,
 * <code>ZLIB_FIXED</code> or
 * <code>ZLIB_DEFAULT_STRATEGY</code> (the default).
 * </li>
 * <li>
 * <code><code>dictionary</code></code>
 * A <code>string</code> or an <code>array</code> of <code>strings</code>
 * of the preset dictionary (default: no preset dictionary).
 * </li>
 * </ul>
 *
 * @return resource Returns a deflate context resource (<code>zlib.deflate</code>) on
 * success, or <code>FALSE</code> on failure.
 *
 * @since PHP 7
 *
 * @link http://www.php.net/manual/en/function.deflate-init.php
 */
function deflate_init(int $encoding, array $options = /* array() */ null)
{
}

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
function gzclose($zp): bool
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
function gzcompress(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_DEFLATE): string
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
function gzdecode(string $data, int $length = null): string
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
function gzdeflate(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_RAW): string
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
function gzencode(string $data, int $level = -1, int $encoding_mode = FORCE_GZIP): string
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
function gzeof($zp): int
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
function gzfile(string $filename, int $use_include_path = 0): array
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
function gzgetc($zp): string
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
function gzgets($zp, int $length = null): string
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
function gzgetss($zp, int $length = null, string $allowable_tags = null): string
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
function gzinflate(string $data, int $length = 0): string
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
function gzopen(string $filename, string $mode, int $use_include_path = 0)
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
function gzpassthru($zp): int
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
function gzread($zp, int $length): string
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
function gzrewind($zp): bool
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
function gzseek($zp, int $offset, int $whence = SEEK_SET): int
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
function gztell($zp): int
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
function gzuncompress(string $data, int $length = 0): string
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
function gzwrite($zp, string $string, int $length = null): int
{
}

/**
 * Incrementally inflate encoded data
 *
 * @param resource $context A context created with <code>inflate_init</code>.
 * @param string $encoded_data A chunk of compressed data.
 * @param int|null $flush_mode One of <code>ZLIB_BLOCK</code>,
 * <code>ZLIB_NO_FLUSH</code>,
 * <code>ZLIB_PARTIAL_FLUSH</code>,
 * <code>ZLIB_SYNC_FLUSH</code> (default),
 * <code>ZLIB_FULL_FLUSH</code>, <code>ZLIB_FINISH</code>.
 * Normally you will want to set <code>ZLIB_NO_FLUSH</code> to
 * maximize compression, and <code>ZLIB_FINISH</code> to terminate
 * with the last chunk of data. See the zlib manual for a
 * detailed description of these constants.
 *
 * @return string Returns a chunk of uncompressed data, or <code>FALSE</code> on failure.
 *
 * @since PHP 7
 *
 * @link http://www.php.net/manual/en/function.inflate-add.php
 */
function inflate_add($context, string $encoded_data, int $flush_mode = ZLIB_SYNC_FLUSH): string
{
}

/**
 * Get number of bytes read so far
 *
 * @param resource $resource
 *
 * @return int Returns number of bytes read so far or <code>FALSE</code> on failure.
 *
 * @since PHP 7 >= 7.2.0
 *
 * @link http://www.php.net/manual/en/function.inflate-get-read-len.php
 */
function inflate_get_read_len($resource): int
{
}

/**
 * Get decompression status
 *
 * @param resource $resource
 *
 * @return int Returns decompression status or <code>FALSE</code> on failure.
 *
 * @since PHP 7 >= 7.2.0
 *
 * @link http://www.php.net/manual/en/function.inflate-get-status.php
 */
function inflate_get_status($resource): int
{
}

/**
 * Initialize an incremental inflate context
 *
 * @param int $encoding One of the <code>ZLIB_ENCODING_*</code> constants.
 * @param array|null $options An associative array which may contain the following elements:
 * <ul>
 * <li>
 * <code><code>level</code></code>
 * The compression level in range -1..9; defaults to -1.
 * </li>
 * <li>
 * <code><code>memory</code></code>
 * The compression memory level in range 1..9; defaults to 8.
 * </li>
 * <li>
 * <code><code>window</code></code>
 * The zlib window size (logarithmic) in range 8..15; defaults to 15.
 * </li>
 * <li>
 * <code><code>strategy</code></code>
 * One of <code>ZLIB_FILTERED</code>,
 * <code>ZLIB_HUFFMAN_ONLY</code>, <code>ZLIB_RLE</code>,
 * <code>ZLIB_FIXED</code> or
 * <code>ZLIB_DEFAULT_STRATEGY</code> (the default).
 * </li>
 * <li>
 * <code><code>dictionary</code></code>
 * A <code>string</code> or an <code>array</code> of <code>strings</code>
 * of the preset dictionary (default: no preset dictionary).
 * </li>
 * </ul>
 *
 * @return resource Returns an inflate context resource (<code>zlib.inflate</code>) on
 * success, or <code>FALSE</code> on failure.
 *
 * @since PHP 7
 *
 * @link http://www.php.net/manual/en/function.inflate-init.php
 */
function inflate_init(int $encoding, array $options = /* array() */ null)
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
function ob_gzhandler(string $buffer, int $mode): string
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
function readgzfile(string $filename, int $use_include_path = 0): int
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
function zlib_decode(string $data, string $max_decoded_len = null): string
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
function zlib_encode(string $data, int $encoding, int $level = -1): string
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
function zlib_get_coding_type(): string
{
}
