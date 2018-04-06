<?php
// Start of extension: PDO
// - parsed on POSIX with PHP 5.6.34 (extension version 1.0.4dev)
// - parsed on Windows with PHP 5.6.34 (extension version 1.0.4dev)

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
     * @param mixed $dsn
     * @param mixed|null $username
     * @param mixed|null $passwd
     * @param mixed|null $options
     */
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

    /**
     * @param mixed $attribute
     */
    public function getAttribute($attribute)
    {
    }

    public static function getAvailableDrivers()
    {
    }

    public function inTransaction()
    {
    }

    /**
     * @param mixed|null $seqname
     */
    public function lastInsertId($seqname = null)
    {
    }

    /**
     * @param mixed $statement
     * @param mixed|null $options
     */
    public function prepare($statement, $options = null)
    {
    }

    public function query()
    {
    }

    /**
     * @param mixed $string
     * @param mixed|null $paramtype
     */
    public function quote($string, $paramtype = null)
    {
    }

    public function rollBack()
    {
    }

    /**
     * @param mixed $attribute
     * @param mixed $value
     */
    public function setAttribute($attribute, $value)
    {
    }
}

/**
 * Represents an error raised by PDO.  You should not throw a
 *     <code>PDOException</code> from your own code.
 *     See Exceptions for more
 *     information about Exceptions in PHP.
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
 *     associated result set.
 *
 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 1.0.0
 *
 * @link http://www.php.net/manual/en/class.pdostatement.php
 */
class PDOStatement implements Traversable
{
    final public function __sleep()
    {
    }

    final public function __wakeup()
    {
    }

    /**
     * @param mixed $column
     * @param mixed $param
     * @param mixed|null $type
     * @param mixed|null $maxlen
     * @param mixed|null $driverdata
     */
    public function bindColumn($column, &$param, $type = null, $maxlen = null, $driverdata = null)
    {
    }

    /**
     * @param mixed $paramno
     * @param mixed $param
     * @param mixed|null $type
     * @param mixed|null $maxlen
     * @param mixed|null $driverdata
     */
    public function bindParam($paramno, &$param, $type = null, $maxlen = null, $driverdata = null)
    {
    }

    /**
     * @param mixed $paramno
     * @param mixed $param
     * @param mixed|null $type
     */
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

    /**
     * @param mixed|null $bound_input_params
     */
    public function execute($bound_input_params = null)
    {
    }

    /**
     * @param mixed|null $how
     * @param mixed|null $orientation
     * @param mixed|null $offset
     */
    public function fetch($how = null, $orientation = null, $offset = null)
    {
    }

    /**
     * @param mixed|null $how
     * @param mixed|null $class_name
     * @param mixed|null $ctor_args
     */
    public function fetchAll($how = null, $class_name = null, $ctor_args = null)
    {
    }

    /**
     * @param mixed|null $column_number
     */
    public function fetchColumn($column_number = null)
    {
    }

    /**
     * @param mixed|null $class_name
     * @param mixed|null $ctor_args
     */
    public function fetchObject($class_name = null, $ctor_args = null)
    {
    }

    /**
     * @param mixed $attribute
     */
    public function getAttribute($attribute)
    {
    }

    /**
     * @param mixed $column
     */
    public function getColumnMeta($column)
    {
    }

    public function nextRowset()
    {
    }

    public function rowCount()
    {
    }

    /**
     * @param mixed $attribute
     * @param mixed $value
     */
    public function setAttribute($attribute, $value)
    {
    }

    /**
     * @param mixed $mode
     * @param mixed|null $params
     */
    public function setFetchMode($mode, $params = null)
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
