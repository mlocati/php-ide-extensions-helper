<?php
// Documentation generated automatically for extension mbstring v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
/*
 * INI entries:
 * mbstring.language = 'neutral'
 * mbstring.detect_order = null
 * mbstring.http_input = null
 * mbstring.http_output = null
 * mbstring.internal_encoding = null
 * mbstring.substitute_character = null
 * mbstring.func_overload = '0'
 * mbstring.encoding_translation = '0'
 * mbstring.http_output_conv_mimetypes = '^(text/|application/xhtml\\+xml)'
 * mbstring.strict_detection = '0'
 */
const MB_CASE_LOWER = 1;
const MB_CASE_TITLE = 2;
const MB_CASE_UPPER = 0;
const MB_OVERLOAD_MAIL = 1;
const MB_OVERLOAD_REGEX = 4;
const MB_OVERLOAD_STRING = 2;
// No classes defined
function mb_convert_case($sourcestring, $mode, $encoding = null)
{
}
function mb_strtoupper($sourcestring, $encoding = null)
{
}
function mb_strtolower($sourcestring, $encoding = null)
{
}
function mb_language($language = null)
{
}
function mb_internal_encoding($encoding = null)
{
}
function mb_http_input($type = null)
{
}
function mb_http_output($encoding = null)
{
}
function mb_detect_order($encoding = null)
{
}
function mb_substitute_character($substchar = null)
{
}
function mb_parse_str($encoded_string, &$result = null)
{
}
function mb_output_handler($contents, $status)
{
}
function mb_preferred_mime_name($encoding)
{
}
function mb_strlen($str, $encoding = null)
{
}
function mb_strpos($haystack, $needle, $offset = null, $encoding = null)
{
}
function mb_strrpos($haystack, $needle, $offset = null, $encoding = null)
{
}
function mb_stripos($haystack, $needle, $offset = null, $encoding = null)
{
}
function mb_strripos($haystack, $needle, $offset = null, $encoding = null)
{
}
function mb_strstr($haystack, $needle, $part = null, $encoding = null)
{
}
function mb_strrchr($haystack, $needle, $part = null, $encoding = null)
{
}
function mb_stristr($haystack, $needle, $part = null, $encoding = null)
{
}
function mb_strrichr($haystack, $needle, $part = null, $encoding = null)
{
}
function mb_substr_count($haystack, $needle, $encoding = null)
{
}
function mb_substr($str, $start, $length = null, $encoding = null)
{
}
function mb_strcut($str, $start, $length = null, $encoding = null)
{
}
function mb_strwidth($str, $encoding = null)
{
}
function mb_strimwidth($str, $start, $width, $trimmarker = null, $encoding = null)
{
}
function mb_convert_encoding($str, $to, $from = null)
{
}
function mb_detect_encoding($str, $encoding_list = null, $strict = null)
{
}
function mb_list_encodings()
{
}
function mb_encoding_aliases($encoding)
{
}
function mb_convert_kana($str, $option = null, $encoding = null)
{
}
function mb_encode_mimeheader($str, $charset = null, $transfer = null, $linefeed = null, $indent = null)
{
}
function mb_decode_mimeheader($string)
{
}
function mb_convert_variables($to, $from, ...&$vars)
{
}
function mb_encode_numericentity($string, $convmap, $encoding = null, $is_hex = null)
{
}
function mb_decode_numericentity($string, $convmap, $encoding = null)
{
}
function mb_send_mail($to, $subject, $message, $additional_headers = null, $additional_parameters = null)
{
}
function mb_get_info($type = null)
{
}
function mb_check_encoding($var = null, $encoding = null)
{
}
function mb_regex_encoding($encoding = null)
{
}
function mb_regex_set_options($options = null)
{
}
function mb_ereg($pattern, $string, &$registers = null)
{
}
function mb_eregi($pattern, $string, &$registers = null)
{
}
function mb_ereg_replace($pattern, $replacement, $string, $option = null)
{
}
function mb_eregi_replace($pattern, $replacement, $string)
{
}
function mb_ereg_replace_callback($pattern, $callback, $string, $option = null)
{
}
function mb_split($pattern, $string, $limit = null)
{
}
function mb_ereg_match($pattern, $string, $option = null)
{
}
function mb_ereg_search($pattern = null, $option = null)
{
}
function mb_ereg_search_pos($pattern = null, $option = null)
{
}
function mb_ereg_search_regs($pattern = null, $option = null)
{
}
function mb_ereg_search_init($string, $pattern = null, $option = null)
{
}
function mb_ereg_search_getregs()
{
}
function mb_ereg_search_getpos()
{
}
function mb_ereg_search_setpos($position)
{
}
function mbregex_encoding($encoding = null)
{
}
function mbereg($pattern, $string, &$registers = null)
{
}
function mberegi($pattern, $string, &$registers = null)
{
}
function mbereg_replace($pattern, $replacement, $string, $option = null)
{
}
function mberegi_replace($pattern, $replacement, $string)
{
}
function mbsplit($pattern, $string, $limit = null)
{
}
function mbereg_match($pattern, $string, $option = null)
{
}
function mbereg_search($pattern = null, $option = null)
{
}
function mbereg_search_pos($pattern = null, $option = null)
{
}
function mbereg_search_regs($pattern = null, $option = null)
{
}
function mbereg_search_init($string, $pattern = null, $option = null)
{
}
function mbereg_search_getregs()
{
}
function mbereg_search_getpos()
{
}
function mbereg_search_setpos($position)
{
}