<?php
// Start of extension: Zend OPcache
// - parsed on POSIX with PHP 7.0.28 (extension version 7.0.28)

/**
 * Compiles and caches a PHP script without executing it
 *
 * mixed $file
 *
 * @return bool
 *
 * @since PHP 5 >= 5.5.5, PHP 7, PECL ZendOpcache > 7.0.2
 *
 * @link http://www.php.net/manual/en/function.opcache-compile-file.php
 */
function opcache_compile_file($file): bool
{
}

/**
 * Get configuration information about the cache
 *
 * @return array
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
 * mixed|null $fetch_scripts
 *
 * @return array
 *
 * @since PHP 5 >= 5.5.0, PHP 7, PECL ZendOpcache > 7.0.2
 *
 * @link http://www.php.net/manual/en/function.opcache-get-status.php
 */
function opcache_get_status($fetch_scripts = null): array
{
}

/**
 * Invalidates a cached script
 *
 * mixed $script
 * mixed|null $force
 *
 * @return bool
 *
 * @since PHP 5 >= 5.5.0, PHP 7, PECL ZendOpcache >= 7.0.0
 *
 * @link http://www.php.net/manual/en/function.opcache-invalidate.php
 */
function opcache_invalidate($script, $force = null): bool
{
}

/**
 * Tells whether a script is cached in OPCache
 *
 * mixed $script
 *
 * @return bool
 *
 * @since PHP 5 >= 5.5.11, PHP 7, PECL ZendOpcache >= 7.0.4
 *
 * @link http://www.php.net/manual/en/function.opcache-is-script-cached.php
 */
function opcache_is_script_cached($script): bool
{
}

/**
 * Resets the contents of the opcode cache
 *
 * @return bool
 *
 * @since PHP 5 >= 5.5.0, PHP 7, PECL ZendOpcache >= 7.0.0
 *
 * @link http://www.php.net/manual/en/function.opcache-reset.php
 */
function opcache_reset(): bool
{
}
