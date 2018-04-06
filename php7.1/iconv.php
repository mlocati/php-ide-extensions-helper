<?php
// Start of extension: iconv
// - parsed on POSIX with PHP 7.1.15 (extension version 7.1.15)
// - parsed on Windows with PHP 7.1.15 (extension version 7.1.15)

/**
 * <code>string</code>
 *
 * @link http://www.php.net/manual/en/iconv.constants.php#constant.iconv-impl
 *
 * @var string
 */
const ICONV_IMPL = 'glibc';

/**
 * <code>integer</code>
 *
 * @link http://www.php.net/manual/en/iconv.constants.php#constant.iconv-mime-decode-continue-on-error
 *
 * @var int
 */
const ICONV_MIME_DECODE_CONTINUE_ON_ERROR = 2;

/**
 * <code>integer</code>
 *
 * @link http://www.php.net/manual/en/iconv.constants.php#constant.iconv-mime-decode-strict
 *
 * @var int
 */
const ICONV_MIME_DECODE_STRICT = 1;

/**
 * <code>string</code>
 *
 * @link http://www.php.net/manual/en/iconv.constants.php#constant.iconv-version
 *
 * @var string
 */
const ICONV_VERSION = '2.19';

/**
 * Convert string to requested character encoding
 *
 * mixed $in_charset
 * mixed $out_charset
 * mixed $str
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iconv.php
 */
function iconv($in_charset, $out_charset, $str): string
{
}

/**
 * Retrieve internal configuration variables of iconv extension
 *
 * mixed|null $type
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iconv-get-encoding.php
 */
function iconv_get_encoding($type = null)
{
}

/**
 * Decodes a <code>MIME</code> header field
 *
 * mixed $encoded_string
 * mixed|null $mode
 * mixed|null $charset
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iconv-mime-decode.php
 */
function iconv_mime_decode($encoded_string, $mode = null, $charset = null): string
{
}

/**
 * Decodes multiple <code>MIME</code> header fields at once
 *
 * mixed $headers
 * mixed|null $mode
 * mixed|null $charset
 *
 * @return array
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iconv-mime-decode-headers.php
 */
function iconv_mime_decode_headers($headers, $mode = null, $charset = null): array
{
}

/**
 * Composes a <code>MIME</code> header field
 *
 * mixed $field_name
 * mixed $field_value
 * mixed|null $preference
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iconv-mime-encode.php
 */
function iconv_mime_encode($field_name, $field_value, $preference = null): string
{
}

/**
 * Set current setting for character encoding conversion
 *
 * mixed $type
 * mixed $charset
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iconv-set-encoding.php
 */
function iconv_set_encoding($type, $charset): bool
{
}

/**
 * Returns the character count of string
 *
 * mixed $str
 * mixed|null $charset
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iconv-strlen.php
 */
function iconv_strlen($str, $charset = null): int
{
}

/**
 * Finds position of first occurrence of a needle within a haystack
 *
 * mixed $haystack
 * mixed $needle
 * mixed|null $offset
 * mixed|null $charset
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iconv-strpos.php
 */
function iconv_strpos($haystack, $needle, $offset = null, $charset = null): int
{
}

/**
 * Finds the last occurrence of a needle within a haystack
 *
 * mixed $haystack
 * mixed $needle
 * mixed|null $charset
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iconv-strrpos.php
 */
function iconv_strrpos($haystack, $needle, $charset = null): int
{
}

/**
 * Cut out part of a string
 *
 * mixed $str
 * mixed $offset
 * mixed|null $length
 * mixed|null $charset
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iconv-substr.php
 */
function iconv_substr($str, $offset, $length = null, $charset = null): string
{
}
