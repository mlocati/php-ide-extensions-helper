<?php
// Documentation generated automatically for extension ftp v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
// No INI entries
const FTP_ASCII = 1;
const FTP_AUTORESUME = -1;
const FTP_AUTOSEEK = 1;
const FTP_BINARY = 2;
const FTP_FAILED = 0;
const FTP_FINISHED = 1;
const FTP_IMAGE = 2;
const FTP_MOREDATA = 2;
const FTP_TEXT = 1;
const FTP_TIMEOUT_SEC = 0;
const FTP_USEPASVADDRESS = 2;
// No classes defined
function ftp_connect($host, $port = null, $timeout = null)
{
}
function ftp_ssl_connect($host, $port = null, $timeout = null)
{
}
function ftp_login($ftp, $username, $password)
{
}
function ftp_pwd($ftp)
{
}
function ftp_cdup($ftp)
{
}
function ftp_chdir($ftp, $directory)
{
}
function ftp_exec($ftp, $command)
{
}
function ftp_raw($ftp, $command)
{
}
function ftp_mkdir($ftp, $directory)
{
}
function ftp_rmdir($ftp, $directory)
{
}
function ftp_chmod($ftp, $mode, $filename)
{
}
function ftp_alloc($ftp, $size, &$response = null)
{
}
function ftp_nlist($ftp, $directory)
{
}
function ftp_rawlist($ftp, $directory, $recursive = null)
{
}
function ftp_systype($ftp)
{
}
function ftp_pasv($ftp, $pasv)
{
}
function ftp_get($ftp, $local_file, $remote_file, $mode, $resume_pos = null)
{
}
function ftp_fget($ftp, $fp, $remote_file, $mode, $resumepos = null)
{
}
function ftp_put($ftp, $remote_file, $local_file, $mode, $startpos = null)
{
}
function ftp_fput($ftp, $remote_file, $fp, $mode, $startpos = null)
{
}
function ftp_size($ftp, $filename)
{
}
function ftp_mdtm($ftp, $filename)
{
}
function ftp_rename($ftp, $src, $dest)
{
}
function ftp_delete($ftp, $file)
{
}
function ftp_site($ftp, $cmd)
{
}
function ftp_close($ftp)
{
}
function ftp_set_option($ftp, $option, $value)
{
}
function ftp_get_option($ftp, $option)
{
}
function ftp_nb_fget($ftp, $fp, $remote_file, $mode, $resumepos = null)
{
}
function ftp_nb_get($ftp, $local_file, $remote_file, $mode, $resume_pos = null)
{
}
function ftp_nb_continue($ftp)
{
}
function ftp_nb_put($ftp, $remote_file, $local_file, $mode, $startpos = null)
{
}
function ftp_nb_fput($ftp, $remote_file, $fp, $mode, $startpos = null)
{
}
function ftp_quit($ftp)
{
}