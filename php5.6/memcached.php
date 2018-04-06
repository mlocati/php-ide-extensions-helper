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
     * mixed|null $persistent_id
     * mixed|null $callback
     */
    public function __construct($persistent_id = null, $callback = null)
    {
    }

    /**
     * mixed $key
     * mixed $value
     * mixed|null $expiration
     * mixed|null $udf_flags
     */
    public function add($key, $value, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * mixed $server_key
     * mixed $key
     * mixed $value
     * mixed|null $expiration
     * mixed|null $udf_flags
     */
    public function addByKey($server_key, $key, $value, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * mixed $host
     * mixed $port
     * mixed|null $weight
     */
    public function addServer($host, $port, $weight = null)
    {
    }

    /**
     * array $servers
     */
    public function addServers(array $servers)
    {
    }

    /**
     * mixed $key
     * mixed $value
     * mixed|null $expiration
     */
    public function append($key, $value, $expiration = null)
    {
    }

    /**
     * mixed $server_key
     * mixed $key
     * mixed $value
     * mixed|null $expiration
     */
    public function appendByKey($server_key, $key, $value, $expiration = null)
    {
    }

    /**
     * mixed $cas_token
     * mixed $key
     * mixed $value
     * mixed|null $expiration
     * mixed|null $udf_flags
     */
    public function cas($cas_token, $key, $value, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * mixed $cas_token
     * mixed $server_key
     * mixed $key
     * mixed $value
     * mixed|null $expiration
     * mixed|null $udf_flags
     */
    public function casByKey($cas_token, $server_key, $key, $value, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * mixed $key
     * mixed|null $offset
     * mixed|null $initial_value
     * mixed|null $expiry
     */
    public function decrement($key, $offset = null, $initial_value = null, $expiry = null)
    {
    }

    /**
     * mixed $server_key
     * mixed $key
     * mixed|null $offset
     * mixed|null $initial_value
     * mixed|null $expiry
     */
    public function decrementByKey($server_key, $key, $offset = null, $initial_value = null, $expiry = null)
    {
    }

    /**
     * See <code>unlink</code> or <code>unset</code>
     *
     * mixed $key
     * mixed|null $time
     *
     * @since None
     *
     * @link http://www.php.net/manual/en/function.delete.php
     */
    public function delete($key, $time = null)
    {
    }

    /**
     * mixed $server_key
     * mixed $key
     * mixed|null $time
     */
    public function deleteByKey($server_key, $key, $time = null)
    {
    }

    /**
     * mixed $keys
     * mixed|null $time
     */
    public function deleteMulti($keys, $time = null)
    {
    }

    /**
     * mixed $server_key
     * mixed $keys
     * mixed|null $time
     */
    public function deleteMultiByKey($server_key, $keys, $time = null)
    {
    }

    public function fetch()
    {
    }

    public function fetchAll()
    {
    }

    /**
     * Flush system output buffer
     *
     * mixed|null $delay
     *
     * @return void
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.flush.php
     */
    public function flush($delay = null)
    {
    }

    public function flushBuffers()
    {
    }

    /**
     * mixed $key
     * mixed|null $cache_cb
     * mixed|null $cas_token
     * mixed|null $udf_flags
     */
    public function get($key, $cache_cb = null, &$cas_token = null, &$udf_flags = null)
    {
    }

    public function getAllKeys()
    {
    }

    /**
     * mixed $server_key
     * mixed $key
     * mixed|null $cache_cb
     * mixed|null $cas_token
     * mixed|null $udf_flags
     */
    public function getByKey($server_key, $key, $cache_cb = null, &$cas_token = null, &$udf_flags = null)
    {
    }

    /**
     * array $keys
     * mixed|null $with_cas
     * mixed|null $value_cb
     */
    public function getDelayed(array $keys, $with_cas = null, $value_cb = null)
    {
    }

    /**
     * mixed $server_key
     * array $keys
     * mixed|null $with_cas
     * mixed|null $value_cb
     */
    public function getDelayedByKey($server_key, array $keys, $with_cas = null, $value_cb = null)
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
     * array $keys
     * mixed|null $cas_tokens
     * mixed|null $flags
     * mixed|null $udf_flags
     */
    public function getMulti(array $keys, &$cas_tokens = null, $flags = null, &$udf_flags = null)
    {
    }

    /**
     * mixed $server_key
     * array $keys
     * mixed|null $cas_tokens
     * mixed|null $flags
     * mixed|null $udf_flags
     */
    public function getMultiByKey($server_key, array $keys, &$cas_tokens = null, $flags = null, &$udf_flags = null)
    {
    }

    /**
     * mixed $option
     */
    public function getOption($option)
    {
    }

    public function getResultCode()
    {
    }

    public function getResultMessage()
    {
    }

    /**
     * mixed $server_key
     */
    public function getServerByKey($server_key)
    {
    }

    public function getServerList()
    {
    }

    public function getStats()
    {
    }

    public function getVersion()
    {
    }

    /**
     * mixed $key
     * mixed|null $offset
     * mixed|null $initial_value
     * mixed|null $expiry
     */
    public function increment($key, $offset = null, $initial_value = null, $expiry = null)
    {
    }

    /**
     * mixed $server_key
     * mixed $key
     * mixed|null $offset
     * mixed|null $initial_value
     * mixed|null $expiry
     */
    public function incrementByKey($server_key, $key, $offset = null, $initial_value = null, $expiry = null)
    {
    }

    public function isPersistent()
    {
    }

    public function isPristine()
    {
    }

    /**
     * mixed $key
     * mixed $value
     * mixed|null $expiration
     */
    public function prepend($key, $value, $expiration = null)
    {
    }

    /**
     * mixed $server_key
     * mixed $key
     * mixed $value
     * mixed|null $expiration
     */
    public function prependByKey($server_key, $key, $value, $expiration = null)
    {
    }

    public function quit()
    {
    }

    /**
     * mixed $key
     * mixed $value
     * mixed|null $expiration
     * mixed|null $udf_flags
     */
    public function replace($key, $value, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * mixed $server_key
     * mixed $key
     * mixed $value
     * mixed|null $expiration
     * mixed|null $udf_flags
     */
    public function replaceByKey($server_key, $key, $value, $expiration = null, $udf_flags = null)
    {
    }

    public function resetServerList()
    {
    }

    /**
     * mixed $key
     * mixed $value
     * mixed|null $expiration
     * mixed|null $udf_flags
     */
    public function set($key, $value, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * mixed $host_map
     * mixed $forward_map
     * mixed $replicas
     */
    public function setBucket($host_map, $forward_map, $replicas)
    {
    }

    /**
     * mixed $server_key
     * mixed $key
     * mixed $value
     * mixed|null $expiration
     * mixed|null $udf_flags
     */
    public function setByKey($server_key, $key, $value, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * array $items
     * mixed|null $expiration
     * mixed|null $udf_flags
     */
    public function setMulti(array $items, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * mixed $server_key
     * array $items
     * mixed|null $expiration
     * mixed|null $udf_flags
     */
    public function setMultiByKey($server_key, array $items, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * mixed $option
     * mixed $value
     */
    public function setOption($option, $value)
    {
    }

    /**
     * mixed $options
     */
    public function setOptions($options)
    {
    }

    /**
     * mixed $username
     * mixed $password
     */
    public function setSaslAuthData($username, $password)
    {
    }

    /**
     * Sets access and modification time of file
     *
     * mixed $key
     * mixed $expiration
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.touch.php
     */
    public function touch($key, $expiration)
    {
    }

    /**
     * mixed $server_key
     * mixed $key
     * mixed $expiration
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
