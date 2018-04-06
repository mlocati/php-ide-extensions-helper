<?php
// Start of extension: dba
// - parsed on POSIX with PHP 5.6.34

/**
 * Close a DBA database
 *
 * mixed $handle
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
 * mixed $key
 * mixed $handle
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-delete.php
 */
function dba_delete($key, $handle)
{
}

/**
 * Check whether key exists
 *
 * mixed $key
 * mixed $handle
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-exists.php
 */
function dba_exists($key, $handle)
{
}

/**
 * Fetch data specified by key
 *
 * mixed $key
 * mixed $skip
 * mixed|null $handle
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-fetch.php
 */
function dba_fetch($key, $skip, $handle = null)
{
}

/**
 * Fetch first key
 *
 * mixed $handle
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-firstkey.php
 */
function dba_firstkey($handle)
{
}

/**
 * List all the handlers available
 *
 * mixed|null $full_info
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
 * mixed $key
 * mixed $value
 * mixed $handle
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-insert.php
 */
function dba_insert($key, $value, $handle)
{
}

/**
 * Splits a key in string representation into array representation
 *
 * mixed $key
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
 * mixed $handle
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-nextkey.php
 */
function dba_nextkey($handle)
{
}

/**
 * Open database
 *
 * mixed $path
 * mixed $mode
 * mixed|null $handlername
 * mixed $handler_parameters
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
 * mixed $handle
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-optimize.php
 */
function dba_optimize($handle)
{
}

/**
 * Open database persistently
 *
 * mixed $path
 * mixed $mode
 * mixed|null $handlername
 * mixed $handler_parameters
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
 * mixed $key
 * mixed $value
 * mixed $handle
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-replace.php
 */
function dba_replace($key, $value, $handle)
{
}

/**
 * Synchronize database
 *
 * mixed $handle
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-sync.php
 */
function dba_sync($handle)
{
}
