<?php
// Start of extension: yaml
// - parsed on POSIX with PHP 7.0.28 (extension version 2.0.2)

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
 * @param mixed $data
 * @param mixed|null $encoding
 * @param mixed|null $linebreak
 * @param array|null $callbacks
 *
 * @return string
 *
 * @since PECL yaml >= 0.5.0
 *
 * @link http://www.php.net/manual/en/function.yaml-emit.php
 */
function yaml_emit($data, $encoding = null, $linebreak = null, array $callbacks = null): string
{
}

/**
 * Send the YAML representation of a value to a file
 *
 * @param mixed $filename
 * @param mixed $data
 * @param mixed|null $encoding
 * @param mixed|null $linebreak
 * @param array|null $callbacks
 *
 * @return bool
 *
 * @since PECL yaml >= 0.5.0
 *
 * @link http://www.php.net/manual/en/function.yaml-emit-file.php
 */
function yaml_emit_file($filename, $data, $encoding = null, $linebreak = null, array $callbacks = null): bool
{
}

/**
 * Parse a YAML stream
 *
 * @param mixed $input
 * @param mixed|null $pos
 * @param mixed|null $ndocs
 * @param array|null $callbacks
 *
 * @return mixed
 *
 * @since PECL yaml >= 0.4.0
 *
 * @link http://www.php.net/manual/en/function.yaml-parse.php
 */
function yaml_parse($input, $pos = null, &$ndocs = null, array $callbacks = null)
{
}

/**
 * Parse a YAML stream from a file
 *
 * @param mixed $filename
 * @param mixed|null $pos
 * @param mixed|null $ndocs
 * @param array|null $callbacks
 *
 * @return mixed
 *
 * @since PECL yaml >= 0.4.0
 *
 * @link http://www.php.net/manual/en/function.yaml-parse-file.php
 */
function yaml_parse_file($filename, $pos = null, &$ndocs = null, array $callbacks = null)
{
}

/**
 * Parse a Yaml stream from a URL
 *
 * @param mixed $url
 * @param mixed|null $pos
 * @param mixed|null $ndocs
 * @param array|null $callbacks
 *
 * @return mixed
 *
 * @since PECL yaml >= 0.4.0
 *
 * @link http://www.php.net/manual/en/function.yaml-parse-url.php
 */
function yaml_parse_url($url, $pos = null, &$ndocs = null, array $callbacks = null)
{
}
