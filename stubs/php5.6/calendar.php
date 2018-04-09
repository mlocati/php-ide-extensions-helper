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
 * @param mixed $calendar
 * @param mixed $month
 * @param mixed $year
 *
 * @return int
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
 * @param mixed $jd
 * @param mixed $calendar
 *
 * @return array
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
 * @param mixed|null $calendar
 *
 * @return array
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.cal-info.php
 */
function cal_info($calendar = null)
{
}

/**
 * Converts from a supported calendar to Julian Day Count
 *
 * @param mixed $calendar
 * @param mixed $month
 * @param mixed $day
 * @param mixed $year
 *
 * @return int
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
 * @param mixed|null $year
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.easter-date.php
 */
function easter_date($year = null)
{
}

/**
 * Get number of days after March 21 on which Easter falls for a given year
 *
 * @param mixed|null $year
 * @param mixed|null $method
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.easter-days.php
 */
function easter_days($year = null, $method = null)
{
}

/**
 * Converts a date from the French Republican Calendar to a Julian Day Count
 *
 * @param mixed $month
 * @param mixed $day
 * @param mixed $year
 *
 * @return int
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
 * @param mixed $month
 * @param mixed $day
 * @param mixed $year
 *
 * @return int
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
 * @param mixed $juliandaycount
 * @param mixed|null $mode
 *
 * @return mixed
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.jddayofweek.php
 */
function jddayofweek($juliandaycount, $mode = null)
{
}

/**
 * Returns a month name
 *
 * @param mixed $juliandaycount
 * @param mixed $mode
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.jdmonthname.php
 */
function jdmonthname($juliandaycount, $mode)
{
}

/**
 * Converts a Julian Day Count to the French Republican Calendar
 *
 * @param mixed $juliandaycount
 *
 * @return string
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
 * @param mixed $juliandaycount
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.jdtogregorian.php
 */
function jdtogregorian($juliandaycount)
{
}

/**
 * Converts a Julian day count to a Jewish calendar date
 *
 * @param mixed $juliandaycount
 * @param mixed|null $hebrew
 * @param mixed|null $fl
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.jdtojewish.php
 */
function jdtojewish($juliandaycount, $hebrew = null, $fl = null)
{
}

/**
 * Converts a Julian Day Count to a Julian Calendar Date
 *
 * @param mixed $juliandaycount
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.jdtojulian.php
 */
function jdtojulian($juliandaycount)
{
}

/**
 * Convert Julian Day to Unix timestamp
 *
 * @param mixed $jday
 *
 * @return int
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
 * @param mixed $month
 * @param mixed $day
 * @param mixed $year
 *
 * @return int
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
 * @param mixed $month
 * @param mixed $day
 * @param mixed $year
 *
 * @return int
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
 * @param mixed|null $timestamp
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.unixtojd.php
 */
function unixtojd($timestamp = null)
{
}
