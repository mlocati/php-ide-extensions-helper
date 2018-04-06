<?php
// Start of extension: gettext
// - parsed on POSIX with PHP 7.1.15 (extension version 7.1.15)

/**
 * @param mixed $msgid
 */
function _($msgid)
{
}

/**
 * Specify the character encoding in which the messages from the DOMAIN message catalog will be returned
 *
 * @param mixed $domain
 * @param mixed $codeset
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bind-textdomain-codeset.php
 */
function bind_textdomain_codeset($domain, $codeset): string
{
}

/**
 * Sets the path for a domain
 *
 * @param mixed $domain_name
 * @param mixed $dir
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bindtextdomain.php
 */
function bindtextdomain($domain_name, $dir): string
{
}

/**
 * Overrides the domain for a single lookup
 *
 * @param mixed $domain_name
 * @param mixed $msgid
 * @param mixed $category
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dcgettext.php
 */
function dcgettext($domain_name, $msgid, $category): string
{
}

/**
 * Plural version of dcgettext
 *
 * @param mixed $domain
 * @param mixed $msgid1
 * @param mixed $msgid2
 * @param mixed $count
 * @param mixed $category
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dcngettext.php
 */
function dcngettext($domain, $msgid1, $msgid2, $count, $category): string
{
}

/**
 * Override the current domain
 *
 * @param mixed $domain_name
 * @param mixed $msgid
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dgettext.php
 */
function dgettext($domain_name, $msgid): string
{
}

/**
 * Plural version of dgettext
 *
 * @param mixed $domain
 * @param mixed $msgid1
 * @param mixed $msgid2
 * @param mixed $count
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dngettext.php
 */
function dngettext($domain, $msgid1, $msgid2, $count): string
{
}

/**
 * Lookup a message in the current domain
 *
 * @param mixed $msgid
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gettext.php
 */
function gettext($msgid): string
{
}

/**
 * Plural version of gettext
 *
 * @param mixed $msgid1
 * @param mixed $msgid2
 * @param mixed $count
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ngettext.php
 */
function ngettext($msgid1, $msgid2, $count): string
{
}

/**
 * Sets the default domain
 *
 * @param mixed $domain
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.textdomain.php
 */
function textdomain($domain): string
{
}
