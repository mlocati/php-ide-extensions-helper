<?php
// Start of extension: date
// - parsed on POSIX with PHP 5.6.34 (extension version 5.6.34)
// - parsed on Windows with PHP 5.6.34 (extension version 5.6.34)

/**
 * @var string
 */
const DATE_ATOM = 'Y-m-d\\TH:i:sP';

/**
 * @var string
 */
const DATE_COOKIE = 'l, d-M-Y H:i:s T';

/**
 * @var string
 */
const DATE_ISO8601 = 'Y-m-d\\TH:i:sO';

/**
 * @var string
 */
const DATE_RFC1036 = 'D, d M y H:i:s O';

/**
 * @var string
 */
const DATE_RFC1123 = 'D, d M Y H:i:s O';

/**
 * @var string
 */
const DATE_RFC2822 = 'D, d M Y H:i:s O';

/**
 * @var string
 */
const DATE_RFC3339 = 'Y-m-d\\TH:i:sP';

/**
 * @var string
 */
const DATE_RFC822 = 'D, d M y H:i:s O';

/**
 * @var string
 */
const DATE_RFC850 = 'l, d-M-y H:i:s T';

/**
 * @var string
 */
const DATE_RSS = 'D, d M Y H:i:s O';

/**
 * @var string
 */
const DATE_W3C = 'Y-m-d\\TH:i:sP';

/**
 * Hours as floating point number (example 8.75)
 *
 * @link http://www.php.net/manual/en/datetime.constants.php#constant.sunfuncs-ret-double
 *
 * @var int
 */
const SUNFUNCS_RET_DOUBLE = 2;

/**
 * Hours:minutes (example: 08:02)
 *
 * @link http://www.php.net/manual/en/datetime.constants.php#constant.sunfuncs-ret-string
 *
 * @var int
 */
const SUNFUNCS_RET_STRING = 1;

/**
 * Timestamp
 *
 * @link http://www.php.net/manual/en/datetime.constants.php#constant.sunfuncs-ret-timestamp
 *
 * @var int
 */
const SUNFUNCS_RET_TIMESTAMP = 0;

/**
 * DateTimeInterface is meant so that both DateTime and DateTimeImmutable can
 * be type hinted for. It is not possible to implement this interface with
 * userland classes.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.datetimeinterface.php
 */
interface DateTimeInterface
{
    /**
     * The __wakeup handler
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.wakeup.php
     */
    public function __wakeup();

    /**
     * Returns the difference between two DateTime objects
     *
     * @param mixed $object
     * @param mixed|null $absolute
     *
     * @return DateInterval
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.diff.php
     */
    public function diff($object, $absolute = null);

    /**
     * Returns date formatted according to given format
     *
     * @param mixed $format
     *
     * @return string
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.format.php
     */
    public function format($format);

    /**
     * Returns the timezone offset
     *
     * @return int
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.getoffset.php
     */
    public function getOffset();

    /**
     * Gets the Unix timestamp
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.gettimestamp.php
     */
    public function getTimestamp();

    /**
     * Return time zone relative to given DateTime
     *
     * @return DateTimeZone
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.gettimezone.php
     */
    public function getTimezone();
}

/**
 * Represents a date interval.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.dateinterval.php
 */
class DateInterval
{
    /**
     * Creates a new DateInterval object
     *
     * @param mixed $interval_spec
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/dateinterval.construct.php
     */
    public function __construct($interval_spec)
    {
    }

    public static function __set_state()
    {
    }

    public function __wakeup()
    {
    }

    /**
     * Sets up a DateInterval from the relative parts of the string
     *
     * @param mixed $time
     *
     * @return DateInterval
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/dateinterval.createfromdatestring.php
     */
    public static function createFromDateString($time)
    {
    }

    /**
     * Formats the interval
     *
     * @param mixed $format
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/dateinterval.format.php
     */
    public function format($format)
    {
    }
}

/**
 * Represents a date period.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.dateperiod.php
 */
class DatePeriod implements Traversable
{
    /**
     * Creates a new DatePeriod object
     *
     * @param mixed $start
     * @param mixed $interval
     * @param mixed $end
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/dateperiod.construct.php
     */
    public function __construct($start, $interval, $end)
    {
    }

    /**
     * @since PHP 5 >= 5.3.27, PHP 7
     */
    public static function __set_state()
    {
    }

    /**
     * @since PHP 5 >= 5.3.27, PHP 7
     */
    public function __wakeup()
    {
    }

    /**
     * Gets the interval
     *
     * @return DateInterval
     *
     * @since PHP 5 >= 5.6.5, PHP 7
     *
     * @link http://www.php.net/manual/en/dateperiod.getdateinterval.php
     */
    public function getDateInterval()
    {
    }

    /**
     * Gets the end date
     *
     * @return DateTimeInterface
     *
     * @since PHP 5 >= 5.6.5, PHP 7
     *
     * @link http://www.php.net/manual/en/dateperiod.getenddate.php
     */
    public function getEndDate()
    {
    }

    /**
     * Gets the start date
     *
     * @return DateTimeInterface
     *
     * @since PHP 5 >= 5.6.5, PHP 7
     *
     * @link http://www.php.net/manual/en/dateperiod.getstartdate.php
     */
    public function getStartDate()
    {
    }
}

/**
 * Representation of date and time.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.datetime.php
 */
class DateTime implements DateTimeInterface
{
    /**
     * Returns new DateTime object
     *
     * @param mixed|null $time
     * @param mixed|null $object
     *
     * @return DateTime
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.construct.php
     */
    public function __construct($time = null, $object = null)
    {
    }

    /**
     * The __set_state handler
     *
     * @return DateTime
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.set-state.php
     */
    public static function __set_state()
    {
    }

    /**
     * The __wakeup handler
     *
     * @since PHP 5 >= 5.3.0
     *
     * @link http://www.php.net/manual/en/datetime.wakeup.php
     */
    public function __wakeup()
    {
    }

    /**
     * Adds an amount of days, months, years, hours, minutes and seconds to a
     * DateTime object
     *
     * @param mixed $interval
     *
     * @return DateTime
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.add.php
     */
    public function add($interval)
    {
    }

    /**
     * Parses a time string according to a specified format
     *
     * @param mixed $format
     * @param mixed $time
     * @param mixed|null $object
     *
     * @return DateTime
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.createfromformat.php
     */
    public static function createFromFormat($format, $time, $object = null)
    {
    }

    /**
     * Returns the difference between two DateTime objects
     *
     * @param mixed $object
     * @param mixed|null $absolute
     *
     * @return DateInterval
     *
     * @since PHP 5 >= 5.3.0 < 5.5.0
     *
     * @link http://www.php.net/manual/en/datetime.diff.php
     */
    public function diff($object, $absolute = null)
    {
    }

    /**
     * Returns date formatted according to given format
     *
     * @param mixed $format
     *
     * @return string
     *
     * @since PHP 5 >= 5.2.1 < 5.5.0
     *
     * @link http://www.php.net/manual/en/datetime.format.php
     */
    public function format($format)
    {
    }

    /**
     * Returns the warnings and errors
     *
     * @return array
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.getlasterrors.php
     */
    public static function getLastErrors()
    {
    }

    /**
     * Returns the timezone offset
     *
     * @return int
     *
     * @since PHP 5 >= 5.2.1 < 5.5.0
     *
     * @link http://www.php.net/manual/en/datetime.getoffset.php
     */
    public function getOffset()
    {
    }

    /**
     * Gets the Unix timestamp
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0 < 5.5.0
     *
     * @link http://www.php.net/manual/en/datetime.gettimestamp.php
     */
    public function getTimestamp()
    {
    }

    /**
     * Return time zone relative to given DateTime
     *
     * @return DateTimeZone
     *
     * @since PHP 5 >= 5.2.1 < 5.5.0
     *
     * @link http://www.php.net/manual/en/datetime.gettimezone.php
     */
    public function getTimezone()
    {
    }

    /**
     * Alters the timestamp
     *
     * @param mixed $modify
     *
     * @return DateTime
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.modify.php
     */
    public function modify($modify)
    {
    }

    /**
     * Sets the date
     *
     * @param mixed $year
     * @param mixed $month
     * @param mixed $day
     *
     * @return DateTime
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.setdate.php
     */
    public function setDate($year, $month, $day)
    {
    }

    /**
     * Sets the ISO date
     *
     * @param mixed $year
     * @param mixed $week
     * @param mixed|null $day
     *
     * @return DateTime
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.setisodate.php
     */
    public function setISODate($year, $week, $day = null)
    {
    }

    /**
     * Sets the time
     *
     * @param mixed $hour
     * @param mixed $minute
     * @param mixed|null $second
     *
     * @return DateTime
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.settime.php
     */
    public function setTime($hour, $minute, $second = null)
    {
    }

    /**
     * Sets the date and time based on an Unix timestamp
     *
     * @param mixed $unixtimestamp
     *
     * @return DateTime
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.settimestamp.php
     */
    public function setTimestamp($unixtimestamp)
    {
    }

    /**
     * Sets the time zone for the DateTime object
     *
     * @param mixed $timezone
     *
     * @return DateTime
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.settimezone.php
     */
    public function setTimezone($timezone)
    {
    }

    /**
     * Subtracts an amount of days, months, years, hours, minutes and seconds from
     * a DateTime object
     *
     * @param mixed $interval
     *
     * @return DateTime
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.sub.php
     */
    public function sub($interval)
    {
    }
}

/**
 * This class behaves the same as <code>DateTime</code> except it
 * never modifies itself but returns a new object instead.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.datetimeimmutable.php
 */
class DateTimeImmutable implements DateTimeInterface
{
    /**
     * Returns new DateTimeImmutable object
     *
     * @param mixed|null $time
     * @param mixed|null $object
     *
     * @return DateTimeImmutable
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.construct.php
     */
    public function __construct($time = null, $object = null)
    {
    }

    /**
     * The __set_state handler
     *
     * @return DateTimeImmutable
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.set-state.php
     */
    public static function __set_state()
    {
    }

    /**
     * The __wakeup handler
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.wakeup.php
     */
    public function __wakeup()
    {
    }

    /**
     * Adds an amount of days, months, years, hours, minutes and seconds
     *
     * @param mixed $interval
     *
     * @return DateTimeImmutable
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.add.php
     */
    public function add($interval)
    {
    }

    /**
     * Parses a time string according to a specified format
     *
     * @param mixed $format
     * @param mixed $time
     * @param mixed|null $object
     *
     * @return DateTimeImmutable
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.createfromformat.php
     */
    public static function createFromFormat($format, $time, $object = null)
    {
    }

    /**
     * Returns new DateTimeImmutable object encapsulating the given DateTime object
     *
     * @param mixed $DateTime
     *
     * @return DateTimeImmutable
     *
     * @since PHP 5 >= 5.6.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.createfrommutable.php
     */
    public static function createFromMutable($DateTime)
    {
    }

    /**
     * Returns the difference between two DateTime objects
     *
     * @param mixed $object
     * @param mixed|null $absolute
     *
     * @return DateInterval
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.diff.php
     */
    public function diff($object, $absolute = null)
    {
    }

    /**
     * Returns date formatted according to given format
     *
     * @param mixed $format
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.format.php
     */
    public function format($format)
    {
    }

    /**
     * Returns the warnings and errors
     *
     * @return array
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.getlasterrors.php
     */
    public static function getLastErrors()
    {
    }

    /**
     * Returns the timezone offset
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.getoffset.php
     */
    public function getOffset()
    {
    }

    /**
     * Gets the Unix timestamp
     *
     * @return int
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.gettimestamp.php
     */
    public function getTimestamp()
    {
    }

    /**
     * Return time zone relative to given DateTime
     *
     * @return DateTimeZone
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.gettimezone.php
     */
    public function getTimezone()
    {
    }

    /**
     * Creates a new object with modified timestamp
     *
     * @param mixed $modify
     *
     * @return DateTimeImmutable
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.modify.php
     */
    public function modify($modify)
    {
    }

    /**
     * Sets the date
     *
     * @param mixed $year
     * @param mixed $month
     * @param mixed $day
     *
     * @return DateTimeImmutable
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.setdate.php
     */
    public function setDate($year, $month, $day)
    {
    }

    /**
     * Sets the ISO date
     *
     * @param mixed $year
     * @param mixed $week
     * @param mixed|null $day
     *
     * @return DateTimeImmutable
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.setisodate.php
     */
    public function setISODate($year, $week, $day = null)
    {
    }

    /**
     * Sets the time
     *
     * @param mixed $hour
     * @param mixed $minute
     * @param mixed|null $second
     *
     * @return DateTimeImmutable
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.settime.php
     */
    public function setTime($hour, $minute, $second = null)
    {
    }

    /**
     * Sets the date and time based on a Unix timestamp
     *
     * @param mixed $unixtimestamp
     *
     * @return DateTimeImmutable
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.settimestamp.php
     */
    public function setTimestamp($unixtimestamp)
    {
    }

    /**
     * Sets the time zone
     *
     * @param mixed $timezone
     *
     * @return DateTimeImmutable
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.settimezone.php
     */
    public function setTimezone($timezone)
    {
    }

    /**
     * Subtracts an amount of days, months, years, hours, minutes and seconds
     *
     * @param mixed $interval
     *
     * @return DateTimeImmutable
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.sub.php
     */
    public function sub($interval)
    {
    }
}

/**
 * Representation of time zone.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.datetimezone.php
 */
class DateTimeZone
{
    /**
     * Creates new DateTimeZone object
     *
     * @param mixed $timezone
     *
     * @return DateTimeZone
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimezone.construct.php
     */
    public function __construct($timezone)
    {
    }

    /**
     * @since PHP 5 >= 5.5.0, PHP 7
     */
    public static function __set_state()
    {
    }

    /**
     * @since PHP 5 >= 5.5.0, PHP 7
     */
    public function __wakeup()
    {
    }

    /**
     * Returns location information for a timezone
     *
     * @return array
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimezone.getlocation.php
     */
    public function getLocation()
    {
    }

    /**
     * Returns the name of the timezone
     *
     * @return string
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimezone.getname.php
     */
    public function getName()
    {
    }

    /**
     * Returns the timezone offset from GMT
     *
     * @param mixed $object
     *
     * @return int
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimezone.getoffset.php
     */
    public function getOffset($object)
    {
    }

    /**
     * Returns all transitions for the timezone
     *
     * @param mixed $timestamp_begin
     * @param mixed $timestamp_end
     *
     * @return array
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimezone.gettransitions.php
     */
    public function getTransitions($timestamp_begin, $timestamp_end)
    {
    }

    /**
     * Returns associative array containing dst, offset and the timezone name
     *
     * @return array
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimezone.listabbreviations.php
     */
    public static function listAbbreviations()
    {
    }

    /**
     * Returns a numerically indexed array containing all defined timezone identifiers
     *
     * @param mixed|null $what
     * @param mixed|null $country
     *
     * @return array
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimezone.listidentifiers.php
     */
    public static function listIdentifiers($what = null, $country = null)
    {
    }
}

/**
 * Validate a Gregorian date
 *
 * @param mixed $month
 * @param mixed $day
 * @param mixed $year
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.checkdate.php
 */
function checkdate($month, $day, $year)
{
}

/**
 * Format a local time/date
 *
 * @param mixed $format
 * @param mixed|null $timestamp
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.date.php
 */
function date($format, $timestamp = null)
{
}

/**
 * Adds an amount of days, months, years, hours, minutes and seconds to a
 * DateTime object
 *
 * @param mixed $object
 * @param mixed $interval
 *
 * @return DateTime
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.add.php
 */
function date_add($object, $interval)
{
}

/**
 * Returns new DateTime object
 *
 * @param mixed|null $time
 * @param mixed|null $object
 *
 * @return DateTime
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.construct.php
 */
function date_create($time = null, $object = null)
{
}

/**
 * Parses a time string according to a specified format
 *
 * @param mixed $format
 * @param mixed $time
 * @param mixed|null $object
 *
 * @return DateTime
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.createfromformat.php
 */
function date_create_from_format($format, $time, $object = null)
{
}

/**
 * Returns new DateTimeImmutable object
 *
 * @param mixed|null $time
 * @param mixed|null $object
 *
 * @return DateTimeImmutable
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetimeimmutable.construct.php
 */
function date_create_immutable($time = null, $object = null)
{
}

/**
 * Parses a time string according to a specified format
 *
 * @param mixed $format
 * @param mixed $time
 * @param mixed|null $object
 *
 * @return DateTimeImmutable
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetimeimmutable.createfromformat.php
 */
function date_create_immutable_from_format($format, $time, $object = null)
{
}

/**
 * Sets the date
 *
 * @param mixed $object
 * @param mixed $year
 * @param mixed $month
 * @param mixed $day
 *
 * @return DateTime
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.setdate.php
 */
function date_date_set($object, $year, $month, $day)
{
}

/**
 * Gets the default timezone used by all date/time functions in a script
 *
 * @return string
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.date-default-timezone-get.php
 */
function date_default_timezone_get()
{
}

/**
 * Sets the default timezone used by all date/time functions in a script
 *
 * @param mixed $timezone_identifier
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.date-default-timezone-set.php
 */
function date_default_timezone_set($timezone_identifier)
{
}

/**
 * Returns the difference between two DateTime objects
 *
 * @param mixed $object
 * @param mixed $object2
 * @param mixed|null $absolute
 *
 * @return DateInterval
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.diff.php
 */
function date_diff($object, $object2, $absolute = null)
{
}

/**
 * Returns date formatted according to given format
 *
 * @param mixed $object
 * @param mixed $format
 *
 * @return string
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.format.php
 */
function date_format($object, $format)
{
}

/**
 * Returns the warnings and errors
 *
 * @return array
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.getlasterrors.php
 */
function date_get_last_errors()
{
}

/**
 * Alias of <code>DateInterval::createFromDateString</code>
 *
 * @param mixed $time
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.date-interval-create-from-date-string.php
 */
function date_interval_create_from_date_string($time)
{
}

/**
 * Alias of <code>DateInterval::format</code>
 *
 * @param mixed $object
 * @param mixed $format
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.date-interval-format.php
 */
function date_interval_format($object, $format)
{
}

/**
 * Sets the ISO date
 *
 * @param mixed $object
 * @param mixed $year
 * @param mixed $week
 * @param mixed|null $day
 *
 * @return DateTime
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.setisodate.php
 */
function date_isodate_set($object, $year, $week, $day = null)
{
}

/**
 * Alters the timestamp
 *
 * @param mixed $object
 * @param mixed $modify
 *
 * @return DateTime
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.modify.php
 */
function date_modify($object, $modify)
{
}

/**
 * Returns the timezone offset
 *
 * @param mixed $object
 *
 * @return int
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.getoffset.php
 */
function date_offset_get($object)
{
}

/**
 * Returns associative array with detailed info about given date
 *
 * @param mixed $date
 *
 * @return array
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.date-parse.php
 */
function date_parse($date)
{
}

/**
 * Get info about given date formatted according to the specified format
 *
 * @param mixed $format
 * @param mixed $date
 *
 * @return array
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.date-parse-from-format.php
 */
function date_parse_from_format($format, $date)
{
}

/**
 * Subtracts an amount of days, months, years, hours, minutes and seconds from
 * a DateTime object
 *
 * @param mixed $object
 * @param mixed $interval
 *
 * @return DateTime
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.sub.php
 */
function date_sub($object, $interval)
{
}

/**
 * Returns an array with information about sunset/sunrise and twilight begin/end
 *
 * @param mixed $time
 * @param mixed $latitude
 * @param mixed $longitude
 *
 * @return array
 *
 * @since PHP 5 >= 5.1.2, PHP 7
 *
 * @link http://www.php.net/manual/en/function.date-sun-info.php
 */
function date_sun_info($time, $latitude, $longitude)
{
}

/**
 * Returns time of sunrise for a given day and location
 *
 * @param mixed $time
 * @param mixed|null $format
 * @param mixed|null $latitude
 * @param mixed|null $longitude
 * @param mixed|null $zenith
 * @param mixed|null $gmt_offset
 *
 * @return mixed
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.date-sunrise.php
 */
function date_sunrise($time, $format = null, $latitude = null, $longitude = null, $zenith = null, $gmt_offset = null)
{
}

/**
 * Returns time of sunset for a given day and location
 *
 * @param mixed $time
 * @param mixed|null $format
 * @param mixed|null $latitude
 * @param mixed|null $longitude
 * @param mixed|null $zenith
 * @param mixed|null $gmt_offset
 *
 * @return mixed
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.date-sunset.php
 */
function date_sunset($time, $format = null, $latitude = null, $longitude = null, $zenith = null, $gmt_offset = null)
{
}

/**
 * Sets the time
 *
 * @param mixed $object
 * @param mixed $hour
 * @param mixed $minute
 * @param mixed|null $second
 *
 * @return DateTime
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.settime.php
 */
function date_time_set($object, $hour, $minute, $second = null)
{
}

/**
 * Gets the Unix timestamp
 *
 * @param mixed $object
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.gettimestamp.php
 */
function date_timestamp_get($object)
{
}

/**
 * Sets the date and time based on an Unix timestamp
 *
 * @param mixed $object
 * @param mixed $unixtimestamp
 *
 * @return DateTime
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.settimestamp.php
 */
function date_timestamp_set($object, $unixtimestamp)
{
}

/**
 * Return time zone relative to given DateTime
 *
 * @param mixed $object
 *
 * @return DateTimeZone
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.gettimezone.php
 */
function date_timezone_get($object)
{
}

/**
 * Sets the time zone for the DateTime object
 *
 * @param mixed $object
 * @param mixed $timezone
 *
 * @return DateTime
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.settimezone.php
 */
function date_timezone_set($object, $timezone)
{
}

/**
 * Get date/time information
 *
 * @param mixed|null $timestamp
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.getdate.php
 */
function getdate($timestamp = null)
{
}

/**
 * Format a GMT/UTC date/time
 *
 * @param mixed $format
 * @param mixed|null $timestamp
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmdate.php
 */
function gmdate($format, $timestamp = null)
{
}

/**
 * Get Unix timestamp for a GMT date
 *
 * @param mixed|null $hour
 * @param mixed|null $min
 * @param mixed|null $sec
 * @param mixed|null $mon
 * @param mixed|null $day
 * @param mixed|null $year
 * @param mixed|null $is_dst
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmmktime.php
 */
function gmmktime($hour = null, $min = null, $sec = null, $mon = null, $day = null, $year = null, $is_dst = null)
{
}

/**
 * Format a GMT/UTC time/date according to locale settings
 *
 * @param mixed $format
 * @param mixed|null $timestamp
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmstrftime.php
 */
function gmstrftime($format, $timestamp = null)
{
}

/**
 * Format a local time/date as integer
 *
 * @param mixed $format
 * @param mixed|null $timestamp
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.idate.php
 */
function idate($format, $timestamp = null)
{
}

/**
 * Get the local time
 *
 * @param mixed|null $timestamp
 * @param mixed|null $associative_array
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.localtime.php
 */
function localtime($timestamp = null, $associative_array = null)
{
}

/**
 * Get Unix timestamp for a date
 *
 * @param mixed|null $hour
 * @param mixed|null $min
 * @param mixed|null $sec
 * @param mixed|null $mon
 * @param mixed|null $day
 * @param mixed|null $year
 * @param mixed|null $is_dst
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mktime.php
 */
function mktime($hour = null, $min = null, $sec = null, $mon = null, $day = null, $year = null, $is_dst = null)
{
}

/**
 * Format a local time/date according to locale settings
 *
 * @param mixed $format
 * @param mixed|null $timestamp
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.strftime.php
 */
function strftime($format, $timestamp = null)
{
}

/**
 * Parse about any English textual datetime description into a Unix timestamp
 *
 * @param mixed $time
 * @param mixed|null $now
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.strtotime.php
 */
function strtotime($time, $now = null)
{
}

/**
 * Return current Unix timestamp
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.time.php
 */
function time()
{
}

/**
 * Returns associative array containing dst, offset and the timezone name
 *
 * @return array
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetimezone.listabbreviations.php
 */
function timezone_abbreviations_list()
{
}

/**
 * Returns a numerically indexed array containing all defined timezone identifiers
 *
 * @param mixed|null $what
 * @param mixed|null $country
 *
 * @return array
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetimezone.listidentifiers.php
 */
function timezone_identifiers_list($what = null, $country = null)
{
}

/**
 * Returns location information for a timezone
 *
 * @param mixed $object
 *
 * @return array
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetimezone.getlocation.php
 */
function timezone_location_get($object)
{
}

/**
 * Returns the timezone name from abbreviation
 *
 * @param mixed $abbr
 * @param mixed|null $gmtoffset
 * @param mixed|null $isdst
 *
 * @return string
 *
 * @since PHP 5 >= 5.1.3, PHP 7
 *
 * @link http://www.php.net/manual/en/function.timezone-name-from-abbr.php
 */
function timezone_name_from_abbr($abbr, $gmtoffset = null, $isdst = null)
{
}

/**
 * Returns the name of the timezone
 *
 * @param mixed $object
 *
 * @return string
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetimezone.getname.php
 */
function timezone_name_get($object)
{
}

/**
 * Returns the timezone offset from GMT
 *
 * @param mixed $object
 * @param mixed $datetime
 *
 * @return int
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetimezone.getoffset.php
 */
function timezone_offset_get($object, $datetime)
{
}

/**
 * Creates new DateTimeZone object
 *
 * @param mixed $timezone
 *
 * @return DateTimeZone
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetimezone.construct.php
 */
function timezone_open($timezone)
{
}

/**
 * Returns all transitions for the timezone
 *
 * @param mixed $object
 * @param mixed|null $timestamp_begin
 * @param mixed|null $timestamp_end
 *
 * @return array
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetimezone.gettransitions.php
 */
function timezone_transitions_get($object, $timestamp_begin = null, $timestamp_end = null)
{
}

/**
 * Gets the version of the timezonedb
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.timezone-version-get.php
 */
function timezone_version_get()
{
}
