<?php
// Start of extension: posix
// - parsed on POSIX with PHP 7.1.16 (extension version 7.1.16)

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
 * @param string $file The name of the file to be tested.
 * @param int|null $mode A mask consisting of one or more of <code>POSIX_F_OK</code>,
 * <code>POSIX_R_OK</code>, <code>POSIX_W_OK</code> and
 * <code>POSIX_X_OK</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-access.php
 */
function posix_access(string $file, int $mode = POSIX_F_OK): bool
{
}

/**
 * Get path name of controlling terminal
 *
 * @return string Upon successful completion, returns <code>string</code> of the pathname to
 * the current controlling terminal. Otherwise <code>FALSE</code> is returned and errno
 * is set, which can be checked with <code>posix_get_last_error</code>.
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
 * @return int Returns the errno (error number) set by the last posix function that
 * failed. If no errors exist, 0 is returned.
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
 * @return string Returns a <code>string</code> of the absolute pathname on success.
 * On error, returns <code>FALSE</code> and sets errno which can be checked with
 * <code>posix_get_last_error</code>.
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
 * @return int Returns an <code>integer</code> of the effective group ID.
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
 * @return int Returns the user id, as an <code>integer</code>
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
 * @return int Returns the real group id, as an <code>integer</code>.
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
 * @param int $gid The group id.
 *
 * @return array The array elements returned are:
 * <table>
 * <title>The group information array</title>
 * <thead>
 * <tr>
 * <td>Element</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>name</td><td>
 * The name element contains the name of the group. This is
 * a short, usually less than 16 character "handle" of the
 * group, not the real, full name.
 * </td>
 * </tr>
 * <tr>
 * <td>passwd</td><td>
 * The passwd element contains the group's password in an
 * encrypted format. Often, for example on a system employing
 * "shadow" passwords, an asterisk is returned instead.
 * </td>
 * </tr>
 * <tr>
 * <td>gid</td><td>
 * Group ID, should be the same as the
 * <code>gid</code> parameter used when calling the
 * function, and hence redundant.
 * </td>
 * </tr>
 * <tr>
 * <td>members</td><td>
 * This consists of an <code>array</code> of
 * <code>string</code>'s for all the members in the group.
 * </td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getgrgid.php
 */
function posix_getgrgid(int $gid): array
{
}

/**
 * Return info about a group by name
 *
 * @param string $name The name of the group
 *
 * @return array The array elements returned are:
 * <table>
 * <title>The group information array</title>
 * <thead>
 * <tr>
 * <td>Element</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>name</td><td>
 * The name element contains the name of the group. This is
 * a short, usually less than 16 character "handle" of the
 * group, not the real, full name. This should be the same as
 * the <code>name</code> parameter used when
 * calling the function, and hence redundant.
 * </td>
 * </tr>
 * <tr>
 * <td>passwd</td><td>
 * The passwd element contains the group's password in an
 * encrypted format. Often, for example on a system employing
 * "shadow" passwords, an asterisk is returned instead.
 * </td>
 * </tr>
 * <tr>
 * <td>gid</td><td>
 * Group ID of the group in numeric form.
 * </td>
 * </tr>
 * <tr>
 * <td>members</td><td>
 * This consists of an <code>array</code> of
 * <code>string</code>'s for all the members in the group.
 * </td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getgrnam.php
 */
function posix_getgrnam(string $name): array
{
}

/**
 * Return the group set of the current process
 *
 * @return array Returns an array of integers containing the numeric group ids of the group
 * set of the current process.
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
 * @return string Returns the login name of the user, as a <code>string</code>.
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
 * @param int $pid The process id.
 *
 * @return int Returns the identifier, as an <code>integer</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getpgid.php
 */
function posix_getpgid(int $pid): int
{
}

/**
 * Return the current process group identifier
 *
 * @return int Returns the identifier, as an <code>integer</code>.
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
 * @return int Returns the identifier, as an <code>integer</code>.
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
 * @return int Returns the identifier, as an <code>integer</code>.
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
 * @param string $username An alphanumeric username.
 *
 * @return array On success an array with the following elements is returned, else
 * <code>FALSE</code> is returned:
 * <table>
 * <title>The user information array</title>
 * <thead>
 * <tr>
 * <td>Element</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>name</td><td>
 * The name element contains the username of the user. This is
 * a short, usually less than 16 character "handle" of the
 * user, not the real, full name. This should be the same as
 * the <code>username</code> parameter used when
 * calling the function, and hence redundant.
 * </td>
 * </tr>
 * <tr>
 * <td>passwd</td><td>
 * The passwd element contains the user's password in an
 * encrypted format. Often, for example on a system employing
 * "shadow" passwords, an asterisk is returned instead.
 * </td>
 * </tr>
 * <tr>
 * <td>uid</td><td>
 * User ID of the user in numeric form.
 * </td>
 * </tr>
 * <tr>
 * <td>gid</td><td>
 * The group ID of the user. Use the function
 * <code>posix_getgrgid</code> to resolve the group
 * name and a list of its members.
 * </td>
 * </tr>
 * <tr>
 * <td>gecos</td><td>
 * GECOS is an obsolete term that refers to the finger
 * information field on a Honeywell batch processing system.
 * The field, however, lives on, and its contents have been
 * formalized by POSIX. The field contains a comma separated
 * list containing the user's full name, office phone, office
 * number, and home phone number. On most systems, only the
 * user's full name is available.
 * </td>
 * </tr>
 * <tr>
 * <td>dir</td><td>
 * This element contains the absolute path to the home
 * directory of the user.
 * </td>
 * </tr>
 * <tr>
 * <td>shell</td><td>
 * The shell element contains the absolute path to the
 * executable of the user's default shell.
 * </td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getpwnam.php
 */
function posix_getpwnam(string $username): array
{
}

/**
 * Return info about a user by user id
 *
 * @param int $uid The user identifier.
 *
 * @return array Returns an associative array with the following elements:
 * <table>
 * <title>The user information array</title>
 * <thead>
 * <tr>
 * <td>Element</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>name</td><td>
 * The name element contains the username of the user. This is
 * a short, usually less than 16 character "handle" of the
 * user, not the real, full name.
 * </td>
 * </tr>
 * <tr>
 * <td>passwd</td><td>
 * The passwd element contains the user's password in an
 * encrypted format. Often, for example on a system employing
 * "shadow" passwords, an asterisk is returned instead.
 * </td>
 * </tr>
 * <tr>
 * <td>uid</td><td>
 * User ID, should be the same as the
 * <code>uid</code> parameter used when calling the
 * function, and hence redundant.
 * </td>
 * </tr>
 * <tr>
 * <td>gid</td><td>
 * The group ID of the user. Use the function
 * <code>posix_getgrgid</code> to resolve the group
 * name and a list of its members.
 * </td>
 * </tr>
 * <tr>
 * <td>gecos</td><td>
 * GECOS is an obsolete term that refers to the finger
 * information field on a Honeywell batch processing system.
 * The field, however, lives on, and its contents have been
 * formalized by POSIX. The field contains a comma separated
 * list containing the user's full name, office phone, office
 * number, and home phone number. On most systems, only the
 * user's full name is available.
 * </td>
 * </tr>
 * <tr>
 * <td>dir</td><td>
 * This element contains the absolute path to the
 * home directory of the user.
 * </td>
 * </tr>
 * <tr>
 * <td>shell</td><td>
 * The shell element contains the absolute path to the
 * executable of the user's default shell.
 * </td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getpwuid.php
 */
function posix_getpwuid(int $uid): array
{
}

/**
 * Return info about system resource limits
 *
 * @return array Returns an associative <code>array</code> of elements for each
 * limit that is defined. Each limit has a soft and a hard limit.
 * <table>
 * <title>List of possible limits returned</title>
 * <thead>
 * <tr>
 * <td>Limit name</td><td>Limit description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>core</td><td>
 * The maximum size of the core file. When 0, not core files are
 * created. When core files are larger than this size, they will
 * be truncated at this size.
 * </td>
 * </tr>
 * <tr>
 * <td>totalmem</td><td>
 * The maximum size of the memory of the process, in bytes.
 * </td>
 * </tr>
 * <tr>
 * <td>virtualmem</td><td>
 * The maximum size of the virtual memory for the process, in bytes.
 * </td>
 * </tr>
 * <tr>
 * <td>data</td><td>
 * The maximum size of the data segment for the process, in bytes.
 * </td>
 * </tr>
 * <tr>
 * <td>stack</td><td>
 * The maximum size of the process stack, in bytes.
 * </td>
 * </tr>
 * <tr>
 * <td>rss</td><td>
 * The maximum number of virtual pages resident in RAM
 * </td>
 * </tr>
 * <tr>
 * <td>maxproc</td><td>
 * The maximum number of processes that can be created for the
 * real user ID of the calling process.
 * </td>
 * </tr>
 * <tr>
 * <td>memlock</td><td>
 * The maximum number of bytes of memory that may be locked into RAM.
 * </td>
 * </tr>
 * <tr>
 * <td>cpu</td><td>
 * The amount of time the process is allowed to use the CPU.
 * </td>
 * </tr>
 * <tr>
 * <td>filesize</td><td>
 * The maximum size of the data segment for the process, in bytes.
 * </td>
 * </tr>
 * <tr>
 * <td>openfiles</td><td>
 * One more than the maximum number of open file descriptors.
 * </td>
 * </tr>
 * </tbody>
 * </table>
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
 * @param int $pid The process identifier. If set to 0, the current process is
 * assumed. If an invalid <code>pid</code> is
 * specified, then <code>FALSE</code> is returned and an error is set which
 * can be checked with <code>posix_get_last_error</code>.
 *
 * @return int Returns the identifier, as an <code>integer</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-getsid.php
 */
function posix_getsid(int $pid): int
{
}

/**
 * Return the real user ID of the current process
 *
 * @return int Returns the user id, as an <code>integer</code>
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
 * @param string $name The user to calculate the list for.
 * @param int $base_group_id Typically the group number from the password file.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-initgroups.php
 */
function posix_initgroups(string $name, int $base_group_id): bool
{
}

/**
 * Determine if a file descriptor is an interactive terminal
 *
 * @param mixed $fd The file descriptor, which is expected to be either a file
 * <code>resource</code> or an <code>integer</code>. An <code>integer</code>
 * will be assumed to be a file descriptor that can be passed directly to
 * the underlying system call.
 *
 * @return bool Returns <code>TRUE</code> if <code>fd</code> is an open descriptor connected
 * to a terminal and <code>FALSE</code> otherwise.
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
 * @param int $pid The process identifier.
 * @param int $sig One of the PCNTL signals constants.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-kill.php
 */
function posix_kill(int $pid, int $sig): bool
{
}

/**
 * Create a fifo special file (a named pipe)
 *
 * @param string $pathname Path to the <code>FIFO</code> file.
 * @param int $mode The second parameter <code>mode</code> has to be given in
 * octal notation (e.g. 0644). The permission of the newly created
 * <code>FIFO</code> also depends on the setting of the current
 * <code>umask</code>. The permissions of the created file are
 * (mode &amp; ~umask).
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-mkfifo.php
 */
function posix_mkfifo(string $pathname, int $mode): bool
{
}

/**
 * Create a special or ordinary file (POSIX.1)
 *
 * @param string $pathname The file to create
 * @param int $mode This parameter is constructed by a bitwise OR between file type (one of
 * the following constants: <code>POSIX_S_IFREG</code>,
 * <code>POSIX_S_IFCHR</code>, <code>POSIX_S_IFBLK</code>,
 * <code>POSIX_S_IFIFO</code> or
 * <code>POSIX_S_IFSOCK</code>) and permissions.
 * @param int|null $major The major device kernel identifier (required to pass when using
 * <code>S_IFCHR</code> or <code>S_IFBLK</code>).
 * @param int|null $minor The minor device kernel identifier.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-mknod.php
 */
function posix_mknod(string $pathname, int $mode, int $major = 0, int $minor = 0): bool
{
}

/**
 * Set the effective GID of the current process
 *
 * @param int $gid The group id.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-setegid.php
 */
function posix_setegid(int $gid): bool
{
}

/**
 * Set the effective UID of the current process
 *
 * @param int $uid The user id.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-seteuid.php
 */
function posix_seteuid(int $uid): bool
{
}

/**
 * Set the GID of the current process
 *
 * @param int $gid The group id.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-setgid.php
 */
function posix_setgid(int $gid): bool
{
}

/**
 * Set process group id for job control
 *
 * @param int $pid The process id.
 * @param int $pgid The process group id.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-setpgid.php
 */
function posix_setpgid(int $pid, int $pgid): bool
{
}

/**
 * Set system resource limits
 *
 * @param int $resource The
 * resource limit constant
 * corresponding to the limit that is being set.
 * @param int $softlimit The soft limit, in whatever unit the resource limit requires, or
 * <code>POSIX_RLIMIT_INFINITY</code>.
 * @param int $hardlimit The hard limit, in whatever unit the resource limit requires, or
 * <code>POSIX_RLIMIT_INFINITY</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-setrlimit.php
 */
function posix_setrlimit(int $resource, int $softlimit, int $hardlimit): bool
{
}

/**
 * Make the current process a session leader
 *
 * @return int Returns the session id, or -1 on errors.
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
 * @param int $uid The user id.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-setuid.php
 */
function posix_setuid(int $uid): bool
{
}

/**
 * Retrieve the system error message associated with the given errno
 *
 * @param int $errno A POSIX error number, returned by
 * <code>posix_get_last_error</code>. If set to 0, then the
 * string "Success" is returned.
 *
 * @return string Returns the error message, as a string.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-strerror.php
 */
function posix_strerror(int $errno): string
{
}

/**
 * Get process times
 *
 * @return array Returns a hash of strings with information about the current
 * process CPU usage. The indices of the hash are:
 * <ul>
 * ticks - the number of clock ticks that have elapsed since
 * reboot.
 * utime - user time used by the current process.
 * stime - system time used by the current process.
 * cutime - user time used by current process and children.
 * cstime - system time used by current process and children.
 * </ul>
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
 * @param mixed $fd The file descriptor, which is expected to be either a file
 * <code>resource</code> or an <code>integer</code>. An <code>integer</code>
 * will be assumed to be a file descriptor that can be passed directly to
 * the underlying system call.
 *
 * @return string On success, returns a <code>string</code> of the absolute path of the
 * <code>fd</code>. On failure, returns <code>FALSE</code>
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
 * @return array Returns a hash of strings with information about the
 * system. The indices of the hash are
 * <ul>
 * sysname - operating system name (e.g. Linux)
 * nodename - system name (e.g. valiant)
 * release - operating system release (e.g. 2.2.10)
 * version - operating system version (e.g. #4 Tue Jul 20
 * 17:01:36 MEST 1999)
 * machine - system architecture (e.g. i586)
 * domainname - DNS domainname (e.g. example.com)
 * </ul>
 * domainname is a GNU extension and not part of POSIX.1, so this
 * field is only available on GNU systems or when using the GNU
 * libc.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.posix-uname.php
 */
function posix_uname(): array
{
}
