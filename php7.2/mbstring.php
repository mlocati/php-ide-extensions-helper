<?php
// Start of extension: mbstring
// - parsed on POSIX with PHP 7.2.3 (extension version 7.2.3)
// - parsed on Windows with PHP 7.2.4 (extension version 7.2.4)

/**
 * @link http://www.php.net/manual/en/mbstring.constants.php#constant.mb-case-lower
 *
 * @var int
 */
const MB_CASE_LOWER = 1;

/**
 * @link http://www.php.net/manual/en/mbstring.constants.php#constant.mb-case-title
 *
 * @var int
 */
const MB_CASE_TITLE = 2;

/**
 * @link http://www.php.net/manual/en/mbstring.constants.php#constant.mb-case-upper
 *
 * @var int
 */
const MB_CASE_UPPER = 0;

/**
 * @link http://www.php.net/manual/en/mbstring.constants.php#constant.mb-overload-mail
 *
 * @var int
 */
const MB_OVERLOAD_MAIL = 1;

/**
 * @link http://www.php.net/manual/en/mbstring.constants.php#constant.mb-overload-regex
 *
 * @var int
 */
const MB_OVERLOAD_REGEX = 4;

/**
 * @link http://www.php.net/manual/en/mbstring.constants.php#constant.mb-overload-string
 *
 * @var int
 */
const MB_OVERLOAD_STRING = 2;

/**
 * Check if the string is valid for the specified encoding
 *
 * mixed|null $var
 * mixed|null $encoding
 *
 * @return bool
 *
 * @since PHP 4 >= 4.4.3, PHP 5 >= 5.1.3, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-check-encoding.php
 */
function mb_check_encoding($var = null, $encoding = null): bool
{
}

/**
 * Get a specific character
 *
 * mixed $cp
 * mixed|null $encoding
 *
 * @return string
 *
 * @since PHP 7 >= 7.2.0
 *
 * @link http://www.php.net/manual/en/function.mb-chr.php
 */
function mb_chr($cp, $encoding = null): string
{
}

/**
 * Perform case folding on a string
 *
 * mixed $sourcestring
 * mixed $mode
 * mixed|null $encoding
 *
 * @return string
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-convert-case.php
 */
function mb_convert_case($sourcestring, $mode, $encoding = null): string
{
}

/**
 * Convert character encoding
 *
 * mixed $str
 * mixed $to
 * mixed|null $from
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-convert-encoding.php
 */
function mb_convert_encoding($str, $to, $from = null): string
{
}

/**
 * Convert "kana" one from another ("zen-kaku", "han-kaku" and more)
 *
 * mixed $str
 * mixed|null $option
 * mixed|null $encoding
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-convert-kana.php
 */
function mb_convert_kana($str, $option = null, $encoding = null): string
{
}

/**
 * Convert character code in variable(s)
 *
 * mixed $to
 * mixed $from
 * mixed $vars
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-convert-variables.php
 */
function mb_convert_variables($to, $from, &...$vars): string
{
}

/**
 * Decode string in MIME header field
 *
 * mixed $string
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-decode-mimeheader.php
 */
function mb_decode_mimeheader($string): string
{
}

/**
 * Decode HTML numeric string reference to character
 *
 * mixed $string
 * mixed $convmap
 * mixed|null $encoding
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-decode-numericentity.php
 */
function mb_decode_numericentity($string, $convmap, $encoding = null): string
{
}

/**
 * Detect character encoding
 *
 * mixed $str
 * mixed|null $encoding_list
 * mixed|null $strict
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-detect-encoding.php
 */
function mb_detect_encoding($str, $encoding_list = null, $strict = null): string
{
}

/**
 * Set/Get character encoding detection order
 *
 * mixed|null $encoding
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-detect-order.php
 */
function mb_detect_order($encoding = null)
{
}

/**
 * Encode string for MIME header
 *
 * mixed $str
 * mixed|null $charset
 * mixed|null $transfer
 * mixed|null $linefeed
 * mixed|null $indent
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-encode-mimeheader.php
 */
function mb_encode_mimeheader($str, $charset = null, $transfer = null, $linefeed = null, $indent = null): string
{
}

/**
 * Encode character to HTML numeric string reference
 *
 * mixed $string
 * mixed $convmap
 * mixed|null $encoding
 * mixed|null $is_hex
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-encode-numericentity.php
 */
function mb_encode_numericentity($string, $convmap, $encoding = null, $is_hex = null): string
{
}

/**
 * Get aliases of a known encoding type
 *
 * mixed $encoding
 *
 * @return array
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-encoding-aliases.php
 */
function mb_encoding_aliases($encoding): array
{
}

/**
 * Regular expression match with multibyte support
 *
 * mixed $pattern
 * mixed $string
 * mixed|null $registers
 *
 * @return int
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-ereg.php
 */
function mb_ereg($pattern, $string, &$registers = null): int
{
}

/**
 * Regular expression match for multibyte string
 *
 * mixed $pattern
 * mixed $string
 * mixed|null $option
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-ereg-match.php
 */
function mb_ereg_match($pattern, $string, $option = null): bool
{
}

/**
 * Replace regular expression with multibyte support
 *
 * mixed $pattern
 * mixed $replacement
 * mixed $string
 * mixed|null $option
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-ereg-replace.php
 */
function mb_ereg_replace($pattern, $replacement, $string, $option = null): string
{
}

/**
 * Perform a regular expresssion seach and replace with multibyte support using a callback
 *
 * mixed $pattern
 * mixed $callback
 * mixed $string
 * mixed|null $option
 *
 * @return string
 *
 * @since PHP 5 >= 5.4.1, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-ereg-replace-callback.php
 */
function mb_ereg_replace_callback($pattern, $callback, $string, $option = null): string
{
}

/**
 * Multibyte regular expression match for predefined multibyte string
 *
 * mixed|null $pattern
 * mixed|null $option
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-ereg-search.php
 */
function mb_ereg_search($pattern = null, $option = null): bool
{
}

/**
 * Returns start point for next regular expression match
 *
 * @return int
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-ereg-search-getpos.php
 */
function mb_ereg_search_getpos(): int
{
}

/**
 * Retrieve the result from the last multibyte regular expression match
 *
 * @return array
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-ereg-search-getregs.php
 */
function mb_ereg_search_getregs(): array
{
}

/**
 * Setup string and regular expression for a multibyte regular expression match
 *
 * mixed $string
 * mixed|null $pattern
 * mixed|null $option
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-ereg-search-init.php
 */
function mb_ereg_search_init($string, $pattern = null, $option = null): bool
{
}

/**
 * Returns position and length of a matched part of the multibyte regular expression for a predefined multibyte string
 *
 * mixed|null $pattern
 * mixed|null $option
 *
 * @return array
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-ereg-search-pos.php
 */
function mb_ereg_search_pos($pattern = null, $option = null): array
{
}

/**
 * Returns the matched part of a multibyte regular expression
 *
 * mixed|null $pattern
 * mixed|null $option
 *
 * @return array
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-ereg-search-regs.php
 */
function mb_ereg_search_regs($pattern = null, $option = null): array
{
}

/**
 * Set start point of next regular expression match
 *
 * mixed $position
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-ereg-search-setpos.php
 */
function mb_ereg_search_setpos($position): bool
{
}

/**
 * Regular expression match ignoring case with multibyte support
 *
 * mixed $pattern
 * mixed $string
 * mixed|null $registers
 *
 * @return int
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-eregi.php
 */
function mb_eregi($pattern, $string, &$registers = null): int
{
}

/**
 * Replace regular expression with multibyte support ignoring case
 *
 * mixed $pattern
 * mixed $replacement
 * mixed $string
 * mixed|null $option
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-eregi-replace.php
 */
function mb_eregi_replace($pattern, $replacement, $string, $option = null): string
{
}

/**
 * Get internal settings of mbstring
 *
 * mixed|null $type
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-get-info.php
 */
function mb_get_info($type = null)
{
}

/**
 * Detect HTTP input character encoding
 *
 * mixed|null $type
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-http-input.php
 */
function mb_http_input($type = null)
{
}

/**
 * Set/Get HTTP output character encoding
 *
 * mixed|null $encoding
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-http-output.php
 */
function mb_http_output($encoding = null)
{
}

/**
 * Set/Get internal character encoding
 *
 * mixed|null $encoding
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-internal-encoding.php
 */
function mb_internal_encoding($encoding = null)
{
}

/**
 * Set/Get current language
 *
 * mixed|null $language
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-language.php
 */
function mb_language($language = null)
{
}

/**
 * Returns an array of all supported encodings
 *
 * @return array
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-list-encodings.php
 */
function mb_list_encodings(): array
{
}

/**
 * Get code point of character
 *
 * mixed $str
 * mixed|null $encoding
 *
 * @return int
 *
 * @since PHP 7 >= 7.2.0
 *
 * @link http://www.php.net/manual/en/function.mb-ord.php
 */
function mb_ord($str, $encoding = null): int
{
}

/**
 * Callback function converts character encoding in output buffer
 *
 * mixed $contents
 * mixed $status
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-output-handler.php
 */
function mb_output_handler($contents, $status): string
{
}

/**
 * Parse GET/POST/COOKIE data and set global variable
 *
 * mixed $encoded_string
 * mixed|null $result
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-parse-str.php
 */
function mb_parse_str($encoded_string, &$result = null): bool
{
}

/**
 * Get MIME charset string
 *
 * mixed $encoding
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-preferred-mime-name.php
 */
function mb_preferred_mime_name($encoding): string
{
}

/**
 * Set/Get character encoding for multibyte regex
 *
 * mixed|null $encoding
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-regex-encoding.php
 */
function mb_regex_encoding($encoding = null)
{
}

/**
 * Set/Get the default options for mbregex functions
 *
 * mixed|null $options
 *
 * @return string
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-regex-set-options.php
 */
function mb_regex_set_options($options = null): string
{
}

/**
 * Description
 *
 * mixed $str
 * mixed|null $encoding
 *
 * @return string
 *
 * @since PHP 7 >= 7.2.0
 *
 * @link http://www.php.net/manual/en/function.mb-scrub.php
 */
function mb_scrub($str, $encoding = null): string
{
}

/**
 * Send encoded mail
 *
 * mixed $to
 * mixed $subject
 * mixed $message
 * mixed|null $additional_headers
 * mixed|null $additional_parameters
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-send-mail.php
 */
function mb_send_mail($to, $subject, $message, $additional_headers = null, $additional_parameters = null): bool
{
}

/**
 * Split multibyte string using regular expression
 *
 * mixed $pattern
 * mixed $string
 * mixed|null $limit
 *
 * @return array
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-split.php
 */
function mb_split($pattern, $string, $limit = null): array
{
}

/**
 * Get part of string
 *
 * mixed $str
 * mixed $start
 * mixed|null $length
 * mixed|null $encoding
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strcut.php
 */
function mb_strcut($str, $start, $length = null, $encoding = null): string
{
}

/**
 * Get truncated string with specified width
 *
 * mixed $str
 * mixed $start
 * mixed $width
 * mixed|null $trimmarker
 * mixed|null $encoding
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strimwidth.php
 */
function mb_strimwidth($str, $start, $width, $trimmarker = null, $encoding = null): string
{
}

/**
 * Finds position of first occurrence of a string within another, case insensitive
 *
 * mixed $haystack
 * mixed $needle
 * mixed|null $offset
 * mixed|null $encoding
 *
 * @return int
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-stripos.php
 */
function mb_stripos($haystack, $needle, $offset = null, $encoding = null): int
{
}

/**
 * Finds first occurrence of a string within another, case insensitive
 *
 * mixed $haystack
 * mixed $needle
 * mixed|null $part
 * mixed|null $encoding
 *
 * @return string
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-stristr.php
 */
function mb_stristr($haystack, $needle, $part = null, $encoding = null): string
{
}

/**
 * Get string length
 *
 * mixed $str
 * mixed|null $encoding
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strlen.php
 */
function mb_strlen($str, $encoding = null): int
{
}

/**
 * Find position of first occurrence of string in a string
 *
 * mixed $haystack
 * mixed $needle
 * mixed|null $offset
 * mixed|null $encoding
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strpos.php
 */
function mb_strpos($haystack, $needle, $offset = null, $encoding = null): int
{
}

/**
 * Finds the last occurrence of a character in a string within another
 *
 * mixed $haystack
 * mixed $needle
 * mixed|null $part
 * mixed|null $encoding
 *
 * @return string
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strrchr.php
 */
function mb_strrchr($haystack, $needle, $part = null, $encoding = null): string
{
}

/**
 * Finds the last occurrence of a character in a string within another, case insensitive
 *
 * mixed $haystack
 * mixed $needle
 * mixed|null $part
 * mixed|null $encoding
 *
 * @return string
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strrichr.php
 */
function mb_strrichr($haystack, $needle, $part = null, $encoding = null): string
{
}

/**
 * Finds position of last occurrence of a string within another, case insensitive
 *
 * mixed $haystack
 * mixed $needle
 * mixed|null $offset
 * mixed|null $encoding
 *
 * @return int
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strripos.php
 */
function mb_strripos($haystack, $needle, $offset = null, $encoding = null): int
{
}

/**
 * Find position of last occurrence of a string in a string
 *
 * mixed $haystack
 * mixed $needle
 * mixed|null $offset
 * mixed|null $encoding
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strrpos.php
 */
function mb_strrpos($haystack, $needle, $offset = null, $encoding = null): int
{
}

/**
 * Finds first occurrence of a string within another
 *
 * mixed $haystack
 * mixed $needle
 * mixed|null $part
 * mixed|null $encoding
 *
 * @return string
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strstr.php
 */
function mb_strstr($haystack, $needle, $part = null, $encoding = null): string
{
}

/**
 * Make a string lowercase
 *
 * mixed $sourcestring
 * mixed|null $encoding
 *
 * @return string
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strtolower.php
 */
function mb_strtolower($sourcestring, $encoding = null): string
{
}

/**
 * Make a string uppercase
 *
 * mixed $sourcestring
 * mixed|null $encoding
 *
 * @return string
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strtoupper.php
 */
function mb_strtoupper($sourcestring, $encoding = null): string
{
}

/**
 * Return width of string
 *
 * mixed $str
 * mixed|null $encoding
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strwidth.php
 */
function mb_strwidth($str, $encoding = null): int
{
}

/**
 * Set/Get substitution character
 *
 * mixed|null $substchar
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-substitute-character.php
 */
function mb_substitute_character($substchar = null)
{
}

/**
 * Get part of string
 *
 * mixed $str
 * mixed $start
 * mixed|null $length
 * mixed|null $encoding
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-substr.php
 */
function mb_substr($str, $start, $length = null, $encoding = null): string
{
}

/**
 * Count the number of substring occurrences
 *
 * mixed $haystack
 * mixed $needle
 * mixed|null $encoding
 *
 * @return int
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-substr-count.php
 */
function mb_substr_count($haystack, $needle, $encoding = null): int
{
}

/**
 * mixed $pattern
 * mixed $string
 * mixed|null $registers
 */
function mbereg($pattern, $string, &$registers = null)
{
}

/**
 * mixed $pattern
 * mixed $string
 * mixed|null $option
 */
function mbereg_match($pattern, $string, $option = null)
{
}

/**
 * mixed $pattern
 * mixed $replacement
 * mixed $string
 * mixed|null $option
 */
function mbereg_replace($pattern, $replacement, $string, $option = null)
{
}

/**
 * mixed|null $pattern
 * mixed|null $option
 */
function mbereg_search($pattern = null, $option = null)
{
}

function mbereg_search_getpos()
{
}

function mbereg_search_getregs()
{
}

/**
 * mixed $string
 * mixed|null $pattern
 * mixed|null $option
 */
function mbereg_search_init($string, $pattern = null, $option = null)
{
}

/**
 * mixed|null $pattern
 * mixed|null $option
 */
function mbereg_search_pos($pattern = null, $option = null)
{
}

/**
 * mixed|null $pattern
 * mixed|null $option
 */
function mbereg_search_regs($pattern = null, $option = null)
{
}

/**
 * mixed $position
 */
function mbereg_search_setpos($position)
{
}

/**
 * mixed $pattern
 * mixed $string
 * mixed|null $registers
 */
function mberegi($pattern, $string, &$registers = null)
{
}

/**
 * mixed $pattern
 * mixed $replacement
 * mixed $string
 * mixed|null $option
 */
function mberegi_replace($pattern, $replacement, $string, $option = null)
{
}

/**
 * mixed|null $encoding
 */
function mbregex_encoding($encoding = null)
{
}

/**
 * mixed $pattern
 * mixed $string
 * mixed|null $limit
 */
function mbsplit($pattern, $string, $limit = null)
{
}
