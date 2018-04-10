<?php
// Start of extension: zip
// - parsed on POSIX with PHP 7.2.4 (extension version 1.15.2)
// - parsed on Windows with PHP 7.2.4 (extension version 1.15.2)

/**
 * A file archive, compressed with Zip.
 *
 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
 *
 * @link http://www.php.net/manual/en/class.ziparchive.php
 */
class ZipArchive implements Countable
{
    /**
     * Perform additional consistency checks on the archive, and error if they fail.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.checkcons
     */
    const CHECKCONS = 4;

    /**
     * BZIP2 algorithm
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.cm-bzip2
     */
    const CM_BZIP2 = 12;

    /**
     * better of deflate or store.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.cm-default
     */
    const CM_DEFAULT = -1;

    /**
     * deflated
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.cm-deflate
     */
    const CM_DEFLATE = 8;

    /**
     * deflate64
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.cm-deflate64
     */
    const CM_DEFLATE64 = 9;

    /**
     * imploded
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.cm-implode
     */
    const CM_IMPLODE = 6;

    /**
     * @var int
     */
    const CM_LZ77 = 19;

    /**
     * @var int
     */
    const CM_LZMA = 14;

    /**
     * PKWARE imploding
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.cm-pkware-implode
     */
    const CM_PKWARE_IMPLODE = 10;

    /**
     * @var int
     */
    const CM_PPMD = 98;

    /**
     * reduced with factor 1
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.cm-reduce-1
     */
    const CM_REDUCE_1 = 2;

    /**
     * reduced with factor 2
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.cm-reduce-2
     */
    const CM_REDUCE_2 = 3;

    /**
     * reduced with factor 3
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.cm-reduce-3
     */
    const CM_REDUCE_3 = 4;

    /**
     * reduced with factor 4
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.cm-reduce-4
     */
    const CM_REDUCE_4 = 5;

    /**
     * shrunk
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.cm-shrink
     */
    const CM_SHRINK = 1;

    /**
     * stored (uncompressed).
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.cm-store
     */
    const CM_STORE = 0;

    /**
     * @var int
     */
    const CM_TERSE = 18;

    /**
     * @var int
     */
    const CM_WAVPACK = 97;

    /**
     * Create the archive if it does not exist.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.create
     */
    const CREATE = 1;

    /**
     * AES 128 encryption, since PHP 7.2.0, PECL zip 1.14.0
     *
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.em-aez-128
     */
    const EM_AES_128 = 257;

    /**
     * AES 1192 encryption, since PHP 7.2.0, PECL zip 1.14.0
     *
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.em-aez-192
     */
    const EM_AES_192 = 258;

    /**
     * AES 256 encryption, since PHP 7.2.0, PECL zip 1.14.0
     *
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.em-aes256
     */
    const EM_AES_256 = 259;

    /**
     * No encryption, since PHP 7.2.0, PECL zip 1.14.0
     *
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.em-none
     */
    const EM_NONE = 0;

    /**
     * Entry has been changed
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-changed
     */
    const ER_CHANGED = 15;

    /**
     * Closing zip archive failed
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-close
     */
    const ER_CLOSE = 3;

    /**
     * Compression method not supported.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-compnotsupp
     */
    const ER_COMPNOTSUPP = 16;

    /**
     * CRC error
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-crc
     */
    const ER_CRC = 7;

    /**
     * Entry has been deleted
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-deleted
     */
    const ER_DELETED = 23;

    /**
     * Premature EOF
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-eof
     */
    const ER_EOF = 17;

    /**
     * File already exists
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-exists
     */
    const ER_EXISTS = 10;

    /**
     * Zip archive inconsistent
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-incons
     */
    const ER_INCONS = 21;

    /**
     * Internal error
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-internal
     */
    const ER_INTERNAL = 20;

    /**
     * Invalid argument
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-inval
     */
    const ER_INVAL = 18;

    /**
     * Memory allocation failure
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-memory
     */
    const ER_MEMORY = 14;

    /**
     * Multi-disk zip archives not supported.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-multidisk
     */
    const ER_MULTIDISK = 1;

    /**
     * No such file.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-noent
     */
    const ER_NOENT = 9;

    /**
     * Not a zip archive
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-nozip
     */
    const ER_NOZIP = 19;

    /**
     * No error.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-ok
     */
    const ER_OK = 0;

    /**
     * Can't open file
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-open
     */
    const ER_OPEN = 11;

    /**
     * Read error
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-read
     */
    const ER_READ = 5;

    /**
     * Can't remove file
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-remove
     */
    const ER_REMOVE = 22;

    /**
     * Renaming temporary file failed.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-rename
     */
    const ER_RENAME = 2;

    /**
     * Seek error
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-seek
     */
    const ER_SEEK = 4;

    /**
     * Failure to create temporary file.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-tmpopen
     */
    const ER_TMPOPEN = 12;

    /**
     * Write error
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-write
     */
    const ER_WRITE = 6;

    /**
     * Containing zip archive was closed
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-zipclosed
     */
    const ER_ZIPCLOSED = 8;

    /**
     * Zlib error
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.er-zlib
     */
    const ER_ZLIB = 13;

    /**
     * Error if archive already exists.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.excl
     */
    const EXCL = 2;

    /**
     * Read compressed data
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.fl-compressed
     */
    const FL_COMPRESSED = 4;

    /**
     * String is CP437 encoded. Available as of PHP 7.0.8.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.fl-enc-cp437
     */
    const FL_ENC_CP437 = 4096;

    /**
     * Guess string encoding (is default). Available as of PHP 7.0.8.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.fl-enc-guess
     */
    const FL_ENC_GUESS = 0;

    /**
     * Get unmodified string. Available as of PHP 7.0.8.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.fl-enc-raw
     */
    const FL_ENC_RAW = 64;

    /**
     * Follow specification strictly. Available as of PHP 7.0.8.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.fl-enc-strict
     */
    const FL_ENC_STRICT = 128;

    /**
     * String is UTF-8 encoded. Available as of PHP 7.0.8.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.fl-enc-utf8
     */
    const FL_ENC_UTF_8 = 2048;

    /**
     * Ignore case on name lookup
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.fl-nocase
     */
    const FL_NOCASE = 1;

    /**
     * Ignore directory component
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.fl-nodir
     */
    const FL_NODIR = 2;

    /**
     * Use original data, ignoring changes.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.fl-unchanged
     */
    const FL_UNCHANGED = 8;

    /**
     * Since PHP 5.6.0, PECL zip 1.12.4
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     */
    const OPSYS_ACORN_RISC = 13;

    /**
     * Since PHP 5.6.0, PECL zip 1.12.4
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     */
    const OPSYS_ALTERNATE_MVS = 15;

    /**
     * Since PHP 5.6.0, PECL zip 1.12.4
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     */
    const OPSYS_AMIGA = 1;

    /**
     * Since PHP 5.6.0, PECL zip 1.12.4
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     */
    const OPSYS_ATARI_ST = 5;

    /**
     * Since PHP 5.6.0, PECL zip 1.12.4
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     */
    const OPSYS_BEOS = 16;

    /**
     * Since PHP 5.6.0, PECL zip 1.12.4
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     */
    const OPSYS_DEFAULT = 3;

    /**
     * Since PHP 5.6.0, PECL zip 1.12.4
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     */
    const OPSYS_DOS = 0;

    /**
     * Since PHP 5.6.0, PECL zip 1.12.4
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     */
    const OPSYS_MACINTOSH = 7;

    /**
     * Since PHP 5.6.0, PECL zip 1.12.4
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     */
    const OPSYS_MVS = 11;

    /**
     * Since PHP 5.6.0, PECL zip 1.12.4
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     */
    const OPSYS_OPENVMS = 2;

    /**
     * Since PHP 5.6.0, PECL zip 1.12.4
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     */
    const OPSYS_OS_2 = 6;

    /**
     * Since PHP 5.6.0, PECL zip 1.12.4
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     */
    const OPSYS_OS_400 = 18;

    /**
     * Since PHP 5.6.0, PECL zip 1.12.4
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     */
    const OPSYS_OS_X = 19;

    /**
     * Since PHP 5.6.0, PECL zip 1.12.4
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     */
    const OPSYS_TANDEM = 17;

    /**
     * Since PHP 5.6.0, PECL zip 1.12.4
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     */
    const OPSYS_UNIX = 3;

    /**
     * Since PHP 5.6.0, PECL zip 1.12.4
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     */
    const OPSYS_VFAT = 14;

    /**
     * Since PHP 5.6.0, PECL zip 1.12.4
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     */
    const OPSYS_VM_CMS = 4;

    /**
     * Since PHP 5.6.0, PECL zip 1.12.4
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     */
    const OPSYS_VSE = 12;

    /**
     * Since PHP 5.6.0, PECL zip 1.12.4
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     */
    const OPSYS_WINDOWS_NTFS = 10;

    /**
     * @var int
     */
    const OPSYS_Z_CPM = 9;

    /**
     * Since PHP 5.6.0, PECL zip 1.12.4
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     */
    const OPSYS_Z_SYSTEM = 8;

    /**
     * Always start a new archive, this mode will overwrite the file if
     * it already exists.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/zip.constants.php#ziparchive.constants.overwrite
     */
    const OVERWRITE = 8;

    /**
     * Comment for the archive
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.ziparchive.php#ziparchive.props
     */
    public $comment;

    /**
     * File name in the file system
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.ziparchive.php#ziparchive.props
     */
    public $filename;

    /**
     * Number of files in archive
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.ziparchive.php#ziparchive.props
     */
    public $numFiles;

    /**
     * Status of the Zip Archive
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.ziparchive.php#ziparchive.props
     */
    public $status;

    /**
     * System status of the Zip Archive
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.ziparchive.php#ziparchive.props
     */
    public $statusSys;

    /**
     * Add a new directory
     *
     * @param string $dirname The directory to add.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.8.0
     *
     * @link http://www.php.net/manual/en/ziparchive.addemptydir.php
     */
    public function addEmptyDir(string $dirname): bool
    {
    }

    /**
     * Adds a file to a ZIP archive from the given path
     *
     * @param string $filename The path to the file to add.
     * @param string|null $localname If supplied, this is the local name inside the ZIP archive that will override the <code>filename</code>.
     * @param int|null $start This parameter is not used but is required to extend <code>ZipArchive</code>.
     * @param int|null $length This parameter is not used but is required to extend <code>ZipArchive</code>.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
     *
     * @link http://www.php.net/manual/en/ziparchive.addfile.php
     */
    public function addFile(string $filename, string $localname = null, int $start = 0, int $length = 0): bool
    {
    }

    /**
     * Add a file to a ZIP archive using its contents
     *
     * @param string $localname The name of the entry to create.
     * @param string $contents The contents to use to create the entry. It is used in a binary
     * safe mode.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
     *
     * @link http://www.php.net/manual/en/ziparchive.addfromstring.php
     */
    public function addFromString(string $localname, string $contents): bool
    {
    }

    /**
     * Add files from a directory by glob pattern
     *
     * @param string $pattern A <code>glob</code> pattern against which files will be matched.
     * @param int|null $flags A bit mask of <code>glob()</code> flags.
     * @param array|null $options An associative array of options. Available options are:
     * <ul>
     * <code>"add_path"</code>
     * Prefix to prepend when translating to the local path of the file within
     * the archive. This is applied after any remove operations defined by the
     * <code>"remove_path"</code> or <code>"remove_all_path"</code>
     * options.
     * <code>"remove_path"</code>
     * Prefix to remove from matching file paths before adding to the archive.
     * <code>"remove_all_path"</code>
     * <code>TRUE</code> to use the file name only and add to the root of the archive.
     * </ul>
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL zip >= 1.9.0
     *
     * @link http://www.php.net/manual/en/ziparchive.addglob.php
     */
    public function addGlob(string $pattern, int $flags = 0, array $options = /* array() */ null): bool
    {
    }

    /**
     * Add files from a directory by PCRE pattern
     *
     * @param string $pattern A PCRE pattern against which files will be matched.
     * @param string|null $path The directory that will be scanned. Defaults to the current working directory.
     * @param array|null $options An associative array of options accepted by <code>ZipArchive::addGlob</code>.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL zip >= 1.9.0
     *
     * @link http://www.php.net/manual/en/ziparchive.addpattern.php
     */
    public function addPattern(string $pattern, string $path = ".", array $options = /* array() */ null): bool
    {
    }

    /**
     * Close the active archive (opened or newly created)
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
     *
     * @link http://www.php.net/manual/en/ziparchive.close.php
     */
    public function close(): bool
    {
    }

    /**
     * Counts the number of files in the achive
     *
     * @return int Returns the number of files in the achive.
     *
     * @link http://www.php.net/manual/en/ziparchive.count.php
     */
    public function count(): int
    {
    }

    /**
     * Delete an entry in the archive using its index
     *
     * @param int $index Index of the entry to delete.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
     *
     * @link http://www.php.net/manual/en/ziparchive.deleteindex.php
     */
    public function deleteIndex(int $index): bool
    {
    }

    /**
     * Delete an entry in the archive using its name
     *
     * @param string $name Name of the entry to delete.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
     *
     * @link http://www.php.net/manual/en/ziparchive.deletename.php
     */
    public function deleteName(string $name): bool
    {
    }

    /**
     * Extract the archive contents
     *
     * @param string $destination Location where to extract the files.
     * @param mixed $entries The entries to extract. It accepts either a single entry name or
     * an array of names.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
     *
     * @link http://www.php.net/manual/en/ziparchive.extractto.php
     */
    public function extractTo(string $destination, $entries = null): bool
    {
    }

    /**
     * Returns the Zip archive comment
     *
     * @param int $flags If flags is set to <code>ZipArchive::FL_UNCHANGED</code>, the original unchanged
     * comment is returned.
     *
     * @return string Returns the Zip archive comment or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
     *
     * @link http://www.php.net/manual/en/ziparchive.getarchivecomment.php
     */
    public function getArchiveComment(int $flags = null): string
    {
    }

    /**
     * Returns the comment of an entry using the entry index
     *
     * @param int $index Index of the entry
     * @param int $flags If flags is set to <code>ZipArchive::FL_UNCHANGED</code>, the original unchanged
     * comment is returned.
     *
     * @return string Returns the comment on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.4.0
     *
     * @link http://www.php.net/manual/en/ziparchive.getcommentindex.php
     */
    public function getCommentIndex(int $index, int $flags = null): string
    {
    }

    /**
     * Returns the comment of an entry using the entry name
     *
     * @param string $name Name of the entry
     * @param int $flags If flags is set to <code>ZipArchive::FL_UNCHANGED</code>, the original unchanged
     * comment is returned.
     *
     * @return string Returns the comment on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.4.0
     *
     * @link http://www.php.net/manual/en/ziparchive.getcommentname.php
     */
    public function getCommentName(string $name, int $flags = null): string
    {
    }

    /**
     * Retrieve the external attributes of an entry defined by its index
     *
     * @param int $index Index of the entry.
     * @param int $opsys On success, receive the operating system code defined by one of the ZipArchive::OPSYS_ constants.
     * @param int $attr On success, receive the external attributes. Value depends on operating system.
     * @param int $flags If flags is set to <code>ZipArchive::FL_UNCHANGED</code>, the original unchanged
     * attributes are returned.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.6.0, PHP 7, PECL zip >= 1.12.4
     *
     * @link http://www.php.net/manual/en/ziparchive.getexternalattributesindex.php
     */
    public function getExternalAttributesIndex(int $index, int &$opsys, int &$attr, int $flags = null): bool
    {
    }

    /**
     * Retrieve the external attributes of an entry defined by its name
     *
     * @param string $name Name of the entry.
     * @param int $opsys On success, receive the operating system code defined by one of the ZipArchive::OPSYS_ constants.
     * @param int $attr On success, receive the external attributes. Value depends on operating system.
     * @param int $flags If flags is set to <code>ZipArchive::FL_UNCHANGED</code>, the original unchanged
     * attributes are returned.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.6.0, PHP 7, PECL zip >= 1.12.4
     *
     * @link http://www.php.net/manual/en/ziparchive.getexternalattributesname.php
     */
    public function getExternalAttributesName(string $name, int &$opsys, int &$attr, int $flags = null): bool
    {
    }

    /**
     * Returns the entry contents using its index
     *
     * @param int $index Index of the entry
     * @param int|null $length The length to be read from the entry. If <code>0</code>, then the
     * entire entry is read.
     * @param int $flags The flags to use to open the archive. the following values may
     * be ORed to it.
     * <ul>
     * <code>ZipArchive::FL_UNCHANGED</code>
     * <code>ZipArchive::FL_COMPRESSED</code>
     * </ul>
     *
     * @return string Returns the contents of the entry on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/ziparchive.getfromindex.php
     */
    public function getFromIndex(int $index, int $length = 0, int $flags = null): string
    {
    }

    /**
     * Returns the entry contents using its name
     *
     * @param string $name Name of the entry
     * @param int|null $length The length to be read from the entry. If <code>0</code>, then the
     * entire entry is read.
     * @param int $flags The flags to use to find the entry. The following values may
     * be ORed.
     * <ul>
     * <code>ZipArchive::FL_UNCHANGED</code>
     * <code>ZipArchive::FL_COMPRESSED</code>
     * <code>ZipArchive::FL_NOCASE</code>
     * </ul>
     *
     * @return string Returns the contents of the entry on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
     *
     * @link http://www.php.net/manual/en/ziparchive.getfromname.php
     */
    public function getFromName(string $name, int $length = 0, int $flags = null): string
    {
    }

    /**
     * Returns the name of an entry using its index
     *
     * @param int $index Index of the entry.
     * @param int $flags If flags is set to <code>ZipArchive::FL_UNCHANGED</code>, the original unchanged
     * name is returned.
     *
     * @return string Returns the name on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
     *
     * @link http://www.php.net/manual/en/ziparchive.getnameindex.php
     */
    public function getNameIndex(int $index, int $flags = null): string
    {
    }

    /**
     * Returns the status error message, system and/or zip messages
     *
     * @return string Returns a <code>string</code> with the status message on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.7, PHP 7
     *
     * @link http://www.php.net/manual/en/ziparchive.getstatusstring.php
     */
    public function getStatusString(): string
    {
    }

    /**
     * Get a file handler to the entry defined by its name (read only)
     *
     * @param string $name The name of the entry to use.
     *
     * @return resource Returns a file pointer (resource) on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
     *
     * @link http://www.php.net/manual/en/ziparchive.getstream.php
     */
    public function getStream(string $name)
    {
    }

    /**
     * Returns the index of the entry in the archive
     *
     * @param string $name The name of the entry to look up
     * @param int $flags The flags are specified by ORing the following values,
     * or 0 for none of them.
     * <ul>
     * <code>ZipArchive::FL_NOCASE</code>
     * <code>ZipArchive::FL_NODIR</code>
     * </ul>
     *
     * @return int Returns the index of the entry on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
     *
     * @link http://www.php.net/manual/en/ziparchive.locatename.php
     */
    public function locateName(string $name, int $flags = null): int
    {
    }

    /**
     * Open a ZIP file archive
     *
     * @param string $filename The file name of the ZIP archive to open.
     * @param int $flags The mode to use to open the archive.
     * <ul>
     * <code>ZipArchive::OVERWRITE</code>
     * <code>ZipArchive::CREATE</code>
     * <code>ZipArchive::EXCL</code>
     * <code>ZipArchive::CHECKCONS</code>
     * </ul>
     *
     * @return mixed <ul>
     * <li>
     * <code><code>Error codes</code></code>
     * Returns <code>TRUE</code> on success or the error code.
     * <ul>
     * <code>ZipArchive::ER_EXISTS</code>
     * File already exists.
     * <code>ZipArchive::ER_INCONS</code>
     * Zip archive inconsistent.
     * <code>ZipArchive::ER_INVAL</code>
     * Invalid argument.
     * <code>ZipArchive::ER_MEMORY</code>
     * Malloc failure.
     * <code>ZipArchive::ER_NOENT</code>
     * No such file.
     * <code>ZipArchive::ER_NOZIP</code>
     * Not a zip archive.
     * <code>ZipArchive::ER_OPEN</code>
     * Can't open file.
     * <code>ZipArchive::ER_READ</code>
     * Read error.
     * <code>ZipArchive::ER_SEEK</code>
     * Seek error.
     * </ul>
     * </li>
     * </ul>
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
     *
     * @link http://www.php.net/manual/en/ziparchive.open.php
     */
    public function open(string $filename, int $flags = null)
    {
    }

    /**
     * Renames an entry defined by its index
     *
     * @param int $index Index of the entry to rename.
     * @param string $newname New name.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
     *
     * @link http://www.php.net/manual/en/ziparchive.renameindex.php
     */
    public function renameIndex(int $index, string $newname): bool
    {
    }

    /**
     * Renames an entry defined by its name
     *
     * @param string $name Name of the entry to rename.
     * @param string $newname New name.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
     *
     * @link http://www.php.net/manual/en/ziparchive.renamename.php
     */
    public function renameName(string $name, string $newname): bool
    {
    }

    /**
     * Set the comment of a ZIP archive
     *
     * @param string $comment The contents of the comment.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.4.0
     *
     * @link http://www.php.net/manual/en/ziparchive.setarchivecomment.php
     */
    public function setArchiveComment(string $comment): bool
    {
    }

    /**
     * Set the comment of an entry defined by its index
     *
     * @param int $index Index of the entry.
     * @param string $comment The contents of the comment.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.4.0
     *
     * @link http://www.php.net/manual/en/ziparchive.setcommentindex.php
     */
    public function setCommentIndex(int $index, string $comment): bool
    {
    }

    /**
     * Set the comment of an entry defined by its name
     *
     * @param string $name Name of the entry.
     * @param string $comment The contents of the comment.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.4.0
     *
     * @link http://www.php.net/manual/en/ziparchive.setcommentname.php
     */
    public function setCommentName(string $name, string $comment): bool
    {
    }

    /**
     * Set the compression method of an entry defined by its index
     *
     * @param int $index Index of the entry.
     * @param int $comp_method The compression method. Either
     * <code>ZipArchive::CM_DEFAULT</code>,
     * <code>ZipArchive::CM_STORE</code> or
     * <code>ZipArchive::CM_DEFLATE</code>.
     * @param int|null $comp_flags Compression flags. Currently unused.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 7, PECL zip >= 1.13.0
     *
     * @link http://www.php.net/manual/en/ziparchive.setcompressionindex.php
     */
    public function setCompressionIndex(int $index, int $comp_method, int $comp_flags = 0): bool
    {
    }

    /**
     * Set the compression method of an entry defined by its name
     *
     * @param string $name Name of the entry.
     * @param int $comp_method The compression method. Either
     * <code>ZipArchive::CM_DEFAULT</code>,
     * <code>ZipArchive::CM_STORE</code> or
     * <code>ZipArchive::CM_DEFLATE</code>.
     * @param int|null $comp_flags Compression flags. Currently unused.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 7, PECL zip >= 1.13.0
     *
     * @link http://www.php.net/manual/en/ziparchive.setcompressionname.php
     */
    public function setCompressionName(string $name, int $comp_method, int $comp_flags = 0): bool
    {
    }

    /**
     * Set the encryption method of an entry defined by its index
     *
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @param int $index Index of the entry.
     * @param string $method The encryption method defined by one of the ZipArchive::EM_ constants.
     * @param string $password Optional password, default used when missing.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP >= 7.2.0, PECL zip >= 1.14.0
     *
     * @link http://www.php.net/manual/en/ziparchive.setencryptionindex.php
     */
    public function setEncryptionIndex(int $index, string $method, string $password = null): bool
    {
    }

    /**
     * Set the encryption method of an entry defined by its name
     *
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @param string $name Name of the entry.
     * @param int $method The encryption method defined by one of the ZipArchive::EM_ constants.
     * @param string $password Optional password, default used when missing.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP >= 7.2.0, PECL zip >= 1.14.0
     *
     * @link http://www.php.net/manual/en/ziparchive.setencryptionname.php
     */
    public function setEncryptionName(string $name, int $method, string $password = null): bool
    {
    }

    /**
     * Set the external attributes of an entry defined by its index
     *
     * @param int $index Index of the entry.
     * @param int $opsys The operating system code defined by one of the ZipArchive::OPSYS_ constants.
     * @param int $attr The external attributes. Value depends on operating system.
     * @param int $flags Optional flags. Currently unused.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.6.0, PHP 7, PECL zip >= 1.12.4
     *
     * @link http://www.php.net/manual/en/ziparchive.setexternalattributesindex.php
     */
    public function setExternalAttributesIndex(int $index, int $opsys, int $attr, int $flags = null): bool
    {
    }

    /**
     * Set the external attributes of an entry defined by its name
     *
     * @param string $name Name of the entry.
     * @param int $opsys The operating system code defined by one of the ZipArchive::OPSYS_ constants.
     * @param int $attr The external attributes. Value depends on operating system.
     * @param int $flags Optional flags. Currently unused.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.6.0, PHP 7, PECL zip >= 1.12.4
     *
     * @link http://www.php.net/manual/en/ziparchive.setexternalattributesname.php
     */
    public function setExternalAttributesName(string $name, int $opsys, int $attr, int $flags = null): bool
    {
    }

    /**
     * Set the password for the active archive
     *
     * @param string $password The password to be used for the archive.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.6.0, PHP 7, PECL zip >= 1.12.4
     *
     * @link http://www.php.net/manual/en/ziparchive.setpassword.php
     */
    public function setPassword(string $password): bool
    {
    }

    /**
     * Get the details of an entry defined by its index
     *
     * @param int $index Index of the entry
     * @param int $flags <code>ZipArchive::FL_UNCHANGED</code> may be ORed to it to request
     * information about the original file in the archive,
     * ignoring any changes made.
     *
     * @return array Returns an array containing the entry details or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
     *
     * @link http://www.php.net/manual/en/ziparchive.statindex.php
     */
    public function statIndex(int $index, int $flags = null): array
    {
    }

    /**
     * Get the details of an entry defined by its name
     *
     * @param string $name Name of the entry
     * @param int $flags The flags argument specifies how the name lookup should be done.
     * Also, <code>ZipArchive::FL_UNCHANGED</code> may be ORed to it to request
     * information about the original file in the archive,
     * ignoring any changes made.
     * <ul>
     * <code>ZipArchive::FL_NOCASE</code>
     * <code>ZipArchive::FL_NODIR</code>
     * <code>ZipArchive::FL_UNCHANGED</code>
     * </ul>
     *
     * @return array Returns an array containing the entry details or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
     *
     * @link http://www.php.net/manual/en/ziparchive.statname.php
     */
    public function statName(string $name, int $flags = null): array
    {
    }

    /**
     * Undo all changes done in the archive
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
     *
     * @link http://www.php.net/manual/en/ziparchive.unchangeall.php
     */
    public function unchangeAll(): bool
    {
    }

    /**
     * Revert all global changes done in the archive
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
     *
     * @link http://www.php.net/manual/en/ziparchive.unchangearchive.php
     */
    public function unchangeArchive(): bool
    {
    }

    /**
     * Revert all changes done to an entry at the given index
     *
     * @param int $index Index of the entry.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
     *
     * @link http://www.php.net/manual/en/ziparchive.unchangeindex.php
     */
    public function unchangeIndex(int $index): bool
    {
    }

    /**
     * Revert all changes done to an entry with the given name
     *
     * @param string $name Name of the entry.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
     *
     * @link http://www.php.net/manual/en/ziparchive.unchangename.php
     */
    public function unchangeName(string $name): bool
    {
    }
}

/**
 * Close a ZIP file archive
 *
 * @param resource $zip A ZIP file previously opened with <code>zip_open</code>.
 *
 * @return void No value is returned.
 *
 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.zip-close.php
 */
function zip_close($zip): void
{
}

/**
 * Close a directory entry
 *
 * @param resource $zip_entry A directory entry previously opened <code>zip_entry_open</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.zip-entry-close.php
 */
function zip_entry_close($zip_entry): bool
{
}

/**
 * Retrieve the compressed size of a directory entry
 *
 * @param resource $zip_entry A directory entry returned by <code>zip_read</code>.
 *
 * @return int The compressed size.
 *
 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.zip-entry-compressedsize.php
 */
function zip_entry_compressedsize($zip_entry): int
{
}

/**
 * Retrieve the compression method of a directory entry
 *
 * @param resource $zip_entry A directory entry returned by <code>zip_read</code>.
 *
 * @return string The compression method.
 *
 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.zip-entry-compressionmethod.php
 */
function zip_entry_compressionmethod($zip_entry): string
{
}

/**
 * Retrieve the actual file size of a directory entry
 *
 * @param resource $zip_entry A directory entry returned by <code>zip_read</code>.
 *
 * @return int The size of the directory entry.
 *
 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.zip-entry-filesize.php
 */
function zip_entry_filesize($zip_entry): int
{
}

/**
 * Retrieve the name of a directory entry
 *
 * @param resource $zip_entry A directory entry returned by <code>zip_read</code>.
 *
 * @return string The name of the directory entry.
 *
 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.zip-entry-name.php
 */
function zip_entry_name($zip_entry): string
{
}

/**
 * Open a directory entry for reading
 *
 * @param resource $zip A valid resource handle returned by <code>zip_open</code>.
 * @param resource $zip_entry A directory entry returned by <code>zip_read</code>.
 * @param string $mode Any of the modes specified in the documentation of
 * <code>fopen</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.zip-entry-open.php
 */
function zip_entry_open($zip, $zip_entry, string $mode = null): bool
{
}

/**
 * Read from an open directory entry
 *
 * @param resource $zip_entry A directory entry returned by <code>zip_read</code>.
 * @param int|null $length The number of bytes to return.
 *
 * @return string Returns the data read, empty string on end of a file, or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.zip-entry-read.php
 */
function zip_entry_read($zip_entry, int $length = 1024): string
{
}

/**
 * Open a ZIP file archive
 *
 * @param string $filename The file name of the ZIP archive to open.
 *
 * @return resource Returns a resource handle for later use with
 * <code>zip_read</code> and <code>zip_close</code>
 * or returns the number of error if <code>filename</code> does not
 * exist or in case of other error.
 *
 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.zip-open.php
 */
function zip_open(string $filename)
{
}

/**
 * Read next entry in a ZIP file archive
 *
 * @param resource $zip A ZIP file previously opened with <code>zip_open</code>.
 *
 * @return resource Returns a directory entry resource for later use with the
 * <code>zip_entry_...</code> functions, or <code>FALSE</code> if
 * there are no more entries to read, or an error code if an error
 * occurred.
 *
 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.zip-read.php
 */
function zip_read($zip)
{
}
