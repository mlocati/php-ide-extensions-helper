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
     * @param mixed $dirname
     *
     * @return bool
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
     * @param mixed $filepath
     * @param mixed|null $entryname
     * @param mixed|null $start
     * @param mixed|null $length
     *
     * @return bool
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
     *
     * @link http://www.php.net/manual/en/ziparchive.addfile.php
     */
    public function addFile($filepath, $entryname = null, $start = null, $length = null)
    {
    }

    /**
     * Add a file to a ZIP archive using its contents
     *
     * @param mixed $name
     * @param mixed $content
     *
     * @return bool
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
     *
     * @link http://www.php.net/manual/en/ziparchive.addfromstring.php
     */
    public function addFromString($name, $content)
    {
    }

    /**
     * Add files from a directory by glob pattern
     *
     * @param mixed $pattern
     * @param mixed|null $flags
     * @param mixed|null $options
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL zip >= 1.9.0
     *
     * @link http://www.php.net/manual/en/ziparchive.addglob.php
     */
    public function addGlob($pattern, $flags = null, $options = null)
    {
    }

    /**
     * Add files from a directory by PCRE pattern
     *
     * @param mixed $pattern
     * @param mixed|null $path
     * @param mixed|null $options
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7, PECL zip >= 1.9.0
     *
     * @link http://www.php.net/manual/en/ziparchive.addpattern.php
     */
    public function addPattern($pattern, $path = null, $options = null)
    {
    }

    /**
     * Close the active archive (opened or newly created)
     *
     * @return bool
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
     * @param mixed $index
     *
     * @return bool
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
     * @param mixed $name
     *
     * @return bool
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
     * @param mixed $pathto
     * @param mixed|null $files
     *
     * @return bool
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
     *
     * @link http://www.php.net/manual/en/ziparchive.extractto.php
     */
    public function extractTo($pathto, $files = null)
    {
    }

    /**
     * Returns the Zip archive comment
     *
     * @param mixed|null $flags
     *
     * @return string
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
     * @param mixed $index
     * @param mixed|null $flags
     *
     * @return string
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
     * @param mixed $name
     * @param mixed|null $flags
     *
     * @return string
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
     * @param mixed $index
     * @param mixed $opsys
     * @param mixed $attr
     * @param mixed|null $flags
     *
     * @return bool
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
     * @param mixed $name
     * @param mixed $opsys
     * @param mixed $attr
     * @param mixed|null $flags
     *
     * @return bool
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
     * @param mixed $index
     * @param mixed|null $len
     * @param mixed|null $flags
     *
     * @return string
     *
     * @link http://www.php.net/manual/en/ziparchive.getfromindex.php
     */
    public function getFromIndex($index, $len = null, $flags = null)
    {
    }

    /**
     * Returns the entry contents using its name
     *
     * @param mixed $entryname
     * @param mixed|null $len
     * @param mixed|null $flags
     *
     * @return string
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
     *
     * @link http://www.php.net/manual/en/ziparchive.getfromname.php
     */
    public function getFromName($entryname, $len = null, $flags = null)
    {
    }

    /**
     * Returns the name of an entry using its index
     *
     * @param mixed $index
     * @param mixed|null $flags
     *
     * @return string
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
     * @return string
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
     * @param mixed $entryname
     *
     * @return resource
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
     *
     * @link http://www.php.net/manual/en/ziparchive.getstream.php
     */
    public function getStream($entryname)
    {
    }

    /**
     * Returns the index of the entry in the archive
     *
     * @param mixed $filename
     * @param mixed|null $flags
     *
     * @return int
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
     *
     * @link http://www.php.net/manual/en/ziparchive.locatename.php
     */
    public function locateName($filename, $flags = null)
    {
    }

    /**
     * Open a ZIP file archive
     *
     * @param mixed $filename
     * @param mixed|null $flags
     *
     * @return mixed
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
     * @param mixed $index
     * @param mixed $new_name
     *
     * @return bool
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
     *
     * @link http://www.php.net/manual/en/ziparchive.renameindex.php
     */
    public function renameIndex($index, $new_name)
    {
    }

    /**
     * Renames an entry defined by its name
     *
     * @param mixed $name
     * @param mixed $new_name
     *
     * @return bool
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
     *
     * @link http://www.php.net/manual/en/ziparchive.renamename.php
     */
    public function renameName($name, $new_name)
    {
    }

    /**
     * Set the comment of a ZIP archive
     *
     * @param mixed $comment
     *
     * @return bool
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
     * @param mixed $index
     * @param mixed $comment
     *
     * @return bool
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
     * @param mixed $name
     * @param mixed $comment
     *
     * @return bool
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
     * @param mixed $index
     * @param mixed $opsys
     * @param mixed $attr
     * @param mixed|null $flags
     *
     * @return bool
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
     * @param mixed $name
     * @param mixed $opsys
     * @param mixed $attr
     * @param mixed|null $flags
     *
     * @return bool
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
     * @param mixed $password
     *
     * @return bool
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
     * @param mixed $index
     * @param mixed|null $flags
     *
     * @return array
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
     * @param mixed $filename
     * @param mixed|null $flags
     *
     * @return array
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
     *
     * @link http://www.php.net/manual/en/ziparchive.statname.php
     */
    public function statName($filename, $flags = null)
    {
    }

    /**
     * Undo all changes done in the archive
     *
     * @return bool
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
     * @return bool
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
     * @param mixed $index
     *
     * @return bool
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
     * @param mixed $name
     *
     * @return bool
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
 * @param mixed $zip
 *
 * @return void
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
 * @param mixed $zip_ent
 *
 * @return bool
 *
 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.zip-entry-close.php
 */
function zip_entry_close($zip_ent)
{
}

/**
 * Retrieve the compressed size of a directory entry
 *
 * @param mixed $zip_entry
 *
 * @return int
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
 * @param mixed $zip_entry
 *
 * @return string
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
 * @param mixed $zip_entry
 *
 * @return int
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
 * @param mixed $zip_entry
 *
 * @return string
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
 * @param mixed $zip_dp
 * @param mixed $zip_entry
 * @param mixed|null $mode
 *
 * @return bool
 *
 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.zip-entry-open.php
 */
function zip_entry_open($zip_dp, $zip_entry, $mode = null)
{
}

/**
 * Read from an open directory entry
 *
 * @param mixed $zip_entry
 * @param mixed|null $len
 *
 * @return string
 *
 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.zip-entry-read.php
 */
function zip_entry_read($zip_entry, $len = null)
{
}

/**
 * Open a ZIP file archive
 *
 * @param mixed $filename
 *
 * @return resource
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
 * @param mixed $zip
 *
 * @return resource
 *
 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.zip-read.php
 */
function zip_read($zip)
{
}
