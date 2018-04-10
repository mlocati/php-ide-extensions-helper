<?php
// Start of extension: xsl
// - parsed on POSIX with PHP 5.6.35 (extension version 0.1)
// - parsed on Windows with PHP 5.6.35 (extension version 0.1)

/**
 * libexslt version like 1.1.17. Available as of PHP 5.1.2.
 *
 * @link http://www.php.net/manual/en/xsl.constants.php#constant.libexslt-dotted-version
 *
 * @var string
 */
const LIBEXSLT_DOTTED_VERSION = '1.1.28';

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
const LIBXSLT_DOTTED_VERSION = '1.1.28';

/**
 * libxslt version like 10117. Available as of PHP 5.1.2.
 *
 * @link http://www.php.net/manual/en/xsl.constants.php#constant.libxslt-version
 *
 * @var int
 */
const LIBXSLT_VERSION = 10128;

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
     * @param string $namespaceURI The namespace URI of the XSLT parameter.
     * @param string $localName The local name of the XSLT parameter.
     *
     * @return string The value of the parameter (as a string), or <code>FALSE</code> if it's not set.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/xsltprocessor.getparameter.php
     */
    public function getParameter($namespaceURI, $localName)
    {
    }

    /**
     * Get security preferences
     *
     * @return int A bitmask consisting of <code>XSL_SECPREF_READ_FILE</code>,
     * <code>XSL_SECPREF_WRITE_FILE</code>,
     * <code>XSL_SECPREF_CREATE_DIRECTORY</code>,
     * <code>XSL_SECPREF_READ_NETWORK</code>,
     * <code>XSL_SECPREF_WRITE_NETWORK</code>.
     *
     * @since PHP >= 5.4.0
     *
     * @link http://www.php.net/manual/en/xsltprocessor.getsecurityprefs.php
     */
    public function getSecurityPrefs()
    {
    }

    /**
     * Determine if PHP has EXSLT support
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.0.4, PHP 7
     *
     * @link http://www.php.net/manual/en/xsltprocessor.hasexsltsupport.php
     */
    public function hasExsltSupport()
    {
    }

    /**
     * Import stylesheet
     *
     * @param mixed $stylesheet The imported style sheet as a <code>DOMDocument</code> or
     * <code>SimpleXMLElement</code> object.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/xsltprocessor.importstylesheet.php
     */
    public function importStylesheet($stylesheet)
    {
    }

    /**
     * Enables the ability to use PHP functions as XSLT functions
     *
     * @param mixed $restrict Use this parameter to only allow certain functions to be called from
     * XSLT.
     *
     * @return void No value is returned.
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
     * @param string $namespaceURI The namespace URI of the XSLT parameter.
     * @param string $localName The local name of the XSLT parameter.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/xsltprocessor.removeparameter.php
     */
    public function removeParameter($namespaceURI, $localName)
    {
    }

    /**
     * Set value for a parameter
     *
     * @param string $namespace The namespace URI of the XSLT parameter.
     * @param string $name The local name of the XSLT parameter.
     * @param string $value The new value of the XSLT parameter.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/xsltprocessor.setparameter.php
     */
    public function setParameter($namespace, $name, $value = null)
    {
    }

    /**
     * Sets profiling output file
     *
     * @param string $filename Path to the file to dump profiling information.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP >= 5.3.0
     *
     * @link http://www.php.net/manual/en/xsltprocessor.setprofiling.php
     */
    public function setProfiling($filename)
    {
    }

    /**
     * Set security preferences
     *
     * @param int $securityPrefs The new security preferences. The following constants can be ORed:
     * <code>XSL_SECPREF_READ_FILE</code>,
     * <code>XSL_SECPREF_WRITE_FILE</code>,
     * <code>XSL_SECPREF_CREATE_DIRECTORY</code>,
     * <code>XSL_SECPREF_READ_NETWORK</code>,
     * <code>XSL_SECPREF_WRITE_NETWORK</code>. Alternatively,
     * <code>XSL_SECPREF_NONE</code> or
     * <code>XSL_SECPREF_DEFAULT</code> can be passed.
     *
     * @return int Returns the old security preferences.
     *
     * @since PHP >= 5.4.0
     *
     * @link http://www.php.net/manual/en/xsltprocessor.setsecurityprefs.php
     */
    public function setSecurityPrefs($securityPrefs)
    {
    }

    /**
     * Transform to a DOMDocument
     *
     * @param DOMNode $doc The node to be transformed.
     *
     * @return DOMDocument The resulting <code>DOMDocument</code> or <code>FALSE</code> on error.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/xsltprocessor.transformtodoc.php
     */
    public function transformToDoc(DOMNode $doc)
    {
    }

    /**
     * Transform to URI
     *
     * @param DOMDocument $doc The document to transform.
     * @param string $uri The target URI for the transformation.
     *
     * @return int Returns the number of bytes written or <code>FALSE</code> if an error occurred.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/xsltprocessor.transformtouri.php
     */
    public function transformToUri(DOMDocument $doc, $uri)
    {
    }

    /**
     * Transform to XML
     *
     * @param mixed $doc The <code>DOMDocument</code> or <code>SimpleXMLElement</code> object to
     * be transformed.
     *
     * @return string The result of the transformation as a string or <code>FALSE</code> on error.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/xsltprocessor.transformtoxml.php
     */
    public function transformToXml($doc)
    {
    }
}
