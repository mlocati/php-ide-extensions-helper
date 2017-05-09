<?php
// Documentation generated automatically for extension zlib v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
/*
 * INI entries:
 * zlib.output_compression = '0'
 * zlib.output_compression_level = '-1'
 * zlib.output_handler = ''
 */
const FORCE_DEFLATE = 15;
const FORCE_GZIP = 31;
const ZLIB_BLOCK = 5;
const ZLIB_DEFAULT_STRATEGY = 0;
const ZLIB_ENCODING_DEFLATE = 15;
const ZLIB_ENCODING_GZIP = 31;
const ZLIB_ENCODING_RAW = -15;
const ZLIB_FILTERED = 1;
const ZLIB_FINISH = 4;
const ZLIB_FIXED = 4;
const ZLIB_FULL_FLUSH = 3;
const ZLIB_HUFFMAN_ONLY = 2;
const ZLIB_NO_FLUSH = 0;
const ZLIB_PARTIAL_FLUSH = 1;
const ZLIB_RLE = 3;
const ZLIB_SYNC_FLUSH = 2;
const ZLIB_VERNUM = 4736;
const ZLIB_VERSION = '1.2.8';
// No classes defined
function readgzfile($filename, $use_include_path = null)
{
}
function gzrewind($fp)
{
}
function gzclose($fp)
{
}
function gzeof($fp)
{
}
function gzgetc($fp)
{
}
function gzgets($fp, $length = null)
{
}
function gzgetss($fp, $length = null, $allowable_tags = null)
{
}
function gzread($fp, $length)
{
}
function gzopen($filename, $mode, $use_include_path = null)
{
}
function gzpassthru($fp)
{
}
function gzseek($fp, $offset, $whence = null)
{
}
function gztell($fp)
{
}
function gzwrite($fp, $str, $length = null)
{
}
function gzputs($fp, $str, $length = null)
{
}
function gzfile($filename, $use_include_path = null)
{
}
function gzcompress($data, $level = null, $encoding = null)
{
}
function gzuncompress($data, $max_decoded_len = null)
{
}
function gzdeflate($data, $level = null, $encoding = null)
{
}
function gzinflate($data, $max_decoded_len = null)
{
}
function gzencode($data, $level = null, $encoding = null)
{
}
function gzdecode($data, $max_decoded_len = null)
{
}
function zlib_encode($data, $encoding, $level = null)
{
}
function zlib_decode($data, $max_decoded_len = null)
{
}
function zlib_get_coding_type()
{
}
function deflate_init($encoding, $level = null)
{
}
function deflate_add($resource, $add, $flush_behavior = null)
{
}
function inflate_init($encoding)
{
}
function inflate_add($resource, $flush_behavior)
{
}
function ob_gzhandler($data, $flags)
{
}