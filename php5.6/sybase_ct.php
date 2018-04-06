<?php
// Start of extension: sybase_ct
// - parsed on POSIX with PHP 5.6.34

/**
 * mixed|null $link_id
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_affected_rows($link_id = null)
{
}

/**
 * Close MS SQL Server connection
 *
 * mixed|null $link_id
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-close.php
 */
function mssql_close($link_id = null)
{
}

/**
 * Open MS SQL server connection
 *
 * mixed|null $host
 * mixed|null $user
 * mixed|null $password
 * mixed|null $charset
 * mixed|null $appname
 * mixed|null $new
 *
 * @return resource
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-connect.php
 */
function mssql_connect($host = null, $user = null, $password = null, $charset = null, $appname = null, $new = null)
{
}

/**
 * Moves internal row pointer
 *
 * mixed $result
 * mixed $offset
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-data-seek.php
 */
function mssql_data_seek($result, $offset)
{
}

/**
 * mixed $retry_count
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 */
function mssql_deadlock_retry_count($retry_count)
{
}

/**
 * Fetch a result row as an associative array, a numeric array, or both
 *
 * mixed $result
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-fetch-array.php
 */
function mssql_fetch_array($result): array
{
}

/**
 * Returns an associative array of the current row in the result
 *
 * mixed $result
 *
 * @return array
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-fetch-assoc.php
 */
function mssql_fetch_assoc($result): array
{
}

/**
 * Get field information
 *
 * mixed $result
 * mixed|null $offset
 *
 * @return object
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-fetch-field.php
 */
function mssql_fetch_field($result, $offset = null)
{
}

/**
 * Fetch row as object
 *
 * mixed $result
 * mixed|null $object
 *
 * @return object
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-fetch-object.php
 */
function mssql_fetch_object($result, $object = null)
{
}

/**
 * Get row as enumerated array
 *
 * mixed $result
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-fetch-row.php
 */
function mssql_fetch_row($result): array
{
}

/**
 * Seeks to the specified field offset
 *
 * mixed $result
 * mixed $offset
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-field-seek.php
 */
function mssql_field_seek($result, $offset)
{
}

/**
 * Free result memory
 *
 * mixed $result
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-free-result.php
 */
function mssql_free_result($result)
{
}

/**
 * Returns the last message from the server
 *
 * mixed $d
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-get-last-message.php
 */
function mssql_get_last_message($d)
{
}

/**
 * mixed $severity
 *
 * @since PHP 4, PHP 5
 */
function mssql_min_client_severity($severity)
{
}

/**
 * mixed $severity
 *
 * @since PHP 4, PHP 5
 */
function mssql_min_server_severity($severity)
{
}

/**
 * Gets the number of fields in result
 *
 * mixed $result
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-num-fields.php
 */
function mssql_num_fields($result)
{
}

/**
 * Gets the number of rows in result
 *
 * mixed $result
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-num-rows.php
 */
function mssql_num_rows($result)
{
}

/**
 * Open persistent MS SQL connection
 *
 * mixed|null $host
 * mixed|null $user
 * mixed|null $password
 * mixed|null $charset
 * mixed|null $appname
 *
 * @return resource
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-pconnect.php
 */
function mssql_pconnect($host = null, $user = null, $password = null, $charset = null, $appname = null)
{
}

/**
 * Send MS SQL query
 *
 * mixed $query
 * mixed|null $link_id
 *
 * @return mixed
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-query.php
 */
function mssql_query($query, $link_id = null)
{
}

/**
 * Get result data
 *
 * mixed $result
 * mixed $row
 * mixed $field
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-result.php
 */
function mssql_result($result, $row, $field)
{
}

/**
 * Select MS SQL database
 *
 * mixed $database
 * mixed|null $link_id
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-select-db.php
 */
function mssql_select_db($database, $link_id = null)
{
}

/**
 * mixed $error_func
 * mixed|null $connection
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 */
function mssql_set_message_handler($error_func, $connection = null)
{
}

/**
 * mixed $query
 * mixed|null $link_id
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 */
function mssql_unbuffered_query($query, $link_id = null)
{
}

/**
 * Gets number of affected rows in last query
 *
 * mixed|null $link_id
 *
 * @return int
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-affected-rows.php
 */
function sybase_affected_rows($link_id = null)
{
}

/**
 * Closes a Sybase connection
 *
 * mixed|null $link_id
 *
 * @return bool
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-close.php
 */
function sybase_close($link_id = null)
{
}

/**
 * Opens a Sybase server connection
 *
 * mixed|null $host
 * mixed|null $user
 * mixed|null $password
 * mixed|null $charset
 * mixed|null $appname
 * mixed|null $new
 *
 * @return resource
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-connect.php
 */
function sybase_connect($host = null, $user = null, $password = null, $charset = null, $appname = null, $new = null)
{
}

/**
 * Moves internal row pointer
 *
 * mixed $result
 * mixed $offset
 *
 * @return bool
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-data-seek.php
 */
function sybase_data_seek($result, $offset)
{
}

/**
 * Sets the deadlock retry count
 *
 * mixed $retry_count
 *
 * @return void
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-deadlock-retry-count.php
 */
function sybase_deadlock_retry_count($retry_count)
{
}

/**
 * Fetch row as array
 *
 * mixed $result
 *
 * @return array
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-fetch-array.php
 */
function sybase_fetch_array($result): array
{
}

/**
 * Fetch a result row as an associative array
 *
 * mixed $result
 *
 * @return array
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-fetch-assoc.php
 */
function sybase_fetch_assoc($result): array
{
}

/**
 * Get field information from a result
 *
 * mixed $result
 * mixed|null $offset
 *
 * @return object
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-fetch-field.php
 */
function sybase_fetch_field($result, $offset = null)
{
}

/**
 * Fetch a row as an object
 *
 * mixed $result
 * mixed|null $object
 *
 * @return object
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-fetch-object.php
 */
function sybase_fetch_object($result, $object = null)
{
}

/**
 * Get a result row as an enumerated array
 *
 * mixed $result
 *
 * @return array
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-fetch-row.php
 */
function sybase_fetch_row($result): array
{
}

/**
 * Sets field offset
 *
 * mixed $result
 * mixed $offset
 *
 * @return bool
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-field-seek.php
 */
function sybase_field_seek($result, $offset)
{
}

/**
 * Frees result memory
 *
 * mixed $result
 *
 * @return bool
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-free-result.php
 */
function sybase_free_result($result)
{
}

/**
 * Returns the last message from the server
 *
 * mixed $d
 *
 * @return string
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-get-last-message.php
 */
function sybase_get_last_message($d)
{
}

/**
 * Sets minimum client severity
 *
 * mixed $severity
 *
 * @return void
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-min-client-severity.php
 */
function sybase_min_client_severity($severity)
{
}

/**
 * Sets minimum server severity
 *
 * mixed $severity
 *
 * @return void
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-min-server-severity.php
 */
function sybase_min_server_severity($severity)
{
}

/**
 * Gets the number of fields in a result set
 *
 * mixed $result
 *
 * @return int
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-num-fields.php
 */
function sybase_num_fields($result)
{
}

/**
 * Get number of rows in a result set
 *
 * mixed $result
 *
 * @return int
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-num-rows.php
 */
function sybase_num_rows($result)
{
}

/**
 * Open persistent Sybase connection
 *
 * mixed|null $host
 * mixed|null $user
 * mixed|null $password
 * mixed|null $charset
 * mixed|null $appname
 *
 * @return resource
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-pconnect.php
 */
function sybase_pconnect($host = null, $user = null, $password = null, $charset = null, $appname = null)
{
}

/**
 * Sends a Sybase query
 *
 * mixed $query
 * mixed|null $link_id
 *
 * @return mixed
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-query.php
 */
function sybase_query($query, $link_id = null)
{
}

/**
 * Get result data
 *
 * mixed $result
 * mixed $row
 * mixed $field
 *
 * @return string
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-result.php
 */
function sybase_result($result, $row, $field)
{
}

/**
 * Selects a Sybase database
 *
 * mixed $database
 * mixed|null $link_id
 *
 * @return bool
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-select-db.php
 */
function sybase_select_db($database, $link_id = null)
{
}

/**
 * Sets the handler called when a server message is raised
 *
 * mixed $error_func
 * mixed|null $connection
 *
 * @return bool
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-set-message-handler.php
 */
function sybase_set_message_handler($error_func, $connection = null)
{
}

/**
 * Send a Sybase query and do not block
 *
 * mixed $query
 * mixed|null $link_id
 *
 * @return resource
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-unbuffered-query.php
 */
function sybase_unbuffered_query($query, $link_id = null)
{
}
