<?php
// Start of extension: memcache
// - parsed on POSIX with PHP 5.6.34 (extension version 2.2.7)

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
    public function add()
    {
    }

    public function addserver()
    {
    }

    public function close()
    {
    }

    public function connect()
    {
    }

    public function decrement()
    {
    }

    /**
     * See <code>unlink</code> or <code>unset</code>
     *
     * @since None
     *
     * @link http://www.php.net/manual/en/function.delete.php
     */
    public function delete()
    {
    }

    /**
     * Flush system output buffer
     *
     * @return void
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.flush.php
     */
    public function flush()
    {
    }

    public function get()
    {
    }

    public function getextendedstats()
    {
    }

    public function getserverstatus()
    {
    }

    public function getstats()
    {
    }

    public function getversion()
    {
    }

    public function increment()
    {
    }

    public function pconnect()
    {
    }

    public function replace()
    {
    }

    public function set()
    {
    }

    public function setcompressthreshold()
    {
    }

    public function setoptimeout()
    {
    }

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
 * @return bool
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
