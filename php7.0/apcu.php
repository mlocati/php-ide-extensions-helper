<?php
// Start of extension: apcu
// - parsed on POSIX with PHP 7.0.28 (extension version 5.1.11)

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
 * over large APCu caches. This is helpful as it allows iterating over large
 * caches in steps, while grabbing a defined number of entries per lock instance,
 * so it frees the cache locks for other activities rather than hold up the
 * entire cache to grab 100 (the default) entries. Also, using regular expression
 * matching is more efficient as it's been moved to the C level.
 *
 * @since PECL apcu >= 5.0.0
 *
 * @link http://www.php.net/manual/en/class.apcuiterator.php
 */
class APCuIterator implements Iterator
{
    /**
     * Constructs an APCUIterator iterator object
     *
     * @param mixed|null $search
     * @param mixed|null $format
     * @param mixed|null $chunk_size
     * @param mixed|null $list
     *
     * @since PECL apcu >= 5.0.0
     *
     * @link http://www.php.net/manual/en/apcuiterator.construct.php
     */
    public function __construct($search = null, $format = null, $chunk_size = null, $list = null)
    {
    }

    /**
     * Get current item
     *
     * @return mixed
     *
     * @since PECL apcu >= 5.0.0
     *
     * @link http://www.php.net/manual/en/apcuiterator.current.php
     */
    public function current()
    {
    }

    /**
     * Get total count
     *
     * @return int
     *
     * @since PECL apcu >= 5.0.0
     *
     * @link http://www.php.net/manual/en/apcuiterator.gettotalcount.php
     */
    public function getTotalCount(): int
    {
    }

    /**
     * Get total cache hits
     *
     * @return int
     *
     * @since PECL apcu >= 5.0.0
     *
     * @link http://www.php.net/manual/en/apcuiterator.gettotalhits.php
     */
    public function getTotalHits(): int
    {
    }

    /**
     * Get total cache size
     *
     * @return int
     *
     * @since PECL apcu >= 5.0.0
     *
     * @link http://www.php.net/manual/en/apcuiterator.gettotalsize.php
     */
    public function getTotalSize(): int
    {
    }

    /**
     * Get iterator key
     *
     * @return string
     *
     * @since PECL apcu >= 5.0.0
     *
     * @link http://www.php.net/manual/en/apcuiterator.key.php
     */
    public function key(): string
    {
    }

    /**
     * Move pointer to next item
     *
     * @return void
     *
     * @since PECL apcu >= 5.0.0
     *
     * @link http://www.php.net/manual/en/apcuiterator.next.php
     */
    public function next()
    {
    }

    /**
     * Rewinds iterator
     *
     * @return void
     *
     * @since PECL apcu >= 5.0.0
     *
     * @link http://www.php.net/manual/en/apcuiterator.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * Checks if current position is valid
     *
     * @return void
     *
     * @since PECL apcu >= 5.0.0
     *
     * @link http://www.php.net/manual/en/apcuiterator.valid.php
     */
    public function valid()
    {
    }
}

/**
 * Cache a new variable in the data store
 *
 * @param mixed $key
 * @param mixed $var
 * @param mixed|null $ttl
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
 * @param mixed|null $limited
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
 * @param mixed $key
 * @param mixed $old
 * @param mixed $new
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
 * @param mixed $key
 * @param mixed|null $step
 * @param mixed|null $success
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
 * @param mixed $keys
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
 * @param mixed $key
 * @param callable $generator
 * @param int|null $ttl
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
 * @param mixed $keys
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
 * @param mixed $key
 * @param mixed|null $success
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
 * @param mixed $key
 * @param mixed|null $step
 * @param mixed|null $success
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
 * @param mixed $key
 */
function apcu_key_info($key)
{
}

/**
 * Retrieves APCu Shared Memory Allocation information
 *
 * @param mixed|null $limited
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
 * @param mixed $key
 * @param mixed $var
 * @param mixed|null $ttl
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
