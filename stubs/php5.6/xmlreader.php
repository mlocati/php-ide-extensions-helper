<?php
// Start of extension: xmlreader
// - parsed on POSIX with PHP 5.6.34 (extension version 0.1)
// - parsed on Windows with PHP 5.6.34 (extension version 0.1)

/**
 * The XMLReader extension is an XML Pull parser. The reader acts as a
 * cursor going forward on the document stream and stopping at each node
 * on the way.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.xmlreader.php
 */
class XMLReader
{
    /**
     * @var int
     */
    const ATTRIBUTE = 2;

    /**
     * @var int
     */
    const CDATA = 4;

    /**
     * @var int
     */
    const COMMENT = 8;

    /**
     * @var int
     */
    const DEFAULTATTRS = 2;

    /**
     * @var int
     */
    const DOC = 9;

    /**
     * @var int
     */
    const DOC_FRAGMENT = 11;

    /**
     * @var int
     */
    const DOC_TYPE = 10;

    /**
     * @var int
     */
    const ELEMENT = 1;

    /**
     * @var int
     */
    const END_ELEMENT = 15;

    /**
     * @var int
     */
    const END_ENTITY = 16;

    /**
     * @var int
     */
    const ENTITY = 6;

    /**
     * @var int
     */
    const ENTITY_REF = 5;

    /**
     * @var int
     */
    const LOADDTD = 1;

    /**
     * @var int
     */
    const NONE = 0;

    /**
     * @var int
     */
    const NOTATION = 12;

    /**
     * @var int
     */
    const PI = 7;

    /**
     * @var int
     */
    const SIGNIFICANT_WHITESPACE = 14;

    /**
     * @var int
     */
    const SUBST_ENTITIES = 4;

    /**
     * @var int
     */
    const TEXT = 3;

    /**
     * @var int
     */
    const VALIDATE = 3;

    /**
     * @var int
     */
    const WHITESPACE = 13;

    /**
     * @var int
     */
    const XML_DECLARATION = 17;

    /**
     * Close the XMLReader input
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.close.php
     */
    public function close()
    {
    }

    /**
     * Returns a copy of the current node as a DOM object
     *
     * @return DOMNode The resulting <code>DOMNode</code> or <code>FALSE</code> on error.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.expand.php
     */
    public function expand()
    {
    }

    /**
     * Get the value of a named attribute
     *
     * @param string $name The name of the attribute.
     *
     * @return string The value of the attribute, or <code>NULL</code> if no attribute with the given
     * <code>name</code> is found or not positioned on an element node.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.getattribute.php
     */
    public function getAttribute($name)
    {
    }

    /**
     * Get the value of an attribute by index
     *
     * @param int $index The position of the attribute.
     *
     * @return string The value of the attribute, or an empty string (before PHP 5.6) or <code>NULL</code>
     * (from PHP 5.6 onwards) if no attribute exists at
     * <code>index</code> or is not positioned on the element.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.getattributeno.php
     */
    public function getAttributeNo($index)
    {
    }

    /**
     * Get the value of an attribute by localname and URI
     *
     * @param string $localName The local name.
     * @param string $namespaceURI The namespace URI.
     *
     * @return string The value of the attribute, or an empty string (before PHP 5.6) or <code>NULL</code>
     * (from PHP 5.6 onwards) if no attribute with the given
     * <code>localName</code> and <code>namespaceURI</code> is
     * found or not positioned of element.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.getattributens.php
     */
    public function getAttributeNs($localName, $namespaceURI)
    {
    }

    /**
     * Indicates if specified property has been set
     *
     * @param int $property One of the parser option
     * constants.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.getparserproperty.php
     */
    public function getParserProperty($property)
    {
    }

    /**
     * Indicates if the parsed document is valid
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.isvalid.php
     */
    public function isValid()
    {
    }

    /**
     * Lookup namespace for a prefix
     *
     * @param string $prefix String containing the prefix.
     *
     * @return string Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.lookupnamespace.php
     */
    public function lookupNamespace($prefix)
    {
    }

    /**
     * Move cursor to a named attribute
     *
     * @param string $name The name of the attribute.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.movetoattribute.php
     */
    public function moveToAttribute($name)
    {
    }

    /**
     * Move cursor to an attribute by index
     *
     * @param int $index The position of the attribute.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.movetoattributeno.php
     */
    public function moveToAttributeNo($index)
    {
    }

    /**
     * Move cursor to a named attribute
     *
     * @param string $localName The local name.
     * @param string $namespaceURI The namespace URI.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.movetoattributens.php
     */
    public function moveToAttributeNs($localName, $namespaceURI)
    {
    }

    /**
     * Position cursor on the parent Element of current Attribute
     *
     * @return bool Returns <code>TRUE</code> if successful and <code>FALSE</code> if it fails or not positioned on
     * Attribute when this method is called.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.movetoelement.php
     */
    public function moveToElement()
    {
    }

    /**
     * Position cursor on the first Attribute
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.movetofirstattribute.php
     */
    public function moveToFirstAttribute()
    {
    }

    /**
     * Position cursor on the next Attribute
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.movetonextattribute.php
     */
    public function moveToNextAttribute()
    {
    }

    /**
     * Move cursor to next node skipping all subtrees
     *
     * @param string $localname The name of the next node to move to.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.next.php
     */
    public function next($localname = null)
    {
    }

    /**
     * Set the URI containing the XML to parse
     *
     * @param string $URI URI pointing to the document.
     * @param string $encoding The document encoding or <code>NULL</code>.
     * @param int|null $options A bitmask of the LIBXML_*
     * constants.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure. If called statically, returns an
     * <code>XMLReader</code> or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.open.php
     */
    public function open($URI, $encoding = null, $options = 0)
    {
    }

    /**
     * Move to next node in document
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.read.php
     */
    public function read()
    {
    }

    /**
     * Retrieve XML from current node
     *
     * @return string Returns the contents of the current node as a string. Empty string on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.readinnerxml.php
     */
    public function readInnerXml()
    {
    }

    /**
     * Retrieve XML from current node, including itself
     *
     * @return string Returns the contents of current node, including itself, as a string. Empty string on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.readouterxml.php
     */
    public function readOuterXml()
    {
    }

    /**
     * Reads the contents of the current node as a string
     *
     * @return string Returns the content of the current node as a string. Empty string on
     * failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.readstring.php
     */
    public function readString()
    {
    }

    /**
     * Set parser options
     *
     * @param int $property One of the parser option
     * constants.
     * @param bool $value If set to <code>TRUE</code> the option will be enabled otherwise will
     * be disabled.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.setparserproperty.php
     */
    public function setParserProperty($property, $value)
    {
    }

    /**
     * Set the filename or URI for a RelaxNG Schema
     *
     * @param string $filename filename or URI pointing to a RelaxNG Schema.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.setrelaxngschema.php
     */
    public function setRelaxNGSchema($filename)
    {
    }

    /**
     * Set the data containing a RelaxNG Schema
     *
     * @param string $source String containing the RelaxNG Schema.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.setrelaxngschemasource.php
     */
    public function setRelaxNGSchemaSource($source)
    {
    }

    /**
     * Validate document against XSD
     *
     * @param string $filename The filename of the XSD schema.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.setschema.php
     */
    public function setSchema($filename)
    {
    }

    /**
     * Set the data containing the XML to parse
     *
     * @param string $source String containing the XML to be parsed.
     * @param string $encoding The document encoding or <code>NULL</code>.
     * @param int|null $options A bitmask of the LIBXML_*
     * constants.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure. If called statically, returns an
     * <code>XMLReader</code> or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.xml.php
     */
    public function XML($source, $encoding = null, $options = 0)
    {
    }
}
