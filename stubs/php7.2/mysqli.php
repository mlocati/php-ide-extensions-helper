<?php
// Start of extension: mysqli
// - parsed on POSIX with PHP 7.2.3 (extension version 7.2.3)
// - parsed on Windows with PHP 7.2.4 (extension version 7.2.4)

/**
 * Columns are returned into the array having the fieldname as the array index.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-assoc
 *
 * @var int
 */
const MYSQLI_ASSOC = 1;

/**
 * @var int
 */
const MYSQLI_ASYNC = 8;

/**
 * Field is defined as <code>AUTO_INCREMENT</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-auto-increment-flag
 *
 * @var int
 */
const MYSQLI_AUTO_INCREMENT_FLAG = 512;

/**
 * Field is defined as <code>BINARY</code>. Available since PHP 5.3.0.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-binary-flag
 *
 * @var int
 */
const MYSQLI_BINARY_FLAG = 128;

/**
 * Field is defined as <code>BLOB</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-blob-flag
 *
 * @var int
 */
const MYSQLI_BLOB_FLAG = 16;

/**
 * Columns are returned into the array having both a numerical index and the fieldname as the associative index.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-both
 *
 * @var int
 */
const MYSQLI_BOTH = 3;

/**
 * @var int
 */
const MYSQLI_CLIENT_CAN_HANDLE_EXPIRED_PASSWORDS = 4194304;

/**
 * Use compression protocol
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-client-compress
 *
 * @var int
 */
const MYSQLI_CLIENT_COMPRESS = 32;

/**
 * return number of matched rows, not the number of affected rows
 *
 * @link http://www.php.net/manual/en/mysqli.real-connect.php
 *
 * @var int
 */
const MYSQLI_CLIENT_FOUND_ROWS = 2;

/**
 * Allow spaces after function names. Makes all functions names reserved words.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-client-ignore-space
 *
 * @var int
 */
const MYSQLI_CLIENT_IGNORE_SPACE = 256;

/**
 * Allow <code>interactive_timeout</code> seconds
 * (instead of <code>wait_timeout</code> seconds) of inactivity before
 * closing the connection. The client's session
 * <code>wait_timeout</code> variable will be set to
 * the value of the session <code>interactive_timeout</code> variable.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-client-interactive
 *
 * @var int
 */
const MYSQLI_CLIENT_INTERACTIVE = 1024;

/**
 * Don't allow the <code>db_name.tbl_name.col_name</code> syntax.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-client-no-schema
 *
 * @var int
 */
const MYSQLI_CLIENT_NO_SCHEMA = 16;

/**
 * Use SSL (encrypted protocol). This option should not be set by application programs;
 * it is set internally in the MySQL client library
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-client-ssl
 *
 * @var int
 */
const MYSQLI_CLIENT_SSL = 2048;

/**
 * Like <code>MYSQLI_CLIENT_SSL</code>, but disables validation of the provided
 * SSL certificate. This is only for installations using MySQL Native Driver and MySQL 5.6 or later.
 *
 * @link http://www.php.net/manual/en/mysqli.real-connect.php
 *
 * @var int
 */
const MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT = 64;

/**
 * @var int
 */
const MYSQLI_CLIENT_SSL_VERIFY_SERVER_CERT = 1073741824;

/**
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-cursor-type-for-update
 *
 * @var int
 */
const MYSQLI_CURSOR_TYPE_FOR_UPDATE = 2;

/**
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-cursor-type-no-cursor
 *
 * @var int
 */
const MYSQLI_CURSOR_TYPE_NO_CURSOR = 0;

/**
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-cursor-type-read-only
 *
 * @var int
 */
const MYSQLI_CURSOR_TYPE_READ_ONLY = 1;

/**
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-cursor-type-scrollable
 *
 * @var int
 */
const MYSQLI_CURSOR_TYPE_SCROLLABLE = 4;

/**
 * Data truncation occurred. Available since PHP 5.1.0 and MySQL 5.0.5.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-data-truncated
 *
 * @var int
 */
const MYSQLI_DATA_TRUNCATED = 101;

/**
 * Is set to 1 if <code>mysqli_debug</code> functionality is enabled.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-debug-trace-enabled
 *
 * @var int
 */
const MYSQLI_DEBUG_TRACE_ENABLED = 0;

/**
 * Field is defined as <code>ENUM</code>. Available since PHP 5.3.0.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-enum-flag
 *
 * @var int
 */
const MYSQLI_ENUM_FLAG = 256;

/**
 * Field is part of <code>GROUP BY</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-group-flag
 *
 * @var int
 */
const MYSQLI_GROUP_FLAG = 32768;

/**
 * Command to execute when connecting to MySQL server. Will automatically be re-executed when reconnecting.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-init-command
 *
 * @var int
 */
const MYSQLI_INIT_COMMAND = 3;

/**
 * Field is part of an index.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-multiple-key-flag
 *
 * @var int
 */
const MYSQLI_MULTIPLE_KEY_FLAG = 8;

/**
 * No more data available for bind variable
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-no-data
 *
 * @var int
 */
const MYSQLI_NO_DATA = 100;

/**
 * @var int
 */
const MYSQLI_NO_DEFAULT_VALUE_FLAG = 4096;

/**
 * Indicates that a field is defined as <code>NOT NULL</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-not-null-flag
 *
 * @var int
 */
const MYSQLI_NOT_NULL_FLAG = 1;

/**
 * Columns are returned into the array having an enumerated index.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-num
 *
 * @var int
 */
const MYSQLI_NUM = 2;

/**
 * Field is defined as <code>NUMERIC</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-num-flag
 *
 * @var int
 */
const MYSQLI_NUM_FLAG = 32768;

/**
 * @var int
 */
const MYSQLI_ON_UPDATE_NOW_FLAG = 8192;

/**
 * @var int
 */
const MYSQLI_OPT_CAN_HANDLE_EXPIRED_PASSWORDS = 37;

/**
 * Connect timeout in seconds
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-opt-connect-timeout
 *
 * @var int
 */
const MYSQLI_OPT_CONNECT_TIMEOUT = 0;

/**
 * Convert integer and float columns back to PHP numbers. Only valid
 * for mysqlnd.
 *
 * @link http://www.php.net/manual/en/mysqli.options.php
 *
 * @var int
 */
const MYSQLI_OPT_INT_AND_FLOAT_NATIVE = 201;

/**
 * Enables command <code>LOAD LOCAL INFILE</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-opt-local-infile
 *
 * @var int
 */
const MYSQLI_OPT_LOCAL_INFILE = 8;

/**
 * The size of the internal command/network buffer. Only valid for
 * mysqlnd.
 *
 * @link http://www.php.net/manual/en/mysqli.options.php
 *
 * @var int
 */
const MYSQLI_OPT_NET_CMD_BUFFER_SIZE = 202;

/**
 * Maximum read chunk size in bytes when reading the body of a MySQL
 * command packet. Only valid for mysqlnd.
 *
 * @link http://www.php.net/manual/en/mysqli.options.php
 *
 * @var int
 */
const MYSQLI_OPT_NET_READ_BUFFER_SIZE = 203;

/**
 * @var int
 */
const MYSQLI_OPT_READ_TIMEOUT = 11;

/**
 * @link http://www.php.net/manual/en/mysqli.options.php
 *
 * @var int
 */
const MYSQLI_OPT_SSL_VERIFY_SERVER_CERT = 21;

/**
 * Field is part of an multi-index
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-part-key-flag
 *
 * @var int
 */
const MYSQLI_PART_KEY_FLAG = 16384;

/**
 * Field is part of a primary index
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-pri-key-flag
 *
 * @var int
 */
const MYSQLI_PRI_KEY_FLAG = 2;

/**
 * Read options from the named option file instead of from <code>my.cnf</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-read-default-file
 *
 * @var int
 */
const MYSQLI_READ_DEFAULT_FILE = 4;

/**
 * Read options from the named group from <code>my.cnf</code>
 * or the file specified with <code>MYSQLI_READ_DEFAULT_FILE</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-read-default-group
 *
 * @var int
 */
const MYSQLI_READ_DEFAULT_GROUP = 5;

/**
 * @var int
 */
const MYSQLI_REFRESH_BACKUP_LOG = 2097152;

/**
 * Refreshes the grant tables.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-refresh-grant
 *
 * @var int
 */
const MYSQLI_REFRESH_GRANT = 1;

/**
 * Flushes the host cache, like executing the
 * <code>FLUSH HOSTS</code> <code>SQL</code> statement.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-refresh-hosts
 *
 * @var int
 */
const MYSQLI_REFRESH_HOSTS = 8;

/**
 * Flushes the logs, like executing the
 * <code>FLUSH LOGS</code> <code>SQL</code> statement.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-refresh-log
 *
 * @var int
 */
const MYSQLI_REFRESH_LOG = 2;

/**
 * On a master replication server: removes the binary log files listed in the
 * binary log index, and truncates the index file. Like executing the
 * <code>RESET MASTER</code> <code>SQL</code> statement.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-refresh-master
 *
 * @var int
 */
const MYSQLI_REFRESH_MASTER = 128;

/**
 * On a slave replication server: resets the master server information, and
 * restarts the slave. Like executing the <code>RESET SLAVE</code>
 * <code>SQL</code> statement.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-refresh-slave
 *
 * @var int
 */
const MYSQLI_REFRESH_SLAVE = 64;

/**
 * Reset the status variables, like executing the
 * <code>FLUSH STATUS</code> <code>SQL</code> statement.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-refresh-status
 *
 * @var int
 */
const MYSQLI_REFRESH_STATUS = 16;

/**
 * Flushes the table cache, like executing the
 * <code>FLUSH TABLES</code> <code>SQL</code> statement.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-refresh-tables
 *
 * @var int
 */
const MYSQLI_REFRESH_TABLES = 4;

/**
 * Flushes the thread cache.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-refresh-threads
 *
 * @var int
 */
const MYSQLI_REFRESH_THREADS = 32;

/**
 * Set all options on (report all).
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-report-all
 *
 * @var int
 */
const MYSQLI_REPORT_ALL = 255;

/**
 * Report errors from mysqli function calls.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-report-error
 *
 * @var int
 */
const MYSQLI_REPORT_ERROR = 1;

/**
 * Report if no index or bad index was used in a query.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-report-index
 *
 * @var int
 */
const MYSQLI_REPORT_INDEX = 4;

/**
 * Turns reporting off.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-report-off
 *
 * @var int
 */
const MYSQLI_REPORT_OFF = 0;

/**
 * Throw a <code>mysqli_sql_exception</code> for errors instead of warnings.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-report-strict
 *
 * @var int
 */
const MYSQLI_REPORT_STRICT = 2;

/**
 * @var int
 */
const MYSQLI_SERVER_PS_OUT_PARAMS = 4096;

/**
 * RSA public key file used with the SHA-256 based authentication.
 *
 * @link http://www.php.net/manual/en/mysqli.options.php
 *
 * @var int
 */
const MYSQLI_SERVER_PUBLIC_KEY = 35;

/**
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-server-query-no-good-index-used
 *
 * @var int
 */
const MYSQLI_SERVER_QUERY_NO_GOOD_INDEX_USED = 16;

/**
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-server-query-no-index-used
 *
 * @var int
 */
const MYSQLI_SERVER_QUERY_NO_INDEX_USED = 32;

/**
 * @var int
 */
const MYSQLI_SERVER_QUERY_WAS_SLOW = 2048;

/**
 * @var int
 */
const MYSQLI_SET_CHARSET_DIR = 6;

/**
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-set-charset-name
 *
 * @var int
 */
const MYSQLI_SET_CHARSET_NAME = 7;

/**
 * Field is defined as <code>SET</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-set-flag
 *
 * @var int
 */
const MYSQLI_SET_FLAG = 2048;

/**
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-stmt-attr-cursor-type
 *
 * @var int
 */
const MYSQLI_STMT_ATTR_CURSOR_TYPE = 1;

/**
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-stmt-attr-prefetch-rows
 *
 * @var int
 */
const MYSQLI_STMT_ATTR_PREFETCH_ROWS = 2;

/**
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-stmt-attr-update-max-length
 *
 * @var int
 */
const MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH = 0;

/**
 * For using buffered resultsets
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-store-result
 *
 * @var int
 */
const MYSQLI_STORE_RESULT = 0;

/**
 * Copy results from the internal mysqlnd buffer into the PHP variables fetched. By default,
 * mysqlnd will use a reference logic to avoid copying and duplicating results held in memory.
 * For certain result sets, for example, result sets with many small rows, the copy approach can
 * reduce the overall memory usage because PHP variables holding results may be
 * released earlier (available with mysqlnd only, since PHP 5.6.0)
 *
 * @link http://www.php.net/manual/en/mysqli.store-result.php
 *
 * @var int
 */
const MYSQLI_STORE_RESULT_COPY_DATA = 16;

/**
 * Field is defined as <code>TIMESTAMP</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-timestamp-flag
 *
 * @var int
 */
const MYSQLI_TIMESTAMP_FLAG = 1024;

/**
 * Appends "AND CHAIN" to <code>mysqli_commit</code> or
 * <code>mysqli_rollback</code>.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-trans-cor-and-chain
 *
 * @var int
 */
const MYSQLI_TRANS_COR_AND_CHAIN = 1;

/**
 * Appends "AND NO CHAIN" to <code>mysqli_commit</code> or
 * <code>mysqli_rollback</code>.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-trans-cor-and-no-chain
 *
 * @var int
 */
const MYSQLI_TRANS_COR_AND_NO_CHAIN = 2;

/**
 * Appends "NO RELEASE" to <code>mysqli_commit</code> or
 * <code>mysqli_rollback</code>.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-trans-cor-no-release
 *
 * @var int
 */
const MYSQLI_TRANS_COR_NO_RELEASE = 8;

/**
 * Appends "RELEASE" to <code>mysqli_commit</code> or
 * <code>mysqli_rollback</code>.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-trans-cor-release
 *
 * @var int
 */
const MYSQLI_TRANS_COR_RELEASE = 4;

/**
 * Start the transaction as "START TRANSACTION READ ONLY" with
 * <code>mysqli_begin_transaction</code>.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-trans-start-read-only
 *
 * @var int
 */
const MYSQLI_TRANS_START_READ_ONLY = 4;

/**
 * Start the transaction as "START TRANSACTION READ WRITE" with
 * <code>mysqli_begin_transaction</code>.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-trans-start-read-write
 *
 * @var int
 */
const MYSQLI_TRANS_START_READ_WRITE = 2;

/**
 * @var int
 */
const MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT = 1;

/**
 * Field is defined as <code>BIT</code> (MySQL 5.0.3 and up)
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-bit
 *
 * @var int
 */
const MYSQLI_TYPE_BIT = 16;

/**
 * Field is defined as <code>BLOB</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-blob
 *
 * @var int
 */
const MYSQLI_TYPE_BLOB = 252;

/**
 * Field is defined as <code>TINYINT</code>.
 * For <code>CHAR</code>, see <code>MYSQLI_TYPE_STRING</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-char
 *
 * @var int
 */
const MYSQLI_TYPE_CHAR = 1;

/**
 * Field is defined as <code>DATE</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-date
 *
 * @var int
 */
const MYSQLI_TYPE_DATE = 10;

/**
 * Field is defined as <code>DATETIME</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-datetime
 *
 * @var int
 */
const MYSQLI_TYPE_DATETIME = 12;

/**
 * Field is defined as <code>DECIMAL</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-decimal
 *
 * @var int
 */
const MYSQLI_TYPE_DECIMAL = 0;

/**
 * Field is defined as <code>DOUBLE</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-double
 *
 * @var int
 */
const MYSQLI_TYPE_DOUBLE = 5;

/**
 * Field is defined as <code>ENUM</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-enum
 *
 * @var int
 */
const MYSQLI_TYPE_ENUM = 247;

/**
 * Field is defined as <code>FLOAT</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-fload
 *
 * @var int
 */
const MYSQLI_TYPE_FLOAT = 4;

/**
 * Field is defined as <code>GEOMETRY</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-geometry
 *
 * @var int
 */
const MYSQLI_TYPE_GEOMETRY = 255;

/**
 * Field is defined as <code>MEDIUMINT</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-int24
 *
 * @var int
 */
const MYSQLI_TYPE_INT24 = 9;

/**
 * Field is defined as <code>INTERVAL</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-interval
 *
 * @var int
 */
const MYSQLI_TYPE_INTERVAL = 247;

/**
 * @var int
 */
const MYSQLI_TYPE_JSON = 245;

/**
 * Field is defined as <code>INT</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-long
 *
 * @var int
 */
const MYSQLI_TYPE_LONG = 3;

/**
 * Field is defined as <code>LONGBLOB</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-long-blob
 *
 * @var int
 */
const MYSQLI_TYPE_LONG_BLOB = 251;

/**
 * Field is defined as <code>BIGINT</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-longlong
 *
 * @var int
 */
const MYSQLI_TYPE_LONGLONG = 8;

/**
 * Field is defined as <code>MEDIUMBLOB</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-medium-blob
 *
 * @var int
 */
const MYSQLI_TYPE_MEDIUM_BLOB = 250;

/**
 * Field is defined as <code>DATE</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-newdate
 *
 * @var int
 */
const MYSQLI_TYPE_NEWDATE = 14;

/**
 * Precision math <code>DECIMAL</code> or <code>NUMERIC</code> field (MySQL 5.0.3 and up)
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-newdecimal
 *
 * @var int
 */
const MYSQLI_TYPE_NEWDECIMAL = 246;

/**
 * Field is defined as <code>DEFAULT NULL</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-null
 *
 * @var int
 */
const MYSQLI_TYPE_NULL = 6;

/**
 * Field is defined as <code>SET</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-set
 *
 * @var int
 */
const MYSQLI_TYPE_SET = 248;

/**
 * Field is defined as <code>SMALLINT</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-short
 *
 * @var int
 */
const MYSQLI_TYPE_SHORT = 2;

/**
 * Field is defined as <code>CHAR</code> or <code>BINARY</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-string
 *
 * @var int
 */
const MYSQLI_TYPE_STRING = 254;

/**
 * Field is defined as <code>TIME</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-time
 *
 * @var int
 */
const MYSQLI_TYPE_TIME = 11;

/**
 * Field is defined as <code>TIMESTAMP</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-timestamp
 *
 * @var int
 */
const MYSQLI_TYPE_TIMESTAMP = 7;

/**
 * Field is defined as <code>TINYINT</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-tiny
 *
 * @var int
 */
const MYSQLI_TYPE_TINY = 1;

/**
 * Field is defined as <code>TINYBLOB</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-tiny-blob
 *
 * @var int
 */
const MYSQLI_TYPE_TINY_BLOB = 249;

/**
 * Field is defined as <code>VARCHAR</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-var-string
 *
 * @var int
 */
const MYSQLI_TYPE_VAR_STRING = 253;

/**
 * Field is defined as <code>YEAR</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-type-year
 *
 * @var int
 */
const MYSQLI_TYPE_YEAR = 13;

/**
 * Field is part of a unique index.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-unique-key-flag
 *
 * @var int
 */
const MYSQLI_UNIQUE_KEY_FLAG = 4;

/**
 * Field is defined as <code>UNSIGNED</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-unsigned-flag
 *
 * @var int
 */
const MYSQLI_UNSIGNED_FLAG = 32;

/**
 * For using unbuffered resultsets
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-use-result
 *
 * @var int
 */
const MYSQLI_USE_RESULT = 1;

/**
 * Field is defined as <code>ZEROFILL</code>
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-zerofill-flag
 *
 * @var int
 */
const MYSQLI_ZEROFILL_FLAG = 64;

/**
 * Represents a connection between PHP and a MySQL database.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.mysqli.php
 */
class mysqli
{
    /**
     * @var mixed
     */
    public $affected_rows;

    /**
     * @var mixed
     */
    public $client_info;

    /**
     * @var mixed
     */
    public $client_version;

    /**
     * @var mixed
     */
    public $connect_errno;

    /**
     * @var mixed
     */
    public $connect_error;

    /**
     * @var mixed
     */
    public $errno;

    /**
     * @var mixed
     */
    public $error;

    /**
     * @var mixed
     */
    public $error_list;

    /**
     * @var mixed
     */
    public $field_count;

    /**
     * @var mixed
     */
    public $host_info;

    /**
     * @var mixed
     */
    public $info;

    /**
     * @var mixed
     */
    public $insert_id;

    /**
     * @var mixed
     */
    public $protocol_version;

    /**
     * @var mixed
     */
    public $server_info;

    /**
     * @var mixed
     */
    public $server_version;

    /**
     * @var mixed
     */
    public $sqlstate;

    /**
     * @var mixed
     */
    public $stat;

    /**
     * @var mixed
     */
    public $thread_id;

    /**
     * @var mixed
     */
    public $warning_count;

    /**
     * Open a new connection to the MySQL server
     *
     * @param string|null $host Can be either a host name or an IP address. Passing the <code>NULL</code> value
     * or the string "localhost" to this parameter, the local host is
     * assumed. When possible, pipes will be used instead of the TCP/IP
     * protocol.
     * @param string|null $username The MySQL user name.
     * @param string|null $passwd If not provided or <code>NULL</code>, the MySQL server will attempt to authenticate
     * the user against those user records which have no password only. This
     * allows one username to be used with different permissions (depending
     * on if a password is provided or not).
     * @param string|null $dbname If provided will specify the default database to be used when
     * performing queries.
     * @param int|null $port Specifies the port number to attempt to connect to the MySQL server.
     * @param string|null $socket Specifies the socket or named pipe that should be used.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/mysqli.construct.php
     */
    public function __construct(string $host = /* ini_get("mysqli.default_host") */ null, string $username = /* ini_get("mysqli.default_user") */ null, string $passwd = /* ini_get("mysqli.default_pw") */ null, string $dbname = "", int $port = /* ini_get("mysqli.default_port") */ null, string $socket = /* ini_get("mysqli.default_socket") */ null)
    {
    }

    /**
     * Turns on or off auto-committing database modifications
     *
     * @param bool $mode Whether to turn on auto-commit or not.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli.autocommit.php
     */
    public function autocommit(bool $mode): bool
    {
    }

    /**
     * Starts a transaction
     *
     * @param int $flags Valid flags are:
     * @param string $name Savepoint name for the transaction.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli.begin-transaction.php
     */
    public function begin_transaction(int $flags = null, string $name = null): bool
    {
    }

    /**
     * Changes the user of the specified database connection
     *
     * @param string $user The MySQL user name.
     * @param string $password The MySQL password.
     * @param string $database The database to change to.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli.change-user.php
     */
    public function change_user(string $user, string $password, string $database): bool
    {
    }

    /**
     * Returns the default character set for the database connection
     *
     * @return string The default character set for the current connection
     *
     * @link http://www.php.net/manual/en/mysqli.character-set-name.php
     */
    public function character_set_name(): string
    {
    }

    /**
     * Closes a previously opened database connection
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli.close.php
     */
    public function close(): bool
    {
    }

    /**
     * Commits the current transaction
     *
     * @param int $flags A bitmask of <code>MYSQLI_TRANS_COR_*</code> constants.
     * @param string $name If provided then <code>COMMIT&#47;&#42;name&#42;&#47;</code> is executed.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli.commit.php
     */
    public function commit(int $flags = null, string $name = null): bool
    {
    }

    /**
     * Open a new connection to the MySQL server
     *
     * @param string|null $host Can be either a host name or an IP address. Passing the <code>NULL</code> value
     * or the string "localhost" to this parameter, the local host is
     * assumed. When possible, pipes will be used instead of the TCP/IP
     * protocol.
     * @param string|null $username The MySQL user name.
     * @param string|null $passwd If not provided or <code>NULL</code>, the MySQL server will attempt to authenticate
     * the user against those user records which have no password only. This
     * allows one username to be used with different permissions (depending
     * on if a password is provided or not).
     * @param string|null $dbname If provided will specify the default database to be used when
     * performing queries.
     * @param int|null $port Specifies the port number to attempt to connect to the MySQL server.
     * @param string|null $socket Specifies the socket or named pipe that should be used.
     *
     * @return void Returns an object which represents the connection to a MySQL Server.
     *
     * @link http://www.php.net/manual/en/mysqli.construct.php
     */
    public function connect(string $host = /* ini_get("mysqli.default_host") */ null, string $username = /* ini_get("mysqli.default_user") */ null, string $passwd = /* ini_get("mysqli.default_pw") */ null, string $dbname = "", int $port = /* ini_get("mysqli.default_port") */ null, string $socket = /* ini_get("mysqli.default_socket") */ null): void
    {
    }

    /**
     * Performs debugging operations
     *
     * @param string $message A string representing the debugging operation to perform
     *
     * @return bool Returns <code>TRUE</code>.
     *
     * @link http://www.php.net/manual/en/mysqli.debug.php
     */
    public function debug(string $message): bool
    {
    }

    /**
     * Dump debugging information into the log
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli.dump-debug-info.php
     */
    public function dump_debug_info(): bool
    {
    }

    /**
     * Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
     *
     * @param string $escapestr The string to be escaped.
     *
     * @return string Returns an escaped string.
     *
     * @link http://www.php.net/manual/en/mysqli.real-escape-string.php
     */
    public function escape_string(string $escapestr): string
    {
    }

    /**
     * Returns a character set object
     *
     * @return object The function returns a character set object with the following properties:
     * <ul>
     * <li>
     * <code><code>charset</code></code>
     * Character set name
     * </li>
     * <li>
     * <code><code>collation</code></code>
     * Collation name
     * </li>
     * <li>
     * <code><code>dir</code></code>
     * Directory the charset description was fetched from (?) or "" for built-in character sets
     * </li>
     * <li>
     * <code><code>min_length</code></code>
     * Minimum character length in bytes
     * </li>
     * <li>
     * <code><code>max_length</code></code>
     * Maximum character length in bytes
     * </li>
     * <li>
     * <code><code>number</code></code>
     * Internal character set number
     * </li>
     * <li>
     * <code><code>state</code></code>
     * Character set status (?)
     * </li>
     * </ul>
     *
     * @link http://www.php.net/manual/en/mysqli.get-charset.php
     */
    public function get_charset(): object
    {
    }

    /**
     * Get MySQL client info
     *
     * @return string A string that represents the MySQL client library version
     *
     * @link http://www.php.net/manual/en/mysqli.get-client-info.php
     */
    public function get_client_info(): string
    {
    }

    /**
     * Returns statistics about the client connection
     *
     * @return bool Returns an array with connection stats if success, <code>FALSE</code> otherwise.
     *
     * @link http://www.php.net/manual/en/mysqli.get-connection-stats.php
     */
    public function get_connection_stats(): bool
    {
    }

    /**
     * Returns the version of the MySQL server
     *
     * @return string A character string representing the server version.
     *
     * @link http://www.php.net/manual/en/mysqli.get-server-info.php
     */
    public function get_server_info(): string
    {
    }

    /**
     * Get result of SHOW WARNINGS
     *
     * @return mysqli_warning
     *
     * @link http://www.php.net/manual/en/mysqli.get-warnings.php
     */
    public function get_warnings(): mysqli_warning
    {
    }

    /**
     * Initializes MySQLi and returns a resource for use with mysqli_real_connect()
     *
     * @return mysqli Returns an object.
     *
     * @link http://www.php.net/manual/en/mysqli.init.php
     */
    public function init(): mysqli
    {
    }

    /**
     * Asks the server to kill a MySQL thread
     *
     * @param int $processid
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli.kill.php
     */
    public function kill(int $processid): bool
    {
    }

    /**
     * Check if there are any more query results from a multi query
     *
     * @return bool Returns <code>TRUE</code> if one or more result sets are available from a previous call to
     * <code>mysqli_multi_query</code>, otherwise <code>FALSE</code>.
     *
     * @link http://www.php.net/manual/en/mysqli.more-results.php
     */
    public function more_results(): bool
    {
    }

    /**
     * Performs a query on the database
     *
     * @param string $query The query, as a string.
     *
     * @return bool Returns <code>FALSE</code> if the first statement failed.
     * To retrieve subsequent errors from other statements you have to call
     * <code>mysqli_next_result</code> first.
     *
     * @link http://www.php.net/manual/en/mysqli.multi-query.php
     */
    public function multi_query(string $query): bool
    {
    }

    /**
     * Prepare next result from multi_query
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli.next-result.php
     */
    public function next_result(): bool
    {
    }

    /**
     * Set options
     *
     * @param int $option The option that you want to set. It can be one of the following values:
     * <table>
     * <title>Valid options</title>
     * <thead>
     * <tr>
     * <td>Name</td><td>Description</td>
     * </tr>
     * </thead>
     * <tbody>
     * <tr>
     * <td><code>MYSQLI_OPT_CONNECT_TIMEOUT</code></td><td>connection timeout in seconds (supported on Windows with TCP/IP since PHP 5.3.1)</td>
     * </tr>
     * <tr>
     * <td><code>MYSQLI_OPT_LOCAL_INFILE</code></td><td>enable/disable use of <code>LOAD LOCAL INFILE</code></td>
     * </tr>
     * <tr>
     * <td><code>MYSQLI_INIT_COMMAND</code></td><td>command to execute after when connecting to MySQL server</td>
     * </tr>
     * <tr>
     * <td><code>MYSQLI_READ_DEFAULT_FILE</code></td><td>
     * Read options from named option file instead of <code>my.cnf</code>
     * </td>
     * </tr>
     * <tr>
     * <td><code>MYSQLI_READ_DEFAULT_GROUP</code></td><td>
     * Read options from the named group from <code>my.cnf</code>
     * or the file specified with <code>MYSQL_READ_DEFAULT_FILE</code>.
     * </td>
     * </tr>
     * <tr>
     * <td><code>MYSQLI_SERVER_PUBLIC_KEY</code></td><td>
     * RSA public key file used with the SHA-256 based authentication.
     * </td>
     * </tr>
     * <tr>
     * <td><code>MYSQLI_OPT_NET_CMD_BUFFER_SIZE</code></td><td>
     * The size of the internal command/network buffer. Only valid for
     * mysqlnd.
     * </td>
     * </tr>
     * <tr>
     * <td><code>MYSQLI_OPT_NET_READ_BUFFER_SIZE</code></td><td>
     * Maximum read chunk size in bytes when reading the body of a MySQL
     * command packet. Only valid for mysqlnd.
     * </td>
     * </tr>
     * <tr>
     * <td><code>MYSQLI_OPT_INT_AND_FLOAT_NATIVE</code></td><td>
     * Convert integer and float columns back to PHP numbers. Only valid
     * for mysqlnd.
     * </td>
     * </tr>
     * <tr>
     * <td><code>MYSQLI_OPT_SSL_VERIFY_SERVER_CERT</code></td><td>
     * </td>
     * </tr>
     * </tbody>
     * </table>
     * @param mixed $value The value for the option.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli.options.php
     */
    public function options(int $option, $value): bool
    {
    }

    /**
     * Pings a server connection, or tries to reconnect if the connection has gone down
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli.ping.php
     */
    public function ping(): bool
    {
    }

    /**
     * Poll connections
     *
     * @param array|null $read List of connections to check for outstanding results that can be read.
     * @param array|null $error List of connections on which an error occured, for example, query
     * failure or lost connection.
     * @param array|null $reject List of connections rejected because no asynchronous query
     * has been run on for which the function could poll results.
     * @param int $sec Maximum number of seconds to wait, must be non-negative.
     * @param int $usec Maximum number of microseconds to wait, must be non-negative.
     *
     * @return int Returns number of ready connections upon success, <code>FALSE</code> otherwise.
     *
     * @link http://www.php.net/manual/en/mysqli.poll.php
     */
    public static function poll(array &$read = null, array &$error = null, array &$reject = null, int $sec, int $usec = null): int
    {
    }

    /**
     * Prepare an SQL statement for execution
     *
     * @param string $query The query, as a string.
     *
     * @return mysqli_stmt <code>mysqli_prepare</code> returns a statement object or <code>FALSE</code> if an error occurred.
     *
     * @link http://www.php.net/manual/en/mysqli.prepare.php
     */
    public function prepare(string $query): mysqli_stmt
    {
    }

    /**
     * Performs a query on the database
     *
     * @param string $query The query string.
     * @param int|null $resultmode Either the constant <code>MYSQLI_USE_RESULT</code> or
     * <code>MYSQLI_STORE_RESULT</code> depending on the desired
     * behavior. By default, <code>MYSQLI_STORE_RESULT</code> is used.
     *
     * @return mixed Returns <code>FALSE</code> on failure. For successful <code>SELECT, SHOW, DESCRIBE</code> or
     * <code>EXPLAIN</code> queries <code>mysqli_query</code> will return
     * a <code>mysqli_result</code> object. For other successful queries <code>mysqli_query</code> will
     * return <code>TRUE</code>.
     *
     * @link http://www.php.net/manual/en/mysqli.query.php
     */
    public function query(string $query, int $resultmode = MYSQLI_STORE_RESULT)
    {
    }

    /**
     * Opens a connection to a mysql server
     *
     * @param string $host Can be either a host name or an IP address. Passing the <code>NULL</code> value
     * or the string "localhost" to this parameter, the local host is
     * assumed. When possible, pipes will be used instead of the TCP/IP
     * protocol.
     * @param string $username The MySQL user name.
     * @param string $passwd If provided or <code>NULL</code>, the MySQL server will attempt to authenticate
     * the user against those user records which have no password only. This
     * allows one username to be used with different permissions (depending
     * on if a password as provided or not).
     * @param string $dbname If provided will specify the default database to be used when
     * performing queries.
     * @param int $port Specifies the port number to attempt to connect to the MySQL server.
     * @param string $socket Specifies the socket or named pipe that should be used.
     * @param int $flags With the parameter <code>flags</code> you can set different
     * connection options:
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli.real-connect.php
     */
    public function real_connect(string $host = null, string $username = null, string $passwd = null, string $dbname = null, int $port = null, string $socket = null, int $flags = null): bool
    {
    }

    /**
     * Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
     *
     * @param string $escapestr The string to be escaped.
     *
     * @return string Returns an escaped string.
     *
     * @link http://www.php.net/manual/en/mysqli.real-escape-string.php
     */
    public function real_escape_string(string $escapestr): string
    {
    }

    /**
     * Execute an SQL query
     *
     * @param string $query The query, as a string.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli.real-query.php
     */
    public function real_query(string $query): bool
    {
    }

    /**
     * Get result from async query
     *
     * @return mysqli_result Returns <code>mysqli_result</code> in success, <code>FALSE</code> otherwise.
     *
     * @link http://www.php.net/manual/en/mysqli.reap-async-query.php
     */
    public function reap_async_query(): mysqli_result
    {
    }

    /**
     * Refreshes
     *
     * @param int $options The options to refresh, using the MYSQLI_REFRESH_* constants as documented
     * within the MySQLi constants documentation.
     *
     * @return bool <code>TRUE</code> if the refresh was a success, otherwise <code>FALSE</code>
     *
     * @link http://www.php.net/manual/en/mysqli.refresh.php
     */
    public function refresh(int $options): bool
    {
    }

    /**
     * Removes the named savepoint from the set of savepoints of the current transaction
     *
     * @param string $name
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli.release-savepoint.php
     */
    public function release_savepoint(string $name): bool
    {
    }

    /**
     * Rolls back current transaction
     *
     * @param int $flags A bitmask of <code>MYSQLI_TRANS_COR_*</code> constants.
     * @param string $name If provided then <code>ROLLBACK&#47;&#42;name&#42;&#47;</code> is executed.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli.rollback.php
     */
    public function rollback(int $flags = null, string $name = null): bool
    {
    }

    /**
     * Set a named transaction savepoint
     *
     * @param string $name
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli.savepoint.php
     */
    public function savepoint(string $name): bool
    {
    }

    /**
     * Selects the default database for database queries
     *
     * @param string $dbname The database name.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli.select-db.php
     */
    public function select_db(string $dbname): bool
    {
    }

    /**
     * Sets the default client character set
     *
     * @param string $charset The charset to be set as default.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli.set-charset.php
     */
    public function set_charset(string $charset): bool
    {
    }

    /**
     * Alias of <code>mysqli_options</code>
     *
     * @param mixed $option
     * @param mixed $value
     *
     * @link http://www.php.net/manual/en/function.mysqli-set-opt.php
     */
    public function set_opt($option, $value)
    {
    }

    /**
     * Used for establishing secure connections using SSL
     *
     * @param string $key The path name to the key file.
     * @param string $cert The path name to the certificate file.
     * @param string $ca The path name to the certificate authority file.
     * @param string $capath The pathname to a directory that contains trusted SSL CA certificates
     * in PEM format.
     * @param string $cipher A list of allowable ciphers to use for SSL encryption.
     *
     * @return bool This function always returns <code>TRUE</code> value. If SSL setup is
     * incorrect <code>mysqli_real_connect</code> will return an error
     * when you attempt to connect.
     *
     * @link http://www.php.net/manual/en/mysqli.ssl-set.php
     */
    public function ssl_set(string $key, string $cert, string $ca, string $capath, string $cipher): bool
    {
    }

    /**
     * Gets the current system status
     *
     * @return string A string describing the server status. <code>FALSE</code> if an error occurred.
     *
     * @link http://www.php.net/manual/en/mysqli.stat.php
     */
    public function stat(): string
    {
    }

    /**
     * Initializes a statement and returns an object for use with mysqli_stmt_prepare
     *
     * @return mysqli_stmt Returns an object.
     *
     * @link http://www.php.net/manual/en/mysqli.stmt-init.php
     */
    public function stmt_init(): mysqli_stmt
    {
    }

    /**
     * Transfers a result set from the last query
     *
     * @param int $option The option that you want to set. It can be one of the following values:
     * <table>
     * <title>Valid options</title>
     * <thead>
     * <tr>
     * <td>Name</td><td>Description</td>
     * </tr>
     * </thead>
     * <tbody>
     * <tr>
     * <td><code>MYSQLI_STORE_RESULT_COPY_DATA</code></td><td>Copy results from the internal mysqlnd buffer into the PHP variables fetched. By default,
     * mysqlnd will use a reference logic to avoid copying and duplicating results held in memory.
     * For certain result sets, for example, result sets with many small rows, the copy approach can
     * reduce the overall memory usage because PHP variables holding results may be
     * released earlier (available with mysqlnd only, since PHP 5.6.0)</td>
     * </tr>
     * </tbody>
     * </table>
     *
     * @return mysqli_result Returns a buffered result object or <code>FALSE</code> if an error occurred.
     *
     * @link http://www.php.net/manual/en/mysqli.store-result.php
     */
    public function store_result(int $option = null): mysqli_result
    {
    }

    /**
     * Returns whether thread safety is given or not
     *
     * @return bool <code>TRUE</code> if the client library is thread-safe, otherwise <code>FALSE</code>.
     *
     * @link http://www.php.net/manual/en/mysqli.thread-safe.php
     */
    public function thread_safe(): bool
    {
    }

    /**
     * Initiate a result set retrieval
     *
     * @return mysqli_result Returns an unbuffered result object or <code>FALSE</code> if an error occurred.
     *
     * @link http://www.php.net/manual/en/mysqli.use-result.php
     */
    public function use_result(): mysqli_result
    {
    }
}

/**
 * MySQLi Driver.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.mysqli-driver.php
 */
final class mysqli_driver
{
    /**
     * @var mixed
     */
    public $client_info;

    /**
     * @var mixed
     */
    public $client_version;

    /**
     * @var mixed
     */
    public $driver_version;

    /**
     * @var mixed
     */
    public $embedded;

    /**
     * @var mixed
     */
    public $reconnect;

    /**
     * @var mixed
     */
    public $report_mode;
}

/**
 * Represents the result set obtained from a query against the database.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.mysqli-result.php
 */
class mysqli_result implements Traversable
{
    /**
     * @var mixed
     */
    public $current_field;

    /**
     * @var mixed
     */
    public $field_count;

    /**
     * @var mixed
     */
    public $lengths;

    /**
     * @var mixed
     */
    public $num_rows;

    /**
     * @var mixed
     */
    public $type;

    public function __construct()
    {
    }

    /**
     * Frees the memory associated with a result
     *
     * @return void No value is returned.
     *
     * @link http://www.php.net/manual/en/mysqli-result.free.php
     */
    public function close(): void
    {
    }

    /**
     * Adjusts the result pointer to an arbitrary row in the result
     *
     * @param int $offset The field offset. Must be between zero and the total number of rows
     * minus one (0..<code>mysqli_num_rows</code> - 1).
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli-result.data-seek.php
     */
    public function data_seek(int $offset): bool
    {
    }

    /**
     * Fetches all result rows as an associative array, a numeric array, or both
     *
     * @param int|null $resulttype This optional parameter is a constant indicating what type of array
     * should be produced from the current row data. The possible values for
     * this parameter are the constants <code>MYSQLI_ASSOC</code>,
     * <code>MYSQLI_NUM</code>, or <code>MYSQLI_BOTH</code>.
     *
     * @return mixed Returns an array of associative or numeric arrays holding result rows.
     *
     * @link http://www.php.net/manual/en/mysqli-result.fetch-all.php
     */
    public function fetch_all(int $resulttype = MYSQLI_NUM)
    {
    }

    /**
     * Fetch a result row as an associative, a numeric array, or both
     *
     * @param int|null $resulttype This optional parameter is a constant indicating what type of array
     * should be produced from the current row data. The possible values for
     * this parameter are the constants <code>MYSQLI_ASSOC</code>,
     * <code>MYSQLI_NUM</code>, or <code>MYSQLI_BOTH</code>.
     *
     * @return mixed Returns an array of strings that corresponds to the fetched row or <code>NULL</code> if there
     * are no more rows in resultset.
     *
     * @link http://www.php.net/manual/en/mysqli-result.fetch-array.php
     */
    public function fetch_array(int $resulttype = MYSQLI_BOTH)
    {
    }

    /**
     * Fetch a result row as an associative array
     *
     * @return array Returns an associative array of strings representing the fetched row in the result
     * set, where each key in the array represents the name of one of the result
     * set's columns or <code>NULL</code> if there are no more rows in resultset.
     * If two or more columns of the result have the same field names, the last
     * column will take precedence. To access the other column(s) of the same
     * name, you either need to access the result with numeric indices by using
     * <code>mysqli_fetch_row</code> or add alias names.
     *
     * @link http://www.php.net/manual/en/mysqli-result.fetch-assoc.php
     */
    public function fetch_assoc(): array
    {
    }

    /**
     * Returns the next field in the result set
     *
     * @return object Returns an object which contains field definition information or <code>FALSE</code>
     * if no field information is available.
     * <table>
     * <title>Object properties</title>
     * <thead>
     * <tr>
     * <td>Property</td><td>Description</td>
     * </tr>
     * </thead>
     * <tbody>
     * <tr>
     * <td>name</td><td>The name of the column</td>
     * </tr>
     * <tr>
     * <td>orgname</td><td>Original column name if an alias was specified</td>
     * </tr>
     * <tr>
     * <td>table</td><td>The name of the table this field belongs to (if not calculated)</td>
     * </tr>
     * <tr>
     * <td>orgtable</td><td>Original table name if an alias was specified</td>
     * </tr>
     * <tr>
     * <td>def</td><td>Reserved for default value, currently always ""</td>
     * </tr>
     * <tr>
     * <td>db</td><td>Database (since PHP 5.3.6)</td>
     * </tr>
     * <tr>
     * <td>catalog</td><td>The catalog name, always "def" (since PHP 5.3.6)</td>
     * </tr>
     * <tr>
     * <td>max_length</td><td>The maximum width of the field for the result set.</td>
     * </tr>
     * <tr>
     * <td>length</td><td>The width of the field, as specified in the table definition.</td>
     * </tr>
     * <tr>
     * <td>charsetnr</td><td>The character set number for the field.</td>
     * </tr>
     * <tr>
     * <td>flags</td><td>An integer representing the bit-flags for the field.</td>
     * </tr>
     * <tr>
     * <td>type</td><td>The data type used for this field</td>
     * </tr>
     * <tr>
     * <td>decimals</td><td>The number of decimals used (for integer fields)</td>
     * </tr>
     * </tbody>
     * </table>
     *
     * @link http://www.php.net/manual/en/mysqli-result.fetch-field.php
     */
    public function fetch_field(): object
    {
    }

    /**
     * Fetch meta-data for a single field
     *
     * @param int $fieldnr The field number. This value must be in the range from
     * <code>0</code> to <code>number of fields - 1</code>.
     *
     * @return object Returns an object which contains field definition information or <code>FALSE</code>
     * if no field information for specified <code>fieldnr</code> is
     * available.
     * <table>
     * <title>Object attributes</title>
     * <thead>
     * <tr>
     * <td>Attribute</td><td>Description</td>
     * </tr>
     * </thead>
     * <tbody>
     * <tr>
     * <td>name</td><td>The name of the column</td>
     * </tr>
     * <tr>
     * <td>orgname</td><td>Original column name if an alias was specified</td>
     * </tr>
     * <tr>
     * <td>table</td><td>The name of the table this field belongs to (if not calculated)</td>
     * </tr>
     * <tr>
     * <td>orgtable</td><td>Original table name if an alias was specified</td>
     * </tr>
     * <tr>
     * <td>def</td><td>The default value for this field, represented as a string</td>
     * </tr>
     * <tr>
     * <td>max_length</td><td>The maximum width of the field for the result set.</td>
     * </tr>
     * <tr>
     * <td>length</td><td>The width of the field, as specified in the table definition.</td>
     * </tr>
     * <tr>
     * <td>charsetnr</td><td>The character set number for the field.</td>
     * </tr>
     * <tr>
     * <td>flags</td><td>An integer representing the bit-flags for the field.</td>
     * </tr>
     * <tr>
     * <td>type</td><td>The data type used for this field</td>
     * </tr>
     * <tr>
     * <td>decimals</td><td>The number of decimals used (for numeric fields)</td>
     * </tr>
     * </tbody>
     * </table>
     *
     * @link http://www.php.net/manual/en/mysqli-result.fetch-field-direct.php
     */
    public function fetch_field_direct(int $fieldnr): object
    {
    }

    /**
     * Returns an array of objects representing the fields in a result set
     *
     * @return array Returns an array of objects which contains field definition information or
     * <code>FALSE</code> if no field information is available.
     * <table>
     * <title>Object properties</title>
     * <thead>
     * <tr>
     * <td>Property</td><td>Description</td>
     * </tr>
     * </thead>
     * <tbody>
     * <tr>
     * <td>name</td><td>The name of the column</td>
     * </tr>
     * <tr>
     * <td>orgname</td><td>Original column name if an alias was specified</td>
     * </tr>
     * <tr>
     * <td>table</td><td>The name of the table this field belongs to (if not calculated)</td>
     * </tr>
     * <tr>
     * <td>orgtable</td><td>Original table name if an alias was specified</td>
     * </tr>
     * <tr>
     * <td>max_length</td><td>The maximum width of the field for the result set.</td>
     * </tr>
     * <tr>
     * <td>length</td><td>
     * The width of the field, in bytes, as specified in the table definition. Note that
     * this number (bytes) might differ from your table definition value (characters), depending on
     * the character set you use. For example, the character set utf8 has 3 bytes per character,
     * so varchar(10) will return a length of 30 for utf8 (10*3), but return 10 for latin1 (10*1).
     * </td>
     * </tr>
     * <tr>
     * <td>charsetnr</td><td>The character set number (id) for the field.</td>
     * </tr>
     * <tr>
     * <td>flags</td><td>An integer representing the bit-flags for the field.</td>
     * </tr>
     * <tr>
     * <td>type</td><td>The data type used for this field</td>
     * </tr>
     * <tr>
     * <td>decimals</td><td>The number of decimals used (for integer fields)</td>
     * </tr>
     * </tbody>
     * </table>
     *
     * @link http://www.php.net/manual/en/mysqli-result.fetch-fields.php
     */
    public function fetch_fields(): array
    {
    }

    /**
     * Returns the current row of a result set as an object
     *
     * @param string|null $class_name The name of the class to instantiate, set the properties of and return.
     * If not specified, a <code>stdClass</code> object is returned.
     * @param array $params An optional <code>array</code> of parameters to pass to the constructor
     * for <code>class_name</code> objects.
     *
     * @return object Returns an object with string properties that corresponds to the fetched
     * row or <code>NULL</code> if there are no more rows in resultset.
     *
     * @link http://www.php.net/manual/en/mysqli-result.fetch-object.php
     */
    public function fetch_object(string $class_name = "stdClass", array $params = null): object
    {
    }

    /**
     * Get a result row as an enumerated array
     *
     * @return mixed <code>mysqli_fetch_row</code> returns an array of strings that corresponds to the fetched row
     * or <code>NULL</code> if there are no more rows in result set.
     *
     * @link http://www.php.net/manual/en/mysqli-result.fetch-row.php
     */
    public function fetch_row()
    {
    }

    /**
     * Set result pointer to a specified field offset
     *
     * @param int $fieldnr The field number. This value must be in the range from
     * <code>0</code> to <code>number of fields - 1</code>.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli-result.field-seek.php
     */
    public function field_seek(int $fieldnr): bool
    {
    }

    /**
     * Frees the memory associated with a result
     *
     * @return void No value is returned.
     *
     * @link http://www.php.net/manual/en/mysqli-result.free.php
     */
    public function free(): void
    {
    }

    /**
     * Frees the memory associated with a result
     *
     * @return void No value is returned.
     *
     * @link http://www.php.net/manual/en/mysqli-result.free.php
     */
    public function free_result(): void
    {
    }
}

/**
 * The mysqli exception handling class.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.mysqli-sql-exception.php
 */
final class mysqli_sql_exception extends RuntimeException
{
    /**
     * @var int
     */
    protected $code = 0;

    /**
     * @var string
     */
    protected $sqlstate = '00000';
}

/**
 * Represents a prepared statement.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.mysqli-stmt.php
 */
class mysqli_stmt
{
    /**
     * @var mixed
     */
    public $affected_rows;

    /**
     * @var mixed
     */
    public $errno;

    /**
     * @var mixed
     */
    public $error;

    /**
     * @var mixed
     */
    public $error_list;

    /**
     * @var mixed
     */
    public $field_count;

    /**
     * @var mixed
     */
    public $id;

    /**
     * @var mixed
     */
    public $insert_id;

    /**
     * @var mixed
     */
    public $num_rows;

    /**
     * @var mixed
     */
    public $param_count;

    /**
     * @var mixed
     */
    public $sqlstate;

    /**
     * Constructs a new <code>mysqli_stmt</code> object
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/mysqli-stmt.construct.php
     */
    public function __construct()
    {
    }

    /**
     * Used to get the current value of a statement attribute
     *
     * @param int $attr The attribute that you want to get.
     *
     * @return int Returns <code>FALSE</code> if the attribute is not found, otherwise returns the value of the attribute.
     *
     * @link http://www.php.net/manual/en/mysqli-stmt.attr-get.php
     */
    public function attr_get(int $attr): int
    {
    }

    /**
     * Used to modify the behavior of a prepared statement
     *
     * @param int $attr The attribute that you want to set. It can have one of the following values:
     * <table>
     * <title>Attribute values</title>
     * <thead>
     * <tr>
     * <td>Character</td><td>Description</td>
     * </tr>
     * </thead>
     * <tbody>
     * <tr>
     * <td>MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH</td><td>
     * Setting to <code>TRUE</code> causes <code>mysqli_stmt_store_result</code> to
     * update the metadata <code>MYSQL_FIELD-&gt;max_length</code> value.
     * </td>
     * </tr>
     * <tr>
     * <td>MYSQLI_STMT_ATTR_CURSOR_TYPE</td><td>
     * Type of cursor to open for statement when <code>mysqli_stmt_execute</code>
     * is invoked. <code>mode</code> can be <code>MYSQLI_CURSOR_TYPE_NO_CURSOR</code>
     * (the default) or <code>MYSQLI_CURSOR_TYPE_READ_ONLY</code>.
     * </td>
     * </tr>
     * <tr>
     * <td>MYSQLI_STMT_ATTR_PREFETCH_ROWS</td><td>
     * Number of rows to fetch from server at a time when using a cursor.
     * <code>mode</code> can be in the range from 1 to the maximum
     * value of unsigned long. The default is 1.
     * </td>
     * </tr>
     * </tbody>
     * </table>
     * @param int $mode The value to assign to the attribute.
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/mysqli-stmt.attr-set.php
     */
    public function attr_set(int $attr, int $mode): bool
    {
    }

    /**
     * Binds variables to a prepared statement as parameters
     *
     * @param string $types A string that contains one or more characters which specify the types
     * for the corresponding bind variables:
     * <table>
     * <title>Type specification chars</title>
     * <thead>
     * <tr>
     * <td>Character</td><td>Description</td>
     * </tr>
     * </thead>
     * <tbody>
     * <tr>
     * <td>i</td><td>corresponding variable has type integer</td>
     * </tr>
     * <tr>
     * <td>d</td><td>corresponding variable has type double</td>
     * </tr>
     * <tr>
     * <td>s</td><td>corresponding variable has type string</td>
     * </tr>
     * <tr>
     * <td>b</td><td>corresponding variable is a blob and will be sent in packets</td>
     * </tr>
     * </tbody>
     * </table>
     * @param mixed $var1 The number of variables and length of string
     * <code>types</code> must match the parameters in the statement.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli-stmt.bind-param.php
     */
    public function bind_param(string $types, &...$var1): bool
    {
    }

    /**
     * Binds variables to a prepared statement for result storage
     *
     * @param mixed $var1 The variable to be bound.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli-stmt.bind-result.php
     */
    public function bind_result(&...$var1): bool
    {
    }

    /**
     * Closes a prepared statement
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli-stmt.close.php
     */
    public function close(): bool
    {
    }

    /**
     * Seeks to an arbitrary row in statement result set
     *
     * @param int $offset Must be between zero and the total number of rows minus one (0..
     * <code>mysqli_stmt_num_rows</code> - 1).
     *
     * @return void No value is returned.
     *
     * @link http://www.php.net/manual/en/mysqli-stmt.data-seek.php
     */
    public function data_seek(int $offset): void
    {
    }

    /**
     * Executes a prepared Query
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli-stmt.execute.php
     */
    public function execute(): bool
    {
    }

    /**
     * Fetch results from a prepared statement into the bound variables
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/mysqli-stmt.fetch.php
     */
    public function fetch(): bool
    {
    }

    /**
     * Frees stored result memory for the given statement handle
     *
     * @return void No value is returned.
     *
     * @link http://www.php.net/manual/en/mysqli-stmt.free-result.php
     */
    public function free_result(): void
    {
    }

    /**
     * Gets a result set from a prepared statement
     *
     * @return mysqli_result Returns a resultset for successful SELECT queries, or <code>FALSE</code> for other DML
     * queries or on failure. The <code>mysqli_errno</code> function can be
     * used to distinguish between the two types of failure.
     *
     * @link http://www.php.net/manual/en/mysqli-stmt.get-result.php
     */
    public function get_result(): mysqli_result
    {
    }

    /**
     * Get result of SHOW WARNINGS
     *
     * @return object
     *
     * @link http://www.php.net/manual/en/mysqli-stmt.get-warnings.php
     */
    public function get_warnings(): object
    {
    }

    /**
     * Check if there are more query results from a multiple query
     *
     * @return bool Returns <code>TRUE</code> if more results exist, otherwise <code>FALSE</code>.
     *
     * @link http://www.php.net/manual/en/mysqli-stmt.more-results.php
     */
    public function more_results(): bool
    {
    }

    /**
     * Reads the next result from a multiple query
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli-stmt.next-result.php
     */
    public function next_result(): bool
    {
    }

    /**
     * Return the number of rows in statements result set
     *
     * @return int An integer representing the number of rows in result set.
     *
     * @link http://www.php.net/manual/en/mysqli-stmt.num-rows.php
     */
    public function num_rows(): int
    {
    }

    /**
     * Prepare an SQL statement for execution
     *
     * @param string $query The query, as a string. It must consist of a single SQL statement.
     *
     * @return mixed Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli-stmt.prepare.php
     */
    public function prepare(string $query)
    {
    }

    /**
     * Resets a prepared statement
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli-stmt.reset.php
     */
    public function reset(): bool
    {
    }

    /**
     * Returns result set metadata from a prepared statement
     *
     * @return mysqli_result Returns a result object or <code>FALSE</code> if an error occurred.
     *
     * @link http://www.php.net/manual/en/mysqli-stmt.result-metadata.php
     */
    public function result_metadata(): mysqli_result
    {
    }

    /**
     * Send data in blocks
     *
     * @param int $param_nr Indicates which parameter to associate the data with. Parameters are
     * numbered beginning with 0.
     * @param string $data A string containing data to be sent.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli-stmt.send-long-data.php
     */
    public function send_long_data(int $param_nr, string $data): bool
    {
    }

    /**
     * Transfers a result set from a prepared statement
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/mysqli-stmt.store-result.php
     */
    public function store_result(): bool
    {
    }
}

/**
 * Represents a MySQL warning.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.mysqli-warning.php
 */
final class mysqli_warning
{
    /**
     * @var mixed
     */
    public $errno;

    /**
     * @var mixed
     */
    public $message;

    /**
     * @var mixed
     */
    public $sqlstate;

    /**
     * The __construct purpose
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/mysqli-warning.construct.php
     */
    protected function __construct()
    {
    }

    /**
     * The next purpose
     *
     * @return void
     *
     * @link http://www.php.net/manual/en/mysqli-warning.next.php
     */
    public function next(): void
    {
    }
}

/**
 * Gets the number of affected rows in a previous MySQL operation
 *
 * @param mysqli $link Procedural style only: A link identifier
 * returned by <code>mysqli_connect</code> or <code>mysqli_init</code>
 *
 * @return int An integer greater than zero indicates the number of rows affected or
 * retrieved.
 * Zero indicates that no records were updated for an UPDATE statement, no
 * rows matched the <code>WHERE</code> clause in the query or that no
 * query has yet been executed. -1 indicates that the query returned an
 * error.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.affected-rows.php
 */
function mysqli_affected_rows(mysqli $link): int
{
}

/**
 * Turns on or off auto-committing database modifications
 *
 * @param bool $mode Whether to turn on auto-commit or not.
 * @param mixed $mode
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.autocommit.php
 */
function mysqli_autocommit(bool $mode, $mode): bool
{
}

/**
 * Starts a transaction
 *
 * @param int $flags Valid flags are:
 * @param string $name Savepoint name for the transaction.
 * @param mixed $name
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.begin-transaction.php
 */
function mysqli_begin_transaction(int $flags, string $name = null, $name = null): bool
{
}

/**
 * Changes the user of the specified database connection
 *
 * @param string $user The MySQL user name.
 * @param string $password The MySQL password.
 * @param string $database The database to change to.
 * @param mixed $database
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.change-user.php
 */
function mysqli_change_user(string $user, string $password, string $database, $database): bool
{
}

/**
 * Returns the default character set for the database connection
 *
 * @param mixed $link
 *
 * @return string The default character set for the current connection
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.character-set-name.php
 */
function mysqli_character_set_name($link): string
{
}

/**
 * Closes a previously opened database connection
 *
 * @param mixed $link
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.close.php
 */
function mysqli_close($link): bool
{
}

/**
 * Commits the current transaction
 *
 * @param int $flags A bitmask of <code>MYSQLI_TRANS_COR_*</code> constants.
 * @param string $name If provided then <code>COMMIT&#47;&#42;name&#42;&#47;</code> is executed.
 * @param mixed $name
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.commit.php
 */
function mysqli_commit(int $flags, string $name = null, $name = null): bool
{
}

/**
 * Alias of <code>mysqli::__construct</code>
 *
 * @param string|null $host Can be either a host name or an IP address. Passing the <code>NULL</code> value
 * or the string "localhost" to this parameter, the local host is
 * assumed. When possible, pipes will be used instead of the TCP/IP
 * protocol.
 * @param string|null $username The MySQL user name.
 * @param string|null $passwd If not provided or <code>NULL</code>, the MySQL server will attempt to authenticate
 * the user against those user records which have no password only. This
 * allows one username to be used with different permissions (depending
 * on if a password is provided or not).
 * @param string|null $dbname If provided will specify the default database to be used when
 * performing queries.
 * @param int|null $port Specifies the port number to attempt to connect to the MySQL server.
 * @param string|null $socket Specifies the socket or named pipe that should be used.
 *
 * @return void Returns an object which represents the connection to a MySQL Server.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mysqli-connect.php
 */
function mysqli_connect(string $host = /* ini_get("mysqli.default_host") */ null, string $username = /* ini_get("mysqli.default_user") */ null, string $passwd = /* ini_get("mysqli.default_pw") */ null, string $dbname = "", int $port = /* ini_get("mysqli.default_port") */ null, string $socket = /* ini_get("mysqli.default_socket") */ null): void
{
}

/**
 * Returns the error code from last connect call
 *
 * @return int An error code value for the last call to <code>mysqli_connect</code>, if it failed.
 * zero means no error occurred.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.connect-errno.php
 */
function mysqli_connect_errno(): int
{
}

/**
 * Returns a string description of the last connect error
 *
 * @return string A string that describes the error. <code>NULL</code> is returned if no error occurred.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.connect-error.php
 */
function mysqli_connect_error(): string
{
}

/**
 * Adjusts the result pointer to an arbitrary row in the result
 *
 * @param int $offset The field offset. Must be between zero and the total number of rows
 * minus one (0..<code>mysqli_num_rows</code> - 1).
 * @param mixed $offset
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.data-seek.php
 */
function mysqli_data_seek(int $offset, $offset): bool
{
}

/**
 * Performs debugging operations
 *
 * @param string $message A string representing the debugging operation to perform
 *
 * @return bool Returns <code>TRUE</code>.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.debug.php
 */
function mysqli_debug(string $message): bool
{
}

/**
 * Dump debugging information into the log
 *
 * @param mixed $link
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.dump-debug-info.php
 */
function mysqli_dump_debug_info($link): bool
{
}

/**
 * Returns the error code for the most recent function call
 *
 * @param mysqli $link Procedural style only: A link identifier
 * returned by <code>mysqli_connect</code> or <code>mysqli_init</code>
 *
 * @return int An error code value for the last call, if it failed. zero means no error
 * occurred.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.errno.php
 */
function mysqli_errno(mysqli $link): int
{
}

/**
 * Returns a string description of the last error
 *
 * @param mysqli $link Procedural style only: A link identifier
 * returned by <code>mysqli_connect</code> or <code>mysqli_init</code>
 *
 * @return string A string that describes the error. An empty string if no error occurred.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.error.php
 */
function mysqli_error(mysqli $link): string
{
}

/**
 * Returns a list of errors from the last command executed
 *
 * @param mysqli $link Procedural style only: A link identifier
 * returned by <code>mysqli_connect</code> or <code>mysqli_init</code>
 *
 * @return array A list of errors, each as an associative <code>array</code>
 * containing the errno, error, and sqlstate.
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.error-list.php
 */
function mysqli_error_list(mysqli $link): array
{
}

/**
 * Alias of <code>mysqli_real_escape_string</code>
 *
 * @param mixed $link
 * @param mixed $query
 * @param mixed $resultmode
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mysqli-escape-string.php
 */
function mysqli_escape_string($link, $query, $resultmode = null)
{
}

/**
 * Alias for <code>mysqli_stmt_execute</code>
 *
 * @param mixed $stmt
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mysqli-execute.php
 */
function mysqli_execute($stmt)
{
}

/**
 * Fetches all result rows as an associative array, a numeric array, or both
 *
 * @param int|null $resulttype This optional parameter is a constant indicating what type of array
 * should be produced from the current row data. The possible values for
 * this parameter are the constants <code>MYSQLI_ASSOC</code>,
 * <code>MYSQLI_NUM</code>, or <code>MYSQLI_BOTH</code>.
 * @param mixed $result_type
 *
 * @return mixed Returns an array of associative or numeric arrays holding result rows.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.fetch-all.php
 */
function mysqli_fetch_all(int $resulttype = MYSQLI_NUM, $result_type = null)
{
}

/**
 * Fetch a result row as an associative, a numeric array, or both
 *
 * @param int|null $resulttype This optional parameter is a constant indicating what type of array
 * should be produced from the current row data. The possible values for
 * this parameter are the constants <code>MYSQLI_ASSOC</code>,
 * <code>MYSQLI_NUM</code>, or <code>MYSQLI_BOTH</code>.
 * @param mixed $result_type
 *
 * @return mixed Returns an array of strings that corresponds to the fetched row or <code>NULL</code> if there
 * are no more rows in resultset.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.fetch-array.php
 */
function mysqli_fetch_array(int $resulttype = MYSQLI_BOTH, $result_type = null)
{
}

/**
 * Fetch a result row as an associative array
 *
 * @param mixed $result
 *
 * @return array Returns an associative array of strings representing the fetched row in the result
 * set, where each key in the array represents the name of one of the result
 * set's columns or <code>NULL</code> if there are no more rows in resultset.
 * If two or more columns of the result have the same field names, the last
 * column will take precedence. To access the other column(s) of the same
 * name, you either need to access the result with numeric indices by using
 * <code>mysqli_fetch_row</code> or add alias names.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.fetch-assoc.php
 */
function mysqli_fetch_assoc($result): array
{
}

/**
 * Returns the next field in the result set
 *
 * @param mixed $result
 *
 * @return object Returns an object which contains field definition information or <code>FALSE</code>
 * if no field information is available.
 * <table>
 * <title>Object properties</title>
 * <thead>
 * <tr>
 * <td>Property</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>name</td><td>The name of the column</td>
 * </tr>
 * <tr>
 * <td>orgname</td><td>Original column name if an alias was specified</td>
 * </tr>
 * <tr>
 * <td>table</td><td>The name of the table this field belongs to (if not calculated)</td>
 * </tr>
 * <tr>
 * <td>orgtable</td><td>Original table name if an alias was specified</td>
 * </tr>
 * <tr>
 * <td>def</td><td>Reserved for default value, currently always ""</td>
 * </tr>
 * <tr>
 * <td>db</td><td>Database (since PHP 5.3.6)</td>
 * </tr>
 * <tr>
 * <td>catalog</td><td>The catalog name, always "def" (since PHP 5.3.6)</td>
 * </tr>
 * <tr>
 * <td>max_length</td><td>The maximum width of the field for the result set.</td>
 * </tr>
 * <tr>
 * <td>length</td><td>The width of the field, as specified in the table definition.</td>
 * </tr>
 * <tr>
 * <td>charsetnr</td><td>The character set number for the field.</td>
 * </tr>
 * <tr>
 * <td>flags</td><td>An integer representing the bit-flags for the field.</td>
 * </tr>
 * <tr>
 * <td>type</td><td>The data type used for this field</td>
 * </tr>
 * <tr>
 * <td>decimals</td><td>The number of decimals used (for integer fields)</td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.fetch-field.php
 */
function mysqli_fetch_field($result): object
{
}

/**
 * Fetch meta-data for a single field
 *
 * @param int $fieldnr The field number. This value must be in the range from
 * <code>0</code> to <code>number of fields - 1</code>.
 * @param mixed $field_nr
 *
 * @return object Returns an object which contains field definition information or <code>FALSE</code>
 * if no field information for specified <code>fieldnr</code> is
 * available.
 * <table>
 * <title>Object attributes</title>
 * <thead>
 * <tr>
 * <td>Attribute</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>name</td><td>The name of the column</td>
 * </tr>
 * <tr>
 * <td>orgname</td><td>Original column name if an alias was specified</td>
 * </tr>
 * <tr>
 * <td>table</td><td>The name of the table this field belongs to (if not calculated)</td>
 * </tr>
 * <tr>
 * <td>orgtable</td><td>Original table name if an alias was specified</td>
 * </tr>
 * <tr>
 * <td>def</td><td>The default value for this field, represented as a string</td>
 * </tr>
 * <tr>
 * <td>max_length</td><td>The maximum width of the field for the result set.</td>
 * </tr>
 * <tr>
 * <td>length</td><td>The width of the field, as specified in the table definition.</td>
 * </tr>
 * <tr>
 * <td>charsetnr</td><td>The character set number for the field.</td>
 * </tr>
 * <tr>
 * <td>flags</td><td>An integer representing the bit-flags for the field.</td>
 * </tr>
 * <tr>
 * <td>type</td><td>The data type used for this field</td>
 * </tr>
 * <tr>
 * <td>decimals</td><td>The number of decimals used (for numeric fields)</td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.fetch-field-direct.php
 */
function mysqli_fetch_field_direct(int $fieldnr, $field_nr): object
{
}

/**
 * Returns an array of objects representing the fields in a result set
 *
 * @param mixed $result
 *
 * @return array Returns an array of objects which contains field definition information or
 * <code>FALSE</code> if no field information is available.
 * <table>
 * <title>Object properties</title>
 * <thead>
 * <tr>
 * <td>Property</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>name</td><td>The name of the column</td>
 * </tr>
 * <tr>
 * <td>orgname</td><td>Original column name if an alias was specified</td>
 * </tr>
 * <tr>
 * <td>table</td><td>The name of the table this field belongs to (if not calculated)</td>
 * </tr>
 * <tr>
 * <td>orgtable</td><td>Original table name if an alias was specified</td>
 * </tr>
 * <tr>
 * <td>max_length</td><td>The maximum width of the field for the result set.</td>
 * </tr>
 * <tr>
 * <td>length</td><td>
 * The width of the field, in bytes, as specified in the table definition. Note that
 * this number (bytes) might differ from your table definition value (characters), depending on
 * the character set you use. For example, the character set utf8 has 3 bytes per character,
 * so varchar(10) will return a length of 30 for utf8 (10*3), but return 10 for latin1 (10*1).
 * </td>
 * </tr>
 * <tr>
 * <td>charsetnr</td><td>The character set number (id) for the field.</td>
 * </tr>
 * <tr>
 * <td>flags</td><td>An integer representing the bit-flags for the field.</td>
 * </tr>
 * <tr>
 * <td>type</td><td>The data type used for this field</td>
 * </tr>
 * <tr>
 * <td>decimals</td><td>The number of decimals used (for integer fields)</td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.fetch-fields.php
 */
function mysqli_fetch_fields($result): array
{
}

/**
 * Returns the lengths of the columns of the current row in the result set
 *
 * @param mysqli_result $result Procedural style only: A result set
 * identifier returned by <code>mysqli_query</code>, <code>mysqli_store_result</code>
 * or <code>mysqli_use_result</code>.
 *
 * @return array An array of integers representing the size of each column (not including
 * any terminating null characters). <code>FALSE</code> if an error occurred.
 * <code>mysqli_fetch_lengths</code> is valid only for the current
 * row of the result set. It returns <code>FALSE</code> if you call it before calling
 * mysqli_fetch_row/array/object or after retrieving all rows in the result.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.lengths.php
 */
function mysqli_fetch_lengths(mysqli_result $result): array
{
}

/**
 * Returns the current row of a result set as an object
 *
 * @param string|null $class_name The name of the class to instantiate, set the properties of and return.
 * If not specified, a <code>stdClass</code> object is returned.
 * @param array $params An optional <code>array</code> of parameters to pass to the constructor
 * for <code>class_name</code> objects.
 * @param array $params
 *
 * @return object Returns an object with string properties that corresponds to the fetched
 * row or <code>NULL</code> if there are no more rows in resultset.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.fetch-object.php
 */
function mysqli_fetch_object(string $class_name = "stdClass", array $params = null, array $params = null): object
{
}

/**
 * Get a result row as an enumerated array
 *
 * @param mixed $result
 *
 * @return mixed <code>mysqli_fetch_row</code> returns an array of strings that corresponds to the fetched row
 * or <code>NULL</code> if there are no more rows in result set.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.fetch-row.php
 */
function mysqli_fetch_row($result)
{
}

/**
 * Returns the number of columns for the most recent query
 *
 * @param mysqli $link Procedural style only: A link identifier
 * returned by <code>mysqli_connect</code> or <code>mysqli_init</code>
 *
 * @return int An integer representing the number of fields in a result set.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.field-count.php
 */
function mysqli_field_count(mysqli $link): int
{
}

/**
 * Set result pointer to a specified field offset
 *
 * @param int $fieldnr The field number. This value must be in the range from
 * <code>0</code> to <code>number of fields - 1</code>.
 * @param mixed $field_nr
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.field-seek.php
 */
function mysqli_field_seek(int $fieldnr, $field_nr): bool
{
}

/**
 * Get current field offset of a result pointer
 *
 * @param mysqli_result $result Procedural style only: A result set
 * identifier returned by <code>mysqli_query</code>, <code>mysqli_store_result</code>
 * or <code>mysqli_use_result</code>.
 *
 * @return int Returns current offset of field cursor.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.current-field.php
 */
function mysqli_field_tell(mysqli_result $result): int
{
}

/**
 * Frees the memory associated with a result
 *
 * @param mixed $result
 *
 * @return void No value is returned.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.free.php
 */
function mysqli_free_result($result): void
{
}

/**
 * Returns a character set object
 *
 * @param mixed $link
 *
 * @return object The function returns a character set object with the following properties:
 * <ul>
 * <li>
 * <code><code>charset</code></code>
 * Character set name
 * </li>
 * <li>
 * <code><code>collation</code></code>
 * Collation name
 * </li>
 * <li>
 * <code><code>dir</code></code>
 * Directory the charset description was fetched from (?) or "" for built-in character sets
 * </li>
 * <li>
 * <code><code>min_length</code></code>
 * Minimum character length in bytes
 * </li>
 * <li>
 * <code><code>max_length</code></code>
 * Maximum character length in bytes
 * </li>
 * <li>
 * <code><code>number</code></code>
 * Internal character set number
 * </li>
 * <li>
 * <code><code>state</code></code>
 * Character set status (?)
 * </li>
 * </ul>
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.get-charset.php
 */
function mysqli_get_charset($link): object
{
}

/**
 * Get MySQL client info
 *
 * @return string A string that represents the MySQL client library version
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.get-client-info.php
 */
function mysqli_get_client_info(): string
{
}

/**
 * Returns client per-process statistics
 *
 * @return array Returns an array with client stats if success, <code>FALSE</code> otherwise.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mysqli-get-client-stats.php
 */
function mysqli_get_client_stats(): array
{
}

/**
 * Returns the MySQL client version as an integer
 *
 * @param mysqli $link
 *
 * @return int A number that represents the MySQL client library version in format:
 * <code>main_version*10000 + minor_version *100 + sub_version</code>.
 * For example, 4.1.0 is returned as 40100.
 * This is useful to quickly determine the version of the client library
 * to know if some capability exists.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.get-client-version.php
 */
function mysqli_get_client_version(mysqli $link): int
{
}

/**
 * Returns statistics about the client connection
 *
 * @param mixed $link
 *
 * @return bool Returns an array with connection stats if success, <code>FALSE</code> otherwise.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.get-connection-stats.php
 */
function mysqli_get_connection_stats($link): bool
{
}

/**
 * Returns a string representing the type of connection used
 *
 * @param mysqli $link Procedural style only: A link identifier
 * returned by <code>mysqli_connect</code> or <code>mysqli_init</code>
 *
 * @return string A character string representing the server hostname and the connection type.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.get-host-info.php
 */
function mysqli_get_host_info(mysqli $link): string
{
}

/**
 * Return information about open and cached links
 *
 * @return array <code>mysqli_get_links_stats</code> returns an associative array
 * with three elements, keyed as follows:
 * <ul>
 * <li>
 * <code><code>total</code></code>
 * An <code>integer</code> indicating the total number of open links in
 * any state.
 * </li>
 * <li>
 * <code><code>active_plinks</code></code>
 * An <code>integer</code> representing the number of active persistent
 * connections.
 * </li>
 * <li>
 * <code><code>cached_plinks</code></code>
 * An <code>integer</code> representing the number of inactive persistent
 * connections.
 * </li>
 * </ul>
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mysqli-get-links-stats.php
 */
function mysqli_get_links_stats(): array
{
}

/**
 * Returns the version of the MySQL protocol used
 *
 * @param mysqli $link Procedural style only: A link identifier
 * returned by <code>mysqli_connect</code> or <code>mysqli_init</code>
 *
 * @return int Returns an integer representing the protocol version.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.get-proto-info.php
 */
function mysqli_get_proto_info(mysqli $link): int
{
}

/**
 * Returns the version of the MySQL server
 *
 * @param mixed $link
 *
 * @return string A character string representing the server version.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.get-server-info.php
 */
function mysqli_get_server_info($link): string
{
}

/**
 * Returns the version of the MySQL server as an integer
 *
 * @param mysqli $link Procedural style only: A link identifier
 * returned by <code>mysqli_connect</code> or <code>mysqli_init</code>
 *
 * @return int An integer representing the server version.
 * The form of this version number is
 * <code>main_version * 10000 + minor_version * 100 + sub_version</code>
 * (i.e. version 4.1.0 is 40100).
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.get-server-version.php
 */
function mysqli_get_server_version(mysqli $link): int
{
}

/**
 * Get result of SHOW WARNINGS
 *
 * @param mixed $link
 *
 * @return mysqli_warning
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.get-warnings.php
 */
function mysqli_get_warnings($link): mysqli_warning
{
}

/**
 * Retrieves information about the most recently executed query
 *
 * @param mysqli $link Procedural style only: A link identifier
 * returned by <code>mysqli_connect</code> or <code>mysqli_init</code>
 *
 * @return string A character string representing additional information about the most recently executed query.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.info.php
 */
function mysqli_info(mysqli $link): string
{
}

/**
 * Initializes MySQLi and returns a resource for use with mysqli_real_connect()
 *
 * @return mysqli Returns an object.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.init.php
 */
function mysqli_init(): mysqli
{
}

/**
 * Returns the auto generated id used in the latest query
 *
 * @param mysqli $link Procedural style only: A link identifier
 * returned by <code>mysqli_connect</code> or <code>mysqli_init</code>
 *
 * @return mixed The value of the <code>AUTO_INCREMENT</code> field that was updated
 * by the previous query. Returns zero if there was no previous query on the
 * connection or if the query did not update an <code>AUTO_INCREMENT</code>
 * value.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.insert-id.php
 */
function mysqli_insert_id(mysqli $link)
{
}

/**
 * Asks the server to kill a MySQL thread
 *
 * @param int $processid
 * @param mixed $connection_id
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.kill.php
 */
function mysqli_kill(int $processid, $connection_id): bool
{
}

/**
 * Check if there are any more query results from a multi query
 *
 * @param mixed $link
 *
 * @return bool Returns <code>TRUE</code> if one or more result sets are available from a previous call to
 * <code>mysqli_multi_query</code>, otherwise <code>FALSE</code>.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.more-results.php
 */
function mysqli_more_results($link): bool
{
}

/**
 * Performs a query on the database
 *
 * @param string $query The query, as a string.
 * @param mixed $query
 *
 * @return bool Returns <code>FALSE</code> if the first statement failed.
 * To retrieve subsequent errors from other statements you have to call
 * <code>mysqli_next_result</code> first.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.multi-query.php
 */
function mysqli_multi_query(string $query, $query = null): bool
{
}

/**
 * Prepare next result from multi_query
 *
 * @param mixed $link
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.next-result.php
 */
function mysqli_next_result($link): bool
{
}

/**
 * Get the number of fields in a result
 *
 * @param mysqli_result $result Procedural style only: A result set
 * identifier returned by <code>mysqli_query</code>, <code>mysqli_store_result</code>
 * or <code>mysqli_use_result</code>.
 *
 * @return int The number of fields from a result set.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.field-count.php
 */
function mysqli_num_fields(mysqli_result $result): int
{
}

/**
 * Gets the number of rows in a result
 *
 * @param mysqli_result $result Procedural style only: A result set
 * identifier returned by <code>mysqli_query</code>, <code>mysqli_store_result</code>
 * or <code>mysqli_use_result</code>.
 *
 * @return int Returns number of rows in the result set.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.num-rows.php
 */
function mysqli_num_rows(mysqli_result $result): int
{
}

/**
 * Set options
 *
 * @param int $option The option that you want to set. It can be one of the following values:
 * <table>
 * <title>Valid options</title>
 * <thead>
 * <tr>
 * <td>Name</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td><code>MYSQLI_OPT_CONNECT_TIMEOUT</code></td><td>connection timeout in seconds (supported on Windows with TCP/IP since PHP 5.3.1)</td>
 * </tr>
 * <tr>
 * <td><code>MYSQLI_OPT_LOCAL_INFILE</code></td><td>enable/disable use of <code>LOAD LOCAL INFILE</code></td>
 * </tr>
 * <tr>
 * <td><code>MYSQLI_INIT_COMMAND</code></td><td>command to execute after when connecting to MySQL server</td>
 * </tr>
 * <tr>
 * <td><code>MYSQLI_READ_DEFAULT_FILE</code></td><td>
 * Read options from named option file instead of <code>my.cnf</code>
 * </td>
 * </tr>
 * <tr>
 * <td><code>MYSQLI_READ_DEFAULT_GROUP</code></td><td>
 * Read options from the named group from <code>my.cnf</code>
 * or the file specified with <code>MYSQL_READ_DEFAULT_FILE</code>.
 * </td>
 * </tr>
 * <tr>
 * <td><code>MYSQLI_SERVER_PUBLIC_KEY</code></td><td>
 * RSA public key file used with the SHA-256 based authentication.
 * </td>
 * </tr>
 * <tr>
 * <td><code>MYSQLI_OPT_NET_CMD_BUFFER_SIZE</code></td><td>
 * The size of the internal command/network buffer. Only valid for
 * mysqlnd.
 * </td>
 * </tr>
 * <tr>
 * <td><code>MYSQLI_OPT_NET_READ_BUFFER_SIZE</code></td><td>
 * Maximum read chunk size in bytes when reading the body of a MySQL
 * command packet. Only valid for mysqlnd.
 * </td>
 * </tr>
 * <tr>
 * <td><code>MYSQLI_OPT_INT_AND_FLOAT_NATIVE</code></td><td>
 * Convert integer and float columns back to PHP numbers. Only valid
 * for mysqlnd.
 * </td>
 * </tr>
 * <tr>
 * <td><code>MYSQLI_OPT_SSL_VERIFY_SERVER_CERT</code></td><td>
 * </td>
 * </tr>
 * </tbody>
 * </table>
 * @param mixed $value The value for the option.
 * @param mixed $value
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.options.php
 */
function mysqli_options(int $option, $value, $value): bool
{
}

/**
 * Pings a server connection, or tries to reconnect if the connection has gone down
 *
 * @param mixed $link
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.ping.php
 */
function mysqli_ping($link): bool
{
}

/**
 * Poll connections
 *
 * @param array|null $read List of connections to check for outstanding results that can be read.
 * @param array|null $error List of connections on which an error occured, for example, query
 * failure or lost connection.
 * @param array|null $reject List of connections rejected because no asynchronous query
 * has been run on for which the function could poll results.
 * @param int $sec Maximum number of seconds to wait, must be non-negative.
 * @param int $usec Maximum number of microseconds to wait, must be non-negative.
 *
 * @return int Returns number of ready connections upon success, <code>FALSE</code> otherwise.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.poll.php
 */
function mysqli_poll(array &$read = null, array &$error = null, array &$reject = null, int $sec, int $usec = null): int
{
}

/**
 * Prepare an SQL statement for execution
 *
 * @param string $query The query, as a string.
 * @param mixed $query
 *
 * @return mysqli_stmt <code>mysqli_prepare</code> returns a statement object or <code>FALSE</code> if an error occurred.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.prepare.php
 */
function mysqli_prepare(string $query, $query): mysqli_stmt
{
}

/**
 * Performs a query on the database
 *
 * @param string $query The query string.
 * @param int|null $resultmode Either the constant <code>MYSQLI_USE_RESULT</code> or
 * <code>MYSQLI_STORE_RESULT</code> depending on the desired
 * behavior. By default, <code>MYSQLI_STORE_RESULT</code> is used.
 * @param mixed $resultmode
 *
 * @return mixed Returns <code>FALSE</code> on failure. For successful <code>SELECT, SHOW, DESCRIBE</code> or
 * <code>EXPLAIN</code> queries <code>mysqli_query</code> will return
 * a <code>mysqli_result</code> object. For other successful queries <code>mysqli_query</code> will
 * return <code>TRUE</code>.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.query.php
 */
function mysqli_query(string $query, int $resultmode = MYSQLI_STORE_RESULT, $resultmode = null)
{
}

/**
 * Opens a connection to a mysql server
 *
 * @param string $host Can be either a host name or an IP address. Passing the <code>NULL</code> value
 * or the string "localhost" to this parameter, the local host is
 * assumed. When possible, pipes will be used instead of the TCP/IP
 * protocol.
 * @param string $username The MySQL user name.
 * @param string $passwd If provided or <code>NULL</code>, the MySQL server will attempt to authenticate
 * the user against those user records which have no password only. This
 * allows one username to be used with different permissions (depending
 * on if a password as provided or not).
 * @param string $dbname If provided will specify the default database to be used when
 * performing queries.
 * @param int $port Specifies the port number to attempt to connect to the MySQL server.
 * @param string $socket Specifies the socket or named pipe that should be used.
 * @param int $flags With the parameter <code>flags</code> you can set different
 * connection options:
 * @param mixed $flags
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.real-connect.php
 */
function mysqli_real_connect(string $host, string $username = null, string $passwd = null, string $dbname = null, int $port = null, string $socket = null, int $flags = null, $flags = null): bool
{
}

/**
 * Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
 *
 * @param string $escapestr The string to be escaped.
 * @param mixed $string_to_escape
 *
 * @return string Returns an escaped string.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.real-escape-string.php
 */
function mysqli_real_escape_string(string $escapestr, $string_to_escape): string
{
}

/**
 * Execute an SQL query
 *
 * @param string $query The query, as a string.
 * @param mixed $query
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.real-query.php
 */
function mysqli_real_query(string $query, $query = null): bool
{
}

/**
 * Get result from async query
 *
 * @param mixed $link
 *
 * @return mysqli_result Returns <code>mysqli_result</code> in success, <code>FALSE</code> otherwise.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.reap-async-query.php
 */
function mysqli_reap_async_query($link): mysqli_result
{
}

/**
 * Refreshes
 *
 * @param int $options The options to refresh, using the MYSQLI_REFRESH_* constants as documented
 * within the MySQLi constants documentation.
 * @param mixed $options
 *
 * @return bool <code>TRUE</code> if the refresh was a success, otherwise <code>FALSE</code>
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.refresh.php
 */
function mysqli_refresh(int $options, $options): bool
{
}

/**
 * Removes the named savepoint from the set of savepoints of the current transaction
 *
 * @param string $name
 * @param mixed $name
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.release-savepoint.php
 */
function mysqli_release_savepoint(string $name, $name): bool
{
}

/**
 * Alias of mysqli_driver-&gt;report_mode
 *
 * @param int $flags <table>
 * <title>Supported flags</title>
 * <thead>
 * <tr>
 * <td>Name</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td><code>MYSQLI_REPORT_OFF</code></td><td>Turns reporting off</td>
 * </tr>
 * <tr>
 * <td><code>MYSQLI_REPORT_ERROR</code></td><td>Report errors from mysqli function calls</td>
 * </tr>
 * <tr>
 * <td><code>MYSQLI_REPORT_STRICT</code></td><td>
 * Throw <code>mysqli_sql_exception</code> for errors
 * instead of warnings
 * </td>
 * </tr>
 * <tr>
 * <td><code>MYSQLI_REPORT_INDEX</code></td><td>Report if no index or bad index was used in a query</td>
 * </tr>
 * <tr>
 * <td><code>MYSQLI_REPORT_ALL</code></td><td>Set all options (report all)</td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mysqli-report.php
 */
function mysqli_report(int $flags): bool
{
}

/**
 * Rolls back current transaction
 *
 * @param int $flags A bitmask of <code>MYSQLI_TRANS_COR_*</code> constants.
 * @param string $name If provided then <code>ROLLBACK&#47;&#42;name&#42;&#47;</code> is executed.
 * @param mixed $name
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.rollback.php
 */
function mysqli_rollback(int $flags, string $name = null, $name = null): bool
{
}

/**
 * Set a named transaction savepoint
 *
 * @param string $name
 * @param mixed $name
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.savepoint.php
 */
function mysqli_savepoint(string $name, $name): bool
{
}

/**
 * Selects the default database for database queries
 *
 * @param string $dbname The database name.
 * @param mixed $database
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.select-db.php
 */
function mysqli_select_db(string $dbname, $database): bool
{
}

/**
 * Sets the default client character set
 *
 * @param string $charset The charset to be set as default.
 * @param mixed $charset
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.0.5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.set-charset.php
 */
function mysqli_set_charset(string $charset, $charset): bool
{
}

/**
 * Alias of <code>mysqli_options</code>
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mysqli-set-opt.php
 */
function mysqli_set_opt()
{
}

/**
 * Returns the SQLSTATE error from previous MySQL operation
 *
 * @param mysqli $link Procedural style only: A link identifier
 * returned by <code>mysqli_connect</code> or <code>mysqli_init</code>
 *
 * @return string Returns a string containing the SQLSTATE error code for the last error.
 * The error code consists of five characters. <code>'00000'</code> means no error.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.sqlstate.php
 */
function mysqli_sqlstate(mysqli $link): string
{
}

/**
 * Used for establishing secure connections using SSL
 *
 * @param string $key The path name to the key file.
 * @param string $cert The path name to the certificate file.
 * @param string $ca The path name to the certificate authority file.
 * @param string $capath The pathname to a directory that contains trusted SSL CA certificates
 * in PEM format.
 * @param string $cipher A list of allowable ciphers to use for SSL encryption.
 * @param mixed $cipher
 *
 * @return bool This function always returns <code>TRUE</code> value. If SSL setup is
 * incorrect <code>mysqli_real_connect</code> will return an error
 * when you attempt to connect.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.ssl-set.php
 */
function mysqli_ssl_set(string $key, string $cert, string $ca, string $capath, string $cipher, $cipher): bool
{
}

/**
 * Gets the current system status
 *
 * @param mixed $link
 *
 * @return string A string describing the server status. <code>FALSE</code> if an error occurred.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.stat.php
 */
function mysqli_stat($link): string
{
}

/**
 * Returns the total number of rows changed, deleted, or
 * inserted by the last executed statement
 *
 * @param mysqli_stmt $stmt Procedural style only: A statement identifier
 * returned by <code>mysqli_stmt_init</code>.
 *
 * @return int An integer greater than zero indicates the number of rows affected or
 * retrieved.
 * Zero indicates that no records where updated for an UPDATE/DELETE
 * statement, no rows matched the WHERE clause in the query or that no query
 * has yet been executed. -1 indicates that the query has returned an error.
 * NULL indicates an invalid argument was supplied to the function.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.affected-rows.php
 */
function mysqli_stmt_affected_rows(mysqli_stmt $stmt): int
{
}

/**
 * Used to get the current value of a statement attribute
 *
 * @param int $attr The attribute that you want to get.
 * @param mixed $attribute
 *
 * @return int Returns <code>FALSE</code> if the attribute is not found, otherwise returns the value of the attribute.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.attr-get.php
 */
function mysqli_stmt_attr_get(int $attr, $attribute): int
{
}

/**
 * Used to modify the behavior of a prepared statement
 *
 * @param int $attr The attribute that you want to set. It can have one of the following values:
 * <table>
 * <title>Attribute values</title>
 * <thead>
 * <tr>
 * <td>Character</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH</td><td>
 * Setting to <code>TRUE</code> causes <code>mysqli_stmt_store_result</code> to
 * update the metadata <code>MYSQL_FIELD-&gt;max_length</code> value.
 * </td>
 * </tr>
 * <tr>
 * <td>MYSQLI_STMT_ATTR_CURSOR_TYPE</td><td>
 * Type of cursor to open for statement when <code>mysqli_stmt_execute</code>
 * is invoked. <code>mode</code> can be <code>MYSQLI_CURSOR_TYPE_NO_CURSOR</code>
 * (the default) or <code>MYSQLI_CURSOR_TYPE_READ_ONLY</code>.
 * </td>
 * </tr>
 * <tr>
 * <td>MYSQLI_STMT_ATTR_PREFETCH_ROWS</td><td>
 * Number of rows to fetch from server at a time when using a cursor.
 * <code>mode</code> can be in the range from 1 to the maximum
 * value of unsigned long. The default is 1.
 * </td>
 * </tr>
 * </tbody>
 * </table>
 * @param int $mode The value to assign to the attribute.
 * @param mixed $value
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.attr-set.php
 */
function mysqli_stmt_attr_set(int $attr, int $mode, $value): bool
{
}

/**
 * Binds variables to a prepared statement as parameters
 *
 * @param string $types A string that contains one or more characters which specify the types
 * for the corresponding bind variables:
 * <table>
 * <title>Type specification chars</title>
 * <thead>
 * <tr>
 * <td>Character</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>i</td><td>corresponding variable has type integer</td>
 * </tr>
 * <tr>
 * <td>d</td><td>corresponding variable has type double</td>
 * </tr>
 * <tr>
 * <td>s</td><td>corresponding variable has type string</td>
 * </tr>
 * <tr>
 * <td>b</td><td>corresponding variable is a blob and will be sent in packets</td>
 * </tr>
 * </tbody>
 * </table>
 * @param mixed $var1 The number of variables and length of string
 * <code>types</code> must match the parameters in the statement.
 * @param mixed $vars
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.bind-param.php
 */
function mysqli_stmt_bind_param(string $types, $var1, &...$vars): bool
{
}

/**
 * Binds variables to a prepared statement for result storage
 *
 * @param mixed $var1 The variable to be bound.
 * @param mixed $vars
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.bind-result.php
 */
function mysqli_stmt_bind_result($var1, &...$vars): bool
{
}

/**
 * Closes a prepared statement
 *
 * @param mixed $stmt
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.close.php
 */
function mysqli_stmt_close($stmt): bool
{
}

/**
 * Seeks to an arbitrary row in statement result set
 *
 * @param int $offset Must be between zero and the total number of rows minus one (0..
 * <code>mysqli_stmt_num_rows</code> - 1).
 * @param mixed $offset
 *
 * @return void No value is returned.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.data-seek.php
 */
function mysqli_stmt_data_seek(int $offset, $offset): void
{
}

/**
 * Returns the error code for the most recent statement call
 *
 * @param mysqli_stmt $stmt Procedural style only: A statement identifier
 * returned by <code>mysqli_stmt_init</code>.
 *
 * @return int An error code value. Zero means no error occurred.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.errno.php
 */
function mysqli_stmt_errno(mysqli_stmt $stmt): int
{
}

/**
 * Returns a string description for last statement error
 *
 * @param mysqli_stmt $stmt Procedural style only: A statement identifier
 * returned by <code>mysqli_stmt_init</code>.
 *
 * @return string A string that describes the error. An empty string if no error occurred.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.error.php
 */
function mysqli_stmt_error(mysqli_stmt $stmt): string
{
}

/**
 * Returns a list of errors from the last statement executed
 *
 * @param mysqli_stmt $stmt Procedural style only: A statement identifier
 * returned by <code>mysqli_stmt_init</code>.
 *
 * @return array A list of errors, each as an associative <code>array</code>
 * containing the errno, error, and sqlstate.
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.error-list.php
 */
function mysqli_stmt_error_list(mysqli_stmt $stmt): array
{
}

/**
 * Executes a prepared Query
 *
 * @param mixed $stmt
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.execute.php
 */
function mysqli_stmt_execute($stmt): bool
{
}

/**
 * Fetch results from a prepared statement into the bound variables
 *
 * @param mixed $stmt
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.fetch.php
 */
function mysqli_stmt_fetch($stmt): bool
{
}

/**
 * Returns the number of field in the given statement
 *
 * @param mysqli_stmt $stmt
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.field-count.php
 */
function mysqli_stmt_field_count(mysqli_stmt $stmt): int
{
}

/**
 * Frees stored result memory for the given statement handle
 *
 * @param mixed $stmt
 *
 * @return void No value is returned.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.free-result.php
 */
function mysqli_stmt_free_result($stmt): void
{
}

/**
 * Gets a result set from a prepared statement
 *
 * @param mixed $stmt
 *
 * @return mysqli_result Returns a resultset for successful SELECT queries, or <code>FALSE</code> for other DML
 * queries or on failure. The <code>mysqli_errno</code> function can be
 * used to distinguish between the two types of failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.get-result.php
 */
function mysqli_stmt_get_result($stmt): mysqli_result
{
}

/**
 * Get result of SHOW WARNINGS
 *
 * @param mysqli_stmt $stmt
 *
 * @return object
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.get-warnings.php
 */
function mysqli_stmt_get_warnings(mysqli_stmt $stmt): object
{
}

/**
 * Initializes a statement and returns an object for use with mysqli_stmt_prepare
 *
 * @param mixed $link
 *
 * @return mysqli_stmt Returns an object.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.stmt-init.php
 */
function mysqli_stmt_init($link): mysqli_stmt
{
}

/**
 * Get the ID generated from the previous INSERT operation
 *
 * @param mysqli_stmt $stmt
 *
 * @return mixed
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.insert-id.php
 */
function mysqli_stmt_insert_id(mysqli_stmt $stmt)
{
}

/**
 * Check if there are more query results from a multiple query
 *
 * @param mixed $stmt
 *
 * @return bool Returns <code>TRUE</code> if more results exist, otherwise <code>FALSE</code>.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.more-results.php
 */
function mysqli_stmt_more_results($stmt): bool
{
}

/**
 * Reads the next result from a multiple query
 *
 * @param mixed $stmt
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.next-result.php
 */
function mysqli_stmt_next_result($stmt): bool
{
}

/**
 * Return the number of rows in statements result set
 *
 * @param mixed $stmt
 *
 * @return int An integer representing the number of rows in result set.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.num-rows.php
 */
function mysqli_stmt_num_rows($stmt): int
{
}

/**
 * Returns the number of parameter for the given statement
 *
 * @param mysqli_stmt $stmt Procedural style only: A statement identifier
 * returned by <code>mysqli_stmt_init</code>.
 *
 * @return int Returns an integer representing the number of parameters.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.param-count.php
 */
function mysqli_stmt_param_count(mysqli_stmt $stmt): int
{
}

/**
 * Prepare an SQL statement for execution
 *
 * @param string $query The query, as a string. It must consist of a single SQL statement.
 * @param mixed $query
 *
 * @return mixed Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.prepare.php
 */
function mysqli_stmt_prepare(string $query, $query)
{
}

/**
 * Resets a prepared statement
 *
 * @param mixed $stmt
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.reset.php
 */
function mysqli_stmt_reset($stmt): bool
{
}

/**
 * Returns result set metadata from a prepared statement
 *
 * @param mixed $stmt
 *
 * @return mysqli_result Returns a result object or <code>FALSE</code> if an error occurred.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.result-metadata.php
 */
function mysqli_stmt_result_metadata($stmt): mysqli_result
{
}

/**
 * Send data in blocks
 *
 * @param int $param_nr Indicates which parameter to associate the data with. Parameters are
 * numbered beginning with 0.
 * @param string $data A string containing data to be sent.
 * @param mixed $data
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.send-long-data.php
 */
function mysqli_stmt_send_long_data(int $param_nr, string $data, $data): bool
{
}

/**
 * Returns SQLSTATE error from previous statement operation
 *
 * @param mysqli_stmt $stmt Procedural style only: A statement identifier
 * returned by <code>mysqli_stmt_init</code>.
 *
 * @return string Returns a string containing the SQLSTATE error code for the last error.
 * The error code consists of five characters. <code>'00000'</code> means no error.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.sqlstate.php
 */
function mysqli_stmt_sqlstate(mysqli_stmt $stmt): string
{
}

/**
 * Transfers a result set from a prepared statement
 *
 * @param mixed $stmt
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.store-result.php
 */
function mysqli_stmt_store_result($stmt): bool
{
}

/**
 * Transfers a result set from the last query
 *
 * @param int $option The option that you want to set. It can be one of the following values:
 * <table>
 * <title>Valid options</title>
 * <thead>
 * <tr>
 * <td>Name</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td><code>MYSQLI_STORE_RESULT_COPY_DATA</code></td><td>Copy results from the internal mysqlnd buffer into the PHP variables fetched. By default,
 * mysqlnd will use a reference logic to avoid copying and duplicating results held in memory.
 * For certain result sets, for example, result sets with many small rows, the copy approach can
 * reduce the overall memory usage because PHP variables holding results may be
 * released earlier (available with mysqlnd only, since PHP 5.6.0)</td>
 * </tr>
 * </tbody>
 * </table>
 * @param mixed $flags
 *
 * @return mysqli_result Returns a buffered result object or <code>FALSE</code> if an error occurred.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.store-result.php
 */
function mysqli_store_result(int $option, $flags = null): mysqli_result
{
}

/**
 * Returns the thread ID for the current connection
 *
 * @param mysqli $link Procedural style only: A link identifier
 * returned by <code>mysqli_connect</code> or <code>mysqli_init</code>
 *
 * @return int Returns the Thread ID for the current connection.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.thread-id.php
 */
function mysqli_thread_id(mysqli $link): int
{
}

/**
 * Returns whether thread safety is given or not
 *
 * @return bool <code>TRUE</code> if the client library is thread-safe, otherwise <code>FALSE</code>.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.thread-safe.php
 */
function mysqli_thread_safe(): bool
{
}

/**
 * Initiate a result set retrieval
 *
 * @param mixed $link
 *
 * @return mysqli_result Returns an unbuffered result object or <code>FALSE</code> if an error occurred.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.use-result.php
 */
function mysqli_use_result($link): mysqli_result
{
}

/**
 * Returns the number of warnings from the last query for the given link
 *
 * @param mysqli $link Procedural style only: A link identifier
 * returned by <code>mysqli_connect</code> or <code>mysqli_init</code>
 *
 * @return int Number of warnings or zero if there are no warnings.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.warning-count.php
 */
function mysqli_warning_count(mysqli $link): int
{
}
