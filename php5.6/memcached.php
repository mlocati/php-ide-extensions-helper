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
     * @param mixed|null $persistent_id
     * @param mixed|null $callback
     */
    public function __construct($persistent_id = null, $callback = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $expiration
     * @param mixed|null $udf_flags
     */
    public function add($key, $value, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $expiration
     * @param mixed|null $udf_flags
     */
    public function addByKey($server_key, $key, $value, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * @param mixed $host
     * @param mixed $port
     * @param mixed|null $weight
     */
    public function addServer($host, $port, $weight = null)
    {
    }

    /**
     * @param array $servers
     */
    public function addServers(array $servers)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $expiration
     */
    public function append($key, $value, $expiration = null)
    {
    }

    /**
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $expiration
     */
    public function appendByKey($server_key, $key, $value, $expiration = null)
    {
    }

    /**
     * @param mixed $cas_token
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $expiration
     * @param mixed|null $udf_flags
     */
    public function cas($cas_token, $key, $value, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * @param mixed $cas_token
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $expiration
     * @param mixed|null $udf_flags
     */
    public function casByKey($cas_token, $server_key, $key, $value, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed|null $offset
     * @param mixed|null $initial_value
     * @param mixed|null $expiry
     */
    public function decrement($key, $offset = null, $initial_value = null, $expiry = null)
    {
    }

    /**
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed|null $offset
     * @param mixed|null $initial_value
     * @param mixed|null $expiry
     */
    public function decrementByKey($server_key, $key, $offset = null, $initial_value = null, $expiry = null)
    {
    }

    /**
     * See <code>unlink</code> or <code>unset</code>
     *
     * @param mixed $key
     * @param mixed|null $time
     *
     * @since None
     *
     * @link http://www.php.net/manual/en/function.delete.php
     */
    public function delete($key, $time = null)
    {
    }

    /**
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed|null $time
     */
    public function deleteByKey($server_key, $key, $time = null)
    {
    }

    /**
     * @param mixed $keys
     * @param mixed|null $time
     */
    public function deleteMulti($keys, $time = null)
    {
    }

    /**
     * @param mixed $server_key
     * @param mixed $keys
     * @param mixed|null $time
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
     * @param mixed|null $delay
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
     * @param mixed $key
     * @param mixed|null $cache_cb
     * @param mixed|null $cas_token
     * @param mixed|null $udf_flags
     */
    public function get($key, $cache_cb = null, &$cas_token = null, &$udf_flags = null)
    {
    }

    public function getAllKeys()
    {
    }

    /**
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed|null $cache_cb
     * @param mixed|null $cas_token
     * @param mixed|null $udf_flags
     */
    public function getByKey($server_key, $key, $cache_cb = null, &$cas_token = null, &$udf_flags = null)
    {
    }

    /**
     * @param array $keys
     * @param mixed|null $with_cas
     * @param mixed|null $value_cb
     */
    public function getDelayed(array $keys, $with_cas = null, $value_cb = null)
    {
    }

    /**
     * @param mixed $server_key
     * @param array $keys
     * @param mixed|null $with_cas
     * @param mixed|null $value_cb
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
     * @param array $keys
     * @param mixed|null $cas_tokens
     * @param mixed|null $flags
     * @param mixed|null $udf_flags
     */
    public function getMulti(array $keys, &$cas_tokens = null, $flags = null, &$udf_flags = null)
    {
    }

    /**
     * @param mixed $server_key
     * @param array $keys
     * @param mixed|null $cas_tokens
     * @param mixed|null $flags
     * @param mixed|null $udf_flags
     */
    public function getMultiByKey($server_key, array $keys, &$cas_tokens = null, $flags = null, &$udf_flags = null)
    {
    }

    /**
     * @param mixed $option
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
     * @param mixed $server_key
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
     * @param mixed $key
     * @param mixed|null $offset
     * @param mixed|null $initial_value
     * @param mixed|null $expiry
     */
    public function increment($key, $offset = null, $initial_value = null, $expiry = null)
    {
    }

    /**
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed|null $offset
     * @param mixed|null $initial_value
     * @param mixed|null $expiry
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
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $expiration
     */
    public function prepend($key, $value, $expiration = null)
    {
    }

    /**
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $expiration
     */
    public function prependByKey($server_key, $key, $value, $expiration = null)
    {
    }

    public function quit()
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $expiration
     * @param mixed|null $udf_flags
     */
    public function replace($key, $value, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $expiration
     * @param mixed|null $udf_flags
     */
    public function replaceByKey($server_key, $key, $value, $expiration = null, $udf_flags = null)
    {
    }

    public function resetServerList()
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $expiration
     * @param mixed|null $udf_flags
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
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $expiration
     * @param mixed|null $udf_flags
     */
    public function setByKey($server_key, $key, $value, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * @param array $items
     * @param mixed|null $expiration
     * @param mixed|null $udf_flags
     */
    public function setMulti(array $items, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * @param mixed $server_key
     * @param array $items
     * @param mixed|null $expiration
     * @param mixed|null $udf_flags
     */
    public function setMultiByKey($server_key, array $items, $expiration = null, $udf_flags = null)
    {
    }

    /**
     * @param mixed $option
     * @param mixed $value
     */
    public function setOption($option, $value)
    {
    }

    /**
     * @param mixed $options
     */
    public function setOptions($options)
    {
    }

    /**
     * @param mixed $username
     * @param mixed $password
     */
    public function setSaslAuthData($username, $password)
    {
    }

    /**
     * Sets access and modification time of file
     *
     * @param mixed $key
     * @param mixed $expiration
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
     * @param mixed $server_key
     * @param mixed $key
     * @param mixed $expiration
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
