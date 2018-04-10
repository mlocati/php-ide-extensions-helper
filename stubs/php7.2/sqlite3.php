<?php
// Start of extension: sqlite3
// - parsed on POSIX with PHP 7.2.4 (extension version 7.2.4)
// - parsed on Windows with PHP 7.2.4 (extension version 7.2.4)

/**
 * Specifies that the <code>Sqlite3Result::fetchArray</code>
 * method shall return an array indexed by column name as returned in the
 * corresponding result set.
 *
 * @link http://www.php.net/manual/en/sqlite3.constants.php#constant.sqlite3-assoc
 *
 * @var int
 */
const SQLITE3_ASSOC = 1;

/**
 * Represents the SQLite3 BLOB storage class.
 *
 * @link http://www.php.net/manual/en/sqlite3.constants.php#constant.sqlite3-blob
 *
 * @var int
 */
const SQLITE3_BLOB = 4;

/**
 * Specifies that the <code>Sqlite3Result::fetchArray</code>
 * method shall return an array indexed by both column name and number as
 * returned in the corresponding result set, starting at column 0.
 *
 * @link http://www.php.net/manual/en/sqlite3.constants.php#constant.sqlite3-both
 *
 * @var int
 */
const SQLITE3_BOTH = 3;

/**
 * Specifies that a function created with <code>SQLite3::createFunction</code>
 * is deterministic, i.e. it always returns the same result given the same inputs within
 * a single SQL statement. (Available as of PHP 7.1.4.)
 *
 * @link http://www.php.net/manual/en/sqlite3.constants.php#constant.sqlite3-deterministic
 *
 * @var int
 */
const SQLITE3_DETERMINISTIC = 2048;

/**
 * Represents the SQLite3 REAL (FLOAT) storage class.
 *
 * @link http://www.php.net/manual/en/sqlite3.constants.php#constant.sqlite3-float
 *
 * @var int
 */
const SQLITE3_FLOAT = 2;

/**
 * Represents the SQLite3 INTEGER storage class.
 *
 * @link http://www.php.net/manual/en/sqlite3.constants.php#constant.sqlite3-integer
 *
 * @var int
 */
const SQLITE3_INTEGER = 1;

/**
 * Represents the SQLite3 NULL storage class.
 *
 * @link http://www.php.net/manual/en/sqlite3.constants.php#constant.sqlite3-null
 *
 * @var int
 */
const SQLITE3_NULL = 5;

/**
 * Specifies that the <code>Sqlite3Result::fetchArray</code>
 * method shall return an array indexed by column number as returned in the
 * corresponding result set, starting at column 0.
 *
 * @link http://www.php.net/manual/en/sqlite3.constants.php#constant.sqlite3-num
 *
 * @var int
 */
const SQLITE3_NUM = 2;

/**
 * Specifies that the SQLite3 database be created if it does not already
 * exist.
 *
 * @link http://www.php.net/manual/en/sqlite3.constants.php#constant.sqlite3-open-create
 *
 * @var int
 */
const SQLITE3_OPEN_CREATE = 4;

/**
 * Specifies that the SQLite3 database be opened for reading only.
 *
 * @link http://www.php.net/manual/en/sqlite3.constants.php#constant.sqlite3-open-readonly
 *
 * @var int
 */
const SQLITE3_OPEN_READONLY = 1;

/**
 * Specifies that the SQLite3 database be opened for reading and writing.
 *
 * @link http://www.php.net/manual/en/sqlite3.constants.php#constant.sqlite3-open-readwrite
 *
 * @var int
 */
const SQLITE3_OPEN_READWRITE = 2;

/**
 * Represents the SQLite3 TEXT storage class.
 *
 * @link http://www.php.net/manual/en/sqlite3.constants.php#constant.sqlite3-text
 *
 * @var int
 */
const SQLITE3_TEXT = 3;

/**
 * A class that interfaces SQLite 3 databases.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.sqlite3.php
 */
class SQLite3
{
    /**
     * Instantiates an SQLite3 object and opens an SQLite 3 database
     *
     * @param mixed $filename
     * @param mixed $flags
     * @param mixed $encryption_key
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.construct.php
     */
    public function __construct($filename, $flags = null, $encryption_key = null)
    {
    }

    /**
     * Sets the busy connection handler
     *
     * @param int $msecs The milliseconds to sleep. Setting this value to a value less than
     * or equal to zero, will turn off an already set timeout handler.
     *
     * @return bool Returns <code>TRUE</code> on success, <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.3, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.busytimeout.php
     */
    public function busyTimeout(int $msecs): bool
    {
    }

    /**
     * Returns the number of database rows that were changed (or inserted or
     * deleted) by the most recent SQL statement
     *
     * @return int Returns an <code>integer</code> value corresponding to the number of
     * database rows changed (or inserted or deleted) by the most recent SQL
     * statement.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.changes.php
     */
    public function changes(): int
    {
    }

    /**
     * Closes the database connection
     *
     * @return bool Returns <code>TRUE</code> on success, <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.close.php
     */
    public function close(): bool
    {
    }

    /**
     * Registers a PHP function for use as an SQL aggregate function
     *
     * @param string $name Name of the SQL aggregate to be created or redefined.
     * @param mixed $step_callback The name of a PHP function or user-defined function to apply as a
     * callback for every item in the aggregate.
     * @param mixed $final_callback The name of a PHP function or user-defined function to apply as a
     * callback at the end of the aggregate data.
     * @param int|null $argument_count The number of arguments that the SQL aggregate takes. If
     * this parameter is negative, then the SQL aggregate may take
     * any number of arguments.
     *
     * @return bool Returns <code>TRUE</code> upon successful creation of the aggregate, <code>FALSE</code> on
     * failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.createaggregate.php
     */
    public function createAggregate(string $name, $step_callback, $final_callback, int $argument_count = -1): bool
    {
    }

    /**
     * Registers a PHP function for use as an SQL collating function
     *
     * @param string $name Name of the SQL collating function to be created or redefined
     * @param callable $callback The name of a PHP function or user-defined function to apply as a
     * callback, defining the behavior of the collation. It should accept two
     * strings and return as <code>strcmp</code> does, i.e. it should
     * return -1, 1, or 0 if the first string sorts before, sorts after, or is
     * equal to the second.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.11, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.createcollation.php
     */
    public function createCollation(string $name, callable $callback): bool
    {
    }

    /**
     * Registers a PHP function for use as an SQL scalar function
     *
     * @param string $name Name of the SQL function to be created or redefined.
     * @param mixed $callback The name of a PHP function or user-defined function to apply as a
     * callback, defining the behavior of the SQL function.
     * @param int|null $argument_count The number of arguments that the SQL function takes. If
     * this parameter is <code>-1</code>, then the SQL function may take
     * any number of arguments.
     * @param int|null $flags A bitwise conjunction of flags. Currently, only
     * <code>SQLITE3_DETERMINISTIC</code> is supported, which specifies
     * that the function always returns the same result given the same inputs
     * within a single SQL statement.
     *
     * @return bool Returns <code>TRUE</code> upon successful creation of the function, <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.createfunction.php
     */
    public function createFunction(string $name, $callback, int $argument_count = -1, int $flags = 0): bool
    {
    }

    /**
     * Enable throwing exceptions
     *
     * @param bool|null $enableExceptions
     *
     * @return bool Returns the old value; <code>TRUE</code> if exceptions were enabled, <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.enableexceptions.php
     */
    public function enableExceptions(bool $enableExceptions = false): bool
    {
    }

    /**
     * Returns a string that has been properly escaped
     *
     * @param string $value The string to be escaped.
     *
     * @return string Returns a properly escaped string that may be used safely in an SQL
     * statement.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.escapestring.php
     */
    public static function escapeString(string $value): string
    {
    }

    /**
     * Executes a result-less query against a given database
     *
     * @param string $query The SQL query to execute (typically an INSERT, UPDATE, or DELETE
     * query).
     *
     * @return bool Returns <code>TRUE</code> if the query succeeded, <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.exec.php
     */
    public function exec(string $query): bool
    {
    }

    /**
     * Returns the numeric result code of the most recent failed SQLite request
     *
     * @return int Returns an integer value representing the numeric result code of the most
     * recent failed SQLite request.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.lasterrorcode.php
     */
    public function lastErrorCode(): int
    {
    }

    /**
     * Returns English text describing the most recent failed SQLite request
     *
     * @return string Returns an English string describing the most recent failed SQLite request.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.lasterrormsg.php
     */
    public function lastErrorMsg(): string
    {
    }

    /**
     * Returns the row ID of the most recent INSERT into the database
     *
     * @return int Returns the row ID of the most recent INSERT into the database
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.lastinsertrowid.php
     */
    public function lastInsertRowID(): int
    {
    }

    /**
     * Attempts to load an SQLite extension library
     *
     * @param string $shared_library The name of the library to load. The library must be located in the
     * directory specified in the configure option sqlite3.extension_dir.
     *
     * @return bool Returns <code>TRUE</code> if the extension is successfully loaded, <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.loadextension.php
     */
    public function loadExtension(string $shared_library): bool
    {
    }

    /**
     * Opens an SQLite database
     *
     * @param string $filename Path to the SQLite database, or <code>:memory:</code> to use in-memory database.
     * @param int|null $flags Optional flags used to determine how to open the SQLite database. By
     * default, open uses <code>SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE</code>.
     * <ul>
     * <code>SQLITE3_OPEN_READONLY</code>: Open the database for
     * reading only.
     * <code>SQLITE3_OPEN_READWRITE</code>: Open the database for
     * reading and writing.
     * <code>SQLITE3_OPEN_CREATE</code>: Create the database if it
     * does not exist.
     * </ul>
     * @param string|null $encryption_key An optional encryption key used when encrypting and decrypting an
     * SQLite database. If the SQLite encryption module is not installed,
     * this parameter will have no effect.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.open.php
     */
    public function open(string $filename, int $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE, string $encryption_key = null): void
    {
    }

    /**
     * Opens a stream resource to read a BLOB
     *
     * @param string $table The table name.
     * @param string $column The column name.
     * @param int $rowid The row ID.
     * @param string|null $dbname The symbolic name of the DB
     * @param int|null $flags Either <code>SQLITE3_OPEN_READONLY</code> or
     * <code>SQLITE3_OPEN_READWRITE</code> to open the stream
     * for reading only, or for reading and writing, respectively.
     *
     * @return resource Returns a stream resource, or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.openblob.php
     */
    public function openBlob(string $table, string $column, int $rowid, string $dbname = "main", int $flags = SQLITE3_OPEN_READONLY)
    {
    }

    /**
     * Prepares an SQL statement for execution
     *
     * @param string $query The SQL query to prepare.
     *
     * @return SQLite3Stmt Returns an <code>SQLite3Stmt</code> object on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.prepare.php
     */
    public function prepare(string $query): SQLite3Stmt
    {
    }

    /**
     * Executes an SQL query
     *
     * @param string $query The SQL query to execute.
     *
     * @return SQLite3Result Returns an <code>SQLite3Result</code> object, or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.query.php
     */
    public function query(string $query): SQLite3Result
    {
    }

    /**
     * Executes a query and returns a single result
     *
     * @param string $query The SQL query to execute.
     * @param bool|null $entire_row By default, <code>querySingle</code> returns the value of the
     * first column returned by the query. If
     * <code>entire_row</code> is <code>TRUE</code>, then it returns an array
     * of the entire first row.
     *
     * @return mixed Returns the value of the first column of results or an array of the entire
     * first row (if <code>entire_row</code> is <code>TRUE</code>).
     * If the query is valid but no results are returned, then <code>NULL</code> will be
     * returned if <code>entire_row</code> is <code>FALSE</code>, otherwise an
     * empty array is returned.
     * Invalid or failing queries will return <code>FALSE</code>.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.querysingle.php
     */
    public function querySingle(string $query, bool $entire_row = false)
    {
    }

    /**
     * Returns the SQLite3 library version as a string constant and as a number
     *
     * @return array Returns an associative array with the keys "versionString" and
     * "versionNumber".
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.version.php
     */
    public static function version(): array
    {
    }
}

/**
 * A class that handles result sets for the SQLite 3 extension.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.sqlite3result.php
 */
class SQLite3Result
{
    private function __construct()
    {
    }

    /**
     * Returns the name of the nth column
     *
     * @param int $column_number The numeric zero-based index of the column.
     *
     * @return string Returns the <code>string</code> name of the column identified by
     * <code>column_number</code>.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3result.columnname.php
     */
    public function columnName(int $column_number): string
    {
    }

    /**
     * Returns the type of the nth column
     *
     * @param int $column_number The numeric zero-based index of the column.
     *
     * @return int Returns the data type index of the column identified by
     * <code>column_number</code> (one of
     * <code>SQLITE3_INTEGER</code>, <code>SQLITE3_FLOAT</code>,
     * <code>SQLITE3_TEXT</code>, <code>SQLITE3_BLOB</code>, or
     * <code>SQLITE3_NULL</code>).
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3result.columntype.php
     */
    public function columnType(int $column_number): int
    {
    }

    /**
     * Fetches a result row as an associative or numerically indexed array or both
     *
     * @param int|null $mode Controls how the next row will be returned to the caller. This value
     * must be one of either <code>SQLITE3_ASSOC</code>,
     * <code>SQLITE3_NUM</code>, or <code>SQLITE3_BOTH</code>.
     * <ul>
     * <code>SQLITE3_ASSOC</code>: returns an array indexed by column
     * name as returned in the corresponding result set
     * <code>SQLITE3_NUM</code>: returns an array indexed by column
     * number as returned in the corresponding result set, starting at
     * column 0
     * <code>SQLITE3_BOTH</code>: returns an array indexed by both
     * column name and number as returned in the corresponding result set,
     * starting at column 0
     * </ul>
     *
     * @return array Returns a result row as an associatively or numerically indexed array or
     * both. Alternately will return <code>FALSE</code> if there are no more rows.
     * The types of the values of the returned array are mapped from SQLite3 types
     * as follows: integers are mapped to <code>integer</code> if they fit into the
     * range <code>PHP_INT_MIN</code>..<code>PHP_INT_MAX</code>, and
     * to <code>string</code> otherwise. Floats are mapped to <code>float</code>,
     * <code>NULL</code> values are mapped to <code>null</code>, and strings
     * and blobs are mapped to <code>string</code>.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3result.fetcharray.php
     */
    public function fetchArray(int $mode = SQLITE3_BOTH): array
    {
    }

    /**
     * Closes the result set
     *
     * @return bool Returns <code>TRUE</code>.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3result.finalize.php
     */
    public function finalize(): bool
    {
    }

    /**
     * Returns the number of columns in the result set
     *
     * @return int Returns the number of columns in the result set.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3result.numcolumns.php
     */
    public function numColumns(): int
    {
    }

    /**
     * Resets the result set back to the first row
     *
     * @return bool Returns <code>TRUE</code> if the result set is successfully reset
     * back to the first row, <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3result.reset.php
     */
    public function reset(): bool
    {
    }
}

/**
 * A class that handles prepared statements for the SQLite 3 extension.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.sqlite3stmt.php
 */
class SQLite3Stmt
{
    /**
     * @param mixed $sqlite3
     */
    private function __construct($sqlite3)
    {
    }

    /**
     * Binds a parameter to a statement variable
     *
     * @param mixed $sql_param Either a <code>string</code> or an <code>int</code> identifying the statement variable to which the
     * parameter should be bound.
     * @param mixed $param The parameter to bind to a statement variable.
     * @param int $type The data type of the parameter to bind.
     * <ul>
     * <code>SQLITE3_INTEGER</code>: The value is a signed integer,
     * stored in 1, 2, 3, 4, 6, or 8 bytes depending on the magnitude of
     * the value.
     * <code>SQLITE3_FLOAT</code>: The value is a floating point
     * value, stored as an 8-byte IEEE floating point number.
     * <code>SQLITE3_TEXT</code>: The value is a text string, stored
     * using the database encoding (UTF-8, UTF-16BE or UTF-16-LE).
     * <code>SQLITE3_BLOB</code>: The value is a blob of data, stored
     * exactly as it was input.
     * <code>SQLITE3_NULL</code>: The value is a NULL value.
     * </ul>
     *
     * @return bool Returns <code>TRUE</code> if the parameter is bound to the statement variable, <code>FALSE</code>
     * on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3stmt.bindparam.php
     */
    public function bindParam($sql_param, &$param, int $type = null): bool
    {
    }

    /**
     * Binds the value of a parameter to a statement variable
     *
     * @param mixed $sql_param Either a <code>string</code> or an <code>int</code> identifying the statement variable to which the
     * value should be bound.
     * @param mixed $value The value to bind to a statement variable.
     * @param int $type The data type of the value to bind.
     * <ul>
     * <code>SQLITE3_INTEGER</code>: The value is a signed integer,
     * stored in 1, 2, 3, 4, 6, or 8 bytes depending on the magnitude of
     * the value.
     * <code>SQLITE3_FLOAT</code>: The value is a floating point
     * value, stored as an 8-byte IEEE floating point number.
     * <code>SQLITE3_TEXT</code>: The value is a text string, stored
     * using the database encoding (UTF-8, UTF-16BE or UTF-16-LE).
     * <code>SQLITE3_BLOB</code>: The value is a blob of data, stored
     * exactly as it was input.
     * <code>SQLITE3_NULL</code>: The value is a NULL value.
     * </ul>
     *
     * @return bool Returns <code>TRUE</code> if the value is bound to the statement variable, <code>FALSE</code>
     * on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3stmt.bindvalue.php
     */
    public function bindValue($sql_param, $value, int $type = null): bool
    {
    }

    /**
     * Clears all current bound parameters
     *
     * @return bool Returns <code>TRUE</code> on successful clearing of bound parameters, <code>FALSE</code> on
     * failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3stmt.clear.php
     */
    public function clear(): bool
    {
    }

    /**
     * Closes the prepared statement
     *
     * @return bool Returns <code>TRUE</code>
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3stmt.close.php
     */
    public function close(): bool
    {
    }

    /**
     * Executes a prepared statement and returns a result set object
     *
     * @return SQLite3Result Returns an <code>SQLite3Result</code> object on successful execution of the prepared
     * statement, <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3stmt.execute.php
     */
    public function execute(): SQLite3Result
    {
    }

    /**
     * Returns the number of parameters within the prepared statement
     *
     * @return int Returns the number of parameters within the prepared statement.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3stmt.paramcount.php
     */
    public function paramCount(): int
    {
    }

    /**
     * Returns whether a statement is definitely read only
     *
     * @return bool Returns <code>TRUE</code> if a statement is definitely read only, <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.3.6, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3stmt.readonly.php
     */
    public function readOnly(): bool
    {
    }

    /**
     * Resets the prepared statement
     *
     * @return bool Returns <code>TRUE</code> if the statement is successfully reset, <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3stmt.reset.php
     */
    public function reset(): bool
    {
    }
}
