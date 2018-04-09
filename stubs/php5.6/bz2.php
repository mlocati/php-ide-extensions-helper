<?php
// Start of extension: bz2
// - parsed on POSIX with PHP 5.6.34
// - parsed on Windows with PHP 5.6.34

/**
 * Close a bzip2 file
 *
 * @param mixed $fp
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzclose.php
 */
function bzclose($fp)
{
}

/**
 * Compress a string into bzip2 encoded data
 *
 * @param mixed $source
 * @param mixed $blocksize
 * @param mixed|null $workfactor
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
 * @param mixed $source
 * @param mixed|null $small
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
 * @param mixed $bz
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzerrno.php
 */
function bzerrno($bz)
{
}

/**
 * Returns the bzip2 error number and error string in an array
 *
 * @param mixed $bz
 *
 * @return array
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzerror.php
 */
function bzerror($bz)
{
}

/**
 * Returns a bzip2 error string
 *
 * @param mixed $bz
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzerrstr.php
 */
function bzerrstr($bz)
{
}

/**
 * Force a write of all buffered data
 *
 * @param mixed $fp
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzflush.php
 */
function bzflush($fp)
{
}

/**
 * Opens a bzip2 compressed file
 *
 * @param mixed $file
 * @param mixed $mode
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
 * @param mixed $bz
 * @param mixed|null $length
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzread.php
 */
function bzread($bz, $length = null)
{
}

/**
 * Binary safe bzip2 file write
 *
 * @param mixed $fp
 * @param mixed $str
 * @param mixed|null $length
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bzwrite.php
 */
function bzwrite($fp, $str, $length = null)
{
}
