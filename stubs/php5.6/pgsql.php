<?php
// Start of extension: pgsql
// - parsed on POSIX with PHP 5.6.35

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
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 *
 * @return int The number of rows affected by the query. If no tuple is
 * affected, it will return 0.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-affected-rows.php
 */
function pg_affected_rows($result)
{
}

/**
 * Cancel an asynchronous query
 *
 * @param resource $connection PostgreSQL database connection resource.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-cancel-query.php
 */
function pg_cancel_query($connection)
{
}

/**
 * Gets the client encoding
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 *
 * @return string The client encoding, or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-client-encoding.php
 */
function pg_client_encoding($connection = null)
{
}

/**
 * @param mixed $connection
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function pg_clientencoding($connection = null)
{
}

/**
 * Closes a PostgreSQL connection
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-close.php
 */
function pg_close($connection = null)
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
 * @param string $connection_string The <code>connection_string</code> can be empty to use all default parameters, or it
 * can contain one or more parameter settings separated by whitespace.
 * Each parameter setting is in the form <code>keyword = value</code>. Spaces around
 * the equal sign are optional. To write an empty value or a value
 * containing spaces, surround it with single quotes, e.g., <code>keyword =
 * 'a value'</code>. Single quotes and backslashes within the value must be
 * escaped with a backslash, i.e., \' and \\.
 * @param int $connect_type If <code>PGSQL_CONNECT_FORCE_NEW</code> is passed, then a new connection
 * is created, even if the <code>connection_string</code> is identical to
 * an existing connection.
 * @param mixed $host
 * @param mixed $port
 * @param mixed $options
 * @param mixed $tty
 * @param mixed $database
 *
 * @return resource PostgreSQL connection resource on success, <code>FALSE</code> on failure.
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
 * @param resource $connection PostgreSQL database connection resource.
 *
 * @return int Returns <code>PGSQL_POLLING_FAILED</code>,
 * <code>PGSQL_POLLING_READING</code>,
 * <code>PGSQL_POLLING_WRITING</code>,
 * <code>PGSQL_POLLING_OK</code>, or
 * <code>PGSQL_POLLING_ACTIVE</code>.
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-connect-poll.php
 */
function pg_connect_poll($connection = null)
{
}

/**
 * Get connection is busy or not
 *
 * @param resource $connection PostgreSQL database connection resource.
 *
 * @return bool Returns <code>TRUE</code> if the connection is busy, <code>FALSE</code> otherwise.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-connection-busy.php
 */
function pg_connection_busy($connection)
{
}

/**
 * Reset connection (reconnect)
 *
 * @param resource $connection PostgreSQL database connection resource.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-connection-reset.php
 */
function pg_connection_reset($connection)
{
}

/**
 * Get connection status
 *
 * @param resource $connection PostgreSQL database connection resource.
 *
 * @return int <code>PGSQL_CONNECTION_OK</code> or
 * <code>PGSQL_CONNECTION_BAD</code>.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-connection-status.php
 */
function pg_connection_status($connection)
{
}

/**
 * Reads input on the connection
 *
 * @param resource $connection PostgreSQL database connection resource.
 *
 * @return bool <code>TRUE</code> if no error occurred, or <code>FALSE</code> if there was an error. Note that
 * <code>TRUE</code> does not necessarily indicate that input was waiting to be read.
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-consume-input.php
 */
function pg_consume_input($connection)
{
}

/**
 * Convert associative array values into forms suitable for SQL statements
 *
 * @param resource $connection PostgreSQL database connection resource.
 * @param string $table_name Name of the table against which to convert types.
 * @param array $assoc_array Data to be converted.
 * @param int|null $options Any number of <code>PGSQL_CONV_IGNORE_DEFAULT</code>,
 * <code>PGSQL_CONV_FORCE_NULL</code> or
 * <code>PGSQL_CONV_IGNORE_NOT_NULL</code>, combined.
 *
 * @return array An <code>array</code> of converted values, or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-convert.php
 */
function pg_convert($connection, $table_name, array $assoc_array, $options = 0)
{
}

/**
 * Insert records into a table from an array
 *
 * @param resource $connection PostgreSQL database connection resource.
 * @param string $table_name Name of the table into which to copy the <code>rows</code>.
 * @param array $rows An <code>array</code> of data to be copied into <code>table_name</code>.
 * Each value in <code>rows</code> becomes a row in <code>table_name</code>.
 * Each value in <code>rows</code> should be a delimited string of the values
 * to insert into each field. Values should be linefeed terminated.
 * @param string $delimiter The token that separates values for each field in each element of
 * <code>rows</code>. Default is <code>TAB</code>.
 * @param string $null_as How SQL <code>NULL</code> values are represented in the
 * <code>rows</code>. Default is \N ("\\N").
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-copy-from.php
 */
function pg_copy_from($connection, $table_name, array $rows, $delimiter = null, $null_as = null)
{
}

/**
 * Copy a table to an array
 *
 * @param resource $connection PostgreSQL database connection resource.
 * @param string $table_name Name of the table from which to copy the data into <code>rows</code>.
 * @param string $delimiter The token that separates values for each field in each element of
 * <code>rows</code>. Default is <code>TAB</code>.
 * @param string $null_as How SQL <code>NULL</code> values are represented in the
 * <code>rows</code>. Default is \N ("\\N").
 *
 * @return array An <code>array</code> with one element for each line of <code>COPY</code> data.
 * It returns <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-copy-to.php
 */
function pg_copy_to($connection, $table_name, $delimiter = null, $null_as = null)
{
}

/**
 * Get the database name
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 *
 * @return string A <code>string</code> containing the name of the database the
 * <code>connection</code> is to, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-dbname.php
 */
function pg_dbname($connection = null)
{
}

/**
 * Deletes records
 *
 * @param resource $connection PostgreSQL database connection resource.
 * @param string $table_name Name of the table from which to delete rows.
 * @param array $assoc_array An <code>array</code> whose keys are field names in the table <code>table_name</code>,
 * and whose values are the values of those fields that are to be deleted.
 * @param int|null $options Any number of <code>PGSQL_CONV_FORCE_NULL</code>,
 * <code>PGSQL_DML_NO_CONV</code>,
 * <code>PGSQL_DML_ESCAPE</code>,
 * <code>PGSQL_DML_EXEC</code>,
 * <code>PGSQL_DML_ASYNC</code> or
 * <code>PGSQL_DML_STRING</code> combined. If <code>PGSQL_DML_STRING</code> is part of the
 * <code>options</code> then query string is returned. When <code>PGSQL_DML_NO_CONV</code>
 * or <code>PGSQL_DML_ESCAPE</code> is set, it does not call <code>pg_convert</code> internally.
 *
 * @return mixed Returns <code>TRUE</code> on success or <code>FALSE</code> on failure. Returns <code>string</code> if <code>PGSQL_DML_STRING</code> is passed
 * via <code>options</code>.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-delete.php
 */
function pg_delete($connection, $table_name, array $assoc_array, $options = PGSQL_DML_EXEC)
{
}

/**
 * Sync with PostgreSQL backend
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-end-copy.php
 */
function pg_end_copy($connection = null)
{
}

/**
 * @param mixed $connection
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_errormessage($connection = null)
{
}

/**
 * Escape a string for insertion into a bytea field
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 * @param string $data A <code>string</code> containing text or binary data to be inserted into a bytea
 * column.
 *
 * @return string A <code>string</code> containing the escaped data.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-escape-bytea.php
 */
function pg_escape_bytea($connection = null, $data = null)
{
}

/**
 * Escape a identifier for insertion into a text field
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 * @param string $data A <code>string</code> containing text to be escaped.
 *
 * @return string A <code>string</code> containing the escaped data.
 *
 * @since PHP 5 >= 5.4.4, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-escape-identifier.php
 */
function pg_escape_identifier($connection = null, $data = null)
{
}

/**
 * Escape a literal for insertion into a text field
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 * When there is no default connection, it raises <code>E_WARNING</code>
 * and returns <code>FALSE</code>.
 * @param string $data A <code>string</code> containing text to be escaped.
 *
 * @return string A <code>string</code> containing the escaped data.
 *
 * @since PHP 5 >= 5.4.4, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-escape-literal.php
 */
function pg_escape_literal($connection = null, $data = null)
{
}

/**
 * Escape a string for query
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 * @param string $data A <code>string</code> containing text to be escaped.
 *
 * @return string A <code>string</code> containing the escaped data.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-escape-string.php
 */
function pg_escape_string($connection = null, $data = null)
{
}

/**
 * @param mixed $connection
 * @param mixed $query
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_exec($connection = null, $query = null)
{
}

/**
 * Sends a request to execute a prepared statement with given parameters, and waits for the result
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 * @param string $stmtname The name of the prepared statement to execute. if
 * "" is specified, then the unnamed statement is executed. The name must have
 * been previously prepared using <code>pg_prepare</code>,
 * <code>pg_send_prepare</code> or a <code>PREPARE</code> SQL
 * command.
 * @param array $params An array of parameter values to substitute for the $1, $2, etc. placeholders
 * in the original prepared query string. The number of elements in the array
 * must match the number of placeholders.
 *
 * @return resource A query result resource on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-execute.php
 */
function pg_execute($connection = null, $stmtname = null, array $params = null)
{
}

/**
 * Fetches all rows from a result as an array
 *
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 *
 * @return array An <code>array</code> with all rows in the result. Each row is an array
 * of field values indexed by field name.
 * <code>FALSE</code> is returned if there are no rows in the result, or on any
 * other error.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-fetch-all.php
 */
function pg_fetch_all($result)
{
}

/**
 * Fetches all rows in a particular result column as an array
 *
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 * @param int|null $column Column number, zero-based, to be retrieved from the result resource. Defaults
 * to the first column if not specified.
 *
 * @return array An <code>array</code> with all values in the result column.
 * <code>FALSE</code> is returned if <code>column</code> is larger than the number
 * of columns in the result, or on any other error.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-fetch-all-columns.php
 */
function pg_fetch_all_columns($result, $column = 0)
{
}

/**
 * Fetch a row as an array
 *
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 * @param int $row Row number in result to fetch. Rows are numbered from 0 upwards. If
 * omitted or <code>NULL</code>, the next row is fetched.
 * @param int|null $result_type An optional parameter that controls
 * how the returned <code>array</code> is indexed.
 * <code>result_type</code> is a constant and can take the
 * following values: <code>PGSQL_ASSOC</code>,
 * <code>PGSQL_NUM</code> and <code>PGSQL_BOTH</code>.
 * Using <code>PGSQL_NUM</code>, <code>pg_fetch_array</code>
 * will return an array with numerical indices, using
 * <code>PGSQL_ASSOC</code> it will return only associative indices
 * while <code>PGSQL_BOTH</code>, the default, will return both
 * numerical and associative indices.
 *
 * @return array An <code>array</code> indexed numerically (beginning with 0) or
 * associatively (indexed by field name), or both.
 * Each value in the <code>array</code> is represented as a
 * <code>string</code>. Database <code>NULL</code>
 * values are returned as <code>NULL</code>.
 * <code>FALSE</code> is returned if <code>row</code> exceeds the number
 * of rows in the set, there are no more rows, or on any other error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-fetch-array.php
 */
function pg_fetch_array($result, $row = null, $result_type = PGSQL_BOTH)
{
}

/**
 * Fetch a row as an associative array
 *
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 * @param int $row Row number in result to fetch. Rows are numbered from 0 upwards. If
 * omitted or <code>NULL</code>, the next row is fetched.
 *
 * @return array An <code>array</code> indexed associatively (by field name).
 * Each value in the <code>array</code> is represented as a
 * <code>string</code>. Database <code>NULL</code>
 * values are returned as <code>NULL</code>.
 * <code>FALSE</code> is returned if <code>row</code> exceeds the number
 * of rows in the set, there are no more rows, or on any other error.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-fetch-assoc.php
 */
function pg_fetch_assoc($result, $row = null)
{
}

/**
 * Fetch a row as an object
 *
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 * @param int $row Row number in result to fetch. Rows are numbered from 0 upwards. If
 * omitted or <code>NULL</code>, the next row is fetched.
 * @param int|null $result_type Ignored and deprecated.
 * @param mixed $l
 * @param mixed $ctor_params
 *
 * @return mixed An <code>object</code> with one attribute for each field
 * name in the result. Database <code>NULL</code>
 * values are returned as <code>NULL</code>.
 * <code>FALSE</code> is returned if <code>row</code> exceeds the number
 * of rows in the set, there are no more rows, or on any other error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-fetch-object.php
 */
function pg_fetch_object($result, $row = null, $result_type = PGSQL_ASSOC, $l = null, $ctor_params = null)
{
}

/**
 * Returns values from a result resource
 *
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 * @param int $row Row number in result to fetch. Rows are numbered from 0 upwards. If omitted,
 * next row is fetched.
 * @param mixed $field A <code>string</code> representing the name of the field (column) to fetch, otherwise
 * an <code>int</code> representing the field number to fetch. Fields are
 * numbered from 0 upwards.
 *
 * @return string Boolean is returned as "t" or "f". All
 * other types, including arrays are returned as strings formatted
 * in the same default PostgreSQL manner that you would see in the
 * <command>psql</command> program. Database <code>NULL</code>
 * values are returned as <code>NULL</code>.
 * <code>FALSE</code> is returned if <code>row</code> exceeds the number
 * of rows in the set, or on any other error.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-fetch-result.php
 */
function pg_fetch_result($result, $row = null, $field = null)
{
}

/**
 * Get a row as an enumerated array
 *
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 * @param int $row Row number in result to fetch. Rows are numbered from 0 upwards. If
 * omitted or <code>NULL</code>, the next row is fetched.
 * @param mixed $result_type
 *
 * @return array An <code>array</code>, indexed from 0 upwards, with each value
 * represented as a <code>string</code>. Database <code>NULL</code>
 * values are returned as <code>NULL</code>.
 * <code>FALSE</code> is returned if <code>row</code> exceeds the number
 * of rows in the set, there are no more rows, or on any other error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-fetch-row.php
 */
function pg_fetch_row($result, $row = null, $result_type = null)
{
}

/**
 * Test if a field is SQL <code>NULL</code>
 *
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 * @param int $row Row number in result to fetch. Rows are numbered from 0 upwards. If omitted,
 * current row is fetched.
 * @param mixed $field Field number (starting from 0) as an <code>integer</code> or
 * the field name as a <code>string</code>.
 *
 * @return int Returns <code>1</code> if the field in the given row is SQL <code>NULL</code>, <code>0</code>
 * if not. <code>FALSE</code> is returned if the row is out of range, or upon any other error.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-field-is-null.php
 */
function pg_field_is_null($result, $row = null, $field = null)
{
}

/**
 * Returns the name of a field
 *
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 * @param int $field_number Field number, starting from 0.
 *
 * @return string The field name, or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-field-name.php
 */
function pg_field_name($result, $field_number)
{
}

/**
 * Returns the field number of the named field
 *
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 * @param string $field_name The name of the field.
 *
 * @return int The field number (numbered from 0), or -1 on error.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-field-num.php
 */
function pg_field_num($result, $field_name)
{
}

/**
 * Returns the printed length
 *
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 * @param int $row_number
 * @param mixed $field_name_or_number
 *
 * @return int The field printed length, or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-field-prtlen.php
 */
function pg_field_prtlen($result, $row_number = null, $field_name_or_number = null)
{
}

/**
 * Returns the internal storage size of the named field
 *
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 * @param int $field_number Field number, starting from 0.
 *
 * @return int The internal field storage size (in bytes). -1 indicates a variable
 * length field. <code>FALSE</code> is returned on error.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-field-size.php
 */
function pg_field_size($result, $field_number)
{
}

/**
 * Returns the name or oid of the tables field
 *
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 * @param int $field_number Field number, starting from 0.
 * @param bool|null $oid_only By default the tables name that field belongs to is returned but
 * if <code>oid_only</code> is set to <code>TRUE</code>, then the
 * oid will instead be returned.
 *
 * @return mixed On success either the fields table name or oid. Or, <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-field-table.php
 */
function pg_field_table($result, $field_number, $oid_only = false)
{
}

/**
 * Returns the type name for the corresponding field number
 *
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 * @param int $field_number Field number, starting from 0.
 *
 * @return string A <code>string</code> containing the base name of the field's type, or <code>FALSE</code>
 * on error.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-field-type.php
 */
function pg_field_type($result, $field_number)
{
}

/**
 * Returns the type ID (OID) for the corresponding field number
 *
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 * @param int $field_number Field number, starting from 0.
 *
 * @return int The OID of the field's base type. <code>FALSE</code> is returned on error.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-field-type-oid.php
 */
function pg_field_type_oid($result, $field_number)
{
}

/**
 * @param mixed $result
 * @param mixed $row
 * @param mixed $field_name_or_number
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
 * @param mixed $row
 * @param mixed $field_name_or_number
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
 * @param resource $connection PostgreSQL database connection resource.
 *
 * @return mixed Returns <code>TRUE</code> if the flush was successful or no data was waiting to be
 * flushed, <code>0</code> if part of the pending data was flushed but
 * more remains or <code>FALSE</code> on failure.
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
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-free-result.php
 */
function pg_free_result($result)
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
 * @param resource $connection PostgreSQL database connection resource.
 * @param int $result_type An optional parameter that controls
 * how the returned <code>array</code> is indexed.
 * <code>result_type</code> is a constant and can take the
 * following values: <code>PGSQL_ASSOC</code>,
 * <code>PGSQL_NUM</code> and <code>PGSQL_BOTH</code>.
 * Using <code>PGSQL_NUM</code>, <code>pg_get_notify</code>
 * will return an array with numerical indices, using
 * <code>PGSQL_ASSOC</code> it will return only associative indices
 * while <code>PGSQL_BOTH</code>, the default, will return both
 * numerical and associative indices.
 *
 * @return array An <code>array</code> containing the <code>NOTIFY</code> message name and backend PID.
 * As of PHP 5.4.0 and if supported by the server, the array also contains the server version and the payload.
 * Otherwise if no <code>NOTIFY</code> is waiting, then <code>FALSE</code> is returned.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-get-notify.php
 */
function pg_get_notify($connection = null, $result_type = null)
{
}

/**
 * Gets the backend's process ID
 *
 * @param resource $connection PostgreSQL database connection resource.
 *
 * @return int The backend database process ID.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-get-pid.php
 */
function pg_get_pid($connection = null)
{
}

/**
 * Get asynchronous query result
 *
 * @param resource $connection PostgreSQL database connection resource.
 *
 * @return resource The result <code>resource</code>, or <code>FALSE</code> if no more results are available.
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
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 *
 * @return string A <code>string</code> containing the name of the host the
 * <code>connection</code> is to, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-host.php
 */
function pg_host($connection = null)
{
}

/**
 * Insert array into table
 *
 * @param resource $connection PostgreSQL database connection resource.
 * @param string $table_name Name of the table into which to insert rows. The table <code>table_name</code> must at least
 * have as many columns as <code>assoc_array</code> has elements.
 * @param array $assoc_array An <code>array</code> whose keys are field names in the table <code>table_name</code>,
 * and whose values are the values of those fields that are to be inserted.
 * @param int|null $options Any number of <code>PGSQL_CONV_OPTS</code>,
 * <code>PGSQL_DML_NO_CONV</code>,
 * <code>PGSQL_DML_ESCAPE</code>,
 * <code>PGSQL_DML_EXEC</code>,
 * <code>PGSQL_DML_ASYNC</code> or
 * <code>PGSQL_DML_STRING</code> combined. If <code>PGSQL_DML_STRING</code> is part of the
 * <code>options</code> then query string is returned. When <code>PGSQL_DML_NO_CONV</code>
 * or <code>PGSQL_DML_ESCAPE</code> is set, it does not call <code>pg_convert</code> internally.
 *
 * @return mixed Returns the connection resource on success, or <code>FALSE</code> on failure. Returns <code>string</code> if <code>PGSQL_DML_STRING</code> is passed
 * via <code>options</code>.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-insert.php
 */
function pg_insert($connection, $table_name, array $assoc_array, $options = PGSQL_DML_EXEC)
{
}

/**
 * Get the last error message string of a connection
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 *
 * @return string A <code>string</code> containing the last error message on the
 * given <code>connection</code>, or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-last-error.php
 */
function pg_last_error($connection = null)
{
}

/**
 * Returns the last notice message from PostgreSQL server
 *
 * @param resource $connection PostgreSQL database connection resource.
 *
 * @return mixed A <code>string</code> containing the last notice on the
 * given <code>connection</code> with
 * <code>PGSQL_NOTICE_LAST</code>,
 * an <code>array</code> with <code>PGSQL_NOTICE_ALL</code>,
 * a <code>boolean</code> with <code>PGSQL_NOTICE_CLEAR</code>,
 * or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-last-notice.php
 */
function pg_last_notice($connection)
{
}

/**
 * Returns the last row's OID
 *
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 *
 * @return string A <code>string</code> containing the OID assigned to the most recently inserted
 * row in the specified <code>connection</code>, or <code>FALSE</code> on error or
 * no available OID.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-last-oid.php
 */
function pg_last_oid($result)
{
}

/**
 * Close a large object
 *
 * @param resource $large_object
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-close.php
 */
function pg_lo_close($large_object)
{
}

/**
 * Create a large object
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 * @param mixed $object_id If an <code>object_id</code> is given the function
 * will try to create a large object with this id, else a free
 * object id is assigned by the server. The parameter
 * was added in PHP 5.3 and relies on functionality that first
 * appeared in PostgreSQL 8.1.
 *
 * @return int A large object <code>OID</code> or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-create.php
 */
function pg_lo_create($connection = null, $object_id = null)
{
}

/**
 * Export a large object to file
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 * @param int $oid The <code>OID</code> of the large object in the database.
 * @param string $pathname The full path and file name of the file in which to write the
 * large object on the client filesystem.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-export.php
 */
function pg_lo_export($connection = null, $oid = null, $pathname = null)
{
}

/**
 * Import a large object from file
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 * @param string $pathname The full path and file name of the file on the client
 * filesystem from which to read the large object data.
 * @param mixed $object_id If an <code>object_id</code> is given the function
 * will try to create a large object with this id, else a free
 * object id is assigned by the server. The parameter
 * was added in PHP 5.3 and relies on functionality that first
 * appeared in PostgreSQL 8.1.
 *
 * @return int The <code>OID</code> of the newly created large object, or
 * <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-import.php
 */
function pg_lo_import($connection = null, $pathname = null, $object_id = null)
{
}

/**
 * Open a large object
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 * @param int $oid The <code>OID</code> of the large object in the database.
 * @param string $mode Can be either "r" for read-only, "w" for write only or "rw" for read and
 * write.
 *
 * @return resource A large object resource or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-open.php
 */
function pg_lo_open($connection = null, $oid = null, $mode = null)
{
}

/**
 * Read a large object
 *
 * @param resource $large_object PostgreSQL large object (LOB) resource, returned by <code>pg_lo_open</code>.
 * @param int|null $len An optional maximum number of bytes to return.
 *
 * @return string A <code>string</code> containing <code>len</code> bytes from the
 * large object, or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-read.php
 */
function pg_lo_read($large_object, $len = 8192)
{
}

/**
 * Reads an entire large object and send straight to browser
 *
 * @param resource $large_object PostgreSQL large object (LOB) resource, returned by <code>pg_lo_open</code>.
 *
 * @return int Number of bytes read or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-read-all.php
 */
function pg_lo_read_all($large_object)
{
}

/**
 * Seeks position within a large object
 *
 * @param resource $large_object PostgreSQL large object (LOB) resource, returned by <code>pg_lo_open</code>.
 * @param int $offset The number of bytes to seek.
 * @param int|null $whence One of the constants <code>PGSQL_SEEK_SET</code> (seek from object start),
 * <code>PGSQL_SEEK_CUR</code> (seek from current position)
 * or <code>PGSQL_SEEK_END</code> (seek from object end) .
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-seek.php
 */
function pg_lo_seek($large_object, $offset, $whence = PGSQL_SEEK_CUR)
{
}

/**
 * Returns current seek position a of large object
 *
 * @param resource $large_object PostgreSQL large object (LOB) resource, returned by <code>pg_lo_open</code>.
 *
 * @return int The current seek offset (in number of bytes) from the beginning of the large
 * object. If there is an error, the return value is negative.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-tell.php
 */
function pg_lo_tell($large_object)
{
}

/**
 * Truncates a large object
 *
 * @param resource $large_object PostgreSQL large object (LOB) resource, returned by <code>pg_lo_open</code>.
 * @param int $size The number of bytes to truncate.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-truncate.php
 */
function pg_lo_truncate($large_object, $size = null)
{
}

/**
 * Delete a large object
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 * @param int $oid The <code>OID</code> of the large object in the database.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-unlink.php
 */
function pg_lo_unlink($connection = null, $oid = null)
{
}

/**
 * Write to a large object
 *
 * @param resource $large_object PostgreSQL large object (LOB) resource, returned by <code>pg_lo_open</code>.
 * @param string $data The data to be written to the large object. If <code>len</code> is
 * specified and is less than the length of <code>data</code>, only
 * <code>len</code> bytes will be written.
 * @param int $len An optional maximum number of bytes to write. Must be greater than zero
 * and no greater than the length of <code>data</code>. Defaults to
 * the length of <code>data</code>.
 *
 * @return int The number of bytes written to the large object, or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-lo-write.php
 */
function pg_lo_write($large_object, $data, $len = null)
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
 * @param mixed $connection
 * @param mixed $large_object_id
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_locreate($connection = null, $large_object_id = null)
{
}

/**
 * @param mixed $connection
 * @param mixed $objoid
 * @param mixed $filename
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function pg_loexport($connection = null, $objoid = null, $filename = null)
{
}

/**
 * @param mixed $connection
 * @param mixed $filename
 * @param mixed $large_object_oid
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function pg_loimport($connection = null, $filename = null, $large_object_oid = null)
{
}

/**
 * @param mixed $connection
 * @param mixed $large_object_oid
 * @param mixed $mode
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_loopen($connection = null, $large_object_oid = null, $mode = null)
{
}

/**
 * @param mixed $large_object
 * @param mixed $len
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
 * @param mixed $connection
 * @param mixed $large_object_oid
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_lounlink($connection = null, $large_object_oid = null)
{
}

/**
 * @param mixed $large_object
 * @param mixed $buf
 * @param mixed $len
 *
 * @since PHP 4, PHP 5, PHP 7
 */
function pg_lowrite($large_object, $buf, $len = null)
{
}

/**
 * Get meta data for table
 *
 * @param resource $connection PostgreSQL database connection resource.
 * @param string $table_name The name of the table.
 *
 * @return array An <code>array</code> of the table definition, or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-meta-data.php
 */
function pg_meta_data($connection, $table_name)
{
}

/**
 * Returns the number of fields in a result
 *
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 *
 * @return int The number of fields (columns) in the result. On error, -1 is returned.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-num-fields.php
 */
function pg_num_fields($result)
{
}

/**
 * Returns the number of rows in a result
 *
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 *
 * @return int The number of rows in the result. On error, -1 is returned.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-num-rows.php
 */
function pg_num_rows($result)
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
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 *
 * @return string A <code>string</code> containing the <code>connection</code>
 * options, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-options.php
 */
function pg_options($connection = null)
{
}

/**
 * Looks up a current parameter setting of the server
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 * @param string $param_name Possible <code>param_name</code> values include <code>server_version</code>,
 * <code>server_encoding</code>, <code>client_encoding</code>,
 * <code>is_superuser</code>, <code>session_authorization</code>,
 * <code>DateStyle</code>, <code>TimeZone</code>, and
 * <code>integer_datetimes</code>.
 *
 * @return string A <code>string</code> containing the value of the parameter, <code>FALSE</code> on failure or invalid
 * <code>param_name</code>.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-parameter-status.php
 */
function pg_parameter_status($connection, $param_name = null)
{
}

/**
 * Open a persistent PostgreSQL connection
 *
 * @param string $connection_string The <code>connection_string</code> can be empty to use all default parameters, or it
 * can contain one or more parameter settings separated by whitespace.
 * Each parameter setting is in the form <code>keyword = value</code>. Spaces around
 * the equal sign are optional. To write an empty value or a value
 * containing spaces, surround it with single quotes, e.g., <code>keyword =
 * 'a value'</code>. Single quotes and backslashes within the value must be
 * escaped with a backslash, i.e., \' and \\.
 * @param int $connect_type If <code>PGSQL_CONNECT_FORCE_NEW</code> is passed, then a new connection
 * is created, even if the <code>connection_string</code> is identical to
 * an existing connection.
 * @param mixed $port
 * @param mixed $options
 * @param mixed $tty
 * @param mixed $database
 *
 * @return resource PostgreSQL connection resource on success, <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-pconnect.php
 */
function pg_pconnect($connection_string, $connect_type = null, $port = null, $options = null, $tty = null, $database = null)
{
}

/**
 * Ping database connection
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-ping.php
 */
function pg_ping($connection = null)
{
}

/**
 * Return the port number associated with the connection
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 *
 * @return int An <code>int</code> containing the port number of the database
 * server the <code>connection</code> is to,
 * or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-port.php
 */
function pg_port($connection = null)
{
}

/**
 * Submits a request to create a prepared statement with the
 * given parameters, and waits for completion
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 * @param string $stmtname The name to give the prepared statement. Must be unique per-connection. If
 * "" is specified, then an unnamed statement is created, overwriting any
 * previously defined unnamed statement.
 * @param string $query The parameterized SQL statement. Must contain only a single statement.
 * (multiple statements separated by semi-colons are not allowed.) If any parameters
 * are used, they are referred to as $1, $2, etc.
 *
 * @return resource A query result resource on success or <code>FALSE</code> on failure.
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
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 * @param string $data A line of text to be sent directly to the PostgreSQL backend. A <code>NULL</code>
 * terminator is added automatically.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-put-line.php
 */
function pg_put_line($connection = null, $data = null)
{
}

/**
 * Execute a query
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 * @param string $query The SQL statement or statements to be executed. When multiple statements are passed to the function,
 * they are automatically executed as one transaction, unless there are explicit BEGIN/COMMIT commands
 * included in the query string. However, using multiple transactions in one function call is not recommended.
 *
 * @return resource A query result resource on success or <code>FALSE</code> on failure.
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
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 * @param string $query The parameterized SQL statement. Must contain only a single statement.
 * (multiple statements separated by semi-colons are not allowed.) If any parameters
 * are used, they are referred to as $1, $2, etc.
 * @param array $params An array of parameter values to substitute for the $1, $2, etc. placeholders
 * in the original prepared query string. The number of elements in the array
 * must match the number of placeholders.
 *
 * @return resource A query result resource on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-query-params.php
 */
function pg_query_params($connection = null, $query = null, array $params = null)
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
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 *
 * @return string Returns a <code>string</code>. Returns empty string if there is no error. If there is an error associated with the
 * <code>result</code> parameter, returns <code>FALSE</code>.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-result-error.php
 */
function pg_result_error($result)
{
}

/**
 * Returns an individual field of an error report
 *
 * @param resource $result A PostgreSQL query result resource from a previously executed
 * statement.
 * @param int $fieldcode Possible <code>fieldcode</code> values are: <code>PGSQL_DIAG_SEVERITY</code>,
 * <code>PGSQL_DIAG_SQLSTATE</code>, <code>PGSQL_DIAG_MESSAGE_PRIMARY</code>,
 * <code>PGSQL_DIAG_MESSAGE_DETAIL</code>,
 * <code>PGSQL_DIAG_MESSAGE_HINT</code>, <code>PGSQL_DIAG_STATEMENT_POSITION</code>,
 * <code>PGSQL_DIAG_INTERNAL_POSITION</code> (PostgreSQL 8.0+ only),
 * <code>PGSQL_DIAG_INTERNAL_QUERY</code> (PostgreSQL 8.0+ only),
 * <code>PGSQL_DIAG_CONTEXT</code>, <code>PGSQL_DIAG_SOURCE_FILE</code>,
 * <code>PGSQL_DIAG_SOURCE_LINE</code> or
 * <code>PGSQL_DIAG_SOURCE_FUNCTION</code>.
 *
 * @return string A <code>string</code> containing the contents of the error field, <code>NULL</code> if the field does not exist or <code>FALSE</code>
 * on failure.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-result-error-field.php
 */
function pg_result_error_field($result, $fieldcode)
{
}

/**
 * Set internal row offset in result resource
 *
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 * @param int $offset Row to move the internal offset to in the <code>result</code> resource.
 * Rows are numbered starting from zero.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-result-seek.php
 */
function pg_result_seek($result, $offset)
{
}

/**
 * Get status of query result
 *
 * @param resource $result PostgreSQL query result resource, returned by <code>pg_query</code>,
 * <code>pg_query_params</code> or <code>pg_execute</code>
 * (among others).
 * @param int|null $type Either <code>PGSQL_STATUS_LONG</code> to return the numeric status
 * of the <code>result</code>, or <code>PGSQL_STATUS_STRING</code>
 * to return the command tag of the <code>result</code>.
 * If not specified, <code>PGSQL_STATUS_LONG</code> is the default.
 *
 * @return mixed Possible return values are <code>PGSQL_EMPTY_QUERY</code>,
 * <code>PGSQL_COMMAND_OK</code>, <code>PGSQL_TUPLES_OK</code>, <code>PGSQL_COPY_OUT</code>,
 * <code>PGSQL_COPY_IN</code>, <code>PGSQL_BAD_RESPONSE</code>, <code>PGSQL_NONFATAL_ERROR</code> and
 * <code>PGSQL_FATAL_ERROR</code> if <code>PGSQL_STATUS_LONG</code> is
 * specified. Otherwise, a <code>string</code> containing the PostgreSQL command tag is returned.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-result-status.php
 */
function pg_result_status($result, $type = PGSQL_STATUS_LONG)
{
}

/**
 * Select records
 *
 * @param resource $connection PostgreSQL database connection resource.
 * @param string $table_name Name of the table from which to select rows.
 * @param array $assoc_array An <code>array</code> whose keys are field names in the table <code>table_name</code>,
 * and whose values are the conditions that a row must meet to be retrieved.
 * @param int|null $options Any number of <code>PGSQL_CONV_FORCE_NULL</code>,
 * <code>PGSQL_DML_NO_CONV</code>,
 * <code>PGSQL_DML_ESCAPE</code>,
 * <code>PGSQL_DML_EXEC</code>,
 * <code>PGSQL_DML_ASYNC</code> or
 * <code>PGSQL_DML_STRING</code> combined. If <code>PGSQL_DML_STRING</code> is part of the
 * <code>options</code> then query string is returned. When <code>PGSQL_DML_NO_CONV</code>
 * or <code>PGSQL_DML_ESCAPE</code> is set, it does not call <code>pg_convert</code> internally.
 *
 * @return mixed Returns <code>TRUE</code> on success or <code>FALSE</code> on failure. Returns <code>string</code> if <code>PGSQL_DML_STRING</code> is passed
 * via <code>options</code>.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-select.php
 */
function pg_select($connection, $table_name, array $assoc_array, $options = PGSQL_DML_EXEC)
{
}

/**
 * Sends a request to execute a prepared statement with given parameters, without waiting for the result(s)
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 * @param string $stmtname The name of the prepared statement to execute. if
 * "" is specified, then the unnamed statement is executed. The name must have
 * been previously prepared using <code>pg_prepare</code>,
 * <code>pg_send_prepare</code> or a <code>PREPARE</code> SQL
 * command.
 * @param array $params An array of parameter values to substitute for the $1, $2, etc. placeholders
 * in the original prepared query string. The number of elements in the array
 * must match the number of placeholders.
 *
 * @return bool Returns <code>TRUE</code> on success, <code>FALSE</code> on failure. Use <code>pg_get_result</code>
 * to determine the query result.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-send-execute.php
 */
function pg_send_execute($connection, $stmtname, array $params)
{
}

/**
 * Sends a request to create a prepared statement with the given parameters, without waiting for completion
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 * @param string $stmtname The name to give the prepared statement. Must be unique per-connection. If
 * "" is specified, then an unnamed statement is created, overwriting any
 * previously defined unnamed statement.
 * @param string $query The parameterized SQL statement. Must contain only a single statement.
 * (multiple statements separated by semi-colons are not allowed.) If any parameters
 * are used, they are referred to as $1, $2, etc.
 *
 * @return bool Returns <code>TRUE</code> on success, <code>FALSE</code> on failure. Use <code>pg_get_result</code>
 * to determine the query result.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-send-prepare.php
 */
function pg_send_prepare($connection, $stmtname, $query)
{
}

/**
 * Sends asynchronous query
 *
 * @param resource $connection PostgreSQL database connection resource.
 * @param string $query The SQL statement or statements to be executed.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 * Use <code>pg_get_result</code> to determine the query result.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-send-query.php
 */
function pg_send_query($connection, $query)
{
}

/**
 * Submits a command and separate parameters to the server without waiting for the result(s)
 *
 * @param resource $connection PostgreSQL database connection resource.
 * @param string $query The parameterized SQL statement. Must contain only a single statement.
 * (multiple statements separated by semi-colons are not allowed.) If any parameters
 * are used, they are referred to as $1, $2, etc.
 * @param array $params An array of parameter values to substitute for the $1, $2, etc. placeholders
 * in the original prepared query string. The number of elements in the array
 * must match the number of placeholders.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 * Use <code>pg_get_result</code> to determine the query result.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-send-query-params.php
 */
function pg_send_query_params($connection, $query, array $params)
{
}

/**
 * Set the client encoding
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 * @param string $encoding The required client encoding. One of <code>SQL_ASCII</code>, <code>EUC_JP</code>,
 * <code>EUC_CN</code>, <code>EUC_KR</code>, <code>EUC_TW</code>,
 * <code>UNICODE</code>, <code>MULE_INTERNAL</code>, <code>LATINX</code> (X=1...9),
 * <code>KOI8</code>, <code>WIN</code>, <code>ALT</code>, <code>SJIS</code>,
 * <code>BIG5</code> or <code>WIN1250</code>.
 *
 * @return int Returns 0 on success or -1 on error.
 *
 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-set-client-encoding.php
 */
function pg_set_client_encoding($connection = null, $encoding = null)
{
}

/**
 * Determines the verbosity of messages returned by <code>pg_last_error</code>
 * and <code>pg_result_error</code>
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 * @param int $verbosity The required verbosity: <code>PGSQL_ERRORS_TERSE</code>,
 * <code>PGSQL_ERRORS_DEFAULT</code>
 * or <code>PGSQL_ERRORS_VERBOSE</code>.
 *
 * @return int The previous verbosity level: <code>PGSQL_ERRORS_TERSE</code>,
 * <code>PGSQL_ERRORS_DEFAULT</code>
 * or <code>PGSQL_ERRORS_VERBOSE</code>.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-set-error-verbosity.php
 */
function pg_set_error_verbosity($connection = null, $verbosity = null)
{
}

/**
 * @param mixed $connection
 * @param mixed $encoding
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function pg_setclientencoding($connection = null, $encoding = null)
{
}

/**
 * Get a read only handle to the socket underlying a PostgreSQL connection
 *
 * @param resource $connection PostgreSQL database connection resource.
 *
 * @return resource A socket resource on success or <code>FALSE</code> on failure.
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
 * @param string $pathname The full path and file name of the file in which to write the
 * trace log. Same as in <code>fopen</code>.
 * @param string|null $mode An optional file access mode, same as for <code>fopen</code>.
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-trace.php
 */
function pg_trace($pathname, $mode = "w", $connection = null)
{
}

/**
 * Returns the current in-transaction status of the server
 *
 * @param resource $connection PostgreSQL database connection resource.
 *
 * @return int The status can be <code>PGSQL_TRANSACTION_IDLE</code> (currently idle),
 * <code>PGSQL_TRANSACTION_ACTIVE</code> (a command is in progress),
 * <code>PGSQL_TRANSACTION_INTRANS</code> (idle, in a valid transaction block),
 * or <code>PGSQL_TRANSACTION_INERROR</code> (idle, in a failed transaction block).
 * <code>PGSQL_TRANSACTION_UNKNOWN</code> is reported if the connection is bad.
 * <code>PGSQL_TRANSACTION_ACTIVE</code> is reported only when a query
 * has been sent to the server and not yet completed.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-transaction-status.php
 */
function pg_transaction_status($connection)
{
}

/**
 * Return the TTY name associated with the connection
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 *
 * @return string A <code>string</code> containing the debug TTY of
 * the <code>connection</code>, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-tty.php
 */
function pg_tty($connection = null)
{
}

/**
 * Unescape binary for bytea type
 *
 * @param string $data A <code>string</code> containing PostgreSQL bytea data to be converted into
 * a PHP binary string.
 *
 * @return string A <code>string</code> containing the unescaped data.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-unescape-bytea.php
 */
function pg_unescape_bytea($data)
{
}

/**
 * Disable tracing of a PostgreSQL connection
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 *
 * @return bool Always returns <code>TRUE</code>.
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-untrace.php
 */
function pg_untrace($connection = null)
{
}

/**
 * Update table
 *
 * @param resource $connection PostgreSQL database connection resource.
 * @param string $table_name Name of the table into which to update rows.
 * @param array $data An <code>array</code> whose keys are field names in the table <code>table_name</code>,
 * and whose values are what matched rows are to be updated to.
 * @param array $condition An <code>array</code> whose keys are field names in the table <code>table_name</code>,
 * and whose values are the conditions that a row must meet to be updated.
 * @param int|null $options Any number of <code>PGSQL_CONV_FORCE_NULL</code>,
 * <code>PGSQL_DML_NO_CONV</code>,
 * <code>PGSQL_DML_ESCAPE</code>,
 * <code>PGSQL_DML_EXEC</code>,
 * <code>PGSQL_DML_ASYNC</code> or
 * <code>PGSQL_DML_STRING</code> combined. If <code>PGSQL_DML_STRING</code> is part of the
 * <code>options</code> then query string is returned. When <code>PGSQL_DML_NO_CONV</code>
 * or <code>PGSQL_DML_ESCAPE</code> is set, it does not call <code>pg_convert</code> internally.
 *
 * @return mixed Returns <code>TRUE</code> on success or <code>FALSE</code> on failure. Returns <code>string</code> if <code>PGSQL_DML_STRING</code> is passed
 * via <code>options</code>.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-update.php
 */
function pg_update($connection, $table_name, array $data, array $condition, $options = PGSQL_DML_EXEC)
{
}

/**
 * Returns an array with client, protocol and server version (when available)
 *
 * @param resource $connection PostgreSQL database connection resource. When
 * <code>connection</code> is not present, the default connection
 * is used. The default connection is the last connection made by
 * <code>pg_connect</code> or <code>pg_pconnect</code>.
 *
 * @return array Returns an array with <code>client</code>, <code>protocol</code>
 * and <code>server</code> keys and values (if available). Returns
 * <code>FALSE</code> on error or invalid connection.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pg-version.php
 */
function pg_version($connection = null)
{
}
