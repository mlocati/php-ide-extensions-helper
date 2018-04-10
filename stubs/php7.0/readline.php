<?php
// Start of extension: readline
// - parsed on POSIX with PHP 7.0.29 (extension version 7.0.29)

/**
 * @var string
 */
const READLINE_LIB = 'libedit';

/**
 * Reads a line
 *
 * @param string $prompt You may specify a string with which to prompt the user.
 *
 * @return string Returns a single string from the user. The line returned has the ending
 * newline removed.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline.php
 */
function readline(string $prompt = null): string
{
}

/**
 * Adds a line to the history
 *
 * @param string $line The line to be added in the history.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-add-history.php
 */
function readline_add_history(string $line): bool
{
}

/**
 * Initializes the readline callback interface and terminal, prints the prompt and returns immediately
 *
 * @param string $prompt The prompt message.
 * @param callable $callback The <code>callback</code> function takes one parameter; the
 * user input returned.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-callback-handler-install.php
 */
function readline_callback_handler_install(string $prompt, callable $callback): bool
{
}

/**
 * Removes a previously installed callback handler and restores terminal settings
 *
 * @return bool Returns <code>TRUE</code> if a previously installed callback handler was removed, or
 * <code>FALSE</code> if one could not be found.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-callback-handler-remove.php
 */
function readline_callback_handler_remove(): bool
{
}

/**
 * Reads a character and informs the readline callback interface when a line is received
 *
 * @return void No value is returned.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-callback-read-char.php
 */
function readline_callback_read_char()
{
}

/**
 * Clears the history
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-clear-history.php
 */
function readline_clear_history(): bool
{
}

/**
 * Registers a completion function
 *
 * @param callable $function You must supply the name of an existing function which accepts a
 * partial command line and returns an array of possible matches.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-completion-function.php
 */
function readline_completion_function(callable $function): bool
{
}

/**
 * Gets/sets various internal readline variables
 *
 * @param string $varname A variable name.
 * @param string $newvalue If provided, this will be the new value of the setting.
 *
 * @return mixed If called with no parameters, this function returns an array of
 * values for all the setting readline uses. The elements will
 * be indexed by the following values: done, end, erase_empty_line,
 * library_version, line_buffer, mark, pending_input, point, prompt,
 * readline_name, and terminal_name.
 * If called with one or two parameters, the old value is returned.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-info.php
 */
function readline_info(string $varname = null, string $newvalue = null)
{
}

/**
 * Inform readline that the cursor has moved to a new line
 *
 * @return void No value is returned.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-on-new-line.php
 */
function readline_on_new_line()
{
}

/**
 * Reads the history
 *
 * @param string $filename Path to the filename containing the command history.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-read-history.php
 */
function readline_read_history(string $filename = null): bool
{
}

/**
 * Redraws the display
 *
 * @return void No value is returned.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-redisplay.php
 */
function readline_redisplay()
{
}

/**
 * Writes the history
 *
 * @param string $filename Path to the saved file.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-write-history.php
 */
function readline_write_history(string $filename = null): bool
{
}
