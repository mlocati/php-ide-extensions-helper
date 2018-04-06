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
 *       Ignored by the IDNA2003 implementation, which always performs this check.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-check-bidi
 *
 * @var int
 */
const IDNA_CHECK_BIDI = 4;

/**
 * Check whether the input conforms to the CONTEXTJ rules.
 *       Ignored by the IDNA2003 implementation, as this check is new in IDNA2008.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-check-contextj
 *
 * @var int
 */
const IDNA_CHECK_CONTEXTJ = 8;

/**
 * Prohibit processing of unassigned codepoints in the input for IDN
 *       functions and do not check if the input conforms to domain name ASCII rules.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-default
 *
 * @var int
 */
const IDNA_DEFAULT = 0;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 *       <code>idn_to_utf8</code> and
 *       <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_BIDI = 2048;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 *       <code>idn_to_utf8</code> and
 *       <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_CONTEXTJ = 4096;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 *       <code>idn_to_utf8</code> and
 *       <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_DISALLOWED = 128;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 *       <code>idn_to_utf8</code> and
 *       <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_DOMAIN_NAME_TOO_LONG = 4;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 *       <code>idn_to_utf8</code> and
 *       <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_EMPTY_LABEL = 1;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 *       <code>idn_to_utf8</code> and
 *       <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_HYPHEN_3_4 = 32;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 *       <code>idn_to_utf8</code> and
 *       <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_INVALID_ACE_LABEL = 1024;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 *       <code>idn_to_utf8</code> and
 *       <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_LABEL_HAS_DOT = 512;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 *       <code>idn_to_utf8</code> and
 *       <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_LABEL_TOO_LONG = 2;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 *       <code>idn_to_utf8</code> and
 *       <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_LEADING_COMBINING_MARK = 64;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 *       <code>idn_to_utf8</code> and
 *       <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_LEADING_HYPHEN = 8;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 *       <code>idn_to_utf8</code> and
 *       <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_PUNYCODE = 256;

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 *       <code>idn_to_utf8</code> and
 *       <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-error-empty-label
 *
 * @var int
 */
const IDNA_ERROR_TRAILING_HYPHEN = 16;

/**
 * Option for nontransitional processing in
 *       <code>idn_to_ascii</code>. Transitional processing is activated
 *       by default. This option is ignored by the IDNA2003 implementation.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.idna-nontransitional-to-ascii
 *
 * @var int
 */
const IDNA_NONTRANSITIONAL_TO_ASCII = 16;

/**
 * Option for nontransitional processing in
 *       <code>idn_to_utf8</code>. Transitional processing is activated
 *       by default. This option is ignored by the IDNA2003 implementation.
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
 *       <code>idn_to_ascii</code>. This is the default.
 *       This constant and using the default has been deprecated as of PHP 7.2.0.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.intl-idna-variant-2003
 *
 * @var int
 */
const INTL_IDNA_VARIANT_2003 = 0;

/**
 * Use UTS #46 algorithm in <code>idn_to_utf8</code> and
 *       <code>idn_to_ascii</code>.
 *
 * @link http://www.php.net/manual/en/intl.constants.php#constant.intl-idna-variant-uts46
 *
 * @var int
 */
const INTL_IDNA_VARIANT_UTS46 = 1;

/**
 * Limit on locale length, set to 80 in PHP code. Locale names longer 
 *       than this limit will not be accepted.
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
 *     locale-sensitive sort orderings.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/class.collator.php
 */
class Collator
{
    /**
     * @param mixed $arg1
     */
    public function __construct($arg1)
    {
    }

    /**
     * Sort an array and maintain index association
     *
     * @param array[] $arr
     * @param mixed|null $flags
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.asort.php
     */
    public function asort(&$arr, $flags = null): bool
    {
    }

    /**
     * @param mixed $arg1
     * @param mixed $arg2
     */
    public function compare($arg1, $arg2)
    {
    }

    /**
     * @param mixed $arg1
     */
    public static function create($arg1)
    {
    }

    /**
     * @param mixed $arg1
     */
    public function getAttribute($arg1)
    {
    }

    public function getErrorCode()
    {
    }

    public function getErrorMessage()
    {
    }

    /**
     * @param mixed $arg1
     */
    public function getLocale($arg1)
    {
    }

    /**
     * @param mixed $arg1
     */
    public function getSortKey($arg1)
    {
    }

    public function getStrength()
    {
    }

    /**
     * @param mixed $arg1
     * @param mixed $arg2
     */
    public function setAttribute($arg1, $arg2)
    {
    }

    /**
     * @param mixed $arg1
     */
    public function setStrength($arg1)
    {
    }

    /**
     * Sort an array
     *
     * @param array[] $arr
     * @param mixed|null $flags
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.sort.php
     */
    public function sort(&$arr, $flags = null): bool
    {
    }

    /**
     * @param array[] $arr
     */
    public function sortWithSortKeys(&$arr)
    {
    }
}

/**
 * A “break iterator” is an ICU object that exposes methods for locating
 *     boundaries in text (e.g. word or sentence boundaries).
 *     The PHP <code>IntlBreakIterator</code> serves as the base class
 *     for all types of ICU break iterators. Where extra functionality is
 *     available, the intl extension may expose the ICU break iterator with
 *     suitable subclasses, such as
 *     <code>IntlRuleBasedBreakIterator</code> or
 *     <code>IntlCodePointBreaIterator</code>.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.intlbreakiterator.php
 */
class IntlBreakIterator implements Traversable
{
    private function __construct()
    {
    }

    /**
     * @param mixed|null $locale
     */
    public static function createCharacterInstance($locale = null)
    {
    }

    public static function createCodePointInstance()
    {
    }

    /**
     * @param mixed|null $locale
     */
    public static function createLineInstance($locale = null)
    {
    }

    /**
     * @param mixed|null $locale
     */
    public static function createSentenceInstance($locale = null)
    {
    }

    /**
     * @param mixed|null $locale
     */
    public static function createTitleInstance($locale = null)
    {
    }

    /**
     * @param mixed|null $locale
     */
    public static function createWordInstance($locale = null)
    {
    }

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    public function first()
    {
    }

    /**
     * @param mixed $offset
     */
    public function following($offset)
    {
    }

    public function getErrorCode()
    {
    }

    public function getErrorMessage()
    {
    }

    /**
     * @param mixed $locale_type
     */
    public function getLocale($locale_type)
    {
    }

    /**
     * @param mixed|null $key_type
     */
    public function getPartsIterator($key_type = null)
    {
    }

    /**
     * Lookup a message in the current domain
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.gettext.php
     */
    public function getText(): string
    {
    }

    /**
     * @param mixed $offset
     */
    public function isBoundary($offset)
    {
    }

    public function last()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @param mixed|null $offset
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next($offset = null)
    {
    }

    /**
     * @param mixed $offset
     */
    public function preceding($offset)
    {
    }

    public function previous()
    {
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
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
    private function __construct()
    {
    }

    /**
     * @param mixed $field
     * @param mixed $amount
     */
    public function add($field, $amount)
    {
    }

    /**
     * @param IntlCalendar $calendar
     */
    public function after($calendar)
    {
    }

    /**
     * @param IntlCalendar $calendar
     */
    public function before($calendar)
    {
    }

    /**
     * @param mixed|null $field
     */
    public function clear($field = null)
    {
    }

    /**
     * @param mixed|null $timeZone
     * @param mixed|null $locale
     */
    public static function createInstance($timeZone = null, $locale = null)
    {
    }

    /**
     * @param IntlCalendar $calendar
     */
    public function equals($calendar)
    {
    }

    /**
     * @param mixed $when
     * @param mixed $field
     */
    public function fieldDifference($when, $field)
    {
    }

    /**
     * @param mixed $dateTime
     */
    public static function fromDateTime($dateTime)
    {
    }

    /**
     * @param mixed $field
     */
    public function get($field)
    {
    }

    /**
     * @param mixed $field
     */
    public function getActualMaximum($field)
    {
    }

    /**
     * @param mixed $field
     */
    public function getActualMinimum($field)
    {
    }

    public static function getAvailableLocales()
    {
    }

    /**
     * @param mixed $dayOfWeek
     */
    public function getDayOfWeekType($dayOfWeek)
    {
    }

    public function getErrorCode()
    {
    }

    public function getErrorMessage()
    {
    }

    public function getFirstDayOfWeek()
    {
    }

    /**
     * @param mixed $field
     */
    public function getGreatestMinimum($field)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $locale
     * @param mixed $commonlyUsed
     */
    public static function getKeywordValuesForLocale($key, $locale, $commonlyUsed)
    {
    }

    /**
     * @param mixed $field
     */
    public function getLeastMaximum($field)
    {
    }

    /**
     * @param mixed $localeType
     */
    public function getLocale($localeType)
    {
    }

    /**
     * @param mixed $field
     */
    public function getMaximum($field)
    {
    }

    public function getMinimalDaysInFirstWeek()
    {
    }

    /**
     * @param mixed $field
     */
    public function getMinimum($field)
    {
    }

    public static function getNow()
    {
    }

    public function getRepeatedWallTimeOption()
    {
    }

    public function getSkippedWallTimeOption()
    {
    }

    public function getTime()
    {
    }

    public function getTimeZone()
    {
    }

    /**
     * Get the type of a variable
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.gettype.php
     */
    public function getType(): string
    {
    }

    /**
     * @param mixed $dayOfWeek
     */
    public function getWeekendTransition($dayOfWeek)
    {
    }

    public function inDaylightTime()
    {
    }

    /**
     * @param IntlCalendar $calendar
     */
    public function isEquivalentTo($calendar)
    {
    }

    public function isLenient()
    {
    }

    /**
     * Determine if a variable is set and is not <code>NULL</code>
     *
     * @param mixed $field
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.isset.php
     */
    public function isSet($field): bool
    {
    }

    /**
     * @param mixed|null $date
     */
    public function isWeekend($date = null)
    {
    }

    /**
     * @param mixed $field
     * @param mixed $amountOrUpOrDown
     */
    public function roll($field, $amountOrUpOrDown)
    {
    }

    /**
     * @param mixed $fieldOrYear
     * @param mixed $valueOrMonth
     * @param mixed|null $dayOfMonth
     * @param mixed|null $hour
     * @param mixed|null $minute
     * @param mixed|null $second
     */
    public function set($fieldOrYear, $valueOrMonth, $dayOfMonth = null, $hour = null, $minute = null, $second = null)
    {
    }

    /**
     * @param mixed $dayOfWeek
     */
    public function setFirstDayOfWeek($dayOfWeek)
    {
    }

    /**
     * @param mixed $isLenient
     */
    public function setLenient($isLenient)
    {
    }

    /**
     * @param mixed $numberOfDays
     */
    public function setMinimalDaysInFirstWeek($numberOfDays)
    {
    }

    /**
     * @param mixed $wallTimeOption
     */
    public function setRepeatedWallTimeOption($wallTimeOption)
    {
    }

    /**
     * @param mixed $wallTimeOption
     */
    public function setSkippedWallTimeOption($wallTimeOption)
    {
    }

    /**
     * @param mixed $date
     */
    public function setTime($date)
    {
    }

    /**
     * @param mixed $timeZone
     */
    public function setTimeZone($timeZone)
    {
    }

    public function toDateTime()
    {
    }
}

/**
 * <code>IntlChar</code> provides access to a number of utility
 *     methods that can be used to access information about Unicode characters.
 *
 * @since PHP 7
 *
 * @link http://www.php.net/manual/en/class.intlchar.php
 */
class IntlChar
{
    /**
     * @param mixed $codepoint
     */
    public static function charAge($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function charDigitValue($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function charDirection($codepoint)
    {
    }

    /**
     * @param mixed $characterName
     * @param mixed|null $nameChoice
     */
    public static function charFromName($characterName, $nameChoice = null)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function charMirror($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     * @param mixed|null $nameChoice
     */
    public static function charName($codepoint, $nameChoice = null)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function charType($codepoint)
    {
    }

    /**
     * Return a specific character
     *
     * @param mixed $codepoint
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.chr.php
     */
    public static function chr($codepoint): string
    {
    }

    /**
     * @param mixed $codepoint
     * @param mixed|null $radix
     */
    public static function digit($codepoint, $radix = null)
    {
    }

    /**
     * @param mixed $start
     * @param mixed $limit
     * @param mixed $callback
     * @param mixed|null $nameChoice
     */
    public static function enumCharNames($start, $limit, $callback, $nameChoice = null)
    {
    }

    /**
     * @param mixed|null $callback
     */
    public static function enumCharTypes($callback = null)
    {
    }

    /**
     * @param mixed $codepoint
     * @param mixed|null $options
     */
    public static function foldCase($codepoint, $options = null)
    {
    }

    /**
     * @param mixed $digit
     * @param mixed|null $radix
     */
    public static function forDigit($digit, $radix = null)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function getBidiPairedBracket($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function getBlockCode($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function getCombiningClass($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function getFC_NFKC_Closure($codepoint)
    {
    }

    /**
     * @param mixed $property
     */
    public static function getIntPropertyMaxValue($property)
    {
    }

    /**
     * @param mixed $property
     */
    public static function getIntPropertyMinValue($property)
    {
    }

    /**
     * @param mixed $codepoint
     * @param mixed $property
     */
    public static function getIntPropertyValue($codepoint, $property)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function getNumericValue($codepoint)
    {
    }

    /**
     * @param mixed $alias
     */
    public static function getPropertyEnum($alias)
    {
    }

    /**
     * @param mixed $property
     * @param mixed|null $nameChoice
     */
    public static function getPropertyName($property, $nameChoice = null)
    {
    }

    /**
     * @param mixed $property
     * @param mixed $name
     */
    public static function getPropertyValueEnum($property, $name)
    {
    }

    /**
     * @param mixed $property
     * @param mixed $value
     * @param mixed|null $nameChoice
     */
    public static function getPropertyValueName($property, $value, $nameChoice = null)
    {
    }

    public static function getUnicodeVersion()
    {
    }

    /**
     * @param mixed $codepoint
     * @param mixed $property
     */
    public static function hasBinaryProperty($codepoint, $property)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isalnum($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isalpha($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isbase($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isblank($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function iscntrl($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isdefined($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isdigit($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isgraph($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isIDIgnorable($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isIDPart($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isIDStart($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isISOControl($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isJavaIDPart($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isJavaIDStart($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isJavaSpaceChar($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function islower($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isMirrored($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isprint($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function ispunct($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isspace($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function istitle($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isUAlphabetic($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isULowercase($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isupper($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isUUppercase($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isUWhiteSpace($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isWhitespace($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function isxdigit($codepoint)
    {
    }

    /**
     * Return ASCII value of character
     *
     * @param mixed $character
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.ord.php
     */
    public static function ord($character): int
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function tolower($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function totitle($codepoint)
    {
    }

    /**
     * @param mixed $codepoint
     */
    public static function toupper($codepoint)
    {
    }
}

/**
 * This break iterator
 *     identifies the boundaries between UTF-8 code points.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.intlcodepointbreakiterator.php
 */
class IntlCodePointBreakIterator extends IntlBreakIterator
{
    public function getLastCodePoint()
    {
    }
}

/**
 * <ul>
 *      <li>
 *       ICU Date formatter
 *      </li>
 *     </ul>
 *     <ul>
 *      <li>
 *       ICU Date formats
 *      </li>
 *     </ul>
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/class.intldateformatter.php
 */
class IntlDateFormatter
{
    /**
     * @param mixed $locale
     * @param mixed $datetype
     * @param mixed $timetype
     * @param mixed|null $timezone
     * @param mixed|null $calendar
     * @param mixed|null $pattern
     */
    public function __construct($locale, $datetype, $timetype, $timezone = null, $calendar = null, $pattern = null)
    {
    }

    /**
     * @param mixed $locale
     * @param mixed $datetype
     * @param mixed $timetype
     * @param mixed|null $timezone
     * @param mixed|null $calendar
     * @param mixed|null $pattern
     */
    public static function create($locale, $datetype, $timetype, $timezone = null, $calendar = null, $pattern = null)
    {
    }

    /**
     * @param mixed|null $args
     * @param mixed|null $array
     */
    public function format($args = null, $array = null)
    {
    }

    /**
     * @param mixed $object
     * @param mixed|null $format
     * @param mixed|null $locale
     */
    public static function formatObject($object, $format = null, $locale = null)
    {
    }

    public function getCalendar()
    {
    }

    public function getCalendarObject()
    {
    }

    public function getDateType()
    {
    }

    public function getErrorCode()
    {
    }

    public function getErrorMessage()
    {
    }

    public function getLocale()
    {
    }

    public function getPattern()
    {
    }

    public function getTimeType()
    {
    }

    public function getTimeZone()
    {
    }

    public function getTimeZoneId()
    {
    }

    public function isLenient()
    {
    }

    /**
     * Get the local time
     *
     * @param mixed $string
     * @param mixed|null $position
     *
     * @return array
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.localtime.php
     */
    public function localtime($string, &$position = null): array
    {
    }

    /**
     * @param mixed $string
     * @param mixed|null $position
     */
    public function parse($string, &$position = null)
    {
    }

    /**
     * @param mixed $which
     */
    public function setCalendar($which)
    {
    }

    /**
     * @param mixed $lenient
     */
    public function setLenient($lenient)
    {
    }

    /**
     * @param mixed $pattern
     */
    public function setPattern($pattern)
    {
    }

    /**
     * @param mixed $zone
     */
    public function setTimeZone($zone)
    {
    }
}

/**
 * This class is used for generating exceptions when errors occur inside intl
 *     functions. Such exceptions are only generated when intl.use_exceptions is enabled.
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
     * @param mixed|null $timeZoneOrYear
     * @param mixed|null $localeOrMonth
     * @param mixed|null $dayOfMonth
     * @param mixed|null $hour
     * @param mixed|null $minute
     * @param mixed|null $second
     */
    public function __construct($timeZoneOrYear = null, $localeOrMonth = null, $dayOfMonth = null, $hour = null, $minute = null, $second = null)
    {
    }

    public function getGregorianChange()
    {
    }

    /**
     * @param mixed $year
     */
    public function isLeapYear($year)
    {
    }

    /**
     * @param mixed $date
     */
    public function setGregorianChange($date)
    {
    }
}

/**
 * This class represents iterator objects throughout the intl extension
 *     whenever the iterator cannot be identified with any other object provided
 *     by the extension. The distinct iterator object used internally by the
 *     <code>foreach</code>
 *     construct can only be obtained (in the relevant part here) from
 *     objects, so objects of this class serve the purpose of providing the hook
 *     through which this internal object can be obtained. As a convenience, this
 *     class also implements the <code>Iterator</code> interface,
 *     allowing the collection of values to be navigated using the methods
 *     defined in that interface. Both these methods and the internal iterator
 *     objects provided to <code>foreach</code> are backed by the same
 *     state (e.g. the position of the iterator and its current value).
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.intliterator.php
 */
class IntlIterator implements Iterator
{
    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    public function valid()
    {
    }
}

/**
 * Objects of this class can be obtained from
 *     <code>IntlBreakIterator</code> objects. While the break
 *     iterators provide a sequence of boundary positions when iterated,
 *     <code>IntlPartsIterator</code> objects provide, as a
 *     convenience, the text fragments comprehended between two successive
 *     boundaries.
 *
 * @link http://www.php.net/manual/en/class.intlpartsiterator.php
 */
class IntlPartsIterator extends IntlIterator
{
    public function getBreakIterator()
    {
    }
}

/**
 * A subclass of <code>IntlBreakIterator</code> that encapsulates
 *     ICU break iterators whose behavior is specified using a set of rules. This
 *     is the most common kind of break iterators.
 *
 * @link http://www.php.net/manual/en/class.intlrulebasedbreakiterator.php
 */
class IntlRuleBasedBreakIterator extends IntlBreakIterator
{
    /**
     * @param mixed $rules
     * @param mixed|null $areCompiled
     */
    public function __construct($rules, $areCompiled = null)
    {
    }

    public function getBinaryRules()
    {
    }

    public function getRules()
    {
    }

    public function getRuleStatus()
    {
    }

    public function getRuleStatusVec()
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
    private function __construct()
    {
    }

    /**
     * @param mixed $zoneId
     */
    public static function countEquivalentIDs($zoneId)
    {
    }

    public static function createDefault()
    {
    }

    /**
     * @param mixed|null $countryOrRawOffset
     */
    public static function createEnumeration($countryOrRawOffset = null)
    {
    }

    /**
     * @param mixed $zoneId
     */
    public static function createTimeZone($zoneId)
    {
    }

    /**
     * @param mixed $zoneType
     * @param mixed|null $region
     * @param mixed|null $rawOffset
     */
    public static function createTimeZoneIDEnumeration($zoneType, $region = null, $rawOffset = null)
    {
    }

    /**
     * @param mixed $zoneId
     */
    public static function fromDateTimeZone($zoneId)
    {
    }

    /**
     * @param mixed $zoneId
     * @param mixed|null $isSystemID
     */
    public static function getCanonicalID($zoneId, &$isSystemID = null)
    {
    }

    /**
     * @param mixed|null $isDaylight
     * @param mixed|null $style
     * @param mixed|null $locale
     */
    public function getDisplayName($isDaylight = null, $style = null, $locale = null)
    {
    }

    public function getDSTSavings()
    {
    }

    /**
     * @param mixed $zoneId
     * @param mixed $index
     */
    public static function getEquivalentID($zoneId, $index)
    {
    }

    public function getErrorCode()
    {
    }

    public function getErrorMessage()
    {
    }

    public static function getGMT()
    {
    }

    public function getID()
    {
    }

    /**
     * @param mixed $date
     * @param mixed $local
     * @param mixed $rawOffset
     * @param mixed $dstOffset
     */
    public function getOffset($date, $local, &$rawOffset, &$dstOffset)
    {
    }

    public function getRawOffset()
    {
    }

    /**
     * @param mixed $zoneId
     */
    public static function getRegion($zoneId)
    {
    }

    public static function getTZDataVersion()
    {
    }

    public static function getUnknown()
    {
    }

    /**
     * @param IntlTimeZone $otherTimeZone
     */
    public function hasSameRules($otherTimeZone)
    {
    }

    public function toDateTimeZone()
    {
    }

    public function useDaylightTime()
    {
    }
}

/**
 * Examples of identifiers include:
 *     <ul>
 *      <li>en-US (English, United States)</li>
 *      <li>zh-Hant-TW (Chinese, Traditional Script, Taiwan)</li>
 *      <li>fr-CA, fr-FR (French for Canada and France respectively)</li>
 *     </ul>
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/class.locale.php
 */
class Locale
{
    /**
     * @param mixed $header
     */
    public static function acceptFromHttp($header)
    {
    }

    /**
     * @param mixed $locale
     */
    public static function canonicalize($locale)
    {
    }

    /**
     * @param mixed $subtags
     */
    public static function composeLocale($subtags)
    {
    }

    /**
     * @param mixed $langtag
     * @param mixed $locale
     * @param mixed|null $canonicalize
     */
    public static function filterMatches($langtag, $locale, $canonicalize = null)
    {
    }

    /**
     * @param mixed $locale
     */
    public static function getAllVariants($locale)
    {
    }

    public static function getDefault()
    {
    }

    /**
     * @param mixed $locale
     * @param mixed|null $in_locale
     */
    public static function getDisplayLanguage($locale, $in_locale = null)
    {
    }

    /**
     * @param mixed $locale
     * @param mixed|null $in_locale
     */
    public static function getDisplayName($locale, $in_locale = null)
    {
    }

    /**
     * @param mixed $locale
     * @param mixed|null $in_locale
     */
    public static function getDisplayRegion($locale, $in_locale = null)
    {
    }

    /**
     * @param mixed $locale
     * @param mixed|null $in_locale
     */
    public static function getDisplayScript($locale, $in_locale = null)
    {
    }

    /**
     * @param mixed $locale
     * @param mixed|null $in_locale
     */
    public static function getDisplayVariant($locale, $in_locale = null)
    {
    }

    /**
     * @param mixed $locale
     */
    public static function getKeywords($locale)
    {
    }

    /**
     * @param mixed $locale
     */
    public static function getPrimaryLanguage($locale)
    {
    }

    /**
     * @param mixed $locale
     */
    public static function getRegion($locale)
    {
    }

    /**
     * @param mixed $locale
     */
    public static function getScript($locale)
    {
    }

    /**
     * @param mixed $langtag
     * @param mixed $locale
     * @param mixed|null $canonicalize
     * @param mixed|null $default
     */
    public static function lookup($langtag, $locale, $canonicalize = null, $default = null)
    {
    }

    /**
     * @param mixed $locale
     */
    public static function parseLocale($locale)
    {
    }

    /**
     * @param mixed $locale
     */
    public static function setDefault($locale)
    {
    }
}

/**
 * <ul>
 *      <li>
 *       
 *        ICU formatting documentation
 *       
 *      </li>
 *      <li>
 *       
 *        ICU message formatting description
 *       
 *      </li>
 *      <li>
 *       ICU message formatters
 *      </li>
 *      <li>
 *       ICU choice formatters
 *      </li>
 *     </ul>
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/class.messageformatter.php
 */
class MessageFormatter
{
    /**
     * @param mixed $locale
     * @param mixed $pattern
     */
    public function __construct($locale, $pattern)
    {
    }

    /**
     * @param mixed $locale
     * @param mixed $pattern
     */
    public static function create($locale, $pattern)
    {
    }

    /**
     * @param mixed $args
     */
    public function format($args)
    {
    }

    /**
     * @param mixed $locale
     * @param mixed $pattern
     * @param mixed $args
     */
    public static function formatMessage($locale, $pattern, $args)
    {
    }

    public function getErrorCode()
    {
    }

    public function getErrorMessage()
    {
    }

    public function getLocale()
    {
    }

    public function getPattern()
    {
    }

    /**
     * @param mixed $source
     */
    public function parse($source)
    {
    }

    /**
     * @param mixed $locale
     * @param mixed $pattern
     * @param mixed $args
     */
    public static function parseMessage($locale, $pattern, $args)
    {
    }

    /**
     * @param mixed $pattern
     */
    public function setPattern($pattern)
    {
    }
}

/**
 * The Unicode Consortium has defined a number of normalization forms
 *     reflecting the various needs of applications:
 *     <ul>
 *      <li>Normalization Form D (NFD) - Canonical Decomposition</li>
 *      <li>
 *       Normalization Form C (NFC) - Canonical Decomposition followed by
 *       Canonical Composition
 *      </li>
 *      <li>
 *       Normalization Form KD (NFKD) - Compatibility Decomposition
 *      </li>
 *      <li>
 *       Normalization Form KC (NFKC) - Compatibility Decomposition followed by
 *       Canonical Composition
 *      </li>
 *     </ul>
 *     The different forms are defined in terms of a set of transformations on
 *     the text, transformations that are expressed by both an algorithm and a
 *     set of data files.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/class.normalizer.php
 */
class Normalizer
{
    /**
     * @param mixed $input
     * @param mixed|null $form
     */
    public static function isNormalized($input, $form = null)
    {
    }

    /**
     * @param mixed $input
     * @param mixed|null $form
     */
    public static function normalize($input, $form = null)
    {
    }
}

/**
 * For currencies you can use currency format type to create a formatter that
 *     returns a string with the formatted number and the appropriate currency
 *     sign. Of course, the NumberFormatter class is unaware of exchange rates
 *     so, the number output is the same regardless of the specified currency.
 *     This means that the same number has different monetary values depending on
 *     the currency locale. If the number is 9988776.65 the results will be:
 *     <ul>
 *      <li>9 988 776,65 € in France</li>
 *      <li>9.988.776,65 € in Germany</li>
 *      <li>$9,988,776.65 in the United States</li>
 *     </ul>
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/class.numberformatter.php
 */
class NumberFormatter
{
    /**
     * @param mixed $locale
     * @param mixed $style
     * @param mixed|null $pattern
     */
    public function __construct($locale, $style, $pattern = null)
    {
    }

    /**
     * @param mixed $locale
     * @param mixed $style
     * @param mixed|null $pattern
     */
    public static function create($locale, $style, $pattern = null)
    {
    }

    /**
     * @param mixed $num
     * @param mixed|null $type
     */
    public function format($num, $type = null)
    {
    }

    /**
     * @param mixed $num
     * @param mixed $currency
     */
    public function formatCurrency($num, $currency)
    {
    }

    /**
     * @param mixed $attr
     */
    public function getAttribute($attr)
    {
    }

    public function getErrorCode()
    {
    }

    public function getErrorMessage()
    {
    }

    /**
     * @param mixed|null $type
     */
    public function getLocale($type = null)
    {
    }

    public function getPattern()
    {
    }

    /**
     * @param mixed $attr
     */
    public function getSymbol($attr)
    {
    }

    /**
     * @param mixed $attr
     */
    public function getTextAttribute($attr)
    {
    }

    /**
     * @param mixed $string
     * @param mixed|null $type
     * @param mixed|null $position
     */
    public function parse($string, $type = null, &$position = null)
    {
    }

    /**
     * @param mixed $string
     * @param mixed $currency
     * @param mixed|null $position
     */
    public function parseCurrency($string, &$currency, &$position = null)
    {
    }

    /**
     * @param mixed $attr
     * @param mixed $value
     */
    public function setAttribute($attr, $value)
    {
    }

    /**
     * @param mixed $pattern
     */
    public function setPattern($pattern)
    {
    }

    /**
     * @param mixed $attr
     * @param mixed $symbol
     */
    public function setSymbol($attr, $symbol)
    {
    }

    /**
     * @param mixed $attr
     * @param mixed $value
     */
    public function setTextAttribute($attr, $value)
    {
    }
}

/**
 * <ul>
 *      <li>
 *       
 *        ICU Resource Management
 *       
 *      </li>
 *      <li>
 *       ICU Data
 *      </li>
 *     </ul>
 *
 * @since PHP 5 >= 5.3.2, PHP 7, PECL intl >= 2.0.0
 *
 * @link http://www.php.net/manual/en/class.resourcebundle.php
 */
class ResourceBundle implements Traversable
{
    /**
     * @param mixed $locale
     * @param mixed $bundlename
     * @param mixed|null $fallback
     */
    public function __construct($locale, $bundlename, $fallback = null)
    {
    }

    /**
     * Count all elements in an array, or something in an object
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.count.php
     */
    public function count(): int
    {
    }

    /**
     * @param mixed $locale
     * @param mixed $bundlename
     * @param mixed|null $fallback
     */
    public static function create($locale, $bundlename, $fallback = null)
    {
    }

    /**
     * @param mixed $index
     * @param mixed|null $fallback
     */
    public function get($index, $fallback = null)
    {
    }

    public function getErrorCode()
    {
    }

    public function getErrorMessage()
    {
    }

    /**
     * @param mixed $bundlename
     */
    public static function getLocales($bundlename)
    {
    }
}

/**
 * This class is provided because Unicode contains large number of characters
 *     and incorporates the varied writing systems of the world and their incorrect
 *     usage can expose programs or systems to possible security attacks using
 *     characters similarity.
 *
 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
 *
 * @link http://www.php.net/manual/en/class.spoofchecker.php
 */
class Spoofchecker
{
    public function __construct()
    {
    }

    /**
     * @param mixed $s1
     * @param mixed $s2
     * @param mixed|null $error
     */
    public function areConfusable($s1, $s2, &$error = null)
    {
    }

    /**
     * @param mixed $text
     * @param mixed|null $error
     */
    public function isSuspicious($text, &$error = null)
    {
    }

    /**
     * @param mixed $locale_list
     */
    public function setAllowedLocales($locale_list)
    {
    }

    /**
     * @param mixed $checks
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
    final private function __construct()
    {
    }

    /**
     * @param mixed $id
     * @param mixed|null $direction
     */
    public static function create($id, $direction = null)
    {
    }

    /**
     * @param mixed $rules
     * @param mixed|null $direction
     */
    public static function createFromRules($rules, $direction = null)
    {
    }

    public function createInverse()
    {
    }

    public function getErrorCode()
    {
    }

    public function getErrorMessage()
    {
    }

    public static function listIDs()
    {
    }

    /**
     * @param mixed $subject
     * @param mixed|null $start
     * @param mixed|null $end
     */
    public function transliterate($subject, $start = null, $end = null)
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
     * @param mixed|null $destination_encoding
     * @param mixed|null $source_encoding
     */
    public function __construct($destination_encoding = null, $source_encoding = null)
    {
    }

    /**
     * @param mixed $str
     * @param mixed|null $reverse
     */
    public function convert($str, $reverse = null)
    {
    }

    /**
     * @param mixed $reason
     * @param mixed $source
     * @param mixed $codePoint
     * @param mixed $error
     */
    public function fromUCallback($reason, $source, $codePoint, &$error)
    {
    }

    /**
     * @param mixed $name
     */
    public static function getAliases($name)
    {
    }

    public static function getAvailable()
    {
    }

    public function getDestinationEncoding()
    {
    }

    public function getDestinationType()
    {
    }

    public function getErrorCode()
    {
    }

    public function getErrorMessage()
    {
    }

    public function getSourceEncoding()
    {
    }

    public function getSourceType()
    {
    }

    public static function getStandards()
    {
    }

    public function getSubstChars()
    {
    }

    /**
     * @param mixed|null $reason
     */
    public static function reasonText($reason = null)
    {
    }

    /**
     * @param mixed $encoding
     */
    public function setDestinationEncoding($encoding)
    {
    }

    /**
     * @param mixed $encoding
     */
    public function setSourceEncoding($encoding)
    {
    }

    /**
     * @param mixed $chars
     */
    public function setSubstChars($chars)
    {
    }

    /**
     * @param mixed $reason
     * @param mixed $source
     * @param mixed $codeUnits
     * @param mixed $error
     */
    public function toUCallback($reason, $source, $codeUnits, &$error)
    {
    }

    /**
     * @param mixed $str
     * @param mixed $toEncoding
     * @param mixed $fromEncoding
     * @param array[]|null $options
     */
    public static function transcode($str, $toEncoding, $fromEncoding, $options = null)
    {
    }
}

/**
 * Sort array maintaining index association
 *
 * @param Collator $object
 * @param array[] $arr
 * @param mixed|null $sort_flags
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.asort.php
 */
function collator_asort($object, &$arr, $sort_flags = null): bool
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
function collator_compare($object, $arg1, $arg2): int
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
function collator_create($arg1)
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
function collator_get_attribute($object, $arg1): int
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
function collator_get_error_code($object): int
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
function collator_get_error_message($object): string
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
function collator_get_locale($object, $arg1): string
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
function collator_get_sort_key($object, $arg1): string
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
function collator_get_strength($object): int
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
function collator_set_attribute($object, $arg1, $arg2): bool
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
function collator_set_strength($object, $arg1): bool
{
}

/**
 * Sort array using specified collator
 *
 * @param Collator $object
 * @param array[] $arr
 * @param mixed|null $sort_flags
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.sort.php
 */
function collator_sort($object, &$arr, $sort_flags = null): bool
{
}

/**
 * Sort array using specified collator and sort keys
 *
 * @param Collator $coll
 * @param array[] $arr
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.sortwithsortkeys.php
 */
function collator_sort_with_sort_keys($coll, &$arr): bool
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
function datefmt_create($locale, $date_type, $time_type, $timezone_str = null, $calendar = null, $pattern = null)
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
function datefmt_get_calendar_object($mf)
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
function datefmt_get_timezone($mf)
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
function intlcal_add($calendar, $field, $amount)
{
}

/**
 * @param IntlCalendar $calendar
 * @param IntlCalendar $otherCalendar
 */
function intlcal_after($calendar, $otherCalendar)
{
}

/**
 * @param IntlCalendar $calendar
 * @param IntlCalendar $otherCalendar
 */
function intlcal_before($calendar, $otherCalendar)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed|null $field
 */
function intlcal_clear($calendar, $field = null)
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
function intlcal_equals($calendar, $otherCalendar)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $when
 * @param mixed $field
 */
function intlcal_field_difference($calendar, $when, $field)
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
function intlcal_get($calendar, $field)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $field
 */
function intlcal_get_actual_maximum($calendar, $field)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $field
 */
function intlcal_get_actual_minimum($calendar, $field)
{
}

function intlcal_get_available_locales()
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $dayOfWeek
 */
function intlcal_get_day_of_week_type($calendar, $dayOfWeek)
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
function intlcal_get_error_code($calendar): int
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
function intlcal_get_error_message($calendar): string
{
}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_first_day_of_week($calendar)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $field
 */
function intlcal_get_greatest_minimum($calendar, $field)
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
function intlcal_get_least_maximum($calendar, $field)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $localeType
 */
function intlcal_get_locale($calendar, $localeType)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $field
 */
function intlcal_get_maximum($calendar, $field)
{
}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_minimal_days_in_first_week($calendar)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $field
 */
function intlcal_get_minimum($calendar, $field)
{
}

function intlcal_get_now()
{
}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_repeated_wall_time_option($calendar)
{
}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_skipped_wall_time_option($calendar)
{
}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_time($calendar)
{
}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_time_zone($calendar)
{
}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_type($calendar)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $dayOfWeek
 */
function intlcal_get_weekend_transition($calendar, $dayOfWeek)
{
}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_in_daylight_time($calendar)
{
}

/**
 * @param IntlCalendar $calendar
 * @param IntlCalendar $otherCalendar
 */
function intlcal_is_equivalent_to($calendar, $otherCalendar)
{
}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_is_lenient($calendar)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $field
 */
function intlcal_is_set($calendar, $field)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed|null $date
 */
function intlcal_is_weekend($calendar, $date = null)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $field
 * @param mixed|null $amountOrUpOrDown
 */
function intlcal_roll($calendar, $field, $amountOrUpOrDown = null)
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
function intlcal_set($calendar, $fieldOrYear, $valueOrMonth, $dayOfMonth = null, $hour = null, $minute = null, $second = null)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $dayOfWeek
 */
function intlcal_set_first_day_of_week($calendar, $dayOfWeek)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $isLenient
 */
function intlcal_set_lenient($calendar, $isLenient)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $numberOfDays
 */
function intlcal_set_minimal_days_in_first_week($calendar, $numberOfDays)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $wallTimeOption
 */
function intlcal_set_repeated_wall_time_option($calendar, $wallTimeOption)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $wallTimeOption
 */
function intlcal_set_skipped_wall_time_option($calendar, $wallTimeOption)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $date
 */
function intlcal_set_time($calendar, $date)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $timeZone
 */
function intlcal_set_time_zone($calendar, $timeZone)
{
}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_to_date_time($calendar)
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
function intlgregcal_get_gregorian_change($calendar)
{
}

/**
 * @param IntlGregorianCalendar $calendar
 * @param mixed $year
 */
function intlgregcal_is_leap_year($calendar, $year)
{
}

/**
 * @param IntlGregorianCalendar $calendar
 * @param mixed $date
 */
function intlgregcal_set_gregorian_change($calendar, $date)
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
function intltz_from_date_time_zone($dateTimeZone)
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
function intltz_get_display_name($timeZone, $isDaylight = null, $style = null, $locale = null)
{
}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_get_dst_savings($timeZone)
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
function intltz_get_error_code($timeZone): int
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
function intltz_get_error_message($timeZone): string
{
}

function intltz_get_gmt()
{
}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_get_id($timeZone)
{
}

/**
 * @param IntlTimeZone $timeZone
 * @param mixed $date
 * @param mixed $local
 * @param mixed $rawOffset
 * @param mixed $dstOffset
 */
function intltz_get_offset($timeZone, $date, $local, &$rawOffset, &$dstOffset)
{
}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_get_raw_offset($timeZone)
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
function intltz_has_same_rules($timeZone, $otherTimeZone = null)
{
}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_to_date_time_zone($timeZone)
{
}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_use_daylight_time($timeZone)
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
function msgfmt_create($locale, $pattern)
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
 *    form
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
function numfmt_create($locale, $style, $pattern = null)
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
function resourcebundle_create($locale, $bundlename, $fallback = null)
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
function transliterator_create($id, $direction = null)
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
function transliterator_create_from_rules($rules, $direction = null)
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
function transliterator_create_inverse($orig_trans)
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
function transliterator_get_error_code($trans): int
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
function transliterator_get_error_message($trans): string
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
