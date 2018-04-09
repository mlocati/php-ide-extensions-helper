<?php
// Start of extension: sqlite3
// - parsed on POSIX with PHP 7.0.28 (extension version 7.0.28)

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
     * @param mixed|null $flags
     * @param mixed|null $encryption_key
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
     * @param mixed $ms
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.3, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.busytimeout.php
     */
    public function busyTimeout($ms): bool
    {
    }

    /**
     * Returns the number of database rows that were changed (or inserted or
     * deleted) by the most recent SQL statement
     *
     * @return int
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
     * @return bool
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
     * @param mixed $name
     * @param mixed $step_callback
     * @param mixed $final_callback
     * @param mixed|null $argument_count
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.createaggregate.php
     */
    public function createAggregate($name, $step_callback, $final_callback, $argument_count = null): bool
    {
    }

    /**
     * Registers a PHP function for use as an SQL collating function
     *
     * @param mixed $name
     * @param mixed $callback
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.11, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.createcollation.php
     */
    public function createCollation($name, $callback): bool
    {
    }

    /**
     * Registers a PHP function for use as an SQL scalar function
     *
     * @param mixed $name
     * @param mixed $callback
     * @param mixed|null $argument_count
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.createfunction.php
     */
    public function createFunction($name, $callback, $argument_count = null): bool
    {
    }

    /**
     * Enable throwing exceptions
     *
     * @param mixed|null $enableExceptions
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.enableexceptions.php
     */
    public function enableExceptions($enableExceptions = null): bool
    {
    }

    /**
     * Returns a string that has been properly escaped
     *
     * @param mixed $value
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.escapestring.php
     */
    public static function escapeString($value): string
    {
    }

    /**
     * Executes a result-less query against a given database
     *
     * @param mixed $query
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.exec.php
     */
    public function exec($query): bool
    {
    }

    /**
     * Returns the numeric result code of the most recent failed SQLite request
     *
     * @return int
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
     * @return string
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
     * @return int
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
     * @param mixed $shared_library
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.loadextension.php
     */
    public function loadExtension($shared_library): bool
    {
    }

    /**
     * Opens an SQLite database
     *
     * @param mixed $filename
     * @param mixed|null $flags
     * @param mixed|null $encryption_key
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.open.php
     */
    public function open($filename, $flags = null, $encryption_key = null)
    {
    }

    /**
     * Opens a stream resource to read a BLOB
     *
     * @param mixed $table
     * @param mixed $column
     * @param mixed $rowid
     * @param mixed|null $dbname
     *
     * @return resource
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.openblob.php
     */
    public function openBlob($table, $column, $rowid, $dbname = null)
    {
    }

    /**
     * Prepares an SQL statement for execution
     *
     * @param mixed $query
     *
     * @return SQLite3Stmt
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.prepare.php
     */
    public function prepare($query)
    {
    }

    /**
     * Executes an SQL query
     *
     * @param mixed $query
     *
     * @return SQLite3Result
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.query.php
     */
    public function query($query)
    {
    }

    /**
     * Executes a query and returns a single result
     *
     * @param mixed $query
     * @param mixed|null $entire_row
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3.querysingle.php
     */
    public function querySingle($query, $entire_row = null)
    {
    }

    /**
     * Returns the SQLite3 library version as a string constant and as a number
     *
     * @return array
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
     * @param mixed $column_number
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3result.columnname.php
     */
    public function columnName($column_number): string
    {
    }

    /**
     * Returns the type of the nth column
     *
     * @param mixed $column_number
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3result.columntype.php
     */
    public function columnType($column_number): int
    {
    }

    /**
     * Fetches a result row as an associative or numerically indexed array or both
     *
     * @param mixed|null $mode
     *
     * @return array
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3result.fetcharray.php
     */
    public function fetchArray($mode = null): array
    {
    }

    /**
     * Closes the result set
     *
     * @return bool
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
     * @return int
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
     * @return bool
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
     * @param mixed $param_number
     * @param mixed $param
     * @param mixed|null $type
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3stmt.bindparam.php
     */
    public function bindParam($param_number, &$param, $type = null): bool
    {
    }

    /**
     * Binds the value of a parameter to a statement variable
     *
     * @param mixed $param_number
     * @param mixed $param
     * @param mixed|null $type
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3stmt.bindvalue.php
     */
    public function bindValue($param_number, $param, $type = null): bool
    {
    }

    /**
     * Clears all current bound parameters
     *
     * @return bool
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
     * @return bool
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
     * @return SQLite3Result
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3stmt.execute.php
     */
    public function execute()
    {
    }

    /**
     * Returns the number of parameters within the prepared statement
     *
     * @return int
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
     * @return bool
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
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sqlite3stmt.reset.php
     */
    public function reset(): bool
    {
    }
}
