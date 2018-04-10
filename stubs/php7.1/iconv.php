<?php
// Start of extension: iconv
// - parsed on POSIX with PHP 7.1.16 (extension version 7.1.16)
// - parsed on Windows with PHP 7.1.16 (extension version 7.1.16)

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
 * @param string $in_charset The input charset.
 * @param string $out_charset The output charset.
 * @param string $str The string to be converted.
 *
 * @return string Returns the converted string or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iconv.php
 */
function iconv(string $in_charset, string $out_charset, string $str): string
{
}

/**
 * Retrieve internal configuration variables of iconv extension
 *
 * @param string|null $type The value of the optional <code>type</code> can be:
 * <ul>
 * <li>all</li>
 * <li>input_encoding</li>
 * <li>output_encoding</li>
 * <li>internal_encoding</li>
 * </ul>
 *
 * @return mixed Returns the current value of the internal configuration variable if
 * successful or <code>FALSE</code> on failure.
 * If <code>type</code> is omitted or set to "all",
 * <code>iconv_get_encoding</code> returns an array that
 * stores all these variables.
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iconv-get-encoding.php
 */
function iconv_get_encoding(string $type = "all")
{
}

/**
 * Decodes a <code>MIME</code> header field
 *
 * @param string $encoded_header The encoded header, as a string.
 * @param int|null $mode <code>mode</code> determines the behaviour in the event
 * <code>iconv_mime_decode</code> encounters a malformed
 * <code>MIME</code> header field. You can specify any combination
 * of the following bitmasks.
 * <table>
 * <title>Bitmasks acceptable to <code>iconv_mime_decode</code></title>
 * <thead>
 * <tr>
 * <td>Value</td><td>Constant</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>1</td><td>ICONV_MIME_DECODE_STRICT</td><td>
 * If set, the given header is decoded in full conformance with the
 * standards defined in RFC2047.
 * This option is disabled by default because there are a lot of
 * broken mail user agents that don't follow the specification and don't
 * produce correct <code>MIME</code> headers.
 * </td>
 * </tr>
 * <tr>
 * <td>2</td><td>ICONV_MIME_DECODE_CONTINUE_ON_ERROR</td><td>
 * If set, <code>iconv_mime_decode_headers</code>
 * attempts to ignore any grammatical errors and continue to process
 * a given header.
 * </td>
 * </tr>
 * </tbody>
 * </table>
 * @param string|null $charset The optional <code>charset</code> parameter specifies the
 * character set to represent the result by. If omitted,
 * iconv.internal_encoding
 * will be used.
 *
 * @return string Returns a decoded <code>MIME</code> field on success,
 * or <code>FALSE</code> if an error occurs during the decoding.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iconv-mime-decode.php
 */
function iconv_mime_decode(string $encoded_header, int $mode = 0, string $charset = /* ini_get("iconv.internal_encoding") */ null): string
{
}

/**
 * Decodes multiple <code>MIME</code> header fields at once
 *
 * @param string $encoded_headers The encoded headers, as a string.
 * @param int|null $mode <code>mode</code> determines the behaviour in the event
 * <code>iconv_mime_decode_headers</code> encounters a malformed
 * <code>MIME</code> header field. You can specify any combination
 * of the following bitmasks.
 * <table>
 * <title>Bitmasks acceptable to <code>iconv_mime_decode_headers</code></title>
 * <thead>
 * <tr>
 * <td>Value</td><td>Constant</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>1</td><td>ICONV_MIME_DECODE_STRICT</td><td>
 * If set, the given header is decoded in full conformance with the
 * standards defined in RFC2047.
 * This option is disabled by default because there are a lot of
 * broken mail user agents that don't follow the specification and don't
 * produce correct <code>MIME</code> headers.
 * </td>
 * </tr>
 * <tr>
 * <td>2</td><td>ICONV_MIME_DECODE_CONTINUE_ON_ERROR</td><td>
 * If set, <code>iconv_mime_decode_headers</code>
 * attempts to ignore any grammatical errors and continue to process
 * a given header.
 * </td>
 * </tr>
 * </tbody>
 * </table>
 * @param string|null $charset The optional <code>charset</code> parameter specifies the
 * character set to represent the result by. If omitted,
 * iconv.internal_encoding
 * will be used.
 *
 * @return array Returns an associative array that holds a whole set of
 * <code>MIME</code> header fields specified by
 * <code>encoded_headers</code> on success, or <code>FALSE</code>
 * if an error occurs during the decoding.
 * Each key of the return value represents an individual
 * field name and the corresponding element represents a field value.
 * If more than one field of the same name are present,
 * <code>iconv_mime_decode_headers</code> automatically incorporates
 * them into a numerically indexed array in the order of occurrence.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iconv-mime-decode-headers.php
 */
function iconv_mime_decode_headers(string $encoded_headers, int $mode = 0, string $charset = /* ini_get("iconv.internal_encoding") */ null): array
{
}

/**
 * Composes a <code>MIME</code> header field
 *
 * @param string $field_name The field name.
 * @param string $field_value The field value.
 * @param array|null $preferences You can control the behaviour of <code>iconv_mime_encode</code>
 * by specifying an associative array that contains configuration items
 * to the optional third parameter <code>preferences</code>.
 * The items supported by <code>iconv_mime_encode</code> are
 * listed below. Note that item names are treated case-sensitive.
 * <table>
 * <title>Configuration items supported by <code>iconv_mime_encode</code></title>
 * <thead>
 * <tr>
 * <td>Item</td><td>Type</td><td>Description</td><td>Default value</td><td>Example</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>scheme</td><td><code>string</code></td><td>
 * Specifies the method to encode a field value by. The value of
 * this item may be either "B" or "Q", where "B" stands for
 * <code>base64</code> encoding scheme and "Q" stands for
 * <code>quoted-printable</code> encoding scheme.
 * </td><td>B</td><td>B</td>
 * </tr>
 * <tr>
 * <td>input-charset</td><td><code>string</code></td><td>
 * Specifies the character set in which the first parameter
 * <code>field_name</code> and the second parameter
 * <code>field_value</code> are presented. If not given,
 * <code>iconv_mime_encode</code> assumes those parameters
 * are presented to it in the
 * iconv.internal_encoding
 * ini setting.
 * </td><td>
 * iconv.internal_encoding
 * </td><td>ISO-8859-1</td>
 * </tr>
 * <tr>
 * <td>output-charset</td><td><code>string</code></td><td>
 * Specifies the character set to use to compose the
 * <code>MIME</code> header.
 * </td><td>
 * iconv.internal_encoding
 * </td><td>UTF-8</td>
 * </tr>
 * <tr>
 * <td>line-length</td><td><code>integer</code></td><td>
 * Specifies the maximum length of the header lines. The resulting
 * header is "folded" to a set of multiple lines in case
 * the resulting header field would be longer than the value of this
 * parameter, according to
 * RFC2822 - Internet Message Format.
 * If not given, the length will be limited to 76 characters.
 * </td><td>76</td><td>996</td>
 * </tr>
 * <tr>
 * <td>line-break-chars</td><td><code>string</code></td><td>
 * Specifies the sequence of characters to append to each line
 * as an end-of-line sign when "folding" is performed on a long header
 * field. If not given, this defaults to "\r\n"
 * (<code>CR</code> <code>LF</code>). Note that
 * this parameter is always treated as an ASCII string regardless
 * of the value of <code>input-charset</code>.
 * </td><td>\r\n</td><td>\n</td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @return string Returns an encoded <code>MIME</code> field on success,
 * or <code>FALSE</code> if an error occurs during the encoding.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iconv-mime-encode.php
 */
function iconv_mime_encode(string $field_name, string $field_value, array $preferences = null): string
{
}

/**
 * Set current setting for character encoding conversion
 *
 * @param string $type The value of <code>type</code> can be any one of these:
 * <ul>
 * <li>input_encoding</li>
 * <li>output_encoding</li>
 * <li>internal_encoding</li>
 * </ul>
 * @param string $charset The character set.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iconv-set-encoding.php
 */
function iconv_set_encoding(string $type, string $charset): bool
{
}

/**
 * Returns the character count of string
 *
 * @param string $str The string.
 * @param string|null $charset If <code>charset</code> parameter is omitted,
 * <code>str</code> is assumed to be encoded in
 * iconv.internal_encoding.
 *
 * @return int Returns the character count of <code>str</code>, as an integer.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iconv-strlen.php
 */
function iconv_strlen(string $str, string $charset = /* ini_get("iconv.internal_encoding") */ null): int
{
}

/**
 * Finds position of first occurrence of a needle within a haystack
 *
 * @param string $haystack The entire string.
 * @param string $needle The searched substring.
 * @param int|null $offset The optional <code>offset</code> parameter specifies
 * the position from which the search should be performed.
 * If the offset is negative, it is counted from the end of the string.
 * @param string|null $charset If <code>charset</code> parameter is omitted,
 * <code>string</code> are assumed to be encoded in
 * iconv.internal_encoding.
 *
 * @return int Returns the numeric position of the first occurrence of
 * <code>needle</code> in <code>haystack</code>.
 * If <code>needle</code> is not found,
 * <code>iconv_strpos</code> will return <code>FALSE</code>.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iconv-strpos.php
 */
function iconv_strpos(string $haystack, string $needle, int $offset = 0, string $charset = /* ini_get("iconv.internal_encoding") */ null): int
{
}

/**
 * Finds the last occurrence of a needle within a haystack
 *
 * @param string $haystack The entire string.
 * @param string $needle The searched substring.
 * @param string|null $charset If <code>charset</code> parameter is omitted,
 * <code>string</code> are assumed to be encoded in
 * iconv.internal_encoding.
 *
 * @return int Returns the numeric position of the last occurrence of
 * <code>needle</code> in <code>haystack</code>.
 * If <code>needle</code> is not found,
 * <code>iconv_strrpos</code> will return <code>FALSE</code>.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iconv-strrpos.php
 */
function iconv_strrpos(string $haystack, string $needle, string $charset = /* ini_get("iconv.internal_encoding") */ null): int
{
}

/**
 * Cut out part of a string
 *
 * @param string $str The original string.
 * @param int $offset If <code>offset</code> is non-negative,
 * <code>iconv_substr</code> cuts the portion out of
 * <code>str</code> beginning at <code>offset</code>'th
 * character, counting from zero.
 * @param int|null $length If <code>length</code> is given and is positive, the return
 * value will contain at most <code>length</code> characters
 * of the portion that begins at <code>offset</code>
 * (depending on the length of <code>string</code>).
 * @param string|null $charset If <code>charset</code> parameter is omitted,
 * <code>string</code> are assumed to be encoded in
 * iconv.internal_encoding.
 *
 * @return string Returns the portion of <code>str</code> specified by the
 * <code>offset</code> and <code>length</code> parameters.
 * If <code>str</code> is shorter than <code>offset</code>
 * characters long, <code>FALSE</code> will be returned.
 * If <code>str</code> is exactly <code>offset</code>
 * characters long, an empty string will be returned.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iconv-substr.php
 */
function iconv_substr(string $str, int $offset, int $length = /* iconv_strlen($str, $charset) */ null, string $charset = /* ini_get("iconv.internal_encoding") */ null): string
{
}
