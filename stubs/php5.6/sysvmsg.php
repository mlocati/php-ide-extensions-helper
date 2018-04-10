<?php
// Start of extension: sysvmsg
// - parsed on POSIX with PHP 5.6.34

/**
 * @var int
 */
const MSG_EAGAIN = 11;

/**
 * @var int
 */
const MSG_ENOMSG = 42;

/**
 * Using this flag in combination with a
 * <code>desiredmsgtype</code> greater than 0 will cause the
 * function to receive the first message that is not equal to
 * <code>desiredmsgtype</code>.
 *
 * @link http://www.php.net/manual/en/function.msg-receive.php
 *
 * @var int
 */
const MSG_EXCEPT = 4;

/**
 * If there are no messages of the
 * <code>desiredmsgtype</code>, return immediately and do not
 * wait. The function will fail and return an integer value
 * corresponding to <code>MSG_ENOMSG</code>.
 *
 * @link http://www.php.net/manual/en/function.msg-receive.php
 *
 * @var int
 */
const MSG_IPC_NOWAIT = 1;

/**
 * If the message is longer than <code>maxsize</code>,
 * setting this flag will truncate the message to
 * <code>maxsize</code> and will not signal an error.
 *
 * @link http://www.php.net/manual/en/function.msg-receive.php
 *
 * @var int
 */
const MSG_NOERROR = 2;

/**
 * Create or attach to a message queue
 *
 * @param int $key Message queue numeric ID
 * @param int|null $perms Queue permissions. Default to 0666. If the message queue already
 * exists, the <code>perms</code> will be ignored.
 *
 * @return resource Returns a resource handle that can be used to access the System V message queue.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.msg-get-queue.php
 */
function msg_get_queue($key, $perms = 0666)
{
}

/**
 * Check whether a message queue exists
 *
 * @param int $key Queue key.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.msg-queue-exists.php
 */
function msg_queue_exists($key)
{
}

/**
 * Receive a message from a message queue
 *
 * @param resource $queue
 * @param int $desiredmsgtype If <code>desiredmsgtype</code> is 0, the message from the front
 * of the queue is returned. If <code>desiredmsgtype</code> is
 * greater than 0, then the first message of that type is returned.
 * If <code>desiredmsgtype</code> is less than 0, the first
 * message on the queue with the lowest type less than or equal to the
 * absolute value of <code>desiredmsgtype</code> will be read.
 * If no messages match the criteria, your script will wait until a suitable
 * message arrives on the queue. You can prevent the script from blocking
 * by specifying <code>MSG_IPC_NOWAIT</code> in the
 * <code>flags</code> parameter.
 * @param int $msgtype The type of the message that was received will be stored in this
 * parameter.
 * @param int $maxsize The maximum size of message to be accepted is specified by the
 * <code>maxsize</code>; if the message in the queue is larger
 * than this size the function will fail (unless you set
 * <code>flags</code> as described below).
 * @param mixed $message The received message will be stored in <code>message</code>,
 * unless there were errors receiving the message.
 * @param bool|null $unserialize If set to
 * <code>TRUE</code>, the message is treated as though it was serialized using the
 * same mechanism as the session module. The message will be unserialized
 * and then returned to your script. This allows you to easily receive
 * arrays or complex object structures from other PHP scripts, or if you
 * are using the WDDX serializer, from any WDDX compatible source.
 * @param int|null $flags The optional <code>flags</code> allows you to pass flags to the
 * low-level msgrcv system call. It defaults to 0, but you may specify one
 * or more of the following values (by adding or ORing them together).
 * <table>
 * <title>Flag values for msg_receive</title>
 * <tbody>
 * <tr>
 * <td><code>MSG_IPC_NOWAIT</code></td><td>If there are no messages of the
 * <code>desiredmsgtype</code>, return immediately and do not
 * wait. The function will fail and return an integer value
 * corresponding to <code>MSG_ENOMSG</code>.
 * </td>
 * </tr>
 * <tr>
 * <td><code>MSG_EXCEPT</code></td><td>Using this flag in combination with a
 * <code>desiredmsgtype</code> greater than 0 will cause the
 * function to receive the first message that is not equal to
 * <code>desiredmsgtype</code>.</td>
 * </tr>
 * <tr>
 * <td><code>MSG_NOERROR</code></td><td>
 * If the message is longer than <code>maxsize</code>,
 * setting this flag will truncate the message to
 * <code>maxsize</code> and will not signal an error.
 * </td>
 * </tr>
 * </tbody>
 * </table>
 * @param int $errorcode If the function fails, the optional <code>errorcode</code>
 * will be set to the value of the system errno variable.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 * Upon successful completion the message queue data structure is updated as
 * follows: <code>msg_lrpid</code> is set to the process-ID of the
 * calling process, <code>msg_qnum</code> is decremented by 1 and
 * <code>msg_rtime</code> is set to the current time.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.msg-receive.php
 */
function msg_receive($queue, $desiredmsgtype, &$msgtype, $maxsize, &$message, $unserialize = true, $flags = 0, &$errorcode = null)
{
}

/**
 * Destroy a message queue
 *
 * @param resource $queue Message queue resource handle
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.msg-remove-queue.php
 */
function msg_remove_queue($queue)
{
}

/**
 * Send a message to a message queue
 *
 * @param resource $queue
 * @param int $msgtype
 * @param mixed $message
 * @param bool|null $serialize The optional <code>serialize</code> controls how the
 * <code>message</code> is sent. <code>serialize</code>
 * defaults to <code>TRUE</code> which means that the <code>message</code> is
 * serialized using the same mechanism as the session module before being
 * sent to the queue. This allows complex arrays and objects to be sent to
 * other PHP scripts, or if you are using the WDDX serializer, to any WDDX
 * compatible client.
 * @param bool|null $blocking If the message is too large to fit in the queue, your script will wait
 * until another process reads messages from the queue and frees enough
 * space for your message to be sent.
 * This is called blocking; you can prevent blocking by setting the
 * optional <code>blocking</code> parameter to <code>FALSE</code>, in which
 * case <code>msg_send</code> will immediately return <code>FALSE</code> if the
 * message is too big for the queue, and set the optional
 * <code>errorcode</code> to <code>MSG_EAGAIN</code>,
 * indicating that you should try to send your message again a little
 * later on.
 * @param int $errorcode
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 * Upon successful completion the message queue data structure is updated as
 * follows: <code>msg_lspid</code> is set to the process-ID of the
 * calling process, <code>msg_qnum</code> is incremented by 1 and
 * <code>msg_stime</code> is set to the current time.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.msg-send.php
 */
function msg_send($queue, $msgtype, $message, $serialize = true, $blocking = true, &$errorcode = null)
{
}

/**
 * Set information in the message queue data structure
 *
 * @param resource $queue Message queue resource handle
 * @param array $data You specify the values you require by setting the value of the keys
 * that you require in the <code>data</code> array.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.msg-set-queue.php
 */
function msg_set_queue($queue, array $data)
{
}

/**
 * Returns information from the message queue data structure
 *
 * @param resource $queue Message queue resource handle
 *
 * @return array The return value is an array whose keys and values have the following
 * meanings:
 * <table>
 * <title>Array structure for msg_stat_queue</title>
 * <tbody>
 * <tr>
 * <td><code>msg_perm.uid</code></td><td>
 * The uid of the owner of the queue.
 * </td>
 * </tr>
 * <tr>
 * <td><code>msg_perm.gid</code></td><td>
 * The gid of the owner of the queue.
 * </td>
 * </tr>
 * <tr>
 * <td><code>msg_perm.mode</code></td><td>
 * The file access mode of the queue.
 * </td>
 * </tr>
 * <tr>
 * <td><code>msg_stime</code></td><td>
 * The time that the last message was sent to the queue.
 * </td>
 * </tr>
 * <tr>
 * <td><code>msg_rtime</code></td><td>
 * The time that the last message was received from the queue.
 * </td>
 * </tr>
 * <tr>
 * <td><code>msg_ctime</code></td><td>
 * The time that the queue was last changed.
 * </td>
 * </tr>
 * <tr>
 * <td><code>msg_qnum</code></td><td>
 * The number of messages waiting to be read from the queue.
 * </td>
 * </tr>
 * <tr>
 * <td><code>msg_qbytes</code></td><td>
 * The maximum number of bytes allowed in one message queue. On
 * Linux, this value may be read and modified via
 * <code>/proc/sys/kernel/msgmnb</code>.
 * </td>
 * </tr>
 * <tr>
 * <td><code>msg_lspid</code></td><td>
 * The pid of the process that sent the last message to the queue.
 * </td>
 * </tr>
 * <tr>
 * <td><code>msg_lrpid</code></td><td>
 * The pid of the process that received the last message from the queue.
 * </td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.msg-stat-queue.php
 */
function msg_stat_queue($queue)
{
}
