<?php
// Documentation generated automatically for extension iconv v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
/*
 * INI entries:
 * iconv.input_encoding = ''
 * iconv.output_encoding = ''
 * iconv.internal_encoding = ''
 */
const ICONV_IMPL = "\"libiconv\"";
const ICONV_MIME_DECODE_CONTINUE_ON_ERROR = 2;
const ICONV_MIME_DECODE_STRICT = 1;
const ICONV_VERSION = '1.15';
// No classes defined
function iconv($in_charset, $out_charset, $str)
{
}
function iconv_get_encoding($type = null)
{
}
function iconv_set_encoding($type, $charset)
{
}
function iconv_strlen($str, $charset = null)
{
}
function iconv_substr($str, $offset, $length = null, $charset = null)
{
}
function iconv_strpos($haystack, $needle, $offset = null, $charset = null)
{
}
function iconv_strrpos($haystack, $needle, $charset = null)
{
}
function iconv_mime_encode($field_name, $field_value, $preference = null)
{
}
function iconv_mime_decode($encoded_string, $mode = null, $charset = null)
{
}
function iconv_mime_decode_headers($headers, $mode = null, $charset = null)
{
}