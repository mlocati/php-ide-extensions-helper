<?php
// Start of extension: xmlreader
// - parsed on POSIX with PHP 7.2.3 (extension version 7.2.3)
// - parsed on Windows with PHP 7.2.4 (extension version 7.2.4)

/**
 * The XMLReader extension is an XML Pull parser. The reader acts as a 
 *     cursor going forward on the document stream and stopping at each node 
 *     on the way.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.xmlreader.php
 */
class XMLReader
{
    public function close()
    {
    }

    /**
     * mixed|null $basenode
     */
    public function expand($basenode = null)
    {
    }

    /**
     * mixed $name
     */
    public function getAttribute($name)
    {
    }

    /**
     * mixed $index
     */
    public function getAttributeNo($index)
    {
    }

    /**
     * mixed $name
     * mixed $namespaceURI
     */
    public function getAttributeNs($name, $namespaceURI)
    {
    }

    /**
     * mixed $property
     */
    public function getParserProperty($property)
    {
    }

    public function isValid()
    {
    }

    /**
     * mixed $prefix
     */
    public function lookupNamespace($prefix)
    {
    }

    /**
     * mixed $name
     */
    public function moveToAttribute($name)
    {
    }

    /**
     * mixed $index
     */
    public function moveToAttributeNo($index)
    {
    }

    /**
     * mixed $name
     * mixed $namespaceURI
     */
    public function moveToAttributeNs($name, $namespaceURI)
    {
    }

    public function moveToElement()
    {
    }

    public function moveToFirstAttribute()
    {
    }

    public function moveToNextAttribute()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * mixed|null $localname
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next($localname = null)
    {
    }

    /**
     * mixed $URI
     * mixed|null $encoding
     * mixed|null $options
     */
    public function open($URI, $encoding = null, $options = null)
    {
    }

    public function read()
    {
    }

    public function readInnerXml()
    {
    }

    public function readOuterXml()
    {
    }

    public function readString()
    {
    }

    /**
     * mixed $property
     * mixed $value
     */
    public function setParserProperty($property, $value)
    {
    }

    /**
     * mixed $filename
     */
    public function setRelaxNGSchema($filename)
    {
    }

    /**
     * mixed $source
     */
    public function setRelaxNGSchemaSource($source)
    {
    }

    /**
     * mixed $filename
     */
    public function setSchema($filename)
    {
    }

    /**
     * mixed $source
     * mixed|null $encoding
     * mixed|null $options
     */
    public function XML($source, $encoding = null, $options = null)
    {
    }
}
