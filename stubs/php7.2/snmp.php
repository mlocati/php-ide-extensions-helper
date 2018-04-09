<?php
// Start of extension: snmp
// - parsed on POSIX with PHP 7.2.3 (extension version 0.1)

/**
 * @link http://www.php.net/manual/en/snmp.constants.php#constant.snmp-bit-str
 *
 * @var int
 */
const SNMP_BIT_STR = 3;

/**
 * @link http://www.php.net/manual/en/snmp.constants.php#constant.snmp-counter
 *
 * @var int
 */
const SNMP_COUNTER = 66;

/**
 * @link http://www.php.net/manual/en/snmp.constants.php#constant.snmp-counter64
 *
 * @var int
 */
const SNMP_COUNTER64 = 70;

/**
 * @link http://www.php.net/manual/en/snmp.constants.php#constant.snmp-integer
 *
 * @var int
 */
const SNMP_INTEGER = 2;

/**
 * @link http://www.php.net/manual/en/snmp.constants.php#constant.snmp-ipaddress
 *
 * @var int
 */
const SNMP_IPADDRESS = 64;

/**
 * @link http://www.php.net/manual/en/snmp.constants.php#constant.snmp-null
 *
 * @var int
 */
const SNMP_NULL = 5;

/**
 * @link http://www.php.net/manual/en/snmp.constants.php#constant.snmp-object-id
 *
 * @var int
 */
const SNMP_OBJECT_ID = 6;

/**
 * @link http://www.php.net/manual/en/snmp.constants.php#constant.snmp-octet-str
 *
 * @var int
 */
const SNMP_OCTET_STR = 4;

/**
 * As of 5.2.0
 *
 * @link http://www.php.net/manual/en/snmp.constants.php#constant.snmp-oid-output-full
 *
 * @var int
 */
const SNMP_OID_OUTPUT_FULL = 3;

/**
 * As of 5.4.0
 *
 * @link http://www.php.net/manual/en/snmp.constants.php#constant.snmp-oid-output-module
 *
 * @var int
 */
const SNMP_OID_OUTPUT_MODULE = 2;

/**
 * As of 5.4.0
 *
 * @link http://www.php.net/manual/en/snmp.constants.php#constant.snmp-oid-output-none
 *
 * @var int
 */
const SNMP_OID_OUTPUT_NONE = 6;

/**
 * As of 5.2.0
 *
 * @link http://www.php.net/manual/en/snmp.constants.php#constant.snmp-oid-output-numeric
 *
 * @var int
 */
const SNMP_OID_OUTPUT_NUMERIC = 4;

/**
 * As of 5.4.0
 *
 * @link http://www.php.net/manual/en/snmp.constants.php#constant.snmp-oid-output-suffix
 *
 * @var int
 */
const SNMP_OID_OUTPUT_SUFFIX = 1;

/**
 * As of 5.4.0
 *
 * @link http://www.php.net/manual/en/snmp.constants.php#constant.snmp-oid-output-ucd
 *
 * @var int
 */
const SNMP_OID_OUTPUT_UCD = 5;

/**
 * @link http://www.php.net/manual/en/snmp.constants.php#constant.snmp-opaque
 *
 * @var int
 */
const SNMP_OPAQUE = 68;

/**
 * @link http://www.php.net/manual/en/snmp.constants.php#constant.snmp-timeticks
 *
 * @var int
 */
const SNMP_TIMETICKS = 67;

/**
 * @link http://www.php.net/manual/en/snmp.constants.php#constant.snmp-uinteger
 *
 * @var int
 */
const SNMP_UINTEGER = 71;

/**
 * @link http://www.php.net/manual/en/snmp.constants.php#constant.snmp-unsigned
 *
 * @var int
 */
const SNMP_UNSIGNED = 66;

/**
 * @link http://www.php.net/manual/en/snmp.constants.php#constant.snmp-value-library
 *
 * @var int
 */
const SNMP_VALUE_LIBRARY = 0;

/**
 * @link http://www.php.net/manual/en/snmp.constants.php#constant.snmp-value-object
 *
 * @var int
 */
const SNMP_VALUE_OBJECT = 2;

/**
 * @link http://www.php.net/manual/en/snmp.constants.php#constant.snmp-value-plain
 *
 * @var int
 */
const SNMP_VALUE_PLAIN = 1;

/**
 * Represents <code>SNMP</code> session.
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.snmp.php
 */
class SNMP
{
    /**
     * @var int
     */
    const ERRNO_ANY = 126;

    /**
     * @var int
     */
    const ERRNO_ERROR_IN_REPLY = 8;

    /**
     * @var int
     */
    const ERRNO_GENERIC = 2;

    /**
     * @var int
     */
    const ERRNO_MULTIPLE_SET_QUERIES = 64;

    /**
     * @var int
     */
    const ERRNO_NOERROR = 0;

    /**
     * @var int
     */
    const ERRNO_OID_NOT_INCREASING = 16;

    /**
     * @var int
     */
    const ERRNO_OID_PARSING_ERROR = 32;

    /**
     * @var int
     */
    const ERRNO_TIMEOUT = 4;

    /**
     * @var int
     */
    const VERSION_1 = 0;

    /**
     * @var int
     */
    const VERSION_2c = 1;

    /**
     * @var int
     */
    const VERSION_3 = 3;

    /**
     * Creates SNMP instance representing session to remote <code>SNMP</code> agent
     *
     * @param int $version <code>SNMP</code> protocol version:
     * <code>SNMP::VERSION_1</code>,
     * <code>SNMP::VERSION_2C</code>,
     * <code>SNMP::VERSION_3</code>.
     * @param string $hostname The <code>SNMP</code> agent. <code>hostname</code> may be suffixed with
     * optional <code>SNMP</code> agent port after colon. IPv6 addresses must be enclosed in square
     * brackets if used with port. If FQDN is used for <code>hostname</code>
     * it will be resolved by php-snmp library, not by Net-SNMP engine. Usage
     * of IPv6 addresses when specifying FQDN may be forced by enclosing FQDN
     * into square brackets. Here it is some examples:
     * <table>
     * <title/>
     * <tbody>
     * <tr><td>IPv4 with default port</td><td>127.0.0.1</td></tr>
     * <tr><td>IPv6 with default port</td><td>::1 or [::1]</td></tr>
     * <tr><td>IPv4 with specific port</td><td>127.0.0.1:1161</td></tr>
     * <tr><td>IPv6 with specific port</td><td>[::1]:1161</td></tr>
     * <tr><td>FQDN with default port</td><td>host.domain</td></tr>
     * <tr><td>FQDN with specific port</td><td>host.domain:1161</td></tr>
     * <tr><td>FQDN with default port, force usage of IPv6 address</td><td>[host.domain]</td></tr>
     * <tr><td>FQDN with specific port, force usage of IPv6 address</td><td>[host.domain]:1161</td></tr>
     * </tbody>
     * </table>
     * @param string $community The purpuse of <code>community</code> is
     * <code>SNMP</code> version specific:
     * @param int|null $timeout The number of microseconds until the first timeout.
     * @param int|null $retries The number of retries in case timeout occurs.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/snmp.construct.php
     */
    public function __construct(int $version, string $hostname, string $community, int $timeout = 1000000, int $retries = 5)
    {
    }

    /**
     * Close <code>SNMP</code> session
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/snmp.close.php
     */
    public function close(): bool
    {
    }

    /**
     * Fetch an <code>SNMP</code> object
     *
     * @param mixed $object_id The <code>SNMP</code> object (OID) or objects
     * @param bool|null $preserve_keys When <code>object_id</code> is a array and
     * <code>preserve_keys</code> set to <code>TRUE</code> keys in results
     * will be taken exactly as in <code>object_id</code>,
     * otherwise <code>SNMP::oid_output_format</code> property is used to determinate
     * the form of keys.
     *
     * @return mixed Returns <code>SNMP</code> objects requested as string or array
     * depending on <code>object_id</code> type or <code>FALSE</code> on error.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/snmp.get.php
     */
    public function get($object_id, bool $preserve_keys = false)
    {
    }

    /**
     * Get last error code
     *
     * @return int Returns one of SNMP error code values described in constants chapter.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/snmp.geterrno.php
     */
    public function getErrno(): int
    {
    }

    /**
     * Get last error message
     *
     * @return string String describing error from last SNMP request.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/snmp.geterror.php
     */
    public function getError(): string
    {
    }

    /**
     * Fetch an <code>SNMP</code> object which
     * follows the given object id
     *
     * @param mixed $object_id The <code>SNMP</code> object (OID) or objects
     * @param mixed $use_orignames
     *
     * @return mixed Returns <code>SNMP</code> objects requested as string or array
     * depending on <code>object_id</code> type or <code>FALSE</code> on error.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/snmp.getnext.php
     */
    public function getnext($object_id, $use_orignames = null)
    {
    }

    /**
     * Set the value of an SNMP object
     *
     * @param mixed $object_id The SNMP object id
     * @param mixed $type The <code>MIB</code> defines the type of each object id. It has to be specified as a single character from the below list.
     * @param mixed $value The new value.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/snmp.set.php
     */
    public function set($object_id, $type, $value): bool
    {
    }

    /**
     * Configures security-related <code>SNMP</code>v3 session parameters
     *
     * @param string $sec_level the security level (noAuthNoPriv|authNoPriv|authPriv)
     * @param string $auth_protocol the authentication protocol (MD5 or SHA)
     * @param string $auth_passphrase the authentication pass phrase
     * @param string $priv_protocol the privacy protocol (DES or AES)
     * @param string $priv_passphrase the privacy pass phrase
     * @param string $contextName the context name
     * @param string $contextEngineID the context EngineID
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/snmp.setsecurity.php
     */
    public function setSecurity(string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $contextName, string $contextEngineID): bool
    {
    }

    /**
     * Fetch <code>SNMP</code> object subtree
     *
     * @param string $object_id Root of subtree to be fetched
     * @param bool|null $suffix_as_key By default full OID notation is used for keys in output array.
     * If set to <code>TRUE</code> subtree prefix will be removed from keys leaving only suffix of object_id.
     * @param int $max_repetitions This specifies the maximum number of iterations over the repeating variables.
     * The default is to use this value from <code>SNMP</code> object.
     * @param int $non_repeaters This specifies the number of supplied variables that should not be iterated over.
     * The default is to use this value from <code>SNMP</code> object.
     *
     * @return array Returns an associative array of the <code>SNMP</code> object ids and their values on success or <code>FALSE</code> on error.
     * When a <code>SNMP</code> error occures <code>SNMP::getErrno</code> and
     * <code>SNMP::getError</code> can be used for retrieving error
     * number (specific to SNMP extension, see class constants) and error message
     * respectively.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/snmp.walk.php
     */
    public function walk(string $object_id, bool $suffix_as_key = false, int $max_repetitions, int $non_repeaters): array
    {
    }
}

/**
 * Represents an error raised by SNMP. You should not throw a
 * <code>SNMPException</code> from your own code.
 * See Exceptions for more
 * information about Exceptions in PHP.
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.php#class.snmpexception
 */
class SNMPException extends RuntimeException
{
}

/**
 * Fetch an <code>SNMP</code> object
 *
 * @param string $host The <code>SNMP</code> agent.
 * @param string $community The read community.
 * @param string $object_id The <code>SNMP</code> object.
 * @param string|null $timeout The number of microseconds until the first timeout.
 * @param string|null $retries The number of times to retry if timeouts occur.
 *
 * @return string Returns <code>SNMP</code> object value on success or <code>FALSE</code> on error.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp2-get.php
 */
function snmp2_get(string $host, string $community, string $object_id, string $timeout = 1000000, string $retries = 5): string
{
}

/**
 * Fetch the <code>SNMP</code> object which follows the given object id
 *
 * @param string $host The hostname of the <code>SNMP</code> agent (server).
 * @param string $community The read community.
 * @param string $object_id The <code>SNMP</code> object id which precedes the wanted one.
 * @param string|null $timeout The number of microseconds until the first timeout.
 * @param string|null $retries The number of times to retry if timeouts occur.
 *
 * @return string Returns <code>SNMP</code> object value on success or <code>FALSE</code> on error.
 * In case of an error, an E_WARNING message is shown.
 *
 * @since PHP >= 5.2.0
 *
 * @link http://www.php.net/manual/en/function.snmp2-getnext.php
 */
function snmp2_getnext(string $host, string $community, string $object_id, string $timeout = 1000000, string $retries = 5): string
{
}

/**
 * Return all objects including their respective object ID within the specified one
 *
 * @param string $host The hostname of the <code>SNMP</code> agent (server).
 * @param string $community The read community.
 * @param string $object_id The <code>SNMP</code> object id which precedes the wanted one.
 * @param string|null $timeout The number of microseconds until the first timeout.
 * @param string|null $retries The number of times to retry if timeouts occur.
 *
 * @return array Returns an associative array of the <code>SNMP</code> object ids and their values on success or <code>FALSE</code> on error.
 * In case of an error, an E_WARNING message is shown.
 *
 * @since PHP >= 5.2.0
 *
 * @link http://www.php.net/manual/en/function.snmp2-real-walk.php
 */
function snmp2_real_walk(string $host, string $community, string $object_id, string $timeout = 1000000, string $retries = 5): array
{
}

/**
 * Set the value of an <code>SNMP</code> object
 *
 * @param string $host The hostname of the <code>SNMP</code> agent (server).
 * @param string $community The write community.
 * @param string $object_id The <code>SNMP</code> object id.
 * @param string $type The <code>MIB</code> defines the type of each object id. It has to be specified as a single character from the below list.
 * @param string $value The new value.
 * @param string|null $timeout The number of microseconds until the first timeout.
 * @param string|null $retries The number of times to retry if timeouts occur.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 * If the SNMP host rejects the data type, an E_WARNING message like "Warning: Error in packet. Reason: (badValue) The value given has the wrong type or length." is shown.
 * If an unknown or invalid OID is specified the warning probably reads "Could not add variable".
 *
 * @since PHP >= 5.2.0
 *
 * @link http://www.php.net/manual/en/function.snmp2-set.php
 */
function snmp2_set(string $host, string $community, string $object_id, string $type, string $value, string $timeout = 1000000, string $retries = 5): bool
{
}

/**
 * Fetch all the <code>SNMP</code> objects from an agent
 *
 * @param string $host The SNMP agent (server).
 * @param string $community The read community.
 * @param string $object_id If <code>NULL</code>, <code>object_id</code> is taken as the root of
 * the <code>SNMP</code> objects tree and all objects under that tree are returned as
 * an array.
 * @param string|null $timeout The number of microseconds until the first timeout.
 * @param string|null $retries The number of times to retry if timeouts occur.
 *
 * @return array Returns an array of <code>SNMP</code> object values starting from the
 * <code>object_id</code> as root or <code>FALSE</code> on error.
 *
 * @since PHP >= 5.2.0
 *
 * @link http://www.php.net/manual/en/function.snmp2-walk.php
 */
function snmp2_walk(string $host, string $community, string $object_id, string $timeout = 1000000, string $retries = 5): array
{
}

/**
 * Fetch an <code>SNMP</code> object
 *
 * @param string $host The hostname of the <code>SNMP</code> agent (server).
 * @param string $sec_name the security name, usually some kind of username
 * @param string $sec_level the security level (noAuthNoPriv|authNoPriv|authPriv)
 * @param string $auth_protocol the authentication protocol (MD5 or SHA)
 * @param string $auth_passphrase the authentication pass phrase
 * @param string $priv_protocol the privacy protocol (DES or AES)
 * @param string $priv_passphrase the privacy pass phrase
 * @param string $object_id The <code>SNMP</code> object id.
 * @param string|null $timeout The number of microseconds until the first timeout.
 * @param string|null $retries The number of times to retry if timeouts occur.
 *
 * @return string Returns <code>SNMP</code> object value on success or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp3-get.php
 */
function snmp3_get(string $host, string $sec_name, string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $object_id, string $timeout = 1000000, string $retries = 5): string
{
}

/**
 * Fetch the <code>SNMP</code> object which follows the given object id
 *
 * @param string $host The hostname of the
 * <code>SNMP</code> agent (server).
 * @param string $sec_name the security name, usually some kind of username
 * @param string $sec_level the security level (noAuthNoPriv|authNoPriv|authPriv)
 * @param string $auth_protocol the authentication protocol (MD5 or SHA)
 * @param string $auth_passphrase the authentication pass phrase
 * @param string $priv_protocol the privacy protocol (DES or AES)
 * @param string $priv_passphrase the privacy pass phrase
 * @param string $object_id The <code>SNMP</code> object id.
 * @param string|null $timeout The number of microseconds until the first timeout.
 * @param string|null $retries The number of times to retry if timeouts occur.
 *
 * @return string Returns <code>SNMP</code> object value on success or <code>FALSE</code> on error.
 * In case of an error, an E_WARNING message is shown.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp3-getnext.php
 */
function snmp3_getnext(string $host, string $sec_name, string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $object_id, string $timeout = 1000000, string $retries = 5): string
{
}

/**
 * Return all objects including their respective object ID within the specified one
 *
 * @param string $host The hostname of the
 * <code>SNMP</code> agent (server).
 * @param string $sec_name the security name, usually some kind of username
 * @param string $sec_level the security level (noAuthNoPriv|authNoPriv|authPriv)
 * @param string $auth_protocol the authentication protocol (MD5 or SHA)
 * @param string $auth_passphrase the authentication pass phrase
 * @param string $priv_protocol the privacy protocol (DES or AES)
 * @param string $priv_passphrase the privacy pass phrase
 * @param string $object_id The <code>SNMP</code> object id.
 * @param string|null $timeout The number of microseconds until the first timeout.
 * @param string|null $retries The number of times to retry if timeouts occur.
 *
 * @return array Returns an associative array of the
 * <code>SNMP</code> object ids and their values on success or <code>FALSE</code> on error.
 * In case of an error, an E_WARNING message is shown.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp3-real-walk.php
 */
function snmp3_real_walk(string $host, string $sec_name, string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $object_id, string $timeout = 1000000, string $retries = 5): array
{
}

/**
 * Set the value of an SNMP object
 *
 * @param string $host The hostname of the SNMP agent (server).
 * @param string $sec_name the security name, usually some kind of username
 * @param string $sec_level the security level (noAuthNoPriv|authNoPriv|authPriv)
 * @param string $auth_protocol the authentication protocol (MD5 or SHA)
 * @param string $auth_passphrase the authentication pass phrase
 * @param string $priv_protocol the privacy protocol (DES or AES)
 * @param string $priv_passphrase the privacy pass phrase
 * @param string $object_id The <code>SNMP</code> object id.
 * @param string $type The <code>MIB</code> defines the type of each object id. It has to be specified as a single character from the below list.
 * @param string $value The new value
 * @param int|null $timeout The number of microseconds until the first timeout.
 * @param int|null $retries The number of times to retry if timeouts occur.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 * If the SNMP host rejects the data type, an E_WARNING message like "Warning: Error in packet. Reason: (badValue) The value given has the wrong type or length." is shown.
 * If an unknown or invalid OID is specified the warning probably reads "Could not add variable".
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp3-set.php
 */
function snmp3_set(string $host, string $sec_name, string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $object_id, string $type, string $value, int $timeout = 1000000, int $retries = 5): bool
{
}

/**
 * Fetch all the <code>SNMP</code> objects from an agent
 *
 * @param string $host The hostname of the SNMP agent (server).
 * @param string $sec_name the security name, usually some kind of username
 * @param string $sec_level the security level (noAuthNoPriv|authNoPriv|authPriv)
 * @param string $auth_protocol the authentication protocol (MD5 or SHA)
 * @param string $auth_passphrase the authentication pass phrase
 * @param string $priv_protocol the privacy protocol (DES or AES)
 * @param string $priv_passphrase the privacy pass phrase
 * @param string $object_id If <code>NULL</code>, <code>object_id</code> is taken as the root of
 * the <code>SNMP</code> objects tree and all objects under that tree are returned as
 * an array.
 * @param string|null $timeout The number of microseconds until the first timeout.
 * @param string|null $retries The number of times to retry if timeouts occur.
 *
 * @return array Returns an array of <code>SNMP</code> object values starting from the
 * <code>object_id</code> as root or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp3-walk.php
 */
function snmp3_walk(string $host, string $sec_name, string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $object_id, string $timeout = 1000000, string $retries = 5): array
{
}

/**
 * Fetches the current value of the UCD library's quick_print setting
 *
 * @param mixed $d
 *
 * @return bool Returns <code>TRUE</code> if quick_print is on, <code>FALSE</code> otherwise.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp-get-quick-print.php
 */
function snmp_get_quick_print($d): bool
{
}

/**
 * Return the method how the SNMP values will be returned
 *
 * @return int OR-ed combitantion of constants ( <code>SNMP_VALUE_LIBRARY</code> or
 * <code>SNMP_VALUE_PLAIN</code> ) with
 * possible SNMP_VALUE_OBJECT set.
 *
 * @since PHP 4 >= 4.3.3, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp-get-valueretrieval.php
 */
function snmp_get_valueretrieval(): int
{
}

/**
 * Reads and parses a MIB file into the active MIB tree
 *
 * @param string $filename The filename of the <code>MIB</code>.
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp-read-mib.php
 */
function snmp_read_mib(string $filename): bool
{
}

/**
 * Return all values that are enums with their enum value instead of the raw integer
 *
 * @param int $enum_print As the value is interpreted as boolean by the Net-SNMP library, it can only be "0" or "1".
 *
 * @return bool
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp-set-enum-print.php
 */
function snmp_set_enum_print(int $enum_print): bool
{
}

/**
 * Set the OID output format
 *
 * @param int $oid_format
 *
 * @return void
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp-set-oid-numeric-print.php
 */
function snmp_set_oid_numeric_print(int $oid_format): void
{
}

/**
 * Set the OID output format
 *
 * @param int|null $oid_format Begining from PHP 5.4.0 four additional constants available:
 * <table>
 * <title/>
 * <tbody>
 * <tr><td><code>SNMP_OID_OUTPUT_MODULE</code></td><td>DISMAN-EVENT-MIB::sysUpTimeInstance</td></tr>
 * <tr><td><code>SNMP_OID_OUTPUT_SUFFIX</code></td><td>sysUpTimeInstance</td></tr>
 * <tr><td><code>SNMP_OID_OUTPUT_UCD</code></td><td>system.sysUpTime.sysUpTimeInstance</td></tr>
 * <tr><td><code>SNMP_OID_OUTPUT_NONE</code></td><td>Undefined</td></tr>
 * </tbody>
 * </table>
 *
 * @return bool No value is returned.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp-set-oid-output-format.php
 */
function snmp_set_oid_output_format(int $oid_format = SNMP_OID_OUTPUT_MODULE): bool
{
}

/**
 * Set the value of <code>quick_print</code> within the UCD <code>SNMP</code> library
 *
 * @param bool $quick_print
 *
 * @return bool No value is returned.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp-set-quick-print.php
 */
function snmp_set_quick_print(bool $quick_print): bool
{
}

/**
 * Specify the method how the SNMP values will be returned
 *
 * @param int|null $method
 *
 * @return bool
 *
 * @since PHP 4 >= 4.3.3, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp-set-valueretrieval.php
 */
function snmp_set_valueretrieval(int $method = SNMP_VALUE_LIBRARY): bool
{
}

/**
 * Fetch an <code>SNMP</code> object
 *
 * @param string $hostname The <code>SNMP</code> agent.
 * @param string $community The read community.
 * @param string $object_id The <code>SNMP</code> object.
 * @param int|null $timeout The number of microseconds until the first timeout.
 * @param int|null $retries The number of times to retry if timeouts occur.
 *
 * @return string Returns <code>SNMP</code> object value on success or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmpget.php
 */
function snmpget(string $hostname, string $community, string $object_id, int $timeout = 1000000, int $retries = 5): string
{
}

/**
 * Fetch the <code>SNMP</code> object which follows the given object id
 *
 * @param string $host The hostname of the <code>SNMP</code> agent (server).
 * @param string $community The read community.
 * @param string $object_id The <code>SNMP</code> object id which precedes the wanted one.
 * @param int|null $timeout The number of microseconds until the first timeout.
 * @param int|null $retries The number of times to retry if timeouts occur.
 *
 * @return string Returns <code>SNMP</code> object value on success or <code>FALSE</code> on error.
 * In case of an error, an E_WARNING message is shown.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmpgetnext.php
 */
function snmpgetnext(string $host, string $community, string $object_id, int $timeout = 1000000, int $retries = 5): string
{
}

/**
 * Return all objects including their respective object ID within the specified one
 *
 * @param string $host The hostname of the <code>SNMP</code> agent (server).
 * @param string $community The read community.
 * @param string $object_id The <code>SNMP</code> object id which precedes the wanted one.
 * @param int|null $timeout The number of microseconds until the first timeout.
 * @param int|null $retries The number of times to retry if timeouts occur.
 *
 * @return array Returns an associative array of the <code>SNMP</code> object ids and their values on success or <code>FALSE</code> on error.
 * In case of an error, an E_WARNING message is shown.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmprealwalk.php
 */
function snmprealwalk(string $host, string $community, string $object_id, int $timeout = 1000000, int $retries = 5): array
{
}

/**
 * Set the value of an <code>SNMP</code> object
 *
 * @param string $host The hostname of the <code>SNMP</code> agent (server).
 * @param string $community The write community.
 * @param string $object_id The <code>SNMP</code> object id.
 * @param string $type The <code>MIB</code> defines the type of each object id. It has to be specified as a single character from the below list.
 * @param mixed $value The new value.
 * @param int|null $timeout The number of microseconds until the first timeout.
 * @param int|null $retries The number of times to retry if timeouts occur.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 * If the SNMP host rejects the data type, an E_WARNING message like "Warning: Error in packet. Reason: (badValue) The value given has the wrong type or length." is shown.
 * If an unknown or invalid OID is specified the warning probably reads "Could not add variable".
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmpset.php
 */
function snmpset(string $host, string $community, string $object_id, string $type, $value, int $timeout = 1000000, int $retries = 5): bool
{
}

/**
 * Fetch all the <code>SNMP</code> objects from an agent
 *
 * @param string $hostname The SNMP agent (server).
 * @param string $community The read community.
 * @param string $object_id If <code>NULL</code>, <code>object_id</code> is taken as the root of
 * the <code>SNMP</code> objects tree and all objects under that tree are returned as
 * an array.
 * @param int|null $timeout The number of microseconds until the first timeout.
 * @param int|null $retries The number of times to retry if timeouts occur.
 *
 * @return array Returns an array of <code>SNMP</code> object values starting from the
 * <code>object_id</code> as root or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmpwalk.php
 */
function snmpwalk(string $hostname, string $community, string $object_id, int $timeout = 1000000, int $retries = 5): array
{
}

/**
 * Query for a tree of information about a network entity
 *
 * @param string $hostname The SNMP agent.
 * @param string $community The read community.
 * @param string $object_id If <code>NULL</code>, <code>object_id</code> is taken as the root of
 * the SNMP objects tree and all objects under that tree are returned as
 * an array.
 * @param int|null $timeout The number of microseconds until the first timeout.
 * @param int|null $retries The number of times to retry if timeouts occur.
 *
 * @return array Returns an associative array with object ids and their respective
 * object value starting from the <code>object_id</code>
 * as root or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmpwalkoid.php
 */
function snmpwalkoid(string $hostname, string $community, string $object_id, int $timeout = 1000000, int $retries = 5): array
{
}
