<?php
// Documentation generated automatically for extension pcre v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
/*
 * INI entries:
 * pcre.backtrack_limit = '1000000'
 * pcre.recursion_limit = '100000'
 * pcre.jit = '1'
 */
const PCRE_VERSION = '8.38 2015-11-23';
const PREG_BACKTRACK_LIMIT_ERROR = 2;
const PREG_BAD_UTF8_ERROR = 4;
const PREG_BAD_UTF8_OFFSET_ERROR = 5;
const PREG_GREP_INVERT = 1;
const PREG_INTERNAL_ERROR = 1;
const PREG_JIT_STACKLIMIT_ERROR = 6;
const PREG_NO_ERROR = 0;
const PREG_OFFSET_CAPTURE = 256;
const PREG_PATTERN_ORDER = 1;
const PREG_RECURSION_LIMIT_ERROR = 3;
const PREG_SET_ORDER = 2;
const PREG_SPLIT_DELIM_CAPTURE = 2;
const PREG_SPLIT_NO_EMPTY = 1;
const PREG_SPLIT_OFFSET_CAPTURE = 4;
// No classes defined
function preg_match($pattern, $subject, &$subpatterns = null, $flags = null, $offset = null)
{
}
function preg_match_all($pattern, $subject, &$subpatterns = null, $flags = null, $offset = null)
{
}
function preg_replace($regex, $replace, $subject, $limit = null, &$count = null)
{
}
function preg_replace_callback($regex, $callback, $subject, $limit = null, &$count = null)
{
}
function preg_replace_callback_array($pattern, $subject, $limit = null, &$count = null)
{
}
function preg_filter($regex, $replace, $subject, $limit = null, &$count = null)
{
}
function preg_split($pattern, $subject, $limit = null, $flags = null)
{
}
function preg_quote($str, $delim_char = null)
{
}
function preg_grep($regex, $input, $flags = null)
{
}
function preg_last_error()
{
}