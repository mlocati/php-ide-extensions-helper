<?php
// Start of extension: sqlsrv
// - parsed on POSIX with PHP 7.0.29 (extension version 5.2.0)

/**
 * @var string
 */
const SQLSRV_CURSOR_CLIENT_BUFFERED = 'buffered';

/**
 * Inidicates a dynamic cursor. For usage information, see
 * Specifying a Cursor Type and Selecting Rows.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-dynamic
 *
 * @var string
 */
const SQLSRV_CURSOR_DYNAMIC = 'dynamic';

/**
 * Inidicates a forward-only cursor. For usage information, see
 * Specifying a Cursor Type and Selecting Rows.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-cursor-forward
 *
 * @var string
 */
const SQLSRV_CURSOR_FORWARD = 'forward';

/**
 * Inidicates a keyset cursor. For usage information, see
 * Specifying a Cursor Type and Selecting Rows.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-cursor-keyset
 *
 * @var string
 */
const SQLSRV_CURSOR_KEYSET = 'keyset';

/**
 * Inidicates a static cursor. For usage information, see
 * Specifying a Cursor Type and Selecting Rows.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-cursor-static
 *
 * @var string
 */
const SQLSRV_CURSOR_STATIC = 'static';

/**
 * Specifies that data is returned as a raw byte stream from the server without
 * performing encoding or translation. For usage information, see
 * How to: Specify PHP Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-enc-binary
 *
 * @var string
 */
const SQLSRV_ENC_BINARY = 'binary';

/**
 * Data is returned in 8-bit characters as specified in the code page of the
 * Windows locale that is set on the system. Any multi-byte characters or characters
 * that do not map into this code page are substituted with a single byte question
 * mark (?) character. This is the default encoding. For usage information,
 * see How to: Specify PHP Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-enc-char
 *
 * @var string
 */
const SQLSRV_ENC_CHAR = 'char';

/**
 * Forces <code>sqlsrv_errors</code> to return both errors and warings
 * when passed as a parameter (the default behavior).
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-err-all
 *
 * @var int
 */
const SQLSRV_ERR_ALL = 2;

/**
 * Forces <code>sqlsrv_errors</code> to return errors only (no warnings)
 * when passed as a parameter.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-err-errors
 *
 * @var int
 */
const SQLSRV_ERR_ERRORS = 0;

/**
 * Forces <code>sqlsrv_errors</code> to return warnings only (no errors)
 * when passed as a parameter.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-err-warnings
 *
 * @var int
 */
const SQLSRV_ERR_WARNINGS = 1;

/**
 * Forces <code>sqlsrv_fetch_array</code> to return an associative
 * array when passed as a parameter.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-fetch-assoc
 *
 * @var int
 */
const SQLSRV_FETCH_ASSOC = 2;

/**
 * Forces <code>sqlsrv_fetch_array</code> to return an array with both
 * associative and numeric keys when passed as a parameter (the default behavior).
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-fetch-both
 *
 * @var int
 */
const SQLSRV_FETCH_BOTH = 3;

/**
 * Forces <code>sqlsrv_fetch_array</code> to return an array with
 * numeric when passed as a parameter.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-fetch-numeric
 *
 * @var int
 */
const SQLSRV_FETCH_NUMERIC = 1;

/**
 * Specifies that errors, warnings, and notices will be logged
 * when passed to <code>sqlsrv_configure</code> as a parameter.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-log-severity-all
 *
 * @var int
 */
const SQLSRV_LOG_SEVERITY_ALL = -1;

/**
 * Specifies that errors will be logged when passed to
 * <code>sqlsrv_configure</code> as a parameter.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-log-severity-error
 *
 * @var int
 */
const SQLSRV_LOG_SEVERITY_ERROR = 1;

/**
 * Specifies that notices will be logged when passed to
 * <code>sqlsrv_configure</code> as a parameter.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-log-severity-notice
 *
 * @var int
 */
const SQLSRV_LOG_SEVERITY_NOTICE = 4;

/**
 * Specifies that warnings will be logged when passed to
 * <code>sqlsrv_configure</code> as a parameter.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-log-severity-warning
 *
 * @var int
 */
const SQLSRV_LOG_SEVERITY_WARNING = 2;

/**
 * Turns on logging of all subsystems when passed to
 * <code>sqlsrv_configure</code> as a parameter.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-log-system-all
 *
 * @var int
 */
const SQLSRV_LOG_SYSTEM_ALL = -1;

/**
 * Turns on logging of connection activity when passed to
 * <code>sqlsrv_configure</code> as a parameter.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-log-system-conn
 *
 * @var int
 */
const SQLSRV_LOG_SYSTEM_CONN = 2;

/**
 * Turns on logging of initialization activity when passed to
 * <code>sqlsrv_configure</code> as a parameter.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-log-system-init
 *
 * @var int
 */
const SQLSRV_LOG_SYSTEM_INIT = 1;

/**
 * Turns off logging of all subsystems when passed to
 * <code>sqlsrv_configure</code> as a parameter.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-log-system-off
 *
 * @var int
 */
const SQLSRV_LOG_SYSTEM_OFF = 0;

/**
 * Turns on logging of statement activity when passed to
 * <code>sqlsrv_configure</code> as a parameter.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-log-system-stmt
 *
 * @var int
 */
const SQLSRV_LOG_SYSTEM_STMT = 4;

/**
 * Turns on logging of error function activity when passed to
 * <code>sqlsrv_configure</code> as a parameter.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-log-system-util
 *
 * @var int
 */
const SQLSRV_LOG_SYSTEM_UTIL = 8;

/**
 * Indicates that a column is not nullable.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-nullable-no
 *
 * @var int
 */
const SQLSRV_NULLABLE_NO = 0;

/**
 * Indicates that it is not known if a column is nullable.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-nullable-unknown
 *
 * @var int
 */
const SQLSRV_NULLABLE_UNKNOWN = 2;

/**
 * Indicates that a column is nullable.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-nullable-yes
 *
 * @var int
 */
const SQLSRV_NULLABLE_YES = 1;

/**
 * Indicates an input parameter when passed to <code>sqlsrv_query</code>
 * or <code>sqlsrv_prepare</code>.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-param-in
 *
 * @var int
 */
const SQLSRV_PARAM_IN = 1;

/**
 * Indicates a bidirectional parameter when passed to <code>sqlsrv_query</code>
 * or <code>sqlsrv_prepare</code>.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-param-inout
 *
 * @var int
 */
const SQLSRV_PARAM_INOUT = 2;

/**
 * Indicates an output parameter when passed to <code>sqlsrv_query</code> or
 * <code>sqlsrv_prepare</code>.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-param-out
 *
 * @var int
 */
const SQLSRV_PARAM_OUT = 4;

/**
 * Specifies a datetime PHP data type. For usage information, see
 * How to: Specify PHP Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-phptype-datetime
 *
 * @var int
 */
const SQLSRV_PHPTYPE_DATETIME = 5;

/**
 * Specifies a float PHP data type. For usage information, see
 * How to: Specify PHP Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-phptype-float
 *
 * @var int
 */
const SQLSRV_PHPTYPE_FLOAT = 3;

/**
 * Specifies an integer PHP data type. For usage information, see
 * How to: Specify PHP Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-phptype-int
 *
 * @var int
 */
const SQLSRV_PHPTYPE_INT = 2;

/**
 * @var int
 */
const SQLSRV_PHPTYPE_NULL = 1;

/**
 * Specifies which row to select in a result set. For usage information, see
 * Specifying a Cursor Type and Selecting Rows.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-scroll-absolute
 *
 * @var int
 */
const SQLSRV_SCROLL_ABSOLUTE = 5;

/**
 * Specifies which row to select in a result set. For usage information, see
 * Specifying a Cursor Type and Selecting Rows.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-scroll-first
 *
 * @var int
 */
const SQLSRV_SCROLL_FIRST = 2;

/**
 * Specifies which row to select in a result set. For usage information, see
 * Specifying a Cursor Type and Selecting Rows.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-scroll-last
 *
 * @var int
 */
const SQLSRV_SCROLL_LAST = 3;

/**
 * Specifies which row to select in a result set. For usage information, see
 * Specifying a Cursor Type and Selecting Rows.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-scroll-next
 *
 * @var int
 */
const SQLSRV_SCROLL_NEXT = 1;

/**
 * Specifies which row to select in a result set. For usage information, see
 * Specifying a Cursor Type and Selecting Rows.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-scroll-prior
 *
 * @var int
 */
const SQLSRV_SCROLL_PRIOR = 4;

/**
 * Specifies which row to select in a result set. For usage information, see
 * Specifying a Cursor Type and Selecting Rows.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-scroll-relative
 *
 * @var int
 */
const SQLSRV_SCROLL_RELATIVE = 6;

/**
 * Describes the bigint SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-bigint
 *
 * @var int
 */
const SQLSRV_SQLTYPE_BIGINT = -5;

/**
 * Describes the binary SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-binary
 *
 * @var int
 */
const SQLSRV_SQLTYPE_BINARY = -2;

/**
 * Describes the bit SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-bit
 *
 * @var int
 */
const SQLSRV_SQLTYPE_BIT = -7;

/**
 * Describes the char SQL Server data type. This constant works like a function
 * and accepts a parameter indicating the number characters. For usage information,
 * see How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-char
 *
 * @var int
 */
const SQLSRV_SQLTYPE_CHAR = 1;

/**
 * Describes the date SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-date
 *
 * @var int
 */
const SQLSRV_SQLTYPE_DATE = 5211;

/**
 * Describes the datetime SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-datetime
 *
 * @var int
 */
const SQLSRV_SQLTYPE_DATETIME = 25177693;

/**
 * Describes the datetime2 SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-datetime2
 *
 * @var int
 */
const SQLSRV_SQLTYPE_DATETIME2 = 58734173;

/**
 * Describes the datetimeoffset SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-datetimeoffset
 *
 * @var int
 */
const SQLSRV_SQLTYPE_DATETIMEOFFSET = 58738021;

/**
 * Describes the decimal SQL Server data type. This constant works like a function
 * and accepts two parameters indicating (in order) precision and scale. For usage information,
 * see How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-decimal
 *
 * @var int
 */
const SQLSRV_SQLTYPE_DECIMAL = 3;

/**
 * Describes the float SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-float
 *
 * @var int
 */
const SQLSRV_SQLTYPE_FLOAT = 6;

/**
 * Describes the image SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-image
 *
 * @var int
 */
const SQLSRV_SQLTYPE_IMAGE = -4;

/**
 * Describes the int SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-int
 *
 * @var int
 */
const SQLSRV_SQLTYPE_INT = 4;

/**
 * Describes the money SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-money
 *
 * @var int
 */
const SQLSRV_SQLTYPE_MONEY = 33564163;

/**
 * Describes the nchar SQL Server data type. This constant works like a function
 * and accepts a single parameter indicating the character count. For usage information,
 * see How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-nchar
 *
 * @var int
 */
const SQLSRV_SQLTYPE_NCHAR = -8;

/**
 * Describes the ntext SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-ntext
 *
 * @var int
 */
const SQLSRV_SQLTYPE_NTEXT = -10;

/**
 * Describes the numeric SQL Server data type. This constant works like a function
 * and accepts two parameter indicating (in order) precision and scale. For usage
 * information, see How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-numeric
 *
 * @var int
 */
const SQLSRV_SQLTYPE_NUMERIC = 2;

/**
 * Describes the nvarchar SQL Server data type. This constant works like a function
 * and accepts a single parameter indicating the character count. For usage
 * information, see How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-nvarchar
 *
 * @var int
 */
const SQLSRV_SQLTYPE_NVARCHAR = -9;

/**
 * Describes the real SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-real
 *
 * @var int
 */
const SQLSRV_SQLTYPE_REAL = 7;

/**
 * Describes the smalldatetime SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-smalldatetime
 *
 * @var int
 */
const SQLSRV_SQLTYPE_SMALLDATETIME = 8285;

/**
 * Describes the smallint SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-smallint
 *
 * @var int
 */
const SQLSRV_SQLTYPE_SMALLINT = 5;

/**
 * Describes the smallmoney SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-smallmoney
 *
 * @var int
 */
const SQLSRV_SQLTYPE_SMALLMONEY = 33559555;

/**
 * Describes the text SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-text
 *
 * @var int
 */
const SQLSRV_SQLTYPE_TEXT = -1;

/**
 * Describes the time SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-time
 *
 * @var int
 */
const SQLSRV_SQLTYPE_TIME = 58728806;

/**
 * Describes the timestamp SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-timestamp
 *
 * @var int
 */
const SQLSRV_SQLTYPE_TIMESTAMP = 4606;

/**
 * Describes the tinyint SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-tinyint
 *
 * @var int
 */
const SQLSRV_SQLTYPE_TINYINT = -6;

/**
 * Describes the UDT SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-udt
 *
 * @var int
 */
const SQLSRV_SQLTYPE_UDT = -151;

/**
 * Describes the uniqueidentifier SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-uniqueidentifier
 *
 * @var int
 */
const SQLSRV_SQLTYPE_UNIQUEIDENTIFIER = -11;

/**
 * Describes the varbinary SQL Server data type. This constant works like a function
 * and accepts a single parameter indicating the byte count. For usage information,
 * see How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-varbinary
 *
 * @var int
 */
const SQLSRV_SQLTYPE_VARBINARY = -3;

/**
 * Describes the varchar SQL Server data type. This constant works like a function
 * and accepts a single parameter indicating the character count. For usage information,
 * see How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-varchar
 *
 * @var int
 */
const SQLSRV_SQLTYPE_VARCHAR = 12;

/**
 * Describes the XML SQL Server data type. For usage information, see
 * How to: Specify SQL Types.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-sqltype-xml
 *
 * @var int
 */
const SQLSRV_SQLTYPE_XML = -152;

/**
 * Inidicates a transaction isolation level of READ COMMITTED. This value is
 * used to set the TransactionIsolation level in the $connectionOptions arrary
 * passed to <code>sqlsrv_connect</code>.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-txn-read-committed
 *
 * @var int
 */
const SQLSRV_TXN_READ_COMMITTED = 2;

/**
 * Inidicates a transaction isolation level of READ UNCOMMITTED. This value is
 * used to set the TransactionIsolation level in the $connectionOptions arrary
 * passed to <code>sqlsrv_connect</code>.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-txn-read-uncommitted
 *
 * @var int
 */
const SQLSRV_TXN_READ_UNCOMMITTED = 1;

/**
 * Inidicates a transaction isolation level of REPEATABLE READ. This value is
 * used to set the TransactionIsolation level in the $connectionOptions arrary
 * passed to <code>sqlsrv_connect</code>.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-txn-repeatable-read
 *
 * @var int
 */
const SQLSRV_TXN_REPEATABLE_READ = 4;

/**
 * @var int
 */
const SQLSRV_TXN_SERIALIZABLE = 8;

/**
 * Inidicates a transaction isolation level of SNAPSHOT. This value is used to
 * set the TransactionIsolation level in the $connectionOptions arrary passed
 * to <code>sqlsrv_connect</code>.
 *
 * @link http://www.php.net/manual/en/sqlsrv.constants.php#constant.sqlsrv-txn-snapshot
 *
 * @var int
 */
const SQLSRV_TXN_SNAPSHOT = 32;

/**
 * Begins a database transaction
 *
 * @param resource $conn The connection resource returned by a call to <code>sqlsrv_connect</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-begin-transaction.php
 */
function sqlsrv_begin_transaction($conn): bool
{
}

/**
 * Cancels a statement
 *
 * @param resource $stmt The statement resource to be cancelled.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-cancel.php
 */
function sqlsrv_cancel($stmt): bool
{
}

/**
 * Returns information about the client and specified connection
 *
 * @param resource $conn The connection about which information is returned.
 *
 * @return array Returns an associative array with keys described in the table below.
 * Returns <code>FALSE</code> otherwise.
 * <table>
 * <title>Array returned by sqlsrv_client_info</title>
 * <thead>
 * <tr>
 * <td>Key</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>DriverDllName</td><td>SQLNCLI10.DLL</td>
 * </tr>
 * <tr>
 * <td>DriverODBCVer</td><td>ODBC version (xx.yy)</td>
 * </tr>
 * <tr>
 * <td>DriverVer</td><td>SQL Server Native Client DLL version (10.5.xxx)</td>
 * </tr>
 * <tr>
 * <td>ExtensionVer</td><td>php_sqlsrv.dll version (2.0.xxx.x)</td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-client-info.php
 */
function sqlsrv_client_info($conn): array
{
}

/**
 * Closes an open connection and releases resourses associated with the connection
 *
 * @param resource $conn The connection to be closed.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-close.php
 */
function sqlsrv_close($conn): bool
{
}

/**
 * Commits a transaction that was begun with <code>sqlsrv_begin_transaction</code>
 *
 * @param resource $conn The connection on which the transaction is to be committed.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-commit.php
 */
function sqlsrv_commit($conn): bool
{
}

/**
 * Changes the driver error handling and logging configurations
 *
 * @param string $setting The name of the setting to set. The possible values are
 * "WarningsReturnAsErrors", "LogSubsystems", and "LogSeverity".
 * @param mixed $value The value of the specified setting. The following table shows possible values:
 * <table>
 * <title>Error and Logging Setting Options</title>
 * <thead>
 * <tr>
 * <td>Setting</td><td>Options</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>WarningsReturnAsErrors</td><td>1 (<code>TRUE</code>) or 0 (<code>FALSE</code>)</td>
 * </tr>
 * <tr>
 * <td>LogSubsystems</td><td>SQLSRV_LOG_SYSTEM_ALL (-1)
 * SQLSRV_LOG_SYSTEM_CONN (2)
 * SQLSRV_LOG_SYSTEM_INIT (1)
 * SQLSRV_LOG_SYSTEM_OFF (0)
 * SQLSRV_LOG_SYSTEM_STMT (4)
 * SQLSRV_LOG_SYSTEM_UTIL (8)</td>
 * </tr>
 * <tr>
 * <td>LogSeverity</td><td>SQLSRV_LOG_SEVERITY_ALL (-1)
 * SQLSRV_LOG_SEVERITY_ERROR (1)
 * SQLSRV_LOG_SEVERITY_NOTICE (4)
 * SQLSRV_LOG_SEVERITY_WARNING (2)</td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-configure.php
 */
function sqlsrv_configure(string $setting, $value): bool
{
}

/**
 * Opens a connection to a Microsoft SQL Server database
 *
 * @param string $serverName The name of the server to which a connection is established. To connect
 * to a specific instance, follow the server name with a backward slash
 * and the instance name (e.g. serverName\sqlexpress).
 * @param array $connectionInfo An associative array that specifies options for connecting to the server.
 * If values for the UID and PWD keys are not specified, the connection
 * will be attempted using Windows Authentication. For a complete list of supported
 * keys, see SQLSRV Connection Options.
 *
 * @return resource A connection resource. If a connection cannot be successfully opened, <code>FALSE</code> is returned.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-connect.php
 */
function sqlsrv_connect(string $serverName, array $connectionInfo = null)
{
}

/**
 * Returns error and warning information about the last SQLSRV operation performed
 *
 * @param int $errorsOrWarnings Determines whether error information, warning information, or both are
 * returned. If this parameter is not supplied, both error information and
 * warning information are returned. The following are the supported values
 * for this parameter: SQLSRV_ERR_ALL, SQLSRV_ERR_ERRORS, SQLSRV_ERR_WARNINGS.
 *
 * @return mixed If errors and/or warnings occurred on the last sqlsrv operation, an array of
 * arrays containing error information is returned. If no errors and/or warnings
 * occurred on the last sqlsrv operation, <code>NULL</code> is returned. The following table
 * describes the structure of the returned arrays:
 * <table>
 * <title>Array returned by sqlsrv_errors</title>
 * <thead>
 * <tr>
 * <td>Key</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>SQLSTATE</td><td>For errors that originate from the ODBC driver, the SQLSTATE returned
 * by ODBC. For errors that originate from the Microsoft Drivers for PHP for
 * SQL Server, a SQLSTATE of IMSSP. For warnings that originate from the
 * Microsoft Drivers for PHP for SQL Server, a SQLSTATE of 01SSP.
 * </td>
 * </tr>
 * <tr>
 * <td>code</td><td>For errors that originate from SQL Server, the native SQL Server
 * error code. For errors that originate from the ODBC driver, the error
 * code returned by ODBC. For errors that originate from the Microsoft Drivers
 * for PHP for SQL Server, the Microsoft Drivers for PHP for SQL Server error code.
 * </td>
 * </tr>
 * <tr>
 * <td>message</td><td>A description of the error.</td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-errors.php
 */
function sqlsrv_errors(int $errorsOrWarnings = null)
{
}

/**
 * Executes a statement prepared with <code>sqlsrv_prepare</code>
 *
 * @param resource $stmt A statement resource returned by <code>sqlsrv_prepare</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-execute.php
 */
function sqlsrv_execute($stmt): bool
{
}

/**
 * Makes the next row in a result set available for reading
 *
 * @param resource $stmt A statement resource created by executing <code>sqlsrv_query</code>
 * or <code>sqlsrv_execute</code>.
 *
 * @return mixed Returns <code>TRUE</code> if the next row of a result set was successfully retrieved,
 * <code>FALSE</code> if an error occurs, and <code>NULL</code> if there are no more rows in the result set.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-fetch.php
 */
function sqlsrv_fetch($stmt)
{
}

/**
 * Returns a row as an array
 *
 * @param resource $stmt A statement resource returned by sqlsrv_query or sqlsrv_prepare.
 * @param int $fetchType A predefined constant specifying the type of array to return. Possible
 * values are <code>SQLSRV_FETCH_ASSOC</code>,
 * <code>SQLSRV_FETCH_NUMERIC</code>, and
 * <code>SQLSRV_FETCH_BOTH</code> (the default).
 * @param int $row Specifies the row to access in a result set that uses a scrollable cursor.
 * Possible values are <code>SQLSRV_SCROLL_NEXT</code>,
 * <code>SQLSRV_SCROLL_PRIOR</code>, <code>SQLSRV_SCROLL_FIRST</code>,
 * <code>SQLSRV_SCROLL_LAST</code>, <code>SQLSRV_SCROLL_ABSOLUTE</code> and,
 * <code>SQLSRV_SCROLL_RELATIVE</code> (the default). When this parameter
 * is specified, the <code>fetchType</code> must be explicitly defined.
 * @param int $offset Specifies the row to be accessed if the row parameter is set to
 * <code>SQLSRV_SCROLL_ABSOLUTE</code> or
 * <code>SQLSRV_SCROLL_RELATIVE</code>. Note that the first row in
 * a result set has index 0.
 *
 * @return array Returns an array on success, <code>NULL</code> if there are no more rows to return, and
 * <code>FALSE</code> if an error occurs.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-fetch-array.php
 */
function sqlsrv_fetch_array($stmt, int $fetchType = null, int $row = null, int $offset = null): array
{
}

/**
 * Retrieves the next row of data in a result set as an object
 *
 * @param resource $stmt A statement resource created by <code>sqlsrv_query</code> or
 * <code>sqlsrv_execute</code>.
 * @param string $className The name of the class to instantiate. If no class name is specified,
 * stdClass is instantiated.
 * @param array $ctorParams Values passed to the constructor of the specified class. If the constructor
 * of the specified class takes parameters, the ctorParams array must be
 * supplied.
 * @param int $row The row to be accessed. This parameter can only be used if the specified
 * statement was prepared with a scrollable cursor. In that case, this parameter
 * can take on one of the following values:
 * <ul>
 * <li>SQLSRV_SCROLL_NEXT</li>
 * <li>SQLSRV_SCROLL_PRIOR</li>
 * <li>SQLSRV_SCROLL_FIRST</li>
 * <li>SQLSRV_SCROLL_LAST</li>
 * <li>SQLSRV_SCROLL_ABSOLUTE</li>
 * <li>SQLSRV_SCROLL_RELATIVE</li>
 * </ul>
 * @param int $offset Specifies the row to be accessed if the row parameter is set to
 * <code>SQLSRV_SCROLL_ABSOLUTE</code> or
 * <code>SQLSRV_SCROLL_RELATIVE</code>. Note that the first row in
 * a result set has index 0.
 *
 * @return mixed Returns an object on success, <code>NULL</code> if there are no more rows to return,
 * and <code>FALSE</code> if an error occurs or if the specified class does not exist.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-fetch-object.php
 */
function sqlsrv_fetch_object($stmt, string $className = null, array $ctorParams = null, int $row = null, int $offset = null)
{
}

/**
 * Retrieves metadata for the fields of a statement prepared by
 * <code>sqlsrv_prepare</code> or <code>sqlsrv_query</code>
 *
 * @param resource $stmt The statment resource for which metadata is returned.
 *
 * @return mixed Returns an array of arrays is returned on success. Otherwise, <code>FALSE</code> is returned.
 * Each returned array is described by the following table:
 * <table>
 * <title>Array returned by sqlsrv_field_metadata</title>
 * <thead>
 * <tr>
 * <td>Key</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>Name</td><td>The name of the field.</td>
 * </tr>
 * <tr>
 * <td>Type</td><td>The numeric value for the SQL type.</td>
 * </tr>
 * <tr>
 * <td>Size</td><td>The number of characters for fields of character type, the number of
 * bytes for fields of binary type, or <code>NULL</code> for other types.</td>
 * </tr>
 * <tr>
 * <td>Precision</td><td>The precision for types of variable precision, <code>NULL</code> for other types.</td>
 * </tr>
 * <tr>
 * <td>Scale</td><td>The scale for types of variable scale, <code>NULL</code> for other types.</td>
 * </tr>
 * <tr>
 * <td>Nullable</td><td>An enumeration indicating whether the column is nullable, not nullable,
 * or if it is not known.</td>
 * </tr>
 * </tbody>
 * </table>
 * For more information, see sqlsrv_field_metadata
 * in the Microsoft SQLSRV documentation.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-field-metadata.php
 */
function sqlsrv_field_metadata($stmt)
{
}

/**
 * Frees all resources for the specified statement
 *
 * @param resource $stmt The statment for which resources are freed.
 * Note that <code>NULL</code> is a valid parameter value. This allows the function to be
 * called multiple times in a script.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-free-stmt.php
 */
function sqlsrv_free_stmt($stmt): bool
{
}

/**
 * Returns the value of the specified configuration setting
 *
 * @param string $setting The name of the setting for which the value is returned. For a list of
 * configurable settings, see <code>sqlsrv_configure</code>.
 *
 * @return mixed Returns the value of the specified setting. If an invalid setting is specified,
 * <code>FALSE</code> is returned.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-get-config.php
 */
function sqlsrv_get_config(string $setting)
{
}

/**
 * Gets field data from the currently selected row
 *
 * @param resource $stmt A statement resource returned by <code>sqlsrv_query</code> or
 * <code>sqlsrv_execute</code>.
 * @param int $fieldIndex The index of the field to be retrieved. Field indices start at 0. Fields
 * must be accessed in order. i.e. If you access field index 1, then field
 * index 0 will not be available.
 * @param int $getAsType The PHP data type for the returned field data. If this parameter is not
 * set, the field data will be returned as its default PHP data type.
 * For information about default PHP data types, see
 * Default PHP Data Types
 * in the Microsoft SQLSRV documentation.
 *
 * @return mixed Returns data from the specified field on success. Returns <code>FALSE</code> otherwise.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-get-field.php
 */
function sqlsrv_get_field($stmt, int $fieldIndex, int $getAsType = null)
{
}

/**
 * Indicates whether the specified statement has rows
 *
 * @param resource $stmt A statement resource returned by <code>sqlsrv_query</code> or
 * <code>sqlsrv_execute</code>.
 *
 * @return bool Returns <code>TRUE</code> if the specified statement has rows and <code>FALSE</code> if the statement
 * does not have rows or if an error occurred.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-has-rows.php
 */
function sqlsrv_has_rows($stmt): bool
{
}

/**
 * Makes the next result of the specified statement active
 *
 * @param resource $stmt The statment on which the next result is being called.
 *
 * @return mixed Returns <code>TRUE</code> if the next result was successfully retrieved, <code>FALSE</code> if an error
 * occurred, and <code>NULL</code> if there are no more results to retrieve.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-next-result.php
 */
function sqlsrv_next_result($stmt)
{
}

/**
 * Retrieves the number of fields (columns) on a statement
 *
 * @param resource $stmt The statment for which the number of fields is returned.
 * <code>sqlsrv_num_fields</code> can be called on a statement before
 * or after statement execution.
 *
 * @return mixed Returns the number of fields on success. Returns <code>FALSE</code> otherwise.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-num-fields.php
 */
function sqlsrv_num_fields($stmt)
{
}

/**
 * Retrieves the number of rows in a result set
 *
 * @param resource $stmt The statement for which the row count is returned. The statment resource
 * must be created with a static or keyset cursor. For more information, see
 * <code>sqlsrv_query</code>, <code>sqlsrv_prepare</code>, or
 * Specifying a Cursor Type and Selecting Rows
 * in the Microsoft SQLSRV documentation.
 *
 * @return mixed Returns the number of rows retrieved on success and <code>FALSE</code> if an error occurred.
 * If a forward cursor (the default) or dynamic cursor is used, <code>FALSE</code> is returned.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-num-rows.php
 */
function sqlsrv_num_rows($stmt)
{
}

/**
 * @param mixed $encoding
 */
function SQLSRV_PHPTYPE_STREAM($encoding)
{
}

/**
 * @param mixed $encoding
 */
function SQLSRV_PHPTYPE_STRING($encoding)
{
}

/**
 * Prepares a query for execution
 *
 * @param resource $conn A connection resource returned by <code>sqlsrv_connect</code>.
 * @param string $sql The string that defines the query to be prepared and executed.
 * @param array $params An array specifying parameter information when executing a parameterized
 * query. Array elements can be any of the following:
 * <ul>
 * <li>A literal value</li>
 * <li>A PHP variable</li>
 * <li>An array with this structure:
 * array($value [, $direction [, $phpType [, $sqlType]]])</li>
 * </ul>
 * The following table describes the elements in the array structure above:
 * @param array $options An array specifing query property options. The supported keys are described
 * in the following table:
 *
 * @return mixed Returns a statement resource on success and <code>FALSE</code> if an error occurred.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-prepare.php
 */
function sqlsrv_prepare($conn, string $sql, array $params = null, array $options = null)
{
}

/**
 * Prepares and executes a query
 *
 * @param resource $conn A connection resource returned by <code>sqlsrv_connect</code>.
 * @param string $sql The string that defines the query to be prepared and executed.
 * @param array $params An array specifying parameter information when executing a parameterized query.
 * Array elements can be any of the following:
 * <ul>
 * <li>A literal value</li>
 * <li>A PHP variable</li>
 * <li>An array with this structure:
 * array($value [, $direction [, $phpType [, $sqlType]]])</li>
 * </ul>
 * The following table describes the elements in the array structure above:
 * @param array $options An array specifing query property options. The supported keys are described
 * in the following table:
 *
 * @return mixed Returns a statement resource on success and <code>FALSE</code> if an error occurred.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-query.php
 */
function sqlsrv_query($conn, string $sql, array $params = null, array $options = null)
{
}

/**
 * Rolls back a transaction that was begun with
 * <code>sqlsrv_begin_transaction</code>
 *
 * @param resource $conn The connection resource returned by a call to <code>sqlsrv_connect</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-rollback.php
 */
function sqlsrv_rollback($conn): bool
{
}

/**
 * Returns the number of rows modified by the last INSERT, UPDATE, or
 * DELETE query executed
 *
 * @param resource $stmt The executed statement resource for which the number of affected rows is returned.
 *
 * @return int Returns the number of rows affected by the last INSERT, UPDATE, or DELETE query.
 * If no rows were affected, 0 is returned. If the number of affected rows cannot
 * be determined, -1 is returned. If an error occurred, <code>FALSE</code> is returned.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-rows-affected.php
 */
function sqlsrv_rows_affected($stmt): int
{
}

/**
 * Sends data from parameter streams to the server
 *
 * @param resource $stmt A statement resource returned by <code>sqlsrv_query</code> or
 * <code>sqlsrv_execute</code>.
 *
 * @return bool Returns <code>TRUE</code> if there is more data to send and <code>FALSE</code> if there is not.
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-send-stream-data.php
 */
function sqlsrv_send_stream_data($stmt): bool
{
}

/**
 * Returns information about the server
 *
 * @param resource $conn The connection resource that connects the client and the server.
 *
 * @return array Returns an array as described in the following table:
 * <table>
 * <title>Returned Array</title>
 * <thead>
 * <tr>
 * <td>CurrentDatabase</td><td>The connected-to database.</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>SQLServerVersion</td><td>The SQL Server version.</td>
 * </tr>
 * <tr>
 * <td>SQLServerName</td><td>The name of the server.</td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-server-info.php
 */
function sqlsrv_server_info($conn): array
{
}

/**
 * @param mixed $size
 */
function SQLSRV_SQLTYPE_BINARY($size)
{
}

/**
 * @param mixed $size
 */
function SQLSRV_SQLTYPE_CHAR($size)
{
}

/**
 * @param mixed $precision
 * @param mixed $scale
 */
function SQLSRV_SQLTYPE_DECIMAL($precision, $scale)
{
}

/**
 * @param mixed $size
 */
function SQLSRV_SQLTYPE_NCHAR($size)
{
}

/**
 * @param mixed $precision
 * @param mixed $scale
 */
function SQLSRV_SQLTYPE_NUMERIC($precision, $scale)
{
}

/**
 * @param mixed $size
 */
function SQLSRV_SQLTYPE_NVARCHAR($size)
{
}

/**
 * @param mixed $size
 */
function SQLSRV_SQLTYPE_VARBINARY($size)
{
}

/**
 * @param mixed $size
 */
function SQLSRV_SQLTYPE_VARCHAR($size)
{
}
