<?php
// Start of extension: readline
// - parsed on POSIX with PHP 7.2.3 (extension version 7.2.3)
// - parsed on Windows with PHP 7.2.4 (extension version 7.2.4)

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
function readline($prompt = null): string
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
function readline_add_history($prompt): bool
{
}

/**
 * Initializes the readline callback interface and terminal, prints the prompt and returns immediately
 *
 * WARNING: this may be available on POSIX but not on Windows
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
function readline_callback_handler_install($prompt, $callback): bool
{
}

/**
 * Removes a previously installed callback handler and restores terminal settings
 *
 * WARNING: this may be available on POSIX but not on Windows
 *
 * @return bool
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
 * WARNING: this may be available on POSIX but not on Windows
 *
 * @return void
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-callback-read-char.php
 */
function readline_callback_read_char(): void
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
function readline_clear_history(): bool
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
function readline_completion_function($funcname): bool
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
 * WARNING: this may be available on POSIX but not on Windows
 *
 * @return void
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-on-new-line.php
 */
function readline_on_new_line(): void
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
function readline_read_history($filename = null): bool
{
}

/**
 * Redraws the display
 *
 * WARNING: this may be available on POSIX but not on Windows
 *
 * @return void
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.readline-redisplay.php
 */
function readline_redisplay(): void
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
function readline_write_history($filename = null): bool
{
}
