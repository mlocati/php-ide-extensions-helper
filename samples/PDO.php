<?php
// Documentation generated automatically for extension PDO v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
// No INI entries
// No constants defined
class PDO
{
    const ATTR_AUTOCOMMIT = 0;
    const ATTR_CASE = 8;
    const ATTR_CLIENT_VERSION = 5;
    const ATTR_CONNECTION_STATUS = 7;
    const ATTR_CURSOR = 10;
    const ATTR_CURSOR_NAME = 9;
    const ATTR_DEFAULT_FETCH_MODE = 19;
    const ATTR_DRIVER_NAME = 16;
    const ATTR_EMULATE_PREPARES = 20;
    const ATTR_ERRMODE = 3;
    const ATTR_FETCH_CATALOG_NAMES = 15;
    const ATTR_FETCH_TABLE_NAMES = 14;
    const ATTR_MAX_COLUMN_LEN = 18;
    const ATTR_ORACLE_NULLS = 11;
    const ATTR_PERSISTENT = 12;
    const ATTR_PREFETCH = 1;
    const ATTR_SERVER_INFO = 6;
    const ATTR_SERVER_VERSION = 4;
    const ATTR_STATEMENT_CLASS = 13;
    const ATTR_STRINGIFY_FETCHES = 17;
    const ATTR_TIMEOUT = 2;
    const CASE_LOWER = 2;
    const CASE_NATURAL = 0;
    const CASE_UPPER = 1;
    const CURSOR_FWDONLY = 0;
    const CURSOR_SCROLL = 1;
    const ERRMODE_EXCEPTION = 2;
    const ERRMODE_SILENT = 0;
    const ERRMODE_WARNING = 1;
    const ERR_NONE = '00000';
    const FETCH_ASSOC = 2;
    const FETCH_BOTH = 4;
    const FETCH_BOUND = 6;
    const FETCH_CLASS = 8;
    const FETCH_CLASSTYPE = 262144;
    const FETCH_COLUMN = 7;
    const FETCH_FUNC = 10;
    const FETCH_GROUP = 65536;
    const FETCH_INTO = 9;
    const FETCH_KEY_PAIR = 12;
    const FETCH_LAZY = 1;
    const FETCH_NAMED = 11;
    const FETCH_NUM = 3;
    const FETCH_OBJ = 5;
    const FETCH_ORI_ABS = 4;
    const FETCH_ORI_FIRST = 2;
    const FETCH_ORI_LAST = 3;
    const FETCH_ORI_NEXT = 0;
    const FETCH_ORI_PRIOR = 1;
    const FETCH_ORI_REL = 5;
    const FETCH_PROPS_LATE = 1048576;
    const FETCH_SERIALIZE = 524288;
    const FETCH_UNIQUE = 196608;
    const MYSQL_ATTR_COMPRESS = 1003;
    const MYSQL_ATTR_DIRECT_QUERY = 1004;
    const MYSQL_ATTR_FOUND_ROWS = 1005;
    const MYSQL_ATTR_IGNORE_SPACE = 1006;
    const MYSQL_ATTR_INIT_COMMAND = 1002;
    const MYSQL_ATTR_LOCAL_INFILE = 1001;
    const MYSQL_ATTR_MULTI_STATEMENTS = 1013;
    const MYSQL_ATTR_SERVER_PUBLIC_KEY = 1012;
    const MYSQL_ATTR_SSL_CA = 1009;
    const MYSQL_ATTR_SSL_CAPATH = 1010;
    const MYSQL_ATTR_SSL_CERT = 1008;
    const MYSQL_ATTR_SSL_CIPHER = 1011;
    const MYSQL_ATTR_SSL_KEY = 1007;
    const MYSQL_ATTR_SSL_VERIFY_SERVER_CERT = 1014;
    const MYSQL_ATTR_USE_BUFFERED_QUERY = 1000;
    const NULL_EMPTY_STRING = 1;
    const NULL_NATURAL = 0;
    const NULL_TO_STRING = 2;
    const ODBC_ATTR_ASSUME_UTF8 = 1001;
    const ODBC_ATTR_USE_CURSOR_LIBRARY = 1000;
    const ODBC_SQL_USE_DRIVER = 2;
    const ODBC_SQL_USE_IF_NEEDED = 0;
    const ODBC_SQL_USE_ODBC = 1;
    const PARAM_BOOL = 5;
    const PARAM_EVT_ALLOC = 0;
    const PARAM_EVT_EXEC_POST = 3;
    const PARAM_EVT_EXEC_PRE = 2;
    const PARAM_EVT_FETCH_POST = 5;
    const PARAM_EVT_FETCH_PRE = 4;
    const PARAM_EVT_FREE = 1;
    const PARAM_EVT_NORMALIZE = 6;
    const PARAM_INPUT_OUTPUT = -2147483648;
    const PARAM_INT = 1;
    const PARAM_LOB = 3;
    const PARAM_NULL = 0;
    const PARAM_STMT = 4;
    const PARAM_STR = 2;
    const PGSQL_ATTR_DISABLE_PREPARES = 1000;
    const PGSQL_TRANSACTION_ACTIVE = 1;
    const PGSQL_TRANSACTION_IDLE = 0;
    const PGSQL_TRANSACTION_INERROR = 3;
    const PGSQL_TRANSACTION_INTRANS = 2;
    const PGSQL_TRANSACTION_UNKNOWN = 4;
    const SQLITE_DETERMINISTIC = 2048;
    public static function getAvailableDrivers()
    {
    }
    public function __construct($dsn, $username = null, $passwd = null, $options = null)
    {
    }
    final public function __sleep()
    {
    }
    final public function __wakeup()
    {
    }
    public function beginTransaction()
    {
    }
    public function commit()
    {
    }
    public function errorCode()
    {
    }
    public function errorInfo()
    {
    }
    public function exec($query)
    {
    }
    public function getAttribute($attribute)
    {
    }
    public function inTransaction()
    {
    }
    public function lastInsertId($seqname = null)
    {
    }
    public function prepare($statement, $options = null)
    {
    }
    public function query()
    {
    }
    public function quote($string, $paramtype = null)
    {
    }
    public function rollBack()
    {
    }
    public function setAttribute($attribute, $value)
    {
    }
}
class PDOException extends RuntimeException
{
    protected $code = 0;
    protected $file;
    protected $line;
    protected $message = '';
    public $errorInfo;
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
final class PDORow
{
}
class PDOStatement implements Traversable
{
    public $queryString;
    final public function __sleep()
    {
    }
    final public function __wakeup()
    {
    }
    public function bindColumn($column, &$param, $type = null, $maxlen = null, $driverdata = null)
    {
    }
    public function bindParam($paramno, &$param, $type = null, $maxlen = null, $driverdata = null)
    {
    }
    public function bindValue($paramno, $param, $type = null)
    {
    }
    public function closeCursor()
    {
    }
    public function columnCount()
    {
    }
    public function debugDumpParams()
    {
    }
    public function errorCode()
    {
    }
    public function errorInfo()
    {
    }
    public function execute($bound_input_params = null)
    {
    }
    public function fetch($how = null, $orientation = null, $offset = null)
    {
    }
    public function fetchAll($how = null, $class_name = null, $ctor_args = null)
    {
    }
    public function fetchColumn($column_number = null)
    {
    }
    public function fetchObject($class_name = null, $ctor_args = null)
    {
    }
    public function getAttribute($attribute)
    {
    }
    public function getColumnMeta($column)
    {
    }
    public function nextRowset()
    {
    }
    public function rowCount()
    {
    }
    public function setAttribute($attribute, $value)
    {
    }
    public function setFetchMode($mode, $params = null)
    {
    }
}
function pdo_drivers()
{
}