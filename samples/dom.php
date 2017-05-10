<?php
// Documentation generated automatically for extension dom v20031129 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
// No INI entries
const DOMSTRING_SIZE_ERR = 2;
const DOM_HIERARCHY_REQUEST_ERR = 3;
const DOM_INDEX_SIZE_ERR = 1;
const DOM_INUSE_ATTRIBUTE_ERR = 10;
const DOM_INVALID_ACCESS_ERR = 15;
const DOM_INVALID_CHARACTER_ERR = 5;
const DOM_INVALID_MODIFICATION_ERR = 13;
const DOM_INVALID_STATE_ERR = 11;
const DOM_NAMESPACE_ERR = 14;
const DOM_NOT_FOUND_ERR = 8;
const DOM_NOT_SUPPORTED_ERR = 9;
const DOM_NO_DATA_ALLOWED_ERR = 6;
const DOM_NO_MODIFICATION_ALLOWED_ERR = 7;
const DOM_PHP_ERR = 0;
const DOM_SYNTAX_ERR = 12;
const DOM_VALIDATION_ERR = 16;
const DOM_WRONG_DOCUMENT_ERR = 4;
const XML_ATTRIBUTE_CDATA = 1;
const XML_ATTRIBUTE_DECL_NODE = 16;
const XML_ATTRIBUTE_ENTITY = 6;
const XML_ATTRIBUTE_ENUMERATION = 9;
const XML_ATTRIBUTE_ID = 2;
const XML_ATTRIBUTE_IDREF = 3;
const XML_ATTRIBUTE_IDREFS = 4;
const XML_ATTRIBUTE_NMTOKEN = 7;
const XML_ATTRIBUTE_NMTOKENS = 8;
const XML_ATTRIBUTE_NODE = 2;
const XML_ATTRIBUTE_NOTATION = 10;
const XML_CDATA_SECTION_NODE = 4;
const XML_COMMENT_NODE = 8;
const XML_DOCUMENT_FRAG_NODE = 11;
const XML_DOCUMENT_NODE = 9;
const XML_DOCUMENT_TYPE_NODE = 10;
const XML_DTD_NODE = 14;
const XML_ELEMENT_DECL_NODE = 15;
const XML_ELEMENT_NODE = 1;
const XML_ENTITY_DECL_NODE = 17;
const XML_ENTITY_NODE = 6;
const XML_ENTITY_REF_NODE = 5;
const XML_HTML_DOCUMENT_NODE = 13;
const XML_LOCAL_NAMESPACE = 18;
const XML_NAMESPACE_DECL_NODE = 18;
const XML_NOTATION_NODE = 12;
const XML_PI_NODE = 7;
const XML_TEXT_NODE = 3;
class DOMAttr extends DOMNode
{
    public function __construct($name, $value = null)
    {
    }
    public function isId()
    {
    }
}
class DOMCdataSection extends DOMText
{
    public function __construct($value)
    {
    }
}
class DOMCharacterData extends DOMNode
{
    public function appendData($arg)
    {
    }
    public function deleteData($offset, $count)
    {
    }
    public function insertData($offset, $arg)
    {
    }
    public function replaceData($offset, $count, $arg)
    {
    }
    public function substringData($offset, $count)
    {
    }
}
class DOMComment extends DOMCharacterData
{
    public function __construct($value = null)
    {
    }
}
class DOMConfiguration
{
    public function canSetParameter($name = null, $value = null)
    {
    }
    public function getParameter($name = null)
    {
    }
    public function setParameter($name, $value)
    {
    }
}
class DOMDocument extends DOMNode
{
    public function __construct($version = null, $encoding = null)
    {
    }
    public function adoptNode(DOMNode $source)
    {
    }
    public function createAttribute($name)
    {
    }
    public function createAttributeNS($namespaceURI, $qualifiedName)
    {
    }
    public function createCDATASection($data)
    {
    }
    public function createComment($data)
    {
    }
    public function createDocumentFragment()
    {
    }
    public function createElement($tagName, $value = null)
    {
    }
    public function createElementNS($namespaceURI, $qualifiedName, $value = null)
    {
    }
    public function createEntityReference($name)
    {
    }
    public function createProcessingInstruction($target, $data)
    {
    }
    public function createTextNode($data)
    {
    }
    public function getElementById($elementId)
    {
    }
    public function getElementsByTagName($tagName)
    {
    }
    public function getElementsByTagNameNS($namespaceURI, $localName)
    {
    }
    public function importNode(DOMNode $importedNode, $deep)
    {
    }
    public function load($source, $options = null)
    {
    }
    public function loadHTML($source, $options = null)
    {
    }
    public function loadHTMLFile($source, $options = null)
    {
    }
    public function loadXML($source, $options = null)
    {
    }
    public function normalizeDocument()
    {
    }
    public function registerNodeClass($baseClass, $extendedClass)
    {
    }
    public function relaxNGValidate($filename)
    {
    }
    public function relaxNGValidateSource($source)
    {
    }
    public function renameNode(DOMNode $node, $namespaceURI, $qualifiedName)
    {
    }
    public function save($file)
    {
    }
    public function saveHTML()
    {
    }
    public function saveHTMLFile($file)
    {
    }
    public function saveXML(DOMNode $node = null, $options = null)
    {
    }
    public function schemaValidate($filename)
    {
    }
    public function schemaValidateSource($source)
    {
    }
    public function validate()
    {
    }
    public function xinclude($options = null)
    {
    }
}
class DOMDocumentFragment extends DOMNode
{
    public function __construct()
    {
    }
    public function appendXML($data)
    {
    }
}
class DOMDocumentType extends DOMNode
{
}
class DOMDomError
{
}
class DOMElement extends DOMNode
{
    public function __construct($name, $value = null, $uri = null)
    {
    }
    public function getAttribute($name)
    {
    }
    public function getAttributeNode($name)
    {
    }
    public function getAttributeNodeNS($namespaceURI, $localName)
    {
    }
    public function getAttributeNS($namespaceURI, $localName)
    {
    }
    public function getElementsByTagName($name)
    {
    }
    public function getElementsByTagNameNS($namespaceURI, $localName)
    {
    }
    public function hasAttribute($name)
    {
    }
    public function hasAttributeNS($namespaceURI, $localName)
    {
    }
    public function removeAttribute($name)
    {
    }
    public function removeAttributeNode(DOMAttr $oldAttr)
    {
    }
    public function removeAttributeNS($namespaceURI, $localName)
    {
    }
    public function setAttribute($name, $value)
    {
    }
    public function setAttributeNode(DOMAttr $newAttr)
    {
    }
    public function setAttributeNodeNS(DOMAttr $newAttr)
    {
    }
    public function setAttributeNS($namespaceURI, $qualifiedName, $value)
    {
    }
    public function setIdAttribute($name, $isId)
    {
    }
    public function setIdAttributeNode(DOMAttr $attr, $isId)
    {
    }
    public function setIdAttributeNS($namespaceURI, $localName, $isId)
    {
    }
}
class DOMEntity extends DOMNode
{
}
class DOMEntityReference extends DOMNode
{
    public function __construct($name)
    {
    }
}
class DOMErrorHandler
{
    public function handleError(DOMDomError $error)
    {
    }
}
final class DOMException extends Exception
{
    public $code = 0;
}
class DOMImplementation
{
    public function createDocument($namespaceURI, $qualifiedName, DOMDocumentType $docType)
    {
    }
    public function createDocumentType($qualifiedName, $publicId, $systemId)
    {
    }
    public function getFeature($feature, $version)
    {
    }
    public function hasFeature()
    {
    }
}
class DOMImplementationList
{
    public function item($index)
    {
    }
}
class DOMImplementationSource
{
    public function getDomimplementation($features)
    {
    }
    public function getDomimplementations($features)
    {
    }
}
class DOMLocator
{
}
class DOMNamedNodeMap implements Traversable
{
    public function getNamedItem($name)
    {
    }
    public function getNamedItemNS($namespaceURI = null, $localName = null)
    {
    }
    public function item($index = null)
    {
    }
    public function removeNamedItem($name = null)
    {
    }
    public function removeNamedItemNS($namespaceURI = null, $localName = null)
    {
    }
    public function setNamedItem(DOMNode $arg)
    {
    }
    public function setNamedItemNS(DOMNode $arg = null)
    {
    }
}
class DOMNameList
{
    public function getName($index)
    {
    }
    public function getNamespaceURI($index)
    {
    }
}
class DOMNameSpaceNode
{
}
class DOMNode
{
    public function appendChild(DOMNode $newChild)
    {
    }
    public function C14N($exclusive = null, $with_comments = null, array $xpath = null, array $ns_prefixes = null)
    {
    }
    public function C14NFile($uri, $exclusive = null, $with_comments = null, array $xpath = null, array $ns_prefixes = null)
    {
    }
    public function cloneNode($deep)
    {
    }
    public function compareDocumentPosition(DOMNode $other)
    {
    }
    public function getFeature($feature, $version)
    {
    }
    public function getLineNo()
    {
    }
    public function getNodePath()
    {
    }
    public function getUserData($key)
    {
    }
    public function hasAttributes()
    {
    }
    public function hasChildNodes()
    {
    }
    public function insertBefore(DOMNode $newChild, DOMNode $refChild = null)
    {
    }
    public function isDefaultNamespace($namespaceURI)
    {
    }
    public function isEqualNode(DOMNode $arg)
    {
    }
    public function isSameNode(DOMNode $other)
    {
    }
    public function isSupported($feature, $version)
    {
    }
    public function lookupNamespaceUri($prefix)
    {
    }
    public function lookupPrefix($namespaceURI)
    {
    }
    public function normalize()
    {
    }
    public function removeChild(DOMNode $oldChild)
    {
    }
    public function replaceChild(DOMNode $newChild, DOMNode $oldChild)
    {
    }
    public function setUserData($key, $data, $handler)
    {
    }
}
class DOMNodeList implements Traversable
{
    public function item($index)
    {
    }
}
class DOMNotation extends DOMNode
{
}
class DOMProcessingInstruction extends DOMNode
{
    public function __construct($name, $value = null)
    {
    }
}
class DOMStringExtend
{
    public function findOffset16($offset32)
    {
    }
    public function findOffset32($offset16)
    {
    }
}
class DOMStringList
{
    public function item($index)
    {
    }
}
class DOMText extends DOMCharacterData
{
    public function __construct($value = null)
    {
    }
    public function isElementContentWhitespace()
    {
    }
    public function isWhitespaceInElementContent()
    {
    }
    public function replaceWholeText($content)
    {
    }
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
class DOMXPath
{
    public function __construct(DOMDocument $doc)
    {
    }
    public function evaluate($expr, DOMNode $context = null, $registerNodeNS = null)
    {
    }
    public function query($expr, DOMNode $context = null, $registerNodeNS = null)
    {
    }
    public function registerNamespace($prefix, $uri)
    {
    }
    public function registerPhpFunctions()
    {
    }
}
function dom_import_simplexml($node)
{
}