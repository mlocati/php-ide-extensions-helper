<?php
// Start of extension: json
// - parsed on POSIX with PHP 7.0.29 (extension version 1.4.0)
// - parsed on Windows with PHP 7.0.29 (extension version 1.4.0)

/**
 * Decodes large integers as their original string value.
 * Available since PHP 5.4.0.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-bigint-as-string
 *
 * @var int
 */
const JSON_BIGINT_AS_STRING = 2;

/**
 * Control character error, possibly incorrectly encoded.
 * Available since PHP 5.3.0.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-error-ctrl-char
 *
 * @var int
 */
const JSON_ERROR_CTRL_CHAR = 3;

/**
 * The maximum stack depth has been exceeded.
 * Available since PHP 5.3.0.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-error-depth
 *
 * @var int
 */
const JSON_ERROR_DEPTH = 1;

/**
 * The value passed to <code>json_encode</code> includes either
 * <code>NAN</code>
 * or <code>INF</code>.
 * If the <code>JSON_PARTIAL_OUTPUT_ON_ERROR</code> option was
 * given, <code>0</code> will be encoded in the place of these
 * special numbers.
 * Available since PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-error-inf-or-nan
 *
 * @var int
 */
const JSON_ERROR_INF_OR_NAN = 7;

/**
 * A key starting with \u0000 character was in the string passed to
 * <code>json_decode</code> when decoding a JSON object into a PHP
 * object.
 * Available since PHP 7.0.0.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-error-invalid-property-name
 *
 * @var int
 */
const JSON_ERROR_INVALID_PROPERTY_NAME = 9;

/**
 * No error has occurred.
 * Available since PHP 5.3.0.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-error-none
 *
 * @var int
 */
const JSON_ERROR_NONE = 0;

/**
 * The object or array passed to <code>json_encode</code> include
 * recursive references and cannot be encoded.
 * If the <code>JSON_PARTIAL_OUTPUT_ON_ERROR</code> option was
 * given, <code>NULL</code> will be encoded in the place of the recursive reference.
 * Available since PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-error-recursion
 *
 * @var int
 */
const JSON_ERROR_RECURSION = 6;

/**
 * Occurs with underflow or with the modes mismatch.
 * Available since PHP 5.3.0.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-error-state-mismatch
 *
 * @var int
 */
const JSON_ERROR_STATE_MISMATCH = 2;

/**
 * Syntax error.
 * Available since PHP 5.3.0.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-error-syntax
 *
 * @var int
 */
const JSON_ERROR_SYNTAX = 4;

/**
 * A value of an unsupported type was given to
 * <code>json_encode</code>, such as a <code>resource</code>.
 * If the <code>JSON_PARTIAL_OUTPUT_ON_ERROR</code> option was
 * given, <code>NULL</code> will be encoded in the place of the unsupported value.
 * Available since PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-error-unsupported-type
 *
 * @var int
 */
const JSON_ERROR_UNSUPPORTED_TYPE = 8;

/**
 * Single unpaired UTF-16 surrogate in unicode escape contained in the
 * JSON string passed to <code>json_encode</code>.
 * Available since PHP 7.0.0.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-error-utf16
 *
 * @var int
 */
const JSON_ERROR_UTF16 = 10;

/**
 * Malformed UTF-8 characters, possibly incorrectly encoded.
 * Available since PHP 5.3.3.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-error-utf8
 *
 * @var int
 */
const JSON_ERROR_UTF8 = 5;

/**
 * Outputs an object rather than an array when a non-associative array is
 * used. Especially useful when the recipient of the output is expecting
 * an object and the array is empty.
 * Available since PHP 5.3.0.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-force-object
 *
 * @var int
 */
const JSON_FORCE_OBJECT = 16;

/**
 * All &amp;s are converted to \u0026.
 * Available since PHP 5.3.0.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-hex-amp
 *
 * @var int
 */
const JSON_HEX_AMP = 2;

/**
 * All ' are converted to \u0027.
 * Available since PHP 5.3.0.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-hex-apos
 *
 * @var int
 */
const JSON_HEX_APOS = 4;

/**
 * All " are converted to \u0022.
 * Available since PHP 5.3.0.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-hex-quot
 *
 * @var int
 */
const JSON_HEX_QUOT = 8;

/**
 * All &lt; and &gt; are converted to \u003C and \u003E.
 * Available since PHP 5.3.0.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-hex-tag
 *
 * @var int
 */
const JSON_HEX_TAG = 1;

/**
 * Encodes numeric strings as numbers.
 * Available since PHP 5.3.3.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-numeric-check
 *
 * @var int
 */
const JSON_NUMERIC_CHECK = 32;

/**
 * Decodes JSON objects as PHP array. This option can be added automatically
 * by calling <code>json_decode</code> with the second parameter
 * equal to <code>TRUE</code>.
 * Available since PHP 5.4.0.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-object-as-array
 *
 * @var int
 */
const JSON_OBJECT_AS_ARRAY = 1;

/**
 * Substitute some unencodable values instead of failing.
 * Available since PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-partial-output-on-error
 *
 * @var int
 */
const JSON_PARTIAL_OUTPUT_ON_ERROR = 512;

/**
 * Ensures that <code>float</code> values are always encoded as a float
 * value.
 * Available since PHP 5.6.6.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-preserve-zero-fraction
 *
 * @var int
 */
const JSON_PRESERVE_ZERO_FRACTION = 1024;

/**
 * Use whitespace in returned data to format it.
 * Available since PHP 5.4.0.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-pretty-print
 *
 * @var int
 */
const JSON_PRETTY_PRINT = 128;

/**
 * Don't escape <code>/</code>.
 * Available since PHP 5.4.0.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-unescaped-slashes
 *
 * @var int
 */
const JSON_UNESCAPED_SLASHES = 64;

/**
 * Encode multibyte Unicode characters literally (default is to escape as
 * \uXXXX).
 * Available since PHP 5.4.0.
 *
 * @link http://www.php.net/manual/en/json.constants.php#constant.json-unescaped-unicode
 *
 * @var int
 */
const JSON_UNESCAPED_UNICODE = 256;

/**
 * Objects implementing <code>JsonSerializable</code>
 * can customize their JSON representation when encoded with
 * <code>json_encode</code>.
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.jsonserializable.php
 */
interface JsonSerializable
{
    /**
     * Specify data which should be serialized to JSON
     *
     * @return mixed Returns data which can be serialized by <code>json_encode</code>,
     * which is a value of any type other than a <code>resource</code>.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/jsonserializable.jsonserialize.php
     */
    public function jsonSerialize();
}

/**
 * Decodes a JSON string
 *
 * @param string $json The <code>json</code> <code>string</code> being decoded.
 * @param bool|null $assoc When <code>TRUE</code>, returned <code>object</code>s will be converted into
 * associative <code>array</code>s.
 * @param int|null $depth User specified recursion depth.
 * @param int|null $options Bitmask of JSON decode options. Currently there are two supported
 * options. The first is <code>JSON_BIGINT_AS_STRING</code> that
 * allows casting big integers to string instead of floats which is the
 * default. The second option is <code>JSON_OBJECT_AS_ARRAY</code>
 * that has the same effect as setting <code>assoc</code> to
 * <code>TRUE</code>.
 *
 * @return mixed Returns the value encoded in <code>json</code> in appropriate
 * PHP type. Values <code>true</code>, <code>false</code> and
 * <code>null</code> are returned as <code>TRUE</code>, <code>FALSE</code> and <code>NULL</code>
 * respectively. <code>NULL</code> is returned if the <code>json</code> cannot
 * be decoded or if the encoded data is deeper than the recursion limit.
 *
 * @since PHP 5 >= 5.2.0, PHP 7, PECL json >= 1.2.0
 *
 * @link http://www.php.net/manual/en/function.json-decode.php
 */
function json_decode(string $json, bool $assoc = false, int $depth = 512, int $options = 0)
{
}

/**
 * Returns the JSON representation of a value
 *
 * @param mixed $value The <code>value</code> being encoded. Can be any type except
 * a <code>resource</code>.
 * @param int|null $options Bitmask consisting of <code>JSON_HEX_QUOT</code>,
 * <code>JSON_HEX_TAG</code>,
 * <code>JSON_HEX_AMP</code>,
 * <code>JSON_HEX_APOS</code>,
 * <code>JSON_NUMERIC_CHECK</code>,
 * <code>JSON_PRETTY_PRINT</code>,
 * <code>JSON_UNESCAPED_SLASHES</code>,
 * <code>JSON_FORCE_OBJECT</code>,
 * <code>JSON_PRESERVE_ZERO_FRACTION</code>,
 * <code>JSON_UNESCAPED_UNICODE</code>,
 * <code>JSON_PARTIAL_OUTPUT_ON_ERROR</code>. The behaviour of these
 * constants is described on the
 * JSON constants page.
 * @param int|null $depth Set the maximum depth. Must be greater than zero.
 *
 * @return string Returns a JSON encoded <code>string</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7, PECL json >= 1.2.0
 *
 * @link http://www.php.net/manual/en/function.json-encode.php
 */
function json_encode($value, int $options = 0, int $depth = 512): string
{
}

/**
 * Returns the last error occurred
 *
 * @return int Returns an integer, the value can be one of the following
 * constants:
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.json-last-error.php
 */
function json_last_error(): int
{
}

/**
 * Returns the error string of the last json_encode() or json_decode() call
 *
 * @return string Returns the error message on success, <code>"No error"</code> if no
 * error has occurred, or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.json-last-error-msg.php
 */
function json_last_error_msg(): string
{
}
