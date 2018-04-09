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
     * @param string $dsn
     * @param string $username
     * @param string $passwd
     * @param array $options
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdo.construct.php
     */
    public function __construct(string $dsn, string $username = null, string $passwd = null, array $options = null)
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
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @return string Returns an SQLSTATE, a five characters alphanumeric identifier defined in
     * the ANSI SQL-92 standard. Briefly, an SQLSTATE consists of a
     * two characters class value followed by a three characters subclass value. A
     * class value of 01 indicates a warning and is accompanied by a return code
     * of SQL_SUCCESS_WITH_INFO. Class values other than '01', except for the
     * class 'IM', indicate an error. The class 'IM' is specific to warnings
     * and errors that derive from the implementation of PDO (or perhaps ODBC,
     * if you're using the ODBC driver) itself. The subclass value '000' in any
     * class indicates that there is no subclass for that SQLSTATE.
     * <code>PDO::errorCode</code> only retrieves error codes for operations
     * performed directly on the database handle. If you create a PDOStatement
     * object through <code>PDO::prepare</code> or
     * <code>PDO::query</code> and invoke an error on the statement
     * handle, <code>PDO::errorCode</code> will not reflect that error.
     * You must call <code>PDOStatement::errorCode</code> to return the error
     * code for an operation performed on a particular statement handle.
     * Returns <code>NULL</code> if no operation has been run on the database handle.
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
     * @return array <code>PDO::errorInfo</code> returns an array of error information
     * about the last operation performed by this database handle. The array
     * consists of the following fields:
     * <table>
     * <thead>
     * <tr>
     * <td>Element</td><td>Information</td>
     * </tr>
     * </thead>
     * <tbody>
     * <tr>
     * <td>0</td><td>SQLSTATE error code (a five characters alphanumeric identifier defined
     * in the ANSI SQL standard).</td>
     * </tr>
     * <tr>
     * <td>1</td><td>Driver-specific error code.</td>
     * </tr>
     * <tr>
     * <td>2</td><td>Driver-specific error message.</td>
     * </tr>
     * </tbody>
     * </table>
     * <code>PDO::errorInfo</code> only retrieves error information for
     * operations performed directly on the database handle. If you create a
     * PDOStatement object through <code>PDO::prepare</code> or
     * <code>PDO::query</code> and invoke an error on the statement
     * handle, <code>PDO::errorInfo</code> will not reflect the error
     * from the statement handle. You must call
     * <code>PDOStatement::errorInfo</code> to return the error
     * information for an operation performed on a particular statement handle.
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
     * @param string $statement The SQL statement to prepare and execute.
     *
     * @return int <code>PDO::exec</code> returns the number of rows that were modified
     * or deleted by the SQL statement you issued. If no rows were affected,
     * <code>PDO::exec</code> returns <code>0</code>.
     * The following example incorrectly relies on the return value of
     * <code>PDO::exec</code>, wherein a statement that affected 0 rows
     * results in a call to <code>die</code>:
     * <blockquote><pre>
     * &lt;?php
     * $db-&gt;exec() or die(print_r($db-&gt;errorInfo(), true)); // incorrect
     * ?&gt;
     * </pre></blockquote>
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdo.exec.php
     */
    public function exec(string $statement): int
    {
    }

    /**
     * Retrieve a database connection attribute
     *
     * @param int $attribute One of the <code>PDO::ATTR_*</code> constants. The constants that
     * apply to database connections are as follows:
     * <ul>
     * <li><code>PDO::ATTR_AUTOCOMMIT</code></li>
     * <li><code>PDO::ATTR_CASE</code></li>
     * <li><code>PDO::ATTR_CLIENT_VERSION</code></li>
     * <li><code>PDO::ATTR_CONNECTION_STATUS</code></li>
     * <li><code>PDO::ATTR_DRIVER_NAME</code></li>
     * <li><code>PDO::ATTR_ERRMODE</code></li>
     * <li><code>PDO::ATTR_ORACLE_NULLS</code></li>
     * <li><code>PDO::ATTR_PERSISTENT</code></li>
     * <li><code>PDO::ATTR_PREFETCH</code></li>
     * <li><code>PDO::ATTR_SERVER_INFO</code></li>
     * <li><code>PDO::ATTR_SERVER_VERSION</code></li>
     * <li><code>PDO::ATTR_TIMEOUT</code></li>
     * </ul>
     *
     * @return mixed A successful call returns the value of the requested PDO attribute.
     * An unsuccessful call returns <code>null</code>.
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0
     *
     * @link http://www.php.net/manual/en/pdo.getattribute.php
     */
    public function getAttribute(int $attribute)
    {
    }

    /**
     * Return an array of available PDO drivers
     *
     * @return array <code>PDO::getAvailableDrivers</code> returns an array of PDO driver names. If
     * no drivers are available, it returns an empty array.
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
     * @return bool Returns <code>TRUE</code> if a transaction is currently active, and <code>FALSE</code> if not.
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
     * @param string|null $name Name of the sequence object from which the ID should be returned.
     *
     * @return string If a sequence name was not specified for the <code>name</code>
     * parameter, <code>PDO::lastInsertId</code> returns a
     * string representing the row ID of the last row that was inserted into
     * the database.
     * If a sequence name was specified for the <code>name</code>
     * parameter, <code>PDO::lastInsertId</code> returns a
     * string representing the last value retrieved from the specified sequence
     * object.
     * If the PDO driver does not support this capability,
     * <code>PDO::lastInsertId</code> triggers an
     * <code>IM001</code> SQLSTATE.
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdo.lastinsertid.php
     */
    public function lastInsertId(string $name = null): string
    {
    }

    /**
     * Prepares a statement for execution and returns a statement object
     *
     * @param string $statement This must be a valid SQL statement template for the target database server.
     * @param array|null $driver_options This array holds one or more key=&gt;value pairs to set
     * attribute values for the PDOStatement object that this method
     * returns. You would most commonly use this to set the
     * <code>PDO::ATTR_CURSOR</code> value to
     * <code>PDO::CURSOR_SCROLL</code> to request a scrollable cursor.
     * Some drivers have driver specific options that may be set at
     * prepare-time.
     *
     * @return PDOStatement If the database server successfully prepares the statement,
     * <code>PDO::prepare</code> returns a
     * <code>PDOStatement</code> object.
     * If the database server cannot successfully prepare the statement,
     * <code>PDO::prepare</code> returns <code>FALSE</code> or emits
     * <code>PDOException</code> (depending on error handling).
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdo.prepare.php
     */
    public function prepare(string $statement, array $driver_options = /* array() */ null): PDOStatement
    {
    }

    /**
     * Executes an SQL statement, returning a result set as a PDOStatement object
     *
     * @return PDOStatement <code>PDO::query</code> returns a PDOStatement object, or <code>FALSE</code>
     * on failure.
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
     * @param string $string The string to be quoted.
     * @param int|null $parameter_type Provides a data type hint for drivers that have alternate quoting styles.
     *
     * @return string Returns a quoted string that is theoretically safe to pass into an
     * SQL statement. Returns <code>FALSE</code> if the driver does not support quoting in
     * this way.
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.1
     *
     * @link http://www.php.net/manual/en/pdo.quote.php
     */
    public function quote(string $string, int $parameter_type = PDO::PARAM_STR): string
    {
    }

    /**
     * Rolls back a transaction
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @param int $attribute
     * @param mixed $value
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdo.setattribute.php
     */
    public function setAttribute(int $attribute, $value): bool
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
    /**
     * @var mixed
     */
    public $errorInfo;
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
     * @var mixed
     */
    public $queryString;

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
     * @param mixed $column Number of the column (1-indexed) or name of the column in the result set.
     * If using the column name, be aware that the name should match the
     * case of the column, as returned by the driver.
     * @param mixed $param Name of the PHP variable to which the column will be bound.
     * @param int $type Data type of the parameter, specified by the <code>PDO::PARAM_*</code>
     * constants.
     * @param int $maxlen A hint for pre-allocation.
     * @param mixed $driverdata Optional parameter(s) for the driver.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdostatement.bindcolumn.php
     */
    public function bindColumn($column, &$param, int $type = null, int $maxlen = null, $driverdata = null): bool
    {
    }

    /**
     * Binds a parameter to the specified variable name
     *
     * @param mixed $parameter Parameter identifier. For a prepared statement using named
     * placeholders, this will be a parameter name of the form
     * <code>:name</code>. For a prepared statement using
     * question mark placeholders, this will be the 1-indexed position of
     * the parameter.
     * @param mixed $variable Name of the PHP variable to bind to the SQL statement parameter.
     * @param int|null $data_type Explicit data type for the parameter using the <code>PDO::PARAM_*</code>
     * constants.
     * To return an INOUT parameter from a stored procedure,
     * use the bitwise OR operator to set the PDO::PARAM_INPUT_OUTPUT bits
     * for the <code>data_type</code> parameter.
     * @param int $length Length of the data type. To indicate that a parameter is an OUT
     * parameter from a stored procedure, you must explicitly set the
     * length.
     * @param mixed $driver_options
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdostatement.bindparam.php
     */
    public function bindParam($parameter, &$variable, int $data_type = PDO::PARAM_STR, int $length = null, $driver_options = null): bool
    {
    }

    /**
     * Binds a value to a parameter
     *
     * @param mixed $parameter Parameter identifier. For a prepared statement using named
     * placeholders, this will be a parameter name of the form
     * <code>:name</code>. For a prepared statement using
     * question mark placeholders, this will be the 1-indexed position of
     * the parameter.
     * @param mixed $value The value to bind to the parameter.
     * @param int|null $data_type Explicit data type for the parameter using the <code>PDO::PARAM_*</code>
     * constants.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 1.0.0
     *
     * @link http://www.php.net/manual/en/pdostatement.bindvalue.php
     */
    public function bindValue($parameter, $value, int $data_type = PDO::PARAM_STR): bool
    {
    }

    /**
     * Closes the cursor, enabling the statement to be executed again
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @return int Returns the number of columns in the result set represented by the
     * PDOStatement object, even if the result set is empty. If there is no result set,
     * <code>PDOStatement::columnCount</code> returns <code>0</code>.
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
     * @return void No value is returned.
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
     * @return string Identical to <code>PDO::errorCode</code>, except that
     * <code>PDOStatement::errorCode</code> only retrieves error codes
     * for operations performed with PDOStatement objects.
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
     * @return array <code>PDOStatement::errorInfo</code> returns an array of
     * error information about the last operation performed by this
     * statement handle. The array consists of the following fields:
     * <table>
     * <thead>
     * <tr>
     * <td>Element</td><td>Information</td>
     * </tr>
     * </thead>
     * <tbody>
     * <tr>
     * <td>0</td><td>SQLSTATE error code (a five characters alphanumeric identifier defined
     * in the ANSI SQL standard).</td>
     * </tr>
     * <tr>
     * <td>1</td><td>Driver specific error code.</td>
     * </tr>
     * <tr>
     * <td>2</td><td>Driver specific error message.</td>
     * </tr>
     * </tbody>
     * </table>
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
     * @param array $input_parameters An array of values with as many elements as there are bound
     * parameters in the SQL statement being executed.
     * All values are treated as <code>PDO::PARAM_STR</code>.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdostatement.execute.php
     */
    public function execute(array $input_parameters = null): bool
    {
    }

    /**
     * Fetches the next row from a result set
     *
     * @param int $fetch_style Controls how the next row will be returned to the caller. This value
     * must be one of the <code>PDO::FETCH_*</code> constants,
     * defaulting to value of <code>PDO::ATTR_DEFAULT_FETCH_MODE</code>
     * (which defaults to <code>PDO::FETCH_BOTH</code>).
     * <ul>
     * <code>PDO::FETCH_ASSOC</code>: returns an array indexed by column
     * name as returned in your result set
     * <code>PDO::FETCH_BOTH</code> (default): returns an array indexed by
     * both column name and 0-indexed column number as returned in your
     * result set
     * <code>PDO::FETCH_BOUND</code>: returns <code>TRUE</code> and assigns the
     * values of the columns in your result set to the PHP variables to which
     * they were bound with the <code>PDOStatement::bindColumn</code>
     * method
     * <code>PDO::FETCH_CLASS</code>: returns a new instance of the
     * requested class, mapping the columns of the result set to named
     * properties in the class, and calling the constructor afterwards, unless
     * <code>PDO::FETCH_PROPS_LATE</code> is also given.
     * If <code>fetch_style</code>
     * includes PDO::FETCH_CLASSTYPE (e.g. <code>PDO::FETCH_CLASS |
     * PDO::FETCH_CLASSTYPE</code>) then the name of the class is
     * determined from a value of the first column.
     * <code>PDO::FETCH_INTO</code>: updates an existing instance
     * of the requested class, mapping the columns of the result set to
     * named properties in the class
     * <code>PDO::FETCH_LAZY</code>: combines
     * <code>PDO::FETCH_BOTH</code> and <code>PDO::FETCH_OBJ</code>,
     * creating the object variable names as they are accessed
     * <code>PDO::FETCH_NAMED</code>: returns an array with the same
     * form as <code>PDO::FETCH_ASSOC</code>, except that if there are
     * multiple columns with the same name, the value referred to by that
     * key will be an array of all the values in the row that had that
     * column name
     * <code>PDO::FETCH_NUM</code>: returns an array indexed by column
     * number as returned in your result set, starting at column 0
     * <code>PDO::FETCH_OBJ</code>: returns an anonymous object with
     * property names that correspond to the column names returned in your
     * result set
     * <code>PDO::FETCH_PROPS_LATE</code>: when used with
     * <code>PDO::FETCH_CLASS</code>, the constructor of the class is
     * called before the properties are assigned from the respective column
     * values.
     * </ul>
     * @param int|null $cursor_orientation For a PDOStatement object representing a scrollable cursor, this
     * value determines which row will be returned to the caller. This value
     * must be one of the <code>PDO::FETCH_ORI_*</code> constants,
     * defaulting to <code>PDO::FETCH_ORI_NEXT</code>. To request a
     * scrollable cursor for your PDOStatement object, you must set the
     * <code>PDO::ATTR_CURSOR</code> attribute to
     * <code>PDO::CURSOR_SCROLL</code> when you prepare the SQL
     * statement with <code>PDO::prepare</code>.
     * @param int|null $cursor_offset
     *
     * @return mixed The return value of this function on success depends on the fetch type. In
     * all cases, <code>FALSE</code> is returned on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdostatement.fetch.php
     */
    public function fetch(int $fetch_style = null, int $cursor_orientation = PDO::FETCH_ORI_NEXT, int $cursor_offset = 0)
    {
    }

    /**
     * Returns an array containing all of the result set rows
     *
     * @param int $fetch_style Controls the contents of the returned array as documented in
     * <code>PDOStatement::fetch</code>.
     * Defaults to value of <code>PDO::ATTR_DEFAULT_FETCH_MODE</code>
     * (which defaults to <code>PDO::FETCH_BOTH</code>)
     * @param mixed $fetch_argument This argument has a different meaning depending on the value of
     * the <code>fetch_style</code> parameter:
     * <ul>
     * <code>PDO::FETCH_COLUMN</code>: Returns the indicated 0-indexed
     * column.
     * <code>PDO::FETCH_CLASS</code>: Returns instances of the specified
     * class, mapping the columns of each row to named properties in the class.
     * <code>PDO::FETCH_FUNC</code>: Returns the results of calling the
     * specified function, using each row's columns as parameters in the call.
     * </ul>
     * @param array|null $ctor_args Arguments of custom class constructor when the <code>fetch_style</code>
     * parameter is <code>PDO::FETCH_CLASS</code>.
     *
     * @return array <code>PDOStatement::fetchAll</code> returns an array containing
     * all of the remaining rows in the result set. The array represents each
     * row as either an array of column values or an object with properties
     * corresponding to each column name. An empty array is returned if there
     * are zero results to fetch, or <code>FALSE</code> on failure.
     * Using this method to fetch large result sets will result in a heavy
     * demand on system and possibly network resources. Rather than retrieving
     * all of the data and manipulating it in PHP, consider using the database
     * server to manipulate the result sets. For example, use the WHERE and
     * ORDER BY clauses in SQL to restrict results before retrieving and
     * processing them with PHP.
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
     *
     * @link http://www.php.net/manual/en/pdostatement.fetchall.php
     */
    public function fetchAll(int $fetch_style = null, $fetch_argument = null, array $ctor_args = /* array() */ null): array
    {
    }

    /**
     * Returns a single column from the next row of a result set
     *
     * @param int|null $column_number 0-indexed number of the column you wish to retrieve from the row. If
     * no value is supplied, <code>PDOStatement::fetchColumn</code>
     * fetches the first column.
     *
     * @return mixed <code>PDOStatement::fetchColumn</code> returns a single column
     * from the next row of a result set or <code>FALSE</code> if there are no more rows.
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.9.0
     *
     * @link http://www.php.net/manual/en/pdostatement.fetchcolumn.php
     */
    public function fetchColumn(int $column_number = 0)
    {
    }

    /**
     * Fetches the next row and returns it as an object
     *
     * @param string|null $class_name Name of the created class.
     * @param array $ctor_args Elements of this array are passed to the constructor.
     *
     * @return mixed Returns an instance of the required class with property names that
     * correspond to the column names or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.4
     *
     * @link http://www.php.net/manual/en/pdostatement.fetchobject.php
     */
    public function fetchObject(string $class_name = "stdClass", array $ctor_args = null)
    {
    }

    /**
     * Retrieve a statement attribute
     *
     * @param int $attribute
     *
     * @return mixed Returns the attribute value.
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0
     *
     * @link http://www.php.net/manual/en/pdostatement.getattribute.php
     */
    public function getAttribute(int $attribute)
    {
    }

    /**
     * Returns metadata for a column in a result set
     *
     * @param int $column The 0-indexed column in the result set.
     *
     * @return array Returns an associative array containing the following values representing
     * the metadata for a single column:
     * Returns <code>FALSE</code> if the requested column does not exist in the result set,
     * or if no result set exists.
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0
     *
     * @link http://www.php.net/manual/en/pdostatement.getcolumnmeta.php
     */
    public function getColumnMeta(int $column): array
    {
    }

    /**
     * Advances to the next rowset in a multi-rowset statement handle
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @return int Returns the number of rows.
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
     * @param int $attribute
     * @param mixed $value
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0
     *
     * @link http://www.php.net/manual/en/pdostatement.setattribute.php
     */
    public function setAttribute(int $attribute, $value): bool
    {
    }

    /**
     * Set the default fetch mode for this statement
     *
     * @param int $mode The fetch mode must be one of the <code>PDO::FETCH_*</code> constants.
     * @param mixed $params
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0
     *
     * @link http://www.php.net/manual/en/pdostatement.setfetchmode.php
     */
    public function setFetchMode(int $mode, $params = null): bool
    {
    }
}

/**
 * Return an array of available PDO drivers
 *
 * @return array <code>PDO::getAvailableDrivers</code> returns an array of PDO driver names. If
 * no drivers are available, it returns an empty array.
 *
 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.9.0
 *
 * @link http://www.php.net/manual/en/pdo.getavailabledrivers.php
 */
function pdo_drivers(): array
{
}
