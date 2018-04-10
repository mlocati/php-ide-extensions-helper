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
 * <code>FILTER_UNSAFE_RAW</code>.
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
 * "number_float" filter.
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
 * Requires the <code>URL</code> to contain a host part.
 *
 * @link http://www.php.net/manual/en/filter.filters.php#filter.filters.flags
 *
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
 * Validates value as URL (according to http://www.faqs.org/rfcs/rfc2396), optionally with required components. Beware a valid URL may not specify the HTTP protocol <code>http://</code> so further validation may be required to determine the URL uses an expected protocol, e.g. <code>ssh://</code> or <code>mailto:</code>. Note that the function will only find ASCII URLs to be valid; internationalized domain names (containing non-ASCII characters) will fail.
 *
 * @link http://www.php.net/manual/en/filter.filters.php#filter.filters.validate
 *
 * @var int
 */
const FILTER_FLAG_SCHEME_REQUIRED = 65536;

/**
 * Strips backtick characters.
 *
 * @link http://www.php.net/manual/en/filter.filters.php#filter.filters.flags
 *
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
 * "full_special_chars"
 *
 * @link http://www.php.net/manual/en/filter.filters.php#filter.filters.sanitize
 *
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
 * (Available as of PHP 5.5.0)
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
 * (not implemented yet)
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
 * (not implemented yet)
 *
 * @link http://www.php.net/manual/en/filter.constants.php#constant.input-session
 *
 * @var int
 */
const INPUT_SESSION = 6;

/**
 * Checks if variable of specified type exists
 *
 * @param int $type One of <code>INPUT_GET</code>, <code>INPUT_POST</code>,
 * <code>INPUT_COOKIE</code>, <code>INPUT_SERVER</code>, or
 * <code>INPUT_ENV</code>.
 * @param string $variable_name Name of a variable to check.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.filter-has-var.php
 */
function filter_has_var(int $type, string $variable_name): bool
{
}

/**
 * Returns the filter ID belonging to a named filter
 *
 * @param string $filtername Name of a filter to get.
 *
 * @return int ID of a filter on success or <code>FALSE</code> if filter doesn't exist.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.filter-id.php
 */
function filter_id(string $filtername): int
{
}

/**
 * Gets a specific external variable by name and optionally filters it
 *
 * @param int $type One of <code>INPUT_GET</code>, <code>INPUT_POST</code>,
 * <code>INPUT_COOKIE</code>, <code>INPUT_SERVER</code>, or
 * <code>INPUT_ENV</code>.
 * @param string $variable_name Name of a variable to get.
 * @param int|null $filter The ID of the filter to apply. The
 * manual page lists the available filters.
 * @param mixed $options Associative array of options or bitwise disjunction of flags. If filter
 * accepts options, flags can be provided in "flags" field of array.
 *
 * @return mixed Value of the requested variable on success, <code>FALSE</code> if the filter fails,
 * or <code>NULL</code> if the <code>variable_name</code> variable is not set.
 * If the flag <code>FILTER_NULL_ON_FAILURE</code> is used, it
 * returns <code>FALSE</code> if the variable is not set and <code>NULL</code> if the filter fails.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.filter-input.php
 */
function filter_input(int $type, string $variable_name, int $filter = FILTER_DEFAULT, $options = null)
{
}

/**
 * Gets external variables and optionally filters them
 *
 * @param int $type One of <code>INPUT_GET</code>, <code>INPUT_POST</code>,
 * <code>INPUT_COOKIE</code>, <code>INPUT_SERVER</code>, or
 * <code>INPUT_ENV</code>.
 * @param mixed $definition An array defining the arguments. A valid key is a <code>string</code>
 * containing a variable name and a valid value is either a filter type, or an <code>array</code>
 * optionally specifying the filter, flags and options. If the value is an
 * array, valid keys are <code>filter</code> which specifies the
 * filter type,
 * <code>flags</code> which specifies any flags that apply to the
 * filter, and <code>options</code> which specifies any options that
 * apply to the filter. See the example below for a better understanding.
 * @param bool|null $add_empty Add missing keys as <code>NULL</code> to the return value.
 *
 * @return mixed An array containing the values of the requested variables on success, or <code>FALSE</code>
 * on failure. An array value will be <code>FALSE</code> if the filter fails, or <code>NULL</code> if
 * the variable is not set. Or if the flag <code>FILTER_NULL_ON_FAILURE</code>
 * is used, it returns <code>FALSE</code> if the variable is not set and <code>NULL</code> if the filter
 * fails.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.filter-input-array.php
 */
function filter_input_array(int $type, $definition = null, bool $add_empty = true)
{
}

/**
 * Returns a list of all supported filters
 *
 * @return array Returns an array of names of all supported filters, empty array if there
 * are no such filters. Indexes of this array are not filter IDs, they can be
 * obtained with <code>filter_id</code> from a name instead.
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
 * @param mixed $variable Value to filter. Note that scalar values are converted to
 * string internally before they are filtered.
 * @param int|null $filter The ID of the filter to apply. The
 * manual page lists the available filters.
 * @param mixed $options Associative array of options or bitwise disjunction of flags. If filter
 * accepts options, flags can be provided in "flags" field of array. For
 * the "callback" filter, <code>callable</code> type should be passed. The
 * callback must accept one argument, the value to be filtered, and return
 * the value after filtering/sanitizing it.
 *
 * @return mixed Returns the filtered data, or <code>FALSE</code> if the filter fails.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.filter-var.php
 */
function filter_var($variable, int $filter = FILTER_DEFAULT, $options = null)
{
}

/**
 * Gets multiple variables and optionally filters them
 *
 * @param array $data An array with string keys containing the data to filter.
 * @param mixed $definition An array defining the arguments. A valid key is a <code>string</code>
 * containing a variable name and a valid value is either a
 * filter type, or an
 * <code>array</code> optionally specifying the filter, flags and options.
 * If the value is an array, valid keys are <code>filter</code>
 * which specifies the filter type,
 * <code>flags</code> which specifies any flags that apply to the
 * filter, and <code>options</code> which specifies any options that
 * apply to the filter. See the example below for a better understanding.
 * @param bool|null $add_empty Add missing keys as <code>NULL</code> to the return value.
 *
 * @return mixed An array containing the values of the requested variables on success, or <code>FALSE</code>
 * on failure. An array value will be <code>FALSE</code> if the filter fails, or <code>NULL</code> if
 * the variable is not set.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.filter-var-array.php
 */
function filter_var_array(array $data, $definition = null, bool $add_empty = true)
{
}
