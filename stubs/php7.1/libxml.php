<?php
// Start of extension: libxml
// - parsed on POSIX with PHP 7.1.15 (extension version 7.1.15)
// - parsed on Windows with PHP 7.1.15 (extension version 7.1.15)

/**
 * Allows line numbers greater than 65535 to be reported correctly.
 * <blockquote>
 * Only available as of PHP 7.0.0 with Libxml &gt;= 2.9.0
 * </blockquote>
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-biglines
 *
 * @var int
 */
const LIBXML_BIGLINES = 4194304;

/**
 * Activate small nodes allocation optimization. This may speed up your
 * application without needing to change the code.
 * <blockquote>
 * Only available in Libxml &gt;= 2.6.21
 * </blockquote>
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-compact
 *
 * @var int
 */
const LIBXML_COMPACT = 65536;

/**
 * libxml version like 2.6.5 or 2.6.17
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-dotted-version
 *
 * @var string
 */
const LIBXML_DOTTED_VERSION = '2.9.1';

/**
 * Default DTD attributes
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-dtdattr
 *
 * @var int
 */
const LIBXML_DTDATTR = 8;

/**
 * Load the external subset
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-dtdload
 *
 * @var int
 */
const LIBXML_DTDLOAD = 4;

/**
 * Validate with the DTD
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-dtdvalid
 *
 * @var int
 */
const LIBXML_DTDVALID = 16;

/**
 * A recoverable error
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-err-error
 *
 * @var int
 */
const LIBXML_ERR_ERROR = 2;

/**
 * A fatal error
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-err-fatal
 *
 * @var int
 */
const LIBXML_ERR_FATAL = 3;

/**
 * No errors
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-err-none
 *
 * @var int
 */
const LIBXML_ERR_NONE = 0;

/**
 * A simple warning
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-err-warning
 *
 * @var int
 */
const LIBXML_ERR_WARNING = 1;

/**
 * Sets HTML_PARSE_NODEFDTD flag, which prevents a default doctype
 * being added when one is not found.
 * <blockquote>
 * Only available in Libxml &gt;= 2.7.8 (as of PHP &gt;= 5.4.0)
 * </blockquote>
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-html-nodefdtd
 *
 * @var int
 */
const LIBXML_HTML_NODEFDTD = 4;

/**
 * Sets HTML_PARSE_NOIMPLIED flag, which turns off the
 * automatic adding of implied html/body... elements.
 * <blockquote>
 * Only available in Libxml &gt;= 2.7.7 (as of PHP &gt;= 5.4.0)
 * </blockquote>
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-html-noimplied
 *
 * @var int
 */
const LIBXML_HTML_NOIMPLIED = 8192;

/**
 * @var string
 */
const LIBXML_LOADED_VERSION = '20901';

/**
 * Remove blank nodes
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-noblanks
 *
 * @var int
 */
const LIBXML_NOBLANKS = 256;

/**
 * Merge CDATA as text nodes
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-nocdata
 *
 * @var int
 */
const LIBXML_NOCDATA = 16384;

/**
 * Expand empty tags (e.g. <code>&lt;br/&gt;</code> to
 * <code>&lt;br&gt;&lt;/br&gt;</code>)
 * <blockquote>
 * This option is currently just available in the
 * and
 * functions.
 * </blockquote>
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-noemptytag
 *
 * @var int
 */
const LIBXML_NOEMPTYTAG = 4;

/**
 * Substitute entities
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-noent
 *
 * @var int
 */
const LIBXML_NOENT = 2;

/**
 * Suppress error reports
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-noerror
 *
 * @var int
 */
const LIBXML_NOERROR = 32;

/**
 * Disable network access when loading documents
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-nonet
 *
 * @var int
 */
const LIBXML_NONET = 2048;

/**
 * Suppress warning reports
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-nowarning
 *
 * @var int
 */
const LIBXML_NOWARNING = 64;

/**
 * Drop the XML declaration when saving a document
 * <blockquote>
 * Only available in Libxml &gt;= 2.6.21
 * </blockquote>
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-noxmldecl
 *
 * @var int
 */
const LIBXML_NOXMLDECL = 2;

/**
 * Remove redundant namespace declarations
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-nsclean
 *
 * @var int
 */
const LIBXML_NSCLEAN = 8192;

/**
 * Sets XML_PARSE_HUGE flag, which relaxes any hardcoded limit from the parser. This affects
 * limits like maximum depth of a document or the entity recursion, as well as limits of the
 * size of text nodes.
 * <blockquote>
 * Only available in Libxml &gt;= 2.7.0 (as of PHP &gt;= 5.3.2 and PHP &gt;= 5.2.12)
 * </blockquote>
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-parsehuge
 *
 * @var int
 */
const LIBXML_PARSEHUGE = 524288;

/**
 * Sets XML_PARSE_PEDANTIC flag, which enables pedantic error reporting.
 * <blockquote>
 * Available as of PHP &gt;= 5.4.0
 * </blockquote>
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-pedantic
 *
 * @var int
 */
const LIBXML_PEDANTIC = 128;

/**
 * Create default/fixed value nodes during XSD schema validation
 * <blockquote>
 * Only available in Libxml &gt;= 2.6.14 (as of PHP &gt;= 5.5.2)
 * </blockquote>
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-schema-create
 *
 * @var int
 */
const LIBXML_SCHEMA_CREATE = 1;

/**
 * libxml version like 20605 or 20617
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-version
 *
 * @var int
 */
const LIBXML_VERSION = 20901;

/**
 * Implement XInclude substitution
 *
 * @link http://www.php.net/manual/en/libxml.constants.php#constant.libxml-xinclude
 *
 * @var int
 */
const LIBXML_XINCLUDE = 1024;

/**
 * Contains various information about errors thrown by libxml. The error codes
 * are described within the official
 * xmlError API documentation.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.libxmlerror.php
 */
class LibXMLError
{
}

/**
 * Clear libxml error buffer
 *
 * @return void No value is returned.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.libxml-clear-errors.php
 */
function libxml_clear_errors(): void
{
}

/**
 * Disable the ability to load external entities
 *
 * @param bool|null $disable Disable (<code>TRUE</code>) or enable (<code>FALSE</code>) libxml extensions (such as
 * ,
 * and ) to load external entities.
 *
 * @return bool Returns the previous value.
 *
 * @since PHP 5 >= 5.2.11, PHP 7
 *
 * @link http://www.php.net/manual/en/function.libxml-disable-entity-loader.php
 */
function libxml_disable_entity_loader(bool $disable = true): bool
{
}

/**
 * Retrieve array of errors
 *
 * @return array Returns an array with <code>LibXMLError</code> objects if there are any
 * errors in the buffer, or an empty array otherwise.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.libxml-get-errors.php
 */
function libxml_get_errors(): array
{
}

/**
 * Retrieve last error from libxml
 *
 * @return LibXMLError Returns a <code>LibXMLError</code> object if there is any error in the
 * buffer, <code>FALSE</code> otherwise.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.libxml-get-last-error.php
 */
function libxml_get_last_error(): LibXMLError
{
}

/**
 * Changes the default external entity loader
 *
 * @param callable $resolver_function A <code>callable</code> that takes three arguments. Two strings, a public id
 * and system id, and a context (an array with four keys) as the third argument.
 * This callback should return a resource, a string from which a resource can be
 * opened, or <code>NULL</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.libxml-set-external-entity-loader.php
 */
function libxml_set_external_entity_loader(callable $resolver_function): bool
{
}

/**
 * Set the streams context for the next libxml document load or write
 *
 * @param resource $streams_context The stream context resource (created with
 * <code>stream_context_create</code>)
 *
 * @return void No value is returned.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.libxml-set-streams-context.php
 */
function libxml_set_streams_context($streams_context): void
{
}

/**
 * Disable libxml errors and allow user to fetch error information as needed
 *
 * @param bool|null $use_errors Enable (<code>TRUE</code>) user error handling or disable (<code>FALSE</code>) user error handling. Disabling will also clear any existing libxml errors.
 *
 * @return bool This function returns the previous value of
 * <code>use_errors</code>.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.libxml-use-internal-errors.php
 */
function libxml_use_internal_errors(bool $use_errors = false): bool
{
}
