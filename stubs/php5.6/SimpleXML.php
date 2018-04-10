<?php
// Start of extension: SimpleXML
// - parsed on POSIX with PHP 5.6.35 (extension version 0.1)
// - parsed on Windows with PHP 5.6.35 (extension version 0.1)

/**
 * Represents an element in an XML document.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.simplexmlelement.php
 */
class SimpleXMLElement implements Traversable
{
    /**
     * Creates a new SimpleXMLElement object
     *
     * @param string $data A well-formed XML string or the path or URL to an XML document if
     * <code>data_is_url</code> is <code>TRUE</code>.
     * @param int|null $options Optionally used to specify additional
     * Libxml parameters.
     * @param bool|null $data_is_url By default, <code>data_is_url</code> is <code>FALSE</code>. Use <code>TRUE</code> to
     * specify that <code>data</code> is a path or URL to an XML
     * document instead of <code>string</code> data.
     * @param string|null $ns Namespace prefix or URI.
     * @param bool|null $is_prefix <code>TRUE</code> if <code>ns</code> is a prefix, <code>FALSE</code> if it's a URI;
     * defaults to <code>FALSE</code>.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmlelement.construct.php
     */
    final public function __construct($data, $options = 0, $data_is_url = false, $ns = "", $is_prefix = false)
    {
    }

    /**
     * Returns the string content
     *
     * @return string Returns the string content on success or an empty string on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmlelement.tostring.php
     */
    public function __toString()
    {
    }

    /**
     * Adds an attribute to the SimpleXML element
     *
     * @param string $name The name of the attribute to add.
     * @param string $value The value of the attribute.
     * @param string $namespace If specified, the namespace to which the attribute belongs.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.3, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmlelement.addattribute.php
     */
    public function addAttribute($name, $value = null, $namespace = null)
    {
    }

    /**
     * Adds a child element to the XML node
     *
     * @param string $name The name of the child element to add.
     * @param string $value If specified, the value of the child element.
     * @param string $namespace If specified, the namespace to which the child element belongs.
     *
     * @return SimpleXMLElement The <code>addChild</code> method returns a <code>SimpleXMLElement</code>
     * object representing the child added to the XML node.
     *
     * @since PHP 5 >= 5.1.3, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmlelement.addchild.php
     */
    public function addChild($name, $value = null, $namespace = null)
    {
    }

    /**
     * Return a well-formed XML string based on SimpleXML element
     *
     * @param string $filename If specified, the function writes the data to the file rather than
     * returning it.
     *
     * @return mixed If the <code>filename</code> isn't specified, this function
     * returns a <code>string</code> on success and <code>FALSE</code> on error. If the
     * parameter is specified, it returns <code>TRUE</code> if the file was written
     * successfully and <code>FALSE</code> otherwise.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmlelement.asxml.php
     */
    public function asXML($filename = null)
    {
    }

    /**
     * Identifies an element's attributes
     *
     * @param string|null $ns An optional namespace for the retrieved attributes
     * @param bool|null $is_prefix Default to <code>FALSE</code>
     *
     * @return SimpleXMLElement Returns a <code>SimpleXMLElement</code> object that can be
     * iterated over to loop through the attributes on the tag.
     * Returns <code>NULL</code> if called on a <code>SimpleXMLElement</code>
     * object that already represents an attribute and not a tag.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmlelement.attributes.php
     */
    public function attributes($ns = null, $is_prefix = false)
    {
    }

    /**
     * Finds children of given node
     *
     * @param string $ns An <code>XML</code> namespace.
     * @param bool|null $is_prefix If <code>is_prefix</code> is <code>TRUE</code>,
     * <code>ns</code> will be regarded as a prefix. If <code>FALSE</code>,
     * <code>ns</code> will be regarded as a namespace
     * <code>URL</code>.
     *
     * @return SimpleXMLElement Returns a <code>SimpleXMLElement</code> element, whether the node
     * has children or not.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmlelement.children.php
     */
    public function children($ns = null, $is_prefix = false)
    {
    }

    /**
     * Counts the children of an element
     *
     * @return int Returns the number of elements of an element.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmlelement.count.php
     */
    public function count()
    {
    }

    /**
     * Returns namespaces declared in document
     *
     * @param bool|null $recursive If specified, returns all namespaces declared in parent and child nodes.
     * Otherwise, returns only namespaces declared in root node.
     * @param bool|null $from_root Allows you to recursively check namespaces under a child node instead of
     * from the root of the XML doc.
     *
     * @return array The <code>getDocNamespaces</code> method returns an <code>array</code>
     * of namespace names with their associated URIs.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmlelement.getdocnamespaces.php
     */
    public function getDocNamespaces($recursive = false, $from_root = true)
    {
    }

    /**
     * Gets the name of the XML element
     *
     * @return string The <code>getName</code> method returns as a <code>string</code> the
     * name of the XML tag referenced by the SimpleXMLElement object.
     *
     * @since PHP 5 >= 5.1.3, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmlelement.getname.php
     */
    public function getName()
    {
    }

    /**
     * Returns namespaces used in document
     *
     * @param bool|null $recursive If specified, returns all namespaces used in parent and child nodes.
     * Otherwise, returns only namespaces used in root node.
     *
     * @return array The <code>getNamespaces</code> method returns an <code>array</code> of
     * namespace names with their associated URIs.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmlelement.getnamespaces.php
     */
    public function getNamespaces($recursive = false)
    {
    }

    /**
     * Creates a prefix/ns context for the next XPath query
     *
     * @param string $prefix The namespace prefix to use in the XPath query for the namespace given in
     * <code>ns</code>.
     * @param string $ns The namespace to use for the XPath query. This must match a namespace in
     * use by the XML document or the XPath query using
     * <code>prefix</code> will not return any results.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmlelement.registerxpathnamespace.php
     */
    public function registerXPathNamespace($prefix, $ns)
    {
    }

    /**
     * Alias of <code>SimpleXMLElement::asXML</code>
     *
     * @param mixed $filename
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmlelement.savexml.php
     */
    public function saveXML($filename = null)
    {
    }

    /**
     * Runs XPath query on XML data
     *
     * @param string $path An XPath path
     *
     * @return array Returns an <code>array</code> of SimpleXMLElement objects or <code>FALSE</code> in
     * case of an error.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmlelement.xpath.php
     */
    public function xpath($path)
    {
    }
}

/**
 * The SimpleXMLIterator provides recursive iteration over all nodes of a <code>SimpleXMLElement</code> object.
 *
 * @since PHP 5 >= 5.1.3, PHP 7
 *
 * @link http://www.php.net/manual/en/class.simplexmliterator.php
 */
class SimpleXMLIterator extends SimpleXMLElement implements Countable, RecursiveIterator
{
    /**
     * Returns the current element
     *
     * @return mixed Returns the current element as a <code>SimpleXMLIterator</code> object or <code>NULL</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmliterator.current.php
     */
    public function current()
    {
    }

    /**
     * Returns the sub-elements of the current element
     *
     * @return SimpleXMLIterator Returns a <code>SimpleXMLIterator</code> object containing
     * the sub-elements of the current element.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmliterator.getchildren.php
     */
    public function getChildren()
    {
    }

    /**
     * Checks whether the current element has sub elements
     *
     * @return bool <code>TRUE</code> if the current element has sub-elements, otherwise <code>FALSE</code>
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmliterator.haschildren.php
     */
    public function hasChildren()
    {
    }

    /**
     * Return current key
     *
     * @return mixed Returns the XML tag name of the element referenced by the current <code>SimpleXMLIterator</code> object or <code>FALSE</code>
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmliterator.key.php
     */
    public function key()
    {
    }

    /**
     * Move to next element
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmliterator.next.php
     */
    public function next()
    {
    }

    /**
     * Rewind to the first element
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmliterator.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * Check whether the current element is valid
     *
     * @return bool Returns <code>TRUE</code> if the current element is valid, otherwise <code>FALSE</code>
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmliterator.valid.php
     */
    public function valid()
    {
    }
}

/**
 * Get a <code>SimpleXMLElement</code> object from a DOM node
 *
 * @param DOMNode $node A DOM Element node
 * @param string|null $class_name You may use this optional parameter so that
 * <code>simplexml_import_dom</code> will return an object of
 * the specified class. That class should extend the
 * <code>SimpleXMLElement</code> class.
 *
 * @return SimpleXMLElement Returns a <code>SimpleXMLElement</code> or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.simplexml-import-dom.php
 */
function simplexml_import_dom(DOMNode $node, $class_name = "SimpleXMLElement")
{
}

/**
 * Interprets an XML file into an object
 *
 * @param string $filename Path to the XML file
 * @param string|null $class_name You may use this optional parameter so that
 * <code>simplexml_load_file</code> will return an object of
 * the specified class. That class should extend the
 * <code>SimpleXMLElement</code> class.
 * @param int|null $options Since PHP 5.1.0 and Libxml 2.6.0, you may also use the
 * <code>options</code> parameter to specify additional Libxml parameters.
 * @param string|null $ns Namespace prefix or URI.
 * @param bool|null $is_prefix <code>TRUE</code> if <code>ns</code> is a prefix, <code>FALSE</code> if it's a URI;
 * defaults to <code>FALSE</code>.
 *
 * @return SimpleXMLElement Returns an <code>object</code> of class <code>SimpleXMLElement</code> with
 * properties containing the data held within the XML document, or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.simplexml-load-file.php
 */
function simplexml_load_file($filename, $class_name = "SimpleXMLElement", $options = 0, $ns = "", $is_prefix = false)
{
}

/**
 * Interprets a string of XML into an object
 *
 * @param string $data A well-formed XML string
 * @param string|null $class_name You may use this optional parameter so that
 * <code>simplexml_load_string</code> will return an object of
 * the specified class. That class should extend the
 * <code>SimpleXMLElement</code> class.
 * @param int|null $options Since PHP 5.1.0 and Libxml 2.6.0, you may also use the
 * <code>options</code> parameter to specify additional Libxml parameters.
 * @param string|null $ns Namespace prefix or URI.
 * @param bool|null $is_prefix <code>TRUE</code> if <code>ns</code> is a prefix, <code>FALSE</code> if it's a URI;
 * defaults to <code>FALSE</code>.
 *
 * @return SimpleXMLElement Returns an <code>object</code> of class <code>SimpleXMLElement</code> with
 * properties containing the data held within the xml document, or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.simplexml-load-string.php
 */
function simplexml_load_string($data, $class_name = "SimpleXMLElement", $options = 0, $ns = "", $is_prefix = false)
{
}
