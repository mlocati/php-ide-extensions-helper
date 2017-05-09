<?php
// Documentation generated automatically for extension xmlwriter v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
// No INI entries
// No constants defined
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
    public function flush($empty = null)
    {
    }
    public function fullEndElement()
    {
    }
    public function openMemory()
    {
    }
    public function openUri($uri)
    {
    }
    public function outputMemory($flush = null)
    {
    }
    public function setIndent($indent)
    {
    }
    public function setIndentString($indentString)
    {
    }
    public function startAttribute($name)
    {
    }
    public function startAttributeNs($prefix, $name, $uri)
    {
    }
    public function startCdata()
    {
    }
    public function startComment()
    {
    }
    public function startDocument($version = null, $encoding = null, $standalone = null)
    {
    }
    public function startDtd($qualifiedName, $publicId = null, $systemId = null)
    {
    }
    public function startDtdAttlist($name)
    {
    }
    public function startDtdElement($qualifiedName)
    {
    }
    public function startDtdEntity($name, $isparam)
    {
    }
    public function startElement($name)
    {
    }
    public function startElementNs($prefix, $name, $uri)
    {
    }
    public function startPi($target)
    {
    }
    public function text($content)
    {
    }
    public function writeAttribute($name, $value)
    {
    }
    public function writeAttributeNs($prefix, $name, $uri, $content)
    {
    }
    public function writeCdata($content)
    {
    }
    public function writeComment($content)
    {
    }
    public function writeDtd($name, $publicId = null, $systemId = null, $subset = null)
    {
    }
    public function writeDtdAttlist($name, $content)
    {
    }
    public function writeDtdElement($name, $content)
    {
    }
    public function writeDtdEntity($name, $content)
    {
    }
    public function writeElement($name, $content = null)
    {
    }
    public function writeElementNs($prefix, $name, $uri, $content = null)
    {
    }
    public function writePi($target, $content)
    {
    }
    public function writeRaw($content)
    {
    }
}
function xmlwriter_open_uri($uri)
{
}
function xmlwriter_open_memory()
{
}
function xmlwriter_set_indent($xmlwriter, $indent)
{
}
function xmlwriter_set_indent_string($xmlwriter, $indentString)
{
}
function xmlwriter_start_comment($xmlwriter)
{
}
function xmlwriter_end_comment($xmlwriter)
{
}
function xmlwriter_start_attribute($xmlwriter, $name)
{
}
function xmlwriter_end_attribute($xmlwriter)
{
}
function xmlwriter_write_attribute($xmlwriter, $name, $value)
{
}
function xmlwriter_start_attribute_ns($xmlwriter, $prefix, $name, $uri)
{
}
function xmlwriter_write_attribute_ns($xmlwriter, $prefix, $name, $uri, $content)
{
}
function xmlwriter_start_element($xmlwriter, $name)
{
}
function xmlwriter_end_element($xmlwriter)
{
}
function xmlwriter_full_end_element($xmlwriter)
{
}
function xmlwriter_start_element_ns($xmlwriter, $prefix, $name, $uri)
{
}
function xmlwriter_write_element($xmlwriter, $name, $content = null)
{
}
function xmlwriter_write_element_ns($xmlwriter, $prefix, $name, $uri, $content = null)
{
}
function xmlwriter_start_pi($xmlwriter, $target)
{
}
function xmlwriter_end_pi($xmlwriter)
{
}
function xmlwriter_write_pi($xmlwriter, $target, $content)
{
}
function xmlwriter_start_cdata($xmlwriter)
{
}
function xmlwriter_end_cdata($xmlwriter)
{
}
function xmlwriter_write_cdata($xmlwriter, $content)
{
}
function xmlwriter_text($xmlwriter, $content)
{
}
function xmlwriter_write_raw($xmlwriter, $content)
{
}
function xmlwriter_start_document($xmlwriter, $version = null, $encoding = null, $standalone = null)
{
}
function xmlwriter_end_document($xmlwriter)
{
}
function xmlwriter_write_comment($xmlwriter, $content)
{
}
function xmlwriter_start_dtd($xmlwriter, $qualifiedName, $publicId = null, $systemId = null)
{
}
function xmlwriter_end_dtd($xmlwriter)
{
}
function xmlwriter_write_dtd($xmlwriter, $name, $publicId = null, $systemId = null, $subset = null)
{
}
function xmlwriter_start_dtd_element($xmlwriter, $qualifiedName)
{
}
function xmlwriter_end_dtd_element($xmlwriter)
{
}
function xmlwriter_write_dtd_element($xmlwriter, $name, $content)
{
}
function xmlwriter_start_dtd_attlist($xmlwriter, $name)
{
}
function xmlwriter_end_dtd_attlist($xmlwriter)
{
}
function xmlwriter_write_dtd_attlist($xmlwriter, $name, $content)
{
}
function xmlwriter_start_dtd_entity($xmlwriter, $name, $isparam)
{
}
function xmlwriter_end_dtd_entity($xmlwriter)
{
}
function xmlwriter_write_dtd_entity($xmlwriter, $name, $content)
{
}
function xmlwriter_output_memory($xmlwriter, $flush = null)
{
}
function xmlwriter_flush($xmlwriter, $empty = null)
{
}