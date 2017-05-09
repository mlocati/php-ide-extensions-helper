<?php
// Documentation generated automatically for extension session v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
/*
 * INI entries:
 * session.save_path = ''
 * session.name = 'PHPSESSID'
 * session.save_handler = 'files'
 * session.auto_start = '0'
 * session.gc_probability = '1'
 * session.gc_divisor = '100'
 * session.gc_maxlifetime = '1440'
 * session.serialize_handler = 'php'
 * session.cookie_lifetime = '0'
 * session.cookie_path = '/'
 * session.cookie_domain = ''
 * session.cookie_secure = ''
 * session.cookie_httponly = ''
 * session.use_cookies = '1'
 * session.use_only_cookies = '1'
 * session.use_strict_mode = '0'
 * session.referer_check = ''
 * session.cache_limiter = 'nocache'
 * session.cache_expire = '180'
 * session.use_trans_sid = '0'
 * session.sid_length = '32'
 * session.sid_bits_per_character = '4'
 * session.lazy_write = '1'
 * session.upload_progress.enabled = '1'
 * session.upload_progress.cleanup = '1'
 * session.upload_progress.prefix = 'upload_progress_'
 * session.upload_progress.name = 'PHP_SESSION_UPLOAD_PROGRESS'
 * session.upload_progress.freq = '1%'
 * session.upload_progress.min_freq = '1'
 */
const PHP_SESSION_ACTIVE = 2;
const PHP_SESSION_DISABLED = 0;
const PHP_SESSION_NONE = 1;
interface SessionHandlerInterface
{
    public function close();
    public function destroy($key);
    public function gc($maxlifetime);
    public function open($save_path, $session_name);
    public function read($key);
    public function write($key, $val);
}
interface SessionIdInterface
{
    public function create_sid();
}
interface SessionUpdateTimestampHandlerInterface
{
    public function updateTimestamp($key, $val);
    public function validateId($key);
}
class SessionHandler implements SessionHandlerInterface, SessionIdInterface
{
    public function close()
    {
    }
    public function create_sid()
    {
    }
    public function destroy($key)
    {
    }
    public function gc($maxlifetime)
    {
    }
    public function open($save_path, $session_name)
    {
    }
    public function read($key)
    {
    }
    public function write($key, $val)
    {
    }
}
function session_name($name = null)
{
}
function session_module_name($module = null)
{
}
function session_save_path($path = null)
{
}
function session_id($id = null)
{
}
function session_create_id($prefix = null)
{
}
function session_regenerate_id($delete_old_session = null)
{
}
function session_decode($data)
{
}
function session_encode()
{
}
function session_start()
{
}
function session_destroy()
{
}
function session_unset()
{
}
function session_gc()
{
}
function session_set_save_handler($open, $close = null, $read = null, $write = null, $destroy = null, $gc = null, $create_sid = null, $validate_sid = null, $update_timestamp = null)
{
}
function session_cache_limiter($cache_limiter = null)
{
}
function session_cache_expire($new_cache_expire = null)
{
}
function session_set_cookie_params($lifetime, $path = null, $domain = null, $secure = null, $httponly = null)
{
}
function session_get_cookie_params()
{
}
function session_write_close()
{
}
function session_abort()
{
}
function session_reset()
{
}
function session_status()
{
}
function session_register_shutdown()
{
}
function session_commit()
{
}