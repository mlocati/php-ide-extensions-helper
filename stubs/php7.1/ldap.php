<?php
// Start of extension: ldap
// - parsed on POSIX with PHP 7.1.15 (extension version 7.1.15)

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
 * Each value specified through <code>values</code> is added (as
 * an additional value) to the attribute named by
 * <code>attrib</code>.
 *
 * @link http://www.php.net/manual/en/function.ldap-modify-batch.php
 *
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
 * Each value specified through <code>values</code> is removed
 * from the attribute named by <code>attrib</code>. Any value of
 * the attribute not contained in the <code>values</code> array
 * will remain untouched.
 *
 * @link http://www.php.net/manual/en/function.ldap-modify-batch.php
 *
 * @var int
 */
const LDAP_MODIFY_BATCH_REMOVE = 2;

/**
 * All values are removed from the attribute named by
 * <code>attrib</code>. A <code>values</code> entry must
 * not be provided.
 *
 * @link http://www.php.net/manual/en/function.ldap-modify-batch.php
 *
 * @var int
 */
const LDAP_MODIFY_BATCH_REMOVE_ALL = 18;

/**
 * All current values of the attribute named by
 * <code>attrib</code> are replaced with the values specified
 * through <code>values</code>.
 *
 * @link http://www.php.net/manual/en/function.ldap-modify-batch.php
 *
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
 * 7.1
 *
 * @link http://www.php.net/manual/en/function.ldap-get-option.php
 *
 * @var int
 */
const LDAP_OPT_X_TLS_CRL_ALL = 2;

/**
 * 7.1
 *
 * @link http://www.php.net/manual/en/function.ldap-get-option.php
 *
 * @var int
 */
const LDAP_OPT_X_TLS_CRL_NONE = 0;

/**
 * 7.1
 *
 * @link http://www.php.net/manual/en/function.ldap-get-option.php
 *
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
 * 7.1
 *
 * @link http://www.php.net/manual/en/function.ldap-get-option.php
 *
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
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param string $dn The distinguished name of an LDAP entity.
 * @param array $entry An array that specifies the information about the entry. The values in
 * the entries are indexed by individual attributes.
 * In case of multiple values for an attribute, they are indexed using
 * integers starting with 0.
 * <informalexample>
 * <blockquote><pre>
 * &lt;?php
 * $entry["attribute1"] = "value";
 * $entry["attribute2"][0] = "value1";
 * $entry["attribute2"][1] = "value2";
 * ?&gt;
 * </pre></blockquote>
 * </informalexample>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-add.php
 */
function ldap_add($link_identifier, string $dn, array $entry): bool
{
}

/**
 * Bind to LDAP directory
 *
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param string|null $bind_rdn
 * @param string|null $bind_password
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-bind.php
 */
function ldap_bind($link_identifier, string $bind_rdn = null, string $bind_password = null): bool
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
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param string $dn The distinguished name of an LDAP entity.
 * @param string $attribute The attribute name.
 * @param string $value The compared value.
 *
 * @return mixed Returns <code>TRUE</code> if <code>value</code> matches otherwise returns
 * <code>FALSE</code>. Returns -1 on error.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-compare.php
 */
function ldap_compare($link_identifier, string $dn, string $attribute, string $value)
{
}

/**
 * Connect to an LDAP server
 *
 * @param string|null $host This field supports using a hostname or, with OpenLDAP 2.x.x and
 * later, a full LDAP URI of the form <code>ldap://hostname:port</code>
 * or <code>ldaps://hostname:port</code> for SSL encryption.
 * @param int|null $port The port to connect to. Not used when using LDAP URIs.
 *
 * @return resource Returns a positive LDAP link identifier when the provided hostname/port combination or LDAP URI
 * seems plausible. It's a syntactic check of the provided parameters but the server(s) will not
 * be contacted! If the syntactic check fails it returns <code>FALSE</code>.
 * When OpenLDAP 2.x.x is used, <code>ldap_connect</code> will always
 * return a <code>resource</code> as it does not actually connect but just
 * initializes the connecting parameters. The actual connect happens with
 * the next calls to ldap_* funcs, usually with
 * <code>ldap_bind</code>.
 * If no arguments are specified then the link identifier of the already
 * opened link will be returned.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-connect.php
 */
function ldap_connect(string $host = null, int $port = 389)
{
}

/**
 * Send LDAP pagination control
 *
 * @param resource $link An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param int $pagesize The number of entries by page.
 * @param bool|null $iscritical Indicates whether the pagination is critical or not.
 * If true and if the server doesn't support pagination, the search
 * will return no result.
 * @param string|null $cookie An opaque structure sent by the server
 * (<code>ldap_control_paged_result_response</code>).
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-control-paged-result.php
 */
function ldap_control_paged_result($link, int $pagesize, bool $iscritical = false, string $cookie = ""): bool
{
}

/**
 * Retrieve the LDAP pagination cookie
 *
 * @param resource $link An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param resource $result
 * @param string $cookie An opaque structure sent by the server.
 * @param int $estimated The estimated number of entries to retrieve.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-control-paged-result-response.php
 */
function ldap_control_paged_result_response($link, $result, string &$cookie = null, int &$estimated = null): bool
{
}

/**
 * Count the number of entries in a search
 *
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param resource $result_identifier The internal LDAP result.
 *
 * @return int Returns number of entries in the result or <code>FALSE</code> on error.
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
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param string $dn The distinguished name of an LDAP entity.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-delete.php
 */
function ldap_delete($link_identifier, string $dn): bool
{
}

/**
 * Convert DN to User Friendly Naming format
 *
 * @param string $dn The distinguished name of an LDAP entity.
 *
 * @return string Returns the user friendly name.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-dn2ufn.php
 */
function ldap_dn2ufn(string $dn): string
{
}

/**
 * Convert LDAP error number into string error message
 *
 * @param int $errno The error number.
 *
 * @return string Returns the error message, as a string.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-err2str.php
 */
function ldap_err2str(int $errno): string
{
}

/**
 * Return the LDAP error number of the last LDAP command
 *
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 *
 * @return int Return the LDAP error number of the last LDAP command for this
 * link.
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
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 *
 * @return string Returns string error message.
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
 * @param string $value The value to escape.
 * @param string $ignore Characters to ignore when escaping.
 * @param int $flags The context the escaped string will be used in:
 * <code>LDAP_ESCAPE_FILTER</code> for filters to be used with
 * <code>ldap_search</code>, or
 * <code>LDAP_ESCAPE_DN</code> for DNs.
 *
 * @return string Returns the escaped string.
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-escape.php
 */
function ldap_escape(string $value, string $ignore = null, int $flags = null): string
{
}

/**
 * Splits DN into its component parts
 *
 * @param string $dn The distinguished name of an LDAP entity.
 * @param int $with_attrib Used to request if the RDNs are returned with only values or their
 * attributes as well. To get RDNs with the attributes (i.e. in
 * attribute=value format) set <code>with_attrib</code> to 0
 * and to get only values set it to 1.
 *
 * @return array Returns an array of all DN components, or <code>FALSE</code> on failure.
 * The first element in the array has <code>count</code> key and
 * represents the number of returned values, next elements are numerically
 * indexed DN components.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-explode-dn.php
 */
function ldap_explode_dn(string $dn, int $with_attrib): array
{
}

/**
 * Return first attribute
 *
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param resource $result_entry_identifier
 *
 * @return string Returns the first attribute in the entry on success and <code>FALSE</code> on
 * error.
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
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param resource $result_identifier
 *
 * @return resource Returns the result entry identifier for the first entry on success and
 * <code>FALSE</code> on error.
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
 * @param resource $link
 * @param resource $result
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
 * @param resource $result_identifier
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-free-result.php
 */
function ldap_free_result($result_identifier): bool
{
}

/**
 * Get attributes from a search result entry
 *
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param resource $result_entry_identifier
 *
 * @return array Returns a complete entry information in a multi-dimensional array
 * on success and <code>FALSE</code> on error.
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
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param resource $result_entry_identifier
 *
 * @return string Returns the DN of the result entry and <code>FALSE</code> on error.
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
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param resource $result_identifier
 *
 * @return array Returns a complete result information in a multi-dimensional array on
 * success and <code>FALSE</code> on error.
 * The structure of the array is as follows.
 * The attribute index is converted to lowercase. (Attributes are
 * case-insensitive for directory servers, but not when used as
 * array indices.)
 * <informalexample>
 * <blockquote><pre>
 * return_value["count"] = number of entries in the result
 * return_value[0] : refers to the details of first entry
 * return_value[i]["dn"] = DN of the ith entry in the result
 * return_value[i]["count"] = number of attributes in ith entry
 * return_value[i][j] = NAME of the jth attribute in the ith entry in the result
 * return_value[i]["attribute"]["count"] = number of values for
 * attribute in ith entry
 * return_value[i]["attribute"][j] = jth value of attribute in ith entry
 * </pre></blockquote>
 * </informalexample>
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
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param int $option The parameter <code>option</code> can be one of:
 * <table>
 * <thead>
 * <tr>
 * <td>Option</td><td>Type</td><td>since</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td><code>LDAP_OPT_DEREF</code></td><td>integer</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_SIZELIMIT</code></td><td>integer</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_TIMELIMIT</code></td><td>integer</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_NETWORK_TIMEOUT</code></td><td>integer</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_PROTOCOL_VERSION</code></td><td>integer</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_ERROR_NUMBER</code></td><td>integer</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_DIAGNOSTIC_MESSAGE</code></td><td>integer</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_REFERRALS</code></td><td>bool</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_RESTART</code></td><td>bool</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_HOST_NAME</code></td><td>string</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_ERROR_STRING</code></td><td>string</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_MATCHED_DN</code></td><td>string</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_SERVER_CONTROLS</code></td><td>array</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_CLIENT_CONTROLS</code></td><td>array</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_KEEPALIVE_IDLE</code></td><td>int</td><td>7.1</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_KEEPALIVE_PROBES</code></td><td>int</td><td>7.1</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_KEEPALIVE_INTERVAL</code></td><td>int</td><td>7.1</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_CACERTDIR</code></td><td>string</td><td>7.1</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_CACERTFILE</code></td><td>string</td><td>7.1</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_CERTFILE</code></td><td>string</td><td>7.1</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_CIPHER_SUITE</code></td><td>string</td><td>7.1</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_CRLCHECK</code></td><td>integer</td><td>7.1</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_CRL_NONE</code></td><td>integer</td><td>7.1</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_CRL_PEER</code></td><td>integer</td><td>7.1</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_CRL_ALL</code></td><td>integer</td><td>7.1</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_CRLFILE</code></td><td>string</td><td>7.1</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_DHFILE</code></td><td>string</td><td>7.1</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_KEYILE</code></td><td>string</td><td>7.1</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_PACKAGE</code></td><td>string</td><td>7.1</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_PROTOCOL_MIN</code></td><td>integer</td><td>7.1</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_RANDOM_FILE</code></td><td>string</td><td>7.1</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_REQUIRE_CERT</code></td><td>integer</td><td/>
 * </tr>
 * </tbody>
 * </table>
 * @param mixed $retval This will be set to the option value.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-get-option.php
 */
function ldap_get_option($link_identifier, int $option, &$retval): bool
{
}

/**
 * Get all values from a result entry
 *
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param resource $result_entry_identifier
 * @param string $attribute
 *
 * @return array Returns an array of values for the attribute on success and <code>FALSE</code> on
 * error. The number of values can be found by indexing "count" in the
 * resultant array. Individual values are accessed by integer index in the
 * array. The first index is 0.
 * LDAP allows more than one entry for an attribute, so it can, for example,
 * store a number of email addresses for one person's directory entry all
 * labeled with the attribute "mail"
 * <informalexample>
 * <literallayout>
 * return_value["count"] = number of values for attribute
 * return_value[0] = first value of attribute
 * return_value[i] = ith value of attribute
 * </literallayout>
 * </informalexample>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-get-values.php
 */
function ldap_get_values($link_identifier, $result_entry_identifier, string $attribute): array
{
}

/**
 * Get all binary values from a result entry
 *
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param resource $result_entry_identifier
 * @param string $attribute
 *
 * @return array Returns an array of values for the attribute on success and <code>FALSE</code> on
 * error. Individual values are accessed by integer index in the array. The
 * first index is 0. The number of values can be found by indexing "count"
 * in the resultant array.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-get-values-len.php
 */
function ldap_get_values_len($link_identifier, $result_entry_identifier, string $attribute): array
{
}

/**
 * Single-level search
 *
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param string $base_dn The base DN for the directory.
 * @param string $filter
 * @param array $attributes An array of the required attributes, e.g. array("mail", "sn", "cn").
 * Note that the "dn" is always returned irrespective of which attributes
 * types are requested.
 * @param int $attrsonly Should be set to 1 if only attribute types are wanted. If set to 0
 * both attributes types and attribute values are fetched which is the
 * default behaviour.
 * @param int $sizelimit Enables you to limit the count of entries fetched. Setting this to 0
 * means no limit.
 * @param int $timelimit Sets the number of seconds how long is spend on the search. Setting
 * this to 0 means no limit.
 * @param int $deref Specifies how aliases should be handled during the search. It can be
 * one of the following:
 * <ul>
 * <code>LDAP_DEREF_NEVER</code> - (default) aliases are never
 * dereferenced.
 * <code>LDAP_DEREF_SEARCHING</code> - aliases should be
 * dereferenced during the search but not when locating the base object
 * of the search.
 * <code>LDAP_DEREF_FINDING</code> - aliases should be
 * dereferenced when locating the base object but not during the search.
 * <code>LDAP_DEREF_ALWAYS</code> - aliases should be dereferenced
 * always.
 * </ul>
 *
 * @return resource Returns a search result identifier or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-list.php
 */
function ldap_list($link_identifier, string $base_dn, string $filter, array $attributes = null, int $attrsonly = null, int $sizelimit = null, int $timelimit = null, int $deref = null)
{
}

/**
 * Add attribute values to current attributes
 *
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param string $dn The distinguished name of an LDAP entity.
 * @param array $entry An associative array listing the attirbute values to add. If an attribute was not existing yet it will be added. If an attribute is existing you can only add values to it if it supports multiple values.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-mod-add.php
 */
function ldap_mod_add($link_identifier, string $dn, array $entry): bool
{
}

/**
 * Delete attribute values from current attributes
 *
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param string $dn The distinguished name of an LDAP entity.
 * @param array $entry
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-mod-del.php
 */
function ldap_mod_del($link_identifier, string $dn, array $entry): bool
{
}

/**
 * Replace attribute values with new ones
 *
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param string $dn The distinguished name of an LDAP entity.
 * @param array $entry An associative array listing the attributes to replace. Sending an empty array as value will remove the attribute, while sending an attribute not existing yet on this entry will add it.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-mod-replace.php
 */
function ldap_mod_replace($link_identifier, string $dn, array $entry): bool
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
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param string $dn The distinguished name of an LDAP entity.
 * @param array $entry An array that specifies the modifications to make. Each entry in this
 * array is an associative array with two or three keys:
 * <code>attrib</code> maps to the name of the attribute to modify,
 * <code>modtype</code> maps to the type of modification to perform,
 * and (depending on the type of modification) <code>values</code>
 * maps to an array of attribute values relevant to the modification.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5.4 >= 5.4.26, PHP 5.5 >= 5.5.10, PHP 5.6 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-modify-batch.php
 */
function ldap_modify_batch($link_identifier, string $dn, array $entry): bool
{
}

/**
 * Get the next attribute in result
 *
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param resource $result_entry_identifier
 *
 * @return string Returns the next attribute in an entry on success and <code>FALSE</code> on
 * error.
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
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param resource $result_entry_identifier
 *
 * @return resource Returns entry identifier for the next entry in the result whose entries
 * are being read starting with <code>ldap_first_entry</code>. If
 * there are no more entries in the result then it returns <code>FALSE</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-next-entry.php
 */
function ldap_next_entry($link_identifier, $result_entry_identifier)
{
}

/**
 * Get next reference
 *
 * @param resource $link
 * @param resource $entry
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
 * @param resource $link
 * @param resource $entry
 * @param array $referrals
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-parse-reference.php
 */
function ldap_parse_reference($link, $entry, array &$referrals): bool
{
}

/**
 * Extract information from result
 *
 * @param resource $link An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param resource $result
 * @param int $errcode A reference to a variable that will be set to the LDAP error code in
 * the result, or <code>0</code> if no error occurred.
 * @param string $matcheddn A reference to a variable that will be set to a matched DN if one was
 * recognised within the request, otherwise it will be set to <code>NULL</code>.
 * @param string $errmsg A reference to a variable that will be set to the LDAP error message in
 * the result, or an empty string if no error occurred.
 * @param array $referrals A reference to a variable that will be set to an <code>array</code> set
 * to all of the referral strings in the result, or an empty array if no
 * referrals were returned.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-parse-result.php
 */
function ldap_parse_result($link, $result, int &$errcode, string &$matcheddn = null, string &$errmsg = null, array &$referrals = null): bool
{
}

/**
 * Read an entry
 *
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param string $base_dn The base DN for the directory.
 * @param string $filter An empty filter is not allowed. If you want to retrieve absolutely all
 * information for this entry, use a filter of
 * <code>objectClass=*</code>. If you know which entry types are
 * used on the directory server, you might use an appropriate filter such
 * as <code>objectClass=inetOrgPerson</code>.
 * @param array $attributes An array of the required attributes, e.g. array("mail", "sn", "cn").
 * Note that the "dn" is always returned irrespective of which attributes
 * types are requested.
 * @param int $attrsonly Should be set to 1 if only attribute types are wanted. If set to 0
 * both attributes types and attribute values are fetched which is the
 * default behaviour.
 * @param int $sizelimit Enables you to limit the count of entries fetched. Setting this to 0
 * means no limit.
 * @param int $timelimit Sets the number of seconds how long is spend on the search. Setting
 * this to 0 means no limit.
 * @param int $deref Specifies how aliases should be handled during the search. It can be
 * one of the following:
 * <ul>
 * <code>LDAP_DEREF_NEVER</code> - (default) aliases are never
 * dereferenced.
 * <code>LDAP_DEREF_SEARCHING</code> - aliases should be
 * dereferenced during the search but not when locating the base object
 * of the search.
 * <code>LDAP_DEREF_FINDING</code> - aliases should be
 * dereferenced when locating the base object but not during the search.
 * <code>LDAP_DEREF_ALWAYS</code> - aliases should be dereferenced
 * always.
 * </ul>
 *
 * @return resource Returns a search result identifier or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-read.php
 */
function ldap_read($link_identifier, string $base_dn, string $filter, array $attributes = null, int $attrsonly = null, int $sizelimit = null, int $timelimit = null, int $deref = null)
{
}

/**
 * Modify the name of an entry
 *
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param string $dn The distinguished name of an LDAP entity.
 * @param string $newrdn The new RDN.
 * @param string $newparent The new parent/superior entry.
 * @param bool $deleteoldrdn If <code>TRUE</code> the old RDN value(s) is removed, else the old RDN value(s)
 * is retained as non-distinguished values of the entry.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-rename.php
 */
function ldap_rename($link_identifier, string $dn, string $newrdn, string $newparent, bool $deleteoldrdn): bool
{
}

/**
 * Search LDAP tree
 *
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param string $base_dn The base DN for the directory.
 * @param string $filter The search filter can be simple or advanced, using boolean operators in
 * the format described in the LDAP documentation (see the Netscape Directory SDK or
 * RFC4515 for full
 * information on filters).
 * @param array $attributes An array of the required attributes, e.g. <code>array("mail", "sn", "cn")</code>.
 * Note that the "dn" is always returned irrespective of which attributes
 * types are requested.
 * @param int $attrsonly Should be set to 1 if only attribute types are wanted. If set to 0
 * both attributes types and attribute values are fetched which is the
 * default behaviour.
 * @param int $sizelimit Enables you to limit the count of entries fetched. Setting this to 0
 * means no limit.
 * @param int $timelimit Sets the number of seconds how long is spend on the search. Setting
 * this to 0 means no limit.
 * @param int $deref Specifies how aliases should be handled during the search. It can be
 * one of the following:
 * <ul>
 * <code>LDAP_DEREF_NEVER</code> - (default) aliases are never
 * dereferenced.
 * <code>LDAP_DEREF_SEARCHING</code> - aliases should be
 * dereferenced during the search but not when locating the base object
 * of the search.
 * <code>LDAP_DEREF_FINDING</code> - aliases should be
 * dereferenced when locating the base object but not during the search.
 * <code>LDAP_DEREF_ALWAYS</code> - aliases should be dereferenced
 * always.
 * </ul>
 *
 * @return resource Returns a search result identifier or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-search.php
 */
function ldap_search($link_identifier, string $base_dn, string $filter, array $attributes = null, int $attrsonly = null, int $sizelimit = null, int $timelimit = null, int $deref = null)
{
}

/**
 * Set the value of the given option
 *
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param int $option The parameter <code>option</code> can be one of:
 * <table>
 * <thead>
 * <tr>
 * <td>Option</td><td>Type</td><td>Available since</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td><code>LDAP_OPT_DEREF</code></td><td>integer</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_SIZELIMIT</code></td><td>integer</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_TIMELIMIT</code></td><td>integer</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_NETWORK_TIMEOUT</code></td><td>integer</td><td>PHP 5.3.0</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_PROTOCOL_VERSION</code></td><td>integer</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_ERROR_NUMBER</code></td><td>integer</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_REFERRALS</code></td><td>bool</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_RESTART</code></td><td>bool</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_HOST_NAME</code></td><td>string</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_ERROR_STRING</code></td><td>string</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_DIAGNOSTIC_MESSAGE</code></td><td>string</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_MATCHED_DN</code></td><td>string</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_SERVER_CONTROLS</code></td><td>array</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_CLIENT_CONTROLS</code></td><td>array</td><td/>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_KEEPALIVE_IDLE</code></td><td>int</td><td>PHP 7.1.0</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_KEEPALIVE_PROBES</code></td><td>int</td><td>PHP 7.1.0</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_KEEPALIVE_INTERVAL</code></td><td>int</td><td>PHP 7.1.0</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_CACERTDIR</code></td><td>string</td><td>PHP 7.1.0</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_CACERTFILE</code></td><td>string</td><td>PHP 7.1.0</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_CERTFILE</code></td><td>string</td><td>PHP 7.1.0</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_CIPHER_SUITE</code></td><td>string</td><td>PHP 7.1.0</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_CRLCHECK</code></td><td>integer</td><td>PHP 7.1.0</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_CRLFILE</code></td><td>string</td><td>PHP 7.1.0</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_DHFILE</code></td><td>string</td><td>PHP 7.1.0</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_KEYFILE</code></td><td>string</td><td>PHP 7.1.0</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_PROTOCOL_MIN</code></td><td>integer</td><td>PHP 7.1.0</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_RANDOM_FILE</code></td><td>string</td><td>PHP 7.1.0</td>
 * </tr>
 * <tr>
 * <td><code>LDAP_OPT_X_TLS_REQUIRE_CERT</code></td><td>integer</td><td>PHP 7.0.5</td>
 * </tr>
 * </tbody>
 * </table>
 * @param mixed $newval The new value for the specified <code>option</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-set-option.php
 */
function ldap_set_option($link_identifier, int $option, $newval): bool
{
}

/**
 * Set a callback function to do re-binds on referral chasing
 *
 * @param resource $link
 * @param callable $callback
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-set-rebind-proc.php
 */
function ldap_set_rebind_proc($link, callable $callback): bool
{
}

/**
 * Sort LDAP result entries on the client side
 *
 * @param resource $link An LDAP link identifier, returned by <code>ldap_connect</code>.
 * @param resource $result An search result identifier, returned by
 * <code>ldap_search</code>.
 * @param string $sortfilter The attribute to use as a key in the sort.
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.ldap-sort.php
 */
function ldap_sort($link, $result, string $sortfilter): bool
{
}

/**
 * Start TLS
 *
 * @param resource $link
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-start-tls.php
 */
function ldap_start_tls($link): bool
{
}

/**
 * Unbind from LDAP directory
 *
 * @param resource $link_identifier An LDAP link identifier, returned by <code>ldap_connect</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ldap-unbind.php
 */
function ldap_unbind($link_identifier): bool
{
}
