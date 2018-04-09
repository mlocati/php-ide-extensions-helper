<?php
// Start of extension: sqlsrv
// - parsed on POSIX with PHP 7.2.3 (extension version 5.2.0)

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
 * @param mixed $conn
 *
 * @return bool
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-begin-transaction.php
 */
function sqlsrv_begin_transaction($conn): bool
{
}

/**
 * Cancels a statement
 *
 * @param mixed $stmt
 *
 * @return bool
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-cancel.php
 */
function sqlsrv_cancel($stmt): bool
{
}

/**
 * Returns information about the client and specified connection
 *
 * @param mixed $conn
 *
 * @return array
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-client-info.php
 */
function sqlsrv_client_info($conn): array
{
}

/**
 * Closes an open connection and releases resourses associated with the connection
 *
 * @param mixed $conn
 *
 * @return bool
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-close.php
 */
function sqlsrv_close($conn): bool
{
}

/**
 * Commits a transaction that was begun with <code>sqlsrv_begin_transaction</code>
 *
 * @param mixed $conn
 *
 * @return bool
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-commit.php
 */
function sqlsrv_commit($conn): bool
{
}

/**
 * Changes the driver error handling and logging configurations
 *
 * @param mixed $setting
 * @param mixed $value
 *
 * @return bool
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-configure.php
 */
function sqlsrv_configure($setting, $value): bool
{
}

/**
 * Opens a connection to a Microsoft SQL Server database
 *
 * @param mixed $server_name
 * @param array|null $connection_info
 *
 * @return resource
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-connect.php
 */
function sqlsrv_connect($server_name, array $connection_info = null)
{
}

/**
 * Returns error and warning information about the last SQLSRV operation performed
 *
 * @param mixed|null $errors_and_or_warnings
 *
 * @return mixed
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-errors.php
 */
function sqlsrv_errors($errors_and_or_warnings = null)
{
}

/**
 * Executes a statement prepared with <code>sqlsrv_prepare</code>
 *
 * @param mixed $stmt
 *
 * @return bool
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-execute.php
 */
function sqlsrv_execute($stmt): bool
{
}

/**
 * Makes the next row in a result set available for reading
 *
 * @param mixed $stmt
 *
 * @return mixed
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-fetch.php
 */
function sqlsrv_fetch($stmt)
{
}

/**
 * Returns a row as an array
 *
 * @param mixed $stmt
 * @param mixed|null $fetch_type
 * @param mixed|null $row
 * @param mixed|null $offset
 *
 * @return array
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-fetch-array.php
 */
function sqlsrv_fetch_array($stmt, $fetch_type = null, $row = null, $offset = null): array
{
}

/**
 * Retrieves the next row of data in a result set as an object
 *
 * @param mixed $stmt
 * @param mixed|null $class_name
 * @param mixed|null $ctor_params
 * @param mixed|null $row
 * @param mixed|null $offset
 *
 * @return mixed
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-fetch-object.php
 */
function sqlsrv_fetch_object($stmt, $class_name = null, $ctor_params = null, $row = null, $offset = null)
{
}

/**
 * Retrieves metadata for the fields of a statement prepared by
 * <code>sqlsrv_prepare</code> or <code>sqlsrv_query</code>
 *
 * @param mixed $stmt
 *
 * @return mixed
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-field-metadata.php
 */
function sqlsrv_field_metadata($stmt)
{
}

/**
 * Frees all resources for the specified statement
 *
 * @param mixed $conn
 *
 * @return bool
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-free-stmt.php
 */
function sqlsrv_free_stmt($conn): bool
{
}

/**
 * Returns the value of the specified configuration setting
 *
 * @param mixed $setting
 *
 * @return mixed
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-get-config.php
 */
function sqlsrv_get_config($setting)
{
}

/**
 * Gets field data from the currently selected row
 *
 * @param mixed $stmt
 * @param mixed $field_index
 * @param mixed|null $get_as_type
 *
 * @return mixed
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-get-field.php
 */
function sqlsrv_get_field($stmt, $field_index, $get_as_type = null)
{
}

/**
 * Indicates whether the specified statement has rows
 *
 * @param mixed $stmt
 *
 * @return bool
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-has-rows.php
 */
function sqlsrv_has_rows($stmt): bool
{
}

/**
 * Makes the next result of the specified statement active
 *
 * @param mixed $stmt
 *
 * @return mixed
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-next-result.php
 */
function sqlsrv_next_result($stmt)
{
}

/**
 * Retrieves the number of fields (columns) on a statement
 *
 * @param mixed $stmt
 *
 * @return mixed
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-num-fields.php
 */
function sqlsrv_num_fields($stmt)
{
}

/**
 * Retrieves the number of rows in a result set
 *
 * @param mixed $stmt
 *
 * @return mixed
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
 * @param mixed $conn
 * @param mixed $tsql
 * @param mixed|null $params
 * @param mixed|null $options
 *
 * @return mixed
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-prepare.php
 */
function sqlsrv_prepare($conn, $tsql, $params = null, $options = null)
{
}

/**
 * Prepares and executes a query
 *
 * @param mixed $conn
 * @param mixed $tsql
 * @param mixed|null $params
 * @param mixed|null $options
 *
 * @return mixed
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-query.php
 */
function sqlsrv_query($conn, $tsql, $params = null, $options = null)
{
}

/**
 * Rolls back a transaction that was begun with
 * <code>sqlsrv_begin_transaction</code>
 *
 * @param mixed $conn
 *
 * @return bool
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
 * @param mixed $stmt
 *
 * @return int
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-rows-affected.php
 */
function sqlsrv_rows_affected($stmt): int
{
}

/**
 * Sends data from parameter streams to the server
 *
 * @param mixed $stmt
 *
 * @return bool
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-send-stream-data.php
 */
function sqlsrv_send_stream_data($stmt): bool
{
}

/**
 * Returns information about the server
 *
 * @param mixed $stmt
 *
 * @return array
 *
 * @link http://www.php.net/manual/en/function.sqlsrv-server-info.php
 */
function sqlsrv_server_info($stmt): array
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
