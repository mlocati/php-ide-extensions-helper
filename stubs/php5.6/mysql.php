<?php
// Start of extension: mysql
// - parsed on POSIX with PHP 5.6.35 (extension version 1.0)
// - parsed on Windows with PHP 5.6.35 (extension version 1.0)

/**
 * Columns are returned into the array having the fieldname as the array
 * index.
 *
 * @link http://www.php.net/manual/en/mysql.constants.php#constant.mysql-assoc
 *
 * @var int
 */
const MYSQL_ASSOC = 1;

/**
 * Columns are returned into the array having both a numerical index
 * and the fieldname as the array index.
 *
 * @link http://www.php.net/manual/en/mysql.constants.php#constant.mysql-both
 *
 * @var int
 */
const MYSQL_BOTH = 3;

/**
 * Use compression protocol
 *
 * @link http://www.php.net/manual/en/mysql.constants.php#constant.mysql-client-compress
 *
 * @var int
 */
const MYSQL_CLIENT_COMPRESS = 32;

/**
 * Allow space after function names
 *
 * @link http://www.php.net/manual/en/mysql.constants.php#constant.mysql-client-ignore-space
 *
 * @var int
 */
const MYSQL_CLIENT_IGNORE_SPACE = 256;

/**
 * Allow interactive_timeout seconds (instead of <code>wait_timeout</code>) of
 * inactivity before closing the connection.
 *
 * @link http://www.php.net/manual/en/mysql.constants.php#constant.mysql-client-interactive
 *
 * @var int
 */
const MYSQL_CLIENT_INTERACTIVE = 1024;

/**
 * Use SSL encryption. This flag is only available with version 4.x
 * of the MySQL client library or newer. Version 3.23.x is bundled both
 * with PHP 4 and Windows binaries of PHP 5.
 *
 * @link http://www.php.net/manual/en/mysql.constants.php#constant.mysql-client-ssl
 *
 * @var int
 */
const MYSQL_CLIENT_SSL = 2048;

/**
 * Columns are returned into the array having a numerical index to the
 * fields. This index starts with 0, the first field in the result.
 *
 * @link http://www.php.net/manual/en/mysql.constants.php#constant.mysql-num
 *
 * @var int
 */
const MYSQL_NUM = 2;

/**
 * @param mixed $database_name
 * @param mixed $query
 * @param mixed $link_identifier
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated
 */
function mysql($database_name, $query, $link_identifier = null)
{
}

/**
 * Get number of affected rows in previous MySQL operation
 *
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return int Returns the number of affected rows on success, and -1 if the last query
 * failed.
 * If the last query was a DELETE query with no WHERE clause, all
 * of the records will have been deleted from the table but this
 * function will return zero with MySQL versions prior to 4.1.2.
 * When using UPDATE, MySQL will not update columns where the new value is the
 * same as the old value. This creates the possibility that
 * <code>mysql_affected_rows</code> may not actually equal the number
 * of rows matched, only the number of rows that were literally affected by
 * the query.
 * The REPLACE statement first deletes the record with the same primary key
 * and then inserts the new record. This function returns the number of
 * deleted records plus the number of inserted records.
 * In the case of "INSERT ... ON DUPLICATE KEY UPDATE" queries, the
 * return value will be <code>1</code> if an insert was performed,
 * or <code>2</code> for an update of an existing row.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-affected-rows.php
 */
function mysql_affected_rows($link_identifier = null)
{
}

/**
 * Returns the name of the character set
 *
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return string Returns the default character set name for the current connection.
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-client-encoding.php
 */
function mysql_client_encoding($link_identifier = null)
{
}

/**
 * Close MySQL connection
 *
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no connection is found or
 * established, an <code>E_WARNING</code> level error is
 * generated.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-close.php
 */
function mysql_close($link_identifier = null)
{
}

/**
 * Open a connection to a MySQL Server
 *
 * @param string|null $server The MySQL server. It can also include a port number. e.g.
 * "hostname:port" or a path to a local socket e.g. ":/path/to/socket" for
 * the localhost.
 * @param string|null $username The username. Default value is defined by mysql.default_user. In
 * SQL safe mode, this parameter is ignored and the name of the user that
 * owns the server process is used.
 * @param string|null $password The password. Default value is defined by mysql.default_password. In
 * SQL safe mode, this parameter is ignored and empty password is used.
 * @param bool|null $new_link If a second call is made to <code>mysql_connect</code>
 * with the same arguments, no new link will be established, but
 * instead, the link identifier of the already opened link will be
 * returned. The <code>new_link</code> parameter modifies this
 * behavior and makes <code>mysql_connect</code> always open
 * a new link, even if <code>mysql_connect</code> was called
 * before with the same parameters.
 * In SQL safe mode, this parameter is ignored.
 * @param int|null $client_flags The <code>client_flags</code> parameter can be a combination
 * of the following constants:
 * 128 (enable <code>LOAD DATA LOCAL</code> handling),
 * <code>MYSQL_CLIENT_SSL</code>,
 * <code>MYSQL_CLIENT_COMPRESS</code>,
 * <code>MYSQL_CLIENT_IGNORE_SPACE</code> or
 * <code>MYSQL_CLIENT_INTERACTIVE</code>.
 * Read the section about for further information.
 * In SQL safe mode, this parameter is ignored.
 *
 * @return resource Returns a MySQL link identifier on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-connect.php
 */
function mysql_connect($server = /* ini_get("mysql.default_host") */ null, $username = /* ini_get("mysql.default_user") */ null, $password = /* ini_get("mysql.default_password") */ null, $new_link = false, $client_flags = 0)
{
}

/**
 * Move internal result pointer
 *
 * @param resource $result The result <code>resource</code> that
 * is being evaluated. This result comes from a call to
 * <code>mysql_query</code>.
 * @param int $row_number The desired row number of the new result pointer.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-data-seek.php
 */
function mysql_data_seek($result, $row_number)
{
}

/**
 * Retrieves database name from the call to <code>mysql_list_dbs</code>
 *
 * @param resource $result The result pointer from a call to <code>mysql_list_dbs</code>.
 * @param int $row The index into the result set.
 * @param mixed|null $field The field name.
 *
 * @return string Returns the database name on success, and <code>FALSE</code> on failure. If <code>FALSE</code>
 * is returned, use <code>mysql_error</code> to determine the nature
 * of the error.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-db-name.php
 */
function mysql_db_name($result, $row, $field = null)
{
}

/**
 * Selects a database and executes a query on it
 *
 * @param string $database The name of the database that will be selected.
 * @param string $query The MySQL query.
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return resource Returns a positive MySQL result resource to the query result,
 * or <code>FALSE</code> on error. The function also returns <code>TRUE</code>/<code>FALSE</code> for
 * <code>INSERT</code>/<code>UPDATE</code>/<code>DELETE</code>
 * queries to indicate success/failure.
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mysql-db-query.php
 */
function mysql_db_query($database, $query, $link_identifier = null)
{
}

/**
 * @param mixed $result
 * @param mixed $row
 * @param mixed $field
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated
 */
function mysql_dbname($result, $row, $field = null)
{
}

/**
 * Returns the numerical value of the error message from previous MySQL operation
 *
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return int Returns the error number from the last MySQL function, or
 * <code>0</code> (zero) if no error occurred.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-errno.php
 */
function mysql_errno($link_identifier = null)
{
}

/**
 * Returns the text of the error message from previous MySQL operation
 *
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return string Returns the error text from the last MySQL function, or
 * <code>''</code> (empty string) if no error occurred.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-error.php
 */
function mysql_error($link_identifier = null)
{
}

/**
 * Escapes a string for use in a mysql_query
 *
 * @param string $unescaped_string The string that is to be escaped.
 *
 * @return string Returns the escaped string.
 *
 * @since PHP 4 >= 4.0.3, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-escape-string.php
 */
function mysql_escape_string($unescaped_string)
{
}

/**
 * Fetch a result row as an associative array, a numeric array, or both
 *
 * @param resource $result The result <code>resource</code> that
 * is being evaluated. This result comes from a call to
 * <code>mysql_query</code>.
 * @param int|null $result_type The type of array that is to be fetched. It's a constant and can
 * take the following values: <code>MYSQL_ASSOC</code>,
 * <code>MYSQL_NUM</code>, and
 * <code>MYSQL_BOTH</code>.
 *
 * @return array Returns an array of strings that corresponds to the fetched row, or <code>FALSE</code>
 * if there are no more rows. The type of returned array depends on
 * how <code>result_type</code> is defined. By using
 * <code>MYSQL_BOTH</code> (default), you'll get an array with both
 * associative and number indices. Using <code>MYSQL_ASSOC</code>, you
 * only get associative indices (as <code>mysql_fetch_assoc</code>
 * works), using <code>MYSQL_NUM</code>, you only get number indices
 * (as <code>mysql_fetch_row</code> works).
 * If two or more columns of the result have the same field names,
 * the last column will take precedence. To access the other column(s)
 * of the same name, you must use the numeric index of the column or
 * make an alias for the column. For aliased columns, you cannot
 * access the contents with the original column name.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-fetch-array.php
 */
function mysql_fetch_array($result, $result_type = MYSQL_BOTH)
{
}

/**
 * Fetch a result row as an associative array
 *
 * @param resource $result The result <code>resource</code> that
 * is being evaluated. This result comes from a call to
 * <code>mysql_query</code>.
 *
 * @return array Returns an associative array of strings that corresponds to the fetched row, or
 * <code>FALSE</code> if there are no more rows.
 * If two or more columns of the result have the same field names,
 * the last column will take precedence. To access the other
 * column(s) of the same name, you either need to access the
 * result with numeric indices by using
 * <code>mysql_fetch_row</code> or add alias names.
 * See the example at the <code>mysql_fetch_array</code>
 * description about aliases.
 *
 * @since PHP 4 >= 4.0.3, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-fetch-assoc.php
 */
function mysql_fetch_assoc($result)
{
}

/**
 * Get column information from a result and return as an object
 *
 * @param resource $result The result <code>resource</code> that
 * is being evaluated. This result comes from a call to
 * <code>mysql_query</code>.
 * @param int|null $field_offset The numerical field offset. If the field offset is not specified, the
 * next field that was not yet retrieved by this function is retrieved.
 * The <code>field_offset</code> starts at <code>0</code>.
 *
 * @return mixed Returns an <code>object</code> containing field information. The properties
 * of the object are:
 * <ul>
 * name - column name
 * table - name of the table the column belongs to, which is the alias name if one is defined
 * max_length - maximum length of the column
 * not_null - 1 if the column cannot be <code>NULL</code>
 * primary_key - 1 if the column is a primary key
 * unique_key - 1 if the column is a unique key
 * multiple_key - 1 if the column is a non-unique key
 * numeric - 1 if the column is numeric
 * blob - 1 if the column is a BLOB
 * type - the type of the column
 * unsigned - 1 if the column is unsigned
 * zerofill - 1 if the column is zero-filled
 * </ul>
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-fetch-field.php
 */
function mysql_fetch_field($result, $field_offset = 0)
{
}

/**
 * Get the length of each output in a result
 *
 * @param resource $result The result <code>resource</code> that
 * is being evaluated. This result comes from a call to
 * <code>mysql_query</code>.
 *
 * @return array An <code>array</code> of lengths on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-fetch-lengths.php
 */
function mysql_fetch_lengths($result)
{
}

/**
 * Fetch a result row as an object
 *
 * @param resource $result The result <code>resource</code> that
 * is being evaluated. This result comes from a call to
 * <code>mysql_query</code>.
 * @param string $class_name The name of the class to instantiate, set the properties of and return.
 * If not specified, a <code>stdClass</code> object is returned.
 * @param array $params An optional <code>array</code> of parameters to pass to the constructor
 * for <code>class_name</code> objects.
 *
 * @return mixed Returns an <code>object</code> with string properties that correspond to the
 * fetched row, or <code>FALSE</code> if there are no more rows.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-fetch-object.php
 */
function mysql_fetch_object($result, $class_name = null, array $params = null)
{
}

/**
 * Get a result row as an enumerated array
 *
 * @param resource $result The result <code>resource</code> that
 * is being evaluated. This result comes from a call to
 * <code>mysql_query</code>.
 *
 * @return array Returns an numerical array of strings that corresponds to the fetched row, or
 * <code>FALSE</code> if there are no more rows.
 * <code>mysql_fetch_row</code> fetches one row of data from
 * the result associated with the specified result identifier. The
 * row is returned as an array. Each result column is stored in an
 * array offset, starting at offset 0.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-fetch-row.php
 */
function mysql_fetch_row($result)
{
}

/**
 * Get the flags associated with the specified field in a result
 *
 * @param resource $result The result <code>resource</code> that
 * is being evaluated. This result comes from a call to
 * <code>mysql_query</code>.
 * @param int $field_offset The numerical field offset. The
 * <code>field_offset</code> starts at <code>0</code>. If
 * <code>field_offset</code> does not exist, an error of level
 * <code>E_WARNING</code> is also issued.
 *
 * @return string Returns a string of flags associated with the result or <code>FALSE</code> on failure.
 * The following flags are reported, if your version of MySQL
 * is current enough to support them: <code>"not_null"</code>,
 * <code>"primary_key"</code>, <code>"unique_key"</code>,
 * <code>"multiple_key"</code>, <code>"blob"</code>,
 * <code>"unsigned"</code>, <code>"zerofill"</code>,
 * <code>"binary"</code>, <code>"enum"</code>,
 * <code>"auto_increment"</code> and <code>"timestamp"</code>.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-field-flags.php
 */
function mysql_field_flags($result, $field_offset)
{
}

/**
 * Returns the length of the specified field
 *
 * @param resource $result The result <code>resource</code> that
 * is being evaluated. This result comes from a call to
 * <code>mysql_query</code>.
 * @param int $field_offset The numerical field offset. The
 * <code>field_offset</code> starts at <code>0</code>. If
 * <code>field_offset</code> does not exist, an error of level
 * <code>E_WARNING</code> is also issued.
 *
 * @return int The length of the specified field index on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-field-len.php
 */
function mysql_field_len($result, $field_offset)
{
}

/**
 * Get the name of the specified field in a result
 *
 * @param resource $result The result <code>resource</code> that
 * is being evaluated. This result comes from a call to
 * <code>mysql_query</code>.
 * @param int $field_offset The numerical field offset. The
 * <code>field_offset</code> starts at <code>0</code>. If
 * <code>field_offset</code> does not exist, an error of level
 * <code>E_WARNING</code> is also issued.
 *
 * @return string The name of the specified field index on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-field-name.php
 */
function mysql_field_name($result, $field_offset)
{
}

/**
 * Set result pointer to a specified field offset
 *
 * @param resource $result The result <code>resource</code> that
 * is being evaluated. This result comes from a call to
 * <code>mysql_query</code>.
 * @param int $field_offset The numerical field offset. The
 * <code>field_offset</code> starts at <code>0</code>. If
 * <code>field_offset</code> does not exist, an error of level
 * <code>E_WARNING</code> is also issued.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-field-seek.php
 */
function mysql_field_seek($result, $field_offset)
{
}

/**
 * Get name of the table the specified field is in
 *
 * @param resource $result The result <code>resource</code> that
 * is being evaluated. This result comes from a call to
 * <code>mysql_query</code>.
 * @param int $field_offset The numerical field offset. The
 * <code>field_offset</code> starts at <code>0</code>. If
 * <code>field_offset</code> does not exist, an error of level
 * <code>E_WARNING</code> is also issued.
 *
 * @return string The name of the table on success.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-field-table.php
 */
function mysql_field_table($result, $field_offset)
{
}

/**
 * Get the type of the specified field in a result
 *
 * @param resource $result The result <code>resource</code> that
 * is being evaluated. This result comes from a call to
 * <code>mysql_query</code>.
 * @param int $field_offset The numerical field offset. The
 * <code>field_offset</code> starts at <code>0</code>. If
 * <code>field_offset</code> does not exist, an error of level
 * <code>E_WARNING</code> is also issued.
 *
 * @return string The returned field type
 * will be one of <code>"int"</code>, <code>"real"</code>,
 * <code>"string"</code>, <code>"blob"</code>, and others as
 * detailed in the MySQL
 * documentation.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-field-type.php
 */
function mysql_field_type($result, $field_offset)
{
}

/**
 * @param mixed $result
 * @param mixed $field_offset
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated
 */
function mysql_fieldflags($result, $field_offset)
{
}

/**
 * @param mixed $result
 * @param mixed $field_offset
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated
 */
function mysql_fieldlen($result, $field_offset)
{
}

/**
 * @param mixed $result
 * @param mixed $field_index
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated
 */
function mysql_fieldname($result, $field_index)
{
}

/**
 * @param mixed $result
 * @param mixed $field_offset
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated
 */
function mysql_fieldtable($result, $field_offset)
{
}

/**
 * @param mixed $result
 * @param mixed $field_offset
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated
 */
function mysql_fieldtype($result, $field_offset)
{
}

/**
 * Free result memory
 *
 * @param resource $result The result <code>resource</code> that
 * is being evaluated. This result comes from a call to
 * <code>mysql_query</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 * If a non-resource is used for the <code>result</code>, an
 * error of level E_WARNING will be emitted. It's worth noting that
 * <code>mysql_query</code> only returns a <code>resource</code>
 * for SELECT, SHOW, EXPLAIN, and DESCRIBE queries.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-free-result.php
 */
function mysql_free_result($result)
{
}

/**
 * @param mixed $result
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated
 */
function mysql_freeresult($result)
{
}

/**
 * Get MySQL client info
 *
 * @return string The MySQL client version.
 *
 * @since PHP 4 >= 4.0.5, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-get-client-info.php
 */
function mysql_get_client_info()
{
}

/**
 * Get MySQL host info
 *
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return string Returns a string describing the type of MySQL connection in use for the
 * connection or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.5, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-get-host-info.php
 */
function mysql_get_host_info($link_identifier = null)
{
}

/**
 * Get MySQL protocol info
 *
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return int Returns the MySQL protocol on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.5, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-get-proto-info.php
 */
function mysql_get_proto_info($link_identifier = null)
{
}

/**
 * Get MySQL server info
 *
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return string Returns the MySQL server version on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.5, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-get-server-info.php
 */
function mysql_get_server_info($link_identifier = null)
{
}

/**
 * Get information about the most recent query
 *
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return string Returns information about the statement on success, or <code>FALSE</code> on
 * failure. See the example below for which statements provide information,
 * and what the returned value may look like. Statements that are not listed
 * will return <code>FALSE</code>.
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-info.php
 */
function mysql_info($link_identifier = null)
{
}

/**
 * Get the ID generated in the last query
 *
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return int The ID generated for an AUTO_INCREMENT column by the previous
 * query on success, <code>0</code> if the previous
 * query does not generate an AUTO_INCREMENT value, or <code>FALSE</code> if
 * no MySQL connection was established.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-insert-id.php
 */
function mysql_insert_id($link_identifier = null)
{
}

/**
 * List databases available on a MySQL server
 *
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return resource Returns a result pointer <code>resource</code> on success, or <code>FALSE</code> on
 * failure. Use the <code>mysql_tablename</code> function to traverse
 * this result pointer, or any function for result tables, such as
 * <code>mysql_fetch_array</code>.
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mysql-list-dbs.php
 */
function mysql_list_dbs($link_identifier = null)
{
}

/**
 * List MySQL table fields
 *
 * @param string $database_name The name of the database that's being queried.
 * @param string $table_name The name of the table that's being queried.
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return resource A result pointer <code>resource</code> on success, or <code>FALSE</code> on
 * failure.
 * The returned result can be used with <code>mysql_field_flags</code>,
 * <code>mysql_field_len</code>,
 * <code>mysql_field_name</code> and
 * <code>mysql_field_type</code>.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-list-fields.php
 */
function mysql_list_fields($database_name, $table_name, $link_identifier = null)
{
}

/**
 * List MySQL processes
 *
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return resource A result pointer <code>resource</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-list-processes.php
 */
function mysql_list_processes($link_identifier = null)
{
}

/**
 * List tables in a MySQL database
 *
 * @param string $database The name of the database
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return resource A result pointer <code>resource</code> on success or <code>FALSE</code> on failure.
 * Use the <code>mysql_tablename</code> function to
 * traverse this result pointer, or any function for result tables,
 * such as <code>mysql_fetch_array</code>.
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mysql-list-tables.php
 */
function mysql_list_tables($database, $link_identifier = null)
{
}

/**
 * @param mixed $link_identifier
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated
 */
function mysql_listdbs($link_identifier = null)
{
}

/**
 * @param mixed $database_name
 * @param mixed $table_name
 * @param mixed $link_identifier
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated
 */
function mysql_listfields($database_name, $table_name, $link_identifier = null)
{
}

/**
 * @param mixed $database_name
 * @param mixed $link_identifier
 *
 * @since PHP 4, PHP 5 < 5.1.7
 *
 * @deprecated
 */
function mysql_listtables($database_name, $link_identifier = null)
{
}

/**
 * Get number of fields in result
 *
 * @param resource $result The result <code>resource</code> that
 * is being evaluated. This result comes from a call to
 * <code>mysql_query</code>.
 *
 * @return int Returns the number of fields in the result set <code>resource</code> on
 * success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-num-fields.php
 */
function mysql_num_fields($result)
{
}

/**
 * Get number of rows in result
 *
 * @param resource $result The result <code>resource</code> that
 * is being evaluated. This result comes from a call to
 * <code>mysql_query</code>.
 *
 * @return int The number of rows in a result set on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-num-rows.php
 */
function mysql_num_rows($result)
{
}

/**
 * @param mixed $result
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated
 */
function mysql_numfields($result)
{
}

/**
 * @param mixed $result
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated
 */
function mysql_numrows($result)
{
}

/**
 * Open a persistent connection to a MySQL server
 *
 * @param string|null $server The MySQL server. It can also include a port number. e.g.
 * "hostname:port" or a path to a local socket e.g. ":/path/to/socket" for
 * the localhost.
 * @param string|null $username The username. Default value is the name of the user that owns the
 * server process.
 * @param string|null $password The password. Default value is an empty password.
 * @param int|null $client_flags The <code>client_flags</code> parameter can be a combination
 * of the following constants:
 * 128 (enable <code>LOAD DATA LOCAL</code> handling),
 * <code>MYSQL_CLIENT_SSL</code>,
 * <code>MYSQL_CLIENT_COMPRESS</code>,
 * <code>MYSQL_CLIENT_IGNORE_SPACE</code> or
 * <code>MYSQL_CLIENT_INTERACTIVE</code>.
 *
 * @return resource Returns a MySQL persistent link identifier on success, or <code>FALSE</code> on
 * failure.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-pconnect.php
 */
function mysql_pconnect($server = /* ini_get("mysql.default_host") */ null, $username = /* ini_get("mysql.default_user") */ null, $password = /* ini_get("mysql.default_password") */ null, $client_flags = 0)
{
}

/**
 * Ping a server connection or reconnect if there is no connection
 *
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return bool Returns <code>TRUE</code> if the connection to the server MySQL server is working,
 * otherwise <code>FALSE</code>.
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-ping.php
 */
function mysql_ping($link_identifier = null)
{
}

/**
 * Send a MySQL query
 *
 * @param string $query An SQL query
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return mixed For SELECT, SHOW, DESCRIBE, EXPLAIN and other statements returning resultset,
 * <code>mysql_query</code>
 * returns a <code>resource</code> on success, or <code>FALSE</code> on
 * error.
 * For other type of SQL statements, INSERT, UPDATE, DELETE, DROP, etc,
 * <code>mysql_query</code> returns <code>TRUE</code> on success
 * or <code>FALSE</code> on error.
 * The returned result resource should be passed to
 * <code>mysql_fetch_array</code>, and other
 * functions for dealing with result tables, to access the returned data.
 * Use <code>mysql_num_rows</code> to find out how many rows
 * were returned for a SELECT statement or
 * <code>mysql_affected_rows</code> to find out how many
 * rows were affected by a DELETE, INSERT, REPLACE, or UPDATE
 * statement.
 * <code>mysql_query</code> will also fail and return <code>FALSE</code>
 * if the user does not have permission to access the table(s) referenced by
 * the query.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-query.php
 */
function mysql_query($query, $link_identifier = null)
{
}

/**
 * Escapes special characters in a string for use in an SQL statement
 *
 * @param string $unescaped_string The string that is to be escaped.
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return string Returns the escaped string, or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-real-escape-string.php
 */
function mysql_real_escape_string($unescaped_string, $link_identifier = null)
{
}

/**
 * Get result data
 *
 * @param resource $result The result <code>resource</code> that
 * is being evaluated. This result comes from a call to
 * <code>mysql_query</code>.
 * @param int $row The row number from the result that's being retrieved. Row numbers
 * start at <code>0</code>.
 * @param mixed|null $field The name or offset of the field being retrieved.
 *
 * @return string The contents of one cell from a MySQL result set on success, or
 * <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-result.php
 */
function mysql_result($result, $row, $field = 0)
{
}

/**
 * Select a MySQL database
 *
 * @param string $database_name The name of the database that is to be selected.
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-select-db.php
 */
function mysql_select_db($database_name, $link_identifier = null)
{
}

/**
 * @param mixed $database_name
 * @param mixed $link_identifier
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated
 */
function mysql_selectdb($database_name, $link_identifier = null)
{
}

/**
 * Sets the client character set
 *
 * @param string $charset A valid character set name.
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.3
 *
 * @link http://www.php.net/manual/en/function.mysql-set-charset.php
 */
function mysql_set_charset($charset, $link_identifier = null)
{
}

/**
 * Get current system status
 *
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return string Returns a string with the status for uptime, threads, queries, open tables,
 * flush tables and queries per second. For a complete list of other status
 * variables, you have to use the <code>SHOW STATUS</code> SQL command.
 * If <code>link_identifier</code> is invalid, <code>NULL</code> is returned.
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-stat.php
 */
function mysql_stat($link_identifier = null)
{
}

/**
 * @param mixed $result
 * @param mixed $row
 * @param mixed $field
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 */
function mysql_table_name($result, $row, $field = null)
{
}

/**
 * Get table name of field
 *
 * @param resource $result A result pointer <code>resource</code> that's returned from
 * <code>mysql_list_tables</code>.
 * @param int $i The integer index (row/table number)
 * @param mixed $field
 *
 * @return string The name of the table on success or <code>FALSE</code> on failure.
 * Use the <code>mysql_tablename</code> function to
 * traverse this result pointer, or any function for result tables,
 * such as <code>mysql_fetch_array</code>.
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-tablename.php
 */
function mysql_tablename($result, $i, $field = null)
{
}

/**
 * Return the current thread ID
 *
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return int The thread ID on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-thread-id.php
 */
function mysql_thread_id($link_identifier = null)
{
}

/**
 * Send an SQL query to MySQL without fetching and buffering the result rows
 *
 * @param string $query The SQL query to execute.
 * @param resource|null $link_identifier The MySQL connection. If the
 * link identifier is not specified, the last link opened by
 * <code>mysql_connect</code> is assumed. If no such link is found, it
 * will try to create one as if <code>mysql_connect</code> had been called
 * with no arguments. If no connection is found or established, an
 * <code>E_WARNING</code> level error is generated.
 *
 * @return resource For SELECT, SHOW, DESCRIBE or EXPLAIN statements,
 * <code>mysql_unbuffered_query</code>
 * returns a <code>resource</code> on success, or <code>FALSE</code> on
 * error.
 * For other type of SQL statements, UPDATE, DELETE, DROP, etc,
 * <code>mysql_unbuffered_query</code> returns <code>TRUE</code> on success
 * or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.0.6, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-unbuffered-query.php
 */
function mysql_unbuffered_query($query, $link_identifier = null)
{
}
