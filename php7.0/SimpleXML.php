<?php
// Start of extension: SimpleXML
// - parsed on POSIX with PHP 7.0.28 (extension version 7.0.28)
// - parsed on Windows with PHP 7.0.28 (extension version 7.0.28)

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
     * mixed $data
     * mixed|null $options
     * mixed|null $data_is_url
     * mixed|null $ns
     * mixed|null $is_prefix
     */
    final public function __construct($data, $options = null, $data_is_url = null, $ns = null, $is_prefix = null)
    {
    }

    public function __toString()
    {
    }

    /**
     * mixed $name
     * mixed|null $value
     * mixed|null $ns
     */
    public function addAttribute($name, $value = null, $ns = null)
    {
    }

    /**
     * mixed $name
     * mixed|null $value
     * mixed|null $ns
     */
    public function addChild($name, $value = null, $ns = null)
    {
    }

    /**
     * mixed|null $filename
     */
    public function asXML($filename = null)
    {
    }

    /**
     * mixed|null $ns
     * mixed|null $is_prefix
     */
    public function attributes($ns = null, $is_prefix = null)
    {
    }

    /**
     * mixed|null $ns
     * mixed|null $is_prefix
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
     * mixed|null $recursve
     * mixed|null $from_root
     */
    public function getDocNamespaces($recursve = null, $from_root = null)
    {
    }

    public function getName()
    {
    }

    /**
     * mixed|null $recursve
     */
    public function getNamespaces($recursve = null)
    {
    }

    /**
     * mixed $prefix
     * mixed $ns
     */
    public function registerXPathNamespace($prefix, $ns)
    {
    }

    /**
     * mixed|null $filename
     */
    public function saveXML($filename = null)
    {
    }

    /**
     * mixed $path
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
 * mixed $node
 * mixed|null $class_name
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
 * mixed $filename
 * mixed|null $class_name
 * mixed|null $options
 * mixed|null $ns
 * mixed|null $is_prefix
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
 * mixed $data
 * mixed|null $class_name
 * mixed|null $options
 * mixed|null $ns
 * mixed|null $is_prefix
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
