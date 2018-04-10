<?php
// Start of extension: odbc
// - parsed on POSIX with PHP 7.0.29 (extension version 7.0.29)

/**
 * passthru
 *
 * @link http://www.php.net/manual/en/function.odbc-binmode.php
 *
 * @var int
 */
const ODBC_BINMODE_CONVERT = 2;

/**
 * passthru
 *
 * @link http://www.php.net/manual/en/function.odbc-binmode.php
 *
 * @var int
 */
const ODBC_BINMODE_PASSTHRU = 0;

/**
 * passthru
 *
 * @link http://www.php.net/manual/en/function.odbc-binmode.php
 *
 * @var int
 */
const ODBC_BINMODE_RETURN = 1;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.odbc-type
 *
 * @var string
 */
const ODBC_TYPE = '';

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-best-rowid
 *
 * @var int
 */
const SQL_BEST_ROWID = 1;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-bigint
 *
 * @var int
 */
const SQL_BIGINT = -5;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-binary
 *
 * @var int
 */
const SQL_BINARY = -2;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-bit
 *
 * @var int
 */
const SQL_BIT = -7;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-char
 *
 * @var int
 */
const SQL_CHAR = 1;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-concur-lock
 *
 * @var int
 */
const SQL_CONCUR_LOCK = 2;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-concur-read-only
 *
 * @var int
 */
const SQL_CONCUR_READ_ONLY = 1;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-concur-rowver
 *
 * @var int
 */
const SQL_CONCUR_ROWVER = 3;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-concur-values
 *
 * @var int
 */
const SQL_CONCUR_VALUES = 4;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-concurrency
 *
 * @var int
 */
const SQL_CONCURRENCY = 7;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-cur-use-driver
 *
 * @var int
 */
const SQL_CUR_USE_DRIVER = 2;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-cur-use-if-needed
 *
 * @var int
 */
const SQL_CUR_USE_IF_NEEDED = 0;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-cur-use-odbc
 *
 * @var int
 */
const SQL_CUR_USE_ODBC = 1;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-cursor-dynamic
 *
 * @var int
 */
const SQL_CURSOR_DYNAMIC = 2;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-cursor-forward-only
 *
 * @var int
 */
const SQL_CURSOR_FORWARD_ONLY = 0;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-cursor-keyset-driven
 *
 * @var int
 */
const SQL_CURSOR_KEYSET_DRIVEN = 1;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-cursor-static
 *
 * @var int
 */
const SQL_CURSOR_STATIC = 3;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-cursor-type
 *
 * @var int
 */
const SQL_CURSOR_TYPE = 6;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-date
 *
 * @var int
 */
const SQL_DATE = 9;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-decimal
 *
 * @var int
 */
const SQL_DECIMAL = 3;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-double
 *
 * @var int
 */
const SQL_DOUBLE = 8;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-ensure
 *
 * @var int
 */
const SQL_ENSURE = 1;

/**
 * @var int
 */
const SQL_FETCH_FIRST = 2;

/**
 * @var int
 */
const SQL_FETCH_NEXT = 1;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-float
 *
 * @var int
 */
const SQL_FLOAT = 6;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-index-all
 *
 * @var int
 */
const SQL_INDEX_ALL = 1;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-index-unique
 *
 * @var int
 */
const SQL_INDEX_UNIQUE = 0;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-integer
 *
 * @var int
 */
const SQL_INTEGER = 4;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-keyset-size
 *
 * @var int
 */
const SQL_KEYSET_SIZE = 8;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-longvarbinary
 *
 * @var int
 */
const SQL_LONGVARBINARY = -4;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-longvarchar
 *
 * @var int
 */
const SQL_LONGVARCHAR = -1;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-no-nulls
 *
 * @var int
 */
const SQL_NO_NULLS = 0;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-nullable
 *
 * @var int
 */
const SQL_NULLABLE = 1;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-numeric
 *
 * @var int
 */
const SQL_NUMERIC = 2;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-odbc-cursors
 *
 * @var int
 */
const SQL_ODBC_CURSORS = 110;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-quick
 *
 * @var int
 */
const SQL_QUICK = 0;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-real
 *
 * @var int
 */
const SQL_REAL = 7;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-rowver
 *
 * @var int
 */
const SQL_ROWVER = 2;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-scope-currow
 *
 * @var int
 */
const SQL_SCOPE_CURROW = 0;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-scope-session
 *
 * @var int
 */
const SQL_SCOPE_SESSION = 2;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-scope-transaction
 *
 * @var int
 */
const SQL_SCOPE_TRANSACTION = 1;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-smallint
 *
 * @var int
 */
const SQL_SMALLINT = 5;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-time
 *
 * @var int
 */
const SQL_TIME = 10;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-timestamp
 *
 * @var int
 */
const SQL_TIMESTAMP = 11;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-tinyint
 *
 * @var int
 */
const SQL_TINYINT = -6;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-type-date
 *
 * @var int
 */
const SQL_TYPE_DATE = 91;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-type-time
 *
 * @var int
 */
const SQL_TYPE_TIME = 92;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-type-timestamp
 *
 * @var int
 */
const SQL_TYPE_TIMESTAMP = 93;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-varbinary
 *
 * @var int
 */
const SQL_VARBINARY = -3;

/**
 * @link http://www.php.net/manual/en/uodbc.constants.php#constant.sql-varchar
 *
 * @var int
 */
const SQL_VARCHAR = 12;

/**
 * @var int
 */
const SQL_WCHAR = -8;

/**
 * @var int
 */
const SQL_WLONGVARCHAR = -10;

/**
 * @var int
 */
const SQL_WVARCHAR = -9;

/**
 * Toggle autocommit behaviour
 *
 * @param resource $connection_id The ODBC connection identifier,
 * see <code>odbc_connect</code> for details.
 * @param bool|null $OnOff If <code>OnOff</code> is <code>TRUE</code>, auto-commit is enabled, if
 * it is <code>FALSE</code> auto-commit is disabled.
 *
 * @return mixed Without the <code>OnOff</code> parameter, this function returns
 * auto-commit status for <code>connection_id</code>. Non-zero is
 * returned if auto-commit is on, 0 if it is off, or <code>FALSE</code> if an error
 * occurs.
 * If <code>OnOff</code> is set, this function returns <code>TRUE</code> on
 * success and <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-autocommit.php
 */
function odbc_autocommit($connection_id, bool $OnOff = false)
{
}

/**
 * Handling of binary column data
 *
 * @param resource $result_id The result identifier.
 * @param int $mode Possible values for <code>mode</code> are:
 * <ul>
 * <code>ODBC_BINMODE_PASSTHRU</code>: Passthru BINARY data
 * <code>ODBC_BINMODE_RETURN</code>: Return as is
 * <code>ODBC_BINMODE_CONVERT</code>: Convert to char and return
 * </ul>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-binmode.php
 */
function odbc_binmode($result_id, int $mode): bool
{
}

/**
 * Close an ODBC connection
 *
 * @param resource $connection_id The ODBC connection identifier,
 * see <code>odbc_connect</code> for details.
 *
 * @return void No value is returned.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-close.php
 */
function odbc_close($connection_id)
{
}

/**
 * Close all ODBC connections
 *
 * @return void No value is returned.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-close-all.php
 */
function odbc_close_all()
{
}

/**
 * Lists columns and associated privileges for the given table
 *
 * @param resource $connection_id The ODBC connection identifier,
 * see <code>odbc_connect</code> for details.
 * @param string $qualifier The qualifier.
 * @param string $owner The owner.
 * @param string $table_name The table name.
 * @param string $column_name The <code>column_name</code> argument accepts search
 * patterns ('%' to match zero or more characters and '_' to match a
 * single character).
 *
 * @return resource Returns an ODBC result identifier or <code>FALSE</code> on failure.
 * This result identifier can be used to fetch a list of columns and
 * associated privileges.
 * The result set has the following columns:
 * <ul>
 * TABLE_QUALIFIER
 * TABLE_OWNER
 * TABLE_NAME
 * GRANTOR
 * GRANTEE
 * PRIVILEGE
 * IS_GRANTABLE
 * </ul>
 * The result set is ordered by TABLE_QUALIFIER, TABLE_OWNER and
 * TABLE_NAME.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-columnprivileges.php
 */
function odbc_columnprivileges($connection_id, string $qualifier, string $owner, string $table_name, string $column_name)
{
}

/**
 * Lists the column names in specified tables
 *
 * @param resource $connection_id The ODBC connection identifier,
 * see <code>odbc_connect</code> for details.
 * @param string $qualifier The qualifier.
 * @param string $schema The owner.
 * @param string $table_name The table name.
 * @param string $column_name The column name.
 *
 * @return resource Returns an ODBC result identifier or <code>FALSE</code> on failure.
 * The result set has the following columns:
 * <ul>
 * TABLE_QUALIFIER
 * TABLE_SCHEM
 * TABLE_NAME
 * COLUMN_NAME
 * DATA_TYPE
 * TYPE_NAME
 * PRECISION
 * LENGTH
 * SCALE
 * RADIX
 * NULLABLE
 * REMARKS
 * </ul>
 * The result set is ordered by TABLE_QUALIFIER, TABLE_SCHEM and
 * TABLE_NAME.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-columns.php
 */
function odbc_columns($connection_id, string $qualifier = null, string $schema = null, string $table_name = null, string $column_name = null)
{
}

/**
 * Commit an ODBC transaction
 *
 * @param resource $connection_id The ODBC connection identifier,
 * see <code>odbc_connect</code> for details.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-commit.php
 */
function odbc_commit($connection_id): bool
{
}

/**
 * Connect to a datasource
 *
 * @param string $dsn The database source name for the connection. Alternatively, a
 * DSN-less connection string can be used.
 * @param string $user The username.
 * @param string $password The password.
 * @param int $cursor_type This sets the type of cursor to be used
 * for this connection. This parameter is not normally needed, but
 * can be useful for working around problems with some ODBC drivers.
 *
 * @return resource Returns an ODBC connection or (<code>FALSE</code>) on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-connect.php
 */
function odbc_connect(string $dsn, string $user, string $password, int $cursor_type = null)
{
}

/**
 * Get cursorname
 *
 * @param resource $result_id The result identifier.
 *
 * @return string Returns the cursor name, as a string.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-cursor.php
 */
function odbc_cursor($result_id): string
{
}

/**
 * Returns information about a current connection
 *
 * @param resource $connection_id The ODBC connection identifier,
 * see <code>odbc_connect</code> for details.
 * @param int $fetch_type The <code>fetch_type</code> can be one of two constant types:
 * <code>SQL_FETCH_FIRST</code>, <code>SQL_FETCH_NEXT</code>.
 * Use <code>SQL_FETCH_FIRST</code> the first time this function is
 * called, thereafter use the <code>SQL_FETCH_NEXT</code>.
 *
 * @return array Returns <code>FALSE</code> on error, and an array upon success.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-data-source.php
 */
function odbc_data_source($connection_id, int $fetch_type): array
{
}

/**
 * Alias of <code>odbc_exec</code>
 *
 * @param mixed $connection_id
 * @param mixed $query
 * @param mixed $flags
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-do.php
 */
function odbc_do($connection_id, $query, $flags = null)
{
}

/**
 * Get the last error code
 *
 * @param resource $connection_id The ODBC connection identifier,
 * see <code>odbc_connect</code> for details.
 *
 * @return string If <code>connection_id</code> is specified, the last state
 * of that connection is returned, else the last state of any connection
 * is returned.
 * This function returns meaningful value only if last odbc query failed
 * (i.e. <code>odbc_exec</code> returned <code>FALSE</code>).
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-error.php
 */
function odbc_error($connection_id = null): string
{
}

/**
 * Get the last error message
 *
 * @param resource $connection_id The ODBC connection identifier,
 * see <code>odbc_connect</code> for details.
 *
 * @return string If <code>connection_id</code> is specified, the last state
 * of that connection is returned, else the last state of any connection
 * is returned.
 * This function returns meaningful value only if last odbc query failed
 * (i.e. <code>odbc_exec</code> returned <code>FALSE</code>).
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-errormsg.php
 */
function odbc_errormsg($connection_id = null): string
{
}

/**
 * Prepare and execute an SQL statement
 *
 * @param resource $connection_id The ODBC connection identifier,
 * see <code>odbc_connect</code> for details.
 * @param string $query_string The SQL statement.
 * @param int $flags This parameter is currently not used.
 *
 * @return resource Returns an ODBC result identifier if the SQL command was executed
 * successfully, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-exec.php
 */
function odbc_exec($connection_id, string $query_string, int $flags = null)
{
}

/**
 * Execute a prepared statement
 *
 * @param resource $result_id The result id <code>resource</code>, from <code>odbc_prepare</code>.
 * @param array $parameters_array Parameters in <code>parameter_array</code> will be
 * substituted for placeholders in the prepared statement in order.
 * Elements of this array will be converted to strings by calling this
 * function.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-execute.php
 */
function odbc_execute($result_id, array $parameters_array = null): bool
{
}

/**
 * Fetch a result row as an associative array
 *
 * @param resource $result The result resource from <code>odbc_exec</code>.
 * @param int $rownumber Optionally choose which row number to retrieve.
 *
 * @return array Returns an array that corresponds to the fetched row, or <code>FALSE</code> if there
 * are no more rows.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-fetch-array.php
 */
function odbc_fetch_array($result, int $rownumber = null): array
{
}

/**
 * Fetch one result row into array
 *
 * @param resource $result_id The result <code>resource</code>.
 * @param array $result_array The result <code>array</code>
 * that can be of any type since it will be converted to type
 * array. The array will contain the column values starting at array
 * index 0.
 * @param int $rownumber The row number.
 *
 * @return int Returns the number of columns in the result;
 * <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-fetch-into.php
 */
function odbc_fetch_into($result_id, array &$result_array, int $rownumber = null): int
{
}

/**
 * Fetch a result row as an object
 *
 * @param resource $result The result resource from <code>odbc_exec</code>.
 * @param int $rownumber Optionally choose which row number to retrieve.
 *
 * @return mixed Returns an object that corresponds to the fetched row, or <code>FALSE</code> if there
 * are no more rows.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-fetch-object.php
 */
function odbc_fetch_object($result, int $rownumber = null)
{
}

/**
 * Fetch a row
 *
 * @param resource $result_id The result identifier.
 * @param int|null $row_number If <code>row_number</code> is not specified,
 * <code>odbc_fetch_row</code> will try to fetch the next row in
 * the result set. Calls to <code>odbc_fetch_row</code> with and
 * without <code>row_number</code> can be mixed.
 *
 * @return bool Returns <code>TRUE</code> if there was a row, <code>FALSE</code> otherwise.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-fetch-row.php
 */
function odbc_fetch_row($result_id, int $row_number = 1): bool
{
}

/**
 * Get the length (precision) of a field
 *
 * @param resource $result_id The result identifier.
 * @param int $field_number The field number. Field numbering starts at 1.
 *
 * @return int Returns the field length, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-field-len.php
 */
function odbc_field_len($result_id, int $field_number): int
{
}

/**
 * Get the columnname
 *
 * @param resource $result_id The result identifier.
 * @param int $field_number The field number. Field numbering starts at 1.
 *
 * @return string Returns the field name as a string, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-field-name.php
 */
function odbc_field_name($result_id, int $field_number): string
{
}

/**
 * Return column number
 *
 * @param resource $result_id The result identifier.
 * @param string $field_name The field name.
 *
 * @return int Returns the field number as a integer, or <code>FALSE</code> on error.
 * Field numbering starts at 1.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-field-num.php
 */
function odbc_field_num($result_id, string $field_name): int
{
}

/**
 * Alias of <code>odbc_field_len</code>
 *
 * @param mixed $result_id
 * @param mixed $field_number
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-field-precision.php
 */
function odbc_field_precision($result_id, $field_number)
{
}

/**
 * Get the scale of a field
 *
 * @param resource $result_id The result identifier.
 * @param int $field_number The field number. Field numbering starts at 1.
 *
 * @return int Returns the field scale as a integer, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-field-scale.php
 */
function odbc_field_scale($result_id, int $field_number): int
{
}

/**
 * Datatype of a field
 *
 * @param resource $result_id The result identifier.
 * @param int $field_number The field number. Field numbering starts at 1.
 *
 * @return string Returns the field type as a string, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-field-type.php
 */
function odbc_field_type($result_id, int $field_number): string
{
}

/**
 * Retrieves a list of foreign keys
 *
 * @param resource $connection_id The ODBC connection identifier,
 * see <code>odbc_connect</code> for details.
 * @param string $pk_qualifier The primary key qualifier.
 * @param string $pk_owner The primary key owner.
 * @param string $pk_table The primary key table.
 * @param string $fk_qualifier The foreign key qualifier.
 * @param string $fk_owner The foreign key owner.
 * @param string $fk_table The foreign key table.
 *
 * @return resource Returns an ODBC result identifier or <code>FALSE</code> on failure.
 * The result set has the following columns:
 * <ul>
 * PKTABLE_QUALIFIER
 * PKTABLE_OWNER
 * PKTABLE_NAME
 * PKCOLUMN_NAME
 * FKTABLE_QUALIFIER
 * FKTABLE_OWNER
 * FKTABLE_NAME
 * FKCOLUMN_NAME
 * KEY_SEQ
 * UPDATE_RULE
 * DELETE_RULE
 * FK_NAME
 * PK_NAME
 * </ul>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-foreignkeys.php
 */
function odbc_foreignkeys($connection_id, string $pk_qualifier, string $pk_owner, string $pk_table, string $fk_qualifier, string $fk_owner, string $fk_table)
{
}

/**
 * Free resources associated with a result
 *
 * @param resource $result_id The result identifier.
 *
 * @return bool Always returns <code>TRUE</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-free-result.php
 */
function odbc_free_result($result_id): bool
{
}

/**
 * Retrieves information about data types supported by the data source
 *
 * @param resource $connection_id The ODBC connection identifier,
 * see <code>odbc_connect</code> for details.
 * @param int $data_type The data type, which can be used to restrict the information to a
 * single data type.
 *
 * @return resource Returns an ODBC result identifier or
 * <code>FALSE</code> on failure.
 * The result set has the following columns:
 * <ul>
 * TYPE_NAME
 * DATA_TYPE
 * PRECISION
 * LITERAL_PREFIX
 * LITERAL_SUFFIX
 * CREATE_PARAMS
 * NULLABLE
 * CASE_SENSITIVE
 * SEARCHABLE
 * UNSIGNED_ATTRIBUTE
 * MONEY
 * AUTO_INCREMENT
 * LOCAL_TYPE_NAME
 * MINIMUM_SCALE
 * MAXIMUM_SCALE
 * </ul>
 * The result set is ordered by DATA_TYPE and TYPE_NAME.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-gettypeinfo.php
 */
function odbc_gettypeinfo($connection_id, int $data_type = null)
{
}

/**
 * Handling of LONG columns
 *
 * @param resource $result_id The result identifier.
 * @param int $length The number of bytes returned to PHP is controlled by the parameter
 * length. If it is set to 0, Long column data is passed through to the
 * client.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-longreadlen.php
 */
function odbc_longreadlen($result_id, int $length): bool
{
}

/**
 * Checks if multiple results are available
 *
 * @param resource $result_id The result identifier.
 *
 * @return bool Returns <code>TRUE</code> if there are more result sets, <code>FALSE</code> otherwise.
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-next-result.php
 */
function odbc_next_result($result_id): bool
{
}

/**
 * Number of columns in a result
 *
 * @param resource $result_id The result identifier returned by <code>odbc_exec</code>.
 *
 * @return int Returns the number of fields, or -1 on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-num-fields.php
 */
function odbc_num_fields($result_id): int
{
}

/**
 * Number of rows in a result
 *
 * @param resource $result_id The result identifier returned by <code>odbc_exec</code>.
 *
 * @return int Returns the number of rows in an ODBC result.
 * This function will return -1 on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-num-rows.php
 */
function odbc_num_rows($result_id): int
{
}

/**
 * Open a persistent database connection
 *
 * @param string $dsn
 * @param string $user
 * @param string $password
 * @param int $cursor_type
 *
 * @return resource Returns an ODBC connection id or 0 (<code>FALSE</code>) on
 * error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-pconnect.php
 */
function odbc_pconnect(string $dsn, string $user, string $password, int $cursor_type = null)
{
}

/**
 * Prepares a statement for execution
 *
 * @param resource $connection_id The ODBC connection identifier,
 * see <code>odbc_connect</code> for details.
 * @param string $query_string The query string statement being prepared.
 *
 * @return resource Returns an ODBC result identifier if the SQL command was prepared
 * successfully. Returns <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-prepare.php
 */
function odbc_prepare($connection_id, string $query_string)
{
}

/**
 * Gets the primary keys for a table
 *
 * @param resource $connection_id The ODBC connection identifier,
 * see <code>odbc_connect</code> for details.
 * @param string $qualifier
 * @param string $owner
 * @param string $table
 *
 * @return resource Returns an ODBC result identifier or <code>FALSE</code> on failure.
 * The result set has the following columns:
 * <ul>
 * TABLE_QUALIFIER
 * TABLE_OWNER
 * TABLE_NAME
 * COLUMN_NAME
 * KEY_SEQ
 * PK_NAME
 * </ul>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-primarykeys.php
 */
function odbc_primarykeys($connection_id, string $qualifier, string $owner, string $table)
{
}

/**
 * Retrieve information about parameters to procedures
 *
 * @param resource $connection_id The ODBC connection identifier,
 * see <code>odbc_connect</code> for details.
 * @param mixed $qualifier
 * @param mixed $owner
 * @param mixed $proc
 * @param mixed $column
 *
 * @return resource Returns the list of input and output parameters, as well as the
 * columns that make up the result set for the specified procedures.
 * Returns an ODBC result identifier or <code>FALSE</code> on failure.
 * The result set has the following columns:
 * <ul>
 * PROCEDURE_QUALIFIER
 * PROCEDURE_OWNER
 * PROCEDURE_NAME
 * COLUMN_NAME
 * COLUMN_TYPE
 * DATA_TYPE
 * TYPE_NAME
 * PRECISION
 * LENGTH
 * SCALE
 * RADIX
 * NULLABLE
 * REMARKS
 * </ul>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-procedurecolumns.php
 */
function odbc_procedurecolumns($connection_id, $qualifier = null, $owner = null, $proc = null, $column = null)
{
}

/**
 * Get the list of procedures stored in a specific data source
 *
 * @param resource $connection_id The ODBC connection identifier,
 * see <code>odbc_connect</code> for details.
 * @param mixed $qualifier
 * @param mixed $owner
 * @param mixed $name
 *
 * @return resource Returns an ODBC
 * result identifier containing the information or <code>FALSE</code> on failure.
 * The result set has the following columns:
 * <ul>
 * PROCEDURE_QUALIFIER
 * PROCEDURE_OWNER
 * PROCEDURE_NAME
 * NUM_INPUT_PARAMS
 * NUM_OUTPUT_PARAMS
 * NUM_RESULT_SETS
 * REMARKS
 * PROCEDURE_TYPE
 * </ul>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-procedures.php
 */
function odbc_procedures($connection_id, $qualifier = null, $owner = null, $name = null)
{
}

/**
 * Get result data
 *
 * @param resource $result_id The ODBC <code>resource</code>.
 * @param mixed $field The field name being retrieved. It can either be an integer containing
 * the column number of the field you want; or it can be a string
 * containing the name of the field.
 *
 * @return mixed Returns the string contents of the field, <code>FALSE</code> on error, <code>NULL</code> for
 * NULL data, or <code>TRUE</code> for binary data.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-result.php
 */
function odbc_result($result_id, $field)
{
}

/**
 * Print result as HTML table
 *
 * @param resource $result_id The result identifier.
 * @param string $format Additional overall table formatting.
 *
 * @return int Returns the number of rows in the result or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-result-all.php
 */
function odbc_result_all($result_id, string $format = null): int
{
}

/**
 * Rollback a transaction
 *
 * @param resource $connection_id The ODBC connection identifier,
 * see <code>odbc_connect</code> for details.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-rollback.php
 */
function odbc_rollback($connection_id): bool
{
}

/**
 * Adjust ODBC settings
 *
 * @param resource $id Is a connection id or result id on which to change the settings.
 * For SQLSetConnectOption(), this is a connection id.
 * For SQLSetStmtOption(), this is a result id.
 * @param int $function Is the ODBC function to use. The value should be
 * 1 for SQLSetConnectOption() and
 * 2 for SQLSetStmtOption().
 * @param int $option The option to set.
 * @param int $param The value for the given <code>option</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-setoption.php
 */
function odbc_setoption($id, int $function, int $option, int $param): bool
{
}

/**
 * Retrieves special columns
 *
 * @param resource $connection_id The ODBC connection identifier,
 * see <code>odbc_connect</code> for details.
 * @param int $type
 * @param string $qualifier The qualifier.
 * @param string $table The table.
 * @param int $scope The scope, which orders the result set.
 * @param int $nullable The nullable option.
 * @param mixed $nullable
 *
 * @return resource Returns an ODBC result identifier or <code>FALSE</code> on
 * failure.
 * The result set has the following columns:
 * <ul>
 * SCOPE
 * COLUMN_NAME
 * DATA_TYPE
 * TYPE_NAME
 * PRECISION
 * LENGTH
 * SCALE
 * PSEUDO_COLUMN
 * </ul>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-specialcolumns.php
 */
function odbc_specialcolumns($connection_id, int $type, string $qualifier, string $table, int $scope, int $nullable, $nullable)
{
}

/**
 * Retrieve statistics about a table
 *
 * @param resource $connection_id The ODBC connection identifier,
 * see <code>odbc_connect</code> for details.
 * @param string $qualifier The qualifier.
 * @param string $owner The owner.
 * @param string $table_name The table name.
 * @param int $unique The unique attribute.
 * @param int $accuracy The accuracy.
 *
 * @return resource Returns an ODBC result identifier or <code>FALSE</code> on failure.
 * The result set has the following columns:
 * <ul>
 * TABLE_QUALIFIER
 * TABLE_OWNER
 * TABLE_NAME
 * NON_UNIQUE
 * INDEX_QUALIFIER
 * INDEX_NAME
 * TYPE
 * SEQ_IN_INDEX
 * COLUMN_NAME
 * COLLATION
 * CARDINALITY
 * PAGES
 * FILTER_CONDITION
 * </ul>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-statistics.php
 */
function odbc_statistics($connection_id, string $qualifier, string $owner, string $table_name, int $unique, int $accuracy)
{
}

/**
 * Lists tables and the privileges associated with each table
 *
 * @param resource $connection_id The ODBC connection identifier,
 * see <code>odbc_connect</code> for details.
 * @param string $qualifier The qualifier.
 * @param string $owner The owner. Accepts the following search patterns:
 * ('%' to match zero or more characters and '_' to match a single character)
 * @param string $name The name. Accepts the following search patterns:
 * ('%' to match zero or more characters and '_' to match a single character)
 *
 * @return resource An ODBC result identifier or <code>FALSE</code> on failure.
 * The result set has the following columns:
 * <ul>
 * TABLE_QUALIFIER
 * TABLE_OWNER
 * TABLE_NAME
 * GRANTOR
 * GRANTEE
 * PRIVILEGE
 * IS_GRANTABLE
 * </ul>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-tableprivileges.php
 */
function odbc_tableprivileges($connection_id, string $qualifier, string $owner, string $name)
{
}

/**
 * Get the list of table names stored in a specific data source
 *
 * @param resource $connection_id The ODBC connection identifier,
 * see <code>odbc_connect</code> for details.
 * @param string $qualifier The qualifier.
 * @param string $owner The owner. Accepts search patterns ('%' to match zero or more
 * characters and '_' to match a single character).
 * @param string $name The name. Accepts search patterns ('%' to match zero or more
 * characters and '_' to match a single character).
 * @param string $types If <code>table_type</code> is not an empty string, it
 * must contain a list of comma-separated values for the types of
 * interest; each value may be enclosed in single quotes (') or
 * unquoted. For example, "'TABLE','VIEW'" or "TABLE, VIEW". If the
 * data source does not support a specified table type,
 * <code>odbc_tables</code> does not return any results for
 * that type.
 *
 * @return resource Returns an ODBC result identifier containing the information
 * or <code>FALSE</code> on failure.
 * The result set has the following columns:
 * <ul>
 * TABLE_QUALIFIER
 * TABLE_OWNER
 * TABLE_NAME
 * TABLE_TYPE
 * REMARKS
 * </ul>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.odbc-tables.php
 */
function odbc_tables($connection_id, string $qualifier = null, string $owner = null, string $name = null, string $types = null)
{
}
