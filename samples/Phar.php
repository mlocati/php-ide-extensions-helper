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
class Phar extends RecursiveDirectoryIterator implements RecursiveIterator, SeekableIterator, Traversable, Iterator, Countable, ArrayAccess
{
    const BZ2 = 8192;
    const COMPRESSED = 61440;
    const CURRENT_AS_FILEINFO = 0;
    const CURRENT_AS_PATHNAME = 32;
    const CURRENT_AS_SELF = 16;
    const CURRENT_MODE_MASK = 240;
    const FOLLOW_SYMLINKS = 512;
    const GZ = 4096;
    const KEY_AS_FILENAME = 256;
    const KEY_AS_PATHNAME = 0;
    const KEY_MODE_MASK = 3840;
    const MD5 = 1;
    const NEW_CURRENT_AND_KEY = 256;
    const NONE = 0;
    const OPENSSL = 16;
    const OTHER_MODE_MASK = 12288;
    const PHAR = 1;
    const PHP = 0;
    const PHPS = 1;
    const SHA1 = 2;
    const SHA256 = 3;
    const SHA512 = 4;
    const SKIP_DOTS = 4096;
    const TAR = 2;
    const UNIX_PATHS = 8192;
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
    public function __toString()
    {
    }
    final public function _bad_state_ex()
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
    public function current()
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
    public function getATime()
    {
    }
    public function getBasename($suffix = null)
    {
    }
    public function getChildren()
    {
    }
    public function getCTime()
    {
    }
    public function getExtension()
    {
    }
    public function getFileInfo($class_name = null)
    {
    }
    public function getFilename()
    {
    }
    public function getFlags()
    {
    }
    public function getGroup()
    {
    }
    public function getInode()
    {
    }
    public function getLinkTarget()
    {
    }
    public function getMetadata()
    {
    }
    public function getModified()
    {
    }
    public function getMTime()
    {
    }
    public function getOwner()
    {
    }
    public function getPath()
    {
    }
    public function getPathInfo($class_name = null)
    {
    }
    public function getPathname()
    {
    }
    public function getPerms()
    {
    }
    public function getRealPath()
    {
    }
    public function getSignature()
    {
    }
    public function getSize()
    {
    }
    public function getStub()
    {
    }
    public function getSubPath()
    {
    }
    public function getSubPathname()
    {
    }
    public function getType()
    {
    }
    public function getVersion()
    {
    }
    public function hasChildren($allow_links = null)
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
    public function isDir()
    {
    }
    public function isDot()
    {
    }
    public function isExecutable()
    {
    }
    public function isFile()
    {
    }
    public function isFileFormat($fileformat)
    {
    }
    public function isLink()
    {
    }
    public function isReadable()
    {
    }
    public function isWritable()
    {
    }
    public function key()
    {
    }
    public function next()
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
    public function openFile($open_mode = null, $use_include_path = null, $context = null)
    {
    }
    public function rewind()
    {
    }
    public function seek($position)
    {
    }
    public function setAlias($alias)
    {
    }
    public function setDefaultStub($index = null, $webindex = null)
    {
    }
    public function setFileClass($class_name = null)
    {
    }
    public function setFlags($flags = null)
    {
    }
    public function setInfoClass($class_name = null)
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
    public function valid()
    {
    }
}
class PharData extends RecursiveDirectoryIterator implements RecursiveIterator, SeekableIterator, Traversable, Iterator, Countable, ArrayAccess
{
    const CURRENT_AS_FILEINFO = 0;
    const CURRENT_AS_PATHNAME = 32;
    const CURRENT_AS_SELF = 16;
    const CURRENT_MODE_MASK = 240;
    const FOLLOW_SYMLINKS = 512;
    const KEY_AS_FILENAME = 256;
    const KEY_AS_PATHNAME = 0;
    const KEY_MODE_MASK = 3840;
    const NEW_CURRENT_AND_KEY = 256;
    const OTHER_MODE_MASK = 12288;
    const SKIP_DOTS = 4096;
    const UNIX_PATHS = 8192;
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
    public function __toString()
    {
    }
    final public function _bad_state_ex()
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
    public function current()
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
    public function getATime()
    {
    }
    public function getBasename($suffix = null)
    {
    }
    public function getChildren()
    {
    }
    public function getCTime()
    {
    }
    public function getExtension()
    {
    }
    public function getFileInfo($class_name = null)
    {
    }
    public function getFilename()
    {
    }
    public function getFlags()
    {
    }
    public function getGroup()
    {
    }
    public function getInode()
    {
    }
    public function getLinkTarget()
    {
    }
    public function getMetadata()
    {
    }
    public function getModified()
    {
    }
    public function getMTime()
    {
    }
    public function getOwner()
    {
    }
    public function getPath()
    {
    }
    public function getPathInfo($class_name = null)
    {
    }
    public function getPathname()
    {
    }
    public function getPerms()
    {
    }
    public function getRealPath()
    {
    }
    public function getSignature()
    {
    }
    public function getSize()
    {
    }
    public function getStub()
    {
    }
    public function getSubPath()
    {
    }
    public function getSubPathname()
    {
    }
    public function getType()
    {
    }
    public function getVersion()
    {
    }
    public function hasChildren($allow_links = null)
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
    public function isDir()
    {
    }
    public function isDot()
    {
    }
    public function isExecutable()
    {
    }
    public function isFile()
    {
    }
    public function isFileFormat($fileformat)
    {
    }
    public function isLink()
    {
    }
    public function isReadable()
    {
    }
    public function isWritable()
    {
    }
    public function key()
    {
    }
    public function next()
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
    public function openFile($open_mode = null, $use_include_path = null, $context = null)
    {
    }
    public function rewind()
    {
    }
    public function seek($position)
    {
    }
    public function setAlias($alias)
    {
    }
    public function setDefaultStub($index = null, $webindex = null)
    {
    }
    public function setFileClass($class_name = null)
    {
    }
    public function setFlags($flags = null)
    {
    }
    public function setInfoClass($class_name = null)
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
    public function valid()
    {
    }
}
class PharException extends Exception
{
    protected $code = 0;
    protected $file;
    protected $line;
    protected $message = '';
    public function __construct($message = null, $code = null, $previous = null)
    {
    }
    public function __toString()
    {
    }
    public function __wakeup()
    {
    }
    final public function getCode()
    {
    }
    final public function getFile()
    {
    }
    final public function getLine()
    {
    }
    final public function getMessage()
    {
    }
    final public function getPrevious()
    {
    }
    final public function getTrace()
    {
    }
    final public function getTraceAsString()
    {
    }
    final private function __clone()
    {
    }
}
class PharFileInfo extends SplFileInfo
{
    public function __construct($filename)
    {
    }
    public function __destruct()
    {
    }
    public function __toString()
    {
    }
    final public function _bad_state_ex()
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
    public function getATime()
    {
    }
    public function getBasename($suffix = null)
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
    public function getCTime()
    {
    }
    public function getExtension()
    {
    }
    public function getFileInfo($class_name = null)
    {
    }
    public function getFilename()
    {
    }
    public function getGroup()
    {
    }
    public function getInode()
    {
    }
    public function getLinkTarget()
    {
    }
    public function getMetadata()
    {
    }
    public function getMTime()
    {
    }
    public function getOwner()
    {
    }
    public function getPath()
    {
    }
    public function getPathInfo($class_name = null)
    {
    }
    public function getPathname()
    {
    }
    public function getPerms()
    {
    }
    public function getPharFlags()
    {
    }
    public function getRealPath()
    {
    }
    public function getSize()
    {
    }
    public function getType()
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
    public function isDir()
    {
    }
    public function isExecutable()
    {
    }
    public function isFile()
    {
    }
    public function isLink()
    {
    }
    public function isReadable()
    {
    }
    public function isWritable()
    {
    }
    public function openFile($open_mode = null, $use_include_path = null, $context = null)
    {
    }
    public function setFileClass($class_name = null)
    {
    }
    public function setInfoClass($class_name = null)
    {
    }
    public function setMetadata($metadata)
    {
    }
}
// No functions defined