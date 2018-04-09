<?php
// Start of extension: dba
// - parsed on POSIX with PHP 7.2.3 (extension version 7.2.3)

/**
 * Close a DBA database
 *
 * @param resource $handle The database handler, returned by <code>dba_open</code> or
 * <code>dba_popen</code>.
 *
 * @return void No value is returned.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-close.php
 */
function dba_close($handle): void
{
}

/**
 * Delete DBA entry specified by key
 *
 * @param string $key The key of the entry which is deleted.
 * @param resource $handle The database handler, returned by <code>dba_open</code> or
 * <code>dba_popen</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-delete.php
 */
function dba_delete(string $key, $handle): bool
{
}

/**
 * Check whether key exists
 *
 * @param string $key The key the check is performed for.
 * @param resource $handle The database handler, returned by <code>dba_open</code> or
 * <code>dba_popen</code>.
 *
 * @return bool Returns <code>TRUE</code> if the key exists, <code>FALSE</code> otherwise.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-exists.php
 */
function dba_exists(string $key, $handle): bool
{
}

/**
 * Fetch data specified by key
 *
 * @param string $key The key the data is specified by.
 * @param resource $handle The database handler, returned by <code>dba_open</code> or
 * <code>dba_popen</code>.
 * @param mixed $handle
 *
 * @return string Returns the associated string if the key/data pair is found, <code>FALSE</code>
 * otherwise.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-fetch.php
 */
function dba_fetch(string $key, $handle, $handle = null): string
{
}

/**
 * Fetch first key
 *
 * @param resource $handle The database handler, returned by <code>dba_open</code> or
 * <code>dba_popen</code>.
 *
 * @return string Returns the key on success or <code>FALSE</code> on failure.
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
 * @param bool|null $full_info Turns on/off full information display in the result.
 *
 * @return array Returns an array of database handlers. If <code>full_info</code>
 * is set to <code>TRUE</code>, the array will be associative with the handlers names as
 * keys, and their version information as value. Otherwise, the result will be
 * an indexed array of handlers names.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-handlers.php
 */
function dba_handlers(bool $full_info = false): array
{
}

/**
 * Insert entry
 *
 * @param string $key The key of the entry to be inserted. If this key already exist in the
 * database, this function will fail. Use <code>dba_replace</code>
 * if you need to replace an existent key.
 * @param string $value The value to be inserted.
 * @param resource $handle The database handler, returned by <code>dba_open</code> or
 * <code>dba_popen</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-insert.php
 */
function dba_insert(string $key, string $value, $handle): bool
{
}

/**
 * Splits a key in string representation into array representation
 *
 * @param mixed $key The key in string representation.
 *
 * @return mixed Returns an array of the form <code>array(0 =&gt; group, 1 =&gt;
 * value_name)</code>. This function will return <code>FALSE</code> if
 * <code>key</code> is <code>NULL</code> or <code>FALSE</code>.
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
 * @return array An associative array, in the form <code>resourceid =&gt; filename</code>.
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
 * @param resource $handle The database handler, returned by <code>dba_open</code> or
 * <code>dba_popen</code>.
 *
 * @return string Returns the key on success or <code>FALSE</code> on failure.
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
 * @param string $path Commonly a regular path in your filesystem.
 * @param string $mode It is <code>r</code> for read access, <code>w</code> for
 * read/write access to an already existing database, <code>c</code>
 * for read/write access and database creation if it doesn't currently exist,
 * and <code>n</code> for create, truncate and read/write access.
 * The database is created in BTree mode, other modes (like Hash or Queue)
 * are not supported.
 * @param string $handler The name of the handler which
 * shall be used for accessing <code>path</code>. It is passed
 * all optional parameters given to <code>dba_open</code> and
 * can act on behalf of them.
 * @param mixed $handler_parameters
 *
 * @return resource Returns a positive handle on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-open.php
 */
function dba_open(string $path, string $mode, string $handler = null, ...$handler_parameters)
{
}

/**
 * Optimize database
 *
 * @param resource $handle The database handler, returned by <code>dba_open</code> or
 * <code>dba_popen</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
 * @param string $path Commonly a regular path in your filesystem.
 * @param string $mode It is <code>r</code> for read access, <code>w</code> for
 * read/write access to an already existing database, <code>c</code>
 * for read/write access and database creation if it doesn't currently exist,
 * and <code>n</code> for create, truncate and read/write access.
 * @param string $handler The name of the handler which
 * shall be used for accessing <code>path</code>. It is passed
 * all optional parameters given to <code>dba_popen</code> and
 * can act on behalf of them.
 * @param mixed $handler_parameters
 *
 * @return resource Returns a positive handle on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-popen.php
 */
function dba_popen(string $path, string $mode, string $handler = null, ...$handler_parameters)
{
}

/**
 * Replace or insert entry
 *
 * @param string $key The key of the entry to be replaced.
 * @param string $value The value to be replaced.
 * @param resource $handle The database handler, returned by <code>dba_open</code> or
 * <code>dba_popen</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-replace.php
 */
function dba_replace(string $key, string $value, $handle): bool
{
}

/**
 * Synchronize database
 *
 * @param resource $handle The database handler, returned by <code>dba_open</code> or
 * <code>dba_popen</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dba-sync.php
 */
function dba_sync($handle): bool
{
}
