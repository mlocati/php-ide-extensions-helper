<?php
// Start of extension: memcached
// - parsed on POSIX with PHP 7.1.16 (extension version 3.0.4)

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
     * Consistent hashing key distribution algorithm (based on libketama).
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.distribution-consistent
     */
    const DISTRIBUTION_CONSISTENT = 1;

    /**
     * Modulo-based key distribution algorithm.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.distribution-modula
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
     * A flag for <code>Memcached::get</code>, <code>Memcached::getMulti</code> and
     * <code>Memcached::getMultiByKey</code> to ensure that the CAS token values
     * are returned as well.
     * Available as of Memcached 3.0.0.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.get-extended
     */
    const GET_EXTENDED = 2;

    /**
     * A flag for <code>Memcached::getMulti</code> and
     * <code>Memcached::getMultiByKey</code> to ensure that the keys are
     * returned in the same order as they were requested in. Non-existing keys
     * get a default value of NULL.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.get-preserve-order
     */
    const GET_PRESERVE_ORDER = 1;

    /**
     * CRC item key hashing algorithm.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.hash-crc
     */
    const HASH_CRC = 2;

    /**
     * The default (Jenkins one-at-a-time) item key hashing algorithm.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.hash-default
     */
    const HASH_DEFAULT = 0;

    /**
     * FNV1_32 item key hashing algorithm.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.hash-fnv1-32
     */
    const HASH_FNV1_32 = 5;

    /**
     * FNV1_64 item key hashing algorithm.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.hash-fnv1-64
     */
    const HASH_FNV1_64 = 3;

    /**
     * FNV1_32A item key hashing algorithm.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.hash-fnv1a-32
     */
    const HASH_FNV1A_32 = 6;

    /**
     * FNV1_64A item key hashing algorithm.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.hash-fnv1a-64
     */
    const HASH_FNV1A_64 = 4;

    /**
     * Hsieh item key hashing algorithm.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.hash-hsieh
     */
    const HASH_HSIEH = 7;

    /**
     * MD5 item key hashing algorithm.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.hash-md5
     */
    const HASH_MD5 = 1;

    /**
     * Murmur item key hashing algorithm.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.hash-murmur
     */
    const HASH_MURMUR = 8;

    /**
     * Indicates whether igbinary serializer support is available.
     * Type: <code>boolean</code>.
     *
     * @var bool
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.have-igbinary
     */
    const HAVE_IGBINARY = false;

    /**
     * Indicates whether JSON serializer support is available.
     * Type: <code>boolean</code>.
     *
     * @var bool
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.have-json
     */
    const HAVE_JSON = false;

    /**
     * Indicates whether msgpack serializer support is available.
     * Type: <code>boolean</code>.
     * Available as of Memcached 3.0.0.
     *
     * @var bool
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.have-msgpack
     */
    const HAVE_MSGPACK = false;

    /**
     * Type: <code>boolean</code>.
     * Available as of Memcached 3.0.0.
     *
     * @var bool
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.have-sasl
     */
    const HAVE_SASL = true;

    /**
     * Type: <code>boolean</code>.
     * Available as of Memcached 3.0.0.
     *
     * @var bool
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.have-session
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
     * Enable the use of the binary protocol. Please note that you cannot
     * toggle this option on an open connection.
     * Type: <code>boolean</code>, default: <code>FALSE</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.opt-binary-protocol
     */
    const OPT_BINARY_PROTOCOL = 18;

    /**
     * Enables or disables buffered I/O. Enabling buffered I/O causes
     * storage commands to "buffer" instead of being sent. Any action that
     * retrieves data causes this buffer to be sent to the remote connection.
     * Quitting the connection or closing down the connection will also cause
     * the buffered data to be pushed to the remote connection.
     * Type: <code>boolean</code>, default: <code>FALSE</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.opt-buffer-writes
     */
    const OPT_BUFFER_WRITES = 10;

    /**
     * Enables or disables caching of DNS lookups.
     * Type: <code>boolean</code>, default: <code>FALSE</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.opt-cache-lookups
     */
    const OPT_CACHE_LOOKUPS = 6;

    /**
     * Enables or disables payload compression. When enabled,
     * item values longer than a certain threshold (currently 100 bytes) will be
     * compressed during storage and decompressed during retrieval
     * transparently.
     * Type: <code>boolean</code>, default: <code>TRUE</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.opt-compression
     */
    const OPT_COMPRESSION = -1001;

    /**
     * @var int
     */
    const OPT_COMPRESSION_TYPE = -1004;

    /**
     * In non-blocking mode this set the value of the timeout during socket
     * connection, in milliseconds.
     * Type: <code>integer</code>, default: <code>1000</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.opt-connect-timeout
     */
    const OPT_CONNECT_TIMEOUT = 14;

    /**
     * @var int
     */
    const OPT_DEAD_TIMEOUT = 36;

    /**
     * Specifies the method of distributing item keys to the servers.
     * Currently supported methods are modulo and consistent hashing. Consistent
     * hashing delivers better distribution and allows servers to be added to
     * the cluster with minimal cache losses.
     * Type: <code>integer</code>, default: <code>Memcached::DISTRIBUTION_MODULA.</code>
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.opt-distribution
     */
    const OPT_DISTRIBUTION = 9;

    /**
     * Specifies the hashing algorithm used for the item keys. The valid
     * values are supplied via <code>Memcached::HASH_*</code> constants.
     * Each hash algorithm has its advantages and its disadvantages. Go with the
     * default if you don't know or don't care.
     * Type: <code>integer</code>, default: <code>Memcached::HASH_DEFAULT</code>
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.opt-hash
     */
    const OPT_HASH = 2;

    /**
     * @var int
     */
    const OPT_HASH_WITH_PREFIX_KEY = 25;

    /**
     * Enables or disables compatibility with libketama-like behavior. When
     * enabled, the item key hashing algorithm is set to MD5 and distribution is
     * set to be weighted consistent hashing distribution. This is useful
     * because other libketama-based clients (Python, Ruby, etc.) with the same
     * server configuration will be able to access the keys transparently.
     * <blockquote>
     * It is highly recommended to enable this option if you want to use
     * consistent hashing, and it may be enabled by default in future
     * releases.
     * </blockquote>
     * Type: <code>boolean</code>, default: <code>FALSE</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.opt-libketama-compatible
     */
    const OPT_LIBKETAMA_COMPATIBLE = 16;

    /**
     * @var int
     */
    const OPT_LIBKETAMA_HASH = 17;

    /**
     * Enables or disables asynchronous I/O. This is the fastest transport
     * available for storage functions.
     * Type: <code>boolean</code>, default: <code>FALSE</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.opt-no-block
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
     * Timeout for connection polling, in milliseconds.
     * Type: <code>integer</code>, default: <code>1000</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.opt-poll-timeout
     */
    const OPT_POLL_TIMEOUT = 8;

    /**
     * This can be used to create a "domain" for your item keys. The value
     * specified here will be prefixed to each of the keys. It cannot be
     * longer than <code>128</code> characters and will reduce the
     * maximum available key size. The prefix is applied only to the item keys,
     * not to the server keys.
     * Type: <code>string</code>, default: <code>""</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.opt-prefix-key
     */
    const OPT_PREFIX_KEY = -1002;

    /**
     * @var int
     */
    const OPT_RANDOMIZE_REPLICA_READ = 30;

    /**
     * Socket reading timeout, in microseconds. In cases where you cannot
     * use non-blocking I/O this will allow you to still have timeouts on the
     * reading of data.
     * Type: <code>integer</code>, default: <code>0</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.opt-recv-timeout
     */
    const OPT_RECV_TIMEOUT = 20;

    /**
     * @var int
     */
    const OPT_REMOVE_FAILED_SERVERS = 35;

    /**
     * The amount of time, in seconds, to wait until retrying a failed
     * connection attempt.
     * Type: <code>integer</code>, default: <code>0</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.opt-retry-timeout
     */
    const OPT_RETRY_TIMEOUT = 15;

    /**
     * Socket sending timeout, in microseconds. In cases where you cannot
     * use non-blocking I/O this will allow you to still have timeouts on the
     * sending of data.
     * Type: <code>integer</code>, default: <code>0</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.opt-send-timeout
     */
    const OPT_SEND_TIMEOUT = 19;

    /**
     * Specifies the serializer to use for serializing non-scalar values.
     * The valid serializers are <code>Memcached::SERIALIZER_PHP</code>
     * or <code>Memcached::SERIALIZER_IGBINARY</code>. The latter is
     * supported only when memcached is configured with
     * <code>--enable-memcached-igbinary</code> option and the
     * <code>igbinary</code> extension is loaded.
     * Type: <code>integer</code>, default: <code>Memcached::SERIALIZER_PHP</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.opt-serializer
     */
    const OPT_SERIALIZER = -1003;

    /**
     * Specifies the failure limit for server connection attempts. The
     * server will be removed after this many continuous connection
     * failures.
     * Type: <code>integer</code>, default: <code>0</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.opt-server-failure-limit
     */
    const OPT_SERVER_FAILURE_LIMIT = 21;

    /**
     * @var int
     */
    const OPT_SERVER_TIMEOUT_LIMIT = 37;

    /**
     * The maximum socket receive buffer in bytes.
     * Type: <code>integer</code>, default: varies by platform/kernel
     * configuration.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.opt-socket-recv-size
     */
    const OPT_SOCKET_RECV_SIZE = 5;

    /**
     * The maximum socket send buffer in bytes.
     * Type: <code>integer</code>, default: varies by platform/kernel
     * configuration.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.opt-socket-send-size
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
     * Enables or disables the no-delay feature for connecting sockets (may
     * be faster in some environments).
     * Type: <code>boolean</code>, default: <code>FALSE</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.opt-tcp-nodelay
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
     * Available as of Memcached 3.0.0.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-auth-continue
     */
    const RES_AUTH_CONTINUE = 42;

    /**
     * Available as of Memcached 3.0.0.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-auth-failure
     */
    const RES_AUTH_FAILURE = 41;

    /**
     * Available as of Memcached 3.0.0.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-auth-problem
     */
    const RES_AUTH_PROBLEM = 40;

    /**
     * Bad key.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-bad-key-provided
     */
    const RES_BAD_KEY_PROVIDED = 33;

    /**
     * The operation was buffered.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-buffered
     */
    const RES_BUFFERED = 32;

    /**
     * Error on the client side.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-client-error
     */
    const RES_CLIENT_ERROR = 9;

    /**
     * Failed to create network socket.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-connection-socket-create-failure
     */
    const RES_CONNECTION_SOCKET_CREATE_FAILURE = 11;

    /**
     * Failed to do compare-and-swap: item you are trying to store has been
     * modified since you last fetched it.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-data-exists
     */
    const RES_DATA_EXISTS = 12;

    /**
     * @var int
     */
    const RES_DELETED = 22;

    /**
     * Available as of Memcached 3.0.0.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-e2big
     */
    const RES_E2BIG = 37;

    /**
     * End of result set.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-end
     */
    const RES_END = 21;

    /**
     * System error.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-errno
     */
    const RES_ERRNO = 26;

    /**
     * The operation failed in some fashion.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-failure
     */
    const RES_FAILURE = 1;

    /**
     * @var int
     */
    const RES_FETCH_NOTFINISHED = 30;

    /**
     * DNS lookup failed.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-host-lookup-failure
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
     * Available as of Memcached 3.0.0.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-key-too-big
     */
    const RES_KEY_TOO_BIG = 39;

    /**
     * @var int
     */
    const RES_MEMORY_ALLOCATION_FAILURE = 17;

    /**
     * Server list is empty.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-no-servers
     */
    const RES_NO_SERVERS = 20;

    /**
     * @var int
     */
    const RES_NOT_SUPPORTED = 28;

    /**
     * Item with this key was not found (with "get" operation or "cas"
     * operations).
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-notfound
     */
    const RES_NOTFOUND = 16;

    /**
     * Item was not stored: but not because of an error. This normally
     * means that either the condition for an "add" or a "replace" command
     * wasn't met, or that the item is in a delete queue.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-notstored
     */
    const RES_NOTSTORED = 14;

    /**
     * Partial network data read error.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-partial-read
     */
    const RES_PARTIAL_READ = 18;

    /**
     * Payload failure: could not compress/decompress or serialize/unserialize the value.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-payload-failure
     */
    const RES_PAYLOAD_FAILURE = -1001;

    /**
     * Bad command in memcached protocol.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-protocol-error
     */
    const RES_PROTOCOL_ERROR = 8;

    /**
     * Error on the server side.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-server-error
     */
    const RES_SERVER_ERROR = 10;

    /**
     * @var int
     */
    const RES_SERVER_MARKED_DEAD = 35;

    /**
     * Available as of Memcached 3.0.0.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-server-memory-allocation-failure
     */
    const RES_SERVER_MEMORY_ALLOCATION_FAILURE = 48;

    /**
     * Available as of Memcached 3.0.0.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-server-temporarily-disabled
     */
    const RES_SERVER_TEMPORARILY_DISABLED = 47;

    /**
     * Some errors occurred during multi-get.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-some-errors
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
     * The operation was successful.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-success
     */
    const RES_SUCCESS = 0;

    /**
     * The operation timed out.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-timeout
     */
    const RES_TIMEOUT = 31;

    /**
     * Failed to read network data.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-unknown-read-failure
     */
    const RES_UNKNOWN_READ_FAILURE = 7;

    /**
     * @var int
     */
    const RES_UNKNOWN_STAT_KEY = 36;

    /**
     * Failed to write network data.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.res-write-failure
     */
    const RES_WRITE_FAILURE = 5;

    /**
     * The igbinary serializer.
     * Instead of textual representation it stores PHP data structures in a
     * compact binary form, resulting in space and time gains.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.serializer-igbinary
     */
    const SERIALIZER_IGBINARY = 2;

    /**
     * The JSON serializer. Requires PHP 5.2.10+.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.serializer-json
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
     * The default PHP serializer.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/memcached.constants.php#memcached.constants.serializer-php
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
    public function __construct(string $persistent_id = null, $callback = null)
    {
    }

    /**
     * Add an item under a new key
     *
     * @param string $key The key under which to store the value.
     * @param mixed $value The value to store.
     * @param int $expiration The expiration time, defaults to 0. See Expiration Times for more info.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTSTORED</code> if the key already exists.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.add.php
     */
    public function add(string $key, $value, int $expiration = null): bool
    {
    }

    /**
     * Add an item under a new key on a specific server
     *
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     * @param string $key The key under which to store the value.
     * @param mixed $value The value to store.
     * @param int $expiration The expiration time, defaults to 0. See Expiration Times for more info.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTSTORED</code> if the key already exists.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.addbykey.php
     */
    public function addByKey(string $server_key, string $key, $value, int $expiration = null): bool
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
    public function addServer(string $host, int $port, int $weight = 0): bool
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
    public function addServers(array $servers): bool
    {
    }

    /**
     * Append data to an existing item
     *
     * @param string $key The key under which to store the value.
     * @param string $value The string to append.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTSTORED</code> if the key does not exist.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.append.php
     */
    public function append(string $key, string $value): bool
    {
    }

    /**
     * Append data to an existing item on a specific server
     *
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     * @param string $key The key under which to store the value.
     * @param string $value The string to append.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTSTORED</code> if the key does not exist.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.appendbykey.php
     */
    public function appendByKey(string $server_key, string $key, string $value): bool
    {
    }

    /**
     * Compare and swap an item
     *
     * @param float $cas_token Unique value associated with the existing item. Generated by memcache.
     * @param string $key The key under which to store the value.
     * @param mixed $value The value to store.
     * @param int $expiration The expiration time, defaults to 0. See Expiration Times for more info.
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
    public function cas(float $cas_token, string $key, $value, int $expiration = null): bool
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
    public function casByKey(float $cas_token, string $server_key, string $key, $value, int $expiration = null): bool
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
    public function decrement(string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0): int
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
    public function decrementByKey(string $server_key, string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0): int
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
    public function delete(string $key, int $time = 0): bool
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
    public function deleteByKey(string $server_key, string $key, int $time = 0): bool
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
    public function deleteMulti(array $keys, int $time = 0): array
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
    public function deleteMultiByKey(string $server_key, array $keys, int $time = 0): bool
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
    public function fetch(): array
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
    public function fetchAll(): array
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
    public function flush(int $delay = 0): bool
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
     *
     * @return mixed Returns the value stored in the cache or <code>FALSE</code> otherwise.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTFOUND</code> if the key does not exist.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.get.php
     */
    public function get(string $key, callable $cache_cb = null, int $flags = null)
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
    public function getAllKeys(): array
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
     *
     * @return mixed Returns the value stored in the cache or <code>FALSE</code> otherwise.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTFOUND</code> if the key does not exist.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getbykey.php
     */
    public function getByKey(string $server_key, string $key, callable $cache_cb = null, int $flags = null)
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
    public function getDelayed(array $keys, bool $with_cas = null, callable $value_cb = null): bool
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
    public function getDelayedByKey(string $server_key, array $keys, bool $with_cas = null, callable $value_cb = null): bool
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
     *
     * @return mixed Returns the array of found items or <code>FALSE</code> on failure.
     * Use <code>Memcached::getResultCode</code> if necessary.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getmulti.php
     */
    public function getMulti(array $keys, int $flags = null)
    {
    }

    /**
     * Retrieve multiple items from a specific server
     *
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     * @param array $keys Array of keys to retrieve.
     * @param int $flags The flags for the get operation.
     *
     * @return array Returns the array of found items or <code>FALSE</code> on failure.
     * Use <code>Memcached::getResultCode</code> if necessary.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.getmultibykey.php
     */
    public function getMultiByKey(string $server_key, array $keys, int $flags = null): array
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
    public function getOption(int $option)
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
    public function getResultCode(): int
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
    public function getResultMessage(): string
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
    public function getServerByKey(string $server_key): array
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
    public function getServerList(): array
    {
    }

    /**
     * Get server pool statistics
     *
     * @param mixed $type
     *
     * @return array Array of server statistics, one entry per server.
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
     * @return array Array of server versions, one entry per server.
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
    public function increment(string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0): int
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
    public function incrementByKey(string $server_key, string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0): int
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
    public function isPersistent(): bool
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
    public function isPristine(): bool
    {
    }

    /**
     * Prepend data to an existing item
     *
     * @param string $key The key of the item to prepend the data to.
     * @param string $value The string to prepend.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTSTORED</code> if the key does not exist.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.prepend.php
     */
    public function prepend(string $key, string $value): bool
    {
    }

    /**
     * Prepend data to an existing item on a specific server
     *
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     * @param string $key The key of the item to prepend the data to.
     * @param string $value The string to prepend.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTSTORED</code> if the key does not exist.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.prependbykey.php
     */
    public function prependByKey(string $server_key, string $key, string $value): bool
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
    public function quit(): bool
    {
    }

    /**
     * Replace the item under an existing key
     *
     * @param string $key The key under which to store the value.
     * @param mixed $value The value to store.
     * @param int $expiration The expiration time, defaults to 0. See Expiration Times for more info.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTSTORED</code> if the key does not exist.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.replace.php
     */
    public function replace(string $key, $value, int $expiration = null): bool
    {
    }

    /**
     * Replace the item under an existing key on a specific server
     *
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     * @param string $key The key under which to store the value.
     * @param mixed $value The value to store.
     * @param int $expiration The expiration time, defaults to 0. See Expiration Times for more info.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * The <code>Memcached::getResultCode</code> will return
     * <code>Memcached::RES_NOTSTORED</code> if the key does not exist.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.replacebykey.php
     */
    public function replaceByKey(string $server_key, string $key, $value, int $expiration = null): bool
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
    public function resetServerList(): bool
    {
    }

    /**
     * Store an item
     *
     * @param string $key The key under which to store the value.
     * @param mixed $value The value to store.
     * @param int $expiration The expiration time, defaults to 0. See Expiration Times for more info.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * Use <code>Memcached::getResultCode</code> if necessary.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.set.php
     */
    public function set(string $key, $value, int $expiration = null): bool
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
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * Use <code>Memcached::getResultCode</code> if necessary.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.setbykey.php
     */
    public function setByKey(string $server_key, string $key, $value, int $expiration = null): bool
    {
    }

    /**
     * Store multiple items
     *
     * @param array $items An array of key/value pairs to store on the server.
     * @param int $expiration The expiration time, defaults to 0. See Expiration Times for more info.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * Use <code>Memcached::getResultCode</code> if necessary.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.setmulti.php
     */
    public function setMulti(array $items, int $expiration = null): bool
    {
    }

    /**
     * Store multiple items on a specific server
     *
     * @param string $server_key The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.
     * @param array $items An array of key/value pairs to store on the server.
     * @param int $expiration The expiration time, defaults to 0. See Expiration Times for more info.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * Use <code>Memcached::getResultCode</code> if necessary.
     *
     * @since PECL memcached >= 0.1.0
     *
     * @link http://www.php.net/manual/en/memcached.setmultibykey.php
     */
    public function setMultiByKey(string $server_key, array $items, int $expiration = null): bool
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
    public function setOption(int $option, $value): bool
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
    public function setOptions(array $options): bool
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
    public function setSaslAuthData(string $username, string $password): void
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
    public function touch(string $key, int $expiration): bool
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
    public function touchByKey(string $server_key, string $key, int $expiration): bool
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
