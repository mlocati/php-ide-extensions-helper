<?php
// Documentation generated automatically for extension sqlite3 v0.7-dev with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
/*
 * INI entries:
 * sqlite3.extension_dir = null
 */
const SQLITE3_ASSOC = 1;
const SQLITE3_BLOB = 4;
const SQLITE3_BOTH = 3;
const SQLITE3_DETERMINISTIC = 2048;
const SQLITE3_FLOAT = 2;
const SQLITE3_INTEGER = 1;
const SQLITE3_NULL = 5;
const SQLITE3_NUM = 2;
const SQLITE3_OPEN_CREATE = 4;
const SQLITE3_OPEN_READONLY = 1;
const SQLITE3_OPEN_READWRITE = 2;
const SQLITE3_TEXT = 3;
class SQLite3
{
    public static function escapeString($value)
    {
    }
    public static function version()
    {
    }
    public function __construct($filename, $flags = null, $encryption_key = null)
    {
    }
    public function busyTimeout($ms)
    {
    }
    public function changes()
    {
    }
    public function close()
    {
    }
    public function createAggregate($name, $step_callback, $final_callback, $argument_count = null)
    {
    }
    public function createCollation($name, $callback)
    {
    }
    public function createFunction($name, $callback, $argument_count = null, $flags = null)
    {
    }
    public function enableExceptions($enableExceptions)
    {
    }
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
    public function loadExtension($shared_library)
    {
    }
    public function open($filename, $flags = null, $encryption_key = null)
    {
    }
    public function openBlob($table, $column, $rowid, $dbname = null)
    {
    }
    public function prepare($query)
    {
    }
    public function query($query)
    {
    }
    public function querySingle($query, $entire_row = null)
    {
    }
}
class SQLite3Result
{
    public function columnName($column_number)
    {
    }
    private function __construct()
    {
    }
    public function columnType($column_number)
    {
    }
    public function fetchArray($mode = null)
    {
    }
    public function finalize()
    {
    }
    public function numColumns()
    {
    }
    public function reset()
    {
    }
}
class SQLite3Stmt
{
    public function bindParam($param_number, &$param, $type = null)
    {
    }
    private function __construct($sqlite3)
    {
    }
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
    public function reset()
    {
    }
}
// No functions defined