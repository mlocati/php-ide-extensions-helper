<?php
// Documentation generated automatically for extension SimpleXML v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
// No INI entries
// No constants defined
class SimpleXMLElement implements Traversable
{
    final public function __construct($data, $options = null, $data_is_url = null, $ns = null, $is_prefix = null)
    {
    }
    public function __toString()
    {
    }
    public function addAttribute($name, $value = null, $ns = null)
    {
    }
    public function addChild($name, $value = null, $ns = null)
    {
    }
    public function asXML($filename = null)
    {
    }
    public function attributes($ns = null, $is_prefix = null)
    {
    }
    public function children($ns = null, $is_prefix = null)
    {
    }
    public function count()
    {
    }
    public function getDocNamespaces($recursve = null, $from_root = null)
    {
    }
    public function getName()
    {
    }
    public function getNamespaces($recursve = null)
    {
    }
    public function registerXPathNamespace($prefix, $ns)
    {
    }
    public function saveXML($filename = null)
    {
    }
    public function xpath($path)
    {
    }
}
class SimpleXMLIterator extends SimpleXMLElement implements Countable, RecursiveIterator
{
    public function current()
    {
    }
    public function getChildren()
    {
    }
    public function hasChildren()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function rewind()
    {
    }
    public function valid()
    {
    }
}
function simplexml_load_file($filename, $class_name = null, $options = null, $ns = null, $is_prefix = null)
{
}
function simplexml_load_string($data, $class_name = null, $options = null, $ns = null, $is_prefix = null)
{
}
function simplexml_import_dom($node, $class_name = null)
{
}