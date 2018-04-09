<?php
// Start of extension: sysvsem
// - parsed on POSIX with PHP 7.2.3 (extension version 7.2.3)

/**
 * Acquire a semaphore
 *
 * @param mixed $sem_identifier
 * @param mixed|null $nowait
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.sem-acquire.php
 */
function sem_acquire($sem_identifier, $nowait = null): bool
{
}

/**
 * Get a semaphore id
 *
 * @param mixed $key
 * @param mixed|null $max_acquire
 * @param mixed|null $perm
 * @param mixed|null $auto_release
 *
 * @return resource
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.sem-get.php
 */
function sem_get($key, $max_acquire = null, $perm = null, $auto_release = null)
{
}

/**
 * Release a semaphore
 *
 * @param mixed $sem_identifier
 *
 * @return bool
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
 * @param mixed $sem_identifier
 *
 * @return bool
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.sem-remove.php
 */
function sem_remove($sem_identifier): bool
{
}
