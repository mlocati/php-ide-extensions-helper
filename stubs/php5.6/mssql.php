<?php
// Start of extension: mssql
// - parsed on POSIX with PHP 5.6.34

/**
 * Return an associative array. Used on
 * <code>mssql_fetch_array</code>'s
 * <code>result_type</code> parameter.
 *
 * @link http://www.php.net/manual/en/mssql.constants.php#constant.mssql-assoc
 *
 * @var int
 */
const MSSQL_ASSOC = 1;

/**
 * Return an array with both numeric keys and
 * keys with their field name. This is the
 * default value for <code>mssql_fetch_array</code>'s
 * <code>result_type</code> parameter.
 *
 * @link http://www.php.net/manual/en/mssql.constants.php#constant.mssql-both
 *
 * @var int
 */
const MSSQL_BOTH = 3;

/**
 * Return an array with numeric keys. Used on
 * <code>mssql_fetch_array</code>'s
 * <code>result_type</code> parameter.
 *
 * @link http://www.php.net/manual/en/mssql.constants.php#constant.mssql-num
 *
 * @var int
 */
const MSSQL_NUM = 2;

/**
 * Indicates the '<code>BIT</code>' type in MSSQL, used by
 * <code>mssql_bind</code>'s <code>type</code>
 * parameter.
 *
 * @link http://www.php.net/manual/en/mssql.constants.php#constant.sqlbit
 *
 * @var int
 */
const SQLBIT = 50;

/**
 * Indicates the '<code>CHAR</code>' type in MSSQL, used by
 * <code>mssql_bind</code>'s <code>type</code>
 * parameter.
 *
 * @link http://www.php.net/manual/en/mssql.constants.php#constant.sqlchar
 *
 * @var int
 */
const SQLCHAR = 47;

/**
 * Represents an four byte float.
 *
 * @link http://www.php.net/manual/en/mssql.constants.php#constant.sqlflt4
 *
 * @var int
 */
const SQLFLT4 = 59;

/**
 * Represents an eight byte float.
 *
 * @link http://www.php.net/manual/en/mssql.constants.php#constant.sqlflt8
 *
 * @var int
 */
const SQLFLT8 = 62;

/**
 * @var int
 */
const SQLFLTN = 109;

/**
 * Represents one byte, with a range of -128 to 127.
 *
 * @link http://www.php.net/manual/en/mssql.constants.php#constant.sqlint1
 *
 * @var int
 */
const SQLINT1 = 48;

/**
 * Represents two bytes, with a range of -32768
 * to 32767.
 *
 * @link http://www.php.net/manual/en/mssql.constants.php#constant.sqlint2
 *
 * @var int
 */
const SQLINT2 = 52;

/**
 * Represents four bytes, with a range of -2147483648
 * to 2147483647.
 *
 * @link http://www.php.net/manual/en/mssql.constants.php#constant.sqlint4
 *
 * @var int
 */
const SQLINT4 = 56;

/**
 * Indicates the '<code>TEXT</code>' type in MSSQL, used by
 * <code>mssql_bind</code>'s <code>type</code>
 * parameter.
 *
 * @link http://www.php.net/manual/en/mssql.constants.php#constant.sqltext
 *
 * @var int
 */
const SQLTEXT = 35;

/**
 * Indicates the '<code>VARCHAR</code>' type in MSSQL, used by
 * <code>mssql_bind</code>'s <code>type</code>
 * parameter.
 *
 * @link http://www.php.net/manual/en/mssql.constants.php#constant.sqlvarchar
 *
 * @var int
 */
const SQLVARCHAR = 39;

/**
 * Adds a parameter to a stored procedure or a remote stored procedure
 *
 * @param resource $stmt Statement resource, obtained with <code>mssql_init</code>.
 * @param string $param_name The parameter name, as a string.
 * @param mixed $var The PHP variable you'll bind the MSSQL parameter to. It is passed by
 * reference, to retrieve OUTPUT and RETVAL values after
 * the procedure execution.
 * @param int $type One of: <code>SQLTEXT</code>,
 * <code>SQLVARCHAR</code>, <code>SQLCHAR</code>,
 * <code>SQLINT1</code>, <code>SQLINT2</code>,
 * <code>SQLINT4</code>, <code>SQLBIT</code>,
 * <code>SQLFLT4</code>, <code>SQLFLT8</code>,
 * <code>SQLFLTN</code>.
 * @param bool|null $is_output Whether the value is an OUTPUT parameter or not. If it's an OUTPUT
 * parameter and you don't mention it, it will be treated as a normal
 * input parameter and no error will be thrown.
 * @param bool|null $is_null Whether the parameter is <code>NULL</code> or not. Passing the <code>NULL</code> value as
 * <code>var</code> will not do the job.
 * @param int|null $maxlen Used with char/varchar values. You have to indicate the length of the
 * data so if the parameter is a varchar(50), the type must be
 * <code>SQLVARCHAR</code> and this value <code>50</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-bind.php
 */
function mssql_bind($stmt, $param_name, &$var, $type, $is_output = false, $is_null = false, $maxlen = -1)
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
 *
 * @return resource Returns a MS SQL link identifier on success, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-connect.php
 */
function mssql_connect($servername = null, $username = null, $password = null, $new_link = false)
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
 * Executes a stored procedure on a MS SQL server database
 *
 * @param resource $stmt Statement handle obtained with <code>mssql_init</code>.
 * @param bool|null $skip_results Whenever to skip the results or not.
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-execute.php
 */
function mssql_execute($stmt, $skip_results = false)
{
}

/**
 * Fetch a result row as an associative array, a numeric array, or both
 *
 * @param resource $result The result resource that is being evaluated. This result comes from a
 * call to <code>mssql_query</code>.
 * @param int|null $result_type The type of array that is to be fetched. It's a constant and can take
 * the following values: <code>MSSQL_ASSOC</code>,
 * <code>MSSQL_NUM</code>, and
 * <code>MSSQL_BOTH</code>.
 *
 * @return array Returns an array that corresponds to the fetched row, or <code>FALSE</code> if there
 * are no more rows.
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-fetch-array.php
 */
function mssql_fetch_array($result, $result_type = MSSQL_BOTH)
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
 * Returns the next batch of records
 *
 * @param resource $result The result resource that is being evaluated. This result comes from a
 * call to <code>mssql_query</code>.
 *
 * @return int Returns the number of rows in the returned batch.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-fetch-batch.php
 */
function mssql_fetch_batch($result)
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
 *
 * @return mixed Returns an object with properties that correspond to the fetched row, or
 * <code>FALSE</code> if there are no more rows.
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-fetch-object.php
 */
function mssql_fetch_object($result)
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
 * Get the length of a field
 *
 * @param resource $result The result resource that is being evaluated. This result comes from a
 * call to <code>mssql_query</code>.
 * @param int|null $offset The field offset, starts at 0. If omitted, the current field is used.
 *
 * @return int The length of the specified field index on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-field-length.php
 */
function mssql_field_length($result, $offset = -1)
{
}

/**
 * Get the name of a field
 *
 * @param resource $result The result resource that is being evaluated. This result comes from a
 * call to <code>mssql_query</code>.
 * @param int|null $offset The field offset, starts at 0. If omitted, the current field is used.
 *
 * @return string The name of the specified field index on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-field-name.php
 */
function mssql_field_name($result, $offset = -1)
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
function mssql_field_seek($result, $field_offset = null)
{
}

/**
 * Gets the type of a field
 *
 * @param resource $result The result resource that is being evaluated. This result comes from a
 * call to <code>mssql_query</code>.
 * @param int|null $offset The field offset, starts at 0. If omitted, the current field is used.
 *
 * @return string The type of the specified field index on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-field-type.php
 */
function mssql_field_type($result, $offset = -1)
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
 * Free statement memory
 *
 * @param resource $stmt Statement resource, obtained with <code>mssql_init</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.3.2, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-free-statement.php
 */
function mssql_free_statement($stmt)
{
}

/**
 * Returns the last message from the server
 *
 * @return string Returns last error message from server, or an empty string if
 * no error messages are returned from MSSQL.
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-get-last-message.php
 */
function mssql_get_last_message()
{
}

/**
 * Converts a 16 byte binary GUID to a string
 *
 * @param string $binary A 16 byte binary GUID.
 * @param bool|null $short_format Whenever to use short format.
 *
 * @return string Returns the converted string on success.
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-guid-string.php
 */
function mssql_guid_string($binary, $short_format = false)
{
}

/**
 * Initializes a stored procedure or a remote stored procedure
 *
 * @param string $sp_name Stored procedure name, like <code>ownew.sp_name</code> or
 * <code>otherdb.owner.sp_name</code>.
 * @param resource $link_identifier A MS SQL link identifier, returned by
 * <code>mssql_connect</code>.
 *
 * @return resource Returns a resource identifier "statement", used in subsequent calls to
 * <code>mssql_bind</code> and <code>mssql_execute</code>,
 * or <code>FALSE</code> on errors.
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-init.php
 */
function mssql_init($sp_name, $link_identifier = null)
{
}

/**
 * Sets the minimum error severity
 *
 * @param int $severity The new error severity.
 *
 * @return void No value is returned.
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-min-error-severity.php
 */
function mssql_min_error_severity($severity)
{
}

/**
 * Sets the minimum message severity
 *
 * @param int $severity The new message severity.
 *
 * @return void No value is returned.
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-min-message-severity.php
 */
function mssql_min_message_severity($severity)
{
}

/**
 * Move the internal result pointer to the next result
 *
 * @param resource $result_id The result resource that is being evaluated. This result comes from a
 * call to <code>mssql_query</code>.
 *
 * @return bool Returns <code>TRUE</code> if an additional result set was available or <code>FALSE</code>
 * otherwise.
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-next-result.php
 */
function mssql_next_result($result_id)
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
 *
 * @return resource Returns a positive MS SQL persistent link identifier on success, or
 * <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-pconnect.php
 */
function mssql_pconnect($servername = null, $username = null, $password = null, $new_link = false)
{
}

/**
 * Send MS SQL query
 *
 * @param string $query An SQL query.
 * @param resource $link_identifier A MS SQL link identifier, returned by
 * <code>mssql_connect</code> or
 * <code>mssql_pconnect</code>.
 * @param int|null $batch_size The number of records to batch in the buffer.
 *
 * @return mixed Returns a MS SQL result resource on success, <code>TRUE</code> if no rows were
 * returned, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-query.php
 */
function mssql_query($query, $link_identifier = null, $batch_size = 0)
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
 * Returns the number of records affected by the query
 *
 * @param resource $link_identifier A MS SQL link identifier, returned by
 * <code>mssql_connect</code> or
 * <code>mssql_pconnect</code>.
 *
 * @return int Returns the number of records affected by last operation.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-rows-affected.php
 */
function mssql_rows_affected($link_identifier)
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
