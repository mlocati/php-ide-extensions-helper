<?php
// Start of extension: SimpleXML
// - parsed on POSIX with PHP 5.6.34 (extension version 0.1)
// - parsed on Windows with PHP 5.6.34 (extension version 0.1)

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
     * @param mixed $data
     * @param mixed|null $options
     * @param mixed|null $data_is_url
     * @param mixed|null $ns
     * @param mixed|null $is_prefix
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmlelement.construct.php
     */
    final public function __construct($data, $options = null, $data_is_url = null, $ns = null, $is_prefix = null)
    {
    }

    /**
     * Returns the string content
     *
     * @return string
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
     * @param mixed $name
     * @param mixed|null $value
     * @param mixed|null $ns
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.3, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmlelement.addattribute.php
     */
    public function addAttribute($name, $value = null, $ns = null)
    {
    }

    /**
     * Adds a child element to the XML node
     *
     * @param mixed $name
     * @param mixed|null $value
     * @param mixed|null $ns
     *
     * @return SimpleXMLElement
     *
     * @since PHP 5 >= 5.1.3, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmlelement.addchild.php
     */
    public function addChild($name, $value = null, $ns = null)
    {
    }

    /**
     * Return a well-formed XML string based on SimpleXML element
     *
     * @param mixed|null $filename
     *
     * @return mixed
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
     * @param mixed|null $ns
     * @param mixed|null $is_prefix
     *
     * @return SimpleXMLElement
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmlelement.attributes.php
     */
    public function attributes($ns = null, $is_prefix = null)
    {
    }

    /**
     * Finds children of given node
     *
     * @param mixed|null $ns
     * @param mixed|null $is_prefix
     *
     * @return SimpleXMLElement
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmlelement.children.php
     */
    public function children($ns = null, $is_prefix = null)
    {
    }

    /**
     * Counts the children of an element
     *
     * @return int
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
     * @param mixed|null $recursve
     * @param mixed|null $from_root
     *
     * @return array
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmlelement.getdocnamespaces.php
     */
    public function getDocNamespaces($recursve = null, $from_root = null)
    {
    }

    /**
     * Gets the name of the XML element
     *
     * @return string
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
     * @param mixed|null $recursve
     *
     * @return array
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/simplexmlelement.getnamespaces.php
     */
    public function getNamespaces($recursve = null)
    {
    }

    /**
     * Creates a prefix/ns context for the next XPath query
     *
     * @param mixed $prefix
     * @param mixed $ns
     *
     * @return bool
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
     * @param mixed|null $filename
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
     * @param mixed $path
     *
     * @return array
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
     * @return mixed
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
     * @return SimpleXMLIterator
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
     * @return bool
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
     * @return mixed
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
     * @return void
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
     * @return void
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
     * @return bool
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
 * @param mixed $node
 * @param mixed|null $class_name
 *
 * @return SimpleXMLElement
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.simplexml-import-dom.php
 */
function simplexml_import_dom($node, $class_name = null)
{
}

/**
 * Interprets an XML file into an object
 *
 * @param mixed $filename
 * @param mixed|null $class_name
 * @param mixed|null $options
 * @param mixed|null $ns
 * @param mixed|null $is_prefix
 *
 * @return SimpleXMLElement
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.simplexml-load-file.php
 */
function simplexml_load_file($filename, $class_name = null, $options = null, $ns = null, $is_prefix = null)
{
}

/**
 * Interprets a string of XML into an object
 *
 * @param mixed $data
 * @param mixed|null $class_name
 * @param mixed|null $options
 * @param mixed|null $ns
 * @param mixed|null $is_prefix
 *
 * @return SimpleXMLElement
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.simplexml-load-string.php
 */
function simplexml_load_string($data, $class_name = null, $options = null, $ns = null, $is_prefix = null)
{
}
