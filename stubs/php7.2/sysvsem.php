<?php
// Start of extension: sysvsem
// - parsed on POSIX with PHP 7.2.4 (extension version 7.2.4)

/**
 * Acquire a semaphore
 *
 * @param resource $sem_identifier <code>sem_identifier</code> is a semaphore resource,
 * obtained from <code>sem_get</code>.
 * @param bool|null $nowait Specifies if the process shouldn't wait for the semaphore to be acquired.
 * If set to <code>true</code>, the call will return
 * <code>false</code> immediately if a semaphore cannot be immediately
 * acquired.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.sem-acquire.php
 */
function sem_acquire($sem_identifier, bool $nowait = false): bool
{
}

/**
 * Get a semaphore id
 *
 * @param int $key
 * @param int|null $max_acquire The number of processes that can acquire the semaphore simultaneously
 * is set to <code>max_acquire</code>.
 * @param int|null $perm The semaphore permissions. Actually this value is
 * set only if the process finds it is the only process currently
 * attached to the semaphore.
 * @param int|null $auto_release Specifies if the semaphore should be automatically released on request
 * shutdown.
 *
 * @return resource Returns a positive semaphore identifier on success, or <code>FALSE</code> on
 * error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.sem-get.php
 */
function sem_get(int $key, int $max_acquire = 1, int $perm = 0666, int $auto_release = 1)
{
}

/**
 * Release a semaphore
 *
 * @param resource $sem_identifier A Semaphore resource handle as returned by
 * <code>sem_get</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.sem-release.php
 */
function sem_release($sem_identifier): bool
{
}

/**
 * Remove a semaphore
 *
 * @param resource $sem_identifier A semaphore resource identifier as returned
 * by <code>sem_get</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.sem-remove.php
 */
function sem_remove($sem_identifier): bool
{
}
