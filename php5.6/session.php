<?php
// Start of extension: session
// - parsed on POSIX with PHP 5.6.34
// - parsed on Windows with PHP 5.6.34

/**
 * Since PHP 5.4.0. Return value of <code>session_status</code> if sessions are enabled,
 * and a session exists.
 *
 * @link http://www.php.net/manual/en/session.constants.php#constant.php-session-active
 *
 * @var int
 */
const PHP_SESSION_ACTIVE = 2;

/**
 * Since PHP 5.4.0. Return value of <code>session_status</code> if sessions are disabled.
 *
 * @link http://www.php.net/manual/en/session.constants.php#constant.php-session-disabled
 *
 * @var int
 */
const PHP_SESSION_DISABLED = 0;

/**
 * Since PHP 5.4.0. Return value of <code>session_status</code> if sessions are enabled,
 * but no session exists.
 *
 * @link http://www.php.net/manual/en/session.constants.php#constant.php-session-none
 *
 * @var int
 */
const PHP_SESSION_NONE = 1;

/**
 * <code>SessionHandlerInterface</code> is an
 * interface which defines a
 * prototype for creating a custom session handler. In order to pass a custom
 * session handler to <code>session_set_save_handler</code> using its
 * <code>OOP</code> invocation, the class must implement this interface.
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.sessionhandlerinterface.php
 */
interface SessionHandlerInterface
{
    /**
     * Close the session
     *
     * @return bool
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandlerinterface.close.php
     */
    public function close();

    /**
     * Destroy a session
     *
     * @param mixed $key
     *
     * @return bool
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandlerinterface.destroy.php
     */
    public function destroy($key);

    /**
     * Cleanup old sessions
     *
     * @param mixed $maxlifetime
     *
     * @return int
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandlerinterface.gc.php
     */
    public function gc($maxlifetime);

    /**
     * Initialize session
     *
     * @param mixed $save_path
     * @param mixed $session_name
     *
     * @return bool
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandlerinterface.open.php
     */
    public function open($save_path, $session_name);

    /**
     * Read session data
     *
     * @param mixed $key
     *
     * @return string
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandlerinterface.read.php
     */
    public function read($key);

    /**
     * Write session data
     *
     * @param mixed $key
     * @param mixed $val
     *
     * @return bool
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandlerinterface.write.php
     */
    public function write($key, $val);
}

/**
 * @since PHP 5 >= 5.5.1, PHP 7
 *
 * @link http://www.php.net/manual/en/class.sessionidinterface.php
 */
interface SessionIdInterface
{
    /**
     * Create session ID
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.1, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionidinterface.create-sid.php
     */
    public function create_sid();
}

/**
 * <code>SessionHandler</code> is a special class that can be used
 * to expose the current internal PHP session save handler by inheritance.
 * There are seven methods which wrap the seven internal session save handler
 * callbacks (<code>open</code>, <code>close</code>,
 * <code>read</code>, <code>write</code>,
 * <code>destroy</code>, <code>gc</code> and
 * <code>create_sid</code>). By default, this class will wrap
 * whatever internal save handler is set as defined by the
 * session.save_handler
 * configuration directive which is usually <code>files</code> by
 * default. Other internal session save handlers are provided by PHP
 * extensions such as SQLite (as <code>sqlite</code>), Memcache (as
 * <code>memcache</code>), and Memcached (as
 * <code>memcached</code>).
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.sessionhandler.php
 */
class SessionHandler implements SessionHandlerInterface, SessionIdInterface
{
    /**
     * Close the session
     *
     * @return bool
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandler.close.php
     */
    public function close()
    {
    }

    /**
     * Return a new session ID
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.1, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandler.create-sid.php
     */
    public function create_sid()
    {
    }

    /**
     * Destroy a session
     *
     * @param mixed $key
     *
     * @return bool
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandler.destroy.php
     */
    public function destroy($key)
    {
    }

    /**
     * Cleanup old sessions
     *
     * @param mixed $maxlifetime
     *
     * @return int
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandler.gc.php
     */
    public function gc($maxlifetime)
    {
    }

    /**
     * Initialize session
     *
     * @param mixed $save_path
     * @param mixed $session_name
     *
     * @return bool
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandler.open.php
     */
    public function open($save_path, $session_name)
    {
    }

    /**
     * Read session data
     *
     * @param mixed $key
     *
     * @return string
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandler.read.php
     */
    public function read($key)
    {
    }

    /**
     * Write session data
     *
     * @param mixed $key
     * @param mixed $val
     *
     * @return bool
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandler.write.php
     */
    public function write($key, $val)
    {
    }
}

/**
 * Discard session array changes and finish session
 *
 * @return bool
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-abort.php
 */
function session_abort()
{
}

/**
 * Return current cache expire
 *
 * @param mixed|null $new_cache_expire
 *
 * @return int
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-cache-expire.php
 */
function session_cache_expire($new_cache_expire = null)
{
}

/**
 * Get and/or set the current cache limiter
 *
 * @param mixed|null $cache_limiter
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-cache-limiter.php
 */
function session_cache_limiter($cache_limiter = null)
{
}

/**
 * Alias of <code>session_write_close</code>
 *
 * @since PHP 4 >= 4.4.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-commit.php
 */
function session_commit()
{
}

/**
 * Decodes session data from a session encoded string
 *
 * @param mixed $data
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-decode.php
 */
function session_decode($data)
{
}

/**
 * Destroys all data registered to a session
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-destroy.php
 */
function session_destroy()
{
}

/**
 * Encodes the current session data as a session encoded string
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-encode.php
 */
function session_encode()
{
}

/**
 * Get the session cookie parameters
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-get-cookie-params.php
 */
function session_get_cookie_params(): array
{
}

/**
 * Get and/or set the current session id
 *
 * @param mixed|null $id
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-id.php
 */
function session_id($id = null)
{
}

/**
 * Get and/or set the current session module
 *
 * @param mixed|null $module
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-module-name.php
 */
function session_module_name($module = null)
{
}

/**
 * Get and/or set the current session name
 *
 * @param mixed|null $name
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-name.php
 */
function session_name($name = null)
{
}

/**
 * Update the current session id with a newly generated one
 *
 * @param mixed|null $delete_old_session
 *
 * @return bool
 *
 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-regenerate-id.php
 */
function session_regenerate_id($delete_old_session = null)
{
}

/**
 * Session shutdown function
 *
 * @return void
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-register-shutdown.php
 */
function session_register_shutdown()
{
}

/**
 * Re-initialize session array with original values
 *
 * @return bool
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-reset.php
 */
function session_reset()
{
}

/**
 * Get and/or set the current session save path
 *
 * @param mixed|null $path
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-save-path.php
 */
function session_save_path($path = null)
{
}

/**
 * Set the session cookie parameters
 *
 * @param mixed $lifetime
 * @param mixed|null $path
 * @param mixed|null $domain
 * @param mixed|null $secure
 * @param mixed|null $httponly
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-set-cookie-params.php
 */
function session_set_cookie_params($lifetime, $path = null, $domain = null, $secure = null, $httponly = null)
{
}

/**
 * Sets user-level session storage functions
 *
 * @param mixed $open
 * @param mixed|null $close
 * @param mixed|null $read
 * @param mixed|null $write
 * @param mixed|null $destroy
 * @param mixed|null $gc
 * @param mixed|null $create_sid
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-set-save-handler.php
 */
function session_set_save_handler($open, $close = null, $read = null, $write = null, $destroy = null, $gc = null, $create_sid = null)
{
}

/**
 * Start new or resume existing session
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-start.php
 */
function session_start()
{
}

/**
 * Returns the current session status
 *
 * @return int
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-status.php
 */
function session_status()
{
}

/**
 * Free all session variables
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-unset.php
 */
function session_unset()
{
}

/**
 * Write session data and end session
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-write-close.php
 */
function session_write_close()
{
}
