<?php
// Start of extension: ldap
// - parsed on POSIX with PHP 7.2.3 (extension version 7.2.3)

/**
 * @var string
 */
const LDAP_CONTROL_ASSERT = '1.3.6.1.1.12';

/**
 * @var string
 */
const LDAP_CONTROL_DONTUSECOPY = '1.3.6.1.1.22';

/**
 * @var string
 */
const LDAP_CONTROL_MANAGEDSAIT = '2.16.840.1.113730.3.4.2';

/**
 * @var string
 */
const LDAP_CONTROL_PAGEDRESULTS = '1.2.840.113556.1.4.319';

/**
 * @var string
 */
const LDAP_CONTROL_PASSWORDPOLICYREQUEST = '1.3.6.1.4.1.42.2.27.8.5.1';

/**
 * @var string
 */
const LDAP_CONTROL_PASSWORDPOLICYRESPONSE = '1.3.6.1.4.1.42.2.27.8.5.1';

/**
 * @var string
 */
const LDAP_CONTROL_POST_READ = '1.3.6.1.1.13.2';

/**
 * @var string
 */
const LDAP_CONTROL_PRE_READ = '1.3.6.1.1.13.1';

/**
 * @var string
 */
const LDAP_CONTROL_PROXY_AUTHZ = '2.16.840.1.113730.3.4.18';

/**
 * @var string
 */
const LDAP_CONTROL_SORTREQUEST = '1.2.840.113556.1.4.473';

/**
 * @var string
 */
const LDAP_CONTROL_SORTRESPONSE = '1.2.840.113556.1.4.474';

/**
 * @var string
 */
const LDAP_CONTROL_SUBENTRIES = '1.3.6.1.4.1.4203.1.10.1';

/**
 * @var string
 */
const LDAP_CONTROL_SYNC = '1.3.6.1.4.1.4203.1.9.1.1';

/**
 * @var string
 */
const LDAP_CONTROL_SYNC_DONE = '1.3.6.1.4.1.4203.1.9.1.3';

/**
 * @var string
 */
const LDAP_CONTROL_SYNC_STATE = '1.3.6.1.4.1.4203.1.9.1.2';

/**
 * @var string
 */
const LDAP_CONTROL_VALUESRETURNFILTER = '1.2.826.0.1.3344810.2.3';

/**
 * @var string
 */
const LDAP_CONTROL_VLVREQUEST = '2.16.840.1.113730.3.4.9';

/**
 * @var string
 */
const LDAP_CONTROL_VLVRESPONSE = '2.16.840.1.113730.3.4.10';

/**
 * @var string
 */
const LDAP_CONTROL_X_DOMAIN_SCOPE = '1.2.840.113556.1.4.1339';

/**
 * @var string
 */
const LDAP_CONTROL_X_EXTENDED_DN = '1.2.840.113556.1.4.529';

/**
 * @var string
 */
const LDAP_CONTROL_X_INCREMENTAL_VALUES = '1.2.840.113556.1.4.802';

/**
 * @var string
 */
const LDAP_CONTROL_X_PERMISSIVE_MODIFY = '1.2.840.113556.1.4.1413';

/**
 * @var string
 */
const LDAP_CONTROL_X_SEARCH_OPTIONS = '1.2.840.113556.1.4.1340';

/**
 * @var string
 */
const LDAP_CONTROL_X_TREE_DELETE = '1.2.840.113556.1.4.805';

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
 * Extended Operation constant - Modify password (RFC 3062).
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-exop-modify-passwd
 *
 * @var string
 */
const LDAP_EXOP_MODIFY_PASSWD = '1.3.6.1.4.1.4203.1.11.1';

/**
 * Extended Operation Constant - Refresh (RFC 2589).
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-exop-refresh
 *
 * @var string
 */
const LDAP_EXOP_REFRESH = '1.3.6.1.4.1.1466.101.119.1';

/**
 * Extended Operation constant - Start TLS (RFC 4511).
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-exop-start-tls
 *
 * @var string
 */
const LDAP_EXOP_START_TLS = '1.3.6.1.4.1.1466.20037';

/**
 * Extended Operation Constant - Turn (RFC 4531).
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-exop-turn
 *
 * @var string
 */
const LDAP_EXOP_TURN = '1.3.6.1.1.19';

/**
 * Extended Operation Constant - WHOAMI (RFC 4532).
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-exop-who-am-i
 *
 * @var string
 */
const LDAP_EXOP_WHO_AM_I = '1.3.6.1.4.1.4203.1.11.3';

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
 * Specifies the number of seconds a connection needs to remain idle before TCP starts sending keepalive probes.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-x-keepalive-idle
 *
 * @var int
 */
const LDAP_OPT_X_KEEPALIVE_IDLE = 25344;

/**
 * Specifies the interval in seconds between individual keepalive probes.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-x-keepalive-interval
 *
 * @var int
 */
const LDAP_OPT_X_KEEPALIVE_INTERVAL = 25346;

/**
 * Specifies the maximum number of keepalive probes TCP should send before dropping the connection.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-x-keepalive-probes
 *
 * @var int
 */
const LDAP_OPT_X_KEEPALIVE_PROBES = 25345;

/**
 * @var int
 */
const LDAP_OPT_X_SASL_NOCANON = 24843;

/**
 * @var int
 */
const LDAP_OPT_X_SASL_USERNAME = 24844;

/**
 * @var int
 */
const LDAP_OPT_X_TLS_ALLOW = 3;

/**
 * Specifies the path of the directory containing CA certificates.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-x-tls-cacertdir
 *
 * @var int
 */
const LDAP_OPT_X_TLS_CACERTDIR = 24579;

/**
 * Specifies the full-path of the CA certificate file.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-x-tls-cacertfile
 *
 * @var int
 */
const LDAP_OPT_X_TLS_CACERTFILE = 24578;

/**
 * Specifies the full-path of the certificate file.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-x-tls-certfile
 *
 * @var int
 */
const LDAP_OPT_X_TLS_CERTFILE = 24580;

/**
 * Specifies the allowed cipher suite.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-x-tls-cipher-suite
 *
 * @var int
 */
const LDAP_OPT_X_TLS_CIPHER_SUITE = 24584;

/**
 * @var int
 */
const LDAP_OPT_X_TLS_CRL_ALL = 2;

/**
 * @var int
 */
const LDAP_OPT_X_TLS_CRL_NONE = 0;

/**
 * @var int
 */
const LDAP_OPT_X_TLS_CRL_PEER = 1;

/**
 * Specifies the CRL evaluation strategy. This must be one of: <code>LDAP_OPT_X_TLS_CRL_NONE</code>,<code>LDAP_OPT_X_TLS_CRL_PEER</code>, <code>LDAP_OPT_X_TLS_CRL_ALL</code>.
 * <blockquote>
 * This option is only valid for OpenSSL.
 * </blockquote>
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-x-tls-crlcheck
 *
 * @var int
 */
const LDAP_OPT_X_TLS_CRLCHECK = 24587;

/**
 * Specifies the full-path of the CRL file.
 * <blockquote>
 * This option is only valid for GnuTLS.
 * </blockquote>
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-x-tls-crlfile
 *
 * @var int
 */
const LDAP_OPT_X_TLS_CRLFILE = 24592;

/**
 * @var int
 */
const LDAP_OPT_X_TLS_DEMAND = 2;

/**
 * Specifies the full-path of the file containing the parameters for Diffie-Hellman ephemeral key exchange.
 * <blockquote>
 * This option is ignored by GnuTLS and Mozilla NSS.
 * </blockquote>
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-x-tls-dhfile
 *
 * @var int
 */
const LDAP_OPT_X_TLS_DHFILE = 24590;

/**
 * @var int
 */
const LDAP_OPT_X_TLS_HARD = 1;

/**
 * Specifies the full-path of the certificate key file.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-x-tls-keyfile
 *
 * @var int
 */
const LDAP_OPT_X_TLS_KEYFILE = 24581;

/**
 * @var int
 */
const LDAP_OPT_X_TLS_NEVER = 0;

/**
 * @var int
 */
const LDAP_OPT_X_TLS_PACKAGE = 24593;

/**
 * Specifies the minimum protocol version. This can be one of: <code>LDAP_OPT_X_TLS_PROTOCOL_SSL2</code>,<code>LDAP_OPT_X_TLS_PROTOCOL_SSL3</code>, <code>LDAP_OPT_X_TLS_PROTOCOL_TLS1_0</code>, <code>LDAP_OPT_X_TLS_PROTOCOL_TLS1_1</code>, <code>LDAP_OPT_X_TLS_PROTOCOL_TLS1_2</code>
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-x-tls-protocol-min
 *
 * @var int
 */
const LDAP_OPT_X_TLS_PROTOCOL_MIN = 24583;

/**
 * @var int
 */
const LDAP_OPT_X_TLS_PROTOCOL_SSL2 = 512;

/**
 * @var int
 */
const LDAP_OPT_X_TLS_PROTOCOL_SSL3 = 768;

/**
 * @var int
 */
const LDAP_OPT_X_TLS_PROTOCOL_TLS1_0 = 769;

/**
 * @var int
 */
const LDAP_OPT_X_TLS_PROTOCOL_TLS1_1 = 770;

/**
 * @var int
 */
const LDAP_OPT_X_TLS_PROTOCOL_TLS1_2 = 771;

/**
 * Sets/gets the random file when one of the system default ones are not available.
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-x-tls-random-file
 *
 * @var int
 */
const LDAP_OPT_X_TLS_RANDOM_FILE = 24585;

/**
 * Specifies the certificate checking checking strategy. This must be one of: <code>LDAP_OPT_X_TLS_NEVER</code>,<code>LDAP_OPT_X_TLS_HARD</code>, <code>LDAP_OPT_X_TLS_DEMAND</code>,
 * <code>LDAP_OPT_X_TLS_ALLOW</code>, <code>LDAP_OPT_X_TLS_TRY</code>.
 * (Available as of PHP 7.0.0)
 *
 * @link http://www.php.net/manual/en/ldap.constants.php#constant.ldap-opt-x-tls-require-cert
 *
 * @var int
 */
const LDAP_OPT_X_TLS_REQUIRE_CERT = 24582;

/**
 * @var int
 */
const LDAP_OPT_X_TLS_TRY = 4;

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
function ldap_add($link_identifier, $dn, $entry): bool
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
function ldap_bind($link_identifier, $bind_rdn = null, $bind_password = null): bool
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
function ldap_control_paged_result($link, $pagesize, $iscritical = null, $cookie = null): bool
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
function ldap_control_paged_result_response($link, $result, &$cookie = null, &$estimated = null): bool
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
function ldap_count_entries($link_identifier, $result_identifier): int
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
function ldap_delete($link_identifier, $dn): bool
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
function ldap_dn2ufn($dn): string
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
function ldap_err2str($errno): string
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
function ldap_errno($link_identifier): int
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
function ldap_error($link_identifier): string
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
function ldap_escape($value, $ignore = null, $flags = null): string
{
}

/**
 * Performs an extended operation
 *
 * @param mixed $link
 * @param mixed $reqoid
 * @param mixed|null $reqdata
 * @param mixed|null $servercontrols
 * @param mixed|null $retdata
 * @param mixed|null $retoid
 *
 * @return mixed
 *
 * @since PHP 7 >= 7.2.0
 *
 * @link http://www.php.net/manual/en/function.ldap-exop.php
 */
function ldap_exop($link, $reqoid, $reqdata = null, $servercontrols = null, &$retdata = null, &$retoid = null)
{
}

/**
 * PASSWD extended operation helper
 *
 * @param mixed $link
 * @param mixed $user
 * @param mixed $oldpw
 * @param mixed $newpw
 *
 * @return mixed
 *
 * @since PHP 7 >= 7.2.0
 *
 * @link http://www.php.net/manual/en/function.ldap-exop-passwd.php
 */
function ldap_exop_passwd($link, $user, $oldpw, $newpw)
{
}

/**
 * WHOAMI extended operation helper
 *
 * @param mixed $link
 *
 * @return string
 *
 * @since PHP 7 >= 7.2.0
 *
 * @link http://www.php.net/manual/en/function.ldap-exop-whoami.php
 */
function ldap_exop_whoami($link): string
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
function ldap_first_attribute($link_identifier, $result_entry_identifier): string
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
function ldap_free_result($link_identifier): bool
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
function ldap_get_dn($link_identifier, $result_entry_identifier): string
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
function ldap_get_option($link_identifier, $option, &$retval): bool
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
function ldap_mod_add($link_identifier, $dn, $entry): bool
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
function ldap_mod_del($link_identifier, $dn, $entry): bool
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
function ldap_mod_replace($link_identifier, $dn, $entry): bool
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
 * @param array[] $modifications_info
 *
 * @return bool
 *
 * @since PHP 5.4 >= 5.4.26, PHP 5.5 >= 5.5.10, PHP 5.6 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-modify-batch.php
 */
function ldap_modify_batch($link_identifier, $dn, $modifications_info): bool
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
function ldap_next_attribute($link_identifier, $result_entry_identifier): string
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
 * Parse result object from an LDAP extended operation
 *
 * @param mixed $link
 * @param mixed $result
 * @param mixed $retdata
 * @param mixed $retoid
 *
 * @return bool
 *
 * @since PHP 7 >= 7.2.0
 *
 * @link http://www.php.net/manual/en/function.ldap-parse-exop.php
 */
function ldap_parse_exop($link, $result, &$retdata, &$retoid): bool
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
function ldap_parse_reference($link, $entry, &$referrals): bool
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
function ldap_parse_result($link, $result, &$errcode, &$matcheddn = null, &$errmsg = null, &$referrals = null): bool
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
function ldap_rename($link_identifier, $dn, $newrdn, $newparent, $deleteoldrdn): bool
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
function ldap_set_option($link_identifier, $option, $newval): bool
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
function ldap_set_rebind_proc($link, $callback): bool
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
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.ldap-sort.php
 */
function ldap_sort($link, $result, $sortfilter): bool
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
function ldap_start_tls($link_identifier): bool
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
function ldap_unbind($link_identifier): bool
{
}
