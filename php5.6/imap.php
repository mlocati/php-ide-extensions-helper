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
 * @param mixed $text
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-8bit.php
 */
function imap_8bit($text)
{
}

/**
 * Returns all IMAP alert messages that have occurred
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-alerts.php
 */
function imap_alerts(): array
{
}

/**
 * Append a string message to a specified mailbox
 *
 * @param mixed $stream_id
 * @param mixed $folder
 * @param mixed $message
 * @param mixed|null $options
 * @param mixed|null $date
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-append.php
 */
function imap_append($stream_id, $folder, $message, $options = null, $date = null)
{
}

/**
 * Decode BASE64 encoded text
 *
 * @param mixed $text
 *
 * @return string
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
 * @param mixed $text
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-binary.php
 */
function imap_binary($text)
{
}

/**
 * Read the message body
 *
 * @param mixed $stream_id
 * @param mixed $msg_no
 * @param mixed|null $options
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-body.php
 */
function imap_body($stream_id, $msg_no, $options = null)
{
}

/**
 * Read the structure of a specified body section of a specific message
 *
 * @param mixed $stream_id
 * @param mixed $msg_no
 * @param mixed $section
 *
 * @return object
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-bodystruct.php
 */
function imap_bodystruct($stream_id, $msg_no, $section)
{
}

/**
 * Check current mailbox
 *
 * @param mixed $stream_id
 *
 * @return object
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-check.php
 */
function imap_check($stream_id)
{
}

/**
 * Clears flags on messages
 *
 * @param mixed $stream_id
 * @param mixed $sequence
 * @param mixed $flag
 * @param mixed|null $options
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-clearflag-full.php
 */
function imap_clearflag_full($stream_id, $sequence, $flag, $options = null)
{
}

/**
 * Close an IMAP stream
 *
 * @param mixed $stream_id
 * @param mixed|null $options
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-close.php
 */
function imap_close($stream_id, $options = null)
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
 * @param mixed $stream_id
 * @param mixed $mailbox
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-createmailbox.php
 */
function imap_createmailbox($stream_id, $mailbox)
{
}

/**
 * Mark a message for deletion from current mailbox
 *
 * @param mixed $stream_id
 * @param mixed $msg_no
 * @param mixed|null $options
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-delete.php
 */
function imap_delete($stream_id, $msg_no, $options = null)
{
}

/**
 * Delete a mailbox
 *
 * @param mixed $stream_id
 * @param mixed $mailbox
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-deletemailbox.php
 */
function imap_deletemailbox($stream_id, $mailbox)
{
}

/**
 * Returns all of the IMAP errors that have occurred
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-errors.php
 */
function imap_errors(): array
{
}

/**
 * Delete all messages marked for deletion
 *
 * @param mixed $stream_id
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-expunge.php
 */
function imap_expunge($stream_id)
{
}

/**
 * Read an overview of the information in the headers of the given message
 *
 * @param mixed $stream_id
 * @param mixed $sequence
 * @param mixed|null $options
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-fetch-overview.php
 */
function imap_fetch_overview($stream_id, $sequence, $options = null): array
{
}

/**
 * Fetch a particular section of the body of the message
 *
 * @param mixed $stream_id
 * @param mixed $msg_no
 * @param mixed $section
 * @param mixed|null $options
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-fetchbody.php
 */
function imap_fetchbody($stream_id, $msg_no, $section, $options = null)
{
}

/**
 * Returns header for a message
 *
 * @param mixed $stream_id
 * @param mixed $msg_no
 * @param mixed|null $options
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-fetchheader.php
 */
function imap_fetchheader($stream_id, $msg_no, $options = null)
{
}

/**
 * Fetch MIME headers for a particular section of the message
 *
 * @param mixed $stream_id
 * @param mixed $msg_no
 * @param mixed $section
 * @param mixed|null $options
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.6, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-fetchmime.php
 */
function imap_fetchmime($stream_id, $msg_no, $section, $options = null)
{
}

/**
 * Read the structure of a particular message
 *
 * @param mixed $stream_id
 * @param mixed $msg_no
 * @param mixed|null $options
 *
 * @return object
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-fetchstructure.php
 */
function imap_fetchstructure($stream_id, $msg_no, $options = null)
{
}

/**
 * Alias of <code>imap_body</code>
 *
 * @param mixed $stream_id
 * @param mixed $msg_no
 * @param mixed|null $options
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
 * @param mixed $stream_id
 * @param mixed|null $flags
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-gc.php
 */
function imap_gc($stream_id, $flags = null)
{
}

/**
 * Retrieve the quota level settings, and usage statics per mailbox
 *
 * @param mixed $stream_id
 * @param mixed $qroot
 *
 * @return array
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-get-quota.php
 */
function imap_get_quota($stream_id, $qroot): array
{
}

/**
 * Retrieve the quota settings per user
 *
 * @param mixed $stream_id
 * @param mixed $mbox
 *
 * @return array
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-get-quotaroot.php
 */
function imap_get_quotaroot($stream_id, $mbox): array
{
}

/**
 * Gets the ACL for a given mailbox
 *
 * @param mixed $stream_id
 * @param mixed $mailbox
 *
 * @return array
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-getacl.php
 */
function imap_getacl($stream_id, $mailbox): array
{
}

/**
 * Read the list of mailboxes, returning detailed information on each one
 *
 * @param mixed $stream_id
 * @param mixed $ref
 * @param mixed $pattern
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-getmailboxes.php
 */
function imap_getmailboxes($stream_id, $ref, $pattern): array
{
}

/**
 * List all the subscribed mailboxes
 *
 * @param mixed $stream_id
 * @param mixed $ref
 * @param mixed $pattern
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-getsubscribed.php
 */
function imap_getsubscribed($stream_id, $ref, $pattern): array
{
}

/**
 * Alias of <code>imap_headerinfo</code>
 *
 * @param mixed $stream_id
 * @param mixed $msg_no
 * @param mixed|null $from_length
 * @param mixed|null $subject_length
 * @param mixed|null $default_host
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
 * @param mixed $stream_id
 * @param mixed $msg_no
 * @param mixed|null $from_length
 * @param mixed|null $subject_length
 * @param mixed|null $default_host
 *
 * @return object
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-headerinfo.php
 */
function imap_headerinfo($stream_id, $msg_no, $from_length = null, $subject_length = null, $default_host = null)
{
}

/**
 * Returns headers for all messages in a mailbox
 *
 * @param mixed $stream_id
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-headers.php
 */
function imap_headers($stream_id): array
{
}

/**
 * Gets the last IMAP error that occurred during this page request
 *
 * @return string
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
 * @param mixed $stream_id
 * @param mixed $ref
 * @param mixed $pattern
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-list.php
 */
function imap_list($stream_id, $ref, $pattern): array
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
 * @param mixed $stream_id
 * @param mixed $ref
 * @param mixed $pattern
 * @param mixed $content
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-listscan.php
 */
function imap_listscan($stream_id, $ref, $pattern, $content): array
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
 * @param mixed $stream_id
 * @param mixed $ref
 * @param mixed $pattern
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-lsub.php
 */
function imap_lsub($stream_id, $ref, $pattern): array
{
}

/**
 * Send an email message
 *
 * @param mixed $to
 * @param mixed $subject
 * @param mixed $message
 * @param mixed|null $additional_headers
 * @param mixed|null $cc
 * @param mixed|null $bcc
 * @param mixed|null $rpath
 *
 * @return bool
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
 * @param mixed $envelope
 * @param mixed $body
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-mail-compose.php
 */
function imap_mail_compose($envelope, $body)
{
}

/**
 * Copy specified messages to a mailbox
 *
 * @param mixed $stream_id
 * @param mixed $msglist
 * @param mixed $mailbox
 * @param mixed|null $options
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-mail-copy.php
 */
function imap_mail_copy($stream_id, $msglist, $mailbox, $options = null)
{
}

/**
 * Move specified messages to a mailbox
 *
 * @param mixed $stream_id
 * @param mixed $sequence
 * @param mixed $mailbox
 * @param mixed|null $options
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-mail-move.php
 */
function imap_mail_move($stream_id, $sequence, $mailbox, $options = null)
{
}

/**
 * Get information about the current mailbox
 *
 * @param mixed $stream_id
 *
 * @return object
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-mailboxmsginfo.php
 */
function imap_mailboxmsginfo($stream_id)
{
}

/**
 * Decode MIME header elements
 *
 * @param mixed $str
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-mime-header-decode.php
 */
function imap_mime_header_decode($str): array
{
}

/**
 * Gets the message sequence number for the given UID
 *
 * @param mixed $stream_id
 * @param mixed $unique_msg_id
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-msgno.php
 */
function imap_msgno($stream_id, $unique_msg_id)
{
}

/**
 * Decode a modified UTF-7 string to UTF-8
 *
 * @param mixed $in
 *
 * @return string
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
 * @param mixed $stream_id
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-num-msg.php
 */
function imap_num_msg($stream_id)
{
}

/**
 * Gets the number of recent messages in current mailbox
 *
 * @param mixed $stream_id
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-num-recent.php
 */
function imap_num_recent($stream_id)
{
}

/**
 * Open an <code>IMAP</code> stream to a mailbox
 *
 * @param mixed $mailbox
 * @param mixed $user
 * @param mixed $password
 * @param mixed|null $options
 * @param mixed|null $n_retries
 * @param mixed|null $params
 *
 * @return resource
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-open.php
 */
function imap_open($mailbox, $user, $password, $options = null, $n_retries = null, $params = null)
{
}

/**
 * Check if the IMAP stream is still active
 *
 * @param mixed $stream_id
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-ping.php
 */
function imap_ping($stream_id)
{
}

/**
 * Convert a quoted-printable string to an 8 bit string
 *
 * @param mixed $text
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-qprint.php
 */
function imap_qprint($text)
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
 * @param mixed $stream_id
 * @param mixed $old_name
 * @param mixed $new_name
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-renamemailbox.php
 */
function imap_renamemailbox($stream_id, $old_name, $new_name)
{
}

/**
 * Reopen <code>IMAP</code> stream to new mailbox
 *
 * @param mixed $stream_id
 * @param mixed $mailbox
 * @param mixed|null $options
 * @param mixed|null $n_retries
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-reopen.php
 */
function imap_reopen($stream_id, $mailbox, $options = null, $n_retries = null)
{
}

/**
 * Parses an address string
 *
 * @param mixed $address_string
 * @param mixed $default_host
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-rfc822-parse-adrlist.php
 */
function imap_rfc822_parse_adrlist($address_string, $default_host): array
{
}

/**
 * Parse mail headers from a string
 *
 * @param mixed $headers
 * @param mixed|null $default_host
 *
 * @return object
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-rfc822-parse-headers.php
 */
function imap_rfc822_parse_headers($headers, $default_host = null)
{
}

/**
 * Returns a properly formatted email address given the mailbox, host, and personal info
 *
 * @param mixed $mailbox
 * @param mixed $host
 * @param mixed $personal
 *
 * @return string
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
 * @param mixed $stream_id
 * @param mixed $file
 * @param mixed $msg_no
 * @param mixed|null $section
 * @param mixed|null $options
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.3, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-savebody.php
 */
function imap_savebody($stream_id, $file, $msg_no, $section = null, $options = null)
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
 * @param mixed $stream_id
 * @param mixed $criteria
 * @param mixed|null $options
 * @param mixed|null $charset
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-search.php
 */
function imap_search($stream_id, $criteria, $options = null, $charset = null): array
{
}

/**
 * Sets a quota for a given mailbox
 *
 * @param mixed $stream_id
 * @param mixed $qroot
 * @param mixed $mailbox_size
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-set-quota.php
 */
function imap_set_quota($stream_id, $qroot, $mailbox_size)
{
}

/**
 * Sets the ACL for a given mailbox
 *
 * @param mixed $stream_id
 * @param mixed $mailbox
 * @param mixed $id
 * @param mixed $rights
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-setacl.php
 */
function imap_setacl($stream_id, $mailbox, $id, $rights)
{
}

/**
 * Sets flags on messages
 *
 * @param mixed $stream_id
 * @param mixed $sequence
 * @param mixed $flag
 * @param mixed|null $options
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-setflag-full.php
 */
function imap_setflag_full($stream_id, $sequence, $flag, $options = null)
{
}

/**
 * Gets and sort messages
 *
 * @param mixed $stream_id
 * @param mixed $criteria
 * @param mixed $reverse
 * @param mixed|null $options
 * @param mixed|null $search_criteria
 * @param mixed|null $charset
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-sort.php
 */
function imap_sort($stream_id, $criteria, $reverse, $options = null, $search_criteria = null, $charset = null): array
{
}

/**
 * Returns status information on a mailbox
 *
 * @param mixed $stream_id
 * @param mixed $mailbox
 * @param mixed $options
 *
 * @return object
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-status.php
 */
function imap_status($stream_id, $mailbox, $options)
{
}

/**
 * Subscribe to a mailbox
 *
 * @param mixed $stream_id
 * @param mixed $mailbox
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-subscribe.php
 */
function imap_subscribe($stream_id, $mailbox)
{
}

/**
 * Returns a tree of threaded message
 *
 * @param mixed $stream_id
 * @param mixed|null $options
 *
 * @return array
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-thread.php
 */
function imap_thread($stream_id, $options = null): array
{
}

/**
 * Set or fetch imap timeout
 *
 * @param mixed $timeout_type
 * @param mixed|null $timeout
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.3.3, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-timeout.php
 */
function imap_timeout($timeout_type, $timeout = null)
{
}

/**
 * This function returns the UID for the given message sequence number
 *
 * @param mixed $stream_id
 * @param mixed $msg_no
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-uid.php
 */
function imap_uid($stream_id, $msg_no)
{
}

/**
 * Unmark the message which is marked deleted
 *
 * @param mixed $stream_id
 * @param mixed $msg_no
 * @param mixed|null $flags
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-undelete.php
 */
function imap_undelete($stream_id, $msg_no, $flags = null)
{
}

/**
 * Unsubscribe from a mailbox
 *
 * @param mixed $stream_id
 * @param mixed $mailbox
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-unsubscribe.php
 */
function imap_unsubscribe($stream_id, $mailbox)
{
}

/**
 * Decodes a modified UTF-7 encoded string
 *
 * @param mixed $buf
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-utf7-decode.php
 */
function imap_utf7_decode($buf)
{
}

/**
 * Converts ISO-8859-1 string to modified UTF-7 text
 *
 * @param mixed $buf
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-utf7-encode.php
 */
function imap_utf7_encode($buf)
{
}

/**
 * Converts MIME-encoded text to UTF-8
 *
 * @param mixed $mime_encoded_text
 *
 * @return string
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
 * @param mixed $in
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imap-utf8-to-mutf7.php
 */
function imap_utf8_to_mutf7($in)
{
}
