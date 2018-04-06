<?php
// Start of extension: pcre
// - parsed on POSIX with PHP 7.1.15 (extension version 7.1.15)
// - parsed on Windows with PHP 7.1.15 (extension version 7.1.15)

/**
 * PCRE version and release date (e.g. "<code>7.0 18-Dec-2006</code>
 * ").
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.pcre-version
 *
 * @var string
 */
const PCRE_VERSION = '8.38 2015-11-23';

/**
 * Returned by <code>preg_last_error</code>
 *  if backtrack limit
 *  was exhausted.
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-backtrack-limit-error
 *
 * @var int
 */
const PREG_BACKTRACK_LIMIT_ERROR = 2;

/**
 * Returned by <code>preg_last_error</code>
 *  if the last error was
 *       caused by malformed UTF-8 data (only when running a regex in UTF-8 mode
 * ).
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-bad-utf8-error
 *
 * @var int
 */
const PREG_BAD_UTF8_ERROR = 4;

/**
 * Returned by <code>preg_last_error</code>
 *  if the offset didn't
 *       correspond to the begin of a valid UTF-8 code point (only when running
 *       a regex in UTF-8
 *       mode
 * ).
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-bad-utf8-offset-error
 *
 * @var int
 */
const PREG_BAD_UTF8_OFFSET_ERROR = 5;

/**
 * @var int
 */
const PREG_GREP_INVERT = 1;

/**
 * Returned by <code>preg_last_error</code>
 *  if there was an
 *       internal PCRE error.
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-internal-error
 *
 * @var int
 */
const PREG_INTERNAL_ERROR = 1;

/**
 * Returned by <code>preg_last_error</code>
 *  if the last PCRE function
 *       failed due to limited JIT stack space.
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-jit-stacklimit-error
 *
 * @var int
 */
const PREG_JIT_STACKLIMIT_ERROR = 6;

/**
 * Returned by <code>preg_last_error</code>
 *  if there were no
 *       errors.
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-no-error
 *
 * @var int
 */
const PREG_NO_ERROR = 0;

/**
 * See the description of
 *       <code>PREG_SPLIT_OFFSET_CAPTURE</code>
 * .
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-offset-capture
 *
 * @var int
 */
const PREG_OFFSET_CAPTURE = 256;

/**
 * Orders results so that <code>$matches[0]</code>
 *  is an array of full pattern
 *       matches, <code>$matches[1]</code>
 *  is an array of strings matched by the first
 *       parenthesized subpattern, and so on. This flag is only used with
 *       <code>preg_match_all</code>
 * .
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-pattern-order
 *
 * @var int
 */
const PREG_PATTERN_ORDER = 1;

/**
 * Returned by <code>preg_last_error</code>
 *  if recursion limit
 *  was exhausted.
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-recursion-limit-error
 *
 * @var int
 */
const PREG_RECURSION_LIMIT_ERROR = 3;

/**
 * Orders results so that <code>$matches[0]</code>
 *  is an array of first set of
 *       matches, <code>$matches[1]</code>
 *  is an array of second set of matches, and so
 *       on. This flag is only used with <code>preg_match_all</code>
 * .
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-set-order
 *
 * @var int
 */
const PREG_SET_ORDER = 2;

/**
 * This flag tells <code>preg_split</code>
 *  to capture
 *       parenthesized expression in the delimiter pattern as well.
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-split-delim-capture
 *
 * @var int
 */
const PREG_SPLIT_DELIM_CAPTURE = 2;

/**
 * This flag tells <code>preg_split</code>
 *  to return only non-empty
 *       pieces.
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-split-no-empty
 *
 * @var int
 */
const PREG_SPLIT_NO_EMPTY = 1;

/**
 * 4.3.0
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-offset-capture
 *
 * @var int
 */
const PREG_SPLIT_OFFSET_CAPTURE = 4;

/**
 * Perform a regular expression search and replace
 *
 * mixed $regex
 * mixed $replace
 * mixed $subject
 * mixed|null $limit
 * mixed|null $count
 *
 * @return mixed
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.preg-filter.php
 */
function preg_filter($regex, $replace, $subject, $limit = null, &$count = null)
{
}

/**
 * Return array entries that match the pattern
 *
 * mixed $regex
 * mixed $input
 * mixed|null $flags
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.preg-grep.php
 */
function preg_grep($regex, $input, $flags = null): array
{
}

/**
 * Returns the error code of the last PCRE regex execution
 *
 * @return int
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.preg-last-error.php
 */
function preg_last_error(): int
{
}

/**
 * Perform a regular expression match
 *
 * mixed $pattern
 * mixed $subject
 * mixed|null $subpatterns
 * mixed|null $flags
 * mixed|null $offset
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.preg-match.php
 */
function preg_match($pattern, $subject, &$subpatterns = null, $flags = null, $offset = null): int
{
}

/**
 * Perform a global regular expression match
 *
 * mixed $pattern
 * mixed $subject
 * mixed|null $subpatterns
 * mixed|null $flags
 * mixed|null $offset
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.preg-match-all.php
 */
function preg_match_all($pattern, $subject, &$subpatterns = null, $flags = null, $offset = null): int
{
}

/**
 * Quote regular expression characters
 *
 * mixed $str
 * mixed|null $delim_char
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.preg-quote.php
 */
function preg_quote($str, $delim_char = null): string
{
}

/**
 * Perform a regular expression search and replace
 *
 * mixed $regex
 * mixed $replace
 * mixed $subject
 * mixed|null $limit
 * mixed|null $count
 *
 * @return mixed
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.preg-replace.php
 */
function preg_replace($regex, $replace, $subject, $limit = null, &$count = null)
{
}

/**
 * Perform a regular expression search and replace using a callback
 *
 * mixed $regex
 * mixed $callback
 * mixed $subject
 * mixed|null $limit
 * mixed|null $count
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.preg-replace-callback.php
 */
function preg_replace_callback($regex, $callback, $subject, $limit = null, &$count = null)
{
}

/**
 * Perform a regular expression search and replace using callbacks
 *
 * mixed $pattern
 * mixed $subject
 * mixed|null $limit
 * mixed|null $count
 *
 * @return mixed
 *
 * @since PHP 7
 *
 * @link http://www.php.net/manual/en/function.preg-replace-callback-array.php
 */
function preg_replace_callback_array($pattern, $subject, $limit = null, &$count = null)
{
}

/**
 * Split string by a regular expression
 *
 * mixed $pattern
 * mixed $subject
 * mixed|null $limit
 * mixed|null $flags
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.preg-split.php
 */
function preg_split($pattern, $subject, $limit = null, $flags = null): array
{
}
