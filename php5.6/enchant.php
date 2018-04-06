<?php
// Start of extension: enchant
// - parsed on POSIX with PHP 5.6.34 (extension version 1.1.0)

/**
 * Dictionary type for Ispell. Used with
 * <code>enchant_broker_get_dict_path</code> and
 * <code>enchant_broker_set_dict_path</code>.
 *
 * @link http://www.php.net/manual/en/enchant.constants.php#constant.enchant-ispell
 *
 * @var int
 */
const ENCHANT_ISPELL = 2;

/**
 * Dictionary type for MySpell. Used with
 * <code>enchant_broker_get_dict_path</code> and
 * <code>enchant_broker_set_dict_path</code>.
 *
 * @link http://www.php.net/manual/en/enchant.constants.php#constant.enchant-myspell
 *
 * @var int
 */
const ENCHANT_MYSPELL = 1;

/**
 * Enumerates the Enchant providers
 *
 * @param mixed $broker
 *
 * @return array
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-describe.php
 */
function enchant_broker_describe($broker): array
{
}

/**
 * Whether a dictionary exists or not. Using non-empty tag
 *
 * @param mixed $broker
 * @param mixed $tag
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-dict-exists.php
 */
function enchant_broker_dict_exists($broker, $tag)
{
}

/**
 * Free the broker resource and its dictionnaries
 *
 * @param mixed $broker
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-free.php
 */
function enchant_broker_free($broker)
{
}

/**
 * Free a dictionary resource
 *
 * @param mixed $dict
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-free-dict.php
 */
function enchant_broker_free_dict($dict)
{
}

/**
 * Get the directory path for a given backend
 *
 * @param mixed $broker
 * @param mixed $name
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.1, PHP 7, PECL enchant >= 1.0.1
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-get-dict-path.php
 */
function enchant_broker_get_dict_path($broker, $name)
{
}

/**
 * Returns the last error of the broker
 *
 * @param mixed $broker
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-get-error.php
 */
function enchant_broker_get_error($broker)
{
}

/**
 * Create a new broker object capable of requesting
 *
 * @return resource
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-init.php
 */
function enchant_broker_init()
{
}

/**
 * Returns a list of available dictionaries
 *
 * @param mixed $broker
 *
 * @return mixed
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 1.0.1
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-list-dicts.php
 */
function enchant_broker_list_dicts($broker)
{
}

/**
 * Create a new dictionary using a tag
 *
 * @param mixed $broker
 * @param mixed $tag
 *
 * @return resource
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-request-dict.php
 */
function enchant_broker_request_dict($broker, $tag)
{
}

/**
 * Creates a dictionary using a PWL file
 *
 * @param mixed $broker
 * @param mixed $filename
 *
 * @return resource
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-request-pwl-dict.php
 */
function enchant_broker_request_pwl_dict($broker, $filename)
{
}

/**
 * Set the directory path for a given backend
 *
 * @param mixed $broker
 * @param mixed $name
 * @param mixed $value
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.1, PHP 7, PECL enchant >= 1.0.1
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-set-dict-path.php
 */
function enchant_broker_set_dict_path($broker, $name, $value)
{
}

/**
 * Declares a preference of dictionaries to use for the language
 *
 * @param mixed $broker
 * @param mixed $tag
 * @param mixed $ordering
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-set-ordering.php
 */
function enchant_broker_set_ordering($broker, $tag, $ordering)
{
}

/**
 * Add a word to personal word list
 *
 * @param mixed $dict
 * @param mixed $word
 *
 * @return void
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-dict-add-to-personal.php
 */
function enchant_dict_add_to_personal($dict, $word)
{
}

/**
 * Add 'word' to this spell-checking session
 *
 * @param mixed $dict
 * @param mixed $word
 *
 * @return void
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-dict-add-to-session.php
 */
function enchant_dict_add_to_session($dict, $word)
{
}

/**
 * Check whether a word is correctly spelled or not
 *
 * @param mixed $dict
 * @param mixed $word
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-dict-check.php
 */
function enchant_dict_check($dict, $word)
{
}

/**
 * Describes an individual dictionary
 *
 * @param mixed $dict
 *
 * @return mixed
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-dict-describe.php
 */
function enchant_dict_describe($dict)
{
}

/**
 * Returns the last error of the current spelling-session
 *
 * @param mixed $dict
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-dict-get-error.php
 */
function enchant_dict_get_error($dict)
{
}

/**
 * Whether or not 'word' exists in this spelling-session
 *
 * @param mixed $dict
 * @param mixed $word
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-dict-is-in-session.php
 */
function enchant_dict_is_in_session($dict, $word)
{
}

/**
 * Check the word is correctly spelled and provide suggestions
 *
 * @param mixed $dict
 * @param mixed $word
 * @param mixed|null $suggestions
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant:0.2.0-1.0.1
 *
 * @link http://www.php.net/manual/en/function.enchant-dict-quick-check.php
 */
function enchant_dict_quick_check($dict, $word, &$suggestions = null)
{
}

/**
 * Add a correction for a word
 *
 * @param mixed $dict
 * @param mixed $mis
 * @param mixed $cor
 *
 * @return void
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-dict-store-replacement.php
 */
function enchant_dict_store_replacement($dict, $mis, $cor)
{
}

/**
 * Will return a list of values if any of those pre-conditions are not met
 *
 * @param mixed $dict
 * @param mixed $word
 *
 * @return array
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-dict-suggest.php
 */
function enchant_dict_suggest($dict, $word): array
{
}
