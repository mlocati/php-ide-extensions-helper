<?php
// Documentation generated automatically for extension Phar v2.0.2 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
/*
 * INI entries:
 * phar.readonly = '1'
 * phar.require_hash = '1'
 * phar.cache_list = ''
 */
// No constants defined
class Phar extends RecursiveDirectoryIterator implements ArrayAccess, Countable
{
    const BZ2 = 8192;
    const COMPRESSED = 61440;
    const GZ = 4096;
    const MD5 = 1;
    const NONE = 0;
    const OPENSSL = 16;
    const PHAR = 1;
    const PHP = 0;
    const PHPS = 1;
    const SHA1 = 2;
    const SHA256 = 3;
    const SHA512 = 4;
    const TAR = 2;
    const ZIP = 3;
    final public static function apiVersion()
    {
    }
    final public static function canCompress($method = null)
    {
    }
    final public static function canWrite()
    {
    }
    final public static function createDefaultStub($index = null, $webindex = null)
    {
    }
    final public static function getSupportedCompression()
    {
    }
    final public static function getSupportedSignatures()
    {
    }
    final public static function interceptFileFuncs()
    {
    }
    final public static function isValidPharFilename($filename, $executable = null)
    {
    }
    final public static function loadPhar($filename, $alias = null)
    {
    }
    final public static function mapPhar($alias = null, $offset = null)
    {
    }
    final public static function mount($inphar, $externalfile)
    {
    }
    final public static function mungServer($munglist)
    {
    }
    final public static function running($retphar)
    {
    }
    final public static function unlinkArchive($archive)
    {
    }
    final public static function webPhar($alias = null, $index = null, $f404 = null, $mimetypes = null, $rewrites = null)
    {
    }
    public function __construct($filename, $flags = null, $alias = null, $fileformat = null)
    {
    }
    public function __destruct()
    {
    }
    public function addEmptyDir($dirname = null)
    {
    }
    public function addFile($filename, $localname = null)
    {
    }
    public function addFromString($localname, $contents = null)
    {
    }
    public function buildFromDirectory($base_dir, $regex = null)
    {
    }
    public function buildFromIterator($iterator, $base_directory = null)
    {
    }
    public function compress($compression_type, $file_ext = null)
    {
    }
    public function compressFiles($compression_type)
    {
    }
    public function convertToData($format = null, $compression_type = null, $file_ext = null)
    {
    }
    public function convertToExecutable($format = null, $compression_type = null, $file_ext = null)
    {
    }
    public function copy($newfile, $oldfile)
    {
    }
    public function count()
    {
    }
    public function decompress($file_ext = null)
    {
    }
    public function decompressFiles()
    {
    }
    public function delete($entry)
    {
    }
    public function delMetadata()
    {
    }
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
    public function getVersion()
    {
    }
    public function hasMetadata()
    {
    }
    public function isBuffering()
    {
    }
    public function isCompressed()
    {
    }
    public function isFileFormat($fileformat)
    {
    }
    public function isWritable()
    {
    }
    public function offsetExists($entry)
    {
    }
    public function offsetGet($entry)
    {
    }
    public function offsetSet($entry, $value)
    {
    }
    public function offsetUnset($entry)
    {
    }
    public function setAlias($alias)
    {
    }
    public function setDefaultStub($index = null, $webindex = null)
    {
    }
    public function setMetadata($metadata)
    {
    }
    public function setSignatureAlgorithm($algorithm, $privatekey = null)
    {
    }
    public function setStub($newstub, $maxlen = null)
    {
    }
    public function startBuffering()
    {
    }
    public function stopBuffering()
    {
    }
}
class PharData extends RecursiveDirectoryIterator implements ArrayAccess, Countable
{
    final public static function apiVersion()
    {
    }
    final public static function canCompress($method = null)
    {
    }
    final public static function canWrite()
    {
    }
    final public static function createDefaultStub($index = null, $webindex = null)
    {
    }
    final public static function getSupportedCompression()
    {
    }
    final public static function getSupportedSignatures()
    {
    }
    final public static function interceptFileFuncs()
    {
    }
    final public static function isValidPharFilename($filename, $executable = null)
    {
    }
    final public static function loadPhar($filename, $alias = null)
    {
    }
    final public static function mapPhar($alias = null, $offset = null)
    {
    }
    final public static function mount($inphar, $externalfile)
    {
    }
    final public static function mungServer($munglist)
    {
    }
    final public static function running($retphar)
    {
    }
    final public static function unlinkArchive($archive)
    {
    }
    final public static function webPhar($alias = null, $index = null, $f404 = null, $mimetypes = null, $rewrites = null)
    {
    }
    public function __construct($filename, $flags = null, $alias = null, $fileformat = null)
    {
    }
    public function __destruct()
    {
    }
    public function addEmptyDir($dirname = null)
    {
    }
    public function addFile($filename, $localname = null)
    {
    }
    public function addFromString($localname, $contents = null)
    {
    }
    public function buildFromDirectory($base_dir, $regex = null)
    {
    }
    public function buildFromIterator($iterator, $base_directory = null)
    {
    }
    public function compress($compression_type, $file_ext = null)
    {
    }
    public function compressFiles($compression_type)
    {
    }
    public function convertToData($format = null, $compression_type = null, $file_ext = null)
    {
    }
    public function convertToExecutable($format = null, $compression_type = null, $file_ext = null)
    {
    }
    public function copy($newfile, $oldfile)
    {
    }
    public function count()
    {
    }
    public function decompress($file_ext = null)
    {
    }
    public function decompressFiles()
    {
    }
    public function delete($entry)
    {
    }
    public function delMetadata()
    {
    }
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
    public function getVersion()
    {
    }
    public function hasMetadata()
    {
    }
    public function isBuffering()
    {
    }
    public function isCompressed()
    {
    }
    public function isFileFormat($fileformat)
    {
    }
    public function isWritable()
    {
    }
    public function offsetExists($entry)
    {
    }
    public function offsetGet($entry)
    {
    }
    public function offsetSet($entry, $value)
    {
    }
    public function offsetUnset($entry)
    {
    }
    public function setAlias($alias)
    {
    }
    public function setDefaultStub($index = null, $webindex = null)
    {
    }
    public function setMetadata($metadata)
    {
    }
    public function setSignatureAlgorithm($algorithm, $privatekey = null)
    {
    }
    public function setStub($newstub, $maxlen = null)
    {
    }
    public function startBuffering()
    {
    }
    public function stopBuffering()
    {
    }
}
class PharException extends Exception
{
}
class PharFileInfo extends SplFileInfo
{
    public function __construct($filename)
    {
    }
    public function __destruct()
    {
    }
    public function chmod($perms)
    {
    }
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
    public function isCompressed($compression_type = null)
    {
    }
    public function isCRCChecked()
    {
    }
    public function setMetadata($metadata)
    {
    }
}
// No functions defined