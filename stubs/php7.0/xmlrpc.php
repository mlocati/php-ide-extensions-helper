<?php
// Start of extension: xmlrpc
// - parsed on POSIX with PHP 7.0.28 (extension version 7.0.28)

/**
 * Decodes XML into native PHP types
 *
 * @param mixed $value
 * @param mixed|null $encoding
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-decode.php
 */
function xmlrpc_decode($value, $encoding = null)
{
}

/**
 * Decodes XML into native PHP types
 *
 * @param mixed $xml
 * @param mixed $method
 * @param mixed|null $encoding
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-decode-request.php
 */
function xmlrpc_decode_request($xml, &$method, $encoding = null)
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
 * @param mixed $method
 * @param mixed $params
 * @param mixed|null $output_options
 *
 * @return string
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-encode-request.php
 */
function xmlrpc_encode_request($method, $params, $output_options = null): string
{
}

/**
 * Gets xmlrpc type for a PHP value
 *
 * @param mixed $value
 *
 * @return string
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
 * @param mixed $arg
 *
 * @return bool
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-is-fault.php
 */
function xmlrpc_is_fault($arg): bool
{
}

/**
 * Decodes XML into a list of method descriptions
 *
 * @param mixed $xml
 *
 * @return array
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-parse-method-descriptions.php
 */
function xmlrpc_parse_method_descriptions($xml): array
{
}

/**
 * Adds introspection documentation
 *
 * @param mixed $server
 * @param mixed $desc
 *
 * @return int
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-server-add-introspection-data.php
 */
function xmlrpc_server_add_introspection_data($server, $desc): int
{
}

/**
 * Parses XML requests and call methods
 *
 * @param mixed $server
 * @param mixed $xml
 * @param mixed $user_data
 * @param mixed|null $output_options
 *
 * @return string
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-server-call-method.php
 */
function xmlrpc_server_call_method($server, $xml, $user_data, $output_options = null): string
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
 * @param mixed $server
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
 * @param mixed $server
 * @param mixed $function
 *
 * @return bool
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-server-register-introspection-callback.php
 */
function xmlrpc_server_register_introspection_callback($server, $function): bool
{
}

/**
 * Register a PHP function to resource method matching method_name
 *
 * @param mixed $server
 * @param mixed $method_name
 * @param mixed $function
 *
 * @return bool
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-server-register-method.php
 */
function xmlrpc_server_register_method($server, $method_name, $function): bool
{
}

/**
 * Sets xmlrpc type, base64 or datetime, for a PHP string value
 *
 * @param mixed $value
 * @param mixed $type
 *
 * @return bool
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xmlrpc-set-type.php
 */
function xmlrpc_set_type(&$value, $type): bool
{
}
