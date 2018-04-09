<?php
// Start of extension: posix
// - parsed on POSIX with PHP 5.6.34

/**
 * Check whether the file exists.
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.access
 *
 * @var int
 */
const POSIX_F_OK = 0;

/**
 * Check whether the file exists and has read permissions.
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.access
 *
 * @var int
 */
const POSIX_R_OK = 4;

/**
 * Block special file
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.mknod
 *
 * @var int
 */
const POSIX_S_IFBLK = 24576;

/**
 * Character special file
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.mknod
 *
 * @var int
 */
const POSIX_S_IFCHR = 8192;

/**
 * FIFO (named pipe) special file
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.mknod
 *
 * @var int
 */
const POSIX_S_IFIFO = 4096;

/**
 * Normal file
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.mknod
 *
 * @var int
 */
const POSIX_S_IFREG = 32768;

/**
 * Socket
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.mknod
 *
 * @var int
 */
const POSIX_S_IFSOCK = 49152;

/**
 * Check whether the file exists and has write permissions.
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.access
 *
 * @var int
 */
const POSIX_W_OK = 2;

/**
 * Check whether the file exists and has execute permissions.
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.access
 *
 * @var int
 */
const POSIX_X_OK = 1;

/**
 * Determine accessibility of a file
 *
 * @param mixed $file
 * @param mixed|null $mode
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-access.php
 */
function posix_access($file, $mode = null)
{
}

/**
 * Get path name of controlling terminal
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-ctermid.php
 */
function posix_ctermid()
{
}

/**
 * Alias of <code>posix_get_last_error</code>
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-errno.php
 */
function posix_errno()
{
}

/**
 * Retrieve the error number set by the last posix function that failed
 *
 * @return int
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-get-last-error.php
 */
function posix_get_last_error()
{
}

/**
 * Pathname of current directory
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getcwd.php
 */
function posix_getcwd()
{
}

/**
 * Return the effective group ID of the current process
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getegid.php
 */
function posix_getegid()
{
}

/**
 * Return the effective user ID of the current process
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-geteuid.php
 */
function posix_geteuid()
{
}

/**
 * Return the real group ID of the current process
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getgid.php
 */
function posix_getgid()
{
}

/**
 * Return info about a group by group id
 *
 * @param mixed $gid
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getgrgid.php
 */
function posix_getgrgid($gid): array
{
}

/**
 * Return info about a group by name
 *
 * @param mixed $name
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getgrnam.php
 */
function posix_getgrnam($name): array
{
}

/**
 * Return the group set of the current process
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getgroups.php
 */
function posix_getgroups(): array
{
}

/**
 * Return login name
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getlogin.php
 */
function posix_getlogin()
{
}

/**
 * Get process group id for job control
 *
 * @param mixed $pid
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getpgid.php
 */
function posix_getpgid($pid)
{
}

/**
 * Return the current process group identifier
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getpgrp.php
 */
function posix_getpgrp()
{
}

/**
 * Return the current process identifier
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getpid.php
 */
function posix_getpid()
{
}

/**
 * Return the parent process identifier
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getppid.php
 */
function posix_getppid()
{
}

/**
 * Return info about a user by username
 *
 * @param mixed $username
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getpwnam.php
 */
function posix_getpwnam($username): array
{
}

/**
 * Return info about a user by user id
 *
 * @param mixed $uid
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getpwuid.php
 */
function posix_getpwuid($uid): array
{
}

/**
 * Return info about system resource limits
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getrlimit.php
 */
function posix_getrlimit(): array
{
}

/**
 * Get the current sid of the process
 *
 * @param mixed $pid
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getsid.php
 */
function posix_getsid($pid)
{
}

/**
 * Return the real user ID of the current process
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getuid.php
 */
function posix_getuid()
{
}

/**
 * Calculate the group access list
 *
 * @param mixed $name
 * @param mixed $base_group_id
 *
 * @return bool
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-initgroups.php
 */
function posix_initgroups($name, $base_group_id)
{
}

/**
 * Determine if a file descriptor is an interactive terminal
 *
 * @param mixed $fd
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-isatty.php
 */
function posix_isatty($fd)
{
}

/**
 * Send a signal to a process
 *
 * @param mixed $pid
 * @param mixed $sig
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-kill.php
 */
function posix_kill($pid, $sig)
{
}

/**
 * Create a fifo special file (a named pipe)
 *
 * @param mixed $pathname
 * @param mixed $mode
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-mkfifo.php
 */
function posix_mkfifo($pathname, $mode)
{
}

/**
 * Create a special or ordinary file (POSIX.1)
 *
 * @param mixed $pathname
 * @param mixed $mode
 * @param mixed|null $major
 * @param mixed|null $minor
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-mknod.php
 */
function posix_mknod($pathname, $mode, $major = null, $minor = null)
{
}

/**
 * Set the effective GID of the current process
 *
 * @param mixed $gid
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-setegid.php
 */
function posix_setegid($gid)
{
}

/**
 * Set the effective UID of the current process
 *
 * @param mixed $uid
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-seteuid.php
 */
function posix_seteuid($uid)
{
}

/**
 * Set the GID of the current process
 *
 * @param mixed $gid
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-setgid.php
 */
function posix_setgid($gid)
{
}

/**
 * Set process group id for job control
 *
 * @param mixed $pid
 * @param mixed $pgid
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-setpgid.php
 */
function posix_setpgid($pid, $pgid)
{
}

/**
 * Make the current process a session leader
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-setsid.php
 */
function posix_setsid()
{
}

/**
 * Set the UID of the current process
 *
 * @param mixed $uid
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-setuid.php
 */
function posix_setuid($uid)
{
}

/**
 * Retrieve the system error message associated with the given errno
 *
 * @param mixed $errno
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-strerror.php
 */
function posix_strerror($errno)
{
}

/**
 * Get process times
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-times.php
 */
function posix_times(): array
{
}

/**
 * Determine terminal device name
 *
 * @param mixed $fd
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-ttyname.php
 */
function posix_ttyname($fd)
{
}

/**
 * Get system name
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-uname.php
 */
function posix_uname(): array
{
}
