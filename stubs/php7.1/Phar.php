<?php
// Start of extension: Phar
// - parsed on POSIX with PHP 7.1.15 (extension version 2.0.2)
// - parsed on Windows with PHP 7.1.15 (extension version 2.0.2)

/**
 * The Phar class provides a high-level interface to accessing and creating
 * phar archives.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
 *
 * @link http://www.php.net/manual/en/class.phar.php
 */
class Phar extends RecursiveDirectoryIterator implements ArrayAccess, Countable
{
    /**
     * @var int
     */
    const BZ2 = 8192;

    /**
     * @var int
     */
    const COMPRESSED = 61440;

    /**
     * @var int
     */
    const GZ = 4096;

    /**
     * @var int
     */
    const MD5 = 1;

    /**
     * @var int
     */
    const NONE = 0;

    /**
     * @var int
     */
    const OPENSSL = 16;

    /**
     * @var int
     */
    const PHAR = 1;

    /**
     * @var int
     */
    const PHP = 0;

    /**
     * @var int
     */
    const PHPS = 1;

    /**
     * @var int
     */
    const SHA1 = 2;

    /**
     * @var int
     */
    const SHA256 = 3;

    /**
     * @var int
     */
    const SHA512 = 4;

    /**
     * @var int
     */
    const TAR = 2;

    /**
     * @var int
     */
    const ZIP = 3;

    /**
     * Construct a Phar archive object
     *
     * @param mixed $filename
     * @param mixed|null $flags
     * @param mixed|null $alias
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.construct.php
     */
    public function __construct($filename, $flags = null, $alias = null)
    {
    }

    public function __destruct()
    {
    }

    /**
     * Add an empty directory to the phar archive
     *
     * @param mixed|null $dirname
     *
     * @return void
     *
     * @since Unknown
     *
     * @link http://www.php.net/manual/en/phar.addemptydir.php
     */
    public function addEmptyDir($dirname = null): void
    {
    }

    /**
     * Add a file from the filesystem to the phar archive
     *
     * @param mixed $filename
     * @param mixed|null $localname
     *
     * @return void
     *
     * @since Unknown
     *
     * @link http://www.php.net/manual/en/phar.addfile.php
     */
    public function addFile($filename, $localname = null): void
    {
    }

    /**
     * Add a file from a string to the phar archive
     *
     * @param mixed $localname
     * @param mixed|null $contents
     *
     * @return void
     *
     * @since Unknown
     *
     * @link http://www.php.net/manual/en/phar.addfromstring.php
     */
    public function addFromString($localname, $contents = null): void
    {
    }

    /**
     * Returns the api version
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.apiversion.php
     */
    final public static function apiVersion(): string
    {
    }

    /**
     * Construct a phar archive from the files within a directory
     *
     * @param mixed $base_dir
     * @param mixed|null $regex
     *
     * @return array
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.buildfromdirectory.php
     */
    public function buildFromDirectory($base_dir, $regex = null): array
    {
    }

    /**
     * Construct a phar archive from an iterator
     *
     * @param mixed $iterator
     * @param mixed|null $base_directory
     *
     * @return array
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.buildfromiterator.php
     */
    public function buildFromIterator($iterator, $base_directory = null): array
    {
    }

    /**
     * Returns whether phar extension supports compression using either zlib or bzip2
     *
     * @param mixed|null $method
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.cancompress.php
     */
    final public static function canCompress($method = null): bool
    {
    }

    /**
     * Returns whether phar extension supports writing and creating phars
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.canwrite.php
     */
    final public static function canWrite(): bool
    {
    }

    /**
     * Compresses the entire Phar archive using Gzip or Bzip2 compression
     *
     * @param mixed $compression_type
     * @param mixed|null $file_ext
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.compress.php
     */
    public function compress($compression_type, $file_ext = null)
    {
    }

    /**
     * Compresses all files in the current Phar archive
     *
     * @param mixed $compression_type
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.compressfiles.php
     */
    public function compressFiles($compression_type): void
    {
    }

    /**
     * Convert a phar archive to a non-executable tar or zip file
     *
     * @param mixed|null $format
     * @param mixed|null $compression_type
     * @param mixed|null $file_ext
     *
     * @return PharData
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.converttodata.php
     */
    public function convertToData($format = null, $compression_type = null, $file_ext = null): PharData
    {
    }

    /**
     * Convert a phar archive to another executable phar archive file format
     *
     * @param mixed|null $format
     * @param mixed|null $compression_type
     * @param mixed|null $file_ext
     *
     * @return Phar
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.converttoexecutable.php
     */
    public function convertToExecutable($format = null, $compression_type = null, $file_ext = null): Phar
    {
    }

    /**
     * Copy a file internal to the phar archive to another new file within the phar
     *
     * @param mixed $newfile
     * @param mixed $oldfile
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.copy.php
     */
    public function copy($newfile, $oldfile): bool
    {
    }

    /**
     * Returns the number of entries (files) in the Phar archive
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.count.php
     */
    public function count(): int
    {
    }

    /**
     * Create a phar-file format specific stub
     *
     * @param mixed|null $index
     * @param mixed|null $webindex
     *
     * @return string
     *
     * @since Unknown
     *
     * @link http://www.php.net/manual/en/phar.createdefaultstub.php
     */
    final public static function createDefaultStub($index = null, $webindex = null): string
    {
    }

    /**
     * Decompresses the entire Phar archive
     *
     * @param mixed|null $file_ext
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.decompress.php
     */
    public function decompress($file_ext = null)
    {
    }

    /**
     * Decompresses all files in the current Phar archive
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.decompressfiles.php
     */
    public function decompressFiles(): bool
    {
    }

    /**
     * Delete a file within a phar archive
     *
     * @param mixed $entry
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.delete.php
     */
    public function delete($entry): bool
    {
    }

    /**
     * Deletes the global metadata of the phar
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
     *
     * @link http://www.php.net/manual/en/phar.delmetadata.php
     */
    public function delMetadata(): bool
    {
    }

    /**
     * Extract the contents of a phar archive to a directory
     *
     * @param mixed $pathto
     * @param mixed|null $files
     * @param mixed|null $overwrite
     *
     * @return bool
     *
     * @since Unknown
     *
     * @link http://www.php.net/manual/en/phar.extractto.php
     */
    public function extractTo($pathto, $files = null, $overwrite = null): bool
    {
    }

    /**
     * Get the alias for Phar
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.1
     *
     * @link http://www.php.net/manual/en/phar.getalias.php
     */
    public function getAlias(): string
    {
    }

    /**
     * Returns phar archive meta-data
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.getmetadata.php
     */
    public function getMetadata()
    {
    }

    /**
     * Return whether phar was modified
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.getmodified.php
     */
    public function getModified(): bool
    {
    }

    /**
     * Get the real path to the Phar archive on disk
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/phar.getpath.php
     */
    public function getPath(): string
    {
    }

    /**
     * Return MD5/SHA1/SHA256/SHA512/OpenSSL signature of a Phar archive
     *
     * @return array
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.getsignature.php
     */
    public function getSignature(): array
    {
    }

    /**
     * Return the PHP loader or bootstrap stub of a Phar archive
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.getstub.php
     */
    public function getStub(): string
    {
    }

    /**
     * Return array of supported compression algorithms
     *
     * @return array
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
     *
     * @link http://www.php.net/manual/en/phar.getsupportedcompression.php
     */
    final public static function getSupportedCompression(): array
    {
    }

    /**
     * Return array of supported signature types
     *
     * @return array
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.1.0
     *
     * @link http://www.php.net/manual/en/phar.getsupportedsignatures.php
     */
    final public static function getSupportedSignatures(): array
    {
    }

    /**
     * Return version info of Phar archive
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.getversion.php
     */
    public function getVersion(): string
    {
    }

    /**
     * Returns whether phar has global meta-data
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
     *
     * @link http://www.php.net/manual/en/phar.hasmetadata.php
     */
    public function hasMetadata(): bool
    {
    }

    /**
     * Instructs phar to intercept fopen, file_get_contents, opendir, and all of the stat-related functions
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.interceptfilefuncs.php
     */
    final public static function interceptFileFuncs(): void
    {
    }

    /**
     * Used to determine whether Phar write operations are being buffered, or are flushing directly to disk
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.isbuffering.php
     */
    public function isBuffering(): bool
    {
    }

    /**
     * Returns Phar::GZ or PHAR::BZ2 if the entire phar archive is compressed (.tar.gz/tar.bz and so on)
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.iscompressed.php
     */
    public function isCompressed()
    {
    }

    /**
     * Returns true if the phar archive is based on the tar/phar/zip file format depending on the parameter
     *
     * @param mixed $fileformat
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.isfileformat.php
     */
    public function isFileFormat($fileformat): bool
    {
    }

    /**
     * Returns whether the given filename is a valid phar filename
     *
     * @param mixed $filename
     * @param mixed|null $executable
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
     *
     * @link http://www.php.net/manual/en/phar.isvalidpharfilename.php
     */
    final public static function isValidPharFilename($filename, $executable = null): bool
    {
    }

    /**
     * Returns true if the phar archive can be modified
     *
     * @return bool
     *
     * @since Unknown
     *
     * @link http://www.php.net/manual/en/phar.iswritable.php
     */
    public function isWritable(): bool
    {
    }

    /**
     * Loads any phar archive with an alias
     *
     * @param mixed $filename
     * @param mixed|null $alias
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.loadphar.php
     */
    final public static function loadPhar($filename, $alias = null): bool
    {
    }

    /**
     * Reads the currently executed file (a phar) and registers its manifest
     *
     * @param mixed|null $alias
     * @param mixed|null $offset
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.mapphar.php
     */
    final public static function mapPhar($alias = null, $offset = null): bool
    {
    }

    /**
     * Mount an external path or file to a virtual location within the phar archive
     *
     * @param mixed $inphar
     * @param mixed $externalfile
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.mount.php
     */
    final public static function mount($inphar, $externalfile): void
    {
    }

    /**
     * Defines a list of up to 4 $_SERVER variables that should be modified for execution
     *
     * @param mixed $munglist
     *
     * @return void
     *
     * @since Unknown
     *
     * @link http://www.php.net/manual/en/phar.mungserver.php
     */
    final public static function mungServer($munglist): void
    {
    }

    /**
     * Determines whether a file exists in the phar
     *
     * @param mixed $entry
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.offsetexists.php
     */
    public function offsetExists($entry): bool
    {
    }

    /**
     * Gets a <code>PharFileInfo</code> object for a specific file
     *
     * @param mixed $entry
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.offsetget.php
     */
    public function offsetGet($entry): int
    {
    }

    /**
     * Set the contents of an internal file to those of an external file
     *
     * @param mixed $entry
     * @param mixed $value
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.offsetset.php
     */
    public function offsetSet($entry, $value): void
    {
    }

    /**
     * Remove a file from a phar
     *
     * @param mixed $entry
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.offsetunset.php
     */
    public function offsetUnset($entry): bool
    {
    }

    /**
     * Returns the full path on disk or full phar URL to the currently executing Phar archive
     *
     * @param mixed|null $retphar
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.running.php
     */
    final public static function running($retphar = null): string
    {
    }

    /**
     * Set the alias for the Phar archive
     *
     * @param mixed $alias
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.1
     *
     * @link http://www.php.net/manual/en/phar.setalias.php
     */
    public function setAlias($alias): bool
    {
    }

    /**
     * Used to set the PHP loader or bootstrap stub of a Phar archive to the default loader
     *
     * @param mixed|null $index
     * @param mixed|null $webindex
     *
     * @return bool
     *
     * @since Unknown
     *
     * @link http://www.php.net/manual/en/phar.setdefaultstub.php
     */
    public function setDefaultStub($index = null, $webindex = null): bool
    {
    }

    /**
     * Sets phar archive meta-data
     *
     * @param mixed $metadata
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.setmetadata.php
     */
    public function setMetadata($metadata): void
    {
    }

    /**
     * Set the signature algorithm for a phar and apply it
     *
     * @param mixed $algorithm
     * @param mixed|null $privatekey
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.1.0
     *
     * @link http://www.php.net/manual/en/phar.setsignaturealgorithm.php
     */
    public function setSignatureAlgorithm($algorithm, $privatekey = null): void
    {
    }

    /**
     * Used to set the PHP loader or bootstrap stub of a Phar archive
     *
     * @param mixed $newstub
     * @param mixed|null $maxlen
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.setstub.php
     */
    public function setStub($newstub, $maxlen = null): bool
    {
    }

    /**
     * Start buffering Phar write operations, do not modify the Phar object on disk
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.startbuffering.php
     */
    public function startBuffering(): void
    {
    }

    /**
     * Stop buffering write requests to the Phar archive, and save changes to disk
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.stopbuffering.php
     */
    public function stopBuffering(): void
    {
    }

    /**
     * Completely remove a phar archive from disk and from memory
     *
     * @param mixed $archive
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.unlinkarchive.php
     */
    final public static function unlinkArchive($archive): bool
    {
    }

    /**
     * mapPhar for web-based phars. front controller for web applications
     *
     * @param mixed|null $alias
     * @param mixed|null $index
     * @param mixed|null $f404
     * @param mixed|null $mimetypes
     * @param mixed|null $rewrites
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.webphar.php
     */
    final public static function webPhar($alias = null, $index = null, $f404 = null, $mimetypes = null, $rewrites = null): void
    {
    }
}

/**
 * The PharData class provides a high-level interface to accessing and creating
 * non-executable tar and zip archives. Because these archives do not contain
 * a stub and cannot be executed by the phar extension, it is possible to create
 * and manipulate regular zip and tar files using the PharData class even if
 * <code>phar.readonly</code> php.ini setting is <code>1</code>.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
 *
 * @link http://www.php.net/manual/en/class.phardata.php
 */
class PharData extends RecursiveDirectoryIterator implements ArrayAccess, Countable
{
    /**
     * Construct a non-executable tar or zip archive object
     *
     * @param mixed $filename
     * @param mixed|null $flags
     * @param mixed|null $alias
     * @param mixed|null $fileformat
     *
     * @link http://www.php.net/manual/en/phardata.construct.php
     */
    public function __construct($filename, $flags = null, $alias = null, $fileformat = null)
    {
    }

    public function __destruct()
    {
    }

    /**
     * Add an empty directory to the tar/zip archive
     *
     * @param mixed|null $dirname
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.addemptydir.php
     */
    public function addEmptyDir($dirname = null): void
    {
    }

    /**
     * Add a file from the filesystem to the tar/zip archive
     *
     * @param mixed $filename
     * @param mixed|null $localname
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.addfile.php
     */
    public function addFile($filename, $localname = null): void
    {
    }

    /**
     * Add a file from the filesystem to the tar/zip archive
     *
     * @param mixed $localname
     * @param mixed|null $contents
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.addfromstring.php
     */
    public function addFromString($localname, $contents = null): void
    {
    }

    final public static function apiVersion()
    {
    }

    /**
     * Construct a tar/zip archive from the files within a directory
     *
     * @param mixed $base_dir
     * @param mixed|null $regex
     *
     * @return array
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.buildfromdirectory.php
     */
    public function buildFromDirectory($base_dir, $regex = null): array
    {
    }

    /**
     * Construct a tar or zip archive from an iterator
     *
     * @param mixed $iterator
     * @param mixed|null $base_directory
     *
     * @return array
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.buildfromiterator.php
     */
    public function buildFromIterator($iterator, $base_directory = null): array
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
     * Compresses the entire tar/zip archive using Gzip or Bzip2 compression
     *
     * @param mixed $compression_type
     * @param mixed|null $file_ext
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.compress.php
     */
    public function compress($compression_type, $file_ext = null)
    {
    }

    /**
     * Compresses all files in the current tar/zip archive
     *
     * @param mixed $compression_type
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.compressfiles.php
     */
    public function compressFiles($compression_type): void
    {
    }

    /**
     * Convert a phar archive to a non-executable tar or zip file
     *
     * @param mixed|null $format
     * @param mixed|null $compression_type
     * @param mixed|null $file_ext
     *
     * @return PharData
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.converttodata.php
     */
    public function convertToData($format = null, $compression_type = null, $file_ext = null): PharData
    {
    }

    /**
     * Convert a non-executable tar/zip archive to an executable phar archive
     *
     * @param mixed|null $format
     * @param mixed|null $compression_type
     * @param mixed|null $file_ext
     *
     * @return Phar
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.converttoexecutable.php
     */
    public function convertToExecutable($format = null, $compression_type = null, $file_ext = null): Phar
    {
    }

    /**
     * Copy a file internal to the phar archive to another new file within the phar
     *
     * @param mixed $newfile
     * @param mixed $oldfile
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.copy.php
     */
    public function copy($newfile, $oldfile): bool
    {
    }

    public function count()
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
     * Decompresses the entire Phar archive
     *
     * @param mixed|null $file_ext
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.decompress.php
     */
    public function decompress($file_ext = null)
    {
    }

    /**
     * Decompresses all files in the current zip archive
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.decompressfiles.php
     */
    public function decompressFiles(): bool
    {
    }

    /**
     * Delete a file within a tar/zip archive
     *
     * @param mixed $entry
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.delete.php
     */
    public function delete($entry): bool
    {
    }

    /**
     * Deletes the global metadata of a zip archive
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.delmetadata.php
     */
    public function delMetadata(): bool
    {
    }

    /**
     * Extract the contents of a tar/zip archive to a directory
     *
     * @param mixed $pathto
     * @param mixed|null $files
     * @param mixed|null $overwrite
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.extractto.php
     */
    public function extractTo($pathto, $files = null, $overwrite = null): bool
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

    /**
     * Returns true if the tar/zip archive can be modified
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.iswritable.php
     */
    public function isWritable(): bool
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
     * Set the contents of a file within the tar/zip to those of an external file or string
     *
     * @param mixed $entry
     * @param mixed $value
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.offsetset.php
     */
    public function offsetSet($entry, $value): void
    {
    }

    /**
     * Remove a file from a tar/zip archive
     *
     * @param mixed $entry
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.offsetunset.php
     */
    public function offsetUnset($entry): bool
    {
    }

    /**
     * @param mixed|null $retphar
     */
    final public static function running($retphar = null)
    {
    }

    /**
     * Dummy function (Phar::setAlias is not valid for PharData)
     *
     * @param mixed $alias
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.setalias.php
     */
    public function setAlias($alias): bool
    {
    }

    /**
     * Dummy function (Phar::setDefaultStub is not valid for PharData)
     *
     * @param mixed|null $index
     * @param mixed|null $webindex
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.setdefaultstub.php
     */
    public function setDefaultStub($index = null, $webindex = null): bool
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
     * Dummy function (Phar::setStub is not valid for PharData)
     *
     * @param mixed $newstub
     * @param mixed|null $maxlen
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.setstub.php
     */
    public function setStub($newstub, $maxlen = null): bool
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
 * for try/catch blocks.
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
 * and attributes of a single file within a phar archive.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
 *
 * @link http://www.php.net/manual/en/class.pharfileinfo.php
 */
class PharFileInfo extends SplFileInfo
{
    /**
     * Construct a Phar entry object
     *
     * @param mixed $filename
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/pharfileinfo.construct.php
     */
    public function __construct($filename)
    {
    }

    public function __destruct()
    {
    }

    /**
     * Sets file-specific permission bits
     *
     * @param mixed $perms
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/pharfileinfo.chmod.php
     */
    public function chmod($perms): void
    {
    }

    /**
     * Compresses the current Phar entry with either zlib or bzip2 compression
     *
     * @param mixed $compression_type
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/pharfileinfo.compress.php
     */
    public function compress($compression_type): bool
    {
    }

    /**
     * Decompresses the current Phar entry within the phar
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/pharfileinfo.decompress.php
     */
    public function decompress(): bool
    {
    }

    /**
     * Deletes the metadata of the entry
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
     *
     * @link http://www.php.net/manual/en/pharfileinfo.delmetadata.php
     */
    public function delMetadata(): bool
    {
    }

    /**
     * Returns the actual size of the file (with compression) inside the Phar archive
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/pharfileinfo.getcompressedsize.php
     */
    public function getCompressedSize(): int
    {
    }

    /**
     * Get the complete file contents of the entry
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/pharfileinfo.getcontent.php
     */
    public function getContent(): string
    {
    }

    /**
     * Returns CRC32 code or throws an exception if CRC has not been verified
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/pharfileinfo.getcrc32.php
     */
    public function getCRC32(): int
    {
    }

    /**
     * Returns file-specific meta-data saved with a file
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/pharfileinfo.getmetadata.php
     */
    public function getMetadata()
    {
    }

    /**
     * Returns the Phar file entry flags
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/pharfileinfo.getpharflags.php
     */
    public function getPharFlags(): int
    {
    }

    /**
     * Returns the metadata of the entry
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
     *
     * @link http://www.php.net/manual/en/pharfileinfo.hasmetadata.php
     */
    public function hasMetadata(): bool
    {
    }

    /**
     * Returns whether the entry is compressed
     *
     * @param mixed|null $compression_type
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/pharfileinfo.iscompressed.php
     */
    public function isCompressed($compression_type = null): bool
    {
    }

    /**
     * Returns whether file entry has had its CRC verified
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/pharfileinfo.iscrcchecked.php
     */
    public function isCRCChecked(): bool
    {
    }

    /**
     * Sets file-specific meta-data saved with a file
     *
     * @param mixed $metadata
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/pharfileinfo.setmetadata.php
     */
    public function setMetadata($metadata): void
    {
    }
}
