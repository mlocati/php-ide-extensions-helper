<?php
// Start of extension: ssh2
// - parsed on POSIX with PHP 7.1.15 (extension version 1.1.2)

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
 * @param mixed $session
 * @param mixed $username
 *
 * @return bool
 *
 * @since PECL ssh2 >= 0.12
 *
 * @link http://www.php.net/manual/en/function.ssh2-auth-agent.php
 */
function ssh2_auth_agent($session, $username): bool
{
}

/**
 * Authenticate using a public hostkey
 *
 * @param mixed $session
 * @param mixed $username
 * @param mixed $hostname
 * @param mixed $pubkeyfile
 * @param mixed $privkeyfile
 * @param mixed|null $passphrase
 * @param mixed|null $local_username
 *
 * @return bool
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-auth-hostbased-file.php
 */
function ssh2_auth_hostbased_file($session, $username, $hostname, $pubkeyfile, $privkeyfile, $passphrase = null, $local_username = null): bool
{
}

/**
 * Authenticate as "none"
 *
 * @param mixed $session
 * @param mixed $username
 *
 * @return mixed
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
 * @param mixed $session
 * @param mixed $username
 * @param mixed $password
 *
 * @return bool
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-auth-password.php
 */
function ssh2_auth_password($session, $username, $password): bool
{
}

/**
 * Authenticate using a public key
 *
 * @param mixed $session
 * @param mixed $username
 * @param mixed $pubkeyfile
 * @param mixed $privkeyfile
 * @param mixed|null $passphrase
 *
 * @return bool
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-auth-pubkey-file.php
 */
function ssh2_auth_pubkey_file($session, $username, $pubkeyfile, $privkeyfile, $passphrase = null): bool
{
}

/**
 * Connect to an SSH server
 *
 * @param mixed $host
 * @param mixed $port
 *
 * @return resource
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-connect.php
 */
function ssh2_connect($host, $port)
{
}

/**
 * @param mixed $resource
 *
 * @since PECL ssh2 >= 1.0
 */
function ssh2_disconnect($resource)
{
}

/**
 * Execute a command on a remote server
 *
 * @param mixed $session
 * @param mixed $command
 * @param mixed|null $pty
 * @param mixed|null $env
 * @param mixed|null $width
 * @param mixed|null $height
 * @param mixed|null $width_height_type
 *
 * @return resource
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-exec.php
 */
function ssh2_exec($session, $command, $pty = null, $env = null, $width = null, $height = null, $width_height_type = null)
{
}

/**
 * Fetch an extended data stream
 *
 * @param mixed $channel
 * @param mixed $stream_id
 *
 * @return resource
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-fetch-stream.php
 */
function ssh2_fetch_stream($channel, $stream_id)
{
}

/**
 * Retrieve fingerprint of remote server
 *
 * @param mixed $resource
 * @param mixed $flags
 *
 * @return string
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-fingerprint.php
 */
function ssh2_fingerprint($resource, $flags): string
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
 * @param mixed $resource
 *
 * @return array
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-methods-negotiated.php
 */
function ssh2_methods_negotiated($resource): array
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
 * @param mixed $pkey
 * @param mixed $algoname
 * @param mixed $blob
 * @param mixed|null $overwrite
 * @param mixed|null $attributes
 *
 * @return bool
 *
 * @since PECL ssh2 >= 0.10
 *
 * @link http://www.php.net/manual/en/function.ssh2-publickey-add.php
 */
function ssh2_publickey_add($pkey, $algoname, $blob, $overwrite = null, $attributes = null): bool
{
}

/**
 * Initialize Publickey subsystem
 *
 * @param mixed $session
 *
 * @return resource
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
 * @param mixed $pkey
 *
 * @return array
 *
 * @since PECL ssh2 >= 0.10
 *
 * @link http://www.php.net/manual/en/function.ssh2-publickey-list.php
 */
function ssh2_publickey_list($pkey): array
{
}

/**
 * Remove an authorized publickey
 *
 * @param mixed $pkey
 * @param mixed $algoname
 * @param mixed $blob
 *
 * @return bool
 *
 * @since PECL ssh2 >= 0.10
 *
 * @link http://www.php.net/manual/en/function.ssh2-publickey-remove.php
 */
function ssh2_publickey_remove($pkey, $algoname, $blob): bool
{
}

/**
 * Request a file via SCP
 *
 * @param mixed $session
 * @param mixed $remote_file
 * @param mixed $local_file
 *
 * @return bool
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-scp-recv.php
 */
function ssh2_scp_recv($session, $remote_file, $local_file): bool
{
}

/**
 * Send a file via SCP
 *
 * @param mixed $session
 * @param mixed $remote_file
 * @param mixed $local_file
 * @param mixed|null $create_mode
 *
 * @return bool
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-scp-send.php
 */
function ssh2_scp_send($session, $remote_file, $local_file, $create_mode = null): bool
{
}

/**
 * Initialize SFTP subsystem
 *
 * @param mixed $session
 *
 * @return resource
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
 * @param mixed $sftp
 * @param mixed $filename
 * @param mixed $mode
 *
 * @return bool
 *
 * @since PECL ssh2 >= 0.12
 *
 * @link http://www.php.net/manual/en/function.ssh2-sftp-chmod.php
 */
function ssh2_sftp_chmod($sftp, $filename, $mode): bool
{
}

/**
 * Stat a symbolic link
 *
 * @param mixed $sftp
 * @param mixed $path
 *
 * @return array
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-sftp-lstat.php
 */
function ssh2_sftp_lstat($sftp, $path): array
{
}

/**
 * Create a directory
 *
 * @param mixed $sftp
 * @param mixed $dirname
 * @param mixed|null $mode
 * @param mixed|null $recursive
 *
 * @return bool
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-sftp-mkdir.php
 */
function ssh2_sftp_mkdir($sftp, $dirname, $mode = null, $recursive = null): bool
{
}

/**
 * Return the target of a symbolic link
 *
 * @param mixed $sftp
 * @param mixed $link
 *
 * @return string
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-sftp-readlink.php
 */
function ssh2_sftp_readlink($sftp, $link): string
{
}

/**
 * Resolve the realpath of a provided path string
 *
 * @param mixed $sftp
 * @param mixed $filename
 *
 * @return string
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-sftp-realpath.php
 */
function ssh2_sftp_realpath($sftp, $filename): string
{
}

/**
 * Rename a remote file
 *
 * @param mixed $sftp
 * @param mixed $from
 * @param mixed $to
 *
 * @return bool
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-sftp-rename.php
 */
function ssh2_sftp_rename($sftp, $from, $to): bool
{
}

/**
 * Remove a directory
 *
 * @param mixed $sftp
 * @param mixed $dirname
 *
 * @return bool
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-sftp-rmdir.php
 */
function ssh2_sftp_rmdir($sftp, $dirname): bool
{
}

/**
 * Stat a file on a remote filesystem
 *
 * @param mixed $sftp
 * @param mixed $path
 *
 * @return array
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-sftp-stat.php
 */
function ssh2_sftp_stat($sftp, $path): array
{
}

/**
 * Create a symlink
 *
 * @param mixed $sftp
 * @param mixed $target
 * @param mixed $link
 *
 * @return bool
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-sftp-symlink.php
 */
function ssh2_sftp_symlink($sftp, $target, $link): bool
{
}

/**
 * Delete a file
 *
 * @param mixed $sftp
 * @param mixed $filename
 *
 * @return bool
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-sftp-unlink.php
 */
function ssh2_sftp_unlink($sftp, $filename): bool
{
}

/**
 * Request an interactive shell
 *
 * @param mixed $session
 * @param mixed|null $termtype
 * @param mixed|null $env
 * @param mixed|null $width
 * @param mixed|null $height
 * @param mixed|null $width_height_type
 *
 * @return resource
 *
 * @since PECL ssh2 >= 0.9.0
 *
 * @link http://www.php.net/manual/en/function.ssh2-shell.php
 */
function ssh2_shell($session, $termtype = null, $env = null, $width = null, $height = null, $width_height_type = null)
{
}

/**
 * Open a tunnel through a remote server
 *
 * @param mixed $session
 * @param mixed $host
 * @param mixed $port
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
