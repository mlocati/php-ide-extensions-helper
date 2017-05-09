<?php
// Documentation generated automatically for extension zip v1.13.5 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
// No INI entries
// No constants defined
class ZipArchive
{
    const CHECKCONS = 4;
    const CM_BZIP2 = 12;
    const CM_DEFAULT = -1;
    const CM_DEFLATE = 8;
    const CM_DEFLATE64 = 9;
    const CM_IMPLODE = 6;
    const CM_LZ77 = 19;
    const CM_LZMA = 14;
    const CM_PKWARE_IMPLODE = 10;
    const CM_PPMD = 98;
    const CM_REDUCE_1 = 2;
    const CM_REDUCE_2 = 3;
    const CM_REDUCE_3 = 4;
    const CM_REDUCE_4 = 5;
    const CM_SHRINK = 1;
    const CM_STORE = 0;
    const CM_TERSE = 18;
    const CM_WAVPACK = 97;
    const CREATE = 1;
    const ER_CHANGED = 15;
    const ER_CLOSE = 3;
    const ER_COMPNOTSUPP = 16;
    const ER_CRC = 7;
    const ER_DELETED = 23;
    const ER_EOF = 17;
    const ER_EXISTS = 10;
    const ER_INCONS = 21;
    const ER_INTERNAL = 20;
    const ER_INVAL = 18;
    const ER_MEMORY = 14;
    const ER_MULTIDISK = 1;
    const ER_NOENT = 9;
    const ER_NOZIP = 19;
    const ER_OK = 0;
    const ER_OPEN = 11;
    const ER_READ = 5;
    const ER_REMOVE = 22;
    const ER_RENAME = 2;
    const ER_SEEK = 4;
    const ER_TMPOPEN = 12;
    const ER_WRITE = 6;
    const ER_ZIPCLOSED = 8;
    const ER_ZLIB = 13;
    const EXCL = 2;
    const FL_COMPRESSED = 4;
    const FL_ENC_CP437 = 4096;
    const FL_ENC_GUESS = 0;
    const FL_ENC_RAW = 64;
    const FL_ENC_STRICT = 128;
    const FL_ENC_UTF_8 = 2048;
    const FL_NOCASE = 1;
    const FL_NODIR = 2;
    const FL_UNCHANGED = 8;
    const OPSYS_ACORN_RISC = 13;
    const OPSYS_ALTERNATE_MVS = 15;
    const OPSYS_AMIGA = 1;
    const OPSYS_ATARI_ST = 5;
    const OPSYS_BEOS = 16;
    const OPSYS_DEFAULT = 3;
    const OPSYS_DOS = 0;
    const OPSYS_MACINTOSH = 7;
    const OPSYS_MVS = 11;
    const OPSYS_OPENVMS = 2;
    const OPSYS_OS_2 = 6;
    const OPSYS_OS_400 = 18;
    const OPSYS_OS_X = 19;
    const OPSYS_TANDEM = 17;
    const OPSYS_UNIX = 3;
    const OPSYS_VFAT = 14;
    const OPSYS_VM_CMS = 4;
    const OPSYS_VSE = 12;
    const OPSYS_WINDOWS_NTFS = 10;
    const OPSYS_Z_CPM = 9;
    const OPSYS_Z_SYSTEM = 8;
    const OVERWRITE = 8;
    public function addEmptyDir($dirname)
    {
    }
    public function addFile($filepath, $entryname = null, $start = null, $length = null)
    {
    }
    public function addFromString($name, $content)
    {
    }
    public function addGlob($pattern, $flags = null, $options = null)
    {
    }
    public function addPattern($pattern, $path = null, $options = null)
    {
    }
    public function close()
    {
    }
    public function deleteIndex($index)
    {
    }
    public function deleteName($name)
    {
    }
    public function extractTo($pathto, $files = null)
    {
    }
    public function getArchiveComment($flags = null)
    {
    }
    public function getCommentIndex($index, $flags = null)
    {
    }
    public function getCommentName($name, $flags = null)
    {
    }
    public function getExternalAttributesIndex($index, &$opsys, &$attr, $flags = null)
    {
    }
    public function getExternalAttributesName($name, &$opsys, &$attr, $flags = null)
    {
    }
    public function getFromIndex($index, $len = null, $flags = null)
    {
    }
    public function getFromName($entryname, $len = null, $flags = null)
    {
    }
    public function getNameIndex($index, $flags = null)
    {
    }
    public function getStatusString()
    {
    }
    public function getStream($entryname)
    {
    }
    public function locateName($filename, $flags = null)
    {
    }
    public function open($filename, $flags = null)
    {
    }
    public function renameIndex($index, $new_name)
    {
    }
    public function renameName($name, $new_name)
    {
    }
    public function setArchiveComment($comment)
    {
    }
    public function setCommentIndex($index, $comment)
    {
    }
    public function setCommentName($name, $comment)
    {
    }
    public function setCompressionIndex($index, $method, $compflags = null)
    {
    }
    public function setCompressionName($name, $method, $compflags = null)
    {
    }
    public function setExternalAttributesIndex($index, $opsys, $attr, $flags = null)
    {
    }
    public function setExternalAttributesName($name, $opsys, $attr, $flags = null)
    {
    }
    public function setPassword($password)
    {
    }
    public function statIndex($index, $flags = null)
    {
    }
    public function statName($filename, $flags = null)
    {
    }
    public function unchangeAll()
    {
    }
    public function unchangeArchive()
    {
    }
    public function unchangeIndex($index)
    {
    }
    public function unchangeName($name)
    {
    }
}
function zip_open($filename)
{
}
function zip_close($zip)
{
}
function zip_read($zip)
{
}
function zip_entry_open($zip_dp, $zip_entry, $mode = null)
{
}
function zip_entry_close($zip_ent)
{
}
function zip_entry_read($zip_entry, $len = null)
{
}
function zip_entry_filesize($zip_entry)
{
}
function zip_entry_name($zip_entry)
{
}
function zip_entry_compressedsize($zip_entry)
{
}
function zip_entry_compressionmethod($zip_entry)
{
}