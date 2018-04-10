<?php
// Start of extension: xml
// - parsed on POSIX with PHP 5.6.35
// - parsed on Windows with PHP 5.6.35

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
 * Controls whether case-folding is enabled for this
 * XML parser. Enabled by default.
 *
 * @link http://www.php.net/manual/en/function.xml-parser-set-option.php
 *
 * @var int
 */
const XML_OPTION_CASE_FOLDING = 1;

/**
 * Specify how many characters should be skipped in the beginning of a
 * tag name.
 *
 * @link http://www.php.net/manual/en/function.xml-parser-set-option.php
 *
 * @var int
 */
const XML_OPTION_SKIP_TAGSTART = 3;

/**
 * Whether to skip values consisting of whitespace characters.
 *
 * @link http://www.php.net/manual/en/function.xml-parser-set-option.php
 *
 * @var int
 */
const XML_OPTION_SKIP_WHITE = 4;

/**
 * Sets which target encoding to
 * use in this XML parser.By default, it is set to the same as the
 * source encoding used by <code>xml_parser_create</code>.
 * Supported target encodings are <code>ISO-8859-1</code>,
 * <code>US-ASCII</code> and <code>UTF-8</code>.
 *
 * @link http://www.php.net/manual/en/function.xml-parser-set-option.php
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
 * @param string $data A UTF-8 encoded string.
 *
 * @return string Returns the ISO-8859-1 translation of <code>data</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.utf8-decode.php
 */
function utf8_decode($data)
{
}

/**
 * Encodes an ISO-8859-1 string to UTF-8
 *
 * @param string $data An ISO-8859-1 string.
 *
 * @return string Returns the UTF-8 translation of <code>data</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.utf8-encode.php
 */
function utf8_encode($data)
{
}

/**
 * Get XML parser error string
 *
 * @param int $code An error code from <code>xml_get_error_code</code>.
 *
 * @return string Returns a string with a textual description of the error
 * <code>code</code>, or <code>FALSE</code> if no description was found.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-error-string.php
 */
function xml_error_string($code)
{
}

/**
 * Get current byte index for an XML parser
 *
 * @param resource $parser A reference to the XML parser to get byte index from.
 *
 * @return int This function returns <code>FALSE</code> if <code>parser</code> does
 * not refer to a valid parser, or else it returns which byte index
 * the parser is currently at in its data buffer (starting at 0).
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-get-current-byte-index.php
 */
function xml_get_current_byte_index($parser)
{
}

/**
 * Get current column number for an XML parser
 *
 * @param resource $parser A reference to the XML parser to get column number from.
 *
 * @return int This function returns <code>FALSE</code> if <code>parser</code> does
 * not refer to a valid parser, or else it returns which column on
 * the current line (as given by
 * <code>xml_get_current_line_number</code>) the parser is
 * currently at.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-get-current-column-number.php
 */
function xml_get_current_column_number($parser)
{
}

/**
 * Get current line number for an XML parser
 *
 * @param resource $parser A reference to the XML parser to get line number from.
 *
 * @return int This function returns <code>FALSE</code> if <code>parser</code> does
 * not refer to a valid parser, or else it returns which line the
 * parser is currently at in its data buffer.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-get-current-line-number.php
 */
function xml_get_current_line_number($parser)
{
}

/**
 * Get XML parser error code
 *
 * @param resource $parser A reference to the XML parser to get error code from.
 *
 * @return int This function returns <code>FALSE</code> if <code>parser</code> does
 * not refer to a valid parser, or else it returns one of the error
 * codes listed in the error codes
 * section.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-get-error-code.php
 */
function xml_get_error_code($parser)
{
}

/**
 * Start parsing an XML document
 *
 * @param resource $parser A reference to the XML parser to use.
 * @param string $data Chunk of data to parse. A document may be parsed piece-wise by
 * calling <code>xml_parse</code> several times with new data,
 * as long as the <code>is_final</code> parameter is set and
 * <code>TRUE</code> when the last data is parsed.
 * @param bool|null $is_final If set and <code>TRUE</code>, <code>data</code> is the last piece of
 * data sent in this parse.
 *
 * @return int Returns 1 on success or 0 on failure.
 * For unsuccessful parses, error information can be retrieved with
 * <code>xml_get_error_code</code>,
 * <code>xml_error_string</code>,
 * <code>xml_get_current_line_number</code>,
 * <code>xml_get_current_column_number</code> and
 * <code>xml_get_current_byte_index</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-parse.php
 */
function xml_parse($parser, $data, $is_final = false)
{
}

/**
 * Parse XML data into an array structure
 *
 * @param resource $parser A reference to the XML parser.
 * @param string $data A string containing the XML data.
 * @param array $values An array containing the values of the XML data
 * @param array $index An array containing pointers to the location of the appropriate values in the $values.
 *
 * @return int <code>xml_parse_into_struct</code> returns 0 for failure and 1 for
 * success. This is not the same as <code>FALSE</code> and <code>TRUE</code>, be careful with
 * operators such as ===.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-parse-into-struct.php
 */
function xml_parse_into_struct($parser, $data, array &$values, array &$index = null)
{
}

/**
 * Create an XML parser
 *
 * @param string $encoding The optional <code>encoding</code> specifies the character
 * encoding for the input/output in PHP 4. Starting from PHP 5, the input
 * encoding is automatically detected, so that the
 * <code>encoding</code> parameter specifies only the output
 * encoding. In PHP 4, the default output encoding is the same as the
 * input charset. If empty string is passed, the parser attempts to identify
 * which encoding the document is encoded in by looking at the heading 3 or
 * 4 bytes. In PHP 5.0.0 and 5.0.1, the default output charset is
 * ISO-8859-1, while in PHP 5.0.2 and upper is UTF-8. The supported
 * encodings are <code>ISO-8859-1</code>, <code>UTF-8</code> and
 * <code>US-ASCII</code>.
 *
 * @return resource Returns a resource handle for the new XML parser.
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
 * @param string $encoding The input encoding is automatically detected, so that the
 * <code>encoding</code> parameter specifies only the output
 * encoding. In PHP 5.0.0 and 5.0.1, the default output charset is
 * ISO-8859-1, while in PHP 5.0.2 and upper is UTF-8. The supported
 * encodings are <code>ISO-8859-1</code>, <code>UTF-8</code> and
 * <code>US-ASCII</code>.
 * @param string|null $separator With a namespace aware parser tag parameters passed to the various
 * handler functions will consist of namespace and tag name separated by
 * the string specified in <code>separator</code>.
 *
 * @return resource Returns a resource handle for the new XML parser.
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-parser-create-ns.php
 */
function xml_parser_create_ns($encoding = null, $separator = ":")
{
}

/**
 * Free an XML parser
 *
 * @param resource $parser
 *
 * @return bool This function returns <code>FALSE</code> if <code>parser</code> does not
 * refer to a valid parser, or else it frees the parser and returns <code>TRUE</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-parser-free.php
 */
function xml_parser_free($parser)
{
}

/**
 * Get options from an XML parser
 *
 * @param resource $parser
 * @param int $option
 *
 * @return mixed This function returns <code>FALSE</code> if <code>parser</code> does
 * not refer to a valid parser or if <code>option</code> isn't
 * valid (generates also a <code>E_WARNING</code>).
 * Else the option's value is returned.
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
 * @param resource $parser A reference to the XML parser to set an option in.
 * @param int $option Which option to set. See below.
 * @param mixed $value The option's new value.
 *
 * @return bool This function returns <code>FALSE</code> if <code>parser</code> does not
 * refer to a valid parser, or if the option could not be set. Else the
 * option is set and <code>TRUE</code> is returned.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-parser-set-option.php
 */
function xml_parser_set_option($parser, $option, $value)
{
}

/**
 * Set up character data handler
 *
 * @param resource $parser A reference to the XML parser to set up character data handler function.
 * @param callable $handler <code>handler</code> is a string containing the name of a
 * function that must exist when <code>xml_parse</code> is called
 * for <code>parser</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-set-character-data-handler.php
 */
function xml_set_character_data_handler($parser, callable $handler)
{
}

/**
 * Set up default handler
 *
 * @param resource $parser A reference to the XML parser to set up default handler function.
 * @param callable $handler <code>handler</code> is a string containing the name of a
 * function that must exist when <code>xml_parse</code> is called
 * for <code>parser</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-set-default-handler.php
 */
function xml_set_default_handler($parser, callable $handler)
{
}

/**
 * Set up start and end element handlers
 *
 * @param resource $parser A reference to the XML parser to set up start and end element handler functions.
 * @param callable $start_element_handler The function named by <code>start_element_handler</code>
 * must accept three parameters:
 * <methodsynopsis>
 * <code><replaceable>start_element_handler</replaceable></code>
 * <methodparam><code>resource</code><code>parser</code></methodparam>
 * <methodparam><code>string</code><code>name</code></methodparam>
 * <methodparam><code>array</code><code>attribs</code></methodparam>
 * </methodsynopsis>
 * <ul>
 * <li>
 * <code><code>parser</code></code>
 * The first parameter, <replaceable>parser</replaceable>, is a
 * reference to the XML parser calling the handler.
 * </li>
 * <li>
 * <code><code>name</code></code>
 * The second parameter, <code>name</code>, contains the name
 * of the element for which this handler is called.If case-folding is in effect for this
 * parser, the element name will be in uppercase letters.
 * </li>
 * <li>
 * <code><code>attribs</code></code>
 * The third parameter, <code>attribs</code>, contains an
 * associative array with the element's attributes (if any).The keys
 * of this array are the attribute names, the values are the attribute
 * values.Attribute names are case-folded on the same criteria as
 * element names.Attribute values are <code>not</code>
 * case-folded.
 * The original order of the attributes can be retrieved by walking
 * through <code>attribs</code> the normal way, using
 * <code>each</code>.The first key in the array was the first
 * attribute, and so on.
 * </li>
 * </ul>
 * @param callable $end_element_handler The function named by <code>end_element_handler</code>
 * must accept two parameters:
 * <methodsynopsis>
 * <code><replaceable>end_element_handler</replaceable></code>
 * <methodparam><code>resource</code><code>parser</code></methodparam>
 * <methodparam><code>string</code><code>name</code></methodparam>
 * </methodsynopsis>
 * <ul>
 * <li>
 * <code><code>parser</code></code>
 * The first parameter, <replaceable>parser</replaceable>, is a
 * reference to the XML parser calling the handler.
 * </li>
 * <li>
 * <code><code>name</code></code>
 * The second parameter, <code>name</code>, contains the name
 * of the element for which this handler is called.If case-folding is in effect for this
 * parser, the element name will be in uppercase letters.
 * </li>
 * </ul>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-set-element-handler.php
 */
function xml_set_element_handler($parser, callable $start_element_handler, callable $end_element_handler)
{
}

/**
 * Set up end namespace declaration handler
 *
 * @param resource $parser A reference to the XML parser.
 * @param callable $handler <code>handler</code> is a string containing the name of a
 * function that must exist when <code>xml_parse</code> is called
 * for <code>parser</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-set-end-namespace-decl-handler.php
 */
function xml_set_end_namespace_decl_handler($parser, callable $handler)
{
}

/**
 * Set up external entity reference handler
 *
 * @param resource $parser A reference to the XML parser to set up external entity reference handler function.
 * @param callable $handler <code>handler</code> is a string containing the name of a
 * function that must exist when <code>xml_parse</code> is called
 * for <code>parser</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-set-external-entity-ref-handler.php
 */
function xml_set_external_entity_ref_handler($parser, callable $handler)
{
}

/**
 * Set up notation declaration handler
 *
 * @param resource $parser A reference to the XML parser to set up notation declaration handler function.
 * @param callable $handler <code>handler</code> is a string containing the name of a
 * function that must exist when <code>xml_parse</code> is called
 * for <code>parser</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-set-notation-decl-handler.php
 */
function xml_set_notation_decl_handler($parser, callable $handler)
{
}

/**
 * Use XML Parser within an object
 *
 * @param resource $parser A reference to the XML parser to use inside the object.
 * @param mixed $object The object where to use the XML parser.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-set-object.php
 */
function xml_set_object($parser, &$object)
{
}

/**
 * Set up processing instruction (PI) handler
 *
 * @param resource $parser A reference to the XML parser to set up processing instruction (PI) handler function.
 * @param callable $handler <code>handler</code> is a string containing the name of a
 * function that must exist when <code>xml_parse</code> is called
 * for <code>parser</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-set-processing-instruction-handler.php
 */
function xml_set_processing_instruction_handler($parser, callable $handler)
{
}

/**
 * Set up start namespace declaration handler
 *
 * @param resource $parser A reference to the XML parser.
 * @param callable $handler <code>handler</code> is a string containing the name of a
 * function that must exist when <code>xml_parse</code> is called
 * for <code>parser</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-set-start-namespace-decl-handler.php
 */
function xml_set_start_namespace_decl_handler($parser, callable $handler)
{
}

/**
 * Set up unparsed entity declaration handler
 *
 * @param resource $parser A reference to the XML parser to set up unparsed entity declaration handler function.
 * @param callable $handler <code>handler</code> is a string containing the name of a
 * function that must exist when <code>xml_parse</code> is called
 * for <code>parser</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.xml-set-unparsed-entity-decl-handler.php
 */
function xml_set_unparsed_entity_decl_handler($parser, callable $handler)
{
}
