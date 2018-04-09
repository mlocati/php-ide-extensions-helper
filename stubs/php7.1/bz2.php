<?php
// Start of extension: bz2
// - parsed on POSIX with PHP 7.1.15 (extension version 7.1.15)
// - parsed on Windows with PHP 7.1.15 (extension version 7.1.15)

/**
 * Close a bzip2 file
 *
 * @param resource $bz The file pointer. It must be valid and must point to a file
 * successfully opened by <code>bzopen</code>.
 *
 * @return int Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzclose.php
 */
function bzclose($bz): int
{
}

/**
 * Compress a string into bzip2 encoded data
 *
 * @param string $source The string to compress.
 * @param int|null $blocksize Specifies the blocksize used during compression and should be a number
 * from 1 to 9 with 9 giving the best compression, but using more
 * resources to do so.
 * @param int|null $workfactor Controls how the compression phase behaves when presented with worst
 * case, highly repetitive, input data. The value can be between 0 and
 * 250 with 0 being a special case.
 *
 * @return mixed The compressed string, or an error number if an error occurred.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzcompress.php
 */
function bzcompress(string $source, int $blocksize = 4, int $workfactor = 0)
{
}

/**
 * Decompresses bzip2 encoded data
 *
 * @param string $source The string to decompress.
 * @param int|null $small If <code>TRUE</code>, an alternative decompression algorithm will be used which
 * uses less memory (the maximum memory requirement drops to around 2300K)
 * but works at roughly half the speed.
 *
 * @return mixed The decompressed string, or an error number if an error occurred.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzdecompress.php
 */
function bzdecompress(string $source, int $small = 0)
{
}

/**
 * Returns a bzip2 error number
 *
 * @param resource $bz The file pointer. It must be valid and must point to a file
 * successfully opened by <code>bzopen</code>.
 *
 * @return int Returns the error number as an integer.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzerrno.php
 */
function bzerrno($bz): int
{
}

/**
 * Returns the bzip2 error number and error string in an array
 *
 * @param resource $bz The file pointer. It must be valid and must point to a file
 * successfully opened by <code>bzopen</code>.
 *
 * @return array Returns an associative array, with the error code in the
 * <code>errno</code> entry, and the error message in the
 * <code>errstr</code> entry.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzerror.php
 */
function bzerror($bz): array
{
}

/**
 * Returns a bzip2 error string
 *
 * @param resource $bz The file pointer. It must be valid and must point to a file
 * successfully opened by <code>bzopen</code>.
 *
 * @return string Returns a string containing the error message.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzerrstr.php
 */
function bzerrstr($bz): string
{
}

/**
 * Force a write of all buffered data
 *
 * @param resource $bz The file pointer. It must be valid and must point to a file
 * successfully opened by <code>bzopen</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzflush.php
 */
function bzflush($bz): bool
{
}

/**
 * Opens a bzip2 compressed file
 *
 * @param mixed $file The name of the file to open, or an existing stream resource.
 * @param string $mode The modes 'r' (read), and 'w' (write) are supported.
 * Everything else will cause <code>bzopen</code> to return <code>FALSE</code>.
 *
 * @return resource If the open fails, <code>bzopen</code> returns <code>FALSE</code>, otherwise
 * it returns a pointer to the newly opened file.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzopen.php
 */
function bzopen($file, string $mode)
{
}

/**
 * Binary safe bzip2 file read
 *
 * @param resource $bz The file pointer. It must be valid and must point to a file
 * successfully opened by <code>bzopen</code>.
 * @param int|null $length If not specified, <code>bzread</code> will read 1024
 * (uncompressed) bytes at a time. A maximum of 8192
 * uncompressed bytes will be read at a time.
 *
 * @return string Returns the uncompressed data, or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzread.php
 */
function bzread($bz, int $length = 1024): string
{
}

/**
 * Binary safe bzip2 file write
 *
 * @param resource $bz The file pointer. It must be valid and must point to a file
 * successfully opened by <code>bzopen</code>.
 * @param string $data The written data.
 * @param int $length If supplied, writing will stop after <code>length</code>
 * (uncompressed) bytes have been written or the end of
 * <code>data</code> is reached, whichever comes first.
 *
 * @return int Returns the number of bytes written, or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzwrite.php
 */
function bzwrite($bz, string $data, int $length = null): int
{
}
