<?php
// Start of extension: enchant
// - parsed on POSIX with PHP 7.0.29 (extension version 7.0.29)

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
 * @param resource $broker Broker resource
 *
 * @return array Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
 * @param resource $broker Broker resource
 * @param string $tag non-empty tag in the LOCALE format, ex: us_US, ch_DE, etc.
 *
 * @return bool Returns <code>TRUE</code> when the tag exist or <code>FALSE</code> when not.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-dict-exists.php
 */
function enchant_broker_dict_exists($broker, string $tag): bool
{
}

/**
 * Free the broker resource and its dictionnaries
 *
 * @param resource $broker Broker resource
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
 * @param resource $dict Dictionary resource.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
 * @param resource $broker Broker resource.
 * @param int $dict_type The type of the dictionaries, i.e. <code>ENCHANT_MYSPELL</code>
 * or <code>ENCHANT_ISPELL</code>.
 *
 * @return bool Returns the path of the dictionary directory on
 * success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.1, PHP 7, PECL enchant >= 1.0.1
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-get-dict-path.php
 */
function enchant_broker_get_dict_path($broker, int $dict_type): bool
{
}

/**
 * Returns the last error of the broker
 *
 * @param resource $broker Broker resource.
 *
 * @return string Return the msg string if an error was found or <code>FALSE</code>
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
 * @return resource Returns a broker resource on success or <code>FALSE</code>.
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
 * @param resource $broker Broker resource
 *
 * @return mixed Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
 * @param resource $broker Broker resource
 * @param string $tag A tag describing the locale, for example en_US, de_DE
 *
 * @return resource Returns a dictionary resource on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-request-dict.php
 */
function enchant_broker_request_dict($broker, string $tag)
{
}

/**
 * Creates a dictionary using a PWL file
 *
 * @param resource $broker Broker resource
 * @param string $filename Path to the PWL file.
 * If there is no such file, a new one will be created if possible.
 *
 * @return resource Returns a dictionary resource on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-request-pwl-dict.php
 */
function enchant_broker_request_pwl_dict($broker, string $filename)
{
}

/**
 * Set the directory path for a given backend
 *
 * @param resource $broker Broker resource.
 * @param int $dict_type The type of the dictionaries, i.e. <code>ENCHANT_MYSPELL</code>
 * or <code>ENCHANT_ISPELL</code>.
 * @param string $value The path of the dictionary directory.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.1, PHP 7, PECL enchant >= 1.0.1
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-set-dict-path.php
 */
function enchant_broker_set_dict_path($broker, int $dict_type, string $value): bool
{
}

/**
 * Declares a preference of dictionaries to use for the language
 *
 * @param resource $broker Broker resource
 * @param string $tag Language tag. The special "*" tag can be used as a language tag
 * to declare a default ordering for any language that does not
 * explicitly declare an ordering.
 * @param string $ordering Comma delimited list of provider names
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-broker-set-ordering.php
 */
function enchant_broker_set_ordering($broker, string $tag, string $ordering): bool
{
}

/**
 * Add a word to personal word list
 *
 * @param resource $dict Dictionary resource
 * @param string $word The word to add
 *
 * @return void Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-dict-add-to-personal.php
 */
function enchant_dict_add_to_personal($dict, string $word)
{
}

/**
 * Add 'word' to this spell-checking session
 *
 * @param resource $dict Dictionary resource
 * @param string $word The word to add
 *
 * @return void No value is returned.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-dict-add-to-session.php
 */
function enchant_dict_add_to_session($dict, string $word)
{
}

/**
 * Check whether a word is correctly spelled or not
 *
 * @param resource $dict Dictionary resource
 * @param string $word The word to check
 *
 * @return bool Returns <code>TRUE</code> if the word is spelled correctly, <code>FALSE</code> if not.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-dict-check.php
 */
function enchant_dict_check($dict, string $word): bool
{
}

/**
 * Describes an individual dictionary
 *
 * @param resource $dict Dictionary resource
 *
 * @return mixed Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
 * @param resource $dict Dictinaray resource
 *
 * @return string Returns the error message as string or <code>FALSE</code> if no error occurred.
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
 * @param resource $dict Dictionary resource
 * @param string $word The word to lookup
 *
 * @return bool Returns <code>TRUE</code> if the word exists or <code>FALSE</code>
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-dict-is-in-session.php
 */
function enchant_dict_is_in_session($dict, string $word): bool
{
}

/**
 * Check the word is correctly spelled and provide suggestions
 *
 * @param resource $dict Dictionary resource
 * @param string $word The word to check
 * @param array $suggestions If the word is not correctly spelled, this variable will
 * contain an array of suggestions.
 *
 * @return bool Returns <code>TRUE</code> if the word is correctly spelled or <code>FALSE</code>
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant:0.2.0-1.0.1
 *
 * @link http://www.php.net/manual/en/function.enchant-dict-quick-check.php
 */
function enchant_dict_quick_check($dict, string $word, array &$suggestions = null): bool
{
}

/**
 * Add a correction for a word
 *
 * @param resource $dict Dictionary resource
 * @param string $mis The work to fix
 * @param string $cor The correct word
 *
 * @return void Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-dict-store-replacement.php
 */
function enchant_dict_store_replacement($dict, string $mis, string $cor)
{
}

/**
 * Will return a list of values if any of those pre-conditions are not met
 *
 * @param resource $dict Dictionary resource
 * @param string $word Word to use for the suggestions.
 *
 * @return array Will returns an array of suggestions if the word is bad spelled.
 *
 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
 *
 * @link http://www.php.net/manual/en/function.enchant-dict-suggest.php
 */
function enchant_dict_suggest($dict, string $word): array
{
}
