<?php
// Start of extension: intl
// - parsed on POSIX with PHP 7.2.3 (extension version 1.1.0)
// - parsed on Windows with PHP 7.2.4 (extension version 1.1.0)

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
const INTL_ICU_DATA_VERSION = '57.1';

/**
 * @var string
 */
const INTL_ICU_VERSION = '57.1';

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
const U_REGEX_ERROR_LIMIT = 66326;

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
     * @var int
     */
    const ALTERNATE_HANDLING = 1;

    /**
     * @var int
     */
    const CASE_FIRST = 2;

    /**
     * @var int
     */
    const CASE_LEVEL = 3;

    /**
     * @var int
     */
    const DEFAULT_STRENGTH = 2;

    /**
     * @var int
     */
    const DEFAULT_VALUE = -1;

    /**
     * @var int
     */
    const FRENCH_COLLATION = 0;

    /**
     * @var int
     */
    const HIRAGANA_QUATERNARY_MODE = 6;

    /**
     * @var int
     */
    const IDENTICAL = 15;

    /**
     * @var int
     */
    const LOWER_FIRST = 24;

    /**
     * @var int
     */
    const NON_IGNORABLE = 21;

    /**
     * @var int
     */
    const NORMALIZATION_MODE = 4;

    /**
     * @var int
     */
    const NUMERIC_COLLATION = 7;

    /**
     * @var int
     */
    const OFF = 16;

    /**
     * @var int
     */
    const ON = 17;

    /**
     * @var int
     */
    const PRIMARY = 0;

    /**
     * @var int
     */
    const QUATERNARY = 3;

    /**
     * @var int
     */
    const SECONDARY = 1;

    /**
     * @var int
     */
    const SHIFTED = 20;

    /**
     * @var int
     */
    const SORT_NUMERIC = 2;

    /**
     * @var int
     */
    const SORT_REGULAR = 0;

    /**
     * @var int
     */
    const SORT_STRING = 1;

    /**
     * @var int
     */
    const STRENGTH = 5;

    /**
     * @var int
     */
    const TERTIARY = 2;

    /**
     * @var int
     */
    const UPPER_FIRST = 25;

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
     * @var int
     */
    const DONE = -1;

    /**
     * @var int
     */
    const LINE_HARD = 100;

    /**
     * @var int
     */
    const LINE_HARD_LIMIT = 200;

    /**
     * @var int
     */
    const LINE_SOFT = 0;

    /**
     * @var int
     */
    const LINE_SOFT_LIMIT = 100;

    /**
     * @var int
     */
    const SENTENCE_SEP = 100;

    /**
     * @var int
     */
    const SENTENCE_SEP_LIMIT = 200;

    /**
     * @var int
     */
    const SENTENCE_TERM = 0;

    /**
     * @var int
     */
    const SENTENCE_TERM_LIMIT = 100;

    /**
     * @var int
     */
    const WORD_IDEO = 400;

    /**
     * @var int
     */
    const WORD_IDEO_LIMIT = 500;

    /**
     * @var int
     */
    const WORD_KANA = 300;

    /**
     * @var int
     */
    const WORD_KANA_LIMIT = 400;

    /**
     * @var int
     */
    const WORD_LETTER = 200;

    /**
     * @var int
     */
    const WORD_LETTER_LIMIT = 300;

    /**
     * @var int
     */
    const WORD_NONE = 0;

    /**
     * @var int
     */
    const WORD_NONE_LIMIT = 100;

    /**
     * @var int
     */
    const WORD_NUMBER = 100;

    /**
     * @var int
     */
    const WORD_NUMBER_LIMIT = 200;

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
     * @var int
     */
    const DOW_FRIDAY = 6;

    /**
     * @var int
     */
    const DOW_MONDAY = 2;

    /**
     * @var int
     */
    const DOW_SATURDAY = 7;

    /**
     * @var int
     */
    const DOW_SUNDAY = 1;

    /**
     * @var int
     */
    const DOW_THURSDAY = 5;

    /**
     * @var int
     */
    const DOW_TUESDAY = 3;

    /**
     * @var int
     */
    const DOW_TYPE_WEEKDAY = 0;

    /**
     * @var int
     */
    const DOW_TYPE_WEEKEND = 1;

    /**
     * @var int
     */
    const DOW_TYPE_WEEKEND_CEASE = 3;

    /**
     * @var int
     */
    const DOW_TYPE_WEEKEND_OFFSET = 2;

    /**
     * @var int
     */
    const DOW_WEDNESDAY = 4;

    /**
     * @var int
     */
    const FIELD_AM_PM = 9;

    /**
     * @var int
     */
    const FIELD_DATE = 5;

    /**
     * @var int
     */
    const FIELD_DAY_OF_MONTH = 5;

    /**
     * @var int
     */
    const FIELD_DAY_OF_WEEK = 7;

    /**
     * @var int
     */
    const FIELD_DAY_OF_WEEK_IN_MONTH = 8;

    /**
     * @var int
     */
    const FIELD_DAY_OF_YEAR = 6;

    /**
     * @var int
     */
    const FIELD_DOW_LOCAL = 18;

    /**
     * @var int
     */
    const FIELD_DST_OFFSET = 16;

    /**
     * @var int
     */
    const FIELD_ERA = 0;

    /**
     * @var int
     */
    const FIELD_EXTENDED_YEAR = 19;

    /**
     * @var int
     */
    const FIELD_FIELD_COUNT = 23;

    /**
     * @var int
     */
    const FIELD_HOUR = 10;

    /**
     * @var int
     */
    const FIELD_HOUR_OF_DAY = 11;

    /**
     * @var int
     */
    const FIELD_IS_LEAP_MONTH = 22;

    /**
     * @var int
     */
    const FIELD_JULIAN_DAY = 20;

    /**
     * @var int
     */
    const FIELD_MILLISECOND = 14;

    /**
     * @var int
     */
    const FIELD_MILLISECONDS_IN_DAY = 21;

    /**
     * @var int
     */
    const FIELD_MINUTE = 12;

    /**
     * @var int
     */
    const FIELD_MONTH = 2;

    /**
     * @var int
     */
    const FIELD_SECOND = 13;

    /**
     * @var int
     */
    const FIELD_WEEK_OF_MONTH = 4;

    /**
     * @var int
     */
    const FIELD_WEEK_OF_YEAR = 3;

    /**
     * @var int
     */
    const FIELD_YEAR = 1;

    /**
     * @var int
     */
    const FIELD_YEAR_WOY = 17;

    /**
     * @var int
     */
    const FIELD_ZONE_OFFSET = 15;

    /**
     * @var int
     */
    const WALLTIME_FIRST = 1;

    /**
     * @var int
     */
    const WALLTIME_LAST = 0;

    /**
     * @var int
     */
    const WALLTIME_NEXT_VALID = 2;

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
     * @var int
     */
    const BLOCK_CODE_AEGEAN_NUMBERS = 119;

    /**
     * @var int
     */
    const BLOCK_CODE_ALCHEMICAL_SYMBOLS = 208;

    /**
     * @var int
     */
    const BLOCK_CODE_ALPHABETIC_PRESENTATION_FORMS = 80;

    /**
     * @var int
     */
    const BLOCK_CODE_ANCIENT_GREEK_MUSICAL_NOTATION = 126;

    /**
     * @var int
     */
    const BLOCK_CODE_ANCIENT_GREEK_NUMBERS = 127;

    /**
     * @var int
     */
    const BLOCK_CODE_ANCIENT_SYMBOLS = 165;

    /**
     * @var int
     */
    const BLOCK_CODE_ARABIC = 12;

    /**
     * @var int
     */
    const BLOCK_CODE_ARABIC_EXTENDED_A = 210;

    /**
     * @var int
     */
    const BLOCK_CODE_ARABIC_MATHEMATICAL_ALPHABETIC_SYMBOLS = 211;

    /**
     * @var int
     */
    const BLOCK_CODE_ARABIC_PRESENTATION_FORMS_A = 81;

    /**
     * @var int
     */
    const BLOCK_CODE_ARABIC_PRESENTATION_FORMS_B = 85;

    /**
     * @var int
     */
    const BLOCK_CODE_ARABIC_SUPPLEMENT = 128;

    /**
     * @var int
     */
    const BLOCK_CODE_ARMENIAN = 10;

    /**
     * @var int
     */
    const BLOCK_CODE_ARROWS = 46;

    /**
     * @var int
     */
    const BLOCK_CODE_AVESTAN = 188;

    /**
     * @var int
     */
    const BLOCK_CODE_BALINESE = 147;

    /**
     * @var int
     */
    const BLOCK_CODE_BAMUM = 177;

    /**
     * @var int
     */
    const BLOCK_CODE_BAMUM_SUPPLEMENT = 202;

    /**
     * @var int
     */
    const BLOCK_CODE_BASIC_LATIN = 1;

    /**
     * @var int
     */
    const BLOCK_CODE_BASSA_VAH = 221;

    /**
     * @var int
     */
    const BLOCK_CODE_BATAK = 199;

    /**
     * @var int
     */
    const BLOCK_CODE_BENGALI = 16;

    /**
     * @var int
     */
    const BLOCK_CODE_BLOCK_ELEMENTS = 53;

    /**
     * @var int
     */
    const BLOCK_CODE_BOPOMOFO = 64;

    /**
     * @var int
     */
    const BLOCK_CODE_BOPOMOFO_EXTENDED = 67;

    /**
     * @var int
     */
    const BLOCK_CODE_BOX_DRAWING = 52;

    /**
     * @var int
     */
    const BLOCK_CODE_BRAHMI = 201;

    /**
     * @var int
     */
    const BLOCK_CODE_BRAILLE_PATTERNS = 57;

    /**
     * @var int
     */
    const BLOCK_CODE_BUGINESE = 129;

    /**
     * @var int
     */
    const BLOCK_CODE_BUHID = 100;

    /**
     * @var int
     */
    const BLOCK_CODE_BYZANTINE_MUSICAL_SYMBOLS = 91;

    /**
     * @var int
     */
    const BLOCK_CODE_CARIAN = 168;

    /**
     * @var int
     */
    const BLOCK_CODE_CAUCASIAN_ALBANIAN = 222;

    /**
     * @var int
     */
    const BLOCK_CODE_CHAKMA = 212;

    /**
     * @var int
     */
    const BLOCK_CODE_CHAM = 164;

    /**
     * @var int
     */
    const BLOCK_CODE_CHEROKEE = 32;

    /**
     * @var int
     */
    const BLOCK_CODE_CJK_COMPATIBILITY = 69;

    /**
     * @var int
     */
    const BLOCK_CODE_CJK_COMPATIBILITY_FORMS = 83;

    /**
     * @var int
     */
    const BLOCK_CODE_CJK_COMPATIBILITY_IDEOGRAPHS = 79;

    /**
     * @var int
     */
    const BLOCK_CODE_CJK_COMPATIBILITY_IDEOGRAPHS_SUPPLEMENT = 95;

    /**
     * @var int
     */
    const BLOCK_CODE_CJK_RADICALS_SUPPLEMENT = 58;

    /**
     * @var int
     */
    const BLOCK_CODE_CJK_STROKES = 130;

    /**
     * @var int
     */
    const BLOCK_CODE_CJK_SYMBOLS_AND_PUNCTUATION = 61;

    /**
     * @var int
     */
    const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS = 71;

    /**
     * @var int
     */
    const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_A = 70;

    /**
     * @var int
     */
    const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_B = 94;

    /**
     * @var int
     */
    const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_C = 197;

    /**
     * @var int
     */
    const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_D = 209;

    /**
     * @var int
     */
    const BLOCK_CODE_COMBINING_DIACRITICAL_MARKS = 7;

    /**
     * @var int
     */
    const BLOCK_CODE_COMBINING_DIACRITICAL_MARKS_EXTENDED = 224;

    /**
     * @var int
     */
    const BLOCK_CODE_COMBINING_DIACRITICAL_MARKS_SUPPLEMENT = 131;

    /**
     * @var int
     */
    const BLOCK_CODE_COMBINING_HALF_MARKS = 82;

    /**
     * @var int
     */
    const BLOCK_CODE_COMBINING_MARKS_FOR_SYMBOLS = 43;

    /**
     * @var int
     */
    const BLOCK_CODE_COMMON_INDIC_NUMBER_FORMS = 178;

    /**
     * @var int
     */
    const BLOCK_CODE_CONTROL_PICTURES = 49;

    /**
     * @var int
     */
    const BLOCK_CODE_COPTIC = 132;

    /**
     * @var int
     */
    const BLOCK_CODE_COPTIC_EPACT_NUMBERS = 223;

    /**
     * @var int
     */
    const BLOCK_CODE_COUNT = 263;

    /**
     * @var int
     */
    const BLOCK_CODE_COUNTING_ROD_NUMERALS = 154;

    /**
     * @var int
     */
    const BLOCK_CODE_CUNEIFORM = 152;

    /**
     * @var int
     */
    const BLOCK_CODE_CUNEIFORM_NUMBERS_AND_PUNCTUATION = 153;

    /**
     * @var int
     */
    const BLOCK_CODE_CURRENCY_SYMBOLS = 42;

    /**
     * @var int
     */
    const BLOCK_CODE_CYPRIOT_SYLLABARY = 123;

    /**
     * @var int
     */
    const BLOCK_CODE_CYRILLIC = 9;

    /**
     * @var int
     */
    const BLOCK_CODE_CYRILLIC_EXTENDED_A = 158;

    /**
     * @var int
     */
    const BLOCK_CODE_CYRILLIC_EXTENDED_B = 160;

    /**
     * @var int
     */
    const BLOCK_CODE_CYRILLIC_SUPPLEMENT = 97;

    /**
     * @var int
     */
    const BLOCK_CODE_CYRILLIC_SUPPLEMENTARY = 97;

    /**
     * @var int
     */
    const BLOCK_CODE_DESERET = 90;

    /**
     * @var int
     */
    const BLOCK_CODE_DEVANAGARI = 15;

    /**
     * @var int
     */
    const BLOCK_CODE_DEVANAGARI_EXTENDED = 179;

    /**
     * @var int
     */
    const BLOCK_CODE_DINGBATS = 56;

    /**
     * @var int
     */
    const BLOCK_CODE_DOMINO_TILES = 171;

    /**
     * @var int
     */
    const BLOCK_CODE_DUPLOYAN = 225;

    /**
     * @var int
     */
    const BLOCK_CODE_EGYPTIAN_HIEROGLYPHS = 194;

    /**
     * @var int
     */
    const BLOCK_CODE_ELBASAN = 226;

    /**
     * @var int
     */
    const BLOCK_CODE_EMOTICONS = 206;

    /**
     * @var int
     */
    const BLOCK_CODE_ENCLOSED_ALPHANUMERIC_SUPPLEMENT = 195;

    /**
     * @var int
     */
    const BLOCK_CODE_ENCLOSED_ALPHANUMERICS = 51;

    /**
     * @var int
     */
    const BLOCK_CODE_ENCLOSED_CJK_LETTERS_AND_MONTHS = 68;

    /**
     * @var int
     */
    const BLOCK_CODE_ENCLOSED_IDEOGRAPHIC_SUPPLEMENT = 196;

    /**
     * @var int
     */
    const BLOCK_CODE_ETHIOPIC = 31;

    /**
     * @var int
     */
    const BLOCK_CODE_ETHIOPIC_EXTENDED = 133;

    /**
     * @var int
     */
    const BLOCK_CODE_ETHIOPIC_EXTENDED_A = 200;

    /**
     * @var int
     */
    const BLOCK_CODE_ETHIOPIC_SUPPLEMENT = 134;

    /**
     * @var int
     */
    const BLOCK_CODE_GENERAL_PUNCTUATION = 40;

    /**
     * @var int
     */
    const BLOCK_CODE_GEOMETRIC_SHAPES = 54;

    /**
     * @var int
     */
    const BLOCK_CODE_GEOMETRIC_SHAPES_EXTENDED = 227;

    /**
     * @var int
     */
    const BLOCK_CODE_GEORGIAN = 29;

    /**
     * @var int
     */
    const BLOCK_CODE_GEORGIAN_SUPPLEMENT = 135;

    /**
     * @var int
     */
    const BLOCK_CODE_GLAGOLITIC = 136;

    /**
     * @var int
     */
    const BLOCK_CODE_GOTHIC = 89;

    /**
     * @var int
     */
    const BLOCK_CODE_GRANTHA = 228;

    /**
     * @var int
     */
    const BLOCK_CODE_GREEK = 8;

    /**
     * @var int
     */
    const BLOCK_CODE_GREEK_EXTENDED = 39;

    /**
     * @var int
     */
    const BLOCK_CODE_GUJARATI = 18;

    /**
     * @var int
     */
    const BLOCK_CODE_GURMUKHI = 17;

    /**
     * @var int
     */
    const BLOCK_CODE_HALFWIDTH_AND_FULLWIDTH_FORMS = 87;

    /**
     * @var int
     */
    const BLOCK_CODE_HANGUL_COMPATIBILITY_JAMO = 65;

    /**
     * @var int
     */
    const BLOCK_CODE_HANGUL_JAMO = 30;

    /**
     * @var int
     */
    const BLOCK_CODE_HANGUL_JAMO_EXTENDED_A = 180;

    /**
     * @var int
     */
    const BLOCK_CODE_HANGUL_JAMO_EXTENDED_B = 185;

    /**
     * @var int
     */
    const BLOCK_CODE_HANGUL_SYLLABLES = 74;

    /**
     * @var int
     */
    const BLOCK_CODE_HANUNOO = 99;

    /**
     * @var int
     */
    const BLOCK_CODE_HEBREW = 11;

    /**
     * @var int
     */
    const BLOCK_CODE_HIGH_PRIVATE_USE_SURROGATES = 76;

    /**
     * @var int
     */
    const BLOCK_CODE_HIGH_SURROGATES = 75;

    /**
     * @var int
     */
    const BLOCK_CODE_HIRAGANA = 62;

    /**
     * @var int
     */
    const BLOCK_CODE_IDEOGRAPHIC_DESCRIPTION_CHARACTERS = 60;

    /**
     * @var int
     */
    const BLOCK_CODE_IMPERIAL_ARAMAIC = 186;

    /**
     * @var int
     */
    const BLOCK_CODE_INSCRIPTIONAL_PAHLAVI = 190;

    /**
     * @var int
     */
    const BLOCK_CODE_INSCRIPTIONAL_PARTHIAN = 189;

    /**
     * @var int
     */
    const BLOCK_CODE_INVALID_CODE = -1;

    /**
     * @var int
     */
    const BLOCK_CODE_IPA_EXTENSIONS = 5;

    /**
     * @var int
     */
    const BLOCK_CODE_JAVANESE = 181;

    /**
     * @var int
     */
    const BLOCK_CODE_KAITHI = 193;

    /**
     * @var int
     */
    const BLOCK_CODE_KANA_SUPPLEMENT = 203;

    /**
     * @var int
     */
    const BLOCK_CODE_KANBUN = 66;

    /**
     * @var int
     */
    const BLOCK_CODE_KANGXI_RADICALS = 59;

    /**
     * @var int
     */
    const BLOCK_CODE_KANNADA = 22;

    /**
     * @var int
     */
    const BLOCK_CODE_KATAKANA = 63;

    /**
     * @var int
     */
    const BLOCK_CODE_KATAKANA_PHONETIC_EXTENSIONS = 107;

    /**
     * @var int
     */
    const BLOCK_CODE_KAYAH_LI = 162;

    /**
     * @var int
     */
    const BLOCK_CODE_KHAROSHTHI = 137;

    /**
     * @var int
     */
    const BLOCK_CODE_KHMER = 36;

    /**
     * @var int
     */
    const BLOCK_CODE_KHMER_SYMBOLS = 113;

    /**
     * @var int
     */
    const BLOCK_CODE_KHOJKI = 229;

    /**
     * @var int
     */
    const BLOCK_CODE_KHUDAWADI = 230;

    /**
     * @var int
     */
    const BLOCK_CODE_LAO = 26;

    /**
     * @var int
     */
    const BLOCK_CODE_LATIN_1_SUPPLEMENT = 2;

    /**
     * @var int
     */
    const BLOCK_CODE_LATIN_EXTENDED_A = 3;

    /**
     * @var int
     */
    const BLOCK_CODE_LATIN_EXTENDED_ADDITIONAL = 38;

    /**
     * @var int
     */
    const BLOCK_CODE_LATIN_EXTENDED_B = 4;

    /**
     * @var int
     */
    const BLOCK_CODE_LATIN_EXTENDED_C = 148;

    /**
     * @var int
     */
    const BLOCK_CODE_LATIN_EXTENDED_D = 149;

    /**
     * @var int
     */
    const BLOCK_CODE_LATIN_EXTENDED_E = 231;

    /**
     * @var int
     */
    const BLOCK_CODE_LEPCHA = 156;

    /**
     * @var int
     */
    const BLOCK_CODE_LETTERLIKE_SYMBOLS = 44;

    /**
     * @var int
     */
    const BLOCK_CODE_LIMBU = 111;

    /**
     * @var int
     */
    const BLOCK_CODE_LINEAR_A = 232;

    /**
     * @var int
     */
    const BLOCK_CODE_LINEAR_B_IDEOGRAMS = 118;

    /**
     * @var int
     */
    const BLOCK_CODE_LINEAR_B_SYLLABARY = 117;

    /**
     * @var int
     */
    const BLOCK_CODE_LISU = 176;

    /**
     * @var int
     */
    const BLOCK_CODE_LOW_SURROGATES = 77;

    /**
     * @var int
     */
    const BLOCK_CODE_LYCIAN = 167;

    /**
     * @var int
     */
    const BLOCK_CODE_LYDIAN = 169;

    /**
     * @var int
     */
    const BLOCK_CODE_MAHAJANI = 233;

    /**
     * @var int
     */
    const BLOCK_CODE_MAHJONG_TILES = 170;

    /**
     * @var int
     */
    const BLOCK_CODE_MALAYALAM = 23;

    /**
     * @var int
     */
    const BLOCK_CODE_MANDAIC = 198;

    /**
     * @var int
     */
    const BLOCK_CODE_MANICHAEAN = 234;

    /**
     * @var int
     */
    const BLOCK_CODE_MATHEMATICAL_ALPHANUMERIC_SYMBOLS = 93;

    /**
     * @var int
     */
    const BLOCK_CODE_MATHEMATICAL_OPERATORS = 47;

    /**
     * @var int
     */
    const BLOCK_CODE_MEETEI_MAYEK = 184;

    /**
     * @var int
     */
    const BLOCK_CODE_MEETEI_MAYEK_EXTENSIONS = 213;

    /**
     * @var int
     */
    const BLOCK_CODE_MENDE_KIKAKUI = 235;

    /**
     * @var int
     */
    const BLOCK_CODE_MEROITIC_CURSIVE = 214;

    /**
     * @var int
     */
    const BLOCK_CODE_MEROITIC_HIEROGLYPHS = 215;

    /**
     * @var int
     */
    const BLOCK_CODE_MIAO = 216;

    /**
     * @var int
     */
    const BLOCK_CODE_MISCELLANEOUS_MATHEMATICAL_SYMBOLS_A = 102;

    /**
     * @var int
     */
    const BLOCK_CODE_MISCELLANEOUS_MATHEMATICAL_SYMBOLS_B = 105;

    /**
     * @var int
     */
    const BLOCK_CODE_MISCELLANEOUS_SYMBOLS = 55;

    /**
     * @var int
     */
    const BLOCK_CODE_MISCELLANEOUS_SYMBOLS_AND_ARROWS = 115;

    /**
     * @var int
     */
    const BLOCK_CODE_MISCELLANEOUS_SYMBOLS_AND_PICTOGRAPHS = 205;

    /**
     * @var int
     */
    const BLOCK_CODE_MISCELLANEOUS_TECHNICAL = 48;

    /**
     * @var int
     */
    const BLOCK_CODE_MODI = 236;

    /**
     * @var int
     */
    const BLOCK_CODE_MODIFIER_TONE_LETTERS = 138;

    /**
     * @var int
     */
    const BLOCK_CODE_MONGOLIAN = 37;

    /**
     * @var int
     */
    const BLOCK_CODE_MRO = 237;

    /**
     * @var int
     */
    const BLOCK_CODE_MUSICAL_SYMBOLS = 92;

    /**
     * @var int
     */
    const BLOCK_CODE_MYANMAR = 28;

    /**
     * @var int
     */
    const BLOCK_CODE_MYANMAR_EXTENDED_A = 182;

    /**
     * @var int
     */
    const BLOCK_CODE_MYANMAR_EXTENDED_B = 238;

    /**
     * @var int
     */
    const BLOCK_CODE_NABATAEAN = 239;

    /**
     * @var int
     */
    const BLOCK_CODE_NEW_TAI_LUE = 139;

    /**
     * @var int
     */
    const BLOCK_CODE_NKO = 146;

    /**
     * @var int
     */
    const BLOCK_CODE_NO_BLOCK = 0;

    /**
     * @var int
     */
    const BLOCK_CODE_NUMBER_FORMS = 45;

    /**
     * @var int
     */
    const BLOCK_CODE_OGHAM = 34;

    /**
     * @var int
     */
    const BLOCK_CODE_OL_CHIKI = 157;

    /**
     * @var int
     */
    const BLOCK_CODE_OLD_ITALIC = 88;

    /**
     * @var int
     */
    const BLOCK_CODE_OLD_NORTH_ARABIAN = 240;

    /**
     * @var int
     */
    const BLOCK_CODE_OLD_PERMIC = 241;

    /**
     * @var int
     */
    const BLOCK_CODE_OLD_PERSIAN = 140;

    /**
     * @var int
     */
    const BLOCK_CODE_OLD_SOUTH_ARABIAN = 187;

    /**
     * @var int
     */
    const BLOCK_CODE_OLD_TURKIC = 191;

    /**
     * @var int
     */
    const BLOCK_CODE_OPTICAL_CHARACTER_RECOGNITION = 50;

    /**
     * @var int
     */
    const BLOCK_CODE_ORIYA = 19;

    /**
     * @var int
     */
    const BLOCK_CODE_ORNAMENTAL_DINGBATS = 242;

    /**
     * @var int
     */
    const BLOCK_CODE_OSMANYA = 122;

    /**
     * @var int
     */
    const BLOCK_CODE_PAHAWH_HMONG = 243;

    /**
     * @var int
     */
    const BLOCK_CODE_PALMYRENE = 244;

    /**
     * @var int
     */
    const BLOCK_CODE_PAU_CIN_HAU = 245;

    /**
     * @var int
     */
    const BLOCK_CODE_PHAGS_PA = 150;

    /**
     * @var int
     */
    const BLOCK_CODE_PHAISTOS_DISC = 166;

    /**
     * @var int
     */
    const BLOCK_CODE_PHOENICIAN = 151;

    /**
     * @var int
     */
    const BLOCK_CODE_PHONETIC_EXTENSIONS = 114;

    /**
     * @var int
     */
    const BLOCK_CODE_PHONETIC_EXTENSIONS_SUPPLEMENT = 141;

    /**
     * @var int
     */
    const BLOCK_CODE_PLAYING_CARDS = 204;

    /**
     * @var int
     */
    const BLOCK_CODE_PRIVATE_USE = 78;

    /**
     * @var int
     */
    const BLOCK_CODE_PRIVATE_USE_AREA = 78;

    /**
     * @var int
     */
    const BLOCK_CODE_PSALTER_PAHLAVI = 246;

    /**
     * @var int
     */
    const BLOCK_CODE_REJANG = 163;

    /**
     * @var int
     */
    const BLOCK_CODE_RUMI_NUMERAL_SYMBOLS = 192;

    /**
     * @var int
     */
    const BLOCK_CODE_RUNIC = 35;

    /**
     * @var int
     */
    const BLOCK_CODE_SAMARITAN = 172;

    /**
     * @var int
     */
    const BLOCK_CODE_SAURASHTRA = 161;

    /**
     * @var int
     */
    const BLOCK_CODE_SHARADA = 217;

    /**
     * @var int
     */
    const BLOCK_CODE_SHAVIAN = 121;

    /**
     * @var int
     */
    const BLOCK_CODE_SHORTHAND_FORMAT_CONTROLS = 247;

    /**
     * @var int
     */
    const BLOCK_CODE_SIDDHAM = 248;

    /**
     * @var int
     */
    const BLOCK_CODE_SINHALA = 24;

    /**
     * @var int
     */
    const BLOCK_CODE_SINHALA_ARCHAIC_NUMBERS = 249;

    /**
     * @var int
     */
    const BLOCK_CODE_SMALL_FORM_VARIANTS = 84;

    /**
     * @var int
     */
    const BLOCK_CODE_SORA_SOMPENG = 218;

    /**
     * @var int
     */
    const BLOCK_CODE_SPACING_MODIFIER_LETTERS = 6;

    /**
     * @var int
     */
    const BLOCK_CODE_SPECIALS = 86;

    /**
     * @var int
     */
    const BLOCK_CODE_SUNDANESE = 155;

    /**
     * @var int
     */
    const BLOCK_CODE_SUNDANESE_SUPPLEMENT = 219;

    /**
     * @var int
     */
    const BLOCK_CODE_SUPERSCRIPTS_AND_SUBSCRIPTS = 41;

    /**
     * @var int
     */
    const BLOCK_CODE_SUPPLEMENTAL_ARROWS_A = 103;

    /**
     * @var int
     */
    const BLOCK_CODE_SUPPLEMENTAL_ARROWS_B = 104;

    /**
     * @var int
     */
    const BLOCK_CODE_SUPPLEMENTAL_ARROWS_C = 250;

    /**
     * @var int
     */
    const BLOCK_CODE_SUPPLEMENTAL_MATHEMATICAL_OPERATORS = 106;

    /**
     * @var int
     */
    const BLOCK_CODE_SUPPLEMENTAL_PUNCTUATION = 142;

    /**
     * @var int
     */
    const BLOCK_CODE_SUPPLEMENTARY_PRIVATE_USE_AREA_A = 109;

    /**
     * @var int
     */
    const BLOCK_CODE_SUPPLEMENTARY_PRIVATE_USE_AREA_B = 110;

    /**
     * @var int
     */
    const BLOCK_CODE_SYLOTI_NAGRI = 143;

    /**
     * @var int
     */
    const BLOCK_CODE_SYRIAC = 13;

    /**
     * @var int
     */
    const BLOCK_CODE_TAGALOG = 98;

    /**
     * @var int
     */
    const BLOCK_CODE_TAGBANWA = 101;

    /**
     * @var int
     */
    const BLOCK_CODE_TAGS = 96;

    /**
     * @var int
     */
    const BLOCK_CODE_TAI_LE = 112;

    /**
     * @var int
     */
    const BLOCK_CODE_TAI_THAM = 174;

    /**
     * @var int
     */
    const BLOCK_CODE_TAI_VIET = 183;

    /**
     * @var int
     */
    const BLOCK_CODE_TAI_XUAN_JING_SYMBOLS = 124;

    /**
     * @var int
     */
    const BLOCK_CODE_TAKRI = 220;

    /**
     * @var int
     */
    const BLOCK_CODE_TAMIL = 20;

    /**
     * @var int
     */
    const BLOCK_CODE_TELUGU = 21;

    /**
     * @var int
     */
    const BLOCK_CODE_THAANA = 14;

    /**
     * @var int
     */
    const BLOCK_CODE_THAI = 25;

    /**
     * @var int
     */
    const BLOCK_CODE_TIBETAN = 27;

    /**
     * @var int
     */
    const BLOCK_CODE_TIFINAGH = 144;

    /**
     * @var int
     */
    const BLOCK_CODE_TIRHUTA = 251;

    /**
     * @var int
     */
    const BLOCK_CODE_TRANSPORT_AND_MAP_SYMBOLS = 207;

    /**
     * @var int
     */
    const BLOCK_CODE_UGARITIC = 120;

    /**
     * @var int
     */
    const BLOCK_CODE_UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS = 33;

    /**
     * @var int
     */
    const BLOCK_CODE_UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS_EXTENDED = 173;

    /**
     * @var int
     */
    const BLOCK_CODE_VAI = 159;

    /**
     * @var int
     */
    const BLOCK_CODE_VARIATION_SELECTORS = 108;

    /**
     * @var int
     */
    const BLOCK_CODE_VARIATION_SELECTORS_SUPPLEMENT = 125;

    /**
     * @var int
     */
    const BLOCK_CODE_VEDIC_EXTENSIONS = 175;

    /**
     * @var int
     */
    const BLOCK_CODE_VERTICAL_FORMS = 145;

    /**
     * @var int
     */
    const BLOCK_CODE_WARANG_CITI = 252;

    /**
     * @var int
     */
    const BLOCK_CODE_YI_RADICALS = 73;

    /**
     * @var int
     */
    const BLOCK_CODE_YI_SYLLABLES = 72;

    /**
     * @var int
     */
    const BLOCK_CODE_YIJING_HEXAGRAM_SYMBOLS = 116;

    /**
     * @var int
     */
    const BPT_CLOSE = 2;

    /**
     * @var int
     */
    const BPT_COUNT = 3;

    /**
     * @var int
     */
    const BPT_NONE = 0;

    /**
     * @var int
     */
    const BPT_OPEN = 1;

    /**
     * @var int
     */
    const CHAR_CATEGORY_CHAR_CATEGORY_COUNT = 30;

    /**
     * @var int
     */
    const CHAR_CATEGORY_COMBINING_SPACING_MARK = 8;

    /**
     * @var int
     */
    const CHAR_CATEGORY_CONNECTOR_PUNCTUATION = 22;

    /**
     * @var int
     */
    const CHAR_CATEGORY_CONTROL_CHAR = 15;

    /**
     * @var int
     */
    const CHAR_CATEGORY_CURRENCY_SYMBOL = 25;

    /**
     * @var int
     */
    const CHAR_CATEGORY_DASH_PUNCTUATION = 19;

    /**
     * @var int
     */
    const CHAR_CATEGORY_DECIMAL_DIGIT_NUMBER = 9;

    /**
     * @var int
     */
    const CHAR_CATEGORY_ENCLOSING_MARK = 7;

    /**
     * @var int
     */
    const CHAR_CATEGORY_END_PUNCTUATION = 21;

    /**
     * @var int
     */
    const CHAR_CATEGORY_FINAL_PUNCTUATION = 29;

    /**
     * @var int
     */
    const CHAR_CATEGORY_FORMAT_CHAR = 16;

    /**
     * @var int
     */
    const CHAR_CATEGORY_GENERAL_OTHER_TYPES = 0;

    /**
     * @var int
     */
    const CHAR_CATEGORY_INITIAL_PUNCTUATION = 28;

    /**
     * @var int
     */
    const CHAR_CATEGORY_LETTER_NUMBER = 10;

    /**
     * @var int
     */
    const CHAR_CATEGORY_LINE_SEPARATOR = 13;

    /**
     * @var int
     */
    const CHAR_CATEGORY_LOWERCASE_LETTER = 2;

    /**
     * @var int
     */
    const CHAR_CATEGORY_MATH_SYMBOL = 24;

    /**
     * @var int
     */
    const CHAR_CATEGORY_MODIFIER_LETTER = 4;

    /**
     * @var int
     */
    const CHAR_CATEGORY_MODIFIER_SYMBOL = 26;

    /**
     * @var int
     */
    const CHAR_CATEGORY_NON_SPACING_MARK = 6;

    /**
     * @var int
     */
    const CHAR_CATEGORY_OTHER_LETTER = 5;

    /**
     * @var int
     */
    const CHAR_CATEGORY_OTHER_NUMBER = 11;

    /**
     * @var int
     */
    const CHAR_CATEGORY_OTHER_PUNCTUATION = 23;

    /**
     * @var int
     */
    const CHAR_CATEGORY_OTHER_SYMBOL = 27;

    /**
     * @var int
     */
    const CHAR_CATEGORY_PARAGRAPH_SEPARATOR = 14;

    /**
     * @var int
     */
    const CHAR_CATEGORY_PRIVATE_USE_CHAR = 17;

    /**
     * @var int
     */
    const CHAR_CATEGORY_SPACE_SEPARATOR = 12;

    /**
     * @var int
     */
    const CHAR_CATEGORY_START_PUNCTUATION = 20;

    /**
     * @var int
     */
    const CHAR_CATEGORY_SURROGATE = 18;

    /**
     * @var int
     */
    const CHAR_CATEGORY_TITLECASE_LETTER = 3;

    /**
     * @var int
     */
    const CHAR_CATEGORY_UNASSIGNED = 0;

    /**
     * @var int
     */
    const CHAR_CATEGORY_UPPERCASE_LETTER = 1;

    /**
     * @var int
     */
    const CHAR_DIRECTION_ARABIC_NUMBER = 5;

    /**
     * @var int
     */
    const CHAR_DIRECTION_BLOCK_SEPARATOR = 7;

    /**
     * @var int
     */
    const CHAR_DIRECTION_BOUNDARY_NEUTRAL = 18;

    /**
     * @var int
     */
    const CHAR_DIRECTION_CHAR_DIRECTION_COUNT = 23;

    /**
     * @var int
     */
    const CHAR_DIRECTION_COMMON_NUMBER_SEPARATOR = 6;

    /**
     * @var int
     */
    const CHAR_DIRECTION_DIR_NON_SPACING_MARK = 17;

    /**
     * @var int
     */
    const CHAR_DIRECTION_EUROPEAN_NUMBER = 2;

    /**
     * @var int
     */
    const CHAR_DIRECTION_EUROPEAN_NUMBER_SEPARATOR = 3;

    /**
     * @var int
     */
    const CHAR_DIRECTION_EUROPEAN_NUMBER_TERMINATOR = 4;

    /**
     * @var int
     */
    const CHAR_DIRECTION_FIRST_STRONG_ISOLATE = 19;

    /**
     * @var int
     */
    const CHAR_DIRECTION_LEFT_TO_RIGHT = 0;

    /**
     * @var int
     */
    const CHAR_DIRECTION_LEFT_TO_RIGHT_EMBEDDING = 11;

    /**
     * @var int
     */
    const CHAR_DIRECTION_LEFT_TO_RIGHT_ISOLATE = 20;

    /**
     * @var int
     */
    const CHAR_DIRECTION_LEFT_TO_RIGHT_OVERRIDE = 12;

    /**
     * @var int
     */
    const CHAR_DIRECTION_OTHER_NEUTRAL = 10;

    /**
     * @var int
     */
    const CHAR_DIRECTION_POP_DIRECTIONAL_FORMAT = 16;

    /**
     * @var int
     */
    const CHAR_DIRECTION_POP_DIRECTIONAL_ISOLATE = 22;

    /**
     * @var int
     */
    const CHAR_DIRECTION_RIGHT_TO_LEFT = 1;

    /**
     * @var int
     */
    const CHAR_DIRECTION_RIGHT_TO_LEFT_ARABIC = 13;

    /**
     * @var int
     */
    const CHAR_DIRECTION_RIGHT_TO_LEFT_EMBEDDING = 14;

    /**
     * @var int
     */
    const CHAR_DIRECTION_RIGHT_TO_LEFT_ISOLATE = 21;

    /**
     * @var int
     */
    const CHAR_DIRECTION_RIGHT_TO_LEFT_OVERRIDE = 15;

    /**
     * @var int
     */
    const CHAR_DIRECTION_SEGMENT_SEPARATOR = 8;

    /**
     * @var int
     */
    const CHAR_DIRECTION_WHITE_SPACE_NEUTRAL = 9;

    /**
     * @var int
     */
    const CHAR_NAME_ALIAS = 3;

    /**
     * @var int
     */
    const CHAR_NAME_CHOICE_COUNT = 4;

    /**
     * @var int
     */
    const CODEPOINT_MAX = 1114111;

    /**
     * @var int
     */
    const CODEPOINT_MIN = 0;

    /**
     * @var int
     */
    const DT_CANONICAL = 1;

    /**
     * @var int
     */
    const DT_CIRCLE = 3;

    /**
     * @var int
     */
    const DT_COMPAT = 2;

    /**
     * @var int
     */
    const DT_COUNT = 18;

    /**
     * @var int
     */
    const DT_FINAL = 4;

    /**
     * @var int
     */
    const DT_FONT = 5;

    /**
     * @var int
     */
    const DT_FRACTION = 6;

    /**
     * @var int
     */
    const DT_INITIAL = 7;

    /**
     * @var int
     */
    const DT_ISOLATED = 8;

    /**
     * @var int
     */
    const DT_MEDIAL = 9;

    /**
     * @var int
     */
    const DT_NARROW = 10;

    /**
     * @var int
     */
    const DT_NOBREAK = 11;

    /**
     * @var int
     */
    const DT_NONE = 0;

    /**
     * @var int
     */
    const DT_SMALL = 12;

    /**
     * @var int
     */
    const DT_SQUARE = 13;

    /**
     * @var int
     */
    const DT_SUB = 14;

    /**
     * @var int
     */
    const DT_SUPER = 15;

    /**
     * @var int
     */
    const DT_VERTICAL = 16;

    /**
     * @var int
     */
    const DT_WIDE = 17;

    /**
     * @var int
     */
    const EA_AMBIGUOUS = 1;

    /**
     * @var int
     */
    const EA_COUNT = 6;

    /**
     * @var int
     */
    const EA_FULLWIDTH = 3;

    /**
     * @var int
     */
    const EA_HALFWIDTH = 2;

    /**
     * @var int
     */
    const EA_NARROW = 4;

    /**
     * @var int
     */
    const EA_NEUTRAL = 0;

    /**
     * @var int
     */
    const EA_WIDE = 5;

    /**
     * @var int
     */
    const EXTENDED_CHAR_NAME = 2;

    /**
     * @var int
     */
    const FOLD_CASE_DEFAULT = 0;

    /**
     * @var int
     */
    const FOLD_CASE_EXCLUDE_SPECIAL_I = 1;

    /**
     * @var int
     */
    const GCB_CONTROL = 1;

    /**
     * @var int
     */
    const GCB_COUNT = 13;

    /**
     * @var int
     */
    const GCB_CR = 2;

    /**
     * @var int
     */
    const GCB_EXTEND = 3;

    /**
     * @var int
     */
    const GCB_L = 4;

    /**
     * @var int
     */
    const GCB_LF = 5;

    /**
     * @var int
     */
    const GCB_LV = 6;

    /**
     * @var int
     */
    const GCB_LVT = 7;

    /**
     * @var int
     */
    const GCB_OTHER = 0;

    /**
     * @var int
     */
    const GCB_PREPEND = 11;

    /**
     * @var int
     */
    const GCB_REGIONAL_INDICATOR = 12;

    /**
     * @var int
     */
    const GCB_SPACING_MARK = 10;

    /**
     * @var int
     */
    const GCB_T = 8;

    /**
     * @var int
     */
    const GCB_V = 9;

    /**
     * @var int
     */
    const HST_COUNT = 6;

    /**
     * @var int
     */
    const HST_LEADING_JAMO = 1;

    /**
     * @var int
     */
    const HST_LV_SYLLABLE = 4;

    /**
     * @var int
     */
    const HST_LVT_SYLLABLE = 5;

    /**
     * @var int
     */
    const HST_NOT_APPLICABLE = 0;

    /**
     * @var int
     */
    const HST_TRAILING_JAMO = 3;

    /**
     * @var int
     */
    const HST_VOWEL_JAMO = 2;

    /**
     * @var int
     */
    const JG_AIN = 1;

    /**
     * @var int
     */
    const JG_ALAPH = 2;

    /**
     * @var int
     */
    const JG_ALEF = 3;

    /**
     * @var int
     */
    const JG_BEH = 4;

    /**
     * @var int
     */
    const JG_BETH = 5;

    /**
     * @var int
     */
    const JG_BURUSHASKI_YEH_BARREE = 54;

    /**
     * @var int
     */
    const JG_COUNT = 86;

    /**
     * @var int
     */
    const JG_DAL = 6;

    /**
     * @var int
     */
    const JG_DALATH_RISH = 7;

    /**
     * @var int
     */
    const JG_E = 8;

    /**
     * @var int
     */
    const JG_FARSI_YEH = 55;

    /**
     * @var int
     */
    const JG_FE = 51;

    /**
     * @var int
     */
    const JG_FEH = 9;

    /**
     * @var int
     */
    const JG_FINAL_SEMKATH = 10;

    /**
     * @var int
     */
    const JG_GAF = 11;

    /**
     * @var int
     */
    const JG_GAMAL = 12;

    /**
     * @var int
     */
    const JG_HAH = 13;

    /**
     * @var int
     */
    const JG_HAMZA_ON_HEH_GOAL = 14;

    /**
     * @var int
     */
    const JG_HE = 15;

    /**
     * @var int
     */
    const JG_HEH = 16;

    /**
     * @var int
     */
    const JG_HEH_GOAL = 17;

    /**
     * @var int
     */
    const JG_HETH = 18;

    /**
     * @var int
     */
    const JG_KAF = 19;

    /**
     * @var int
     */
    const JG_KAPH = 20;

    /**
     * @var int
     */
    const JG_KHAPH = 52;

    /**
     * @var int
     */
    const JG_KNOTTED_HEH = 21;

    /**
     * @var int
     */
    const JG_LAM = 22;

    /**
     * @var int
     */
    const JG_LAMADH = 23;

    /**
     * @var int
     */
    const JG_MANICHAEAN_ALEPH = 58;

    /**
     * @var int
     */
    const JG_MANICHAEAN_AYIN = 59;

    /**
     * @var int
     */
    const JG_MANICHAEAN_BETH = 60;

    /**
     * @var int
     */
    const JG_MANICHAEAN_DALETH = 61;

    /**
     * @var int
     */
    const JG_MANICHAEAN_DHAMEDH = 62;

    /**
     * @var int
     */
    const JG_MANICHAEAN_FIVE = 63;

    /**
     * @var int
     */
    const JG_MANICHAEAN_GIMEL = 64;

    /**
     * @var int
     */
    const JG_MANICHAEAN_HETH = 65;

    /**
     * @var int
     */
    const JG_MANICHAEAN_HUNDRED = 66;

    /**
     * @var int
     */
    const JG_MANICHAEAN_KAPH = 67;

    /**
     * @var int
     */
    const JG_MANICHAEAN_LAMEDH = 68;

    /**
     * @var int
     */
    const JG_MANICHAEAN_MEM = 69;

    /**
     * @var int
     */
    const JG_MANICHAEAN_NUN = 70;

    /**
     * @var int
     */
    const JG_MANICHAEAN_ONE = 71;

    /**
     * @var int
     */
    const JG_MANICHAEAN_PE = 72;

    /**
     * @var int
     */
    const JG_MANICHAEAN_QOPH = 73;

    /**
     * @var int
     */
    const JG_MANICHAEAN_RESH = 74;

    /**
     * @var int
     */
    const JG_MANICHAEAN_SADHE = 75;

    /**
     * @var int
     */
    const JG_MANICHAEAN_SAMEKH = 76;

    /**
     * @var int
     */
    const JG_MANICHAEAN_TAW = 77;

    /**
     * @var int
     */
    const JG_MANICHAEAN_TEN = 78;

    /**
     * @var int
     */
    const JG_MANICHAEAN_TETH = 79;

    /**
     * @var int
     */
    const JG_MANICHAEAN_THAMEDH = 80;

    /**
     * @var int
     */
    const JG_MANICHAEAN_TWENTY = 81;

    /**
     * @var int
     */
    const JG_MANICHAEAN_WAW = 82;

    /**
     * @var int
     */
    const JG_MANICHAEAN_YODH = 83;

    /**
     * @var int
     */
    const JG_MANICHAEAN_ZAYIN = 84;

    /**
     * @var int
     */
    const JG_MEEM = 24;

    /**
     * @var int
     */
    const JG_MIM = 25;

    /**
     * @var int
     */
    const JG_NO_JOINING_GROUP = 0;

    /**
     * @var int
     */
    const JG_NOON = 26;

    /**
     * @var int
     */
    const JG_NUN = 27;

    /**
     * @var int
     */
    const JG_NYA = 56;

    /**
     * @var int
     */
    const JG_PE = 28;

    /**
     * @var int
     */
    const JG_QAF = 29;

    /**
     * @var int
     */
    const JG_QAPH = 30;

    /**
     * @var int
     */
    const JG_REH = 31;

    /**
     * @var int
     */
    const JG_REVERSED_PE = 32;

    /**
     * @var int
     */
    const JG_ROHINGYA_YEH = 57;

    /**
     * @var int
     */
    const JG_SAD = 33;

    /**
     * @var int
     */
    const JG_SADHE = 34;

    /**
     * @var int
     */
    const JG_SEEN = 35;

    /**
     * @var int
     */
    const JG_SEMKATH = 36;

    /**
     * @var int
     */
    const JG_SHIN = 37;

    /**
     * @var int
     */
    const JG_STRAIGHT_WAW = 85;

    /**
     * @var int
     */
    const JG_SWASH_KAF = 38;

    /**
     * @var int
     */
    const JG_SYRIAC_WAW = 39;

    /**
     * @var int
     */
    const JG_TAH = 40;

    /**
     * @var int
     */
    const JG_TAW = 41;

    /**
     * @var int
     */
    const JG_TEH_MARBUTA = 42;

    /**
     * @var int
     */
    const JG_TEH_MARBUTA_GOAL = 14;

    /**
     * @var int
     */
    const JG_TETH = 43;

    /**
     * @var int
     */
    const JG_WAW = 44;

    /**
     * @var int
     */
    const JG_YEH = 45;

    /**
     * @var int
     */
    const JG_YEH_BARREE = 46;

    /**
     * @var int
     */
    const JG_YEH_WITH_TAIL = 47;

    /**
     * @var int
     */
    const JG_YUDH = 48;

    /**
     * @var int
     */
    const JG_YUDH_HE = 49;

    /**
     * @var int
     */
    const JG_ZAIN = 50;

    /**
     * @var int
     */
    const JG_ZHAIN = 53;

    /**
     * @var int
     */
    const JT_COUNT = 6;

    /**
     * @var int
     */
    const JT_DUAL_JOINING = 2;

    /**
     * @var int
     */
    const JT_JOIN_CAUSING = 1;

    /**
     * @var int
     */
    const JT_LEFT_JOINING = 3;

    /**
     * @var int
     */
    const JT_NON_JOINING = 0;

    /**
     * @var int
     */
    const JT_RIGHT_JOINING = 4;

    /**
     * @var int
     */
    const JT_TRANSPARENT = 5;

    /**
     * @var int
     */
    const LB_ALPHABETIC = 2;

    /**
     * @var int
     */
    const LB_AMBIGUOUS = 1;

    /**
     * @var int
     */
    const LB_BREAK_AFTER = 4;

    /**
     * @var int
     */
    const LB_BREAK_BEFORE = 5;

    /**
     * @var int
     */
    const LB_BREAK_BOTH = 3;

    /**
     * @var int
     */
    const LB_BREAK_SYMBOLS = 27;

    /**
     * @var int
     */
    const LB_CARRIAGE_RETURN = 10;

    /**
     * @var int
     */
    const LB_CLOSE_PARENTHESIS = 36;

    /**
     * @var int
     */
    const LB_CLOSE_PUNCTUATION = 8;

    /**
     * @var int
     */
    const LB_COMBINING_MARK = 9;

    /**
     * @var int
     */
    const LB_COMPLEX_CONTEXT = 24;

    /**
     * @var int
     */
    const LB_CONDITIONAL_JAPANESE_STARTER = 37;

    /**
     * @var int
     */
    const LB_CONTINGENT_BREAK = 7;

    /**
     * @var int
     */
    const LB_COUNT = 40;

    /**
     * @var int
     */
    const LB_EXCLAMATION = 11;

    /**
     * @var int
     */
    const LB_GLUE = 12;

    /**
     * @var int
     */
    const LB_H2 = 31;

    /**
     * @var int
     */
    const LB_H3 = 32;

    /**
     * @var int
     */
    const LB_HEBREW_LETTER = 38;

    /**
     * @var int
     */
    const LB_HYPHEN = 13;

    /**
     * @var int
     */
    const LB_IDEOGRAPHIC = 14;

    /**
     * @var int
     */
    const LB_INFIX_NUMERIC = 16;

    /**
     * @var int
     */
    const LB_INSEPARABLE = 15;

    /**
     * @var int
     */
    const LB_INSEPERABLE = 15;

    /**
     * @var int
     */
    const LB_JL = 33;

    /**
     * @var int
     */
    const LB_JT = 34;

    /**
     * @var int
     */
    const LB_JV = 35;

    /**
     * @var int
     */
    const LB_LINE_FEED = 17;

    /**
     * @var int
     */
    const LB_MANDATORY_BREAK = 6;

    /**
     * @var int
     */
    const LB_NEXT_LINE = 29;

    /**
     * @var int
     */
    const LB_NONSTARTER = 18;

    /**
     * @var int
     */
    const LB_NUMERIC = 19;

    /**
     * @var int
     */
    const LB_OPEN_PUNCTUATION = 20;

    /**
     * @var int
     */
    const LB_POSTFIX_NUMERIC = 21;

    /**
     * @var int
     */
    const LB_PREFIX_NUMERIC = 22;

    /**
     * @var int
     */
    const LB_QUOTATION = 23;

    /**
     * @var int
     */
    const LB_REGIONAL_INDICATOR = 39;

    /**
     * @var int
     */
    const LB_SPACE = 26;

    /**
     * @var int
     */
    const LB_SURROGATE = 25;

    /**
     * @var int
     */
    const LB_UNKNOWN = 0;

    /**
     * @var int
     */
    const LB_WORD_JOINER = 30;

    /**
     * @var int
     */
    const LB_ZWSPACE = 28;

    /**
     * @var int
     */
    const LONG_PROPERTY_NAME = 1;

    /**
     * @var int
     */
    const NO_NUMERIC_VALUE = -123456789;

    /**
     * @var int
     */
    const NT_COUNT = 4;

    /**
     * @var int
     */
    const NT_DECIMAL = 1;

    /**
     * @var int
     */
    const NT_DIGIT = 2;

    /**
     * @var int
     */
    const NT_NONE = 0;

    /**
     * @var int
     */
    const NT_NUMERIC = 3;

    /**
     * @var int
     */
    const PROPERTY_AGE = 16384;

    /**
     * @var int
     */
    const PROPERTY_ALPHABETIC = 0;

    /**
     * @var int
     */
    const PROPERTY_ASCII_HEX_DIGIT = 1;

    /**
     * @var int
     */
    const PROPERTY_BIDI_CLASS = 4096;

    /**
     * @var int
     */
    const PROPERTY_BIDI_CONTROL = 2;

    /**
     * @var int
     */
    const PROPERTY_BIDI_MIRRORED = 3;

    /**
     * @var int
     */
    const PROPERTY_BIDI_MIRRORING_GLYPH = 16385;

    /**
     * @var int
     */
    const PROPERTY_BIDI_PAIRED_BRACKET = 16397;

    /**
     * @var int
     */
    const PROPERTY_BIDI_PAIRED_BRACKET_TYPE = 4117;

    /**
     * @var int
     */
    const PROPERTY_BINARY_LIMIT = 61;

    /**
     * @var int
     */
    const PROPERTY_BINARY_START = 0;

    /**
     * @var int
     */
    const PROPERTY_BLOCK = 4097;

    /**
     * @var int
     */
    const PROPERTY_CANONICAL_COMBINING_CLASS = 4098;

    /**
     * @var int
     */
    const PROPERTY_CASE_FOLDING = 16386;

    /**
     * @var int
     */
    const PROPERTY_CASE_IGNORABLE = 50;

    /**
     * @var int
     */
    const PROPERTY_CASE_SENSITIVE = 34;

    /**
     * @var int
     */
    const PROPERTY_CASED = 49;

    /**
     * @var int
     */
    const PROPERTY_CHANGES_WHEN_CASEFOLDED = 54;

    /**
     * @var int
     */
    const PROPERTY_CHANGES_WHEN_CASEMAPPED = 55;

    /**
     * @var int
     */
    const PROPERTY_CHANGES_WHEN_LOWERCASED = 51;

    /**
     * @var int
     */
    const PROPERTY_CHANGES_WHEN_NFKC_CASEFOLDED = 56;

    /**
     * @var int
     */
    const PROPERTY_CHANGES_WHEN_TITLECASED = 53;

    /**
     * @var int
     */
    const PROPERTY_CHANGES_WHEN_UPPERCASED = 52;

    /**
     * @var int
     */
    const PROPERTY_DASH = 4;

    /**
     * @var int
     */
    const PROPERTY_DECOMPOSITION_TYPE = 4099;

    /**
     * @var int
     */
    const PROPERTY_DEFAULT_IGNORABLE_CODE_POINT = 5;

    /**
     * @var int
     */
    const PROPERTY_DEPRECATED = 6;

    /**
     * @var int
     */
    const PROPERTY_DIACRITIC = 7;

    /**
     * @var int
     */
    const PROPERTY_DOUBLE_LIMIT = 12289;

    /**
     * @var int
     */
    const PROPERTY_DOUBLE_START = 12288;

    /**
     * @var int
     */
    const PROPERTY_EAST_ASIAN_WIDTH = 4100;

    /**
     * @var int
     */
    const PROPERTY_EXTENDER = 8;

    /**
     * @var int
     */
    const PROPERTY_FULL_COMPOSITION_EXCLUSION = 9;

    /**
     * @var int
     */
    const PROPERTY_GENERAL_CATEGORY = 4101;

    /**
     * @var int
     */
    const PROPERTY_GENERAL_CATEGORY_MASK = 8192;

    /**
     * @var int
     */
    const PROPERTY_GRAPHEME_BASE = 10;

    /**
     * @var int
     */
    const PROPERTY_GRAPHEME_CLUSTER_BREAK = 4114;

    /**
     * @var int
     */
    const PROPERTY_GRAPHEME_EXTEND = 11;

    /**
     * @var int
     */
    const PROPERTY_GRAPHEME_LINK = 12;

    /**
     * @var int
     */
    const PROPERTY_HANGUL_SYLLABLE_TYPE = 4107;

    /**
     * @var int
     */
    const PROPERTY_HEX_DIGIT = 13;

    /**
     * @var int
     */
    const PROPERTY_HYPHEN = 14;

    /**
     * @var int
     */
    const PROPERTY_ID_CONTINUE = 15;

    /**
     * @var int
     */
    const PROPERTY_ID_START = 16;

    /**
     * @var int
     */
    const PROPERTY_IDEOGRAPHIC = 17;

    /**
     * @var int
     */
    const PROPERTY_IDS_BINARY_OPERATOR = 18;

    /**
     * @var int
     */
    const PROPERTY_IDS_TRINARY_OPERATOR = 19;

    /**
     * @var int
     */
    const PROPERTY_INT_LIMIT = 4118;

    /**
     * @var int
     */
    const PROPERTY_INT_START = 4096;

    /**
     * @var int
     */
    const PROPERTY_INVALID_CODE = -1;

    /**
     * @var int
     */
    const PROPERTY_ISO_COMMENT = 16387;

    /**
     * @var int
     */
    const PROPERTY_JOIN_CONTROL = 20;

    /**
     * @var int
     */
    const PROPERTY_JOINING_GROUP = 4102;

    /**
     * @var int
     */
    const PROPERTY_JOINING_TYPE = 4103;

    /**
     * @var int
     */
    const PROPERTY_LEAD_CANONICAL_COMBINING_CLASS = 4112;

    /**
     * @var int
     */
    const PROPERTY_LINE_BREAK = 4104;

    /**
     * @var int
     */
    const PROPERTY_LOGICAL_ORDER_EXCEPTION = 21;

    /**
     * @var int
     */
    const PROPERTY_LOWERCASE = 22;

    /**
     * @var int
     */
    const PROPERTY_LOWERCASE_MAPPING = 16388;

    /**
     * @var int
     */
    const PROPERTY_MASK_LIMIT = 8193;

    /**
     * @var int
     */
    const PROPERTY_MASK_START = 8192;

    /**
     * @var int
     */
    const PROPERTY_MATH = 23;

    /**
     * @var int
     */
    const PROPERTY_NAME = 16389;

    /**
     * @var int
     */
    const PROPERTY_NAME_CHOICE_COUNT = 2;

    /**
     * @var int
     */
    const PROPERTY_NFC_INERT = 39;

    /**
     * @var int
     */
    const PROPERTY_NFC_QUICK_CHECK = 4110;

    /**
     * @var int
     */
    const PROPERTY_NFD_INERT = 37;

    /**
     * @var int
     */
    const PROPERTY_NFD_QUICK_CHECK = 4108;

    /**
     * @var int
     */
    const PROPERTY_NFKC_INERT = 40;

    /**
     * @var int
     */
    const PROPERTY_NFKC_QUICK_CHECK = 4111;

    /**
     * @var int
     */
    const PROPERTY_NFKD_INERT = 38;

    /**
     * @var int
     */
    const PROPERTY_NFKD_QUICK_CHECK = 4109;

    /**
     * @var int
     */
    const PROPERTY_NONCHARACTER_CODE_POINT = 24;

    /**
     * @var int
     */
    const PROPERTY_NUMERIC_TYPE = 4105;

    /**
     * @var int
     */
    const PROPERTY_NUMERIC_VALUE = 12288;

    /**
     * @var int
     */
    const PROPERTY_OTHER_PROPERTY_LIMIT = 28673;

    /**
     * @var int
     */
    const PROPERTY_OTHER_PROPERTY_START = 28672;

    /**
     * @var int
     */
    const PROPERTY_PATTERN_SYNTAX = 42;

    /**
     * @var int
     */
    const PROPERTY_PATTERN_WHITE_SPACE = 43;

    /**
     * @var int
     */
    const PROPERTY_POSIX_ALNUM = 44;

    /**
     * @var int
     */
    const PROPERTY_POSIX_BLANK = 45;

    /**
     * @var int
     */
    const PROPERTY_POSIX_GRAPH = 46;

    /**
     * @var int
     */
    const PROPERTY_POSIX_PRINT = 47;

    /**
     * @var int
     */
    const PROPERTY_POSIX_XDIGIT = 48;

    /**
     * @var int
     */
    const PROPERTY_QUOTATION_MARK = 25;

    /**
     * @var int
     */
    const PROPERTY_RADICAL = 26;

    /**
     * @var int
     */
    const PROPERTY_S_TERM = 35;

    /**
     * @var int
     */
    const PROPERTY_SCRIPT = 4106;

    /**
     * @var int
     */
    const PROPERTY_SCRIPT_EXTENSIONS = 28672;

    /**
     * @var int
     */
    const PROPERTY_SEGMENT_STARTER = 41;

    /**
     * @var int
     */
    const PROPERTY_SENTENCE_BREAK = 4115;

    /**
     * @var int
     */
    const PROPERTY_SIMPLE_CASE_FOLDING = 16390;

    /**
     * @var int
     */
    const PROPERTY_SIMPLE_LOWERCASE_MAPPING = 16391;

    /**
     * @var int
     */
    const PROPERTY_SIMPLE_TITLECASE_MAPPING = 16392;

    /**
     * @var int
     */
    const PROPERTY_SIMPLE_UPPERCASE_MAPPING = 16393;

    /**
     * @var int
     */
    const PROPERTY_SOFT_DOTTED = 27;

    /**
     * @var int
     */
    const PROPERTY_STRING_LIMIT = 16398;

    /**
     * @var int
     */
    const PROPERTY_STRING_START = 16384;

    /**
     * @var int
     */
    const PROPERTY_TERMINAL_PUNCTUATION = 28;

    /**
     * @var int
     */
    const PROPERTY_TITLECASE_MAPPING = 16394;

    /**
     * @var int
     */
    const PROPERTY_TRAIL_CANONICAL_COMBINING_CLASS = 4113;

    /**
     * @var int
     */
    const PROPERTY_UNICODE_1_NAME = 16395;

    /**
     * @var int
     */
    const PROPERTY_UNIFIED_IDEOGRAPH = 29;

    /**
     * @var int
     */
    const PROPERTY_UPPERCASE = 30;

    /**
     * @var int
     */
    const PROPERTY_UPPERCASE_MAPPING = 16396;

    /**
     * @var int
     */
    const PROPERTY_VARIATION_SELECTOR = 36;

    /**
     * @var int
     */
    const PROPERTY_WHITE_SPACE = 31;

    /**
     * @var int
     */
    const PROPERTY_WORD_BREAK = 4116;

    /**
     * @var int
     */
    const PROPERTY_XID_CONTINUE = 32;

    /**
     * @var int
     */
    const PROPERTY_XID_START = 33;

    /**
     * @var int
     */
    const SB_ATERM = 1;

    /**
     * @var int
     */
    const SB_CLOSE = 2;

    /**
     * @var int
     */
    const SB_COUNT = 15;

    /**
     * @var int
     */
    const SB_CR = 11;

    /**
     * @var int
     */
    const SB_EXTEND = 12;

    /**
     * @var int
     */
    const SB_FORMAT = 3;

    /**
     * @var int
     */
    const SB_LF = 13;

    /**
     * @var int
     */
    const SB_LOWER = 4;

    /**
     * @var int
     */
    const SB_NUMERIC = 5;

    /**
     * @var int
     */
    const SB_OLETTER = 6;

    /**
     * @var int
     */
    const SB_OTHER = 0;

    /**
     * @var int
     */
    const SB_SCONTINUE = 14;

    /**
     * @var int
     */
    const SB_SEP = 7;

    /**
     * @var int
     */
    const SB_SP = 8;

    /**
     * @var int
     */
    const SB_STERM = 9;

    /**
     * @var int
     */
    const SB_UPPER = 10;

    /**
     * @var int
     */
    const SHORT_PROPERTY_NAME = 0;

    /**
     * @var int
     */
    const UNICODE_10_CHAR_NAME = 1;

    /**
     * @var int
     */
    const UNICODE_CHAR_NAME = 0;

    /**
     * @var string
     */
    const UNICODE_VERSION = '8.0';

    /**
     * @var int
     */
    const WB_ALETTER = 1;

    /**
     * @var int
     */
    const WB_COUNT = 17;

    /**
     * @var int
     */
    const WB_CR = 8;

    /**
     * @var int
     */
    const WB_DOUBLE_QUOTE = 16;

    /**
     * @var int
     */
    const WB_EXTEND = 9;

    /**
     * @var int
     */
    const WB_EXTENDNUMLET = 7;

    /**
     * @var int
     */
    const WB_FORMAT = 2;

    /**
     * @var int
     */
    const WB_HEBREW_LETTER = 14;

    /**
     * @var int
     */
    const WB_KATAKANA = 3;

    /**
     * @var int
     */
    const WB_LF = 10;

    /**
     * @var int
     */
    const WB_MIDLETTER = 4;

    /**
     * @var int
     */
    const WB_MIDNUM = 5;

    /**
     * @var int
     */
    const WB_MIDNUMLET = 11;

    /**
     * @var int
     */
    const WB_NEWLINE = 12;

    /**
     * @var int
     */
    const WB_NUMERIC = 6;

    /**
     * @var int
     */
    const WB_OTHER = 0;

    /**
     * @var int
     */
    const WB_REGIONAL_INDICATOR = 13;

    /**
     * @var int
     */
    const WB_SINGLE_QUOTE = 15;

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
    public static function enumCharNames($start, $limit, $callback, $nameChoice = null): void
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
    public static function enumCharTypes($callback = null): void
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
     * @var int
     */
    const FULL = 0;

    /**
     * @var int
     */
    const GREGORIAN = 1;

    /**
     * @var int
     */
    const LONG = 1;

    /**
     * @var int
     */
    const MEDIUM = 2;

    /**
     * @var int
     */
    const NONE = -1;

    /**
     * @var int
     */
    const SHORT = 3;

    /**
     * @var int
     */
    const TRADITIONAL = 0;

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
    public function next(): void
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
    public function rewind(): void
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
     * @var int
     */
    const KEY_LEFT = 1;

    /**
     * @var int
     */
    const KEY_RIGHT = 2;

    /**
     * @var int
     */
    const KEY_SEQUENTIAL = 0;

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
     * @var int
     */
    const DISPLAY_GENERIC_LOCATION = 8;

    /**
     * @var int
     */
    const DISPLAY_LONG = 2;

    /**
     * @var int
     */
    const DISPLAY_LONG_GENERIC = 4;

    /**
     * @var int
     */
    const DISPLAY_LONG_GMT = 6;

    /**
     * @var int
     */
    const DISPLAY_SHORT = 1;

    /**
     * @var int
     */
    const DISPLAY_SHORT_COMMONLY_USED = 7;

    /**
     * @var int
     */
    const DISPLAY_SHORT_GENERIC = 3;

    /**
     * @var int
     */
    const DISPLAY_SHORT_GMT = 5;

    /**
     * @var int
     */
    const TYPE_ANY = 0;

    /**
     * @var int
     */
    const TYPE_CANONICAL = 1;

    /**
     * @var int
     */
    const TYPE_CANONICAL_LOCATION = 2;

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
     * Translate a Windows timezone into a system timezone
     *
     * @param mixed $timezone
     * @param mixed|null $region
     *
     * @return string
     *
     * @since PHP 7 >= 7.1.0
     *
     * @link http://www.php.net/manual/en/intltimezone.getidforwindowsid.php
     */
    public static function getIDForWindowsID($timezone, $region = null): string
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
     * Translate a system timezone into a Windows timezone
     *
     * @param mixed $timezone
     *
     * @return string
     *
     * @since PHP 7 >= 7.1.0
     *
     * @link http://www.php.net/manual/en/intltimezone.getwindowsid.php
     */
    public static function getWindowsID($timezone): string
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
     * @var int
     */
    const ACTUAL_LOCALE = 0;

    /**
     * @var null
     */
    const DEFAULT_LOCALE = null;

    /**
     * @var string
     */
    const EXTLANG_TAG = 'extlang';

    /**
     * @var string
     */
    const GRANDFATHERED_LANG_TAG = 'grandfathered';

    /**
     * @var string
     */
    const LANG_TAG = 'language';

    /**
     * @var string
     */
    const PRIVATE_TAG = 'private';

    /**
     * @var string
     */
    const REGION_TAG = 'region';

    /**
     * @var string
     */
    const SCRIPT_TAG = 'script';

    /**
     * @var int
     */
    const VALID_LOCALE = 1;

    /**
     * @var string
     */
    const VARIANT_TAG = 'variant';

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
     * @var int
     */
    const FORM_C = 4;

    /**
     * @var int
     */
    const FORM_D = 2;

    /**
     * @var int
     */
    const FORM_KC = 5;

    /**
     * @var int
     */
    const FORM_KD = 3;

    /**
     * @var int
     */
    const NFC = 4;

    /**
     * @var int
     */
    const NFD = 2;

    /**
     * @var int
     */
    const NFKC = 5;

    /**
     * @var int
     */
    const NFKD = 3;

    /**
     * @var int
     */
    const NONE = 1;

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
     * @var int
     */
    const CURRENCY = 2;

    /**
     * @var int
     */
    const CURRENCY_CODE = 5;

    /**
     * @var int
     */
    const CURRENCY_SYMBOL = 8;

    /**
     * @var int
     */
    const DECIMAL = 1;

    /**
     * @var int
     */
    const DECIMAL_ALWAYS_SHOWN = 2;

    /**
     * @var int
     */
    const DECIMAL_SEPARATOR_SYMBOL = 0;

    /**
     * @var int
     */
    const DEFAULT_RULESET = 6;

    /**
     * @var int
     */
    const DEFAULT_STYLE = 1;

    /**
     * @var int
     */
    const DIGIT_SYMBOL = 5;

    /**
     * @var int
     */
    const DURATION = 7;

    /**
     * @var int
     */
    const EXPONENTIAL_SYMBOL = 11;

    /**
     * @var int
     */
    const FORMAT_WIDTH = 13;

    /**
     * @var int
     */
    const FRACTION_DIGITS = 8;

    /**
     * @var int
     */
    const GROUPING_SEPARATOR_SYMBOL = 1;

    /**
     * @var int
     */
    const GROUPING_SIZE = 10;

    /**
     * @var int
     */
    const GROUPING_USED = 1;

    /**
     * @var int
     */
    const IGNORE = 0;

    /**
     * @var int
     */
    const INFINITY_SYMBOL = 14;

    /**
     * @var int
     */
    const INTEGER_DIGITS = 5;

    /**
     * @var int
     */
    const INTL_CURRENCY_SYMBOL = 9;

    /**
     * @var int
     */
    const LENIENT_PARSE = 19;

    /**
     * @var int
     */
    const MAX_FRACTION_DIGITS = 6;

    /**
     * @var int
     */
    const MAX_INTEGER_DIGITS = 3;

    /**
     * @var int
     */
    const MAX_SIGNIFICANT_DIGITS = 18;

    /**
     * @var int
     */
    const MIN_FRACTION_DIGITS = 7;

    /**
     * @var int
     */
    const MIN_INTEGER_DIGITS = 4;

    /**
     * @var int
     */
    const MIN_SIGNIFICANT_DIGITS = 17;

    /**
     * @var int
     */
    const MINUS_SIGN_SYMBOL = 6;

    /**
     * @var int
     */
    const MONETARY_GROUPING_SEPARATOR_SYMBOL = 17;

    /**
     * @var int
     */
    const MONETARY_SEPARATOR_SYMBOL = 10;

    /**
     * @var int
     */
    const MULTIPLIER = 9;

    /**
     * @var int
     */
    const NAN_SYMBOL = 15;

    /**
     * @var int
     */
    const NEGATIVE_PREFIX = 2;

    /**
     * @var int
     */
    const NEGATIVE_SUFFIX = 3;

    /**
     * @var int
     */
    const ORDINAL = 6;

    /**
     * @var int
     */
    const PAD_AFTER_PREFIX = 1;

    /**
     * @var int
     */
    const PAD_AFTER_SUFFIX = 3;

    /**
     * @var int
     */
    const PAD_BEFORE_PREFIX = 0;

    /**
     * @var int
     */
    const PAD_BEFORE_SUFFIX = 2;

    /**
     * @var int
     */
    const PAD_ESCAPE_SYMBOL = 13;

    /**
     * @var int
     */
    const PADDING_CHARACTER = 4;

    /**
     * @var int
     */
    const PADDING_POSITION = 14;

    /**
     * @var int
     */
    const PARSE_INT_ONLY = 0;

    /**
     * @var int
     */
    const PATTERN_DECIMAL = 0;

    /**
     * @var int
     */
    const PATTERN_RULEBASED = 9;

    /**
     * @var int
     */
    const PATTERN_SEPARATOR_SYMBOL = 2;

    /**
     * @var int
     */
    const PERCENT = 3;

    /**
     * @var int
     */
    const PERCENT_SYMBOL = 3;

    /**
     * @var int
     */
    const PERMILL_SYMBOL = 12;

    /**
     * @var int
     */
    const PLUS_SIGN_SYMBOL = 7;

    /**
     * @var int
     */
    const POSITIVE_PREFIX = 0;

    /**
     * @var int
     */
    const POSITIVE_SUFFIX = 1;

    /**
     * @var int
     */
    const PUBLIC_RULESETS = 7;

    /**
     * @var int
     */
    const ROUND_CEILING = 0;

    /**
     * @var int
     */
    const ROUND_DOWN = 2;

    /**
     * @var int
     */
    const ROUND_FLOOR = 1;

    /**
     * @var int
     */
    const ROUND_HALFDOWN = 5;

    /**
     * @var int
     */
    const ROUND_HALFEVEN = 4;

    /**
     * @var int
     */
    const ROUND_HALFUP = 6;

    /**
     * @var int
     */
    const ROUND_UP = 3;

    /**
     * @var int
     */
    const ROUNDING_INCREMENT = 12;

    /**
     * @var int
     */
    const ROUNDING_MODE = 11;

    /**
     * @var int
     */
    const SCIENTIFIC = 4;

    /**
     * @var int
     */
    const SECONDARY_GROUPING_SIZE = 15;

    /**
     * @var int
     */
    const SIGNIFICANT_DIGIT_SYMBOL = 16;

    /**
     * @var int
     */
    const SIGNIFICANT_DIGITS_USED = 16;

    /**
     * @var int
     */
    const SPELLOUT = 5;

    /**
     * @var int
     */
    const TYPE_CURRENCY = 4;

    /**
     * @var int
     */
    const TYPE_DEFAULT = 0;

    /**
     * @var int
     */
    const TYPE_DOUBLE = 3;

    /**
     * @var int
     */
    const TYPE_INT32 = 1;

    /**
     * @var int
     */
    const TYPE_INT64 = 2;

    /**
     * @var int
     */
    const ZERO_DIGIT_SYMBOL = 4;

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
     * @var int
     */
    const ANY_CASE = 8;

    /**
     * @var int
     */
    const CHAR_LIMIT = 64;

    /**
     * @var int
     */
    const INVISIBLE = 32;

    /**
     * @var int
     */
    const MIXED_SCRIPT_CONFUSABLE = 2;

    /**
     * @var int
     */
    const SINGLE_SCRIPT = 16;

    /**
     * @var int
     */
    const SINGLE_SCRIPT_CONFUSABLE = 1;

    /**
     * @var int
     */
    const WHOLE_SCRIPT_CONFUSABLE = 4;

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
    public function setAllowedLocales($locale_list): void
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
    public function setChecks($checks): void
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
     * @var int
     */
    const FORWARD = 0;

    /**
     * @var int
     */
    const REVERSE = 1;

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
     * @var int
     */
    const BOCU1 = 28;

    /**
     * @var int
     */
    const CESU8 = 31;

    /**
     * @var int
     */
    const DBCS = 1;

    /**
     * @var int
     */
    const EBCDIC_STATEFUL = 9;

    /**
     * @var int
     */
    const HZ = 23;

    /**
     * @var int
     */
    const IMAP_MAILBOX = 32;

    /**
     * @var int
     */
    const ISCII = 25;

    /**
     * @var int
     */
    const ISO_2022 = 10;

    /**
     * @var int
     */
    const LATIN_1 = 3;

    /**
     * @var int
     */
    const LMBCS_1 = 11;

    /**
     * @var int
     */
    const LMBCS_11 = 18;

    /**
     * @var int
     */
    const LMBCS_16 = 19;

    /**
     * @var int
     */
    const LMBCS_17 = 20;

    /**
     * @var int
     */
    const LMBCS_18 = 21;

    /**
     * @var int
     */
    const LMBCS_19 = 22;

    /**
     * @var int
     */
    const LMBCS_2 = 12;

    /**
     * @var int
     */
    const LMBCS_3 = 13;

    /**
     * @var int
     */
    const LMBCS_4 = 14;

    /**
     * @var int
     */
    const LMBCS_5 = 15;

    /**
     * @var int
     */
    const LMBCS_6 = 16;

    /**
     * @var int
     */
    const LMBCS_8 = 17;

    /**
     * @var int
     */
    const LMBCS_LAST = 22;

    /**
     * @var int
     */
    const MBCS = 2;

    /**
     * @var int
     */
    const REASON_CLONE = 5;

    /**
     * @var int
     */
    const REASON_CLOSE = 4;

    /**
     * @var int
     */
    const REASON_ILLEGAL = 1;

    /**
     * @var int
     */
    const REASON_IRREGULAR = 2;

    /**
     * @var int
     */
    const REASON_RESET = 3;

    /**
     * @var int
     */
    const REASON_UNASSIGNED = 0;

    /**
     * @var int
     */
    const SBCS = 0;

    /**
     * @var int
     */
    const SCSU = 24;

    /**
     * @var int
     */
    const UNSUPPORTED_CONVERTER = -1;

    /**
     * @var int
     */
    const US_ASCII = 26;

    /**
     * @var int
     */
    const UTF16 = 29;

    /**
     * @var int
     */
    const UTF16_BigEndian = 5;

    /**
     * @var int
     */
    const UTF16_LittleEndian = 6;

    /**
     * @var int
     */
    const UTF32 = 30;

    /**
     * @var int
     */
    const UTF32_BigEndian = 7;

    /**
     * @var int
     */
    const UTF32_LittleEndian = 8;

    /**
     * @var int
     */
    const UTF7 = 27;

    /**
     * @var int
     */
    const UTF8 = 4;

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
    public function setDestinationEncoding($encoding): void
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
    public function setSourceEncoding($encoding): void
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
    public function setSubstChars($chars): void
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
