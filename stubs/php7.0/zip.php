<?php
// Start of extension: zip
// - parsed on POSIX with PHP 7.0.28 (extension version 1.13.5)
// - parsed on Windows with PHP 7.0.28 (extension version 1.13.5)

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
    public function addEmptyDir($dirname): bool
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
    public function addFile($filepath, $entryname = null, $start = null, $length = null): bool
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
    public function addFromString($name, $content): bool
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
    public function addGlob($pattern, $flags = null, $options = null): bool
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
    public function addPattern($pattern, $path = null, $options = null): bool
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
    public function close(): bool
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
    public function deleteIndex($index): bool
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
    public function deleteName($name): bool
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
    public function extractTo($pathto, $files = null): bool
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
    public function getArchiveComment($flags = null): string
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
    public function getCommentIndex($index, $flags = null): string
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
    public function getCommentName($name, $flags = null): string
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
    public function getExternalAttributesIndex($index, &$opsys, &$attr, $flags = null): bool
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
    public function getExternalAttributesName($name, &$opsys, &$attr, $flags = null): bool
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
    public function getFromIndex($index, $len = null, $flags = null): string
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
    public function getFromName($entryname, $len = null, $flags = null): string
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
    public function getNameIndex($index, $flags = null): string
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
    public function getStatusString(): string
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
    public function locateName($filename, $flags = null): int
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
    public function renameIndex($index, $new_name): bool
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
    public function renameName($name, $new_name): bool
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
    public function setArchiveComment($comment): bool
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
    public function setCommentIndex($index, $comment): bool
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
    public function setCommentName($name, $comment): bool
    {
    }

    /**
     * Set the compression method of an entry defined by its index
     *
     * @param mixed $index
     * @param mixed $method
     * @param mixed|null $compflags
     *
     * @return bool
     *
     * @since PHP 7, PECL zip >= 1.13.0
     *
     * @link http://www.php.net/manual/en/ziparchive.setcompressionindex.php
     */
    public function setCompressionIndex($index, $method, $compflags = null): bool
    {
    }

    /**
     * Set the compression method of an entry defined by its name
     *
     * @param mixed $name
     * @param mixed $method
     * @param mixed|null $compflags
     *
     * @return bool
     *
     * @since PHP 7, PECL zip >= 1.13.0
     *
     * @link http://www.php.net/manual/en/ziparchive.setcompressionname.php
     */
    public function setCompressionName($name, $method, $compflags = null): bool
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
    public function setExternalAttributesIndex($index, $opsys, $attr, $flags = null): bool
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
    public function setExternalAttributesName($name, $opsys, $attr, $flags = null): bool
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
    public function setPassword($password): bool
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
    public function statIndex($index, $flags = null): array
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
    public function statName($filename, $flags = null): array
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
    public function unchangeAll(): bool
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
    public function unchangeArchive(): bool
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
    public function unchangeIndex($index): bool
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
    public function unchangeName($name): bool
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
function zip_entry_close($zip_ent): bool
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
function zip_entry_compressedsize($zip_entry): int
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
function zip_entry_compressionmethod($zip_entry): string
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
function zip_entry_filesize($zip_entry): int
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
function zip_entry_name($zip_entry): string
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
function zip_entry_open($zip_dp, $zip_entry, $mode = null): bool
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
function zip_entry_read($zip_entry, $len = null): string
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
