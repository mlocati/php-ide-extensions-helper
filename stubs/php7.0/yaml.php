<?php
// Start of extension: yaml
// - parsed on POSIX with PHP 7.0.29 (extension version 2.0.2)

/**
 * Let emitter choose linebreak character.
 *
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-any-break
 *
 * @var int
 */
const YAML_ANY_BREAK = 0;

/**
 * Let the emitter choose an encoding.
 *
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-any-encoding
 *
 * @var int
 */
const YAML_ANY_ENCODING = 0;

/**
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-any-scalar-style
 *
 * @var int
 */
const YAML_ANY_SCALAR_STYLE = 0;

/**
 * @var string
 */
const YAML_BINARY_TAG = 'tag:yaml.org,2002:binary';

/**
 * "tag:yaml.org,2002:bool"
 *
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-bool-tag
 *
 * @var string
 */
const YAML_BOOL_TAG = 'tag:yaml.org,2002:bool';

/**
 * Use <code>\r</code> as break character (Mac style).
 *
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-cr-break
 *
 * @var int
 */
const YAML_CR_BREAK = 1;

/**
 * Use <code>\r\n</code> as break character (DOS style).
 *
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-crln-break
 *
 * @var int
 */
const YAML_CRLN_BREAK = 3;

/**
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-double-quoted-scalar-style
 *
 * @var int
 */
const YAML_DOUBLE_QUOTED_SCALAR_STYLE = 3;

/**
 * "tag:yaml.org,2002:float"
 *
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-float-tag
 *
 * @var string
 */
const YAML_FLOAT_TAG = 'tag:yaml.org,2002:float';

/**
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-folded-scalar-style
 *
 * @var int
 */
const YAML_FOLDED_SCALAR_STYLE = 5;

/**
 * "tag:yaml.org,2002:int"
 *
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-int-tag
 *
 * @var string
 */
const YAML_INT_TAG = 'tag:yaml.org,2002:int';

/**
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-literal-scalar-style
 *
 * @var int
 */
const YAML_LITERAL_SCALAR_STYLE = 4;

/**
 * Use <code>\n</code> as break character (Unix style).
 *
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-ln-break
 *
 * @var int
 */
const YAML_LN_BREAK = 2;

/**
 * "tag:yaml.org,2002:map"
 *
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-map-tag
 *
 * @var string
 */
const YAML_MAP_TAG = 'tag:yaml.org,2002:map';

/**
 * @var string
 */
const YAML_MERGE_TAG = 'tag:yaml.org,2002:merge';

/**
 * "tag:yaml.org,2002:null"
 *
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-null-tag
 *
 * @var string
 */
const YAML_NULL_TAG = 'tag:yaml.org,2002:null';

/**
 * "!php/object"
 *
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-php-tag
 *
 * @var string
 */
const YAML_PHP_TAG = '!php/object';

/**
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-plain-scalar-style
 *
 * @var int
 */
const YAML_PLAIN_SCALAR_STYLE = 1;

/**
 * "tag:yaml.org,2002:seq"
 *
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-seq-tag
 *
 * @var string
 */
const YAML_SEQ_TAG = 'tag:yaml.org,2002:seq';

/**
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-single-quoted-scalar-style
 *
 * @var int
 */
const YAML_SINGLE_QUOTED_SCALAR_STYLE = 2;

/**
 * "tag:yaml.org,2002:str"
 *
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-str-tag
 *
 * @var string
 */
const YAML_STR_TAG = 'tag:yaml.org,2002:str';

/**
 * "tag:yaml.org,2002:timestamp"
 *
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-timestamp-tag
 *
 * @var string
 */
const YAML_TIMESTAMP_TAG = 'tag:yaml.org,2002:timestamp';

/**
 * Encode as UTF16BE.
 *
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-utf16be-encoding
 *
 * @var int
 */
const YAML_UTF16BE_ENCODING = 3;

/**
 * Encode as UTF16LE.
 *
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-utf16le-encoding
 *
 * @var int
 */
const YAML_UTF16LE_ENCODING = 2;

/**
 * Encode as UTF8.
 *
 * @link http://www.php.net/manual/en/yaml.constants.php#constant.yaml-utf8-encoding
 *
 * @var int
 */
const YAML_UTF8_ENCODING = 1;

/**
 * Returns the YAML representation of a value
 *
 * @param mixed $data The <code>data</code> being encoded. Can be any type except
 * a <code>resource</code>.
 * @param int|null $encoding Output character encoding chosen from
 * <code>YAML_ANY_ENCODING</code>,
 * <code>YAML_UTF8_ENCODING</code>,
 * <code>YAML_UTF16LE_ENCODING</code>,
 * <code>YAML_UTF16BE_ENCODING</code>.
 * @param int|null $linebreak Output linebreak style chosen from
 * <code>YAML_ANY_BREAK</code>,
 * <code>YAML_CR_BREAK</code>,
 * <code>YAML_LN_BREAK</code>,
 * <code>YAML_CRLN_BREAK</code>.
 * @param array|null $callbacks Content handlers for emitting YAML nodes. Associative <code>array</code>
 * of classname =&gt; <code>callable</code> mappings. See
 * emit callbacks for more
 * details.
 *
 * @return string Returns a YAML encoded <code>string</code> on success.
 *
 * @since PECL yaml >= 0.5.0
 *
 * @link http://www.php.net/manual/en/function.yaml-emit.php
 */
function yaml_emit($data, int $encoding = YAML_ANY_ENCODING, int $linebreak = YAML_ANY_BREAK, array $callbacks = null): string
{
}

/**
 * Send the YAML representation of a value to a file
 *
 * @param string $filename Path to the file.
 * @param mixed $data The <code>data</code> being encoded. Can be any type except
 * a <code>resource</code>.
 * @param int|null $encoding Output character encoding chosen from
 * <code>YAML_ANY_ENCODING</code>,
 * <code>YAML_UTF8_ENCODING</code>,
 * <code>YAML_UTF16LE_ENCODING</code>,
 * <code>YAML_UTF16BE_ENCODING</code>.
 * @param int|null $linebreak Output linebreak style chosen from
 * <code>YAML_ANY_BREAK</code>,
 * <code>YAML_CR_BREAK</code>,
 * <code>YAML_LN_BREAK</code>,
 * <code>YAML_CRLN_BREAK</code>.
 * @param array|null $callbacks Content handlers for emitting YAML nodes. Associative <code>array</code>
 * of classname =&gt; <code>callable</code> mappings. See
 * emit callbacks for more
 * details.
 *
 * @return bool Returns <code>TRUE</code> on success.
 *
 * @since PECL yaml >= 0.5.0
 *
 * @link http://www.php.net/manual/en/function.yaml-emit-file.php
 */
function yaml_emit_file(string $filename, $data, int $encoding = YAML_ANY_ENCODING, int $linebreak = YAML_ANY_BREAK, array $callbacks = null): bool
{
}

/**
 * Parse a YAML stream
 *
 * @param string $input The <code>string</code> to parse as a YAML document stream.
 * @param int|null $pos Document to extract from stream (<code>-1</code> for all
 * documents, <code>0</code> for first document, ...).
 * @param int $ndocs If <code>ndocs</code> is provided, then it is filled with the
 * number of documents found in stream.
 * @param array|null $callbacks Content handlers for YAML nodes. Associative <code>array</code> of YAML
 * tag =&gt; <code>callable</code> mappings. See
 * parse callbacks for more
 * details.
 *
 * @return mixed Returns the value encoded in <code>input</code> in appropriate
 * PHP type or <code>FALSE</code> on failure. If <code>pos</code> is <code>-1</code> an
 * <code>array</code> will be returned with one entry for each document found
 * in the stream.
 *
 * @since PECL yaml >= 0.4.0
 *
 * @link http://www.php.net/manual/en/function.yaml-parse.php
 */
function yaml_parse(string $input, int $pos = 0, int &$ndocs = null, array $callbacks = null)
{
}

/**
 * Parse a YAML stream from a file
 *
 * @param string $filename Path to the file.
 * @param int|null $pos Document to extract from stream (<code>-1</code> for all
 * documents, <code>0</code> for first document, ...).
 * @param int $ndocs If <code>ndocs</code> is provided, then it is filled with the
 * number of documents found in stream.
 * @param array|null $callbacks Content handlers for YAML nodes. Associative <code>array</code> of YAML
 * tag =&gt; <code>callable</code> mappings. See
 * parse callbacks for more
 * details.
 *
 * @return mixed Returns the value encoded in <code>input</code> in appropriate
 * PHP type or <code>FALSE</code> on failure. If <code>pos</code> is <code>-1</code> an
 * <code>array</code> will be returned with one entry for each document found
 * in the stream.
 *
 * @since PECL yaml >= 0.4.0
 *
 * @link http://www.php.net/manual/en/function.yaml-parse-file.php
 */
function yaml_parse_file(string $filename, int $pos = 0, int &$ndocs = null, array $callbacks = null)
{
}

/**
 * Parse a Yaml stream from a URL
 *
 * @param string $url <code>url</code> should be of the form "scheme://...". PHP
 * will search for a protocol handler (also known as a wrapper) for that
 * scheme. If no wrappers for that protocol are registered, PHP will emit
 * a notice to help you track potential problems in your script and then
 * continue as though filename specifies a regular file.
 * @param int|null $pos Document to extract from stream (<code>-1</code> for all
 * documents, <code>0</code> for first document, ...).
 * @param int $ndocs If <code>ndocs</code> is provided, then it is filled with the
 * number of documents found in stream.
 * @param array|null $callbacks Content handlers for YAML nodes. Associative <code>array</code> of YAML
 * tag =&gt; <code>callable</code> mappings. See
 * parse callbacks for more
 *
 * @return mixed Returns the value encoded in <code>input</code> in appropriate
 * PHP type or <code>FALSE</code> on failure. If <code>pos</code> is
 * <code>-1</code> an <code>array</code> will be returned with one entry
 * for each document found in the stream.
 *
 * @since PECL yaml >= 0.4.0
 *
 * @link http://www.php.net/manual/en/function.yaml-parse-url.php
 */
function yaml_parse_url(string $url, int $pos = 0, int &$ndocs = null, array $callbacks = null)
{
}
