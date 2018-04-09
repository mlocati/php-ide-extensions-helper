<?php
// Start of extension: ssh2
// - parsed on POSIX with PHP 5.6.34 (extension version 0.13)

/**
 * Default terminal height requested by <code>ssh2_shell</code>.
 *
 * @link http://www.php.net/manual/en/ssh2.constants.php#constant.ssh2-default-term-height
 *
 * @var int
 */
const SSH2_DEFAULT_TERM_HEIGHT = 25;

/**
 * Default terminal units requested by <code>ssh2_shell</code>.
 *
 * @link http://www.php.net/manual/en/ssh2.constants.php#constant.ssh2-default-term-unit
 *
 * @var int
 */
const SSH2_DEFAULT_TERM_UNIT = 0;

/**
 * Default terminal width requested by <code>ssh2_shell</code>.
 *
 * @link http://www.php.net/manual/en/ssh2.constants.php#constant.ssh2-default-term-width
 *
 * @var int
 */
const SSH2_DEFAULT_TERM_WIDTH = 80;

/**
 * Default terminal type (e.g. vt102, ansi, xterm, vanilla) requested
 * by <code>ssh2_shell</code>.
 *
 * @link http://www.php.net/manual/en/ssh2.constants.php#constant.ssh2-default-terminal
 *
 * @var string
 */
const SSH2_DEFAULT_TERMINAL = 'vanilla';

/**
 * Flag to <code>ssh2_fingerprint</code> requesting hostkey
 * fingerprint as a string of hexits.
 *
 * @link http://www.php.net/manual/en/ssh2.constants.php#constant.ssh2-fingerprint-hex
 *
 * @var int
 */
const SSH2_FINGERPRINT_HEX = 0;

/**
 * Flag to <code>ssh2_fingerprint</code> requesting hostkey
 * fingerprint as an MD5 hash.
 *
 * @link http://www.php.net/manual/en/ssh2.constants.php#constant.ssh2-fingerprint-md5
 *
 * @var int
 */
const SSH2_FINGERPRINT_MD5 = 0;

/**
 * Flag to <code>ssh2_fingerprint</code> requesting hostkey
 * fingerprint as a raw string of 8-bit characters.
 *
 * @link http://www.php.net/manual/en/ssh2.constants.php#constant.ssh2-fingerprint-raw
 *
 * @var int
 */
const SSH2_FINGERPRINT_RAW = 2;

/**
 * Flag to <code>ssh2_fingerprint</code> requesting hostkey
 * fingerprint as an SHA1 hash.
 *
 * @link http://www.php.net/manual/en/ssh2.constants.php#constant.ssh2-fingerprint-sha1
 *
 * @var int
 */
const SSH2_FINGERPRINT_SHA1 = 1;

/**
 * @var int
 */
const SSH2_POLL_CHANNEL_CLOSED = 128;

/**
 * @var int
 */
const SSH2_POLL_LISTENER_CLOSED = 128;

/**
 * @var int
 */
const SSH2_POLL_SESSION_CLOSED = 16;

/**
 * @var int
 */
const SSH2_POLLERR = 8;

/**
 * @var int
 */
const SSH2_POLLEXT = 2;

/**
 * @var int
 */
const SSH2_POLLHUP = 16;

/**
 * @var int
 */
const SSH2_POLLIN = 1;

/**
 * @var int
 */
const SSH2_POLLNVAL = 32;

/**
 * @var int
 */
const SSH2_POLLOUT = 4;

/**
 * Flag to <code>ssh2_fetch_stream</code> requesting STDERR subchannel.
 *
 * @link http://www.php.net/manual/en/ssh2.constants.php#constant.ssh2-stream-stderr
 *
 * @var int
 */
const SSH2_STREAM_STDERR = 1;

/**
 * Flag to <code>ssh2_fetch_stream</code> requesting STDIO subchannel.
 *
 * @link http://www.php.net/manual/en/ssh2.constants.php#constant.ssh2-stream-stdio
 *
 * @var int
 */
const SSH2_STREAM_STDIO = 0;

/**
 * Flag to <code>ssh2_shell</code> specifying that
 * <code>width</code> and <code>height</code>
 * are provided as character sizes.
 *
 * @link http://www.php.net/manual/en/ssh2.constants.php#constant.ssh2-term-unit-chars
 *
 * @var int
 */
const SSH2_TERM_UNIT_CHARS = 0;

/**
 * Flag to <code>ssh2_shell</code> specifying that
 * <code>width</code> and <code>height</code>
 * are provided in pixel units.
 *
 * @link http://www.php.net/manual/en/ssh2.constants.php#constant.ssh2-term-unit-pixels
 *
 * @var int
 */
const SSH2_TERM_UNIT_PIXELS = 1;

/**
 * Authenticate over SSH using the ssh agent
 *
 * @param resource $session An SSH connection link identifier, obtained from a call to
 * <code>ssh2_connect</code>.
 * @param string $username Remote user name.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PECL ssh2 >= 0.12
 *
 * @link http://www.php.net/manual/en/function.ssh2-auth-agent.php
 */
function ssh2_auth_agent($session, $username)
{
}

/**
 * Authenticate using a public hostkey
 *
 * @param resource $session An SSH connection link identifier, obtained from a call to
 * <code>ssh2_connect</code>.
 * @param string $username
 * @param string $hostname
 * @param string $pubkeyfile
 * @param string $privkeyfile
 * @param string $passphrase If <code>privkeyfile</code> is encrypted (which it should
 * be), the passphrase must be provided.
 * @param string $local_username If <code>local_username</code> is omitted, then the value
 * for <code>username</code> will be used for it.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-auth-hostbased-file.php
 */
function ssh2_auth_hostbased_file($session, $username, $hostname, $pubkeyfile, $privkeyfile, $passphrase = null, $local_username = null)
{
}

/**
 * Authenticate as "none"
 *
 * @param resource $session An SSH connection link identifier, obtained from a call to
 * <code>ssh2_connect</code>.
 * @param string $username Remote user name.
 *
 * @return mixed Returns <code>TRUE</code> if the server does accept "none" as an authentication
 * method, or an array of accepted authentication methods on failure.
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-auth-none.php
 */
function ssh2_auth_none($session, $username)
{
}

/**
 * Authenticate over SSH using a plain password
 *
 * @param resource $session An SSH connection link identifier, obtained from a call to
 * <code>ssh2_connect</code>.
 * @param string $username Remote user name.
 * @param string $password Password for <code>username</code>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-auth-password.php
 */
function ssh2_auth_password($session, $username, $password)
{
}

/**
 * Authenticate using a public key
 *
 * @param resource $session An SSH connection link identifier, obtained from a call to
 * <code>ssh2_connect</code>.
 * @param string $username
 * @param string $pubkeyfile The public key file needs to be in OpenSSH's format. It should look something like:
 * @param string $privkeyfile
 * @param string $passphrase If <code>privkeyfile</code> is encrypted (which it should
 * be), the <code>passphrase</code> must be provided.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-auth-pubkey-file.php
 */
function ssh2_auth_pubkey_file($session, $username, $pubkeyfile, $privkeyfile, $passphrase = null)
{
}

/**
 * Connect to an SSH server
 *
 * @param string $host
 * @param int|null $port
 *
 * @return resource Returns a resource on success, or <code>FALSE</code> on error.
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-connect.php
 */
function ssh2_connect($host, $port = 22)
{
}

/**
 * Execute a command on a remote server
 *
 * @param resource $session An SSH connection link identifier, obtained from a call to
 * <code>ssh2_connect</code>.
 * @param string $command
 * @param string $pty
 * @param array $env <code>env</code> may be passed as an associative array of
 * name/value pairs to set in the target environment.
 * @param int|null $width Width of the virtual terminal.
 * @param int|null $height Height of the virtual terminal.
 * @param int|null $width_height_type <code>width_height_type</code> should be one of
 * <code>SSH2_TERM_UNIT_CHARS</code> or
 * <code>SSH2_TERM_UNIT_PIXELS</code>.
 *
 * @return resource Returns a stream on success or <code>FALSE</code> on failure.
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-exec.php
 */
function ssh2_exec($session, $command, $pty = null, array $env = null, $width = 80, $height = 25, $width_height_type = SSH2_TERM_UNIT_CHARS)
{
}

/**
 * Fetch an extended data stream
 *
 * @param resource $channel
 * @param int $streamid An SSH2 channel stream.
 *
 * @return resource Returns the requested stream resource.
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-fetch-stream.php
 */
function ssh2_fetch_stream($channel, $streamid)
{
}

/**
 * Retrieve fingerprint of remote server
 *
 * @param resource $session An SSH connection link identifier, obtained from a call to
 * <code>ssh2_connect</code>.
 * @param int|null $flags <code>flags</code> may be either of
 * <code>SSH2_FINGERPRINT_MD5</code> or
 * <code>SSH2_FINGERPRINT_SHA1</code> logically ORed with
 * <code>SSH2_FINGERPRINT_HEX</code> or
 * <code>SSH2_FINGERPRINT_RAW</code>.
 *
 * @return string Returns the hostkey hash as a string.
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-fingerprint.php
 */
function ssh2_fingerprint($session, $flags = SSH2_FINGERPRINT_MD5 | SSH2_FINGERPRINT_HEX)
{
}

/**
 * @since PECL ssh2 >= 0.9.0
 */
function ssh2_forward_accept()
{
}

/**
 * @since PECL ssh2 >= 0.9.0
 */
function ssh2_forward_listen()
{
}

/**
 * Return list of negotiated methods
 *
 * @param resource $session An SSH connection link identifier, obtained from a call to
 * <code>ssh2_connect</code>.
 *
 * @return array
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-methods-negotiated.php
 */
function ssh2_methods_negotiated($session)
{
}

/**
 * @param mixed $foo1
 *
 * @since PECL ssh2 >= 0.9.0
 */
function ssh2_poll(&$foo1)
{
}

/**
 * Add an authorized publickey
 *
 * @param resource $pkey Publickey Subsystem resource created by <code>ssh2_publickey_init</code>.
 * @param string $algoname Publickey algorithm (e.g.): ssh-dss, ssh-rsa
 * @param string $blob Publickey blob as raw binary data
 * @param bool|null $overwrite If the specified key already exists, should it be overwritten?
 * @param array $attributes Associative array of attributes to assign to this public key.
 * Refer to ietf-secsh-publickey-subsystem for a list of supported attributes.
 * To mark an attribute as mandatory, precede its name with an asterisk.
 * If the server is unable to support an attribute marked mandatory,
 * it will abort the add process.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PECL ssh2 >= 0.10
 *
 * @link http://www.php.net/manual/en/function.ssh2-publickey-add.php
 */
function ssh2_publickey_add($pkey, $algoname, $blob, $overwrite = false, array $attributes = null)
{
}

/**
 * Initialize Publickey subsystem
 *
 * @param resource $session
 *
 * @return resource Returns an <code>SSH2 Publickey Subsystem</code> resource for use
 * with all other ssh2_publickey_*() methods or <code>FALSE</code> on failure.
 *
 * @since PECL ssh2 >= 0.10
 *
 * @link http://www.php.net/manual/en/function.ssh2-publickey-init.php
 */
function ssh2_publickey_init($session)
{
}

/**
 * List currently authorized publickeys
 *
 * @param resource $pkey Publickey Subsystem resource
 *
 * @return array Returns a numerically indexed array of keys,
 * each of which is an associative array containing:
 * name, blob, and attrs elements.
 * <table>
 * <title>Publickey elements</title>
 * <thead>
 * <tr>
 * <td>Array Key</td><td>Meaning</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>name</td><td>Name of algorithm used by this publickey, for example:
 * <code>ssh-dss</code> or <code>ssh-rsa</code>.</td>
 * </tr>
 * <tr>
 * <td>blob</td><td>Publickey blob as raw binary data.</td>
 * </tr>
 * <tr>
 * <td>attrs</td><td>Attributes assigned to this publickey. The most common
 * attribute, and the only one supported by publickey version 1
 * servers, is <code>comment</code>, which may be any freeform
 * string.</td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @since PECL ssh2 >= 0.10
 *
 * @link http://www.php.net/manual/en/function.ssh2-publickey-list.php
 */
function ssh2_publickey_list($pkey)
{
}

/**
 * Remove an authorized publickey
 *
 * @param resource $pkey Publickey Subsystem Resource
 * @param string $algoname Publickey algorithm (e.g.): ssh-dss, ssh-rsa
 * @param string $blob Publickey blob as raw binary data
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PECL ssh2 >= 0.10
 *
 * @link http://www.php.net/manual/en/function.ssh2-publickey-remove.php
 */
function ssh2_publickey_remove($pkey, $algoname, $blob)
{
}

/**
 * Request a file via SCP
 *
 * @param resource $session An SSH connection link identifier, obtained from a call to
 * <code>ssh2_connect</code>.
 * @param string $remote_file Path to the remote file.
 * @param string $local_file Path to the local file.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-scp-recv.php
 */
function ssh2_scp_recv($session, $remote_file, $local_file)
{
}

/**
 * Send a file via SCP
 *
 * @param resource $session An SSH connection link identifier, obtained from a call to
 * <code>ssh2_connect</code>.
 * @param string $local_file Path to the local file.
 * @param string $remote_file Path to the remote file.
 * @param int|null $create_mode The file will be created with the mode specified by
 * <code>create_mode</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-scp-send.php
 */
function ssh2_scp_send($session, $local_file, $remote_file, $create_mode = 0644)
{
}

/**
 * Initialize SFTP subsystem
 *
 * @param resource $session An SSH connection link identifier, obtained from a call to
 * <code>ssh2_connect</code>.
 *
 * @return resource This method returns an <code>SSH2 SFTP</code> resource for use with
 * all other ssh2_sftp_*() methods and the
 * ssh2.sftp:// fopen wrapper.
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-sftp.php
 */
function ssh2_sftp($session)
{
}

/**
 * Changes file mode
 *
 * @param resource $sftp An SSH2 SFTP resource opened by <code>ssh2_sftp</code>.
 * @param string $filename Path to the file.
 * @param int $mode Permissions on the file. See the <code>chmod</code> for more details on this parameter.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PECL ssh2 >= 0.12
 *
 * @link http://www.php.net/manual/en/function.ssh2-sftp-chmod.php
 */
function ssh2_sftp_chmod($sftp, $filename, $mode)
{
}

/**
 * Stat a symbolic link
 *
 * @param resource $sftp An SSH2 SFTP resource opened by <code>ssh2_sftp</code>.
 * @param string $path Path to the remote symbolic link.
 *
 * @return array See the documentation for <code>stat</code> for details on the
 * values which may be returned.
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-sftp-lstat.php
 */
function ssh2_sftp_lstat($sftp, $path)
{
}

/**
 * Create a directory
 *
 * @param resource $sftp An SSH2 SFTP resource opened by <code>ssh2_sftp</code>.
 * @param string $dirname Path of the new directory.
 * @param int|null $mode Permissions on the new directory.
 * @param bool|null $recursive If <code>recursive</code> is <code>TRUE</code> any parent directories
 * required for <code>dirname</code> will be automatically created as well.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-sftp-mkdir.php
 */
function ssh2_sftp_mkdir($sftp, $dirname, $mode = 0777, $recursive = false)
{
}

/**
 * Return the target of a symbolic link
 *
 * @param resource $sftp An SSH2 SFTP resource opened by <code>ssh2_sftp</code>.
 * @param string $link Path of the symbolic link.
 *
 * @return string Returns the target of the symbolic <code>link</code>.
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-sftp-readlink.php
 */
function ssh2_sftp_readlink($sftp, $link)
{
}

/**
 * Resolve the realpath of a provided path string
 *
 * @param resource $sftp An SSH2 SFTP resource opened by <code>ssh2_sftp</code>.
 * @param string $filename
 *
 * @return string Returns the real path as a string.
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-sftp-realpath.php
 */
function ssh2_sftp_realpath($sftp, $filename)
{
}

/**
 * Rename a remote file
 *
 * @param resource $sftp An SSH2 SFTP resource opened by <code>ssh2_sftp</code>.
 * @param string $from The current file that is being renamed.
 * @param string $to The new file name that replaces <code>from</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-sftp-rename.php
 */
function ssh2_sftp_rename($sftp, $from, $to)
{
}

/**
 * Remove a directory
 *
 * @param resource $sftp An SSH2 SFTP resource opened by <code>ssh2_sftp</code>.
 * @param string $dirname
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-sftp-rmdir.php
 */
function ssh2_sftp_rmdir($sftp, $dirname)
{
}

/**
 * Stat a file on a remote filesystem
 *
 * @param resource $sftp An SSH2 SFTP resource opened by <code>ssh2_sftp</code>.
 * @param string $path
 *
 * @return array See the documentation for <code>stat</code> for details on the
 * values which may be returned.
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-sftp-stat.php
 */
function ssh2_sftp_stat($sftp, $path)
{
}

/**
 * Create a symlink
 *
 * @param resource $sftp An SSH2 SFTP resource opened by <code>ssh2_sftp</code>.
 * @param string $target Target of the symbolic link.
 * @param string $link
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-sftp-symlink.php
 */
function ssh2_sftp_symlink($sftp, $target, $link)
{
}

/**
 * Delete a file
 *
 * @param resource $sftp An SSH2 SFTP resource opened by <code>ssh2_sftp</code>.
 * @param string $filename
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-sftp-unlink.php
 */
function ssh2_sftp_unlink($sftp, $filename)
{
}

/**
 * Request an interactive shell
 *
 * @param resource $session An SSH connection link identifier, obtained from a call to
 * <code>ssh2_connect</code>.
 * @param string|null $term_type <code>term_type</code> should correspond to one of the
 * entries in the target system's <code>/etc/termcap</code> file.
 * @param array $env <code>env</code> may be passed as an associative array of
 * name/value pairs to set in the target environment.
 * @param int|null $width Width of the virtual terminal.
 * @param int|null $height Height of the virtual terminal.
 * @param int|null $width_height_type <code>width_height_type</code> should be one of
 * <code>SSH2_TERM_UNIT_CHARS</code> or
 * <code>SSH2_TERM_UNIT_PIXELS</code>.
 *
 * @return resource
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-shell.php
 */
function ssh2_shell($session, $term_type = "vanilla", array $env = null, $width = 80, $height = 25, $width_height_type = SSH2_TERM_UNIT_CHARS)
{
}

/**
 * Open a tunnel through a remote server
 *
 * @param resource $session An SSH connection link identifier, obtained from a call to
 * <code>ssh2_connect</code>.
 * @param string $host
 * @param int $port
 *
 * @return resource
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-tunnel.php
 */
function ssh2_tunnel($session, $host, $port)
{
}
