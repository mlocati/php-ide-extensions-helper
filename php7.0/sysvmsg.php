<?php
// Start of extension: sysvmsg
// - parsed on POSIX with PHP 7.0.28 (extension version 7.0.28)

/**
 * @var int
 */
const MSG_EAGAIN = 11;

/**
 * @var int
 */
const MSG_ENOMSG = 42;

/**
 * @var int
 */
const MSG_EXCEPT = 4;

/**
 * @var int
 */
const MSG_IPC_NOWAIT = 1;

/**
 * @var int
 */
const MSG_NOERROR = 2;

/**
 * Create or attach to a message queue
 *
 * @param mixed $key
 * @param mixed|null $perms
 *
 * @return resource
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.msg-get-queue.php
 */
function msg_get_queue($key, $perms = null)
{
}

/**
 * Check whether a message queue exists
 *
 * @param mixed $key
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.msg-queue-exists.php
 */
function msg_queue_exists($key): bool
{
}

/**
 * Receive a message from a message queue
 *
 * @param mixed $queue
 * @param mixed $desiredmsgtype
 * @param mixed $msgtype
 * @param mixed $maxsize
 * @param mixed $message
 * @param mixed|null $unserialize
 * @param mixed|null $flags
 * @param mixed|null $errorcode
 *
 * @return bool
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.msg-receive.php
 */
function msg_receive($queue, $desiredmsgtype, &$msgtype, $maxsize, &$message, $unserialize = null, $flags = null, &$errorcode = null): bool
{
}

/**
 * Destroy a message queue
 *
 * @param mixed $queue
 *
 * @return bool
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.msg-remove-queue.php
 */
function msg_remove_queue($queue): bool
{
}

/**
 * Send a message to a message queue
 *
 * @param mixed $queue
 * @param mixed $msgtype
 * @param mixed $message
 * @param mixed|null $serialize
 * @param mixed|null $blocking
 * @param mixed|null $errorcode
 *
 * @return bool
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.msg-send.php
 */
function msg_send($queue, $msgtype, $message, $serialize = null, $blocking = null, &$errorcode = null): bool
{
}

/**
 * Set information in the message queue data structure
 *
 * @param mixed $queue
 * @param mixed $data
 *
 * @return bool
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.msg-set-queue.php
 */
function msg_set_queue($queue, $data): bool
{
}

/**
 * Returns information from the message queue data structure
 *
 * @param mixed $queue
 *
 * @return array
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.msg-stat-queue.php
 */
function msg_stat_queue($queue): array
{
}