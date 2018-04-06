<?php
// Start of extension: mysqli
// - parsed on POSIX with PHP 7.1.15 (extension version 7.1.15)
// - parsed on Windows with PHP 7.1.15 (extension version 7.1.15)

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
 *       (instead of <code>wait_timeout</code> seconds) of inactivity before
 *       closing the connection.  The client's session
 *       <code>wait_timeout</code> variable will be set to
 *       the value of the session <code>interactive_timeout</code> variable.
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
 *       it is set internally in the MySQL client library
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-client-ssl
 *
 * @var int
 */
const MYSQLI_CLIENT_SSL = 2048;

/**
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
const MYSQLI_OPT_CAN_HANDLE_EXPIRED_PASSWORDS = 29;

/**
 * Connect timeout in seconds
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-opt-connect-timeout
 *
 * @var int
 */
const MYSQLI_OPT_CONNECT_TIMEOUT = 0;

/**
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
 * @var int
 */
const MYSQLI_OPT_NET_CMD_BUFFER_SIZE = 202;

/**
 * @var int
 */
const MYSQLI_OPT_NET_READ_BUFFER_SIZE = 203;

/**
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
 *       or the file specified with <code>MYSQLI_READ_DEFAULT_FILE</code>
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
 *       <code>FLUSH HOSTS</code> <code>SQL</code> statement.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-refresh-hosts
 *
 * @var int
 */
const MYSQLI_REFRESH_HOSTS = 8;

/**
 * Flushes the logs, like executing the
 *       <code>FLUSH LOGS</code> <code>SQL</code> statement.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-refresh-log
 *
 * @var int
 */
const MYSQLI_REFRESH_LOG = 2;

/**
 * On a master replication server: removes the binary log files listed in the
 *       binary log index, and truncates the index file. Like executing the
 *       <code>RESET MASTER</code> <code>SQL</code> statement.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-refresh-master
 *
 * @var int
 */
const MYSQLI_REFRESH_MASTER = 128;

/**
 * On a slave replication server: resets the master server information, and 
 *       restarts the slave. Like executing the <code>RESET SLAVE</code>
 *       <code>SQL</code> statement.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-refresh-slave
 *
 * @var int
 */
const MYSQLI_REFRESH_SLAVE = 64;

/**
 * Reset the status variables, like executing the
 *       <code>FLUSH STATUS</code> <code>SQL</code> statement.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-refresh-status
 *
 * @var int
 */
const MYSQLI_REFRESH_STATUS = 16;

/**
 * Flushes the table cache, like executing the
 *       <code>FLUSH TABLES</code> <code>SQL</code> statement.
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
 * @var int
 */
const MYSQLI_SERVER_PUBLIC_KEY = 27;

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
 *       <code>mysqli_rollback</code>.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-trans-cor-and-chain
 *
 * @var int
 */
const MYSQLI_TRANS_COR_AND_CHAIN = 1;

/**
 * Appends "AND NO CHAIN" to <code>mysqli_commit</code> or
 *       <code>mysqli_rollback</code>.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-trans-cor-and-no-chain
 *
 * @var int
 */
const MYSQLI_TRANS_COR_AND_NO_CHAIN = 2;

/**
 * Appends "NO RELEASE" to <code>mysqli_commit</code> or
 *       <code>mysqli_rollback</code>.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-trans-cor-no-release
 *
 * @var int
 */
const MYSQLI_TRANS_COR_NO_RELEASE = 8;

/**
 * Appends "RELEASE" to <code>mysqli_commit</code> or
 *       <code>mysqli_rollback</code>.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-trans-cor-release
 *
 * @var int
 */
const MYSQLI_TRANS_COR_RELEASE = 4;

/**
 * Start the transaction as "START TRANSACTION READ ONLY" with
 *       <code>mysqli_begin_transaction</code>.
 *
 * @link http://www.php.net/manual/en/mysqli.constants.php#constantmysqli-trans-start-read-only
 *
 * @var int
 */
const MYSQLI_TRANS_START_READ_ONLY = 4;

/**
 * Start the transaction as "START TRANSACTION READ WRITE" with
 *       <code>mysqli_begin_transaction</code>.
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
 *       For <code>CHAR</code>, see <code>MYSQLI_TYPE_STRING</code>
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
     * mixed|null $host
     * mixed|null $user
     * mixed|null $password
     * mixed|null $database
     * mixed|null $port
     * mixed|null $socket
     */
    public function __construct($host = null, $user = null, $password = null, $database = null, $port = null, $socket = null)
    {
    }

    /**
     * mixed $mode
     */
    public function autocommit($mode)
    {
    }

    /**
     * mixed|null $flags
     * mixed|null $name
     */
    public function begin_transaction($flags = null, $name = null)
    {
    }

    /**
     * mixed $user
     * mixed $password
     * mixed $database
     */
    public function change_user($user, $password, $database)
    {
    }

    public function character_set_name()
    {
    }

    public function close()
    {
    }

    /**
     * mixed|null $flags
     * mixed|null $name
     */
    public function commit($flags = null, $name = null)
    {
    }

    /**
     * mixed|null $host
     * mixed|null $user
     * mixed|null $password
     * mixed|null $database
     * mixed|null $port
     * mixed|null $socket
     */
    public function connect($host = null, $user = null, $password = null, $database = null, $port = null, $socket = null)
    {
    }

    /**
     * mixed $debug_options
     */
    public function debug($debug_options)
    {
    }

    public function dump_debug_info()
    {
    }

    /**
     * mixed $string_to_escape
     */
    public function escape_string($string_to_escape)
    {
    }

    public function get_charset()
    {
    }

    public function get_client_info()
    {
    }

    public function get_connection_stats()
    {
    }

    public function get_server_info()
    {
    }

    public function get_warnings()
    {
    }

    public function init()
    {
    }

    /**
     * mixed $connection_id
     */
    public function kill($connection_id)
    {
    }

    public function more_results()
    {
    }

    /**
     * mixed $query
     */
    public function multi_query($query)
    {
    }

    public function next_result()
    {
    }

    /**
     * mixed $option
     * mixed $value
     */
    public function options($option, $value)
    {
    }

    public function ping()
    {
    }

    /**
     * array[]|null $read
     * array[]|null $write
     * array[]|null $error
     * mixed $sec
     * mixed|null $usec
     */
    public static function poll(&$read = null, &$write = null, &$error = null, $sec, $usec = null)
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
     * mixed|null $resultmode
     */
    public function query($query, $resultmode = null)
    {
    }

    /**
     * mixed|null $host
     * mixed|null $user
     * mixed|null $password
     * mixed|null $database
     * mixed|null $port
     * mixed|null $socket
     * mixed|null $flags
     */
    public function real_connect($host = null, $user = null, $password = null, $database = null, $port = null, $socket = null, $flags = null)
    {
    }

    /**
     * mixed $string_to_escape
     */
    public function real_escape_string($string_to_escape)
    {
    }

    /**
     * mixed $query
     */
    public function real_query($query)
    {
    }

    public function reap_async_query()
    {
    }

    /**
     * mixed $options
     */
    public function refresh($options)
    {
    }

    /**
     * mixed $name
     */
    public function release_savepoint($name)
    {
    }

    /**
     * mixed|null $flags
     * mixed|null $name
     */
    public function rollback($flags = null, $name = null)
    {
    }

    /**
     * mixed $name
     */
    public function savepoint($name)
    {
    }

    /**
     * mixed $database
     */
    public function select_db($database)
    {
    }

    /**
     * mixed $charset
     */
    public function set_charset($charset)
    {
    }

    /**
     * mixed $option
     * mixed $value
     */
    public function set_opt($option, $value)
    {
    }

    /**
     * mixed $key
     * mixed $cert
     * mixed $certificate_authority
     * mixed $certificate_authority_path
     * mixed $cipher
     */
    public function ssl_set($key, $cert, $certificate_authority, $certificate_authority_path, $cipher)
    {
    }

    /**
     * Gives information about a file
     *
     * @return array
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.stat.php
     */
    public function stat(): array
    {
    }

    public function stmt_init()
    {
    }

    /**
     * mixed|null $flags
     */
    public function store_result($flags = null)
    {
    }

    public function thread_safe()
    {
    }

    public function use_result()
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
    public function __construct()
    {
    }

    public function close()
    {
    }

    /**
     * mixed $offset
     */
    public function data_seek($offset)
    {
    }

    /**
     * mixed|null $result_type
     */
    public function fetch_all($result_type = null)
    {
    }

    /**
     * mixed|null $result_type
     */
    public function fetch_array($result_type = null)
    {
    }

    public function fetch_assoc()
    {
    }

    public function fetch_field()
    {
    }

    /**
     * mixed $field_nr
     */
    public function fetch_field_direct($field_nr)
    {
    }

    public function fetch_fields()
    {
    }

    /**
     * mixed|null $class_name
     * array[]|null $params
     */
    public function fetch_object($class_name = null, $params = null)
    {
    }

    public function fetch_row()
    {
    }

    /**
     * mixed $field_nr
     */
    public function field_seek($field_nr)
    {
    }

    public function free()
    {
    }

    public function free_result()
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
    public function __construct()
    {
    }

    /**
     * mixed $attribute
     */
    public function attr_get($attribute)
    {
    }

    /**
     * mixed $attribute
     * mixed $value
     */
    public function attr_set($attribute, $value)
    {
    }

    /**
     * mixed $types
     * mixed $vars
     */
    public function bind_param($types, &...$vars)
    {
    }

    /**
     * mixed $vars
     */
    public function bind_result(&...$vars)
    {
    }

    public function close()
    {
    }

    /**
     * mixed $offset
     */
    public function data_seek($offset)
    {
    }

    public function execute()
    {
    }

    public function fetch()
    {
    }

    public function free_result()
    {
    }

    public function get_result()
    {
    }

    public function get_warnings()
    {
    }

    public function more_results()
    {
    }

    public function next_result()
    {
    }

    public function num_rows()
    {
    }

    /**
     * mixed $query
     */
    public function prepare($query)
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

    public function result_metadata()
    {
    }

    /**
     * mixed $param_nr
     * mixed $data
     */
    public function send_long_data($param_nr, $data)
    {
    }

    public function store_result()
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
    protected function __construct()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }
}

/**
 * Gets the number of affected rows in a previous MySQL operation
 *
 * mixed $link
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.affected-rows.php
 */
function mysqli_affected_rows($link): int
{
}

/**
 * Turns on or off auto-committing database modifications
 *
 * mixed $link
 * mixed $mode
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.autocommit.php
 */
function mysqli_autocommit($link, $mode): bool
{
}

/**
 * Starts a transaction
 *
 * mixed $link
 * mixed|null $flags
 * mixed|null $name
 *
 * @return bool
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.begin-transaction.php
 */
function mysqli_begin_transaction($link, $flags = null, $name = null): bool
{
}

/**
 * Changes the user of the specified database connection
 *
 * mixed $link
 * mixed $user
 * mixed $password
 * mixed $database
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.change-user.php
 */
function mysqli_change_user($link, $user, $password, $database): bool
{
}

/**
 * Returns the default character set for the database connection
 *
 * mixed $link
 *
 * @return string
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
 * mixed $link
 *
 * @return bool
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
 * mixed $link
 * mixed|null $flags
 * mixed|null $name
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.commit.php
 */
function mysqli_commit($link, $flags = null, $name = null): bool
{
}

/**
 * Alias of <code>mysqli::__construct</code>
 *
 * mixed|null $host
 * mixed|null $user
 * mixed|null $password
 * mixed|null $database
 * mixed|null $port
 * mixed|null $socket
 *
 * @return void
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mysqli-connect.php
 */
function mysqli_connect($host = null, $user = null, $password = null, $database = null, $port = null, $socket = null)
{
}

/**
 * Returns the error code from last connect call
 *
 * @return int
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
 * @return string
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
 * mixed $result
 * mixed $offset
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.data-seek.php
 */
function mysqli_data_seek($result, $offset): bool
{
}

/**
 * Performs debugging operations
 *
 * mixed $debug_options
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.debug.php
 */
function mysqli_debug($debug_options): bool
{
}

/**
 * Dump debugging information into the log
 *
 * mixed $link
 *
 * @return bool
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
 * mixed $link
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.errno.php
 */
function mysqli_errno($link): int
{
}

/**
 * Returns a string description of the last error
 *
 * mixed $link
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.error.php
 */
function mysqli_error($link): string
{
}

/**
 * Returns a list of errors from the last command executed
 *
 * mixed $link
 *
 * @return array
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.error-list.php
 */
function mysqli_error_list($link): array
{
}

/**
 * Alias of <code>mysqli_real_escape_string</code>
 *
 * mixed $link
 * mixed $query
 * mixed|null $resultmode
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
 * mixed $stmt
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
 * mixed $result
 * mixed|null $result_type
 *
 * @return mixed
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.fetch-all.php
 */
function mysqli_fetch_all($result, $result_type = null)
{
}

/**
 * Fetch a result row as an associative, a numeric array, or both
 *
 * mixed $result
 * mixed|null $result_type
 *
 * @return mixed
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.fetch-array.php
 */
function mysqli_fetch_array($result, $result_type = null)
{
}

/**
 * Fetch a result row as an associative array
 *
 * mixed $result
 *
 * @return array
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
 * mixed $result
 *
 * @return object
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.fetch-field.php
 */
function mysqli_fetch_field($result)
{
}

/**
 * Fetch meta-data for a single field
 *
 * mixed $result
 * mixed $field_nr
 *
 * @return object
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.fetch-field-direct.php
 */
function mysqli_fetch_field_direct($result, $field_nr)
{
}

/**
 * Returns an array of objects representing the fields in a result set
 *
 * mixed $result
 *
 * @return array
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
 * mixed $result
 *
 * @return array
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.lengths.php
 */
function mysqli_fetch_lengths($result): array
{
}

/**
 * Returns the current row of a result set as an object
 *
 * mixed $result
 * mixed|null $class_name
 * array[]|null $params
 *
 * @return object
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.fetch-object.php
 */
function mysqli_fetch_object($result, $class_name = null, $params = null)
{
}

/**
 * Get a result row as an enumerated array
 *
 * mixed $result
 *
 * @return mixed
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
 * mixed $link
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.field-count.php
 */
function mysqli_field_count($link): int
{
}

/**
 * Set result pointer to a specified field offset
 *
 * mixed $result
 * mixed $field_nr
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.field-seek.php
 */
function mysqli_field_seek($result, $field_nr): bool
{
}

/**
 * Get current field offset of a result pointer
 *
 * mixed $result
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.current-field.php
 */
function mysqli_field_tell($result): int
{
}

/**
 * Frees the memory associated with a result
 *
 * mixed $result
 *
 * @return void
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.free.php
 */
function mysqli_free_result($result)
{
}

/**
 * Returns a character set object
 *
 * mixed $link
 *
 * @return object
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.get-charset.php
 */
function mysqli_get_charset($link)
{
}

/**
 * Get MySQL client info
 *
 * mixed $link
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.get-client-info.php
 */
function mysqli_get_client_info($link): string
{
}

/**
 * Returns client per-process statistics
 *
 * @return array
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
 * mixed $link
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.get-client-version.php
 */
function mysqli_get_client_version($link): int
{
}

/**
 * Returns statistics about the client connection
 *
 * mixed $link
 *
 * @return bool
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
 * mixed $link
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.get-host-info.php
 */
function mysqli_get_host_info($link): string
{
}

/**
 * Return information about open and cached links
 *
 * @return array
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
 * mixed $link
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.get-proto-info.php
 */
function mysqli_get_proto_info($link): int
{
}

/**
 * Returns the version of the MySQL server
 *
 * mixed $link
 *
 * @return string
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
 * mixed $link
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.get-server-version.php
 */
function mysqli_get_server_version($link): int
{
}

/**
 * Get result of SHOW WARNINGS
 *
 * mixed $link
 *
 * @return mysqli_warning
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.get-warnings.php
 */
function mysqli_get_warnings($link)
{
}

/**
 * Retrieves information about the most recently executed query
 *
 * mixed $link
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.info.php
 */
function mysqli_info($link): string
{
}

/**
 * Initializes MySQLi and returns a resource for use with mysqli_real_connect()
 *
 * @return mysqli
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.init.php
 */
function mysqli_init()
{
}

/**
 * Returns the auto generated id used in the latest query
 *
 * mixed $link
 *
 * @return mixed
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.insert-id.php
 */
function mysqli_insert_id($link)
{
}

/**
 * Asks the server to kill a MySQL thread
 *
 * mixed $link
 * mixed $connection_id
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.kill.php
 */
function mysqli_kill($link, $connection_id): bool
{
}

/**
 * Check if there are any more query results from a multi query
 *
 * mixed $link
 *
 * @return bool
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
 * mixed $link
 * mixed|null $query
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.multi-query.php
 */
function mysqli_multi_query($link, $query = null): bool
{
}

/**
 * Prepare next result from multi_query
 *
 * mixed $link
 *
 * @return bool
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
 * mixed $result
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.field-count.php
 */
function mysqli_num_fields($result): int
{
}

/**
 * Gets the number of rows in a result
 *
 * mixed $result
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-result.num-rows.php
 */
function mysqli_num_rows($result): int
{
}

/**
 * Set options
 *
 * mixed $link
 * mixed $option
 * mixed $value
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.options.php
 */
function mysqli_options($link, $option, $value): bool
{
}

/**
 * Pings a server connection, or tries to reconnect if the connection has gone down
 *
 * mixed $link
 *
 * @return bool
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
 * array[]|null $read
 * array[]|null $write
 * array[]|null $error
 * mixed $sec
 * mixed|null $usec
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.poll.php
 */
function mysqli_poll(&$read = null, &$write = null, &$error = null, $sec, $usec = null): int
{
}

/**
 * Prepare an SQL statement for execution
 *
 * mixed $link
 * mixed $query
 *
 * @return mysqli_stmt
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.prepare.php
 */
function mysqli_prepare($link, $query)
{
}

/**
 * Performs a query on the database
 *
 * mixed $link
 * mixed $query
 * mixed|null $resultmode
 *
 * @return mixed
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.query.php
 */
function mysqli_query($link, $query, $resultmode = null)
{
}

/**
 * Opens a connection to a mysql server
 *
 * mixed $link
 * mixed|null $host
 * mixed|null $user
 * mixed|null $password
 * mixed|null $database
 * mixed|null $port
 * mixed|null $socket
 * mixed|null $flags
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.real-connect.php
 */
function mysqli_real_connect($link, $host = null, $user = null, $password = null, $database = null, $port = null, $socket = null, $flags = null): bool
{
}

/**
 * Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
 *
 * mixed $link
 * mixed $string_to_escape
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.real-escape-string.php
 */
function mysqli_real_escape_string($link, $string_to_escape): string
{
}

/**
 * Execute an SQL query
 *
 * mixed $link
 * mixed|null $query
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.real-query.php
 */
function mysqli_real_query($link, $query = null): bool
{
}

/**
 * Get result from async query
 *
 * mixed $link
 *
 * @return mysqli_result
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.reap-async-query.php
 */
function mysqli_reap_async_query($link)
{
}

/**
 * Refreshes
 *
 * mixed $link
 * mixed $options
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.refresh.php
 */
function mysqli_refresh($link, $options): bool
{
}

/**
 * Removes the named savepoint from the set of savepoints of the current transaction
 *
 * mixed $link
 * mixed $name
 *
 * @return bool
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.release-savepoint.php
 */
function mysqli_release_savepoint($link, $name): bool
{
}

/**
 * Alias of mysqli_driver-&gt;report_mode
 *
 * mixed $flags
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mysqli-report.php
 */
function mysqli_report($flags): bool
{
}

/**
 * Rolls back current transaction
 *
 * mixed $link
 * mixed|null $flags
 * mixed|null $name
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.rollback.php
 */
function mysqli_rollback($link, $flags = null, $name = null): bool
{
}

/**
 * Set a named transaction savepoint
 *
 * mixed $link
 * mixed $name
 *
 * @return bool
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.savepoint.php
 */
function mysqli_savepoint($link, $name): bool
{
}

/**
 * Selects the default database for database queries
 *
 * mixed $link
 * mixed $database
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.select-db.php
 */
function mysqli_select_db($link, $database): bool
{
}

/**
 * Sets the default client character set
 *
 * mixed $link
 * mixed $charset
 *
 * @return bool
 *
 * @since PHP 5 >= 5.0.5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.set-charset.php
 */
function mysqli_set_charset($link, $charset): bool
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
 * mixed $link
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.sqlstate.php
 */
function mysqli_sqlstate($link): string
{
}

/**
 * Used for establishing secure connections using SSL
 *
 * mixed $link
 * mixed $key
 * mixed $cert
 * mixed $certificate_authority
 * mixed $certificate_authority_path
 * mixed $cipher
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.ssl-set.php
 */
function mysqli_ssl_set($link, $key, $cert, $certificate_authority, $certificate_authority_path, $cipher): bool
{
}

/**
 * Gets the current system status
 *
 * mixed $link
 *
 * @return string
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
 *   inserted by the last executed statement
 *
 * mixed $stmt
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.affected-rows.php
 */
function mysqli_stmt_affected_rows($stmt): int
{
}

/**
 * Used to get the current value of a statement attribute
 *
 * mixed $stmt
 * mixed $attribute
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.attr-get.php
 */
function mysqli_stmt_attr_get($stmt, $attribute): int
{
}

/**
 * Used to modify the behavior of a prepared statement
 *
 * mixed $stmt
 * mixed $attribute
 * mixed $value
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.attr-set.php
 */
function mysqli_stmt_attr_set($stmt, $attribute, $value): bool
{
}

/**
 * Binds variables to a prepared statement as parameters
 *
 * mixed $stmt
 * mixed $types
 * mixed $vars
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.bind-param.php
 */
function mysqli_stmt_bind_param($stmt, $types, &...$vars): bool
{
}

/**
 * Binds variables to a prepared statement for result storage
 *
 * mixed $stmt
 * mixed $vars
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.bind-result.php
 */
function mysqli_stmt_bind_result($stmt, &...$vars): bool
{
}

/**
 * Closes a prepared statement
 *
 * mixed $stmt
 *
 * @return bool
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
 * mixed $stmt
 * mixed $offset
 *
 * @return void
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.data-seek.php
 */
function mysqli_stmt_data_seek($stmt, $offset)
{
}

/**
 * Returns the error code for the most recent statement call
 *
 * mixed $stmt
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.errno.php
 */
function mysqli_stmt_errno($stmt): int
{
}

/**
 * Returns a string description for last statement error
 *
 * mixed $stmt
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.error.php
 */
function mysqli_stmt_error($stmt): string
{
}

/**
 * Returns a list of errors from the last statement executed
 *
 * mixed $stmt
 *
 * @return array
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.error-list.php
 */
function mysqli_stmt_error_list($stmt): array
{
}

/**
 * Executes a prepared Query
 *
 * mixed $stmt
 *
 * @return bool
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
 * mixed $stmt
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
 * mixed $stmt
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.field-count.php
 */
function mysqli_stmt_field_count($stmt): int
{
}

/**
 * Frees stored result memory for the given statement handle
 *
 * mixed $stmt
 *
 * @return void
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.free-result.php
 */
function mysqli_stmt_free_result($stmt)
{
}

/**
 * Gets a result set from a prepared statement
 *
 * mixed $stmt
 *
 * @return mysqli_result
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.get-result.php
 */
function mysqli_stmt_get_result($stmt)
{
}

/**
 * Get result of SHOW WARNINGS
 *
 * mixed $stmt
 *
 * @return object
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.get-warnings.php
 */
function mysqli_stmt_get_warnings($stmt)
{
}

/**
 * Initializes a statement and returns an object for use with mysqli_stmt_prepare
 *
 * mixed $link
 *
 * @return mysqli_stmt
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.stmt-init.php
 */
function mysqli_stmt_init($link)
{
}

/**
 * Get the ID generated from the previous INSERT operation
 *
 * mixed $stmt
 *
 * @return mixed
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.insert-id.php
 */
function mysqli_stmt_insert_id($stmt)
{
}

/**
 * Check if there are more query results from a multiple query
 *
 * mixed $stmt
 *
 * @return bool
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
 * mixed $stmt
 *
 * @return bool
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
 * mixed $stmt
 *
 * @return int
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
 * mixed $stmt
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.param-count.php
 */
function mysqli_stmt_param_count($stmt): int
{
}

/**
 * Prepare an SQL statement for execution
 *
 * mixed $stmt
 * mixed $query
 *
 * @return mixed
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.prepare.php
 */
function mysqli_stmt_prepare($stmt, $query)
{
}

/**
 * Resets a prepared statement
 *
 * mixed $stmt
 *
 * @return bool
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
 * mixed $stmt
 *
 * @return mysqli_result
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.result-metadata.php
 */
function mysqli_stmt_result_metadata($stmt)
{
}

/**
 * Send data in blocks
 *
 * mixed $stmt
 * mixed $param_nr
 * mixed $data
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.send-long-data.php
 */
function mysqli_stmt_send_long_data($stmt, $param_nr, $data): bool
{
}

/**
 * Returns SQLSTATE error from previous statement operation
 *
 * mixed $stmt
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli-stmt.sqlstate.php
 */
function mysqli_stmt_sqlstate($stmt): string
{
}

/**
 * Transfers a result set from a prepared statement
 *
 * mixed $stmt
 *
 * @return bool
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
 * mixed $link
 * mixed|null $flags
 *
 * @return mysqli_result
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.store-result.php
 */
function mysqli_store_result($link, $flags = null)
{
}

/**
 * Returns the thread ID for the current connection
 *
 * mixed $link
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.thread-id.php
 */
function mysqli_thread_id($link): int
{
}

/**
 * Returns whether thread safety is given or not
 *
 * @return bool
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
 * mixed $link
 *
 * @return mysqli_result
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.use-result.php
 */
function mysqli_use_result($link)
{
}

/**
 * Returns the number of warnings from the last query for the given link
 *
 * mixed $link
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/mysqli.warning-count.php
 */
function mysqli_warning_count($link): int
{
}
