<?php
// Start of extension: zip
// - parsed on POSIX with PHP 5.6.34 (extension version 1.12.5)
// - parsed on Windows with PHP 5.6.34 (extension version 1.12.5)

/**
 * A file archive, compressed with Zip.
 *
 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
 *
 * @link http://www.php.net/manual/en/class.ziparchive.php
 */
class ZipArchive
{
    /**
     * @var int
     */
    const CHECKCONS = 4;

    /**
     * @var int
     */
    const CM_BZIP2 = 12;

    /**
     * @var int
     */
    const CM_DEFAULT = -1;

    /**
     * @var int
     */
    const CM_DEFLATE = 8;

    /**
     * @var int
     */
    const CM_DEFLATE64 = 9;

    /**
     * @var int
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
     * @var int
     */
    const CM_PKWARE_IMPLODE = 10;

    /**
     * @var int
     */
    const CM_PPMD = 98;

    /**
     * @var int
     */
    const CM_REDUCE_1 = 2;

    /**
     * @var int
     */
    const CM_REDUCE_2 = 3;

    /**
     * @var int
     */
    const CM_REDUCE_3 = 4;

    /**
     * @var int
     */
    const CM_REDUCE_4 = 5;

    /**
     * @var int
     */
    const CM_SHRINK = 1;

    /**
     * @var int
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
     * @var int
     */
    const CREATE = 1;

    /**
     * @var int
     */
    const ER_CHANGED = 15;

    /**
     * @var int
     */
    const ER_CLOSE = 3;

    /**
     * @var int
     */
    const ER_COMPNOTSUPP = 16;

    /**
     * @var int
     */
    const ER_CRC = 7;

    /**
     * @var int
     */
    const ER_DELETED = 23;

    /**
     * @var int
     */
    const ER_EOF = 17;

    /**
     * @var int
     */
    const ER_EXISTS = 10;

    /**
     * @var int
     */
    const ER_INCONS = 21;

    /**
     * @var int
     */
    const ER_INTERNAL = 20;

    /**
     * @var int
     */
    const ER_INVAL = 18;

    /**
     * @var int
     */
    const ER_MEMORY = 14;

    /**
     * @var int
     */
    const ER_MULTIDISK = 1;

    /**
     * @var int
     */
    const ER_NOENT = 9;

    /**
     * @var int
     */
    const ER_NOZIP = 19;

    /**
     * @var int
     */
    const ER_OK = 0;

    /**
     * @var int
     */
    const ER_OPEN = 11;

    /**
     * @var int
     */
    const ER_READ = 5;

    /**
     * @var int
     */
    const ER_REMOVE = 22;

    /**
     * @var int
     */
    const ER_RENAME = 2;

    /**
     * @var int
     */
    const ER_SEEK = 4;

    /**
     * @var int
     */
    const ER_TMPOPEN = 12;

    /**
     * @var int
     */
    const ER_WRITE = 6;

    /**
     * @var int
     */
    const ER_ZIPCLOSED = 8;

    /**
     * @var int
     */
    const ER_ZLIB = 13;

    /**
     * @var int
     */
    const EXCL = 2;

    /**
     * @var int
     */
    const FL_COMPRESSED = 4;

    /**
     * @var int
     */
    const FL_NOCASE = 1;

    /**
     * @var int
     */
    const FL_NODIR = 2;

    /**
     * @var int
     */
    const FL_UNCHANGED = 8;

    /**
     * @var int
     */
    const OPSYS_ACORN_RISC = 13;

    /**
     * @var int
     */
    const OPSYS_ALTERNATE_MVS = 15;

    /**
     * @var int
     */
    const OPSYS_AMIGA = 1;

    /**
     * @var int
     */
    const OPSYS_ATARI_ST = 5;

    /**
     * @var int
     */
    const OPSYS_BEOS = 16;

    /**
     * @var int
     */
    const OPSYS_DEFAULT = 3;

    /**
     * @var int
     */
    const OPSYS_DOS = 0;

    /**
     * @var int
     */
    const OPSYS_MACINTOSH = 7;

    /**
     * @var int
     */
    const OPSYS_MVS = 11;

    /**
     * @var int
     */
    const OPSYS_OPENVMS = 2;

    /**
     * @var int
     */
    const OPSYS_OS_2 = 6;

    /**
     * @var int
     */
    const OPSYS_OS_400 = 18;

    /**
     * @var int
     */
    const OPSYS_OS_X = 19;

    /**
     * @var int
     */
    const OPSYS_TANDEM = 17;

    /**
     * @var int
     */
    const OPSYS_UNIX = 3;

    /**
     * @var int
     */
    const OPSYS_VFAT = 14;

    /**
     * @var int
     */
    const OPSYS_VM_CMS = 4;

    /**
     * @var int
     */
    const OPSYS_VSE = 12;

    /**
     * @var int
     */
    const OPSYS_WINDOWS_NTFS = 10;

    /**
     * @var int
     */
    const OPSYS_Z_CPM = 9;

    /**
     * @var int
     */
    const OPSYS_Z_SYSTEM = 8;

    /**
     * @var int
     */
    const OVERWRITE = 8;

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
    public function addEmptyDir($dirname)
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
    public function addFile($filename, $localname = null, $start = 0, $length = 0)
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
    public function addFromString($localname, $contents)
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
    public function addGlob($pattern, $flags = 0, array $options = /* array() */ null)
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
    public function addPattern($pattern, $path = ".", array $options = /* array() */ null)
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
    public function close()
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
    public function deleteIndex($index)
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
    public function deleteName($name)
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
    public function extractTo($destination, $entries = null)
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
    public function getArchiveComment($flags = null)
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
    public function getCommentIndex($index, $flags = null)
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
    public function getCommentName($name, $flags = null)
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
    public function getExternalAttributesIndex($index, &$opsys, &$attr, $flags = null)
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
    public function getExternalAttributesName($name, &$opsys, &$attr, $flags = null)
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
    public function getFromIndex($index, $length = 0, $flags = null)
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
    public function getFromName($name, $length = 0, $flags = null)
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
    public function getNameIndex($index, $flags = null)
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
    public function getStatusString()
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
    public function getStream($name)
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
    public function locateName($name, $flags = null)
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
    public function open($filename, $flags = null)
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
    public function renameIndex($index, $newname)
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
    public function renameName($name, $newname)
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
    public function setArchiveComment($comment)
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
    public function setCommentIndex($index, $comment)
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
    public function setCommentName($name, $comment)
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
    public function setExternalAttributesIndex($index, $opsys, $attr, $flags = null)
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
    public function setExternalAttributesName($name, $opsys, $attr, $flags = null)
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
    public function setPassword($password)
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
    public function statIndex($index, $flags = null)
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
    public function statName($name, $flags = null)
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
    public function unchangeAll()
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
    public function unchangeArchive()
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
    public function unchangeIndex($index)
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
    public function unchangeName($name)
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
function zip_close($zip)
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
function zip_entry_close($zip_entry)
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
function zip_entry_compressedsize($zip_entry)
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
function zip_entry_compressionmethod($zip_entry)
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
function zip_entry_filesize($zip_entry)
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
function zip_entry_name($zip_entry)
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
function zip_entry_open($zip, $zip_entry, $mode = null)
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
function zip_entry_read($zip_entry, $length = 1024)
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
function zip_open($filename)
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
