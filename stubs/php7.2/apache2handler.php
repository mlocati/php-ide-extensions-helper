<?php
// Start of extension: apache2handler
// - parsed on POSIX with PHP 7.2.3

/**
 * Get a list of loaded Apache modules
 *
 * @return array
 *
 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.apache-get-modules.php
 */
function apache_get_modules(): array
{
}

/**
 * Fetch Apache version
 *
 * @return string
 *
 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.apache-get-version.php
 */
function apache_get_version(): string
{
}

/**
 * Get an Apache subprocess_env variable
 *
 * @param mixed $variable
 * @param mixed|null $walk_to_top
 *
 * @return string
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.apache-getenv.php
 */
function apache_getenv($variable, $walk_to_top = null): string
{
}

/**
 * Perform a partial request for the specified URI and return all info about it
 *
 * @param mixed $filename
 *
 * @return object
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.apache-lookup-uri.php
 */
function apache_lookup_uri($filename): object
{
}

/**
 * Get and set apache request notes
 *
 * @param mixed $note_name
 * @param mixed|null $note_value
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.apache-note.php
 */
function apache_note($note_name, $note_value = null): string
{
}

/**
 * Fetch all HTTP request headers
 *
 * @return array
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.apache-request-headers.php
 */
function apache_request_headers(): array
{
}

/**
 * Fetch all HTTP response headers
 *
 * @return array
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.apache-response-headers.php
 */
function apache_response_headers(): array
{
}

/**
 * Set an Apache subprocess_env variable
 *
 * @param mixed $variable
 * @param mixed $value
 * @param mixed|null $walk_to_top
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.apache-setenv.php
 */
function apache_setenv($variable, $value, $walk_to_top = null): bool
{
}

/**
 * Fetch all HTTP request headers
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.getallheaders.php
 */
function getallheaders(): array
{
}

/**
 * Perform an Apache sub-request
 *
 * @param mixed $uri
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.virtual.php
 */
function virtual($uri): bool
{
}
