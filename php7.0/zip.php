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
     * mixed $dirname
     */
    public function addEmptyDir($dirname)
    {
    }

    /**
     * mixed $filepath
     * mixed|null $entryname
     * mixed|null $start
     * mixed|null $length
     */
    public function addFile($filepath, $entryname = null, $start = null, $length = null)
    {
    }

    /**
     * mixed $name
     * mixed $content
     */
    public function addFromString($name, $content)
    {
    }

    /**
     * mixed $pattern
     * mixed|null $flags
     * mixed|null $options
     */
    public function addGlob($pattern, $flags = null, $options = null)
    {
    }

    /**
     * mixed $pattern
     * mixed|null $path
     * mixed|null $options
     */
    public function addPattern($pattern, $path = null, $options = null)
    {
    }

    public function close()
    {
    }

    /**
     * mixed $index
     */
    public function deleteIndex($index)
    {
    }

    /**
     * mixed $name
     */
    public function deleteName($name)
    {
    }

    /**
     * mixed $pathto
     * mixed|null $files
     */
    public function extractTo($pathto, $files = null)
    {
    }

    /**
     * mixed|null $flags
     */
    public function getArchiveComment($flags = null)
    {
    }

    /**
     * mixed $index
     * mixed|null $flags
     */
    public function getCommentIndex($index, $flags = null)
    {
    }

    /**
     * mixed $name
     * mixed|null $flags
     */
    public function getCommentName($name, $flags = null)
    {
    }

    /**
     * mixed $index
     * mixed $opsys
     * mixed $attr
     * mixed|null $flags
     */
    public function getExternalAttributesIndex($index, &$opsys, &$attr, $flags = null)
    {
    }

    /**
     * mixed $name
     * mixed $opsys
     * mixed $attr
     * mixed|null $flags
     */
    public function getExternalAttributesName($name, &$opsys, &$attr, $flags = null)
    {
    }

    /**
     * mixed $index
     * mixed|null $len
     * mixed|null $flags
     */
    public function getFromIndex($index, $len = null, $flags = null)
    {
    }

    /**
     * mixed $entryname
     * mixed|null $len
     * mixed|null $flags
     */
    public function getFromName($entryname, $len = null, $flags = null)
    {
    }

    /**
     * mixed $index
     * mixed|null $flags
     */
    public function getNameIndex($index, $flags = null)
    {
    }

    public function getStatusString()
    {
    }

    /**
     * mixed $entryname
     */
    public function getStream($entryname)
    {
    }

    /**
     * mixed $filename
     * mixed|null $flags
     */
    public function locateName($filename, $flags = null)
    {
    }

    /**
     * mixed $filename
     * mixed|null $flags
     */
    public function open($filename, $flags = null)
    {
    }

    /**
     * mixed $index
     * mixed $new_name
     */
    public function renameIndex($index, $new_name)
    {
    }

    /**
     * mixed $name
     * mixed $new_name
     */
    public function renameName($name, $new_name)
    {
    }

    /**
     * mixed $comment
     */
    public function setArchiveComment($comment)
    {
    }

    /**
     * mixed $index
     * mixed $comment
     */
    public function setCommentIndex($index, $comment)
    {
    }

    /**
     * mixed $name
     * mixed $comment
     */
    public function setCommentName($name, $comment)
    {
    }

    /**
     * mixed $index
     * mixed $method
     * mixed|null $compflags
     */
    public function setCompressionIndex($index, $method, $compflags = null)
    {
    }

    /**
     * mixed $name
     * mixed $method
     * mixed|null $compflags
     */
    public function setCompressionName($name, $method, $compflags = null)
    {
    }

    /**
     * mixed $index
     * mixed $opsys
     * mixed $attr
     * mixed|null $flags
     */
    public function setExternalAttributesIndex($index, $opsys, $attr, $flags = null)
    {
    }

    /**
     * mixed $name
     * mixed $opsys
     * mixed $attr
     * mixed|null $flags
     */
    public function setExternalAttributesName($name, $opsys, $attr, $flags = null)
    {
    }

    /**
     * mixed $password
     */
    public function setPassword($password)
    {
    }

    /**
     * mixed $index
     * mixed|null $flags
     */
    public function statIndex($index, $flags = null)
    {
    }

    /**
     * mixed $filename
     * mixed|null $flags
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
     * mixed $index
     */
    public function unchangeIndex($index)
    {
    }

    /**
     * mixed $name
     */
    public function unchangeName($name)
    {
    }
}

/**
 * Close a ZIP file archive
 *
 * mixed $zip
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
 * mixed $zip_ent
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
 * mixed $zip_entry
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
 * mixed $zip_entry
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
 * mixed $zip_entry
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
 * mixed $zip_entry
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
 * mixed $zip_dp
 * mixed $zip_entry
 * mixed|null $mode
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
 * mixed $zip_entry
 * mixed|null $len
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
 * mixed $filename
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
 * mixed $zip
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
