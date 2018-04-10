<?php
// Start of extension: session
// - parsed on POSIX with PHP 5.6.35
// - parsed on Windows with PHP 5.6.35

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
     * @return bool The return value (usually <code>TRUE</code> on success, <code>FALSE</code> on failure). Note this value is returned internally to PHP for processing.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandlerinterface.close.php
     */
    public function close();

    /**
     * Destroy a session
     *
     * @param string $session_id The session ID being destroyed.
     *
     * @return bool The return value (usually <code>TRUE</code> on success, <code>FALSE</code> on failure). Note this value is returned internally to PHP for processing.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandlerinterface.destroy.php
     */
    public function destroy($session_id);

    /**
     * Cleanup old sessions
     *
     * @param int $maxlifetime Sessions that have not updated for the last <code>maxlifetime</code> seconds will be removed.
     *
     * @return int The return value (usually <code>TRUE</code> on success, <code>FALSE</code> on failure). Note this value is returned internally to PHP for processing.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandlerinterface.gc.php
     */
    public function gc($maxlifetime);

    /**
     * Initialize session
     *
     * @param string $save_path The path where to store/retrieve the session.
     * @param string $session_name The session name.
     *
     * @return bool The return value (usually <code>TRUE</code> on success, <code>FALSE</code> on failure). Note this value is returned internally to PHP for processing.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandlerinterface.open.php
     */
    public function open($save_path, $session_name);

    /**
     * Read session data
     *
     * @param string $session_id The session id.
     *
     * @return string Returns an encoded string of the read data. If nothing was read, it must return an empty string. Note this value is returned internally to PHP for processing.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandlerinterface.read.php
     */
    public function read($session_id);

    /**
     * Write session data
     *
     * @param string $session_id The session id.
     * @param string $session_data The encoded session data. This data is the result of the PHP internally encoding the <code>$_SESSION</code> superglobal to a serialized
     * string and passing it as this parameter. Please note sessions use an alternative serialization method.
     *
     * @return bool The return value (usually <code>TRUE</code> on success, <code>FALSE</code> on failure). Note this value is returned internally to PHP for processing.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandlerinterface.write.php
     */
    public function write($session_id, $session_data);
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
     * @return bool The return value (usually <code>TRUE</code> on success, <code>FALSE</code> on failure). Note this value is returned internally to PHP for processing.
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
     * @return string A session ID valid for the default session handler.
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
     * @param string $session_id The session ID being destroyed.
     *
     * @return bool The return value (usually <code>TRUE</code> on success, <code>FALSE</code> on failure). Note this value is returned internally to PHP for processing.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandler.destroy.php
     */
    public function destroy($session_id)
    {
    }

    /**
     * Cleanup old sessions
     *
     * @param int $maxlifetime Sessions that have not updated for the last <code>maxlifetime</code> seconds will be removed.
     *
     * @return int The return value (usually <code>TRUE</code> on success, <code>FALSE</code> on failure). Note this value is returned internally to PHP for processing.
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
     * @param string $save_path The path where to store/retrieve the session.
     * @param string $session_name The session name.
     *
     * @return bool The return value (usually <code>TRUE</code> on success, <code>FALSE</code> on failure). Note this value is returned internally to PHP for processing.
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
     * @param string $session_id The session id to read data for.
     *
     * @return string Returns an encoded string of the read data. If nothing was read, it must return an empty string. Note this value is returned internally to PHP for processing.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandler.read.php
     */
    public function read($session_id)
    {
    }

    /**
     * Write session data
     *
     * @param string $session_id The session id.
     * @param string $session_data The encoded session data. This data is the result of the PHP internally encoding the <code>$_SESSION</code> superglobal to a serialized
     * string and passing it as this parameter. Please note sessions use an alternative serialization method.
     *
     * @return bool The return value (usually <code>TRUE</code> on success, <code>FALSE</code> on failure). Note this value is returned internally to PHP for processing.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/sessionhandler.write.php
     */
    public function write($session_id, $session_data)
    {
    }
}

/**
 * Discard session array changes and finish session
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
 * @param string $new_cache_expire If <code>new_cache_expire</code> is given, the current cache
 * expire is replaced with <code>new_cache_expire</code>.
 *
 * @return int Returns the current setting of <code>session.cache_expire</code>.
 * The value returned should be read in minutes, defaults to 180.
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
 * @param string $cache_limiter If <code>cache_limiter</code> is specified, the name of the
 * current cache limiter is changed to the new value.
 *
 * @return string Returns the name of the current cache limiter.
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
 * @param string $data The encoded data to be stored.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
 * @return string Returns the contents of the current session encoded.
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
 * @return array Returns an array with the current session cookie information, the array
 * contains the following items:
 * <ul>
 * "lifetime" - The
 * lifetime of the cookie in seconds.
 * "path" - The path where
 * information is stored.
 * "domain" - The domain
 * of the cookie.
 * "secure" - The cookie
 * should only be sent over secure connections.
 * "httponly" - The
 * cookie can only be accessed through the HTTP protocol.
 * </ul>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-get-cookie-params.php
 */
function session_get_cookie_params()
{
}

/**
 * Get and/or set the current session id
 *
 * @param string $id If <code>id</code> is specified, it will replace the current
 * session id. <code>session_id</code> needs to be called before
 * <code>session_start</code> for that purpose. Depending on the
 * session handler, not all characters are allowed within the session id.
 * For example, the file session handler only allows characters in the
 * range <code>a-z A-Z 0-9 , (comma) and - (minus)</code>!
 *
 * @return string <code>session_id</code> returns the session id for the current
 * session or the empty string (<code>""</code>) if there is no current
 * session (no current session id exists).
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
 * @param string $module If <code>module</code> is specified, that module will be
 * used instead.
 *
 * @return string Returns the name of the current session module.
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
 * @param string $name The session name references the name of the session, which is
 * used in cookies and URLs (e.g. <code>PHPSESSID</code>). It
 * should contain only alphanumeric characters; it should be short and
 * descriptive (i.e. for users with enabled cookie warnings).
 * If <code>name</code> is specified, the name of the current
 * session is changed to its value.
 *
 * @return string Returns the name of the current session. If <code>name</code> is given
 * and function updates the session name, name of the <code>old</code> session
 * is returned.
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
 * @param bool|null $delete_old_session Whether to delete the old associated session file or not.
 * You should not delete old session if you need to avoid
 * races caused by deletion or detect/avoid session hijack
 * attacks.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-regenerate-id.php
 */
function session_regenerate_id($delete_old_session = false)
{
}

/**
 * Session shutdown function
 *
 * @return void No value is returned.
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
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
 * @param string $path Session data path. If specified, the path to which data is saved will
 * be changed. <code>session_save_path</code> needs to be called
 * before <code>session_start</code> for that purpose.
 *
 * @return string Returns the path of the current directory used for data storage.
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
 * @param int $lifetime Lifetime of the
 * session cookie, defined in seconds.
 * @param string $path Path on the domain where
 * the cookie will work. Use a single slash ('/') for all paths on the
 * domain.
 * @param string $domain Cookie domain, for
 * example 'www.php.net'. To make cookies visible on all subdomains then
 * the domain must be prefixed with a dot like '.php.net'.
 * @param bool|null $secure If <code>TRUE</code> cookie will only be sent over
 * secure connections.
 * @param bool|null $httponly If set to <code>TRUE</code> then PHP will attempt to send the
 * httponly
 * flag when setting the session cookie.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-set-cookie-params.php
 */
function session_set_cookie_params($lifetime, $path = null, $domain = null, $secure = false, $httponly = false)
{
}

/**
 * Sets user-level session storage functions
 *
 * @param callable $open
 * @param callable $close
 * @param callable $read
 * @param callable $write
 * @param callable $destroy
 * @param callable $gc
 * @param callable $create_sid
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-set-save-handler.php
 */
function session_set_save_handler(callable $open, callable $close = null, callable $read = null, callable $write = null, callable $destroy = null, callable $gc = null, callable $create_sid = null)
{
}

/**
 * Start new or resume existing session
 *
 * @return bool This function returns <code>TRUE</code> if a session was successfully started,
 * otherwise <code>FALSE</code>.
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
 * @return int <ul>
 * <code>PHP_SESSION_DISABLED</code> if sessions are disabled.
 * <code>PHP_SESSION_NONE</code> if sessions are enabled, but none exists.
 * <code>PHP_SESSION_ACTIVE</code> if sessions are enabled, and one exists.
 * </ul>
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
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.session-write-close.php
 */
function session_write_close()
{
}
