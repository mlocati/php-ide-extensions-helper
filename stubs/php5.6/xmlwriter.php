<?php
// Start of extension: xmlwriter
// - parsed on POSIX with PHP 5.6.35 (extension version 0.1)
// - parsed on Windows with PHP 5.6.35 (extension version 0.1)

/**
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 */
class XMLWriter
{
    /**
     * End attribute
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-end-attribute.php
     */
    public function endAttribute()
    {
    }

    /**
     * End current CDATA
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-end-cdata.php
     */
    public function endCdata()
    {
    }

    /**
     * Create end comment
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 1.0.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-end-comment.php
     */
    public function endComment()
    {
    }

    /**
     * End current document
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-end-document.php
     */
    public function endDocument()
    {
    }

    /**
     * End current DTD
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-end-dtd.php
     */
    public function endDtd()
    {
    }

    /**
     * End current DTD AttList
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-end-dtd-attlist.php
     */
    public function endDtdAttlist()
    {
    }

    /**
     * End current DTD element
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-end-dtd-element.php
     */
    public function endDtdElement()
    {
    }

    /**
     * End current DTD Entity
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-end-dtd-entity.php
     */
    public function endDtdEntity()
    {
    }

    /**
     * End current element
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-end-element.php
     */
    public function endElement()
    {
    }

    /**
     * End current PI
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-end-pi.php
     */
    public function endPi()
    {
    }

    /**
     * Flush current buffer
     *
     * @param bool|null $empty Whether to empty the buffer or not. Default is <code>TRUE</code>.
     *
     * @return mixed If you opened the writer in memory, this function returns the generated XML buffer,
     * Else, if using URI, this function will write the buffer and return the number of
     * written bytes.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 1.0.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-flush.php
     */
    public function flush($empty = true)
    {
    }

    /**
     * End current element
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL xmlwriter >= 2.0.4
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-full-end-element.php
     */
    public function fullEndElement()
    {
    }

    /**
     * Create new xmlwriter using memory for string output
     *
     * @return bool Object oriented style: Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * Procedural style: Returns a new xmlwriter resource for later use with the
     * xmlwriter functions on success, <code>FALSE</code> on error.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-open-memory.php
     */
    public function openMemory()
    {
    }

    /**
     * Create new xmlwriter using source uri for output
     *
     * @param string $uri The URI of the resource for the output.
     *
     * @return bool Object oriented style: Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     * Procedural style: Returns a new xmlwriter resource for later use with the
     * xmlwriter functions on success, <code>FALSE</code> on error.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-open-uri.php
     */
    public function openUri($uri)
    {
    }

    /**
     * Returns current buffer
     *
     * @param bool|null $flush Whether to flush the output buffer or not. Default is <code>TRUE</code>.
     *
     * @return string Returns the current buffer as a string.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-output-memory.php
     */
    public function outputMemory($flush = true)
    {
    }

    /**
     * Toggle indentation on/off
     *
     * @param bool $indent Whether indentation is enabled.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-set-indent.php
     */
    public function setIndent($indent)
    {
    }

    /**
     * Set string used for indenting
     *
     * @param string $indentString The indentation string.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-set-indent-string.php
     */
    public function setIndentString($indentString)
    {
    }

    /**
     * Create start attribute
     *
     * @param string $name The attribute name.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-start-attribute.php
     */
    public function startAttribute($name)
    {
    }

    /**
     * Create start namespaced attribute
     *
     * @param string $prefix The namespace prefix.
     * @param string $name The attribute name.
     * @param string $uri The namespace URI.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-start-attribute-ns.php
     */
    public function startAttributeNs($prefix, $name, $uri)
    {
    }

    /**
     * Create start CDATA tag
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-start-cdata.php
     */
    public function startCdata()
    {
    }

    /**
     * Create start comment
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 1.0.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-start-comment.php
     */
    public function startComment()
    {
    }

    /**
     * Create document tag
     *
     * @param string|null $version The version number of the document as part of the XML declaration.
     * @param string|null $encoding The encoding of the document as part of the XML declaration.
     * @param string $standalone <code>yes</code> or <code>no</code>.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-start-document.php
     */
    public function startDocument($version = 1.0, $encoding = null, $standalone = null)
    {
    }

    /**
     * Create start DTD tag
     *
     * @param string $qualifiedName The qualified name of the document type to create.
     * @param string $publicId The external subset public identifier.
     * @param string $systemId The external subset system identifier.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-start-dtd.php
     */
    public function startDtd($qualifiedName, $publicId = null, $systemId = null)
    {
    }

    /**
     * Create start DTD AttList
     *
     * @param string $name The attribute list name.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-start-dtd-attlist.php
     */
    public function startDtdAttlist($name)
    {
    }

    /**
     * Create start DTD element
     *
     * @param string $qualifiedName The qualified name of the document type to create.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-start-dtd-element.php
     */
    public function startDtdElement($qualifiedName)
    {
    }

    /**
     * Create start DTD Entity
     *
     * @param string $name The name of the entity.
     * @param bool $isparam
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-start-dtd-entity.php
     */
    public function startDtdEntity($name, $isparam)
    {
    }

    /**
     * Create start element tag
     *
     * @param string $name The element name.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-start-element.php
     */
    public function startElement($name)
    {
    }

    /**
     * Create start namespaced element tag
     *
     * @param string $prefix The namespace prefix.
     * @param string $name The element name.
     * @param string $uri The namespace URI.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-start-element-ns.php
     */
    public function startElementNs($prefix, $name, $uri)
    {
    }

    /**
     * Create start PI tag
     *
     * @param string $target The target of the processing instruction.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-start-pi.php
     */
    public function startPi($target)
    {
    }

    /**
     * Write text
     *
     * @param string $content The contents of the text.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-text.php
     */
    public function text($content)
    {
    }

    /**
     * Write full attribute
     *
     * @param string $name The name of the attribute.
     * @param string $value The value of the attribute.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-write-attribute.php
     */
    public function writeAttribute($name, $value)
    {
    }

    /**
     * Write full namespaced attribute
     *
     * @param string $prefix The namespace prefix.
     * @param string $name The attribute name.
     * @param string $uri The namespace URI.
     * @param string $content The attribute value.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-write-attribute-ns.php
     */
    public function writeAttributeNs($prefix, $name, $uri, $content)
    {
    }

    /**
     * Write full CDATA tag
     *
     * @param string $content The contents of the CDATA.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-write-cdata.php
     */
    public function writeCdata($content)
    {
    }

    /**
     * Write full comment tag
     *
     * @param string $content The contents of the comment.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-write-comment.php
     */
    public function writeComment($content)
    {
    }

    /**
     * Write full DTD tag
     *
     * @param string $name The DTD name.
     * @param string $publicId The external subset public identifier.
     * @param string $systemId The external subset system identifier.
     * @param string $subset The content of the DTD.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-write-dtd.php
     */
    public function writeDtd($name, $publicId = null, $systemId = null, $subset = null)
    {
    }

    /**
     * Write full DTD AttList tag
     *
     * @param string $name The name of the DTD attribute list.
     * @param string $content The content of the DTD attribute list.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-write-dtd-attlist.php
     */
    public function writeDtdAttlist($name, $content)
    {
    }

    /**
     * Write full DTD element tag
     *
     * @param string $name The name of the DTD element.
     * @param string $content The content of the element.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-write-dtd-element.php
     */
    public function writeDtdElement($name, $content)
    {
    }

    /**
     * Write full DTD Entity tag
     *
     * @param string $name The name of the entity.
     * @param string $content The content of the entity.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-write-dtd-entity.php
     */
    public function writeDtdEntity($name, $content)
    {
    }

    /**
     * Write full element tag
     *
     * @param string $name The element name.
     * @param string $content The element contents.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-write-element.php
     */
    public function writeElement($name, $content = null)
    {
    }

    /**
     * Write full namespaced element tag
     *
     * @param string $prefix The namespace prefix.
     * @param string $name The element name.
     * @param string $uri The namespace URI.
     * @param string $content The element contents.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-write-element-ns.php
     */
    public function writeElementNs($prefix, $name, $uri, $content = null)
    {
    }

    /**
     * Writes a PI
     *
     * @param string $target The target of the processing instruction.
     * @param string $content The content of the processing instruction.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-write-pi.php
     */
    public function writePi($target, $content)
    {
    }

    /**
     * Write a raw XML text
     *
     * @param string $content The text string to write.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7, PECL xmlwriter >= 2.0.4
     *
     * @link http://www.php.net/manual/en/function.xmlwriter-write-raw.php
     */
    public function writeRaw($content)
    {
    }
}

/**
 * End attribute
 *
 * @param mixed $xmlwriter
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-end-attribute.php
 */
function xmlwriter_end_attribute($xmlwriter)
{
}

/**
 * End current CDATA
 *
 * @param mixed $xmlwriter
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-end-cdata.php
 */
function xmlwriter_end_cdata($xmlwriter)
{
}

/**
 * Create end comment
 *
 * @param mixed $xmlwriter
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-end-comment.php
 */
function xmlwriter_end_comment($xmlwriter)
{
}

/**
 * End current document
 *
 * @param mixed $xmlwriter
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-end-document.php
 */
function xmlwriter_end_document($xmlwriter)
{
}

/**
 * End current DTD
 *
 * @param mixed $xmlwriter
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-end-dtd.php
 */
function xmlwriter_end_dtd($xmlwriter)
{
}

/**
 * End current DTD AttList
 *
 * @param mixed $xmlwriter
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-end-dtd-attlist.php
 */
function xmlwriter_end_dtd_attlist($xmlwriter)
{
}

/**
 * End current DTD element
 *
 * @param mixed $xmlwriter
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-end-dtd-element.php
 */
function xmlwriter_end_dtd_element($xmlwriter)
{
}

/**
 * End current DTD Entity
 *
 * @param mixed $xmlwriter
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-end-dtd-entity.php
 */
function xmlwriter_end_dtd_entity($xmlwriter)
{
}

/**
 * End current element
 *
 * @param mixed $xmlwriter
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-end-element.php
 */
function xmlwriter_end_element($xmlwriter)
{
}

/**
 * End current PI
 *
 * @param mixed $xmlwriter
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-end-pi.php
 */
function xmlwriter_end_pi($xmlwriter)
{
}

/**
 * Flush current buffer
 *
 * @param bool|null $empty Whether to empty the buffer or not. Default is <code>TRUE</code>.
 * @param mixed $empty
 *
 * @return mixed If you opened the writer in memory, this function returns the generated XML buffer,
 * Else, if using URI, this function will write the buffer and return the number of
 * written bytes.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-flush.php
 */
function xmlwriter_flush($empty = true, $empty = null)
{
}

/**
 * End current element
 *
 * @param mixed $xmlwriter
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7, PECL xmlwriter >= 2.0.4
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-full-end-element.php
 */
function xmlwriter_full_end_element($xmlwriter)
{
}

/**
 * Create new xmlwriter using memory for string output
 *
 * @return bool Object oriented style: Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 * Procedural style: Returns a new xmlwriter resource for later use with the
 * xmlwriter functions on success, <code>FALSE</code> on error.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-open-memory.php
 */
function xmlwriter_open_memory()
{
}

/**
 * Create new xmlwriter using source uri for output
 *
 * @param string $uri The URI of the resource for the output.
 *
 * @return bool Object oriented style: Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 * Procedural style: Returns a new xmlwriter resource for later use with the
 * xmlwriter functions on success, <code>FALSE</code> on error.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-open-uri.php
 */
function xmlwriter_open_uri($uri)
{
}

/**
 * Returns current buffer
 *
 * @param bool|null $flush Whether to flush the output buffer or not. Default is <code>TRUE</code>.
 * @param mixed $flush
 *
 * @return string Returns the current buffer as a string.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-output-memory.php
 */
function xmlwriter_output_memory($flush = true, $flush = null)
{
}

/**
 * Toggle indentation on/off
 *
 * @param bool $indent Whether indentation is enabled.
 * @param mixed $indent
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-set-indent.php
 */
function xmlwriter_set_indent($indent, $indent)
{
}

/**
 * Set string used for indenting
 *
 * @param string $indentString The indentation string.
 * @param mixed $indentString
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-set-indent-string.php
 */
function xmlwriter_set_indent_string($indentString, $indentString)
{
}

/**
 * Create start attribute
 *
 * @param string $name The attribute name.
 * @param mixed $name
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-attribute.php
 */
function xmlwriter_start_attribute($name, $name)
{
}

/**
 * Create start namespaced attribute
 *
 * @param string $prefix The namespace prefix.
 * @param string $name The attribute name.
 * @param string $uri The namespace URI.
 * @param mixed $uri
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-attribute-ns.php
 */
function xmlwriter_start_attribute_ns($prefix, $name, $uri, $uri)
{
}

/**
 * Create start CDATA tag
 *
 * @param mixed $xmlwriter
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-cdata.php
 */
function xmlwriter_start_cdata($xmlwriter)
{
}

/**
 * Create start comment
 *
 * @param mixed $xmlwriter
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-comment.php
 */
function xmlwriter_start_comment($xmlwriter)
{
}

/**
 * Create document tag
 *
 * @param string|null $version The version number of the document as part of the XML declaration.
 * @param string|null $encoding The encoding of the document as part of the XML declaration.
 * @param string $standalone <code>yes</code> or <code>no</code>.
 * @param mixed $standalone
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-document.php
 */
function xmlwriter_start_document($version = 1.0, $encoding = null, $standalone = null, $standalone = null)
{
}

/**
 * Create start DTD tag
 *
 * @param string $qualifiedName The qualified name of the document type to create.
 * @param string $publicId The external subset public identifier.
 * @param string $systemId The external subset system identifier.
 * @param mixed $systemId
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-dtd.php
 */
function xmlwriter_start_dtd($qualifiedName, $publicId, $systemId = null, $systemId = null)
{
}

/**
 * Create start DTD AttList
 *
 * @param string $name The attribute list name.
 * @param mixed $name
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-dtd-attlist.php
 */
function xmlwriter_start_dtd_attlist($name, $name)
{
}

/**
 * Create start DTD element
 *
 * @param string $qualifiedName The qualified name of the document type to create.
 * @param mixed $qualifiedName
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-dtd-element.php
 */
function xmlwriter_start_dtd_element($qualifiedName, $qualifiedName)
{
}

/**
 * Create start DTD Entity
 *
 * @param string $name The name of the entity.
 * @param bool $isparam
 * @param mixed $isparam
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-dtd-entity.php
 */
function xmlwriter_start_dtd_entity($name, $isparam, $isparam)
{
}

/**
 * Create start element tag
 *
 * @param string $name The element name.
 * @param mixed $name
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-element.php
 */
function xmlwriter_start_element($name, $name)
{
}

/**
 * Create start namespaced element tag
 *
 * @param string $prefix The namespace prefix.
 * @param string $name The element name.
 * @param string $uri The namespace URI.
 * @param mixed $uri
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-element-ns.php
 */
function xmlwriter_start_element_ns($prefix, $name, $uri, $uri)
{
}

/**
 * Create start PI tag
 *
 * @param string $target The target of the processing instruction.
 * @param mixed $target
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-pi.php
 */
function xmlwriter_start_pi($target, $target)
{
}

/**
 * Write text
 *
 * @param string $content The contents of the text.
 * @param mixed $content
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-text.php
 */
function xmlwriter_text($content, $content)
{
}

/**
 * Write full attribute
 *
 * @param string $name The name of the attribute.
 * @param string $value The value of the attribute.
 * @param mixed $value
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-attribute.php
 */
function xmlwriter_write_attribute($name, $value, $value)
{
}

/**
 * Write full namespaced attribute
 *
 * @param string $prefix The namespace prefix.
 * @param string $name The attribute name.
 * @param string $uri The namespace URI.
 * @param string $content The attribute value.
 * @param mixed $content
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-attribute-ns.php
 */
function xmlwriter_write_attribute_ns($prefix, $name, $uri, $content, $content)
{
}

/**
 * Write full CDATA tag
 *
 * @param string $content The contents of the CDATA.
 * @param mixed $content
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-cdata.php
 */
function xmlwriter_write_cdata($content, $content)
{
}

/**
 * Write full comment tag
 *
 * @param string $content The contents of the comment.
 * @param mixed $content
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-comment.php
 */
function xmlwriter_write_comment($content, $content)
{
}

/**
 * Write full DTD tag
 *
 * @param string $name The DTD name.
 * @param string $publicId The external subset public identifier.
 * @param string $systemId The external subset system identifier.
 * @param string $subset The content of the DTD.
 * @param mixed $subset
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-dtd.php
 */
function xmlwriter_write_dtd($name, $publicId, $systemId = null, $subset = null, $subset = null)
{
}

/**
 * Write full DTD AttList tag
 *
 * @param string $name The name of the DTD attribute list.
 * @param string $content The content of the DTD attribute list.
 * @param mixed $content
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-dtd-attlist.php
 */
function xmlwriter_write_dtd_attlist($name, $content, $content)
{
}

/**
 * Write full DTD element tag
 *
 * @param string $name The name of the DTD element.
 * @param string $content The content of the element.
 * @param mixed $content
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-dtd-element.php
 */
function xmlwriter_write_dtd_element($name, $content, $content)
{
}

/**
 * Write full DTD Entity tag
 *
 * @param string $name The name of the entity.
 * @param string $content The content of the entity.
 * @param bool $pe
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-dtd-entity.php
 */
function xmlwriter_write_dtd_entity($name, $content, $pe)
{
}

/**
 * Write full element tag
 *
 * @param string $name The element name.
 * @param string $content The element contents.
 * @param mixed $content
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-element.php
 */
function xmlwriter_write_element($name, $content, $content = null)
{
}

/**
 * Write full namespaced element tag
 *
 * @param string $prefix The namespace prefix.
 * @param string $name The element name.
 * @param string $uri The namespace URI.
 * @param string $content The element contents.
 * @param mixed $content
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-element-ns.php
 */
function xmlwriter_write_element_ns($prefix, $name, $uri, $content, $content = null)
{
}

/**
 * Writes a PI
 *
 * @param string $target The target of the processing instruction.
 * @param string $content The content of the processing instruction.
 * @param mixed $content
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-pi.php
 */
function xmlwriter_write_pi($target, $content, $content)
{
}

/**
 * Write a raw XML text
 *
 * @param string $content The text string to write.
 * @param mixed $content
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7, PECL xmlwriter >= 2.0.4
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-raw.php
 */
function xmlwriter_write_raw($content, $content)
{
}
