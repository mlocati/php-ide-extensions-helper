<?php
// Start of extension: apcu
// - parsed on POSIX with PHP 7.2.3 (extension version 5.1.11)

/**
 * @link http://www.php.net/manual/en/apc.constants.php#constant.apc-iter-all
 *
 * @var float
 */
const APC_ITER_ALL = 4294967295;

/**
 * @link http://www.php.net/manual/en/apc.constants.php#constant.apc-iter-atime
 *
 * @var int
 */
const APC_ITER_ATIME = 128;

/**
 * @link http://www.php.net/manual/en/apc.constants.php#constant.apc-iter-ctime
 *
 * @var int
 */
const APC_ITER_CTIME = 32;

/**
 * @link http://www.php.net/manual/en/apc.constants.php#constant.apc-iter-dtime
 *
 * @var int
 */
const APC_ITER_DTIME = 64;

/**
 * @link http://www.php.net/manual/en/apc.constants.php#constant.apc-iter-key
 *
 * @var int
 */
const APC_ITER_KEY = 2;

/**
 * @link http://www.php.net/manual/en/apc.constants.php#constant.apc-iter-mem-size
 *
 * @var int
 */
const APC_ITER_MEM_SIZE = 512;

/**
 * @link http://www.php.net/manual/en/apc.constants.php#constant.apc-iter-mtime
 *
 * @var int
 */
const APC_ITER_MTIME = 16;

/**
 * @link http://www.php.net/manual/en/apc.constants.php#constant.apc-iter-none
 *
 * @var int
 */
const APC_ITER_NONE = 0;

/**
 * @link http://www.php.net/manual/en/apc.constants.php#constant.apc-iter-num-hits
 *
 * @var int
 */
const APC_ITER_NUM_HITS = 8;

/**
 * @link http://www.php.net/manual/en/apc.constants.php#constant.apc-iter-refcount
 *
 * @var int
 */
const APC_ITER_REFCOUNT = 256;

/**
 * @link http://www.php.net/manual/en/apc.constants.php#constant.apc-iter-ttl
 *
 * @var int
 */
const APC_ITER_TTL = 1024;

/**
 * @link http://www.php.net/manual/en/apc.constants.php#constant.apc-iter-type
 *
 * @var int
 */
const APC_ITER_TYPE = 1;

/**
 * @link http://www.php.net/manual/en/apc.constants.php#constant.apc-iter-value
 *
 * @var int
 */
const APC_ITER_VALUE = 4;

/**
 * @link http://www.php.net/manual/en/apc.constants.php#constant.apc-list-active
 *
 * @var int
 */
const APC_LIST_ACTIVE = 1;

/**
 * @link http://www.php.net/manual/en/apc.constants.php#constant.apc-list-deleted
 *
 * @var int
 */
const APC_LIST_DELETED = 2;

/**
 * The <code>APCUIterator</code> class makes it easier to iterate
 *     over large APCu caches. This is helpful as it allows iterating over large
 *     caches in steps, while grabbing a defined number of entries per lock instance,
 *     so it frees the cache locks for other activities rather than hold up the
 *     entire cache to grab 100 (the default) entries. Also, using regular expression
 *     matching is more efficient as it's been moved to the C level.
 *
 * @since PECL apcu >= 5.0.0
 *
 * @link http://www.php.net/manual/en/class.apcuiterator.php
 */
class APCuIterator implements Iterator
{
    /**
     * mixed|null $search
     * mixed|null $format
     * mixed|null $chunk_size
     * mixed|null $list
     */
    public function __construct($search = null, $format = null, $chunk_size = null, $list = null)
    {
    }

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    public function getTotalCount()
    {
    }

    public function getTotalHits()
    {
    }

    public function getTotalSize()
    {
    }

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
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

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    public function valid()
    {
    }
}

/**
 * Cache a new variable in the data store
 *
 * mixed $key
 * mixed $var
 * mixed|null $ttl
 *
 * @return bool
 *
 * @since PECL apcu >= 4.0.0
 *
 * @link http://www.php.net/manual/en/function.apcu-add.php
 */
function apcu_add($key, $var, $ttl = null): bool
{
}

/**
 * Retrieves cached information from APCu's data store
 *
 * mixed|null $limited
 *
 * @return array
 *
 * @since PECL apcu >= 4.0.0
 *
 * @link http://www.php.net/manual/en/function.apcu-cache-info.php
 */
function apcu_cache_info($limited = null): array
{
}

/**
 * Updates an old value with a new value
 *
 * mixed $key
 * mixed $old
 * mixed $new
 *
 * @return bool
 *
 * @since PECL apcu >= 4.0.0
 *
 * @link http://www.php.net/manual/en/function.apcu-cas.php
 */
function apcu_cas($key, $old, $new): bool
{
}

/**
 * Clears the APCu cache
 *
 * @return bool
 *
 * @since PECL apcu >= 4.0.0
 *
 * @link http://www.php.net/manual/en/function.apcu-clear-cache.php
 */
function apcu_clear_cache(): bool
{
}

/**
 * Decrease a stored number
 *
 * mixed $key
 * mixed|null $step
 * mixed|null $success
 *
 * @return int
 *
 * @since PECL apcu >= 4.0.0
 *
 * @link http://www.php.net/manual/en/function.apcu-dec.php
 */
function apcu_dec($key, $step = null, &$success = null): int
{
}

/**
 * Removes a stored variable from the cache
 *
 * mixed $keys
 *
 * @return bool
 *
 * @since PECL apcu >= 4.0.0
 *
 * @link http://www.php.net/manual/en/function.apcu-delete.php
 */
function apcu_delete($keys): bool
{
}

function apcu_enabled()
{
}

/**
 * Atomically fetch or generate a cache entry
 *
 * mixed $key
 * callable $generator
 * int|null $ttl
 *
 * @return mixed
 *
 * @since PECL apcu >= 5.1.0
 *
 * @link http://www.php.net/manual/en/function.apcu-entry.php
 */
function apcu_entry($key, callable $generator, int $ttl = null)
{
}

/**
 * Checks if entry exists
 *
 * mixed $keys
 *
 * @return mixed
 *
 * @since PECL apcu >= 4.0.0
 *
 * @link http://www.php.net/manual/en/function.apcu-exists.php
 */
function apcu_exists($keys)
{
}

/**
 * Fetch a stored variable from the cache
 *
 * mixed $key
 * mixed|null $success
 *
 * @return mixed
 *
 * @since PECL apcu >= 4.0.0
 *
 * @link http://www.php.net/manual/en/function.apcu-fetch.php
 */
function apcu_fetch($key, &$success = null)
{
}

/**
 * Increase a stored number
 *
 * mixed $key
 * mixed|null $step
 * mixed|null $success
 *
 * @return int
 *
 * @since PECL apcu >= 4.0.0
 *
 * @link http://www.php.net/manual/en/function.apcu-inc.php
 */
function apcu_inc($key, $step = null, &$success = null): int
{
}

/**
 * mixed $key
 */
function apcu_key_info($key)
{
}

/**
 * Retrieves APCu Shared Memory Allocation information
 *
 * mixed|null $limited
 *
 * @return array
 *
 * @since PECL apcu >= 4.0.0
 *
 * @link http://www.php.net/manual/en/function.apcu-sma-info.php
 */
function apcu_sma_info($limited = null): array
{
}

/**
 * Cache a variable in the data store
 *
 * mixed $key
 * mixed $var
 * mixed|null $ttl
 *
 * @return bool
 *
 * @since PECL apcu >= 4.0.0
 *
 * @link http://www.php.net/manual/en/function.apcu-store.php
 */
function apcu_store($key, $var, $ttl = null): bool
{
}
