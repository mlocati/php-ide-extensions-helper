<?php
// Start of extension: sysvshm
// - parsed on POSIX with PHP 5.6.34

/**
 * Creates or open a shared memory segment
 *
 * @param mixed $key
 * @param mixed|null $memsize
 * @param mixed|null $perm
 *
 * @return resource
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shm-attach.php
 */
function shm_attach($key, $memsize = null, $perm = null)
{
}

/**
 * Disconnects from shared memory segment
 *
 * @param mixed $shm_identifier
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shm-detach.php
 */
function shm_detach($shm_identifier)
{
}

/**
 * Returns a variable from shared memory
 *
 * @param mixed $id
 * @param mixed $variable_key
 *
 * @return mixed
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shm-get-var.php
 */
function shm_get_var($id, $variable_key)
{
}

/**
 * Check whether a specific entry exists
 *
 * @param mixed $id
 * @param mixed $variable_key
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shm-has-var.php
 */
function shm_has_var($id, $variable_key)
{
}

/**
 * Inserts or updates a variable in shared memory
 *
 * @param mixed $shm_identifier
 * @param mixed $variable_key
 * @param mixed $variable
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shm-put-var.php
 */
function shm_put_var($shm_identifier, $variable_key, $variable)
{
}

/**
 * Removes shared memory from Unix systems
 *
 * @param mixed $shm_identifier
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shm-remove.php
 */
function shm_remove($shm_identifier)
{
}

/**
 * Removes a variable from shared memory
 *
 * @param mixed $id
 * @param mixed $variable_key
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shm-remove-var.php
 */
function shm_remove_var($id, $variable_key)
{
}
