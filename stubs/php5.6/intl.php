<?php
// Start of extension: intl
// - parsed on POSIX with PHP 5.6.34 (extension version 1.1.0)
// - parsed on Windows with PHP 5.6.34 (extension version 1.1.0)

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
     * The Alternate attribute is used to control the handling of the so called
     * variable characters in the UCA: whitespace, punctuation and symbols. If
     * Alternate is set to <code>NonIgnorable</code>
     * (N), then differences among these characters are of the same importance
     * as differences among letters. If Alternate is set to
     * <code>Shifted</code>
     * (S), then these characters are of only minor importance. The
     * <code>Shifted</code> value is often used in combination with
     * <code>Strength</code>
     * set to Quaternary. In such a case, whitespace, punctuation, and symbols
     * are considered when comparing strings, but only if all other aspects of
     * the strings (base letters, accents, and case) are identical. If
     * Alternate is not set to Shifted, then there is no difference between a
     * Strength of 3 and a Strength of 4. For more information and examples,
     * see Variable_Weighting in the
     * UCA.
     * The reason the Alternate values are not simply
     * <code>On</code> and <code>Off</code>
     * is that additional Alternate values may be added in the future. The UCA
     * option Blanked is expressed with Strength set to 3, and Alternate set to
     * Shifted. The default for most locales is NonIgnorable. If Shifted is
     * selected, it may be slower if there are many strings that are the same
     * except for punctuation; sort key length will not be affected unless the
     * strength level is also increased.
     * Possible values are:
     * <ul>
     * <li><code>Collator::NON_IGNORABLE</code>(default)</li>
     * <li><code>Collator::SHIFTED</code></li>
     * <li><code>Collator::DEFAULT_VALUE</code></li>
     * </ul>
     * <blockquote>
     * <title>ALTERNATE_HANDLING rules</title>
     * <ul>
     * <li>
     * S=3, A=N di Silva &lt; Di Silva &lt; diSilva &lt; U.S.A. &lt; USA
     * </li>
     * <li>
     * S=3, A=S di Silva = diSilva &lt; Di Silva &lt; U.S.A. = USA
     * </li>
     * <li>
     * S=4, A=S di Silva &lt; diSilva &lt; Di Silva &lt; U.S.A. &lt; USA
     * </li>
     * </ul>
     * </blockquote>
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.collator.php#intl.collator-constants
     */
    const ALTERNATE_HANDLING = 1;

    /**
     * The Case_First attribute is used to control whether uppercase letters
     * come before lowercase letters or vice versa, in the absence of other
     * differences in the strings. The possible values are
     * <code>Uppercase_First</code>
     * (U) and <code>Lowercase_First</code>
     * (L), plus the standard <code>Default</code>
     * and <code>Off</code>.
     * There is almost no difference between the Off and Lowercase_First
     * options in terms of results, so typically users will not use
     * Lowercase_First: only Off or Uppercase_First. (People interested in the
     * detailed differences between X and L should consult the <code>Collation
     * Customization</code>). Specifying either L or U won't affect string comparison
     * performance, but will affect the sort key length.
     * Possible values are:
     * <ul>
     * <li><code>Collator::OFF</code>(default)</li>
     * <li><code>Collator::LOWER_FIRST</code></li>
     * <li><code>Collator::UPPER_FIRST</code></li>
     * <li><code>Collator:DEFAULT</code></li>
     * </ul>
     * <blockquote>
     * <title>CASE_FIRST rules</title>
     * <ul>
     * <li>C=X or C=L "china" &lt; "China" &lt; "denmark" &lt; "Denmark"</li>
     * <li>C=U "China" &lt; "china" &lt; "Denmark" &lt; "denmark"</li>
     * </ul>
     * </blockquote>
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.collator.php#intl.collator-constants
     */
    const CASE_FIRST = 2;

    /**
     * The Case_Level attribute is used when ignoring accents but not case. In
     * such a situation, set Strength to be <code>Primary</code>,
     * and Case_Level to be <code>On</code>.
     * In most locales, this setting is Off by default. There is a small
     * string comparison performance and sort key impact if this attribute is
     * set to be <code>On</code>.
     * Possible values are:
     * <ul>
     * <li><code>Collator::OFF</code>(default)</li>
     * <li><code>Collator::ON</code></li>
     * <li><code>Collator::DEFAULT_VALUE</code></li>
     * </ul>
     * <blockquote>
     * <title>CASE_LEVEL rules</title>
     * <ul>
     * <li>S=1, E=X role = Role = rôle</li>
     * <li>S=1, E=O role = rôle &lt; Role</li>
     * </ul>
     * </blockquote>
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.collator.php#intl.collator-constants
     */
    const CASE_LEVEL = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.collator.php#intl.collator-constants
     */
    const DEFAULT_STRENGTH = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.collator.php#intl.collator-constants
     */
    const DEFAULT_VALUE = -1;

    /**
     * Sort strings with different accents from the back of the string. This
     * attribute is automatically set to
     * <code>On</code>
     * for the French locales and a few others. Users normally would not need
     * to explicitly set this attribute. There is a string comparison
     * performance cost when it is set <code>On</code>,
     * but sort key length is unaffected. Possible values are:
     * <ul>
     * <li><code>Collator::ON</code></li>
     * <li><code>Collator::OFF</code>(default)</li>
     * <li><code>Collator::DEFAULT_VALUE</code></li>
     * </ul>
     * <blockquote>
     * <title>FRENCH_COLLATION rules</title>
     * <ul>
     * <li>F=OFF cote &lt; coté &lt; côte &lt; côté </li>
     * <li>F=ON cote &lt; côte &lt; coté &lt; côté</li>
     * </ul>
     * </blockquote>
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.collator.php#intl.collator-constants
     */
    const FRENCH_COLLATION = 0;

    /**
     * Compatibility with JIS x 4061 requires the introduction of an additional
     * level to distinguish Hiragana and Katakana characters. If compatibility
     * with that standard is required, then this attribute should be set
     * <code>On</code>,
     * and the strength set to Quaternary. This will affect sort key length
     * and string comparison string comparison performance.
     * Possible values are:
     * <ul>
     * <li><code>Collator::OFF</code>(default)</li>
     * <li><code>Collator::ON</code></li>
     * <li><code>Collator::DEFAULT_VALUE</code></li>
     * </ul>
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.collator.php#intl.collator-constants
     */
    const HIRAGANA_QUATERNARY_MODE = 6;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.collator.php#intl.collator-constants
     */
    const IDENTICAL = 15;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.collator.php#intl.collator-constants
     */
    const LOWER_FIRST = 24;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.collator.php#intl.collator-constants
     */
    const NON_IGNORABLE = 21;

    /**
     * The Normalization setting determines whether text is thoroughly
     * normalized or not in comparison. Even if the setting is off (which is
     * the default for many locales), text as represented in common usage will
     * compare correctly (for details, see UTN #5). Only if the accent marks
     * are in noncanonical order will there be a problem. If the setting is
     * <code>On</code>,
     * then the best results are guaranteed for all possible text input.
     * There is a medium string comparison performance cost if this attribute
     * is <code>On</code>,
     * depending on the frequency of sequences that require normalization.
     * There is no significant effect on sort key length. If the input text is
     * known to be in NFD or NFKD normalization forms, there is no need to
     * enable this Normalization option.
     * Possible values are:
     * <ul>
     * <li><code>Collator::OFF</code>(default)</li>
     * <li><code>Collator::ON</code></li>
     * <li><code>Collator::DEFAULT_VALUE</code></li>
     * </ul>
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.collator.php#intl.collator-constants
     */
    const NORMALIZATION_MODE = 4;

    /**
     * When turned on, this attribute generates a collation key for the numeric
     * value of substrings of digits. This is a way to get '100' to sort AFTER
     * '2'.
     * Possible values are:
     * <ul>
     * <li><code>Collator::OFF</code>(default)</li>
     * <li><code>Collator::ON</code></li>
     * <li><code>Collator::DEFAULT_VALUE</code></li>
     * </ul>
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.collator.php#intl.collator-constants
     */
    const NUMERIC_COLLATION = 7;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.collator.php#intl.collator-constants
     */
    const OFF = 16;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.collator.php#intl.collator-constants
     */
    const ON = 17;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.collator.php#intl.collator-constants
     */
    const PRIMARY = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.collator.php#intl.collator-constants
     */
    const QUATERNARY = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.collator.php#intl.collator-constants
     */
    const SECONDARY = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.collator.php#intl.collator-constants
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
     * The ICU Collation Service supports many levels of comparison (named
     * "Levels", but also known as "Strengths"). Having these categories
     * enables ICU to sort strings precisely according to local conventions.
     * However, by allowing the levels to be selectively employed, searching
     * for a string in text can be performed with various matching conditions.
     * For more detailed information, see
     * <code>collator_set_strength</code> chapter.
     * Possible values are:
     * <ul>
     * <li><code>Collator::PRIMARY</code></li>
     * <li><code>Collator::SECONDARY</code></li>
     * <li><code>Collator::TERTIARY</code>(default)</li>
     * <li><code>Collator::QUATERNARY</code></li>
     * <li><code>Collator::IDENTICAL</code></li>
     * <li><code>Collator::DEFAULT_VALUE</code></li>
     * </ul>
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.collator.php#intl.collator-constants
     */
    const STRENGTH = 5;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.collator.php#intl.collator-constants
     */
    const TERTIARY = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.collator.php#intl.collator-constants
     */
    const UPPER_FIRST = 25;

    /**
     * Create a collator
     *
     * @param string $locale The locale whose collation rules should be used. Special values for
     * locales can be passed in - if null is passed for the locale, the
     * default locale's collation rules will be used. If "root" is passed,
     * UCA rules will be used.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.construct.php
     */
    public function __construct($locale)
    {
    }

    /**
     * Sort array maintaining index association
     *
     * @param array $arr Array of strings to sort.
     * @param int $sort_flag Optional sorting type, one of the following:
     * <ul>
     * <code>Collator::SORT_REGULAR</code>
     * - compare items normally (don't change types)
     * <code>Collator::SORT_NUMERIC</code>
     * - compare items numerically
     * <code>Collator::SORT_STRING</code>
     * - compare items as strings
     * </ul>
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.asort.php
     */
    public function asort(array &$arr, $sort_flag = null)
    {
    }

    /**
     * Compare two Unicode strings
     *
     * @param string $str1 The first string to compare.
     * @param string $str2 The second string to compare.
     *
     * @return int Return comparison result:
     * <ul>
     * 1 if <code>str1</code> is <code>greater</code> than
     * <code>str2</code> ;
     * 0 if <code>str1</code> is <code>equal</code> to
     * <code>str2</code>;
     * -1 if <code>str1</code> is <code>less</code> than
     * <code>str2</code> .
     * </ul>
     * On error
     * <code>boolean</code>
     * <code>FALSE</code>
     * is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.compare.php
     */
    public function compare($str1, $str2)
    {
    }

    /**
     * Create a collator
     *
     * @param string $locale The locale containing the required collation rules. Special values for
     * locales can be passed in - if null is passed for the locale, the
     * default locale collation rules will be used. If empty string ("") or
     * "root" are passed, UCA rules will be used.
     *
     * @return Collator Return new instance of <code>Collator</code> object, or <code>NULL</code>
     * on error.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.create.php
     */
    public static function create($locale)
    {
    }

    /**
     * Get collation attribute value
     *
     * @param int $attr Attribute to get value for.
     *
     * @return int Attribute value, or <code>boolean</code> <code>FALSE</code> on error.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.getattribute.php
     */
    public function getAttribute($attr)
    {
    }

    /**
     * Get collator's last error code
     *
     * @return int Error code returned by the last Collator <code>API</code> function call.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.geterrorcode.php
     */
    public function getErrorCode()
    {
    }

    /**
     * Get text for collator's last error code
     *
     * @return string Description of an error occurred in the last Collator <code>API</code> function call.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.geterrormessage.php
     */
    public function getErrorMessage()
    {
    }

    /**
     * Get the locale name of the collator
     *
     * @param int $type You can choose between valid and actual locale (
     * <code>Locale::VALID_LOCALE</code> and
     * <code>Locale::ACTUAL_LOCALE</code>,
     * respectively).
     *
     * @return string Real locale name from which the collation data comes. If the collator was
     * instantiated from rules or an error occurred, returns
     * <code>boolean</code> <code>FALSE</code>.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.getlocale.php
     */
    public function getLocale($type)
    {
    }

    /**
     * Get sorting key for a string
     *
     * @param string $str The string to produce the key from.
     * @param mixed $arg2
     *
     * @return string Returns the collation key for the string. Collation keys can be compared directly instead of strings.
     *
     * @since PHP 5 >= 5.3.11, PHP 7, PECL intl >= 1.0.3
     *
     * @link http://www.php.net/manual/en/collator.getsortkey.php
     */
    public function getSortKey($str, $arg2)
    {
    }

    /**
     * Get current collation strength
     *
     * @return int Returns current collation strength, or <code>boolean</code> <code>FALSE</code> on error.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.getstrength.php
     */
    public function getStrength()
    {
    }

    /**
     * Set collation attribute
     *
     * @param int $attr Attribute.
     * @param int $val Attribute value.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.setattribute.php
     */
    public function setAttribute($attr, $val)
    {
    }

    /**
     * Set collation strength
     *
     * @param int $strength Strength to set.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.setstrength.php
     */
    public function setStrength($strength)
    {
    }

    /**
     * Sort array using specified collator
     *
     * @param array $arr Array of strings to sort.
     * @param int $sort_flag Optional sorting type, one of the following:
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.sort.php
     */
    public function sort(array &$arr, $sort_flag = null)
    {
    }

    /**
     * Sort array using specified collator and sort keys
     *
     * @param array $arr Array of strings to sort
     * @param mixed $flags
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/collator.sortwithsortkeys.php
     */
    public function sortWithSortKeys(array &$arr, $flags = null)
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
     *
     * @link http://www.php.net/manual/en/class.intlbreakiterator.php#intlbreakiterator.constants
     */
    const DONE = -1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlbreakiterator.php#intlbreakiterator.constants
     */
    const LINE_HARD = 100;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlbreakiterator.php#intlbreakiterator.constants
     */
    const LINE_HARD_LIMIT = 200;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlbreakiterator.php#intlbreakiterator.constants
     */
    const LINE_SOFT = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlbreakiterator.php#intlbreakiterator.constants
     */
    const LINE_SOFT_LIMIT = 100;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlbreakiterator.php#intlbreakiterator.constants
     */
    const SENTENCE_SEP = 100;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlbreakiterator.php#intlbreakiterator.constants
     */
    const SENTENCE_SEP_LIMIT = 200;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlbreakiterator.php#intlbreakiterator.constants
     */
    const SENTENCE_TERM = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlbreakiterator.php#intlbreakiterator.constants
     */
    const SENTENCE_TERM_LIMIT = 100;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlbreakiterator.php#intlbreakiterator.constants
     */
    const WORD_IDEO = 400;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlbreakiterator.php#intlbreakiterator.constants
     */
    const WORD_IDEO_LIMIT = 500;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlbreakiterator.php#intlbreakiterator.constants
     */
    const WORD_KANA = 300;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlbreakiterator.php#intlbreakiterator.constants
     */
    const WORD_KANA_LIMIT = 400;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlbreakiterator.php#intlbreakiterator.constants
     */
    const WORD_LETTER = 200;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlbreakiterator.php#intlbreakiterator.constants
     */
    const WORD_LETTER_LIMIT = 300;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlbreakiterator.php#intlbreakiterator.constants
     */
    const WORD_NONE = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlbreakiterator.php#intlbreakiterator.constants
     */
    const WORD_NONE_LIMIT = 100;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlbreakiterator.php#intlbreakiterator.constants
     */
    const WORD_NUMBER = 100;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlbreakiterator.php#intlbreakiterator.constants
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
     * @param string $locale
     *
     * @return IntlBreakIterator
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.createcharacterinstance.php
     */
    public static function createCharacterInstance($locale = null)
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
    public static function createCodePointInstance()
    {
    }

    /**
     * Create break iterator for logically possible line breaks
     *
     * @param string $locale
     *
     * @return IntlBreakIterator
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.createlineinstance.php
     */
    public static function createLineInstance($locale = null)
    {
    }

    /**
     * Create break iterator for sentence breaks
     *
     * @param string $locale
     *
     * @return IntlBreakIterator
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.createsentenceinstance.php
     */
    public static function createSentenceInstance($locale = null)
    {
    }

    /**
     * Create break iterator for title-casing breaks
     *
     * @param string $locale
     *
     * @return IntlBreakIterator
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.createtitleinstance.php
     */
    public static function createTitleInstance($locale = null)
    {
    }

    /**
     * Create break iterator for word breaks
     *
     * @param string $locale
     *
     * @return IntlBreakIterator
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.createwordinstance.php
     */
    public static function createWordInstance($locale = null)
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
    public function current()
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
    public function first()
    {
    }

    /**
     * Advance the iterator to the first boundary following specified offset
     *
     * @param int $offset
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.following.php
     */
    public function following($offset)
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
    public function getErrorCode()
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
    public function getErrorMessage()
    {
    }

    /**
     * Get the locale associated with the object
     *
     * @param string $locale_type
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.getlocale.php
     */
    public function getLocale($locale_type)
    {
    }

    /**
     * Create iterator for navigating fragments between boundaries
     *
     * @param string $key_type
     *
     * @return IntlPartsIterator
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.getpartsiterator.php
     */
    public function getPartsIterator($key_type = null)
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
    public function getText()
    {
    }

    /**
     * Tell whether an offset is a boundaryʼs offset
     *
     * @param int $offset
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.isboundary.php
     */
    public function isBoundary($offset)
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
    public function last()
    {
    }

    /**
     * Advance the iterator the next boundary
     *
     * @param int $offset
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.next.php
     */
    public function next($offset = null)
    {
    }

    /**
     * Set the iterator position to the first boundary before an offset
     *
     * @param int $offset
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.preceding.php
     */
    public function preceding($offset)
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
    public function previous()
    {
    }

    /**
     * Set the text being scanned
     *
     * @param string $text
     *
     * @return bool
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlbreakiterator.settext.php
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
    /**
     * Friday.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const DOW_FRIDAY = 6;

    /**
     * Monday.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const DOW_MONDAY = 2;

    /**
     * Saturday.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const DOW_SATURDAY = 7;

    /**
     * Sunday.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const DOW_SUNDAY = 1;

    /**
     * Thursday.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const DOW_THURSDAY = 5;

    /**
     * Tuesday.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const DOW_TUESDAY = 3;

    /**
     * Output of <code>IntlCalendar::getDayOfWeekType</code>
     * indicating a day of week is a weekday.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const DOW_TYPE_WEEKDAY = 0;

    /**
     * Output of <code>IntlCalendar::getDayOfWeekType</code>
     * indicating a day of week belongs to the weekend.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const DOW_TYPE_WEEKEND = 1;

    /**
     * Output of <code>IntlCalendar::getDayOfWeekType</code>
     * indicating the weekend ends during the given day of week.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const DOW_TYPE_WEEKEND_CEASE = 3;

    /**
     * Output of <code>IntlCalendar::getDayOfWeekType</code>
     * indicating the weekend begins during the given day of week.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const DOW_TYPE_WEEKEND_OFFSET = 2;

    /**
     * Wednesday.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const DOW_WEDNESDAY = 4;

    /**
     * Calendar field indicating whether a time is before noon (value
     * <code>0</code>, AM) or after (<code>1</code>). Midnight is
     * AM, noon is PM.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_AM_PM = 9;

    /**
     * Calendar field for the day of the month. The same as
     * <code>IntlCalendar::FIELD_DAY_OF_MONTH</code>, which has a
     * clearer name.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_DATE = 5;

    /**
     * Alias for <code>IntlCalendar::FIELD_DATE</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_DAY_OF_MONTH = 5;

    /**
     * Calendar field for the day of the week. Its values start with
     * <code>1</code> (Sunday, see <code>IntlCalendar::DOW_SUNDAY</code>
     * and subsequent constants) and the last valid value is 7 (Saturday).
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_DAY_OF_WEEK = 7;

    /**
     * Given a day of the week (Sunday, Monday, …), this calendar
     * field assigns an ordinal to such a day of the week in a specific month.
     * Thus, if the value of this field is <code>1</code> and the value of the day of the
     * week is <code>2</code> (Monday), then the set day of the month is the 1st Monday of the
     * month; the maximum value is <code>5</code>.
     * Additionally, the value <code>0</code> and negative values are
     * also allowed. The value <code>0</code> encompasses the seven days
     * that occur immediately before the first seven days of a month (which
     * therefore have a ‘day of week in month’ with value
     * <code>1</code>). Negative values starts counting from the end of
     * the month – <code>-1</code> points to the last occurrence of a
     * day of the week in a month, <code>-2</code> to the second last,
     * and so on.
     * Unlike <code>IntlCalendar::FIELD_WEEK_OF_MONTH</code>
     * and <code>IntlCalendar::FIELD_WEEK_OF_YEAR</code>,
     * this value does not depend on
     * <code>IntlCalendar::getFirstDayOfWeek</code> or on
     * <code>IntlCalendar::getMinimalDaysInFirstWeek</code>. The first
     * Monday is the first Monday, even if it occurs in a week that belongs to
     * the previous month.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_DAY_OF_WEEK_IN_MONTH = 8;

    /**
     * Calendar field for the day of the year. For the Gregorian calendar,
     * starts with <code>1</code> and ends with
     * <code>365</code> or <code>366</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_DAY_OF_YEAR = 6;

    /**
     * Calendar field for the localized day of the week. This is a value
     * betwen <code>1</code> and <code>7</code>,
     * <code>1</code> being used for the day of the week that matches
     * the value returned by
     * <code>IntlCalendar::getFirstDayOfWeek</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_DOW_LOCAL = 18;

    /**
     * Calendar field for the daylight saving time offset of the calendarʼs
     * timezone, in milliseconds, if active for calendarʼs time.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_DST_OFFSET = 16;

    /**
     * Calendar field numerically representing an era, for instance
     * <code>1</code> for AD and <code>0</code> for BC in the
     * Gregorian/Julian calendars and <code>235</code> for the Heisei
     * (平成) era in the Japanese calendar. Not all calendars have more than
     * one era.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_ERA = 0;

    /**
     * Calendar field for a year number representation that is continuous
     * across eras. For the Gregorian calendar, the value of this field
     * matches that of <code>IntlCalendar::FIELD_YEAR</code> for AD
     * years; a BC year <code>y</code> is represented by <code>-y +
     * 1</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_EXTENDED_YEAR = 19;

    /**
     * The total number of fields.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_FIELD_COUNT = 23;

    /**
     * Calendar field for the hour, without specifying whether itʼs in the
     * morning or in the afternoon. Valid values are <code>0</code> to
     * <code>11</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_HOUR = 10;

    /**
     * Calendar field for the full (24h) hour of the day. Valid values are
     * <code>0</code> to <code>23</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_HOUR_OF_DAY = 11;

    /**
     * Calendar field whose value is <code>1</code> for indicating a
     * leap month and <code>0</code> otherwise.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_IS_LEAP_MONTH = 22;

    /**
     * Calendar field for a modified Julian day number. It is different from a
     * conventional Julian day number in that its transitions occur at local
     * zone midnight rather than at noon UTC. It uniquely identifies a date.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_JULIAN_DAY = 20;

    /**
     * Calendar field the milliseconds component of the time.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_MILLISECOND = 14;

    /**
     * Calendar field encompassing the information in
     * <code>IntlCalendar::FIELD_HOUR_OF_DAY</code>,
     * <code>IntlCalendar::FIELD_MINUTE</code>,
     * <code>IntlCalendar::FIELD_SECOND</code> and
     * <code>IntlCalendar::FIELD_MILLISECOND</code>. Range is from the
     * <code>0</code> to <code>24 * 3600 * 1000 - 1</code>. It is
     * not the amount of milliseconds ellapsed in the day since on DST
     * transitions it will have discontinuities analog to those of the wall
     * time.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_MILLISECONDS_IN_DAY = 21;

    /**
     * Calendar field for the minutes component of the time.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_MINUTE = 12;

    /**
     * Calendar field for the month. The month sequence is zero-based, so
     * Janurary (here used to signify the first month of the calendar; this
     * may be called another name, such as Muharram in the Islamic calendar)
     * is represented by <code>0</code>, February by
     * <code>1</code>, …, December by <code>11</code> and, for
     * calendars that have it, the 13th or leap month by
     * <code>12</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_MONTH = 2;

    /**
     * Calendar field for the seconds component of the time.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_SECOND = 13;

    /**
     * Calendar field for the number of the week of the month. This depends on
     * which day of the week is deemed to start the
     * week and the minimal number of days
     * in a week.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_WEEK_OF_MONTH = 4;

    /**
     * Calendar field for the number of the week of the year. This depends on
     * which day of the week is deemed to start the
     * week and the minimal number of days
     * in a week.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_WEEK_OF_YEAR = 3;

    /**
     * Calendar field for the year. This is not unique across eras. If the
     * calendar type has more than one era, generally the minimum value for
     * this field will be <code>1</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_YEAR = 1;

    /**
     * Calendar field representing the year for week of year
     * purposes.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_YEAR_WOY = 17;

    /**
     * Calendar field indicating the raw offset of the timezone, in
     * milliseconds. The raw offset is the timezone offset, excluding any
     * offset due to daylight saving time.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const FIELD_ZONE_OFFSET = 15;

    /**
     * Output of <code>IntlCalendar::getSkippedWallTimeOption</code>
     * indicating that wall times in the skipped range should refer to the
     * same instant as wall times with one hour less and of
     * <code>IntlCalendar::getRepeatedWallTimeOption</code>
     * indicating the wall times in the repeated range should refer to the
     * instant of the first occurrence of such wall time.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const WALLTIME_FIRST = 1;

    /**
     * Output of <code>IntlCalendar::getSkippedWallTimeOption</code>
     * indicating that wall times in the skipped range should refer to the
     * same instant as wall times with one hour after and of
     * <code>IntlCalendar::getRepeatedWallTimeOption</code>
     * indicating the wall times in the repeated range should refer to the
     * instant of the second occurrence of such wall time.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
     */
    const WALLTIME_LAST = 0;

    /**
     * Output of <code>IntlCalendar::getSkippedWallTimeOption</code>
     * indicating that wall times in the skipped range should refer to the
     * instant when the daylight saving time transition occurs (begins).
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlcalendar.php#intlcalendar.constants
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
     * @param int $field
     * @param int $amount The signed amount to add to the current field. If the amount is positive,
     * the instant will be moved forward; if it is negative, the instant wil be
     * moved into the past. The unit is implicit to the field type. For instance,
     * hours for <code>IntlCalendar::FIELD_HOUR_OF_DAY</code>.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.add.php
     */
    public function add($field, $amount)
    {
    }

    /**
     * Whether this objectʼs time is after that of the passed object
     *
     * @param IntlCalendar $other The calendar whose time will be checked against the primary objectʼs time.
     *
     * @return bool Returns <code>TRUE</code> if this objectʼs current time is after that of the
     * <code>calendar</code> argumentʼs time. Returns <code>FALSE</code> otherwise.
     * Also returns <code>FALSE</code> on failure. You can use exceptions or
     * <code>intl_get_error_code</code> to detect error conditions.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.after.php
     */
    public function after(IntlCalendar $other)
    {
    }

    /**
     * Whether this objectʼs time is before that of the passed object
     *
     * @param IntlCalendar $other The calendar whose time will be checked against the primary objectʼs time.
     *
     * @return bool Returns <code>TRUE</code> if this objectʼs current time is before that of the
     * <code>calendar</code> argumentʼs time. Returns <code>FALSE</code> otherwise.
     * Also returns <code>FALSE</code> on failure. You can use exceptions or
     * <code>intl_get_error_code</code> to detect error conditions.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.before.php
     */
    public function before(IntlCalendar $other)
    {
    }

    /**
     * Clear a field or all fields
     *
     * @param int|null $field
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure. Failure can only occur is
     * invalid arguments are provided.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.clear.php
     */
    public function clear($field = null)
    {
    }

    /**
     * Create a new IntlCalendar
     *
     * @param mixed|null $timeZone The timezone to use.
     * @param string|null $locale A locale to use or <code>NULL</code> to use the default locale.
     *
     * @return IntlCalendar The created <code>IntlCalendar</code> instance or <code>NULL</code> on
     * failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.createinstance.php
     */
    public static function createInstance($timeZone = null, $locale = "")
    {
    }

    /**
     * Compare time of two IntlCalendar objects for equality
     *
     * @param IntlCalendar $other The calendar to compare with the primary object.
     *
     * @return bool Returns <code>TRUE</code> if the current time of both this and the passed in
     * <code>IntlCalendar</code> object are the same, or <code>FALSE</code>
     * otherwise. The value <code>FALSE</code> can also be returned on failure. This can only
     * happen if bad arguments are passed in. In any case, the two cases can be
     * distinguished by calling <code>intl_get_error_code</code>.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.equals.php
     */
    public function equals(IntlCalendar $other)
    {
    }

    /**
     * Calculate difference between given time and this objectʼs time
     *
     * @param float $when The time against which to compare the quantity represented by the
     * <code>field</code>. For the result to be positive, the time
     * given for this parameter must be ahead of the time of the object the
     * method is being invoked on.
     * @param int $field The field that represents the quantity being compared.
     *
     * @return int Returns a (signed) difference of time in the unit associated with the
     * specified field or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.fielddifference.php
     */
    public function fieldDifference($when, $field)
    {
    }

    /**
     * Create an IntlCalendar from a DateTime object or string
     *
     * @param mixed $dateTime A <code>DateTime</code> object or a <code>string</code> that
     * can be passed to <code>DateTime::__construct</code>.
     *
     * @return IntlCalendar The created <code>IntlCalendar</code> object or <code>NULL</code> in case of
     * failure. If a <code>string</code> is passed, any exception that occurs
     * inside the <code>DateTime</code> constructor is propagated.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a2
     *
     * @link http://www.php.net/manual/en/intlcalendar.fromdatetime.php
     */
    public static function fromDateTime($dateTime)
    {
    }

    /**
     * Get the value for a field
     *
     * @param int $field
     *
     * @return int An integer with the value of the time field.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.get.php
     */
    public function get($field)
    {
    }

    /**
     * The maximum value for a field, considering the objectʼs current time
     *
     * @param int $field
     *
     * @return int An <code>int</code> representing the maximum value in the units associated
     * with the given <code>field</code> or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getactualmaximum.php
     */
    public function getActualMaximum($field)
    {
    }

    /**
     * The minimum value for a field, considering the objectʼs current time
     *
     * @param int $field
     *
     * @return int An <code>int</code> representing the minimum value in the fieldʼs
     * unit or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getactualminimum.php
     */
    public function getActualMinimum($field)
    {
    }

    /**
     * Get array of locales for which there is data
     *
     * @return array An <code>array</code> of <code>string</code>s, one for which locale.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getavailablelocales.php
     */
    public static function getAvailableLocales()
    {
    }

    /**
     * Tell whether a day is a weekday, weekend or a day that has a transition between the two
     *
     * @param int $dayOfWeek One of the constants <code>IntlCalendar::DOW_SUNDAY</code>,
     * <code>IntlCalendar::DOW_MONDAY</code>, …,
     * <code>IntlCalendar::DOW_SATURDAY</code>.
     *
     * @return int Returns one of the constants
     * <code>IntlCalendar::DOW_TYPE_WEEKDAY</code>,
     * <code>IntlCalendar::DOW_TYPE_WEEKEND</code>,
     * <code>IntlCalendar::DOW_TYPE_WEEKEND_OFFSET</code> or
     * <code>IntlCalendar::DOW_TYPE_WEEKEND_CEASE</code> or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getdayofweektype.php
     */
    public function getDayOfWeekType($dayOfWeek)
    {
    }

    /**
     * Get last error code on the object
     *
     * @return int An ICU error code indicating either success, failure or a warning.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.geterrorcode.php
     */
    public function getErrorCode()
    {
    }

    /**
     * Get last error message on the object
     *
     * @return string The error message associated with last error that occurred in a function call
     * on this object, or a string indicating the non-existance of an error.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.geterrormessage.php
     */
    public function getErrorMessage()
    {
    }

    /**
     * Get the first day of the week for the calendarʼs locale
     *
     * @return int One of the constants <code>IntlCalendar::DOW_SUNDAY</code>,
     * <code>IntlCalendar::DOW_MONDAY</code>, …,
     * <code>IntlCalendar::DOW_SATURDAY</code> or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getfirstdayofweek.php
     */
    public function getFirstDayOfWeek()
    {
    }

    /**
     * Get the largest local minimum value for a field
     *
     * @param int $field
     *
     * @return int An <code>int</code> representing a field value, in the fieldʼs
     * unit, or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getgreatestminimum.php
     */
    public function getGreatestMinimum($field)
    {
    }

    /**
     * Get set of locale keyword values
     *
     * @param string $key The locale keyword for which relevant values are to be queried. Only
     * <code>'calendar'</code> is supported.
     * @param string $locale The locale onto which the keyword/value pair are to be appended.
     * @param bool $commonlyUsed Whether to show only the values commonly used for the specified locale.
     *
     * @return Iterator An iterator that yields strings with the locale keyword
     * values or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getkeywordvaluesforlocale.php
     */
    public static function getKeywordValuesForLocale($key, $locale, $commonlyUsed)
    {
    }

    /**
     * Get the smallest local maximum for a field
     *
     * @param int $field
     *
     * @return int An <code>int</code> representing a field value in the fieldʼs
     * unit or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getleastmaximum.php
     */
    public function getLeastMaximum($field)
    {
    }

    /**
     * Get the locale associated with the object
     *
     * @param int $localeType Whether to fetch the actual locale (the locale from which the calendar
     * data originates, with <code>Locale::ACTUAL_LOCALE</code>) or the
     * valid locale, i.e., the most specific locale supported by ICU relatively
     * to the requested locale – see <code>Locale::VALID_LOCALE</code>.
     * From the most general to the most specific, the locales are ordered in
     * this fashion – actual locale, valid locale, requested locale.
     *
     * @return string A locale string or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getlocale.php
     */
    public function getLocale($localeType)
    {
    }

    /**
     * Get the global maximum value for a field
     *
     * @param int $field
     *
     * @return int An <code>int</code> representing a field value in the fieldʼs
     * unit or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getmaximum.php
     */
    public function getMaximum($field)
    {
    }

    /**
     * Get minimal number of days the first week in a year or month can have
     *
     * @return int An <code>int</code> representing a number of days or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getminimaldaysinfirstweek.php
     */
    public function getMinimalDaysInFirstWeek()
    {
    }

    /**
     * Get the global minimum value for a field
     *
     * @param int $field
     *
     * @return int An <code>int</code> representing a value for the given
     * field in the fieldʼs unit or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getminimum.php
     */
    public function getMinimum($field)
    {
    }

    /**
     * Get number representing the current time
     *
     * @return float A <code>float</code> representing a number of milliseconds since the epoch,
     * not counting leap seconds.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getnow.php
     */
    public static function getNow()
    {
    }

    /**
     * Get behavior for handling repeating wall time
     *
     * @return int One of the constants <code>IntlCalendar::WALLTIME_FIRST</code> or
     * <code>IntlCalendar::WALLTIME_LAST</code>.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getrepeatedwalltimeoption.php
     */
    public function getRepeatedWallTimeOption()
    {
    }

    /**
     * Get behavior for handling skipped wall time
     *
     * @return int One of the constants <code>IntlCalendar::WALLTIME_FIRST</code>,
     * <code>IntlCalendar::WALLTIME_LAST</code> or
     * <code>IntlCalendar::WALLTIME_NEXT_VALID</code>.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getskippedwalltimeoption.php
     */
    public function getSkippedWallTimeOption()
    {
    }

    /**
     * Get time currently represented by the object
     *
     * @return float A <code>float</code> representing the number of milliseconds elapsed since the
     * reference time (1 Jan 1970 00:00:00 UTC).
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.gettime.php
     */
    public function getTime()
    {
    }

    /**
     * Get the objectʼs timezone
     *
     * @return IntlTimeZone An <code>IntlTimeZone</code> object corresponding to the one used
     * internally in this object.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.gettimezone.php
     */
    public function getTimeZone()
    {
    }

    /**
     * Get the calendar type
     *
     * @return string A <code>string</code> representing the calendar type, such as
     * <code>'gregorian'</code>, <code>'islamic'</code>, etc.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.gettype.php
     */
    public function getType()
    {
    }

    /**
     * Get time of the day at which weekend begins or ends
     *
     * @param string $dayOfWeek One of the constants <code>IntlCalendar::DOW_SUNDAY</code>,
     * <code>IntlCalendar::DOW_MONDAY</code>, …,
     * <code>IntlCalendar::DOW_SATURDAY</code>.
     *
     * @return int The number of milliseconds into the day at which the weekend begins or
     * ends or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.getweekendtransition.php
     */
    public function getWeekendTransition($dayOfWeek)
    {
    }

    /**
     * Whether the objectʼs time is in Daylight Savings Time
     *
     * @return bool Returns <code>TRUE</code> if the date is in Daylight Savings Time, <code>FALSE</code> otherwise.
     * The value <code>FALSE</code> may also be returned on failure, for instance after
     * specifying invalid field values on non-lenient mode; use exceptions or query
     * <code>intl_get_error_code</code> to disambiguate.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.indaylighttime.php
     */
    public function inDaylightTime()
    {
    }

    /**
     * Whether another calendar is equal but for a different time
     *
     * @param IntlCalendar $other The other calendar against which the comparison is to be made.
     *
     * @return bool Assuming there are no argument errors, returns <code>TRUE</code> iif the calendars are
     * equivalent except possibly for their set time.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.isequivalentto.php
     */
    public function isEquivalentTo(IntlCalendar $other)
    {
    }

    /**
     * Whether date/time interpretation is in lenient mode
     *
     * @return bool A <code>bool</code> representing whether the calendar is set to lenient mode.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.islenient.php
     */
    public function isLenient()
    {
    }

    /**
     * Whether a field is set
     *
     * @param int $field
     *
     * @return bool Assuming there are no argument errors, returns <code>TRUE</code> iif the field is set.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.isset.php
     */
    public function isSet($field)
    {
    }

    /**
     * Whether a certain date/time is in the weekend
     *
     * @param float|null $date An optional timestamp representing the number of milliseconds since the
     * epoch, excluding leap seconds. If <code>NULL</code>, this objectʼs current time is
     * used instead.
     *
     * @return bool A <code>bool</code> indicating whether the given or this objectʼs time occurs
     * in a weekend.
     * The value <code>FALSE</code> may also be returned on failure, for instance after giving
     * a date out of bounds on non-lenient mode; use exceptions or query
     * <code>intl_get_error_code</code> to disambiguate.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.isweekend.php
     */
    public function isWeekend($date = null)
    {
    }

    /**
     * Add value to field without carrying into more significant fields
     *
     * @param int $field
     * @param mixed $amountOrUpOrDown The (signed) amount to add to the field, <code>TRUE</code> for rolling up (adding
     * <code>1</code>), or <code>FALSE</code> for rolling down (subtracting
     * <code>1</code>).
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.roll.php
     */
    public function roll($field, $amountOrUpOrDown)
    {
    }

    /**
     * Set a time field or several common fields at once
     *
     * @param int $field
     * @param int $value The new value of the given field.
     * @param mixed $dayOfMonth
     * @param mixed $hour
     * @param mixed $minute
     * @param mixed $second
     *
     * @return bool Returns <code>TRUE</code> on success and <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.set.php
     */
    public function set($field, $value, $dayOfMonth = null, $hour = null, $minute = null, $second = null)
    {
    }

    /**
     * Set the day on which the week is deemed to start
     *
     * @param int $dayOfWeek One of the constants <code>IntlCalendar::DOW_SUNDAY</code>,
     * <code>IntlCalendar::DOW_MONDAY</code>, …,
     * <code>IntlCalendar::DOW_SATURDAY</code>.
     *
     * @return bool Returns <code>TRUE</code> on success. Failure can only happen due to invalid parameters.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.setfirstdayofweek.php
     */
    public function setFirstDayOfWeek($dayOfWeek)
    {
    }

    /**
     * Set whether date/time interpretation is to be lenient
     *
     * @param bool $isLenient Use <code>TRUE</code> to activate the lenient mode; <code>FALSE</code> otherwise.
     *
     * @return bool Returns <code>TRUE</code> on success. Failure can only happen due to invalid parameters.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.setlenient.php
     */
    public function setLenient($isLenient)
    {
    }

    /**
     * Set minimal number of days the first week in a year or month can have
     *
     * @param int $minimalDays The number of minimal days to set.
     *
     * @return bool <code>TRUE</code> on success, <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.1, PHP 7
     *
     * @link http://www.php.net/manual/en/intlcalendar.setminimaldaysinfirstweek.php
     */
    public function setMinimalDaysInFirstWeek($minimalDays)
    {
    }

    /**
     * Set behavior for handling repeating wall times at negative timezone offset transitions
     *
     * @param int $wallTimeOption One of the constants <code>IntlCalendar::WALLTIME_FIRST</code> or
     * <code>IntlCalendar::WALLTIME_LAST</code>.
     *
     * @return bool Returns <code>TRUE</code> on success. Failure can only happen due to invalid parameters.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.setrepeatedwalltimeoption.php
     */
    public function setRepeatedWallTimeOption($wallTimeOption)
    {
    }

    /**
     * Set behavior for handling skipped wall times at positive timezone offset transitions
     *
     * @param int $wallTimeOption One of the constants <code>IntlCalendar::WALLTIME_FIRST</code>,
     * <code>IntlCalendar::WALLTIME_LAST</code> or
     * <code>IntlCalendar::WALLTIME_NEXT_VALID</code>.
     *
     * @return bool Returns <code>TRUE</code> on success. Failure can only happen due to invalid parameters.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.setskippedwalltimeoption.php
     */
    public function setSkippedWallTimeOption($wallTimeOption)
    {
    }

    /**
     * Set the calendar time in milliseconds since the epoch
     *
     * @param float $date An instant represented by the number of number of milliseconds between
     * such instant and the epoch, ignoring leap seconds.
     *
     * @return bool Returns <code>TRUE</code> on success and <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.settime.php
     */
    public function setTime($date)
    {
    }

    /**
     * Set the timezone used by this calendar
     *
     * @param mixed $timeZone The new timezone to be used by this calendar. It can be specified in the
     * following ways:
     * [[FILE:reference/intl/inctimezoneparam.xml]]
     *
     * @return bool Returns <code>TRUE</code> on success and <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intlcalendar.settimezone.php
     */
    public function setTimeZone($timeZone)
    {
    }

    /**
     * Convert an IntlCalendar into a DateTime object
     *
     * @return DateTime A <code>DateTime</code> object with the same timezone as this
     * object (though using PHPʼs database instead of ICUʼs) and the same time,
     * except for the smaller precision (second precision instead of millisecond).
     * Returns <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a2
     *
     * @link http://www.php.net/manual/en/intlcalendar.todatetime.php
     */
    public function toDateTime()
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
    public function getLastCodePoint()
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
     * Completely specified style (Tuesday, April 12, 1952 AD or 3:30:42pm PST)
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/intl.php#intl.intldateformatter-constants
     */
    const FULL = 0;

    /**
     * Gregorian Calendar
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/intl.php#intl.intldateformatter-constants
     */
    const GREGORIAN = 1;

    /**
     * Long style (January 12, 1952 or 3:30:32pm)
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/intl.php#intl.intldateformatter-constants
     */
    const LONG = 1;

    /**
     * Medium style (Jan 12, 1952)
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/intl.php#intl.intldateformatter-constants
     */
    const MEDIUM = 2;

    /**
     * Do not include this element
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/intl.php#intl.intldateformatter-constants
     */
    const NONE = -1;

    /**
     * Most abbreviated style, only essential data (12/13/52 or 3:30pm)
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/intl.php#intl.intldateformatter-constants
     */
    const SHORT = 3;

    /**
     * Non-Gregorian Calendar
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/intl.php#intl.intldateformatter-constants
     */
    const TRADITIONAL = 0;

    /**
     * Create a date formatter
     *
     * @param string $locale Locale to use when formatting or parsing or <code>NULL</code> to use the value
     * specified in the ini setting intl.default_locale.
     * @param int $datetype Date type to use (<code>none</code>, <code>short</code>,
     * <code>medium</code>, <code>long</code>,
     * <code>full</code>). This is one of the IntlDateFormatter
     * constants. It can also be <code>NULL</code>, in which case ICUʼs default
     * date type will be used.
     * @param int $timetype Time type to use (<code>none</code>, <code>short</code>,
     * <code>medium</code>, <code>long</code>,
     * <code>full</code>). This is one of the IntlDateFormatter
     * constants. It can also be <code>NULL</code>, in which case ICUʼs default
     * time type will be used.
     * @param mixed|null $timezone Time zone ID. The default (and the one used if <code>NULL</code> is given) is the
     * one returned by <code>date_default_timezone_get</code> or, if
     * applicable, that of the <code>IntlCalendar</code> object passed
     * for the <code>calendar</code> parameter. This ID must be a
     * valid identifier on ICUʼs database or an ID representing an
     * explicit offset, such as <code>GMT-05:30</code>.
     * @param mixed|null $calendar Calendar to use for formatting or parsing. The default value is <code>NULL</code>,
     * which corresponds to <code>IntlDateFormatter::GREGORIAN</code>.
     * This can either be one of the
     * IntlDateFormatter
     * calendar constants or an <code>IntlCalendar</code>. Any
     * <code>IntlCalendar</code> object passed will be clone; it will
     * not be changed by the <code>IntlDateFormatter</code>. This will
     * determine the calendar type used (gregorian, islamic, persian, etc.) and,
     * if <code>NULL</code> is given for the <code>timezone</code> parameter,
     * also the timezone used.
     * @param string|null $pattern Optional pattern to use when formatting or parsing.
     * Possible patterns are documented at http://userguide.icu-project.org/formatparse/datetime.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.create.php
     */
    public function __construct($locale, $datetype, $timetype, $timezone = null, $calendar = null, $pattern = "")
    {
    }

    /**
     * Create a date formatter
     *
     * @param string $locale Locale to use when formatting or parsing or <code>NULL</code> to use the value
     * specified in the ini setting intl.default_locale.
     * @param int $datetype Date type to use (<code>none</code>, <code>short</code>,
     * <code>medium</code>, <code>long</code>,
     * <code>full</code>). This is one of the IntlDateFormatter
     * constants. It can also be <code>NULL</code>, in which case ICUʼs default
     * date type will be used.
     * @param int $timetype Time type to use (<code>none</code>, <code>short</code>,
     * <code>medium</code>, <code>long</code>,
     * <code>full</code>). This is one of the IntlDateFormatter
     * constants. It can also be <code>NULL</code>, in which case ICUʼs default
     * time type will be used.
     * @param mixed|null $timezone Time zone ID. The default (and the one used if <code>NULL</code> is given) is the
     * one returned by <code>date_default_timezone_get</code> or, if
     * applicable, that of the <code>IntlCalendar</code> object passed
     * for the <code>calendar</code> parameter. This ID must be a
     * valid identifier on ICUʼs database or an ID representing an
     * explicit offset, such as <code>GMT-05:30</code>.
     * @param mixed|null $calendar Calendar to use for formatting or parsing. The default value is <code>NULL</code>,
     * which corresponds to <code>IntlDateFormatter::GREGORIAN</code>.
     * This can either be one of the
     * IntlDateFormatter
     * calendar constants or an <code>IntlCalendar</code>. Any
     * <code>IntlCalendar</code> object passed will be clone; it will
     * not be changed by the <code>IntlDateFormatter</code>. This will
     * determine the calendar type used (gregorian, islamic, persian, etc.) and,
     * if <code>NULL</code> is given for the <code>timezone</code> parameter,
     * also the timezone used.
     * @param string|null $pattern Optional pattern to use when formatting or parsing.
     * Possible patterns are documented at http://userguide.icu-project.org/formatparse/datetime.
     *
     * @return IntlDateFormatter The created <code>IntlDateFormatter</code> or <code>FALSE</code> in case of
     * failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.create.php
     */
    public static function create($locale, $datetype, $timetype, $timezone = null, $calendar = null, $pattern = "")
    {
    }

    /**
     * Format the date/time value as a string
     *
     * @param mixed $value Value to format. This may be a <code>DateTimeInterface</code> object, an
     * <code>IntlCalendar</code> object, a <code>numeric</code> type
     * representing a (possibly fractional) number of seconds since epoch or an
     * <code>array</code> in the format output by
     * <code>localtime</code>.
     * @param mixed $array
     *
     * @return string The formatted string or, if an error occurred, <code>FALSE</code>.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.format.php
     */
    public function format($value = null, $array = null)
    {
    }

    /**
     * Formats an object
     *
     * @param mixed $object An object of type <code>IntlCalendar</code> or
     * <code>DateTime</code>. The timezone information in the object
     * will be used.
     * @param mixed|null $format How to format the date/time. This can either be an <code>array</code> with
     * two elements (first the date style, then the time style, these being one
     * of the constants <code>IntlDateFormatter::NONE</code>,
     * <code>IntlDateFormatter::SHORT</code>,
     * <code>IntlDateFormatter::MEDIUM</code>,
     * <code>IntlDateFormatter::LONG</code>,
     * <code>IntlDateFormatter::FULL</code>), an <code>integer</code> with
     * the value of one of these constants (in which case it will be used both
     * for the time and the date) or a <code>string</code> with the format
     * described in the ICU
     * documentation. If <code>NULL</code>, the default style will be used.
     * @param string|null $locale The locale to use, or <code>NULL</code> to use the default one.
     *
     * @return string A string with result or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL intl >= 3.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.formatobject.php
     */
    public static function formatObject($object, $format = null, $locale = null)
    {
    }

    /**
     * Get the calendar type used for the IntlDateFormatter
     *
     * @return int The calendar
     * type being used by the formatter. Either
     * <code>IntlDateFormatter::TRADITIONAL</code> or
     * <code>IntlDateFormatter::GREGORIAN</code>.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.getcalendar.php
     */
    public function getCalendar()
    {
    }

    /**
     * Get copy of formatterʼs calendar object
     *
     * @return IntlCalendar A copy of the internal calendar object used by this formatter.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL intl >= 3.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.getcalendarobject.php
     */
    public function getCalendarObject()
    {
    }

    /**
     * Get the datetype used for the IntlDateFormatter
     *
     * @return int The current date type value of the formatter.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.getdatetype.php
     */
    public function getDateType()
    {
    }

    /**
     * Get the error code from last operation
     *
     * @return int The error code, one of UErrorCode values. Initial value is U_ZERO_ERROR.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.geterrorcode.php
     */
    public function getErrorCode()
    {
    }

    /**
     * Get the error text from the last operation
     *
     * @return string Description of the last error.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.geterrormessage.php
     */
    public function getErrorMessage()
    {
    }

    /**
     * Get the locale used by formatter
     *
     * @return string the locale of this formatter or 'false' if error
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.getlocale.php
     */
    public function getLocale()
    {
    }

    /**
     * Get the pattern used for the IntlDateFormatter
     *
     * @return string The pattern string being used to format/parse.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.getpattern.php
     */
    public function getPattern()
    {
    }

    /**
     * Get the timetype used for the IntlDateFormatter
     *
     * @return int The current date type value of the formatter.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.gettimetype.php
     */
    public function getTimeType()
    {
    }

    /**
     * Get formatterʼs timezone
     *
     * @return IntlTimeZone The associated <code>IntlTimeZone</code>
     * object or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL intl >= 3.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.gettimezone.php
     */
    public function getTimeZone()
    {
    }

    /**
     * Get the timezone-id used for the IntlDateFormatter
     *
     * @return string ID string for the time zone used by this formatter.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.gettimezoneid.php
     */
    public function getTimeZoneId()
    {
    }

    /**
     * Get the lenient used for the IntlDateFormatter
     *
     * @return bool <code>TRUE</code> if parser is lenient, <code>FALSE</code> if parser is strict. By default the parser is lenient.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.islenient.php
     */
    public function isLenient()
    {
    }

    /**
     * Parse string to a field-based time value
     *
     * @param string $value string to convert to a time
     * @param int $position Position at which to start the parsing in $value (zero-based).
     * If no error occurs before $value is consumed, $parse_pos will contain -1
     * otherwise it will contain the position at which parsing ended .
     * If $parse_pos &gt; strlen($value), the parse fails immediately.
     *
     * @return array Localtime compatible array of integers : contains 24 hour clock value in tm_hour field
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.localtime.php
     */
    public function localtime($value, &$position = null)
    {
    }

    /**
     * Parse string to a timestamp value
     *
     * @param string $value string to convert to a time
     * @param int $position Position at which to start the parsing in $value (zero-based).
     * If no error occurs before $value is consumed, $parse_pos will contain -1
     * otherwise it will contain the position at which parsing ended (and the error occurred).
     * This variable will contain the end position if the parse fails.
     * If $parse_pos &gt; strlen($value), the parse fails immediately.
     *
     * @return int timestamp parsed value, or <code>FALSE</code> if value can't be parsed.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.parse.php
     */
    public function parse($value, &$position = null)
    {
    }

    /**
     * Sets the calendar type used by the formatter
     *
     * @param mixed $which This can either be: the calendar
     * type to use (default is
     * <code>IntlDateFormatter::GREGORIAN</code>, which is also used if
     * <code>NULL</code> is specified) or an
     * <code>IntlCalendar</code> object.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.setcalendar.php
     */
    public function setCalendar($which)
    {
    }

    /**
     * Set the leniency of the parser
     *
     * @param bool $lenient Sets whether the parser is lenient or not, default is <code>TRUE</code> (lenient).
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.setlenient.php
     */
    public function setLenient($lenient)
    {
    }

    /**
     * Set the pattern used for the IntlDateFormatter
     *
     * @param string $pattern New pattern string to use.
     * Possible patterns are documented at http://userguide.icu-project.org/formatparse/datetime.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * Bad formatstrings are usually the cause of the failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.setpattern.php
     */
    public function setPattern($pattern)
    {
    }

    /**
     * Sets formatterʼs timezone
     *
     * @param mixed $zone The timezone to use for this formatter. This can be specified in the
     * following forms:
     *
     * @return bool Returns <code>TRUE</code> on success and <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL intl >= 3.0.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.settimezone.php
     */
    public function setTimeZone($zone)
    {
    }

    /**
     * Sets the time zone to use
     *
     * @param string $zone The time zone ID string of the time zone to use.
     * If <code>NULL</code> or the empty string, the default time zone for the runtime is used.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PECL intl >= 1.0.0
     *
     * @deprecated as of PHP 5 >= 5.5.0
     *
     * @link http://www.php.net/manual/en/intldateformatter.settimezoneid.php
     */
    public function setTimeZoneId($zone)
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
     * @param IntlTimeZone $tz
     * @param string $locale
     * @param mixed $dayOfMonth
     * @param mixed $hour
     * @param mixed $minute
     * @param mixed $second
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlgregoriancalendar.construct.php
     */
    public function __construct(IntlTimeZone $tz = null, $locale = null, $dayOfMonth = null, $hour = null, $minute = null, $second = null)
    {
    }

    /**
     * Get the Gregorian Calendar change date
     *
     * @return float Returns the change date or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlgregoriancalendar.getgregorianchange.php
     */
    public function getGregorianChange()
    {
    }

    /**
     * Determine if the given year is a leap year
     *
     * @param int $year
     *
     * @return bool Returns <code>TRUE</code> for leap years, <code>FALSE</code> otherwise and on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlgregoriancalendar.isleapyear.php
     */
    public function isLeapYear($year)
    {
    }

    /**
     * Set the Gregorian Calendar the change date
     *
     * @param float $date
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intlgregoriancalendar.setgregorianchange.php
     */
    public function setGregorianChange($date)
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
    public function key()
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
    public function valid()
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
     *
     * @link http://www.php.net/manual/en/class.intlpartsiterator.php#intlpartsiterator.constants
     */
    const KEY_LEFT = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlpartsiterator.php#intlpartsiterator.constants
     */
    const KEY_RIGHT = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intlpartsiterator.php#intlpartsiterator.constants
     */
    const KEY_SEQUENTIAL = 0;

    /**
     * Get IntlBreakIterator backing this parts iterator
     *
     * @return IntlBreakIterator
     *
     * @link http://www.php.net/manual/en/intlpartsiterator.getbreakiterator.php
     */
    public function getBreakIterator()
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
     * @param mixed $areCompiled
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
    public function getBinaryRules()
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
    public function getRules()
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
    public function getRuleStatus()
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
    /**
     * @var int
     */
    const DISPLAY_GENERIC_LOCATION = 8;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.intltimezone.php#intltimezone.constants
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
     *
     * @link http://www.php.net/manual/en/class.intltimezone.php#intltimezone.constants
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
     * @param string $zoneId
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.countequivalentids.php
     */
    public static function countEquivalentIDs($zoneId)
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
    public static function createDefault()
    {
    }

    /**
     * Get an enumeration over time zone IDs associated with the
     * given country or offset
     *
     * @param mixed $countryOrRawOffset
     *
     * @return IntlIterator
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.createenumeration.php
     */
    public static function createEnumeration($countryOrRawOffset = null)
    {
    }

    /**
     * Create a timezone object for the given ID
     *
     * @param string $zoneId
     *
     * @return IntlTimeZone
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.createtimezone.php
     */
    public static function createTimeZone($zoneId)
    {
    }

    /**
     * Get an enumeration over system time zone IDs with the given filter conditions
     *
     * @param int $zoneType
     * @param string $region
     * @param int $rawOffset
     *
     * @return IntlIterator Returns <code>IntlIterator</code> or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intltimezone.createtimezoneidenumeration.php
     */
    public static function createTimeZoneIDEnumeration($zoneType, $region = null, $rawOffset = null)
    {
    }

    /**
     * Create a timezone object from <code>DateTimeZone</code>
     *
     * @param DateTimeZone $zoneId
     *
     * @return IntlTimeZone
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.fromdatetimezone.php
     */
    public static function fromDateTimeZone(DateTimeZone $zoneId)
    {
    }

    /**
     * Get the canonical system timezone ID or the normalized custom time zone ID for the given time zone ID
     *
     * @param string $zoneId
     * @param bool $isSystemID
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.getcanonicalid.php
     */
    public static function getCanonicalID($zoneId, &$isSystemID = null)
    {
    }

    /**
     * Get a name of this time zone suitable for presentation to the user
     *
     * @param bool $isDaylight
     * @param int $style
     * @param string $locale
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.getdisplayname.php
     */
    public function getDisplayName($isDaylight = null, $style = null, $locale = null)
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
    public function getDSTSavings()
    {
    }

    /**
     * Get an ID in the equivalency group that includes the given ID
     *
     * @param string $zoneId
     * @param int $index
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.getequivalentid.php
     */
    public static function getEquivalentID($zoneId, $index)
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
    public function getErrorCode()
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
    public function getErrorMessage()
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
    public static function getGMT()
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
    public function getID()
    {
    }

    /**
     * Get the time zone raw and GMT offset for the given moment in time
     *
     * @param float $date
     * @param bool $local
     * @param int $rawOffset
     * @param int $dstOffset
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/intltimezone.getoffset.php
     */
    public function getOffset($date, $local, &$rawOffset, &$dstOffset)
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
    public function getRawOffset()
    {
    }

    /**
     * Get the region code associated with the given system time zone ID
     *
     * @param string $zoneId
     *
     * @return string Return region or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intltimezone.getregion.php
     */
    public static function getRegion($zoneId)
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
    public static function getTZDataVersion()
    {
    }

    /**
     * Get the "unknown" time zone
     *
     * @return IntlTimeZone Returns <code>IntlTimeZone</code> or <code>NULL</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/intltimezone.getunknown.php
     */
    public static function getUnknown()
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
    public function hasSameRules(IntlTimeZone $otherTimeZone)
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
    public function toDateTimeZone()
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
    public function useDaylightTime()
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
     * This is locale the data actually comes from.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.locale.php#intl.locale-constants
     */
    const ACTUAL_LOCALE = 0;

    /**
     * Used as locale parameter with the methods of the various locale affected classes,
     * such as NumberFormatter. This constant would make the methods to use default
     * locale.
     *
     * @var null
     *
     * @link http://www.php.net/manual/en/class.locale.php#intl.locale-constants
     */
    const DEFAULT_LOCALE = null;

    /**
     * Extended language subtag
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.locale.php#intl.locale-constants
     */
    const EXTLANG_TAG = 'extlang';

    /**
     * Grandfathered Language subtag
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.locale.php#intl.locale-constants
     */
    const GRANDFATHERED_LANG_TAG = 'grandfathered';

    /**
     * Language subtag
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.locale.php#intl.locale-constants
     */
    const LANG_TAG = 'language';

    /**
     * Private subtag
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.locale.php#intl.locale-constants
     */
    const PRIVATE_TAG = 'private';

    /**
     * Region subtag
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.locale.php#intl.locale-constants
     */
    const REGION_TAG = 'region';

    /**
     * Script subtag
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.locale.php#intl.locale-constants
     */
    const SCRIPT_TAG = 'script';

    /**
     * This is the most specific locale supported by ICU.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.locale.php#intl.locale-constants
     */
    const VALID_LOCALE = 1;

    /**
     * Variant subtag
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.locale.php#intl.locale-constants
     */
    const VARIANT_TAG = 'variant';

    /**
     * Tries to find out best available locale based on HTTP "Accept-Language" header
     *
     * @param string $header The string containing the "Accept-Language" header according to format in RFC 2616.
     *
     * @return string The corresponding locale identifier.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.acceptfromhttp.php
     */
    public static function acceptFromHttp($header)
    {
    }

    /**
     * Canonicalize the locale string
     *
     * @param string $locale
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.canonicalize.php
     */
    public static function canonicalize($locale)
    {
    }

    /**
     * Returns a correctly ordered and delimited locale ID
     *
     * @param array $subtags an array containing a list of key-value pairs, where the keys identify
     * the particular locale ID subtags, and the values are the associated
     * subtag values.
     * <blockquote>
     * The 'variant' and 'private' subtags can take maximum 15 values
     * whereas 'extlang' can take maximum 3 values.e.g. Variants are allowed
     * with the suffix ranging from 0-14. Hence the keys for the input array
     * can be variant0, variant1, ...,variant14. In the returned locale id,
     * the subtag is ordered by suffix resulting in variant0 followed by
     * variant1 followed by variant2 and so on.
     * The 'variant', 'private' and 'extlang' multiple values can be specified both
     * as array under specific key (e.g. 'variant') and as multiple numbered keys
     * (e.g. 'variant0', 'variant1', etc.).
     * </blockquote>
     *
     * @return string The corresponding locale identifier.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.composelocale.php
     */
    public static function composeLocale(array $subtags)
    {
    }

    /**
     * Checks if a language tag filter matches with locale
     *
     * @param string $langtag The language tag to check
     * @param string $locale The language range to check against
     * @param bool|null $canonicalize If true, the arguments will be converted to canonical form before
     * matching.
     *
     * @return bool <code>TRUE</code> if $locale matches $langtag <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.filtermatches.php
     */
    public static function filterMatches($langtag, $locale, $canonicalize = false)
    {
    }

    /**
     * Gets the variants for the input locale
     *
     * @param string $locale The locale to extract the variants from
     *
     * @return array The <code>array</code> containing the list of all variants subtag for the locale
     * or <code>NULL</code> if not present
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getallvariants.php
     */
    public static function getAllVariants($locale)
    {
    }

    /**
     * Gets the default locale value from the INTL global 'default_locale'
     *
     * @return string The current runtime locale
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getdefault.php
     */
    public static function getDefault()
    {
    }

    /**
     * Returns an appropriately localized display name for language of the inputlocale
     *
     * @param string $locale The locale to return a display language for
     * @param string $in_locale Optional format locale to use to display the language name
     *
     * @return string display name of the language for the $locale in the format appropriate for
     * $in_locale.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getdisplaylanguage.php
     */
    public static function getDisplayLanguage($locale, $in_locale)
    {
    }

    /**
     * Returns an appropriately localized display name for the input locale
     *
     * @param string $locale The locale to return a display name for.
     * @param string $in_locale optional format locale
     *
     * @return string Display name of the locale in the format appropriate for $in_locale.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getdisplayname.php
     */
    public static function getDisplayName($locale, $in_locale)
    {
    }

    /**
     * Returns an appropriately localized display name for region of the input locale
     *
     * @param string $locale The locale to return a display region for.
     * @param string $in_locale Optional format locale to use to display the region name
     *
     * @return string display name of the region for the $locale in the format appropriate for
     * $in_locale.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getdisplayregion.php
     */
    public static function getDisplayRegion($locale, $in_locale)
    {
    }

    /**
     * Returns an appropriately localized display name for script of the input locale
     *
     * @param string $locale The locale to return a display script for
     * @param string $in_locale Optional format locale to use to display the script name
     *
     * @return string Display name of the script for the $locale in the format appropriate for
     * $in_locale.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getdisplayscript.php
     */
    public static function getDisplayScript($locale, $in_locale)
    {
    }

    /**
     * Returns an appropriately localized display name for variants of the input locale
     *
     * @param string $locale The locale to return a display variant for
     * @param string $in_locale Optional format locale to use to display the variant name
     *
     * @return string Display name of the variant for the $locale in the format appropriate for
     * $in_locale.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getdisplayvariant.php
     */
    public static function getDisplayVariant($locale, $in_locale)
    {
    }

    /**
     * Gets the keywords for the input locale
     *
     * @param string $locale The locale to extract the keywords from
     *
     * @return array Associative <code>array</code> containing the keyword-value pairs for this locale
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getkeywords.php
     */
    public static function getKeywords($locale)
    {
    }

    /**
     * Gets the primary language for the input locale
     *
     * @param string $locale The locale to extract the primary language code from
     *
     * @return string The language code associated with the language or <code>NULL</code> in case of error.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getprimarylanguage.php
     */
    public static function getPrimaryLanguage($locale)
    {
    }

    /**
     * Gets the region for the input locale
     *
     * @param string $locale The locale to extract the region code from
     *
     * @return string The region subtag for the locale or <code>NULL</code> if not present
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getregion.php
     */
    public static function getRegion($locale)
    {
    }

    /**
     * Gets the script for the input locale
     *
     * @param string $locale The locale to extract the script code from
     *
     * @return string The script subtag for the locale or <code>NULL</code> if not present
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.getscript.php
     */
    public static function getScript($locale)
    {
    }

    /**
     * Searches the language tag list for the best match to the language
     *
     * @param array $langtag An <code>array</code> containing a list of language tags to compare to
     * <code>locale</code>. Maximum 100 items allowed.
     * @param string $locale The locale to use as the language range when matching.
     * @param bool|null $canonicalize If true, the arguments will be converted to canonical form before
     * matching.
     * @param string $default The locale to use if no match is found.
     *
     * @return string The closest matching language tag or default value.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.lookup.php
     */
    public static function lookup(array $langtag, $locale, $canonicalize = false, $default)
    {
    }

    /**
     * Returns a key-value array of locale ID subtag elements
     *
     * @param string $locale The locale to extract the subtag array from. Note: The 'variant' and
     * 'private' subtags can take maximum 15 values whereas 'extlang' can take
     * maximum 3 values.
     *
     * @return array Returns an array containing a list of key-value pairs, where the keys
     * identify the particular locale ID subtags, and the values are the
     * associated subtag values. The array will be ordered as the locale id
     * subtags e.g. in the locale id if variants are '-varX-varY-varZ' then the
     * returned array will have variant0=>varX , variant1=>varY ,
     * variant2=>varZ
     * Returns <code>NULL</code> when the length of <code>locale</code> exceeds
     * <code>INTL_MAX_LOCALE_LEN</code>.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.parselocale.php
     */
    public static function parseLocale($locale)
    {
    }

    /**
     * Sets the default runtime locale
     *
     * @param string $locale Is a BCP 47 compliant language tag.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/locale.setdefault.php
     */
    public static function setDefault($locale)
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
     * @param string $locale The locale to use when formatting arguments
     * @param string $pattern The pattern string to stick arguments into.
     * The pattern uses an 'apostrophe-friendly' syntax; it is run through
     * umsg_autoQuoteApostrophe
     * before being interpreted.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.create.php
     */
    public function __construct($locale, $pattern)
    {
    }

    /**
     * Constructs a new Message Formatter
     *
     * @param string $locale The locale to use when formatting arguments
     * @param string $pattern The pattern string to stick arguments into.
     * The pattern uses an 'apostrophe-friendly' syntax; it is run through
     * umsg_autoQuoteApostrophe
     * before being interpreted.
     *
     * @return MessageFormatter The formatter <code>object</code>
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.create.php
     */
    public static function create($locale, $pattern)
    {
    }

    /**
     * Format the message
     *
     * @param array $args Arguments to insert into the format string
     *
     * @return string The formatted string, or <code>FALSE</code> if an error occurred
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.format.php
     */
    public function format(array $args)
    {
    }

    /**
     * Quick format message
     *
     * @param string $locale The locale to use for formatting locale-dependent parts
     * @param string $pattern The pattern <code>string</code> to insert things into.
     * The pattern uses an 'apostrophe-friendly' syntax; it is run through
     * umsg_autoQuoteApostrophe
     * before being interpreted.
     * @param array $args The <code>array</code> of values to insert into the format <code>string</code>
     *
     * @return string The formatted pattern string or <code>FALSE</code> if an error occurred
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.formatmessage.php
     */
    public static function formatMessage($locale, $pattern, array $args)
    {
    }

    /**
     * Get the error code from last operation
     *
     * @return int The error code, one of UErrorCode values. Initial value is U_ZERO_ERROR.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.geterrorcode.php
     */
    public function getErrorCode()
    {
    }

    /**
     * Get the error text from the last operation
     *
     * @return string Description of the last error.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.geterrormessage.php
     */
    public function getErrorMessage()
    {
    }

    /**
     * Get the locale for which the formatter was created
     *
     * @return string The locale name
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.getlocale.php
     */
    public function getLocale()
    {
    }

    /**
     * Get the pattern used by the formatter
     *
     * @return string The pattern <code>string</code> for this message formatter
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.getpattern.php
     */
    public function getPattern()
    {
    }

    /**
     * Parse input string according to pattern
     *
     * @param string $value The <code>string</code> to parse
     *
     * @return array An <code>array</code> containing the items extracted, or <code>FALSE</code> on error
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.parse.php
     */
    public function parse($value)
    {
    }

    /**
     * Quick parse input string
     *
     * @param string $locale The locale to use for parsing locale-dependent parts
     * @param string $pattern The pattern with which to parse the <code>value</code>.
     * @param string $source The <code>string</code> to parse, conforming to the <code>pattern</code>.
     *
     * @return array An <code>array</code> containing items extracted, or <code>FALSE</code> on error
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.parsemessage.php
     */
    public static function parseMessage($locale, $pattern, $source)
    {
    }

    /**
     * Set the pattern used by the formatter
     *
     * @param string $pattern The pattern <code>string</code> to use in this message formatter.
     * The pattern uses an 'apostrophe-friendly' syntax; it is run through
     * umsg_autoQuoteApostrophe
     * before being interpreted.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/messageformatter.setpattern.php
     */
    public function setPattern($pattern)
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
     * Normalization Form C (NFC) - Canonical Decomposition followed by
     * Canonical Composition
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.normalizer.php#intl.normalizer-constants
     */
    const FORM_C = 4;

    /**
     * Normalization Form D (NFD) - Canonical Decomposition
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.normalizer.php#intl.normalizer-constants
     */
    const FORM_D = 2;

    /**
     * Normalization Form KC (NFKC) - Compatibility Decomposition, followed by
     * Canonical Composition
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.normalizer.php#intl.normalizer-constants
     */
    const FORM_KC = 5;

    /**
     * Normalization Form KD (NFKD) - Compatibility Decomposition
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.normalizer.php#intl.normalizer-constants
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
     * No decomposition/composition
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.normalizer.php#intl.normalizer-constants
     */
    const NONE = 1;

    /**
     * Checks if the provided string is already in the specified normalization
     * form
     *
     * @param string $input The input string to normalize
     * @param int|null $form One of the normalization forms.
     * @param mixed $arg3
     *
     * @return bool <code>TRUE</code> if normalized, <code>FALSE</code> otherwise or if there an error
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/normalizer.isnormalized.php
     */
    public static function isNormalized($input, $form = Normalizer::FORM_C, $arg3)
    {
    }

    /**
     * Normalizes the input provided and returns the normalized string
     *
     * @param string $input The input string to normalize
     * @param int|null $form One of the normalization forms.
     * @param mixed $arg3
     *
     * @return string The normalized string or <code>FALSE</code> if an error occurred.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/normalizer.normalize.php
     */
    public static function normalize($input, $form = Normalizer::FORM_C, $arg3)
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
     * Currency format
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const CURRENCY = 2;

    /**
     * The ISO currency code.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const CURRENCY_CODE = 5;

    /**
     * The currency symbol.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const CURRENCY_SYMBOL = 8;

    /**
     * Decimal format
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const DECIMAL = 1;

    /**
     * Always show decimal point.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const DECIMAL_ALWAYS_SHOWN = 2;

    /**
     * The decimal separator.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const DECIMAL_SEPARATOR_SYMBOL = 0;

    /**
     * The default rule set. This is only available with rule-based
     * formatters.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const DEFAULT_RULESET = 6;

    /**
     * Default format for the locale
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const DEFAULT_STYLE = 1;

    /**
     * Character representing a digit in the pattern.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const DIGIT_SYMBOL = 5;

    /**
     * Duration rule-based format
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const DURATION = 7;

    /**
     * The exponential symbol.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const EXPONENTIAL_SYMBOL = 11;

    /**
     * The width to which the output of format() is padded.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const FORMAT_WIDTH = 13;

    /**
     * Fraction digits.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const FRACTION_DIGITS = 8;

    /**
     * The grouping separator.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const GROUPING_SEPARATOR_SYMBOL = 1;

    /**
     * Grouping size.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const GROUPING_SIZE = 10;

    /**
     * Use grouping separator.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const GROUPING_USED = 1;

    /**
     * Alias for PATTERN_DECIMAL
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const IGNORE = 0;

    /**
     * Infinity symbol.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const INFINITY_SYMBOL = 14;

    /**
     * Integer digits.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const INTEGER_DIGITS = 5;

    /**
     * The international currency symbol.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const INTL_CURRENCY_SYMBOL = 9;

    /**
     * Lenient parse mode used by rule-based formats.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const LENIENT_PARSE = 19;

    /**
     * Maximum fraction digits.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const MAX_FRACTION_DIGITS = 6;

    /**
     * Maximum integer digits.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const MAX_INTEGER_DIGITS = 3;

    /**
     * Maximum significant digits.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const MAX_SIGNIFICANT_DIGITS = 18;

    /**
     * Minimum fraction digits.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const MIN_FRACTION_DIGITS = 7;

    /**
     * Minimum integer digits.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const MIN_INTEGER_DIGITS = 4;

    /**
     * Minimum significant digits.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const MIN_SIGNIFICANT_DIGITS = 17;

    /**
     * The minus sign.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const MINUS_SIGN_SYMBOL = 6;

    /**
     * The monetary grouping separator.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const MONETARY_GROUPING_SEPARATOR_SYMBOL = 17;

    /**
     * The monetary separator.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const MONETARY_SEPARATOR_SYMBOL = 10;

    /**
     * Multiplier.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const MULTIPLIER = 9;

    /**
     * Not-a-number symbol.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const NAN_SYMBOL = 15;

    /**
     * Negative prefix.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const NEGATIVE_PREFIX = 2;

    /**
     * Negative suffix.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const NEGATIVE_SUFFIX = 3;

    /**
     * Ordinal rule-based format
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const ORDINAL = 6;

    /**
     * Pad characters inserted after the prefix.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const PAD_AFTER_PREFIX = 1;

    /**
     * Pad characters inserted after the suffix.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const PAD_AFTER_SUFFIX = 3;

    /**
     * Pad characters inserted before the prefix.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const PAD_BEFORE_PREFIX = 0;

    /**
     * Pad characters inserted before the suffix.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const PAD_BEFORE_SUFFIX = 2;

    /**
     * Escape padding character.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const PAD_ESCAPE_SYMBOL = 13;

    /**
     * The character used to pad to the format width.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const PADDING_CHARACTER = 4;

    /**
     * The position at which padding will take place. See pad position
     * constants for possible argument values.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const PADDING_POSITION = 14;

    /**
     * Parse integers only.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const PARSE_INT_ONLY = 0;

    /**
     * Decimal format defined by pattern
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const PATTERN_DECIMAL = 0;

    /**
     * Rule-based format defined by pattern
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const PATTERN_RULEBASED = 9;

    /**
     * The pattern separator.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const PATTERN_SEPARATOR_SYMBOL = 2;

    /**
     * Percent format
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const PERCENT = 3;

    /**
     * The percent sign.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const PERCENT_SYMBOL = 3;

    /**
     * Per mill symbol.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const PERMILL_SYMBOL = 12;

    /**
     * The plus sign.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const PLUS_SIGN_SYMBOL = 7;

    /**
     * Positive prefix.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const POSITIVE_PREFIX = 0;

    /**
     * Positive suffix.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const POSITIVE_SUFFIX = 1;

    /**
     * The public rule sets. This is only available with rule-based
     * formatters. This is a read-only attribute. The public rulesets are
     * returned as a single string, with each ruleset name delimited by ';'
     * (semicolon).
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const PUBLIC_RULESETS = 7;

    /**
     * Rounding mode to round towards positive infinity.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const ROUND_CEILING = 0;

    /**
     * Rounding mode to round towards zero.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const ROUND_DOWN = 2;

    /**
     * Rounding mode to round towards negative infinity.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const ROUND_FLOOR = 1;

    /**
     * Rounding mode to round towards "nearest neighbor" unless both neighbors
     * are equidistant, in which case round down.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const ROUND_HALFDOWN = 5;

    /**
     * Rounding mode to round towards the "nearest neighbor" unless both
     * neighbors are equidistant, in which case, round towards the even
     * neighbor.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const ROUND_HALFEVEN = 4;

    /**
     * Rounding mode to round towards "nearest neighbor" unless both neighbors
     * are equidistant, in which case round up.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const ROUND_HALFUP = 6;

    /**
     * Rounding mode to round away from zero.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const ROUND_UP = 3;

    /**
     * Rounding increment.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const ROUNDING_INCREMENT = 12;

    /**
     * Rounding Mode.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const ROUNDING_MODE = 11;

    /**
     * Scientific format
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const SCIENTIFIC = 4;

    /**
     * Secondary grouping size.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const SECONDARY_GROUPING_SIZE = 15;

    /**
     * Significant digit symbol.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const SIGNIFICANT_DIGIT_SYMBOL = 16;

    /**
     * Use significant digits.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const SIGNIFICANT_DIGITS_USED = 16;

    /**
     * Spellout rule-based format
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const SPELLOUT = 5;

    /**
     * Format/parse as currency value
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const TYPE_CURRENCY = 4;

    /**
     * Derive the type from variable type
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const TYPE_DEFAULT = 0;

    /**
     * Format/parse as floating point value
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const TYPE_DOUBLE = 3;

    /**
     * Format/parse as 32-bit integer
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const TYPE_INT32 = 1;

    /**
     * Format/parse as 64-bit integer
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const TYPE_INT64 = 2;

    /**
     * Zero.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants
     */
    const ZERO_DIGIT_SYMBOL = 4;

    /**
     * Create a number formatter
     *
     * @param string $locale Locale in which the number would be formatted (locale name, e.g. en_CA).
     * @param int $style Style of the formatting, one of the
     * format style constants. If
     * <code>NumberFormatter::PATTERN_DECIMAL</code>
     * or <code>NumberFormatter::PATTERN_RULEBASED</code>
     * is passed then the number format is opened using the given pattern,
     * which must conform to the syntax described in
     * ICU DecimalFormat
     * documentation or
     * ICU RuleBasedNumberFormat
     * documentation, respectively.
     * @param string $pattern Pattern string if the chosen style requires a pattern.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.create.php
     */
    public function __construct($locale, $style, $pattern = null)
    {
    }

    /**
     * Create a number formatter
     *
     * @param string $locale Locale in which the number would be formatted (locale name, e.g. en_CA).
     * @param int $style Style of the formatting, one of the
     * format style constants. If
     * <code>NumberFormatter::PATTERN_DECIMAL</code>
     * or <code>NumberFormatter::PATTERN_RULEBASED</code>
     * is passed then the number format is opened using the given pattern,
     * which must conform to the syntax described in
     * ICU DecimalFormat
     * documentation or
     * ICU RuleBasedNumberFormat
     * documentation, respectively.
     * @param string $pattern Pattern string if the chosen style requires a pattern.
     *
     * @return NumberFormatter Returns <code>NumberFormatter</code> object or <code>FALSE</code> on error.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.create.php
     */
    public static function create($locale, $style, $pattern = null)
    {
    }

    /**
     * Format a number
     *
     * @param float $value The value to format. Can be <code>integer</code> or <code>float</code>,
     * other values will be converted to a numeric value.
     * @param int $type The
     * formatting type to use.
     *
     * @return string Returns the string containing formatted value, or <code>FALSE</code> on error.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.format.php
     */
    public function format($value, $type = null)
    {
    }

    /**
     * Format a currency value
     *
     * @param float $value The numeric currency value.
     * @param string $currency The 3-letter ISO 4217 currency code indicating the currency to use.
     *
     * @return string String representing the formatted currency value.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.formatcurrency.php
     */
    public function formatCurrency($value, $currency)
    {
    }

    /**
     * Get an attribute
     *
     * @param int $attr Attribute specifier - one of the
     * numeric attribute constants.
     *
     * @return int Return attribute value on success, or <code>FALSE</code> on error.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.getattribute.php
     */
    public function getAttribute($attr)
    {
    }

    /**
     * Get formatter's last error code
     *
     * @return int Returns error code from last formatter call.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.geterrorcode.php
     */
    public function getErrorCode()
    {
    }

    /**
     * Get formatter's last error message
     *
     * @return string Returns error message from last formatter call.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.geterrormessage.php
     */
    public function getErrorMessage()
    {
    }

    /**
     * Get formatter locale
     *
     * @param int $type You can choose between valid and actual locale (
     * <code>Locale::VALID_LOCALE</code>,
     * <code>Locale::ACTUAL_LOCALE</code>,
     * respectively). The default is the actual locale.
     *
     * @return string The locale name used to create the formatter.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.getlocale.php
     */
    public function getLocale($type = null)
    {
    }

    /**
     * Get formatter pattern
     *
     * @return string Pattern <code>string</code> that is used by the formatter, or <code>FALSE</code> if an error happens.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.getpattern.php
     */
    public function getPattern()
    {
    }

    /**
     * Get a symbol value
     *
     * @param int $attr Symbol specifier, one of the
     * format symbol constants.
     *
     * @return string The symbol string or <code>FALSE</code> on error.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.getsymbol.php
     */
    public function getSymbol($attr)
    {
    }

    /**
     * Get a text attribute
     *
     * @param int $attr Attribute specifier - one of the
     * text attribute constants.
     *
     * @return string Return attribute value on success, or <code>FALSE</code> on error.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.gettextattribute.php
     */
    public function getTextAttribute($attr)
    {
    }

    /**
     * Parse a number
     *
     * @param string $value
     * @param int $type The
     * formatting type to use. By default,
     * <code>NumberFormatter::TYPE_DOUBLE</code> is used.
     * @param int $position Offset in the string at which to begin parsing. On return, this value
     * will hold the offset at which parsing ended.
     *
     * @return mixed The value of the parsed number or <code>FALSE</code> on error.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.parse.php
     */
    public function parse($value, $type = null, &$position = null)
    {
    }

    /**
     * Parse a currency number
     *
     * @param string $value
     * @param string $currency Parameter to receive the currency name (3-letter ISO 4217 currency
     * code).
     * @param int $position Offset in the string at which to begin parsing. On return, this value
     * will hold the offset at which parsing ended.
     *
     * @return float The parsed numeric value or <code>FALSE</code> on error.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.parsecurrency.php
     */
    public function parseCurrency($value, &$currency, &$position = null)
    {
    }

    /**
     * Set an attribute
     *
     * @param int $attr Attribute specifier - one of the
     * numeric attribute constants.
     * @param int $value The attribute value.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.setattribute.php
     */
    public function setAttribute($attr, $value)
    {
    }

    /**
     * Set formatter pattern
     *
     * @param string $pattern Pattern in syntax described in
     * ICU DecimalFormat
     * documentation.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.setpattern.php
     */
    public function setPattern($pattern)
    {
    }

    /**
     * Set a symbol value
     *
     * @param int $attr Symbol specifier, one of the
     * format symbol constants.
     * @param string $value Text for the symbol.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.setsymbol.php
     */
    public function setSymbol($attr, $value)
    {
    }

    /**
     * Set a text attribute
     *
     * @param int $attr Attribute specifier - one of the
     * text attribute
     * constants.
     * @param string $value Text for the attribute value.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
     *
     * @link http://www.php.net/manual/en/numberformatter.settextattribute.php
     */
    public function setTextAttribute($attr, $value)
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
     * @param string $locale Locale for which the resources should be loaded (locale name, e.g. en_CA).
     * @param string $bundlename The directory where the data is stored or the name of the .dat file.
     * @param bool $fallback Whether locale should match exactly or fallback to parent locale is allowed.
     *
     * @link http://www.php.net/manual/en/resourcebundle.create.php
     */
    public function __construct($locale, $bundlename, $fallback = null)
    {
    }

    /**
     * Get number of elements in the bundle
     *
     * @return int Returns number of elements in the bundle.
     *
     * @link http://www.php.net/manual/en/resourcebundle.count.php
     */
    public function count()
    {
    }

    /**
     * Create a resource bundle
     *
     * @param string $locale Locale for which the resources should be loaded (locale name, e.g. en_CA).
     * @param string $bundlename The directory where the data is stored or the name of the .dat file.
     * @param bool $fallback Whether locale should match exactly or fallback to parent locale is allowed.
     *
     * @return ResourceBundle Returns <code>ResourceBundle</code> object or <code>NULL</code> on error.
     *
     * @link http://www.php.net/manual/en/resourcebundle.create.php
     */
    public static function create($locale, $bundlename, $fallback = null)
    {
    }

    /**
     * Get data from the bundle
     *
     * @param string|int $index Data index, must be string or integer.
     * @param bool|null $fallback Whether locale should match exactly or fallback to parent locale is allowed.
     *
     * @return mixed Returns the data located at the index or <code>NULL</code> on error. Strings, integers and binary data strings
     * are returned as corresponding PHP types, integer array is returned as PHP array. Complex types are
     * returned as <code>ResourceBundle</code> object.
     *
     * @link http://www.php.net/manual/en/resourcebundle.get.php
     */
    public function get($index, $fallback = true)
    {
    }

    /**
     * Get bundle's last error code
     *
     * @return int Returns error code from last bundle object call.
     *
     * @link http://www.php.net/manual/en/resourcebundle.geterrorcode.php
     */
    public function getErrorCode()
    {
    }

    /**
     * Get bundle's last error message
     *
     * @return string Returns error message from last bundle object's call.
     *
     * @link http://www.php.net/manual/en/resourcebundle.geterrormessage.php
     */
    public function getErrorMessage()
    {
    }

    /**
     * Get supported locales
     *
     * @param string $bundlename Path of ResourceBundle for which to get available locales, or
     * empty string for default locales list.
     *
     * @return array Returns the list of locales supported by the bundle.
     *
     * @link http://www.php.net/manual/en/resourcebundle.locales.php
     */
    public static function getLocales($bundlename)
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
     *
     * @link http://www.php.net/manual/en/class.spoofchecker.php#spoofchecker.constants
     */
    const ANY_CASE = 8;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.spoofchecker.php#spoofchecker.constants
     */
    const CHAR_LIMIT = 64;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.spoofchecker.php#spoofchecker.constants
     */
    const INVISIBLE = 32;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.spoofchecker.php#spoofchecker.constants
     */
    const MIXED_SCRIPT_CONFUSABLE = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.spoofchecker.php#spoofchecker.constants
     */
    const SINGLE_SCRIPT = 16;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.spoofchecker.php#spoofchecker.constants
     */
    const SINGLE_SCRIPT_CONFUSABLE = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.spoofchecker.php#spoofchecker.constants
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
     * @param string $str1 First string to check.
     * @param string $str2 Second string to check.
     * @param string $error This variable is set by-reference to string containing an error, if there
     * were any.
     *
     * @return bool Returns <code>TRUE</code> if two given strings can be confused, <code>FALSE</code> otherwise.
     *
     * @link http://www.php.net/manual/en/spoofchecker.areconfusable.php
     */
    public function areConfusable($str1, $str2, &$error = null)
    {
    }

    /**
     * Checks if a given text contains any suspicious characters
     *
     * @param string $text String to test.
     * @param string $error This variable is set by-reference to string containing an error, if there
     * were any.
     *
     * @return bool Returns <code>TRUE</code> if there are suspicious characters, <code>FALSE</code> otherwise.
     *
     * @link http://www.php.net/manual/en/spoofchecker.issuspicious.php
     */
    public function isSuspicious($text, &$error = null)
    {
    }

    /**
     * Locales to use when running checks
     *
     * @param string $locale_list
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
     * @param int $checks
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
     * @var int
     *
     * @link http://www.php.net/manual/en/class.transliterator.php#transliterator.constants
     */
    const FORWARD = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.transliterator.php#transliterator.constants
     */
    const REVERSE = 1;

    /**
     * @var mixed
     */
    public $id;

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
     * @param string $id The id.
     * @param int $direction The direction, defaults to
     * &gt;Transliterator::FORWARD.
     * May also be set to
     * Transliterator::REVERSE.
     *
     * @return Transliterator Returns a <code>Transliterator</code> object on success,
     * or <code>NULL</code> on failure.
     *
     * @link http://www.php.net/manual/en/transliterator.create.php
     */
    public static function create($id, $direction = null)
    {
    }

    /**
     * Create transliterator from rules
     *
     * @param string $rules The rules.
     * @param string $direction The direction, defaults to
     * &gt;Transliterator::FORWARD.
     * May also be set to
     * Transliterator::REVERSE.
     *
     * @return Transliterator Returns a <code>Transliterator</code> object on success,
     * or <code>NULL</code> on failure.
     *
     * @link http://www.php.net/manual/en/transliterator.createfromrules.php
     */
    public static function createFromRules($rules, $direction = null)
    {
    }

    /**
     * Create an inverse transliterator
     *
     * @return Transliterator Returns a <code>Transliterator</code> object on success,
     * or <code>NULL</code> on failure
     *
     * @link http://www.php.net/manual/en/transliterator.createinverse.php
     */
    public function createInverse()
    {
    }

    /**
     * Get last error code
     *
     * @return int The error code on success,
     * or <code>FALSE</code> if none exists, or on failure.
     *
     * @link http://www.php.net/manual/en/transliterator.geterrorcode.php
     */
    public function getErrorCode()
    {
    }

    /**
     * Get last error message
     *
     * @return string The error message on success,
     * or <code>FALSE</code> if none exists, or on failure.
     *
     * @link http://www.php.net/manual/en/transliterator.geterrormessage.php
     */
    public function getErrorMessage()
    {
    }

    /**
     * Get transliterator IDs
     *
     * @return array An <code>array</code> of registered transliterator IDs on success,
     * or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/transliterator.listids.php
     */
    public static function listIDs()
    {
    }

    /**
     * Transliterate a string
     *
     * @param string $subject The string to be transformed.
     * @param int $start The start index (in UTF-16 code units) from which the string will start
     * to be transformed, inclusive. Indexing starts at 0. The text before will
     * be left as is.
     * @param int $end The end index (in UTF-16 code units) until which the string will be
     * transformed, exclusive. Indexing starts at 0. The text after will be
     * left as is.
     *
     * @return string The transfomed string on success, or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/transliterator.transliterate.php
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
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const BOCU1 = 28;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const CESU8 = 31;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const DBCS = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const EBCDIC_STATEFUL = 9;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const HZ = 23;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const IMAP_MAILBOX = 32;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const ISCII = 25;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const ISO_2022 = 10;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const LATIN_1 = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const LMBCS_1 = 11;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const LMBCS_11 = 18;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const LMBCS_16 = 19;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const LMBCS_17 = 20;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const LMBCS_18 = 21;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const LMBCS_19 = 22;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const LMBCS_2 = 12;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const LMBCS_3 = 13;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const LMBCS_4 = 14;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const LMBCS_5 = 15;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const LMBCS_6 = 16;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const LMBCS_8 = 17;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const LMBCS_LAST = 22;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const MBCS = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const REASON_CLONE = 5;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const REASON_CLOSE = 4;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const REASON_ILLEGAL = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const REASON_IRREGULAR = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const REASON_RESET = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const REASON_UNASSIGNED = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const SBCS = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const SCSU = 24;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const UNSUPPORTED_CONVERTER = -1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const US_ASCII = 26;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const UTF16 = 29;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const UTF16_BigEndian = 5;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const UTF16_LittleEndian = 6;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const UTF32 = 30;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const UTF32_BigEndian = 7;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const UTF32_LittleEndian = 8;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const UTF7 = 27;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.uconverter.php#uconverter.constants
     */
    const UTF8 = 4;

    /**
     * Create UConverter object
     *
     * @param mixed $destination_encoding
     * @param mixed $source_encoding
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
     * @param string $str
     * @param bool $reverse
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.convert.php
     */
    public function convert($str, $reverse = null)
    {
    }

    /**
     * Default "from" callback function
     *
     * @param int $reason
     * @param string $source
     * @param string $codePoint
     * @param int $error
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
     * @param string $name
     *
     * @return array
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.getaliases.php
     */
    public static function getAliases($name = null)
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
    public static function getAvailable()
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
    public function getDestinationEncoding()
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
    public function getDestinationType()
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
    public function getErrorCode()
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
    public function getErrorMessage()
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
    public function getSourceEncoding()
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
    public function getSourceType()
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
    public static function getStandards()
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
    public function getSubstChars()
    {
    }

    /**
     * Get string representation of the callback reason
     *
     * @param int $reason
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.reasontext.php
     */
    public static function reasonText($reason = null)
    {
    }

    /**
     * Set the destination encoding
     *
     * @param string $encoding
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
     * @param string $encoding
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
     * @param string $chars
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
     * @param int $reason
     * @param string $source
     * @param string $codeUnits
     * @param int $error
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
     * @param string $str
     * @param string $toEncoding
     * @param string $fromEncoding
     * @param array|null $options
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
     *
     * @link http://www.php.net/manual/en/uconverter.transcode.php
     */
    public static function transcode($str, $toEncoding, $fromEncoding, array $options = null)
    {
    }
}

/**
 * Sort array maintaining index association
 *
 * @param Collator $arr Array of strings to sort.
 * @param array $sort_flag Optional sorting type, one of the following:
 * <ul>
 * <code>Collator::SORT_REGULAR</code>
 * - compare items normally (don't change types)
 * <code>Collator::SORT_NUMERIC</code>
 * - compare items numerically
 * <code>Collator::SORT_STRING</code>
 * - compare items as strings
 * </ul>
 * @param mixed $sort_flags
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.asort.php
 */
function collator_asort(Collator $arr, array &$sort_flag, $sort_flags = null)
{
}

/**
 * Compare two Unicode strings
 *
 * @param Collator $str1 The first string to compare.
 * @param string $str2 The second string to compare.
 * @param mixed $arg2
 *
 * @return int Return comparison result:
 * <ul>
 * 1 if <code>str1</code> is <code>greater</code> than
 * <code>str2</code> ;
 * 0 if <code>str1</code> is <code>equal</code> to
 * <code>str2</code>;
 * -1 if <code>str1</code> is <code>less</code> than
 * <code>str2</code> .
 * </ul>
 * On error
 * <code>boolean</code>
 * <code>FALSE</code>
 * is returned.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.compare.php
 */
function collator_compare(Collator $str1, $str2, $arg2)
{
}

/**
 * Create a collator
 *
 * @param string $locale The locale containing the required collation rules. Special values for
 * locales can be passed in - if null is passed for the locale, the
 * default locale collation rules will be used. If empty string ("") or
 * "root" are passed, UCA rules will be used.
 *
 * @return Collator Return new instance of <code>Collator</code> object, or <code>NULL</code>
 * on error.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.create.php
 */
function collator_create($locale)
{
}

/**
 * Get collation attribute value
 *
 * @param Collator $attr Attribute to get value for.
 * @param mixed $arg1
 *
 * @return int Attribute value, or <code>boolean</code> <code>FALSE</code> on error.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.getattribute.php
 */
function collator_get_attribute(Collator $attr, $arg1)
{
}

/**
 * Get collator's last error code
 *
 * @param Collator $object
 *
 * @return int Error code returned by the last Collator <code>API</code> function call.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.geterrorcode.php
 */
function collator_get_error_code(Collator $object)
{
}

/**
 * Get text for collator's last error code
 *
 * @param Collator $object
 *
 * @return string Description of an error occurred in the last Collator <code>API</code> function call.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.geterrormessage.php
 */
function collator_get_error_message(Collator $object)
{
}

/**
 * Get the locale name of the collator
 *
 * @param Collator $type You can choose between valid and actual locale (
 * <code>Locale::VALID_LOCALE</code> and
 * <code>Locale::ACTUAL_LOCALE</code>,
 * respectively).
 * @param mixed $arg1
 *
 * @return string Real locale name from which the collation data comes. If the collator was
 * instantiated from rules or an error occurred, returns
 * <code>boolean</code> <code>FALSE</code>.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.getlocale.php
 */
function collator_get_locale(Collator $type, $arg1)
{
}

/**
 * Get sorting key for a string
 *
 * @param Collator $str The string to produce the key from.
 * @param mixed $arg1
 * @param mixed $arg2
 *
 * @return string Returns the collation key for the string. Collation keys can be compared directly instead of strings.
 *
 * @since PHP 5 >= 5.3.2, PHP 7
 *
 * @link http://www.php.net/manual/en/collator.getsortkey.php
 */
function collator_get_sort_key(Collator $str, $arg1, $arg2)
{
}

/**
 * Get current collation strength
 *
 * @param Collator $object
 *
 * @return int Returns current collation strength, or <code>boolean</code> <code>FALSE</code> on error.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.getstrength.php
 */
function collator_get_strength(Collator $object)
{
}

/**
 * Set collation attribute
 *
 * @param Collator $attr Attribute.
 * @param int $val Attribute value.
 * @param mixed $arg2
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.setattribute.php
 */
function collator_set_attribute(Collator $attr, $val, $arg2)
{
}

/**
 * Set collation strength
 *
 * @param Collator $strength Strength to set.
 * @param mixed $arg1
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.setstrength.php
 */
function collator_set_strength(Collator $strength, $arg1)
{
}

/**
 * Sort array using specified collator
 *
 * @param Collator $arr Array of strings to sort.
 * @param array $sort_flag Optional sorting type, one of the following:
 * @param mixed $sort_flags
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.sort.php
 */
function collator_sort(Collator $arr, array &$sort_flag, $sort_flags = null)
{
}

/**
 * Sort array using specified collator and sort keys
 *
 * @param Collator $arr Array of strings to sort
 * @param array $arr
 * @param mixed $sort_flags
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/collator.sortwithsortkeys.php
 */
function collator_sort_with_sort_keys(Collator $arr, array &$arr, $sort_flags = null)
{
}

/**
 * Create a date formatter
 *
 * @param string $locale Locale to use when formatting or parsing or <code>NULL</code> to use the value
 * specified in the ini setting intl.default_locale.
 * @param int $datetype Date type to use (<code>none</code>, <code>short</code>,
 * <code>medium</code>, <code>long</code>,
 * <code>full</code>). This is one of the IntlDateFormatter
 * constants. It can also be <code>NULL</code>, in which case ICUʼs default
 * date type will be used.
 * @param int $timetype Time type to use (<code>none</code>, <code>short</code>,
 * <code>medium</code>, <code>long</code>,
 * <code>full</code>). This is one of the IntlDateFormatter
 * constants. It can also be <code>NULL</code>, in which case ICUʼs default
 * time type will be used.
 * @param mixed|null $timezone Time zone ID. The default (and the one used if <code>NULL</code> is given) is the
 * one returned by <code>date_default_timezone_get</code> or, if
 * applicable, that of the <code>IntlCalendar</code> object passed
 * for the <code>calendar</code> parameter. This ID must be a
 * valid identifier on ICUʼs database or an ID representing an
 * explicit offset, such as <code>GMT-05:30</code>.
 * @param mixed|null $calendar Calendar to use for formatting or parsing. The default value is <code>NULL</code>,
 * which corresponds to <code>IntlDateFormatter::GREGORIAN</code>.
 * This can either be one of the
 * IntlDateFormatter
 * calendar constants or an <code>IntlCalendar</code>. Any
 * <code>IntlCalendar</code> object passed will be clone; it will
 * not be changed by the <code>IntlDateFormatter</code>. This will
 * determine the calendar type used (gregorian, islamic, persian, etc.) and,
 * if <code>NULL</code> is given for the <code>timezone</code> parameter,
 * also the timezone used.
 * @param string|null $pattern Optional pattern to use when formatting or parsing.
 * Possible patterns are documented at http://userguide.icu-project.org/formatparse/datetime.
 *
 * @return IntlDateFormatter The created <code>IntlDateFormatter</code> or <code>FALSE</code> in case of
 * failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.create.php
 */
function datefmt_create($locale, $datetype, $timetype, $timezone = null, $calendar = null, $pattern = "")
{
}

/**
 * Format the date/time value as a string
 *
 * @param mixed $value Value to format. This may be a <code>DateTimeInterface</code> object, an
 * <code>IntlCalendar</code> object, a <code>numeric</code> type
 * representing a (possibly fractional) number of seconds since epoch or an
 * <code>array</code> in the format output by
 * <code>localtime</code>.
 * @param mixed $array
 *
 * @return string The formatted string or, if an error occurred, <code>FALSE</code>.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.format.php
 */
function datefmt_format($value = null, $array = null)
{
}

/**
 * Formats an object
 *
 * @param mixed $object An object of type <code>IntlCalendar</code> or
 * <code>DateTime</code>. The timezone information in the object
 * will be used.
 * @param mixed|null $format How to format the date/time. This can either be an <code>array</code> with
 * two elements (first the date style, then the time style, these being one
 * of the constants <code>IntlDateFormatter::NONE</code>,
 * <code>IntlDateFormatter::SHORT</code>,
 * <code>IntlDateFormatter::MEDIUM</code>,
 * <code>IntlDateFormatter::LONG</code>,
 * <code>IntlDateFormatter::FULL</code>), an <code>integer</code> with
 * the value of one of these constants (in which case it will be used both
 * for the time and the date) or a <code>string</code> with the format
 * described in the ICU
 * documentation. If <code>NULL</code>, the default style will be used.
 * @param string|null $locale The locale to use, or <code>NULL</code> to use the default one.
 *
 * @return string A string with result or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/intldateformatter.formatobject.php
 */
function datefmt_format_object($object, $format = null, $locale = null)
{
}

/**
 * Get the calendar type used for the IntlDateFormatter
 *
 * @param mixed $mf
 *
 * @return int The calendar
 * type being used by the formatter. Either
 * <code>IntlDateFormatter::TRADITIONAL</code> or
 * <code>IntlDateFormatter::GREGORIAN</code>.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.getcalendar.php
 */
function datefmt_get_calendar($mf)
{
}

/**
 * Get copy of formatterʼs calendar object
 *
 * @param mixed $mf
 *
 * @return IntlCalendar A copy of the internal calendar object used by this formatter.
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
 * @return int The current date type value of the formatter.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.getdatetype.php
 */
function datefmt_get_datetype($mf)
{
}

/**
 * Get the error code from last operation
 *
 * @param mixed $nf
 *
 * @return int The error code, one of UErrorCode values. Initial value is U_ZERO_ERROR.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.geterrorcode.php
 */
function datefmt_get_error_code($nf)
{
}

/**
 * Get the error text from the last operation
 *
 * @param mixed $coll
 *
 * @return string Description of the last error.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.geterrormessage.php
 */
function datefmt_get_error_message($coll)
{
}

/**
 * Get the locale used by formatter
 *
 * @param int $which
 *
 * @return string the locale of this formatter or 'false' if error
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.getlocale.php
 */
function datefmt_get_locale($which)
{
}

/**
 * Get the pattern used for the IntlDateFormatter
 *
 * @param mixed $mf
 *
 * @return string The pattern string being used to format/parse.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.getpattern.php
 */
function datefmt_get_pattern($mf)
{
}

/**
 * Get the timetype used for the IntlDateFormatter
 *
 * @param mixed $mf
 *
 * @return int The current date type value of the formatter.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.gettimetype.php
 */
function datefmt_get_timetype($mf)
{
}

/**
 * Get formatterʼs timezone
 *
 * @param mixed $mf
 *
 * @return IntlTimeZone The associated <code>IntlTimeZone</code>
 * object or <code>FALSE</code> on failure.
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
 * @return string ID string for the time zone used by this formatter.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.gettimezoneid.php
 */
function datefmt_get_timezone_id($mf)
{
}

/**
 * Get the lenient used for the IntlDateFormatter
 *
 * @param mixed $mf
 *
 * @return bool <code>TRUE</code> if parser is lenient, <code>FALSE</code> if parser is strict. By default the parser is lenient.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.islenient.php
 */
function datefmt_is_lenient($mf)
{
}

/**
 * Parse string to a field-based time value
 *
 * @param string $value string to convert to a time
 * @param int $position Position at which to start the parsing in $value (zero-based).
 * If no error occurs before $value is consumed, $parse_pos will contain -1
 * otherwise it will contain the position at which parsing ended .
 * If $parse_pos &gt; strlen($value), the parse fails immediately.
 * @param mixed $position
 *
 * @return array Localtime compatible array of integers : contains 24 hour clock value in tm_hour field
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.localtime.php
 */
function datefmt_localtime($value, $position, &$position = null)
{
}

/**
 * Parse string to a timestamp value
 *
 * @param string $value string to convert to a time
 * @param int $position Position at which to start the parsing in $value (zero-based).
 * If no error occurs before $value is consumed, $parse_pos will contain -1
 * otherwise it will contain the position at which parsing ended (and the error occurred).
 * This variable will contain the end position if the parse fails.
 * If $parse_pos &gt; strlen($value), the parse fails immediately.
 * @param mixed $position
 *
 * @return int timestamp parsed value, or <code>FALSE</code> if value can't be parsed.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.parse.php
 */
function datefmt_parse($value, $position, &$position = null)
{
}

/**
 * Sets the calendar type used by the formatter
 *
 * @param mixed $which This can either be: the calendar
 * type to use (default is
 * <code>IntlDateFormatter::GREGORIAN</code>, which is also used if
 * <code>NULL</code> is specified) or an
 * <code>IntlCalendar</code> object.
 * @param mixed $calendar
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.setcalendar.php
 */
function datefmt_set_calendar($which, $calendar)
{
}

/**
 * Set the leniency of the parser
 *
 * @param bool $lenient Sets whether the parser is lenient or not, default is <code>TRUE</code> (lenient).
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.setlenient.php
 */
function datefmt_set_lenient($lenient)
{
}

/**
 * Set the pattern used for the IntlDateFormatter
 *
 * @param string $pattern New pattern string to use.
 * Possible patterns are documented at http://userguide.icu-project.org/formatparse/datetime.
 * @param mixed $pattern
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 * Bad formatstrings are usually the cause of the failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.setpattern.php
 */
function datefmt_set_pattern($pattern, $pattern)
{
}

/**
 * Sets formatterʼs timezone
 *
 * @param mixed $zone The timezone to use for this formatter. This can be specified in the
 * following forms:
 * @param mixed $timezone
 *
 * @return bool Returns <code>TRUE</code> on success and <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/intldateformatter.settimezone.php
 */
function datefmt_set_timezone($zone, $timezone)
{
}

/**
 * Sets the time zone to use
 *
 * @param string $zone The time zone ID string of the time zone to use.
 * If <code>NULL</code> or the empty string, the default time zone for the runtime is used.
 * @param mixed $timezone
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/intldateformatter.settimezoneid.php
 */
function datefmt_set_timezone_id($zone, $timezone)
{
}

/**
 * Function to extract a sequence of default grapheme clusters from a text buffer, which must be encoded in UTF-8
 *
 * @param string $haystack String to search.
 * @param int $size Maximum number items - based on the $extract_type - to return.
 * @param int $extract_type Defines the type of units referred to by the $size parameter:
 * @param int|null $start Starting position in $haystack in bytes - if given, it must be zero or a
 * positive value that is less than or equal to the length of $haystack in
 * bytes, or a negative value that counts from the end of $haystack.
 * If $start does not point to the first byte of a UTF-8
 * character, the start position is moved to the next character boundary.
 * @param int $next Reference to a value that will be set to the next starting position.
 * When the call returns, this may point to the first byte position past the end of the string.
 *
 * @return string A string starting at offset $start and ending on a default grapheme cluster
 * boundary that conforms to the $size and $extract_type specified.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.grapheme-extract.php
 */
function grapheme_extract($haystack, $size, $extract_type = null, $start = 0, &$next = null)
{
}

/**
 * Find position (in grapheme units) of first occurrence of a case-insensitive string
 *
 * @param string $haystack The string to look in. Must be valid UTF-8.
 * @param string $needle The string to look for. Must be valid UTF-8.
 * @param int|null $offset The optional $offset parameter allows you to specify where in haystack to
 * start searching as an offset in grapheme units (not bytes or characters).
 * If the offset is negative, it is treated relative to the end of the string.
 * The position returned is still relative to the beginning of haystack
 * regardless of the value of $offset.
 *
 * @return int Returns the position as an integer. If needle is not found, grapheme_stripos() will return boolean FALSE.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.grapheme-stripos.php
 */
function grapheme_stripos($haystack, $needle, $offset = 0)
{
}

/**
 * Returns part of haystack string from the first occurrence of case-insensitive needle to the end of haystack
 *
 * @param string $haystack The input string. Must be valid UTF-8.
 * @param string $needle The string to look for. Must be valid UTF-8.
 * @param bool|null $before_needle If <code>TRUE</code>, grapheme_strstr() returns the part of the
 * haystack before the first occurrence of the needle (excluding needle).
 *
 * @return string Returns the portion of $haystack, or FALSE if $needle is not found.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.grapheme-stristr.php
 */
function grapheme_stristr($haystack, $needle, $before_needle = false)
{
}

/**
 * Get string length in grapheme units
 *
 * @param string $input The string being measured for length. It must be a valid UTF-8 string.
 *
 * @return int The length of the string on success, and 0 if the string is empty.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.grapheme-strlen.php
 */
function grapheme_strlen($input)
{
}

/**
 * Find position (in grapheme units) of first occurrence of a string
 *
 * @param string $haystack The string to look in. Must be valid UTF-8.
 * @param string $needle The string to look for. Must be valid UTF-8.
 * @param int|null $offset The optional $offset parameter allows you to specify where in $haystack to
 * start searching as an offset in grapheme units (not bytes or characters).
 * If the offset is negative, it is treated relative to the end of the string.
 * The position returned is still relative to the beginning of haystack
 * regardless of the value of $offset.
 *
 * @return int Returns the position as an integer. If needle is not found, grapheme_strpos() will return boolean FALSE.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.grapheme-strpos.php
 */
function grapheme_strpos($haystack, $needle, $offset = 0)
{
}

/**
 * Find position (in grapheme units) of last occurrence of a case-insensitive string
 *
 * @param string $haystack The string to look in. Must be valid UTF-8.
 * @param string $needle The string to look for. Must be valid UTF-8.
 * @param int|null $offset The optional $offset parameter allows you to specify where in $haystack to
 * start searching as an offset in grapheme units (not bytes or characters).
 * The position returned is still relative to the beginning of haystack
 * regardless of the value of $offset.
 *
 * @return int Returns the position as an integer. If needle is not found, grapheme_strripos() will return boolean FALSE.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.grapheme-strripos.php
 */
function grapheme_strripos($haystack, $needle, $offset = 0)
{
}

/**
 * Find position (in grapheme units) of last occurrence of a string
 *
 * @param string $haystack The string to look in. Must be valid UTF-8.
 * @param string $needle The string to look for. Must be valid UTF-8.
 * @param int|null $offset The optional $offset parameter allows you to specify where in $haystack to
 * start searching as an offset in grapheme units (not bytes or characters).
 * The position returned is still relative to the beginning of haystack
 * regardless of the value of $offset.
 *
 * @return int Returns the position as an integer. If needle is not found, grapheme_strrpos() will return boolean FALSE.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.grapheme-strrpos.php
 */
function grapheme_strrpos($haystack, $needle, $offset = 0)
{
}

/**
 * Returns part of haystack string from the first occurrence of needle to the end of haystack
 *
 * @param string $haystack The input string. Must be valid UTF-8.
 * @param string $needle The string to look for. Must be valid UTF-8.
 * @param bool|null $before_needle If <code>TRUE</code>, grapheme_strstr() returns the part of the
 * haystack before the first occurrence of the needle (excluding the needle).
 *
 * @return string Returns the portion of string, or FALSE if needle is not found.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.grapheme-strstr.php
 */
function grapheme_strstr($haystack, $needle, $before_needle = false)
{
}

/**
 * Return part of a string
 *
 * @param string $string The input string. Must be valid UTF-8.
 * @param int $start Start position in default grapheme units.
 * If $start is non-negative, the returned string will start at the
 * $start'th position in $string, counting from zero. If $start is negative,
 * the returned string will start at the $start'th grapheme unit from the
 * end of string.
 * @param int $length Length in grapheme units.
 * If $length is given and is positive, the string returned will contain
 * at most $length grapheme units beginning from $start (depending on the
 * length of string). If $length is given and is negative, then
 * that many grapheme units will be omitted from the end of string (after the
 * start position has been calculated when a start is negative). If $start
 * denotes a position beyond this truncation, <code>FALSE</code> will be returned.
 *
 * @return string Returns the extracted part of $string.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.grapheme-substr.php
 */
function grapheme_substr($string, $start, $length = null)
{
}

/**
 * Convert domain name to IDNA ASCII form
 *
 * @param string $domain The domain to convert, which must be UTF-8 encoded.
 * @param int|null $options Conversion options - combination of IDNA_* constants
 * (except IDNA_ERROR_* constants).
 * @param int|null $variant Either <code>INTL_IDNA_VARIANT_2003</code> for IDNA 2003 or
 * <code>INTL_IDNA_VARIANT_UTS46</code> for UTS #46.
 * @param array $idna_info This parameter can be used only if
 * <code>INTL_IDNA_VARIANT_UTS46</code> was used for
 * <code>variant</code>. In that case, it will be filled with an
 * array with the keys <code>'result'</code>, the possibly illegal
 * result of the transformation,
 * <code>'isTransitionalDifferent'</code>, a boolean indicating
 * whether the usage of the transitional mechanisms of UTS #46 either has
 * or would have changed the result and <code>'errors'</code>,
 * which is an <code>int</code> representing a bitset of the error
 * constants IDNA_ERROR_*.
 *
 * @return string The domain name encoded in ASCII-compatible form, or <code>FALSE</code> on failure
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.2, PECL idn >= 0.1
 *
 * @link http://www.php.net/manual/en/function.idn-to-ascii.php
 */
function idn_to_ascii($domain, $options = IDNA_DEFAULT, $variant = INTL_IDNA_VARIANT_2003, array &$idna_info = null)
{
}

/**
 * Convert domain name from IDNA ASCII to Unicode
 *
 * @param string $domain Domain to convert in an IDNA ASCII-compatible format.
 * @param int|null $options Conversion options - combination of IDNA_* constants
 * (except IDNA_ERROR_* constants).
 * @param int|null $variant Either <code>INTL_IDNA_VARIANT_2003</code> for IDNA 2003 or
 * <code>INTL_IDNA_VARIANT_UTS46</code> for UTS #46.
 * @param array $idna_info This parameter can be used only if
 * <code>INTL_IDNA_VARIANT_UTS46</code> was used for
 * <code>variant</code>. In that case, it will be filled with an
 * array with the keys <code>'result'</code>, the possibly illegal
 * result of the transformation,
 * <code>'isTransitionalDifferent'</code>, a boolean indicating
 * whether the usage of the transitional mechanisms of UTS #46 either has
 * or would have changed the result and <code>'errors'</code>,
 * which is an <code>int</code> representing a bitset of the error
 * constants IDNA_ERROR_*.
 *
 * @return string The domain name in Unicode, encoded in UTF-8, or <code>FALSE</code> on failure
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.2, PECL idn >= 0.1
 *
 * @link http://www.php.net/manual/en/function.idn-to-utf8.php
 */
function idn_to_utf8($domain, $options = IDNA_DEFAULT, $variant = INTL_IDNA_VARIANT_2003, array &$idna_info = null)
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
function intl_get_error_code()
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
function intl_get_error_message()
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
 * @param mixed $field
 */
function intlcal_clear(IntlCalendar $calendar, $field = null)
{
}

/**
 * @param mixed $timeZone
 * @param mixed $locale
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
 * @return int An ICU error code indicating either success, failure or a warning.
 *
 * @link http://www.php.net/manual/en/intlcalendar.geterrorcode.php
 */
function intlcal_get_error_code(IntlCalendar $calendar)
{
}

/**
 * Get last error message on the object
 *
 * @param IntlCalendar $calendar
 *
 * @return string The error message associated with last error that occurred in a function call
 * on this object, or a string indicating the non-existance of an error.
 *
 * @link http://www.php.net/manual/en/intlcalendar.geterrormessage.php
 */
function intlcal_get_error_message(IntlCalendar $calendar)
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
 * @param mixed $date
 */
function intlcal_is_weekend(IntlCalendar $calendar, $date = null)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $field
 * @param mixed $amountOrUpOrDown
 */
function intlcal_roll(IntlCalendar $calendar, $field, $amountOrUpOrDown = null)
{
}

/**
 * @param IntlCalendar $calendar
 * @param mixed $fieldOrYear
 * @param mixed $valueOrMonth
 * @param mixed $dayOfMonth
 * @param mixed $hour
 * @param mixed $minute
 * @param mixed $second
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
 * @param mixed $timeZoneOrYear
 * @param mixed $localeOrMonth
 * @param mixed $dayOfMonth
 * @param mixed $hour
 * @param mixed $minute
 * @param mixed $second
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
 * @param mixed $countryOrRawOffset
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
 * @param mixed $region
 * @param mixed $rawOffset
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
 * @param mixed $isSystemID
 */
function intltz_get_canonical_id($zoneId, &$isSystemID = null)
{
}

/**
 * @param IntlTimeZone $timeZone
 * @param mixed $isDaylight
 * @param mixed $style
 * @param mixed $locale
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
function intltz_get_error_code(IntlTimeZone $timeZone)
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
function intltz_get_error_message(IntlTimeZone $timeZone)
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
 * @param IntlTimeZone $otherTimeZone
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
 * @param string $header The string containing the "Accept-Language" header according to format in RFC 2616.
 *
 * @return string The corresponding locale identifier.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.acceptfromhttp.php
 */
function locale_accept_from_http($header)
{
}

/**
 * Canonicalize the locale string
 *
 * @param string $locale
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.canonicalize.php
 */
function locale_canonicalize($locale)
{
}

/**
 * Returns a correctly ordered and delimited locale ID
 *
 * @param array $subtags an array containing a list of key-value pairs, where the keys identify
 * the particular locale ID subtags, and the values are the associated
 * subtag values.
 * <blockquote>
 * The 'variant' and 'private' subtags can take maximum 15 values
 * whereas 'extlang' can take maximum 3 values.e.g. Variants are allowed
 * with the suffix ranging from 0-14. Hence the keys for the input array
 * can be variant0, variant1, ...,variant14. In the returned locale id,
 * the subtag is ordered by suffix resulting in variant0 followed by
 * variant1 followed by variant2 and so on.
 * The 'variant', 'private' and 'extlang' multiple values can be specified both
 * as array under specific key (e.g. 'variant') and as multiple numbered keys
 * (e.g. 'variant0', 'variant1', etc.).
 * </blockquote>
 *
 * @return string The corresponding locale identifier.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.composelocale.php
 */
function locale_compose(array $subtags)
{
}

/**
 * Checks if a language tag filter matches with locale
 *
 * @param string $langtag The language tag to check
 * @param string $locale The language range to check against
 * @param bool|null $canonicalize If true, the arguments will be converted to canonical form before
 * matching.
 *
 * @return bool <code>TRUE</code> if $locale matches $langtag <code>FALSE</code> otherwise.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.filtermatches.php
 */
function locale_filter_matches($langtag, $locale, $canonicalize = false)
{
}

/**
 * Gets the variants for the input locale
 *
 * @param string $locale The locale to extract the variants from
 *
 * @return array The <code>array</code> containing the list of all variants subtag for the locale
 * or <code>NULL</code> if not present
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getallvariants.php
 */
function locale_get_all_variants($locale)
{
}

/**
 * Gets the default locale value from the INTL global 'default_locale'
 *
 * @return string The current runtime locale
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getdefault.php
 */
function locale_get_default()
{
}

/**
 * Returns an appropriately localized display name for language of the inputlocale
 *
 * @param string $locale The locale to return a display language for
 * @param string $in_locale Optional format locale to use to display the language name
 *
 * @return string display name of the language for the $locale in the format appropriate for
 * $in_locale.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getdisplaylanguage.php
 */
function locale_get_display_language($locale, $in_locale)
{
}

/**
 * Returns an appropriately localized display name for the input locale
 *
 * @param string $locale The locale to return a display name for.
 * @param string $in_locale optional format locale
 *
 * @return string Display name of the locale in the format appropriate for $in_locale.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getdisplayname.php
 */
function locale_get_display_name($locale, $in_locale)
{
}

/**
 * Returns an appropriately localized display name for region of the input locale
 *
 * @param string $locale The locale to return a display region for.
 * @param string $in_locale Optional format locale to use to display the region name
 *
 * @return string display name of the region for the $locale in the format appropriate for
 * $in_locale.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getdisplayregion.php
 */
function locale_get_display_region($locale, $in_locale)
{
}

/**
 * Returns an appropriately localized display name for script of the input locale
 *
 * @param string $locale The locale to return a display script for
 * @param string $in_locale Optional format locale to use to display the script name
 *
 * @return string Display name of the script for the $locale in the format appropriate for
 * $in_locale.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getdisplayscript.php
 */
function locale_get_display_script($locale, $in_locale)
{
}

/**
 * Returns an appropriately localized display name for variants of the input locale
 *
 * @param string $locale The locale to return a display variant for
 * @param string $in_locale Optional format locale to use to display the variant name
 *
 * @return string Display name of the variant for the $locale in the format appropriate for
 * $in_locale.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getdisplayvariant.php
 */
function locale_get_display_variant($locale, $in_locale)
{
}

/**
 * Gets the keywords for the input locale
 *
 * @param string $locale The locale to extract the keywords from
 *
 * @return array Associative <code>array</code> containing the keyword-value pairs for this locale
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getkeywords.php
 */
function locale_get_keywords($locale)
{
}

/**
 * Gets the primary language for the input locale
 *
 * @param string $locale The locale to extract the primary language code from
 *
 * @return string The language code associated with the language or <code>NULL</code> in case of error.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getprimarylanguage.php
 */
function locale_get_primary_language($locale)
{
}

/**
 * Gets the region for the input locale
 *
 * @param string $locale The locale to extract the region code from
 *
 * @return string The region subtag for the locale or <code>NULL</code> if not present
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getregion.php
 */
function locale_get_region($locale)
{
}

/**
 * Gets the script for the input locale
 *
 * @param string $locale The locale to extract the script code from
 *
 * @return string The script subtag for the locale or <code>NULL</code> if not present
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.getscript.php
 */
function locale_get_script($locale)
{
}

/**
 * Searches the language tag list for the best match to the language
 *
 * @param array $langtag An <code>array</code> containing a list of language tags to compare to
 * <code>locale</code>. Maximum 100 items allowed.
 * @param string $locale The locale to use as the language range when matching.
 * @param bool|null $canonicalize If true, the arguments will be converted to canonical form before
 * matching.
 * @param string $default The locale to use if no match is found.
 *
 * @return string The closest matching language tag or default value.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.lookup.php
 */
function locale_lookup(array $langtag, $locale, $canonicalize = false, $default)
{
}

/**
 * Returns a key-value array of locale ID subtag elements
 *
 * @param string $locale The locale to extract the subtag array from. Note: The 'variant' and
 * 'private' subtags can take maximum 15 values whereas 'extlang' can take
 * maximum 3 values.
 *
 * @return array Returns an array containing a list of key-value pairs, where the keys
 * identify the particular locale ID subtags, and the values are the
 * associated subtag values. The array will be ordered as the locale id
 * subtags e.g. in the locale id if variants are '-varX-varY-varZ' then the
 * returned array will have variant0=>varX , variant1=>varY ,
 * variant2=>varZ
 * Returns <code>NULL</code> when the length of <code>locale</code> exceeds
 * <code>INTL_MAX_LOCALE_LEN</code>.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.parselocale.php
 */
function locale_parse($locale)
{
}

/**
 * Sets the default runtime locale
 *
 * @param string $locale Is a BCP 47 compliant language tag.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/locale.setdefault.php
 */
function locale_set_default($locale)
{
}

/**
 * Constructs a new Message Formatter
 *
 * @param string $locale The locale to use when formatting arguments
 * @param string $pattern The pattern string to stick arguments into.
 * The pattern uses an 'apostrophe-friendly' syntax; it is run through
 * umsg_autoQuoteApostrophe
 * before being interpreted.
 *
 * @return MessageFormatter The formatter <code>object</code>
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
 * @param array $args Arguments to insert into the format string
 * @param mixed $args
 *
 * @return string The formatted string, or <code>FALSE</code> if an error occurred
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/messageformatter.format.php
 */
function msgfmt_format(array $args, $args)
{
}

/**
 * Quick format message
 *
 * @param string $locale The locale to use for formatting locale-dependent parts
 * @param string $pattern The pattern <code>string</code> to insert things into.
 * The pattern uses an 'apostrophe-friendly' syntax; it is run through
 * umsg_autoQuoteApostrophe
 * before being interpreted.
 * @param array $args The <code>array</code> of values to insert into the format <code>string</code>
 *
 * @return string The formatted pattern string or <code>FALSE</code> if an error occurred
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/messageformatter.formatmessage.php
 */
function msgfmt_format_message($locale, $pattern, array $args)
{
}

/**
 * Get the error code from last operation
 *
 * @param mixed $nf
 *
 * @return int The error code, one of UErrorCode values. Initial value is U_ZERO_ERROR.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/messageformatter.geterrorcode.php
 */
function msgfmt_get_error_code($nf)
{
}

/**
 * Get the error text from the last operation
 *
 * @param mixed $coll
 *
 * @return string Description of the last error.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/messageformatter.geterrormessage.php
 */
function msgfmt_get_error_message($coll)
{
}

/**
 * Get the locale for which the formatter was created
 *
 * @param mixed $mf
 *
 * @return string The locale name
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/messageformatter.getlocale.php
 */
function msgfmt_get_locale($mf)
{
}

/**
 * Get the pattern used by the formatter
 *
 * @param mixed $mf
 *
 * @return string The pattern <code>string</code> for this message formatter
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/messageformatter.getpattern.php
 */
function msgfmt_get_pattern($mf)
{
}

/**
 * Parse input string according to pattern
 *
 * @param string $value The <code>string</code> to parse
 * @param mixed $source
 *
 * @return array An <code>array</code> containing the items extracted, or <code>FALSE</code> on error
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/messageformatter.parse.php
 */
function msgfmt_parse($value, $source)
{
}

/**
 * Quick parse input string
 *
 * @param string $locale The locale to use for parsing locale-dependent parts
 * @param string $pattern The pattern with which to parse the <code>value</code>.
 * @param string $source The <code>string</code> to parse, conforming to the <code>pattern</code>.
 *
 * @return array An <code>array</code> containing items extracted, or <code>FALSE</code> on error
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/messageformatter.parsemessage.php
 */
function msgfmt_parse_message($locale, $pattern, $source)
{
}

/**
 * Set the pattern used by the formatter
 *
 * @param string $pattern The pattern <code>string</code> to use in this message formatter.
 * The pattern uses an 'apostrophe-friendly' syntax; it is run through
 * umsg_autoQuoteApostrophe
 * before being interpreted.
 * @param mixed $pattern
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/messageformatter.setpattern.php
 */
function msgfmt_set_pattern($pattern, $pattern)
{
}

/**
 * Checks if the provided string is already in the specified normalization
 * form
 *
 * @param string $input The input string to normalize
 * @param int|null $form One of the normalization forms.
 *
 * @return bool <code>TRUE</code> if normalized, <code>FALSE</code> otherwise or if there an error
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/normalizer.isnormalized.php
 */
function normalizer_is_normalized($input, $form = Normalizer::FORM_C)
{
}

/**
 * Normalizes the input provided and returns the normalized string
 *
 * @param string $input The input string to normalize
 * @param int|null $form One of the normalization forms.
 *
 * @return string The normalized string or <code>FALSE</code> if an error occurred.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/normalizer.normalize.php
 */
function normalizer_normalize($input, $form = Normalizer::FORM_C)
{
}

/**
 * Create a number formatter
 *
 * @param string $locale Locale in which the number would be formatted (locale name, e.g. en_CA).
 * @param int $style Style of the formatting, one of the
 * format style constants. If
 * <code>NumberFormatter::PATTERN_DECIMAL</code>
 * or <code>NumberFormatter::PATTERN_RULEBASED</code>
 * is passed then the number format is opened using the given pattern,
 * which must conform to the syntax described in
 * ICU DecimalFormat
 * documentation or
 * ICU RuleBasedNumberFormat
 * documentation, respectively.
 * @param string $pattern Pattern string if the chosen style requires a pattern.
 *
 * @return NumberFormatter Returns <code>NumberFormatter</code> object or <code>FALSE</code> on error.
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
 * @param float $value The value to format. Can be <code>integer</code> or <code>float</code>,
 * other values will be converted to a numeric value.
 * @param int $type The
 * formatting type to use.
 * @param mixed $type
 *
 * @return string Returns the string containing formatted value, or <code>FALSE</code> on error.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.format.php
 */
function numfmt_format($value, $type, $type = null)
{
}

/**
 * Format a currency value
 *
 * @param float $value The numeric currency value.
 * @param string $currency The 3-letter ISO 4217 currency code indicating the currency to use.
 * @param mixed $currency
 *
 * @return string String representing the formatted currency value.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.formatcurrency.php
 */
function numfmt_format_currency($value, $currency, $currency)
{
}

/**
 * Get an attribute
 *
 * @param int $attr Attribute specifier - one of the
 * numeric attribute constants.
 * @param mixed $attr
 *
 * @return int Return attribute value on success, or <code>FALSE</code> on error.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.getattribute.php
 */
function numfmt_get_attribute($attr, $attr)
{
}

/**
 * Get formatter's last error code
 *
 * @param mixed $nf
 *
 * @return int Returns error code from last formatter call.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.geterrorcode.php
 */
function numfmt_get_error_code($nf)
{
}

/**
 * Get formatter's last error message
 *
 * @param mixed $nf
 *
 * @return string Returns error message from last formatter call.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.geterrormessage.php
 */
function numfmt_get_error_message($nf)
{
}

/**
 * Get formatter locale
 *
 * @param int $type You can choose between valid and actual locale (
 * <code>Locale::VALID_LOCALE</code>,
 * <code>Locale::ACTUAL_LOCALE</code>,
 * respectively). The default is the actual locale.
 * @param mixed $type
 *
 * @return string The locale name used to create the formatter.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.getlocale.php
 */
function numfmt_get_locale($type, $type = null)
{
}

/**
 * Get formatter pattern
 *
 * @param mixed $nf
 *
 * @return string Pattern <code>string</code> that is used by the formatter, or <code>FALSE</code> if an error happens.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.getpattern.php
 */
function numfmt_get_pattern($nf)
{
}

/**
 * Get a symbol value
 *
 * @param int $attr Symbol specifier, one of the
 * format symbol constants.
 * @param mixed $attr
 *
 * @return string The symbol string or <code>FALSE</code> on error.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.getsymbol.php
 */
function numfmt_get_symbol($attr, $attr)
{
}

/**
 * Get a text attribute
 *
 * @param int $attr Attribute specifier - one of the
 * text attribute constants.
 * @param mixed $attr
 *
 * @return string Return attribute value on success, or <code>FALSE</code> on error.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.gettextattribute.php
 */
function numfmt_get_text_attribute($attr, $attr)
{
}

/**
 * Parse a number
 *
 * @param string $value
 * @param int $type The
 * formatting type to use. By default,
 * <code>NumberFormatter::TYPE_DOUBLE</code> is used.
 * @param int $position Offset in the string at which to begin parsing. On return, this value
 * will hold the offset at which parsing ended.
 * @param mixed $position
 *
 * @return mixed The value of the parsed number or <code>FALSE</code> on error.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.parse.php
 */
function numfmt_parse($value, $type, $position = null, &$position = null)
{
}

/**
 * Parse a currency number
 *
 * @param string $value
 * @param string $currency Parameter to receive the currency name (3-letter ISO 4217 currency
 * code).
 * @param int $position Offset in the string at which to begin parsing. On return, this value
 * will hold the offset at which parsing ended.
 * @param mixed $position
 *
 * @return float The parsed numeric value or <code>FALSE</code> on error.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.parsecurrency.php
 */
function numfmt_parse_currency($value, $currency, &$position, &$position = null)
{
}

/**
 * Set an attribute
 *
 * @param int $attr Attribute specifier - one of the
 * numeric attribute constants.
 * @param int $value The attribute value.
 * @param mixed $value
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.setattribute.php
 */
function numfmt_set_attribute($attr, $value, $value)
{
}

/**
 * Set formatter pattern
 *
 * @param string $pattern Pattern in syntax described in
 * ICU DecimalFormat
 * documentation.
 * @param mixed $pattern
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.setpattern.php
 */
function numfmt_set_pattern($pattern, $pattern)
{
}

/**
 * Set a symbol value
 *
 * @param int $attr Symbol specifier, one of the
 * format symbol constants.
 * @param string $value Text for the symbol.
 * @param mixed $symbol
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.setsymbol.php
 */
function numfmt_set_symbol($attr, $value, $symbol)
{
}

/**
 * Set a text attribute
 *
 * @param int $attr Attribute specifier - one of the
 * text attribute
 * constants.
 * @param string $value Text for the attribute value.
 * @param mixed $value
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 *
 * @link http://www.php.net/manual/en/numberformatter.settextattribute.php
 */
function numfmt_set_text_attribute($attr, $value, $value)
{
}

/**
 * Get number of elements in the bundle
 *
 * @param mixed $bundle
 *
 * @return int Returns number of elements in the bundle.
 *
 * @link http://www.php.net/manual/en/resourcebundle.count.php
 */
function resourcebundle_count($bundle)
{
}

/**
 * Create a resource bundle
 *
 * @param string $locale Locale for which the resources should be loaded (locale name, e.g. en_CA).
 * @param string $bundlename The directory where the data is stored or the name of the .dat file.
 * @param bool $fallback Whether locale should match exactly or fallback to parent locale is allowed.
 *
 * @return ResourceBundle Returns <code>ResourceBundle</code> object or <code>NULL</code> on error.
 *
 * @link http://www.php.net/manual/en/resourcebundle.create.php
 */
function resourcebundle_create($locale, $bundlename, $fallback = null)
{
}

/**
 * Get data from the bundle
 *
 * @param string|int $index Data index, must be string or integer.
 * @param bool|null $fallback Whether locale should match exactly or fallback to parent locale is allowed.
 * @param mixed $fallback
 *
 * @return mixed Returns the data located at the index or <code>NULL</code> on error. Strings, integers and binary data strings
 * are returned as corresponding PHP types, integer array is returned as PHP array. Complex types are
 * returned as <code>ResourceBundle</code> object.
 *
 * @link http://www.php.net/manual/en/resourcebundle.get.php
 */
function resourcebundle_get($index, $fallback = true, $fallback = null)
{
}

/**
 * Get bundle's last error code
 *
 * @param mixed $bundle
 *
 * @return int Returns error code from last bundle object call.
 *
 * @link http://www.php.net/manual/en/resourcebundle.geterrorcode.php
 */
function resourcebundle_get_error_code($bundle)
{
}

/**
 * Get bundle's last error message
 *
 * @param mixed $bundle
 *
 * @return string Returns error message from last bundle object's call.
 *
 * @link http://www.php.net/manual/en/resourcebundle.geterrormessage.php
 */
function resourcebundle_get_error_message($bundle)
{
}

/**
 * Get supported locales
 *
 * @param string $bundlename Path of ResourceBundle for which to get available locales, or
 * empty string for default locales list.
 *
 * @return array Returns the list of locales supported by the bundle.
 *
 * @link http://www.php.net/manual/en/resourcebundle.locales.php
 */
function resourcebundle_locales($bundlename)
{
}

/**
 * Create a transliterator
 *
 * @param string $id The id.
 * @param int $direction The direction, defaults to
 * &gt;Transliterator::FORWARD.
 * May also be set to
 * Transliterator::REVERSE.
 *
 * @return Transliterator Returns a <code>Transliterator</code> object on success,
 * or <code>NULL</code> on failure.
 *
 * @link http://www.php.net/manual/en/transliterator.create.php
 */
function transliterator_create($id, $direction = null)
{
}

/**
 * Create transliterator from rules
 *
 * @param string $rules The rules.
 * @param string $direction The direction, defaults to
 * &gt;Transliterator::FORWARD.
 * May also be set to
 * Transliterator::REVERSE.
 *
 * @return Transliterator Returns a <code>Transliterator</code> object on success,
 * or <code>NULL</code> on failure.
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
 * @return Transliterator Returns a <code>Transliterator</code> object on success,
 * or <code>NULL</code> on failure
 *
 * @link http://www.php.net/manual/en/transliterator.createinverse.php
 */
function transliterator_create_inverse(Transliterator $orig_trans)
{
}

/**
 * Get last error code
 *
 * @param Transliterator $trans
 *
 * @return int The error code on success,
 * or <code>FALSE</code> if none exists, or on failure.
 *
 * @link http://www.php.net/manual/en/transliterator.geterrorcode.php
 */
function transliterator_get_error_code(Transliterator $trans)
{
}

/**
 * Get last error message
 *
 * @param Transliterator $trans
 *
 * @return string The error message on success,
 * or <code>FALSE</code> if none exists, or on failure.
 *
 * @link http://www.php.net/manual/en/transliterator.geterrormessage.php
 */
function transliterator_get_error_message(Transliterator $trans)
{
}

/**
 * Get transliterator IDs
 *
 * @return array An <code>array</code> of registered transliterator IDs on success,
 * or <code>FALSE</code> on failure.
 *
 * @link http://www.php.net/manual/en/transliterator.listids.php
 */
function transliterator_list_ids()
{
}

/**
 * Transliterate a string
 *
 * @param string $subject The string to be transformed.
 * @param int $start The start index (in UTF-16 code units) from which the string will start
 * to be transformed, inclusive. Indexing starts at 0. The text before will
 * be left as is.
 * @param int $end The end index (in UTF-16 code units) until which the string will be
 * transformed, exclusive. Indexing starts at 0. The text after will be
 * left as is.
 * @param mixed $end
 *
 * @return string The transfomed string on success, or <code>FALSE</code> on failure.
 *
 * @link http://www.php.net/manual/en/transliterator.transliterate.php
 */
function transliterator_transliterate($subject, $start, $end = null, $end = null)
{
}
