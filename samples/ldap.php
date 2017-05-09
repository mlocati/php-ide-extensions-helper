<?php
// Documentation generated automatically for extension ldap v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
/*
 * INI entries:
 * ldap.max_links = '-1'
 */
const LDAP_DEREF_ALWAYS = 3;
const LDAP_DEREF_FINDING = 2;
const LDAP_DEREF_NEVER = 0;
const LDAP_DEREF_SEARCHING = 1;
const LDAP_ESCAPE_DN = 2;
const LDAP_ESCAPE_FILTER = 1;
const LDAP_MODIFY_BATCH_ADD = 1;
const LDAP_MODIFY_BATCH_ATTRIB = 'attrib';
const LDAP_MODIFY_BATCH_MODTYPE = 'modtype';
const LDAP_MODIFY_BATCH_REMOVE = 2;
const LDAP_MODIFY_BATCH_REMOVE_ALL = 18;
const LDAP_MODIFY_BATCH_REPLACE = 3;
const LDAP_MODIFY_BATCH_VALUES = 'values';
const LDAP_OPT_CLIENT_CONTROLS = 19;
const LDAP_OPT_DEBUG_LEVEL = 20481;
const LDAP_OPT_DEREF = 2;
const LDAP_OPT_DIAGNOSTIC_MESSAGE = 50;
const LDAP_OPT_ERROR_NUMBER = 49;
const LDAP_OPT_ERROR_STRING = 50;
const LDAP_OPT_HOST_NAME = 48;
const LDAP_OPT_MATCHED_DN = 51;
const LDAP_OPT_NETWORK_TIMEOUT = 20485;
const LDAP_OPT_PROTOCOL_VERSION = 17;
const LDAP_OPT_REFERRALS = 8;
const LDAP_OPT_RESTART = 9;
const LDAP_OPT_SERVER_CONTROLS = 18;
const LDAP_OPT_SIZELIMIT = 3;
const LDAP_OPT_TIMELIMIT = 4;
const LDAP_OPT_TIMEOUT = 20482;
const LDAP_OPT_X_KEEPALIVE_IDLE = 25344;
const LDAP_OPT_X_KEEPALIVE_INTERVAL = 25346;
const LDAP_OPT_X_KEEPALIVE_PROBES = 25345;
const LDAP_OPT_X_SASL_AUTHCID = 24834;
const LDAP_OPT_X_SASL_AUTHZID = 24835;
const LDAP_OPT_X_SASL_MECH = 24832;
const LDAP_OPT_X_SASL_NOCANON = 24843;
const LDAP_OPT_X_SASL_REALM = 24833;
const LDAP_OPT_X_SASL_USERNAME = 24844;
const LDAP_OPT_X_TLS_ALLOW = 3;
const LDAP_OPT_X_TLS_CACERTDIR = 24579;
const LDAP_OPT_X_TLS_CACERTFILE = 24578;
const LDAP_OPT_X_TLS_CERTFILE = 24580;
const LDAP_OPT_X_TLS_CIPHER_SUITE = 24584;
const LDAP_OPT_X_TLS_CRLCHECK = 24587;
const LDAP_OPT_X_TLS_CRLFILE = 24592;
const LDAP_OPT_X_TLS_CRL_ALL = 2;
const LDAP_OPT_X_TLS_CRL_NONE = 0;
const LDAP_OPT_X_TLS_CRL_PEER = 1;
const LDAP_OPT_X_TLS_DEMAND = 2;
const LDAP_OPT_X_TLS_DHFILE = 24590;
const LDAP_OPT_X_TLS_HARD = 1;
const LDAP_OPT_X_TLS_KEYFILE = 24581;
const LDAP_OPT_X_TLS_NEVER = 0;
const LDAP_OPT_X_TLS_PACKAGE = 24593;
const LDAP_OPT_X_TLS_PROTOCOL_MIN = 24583;
const LDAP_OPT_X_TLS_PROTOCOL_SSL2 = 512;
const LDAP_OPT_X_TLS_PROTOCOL_SSL3 = 768;
const LDAP_OPT_X_TLS_PROTOCOL_TLS1_0 = 769;
const LDAP_OPT_X_TLS_PROTOCOL_TLS1_1 = 770;
const LDAP_OPT_X_TLS_PROTOCOL_TLS1_2 = 771;
const LDAP_OPT_X_TLS_RANDOM_FILE = 24585;
const LDAP_OPT_X_TLS_REQUIRE_CERT = 24582;
const LDAP_OPT_X_TLS_TRY = 4;
// No classes defined
function ldap_connect($hostname = null, $port = null)
{
}
function ldap_close($link_identifier)
{
}
function ldap_bind($link_identifier, $bind_rdn = null, $bind_password = null)
{
}
function ldap_sasl_bind($link, $binddn = null, $password = null, $sasl_mech = null, $sasl_realm = null, $sasl_authz_id = null, $props = null)
{
}
function ldap_unbind($link_identifier)
{
}
function ldap_read($link_identifier, $base_dn, $filter, $attributes = null, $attrsonly = null, $sizelimit = null, $timelimit = null, $deref = null)
{
}
function ldap_list($link_identifier, $base_dn, $filter, $attributes = null, $attrsonly = null, $sizelimit = null, $timelimit = null, $deref = null)
{
}
function ldap_search($link_identifier, $base_dn, $filter, $attributes = null, $attrsonly = null, $sizelimit = null, $timelimit = null, $deref = null)
{
}
function ldap_free_result($link_identifier)
{
}
function ldap_count_entries($link_identifier, $result_identifier)
{
}
function ldap_first_entry($link_identifier, $result_identifier)
{
}
function ldap_next_entry($link_identifier, $result_identifier)
{
}
function ldap_get_entries($link_identifier, $result_identifier)
{
}
function ldap_first_attribute($link_identifier, $result_entry_identifier)
{
}
function ldap_next_attribute($link_identifier, $result_entry_identifier)
{
}
function ldap_get_attributes($link_identifier, $result_entry_identifier)
{
}
function ldap_get_values($link_identifier, $result_entry_identifier, $attribute)
{
}
function ldap_get_values_len($link_identifier, $result_entry_identifier, $attribute)
{
}
function ldap_get_dn($link_identifier, $result_entry_identifier)
{
}
function ldap_explode_dn($dn, $with_attrib)
{
}
function ldap_dn2ufn($dn)
{
}
function ldap_add($link_identifier, $dn, $entry)
{
}
function ldap_delete($link_identifier, $dn)
{
}
function ldap_modify_batch($link_identifier, $dn, array $modifications_info)
{
}
function ldap_modify($link_identifier, $dn, $entry)
{
}
function ldap_mod_add($link_identifier, $dn, $entry)
{
}
function ldap_mod_replace($link_identifier, $dn, $entry)
{
}
function ldap_mod_del($link_identifier, $dn, $entry)
{
}
function ldap_errno($link_identifier)
{
}
function ldap_err2str($errno)
{
}
function ldap_error($link_identifier)
{
}
function ldap_compare($link_identifier, $dn, $attribute, $value)
{
}
function ldap_sort($link, $result, $sortfilter)
{
}
function ldap_rename($link_identifier, $dn, $newrdn, $newparent, $deleteoldrdn)
{
}
function ldap_get_option($link_identifier, $option, &$retval)
{
}
function ldap_set_option($link_identifier, $option, $newval)
{
}
function ldap_first_reference($link, $result)
{
}
function ldap_next_reference($link, $entry)
{
}
function ldap_parse_reference($link, $entry, &$referrals)
{
}
function ldap_parse_result($link, $result, &$errcode, &$matcheddn = null, &$errmsg = null, &$referrals = null)
{
}
function ldap_start_tls($link_identifier)
{
}
function ldap_escape($value, $ignore = null, $flags = null)
{
}
function ldap_control_paged_result($link, $pagesize, $iscritical = null, $cookie = null)
{
}
function ldap_control_paged_result_response($link, $result, &$cookie = null, &$estimated = null)
{
}