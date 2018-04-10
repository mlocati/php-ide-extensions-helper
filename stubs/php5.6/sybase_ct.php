<?php
// Start of extension: sybase_ct
// - parsed on POSIX with PHP 5.6.35

/**
 * @param mixed $link_id
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_affected_rows($link_id = null)
{
}

/**
 * Close MS SQL Server connection
 *
 * @param resource $link_identifier A MS SQL link identifier, returned by
 * <code>mssql_connect</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-close.php
 */
function mssql_close($link_identifier = null)
{
}

/**
 * Open MS SQL server connection
 *
 * @param string $servername The MS SQL server. It can also include a port number, e.g.
 * <code>hostname:port</code> (Linux), or
 * <code>hostname,port</code> (Windows).
 * @param string $username The username.
 * @param string $password The password.
 * @param bool|null $new_link If a second call is made to <code>mssql_connect</code> with the
 * same arguments, no new link will be established, but instead, the link
 * identifier of the already opened link will be returned. This parameter
 * modifies this behavior and makes <code>mssql_connect</code>
 * always open a new link, even if <code>mssql_connect</code> was
 * called before with the same parameters.
 * @param mixed $appname
 * @param mixed $new
 *
 * @return resource Returns a MS SQL link identifier on success, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-connect.php
 */
function mssql_connect($servername = null, $username = null, $password = null, $new_link = false, $appname = null, $new = null)
{
}

/**
 * Moves internal row pointer
 *
 * @param resource $result_identifier The result resource that is being evaluated.
 * @param int $row_number The desired row number of the new result pointer.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-data-seek.php
 */
function mssql_data_seek($result_identifier, $row_number)
{
}

/**
 * @param mixed $retry_count
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 */
function mssql_deadlock_retry_count($retry_count)
{
}

/**
 * Fetch a result row as an associative array, a numeric array, or both
 *
 * @param resource $result The result resource that is being evaluated. This result comes from a
 * call to <code>mssql_query</code>.
 *
 * @return array Returns an array that corresponds to the fetched row, or <code>FALSE</code> if there
 * are no more rows.
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-fetch-array.php
 */
function mssql_fetch_array($result)
{
}

/**
 * Returns an associative array of the current row in the result
 *
 * @param resource $result_id The result resource that is being evaluated. This result comes from a
 * call to <code>mssql_query</code>.
 *
 * @return array Returns an associative array that corresponds to the fetched row, or
 * <code>FALSE</code> if there are no more rows.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-fetch-assoc.php
 */
function mssql_fetch_assoc($result_id)
{
}

/**
 * Get field information
 *
 * @param resource $result The result resource that is being evaluated. This result comes from a
 * call to <code>mssql_query</code>.
 * @param int|null $field_offset The numerical field offset. If the field offset is not specified, the
 * next field that was not yet retrieved by this function is retrieved. The
 * <code>field_offset</code> starts at 0.
 *
 * @return mixed Returns an object containing field information.
 * The properties of the object are:
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-fetch-field.php
 */
function mssql_fetch_field($result, $field_offset = -1)
{
}

/**
 * Fetch row as object
 *
 * @param resource $result The result resource that is being evaluated. This result comes from a
 * call to <code>mssql_query</code>.
 * @param mixed $object
 *
 * @return mixed Returns an object with properties that correspond to the fetched row, or
 * <code>FALSE</code> if there are no more rows.
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
 * @param resource $result The result resource that is being evaluated. This result comes from a
 * call to <code>mssql_query</code>.
 *
 * @return array Returns an array that corresponds to the fetched row, or <code>FALSE</code> if there
 * are no more rows.
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-fetch-row.php
 */
function mssql_fetch_row($result)
{
}

/**
 * Seeks to the specified field offset
 *
 * @param resource $result The result resource that is being evaluated. This result comes from a
 * call to <code>mssql_query</code>.
 * @param int $field_offset The field offset, starts at 0.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-field-seek.php
 */
function mssql_field_seek($result, $field_offset)
{
}

/**
 * Free result memory
 *
 * @param resource $result The result resource that is being freed. This result comes from a
 * call to <code>mssql_query</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
 * @param mixed $d
 *
 * @return string Returns last error message from server, or an empty string if
 * no error messages are returned from MSSQL.
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-get-last-message.php
 */
function mssql_get_last_message($d)
{
}

/**
 * @param mixed $severity
 *
 * @since PHP 4, PHP 5
 */
function mssql_min_client_severity($severity)
{
}

/**
 * @param mixed $severity
 *
 * @since PHP 4, PHP 5
 */
function mssql_min_server_severity($severity)
{
}

/**
 * Gets the number of fields in result
 *
 * @param resource $result The result resource that is being evaluated. This result comes from a
 * call to <code>mssql_query</code>.
 *
 * @return int Returns the number of fields, as an integer.
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
 * @param resource $result The result resource that is being evaluated. This result comes from a
 * call to <code>mssql_query</code>.
 *
 * @return int Returns the number of rows, as an integer.
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
 * @param string $servername The MS SQL server. It can also include a port number. e.g.
 * <code>hostname:port</code>.
 * @param string $username The username.
 * @param string $password The password.
 * @param bool|null $new_link If a second call is made to <code>mssql_pconnect</code> with
 * the same arguments, no new link will be established, but instead, the
 * link identifier of the already opened link will be returned. This
 * parameter modifies this behavior and makes
 * <code>mssql_pconnect</code> always open a new link, even if
 * <code>mssql_pconnect</code> was called before with the same
 * parameters.
 * @param mixed $appname
 *
 * @return resource Returns a positive MS SQL persistent link identifier on success, or
 * <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-pconnect.php
 */
function mssql_pconnect($servername = null, $username = null, $password = null, $new_link = false, $appname = null)
{
}

/**
 * Send MS SQL query
 *
 * @param string $query An SQL query.
 * @param resource $link_identifier A MS SQL link identifier, returned by
 * <code>mssql_connect</code> or
 * <code>mssql_pconnect</code>.
 *
 * @return mixed Returns a MS SQL result resource on success, <code>TRUE</code> if no rows were
 * returned, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-query.php
 */
function mssql_query($query, $link_identifier = null)
{
}

/**
 * Get result data
 *
 * @param resource $result The result resource that is being evaluated. This result comes from a
 * call to <code>mssql_query</code>.
 * @param int $row The row number.
 * @param mixed $field Can be the field's offset, the field's name or the field's table dot
 * field's name (tablename.fieldname). If the column name has been
 * aliased ('select foo as bar from...'), it uses the alias instead of
 * the column name.
 *
 * @return string Returns the contents of the specified cell.
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
 * @param string $database_name The database name.
 * @param resource $link_identifier A MS SQL link identifier, returned by
 * <code>mssql_connect</code> or
 * <code>mssql_pconnect</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-select-db.php
 */
function mssql_select_db($database_name, $link_identifier = null)
{
}

/**
 * @param mixed $error_func
 * @param mixed $connection
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 */
function mssql_set_message_handler($error_func, $connection = null)
{
}

/**
 * @param mixed $query
 * @param mixed $link_id
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 */
function mssql_unbuffered_query($query, $link_id = null)
{
}

/**
 * Gets number of affected rows in last query
 *
 * @param resource $link_identifier If the link identifier isn't specified, the last opened link is assumed.
 *
 * @return int Returns the number of affected rows, as an integer.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-affected-rows.php
 */
function sybase_affected_rows($link_identifier = null)
{
}

/**
 * Closes a Sybase connection
 *
 * @param resource $link_identifier If the link identifier isn't specified, the last opened link is
 * assumed.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-close.php
 */
function sybase_close($link_identifier = null)
{
}

/**
 * Opens a Sybase server connection
 *
 * @param string $servername The servername argument has to be a valid servername that is defined
 * in the 'interfaces' file.
 * @param string $username Sybase user name
 * @param string $password Password associated with <code>username</code>.
 * @param string $charset Specifies the charset for the connection
 * @param string $appname Specifies an <code>appname</code> for the Sybase connection.
 * This allow you to make separate connections in the same script to the
 * same database. This may come handy when you have started a transaction
 * in your current connection, and you need to be able to do a separate
 * query which cannot be performed inside this transaction.
 * @param bool|null $new Whether to open a new connection or use the existing one.
 *
 * @return resource Returns a positive Sybase link identifier on success, or <code>FALSE</code> on
 * failure.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-connect.php
 */
function sybase_connect($servername = null, $username = null, $password = null, $charset = null, $appname = null, $new = false)
{
}

/**
 * Moves internal row pointer
 *
 * @param resource $result_identifier
 * @param int $row_number
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-data-seek.php
 */
function sybase_data_seek($result_identifier, $row_number)
{
}

/**
 * Sets the deadlock retry count
 *
 * @param int $retry_count <table>
 * <title>Values for retry_count</title>
 * <tbody>
 * <tr>
 * <td>-1</td><td>Retry forever (default)</td>
 * </tr>
 * <tr>
 * <td>0</td><td>Do not retry</td>
 * </tr>
 * <tr>
 * <td>n</td><td>Retry n times</td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @return void No value is returned.
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
 * @param resource $result
 *
 * @return array Returns an array that corresponds to the fetched row, or <code>FALSE</code> if there
 * are no more rows.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-fetch-array.php
 */
function sybase_fetch_array($result)
{
}

/**
 * Fetch a result row as an associative array
 *
 * @param resource $result
 *
 * @return array Returns an array that corresponds to the fetched row, or <code>FALSE</code> if there
 * are no more rows.
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-fetch-assoc.php
 */
function sybase_fetch_assoc($result)
{
}

/**
 * Get field information from a result
 *
 * @param resource $result
 * @param int|null $field_offset If the field offset isn't specified, the next field that wasn't yet
 * retrieved by <code>sybase_fetch_field</code> is retrieved.
 *
 * @return mixed Returns an object containing field information.
 * The properties of the object are:
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-fetch-field.php
 */
function sybase_fetch_field($result, $field_offset = -1)
{
}

/**
 * Fetch a row as an object
 *
 * @param resource $result
 * @param mixed $object Use the second <code>object</code> to specify the type of object
 * you want to return. If this parameter is omitted, the object will be of
 * type stdClass.
 *
 * @return mixed Returns an object with properties that correspond to the fetched row, or
 * <code>FALSE</code> if there are no more rows.
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
 * @param resource $result
 *
 * @return array Returns an array that corresponds to the fetched row, or <code>FALSE</code> if there
 * are no more rows. Each result column is stored in an array offset,
 * starting at offset 0.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-fetch-row.php
 */
function sybase_fetch_row($result)
{
}

/**
 * Sets field offset
 *
 * @param resource $result
 * @param int $field_offset
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-field-seek.php
 */
function sybase_field_seek($result, $field_offset)
{
}

/**
 * Frees result memory
 *
 * @param resource $result
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
 * @param mixed $d
 *
 * @return string Returns the message as a string.
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
 * @param int $severity
 *
 * @return void No value is returned.
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
 * @param int $severity
 *
 * @return void No value is returned.
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
 * @param resource $result
 *
 * @return int Returns the number of fields as an integer.
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
 * @param resource $result
 *
 * @return int Returns the number of rows as an integer.
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
 * @param string $servername The servername argument has to be a valid servername that is defined
 * in the 'interfaces' file.
 * @param string $username Sybase user name
 * @param string $password Password associated with <code>username</code>.
 * @param string $charset Specifies the charset for the connection
 * @param string $appname Specifies an <code>appname</code> for the Sybase connection.
 * This allow you to make separate connections in the same script to the
 * same database. This may come handy when you have started a transaction
 * in your current connection, and you need to be able to do a separate
 * query which cannot be performed inside this transaction.
 *
 * @return resource Returns a positive Sybase persistent link identifier on success, or
 * <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-pconnect.php
 */
function sybase_pconnect($servername = null, $username = null, $password = null, $charset = null, $appname = null)
{
}

/**
 * Sends a Sybase query
 *
 * @param string $query
 * @param resource $link_identifier If the link identifier isn't specified, the last opened link is
 * assumed. If no link is open, the function tries to establish a link as
 * if <code>sybase_connect</code> was called, and use it.
 *
 * @return mixed Returns a positive Sybase result identifier on success, <code>FALSE</code> on error,
 * or <code>TRUE</code> if the query was successful but didn't return any columns.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-query.php
 */
function sybase_query($query, $link_identifier = null)
{
}

/**
 * Get result data
 *
 * @param resource $result
 * @param int $row
 * @param mixed $field The field argument can be the field's offset, or the field's name, or
 * the field's table dot field's name (tablename.fieldname). If the
 * column name has been aliased ('select foo as bar from...'), use the
 * alias instead of the column name.
 *
 * @return string <code>sybase_result</code> returns the contents of one cell from a
 * Sybase result set.
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
 * @param string $database_name
 * @param resource $link_identifier If no link identifier is specified, the last opened link is assumed.
 * If no link is open, the function will try to establish a link as if
 * <code>sybase_connect</code> was called, and use it.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-select-db.php
 */
function sybase_select_db($database_name, $link_identifier = null)
{
}

/**
 * Sets the handler called when a server message is raised
 *
 * @param callable $handler The handler expects five arguments in the following order: message
 * number, severity, state, line number and description. The first four
 * are integers. The last is a string. If the function returns <code>FALSE</code>,
 * PHP generates an ordinary error message.
 * @param resource $link_identifier If the link identifier isn't specified, the last opened link is assumed.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-set-message-handler.php
 */
function sybase_set_message_handler(callable $handler, $link_identifier = null)
{
}

/**
 * Send a Sybase query and do not block
 *
 * @param string $query
 * @param resource $link_identifier
 *
 * @return resource Returns a positive Sybase result identifier on success, or <code>FALSE</code> on
 * error.
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 *
 * @link http://www.php.net/manual/en/function.sybase-unbuffered-query.php
 */
function sybase_unbuffered_query($query, $link_identifier = null)
{
}
