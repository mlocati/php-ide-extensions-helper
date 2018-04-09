<?php
// Start of extension: pspell
// - parsed on POSIX with PHP 5.6.34

/**
 * @link http://www.php.net/manual/en/pspell.constants.php#constant.pspell-bad-spellers
 *
 * @var int
 */
const PSPELL_BAD_SPELLERS = 3;

/**
 * @link http://www.php.net/manual/en/pspell.constants.php#constant.pspell-fast
 *
 * @var int
 */
const PSPELL_FAST = 1;

/**
 * @link http://www.php.net/manual/en/pspell.constants.php#constant.pspell-normal
 *
 * @var int
 */
const PSPELL_NORMAL = 2;

/**
 * @link http://www.php.net/manual/en/pspell.constants.php#constant.pspell-run-together
 *
 * @var int
 */
const PSPELL_RUN_TOGETHER = 8;

/**
 * Add the word to a personal wordlist
 *
 * @param int $dictionary_link
 * @param string $word The added word.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-add-to-personal.php
 */
function pspell_add_to_personal($dictionary_link, $word)
{
}

/**
 * Add the word to the wordlist in the current session
 *
 * @param int $dictionary_link
 * @param string $word The added word.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-add-to-session.php
 */
function pspell_add_to_session($dictionary_link, $word)
{
}

/**
 * Check a word
 *
 * @param int $dictionary_link
 * @param string $word The tested word.
 *
 * @return bool Returns <code>TRUE</code> if the spelling is correct, <code>FALSE</code> if not.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-check.php
 */
function pspell_check($dictionary_link, $word)
{
}

/**
 * Clear the current session
 *
 * @param int $dictionary_link
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-clear-session.php
 */
function pspell_clear_session($dictionary_link)
{
}

/**
 * Create a config used to open a dictionary
 *
 * @param string $language The language parameter is the language code which consists of the
 * two letter ISO 639 language code and an optional two letter ISO
 * 3166 country code after a dash or underscore.
 * @param string $spelling The spelling parameter is the requested spelling for languages
 * with more than one spelling such as English. Known values are
 * 'american', 'british', and 'canadian'.
 * @param string $jargon The jargon parameter contains extra information to distinguish
 * two different words lists that have the same language and
 * spelling parameters.
 * @param string $encoding The encoding parameter is the encoding that words are expected to
 * be in. Valid values are 'utf-8', 'iso8859-*', 'koi8-r',
 * 'viscii', 'cp1252', 'machine unsigned 16', 'machine unsigned
 * 32'. This parameter is largely untested, so be careful when
 * using.
 *
 * @return int Retuns a pspell config identifier, or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-config-create.php
 */
function pspell_config_create($language, $spelling = null, $jargon = null, $encoding = null)
{
}

/**
 * Location of language data files
 *
 * @param int $conf
 * @param string $directory
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-config-data-dir.php
 */
function pspell_config_data_dir($conf, $directory)
{
}

/**
 * Location of the main word list
 *
 * @param int $conf
 * @param string $directory
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-config-dict-dir.php
 */
function pspell_config_dict_dir($conf, $directory)
{
}

/**
 * Ignore words less than N characters long
 *
 * @param int $dictionary_link
 * @param int $n Words less than <code>n</code> characters will be skipped.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-config-ignore.php
 */
function pspell_config_ignore($dictionary_link, $n)
{
}

/**
 * Change the mode number of suggestions returned
 *
 * @param int $dictionary_link
 * @param int $mode The mode parameter is the mode in which spellchecker will work.
 * There are several modes available:
 * <ul>
 * <code>PSPELL_FAST</code> - Fast mode (least number of
 * suggestions)
 * <code>PSPELL_NORMAL</code> - Normal mode (more suggestions)
 * <code>PSPELL_BAD_SPELLERS</code> - Slow mode (a lot of
 * suggestions)
 * </ul>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-config-mode.php
 */
function pspell_config_mode($dictionary_link, $mode)
{
}

/**
 * Set a file that contains personal wordlist
 *
 * @param int $dictionary_link
 * @param string $file The personal wordlist. If the file does not exist, it will be created.
 * The file should be writable by whoever PHP runs as (e.g. nobody).
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-config-personal.php
 */
function pspell_config_personal($dictionary_link, $file)
{
}

/**
 * Set a file that contains replacement pairs
 *
 * @param int $dictionary_link
 * @param string $file The file should be writable by whoever PHP runs as (e.g. nobody).
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-config-repl.php
 */
function pspell_config_repl($dictionary_link, $file)
{
}

/**
 * Consider run-together words as valid compounds
 *
 * @param int $dictionary_link
 * @param bool $flag <code>TRUE</code> if run-together words should be treated as legal compounds,
 * <code>FALSE</code> otherwise.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-config-runtogether.php
 */
function pspell_config_runtogether($dictionary_link, $flag)
{
}

/**
 * Determine whether to save a replacement pairs list
 * along with the wordlist
 *
 * @param int $dictionary_link
 * @param bool $flag <code>TRUE</code> if replacement pairs should be saved, <code>FALSE</code> otherwise.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-config-save-repl.php
 */
function pspell_config_save_repl($dictionary_link, $flag)
{
}

/**
 * Load a new dictionary
 *
 * @param string $language The language parameter is the language code which consists of the
 * two letter ISO 639 language code and an optional two letter ISO
 * 3166 country code after a dash or underscore.
 * @param string $spelling The spelling parameter is the requested spelling for languages
 * with more than one spelling such as English. Known values are
 * 'american', 'british', and 'canadian'.
 * @param string $jargon The jargon parameter contains extra information to distinguish
 * two different words lists that have the same language and
 * spelling parameters.
 * @param string $encoding The encoding parameter is the encoding that words are expected to
 * be in. Valid values are 'utf-8', 'iso8859-*', 'koi8-r',
 * 'viscii', 'cp1252', 'machine unsigned 16', 'machine unsigned
 * 32'. This parameter is largely untested, so be careful when
 * using.
 * @param int|null $mode The mode parameter is the mode in which spellchecker will work.
 * There are several modes available:
 * <ul>
 * <code>PSPELL_FAST</code> - Fast mode (least number of
 * suggestions)
 * <code>PSPELL_NORMAL</code> - Normal mode (more suggestions)
 * <code>PSPELL_BAD_SPELLERS</code> - Slow mode (a lot of
 * suggestions)
 * <code>PSPELL_RUN_TOGETHER</code> - Consider run-together words
 * as legal compounds. That is, "thecat" will be a legal compound,
 * although there should be a space between the two words. Changing this
 * setting only affects the results returned by
 * <code>pspell_check</code>; <code>pspell_suggest</code>
 * will still return suggestions.
 * </ul>
 * Mode is a bitmask constructed from different constants listed above.
 * However, <code>PSPELL_FAST</code>,
 * <code>PSPELL_NORMAL</code> and
 * <code>PSPELL_BAD_SPELLERS</code> are mutually exclusive, so you
 * should select only one of them.
 *
 * @return int Returns the dictionary link identifier on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-new.php
 */
function pspell_new($language, $spelling = null, $jargon = null, $encoding = null, $mode = 0)
{
}

/**
 * Load a new dictionary with settings based on a given config
 *
 * @param int $config The <code>config</code> parameter is the one returned by
 * <code>pspell_config_create</code> when the config was created.
 *
 * @return int Returns a dictionary link identifier on success.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-new-config.php
 */
function pspell_new_config($config)
{
}

/**
 * Load a new dictionary with personal wordlist
 *
 * @param string $personal The file where words added to the personal list will be stored.
 * It should be an absolute filename beginning with '/' because otherwise
 * it will be relative to $HOME, which is "/root" for most systems, and
 * is probably not what you want.
 * @param string $language The language code which consists of the two letter ISO 639 language
 * code and an optional two letter ISO 3166 country code after a dash
 * or underscore.
 * @param string $spelling The requested spelling for languages with more than one spelling such
 * as English. Known values are 'american', 'british', and 'canadian'.
 * @param string $jargon Extra information to distinguish two different words lists that have
 * the same language and spelling parameters.
 * @param string $encoding The encoding that words are expected to be in. Valid values are
 * <code>utf-8</code>, <code>iso8859-*</code>,
 * <code>koi8-r</code>, <code>viscii</code>,
 * <code>cp1252</code>, <code>machine unsigned 16</code>,
 * <code>machine unsigned 32</code>.
 * @param int|null $mode The mode in which spellchecker will work. There are several modes available:
 * <ul>
 * <code>PSPELL_FAST</code> - Fast mode (least number of
 * suggestions)
 * <code>PSPELL_NORMAL</code> - Normal mode (more suggestions)
 * <code>PSPELL_BAD_SPELLERS</code> - Slow mode (a lot of
 * suggestions)
 * <code>PSPELL_RUN_TOGETHER</code> - Consider run-together words
 * as legal compounds. That is, "thecat" will be a legal compound,
 * although there should be a space between the two words. Changing this
 * setting only affects the results returned by
 * <code>pspell_check</code>; <code>pspell_suggest</code>
 * will still return suggestions.
 * </ul>
 * Mode is a bitmask constructed from different constants listed above.
 * However, <code>PSPELL_FAST</code>,
 * <code>PSPELL_NORMAL</code> and
 * <code>PSPELL_BAD_SPELLERS</code> are mutually exclusive, so you
 * should select only one of them.
 *
 * @return int Returns the dictionary link identifier for use in other pspell functions.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-new-personal.php
 */
function pspell_new_personal($personal, $language, $spelling = null, $jargon = null, $encoding = null, $mode = 0)
{
}

/**
 * Save the personal wordlist to a file
 *
 * @param int $dictionary_link A dictionary link identifier opened with
 * <code>pspell_new_personal</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-save-wordlist.php
 */
function pspell_save_wordlist($dictionary_link)
{
}

/**
 * Store a replacement pair for a word
 *
 * @param int $dictionary_link A dictionary link identifier, opened with
 * <code>pspell_new_personal</code>
 * @param string $misspelled The misspelled word.
 * @param string $correct The fixed spelling for the <code>misspelled</code> word.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-store-replacement.php
 */
function pspell_store_replacement($dictionary_link, $misspelled, $correct)
{
}

/**
 * Suggest spellings of a word
 *
 * @param int $dictionary_link
 * @param string $word The tested word.
 *
 * @return array Returns an array of possible spellings.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-suggest.php
 */
function pspell_suggest($dictionary_link, $word)
{
}
