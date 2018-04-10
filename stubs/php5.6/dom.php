<?php
// Start of extension: dom
// - parsed on POSIX with PHP 5.6.35 (extension version 20031129)
// - parsed on Windows with PHP 5.6.35 (extension version 20031129)

/**
 * If any node is inserted somewhere it doesn't belong
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.dom-hierarchy-request-err
 *
 * @var int
 */
const DOM_HIERARCHY_REQUEST_ERR = 3;

/**
 * If index or size is negative, or greater than the allowed value.
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.dom-index-size-err
 *
 * @var int
 */
const DOM_INDEX_SIZE_ERR = 1;

/**
 * If an attempt is made to add an attribute that is already in use elsewhere.
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.dom-inuse-attribute-err
 *
 * @var int
 */
const DOM_INUSE_ATTRIBUTE_ERR = 10;

/**
 * If a parameter or an operation is not supported by the underlying object.
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.dom-invalid-access-err
 *
 * @var int
 */
const DOM_INVALID_ACCESS_ERR = 15;

/**
 * If an invalid or illegal character is specified, such as in a name.
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.dom-invalid-character-err
 *
 * @var int
 */
const DOM_INVALID_CHARACTER_ERR = 5;

/**
 * If an attempt is made to modify the type of the underlying object.
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.dom-invalid-modification-err
 *
 * @var int
 */
const DOM_INVALID_MODIFICATION_ERR = 13;

/**
 * If an attempt is made to use an object that is not, or is no longer, usable.
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.dom-invalid-state-err
 *
 * @var int
 */
const DOM_INVALID_STATE_ERR = 11;

/**
 * If an attempt is made to create or change an object in a way which is
 * incorrect with regard to namespaces.
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.dom-namespace-err
 *
 * @var int
 */
const DOM_NAMESPACE_ERR = 14;

/**
 * If data is specified for a node which does not support data.
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.dom-no-data-allowed-err
 *
 * @var int
 */
const DOM_NO_DATA_ALLOWED_ERR = 6;

/**
 * If an attempt is made to modify an object where modifications are not allowed.
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.dom-no-modification-allowed-err
 *
 * @var int
 */
const DOM_NO_MODIFICATION_ALLOWED_ERR = 7;

/**
 * If an attempt is made to reference a node in a context where it does not exist.
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.dom-not-found-err
 *
 * @var int
 */
const DOM_NOT_FOUND_ERR = 8;

/**
 * If the implementation does not support the requested type of object or operation.
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.dom-not-supported-err
 *
 * @var int
 */
const DOM_NOT_SUPPORTED_ERR = 9;

/**
 * Error code not part of the DOM specification. Meant for PHP errors.
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.dom-php-err
 *
 * @var int
 */
const DOM_PHP_ERR = 0;

/**
 * If an invalid or illegal string is specified.
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.dom-syntax-err
 *
 * @var int
 */
const DOM_SYNTAX_ERR = 12;

/**
 * If a call to a method such as insertBefore or removeChild would make the Node
 * invalid with respect to "partial validity", this exception would be raised and
 * the operation would not be done.
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.dom-validation-err
 *
 * @var int
 */
const DOM_VALIDATION_ERR = 16;

/**
 * If a node is used in a different document than the one that created it.
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.dom-wrong-document-err
 *
 * @var int
 */
const DOM_WRONG_DOCUMENT_ERR = 4;

/**
 * If the specified range of text does not fit into a
 * <code>DOMString</code>.
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.domstring-size-err
 *
 * @var int
 */
const DOMSTRING_SIZE_ERR = 2;

/**
 * 1
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-attribute-cdata
 *
 * @var int
 */
const XML_ATTRIBUTE_CDATA = 1;

/**
 * 16
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-attribute-decl-node
 *
 * @var int
 */
const XML_ATTRIBUTE_DECL_NODE = 16;

/**
 * 5
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-attribute-entity
 *
 * @var int
 */
const XML_ATTRIBUTE_ENTITY = 6;

/**
 * 9
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-attribute-enumeration
 *
 * @var int
 */
const XML_ATTRIBUTE_ENUMERATION = 9;

/**
 * 2
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-attribute-id
 *
 * @var int
 */
const XML_ATTRIBUTE_ID = 2;

/**
 * 3
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-attribute-idref
 *
 * @var int
 */
const XML_ATTRIBUTE_IDREF = 3;

/**
 * 4
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-attribute-idrefs
 *
 * @var int
 */
const XML_ATTRIBUTE_IDREFS = 4;

/**
 * 7
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-attribute-nmtoken
 *
 * @var int
 */
const XML_ATTRIBUTE_NMTOKEN = 7;

/**
 * 8
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-attribute-nmtokens
 *
 * @var int
 */
const XML_ATTRIBUTE_NMTOKENS = 8;

/**
 * Node is a <code>DOMAttr</code>
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-attribute-node
 *
 * @var int
 */
const XML_ATTRIBUTE_NODE = 2;

/**
 * 10
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-attribute-notation
 *
 * @var int
 */
const XML_ATTRIBUTE_NOTATION = 10;

/**
 * Node is a <code>DOMCharacterData</code>
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-cdata-section-node
 *
 * @var int
 */
const XML_CDATA_SECTION_NODE = 4;

/**
 * Node is a <code>DOMComment</code>
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-comment-node
 *
 * @var int
 */
const XML_COMMENT_NODE = 8;

/**
 * Node is a <code>DOMDocumentFragment</code>
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-document-frag-node
 *
 * @var int
 */
const XML_DOCUMENT_FRAG_NODE = 11;

/**
 * Node is a <code>DOMDocument</code>
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-document-node
 *
 * @var int
 */
const XML_DOCUMENT_NODE = 9;

/**
 * Node is a <code>DOMDocumentType</code>
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-document-type-node
 *
 * @var int
 */
const XML_DOCUMENT_TYPE_NODE = 10;

/**
 * 14
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-dtd-node
 *
 * @var int
 */
const XML_DTD_NODE = 14;

/**
 * 15
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-element-decl-node
 *
 * @var int
 */
const XML_ELEMENT_DECL_NODE = 15;

/**
 * Node is a <code>DOMElement</code>
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-element-node
 *
 * @var int
 */
const XML_ELEMENT_NODE = 1;

/**
 * 17
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-entity-decl-node
 *
 * @var int
 */
const XML_ENTITY_DECL_NODE = 17;

/**
 * Node is a <code>DOMEntity</code>
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-entity-node
 *
 * @var int
 */
const XML_ENTITY_NODE = 6;

/**
 * Node is a <code>DOMEntityReference</code>
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-entity-ref-node
 *
 * @var int
 */
const XML_ENTITY_REF_NODE = 5;

/**
 * 13
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-html-document-node
 *
 * @var int
 */
const XML_HTML_DOCUMENT_NODE = 13;

/**
 * @var int
 */
const XML_LOCAL_NAMESPACE = 18;

/**
 * 18
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-namespace-decl-node
 *
 * @var int
 */
const XML_NAMESPACE_DECL_NODE = 18;

/**
 * Node is a <code>DOMNotation</code>
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-notation-node
 *
 * @var int
 */
const XML_NOTATION_NODE = 12;

/**
 * Node is a <code>DOMProcessingInstruction</code>
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-pi-node
 *
 * @var int
 */
const XML_PI_NODE = 7;

/**
 * Node is a <code>DOMText</code>
 *
 * @link http://www.php.net/manual/en/dom.constants.php#constant.xml-text-node
 *
 * @var int
 */
const XML_TEXT_NODE = 3;

/**
 * <code>DOMAttr</code> represents an attribute in the
 * <code>DOMElement</code> object.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.domattr.php
 */
class DOMAttr extends DOMNode
{
    /**
     * The name of the attribute
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domattr.php#domattr.props
     */
    public $name;

    /**
     * The element which contains the attribute
     *
     * @property-read
     *
     * @var DOMElement
     *
     * @link http://www.php.net/manual/en/class.domattr.php#domattr.props
     */
    public $ownerElement;

    /**
     * Not implemented yet, always is <code>NULL</code>
     *
     * @property-read
     *
     * @var bool
     *
     * @link http://www.php.net/manual/en/class.domattr.php#domattr.props
     */
    public $schemaTypeInfo;

    /**
     * Not implemented yet, always is <code>NULL</code>
     *
     * @property-read
     *
     * @var bool
     *
     * @link http://www.php.net/manual/en/class.domattr.php#domattr.props
     */
    public $specified;

    /**
     * The value of the attribute
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domattr.php#domattr.props
     */
    public $value;

    /**
     * Creates a new <code>DOMAttr</code> object
     *
     * @param mixed $name
     * @param mixed $value
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domattr.construct.php
     */
    public function __construct($name, $value = null)
    {
    }

    /**
     * Checks if attribute is a defined ID
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domattr.isid.php
     */
    public function isId()
    {
    }
}

/**
 * The <code>DOMCdataSection</code> inherits from
 * <code>DOMText</code> for textural representation
 * of CData constructs.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.domcdatasection.php
 */
class DOMCdataSection extends DOMText
{
    /**
     * Constructs a new DOMCdataSection object
     *
     * @param string $value The value of the CDATA node. If not supplied, an empty CDATA node is created.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domcdatasection.construct.php
     */
    public function __construct($value)
    {
    }
}

/**
 * Represents nodes with character data. No nodes directly correspond to
 * this class, but other nodes do inherit from it.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.domcharacterdata.php
 */
class DOMCharacterData extends DOMNode
{
    /**
     * The contents of the node.
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domcharacterdata.php#domcharacterdata.props
     */
    public $data;

    /**
     * The length of the contents.
     *
     * @property-read
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.domcharacterdata.php#domcharacterdata.props
     */
    public $length;

    /**
     * Append the string to the end of the character data of the node
     *
     * @param string $data The string to append.
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domcharacterdata.appenddata.php
     */
    public function appendData($data)
    {
    }

    /**
     * Remove a range of characters from the node
     *
     * @param int $offset The offset from which to start removing.
     * @param int $count The number of characters to delete. If the sum of
     * <code>offset</code> and <code>count</code> exceeds
     * the length, then all characters to the end of the data are deleted.
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domcharacterdata.deletedata.php
     */
    public function deleteData($offset, $count)
    {
    }

    /**
     * Insert a string at the specified 16-bit unit offset
     *
     * @param int $offset The character offset at which to insert.
     * @param string $data The string to insert.
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domcharacterdata.insertdata.php
     */
    public function insertData($offset, $data)
    {
    }

    /**
     * Replace a substring within the DOMCharacterData node
     *
     * @param int $offset The offset from which to start replacing.
     * @param int $count The number of characters to replace. If the sum of
     * <code>offset</code> and <code>count</code> exceeds
     * the length, then all characters to the end of the data are replaced.
     * @param string $data The string with which the range must be replaced.
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domcharacterdata.replacedata.php
     */
    public function replaceData($offset, $count, $data)
    {
    }

    /**
     * Extracts a range of data from the node
     *
     * @param int $offset Start offset of substring to extract.
     * @param int $count The number of characters to extract.
     *
     * @return string The specified substring. If the sum of <code>offset</code>
     * and <code>count</code> exceeds the length, then all 16-bit units
     * to the end of the data are returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domcharacterdata.substringdata.php
     */
    public function substringData($offset, $count)
    {
    }
}

/**
 * Represents comment nodes, characters delimited by <code>&lt;!--</code>
 * and <code>--&gt;</code>.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.domcomment.php
 */
class DOMComment extends DOMCharacterData
{
    /**
     * Creates a new DOMComment object
     *
     * @param mixed $value
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domcomment.construct.php
     */
    public function __construct($value = null)
    {
    }
}

class DOMConfiguration
{
    /**
     * @param mixed $name
     * @param mixed $value
     */
    public function canSetParameter($name = null, $value = null)
    {
    }

    /**
     * @param mixed $name
     */
    public function getParameter($name = null)
    {
    }

    /**
     * @param mixed $name
     * @param mixed $value
     */
    public function setParameter($name, $value)
    {
    }
}

/**
 * Represents an entire HTML or XML document; serves as the root of the
 * document tree.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.domdocument.php
 */
class DOMDocument extends DOMNode
{
    /**
     * <code>Deprecated</code>. Actual encoding of the document,
     * is a readonly equivalent to
     * <code linkend="domdocument.props.encoding">encoding</code>.
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domdocument.php#domdocument.props
     */
    public $actualEncoding;

    /**
     * <code>Deprecated</code>. Configuration used when
     * <code>DOMDocument::normalizeDocument</code> is
     * invoked.
     *
     * @property-read
     *
     * @var DOMConfiguration
     *
     * @link http://www.php.net/manual/en/class.domdocument.php#domdocument.props
     */
    public $config;

    /**
     * The Document Type Declaration associated with this document.
     *
     * @property-read
     *
     * @var DOMDocumentType
     *
     * @link http://www.php.net/manual/en/class.domdocument.php#domdocument.props
     */
    public $doctype;

    /**
     * This is a convenience attribute that allows direct access to the
     * child node that is the document element of the document.
     *
     * @property-read
     *
     * @var DOMElement
     *
     * @link http://www.php.net/manual/en/class.domdocument.php#domdocument.props
     */
    public $documentElement;

    /**
     * The location of the document or <code>NULL</code> if undefined.
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domdocument.php#domdocument.props
     */
    public $documentURI;

    /**
     * Encoding of the document, as specified by the XML declaration. This
     * attribute is not present in the final DOM Level 3 specification, but
     * is the only way of manipulating XML document encoding in this
     * implementation.
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domdocument.php#domdocument.props
     */
    public $encoding;

    /**
     * Nicely formats output with indentation and extra space.
     *
     * @var bool
     *
     * @link http://www.php.net/manual/en/class.domdocument.php#domdocument.props
     */
    public $formatOutput;

    /**
     * The <code>DOMImplementation</code> object that handles
     * this document.
     *
     * @property-read
     *
     * @var DOMImplementation
     *
     * @link http://www.php.net/manual/en/class.domdocument.php#domdocument.props
     */
    public $implementation;

    /**
     * Do not remove redundant white space. Default to <code>TRUE</code>.
     *
     * @var bool
     *
     * @link http://www.php.net/manual/en/class.domdocument.php#domdocument.props
     */
    public $preserveWhiteSpace;

    /**
     * <code>Proprietary</code>. Enables recovery mode, i.e. trying
     * to parse non-well formed documents. This attribute is not part of
     * the DOM specification and is specific to libxml.
     *
     * @var bool
     *
     * @link http://www.php.net/manual/en/class.domdocument.php#domdocument.props
     */
    public $recover;

    /**
     * Set it to <code>TRUE</code> to load external entities from a doctype
     * declaration. This is useful for including character entities in
     * your XML document.
     *
     * @var bool
     *
     * @link http://www.php.net/manual/en/class.domdocument.php#domdocument.props
     */
    public $resolveExternals;

    /**
     * <code>Deprecated</code>. Whether or not the document is
     * standalone, as specified by the XML declaration, corresponds to
     * <code linkend="domdocument.props.xmlstandalone">xmlStandalone</code>.
     *
     * @var bool
     *
     * @link http://www.php.net/manual/en/class.domdocument.php#domdocument.props
     */
    public $standalone;

    /**
     * Throws <code>DOMException</code> on errors. Default to <code>TRUE</code>.
     *
     * @var bool
     *
     * @link http://www.php.net/manual/en/class.domdocument.php#domdocument.props
     */
    public $strictErrorChecking;

    /**
     * <code>Proprietary</code>. Whether or not to substitute
     * entities. This attribute is not part of
     * the DOM specification and is specific to libxml.
     *
     * @var bool
     *
     * @link http://www.php.net/manual/en/class.domdocument.php#domdocument.props
     */
    public $substituteEntities;

    /**
     * Loads and validates against the DTD. Default to <code>FALSE</code>.
     *
     * @var bool
     *
     * @link http://www.php.net/manual/en/class.domdocument.php#domdocument.props
     */
    public $validateOnParse;

    /**
     * <code>Deprecated</code>. Version of XML, corresponds to
     * <code linkend="domdocument.props.xmlversion">xmlVersion</code>.
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domdocument.php#domdocument.props
     */
    public $version;

    /**
     * An attribute specifying, as part of the XML declaration, the
     * encoding of this document. This is <code>NULL</code> when unspecified or when it
     * is not known, such as when the Document was created in memory.
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domdocument.php#domdocument.props
     */
    public $xmlEncoding;

    /**
     * An attribute specifying, as part of the XML declaration, whether
     * this document is standalone. This is <code>FALSE</code> when unspecified.
     *
     * @var bool
     *
     * @link http://www.php.net/manual/en/class.domdocument.php#domdocument.props
     */
    public $xmlStandalone;

    /**
     * An attribute specifying, as part of the XML declaration, the
     * version number of this document. If there is no declaration and if
     * this document supports the "XML" feature, the value is "1.0".
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domdocument.php#domdocument.props
     */
    public $xmlVersion;

    /**
     * Creates a new DOMDocument object
     *
     * @param mixed $version
     * @param mixed $encoding
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.construct.php
     */
    public function __construct($version = null, $encoding = null)
    {
    }

    /**
     * @param DOMNode $source
     *
     * @since PHP 5, PHP 7
     */
    public function adoptNode(DOMNode $source)
    {
    }

    /**
     * Create new attribute
     *
     * @param string $name The name of the attribute.
     *
     * @return DOMAttr The new <code>DOMAttr</code> or <code>FALSE</code> if an error occurred.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.createattribute.php
     */
    public function createAttribute($name)
    {
    }

    /**
     * Create new attribute node with an associated namespace
     *
     * @param string $namespaceURI The URI of the namespace.
     * @param string $qualifiedName The tag name and prefix of the attribute, as <code>prefix:tagname</code>.
     *
     * @return DOMAttr The new <code>DOMAttr</code> or <code>FALSE</code> if an error occurred.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.createattributens.php
     */
    public function createAttributeNS($namespaceURI, $qualifiedName)
    {
    }

    /**
     * Create new cdata node
     *
     * @param string $data The content of the cdata.
     *
     * @return DOMCDATASection The new <code>DOMCDATASection</code> or <code>FALSE</code> if an error occurred.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.createcdatasection.php
     */
    public function createCDATASection($data)
    {
    }

    /**
     * Create new comment node
     *
     * @param string $data The content of the comment.
     *
     * @return DOMComment The new <code>DOMComment</code> or <code>FALSE</code> if an error occurred.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.createcomment.php
     */
    public function createComment($data)
    {
    }

    /**
     * Create new document fragment
     *
     * @return DOMDocumentFragment The new <code>DOMDocumentFragment</code> or <code>FALSE</code> if an error occurred.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.createdocumentfragment.php
     */
    public function createDocumentFragment()
    {
    }

    /**
     * Create new element node
     *
     * @param string $name The tag name of the element.
     * @param string $value The value of the element. By default, an empty element will be created.
     * The value can also be set later with DOMElement::$nodeValue.
     *
     * @return DOMElement Returns a new instance of class <code>DOMElement</code> or <code>FALSE</code>
     * if an error occurred.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.createelement.php
     */
    public function createElement($name, $value = null)
    {
    }

    /**
     * Create new element node with an associated namespace
     *
     * @param string $namespaceURI The URI of the namespace.
     * @param string $qualifiedName The qualified name of the element, as <code>prefix:tagname</code>.
     * @param string $value The value of the element. By default, an empty element will be created.
     * You can also set the value later with DOMElement::$nodeValue.
     *
     * @return DOMElement The new <code>DOMElement</code> or <code>FALSE</code> if an error occurred.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.createelementns.php
     */
    public function createElementNS($namespaceURI, $qualifiedName, $value = null)
    {
    }

    /**
     * Create new entity reference node
     *
     * @param string $name The content of the entity reference, e.g. the entity reference minus
     * the leading <code>&amp;</code> and the trailing
     * <code>;</code> characters.
     *
     * @return DOMEntityReference The new <code>DOMEntityReference</code> or <code>FALSE</code> if an error
     * occurred.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.createentityreference.php
     */
    public function createEntityReference($name)
    {
    }

    /**
     * Creates new PI node
     *
     * @param string $target The target of the processing instruction.
     * @param string $data The content of the processing instruction.
     *
     * @return DOMProcessingInstruction The new <code>DOMProcessingInstruction</code> or <code>FALSE</code> if an error occurred.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.createprocessinginstruction.php
     */
    public function createProcessingInstruction($target, $data)
    {
    }

    /**
     * Create new text node
     *
     * @param string $content The content of the text.
     *
     * @return DOMText The new <code>DOMText</code> or <code>FALSE</code> if an error occurred.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.createtextnode.php
     */
    public function createTextNode($content)
    {
    }

    /**
     * Searches for an element with a certain id
     *
     * @param string $elementId The unique id value for an element.
     *
     * @return DOMElement Returns the <code>DOMElement</code> or <code>NULL</code> if the element is
     * not found.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.getelementbyid.php
     */
    public function getElementById($elementId)
    {
    }

    /**
     * Searches for all elements with given local tag name
     *
     * @param string $name The local name (without namespace) of the tag to match on. The special value <code>*</code>
     * matches all tags.
     *
     * @return DOMNodeList A new <code>DOMNodeList</code> object containing all the matched
     * elements.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.getelementsbytagname.php
     */
    public function getElementsByTagName($name)
    {
    }

    /**
     * Searches for all elements with given tag name in specified namespace
     *
     * @param string $namespaceURI The namespace URI of the elements to match on.
     * The special value <code>*</code> matches all namespaces.
     * @param string $localName The local name of the elements to match on.
     * The special value <code>*</code> matches all local names.
     *
     * @return DOMNodeList A new <code>DOMNodeList</code> object containing all the matched
     * elements.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.getelementsbytagnamens.php
     */
    public function getElementsByTagNameNS($namespaceURI, $localName)
    {
    }

    /**
     * Import node into current document
     *
     * @param DOMNode $importedNode The node to import.
     * @param bool $deep If set to <code>TRUE</code>, this method will recursively import the subtree under
     * the <code>importedNode</code>.
     *
     * @return DOMNode The copied node or <code>FALSE</code>, if it cannot be copied.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.importnode.php
     */
    public function importNode(DOMNode $importedNode, $deep)
    {
    }

    /**
     * Load XML from a file
     *
     * @param string $filename The path to the XML document.
     * @param int|null $options Bitwise <code>OR</code>
     * of the libxml option constants.
     *
     * @return mixed Returns <code>TRUE</code> on success or <code>FALSE</code> on failure. If called statically, returns a
     * <code>DOMDocument</code> or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.load.php
     */
    public function load($filename, $options = 0)
    {
    }

    /**
     * Load HTML from a string
     *
     * @param string $source The HTML string.
     * @param int|null $options Since PHP 5.4.0 and Libxml 2.6.0, you may also use the
     * <code>options</code> parameter to specify additional Libxml parameters.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure. If called statically, returns a
     * <code>DOMDocument</code> or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.loadhtml.php
     */
    public function loadHTML($source, $options = 0)
    {
    }

    /**
     * Load HTML from a file
     *
     * @param string $filename The path to the HTML file.
     * @param int|null $options Since PHP 5.4.0 and Libxml 2.6.0, you may also use the
     * <code>options</code> parameter to specify additional Libxml parameters.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure. If called statically, returns a
     * <code>DOMDocument</code> or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.loadhtmlfile.php
     */
    public function loadHTMLFile($filename, $options = 0)
    {
    }

    /**
     * Load XML from a string
     *
     * @param string $source The string containing the XML.
     * @param int|null $options Bitwise <code>OR</code>
     * of the libxml option constants.
     *
     * @return mixed Returns <code>TRUE</code> on success or <code>FALSE</code> on failure. If called statically, returns a
     * <code>DOMDocument</code> or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.loadxml.php
     */
    public function loadXML($source, $options = 0)
    {
    }

    /**
     * Normalizes the document
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.normalizedocument.php
     */
    public function normalizeDocument()
    {
    }

    /**
     * Register extended class used to create base node type
     *
     * @param string $baseclass The DOM class that you want to extend. You can find a list of these
     * classes in the chapter introduction.
     * @param string $extendedclass Your extended class name. If <code>NULL</code> is provided, any previously
     * registered class extending <code>baseclass</code> will
     * be removed.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.registernodeclass.php
     */
    public function registerNodeClass($baseclass, $extendedclass)
    {
    }

    /**
     * Performs relaxNG validation on the document
     *
     * @param string $filename The RNG file.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.relaxngvalidate.php
     */
    public function relaxNGValidate($filename)
    {
    }

    /**
     * Performs relaxNG validation on the document
     *
     * @param string $source A string containing the RNG schema.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.relaxngvalidatesource.php
     */
    public function relaxNGValidateSource($source)
    {
    }

    /**
     * @param DOMNode $node
     * @param mixed $namespaceURI
     * @param mixed $qualifiedName
     *
     * @since PHP 5, PHP 7
     */
    public function renameNode(DOMNode $node, $namespaceURI, $qualifiedName)
    {
    }

    /**
     * Dumps the internal XML tree back into a file
     *
     * @param string $filename The path to the saved XML document.
     *
     * @return int Returns the number of bytes written or <code>FALSE</code> if an error occurred.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.save.php
     */
    public function save($filename)
    {
    }

    /**
     * Dumps the internal document into a string using HTML formatting
     *
     * @return string Returns the HTML, or <code>FALSE</code> if an error occurred.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.savehtml.php
     */
    public function saveHTML()
    {
    }

    /**
     * Dumps the internal document into a file using HTML formatting
     *
     * @param string $filename The path to the saved HTML document.
     *
     * @return int Returns the number of bytes written or <code>FALSE</code> if an error occurred.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.savehtmlfile.php
     */
    public function saveHTMLFile($filename)
    {
    }

    /**
     * Dumps the internal XML tree back into a string
     *
     * @param DOMNode|null $node Use this parameter to output only a specific node without XML declaration
     * rather than the entire document.
     *
     * @return string Returns the XML, or <code>FALSE</code> if an error occurred.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.savexml.php
     */
    public function saveXML(DOMNode $node = null)
    {
    }

    /**
     * Validates a document based on a schema
     *
     * @param string $filename The path to the schema.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.schemavalidate.php
     */
    public function schemaValidate($filename)
    {
    }

    /**
     * Validates a document based on a schema
     *
     * @param string $source A string containing the schema.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.schemavalidatesource.php
     */
    public function schemaValidateSource($source)
    {
    }

    /**
     * Validates the document based on its DTD
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * If the document have no DTD attached, this method will return <code>FALSE</code>.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.validate.php
     */
    public function validate()
    {
    }

    /**
     * Substitutes XIncludes in a DOMDocument Object
     *
     * @param int $options libxml parameters. Available
     * since PHP 5.1.0 and Libxml 2.6.7.
     *
     * @return int Returns the number of XIncludes in the document, -1 if some processing failed,
     * or <code>FALSE</code> if there were no substitutions.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocument.xinclude.php
     */
    public function xinclude($options = null)
    {
    }
}

/**
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.domdocumentfragment.php
 */
class DOMDocumentFragment extends DOMNode
{
    /**
     * @since PHP 5, PHP 7
     */
    public function __construct()
    {
    }

    /**
     * Append raw XML data
     *
     * @param string $data XML to append.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/domdocumentfragment.appendxml.php
     */
    public function appendXML($data)
    {
    }
}

/**
 * Each <code>DOMDocument</code> has a <code>doctype</code>
 * attribute whose value is either <code>NULL</code> or a <code>DOMDocumentType</code> object.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.domdocumenttype.php
 */
class DOMDocumentType extends DOMNode
{
    /**
     * A <code>DOMNamedNodeMap</code> containing the general
     * entities, both external and internal, declared in the DTD.
     *
     * @property-read
     *
     * @var DOMNamedNodeMap
     *
     * @link http://www.php.net/manual/en/class.domdocumenttype.php#domdocumenttype.props
     */
    public $entities;

    /**
     * The internal subset as a string, or null if there is none. This
     * does not contain the delimiting square brackets.
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domdocumenttype.php#domdocumenttype.props
     */
    public $internalSubset;

    /**
     * The name of DTD; i.e., the name immediately following the
     * <code>DOCTYPE</code> keyword.
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domdocumenttype.php#domdocumenttype.props
     */
    public $name;

    /**
     * A <code>DOMNamedNodeMap</code> containing the notations
     * declared in the DTD.
     *
     * @property-read
     *
     * @var DOMNamedNodeMap
     *
     * @link http://www.php.net/manual/en/class.domdocumenttype.php#domdocumenttype.props
     */
    public $notations;

    /**
     * The public identifier of the external subset.
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domdocumenttype.php#domdocumenttype.props
     */
    public $publicId;

    /**
     * The system identifier of the external subset. This may be an
     * absolute URI or not.
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domdocumenttype.php#domdocumenttype.props
     */
    public $systemId;
}

class DOMDomError
{
}

/**
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.domelement.php
 */
class DOMElement extends DOMNode
{
    /**
     * Not implemented yet, always return <code>NULL</code>
     *
     * @property-read
     *
     * @var bool
     *
     * @link http://www.php.net/manual/en/class.domelement.php#domelement.props
     */
    public $schemaTypeInfo;

    /**
     * The element name
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domelement.php#domelement.props
     */
    public $tagName;

    /**
     * Creates a new DOMElement object
     *
     * @param mixed $name
     * @param mixed $value
     * @param mixed $uri
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domelement.construct.php
     */
    public function __construct($name, $value = null, $uri = null)
    {
    }

    /**
     * Returns value of attribute
     *
     * @param string $name The name of the attribute.
     *
     * @return string The value of the attribute, or an empty string if no attribute with the
     * given <code>name</code> is found.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domelement.getattribute.php
     */
    public function getAttribute($name)
    {
    }

    /**
     * Returns attribute node
     *
     * @param string $name The name of the attribute.
     *
     * @return DOMAttr The attribute node. Note that for XML namespace declarations
     * (<code>xmlns</code> and <code>xmlns:*</code> attributes) an
     * instance of <code>DOMNameSpaceNode</code> is returned instead of a
     * <code>DOMAttr</code>.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domelement.getattributenode.php
     */
    public function getAttributeNode($name)
    {
    }

    /**
     * Returns attribute node
     *
     * @param string $namespaceURI The namespace URI.
     * @param string $localName The local name.
     *
     * @return DOMAttr The attribute node. Note that for XML namespace declarations
     * (<code>xmlns</code> and <code>xmlns:*</code> attributes) an
     * instance of <code>DOMNameSpaceNode</code> is returned instead of a
     * <code>DOMAttr</code> object.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domelement.getattributenodens.php
     */
    public function getAttributeNodeNS($namespaceURI, $localName)
    {
    }

    /**
     * Returns value of attribute
     *
     * @param string $namespaceURI The namespace URI.
     * @param string $localName The local name.
     *
     * @return string The value of the attribute, or an empty string if no attribute with the
     * given <code>localName</code> and <code>namespaceURI</code>
     * is found.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domelement.getattributens.php
     */
    public function getAttributeNS($namespaceURI, $localName)
    {
    }

    /**
     * Gets elements by tagname
     *
     * @param string $name The tag name. Use <code>*</code> to return all elements within
     * the element tree.
     *
     * @return DOMNodeList This function returns a new instance of the class
     * <code>DOMNodeList</code> of all matched elements.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domelement.getelementsbytagname.php
     */
    public function getElementsByTagName($name)
    {
    }

    /**
     * Get elements by namespaceURI and localName
     *
     * @param string $namespaceURI The namespace URI.
     * @param string $localName The local name. Use <code>*</code> to return all elements within
     * the element tree.
     *
     * @return DOMNodeList This function returns a new instance of the class
     * <code>DOMNodeList</code> of all matched elements in the order in
     * which they are encountered in a preorder traversal of this element tree.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domelement.getelementsbytagnamens.php
     */
    public function getElementsByTagNameNS($namespaceURI, $localName)
    {
    }

    /**
     * Checks to see if attribute exists
     *
     * @param string $name The attribute name.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domelement.hasattribute.php
     */
    public function hasAttribute($name)
    {
    }

    /**
     * Checks to see if attribute exists
     *
     * @param string $namespaceURI The namespace URI.
     * @param string $localName The local name.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domelement.hasattributens.php
     */
    public function hasAttributeNS($namespaceURI, $localName)
    {
    }

    /**
     * Removes attribute
     *
     * @param string $name The name of the attribute.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domelement.removeattribute.php
     */
    public function removeAttribute($name)
    {
    }

    /**
     * Removes attribute
     *
     * @param DOMAttr $oldnode The attribute node.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domelement.removeattributenode.php
     */
    public function removeAttributeNode(DOMAttr $oldnode)
    {
    }

    /**
     * Removes attribute
     *
     * @param string $namespaceURI The namespace URI.
     * @param string $localName The local name.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domelement.removeattributens.php
     */
    public function removeAttributeNS($namespaceURI, $localName)
    {
    }

    /**
     * Adds new attribute
     *
     * @param string $name The name of the attribute.
     * @param string $value The value of the attribute.
     *
     * @return DOMAttr The new <code>DOMAttr</code> or <code>FALSE</code> if an error occurred.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domelement.setattribute.php
     */
    public function setAttribute($name, $value)
    {
    }

    /**
     * Adds new attribute node to element
     *
     * @param DOMAttr $attr The attribute node.
     *
     * @return DOMAttr Returns old node if the attribute has been replaced or <code>NULL</code>.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domelement.setattributenode.php
     */
    public function setAttributeNode(DOMAttr $attr)
    {
    }

    /**
     * Adds new attribute node to element
     *
     * @param DOMAttr $attr The attribute node.
     *
     * @return DOMAttr Returns the old node if the attribute has been replaced.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domelement.setattributenodens.php
     */
    public function setAttributeNodeNS(DOMAttr $attr)
    {
    }

    /**
     * Adds new attribute
     *
     * @param string $namespaceURI The namespace URI.
     * @param string $qualifiedName The qualified name of the attribute, as <code>prefix:tagname</code>.
     * @param string $value The value of the attribute.
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domelement.setattributens.php
     */
    public function setAttributeNS($namespaceURI, $qualifiedName, $value)
    {
    }

    /**
     * Declares the attribute specified by name to be of type ID
     *
     * @param string $name The name of the attribute.
     * @param bool $isId Set it to <code>TRUE</code> if you want <code>name</code> to be of type
     * ID, <code>FALSE</code> otherwise.
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domelement.setidattribute.php
     */
    public function setIdAttribute($name, $isId)
    {
    }

    /**
     * Declares the attribute specified by node to be of type ID
     *
     * @param DOMAttr $attr The attribute node.
     * @param bool $isId Set it to <code>TRUE</code> if you want <code>name</code> to be of type
     * ID, <code>FALSE</code> otherwise.
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domelement.setidattributenode.php
     */
    public function setIdAttributeNode(DOMAttr $attr, $isId)
    {
    }

    /**
     * Declares the attribute specified by local name and namespace URI to be of type ID
     *
     * @param string $namespaceURI The namespace URI of the attribute.
     * @param string $localName The local name of the attribute, as <code>prefix:tagname</code>.
     * @param bool $isId Set it to <code>TRUE</code> if you want <code>name</code> to be of type
     * ID, <code>FALSE</code> otherwise.
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domelement.setidattributens.php
     */
    public function setIdAttributeNS($namespaceURI, $localName, $isId)
    {
    }
}

/**
 * This interface represents a known entity, either parsed or unparsed, in an XML document.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.domentity.php
 */
class DOMEntity extends DOMNode
{
    /**
     * An attribute specifying the encoding used for this entity at the
     * time of parsing, when it is an external parsed entity. This is
     * <code>NULL</code> if it an entity from the internal subset or if it is not
     * known.
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domentity.php#domentity.props
     */
    public $actualEncoding;

    /**
     * An attribute specifying, as part of the text declaration, the
     * encoding of this entity, when it is an external parsed entity. This
     * is <code>NULL</code> otherwise.
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domentity.php#domentity.props
     */
    public $encoding;

    /**
     * For unparsed entities, the name of the notation for the entity. For
     * parsed entities, this is <code>NULL</code>.
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domentity.php#domentity.props
     */
    public $notationName;

    /**
     * The public identifier associated with the entity if specified, and
     * <code>NULL</code> otherwise.
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domentity.php#domentity.props
     */
    public $publicId;

    /**
     * The system identifier associated with the entity if specified, and
     * <code>NULL</code> otherwise. This may be an absolute URI or not.
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domentity.php#domentity.props
     */
    public $systemId;

    /**
     * An attribute specifying, as part of the text declaration, the
     * version number of this entity, when it is an external parsed
     * entity. This is <code>NULL</code> otherwise.
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domentity.php#domentity.props
     */
    public $version;
}

/**
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.domentityreference.php
 */
class DOMEntityReference extends DOMNode
{
    /**
     * Creates a new DOMEntityReference object
     *
     * @param mixed $name
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domentityreference.construct.php
     */
    public function __construct($name)
    {
    }
}

class DOMErrorHandler
{
    /**
     * @param DOMDomError $error
     */
    public function handleError(DOMDomError $error)
    {
    }
}

/**
 * DOM operations raise exceptions under particular circumstances, i.e.,
 * when an operation is impossible to perform for logical reasons.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.domexception.php
 */
class DOMException extends Exception
{
    /**
     * An integer indicating the type of error generated
     *
     * @property-read
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.domexception.php#domexception.props
     */
    public $code = 0;
}

/**
 * The <code>DOMImplementation</code> interface provides a number
 * of methods for performing operations that are independent of any
 * particular instance of the document object model.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.domimplementation.php
 */
class DOMImplementation
{
    /**
     * Creates a DOMDocument object of the specified type with its document element
     *
     * @param string|null $namespaceURI The namespace URI of the document element to create.
     * @param string|null $qualifiedName The qualified name of the document element to create.
     * @param DOMDocumentType|null $doctype The type of document to create or <code>NULL</code>.
     *
     * @return DOMDocument A new <code>DOMDocument</code> object. If
     * <code>namespaceURI</code>, <code>qualifiedName</code>,
     * and <code>doctype</code> are null, the returned
     * <code>DOMDocument</code> is empty with no document element
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domimplementation.createdocument.php
     */
    public function createDocument($namespaceURI = null, $qualifiedName = null, DOMDocumentType $doctype = null)
    {
    }

    /**
     * Creates an empty DOMDocumentType object
     *
     * @param string|null $qualifiedName The qualified name of the document type to create.
     * @param string|null $publicId The external subset public identifier.
     * @param string|null $systemId The external subset system identifier.
     *
     * @return DOMDocumentType A new <code>DOMDocumentType</code> node with its
     * <code>ownerDocument</code> set to <code>NULL</code>.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domimplementation.createdocumenttype.php
     */
    public function createDocumentType($qualifiedName = null, $publicId = null, $systemId = null)
    {
    }

    /**
     * @param mixed $feature
     * @param mixed $version
     *
     * @since PHP 5, PHP 7
     */
    public function getFeature($feature, $version)
    {
    }

    /**
     * Test if the DOM implementation implements a specific feature
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domimplementation.hasfeature.php
     */
    public function hasFeature()
    {
    }
}

class DOMImplementationList
{
    /**
     * @param mixed $index
     */
    public function item($index)
    {
    }
}

class DOMImplementationSource
{
    /**
     * @param mixed $features
     */
    public function getDomimplementation($features)
    {
    }

    /**
     * @param mixed $features
     */
    public function getDomimplementations($features)
    {
    }
}

class DOMLocator
{
}

/**
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.domnamednodemap.php
 */
class DOMNamedNodeMap implements Traversable
{
    /**
     * The number of nodes in the map. The range of valid child node
     * indices is <code>0</code> to <code>length - 1</code> inclusive.
     *
     * @property-read
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.domnamednodemap.php#domnamednodemap.props
     */
    public $length;

    /**
     * Retrieves a node specified by name
     *
     * @param string $name The <code>nodeName</code> of the node to retrieve.
     *
     * @return DOMNode A node (of any type) with the specified <code>nodeName</code>, or
     * <code>NULL</code> if no node is found.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domnamednodemap.getnameditem.php
     */
    public function getNamedItem($name)
    {
    }

    /**
     * Retrieves a node specified by local name and namespace URI
     *
     * @param string $namespaceURI The namespace URI of the node to retrieve.
     * @param string $localName The local name of the node to retrieve.
     *
     * @return DOMNode A node (of any type) with the specified local name and namespace URI, or
     * <code>NULL</code> if no node is found.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domnamednodemap.getnameditemns.php
     */
    public function getNamedItemNS($namespaceURI = null, $localName = null)
    {
    }

    /**
     * Retrieves a node specified by index
     *
     * @param int $index Index into this map.
     *
     * @return DOMNode The node at the <code>index</code>th position in the map, or <code>NULL</code>
     * if that is not a valid index (greater than or equal to the number of nodes
     * in this map).
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domnamednodemap.item.php
     */
    public function item($index = null)
    {
    }

    /**
     * @param mixed $name
     *
     * @since PHP 5, PHP 7
     */
    public function removeNamedItem($name = null)
    {
    }

    /**
     * @param mixed $namespaceURI
     * @param mixed $localName
     *
     * @since PHP 5, PHP 7
     */
    public function removeNamedItemNS($namespaceURI = null, $localName = null)
    {
    }

    /**
     * @param DOMNode $arg
     *
     * @since PHP 5, PHP 7
     */
    public function setNamedItem(DOMNode $arg)
    {
    }

    /**
     * @param DOMNode $arg
     *
     * @since PHP 5, PHP 7
     */
    public function setNamedItemNS(DOMNode $arg = null)
    {
    }
}

class DOMNameList
{
    /**
     * @param mixed $index
     */
    public function getName($index)
    {
    }

    /**
     * @param mixed $index
     */
    public function getNamespaceURI($index)
    {
    }
}

class DOMNameSpaceNode
{
}

/**
 * <table>
 * <thead>
 * <tr>
 * <td>Version</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>5.6.1</td><td>
 * The textContent property has been made writable (formerly it has been
 * readonly).
 * </td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.domnode.php
 */
class DOMNode
{
    /**
     * A <code>DOMNamedNodeMap</code> containing the
     * attributes of this node (if it is a <code>DOMElement</code>)
     * or <code>NULL</code> otherwise.
     *
     * @property-read
     *
     * @var DOMNamedNodeMap
     *
     * @link http://www.php.net/manual/en/class.domnode.php#domnode.props
     */
    public $attributes;

    /**
     * The absolute base URI of this node or <code>NULL</code> if the implementation
     * wasn't able to obtain an absolute URI.
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domnode.php#domnode.props
     */
    public $baseURI;

    /**
     * A <code>DOMNodeList</code> that contains all
     * children of this node. If there are no children, this is an empty
     * <code>DOMNodeList</code>.
     *
     * @property-read
     *
     * @var DOMNodeList
     *
     * @link http://www.php.net/manual/en/class.domnode.php#domnode.props
     */
    public $childNodes;

    /**
     * The first child of this node. If there is no such node, this
     * returns <code>NULL</code>.
     *
     * @property-read
     *
     * @var DOMNode
     *
     * @link http://www.php.net/manual/en/class.domnode.php#domnode.props
     */
    public $firstChild;

    /**
     * The last child of this node. If there is no such node, this returns <code>NULL</code>.
     *
     * @property-read
     *
     * @var DOMNode
     *
     * @link http://www.php.net/manual/en/class.domnode.php#domnode.props
     */
    public $lastChild;

    /**
     * Returns the local part of the qualified name of this node.
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domnode.php#domnode.props
     */
    public $localName;

    /**
     * The namespace URI of this node, or <code>NULL</code> if it is unspecified.
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domnode.php#domnode.props
     */
    public $namespaceURI;

    /**
     * The node immediately following this node. If there is no such
     * node, this returns <code>NULL</code>.
     *
     * @property-read
     *
     * @var DOMNode
     *
     * @link http://www.php.net/manual/en/class.domnode.php#domnode.props
     */
    public $nextSibling;

    /**
     * Returns the most accurate name for the current node type
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domnode.php#domnode.props
     */
    public $nodeName;

    /**
     * Gets the type of the node. One of the predefined XML_xxx_NODE constants
     *
     * @property-read
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.domnode.php#domnode.props
     */
    public $nodeType;

    /**
     * The value of this node, depending on its type.
     * Contrary to the W3C specification, the node value of
     * <code>DOMElement</code> nodes is equal to DOMNode::textContent instead
     * of <code>NULL</code>.
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domnode.php#domnode.props
     */
    public $nodeValue;

    /**
     * The <code>DOMDocument</code> object associated with this node.
     *
     * @property-read
     *
     * @var DOMDocument
     *
     * @link http://www.php.net/manual/en/class.domnode.php#domnode.props
     */
    public $ownerDocument;

    /**
     * The parent of this node. If there is no such node, this returns <code>NULL</code>.
     *
     * @property-read
     *
     * @var DOMNode
     *
     * @link http://www.php.net/manual/en/class.domnode.php#domnode.props
     */
    public $parentNode;

    /**
     * The namespace prefix of this node, or <code>NULL</code> if it is unspecified.
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domnode.php#domnode.props
     */
    public $prefix;

    /**
     * The node immediately preceding this node. If there is no such
     * node, this returns <code>NULL</code>.
     *
     * @property-read
     *
     * @var DOMNode
     *
     * @link http://www.php.net/manual/en/class.domnode.php#domnode.props
     */
    public $previousSibling;

    /**
     * The text content of this node and its descendants.
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domnode.php#domnode.props
     */
    public $textContent;

    /**
     * Adds new child at the end of the children
     *
     * @param DOMNode $newnode The appended child.
     *
     * @return DOMNode The node added.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domnode.appendchild.php
     */
    public function appendChild(DOMNode $newnode)
    {
    }

    /**
     * Canonicalize nodes to a string
     *
     * @param bool $exclusive Enable exclusive parsing of only the nodes matched by the provided
     * xpath or namespace prefixes.
     * @param bool $with_comments Retain comments in output.
     * @param array|null $xpath An array of <code>xpath</code>s to filter the nodes by.
     * @param array|null $ns_prefixes An array of namespace prefixes to filter the nodes by.
     *
     * @return string Returns canonicalized nodes as a string or <code>FALSE</code> on failure
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/domnode.c14n.php
     */
    public function C14N($exclusive = null, $with_comments = null, array $xpath = null, array $ns_prefixes = null)
    {
    }

    /**
     * Canonicalize nodes to a file
     *
     * @param string $uri Path to write the output to.
     * @param bool|null $exclusive Enable exclusive parsing of only the nodes matched by the provided
     * xpath or namespace prefixes.
     * @param bool|null $with_comments Retain comments in output.
     * @param array|null $xpath An array of <code>xpath</code>s to filter the nodes by.
     * @param array|null $ns_prefixes An array of namespace prefixes to filter the nodes by.
     *
     * @return int Number of bytes written or <code>FALSE</code> on failure
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/domnode.c14nfile.php
     */
    public function C14NFile($uri, $exclusive = false, $with_comments = false, array $xpath = null, array $ns_prefixes = null)
    {
    }

    /**
     * Clones a node
     *
     * @param bool $deep Indicates whether to copy all descendant nodes. This parameter is
     * defaulted to <code>FALSE</code>.
     *
     * @return DOMNode The cloned node.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domnode.clonenode.php
     */
    public function cloneNode($deep)
    {
    }

    /**
     * @param DOMNode $other
     *
     * @since PHP 5, PHP 7
     */
    public function compareDocumentPosition(DOMNode $other)
    {
    }

    /**
     * @param mixed $feature
     * @param mixed $version
     *
     * @since PHP 5, PHP 7
     */
    public function getFeature($feature, $version)
    {
    }

    /**
     * Get line number for a node
     *
     * @return int Always returns the line number where the node was defined in.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/domnode.getlineno.php
     */
    public function getLineNo()
    {
    }

    /**
     * Get an XPath for a node
     *
     * @return string Returns a <code>string</code> containing the XPath, or <code>NULL</code> in case of an error.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/domnode.getnodepath.php
     */
    public function getNodePath()
    {
    }

    /**
     * @param mixed $key
     *
     * @since PHP 5, PHP 7
     */
    public function getUserData($key)
    {
    }

    /**
     * Checks if node has attributes
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domnode.hasattributes.php
     */
    public function hasAttributes()
    {
    }

    /**
     * Checks if node has children
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domnode.haschildnodes.php
     */
    public function hasChildNodes()
    {
    }

    /**
     * Adds a new child before a reference node
     *
     * @param DOMNode $newnode The new node.
     * @param DOMNode|null $refnode The reference node. If not supplied, <code>newnode</code> is
     * appended to the children.
     *
     * @return DOMNode The inserted node.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domnode.insertbefore.php
     */
    public function insertBefore(DOMNode $newnode, DOMNode $refnode = null)
    {
    }

    /**
     * Checks if the specified namespaceURI is the default namespace or not
     *
     * @param string $namespaceURI The namespace URI to look for.
     *
     * @return bool Return <code>TRUE</code> if <code>namespaceURI</code> is the default
     * namespace, <code>FALSE</code> otherwise.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domnode.isdefaultnamespace.php
     */
    public function isDefaultNamespace($namespaceURI)
    {
    }

    /**
     * @param DOMNode $arg
     *
     * @since PHP 5, PHP 7
     */
    public function isEqualNode(DOMNode $arg)
    {
    }

    /**
     * Indicates if two nodes are the same node
     *
     * @param DOMNode $node The compared node.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domnode.issamenode.php
     */
    public function isSameNode(DOMNode $node)
    {
    }

    /**
     * Checks if feature is supported for specified version
     *
     * @param string $feature The feature to test. See the example of
     * <code>DOMImplementation::hasFeature</code> for a
     * list of features.
     * @param string $version The version number of the <code>feature</code> to test.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domnode.issupported.php
     */
    public function isSupported($feature, $version)
    {
    }

    /**
     * Gets the namespace URI of the node based on the prefix
     *
     * @param string $prefix The prefix of the namespace.
     *
     * @return string The namespace URI of the node.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domnode.lookupnamespaceuri.php
     */
    public function lookupNamespaceUri($prefix)
    {
    }

    /**
     * Gets the namespace prefix of the node based on the namespace URI
     *
     * @param string $namespaceURI The namespace URI.
     *
     * @return string The prefix of the namespace.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domnode.lookupprefix.php
     */
    public function lookupPrefix($namespaceURI)
    {
    }

    /**
     * Normalizes the node
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domnode.normalize.php
     */
    public function normalize()
    {
    }

    /**
     * Removes child from list of children
     *
     * @param DOMNode $oldnode The removed child.
     *
     * @return DOMNode If the child could be removed the function returns the old child.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domnode.removechild.php
     */
    public function removeChild(DOMNode $oldnode)
    {
    }

    /**
     * Replaces a child
     *
     * @param DOMNode $newnode The new node. It must be a member of the target document, i.e.
     * created by one of the DOMDocument-&gt;createXXX() methods or imported in
     * the document by .
     * @param DOMNode $oldnode The old node.
     *
     * @return DOMNode The old node or <code>FALSE</code> if an error occur.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domnode.replacechild.php
     */
    public function replaceChild(DOMNode $newnode, DOMNode $oldnode)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $data
     * @param mixed $handler
     *
     * @since PHP 5, PHP 7
     */
    public function setUserData($key, $data, $handler)
    {
    }
}

/**
 * <ul>
 * <li>W3C specification of NodeList</li>
 * </ul>
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.domnodelist.php
 */
class DOMNodeList implements Traversable
{
    /**
     * The number of nodes in the list. The range of valid child node
     * indices is 0 to <code>length - 1</code> inclusive.
     *
     * @property-read
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.domnodelist.php#domnodelist.props
     */
    public $length;

    /**
     * Retrieves a node specified by index
     *
     * @param int $index Index of the node into the collection.
     *
     * @return DOMNode The node at the <code>index</code>th position in the
     * <code>DOMNodeList</code>, or <code>NULL</code> if that is not a valid
     * index.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domnodelist.item.php
     */
    public function item($index)
    {
    }
}

/**
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.domnotation.php
 */
class DOMNotation extends DOMNode
{
    /**
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domnotation.php#domnotation.props
     */
    public $publicId;

    /**
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domnotation.php#domnotation.props
     */
    public $systemId;
}

/**
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.domprocessinginstruction.php
 */
class DOMProcessingInstruction extends DOMNode
{
    /**
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domprocessinginstruction.php#domprocessinginstruction.props
     */
    public $data;

    /**
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domprocessinginstruction.php#domprocessinginstruction.props
     */
    public $target;

    /**
     * Creates a new <code>DOMProcessingInstruction</code> object
     *
     * @param mixed $name
     * @param mixed $value
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domprocessinginstruction.construct.php
     */
    public function __construct($name, $value = null)
    {
    }
}

class DOMStringExtend
{
    /**
     * @param mixed $offset32
     */
    public function findOffset16($offset32)
    {
    }

    /**
     * @param mixed $offset16
     */
    public function findOffset32($offset16)
    {
    }
}

class DOMStringList
{
    /**
     * @param mixed $index
     */
    public function item($index)
    {
    }
}

/**
 * The <code>DOMText</code> class inherits from
 * <code>DOMCharacterData</code> and represents the textual
 * content of a <code>DOMElement</code> or
 * <code>DOMAttr</code>.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.domtext.php
 */
class DOMText extends DOMCharacterData
{
    /**
     * Holds all the text of logically-adjacent (not separated by Element,
     * Comment or Processing Instruction) Text nodes.
     *
     * @property-read
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.domtext.php#domtext.props
     */
    public $wholeText;

    /**
     * Creates a new <code>DOMText</code> object
     *
     * @param string $value The value of the text node. If not supplied an empty text node is created.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domtext.construct.php
     */
    public function __construct($value = null)
    {
    }

    /**
     * Returns whether this text node contains whitespace in element content
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/domtext.iselementcontentwhitespace.php
     */
    public function isElementContentWhitespace()
    {
    }

    /**
     * Indicates whether this text node contains whitespace
     *
     * @return bool Returns <code>TRUE</code> if node contains zero or more whitespace characters and
     * nothing else. Returns <code>FALSE</code> otherwise.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domtext.iswhitespaceinelementcontent.php
     */
    public function isWhitespaceInElementContent()
    {
    }

    /**
     * @param mixed $content
     *
     * @since PHP 5, PHP 7
     */
    public function replaceWholeText($content)
    {
    }

    /**
     * Breaks this node into two nodes at the specified offset
     *
     * @param int $offset The offset at which to split, starting from 0.
     *
     * @return DOMText The new node of the same type, which contains all the content at and after the
     * <code>offset</code>.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domtext.splittext.php
     */
    public function splitText($offset)
    {
    }
}

class DOMTypeinfo
{
}

class DOMUserDataHandler
{
    public function handle()
    {
    }
}

/**
 * Supports XPath 1.0
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.domxpath.php
 */
class DOMXPath
{
    /**
     * @var DOMDocument
     *
     * @link http://www.php.net/manual/en/class.domxpath.php#domxpath.props
     */
    public $document;

    /**
     * Creates a new <code>DOMXPath</code> object
     *
     * @param DOMDocument $doc
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domxpath.construct.php
     */
    public function __construct(DOMDocument $doc)
    {
    }

    /**
     * Evaluates the given XPath expression and returns a typed result if possible
     *
     * @param string $expression The XPath expression to execute.
     * @param DOMNode|null $contextnode The optional <code>contextnode</code> can be specified for
     * doing relative XPath queries. By default, the queries are relative to
     * the root element.
     * @param bool|null $registerNodeNS The optional <code>registerNodeNS</code> can be specified to
     * disable automatic registration of the context node.
     *
     * @return mixed Returns a typed result if possible or a <code>DOMNodeList</code>
     * containing all nodes matching the given XPath <code>expression</code>.
     * If the <code>expression</code> is malformed or the
     * <code>contextnode</code> is invalid,
     * <code>DOMXPath::evaluate</code> returns <code>FALSE</code>.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/domxpath.evaluate.php
     */
    public function evaluate($expression, DOMNode $contextnode = null, $registerNodeNS = true)
    {
    }

    /**
     * Evaluates the given XPath expression
     *
     * @param string $expression The XPath expression to execute.
     * @param DOMNode|null $contextnode The optional <code>contextnode</code> can be specified for
     * doing relative XPath queries. By default, the queries are relative to
     * the root element.
     * @param bool|null $registerNodeNS The optional <code>registerNodeNS</code> can be specified to
     * disable automatic registration of the context node.
     *
     * @return DOMNodeList Returns a <code>DOMNodeList</code> containing all nodes matching
     * the given XPath <code>expression</code>. Any expression which
     * does not return nodes will return an empty
     * <code>DOMNodeList</code>.
     * If the <code>expression</code> is malformed or the
     * <code>contextnode</code> is invalid,
     * <code>DOMXPath::query</code> returns <code>FALSE</code>.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domxpath.query.php
     */
    public function query($expression, DOMNode $contextnode = null, $registerNodeNS = true)
    {
    }

    /**
     * Registers the namespace with the <code>DOMXPath</code> object
     *
     * @param string $prefix The prefix.
     * @param string $namespaceURI The URI of the namespace.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/domxpath.registernamespace.php
     */
    public function registerNamespace($prefix, $namespaceURI)
    {
    }

    /**
     * Register PHP functions as XPath functions
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/domxpath.registerphpfunctions.php
     */
    public function registerPhpFunctions()
    {
    }
}

/**
 * Gets a <code>DOMElement</code> object from a
 * <code>SimpleXMLElement</code> object
 *
 * @param SimpleXMLElement $node The <code>SimpleXMLElement</code> node.
 *
 * @return DOMElement The <code>DOMElement</code> node added or <code>FALSE</code> if any errors occur.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dom-import-simplexml.php
 */
function dom_import_simplexml(SimpleXMLElement $node)
{
}
