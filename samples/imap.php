<?php
// Documentation generated automatically for extension imap v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
// No INI entries
const CL_EXPUNGE = 32768;
const CP_MOVE = 2;
const CP_UID = 1;
const ENC7BIT = 0;
const ENC8BIT = 1;
const ENCBASE64 = 3;
const ENCBINARY = 2;
const ENCOTHER = 5;
const ENCQUOTEDPRINTABLE = 4;
const FT_INTERNAL = 8;
const FT_NOT = 4;
const FT_PEEK = 2;
const FT_PREFETCHTEXT = 32;
const FT_UID = 1;
const IMAP_CLOSETIMEOUT = 4;
const IMAP_GC_ELT = 1;
const IMAP_GC_ENV = 2;
const IMAP_GC_TEXTS = 4;
const IMAP_OPENTIMEOUT = 1;
const IMAP_READTIMEOUT = 2;
const IMAP_WRITETIMEOUT = 3;
const LATT_HASCHILDREN = 32;
const LATT_HASNOCHILDREN = 64;
const LATT_MARKED = 4;
const LATT_NOINFERIORS = 1;
const LATT_NOSELECT = 2;
const LATT_REFERRAL = 16;
const LATT_UNMARKED = 8;
const NIL = 0;
const OP_ANONYMOUS = 4;
const OP_DEBUG = 1;
const OP_EXPUNGE = 128;
const OP_HALFOPEN = 64;
const OP_PROTOTYPE = 32;
const OP_READONLY = 2;
const OP_SECURE = 256;
const OP_SHORTCACHE = 8;
const OP_SILENT = 16;
const SA_ALL = 31;
const SA_MESSAGES = 1;
const SA_RECENT = 2;
const SA_UIDNEXT = 8;
const SA_UIDVALIDITY = 16;
const SA_UNSEEN = 4;
const SE_FREE = 2;
const SE_NOPREFETCH = 4;
const SE_UID = 1;
const SORTARRIVAL = 1;
const SORTCC = 5;
const SORTDATE = 0;
const SORTFROM = 2;
const SORTSIZE = 6;
const SORTSUBJECT = 3;
const SORTTO = 4;
const SO_FREE = 8;
const SO_NOSERVER = 16;
const ST_SET = 4;
const ST_SILENT = 2;
const ST_UID = 1;
const TYPEAPPLICATION = 3;
const TYPEAUDIO = 4;
const TYPEIMAGE = 5;
const TYPEMESSAGE = 2;
const TYPEMODEL = 7;
const TYPEMULTIPART = 1;
const TYPEOTHER = 8;
const TYPETEXT = 0;
const TYPEVIDEO = 6;
// No classes defined
function imap_open($mailbox, $user, $password, $options = null, $n_retries = null, $params = null)
{
}
function imap_reopen($stream_id, $mailbox, $options = null, $n_retries = null)
{
}
function imap_close($stream_id, $options = null)
{
}
function imap_num_msg($stream_id)
{
}
function imap_num_recent($stream_id)
{
}
function imap_headers($stream_id)
{
}
function imap_headerinfo($stream_id, $msg_no, $from_length = null, $subject_length = null, $default_host = null)
{
}
function imap_rfc822_parse_headers($headers, $default_host = null)
{
}
function imap_rfc822_write_address($mailbox, $host, $personal)
{
}
function imap_rfc822_parse_adrlist($address_string, $default_host)
{
}
function imap_body($stream_id, $msg_no, $options = null)
{
}
function imap_bodystruct($stream_id, $msg_no, $section)
{
}
function imap_fetchbody($stream_id, $msg_no, $section, $options = null)
{
}
function imap_fetchmime($stream_id, $msg_no, $section, $options = null)
{
}
function imap_savebody($stream_id, $file, $msg_no, $section = null, $options = null)
{
}
function imap_fetchheader($stream_id, $msg_no, $options = null)
{
}
function imap_fetchstructure($stream_id, $msg_no, $options = null)
{
}
function imap_gc($stream_id, $flags = null)
{
}
function imap_expunge($stream_id)
{
}
function imap_delete($stream_id, $msg_no, $options = null)
{
}
function imap_undelete($stream_id, $msg_no, $flags = null)
{
}
function imap_check($stream_id)
{
}
function imap_listscan($stream_id, $ref, $pattern, $content)
{
}
function imap_mail_copy($stream_id, $msglist, $mailbox, $options = null)
{
}
function imap_mail_move($stream_id, $sequence, $mailbox, $options = null)
{
}
function imap_mail_compose($envelope, $body)
{
}
function imap_createmailbox($stream_id, $mailbox)
{
}
function imap_renamemailbox($stream_id, $old_name, $new_name)
{
}
function imap_deletemailbox($stream_id, $mailbox)
{
}
function imap_subscribe($stream_id, $mailbox)
{
}
function imap_unsubscribe($stream_id, $mailbox)
{
}
function imap_append($stream_id, $folder, $message, $options = null, $date = null)
{
}
function imap_ping($stream_id)
{
}
function imap_base64($text)
{
}
function imap_qprint($text)
{
}
function imap_8bit($text)
{
}
function imap_binary($text)
{
}
function imap_utf8($mime_encoded_text)
{
}
function imap_status($stream_id, $mailbox, $options)
{
}
function imap_mailboxmsginfo($stream_id)
{
}
function imap_setflag_full($stream_id, $sequence, $flag, $options = null)
{
}
function imap_clearflag_full($stream_id, $sequence, $flag, $options = null)
{
}
function imap_sort($stream_id, $criteria, $reverse, $options = null, $search_criteria = null, $charset = null)
{
}
function imap_uid($stream_id, $msg_no)
{
}
function imap_msgno($stream_id, $unique_msg_id)
{
}
function imap_list($stream_id, $ref, $pattern)
{
}
function imap_lsub($stream_id, $ref, $pattern)
{
}
function imap_fetch_overview($stream_id, $sequence, $options = null)
{
}
function imap_alerts()
{
}
function imap_errors()
{
}
function imap_last_error()
{
}
function imap_search($stream_id, $criteria, $options = null, $charset = null)
{
}
function imap_utf7_decode($buf)
{
}
function imap_utf7_encode($buf)
{
}
function imap_utf8_to_mutf7($in)
{
}
function imap_mutf7_to_utf8($in)
{
}
function imap_mime_header_decode($str)
{
}
function imap_thread($stream_id, $options = null)
{
}
function imap_timeout($timeout_type, $timeout = null)
{
}
function imap_get_quota($stream_id, $qroot)
{
}
function imap_get_quotaroot($stream_id, $mbox)
{
}
function imap_set_quota($stream_id, $qroot, $mailbox_size)
{
}
function imap_setacl($stream_id, $mailbox, $id, $rights)
{
}
function imap_getacl($stream_id, $mailbox)
{
}
function imap_mail($to, $subject, $message, $additional_headers = null, $cc = null, $bcc = null, $rpath = null)
{
}
function imap_header($stream_id, $msg_no, $from_length = null, $subject_length = null, $default_host = null)
{
}
function imap_listmailbox($stream_id, $ref, $pattern)
{
}
function imap_getmailboxes($stream_id, $ref, $pattern)
{
}
function imap_scanmailbox($stream_id, $ref, $pattern, $content)
{
}
function imap_listsubscribed($stream_id, $ref, $pattern)
{
}
function imap_getsubscribed($stream_id, $ref, $pattern)
{
}
function imap_fetchtext($stream_id, $msg_no, $options = null)
{
}
function imap_scan($stream_id, $ref, $pattern, $content)
{
}
function imap_create($stream_id, $mailbox)
{
}
function imap_rename($stream_id, $old_name, $new_name)
{
}