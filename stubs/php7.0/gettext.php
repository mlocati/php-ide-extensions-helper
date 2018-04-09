<?php
// Start of extension: gettext
// - parsed on POSIX with PHP 7.0.28 (extension version 7.0.28)

/**
 * @param mixed $msgid
 */
function _($msgid)
{
}

/**
 * Specify the character encoding in which the messages from the DOMAIN message catalog will be returned
 *
 * @param string $domain The domain
 * @param string $codeset The code set
 *
 * @return string A <code>string</code> on success.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bind-textdomain-codeset.php
 */
function bind_textdomain_codeset(string $domain, string $codeset): string
{
}

/**
 * Sets the path for a domain
 *
 * @param string $domain The domain
 * @param string $directory The directory path
 *
 * @return string The full pathname for the <code>domain</code> currently being set.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bindtextdomain.php
 */
function bindtextdomain(string $domain, string $directory): string
{
}

/**
 * Overrides the domain for a single lookup
 *
 * @param string $domain The domain
 * @param string $message The message
 * @param int $category The category
 *
 * @return string A <code>string</code> on success.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dcgettext.php
 */
function dcgettext(string $domain, string $message, int $category): string
{
}

/**
 * Plural version of dcgettext
 *
 * @param string $domain The domain
 * @param string $msgid1
 * @param string $msgid2
 * @param int $n
 * @param int $category
 *
 * @return string A <code>string</code> on success.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dcngettext.php
 */
function dcngettext(string $domain, string $msgid1, string $msgid2, int $n, int $category): string
{
}

/**
 * Override the current domain
 *
 * @param string $domain The domain
 * @param string $message The message
 *
 * @return string A <code>string</code> on success.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dgettext.php
 */
function dgettext(string $domain, string $message): string
{
}

/**
 * Plural version of dgettext
 *
 * @param string $domain The domain
 * @param string $msgid1
 * @param string $msgid2
 * @param int $n
 *
 * @return string A <code>string</code> on success.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dngettext.php
 */
function dngettext(string $domain, string $msgid1, string $msgid2, int $n): string
{
}

/**
 * Lookup a message in the current domain
 *
 * @param string $message The message being translated.
 *
 * @return string Returns a translated <code>string</code> if one is found in the
 * translation table, or the submitted message if not found.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gettext.php
 */
function gettext(string $message): string
{
}

/**
 * Plural version of gettext
 *
 * @param string $msgid1 The singular message ID.
 * @param string $msgid2 The plural message ID.
 * @param int $n The number (e.g. item count) to determine the translation for the
 * respective grammatical number.
 *
 * @return string Returns correct plural form of message identified by
 * <code>msgid1</code> and <code>msgid2</code>
 * for count <code>n</code>.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ngettext.php
 */
function ngettext(string $msgid1, string $msgid2, int $n): string
{
}

/**
 * Sets the default domain
 *
 * @param string|null $text_domain The new message domain, or <code>NULL</code> to get the current setting without
 * changing it
 *
 * @return string If successful, this function returns the current message
 * domain, after possibly changing it.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.textdomain.php
 */
function textdomain(string $text_domain = null): string
{
}
