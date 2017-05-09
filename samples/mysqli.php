<?php
// Documentation generated automatically for extension mysqli v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
/*
 * INI entries:
 * mysqli.max_links = '-1'
 * mysqli.max_persistent = '-1'
 * mysqli.allow_persistent = '1'
 * mysqli.rollback_on_cached_plink = '0'
 * mysqli.default_host = null
 * mysqli.default_user = null
 * mysqli.default_pw = null
 * mysqli.default_port = '3306'
 * mysqli.default_socket = null
 * mysqli.reconnect = '0'
 * mysqli.allow_local_infile = '1'
 */
const MYSQLI_ASSOC = 1;
const MYSQLI_ASYNC = 8;
const MYSQLI_AUTO_INCREMENT_FLAG = 512;
const MYSQLI_BINARY_FLAG = 128;
const MYSQLI_BLOB_FLAG = 16;
const MYSQLI_BOTH = 3;
const MYSQLI_CLIENT_CAN_HANDLE_EXPIRED_PASSWORDS = 4194304;
const MYSQLI_CLIENT_COMPRESS = 32;
const MYSQLI_CLIENT_FOUND_ROWS = 2;
const MYSQLI_CLIENT_IGNORE_SPACE = 256;
const MYSQLI_CLIENT_INTERACTIVE = 1024;
const MYSQLI_CLIENT_NO_SCHEMA = 16;
const MYSQLI_CLIENT_SSL = 2048;
const MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT = 64;
const MYSQLI_CLIENT_SSL_VERIFY_SERVER_CERT = 1073741824;
const MYSQLI_CURSOR_TYPE_FOR_UPDATE = 2;
const MYSQLI_CURSOR_TYPE_NO_CURSOR = 0;
const MYSQLI_CURSOR_TYPE_READ_ONLY = 1;
const MYSQLI_CURSOR_TYPE_SCROLLABLE = 4;
const MYSQLI_DATA_TRUNCATED = 101;
const MYSQLI_DEBUG_TRACE_ENABLED = 0;
const MYSQLI_ENUM_FLAG = 256;
const MYSQLI_GROUP_FLAG = 32768;
const MYSQLI_INIT_COMMAND = 3;
const MYSQLI_MULTIPLE_KEY_FLAG = 8;
const MYSQLI_NOT_NULL_FLAG = 1;
const MYSQLI_NO_DATA = 100;
const MYSQLI_NO_DEFAULT_VALUE_FLAG = 4096;
const MYSQLI_NUM = 2;
const MYSQLI_NUM_FLAG = 32768;
const MYSQLI_ON_UPDATE_NOW_FLAG = 8192;
const MYSQLI_OPT_CAN_HANDLE_EXPIRED_PASSWORDS = 29;
const MYSQLI_OPT_CONNECT_TIMEOUT = 0;
const MYSQLI_OPT_INT_AND_FLOAT_NATIVE = 201;
const MYSQLI_OPT_LOCAL_INFILE = 8;
const MYSQLI_OPT_NET_CMD_BUFFER_SIZE = 202;
const MYSQLI_OPT_NET_READ_BUFFER_SIZE = 203;
const MYSQLI_OPT_SSL_VERIFY_SERVER_CERT = 21;
const MYSQLI_PART_KEY_FLAG = 16384;
const MYSQLI_PRI_KEY_FLAG = 2;
const MYSQLI_READ_DEFAULT_FILE = 4;
const MYSQLI_READ_DEFAULT_GROUP = 5;
const MYSQLI_REFRESH_BACKUP_LOG = 2097152;
const MYSQLI_REFRESH_GRANT = 1;
const MYSQLI_REFRESH_HOSTS = 8;
const MYSQLI_REFRESH_LOG = 2;
const MYSQLI_REFRESH_MASTER = 128;
const MYSQLI_REFRESH_SLAVE = 64;
const MYSQLI_REFRESH_STATUS = 16;
const MYSQLI_REFRESH_TABLES = 4;
const MYSQLI_REFRESH_THREADS = 32;
const MYSQLI_REPORT_ALL = 255;
const MYSQLI_REPORT_ERROR = 1;
const MYSQLI_REPORT_INDEX = 4;
const MYSQLI_REPORT_OFF = 0;
const MYSQLI_REPORT_STRICT = 2;
const MYSQLI_SERVER_PS_OUT_PARAMS = 4096;
const MYSQLI_SERVER_PUBLIC_KEY = 27;
const MYSQLI_SERVER_QUERY_NO_GOOD_INDEX_USED = 16;
const MYSQLI_SERVER_QUERY_NO_INDEX_USED = 32;
const MYSQLI_SERVER_QUERY_WAS_SLOW = 2048;
const MYSQLI_SET_CHARSET_DIR = 6;
const MYSQLI_SET_CHARSET_NAME = 7;
const MYSQLI_SET_FLAG = 2048;
const MYSQLI_STMT_ATTR_CURSOR_TYPE = 1;
const MYSQLI_STMT_ATTR_PREFETCH_ROWS = 2;
const MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH = 0;
const MYSQLI_STORE_RESULT = 0;
const MYSQLI_STORE_RESULT_COPY_DATA = 16;
const MYSQLI_TIMESTAMP_FLAG = 1024;
const MYSQLI_TRANS_COR_AND_CHAIN = 1;
const MYSQLI_TRANS_COR_AND_NO_CHAIN = 2;
const MYSQLI_TRANS_COR_NO_RELEASE = 8;
const MYSQLI_TRANS_COR_RELEASE = 4;
const MYSQLI_TRANS_START_READ_ONLY = 4;
const MYSQLI_TRANS_START_READ_WRITE = 2;
const MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT = 1;
const MYSQLI_TYPE_BIT = 16;
const MYSQLI_TYPE_BLOB = 252;
const MYSQLI_TYPE_CHAR = 1;
const MYSQLI_TYPE_DATE = 10;
const MYSQLI_TYPE_DATETIME = 12;
const MYSQLI_TYPE_DECIMAL = 0;
const MYSQLI_TYPE_DOUBLE = 5;
const MYSQLI_TYPE_ENUM = 247;
const MYSQLI_TYPE_FLOAT = 4;
const MYSQLI_TYPE_GEOMETRY = 255;
const MYSQLI_TYPE_INT24 = 9;
const MYSQLI_TYPE_INTERVAL = 247;
const MYSQLI_TYPE_JSON = 245;
const MYSQLI_TYPE_LONG = 3;
const MYSQLI_TYPE_LONGLONG = 8;
const MYSQLI_TYPE_LONG_BLOB = 251;
const MYSQLI_TYPE_MEDIUM_BLOB = 250;
const MYSQLI_TYPE_NEWDATE = 14;
const MYSQLI_TYPE_NEWDECIMAL = 246;
const MYSQLI_TYPE_NULL = 6;
const MYSQLI_TYPE_SET = 248;
const MYSQLI_TYPE_SHORT = 2;
const MYSQLI_TYPE_STRING = 254;
const MYSQLI_TYPE_TIME = 11;
const MYSQLI_TYPE_TIMESTAMP = 7;
const MYSQLI_TYPE_TINY = 1;
const MYSQLI_TYPE_TINY_BLOB = 249;
const MYSQLI_TYPE_VAR_STRING = 253;
const MYSQLI_TYPE_YEAR = 13;
const MYSQLI_UNIQUE_KEY_FLAG = 4;
const MYSQLI_UNSIGNED_FLAG = 32;
const MYSQLI_USE_RESULT = 1;
const MYSQLI_ZEROFILL_FLAG = 64;
class mysqli
{
    public $affected_rows;
    public $client_info;
    public $client_version;
    public $connect_errno;
    public $connect_error;
    public $errno;
    public $error;
    public $error_list;
    public $field_count;
    public $host_info;
    public $info;
    public $insert_id;
    public $protocol_version;
    public $server_info;
    public $server_version;
    public $sqlstate;
    public $stat;
    public $thread_id;
    public $warning_count;
    public static function poll(array &$read, array &$write, array &$error, $sec, $usec = null)
    {
    }
    public function __construct($host = null, $user = null, $password = null, $database = null, $port = null, $socket = null)
    {
    }
    public function autocommit($mode)
    {
    }
    public function begin_transaction($flags = null, $name = null)
    {
    }
    public function change_user($user, $password, $database)
    {
    }
    public function character_set_name()
    {
    }
    public function close()
    {
    }
    public function commit($flags = null, $name = null)
    {
    }
    public function connect($host = null, $user = null, $password = null, $database = null, $port = null, $socket = null)
    {
    }
    public function debug($debug_options)
    {
    }
    public function dump_debug_info()
    {
    }
    public function escape_string($string_to_escape)
    {
    }
    public function get_charset()
    {
    }
    public function get_client_info()
    {
    }
    public function get_connection_stats()
    {
    }
    public function get_server_info()
    {
    }
    public function get_warnings()
    {
    }
    public function init()
    {
    }
    public function kill($connection_id)
    {
    }
    public function more_results()
    {
    }
    public function multi_query($query)
    {
    }
    public function next_result()
    {
    }
    public function options($option, $value)
    {
    }
    public function ping()
    {
    }
    public function prepare($query)
    {
    }
    public function query($query)
    {
    }
    public function real_connect($host = null, $user = null, $password = null, $database = null, $port = null, $socket = null, $flags = null)
    {
    }
    public function real_escape_string($string_to_escape)
    {
    }
    public function real_query($query)
    {
    }
    public function reap_async_query()
    {
    }
    public function refresh($options)
    {
    }
    public function release_savepoint($name)
    {
    }
    public function rollback($flags = null, $name = null)
    {
    }
    public function savepoint($name)
    {
    }
    public function select_db($database)
    {
    }
    public function set_charset($charset)
    {
    }
    public function set_opt($option, $value)
    {
    }
    public function ssl_set($key, $cert, $certificate_authority, $certificate_authority_path, $cipher)
    {
    }
    public function stat()
    {
    }
    public function stmt_init()
    {
    }
    public function store_result($flags = null)
    {
    }
    public function thread_safe()
    {
    }
    public function use_result()
    {
    }
}
final class mysqli_driver
{
    public $client_info;
    public $client_version;
    public $driver_version;
    public $embedded;
    public $reconnect;
    public $report_mode;
}
class mysqli_result implements Traversable
{
    public $current_field;
    public $field_count;
    public $lengths;
    public $num_rows;
    public $type;
    public function __construct()
    {
    }
    public function close()
    {
    }
    public function data_seek($offset)
    {
    }
    public function fetch_all()
    {
    }
    public function fetch_array($result_type = null)
    {
    }
    public function fetch_assoc()
    {
    }
    public function fetch_field()
    {
    }
    public function fetch_field_direct($field_nr)
    {
    }
    public function fetch_fields()
    {
    }
    public function fetch_object($class_name = null, array $params = null)
    {
    }
    public function fetch_row()
    {
    }
    public function field_seek($field_nr)
    {
    }
    public function free()
    {
    }
    public function free_result()
    {
    }
}
final class mysqli_sql_exception extends RuntimeException
{
    protected $code = 0;
    protected $file;
    protected $line;
    protected $message = '';
    protected $sqlstate = '00000';
    public function __construct($message = null, $code = null, $previous = null)
    {
    }
    public function __toString()
    {
    }
    public function __wakeup()
    {
    }
    final public function getCode()
    {
    }
    final public function getFile()
    {
    }
    final public function getLine()
    {
    }
    final public function getMessage()
    {
    }
    final public function getPrevious()
    {
    }
    final public function getTrace()
    {
    }
    final public function getTraceAsString()
    {
    }
    final private function __clone()
    {
    }
}
class mysqli_stmt
{
    public $affected_rows;
    public $errno;
    public $error;
    public $error_list;
    public $field_count;
    public $id;
    public $insert_id;
    public $num_rows;
    public $param_count;
    public $sqlstate;
    public function __construct()
    {
    }
    public function attr_get($attribute)
    {
    }
    public function attr_set($attribute, $value)
    {
    }
    public function bind_param($types, ...&$vars)
    {
    }
    public function bind_result(...&$vars)
    {
    }
    public function close()
    {
    }
    public function data_seek($offset)
    {
    }
    public function execute()
    {
    }
    public function fetch()
    {
    }
    public function free_result()
    {
    }
    public function get_result()
    {
    }
    public function get_warnings()
    {
    }
    public function more_results()
    {
    }
    public function next_result()
    {
    }
    public function num_rows()
    {
    }
    public function prepare($query)
    {
    }
    public function reset()
    {
    }
    public function result_metadata()
    {
    }
    public function send_long_data($param_nr, $data)
    {
    }
    public function store_result()
    {
    }
}
final class mysqli_warning
{
    public $errno;
    public $message;
    public $sqlstate;
    protected function __construct()
    {
    }
    public function next()
    {
    }
}
function mysqli_affected_rows($link)
{
}
function mysqli_autocommit($link, $mode)
{
}
function mysqli_begin_transaction($link, $flags = null, $name = null)
{
}
function mysqli_change_user($link, $user, $password, $database)
{
}
function mysqli_character_set_name($link)
{
}
function mysqli_close($link)
{
}
function mysqli_commit($link, $flags = null, $name = null)
{
}
function mysqli_connect($host = null, $user = null, $password = null, $database = null, $port = null, $socket = null)
{
}
function mysqli_connect_errno()
{
}
function mysqli_connect_error()
{
}
function mysqli_data_seek($result, $offset)
{
}
function mysqli_dump_debug_info($link)
{
}
function mysqli_debug($debug_options)
{
}
function mysqli_errno($link)
{
}
function mysqli_error($link)
{
}
function mysqli_error_list($link)
{
}
function mysqli_stmt_execute($stmt)
{
}
function mysqli_execute($stmt)
{
}
function mysqli_fetch_field($result)
{
}
function mysqli_fetch_fields($result)
{
}
function mysqli_fetch_field_direct($result, $field_nr)
{
}
function mysqli_fetch_lengths($result)
{
}
function mysqli_fetch_all($result)
{
}
function mysqli_fetch_array($result, $result_type = null)
{
}
function mysqli_fetch_assoc($result)
{
}
function mysqli_fetch_object($result, $class_name = null, array $params = null)
{
}
function mysqli_fetch_row($result)
{
}
function mysqli_field_count($link)
{
}
function mysqli_field_seek($result, $field_nr)
{
}
function mysqli_field_tell($result)
{
}
function mysqli_free_result($result)
{
}
function mysqli_get_connection_stats($link)
{
}
function mysqli_get_client_stats()
{
}
function mysqli_get_charset($link)
{
}
function mysqli_get_client_info($link)
{
}
function mysqli_get_client_version($link)
{
}
function mysqli_get_links_stats()
{
}
function mysqli_get_host_info($link)
{
}
function mysqli_get_proto_info($link)
{
}
function mysqli_get_server_info($link)
{
}
function mysqli_get_server_version($link)
{
}
function mysqli_get_warnings($link)
{
}
function mysqli_init()
{
}
function mysqli_info($link)
{
}
function mysqli_insert_id($link)
{
}
function mysqli_kill($link, $connection_id)
{
}
function mysqli_more_results($link)
{
}
function mysqli_multi_query($link, $query)
{
}
function mysqli_next_result($link)
{
}
function mysqli_num_fields($result)
{
}
function mysqli_num_rows($result)
{
}
function mysqli_options($link, $option, $value)
{
}
function mysqli_ping($link)
{
}
function mysqli_poll(array &$read, array &$write, array &$error, $sec, $usec = null)
{
}
function mysqli_prepare($link, $query)
{
}
function mysqli_report($flags)
{
}
function mysqli_query($link, $query)
{
}
function mysqli_real_connect($link, $host = null, $user = null, $password = null, $database = null, $port = null, $socket = null, $flags = null)
{
}
function mysqli_real_escape_string($link, $string_to_escape)
{
}
function mysqli_real_query($link, $query)
{
}
function mysqli_reap_async_query($link)
{
}
function mysqli_release_savepoint($link, $name)
{
}
function mysqli_rollback($link, $flags = null, $name = null)
{
}
function mysqli_savepoint($link, $name)
{
}
function mysqli_select_db($link, $database)
{
}
function mysqli_set_charset($link, $charset)
{
}
function mysqli_stmt_affected_rows($stmt)
{
}
function mysqli_stmt_attr_get($stmt, $attribute)
{
}
function mysqli_stmt_attr_set($stmt, $attribute, $value)
{
}
function mysqli_stmt_bind_param($stmt, $types, ...&$vars)
{
}
function mysqli_stmt_bind_result($stmt, ...&$vars)
{
}
function mysqli_stmt_close($stmt)
{
}
function mysqli_stmt_data_seek($stmt, $offset)
{
}
function mysqli_stmt_errno($stmt)
{
}
function mysqli_stmt_error($stmt)
{
}
function mysqli_stmt_error_list($stmt)
{
}
function mysqli_stmt_fetch($stmt)
{
}
function mysqli_stmt_field_count($stmt)
{
}
function mysqli_stmt_free_result($stmt)
{
}
function mysqli_stmt_get_result($stmt)
{
}
function mysqli_stmt_get_warnings($stmt)
{
}
function mysqli_stmt_init($link)
{
}
function mysqli_stmt_insert_id($stmt)
{
}
function mysqli_stmt_more_results($stmt)
{
}
function mysqli_stmt_next_result($stmt)
{
}
function mysqli_stmt_num_rows($stmt)
{
}
function mysqli_stmt_param_count($stmt)
{
}
function mysqli_stmt_prepare($stmt, $query)
{
}
function mysqli_stmt_reset($stmt)
{
}
function mysqli_stmt_result_metadata($stmt)
{
}
function mysqli_stmt_send_long_data($stmt, $param_nr, $data)
{
}
function mysqli_stmt_store_result($stmt)
{
}
function mysqli_stmt_sqlstate($stmt)
{
}
function mysqli_sqlstate($link)
{
}
function mysqli_ssl_set($link, $key, $cert, $certificate_authority, $certificate_authority_path, $cipher)
{
}
function mysqli_stat($link)
{
}
function mysqli_store_result($link, $flags = null)
{
}
function mysqli_thread_id($link)
{
}
function mysqli_thread_safe()
{
}
function mysqli_use_result($link)
{
}
function mysqli_warning_count($link)
{
}
function mysqli_refresh($link, $options)
{
}
function mysqli_escape_string($link, $query)
{
}
function mysqli_set_opt()
{
}