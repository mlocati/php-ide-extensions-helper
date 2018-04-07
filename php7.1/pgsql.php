<?php
// Start of extension: pgsql
// - parsed on POSIX with PHP 7.1.15 (extension version 7.1.15)

/**
 * Passed to <code>pg_fetch_array</code>. Return an associative array of field
 * names and values.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-assoc
 *
 * @var int
 */
const PGSQL_ASSOC = 1;

/**
 * Returned by <code>pg_result_status</code>. The server's response
 * was not understood.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-bad-response
 *
 * @var int
 */
const PGSQL_BAD_RESPONSE = 5;

/**
 * Passed to <code>pg_fetch_array</code>. Return an array of field values
 * that is both numerically indexed (by field number) and associated (by field name).
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-both
 *
 * @var int
 */
const PGSQL_BOTH = 3;

/**
 * Returned by <code>pg_result_status</code>. Successful completion of a
 * command returning no data.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-command-ok
 *
 * @var int
 */
const PGSQL_COMMAND_OK = 1;

/**
 * Passed to <code>pg_connect</code> to create an asynchronous
 * connection. Added in PHP 5.6.0.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-connect-async
 *
 * @var int
 */
const PGSQL_CONNECT_ASYNC = 4;

/**
 * Passed to <code>pg_connect</code> to force the creation of a new connection,
 * rather than re-using an existing identical connection.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-connect-force-new
 *
 * @var int
 */
const PGSQL_CONNECT_FORCE_NEW = 2;

/**
 * @var int
 */
const PGSQL_CONNECTION_AUTH_OK = 5;

/**
 * @var int
 */
const PGSQL_CONNECTION_AWAITING_RESPONSE = 4;

/**
 * Returned by <code>pg_connection_status</code> indicating that the database
 * connection is in an invalid state.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-connection-bad
 *
 * @var int
 */
const PGSQL_CONNECTION_BAD = 1;

/**
 * @var int
 */
const PGSQL_CONNECTION_MADE = 3;

/**
 * Returned by <code>pg_connection_status</code> indicating that the database
 * connection is in a valid state.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-connection-ok
 *
 * @var int
 */
const PGSQL_CONNECTION_OK = 0;

/**
 * @var int
 */
const PGSQL_CONNECTION_SETENV = 6;

/**
 * @var int
 */
const PGSQL_CONNECTION_STARTED = 2;

/**
 * Passed to <code>pg_convert</code>.
 * Use SQL <code>NULL</code> in place of an empty <code>string</code>.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-conv-force-null
 *
 * @var int
 */
const PGSQL_CONV_FORCE_NULL = 4;

/**
 * Passed to <code>pg_convert</code>.
 * Ignore default values in the table during conversion.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-conv-ignore-default
 *
 * @var int
 */
const PGSQL_CONV_IGNORE_DEFAULT = 2;

/**
 * Passed to <code>pg_convert</code>.
 * Ignore conversion of <code>NULL</code> into SQL <code>NOT NULL</code> columns.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-conv-ignore-not-null
 *
 * @var int
 */
const PGSQL_CONV_IGNORE_NOT_NULL = 8;

/**
 * Returned by <code>pg_result_status</code>. Copy In (to server) data
 * transfer started.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-copy-in
 *
 * @var int
 */
const PGSQL_COPY_IN = 4;

/**
 * Returned by <code>pg_result_status</code>. Copy Out (from server) data
 * transfer started.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-copy-out
 *
 * @var int
 */
const PGSQL_COPY_OUT = 3;

/**
 * Passed to <code>pg_result_error_field</code>.
 * An indication of the context in which the error occurred. Presently
 * this includes a call stack traceback of active procedural language
 * functions and internally-generated queries. The trace is one entry
 * per line, most recent first.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-diag-context
 *
 * @var int
 */
const PGSQL_DIAG_CONTEXT = 87;

/**
 * Passed to <code>pg_result_error_field</code>.
 * This is defined the same as the <code>PG_DIAG_STATEMENT_POSITION</code> field, but
 * it is used when the cursor position refers to an internally generated
 * command rather than the one submitted by the client. The
 * <code>PG_DIAG_INTERNAL_QUERY</code> field will always appear when this
 * field appears.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-diag-internal-position
 *
 * @var int
 */
const PGSQL_DIAG_INTERNAL_POSITION = 112;

/**
 * Passed to <code>pg_result_error_field</code>.
 * The text of a failed internally-generated command. This could be, for example, a
 * SQL query issued by a PL/pgSQL function.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-diag-internal-query
 *
 * @var int
 */
const PGSQL_DIAG_INTERNAL_QUERY = 113;

/**
 * Passed to <code>pg_result_error_field</code>.
 * Detail: an optional secondary error message carrying more detail about the problem. May run to multiple lines.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-diag-message-detail
 *
 * @var int
 */
const PGSQL_DIAG_MESSAGE_DETAIL = 68;

/**
 * Passed to <code>pg_result_error_field</code>.
 * Hint: an optional suggestion what to do about the problem. This is intended to differ from detail in that it
 * offers advice (potentially inappropriate) rather than hard facts. May run to multiple lines.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-diag-message-hint
 *
 * @var int
 */
const PGSQL_DIAG_MESSAGE_HINT = 72;

/**
 * Passed to <code>pg_result_error_field</code>.
 * The primary human-readable error message (typically one line). Always present.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-diag-message-primary
 *
 * @var int
 */
const PGSQL_DIAG_MESSAGE_PRIMARY = 77;

/**
 * Passed to <code>pg_result_error_field</code>.
 * The severity; the field contents are <code>ERROR</code>,
 * <code>FATAL</code>, or <code>PANIC</code> (in an error message), or
 * <code>WARNING</code>, <code>NOTICE</code>, <code>DEBUG</code>,
 * <code>INFO</code>, or <code>LOG</code> (in a notice message), or a localized
 * translation of one of these. Always present.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-diag-severity
 *
 * @var int
 */
const PGSQL_DIAG_SEVERITY = 83;

/**
 * Passed to <code>pg_result_error_field</code>.
 * The file name of the PostgreSQL source-code location where the error
 * was reported.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-diag-source-file
 *
 * @var int
 */
const PGSQL_DIAG_SOURCE_FILE = 70;

/**
 * Passed to <code>pg_result_error_field</code>.
 * The name of the PostgreSQL source-code function reporting the error.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-diag-source-function
 *
 * @var int
 */
const PGSQL_DIAG_SOURCE_FUNCTION = 82;

/**
 * Passed to <code>pg_result_error_field</code>.
 * The line number of the PostgreSQL source-code location where the
 * error was reported.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-diag-source-line
 *
 * @var int
 */
const PGSQL_DIAG_SOURCE_LINE = 76;

/**
 * Passed to <code>pg_result_error_field</code>.
 * The SQLSTATE code for the error. The SQLSTATE code identifies the type of error
 * that has occurred; it can be used by front-end applications to perform specific
 * operations (such as error handling) in response to a particular database error.
 * This field is not localizable, and is always present.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-diag-sqlstate
 *
 * @var int
 */
const PGSQL_DIAG_SQLSTATE = 67;

/**
 * Passed to <code>pg_result_error_field</code>.
 * A string containing a decimal integer indicating an error cursor position as an index into the original
 * statement string. The first character has index 1, and positions are measured in characters not bytes.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-diag-statement-position
 *
 * @var int
 */
const PGSQL_DIAG_STATEMENT_POSITION = 80;

/**
 * Passed to <code>pg_insert</code>, <code>pg_select</code>,
 * <code>pg_update</code> and <code>pg_delete</code>.
 * Execute asynchronous query by these functions.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-dml-async
 *
 * @var int
 */
const PGSQL_DML_ASYNC = 1024;

/**
 * Passed to <code>pg_insert</code>, <code>pg_select</code>,
 * <code>pg_update</code> and <code>pg_delete</code>.
 * Apply escape to all parameters instead of calling <code>pg_convert</code>
 * internally. This option omits meta data look up. Query could be as fast as
 * <code>pg_query</code> and <code>pg_send_query</code>.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-dml-escape
 *
 * @var int
 */
const PGSQL_DML_ESCAPE = 4096;

/**
 * Passed to <code>pg_insert</code>, <code>pg_select</code>,
 * <code>pg_update</code> and <code>pg_delete</code>.
 * Execute query by these functions.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-dml-exec
 *
 * @var int
 */
const PGSQL_DML_EXEC = 512;

/**
 * Passed to <code>pg_insert</code>, <code>pg_select</code>,
 * <code>pg_update</code> and <code>pg_delete</code>.
 * All parameters passed as is. Manual escape is required
 * if parameters contain user supplied data. Use <code>pg_escape_string</code>
 * for it.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-dml-no-conv
 *
 * @var int
 */
const PGSQL_DML_NO_CONV = 256;

/**
 * Passed to <code>pg_insert</code>, <code>pg_select</code>,
 * <code>pg_update</code> and <code>pg_delete</code>.
 * Return executed query string.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-dml-string
 *
 * @var int
 */
const PGSQL_DML_STRING = 2048;

/**
 * Returned by <code>pg_result_status</code>. The string sent to the server
 * was empty.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-empty-query
 *
 * @var int
 */
const PGSQL_EMPTY_QUERY = 0;

/**
 * Passed to <code>pg_set_error_verbosity</code>.
 * The default mode produces messages that include the above
 * plus any detail, hint, or context fields (these may span
 * multiple lines).
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-errors-default
 *
 * @var int
 */
const PGSQL_ERRORS_DEFAULT = 1;

/**
 * Passed to <code>pg_set_error_verbosity</code>.
 * Specified that returned messages include severity, primary text,
 * and position only; this will normally fit on a single line.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-errors-terse
 *
 * @var int
 */
const PGSQL_ERRORS_TERSE = 0;

/**
 * Passed to <code>pg_set_error_verbosity</code>.
 * The verbose mode includes all available fields.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-errors-verbose
 *
 * @var int
 */
const PGSQL_ERRORS_VERBOSE = 2;

/**
 * Returned by <code>pg_result_status</code>. A fatal error
 * occurred.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-fatal-error
 *
 * @var int
 */
const PGSQL_FATAL_ERROR = 7;

/**
 * Short libpq version that contains only numbers and dots.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-libpq-version
 *
 * @var string
 */
const PGSQL_LIBPQ_VERSION = '9.4.15';

/**
 * Long libpq version that includes compiler information.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-libpq-version-str
 *
 * @var string
 */
const PGSQL_LIBPQ_VERSION_STR = 'PostgreSQL 9.4.15 on x86_64-unknown-linux-gnu, compiled by gcc (Debian 4.9.2-10) 4.9.2, 64-bit';

/**
 * Returned by <code>pg_result_status</code>. A nonfatal error
 * (a notice or warning) occurred.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-nonfatal-error
 *
 * @var int
 */
const PGSQL_NONFATAL_ERROR = 6;

/**
 * Used by <code>pg_last_notice</code>.
 * Available since PHP 7.1.0.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-notice-all
 *
 * @var int
 */
const PGSQL_NOTICE_ALL = 2;

/**
 * Used by <code>pg_last_notice</code>.
 * Available since PHP 7.1.0.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-notice-clear
 *
 * @var int
 */
const PGSQL_NOTICE_CLEAR = 3;

/**
 * Used by <code>pg_last_notice</code>.
 * Available since PHP 7.1.0.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-notice-last
 *
 * @var int
 */
const PGSQL_NOTICE_LAST = 1;

/**
 * Passed to <code>pg_fetch_array</code>. Return a numerically indexed array of field
 * numbers and values.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-num
 *
 * @var int
 */
const PGSQL_NUM = 2;

/**
 * Returned by <code>pg_connect_poll</code> to indicate that the
 * connection is currently active.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-polling-active
 *
 * @var int
 */
const PGSQL_POLLING_ACTIVE = 4;

/**
 * Returned by <code>pg_connect_poll</code> to indicate that the
 * connection attempt failed.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-polling-failed
 *
 * @var int
 */
const PGSQL_POLLING_FAILED = 0;

/**
 * Returned by <code>pg_connect_poll</code> to indicate that the
 * connection is ready to be used.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-polling-ok
 *
 * @var int
 */
const PGSQL_POLLING_OK = 3;

/**
 * Returned by <code>pg_connect_poll</code> to indicate that the
 * connection is waiting for the PostgreSQL socket to be readable.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-polling-reading
 *
 * @var int
 */
const PGSQL_POLLING_READING = 1;

/**
 * Returned by <code>pg_connect_poll</code> to indicate that the
 * connection is waiting for the PostgreSQL socket to be writable.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-polling-writing
 *
 * @var int
 */
const PGSQL_POLLING_WRITING = 2;

/**
 * Passed to <code>pg_lo_seek</code>. Seek operation is to begin
 * from the current position.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-seek-cur
 *
 * @var int
 */
const PGSQL_SEEK_CUR = 1;

/**
 * Passed to <code>pg_lo_seek</code>. Seek operation is to begin
 * from the end of the object.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-seek-end
 *
 * @var int
 */
const PGSQL_SEEK_END = 2;

/**
 * Passed to <code>pg_lo_seek</code>. Seek operation is to begin
 * from the start of the object.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-seek-set
 *
 * @var int
 */
const PGSQL_SEEK_SET = 0;

/**
 * Passed to <code>pg_result_status</code>. Indicates that
 * numerical result code is desired.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-status-long
 *
 * @var int
 */
const PGSQL_STATUS_LONG = 1;

/**
 * Passed to <code>pg_result_status</code>. Indicates that
 * textual result command tag is desired.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-status-string
 *
 * @var int
 */
const PGSQL_STATUS_STRING = 2;

/**
 * Returned by <code>pg_transaction_status</code>. A command
 * is in progress on the connection. A query has been sent via the connection
 * and not yet completed.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-transaction-active
 *
 * @var int
 */
const PGSQL_TRANSACTION_ACTIVE = 1;

/**
 * Returned by <code>pg_transaction_status</code>. Connection is
 * currently idle, not in a transaction.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-transaction-idle
 *
 * @var int
 */
const PGSQL_TRANSACTION_IDLE = 0;

/**
 * Returned by <code>pg_transaction_status</code>. The connection
 * is idle, in a failed transaction block.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-transaction-inerror
 *
 * @var int
 */
const PGSQL_TRANSACTION_INERROR = 3;

/**
 * Returned by <code>pg_transaction_status</code>. The connection
 * is idle, in a transaction block.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-transaction-intrans
 *
 * @var int
 */
const PGSQL_TRANSACTION_INTRANS = 2;

/**
 * Returned by <code>pg_transaction_status</code>. The connection
 * is bad.
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-transaction-unknown
 *
 * @var int
 */
const PGSQL_TRANSACTION_UNKNOWN = 4;

/**
 * Returned by <code>pg_result_status</code>. Successful completion of a command
 * returning data (such as a <code>SELECT</code> or <code>SHOW</code>).
 *
 * @link http://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-tuples-ok
 *
 * @var int
 */
const PGSQL_TUPLES_OK = 2;

/**
 * Returns number of affected records (tuples)
 *
 * @param mixed $result
 *
 * @return int
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-affected-rows.php
 */
function pg_affected_rows($result): int
{
}

/**
 * Cancel an asynchronous query
 *
 * @param mixed $connection
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-cancel-query.php
 */
function pg_cancel_query($connection): bool
{
}

/**
 * Gets the client encoding
 *
 * @param mixed|null $connection
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-client-encoding.php
 */
function pg_client_encoding($connection = null): string
{
}

/**
 * @param mixed|null $connection
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function pg_clientencoding($connection = null)
{
}

/**
 * Closes a PostgreSQL connection
 *
 * @param mixed|null $connection
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-close.php
 */
function pg_close($connection = null): bool
{
}

/**
 * @param mixed $result
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_cmdtuples($result)
{
}

/**
 * Open a PostgreSQL connection
 *
 * @param mixed $connection_string
 * @param mixed|null $connect_type
 * @param mixed|null $host
 * @param mixed|null $port
 * @param mixed|null $options
 * @param mixed|null $tty
 * @param mixed|null $database
 *
 * @return resource
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-connect.php
 */
function pg_connect($connection_string, $connect_type = null, $host = null, $port = null, $options = null, $tty = null, $database = null)
{
}

/**
 * Poll the status of an in-progress asynchronous PostgreSQL connection
 * attempt
 *
 * @param mixed|null $connection
 *
 * @return int
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-connect-poll.php
 */
function pg_connect_poll($connection = null): int
{
}

/**
 * Get connection is busy or not
 *
 * @param mixed $connection
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-connection-busy.php
 */
function pg_connection_busy($connection): bool
{
}

/**
 * Reset connection (reconnect)
 *
 * @param mixed $connection
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-connection-reset.php
 */
function pg_connection_reset($connection): bool
{
}

/**
 * Get connection status
 *
 * @param mixed $connection
 *
 * @return int
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-connection-status.php
 */
function pg_connection_status($connection): int
{
}

/**
 * Reads input on the connection
 *
 * @param mixed $connection
 *
 * @return bool
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-consume-input.php
 */
function pg_consume_input($connection): bool
{
}

/**
 * Convert associative array values into forms suitable for SQL statements
 *
 * @param mixed $db
 * @param mixed $table
 * @param mixed $values
 * @param mixed|null $options
 *
 * @return array
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-convert.php
 */
function pg_convert($db, $table, $values, $options = null): array
{
}

/**
 * Insert records into a table from an array
 *
 * @param mixed $connection
 * @param mixed $table_name
 * @param mixed $rows
 * @param mixed|null $delimiter
 * @param mixed|null $null_as
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-copy-from.php
 */
function pg_copy_from($connection, $table_name, $rows, $delimiter = null, $null_as = null): bool
{
}

/**
 * Copy a table to an array
 *
 * @param mixed $connection
 * @param mixed $table_name
 * @param mixed|null $delimiter
 * @param mixed|null $null_as
 *
 * @return array
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-copy-to.php
 */
function pg_copy_to($connection, $table_name, $delimiter = null, $null_as = null): array
{
}

/**
 * Get the database name
 *
 * @param mixed|null $connection
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-dbname.php
 */
function pg_dbname($connection = null): string
{
}

/**
 * Deletes records
 *
 * @param mixed $db
 * @param mixed $table
 * @param mixed $ids
 * @param mixed|null $options
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-delete.php
 */
function pg_delete($db, $table, $ids, $options = null)
{
}

/**
 * Sync with PostgreSQL backend
 *
 * @param mixed|null $connection
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-end-copy.php
 */
function pg_end_copy($connection = null): bool
{
}

/**
 * @param mixed|null $connection
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_errormessage($connection = null)
{
}

/**
 * Escape a string for insertion into a bytea field
 *
 * @param mixed|null $connection
 * @param mixed|null $data
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-escape-bytea.php
 */
function pg_escape_bytea($connection = null, $data = null): string
{
}

/**
 * Escape a identifier for insertion into a text field
 *
 * @param mixed|null $connection
 * @param mixed|null $data
 *
 * @return string
 *
 * @since PHP 5 >= 5.4.4, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-escape-identifier.php
 */
function pg_escape_identifier($connection = null, $data = null): string
{
}

/**
 * Escape a literal for insertion into a text field
 *
 * @param mixed|null $connection
 * @param mixed|null $data
 *
 * @return string
 *
 * @since PHP 5 >= 5.4.4, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-escape-literal.php
 */
function pg_escape_literal($connection = null, $data = null): string
{
}

/**
 * Escape a string for query
 *
 * @param mixed|null $connection
 * @param mixed|null $data
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-escape-string.php
 */
function pg_escape_string($connection = null, $data = null): string
{
}

/**
 * @param mixed|null $connection
 * @param mixed|null $query
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_exec($connection = null, $query = null)
{
}

/**
 * Sends a request to execute a prepared statement with given parameters, and waits for the result
 *
 * @param mixed|null $connection
 * @param mixed|null $stmtname
 * @param mixed|null $params
 *
 * @return resource
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-execute.php
 */
function pg_execute($connection = null, $stmtname = null, $params = null)
{
}

/**
 * Fetches all rows from a result as an array
 *
 * @param mixed $result
 * @param mixed|null $result_type
 *
 * @return array
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-fetch-all.php
 */
function pg_fetch_all($result, $result_type = null): array
{
}

/**
 * Fetches all rows in a particular result column as an array
 *
 * @param mixed $result
 * @param mixed|null $column_number
 *
 * @return array
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-fetch-all-columns.php
 */
function pg_fetch_all_columns($result, $column_number = null): array
{
}

/**
 * Fetch a row as an array
 *
 * @param mixed $result
 * @param mixed|null $row
 * @param mixed|null $result_type
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-fetch-array.php
 */
function pg_fetch_array($result, $row = null, $result_type = null): array
{
}

/**
 * Fetch a row as an associative array
 *
 * @param mixed $result
 * @param mixed|null $row
 *
 * @return array
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-fetch-assoc.php
 */
function pg_fetch_assoc($result, $row = null): array
{
}

/**
 * Fetch a row as an object
 *
 * @param mixed $result
 * @param mixed|null $row
 * @param mixed|null $class_name
 * @param mixed|null $l
 * @param mixed|null $ctor_params
 *
 * @return object
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-fetch-object.php
 */
function pg_fetch_object($result, $row = null, $class_name = null, $l = null, $ctor_params = null)
{
}

/**
 * Returns values from a result resource
 *
 * @param mixed $result
 * @param mixed|null $row_number
 * @param mixed|null $field_name
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-fetch-result.php
 */
function pg_fetch_result($result, $row_number = null, $field_name = null): string
{
}

/**
 * Get a row as an enumerated array
 *
 * @param mixed $result
 * @param mixed|null $row
 * @param mixed|null $result_type
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-fetch-row.php
 */
function pg_fetch_row($result, $row = null, $result_type = null): array
{
}

/**
 * Test if a field is SQL <code>NULL</code>
 *
 * @param mixed $result
 * @param mixed|null $row
 * @param mixed|null $field_name_or_number
 *
 * @return int
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-field-is-null.php
 */
function pg_field_is_null($result, $row = null, $field_name_or_number = null): int
{
}

/**
 * Returns the name of a field
 *
 * @param mixed $result
 * @param mixed $field_number
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-field-name.php
 */
function pg_field_name($result, $field_number): string
{
}

/**
 * Returns the field number of the named field
 *
 * @param mixed $result
 * @param mixed $field_name
 *
 * @return int
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-field-num.php
 */
function pg_field_num($result, $field_name): int
{
}

/**
 * Returns the printed length
 *
 * @param mixed $result
 * @param mixed|null $row
 * @param mixed|null $field_name_or_number
 *
 * @return int
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-field-prtlen.php
 */
function pg_field_prtlen($result, $row = null, $field_name_or_number = null): int
{
}

/**
 * Returns the internal storage size of the named field
 *
 * @param mixed $result
 * @param mixed $field_number
 *
 * @return int
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-field-size.php
 */
function pg_field_size($result, $field_number): int
{
}

/**
 * Returns the name or oid of the tables field
 *
 * @param mixed $result
 * @param mixed $field_number
 * @param mixed|null $oid_only
 *
 * @return mixed
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-field-table.php
 */
function pg_field_table($result, $field_number, $oid_only = null)
{
}

/**
 * Returns the type name for the corresponding field number
 *
 * @param mixed $result
 * @param mixed $field_number
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-field-type.php
 */
function pg_field_type($result, $field_number): string
{
}

/**
 * Returns the type ID (OID) for the corresponding field number
 *
 * @param mixed $result
 * @param mixed $field_number
 *
 * @return int
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-field-type-oid.php
 */
function pg_field_type_oid($result, $field_number): int
{
}

/**
 * @param mixed $result
 * @param mixed|null $row
 * @param mixed|null $field_name_or_number
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_fieldisnull($result, $row = null, $field_name_or_number = null)
{
}

/**
 * @param mixed $result
 * @param mixed $field_number
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_fieldname($result, $field_number)
{
}

/**
 * @param mixed $result
 * @param mixed $field_name
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_fieldnum($result, $field_name)
{
}

/**
 * @param mixed $result
 * @param mixed|null $row
 * @param mixed|null $field_name_or_number
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_fieldprtlen($result, $row = null, $field_name_or_number = null)
{
}

/**
 * @param mixed $result
 * @param mixed $field_number
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_fieldsize($result, $field_number)
{
}

/**
 * @param mixed $result
 * @param mixed $field_number
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_fieldtype($result, $field_number)
{
}

/**
 * Flush outbound query data on the connection
 *
 * @param mixed $connection
 *
 * @return mixed
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-flush.php
 */
function pg_flush($connection)
{
}

/**
 * Free result memory
 *
 * @param mixed $result
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-free-result.php
 */
function pg_free_result($result): bool
{
}

/**
 * @param mixed $result
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_freeresult($result)
{
}

/**
 * Gets SQL NOTIFY message
 *
 * @param mixed|null $connection
 * @param mixed|null $e
 *
 * @return array
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-get-notify.php
 */
function pg_get_notify($connection = null, $e = null): array
{
}

/**
 * Gets the backend's process ID
 *
 * @param mixed|null $connection
 *
 * @return int
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-get-pid.php
 */
function pg_get_pid($connection = null): int
{
}

/**
 * Get asynchronous query result
 *
 * @param mixed $connection
 *
 * @return resource
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-get-result.php
 */
function pg_get_result($connection)
{
}

/**
 * @param mixed $result
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_getlastoid($result)
{
}

/**
 * Returns the host name associated with the connection
 *
 * @param mixed|null $connection
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-host.php
 */
function pg_host($connection = null): string
{
}

/**
 * Insert array into table
 *
 * @param mixed $db
 * @param mixed $table
 * @param mixed $values
 * @param mixed|null $options
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-insert.php
 */
function pg_insert($db, $table, $values, $options = null)
{
}

/**
 * Get the last error message string of a connection
 *
 * @param mixed|null $connection
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-last-error.php
 */
function pg_last_error($connection = null): string
{
}

/**
 * Returns the last notice message from PostgreSQL server
 *
 * @param mixed $connection
 * @param mixed|null $option
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-last-notice.php
 */
function pg_last_notice($connection, $option = null)
{
}

/**
 * Returns the last row's OID
 *
 * @param mixed $result
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-last-oid.php
 */
function pg_last_oid($result): string
{
}

/**
 * Close a large object
 *
 * @param mixed $large_object
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-close.php
 */
function pg_lo_close($large_object): bool
{
}

/**
 * Create a large object
 *
 * @param mixed|null $connection
 * @param mixed|null $large_object_id
 *
 * @return int
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-create.php
 */
function pg_lo_create($connection = null, $large_object_id = null): int
{
}

/**
 * Export a large object to file
 *
 * @param mixed|null $connection
 * @param mixed|null $objoid
 * @param mixed|null $filename
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-export.php
 */
function pg_lo_export($connection = null, $objoid = null, $filename = null): bool
{
}

/**
 * Import a large object from file
 *
 * @param mixed|null $connection
 * @param mixed|null $filename
 * @param mixed|null $large_object_oid
 *
 * @return int
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-import.php
 */
function pg_lo_import($connection = null, $filename = null, $large_object_oid = null): int
{
}

/**
 * Open a large object
 *
 * @param mixed|null $connection
 * @param mixed|null $large_object_oid
 * @param mixed|null $mode
 *
 * @return resource
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-open.php
 */
function pg_lo_open($connection = null, $large_object_oid = null, $mode = null)
{
}

/**
 * Read a large object
 *
 * @param mixed $large_object
 * @param mixed|null $len
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-read.php
 */
function pg_lo_read($large_object, $len = null): string
{
}

/**
 * Reads an entire large object and send straight to browser
 *
 * @param mixed $large_object
 *
 * @return int
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-read-all.php
 */
function pg_lo_read_all($large_object): int
{
}

/**
 * Seeks position within a large object
 *
 * @param mixed $large_object
 * @param mixed $offset
 * @param mixed|null $whence
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-seek.php
 */
function pg_lo_seek($large_object, $offset, $whence = null): bool
{
}

/**
 * Returns current seek position a of large object
 *
 * @param mixed $large_object
 *
 * @return int
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-tell.php
 */
function pg_lo_tell($large_object): int
{
}

/**
 * Truncates a large object
 *
 * @param mixed $large_object
 * @param mixed|null $size
 *
 * @return bool
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-truncate.php
 */
function pg_lo_truncate($large_object, $size = null): bool
{
}

/**
 * Delete a large object
 *
 * @param mixed|null $connection
 * @param mixed|null $large_object_oid
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-unlink.php
 */
function pg_lo_unlink($connection = null, $large_object_oid = null): bool
{
}

/**
 * Write to a large object
 *
 * @param mixed $large_object
 * @param mixed $buf
 * @param mixed|null $len
 *
 * @return int
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-write.php
 */
function pg_lo_write($large_object, $buf, $len = null): int
{
}

/**
 * @param mixed $large_object
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_loclose($large_object)
{
}

/**
 * @param mixed|null $connection
 * @param mixed|null $large_object_id
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_locreate($connection = null, $large_object_id = null)
{
}

/**
 * @param mixed|null $connection
 * @param mixed|null $objoid
 * @param mixed|null $filename
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function pg_loexport($connection = null, $objoid = null, $filename = null)
{
}

/**
 * @param mixed|null $connection
 * @param mixed|null $filename
 * @param mixed|null $large_object_oid
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function pg_loimport($connection = null, $filename = null, $large_object_oid = null)
{
}

/**
 * @param mixed|null $connection
 * @param mixed|null $large_object_oid
 * @param mixed|null $mode
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_loopen($connection = null, $large_object_oid = null, $mode = null)
{
}

/**
 * @param mixed $large_object
 * @param mixed|null $len
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_loread($large_object, $len = null)
{
}

/**
 * @param mixed $large_object
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_loreadall($large_object)
{
}

/**
 * @param mixed|null $connection
 * @param mixed|null $large_object_oid
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_lounlink($connection = null, $large_object_oid = null)
{
}

/**
 * @param mixed $large_object
 * @param mixed $buf
 * @param mixed|null $len
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_lowrite($large_object, $buf, $len = null)
{
}

/**
 * Get meta data for table
 *
 * @param mixed $db
 * @param mixed $table
 *
 * @return array
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-meta-data.php
 */
function pg_meta_data($db, $table): array
{
}

/**
 * Returns the number of fields in a result
 *
 * @param mixed $result
 *
 * @return int
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-num-fields.php
 */
function pg_num_fields($result): int
{
}

/**
 * Returns the number of rows in a result
 *
 * @param mixed $result
 *
 * @return int
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-num-rows.php
 */
function pg_num_rows($result): int
{
}

/**
 * @param mixed $result
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_numfields($result)
{
}

/**
 * @param mixed $result
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_numrows($result)
{
}

/**
 * Get the options associated with the connection
 *
 * @param mixed|null $connection
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-options.php
 */
function pg_options($connection = null): string
{
}

/**
 * Looks up a current parameter setting of the server
 *
 * @param mixed $connection
 * @param mixed|null $param_name
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-parameter-status.php
 */
function pg_parameter_status($connection, $param_name = null): string
{
}

/**
 * Open a persistent PostgreSQL connection
 *
 * @param mixed $connection_string
 * @param mixed|null $host
 * @param mixed|null $port
 * @param mixed|null $options
 * @param mixed|null $tty
 * @param mixed|null $database
 *
 * @return resource
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-pconnect.php
 */
function pg_pconnect($connection_string, $host = null, $port = null, $options = null, $tty = null, $database = null)
{
}

/**
 * Ping database connection
 *
 * @param mixed|null $connection
 *
 * @return bool
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-ping.php
 */
function pg_ping($connection = null): bool
{
}

/**
 * Return the port number associated with the connection
 *
 * @param mixed|null $connection
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-port.php
 */
function pg_port($connection = null): int
{
}

/**
 * Submits a request to create a prepared statement with the
 * given parameters, and waits for completion
 *
 * @param mixed|null $connection
 * @param mixed|null $stmtname
 * @param mixed|null $query
 *
 * @return resource
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-prepare.php
 */
function pg_prepare($connection = null, $stmtname = null, $query = null)
{
}

/**
 * Send a NULL-terminated string to PostgreSQL backend
 *
 * @param mixed|null $connection
 * @param mixed|null $query
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-put-line.php
 */
function pg_put_line($connection = null, $query = null): bool
{
}

/**
 * Execute a query
 *
 * @param mixed|null $connection
 * @param mixed|null $query
 *
 * @return resource
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-query.php
 */
function pg_query($connection = null, $query = null)
{
}

/**
 * Submits a command to the server and waits for the result, with the ability to pass parameters separately from the SQL command text
 *
 * @param mixed|null $connection
 * @param mixed|null $query
 * @param mixed|null $params
 *
 * @return resource
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-query-params.php
 */
function pg_query_params($connection = null, $query = null, $params = null)
{
}

/**
 * @param mixed $connection
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_result($connection)
{
}

/**
 * Get error message associated with result
 *
 * @param mixed $result
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-result-error.php
 */
function pg_result_error($result): string
{
}

/**
 * Returns an individual field of an error report
 *
 * @param mixed $result
 * @param mixed $fieldcode
 *
 * @return string
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-result-error-field.php
 */
function pg_result_error_field($result, $fieldcode): string
{
}

/**
 * Set internal row offset in result resource
 *
 * @param mixed $result
 * @param mixed $offset
 *
 * @return bool
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-result-seek.php
 */
function pg_result_seek($result, $offset): bool
{
}

/**
 * Get status of query result
 *
 * @param mixed $result
 * @param mixed|null $result_type
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-result-status.php
 */
function pg_result_status($result, $result_type = null)
{
}

/**
 * Select records
 *
 * @param mixed $db
 * @param mixed $table
 * @param mixed $ids
 * @param mixed|null $options
 * @param mixed|null $result_type
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-select.php
 */
function pg_select($db, $table, $ids, $options = null, $result_type = null)
{
}

/**
 * Sends a request to execute a prepared statement with given parameters, without waiting for the result(s)
 *
 * @param mixed $connection
 * @param mixed $stmtname
 * @param mixed $params
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-send-execute.php
 */
function pg_send_execute($connection, $stmtname, $params): bool
{
}

/**
 * Sends a request to create a prepared statement with the given parameters, without waiting for completion
 *
 * @param mixed $connection
 * @param mixed $stmtname
 * @param mixed $query
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-send-prepare.php
 */
function pg_send_prepare($connection, $stmtname, $query): bool
{
}

/**
 * Sends asynchronous query
 *
 * @param mixed $connection
 * @param mixed $query
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-send-query.php
 */
function pg_send_query($connection, $query): bool
{
}

/**
 * Submits a command and separate parameters to the server without waiting for the result(s)
 *
 * @param mixed $connection
 * @param mixed $query
 * @param mixed $params
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-send-query-params.php
 */
function pg_send_query_params($connection, $query, $params): bool
{
}

/**
 * Set the client encoding
 *
 * @param mixed|null $connection
 * @param mixed|null $encoding
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-set-client-encoding.php
 */
function pg_set_client_encoding($connection = null, $encoding = null): int
{
}

/**
 * Determines the verbosity of messages returned by <code>pg_last_error</code>
 * and <code>pg_result_error</code>
 *
 * @param mixed|null $connection
 * @param mixed|null $verbosity
 *
 * @return int
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-set-error-verbosity.php
 */
function pg_set_error_verbosity($connection = null, $verbosity = null): int
{
}

/**
 * @param mixed|null $connection
 * @param mixed|null $encoding
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function pg_setclientencoding($connection = null, $encoding = null)
{
}

/**
 * Get a read only handle to the socket underlying a PostgreSQL connection
 *
 * @param mixed $connection
 *
 * @return resource
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-socket.php
 */
function pg_socket($connection)
{
}

/**
 * Enable tracing a PostgreSQL connection
 *
 * @param mixed $filename
 * @param mixed|null $mode
 * @param mixed|null $connection
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-trace.php
 */
function pg_trace($filename, $mode = null, $connection = null): bool
{
}

/**
 * Returns the current in-transaction status of the server
 *
 * @param mixed $connection
 *
 * @return int
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-transaction-status.php
 */
function pg_transaction_status($connection): int
{
}

/**
 * Return the TTY name associated with the connection
 *
 * @param mixed|null $connection
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-tty.php
 */
function pg_tty($connection = null): string
{
}

/**
 * Unescape binary for bytea type
 *
 * @param mixed $data
 *
 * @return string
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-unescape-bytea.php
 */
function pg_unescape_bytea($data): string
{
}

/**
 * Disable tracing of a PostgreSQL connection
 *
 * @param mixed|null $connection
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-untrace.php
 */
function pg_untrace($connection = null): bool
{
}

/**
 * Update table
 *
 * @param mixed $db
 * @param mixed $table
 * @param mixed $fields
 * @param mixed $ids
 * @param mixed|null $options
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-update.php
 */
function pg_update($db, $table, $fields, $ids, $options = null)
{
}

/**
 * Returns an array with client, protocol and server version (when available)
 *
 * @param mixed|null $connection
 *
 * @return array
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-version.php
 */
function pg_version($connection = null): array
{
}
