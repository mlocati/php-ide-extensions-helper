<?php
// Start of extension: memcached
// - parsed on POSIX with PHP 7.0.28 (extension version 3.0.4)

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
    const GET_EXTENDED = 2;

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
     * @var bool
     */
    const HAVE_IGBINARY = false;

    /**
     * @var bool
     */
    const HAVE_JSON = false;

    /**
     * @var bool
     */
    const HAVE_MSGPACK = false;

    /**
     * @var bool
     */
    const HAVE_SASL = true;

    /**
     * @var bool
     */
    const HAVE_SESSION = true;

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
    const OPT_USER_FLAGS = -1006;

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
     * @param mixed|null $persistent_id
     * @param mixed|null $callback
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
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $expiration
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.add.php
     */
    public function add($key, $value, $expiration = null): bool
    {
    }

    /**
     * Add an item under a new key on a specific server
     *
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $expiration
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.addbykey.php
     */
    public function addByKey($server_key, $key, $value, $expiration = null): bool
    {
    }

    /**
     * Add a server to the server pool
     *
     * @param mixed $host
     * @param mixed $port
     * @param mixed|null $weight
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.addserver.php
     */
    public function addServer($host, $port, $weight = null): bool
    {
    }

    /**
     * Add multiple servers to the server pool
     *
     * @param array $servers
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.1
     *
     * @link http://www.php.net/manual/en/memcached.addservers.php
     */
    public function addServers(array $servers): bool
    {
    }

    /**
     * Append data to an existing item
     *
     * @param mixed $key
     * @param mixed $value
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.append.php
     */
    public function append($key, $value): bool
    {
    }

    /**
     * Append data to an existing item on a specific server
     *
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed $value
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.appendbykey.php
     */
    public function appendByKey($server_key, $key, $value): bool
    {
    }

    /**
     * Compare and swap an item
     *
     * @param mixed $cas_token
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $expiration
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.cas.php
     */
    public function cas($cas_token, $key, $value, $expiration = null): bool
    {
    }

    /**
     * Compare and swap an item on a specific server
     *
     * @param mixed $cas_token
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $expiration
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.casbykey.php
     */
    public function casByKey($cas_token, $server_key, $key, $value, $expiration = null): bool
    {
    }

    /**
     * Decrement numeric item's value
     *
     * @param mixed $key
     * @param mixed|null $offset
     * @param mixed|null $initial_value
     * @param mixed|null $expiry
     *
     * @return int
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.decrement.php
     */
    public function decrement($key, $offset = null, $initial_value = null, $expiry = null): int
    {
    }

    /**
     * Decrement numeric item's value, stored on a specific server
     *
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed|null $offset
     * @param mixed|null $initial_value
     * @param mixed|null $expiry
     *
     * @return int
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.decrementbykey.php
     */
    public function decrementByKey($server_key, $key, $offset = null, $initial_value = null, $expiry = null): int
    {
    }

    /**
     * Delete an item
     *
     * @param mixed $key
     * @param mixed|null $time
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.delete.php
     */
    public function delete($key, $time = null): bool
    {
    }

    /**
     * Delete an item from a specific server
     *
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed|null $time
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.deletebykey.php
     */
    public function deleteByKey($server_key, $key, $time = null): bool
    {
    }

    /**
     * Delete multiple items
     *
     * @param mixed $keys
     * @param mixed|null $time
     *
     * @return array
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.deletemulti.php
     */
    public function deleteMulti($keys, $time = null): array
    {
    }

    /**
     * Delete multiple items from a specific server
     *
     * @param mixed $server_key
     * @param mixed $keys
     * @param mixed|null $time
     *
     * @return bool
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.deletemultibykey.php
     */
    public function deleteMultiByKey($server_key, $keys, $time = null): bool
    {
    }

    /**
     * Fetch the next result
     *
     * @return array
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.fetch.php
     */
    public function fetch(): array
    {
    }

    /**
     * Fetch all the remaining results
     *
     * @return array
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.fetchall.php
     */
    public function fetchAll(): array
    {
    }

    /**
     * Invalidate all items in the cache
     *
     * @param mixed|null $delay
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.flush.php
     */
    public function flush($delay = null): bool
    {
    }

    public function flushBuffers()
    {
    }

    /**
     * Retrieve an item
     *
     * @param mixed $key
     * @param mixed|null $cache_cb
     * @param mixed|null $get_flags
     *
     * @return mixed
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.get.php
     */
    public function get($key, $cache_cb = null, $get_flags = null)
    {
    }

    /**
     * Gets the keys stored on all the servers
     *
     * @return array
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.getallkeys.php
     */
    public function getAllKeys(): array
    {
    }

    /**
     * Retrieve an item from a specific server
     *
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed|null $cache_cb
     * @param mixed|null $get_flags
     *
     * @return mixed
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getbykey.php
     */
    public function getByKey($server_key, $key, $cache_cb = null, $get_flags = null)
    {
    }

    /**
     * Request multiple items
     *
     * @param array $keys
     * @param mixed|null $with_cas
     * @param mixed|null $value_cb
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getdelayed.php
     */
    public function getDelayed(array $keys, $with_cas = null, $value_cb = null): bool
    {
    }

    /**
     * Request multiple items from a specific server
     *
     * @param mixed $server_key
     * @param array $keys
     * @param mixed|null $with_cas
     * @param mixed|null $value_cb
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getdelayedbykey.php
     */
    public function getDelayedByKey($server_key, array $keys, $with_cas = null, $value_cb = null): bool
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
     * @param array $keys
     * @param mixed|null $get_flags
     *
     * @return mixed
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getmulti.php
     */
    public function getMulti(array $keys, $get_flags = null)
    {
    }

    /**
     * Retrieve multiple items from a specific server
     *
     * @param mixed $server_key
     * @param array $keys
     * @param mixed|null $get_flags
     *
     * @return array
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getmultibykey.php
     */
    public function getMultiByKey($server_key, array $keys, $get_flags = null): array
    {
    }

    /**
     * Retrieve a Memcached option value
     *
     * @param mixed $option
     *
     * @return mixed
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
     * @return int
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getresultcode.php
     */
    public function getResultCode(): int
    {
    }

    /**
     * Return the message describing the result of the last operation
     *
     * @return string
     *
     * @since PECL memcached >= 1.0.0
     *
     * @link http://www.php.net/manual/en/memcached.getresultmessage.php
     */
    public function getResultMessage(): string
    {
    }

    /**
     * Map a key to a server
     *
     * @param mixed $server_key
     *
     * @return array
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getserverbykey.php
     */
    public function getServerByKey($server_key): array
    {
    }

    /**
     * Get the list of the servers in the pool
     *
     * @return array
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getserverlist.php
     */
    public function getServerList(): array
    {
    }

    /**
     * Get server pool statistics
     *
     * @param mixed|null $type
     *
     * @return array
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getstats.php
     */
    public function getStats($type = null): array
    {
    }

    /**
     * Get server pool version info
     *
     * @return array
     *
     * @since PECL memcached >= 0.1.5
     *
     * @link http://www.php.net/manual/en/memcached.getversion.php
     */
    public function getVersion(): array
    {
    }

    /**
     * Increment numeric item's value
     *
     * @param mixed $key
     * @param mixed|null $offset
     * @param mixed|null $initial_value
     * @param mixed|null $expiry
     *
     * @return int
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.increment.php
     */
    public function increment($key, $offset = null, $initial_value = null, $expiry = null): int
    {
    }

    /**
     * Increment numeric item's value, stored on a specific server
     *
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed|null $offset
     * @param mixed|null $initial_value
     * @param mixed|null $expiry
     *
     * @return int
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.incrementbykey.php
     */
    public function incrementByKey($server_key, $key, $offset = null, $initial_value = null, $expiry = null): int
    {
    }

    /**
     * Check if a persitent connection to memcache is being used
     *
     * @return bool
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.ispersistent.php
     */
    public function isPersistent(): bool
    {
    }

    /**
     * Check if the instance was recently created
     *
     * @return bool
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.ispristine.php
     */
    public function isPristine(): bool
    {
    }

    /**
     * Prepend data to an existing item
     *
     * @param mixed $key
     * @param mixed $value
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.prepend.php
     */
    public function prepend($key, $value): bool
    {
    }

    /**
     * Prepend data to an existing item on a specific server
     *
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed $value
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.prependbykey.php
     */
    public function prependByKey($server_key, $key, $value): bool
    {
    }

    /**
     * Close any open connections
     *
     * @return bool
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.quit.php
     */
    public function quit(): bool
    {
    }

    /**
     * Replace the item under an existing key
     *
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $expiration
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.replace.php
     */
    public function replace($key, $value, $expiration = null): bool
    {
    }

    /**
     * Replace the item under an existing key on a specific server
     *
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $expiration
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.replacebykey.php
     */
    public function replaceByKey($server_key, $key, $value, $expiration = null): bool
    {
    }

    /**
     * Clears all servers from the server list
     *
     * @return bool
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.resetserverlist.php
     */
    public function resetServerList(): bool
    {
    }

    /**
     * Store an item
     *
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $expiration
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.set.php
     */
    public function set($key, $value, $expiration = null): bool
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
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $expiration
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.setbykey.php
     */
    public function setByKey($server_key, $key, $value, $expiration = null): bool
    {
    }

    /**
     * Store multiple items
     *
     * @param array $items
     * @param mixed|null $expiration
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.setmulti.php
     */
    public function setMulti(array $items, $expiration = null): bool
    {
    }

    /**
     * Store multiple items on a specific server
     *
     * @param mixed $server_key
     * @param array $items
     * @param mixed|null $expiration
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.setmultibykey.php
     */
    public function setMultiByKey($server_key, array $items, $expiration = null): bool
    {
    }

    /**
     * Set a Memcached option
     *
     * @param mixed $option
     * @param mixed $value
     *
     * @return bool
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.setoption.php
     */
    public function setOption($option, $value): bool
    {
    }

    /**
     * Set Memcached options
     *
     * @param mixed $options
     *
     * @return bool
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.setoptions.php
     */
    public function setOptions($options): bool
    {
    }

    /**
     * Set the credentials to use for authentication
     *
     * @param mixed $username
     * @param mixed $password
     *
     * @return void
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
     * @param mixed $key
     * @param mixed $expiration
     *
     * @return bool
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.touch.php
     */
    public function touch($key, $expiration): bool
    {
    }

    /**
     * Set a new expiration on an item on a specific server
     *
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed $expiration
     *
     * @return bool
     *
     * @since PECL memcached >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcached.touchbykey.php
     */
    public function touchByKey($server_key, $key, $expiration): bool
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
