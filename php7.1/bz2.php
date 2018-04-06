<?php
// Start of extension: bz2
// - parsed on POSIX with PHP 7.1.15 (extension version 7.1.15)
// - parsed on Windows with PHP 7.1.15 (extension version 7.1.15)

/**
 * Close a bzip2 file
 *
 * mixed $fp
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzclose.php
 */
function bzclose($fp): int
{
}

/**
 * Compress a string into bzip2 encoded data
 *
 * mixed $source
 * mixed $blocksize
 * mixed|null $workfactor
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzcompress.php
 */
function bzcompress($source, $blocksize, $workfactor = null)
{
}

/**
 * Decompresses bzip2 encoded data
 *
 * mixed $source
 * mixed|null $small
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzdecompress.php
 */
function bzdecompress($source, $small = null)
{
}

/**
 * Returns a bzip2 error number
 *
 * mixed $bz
 *
 * @return int
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
 * mixed $bz
 *
 * @return array
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
 * mixed $bz
 *
 * @return string
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
 * mixed $fp
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzflush.php
 */
function bzflush($fp): bool
{
}

/**
 * Opens a bzip2 compressed file
 *
 * mixed $file
 * mixed $mode
 *
 * @return resource
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzopen.php
 */
function bzopen($file, $mode)
{
}

/**
 * Binary safe bzip2 file read
 *
 * mixed $bz
 * mixed|null $length
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzread.php
 */
function bzread($bz, $length = null): string
{
}

/**
 * Binary safe bzip2 file write
 *
 * mixed $fp
 * mixed $str
 * mixed|null $length
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzwrite.php
 */
function bzwrite($fp, $str, $length = null): int
{
}
