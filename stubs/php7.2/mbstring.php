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
 * @param string|null $var The byte stream to check. If it is omitted, this function checks
 * all the input from the beginning of the request.
 * @param string|null $encoding The expected encoding.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.4.3, PHP 5 >= 5.1.3, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-check-encoding.php
 */
function mb_check_encoding(string $var = null, string $encoding = /* mb_internal_encoding() */ null): bool
{
}

/**
 * Get a specific character
 *
 * @param int $cp
 * @param string $encoding
 *
 * @return string Returns a specific character or <code>FALSE</code> on failure.
 *
 * @since PHP 7 >= 7.2.0
 *
 * @link http://www.php.net/manual/en/function.mb-chr.php
 */
function mb_chr(int $cp, string $encoding = null): string
{
}

/**
 * Perform case folding on a string
 *
 * @param string $str The <code>string</code> being converted.
 * @param int $mode The mode of the conversion. It can be one of
 * <code>MB_CASE_UPPER</code>,
 * <code>MB_CASE_LOWER</code>, or
 * <code>MB_CASE_TITLE</code>.
 * @param string|null $encoding The <code>encoding</code>
 * parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 *
 * @return string A case folded version of <code>string</code> converted in the
 * way specified by <code>mode</code>.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-convert-case.php
 */
function mb_convert_case(string $str, int $mode, string $encoding = /* mb_internal_encoding() */ null): string
{
}

/**
 * Convert character encoding
 *
 * @param string $str The <code>string</code> being encoded.
 * @param string $to_encoding The type of encoding that <code>str</code> is being converted to.
 * @param mixed|null $from_encoding Is specified by character code names before conversion. It is either
 * an <code>array</code>, or a comma separated enumerated list.
 * If <code>from_encoding</code> is not specified, the internal
 * encoding will be used.
 * <!-- link to internal encoding info -->
 *
 * @return string The encoded <code>string</code>.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-convert-encoding.php
 */
function mb_convert_encoding(string $str, string $to_encoding, $from_encoding = /* mb_internal_encoding() */ null): string
{
}

/**
 * Convert "kana" one from another ("zen-kaku", "han-kaku" and more)
 *
 * @param string $str The <code>string</code> being converted.
 * @param string|null $option The conversion option.
 * @param string|null $encoding The <code>encoding</code>
 * parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 *
 * @return string The converted <code>string</code>.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-convert-kana.php
 */
function mb_convert_kana(string $str, string $option = "KV", string $encoding = /* mb_internal_encoding() */ null): string
{
}

/**
 * Convert character code in variable(s)
 *
 * @param string $to_encoding The encoding that the <code>string</code> is being converted to.
 * @param mixed $from_encoding <code>from_encoding</code> is specified as an <code>array</code>
 * or comma separated <code>string</code>, it tries to detect encoding from
 * <code>from-coding</code>. When <code>from_encoding</code>
 * is omitted, <code>detect_order</code> is used.
 * @param mixed $vars <code>vars</code> is the reference to the
 * variable being converted. String, Array and Object are accepted.
 * <code>mb_convert_variables</code> assumes all parameters
 * have the same encoding.
 *
 * @return string The character encoding before conversion for success,
 * or <code>FALSE</code> for failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-convert-variables.php
 */
function mb_convert_variables(string $to_encoding, $from_encoding, &...$vars): string
{
}

/**
 * Decode string in MIME header field
 *
 * @param string $str The <code>string</code> being decoded.
 *
 * @return string The decoded <code>string</code> in internal character encoding.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-decode-mimeheader.php
 */
function mb_decode_mimeheader(string $str): string
{
}

/**
 * Decode HTML numeric string reference to character
 *
 * @param string $str The <code>string</code> being decoded.
 * @param array $convmap <code>convmap</code> is an <code>array</code> that specifies
 * the code area to convert.
 * @param string|null $encoding The <code>encoding</code>
 * parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 *
 * @return string The converted <code>string</code>.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-decode-numericentity.php
 */
function mb_decode_numericentity(string $str, array $convmap, string $encoding = /* mb_internal_encoding() */ null): string
{
}

/**
 * Detect character encoding
 *
 * @param string $str The <code>string</code> being detected.
 * @param mixed|null $encoding_list <code>encoding_list</code> is list of character
 * encoding. Encoding order may be specified by array or comma
 * separated list string.
 * @param bool|null $strict <code>strict</code> specifies whether to use
 * the strict encoding detection or not.
 * Default is <code>FALSE</code>.
 *
 * @return string The detected character encoding or <code>FALSE</code> if the encoding cannot be
 * detected from the given string.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-detect-encoding.php
 */
function mb_detect_encoding(string $str, $encoding_list = /* mb_detect_order() */ null, bool $strict = false): string
{
}

/**
 * Set/Get character encoding detection order
 *
 * @param mixed|null $encoding_list <code>encoding_list</code> is an <code>array</code> or
 * comma separated list of character encoding. See supported encodings.
 *
 * @return mixed When setting the encoding detection order, <code>TRUE</code> is returned on success or <code>FALSE</code> on failure.
 * When getting the encoding detection order, an ordered array of the encodings is returned.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-detect-order.php
 */
function mb_detect_order($encoding_list = /* mb_detect_order() */ null)
{
}

/**
 * Encode string for MIME header
 *
 * @param string $str The <code>string</code> being encoded.
 * Its encoding should be same as <code>mb_internal_encoding</code>.
 * @param string|null $charset <code>charset</code> specifies the name of the character set
 * in which <code>str</code> is represented in. The default value
 * is determined by the current NLS setting (<code>mbstring.language</code>).
 * @param string|null $transfer_encoding <code>transfer_encoding</code> specifies the scheme of MIME
 * encoding. It should be either <code>"B"</code> (Base64) or
 * <code>"Q"</code> (Quoted-Printable). Falls back to
 * <code>"B"</code> if not given.
 * @param string|null $linefeed <code>linefeed</code> specifies the EOL (end-of-line) marker
 * with which <code>mb_encode_mimeheader</code> performs
 * line-folding (a RFC term,
 * the act of breaking a line longer than a certain length into multiple
 * lines. The length is currently hard-coded to 74 characters).
 * Falls back to <code>"\r\n"</code> (CRLF) if not given.
 * @param int|null $indent Indentation of the first line (number of characters in the header
 * before <code>str</code>).
 *
 * @return string A converted version of the <code>string</code> represented in ASCII.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-encode-mimeheader.php
 */
function mb_encode_mimeheader(string $str, string $charset = /* determined by mb_language() */ null, string $transfer_encoding = "B", string $linefeed = "\r\n", int $indent = 0): string
{
}

/**
 * Encode character to HTML numeric string reference
 *
 * @param string $str The <code>string</code> being encoded.
 * @param array $convmap <code>convmap</code> is array specifies code area to
 * convert.
 * @param string|null $encoding The <code>encoding</code>
 * parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 * @param bool|null $is_hex
 *
 * @return string The converted <code>string</code>.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-encode-numericentity.php
 */
function mb_encode_numericentity(string $str, array $convmap, string $encoding = /* mb_internal_encoding() */ null, bool $is_hex = false): string
{
}

/**
 * Get aliases of a known encoding type
 *
 * @param string $encoding The encoding type being checked, for aliases.
 *
 * @return array Returns a numerically indexed array of encoding aliases on success,
 * or <code>FALSE</code> on failure
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-encoding-aliases.php
 */
function mb_encoding_aliases(string $encoding): array
{
}

/**
 * Regular expression match with multibyte support
 *
 * @param string $pattern The search pattern.
 * @param string $string The search <code>string</code>.
 * @param array $regs If matches are found for parenthesized substrings of
 * <code>pattern</code> and the function is called with the
 * third argument <code>regs</code>, the matches will be stored
 * in the elements of the array <code>regs</code>.
 * If no matches are found, <code>regs</code> is set to an empty
 * array.
 *
 * @return int Returns the byte length of the matched string if a match for
 * <code>pattern</code> was found in <code>string</code>,
 * or <code>FALSE</code> if no matches were found or an error occurred.
 * If the optional parameter <code>regs</code> was not passed or
 * the length of the matched string is <code>0</code>, this function returns <code>1</code>.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-ereg.php
 */
function mb_ereg(string $pattern, string $string, array &$regs = null): int
{
}

/**
 * Regular expression match for multibyte string
 *
 * @param string $pattern The regular expression pattern.
 * @param string $string The <code>string</code> being evaluated.
 * @param string|null $option The search option. See <code>mb_regex_set_options</code> for explanation.
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-ereg-match.php
 */
function mb_ereg_match(string $pattern, string $string, string $option = "msr"): bool
{
}

/**
 * Replace regular expression with multibyte support
 *
 * @param string $pattern The regular expression pattern.
 * @param string $replacement The replacement text.
 * @param string $string The <code>string</code> being checked.
 * @param string|null $option
 *
 * @return string The resultant <code>string</code> on success, or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-ereg-replace.php
 */
function mb_ereg_replace(string $pattern, string $replacement, string $string, string $option = "msr"): string
{
}

/**
 * Perform a regular expresssion seach and replace with multibyte support using a callback
 *
 * @param string $pattern The regular expression pattern.
 * @param callable $callback A callback that will be called and passed an array of matched elements
 * in the <code>subject</code> string. The callback should
 * return the replacement string.
 * @param string $string The <code>string</code> being checked.
 * @param string|null $option The search option. See <code>mb_regex_set_options</code> for explanation.
 *
 * @return string The resultant <code>string</code> on success, or <code>FALSE</code> on error.
 *
 * @since PHP 5 >= 5.4.1, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-ereg-replace-callback.php
 */
function mb_ereg_replace_callback(string $pattern, callable $callback, string $string, string $option = "msr"): string
{
}

/**
 * Multibyte regular expression match for predefined multibyte string
 *
 * @param string $pattern The search pattern.
 * @param string|null $option The search option. See <code>mb_regex_set_options</code> for explanation.
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-ereg-search.php
 */
function mb_ereg_search(string $pattern = null, string $option = "ms"): bool
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
 * @param string $string The search string.
 * @param string $pattern The search pattern.
 * @param string|null $option The search option. See <code>mb_regex_set_options</code> for explanation.
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-ereg-search-init.php
 */
function mb_ereg_search_init(string $string, string $pattern = null, string $option = "msr"): bool
{
}

/**
 * Returns position and length of a matched part of the multibyte regular expression for a predefined multibyte string
 *
 * @param string $pattern The search pattern.
 * @param string|null $option The search option. See <code>mb_regex_set_options</code> for explanation.
 *
 * @return array
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-ereg-search-pos.php
 */
function mb_ereg_search_pos(string $pattern = null, string $option = "ms"): array
{
}

/**
 * Returns the matched part of a multibyte regular expression
 *
 * @param string $pattern The search pattern.
 * @param string|null $option The search option. See <code>mb_regex_set_options</code> for explanation.
 *
 * @return array
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-ereg-search-regs.php
 */
function mb_ereg_search_regs(string $pattern = null, string $option = "ms"): array
{
}

/**
 * Set start point of next regular expression match
 *
 * @param int $position The position to set. If it is negative, it counts from the end of the string.
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-ereg-search-setpos.php
 */
function mb_ereg_search_setpos(int $position): bool
{
}

/**
 * Regular expression match ignoring case with multibyte support
 *
 * @param string $pattern The regular expression pattern.
 * @param string $string The <code>string</code> being searched.
 * @param array $regs If matches are found for parenthesized substrings of
 * <code>pattern</code> and the function is called with the
 * third argument <code>regs</code>, the matches will be stored
 * in the elements of the array <code>regs</code>.
 * If no matches are found, <code>regs</code> is set to an empty
 * array.
 *
 * @return int Returns the byte length of the matched string if a match for
 * <code>pattern</code> was found in <code>string</code>,
 * or <code>FALSE</code> if no matches were found or an error occurred.
 * If the optional parameter <code>regs</code> was not passed or
 * the length of the matched string is <code>0</code>, this function returns <code>1</code>.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-eregi.php
 */
function mb_eregi(string $pattern, string $string, array &$regs = null): int
{
}

/**
 * Replace regular expression with multibyte support ignoring case
 *
 * @param string $pattern The regular expression pattern. Multibyte characters may be used. The case will be ignored.
 * @param string $replace The replacement text.
 * @param string $string The searched <code>string</code>.
 * @param string|null $option
 *
 * @return string The resultant <code>string</code> or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-eregi-replace.php
 */
function mb_eregi_replace(string $pattern, string $replace, string $string, string $option = "msri"): string
{
}

/**
 * Get internal settings of mbstring
 *
 * @param string|null $type If <code>type</code> isn't specified or is specified to
 * "all", an <code>array</code> having the elements "internal_encoding",
 * "http_output", "http_input", "func_overload", "mail_charset",
 * "mail_header_encoding", "mail_body_encoding" will be returned.
 *
 * @return mixed An <code>array</code> of type information if <code>type</code>
 * is not specified, otherwise a specific <code>type</code>.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-get-info.php
 */
function mb_get_info(string $type = "all")
{
}

/**
 * Detect HTTP input character encoding
 *
 * @param string|null $type Input string specifies the input type.
 * "G" for GET, "P" for POST, "C" for COOKIE, "S" for string, "L" for list, and
 * "I" for the whole list (will return <code>array</code>).
 * If type is omitted, it returns the last input type processed.
 *
 * @return mixed The character encoding name, as per the <code>type</code>.
 * If <code>mb_http_input</code> does not process specified
 * HTTP input, it returns <code>FALSE</code>.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-http-input.php
 */
function mb_http_input(string $type = "")
{
}

/**
 * Set/Get HTTP output character encoding
 *
 * @param string|null $encoding If <code>encoding</code> is set,
 * <code>mb_http_output</code> sets the HTTP output character
 * encoding to <code>encoding</code>.
 *
 * @return mixed If <code>encoding</code> is omitted,
 * <code>mb_http_output</code> returns the current HTTP output
 * character encoding. Otherwise,
 * Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-http-output.php
 */
function mb_http_output(string $encoding = /* mb_http_output() */ null)
{
}

/**
 * Set/Get internal character encoding
 *
 * @param string|null $encoding <code>encoding</code> is the character encoding name
 * used for the HTTP input character encoding conversion, HTTP output
 * character encoding conversion, and the default character encoding
 * for string functions defined by the mbstring module.
 * You should notice that the internal encoding is totally different from the one for multibyte regex.
 *
 * @return mixed If <code>encoding</code> is set, then
 * Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 * In this case, the character encoding for multibyte regex is NOT changed.
 * If <code>encoding</code> is omitted, then
 * the current character encoding name is returned.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-internal-encoding.php
 */
function mb_internal_encoding(string $encoding = /* mb_internal_encoding() */ null)
{
}

/**
 * Set/Get current language
 *
 * @param string|null $language Used for encoding
 * e-mail messages. Valid languages are "Japanese",
 * "ja","English","en" and "uni"
 * (UTF-8). <code>mb_send_mail</code> uses this setting to
 * encode e-mail.
 *
 * @return mixed If <code>language</code> is set and
 * <code>language</code> is valid, it returns
 * <code>TRUE</code>. Otherwise, it returns <code>FALSE</code>.
 * When <code>language</code> is omitted, it returns the language
 * name as a <code>string</code>. If no language is set previously, it then returns
 * <code>FALSE</code>.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-language.php
 */
function mb_language(string $language = /* mb_language() */ null)
{
}

/**
 * Returns an array of all supported encodings
 *
 * @return array Returns a numerically indexed array.
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
 * @param string $str
 * @param string $encoding
 *
 * @return int Returns a code point of character or <code>FALSE</code> on failure.
 *
 * @since PHP 7 >= 7.2.0
 *
 * @link http://www.php.net/manual/en/function.mb-ord.php
 */
function mb_ord(string $str, string $encoding = null): int
{
}

/**
 * Callback function converts character encoding in output buffer
 *
 * @param string $contents The contents of the output buffer.
 * @param int $status The status of the output buffer.
 *
 * @return string The converted <code>string</code>.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-output-handler.php
 */
function mb_output_handler(string $contents, int $status): string
{
}

/**
 * Parse GET/POST/COOKIE data and set global variable
 *
 * @param string $encoded_string The URL encoded data.
 * @param array $result An <code>array</code> containing decoded and character encoded converted values.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-parse-str.php
 */
function mb_parse_str(string $encoded_string, array &$result = null): bool
{
}

/**
 * Get MIME charset string
 *
 * @param string $encoding The encoding being checked.
 *
 * @return string The MIME <code>charset</code> <code>string</code> for character encoding
 * <code>encoding</code>.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-preferred-mime-name.php
 */
function mb_preferred_mime_name(string $encoding): string
{
}

/**
 * Set/Get character encoding for multibyte regex
 *
 * @param string|null $encoding The <code>encoding</code>
 * parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-regex-encoding.php
 */
function mb_regex_encoding(string $encoding = /* mb_regex_encoding() */ null)
{
}

/**
 * Set/Get the default options for mbregex functions
 *
 * @param string|null $options The options to set. This is a string where each
 * character is an option. To set a mode, the mode
 * character must be the last one set, however there
 * can only be set one mode but multiple options.
 *
 * @return string The previous options. If <code>options</code> is omitted,
 * it returns the <code>string</code> that describes the current options.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-regex-set-options.php
 */
function mb_regex_set_options(string $options = /* mb_regex_set_options() */ null): string
{
}

/**
 * Description
 *
 * @param string $str
 * @param string $encoding
 *
 * @return string
 *
 * @since PHP 7 >= 7.2.0
 *
 * @link http://www.php.net/manual/en/function.mb-scrub.php
 */
function mb_scrub(string $str, string $encoding = null): string
{
}

/**
 * Send encoded mail
 *
 * @param string $to The mail addresses being sent to. Multiple
 * recipients may be specified by putting a comma between each
 * address in <code>to</code>.
 * This parameter is not automatically encoded.
 * @param string $subject The subject of the mail.
 * @param string $message The message of the mail.
 * @param mixed|null $additional_headers <code>String</code> or <code>array</code> to be inserted at the end of the email header.
 * @param string|null $additional_parameter <code>additional_parameter</code> is a MTA command line
 * parameter. It is useful when setting the correct Return-Path
 * header when using sendmail.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-send-mail.php
 */
function mb_send_mail(string $to, string $subject, string $message, $additional_headers = null, string $additional_parameter = null): bool
{
}

/**
 * Split multibyte string using regular expression
 *
 * @param string $pattern The regular expression pattern.
 * @param string $string The <code>string</code> being split.
 * @param int|null $limit
 *
 * @return array The result as an <code>array</code>.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-split.php
 */
function mb_split(string $pattern, string $string, int $limit = -1): array
{
}

/**
 * Get part of string
 *
 * @param string $str The <code>string</code> being cut.
 * @param int $start If <code>start</code> is non-negative, the returned string
 * will start at the <code>start</code>'th <code>byte</code> position in
 * <code>str</code>, counting from zero. For instance,
 * in the string '<code>abcdef</code>', the byte at
 * position <code>0</code> is '<code>a</code>', the
 * byte at position <code>2</code> is
 * '<code>c</code>', and so forth.
 * @param int|null $length Length in <code>bytes</code>. If omitted or <code>NULL</code>
 * is passed, extract all bytes to the end of the string.
 * @param string|null $encoding The <code>encoding</code>
 * parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 *
 * @return string <code>mb_strcut</code> returns the portion of
 * <code>str</code> specified by the
 * <code>start</code> and
 * <code>length</code> parameters.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strcut.php
 */
function mb_strcut(string $str, int $start, int $length = null, string $encoding = /* mb_internal_encoding() */ null): string
{
}

/**
 * Get truncated string with specified width
 *
 * @param string $str The <code>string</code> being decoded.
 * @param int $start The start position offset. Number of
 * characters from the beginning of string (first character is 0),
 * or if start is negative, number of characters from the end of the string.
 * @param int $width The width of the desired trim. Negative widths count from the end of the string.
 * @param string|null $trimmarker A string that is added to the end of string
 * when string is truncated.
 * @param string|null $encoding The <code>encoding</code>
 * parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 *
 * @return string The truncated <code>string</code>. If <code>trimmarker</code> is set,
 * <code>trimmarker</code> replaces the last chars to match the <code>width</code>.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strimwidth.php
 */
function mb_strimwidth(string $str, int $start, int $width, string $trimmarker = "", string $encoding = /* mb_internal_encoding() */ null): string
{
}

/**
 * Finds position of first occurrence of a string within another, case insensitive
 *
 * @param string $haystack The string from which to get the position of the first occurrence
 * of <code>needle</code>
 * @param string $needle The string to find in <code>haystack</code>
 * @param int|null $offset The position in <code>haystack</code>
 * to start searching.
 * A negative offset counts from the end of the string.
 * @param string|null $encoding Character encoding name to use.
 * If it is omitted, internal character encoding is used.
 *
 * @return int Return the numeric position of the first occurrence of
 * <code>needle</code> in the <code>haystack</code>
 * string, or <code>FALSE</code> if <code>needle</code> is not found.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-stripos.php
 */
function mb_stripos(string $haystack, string $needle, int $offset = 0, string $encoding = /* mb_internal_encoding() */ null): int
{
}

/**
 * Finds first occurrence of a string within another, case insensitive
 *
 * @param string $haystack The string from which to get the first occurrence
 * of <code>needle</code>
 * @param string $needle The string to find in <code>haystack</code>
 * @param bool|null $before_needle Determines which portion of <code>haystack</code>
 * this function returns.
 * If set to <code>TRUE</code>, it returns all of <code>haystack</code>
 * from the beginning to the first occurrence of <code>needle</code> (excluding needle).
 * If set to <code>FALSE</code>, it returns all of <code>haystack</code>
 * from the first occurrence of <code>needle</code> to the end (including needle).
 * @param string|null $encoding Character encoding name to use.
 * If it is omitted, internal character encoding is used.
 *
 * @return string Returns the portion of <code>haystack</code>,
 * or <code>FALSE</code> if <code>needle</code> is not found.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-stristr.php
 */
function mb_stristr(string $haystack, string $needle, bool $before_needle = false, string $encoding = /* mb_internal_encoding() */ null): string
{
}

/**
 * Get string length
 *
 * @param string $str The <code>string</code> being checked for length.
 * @param string|null $encoding The <code>encoding</code>
 * parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 *
 * @return int Returns the number of characters in
 * <code>string</code> <code>str</code> having character encoding
 * <code>encoding</code>. A multi-byte character is
 * counted as 1.
 * Returns <code>FALSE</code> if the given <code>encoding</code> is invalid.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strlen.php
 */
function mb_strlen(string $str, string $encoding = /* mb_internal_encoding() */ null): int
{
}

/**
 * Find position of first occurrence of string in a string
 *
 * @param string $haystack The <code>string</code> being checked.
 * @param string $needle The string to find in <code>haystack</code>. In contrast
 * with <code>strpos</code>, numeric values are not applied
 * as the ordinal value of a character.
 * @param int|null $offset The search offset. If it is not specified, 0 is used.
 * A negative offset counts from the end of the string.
 * @param string|null $encoding The <code>encoding</code>
 * parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 *
 * @return int Returns the numeric position of
 * the first occurrence of <code>needle</code> in the
 * <code>haystack</code> <code>string</code>. If
 * <code>needle</code> is not found, it returns <code>FALSE</code>.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strpos.php
 */
function mb_strpos(string $haystack, string $needle, int $offset = 0, string $encoding = /* mb_internal_encoding() */ null): int
{
}

/**
 * Finds the last occurrence of a character in a string within another
 *
 * @param string $haystack The string from which to get the last occurrence
 * of <code>needle</code>
 * @param string $needle The string to find in <code>haystack</code>
 * @param bool|null $part Determines which portion of <code>haystack</code>
 * this function returns.
 * If set to <code>TRUE</code>, it returns all of <code>haystack</code>
 * from the beginning to the last occurrence of <code>needle</code>.
 * If set to <code>FALSE</code>, it returns all of <code>haystack</code>
 * from the last occurrence of <code>needle</code> to the end,
 * @param string|null $encoding Character encoding name to use.
 * If it is omitted, internal character encoding is used.
 *
 * @return string Returns the portion of <code>haystack</code>.
 * or <code>FALSE</code> if <code>needle</code> is not found.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strrchr.php
 */
function mb_strrchr(string $haystack, string $needle, bool $part = false, string $encoding = /* mb_internal_encoding() */ null): string
{
}

/**
 * Finds the last occurrence of a character in a string within another, case insensitive
 *
 * @param string $haystack The string from which to get the last occurrence
 * of <code>needle</code>
 * @param string $needle The string to find in <code>haystack</code>
 * @param bool|null $part Determines which portion of <code>haystack</code>
 * this function returns.
 * If set to <code>TRUE</code>, it returns all of <code>haystack</code>
 * from the beginning to the last occurrence of <code>needle</code>.
 * If set to <code>FALSE</code>, it returns all of <code>haystack</code>
 * from the last occurrence of <code>needle</code> to the end,
 * @param string|null $encoding Character encoding name to use.
 * If it is omitted, internal character encoding is used.
 *
 * @return string Returns the portion of <code>haystack</code>.
 * or <code>FALSE</code> if <code>needle</code> is not found.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strrichr.php
 */
function mb_strrichr(string $haystack, string $needle, bool $part = false, string $encoding = /* mb_internal_encoding() */ null): string
{
}

/**
 * Finds position of last occurrence of a string within another, case insensitive
 *
 * @param string $haystack The string from which to get the position of the last occurrence
 * of <code>needle</code>
 * @param string $needle The string to find in <code>haystack</code>
 * @param int|null $offset The position in <code>haystack</code>
 * to start searching
 * @param string|null $encoding Character encoding name to use.
 * If it is omitted, internal character encoding is used.
 *
 * @return int Return the numeric position of
 * the last occurrence of <code>needle</code> in the
 * <code>haystack</code> string, or <code>FALSE</code>
 * if <code>needle</code> is not found.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strripos.php
 */
function mb_strripos(string $haystack, string $needle, int $offset = 0, string $encoding = /* mb_internal_encoding() */ null): int
{
}

/**
 * Find position of last occurrence of a string in a string
 *
 * @param string $haystack The <code>string</code> being checked, for the last occurrence
 * of <code>needle</code>
 * @param string $needle The <code>string</code> to find in <code>haystack</code>.
 * @param int|null $offset
 * @param string|null $encoding The <code>encoding</code>
 * parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 *
 * @return int Returns the numeric position of
 * the last occurrence of <code>needle</code> in the
 * <code>haystack</code> <code>string</code>. If
 * <code>needle</code> is not found, it returns <code>FALSE</code>.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strrpos.php
 */
function mb_strrpos(string $haystack, string $needle, int $offset = 0, string $encoding = /* mb_internal_encoding() */ null): int
{
}

/**
 * Finds first occurrence of a string within another
 *
 * @param string $haystack The string from which to get the first occurrence
 * of <code>needle</code>
 * @param string $needle The string to find in <code>haystack</code>
 * @param bool|null $before_needle Determines which portion of <code>haystack</code>
 * this function returns.
 * If set to <code>TRUE</code>, it returns all of <code>haystack</code>
 * from the beginning to the first occurrence of <code>needle</code> (excluding needle).
 * If set to <code>FALSE</code>, it returns all of <code>haystack</code>
 * from the first occurrence of <code>needle</code> to the end (including needle).
 * @param string|null $encoding Character encoding name to use.
 * If it is omitted, internal character encoding is used.
 *
 * @return string Returns the portion of <code>haystack</code>,
 * or <code>FALSE</code> if <code>needle</code> is not found.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strstr.php
 */
function mb_strstr(string $haystack, string $needle, bool $before_needle = false, string $encoding = /* mb_internal_encoding() */ null): string
{
}

/**
 * Make a string lowercase
 *
 * @param string $str The <code>string</code> being lowercased.
 * @param string|null $encoding The <code>encoding</code>
 * parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 *
 * @return string <code>str</code> with all alphabetic characters converted to lowercase.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strtolower.php
 */
function mb_strtolower(string $str, string $encoding = /* mb_internal_encoding() */ null): string
{
}

/**
 * Make a string uppercase
 *
 * @param string $str The <code>string</code> being uppercased.
 * @param string|null $encoding The <code>encoding</code>
 * parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 *
 * @return string <code>str</code> with all alphabetic characters converted to uppercase.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strtoupper.php
 */
function mb_strtoupper(string $str, string $encoding = /* mb_internal_encoding() */ null): string
{
}

/**
 * Return width of string
 *
 * @param string $str The <code>string</code> being decoded.
 * @param string|null $encoding The <code>encoding</code>
 * parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 *
 * @return int The width of <code>string</code> <code>str</code>.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-strwidth.php
 */
function mb_strwidth(string $str, string $encoding = /* mb_internal_encoding() */ null): int
{
}

/**
 * Set/Get substitution character
 *
 * @param mixed|null $substchar Specify the Unicode value as an <code>integer</code>,
 * or as one of the following <code>string</code>s:
 * <ul>
 * <code>"none"</code>: no output
 * <code>"long"</code>: Output character code value (Example:
 * <code>U+3000</code>, <code>JIS+7E7E</code>)
 * <code>"entity"</code>: Output character entity (Example:
 * <code>&amp;#x200;</code>)
 * </ul>
 *
 * @return mixed If <code>substchar</code> is set, it returns <code>TRUE</code> for success,
 * otherwise returns <code>FALSE</code>.
 * If <code>substchar</code> is not set, it returns the current
 * setting.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-substitute-character.php
 */
function mb_substitute_character($substchar = /* mb_substitute_character() */ null)
{
}

/**
 * Get part of string
 *
 * @param string $str The <code>string</code> to extract the substring from.
 * @param int $start If <code>start</code> is non-negative, the returned string
 * will start at the <code>start</code>'th position in
 * <code>str</code>, counting from zero. For instance,
 * in the string '<code>abcdef</code>', the character at
 * position <code>0</code> is '<code>a</code>', the
 * character at position <code>2</code> is
 * '<code>c</code>', and so forth.
 * @param int|null $length Maximum number of characters to use from <code>str</code>. If
 * omitted or <code>NULL</code> is passed, extract all characters to
 * the end of the string.
 * @param string|null $encoding The <code>encoding</code>
 * parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 *
 * @return string <code>mb_substr</code> returns the portion of
 * <code>str</code> specified by the
 * <code>start</code> and
 * <code>length</code> parameters.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-substr.php
 */
function mb_substr(string $str, int $start, int $length = null, string $encoding = /* mb_internal_encoding() */ null): string
{
}

/**
 * Count the number of substring occurrences
 *
 * @param string $haystack The <code>string</code> being checked.
 * @param string $needle The <code>string</code> being found.
 * @param string|null $encoding The <code>encoding</code>
 * parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 *
 * @return int The number of times the
 * <code>needle</code> substring occurs in the
 * <code>haystack</code> <code>string</code>.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mb-substr-count.php
 */
function mb_substr_count(string $haystack, string $needle, string $encoding = /* mb_internal_encoding() */ null): int
{
}

/**
 * @param mixed $pattern
 * @param mixed $string
 * @param mixed $registers
 */
function mbereg($pattern, $string, &$registers = null)
{
}

/**
 * @param mixed $pattern
 * @param mixed $string
 * @param mixed $option
 */
function mbereg_match($pattern, $string, $option = null)
{
}

/**
 * @param mixed $pattern
 * @param mixed $replacement
 * @param mixed $string
 * @param mixed $option
 */
function mbereg_replace($pattern, $replacement, $string, $option = null)
{
}

/**
 * @param mixed $pattern
 * @param mixed $option
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
 * @param mixed $string
 * @param mixed $pattern
 * @param mixed $option
 */
function mbereg_search_init($string, $pattern = null, $option = null)
{
}

/**
 * @param mixed $pattern
 * @param mixed $option
 */
function mbereg_search_pos($pattern = null, $option = null)
{
}

/**
 * @param mixed $pattern
 * @param mixed $option
 */
function mbereg_search_regs($pattern = null, $option = null)
{
}

/**
 * @param mixed $position
 */
function mbereg_search_setpos($position)
{
}

/**
 * @param mixed $pattern
 * @param mixed $string
 * @param mixed $registers
 */
function mberegi($pattern, $string, &$registers = null)
{
}

/**
 * @param mixed $pattern
 * @param mixed $replacement
 * @param mixed $string
 * @param mixed $option
 */
function mberegi_replace($pattern, $replacement, $string, $option = null)
{
}

/**
 * @param mixed $encoding
 */
function mbregex_encoding($encoding = null)
{
}

/**
 * @param mixed $pattern
 * @param mixed $string
 * @param mixed $limit
 */
function mbsplit($pattern, $string, $limit = null)
{
}
