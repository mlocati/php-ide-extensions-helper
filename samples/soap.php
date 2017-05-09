<?php
// Documentation generated automatically for extension soap v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
/*
 * INI entries:
 * soap.wsdl_cache_enabled = '1'
 * soap.wsdl_cache_dir = '/tmp'
 * soap.wsdl_cache_ttl = '86400'
 * soap.wsdl_cache = '1'
 * soap.wsdl_cache_limit = '5'
 */
const APACHE_MAP = 200;
const SOAP_1_1 = 1;
const SOAP_1_2 = 2;
const SOAP_ACTOR_NEXT = 1;
const SOAP_ACTOR_NONE = 2;
const SOAP_ACTOR_UNLIMATERECEIVER = 3;
const SOAP_AUTHENTICATION_BASIC = 0;
const SOAP_AUTHENTICATION_DIGEST = 1;
const SOAP_COMPRESSION_ACCEPT = 32;
const SOAP_COMPRESSION_DEFLATE = 16;
const SOAP_COMPRESSION_GZIP = 0;
const SOAP_DOCUMENT = 2;
const SOAP_ENCODED = 1;
const SOAP_ENC_ARRAY = 300;
const SOAP_ENC_OBJECT = 301;
const SOAP_FUNCTIONS_ALL = 999;
const SOAP_LITERAL = 2;
const SOAP_PERSISTENCE_REQUEST = 2;
const SOAP_PERSISTENCE_SESSION = 1;
const SOAP_RPC = 1;
const SOAP_SINGLE_ELEMENT_ARRAYS = 1;
const SOAP_SSL_METHOD_SSLv2 = 1;
const SOAP_SSL_METHOD_SSLv23 = 3;
const SOAP_SSL_METHOD_SSLv3 = 2;
const SOAP_SSL_METHOD_TLS = 0;
const SOAP_USE_XSI_ARRAY_TYPE = 4;
const SOAP_WAIT_ONE_WAY_CALLS = 2;
const UNKNOWN_TYPE = 999998;
const WSDL_CACHE_BOTH = 3;
const WSDL_CACHE_DISK = 1;
const WSDL_CACHE_MEMORY = 2;
const WSDL_CACHE_NONE = 0;
const XSD_1999_NAMESPACE = 'http://www.w3.org/1999/XMLSchema';
const XSD_1999_TIMEINSTANT = 401;
const XSD_ANYTYPE = 145;
const XSD_ANYURI = 117;
const XSD_ANYXML = 147;
const XSD_BASE64BINARY = 116;
const XSD_BOOLEAN = 102;
const XSD_BYTE = 137;
const XSD_DATE = 109;
const XSD_DATETIME = 107;
const XSD_DECIMAL = 103;
const XSD_DOUBLE = 105;
const XSD_DURATION = 106;
const XSD_ENTITIES = 130;
const XSD_ENTITY = 129;
const XSD_FLOAT = 104;
const XSD_GDAY = 113;
const XSD_GMONTH = 114;
const XSD_GMONTHDAY = 112;
const XSD_GYEAR = 111;
const XSD_GYEARMONTH = 110;
const XSD_HEXBINARY = 115;
const XSD_ID = 126;
const XSD_IDREF = 127;
const XSD_IDREFS = 128;
const XSD_INT = 135;
const XSD_INTEGER = 131;
const XSD_LANGUAGE = 122;
const XSD_LONG = 134;
const XSD_NAME = 124;
const XSD_NAMESPACE = 'http://www.w3.org/2001/XMLSchema';
const XSD_NCNAME = 125;
const XSD_NEGATIVEINTEGER = 133;
const XSD_NMTOKEN = 123;
const XSD_NMTOKENS = 144;
const XSD_NONNEGATIVEINTEGER = 138;
const XSD_NONPOSITIVEINTEGER = 132;
const XSD_NORMALIZEDSTRING = 120;
const XSD_NOTATION = 119;
const XSD_POSITIVEINTEGER = 143;
const XSD_QNAME = 118;
const XSD_SHORT = 136;
const XSD_STRING = 101;
const XSD_TIME = 108;
const XSD_TOKEN = 121;
const XSD_UNSIGNEDBYTE = 142;
const XSD_UNSIGNEDINT = 140;
const XSD_UNSIGNEDLONG = 139;
const XSD_UNSIGNEDSHORT = 141;
class SoapClient
{
    public function __call($function_name, $arguments)
    {
    }
    public function __doRequest($request, $location, $action, $version, $one_way = null)
    {
    }
    public function __getCookies()
    {
    }
    public function __getFunctions()
    {
    }
    public function __getLastRequest()
    {
    }
    public function __getLastRequestHeaders()
    {
    }
    public function __getLastResponse()
    {
    }
    public function __getLastResponseHeaders()
    {
    }
    public function __getTypes()
    {
    }
    public function __setCookie($name, $value = null)
    {
    }
    public function __setLocation($new_location = null)
    {
    }
    public function __setSoapHeaders($soapheaders)
    {
    }
    public function __soapCall($function_name, $arguments, $options = null, $input_headers = null, &$output_headers = null)
    {
    }
    public function SoapClient($wsdl, $options = null)
    {
    }
}
class SoapFault extends Exception
{
    protected $code = 0;
    protected $file;
    protected $line;
    protected $message = '';
    public function __construct($message = null, $code = null, $previous = null)
    {
    }
    final private function __clone()
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
    public function SoapFault($faultcode, $faultstring, $faultactor = null, $detail = null, $faultname = null, $headerfault = null)
    {
    }
}
class SoapHeader
{
    public function SoapHeader($namespace, $name, $data = null, $mustunderstand = null, $actor = null)
    {
    }
}
class SoapParam
{
    public function SoapParam($data, $name)
    {
    }
}
class SoapServer
{
    public function addFunction($functions)
    {
    }
    public function addSoapHeader($object)
    {
    }
    public function fault($code, $string, $actor = null, $details = null, $name = null)
    {
    }
    public function getFunctions()
    {
    }
    public function handle($soap_request = null)
    {
    }
    public function setClass($class_name, $args = null)
    {
    }
    public function setObject($object)
    {
    }
    public function setPersistence($mode)
    {
    }
    public function SoapServer($wsdl, $options = null)
    {
    }
}
class SoapVar
{
    public function SoapVar($data, $encoding, $type_name = null, $type_namespace = null, $node_name = null, $node_namespace = null)
    {
    }
}
function use_soap_error_handler($handler = null)
{
}
function is_soap_fault($object)
{
}