<?php
// Start of extension: apcu
// - parsed on POSIX with PHP 7.0.28 (extension version 5.1.11)

/**
 * @link http://www.php.net/manual/en/apcu.constants.php#constant.apcu-iter-all
 *
 * @var float
 */
const APC_ITER_ALL = 4294967295;

/**
 * @link http://www.php.net/manual/en/apcu.constants.php#constant.apcu-iter-atime
 *
 * @var int
 */
const APC_ITER_ATIME = 128;

/**
 * @link http://www.php.net/manual/en/apcu.constants.php#constant.apcu-iter-ctime
 *
 * @var int
 */
const APC_ITER_CTIME = 32;

/**
 * @link http://www.php.net/manual/en/apcu.constants.php#constant.apcu-iter-dtime
 *
 * @var int
 */
const APC_ITER_DTIME = 64;

/**
 * @link http://www.php.net/manual/en/apcu.constants.php#constant.apcu-iter-key
 *
 * @var int
 */
const APC_ITER_KEY = 2;

/**
 * @link http://www.php.net/manual/en/apcu.constants.php#constant.apcu-iter-mem-size
 *
 * @var int
 */
const APC_ITER_MEM_SIZE = 512;

/**
 * @link http://www.php.net/manual/en/apcu.constants.php#constant.apcu-iter-mtime
 *
 * @var int
 */
const APC_ITER_MTIME = 16;

/**
 * @link http://www.php.net/manual/en/apcu.constants.php#constant.apcu-iter-none
 *
 * @var int
 */
const APC_ITER_NONE = 0;

/**
 * @link http://www.php.net/manual/en/apcu.constants.php#constant.apcu-iter-num-hits
 *
 * @var int
 */
const APC_ITER_NUM_HITS = 8;

/**
 * @link http://www.php.net/manual/en/apcu.constants.php#constant.apcu-iter-refcount
 *
 * @var int
 */
const APC_ITER_REFCOUNT = 256;

/**
 * @link http://www.php.net/manual/en/apcu.constants.php#constant.apcu-iter-ttl
 *
 * @var int
 */
const APC_ITER_TTL = 1024;

/**
 * @link http://www.php.net/manual/en/apcu.constants.php#constant.apcu-iter-type
 *
 * @var int
 */
const APC_ITER_TYPE = 1;

/**
 * @link http://www.php.net/manual/en/apcu.constants.php#constant.apcu-iter-value
 *
 * @var int
 */
const APC_ITER_VALUE = 4;

/**
 * @link http://www.php.net/manual/en/apcu.constants.php#constant.apcu-list-active
 *
 * @var int
 */
const APC_LIST_ACTIVE = 1;

/**
 * @link http://www.php.net/manual/en/apcu.constants.php#constant.apcu-list-deleted
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
     * @param mixed $search
     * @param mixed $format
     * @param mixed $chunk_size
     * @param mixed $list
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
     * @return mixed Returns the current item on success, or <code>FALSE</code> if no
     * more items or exist, or on failure.
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
     * @return int The total count.
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
     * @return int The number of hits on success, or <code>FALSE</code> on failure.
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
     * @return int The total cache size.
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
     * @return string Returns the key on success, or <code>FALSE</code> upon failure.
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
     * @return void Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @return void No value is returned.
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
     * @return void Returns <code>TRUE</code> if the current iterator position is valid, otherwise <code>FALSE</code>.
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
 * @param string $key Store the variable using this name. <code>key</code>s are
 * cache-unique, so attempting to use <code>apcu_add</code> to
 * store data with a key that already exists will not overwrite the
 * existing data, and will instead return <code>FALSE</code>. (This is the only
 * difference between <code>apcu_add</code> and
 * <code>apcu_store</code>.)
 * @param mixed $var The variable to store
 * @param int|null $ttl Time To Live; store <code>var</code> in the cache for
 * <code>ttl</code> seconds. After the
 * <code>ttl</code> has passed, the stored variable will be
 * expunged from the cache (on the next request). If no <code>ttl</code>
 * is supplied (or if the <code>ttl</code> is
 * <code>0</code>), the value will persist until it is removed from
 * the cache manually, or otherwise fails to exist in the cache (clear,
 * restart, etc.).
 *
 * @return bool Returns TRUE if something has effectively been added into the cache, FALSE otherwise.
 * Second syntax returns array with error keys.
 *
 * @since PECL apcu >= 4.0.0
 *
 * @link http://www.php.net/manual/en/function.apcu-add.php
 */
function apcu_add(string $key, $var, int $ttl = 0): bool
{
}

/**
 * Retrieves cached information from APCu's data store
 *
 * @param bool|null $limited If <code>limited</code> is <code>TRUE</code>, the
 * return value will exclude the individual list of cache entries. This
 * is useful when trying to optimize calls for statistics gathering.
 *
 * @return array Array of cached data (and meta-data) or <code>FALSE</code> on failure
 *
 * @since PECL apcu >= 4.0.0
 *
 * @link http://www.php.net/manual/en/function.apcu-cache-info.php
 */
function apcu_cache_info(bool $limited = false): array
{
}

/**
 * Updates an old value with a new value
 *
 * @param string $key The key of the value being updated.
 * @param int $old The old value (the value currently stored).
 * @param int $new The new value to update to.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PECL apcu >= 4.0.0
 *
 * @link http://www.php.net/manual/en/function.apcu-cas.php
 */
function apcu_cas(string $key, int $old, int $new): bool
{
}

/**
 * Clears the APCu cache
 *
 * @return bool Returns <code>TRUE</code> always
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
 * @param string $key The key of the value being decreased.
 * @param int|null $step The step, or value to decrease.
 * @param bool $success Optionally pass the success or fail boolean value to
 * this referenced variable.
 *
 * @return int Returns the current value of <code>key</code>'s value on success,
 * or <code>FALSE</code> on failure
 *
 * @since PECL apcu >= 4.0.0
 *
 * @link http://www.php.net/manual/en/function.apcu-dec.php
 */
function apcu_dec(string $key, int $step = 1, bool &$success = null): int
{
}

/**
 * Removes a stored variable from the cache
 *
 * @param mixed $key A <code>key</code> used to store the value as a
 * <code>string</code> for a single key,
 * or as an <code>array</code> of strings for several keys,
 * or as an <code>APCUIterator</code> <code>object</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PECL apcu >= 4.0.0
 *
 * @link http://www.php.net/manual/en/function.apcu-delete.php
 */
function apcu_delete($key): bool
{
}

function apcu_enabled()
{
}

/**
 * Atomically fetch or generate a cache entry
 *
 * @param string $key Identity of cache entry
 * @param callable $generator A callable that accepts <code>key</code> as the only argument and returns the value to cache.
 * @param int|null $ttl Time To Live; store <code>var</code> in the cache for
 * <code>ttl</code> seconds. After the
 * <code>ttl</code> has passed, the stored variable will be
 * expunged from the cache (on the next request). If no <code>ttl</code>
 * is supplied (or if the <code>ttl</code> is
 * <code>0</code>), the value will persist until it is removed from
 * the cache manually, or otherwise fails to exist in the cache (clear,
 * restart, etc.).
 *
 * @return mixed Returns the cached value
 *
 * @since PECL apcu >= 5.1.0
 *
 * @link http://www.php.net/manual/en/function.apcu-entry.php
 */
function apcu_entry(string $key, callable $generator, int $ttl = 0)
{
}

/**
 * Checks if entry exists
 *
 * @param mixed $keys A <code>string</code>, or an <code>array</code> of strings, that
 * contain keys.
 *
 * @return mixed Returns <code>TRUE</code> if the key exists, otherwise <code>FALSE</code> Or if an
 * <code>array</code> was passed to <code>keys</code>, then
 * an array is returned that contains all existing keys, or an empty
 * array if none exist.
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
 * @param mixed $key The <code>key</code> used to store the value (with
 * <code>apcu_store</code>). If an array is passed then each
 * element is fetched and returned.
 * @param bool $success Set to <code>TRUE</code> in success and <code>FALSE</code> in failure.
 *
 * @return mixed The stored variable or array of variables on success; <code>FALSE</code> on failure
 *
 * @since PECL apcu >= 4.0.0
 *
 * @link http://www.php.net/manual/en/function.apcu-fetch.php
 */
function apcu_fetch($key, bool &$success = null)
{
}

/**
 * Increase a stored number
 *
 * @param string $key The key of the value being increased.
 * @param int|null $step The step, or value to increase.
 * @param bool $success Optionally pass the success or fail boolean value to
 * this referenced variable.
 *
 * @return int Returns the current value of <code>key</code>'s value on success,
 * or <code>FALSE</code> on failure
 *
 * @since PECL apcu >= 4.0.0
 *
 * @link http://www.php.net/manual/en/function.apcu-inc.php
 */
function apcu_inc(string $key, int $step = 1, bool &$success = null): int
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
 * @param bool|null $limited When set to <code>FALSE</code> (default) <code>apcu_sma_info</code> will
 * return a detailed information about each segment.
 *
 * @return array Array of Shared Memory Allocation data; <code>FALSE</code> on failure.
 *
 * @since PECL apcu >= 4.0.0
 *
 * @link http://www.php.net/manual/en/function.apcu-sma-info.php
 */
function apcu_sma_info(bool $limited = false): array
{
}

/**
 * Cache a variable in the data store
 *
 * @param string $key Store the variable using this name. <code>key</code>s are
 * cache-unique, so storing a second value with the same
 * <code>key</code> will overwrite the original value.
 * @param mixed $var The variable to store
 * @param int|null $ttl Time To Live; store <code>var</code> in the cache for
 * <code>ttl</code> seconds. After the
 * <code>ttl</code> has passed, the stored variable will be
 * expunged from the cache (on the next request). If no <code>ttl</code>
 * is supplied (or if the <code>ttl</code> is
 * <code>0</code>), the value will persist until it is removed from
 * the cache manually, or otherwise fails to exist in the cache (clear,
 * restart, etc.).
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 * Second syntax returns array with error keys.
 *
 * @since PECL apcu >= 4.0.0
 *
 * @link http://www.php.net/manual/en/function.apcu-store.php
 */
function apcu_store(string $key, $var, int $ttl = 0): bool
{
}
