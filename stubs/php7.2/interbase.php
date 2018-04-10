<?php
// Start of extension: interbase
// - parsed on POSIX with PHP 7.2.4 (extension version 7.2.4)

/**
 * Options to <code>ibase_backup</code>
 *
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-bkp-convert
 *
 * @var int
 */
const IBASE_BKP_CONVERT = 64;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-bkp-ignore-checksums
 *
 * @var int
 */
const IBASE_BKP_IGNORE_CHECKSUMS = 1;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-bkp-ignore-limbo
 *
 * @var int
 */
const IBASE_BKP_IGNORE_LIMBO = 2;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-bkp-metadata-only
 *
 * @var int
 */
const IBASE_BKP_METADATA_ONLY = 4;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-bkp-no-garbage-collect
 *
 * @var int
 */
const IBASE_BKP_NO_GARBAGE_COLLECT = 8;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-bkp-non-transportable
 *
 * @var int
 */
const IBASE_BKP_NON_TRANSPORTABLE = 32;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-bkp-old-descriptions
 *
 * @var int
 */
const IBASE_BKP_OLD_DESCRIPTIONS = 16;

/**
 * @var int
 */
const IBASE_COMMITTED = 8;

/**
 * @var int
 */
const IBASE_CONCURRENCY = 4;

/**
 * @var int
 */
const IBASE_CONSISTENCY = 16;

/**
 * @var int
 */
const IBASE_CREATE = 0;

/**
 * @var int
 */
const IBASE_DEFAULT = 0;

/**
 * @var int
 */
const IBASE_FETCH_ARRAYS = 2;

/**
 * @var int
 */
const IBASE_FETCH_BLOBS = 1;

/**
 * @var int
 */
const IBASE_NOWAIT = 256;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-prp-access-mode
 *
 * @var int
 */
const IBASE_PRP_ACCESS_MODE = 13;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-prp-activate
 *
 * @var int
 */
const IBASE_PRP_ACTIVATE = 256;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-prp-am-readonly
 *
 * @var int
 */
const IBASE_PRP_AM_READONLY = 39;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-prp-am-readwrite
 *
 * @var int
 */
const IBASE_PRP_AM_READWRITE = 40;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-prp-db-online
 *
 * @var int
 */
const IBASE_PRP_DB_ONLINE = 512;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-prp-deny-new-attachments
 *
 * @var int
 */
const IBASE_PRP_DENY_NEW_ATTACHMENTS = 9;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-prp-deny-new-transactions
 *
 * @var int
 */
const IBASE_PRP_DENY_NEW_TRANSACTIONS = 10;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-prp-page-buffers
 *
 * @var int
 */
const IBASE_PRP_PAGE_BUFFERS = 5;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-prp-res
 *
 * @var int
 */
const IBASE_PRP_RES = 36;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-prp-res-use-full
 *
 * @var int
 */
const IBASE_PRP_RES_USE_FULL = 35;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-prp-reserve-space
 *
 * @var int
 */
const IBASE_PRP_RESERVE_SPACE = 11;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-prp-set-sql-dialect
 *
 * @var int
 */
const IBASE_PRP_SET_SQL_DIALECT = 14;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-prp-shutdown-db
 *
 * @var int
 */
const IBASE_PRP_SHUTDOWN_DB = 7;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-prp-sweep-interval
 *
 * @var int
 */
const IBASE_PRP_SWEEP_INTERVAL = 6;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-prp-wm-async
 *
 * @var int
 */
const IBASE_PRP_WM_ASYNC = 37;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-prp-wm-sync
 *
 * @var int
 */
const IBASE_PRP_WM_SYNC = 38;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-prp-write-mode
 *
 * @var int
 */
const IBASE_PRP_WRITE_MODE = 12;

/**
 * @var int
 */
const IBASE_READ = 2;

/**
 * @var int
 */
const IBASE_REC_NO_VERSION = 32;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php
 *
 * @var int
 */
const IBASE_REC_VERSION = 64;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-res-create
 *
 * @var int
 */
const IBASE_RES_CREATE = 8192;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-res-deactivate-idx
 *
 * @var int
 */
const IBASE_RES_DEACTIVATE_IDX = 256;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-res-no-shadow
 *
 * @var int
 */
const IBASE_RES_NO_SHADOW = 512;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-res-no-validity
 *
 * @var int
 */
const IBASE_RES_NO_VALIDITY = 1024;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-res-one-at-a-time
 *
 * @var int
 */
const IBASE_RES_ONE_AT_A_TIME = 2048;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-res-replace
 *
 * @var int
 */
const IBASE_RES_REPLACE = 4096;

/**
 * Options to <code>ibase_restore</code>
 *
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-res-use-all-space
 *
 * @var int
 */
const IBASE_RES_USE_ALL_SPACE = 16384;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-rpr-check-db
 *
 * @var int
 */
const IBASE_RPR_CHECK_DB = 16;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-rpr-full
 *
 * @var int
 */
const IBASE_RPR_FULL = 128;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-rpr-ignore-checksum
 *
 * @var int
 */
const IBASE_RPR_IGNORE_CHECKSUM = 32;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-rpr-kill-shadows
 *
 * @var int
 */
const IBASE_RPR_KILL_SHADOWS = 64;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-rpr-mend-db
 *
 * @var int
 */
const IBASE_RPR_MEND_DB = 4;

/**
 * Options to <code>ibase_maintain_db</code>
 *
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-rpr-sweep-db
 *
 * @var int
 */
const IBASE_RPR_SWEEP_DB = 2;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-rpr-validate-db
 *
 * @var int
 */
const IBASE_RPR_VALIDATE_DB = 1;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-sts-data-pages
 *
 * @var int
 */
const IBASE_STS_DATA_PAGES = 1;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-sts-db-log
 *
 * @var int
 */
const IBASE_STS_DB_LOG = 2;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-sts-hdr-pages
 *
 * @var int
 */
const IBASE_STS_HDR_PAGES = 4;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-sts-idx-pages
 *
 * @var int
 */
const IBASE_STS_IDX_PAGES = 8;

/**
 * Options to <code>ibase_db_info</code>
 *
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-sts-sys-relations
 *
 * @var int
 */
const IBASE_STS_SYS_RELATIONS = 16;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-svc-get-env
 *
 * @var int
 */
const IBASE_SVC_GET_ENV = 59;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-svc-get-env-lock
 *
 * @var int
 */
const IBASE_SVC_GET_ENV_LOCK = 60;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-svc-get-env-msg
 *
 * @var int
 */
const IBASE_SVC_GET_ENV_MSG = 61;

/**
 * Options to <code>ibase_server_info</code>
 *
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-svc-get-users
 *
 * @var int
 */
const IBASE_SVC_GET_USERS = 68;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-svc-implementation
 *
 * @var int
 */
const IBASE_SVC_IMPLEMENTATION = 56;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-svc-server-version
 *
 * @var int
 */
const IBASE_SVC_SERVER_VERSION = 55;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-svc-svr-db-info
 *
 * @var int
 */
const IBASE_SVC_SVR_DB_INFO = 50;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php#constant.ibase-svc-user-dbpath
 *
 * @var int
 */
const IBASE_SVC_USER_DBPATH = 58;

/**
 * @link http://www.php.net/manual/en/ibase.constants.php
 *
 * @var int
 */
const IBASE_TEXT = 1;

/**
 * @var int
 */
const IBASE_UNIXTIME = 4;

/**
 * @var int
 */
const IBASE_WAIT = 128;

/**
 * @var int
 */
const IBASE_WRITE = 1;

/**
 * @param mixed $service_handle
 * @param mixed $user_name
 * @param mixed $password
 * @param mixed $first_name
 * @param mixed $middle_name
 * @param mixed $last_name
 */
function fbird_add_user($service_handle, $user_name, $password, $first_name = null, $middle_name = null, $last_name = null)
{
}

/**
 * @param mixed $link_identifier
 */
function fbird_affected_rows($link_identifier = null)
{
}

/**
 * @param mixed $service_handle
 * @param mixed $source_db
 * @param mixed $dest_file
 * @param mixed $options
 * @param mixed $verbose
 */
function fbird_backup($service_handle, $source_db, $dest_file, $options = null, $verbose = null)
{
}

/**
 * @param mixed $blob_handle
 * @param mixed $data
 */
function fbird_blob_add($blob_handle, $data)
{
}

/**
 * @param mixed $blob_handle
 */
function fbird_blob_cancel($blob_handle)
{
}

/**
 * @param mixed $blob_handle
 */
function fbird_blob_close($blob_handle)
{
}

/**
 * @param mixed $link_identifier
 */
function fbird_blob_create($link_identifier = null)
{
}

/**
 * @param mixed $link_identifier
 * @param mixed $blob_id
 */
function fbird_blob_echo($link_identifier = null, $blob_id = null)
{
}

/**
 * @param mixed $blob_handle
 * @param mixed $len
 */
function fbird_blob_get($blob_handle, $len)
{
}

/**
 * @param mixed $link_identifier
 * @param mixed $file
 */
function fbird_blob_import($link_identifier = null, $file = null)
{
}

/**
 * @param mixed $link_identifier
 * @param mixed $blob_id
 */
function fbird_blob_info($link_identifier = null, $blob_id = null)
{
}

/**
 * @param mixed $link_identifier
 * @param mixed $blob_id
 */
function fbird_blob_open($link_identifier = null, $blob_id = null)
{
}

/**
 * @param mixed $link_identifier
 */
function fbird_close($link_identifier = null)
{
}

/**
 * @param mixed $link_identifier
 */
function fbird_commit($link_identifier)
{
}

/**
 * @param mixed $link_identifier
 */
function fbird_commit_ret($link_identifier)
{
}

/**
 * @param mixed $database
 * @param mixed $username
 * @param mixed $password
 * @param mixed $charset
 * @param mixed $buffers
 * @param mixed $dialect
 * @param mixed $role
 */
function fbird_connect($database = null, $username = null, $password = null, $charset = null, $buffers = null, $dialect = null, $role = null)
{
}

/**
 * @param mixed $service_handle
 * @param mixed $db
 * @param mixed $action
 * @param mixed $argument
 */
function fbird_db_info($service_handle, $db, $action, $argument = null)
{
}

/**
 * @param mixed $service_handle
 * @param mixed $user_name
 * @param mixed $password
 * @param mixed $first_name
 * @param mixed $middle_name
 * @param mixed $last_name
 */
function fbird_delete_user($service_handle, $user_name, $password, $first_name = null, $middle_name = null, $last_name = null)
{
}

/**
 * @param mixed $link_identifier
 */
function fbird_drop_db($link_identifier = null)
{
}

function fbird_errcode()
{
}

function fbird_errmsg()
{
}

/**
 * @param mixed $query
 * @param mixed $bind_arg
 * @param mixed $bind_arg
 */
function fbird_execute($query, $bind_arg = null, $bind_arg = null)
{
}

/**
 * @param mixed $result
 * @param mixed $fetch_flags
 */
function fbird_fetch_assoc($result, $fetch_flags = null)
{
}

/**
 * @param mixed $result
 * @param mixed $fetch_flags
 */
function fbird_fetch_object($result, $fetch_flags = null)
{
}

/**
 * @param mixed $result
 * @param mixed $fetch_flags
 */
function fbird_fetch_row($result, $fetch_flags = null)
{
}

/**
 * @param mixed $query_result
 * @param mixed $field_number
 */
function fbird_field_info($query_result, $field_number)
{
}

/**
 * @param mixed $event
 */
function fbird_free_event_handler($event)
{
}

/**
 * @param mixed $query
 */
function fbird_free_query($query)
{
}

/**
 * @param mixed $result
 */
function fbird_free_result($result)
{
}

/**
 * @param mixed $generator
 * @param mixed $increment
 * @param mixed $link_identifier
 */
function fbird_gen_id($generator, $increment = null, $link_identifier = null)
{
}

/**
 * @param mixed $service_handle
 * @param mixed $db
 * @param mixed $action
 * @param mixed $argument
 */
function fbird_maintain_db($service_handle, $db, $action, $argument = null)
{
}

/**
 * @param mixed $service_handle
 * @param mixed $user_name
 * @param mixed $password
 * @param mixed $first_name
 * @param mixed $middle_name
 * @param mixed $last_name
 */
function fbird_modify_user($service_handle, $user_name, $password, $first_name = null, $middle_name = null, $last_name = null)
{
}

/**
 * @param mixed $result
 * @param mixed $name
 */
function fbird_name_result($result, $name)
{
}

/**
 * @param mixed $query_result
 */
function fbird_num_fields($query_result)
{
}

/**
 * @param mixed $query
 */
function fbird_num_params($query)
{
}

/**
 * @param mixed $query
 * @param mixed $field_number
 */
function fbird_param_info($query, $field_number)
{
}

/**
 * @param mixed $database
 * @param mixed $username
 * @param mixed $password
 * @param mixed $charset
 * @param mixed $buffers
 * @param mixed $dialect
 * @param mixed $role
 */
function fbird_pconnect($database = null, $username = null, $password = null, $charset = null, $buffers = null, $dialect = null, $role = null)
{
}

/**
 * @param mixed $link_identifier
 * @param mixed $query
 */
function fbird_prepare($link_identifier = null, $query = null)
{
}

/**
 * @param mixed $link_identifier
 * @param mixed $link_identifier
 * @param mixed $query
 * @param mixed $bind_arg
 * @param mixed $bind_arg
 */
function fbird_query($link_identifier = null, $link_identifier = null, $query = null, $bind_arg = null, $bind_arg = null)
{
}

/**
 * @param mixed $service_handle
 * @param mixed $source_file
 * @param mixed $dest_db
 * @param mixed $options
 * @param mixed $verbose
 */
function fbird_restore($service_handle, $source_file, $dest_db, $options = null, $verbose = null)
{
}

/**
 * @param mixed $link_identifier
 */
function fbird_rollback($link_identifier)
{
}

/**
 * @param mixed $link_identifier
 */
function fbird_rollback_ret($link_identifier)
{
}

/**
 * @param mixed $service_handle
 * @param mixed $action
 */
function fbird_server_info($service_handle, $action)
{
}

/**
 * @param mixed $host
 * @param mixed $dba_username
 * @param mixed $dba_password
 */
function fbird_service_attach($host, $dba_username, $dba_password)
{
}

/**
 * @param mixed $service_handle
 */
function fbird_service_detach($service_handle)
{
}

/**
 * @param mixed $link_identifier
 * @param mixed $handler
 * @param mixed $event
 * @param mixed $event2
 */
function fbird_set_event_handler($link_identifier, $handler, $event = null, $event2 = null)
{
}

/**
 * @param mixed $trans_args
 * @param mixed $link_identifier
 * @param mixed $trans_args
 * @param mixed $link_identifier
 */
function fbird_trans($trans_args = null, $link_identifier = null, $trans_args = null, $link_identifier = null)
{
}

/**
 * @param mixed $link_identifier
 * @param mixed $event
 * @param mixed $event2
 */
function fbird_wait_event($link_identifier, $event = null, $event2 = null)
{
}

/**
 * Add a user to a security database
 *
 * @param resource $service_handle The handle on the database server service.
 * @param string $user_name The login name of the new database user.
 * @param string $password The password of the new user.
 * @param string $first_name The first name of the new database user.
 * @param string $middle_name The middle name of the new database user.
 * @param string $last_name The last name of the new database user.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-add-user.php
 */
function ibase_add_user($service_handle, string $user_name, string $password, string $first_name = null, string $middle_name = null, string $last_name = null): bool
{
}

/**
 * Return the number of rows that were affected by the previous query
 *
 * @param resource $link_identifier A transaction context. If <code>link_identifier</code> is a
 * connection resource, its default transaction is used.
 *
 * @return int Returns the number of rows as an integer.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-affected-rows.php
 */
function ibase_affected_rows($link_identifier = null): int
{
}

/**
 * Initiates a backup task in the service manager and returns immediately
 *
 * @param resource $service_handle
 * @param string $source_db
 * @param string $dest_file
 * @param int|null $options
 * @param bool|null $verbose
 *
 * @return mixed
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-backup.php
 */
function ibase_backup($service_handle, string $source_db, string $dest_file, int $options = 0, bool $verbose = false)
{
}

/**
 * Add data into a newly created blob
 *
 * @param resource $blob_handle A blob handle opened with <code>ibase_blob_create</code>.
 * @param string $data The data to be added.
 *
 * @return void No value is returned.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-blob-add.php
 */
function ibase_blob_add($blob_handle, string $data): void
{
}

/**
 * Cancel creating blob
 *
 * @param resource $blob_handle A BLOB handle opened with <code>ibase_blob_create</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-blob-cancel.php
 */
function ibase_blob_cancel($blob_handle): bool
{
}

/**
 * Close blob
 *
 * @param resource $blob_handle A BLOB handle opened with <code>ibase_blob_create</code> or
 * <code>ibase_blob_open</code>.
 *
 * @return mixed If the BLOB was being read, this function returns <code>TRUE</code> on success, if
 * the BLOB was being written to, this function returns a string containing
 * the BLOB id that has been assigned to it by the database. On failure, this
 * function returns <code>FALSE</code>.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-blob-close.php
 */
function ibase_blob_close($blob_handle)
{
}

/**
 * Create a new blob for adding data
 *
 * @param resource|null $link_identifier An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 *
 * @return resource Returns a BLOB handle for later use with
 * <code>ibase_blob_add</code> or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-blob-create.php
 */
function ibase_blob_create($link_identifier = null)
{
}

/**
 * Output blob contents to browser
 *
 * @param string $blob_id
 * @param mixed $blob_id
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-blob-echo.php
 */
function ibase_blob_echo(string $blob_id = null, $blob_id = null): bool
{
}

/**
 * Get len bytes data from open blob
 *
 * @param resource $blob_handle A BLOB handle opened with <code>ibase_blob_open</code>.
 * @param int $len Size of returned data.
 *
 * @return string Returns at most <code>len</code> bytes from the BLOB, or <code>FALSE</code>
 * on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-blob-get.php
 */
function ibase_blob_get($blob_handle, int $len): string
{
}

/**
 * Create blob, copy file in it, and close it
 *
 * @param resource $link_identifier An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 * @param resource $file_handle The file handle is a handle returned by <code>fopen</code>.
 *
 * @return string Returns the BLOB id on success, or <code>FALSE</code> on error.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-blob-import.php
 */
function ibase_blob_import($link_identifier = null, $file_handle = null): string
{
}

/**
 * Return blob length and other useful info
 *
 * @param resource $link_identifier An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 * @param string $blob_id A BLOB id.
 *
 * @return array Returns an array containing information about a BLOB. The information returned
 * consists of the length of the BLOB, the number of segments it contains, the size
 * of the largest segment, and whether it is a stream BLOB or a segmented BLOB.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-blob-info.php
 */
function ibase_blob_info($link_identifier = null, string $blob_id = null): array
{
}

/**
 * Open blob for retrieving data parts
 *
 * @param resource $link_identifier An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 * @param string $blob_id A BLOB id.
 *
 * @return resource Returns a BLOB handle for later use with
 * <code>ibase_blob_get</code> or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-blob-open.php
 */
function ibase_blob_open($link_identifier = null, string $blob_id = null)
{
}

/**
 * Close a connection to an InterBase database
 *
 * @param resource|null $connection_id An InterBase link identifier returned from
 * <code>ibase_connect</code>. If omitted, the last opened link
 * is assumed.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-close.php
 */
function ibase_close($connection_id = null): bool
{
}

/**
 * Commit a transaction
 *
 * @param resource|null $link_or_trans_identifier If called without an argument, this function commits the default
 * transaction of the default link. If the argument is a connection
 * identifier, the default transaction of the corresponding connection
 * will be committed. If the argument is a transaction identifier, the
 * corresponding transaction will be committed.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-commit.php
 */
function ibase_commit($link_or_trans_identifier = null): bool
{
}

/**
 * Commit a transaction without closing it
 *
 * @param resource|null $link_or_trans_identifier If called without an argument, this function commits the default
 * transaction of the default link. If the argument is a connection
 * identifier, the default transaction of the corresponding connection
 * will be committed. If the argument is a transaction identifier, the
 * corresponding transaction will be committed. The transaction context
 * will be retained, so statements executed from within this transaction
 * will not be invalidated.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-commit-ret.php
 */
function ibase_commit_ret($link_or_trans_identifier = null): bool
{
}

/**
 * Open a connection to a database
 *
 * @param string $database The <code>database</code> argument has to be a valid path to
 * database file on the server it resides on. If the server is not local,
 * it must be prefixed with either 'hostname:' (TCP/IP), 'hostname/port:'
 * (TCP/IP with interbase server on custom TCP port), '//hostname/'
 * (NetBEUI), depending on the connection
 * protocol used.
 * @param string $username The user name. Can be set with the
 * <code>ibase.default_user</code> <code>php.ini</code> directive.
 * @param string $password The password for <code>username</code>. Can be set with the
 * <code>ibase.default_password</code> <code>php.ini</code> directive.
 * @param string $charset <code>charset</code> is the default character set for a
 * database.
 * @param int $buffers <code>buffers</code> is the number of database buffers to
 * allocate for the server-side cache. If 0 or omitted, server chooses
 * its own default.
 * @param int $dialect <code>dialect</code> selects the default SQL dialect for any
 * statement executed within a connection, and it defaults to the highest
 * one supported by client libraries.
 * @param string $role Functional only with InterBase 5 and up.
 *
 * @return resource Returns an Firebird/InterBase link identifier on success, or <code>FALSE</code> on error.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-connect.php
 */
function ibase_connect(string $database = null, string $username = null, string $password = null, string $charset = null, int $buffers = null, int $dialect = null, string $role = null)
{
}

/**
 * Request statistics about a database
 *
 * @param resource $service_handle
 * @param string $db
 * @param int $action
 * @param int|null $argument
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-db-info.php
 */
function ibase_db_info($service_handle, string $db, int $action, int $argument = 0): string
{
}

/**
 * Delete a user from a security database
 *
 * @param resource $service_handle The handle on the database server service.
 * @param string $user_name The login name of the user you want to delete from the database.
 * @param mixed $password
 * @param mixed $first_name
 * @param mixed $middle_name
 * @param mixed $last_name
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-delete-user.php
 */
function ibase_delete_user($service_handle, string $user_name, $password, $first_name = null, $middle_name = null, $last_name = null): bool
{
}

/**
 * Drops a database
 *
 * @param resource|null $connection An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-drop-db.php
 */
function ibase_drop_db($connection = null): bool
{
}

/**
 * Return an error code
 *
 * @return int Returns the error code as an integer, or <code>FALSE</code> if no error occurred.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-errcode.php
 */
function ibase_errcode(): int
{
}

/**
 * Return error messages
 *
 * @return string Returns the error message as a string, or <code>FALSE</code> if no error occurred.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-errmsg.php
 */
function ibase_errmsg(): string
{
}

/**
 * Execute a previously prepared query
 *
 * @param resource $query An InterBase query prepared by <code>ibase_prepare</code>.
 * @param mixed $bind_arg
 * @param mixed $bind_arg
 *
 * @return resource If the query raises an error, returns <code>FALSE</code>. If it is successful and
 * there is a (possibly empty) result set (such as with a SELECT query),
 * returns a result identifier. If the query was successful and there were
 * no results, returns <code>TRUE</code>.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-execute.php
 */
function ibase_execute($query, $bind_arg = null, $bind_arg = null)
{
}

/**
 * Fetch a result row from a query as an associative array
 *
 * @param resource $result The result handle.
 * @param int|null $fetch_flag <code>fetch_flag</code> is a combination of the constants
 * <code>IBASE_TEXT</code> and <code>IBASE_UNIXTIME</code>
 * ORed together. Passing <code>IBASE_TEXT</code> will cause this
 * function to return BLOB contents instead of BLOB ids. Passing
 * <code>IBASE_UNIXTIME</code> will cause this function to return
 * date/time values as Unix timestamps instead of as formatted strings.
 *
 * @return array Returns an associative array that corresponds to the fetched row.
 * Subsequent calls will return the next row in the result set, or <code>FALSE</code> if
 * there are no more rows.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-fetch-assoc.php
 */
function ibase_fetch_assoc($result, int $fetch_flag = 0): array
{
}

/**
 * Get an object from a InterBase database
 *
 * @param resource $result_id An InterBase result identifier obtained either by
 * <code>ibase_query</code> or <code>ibase_execute</code>.
 * @param int|null $fetch_flag <code>fetch_flag</code> is a combination of the constants
 * <code>IBASE_TEXT</code> and <code>IBASE_UNIXTIME</code>
 * ORed together. Passing <code>IBASE_TEXT</code> will cause this
 * function to return BLOB contents instead of BLOB ids. Passing
 * <code>IBASE_UNIXTIME</code> will cause this function to return
 * date/time values as Unix timestamps instead of as formatted strings.
 *
 * @return object Returns an object with the next row information, or <code>FALSE</code> if there are
 * no more rows.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-fetch-object.php
 */
function ibase_fetch_object($result_id, int $fetch_flag = 0): object
{
}

/**
 * Fetch a row from an InterBase database
 *
 * @param resource $result_identifier An InterBase result identifier.
 * @param int|null $fetch_flag <code>fetch_flag</code> is a combination of the constants
 * <code>IBASE_TEXT</code> and <code>IBASE_UNIXTIME</code>
 * ORed together. Passing <code>IBASE_TEXT</code> will cause this
 * function to return BLOB contents instead of BLOB ids. Passing
 * <code>IBASE_UNIXTIME</code> will cause this function to return
 * date/time values as Unix timestamps instead of as formatted strings.
 *
 * @return array Returns an array that corresponds to the fetched row, or <code>FALSE</code> if there
 * are no more rows. Each result column is stored in an array offset,
 * starting at offset 0.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-fetch-row.php
 */
function ibase_fetch_row($result_identifier, int $fetch_flag = 0): array
{
}

/**
 * Get information about a field
 *
 * @param resource $result An InterBase result identifier.
 * @param int $field_number Field offset.
 *
 * @return array Returns an array with the following keys: <code>name</code>,
 * <code>alias</code>, <code>relation</code>,
 * <code>length</code> and <code>type</code>.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-field-info.php
 */
function ibase_field_info($result, int $field_number): array
{
}

/**
 * Cancels a registered event handler
 *
 * @param resource $event An event resource, created by
 * <code>ibase_set_event_handler</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-free-event-handler.php
 */
function ibase_free_event_handler($event): bool
{
}

/**
 * Free memory allocated by a prepared query
 *
 * @param resource $query A query prepared with <code>ibase_prepare</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-free-query.php
 */
function ibase_free_query($query): bool
{
}

/**
 * Free a result set
 *
 * @param resource $result_identifier A result set created by <code>ibase_query</code> or
 * <code>ibase_execute</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-free-result.php
 */
function ibase_free_result($result_identifier): bool
{
}

/**
 * Increments the named generator and returns its new value
 *
 * @param string $generator
 * @param int|null $increment
 * @param resource|null $link_identifier
 *
 * @return mixed Returns new generator value as integer, or as string if the value is too big.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-gen-id.php
 */
function ibase_gen_id(string $generator, int $increment = 1, $link_identifier = null)
{
}

/**
 * Execute a maintenance command on the database server
 *
 * @param resource $service_handle
 * @param string $db
 * @param int $action
 * @param int|null $argument
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-maintain-db.php
 */
function ibase_maintain_db($service_handle, string $db, int $action, int $argument = 0): bool
{
}

/**
 * Modify a user to a security database
 *
 * @param resource $service_handle The handle on the database server service.
 * @param string $user_name The login name of the database user to modify.
 * @param string $password The user's new password.
 * @param string $first_name The user's new first name.
 * @param string $middle_name The user's new middle name.
 * @param string $last_name The user's new last name.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-modify-user.php
 */
function ibase_modify_user($service_handle, string $user_name, string $password, string $first_name = null, string $middle_name = null, string $last_name = null): bool
{
}

/**
 * Assigns a name to a result set
 *
 * @param resource $result An InterBase result set.
 * @param string $name The name to be assigned.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-name-result.php
 */
function ibase_name_result($result, string $name): bool
{
}

/**
 * Get the number of fields in a result set
 *
 * @param resource $result_id An InterBase result identifier.
 *
 * @return int Returns the number of fields as an integer.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-num-fields.php
 */
function ibase_num_fields($result_id): int
{
}

/**
 * Return the number of parameters in a prepared query
 *
 * @param resource $query The prepared query handle.
 *
 * @return int Returns the number of parameters as an integer.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-num-params.php
 */
function ibase_num_params($query): int
{
}

/**
 * Return information about a parameter in a prepared query
 *
 * @param resource $query An InterBase prepared query handle.
 * @param int $param_number Parameter offset.
 *
 * @return array Returns an array with the following keys: <code>name</code>,
 * <code>alias</code>, <code>relation</code>,
 * <code>length</code> and <code>type</code>.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-param-info.php
 */
function ibase_param_info($query, int $param_number): array
{
}

/**
 * Open a persistent connection to an InterBase database
 *
 * @param string $database The <code>database</code> argument has to be a valid path to
 * database file on the server it resides on. If the server is not local,
 * it must be prefixed with either 'hostname:' (TCP/IP), '//hostname/'
 * (NetBEUI) or 'hostname@' (IPX/SPX), depending on the connection
 * protocol used.
 * @param string $username The user name. Can be set with the
 * <code>ibase.default_user</code> <code>php.ini</code> directive.
 * @param string $password The password for <code>username</code>. Can be set with the
 * <code>ibase.default_password</code> <code>php.ini</code> directive.
 * @param string $charset <code>charset</code> is the default character set for a
 * database.
 * @param int $buffers <code>buffers</code> is the number of database buffers to
 * allocate for the server-side cache. If 0 or omitted, server chooses
 * its own default.
 * @param int $dialect <code>dialect</code> selects the default SQL dialect for any
 * statement executed within a connection, and it defaults to the highest
 * one supported by client libraries. Functional only with InterBase 6
 * and up.
 * @param string $role Functional only with InterBase 5 and up.
 *
 * @return resource Returns an InterBase link identifier on success, or <code>FALSE</code> on error.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-pconnect.php
 */
function ibase_pconnect(string $database = null, string $username = null, string $password = null, string $charset = null, int $buffers = null, int $dialect = null, string $role = null)
{
}

/**
 * Prepare a query for later binding of parameter placeholders and execution
 *
 * @param string $query An InterBase query.
 * @param mixed $query
 *
 * @return resource Returns a prepared query handle, or <code>FALSE</code> on error.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-prepare.php
 */
function ibase_prepare(string $query = null, $query = null)
{
}

/**
 * Execute a query on an InterBase database
 *
 * @param resource $link_identifier An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 * @param string $query An InterBase query.
 * @param int $bind_args
 * @param mixed $bind_arg
 * @param mixed $bind_arg
 *
 * @return resource If the query raises an error, returns <code>FALSE</code>. If it is successful and
 * there is a (possibly empty) result set (such as with a SELECT query),
 * returns a result identifier. If the query was successful and there were
 * no results, returns <code>TRUE</code>.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-query.php
 */
function ibase_query($link_identifier = null, string $query = null, int $bind_args = null, $bind_arg = null, $bind_arg = null)
{
}

/**
 * Initiates a restore task in the service manager and returns immediately
 *
 * @param resource $service_handle
 * @param string $source_file
 * @param string $dest_db
 * @param int|null $options
 * @param bool|null $verbose
 *
 * @return mixed
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-restore.php
 */
function ibase_restore($service_handle, string $source_file, string $dest_db, int $options = 0, bool $verbose = false)
{
}

/**
 * Roll back a transaction
 *
 * @param resource|null $link_or_trans_identifier If called without an argument, this function rolls back the default
 * transaction of the default link. If the argument is a connection
 * identifier, the default transaction of the corresponding connection
 * will be rolled back. If the argument is a transaction identifier, the
 * corresponding transaction will be rolled back.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-rollback.php
 */
function ibase_rollback($link_or_trans_identifier = null): bool
{
}

/**
 * Roll back a transaction without closing it
 *
 * @param resource|null $link_or_trans_identifier If called without an argument, this function rolls back the default
 * transaction of the default link. If the argument is a connection
 * identifier, the default transaction of the corresponding connection
 * will be rolled back. If the argument is a transaction identifier, the
 * corresponding transaction will be rolled back. The transaction context
 * will be retained, so statements executed from within this transaction
 * will not be invalidated.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-rollback-ret.php
 */
function ibase_rollback_ret($link_or_trans_identifier = null): bool
{
}

/**
 * Request information about a database server
 *
 * @param resource $service_handle
 * @param int $action
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-server-info.php
 */
function ibase_server_info($service_handle, int $action): string
{
}

/**
 * Connect to the service manager
 *
 * @param string $host
 * @param string $dba_username
 * @param string $dba_password
 *
 * @return resource
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-service-attach.php
 */
function ibase_service_attach(string $host, string $dba_username, string $dba_password)
{
}

/**
 * Disconnect from the service manager
 *
 * @param resource $service_handle
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-service-detach.php
 */
function ibase_service_detach($service_handle): bool
{
}

/**
 * Register a callback function to be called when events are posted
 *
 * @param callable $event_handler The callback is called with the event name and the link resource as
 * arguments whenever one of the specified events is posted by the
 * database.
 * @param string $event_name1 An event name.
 * @param string $event_name2 At most 15 events allowed.
 * @param string $event2
 *
 * @return resource The return value is an event resource. This resource can be used to free
 * the event handler using <code>ibase_free_event_handler</code>.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-set-event-handler.php
 */
function ibase_set_event_handler(callable $event_handler, string $event_name1, string $event_name2 = null, string $event2 = null)
{
}

/**
 * Begin a transaction
 *
 * @param int $trans_args <code>trans_args</code> can be a combination of
 * <code>IBASE_READ</code>,
 * <code>IBASE_WRITE</code>,
 * <code>IBASE_COMMITTED</code>,
 * <code>IBASE_CONSISTENCY</code>,
 * <code>IBASE_CONCURRENCY</code>,
 * <code>IBASE_REC_VERSION</code>,
 * <code>IBASE_REC_NO_VERSION</code>,
 * <code>IBASE_WAIT</code> and
 * <code>IBASE_NOWAIT</code>.
 * @param resource $link_identifier An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 * @param mixed $trans_args
 * @param mixed $link_identifier
 *
 * @return resource Returns a transaction handle, or <code>FALSE</code> on error.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-trans.php
 */
function ibase_trans(int $trans_args = null, $link_identifier = null, $trans_args = null, $link_identifier = null)
{
}

/**
 * Wait for an event to be posted by the database
 *
 * @param string $event_name1 The event name.
 * @param string $event_name2
 * @param string $event2
 *
 * @return string Returns the name of the event that was posted.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-wait-event.php
 */
function ibase_wait_event(string $event_name1, string $event_name2 = null, string $event2 = null): string
{
}
