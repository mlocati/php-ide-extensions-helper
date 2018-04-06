<?php
// Start of extension: mssql
// - parsed on POSIX with PHP 5.6.34

/**
 * Return an associative array. Used on 
 *      <code>mssql_fetch_array</code>'s 
 *      <code>result_type</code> parameter.
 *
 * @link http://www.php.net/manual/en/mssql.constants.php#constant.mssql-assoc
 *
 * @var int
 */
const MSSQL_ASSOC = 1;

/**
 * Return an array with both numeric keys and 
 *      keys with their field name. This is the 
 *      default value for  <code>mssql_fetch_array</code>'s 
 *      <code>result_type</code> parameter.
 *
 * @link http://www.php.net/manual/en/mssql.constants.php#constant.mssql-both
 *
 * @var int
 */
const MSSQL_BOTH = 3;

/**
 * Return an array with numeric keys. Used on 
 *      <code>mssql_fetch_array</code>'s 
 *      <code>result_type</code> parameter.
 *
 * @link http://www.php.net/manual/en/mssql.constants.php#constant.mssql-num
 *
 * @var int
 */
const MSSQL_NUM = 2;

/**
 * Indicates the '<code>BIT</code>' type in MSSQL, used by 
 *      <code>mssql_bind</code>'s <code>type</code> 
 *      parameter.
 *
 * @link http://www.php.net/manual/en/mssql.constants.php#constant.sqlbit
 *
 * @var int
 */
const SQLBIT = 50;

/**
 * Indicates the '<code>CHAR</code>' type in MSSQL, used by 
 *      <code>mssql_bind</code>'s <code>type</code> 
 *      parameter.
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
 *      to 32767.
 *
 * @link http://www.php.net/manual/en/mssql.constants.php#constant.sqlint2
 *
 * @var int
 */
const SQLINT2 = 52;

/**
 * Represents four bytes, with a range of -2147483648 
 *      to 2147483647.
 *
 * @link http://www.php.net/manual/en/mssql.constants.php#constant.sqlint4
 *
 * @var int
 */
const SQLINT4 = 56;

/**
 * Indicates the '<code>TEXT</code>' type in MSSQL, used by 
 *      <code>mssql_bind</code>'s <code>type</code> 
 *      parameter.
 *
 * @link http://www.php.net/manual/en/mssql.constants.php#constant.sqltext
 *
 * @var int
 */
const SQLTEXT = 35;

/**
 * Indicates the '<code>VARCHAR</code>' type in MSSQL, used by 
 *      <code>mssql_bind</code>'s <code>type</code> 
 *      parameter.
 *
 * @link http://www.php.net/manual/en/mssql.constants.php#constant.sqlvarchar
 *
 * @var int
 */
const SQLVARCHAR = 39;

/**
 * Adds a parameter to a stored procedure or a remote stored procedure
 *
 * mixed $stmt
 * mixed $param_name
 * mixed $var
 * mixed $type
 * mixed|null $is_output
 * mixed|null $is_null
 * mixed|null $maxlen
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-bind.php
 */
function mssql_bind($stmt, $param_name, &$var, $type, $is_output = null, $is_null = null, $maxlen = null)
{
}

/**
 * Close MS SQL Server connection
 *
 * mixed|null $link_identifier
 *
 * @return bool
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
 * mixed|null $servername
 * mixed|null $username
 * mixed|null $password
 * mixed|null $newlink
 *
 * @return resource
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-connect.php
 */
function mssql_connect($servername = null, $username = null, $password = null, $newlink = null)
{
}

/**
 * Moves internal row pointer
 *
 * mixed $result_identifier
 * mixed $row_number
 *
 * @return bool
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
 * mixed $stmt
 * mixed|null $skip_results
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-execute.php
 */
function mssql_execute($stmt, $skip_results = null)
{
}

/**
 * Fetch a result row as an associative array, a numeric array, or both
 *
 * mixed $result
 * mixed|null $result_type
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-fetch-array.php
 */
function mssql_fetch_array($result, $result_type = null): array
{
}

/**
 * Returns an associative array of the current row in the result
 *
 * mixed $result_id
 *
 * @return array
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-fetch-assoc.php
 */
function mssql_fetch_assoc($result_id): array
{
}

/**
 * Returns the next batch of records
 *
 * mixed $result
 *
 * @return int
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
 * mixed $result
 * mixed|null $field_offset
 *
 * @return object
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-fetch-field.php
 */
function mssql_fetch_field($result, $field_offset = null)
{
}

/**
 * Fetch row as object
 *
 * mixed $result
 *
 * @return object
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
 * Get the length of a field
 *
 * mixed $result
 * mixed|null $offset
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-field-length.php
 */
function mssql_field_length($result, $offset = null)
{
}

/**
 * Get the name of a field
 *
 * mixed $result
 * mixed|null $offset
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-field-name.php
 */
function mssql_field_name($result, $offset = null)
{
}

/**
 * Seeks to the specified field offset
 *
 * mixed $result
 * mixed|null $field_offset
 *
 * @return bool
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
 * mixed $result
 * mixed|null $offset
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-field-type.php
 */
function mssql_field_type($result, $offset = null)
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
 * Free statement memory
 *
 * mixed $stmt
 *
 * @return bool
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
 * @return string
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
 * mixed $binary
 * mixed|null $short_format
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-guid-string.php
 */
function mssql_guid_string($binary, $short_format = null)
{
}

/**
 * Initializes a stored procedure or a remote stored procedure
 *
 * mixed $sp_name
 * mixed|null $link_identifier
 *
 * @return resource
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
 * mixed $severity
 *
 * @return void
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
 * mixed $severity
 *
 * @return void
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
 * mixed $result_id
 *
 * @return bool
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
 * mixed|null $servername
 * mixed|null $username
 * mixed|null $password
 * mixed|null $newlink
 *
 * @return resource
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-pconnect.php
 */
function mssql_pconnect($servername = null, $username = null, $password = null, $newlink = null)
{
}

/**
 * Send MS SQL query
 *
 * mixed $query
 * mixed|null $link_identifier
 * mixed|null $batch_size
 *
 * @return mixed
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-query.php
 */
function mssql_query($query, $link_identifier = null, $batch_size = null)
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
 * Returns the number of records affected by the query
 *
 * mixed $link_identifier
 *
 * @return int
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
 * mixed $database_name
 * mixed|null $link_identifier
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 *
 * @link http://www.php.net/manual/en/function.mssql-select-db.php
 */
function mssql_select_db($database_name, $link_identifier = null)
{
}
