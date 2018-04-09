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
    public function beginTransaction()
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
    public function commit()
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
    public function errorCode()
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
    public function errorInfo()
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
    public function exec($query)
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
    public static function getAvailableDrivers()
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
    public function inTransaction()
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
    public function lastInsertId($seqname = null)
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
    public function prepare($statement, $options = null)
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
    public function query()
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
    public function quote($string, $paramtype = null)
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
    public function rollBack()
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
    public function setAttribute($attribute, $value)
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
    public function bindColumn($column, &$param, $type = null, $maxlen = null, $driverdata = null)
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
    public function bindParam($paramno, &$param, $type = null, $maxlen = null, $driverdata = null)
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
    public function bindValue($paramno, $param, $type = null)
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
    public function closeCursor()
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
    public function columnCount()
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
    public function debugDumpParams()
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
    public function errorCode()
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
    public function errorInfo()
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
    public function execute($bound_input_params = null)
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
    public function fetchAll($how = null, $class_name = null, $ctor_args = null)
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
    public function getColumnMeta($column)
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
    public function nextRowset()
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
    public function rowCount()
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
    public function setAttribute($attribute, $value)
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
function pdo_drivers()
{
}
