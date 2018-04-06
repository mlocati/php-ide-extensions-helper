<?php
// Start of extension: readline
// - parsed on POSIX with PHP 5.6.34 (extension version 5.6.34)

/**
 * @var string
 */
const READLINE_LIB = 'libedit';

/**
 * Reads a line
 *
 * @param mixed|null $prompt
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline.php
 */
function readline($prompt = null)
{
}

/**
 * Adds a line to the history
 *
 * @param mixed $prompt
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-add-history.php
 */
function readline_add_history($prompt)
{
}

/**
 * Initializes the readline callback interface and terminal, prints the prompt and returns immediately
 *
 * @param mixed $prompt
 * @param mixed $callback
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-callback-handler-install.php
 */
function readline_callback_handler_install($prompt, $callback)
{
}

/**
 * Removes a previously installed callback handler and restores terminal settings
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-callback-handler-remove.php
 */
function readline_callback_handler_remove()
{
}

/**
 * Reads a character and informs the readline callback interface when a line is received
 *
 * @return void
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
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-clear-history.php
 */
function readline_clear_history()
{
}

/**
 * Registers a completion function
 *
 * @param mixed $funcname
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-completion-function.php
 */
function readline_completion_function($funcname)
{
}

/**
 * Gets/sets various internal readline variables
 *
 * @param mixed|null $varname
 * @param mixed|null $newvalue
 *
 * @return mixed
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-info.php
 */
function readline_info($varname = null, $newvalue = null)
{
}

/**
 * Inform readline that the cursor has moved to a new line
 *
 * @return void
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
 * @param mixed|null $filename
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-read-history.php
 */
function readline_read_history($filename = null)
{
}

/**
 * Redraws the display
 *
 * @return void
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
 * @param mixed|null $filename
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-write-history.php
 */
function readline_write_history($filename = null)
{
}