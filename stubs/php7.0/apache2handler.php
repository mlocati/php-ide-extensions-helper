<?php
// Start of extension: apache2handler
// - parsed on POSIX with PHP 7.0.29

/**
 * Get a list of loaded Apache modules
 *
 * @return array An <code>array</code> of loaded Apache modules.
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
 * @return string Returns the Apache version on success or <code>FALSE</code> on failure.
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
 * @param string $variable The Apache environment variable
 * @param bool|null $walk_to_top Whether to get the top-level variable available to all Apache layers.
 *
 * @return string The value of the Apache environment variable on success, or <code>FALSE</code> on
 * failure
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.apache-getenv.php
 */
function apache_getenv(string $variable, bool $walk_to_top = false): string
{
}

/**
 * Perform a partial request for the specified URI and return all info about it
 *
 * @param string $filename The filename (URI) that's being requested.
 *
 * @return mixed An <code>object</code> of related URI information. The properties of
 * this <code>object</code> are:
 * <ul>
 * <li>status</li>
 * <li>the_request</li>
 * <li>status_line</li>
 * <li>method</li>
 * <li>content_type</li>
 * <li>handler</li>
 * <li>uri</li>
 * <li>filename</li>
 * <li>path_info</li>
 * <li>args</li>
 * <li>boundary</li>
 * <li>no_cache</li>
 * <li>no_local_copy</li>
 * <li>allowed</li>
 * <li>send_bodyct</li>
 * <li>bytes_sent</li>
 * <li>byterange</li>
 * <li>clength</li>
 * <li>unparsed_uri</li>
 * <li>mtime</li>
 * <li>request_time</li>
 * </ul>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.apache-lookup-uri.php
 */
function apache_lookup_uri(string $filename)
{
}

/**
 * Get and set apache request notes
 *
 * @param string $note_name The name of the note.
 * @param string|null $note_value The value of the note.
 *
 * @return string If called with one argument, it returns the current value of note
 * <code>note_name</code>. If called with two arguments, it
 * sets the value of note <code>note_name</code> to
 * <code>note_value</code> and returns the previous value of
 * note <code>note_name</code>.
 * If the note cannot be retrieved, <code>FALSE</code> is returned.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.apache-note.php
 */
function apache_note(string $note_name, string $note_value = ""): string
{
}

/**
 * Fetch all HTTP request headers
 *
 * @return array An associative array of all the HTTP headers in the current request, or
 * <code>FALSE</code> on failure.
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
 * @return array An array of all Apache response headers on success or <code>FALSE</code> on failure.
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
 * @param string $variable The environment variable that's being set.
 * @param string $value The new <code>variable</code> value.
 * @param bool|null $walk_to_top Whether to set the top-level variable available to all Apache layers.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.apache-setenv.php
 */
function apache_setenv(string $variable, string $value, bool $walk_to_top = false): bool
{
}

/**
 * Fetch all HTTP request headers
 *
 * @return array An associative array of all the HTTP headers in the current request, or
 * <code>FALSE</code> on failure.
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
 * @param string $filename The file that the virtual command will be performed on.
 *
 * @return bool Performs the virtual command on success, or returns <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.virtual.php
 */
function virtual(string $filename): bool
{
}
