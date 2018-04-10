<?php
// Start of extension: xmlreader
// - parsed on POSIX with PHP 7.2.4 (extension version 7.2.4)
// - parsed on Windows with PHP 7.2.4 (extension version 7.2.4)

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
     * Attribute node
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.attribute
     */
    const ATTRIBUTE = 2;

    /**
     * CDATA node
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.cdata
     */
    const CDATA = 4;

    /**
     * Comment node
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.comment
     */
    const COMMENT = 8;

    /**
     * Load DTD and default attributes but do not validate
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.defaultattrs
     */
    const DEFAULTATTRS = 2;

    /**
     * Document node
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.doc
     */
    const DOC = 9;

    /**
     * Document Fragment node
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.doc-fragment
     */
    const DOC_FRAGMENT = 11;

    /**
     * Document Type node
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.doc-type
     */
    const DOC_TYPE = 10;

    /**
     * Start element
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.element
     */
    const ELEMENT = 1;

    /**
     * End Element
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.end-element
     */
    const END_ELEMENT = 15;

    /**
     * End Entity
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.end-entity
     */
    const END_ENTITY = 16;

    /**
     * Entity Declaration node
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.entity
     */
    const ENTITY = 6;

    /**
     * Entity Reference node
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.entity-ref
     */
    const ENTITY_REF = 5;

    /**
     * Load DTD but do not validate
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.loaddtd
     */
    const LOADDTD = 1;

    /**
     * No node type
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.none
     */
    const NONE = 0;

    /**
     * Notation node
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.notation
     */
    const NOTATION = 12;

    /**
     * Processing Instruction node
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.pi
     */
    const PI = 7;

    /**
     * Significant Whitespace node
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.significant-whitespace
     */
    const SIGNIFICANT_WHITESPACE = 14;

    /**
     * Substitute entities and expand references
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.subst-entities
     */
    const SUBST_ENTITIES = 4;

    /**
     * Text node
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.text
     */
    const TEXT = 3;

    /**
     * Load DTD and validate while parsing
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.validate
     */
    const VALIDATE = 3;

    /**
     * Whitespace node
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.whitespace
     */
    const WHITESPACE = 13;

    /**
     * XML Declaration node
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/xmlreader.constants.php#xmlreader.constants.xml-declaration
     */
    const XML_DECLARATION = 17;

    /**
     * The number of attributes on the node
     *
     * @property-read
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.xmlreader.php#xmlreader.props
     */
    public $attributeCount;

    /**
     * The base URI of the node
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.xmlreader.php#xmlreader.props
     */
    public $baseURI;

    /**
     * Depth of the node in the tree, starting at 0
     *
     * @property-read
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.xmlreader.php#xmlreader.props
     */
    public $depth;

    /**
     * Indicates if node has attributes
     *
     * @property-read
     *
     * @var bool
     *
     * @link http://www.php.net/manual/en/class.xmlreader.php#xmlreader.props
     */
    public $hasAttributes;

    /**
     * Indicates if node has a text value
     *
     * @property-read
     *
     * @var bool
     *
     * @link http://www.php.net/manual/en/class.xmlreader.php#xmlreader.props
     */
    public $hasValue;

    /**
     * Indicates if attribute is defaulted from DTD
     *
     * @property-read
     *
     * @var bool
     *
     * @link http://www.php.net/manual/en/class.xmlreader.php#xmlreader.props
     */
    public $isDefault;

    /**
     * Indicates if node is an empty element tag
     *
     * @property-read
     *
     * @var bool
     *
     * @link http://www.php.net/manual/en/class.xmlreader.php#xmlreader.props
     */
    public $isEmptyElement;

    /**
     * The local name of the node
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.xmlreader.php#xmlreader.props
     */
    public $localName;

    /**
     * The qualified name of the node
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.xmlreader.php#xmlreader.props
     */
    public $name;

    /**
     * The URI of the namespace associated with the node
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.xmlreader.php#xmlreader.props
     */
    public $namespaceURI;

    /**
     * The node type for the node
     *
     * @property-read
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.xmlreader.php#xmlreader.props
     */
    public $nodeType;

    /**
     * The prefix of the namespace associated with the node
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.xmlreader.php#xmlreader.props
     */
    public $prefix;

    /**
     * The text value of the node
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.xmlreader.php#xmlreader.props
     */
    public $value;

    /**
     * The xml:lang scope which the node resides
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.xmlreader.php#xmlreader.props
     */
    public $xmlLang;

    /**
     * Close the XMLReader input
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @param DOMNode $basenode A <code>DOMNode</code> defining the target <code>DOMDocument</code> for the created DOM object.
     *
     * @return DOMNode The resulting <code>DOMNode</code> or <code>FALSE</code> on error.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/xmlreader.expand.php
     */
    public function expand(DOMNode $basenode = null): DOMNode
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
    public function getAttribute(string $name): string
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
    public function getAttributeNo(int $index): string
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
    public function getAttributeNs(string $localName, string $namespaceURI): string
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
    public function getParserProperty(int $property): bool
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
    public function isValid(): bool
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
    public function lookupNamespace(string $prefix): string
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
    public function moveToAttribute(string $name): bool
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
    public function moveToAttributeNo(int $index): bool
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
    public function moveToAttributeNs(string $localName, string $namespaceURI): bool
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
    public function moveToElement(): bool
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
    public function moveToFirstAttribute(): bool
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
    public function moveToNextAttribute(): bool
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
    public function next(string $localname = null): bool
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
    public function open(string $URI, string $encoding = null, int $options = 0): bool
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
    public function read(): bool
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
    public function readInnerXml(): string
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
    public function readOuterXml(): string
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
    public function readString(): string
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
    public function setParserProperty(int $property, bool $value): bool
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
    public function setRelaxNGSchema(string $filename): bool
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
    public function setRelaxNGSchemaSource(string $source): bool
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
    public function setSchema(string $filename): bool
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
    public function XML(string $source, string $encoding = null, int $options = 0): bool
    {
    }
}
