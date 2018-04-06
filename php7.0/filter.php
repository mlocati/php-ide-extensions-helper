<?php
// Start of extension: filter
// - parsed on POSIX with PHP 7.0.28 (extension version 7.0.28)
// - parsed on Windows with PHP 7.0.28 (extension version 7.0.28)

/**
 * ID of "callback" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-callback
 *
 * @var int
 */
const FILTER_CALLBACK = 1024;

/**
 * ID of default ("unsafe_raw") filter. This is equivalent to
 *     <code>FILTER_UNSAFE_RAW</code>.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-default
 *
 * @var int
 */
const FILTER_DEFAULT = 516;

/**
 * Allow fractional part in "number_float" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-flag-allow-fraction
 *
 * @var int
 */
const FILTER_FLAG_ALLOW_FRACTION = 4096;

/**
 * Allow hex notation (<code>0x[0-9a-fA-F]+</code>) in "int" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-flag-allow-hex
 *
 * @var int
 */
const FILTER_FLAG_ALLOW_HEX = 2;

/**
 * Allow octal notation (<code>0[0-7]+</code>) in "int" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-flag-allow-octal
 *
 * @var int
 */
const FILTER_FLAG_ALLOW_OCTAL = 1;

/**
 * Allow scientific notation (<code>e</code>, <code>E</code>) in
 *      "number_float" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-flag-allow-scientific
 *
 * @var int
 */
const FILTER_FLAG_ALLOW_SCIENTIFIC = 16384;

/**
 * Allow thousand separator (<code>,</code>) in "number_float" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-flag-allow-thousand
 *
 * @var int
 */
const FILTER_FLAG_ALLOW_THOUSAND = 8192;

/**
 * (No use for now.)
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-flag-empty-string-null
 *
 * @var int
 */
const FILTER_FLAG_EMPTY_STRING_NULL = 256;

/**
 * Encode <code>&amp;</code>.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-flag-encode-amp
 *
 * @var int
 */
const FILTER_FLAG_ENCODE_AMP = 64;

/**
 * Encode characters with ASCII value greater than 127.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-flag-encode-high
 *
 * @var int
 */
const FILTER_FLAG_ENCODE_HIGH = 32;

/**
 * Encode characters with ASCII value less than 32.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-flag-encode-low
 *
 * @var int
 */
const FILTER_FLAG_ENCODE_LOW = 16;

/**
 * @var int
 */
const FILTER_FLAG_HOST_REQUIRED = 131072;

/**
 * @var int
 */
const FILTER_FLAG_HOSTNAME = 1048576;

/**
 * Allow only IPv4 address in "validate_ip" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-flag-ipv4
 *
 * @var int
 */
const FILTER_FLAG_IPV4 = 1048576;

/**
 * Allow only IPv6 address in "validate_ip" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-flag-ipv6
 *
 * @var int
 */
const FILTER_FLAG_IPV6 = 2097152;

/**
 * Don't encode <code>'</code> and <code>"</code>.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-flag-no-encode-quotes
 *
 * @var int
 */
const FILTER_FLAG_NO_ENCODE_QUOTES = 128;

/**
 * Deny private addresses in "validate_ip" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-flag-no-priv-range
 *
 * @var int
 */
const FILTER_FLAG_NO_PRIV_RANGE = 8388608;

/**
 * Deny reserved addresses in "validate_ip" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-flag-no-res-range
 *
 * @var int
 */
const FILTER_FLAG_NO_RES_RANGE = 4194304;

/**
 * No flags.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-flag-none
 *
 * @var int
 */
const FILTER_FLAG_NONE = 0;

/**
 * Require path in "validate_url" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-flag-path-required
 *
 * @var int
 */
const FILTER_FLAG_PATH_REQUIRED = 262144;

/**
 * Require query in "validate_url" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-flag-query-required
 *
 * @var int
 */
const FILTER_FLAG_QUERY_REQUIRED = 524288;

/**
 * @var int
 */
const FILTER_FLAG_SCHEME_REQUIRED = 65536;

/**
 * @var int
 */
const FILTER_FLAG_STRIP_BACKTICK = 512;

/**
 * Strip characters with ASCII value greater than 127.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-flag-strip-high
 *
 * @var int
 */
const FILTER_FLAG_STRIP_HIGH = 8;

/**
 * Strip characters with ASCII value less than 32.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-flag-strip-low
 *
 * @var int
 */
const FILTER_FLAG_STRIP_LOW = 4;

/**
 * Always returns an array.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-force-array
 *
 * @var int
 */
const FILTER_FORCE_ARRAY = 67108864;

/**
 * Use NULL instead of FALSE on failure.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-null-on-failure
 *
 * @var int
 */
const FILTER_NULL_ON_FAILURE = 134217728;

/**
 * Require an array as input.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-require-array
 *
 * @var int
 */
const FILTER_REQUIRE_ARRAY = 16777216;

/**
 * Flag used to require scalar as input
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-require-scalar
 *
 * @var int
 */
const FILTER_REQUIRE_SCALAR = 33554432;

/**
 * ID of "email" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-sanitize-email
 *
 * @var int
 */
const FILTER_SANITIZE_EMAIL = 517;

/**
 * ID of "encoded" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-sanitize-encoded
 *
 * @var int
 */
const FILTER_SANITIZE_ENCODED = 514;

/**
 * @var int
 */
const FILTER_SANITIZE_FULL_SPECIAL_CHARS = 522;

/**
 * ID of "magic_quotes" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-sanitize-magic-quotes
 *
 * @var int
 */
const FILTER_SANITIZE_MAGIC_QUOTES = 521;

/**
 * ID of "number_float" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-sanitize-number-float
 *
 * @var int
 */
const FILTER_SANITIZE_NUMBER_FLOAT = 520;

/**
 * ID of "number_int" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-sanitize-number-int
 *
 * @var int
 */
const FILTER_SANITIZE_NUMBER_INT = 519;

/**
 * ID of "special_chars" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-sanitize-special-chars
 *
 * @var int
 */
const FILTER_SANITIZE_SPECIAL_CHARS = 515;

/**
 * ID of "string" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-sanitize-string
 *
 * @var int
 */
const FILTER_SANITIZE_STRING = 513;

/**
 * ID of "stripped" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-sanitize-stripped
 *
 * @var int
 */
const FILTER_SANITIZE_STRIPPED = 513;

/**
 * ID of "url" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-sanitize-url
 *
 * @var int
 */
const FILTER_SANITIZE_URL = 518;

/**
 * ID of "unsafe_raw" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-unsafe-raw
 *
 * @var int
 */
const FILTER_UNSAFE_RAW = 516;

/**
 * ID of "boolean" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-validate-boolean
 *
 * @var int
 */
const FILTER_VALIDATE_BOOLEAN = 258;

/**
 * @var int
 */
const FILTER_VALIDATE_DOMAIN = 277;

/**
 * ID of "validate_email" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-validate-email
 *
 * @var int
 */
const FILTER_VALIDATE_EMAIL = 274;

/**
 * ID of "float" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-validate-float
 *
 * @var int
 */
const FILTER_VALIDATE_FLOAT = 259;

/**
 * ID of "int" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-validate-int
 *
 * @var int
 */
const FILTER_VALIDATE_INT = 257;

/**
 * ID of "validate_ip" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-validate-ip
 *
 * @var int
 */
const FILTER_VALIDATE_IP = 275;

/**
 * ID of "validate_mac_address" filter.
 *      (Available as of PHP 5.5.0)
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-validate-mac
 *
 * @var int
 */
const FILTER_VALIDATE_MAC = 276;

/**
 * ID of "validate_regexp" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-validate-regexp
 *
 * @var int
 */
const FILTER_VALIDATE_REGEXP = 272;

/**
 * ID of "validate_url" filter.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.filter-validate-url
 *
 * @var int
 */
const FILTER_VALIDATE_URL = 273;

/**
 * COOKIE variables.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.input-cookie
 *
 * @var int
 */
const INPUT_COOKIE = 2;

/**
 * ENV variables.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.input-env
 *
 * @var int
 */
const INPUT_ENV = 4;

/**
 * GET variables.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.input-get
 *
 * @var int
 */
const INPUT_GET = 1;

/**
 * POST variables.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.input-post
 *
 * @var int
 */
const INPUT_POST = 0;

/**
 * REQUEST variables.
 *     (not implemented yet)
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.input-request
 *
 * @var int
 */
const INPUT_REQUEST = 99;

/**
 * SERVER variables.
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.input-server
 *
 * @var int
 */
const INPUT_SERVER = 5;

/**
 * SESSION variables.
 *     (not implemented yet)
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.input-session
 *
 * @var int
 */
const INPUT_SESSION = 6;

/**
 * Checks if variable of specified type exists
 *
 * mixed $type
 * mixed $variable_name
 *
 * @return bool
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.filter-has-var.php
 */
function filter_has_var($type, $variable_name): bool
{
}

/**
 * Returns the filter ID belonging to a named filter
 *
 * mixed $filtername
 *
 * @return int
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.filter-id.php
 */
function filter_id($filtername): int
{
}

/**
 * Gets a specific external variable by name and optionally filters it
 *
 * mixed $type
 * mixed $variable_name
 * mixed|null $filter
 * mixed|null $options
 *
 * @return mixed
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.filter-input.php
 */
function filter_input($type, $variable_name, $filter = null, $options = null)
{
}

/**
 * Gets external variables and optionally filters them
 *
 * mixed $type
 * mixed|null $definition
 * mixed|null $add_empty
 *
 * @return mixed
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.filter-input-array.php
 */
function filter_input_array($type, $definition = null, $add_empty = null)
{
}

/**
 * Returns a list of all supported filters
 *
 * @return array
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.filter-list.php
 */
function filter_list(): array
{
}

/**
 * Filters a variable with a specified filter
 *
 * mixed $variable
 * mixed|null $filter
 * mixed|null $options
 *
 * @return mixed
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.filter-var.php
 */
function filter_var($variable, $filter = null, $options = null)
{
}

/**
 * Gets multiple variables and optionally filters them
 *
 * mixed $data
 * mixed|null $definition
 * mixed|null $add_empty
 *
 * @return mixed
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.filter-var-array.php
 */
function filter_var_array($data, $definition = null, $add_empty = null)
{
}
