<?php
// Start of extension: Phar
// - parsed on POSIX with PHP 7.0.28 (extension version 2.0.2)
// - parsed on Windows with PHP 7.0.28 (extension version 2.0.2)

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
     * 0x00002000
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/phar.constants.php#phar.constants.bz2
     */
    const BZ2 = 8192;

    /**
     * 0x0000F000
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/phar.constants.php#phar.constants.compressed
     */
    const COMPRESSED = 61440;

    /**
     * 0x00001000
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/phar.constants.php#phar.constants.gz
     */
    const GZ = 4096;

    /**
     * 0x0001
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/phar.constants.php#phar.constants.md5
     */
    const MD5 = 1;

    /**
     * 0x00000000
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/phar.constants.php#phar.constants.none
     */
    const NONE = 0;

    /**
     * 0x0010
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/phar.constants.php#phar.constants.openssl
     */
    const OPENSSL = 16;

    /**
     * phar file format
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/phar.constants.php#phar.constants.phar
     */
    const PHAR = 1;

    /**
     * used to instruct the mimeoverrides parameter
     * of <code>Phar::webPhar</code> that the extension should be
     * parsed as a PHP file
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/phar.constants.php#phar.constants.php
     */
    const PHP = 0;

    /**
     * used to instruct the mimeoverrides parameter
     * of <code>Phar::webPhar</code> that the extension should be
     * parsed as a PHP source file through <code>highlight_file</code>
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/phar.constants.php#phar.constants.phps
     */
    const PHPS = 1;

    /**
     * 0x0002
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/phar.constants.php#phar.constants.sha1
     */
    const SHA1 = 2;

    /**
     * 0x0003
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/phar.constants.php#phar.constants.sha256
     */
    const SHA256 = 3;

    /**
     * 0x0004
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/phar.constants.php#phar.constants.sha512
     */
    const SHA512 = 4;

    /**
     * tar file format
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/phar.constants.php#phar.constants.tar
     */
    const TAR = 2;

    /**
     * zip file format
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/phar.constants.php#phar.constants.zip
     */
    const ZIP = 3;

    /**
     * Construct a Phar archive object
     *
     * @param mixed $filename
     * @param mixed $flags
     * @param mixed $alias
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
     * @param string $dirname The name of the empty directory to create in the phar archive
     *
     * @return void no return value, exception is thrown on failure.
     *
     * @since Unknown
     *
     * @link http://www.php.net/manual/en/phar.addemptydir.php
     */
    public function addEmptyDir(string $dirname = null)
    {
    }

    /**
     * Add a file from the filesystem to the phar archive
     *
     * @param string $file Full or relative path to a file on disk to be added
     * to the phar archive.
     * @param string $localname Path that the file will be stored in the archive.
     *
     * @return void no return value, exception is thrown on failure.
     *
     * @since Unknown
     *
     * @link http://www.php.net/manual/en/phar.addfile.php
     */
    public function addFile(string $file, string $localname = null)
    {
    }

    /**
     * Add a file from a string to the phar archive
     *
     * @param string $localname Path that the file will be stored in the archive.
     * @param string $contents The file contents to store
     *
     * @return void no return value, exception is thrown on failure.
     *
     * @since Unknown
     *
     * @link http://www.php.net/manual/en/phar.addfromstring.php
     */
    public function addFromString(string $localname, string $contents = null)
    {
    }

    /**
     * Returns the api version
     *
     * @return string The API version string as in <code>"1.0.0"</code>.
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
     * @param string $base_dir The full or relative path to the directory that contains all files
     * to add to the archive.
     * @param string $regex An optional pcre regular expression that is used to filter the
     * list of files. Only file paths matching the regular expression
     * will be included in the archive.
     *
     * @return array <code>Phar::buildFromDirectory</code> returns an associative array
     * mapping internal path of file to the full path of the file on the
     * filesystem.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.buildfromdirectory.php
     */
    public function buildFromDirectory(string $base_dir, string $regex = null): array
    {
    }

    /**
     * Construct a phar archive from an iterator
     *
     * @param Iterator $iter Any iterator that either associatively maps phar file to location or
     * returns SplFileInfo objects
     * @param string $base_directory For iterators that return SplFileInfo objects, the portion of each
     * file's full path to remove when adding to the phar archive
     *
     * @return array <code>Phar::buildFromIterator</code> returns an associative array
     * mapping internal path of file to the full path of the file on the
     * filesystem.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.buildfromiterator.php
     */
    public function buildFromIterator(Iterator $iter, string $base_directory = null): array
    {
    }

    /**
     * Returns whether phar extension supports compression using either zlib or bzip2
     *
     * @param int|null $type Either <code>Phar::GZ</code> or <code>Phar::BZ2</code> can be
     * used to test whether compression is possible with a specific compression
     * algorithm (zlib or bzip2).
     *
     * @return bool <code>TRUE</code> if compression/decompression is available, <code>FALSE</code> if not.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.cancompress.php
     */
    final public static function canCompress(int $type = 0): bool
    {
    }

    /**
     * Returns whether phar extension supports writing and creating phars
     *
     * @return bool <code>TRUE</code> if write access is enabled, <code>FALSE</code> if it is disabled.
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
     * @param int $compression Compression must be one of <code>Phar::GZ</code>,
     * <code>Phar::BZ2</code> to add compression, or <code>Phar::NONE</code>
     * to remove compression.
     * @param string $extension By default, the extension is <code>.phar.gz</code>
     * or <code>.phar.bz2</code> for compressing phar archives, and
     * <code>.phar.tar.gz</code> or <code>.phar.tar.bz2</code> for
     * compressing tar archives. For decompressing, the default file extensions
     * are <code>.phar</code> and <code>.phar.tar</code>.
     *
     * @return mixed Returns a <code>Phar</code> object.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.compress.php
     */
    public function compress(int $compression, string $extension = null)
    {
    }

    /**
     * Compresses all files in the current Phar archive
     *
     * @param int $compression Compression must be one of <code>Phar::GZ</code>,
     * <code>Phar::BZ2</code> to add compression, or <code>Phar::NONE</code>
     * to remove compression.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.compressfiles.php
     */
    public function compressFiles(int $compression)
    {
    }

    /**
     * Convert a phar archive to a non-executable tar or zip file
     *
     * @param int|null $format This should be one of <code>Phar::TAR</code>
     * or <code>Phar::ZIP</code>. If set to <code>NULL</code>, the existing file format
     * will be preserved.
     * @param int|null $compression This should be one of <code>Phar::NONE</code> for no whole-archive
     * compression, <code>Phar::GZ</code> for zlib-based compression, and
     * <code>Phar::BZ2</code> for bzip-based compression.
     * @param string $extension This parameter is used to override the default file extension for a
     * converted archive. Note that <code>.phar</code> cannot be used
     * anywhere in the filename for a non-executable tar or zip archive.
     *
     * @return PharData The method returns a <code>PharData</code> object on success and throws an
     * exception on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.converttodata.php
     */
    public function convertToData(int $format = 9021976, int $compression = 9021976, string $extension = null): PharData
    {
    }

    /**
     * Convert a phar archive to another executable phar archive file format
     *
     * @param int|null $format This should be one of <code>Phar::PHAR</code>, <code>Phar::TAR</code>,
     * or <code>Phar::ZIP</code>. If set to <code>NULL</code>, the existing file format
     * will be preserved.
     * @param int|null $compression This should be one of <code>Phar::NONE</code> for no whole-archive
     * compression, <code>Phar::GZ</code> for zlib-based compression, and
     * <code>Phar::BZ2</code> for bzip-based compression.
     * @param string $extension This parameter is used to override the default file extension for a
     * converted archive. Note that all zip- and tar-based phar archives must contain
     * <code>.phar</code> in their file extension in order to be processed as a
     * phar archive.
     *
     * @return Phar The method returns a <code>Phar</code> object on success and throws an
     * exception on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.converttoexecutable.php
     */
    public function convertToExecutable(int $format = 9021976, int $compression = 9021976, string $extension = null): Phar
    {
    }

    /**
     * Copy a file internal to the phar archive to another new file within the phar
     *
     * @param string $oldfile
     * @param string $newfile
     *
     * @return bool returns <code>TRUE</code> on success, but it is safer to encase method call in a
     * try/catch block and assume success if no exception is thrown.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.copy.php
     */
    public function copy(string $oldfile, string $newfile): bool
    {
    }

    /**
     * Returns the number of entries (files) in the Phar archive
     *
     * @return int The number of files contained within this phar, or <code>0</code> (the number zero)
     * if none.
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
     * @param string $indexfile
     * @param string $webindexfile
     *
     * @return string Returns a string containing the contents of a customized bootstrap loader (stub)
     * that allows the created Phar archive to work with or without the Phar extension
     * enabled.
     *
     * @since Unknown
     *
     * @link http://www.php.net/manual/en/phar.createdefaultstub.php
     */
    final public static function createDefaultStub(string $indexfile = null, string $webindexfile = null): string
    {
    }

    /**
     * Decompresses the entire Phar archive
     *
     * @param string $extension For decompressing, the default file extensions
     * are <code>.phar</code> and <code>.phar.tar</code>.
     * Use this parameter to specify another file extension. Be aware
     * that all executable phar archives must contain <code>.phar</code>
     * in their filename.
     *
     * @return mixed A <code>Phar</code> object is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.decompress.php
     */
    public function decompress(string $extension = null)
    {
    }

    /**
     * Decompresses all files in the current Phar archive
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @param string $entry Path within an archive to the file to delete.
     *
     * @return bool returns <code>TRUE</code> on success, but it is better to check for thrown exception,
     * and assume success if none is thrown.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.delete.php
     */
    public function delete(string $entry): bool
    {
    }

    /**
     * Deletes the global metadata of the phar
     *
     * @return bool returns <code>TRUE</code> on success, but it is better to check for thrown exception,
     * and assume success if none is thrown.
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
     * @param string $pathto Path to extract the given <code>files</code> to
     * @param string|array $files The name of a file or directory to extract, or an array of files/directories to extract,
     * <code>NULL</code> to skip this param
     * @param bool|null $overwrite Set to <code>TRUE</code> to enable overwriting existing files
     *
     * @return bool returns <code>TRUE</code> on success, but it is better to check for thrown exception,
     * and assume success if none is thrown.
     *
     * @since Unknown
     *
     * @link http://www.php.net/manual/en/phar.extractto.php
     */
    public function extractTo(string $pathto, $files = null, bool $overwrite = false): bool
    {
    }

    /**
     * Get the alias for Phar
     *
     * @return string Returns the alias or <code>NULL</code> if there's no alias.
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
     * @return mixed any PHP variable that can be serialized and is stored as meta-data for the Phar archive,
     * or <code>NULL</code> if no meta-data is stored.
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
     * @return bool <code>TRUE</code> if the phar has been modified since opened, <code>FALSE</code> if not.
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
     * @return array Array with the opened archive's signature in <code>hash</code> key and <code>MD5</code>,
     * <code>SHA-1</code>,
     * <code>SHA-256</code>, <code>SHA-512</code>, or <code>OpenSSL</code>
     * in <code>hash_type</code>. This signature is a hash calculated on the
     * entire phar's contents, and may be used to verify the integrity of the archive.
     * A valid signature is absolutely required of all executable phar archives if the
     * phar.require_hash INI variable
     * is set to true.
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
     * @return string Returns a string containing the contents of the bootstrap loader (stub) of
     * the current Phar archive.
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
     * @return array Returns an array containing any of <code>Phar::GZ</code> or
     * <code>Phar::BZ2</code>, depending on the availability of
     * the zlib extension or the
     * bz2 extension.
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
     * @return array Returns an array containing any of <code>MD5</code>, <code>SHA-1</code>,
     * <code>SHA-256</code>, <code>SHA-512</code>, or <code>OpenSSL</code>.
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
     * @return string The opened archive's API version. This is not to be confused with
     * the API version that the loaded phar extension will use to create
     * new phars. Each Phar archive has the API version hard-coded into
     * its manifest. See Phar file format
     * documentation for more information.
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
     * @return bool Returns <code>TRUE</code> if meta-data has been set, and <code>FALSE</code> if not.
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
    final public static function interceptFileFuncs()
    {
    }

    /**
     * Used to determine whether Phar write operations are being buffered, or are flushing directly to disk
     *
     * @return bool Returns <code>TRUE</code> if the write operations are being buffer, <code>FALSE</code> otherwise.
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
     * @return mixed <code>Phar::GZ</code>, <code>Phar::BZ2</code> or <code>FALSE</code>
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
     * @param int $format Either <code>Phar::PHAR</code>, <code>Phar::TAR</code>, or
     * <code>Phar::ZIP</code> to test for the format of the archive.
     *
     * @return bool Returns <code>TRUE</code> if the phar archive matches the file format requested by the parameter
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.isfileformat.php
     */
    public function isFileFormat(int $format): bool
    {
    }

    /**
     * Returns whether the given filename is a valid phar filename
     *
     * @param string $filename The name or full path to a phar archive not yet created
     * @param bool|null $executable This parameter determines whether the filename should be treated as
     * a phar executable archive, or a data non-executable archive
     *
     * @return bool Returns <code>TRUE</code> if the filename is valid, <code>FALSE</code> if not.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
     *
     * @link http://www.php.net/manual/en/phar.isvalidpharfilename.php
     */
    final public static function isValidPharFilename(string $filename, bool $executable = true): bool
    {
    }

    /**
     * Returns true if the phar archive can be modified
     *
     * @return bool Returns <code>TRUE</code> if the phar archive can be modified
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
     * @param string $filename the full or relative path to the phar archive to open
     * @param string $alias The alias that may be used to refer to the phar archive. Note
     * that many phar archives specify an explicit alias inside the
     * phar archive, and a <code>PharException</code> will be thrown if
     * a new alias is specified in this case.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.loadphar.php
     */
    final public static function loadPhar(string $filename, string $alias = null): bool
    {
    }

    /**
     * Reads the currently executed file (a phar) and registers its manifest
     *
     * @param string $alias The alias that can be used in <code>phar://</code> URLs to
     * refer to this archive, rather than its full path.
     * @param int|null $dataoffset Unused variable, here for compatibility with PEAR's PHP_Archive.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.mapphar.php
     */
    final public static function mapPhar(string $alias = null, int $dataoffset = 0): bool
    {
    }

    /**
     * Mount an external path or file to a virtual location within the phar archive
     *
     * @param string $pharpath The internal path within the phar archive to use as the mounted path location.
     * This must be a relative path within the phar archive, and must not already exist.
     * @param string $externalpath A path or URL to an external file or directory to mount within the phar archive
     *
     * @return void No return. <code>PharException</code> is thrown on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.mount.php
     */
    final public static function mount(string $pharpath, string $externalpath)
    {
    }

    /**
     * Defines a list of up to 4 $_SERVER variables that should be modified for execution
     *
     * @param array $munglist an array containing as string indices any of
     * <code>REQUEST_URI</code>, <code>PHP_SELF</code>,
     * <code>SCRIPT_NAME</code> and <code>SCRIPT_FILENAME</code>.
     * Other values trigger an exception, and <code>Phar::mungServer</code>
     * is case-sensitive.
     *
     * @return void No return.
     *
     * @since Unknown
     *
     * @link http://www.php.net/manual/en/phar.mungserver.php
     */
    final public static function mungServer(array $munglist)
    {
    }

    /**
     * Determines whether a file exists in the phar
     *
     * @param string $offset The filename (relative path) to look for in a Phar.
     *
     * @return bool Returns <code>TRUE</code> if the file exists within the phar, or <code>FALSE</code> if not.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.offsetexists.php
     */
    public function offsetExists(string $offset): bool
    {
    }

    /**
     * Gets a <code>PharFileInfo</code> object for a specific file
     *
     * @param string $offset The filename (relative path) to look for in a Phar.
     *
     * @return int A <code>PharFileInfo</code> object is returned that can be used to
     * iterate over a file's contents or to retrieve information about the current file.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.offsetget.php
     */
    public function offsetGet(string $offset): int
    {
    }

    /**
     * Set the contents of an internal file to those of an external file
     *
     * @param string $offset The filename (relative path) to modify in a Phar.
     * @param string $value Content of the file.
     *
     * @return void No return values.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.offsetset.php
     */
    public function offsetSet(string $offset, string $value)
    {
    }

    /**
     * Remove a file from a phar
     *
     * @param string $offset The filename (relative path) to modify in a Phar.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.offsetunset.php
     */
    public function offsetUnset(string $offset): bool
    {
    }

    /**
     * Returns the full path on disk or full phar URL to the currently executing Phar archive
     *
     * @param bool|null $retphar If <code>FALSE</code>, the full path on disk to the phar
     * archive is returned. If <code>TRUE</code>, a full phar URL is returned.
     *
     * @return string Returns the filename if valid, empty string otherwise.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.running.php
     */
    final public static function running(bool $retphar = true): string
    {
    }

    /**
     * Set the alias for the Phar archive
     *
     * @param string $alias A shorthand string that this archive can be referred to in <code>phar</code>
     * stream wrapper access.
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.1
     *
     * @link http://www.php.net/manual/en/phar.setalias.php
     */
    public function setAlias(string $alias): bool
    {
    }

    /**
     * Used to set the PHP loader or bootstrap stub of a Phar archive to the default loader
     *
     * @param string $index Relative path within the phar archive to run if accessed on the command-line
     * @param string $webindex Relative path within the phar archive to run if accessed through a web browser
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since Unknown
     *
     * @link http://www.php.net/manual/en/phar.setdefaultstub.php
     */
    public function setDefaultStub(string $index = null, string $webindex = null): bool
    {
    }

    /**
     * Sets phar archive meta-data
     *
     * @param mixed $metadata Any PHP variable containing information to store that describes the phar archive
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.setmetadata.php
     */
    public function setMetadata($metadata)
    {
    }

    /**
     * Set the signature algorithm for a phar and apply it
     *
     * @param int $sigtype One of <code>Phar::MD5</code>,
     * <code>Phar::SHA1</code>, <code>Phar::SHA256</code>,
     * <code>Phar::SHA512</code>, or <code>Phar::OPENSSL</code>
     * @param string $privatekey The contents of an OpenSSL private key, as extracted from a certificate or
     * OpenSSL key file:
     * <blockquote><pre>
     * &lt;?php
     * $private = openssl_get_privatekey(file_get_contents('private.pem'));
     * $pkey = '';
     * openssl_pkey_export($private, $pkey);
     * $p-&gt;setSignatureAlgorithm(Phar::OPENSSL, $pkey);
     * ?&gt;
     * </pre></blockquote>
     * See phar introduction for instructions on
     * naming and placement of the public key file.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.1.0
     *
     * @link http://www.php.net/manual/en/phar.setsignaturealgorithm.php
     */
    public function setSignatureAlgorithm(int $sigtype, string $privatekey = null)
    {
    }

    /**
     * Used to set the PHP loader or bootstrap stub of a Phar archive
     *
     * @param string $stub A string or an open stream handle to use as the executable stub for this
     * phar archive.
     * @param int|null $len
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.setstub.php
     */
    public function setStub(string $stub, int $len = -1): bool
    {
    }

    /**
     * Start buffering Phar write operations, do not modify the Phar object on disk
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.startbuffering.php
     */
    public function startBuffering()
    {
    }

    /**
     * Stop buffering write requests to the Phar archive, and save changes to disk
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/phar.stopbuffering.php
     */
    public function stopBuffering()
    {
    }

    /**
     * Completely remove a phar archive from disk and from memory
     *
     * @param string $archive The path on disk to the phar archive.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.unlinkarchive.php
     */
    final public static function unlinkArchive(string $archive): bool
    {
    }

    /**
     * mapPhar for web-based phars. front controller for web applications
     *
     * @param string $alias The alias that can be used in <code>phar://</code> URLs to
     * refer to this archive, rather than its full path.
     * @param string|null $index The location within the phar of the directory index.
     * @param string $f404 The location of the script to run when a file is not found. This
     * script should output the proper HTTP 404 headers.
     * @param array $mimetypes An array mapping additional file extensions to MIME type.
     * If the default mapping is sufficient, pass an empty array.
     * By default, these extensions are mapped to these MIME types:
     * <blockquote><pre>
     * &lt;?php
     * $mimes = array(
     * 'phps' =&gt; Phar::PHPS, // pass to highlight_file()
     * 'c' =&gt; 'text/plain',
     * 'cc' =&gt; 'text/plain',
     * 'cpp' =&gt; 'text/plain',
     * 'c++' =&gt; 'text/plain',
     * 'dtd' =&gt; 'text/plain',
     * 'h' =&gt; 'text/plain',
     * 'log' =&gt; 'text/plain',
     * 'rng' =&gt; 'text/plain',
     * 'txt' =&gt; 'text/plain',
     * 'xsd' =&gt; 'text/plain',
     * 'php' =&gt; Phar::PHP, // parse as PHP
     * 'inc' =&gt; Phar::PHP, // parse as PHP
     * 'avi' =&gt; 'video/avi',
     * 'bmp' =&gt; 'image/bmp',
     * 'css' =&gt; 'text/css',
     * 'gif' =&gt; 'image/gif',
     * 'htm' =&gt; 'text/html',
     * 'html' =&gt; 'text/html',
     * 'htmls' =&gt; 'text/html',
     * 'ico' =&gt; 'image/x-ico',
     * 'jpe' =&gt; 'image/jpeg',
     * 'jpg' =&gt; 'image/jpeg',
     * 'jpeg' =&gt; 'image/jpeg',
     * 'js' =&gt; 'application/x-javascript',
     * 'midi' =&gt; 'audio/midi',
     * 'mid' =&gt; 'audio/midi',
     * 'mod' =&gt; 'audio/mod',
     * 'mov' =&gt; 'movie/quicktime',
     * 'mp3' =&gt; 'audio/mp3',
     * 'mpg' =&gt; 'video/mpeg',
     * 'mpeg' =&gt; 'video/mpeg',
     * 'pdf' =&gt; 'application/pdf',
     * 'png' =&gt; 'image/png',
     * 'swf' =&gt; 'application/shockwave-flash',
     * 'tif' =&gt; 'image/tiff',
     * 'tiff' =&gt; 'image/tiff',
     * 'wav' =&gt; 'audio/wav',
     * 'xbm' =&gt; 'image/xbm',
     * 'xml' =&gt; 'text/xml',
     * );
     * ?&gt;
     * </pre></blockquote>
     * @param callable $rewrites The rewrites function is passed a string as its only parameter and must return a <code>string</code> or <code>FALSE</code>.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phar.webphar.php
     */
    final public static function webPhar(string $alias = null, string $index = "index.php", string $f404 = null, array $mimetypes = null, callable $rewrites = null)
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
     * @param mixed $flags
     * @param mixed $alias
     * @param mixed $fileformat
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
     * @param string $dirname The name of the empty directory to create in the phar archive
     *
     * @return void no return value, exception is thrown on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.addemptydir.php
     */
    public function addEmptyDir(string $dirname = null)
    {
    }

    /**
     * Add a file from the filesystem to the tar/zip archive
     *
     * @param string $file Full or relative path to a file on disk to be added
     * to the phar archive.
     * @param string $localname Path that the file will be stored in the archive.
     *
     * @return void no return value, exception is thrown on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.addfile.php
     */
    public function addFile(string $file, string $localname = null)
    {
    }

    /**
     * Add a file from the filesystem to the tar/zip archive
     *
     * @param string $localname Path that the file will be stored in the archive.
     * @param string $contents The file contents to store
     *
     * @return void no return value, exception is thrown on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.addfromstring.php
     */
    public function addFromString(string $localname, string $contents = null)
    {
    }

    final public static function apiVersion()
    {
    }

    /**
     * Construct a tar/zip archive from the files within a directory
     *
     * @param string $base_dir The full or relative path to the directory that contains all files
     * to add to the archive.
     * @param string $regex An optional pcre regular expression that is used to filter the
     * list of files. Only file paths matching the regular expression
     * will be included in the archive.
     *
     * @return array <code>Phar::buildFromDirectory</code> returns an associative array
     * mapping internal path of file to the full path of the file on the
     * filesystem.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.buildfromdirectory.php
     */
    public function buildFromDirectory(string $base_dir, string $regex = null): array
    {
    }

    /**
     * Construct a tar or zip archive from an iterator
     *
     * @param Iterator $iter Any iterator that either associatively maps tar/zip file to location or
     * returns SplFileInfo objects
     * @param string $base_directory For iterators that return SplFileInfo objects, the portion of each
     * file's full path to remove when adding to the tar/zip archive
     *
     * @return array <code>PharData::buildFromIterator</code> returns an associative array
     * mapping internal path of file to the full path of the file on the
     * filesystem.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.buildfromiterator.php
     */
    public function buildFromIterator(Iterator $iter, string $base_directory = null): array
    {
    }

    /**
     * @param mixed $method
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
     * @param int $compression Compression must be one of <code>Phar::GZ</code>,
     * <code>Phar::BZ2</code> to add compression, or <code>Phar::NONE</code>
     * to remove compression.
     * @param string $extension By default, the extension is <code>.tar.gz</code> or <code>.tar.bz2</code>
     * for compressing a tar, and <code>.tar</code> for decompressing.
     *
     * @return mixed A <code>PharData</code> object is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.compress.php
     */
    public function compress(int $compression, string $extension = null)
    {
    }

    /**
     * Compresses all files in the current tar/zip archive
     *
     * @param int $compression Compression must be one of <code>Phar::GZ</code>,
     * <code>Phar::BZ2</code> to add compression, or <code>Phar::NONE</code>
     * to remove compression.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.compressfiles.php
     */
    public function compressFiles(int $compression)
    {
    }

    /**
     * Convert a phar archive to a non-executable tar or zip file
     *
     * @param int $format This should be one of <code>Phar::TAR</code>
     * or <code>Phar::ZIP</code>. If set to <code>NULL</code>, the existing file format
     * will be preserved.
     * @param int $compression This should be one of <code>Phar::NONE</code> for no whole-archive
     * compression, <code>Phar::GZ</code> for zlib-based compression, and
     * <code>Phar::BZ2</code> for bzip-based compression.
     * @param string $extension This parameter is used to override the default file extension for a
     * converted archive. Note that <code>.phar</code> cannot be used
     * anywhere in the filename for a non-executable tar or zip archive.
     *
     * @return PharData The method returns a <code>PharData</code> object on success and throws an
     * exception on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.converttodata.php
     */
    public function convertToData(int $format = null, int $compression = null, string $extension = null): PharData
    {
    }

    /**
     * Convert a non-executable tar/zip archive to an executable phar archive
     *
     * @param int $format This should be one of <code>Phar::PHAR</code>, <code>Phar::TAR</code>,
     * or <code>Phar::ZIP</code>. If set to <code>NULL</code>, the existing file format
     * will be preserved.
     * @param int $compression This should be one of <code>Phar::NONE</code> for no whole-archive
     * compression, <code>Phar::GZ</code> for zlib-based compression, and
     * <code>Phar::BZ2</code> for bzip-based compression.
     * @param string $extension This parameter is used to override the default file extension for a
     * converted archive. Note that all zip- and tar-based phar archives must contain
     * <code>.phar</code> in their file extension in order to be processed as a
     * phar archive.
     *
     * @return Phar The method returns a <code>Phar</code> object on success and throws an
     * exception on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.converttoexecutable.php
     */
    public function convertToExecutable(int $format = null, int $compression = null, string $extension = null): Phar
    {
    }

    /**
     * Copy a file internal to the phar archive to another new file within the phar
     *
     * @param string $oldfile
     * @param string $newfile
     *
     * @return bool returns <code>TRUE</code> on success, but it is safer to encase method call in a
     * try/catch block and assume success if no exception is thrown.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.copy.php
     */
    public function copy(string $oldfile, string $newfile): bool
    {
    }

    public function count()
    {
    }

    /**
     * @param mixed $index
     * @param mixed $webindex
     */
    final public static function createDefaultStub($index = null, $webindex = null)
    {
    }

    /**
     * Decompresses the entire Phar archive
     *
     * @param string $extension For decompressing, the default file extension
     * is <code>.tar</code>.
     * Use this parameter to specify another file extension. Be aware that only
     * executable archives can contain <code>.phar</code> in their filename.
     *
     * @return mixed A <code>PharData</code> object is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.decompress.php
     */
    public function decompress(string $extension = null)
    {
    }

    /**
     * Decompresses all files in the current zip archive
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @param string $entry Path within an archive to the file to delete.
     *
     * @return bool returns <code>TRUE</code> on success, but it is better to check for thrown exception,
     * and assume success if none is thrown.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.delete.php
     */
    public function delete(string $entry): bool
    {
    }

    /**
     * Deletes the global metadata of a zip archive
     *
     * @return bool returns <code>TRUE</code> on success, but it is better to check for thrown exception,
     * and assume success if none is thrown.
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
     * @param string $pathto Path to extract the given <code>files</code> to
     * @param string|array $files The name of a file or directory to extract, or an array of files/directories to extract
     * @param bool|null $overwrite Set to <code>TRUE</code> to enable overwriting existing files
     *
     * @return bool returns <code>TRUE</code> on success, but it is better to check for thrown exception,
     * and assume success if none is thrown.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.extractto.php
     */
    public function extractTo(string $pathto, $files = null, bool $overwrite = false): bool
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
     * @param mixed $executable
     */
    final public static function isValidPharFilename($filename, $executable = null)
    {
    }

    /**
     * Returns true if the tar/zip archive can be modified
     *
     * @return bool Returns <code>TRUE</code> if the tar/zip archive can be modified
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
     * @param mixed $alias
     */
    final public static function loadPhar($filename, $alias = null)
    {
    }

    /**
     * @param mixed $alias
     * @param mixed $offset
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
     * @param string $offset The filename (relative path) to modify in a tar or zip archive.
     * @param string $value Content of the file.
     *
     * @return void No return values.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.offsetset.php
     */
    public function offsetSet(string $offset, string $value)
    {
    }

    /**
     * Remove a file from a tar/zip archive
     *
     * @param string $offset The filename (relative path) to modify in the tar/zip archive.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.offsetunset.php
     */
    public function offsetUnset(string $offset): bool
    {
    }

    /**
     * @param mixed $retphar
     */
    final public static function running($retphar = null)
    {
    }

    /**
     * Dummy function (Phar::setAlias is not valid for PharData)
     *
     * @param string $alias A shorthand string that this archive can be referred to in <code>phar</code>
     * stream wrapper access. This parameter is ignored.
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.setalias.php
     */
    public function setAlias(string $alias): bool
    {
    }

    /**
     * Dummy function (Phar::setDefaultStub is not valid for PharData)
     *
     * @param string $index Relative path within the phar archive to run if accessed on the command-line
     * @param string $webindex Relative path within the phar archive to run if accessed through a web browser
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.setdefaultstub.php
     */
    public function setDefaultStub(string $index = null, string $webindex = null): bool
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
     * @param mixed $privatekey
     */
    public function setSignatureAlgorithm($algorithm, $privatekey = null)
    {
    }

    /**
     * Dummy function (Phar::setStub is not valid for PharData)
     *
     * @param string $stub A string or an open stream handle to use as the executable stub for this
     * phar archive. This parameter is ignored.
     * @param int|null $len
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
     *
     * @link http://www.php.net/manual/en/phardata.setstub.php
     */
    public function setStub(string $stub, int $len = -1): bool
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
     * @param mixed $alias
     * @param mixed $index
     * @param mixed $f404
     * @param mixed $mimetypes
     * @param mixed $rewrites
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
     * @param int $permissions permissions (see <code>chmod</code>)
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/pharfileinfo.chmod.php
     */
    public function chmod(int $permissions)
    {
    }

    /**
     * Compresses the current Phar entry with either zlib or bzip2 compression
     *
     * @param int $compression
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/pharfileinfo.compress.php
     */
    public function compress(int $compression): bool
    {
    }

    /**
     * Decompresses the current Phar entry within the phar
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/pharfileinfo.decompress.php
     */
    public function decompress(): bool
    {
    }

    /**
     * Deletes the metadata of the entry
     *
     * @return bool Returns <code>TRUE</code> if successful, <code>FALSE</code> if the entry had no metadata.
     * As with all functionality that modifies the contents of
     * a phar, the phar.readonly INI variable
     * must be off in order to succeed if the file is within a <code>Phar</code>
     * archive. Files within <code>PharData</code> archives do not have
     * this restriction.
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
     * @return int The size in bytes of the file within the Phar archive on disk.
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
     * @return string Returns the file contents.
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
     * @return int The <code>crc32</code> checksum of the file within the Phar archive.
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
     * @return mixed any PHP variable that can be serialized and is stored as meta-data for the file,
     * or <code>NULL</code> if no meta-data is stored.
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
     * @return int The Phar flags (always <code>0</code> in the current implementation)
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
     * @return bool Returns <code>FALSE</code> if no metadata is set or is <code>NULL</code>, <code>TRUE</code> if metadata is not <code>NULL</code>
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
     * @param int|null $compression_type One of <code>Phar::GZ</code> or <code>Phar::BZ2</code>,
     * defaults to any compression.
     *
     * @return bool <code>TRUE</code> if the file is compressed within the Phar archive, <code>FALSE</code> if not.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/pharfileinfo.iscompressed.php
     */
    public function isCompressed(int $compression_type = 9021976): bool
    {
    }

    /**
     * Returns whether file entry has had its CRC verified
     *
     * @return bool <code>TRUE</code> if the file has had its CRC verified, <code>FALSE</code> if not.
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
     * @param mixed $metadata Any PHP variable containing information to store alongside a file
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
     *
     * @link http://www.php.net/manual/en/pharfileinfo.setmetadata.php
     */
    public function setMetadata($metadata)
    {
    }
}
