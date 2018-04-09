<?php
// Start of extension: calendar
// - parsed on POSIX with PHP 5.6.34
// - parsed on Windows with PHP 5.6.34

/**
 * For <code>jddayofweek</code>: the day of the week as
 * <code>integer</code>, where <code>0</code> means Sunday and
 * <code>6</code> means Saturday.
 *
 * @link http://www.php.net/manual/en/calendar.constants.php#constant.cal-dow-dayno
 *
 * @var int
 */
const CAL_DOW_DAYNO = 0;

/**
 * For <code>jddayofweek</code>: the English name of the day of the
 * week.
 *
 * @link http://www.php.net/manual/en/calendar.constants.php#constant.cal-dow-long
 *
 * @var int
 */
const CAL_DOW_LONG = 1;

/**
 * For <code>jddayofweek</code>: the abbreviated English name of the
 * day of the week.
 *
 * @link http://www.php.net/manual/en/calendar.constants.php#constant.cal-dow-short
 *
 * @var int
 */
const CAL_DOW_SHORT = 2;

/**
 * For <code>easter_days</code>: calculate Easter according to the
 * proleptic Gregorian calendar.
 *
 * @link http://www.php.net/manual/en/calendar.constants.php#constant.cal-easter-always-gregorian
 *
 * @var int
 */
const CAL_EASTER_ALWAYS_GREGORIAN = 2;

/**
 * For <code>easter_days</code>: calculate Easter according to the
 * Julian calendar.
 *
 * @link http://www.php.net/manual/en/calendar.constants.php#constant.cal-easter-always-julian
 *
 * @var int
 */
const CAL_EASTER_ALWAYS_JULIAN = 3;

/**
 * For <code>easter_days</code>: calculate Easter for years before
 * 1753 according to the Julian calendar, and for later years according to the
 * Gregorian calendar.
 *
 * @link http://www.php.net/manual/en/calendar.constants.php#constant.cal-easter-default
 *
 * @var int
 */
const CAL_EASTER_DEFAULT = 0;

/**
 * For <code>easter_days</code>: calculate Easter for years before
 * 1583 according to the Julian calendar, and for later years according to the
 * Gregorian calendar.
 *
 * @link http://www.php.net/manual/en/calendar.constants.php#constant.cal-easter-roman
 *
 * @var int
 */
const CAL_EASTER_ROMAN = 1;

/**
 * For <code>cal_days_in_month</code>,
 * <code>cal_from_jd</code>, <code>cal_info</code> and
 * <code>cal_to_jd</code>: use the French Repuclican calendar.
 *
 * @link http://www.php.net/manual/en/calendar.constants.php#constant.cal-french
 *
 * @var int
 */
const CAL_FRENCH = 3;

/**
 * For <code>cal_days_in_month</code>,
 * <code>cal_from_jd</code>, <code>cal_info</code> and
 * <code>cal_to_jd</code>: use the proleptic Gregorian calendar.
 *
 * @link http://www.php.net/manual/en/calendar.constants.php#constant.cal-gregorian
 *
 * @var int
 */
const CAL_GREGORIAN = 0;

/**
 * For <code>cal_days_in_month</code>,
 * <code>cal_from_jd</code>, <code>cal_info</code> and
 * <code>cal_to_jd</code>: use the Jewish calendar.
 *
 * @link http://www.php.net/manual/en/calendar.constants.php#constant.cal-jewish
 *
 * @var int
 */
const CAL_JEWISH = 2;

/**
 * For <code>jdtojewish</code>: adds the word alafim as thousands
 * separator to the year number.
 *
 * @link http://www.php.net/manual/en/calendar.constants.php#constant.cal-jewish-add-alafim
 *
 * @var int
 */
const CAL_JEWISH_ADD_ALAFIM = 4;

/**
 * For <code>jdtojewish</code>: adds a geresh symbol (which resembles
 * a single-quote mark) as thousands separator to the year number.
 *
 * @link http://www.php.net/manual/en/calendar.constants.php#constant.cal-jewish-add-alafim-geresh
 *
 * @var int
 */
const CAL_JEWISH_ADD_ALAFIM_GERESH = 2;

/**
 * For <code>jdtojewish</code>: add a gershayim symbol (which
 * resembles a double-quote mark) before the final letter of the day and year numbers.
 *
 * @link http://www.php.net/manual/en/calendar.constants.php#constant.cal-jewish-add-gereshayim
 *
 * @var int
 */
const CAL_JEWISH_ADD_GERESHAYIM = 8;

/**
 * For <code>cal_days_in_month</code>,
 * <code>cal_from_jd</code>, <code>cal_info</code> and
 * <code>cal_to_jd</code>: use the Julian calendar.
 *
 * @link http://www.php.net/manual/en/calendar.constants.php#constant.cal-julian
 *
 * @var int
 */
const CAL_JULIAN = 1;

/**
 * For <code>jdmonthname</code>: the French Republican month name.
 *
 * @link http://www.php.net/manual/en/calendar.constants.php#constant.cal-month-french
 *
 * @var int
 */
const CAL_MONTH_FRENCH = 5;

/**
 * For <code>jdmonthname</code>: the Gregorian month name.
 *
 * @link http://www.php.net/manual/en/calendar.constants.php#constant.cal-month-gregorian-long
 *
 * @var int
 */
const CAL_MONTH_GREGORIAN_LONG = 1;

/**
 * For <code>jdmonthname</code>: the abbreviated Gregorian month name.
 *
 * @link http://www.php.net/manual/en/calendar.constants.php#constant.cal-month-gregorian-short
 *
 * @var int
 */
const CAL_MONTH_GREGORIAN_SHORT = 0;

/**
 * For <code>jdmonthname</code>: the Jewish month name.
 *
 * @link http://www.php.net/manual/en/calendar.constants.php#constant.cal-month-jewish
 *
 * @var int
 */
const CAL_MONTH_JEWISH = 4;

/**
 * For <code>jdmonthname</code>: the Julian month name.
 *
 * @link http://www.php.net/manual/en/calendar.constants.php#constant.cal-month-julian-long
 *
 * @var int
 */
const CAL_MONTH_JULIAN_LONG = 3;

/**
 * For <code>jdmonthname</code>: the abbreviated Julian month name.
 *
 * @link http://www.php.net/manual/en/calendar.constants.php#constant.cal-month-julian-short
 *
 * @var int
 */
const CAL_MONTH_JULIAN_SHORT = 2;

/**
 * The number of available calendars.
 *
 * @link http://www.php.net/manual/en/calendar.constants.php#constant.cal-num-cals
 *
 * @var int
 */
const CAL_NUM_CALS = 4;

/**
 * Return the number of days in a month for a given year and calendar
 *
 * @param int $calendar Calendar to use for calculation
 * @param int $month Month in the selected calendar
 * @param int $year Year in the selected calendar
 *
 * @return int The length in days of the selected month in the given calendar
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.cal-days-in-month.php
 */
function cal_days_in_month($calendar, $month, $year)
{
}

/**
 * Converts from Julian Day Count to a supported calendar
 *
 * @param int $jd Julian day as integer
 * @param int $calendar Calendar to convert to
 *
 * @return array Returns an array containing calendar information like month, day, year,
 * day of week (<code>dow</code>), abbreviated and full names of weekday and month and the
 * date in string form "month/day/year".
 * The day of week ranges from <code>0</code> (Sunday) to
 * <code>6</code> (Saturday).
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.cal-from-jd.php
 */
function cal_from_jd($jd, $calendar)
{
}

/**
 * Returns information about a particular calendar
 *
 * @param int|null $calendar Calendar to return information for. If no calendar is specified
 * information about all calendars is returned.
 *
 * @return array
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.cal-info.php
 */
function cal_info($calendar = -1)
{
}

/**
 * Converts from a supported calendar to Julian Day Count
 *
 * @param int $calendar Calendar to convert from, one of
 * <code>CAL_GREGORIAN</code>,
 * <code>CAL_JULIAN</code>,
 * <code>CAL_JEWISH</code> or
 * <code>CAL_FRENCH</code>.
 * @param int $month The month as a number, the valid range depends
 * on the <code>calendar</code>
 * @param int $day The day as a number, the valid range depends
 * on the <code>calendar</code>
 * @param int $year The year as a number, the valid range depends
 * on the <code>calendar</code>
 *
 * @return int A Julian Day number.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.cal-to-jd.php
 */
function cal_to_jd($calendar, $month, $day, $year)
{
}

/**
 * Get Unix timestamp for midnight on Easter of a given year
 *
 * @param int|null $year The year as a number between 1970 an 2037. If omitted, defaults to the
 * current year according to the local time.
 *
 * @return int The easter date as a unix timestamp.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.easter-date.php
 */
function easter_date($year = /* date("Y") */ null)
{
}

/**
 * Get number of days after March 21 on which Easter falls for a given year
 *
 * @param int|null $year The year as a positive number. If omitted, defaults to the
 * current year according to the local time.
 * @param int|null $method Allows Easter dates to be calculated based
 * on the Gregorian calendar during the years 1582 - 1752 when set to
 * <code>CAL_EASTER_ROMAN</code>. See the calendar constants for more valid
 * constants.
 *
 * @return int The number of days after March 21st that the Easter Sunday
 * is in the given <code>year</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.easter-days.php
 */
function easter_days($year = /* date("Y") */ null, $method = CAL_EASTER_DEFAULT)
{
}

/**
 * Converts a date from the French Republican Calendar to a Julian Day Count
 *
 * @param int $month The month as a number from 1 (for Vendémiaire) to 13 (for the period of 5-6 days at the end of each year)
 * @param int $day The day as a number from 1 to 30
 * @param int $year The year as a number between 1 and 14
 *
 * @return int The julian day for the given french revolution date as an integer.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.frenchtojd.php
 */
function frenchtojd($month, $day, $year)
{
}

/**
 * Converts a Gregorian date to Julian Day Count
 *
 * @param int $month The month as a number from 1 (for January) to 12 (for December)
 * @param int $day The day as a number from 1 to 31.
 * If the month has less days then given, overflow occurs; see the example
 * below.
 * @param int $year The year as a number between -4714 and 9999.
 * Negative numbers mean years B.C., positive numbers mean years A.D.
 * Note that there is no year <code>0</code>; December 31, 1 B.C. is
 * immediately followed by January 1, 1 A.D.
 *
 * @return int The julian day for the given gregorian date as an integer.
 * Dates outside the valid range return <code>0</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gregoriantojd.php
 */
function gregoriantojd($month, $day, $year)
{
}

/**
 * Returns the day of the week
 *
 * @param int $julianday A julian day number as integer
 * @param int|null $mode
 *
 * @return mixed The gregorian weekday as either an integer or string.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.jddayofweek.php
 */
function jddayofweek($julianday, $mode = CAL_DOW_DAYNO)
{
}

/**
 * Returns a month name
 *
 * @param int $julianday
 * @param int $mode The calendar mode (see table above).
 *
 * @return string The month name for the given Julian Day and <code>mode</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.jdmonthname.php
 */
function jdmonthname($julianday, $mode)
{
}

/**
 * Converts a Julian Day Count to the French Republican Calendar
 *
 * @param int $juliandaycount
 *
 * @return string The french revolution date as a string in the form "month/day/year"
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.jdtofrench.php
 */
function jdtofrench($juliandaycount)
{
}

/**
 * Converts Julian Day Count to Gregorian date
 *
 * @param int $julianday A julian day number as integer
 *
 * @return string The gregorian date as a string in the form "month/day/year"
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.jdtogregorian.php
 */
function jdtogregorian($julianday)
{
}

/**
 * Converts a Julian day count to a Jewish calendar date
 *
 * @param int $juliandaycount
 * @param bool|null $hebrew If the <code>hebrew</code> parameter is set to <code>TRUE</code>, the
 * <code>fl</code> parameter is used for Hebrew, ISO-8859-8 encoded string based,
 * output format.
 * @param int|null $fl A bitmask which may consist of
 * <code>CAL_JEWISH_ADD_ALAFIM_GERESH</code>,
 * <code>CAL_JEWISH_ADD_ALAFIM</code> and
 * <code>CAL_JEWISH_ADD_GERESHAYIM</code>.
 *
 * @return string The Jewish date as a string in the form "month/day/year", or an ISO-8859-8
 * encoded Hebrew date string, according to the <code>hebrew</code>
 * parameter.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.jdtojewish.php
 */
function jdtojewish($juliandaycount, $hebrew = false, $fl = 0)
{
}

/**
 * Converts a Julian Day Count to a Julian Calendar Date
 *
 * @param int $julianday A julian day number as integer
 *
 * @return string The julian date as a string in the form "month/day/year"
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.jdtojulian.php
 */
function jdtojulian($julianday)
{
}

/**
 * Convert Julian Day to Unix timestamp
 *
 * @param int $jday A julian day number between 2440588 and 2465342.
 *
 * @return int The unix timestamp for the start (midnight, not noon) of the given Julian day.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.jdtounix.php
 */
function jdtounix($jday)
{
}

/**
 * Converts a date in the Jewish Calendar to Julian Day Count
 *
 * @param int $month The month as a number from <code>1</code> to <code>13</code>,
 * where <code>1</code> means <code>Tishri</code>,
 * <code>13</code> means <code>Elul</code>, and
 * <code>6</code> <code>and</code> <code>7</code> mean
 * <code>Adar</code> in regular years, but <code>Adar I</code>
 * and <code>Adar II</code>, respectively, in leap years.
 * @param int $day The day as a number from <code>1</code> to <code>30</code>.
 * If the month has only 29 days, the first day of the following month is
 * assumed.
 * @param int $year The year as a number between 1 and 9999
 *
 * @return int The julian day for the given jewish date as an integer.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.jewishtojd.php
 */
function jewishtojd($month, $day, $year)
{
}

/**
 * Converts a Julian Calendar date to Julian Day Count
 *
 * @param int $month The month as a number from 1 (for January) to 12 (for December)
 * @param int $day The day as a number from 1 to 31
 * @param int $year The year as a number between -4713 and 9999
 *
 * @return int The julian day for the given julian date as an integer.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.juliantojd.php
 */
function juliantojd($month, $day, $year)
{
}

/**
 * Convert Unix timestamp to Julian Day
 *
 * @param int|null $timestamp A unix timestamp to convert.
 *
 * @return int A julian day number as integer.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.unixtojd.php
 */
function unixtojd($timestamp = /* time() */ null)
{
}
