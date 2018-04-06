<?php
// Start of extension: Phar
// - parsed on POSIX with PHP 7.2.3 (extension version 2.0.2)
// - parsed on Windows with PHP 7.2.4 (extension version 2.0.2)

/**
 * The Phar class provides a high-level interface to accessing and creating
 *     phar archives.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
 *
 * @link http://www.php.net/manual/en/class.phar.php
 */
class Phar extends RecursiveDirectoryIterator implements ArrayAccess, Countable
{
    /**
     * mixed $filename
     * mixed|null $flags
     * mixed|null $alias
     */
    public function __construct($filename, $flags = null, $alias = null)
    {
    }

    public function __destruct()
    {
    }

    /**
     * mixed|null $dirname
     */
    public function addEmptyDir($dirname = null)
    {
    }

    /**
     * mixed $filename
     * mixed|null $localname
     */
    public function addFile($filename, $localname = null)
    {
    }

    /**
     * mixed $localname
     * mixed|null $contents
     */
    public function addFromString($localname, $contents = null)
    {
    }

    final public static function apiVersion()
    {
    }

    /**
     * mixed $base_dir
     * mixed|null $regex
     */
    public function buildFromDirectory($base_dir, $regex = null)
    {
    }

    /**
     * mixed $iterator
     * mixed|null $base_directory
     */
    public function buildFromIterator($iterator, $base_directory = null)
    {
    }

    /**
     * mixed|null $method
     */
    final public static function canCompress($method = null)
    {
    }

    final public static function canWrite()
    {
    }

    /**
     * mixed $compression_type
     * mixed|null $file_ext
     */
    public function compress($compression_type, $file_ext = null)
    {
    }

    /**
     * mixed $compression_type
     */
    public function compressFiles($compression_type)
    {
    }

    /**
     * mixed|null $format
     * mixed|null $compression_type
     * mixed|null $file_ext
     */
    public function convertToData($format = null, $compression_type = null, $file_ext = null)
    {
    }

    /**
     * mixed|null $format
     * mixed|null $compression_type
     * mixed|null $file_ext
     */
    public function convertToExecutable($format = null, $compression_type = null, $file_ext = null)
    {
    }

    /**
     * Copies file
     *
     * mixed $newfile
     * mixed $oldfile
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.copy.php
     */
    public function copy($newfile, $oldfile): bool
    {
    }

    /**
     * Count all elements in an array, or something in an object
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.count.php
     */
    public function count(): int
    {
    }

    /**
     * mixed|null $index
     * mixed|null $webindex
     */
    final public static function createDefaultStub($index = null, $webindex = null)
    {
    }

    /**
     * mixed|null $file_ext
     */
    public function decompress($file_ext = null)
    {
    }

    public function decompressFiles()
    {
    }

    /**
     * See <code>unlink</code> or <code>unset</code>
     *
     * mixed $entry
     *
     * @since None
     *
     * @link http://www.php.net/manual/en/function.delete.php
     */
    public function delete($entry)
    {
    }

    public function delMetadata()
    {
    }

    /**
     * mixed $pathto
     * mixed|null $files
     * mixed|null $overwrite
     */
    public function extractTo($pathto, $files = null, $overwrite = null)
    {
    }

    public function getAlias()
    {
    }

    public function getMetadata()
    {
    }

    public function getModified()
    {
    }

    public function getPath()
    {
    }

    public function getSignature()
    {
    }

    public function getStub()
    {
    }

    final public static function getSupportedCompression()
    {
    }

    final public static function getSupportedSignatures()
    {
    }

    public function getVersion()
    {
    }

    public function hasMetadata()
    {
    }

    final public static function interceptFileFuncs()
    {
    }

    public function isBuffering()
    {
    }

    public function isCompressed()
    {
    }

    /**
     * mixed $fileformat
     */
    public function isFileFormat($fileformat)
    {
    }

    /**
     * mixed $filename
     * mixed|null $executable
     */
    final public static function isValidPharFilename($filename, $executable = null)
    {
    }

    public function isWritable()
    {
    }

    /**
     * mixed $filename
     * mixed|null $alias
     */
    final public static function loadPhar($filename, $alias = null)
    {
    }

    /**
     * mixed|null $alias
     * mixed|null $offset
     */
    final public static function mapPhar($alias = null, $offset = null)
    {
    }

    /**
     * mixed $inphar
     * mixed $externalfile
     */
    final public static function mount($inphar, $externalfile)
    {
    }

    /**
     * mixed $munglist
     */
    final public static function mungServer($munglist)
    {
    }

    /**
     * mixed $entry
     */
    public function offsetExists($entry)
    {
    }

    /**
     * mixed $entry
     */
    public function offsetGet($entry)
    {
    }

    /**
     * mixed $entry
     * mixed $value
     */
    public function offsetSet($entry, $value)
    {
    }

    /**
     * mixed $entry
     */
    public function offsetUnset($entry)
    {
    }

    /**
     * mixed|null $retphar
     */
    final public static function running($retphar = null)
    {
    }

    /**
     * mixed $alias
     */
    public function setAlias($alias)
    {
    }

    /**
     * mixed|null $index
     * mixed|null $webindex
     */
    public function setDefaultStub($index = null, $webindex = null)
    {
    }

    /**
     * mixed $metadata
     */
    public function setMetadata($metadata)
    {
    }

    /**
     * mixed $algorithm
     * mixed|null $privatekey
     */
    public function setSignatureAlgorithm($algorithm, $privatekey = null)
    {
    }

    /**
     * mixed $newstub
     * mixed|null $maxlen
     */
    public function setStub($newstub, $maxlen = null)
    {
    }

    public function startBuffering()
    {
    }

    public function stopBuffering()
    {
    }

    /**
     * mixed $archive
     */
    final public static function unlinkArchive($archive)
    {
    }

    /**
     * mixed|null $alias
     * mixed|null $index
     * mixed|null $f404
     * mixed|null $mimetypes
     * mixed|null $rewrites
     */
    final public static function webPhar($alias = null, $index = null, $f404 = null, $mimetypes = null, $rewrites = null)
    {
    }
}

/**
 * The PharData class provides a high-level interface to accessing and creating
 *     non-executable tar and zip archives.  Because these archives do not contain
 *     a stub and cannot be executed by the phar extension, it is possible to create
 *     and manipulate regular zip and tar files using the PharData class even if
 *     <code>phar.readonly</code> php.ini setting is <code>1</code>.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
 *
 * @link http://www.php.net/manual/en/class.phardata.php
 */
class PharData extends RecursiveDirectoryIterator implements ArrayAccess, Countable
{
    /**
     * mixed $filename
     * mixed|null $flags
     * mixed|null $alias
     * mixed|null $fileformat
     */
    public function __construct($filename, $flags = null, $alias = null, $fileformat = null)
    {
    }

    public function __destruct()
    {
    }

    /**
     * mixed|null $dirname
     */
    public function addEmptyDir($dirname = null)
    {
    }

    /**
     * mixed $filename
     * mixed|null $localname
     */
    public function addFile($filename, $localname = null)
    {
    }

    /**
     * mixed $localname
     * mixed|null $contents
     */
    public function addFromString($localname, $contents = null)
    {
    }

    final public static function apiVersion()
    {
    }

    /**
     * mixed $base_dir
     * mixed|null $regex
     */
    public function buildFromDirectory($base_dir, $regex = null)
    {
    }

    /**
     * mixed $iterator
     * mixed|null $base_directory
     */
    public function buildFromIterator($iterator, $base_directory = null)
    {
    }

    /**
     * mixed|null $method
     */
    final public static function canCompress($method = null)
    {
    }

    final public static function canWrite()
    {
    }

    /**
     * mixed $compression_type
     * mixed|null $file_ext
     */
    public function compress($compression_type, $file_ext = null)
    {
    }

    /**
     * mixed $compression_type
     */
    public function compressFiles($compression_type)
    {
    }

    /**
     * mixed|null $format
     * mixed|null $compression_type
     * mixed|null $file_ext
     */
    public function convertToData($format = null, $compression_type = null, $file_ext = null)
    {
    }

    /**
     * mixed|null $format
     * mixed|null $compression_type
     * mixed|null $file_ext
     */
    public function convertToExecutable($format = null, $compression_type = null, $file_ext = null)
    {
    }

    /**
     * Copies file
     *
     * mixed $newfile
     * mixed $oldfile
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.copy.php
     */
    public function copy($newfile, $oldfile): bool
    {
    }

    /**
     * Count all elements in an array, or something in an object
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.count.php
     */
    public function count(): int
    {
    }

    /**
     * mixed|null $index
     * mixed|null $webindex
     */
    final public static function createDefaultStub($index = null, $webindex = null)
    {
    }

    /**
     * mixed|null $file_ext
     */
    public function decompress($file_ext = null)
    {
    }

    public function decompressFiles()
    {
    }

    /**
     * See <code>unlink</code> or <code>unset</code>
     *
     * mixed $entry
     *
     * @since None
     *
     * @link http://www.php.net/manual/en/function.delete.php
     */
    public function delete($entry)
    {
    }

    public function delMetadata()
    {
    }

    /**
     * mixed $pathto
     * mixed|null $files
     * mixed|null $overwrite
     */
    public function extractTo($pathto, $files = null, $overwrite = null)
    {
    }

    public function getAlias()
    {
    }

    public function getMetadata()
    {
    }

    public function getModified()
    {
    }

    public function getPath()
    {
    }

    public function getSignature()
    {
    }

    public function getStub()
    {
    }

    final public static function getSupportedCompression()
    {
    }

    final public static function getSupportedSignatures()
    {
    }

    public function getVersion()
    {
    }

    public function hasMetadata()
    {
    }

    final public static function interceptFileFuncs()
    {
    }

    public function isBuffering()
    {
    }

    public function isCompressed()
    {
    }

    /**
     * mixed $fileformat
     */
    public function isFileFormat($fileformat)
    {
    }

    /**
     * mixed $filename
     * mixed|null $executable
     */
    final public static function isValidPharFilename($filename, $executable = null)
    {
    }

    public function isWritable()
    {
    }

    /**
     * mixed $filename
     * mixed|null $alias
     */
    final public static function loadPhar($filename, $alias = null)
    {
    }

    /**
     * mixed|null $alias
     * mixed|null $offset
     */
    final public static function mapPhar($alias = null, $offset = null)
    {
    }

    /**
     * mixed $inphar
     * mixed $externalfile
     */
    final public static function mount($inphar, $externalfile)
    {
    }

    /**
     * mixed $munglist
     */
    final public static function mungServer($munglist)
    {
    }

    /**
     * mixed $entry
     */
    public function offsetExists($entry)
    {
    }

    /**
     * mixed $entry
     */
    public function offsetGet($entry)
    {
    }

    /**
     * mixed $entry
     * mixed $value
     */
    public function offsetSet($entry, $value)
    {
    }

    /**
     * mixed $entry
     */
    public function offsetUnset($entry)
    {
    }

    /**
     * mixed|null $retphar
     */
    final public static function running($retphar = null)
    {
    }

    /**
     * mixed $alias
     */
    public function setAlias($alias)
    {
    }

    /**
     * mixed|null $index
     * mixed|null $webindex
     */
    public function setDefaultStub($index = null, $webindex = null)
    {
    }

    /**
     * mixed $metadata
     */
    public function setMetadata($metadata)
    {
    }

    /**
     * mixed $algorithm
     * mixed|null $privatekey
     */
    public function setSignatureAlgorithm($algorithm, $privatekey = null)
    {
    }

    /**
     * mixed $newstub
     * mixed|null $maxlen
     */
    public function setStub($newstub, $maxlen = null)
    {
    }

    public function startBuffering()
    {
    }

    public function stopBuffering()
    {
    }

    /**
     * mixed $archive
     */
    final public static function unlinkArchive($archive)
    {
    }

    /**
     * mixed|null $alias
     * mixed|null $index
     * mixed|null $f404
     * mixed|null $mimetypes
     * mixed|null $rewrites
     */
    final public static function webPhar($alias = null, $index = null, $f404 = null, $mimetypes = null, $rewrites = null)
    {
    }
}

/**
 * The PharException class provides a phar-specific exception class
 *     for try/catch blocks.
 *
 * @since Unknown
 *
 * @link http://www.php.net/manual/en/class.php#class.pharexception
 */
class PharException extends Exception
{
}

/**
 * The PharFileInfo class provides a high-level interface to the contents
 *     and attributes of a single file within a phar archive.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
 *
 * @link http://www.php.net/manual/en/class.pharfileinfo.php
 */
class PharFileInfo extends SplFileInfo
{
    /**
     * mixed $filename
     */
    public function __construct($filename)
    {
    }

    public function __destruct()
    {
    }

    /**
     * Changes file mode
     *
     * mixed $perms
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.chmod.php
     */
    public function chmod($perms): bool
    {
    }

    /**
     * mixed $compression_type
     */
    public function compress($compression_type)
    {
    }

    public function decompress()
    {
    }

    public function delMetadata()
    {
    }

    public function getCompressedSize()
    {
    }

    public function getContent()
    {
    }

    public function getCRC32()
    {
    }

    public function getMetadata()
    {
    }

    public function getPharFlags()
    {
    }

    public function hasMetadata()
    {
    }

    /**
     * mixed|null $compression_type
     */
    public function isCompressed($compression_type = null)
    {
    }

    public function isCRCChecked()
    {
    }

    /**
     * mixed $metadata
     */
    public function setMetadata($metadata)
    {
    }
}
