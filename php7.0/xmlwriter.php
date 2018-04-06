<?php
// Start of extension: xmlwriter
// - parsed on POSIX with PHP 7.0.28 (extension version 7.0.28)
// - parsed on Windows with PHP 7.0.28 (extension version 7.0.28)

/**
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 */
class XMLWriter
{
    public function endAttribute()
    {
    }

    public function endCdata()
    {
    }

    public function endComment()
    {
    }

    public function endDocument()
    {
    }

    public function endDtd()
    {
    }

    public function endDtdAttlist()
    {
    }

    public function endDtdElement()
    {
    }

    public function endDtdEntity()
    {
    }

    public function endElement()
    {
    }

    public function endPi()
    {
    }

    /**
     * Flush system output buffer
     *
     * @param mixed|null $empty
     *
     * @return void
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.flush.php
     */
    public function flush($empty = null)
    {
    }

    public function fullEndElement()
    {
    }

    public function openMemory()
    {
    }

    /**
     * @param mixed $uri
     */
    public function openUri($uri)
    {
    }

    /**
     * @param mixed|null $flush
     */
    public function outputMemory($flush = null)
    {
    }

    /**
     * @param mixed $indent
     */
    public function setIndent($indent)
    {
    }

    /**
     * @param mixed $indentString
     */
    public function setIndentString($indentString)
    {
    }

    /**
     * @param mixed $name
     */
    public function startAttribute($name)
    {
    }

    /**
     * @param mixed $prefix
     * @param mixed $name
     * @param mixed $uri
     */
    public function startAttributeNs($prefix, $name, $uri)
    {
    }

    public function startCdata()
    {
    }

    public function startComment()
    {
    }

    /**
     * @param mixed|null $version
     * @param mixed|null $encoding
     * @param mixed|null $standalone
     */
    public function startDocument($version = null, $encoding = null, $standalone = null)
    {
    }

    /**
     * @param mixed $qualifiedName
     * @param mixed|null $publicId
     * @param mixed|null $systemId
     */
    public function startDtd($qualifiedName, $publicId = null, $systemId = null)
    {
    }

    /**
     * @param mixed $name
     */
    public function startDtdAttlist($name)
    {
    }

    /**
     * @param mixed $qualifiedName
     */
    public function startDtdElement($qualifiedName)
    {
    }

    /**
     * @param mixed $name
     * @param mixed $isparam
     */
    public function startDtdEntity($name, $isparam)
    {
    }

    /**
     * @param mixed $name
     */
    public function startElement($name)
    {
    }

    /**
     * @param mixed $prefix
     * @param mixed $name
     * @param mixed $uri
     */
    public function startElementNs($prefix, $name, $uri)
    {
    }

    /**
     * @param mixed $target
     */
    public function startPi($target)
    {
    }

    /**
     * @param mixed $content
     */
    public function text($content)
    {
    }

    /**
     * @param mixed $name
     * @param mixed $value
     */
    public function writeAttribute($name, $value)
    {
    }

    /**
     * @param mixed $prefix
     * @param mixed $name
     * @param mixed $uri
     * @param mixed $content
     */
    public function writeAttributeNs($prefix, $name, $uri, $content)
    {
    }

    /**
     * @param mixed $content
     */
    public function writeCdata($content)
    {
    }

    /**
     * @param mixed $content
     */
    public function writeComment($content)
    {
    }

    /**
     * @param mixed $name
     * @param mixed|null $publicId
     * @param mixed|null $systemId
     * @param mixed|null $subset
     */
    public function writeDtd($name, $publicId = null, $systemId = null, $subset = null)
    {
    }

    /**
     * @param mixed $name
     * @param mixed $content
     */
    public function writeDtdAttlist($name, $content)
    {
    }

    /**
     * @param mixed $name
     * @param mixed $content
     */
    public function writeDtdElement($name, $content)
    {
    }

    /**
     * @param mixed $name
     * @param mixed $content
     */
    public function writeDtdEntity($name, $content)
    {
    }

    /**
     * @param mixed $name
     * @param mixed|null $content
     */
    public function writeElement($name, $content = null)
    {
    }

    /**
     * @param mixed $prefix
     * @param mixed $name
     * @param mixed $uri
     * @param mixed|null $content
     */
    public function writeElementNs($prefix, $name, $uri, $content = null)
    {
    }

    /**
     * @param mixed $target
     * @param mixed $content
     */
    public function writePi($target, $content)
    {
    }

    /**
     * @param mixed $content
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
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-end-attribute.php
 */
function xmlwriter_end_attribute($xmlwriter): bool
{
}

/**
 * End current CDATA
 *
 * @param mixed $xmlwriter
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-end-cdata.php
 */
function xmlwriter_end_cdata($xmlwriter): bool
{
}

/**
 * Create end comment
 *
 * @param mixed $xmlwriter
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-end-comment.php
 */
function xmlwriter_end_comment($xmlwriter): bool
{
}

/**
 * End current document
 *
 * @param mixed $xmlwriter
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-end-document.php
 */
function xmlwriter_end_document($xmlwriter): bool
{
}

/**
 * End current DTD
 *
 * @param mixed $xmlwriter
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-end-dtd.php
 */
function xmlwriter_end_dtd($xmlwriter): bool
{
}

/**
 * End current DTD AttList
 *
 * @param mixed $xmlwriter
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-end-dtd-attlist.php
 */
function xmlwriter_end_dtd_attlist($xmlwriter): bool
{
}

/**
 * End current DTD element
 *
 * @param mixed $xmlwriter
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-end-dtd-element.php
 */
function xmlwriter_end_dtd_element($xmlwriter): bool
{
}

/**
 * End current DTD Entity
 *
 * @param mixed $xmlwriter
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-end-dtd-entity.php
 */
function xmlwriter_end_dtd_entity($xmlwriter): bool
{
}

/**
 * End current element
 *
 * @param mixed $xmlwriter
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-end-element.php
 */
function xmlwriter_end_element($xmlwriter): bool
{
}

/**
 * End current PI
 *
 * @param mixed $xmlwriter
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-end-pi.php
 */
function xmlwriter_end_pi($xmlwriter): bool
{
}

/**
 * Flush current buffer
 *
 * @param mixed $xmlwriter
 * @param mixed|null $empty
 *
 * @return mixed
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-flush.php
 */
function xmlwriter_flush($xmlwriter, $empty = null)
{
}

/**
 * End current element
 *
 * @param mixed $xmlwriter
 *
 * @return bool
 *
 * @since PHP 5 >= 5.2.0, PHP 7, PECL xmlwriter >= 2.0.4
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-full-end-element.php
 */
function xmlwriter_full_end_element($xmlwriter): bool
{
}

/**
 * Create new xmlwriter using memory for string output
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-open-memory.php
 */
function xmlwriter_open_memory(): bool
{
}

/**
 * Create new xmlwriter using source uri for output
 *
 * @param mixed $uri
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-open-uri.php
 */
function xmlwriter_open_uri($uri): bool
{
}

/**
 * Returns current buffer
 *
 * @param mixed $xmlwriter
 * @param mixed|null $flush
 *
 * @return string
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-output-memory.php
 */
function xmlwriter_output_memory($xmlwriter, $flush = null): string
{
}

/**
 * Toggle indentation on/off
 *
 * @param mixed $xmlwriter
 * @param mixed $indent
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-set-indent.php
 */
function xmlwriter_set_indent($xmlwriter, $indent): bool
{
}

/**
 * Set string used for indenting
 *
 * @param mixed $xmlwriter
 * @param mixed $indentString
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-set-indent-string.php
 */
function xmlwriter_set_indent_string($xmlwriter, $indentString): bool
{
}

/**
 * Create start attribute
 *
 * @param mixed $xmlwriter
 * @param mixed $name
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-attribute.php
 */
function xmlwriter_start_attribute($xmlwriter, $name): bool
{
}

/**
 * Create start namespaced attribute
 *
 * @param mixed $xmlwriter
 * @param mixed $prefix
 * @param mixed $name
 * @param mixed $uri
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-attribute-ns.php
 */
function xmlwriter_start_attribute_ns($xmlwriter, $prefix, $name, $uri): bool
{
}

/**
 * Create start CDATA tag
 *
 * @param mixed $xmlwriter
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-cdata.php
 */
function xmlwriter_start_cdata($xmlwriter): bool
{
}

/**
 * Create start comment
 *
 * @param mixed $xmlwriter
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-comment.php
 */
function xmlwriter_start_comment($xmlwriter): bool
{
}

/**
 * Create document tag
 *
 * @param mixed $xmlwriter
 * @param mixed|null $version
 * @param mixed|null $encoding
 * @param mixed|null $standalone
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-document.php
 */
function xmlwriter_start_document($xmlwriter, $version = null, $encoding = null, $standalone = null): bool
{
}

/**
 * Create start DTD tag
 *
 * @param mixed $xmlwriter
 * @param mixed $qualifiedName
 * @param mixed|null $publicId
 * @param mixed|null $systemId
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-dtd.php
 */
function xmlwriter_start_dtd($xmlwriter, $qualifiedName, $publicId = null, $systemId = null): bool
{
}

/**
 * Create start DTD AttList
 *
 * @param mixed $xmlwriter
 * @param mixed $name
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-dtd-attlist.php
 */
function xmlwriter_start_dtd_attlist($xmlwriter, $name): bool
{
}

/**
 * Create start DTD element
 *
 * @param mixed $xmlwriter
 * @param mixed $qualifiedName
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-dtd-element.php
 */
function xmlwriter_start_dtd_element($xmlwriter, $qualifiedName): bool
{
}

/**
 * Create start DTD Entity
 *
 * @param mixed $xmlwriter
 * @param mixed $name
 * @param mixed $isparam
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-dtd-entity.php
 */
function xmlwriter_start_dtd_entity($xmlwriter, $name, $isparam): bool
{
}

/**
 * Create start element tag
 *
 * @param mixed $xmlwriter
 * @param mixed $name
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-element.php
 */
function xmlwriter_start_element($xmlwriter, $name): bool
{
}

/**
 * Create start namespaced element tag
 *
 * @param mixed $xmlwriter
 * @param mixed $prefix
 * @param mixed $name
 * @param mixed $uri
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-element-ns.php
 */
function xmlwriter_start_element_ns($xmlwriter, $prefix, $name, $uri): bool
{
}

/**
 * Create start PI tag
 *
 * @param mixed $xmlwriter
 * @param mixed $target
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-start-pi.php
 */
function xmlwriter_start_pi($xmlwriter, $target): bool
{
}

/**
 * Write text
 *
 * @param mixed $xmlwriter
 * @param mixed $content
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-text.php
 */
function xmlwriter_text($xmlwriter, $content): bool
{
}

/**
 * Write full attribute
 *
 * @param mixed $xmlwriter
 * @param mixed $name
 * @param mixed $value
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-attribute.php
 */
function xmlwriter_write_attribute($xmlwriter, $name, $value): bool
{
}

/**
 * Write full namespaced attribute
 *
 * @param mixed $xmlwriter
 * @param mixed $prefix
 * @param mixed $name
 * @param mixed $uri
 * @param mixed $content
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-attribute-ns.php
 */
function xmlwriter_write_attribute_ns($xmlwriter, $prefix, $name, $uri, $content): bool
{
}

/**
 * Write full CDATA tag
 *
 * @param mixed $xmlwriter
 * @param mixed $content
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-cdata.php
 */
function xmlwriter_write_cdata($xmlwriter, $content): bool
{
}

/**
 * Write full comment tag
 *
 * @param mixed $xmlwriter
 * @param mixed $content
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-comment.php
 */
function xmlwriter_write_comment($xmlwriter, $content): bool
{
}

/**
 * Write full DTD tag
 *
 * @param mixed $xmlwriter
 * @param mixed $name
 * @param mixed|null $publicId
 * @param mixed|null $systemId
 * @param mixed|null $subset
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-dtd.php
 */
function xmlwriter_write_dtd($xmlwriter, $name, $publicId = null, $systemId = null, $subset = null): bool
{
}

/**
 * Write full DTD AttList tag
 *
 * @param mixed $xmlwriter
 * @param mixed $name
 * @param mixed $content
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-dtd-attlist.php
 */
function xmlwriter_write_dtd_attlist($xmlwriter, $name, $content): bool
{
}

/**
 * Write full DTD element tag
 *
 * @param mixed $xmlwriter
 * @param mixed $name
 * @param mixed $content
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-dtd-element.php
 */
function xmlwriter_write_dtd_element($xmlwriter, $name, $content): bool
{
}

/**
 * Write full DTD Entity tag
 *
 * @param mixed $xmlwriter
 * @param mixed $name
 * @param mixed $content
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-dtd-entity.php
 */
function xmlwriter_write_dtd_entity($xmlwriter, $name, $content): bool
{
}

/**
 * Write full element tag
 *
 * @param mixed $xmlwriter
 * @param mixed $name
 * @param mixed|null $content
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-element.php
 */
function xmlwriter_write_element($xmlwriter, $name, $content = null): bool
{
}

/**
 * Write full namespaced element tag
 *
 * @param mixed $xmlwriter
 * @param mixed $prefix
 * @param mixed $name
 * @param mixed $uri
 * @param mixed|null $content
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-element-ns.php
 */
function xmlwriter_write_element_ns($xmlwriter, $prefix, $name, $uri, $content = null): bool
{
}

/**
 * Writes a PI
 *
 * @param mixed $xmlwriter
 * @param mixed $target
 * @param mixed $content
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-pi.php
 */
function xmlwriter_write_pi($xmlwriter, $target, $content): bool
{
}

/**
 * Write a raw XML text
 *
 * @param mixed $xmlwriter
 * @param mixed $content
 *
 * @return bool
 *
 * @since PHP 5 >= 5.2.0, PHP 7, PECL xmlwriter >= 2.0.4
 *
 * @link http://www.php.net/manual/en/function.xmlwriter-write-raw.php
 */
function xmlwriter_write_raw($xmlwriter, $content): bool
{
}
