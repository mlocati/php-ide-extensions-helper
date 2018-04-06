<?php
// Start of extension: ftp
// - parsed on POSIX with PHP 7.2.3 (extension version 7.2.3)

/**
 * @link http://www.php.net/manual/en/ftp.constants.php#constant.ftp-ascii
 *
 * @var int
 */
const FTP_ASCII = 1;

/**
 * Automatically determine resume position and start position for GET and PUT requests
 * (only works if FTP_AUTOSEEK is enabled)
 *
 * @link http://www.php.net/manual/en/ftp.constants.php#constant.ftp-autoresume
 *
 * @var int
 */
const FTP_AUTORESUME = -1;

/**
 * See <code>ftp_set_option</code> for information.
 *
 * @link http://www.php.net/manual/en/ftp.constants.php#constant.ftp-autoseek
 *
 * @var int
 */
const FTP_AUTOSEEK = 1;

/**
 * @link http://www.php.net/manual/en/ftp.constants.php#constant.ftp-binary
 *
 * @var int
 */
const FTP_BINARY = 2;

/**
 * Asynchronous transfer has failed
 *
 * @link http://www.php.net/manual/en/ftp.constants.php#constant.ftp-failed
 *
 * @var int
 */
const FTP_FAILED = 0;

/**
 * Asynchronous transfer has finished
 *
 * @link http://www.php.net/manual/en/ftp.constants.php#constant.ftp-finished
 *
 * @var int
 */
const FTP_FINISHED = 1;

/**
 * Alias of <code>FTP_BINARY</code>.
 *
 * @link http://www.php.net/manual/en/ftp.constants.php#constant.ftp-image
 *
 * @var int
 */
const FTP_IMAGE = 2;

/**
 * Asynchronous transfer is still active
 *
 * @link http://www.php.net/manual/en/ftp.constants.php#constant.ftp-moredata
 *
 * @var int
 */
const FTP_MOREDATA = 2;

/**
 * Alias of <code>FTP_ASCII</code>.
 *
 * @link http://www.php.net/manual/en/ftp.constants.php#constant.ftp-text
 *
 * @var int
 */
const FTP_TEXT = 1;

/**
 * See <code>ftp_set_option</code> for information.
 *
 * @link http://www.php.net/manual/en/ftp.constants.php#constant.ftp-timeout-sec
 *
 * @var int
 */
const FTP_TIMEOUT_SEC = 0;

/**
 * @var int
 */
const FTP_USEPASVADDRESS = 2;

/**
 * Allocates space for a file to be uploaded
 *
 * @param mixed $ftp
 * @param mixed $size
 * @param mixed|null $response
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-alloc.php
 */
function ftp_alloc($ftp, $size, &$response = null): bool
{
}

/**
 * Append content of a file a another file on the FTP server
 *
 * @param mixed $ftp
 * @param mixed $remote_file
 * @param mixed $local_file
 * @param mixed $mode
 *
 * @return bool
 *
 * @since PHP 7 >= 7.2.0
 *
 * @link http://www.php.net/manual/en/function.ftp-append.php
 */
function ftp_append($ftp, $remote_file, $local_file, $mode): bool
{
}

/**
 * Changes to the parent directory
 *
 * @param mixed $ftp
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-cdup.php
 */
function ftp_cdup($ftp): bool
{
}

/**
 * Changes the current directory on a FTP server
 *
 * @param mixed $ftp
 * @param mixed $directory
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-chdir.php
 */
function ftp_chdir($ftp, $directory): bool
{
}

/**
 * Set permissions on a file via FTP
 *
 * @param mixed $ftp
 * @param mixed $mode
 * @param mixed $filename
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-chmod.php
 */
function ftp_chmod($ftp, $mode, $filename): int
{
}

/**
 * Closes an FTP connection
 *
 * @param mixed $ftp
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-close.php
 */
function ftp_close($ftp): bool
{
}

/**
 * Opens an FTP connection
 *
 * @param mixed $host
 * @param mixed|null $port
 * @param mixed|null $timeout
 *
 * @return resource
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-connect.php
 */
function ftp_connect($host, $port = null, $timeout = null)
{
}

/**
 * Deletes a file on the FTP server
 *
 * @param mixed $ftp
 * @param mixed $file
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-delete.php
 */
function ftp_delete($ftp, $file): bool
{
}

/**
 * Requests execution of a command on the FTP server
 *
 * @param mixed $ftp
 * @param mixed $command
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-exec.php
 */
function ftp_exec($ftp, $command): bool
{
}

/**
 * Downloads a file from the FTP server and saves to an open file
 *
 * @param mixed $ftp
 * @param mixed $fp
 * @param mixed $remote_file
 * @param mixed $mode
 * @param mixed|null $resumepos
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-fget.php
 */
function ftp_fget($ftp, $fp, $remote_file, $mode, $resumepos = null): bool
{
}

/**
 * Uploads from an open file to the FTP server
 *
 * @param mixed $ftp
 * @param mixed $remote_file
 * @param mixed $fp
 * @param mixed $mode
 * @param mixed|null $startpos
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-fput.php
 */
function ftp_fput($ftp, $remote_file, $fp, $mode, $startpos = null): bool
{
}

/**
 * Downloads a file from the FTP server
 *
 * @param mixed $ftp
 * @param mixed $local_file
 * @param mixed $remote_file
 * @param mixed $mode
 * @param mixed|null $resume_pos
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-get.php
 */
function ftp_get($ftp, $local_file, $remote_file, $mode, $resume_pos = null): bool
{
}

/**
 * Retrieves various runtime behaviours of the current FTP stream
 *
 * @param mixed $ftp
 * @param mixed $option
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-get-option.php
 */
function ftp_get_option($ftp, $option)
{
}

/**
 * Logs in to an FTP connection
 *
 * @param mixed $ftp
 * @param mixed $username
 * @param mixed $password
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-login.php
 */
function ftp_login($ftp, $username, $password): bool
{
}

/**
 * Returns the last modified time of the given file
 *
 * @param mixed $ftp
 * @param mixed $filename
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-mdtm.php
 */
function ftp_mdtm($ftp, $filename): int
{
}

/**
 * Creates a directory
 *
 * @param mixed $ftp
 * @param mixed $directory
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-mkdir.php
 */
function ftp_mkdir($ftp, $directory): string
{
}

/**
 * Returns a list of files in the given directory
 *
 * @param mixed $ftp
 * @param mixed $directory
 *
 * @return array
 *
 * @since PHP 7 >= 7.2.0
 *
 * @link http://www.php.net/manual/en/function.ftp-mlsd.php
 */
function ftp_mlsd($ftp, $directory): array
{
}

/**
 * Continues retrieving/sending a file (non-blocking)
 *
 * @param mixed $ftp
 *
 * @return int
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-nb-continue.php
 */
function ftp_nb_continue($ftp): int
{
}

/**
 * Retrieves a file from the FTP server and writes it to an open file (non-blocking)
 *
 * @param mixed $ftp
 * @param mixed $fp
 * @param mixed $remote_file
 * @param mixed $mode
 * @param mixed|null $resumepos
 *
 * @return int
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-nb-fget.php
 */
function ftp_nb_fget($ftp, $fp, $remote_file, $mode, $resumepos = null): int
{
}

/**
 * Stores a file from an open file to the FTP server (non-blocking)
 *
 * @param mixed $ftp
 * @param mixed $remote_file
 * @param mixed $fp
 * @param mixed $mode
 * @param mixed|null $startpos
 *
 * @return int
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-nb-fput.php
 */
function ftp_nb_fput($ftp, $remote_file, $fp, $mode, $startpos = null): int
{
}

/**
 * Retrieves a file from the FTP server and writes it to a local file (non-blocking)
 *
 * @param mixed $ftp
 * @param mixed $local_file
 * @param mixed $remote_file
 * @param mixed $mode
 * @param mixed|null $resume_pos
 *
 * @return int
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-nb-get.php
 */
function ftp_nb_get($ftp, $local_file, $remote_file, $mode, $resume_pos = null): int
{
}

/**
 * Stores a file on the FTP server (non-blocking)
 *
 * @param mixed $ftp
 * @param mixed $remote_file
 * @param mixed $local_file
 * @param mixed $mode
 * @param mixed|null $startpos
 *
 * @return int
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-nb-put.php
 */
function ftp_nb_put($ftp, $remote_file, $local_file, $mode, $startpos = null): int
{
}

/**
 * Returns a list of files in the given directory
 *
 * @param mixed $ftp
 * @param mixed $directory
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-nlist.php
 */
function ftp_nlist($ftp, $directory): array
{
}

/**
 * Turns passive mode on or off
 *
 * @param mixed $ftp
 * @param mixed $pasv
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-pasv.php
 */
function ftp_pasv($ftp, $pasv): bool
{
}

/**
 * Uploads a file to the FTP server
 *
 * @param mixed $ftp
 * @param mixed $remote_file
 * @param mixed $local_file
 * @param mixed $mode
 * @param mixed|null $startpos
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-put.php
 */
function ftp_put($ftp, $remote_file, $local_file, $mode, $startpos = null): bool
{
}

/**
 * Returns the current directory name
 *
 * @param mixed $ftp
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-pwd.php
 */
function ftp_pwd($ftp): string
{
}

/**
 * Alias of <code>ftp_close</code>
 *
 * @param mixed $ftp
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-quit.php
 */
function ftp_quit($ftp)
{
}

/**
 * Sends an arbitrary command to an FTP server
 *
 * @param mixed $ftp
 * @param mixed $command
 *
 * @return array
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-raw.php
 */
function ftp_raw($ftp, $command): array
{
}

/**
 * Returns a detailed list of files in the given directory
 *
 * @param mixed $ftp
 * @param mixed $directory
 * @param mixed|null $recursive
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-rawlist.php
 */
function ftp_rawlist($ftp, $directory, $recursive = null): array
{
}

/**
 * Renames a file or a directory on the FTP server
 *
 * @param mixed $ftp
 * @param mixed $src
 * @param mixed $dest
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-rename.php
 */
function ftp_rename($ftp, $src, $dest): bool
{
}

/**
 * Removes a directory
 *
 * @param mixed $ftp
 * @param mixed $directory
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-rmdir.php
 */
function ftp_rmdir($ftp, $directory): bool
{
}

/**
 * Set miscellaneous runtime FTP options
 *
 * @param mixed $ftp
 * @param mixed $option
 * @param mixed $value
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-set-option.php
 */
function ftp_set_option($ftp, $option, $value): bool
{
}

/**
 * Sends a SITE command to the server
 *
 * @param mixed $ftp
 * @param mixed $cmd
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-site.php
 */
function ftp_site($ftp, $cmd): bool
{
}

/**
 * Returns the size of the given file
 *
 * @param mixed $ftp
 * @param mixed $filename
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-size.php
 */
function ftp_size($ftp, $filename): int
{
}

/**
 * Opens a Secure SSL-FTP connection
 *
 * @param mixed $host
 * @param mixed|null $port
 * @param mixed|null $timeout
 *
 * @return resource
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-ssl-connect.php
 */
function ftp_ssl_connect($host, $port = null, $timeout = null)
{
}

/**
 * Returns the system type identifier of the remote FTP server
 *
 * @param mixed $ftp
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-systype.php
 */
function ftp_systype($ftp): string
{
}
