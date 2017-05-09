<?php
// Documentation generated automatically for extension fileinfo v1.0.5 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
// No INI entries
const FILEINFO_CONTINUE = 32;
const FILEINFO_DEVICES = 8;
const FILEINFO_MIME = 1040;
const FILEINFO_MIME_ENCODING = 1024;
const FILEINFO_MIME_TYPE = 16;
const FILEINFO_NONE = 0;
const FILEINFO_PRESERVE_ATIME = 128;
const FILEINFO_RAW = 256;
const FILEINFO_SYMLINK = 2;
class finfo
{
    public function buffer($string, $options = null, $context = null)
    {
    }
    public function file($filename, $options = null, $context = null)
    {
    }
    public function finfo($options = null, $arg = null)
    {
    }
    public function set_flags($options)
    {
    }
}
function finfo_open($options = null, $arg = null)
{
}
function finfo_close($finfo)
{
}
function finfo_set_flags($finfo, $options)
{
}
function finfo_file($finfo, $filename, $options = null, $context = null)
{
}
function finfo_buffer($finfo, $string, $options = null, $context = null)
{
}
function mime_content_type($string)
{
}