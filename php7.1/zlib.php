<?php
// Start of extension: zlib
// - parsed on POSIX with PHP 7.1.15 (extension version 7.1.15)
// - parsed on Windows with PHP 7.1.15 (extension version 7.1.15)

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
 * Available as of PHP 7.0.0.
 *
 * @link http://www.php.net/manual/en/zlib.constants.php#constant.zlib-no-flush
 *
 * @var int
 */
const ZLIB_NO_FLUSH = 0;

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
 * Incrementally deflate data
 *
 * @param mixed $resource
 * @param mixed $add
 * @param mixed|null $flush_behavior
 *
 * @return string
 *
 * @since PHP 7
 *
 * @link http://www.php.net/manual/en/function.deflate-add.php
 */
function deflate_add($resource, $add, $flush_behavior = null): string
{
}

/**
 * Initialize an incremental deflate context
 *
 * @param mixed $encoding
 * @param mixed|null $level
 *
 * @return resource
 *
 * @since PHP 7
 *
 * @link http://www.php.net/manual/en/function.deflate-init.php
 */
function deflate_init($encoding, $level = null)
{
}

/**
 * Close an open gz-file pointer
 *
 * @param mixed $fp
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzclose.php
 */
function gzclose($fp): bool
{
}

/**
 * Compress a string
 *
 * @param mixed $data
 * @param mixed|null $level
 * @param mixed|null $encoding
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzcompress.php
 */
function gzcompress($data, $level = null, $encoding = null): string
{
}

/**
 * Decodes a gzip compressed string
 *
 * @param mixed $data
 * @param mixed|null $max_decoded_len
 *
 * @return string
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzdecode.php
 */
function gzdecode($data, $max_decoded_len = null): string
{
}

/**
 * Deflate a string
 *
 * @param mixed $data
 * @param mixed|null $level
 * @param mixed|null $encoding
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzdeflate.php
 */
function gzdeflate($data, $level = null, $encoding = null): string
{
}

/**
 * Create a gzip compressed string
 *
 * @param mixed $data
 * @param mixed|null $level
 * @param mixed|null $encoding
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzencode.php
 */
function gzencode($data, $level = null, $encoding = null): string
{
}

/**
 * Test for <code>EOF</code> on a gz-file pointer
 *
 * @param mixed $fp
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzeof.php
 */
function gzeof($fp): int
{
}

/**
 * Read entire gz-file into an array
 *
 * @param mixed $filename
 * @param mixed|null $use_include_path
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
 * @param mixed $fp
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzgetc.php
 */
function gzgetc($fp): string
{
}

/**
 * Get line from file pointer
 *
 * @param mixed $fp
 * @param mixed|null $length
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzgets.php
 */
function gzgets($fp, $length = null): string
{
}

/**
 * Get line from gz-file pointer and strip HTML tags
 *
 * @param mixed $fp
 * @param mixed|null $length
 * @param mixed|null $allowable_tags
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzgetss.php
 */
function gzgetss($fp, $length = null, $allowable_tags = null): string
{
}

/**
 * Inflate a deflated string
 *
 * @param mixed $data
 * @param mixed|null $max_decoded_len
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzinflate.php
 */
function gzinflate($data, $max_decoded_len = null): string
{
}

/**
 * Open gz-file
 *
 * @param mixed $filename
 * @param mixed $mode
 * @param mixed|null $use_include_path
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
 * @param mixed $fp
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzpassthru.php
 */
function gzpassthru($fp): int
{
}

/**
 * Alias of <code>gzwrite</code>
 *
 * @param mixed $fp
 * @param mixed $str
 * @param mixed|null $length
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
 * @param mixed $fp
 * @param mixed $length
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzread.php
 */
function gzread($fp, $length): string
{
}

/**
 * Rewind the position of a gz-file pointer
 *
 * @param mixed $fp
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzrewind.php
 */
function gzrewind($fp): bool
{
}

/**
 * Seek on a gz-file pointer
 *
 * @param mixed $fp
 * @param mixed $offset
 * @param mixed|null $whence
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzseek.php
 */
function gzseek($fp, $offset, $whence = null): int
{
}

/**
 * Tell gz-file pointer read/write position
 *
 * @param mixed $fp
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gztell.php
 */
function gztell($fp): int
{
}

/**
 * Uncompress a compressed string
 *
 * @param mixed $data
 * @param mixed|null $max_decoded_len
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzuncompress.php
 */
function gzuncompress($data, $max_decoded_len = null): string
{
}

/**
 * Binary-safe gz-file write
 *
 * @param mixed $fp
 * @param mixed $str
 * @param mixed|null $length
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gzwrite.php
 */
function gzwrite($fp, $str, $length = null): int
{
}

/**
 * Incrementally inflate encoded data
 *
 * @param mixed $context
 * @param mixed $encoded_data
 * @param mixed|null $flush_mode
 *
 * @return string
 *
 * @since PHP 7
 *
 * @link http://www.php.net/manual/en/function.inflate-add.php
 */
function inflate_add($context, $encoded_data, $flush_mode = null): string
{
}

/**
 * Initialize an incremental inflate context
 *
 * @param mixed $encoding
 * @param mixed|null $options
 *
 * @return resource
 *
 * @since PHP 7
 *
 * @link http://www.php.net/manual/en/function.inflate-init.php
 */
function inflate_init($encoding, $options = null)
{
}

/**
 * ob_start callback function to gzip output buffer
 *
 * @param mixed $data
 * @param mixed $flags
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ob-gzhandler.php
 */
function ob_gzhandler($data, $flags): string
{
}

/**
 * Output a gz-file
 *
 * @param mixed $filename
 * @param mixed|null $use_include_path
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readgzfile.php
 */
function readgzfile($filename, $use_include_path = null): int
{
}

/**
 * Uncompress any raw/gzip/zlib encoded data
 *
 * @param mixed $data
 * @param mixed|null $max_decoded_len
 *
 * @return string
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.zlib-decode.php
 */
function zlib_decode($data, $max_decoded_len = null): string
{
}

/**
 * Compress data with the specified encoding
 *
 * @param mixed $data
 * @param mixed $encoding
 * @param mixed|null $level
 *
 * @return string
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.zlib-encode.php
 */
function zlib_encode($data, $encoding, $level = null): string
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
function zlib_get_coding_type(): string
{
}
