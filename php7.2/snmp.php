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
     * Creates SNMP instance representing session to remote <code>SNMP</code> agent
     *
     * @param mixed $version
     * @param mixed $host
     * @param mixed $community
     * @param mixed|null $timeout
     * @param mixed|null $retries
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/snmp.construct.php
     */
    public function __construct($version, $host, $community, $timeout = null, $retries = null)
    {
    }

    /**
     * Close <code>SNMP</code> session
     *
     * @return bool
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
     * @param mixed $object_id
     * @param mixed|null $use_orignames
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/snmp.get.php
     */
    public function get($object_id, $use_orignames = null)
    {
    }

    /**
     * Get last error code
     *
     * @return int
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
     * @return string
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
     * @param mixed $object_id
     * @param mixed|null $use_orignames
     *
     * @return mixed
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
     * @param mixed $object_id
     * @param mixed $type
     * @param mixed $value
     *
     * @return bool
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
     * @param mixed $sec_level
     * @param mixed $auth_protocol
     * @param mixed $auth_passphrase
     * @param mixed $priv_protocol
     * @param mixed $priv_passphrase
     * @param mixed $contextName
     * @param mixed $contextEngineID
     *
     * @return bool
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/snmp.setsecurity.php
     */
    public function setSecurity($sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $contextName, $contextEngineID): bool
    {
    }

    /**
     * Fetch <code>SNMP</code> object subtree
     *
     * @param mixed $object_id
     * @param mixed $suffix_keys
     * @param mixed $max_repetitions
     * @param mixed $non_repeaters
     *
     * @return array
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/snmp.walk.php
     */
    public function walk($object_id, $suffix_keys, $max_repetitions, $non_repeaters): array
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
 * @param mixed $host
 * @param mixed $community
 * @param mixed $object_id
 * @param mixed|null $timeout
 * @param mixed|null $retries
 *
 * @return string
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp2-get.php
 */
function snmp2_get($host, $community, $object_id, $timeout = null, $retries = null): string
{
}

/**
 * Fetch the <code>SNMP</code> object which follows the given object id
 *
 * @param mixed $host
 * @param mixed $community
 * @param mixed $object_id
 * @param mixed|null $timeout
 * @param mixed|null $retries
 *
 * @return string
 *
 * @since PHP >= 5.2.0
 *
 * @link http://www.php.net/manual/en/function.snmp2-getnext.php
 */
function snmp2_getnext($host, $community, $object_id, $timeout = null, $retries = null): string
{
}

/**
 * Return all objects including their respective object ID within the specified one
 *
 * @param mixed $host
 * @param mixed $community
 * @param mixed $object_id
 * @param mixed|null $timeout
 * @param mixed|null $retries
 *
 * @return array
 *
 * @since PHP >= 5.2.0
 *
 * @link http://www.php.net/manual/en/function.snmp2-real-walk.php
 */
function snmp2_real_walk($host, $community, $object_id, $timeout = null, $retries = null): array
{
}

/**
 * Set the value of an <code>SNMP</code> object
 *
 * @param mixed $host
 * @param mixed $community
 * @param mixed $object_id
 * @param mixed $type
 * @param mixed $value
 * @param mixed|null $timeout
 * @param mixed|null $retries
 *
 * @return bool
 *
 * @since PHP >= 5.2.0
 *
 * @link http://www.php.net/manual/en/function.snmp2-set.php
 */
function snmp2_set($host, $community, $object_id, $type, $value, $timeout = null, $retries = null): bool
{
}

/**
 * Fetch all the <code>SNMP</code> objects from an agent
 *
 * @param mixed $host
 * @param mixed $community
 * @param mixed $object_id
 * @param mixed|null $timeout
 * @param mixed|null $retries
 *
 * @return array
 *
 * @since PHP >= 5.2.0
 *
 * @link http://www.php.net/manual/en/function.snmp2-walk.php
 */
function snmp2_walk($host, $community, $object_id, $timeout = null, $retries = null): array
{
}

/**
 * Fetch an <code>SNMP</code> object
 *
 * @param mixed $host
 * @param mixed $sec_name
 * @param mixed $sec_level
 * @param mixed $auth_protocol
 * @param mixed $auth_passphrase
 * @param mixed $priv_protocol
 * @param mixed $priv_passphrase
 * @param mixed $object_id
 * @param mixed|null $timeout
 * @param mixed|null $retries
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp3-get.php
 */
function snmp3_get($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = null, $retries = null): string
{
}

/**
 * Fetch the <code>SNMP</code> object which follows the given object id
 *
 * @param mixed $host
 * @param mixed $sec_name
 * @param mixed $sec_level
 * @param mixed $auth_protocol
 * @param mixed $auth_passphrase
 * @param mixed $priv_protocol
 * @param mixed $priv_passphrase
 * @param mixed $object_id
 * @param mixed|null $timeout
 * @param mixed|null $retries
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp3-getnext.php
 */
function snmp3_getnext($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = null, $retries = null): string
{
}

/**
 * Return all objects including their respective object ID within the specified one
 *
 * @param mixed $host
 * @param mixed $sec_name
 * @param mixed $sec_level
 * @param mixed $auth_protocol
 * @param mixed $auth_passphrase
 * @param mixed $priv_protocol
 * @param mixed $priv_passphrase
 * @param mixed $object_id
 * @param mixed|null $timeout
 * @param mixed|null $retries
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp3-real-walk.php
 */
function snmp3_real_walk($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = null, $retries = null): array
{
}

/**
 * Set the value of an SNMP object
 *
 * @param mixed $host
 * @param mixed $sec_name
 * @param mixed $sec_level
 * @param mixed $auth_protocol
 * @param mixed $auth_passphrase
 * @param mixed $priv_protocol
 * @param mixed $priv_passphrase
 * @param mixed $object_id
 * @param mixed $type
 * @param mixed $value
 * @param mixed|null $timeout
 * @param mixed|null $retries
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp3-set.php
 */
function snmp3_set($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $type, $value, $timeout = null, $retries = null): bool
{
}

/**
 * Fetch all the <code>SNMP</code> objects from an agent
 *
 * @param mixed $host
 * @param mixed $sec_name
 * @param mixed $sec_level
 * @param mixed $auth_protocol
 * @param mixed $auth_passphrase
 * @param mixed $priv_protocol
 * @param mixed $priv_passphrase
 * @param mixed $object_id
 * @param mixed|null $timeout
 * @param mixed|null $retries
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp3-walk.php
 */
function snmp3_walk($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = null, $retries = null): array
{
}

/**
 * Fetches the current value of the UCD library's quick_print setting
 *
 * @param mixed $d
 *
 * @return bool
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
 * @return int
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
 * @param mixed $filename
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp-read-mib.php
 */
function snmp_read_mib($filename): bool
{
}

/**
 * Return all values that are enums with their enum value instead of the raw integer
 *
 * @param mixed $enum_print
 *
 * @return bool
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp-set-enum-print.php
 */
function snmp_set_enum_print($enum_print): bool
{
}

/**
 * Set the OID output format
 *
 * @param mixed $oid_format
 *
 * @return void
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp-set-oid-numeric-print.php
 */
function snmp_set_oid_numeric_print($oid_format)
{
}

/**
 * Set the OID output format
 *
 * @param mixed $oid_format
 *
 * @return bool
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp-set-oid-output-format.php
 */
function snmp_set_oid_output_format($oid_format): bool
{
}

/**
 * Set the value of <code>quick_print</code> within the UCD <code>SNMP</code> library
 *
 * @param mixed $quick_print
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp-set-quick-print.php
 */
function snmp_set_quick_print($quick_print): bool
{
}

/**
 * Specify the method how the SNMP values will be returned
 *
 * @param mixed $method
 *
 * @return bool
 *
 * @since PHP 4 >= 4.3.3, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmp-set-valueretrieval.php
 */
function snmp_set_valueretrieval($method): bool
{
}

/**
 * Fetch an <code>SNMP</code> object
 *
 * @param mixed $host
 * @param mixed $community
 * @param mixed $object_id
 * @param mixed|null $timeout
 * @param mixed|null $retries
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmpget.php
 */
function snmpget($host, $community, $object_id, $timeout = null, $retries = null): string
{
}

/**
 * Fetch the <code>SNMP</code> object which follows the given object id
 *
 * @param mixed $host
 * @param mixed $community
 * @param mixed $object_id
 * @param mixed|null $timeout
 * @param mixed|null $retries
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmpgetnext.php
 */
function snmpgetnext($host, $community, $object_id, $timeout = null, $retries = null): string
{
}

/**
 * Return all objects including their respective object ID within the specified one
 *
 * @param mixed $host
 * @param mixed $community
 * @param mixed $object_id
 * @param mixed|null $timeout
 * @param mixed|null $retries
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmprealwalk.php
 */
function snmprealwalk($host, $community, $object_id, $timeout = null, $retries = null): array
{
}

/**
 * Set the value of an <code>SNMP</code> object
 *
 * @param mixed $host
 * @param mixed $community
 * @param mixed $object_id
 * @param mixed $type
 * @param mixed $value
 * @param mixed|null $timeout
 * @param mixed|null $retries
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmpset.php
 */
function snmpset($host, $community, $object_id, $type, $value, $timeout = null, $retries = null): bool
{
}

/**
 * Fetch all the <code>SNMP</code> objects from an agent
 *
 * @param mixed $host
 * @param mixed $community
 * @param mixed $object_id
 * @param mixed|null $timeout
 * @param mixed|null $retries
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmpwalk.php
 */
function snmpwalk($host, $community, $object_id, $timeout = null, $retries = null): array
{
}

/**
 * Query for a tree of information about a network entity
 *
 * @param mixed $host
 * @param mixed $community
 * @param mixed $object_id
 * @param mixed|null $timeout
 * @param mixed|null $retries
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.snmpwalkoid.php
 */
function snmpwalkoid($host, $community, $object_id, $timeout = null, $retries = null): array
{
}
