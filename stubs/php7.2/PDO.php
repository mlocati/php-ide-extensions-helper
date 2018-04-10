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
     * If this value is <code>FALSE</code>, PDO attempts to disable autocommit so that the
     * connection begins a transaction.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-autocommit
     */
    const ATTR_AUTOCOMMIT = 0;

    /**
     * Force column names to a specific case specified by the <code>PDO::CASE_*</code>
     * constants.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-case
     */
    const ATTR_CASE = 8;

    /**
     * This is a read only attribute; it will return information about the
     * version of the client libraries that the PDO driver is using.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-client-version
     */
    const ATTR_CLIENT_VERSION = 5;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-connection-status
     */
    const ATTR_CONNECTION_STATUS = 7;

    /**
     * Selects the cursor type. PDO currently supports either
     * <code>PDO::CURSOR_FWDONLY</code> and
     * <code>PDO::CURSOR_SCROLL</code>. Stick with
     * <code>PDO::CURSOR_FWDONLY</code> unless you know that you need a
     * scrollable cursor.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-cursor
     */
    const ATTR_CURSOR = 10;

    /**
     * Get or set the name to use for a cursor. Most useful when using
     * scrollable cursors and positioned updates.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-cursor-name
     */
    const ATTR_CURSOR_NAME = 9;

    /**
     * Available since PHP 5.2.0
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-default-fetch-mode
     */
    const ATTR_DEFAULT_FETCH_MODE = 19;

    /**
     * Sets the default string parameter type, this can be one of <code>PDO::PARAM_STR_NATL</code>
     * and <code>PDO::PARAM_STR_CHAR</code>.
     * Available since PHP 7.2.0.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-default-str-param
     */
    const ATTR_DEFAULT_STR_PARAM = 21;

    /**
     * Returns the name of the driver.
     * <blockquote><title>using <code>PDO::ATTR_DRIVER_NAME</code></title>
     * <blockquote><pre>
     * &lt;?php
     * if ($db-&gt;getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql') {
     * echo "Running on mysql; doing something mysql specific here\n";
     * }
     * ?&gt;
     * </pre></blockquote>
     * </blockquote>
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-driver-name
     */
    const ATTR_DRIVER_NAME = 16;

    /**
     * Available since PHP 5.1.3.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-emulate-prepares
     */
    const ATTR_EMULATE_PREPARES = 20;

    /**
     * See the Errors and error
     * handling section for more information about this attribute.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-errmode
     */
    const ATTR_ERRMODE = 3;

    /**
     * Prepend the containing catalog name to each column name returned in the
     * result set. The catalog name and column name are separated by a decimal
     * (.) character. Support of this attribute is at the driver level; it may
     * not be supported by your driver.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-fetch-catalog-names
     */
    const ATTR_FETCH_CATALOG_NAMES = 15;

    /**
     * Prepend the containing table name to each column name returned in the
     * result set. The table name and column name are separated by a decimal (.)
     * character. Support of this attribute is at the driver level; it may not
     * be supported by your driver.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-fetch-table-names
     */
    const ATTR_FETCH_TABLE_NAMES = 14;

    /**
     * Sets the maximum column name length.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-max-column-len
     */
    const ATTR_MAX_COLUMN_LEN = 18;

    /**
     * Convert empty strings to SQL NULL values on data fetches.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-oracle-nulls
     */
    const ATTR_ORACLE_NULLS = 11;

    /**
     * Request a persistent connection, rather than creating a new connection.
     * See Connections and Connection
     * management for more information on this attribute.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-persistent
     */
    const ATTR_PERSISTENT = 12;

    /**
     * Setting the prefetch size allows you to balance speed against memory
     * usage for your application. Not all database/driver combinations support
     * setting of the prefetch size. A larger prefetch size results in
     * increased performance at the cost of higher memory usage.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-prefetch
     */
    const ATTR_PREFETCH = 1;

    /**
     * This is a read only attribute; it will return some meta information about the
     * database server to which PDO is connected.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-server-info
     */
    const ATTR_SERVER_INFO = 6;

    /**
     * This is a read only attribute; it will return information about the
     * version of the database server to which PDO is connected.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-server-version
     */
    const ATTR_SERVER_VERSION = 4;

    /**
     * Sets the class name of which statements are returned as.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-statement-class
     */
    const ATTR_STATEMENT_CLASS = 13;

    /**
     * Forces all values fetched to be treated as strings.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-stringify-fetches
     */
    const ATTR_STRINGIFY_FETCHES = 17;

    /**
     * Sets the timeout value in seconds for communications with the database.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.attr-timeout
     */
    const ATTR_TIMEOUT = 2;

    /**
     * Force column names to lower case.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.case-lower
     */
    const CASE_LOWER = 2;

    /**
     * Leave column names as returned by the database driver.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.case-natural
     */
    const CASE_NATURAL = 0;

    /**
     * Force column names to upper case.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.case-upper
     */
    const CASE_UPPER = 1;

    /**
     * Create a <code>PDOStatement</code> object with a forward-only cursor. This is the
     * default cursor choice, as it is the fastest and most common data access
     * pattern in PHP.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.cursor-fwdonly
     */
    const CURSOR_FWDONLY = 0;

    /**
     * Create a <code>PDOStatement</code> object with a scrollable cursor. Pass the
     * <code>PDO::FETCH_ORI_*</code> constants to control the rows fetched from the result set.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.cursor-scroll
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
     * Corresponds to SQLSTATE '00000', meaning that the SQL statement was
     * successfully issued with no errors or warnings. This constant is for
     * your convenience when checking <code>PDO::errorCode</code> or
     * <code>PDOStatement::errorCode</code> to determine if an error
     * occurred. You will usually know if this is the case by examining the
     * return code from the method that raised the error condition anyway.
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.err-none
     */
    const ERR_NONE = '00000';

    /**
     * Throw a <code>PDOException</code> if an error occurs.
     * See Errors and error handling
     * for more information about this attribute.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.errmode-exception
     */
    const ERRMODE_EXCEPTION = 2;

    /**
     * Do not raise an error or exception if an error occurs. The developer is
     * expected to explicitly check for errors. This is the default mode.
     * See Errors and error handling
     * for more information about this attribute.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.errmode-silent
     */
    const ERRMODE_SILENT = 0;

    /**
     * Issue a PHP <code>E_WARNING</code> message if an error occurs.
     * See Errors and error handling
     * for more information about this attribute.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.errmode-warning
     */
    const ERRMODE_WARNING = 1;

    /**
     * Available since PHP 5.3.0.
     * Sets the date format.
     *
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-firebird.php#pdo-firebird.constants
     */
    const FB_ATTR_DATE_FORMAT = 1000;

    /**
     * Sets the time format.
     * Available since PHP 5.3.0.
     *
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-firebird.php#pdo-firebird.constants
     */
    const FB_ATTR_TIME_FORMAT = 1001;

    /**
     * Sets the timestamp format.
     * Available since PHP 5.3.0.
     *
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-firebird.php#pdo-firebird.constants
     */
    const FB_ATTR_TIMESTAMP_FORMAT = 1002;

    /**
     * Specifies that the fetch method shall return each row as an array indexed
     * by column name as returned in the corresponding result set. If the result
     * set contains multiple columns with the same name,
     * <code>PDO::FETCH_ASSOC</code> returns
     * only a single value per column name.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-assoc
     */
    const FETCH_ASSOC = 2;

    /**
     * Specifies that the fetch method shall return each row as an array indexed
     * by both column name and number as returned in the corresponding result set,
     * starting at column 0.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-both
     */
    const FETCH_BOTH = 4;

    /**
     * Specifies that the fetch method shall return TRUE and assign the values of
     * the columns in the result set to the PHP variables to which they were
     * bound with the <code>PDOStatement::bindParam</code> or
     * <code>PDOStatement::bindColumn</code> methods.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-bound
     */
    const FETCH_BOUND = 6;

    /**
     * Specifies that the fetch method shall return a new instance of the
     * requested class, mapping the columns to named properties in the class.
     * <blockquote>
     * The magic
     * <code>__set</code>
     * method is called if the property doesn't exist in the requested class
     * </blockquote>
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-class
     */
    const FETCH_CLASS = 8;

    /**
     * Determine the class name from the value of first column.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-classtype
     */
    const FETCH_CLASSTYPE = 262144;

    /**
     * Specifies that the fetch method shall return only a single requested
     * column from the next row in the result set.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-column
     */
    const FETCH_COLUMN = 7;

    /**
     * Allows completely customize the way data is treated on the fly (only
     * valid inside <code>PDOStatement::fetchAll</code>).
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-func
     */
    const FETCH_FUNC = 10;

    /**
     * Group return by values. Usually combined with
     * <code>PDO::FETCH_COLUMN</code> or
     * <code>PDO::FETCH_KEY_PAIR</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-group
     */
    const FETCH_GROUP = 65536;

    /**
     * Specifies that the fetch method shall update an existing instance of the
     * requested class, mapping the columns to named properties in the class.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-into
     */
    const FETCH_INTO = 9;

    /**
     * Fetch a two-column result into an array where the first column is a key and the second column
     * is the value. Available since PHP 5.2.3.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-key-pair
     */
    const FETCH_KEY_PAIR = 12;

    /**
     * Specifies that the fetch method shall return each row as an object with
     * variable names that correspond to the column names returned in the result
     * set. <code>PDO::FETCH_LAZY</code> creates the object variable names as they are accessed.
     * Not valid inside <code>PDOStatement::fetchAll</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-lazy
     */
    const FETCH_LAZY = 1;

    /**
     * Specifies that the fetch method shall return each row as an array indexed
     * by column name as returned in the corresponding result set. If the result
     * set contains multiple columns with the same name,
     * <code>PDO::FETCH_NAMED</code> returns
     * an array of values per column name.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-named
     */
    const FETCH_NAMED = 11;

    /**
     * Specifies that the fetch method shall return each row as an array indexed
     * by column number as returned in the corresponding result set, starting at
     * column 0.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-num
     */
    const FETCH_NUM = 3;

    /**
     * Specifies that the fetch method shall return each row as an object with
     * property names that correspond to the column names returned in the result
     * set.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-obj
     */
    const FETCH_OBJ = 5;

    /**
     * Fetch the requested row by row number from the result set. Valid only
     * for scrollable cursors.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-ori-abs
     */
    const FETCH_ORI_ABS = 4;

    /**
     * Fetch the first row in the result set. Valid only for scrollable cursors.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-ori-first
     */
    const FETCH_ORI_FIRST = 2;

    /**
     * Fetch the last row in the result set. Valid only for scrollable cursors.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-ori-last
     */
    const FETCH_ORI_LAST = 3;

    /**
     * Fetch the next row in the result set. Valid only for scrollable cursors.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-ori-next
     */
    const FETCH_ORI_NEXT = 0;

    /**
     * Fetch the previous row in the result set. Valid only for scrollable
     * cursors.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-ori-prior
     */
    const FETCH_ORI_PRIOR = 1;

    /**
     * Fetch the requested row by relative position from the current position
     * of the cursor in the result set. Valid only for scrollable cursors.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-ori-rel
     */
    const FETCH_ORI_REL = 5;

    /**
     * Call the constructor before setting properties. Available since PHP 5.2.0.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-props-late
     */
    const FETCH_PROPS_LATE = 1048576;

    /**
     * As <code>PDO::FETCH_INTO</code> but object is provided as a serialized string.
     * Available since PHP 5.1.0. Since PHP 5.3.0 the class constructor is never called if this
     * flag is set.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-serialize
     */
    const FETCH_SERIALIZE = 524288;

    /**
     * Fetch only the unique values.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-unique
     */
    const FETCH_UNIQUE = 196608;

    /**
     * Enable network communication compression. This is also supported when
     * compiled against mysqlnd as of PHP 5.3.11.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-mysql.php#pdo-mysql.constants
     */
    const MYSQL_ATTR_COMPRESS = 1003;

    /**
     * Perform direct queries, don't use prepared statements.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-mysql.php#pdo-mysql.constants
     */
    const MYSQL_ATTR_DIRECT_QUERY = 1004;

    /**
     * Return the number of found (matched) rows, not the
     * number of changed rows.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-mysql.php#pdo-mysql.constants
     */
    const MYSQL_ATTR_FOUND_ROWS = 1005;

    /**
     * Permit spaces after function names. Makes all functions
     * names reserved words.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-mysql.php#pdo-mysql.constants
     */
    const MYSQL_ATTR_IGNORE_SPACE = 1006;

    /**
     * Command to execute when connecting to the MySQL server. Will
     * automatically be re-executed when reconnecting.
     * Note, this constant can only be used in the <code>driver_options</code>
     * array when constructing a new database handle.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-mysql.php#pdo-mysql.constants
     */
    const MYSQL_ATTR_INIT_COMMAND = 1002;

    /**
     * Enable <code>LOAD LOCAL INFILE</code>.
     * Note, this constant can only be used in the <code>driver_options</code>
     * array when constructing a new database handle.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-mysql.php#pdo-mysql.constants
     */
    const MYSQL_ATTR_LOCAL_INFILE = 1001;

    /**
     * Disables multi query execution in both <code>PDO::prepare</code>
     * and <code>PDO::query</code> when set to <code>FALSE</code>.
     * Note, this constant can only be used in the <code>driver_options</code>
     * array when constructing a new database handle.
     * This exists as of PHP 5.5.21 and PHP 5.6.5.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-mysql.php#pdo-mysql.constants
     */
    const MYSQL_ATTR_MULTI_STATEMENTS = 1013;

    /**
     * @var int
     */
    const MYSQL_ATTR_SERVER_PUBLIC_KEY = 1012;

    /**
     * The file path to the SSL certificate authority.
     * This exists as of PHP 5.3.7.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-mysql.php#pdo-mysql.constants
     */
    const MYSQL_ATTR_SSL_CA = 1009;

    /**
     * The file path to the directory that contains the trusted SSL
     * CA certificates, which are stored in PEM format.
     * This exists as of PHP 5.3.7.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-mysql.php#pdo-mysql.constants
     */
    const MYSQL_ATTR_SSL_CAPATH = 1010;

    /**
     * The file path to the SSL certificate.
     * This exists as of PHP 5.3.7.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-mysql.php#pdo-mysql.constants
     */
    const MYSQL_ATTR_SSL_CERT = 1008;

    /**
     * A list of one or more permissible ciphers to use for SSL encryption, in a format
     * understood by OpenSSL. For example: <code>DHE-RSA-AES256-SHA:AES128-SHA</code>
     * This exists as of PHP 5.3.7.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-mysql.php#pdo-mysql.constants
     */
    const MYSQL_ATTR_SSL_CIPHER = 1011;

    /**
     * The file path to the SSL key.
     * This exists as of PHP 5.3.7.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-mysql.php#pdo-mysql.constants
     */
    const MYSQL_ATTR_SSL_KEY = 1007;

    /**
     * @var int
     */
    const MYSQL_ATTR_SSL_VERIFY_SERVER_CERT = 1014;

    /**
     * If this attribute is set to <code>TRUE</code> on a
     * <code>PDOStatement</code>, the MySQL driver will use the
     * buffered versions of the MySQL API. If you're writing portable code, you
     * should use <code>PDOStatement::fetchAll</code> instead.
     * <blockquote><title>Forcing queries to be buffered in mysql</title>
     * <blockquote><pre>
     * &lt;?php
     * if ($db-&gt;getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql') {
     * $stmt = $db-&gt;prepare('select * from foo',
     * array(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY =&gt; true));
     * } else {
     * die("my application only works with mysql; I should use \$stmt-&gt;fetchAll() instead");
     * }
     * ?&gt;
     * </pre></blockquote>
     * </blockquote>
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-mysql.php#pdo-mysql.constants
     */
    const MYSQL_ATTR_USE_BUFFERED_QUERY = 1000;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.null-empty-string
     */
    const NULL_EMPTY_STRING = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.null-natural
     */
    const NULL_NATURAL = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.null-to-string
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
     * Represents a boolean data type.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.param-bool
     */
    const PARAM_BOOL = 5;

    /**
     * Allocation event
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.param-evt-alloc
     */
    const PARAM_EVT_ALLOC = 0;

    /**
     * Event triggered subsequent to execution of a prepared statement.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.param-evt-exec-post
     */
    const PARAM_EVT_EXEC_POST = 3;

    /**
     * Event triggered prior to execution of a prepared statement.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.param-evt-exec-pre
     */
    const PARAM_EVT_EXEC_PRE = 2;

    /**
     * Event triggered subsequent to fetching a result from a resultset.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.param-evt-fetch-post
     */
    const PARAM_EVT_FETCH_POST = 5;

    /**
     * Event triggered prior to fetching a result from a resultset.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.param-evt-fetch-pre
     */
    const PARAM_EVT_FETCH_PRE = 4;

    /**
     * Deallocation event
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.param-evt-free
     */
    const PARAM_EVT_FREE = 1;

    /**
     * Event triggered during bound parameter registration
     * allowing the driver to normalize the parameter name.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.param-evt-normalize
     */
    const PARAM_EVT_NORMALIZE = 6;

    /**
     * Specifies that the parameter is an INOUT parameter for a stored
     * procedure. You must bitwise-OR this value with an explicit
     * PDO::PARAM_* data type.
     *
     * @var float
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.param-input-output
     */
    const PARAM_INPUT_OUTPUT = 2147483648;

    /**
     * Represents the SQL INTEGER data type.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.param-int
     */
    const PARAM_INT = 1;

    /**
     * Represents the SQL large object data type.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.param-lob
     */
    const PARAM_LOB = 3;

    /**
     * Represents the SQL NULL data type.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.param-null
     */
    const PARAM_NULL = 0;

    /**
     * Represents a recordset type. Not currently supported by any drivers.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.param-stmt
     */
    const PARAM_STMT = 4;

    /**
     * Represents the SQL CHAR, VARCHAR, or other string data type.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.param-str
     */
    const PARAM_STR = 2;

    /**
     * Flag to denote a string uses the regular character set.
     * Available since PHP 7.2.0
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.param-str-char
     */
    const PARAM_STR_CHAR = 536870912;

    /**
     * Flag to denote a string uses the national character set.
     * Available since PHP 7.2.0
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.param-str-natl
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
     * Specifies that a function created with <code>PDO::sqliteCreateFunction</code>
     * is deterministic, i.e. it always returns the same result given the same inputs within
     * a single SQL statement. (Available as of PHP 7.1.4.)
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/pdo.constants.php#pdo.constants.sqlite_deterministic
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
     * Indicates that a query should be executed directly, without being prepared.
     * This constant can be passed to PDO::setAttribute, and PDO::prepare. For more
     * information, see
     * Direct and Prepared Statement Execution.
     *
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-sqlsrv.php#pdo-sqlsrv.constants
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
     * A non-negative integer representing the timeout period, in seconds. Zero (0)
     * is the default and means no timeout. This constant can be passed to
     * PDOStatement::setAttribute, PDO::setAttribute, and PDO::prepare.
     *
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-sqlsrv.php#pdo-sqlsrv.constants
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
     * Specifies that data is sent/retrieved as a raw byte stream to/from the server
     * without performing encoding or translation. This constant can be passed to
     * PDOStatement::setAttribute, PDO::prepare, PDOStatement::bindColumn, and
     * PDOStatement::bindParam.
     *
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-sqlsrv.php#pdo-sqlsrv.constants
     */
    const SQLSRV_ENCODING_BINARY = 2;

    /**
     * Specifies that data is sent/retrieved to/from the server according to
     * PDO::SQLSRV_ENCODING_SYSTEM if specified during connection. The connection's
     * encoding is used if specified in a prepare statement. This constant can be
     * passed to PDOStatement::setAttribute, PDO::setAttribute, PDO::prepare,
     * PDOStatement::bindColumn, and PDOStatement::bindParam.
     *
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-sqlsrv.php#pdo-sqlsrv.constants
     */
    const SQLSRV_ENCODING_DEFAULT = 1;

    /**
     * Specifies that data is sent/retrieved to/from the server as 8-bit characters
     * as specified in the code page of the Windows locale that is set on the system.
     * Any multi-byte characters or characters that do not map into this code page
     * are substituted with a single byte question mark (?) character. This constant
     * can be passed to PDOStatement::setAttribute, PDO::setAttribute, PDO::prepare,
     * PDOStatement::bindColumn, and PDOStatement::bindParam.
     *
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-sqlsrv.php#pdo-sqlsrv.constants
     */
    const SQLSRV_ENCODING_SYSTEM = 3;

    /**
     * Specifies that data is sent/retrieved to/from the server in UTF-8 encoding.
     * This is the default encoding. This constant can be passed to
     * PDOStatement::setAttribute, PDO::setAttribute, PDO::prepare,
     * PDOStatement::bindColumn, and PDOStatement::bindParam.
     *
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/ref.pdo-sqlsrv.php#pdo-sqlsrv.constants
     */
    const SQLSRV_ENCODING_UTF8 = 65001;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const SQLSRV_PARAM_OUT_DEFAULT_SIZE = -1;

    /**
     * This constant is an acceptable value for the SQLSRV DSN key TransactionIsolation.
     * This constant sets the transaction isolation level for the connection to
     * Read Committed.
     *
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/ref.pdo-sqlsrv.php#pdo-sqlsrv.constants
     */
    const SQLSRV_TXN_READ_COMMITTED = 'READ_COMMITTED';

    /**
     * This constant is an acceptable value for the SQLSRV DSN key TransactionIsolation.
     * This constant sets the transaction isolation level for the connection to
     * Read Uncommitted.
     *
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/ref.pdo-sqlsrv.php#pdo-sqlsrv.constants
     */
    const SQLSRV_TXN_READ_UNCOMMITTED = 'READ_UNCOMMITTED';

    /**
     * This constant is an acceptable value for the SQLSRV DSN key TransactionIsolation.
     * This constant sets the transaction isolation level for the connection to
     * Repeateable Read.
     *
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/ref.pdo-sqlsrv.php#pdo-sqlsrv.constants
     */
    const SQLSRV_TXN_REPEATABLE_READ = 'REPEATABLE_READ';

    /**
     * This constant is an acceptable value for the SQLSRV DSN key TransactionIsolation.
     * This constant sets the transaction isolation level for the connection to
     * Serializable.
     *
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/ref.pdo-sqlsrv.php#pdo-sqlsrv.constants
     */
    const SQLSRV_TXN_SERIALIZABLE = 'SERIALIZABLE';

    /**
     * This constant is an acceptable value for the SQLSRV DSN key TransactionIsolation.
     * This constant sets the transaction isolation level for the connection to Snapshot.
     *
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/ref.pdo-sqlsrv.php#pdo-sqlsrv.constants
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
