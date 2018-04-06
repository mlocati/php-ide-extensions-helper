<?php
// Start of extension: gettext
// - parsed on POSIX with PHP 5.6.34

/**
 * mixed $msgid
 */
function _($msgid)
{
}

/**
 * Specify the character encoding in which the messages from the DOMAIN message catalog will be returned
 *
 * mixed $domain
 * mixed $codeset
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bind-textdomain-codeset.php
 */
function bind_textdomain_codeset($domain, $codeset)
{
}

/**
 * Sets the path for a domain
 *
 * mixed $domain_name
 * mixed $dir
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bindtextdomain.php
 */
function bindtextdomain($domain_name, $dir)
{
}

/**
 * Overrides the domain for a single lookup
 *
 * mixed $domain_name
 * mixed $msgid
 * mixed $category
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dcgettext.php
 */
function dcgettext($domain_name, $msgid, $category)
{
}

/**
 * Plural version of dcgettext
 *
 * mixed $domain
 * mixed $msgid1
 * mixed $msgid2
 * mixed $count
 * mixed $category
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dcngettext.php
 */
function dcngettext($domain, $msgid1, $msgid2, $count, $category)
{
}

/**
 * Override the current domain
 *
 * mixed $domain_name
 * mixed $msgid
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dgettext.php
 */
function dgettext($domain_name, $msgid)
{
}

/**
 * Plural version of dgettext
 *
 * mixed $domain
 * mixed $msgid1
 * mixed $msgid2
 * mixed $count
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.dngettext.php
 */
function dngettext($domain, $msgid1, $msgid2, $count)
{
}

/**
 * Lookup a message in the current domain
 *
 * mixed $msgid
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gettext.php
 */
function gettext($msgid)
{
}

/**
 * Plural version of gettext
 *
 * mixed $msgid1
 * mixed $msgid2
 * mixed $count
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.ngettext.php
 */
function ngettext($msgid1, $msgid2, $count)
{
}

/**
 * Sets the default domain
 *
 * mixed $domain
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.textdomain.php
 */
function textdomain($domain)
{
}
