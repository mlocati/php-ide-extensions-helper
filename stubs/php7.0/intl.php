<?php
// Start of extension: intl
// - parsed on POSIX with PHP 7.0.28 (extension version 1.1.0)
// - parsed on Windows with PHP 7.0.28 (extension version 1.1.0)

/**
 * @var int
 */
const GRAPHEME_EXTR_COUNT = 0;

/**
 * @var int
 */
const GRAPHEME_EXTR_MAXBYTES = 1;

/**
 * @var int
 */
const GRAPHEME_EXTR_MAXCHARS = 2;

/**
 * Allow processing of unassigned codepoints in the input for IDN functions.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-allow-unassigned
 *
 * @var int
 */
const IDNA_ALLOW_UNASSIGNED = 1;

/**
 * Check whether the input conforms to the BiDi rules.
 * Ignored by the IDNA2003 implementation, which always performs this check.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-check-bidi
 *
 * @var int
 */
const IDNA_CHECK_BIDI = 4;

/**
 * Check whether the input conforms to the CONTEXTJ rules.
 * Ignored by the IDNA2003 implementation, as this check is new in IDNA2008.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-check-contextj
 *
 * @var int
 */
const IDNA_CHECK_CONTEXTJ = 8;

/**
 * Prohibit processing of unassigned codepoints in the input for IDN
 * functions and do not check if the input conforms to domain name ASCII rules.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-default
 *
 * @var int
 */
const IDNA_DEFAULT = 0;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 * <code>idn_to_utf8</code> and
 * <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_BIDI = 2048;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 * <code>idn_to_utf8</code> and
 * <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_CONTEXTJ = 4096;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 * <code>idn_to_utf8</code> and
 * <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_DISALLOWED = 128;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 * <code>idn_to_utf8</code> and
 * <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_DOMAIN_NAME_TOO_LONG = 4;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 * <code>idn_to_utf8</code> and
 * <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_EMPTY_LABEL = 1;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 * <code>idn_to_utf8</code> and
 * <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_HYPHEN_3_4 = 32;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 * <code>idn_to_utf8</code> and
 * <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_INVALID_ACE_LABEL = 1024;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 * <code>idn_to_utf8</code> and
 * <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_LABEL_HAS_DOT = 512;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 * <code>idn_to_utf8</code> and
 * <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_LABEL_TOO_LONG = 2;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 * <code>idn_to_utf8</code> and
 * <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_LEADING_COMBINING_MARK = 64;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 * <code>idn_to_utf8</code> and
 * <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_LEADING_HYPHEN = 8;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 * <code>idn_to_utf8</code> and
 * <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_PUNYCODE = 256;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 * <code>idn_to_utf8</code> and
 * <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_TRAILING_HYPHEN = 16;

/**
 * Option for nontransitional processing in
 * <code>idn_to_ascii</code>. Transitional processing is activated
 * by default. This option is ignored by the IDNA2003 implementation.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-nontransitional-to-ascii
 *
 * @var int
 */
const IDNA_NONTRANSITIONAL_TO_ASCII = 16;

/**
 * Option for nontransitional processing in
 * <code>idn_to_utf8</code>. Transitional processing is activated
 * by default. This option is ignored by the IDNA2003 implementation.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-nontransitional-to-unicode
 *
 * @var int
 */
const IDNA_NONTRANSITIONAL_TO_UNICODE = 32;

/**
 * Check if the input for IDN functions conforms to domain name ASCII rules.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-use-std3-rules
 *
 * @var int
 */
const IDNA_USE_STD3_RULES = 2;

/**
 * @var string
 */
const INTL_ICU_DATA_VERSION = '52.1';

/**
 * @var string
 */
const INTL_ICU_VERSION = '52.1';

/**
 * Use IDNA 2003 algorithm in <code>idn_to_utf8</code> and
 * <code>idn_to_ascii</code>. This is the default.
 * This constant and using the default has been deprecated as of PHP 7.2.0.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.intl-idna-variant-2003
 *
 * @var int
 */
const INTL_IDNA_VARIANT_2003 = 0;

/**
 * Use UTS #46 algorithm in <code>idn_to_utf8</code> and
 * <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.intl-idna-variant-uts46
 *
 * @var int
 */
const INTL_IDNA_VARIANT_UTS46 = 1;

/**
 * Limit on locale length, set to 80 in PHP code. Locale names longer
 * than this limit will not be accepted.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.intl-max-locale-len
 *
 * @var int
 */
const INTL_MAX_LOCALE_LEN = 80;

/**
 * @var int
 */
const U_AMBIGUOUS_ALIAS_WARNING = -122;

/**
 * @var int
 */
const U_BAD_VARIABLE_DEFINITION = 65536;

/**
 * @var int
 */
const U_BRK_ASSIGN_ERROR = 66053;

/**
 * @var int
 */
const U_BRK_ERROR_LIMIT = 66062;

/**
 * @var int
 */
const U_BRK_ERROR_START = 66048;

/**
 * @var int
 */
const U_BRK_HEX_DIGITS_EXPECTED = 66049;

/**
 * @var int
 */
const U_BRK_INIT_ERROR = 66058;

/**
 * @var int
 */
const U_BRK_INTERNAL_ERROR = 66048;

/**
 * @var int
 */
const U_BRK_MALFORMED_RULE_TAG = 66061;

/**
 * @var int
 */
const U_BRK_MISMATCHED_PAREN = 66055;

/**
 * @var int
 */
const U_BRK_NEW_LINE_IN_QUOTED_STRING = 66056;

/**
 * @var int
 */
const U_BRK_RULE_EMPTY_SET = 66059;

/**
 * @var int
 */
const U_BRK_RULE_SYNTAX = 66051;

/**
 * @var int
 */
const U_BRK_SEMICOLON_EXPECTED = 66050;

/**
 * @var int
 */
const U_BRK_UNCLOSED_SET = 66052;

/**
 * @var int
 */
const U_BRK_UNDEFINED_VARIABLE = 66057;

/**
 * @var int
 */
const U_BRK_UNRECOGNIZED_OPTION = 66060;

/**
 * @var int
 */
const U_BRK_VARIABLE_REDFINITION = 66054;

/**
 * @var int
 */
const U_BUFFER_OVERFLOW_ERROR = 15;

/**
 * @var int
 */
const U_CE_NOT_FOUND_ERROR = 21;

/**
 * @var int
 */
const U_COLLATOR_VERSION_MISMATCH = 28;

/**
 * @var int
 */
const U_DIFFERENT_UCA_VERSION = -121;

/**
 * @var int
 */
const U_ENUM_OUT_OF_SYNC_ERROR = 25;

/**
 * @var int
 */
const U_ERROR_LIMIT = 66818;

/**
 * @var int
 */
const U_ERROR_WARNING_LIMIT = -119;

/**
 * @var int
 */
const U_ERROR_WARNING_START = -128;

/**
 * @var int
 */
const U_FILE_ACCESS_ERROR = 4;

/**
 * @var int
 */
const U_FMT_PARSE_ERROR_LIMIT = 65810;

/**
 * @var int
 */
const U_FMT_PARSE_ERROR_START = 65792;

/**
 * @var int
 */
const U_IDNA_ACE_PREFIX_ERROR = 66564;

/**
 * @var int
 */
const U_IDNA_CHECK_BIDI_ERROR = 66562;

/**
 * @var int
 */
const U_IDNA_DOMAIN_NAME_TOO_LONG_ERROR = 66568;

/**
 * @var int
 */
const U_IDNA_ERROR_LIMIT = 66569;

/**
 * @var int
 */
const U_IDNA_ERROR_START = 66560;

/**
 * @var int
 */
const U_IDNA_LABEL_TOO_LONG_ERROR = 66566;

/**
 * @var int
 */
const U_IDNA_PROHIBITED_ERROR = 66560;

/**
 * @var int
 */
const U_IDNA_STD3_ASCII_RULES_ERROR = 66563;

/**
 * @var int
 */
const U_IDNA_UNASSIGNED_ERROR = 66561;

/**
 * @var int
 */
const U_IDNA_VERIFICATION_ERROR = 66565;

/**
 * @var int
 */
const U_IDNA_ZERO_LENGTH_LABEL_ERROR = 66567;

/**
 * @var int
 */
const U_ILLEGAL_ARGUMENT_ERROR = 1;

/**
 * @var int
 */
const U_ILLEGAL_CHAR_FOUND = 12;

/**
 * @var int
 */
const U_ILLEGAL_CHAR_IN_SEGMENT = 65564;

/**
 * @var int
 */
const U_ILLEGAL_CHARACTER = 65567;

/**
 * @var int
 */
const U_ILLEGAL_ESCAPE_SEQUENCE = 18;

/**
 * @var int
 */
const U_ILLEGAL_PAD_POSITION = 65800;

/**
 * @var int
 */
const U_INDEX_OUTOFBOUNDS_ERROR = 8;

/**
 * @var int
 */
const U_INTERNAL_PROGRAM_ERROR = 5;

/**
 * @var int
 */
const U_INTERNAL_TRANSLITERATOR_ERROR = 65568;

/**
 * @var int
 */
const U_INVALID_CHAR_FOUND = 10;

/**
 * @var int
 */
const U_INVALID_FORMAT_ERROR = 3;

/**
 * @var int
 */
const U_INVALID_FUNCTION = 65570;

/**
 * @var int
 */
const U_INVALID_ID = 65569;

/**
 * @var int
 */
const U_INVALID_PROPERTY_PATTERN = 65561;

/**
 * @var int
 */
const U_INVALID_RBT_SYNTAX = 65560;

/**
 * @var int
 */
const U_INVALID_STATE_ERROR = 27;

/**
 * @var int
 */
const U_INVALID_TABLE_FILE = 14;

/**
 * @var int
 */
const U_INVALID_TABLE_FORMAT = 13;

/**
 * @var int
 */
const U_INVARIANT_CONVERSION_ERROR = 26;

/**
 * @var int
 */
const U_MALFORMED_EXPONENTIAL_PATTERN = 65795;

/**
 * @var int
 */
const U_MALFORMED_PRAGMA = 65562;

/**
 * @var int
 */
const U_MALFORMED_RULE = 65537;

/**
 * @var int
 */
const U_MALFORMED_SET = 65538;

/**
 * @var int
 */
const U_MALFORMED_SYMBOL_REFERENCE = 65539;

/**
 * @var int
 */
const U_MALFORMED_UNICODE_ESCAPE = 65540;

/**
 * @var int
 */
const U_MALFORMED_VARIABLE_DEFINITION = 65541;

/**
 * @var int
 */
const U_MALFORMED_VARIABLE_REFERENCE = 65542;

/**
 * @var int
 */
const U_MEMORY_ALLOCATION_ERROR = 7;

/**
 * @var int
 */
const U_MESSAGE_PARSE_ERROR = 6;

/**
 * @var int
 */
const U_MISMATCHED_SEGMENT_DELIMITERS = 65543;

/**
 * @var int
 */
const U_MISPLACED_ANCHOR_START = 65544;

/**
 * @var int
 */
const U_MISPLACED_COMPOUND_FILTER = 65558;

/**
 * @var int
 */
const U_MISPLACED_CURSOR_OFFSET = 65545;

/**
 * @var int
 */
const U_MISPLACED_QUANTIFIER = 65546;

/**
 * @var int
 */
const U_MISSING_OPERATOR = 65547;

/**
 * @var int
 */
const U_MISSING_RESOURCE_ERROR = 2;

/**
 * @var int
 */
const U_MISSING_SEGMENT_CLOSE = 65548;

/**
 * @var int
 */
const U_MULTIPLE_ANTE_CONTEXTS = 65549;

/**
 * @var int
 */
const U_MULTIPLE_COMPOUND_FILTERS = 65559;

/**
 * @var int
 */
const U_MULTIPLE_CURSORS = 65550;

/**
 * @var int
 */
const U_MULTIPLE_DECIMAL_SEPARATORS = 65793;

/**
 * @var int
 */
const U_MULTIPLE_DECIMAL_SEPERATORS = 65793;

/**
 * @var int
 */
const U_MULTIPLE_EXPONENTIAL_SYMBOLS = 65794;

/**
 * @var int
 */
const U_MULTIPLE_PAD_SPECIFIERS = 65798;

/**
 * @var int
 */
const U_MULTIPLE_PERCENT_SYMBOLS = 65796;

/**
 * @var int
 */
const U_MULTIPLE_PERMILL_SYMBOLS = 65797;

/**
 * @var int
 */
const U_MULTIPLE_POST_CONTEXTS = 65551;

/**
 * @var int
 */
const U_NO_SPACE_AVAILABLE = 20;

/**
 * @var int
 */
const U_NO_WRITE_PERMISSION = 30;

/**
 * @var int
 */
const U_PARSE_ERROR = 9;

/**
 * @var int
 */
const U_PARSE_ERROR_LIMIT = 65571;

/**
 * @var int
 */
const U_PARSE_ERROR_START = 65536;

/**
 * @var int
 */
const U_PATTERN_SYNTAX_ERROR = 65799;

/**
 * @var int
 */
const U_PRIMARY_TOO_LONG_ERROR = 22;

/**
 * @var int
 */
const U_REGEX_BAD_ESCAPE_SEQUENCE = 66307;

/**
 * @var int
 */
const U_REGEX_BAD_INTERVAL = 66312;

/**
 * @var int
 */
const U_REGEX_ERROR_LIMIT = 66325;

/**
 * @var int
 */
const U_REGEX_ERROR_START = 66304;

/**
 * @var int
 */
const U_REGEX_INTERNAL_ERROR = 66304;

/**
 * @var int
 */
const U_REGEX_INVALID_BACK_REF = 66314;

/**
 * @var int
 */
const U_REGEX_INVALID_FLAG = 66315;

/**
 * @var int
 */
const U_REGEX_INVALID_STATE = 66306;

/**
 * @var int
 */
const U_REGEX_LOOK_BEHIND_LIMIT = 66316;

/**
 * @var int
 */
const U_REGEX_MAX_LT_MIN = 66313;

/**
 * @var int
 */
const U_REGEX_MISMATCHED_PAREN = 66310;

/**
 * @var int
 */
const U_REGEX_NUMBER_TOO_BIG = 66311;

/**
 * @var int
 */
const U_REGEX_PROPERTY_SYNTAX = 66308;

/**
 * @var int
 */
const U_REGEX_RULE_SYNTAX = 66305;

/**
 * @var int
 */
const U_REGEX_SET_CONTAINS_STRING = 66317;

/**
 * @var int
 */
const U_REGEX_UNIMPLEMENTED = 66309;

/**
 * @var int
 */
const U_RESOURCE_TYPE_MISMATCH = 17;

/**
 * @var int
 */
const U_RULE_MASK_ERROR = 65557;

/**
 * @var int
 */
const U_SAFECLONE_ALLOCATED_WARNING = -126;

/**
 * @var int
 */
const U_SORT_KEY_TOO_SHORT_WARNING = -123;

/**
 * @var int
 */
const U_STANDARD_ERROR_LIMIT = 31;

/**
 * @var int
 */
const U_STATE_OLD_WARNING = -125;

/**
 * @var int
 */
const U_STATE_TOO_OLD_ERROR = 23;

/**
 * @var int
 */
const U_STRING_NOT_TERMINATED_WARNING = -124;

/**
 * @var int
 */
const U_STRINGPREP_CHECK_BIDI_ERROR = 66562;

/**
 * @var int
 */
const U_STRINGPREP_PROHIBITED_ERROR = 66560;

/**
 * @var int
 */
const U_STRINGPREP_UNASSIGNED_ERROR = 66561;

/**
 * @var int
 */
const U_TOO_MANY_ALIASES_ERROR = 24;

/**
 * @var int
 */
const U_TRAILING_BACKSLASH = 65552;

/**
 * @var int
 */
const U_TRUNCATED_CHAR_FOUND = 11;

/**
 * @var int
 */
const U_UNCLOSED_SEGMENT = 65563;

/**
 * @var int
 */
const U_UNDEFINED_SEGMENT_REFERENCE = 65553;

/**
 * @var int
 */
const U_UNDEFINED_VARIABLE = 65554;

/**
 * @var int
 */
const U_UNEXPECTED_TOKEN = 65792;

/**
 * @var int
 */
const U_UNMATCHED_BRACES = 65801;

/**
 * @var int
 */
const U_UNQUOTED_SPECIAL = 65555;

/**
 * @var int
 */
const U_UNSUPPORTED_ATTRIBUTE = 65803;

/**
 * @var int
 */
const U_UNSUPPORTED_ERROR = 16;

/**
 * @var int
 */
const U_UNSUPPORTED_ESCAPE_SEQUENCE = 19;

/**
 * @var int
 */
const U_UNSUPPORTED_PROPERTY = 65802;

/**
 * @var int
 */
const U_UNTERMINATED_QUOTE = 65556;

/**
 * @var int
 */
const U_USELESS_COLLATOR_ERROR = 29;

/**
 * @var int
 */
const U_USING_DEFAULT_WARNING = -127;

/**
 * @var int
 */
const U_USING_FALLBACK_WARNING = -128;

/**
 * @var int
 */
const U_VARIABLE_RANGE_EXHAUSTED = 65565;

/**
 * @var int
 */
const U_VARIABLE_RANGE_OVERLAP = 65566;

/**
 * @var int
 */
const U_ZERO_ERROR = 0;

/**
 * @var int
 */
const ULOC_ACTUAL_LOCALE = 0;

/**
 * @var int
 */
const ULOC_VALID_LOCALE = 1;

/**
 * Provides string comparison capability with support for appropriate
 * locale-sensitive sort orderings.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/class.collator.php
 */
class Collator
{
    /**
     * Create a collator
     *
     * @param mixed $arg1
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.construct.php
     */
    public function __construct($arg1)
    {
    }

    /**
     * Sort array maintaining index association
     *
     * @param array $arr
     * @param mixed|null $flags
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.asort.php
     */
    public function asort(array &$arr, $flags = null): bool
    {
    }

    /**
     * Compare two Unicode strings
     *
     * @param mixed $arg1
     * @param mixed $arg2
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.compare.php
     */
    public function compare($arg1, $arg2): int
    {
    }

    /**
     * Create a collator
     *
     * @param mixed $arg1
     *
     * @return Collator
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.create.php
     */
    public static function create($arg1): Collator
    {
    }

    /**
     * Get collation attribute value
     *
     * @param mixed $arg1
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.getattribute.php
     */
    public function getAttribute($arg1): int
    {
    }

    /**
     * Get collator's last error code
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.geterrorcode.php
     */
    public function getErrorCode(): int
    {
    }

    /**
     * Get text for collator's last error code
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.geterrormessage.php
     */
    public function getErrorMessage(): string
    {
    }

    /**
     * Get the locale name of the collator
     *
     * @param mixed $arg1
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.getlocale.php
     */
    public function getLocale($arg1): string
    {
    }

    /**
     * Get sorting key for a string
     *
     * @param mixed $arg1
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.11, PHP 7, PECL intl >= 1.0.3
     *
     * @link http://www.php.net/manual/en/collator.getsortkey.php
     */
    public function getSortKey($arg1): string
    {
    }

    /**
     * Get current collation strength
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.getstrength.php
     */
    public function getStrength(): int
    {
    }

    /**
     * Set collation attribute
     *
     * @param mixed $arg1
     * @param mixed $arg2
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.setattribute.php
     */
    public function setAttribute($arg1, $arg2): bool
    {
    }

    /**
     * Set collation strength
     *
     * @param mixed $arg1
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.setstrength.php
     */
    public function setStrength($arg1): bool
    {
    }

    /**
     * Sort array using specified collator
     *
     * @param array $arr
     * @param mixed|null $flags
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.sort.php
     */
    public function sort(array &$arr, $flags = null): bool
    {
    }

    /**
     * Sort array using specified collator and sort keys
     *
     * @param array $arr
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.sortwithsortkeys.php
     */
    public function sortWithSortKeys(array &$arr): bool
    {
    }
}

/**
 * A “break iterator” is an ICU object that exposes methods for locating
 * boundaries in text (e.g. word or sentence boundaries).
 * The PHP <code>IntlBreakIterator</code> serves as the base class
 * for all types of ICU break iterators. Where extra functionality is
 * available, the intl extension may expose the ICU break iterator with
 * suitable subclasses, such as
 * <code>IntlRuleBasedBreakIterator</code> or
 * <code>IntlCodePointBreaIterator</code>.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.intlbreakiterator.php
 */
class IntlBreakIterator implements Traversable
{
    /**
     * Private constructor for disallowing instantiation
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.construct.php
     */
    private function __construct()
    {
    }

    /**
     * Create break iterator for boundaries of combining character sequences
     *
     * @param mixed|null $locale
     *
     * @return IntlBreakIterator
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.createcharacterinstance.php
     */
    public static function createCharacterInstance($locale = null): IntlBreakIterator
    {
    }

    /**
     * Create break iterator for boundaries of code points
     *
     * @return IntlBreakIterator
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.createcodepointinstance.php
     */
    public static function createCodePointInstance(): IntlBreakIterator
    {
    }

    /**
     * Create break iterator for logically possible line breaks
     *
     * @param mixed|null $locale
     *
     * @return IntlBreakIterator
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.createlineinstance.php
     */
    public static function createLineInstance($locale = null): IntlBreakIterator
    {
    }

    /**
     * Create break iterator for sentence breaks
     *
     * @param mixed|null $locale
     *
     * @return IntlBreakIterator
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.createsentenceinstance.php
     */
    public static function createSentenceInstance($locale = null): IntlBreakIterator
    {
    }

    /**
     * Create break iterator for title-casing breaks
     *
     * @param mixed|null $locale
     *
     * @return IntlBreakIterator
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.createtitleinstance.php
     */
    public static function createTitleInstance($locale = null): IntlBreakIterator
    {
    }

    /**
     * Create break iterator for word breaks
     *
     * @param mixed|null $locale
     *
     * @return IntlBreakIterator
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.createwordinstance.php
     */
    public static function createWordInstance($locale = null): IntlBreakIterator
    {
    }

    /**
     * Get index of current position
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.current.php
     */
    public function current(): int
    {
    }

    /**
     * Set position to the first character in the text
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.first.php
     */
    public function first(): int
    {
    }

    /**
     * Advance the iterator to the first boundary following specified offset
     *
     * @param mixed $offset
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.following.php
     */
    public function following($offset): int
    {
    }

    /**
     * Get last error code on the object
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.geterrorcode.php
     */
    public function getErrorCode(): int
    {
    }

    /**
     * Get last error message on the object
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.geterrormessage.php
     */
    public function getErrorMessage(): string
    {
    }

    /**
     * Get the locale associated with the object
     *
     * @param mixed $locale_type
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.getlocale.php
     */
    public function getLocale($locale_type): string
    {
    }

    /**
     * Create iterator for navigating fragments between boundaries
     *
     * @param mixed|null $key_type
     *
     * @return IntlPartsIterator
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.getpartsiterator.php
     */
    public function getPartsIterator($key_type = null): IntlPartsIterator
    {
    }

    /**
     * Get the text being scanned
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.gettext.php
     */
    public function getText(): string
    {
    }

    /**
     * Tell whether an offset is a boundaryʼs offset
     *
     * @param mixed $offset
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.isboundary.php
     */
    public function isBoundary($offset): bool
    {
    }

    /**
     * Set the iterator position to index beyond the last character
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.last.php
     */
    public function last(): int
    {
    }

    /**
     * Advance the iterator the next boundary
     *
     * @param mixed|null $offset
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.next.php
     */
    public function next($offset = null): int
    {
    }

    /**
     * Set the iterator position to the first boundary before an offset
     *
     * @param mixed $offset
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.preceding.php
     */
    public function preceding($offset): int
    {
    }

    /**
     * Set the iterator position to the boundary immediately before the current
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.previous.php
     */
    public function previous(): int
    {
    }

    /**
     * Set the text being scanned
     *
     * @param mixed $text
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.settext.php
     */
    public function setText($text): bool
    {
    }
}

/**
 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
 *
 * @link http://www.php.net/manual/en/class.intlcalendar.php
 */
class IntlCalendar
{
    /**
     * Private constructor for disallowing instantiation
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.construct.php
     */
    private function __construct()
    {
    }

    /**
     * Add a (signed) amount of time to a field
     *
     * @param mixed $field
     * @param mixed $amount
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.add.php
     */
    public function add($field, $amount): bool
    {
    }

    /**
     * Whether this objectʼs time is after that of the passed object
     *
     * @param IntlCalendar $calendar
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.after.php
     */
    public function after(IntlCalendar $calendar): bool
    {
    }

    /**
     * Whether this objectʼs time is before that of the passed object
     *
     * @param IntlCalendar $calendar
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.before.php
     */
    public function before(IntlCalendar $calendar): bool
    {
    }

    /**
     * Clear a field or all fields
     *
     * @param mixed|null $field
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.clear.php
     */
    public function clear($field = null): bool
    {
    }

    /**
     * Create a new IntlCalendar
     *
     * @param mixed|null $timeZone
     * @param mixed|null $locale
     *
     * @return IntlCalendar
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.createinstance.php
     */
    public static function createInstance($timeZone = null, $locale = null): IntlCalendar
    {
    }

    /**
     * Compare time of two IntlCalendar objects for equality
     *
     * @param IntlCalendar $calendar
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.equals.php
     */
    public function equals(IntlCalendar $calendar): bool
    {
    }

    /**
     * Calculate difference between given time and this objectʼs time
     *
     * @param mixed $when
     * @param mixed $field
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.fielddifference.php
     */
    public function fieldDifference($when, $field): int
    {
    }

    /**
     * Create an IntlCalendar from a DateTime object or string
     *
     * @param mixed $dateTime
     *
     * @return IntlCalendar
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a2
     *
     * @link http://www.php.net/manual/en/intlcalendar.fromdatetime.php
     */
    public static function fromDateTime($dateTime): IntlCalendar
    {
    }

    /**
     * Get the value for a field
     *
     * @param mixed $field
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.get.php
     */
    public function get($field): int
    {
    }

    /**
     * The maximum value for a field, considering the objectʼs current time
     *
     * @param mixed $field
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getactualmaximum.php
     */
    public function getActualMaximum($field): int
    {
    }

    /**
     * The minimum value for a field, considering the objectʼs current time
     *
     * @param mixed $field
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getactualminimum.php
     */
    public function getActualMinimum($field): int
    {
    }

    /**
     * Get array of locales for which there is data
     *
     * @return array
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getavailablelocales.php
     */
    public static function getAvailableLocales(): array
    {
    }

    /**
     * Tell whether a day is a weekday, weekend or a day that has a transition between the two
     *
     * @param mixed $dayOfWeek
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getdayofweektype.php
     */
    public function getDayOfWeekType($dayOfWeek): int
    {
    }

    /**
     * Get last error code on the object
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.geterrorcode.php
     */
    public function getErrorCode(): int
    {
    }

    /**
     * Get last error message on the object
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.geterrormessage.php
     */
    public function getErrorMessage(): string
    {
    }

    /**
     * Get the first day of the week for the calendarʼs locale
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getfirstdayofweek.php
     */
    public function getFirstDayOfWeek(): int
    {
    }

    /**
     * Get the largest local minimum value for a field
     *
     * @param mixed $field
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getgreatestminimum.php
     */
    public function getGreatestMinimum($field): int
    {
    }

    /**
     * Get set of locale keyword values
     *
     * @param mixed $key
     * @param mixed $locale
     * @param mixed $commonlyUsed
     *
     * @return Iterator
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getkeywordvaluesforlocale.php
     */
    public static function getKeywordValuesForLocale($key, $locale, $commonlyUsed): Iterator
    {
    }

    /**
     * Get the smallest local maximum for a field
     *
     * @param mixed $field
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getleastmaximum.php
     */
    public function getLeastMaximum($field): int
    {
    }

    /**
     * Get the locale associated with the object
     *
     * @param mixed $localeType
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getlocale.php
     */
    public function getLocale($localeType): string
    {
    }

    /**
     * Get the global maximum value for a field
     *
     * @param mixed $field
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getmaximum.php
     */
    public function getMaximum($field): int
    {
    }

    /**
     * Get minimal number of days the first week in a year or month can have
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getminimaldaysinfirstweek.php
     */
    public function getMinimalDaysInFirstWeek(): int
    {
    }

    /**
     * Get the global minimum value for a field
     *
     * @param mixed $field
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getminimum.php
     */
    public function getMinimum($field): int
    {
    }

    /**
     * Get number representing the current time
     *
     * @return float
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getnow.php
     */
    public static function getNow(): float
    {
    }

    /**
     * Get behavior for handling repeating wall time
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getrepeatedwalltimeoption.php
     */
    public function getRepeatedWallTimeOption(): int
    {
    }

    /**
     * Get behavior for handling skipped wall time
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getskippedwalltimeoption.php
     */
    public function getSkippedWallTimeOption(): int
    {
    }

    /**
     * Get time currently represented by the object
     *
     * @return float
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.gettime.php
     */
    public function getTime(): float
    {
    }

    /**
     * Get the objectʼs timezone
     *
     * @return IntlTimeZone
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.gettimezone.php
     */
    public function getTimeZone(): IntlTimeZone
    {
    }

    /**
     * Get the calendar type
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.gettype.php
     */
    public function getType(): string
    {
    }

    /**
     * Get time of the day at which weekend begins or ends
     *
     * @param mixed $dayOfWeek
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getweekendtransition.php
     */
    public function getWeekendTransition($dayOfWeek): int
    {
    }

    /**
     * Whether the objectʼs time is in Daylight Savings Time
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.indaylighttime.php
     */
    public function inDaylightTime(): bool
    {
    }

    /**
     * Whether another calendar is equal but for a different time
     *
     * @param IntlCalendar $calendar
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.isequivalentto.php
     */
    public function isEquivalentTo(IntlCalendar $calendar): bool
    {
    }

    /**
     * Whether date/time interpretation is in lenient mode
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.islenient.php
     */
    public function isLenient(): bool
    {
    }

    /**
     * Whether a field is set
     *
     * @param mixed $field
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.isset.php
     */
    public function isSet($field): bool
    {
    }

    /**
     * Whether a certain date/time is in the weekend
     *
     * @param mixed|null $date
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.isweekend.php
     */
    public function isWeekend($date = null): bool
    {
    }

    /**
     * Add value to field without carrying into more significant fields
     *
     * @param mixed $field
     * @param mixed $amountOrUpOrDown
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.roll.php
     */
    public function roll($field, $amountOrUpOrDown): bool
    {
    }

    /**
     * Set a time field or several common fields at once
     *
     * @param mixed $fieldOrYear
     * @param mixed $valueOrMonth
     * @param mixed|null $dayOfMonth
     * @param mixed|null $hour
     * @param mixed|null $minute
     * @param mixed|null $second
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.set.php
     */
    public function set($fieldOrYear, $valueOrMonth, $dayOfMonth = null, $hour = null, $minute = null, $second = null): bool
    {
    }

    /**
     * Set the day on which the week is deemed to start
     *
     * @param mixed $dayOfWeek
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.setfirstdayofweek.php
     */
    public function setFirstDayOfWeek($dayOfWeek): bool
    {
    }

    /**
     * Set whether date/time interpretation is to be lenient
     *
     * @param mixed $isLenient
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.setlenient.php
     */
    public function setLenient($isLenient): bool
    {
    }

    /**
     * Set minimal number of days the first week in a year or month can have
     *
     * @param mixed $numberOfDays
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.1, PHP 7
     *
     * @link http://www.php.net/manual/en/intlcalendar.setminimaldaysinfirstweek.php
     */
    public function setMinimalDaysInFirstWeek($numberOfDays): bool
    {
    }

    /**
     * Set behavior for handling repeating wall times at negative timezone offset transitions
     *
     * @param mixed $wallTimeOption
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.setrepeatedwalltimeoption.php
     */
    public function setRepeatedWallTimeOption($wallTimeOption): bool
    {
    }

    /**
     * Set behavior for handling skipped wall times at positive timezone offset transitions
     *
     * @param mixed $wallTimeOption
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.setskippedwalltimeoption.php
     */
    public function setSkippedWallTimeOption($wallTimeOption): bool
    {
    }

    /**
     * Set the calendar time in milliseconds since the epoch
     *
     * @param mixed $date
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.settime.php
     */
    public function setTime($date): bool
    {
    }

    /**
     * Set the timezone used by this calendar
     *
     * @param mixed $timeZone
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.settimezone.php
     */
    public function setTimeZone($timeZone): bool
    {
    }

    /**
     * Convert an IntlCalendar into a DateTime object
     *
     * @return DateTime
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a2
     *
     * @link http://www.php.net/manual/en/intlcalendar.todatetime.php
     */
    public function toDateTime(): DateTime
    {
    }
}

/**
 * <code>IntlChar</code> provides access to a number of utility
 * methods that can be used to access information about Unicode characters.
 *
 * @since PHP 7
 *
 * @link http://www.php.net/manual/en/class.intlchar.php
 */
class IntlChar
{
    /**
     * Get the "age" of the code point
     *
     * @param mixed $codepoint
     *
     * @return array
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.charage.php
     */
    public static function charAge($codepoint): array
    {
    }

    /**
     * Get the decimal digit value of a decimal digit character
     *
     * @param mixed $codepoint
     *
     * @return int
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.chardigitvalue.php
     */
    public static function charDigitValue($codepoint): int
    {
    }

    /**
     * Get bidirectional category value for a code point
     *
     * @param mixed $codepoint
     *
     * @return int
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.chardirection.php
     */
    public static function charDirection($codepoint): int
    {
    }

    /**
     * Find Unicode character by name and return its code point value
     *
     * @param mixed $characterName
     * @param mixed|null $nameChoice
     *
     * @return int
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.charfromname.php
     */
    public static function charFromName($characterName, $nameChoice = null): int
    {
    }

    /**
     * Get the "mirror-image" character for a code point
     *
     * @param mixed $codepoint
     *
     * @return mixed
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.charmirror.php
     */
    public static function charMirror($codepoint)
    {
    }

    /**
     * Retrieve the name of a Unicode character
     *
     * @param mixed $codepoint
     * @param mixed|null $nameChoice
     *
     * @return string
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.charname.php
     */
    public static function charName($codepoint, $nameChoice = null): string
    {
    }

    /**
     * Get the general category value for a code point
     *
     * @param mixed $codepoint
     *
     * @return int
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.chartype.php
     */
    public static function charType($codepoint): int
    {
    }

    /**
     * Return Unicode character by code point value
     *
     * @param mixed $codepoint
     *
     * @return string
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.chr.php
     */
    public static function chr($codepoint): string
    {
    }

    /**
     * Get the decimal digit value of a code point for a given radix
     *
     * @param mixed $codepoint
     * @param mixed|null $radix
     *
     * @return int
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.digit.php
     */
    public static function digit($codepoint, $radix = null): int
    {
    }

    /**
     * Enumerate all assigned Unicode characters within a range
     *
     * @param mixed $start
     * @param mixed $limit
     * @param mixed $callback
     * @param mixed|null $nameChoice
     *
     * @return void
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.enumcharnames.php
     */
    public static function enumCharNames($start, $limit, $callback, $nameChoice = null)
    {
    }

    /**
     * Enumerate all code points with their Unicode general categories
     *
     * @param mixed|null $callback
     *
     * @return void
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.enumchartypes.php
     */
    public static function enumCharTypes($callback = null)
    {
    }

    /**
     * Perform case folding on a code point
     *
     * @param mixed $codepoint
     * @param mixed|null $options
     *
     * @return mixed
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.foldcase.php
     */
    public static function foldCase($codepoint, $options = null)
    {
    }

    /**
     * Get character representation for a given digit and radix
     *
     * @param mixed $digit
     * @param mixed|null $radix
     *
     * @return int
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.fordigit.php
     */
    public static function forDigit($digit, $radix = null): int
    {
    }

    /**
     * Get the paired bracket character for a code point
     *
     * @param mixed $codepoint
     *
     * @return mixed
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.getbidipairedbracket.php
     */
    public static function getBidiPairedBracket($codepoint)
    {
    }

    /**
     * Get the Unicode allocation block containing a code point
     *
     * @param mixed $codepoint
     *
     * @return int
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.getblockcode.php
     */
    public static function getBlockCode($codepoint): int
    {
    }

    /**
     * Get the combining class of a code point
     *
     * @param mixed $codepoint
     *
     * @return int
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.getcombiningclass.php
     */
    public static function getCombiningClass($codepoint): int
    {
    }

    /**
     * Get the FC_NFKC_Closure property for a code point
     *
     * @param mixed $codepoint
     *
     * @return string
     *
     * @link http://www.php.net/manual/en/intlchar.getfc-nfkc-closure.php
     */
    public static function getFC_NFKC_Closure($codepoint): string
    {
    }

    /**
     * Get the max value for a Unicode property
     *
     * @param mixed $property
     *
     * @return int
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.getintpropertymaxvalue.php
     */
    public static function getIntPropertyMaxValue($property): int
    {
    }

    /**
     * Get the min value for a Unicode property
     *
     * @param mixed $property
     *
     * @return int
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.getintpropertyminvalue.php
     */
    public static function getIntPropertyMinValue($property): int
    {
    }

    /**
     * Get the value for a Unicode property for a code point
     *
     * @param mixed $codepoint
     * @param mixed $property
     *
     * @return int
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.getintpropertyvalue.php
     */
    public static function getIntPropertyValue($codepoint, $property): int
    {
    }

    /**
     * Get the numeric value for a Unicode code point
     *
     * @param mixed $codepoint
     *
     * @return float
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.getnumericvalue.php
     */
    public static function getNumericValue($codepoint): float
    {
    }

    /**
     * Get the property constant value for a given property name
     *
     * @param mixed $alias
     *
     * @return int
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.getpropertyenum.php
     */
    public static function getPropertyEnum($alias): int
    {
    }

    /**
     * Get the Unicode name for a property
     *
     * @param mixed $property
     * @param mixed|null $nameChoice
     *
     * @return string
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.getpropertyname.php
     */
    public static function getPropertyName($property, $nameChoice = null): string
    {
    }

    /**
     * Get the property value for a given value name
     *
     * @param mixed $property
     * @param mixed $name
     *
     * @return int
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.getpropertyvalueenum.php
     */
    public static function getPropertyValueEnum($property, $name): int
    {
    }

    /**
     * Get the Unicode name for a property value
     *
     * @param mixed $property
     * @param mixed $value
     * @param mixed|null $nameChoice
     *
     * @return string
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.getpropertyvaluename.php
     */
    public static function getPropertyValueName($property, $value, $nameChoice = null): string
    {
    }

    /**
     * Get the Unicode version
     *
     * @return array
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.getunicodeversion.php
     */
    public static function getUnicodeVersion(): array
    {
    }

    /**
     * Check a binary Unicode property for a code point
     *
     * @param mixed $codepoint
     * @param mixed $property
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.hasbinaryproperty.php
     */
    public static function hasBinaryProperty($codepoint, $property): bool
    {
    }

    /**
     * Check if code point is an alphanumeric character
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isalnum.php
     */
    public static function isalnum($codepoint): bool
    {
    }

    /**
     * Check if code point is a letter character
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isalpha.php
     */
    public static function isalpha($codepoint): bool
    {
    }

    /**
     * Check if code point is a base character
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isbase.php
     */
    public static function isbase($codepoint): bool
    {
    }

    /**
     * Check if code point is a "blank" or "horizontal space" character
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isblank.php
     */
    public static function isblank($codepoint): bool
    {
    }

    /**
     * Check if code point is a control character
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.iscntrl.php
     */
    public static function iscntrl($codepoint): bool
    {
    }

    /**
     * Check whether the code point is defined
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isdefined.php
     */
    public static function isdefined($codepoint): bool
    {
    }

    /**
     * Check if code point is a digit character
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isdigit.php
     */
    public static function isdigit($codepoint): bool
    {
    }

    /**
     * Check if code point is a graphic character
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isgraph.php
     */
    public static function isgraph($codepoint): bool
    {
    }

    /**
     * Check if code point is an ignorable character
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isidignorable.php
     */
    public static function isIDIgnorable($codepoint): bool
    {
    }

    /**
     * Check if code point is permissible in an identifier
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isidpart.php
     */
    public static function isIDPart($codepoint): bool
    {
    }

    /**
     * Check if code point is permissible as the first character in an identifier
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isidstart.php
     */
    public static function isIDStart($codepoint): bool
    {
    }

    /**
     * Check if code point is an ISO control code
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isisocontrol.php
     */
    public static function isISOControl($codepoint): bool
    {
    }

    /**
     * Check if code point is permissible in a Java identifier
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isjavaidpart.php
     */
    public static function isJavaIDPart($codepoint): bool
    {
    }

    /**
     * Check if code point is permissible as the first character in a Java identifier
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isjavaidstart.php
     */
    public static function isJavaIDStart($codepoint): bool
    {
    }

    /**
     * Check if code point is a space character according to Java
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isjavaspacechar.php
     */
    public static function isJavaSpaceChar($codepoint): bool
    {
    }

    /**
     * Check if code point is a lowercase letter
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.islower.php
     */
    public static function islower($codepoint): bool
    {
    }

    /**
     * Check if code point has the Bidi_Mirrored property
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.ismirrored.php
     */
    public static function isMirrored($codepoint): bool
    {
    }

    /**
     * Check if code point is a printable character
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isprint.php
     */
    public static function isprint($codepoint): bool
    {
    }

    /**
     * Check if code point is punctuation character
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.ispunct.php
     */
    public static function ispunct($codepoint): bool
    {
    }

    /**
     * Check if code point is a space character
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isspace.php
     */
    public static function isspace($codepoint): bool
    {
    }

    /**
     * Check if code point is a titlecase letter
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.istitle.php
     */
    public static function istitle($codepoint): bool
    {
    }

    /**
     * Check if code point has the Alphabetic Unicode property
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isualphabetic.php
     */
    public static function isUAlphabetic($codepoint): bool
    {
    }

    /**
     * Check if code point has the Lowercase Unicode property
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isulowercase.php
     */
    public static function isULowercase($codepoint): bool
    {
    }

    /**
     * Check if code point has the general category "Lu" (uppercase letter)
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isupper.php
     */
    public static function isupper($codepoint): bool
    {
    }

    /**
     * Check if code point has the Uppercase Unicode property
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isuuppercase.php
     */
    public static function isUUppercase($codepoint): bool
    {
    }

    /**
     * Check if code point has the White_Space Unicode property
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isuwhitespace.php
     */
    public static function isUWhiteSpace($codepoint): bool
    {
    }

    /**
     * Check if code point is a whitespace character according to ICU
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.iswhitespace.php
     */
    public static function isWhitespace($codepoint): bool
    {
    }

    /**
     * Check if code point is a hexadecimal digit
     *
     * @param mixed $codepoint
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.isxdigit.php
     */
    public static function isxdigit($codepoint): bool
    {
    }

    /**
     * Return Unicode code point value of character
     *
     * @param mixed $character
     *
     * @return int
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.ord.php
     */
    public static function ord($character): int
    {
    }

    /**
     * Make Unicode character lowercase
     *
     * @param mixed $codepoint
     *
     * @return mixed
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.tolower.php
     */
    public static function tolower($codepoint)
    {
    }

    /**
     * Make Unicode character titlecase
     *
     * @param mixed $codepoint
     *
     * @return mixed
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.totitle.php
     */
    public static function totitle($codepoint)
    {
    }

    /**
     * Make Unicode character uppercase
     *
     * @param mixed $codepoint
     *
     * @return mixed
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/intlchar.toupper.php
     */
    public static function toupper($codepoint)
    {
    }
}

/**
 * This break iterator
 * identifies the boundaries between UTF-8 code points.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.intlcodepointbreakiterator.php
 */
class IntlCodePointBreakIterator extends IntlBreakIterator
{
    /**
     * Get last code point passed over after advancing or receding the iterator
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlcodepointbreakiterator.getlastcodepoint.php
     */
    public function getLastCodePoint(): int
    {
    }
}

/**
 * <ul>
 * <li>
 * ICU Date formatter
 * </li>
 * </ul>
 * <ul>
 * <li>
 * ICU Date formats
 * </li>
 * </ul>
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/class.intldateformatter.php
 */
class IntlDateFormatter
{
    /**
     * Create a date formatter
     *
     * @param mixed $locale
     * @param mixed $datetype
     * @param mixed $timetype
     * @param mixed|null $timezone
     * @param mixed|null $calendar
     * @param mixed|null $pattern
     *
     * @return IntlDateFormatter
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.create.php
     */
    public function __construct($locale, $datetype, $timetype, $timezone = null, $calendar = null, $pattern = null): IntlDateFormatter
    {
    }

    /**
     * Create a date formatter
     *
     * @param mixed $locale
     * @param mixed $datetype
     * @param mixed $timetype
     * @param mixed|null $timezone
     * @param mixed|null $calendar
     * @param mixed|null $pattern
     *
     * @return IntlDateFormatter
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.create.php
     */
    public static function create($locale, $datetype, $timetype, $timezone = null, $calendar = null, $pattern = null): IntlDateFormatter
    {
    }

    /**
     * Format the date/time value as a string
     *
     * @param mixed|null $args
     * @param mixed|null $array
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.format.php
     */
    public function format($args = null, $array = null): string
    {
    }

    /**
     * Formats an object
     *
     * @param mixed $object
     * @param mixed|null $format
     * @param mixed|null $locale
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL intl >= 3.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.formatobject.php
     */
    public static function formatObject($object, $format = null, $locale = null): string
    {
    }

    /**
     * Get the calendar type used for the IntlDateFormatter
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.getcalendar.php
     */
    public function getCalendar(): int
    {
    }

    /**
     * Get copy of formatterʼs calendar object
     *
     * @return IntlCalendar
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL intl >= 3.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.getcalendarobject.php
     */
    public function getCalendarObject(): IntlCalendar
    {
    }

    /**
     * Get the datetype used for the IntlDateFormatter
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.getdatetype.php
     */
    public function getDateType(): int
    {
    }

    /**
     * Get the error code from last operation
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.geterrorcode.php
     */
    public function getErrorCode(): int
    {
    }

    /**
     * Get the error text from the last operation
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.geterrormessage.php
     */
    public function getErrorMessage(): string
    {
    }

    /**
     * Get the locale used by formatter
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.getlocale.php
     */
    public function getLocale(): string
    {
    }

    /**
     * Get the pattern used for the IntlDateFormatter
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.getpattern.php
     */
    public function getPattern(): string
    {
    }

    /**
     * Get the timetype used for the IntlDateFormatter
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.gettimetype.php
     */
    public function getTimeType(): int
    {
    }

    /**
     * Get formatterʼs timezone
     *
     * @return IntlTimeZone
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL intl >= 3.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.gettimezone.php
     */
    public function getTimeZone(): IntlTimeZone
    {
    }

    /**
     * Get the timezone-id used for the IntlDateFormatter
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.gettimezoneid.php
     */
    public function getTimeZoneId(): string
    {
    }

    /**
     * Get the lenient used for the IntlDateFormatter
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.islenient.php
     */
    public function isLenient(): bool
    {
    }

    /**
     * Parse string to a field-based time value
     *
     * @param mixed $string
     * @param mixed|null $position
     *
     * @return array
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.localtime.php
     */
    public function localtime($string, &$position = null): array
    {
    }

    /**
     * Parse string to a timestamp value
     *
     * @param mixed $string
     * @param mixed|null $position
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.parse.php
     */
    public function parse($string, &$position = null): int
    {
    }

    /**
     * Sets the calendar type used by the formatter
     *
     * @param mixed $which
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.setcalendar.php
     */
    public function setCalendar($which): bool
    {
    }

    /**
     * Set the leniency of the parser
     *
     * @param mixed $lenient
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.setlenient.php
     */
    public function setLenient($lenient): bool
    {
    }

    /**
     * Set the pattern used for the IntlDateFormatter
     *
     * @param mixed $pattern
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.setpattern.php
     */
    public function setPattern($pattern): bool
    {
    }

    /**
     * Sets formatterʼs timezone
     *
     * @param mixed $zone
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL intl >= 3.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.settimezone.php
     */
    public function setTimeZone($zone): bool
    {
    }
}

/**
 * This class is used for generating exceptions when errors occur inside intl
 * functions. Such exceptions are only generated when intl.use_exceptions is enabled.
 *
 * @since PHP 5 > 5.5.0, PHP 7, PECL intl > 3.0.0a1
 *
 * @link http://www.php.net/manual/en/class.intlexception.php
 */
class IntlException extends Exception
{
}

/**
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.intlgregoriancalendar.php
 */
class IntlGregorianCalendar extends IntlCalendar
{
    /**
     * Create the Gregorian Calendar class
     *
     * @param mixed|null $timeZoneOrYear
     * @param mixed|null $localeOrMonth
     * @param mixed|null $dayOfMonth
     * @param mixed|null $hour
     * @param mixed|null $minute
     * @param mixed|null $second
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlgregoriancalendar.construct.php
     */
    public function __construct($timeZoneOrYear = null, $localeOrMonth = null, $dayOfMonth = null, $hour = null, $minute = null, $second = null)
    {
    }

    /**
     * Get the Gregorian Calendar change date
     *
     * @return float
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlgregoriancalendar.getgregorianchange.php
     */
    public function getGregorianChange(): float
    {
    }

    /**
     * Determine if the given year is a leap year
     *
     * @param mixed $year
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlgregoriancalendar.isleapyear.php
     */
    public function isLeapYear($year): bool
    {
    }

    /**
     * Set the Gregorian Calendar the change date
     *
     * @param mixed $date
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlgregoriancalendar.setgregorianchange.php
     */
    public function setGregorianChange($date): bool
    {
    }
}

/**
 * This class represents iterator objects throughout the intl extension
 * whenever the iterator cannot be identified with any other object provided
 * by the extension. The distinct iterator object used internally by the
 * <code>foreach</code>
 * construct can only be obtained (in the relevant part here) from
 * objects, so objects of this class serve the purpose of providing the hook
 * through which this internal object can be obtained. As a convenience, this
 * class also implements the <code>Iterator</code> interface,
 * allowing the collection of values to be navigated using the methods
 * defined in that interface. Both these methods and the internal iterator
 * objects provided to <code>foreach</code> are backed by the same
 * state (e.g. the position of the iterator and its current value).
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.intliterator.php
 */
class IntlIterator implements Iterator
{
    /**
     * Get the current element
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intliterator.current.php
     */
    public function current()
    {
    }

    /**
     * Get the current key
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intliterator.key.php
     */
    public function key(): string
    {
    }

    /**
     * Move forward to the next element
     *
     * @return void
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intliterator.next.php
     */
    public function next()
    {
    }

    /**
     * Rewind the iterator to the first element
     *
     * @return void
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intliterator.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * Check if current position is valid
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intliterator.valid.php
     */
    public function valid(): bool
    {
    }
}

/**
 * Objects of this class can be obtained from
 * <code>IntlBreakIterator</code> objects. While the break
 * iterators provide a sequence of boundary positions when iterated,
 * <code>IntlPartsIterator</code> objects provide, as a
 * convenience, the text fragments comprehended between two successive
 * boundaries.
 *
 * @link http://www.php.net/manual/en/class.intlpartsiterator.php
 */
class IntlPartsIterator extends IntlIterator
{
    /**
     * Get IntlBreakIterator backing this parts iterator
     *
     * @return IntlBreakIterator
     *
     * @link http://www.php.net/manual/en/intlpartsiterator.getbreakiterator.php
     */
    public function getBreakIterator(): IntlBreakIterator
    {
    }
}

/**
 * A subclass of <code>IntlBreakIterator</code> that encapsulates
 * ICU break iterators whose behavior is specified using a set of rules. This
 * is the most common kind of break iterators.
 *
 * @link http://www.php.net/manual/en/class.intlrulebasedbreakiterator.php
 */
class IntlRuleBasedBreakIterator extends IntlBreakIterator
{
    /**
     * Create iterator from ruleset
     *
     * @param mixed $rules
     * @param mixed|null $areCompiled
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlrulebasedbreakiterator.construct.php
     */
    public function __construct($rules, $areCompiled = null)
    {
    }

    /**
     * Get the binary form of compiled rules
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlrulebasedbreakiterator.getbinaryrules.php
     */
    public function getBinaryRules(): string
    {
    }

    /**
     * Get the rule set used to create this object
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlrulebasedbreakiterator.getrules.php
     */
    public function getRules(): string
    {
    }

    /**
     * Get the largest status value from the break rules that determined the current break position
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlrulebasedbreakiterator.getrulestatus.php
     */
    public function getRuleStatus(): int
    {
    }

    /**
     * Get the status values from the break rules that determined the current break position
     *
     * @return array
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlrulebasedbreakiterator.getrulestatusvec.php
     */
    public function getRuleStatusVec(): array
    {
    }
}

/**
 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
 *
 * @link http://www.php.net/manual/en/class.intltimezone.php
 */
class IntlTimeZone
{
    /**
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     */
    private function __construct()
    {
    }

    /**
     * Get the number of IDs in the equivalency group that includes the given ID
     *
     * @param mixed $zoneId
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.countequivalentids.php
     */
    public static function countEquivalentIDs($zoneId): int
    {
    }

    /**
     * Create a new copy of the default timezone for this host
     *
     * @return IntlTimeZone
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.createdefault.php
     */
    public static function createDefault(): IntlTimeZone
    {
    }

    /**
     * Get an enumeration over time zone IDs associated with the
     * given country or offset
     *
     * @param mixed|null $countryOrRawOffset
     *
     * @return IntlIterator
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.createenumeration.php
     */
    public static function createEnumeration($countryOrRawOffset = null): IntlIterator
    {
    }

    /**
     * Create a timezone object for the given ID
     *
     * @param mixed $zoneId
     *
     * @return IntlTimeZone
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.createtimezone.php
     */
    public static function createTimeZone($zoneId): IntlTimeZone
    {
    }

    /**
     * Get an enumeration over system time zone IDs with the given filter conditions
     *
     * @param mixed $zoneType
     * @param mixed|null $region
     * @param mixed|null $rawOffset
     *
     * @return IntlIterator
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intltimezone.createtimezoneidenumeration.php
     */
    public static function createTimeZoneIDEnumeration($zoneType, $region = null, $rawOffset = null): IntlIterator
    {
    }

    /**
     * Create a timezone object from <code>DateTimeZone</code>
     *
     * @param mixed $zoneId
     *
     * @return IntlTimeZone
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.fromdatetimezone.php
     */
    public static function fromDateTimeZone($zoneId): IntlTimeZone
    {
    }

    /**
     * Get the canonical system timezone ID or the normalized custom time zone ID for the given time zone ID
     *
     * @param mixed $zoneId
     * @param mixed|null $isSystemID
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.getcanonicalid.php
     */
    public static function getCanonicalID($zoneId, &$isSystemID = null): string
    {
    }

    /**
     * Get a name of this time zone suitable for presentation to the user
     *
     * @param mixed|null $isDaylight
     * @param mixed|null $style
     * @param mixed|null $locale
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.getdisplayname.php
     */
    public function getDisplayName($isDaylight = null, $style = null, $locale = null): string
    {
    }

    /**
     * Get the amount of time to be added to local standard time to get local wall clock time
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.getdstsavings.php
     */
    public function getDSTSavings(): int
    {
    }

    /**
     * Get an ID in the equivalency group that includes the given ID
     *
     * @param mixed $zoneId
     * @param mixed $index
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.getequivalentid.php
     */
    public static function getEquivalentID($zoneId, $index): string
    {
    }

    /**
     * Get last error code on the object
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.geterrorcode.php
     */
    public function getErrorCode(): int
    {
    }

    /**
     * Get last error message on the object
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.geterrormessage.php
     */
    public function getErrorMessage(): string
    {
    }

    /**
     * Create GMT (UTC) timezone
     *
     * @return IntlTimeZone
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.getgmt.php
     */
    public static function getGMT(): IntlTimeZone
    {
    }

    /**
     * Get timezone ID
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.getid.php
     */
    public function getID(): string
    {
    }

    /**
     * Get the time zone raw and GMT offset for the given moment in time
     *
     * @param mixed $date
     * @param mixed $local
     * @param mixed $rawOffset
     * @param mixed $dstOffset
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.getoffset.php
     */
    public function getOffset($date, $local, &$rawOffset, &$dstOffset): int
    {
    }

    /**
     * Get the raw GMT offset (before taking daylight savings time into account
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.getrawoffset.php
     */
    public function getRawOffset(): int
    {
    }

    /**
     * Get the region code associated with the given system time zone ID
     *
     * @param mixed $zoneId
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intltimezone.getregion.php
     */
    public static function getRegion($zoneId): string
    {
    }

    /**
     * Get the timezone data version currently used by ICU
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.gettzdataversion.php
     */
    public static function getTZDataVersion(): string
    {
    }

    /**
     * Get the "unknown" time zone
     *
     * @return IntlTimeZone
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intltimezone.getunknown.php
     */
    public static function getUnknown(): IntlTimeZone
    {
    }

    /**
     * Check if this zone has the same rules and offset as another zone
     *
     * @param IntlTimeZone $otherTimeZone
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.hassamerules.php
     */
    public function hasSameRules(IntlTimeZone $otherTimeZone): bool
    {
    }

    /**
     * Convert to <code>DateTimeZone</code> object
     *
     * @return DateTimeZone
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.todatetimezone.php
     */
    public function toDateTimeZone(): DateTimeZone
    {
    }

    /**
     * Check if this time zone uses daylight savings time
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.usedaylighttime.php
     */
    public function useDaylightTime(): bool
    {
    }
}

/**
 * Examples of identifiers include:
 * <ul>
 * <li>en-US (English, United States)</li>
 * <li>zh-Hant-TW (Chinese, Traditional Script, Taiwan)</li>
 * <li>fr-CA, fr-FR (French for Canada and France respectively)</li>
 * </ul>
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/class.locale.php
 */
class Locale
{
    /**
     * Tries to find out best available locale based on HTTP "Accept-Language" header
     *
     * @param mixed $header
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.acceptfromhttp.php
     */
    public static function acceptFromHttp($header): string
    {
    }

    /**
     * Canonicalize the locale string
     *
     * @param mixed $locale
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.canonicalize.php
     */
    public static function canonicalize($locale): string
    {
    }

    /**
     * Returns a correctly ordered and delimited locale ID
     *
     * @param mixed $subtags
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.composelocale.php
     */
    public static function composeLocale($subtags): string
    {
    }

    /**
     * Checks if a language tag filter matches with locale
     *
     * @param mixed $langtag
     * @param mixed $locale
     * @param mixed|null $canonicalize
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.filtermatches.php
     */
    public static function filterMatches($langtag, $locale, $canonicalize = null): bool
    {
    }

    /**
     * Gets the variants for the input locale
     *
     * @param mixed $locale
     *
     * @return array
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getallvariants.php
     */
    public static function getAllVariants($locale): array
    {
    }

    /**
     * Gets the default locale value from the INTL global 'default_locale'
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getdefault.php
     */
    public static function getDefault(): string
    {
    }

    /**
     * Returns an appropriately localized display name for language of the inputlocale
     *
     * @param mixed $locale
     * @param mixed|null $in_locale
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getdisplaylanguage.php
     */
    public static function getDisplayLanguage($locale, $in_locale = null): string
    {
    }

    /**
     * Returns an appropriately localized display name for the input locale
     *
     * @param mixed $locale
     * @param mixed|null $in_locale
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getdisplayname.php
     */
    public static function getDisplayName($locale, $in_locale = null): string
    {
    }

    /**
     * Returns an appropriately localized display name for region of the input locale
     *
     * @param mixed $locale
     * @param mixed|null $in_locale
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getdisplayregion.php
     */
    public static function getDisplayRegion($locale, $in_locale = null): string
    {
    }

    /**
     * Returns an appropriately localized display name for script of the input locale
     *
     * @param mixed $locale
     * @param mixed|null $in_locale
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getdisplayscript.php
     */
    public static function getDisplayScript($locale, $in_locale = null): string
    {
    }

    /**
     * Returns an appropriately localized display name for variants of the input locale
     *
     * @param mixed $locale
     * @param mixed|null $in_locale
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getdisplayvariant.php
     */
    public static function getDisplayVariant($locale, $in_locale = null): string
    {
    }

    /**
     * Gets the keywords for the input locale
     *
     * @param mixed $locale
     *
     * @return array
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getkeywords.php
     */
    public static function getKeywords($locale): array
    {
    }

    /**
     * Gets the primary language for the input locale
     *
     * @param mixed $locale
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getprimarylanguage.php
     */
    public static function getPrimaryLanguage($locale): string
    {
    }

    /**
     * Gets the region for the input locale
     *
     * @param mixed $locale
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getregion.php
     */
    public static function getRegion($locale): string
    {
    }

    /**
     * Gets the script for the input locale
     *
     * @param mixed $locale
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getscript.php
     */
    public static function getScript($locale): string
    {
    }

    /**
     * Searches the language tag list for the best match to the language
     *
     * @param mixed $langtag
     * @param mixed $locale
     * @param mixed|null $canonicalize
     * @param mixed|null $default
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.lookup.php
     */
    public static function lookup($langtag, $locale, $canonicalize = null, $default = null): string
    {
    }

    /**
     * Returns a key-value array of locale ID subtag elements
     *
     * @param mixed $locale
     *
     * @return array
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.parselocale.php
     */
    public static function parseLocale($locale): array
    {
    }

    /**
     * Sets the default runtime locale
     *
     * @param mixed $locale
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.setdefault.php
     */
    public static function setDefault($locale): bool
    {
    }
}

/**
 * <ul>
 * <li>
 * ICU formatting documentation
 * </li>
 * <li>
 * ICU message formatting description
 * </li>
 * <li>
 * ICU message formatters
 * </li>
 * <li>
 * ICU choice formatters
 * </li>
 * </ul>
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/class.messageformatter.php
 */
class MessageFormatter
{
    /**
     * Constructs a new Message Formatter
     *
     * @param mixed $locale
     * @param mixed $pattern
     *
     * @return MessageFormatter
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.create.php
     */
    public function __construct($locale, $pattern): MessageFormatter
    {
    }

    /**
     * Constructs a new Message Formatter
     *
     * @param mixed $locale
     * @param mixed $pattern
     *
     * @return MessageFormatter
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.create.php
     */
    public static function create($locale, $pattern): MessageFormatter
    {
    }

    /**
     * Format the message
     *
     * @param mixed $args
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.format.php
     */
    public function format($args): string
    {
    }

    /**
     * Quick format message
     *
     * @param mixed $locale
     * @param mixed $pattern
     * @param mixed $args
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.formatmessage.php
     */
    public static function formatMessage($locale, $pattern, $args): string
    {
    }

    /**
     * Get the error code from last operation
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.geterrorcode.php
     */
    public function getErrorCode(): int
    {
    }

    /**
     * Get the error text from the last operation
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.geterrormessage.php
     */
    public function getErrorMessage(): string
    {
    }

    /**
     * Get the locale for which the formatter was created
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.getlocale.php
     */
    public function getLocale(): string
    {
    }

    /**
     * Get the pattern used by the formatter
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.getpattern.php
     */
    public function getPattern(): string
    {
    }

    /**
     * Parse input string according to pattern
     *
     * @param mixed $source
     *
     * @return array
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.parse.php
     */
    public function parse($source): array
    {
    }

    /**
     * Quick parse input string
     *
     * @param mixed $locale
     * @param mixed $pattern
     * @param mixed $args
     *
     * @return array
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.parsemessage.php
     */
    public static function parseMessage($locale, $pattern, $args): array
    {
    }

    /**
     * Set the pattern used by the formatter
     *
     * @param mixed $pattern
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.setpattern.php
     */
    public function setPattern($pattern): bool
    {
    }
}

/**
 * The Unicode Consortium has defined a number of normalization forms
 * reflecting the various needs of applications:
 * <ul>
 * <li>Normalization Form D (NFD) - Canonical Decomposition</li>
 * <li>
 * Normalization Form C (NFC) - Canonical Decomposition followed by
 * Canonical Composition
 * </li>
 * <li>
 * Normalization Form KD (NFKD) - Compatibility Decomposition
 * </li>
 * <li>
 * Normalization Form KC (NFKC) - Compatibility Decomposition followed by
 * Canonical Composition
 * </li>
 * </ul>
 * The different forms are defined in terms of a set of transformations on
 * the text, transformations that are expressed by both an algorithm and a
 * set of data files.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/class.normalizer.php
 */
class Normalizer
{
    /**
     * Checks if the provided string is already in the specified normalization
     * form
     *
     * @param mixed $input
     * @param mixed|null $form
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/normalizer.isnormalized.php
     */
    public static function isNormalized($input, $form = null): bool
    {
    }

    /**
     * Normalizes the input provided and returns the normalized string
     *
     * @param mixed $input
     * @param mixed|null $form
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/normalizer.normalize.php
     */
    public static function normalize($input, $form = null): string
    {
    }
}

/**
 * For currencies you can use currency format type to create a formatter that
 * returns a string with the formatted number and the appropriate currency
 * sign. Of course, the NumberFormatter class is unaware of exchange rates
 * so, the number output is the same regardless of the specified currency.
 * This means that the same number has different monetary values depending on
 * the currency locale. If the number is 9988776.65 the results will be:
 * <ul>
 * <li>9 988 776,65 € in France</li>
 * <li>9.988.776,65 € in Germany</li>
 * <li>$9,988,776.65 in the United States</li>
 * </ul>
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/class.numberformatter.php
 */
class NumberFormatter
{
    /**
     * Create a number formatter
     *
     * @param mixed $locale
     * @param mixed $style
     * @param mixed|null $pattern
     *
     * @return NumberFormatter
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.create.php
     */
    public function __construct($locale, $style, $pattern = null): NumberFormatter
    {
    }

    /**
     * Create a number formatter
     *
     * @param mixed $locale
     * @param mixed $style
     * @param mixed|null $pattern
     *
     * @return NumberFormatter
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.create.php
     */
    public static function create($locale, $style, $pattern = null): NumberFormatter
    {
    }

    /**
     * Format a number
     *
     * @param mixed $num
     * @param mixed|null $type
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.format.php
     */
    public function format($num, $type = null): string
    {
    }

    /**
     * Format a currency value
     *
     * @param mixed $num
     * @param mixed $currency
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.formatcurrency.php
     */
    public function formatCurrency($num, $currency): string
    {
    }

    /**
     * Get an attribute
     *
     * @param mixed $attr
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.getattribute.php
     */
    public function getAttribute($attr): int
    {
    }

    /**
     * Get formatter's last error code
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.geterrorcode.php
     */
    public function getErrorCode(): int
    {
    }

    /**
     * Get formatter's last error message
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.geterrormessage.php
     */
    public function getErrorMessage(): string
    {
    }

    /**
     * Get formatter locale
     *
     * @param mixed|null $type
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.getlocale.php
     */
    public function getLocale($type = null): string
    {
    }

    /**
     * Get formatter pattern
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.getpattern.php
     */
    public function getPattern(): string
    {
    }

    /**
     * Get a symbol value
     *
     * @param mixed $attr
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.getsymbol.php
     */
    public function getSymbol($attr): string
    {
    }

    /**
     * Get a text attribute
     *
     * @param mixed $attr
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.gettextattribute.php
     */
    public function getTextAttribute($attr): string
    {
    }

    /**
     * Parse a number
     *
     * @param mixed $string
     * @param mixed|null $type
     * @param mixed|null $position
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.parse.php
     */
    public function parse($string, $type = null, &$position = null)
    {
    }

    /**
     * Parse a currency number
     *
     * @param mixed $string
     * @param mixed $currency
     * @param mixed|null $position
     *
     * @return float
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.parsecurrency.php
     */
    public function parseCurrency($string, &$currency, &$position = null): float
    {
    }

    /**
     * Set an attribute
     *
     * @param mixed $attr
     * @param mixed $value
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.setattribute.php
     */
    public function setAttribute($attr, $value): bool
    {
    }

    /**
     * Set formatter pattern
     *
     * @param mixed $pattern
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.setpattern.php
     */
    public function setPattern($pattern): bool
    {
    }

    /**
     * Set a symbol value
     *
     * @param mixed $attr
     * @param mixed $symbol
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.setsymbol.php
     */
    public function setSymbol($attr, $symbol): bool
    {
    }

    /**
     * Set a text attribute
     *
     * @param mixed $attr
     * @param mixed $value
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.settextattribute.php
     */
    public function setTextAttribute($attr, $value): bool
    {
    }
}

/**
 * <ul>
 * <li>
 * ICU Resource Management
 * </li>
 * <li>
 * ICU Data
 * </li>
 * </ul>
 *
 * @since PHP 5 >= 5.3.2, PHP 7, PECL intl >= 2.0.0
 *
 * @link http://www.php.net/manual/en/class.resourcebundle.php
 */
class ResourceBundle implements Traversable
{
    /**
     * Create a resource bundle
     *
     * @param mixed $locale
     * @param mixed $bundlename
     * @param mixed|null $fallback
     *
     * @return ResourceBundle
     *
     * @link http://www.php.net/manual/en/resourcebundle.create.php
     */
    public function __construct($locale, $bundlename, $fallback = null): ResourceBundle
    {
    }

    /**
     * Get number of elements in the bundle
     *
     * @return int
     *
     * @link http://www.php.net/manual/en/resourcebundle.count.php
     */
    public function count(): int
    {
    }

    /**
     * Create a resource bundle
     *
     * @param mixed $locale
     * @param mixed $bundlename
     * @param mixed|null $fallback
     *
     * @return ResourceBundle
     *
     * @link http://www.php.net/manual/en/resourcebundle.create.php
     */
    public static function create($locale, $bundlename, $fallback = null): ResourceBundle
    {
    }

    /**
     * Get data from the bundle
     *
     * @param mixed $index
     * @param mixed|null $fallback
     *
     * @return mixed
     *
     * @link http://www.php.net/manual/en/resourcebundle.get.php
     */
    public function get($index, $fallback = null)
    {
    }

    /**
     * Get bundle's last error code
     *
     * @return int
     *
     * @link http://www.php.net/manual/en/resourcebundle.geterrorcode.php
     */
    public function getErrorCode(): int
    {
    }

    /**
     * Get bundle's last error message
     *
     * @return string
     *
     * @link http://www.php.net/manual/en/resourcebundle.geterrormessage.php
     */
    public function getErrorMessage(): string
    {
    }

    /**
     * Get supported locales
     *
     * @param mixed $bundlename
     *
     * @return array
     *
     * @link http://www.php.net/manual/en/resourcebundle.locales.php
     */
    public static function getLocales($bundlename): array
    {
    }
}

/**
 * This class is provided because Unicode contains large number of characters
 * and incorporates the varied writing systems of the world and their incorrect
 * usage can expose programs or systems to possible security attacks using
 * characters similarity.
 *
 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
 *
 * @link http://www.php.net/manual/en/class.spoofchecker.php
 */
class Spoofchecker
{
    /**
     * Constructor
     *
     * @link http://www.php.net/manual/en/spoofchecker.construct.php
     */
    public function __construct()
    {
    }

    /**
     * Checks if given strings can be confused
     *
     * @param mixed $s1
     * @param mixed $s2
     * @param mixed|null $error
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/spoofchecker.areconfusable.php
     */
    public function areConfusable($s1, $s2, &$error = null): bool
    {
    }

    /**
     * Checks if a given text contains any suspicious characters
     *
     * @param mixed $text
     * @param mixed|null $error
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/spoofchecker.issuspicious.php
     */
    public function isSuspicious($text, &$error = null): bool
    {
    }

    /**
     * Locales to use when running checks
     *
     * @param mixed $locale_list
     *
     * @return void
     *
     * @link http://www.php.net/manual/en/spoofchecker.setallowedlocales.php
     */
    public function setAllowedLocales($locale_list)
    {
    }

    /**
     * Set the checks to run
     *
     * @param mixed $checks
     *
     * @return void
     *
     * @link http://www.php.net/manual/en/spoofchecker.setchecks.php
     */
    public function setChecks($checks)
    {
    }
}

/**
 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
 *
 * @link http://www.php.net/manual/en/class.transliterator.php
 */
class Transliterator
{
    /**
     * Private constructor to deny instantiation
     *
     * @link http://www.php.net/manual/en/transliterator.construct.php
     */
    final private function __construct()
    {
    }

    /**
     * Create a transliterator
     *
     * @param mixed $id
     * @param mixed|null $direction
     *
     * @return Transliterator
     *
     * @link http://www.php.net/manual/en/transliterator.create.php
     */
    public static function create($id, $direction = null): Transliterator
    {
    }

    /**
     * Create transliterator from rules
     *
     * @param mixed $rules
     * @param mixed|null $direction
     *
     * @return Transliterator
     *
     * @link http://www.php.net/manual/en/transliterator.createfromrules.php
     */
    public static function createFromRules($rules, $direction = null): Transliterator
    {
    }

    /**
     * Create an inverse transliterator
     *
     * @return Transliterator
     *
     * @link http://www.php.net/manual/en/transliterator.createinverse.php
     */
    public function createInverse(): Transliterator
    {
    }

    /**
     * Get last error code
     *
     * @return int
     *
     * @link http://www.php.net/manual/en/transliterator.geterrorcode.php
     */
    public function getErrorCode(): int
    {
    }

    /**
     * Get last error message
     *
     * @return string
     *
     * @link http://www.php.net/manual/en/transliterator.geterrormessage.php
     */
    public function getErrorMessage(): string
    {
    }

    /**
     * Get transliterator IDs
     *
     * @return array
     *
     * @link http://www.php.net/manual/en/transliterator.listids.php
     */
    public static function listIDs(): array
    {
    }

    /**
     * Transliterate a string
     *
     * @param mixed $subject
     * @param mixed|null $start
     * @param mixed|null $end
     *
     * @return string
     *
     * @link http://www.php.net/manual/en/transliterator.transliterate.php
     */
    public function transliterate($subject, $start = null, $end = null): string
    {
    }
}

/**
 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
 *
 * @link http://www.php.net/manual/en/class.uconverter.php
 */
class UConverter
{
    /**
     * Create UConverter object
     *
     * @param mixed|null $destination_encoding
     * @param mixed|null $source_encoding
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.construct.php
     */
    public function __construct($destination_encoding = null, $source_encoding = null)
    {
    }

    /**
     * Convert string from one charset to another
     *
     * @param mixed $str
     * @param mixed|null $reverse
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.convert.php
     */
    public function convert($str, $reverse = null): string
    {
    }

    /**
     * Default "from" callback function
     *
     * @param mixed $reason
     * @param mixed $source
     * @param mixed $codePoint
     * @param mixed $error
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.fromucallback.php
     */
    public function fromUCallback($reason, $source, $codePoint, &$error)
    {
    }

    /**
     * Get the aliases of the given name
     *
     * @param mixed $name
     *
     * @return array
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.getaliases.php
     */
    public static function getAliases($name): array
    {
    }

    /**
     * Get the available canonical converter names
     *
     * @return array
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.getavailable.php
     */
    public static function getAvailable(): array
    {
    }

    /**
     * Get the destination encoding
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.getdestinationencoding.php
     */
    public function getDestinationEncoding(): string
    {
    }

    /**
     * Get the destination converter type
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.getdestinationtype.php
     */
    public function getDestinationType(): int
    {
    }

    /**
     * Get last error code on the object
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.geterrorcode.php
     */
    public function getErrorCode(): int
    {
    }

    /**
     * Get last error message on the object
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.geterrormessage.php
     */
    public function getErrorMessage(): string
    {
    }

    /**
     * Get the source encoding
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.getsourceencoding.php
     */
    public function getSourceEncoding(): string
    {
    }

    /**
     * Get the source convertor type
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.getsourcetype.php
     */
    public function getSourceType(): int
    {
    }

    /**
     * Get standards associated to converter names
     *
     * @return array
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.getstandards.php
     */
    public static function getStandards(): array
    {
    }

    /**
     * Get substitution chars
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.getsubstchars.php
     */
    public function getSubstChars(): string
    {
    }

    /**
     * Get string representation of the callback reason
     *
     * @param mixed|null $reason
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.reasontext.php
     */
    public static function reasonText($reason = null): string
    {
    }

    /**
     * Set the destination encoding
     *
     * @param mixed $encoding
     *
     * @return void
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.setdestinationencoding.php
     */
    public function setDestinationEncoding($encoding)
    {
    }

    /**
     * Set the source encoding
     *
     * @param mixed $encoding
     *
     * @return void
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.setsourceencoding.php
     */
    public function setSourceEncoding($encoding)
    {
    }

    /**
     * Set the substitution chars
     *
     * @param mixed $chars
     *
     * @return void
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.setsubstchars.php
     */
    public function setSubstChars($chars)
    {
    }

    /**
     * Default "to" callback function
     *
     * @param mixed $reason
     * @param mixed $source
     * @param mixed $codeUnits
     * @param mixed $error
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.toucallback.php
     */
    public function toUCallback($reason, $source, $codeUnits, &$error)
    {
    }

    /**
     * Convert string from one charset to another
     *
     * @param mixed $str
     * @param mixed $toEncoding
     * @param mixed $fromEncoding
     * @param array|null $options
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.transcode.php
     */
    public static function transcode($str, $toEncoding, $fromEncoding, array $options = null): string
    {
    }
}

/**
 * Sort array maintaining index association
 *
 * @param Collator $object
 * @param array $arr
 * @param mixed|null $sort_flags
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.asort.php
 */
function collator_asort(Collator $object, array &$arr, $sort_flags = null): bool
{
}

/**
 * Compare two Unicode strings
 *
 * @param Collator $object
 * @param mixed $arg1
 * @param mixed $arg2
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.compare.php
 */
function collator_compare(Collator $object, $arg1, $arg2): int
{
}

/**
 * Create a collator
 *
 * @param mixed $arg1
 *
 * @return Collator
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.create.php
 */
function collator_create($arg1): Collator
{
}

/**
 * Get collation attribute value
 *
 * @param Collator $object
 * @param mixed $arg1
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.getattribute.php
 */
function collator_get_attribute(Collator $object, $arg1): int
{
}

/**
 * Get collator's last error code
 *
 * @param Collator $object
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.geterrorcode.php
 */
function collator_get_error_code(Collator $object): int
{
}

/**
 * Get text for collator's last error code
 *
 * @param Collator $object
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.geterrormessage.php
 */
function collator_get_error_message(Collator $object): string
{
}

/**
 * Get the locale name of the collator
 *
 * @param Collator $object
 * @param mixed $arg1
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.getlocale.php
 */
function collator_get_locale(Collator $object, $arg1): string
{
}

/**
 * Get sorting key for a string
 *
 * @param Collator $object
 * @param mixed $arg1
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.2, PHP 7
 *
 * @link http://www.php.net/manual/en/collator.getsortkey.php
 */
function collator_get_sort_key(Collator $object, $arg1): string
{
}

/**
 * Get current collation strength
 *
 * @param Collator $object
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.getstrength.php
 */
function collator_get_strength(Collator $object): int
{
}

/**
 * Set collation attribute
 *
 * @param Collator $object
 * @param mixed $arg1
 * @param mixed $arg2
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.setattribute.php
 */
function collator_set_attribute(Collator $object, $arg1, $arg2): bool
{
}

/**
 * Set collation strength
 *
 * @param Collator $object
 * @param mixed $arg1
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.setstrength.php
 */
function collator_set_strength(Collator $object, $arg1): bool
{
}

/**
 * Sort array using specified collator
 *
 * @param Collator $object
 * @param array $arr
 * @param mixed|null $sort_flags
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.sort.php
 */
function collator_sort(Collator $object, array &$arr, $sort_flags = null): bool
{
}

/**
 * Sort array using specified collator and sort keys
 *
 * @param Collator $coll
 * @param array $arr
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.sortwithsortkeys.php
 */
function collator_sort_with_sort_keys(Collator $coll, array &$arr): bool
{
}

/**
 * Create a date formatter
 *
 * @param mixed $locale
 * @param mixed $date_type
 * @param mixed $time_type
 * @param mixed|null $timezone_str
 * @param mixed|null $calendar
 * @param mixed|null $pattern
 *
 * @return IntlDateFormatter
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.create.php
 */
function datefmt_create($locale, $date_type, $time_type, $timezone_str = null, $calendar = null, $pattern = null): IntlDateFormatter
{
}

/**
 * Format the date/time value as a string
 *
 * @param mixed|null $args
 * @param mixed|null $array
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.format.php
 */
function datefmt_format($args = null, $array = null): string
{
}

/**
 * Formats an object
 *
 * @param mixed $object
 * @param mixed|null $format
 * @param mixed|null $locale
 *
 * @return string
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/intldateformatter.formatobject.php
 */
function datefmt_format_object($object, $format = null, $locale = null): string
{
}

/**
 * Get the calendar type used for the IntlDateFormatter
 *
 * @param mixed $mf
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.getcalendar.php
 */
function datefmt_get_calendar($mf): int
{
}

/**
 * Get copy of formatterʼs calendar object
 *
 * @param mixed $mf
 *
 * @return IntlCalendar
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/intldateformatter.getcalendarobject.php
 */
function datefmt_get_calendar_object($mf): IntlCalendar
{
}

/**
 * Get the datetype used for the IntlDateFormatter
 *
 * @param mixed $mf
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.getdatetype.php
 */
function datefmt_get_datetype($mf): int
{
}

/**
 * Get the error code from last operation
 *
 * @param mixed $nf
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.geterrorcode.php
 */
function datefmt_get_error_code($nf): int
{
}

/**
 * Get the error text from the last operation
 *
 * @param mixed $coll
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.geterrormessage.php
 */
function datefmt_get_error_message($coll): string
{
}

/**
 * Get the locale used by formatter
 *
 * @param mixed $mf
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.getlocale.php
 */
function datefmt_get_locale($mf): string
{
}

/**
 * Get the pattern used for the IntlDateFormatter
 *
 * @param mixed $mf
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.getpattern.php
 */
function datefmt_get_pattern($mf): string
{
}

/**
 * Get the timetype used for the IntlDateFormatter
 *
 * @param mixed $mf
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.gettimetype.php
 */
function datefmt_get_timetype($mf): int
{
}

/**
 * Get formatterʼs timezone
 *
 * @param mixed $mf
 *
 * @return IntlTimeZone
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/intldateformatter.gettimezone.php
 */
function datefmt_get_timezone($mf): IntlTimeZone
{
}

/**
 * Get the timezone-id used for the IntlDateFormatter
 *
 * @param mixed $mf
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.gettimezoneid.php
 */
function datefmt_get_timezone_id($mf): string
{
}

/**
 * Get the lenient used for the IntlDateFormatter
 *
 * @param mixed $mf
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.islenient.php
 */
function datefmt_is_lenient($mf): bool
{
}

/**
 * Parse string to a field-based time value
 *
 * @param mixed $formatter
 * @param mixed $string
 * @param mixed|null $position
 *
 * @return array
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.localtime.php
 */
function datefmt_localtime($formatter, $string, &$position = null): array
{
}

/**
 * Parse string to a timestamp value
 *
 * @param mixed $formatter
 * @param mixed $string
 * @param mixed|null $position
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.parse.php
 */
function datefmt_parse($formatter, $string, &$position = null): int
{
}

/**
 * Sets the calendar type used by the formatter
 *
 * @param mixed $mf
 * @param mixed $calendar
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.setcalendar.php
 */
function datefmt_set_calendar($mf, $calendar): bool
{
}

/**
 * Set the leniency of the parser
 *
 * @param mixed $mf
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.setlenient.php
 */
function datefmt_set_lenient($mf): bool
{
}

/**
 * Set the pattern used for the IntlDateFormatter
 *
 * @param mixed $mf
 * @param mixed $pattern
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.setpattern.php
 */
function datefmt_set_pattern($mf, $pattern): bool
{
}

/**
 * Sets formatterʼs timezone
 *
 * @param mixed $mf
 * @param mixed $timezone
 *
 * @return bool
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/intldateformatter.settimezone.php
 */
function datefmt_set_timezone($mf, $timezone): bool
{
}

/**
 * Function to extract a sequence of default grapheme clusters from a text buffer, which must be encoded in UTF-8
 *
 * @param mixed $arg1
 * @param mixed $arg2
 * @param mixed|null $arg3
 * @param mixed|null $arg4
 * @param mixed|null $arg5
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.grapheme-extract.php
 */
function grapheme_extract($arg1, $arg2, $arg3 = null, $arg4 = null, &$arg5 = null): string
{
}

/**
 * Find position (in grapheme units) of first occurrence of a case-insensitive string
 *
 * @param mixed $haystack
 * @param mixed $needle
 * @param mixed|null $offset
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.grapheme-stripos.php
 */
function grapheme_stripos($haystack, $needle, $offset = null): int
{
}

/**
 * Returns part of haystack string from the first occurrence of case-insensitive needle to the end of haystack
 *
 * @param mixed $haystack
 * @param mixed $needle
 * @param mixed|null $before_needle
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.grapheme-stristr.php
 */
function grapheme_stristr($haystack, $needle, $before_needle = null): string
{
}

/**
 * Get string length in grapheme units
 *
 * @param mixed $string
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.grapheme-strlen.php
 */
function grapheme_strlen($string): int
{
}

/**
 * Find position (in grapheme units) of first occurrence of a string
 *
 * @param mixed $haystack
 * @param mixed $needle
 * @param mixed|null $offset
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.grapheme-strpos.php
 */
function grapheme_strpos($haystack, $needle, $offset = null): int
{
}

/**
 * Find position (in grapheme units) of last occurrence of a case-insensitive string
 *
 * @param mixed $haystack
 * @param mixed $needle
 * @param mixed|null $offset
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.grapheme-strripos.php
 */
function grapheme_strripos($haystack, $needle, $offset = null): int
{
}

/**
 * Find position (in grapheme units) of last occurrence of a string
 *
 * @param mixed $haystack
 * @param mixed $needle
 * @param mixed|null $offset
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.grapheme-strrpos.php
 */
function grapheme_strrpos($haystack, $needle, $offset = null): int
{
}

/**
 * Returns part of haystack string from the first occurrence of needle to the end of haystack
 *
 * @param mixed $haystack
 * @param mixed $needle
 * @param mixed|null $before_needle
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.grapheme-strstr.php
 */
function grapheme_strstr($haystack, $needle, $before_needle = null): string
{
}

/**
 * Return part of a string
 *
 * @param mixed $string
 * @param mixed $start
 * @param mixed|null $length
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.grapheme-substr.php
 */
function grapheme_substr($string, $start, $length = null): string
{
}

/**
 * Convert domain name to IDNA ASCII form
 *
 * @param mixed $domain
 * @param mixed|null $option
 * @param mixed|null $variant
 * @param mixed|null $idn_info
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.2, PECL idn >= 0.1
 *
 * @link http://www.php.net/manual/en/function.idn-to-ascii.php
 */
function idn_to_ascii($domain, $option = null, $variant = null, &$idn_info = null): string
{
}

/**
 * Convert domain name from IDNA ASCII to Unicode
 *
 * @param mixed $domain
 * @param mixed|null $option
 * @param mixed|null $variant
 * @param mixed|null $idn_info
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.2, PECL idn >= 0.1
 *
 * @link http://www.php.net/manual/en/function.idn-to-utf8.php
 */
function idn_to_utf8($domain, $option = null, $variant = null, &$idn_info = null): string
{
}

/**
 * @param mixed $arg1
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function intl_error_name($arg1)
{
}

/**
 * Get last error code on the object
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intlbreakiterator.geterrorcode.php
 */
function intl_get_error_code(): int
{
}

/**
 * Get last error message on the object
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intlbreakiterator.geterrormessage.php
 */
function intl_get_error_message(): string
{
}

/**
 * @param mixed $arg1
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function intl_is_failure($arg1)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $field
 * @param mixed $amount
 */
function intlcal_add(IntlCalendar $calendar, $field, $amount)
{
}

/**
 * @param IntlCalendar $calendar
 * @param IntlCalendar $otherCalendar
 */
function intlcal_after(IntlCalendar $calendar, IntlCalendar $otherCalendar)
{
}

/**
 * @param IntlCalendar $calendar
 * @param IntlCalendar $otherCalendar
 */
function intlcal_before(IntlCalendar $calendar, IntlCalendar $otherCalendar)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed|null $field
 */
function intlcal_clear(IntlCalendar $calendar, $field = null)
{
}

/**
 * @param mixed|null $timeZone
 * @param mixed|null $locale
 */
function intlcal_create_instance($timeZone = null, $locale = null)
{
}

/**
 * @param IntlCalendar $calendar
 * @param IntlCalendar $otherCalendar
 */
function intlcal_equals(IntlCalendar $calendar, IntlCalendar $otherCalendar)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $when
 * @param mixed $field
 */
function intlcal_field_difference(IntlCalendar $calendar, $when, $field)
{
}

/**
 * @param mixed $dateTime
 */
function intlcal_from_date_time($dateTime)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $field
 */
function intlcal_get(IntlCalendar $calendar, $field)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $field
 */
function intlcal_get_actual_maximum(IntlCalendar $calendar, $field)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $field
 */
function intlcal_get_actual_minimum(IntlCalendar $calendar, $field)
{
}

function intlcal_get_available_locales()
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $dayOfWeek
 */
function intlcal_get_day_of_week_type(IntlCalendar $calendar, $dayOfWeek)
{
}

/**
 * Get last error code on the object
 *
 * @param IntlCalendar $calendar
 *
 * @return int
 *
 * @link http://www.php.net/manual/en/intlcalendar.geterrorcode.php
 */
function intlcal_get_error_code(IntlCalendar $calendar): int
{
}

/**
 * Get last error message on the object
 *
 * @param IntlCalendar $calendar
 *
 * @return string
 *
 * @link http://www.php.net/manual/en/intlcalendar.geterrormessage.php
 */
function intlcal_get_error_message(IntlCalendar $calendar): string
{
}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_first_day_of_week(IntlCalendar $calendar)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $field
 */
function intlcal_get_greatest_minimum(IntlCalendar $calendar, $field)
{
}

/**
 * @param mixed $key
 * @param mixed $locale
 * @param mixed $commonlyUsed
 */
function intlcal_get_keyword_values_for_locale($key, $locale, $commonlyUsed)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $field
 */
function intlcal_get_least_maximum(IntlCalendar $calendar, $field)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $localeType
 */
function intlcal_get_locale(IntlCalendar $calendar, $localeType)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $field
 */
function intlcal_get_maximum(IntlCalendar $calendar, $field)
{
}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_minimal_days_in_first_week(IntlCalendar $calendar)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $field
 */
function intlcal_get_minimum(IntlCalendar $calendar, $field)
{
}

function intlcal_get_now()
{
}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_repeated_wall_time_option(IntlCalendar $calendar)
{
}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_skipped_wall_time_option(IntlCalendar $calendar)
{
}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_time(IntlCalendar $calendar)
{
}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_time_zone(IntlCalendar $calendar)
{
}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_type(IntlCalendar $calendar)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $dayOfWeek
 */
function intlcal_get_weekend_transition(IntlCalendar $calendar, $dayOfWeek)
{
}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_in_daylight_time(IntlCalendar $calendar)
{
}

/**
 * @param IntlCalendar $calendar
 * @param IntlCalendar $otherCalendar
 */
function intlcal_is_equivalent_to(IntlCalendar $calendar, IntlCalendar $otherCalendar)
{
}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_is_lenient(IntlCalendar $calendar)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $field
 */
function intlcal_is_set(IntlCalendar $calendar, $field)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed|null $date
 */
function intlcal_is_weekend(IntlCalendar $calendar, $date = null)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $field
 * @param mixed|null $amountOrUpOrDown
 */
function intlcal_roll(IntlCalendar $calendar, $field, $amountOrUpOrDown = null)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $fieldOrYear
 * @param mixed $valueOrMonth
 * @param mixed|null $dayOfMonth
 * @param mixed|null $hour
 * @param mixed|null $minute
 * @param mixed|null $second
 */
function intlcal_set(IntlCalendar $calendar, $fieldOrYear, $valueOrMonth, $dayOfMonth = null, $hour = null, $minute = null, $second = null)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $dayOfWeek
 */
function intlcal_set_first_day_of_week(IntlCalendar $calendar, $dayOfWeek)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $isLenient
 */
function intlcal_set_lenient(IntlCalendar $calendar, $isLenient)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $numberOfDays
 */
function intlcal_set_minimal_days_in_first_week(IntlCalendar $calendar, $numberOfDays)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $wallTimeOption
 */
function intlcal_set_repeated_wall_time_option(IntlCalendar $calendar, $wallTimeOption)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $wallTimeOption
 */
function intlcal_set_skipped_wall_time_option(IntlCalendar $calendar, $wallTimeOption)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $date
 */
function intlcal_set_time(IntlCalendar $calendar, $date)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $timeZone
 */
function intlcal_set_time_zone(IntlCalendar $calendar, $timeZone)
{
}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_to_date_time(IntlCalendar $calendar)
{
}

/**
 * @param mixed|null $timeZoneOrYear
 * @param mixed|null $localeOrMonth
 * @param mixed|null $dayOfMonth
 * @param mixed|null $hour
 * @param mixed|null $minute
 * @param mixed|null $second
 */
function intlgregcal_create_instance($timeZoneOrYear = null, $localeOrMonth = null, $dayOfMonth = null, $hour = null, $minute = null, $second = null)
{
}

/**
 * @param IntlGregorianCalendar $calendar
 */
function intlgregcal_get_gregorian_change(IntlGregorianCalendar $calendar)
{
}

/**
 * @param IntlGregorianCalendar $calendar
 * @param mixed $year
 */
function intlgregcal_is_leap_year(IntlGregorianCalendar $calendar, $year)
{
}

/**
 * @param IntlGregorianCalendar $calendar
 * @param mixed $date
 */
function intlgregcal_set_gregorian_change(IntlGregorianCalendar $calendar, $date)
{
}

/**
 * @param mixed $zoneId
 */
function intltz_count_equivalent_ids($zoneId)
{
}

function intltz_create_default()
{
}

/**
 * @param mixed|null $countryOrRawOffset
 */
function intltz_create_enumeration($countryOrRawOffset = null)
{
}

/**
 * @param mixed $zoneId
 */
function intltz_create_time_zone($zoneId)
{
}

/**
 * @param mixed $zoneType
 * @param mixed|null $region
 * @param mixed|null $rawOffset
 */
function intltz_create_time_zone_id_enumeration($zoneType, $region = null, $rawOffset = null)
{
}

/**
 * @param DateTimeZone $dateTimeZone
 */
function intltz_from_date_time_zone(DateTimeZone $dateTimeZone)
{
}

/**
 * @param mixed $zoneId
 * @param mixed|null $isSystemID
 */
function intltz_get_canonical_id($zoneId, &$isSystemID = null)
{
}

/**
 * @param IntlTimeZone $timeZone
 * @param mixed|null $isDaylight
 * @param mixed|null $style
 * @param mixed|null $locale
 */
function intltz_get_display_name(IntlTimeZone $timeZone, $isDaylight = null, $style = null, $locale = null)
{
}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_get_dst_savings(IntlTimeZone $timeZone)
{
}

/**
 * @param mixed $zoneId
 * @param mixed $index
 */
function intltz_get_equivalent_id($zoneId, $index)
{
}

/**
 * Get last error code on the object
 *
 * @param IntlTimeZone $timeZone
 *
 * @return int
 *
 * @link http://www.php.net/manual/en/intltimezone.geterrorcode.php
 */
function intltz_get_error_code(IntlTimeZone $timeZone): int
{
}

/**
 * Get last error message on the object
 *
 * @param IntlTimeZone $timeZone
 *
 * @return string
 *
 * @link http://www.php.net/manual/en/intltimezone.geterrormessage.php
 */
function intltz_get_error_message(IntlTimeZone $timeZone): string
{
}

function intltz_get_gmt()
{
}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_get_id(IntlTimeZone $timeZone)
{
}

/**
 * @param IntlTimeZone $timeZone
 * @param mixed $date
 * @param mixed $local
 * @param mixed $rawOffset
 * @param mixed $dstOffset
 */
function intltz_get_offset(IntlTimeZone $timeZone, $date, $local, &$rawOffset, &$dstOffset)
{
}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_get_raw_offset(IntlTimeZone $timeZone)
{
}

/**
 * @param mixed $zoneId
 */
function intltz_get_region($zoneId)
{
}

function intltz_get_tz_data_version()
{
}

function intltz_get_unknown()
{
}

/**
 * @param IntlTimeZone $timeZone
 * @param IntlTimeZone|null $otherTimeZone
 */
function intltz_has_same_rules(IntlTimeZone $timeZone, IntlTimeZone $otherTimeZone = null)
{
}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_to_date_time_zone(IntlTimeZone $timeZone)
{
}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_use_daylight_time(IntlTimeZone $timeZone)
{
}

/**
 * Tries to find out best available locale based on HTTP "Accept-Language" header
 *
 * @param mixed $arg1
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.acceptfromhttp.php
 */
function locale_accept_from_http($arg1): string
{
}

/**
 * Canonicalize the locale string
 *
 * @param mixed $arg1
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.canonicalize.php
 */
function locale_canonicalize($arg1): string
{
}

/**
 * Returns a correctly ordered and delimited locale ID
 *
 * @param mixed $arg1
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.composelocale.php
 */
function locale_compose($arg1): string
{
}

/**
 * Checks if a language tag filter matches with locale
 *
 * @param mixed $langtag
 * @param mixed $locale
 * @param mixed|null $canonicalize
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.filtermatches.php
 */
function locale_filter_matches($langtag, $locale, $canonicalize = null): bool
{
}

/**
 * Gets the variants for the input locale
 *
 * @param mixed $arg1
 *
 * @return array
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getallvariants.php
 */
function locale_get_all_variants($arg1): array
{
}

/**
 * Gets the default locale value from the INTL global 'default_locale'
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getdefault.php
 */
function locale_get_default(): string
{
}

/**
 * Returns an appropriately localized display name for language of the inputlocale
 *
 * @param mixed $locale
 * @param mixed|null $in_locale
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getdisplaylanguage.php
 */
function locale_get_display_language($locale, $in_locale = null): string
{
}

/**
 * Returns an appropriately localized display name for the input locale
 *
 * @param mixed $locale
 * @param mixed|null $in_locale
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getdisplayname.php
 */
function locale_get_display_name($locale, $in_locale = null): string
{
}

/**
 * Returns an appropriately localized display name for region of the input locale
 *
 * @param mixed $locale
 * @param mixed|null $in_locale
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getdisplayregion.php
 */
function locale_get_display_region($locale, $in_locale = null): string
{
}

/**
 * Returns an appropriately localized display name for script of the input locale
 *
 * @param mixed $locale
 * @param mixed|null $in_locale
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getdisplayscript.php
 */
function locale_get_display_script($locale, $in_locale = null): string
{
}

/**
 * Returns an appropriately localized display name for variants of the input locale
 *
 * @param mixed $locale
 * @param mixed|null $in_locale
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getdisplayvariant.php
 */
function locale_get_display_variant($locale, $in_locale = null): string
{
}

/**
 * Gets the keywords for the input locale
 *
 * @param mixed $arg1
 *
 * @return array
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getkeywords.php
 */
function locale_get_keywords($arg1): array
{
}

/**
 * Gets the primary language for the input locale
 *
 * @param mixed $arg1
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getprimarylanguage.php
 */
function locale_get_primary_language($arg1): string
{
}

/**
 * Gets the region for the input locale
 *
 * @param mixed $arg1
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getregion.php
 */
function locale_get_region($arg1): string
{
}

/**
 * Gets the script for the input locale
 *
 * @param mixed $arg1
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getscript.php
 */
function locale_get_script($arg1): string
{
}

/**
 * Searches the language tag list for the best match to the language
 *
 * @param mixed $langtag
 * @param mixed $locale
 * @param mixed|null $canonicalize
 * @param mixed|null $def
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.lookup.php
 */
function locale_lookup($langtag, $locale, $canonicalize = null, $def = null): string
{
}

/**
 * Returns a key-value array of locale ID subtag elements
 *
 * @param mixed $arg1
 *
 * @return array
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.parselocale.php
 */
function locale_parse($arg1): array
{
}

/**
 * Sets the default runtime locale
 *
 * @param mixed $arg1
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.setdefault.php
 */
function locale_set_default($arg1): bool
{
}

/**
 * Constructs a new Message Formatter
 *
 * @param mixed $locale
 * @param mixed $pattern
 *
 * @return MessageFormatter
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/messageformatter.create.php
 */
function msgfmt_create($locale, $pattern): MessageFormatter
{
}

/**
 * Format the message
 *
 * @param mixed $nf
 * @param mixed $args
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/messageformatter.format.php
 */
function msgfmt_format($nf, $args): string
{
}

/**
 * Quick format message
 *
 * @param mixed $locale
 * @param mixed $pattern
 * @param mixed $args
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/messageformatter.formatmessage.php
 */
function msgfmt_format_message($locale, $pattern, $args): string
{
}

/**
 * Get the error code from last operation
 *
 * @param mixed $nf
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/messageformatter.geterrorcode.php
 */
function msgfmt_get_error_code($nf): int
{
}

/**
 * Get the error text from the last operation
 *
 * @param mixed $coll
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/messageformatter.geterrormessage.php
 */
function msgfmt_get_error_message($coll): string
{
}

/**
 * Get the locale for which the formatter was created
 *
 * @param mixed $mf
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/messageformatter.getlocale.php
 */
function msgfmt_get_locale($mf): string
{
}

/**
 * Get the pattern used by the formatter
 *
 * @param mixed $mf
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/messageformatter.getpattern.php
 */
function msgfmt_get_pattern($mf): string
{
}

/**
 * Parse input string according to pattern
 *
 * @param mixed $nf
 * @param mixed $source
 *
 * @return array
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/messageformatter.parse.php
 */
function msgfmt_parse($nf, $source): array
{
}

/**
 * Quick parse input string
 *
 * @param mixed $locale
 * @param mixed $pattern
 * @param mixed $source
 *
 * @return array
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/messageformatter.parsemessage.php
 */
function msgfmt_parse_message($locale, $pattern, $source): array
{
}

/**
 * Set the pattern used by the formatter
 *
 * @param mixed $mf
 * @param mixed $pattern
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/messageformatter.setpattern.php
 */
function msgfmt_set_pattern($mf, $pattern): bool
{
}

/**
 * Checks if the provided string is already in the specified normalization
 * form
 *
 * @param mixed $input
 * @param mixed|null $form
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/normalizer.isnormalized.php
 */
function normalizer_is_normalized($input, $form = null): bool
{
}

/**
 * Normalizes the input provided and returns the normalized string
 *
 * @param mixed $input
 * @param mixed|null $form
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/normalizer.normalize.php
 */
function normalizer_normalize($input, $form = null): string
{
}

/**
 * Create a number formatter
 *
 * @param mixed $locale
 * @param mixed $style
 * @param mixed|null $pattern
 *
 * @return NumberFormatter
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.create.php
 */
function numfmt_create($locale, $style, $pattern = null): NumberFormatter
{
}

/**
 * Format a number
 *
 * @param mixed $nf
 * @param mixed $num
 * @param mixed|null $type
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.format.php
 */
function numfmt_format($nf, $num, $type = null): string
{
}

/**
 * Format a currency value
 *
 * @param mixed $nf
 * @param mixed $num
 * @param mixed $currency
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.formatcurrency.php
 */
function numfmt_format_currency($nf, $num, $currency): string
{
}

/**
 * Get an attribute
 *
 * @param mixed $nf
 * @param mixed $attr
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.getattribute.php
 */
function numfmt_get_attribute($nf, $attr): int
{
}

/**
 * Get formatter's last error code
 *
 * @param mixed $nf
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.geterrorcode.php
 */
function numfmt_get_error_code($nf): int
{
}

/**
 * Get formatter's last error message
 *
 * @param mixed $nf
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.geterrormessage.php
 */
function numfmt_get_error_message($nf): string
{
}

/**
 * Get formatter locale
 *
 * @param mixed $nf
 * @param mixed|null $type
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.getlocale.php
 */
function numfmt_get_locale($nf, $type = null): string
{
}

/**
 * Get formatter pattern
 *
 * @param mixed $nf
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.getpattern.php
 */
function numfmt_get_pattern($nf): string
{
}

/**
 * Get a symbol value
 *
 * @param mixed $nf
 * @param mixed $attr
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.getsymbol.php
 */
function numfmt_get_symbol($nf, $attr): string
{
}

/**
 * Get a text attribute
 *
 * @param mixed $nf
 * @param mixed $attr
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.gettextattribute.php
 */
function numfmt_get_text_attribute($nf, $attr): string
{
}

/**
 * Parse a number
 *
 * @param mixed $formatter
 * @param mixed $string
 * @param mixed|null $type
 * @param mixed|null $position
 *
 * @return mixed
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.parse.php
 */
function numfmt_parse($formatter, $string, $type = null, &$position = null)
{
}

/**
 * Parse a currency number
 *
 * @param mixed $formatter
 * @param mixed $string
 * @param mixed $currency
 * @param mixed|null $position
 *
 * @return float
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.parsecurrency.php
 */
function numfmt_parse_currency($formatter, $string, &$currency, &$position = null): float
{
}

/**
 * Set an attribute
 *
 * @param mixed $nf
 * @param mixed $attr
 * @param mixed $value
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.setattribute.php
 */
function numfmt_set_attribute($nf, $attr, $value): bool
{
}

/**
 * Set formatter pattern
 *
 * @param mixed $nf
 * @param mixed $pattern
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.setpattern.php
 */
function numfmt_set_pattern($nf, $pattern): bool
{
}

/**
 * Set a symbol value
 *
 * @param mixed $nf
 * @param mixed $attr
 * @param mixed $symbol
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.setsymbol.php
 */
function numfmt_set_symbol($nf, $attr, $symbol): bool
{
}

/**
 * Set a text attribute
 *
 * @param mixed $nf
 * @param mixed $attr
 * @param mixed $value
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.settextattribute.php
 */
function numfmt_set_text_attribute($nf, $attr, $value): bool
{
}

/**
 * Get number of elements in the bundle
 *
 * @param mixed $bundle
 *
 * @return int
 *
 * @link http://www.php.net/manual/en/resourcebundle.count.php
 */
function resourcebundle_count($bundle): int
{
}

/**
 * Create a resource bundle
 *
 * @param mixed $locale
 * @param mixed $bundlename
 * @param mixed|null $fallback
 *
 * @return ResourceBundle
 *
 * @link http://www.php.net/manual/en/resourcebundle.create.php
 */
function resourcebundle_create($locale, $bundlename, $fallback = null): ResourceBundle
{
}

/**
 * Get data from the bundle
 *
 * @param mixed $bundle
 * @param mixed $index
 * @param mixed|null $fallback
 *
 * @return mixed
 *
 * @link http://www.php.net/manual/en/resourcebundle.get.php
 */
function resourcebundle_get($bundle, $index, $fallback = null)
{
}

/**
 * Get bundle's last error code
 *
 * @param mixed $bundle
 *
 * @return int
 *
 * @link http://www.php.net/manual/en/resourcebundle.geterrorcode.php
 */
function resourcebundle_get_error_code($bundle): int
{
}

/**
 * Get bundle's last error message
 *
 * @param mixed $bundle
 *
 * @return string
 *
 * @link http://www.php.net/manual/en/resourcebundle.geterrormessage.php
 */
function resourcebundle_get_error_message($bundle): string
{
}

/**
 * Get supported locales
 *
 * @param mixed $bundlename
 *
 * @return array
 *
 * @link http://www.php.net/manual/en/resourcebundle.locales.php
 */
function resourcebundle_locales($bundlename): array
{
}

/**
 * Create a transliterator
 *
 * @param mixed $id
 * @param mixed|null $direction
 *
 * @return Transliterator
 *
 * @link http://www.php.net/manual/en/transliterator.create.php
 */
function transliterator_create($id, $direction = null): Transliterator
{
}

/**
 * Create transliterator from rules
 *
 * @param mixed $rules
 * @param mixed|null $direction
 *
 * @return Transliterator
 *
 * @link http://www.php.net/manual/en/transliterator.createfromrules.php
 */
function transliterator_create_from_rules($rules, $direction = null): Transliterator
{
}

/**
 * Create an inverse transliterator
 *
 * @param Transliterator $orig_trans
 *
 * @return Transliterator
 *
 * @link http://www.php.net/manual/en/transliterator.createinverse.php
 */
function transliterator_create_inverse(Transliterator $orig_trans): Transliterator
{
}

/**
 * Get last error code
 *
 * @param Transliterator $trans
 *
 * @return int
 *
 * @link http://www.php.net/manual/en/transliterator.geterrorcode.php
 */
function transliterator_get_error_code(Transliterator $trans): int
{
}

/**
 * Get last error message
 *
 * @param Transliterator $trans
 *
 * @return string
 *
 * @link http://www.php.net/manual/en/transliterator.geterrormessage.php
 */
function transliterator_get_error_message(Transliterator $trans): string
{
}

/**
 * Get transliterator IDs
 *
 * @return array
 *
 * @link http://www.php.net/manual/en/transliterator.listids.php
 */
function transliterator_list_ids(): array
{
}

/**
 * Transliterate a string
 *
 * @param mixed $trans
 * @param mixed $subject
 * @param mixed|null $start
 * @param mixed|null $end
 *
 * @return string
 *
 * @link http://www.php.net/manual/en/transliterator.transliterate.php
 */
function transliterator_transliterate($trans, $subject, $start = null, $end = null): string
{
}
