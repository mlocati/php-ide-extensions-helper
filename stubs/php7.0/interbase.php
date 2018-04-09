<?php
// Start of extension: interbase
// - parsed on POSIX with PHP 7.0.28 (extension version 7.0.28)

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
 * @link http://www.php.net/manual/en/ibase.constants.php
 *
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
 * @param mixed|null $first_name
 * @param mixed|null $middle_name
 * @param mixed|null $last_name
 */
function fbird_add_user($service_handle, $user_name, $password, $first_name = null, $middle_name = null, $last_name = null)
{
}

/**
 * @param mixed|null $link_identifier
 */
function fbird_affected_rows($link_identifier = null)
{
}

/**
 * @param mixed $service_handle
 * @param mixed $source_db
 * @param mixed $dest_file
 * @param mixed|null $options
 * @param mixed|null $verbose
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
 * @param mixed|null $link_identifier
 */
function fbird_blob_create($link_identifier = null)
{
}

/**
 * @param mixed|null $link_identifier
 * @param mixed|null $blob_id
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
 * @param mixed|null $link_identifier
 * @param mixed|null $file
 */
function fbird_blob_import($link_identifier = null, $file = null)
{
}

/**
 * @param mixed|null $link_identifier
 * @param mixed|null $blob_id
 */
function fbird_blob_info($link_identifier = null, $blob_id = null)
{
}

/**
 * @param mixed|null $link_identifier
 * @param mixed|null $blob_id
 */
function fbird_blob_open($link_identifier = null, $blob_id = null)
{
}

/**
 * @param mixed|null $link_identifier
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
 * @param mixed|null $database
 * @param mixed|null $username
 * @param mixed|null $password
 * @param mixed|null $charset
 * @param mixed|null $buffers
 * @param mixed|null $dialect
 * @param mixed|null $role
 */
function fbird_connect($database = null, $username = null, $password = null, $charset = null, $buffers = null, $dialect = null, $role = null)
{
}

/**
 * @param mixed $service_handle
 * @param mixed $db
 * @param mixed $action
 * @param mixed|null $argument
 */
function fbird_db_info($service_handle, $db, $action, $argument = null)
{
}

/**
 * @param mixed $service_handle
 * @param mixed $user_name
 * @param mixed $password
 * @param mixed|null $first_name
 * @param mixed|null $middle_name
 * @param mixed|null $last_name
 */
function fbird_delete_user($service_handle, $user_name, $password, $first_name = null, $middle_name = null, $last_name = null)
{
}

/**
 * @param mixed|null $link_identifier
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
 * @param mixed|null $bind_arg
 * @param mixed|null $bind_arg
 */
function fbird_execute($query, $bind_arg = null, $bind_arg = null)
{
}

/**
 * @param mixed $result
 * @param mixed|null $fetch_flags
 */
function fbird_fetch_assoc($result, $fetch_flags = null)
{
}

/**
 * @param mixed $result
 * @param mixed|null $fetch_flags
 */
function fbird_fetch_object($result, $fetch_flags = null)
{
}

/**
 * @param mixed $result
 * @param mixed|null $fetch_flags
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
 * @param mixed|null $increment
 * @param mixed|null $link_identifier
 */
function fbird_gen_id($generator, $increment = null, $link_identifier = null)
{
}

/**
 * @param mixed $service_handle
 * @param mixed $db
 * @param mixed $action
 * @param mixed|null $argument
 */
function fbird_maintain_db($service_handle, $db, $action, $argument = null)
{
}

/**
 * @param mixed $service_handle
 * @param mixed $user_name
 * @param mixed $password
 * @param mixed|null $first_name
 * @param mixed|null $middle_name
 * @param mixed|null $last_name
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
 * @param mixed|null $database
 * @param mixed|null $username
 * @param mixed|null $password
 * @param mixed|null $charset
 * @param mixed|null $buffers
 * @param mixed|null $dialect
 * @param mixed|null $role
 */
function fbird_pconnect($database = null, $username = null, $password = null, $charset = null, $buffers = null, $dialect = null, $role = null)
{
}

/**
 * @param mixed|null $link_identifier
 * @param mixed|null $query
 */
function fbird_prepare($link_identifier = null, $query = null)
{
}

/**
 * @param mixed|null $link_identifier
 * @param mixed|null $link_identifier
 * @param mixed|null $query
 * @param mixed|null $bind_arg
 * @param mixed|null $bind_arg
 */
function fbird_query($link_identifier = null, $link_identifier = null, $query = null, $bind_arg = null, $bind_arg = null)
{
}

/**
 * @param mixed $service_handle
 * @param mixed $source_file
 * @param mixed $dest_db
 * @param mixed|null $options
 * @param mixed|null $verbose
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
 * @param mixed|null $event
 * @param mixed|null $event2
 */
function fbird_set_event_handler($link_identifier, $handler, $event = null, $event2 = null)
{
}

/**
 * @param mixed|null $trans_args
 * @param mixed|null $link_identifier
 * @param mixed|null $trans_args
 * @param mixed|null $link_identifier
 */
function fbird_trans($trans_args = null, $link_identifier = null, $trans_args = null, $link_identifier = null)
{
}

/**
 * @param mixed $link_identifier
 * @param mixed|null $event
 * @param mixed|null $event2
 */
function fbird_wait_event($link_identifier, $event = null, $event2 = null)
{
}

/**
 * Add a user to a security database
 *
 * @param mixed $service_handle
 * @param mixed $user_name
 * @param mixed $password
 * @param mixed|null $first_name
 * @param mixed|null $middle_name
 * @param mixed|null $last_name
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-add-user.php
 */
function ibase_add_user($service_handle, $user_name, $password, $first_name = null, $middle_name = null, $last_name = null): bool
{
}

/**
 * Return the number of rows that were affected by the previous query
 *
 * @param mixed|null $link_identifier
 *
 * @return int
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
 * @param mixed $service_handle
 * @param mixed $source_db
 * @param mixed $dest_file
 * @param mixed|null $options
 * @param mixed|null $verbose
 *
 * @return mixed
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-backup.php
 */
function ibase_backup($service_handle, $source_db, $dest_file, $options = null, $verbose = null)
{
}

/**
 * Add data into a newly created blob
 *
 * @param mixed $blob_handle
 * @param mixed $data
 *
 * @return void
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-blob-add.php
 */
function ibase_blob_add($blob_handle, $data)
{
}

/**
 * Cancel creating blob
 *
 * @param mixed $blob_handle
 *
 * @return bool
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
 * @param mixed $blob_handle
 *
 * @return mixed
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
 * @param mixed|null $link_identifier
 *
 * @return resource
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
 * @param mixed|null $link_identifier
 * @param mixed|null $blob_id
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-blob-echo.php
 */
function ibase_blob_echo($link_identifier = null, $blob_id = null): bool
{
}

/**
 * Get len bytes data from open blob
 *
 * @param mixed $blob_handle
 * @param mixed $len
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-blob-get.php
 */
function ibase_blob_get($blob_handle, $len): string
{
}

/**
 * Create blob, copy file in it, and close it
 *
 * @param mixed|null $link_identifier
 * @param mixed|null $file
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-blob-import.php
 */
function ibase_blob_import($link_identifier = null, $file = null): string
{
}

/**
 * Return blob length and other useful info
 *
 * @param mixed|null $link_identifier
 * @param mixed|null $blob_id
 *
 * @return array
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-blob-info.php
 */
function ibase_blob_info($link_identifier = null, $blob_id = null): array
{
}

/**
 * Open blob for retrieving data parts
 *
 * @param mixed|null $link_identifier
 * @param mixed|null $blob_id
 *
 * @return resource
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-blob-open.php
 */
function ibase_blob_open($link_identifier = null, $blob_id = null)
{
}

/**
 * Close a connection to an InterBase database
 *
 * @param mixed|null $link_identifier
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-close.php
 */
function ibase_close($link_identifier = null): bool
{
}

/**
 * Commit a transaction
 *
 * @param mixed $link_identifier
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-commit.php
 */
function ibase_commit($link_identifier): bool
{
}

/**
 * Commit a transaction without closing it
 *
 * @param mixed $link_identifier
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-commit-ret.php
 */
function ibase_commit_ret($link_identifier): bool
{
}

/**
 * Open a connection to a database
 *
 * @param mixed|null $database
 * @param mixed|null $username
 * @param mixed|null $password
 * @param mixed|null $charset
 * @param mixed|null $buffers
 * @param mixed|null $dialect
 * @param mixed|null $role
 *
 * @return resource
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-connect.php
 */
function ibase_connect($database = null, $username = null, $password = null, $charset = null, $buffers = null, $dialect = null, $role = null)
{
}

/**
 * Request statistics about a database
 *
 * @param mixed $service_handle
 * @param mixed $db
 * @param mixed $action
 * @param mixed|null $argument
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-db-info.php
 */
function ibase_db_info($service_handle, $db, $action, $argument = null): string
{
}

/**
 * Delete a user from a security database
 *
 * @param mixed $service_handle
 * @param mixed $user_name
 * @param mixed $password
 * @param mixed|null $first_name
 * @param mixed|null $middle_name
 * @param mixed|null $last_name
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-delete-user.php
 */
function ibase_delete_user($service_handle, $user_name, $password, $first_name = null, $middle_name = null, $last_name = null): bool
{
}

/**
 * Drops a database
 *
 * @param mixed|null $link_identifier
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-drop-db.php
 */
function ibase_drop_db($link_identifier = null): bool
{
}

/**
 * Return an error code
 *
 * @return int
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
 * @return string
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
 * @param mixed $query
 * @param mixed|null $bind_arg
 * @param mixed|null $bind_arg
 *
 * @return resource
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
 * @param mixed $result
 * @param mixed|null $fetch_flags
 *
 * @return array
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-fetch-assoc.php
 */
function ibase_fetch_assoc($result, $fetch_flags = null): array
{
}

/**
 * Get an object from a InterBase database
 *
 * @param mixed $result
 * @param mixed|null $fetch_flags
 *
 * @return mixed
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-fetch-object.php
 */
function ibase_fetch_object($result, $fetch_flags = null)
{
}

/**
 * Fetch a row from an InterBase database
 *
 * @param mixed $result
 * @param mixed|null $fetch_flags
 *
 * @return array
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-fetch-row.php
 */
function ibase_fetch_row($result, $fetch_flags = null): array
{
}

/**
 * Get information about a field
 *
 * @param mixed $query_result
 * @param mixed $field_number
 *
 * @return array
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-field-info.php
 */
function ibase_field_info($query_result, $field_number): array
{
}

/**
 * Cancels a registered event handler
 *
 * @param mixed $event
 *
 * @return bool
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
 * @param mixed $query
 *
 * @return bool
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
 * @param mixed $result
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-free-result.php
 */
function ibase_free_result($result): bool
{
}

/**
 * Increments the named generator and returns its new value
 *
 * @param mixed $generator
 * @param mixed|null $increment
 * @param mixed|null $link_identifier
 *
 * @return mixed
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-gen-id.php
 */
function ibase_gen_id($generator, $increment = null, $link_identifier = null)
{
}

/**
 * Execute a maintenance command on the database server
 *
 * @param mixed $service_handle
 * @param mixed $db
 * @param mixed $action
 * @param mixed|null $argument
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-maintain-db.php
 */
function ibase_maintain_db($service_handle, $db, $action, $argument = null): bool
{
}

/**
 * Modify a user to a security database
 *
 * @param mixed $service_handle
 * @param mixed $user_name
 * @param mixed $password
 * @param mixed|null $first_name
 * @param mixed|null $middle_name
 * @param mixed|null $last_name
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-modify-user.php
 */
function ibase_modify_user($service_handle, $user_name, $password, $first_name = null, $middle_name = null, $last_name = null): bool
{
}

/**
 * Assigns a name to a result set
 *
 * @param mixed $result
 * @param mixed $name
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-name-result.php
 */
function ibase_name_result($result, $name): bool
{
}

/**
 * Get the number of fields in a result set
 *
 * @param mixed $query_result
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-num-fields.php
 */
function ibase_num_fields($query_result): int
{
}

/**
 * Return the number of parameters in a prepared query
 *
 * @param mixed $query
 *
 * @return int
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
 * @param mixed $query
 * @param mixed $field_number
 *
 * @return array
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-param-info.php
 */
function ibase_param_info($query, $field_number): array
{
}

/**
 * Open a persistent connection to an InterBase database
 *
 * @param mixed|null $database
 * @param mixed|null $username
 * @param mixed|null $password
 * @param mixed|null $charset
 * @param mixed|null $buffers
 * @param mixed|null $dialect
 * @param mixed|null $role
 *
 * @return resource
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-pconnect.php
 */
function ibase_pconnect($database = null, $username = null, $password = null, $charset = null, $buffers = null, $dialect = null, $role = null)
{
}

/**
 * Prepare a query for later binding of parameter placeholders and execution
 *
 * @param mixed|null $link_identifier
 * @param mixed|null $query
 *
 * @return resource
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-prepare.php
 */
function ibase_prepare($link_identifier = null, $query = null)
{
}

/**
 * Execute a query on an InterBase database
 *
 * @param mixed|null $link_identifier
 * @param mixed|null $link_identifier
 * @param mixed|null $query
 * @param mixed|null $bind_arg
 * @param mixed|null $bind_arg
 *
 * @return resource
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-query.php
 */
function ibase_query($link_identifier = null, $link_identifier = null, $query = null, $bind_arg = null, $bind_arg = null)
{
}

/**
 * Initiates a restore task in the service manager and returns immediately
 *
 * @param mixed $service_handle
 * @param mixed $source_file
 * @param mixed $dest_db
 * @param mixed|null $options
 * @param mixed|null $verbose
 *
 * @return mixed
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-restore.php
 */
function ibase_restore($service_handle, $source_file, $dest_db, $options = null, $verbose = null)
{
}

/**
 * Roll back a transaction
 *
 * @param mixed $link_identifier
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-rollback.php
 */
function ibase_rollback($link_identifier): bool
{
}

/**
 * Roll back a transaction without closing it
 *
 * @param mixed $link_identifier
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-rollback-ret.php
 */
function ibase_rollback_ret($link_identifier): bool
{
}

/**
 * Request information about a database server
 *
 * @param mixed $service_handle
 * @param mixed $action
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-server-info.php
 */
function ibase_server_info($service_handle, $action): string
{
}

/**
 * Connect to the service manager
 *
 * @param mixed $host
 * @param mixed $dba_username
 * @param mixed $dba_password
 *
 * @return resource
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-service-attach.php
 */
function ibase_service_attach($host, $dba_username, $dba_password)
{
}

/**
 * Disconnect from the service manager
 *
 * @param mixed $service_handle
 *
 * @return bool
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
 * @param mixed $link_identifier
 * @param mixed $handler
 * @param mixed|null $event
 * @param mixed|null $event2
 *
 * @return resource
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-set-event-handler.php
 */
function ibase_set_event_handler($link_identifier, $handler, $event = null, $event2 = null)
{
}

/**
 * Begin a transaction
 *
 * @param mixed|null $trans_args
 * @param mixed|null $link_identifier
 * @param mixed|null $trans_args
 * @param mixed|null $link_identifier
 *
 * @return resource
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-trans.php
 */
function ibase_trans($trans_args = null, $link_identifier = null, $trans_args = null, $link_identifier = null)
{
}

/**
 * Wait for an event to be posted by the database
 *
 * @param mixed $link_identifier
 * @param mixed|null $event
 * @param mixed|null $event2
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ibase-wait-event.php
 */
function ibase_wait_event($link_identifier, $event = null, $event2 = null): string
{
}
