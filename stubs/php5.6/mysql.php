<?php
// Start of extension: mysql
// - parsed on POSIX with PHP 5.6.34 (extension version 1.0)
// - parsed on Windows with PHP 5.6.34 (extension version 1.0)

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
 * @param mixed|null $link_identifier
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
 * @param mixed|null $link_identifier
 *
 * @return int
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
 * @param mixed|null $link_identifier
 *
 * @return string
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
 * @param mixed|null $link_identifier
 *
 * @return bool
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
 * @param mixed|null $hostname
 * @param mixed|null $username
 * @param mixed|null $password
 * @param mixed|null $new
 * @param mixed|null $flags
 *
 * @return resource
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-connect.php
 */
function mysql_connect($hostname = null, $username = null, $password = null, $new = null, $flags = null)
{
}

/**
 * Move internal result pointer
 *
 * @param mixed $result
 * @param mixed $row_number
 *
 * @return bool
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
 * @param mixed $result
 * @param mixed $row
 * @param mixed|null $field
 *
 * @return string
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
 * @param mixed $database_name
 * @param mixed $query
 * @param mixed|null $link_identifier
 *
 * @return resource
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mysql-db-query.php
 */
function mysql_db_query($database_name, $query, $link_identifier = null)
{
}

/**
 * @param mixed $result
 * @param mixed $row
 * @param mixed|null $field
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
 * @param mixed|null $link_identifier
 *
 * @return int
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
 * @param mixed|null $link_identifier
 *
 * @return string
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
 * @param mixed $string
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.3, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-escape-string.php
 */
function mysql_escape_string($string)
{
}

/**
 * Fetch a result row as an associative array, a numeric array, or both
 *
 * @param mixed $result
 * @param mixed|null $result_type
 *
 * @return array
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-fetch-array.php
 */
function mysql_fetch_array($result, $result_type = null)
{
}

/**
 * Fetch a result row as an associative array
 *
 * @param mixed $result
 *
 * @return array
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
 * @param mixed $result
 * @param mixed|null $field_offset
 *
 * @return mixed
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-fetch-field.php
 */
function mysql_fetch_field($result, $field_offset = null)
{
}

/**
 * Get the length of each output in a result
 *
 * @param mixed $result
 *
 * @return array
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
 * @param mixed $result
 * @param mixed|null $class_name
 * @param mixed|null $ctor_params
 *
 * @return mixed
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-fetch-object.php
 */
function mysql_fetch_object($result, $class_name = null, $ctor_params = null)
{
}

/**
 * Get a result row as an enumerated array
 *
 * @param mixed $result
 *
 * @return array
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
 * @param mixed $result
 * @param mixed $field_offset
 *
 * @return string
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
 * @param mixed $result
 * @param mixed $field_offset
 *
 * @return int
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
 * @param mixed $result
 * @param mixed $field_index
 *
 * @return string
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-field-name.php
 */
function mysql_field_name($result, $field_index)
{
}

/**
 * Set result pointer to a specified field offset
 *
 * @param mixed $result
 * @param mixed $field_offset
 *
 * @return bool
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
 * @param mixed $result
 * @param mixed $field_offset
 *
 * @return string
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
 * @param mixed $result
 * @param mixed $field_offset
 *
 * @return string
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
 * @param mixed $result
 *
 * @return bool
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
 * @return string
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
 * @param mixed|null $link_identifier
 *
 * @return string
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
 * @param mixed|null $link_identifier
 *
 * @return int
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
 * @param mixed|null $link_identifier
 *
 * @return string
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
 * @param mixed|null $link_identifier
 *
 * @return string
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
 * @param mixed|null $link_identifier
 *
 * @return int
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
 * @param mixed|null $link_identifier
 *
 * @return resource
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
 * @param mixed $database_name
 * @param mixed $table_name
 * @param mixed|null $link_identifier
 *
 * @return resource
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
 * @param mixed|null $link_identifier
 *
 * @return resource
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
 * @param mixed $database_name
 * @param mixed|null $link_identifier
 *
 * @return resource
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mysql-list-tables.php
 */
function mysql_list_tables($database_name, $link_identifier = null)
{
}

/**
 * @param mixed|null $link_identifier
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
 * @param mixed|null $link_identifier
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
 * @param mixed|null $link_identifier
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
 * @param mixed $result
 *
 * @return int
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
 * @param mixed $result
 *
 * @return int
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
 * @param mixed|null $hostname
 * @param mixed|null $username
 * @param mixed|null $password
 * @param mixed|null $flags
 *
 * @return resource
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-pconnect.php
 */
function mysql_pconnect($hostname = null, $username = null, $password = null, $flags = null)
{
}

/**
 * Ping a server connection or reconnect if there is no connection
 *
 * @param mixed|null $link_identifier
 *
 * @return bool
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
 * @param mixed $query
 * @param mixed|null $link_identifier
 *
 * @return mixed
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
 * @param mixed $string
 * @param mixed|null $link_identifier
 *
 * @return string
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-real-escape-string.php
 */
function mysql_real_escape_string($string, $link_identifier = null)
{
}

/**
 * Get result data
 *
 * @param mixed $result
 * @param mixed $row
 * @param mixed|null $field
 *
 * @return string
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-result.php
 */
function mysql_result($result, $row, $field = null)
{
}

/**
 * Select a MySQL database
 *
 * @param mixed $database_name
 * @param mixed|null $link_identifier
 *
 * @return bool
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
 * @param mixed|null $link_identifier
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
 * @param mixed $charset_name
 * @param mixed|null $link_identifier
 *
 * @return bool
 *
 * @since PHP 5 >= 5.2.3
 *
 * @link http://www.php.net/manual/en/function.mysql-set-charset.php
 */
function mysql_set_charset($charset_name, $link_identifier = null)
{
}

/**
 * Get current system status
 *
 * @param mixed|null $link_identifier
 *
 * @return string
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
 * @param mixed|null $field
 *
 * @since PHP 4 >= 4.3.0, PHP 5
 */
function mysql_table_name($result, $row, $field = null)
{
}

/**
 * Get table name of field
 *
 * @param mixed $result
 * @param mixed $row
 * @param mixed|null $field
 *
 * @return string
 *
 * @since PHP 4, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-tablename.php
 */
function mysql_tablename($result, $row, $field = null)
{
}

/**
 * Return the current thread ID
 *
 * @param mixed|null $link_identifier
 *
 * @return int
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
 * @param mixed $query
 * @param mixed|null $link_identifier
 *
 * @return resource
 *
 * @since PHP 4 >= 4.0.6, PHP 5
 *
 * @link http://www.php.net/manual/en/function.mysql-unbuffered-query.php
 */
function mysql_unbuffered_query($query, $link_identifier = null)
{
}
