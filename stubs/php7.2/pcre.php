<?php
// Start of extension: pcre
// - parsed on POSIX with PHP 7.2.3 (extension version 7.2.3)
// - parsed on Windows with PHP 7.2.4 (extension version 7.2.4)

/**
 * PCRE version and release date (e.g. "<code>7.0 18-Dec-2006</code>").
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.pcre-version
 *
 * @var string
 */
const PCRE_VERSION = '8.41 2017-07-05';

/**
 * Returned by <code>preg_last_error</code> if backtrack limit was exhausted.
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-backtrack-limit-error
 *
 * @var int
 */
const PREG_BACKTRACK_LIMIT_ERROR = 2;

/**
 * Returned by <code>preg_last_error</code> if the last error was
 * caused by malformed UTF-8 data (only when running a regex in UTF-8 mode).
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-bad-utf8-error
 *
 * @var int
 */
const PREG_BAD_UTF8_ERROR = 4;

/**
 * Returned by <code>preg_last_error</code> if the offset didn't
 * correspond to the begin of a valid UTF-8 code point (only when running
 * a regex in UTF-8
 * mode).
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
 * Returned by <code>preg_last_error</code> if there was an
 * internal PCRE error.
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-internal-error
 *
 * @var int
 */
const PREG_INTERNAL_ERROR = 1;

/**
 * Returned by <code>preg_last_error</code> if the last PCRE function
 * failed due to limited JIT stack space.
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-jit-stacklimit-error
 *
 * @var int
 */
const PREG_JIT_STACKLIMIT_ERROR = 6;

/**
 * Returned by <code>preg_last_error</code> if there were no
 * errors.
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-no-error
 *
 * @var int
 */
const PREG_NO_ERROR = 0;

/**
 * See the description of
 * <code>PREG_SPLIT_OFFSET_CAPTURE</code>.
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-offset-capture
 *
 * @var int
 */
const PREG_OFFSET_CAPTURE = 256;

/**
 * Orders results so that <code>$matches[0]</code> is an array of full pattern
 * matches, <code>$matches[1]</code> is an array of strings matched by the first
 * parenthesized subpattern, and so on. This flag is only used with
 * <code>preg_match_all</code>.
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-pattern-order
 *
 * @var int
 */
const PREG_PATTERN_ORDER = 1;

/**
 * Returned by <code>preg_last_error</code> if recursion limit was exhausted.
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-recursion-limit-error
 *
 * @var int
 */
const PREG_RECURSION_LIMIT_ERROR = 3;

/**
 * Orders results so that <code>$matches[0]</code> is an array of first set of
 * matches, <code>$matches[1]</code> is an array of second set of matches, and so
 * on. This flag is only used with <code>preg_match_all</code>.
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-set-order
 *
 * @var int
 */
const PREG_SET_ORDER = 2;

/**
 * This flag tells <code>preg_split</code> to capture
 * parenthesized expression in the delimiter pattern as well.
 *
 * @link http://www.php.net/manual/en/pcre.constants.php#constant.preg-split-delim-capture
 *
 * @var int
 */
const PREG_SPLIT_DELIM_CAPTURE = 2;

/**
 * This flag tells <code>preg_split</code> to return only non-empty
 * pieces.
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
 * @var int
 */
const PREG_UNMATCHED_AS_NULL = 512;

/**
 * Perform a regular expression search and replace
 *
 * @param mixed $pattern
 * @param mixed $replacement
 * @param mixed $subject
 * @param int|null $limit
 * @param int $count
 *
 * @return mixed Returns an <code>array</code> if the <code>subject</code>
 * parameter is an <code>array</code>, or a <code>string</code> otherwise.
 * If no matches are found or an error occurred, an empty <code>array</code>
 * is returned when <code>subject</code> is an <code>array</code>
 * or <code>NULL</code> otherwise.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.preg-filter.php
 */
function preg_filter($pattern, $replacement, $subject, int $limit = -1, int &$count = null)
{
}

/**
 * Return array entries that match the pattern
 *
 * @param string $pattern The pattern to search for, as a string.
 * @param array $input The input array.
 * @param int|null $flags If set to <code>PREG_GREP_INVERT</code>, this function returns
 * the elements of the input array that do <code>not</code> match
 * the given <code>pattern</code>.
 *
 * @return array Returns an array indexed using the keys from the
 * <code>input</code> array.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.preg-grep.php
 */
function preg_grep(string $pattern, array $input, int $flags = 0): array
{
}

/**
 * Returns the error code of the last PCRE regex execution
 *
 * @return int Returns one of the following constants (explained on their own page):
 * <ul>
 * <li><code>PREG_NO_ERROR</code></li>
 * <li><code>PREG_INTERNAL_ERROR</code></li>
 * <li><code>PREG_BACKTRACK_LIMIT_ERROR</code> (see also pcre.backtrack_limit)</li>
 * <li><code>PREG_RECURSION_LIMIT_ERROR</code> (see also pcre.recursion_limit)</li>
 * <li><code>PREG_BAD_UTF8_ERROR</code></li>
 * <li><code>PREG_BAD_UTF8_OFFSET_ERROR</code> (since PHP 5.3.0)</li>
 * <li><code>PREG_JIT_STACKLIMIT_ERROR</code> (since PHP 7.0.0)</li>
 * </ul>
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
 * @param string $pattern The pattern to search for, as a string.
 * @param string $subject The input string.
 * @param array $matches If <code>matches</code> is provided, then it is filled with
 * the results of search. <code>$matches[0]</code> will contain the
 * text that matched the full pattern, <code>$matches[1]</code>
 * will have the text that matched the first captured parenthesized
 * subpattern, and so on.
 * @param int|null $flags <code>flags</code> can be the following flag:
 * <ul>
 * <li>
 * <code><code>PREG_OFFSET_CAPTURE</code></code>
 * If this flag is passed, for every occurring match the appendant string
 * offset will also be returned. Note that this changes the value of
 * <code>matches</code> into an array where every element is an
 * array consisting of the matched string at offset <code>0</code>
 * and its string offset into <code>subject</code> at offset
 * <code>1</code>.
 * <informalexample>
 * <blockquote><pre>
 * &lt;?php
 * preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
 * print_r($matches);
 * ?&gt;
 * </pre></blockquote>
 * The above example will output:
 * <blockquote><pre>
 * Array
 * (
 * [0] =&gt; Array
 * (
 * [0] =&gt; foobarbaz
 * [1] =&gt; 0
 * )
 * [1] =&gt; Array
 * (
 * [0] =&gt; foo
 * [1] =&gt; 0
 * )
 * [2] =&gt; Array
 * (
 * [0] =&gt; bar
 * [1] =&gt; 3
 * )
 * [3] =&gt; Array
 * (
 * [0] =&gt; baz
 * [1] =&gt; 6
 * )
 * )
 * </pre></blockquote>
 * </informalexample>
 * </li>
 * </ul>
 * @param int|null $offset Normally, the search starts from the beginning of the subject string.
 * The optional parameter <code>offset</code> can be used to
 * specify the alternate place from which to start the search (in bytes).
 *
 * @return int <code>preg_match</code> returns 1 if the <code>pattern</code>
 * matches given <code>subject</code>, 0 if it does not, or <code>FALSE</code>
 * if an error occurred.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.preg-match.php
 */
function preg_match(string $pattern, string $subject, array &$matches = null, int $flags = 0, int $offset = 0): int
{
}

/**
 * Perform a global regular expression match
 *
 * @param string $pattern The pattern to search for, as a string.
 * @param string $subject The input string.
 * @param array $matches Array of all matches in multi-dimensional array ordered according to
 * <code>flags</code>.
 * @param int|null $flags Can be a combination of the following flags (note that it doesn't make
 * sense to use <code>PREG_PATTERN_ORDER</code> together with
 * <code>PREG_SET_ORDER</code>):
 * <ul>
 * <li>
 * <code><code>PREG_PATTERN_ORDER</code></code>
 * Orders results so that <code>$matches[0]</code> is an array of full
 * pattern matches, <code>$matches[1]</code> is an array of strings matched by
 * the first parenthesized subpattern, and so on.
 * <informalexample>
 * <blockquote><pre>
 * &lt;?php
 * preg_match_all("|&lt;[^&gt;]+&gt;(.*)&lt;/[^&gt;]+&gt;|U",
 * "&lt;b&gt;example: &lt;/b&gt;&lt;div align=left&gt;this is a test&lt;/div&gt;",
 * $out, PREG_PATTERN_ORDER);
 * echo $out[0][0] . ", " . $out[0][1] . "\n";
 * echo $out[1][0] . ", " . $out[1][1] . "\n";
 * ?&gt;
 * </pre></blockquote>
 * The above example will output:
 * <blockquote><pre>
 * &lt;b&gt;example: &lt;/b&gt;, &lt;div align=left&gt;this is a test&lt;/div&gt;
 * example: , this is a test
 * </pre></blockquote>
 * So, <code>$out[0]</code> contains array of strings that matched full pattern,
 * and <code>$out[1]</code> contains array of strings enclosed by tags.
 * </informalexample>
 * If the pattern contains named subpatterns, <code>$matches</code>
 * additionally contains entries for keys with the subpattern name.
 * If the pattern contains duplicate named subpatterns, only the rightmost
 * subpattern is stored in <code>$matches[NAME]</code>.
 * <informalexample>
 * <blockquote><pre>
 * &lt;?php
 * preg_match_all(
 * '/(?J)(?&lt;match&gt;foo)|(?&lt;match&gt;bar)/',
 * 'foo bar',
 * $matches,
 * PREG_PATTERN_ORDER
 * );
 * print_r($matches['match']);
 * ?&gt;
 * </pre></blockquote>
 * The above example will output:
 * <blockquote><pre>
 * Array
 * (
 * [0] =&gt;
 * [1] =&gt; bar
 * )
 * </pre></blockquote>
 * </informalexample>
 * </li>
 * <li>
 * <code><code>PREG_SET_ORDER</code></code>
 * Orders results so that <code>$matches[0]</code> is an array of first set
 * of matches, <code>$matches[1]</code> is an array of second set of matches,
 * and so on.
 * <informalexample>
 * <blockquote><pre>
 * &lt;?php
 * preg_match_all("|&lt;[^&gt;]+&gt;(.*)&lt;/[^&gt;]+&gt;|U",
 * "&lt;b&gt;example: &lt;/b&gt;&lt;div align=\"left\"&gt;this is a test&lt;/div&gt;",
 * $out, PREG_SET_ORDER);
 * echo $out[0][0] . ", " . $out[0][1] . "\n";
 * echo $out[1][0] . ", " . $out[1][1] . "\n";
 * ?&gt;
 * </pre></blockquote>
 * The above example will output:
 * <blockquote><pre>
 * &lt;b&gt;example: &lt;/b&gt;, example:
 * &lt;div align="left"&gt;this is a test&lt;/div&gt;, this is a test
 * </pre></blockquote>
 * </informalexample>
 * </li>
 * <li>
 * <code><code>PREG_OFFSET_CAPTURE</code></code>
 * If this flag is passed, for every occurring match the appendant string
 * offset will also be returned. Note that this changes the value of
 * <code>matches</code> into an array of arrays where every element is an
 * array consisting of the matched string at offset <code>0</code>
 * and its string offset into <code>subject</code> at offset
 * <code>1</code>.
 * <informalexample>
 * <blockquote><pre>
 * &lt;?php
 * preg_match_all('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
 * print_r($matches);
 * ?&gt;
 * </pre></blockquote>
 * The above example will output:
 * <blockquote><pre>
 * Array
 * (
 * [0] =&gt; Array
 * (
 * [0] =&gt; Array
 * (
 * [0] =&gt; foobarbaz
 * [1] =&gt; 0
 * )
 * )
 * [1] =&gt; Array
 * (
 * [0] =&gt; Array
 * (
 * [0] =&gt; foo
 * [1] =&gt; 0
 * )
 * )
 * [2] =&gt; Array
 * (
 * [0] =&gt; Array
 * (
 * [0] =&gt; bar
 * [1] =&gt; 3
 * )
 * )
 * [3] =&gt; Array
 * (
 * [0] =&gt; Array
 * (
 * [0] =&gt; baz
 * [1] =&gt; 6
 * )
 * )
 * )
 * </pre></blockquote>
 * </informalexample>
 * </li>
 * </ul>
 * @param int|null $offset Normally, the search starts from the beginning of the subject string.
 * The optional parameter <code>offset</code> can be used to
 * specify the alternate place from which to start the search (in bytes).
 *
 * @return int Returns the number of full pattern matches (which might be zero),
 * or <code>FALSE</code> if an error occurred.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.preg-match-all.php
 */
function preg_match_all(string $pattern, string $subject, array &$matches = null, int $flags = PREG_PATTERN_ORDER, int $offset = 0): int
{
}

/**
 * Quote regular expression characters
 *
 * @param string $str The input string.
 * @param string|null $delimiter If the optional <code>delimiter</code> is specified, it
 * will also be escaped. This is useful for escaping the delimiter
 * that is required by the PCRE functions. The <code>/</code> is the most commonly
 * used delimiter.
 *
 * @return string Returns the quoted (escaped) string.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.preg-quote.php
 */
function preg_quote(string $str, string $delimiter = null): string
{
}

/**
 * Perform a regular expression search and replace
 *
 * @param mixed $pattern The pattern to search for. It can be either a string or an array with
 * strings.
 * @param mixed $replacement The string or an array with strings to replace. If this parameter is a
 * string and the <code>pattern</code> parameter is an array,
 * all patterns will be replaced by that string. If both
 * <code>pattern</code> and <code>replacement</code>
 * parameters are arrays, each <code>pattern</code> will be
 * replaced by the <code>replacement</code> counterpart. If
 * there are fewer elements in the <code>replacement</code>
 * array than in the <code>pattern</code> array, any extra
 * <code>pattern</code>s will be replaced by an empty string.
 * @param mixed $subject The string or an array with strings to search and replace.
 * @param int|null $limit The maximum possible replacements for each pattern in each
 * <code>subject</code> string. Defaults to
 * <code>-1</code> (no limit).
 * @param int $count If specified, this variable will be filled with the number of
 * replacements done.
 *
 * @return mixed <code>preg_replace</code> returns an array if the
 * <code>subject</code> parameter is an array, or a string
 * otherwise.
 * If matches are found, the new <code>subject</code> will
 * be returned, otherwise <code>subject</code> will be
 * returned unchanged or <code>NULL</code> if an error occurred.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.preg-replace.php
 */
function preg_replace($pattern, $replacement, $subject, int $limit = -1, int &$count = null)
{
}

/**
 * Perform a regular expression search and replace using a callback
 *
 * @param mixed $pattern The pattern to search for. It can be either a string or an array with
 * strings.
 * @param callable $callback A callback that will be called and passed an array of matched elements
 * in the <code>subject</code> string. The callback should
 * return the replacement string. This is the callback signature:
 * @param mixed $subject The string or an array with strings to search and replace.
 * @param int|null $limit The maximum possible replacements for each pattern in each
 * <code>subject</code> string. Defaults to
 * <code>-1</code> (no limit).
 * @param int $count If specified, this variable will be filled with the number of
 * replacements done.
 *
 * @return mixed <code>preg_replace_callback</code> returns an array if the
 * <code>subject</code> parameter is an array, or a string
 * otherwise. On errors the return value is <code>NULL</code>
 * If matches are found, the new subject will be returned, otherwise
 * <code>subject</code> will be returned unchanged.
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.preg-replace-callback.php
 */
function preg_replace_callback($pattern, callable $callback, $subject, int $limit = -1, int &$count = null)
{
}

/**
 * Perform a regular expression search and replace using callbacks
 *
 * @param array $patterns_and_callbacks An associative array mapping patterns (keys) to callbacks (values).
 * @param mixed $subject The string or an array with strings to search and replace.
 * @param int|null $limit The maximum possible replacements for each pattern in each
 * <code>subject</code> string. Defaults to
 * <code>-1</code> (no limit).
 * @param int $count If specified, this variable will be filled with the number of
 * replacements done.
 *
 * @return mixed <code>preg_replace_callback_array</code> returns an array if the
 * <code>subject</code> parameter is an array, or a string
 * otherwise. On errors the return value is <code>NULL</code>
 * If matches are found, the new subject will be returned, otherwise
 * <code>subject</code> will be returned unchanged.
 *
 * @since PHP 7
 *
 * @link http://www.php.net/manual/en/function.preg-replace-callback-array.php
 */
function preg_replace_callback_array(array $patterns_and_callbacks, $subject, int $limit = -1, int &$count = null)
{
}

/**
 * Split string by a regular expression
 *
 * @param string $pattern The pattern to search for, as a string.
 * @param string $subject The input string.
 * @param int|null $limit If specified, then only substrings up to <code>limit</code>
 * are returned with the rest of the string being placed in the last
 * substring. A <code>limit</code> of -1, 0 or <code>NULL</code> means "no limit"
 * and, as is standard across PHP, you can use <code>NULL</code> to skip to the
 * <code>flags</code> parameter.
 * @param int|null $flags <code>flags</code> can be any combination of the following
 * flags (combined with the <code>|</code> bitwise operator):
 * <ul>
 * <li>
 * <code><code>PREG_SPLIT_NO_EMPTY</code></code>
 * If this flag is set, only non-empty pieces will be returned by
 * <code>preg_split</code>.
 * </li>
 * <li>
 * <code><code>PREG_SPLIT_DELIM_CAPTURE</code></code>
 * If this flag is set, parenthesized expression in the delimiter pattern
 * will be captured and returned as well.
 * </li>
 * <li>
 * <code><code>PREG_SPLIT_OFFSET_CAPTURE</code></code>
 * If this flag is set, for every occurring match the appendant string
 * offset will also be returned. Note that this changes the return
 * value in an array where every element is an array consisting of the
 * matched string at offset <code>0</code> and its string offset
 * into <code>subject</code> at offset <code>1</code>.
 * </li>
 * </ul>
 *
 * @return array Returns an array containing substrings of <code>subject</code>
 * split along boundaries matched by <code>pattern</code>, or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.preg-split.php
 */
function preg_split(string $pattern, string $subject, int $limit = -1, int $flags = 0): array
{
}
