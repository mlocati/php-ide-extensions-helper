<?php
// Start of extension: dba
// - parsed on POSIX with PHP 7.2.3 (extension version 7.2.3)

/**
 * Close a DBA database
 *
 * @param mixed $handle
 *
 * @return void
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-close.php
 */
function dba_close($handle)
{
}

/**
 * Delete DBA entry specified by key
 *
 * @param mixed $key
 * @param mixed $handle
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-delete.php
 */
function dba_delete($key, $handle): bool
{
}

/**
 * Check whether key exists
 *
 * @param mixed $key
 * @param mixed $handle
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-exists.php
 */
function dba_exists($key, $handle): bool
{
}

/**
 * Fetch data specified by key
 *
 * @param mixed $key
 * @param mixed $skip
 * @param mixed|null $handle
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-fetch.php
 */
function dba_fetch($key, $skip, $handle = null): string
{
}

/**
 * Fetch first key
 *
 * @param mixed $handle
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-firstkey.php
 */
function dba_firstkey($handle): string
{
}

/**
 * List all the handlers available
 *
 * @param mixed|null $full_info
 *
 * @return array
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-handlers.php
 */
function dba_handlers($full_info = null): array
{
}

/**
 * Insert entry
 *
 * @param mixed $key
 * @param mixed $value
 * @param mixed $handle
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-insert.php
 */
function dba_insert($key, $value, $handle): bool
{
}

/**
 * Splits a key in string representation into array representation
 *
 * @param mixed $key
 *
 * @return mixed
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-key-split.php
 */
function dba_key_split($key)
{
}

/**
 * List all open database files
 *
 * @return array
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-list.php
 */
function dba_list(): array
{
}

/**
 * Fetch next key
 *
 * @param mixed $handle
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-nextkey.php
 */
function dba_nextkey($handle): string
{
}

/**
 * Open database
 *
 * @param mixed $path
 * @param mixed $mode
 * @param mixed|null $handlername
 * @param mixed $handler_parameters
 *
 * @return resource
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-open.php
 */
function dba_open($path, $mode, $handlername = null, ...$handler_parameters)
{
}

/**
 * Optimize database
 *
 * @param mixed $handle
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-optimize.php
 */
function dba_optimize($handle): bool
{
}

/**
 * Open database persistently
 *
 * @param mixed $path
 * @param mixed $mode
 * @param mixed|null $handlername
 * @param mixed $handler_parameters
 *
 * @return resource
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-popen.php
 */
function dba_popen($path, $mode, $handlername = null, ...$handler_parameters)
{
}

/**
 * Replace or insert entry
 *
 * @param mixed $key
 * @param mixed $value
 * @param mixed $handle
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-replace.php
 */
function dba_replace($key, $value, $handle): bool
{
}

/**
 * Synchronize database
 *
 * @param mixed $handle
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-sync.php
 */
function dba_sync($handle): bool
{
}
