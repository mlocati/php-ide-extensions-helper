<?php
// Start of extension: xmlreader
// - parsed on POSIX with PHP 7.1.15 (extension version 7.1.15)
// - parsed on Windows with PHP 7.1.15 (extension version 7.1.15)

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
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.close.php
     */
    public function close(): bool
    {
    }

    /**
     * Returns a copy of the current node as a DOM object
     *
     * @param mixed|null $basenode
     *
     * @return DOMNode
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.expand.php
     */
    public function expand($basenode = null): DOMNode
    {
    }

    /**
     * Get the value of a named attribute
     *
     * @param mixed $name
     *
     * @return string
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.getattribute.php
     */
    public function getAttribute($name): string
    {
    }

    /**
     * Get the value of an attribute by index
     *
     * @param mixed $index
     *
     * @return string
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.getattributeno.php
     */
    public function getAttributeNo($index): string
    {
    }

    /**
     * Get the value of an attribute by localname and URI
     *
     * @param mixed $name
     * @param mixed $namespaceURI
     *
     * @return string
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.getattributens.php
     */
    public function getAttributeNs($name, $namespaceURI): string
    {
    }

    /**
     * Indicates if specified property has been set
     *
     * @param mixed $property
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.getparserproperty.php
     */
    public function getParserProperty($property): bool
    {
    }

    /**
     * Indicates if the parsed document is valid
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.isvalid.php
     */
    public function isValid(): bool
    {
    }

    /**
     * Lookup namespace for a prefix
     *
     * @param mixed $prefix
     *
     * @return string
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.lookupnamespace.php
     */
    public function lookupNamespace($prefix): string
    {
    }

    /**
     * Move cursor to a named attribute
     *
     * @param mixed $name
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.movetoattribute.php
     */
    public function moveToAttribute($name): bool
    {
    }

    /**
     * Move cursor to an attribute by index
     *
     * @param mixed $index
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.movetoattributeno.php
     */
    public function moveToAttributeNo($index): bool
    {
    }

    /**
     * Move cursor to a named attribute
     *
     * @param mixed $name
     * @param mixed $namespaceURI
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.movetoattributens.php
     */
    public function moveToAttributeNs($name, $namespaceURI): bool
    {
    }

    /**
     * Position cursor on the parent Element of current Attribute
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.movetoelement.php
     */
    public function moveToElement(): bool
    {
    }

    /**
     * Position cursor on the first Attribute
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.movetofirstattribute.php
     */
    public function moveToFirstAttribute(): bool
    {
    }

    /**
     * Position cursor on the next Attribute
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.movetonextattribute.php
     */
    public function moveToNextAttribute(): bool
    {
    }

    /**
     * Move cursor to next node skipping all subtrees
     *
     * @param mixed|null $localname
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.next.php
     */
    public function next($localname = null): bool
    {
    }

    /**
     * Set the URI containing the XML to parse
     *
     * @param mixed $URI
     * @param mixed|null $encoding
     * @param mixed|null $options
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.open.php
     */
    public function open($URI, $encoding = null, $options = null): bool
    {
    }

    /**
     * Move to next node in document
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.read.php
     */
    public function read(): bool
    {
    }

    /**
     * Retrieve XML from current node
     *
     * @return string
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.readinnerxml.php
     */
    public function readInnerXml(): string
    {
    }

    /**
     * Retrieve XML from current node, including itself
     *
     * @return string
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.readouterxml.php
     */
    public function readOuterXml(): string
    {
    }

    /**
     * Reads the contents of the current node as a string
     *
     * @return string
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.readstring.php
     */
    public function readString(): string
    {
    }

    /**
     * Set parser options
     *
     * @param mixed $property
     * @param mixed $value
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.setparserproperty.php
     */
    public function setParserProperty($property, $value): bool
    {
    }

    /**
     * Set the filename or URI for a RelaxNG Schema
     *
     * @param mixed $filename
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.setrelaxngschema.php
     */
    public function setRelaxNGSchema($filename): bool
    {
    }

    /**
     * Set the data containing a RelaxNG Schema
     *
     * @param mixed $source
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.setrelaxngschemasource.php
     */
    public function setRelaxNGSchemaSource($source): bool
    {
    }

    /**
     * Validate document against XSD
     *
     * @param mixed $filename
     *
     * @return bool
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.setschema.php
     */
    public function setSchema($filename): bool
    {
    }

    /**
     * Set the data containing the XML to parse
     *
     * @param mixed $source
     * @param mixed|null $encoding
     * @param mixed|null $options
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.xml.php
     */
    public function XML($source, $encoding = null, $options = null): bool
    {
    }
}
