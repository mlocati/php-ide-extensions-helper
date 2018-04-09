<?php
// Start of extension: ctype
// - parsed on POSIX with PHP 7.2.3 (extension version 7.2.3)
// - parsed on Windows with PHP 7.2.4 (extension version 7.2.4)

/**
 * Check for alphanumeric character(s)
 *
 * @param string $text The tested string.
 *
 * @return bool Returns <code>TRUE</code> if every character in <code>text</code> is either
 * a letter or a digit, <code>FALSE</code> otherwise.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ctype-alnum.php
 */
function ctype_alnum(string $text): bool
{
}

/**
 * Check for alphabetic character(s)
 *
 * @param string $text The tested string.
 *
 * @return bool Returns <code>TRUE</code> if every character in <code>text</code> is
 * a letter from the current locale, <code>FALSE</code> otherwise.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ctype-alpha.php
 */
function ctype_alpha(string $text): bool
{
}

/**
 * Check for control character(s)
 *
 * @param string $text The tested string.
 *
 * @return bool Returns <code>TRUE</code> if every character in <code>text</code> is
 * a control character from the current locale, <code>FALSE</code> otherwise.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ctype-cntrl.php
 */
function ctype_cntrl(string $text): bool
{
}

/**
 * Check for numeric character(s)
 *
 * @param string $text The tested string.
 *
 * @return bool Returns <code>TRUE</code> if every character in the string
 * <code>text</code> is a decimal digit, <code>FALSE</code> otherwise.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ctype-digit.php
 */
function ctype_digit(string $text): bool
{
}

/**
 * Check for any printable character(s) except space
 *
 * @param string $text The tested string.
 *
 * @return bool Returns <code>TRUE</code> if every character in <code>text</code> is
 * printable and actually creates visible output (no white space), <code>FALSE</code>
 * otherwise.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ctype-graph.php
 */
function ctype_graph(string $text): bool
{
}

/**
 * Check for lowercase character(s)
 *
 * @param string $text The tested string.
 *
 * @return bool Returns <code>TRUE</code> if every character in <code>text</code> is
 * a lowercase letter in the current locale.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ctype-lower.php
 */
function ctype_lower(string $text): bool
{
}

/**
 * Check for printable character(s)
 *
 * @param string $text The tested string.
 *
 * @return bool Returns <code>TRUE</code> if every character in <code>text</code>
 * will actually create output (including blanks). Returns <code>FALSE</code> if
 * <code>text</code> contains control characters or characters
 * that do not have any output or control function at all.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ctype-print.php
 */
function ctype_print(string $text): bool
{
}

/**
 * Check for any printable character which is not whitespace or an
 * alphanumeric character
 *
 * @param string $text The tested string.
 *
 * @return bool Returns <code>TRUE</code> if every character in <code>text</code>
 * is printable, but neither letter, digit or blank, <code>FALSE</code> otherwise.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ctype-punct.php
 */
function ctype_punct(string $text): bool
{
}

/**
 * Check for whitespace character(s)
 *
 * @param string $text The tested string.
 *
 * @return bool Returns <code>TRUE</code> if every character in <code>text</code>
 * creates some sort of white space, <code>FALSE</code> otherwise. Besides the
 * blank character this also includes tab, vertical tab, line feed,
 * carriage return and form feed characters.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ctype-space.php
 */
function ctype_space(string $text): bool
{
}

/**
 * Check for uppercase character(s)
 *
 * @param string $text The tested string.
 *
 * @return bool Returns <code>TRUE</code> if every character in <code>text</code> is
 * an uppercase letter in the current locale.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ctype-upper.php
 */
function ctype_upper(string $text): bool
{
}

/**
 * Check for character(s) representing a hexadecimal digit
 *
 * @param string $text The tested string.
 *
 * @return bool Returns <code>TRUE</code> if every character in <code>text</code> is
 * a hexadecimal 'digit', that is a decimal digit or a character from
 * <code>[A-Fa-f]</code> , <code>FALSE</code> otherwise.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ctype-xdigit.php
 */
function ctype_xdigit(string $text): bool
{
}
