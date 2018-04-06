<?php
// Start of extension: xsl
// - parsed on POSIX with PHP 7.2.3 (extension version 7.2.3)
// - parsed on Windows with PHP 7.2.4 (extension version 7.2.4)

/**
 * libexslt version like 1.1.17. Available as of PHP 5.1.2.
 *
 * @link http://www.php.net/manual/en/xsl.constants.php#constant.libexslt-dotted-version
 *
 * @var string
 */
const LIBEXSLT_DOTTED_VERSION = '1.1.29';

/**
 * libexslt version like 813. Available as of PHP 5.1.2.
 *
 * @link http://www.php.net/manual/en/xsl.constants.php#constant.libexslt-version
 *
 * @var int
 */
const LIBEXSLT_VERSION = 817;

/**
 * libxslt version like 1.1.17. Available as of PHP 5.1.2.
 *
 * @link http://www.php.net/manual/en/xsl.constants.php#constant.libxslt-dotted-version
 *
 * @var string
 */
const LIBXSLT_DOTTED_VERSION = '1.1.29';

/**
 * libxslt version like 10117. Available as of PHP 5.1.2.
 *
 * @link http://www.php.net/manual/en/xsl.constants.php#constant.libxslt-version
 *
 * @var int
 */
const LIBXSLT_VERSION = 10129;

/**
 * @link http://www.php.net/manual/en/xsl.constants.php#constant.xsl-clone-always
 *
 * @var int
 */
const XSL_CLONE_ALWAYS = 1;

/**
 * @link http://www.php.net/manual/en/xsl.constants.php#constant.xsl-clone-auto
 *
 * @var int
 */
const XSL_CLONE_AUTO = 0;

/**
 * @link http://www.php.net/manual/en/xsl.constants.php#constant.xsl-clone-never
 *
 * @var int
 */
const XSL_CLONE_NEVER = -1;

/**
 * Disallows creating directories.
 *
 * @link http://www.php.net/manual/en/xsl.constants.php#constant.xsl-secpref-create-directory
 *
 * @var int
 */
const XSL_SECPREF_CREATE_DIRECTORY = 8;

/**
 * Disallows all write access, i.e. a bitmask of
 * <code>XSL_SECPREF_WRITE_NETWORK</code> |
 * <code>XSL_SECPREF_CREATE_DIRECTORY</code> |
 * <code>XSL_SECPREF_WRITE_FILE</code>.
 *
 * @link http://www.php.net/manual/en/xsl.constants.php#constant.xsl-secpref-default
 *
 * @var int
 */
const XSL_SECPREF_DEFAULT = 44;

/**
 * Deactivate all security restrictions.
 *
 * @link http://www.php.net/manual/en/xsl.constants.php#constant.xsl-secpref-none
 *
 * @var int
 */
const XSL_SECPREF_NONE = 0;

/**
 * Disallows reading files.
 *
 * @link http://www.php.net/manual/en/xsl.constants.php#constant.xsl-secpref-read-file
 *
 * @var int
 */
const XSL_SECPREF_READ_FILE = 2;

/**
 * Disallows reading network files.
 *
 * @link http://www.php.net/manual/en/xsl.constants.php#constant.xsl-secpref-read-network
 *
 * @var int
 */
const XSL_SECPREF_READ_NETWORK = 16;

/**
 * Disallows writing files.
 *
 * @link http://www.php.net/manual/en/xsl.constants.php#constant.xsl-secpref-write-file
 *
 * @var int
 */
const XSL_SECPREF_WRITE_FILE = 4;

/**
 * Disallows writing network files.
 *
 * @link http://www.php.net/manual/en/xsl.constants.php#constant.xsl-secpref-write-network
 *
 * @var int
 */
const XSL_SECPREF_WRITE_NETWORK = 32;

/**
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.xsltprocessor.php
 */
class XSLTProcessor
{
    /**
     * Get value of a parameter
     *
     * @param mixed $namespace
     * @param mixed $name
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/xsltprocessor.getparameter.php
     */
    public function getParameter($namespace, $name): string
    {
    }

    /**
     * Get security preferences
     *
     * @return int
     *
     * @since PHP >= 5.4.0
     *
     * @link http://www.php.net/manual/en/xsltprocessor.getsecurityprefs.php
     */
    public function getSecurityPrefs(): int
    {
    }

    /**
     * Determine if PHP has EXSLT support
     *
     * @return bool
     *
     * @since PHP 5 >= 5.0.4, PHP 7
     *
     * @link http://www.php.net/manual/en/xsltprocessor.hasexsltsupport.php
     */
    public function hasExsltSupport(): bool
    {
    }

    /**
     * Import stylesheet
     *
     * @param mixed $doc
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/xsltprocessor.importstylesheet.php
     */
    public function importStylesheet($doc): bool
    {
    }

    /**
     * Enables the ability to use PHP functions as XSLT functions
     *
     * @param mixed|null $restrict
     *
     * @return void
     *
     * @since PHP 5 >= 5.0.4, PHP 7
     *
     * @link http://www.php.net/manual/en/xsltprocessor.registerphpfunctions.php
     */
    public function registerPHPFunctions($restrict = null)
    {
    }

    /**
     * Remove parameter
     *
     * @param mixed $namespace
     * @param mixed $name
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/xsltprocessor.removeparameter.php
     */
    public function removeParameter($namespace, $name): bool
    {
    }

    /**
     * Set value for a parameter
     *
     * @param mixed $namespace
     * @param mixed $name
     * @param mixed|null $value
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/xsltprocessor.setparameter.php
     */
    public function setParameter($namespace, $name, $value = null): bool
    {
    }

    /**
     * Sets profiling output file
     *
     * @param mixed $filename
     *
     * @return bool
     *
     * @since PHP >= 5.3.0
     *
     * @link http://www.php.net/manual/en/xsltprocessor.setprofiling.php
     */
    public function setProfiling($filename): bool
    {
    }

    /**
     * Set security preferences
     *
     * @param mixed $securityPrefs
     *
     * @return int
     *
     * @since PHP >= 5.4.0
     *
     * @link http://www.php.net/manual/en/xsltprocessor.setsecurityprefs.php
     */
    public function setSecurityPrefs($securityPrefs): int
    {
    }

    /**
     * Transform to a DOMDocument
     *
     * @param mixed $doc
     *
     * @return DOMDocument
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/xsltprocessor.transformtodoc.php
     */
    public function transformToDoc($doc)
    {
    }

    /**
     * Transform to URI
     *
     * @param mixed $doc
     * @param mixed $uri
     *
     * @return int
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/xsltprocessor.transformtouri.php
     */
    public function transformToUri($doc, $uri): int
    {
    }

    /**
     * Transform to XML
     *
     * @param mixed $doc
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/xsltprocessor.transformtoxml.php
     */
    public function transformToXml($doc): string
    {
    }
}
