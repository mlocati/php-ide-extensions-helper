<?php
// Start of extension: iconv
// - parsed on POSIX with PHP 7.2.3 (extension version 7.2.3)
// - parsed on Windows with PHP 7.2.4 (extension version 7.2.4)

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
const ICONV_VERSION = '2.24';

/**
 * Convert string to requested character encoding
 *
 * @param mixed $in_charset
 * @param mixed $out_charset
 * @param mixed $str
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
 * @param mixed|null $type
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
 * @param mixed $encoded_string
 * @param mixed|null $mode
 * @param mixed|null $charset
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
 * @param mixed $headers
 * @param mixed|null $mode
 * @param mixed|null $charset
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
 * @param mixed $field_name
 * @param mixed $field_value
 * @param mixed|null $preference
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
 * @param mixed $type
 * @param mixed $charset
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
 * @param mixed $str
 * @param mixed|null $charset
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
 * @param mixed $haystack
 * @param mixed $needle
 * @param mixed|null $offset
 * @param mixed|null $charset
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
 * @param mixed $haystack
 * @param mixed $needle
 * @param mixed|null $charset
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
 * @param mixed $str
 * @param mixed $offset
 * @param mixed|null $length
 * @param mixed|null $charset
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
