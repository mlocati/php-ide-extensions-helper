<?php
// Start of extension: memcached
// - parsed on POSIX with PHP 7.1.15 (extension version 3.0.4)

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
     */
    public function add($key, $value, $expiration = null)
    {
    }

    /**
     * mixed $server_key
     * mixed $key
     * mixed $value
     * mixed|null $expiration
     */
    public function addByKey($server_key, $key, $value, $expiration = null)
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
     * array[] $servers
     */
    public function addServers($servers)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function append($key, $value)
    {
    }

    /**
     * mixed $server_key
     * mixed $key
     * mixed $value
     */
    public function appendByKey($server_key, $key, $value)
    {
    }

    /**
     * mixed $cas_token
     * mixed $key
     * mixed $value
     * mixed|null $expiration
     */
    public function cas($cas_token, $key, $value, $expiration = null)
    {
    }

    /**
     * mixed $cas_token
     * mixed $server_key
     * mixed $key
     * mixed $value
     * mixed|null $expiration
     */
    public function casByKey($cas_token, $server_key, $key, $value, $expiration = null)
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
     * mixed|null $get_flags
     */
    public function get($key, $cache_cb = null, $get_flags = null)
    {
    }

    public function getAllKeys()
    {
    }

    /**
     * mixed $server_key
     * mixed $key
     * mixed|null $cache_cb
     * mixed|null $get_flags
     */
    public function getByKey($server_key, $key, $cache_cb = null, $get_flags = null)
    {
    }

    /**
     * array[] $keys
     * mixed|null $with_cas
     * mixed|null $value_cb
     */
    public function getDelayed($keys, $with_cas = null, $value_cb = null)
    {
    }

    /**
     * mixed $server_key
     * array[] $keys
     * mixed|null $with_cas
     * mixed|null $value_cb
     */
    public function getDelayedByKey($server_key, $keys, $with_cas = null, $value_cb = null)
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
     * array[] $keys
     * mixed|null $get_flags
     */
    public function getMulti($keys, $get_flags = null)
    {
    }

    /**
     * mixed $server_key
     * array[] $keys
     * mixed|null $get_flags
     */
    public function getMultiByKey($server_key, $keys, $get_flags = null)
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

    /**
     * mixed|null $type
     */
    public function getStats($type = null)
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
     */
    public function prepend($key, $value)
    {
    }

    /**
     * mixed $server_key
     * mixed $key
     * mixed $value
     */
    public function prependByKey($server_key, $key, $value)
    {
    }

    public function quit()
    {
    }

    /**
     * mixed $key
     * mixed $value
     * mixed|null $expiration
     */
    public function replace($key, $value, $expiration = null)
    {
    }

    /**
     * mixed $server_key
     * mixed $key
     * mixed $value
     * mixed|null $expiration
     */
    public function replaceByKey($server_key, $key, $value, $expiration = null)
    {
    }

    public function resetServerList()
    {
    }

    /**
     * mixed $key
     * mixed $value
     * mixed|null $expiration
     */
    public function set($key, $value, $expiration = null)
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
     */
    public function setByKey($server_key, $key, $value, $expiration = null)
    {
    }

    /**
     * array[] $items
     * mixed|null $expiration
     */
    public function setMulti($items, $expiration = null)
    {
    }

    /**
     * mixed $server_key
     * array[] $items
     * mixed|null $expiration
     */
    public function setMultiByKey($server_key, $items, $expiration = null)
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
    public function touch($key, $expiration): bool
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
