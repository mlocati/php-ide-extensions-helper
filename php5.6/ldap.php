<?php
// Start of extension: ldap
// - parsed on POSIX with PHP 5.6.34

/**
 * Alias dereferencing rule - Always.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-deref-always
 *
 * @var int
 */
const LDAP_DEREF_ALWAYS = 3;

/**
 * Alias dereferencing rule - Finding.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-deref-finding
 *
 * @var int
 */
const LDAP_DEREF_FINDING = 2;

/**
 * Alias dereferencing rule - Never.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-deref-never
 *
 * @var int
 */
const LDAP_DEREF_NEVER = 0;

/**
 * Alias dereferencing rule - Searching.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-deref-searching
 *
 * @var int
 */
const LDAP_DEREF_SEARCHING = 1;

/**
 * @var int
 */
const LDAP_ESCAPE_DN = 2;

/**
 * @var int
 */
const LDAP_ESCAPE_FILTER = 1;

/**
 * @var int
 */
const LDAP_MODIFY_BATCH_ADD = 1;

/**
 * @var string
 */
const LDAP_MODIFY_BATCH_ATTRIB = 'attrib';

/**
 * @var string
 */
const LDAP_MODIFY_BATCH_MODTYPE = 'modtype';

/**
 * @var int
 */
const LDAP_MODIFY_BATCH_REMOVE = 2;

/**
 * @var int
 */
const LDAP_MODIFY_BATCH_REMOVE_ALL = 18;

/**
 * @var int
 */
const LDAP_MODIFY_BATCH_REPLACE = 3;

/**
 * @var string
 */
const LDAP_MODIFY_BATCH_VALUES = 'values';

/**
 * Specifies a default list of client controls to be processed with each request.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-client-controls
 *
 * @var int
 */
const LDAP_OPT_CLIENT_CONTROLS = 19;

/**
 * Specifies a bitwise level for debug traces.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-debug-level
 *
 * @var int
 */
const LDAP_OPT_DEBUG_LEVEL = 20481;

/**
 * Specifies alternative rules for following aliases at the server.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-deref
 *
 * @var int
 */
const LDAP_OPT_DEREF = 2;

/**
 * Gets the latest session error message.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-diagnostic-message
 *
 * @var int
 */
const LDAP_OPT_DIAGNOSTIC_MESSAGE = 50;

/**
 * Latest session error number.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-error-number
 *
 * @var int
 */
const LDAP_OPT_ERROR_NUMBER = 49;

/**
 * Alias of <code>LDAP_OPT_DIAGNOSTIC_MESSAGE</code>.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-error-string
 *
 * @var int
 */
const LDAP_OPT_ERROR_STRING = 50;

/**
 * Sets/gets a space-separated of hosts when trying to connect.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-host-name
 *
 * @var int
 */
const LDAP_OPT_HOST_NAME = 48;

/**
 * Sets/gets the matched DN associated with the connection.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-matched-dn
 *
 * @var int
 */
const LDAP_OPT_MATCHED_DN = 51;

/**
 * Option for <code>ldap_set_option</code> to allow setting network timeout.
 * (Available as of PHP 5.3.0)
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-network-timeout
 *
 * @var int
 */
const LDAP_OPT_NETWORK_TIMEOUT = 20485;

/**
 * Specifies the LDAP protocol to be used (V2 or V3).
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-protocol-version
 *
 * @var int
 */
const LDAP_OPT_PROTOCOL_VERSION = 17;

/**
 * Specifies whether to automatically follow referrals returned
 * by the LDAP server.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-referrals
 *
 * @var int
 */
const LDAP_OPT_REFERRALS = 8;

/**
 * Determines whether or not the connection should be implicitly restarted.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-restart
 *
 * @var int
 */
const LDAP_OPT_RESTART = 9;

/**
 * Specifies a default list of server controls to be sent with each request.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-server-controls
 *
 * @var int
 */
const LDAP_OPT_SERVER_CONTROLS = 18;

/**
 * Specifies the maximum number of entries that can be
 * returned on a search operation.
 * <blockquote>
 * The actual size limit for operations is also bounded
 * by the server's configured maximum number of return entries.
 * The lesser of these two settings is the actual size limit.
 * </blockquote>
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-sizelimit
 *
 * @var int
 */
const LDAP_OPT_SIZELIMIT = 3;

/**
 * Specifies the number of seconds to wait for search results.
 * <blockquote>
 * The actual time limit for operations is also bounded
 * by the server's configured maximum time.
 * The lesser of these two settings is the actual time limit.
 * </blockquote>
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-timelimit
 *
 * @var int
 */
const LDAP_OPT_TIMELIMIT = 4;

/**
 * @var int
 */
const LDAP_OPT_TIMEOUT = 20482;

/**
 * Add entries to LDAP directory
 *
 * @param mixed $link_identifier
 * @param mixed $dn
 * @param mixed $entry
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-add.php
 */
function ldap_add($link_identifier, $dn, $entry)
{
}

/**
 * Bind to LDAP directory
 *
 * @param mixed $link_identifier
 * @param mixed|null $bind_rdn
 * @param mixed|null $bind_password
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-bind.php
 */
function ldap_bind($link_identifier, $bind_rdn = null, $bind_password = null)
{
}

/**
 * Alias of <code>ldap_unbind</code>
 *
 * @param mixed $link_identifier
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-close.php
 */
function ldap_close($link_identifier)
{
}

/**
 * Compare value of attribute found in entry specified with DN
 *
 * @param mixed $link_identifier
 * @param mixed $dn
 * @param mixed $attribute
 * @param mixed $value
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-compare.php
 */
function ldap_compare($link_identifier, $dn, $attribute, $value)
{
}

/**
 * Connect to an LDAP server
 *
 * @param mixed|null $hostname
 * @param mixed|null $port
 *
 * @return resource
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-connect.php
 */
function ldap_connect($hostname = null, $port = null)
{
}

/**
 * Send LDAP pagination control
 *
 * @param mixed $link
 * @param mixed $pagesize
 * @param mixed|null $iscritical
 * @param mixed|null $cookie
 *
 * @return bool
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-control-paged-result.php
 */
function ldap_control_paged_result($link, $pagesize, $iscritical = null, $cookie = null)
{
}

/**
 * Retrieve the LDAP pagination cookie
 *
 * @param mixed $link
 * @param mixed $result
 * @param mixed|null $cookie
 * @param mixed|null $estimated
 *
 * @return bool
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-control-paged-result-response.php
 */
function ldap_control_paged_result_response($link, $result, &$cookie = null, &$estimated = null)
{
}

/**
 * Count the number of entries in a search
 *
 * @param mixed $link_identifier
 * @param mixed $result_identifier
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-count-entries.php
 */
function ldap_count_entries($link_identifier, $result_identifier)
{
}

/**
 * Delete an entry from a directory
 *
 * @param mixed $link_identifier
 * @param mixed $dn
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-delete.php
 */
function ldap_delete($link_identifier, $dn)
{
}

/**
 * Convert DN to User Friendly Naming format
 *
 * @param mixed $dn
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-dn2ufn.php
 */
function ldap_dn2ufn($dn)
{
}

/**
 * Convert LDAP error number into string error message
 *
 * @param mixed $errno
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-err2str.php
 */
function ldap_err2str($errno)
{
}

/**
 * Return the LDAP error number of the last LDAP command
 *
 * @param mixed $link_identifier
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-errno.php
 */
function ldap_errno($link_identifier)
{
}

/**
 * Return the LDAP error message of the last LDAP command
 *
 * @param mixed $link_identifier
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-error.php
 */
function ldap_error($link_identifier)
{
}

/**
 * Escape a string for use in an LDAP filter or DN
 *
 * @param mixed $value
 * @param mixed|null $ignore
 * @param mixed|null $flags
 *
 * @return string
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-escape.php
 */
function ldap_escape($value, $ignore = null, $flags = null)
{
}

/**
 * Splits DN into its component parts
 *
 * @param mixed $dn
 * @param mixed $with_attrib
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-explode-dn.php
 */
function ldap_explode_dn($dn, $with_attrib): array
{
}

/**
 * Return first attribute
 *
 * @param mixed $link_identifier
 * @param mixed $result_entry_identifier
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-first-attribute.php
 */
function ldap_first_attribute($link_identifier, $result_entry_identifier)
{
}

/**
 * Return first result id
 *
 * @param mixed $link_identifier
 * @param mixed $result_identifier
 *
 * @return resource
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-first-entry.php
 */
function ldap_first_entry($link_identifier, $result_identifier)
{
}

/**
 * Return first reference
 *
 * @param mixed $link
 * @param mixed $result
 *
 * @return resource
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-first-reference.php
 */
function ldap_first_reference($link, $result)
{
}

/**
 * Free result memory
 *
 * @param mixed $link_identifier
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-free-result.php
 */
function ldap_free_result($link_identifier)
{
}

/**
 * Get attributes from a search result entry
 *
 * @param mixed $link_identifier
 * @param mixed $result_entry_identifier
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-get-attributes.php
 */
function ldap_get_attributes($link_identifier, $result_entry_identifier): array
{
}

/**
 * Get the DN of a result entry
 *
 * @param mixed $link_identifier
 * @param mixed $result_entry_identifier
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-get-dn.php
 */
function ldap_get_dn($link_identifier, $result_entry_identifier)
{
}

/**
 * Get all result entries
 *
 * @param mixed $link_identifier
 * @param mixed $result_identifier
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-get-entries.php
 */
function ldap_get_entries($link_identifier, $result_identifier): array
{
}

/**
 * Get the current value for given option
 *
 * @param mixed $link_identifier
 * @param mixed $option
 * @param mixed $retval
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-get-option.php
 */
function ldap_get_option($link_identifier, $option, &$retval)
{
}

/**
 * Get all values from a result entry
 *
 * @param mixed $link_identifier
 * @param mixed $result_entry_identifier
 * @param mixed $attribute
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-get-values.php
 */
function ldap_get_values($link_identifier, $result_entry_identifier, $attribute): array
{
}

/**
 * Get all binary values from a result entry
 *
 * @param mixed $link_identifier
 * @param mixed $result_entry_identifier
 * @param mixed $attribute
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-get-values-len.php
 */
function ldap_get_values_len($link_identifier, $result_entry_identifier, $attribute): array
{
}

/**
 * Single-level search
 *
 * @param mixed $link_identifier
 * @param mixed $base_dn
 * @param mixed $filter
 * @param mixed|null $attributes
 * @param mixed|null $attrsonly
 * @param mixed|null $sizelimit
 * @param mixed|null $timelimit
 * @param mixed|null $deref
 *
 * @return resource
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-list.php
 */
function ldap_list($link_identifier, $base_dn, $filter, $attributes = null, $attrsonly = null, $sizelimit = null, $timelimit = null, $deref = null)
{
}

/**
 * Add attribute values to current attributes
 *
 * @param mixed $link_identifier
 * @param mixed $dn
 * @param mixed $entry
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-mod-add.php
 */
function ldap_mod_add($link_identifier, $dn, $entry)
{
}

/**
 * Delete attribute values from current attributes
 *
 * @param mixed $link_identifier
 * @param mixed $dn
 * @param mixed $entry
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-mod-del.php
 */
function ldap_mod_del($link_identifier, $dn, $entry)
{
}

/**
 * Replace attribute values with new ones
 *
 * @param mixed $link_identifier
 * @param mixed $dn
 * @param mixed $entry
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-mod-replace.php
 */
function ldap_mod_replace($link_identifier, $dn, $entry)
{
}

/**
 * Alias of <code>ldap_mod_replace</code>
 *
 * @param mixed $link_identifier
 * @param mixed $dn
 * @param mixed $entry
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-modify.php
 */
function ldap_modify($link_identifier, $dn, $entry)
{
}

/**
 * Batch and execute modifications on an LDAP entry
 *
 * @param mixed $link_identifier
 * @param mixed $dn
 * @param array $modifications_info
 *
 * @return bool
 *
 * @since PHP 5.4 >= 5.4.26, PHP 5.5 >= 5.5.10, PHP 5.6 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-modify-batch.php
 */
function ldap_modify_batch($link_identifier, $dn, array $modifications_info)
{
}

/**
 * Get the next attribute in result
 *
 * @param mixed $link_identifier
 * @param mixed $result_entry_identifier
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-next-attribute.php
 */
function ldap_next_attribute($link_identifier, $result_entry_identifier)
{
}

/**
 * Get next result entry
 *
 * @param mixed $link_identifier
 * @param mixed $result_identifier
 *
 * @return resource
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-next-entry.php
 */
function ldap_next_entry($link_identifier, $result_identifier)
{
}

/**
 * Get next reference
 *
 * @param mixed $link
 * @param mixed $entry
 *
 * @return resource
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-next-reference.php
 */
function ldap_next_reference($link, $entry)
{
}

/**
 * Extract information from reference entry
 *
 * @param mixed $link
 * @param mixed $entry
 * @param mixed $referrals
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-parse-reference.php
 */
function ldap_parse_reference($link, $entry, &$referrals)
{
}

/**
 * Extract information from result
 *
 * @param mixed $link
 * @param mixed $result
 * @param mixed $errcode
 * @param mixed|null $matcheddn
 * @param mixed|null $errmsg
 * @param mixed|null $referrals
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-parse-result.php
 */
function ldap_parse_result($link, $result, &$errcode, &$matcheddn = null, &$errmsg = null, &$referrals = null)
{
}

/**
 * Read an entry
 *
 * @param mixed $link_identifier
 * @param mixed $base_dn
 * @param mixed $filter
 * @param mixed|null $attributes
 * @param mixed|null $attrsonly
 * @param mixed|null $sizelimit
 * @param mixed|null $timelimit
 * @param mixed|null $deref
 *
 * @return resource
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-read.php
 */
function ldap_read($link_identifier, $base_dn, $filter, $attributes = null, $attrsonly = null, $sizelimit = null, $timelimit = null, $deref = null)
{
}

/**
 * Modify the name of an entry
 *
 * @param mixed $link_identifier
 * @param mixed $dn
 * @param mixed $newrdn
 * @param mixed $newparent
 * @param mixed $deleteoldrdn
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-rename.php
 */
function ldap_rename($link_identifier, $dn, $newrdn, $newparent, $deleteoldrdn)
{
}

/**
 * Search LDAP tree
 *
 * @param mixed $link_identifier
 * @param mixed $base_dn
 * @param mixed $filter
 * @param mixed|null $attributes
 * @param mixed|null $attrsonly
 * @param mixed|null $sizelimit
 * @param mixed|null $timelimit
 * @param mixed|null $deref
 *
 * @return resource
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-search.php
 */
function ldap_search($link_identifier, $base_dn, $filter, $attributes = null, $attrsonly = null, $sizelimit = null, $timelimit = null, $deref = null)
{
}

/**
 * Set the value of the given option
 *
 * @param mixed $link_identifier
 * @param mixed $option
 * @param mixed $newval
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-set-option.php
 */
function ldap_set_option($link_identifier, $option, $newval)
{
}

/**
 * Set a callback function to do re-binds on referral chasing
 *
 * @param mixed $link
 * @param mixed $callback
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-set-rebind-proc.php
 */
function ldap_set_rebind_proc($link, $callback)
{
}

/**
 * Sort LDAP result entries on the client side
 *
 * @param mixed $link
 * @param mixed $result
 * @param mixed $sortfilter
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-sort.php
 */
function ldap_sort($link, $result, $sortfilter)
{
}

/**
 * Start TLS
 *
 * @param mixed $link_identifier
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-start-tls.php
 */
function ldap_start_tls($link_identifier)
{
}

/**
 * Unbind from LDAP directory
 *
 * @param mixed $link_identifier
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-unbind.php
 */
function ldap_unbind($link_identifier)
{
}
