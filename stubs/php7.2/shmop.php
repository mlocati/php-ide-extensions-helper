<?php
// Start of extension: shmop
// - parsed on POSIX with PHP 7.2.4 (extension version 7.2.4)

/**
 * Close shared memory block
 *
 * @param resource $shmid The shared memory block resource created by
 * <code>shmop_open</code>
 *
 * @return void No value is returned.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shmop-close.php
 */
function shmop_close($shmid): void
{
}

/**
 * Delete shared memory block
 *
 * @param resource $shmid The shared memory block resource created by
 * <code>shmop_open</code>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
 * @param int $key System's id for the shared memory block.
 * Can be passed as a decimal or hex.
 * @param string $flags The flags that you can use:
 * <ul>
 * "a" for access (sets SHM_RDONLY for shmat)
 * use this flag when you need to open an existing shared memory
 * segment for read only
 * "c" for create (sets IPC_CREATE)
 * use this flag when you need to create a new shared memory segment
 * or if a segment with the same key exists, try to open it for read
 * and write
 * "w" for read &amp; write access
 * use this flag when you need to read and write to a shared memory
 * segment, use this flag in most cases.
 * "n" create a new memory segment (sets IPC_CREATE|IPC_EXCL)
 * use this flag when you want to create a new shared memory segment
 * but if one already exists with the same flag, fail. This is useful
 * for security purposes, using this you can prevent race condition
 * exploits.
 * </ul>
 * @param int $mode The permissions that you wish to assign to your memory segment, those
 * are the same as permission for a file. Permissions need to be passed
 * in octal form, like for example <code>0644</code>
 * @param int $size The size of the shared memory block you wish to create in bytes
 *
 * @return resource On success <code>shmop_open</code> will return an resource that you can
 * use to access the shared memory segment you've created. <code>FALSE</code> is
 * returned on failure.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shmop-open.php
 */
function shmop_open(int $key, string $flags, int $mode, int $size)
{
}

/**
 * Read data from shared memory block
 *
 * @param resource $shmid The shared memory block identifier created by
 * <code>shmop_open</code>
 * @param int $start Offset from which to start reading
 * @param int $count The number of bytes to read
 *
 * @return string Returns the data or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shmop-read.php
 */
function shmop_read($shmid, int $start, int $count): string
{
}

/**
 * Get size of shared memory block
 *
 * @param resource $shmid The shared memory block identifier created by
 * <code>shmop_open</code>
 *
 * @return int Returns an int, which represents the number of bytes the shared memory
 * block occupies.
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
 * @param resource $shmid The shared memory block identifier created by
 * <code>shmop_open</code>
 * @param string $data A string to write into shared memory block
 * @param int $offset Specifies where to start writing data inside the shared memory
 * segment.
 *
 * @return int The size of the written <code>data</code>, or <code>FALSE</code> on
 * failure.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shmop-write.php
 */
function shmop_write($shmid, string $data, int $offset): int
{
}
