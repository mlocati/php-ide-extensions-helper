<?php
// Start of extension: xmlrpc
// - parsed on POSIX with PHP 7.1.15 (extension version 7.1.15)

/**
 * Decodes XML into native PHP types
 *
 * @param string $xml XML response returned by XMLRPC method.
 * @param string|null $encoding Input encoding supported by iconv.
 *
 * @return mixed Returns either an array, or an integer, or a string, or a boolean according
 * to the response returned by the XMLRPC method.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-decode.php
 */
function xmlrpc_decode(string $xml, string $encoding = "iso-8859-1")
{
}

/**
 * Decodes XML into native PHP types
 *
 * @param string $xml
 * @param string $method
 * @param string $encoding
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-decode-request.php
 */
function xmlrpc_decode_request(string $xml, string &$method, string $encoding = null)
{
}

/**
 * Generates XML for a PHP value
 *
 * @param mixed $value
 *
 * @return string
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-encode.php
 */
function xmlrpc_encode($value): string
{
}

/**
 * Generates XML for a method request
 *
 * @param string $method Name of the method to call.
 * @param mixed $params Method parameters compatible with method signature.
 * @param array $output_options Array specifying output options may contain (default values are
 * emphasised):
 * <ul>
 * output_type: php, <code>xml</code>
 * verbosity: no_white_space, newlines_only, <code>pretty</code>
 * escaping: cdata, <code>non-ascii, non-print, markup</code>
 * (may be a string with one value or an array with multiple values)
 * version: simple, <code>xmlrpc</code>, soap 1.1, auto
 * encoding: <code>iso-8859-1</code>, other character set supported by iconv
 * </ul>
 *
 * @return string Returns a string containing the XML representation of the request.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-encode-request.php
 */
function xmlrpc_encode_request(string $method, $params, array $output_options = null): string
{
}

/**
 * Gets xmlrpc type for a PHP value
 *
 * @param mixed $value PHP value
 *
 * @return string Returns the XML-RPC type.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-get-type.php
 */
function xmlrpc_get_type($value): string
{
}

/**
 * Determines if an array value represents an XMLRPC fault
 *
 * @param array $arg Array returned by <code>xmlrpc_decode</code>.
 *
 * @return bool Returns <code>TRUE</code> if the argument means fault, <code>FALSE</code> otherwise. Fault
 * description is available in <code>$arg["faultString"]</code>, fault
 * code is in <code>$arg["faultCode"]</code>.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-is-fault.php
 */
function xmlrpc_is_fault(array $arg): bool
{
}

/**
 * Decodes XML into a list of method descriptions
 *
 * @param string $xml
 *
 * @return array
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-parse-method-descriptions.php
 */
function xmlrpc_parse_method_descriptions(string $xml): array
{
}

/**
 * Adds introspection documentation
 *
 * @param resource $server
 * @param array $desc
 *
 * @return int
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-server-add-introspection-data.php
 */
function xmlrpc_server_add_introspection_data($server, array $desc): int
{
}

/**
 * Parses XML requests and call methods
 *
 * @param resource $server
 * @param string $xml
 * @param mixed $user_data
 * @param array $output_options
 *
 * @return string
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-server-call-method.php
 */
function xmlrpc_server_call_method($server, string $xml, $user_data, array $output_options = null): string
{
}

/**
 * Creates an xmlrpc server
 *
 * @return resource
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-server-create.php
 */
function xmlrpc_server_create()
{
}

/**
 * Destroys server resources
 *
 * @param resource $server
 *
 * @return bool
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-server-destroy.php
 */
function xmlrpc_server_destroy($server): bool
{
}

/**
 * Register a PHP function to generate documentation
 *
 * @param resource $server
 * @param string $function
 *
 * @return bool
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-server-register-introspection-callback.php
 */
function xmlrpc_server_register_introspection_callback($server, string $function): bool
{
}

/**
 * Register a PHP function to resource method matching method_name
 *
 * @param resource $server
 * @param string $method_name
 * @param string $function
 *
 * @return bool
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-server-register-method.php
 */
function xmlrpc_server_register_method($server, string $method_name, string $function): bool
{
}

/**
 * Sets xmlrpc type, base64 or datetime, for a PHP string value
 *
 * @param string $value Value to set the type
 * @param string $type 'base64' or 'datetime'
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 * If successful, <code>value</code> is converted to an object.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-set-type.php
 */
function xmlrpc_set_type(string &$value, string $type): bool
{
}
