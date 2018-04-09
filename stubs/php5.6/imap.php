<?php
// Start of extension: imap
// - parsed on POSIX with PHP 5.6.34

/**
 * silently expunge the mailbox before closing when
 * calling <code>imap_close</code>
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.cl-expunge
 *
 * @var int
 */
const CL_EXPUNGE = 32768;

/**
 * Delete the messages from the current mailbox after copying
 * with <code>imap_mail_copy</code>
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.cp-move
 *
 * @var int
 */
const CP_MOVE = 2;

/**
 * the sequence numbers contain UIDS
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.cp-uid
 *
 * @var int
 */
const CP_UID = 1;

/**
 * Body encoding: 7 bit SMTP semantic data
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.enc7bit
 *
 * @var int
 */
const ENC7BIT = 0;

/**
 * Body encoding: 8 bit SMTP semantic data
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.enc8bit
 *
 * @var int
 */
const ENC8BIT = 1;

/**
 * Body encoding: base-64 encoded data
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.encbase64
 *
 * @var int
 */
const ENCBASE64 = 3;

/**
 * Body encoding: 8 bit binary data
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.encbinary
 *
 * @var int
 */
const ENCBINARY = 2;

/**
 * Body encoding: unknown
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.encother
 *
 * @var int
 */
const ENCOTHER = 5;

/**
 * Body encoding: human-readable 8-as-7 bit data
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.encquotedprintable
 *
 * @var int
 */
const ENCQUOTEDPRINTABLE = 4;

/**
 * The return string is in internal format, will not canonicalize to CRLF.
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.ft-internal
 *
 * @var int
 */
const FT_INTERNAL = 8;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.ft-not
 *
 * @var int
 */
const FT_NOT = 4;

/**
 * Do not set the \Seen flag if not already set
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.ft-peek
 *
 * @var int
 */
const FT_PEEK = 2;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.ft-prefetchtext
 *
 * @var int
 */
const FT_PREFETCHTEXT = 32;

/**
 * The parameter is a UID
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.ft-uid
 *
 * @var int
 */
const FT_UID = 1;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.imap-closetimeout
 *
 * @var int
 */
const IMAP_CLOSETIMEOUT = 4;

/**
 * Garbage collector, clear message cache elements.
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.imap-gc-elt
 *
 * @var int
 */
const IMAP_GC_ELT = 1;

/**
 * Garbage collector, clear envelopes and bodies.
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.imap-gc-env
 *
 * @var int
 */
const IMAP_GC_ENV = 2;

/**
 * Garbage collector, clear texts.
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.imap-gc-texts
 *
 * @var int
 */
const IMAP_GC_TEXTS = 4;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.imap-opentimeout
 *
 * @var int
 */
const IMAP_OPENTIMEOUT = 1;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.imap-readtimeout
 *
 * @var int
 */
const IMAP_READTIMEOUT = 2;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.imap-writetimeout
 *
 * @var int
 */
const IMAP_WRITETIMEOUT = 3;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.latt-haschildren
 *
 * @var int
 */
const LATT_HASCHILDREN = 32;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.latt-hasnochildren
 *
 * @var int
 */
const LATT_HASNOCHILDREN = 64;

/**
 * This mailbox is marked. Only used by UW-IMAPD.
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.latt-marked
 *
 * @var int
 */
const LATT_MARKED = 4;

/**
 * This mailbox has no "children" (there are no
 * mailboxes below this one).
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.latt-noinferiors
 *
 * @var int
 */
const LATT_NOINFERIORS = 1;

/**
 * This is only a container, not a mailbox - you
 * cannot open it.
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.latt-noselect
 *
 * @var int
 */
const LATT_NOSELECT = 2;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.latt-referral
 *
 * @var int
 */
const LATT_REFERRAL = 16;

/**
 * This mailbox is not marked. Only used by
 * UW-IMAPD.
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.latt-unmarked
 *
 * @var int
 */
const LATT_UNMARKED = 8;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.nil
 *
 * @var int
 */
const NIL = 0;

/**
 * Don't use or update a <code>.newsrc</code> for news
 * (NNTP only)
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.op-anonymous
 *
 * @var int
 */
const OP_ANONYMOUS = 4;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.op-debug
 *
 * @var int
 */
const OP_DEBUG = 1;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.op-expunge
 *
 * @var int
 */
const OP_EXPUNGE = 128;

/**
 * For <code>IMAP</code> and <code>NNTP</code>
 * names, open a connection but don't open a mailbox.
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.op-halfopen
 *
 * @var int
 */
const OP_HALFOPEN = 64;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.op-prototype
 *
 * @var int
 */
const OP_PROTOTYPE = 32;

/**
 * Open mailbox read-only
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.op-readonly
 *
 * @var int
 */
const OP_READONLY = 2;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.op-secure
 *
 * @var int
 */
const OP_SECURE = 256;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.op-shortcache
 *
 * @var int
 */
const OP_SHORTCACHE = 8;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.op-silent
 *
 * @var int
 */
const OP_SILENT = 16;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.sa-all
 *
 * @var int
 */
const SA_ALL = 31;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.sa-messages
 *
 * @var int
 */
const SA_MESSAGES = 1;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.sa-recent
 *
 * @var int
 */
const SA_RECENT = 2;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.sa-uidnext
 *
 * @var int
 */
const SA_UIDNEXT = 8;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.sa-uidvalidity
 *
 * @var int
 */
const SA_UIDVALIDITY = 16;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.sa-unseen
 *
 * @var int
 */
const SA_UNSEEN = 4;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.se-free
 *
 * @var int
 */
const SE_FREE = 2;

/**
 * Don't prefetch searched messages
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.se-noprefetch
 *
 * @var int
 */
const SE_NOPREFETCH = 4;

/**
 * Return UIDs instead of sequence numbers
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.se-uid
 *
 * @var int
 */
const SE_UID = 1;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.so-free
 *
 * @var int
 */
const SO_FREE = 8;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.so-noserver
 *
 * @var int
 */
const SO_NOSERVER = 16;

/**
 * Sort criteria for <code>imap_sort</code>:
 * arrival date
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.sortarrival
 *
 * @var int
 */
const SORTARRIVAL = 1;

/**
 * Sort criteria for <code>imap_sort</code>:
 * mailbox in first cc address
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.sortcc
 *
 * @var int
 */
const SORTCC = 5;

/**
 * Sort criteria for <code>imap_sort</code>:
 * message Date
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.sortdate
 *
 * @var int
 */
const SORTDATE = 0;

/**
 * Sort criteria for <code>imap_sort</code>:
 * mailbox in first From address
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.sortfrom
 *
 * @var int
 */
const SORTFROM = 2;

/**
 * Sort criteria for <code>imap_sort</code>:
 * size of message in octets
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.sortsize
 *
 * @var int
 */
const SORTSIZE = 6;

/**
 * Sort criteria for <code>imap_sort</code>:
 * message subject
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.sortsubject
 *
 * @var int
 */
const SORTSUBJECT = 3;

/**
 * Sort criteria for <code>imap_sort</code>:
 * mailbox in first To address
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.sortto
 *
 * @var int
 */
const SORTTO = 4;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.st-set
 *
 * @var int
 */
const ST_SET = 4;

/**
 * @link http://www.php.net/manual/en/imap.constants.php#constant.st-silent
 *
 * @var int
 */
const ST_SILENT = 2;

/**
 * The sequence argument contains UIDs instead of sequence numbers
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.st-uid
 *
 * @var int
 */
const ST_UID = 1;

/**
 * Primary body type: application data
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.typeapplication
 *
 * @var int
 */
const TYPEAPPLICATION = 3;

/**
 * Primary body type: audio
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.typeaudio
 *
 * @var int
 */
const TYPEAUDIO = 4;

/**
 * Primary body type: static image
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.typeimage
 *
 * @var int
 */
const TYPEIMAGE = 5;

/**
 * Primary body type: encapsulated message
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.typemessage
 *
 * @var int
 */
const TYPEMESSAGE = 2;

/**
 * Primary body type: model
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.typemodel
 *
 * @var int
 */
const TYPEMODEL = 7;

/**
 * Primary body type: multiple part
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.typemultipart
 *
 * @var int
 */
const TYPEMULTIPART = 1;

/**
 * Primary body type: unknown
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.typeother
 *
 * @var int
 */
const TYPEOTHER = 8;

/**
 * Primary body type: unformatted text
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.typetext
 *
 * @var int
 */
const TYPETEXT = 0;

/**
 * Primary body type: video
 *
 * @link http://www.php.net/manual/en/imap.constants.php#constant.typevideo
 *
 * @var int
 */
const TYPEVIDEO = 6;

/**
 * Convert an 8bit string to a quoted-printable string
 *
 * @param string $string The 8bit string to convert
 *
 * @return string Returns a quoted-printable string.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-8bit.php
 */
function imap_8bit($string)
{
}

/**
 * Returns all IMAP alert messages that have occurred
 *
 * @return array Returns an array of all of the IMAP alert messages generated or <code>FALSE</code> if
 * no alert messages are available.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-alerts.php
 */
function imap_alerts()
{
}

/**
 * Append a string message to a specified mailbox
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $mailbox The mailbox name, see <code>imap_open</code> for more
 * information
 * @param string $message The message to be append, as a string
 * @param string|null $options If provided, the <code>options</code> will also be written
 * to the <code>mailbox</code>
 * @param string|null $internal_date If this parameter is set, it will set the INTERNALDATE on the appended message. The parameter should be a date string that conforms to the rfc2060 specifications for a date_time value.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-append.php
 */
function imap_append($imap_stream, $mailbox, $message, $options = null, $internal_date = null)
{
}

/**
 * Decode BASE64 encoded text
 *
 * @param string $text The encoded text
 *
 * @return string Returns the decoded message as a string.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-base64.php
 */
function imap_base64($text)
{
}

/**
 * Convert an 8bit string to a base64 string
 *
 * @param string $string The 8bit string
 *
 * @return string Returns a base64 encoded string.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-binary.php
 */
function imap_binary($string)
{
}

/**
 * Read the message body
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param int $msg_number The message number
 * @param int|null $options The optional <code>options</code> are a bit mask
 * with one or more of the following:
 * <ul>
 * <code>FT_UID</code> - The <code>msg_number</code> is a UID
 * <code>FT_PEEK</code> - Do not set the \Seen flag if not already set
 * <code>FT_INTERNAL</code> - The return string is in internal format, will
 * not canonicalize to CRLF.
 * </ul>
 *
 * @return string Returns the body of the specified message, as a string.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-body.php
 */
function imap_body($imap_stream, $msg_number, $options = 0)
{
}

/**
 * Read the structure of a specified body section of a specific message
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param int $msg_number The message number
 * @param string $section The body section to read
 *
 * @return mixed Returns the information in an object, for a detailed description
 * of the object structure and properties see
 * <code>imap_fetchstructure</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-bodystruct.php
 */
function imap_bodystruct($imap_stream, $msg_number, $section)
{
}

/**
 * Check current mailbox
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 *
 * @return mixed Returns the information in an object with following properties:
 * <ul>
 * <code>Date</code> - current system time formatted according to RFC2822
 * <code>Driver</code> - protocol used to access this mailbox:
 * <code>POP3</code>, <code>IMAP</code>, <code>NNTP</code>
 * <code>Mailbox</code> - the mailbox name
 * <code>Nmsgs</code> - number of messages in the mailbox
 * <code>Recent</code> - number of recent messages in the mailbox
 * </ul>
 * Returns <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-check.php
 */
function imap_check($imap_stream)
{
}

/**
 * Clears flags on messages
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $sequence A sequence of message numbers. You can enumerate desired messages
 * with the <code>X,Y</code> syntax, or retrieve all messages
 * within an interval with the <code>X:Y</code> syntax
 * @param string $flag The flags which you can unset are "\\Seen", "\\Answered", "\\Flagged",
 * "\\Deleted", and "\\Draft" (as defined by RFC2060)
 * @param int|null $options <code>options</code> are a bit mask and may contain
 * the single option:
 * <ul>
 * <code>ST_UID</code> - The sequence argument contains UIDs
 * instead of sequence numbers
 * </ul>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-clearflag-full.php
 */
function imap_clearflag_full($imap_stream, $sequence, $flag, $options = 0)
{
}

/**
 * Close an IMAP stream
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param int|null $flag If set to <code>CL_EXPUNGE</code>, the function will silently
 * expunge the mailbox before closing, removing all messages marked for
 * deletion. You can achieve the same thing by using
 * <code>imap_expunge</code>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-close.php
 */
function imap_close($imap_stream, $flag = 0)
{
}

/**
 * Alias of <code>imap_createmailbox</code>
 *
 * @param mixed $stream_id
 * @param mixed $mailbox
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-create.php
 */
function imap_create($stream_id, $mailbox)
{
}

/**
 * Create a new mailbox
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $mailbox The mailbox name, see <code>imap_open</code> for more
 * information. Names containing international characters should be
 * encoded by <code>imap_utf7_encode</code>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-createmailbox.php
 */
function imap_createmailbox($imap_stream, $mailbox)
{
}

/**
 * Mark a message for deletion from current mailbox
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param int $msg_number The message number
 * @param int|null $options You can set the <code>FT_UID</code> which tells the function
 * to treat the <code>msg_number</code> argument as an
 * <code>UID</code>.
 *
 * @return bool Returns <code>TRUE</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-delete.php
 */
function imap_delete($imap_stream, $msg_number, $options = 0)
{
}

/**
 * Delete a mailbox
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $mailbox The mailbox name, see <code>imap_open</code> for more
 * information
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-deletemailbox.php
 */
function imap_deletemailbox($imap_stream, $mailbox)
{
}

/**
 * Returns all of the IMAP errors that have occurred
 *
 * @return array This function returns an array of all of the IMAP error messages
 * generated since the last <code>imap_errors</code> call,
 * or the beginning of the page. Returns <code>FALSE</code> if no error messages are
 * available.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-errors.php
 */
function imap_errors()
{
}

/**
 * Delete all messages marked for deletion
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 *
 * @return bool Returns <code>TRUE</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-expunge.php
 */
function imap_expunge($imap_stream)
{
}

/**
 * Read an overview of the information in the headers of the given message
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $sequence A message sequence description. You can enumerate desired messages
 * with the <code>X,Y</code> syntax, or retrieve all messages
 * within an interval with the <code>X:Y</code> syntax
 * @param int|null $options <code>sequence</code> will contain a sequence of message
 * indices or UIDs, if this parameter is set to
 * <code>FT_UID</code>.
 *
 * @return array Returns an array of objects describing one message header each.
 * The object will only define a property if it exists. The possible
 * properties are:
 * <ul>
 * <code>subject</code> - the messages subject
 * <code>from</code> - who sent it
 * <code>to</code> - recipient
 * <code>date</code> - when was it sent
 * <code>message_id</code> - Message-ID
 * <code>references</code> - is a reference to this message id
 * <code>in_reply_to</code> - is a reply to this message id
 * <code>size</code> - size in bytes
 * <code>uid</code> - UID the message has in the mailbox
 * <code>msgno</code> - message sequence number in the mailbox
 * <code>recent</code> - this message is flagged as recent
 * <code>flagged</code> - this message is flagged
 * <code>answered</code> - this message is flagged as answered
 * <code>deleted</code> - this message is flagged for deletion
 * <code>seen</code> - this message is flagged as already read
 * <code>draft</code> - this message is flagged as being a draft
 * <code>udate</code> - the UNIX timestamp of the arrival date
 * </ul>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-fetch-overview.php
 */
function imap_fetch_overview($imap_stream, $sequence, $options = 0)
{
}

/**
 * Fetch a particular section of the body of the message
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param int $msg_number The message number
 * @param string $section The part number. It is a string of integers delimited by period which
 * index into a body part list as per the IMAP4 specification
 * @param int|null $options A bitmask with one or more of the following:
 * <ul>
 * <code>FT_UID</code> - The <code>msg_number</code> is a UID
 * <code>FT_PEEK</code> - Do not set the \Seen flag if
 * not already set
 * <code>FT_INTERNAL</code> - The return string is in
 * internal format, will not canonicalize to CRLF.
 * </ul>
 *
 * @return string Returns a particular section of the body of the specified messages as a
 * text string.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-fetchbody.php
 */
function imap_fetchbody($imap_stream, $msg_number, $section, $options = 0)
{
}

/**
 * Returns header for a message
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param int $msg_number The message number
 * @param int|null $options The possible <code>options</code> are:
 * <ul>
 * <code>FT_UID</code> - The <code>msgno</code>
 * argument is a UID
 * <code>FT_INTERNAL</code> - The return string
 * is in "internal" format, without any attempt to
 * canonicalize to CRLF newlines
 * <code>FT_PREFETCHTEXT</code> - The RFC822.TEXT
 * should be pre-fetched at the same time. This avoids an
 * extra RTT on an <code>IMAP</code> connection if a full message text is
 * desired (e.g. in a "save to local file" operation)
 * </ul>
 *
 * @return string Returns the header of the specified message as a text string.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-fetchheader.php
 */
function imap_fetchheader($imap_stream, $msg_number, $options = 0)
{
}

/**
 * Fetch MIME headers for a particular section of the message
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param int $msg_number The message number
 * @param string $section The part number. It is a string of integers delimited by period which
 * index into a body part list as per the IMAP4 specification
 * @param int|null $options A bitmask with one or more of the following:
 * <ul>
 * <code>FT_UID</code> - The <code>msg_number</code> is a UID
 * <code>FT_PEEK</code> - Do not set the \Seen flag if
 * not already set
 * <code>FT_INTERNAL</code> - The return string is in
 * internal format, will not canonicalize to CRLF.
 * </ul>
 *
 * @return string Returns the MIME headers of a particular section of the body of the specified messages as a
 * text string.
 *
 * @since PHP 5 >= 5.3.6, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-fetchmime.php
 */
function imap_fetchmime($imap_stream, $msg_number, $section, $options = 0)
{
}

/**
 * Read the structure of a particular message
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param int $msg_number The message number
 * @param int|null $options This optional parameter only has a single option,
 * <code>FT_UID</code>, which tells the function to treat the
 * <code>msg_number</code> argument as a
 * <code>UID</code>.
 *
 * @return mixed Returns an object includes the envelope, internal date, size, flags and
 * body structure along with a similar object for each mime attachment. The
 * structure of the returned objects is as follows:
 * <table>
 * <title>
 * Returned Objects for <code>imap_fetchstructure</code>
 * </title>
 * <tbody>
 * <tr>
 * <td>type</td><td>Primary body type</td>
 * </tr>
 * <tr>
 * <td>encoding</td><td>Body transfer encoding</td>
 * </tr>
 * <tr>
 * <td>ifsubtype</td><td><code>TRUE</code> if there is a subtype string</td>
 * </tr>
 * <tr>
 * <td>subtype</td><td><code>MIME</code> subtype</td>
 * </tr>
 * <tr>
 * <td>ifdescription</td><td><code>TRUE</code> if there is a description string</td>
 * </tr>
 * <tr>
 * <td>description</td><td>Content description string</td>
 * </tr>
 * <tr>
 * <td>ifid</td><td><code>TRUE</code> if there is an identification string</td>
 * </tr>
 * <tr>
 * <td>id</td><td>Identification string</td>
 * </tr>
 * <tr>
 * <td>lines</td><td>Number of lines</td>
 * </tr>
 * <tr>
 * <td>bytes</td><td>Number of bytes</td>
 * </tr>
 * <tr>
 * <td>ifdisposition</td><td><code>TRUE</code> if there is a disposition string</td>
 * </tr>
 * <tr>
 * <td>disposition</td><td>Disposition string</td>
 * </tr>
 * <tr>
 * <td>ifdparameters</td><td><code>TRUE</code> if the <code>dparameters</code> array exists</td>
 * </tr>
 * <tr>
 * <td>dparameters</td><td>An array of objects where each object has an
 * <code>"attribute"</code> and a <code>"value"</code>
 * property corresponding to the parameters on the
 * <code>Content-disposition</code> <code>MIME</code>
 * header.</td>
 * </tr>
 * <tr>
 * <td>ifparameters</td><td><code>TRUE</code> if the parameters array exists</td>
 * </tr>
 * <tr>
 * <td>parameters</td><td>An array of objects where each object has an
 * <code>"attribute"</code> and a <code>"value"</code>
 * property.</td>
 * </tr>
 * <tr>
 * <td>parts</td><td>An array of objects identical in structure to the top-level
 * object, each of which corresponds to a <code>MIME</code> body
 * part.</td>
 * </tr>
 * </tbody>
 * </table>
 * <table>
 * <title>Primary body type (value may vary with used library, use of constants is recommended)</title>
 * <thead>
 * <tr><td>Value</td><td>Type</td><td>Constant</td></tr>
 * </thead>
 * <tbody>
 * <tr><td>0</td><td>text</td><td>TYPETEXT</td></tr>
 * <tr><td>1</td><td>multipart</td><td>TYPEMULTIPART</td></tr>
 * <tr><td>2</td><td>message</td><td>TYPEMESSAGE</td></tr>
 * <tr><td>3</td><td>application</td><td>TYPEAPPLICATION</td></tr>
 * <tr><td>4</td><td>audio</td><td>TYPEAUDIO</td></tr>
 * <tr><td>5</td><td>image</td><td>TYPEIMAGE</td></tr>
 * <tr><td>6</td><td>video</td><td>TYPEVIDEO</td></tr>
 * <tr><td>7</td><td>model</td><td>TYPEMODEL</td></tr>
 * <tr><td>8</td><td>other</td><td>TYPEOTHER</td></tr>
 * </tbody>
 * </table>
 * <table>
 * <title>Transfer encodings (value may vary with used library, use of constants is recommended)</title>
 * <thead>
 * <tr><td>Value</td><td>Type</td><td>Constant</td></tr>
 * </thead>
 * <tbody>
 * <tr><td>0</td><td>7bit</td><td>ENC7BIT</td></tr>
 * <tr><td>1</td><td>8bit</td><td>ENC8BIT</td></tr>
 * <tr><td>2</td><td>Binary</td><td>ENCBINARY</td></tr>
 * <tr><td>3</td><td>Base64</td><td>ENCBASE64</td></tr>
 * <tr><td>4</td><td>Quoted-Printable</td><td>ENCQUOTEDPRINTABLE</td></tr>
 * <tr><td>5</td><td>other</td><td>ENCOTHER</td></tr>
 * </tbody>
 * </table>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-fetchstructure.php
 */
function imap_fetchstructure($imap_stream, $msg_number, $options = 0)
{
}

/**
 * Alias of <code>imap_body</code>
 *
 * @param mixed $stream_id
 * @param mixed $msg_no
 * @param mixed $options
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-fetchtext.php
 */
function imap_fetchtext($stream_id, $msg_no, $options = null)
{
}

/**
 * Clears IMAP cache
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param int $caches Specifies the cache to purge. It may one or a combination
 * of the following constants:
 * <code>IMAP_GC_ELT</code> (message cache elements),
 * <code>IMAP_GC_ENV</code> (envelope and bodies),
 * <code>IMAP_GC_TEXTS</code> (texts).
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-gc.php
 */
function imap_gc($imap_stream, $caches = null)
{
}

/**
 * Retrieve the quota level settings, and usage statics per mailbox
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $quota_root <code>quota_root</code> should normally be in the form of
 * <code>user.name</code> where name is the mailbox you wish to
 * retrieve information about.
 *
 * @return array Returns an array with integer values limit and usage for the given
 * mailbox. The value of limit represents the total amount of space
 * allowed for this mailbox. The usage value represents the mailboxes
 * current level of capacity. Will return <code>FALSE</code> in the case of failure.
 * As of PHP 4.3, the function more properly reflects the
 * functionality as dictated by the RFC2087.
 * The array return value has changed to support an unlimited number of returned
 * resources (i.e. messages, or sub-folders) with each named resource receiving
 * an individual array key. Each key value then contains an another array with
 * the usage and limit values within it.
 * For backwards compatibility reasons, the original access methods are
 * still available for use, although it is suggested to update.
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-get-quota.php
 */
function imap_get_quota($imap_stream, $quota_root)
{
}

/**
 * Retrieve the quota settings per user
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $quota_root <code>quota_root</code> should normally be in the form of
 * which mailbox (i.e. INBOX).
 *
 * @return array Returns an array of integer values pertaining to the specified user
 * mailbox. All values contain a key based upon the resource name, and a
 * corresponding array with the usage and limit values within.
 * This function will return <code>FALSE</code> in the case of call failure, and an
 * array of information about the connection upon an un-parsable response
 * from the server.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-get-quotaroot.php
 */
function imap_get_quotaroot($imap_stream, $quota_root)
{
}

/**
 * Gets the ACL for a given mailbox
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $mailbox The mailbox name, see <code>imap_open</code> for more
 * information
 *
 * @return array Returns an associative array of "folder" => "acl" pairs.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-getacl.php
 */
function imap_getacl($imap_stream, $mailbox)
{
}

/**
 * Read the list of mailboxes, returning detailed information on each one
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $ref <code>ref</code> should normally be just the server
 * specification as described in <code>imap_open</code>
 * @param string $pattern Specifies where in the mailbox hierarchy
 * to start searching.
 *
 * @return array Returns an array of objects containing mailbox information. Each
 * object has the attributes <code>name</code>, specifying
 * the full name of the mailbox; <code>delimiter</code>,
 * which is the hierarchy delimiter for the part of the hierarchy
 * this mailbox is in; and
 * <code>attributes</code>. <code>Attributes</code>
 * is a bitmask that can be tested against:
 * <ul>
 * <code>LATT_NOINFERIORS</code> - This mailbox not contains, and may not contain any
 * "children" (there are no mailboxes below this one). Calling
 * <code>imap_createmailbox</code> will not work on this mailbox.
 * <code>LATT_NOSELECT</code> - This is only a container,
 * not a mailbox - you cannot open it.
 * <code>LATT_MARKED</code> - This mailbox is marked. This means that it may
 * contain new messages since the last time it was checked. Not provided by all IMAP
 * servers.
 * <code>LATT_UNMARKED</code> - This mailbox is not marked, does not contain new
 * messages. If either <code>MARKED</code> or <code>UNMARKED</code> is
 * provided, you can assume the IMAP server supports this feature for this mailbox.
 * </ul>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-getmailboxes.php
 */
function imap_getmailboxes($imap_stream, $ref, $pattern)
{
}

/**
 * List all the subscribed mailboxes
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $ref <code>ref</code> should normally be just the server
 * specification as described in <code>imap_open</code>
 * @param string $pattern Specifies where in the mailbox hierarchy
 * to start searching.
 *
 * @return array Returns an array of objects containing mailbox information. Each
 * object has the attributes <code>name</code>, specifying
 * the full name of the mailbox; <code>delimiter</code>,
 * which is the hierarchy delimiter for the part of the hierarchy
 * this mailbox is in; and
 * <code>attributes</code>. <code>Attributes</code>
 * is a bitmask that can be tested against:
 * <ul>
 * <code>LATT_NOINFERIORS</code> - This mailbox has no
 * "children" (there are no mailboxes below this one).
 * <code>LATT_NOSELECT</code> - This is only a container,
 * not a mailbox - you cannot open it.
 * <code>LATT_MARKED</code> - This mailbox is marked.
 * Only used by UW-IMAPD.
 * <code>LATT_UNMARKED</code> - This mailbox is not marked.
 * Only used by UW-IMAPD.
 * </ul>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-getsubscribed.php
 */
function imap_getsubscribed($imap_stream, $ref, $pattern)
{
}

/**
 * Alias of <code>imap_headerinfo</code>
 *
 * @param mixed $stream_id
 * @param mixed $msg_no
 * @param mixed $from_length
 * @param mixed $subject_length
 * @param mixed $default_host
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-header.php
 */
function imap_header($stream_id, $msg_no, $from_length = null, $subject_length = null, $default_host = null)
{
}

/**
 * Read the header of the message
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param int $msg_number The message number
 * @param int|null $fromlength Number of characters for the <code>fetchfrom</code> property.
 * Must be greater than or equal to zero.
 * @param int|null $subjectlength Number of characters for the <code>fetchsubject</code> property
 * Must be greater than or equal to zero.
 * @param string|null $defaulthost
 *
 * @return mixed Returns <code>FALSE</code> on error or, if successful, the information in an object with following properties:
 * <ul>
 * toaddress - full to: line, up to 1024 characters
 * to - an array of objects from the To: line, with the following
 * properties: <code>personal</code>, <code>adl</code>,
 * <code>mailbox</code>, and <code>host</code>
 * fromaddress - full from: line, up to 1024 characters
 * from - an array of objects from the From: line, with the following
 * properties: <code>personal</code>, <code>adl</code>,
 * <code>mailbox</code>, and <code>host</code>
 * ccaddress - full cc: line, up to 1024 characters
 * cc - an array of objects from the Cc: line, with the following
 * properties: <code>personal</code>, <code>adl</code>,
 * <code>mailbox</code>, and <code>host</code>
 * bccaddress - full bcc: line, up to 1024 characters
 * bcc - an array of objects from the Bcc: line, with the following
 * properties: <code>personal</code>, <code>adl</code>,
 * <code>mailbox</code>, and <code>host</code>
 * reply_toaddress - full Reply-To: line, up to 1024 characters
 * reply_to - an array of objects from the Reply-To: line, with the following
 * properties: <code>personal</code>, <code>adl</code>,
 * <code>mailbox</code>, and <code>host</code>
 * senderaddress - full sender: line, up to 1024 characters
 * sender - an array of objects from the Sender: line, with the following
 * properties: <code>personal</code>, <code>adl</code>,
 * <code>mailbox</code>, and <code>host</code>
 * return_pathaddress - full Return-Path: line, up to 1024 characters
 * return_path - an array of objects from the Return-Path: line, with the
 * following properties: <code>personal</code>,
 * <code>adl</code>, <code>mailbox</code>, and
 * <code>host</code>
 * remail -
 * date - The message date as found in its headers
 * Date - Same as date
 * subject - The message subject
 * Subject - Same as subject
 * in_reply_to -
 * message_id -
 * newsgroups -
 * followup_to -
 * references -
 * Recent - <code>R</code> if recent and seen, <code>N</code>
 * if recent and not seen, ' ' if not recent.
 * Unseen - <code>U</code> if not seen AND not recent, ' ' if seen
 * OR not seen and recent
 * Flagged - <code>F</code> if flagged, ' ' if not flagged
 * Answered - <code>A</code> if answered, ' ' if unanswered
 * Deleted - <code>D</code> if deleted, ' ' if not deleted
 * Draft - <code>X</code> if draft, ' ' if not draft
 * Msgno - The message number
 * MailDate -
 * Size - The message size
 * udate - mail message date in Unix time
 * fetchfrom - from line formatted to fit <code>fromlength</code>
 * characters
 * fetchsubject - subject line formatted to fit
 * <code>subjectlength</code> characters
 * </ul>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-headerinfo.php
 */
function imap_headerinfo($imap_stream, $msg_number, $fromlength = 0, $subjectlength = 0, $defaulthost = null)
{
}

/**
 * Returns headers for all messages in a mailbox
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 *
 * @return array Returns an array of string formatted with header info. One
 * element per mail message.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-headers.php
 */
function imap_headers($imap_stream)
{
}

/**
 * Gets the last IMAP error that occurred during this page request
 *
 * @return string Returns the full text of the last IMAP error message that occurred on the
 * current page. Returns <code>FALSE</code> if no error messages are available.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-last-error.php
 */
function imap_last_error()
{
}

/**
 * Read the list of mailboxes
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $ref <code>ref</code> should normally be just the server
 * specification as described in <code>imap_open</code>.
 * @param string $pattern Specifies where in the mailbox hierarchy
 * to start searching.
 *
 * @return array Returns an array containing the names of the mailboxes or false in case of failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-list.php
 */
function imap_list($imap_stream, $ref, $pattern)
{
}

/**
 * Alias of <code>imap_list</code>
 *
 * @param mixed $stream_id
 * @param mixed $ref
 * @param mixed $pattern
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-listmailbox.php
 */
function imap_listmailbox($stream_id, $ref, $pattern)
{
}

/**
 * Returns the list of mailboxes that matches the given text
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $ref <code>ref</code> should normally be just the server
 * specification as described in <code>imap_open</code>
 * @param string $pattern Specifies where in the mailbox hierarchy
 * to start searching.
 * @param string $content The searched string
 *
 * @return array Returns an array containing the names of the mailboxes that have
 * <code>content</code> in the text of the mailbox.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-listscan.php
 */
function imap_listscan($imap_stream, $ref, $pattern, $content)
{
}

/**
 * Alias of <code>imap_lsub</code>
 *
 * @param mixed $stream_id
 * @param mixed $ref
 * @param mixed $pattern
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-listsubscribed.php
 */
function imap_listsubscribed($stream_id, $ref, $pattern)
{
}

/**
 * List all the subscribed mailboxes
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $ref <code>ref</code> should normally be just the server
 * specification as described in <code>imap_open</code>
 * @param string $pattern Specifies where in the mailbox hierarchy
 * to start searching.
 *
 * @return array Returns an array of all the subscribed mailboxes.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-lsub.php
 */
function imap_lsub($imap_stream, $ref, $pattern)
{
}

/**
 * Send an email message
 *
 * @param string $to The receiver
 * @param string $subject The mail subject
 * @param string $message The mail body, see <code>imap_mail_compose</code>
 * @param string|null $additional_headers As string with additional headers to be set on the mail
 * @param string|null $cc
 * @param string|null $bcc The receivers specified in <code>bcc</code> will get the
 * mail, but are excluded from the headers.
 * @param string|null $rpath Use this parameter to specify return path upon mail delivery failure.
 * This is useful when using PHP as a mail client for multiple users.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-mail.php
 */
function imap_mail($to, $subject, $message, $additional_headers = null, $cc = null, $bcc = null, $rpath = null)
{
}

/**
 * Create a MIME message based on given envelope and body sections
 *
 * @param array $envelope An associative array of headers fields. Valid keys are: "remail",
 * "return_path", "date", "from", "reply_to", "in_reply_to", "subject",
 * "to", "cc", "bcc", "message_id" and "custom_headers" (which contains
 * associative array of other headers).
 * @param array $body An indexed array of bodies
 *
 * @return string Returns the MIME message.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-mail-compose.php
 */
function imap_mail_compose(array $envelope, array $body)
{
}

/**
 * Copy specified messages to a mailbox
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $msglist <code>msglist</code> is a range not just message
 * numbers (as described in RFC2060).
 * @param string $mailbox The mailbox name, see <code>imap_open</code> for more
 * information
 * @param int|null $options <code>options</code> is a bitmask of one or more of
 * <ul>
 * <code>CP_UID</code> - the sequence numbers contain UIDS
 * <code>CP_MOVE</code> - Delete the messages from
 * the current mailbox after copying
 * </ul>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-mail-copy.php
 */
function imap_mail_copy($imap_stream, $msglist, $mailbox, $options = 0)
{
}

/**
 * Move specified messages to a mailbox
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $msglist <code>msglist</code> is a range not just message numbers
 * (as described in RFC2060).
 * @param string $mailbox The mailbox name, see <code>imap_open</code> for more
 * information
 * @param int|null $options <code>options</code> is a bitmask and may contain the single option:
 * <ul>
 * <code>CP_UID</code> - the sequence numbers contain UIDS
 * </ul>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-mail-move.php
 */
function imap_mail_move($imap_stream, $msglist, $mailbox, $options = 0)
{
}

/**
 * Get information about the current mailbox
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 *
 * @return mixed Returns the information in an object with following properties:
 * <table>
 * <title>Mailbox properties</title>
 * <tbody>
 * <tr>
 * <td>Date</td><td>date of last change (current datetime)</td>
 * </tr>
 * <tr>
 * <td>Driver</td><td>driver</td>
 * </tr>
 * <tr>
 * <td>Mailbox</td><td>name of the mailbox</td>
 * </tr>
 * <tr>
 * <td>Nmsgs</td><td>number of messages</td>
 * </tr>
 * <tr>
 * <td>Recent</td><td>number of recent messages</td>
 * </tr>
 * <tr>
 * <td>Unread</td><td>number of unread messages</td>
 * </tr>
 * <tr>
 * <td>Deleted</td><td>number of deleted messages</td>
 * </tr>
 * <tr>
 * <td>Size</td><td>mailbox size</td>
 * </tr>
 * </tbody>
 * </table>
 * Returns <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-mailboxmsginfo.php
 */
function imap_mailboxmsginfo($imap_stream)
{
}

/**
 * Decode MIME header elements
 *
 * @param string $text The MIME text
 *
 * @return array The decoded elements are returned in an array of objects, where each
 * object has two properties, <code>charset</code> and
 * <code>text</code>.
 * If the element hasn't been encoded, and in other words is in
 * plain US-ASCII, the <code>charset</code> property of that element is
 * set to <code>default</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-mime-header-decode.php
 */
function imap_mime_header_decode($text)
{
}

/**
 * Gets the message sequence number for the given UID
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param int $uid The message UID
 *
 * @return int Returns the message sequence number for the given
 * <code>uid</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-msgno.php
 */
function imap_msgno($imap_stream, $uid)
{
}

/**
 * Decode a modified UTF-7 string to UTF-8
 *
 * @param string $in A string encoded in modified UTF-7.
 *
 * @return string Returns <code>in</code> converted to UTF-8,
 * or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-mutf7-to-utf8.php
 */
function imap_mutf7_to_utf8($in)
{
}

/**
 * Gets the number of messages in the current mailbox
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 *
 * @return int Return the number of messages in the current mailbox, as an integer, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-num-msg.php
 */
function imap_num_msg($imap_stream)
{
}

/**
 * Gets the number of recent messages in current mailbox
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 *
 * @return int Returns the number of recent messages in the current mailbox, as an
 * integer.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-num-recent.php
 */
function imap_num_recent($imap_stream)
{
}

/**
 * Open an <code>IMAP</code> stream to a mailbox
 *
 * @param string $mailbox A mailbox name consists of a server and a mailbox path on this server.
 * The special name <code>INBOX</code> stands for the current users
 * personal mailbox. Mailbox names that contain international characters
 * besides those in the printable ASCII space have to be encoded with
 * <code>imap_utf7_encode</code>.
 * @param string $username The user name
 * @param string $password The password associated with the <code>username</code>
 * @param int|null $options The <code>options</code> are a bit mask with one or more of
 * the following:
 * <ul>
 * <code>OP_READONLY</code> - Open mailbox read-only
 * <code>OP_ANONYMOUS</code> - Don't use or update a
 * <code>.newsrc</code> for news (NNTP only)
 * <code>OP_HALFOPEN</code> - For <code>IMAP</code>
 * and <code>NNTP</code> names, open a connection but
 * don't open a mailbox.
 * <code>CL_EXPUNGE</code> - Expunge mailbox automatically upon mailbox close
 * (see also <code>imap_delete</code> and
 * <code>imap_expunge</code>)
 * <code>OP_DEBUG</code> - Debug protocol negotiations
 * <code>OP_SHORTCACHE</code> - Short (<code>elt</code>-only) caching
 * <code>OP_SILENT</code> - Don't pass up events (internal use)
 * <code>OP_PROTOTYPE</code> - Return driver prototype
 * <code>OP_SECURE</code> - Don't do non-secure authentication
 * </ul>
 * @param int|null $n_retries Number of maximum connect attempts
 * @param array|null $params Connection parameters, the following (string) keys maybe used
 * to set one or more connection parameters:
 * <ul>
 * <code>DISABLE_AUTHENTICATOR</code> - Disable authentication properties
 * </ul>
 *
 * @return resource Returns an IMAP stream on success or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-open.php
 */
function imap_open($mailbox, $username, $password, $options = 0, $n_retries = 0, array $params = null)
{
}

/**
 * Check if the IMAP stream is still active
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 *
 * @return bool Returns <code>TRUE</code> if the stream is still alive, <code>FALSE</code> otherwise.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-ping.php
 */
function imap_ping($imap_stream)
{
}

/**
 * Convert a quoted-printable string to an 8 bit string
 *
 * @param string $string A quoted-printable string
 *
 * @return string Returns an 8 bits string.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-qprint.php
 */
function imap_qprint($string)
{
}

/**
 * Alias of <code>imap_renamemailbox</code>
 *
 * @param mixed $stream_id
 * @param mixed $old_name
 * @param mixed $new_name
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-rename.php
 */
function imap_rename($stream_id, $old_name, $new_name)
{
}

/**
 * Rename an old mailbox to new mailbox
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $old_mbox The old mailbox name, see <code>imap_open</code> for more
 * information
 * @param string $new_mbox The new mailbox name, see <code>imap_open</code> for more
 * information
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-renamemailbox.php
 */
function imap_renamemailbox($imap_stream, $old_mbox, $new_mbox)
{
}

/**
 * Reopen <code>IMAP</code> stream to new mailbox
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $mailbox The mailbox name, see <code>imap_open</code> for more
 * information
 * @param int|null $options The <code>options</code> are a bit mask with one or more of
 * the following:
 * <ul>
 * <code>OP_READONLY</code> - Open mailbox read-only
 * <code>OP_ANONYMOUS</code> - Don't use or update a
 * <code>.newsrc</code> for news (<code>NNTP</code> only)
 * <code>OP_HALFOPEN</code> - For <code>IMAP</code>
 * and <code>NNTP</code> names, open a connection but
 * don't open a mailbox.
 * <code>OP_EXPUNGE</code> - Silently expunge recycle stream
 * <code>CL_EXPUNGE</code> - Expunge mailbox automatically upon mailbox close
 * (see also <code>imap_delete</code> and
 * <code>imap_expunge</code>)
 * </ul>
 * @param int|null $n_retries Number of maximum connect attempts
 *
 * @return bool Returns <code>TRUE</code> if the stream is reopened, <code>FALSE</code> otherwise.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-reopen.php
 */
function imap_reopen($imap_stream, $mailbox, $options = 0, $n_retries = 0)
{
}

/**
 * Parses an address string
 *
 * @param string $address A string containing addresses
 * @param string $default_host The default host name
 *
 * @return array Returns an array of objects. The objects properties are:
 * <ul>
 * mailbox - the mailbox name (username)
 * host - the host name
 * personal - the personal name
 * adl - at domain source route
 * </ul>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-rfc822-parse-adrlist.php
 */
function imap_rfc822_parse_adrlist($address, $default_host)
{
}

/**
 * Parse mail headers from a string
 *
 * @param string $headers The parsed headers data
 * @param string|null $defaulthost The default host name
 *
 * @return mixed Returns an object similar to the one returned by
 * <code>imap_header</code>, except for the flags and other
 * properties that come from the IMAP server.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-rfc822-parse-headers.php
 */
function imap_rfc822_parse_headers($headers, $defaulthost = "UNKNOWN")
{
}

/**
 * Returns a properly formatted email address given the mailbox, host, and personal info
 *
 * @param string $mailbox The mailbox name, see <code>imap_open</code> for more
 * information
 * @param string $host The email host part
 * @param string $personal The name of the account owner
 *
 * @return string Returns a string properly formatted email address as defined in RFC2822.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-rfc822-write-address.php
 */
function imap_rfc822_write_address($mailbox, $host, $personal)
{
}

/**
 * Save a specific body section to a file
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param mixed $file The path to the saved file as a string, or a valid file descriptor
 * returned by <code>fopen</code>.
 * @param int $msg_number The message number
 * @param string|null $part_number The part number. It is a string of integers delimited by period which
 * index into a body part list as per the IMAP4 specification
 * @param int|null $options A bitmask with one or more of the following:
 * <ul>
 * <code>FT_UID</code> - The <code>msg_number</code> is a UID
 * <code>FT_PEEK</code> - Do not set the \Seen flag if
 * not already set
 * <code>FT_INTERNAL</code> - The return string is in
 * internal format, will not canonicalize to CRLF.
 * </ul>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.3, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-savebody.php
 */
function imap_savebody($imap_stream, $file, $msg_number, $part_number = "", $options = 0)
{
}

/**
 * Alias of <code>imap_listscan</code>
 *
 * @param mixed $stream_id
 * @param mixed $ref
 * @param mixed $pattern
 * @param mixed $content
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-scan.php
 */
function imap_scan($stream_id, $ref, $pattern, $content)
{
}

/**
 * Alias of <code>imap_listscan</code>
 *
 * @param mixed $stream_id
 * @param mixed $ref
 * @param mixed $pattern
 * @param mixed $content
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-scanmailbox.php
 */
function imap_scanmailbox($stream_id, $ref, $pattern, $content)
{
}

/**
 * This function returns an array of messages matching the given search criteria
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $criteria A string, delimited by spaces, in which the following keywords are
 * allowed. Any multi-word arguments (e.g.
 * <code>FROM "joey smith"</code>) must be quoted. Results will match
 * all <code>criteria</code> entries.
 * <ul>
 * ALL - return all messages matching the rest of the criteria
 * ANSWERED - match messages with the \\ANSWERED flag set
 * BCC "string" - match messages with "string" in the Bcc: field
 * BEFORE "date" - match messages with Date: before "date"
 * BODY "string" - match messages with "string" in the body of the message
 * CC "string" - match messages with "string" in the Cc: field
 * DELETED - match deleted messages
 * FLAGGED - match messages with the \\FLAGGED (sometimes
 * referred to as Important or Urgent) flag set
 * FROM "string" - match messages with "string" in the From: field
 * KEYWORD "string" - match messages with "string" as a keyword
 * NEW - match new messages
 * OLD - match old messages
 * ON "date" - match messages with Date: matching "date"
 * RECENT - match messages with the \\RECENT flag set
 * SEEN - match messages that have been read (the \\SEEN flag is set)
 * SINCE "date" - match messages with Date: after "date"
 * SUBJECT "string" - match messages with "string" in the Subject:
 * TEXT "string" - match messages with text "string"
 * TO "string" - match messages with "string" in the To:
 * UNANSWERED - match messages that have not been answered
 * UNDELETED - match messages that are not deleted
 * UNFLAGGED - match messages that are not flagged
 * UNKEYWORD "string" - match messages that do not have the
 * keyword "string"
 * UNSEEN - match messages which have not been read yet
 * </ul>
 * @param int|null $options Valid values for <code>options</code> are
 * <code>SE_UID</code>, which causes the returned array to
 * contain UIDs instead of messages sequence numbers.
 * @param string|null $charset MIME character set to use when searching strings.
 *
 * @return array Returns an array of message numbers or UIDs.
 * Return <code>FALSE</code> if it does not understand the search
 * <code>criteria</code> or no messages have been found.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-search.php
 */
function imap_search($imap_stream, $criteria, $options = SE_FREE, $charset = null)
{
}

/**
 * Sets a quota for a given mailbox
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $quota_root The mailbox to have a quota set. This should follow the IMAP standard
 * format for a mailbox: <code>user.name</code>.
 * @param int $quota_limit The maximum size (in KB) for the <code>quota_root</code>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-set-quota.php
 */
function imap_set_quota($imap_stream, $quota_root, $quota_limit)
{
}

/**
 * Sets the ACL for a given mailbox
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $mailbox The mailbox name, see <code>imap_open</code> for more
 * information
 * @param string $id The user to give the rights to.
 * @param string $rights The rights to give to the user. Passing an empty string will delete
 * acl.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-setacl.php
 */
function imap_setacl($imap_stream, $mailbox, $id, $rights)
{
}

/**
 * Sets flags on messages
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $sequence A sequence of message numbers. You can enumerate desired messages
 * with the <code>X,Y</code> syntax, or retrieve all messages
 * within an interval with the <code>X:Y</code> syntax
 * @param string $flag The flags which you can set are <code>\Seen</code>,
 * <code>\Answered</code>, <code>\Flagged</code>,
 * <code>\Deleted</code>, and <code>\Draft</code> as
 * defined by RFC2060.
 * @param int|null $options A bit mask that may contain the single option:
 * <ul>
 * <code>ST_UID</code> - The sequence argument contains UIDs
 * instead of sequence numbers
 * </ul>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-setflag-full.php
 */
function imap_setflag_full($imap_stream, $sequence, $flag, $options = NIL)
{
}

/**
 * Gets and sort messages
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param int $criteria Criteria can be one (and only one) of the following:
 * <ul>
 * <code>SORTDATE</code> - message Date
 * <code>SORTARRIVAL</code> - arrival date
 * <code>SORTFROM</code> - mailbox in first From address
 * <code>SORTSUBJECT</code> - message subject
 * <code>SORTTO</code> - mailbox in first To address
 * <code>SORTCC</code> - mailbox in first cc address
 * <code>SORTSIZE</code> - size of message in octets
 * </ul>
 * @param int $reverse Set this to 1 for reverse sorting
 * @param int|null $options The <code>options</code> are a bitmask of one or more of the
 * following:
 * <ul>
 * <code>SE_UID</code> - Return UIDs instead of sequence numbers
 * <code>SE_NOPREFETCH</code> - Don't prefetch searched messages
 * </ul>
 * @param string|null $search_criteria IMAP2-format search criteria string. For details see
 * <code>imap_search</code>.
 * @param string|null $charset MIME character set to use when sorting strings.
 *
 * @return array Returns an array of message numbers sorted by the given
 * parameters.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-sort.php
 */
function imap_sort($imap_stream, $criteria, $reverse, $options = 0, $search_criteria = null, $charset = null)
{
}

/**
 * Returns status information on a mailbox
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $mailbox The mailbox name, see <code>imap_open</code> for more
 * information
 * @param int $options Valid flags are:
 * <ul>
 * <code>SA_MESSAGES</code> - set <code>$status-&gt;messages</code> to the
 * number of messages in the mailbox
 * <code>SA_RECENT</code> - set <code>$status-&gt;recent</code> to the number
 * of recent messages in the mailbox
 * <code>SA_UNSEEN</code> - set <code>$status-&gt;unseen</code> to the number
 * of unseen (new) messages in the mailbox
 * <code>SA_UIDNEXT</code> - set <code>$status-&gt;uidnext</code> to the next
 * uid to be used in the mailbox
 * <code>SA_UIDVALIDITY</code> - set <code>$status-&gt;uidvalidity</code> to a
 * constant that changes when uids for the mailbox may no longer be
 * valid
 * <code>SA_ALL</code> - set all of the above
 * </ul>
 *
 * @return mixed This function returns an object containing status information.
 * The object has the following properties: <code>messages</code>,
 * <code>recent</code>, <code>unseen</code>,
 * <code>uidnext</code>, and <code>uidvalidity</code>.
 * <code>flags</code> is also set, which contains a bitmask which can
 * be checked against any of the above constants.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-status.php
 */
function imap_status($imap_stream, $mailbox, $options)
{
}

/**
 * Subscribe to a mailbox
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $mailbox The mailbox name, see <code>imap_open</code> for more
 * information
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-subscribe.php
 */
function imap_subscribe($imap_stream, $mailbox)
{
}

/**
 * Returns a tree of threaded message
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param int|null $options
 *
 * @return array <code>imap_thread</code> returns an associative array containing
 * a tree of messages threaded by <code>REFERENCES</code>, or <code>FALSE</code>
 * on error.
 * Every message in the current mailbox will be represented by three entries
 * in the resulting array:
 * <ul>
 * <code>$thread["XX.num"]</code> - current message number
 * <code>$thread["XX.next"]</code>
 * <code>$thread["XX.branch"]</code>
 * </ul>
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-thread.php
 */
function imap_thread($imap_stream, $options = SE_FREE)
{
}

/**
 * Set or fetch imap timeout
 *
 * @param int $timeout_type One of the following:
 * <code>IMAP_OPENTIMEOUT</code>,
 * <code>IMAP_READTIMEOUT</code>,
 * <code>IMAP_WRITETIMEOUT</code>, or
 * <code>IMAP_CLOSETIMEOUT</code>.
 * @param int|null $timeout The timeout, in seconds.
 *
 * @return mixed If the <code>timeout</code> parameter is set, this function
 * returns <code>TRUE</code> on success and <code>FALSE</code> on failure.
 * If <code>timeout</code> is not provided or evaluates to -1,
 * the current timeout value of <code>timeout_type</code> is
 * returned as an integer.
 *
 * @since PHP 4 >= 4.3.3, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-timeout.php
 */
function imap_timeout($timeout_type, $timeout = -1)
{
}

/**
 * This function returns the UID for the given message sequence number
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param int $msg_number The message number.
 *
 * @return int The UID of the given message.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-uid.php
 */
function imap_uid($imap_stream, $msg_number)
{
}

/**
 * Unmark the message which is marked deleted
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param int $msg_number The message number
 * @param int|null $flags
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-undelete.php
 */
function imap_undelete($imap_stream, $msg_number, $flags = 0)
{
}

/**
 * Unsubscribe from a mailbox
 *
 * @param resource $imap_stream An IMAP stream returned by
 * <code>imap_open</code>.
 * @param string $mailbox The mailbox name, see <code>imap_open</code> for more
 * information
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-unsubscribe.php
 */
function imap_unsubscribe($imap_stream, $mailbox)
{
}

/**
 * Decodes a modified UTF-7 encoded string
 *
 * @param string $text A modified UTF-7 encoding string, as defined in RFC 2060, section 5.1.3 (original UTF-7
 * was defined in RFC1642).
 *
 * @return string Returns a string that is encoded in ISO-8859-1 and consists of the same
 * sequence of characters in <code>text</code>, or <code>FALSE</code>
 * if <code>text</code> contains invalid modified UTF-7 sequence
 * or <code>text</code> contains a character that is not part of
 * ISO-8859-1 character set.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-utf7-decode.php
 */
function imap_utf7_decode($text)
{
}

/**
 * Converts ISO-8859-1 string to modified UTF-7 text
 *
 * @param string $data An ISO-8859-1 string.
 *
 * @return string Returns <code>data</code> encoded with the modified UTF-7
 * encoding as defined in RFC 2060,
 * section 5.1.3 (original UTF-7 was defined in RFC1642).
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-utf7-encode.php
 */
function imap_utf7_encode($data)
{
}

/**
 * Converts MIME-encoded text to UTF-8
 *
 * @param string $mime_encoded_text A MIME encoded string. MIME encoding method and the UTF-8
 * specification are described in RFC2047 and RFC2044 respectively.
 *
 * @return string Returns an UTF-8 encoded string.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-utf8.php
 */
function imap_utf8($mime_encoded_text)
{
}

/**
 * Encode a UTF-8 string to modified UTF-7
 *
 * @param string $in A UTF-8 encoded string.
 *
 * @return string Returns <code>in</code> converted to modified UTF-7,
 * or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-utf8-to-mutf7.php
 */
function imap_utf8_to_mutf7($in)
{
}
