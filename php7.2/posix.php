<?php
// Start of extension: posix
// - parsed on POSIX with PHP 7.2.3 (extension version 7.2.3)

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
 * The maximum size of the process's address space in bytes. See also PHP's
 * memory_limit configuration
 * directive.
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.setrlimit
 *
 * @var int
 */
const POSIX_RLIMIT_AS = 9;

/**
 * The maximum size of a core file. If the limit is set to 0, no core file
 * will be generated.
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.setrlimit
 *
 * @var int
 */
const POSIX_RLIMIT_CORE = 4;

/**
 * The maximum amount of CPU time that the process can use, in seconds.
 * When the soft limit is hit, a <code>SIGXCPU</code> signal will be
 * sent, which can be caught with <code>pcntl_signal</code>.
 * Depending on the operating system, additional <code>SIGXCPU</code>
 * signals may be sent each second until the hard limit is hit, at which
 * point an uncatchable <code>SIGKILL</code> signal is sent.
 * See also <code>set_time_limit</code>.
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.setrlimit
 *
 * @var int
 */
const POSIX_RLIMIT_CPU = 0;

/**
 * The maximum size of the process's data segment, in bytes. It is
 * extremely unlikely that this will have any effect on the execution of
 * PHP unless an extension is in use that calls <code>brk</code> or
 * <code>sbrk</code>.
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.setrlimit
 *
 * @var int
 */
const POSIX_RLIMIT_DATA = 2;

/**
 * The maximum size of files that the process can create, in bytes.
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.setrlimit
 *
 * @var int
 */
const POSIX_RLIMIT_FSIZE = 1;

/**
 * Used to indicate an infinite value for a resource limit.
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.setrlimit
 *
 * @var int
 */
const POSIX_RLIMIT_INFINITY = -1;

/**
 * The maximum number of locks that the process can create. This is only
 * supported on extremely old Linux kernels.
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.setrlimit
 *
 * @var int
 */
const POSIX_RLIMIT_LOCKS = 10;

/**
 * The maximum number of bytes that can be locked into memory.
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.setrlimit
 *
 * @var int
 */
const POSIX_RLIMIT_MEMLOCK = 8;

/**
 * The maximum number of bytes that can be allocated for POSIX message
 * queues. PHP does not ship with support for POSIX message queues, so this
 * limit will not have any effect unless you are using an extension that
 * implements that support.
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.setrlimit
 *
 * @var int
 */
const POSIX_RLIMIT_MSGQUEUE = 12;

/**
 * The maximum value to which the process can be
 * reniced to. The value
 * that will be used will be <code>20 - limit</code>, as resource
 * limit values cannot be negative.
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.setrlimit
 *
 * @var int
 */
const POSIX_RLIMIT_NICE = 13;

/**
 * A value one greater than the maximum file descriptor number that can be
 * opened by this process.
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.setrlimit
 *
 * @var int
 */
const POSIX_RLIMIT_NOFILE = 7;

/**
 * The maximum number of processes (and/or threads, on some operating
 * systems) that can be created for the real user ID of the process.
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.setrlimit
 *
 * @var int
 */
const POSIX_RLIMIT_NPROC = 6;

/**
 * The maximum size of the process's resident set, in pages.
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.setrlimit
 *
 * @var int
 */
const POSIX_RLIMIT_RSS = 5;

/**
 * The maximum real time priority that can be set via the
 * <code>sched_setscheduler</code> and
 * <code>sched_setparam</code> system calls.
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.setrlimit
 *
 * @var int
 */
const POSIX_RLIMIT_RTPRIO = 14;

/**
 * The maximum amount of CPU time, in microseconds, that the process can
 * consume without making a blocking system call if it is using real time
 * scheduling.
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.setrlimit
 *
 * @var int
 */
const POSIX_RLIMIT_RTTIME = 15;

/**
 * The maximum number of signals that can be queued for the real user ID of
 * the process.
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.setrlimit
 *
 * @var int
 */
const POSIX_RLIMIT_SIGPENDING = 11;

/**
 * The maximum size of the process stack, in bytes.
 *
 * @link http://www.php.net/manual/en/posix.constants.php#posix.constants.setrlimit
 *
 * @var int
 */
const POSIX_RLIMIT_STACK = 3;

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
function posix_access($file, $mode = null): bool
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
function posix_ctermid(): string
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
function posix_get_last_error(): int
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
function posix_getcwd(): string
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
function posix_getegid(): int
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
function posix_geteuid(): int
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
function posix_getgid(): int
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
function posix_getlogin(): string
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
function posix_getpgid($pid): int
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
function posix_getpgrp(): int
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
function posix_getpid(): int
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
function posix_getppid(): int
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
function posix_getsid($pid): int
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
function posix_getuid(): int
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
function posix_initgroups($name, $base_group_id): bool
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
function posix_isatty($fd): bool
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
function posix_kill($pid, $sig): bool
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
function posix_mkfifo($pathname, $mode): bool
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
function posix_mknod($pathname, $mode, $major = null, $minor = null): bool
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
function posix_setegid($gid): bool
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
function posix_seteuid($uid): bool
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
function posix_setgid($gid): bool
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
function posix_setpgid($pid, $pgid): bool
{
}

/**
 * Set system resource limits
 *
 * @param mixed $resource
 * @param mixed $softlimit
 * @param mixed $hardlimit
 *
 * @return bool
 *
 * @since PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-setrlimit.php
 */
function posix_setrlimit($resource, $softlimit, $hardlimit): bool
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
function posix_setsid(): int
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
function posix_setuid($uid): bool
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
function posix_strerror($errno): string
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
function posix_ttyname($fd): string
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
