<?php
// Start of extension: sysvshm
// - parsed on POSIX with PHP 5.6.35

/**
 * Creates or open a shared memory segment
 *
 * @param int $key A numeric shared memory segment ID
 * @param int $memsize The memory size. If not provided, default to the
 * <code>sysvshm.init_mem</code> in the <code>php.ini</code>, otherwise 10000
 * bytes.
 * @param int|null $perm The optional permission bits. Default to 0666.
 *
 * @return resource Returns a shared memory segment identifier.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shm-attach.php
 */
function shm_attach($key, $memsize = null, $perm = 0666)
{
}

/**
 * Disconnects from shared memory segment
 *
 * @param resource $shm_identifier A shared memory resource handle as returned by
 * <code>shm_attach</code>
 *
 * @return bool <code>shm_detach</code> always returns <code>TRUE</code>.
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
 * @param resource $shm_identifier Shared memory segment, obtained from <code>shm_attach</code>.
 * @param int $variable_key The variable key.
 *
 * @return mixed Returns the variable with the given key.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shm-get-var.php
 */
function shm_get_var($shm_identifier, $variable_key)
{
}

/**
 * Check whether a specific entry exists
 *
 * @param resource $shm_identifier Shared memory segment, obtained from <code>shm_attach</code>.
 * @param int $variable_key The variable key.
 *
 * @return bool Returns <code>TRUE</code> if the entry exists, otherwise <code>FALSE</code>
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shm-has-var.php
 */
function shm_has_var($shm_identifier, $variable_key)
{
}

/**
 * Inserts or updates a variable in shared memory
 *
 * @param resource $shm_identifier A shared memory resource handle as returned by
 * <code>shm_attach</code>
 * @param int $variable_key The variable key.
 * @param mixed $variable The variable. All variable types
 * that <code>serialize</code> supports may be used: generally
 * this means all types except for resources and some internal objects
 * that cannot be serialized.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
 * @param resource $shm_identifier The shared memory identifier as returned by
 * <code>shm_attach</code>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
 * @param resource $shm_identifier The shared memory identifier as returned by
 * <code>shm_attach</code>
 * @param int $variable_key The variable key.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.shm-remove-var.php
 */
function shm_remove_var($shm_identifier, $variable_key)
{
}
