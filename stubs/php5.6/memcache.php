<?php
// Start of extension: memcache
// - parsed on POSIX with PHP 5.6.35 (extension version 2.2.7)

/**
 * Used to turn on-the-fly data compression on with
 * <code>Memcache::set</code>,
 * <code>Memcache::add</code> and
 * <code>Memcache::replace</code>.
 *
 * @link http://www.php.net/manual/en/memcache.constants.php#constantmemcache-compressed
 *
 * @var int
 */
const MEMCACHE_COMPRESSED = 2;

/**
 * 1 if this Memcache session handler is available, 0 otherwise.
 *
 * @link http://www.php.net/manual/en/memcache.constants.php#constantmemcache-have-session
 *
 * @var int
 */
const MEMCACHE_HAVE_SESSION = 1;

/**
 * Represents a connection to a set of memcache servers.
 *
 * @since PECL memcache >= 0.2.0
 *
 * @link http://www.php.net/manual/en/class.memcache.php
 */
class Memcache
{
    /**
     * Add an item to the server
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * Returns <code>FALSE</code> if such key already exist. For the rest
     * <code>Memcache::add</code> behaves similarly to
     * <code>Memcache::set</code>.
     *
     * @since PECL memcache >= 0.2.0
     *
     * @link http://www.php.net/manual/en/memcache.add.php
     */
    public function add()
    {
    }

    /**
     * Add a memcached server to connection pool
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcache >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcache.addserver.php
     */
    public function addserver()
    {
    }

    /**
     * Close memcached server connection
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcache >= 0.4.0
     *
     * @link http://www.php.net/manual/en/memcache.close.php
     */
    public function close()
    {
    }

    /**
     * Open memcached server connection
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcache >= 0.2.0
     *
     * @link http://www.php.net/manual/en/memcache.connect.php
     */
    public function connect()
    {
    }

    /**
     * Decrement item's value
     *
     * @return int Returns item's new value on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcache >= 0.2.0
     *
     * @link http://www.php.net/manual/en/memcache.decrement.php
     */
    public function decrement()
    {
    }

    /**
     * Delete item from the server
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcache >= 0.2.0
     *
     * @link http://www.php.net/manual/en/memcache.delete.php
     */
    public function delete()
    {
    }

    /**
     * Flush all existing items at the server
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcache >= 1.0.0
     *
     * @link http://www.php.net/manual/en/memcache.flush.php
     */
    public function flush()
    {
    }

    /**
     * Retrieve item from the server
     *
     * @return string Returns the value associated with the <code>key</code> or
     * an array of found key-value pairs when <code>key</code> is an <code>array</code>.
     * Returns <code>FALSE</code> on failure, <code>key</code> is not found or
     * <code>key</code> is an empty <code>array</code>.
     *
     * @since PECL memcache >= 0.2.0
     *
     * @link http://www.php.net/manual/en/memcache.get.php
     */
    public function get()
    {
    }

    /**
     * Get statistics from all servers in pool
     *
     * @return array Returns a two-dimensional associative array of server statistics or <code>FALSE</code>
     * on failure.
     *
     * @since PECL memcache >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcache.getextendedstats.php
     */
    public function getextendedstats()
    {
    }

    /**
     * Returns server status
     *
     * @return int Returns a the servers status. 0 if server is failed, non-zero otherwise
     *
     * @since PECL memcache >= 2.1.0
     *
     * @link http://www.php.net/manual/en/memcache.getserverstatus.php
     */
    public function getserverstatus()
    {
    }

    /**
     * Get statistics of the server
     *
     * @return array Returns an associative array of server statistics or <code>FALSE</code> on failure.
     *
     * @since PECL memcache >= 0.2.0
     *
     * @link http://www.php.net/manual/en/memcache.getstats.php
     */
    public function getstats()
    {
    }

    /**
     * Return version of the server
     *
     * @return string Returns a string of server version number or <code>FALSE</code> on failure.
     *
     * @since PECL memcache >= 0.2.0
     *
     * @link http://www.php.net/manual/en/memcache.getversion.php
     */
    public function getversion()
    {
    }

    /**
     * Increment item's value
     *
     * @return int Returns new items value on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcache >= 0.2.0
     *
     * @link http://www.php.net/manual/en/memcache.increment.php
     */
    public function increment()
    {
    }

    /**
     * Open memcached server persistent connection
     *
     * @return mixed Returns a Memcache object or <code>FALSE</code> on failure.
     *
     * @since PECL memcache >= 0.4.0
     *
     * @link http://www.php.net/manual/en/memcache.pconnect.php
     */
    public function pconnect()
    {
    }

    /**
     * Replace value of the existing item
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcache >= 0.2.0
     *
     * @link http://www.php.net/manual/en/memcache.replace.php
     */
    public function replace()
    {
    }

    /**
     * Store data at the server
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcache >= 0.2.0
     *
     * @link http://www.php.net/manual/en/memcache.set.php
     */
    public function set()
    {
    }

    /**
     * Enable automatic compression of large values
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcache >= 2.0.0
     *
     * @link http://www.php.net/manual/en/memcache.setcompressthreshold.php
     */
    public function setcompressthreshold()
    {
    }

    public function setoptimeout()
    {
    }

    /**
     * Changes server parameters and status at runtime
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL memcache >= 2.1.0
     *
     * @link http://www.php.net/manual/en/memcache.setserverparams.php
     */
    public function setserverparams()
    {
    }
}

function memcache_add()
{
}

function memcache_add_server()
{
}

function memcache_close()
{
}

function memcache_connect()
{
}

/**
 * Turn debug output on/off
 *
 * @return bool Returns <code>TRUE</code> if PHP was built with --enable-debug option, otherwise
 * returns <code>FALSE</code>.
 *
 * @link http://www.php.net/manual/en/function.memcache-debug.php
 */
function memcache_debug()
{
}

function memcache_decrement()
{
}

function memcache_delete()
{
}

function memcache_flush()
{
}

function memcache_get()
{
}

function memcache_get_extended_stats()
{
}

function memcache_get_server_status()
{
}

function memcache_get_stats()
{
}

function memcache_get_version()
{
}

function memcache_increment()
{
}

function memcache_pconnect()
{
}

function memcache_replace()
{
}

function memcache_set()
{
}

function memcache_set_compress_threshold()
{
}

function memcache_set_server_params()
{
}

function memcache_setoptimeout()
{
}
