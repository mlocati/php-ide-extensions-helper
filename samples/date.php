<?php
// Documentation generated automatically for extension date v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
/*
 * INI entries:
 * date.timezone = ''
 * date.default_latitude = '31.7667'
 * date.default_longitude = '35.2333'
 * date.sunset_zenith = '90.583333'
 * date.sunrise_zenith = '90.583333'
 */
const DATE_ATOM = 'Y-m-d\\TH:i:sP';
const DATE_COOKIE = 'l, d-M-Y H:i:s T';
const DATE_ISO8601 = 'Y-m-d\\TH:i:sO';
const DATE_RFC1036 = 'D, d M y H:i:s O';
const DATE_RFC1123 = 'D, d M Y H:i:s O';
const DATE_RFC2822 = 'D, d M Y H:i:s O';
const DATE_RFC3339 = 'Y-m-d\\TH:i:sP';
const DATE_RFC3339_EXTENDED = 'Y-m-d\\TH:i:s.vP';
const DATE_RFC822 = 'D, d M y H:i:s O';
const DATE_RFC850 = 'l, d-M-y H:i:s T';
const DATE_RSS = 'D, d M Y H:i:s O';
const DATE_W3C = 'Y-m-d\\TH:i:sP';
const SUNFUNCS_RET_DOUBLE = 2;
const SUNFUNCS_RET_STRING = 1;
const SUNFUNCS_RET_TIMESTAMP = 0;
interface DateTimeInterface
{
    public function __wakeup();
    public function diff($object, $absolute = null);
    public function format($format);
    public function getOffset();
    public function getTimestamp();
    public function getTimezone();
}
class DateInterval
{
    public static function __set_state()
    {
    }
    public static function createFromDateString($time)
    {
    }
    public function __construct($interval_spec)
    {
    }
    public function __wakeup()
    {
    }
    public function format($format)
    {
    }
}
class DatePeriod implements Traversable
{
    const EXCLUDE_START_DATE = 1;
    public static function __set_state()
    {
    }
    public function __construct($start, $interval, $end)
    {
    }
    public function __wakeup()
    {
    }
    public function getDateInterval()
    {
    }
    public function getEndDate()
    {
    }
    public function getStartDate()
    {
    }
}
class DateTime implements DateTimeInterface
{
    const ATOM = 'Y-m-d\\TH:i:sP';
    const COOKIE = 'l, d-M-Y H:i:s T';
    const ISO8601 = 'Y-m-d\\TH:i:sO';
    const RFC1036 = 'D, d M y H:i:s O';
    const RFC1123 = 'D, d M Y H:i:s O';
    const RFC2822 = 'D, d M Y H:i:s O';
    const RFC3339 = 'Y-m-d\\TH:i:sP';
    const RFC3339_EXTENDED = 'Y-m-d\\TH:i:s.vP';
    const RFC822 = 'D, d M y H:i:s O';
    const RFC850 = 'l, d-M-y H:i:s T';
    const RSS = 'D, d M Y H:i:s O';
    const W3C = 'Y-m-d\\TH:i:sP';
    public static function __set_state()
    {
    }
    public static function createFromFormat($format, $time, $object = null)
    {
    }
    public static function getLastErrors()
    {
    }
    public function __construct($time = null, $object = null)
    {
    }
    public function __wakeup()
    {
    }
    public function add($interval)
    {
    }
    public function diff($object, $absolute = null)
    {
    }
    public function format($format)
    {
    }
    public function getOffset()
    {
    }
    public function getTimestamp()
    {
    }
    public function getTimezone()
    {
    }
    public function modify($modify)
    {
    }
    public function setDate($year, $month, $day)
    {
    }
    public function setISODate($year, $week, $day = null)
    {
    }
    public function setTime($hour, $minute, $second = null, $microseconds = null)
    {
    }
    public function setTimestamp($unixtimestamp)
    {
    }
    public function setTimezone($timezone)
    {
    }
    public function sub($interval)
    {
    }
}
class DateTimeImmutable implements DateTimeInterface
{
    public static function __set_state()
    {
    }
    public static function createFromFormat($format, $time, $object = null)
    {
    }
    public static function createFromMutable($DateTime)
    {
    }
    public static function getLastErrors()
    {
    }
    public function __construct($time = null, $object = null)
    {
    }
    public function __wakeup()
    {
    }
    public function add($interval)
    {
    }
    public function diff($object, $absolute = null)
    {
    }
    public function format($format)
    {
    }
    public function getOffset()
    {
    }
    public function getTimestamp()
    {
    }
    public function getTimezone()
    {
    }
    public function modify($modify)
    {
    }
    public function setDate($year, $month, $day)
    {
    }
    public function setISODate($year, $week, $day = null)
    {
    }
    public function setTime($hour, $minute, $second = null, $microseconds = null)
    {
    }
    public function setTimestamp($unixtimestamp)
    {
    }
    public function setTimezone($timezone)
    {
    }
    public function sub($interval)
    {
    }
}
class DateTimeZone
{
    const AFRICA = 1;
    const ALL = 2047;
    const ALL_WITH_BC = 4095;
    const AMERICA = 2;
    const ANTARCTICA = 4;
    const ARCTIC = 8;
    const ASIA = 16;
    const ATLANTIC = 32;
    const AUSTRALIA = 64;
    const EUROPE = 128;
    const INDIAN = 256;
    const PACIFIC = 512;
    const PER_COUNTRY = 4096;
    const UTC = 1024;
    public static function __set_state()
    {
    }
    public static function listAbbreviations()
    {
    }
    public static function listIdentifiers($what = null, $country = null)
    {
    }
    public function __construct($timezone)
    {
    }
    public function __wakeup()
    {
    }
    public function getLocation()
    {
    }
    public function getName()
    {
    }
    public function getOffset($object)
    {
    }
    public function getTransitions($timestamp_begin, $timestamp_end)
    {
    }
}
function strtotime($time, $now = null)
{
}
function date($format, $timestamp = null)
{
}
function idate($format, $timestamp = null)
{
}
function gmdate($format, $timestamp = null)
{
}
function mktime($hour = null, $min = null, $sec = null, $mon = null, $day = null, $year = null)
{
}
function gmmktime($hour = null, $min = null, $sec = null, $mon = null, $day = null, $year = null)
{
}
function checkdate($month, $day, $year)
{
}
function strftime($format, $timestamp = null)
{
}
function gmstrftime($format, $timestamp = null)
{
}
function time()
{
}
function localtime($timestamp = null, $associative_array = null)
{
}
function getdate($timestamp = null)
{
}
function date_create($time = null, $object = null)
{
}
function date_create_immutable($time = null, $object = null)
{
}
function date_create_from_format($format, $time, $object = null)
{
}
function date_create_immutable_from_format($format, $time, $object = null)
{
}
function date_parse($date)
{
}
function date_parse_from_format($format, $date)
{
}
function date_get_last_errors()
{
}
function date_format($object, $format)
{
}
function date_modify($object, $modify)
{
}
function date_add($object, $interval)
{
}
function date_sub($object, $interval)
{
}
function date_timezone_get($object)
{
}
function date_timezone_set($object, $timezone)
{
}
function date_offset_get($object)
{
}
function date_diff($object, $object2, $absolute = null)
{
}
function date_time_set($object, $hour, $minute, $second = null, $microseconds = null)
{
}
function date_date_set($object, $year, $month, $day)
{
}
function date_isodate_set($object, $year, $week, $day = null)
{
}
function date_timestamp_set($object, $unixtimestamp)
{
}
function date_timestamp_get($object)
{
}
function timezone_open($timezone)
{
}
function timezone_name_get($object)
{
}
function timezone_name_from_abbr($abbr, $gmtoffset = null, $isdst = null)
{
}
function timezone_offset_get(DateTimeZone $object, DateTimeInterface $datetime)
{
}
function timezone_transitions_get($object, $timestamp_begin = null, $timestamp_end = null)
{
}
function timezone_location_get($object)
{
}
function timezone_identifiers_list($what = null, $country = null)
{
}
function timezone_abbreviations_list()
{
}
function timezone_version_get()
{
}
function date_interval_create_from_date_string($time)
{
}
function date_interval_format($object, $format)
{
}
function date_default_timezone_set($timezone_identifier)
{
}
function date_default_timezone_get()
{
}
function date_sunrise($time, $format = null, $latitude = null, $longitude = null, $zenith = null, $gmt_offset = null)
{
}
function date_sunset($time, $format = null, $latitude = null, $longitude = null, $zenith = null, $gmt_offset = null)
{
}
function date_sun_info($time, $latitude, $longitude)
{
}