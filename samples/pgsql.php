<?php
// Documentation generated automatically for extension pgsql v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
/*
 * INI entries:
 * pgsql.allow_persistent = '1'
 * pgsql.max_persistent = '-1'
 * pgsql.max_links = '-1'
 * pgsql.auto_reset_persistent = '0'
 * pgsql.ignore_notice = '0'
 * pgsql.log_notice = '0'
 */
const PGSQL_ASSOC = 1;
const PGSQL_BAD_RESPONSE = 5;
const PGSQL_BOTH = 3;
const PGSQL_COMMAND_OK = 1;
const PGSQL_CONNECTION_AUTH_OK = 5;
const PGSQL_CONNECTION_AWAITING_RESPONSE = 4;
const PGSQL_CONNECTION_BAD = 1;
const PGSQL_CONNECTION_MADE = 3;
const PGSQL_CONNECTION_OK = 0;
const PGSQL_CONNECTION_SETENV = 6;
const PGSQL_CONNECTION_STARTED = 2;
const PGSQL_CONNECT_ASYNC = 4;
const PGSQL_CONNECT_FORCE_NEW = 2;
const PGSQL_CONV_FORCE_NULL = 4;
const PGSQL_CONV_IGNORE_DEFAULT = 2;
const PGSQL_CONV_IGNORE_NOT_NULL = 8;
const PGSQL_COPY_IN = 4;
const PGSQL_COPY_OUT = 3;
const PGSQL_DIAG_CONTEXT = 87;
const PGSQL_DIAG_INTERNAL_POSITION = 112;
const PGSQL_DIAG_INTERNAL_QUERY = 113;
const PGSQL_DIAG_MESSAGE_DETAIL = 68;
const PGSQL_DIAG_MESSAGE_HINT = 72;
const PGSQL_DIAG_MESSAGE_PRIMARY = 77;
const PGSQL_DIAG_SEVERITY = 83;
const PGSQL_DIAG_SOURCE_FILE = 70;
const PGSQL_DIAG_SOURCE_FUNCTION = 82;
const PGSQL_DIAG_SOURCE_LINE = 76;
const PGSQL_DIAG_SQLSTATE = 67;
const PGSQL_DIAG_STATEMENT_POSITION = 80;
const PGSQL_DML_ASYNC = 1024;
const PGSQL_DML_ESCAPE = 4096;
const PGSQL_DML_EXEC = 512;
const PGSQL_DML_NO_CONV = 256;
const PGSQL_DML_STRING = 2048;
const PGSQL_EMPTY_QUERY = 0;
const PGSQL_ERRORS_DEFAULT = 1;
const PGSQL_ERRORS_TERSE = 0;
const PGSQL_ERRORS_VERBOSE = 2;
const PGSQL_FATAL_ERROR = 7;
const PGSQL_LIBPQ_VERSION = '9.6.2';
const PGSQL_LIBPQ_VERSION_STR = 'PostgreSQL 9.6.2 (win32)';
const PGSQL_NONFATAL_ERROR = 6;
const PGSQL_NOTICE_ALL = 2;
const PGSQL_NOTICE_CLEAR = 3;
const PGSQL_NOTICE_LAST = 1;
const PGSQL_NUM = 2;
const PGSQL_POLLING_ACTIVE = 4;
const PGSQL_POLLING_FAILED = 0;
const PGSQL_POLLING_OK = 3;
const PGSQL_POLLING_READING = 1;
const PGSQL_POLLING_WRITING = 2;
const PGSQL_SEEK_CUR = 1;
const PGSQL_SEEK_END = 2;
const PGSQL_SEEK_SET = 0;
const PGSQL_STATUS_LONG = 1;
const PGSQL_STATUS_STRING = 2;
const PGSQL_TRANSACTION_ACTIVE = 1;
const PGSQL_TRANSACTION_IDLE = 0;
const PGSQL_TRANSACTION_INERROR = 3;
const PGSQL_TRANSACTION_INTRANS = 2;
const PGSQL_TRANSACTION_UNKNOWN = 4;
const PGSQL_TUPLES_OK = 2;
// No classes defined
function pg_connect($connection_string, $connect_type = null, $host = null, $port = null, $options = null, $tty = null, $database = null)
{
}
function pg_pconnect($connection_string, $host = null, $port = null, $options = null, $tty = null, $database = null)
{
}
function pg_connect_poll($connection = null)
{
}
function pg_close($connection = null)
{
}
function pg_connection_status($connection)
{
}
function pg_connection_busy($connection)
{
}
function pg_connection_reset($connection)
{
}
function pg_host($connection = null)
{
}
function pg_dbname($connection = null)
{
}
function pg_port($connection = null)
{
}
function pg_tty($connection = null)
{
}
function pg_options($connection = null)
{
}
function pg_version($connection = null)
{
}
function pg_ping($connection = null)
{
}
function pg_parameter_status($connection, $param_name = null)
{
}
function pg_transaction_status($connection)
{
}
function pg_query($connection = null, $query = null)
{
}
function pg_query_params($connection = null, $query = null, $params = null)
{
}
function pg_prepare($connection = null, $stmtname = null, $query = null)
{
}
function pg_execute($connection = null, $stmtname = null, $params = null)
{
}
function pg_send_query($connection, $query)
{
}
function pg_send_query_params($connection, $query, $params)
{
}
function pg_send_prepare($connection, $stmtname, $query)
{
}
function pg_send_execute($connection, $stmtname, $params)
{
}
function pg_cancel_query($connection)
{
}
function pg_fetch_result($result, $row_number = null, $field_name = null)
{
}
function pg_fetch_row($result, $row = null, $result_type = null)
{
}
function pg_fetch_assoc($result, $row = null)
{
}
function pg_fetch_array($result, $row = null, $result_type = null)
{
}
function pg_fetch_object($result, $row = null, $class_name = null, $l = null, $ctor_params = null)
{
}
function pg_fetch_all($result, $result_type = null)
{
}
function pg_fetch_all_columns($result, $column_number = null)
{
}
function pg_affected_rows($result)
{
}
function pg_get_result($connection)
{
}
function pg_result_seek($result, $offset)
{
}
function pg_result_status($result, $result_type = null)
{
}
function pg_free_result($result)
{
}
function pg_last_oid($result)
{
}
function pg_num_rows($result)
{
}
function pg_num_fields($result)
{
}
function pg_field_name($result, $field_number)
{
}
function pg_field_num($result, $field_name)
{
}
function pg_field_size($result, $field_number)
{
}
function pg_field_type($result, $field_number)
{
}
function pg_field_type_oid($result, $field_number)
{
}
function pg_field_prtlen($result, $row = null, $field_name_or_number = null)
{
}
function pg_field_is_null($result, $row = null, $field_name_or_number = null)
{
}
function pg_field_table($result, $field_number, $oid_only = null)
{
}
function pg_get_notify($connection = null, $e = null)
{
}
function pg_socket($connection)
{
}
function pg_consume_input($connection)
{
}
function pg_flush($connection)
{
}
function pg_get_pid($connection = null)
{
}
function pg_result_error($result)
{
}
function pg_result_error_field($result, $fieldcode)
{
}
function pg_last_error($connection = null)
{
}
function pg_last_notice($connection, $option = null)
{
}
function pg_put_line($connection = null, $query = null)
{
}
function pg_end_copy($connection = null)
{
}
function pg_copy_to($connection, $table_name, $delimiter = null, $null_as = null)
{
}
function pg_copy_from($connection, $table_name, $rows, $delimiter = null, $null_as = null)
{
}
function pg_trace($filename, $mode = null, $connection = null)
{
}
function pg_untrace($connection = null)
{
}
function pg_lo_create($connection = null, $large_object_id = null)
{
}
function pg_lo_unlink($connection = null, $large_object_oid = null)
{
}
function pg_lo_open($connection = null, $large_object_oid = null, $mode = null)
{
}
function pg_lo_close($large_object)
{
}
function pg_lo_read($large_object, $len = null)
{
}
function pg_lo_write($large_object, $buf, $len = null)
{
}
function pg_lo_read_all($large_object)
{
}
function pg_lo_import($connection = null, $filename = null, $large_object_oid = null)
{
}
function pg_lo_export($connection = null, $objoid = null, $filename = null)
{
}
function pg_lo_seek($large_object, $offset, $whence = null)
{
}
function pg_lo_tell($large_object)
{
}
function pg_lo_truncate($large_object, $size = null)
{
}
function pg_escape_string($connection = null, $data = null)
{
}
function pg_escape_bytea($connection = null, $data = null)
{
}
function pg_unescape_bytea($data)
{
}
function pg_escape_literal($connection = null, $data = null)
{
}
function pg_escape_identifier($connection = null, $data = null)
{
}
function pg_set_error_verbosity($connection = null, $verbosity = null)
{
}
function pg_client_encoding($connection = null)
{
}
function pg_set_client_encoding($connection = null, $encoding = null)
{
}
function pg_meta_data($db, $table)
{
}
function pg_convert($db, $table, $values, $options = null)
{
}
function pg_insert($db, $table, $values, $options = null)
{
}
function pg_update($db, $table, $fields, $ids, $options = null)
{
}
function pg_delete($db, $table, $ids, $options = null)
{
}
function pg_select($db, $table, $ids, $options = null, $result_type = null)
{
}
function pg_exec($connection = null, $query = null)
{
}
function pg_getlastoid($result)
{
}
function pg_cmdtuples($result)
{
}
function pg_errormessage($connection = null)
{
}
function pg_numrows($result)
{
}
function pg_numfields($result)
{
}
function pg_fieldname($result, $field_number)
{
}
function pg_fieldsize($result, $field_number)
{
}
function pg_fieldtype($result, $field_number)
{
}
function pg_fieldnum($result, $field_name)
{
}
function pg_fieldprtlen($result, $row = null, $field_name_or_number = null)
{
}
function pg_fieldisnull($result, $row = null, $field_name_or_number = null)
{
}
function pg_freeresult($result)
{
}
function pg_result($connection)
{
}
function pg_loreadall($large_object)
{
}
function pg_locreate($connection = null, $large_object_id = null)
{
}
function pg_lounlink($connection = null, $large_object_oid = null)
{
}
function pg_loopen($connection = null, $large_object_oid = null, $mode = null)
{
}
function pg_loclose($large_object)
{
}
function pg_loread($large_object, $len = null)
{
}
function pg_lowrite($large_object, $buf, $len = null)
{
}
function pg_loimport($connection = null, $filename = null, $large_object_oid = null)
{
}
function pg_loexport($connection = null, $objoid = null, $filename = null)
{
}
function pg_clientencoding($connection = null)
{
}
function pg_setclientencoding($connection = null, $encoding = null)
{
}