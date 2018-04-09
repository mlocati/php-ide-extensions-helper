<?php
// Start of extension: PDO
// - parsed on POSIX with PHP 7.2.3 (extension version 7.2.3)
// - parsed on Windows with PHP 7.2.4 (extension version 7.2.4)

/**
 * Represents a connection between PHP and a database server.
 *
 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
 *
 * @link http://www.php.net/manual/en/class.pdo.php
 */
class PDO
{
    /**
     * @var int
     */
    const ATTR_AUTOCOMMIT = 0;

    /**
     * @var int
     */
    const ATTR_CASE = 8;

    /**
     * @var int
     */
    const ATTR_CLIENT_VERSION = 5;

    /**
     * @var int
     */
    const ATTR_CONNECTION_STATUS = 7;

    /**
     * @var int
     */
    const ATTR_CURSOR = 10;

    /**
     * @var int
     */
    const ATTR_CURSOR_NAME = 9;

    /**
     * @var int
     */
    const ATTR_DEFAULT_FETCH_MODE = 19;

    /**
     * @var int
     */
    const ATTR_DEFAULT_STR_PARAM = 21;

    /**
     * @var int
     */
    const ATTR_DRIVER_NAME = 16;

    /**
     * @var int
     */
    const ATTR_EMULATE_PREPARES = 20;

    /**
     * @var int
     */
    const ATTR_ERRMODE = 3;

    /**
     * @var int
     */
    const ATTR_FETCH_CATALOG_NAMES = 15;

    /**
     * @var int
     */
    const ATTR_FETCH_TABLE_NAMES = 14;

    /**
     * @var int
     */
    const ATTR_MAX_COLUMN_LEN = 18;

    /**
     * @var int
     */
    const ATTR_ORACLE_NULLS = 11;

    /**
     * @var int
     */
    const ATTR_PERSISTENT = 12;

    /**
     * @var int
     */
    const ATTR_PREFETCH = 1;

    /**
     * @var int
     */
    const ATTR_SERVER_INFO = 6;

    /**
     * @var int
     */
    const ATTR_SERVER_VERSION = 4;

    /**
     * @var int
     */
    const ATTR_STATEMENT_CLASS = 13;

    /**
     * @var int
     */
    const ATTR_STRINGIFY_FETCHES = 17;

    /**
     * @var int
     */
    const ATTR_TIMEOUT = 2;

    /**
     * @var int
     */
    const CASE_LOWER = 2;

    /**
     * @var int
     */
    const CASE_NATURAL = 0;

    /**
     * @var int
     */
    const CASE_UPPER = 1;

    /**
     * @var int
     */
    const CURSOR_FWDONLY = 0;

    /**
     * @var int
     */
    const CURSOR_SCROLL = 1;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const DBLIB_ATTR_CONNECTION_TIMEOUT = 1000;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const DBLIB_ATTR_QUERY_TIMEOUT = 1001;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const DBLIB_ATTR_STRINGIFY_UNIQUEIDENTIFIER = 1002;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const DBLIB_ATTR_VERSION = 1003;

    /**
     * @var string
     */
    const ERR_NONE = '00000';

    /**
     * @var int
     */
    const ERRMODE_EXCEPTION = 2;

    /**
     * @var int
     */
    const ERRMODE_SILENT = 0;

    /**
     * @var int
     */
    const ERRMODE_WARNING = 1;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const FB_ATTR_DATE_FORMAT = 1000;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const FB_ATTR_TIME_FORMAT = 1001;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const FB_ATTR_TIMESTAMP_FORMAT = 1002;

    /**
     * @var int
     */
    const FETCH_ASSOC = 2;

    /**
     * @var int
     */
    const FETCH_BOTH = 4;

    /**
     * @var int
     */
    const FETCH_BOUND = 6;

    /**
     * @var int
     */
    const FETCH_CLASS = 8;

    /**
     * @var int
     */
    const FETCH_CLASSTYPE = 262144;

    /**
     * @var int
     */
    const FETCH_COLUMN = 7;

    /**
     * @var int
     */
    const FETCH_FUNC = 10;

    /**
     * @var int
     */
    const FETCH_GROUP = 65536;

    /**
     * @var int
     */
    const FETCH_INTO = 9;

    /**
     * @var int
     */
    const FETCH_KEY_PAIR = 12;

    /**
     * @var int
     */
    const FETCH_LAZY = 1;

    /**
     * @var int
     */
    const FETCH_NAMED = 11;

    /**
     * @var int
     */
    const FETCH_NUM = 3;

    /**
     * @var int
     */
    const FETCH_OBJ = 5;

    /**
     * @var int
     */
    const FETCH_ORI_ABS = 4;

    /**
     * @var int
     */
    const FETCH_ORI_FIRST = 2;

    /**
     * @var int
     */
    const FETCH_ORI_LAST = 3;

    /**
     * @var int
     */
    const FETCH_ORI_NEXT = 0;

    /**
     * @var int
     */
    const FETCH_ORI_PRIOR = 1;

    /**
     * @var int
     */
    const FETCH_ORI_REL = 5;

    /**
     * @var int
     */
    const FETCH_PROPS_LATE = 1048576;

    /**
     * @var int
     */
    const FETCH_SERIALIZE = 524288;

    /**
     * @var int
     */
    const FETCH_UNIQUE = 196608;

    /**
     * @var int
     */
    const MYSQL_ATTR_COMPRESS = 1003;

    /**
     * @var int
     */
    const MYSQL_ATTR_DIRECT_QUERY = 1004;

    /**
     * @var int
     */
    const MYSQL_ATTR_FOUND_ROWS = 1005;

    /**
     * @var int
     */
    const MYSQL_ATTR_IGNORE_SPACE = 1006;

    /**
     * @var int
     */
    const MYSQL_ATTR_INIT_COMMAND = 1002;

    /**
     * @var int
     */
    const MYSQL_ATTR_LOCAL_INFILE = 1001;

    /**
     * @var int
     */
    const MYSQL_ATTR_MULTI_STATEMENTS = 1013;

    /**
     * @var int
     */
    const MYSQL_ATTR_SERVER_PUBLIC_KEY = 1012;

    /**
     * @var int
     */
    const MYSQL_ATTR_SSL_CA = 1009;

    /**
     * @var int
     */
    const MYSQL_ATTR_SSL_CAPATH = 1010;

    /**
     * @var int
     */
    const MYSQL_ATTR_SSL_CERT = 1008;

    /**
     * @var int
     */
    const MYSQL_ATTR_SSL_CIPHER = 1011;

    /**
     * @var int
     */
    const MYSQL_ATTR_SSL_KEY = 1007;

    /**
     * @var int
     */
    const MYSQL_ATTR_SSL_VERIFY_SERVER_CERT = 1014;

    /**
     * @var int
     */
    const MYSQL_ATTR_USE_BUFFERED_QUERY = 1000;

    /**
     * @var int
     */
    const NULL_EMPTY_STRING = 1;

    /**
     * @var int
     */
    const NULL_NATURAL = 0;

    /**
     * @var int
     */
    const NULL_TO_STRING = 2;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const ODBC_ATTR_ASSUME_UTF8 = 1001;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const ODBC_ATTR_USE_CURSOR_LIBRARY = 1000;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const ODBC_SQL_USE_DRIVER = 2;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const ODBC_SQL_USE_IF_NEEDED = 0;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const ODBC_SQL_USE_ODBC = 1;

    /**
     * @var int
     */
    const PARAM_BOOL = 5;

    /**
     * @var int
     */
    const PARAM_EVT_ALLOC = 0;

    /**
     * @var int
     */
    const PARAM_EVT_EXEC_POST = 3;

    /**
     * @var int
     */
    const PARAM_EVT_EXEC_PRE = 2;

    /**
     * @var int
     */
    const PARAM_EVT_FETCH_POST = 5;

    /**
     * @var int
     */
    const PARAM_EVT_FETCH_PRE = 4;

    /**
     * @var int
     */
    const PARAM_EVT_FREE = 1;

    /**
     * @var int
     */
    const PARAM_EVT_NORMALIZE = 6;

    /**
     * @var float
     */
    const PARAM_INPUT_OUTPUT = 2147483648;

    /**
     * @var int
     */
    const PARAM_INT = 1;

    /**
     * @var int
     */
    const PARAM_LOB = 3;

    /**
     * @var int
     */
    const PARAM_NULL = 0;

    /**
     * @var int
     */
    const PARAM_STMT = 4;

    /**
     * @var int
     */
    const PARAM_STR = 2;

    /**
     * @var int
     */
    const PARAM_STR_CHAR = 536870912;

    /**
     * @var int
     */
    const PARAM_STR_NATL = 1073741824;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const PGSQL_ATTR_DISABLE_PREPARES = 1000;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const PGSQL_TRANSACTION_ACTIVE = 1;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const PGSQL_TRANSACTION_IDLE = 0;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const PGSQL_TRANSACTION_INERROR = 3;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const PGSQL_TRANSACTION_INTRANS = 2;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const PGSQL_TRANSACTION_UNKNOWN = 4;

    /**
     * @var int
     */
    const SQLITE_DETERMINISTIC = 2048;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const SQLSRV_ATTR_CLIENT_BUFFER_MAX_KB_SIZE = 1004;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const SQLSRV_ATTR_CURSOR_SCROLL_TYPE = 1003;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const SQLSRV_ATTR_DIRECT_QUERY = 1002;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const SQLSRV_ATTR_ENCODING = 1000;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const SQLSRV_ATTR_FETCHES_NUMERIC_TYPE = 1005;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const SQLSRV_ATTR_QUERY_TIMEOUT = 1001;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const SQLSRV_CURSOR_BUFFERED = 42;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const SQLSRV_CURSOR_DYNAMIC = 2;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const SQLSRV_CURSOR_KEYSET = 1;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const SQLSRV_CURSOR_STATIC = 3;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const SQLSRV_ENCODING_BINARY = 2;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const SQLSRV_ENCODING_DEFAULT = 1;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const SQLSRV_ENCODING_SYSTEM = 3;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const SQLSRV_ENCODING_UTF8 = 65001;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const SQLSRV_PARAM_OUT_DEFAULT_SIZE = -1;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var string
     */
    const SQLSRV_TXN_READ_COMMITTED = 'READ_COMMITTED';

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var string
     */
    const SQLSRV_TXN_READ_UNCOMMITTED = 'READ_UNCOMMITTED';

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var string
     */
    const SQLSRV_TXN_REPEATABLE_READ = 'REPEATABLE_READ';

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var string
     */
    const SQLSRV_TXN_SERIALIZABLE = 'SERIALIZABLE';

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var string
     */
    const SQLSRV_TXN_SNAPSHOT = 'SNAPSHOT';

    /**
     * Creates a PDO instance representing a connection to a database
     *
     * @param mixed $dsn
     * @param mixed|null $username
     * @param mixed|null $passwd
     * @param mixed|null $options
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdo.construct.php
     */
    public function __construct($dsn, $username = null, $passwd = null, $options = null)
    {
    }

    /**
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 1.0.0
     */
    final public function __sleep()
    {
    }

    /**
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 1.0.0
     */
    final public function __wakeup()
    {
    }

    /**
     * Initiates a transaction
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdo.begintransaction.php
     */
    public function beginTransaction(): bool
    {
    }

    /**
     * Commits a transaction
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdo.commit.php
     */
    public function commit(): bool
    {
    }

    /**
     * Fetch the SQLSTATE associated with the last operation on the database handle
     *
     * @return string
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdo.errorcode.php
     */
    public function errorCode(): string
    {
    }

    /**
     * Fetch extended error information associated with the last operation on the database handle
     *
     * @return array
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdo.errorinfo.php
     */
    public function errorInfo(): array
    {
    }

    /**
     * Execute an SQL statement and return the number of affected rows
     *
     * @param mixed $query
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdo.exec.php
     */
    public function exec($query): int
    {
    }

    /**
     * Retrieve a database connection attribute
     *
     * @param mixed $attribute
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0
     *
     * @link http://www.php.net/manual/en/pdo.getattribute.php
     */
    public function getAttribute($attribute)
    {
    }

    /**
     * Return an array of available PDO drivers
     *
     * @return array
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 1.0.3
     *
     * @link http://www.php.net/manual/en/pdo.getavailabledrivers.php
     */
    public static function getAvailableDrivers(): array
    {
    }

    /**
     * Checks if inside a transaction
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.3, Bundled pdo_pgsql, PHP 7
     *
     * @link http://www.php.net/manual/en/pdo.intransaction.php
     */
    public function inTransaction(): bool
    {
    }

    /**
     * Returns the ID of the last inserted row or sequence value
     *
     * @param mixed|null $seqname
     *
     * @return string
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdo.lastinsertid.php
     */
    public function lastInsertId($seqname = null): string
    {
    }

    /**
     * Prepares a statement for execution and returns a statement object
     *
     * @param mixed $statement
     * @param mixed|null $options
     *
     * @return PDOStatement
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdo.prepare.php
     */
    public function prepare($statement, $options = null): PDOStatement
    {
    }

    /**
     * Executes an SQL statement, returning a result set as a PDOStatement object
     *
     * @return PDOStatement
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0
     *
     * @link http://www.php.net/manual/en/pdo.query.php
     */
    public function query(): PDOStatement
    {
    }

    /**
     * Quotes a string for use in a query
     *
     * @param mixed $string
     * @param mixed|null $paramtype
     *
     * @return string
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.1
     *
     * @link http://www.php.net/manual/en/pdo.quote.php
     */
    public function quote($string, $paramtype = null): string
    {
    }

    /**
     * Rolls back a transaction
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdo.rollback.php
     */
    public function rollBack(): bool
    {
    }

    /**
     * Set an attribute
     *
     * @param mixed $attribute
     * @param mixed $value
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdo.setattribute.php
     */
    public function setAttribute($attribute, $value): bool
    {
    }
}

/**
 * Represents an error raised by PDO. You should not throw a
 * <code>PDOException</code> from your own code.
 * See Exceptions for more
 * information about Exceptions in PHP.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.php#class.pdoexception
 */
class PDOException extends RuntimeException
{
}

final class PDORow
{
}

/**
 * Represents a prepared statement and, after the statement is executed, an
 * associated result set.
 *
 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 1.0.0
 *
 * @link http://www.php.net/manual/en/class.pdostatement.php
 */
class PDOStatement implements Traversable
{
    /**
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 1.0.0
     */
    final public function __sleep()
    {
    }

    /**
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 1.0.0
     */
    final public function __wakeup()
    {
    }

    /**
     * Bind a column to a PHP variable
     *
     * @param mixed $column
     * @param mixed $param
     * @param mixed|null $type
     * @param mixed|null $maxlen
     * @param mixed|null $driverdata
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdostatement.bindcolumn.php
     */
    public function bindColumn($column, &$param, $type = null, $maxlen = null, $driverdata = null): bool
    {
    }

    /**
     * Binds a parameter to the specified variable name
     *
     * @param mixed $paramno
     * @param mixed $param
     * @param mixed|null $type
     * @param mixed|null $maxlen
     * @param mixed|null $driverdata
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdostatement.bindparam.php
     */
    public function bindParam($paramno, &$param, $type = null, $maxlen = null, $driverdata = null): bool
    {
    }

    /**
     * Binds a value to a parameter
     *
     * @param mixed $paramno
     * @param mixed $param
     * @param mixed|null $type
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 1.0.0
     *
     * @link http://www.php.net/manual/en/pdostatement.bindvalue.php
     */
    public function bindValue($paramno, $param, $type = null): bool
    {
    }

    /**
     * Closes the cursor, enabling the statement to be executed again
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.9.0
     *
     * @link http://www.php.net/manual/en/pdostatement.closecursor.php
     */
    public function closeCursor(): bool
    {
    }

    /**
     * Returns the number of columns in the result set
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0
     *
     * @link http://www.php.net/manual/en/pdostatement.columncount.php
     */
    public function columnCount(): int
    {
    }

    /**
     * Dump an SQL prepared command
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.9.0
     *
     * @link http://www.php.net/manual/en/pdostatement.debugdumpparams.php
     */
    public function debugDumpParams(): void
    {
    }

    /**
     * Fetch the SQLSTATE associated with the last operation on the statement handle
     *
     * @return string
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdostatement.errorcode.php
     */
    public function errorCode(): string
    {
    }

    /**
     * Fetch extended error information associated with the last operation on the statement handle
     *
     * @return array
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdostatement.errorinfo.php
     */
    public function errorInfo(): array
    {
    }

    /**
     * Executes a prepared statement
     *
     * @param mixed|null $bound_input_params
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdostatement.execute.php
     */
    public function execute($bound_input_params = null): bool
    {
    }

    /**
     * Fetches the next row from a result set
     *
     * @param mixed|null $how
     * @param mixed|null $orientation
     * @param mixed|null $offset
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdostatement.fetch.php
     */
    public function fetch($how = null, $orientation = null, $offset = null)
    {
    }

    /**
     * Returns an array containing all of the result set rows
     *
     * @param mixed|null $how
     * @param mixed|null $class_name
     * @param mixed|null $ctor_args
     *
     * @return array
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdostatement.fetchall.php
     */
    public function fetchAll($how = null, $class_name = null, $ctor_args = null): array
    {
    }

    /**
     * Returns a single column from the next row of a result set
     *
     * @param mixed|null $column_number
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.9.0
     *
     * @link http://www.php.net/manual/en/pdostatement.fetchcolumn.php
     */
    public function fetchColumn($column_number = null)
    {
    }

    /**
     * Fetches the next row and returns it as an object
     *
     * @param mixed|null $class_name
     * @param mixed|null $ctor_args
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.4
     *
     * @link http://www.php.net/manual/en/pdostatement.fetchobject.php
     */
    public function fetchObject($class_name = null, $ctor_args = null)
    {
    }

    /**
     * Retrieve a statement attribute
     *
     * @param mixed $attribute
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0
     *
     * @link http://www.php.net/manual/en/pdostatement.getattribute.php
     */
    public function getAttribute($attribute)
    {
    }

    /**
     * Returns metadata for a column in a result set
     *
     * @param mixed $column
     *
     * @return array
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0
     *
     * @link http://www.php.net/manual/en/pdostatement.getcolumnmeta.php
     */
    public function getColumnMeta($column): array
    {
    }

    /**
     * Advances to the next rowset in a multi-rowset statement handle
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0
     *
     * @link http://www.php.net/manual/en/pdostatement.nextrowset.php
     */
    public function nextRowset(): bool
    {
    }

    /**
     * Returns the number of rows affected by the last SQL statement
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdostatement.rowcount.php
     */
    public function rowCount(): int
    {
    }

    /**
     * Set a statement attribute
     *
     * @param mixed $attribute
     * @param mixed $value
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0
     *
     * @link http://www.php.net/manual/en/pdostatement.setattribute.php
     */
    public function setAttribute($attribute, $value): bool
    {
    }

    /**
     * Set the default fetch mode for this statement
     *
     * @param mixed $mode
     * @param mixed|null $params
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0
     *
     * @link http://www.php.net/manual/en/pdostatement.setfetchmode.php
     */
    public function setFetchMode($mode, $params = null): bool
    {
    }
}

/**
 * Return an array of available PDO drivers
 *
 * @return array
 *
 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.9.0
 *
 * @link http://www.php.net/manual/en/pdo.getavailabledrivers.php
 */
function pdo_drivers(): array
{
}
