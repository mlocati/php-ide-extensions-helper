<?php
// Start of extension: ereg
// - parsed on POSIX with PHP 5.6.34
// - parsed on Windows with PHP 5.6.34

/**
 * Regular expression match
 *
 * @param string $pattern Case sensitive regular expression.
 * @param string $string The input string.
 * @param array $regs If matches are found for parenthesized substrings of
 * <code>pattern</code> and the function is called with the
 * third argument <code>regs</code>, the matches will be stored
 * in the elements of the array <code>regs</code>.
 *
 * @return int Returns the length of the matched string if a match for
 * <code>pattern</code> was found in <code>string</code>,
 * or <code>FALSE</code> if no matches were found or an error occurred.
 * If the optional parameter <code>regs</code> was not passed or
 * the length of the matched string is <code>0</code>, this function returns <code>1</code>.
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated as of PHP 5.3.0
 *
 * @link http://www.php.net/manual/en/function.ereg.php
 */
function ereg($pattern, $string, array &$regs = null)
{
}

/**
 * Replace regular expression
 *
 * @param string $pattern A POSIX extended regular expression.
 * @param string $replacement If <code>pattern</code> contains parenthesized substrings,
 * <code>replacement</code> may contain substrings of the form
 * <code>\<replaceable>digit</replaceable></code>, which will be
 * replaced by the text matching the digit'th parenthesized substring;
 * <code>\0</code> will produce the entire contents of string.
 * Up to nine substrings may be used. Parentheses may be nested, in which
 * case they are counted by the opening parenthesis.
 * @param string $string The input string.
 *
 * @return string The modified string is returned. If no matches are found in
 * <code>string</code>, then it will be returned unchanged.
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated as of PHP 5.3.0
 *
 * @link http://www.php.net/manual/en/function.ereg-replace.php
 */
function ereg_replace($pattern, $replacement, $string)
{
}

/**
 * Case insensitive regular expression match
 *
 * @param string $pattern Case insensitive regular expression.
 * @param string $string The input string.
 * @param array $regs If matches are found for parenthesized substrings of
 * <code>pattern</code> and the function is called with the
 * third argument <code>regs</code>, the matches will be stored
 * in the elements of the array <code>regs</code>.
 *
 * @return int Returns the length of the matched string if a match for
 * <code>pattern</code> was found in <code>string</code>,
 * or <code>FALSE</code> if no matches were found or an error occurred.
 * If the optional parameter <code>regs</code> was not passed or
 * the length of the matched string is <code>0</code>, this function returns <code>1</code>.
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated as of PHP 5.3.0
 *
 * @link http://www.php.net/manual/en/function.eregi.php
 */
function eregi($pattern, $string, array &$regs = null)
{
}

/**
 * Replace regular expression case insensitive
 *
 * @param string $pattern A POSIX extended regular expression.
 * @param string $replacement If <code>pattern</code> contains parenthesized substrings,
 * <code>replacement</code> may contain substrings of the form
 * <code>\<replaceable>digit</replaceable></code>, which will be
 * replaced by the text matching the digit'th parenthesized substring;
 * <code>\0</code> will produce the entire contents of string.
 * Up to nine substrings may be used. Parentheses may be nested, in which
 * case they are counted by the opening parenthesis.
 * @param string $string The input string.
 *
 * @return string The modified string is returned. If no matches are found in
 * <code>string</code>, then it will be returned unchanged.
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated as of PHP 5.3.0
 *
 * @link http://www.php.net/manual/en/function.eregi-replace.php
 */
function eregi_replace($pattern, $replacement, $string)
{
}

/**
 * Split string into array by regular expression
 *
 * @param string $pattern Case sensitive regular expression.
 * @param string $string The input string.
 * @param int|null $limit If <code>limit</code> is set, the returned array will
 * contain a maximum of <code>limit</code> elements with the
 * last element containing the whole rest of
 * <code>string</code>.
 *
 * @return array Returns an array of strings, each of which is a substring of
 * <code>string</code> formed by splitting it on boundaries formed
 * by the case-sensitive regular expression <code>pattern</code>.
 * If there are <replaceable>n</replaceable> occurrences of
 * <code>pattern</code>, the returned array will contain
 * <code><replaceable>n</replaceable>+1</code> items. For example, if
 * there is no occurrence of <code>pattern</code>, an array with
 * only one element will be returned. Of course, this is also true if
 * <code>string</code> is empty. If an error occurs,
 * <code>split</code> returns <code>FALSE</code>.
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated as of PHP 5.3.0
 *
 * @link http://www.php.net/manual/en/function.split.php
 */
function split($pattern, $string, $limit = -1)
{
}

/**
 * Split string into array by regular expression case insensitive
 *
 * @param string $pattern Case insensitive regular expression.
 * @param string $string The input string.
 * @param int|null $limit If <code>limit</code> is set, the returned array will
 * contain a maximum of <code>limit</code> elements with the
 * last element containing the whole rest of
 * <code>string</code>.
 *
 * @return array Returns an array of strings, each of which is a substring of
 * <code>string</code> formed by splitting it on boundaries formed
 * by the case insensitive regular expression <code>pattern</code>.
 * If there are <replaceable>n</replaceable> occurrences of
 * <code>pattern</code>, the returned array will contain
 * <code><replaceable>n</replaceable>+1</code> items. For example, if
 * there is no occurrence of <code>pattern</code>, an array with
 * only one element will be returned. Of course, this is also true if
 * <code>string</code> is empty. If an error occurs,
 * <code>spliti</code> returns <code>FALSE</code>.
 *
 * @since PHP 4 >= 4.0.1, PHP 5
 *
 * @deprecated as of PHP 5.3.0
 *
 * @link http://www.php.net/manual/en/function.spliti.php
 */
function spliti($pattern, $string, $limit = -1)
{
}

/**
 * Make regular expression for case insensitive match
 *
 * @param string $string The input string.
 *
 * @return string Returns a valid regular expression which will match
 * <code>string</code>, ignoring case. This expression is
 * <code>string</code> with each alphabetic character converted to
 * a bracket expression; this bracket expression contains that character's
 * uppercase and lowercase form. Other characters remain unchanged.
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated as of PHP 5.3.0
 *
 * @link http://www.php.net/manual/en/function.sql-regcase.php
 */
function sql_regcase($string)
{
}
