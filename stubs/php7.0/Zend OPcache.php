<?php
// Start of extension: Zend OPcache
// - parsed on POSIX with PHP 7.0.28 (extension version 7.0.28)

/**
 * Compiles and caches a PHP script without executing it
 *
 * @param string $file The path to the PHP script to be compiled.
 *
 * @return bool Returns <code>TRUE</code> if <code>file</code> was compiled successfully
 * or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.5.5, PHP 7, PECL ZendOpcache > 7.0.2
 *
 * @link http://www.php.net/manual/en/function.opcache-compile-file.php
 */
function opcache_compile_file(string $file): bool
{
}

/**
 * Get configuration information about the cache
 *
 * @return array Returns an array of information, including ini, blacklist and version
 *
 * @since PHP 5 >= 5.5.0, PHP 7, PECL ZendOpcache > 7.0.2
 *
 * @link http://www.php.net/manual/en/function.opcache-get-configuration.php
 */
function opcache_get_configuration(): array
{
}

/**
 * Get status information about the cache
 *
 * @param bool|null $get_scripts Include script specific state information
 *
 * @return array Returns an array of information, optionally containing script specific state information
 *
 * @since PHP 5 >= 5.5.0, PHP 7, PECL ZendOpcache > 7.0.2
 *
 * @link http://www.php.net/manual/en/function.opcache-get-status.php
 */
function opcache_get_status(bool $get_scripts = true): array
{
}

/**
 * Invalidates a cached script
 *
 * @param string $script The path to the script being invalidated.
 * @param bool|null $force If set to <code>TRUE</code>, the script will be invalidated regardless of whether
 * invalidation is necessary.
 *
 * @return bool Returns <code>TRUE</code> if the opcode cache for <code>script</code> was
 * invalidated or if there was nothing to invalidate, or <code>FALSE</code> if the opcode
 * cache is disabled.
 *
 * @since PHP 5 >= 5.5.0, PHP 7, PECL ZendOpcache >= 7.0.0
 *
 * @link http://www.php.net/manual/en/function.opcache-invalidate.php
 */
function opcache_invalidate(string $script, bool $force = false): bool
{
}

/**
 * Tells whether a script is cached in OPCache
 *
 * @param string $file The path to the PHP script to be checked.
 *
 * @return bool Returns <code>TRUE</code> if <code>file</code> is cached in OPCache,
 * <code>FALSE</code> otherwise.
 *
 * @since PHP 5 >= 5.5.11, PHP 7, PECL ZendOpcache >= 7.0.4
 *
 * @link http://www.php.net/manual/en/function.opcache-is-script-cached.php
 */
function opcache_is_script_cached(string $file): bool
{
}

/**
 * Resets the contents of the opcode cache
 *
 * @return bool Returns <code>TRUE</code> if the opcode cache was reset, or <code>FALSE</code> if the opcode
 * cache is disabled.
 *
 * @since PHP 5 >= 5.5.0, PHP 7, PECL ZendOpcache >= 7.0.0
 *
 * @link http://www.php.net/manual/en/function.opcache-reset.php
 */
function opcache_reset(): bool
{
}
