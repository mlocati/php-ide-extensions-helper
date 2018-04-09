<?php
// Start of extension: memcached
// - parsed on POSIX with PHP 5.6.34 (extension version 2.2.0)

/**
 * Represents a connection to a set of memcached servers.
 *
 * @since PECL memcached >= 0.1.0
 *
 * @link http://www.php.net/manual/en/class.memcached.php
 */
class Memcached
{
    /**
     * @var int
     */
    const COMPRESSION_FASTLZ = 2;

    /**
     * @var int
     */
    const COMPRESSION_ZLIB = 1;

    /**
     * @var int
     */
    const DISTRIBUTION_CONSISTENT = 1;

    /**
     * @var int
     */
    const DISTRIBUTION_MODULA = 0;

    /**
     * @var int
     */
    const DISTRIBUTION_VIRTUAL_BUCKET = 6;

    /**
     * @var bool
     */
    const GET_ERROR_RETURN_VALUE = false;

    /**
     * @var int
     */
    const GET_PRESERVE_ORDER = 1;

    /**
     * @var int
     */
    const HASH_CRC = 2;

    /**
     * @var int
     */
    const HASH_DEFAULT = 0;

    /**
     * @var int
     */
    const HASH_FNV1_32 = 5;

    /**
     * @var int
     */
    const HASH_FNV1_64 = 3;

    /**
     * @var int
     */
    const HASH_FNV1A_32 = 6;

    /**
     * @var int
     */
    const HASH_FNV1A_64 = 4;

    /**
     * @var int
     */
    const HASH_HSIEH = 7;

    /**
     * @var int
     */
    const HASH_MD5 = 1;

    /**
     * @var int
     */
    const HASH_MURMUR = 8;

    /**
     * @var int
     */
    const HAVE_IGBINARY = 0;

    /**
     * @var int
     */
    const HAVE_JSON = 0;

    /**
     * @var int
     */
    const HAVE_MSGPACK = 0;

    /**
     * @var int
     */
    const HAVE_SASL = 1;

    /**
     * @var int
     */
    const HAVE_SESSION = 1;

    /**
     * @var int
     */
    const LIBMEMCACHED_VERSION_HEX = 16777240;

    /**
     * @var int
     */
    const OPT_AUTO_EJECT_HOSTS = 28;

    /**
     * @var int
     */
    const OPT_BINARY_PROTOCOL = 18;

    /**
     * @var int
     */
    const OPT_BUFFER_WRITES = 10;

    /**
     * @var int
     */
    const OPT_CACHE_LOOKUPS = 6;

    /**
     * @var int
     */
    const OPT_COMPRESSION = -1001;

    /**
     * @var int
     */
    const OPT_COMPRESSION_TYPE = -1004;

    /**
     * @var int
     */
    const OPT_CONNECT_TIMEOUT = 14;

    /**
     * @var int
     */
    const OPT_DEAD_TIMEOUT = 36;

    /**
     * @var int
     */
    const OPT_DISTRIBUTION = 9;

    /**
     * @var int
     */
    const OPT_HASH = 2;

    /**
     * @var int
     */
    const OPT_HASH_WITH_PREFIX_KEY = 25;

    /**
     * @var int
     */
    const OPT_LIBKETAMA_COMPATIBLE = 16;

    /**
     * @var int
     */
    const OPT_LIBKETAMA_HASH = 17;

    /**
     * @var int
     */
    const OPT_NO_BLOCK = 0;

    /**
     * @var int
     */
    const OPT_NOREPLY = 26;

    /**
     * @var int
     */
    const OPT_NUMBER_OF_REPLICAS = 29;

    /**
     * @var int
     */
    const OPT_POLL_TIMEOUT = 8;

    /**
     * @var int
     */
    const OPT_PREFIX_KEY = -1002;

    /**
     * @var int
     */
    const OPT_RANDOMIZE_REPLICA_READ = 30;

    /**
     * @var int
     */
    const OPT_RECV_TIMEOUT = 20;

    /**
     * @var int
     */
    const OPT_REMOVE_FAILED_SERVERS = 35;

    /**
     * @var int
     */
    const OPT_RETRY_TIMEOUT = 15;

    /**
     * @var int
     */
    const OPT_SEND_TIMEOUT = 19;

    /**
     * @var int
     */
    const OPT_SERIALIZER = -1003;

    /**
     * @var int
     */
    const OPT_SERVER_FAILURE_LIMIT = 21;

    /**
     * @var int
     */
    const OPT_SERVER_TIMEOUT_LIMIT = 37;

    /**
     * @var int
     */
    const OPT_SOCKET_RECV_SIZE = 5;

    /**
     * @var int
     */
    const OPT_SOCKET_SEND_SIZE = 4;

    /**
     * @var int
     */
    const OPT_SORT_HOSTS = 12;

    /**
     * @var int
     */
    const OPT_STORE_RETRY_COUNT = -1005;

    /**
     * @var int
     */
    const OPT_TCP_KEEPALIVE = 32;

    /**
     * @var int
     */
    const OPT_TCP_NODELAY = 1;

    /**
     * @var int
     */
    const OPT_USE_UDP = 27;

    /**
     * @var int
     */
    const OPT_VERIFY_KEY = 13;

    /**
     * @var int
     */
    const RES_AUTH_CONTINUE = 42;

    /**
     * @var int
     */
    const RES_AUTH_FAILURE = 41;

    /**
     * @var int
     */
    const RES_AUTH_PROBLEM = 40;

    /**
     * @var int
     */
    const RES_BAD_KEY_PROVIDED = 33;

    /**
     * @var int
     */
    const RES_BUFFERED = 32;

    /**
     * @var int
     */
    const RES_CLIENT_ERROR = 9;

    /**
     * @var int
     */
    const RES_CONNECTION_SOCKET_CREATE_FAILURE = 11;

    /**
     * @var int
     */
    const RES_DATA_EXISTS = 12;

    /**
     * @var int
     */
    const RES_DELETED = 22;

    /**
     * @var int
     */
    const RES_E2BIG = 37;

    /**
     * @var int
     */
    const RES_END = 21;

    /**
     * @var int
     */
    const RES_ERRNO = 26;

    /**
     * @var int
     */
    const RES_FAILURE = 1;

    /**
     * @var int
     */
    const RES_FETCH_NOTFINISHED = 30;

    /**
     * @var int
     */
    const RES_HOST_LOOKUP_FAILURE = 2;

    /**
     * @var int
     */
    const RES_INVALID_HOST_PROTOCOL = 34;

    /**
     * @var int
     */
    const RES_ITEM = 25;

    /**
     * @var int
     */
    const RES_KEY_TOO_BIG = 39;

    /**
     * @var int
     */
    const RES_MEMORY_ALLOCATION_FAILURE = 17;

    /**
     * @var int
     */
    const RES_NO_SERVERS = 20;

    /**
     * @var int
     */
    const RES_NOT_SUPPORTED = 28;

    /**
     * @var int
     */
    const RES_NOTFOUND = 16;

    /**
     * @var int
     */
    const RES_NOTSTORED = 14;

    /**
     * @var int
     */
    const RES_PARTIAL_READ = 18;

    /**
     * @var int
     */
    const RES_PAYLOAD_FAILURE = -1001;

    /**
     * @var int
     */
    const RES_PROTOCOL_ERROR = 8;

    /**
     * @var int
     */
    const RES_SERVER_ERROR = 10;

    /**
     * @var int
     */
    const RES_SERVER_MARKED_DEAD = 35;

    /**
     * @var int
     */
    const RES_SERVER_MEMORY_ALLOCATION_FAILURE = 48;

    /**
     * @var int
     */
    const RES_SERVER_TEMPORARILY_DISABLED = 47;

    /**
     * @var int
     */
    const RES_SOME_ERRORS = 19;

    /**
     * @var int
     */
    const RES_STAT = 24;

    /**
     * @var int
     */
    const RES_STORED = 15;

    /**
     * @var int
     */
    const RES_SUCCESS = 0;

    /**
     * @var int
     */
    const RES_TIMEOUT = 31;

    /**
     * @var int
     */
    const RES_UNKNOWN_READ_FAILURE = 7;

    /**
     * @var int
     */
    const RES_UNKNOWN_STAT_KEY = 36;

    /**
     * @var int
     */
    const RES_WRITE_FAILURE = 5;

    /**
     * @var int
     */
    const SERIALIZER_IGBINARY = 2;

    /**
     * @var int
     */
    const SERIALIZER_JSON = 3;

    /**
     * @var int
     */
    const SERIALIZER_JSON_ARRAY = 4;

    /**
     * @var int
     */
    const SERIALIZER_MSGPACK = 5;

    /**
     * @var int
     */
    const SERIALIZER_PHP = 1;

    /**
     * Create a Memcached instance
     *
     * @param string $persistent_id By default the Memcached instances are destroyed at the end of the
     * request. To create an instance that persists between requests, use
     * <code>persistent_id</code> to specify a unique ID for the
     * instance. All instances created with the same
     * <code>persistent_id</code> will share the same connection.
     * @param mixed $callback
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.construct.php
     */
    public function __construct($persistent_id = null, $callback = null)
    {
    }

    /**
     * Add an item under a new key
     *
     * @param string $key The key under which to store the value.
     * @param mixed $value The value to store.
     * @param int $expiration The expiration time, defaults to 0. See Expiration Times for more info.
     * @param mixed $udf_flags
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTSTORED</code> if the key already exists.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.add.php
     */
    public function add($key, $value, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * Add an item under a new key on a specific server
     *
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     * @param string $key The key under which to store the value.
     * @param mixed $value The value to store.
     * @param int $expiration The expiration time, defaults to 0. See Expiration Times for more info.
     * @param mixed $udf_flags
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTSTORED</code> if the key already exists.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.addbykey.php
     */
    public function addByKey($server_key, $key, $value, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * Add a server to the server pool
     *
     * @param string $host The hostname of the memcache server. If the hostname is invalid,
     * data-related operations will set
     * <code>Memcached::RES_HOST_LOOKUP_FAILURE</code> result code. As
     * of version 2.0.0b1, this parameter may also specify the path of a unix
     * socket filepath ex. <code>/path/to/memcached.sock</code>
     * to use UNIX domain sockets, in this case <code>port</code>
     * must also be set to <code>0</code>.
     * @param int $port The port on which memcache is running. Usually, this is
     * <code>11211</code>. As of version 2.0.0b1, set this parameter to <code>0</code> when
     * using UNIX domain sockets.
     * @param int|null $weight The weight of the server relative to the total weight of all the
     * servers in the pool. This controls the probability of the server being
     * selected for operations. This is used only with consistent distribution
     * option and usually corresponds to the amount of memory available to
     * memcache on that server.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.addserver.php
     */
    public function addServer($host, $port, $weight = 0)
    {
    }

    /**
     * Add multiple servers to the server pool
     *
     * @param array $servers
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcached >= 0.1.1
     *
     * @link http://www.php.net/manual/en/memcached.addservers.php
     */
    public function addServers(array $servers)
    {
    }

    /**
     * Append data to an existing item
     *
     * @param string $key The key under which to store the value.
     * @param string $value The string to append.
     * @param mixed $expiration
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTSTORED</code> if the key does not exist.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.append.php
     */
    public function append($key, $value, $expiration = null)
    {
    }

    /**
     * Append data to an existing item on a specific server
     *
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     * @param string $key The key under which to store the value.
     * @param string $value The string to append.
     * @param mixed $expiration
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTSTORED</code> if the key does not exist.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.appendbykey.php
     */
    public function appendByKey($server_key, $key, $value, $expiration = null)
    {
    }

    /**
     * Compare and swap an item
     *
     * @param float $cas_token Unique value associated with the existing item. Generated by memcache.
     * @param string $key The key under which to store the value.
     * @param mixed $value The value to store.
     * @param int $expiration The expiration time, defaults to 0. See Expiration Times for more info.
     * @param mixed $udf_flags
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_DATA_EXISTS</code> if the item you are trying
     * to store has been modified since you last fetched it.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.cas.php
     */
    public function cas($cas_token, $key, $value, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * Compare and swap an item on a specific server
     *
     * @param float $cas_token Unique value associated with the existing item. Generated by memcache.
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     * @param string $key The key under which to store the value.
     * @param mixed $value The value to store.
     * @param int $expiration The expiration time, defaults to 0. See Expiration Times for more info.
     * @param mixed $udf_flags
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_DATA_EXISTS</code> if the item you are trying
     * to store has been modified since you last fetched it.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.casbykey.php
     */
    public function casByKey($cas_token, $server_key, $key, $value, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * Decrement numeric item's value
     *
     * @param string $key The key of the item to decrement.
     * @param int|null $offset The amount by which to decrement the item's value.
     * @param int|null $initial_value The value to set the item to if it doesn't currently exist.
     * @param int|null $expiry The expiry time to set on the item.
     *
     * @return int Returns item's new value on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.decrement.php
     */
    public function decrement($key, $offset = 1, $initial_value = 0, $expiry = 0)
    {
    }

    /**
     * Decrement numeric item's value, stored on a specific server
     *
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     * @param string $key The key of the item to decrement.
     * @param int|null $offset The amount by which to decrement the item's value.
     * @param int|null $initial_value The value to set the item to if it doesn't currently exist.
     * @param int|null $expiry The expiry time to set on the item.
     *
     * @return int Returns item's new value on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.decrementbykey.php
     */
    public function decrementByKey($server_key, $key, $offset = 1, $initial_value = 0, $expiry = 0)
    {
    }

    /**
     * Delete an item
     *
     * @param string $key The key to be deleted.
     * @param int|null $time The amount of time the server will wait to delete the item.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTFOUND</code> if the key does not exist.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.delete.php
     */
    public function delete($key, $time = 0)
    {
    }

    /**
     * Delete an item from a specific server
     *
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     * @param string $key The key to be deleted.
     * @param int|null $time The amount of time the server will wait to delete the item.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTFOUND</code> if the key does not exist.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.deletebykey.php
     */
    public function deleteByKey($server_key, $key, $time = 0)
    {
    }

    /**
     * Delete multiple items
     *
     * @param array $keys The keys to be deleted.
     * @param int|null $time The amount of time the server will wait to delete the items.
     *
     * @return array Returns array indexed by <code>keys</code> and where values are indicating whether operation succeeded or not.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTFOUND</code> if the key does not exist.
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.deletemulti.php
     */
    public function deleteMulti(array $keys, $time = 0)
    {
    }

    /**
     * Delete multiple items from a specific server
     *
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     * @param array $keys The keys to be deleted.
     * @param int|null $time The amount of time the server will wait to delete the items.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTFOUND</code> if the key does not exist.
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.deletemultibykey.php
     */
    public function deleteMultiByKey($server_key, array $keys, $time = 0)
    {
    }

    /**
     * Fetch the next result
     *
     * @return array Returns the next result or <code>FALSE</code> otherwise.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_END</code> if result set is exhausted.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.fetch.php
     */
    public function fetch()
    {
    }

    /**
     * Fetch all the remaining results
     *
     * @return array Returns the results or <code>FALSE</code> on failure.
     * Use <code>Memcached::getResultCode</code> if necessary.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.fetchall.php
     */
    public function fetchAll()
    {
    }

    /**
     * Invalidate all items in the cache
     *
     * @param int|null $delay Number of seconds to wait before invalidating the items.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * Use <code>Memcached::getResultCode</code> if necessary.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.flush.php
     */
    public function flush($delay = 0)
    {
    }

    public function flushBuffers()
    {
    }

    /**
     * Retrieve an item
     *
     * @param string $key The key of the item to retrieve.
     * @param callable $cache_cb Read-through caching callback or <code>NULL</code>.
     * @param int $flags Flags to control the returned result. When value of <code>Memcached::GET_EXTENDED</code>
     * is given will return the CAS token.
     * @param mixed $udf_flags
     *
     * @return mixed Returns the value stored in the cache or <code>FALSE</code> otherwise.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTFOUND</code> if the key does not exist.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.get.php
     */
    public function get($key, callable $cache_cb = null, &$flags = null, &$udf_flags = null)
    {
    }

    /**
     * Gets the keys stored on all the servers
     *
     * @return array Returns the keys stored on all the servers on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.getallkeys.php
     */
    public function getAllKeys()
    {
    }

    /**
     * Retrieve an item from a specific server
     *
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     * @param string $key The key of the item to fetch.
     * @param callable $cache_cb Read-through caching callback or <code>NULL</code>
     * @param int $flags Flags to control the returned result. When value of <code>Memcached::GET_EXTENDED</code>
     * is given will return the CAS token.
     * @param mixed $udf_flags
     *
     * @return mixed Returns the value stored in the cache or <code>FALSE</code> otherwise.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTFOUND</code> if the key does not exist.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getbykey.php
     */
    public function getByKey($server_key, $key, callable $cache_cb = null, &$flags = null, &$udf_flags = null)
    {
    }

    /**
     * Request multiple items
     *
     * @param array $keys Array of keys to request.
     * @param bool $with_cas Whether to request CAS token values also.
     * @param callable $value_cb The result callback or <code>NULL</code>.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * Use <code>Memcached::getResultCode</code> if necessary.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getdelayed.php
     */
    public function getDelayed(array $keys, $with_cas = null, callable $value_cb = null)
    {
    }

    /**
     * Request multiple items from a specific server
     *
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     * @param array $keys Array of keys to request.
     * @param bool $with_cas Whether to request CAS token values also.
     * @param callable $value_cb The result callback or <code>NULL</code>.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * Use <code>Memcached::getResultCode</code> if necessary.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getdelayedbykey.php
     */
    public function getDelayedByKey($server_key, array $keys, $with_cas = null, callable $value_cb = null)
    {
    }

    public function getLastDisconnectedServer()
    {
    }

    public function getLastErrorCode()
    {
    }

    public function getLastErrorErrno()
    {
    }

    public function getLastErrorMessage()
    {
    }

    /**
     * Retrieve multiple items
     *
     * @param array $keys Array of keys to retrieve.
     * @param int $flags The flags for the get operation.
     * @param mixed $flags
     * @param mixed $udf_flags
     *
     * @return mixed Returns the array of found items or <code>FALSE</code> on failure.
     * Use <code>Memcached::getResultCode</code> if necessary.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getmulti.php
     */
    public function getMulti(array $keys, &$flags = null, $flags = null, &$udf_flags = null)
    {
    }

    /**
     * Retrieve multiple items from a specific server
     *
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     * @param array $keys Array of keys to retrieve.
     * @param int $flags The flags for the get operation.
     * @param mixed $flags
     * @param mixed $udf_flags
     *
     * @return array Returns the array of found items or <code>FALSE</code> on failure.
     * Use <code>Memcached::getResultCode</code> if necessary.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getmultibykey.php
     */
    public function getMultiByKey($server_key, array $keys, &$flags = null, $flags = null, &$udf_flags = null)
    {
    }

    /**
     * Retrieve a Memcached option value
     *
     * @param int $option One of the <code>Memcached::OPT_*</code> constants.
     *
     * @return mixed Returns the value of the requested option, or <code>FALSE</code> on
     * error.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getoption.php
     */
    public function getOption($option)
    {
    }

    /**
     * Return the result code of the last operation
     *
     * @return int Result code of the last Memcached operation.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getresultcode.php
     */
    public function getResultCode()
    {
    }

    /**
     * Return the message describing the result of the last operation
     *
     * @return string Message describing the result of the last Memcached operation.
     *
     * @since PECL memcached >= 1.0.0
     *
     * @link http://www.php.net/manual/en/memcached.getresultmessage.php
     */
    public function getResultMessage()
    {
    }

    /**
     * Map a key to a server
     *
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     *
     * @return array Returns an array containing three keys of <code>host</code>,
     * <code>port</code>, and <code>weight</code> on success or <code>FALSE</code>
     * on failure.
     * Use <code>Memcached::getResultCode</code> if necessary.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getserverbykey.php
     */
    public function getServerByKey($server_key)
    {
    }

    /**
     * Get the list of the servers in the pool
     *
     * @return array The list of all servers in the server pool.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getserverlist.php
     */
    public function getServerList()
    {
    }

    /**
     * Get server pool statistics
     *
     * @return array Array of server statistics, one entry per server.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getstats.php
     */
    public function getStats()
    {
    }

    /**
     * Get server pool version info
     *
     * @return array Array of server versions, one entry per server.
     *
     * @since PECL memcached >= 0.1.5
     *
     * @link http://www.php.net/manual/en/memcached.getversion.php
     */
    public function getVersion()
    {
    }

    /**
     * Increment numeric item's value
     *
     * @param string $key The key of the item to increment.
     * @param int|null $offset The amount by which to increment the item's value.
     * @param int|null $initial_value The value to set the item to if it doesn't currently exist.
     * @param int|null $expiry The expiry time to set on the item.
     *
     * @return int Returns new item's value on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.increment.php
     */
    public function increment($key, $offset = 1, $initial_value = 0, $expiry = 0)
    {
    }

    /**
     * Increment numeric item's value, stored on a specific server
     *
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     * @param string $key The key of the item to increment.
     * @param int|null $offset The amount by which to increment the item's value.
     * @param int|null $initial_value The value to set the item to if it doesn't currently exist.
     * @param int|null $expiry The expiry time to set on the item.
     *
     * @return int Returns new item's value on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.incrementbykey.php
     */
    public function incrementByKey($server_key, $key, $offset = 1, $initial_value = 0, $expiry = 0)
    {
    }

    /**
     * Check if a persitent connection to memcache is being used
     *
     * @return bool Returns true if Memcache instance uses a persistent connection, false otherwise.
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.ispersistent.php
     */
    public function isPersistent()
    {
    }

    /**
     * Check if the instance was recently created
     *
     * @return bool Returns the true if instance is recently created, false otherwise.
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.ispristine.php
     */
    public function isPristine()
    {
    }

    /**
     * Prepend data to an existing item
     *
     * @param string $key The key of the item to prepend the data to.
     * @param string $value The string to prepend.
     * @param mixed $expiration
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTSTORED</code> if the key does not exist.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.prepend.php
     */
    public function prepend($key, $value, $expiration = null)
    {
    }

    /**
     * Prepend data to an existing item on a specific server
     *
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     * @param string $key The key of the item to prepend the data to.
     * @param string $value The string to prepend.
     * @param mixed $expiration
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTSTORED</code> if the key does not exist.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.prependbykey.php
     */
    public function prependByKey($server_key, $key, $value, $expiration = null)
    {
    }

    /**
     * Close any open connections
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.quit.php
     */
    public function quit()
    {
    }

    /**
     * Replace the item under an existing key
     *
     * @param string $key The key under which to store the value.
     * @param mixed $value The value to store.
     * @param int $expiration The expiration time, defaults to 0. See Expiration Times for more info.
     * @param mixed $udf_flags
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTSTORED</code> if the key does not exist.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.replace.php
     */
    public function replace($key, $value, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * Replace the item under an existing key on a specific server
     *
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     * @param string $key The key under which to store the value.
     * @param mixed $value The value to store.
     * @param int $expiration The expiration time, defaults to 0. See Expiration Times for more info.
     * @param mixed $udf_flags
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTSTORED</code> if the key does not exist.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.replacebykey.php
     */
    public function replaceByKey($server_key, $key, $value, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * Clears all servers from the server list
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.resetserverlist.php
     */
    public function resetServerList()
    {
    }

    /**
     * Store an item
     *
     * @param string $key The key under which to store the value.
     * @param mixed $value The value to store.
     * @param int $expiration The expiration time, defaults to 0. See Expiration Times for more info.
     * @param mixed $udf_flags
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * Use <code>Memcached::getResultCode</code> if necessary.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.set.php
     */
    public function set($key, $value, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * @param mixed $host_map
     * @param mixed $forward_map
     * @param mixed $replicas
     */
    public function setBucket($host_map, $forward_map, $replicas)
    {
    }

    /**
     * Store an item on a specific server
     *
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     * @param string $key The key under which to store the value.
     * @param mixed $value The value to store.
     * @param int $expiration The expiration time, defaults to 0. See Expiration Times for more info.
     * @param mixed $udf_flags
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * Use <code>Memcached::getResultCode</code> if necessary.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.setbykey.php
     */
    public function setByKey($server_key, $key, $value, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * Store multiple items
     *
     * @param array $items An array of key/value pairs to store on the server.
     * @param int $expiration The expiration time, defaults to 0. See Expiration Times for more info.
     * @param mixed $udf_flags
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * Use <code>Memcached::getResultCode</code> if necessary.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.setmulti.php
     */
    public function setMulti(array $items, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * Store multiple items on a specific server
     *
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     * @param array $items An array of key/value pairs to store on the server.
     * @param int $expiration The expiration time, defaults to 0. See Expiration Times for more info.
     * @param mixed $udf_flags
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * Use <code>Memcached::getResultCode</code> if necessary.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.setmultibykey.php
     */
    public function setMultiByKey($server_key, array $items, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * Set a Memcached option
     *
     * @param int $option
     * @param mixed $value
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.setoption.php
     */
    public function setOption($option, $value)
    {
    }

    /**
     * Set Memcached options
     *
     * @param array $options An associative array of options where the key is the option to set and
     * the value is the new value for the option.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.setoptions.php
     */
    public function setOptions(array $options)
    {
    }

    /**
     * Set the credentials to use for authentication
     *
     * @param string $username The username to use for authentication.
     * @param string $password The password to use for authentication.
     *
     * @return void No value is returned.
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.setsaslauthdata.php
     */
    public function setSaslAuthData($username, $password)
    {
    }

    /**
     * Set a new expiration on an item
     *
     * @param string $key The key under which to store the value.
     * @param int $expiration The expiration time, defaults to 0. See Expiration Times for more info.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * Use <code>Memcached::getResultCode</code> if necessary.
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.touch.php
     */
    public function touch($key, $expiration)
    {
    }

    /**
     * Set a new expiration on an item on a specific server
     *
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     * @param string $key The key under which to store the value.
     * @param int $expiration The expiration time, defaults to 0. See Expiration Times for more info.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * Use <code>Memcached::getResultCode</code> if necessary.
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.touchbykey.php
     */
    public function touchByKey($server_key, $key, $expiration)
    {
    }
}

/**
 * @since PECL memcached >= 0.1.0
 *
 * @link http://www.php.net/manual/en/class.memcachedexception.php
 */
class MemcachedException extends RuntimeException
{
}
