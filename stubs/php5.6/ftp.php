<?php
// Start of extension: ftp
// - parsed on POSIX with PHP 5.6.34
// - parsed on Windows with PHP 5.6.34

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
 * When disabled, PHP will ignore the IP address returned by the FTP server in response to the PASV command and instead use the IP address that was supplied in the ftp_connect().
 * <code>value</code> must be a boolean.
 *
 * @link http://www.php.net/manual/en/function.ftp-set-option.php
 *
 * @var int
 */
const FTP_USEPASVADDRESS = 2;

/**
 * Allocates space for a file to be uploaded
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param int $filesize The number of bytes to allocate.
 * @param string $result A textual representation of the servers response will be returned by
 * reference in <code>result</code> if a variable is provided.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-alloc.php
 */
function ftp_alloc($ftp_stream, $filesize, &$result = null)
{
}

/**
 * Changes to the parent directory
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-cdup.php
 */
function ftp_cdup($ftp_stream)
{
}

/**
 * Changes the current directory on a FTP server
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param string $directory The target directory.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 * If changing directory fails, PHP will also throw a warning.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-chdir.php
 */
function ftp_chdir($ftp_stream, $directory)
{
}

/**
 * Set permissions on a file via FTP
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param int $mode The new permissions, given as an <code>octal</code> value.
 * @param string $filename The remote file.
 *
 * @return int Returns the new file permissions on success or <code>FALSE</code> on error.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-chmod.php
 */
function ftp_chmod($ftp_stream, $mode, $filename)
{
}

/**
 * Closes an FTP connection
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-close.php
 */
function ftp_close($ftp_stream)
{
}

/**
 * Opens an FTP connection
 *
 * @param string $host The FTP server address. This parameter shouldn't have any trailing
 * slashes and shouldn't be prefixed with <code>ftp://</code>.
 * @param int|null $port This parameter specifies an alternate port to connect to. If it is
 * omitted or set to zero, then the default FTP port, 21, will be used.
 * @param int|null $timeout This parameter specifies the timeout for all subsequent network operations.
 * If omitted, the default value is 90 seconds. The timeout can be changed and
 * queried at any time with <code>ftp_set_option</code> and
 * <code>ftp_get_option</code>.
 *
 * @return resource Returns a FTP stream on success or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-connect.php
 */
function ftp_connect($host, $port = 21, $timeout = 90)
{
}

/**
 * Deletes a file on the FTP server
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param string $path The file to delete.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-delete.php
 */
function ftp_delete($ftp_stream, $path)
{
}

/**
 * Requests execution of a command on the FTP server
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param string $command The command to execute.
 *
 * @return bool Returns <code>TRUE</code> if the command was successful (server sent response code:
 * <code>200</code>); otherwise returns <code>FALSE</code>.
 *
 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-exec.php
 */
function ftp_exec($ftp_stream, $command)
{
}

/**
 * Downloads a file from the FTP server and saves to an open file
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param resource $handle An open file pointer in which we store the data.
 * @param string $remote_file The remote file path.
 * @param int|null $mode The transfer mode. Must be either <code>FTP_ASCII</code> or
 * <code>FTP_BINARY</code>.
 * @param int|null $resumepos The position in the remote file to start downloading from.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-fget.php
 */
function ftp_fget($ftp_stream, $handle, $remote_file, $mode = FTP_IMAGE, $resumepos = 0)
{
}

/**
 * Uploads from an open file to the FTP server
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param string $remote_file The remote file path.
 * @param resource $handle An open file pointer on the local file. Reading stops at end of file.
 * @param int|null $mode The transfer mode. Must be either <code>FTP_ASCII</code> or
 * <code>FTP_BINARY</code>.
 * @param int|null $startpos The position in the remote file to start uploading to.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-fput.php
 */
function ftp_fput($ftp_stream, $remote_file, $handle, $mode = FTP_IMAGE, $startpos = 0)
{
}

/**
 * Downloads a file from the FTP server
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param string $local_file The local file path (will be overwritten if the file already exists).
 * @param string $remote_file The remote file path.
 * @param int|null $mode The transfer mode. Must be either <code>FTP_ASCII</code> or
 * <code>FTP_BINARY</code>.
 * @param int|null $resumepos The position in the remote file to start downloading from.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-get.php
 */
function ftp_get($ftp_stream, $local_file, $remote_file, $mode = FTP_IMAGE, $resumepos = 0)
{
}

/**
 * Retrieves various runtime behaviours of the current FTP stream
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param int $option Currently, the following options are supported:
 * <table>
 * <title>Supported runtime FTP options</title>
 * <tbody>
 * <tr>
 * <td><code>FTP_TIMEOUT_SEC</code></td><td>
 * Returns the current timeout used for network related operations.
 * </td>
 * </tr>
 * <tr>
 * <td><code>FTP_AUTOSEEK</code></td><td>
 * Returns <code>TRUE</code> if this option is on, <code>FALSE</code> otherwise.
 * </td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @return mixed Returns the value on success or <code>FALSE</code> if the given
 * <code>option</code> is not supported. In the latter case, a
 * warning message is also thrown.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-get-option.php
 */
function ftp_get_option($ftp_stream, $option)
{
}

/**
 * Logs in to an FTP connection
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param string $username The username (<code>USER</code>).
 * @param string $password The password (<code>PASS</code>).
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 * If login fails, PHP will also throw a warning.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-login.php
 */
function ftp_login($ftp_stream, $username, $password)
{
}

/**
 * Returns the last modified time of the given file
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param string $remote_file The file from which to extract the last modification time.
 *
 * @return int Returns the last modified time as a Unix timestamp on success, or -1 on
 * error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-mdtm.php
 */
function ftp_mdtm($ftp_stream, $remote_file)
{
}

/**
 * Creates a directory
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param string $directory The name of the directory that will be created.
 *
 * @return string Returns the newly created directory name on success or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-mkdir.php
 */
function ftp_mkdir($ftp_stream, $directory)
{
}

/**
 * Continues retrieving/sending a file (non-blocking)
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 *
 * @return int Returns <code>FTP_FAILED</code> or <code>FTP_FINISHED</code>
 * or <code>FTP_MOREDATA</code>.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-nb-continue.php
 */
function ftp_nb_continue($ftp_stream)
{
}

/**
 * Retrieves a file from the FTP server and writes it to an open file (non-blocking)
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param resource $handle An open file pointer in which we store the data.
 * @param string $remote_file The remote file path.
 * @param int|null $mode The transfer mode. Must be either <code>FTP_ASCII</code> or
 * <code>FTP_BINARY</code>.
 * @param int|null $resumepos The position in the remote file to start downloading from.
 *
 * @return int Returns <code>FTP_FAILED</code> or <code>FTP_FINISHED</code>
 * or <code>FTP_MOREDATA</code>.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-nb-fget.php
 */
function ftp_nb_fget($ftp_stream, $handle, $remote_file, $mode = FTP_IMAGE, $resumepos = 0)
{
}

/**
 * Stores a file from an open file to the FTP server (non-blocking)
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param string $remote_file The remote file path.
 * @param resource $handle An open file pointer on the local file. Reading stops at end of file.
 * @param int|null $mode The transfer mode. Must be either <code>FTP_ASCII</code> or
 * <code>FTP_BINARY</code>.
 * @param int|null $startpos The position in the remote file to start uploading to.
 *
 * @return int Returns <code>FTP_FAILED</code> or <code>FTP_FINISHED</code>
 * or <code>FTP_MOREDATA</code>.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-nb-fput.php
 */
function ftp_nb_fput($ftp_stream, $remote_file, $handle, $mode = FTP_IMAGE, $startpos = 0)
{
}

/**
 * Retrieves a file from the FTP server and writes it to a local file (non-blocking)
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param string $local_file The local file path (will be overwritten if the file already exists).
 * @param string $remote_file The remote file path.
 * @param int|null $mode The transfer mode. Must be either <code>FTP_ASCII</code> or
 * <code>FTP_BINARY</code>.
 * @param int|null $resumepos The position in the remote file to start downloading from.
 *
 * @return int Returns <code>FTP_FAILED</code> or <code>FTP_FINISHED</code>
 * or <code>FTP_MOREDATA</code>.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-nb-get.php
 */
function ftp_nb_get($ftp_stream, $local_file, $remote_file, $mode = FTP_IMAGE, $resumepos = 0)
{
}

/**
 * Stores a file on the FTP server (non-blocking)
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param string $remote_file The remote file path.
 * @param string $local_file The local file path.
 * @param int|null $mode The transfer mode. Must be either <code>FTP_ASCII</code> or
 * <code>FTP_BINARY</code>.
 * @param int|null $startpos The position in the remote file to start uploading to.
 *
 * @return int Returns <code>FTP_FAILED</code> or <code>FTP_FINISHED</code>
 * or <code>FTP_MOREDATA</code>.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-nb-put.php
 */
function ftp_nb_put($ftp_stream, $remote_file, $local_file, $mode = FTP_IMAGE, $startpos = 0)
{
}

/**
 * Returns a list of files in the given directory
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param string $directory The directory to be listed. This parameter can also include arguments, eg.
 * ftp_nlist($conn_id, "-la /your/dir");
 * Note that this parameter isn't escaped so there may be some issues with
 * filenames containing spaces and other characters.
 *
 * @return array Returns an array of filenames from the specified directory on success or
 * <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-nlist.php
 */
function ftp_nlist($ftp_stream, $directory)
{
}

/**
 * Turns passive mode on or off
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param bool $pasv If <code>TRUE</code>, the passive mode is turned on, else it's turned off.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-pasv.php
 */
function ftp_pasv($ftp_stream, $pasv)
{
}

/**
 * Uploads a file to the FTP server
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param string $remote_file The remote file path.
 * @param string $local_file The local file path.
 * @param int|null $mode The transfer mode. Must be either <code>FTP_ASCII</code> or
 * <code>FTP_BINARY</code>.
 * @param int|null $startpos The position in the remote file to start uploading to.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-put.php
 */
function ftp_put($ftp_stream, $remote_file, $local_file, $mode = FTP_IMAGE, $startpos = 0)
{
}

/**
 * Returns the current directory name
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 *
 * @return string Returns the current directory name or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-pwd.php
 */
function ftp_pwd($ftp_stream)
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
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param string $command The command to execute.
 *
 * @return array Returns the server's response as an array of strings.
 * No parsing is performed on the response string, nor does
 * <code>ftp_raw</code> determine if the command succeeded.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-raw.php
 */
function ftp_raw($ftp_stream, $command)
{
}

/**
 * Returns a detailed list of files in the given directory
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param string $directory The directory path. May include arguments for the <command>LIST</command>
 * command.
 * @param bool|null $recursive If set to <code>TRUE</code>, the issued command will be <command>LIST -R</command>.
 *
 * @return array Returns an array where each element corresponds to one line of text. Returns
 * <code>FALSE</code> when passed <code>directory</code> is invalid.
 * The output is not parsed in any way. The system type identifier returned by
 * <code>ftp_systype</code> can be used to determine how the results
 * should be interpreted.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-rawlist.php
 */
function ftp_rawlist($ftp_stream, $directory, $recursive = false)
{
}

/**
 * Renames a file or a directory on the FTP server
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param string $oldname The old file/directory name.
 * @param string $newname The new name.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure. Upon failure (such as attempting to rename a non-existent
 * file), an <code>E_WARNING</code> error will be emitted.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-rename.php
 */
function ftp_rename($ftp_stream, $oldname, $newname)
{
}

/**
 * Removes a directory
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param string $directory The directory to delete. This must be either an absolute or relative
 * path to an empty directory.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-rmdir.php
 */
function ftp_rmdir($ftp_stream, $directory)
{
}

/**
 * Set miscellaneous runtime FTP options
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param int $option Currently, the following options are supported:
 * <table>
 * <title>Supported runtime FTP options</title>
 * <tbody>
 * <tr>
 * <td><code>FTP_TIMEOUT_SEC</code></td><td>
 * Changes the timeout in seconds used for all network related
 * functions. <code>value</code> must be an integer that
 * is greater than 0. The default timeout is 90 seconds.
 * </td>
 * </tr>
 * <tr>
 * <td><code>FTP_AUTOSEEK</code></td><td>
 * When enabled, GET or PUT requests with a
 * <code>resumepos</code> or <code>startpos</code>
 * parameter will first seek to the requested position within the file.
 * This is enabled by default.
 * </td>
 * </tr>
 * <tr>
 * <td><code>FTP_USEPASVADDRESS</code></td><td>
 * When disabled, PHP will ignore the IP address returned by the FTP server in response to the PASV command and instead use the IP address that was supplied in the ftp_connect().
 * <code>value</code> must be a boolean.
 * </td>
 * </tr>
 * </tbody>
 * </table>
 * @param mixed $value This parameter depends on which <code>option</code> is chosen
 * to be altered.
 *
 * @return bool Returns <code>TRUE</code> if the option could be set; <code>FALSE</code> if not. A warning
 * message will be thrown if the <code>option</code> is not
 * supported or the passed <code>value</code> doesn't match the
 * expected value for the given <code>option</code>.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-set-option.php
 */
function ftp_set_option($ftp_stream, $option, $value)
{
}

/**
 * Sends a SITE command to the server
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param string $command The SITE command. Note that this parameter isn't escaped so there may
 * be some issues with filenames containing spaces and other characters.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-site.php
 */
function ftp_site($ftp_stream, $command)
{
}

/**
 * Returns the size of the given file
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 * @param string $remote_file The remote file.
 *
 * @return int Returns the file size on success, or -1 on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-size.php
 */
function ftp_size($ftp_stream, $remote_file)
{
}

/**
 * Opens a Secure SSL-FTP connection
 *
 * WARNING: this may be available on POSIX but not on Windows
 *
 * @param string $host The FTP server address. This parameter shouldn't have any trailing
 * slashes and shouldn't be prefixed with <code>ftp://</code>.
 * @param int|null $port This parameter specifies an alternate port to connect to. If it is
 * omitted or set to zero, then the default FTP port, 21, will be used.
 * @param int|null $timeout This parameter specifies the timeout for all subsequent network operations.
 * If omitted, the default value is 90 seconds. The timeout can be changed and
 * queried at any time with <code>ftp_set_option</code> and
 * <code>ftp_get_option</code>.
 *
 * @return resource Returns a SSL-FTP stream on success or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-ssl-connect.php
 */
function ftp_ssl_connect($host, $port = 21, $timeout = 90)
{
}

/**
 * Returns the system type identifier of the remote FTP server
 *
 * @param resource $ftp_stream The link identifier of the FTP connection.
 *
 * @return string Returns the remote system type, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ftp-systype.php
 */
function ftp_systype($ftp_stream)
{
}
