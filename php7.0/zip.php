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
     * @param mixed $dirname
     */
    public function addEmptyDir($dirname)
    {
    }

    /**
     * @param mixed $filepath
     * @param mixed|null $entryname
     * @param mixed|null $start
     * @param mixed|null $length
     */
    public function addFile($filepath, $entryname = null, $start = null, $length = null)
    {
    }

    /**
     * @param mixed $name
     * @param mixed $content
     */
    public function addFromString($name, $content)
    {
    }

    /**
     * @param mixed $pattern
     * @param mixed|null $flags
     * @param mixed|null $options
     */
    public function addGlob($pattern, $flags = null, $options = null)
    {
    }

    /**
     * @param mixed $pattern
     * @param mixed|null $path
     * @param mixed|null $options
     */
    public function addPattern($pattern, $path = null, $options = null)
    {
    }

    public function close()
    {
    }

    /**
     * @param mixed $index
     */
    public function deleteIndex($index)
    {
    }

    /**
     * @param mixed $name
     */
    public function deleteName($name)
    {
    }

    /**
     * @param mixed $pathto
     * @param mixed|null $files
     */
    public function extractTo($pathto, $files = null)
    {
    }

    /**
     * @param mixed|null $flags
     */
    public function getArchiveComment($flags = null)
    {
    }

    /**
     * @param mixed $index
     * @param mixed|null $flags
     */
    public function getCommentIndex($index, $flags = null)
    {
    }

    /**
     * @param mixed $name
     * @param mixed|null $flags
     */
    public function getCommentName($name, $flags = null)
    {
    }

    /**
     * @param mixed $index
     * @param mixed $opsys
     * @param mixed $attr
     * @param mixed|null $flags
     */
    public function getExternalAttributesIndex($index, &$opsys, &$attr, $flags = null)
    {
    }

    /**
     * @param mixed $name
     * @param mixed $opsys
     * @param mixed $attr
     * @param mixed|null $flags
     */
    public function getExternalAttributesName($name, &$opsys, &$attr, $flags = null)
    {
    }

    /**
     * @param mixed $index
     * @param mixed|null $len
     * @param mixed|null $flags
     */
    public function getFromIndex($index, $len = null, $flags = null)
    {
    }

    /**
     * @param mixed $entryname
     * @param mixed|null $len
     * @param mixed|null $flags
     */
    public function getFromName($entryname, $len = null, $flags = null)
    {
    }

    /**
     * @param mixed $index
     * @param mixed|null $flags
     */
    public function getNameIndex($index, $flags = null)
    {
    }

    public function getStatusString()
    {
    }

    /**
     * @param mixed $entryname
     */
    public function getStream($entryname)
    {
    }

    /**
     * @param mixed $filename
     * @param mixed|null $flags
     */
    public function locateName($filename, $flags = null)
    {
    }

    /**
     * @param mixed $filename
     * @param mixed|null $flags
     */
    public function open($filename, $flags = null)
    {
    }

    /**
     * @param mixed $index
     * @param mixed $new_name
     */
    public function renameIndex($index, $new_name)
    {
    }

    /**
     * @param mixed $name
     * @param mixed $new_name
     */
    public function renameName($name, $new_name)
    {
    }

    /**
     * @param mixed $comment
     */
    public function setArchiveComment($comment)
    {
    }

    /**
     * @param mixed $index
     * @param mixed $comment
     */
    public function setCommentIndex($index, $comment)
    {
    }

    /**
     * @param mixed $name
     * @param mixed $comment
     */
    public function setCommentName($name, $comment)
    {
    }

    /**
     * @param mixed $index
     * @param mixed $method
     * @param mixed|null $compflags
     */
    public function setCompressionIndex($index, $method, $compflags = null)
    {
    }

    /**
     * @param mixed $name
     * @param mixed $method
     * @param mixed|null $compflags
     */
    public function setCompressionName($name, $method, $compflags = null)
    {
    }

    /**
     * @param mixed $index
     * @param mixed $opsys
     * @param mixed $attr
     * @param mixed|null $flags
     */
    public function setExternalAttributesIndex($index, $opsys, $attr, $flags = null)
    {
    }

    /**
     * @param mixed $name
     * @param mixed $opsys
     * @param mixed $attr
     * @param mixed|null $flags
     */
    public function setExternalAttributesName($name, $opsys, $attr, $flags = null)
    {
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
    }

    /**
     * @param mixed $index
     * @param mixed|null $flags
     */
    public function statIndex($index, $flags = null)
    {
    }

    /**
     * @param mixed $filename
     * @param mixed|null $flags
     */
    public function statName($filename, $flags = null)
    {
    }

    public function unchangeAll()
    {
    }

    public function unchangeArchive()
    {
    }

    /**
     * @param mixed $index
     */
    public function unchangeIndex($index)
    {
    }

    /**
     * @param mixed $name
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
