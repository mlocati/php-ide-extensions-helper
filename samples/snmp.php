<?php
// Documentation generated automatically for extension snmp v0.1 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
// No INI entries
const SNMP_BIT_STR = 3;
const SNMP_COUNTER = 66;
const SNMP_COUNTER64 = 70;
const SNMP_INTEGER = 2;
const SNMP_IPADDRESS = 64;
const SNMP_NULL = 5;
const SNMP_OBJECT_ID = 6;
const SNMP_OCTET_STR = 4;
const SNMP_OID_OUTPUT_FULL = 3;
const SNMP_OID_OUTPUT_MODULE = 2;
const SNMP_OID_OUTPUT_NONE = 6;
const SNMP_OID_OUTPUT_NUMERIC = 4;
const SNMP_OID_OUTPUT_SUFFIX = 1;
const SNMP_OID_OUTPUT_UCD = 5;
const SNMP_OPAQUE = 68;
const SNMP_TIMETICKS = 67;
const SNMP_UINTEGER = 71;
const SNMP_UNSIGNED = 66;
const SNMP_VALUE_LIBRARY = 0;
const SNMP_VALUE_OBJECT = 2;
const SNMP_VALUE_PLAIN = 1;
class SNMP
{
    const ERRNO_ANY = 126;
    const ERRNO_ERROR_IN_REPLY = 8;
    const ERRNO_GENERIC = 2;
    const ERRNO_MULTIPLE_SET_QUERIES = 64;
    const ERRNO_NOERROR = 0;
    const ERRNO_OID_NOT_INCREASING = 16;
    const ERRNO_OID_PARSING_ERROR = 32;
    const ERRNO_TIMEOUT = 4;
    const VERSION_1 = 0;
    const VERSION_2C = 1;
    const VERSION_2c = 1;
    const VERSION_3 = 3;
    public function __construct($version, $host, $community, $timeout = null, $retries = null)
    {
    }
    public function close()
    {
    }
    public function get($object_id, $use_orignames = null)
    {
    }
    public function getErrno()
    {
    }
    public function getError()
    {
    }
    public function getnext($object_id, $use_orignames = null)
    {
    }
    public function set($object_id, $type, $value)
    {
    }
    public function setSecurity($sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $contextName, $contextEngineID)
    {
    }
    public function walk($object_id, $suffix_keys, $max_repetitions, $non_repeaters)
    {
    }
}
class SNMPException extends RuntimeException
{
    protected $code = 0;
    protected $file;
    protected $line;
    protected $message = '';
    public function __construct($message = null, $code = null, $previous = null)
    {
    }
    public function __toString()
    {
    }
    public function __wakeup()
    {
    }
    final public function getCode()
    {
    }
    final public function getFile()
    {
    }
    final public function getLine()
    {
    }
    final public function getMessage()
    {
    }
    final public function getPrevious()
    {
    }
    final public function getTrace()
    {
    }
    final public function getTraceAsString()
    {
    }
    final private function __clone()
    {
    }
}
function snmpget($host, $community, $object_id, $timeout = null, $retries = null)
{
}
function snmpgetnext($host, $community, $object_id, $timeout = null, $retries = null)
{
}
function snmpwalk($host, $community, $object_id, $timeout = null, $retries = null)
{
}
function snmprealwalk($host, $community, $object_id, $timeout = null, $retries = null)
{
}
function snmpwalkoid($host, $community, $object_id, $timeout = null, $retries = null)
{
}
function snmpset($host, $community, $object_id, $type, $value, $timeout = null, $retries = null)
{
}
function snmp_get_quick_print($d)
{
}
function snmp_set_quick_print($quick_print)
{
}
function snmp_set_enum_print($enum_print)
{
}
function snmp_set_oid_output_format($oid_format)
{
}
function snmp_set_oid_numeric_print($oid_format)
{
}
function snmp2_get($host, $community, $object_id, $timeout = null, $retries = null)
{
}
function snmp2_getnext($host, $community, $object_id, $timeout = null, $retries = null)
{
}
function snmp2_walk($host, $community, $object_id, $timeout = null, $retries = null)
{
}
function snmp2_real_walk($host, $community, $object_id, $timeout = null, $retries = null)
{
}
function snmp2_set($host, $community, $object_id, $type, $value, $timeout = null, $retries = null)
{
}
function snmp3_get($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = null, $retries = null)
{
}
function snmp3_getnext($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = null, $retries = null)
{
}
function snmp3_walk($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = null, $retries = null)
{
}
function snmp3_real_walk($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = null, $retries = null)
{
}
function snmp3_set($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $type, $value, $timeout = null, $retries = null)
{
}
function snmp_set_valueretrieval($method)
{
}
function snmp_get_valueretrieval()
{
}
function snmp_read_mib($filename)
{
}