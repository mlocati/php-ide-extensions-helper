<?php
// Start of extension: sqlite3
// - parsed on POSIX with PHP 7.0.28 (extension version 7.0.28)

/**
 * Specifies that the <code>Sqlite3Result::fetchArray</code>
 *       method shall return an array indexed by column name as returned in the
 *       corresponding result set.
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
 *       method shall return an array indexed by both column name and number as
 *       returned in the corresponding result set, starting at column 0.
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
 *       method shall return an array indexed by column number as returned in the
 *       corresponding result set, starting at column 0.
 *
 * @link http://www.php.net/manual/en/sqlite3.constants.php#constant.sqlite3-num
 *
 * @var int
 */
const SQLITE3_NUM = 2;

/**
 * Specifies that the SQLite3 database be created if it does not already
 *       exist.
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
     * mixed $filename
     * mixed|null $flags
     * mixed|null $encryption_key
     */
    public function __construct($filename, $flags = null, $encryption_key = null)
    {
    }

    /**
     * mixed $ms
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
     * mixed $name
     * mixed $step_callback
     * mixed $final_callback
     * mixed|null $argument_count
     */
    public function createAggregate($name, $step_callback, $final_callback, $argument_count = null)
    {
    }

    /**
     * mixed $name
     * mixed $callback
     */
    public function createCollation($name, $callback)
    {
    }

    /**
     * mixed $name
     * mixed $callback
     * mixed|null $argument_count
     */
    public function createFunction($name, $callback, $argument_count = null)
    {
    }

    /**
     * mixed|null $enableExceptions
     */
    public function enableExceptions($enableExceptions = null)
    {
    }

    /**
     * mixed $value
     */
    public static function escapeString($value)
    {
    }

    /**
     * Execute an external program
     *
     * mixed $query
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.exec.php
     */
    public function exec($query): string
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
     * mixed $shared_library
     */
    public function loadExtension($shared_library)
    {
    }

    /**
     * mixed $filename
     * mixed|null $flags
     * mixed|null $encryption_key
     */
    public function open($filename, $flags = null, $encryption_key = null)
    {
    }

    /**
     * mixed $table
     * mixed $column
     * mixed $rowid
     * mixed|null $dbname
     */
    public function openBlob($table, $column, $rowid, $dbname = null)
    {
    }

    /**
     * mixed $query
     */
    public function prepare($query)
    {
    }

    /**
     * mixed $query
     */
    public function query($query)
    {
    }

    /**
     * mixed $query
     * mixed|null $entire_row
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
     * mixed $column_number
     */
    public function columnName($column_number)
    {
    }

    /**
     * mixed $column_number
     */
    public function columnType($column_number)
    {
    }

    /**
     * mixed|null $mode
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
     * mixed $sqlite3
     */
    private function __construct($sqlite3)
    {
    }

    /**
     * mixed $param_number
     * mixed $param
     * mixed|null $type
     */
    public function bindParam($param_number, &$param, $type = null)
    {
    }

    /**
     * mixed $param_number
     * mixed $param
     * mixed|null $type
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
