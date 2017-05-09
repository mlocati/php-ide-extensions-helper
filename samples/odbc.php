<?php
// Documentation generated automatically for extension odbc v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
/*
 * INI entries:
 * odbc.allow_persistent = '1'
 * odbc.max_persistent = '-1'
 * odbc.max_links = '-1'
 * odbc.default_db = null
 * odbc.default_user = null
 * odbc.default_pw = null
 * odbc.defaultlrl = '4096'
 * odbc.defaultbinmode = '1'
 * odbc.check_persistent = '1'
 * odbc.default_cursortype = '3'
 */
const ODBC_BINMODE_CONVERT = 2;
const ODBC_BINMODE_PASSTHRU = 0;
const ODBC_BINMODE_RETURN = 1;
const ODBC_TYPE = 'Win32';
const SQL_BEST_ROWID = 1;
const SQL_BIGINT = -5;
const SQL_BINARY = -2;
const SQL_BIT = -7;
const SQL_CHAR = 1;
const SQL_CONCURRENCY = 7;
const SQL_CONCUR_LOCK = 2;
const SQL_CONCUR_READ_ONLY = 1;
const SQL_CONCUR_ROWVER = 3;
const SQL_CONCUR_VALUES = 4;
const SQL_CURSOR_DYNAMIC = 2;
const SQL_CURSOR_FORWARD_ONLY = 0;
const SQL_CURSOR_KEYSET_DRIVEN = 1;
const SQL_CURSOR_STATIC = 3;
const SQL_CURSOR_TYPE = 6;
const SQL_CUR_USE_DRIVER = 2;
const SQL_CUR_USE_IF_NEEDED = 0;
const SQL_CUR_USE_ODBC = 1;
const SQL_DATE = 9;
const SQL_DECIMAL = 3;
const SQL_DOUBLE = 8;
const SQL_ENSURE = 1;
const SQL_FETCH_FIRST = 2;
const SQL_FETCH_NEXT = 1;
const SQL_FLOAT = 6;
const SQL_INDEX_ALL = 1;
const SQL_INDEX_UNIQUE = 0;
const SQL_INTEGER = 4;
const SQL_KEYSET_SIZE = 8;
const SQL_LONGVARBINARY = -4;
const SQL_LONGVARCHAR = -1;
const SQL_NO_NULLS = 0;
const SQL_NULLABLE = 1;
const SQL_NUMERIC = 2;
const SQL_ODBC_CURSORS = 110;
const SQL_QUICK = 0;
const SQL_REAL = 7;
const SQL_ROWVER = 2;
const SQL_SCOPE_CURROW = 0;
const SQL_SCOPE_SESSION = 2;
const SQL_SCOPE_TRANSACTION = 1;
const SQL_SMALLINT = 5;
const SQL_TIME = 10;
const SQL_TIMESTAMP = 11;
const SQL_TINYINT = -6;
const SQL_TYPE_DATE = 91;
const SQL_TYPE_TIME = 92;
const SQL_TYPE_TIMESTAMP = 93;
const SQL_VARBINARY = -3;
const SQL_VARCHAR = 12;
const SQL_WCHAR = -8;
const SQL_WLONGVARCHAR = -10;
const SQL_WVARCHAR = -9;
// No classes defined
function odbc_autocommit($connection_id, $onoff = null)
{
}
function odbc_binmode($result_id, $mode)
{
}
function odbc_close($connection_id)
{
}
function odbc_close_all()
{
}
function odbc_columns($connection_id, $qualifier = null, $owner = null, $table_name = null, $column_name = null)
{
}
function odbc_commit($connection_id)
{
}
function odbc_connect($dsn, $user, $password, $cursor_option = null)
{
}
function odbc_cursor($result_id)
{
}
function odbc_data_source($connection_id, $fetch_type)
{
}
function odbc_execute($result_id, $parameters_array = null)
{
}
function odbc_error($connection_id = null)
{
}
function odbc_errormsg($connection_id = null)
{
}
function odbc_exec($connection_id, $query, $flags = null)
{
}
function odbc_fetch_array($result, $rownumber = null)
{
}
function odbc_fetch_object($result, $rownumber = null)
{
}
function odbc_fetch_row($result_id, $row_number = null)
{
}
function odbc_fetch_into($result_id, &$result_array, $rownumber = null)
{
}
function odbc_field_len($result_id, $field_number)
{
}
function odbc_field_scale($result_id, $field_number)
{
}
function odbc_field_name($result_id, $field_number)
{
}
function odbc_field_type($result_id, $field_number)
{
}
function odbc_field_num($result_id, $field_name)
{
}
function odbc_free_result($result_id)
{
}
function odbc_gettypeinfo($connection_id, $data_type = null)
{
}
function odbc_longreadlen($result_id, $length)
{
}
function odbc_next_result($result_id)
{
}
function odbc_num_fields($result_id)
{
}
function odbc_num_rows($result_id)
{
}
function odbc_pconnect($dsn, $user, $password, $cursor_option = null)
{
}
function odbc_prepare($connection_id, $query)
{
}
function odbc_result($result_id, $field)
{
}
function odbc_result_all($result_id, $format = null)
{
}
function odbc_rollback($connection_id)
{
}
function odbc_setoption($conn_id, $which, $option, $value)
{
}
function odbc_specialcolumns($connection_id, $type, $qualifier, $owner, $table, $scope, $nullable)
{
}
function odbc_statistics($connection_id, $qualifier, $owner, $name, $unique, $accuracy)
{
}
function odbc_tables($connection_id, $qualifier = null, $owner = null, $name = null, $table_types = null)
{
}
function odbc_primarykeys($connection_id, $qualifier, $owner, $table)
{
}
function odbc_columnprivileges($connection_id, $catalog, $schema, $table, $column)
{
}
function odbc_tableprivileges($connection_id, $qualifier, $owner, $name)
{
}
function odbc_foreignkeys($connection_id, $pk_qualifier, $pk_owner, $pk_table, $fk_qualifier, $fk_owner, $fk_table)
{
}
function odbc_procedures($connection_id, $qualifier = null, $owner = null, $name = null)
{
}
function odbc_procedurecolumns($connection_id, $qualifier = null, $owner = null, $proc = null, $column = null)
{
}
function odbc_do($connection_id, $query, $flags = null)
{
}
function odbc_field_precision($result_id, $field_number)
{
}