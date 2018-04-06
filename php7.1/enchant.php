<?php
// Start of extension: enchant
// - parsed on POSIX with PHP 7.1.15 (extension version 7.1.15)

/**
 * Dictionary type for Ispell. Used with
 *       <code>enchant_broker_get_dict_path</code> and
 *       <code>enchant_broker_set_dict_path</code>.
 *
 * @link http://www.php.net/manual/en/enchant.constants.php#constant.enchant-ispell
 *
 * @var int
 */
const ENCHANT_ISPELL = 2;

/**
 * Dictionary type for MySpell. Used with
 *       <code>enchant_broker_get_dict_path</code> and
 *       <code>enchant_broker_set_dict_path</code>.
 *
 * @link http://www.php.net/manual/en/enchant.constants.php#constant.enchant-myspell
 *
 * @var int
 */
const ENCHANT_MYSPELL = 1;

/**
 * Enumerates the Enchant providers
 *
 * mixed $broker
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
 * mixed $broker
 * mixed $tag
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-dict-exists.php
 */
function enchant_broker_dict_exists($broker, $tag): bool
{
}

/**
 * Free the broker resource and its dictionnaries
 *
 * mixed $broker
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-free.php
 */
function enchant_broker_free($broker): bool
{
}

/**
 * Free a dictionary resource
 *
 * mixed $dict
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-free-dict.php
 */
function enchant_broker_free_dict($dict): bool
{
}

/**
 * Get the directory path for a given backend
 *
 * mixed $broker
 * mixed $name
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.1, PHP 7, PECL enchant >= 1.0.1
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-get-dict-path.php
 */
function enchant_broker_get_dict_path($broker, $name): bool
{
}

/**
 * Returns the last error of the broker
 *
 * mixed $broker
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-get-error.php
 */
function enchant_broker_get_error($broker): string
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
 * mixed $broker
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
 * mixed $broker
 * mixed $tag
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
 * mixed $broker
 * mixed $filename
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
 * mixed $broker
 * mixed $name
 * mixed $value
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.1, PHP 7, PECL enchant >= 1.0.1
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-set-dict-path.php
 */
function enchant_broker_set_dict_path($broker, $name, $value): bool
{
}

/**
 * Declares a preference of dictionaries to use for the language
 *
 * mixed $broker
 * mixed $tag
 * mixed $ordering
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-set-ordering.php
 */
function enchant_broker_set_ordering($broker, $tag, $ordering): bool
{
}

/**
 * Add a word to personal word list
 *
 * mixed $dict
 * mixed $word
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
 * mixed $dict
 * mixed $word
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
 * mixed $dict
 * mixed $word
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-dict-check.php
 */
function enchant_dict_check($dict, $word): bool
{
}

/**
 * Describes an individual dictionary
 *
 * mixed $dict
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
 * mixed $dict
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-dict-get-error.php
 */
function enchant_dict_get_error($dict): string
{
}

/**
 * Whether or not 'word' exists in this spelling-session
 *
 * mixed $dict
 * mixed $word
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-dict-is-in-session.php
 */
function enchant_dict_is_in_session($dict, $word): bool
{
}

/**
 * Check the word is correctly spelled and provide suggestions
 *
 * mixed $dict
 * mixed $word
 * mixed|null $suggestions
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant:0.2.0-1.0.1
 *
 * @link http://www.php.net/manual/en/function.enchant-dict-quick-check.php
 */
function enchant_dict_quick_check($dict, $word, &$suggestions = null): bool
{
}

/**
 * Add a correction for a word
 *
 * mixed $dict
 * mixed $mis
 * mixed $cor
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
 * mixed $dict
 * mixed $word
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
