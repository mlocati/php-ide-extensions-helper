<?php
// Documentation generated automatically for extension xml v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
// No INI entries
const XML_ERROR_ASYNC_ENTITY = 13;
const XML_ERROR_ATTRIBUTE_EXTERNAL_ENTITY_REF = 16;
const XML_ERROR_BAD_CHAR_REF = 14;
const XML_ERROR_BINARY_ENTITY_REF = 15;
const XML_ERROR_DUPLICATE_ATTRIBUTE = 8;
const XML_ERROR_EXTERNAL_ENTITY_HANDLING = 21;
const XML_ERROR_INCORRECT_ENCODING = 19;
const XML_ERROR_INVALID_TOKEN = 4;
const XML_ERROR_JUNK_AFTER_DOC_ELEMENT = 9;
const XML_ERROR_MISPLACED_XML_PI = 17;
const XML_ERROR_NONE = 0;
const XML_ERROR_NO_ELEMENTS = 3;
const XML_ERROR_NO_MEMORY = 1;
const XML_ERROR_PARAM_ENTITY_REF = 10;
const XML_ERROR_PARTIAL_CHAR = 6;
const XML_ERROR_RECURSIVE_ENTITY_REF = 12;
const XML_ERROR_SYNTAX = 2;
const XML_ERROR_TAG_MISMATCH = 7;
const XML_ERROR_UNCLOSED_CDATA_SECTION = 20;
const XML_ERROR_UNCLOSED_TOKEN = 5;
const XML_ERROR_UNDEFINED_ENTITY = 11;
const XML_ERROR_UNKNOWN_ENCODING = 18;
const XML_OPTION_CASE_FOLDING = 1;
const XML_OPTION_SKIP_TAGSTART = 3;
const XML_OPTION_SKIP_WHITE = 4;
const XML_OPTION_TARGET_ENCODING = 2;
const XML_SAX_IMPL = 'libxml';
// No classes defined
function xml_parser_create($encoding = null)
{
}
function xml_parser_create_ns($encoding = null, $sep = null)
{
}
function xml_set_object($parser, $obj)
{
}
function xml_set_element_handler($parser, $shdl, $ehdl)
{
}
function xml_set_character_data_handler($parser, $hdl)
{
}
function xml_set_processing_instruction_handler($parser, $hdl)
{
}
function xml_set_default_handler($parser, $hdl)
{
}
function xml_set_unparsed_entity_decl_handler($parser, $hdl)
{
}
function xml_set_notation_decl_handler($parser, $hdl)
{
}
function xml_set_external_entity_ref_handler($parser, $hdl)
{
}
function xml_set_start_namespace_decl_handler($parser, $hdl)
{
}
function xml_set_end_namespace_decl_handler($parser, $hdl)
{
}
function xml_parse($parser, $data, $isfinal = null)
{
}
function xml_parse_into_struct($parser, $data, &$values, &$index = null)
{
}
function xml_get_error_code($parser)
{
}
function xml_error_string($code)
{
}
function xml_get_current_line_number($parser)
{
}
function xml_get_current_column_number($parser)
{
}
function xml_get_current_byte_index($parser)
{
}
function xml_parser_free($parser)
{
}
function xml_parser_set_option($parser, $option, $value)
{
}
function xml_parser_get_option($parser, $option)
{
}
function utf8_encode($data)
{
}
function utf8_decode($data)
{
}