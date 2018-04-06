<?php
// Start of extension: sqlite3
// - parsed on POSIX with PHP 5.6.34 (extension version 0.7-dev)

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
     * @param mixed $filename
     * @param mixed $flags
     * @param mixed $encryption_key
     */
    public function __construct($filename, $flags, $encryption_key)
    {
    }

    /**
     * @param mixed $ms
     */
    public function busyTimeout($ms)
    {
    }

    public function changes()
    {
    }

    public function close()
    {
    }

    /**
     * @param mixed $name
     * @param mixed $step_callback
     * @param mixed $final_callback
     * @param mixed|null $argument_count
     */
    public function createAggregate($name, $step_callback, $final_callback, $argument_count = null)
    {
    }

    /**
     * @param mixed $name
     * @param mixed $callback
     */
    public function createCollation($name, $callback)
    {
    }

    /**
     * @param mixed $name
     * @param mixed $callback
     * @param mixed|null $argument_count
     */
    public function createFunction($name, $callback, $argument_count = null)
    {
    }

    /**
     * @param mixed $enableExceptions
     */
    public function enableExceptions($enableExceptions)
    {
    }

    /**
     * @param mixed $value
     */
    public static function escapeString($value)
    {
    }

    /**
     * Execute an external program
     *
     * @param mixed $query
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.exec.php
     */
    public function exec($query)
    {
    }

    public function lastErrorCode()
    {
    }

    public function lastErrorMsg()
    {
    }

    public function lastInsertRowID()
    {
    }

    /**
     * @param mixed $shared_library
     */
    public function loadExtension($shared_library)
    {
    }

    /**
     * @param mixed $filename
     * @param mixed $flags
     * @param mixed $encryption_key
     */
    public function open($filename, $flags, $encryption_key)
    {
    }

    /**
     * @param mixed $table
     * @param mixed $column
     * @param mixed $rowid
     * @param mixed|null $dbname
     */
    public function openBlob($table, $column, $rowid, $dbname = null)
    {
    }

    /**
     * @param mixed $query
     */
    public function prepare($query)
    {
    }

    /**
     * @param mixed $query
     */
    public function query($query)
    {
    }

    /**
     * @param mixed $query
     * @param mixed|null $entire_row
     */
    public function querySingle($query, $entire_row = null)
    {
    }

    public static function version()
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
     * @param mixed $column_number
     */
    public function columnName($column_number)
    {
    }

    /**
     * @param mixed $column_number
     */
    public function columnType($column_number)
    {
    }

    /**
     * @param mixed|null $mode
     */
    public function fetchArray($mode = null)
    {
    }

    public function finalize()
    {
    }

    public function numColumns()
    {
    }

    /**
     * Set the internal pointer of an array to its first element
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.reset.php
     */
    public function reset()
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
     * @param mixed $param_number
     * @param mixed $param
     * @param mixed|null $type
     */
    public function bindParam($param_number, &$param, $type = null)
    {
    }

    /**
     * @param mixed $param_number
     * @param mixed $param
     * @param mixed|null $type
     */
    public function bindValue($param_number, $param, $type = null)
    {
    }

    public function clear()
    {
    }

    public function close()
    {
    }

    public function execute()
    {
    }

    public function paramCount()
    {
    }

    public function readOnly()
    {
    }

    /**
     * Set the internal pointer of an array to its first element
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.reset.php
     */
    public function reset()
    {
    }
}
