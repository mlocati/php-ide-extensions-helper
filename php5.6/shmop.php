<?php
// Start of extension: shmop
// - parsed on POSIX with PHP 5.6.34

/**
 * Close shared memory block
 *
 * mixed $shmid
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
 * mixed $shmid
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shmop-delete.php
 */
function shmop_delete($shmid)
{
}

/**
 * Create or open shared memory block
 *
 * mixed $key
 * mixed $flags
 * mixed $mode
 * mixed $size
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
 * mixed $shmid
 * mixed $start
 * mixed $count
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shmop-read.php
 */
function shmop_read($shmid, $start, $count)
{
}

/**
 * Get size of shared memory block
 *
 * mixed $shmid
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shmop-size.php
 */
function shmop_size($shmid)
{
}

/**
 * Write data into shared memory block
 *
 * mixed $shmid
 * mixed $data
 * mixed $offset
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shmop-write.php
 */
function shmop_write($shmid, $data, $offset)
{
}
