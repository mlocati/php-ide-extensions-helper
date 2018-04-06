<?php
// Start of extension: wddx
// - parsed on POSIX with PHP 5.6.34
// - parsed on Windows with PHP 5.6.34

/**
 * Add variables to a WDDX packet with the specified ID
 *
 * @param mixed $packet_id
 * @param mixed $var_names
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.wddx-add-vars.php
 */
function wddx_add_vars($packet_id, ...$var_names)
{
}

/**
 * Unserializes a WDDX packet
 *
 * @param mixed $packet
 *
 * @return mixed
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
 * @param mixed $packet_id
 *
 * @return string
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
 * @param mixed|null $comment
 *
 * @return resource
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
 * @param mixed $var
 * @param mixed|null $comment
 *
 * @return string
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
 * @param mixed $var_names
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.wddx-serialize-vars.php
 */
function wddx_serialize_vars(...$var_names)
{
}
