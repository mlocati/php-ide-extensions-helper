<?php
// Start of extension: xsl
// - parsed on POSIX with PHP 7.1.15 (extension version 7.1.15)
// - parsed on Windows with PHP 7.1.15 (extension version 7.1.15)

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
 *      <code>XSL_SECPREF_WRITE_NETWORK</code> |
 *      <code>XSL_SECPREF_CREATE_DIRECTORY</code> |
 *      <code>XSL_SECPREF_WRITE_FILE</code>.
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
     * mixed $namespace
     * mixed $name
     */
    public function getParameter($namespace, $name)
    {
    }

    public function getSecurityPrefs()
    {
    }

    public function hasExsltSupport()
    {
    }

    /**
     * mixed $doc
     */
    public function importStylesheet($doc)
    {
    }

    /**
     * mixed|null $restrict
     */
    public function registerPHPFunctions($restrict = null)
    {
    }

    /**
     * mixed $namespace
     * mixed $name
     */
    public function removeParameter($namespace, $name)
    {
    }

    /**
     * mixed $namespace
     * mixed $name
     * mixed|null $value
     */
    public function setParameter($namespace, $name, $value = null)
    {
    }

    /**
     * mixed $filename
     */
    public function setProfiling($filename)
    {
    }

    /**
     * mixed $securityPrefs
     */
    public function setSecurityPrefs($securityPrefs)
    {
    }

    /**
     * mixed $doc
     */
    public function transformToDoc($doc)
    {
    }

    /**
     * mixed $doc
     * mixed $uri
     */
    public function transformToUri($doc, $uri)
    {
    }

    /**
     * mixed $doc
     */
    public function transformToXml($doc)
    {
    }
}
