<?php
// Start of extension: Phar
// - parsed on POSIX with PHP 7.0.28 (extension version 2.0.2)
// - parsed on Windows with PHP 7.0.28 (extension version 2.0.2)

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
     * @param mixed $filename
     * @param mixed|null $flags
     * @param mixed|null $alias
     */
    public function __construct($filename, $flags = null, $alias = null)
    {
    }

    public function __destruct()
    {
    }

    /**
     * @param mixed|null $dirname
     */
    public function addEmptyDir($dirname = null)
    {
    }

    /**
     * @param mixed $filename
     * @param mixed|null $localname
     */
    public function addFile($filename, $localname = null)
    {
    }

    /**
     * @param mixed $localname
     * @param mixed|null $contents
     */
    public function addFromString($localname, $contents = null)
    {
    }

    final public static function apiVersion()
    {
    }

    /**
     * @param mixed $base_dir
     * @param mixed|null $regex
     */
    public function buildFromDirectory($base_dir, $regex = null)
    {
    }

    /**
     * @param mixed $iterator
     * @param mixed|null $base_directory
     */
    public function buildFromIterator($iterator, $base_directory = null)
    {
    }

    /**
     * @param mixed|null $method
     */
    final public static function canCompress($method = null)
    {
    }

    final public static function canWrite()
    {
    }

    /**
     * @param mixed $compression_type
     * @param mixed|null $file_ext
     */
    public function compress($compression_type, $file_ext = null)
    {
    }

    /**
     * @param mixed $compression_type
     */
    public function compressFiles($compression_type)
    {
    }

    /**
     * @param mixed|null $format
     * @param mixed|null $compression_type
     * @param mixed|null $file_ext
     */
    public function convertToData($format = null, $compression_type = null, $file_ext = null)
    {
    }

    /**
     * @param mixed|null $format
     * @param mixed|null $compression_type
     * @param mixed|null $file_ext
     */
    public function convertToExecutable($format = null, $compression_type = null, $file_ext = null)
    {
    }

    /**
     * Copies file
     *
     * @param mixed $newfile
     * @param mixed $oldfile
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
     * @param mixed|null $index
     * @param mixed|null $webindex
     */
    final public static function createDefaultStub($index = null, $webindex = null)
    {
    }

    /**
     * @param mixed|null $file_ext
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
     * @param mixed $entry
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
     * @param mixed $pathto
     * @param mixed|null $files
     * @param mixed|null $overwrite
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
     * @param mixed $fileformat
     */
    public function isFileFormat($fileformat)
    {
    }

    /**
     * @param mixed $filename
     * @param mixed|null $executable
     */
    final public static function isValidPharFilename($filename, $executable = null)
    {
    }

    public function isWritable()
    {
    }

    /**
     * @param mixed $filename
     * @param mixed|null $alias
     */
    final public static function loadPhar($filename, $alias = null)
    {
    }

    /**
     * @param mixed|null $alias
     * @param mixed|null $offset
     */
    final public static function mapPhar($alias = null, $offset = null)
    {
    }

    /**
     * @param mixed $inphar
     * @param mixed $externalfile
     */
    final public static function mount($inphar, $externalfile)
    {
    }

    /**
     * @param mixed $munglist
     */
    final public static function mungServer($munglist)
    {
    }

    /**
     * @param mixed $entry
     */
    public function offsetExists($entry)
    {
    }

    /**
     * @param mixed $entry
     */
    public function offsetGet($entry)
    {
    }

    /**
     * @param mixed $entry
     * @param mixed $value
     */
    public function offsetSet($entry, $value)
    {
    }

    /**
     * @param mixed $entry
     */
    public function offsetUnset($entry)
    {
    }

    /**
     * @param mixed|null $retphar
     */
    final public static function running($retphar = null)
    {
    }

    /**
     * @param mixed $alias
     */
    public function setAlias($alias)
    {
    }

    /**
     * @param mixed|null $index
     * @param mixed|null $webindex
     */
    public function setDefaultStub($index = null, $webindex = null)
    {
    }

    /**
     * @param mixed $metadata
     */
    public function setMetadata($metadata)
    {
    }

    /**
     * @param mixed $algorithm
     * @param mixed|null $privatekey
     */
    public function setSignatureAlgorithm($algorithm, $privatekey = null)
    {
    }

    /**
     * @param mixed $newstub
     * @param mixed|null $maxlen
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
     * @param mixed $archive
     */
    final public static function unlinkArchive($archive)
    {
    }

    /**
     * @param mixed|null $alias
     * @param mixed|null $index
     * @param mixed|null $f404
     * @param mixed|null $mimetypes
     * @param mixed|null $rewrites
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
     * @param mixed $filename
     * @param mixed|null $flags
     * @param mixed|null $alias
     * @param mixed|null $fileformat
     */
    public function __construct($filename, $flags = null, $alias = null, $fileformat = null)
    {
    }

    public function __destruct()
    {
    }

    /**
     * @param mixed|null $dirname
     */
    public function addEmptyDir($dirname = null)
    {
    }

    /**
     * @param mixed $filename
     * @param mixed|null $localname
     */
    public function addFile($filename, $localname = null)
    {
    }

    /**
     * @param mixed $localname
     * @param mixed|null $contents
     */
    public function addFromString($localname, $contents = null)
    {
    }

    final public static function apiVersion()
    {
    }

    /**
     * @param mixed $base_dir
     * @param mixed|null $regex
     */
    public function buildFromDirectory($base_dir, $regex = null)
    {
    }

    /**
     * @param mixed $iterator
     * @param mixed|null $base_directory
     */
    public function buildFromIterator($iterator, $base_directory = null)
    {
    }

    /**
     * @param mixed|null $method
     */
    final public static function canCompress($method = null)
    {
    }

    final public static function canWrite()
    {
    }

    /**
     * @param mixed $compression_type
     * @param mixed|null $file_ext
     */
    public function compress($compression_type, $file_ext = null)
    {
    }

    /**
     * @param mixed $compression_type
     */
    public function compressFiles($compression_type)
    {
    }

    /**
     * @param mixed|null $format
     * @param mixed|null $compression_type
     * @param mixed|null $file_ext
     */
    public function convertToData($format = null, $compression_type = null, $file_ext = null)
    {
    }

    /**
     * @param mixed|null $format
     * @param mixed|null $compression_type
     * @param mixed|null $file_ext
     */
    public function convertToExecutable($format = null, $compression_type = null, $file_ext = null)
    {
    }

    /**
     * Copies file
     *
     * @param mixed $newfile
     * @param mixed $oldfile
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
     * @param mixed|null $index
     * @param mixed|null $webindex
     */
    final public static function createDefaultStub($index = null, $webindex = null)
    {
    }

    /**
     * @param mixed|null $file_ext
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
     * @param mixed $entry
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
     * @param mixed $pathto
     * @param mixed|null $files
     * @param mixed|null $overwrite
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
     * @param mixed $fileformat
     */
    public function isFileFormat($fileformat)
    {
    }

    /**
     * @param mixed $filename
     * @param mixed|null $executable
     */
    final public static function isValidPharFilename($filename, $executable = null)
    {
    }

    public function isWritable()
    {
    }

    /**
     * @param mixed $filename
     * @param mixed|null $alias
     */
    final public static function loadPhar($filename, $alias = null)
    {
    }

    /**
     * @param mixed|null $alias
     * @param mixed|null $offset
     */
    final public static function mapPhar($alias = null, $offset = null)
    {
    }

    /**
     * @param mixed $inphar
     * @param mixed $externalfile
     */
    final public static function mount($inphar, $externalfile)
    {
    }

    /**
     * @param mixed $munglist
     */
    final public static function mungServer($munglist)
    {
    }

    /**
     * @param mixed $entry
     */
    public function offsetExists($entry)
    {
    }

    /**
     * @param mixed $entry
     */
    public function offsetGet($entry)
    {
    }

    /**
     * @param mixed $entry
     * @param mixed $value
     */
    public function offsetSet($entry, $value)
    {
    }

    /**
     * @param mixed $entry
     */
    public function offsetUnset($entry)
    {
    }

    /**
     * @param mixed|null $retphar
     */
    final public static function running($retphar = null)
    {
    }

    /**
     * @param mixed $alias
     */
    public function setAlias($alias)
    {
    }

    /**
     * @param mixed|null $index
     * @param mixed|null $webindex
     */
    public function setDefaultStub($index = null, $webindex = null)
    {
    }

    /**
     * @param mixed $metadata
     */
    public function setMetadata($metadata)
    {
    }

    /**
     * @param mixed $algorithm
     * @param mixed|null $privatekey
     */
    public function setSignatureAlgorithm($algorithm, $privatekey = null)
    {
    }

    /**
     * @param mixed $newstub
     * @param mixed|null $maxlen
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
     * @param mixed $archive
     */
    final public static function unlinkArchive($archive)
    {
    }

    /**
     * @param mixed|null $alias
     * @param mixed|null $index
     * @param mixed|null $f404
     * @param mixed|null $mimetypes
     * @param mixed|null $rewrites
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
     * @param mixed $filename
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
     * @param mixed $perms
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
     * @param mixed $compression_type
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
     * @param mixed|null $compression_type
     */
    public function isCompressed($compression_type = null)
    {
    }

    public function isCRCChecked()
    {
    }

    /**
     * @param mixed $metadata
     */
    public function setMetadata($metadata)
    {
    }
}
