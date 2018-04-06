<?php
// Start of extension: xmlreader
// - parsed on POSIX with PHP 7.0.28 (extension version 7.0.28)
// - parsed on Windows with PHP 7.0.28 (extension version 7.0.28)

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
     * @param mixed|null $basenode
     */
    public function expand($basenode = null)
    {
    }

    /**
     * @param mixed $name
     */
    public function getAttribute($name)
    {
    }

    /**
     * @param mixed $index
     */
    public function getAttributeNo($index)
    {
    }

    /**
     * @param mixed $name
     * @param mixed $namespaceURI
     */
    public function getAttributeNs($name, $namespaceURI)
    {
    }

    /**
     * @param mixed $property
     */
    public function getParserProperty($property)
    {
    }

    public function isValid()
    {
    }

    /**
     * @param mixed $prefix
     */
    public function lookupNamespace($prefix)
    {
    }

    /**
     * @param mixed $name
     */
    public function moveToAttribute($name)
    {
    }

    /**
     * @param mixed $index
     */
    public function moveToAttributeNo($index)
    {
    }

    /**
     * @param mixed $name
     * @param mixed $namespaceURI
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
     * @param mixed|null $localname
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
     * @param mixed $URI
     * @param mixed|null $encoding
     * @param mixed|null $options
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
     * @param mixed $property
     * @param mixed $value
     */
    public function setParserProperty($property, $value)
    {
    }

    /**
     * @param mixed $filename
     */
    public function setRelaxNGSchema($filename)
    {
    }

    /**
     * @param mixed $source
     */
    public function setRelaxNGSchemaSource($source)
    {
    }

    /**
     * @param mixed $filename
     */
    public function setSchema($filename)
    {
    }

    /**
     * @param mixed $source
     * @param mixed|null $encoding
     * @param mixed|null $options
     */
    public function XML($source, $encoding = null, $options = null)
    {
    }
}
