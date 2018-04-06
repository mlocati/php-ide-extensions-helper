<?php
// Start of extension: pspell
// - parsed on POSIX with PHP 7.1.15 (extension version 7.1.15)

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
 * @param mixed $pspell
 * @param mixed $word
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-add-to-personal.php
 */
function pspell_add_to_personal($pspell, $word): bool
{
}

/**
 * Add the word to the wordlist in the current session
 *
 * @param mixed $pspell
 * @param mixed $word
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-add-to-session.php
 */
function pspell_add_to_session($pspell, $word): bool
{
}

/**
 * Check a word
 *
 * @param mixed $pspell
 * @param mixed $word
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-check.php
 */
function pspell_check($pspell, $word): bool
{
}

/**
 * Clear the current session
 *
 * @param mixed $pspell
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-clear-session.php
 */
function pspell_clear_session($pspell): bool
{
}

/**
 * Create a config used to open a dictionary
 *
 * @param mixed $language
 * @param mixed|null $spelling
 * @param mixed|null $jargon
 * @param mixed|null $encoding
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-config-create.php
 */
function pspell_config_create($language, $spelling = null, $jargon = null, $encoding = null): int
{
}

/**
 * Location of language data files
 *
 * @param mixed $conf
 * @param mixed $directory
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-config-data-dir.php
 */
function pspell_config_data_dir($conf, $directory): bool
{
}

/**
 * Location of the main word list
 *
 * @param mixed $conf
 * @param mixed $directory
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-config-dict-dir.php
 */
function pspell_config_dict_dir($conf, $directory): bool
{
}

/**
 * Ignore words less than N characters long
 *
 * @param mixed $conf
 * @param mixed $ignore
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-config-ignore.php
 */
function pspell_config_ignore($conf, $ignore): bool
{
}

/**
 * Change the mode number of suggestions returned
 *
 * @param mixed $conf
 * @param mixed $mode
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-config-mode.php
 */
function pspell_config_mode($conf, $mode): bool
{
}

/**
 * Set a file that contains personal wordlist
 *
 * @param mixed $conf
 * @param mixed $personal
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-config-personal.php
 */
function pspell_config_personal($conf, $personal): bool
{
}

/**
 * Set a file that contains replacement pairs
 *
 * @param mixed $conf
 * @param mixed $repl
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-config-repl.php
 */
function pspell_config_repl($conf, $repl): bool
{
}

/**
 * Consider run-together words as valid compounds
 *
 * @param mixed $conf
 * @param mixed $runtogether
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-config-runtogether.php
 */
function pspell_config_runtogether($conf, $runtogether): bool
{
}

/**
 * Determine whether to save a replacement pairs list
 *   along with the wordlist
 *
 * @param mixed $conf
 * @param mixed $save
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-config-save-repl.php
 */
function pspell_config_save_repl($conf, $save): bool
{
}

/**
 * Load a new dictionary
 *
 * @param mixed $language
 * @param mixed|null $spelling
 * @param mixed|null $jargon
 * @param mixed|null $encoding
 * @param mixed|null $mode
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-new.php
 */
function pspell_new($language, $spelling = null, $jargon = null, $encoding = null, $mode = null): int
{
}

/**
 * Load a new dictionary with settings based on a given config
 *
 * @param mixed $config
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-new-config.php
 */
function pspell_new_config($config): int
{
}

/**
 * Load a new dictionary with personal wordlist
 *
 * @param mixed $personal
 * @param mixed $language
 * @param mixed|null $spelling
 * @param mixed|null $jargon
 * @param mixed|null $encoding
 * @param mixed|null $mode
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-new-personal.php
 */
function pspell_new_personal($personal, $language, $spelling = null, $jargon = null, $encoding = null, $mode = null): int
{
}

/**
 * Save the personal wordlist to a file
 *
 * @param mixed $pspell
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-save-wordlist.php
 */
function pspell_save_wordlist($pspell): bool
{
}

/**
 * Store a replacement pair for a word
 *
 * @param mixed $pspell
 * @param mixed $misspell
 * @param mixed $correct
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-store-replacement.php
 */
function pspell_store_replacement($pspell, $misspell, $correct): bool
{
}

/**
 * Suggest spellings of a word
 *
 * @param mixed $pspell
 * @param mixed $word
 *
 * @return array
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.pspell-suggest.php
 */
function pspell_suggest($pspell, $word): array
{
}
