<?php
// Start of extension: recode
// - parsed on POSIX with PHP 7.2.4 (extension version 7.2.4)

/**
 * Alias of <code>recode_string</code>
 *
 * @param mixed $request
 * @param mixed $str
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.recode.php
 */
function recode($request, $str)
{
}

/**
 * Recode from file to file according to recode request
 *
 * @param string $request The desired recode request type
 * @param resource $input A local file handle <code>resource</code> for
 * the <code>input</code>
 * @param resource $output A local file handle <code>resource</code> for
 * the <code>output</code>
 *
 * @return bool Returns <code>FALSE</code>, if unable to comply, <code>TRUE</code> otherwise.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.recode-file.php
 */
function recode_file(string $request, $input, $output): bool
{
}

/**
 * Recode a string according to a recode request
 *
 * @param string $request The desired recode request type
 * @param string $string The <code>string</code> to be recoded
 *
 * @return string Returns the recoded <code>string</code> or <code>FALSE</code>, if unable to
 * perform the recode request.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.recode-string.php
 */
function recode_string(string $request, string $string): string
{
}
