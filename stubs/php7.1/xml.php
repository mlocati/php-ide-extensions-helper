<?php
// Start of extension: xml
// - parsed on POSIX with PHP 7.1.15 (extension version 7.1.15)
// - parsed on Windows with PHP 7.1.15 (extension version 7.1.15)

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-async-entity
 *
 * @var int
 */
const XML_ERROR_ASYNC_ENTITY = 13;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-attribute-external-entity-ref
 *
 * @var int
 */
const XML_ERROR_ATTRIBUTE_EXTERNAL_ENTITY_REF = 16;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-bad-char-ref
 *
 * @var int
 */
const XML_ERROR_BAD_CHAR_REF = 14;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-binary-entity-ref
 *
 * @var int
 */
const XML_ERROR_BINARY_ENTITY_REF = 15;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-duplicate-attribute
 *
 * @var int
 */
const XML_ERROR_DUPLICATE_ATTRIBUTE = 8;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-external-entity-handling
 *
 * @var int
 */
const XML_ERROR_EXTERNAL_ENTITY_HANDLING = 21;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-incorrect-encoding
 *
 * @var int
 */
const XML_ERROR_INCORRECT_ENCODING = 19;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-invalid-token
 *
 * @var int
 */
const XML_ERROR_INVALID_TOKEN = 4;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-junk-after-doc-element
 *
 * @var int
 */
const XML_ERROR_JUNK_AFTER_DOC_ELEMENT = 9;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-misplaced-xml-pi
 *
 * @var int
 */
const XML_ERROR_MISPLACED_XML_PI = 17;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-no-elements
 *
 * @var int
 */
const XML_ERROR_NO_ELEMENTS = 3;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-no-memory
 *
 * @var int
 */
const XML_ERROR_NO_MEMORY = 1;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-none
 *
 * @var int
 */
const XML_ERROR_NONE = 0;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-param-entity-ref
 *
 * @var int
 */
const XML_ERROR_PARAM_ENTITY_REF = 10;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-partial-char
 *
 * @var int
 */
const XML_ERROR_PARTIAL_CHAR = 6;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-recursive-entity-ref
 *
 * @var int
 */
const XML_ERROR_RECURSIVE_ENTITY_REF = 12;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-syntax
 *
 * @var int
 */
const XML_ERROR_SYNTAX = 2;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-tag-mismatch
 *
 * @var int
 */
const XML_ERROR_TAG_MISMATCH = 7;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-unclosed-cdata-section
 *
 * @var int
 */
const XML_ERROR_UNCLOSED_CDATA_SECTION = 20;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-unclosed-token
 *
 * @var int
 */
const XML_ERROR_UNCLOSED_TOKEN = 5;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-undefined-entity
 *
 * @var int
 */
const XML_ERROR_UNDEFINED_ENTITY = 11;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-error-unknown-encoding
 *
 * @var int
 */
const XML_ERROR_UNKNOWN_ENCODING = 18;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-option-case-folding
 *
 * @var int
 */
const XML_OPTION_CASE_FOLDING = 1;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-option-skip-tagstart
 *
 * @var int
 */
const XML_OPTION_SKIP_TAGSTART = 3;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-option-skip-white
 *
 * @var int
 */
const XML_OPTION_SKIP_WHITE = 4;

/**
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-option-target-encoding
 *
 * @var int
 */
const XML_OPTION_TARGET_ENCODING = 2;

/**
 * Holds the SAX implementation method.
 * Can be <code>libxml</code> or <code>expat</code>.
 *
 * @link http://www.php.net/manual/en/xml.constants.php#constant.xml-sax-impl
 *
 * @var string
 */
const XML_SAX_IMPL = 'libxml';

/**
 * Converts a string with ISO-8859-1 characters encoded with UTF-8
 * to single-byte ISO-8859-1
 *
 * @param mixed $data
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.utf8-decode.php
 */
function utf8_decode($data): string
{
}

/**
 * Encodes an ISO-8859-1 string to UTF-8
 *
 * @param mixed $data
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.utf8-encode.php
 */
function utf8_encode($data): string
{
}

/**
 * Get XML parser error string
 *
 * @param mixed $code
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-error-string.php
 */
function xml_error_string($code): string
{
}

/**
 * Get current byte index for an XML parser
 *
 * @param mixed $parser
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-get-current-byte-index.php
 */
function xml_get_current_byte_index($parser): int
{
}

/**
 * Get current column number for an XML parser
 *
 * @param mixed $parser
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-get-current-column-number.php
 */
function xml_get_current_column_number($parser): int
{
}

/**
 * Get current line number for an XML parser
 *
 * @param mixed $parser
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-get-current-line-number.php
 */
function xml_get_current_line_number($parser): int
{
}

/**
 * Get XML parser error code
 *
 * @param mixed $parser
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-get-error-code.php
 */
function xml_get_error_code($parser): int
{
}

/**
 * Start parsing an XML document
 *
 * @param mixed $parser
 * @param mixed $data
 * @param mixed|null $isfinal
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-parse.php
 */
function xml_parse($parser, $data, $isfinal = null): int
{
}

/**
 * Parse XML data into an array structure
 *
 * @param mixed $parser
 * @param mixed $data
 * @param mixed $values
 * @param mixed|null $index
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-parse-into-struct.php
 */
function xml_parse_into_struct($parser, $data, &$values, &$index = null): int
{
}

/**
 * Create an XML parser
 *
 * @param mixed|null $encoding
 *
 * @return resource
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-parser-create.php
 */
function xml_parser_create($encoding = null)
{
}

/**
 * Create an XML parser with namespace support
 *
 * @param mixed|null $encoding
 * @param mixed|null $sep
 *
 * @return resource
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-parser-create-ns.php
 */
function xml_parser_create_ns($encoding = null, $sep = null)
{
}

/**
 * Free an XML parser
 *
 * @param mixed $parser
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-parser-free.php
 */
function xml_parser_free($parser): bool
{
}

/**
 * Get options from an XML parser
 *
 * @param mixed $parser
 * @param mixed $option
 *
 * @return mixed
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-parser-get-option.php
 */
function xml_parser_get_option($parser, $option)
{
}

/**
 * Set options in an XML parser
 *
 * @param mixed $parser
 * @param mixed $option
 * @param mixed $value
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-parser-set-option.php
 */
function xml_parser_set_option($parser, $option, $value): bool
{
}

/**
 * Set up character data handler
 *
 * @param mixed $parser
 * @param mixed $hdl
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-set-character-data-handler.php
 */
function xml_set_character_data_handler($parser, $hdl): bool
{
}

/**
 * Set up default handler
 *
 * @param mixed $parser
 * @param mixed $hdl
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-set-default-handler.php
 */
function xml_set_default_handler($parser, $hdl): bool
{
}

/**
 * Set up start and end element handlers
 *
 * @param mixed $parser
 * @param mixed $shdl
 * @param mixed $ehdl
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-set-element-handler.php
 */
function xml_set_element_handler($parser, $shdl, $ehdl): bool
{
}

/**
 * Set up end namespace declaration handler
 *
 * @param mixed $parser
 * @param mixed $hdl
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-set-end-namespace-decl-handler.php
 */
function xml_set_end_namespace_decl_handler($parser, $hdl): bool
{
}

/**
 * Set up external entity reference handler
 *
 * @param mixed $parser
 * @param mixed $hdl
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-set-external-entity-ref-handler.php
 */
function xml_set_external_entity_ref_handler($parser, $hdl): bool
{
}

/**
 * Set up notation declaration handler
 *
 * @param mixed $parser
 * @param mixed $hdl
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-set-notation-decl-handler.php
 */
function xml_set_notation_decl_handler($parser, $hdl): bool
{
}

/**
 * Use XML Parser within an object
 *
 * @param mixed $parser
 * @param mixed $obj
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-set-object.php
 */
function xml_set_object($parser, $obj): bool
{
}

/**
 * Set up processing instruction (PI) handler
 *
 * @param mixed $parser
 * @param mixed $hdl
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-set-processing-instruction-handler.php
 */
function xml_set_processing_instruction_handler($parser, $hdl): bool
{
}

/**
 * Set up start namespace declaration handler
 *
 * @param mixed $parser
 * @param mixed $hdl
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-set-start-namespace-decl-handler.php
 */
function xml_set_start_namespace_decl_handler($parser, $hdl): bool
{
}

/**
 * Set up unparsed entity declaration handler
 *
 * @param mixed $parser
 * @param mixed $hdl
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-set-unparsed-entity-decl-handler.php
 */
function xml_set_unparsed_entity_decl_handler($parser, $hdl): bool
{
}
