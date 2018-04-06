<?php
// Start of extension: shmop
// - parsed on POSIX with PHP 7.1.15 (extension version 7.1.15)

/**
 * Close shared memory block
 *
 * @param mixed $shmid
 *
 * @return void
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shmop-close.php
 */
function shmop_close($shmid)
{
}

/**
 * Delete shared memory block
 *
 * @param mixed $shmid
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shmop-delete.php
 */
function shmop_delete($shmid): bool
{
}

/**
 * Create or open shared memory block
 *
 * @param mixed $key
 * @param mixed $flags
 * @param mixed $mode
 * @param mixed $size
 *
 * @return resource
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shmop-open.php
 */
function shmop_open($key, $flags, $mode, $size)
{
}

/**
 * Read data from shared memory block
 *
 * @param mixed $shmid
 * @param mixed $start
 * @param mixed $count
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shmop-read.php
 */
function shmop_read($shmid, $start, $count): string
{
}

/**
 * Get size of shared memory block
 *
 * @param mixed $shmid
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shmop-size.php
 */
function shmop_size($shmid): int
{
}

/**
 * Write data into shared memory block
 *
 * @param mixed $shmid
 * @param mixed $data
 * @param mixed $offset
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shmop-write.php
 */
function shmop_write($shmid, $data, $offset): int
{
}
