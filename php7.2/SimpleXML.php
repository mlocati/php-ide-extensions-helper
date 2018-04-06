<?php
// Start of extension: SimpleXML
// - parsed on POSIX with PHP 7.2.3 (extension version 7.2.3)
// - parsed on Windows with PHP 7.2.4 (extension version 7.2.4)

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
     * @param mixed $data
     * @param mixed|null $options
     * @param mixed|null $data_is_url
     * @param mixed|null $ns
     * @param mixed|null $is_prefix
     */
    final public function __construct($data, $options = null, $data_is_url = null, $ns = null, $is_prefix = null)
    {
    }

    public function __toString()
    {
    }

    /**
     * @param mixed $name
     * @param mixed|null $value
     * @param mixed|null $ns
     */
    public function addAttribute($name, $value = null, $ns = null)
    {
    }

    /**
     * @param mixed $name
     * @param mixed|null $value
     * @param mixed|null $ns
     */
    public function addChild($name, $value = null, $ns = null)
    {
    }

    /**
     * @param mixed|null $filename
     */
    public function asXML($filename = null)
    {
    }

    /**
     * @param mixed|null $ns
     * @param mixed|null $is_prefix
     */
    public function attributes($ns = null, $is_prefix = null)
    {
    }

    /**
     * @param mixed|null $ns
     * @param mixed|null $is_prefix
     */
    public function children($ns = null, $is_prefix = null)
    {
    }

    /**
     * Count all elements in an array, or something in an object
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.count.php
     */
    public function count(): int
    {
    }

    /**
     * @param mixed|null $recursve
     * @param mixed|null $from_root
     */
    public function getDocNamespaces($recursve = null, $from_root = null)
    {
    }

    public function getName()
    {
    }

    /**
     * @param mixed|null $recursve
     */
    public function getNamespaces($recursve = null)
    {
    }

    /**
     * @param mixed $prefix
     * @param mixed $ns
     */
    public function registerXPathNamespace($prefix, $ns)
    {
    }

    /**
     * @param mixed|null $filename
     */
    public function saveXML($filename = null)
    {
    }

    /**
     * @param mixed $path
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
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    public function getChildren()
    {
    }

    public function hasChildren()
    {
    }

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

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
