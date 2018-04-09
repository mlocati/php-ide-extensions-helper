<?php
// Start of extension: wddx
// - parsed on POSIX with PHP 5.6.34
// - parsed on Windows with PHP 5.6.34

/**
 * Add variables to a WDDX packet with the specified ID
 *
 * @param resource $packet_id A WDDX packet, returned by <code>wddx_packet_start</code>.
 * @param mixed $var_name Can be either a string naming a variable or an array containing
 * strings naming the variables or another array, etc.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.wddx-add-vars.php
 */
function wddx_add_vars($packet_id, ...$var_name)
{
}

/**
 * Unserializes a WDDX packet
 *
 * @param string $packet A WDDX packet, as a string or stream.
 *
 * @return mixed Returns the deserialized value which can be a string, a number or an
 * array. Note that structures are deserialized into associative arrays.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.wddx-deserialize.php
 */
function wddx_deserialize($packet)
{
}

/**
 * Ends a WDDX packet with the specified ID
 *
 * @param resource $packet_id A WDDX packet, returned by <code>wddx_packet_start</code>.
 *
 * @return string Returns the string containing the WDDX packet.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.wddx-packet-end.php
 */
function wddx_packet_end($packet_id)
{
}

/**
 * Starts a new WDDX packet with structure inside it
 *
 * @param string $comment An optional comment string.
 *
 * @return resource Returns a packet ID for use in later functions, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.wddx-packet-start.php
 */
function wddx_packet_start($comment = null)
{
}

/**
 * Serialize a single value into a WDDX packet
 *
 * @param mixed $var The value to be serialized
 * @param string $comment An optional comment string that appears in the packet header.
 *
 * @return string Returns the WDDX packet, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.wddx-serialize-value.php
 */
function wddx_serialize_value($var, $comment = null)
{
}

/**
 * Serialize variables into a WDDX packet
 *
 * @param mixed $var_name Can be either a string naming a variable or an array containing
 * strings naming the variables or another array, etc.
 *
 * @return string Returns the WDDX packet, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.wddx-serialize-vars.php
 */
function wddx_serialize_vars(...$var_name)
{
}
