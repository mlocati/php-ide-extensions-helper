<?php
// Start of extension: date
// - parsed on POSIX with PHP 7.0.28 (extension version 7.0.28)
// - parsed on Windows with PHP 7.0.28 (extension version 7.0.28)

/**
 * Atom (example: 2005-08-15T15:52:01+00:00)
 *
 * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
 *
 * @var string
 */
const DATE_ATOM = 'Y-m-d\\TH:i:sP';

/**
 * HTTP Cookies (example: Monday, 15-Aug-2005 15:52:01 UTC)
 *
 * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
 *
 * @var string
 */
const DATE_COOKIE = 'l, d-M-Y H:i:s T';

/**
 * ISO-8601 (example: 2005-08-15T15:52:01+0000)
 * <blockquote>
 * This format is not compatible with ISO-8601, but is left this way for
 * backward compatibility reasons. Use <code>DateTime::ATOM</code>
 * or <code>DATE_ATOM</code> for compatibility with ISO-8601
 * instead.
 * </blockquote>
 *
 * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
 *
 * @var string
 */
const DATE_ISO8601 = 'Y-m-d\\TH:i:sO';

/**
 * RFC 1036 (example: Mon, 15 Aug 05 15:52:01 +0000)
 *
 * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
 *
 * @var string
 */
const DATE_RFC1036 = 'D, d M y H:i:s O';

/**
 * RFC 1123 (example: Mon, 15 Aug 2005 15:52:01 +0000)
 *
 * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
 *
 * @var string
 */
const DATE_RFC1123 = 'D, d M Y H:i:s O';

/**
 * RFC 2822 (example: Mon, 15 Aug 2005 15:52:01 +0000)
 *
 * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
 *
 * @var string
 */
const DATE_RFC2822 = 'D, d M Y H:i:s O';

/**
 * Same as <code>DATE_ATOM</code> (since PHP 5.1.3)
 *
 * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
 *
 * @var string
 */
const DATE_RFC3339 = 'Y-m-d\\TH:i:sP';

/**
 * RFC 3339 EXTENDED format (since PHP 7.0.0) (example: 2005-08-15T15:52:01.000+00:00)
 *
 * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
 *
 * @var string
 */
const DATE_RFC3339_EXTENDED = 'Y-m-d\\TH:i:s.vP';

/**
 * @var string
 */
const DATE_RFC7231 = 'D, d M Y H:i:s \\G\\M\\T';

/**
 * RFC 822 (example: Mon, 15 Aug 05 15:52:01 +0000)
 *
 * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
 *
 * @var string
 */
const DATE_RFC822 = 'D, d M y H:i:s O';

/**
 * RFC 850 (example: Monday, 15-Aug-05 15:52:01 UTC)
 *
 * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
 *
 * @var string
 */
const DATE_RFC850 = 'l, d-M-y H:i:s T';

/**
 * RSS (example: Mon, 15 Aug 2005 15:52:01 +0000)
 *
 * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
 *
 * @var string
 */
const DATE_RSS = 'D, d M Y H:i:s O';

/**
 * World Wide Web Consortium (example: 2005-08-15T15:52:01+00:00)
 *
 * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
 *
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
     * @param DateTimeInterface $datetime2
     * @param bool|null $absolute Should the interval be forced to be positive?
     *
     * @return DateInterval The <code>DateInterval</code> object representing the
     * difference between the two dates or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.diff.php
     */
    public function diff(DateTimeInterface $datetime2, bool $absolute = false): DateInterval;

    /**
     * Returns date formatted according to given format
     *
     * @param string $format Format accepted by <code>date</code>.
     *
     * @return string Returns the formatted date string on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.format.php
     */
    public function format(string $format): string;

    /**
     * Returns the timezone offset
     *
     * @return int Returns the timezone offset in seconds from UTC on success
     * or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.getoffset.php
     */
    public function getOffset(): int;

    /**
     * Gets the Unix timestamp
     *
     * @return int Returns the Unix timestamp representing the date.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.gettimestamp.php
     */
    public function getTimestamp(): int;

    /**
     * Return time zone relative to given DateTime
     *
     * @return DateTimeZone Returns a <code>DateTimeZone</code> object on success
     * or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.gettimezone.php
     */
    public function getTimezone(): DateTimeZone;
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
     * Number of days.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.dateinterval.php#dateinterval.props
     */
    public $d;

    /**
     * If the DateInterval object was created by
     * <code>DateTime::diff</code>, then this is the total number of
     * days between the start and end dates. Otherwise,
     * <code>days</code> will be <code>FALSE</code>.
     * Before PHP 5.4.20/5.5.4 instead of <code>FALSE</code> you will receive -99999 upon
     * accessing the property.
     *
     * @var mixed
     *
     * @link http://www.php.net/manual/en/class.dateinterval.php#dateinterval.props
     */
    public $days;

    /**
     * Number of microseconds, as a fraction of a second.
     *
     * @var float
     *
     * @link http://www.php.net/manual/en/class.dateinterval.php#dateinterval.props
     */
    public $f;

    /**
     * Number of hours.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.dateinterval.php#dateinterval.props
     */
    public $h;

    /**
     * Number of minutes.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.dateinterval.php#dateinterval.props
     */
    public $i;

    /**
     * Is <code>1</code> if the interval
     * represents a negative time period and
     * <code>0</code> otherwise.
     * See <code>DateInterval::format</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.dateinterval.php#dateinterval.props
     */
    public $invert;

    /**
     * Number of months.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.dateinterval.php#dateinterval.props
     */
    public $m;

    /**
     * Number of seconds.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.dateinterval.php#dateinterval.props
     */
    public $s;

    /**
     * Number of years.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.dateinterval.php#dateinterval.props
     */
    public $y;

    /**
     * Creates a new DateInterval object
     *
     * @param string $interval_spec An interval specification.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/dateinterval.construct.php
     */
    public function __construct(string $interval_spec)
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
     * @param string $time A date with relative parts. Specifically, the
     * relative formats
     * supported by the parser used for <code>strtotime</code> and
     * <code>DateTime</code> will be used to construct the
     * DateInterval.
     *
     * @return DateInterval Returns a new <code>DateInterval</code> instance.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/dateinterval.createfromdatestring.php
     */
    public static function createFromDateString(string $time): DateInterval
    {
    }

    /**
     * Formats the interval
     *
     * @param string $format <table>
     * <title>
     * The following characters are recognized in the
     * <code>format</code> parameter string.
     * Each format character must be prefixed by a percent sign
     * (<code>%</code>).
     * </title>
     * <thead>
     * <tr>
     * <td><code>format</code> character</td><td>Description</td><td>Example values</td>
     * </tr>
     * </thead>
     * <tbody>
     * <tr>
     * <td><code>%</code></td><td>Literal <code>%</code></td><td><code>%</code></td>
     * </tr>
     * <tr>
     * <td><code>Y</code></td><td>Years, numeric, at least 2 digits with leading 0</td><td><code>01</code>, <code>03</code></td>
     * </tr>
     * <tr>
     * <td><code>y</code></td><td>Years, numeric</td><td><code>1</code>, <code>3</code></td>
     * </tr>
     * <tr>
     * <td><code>M</code></td><td>Months, numeric, at least 2 digits with leading 0</td><td><code>01</code>, <code>03</code>, <code>12</code></td>
     * </tr>
     * <tr>
     * <td><code>m</code></td><td>Months, numeric</td><td><code>1</code>, <code>3</code>, <code>12</code></td>
     * </tr>
     * <tr>
     * <td><code>D</code></td><td>Days, numeric, at least 2 digits with leading 0</td><td><code>01</code>, <code>03</code>, <code>31</code></td>
     * </tr>
     * <tr>
     * <td><code>d</code></td><td>Days, numeric</td><td><code>1</code>, <code>3</code>, <code>31</code></td>
     * </tr>
     * <tr>
     * <td><code>a</code></td><td>Total number of days as a result of a <code>DateTime::diff</code> or <code>(unknown)</code> otherwise</td><td><code>4</code>, <code>18</code>, <code>8123</code></td>
     * </tr>
     * <tr>
     * <td><code>H</code></td><td>Hours, numeric, at least 2 digits with leading 0</td><td><code>01</code>, <code>03</code>, <code>23</code></td>
     * </tr>
     * <tr>
     * <td><code>h</code></td><td>Hours, numeric</td><td><code>1</code>, <code>3</code>, <code>23</code></td>
     * </tr>
     * <tr>
     * <td><code>I</code></td><td>Minutes, numeric, at least 2 digits with leading 0</td><td><code>01</code>, <code>03</code>, <code>59</code></td>
     * </tr>
     * <tr>
     * <td><code>i</code></td><td>Minutes, numeric</td><td><code>1</code>, <code>3</code>, <code>59</code></td>
     * </tr>
     * <tr>
     * <td><code>S</code></td><td>Seconds, numeric, at least 2 digits with leading 0</td><td><code>01</code>, <code>03</code>, <code>57</code></td>
     * </tr>
     * <tr>
     * <td><code>s</code></td><td>Seconds, numeric</td><td><code>1</code>, <code>3</code>, <code>57</code></td>
     * </tr>
     * <tr>
     * <td><code>F</code></td><td>Microseconds, numeric, at least 6 digits with leading
     * 0</td><td><code>007701</code>, <code>052738</code>, <code>428291</code></td>
     * </tr>
     * <tr>
     * <td><code>f</code></td><td>Microseconds, numeric</td><td><code>7701</code>, <code>52738</code>, <code>428291</code></td>
     * </tr>
     * <tr>
     * <td><code>R</code></td><td>Sign "<code>-</code>" when negative, "<code>+</code>" when positive</td><td><code>-</code>, <code>+</code></td>
     * </tr>
     * <tr>
     * <td><code>r</code></td><td>Sign "<code>-</code>" when negative, empty when positive</td><td><code>-</code>, <code/></td>
     * </tr>
     * </tbody>
     * </table>
     *
     * @return string Returns the formatted interval.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/dateinterval.format.php
     */
    public function format(string $format): string
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
     * Exclude start date, used in <code>DatePeriod::__construct</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.dateperiod.php#dateperiod.constants
     */
    const EXCLUDE_START_DATE = 1;

    /**
     * Creates a new DatePeriod object
     *
     * @param DateTimeInterface $start The start date of the period.
     * @param DateInterval $interval The interval between recurrences within the period.
     * @param int $recurrences The number of recurrences.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/dateperiod.construct.php
     */
    public function __construct(DateTimeInterface $start, DateInterval $interval, int $recurrences)
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
     * @return DateInterval Returns a <code>DateInterval</code> <code>object</code>
     *
     * @since PHP 5 >= 5.6.5, PHP 7
     *
     * @link http://www.php.net/manual/en/dateperiod.getdateinterval.php
     */
    public function getDateInterval(): DateInterval
    {
    }

    /**
     * Gets the end date
     *
     * @return DateTimeInterface Returns <code>NULL</code> if the <code>DatePeriod</code> does
     * not have an end date. For example, when initialized with the
     * <code>recurrences</code> parameter, or the
     * <code>isostr</code> parameter without an
     * end date.
     * Returns a <code>DateTimeImmutable</code> <code>object</code>
     * when the <code>DatePeriod</code> is initialized with a
     * <code>DateTimeImmutable</code> <code>object</code>
     * as the <code>end</code> parameter.
     * Returns a <code>DateTime</code> <code>object</code>
     * otherwise.
     *
     * @since PHP 5 >= 5.6.5, PHP 7
     *
     * @link http://www.php.net/manual/en/dateperiod.getenddate.php
     */
    public function getEndDate(): DateTimeInterface
    {
    }

    /**
     * Gets the start date
     *
     * @return DateTimeInterface Returns a <code>DateTimeImmutable</code> <code>object</code>
     * when the <code>DatePeriod</code> is initialized with a
     * <code>DateTimeImmutable</code> <code>object</code>
     * as the <code>start</code> parameter.
     * Returns a <code>DateTime</code> <code>object</code>
     * otherwise.
     *
     * @since PHP 5 >= 5.6.5, PHP 7
     *
     * @link http://www.php.net/manual/en/dateperiod.getstartdate.php
     */
    public function getStartDate(): DateTimeInterface
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
     * Atom (example: 2005-08-15T15:52:01+00:00)
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
     */
    const ATOM = 'Y-m-d\\TH:i:sP';

    /**
     * HTTP Cookies (example: Monday, 15-Aug-2005 15:52:01 UTC)
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
     */
    const COOKIE = 'l, d-M-Y H:i:s T';

    /**
     * ISO-8601 (example: 2005-08-15T15:52:01+0000)
     * <blockquote>
     * This format is not compatible with ISO-8601, but is left this way for
     * backward compatibility reasons. Use <code>DateTime::ATOM</code>
     * or <code>DATE_ATOM</code> for compatibility with ISO-8601
     * instead.
     * </blockquote>
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
     */
    const ISO8601 = 'Y-m-d\\TH:i:sO';

    /**
     * RFC 1036 (example: Mon, 15 Aug 05 15:52:01 +0000)
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
     */
    const RFC1036 = 'D, d M y H:i:s O';

    /**
     * RFC 1123 (example: Mon, 15 Aug 2005 15:52:01 +0000)
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
     */
    const RFC1123 = 'D, d M Y H:i:s O';

    /**
     * RFC 2822 (example: Mon, 15 Aug 2005 15:52:01 +0000)
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
     */
    const RFC2822 = 'D, d M Y H:i:s O';

    /**
     * Same as <code>DATE_ATOM</code> (since PHP 5.1.3)
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
     */
    const RFC3339 = 'Y-m-d\\TH:i:sP';

    /**
     * RFC 3339 EXTENDED format (since PHP 7.0.0) (example: 2005-08-15T15:52:01.000+00:00)
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
     */
    const RFC3339_EXTENDED = 'Y-m-d\\TH:i:s.vP';

    /**
     * @var string
     */
    const RFC7231 = 'D, d M Y H:i:s \\G\\M\\T';

    /**
     * RFC 822 (example: Mon, 15 Aug 05 15:52:01 +0000)
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
     */
    const RFC822 = 'D, d M y H:i:s O';

    /**
     * RFC 850 (example: Monday, 15-Aug-05 15:52:01 UTC)
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
     */
    const RFC850 = 'l, d-M-y H:i:s T';

    /**
     * RSS (example: Mon, 15 Aug 2005 15:52:01 +0000)
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
     */
    const RSS = 'D, d M Y H:i:s O';

    /**
     * World Wide Web Consortium (example: 2005-08-15T15:52:01+00:00)
     *
     * @var string
     *
     * @link http://www.php.net/manual/en/class.datetime.php#datetime.constants.types
     */
    const W3C = 'Y-m-d\\TH:i:sP';

    /**
     * Returns new DateTime object
     *
     * @param string|null $time A date/time string. Valid formats are explained in Date and Time Formats.
     * @param DateTimeZone|null $timezone A <code>DateTimeZone</code> object representing the
     * timezone of <code>$time</code>.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.construct.php
     */
    public function __construct(string $time = "now", DateTimeZone $timezone = null)
    {
    }

    /**
     * The __set_state handler
     *
     * @return DateTime Returns a new instance of a DateTime object.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.set-state.php
     */
    public static function __set_state(): DateTime
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
     * @param DateInterval $interval A <code>DateInterval</code> object
     *
     * @return DateTime Returns the <code>DateTime</code> object for method chaining or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.add.php
     */
    public function add(DateInterval $interval): DateTime
    {
    }

    /**
     * Parses a time string according to a specified format
     *
     * @param string $format The format that the passed in <code>string</code> should be in. See the
     * formatting options below. In most cases, the same letters as for the
     * <code>date</code> can be used.
     * @param string $time String representing the time.
     * @param DateTimeZone $timezone A <code>DateTimeZone</code> object representing the
     * desired time zone.
     *
     * @return DateTime Returns a new DateTime instance or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.createfromformat.php
     */
    public static function createFromFormat(string $format, string $time, DateTimeZone $timezone = null): DateTime
    {
    }

    /**
     * Returns the difference between two DateTime objects
     *
     * @param DateTimeInterface $datetime2
     * @param bool|null $absolute Should the interval be forced to be positive?
     *
     * @return DateInterval The <code>DateInterval</code> object representing the
     * difference between the two dates or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0 < 5.5.0
     *
     * @link http://www.php.net/manual/en/datetime.diff.php
     */
    public function diff(DateTimeInterface $datetime2, bool $absolute = false): DateInterval
    {
    }

    /**
     * Returns date formatted according to given format
     *
     * @param string $format Format accepted by <code>date</code>.
     *
     * @return string Returns the formatted date string on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.1 < 5.5.0
     *
     * @link http://www.php.net/manual/en/datetime.format.php
     */
    public function format(string $format): string
    {
    }

    /**
     * Returns the warnings and errors
     *
     * @return array Returns array containing info about warnings and errors.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.getlasterrors.php
     */
    public static function getLastErrors(): array
    {
    }

    /**
     * Returns the timezone offset
     *
     * @return int Returns the timezone offset in seconds from UTC on success
     * or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.1 < 5.5.0
     *
     * @link http://www.php.net/manual/en/datetime.getoffset.php
     */
    public function getOffset(): int
    {
    }

    /**
     * Gets the Unix timestamp
     *
     * @return int Returns the Unix timestamp representing the date.
     *
     * @since PHP 5 >= 5.3.0 < 5.5.0
     *
     * @link http://www.php.net/manual/en/datetime.gettimestamp.php
     */
    public function getTimestamp(): int
    {
    }

    /**
     * Return time zone relative to given DateTime
     *
     * @return DateTimeZone Returns a <code>DateTimeZone</code> object on success
     * or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.1 < 5.5.0
     *
     * @link http://www.php.net/manual/en/datetime.gettimezone.php
     */
    public function getTimezone(): DateTimeZone
    {
    }

    /**
     * Alters the timestamp
     *
     * @param string $modify A date/time string. Valid formats are explained in Date and Time Formats.
     *
     * @return DateTime Returns the <code>DateTime</code> object for method chaining or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.modify.php
     */
    public function modify(string $modify): DateTime
    {
    }

    /**
     * Sets the date
     *
     * @param int $year Year of the date.
     * @param int $month Month of the date.
     * @param int $day Day of the date.
     *
     * @return DateTime Returns the <code>DateTime</code> object for method chaining or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.setdate.php
     */
    public function setDate(int $year, int $month, int $day): DateTime
    {
    }

    /**
     * Sets the ISO date
     *
     * @param int $year Year of the date.
     * @param int $week Week of the date.
     * @param int|null $day Offset from the first day of the week.
     *
     * @return DateTime Returns the <code>DateTime</code> object for method chaining or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.setisodate.php
     */
    public function setISODate(int $year, int $week, int $day = 1): DateTime
    {
    }

    /**
     * Sets the time
     *
     * @param int $hour Hour of the time.
     * @param int $minute Minute of the time.
     * @param int|null $second Second of the time.
     *
     * @return DateTime Returns the <code>DateTime</code> object for method chaining or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.settime.php
     */
    public function setTime(int $hour, int $minute, int $second = 0): DateTime
    {
    }

    /**
     * Sets the date and time based on an Unix timestamp
     *
     * @param int $unixtimestamp Unix timestamp representing the date.
     *
     * @return DateTime Returns the <code>DateTime</code> object for method chaining or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.settimestamp.php
     */
    public function setTimestamp(int $unixtimestamp): DateTime
    {
    }

    /**
     * Sets the time zone for the DateTime object
     *
     * @param DateTimeZone $timezone A <code>DateTimeZone</code> object representing the
     * desired time zone.
     *
     * @return DateTime Returns the <code>DateTime</code> object for method chaining or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.settimezone.php
     */
    public function setTimezone(DateTimeZone $timezone): DateTime
    {
    }

    /**
     * Subtracts an amount of days, months, years, hours, minutes and seconds from
     * a DateTime object
     *
     * @param DateInterval $interval A <code>DateInterval</code> object
     *
     * @return DateTime Returns the <code>DateTime</code> object for method chaining or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.sub.php
     */
    public function sub(DateInterval $interval): DateTime
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
     * @param string|null $time
     * @param DateTimeZone|null $timezone
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.construct.php
     */
    public function __construct(string $time = "now", DateTimeZone $timezone = null)
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
    public static function __set_state(): DateTimeImmutable
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
     * @param DateInterval $interval
     *
     * @return DateTimeImmutable
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.add.php
     */
    public function add(DateInterval $interval): DateTimeImmutable
    {
    }

    /**
     * Parses a time string according to a specified format
     *
     * @param string $format
     * @param string $time
     * @param DateTimeZone $timezone
     *
     * @return DateTimeImmutable
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.createfromformat.php
     */
    public static function createFromFormat(string $format, string $time, DateTimeZone $timezone = null): DateTimeImmutable
    {
    }

    /**
     * Returns new DateTimeImmutable object encapsulating the given DateTime object
     *
     * @param DateTime $datetime The mutable <code>DateTime</code> object that you want to
     * convert to an immutable version. This object is not modified, but
     * instead a new <code>DateTimeImmutable</code> object is
     * created containing the same date time and timezone information.
     *
     * @return DateTimeImmutable Returns a new <code>DateTimeImmutable</code> instance.
     *
     * @since PHP 5 >= 5.6.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.createfrommutable.php
     */
    public static function createFromMutable(DateTime $datetime): DateTimeImmutable
    {
    }

    /**
     * Returns the difference between two DateTime objects
     *
     * @param DateTimeInterface $datetime2
     * @param bool|null $absolute Should the interval be forced to be positive?
     *
     * @return DateInterval The <code>DateInterval</code> object representing the
     * difference between the two dates or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.diff.php
     */
    public function diff(DateTimeInterface $datetime2, bool $absolute = false): DateInterval
    {
    }

    /**
     * Returns date formatted according to given format
     *
     * @param string $format Format accepted by <code>date</code>.
     *
     * @return string Returns the formatted date string on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.format.php
     */
    public function format(string $format): string
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
    public static function getLastErrors(): array
    {
    }

    /**
     * Returns the timezone offset
     *
     * @return int Returns the timezone offset in seconds from UTC on success
     * or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.getoffset.php
     */
    public function getOffset(): int
    {
    }

    /**
     * Gets the Unix timestamp
     *
     * @return int Returns the Unix timestamp representing the date.
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.gettimestamp.php
     */
    public function getTimestamp(): int
    {
    }

    /**
     * Return time zone relative to given DateTime
     *
     * @return DateTimeZone Returns a <code>DateTimeZone</code> object on success
     * or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetime.gettimezone.php
     */
    public function getTimezone(): DateTimeZone
    {
    }

    /**
     * Creates a new object with modified timestamp
     *
     * @param string $modify A date/time string. Valid formats are explained in Date and Time Formats.
     *
     * @return DateTimeImmutable Returns the newly created object or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.modify.php
     */
    public function modify(string $modify): DateTimeImmutable
    {
    }

    /**
     * Sets the date
     *
     * @param int $year
     * @param int $month
     * @param int $day
     *
     * @return DateTimeImmutable
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.setdate.php
     */
    public function setDate(int $year, int $month, int $day): DateTimeImmutable
    {
    }

    /**
     * Sets the ISO date
     *
     * @param int $year
     * @param int $week
     * @param int|null $day
     *
     * @return DateTimeImmutable
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.setisodate.php
     */
    public function setISODate(int $year, int $week, int $day = 1): DateTimeImmutable
    {
    }

    /**
     * Sets the time
     *
     * @param int $hour
     * @param int $minute
     * @param int|null $second
     *
     * @return DateTimeImmutable
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.settime.php
     */
    public function setTime(int $hour, int $minute, int $second = 0): DateTimeImmutable
    {
    }

    /**
     * Sets the date and time based on a Unix timestamp
     *
     * @param int $unixtimestamp
     *
     * @return DateTimeImmutable
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.settimestamp.php
     */
    public function setTimestamp(int $unixtimestamp): DateTimeImmutable
    {
    }

    /**
     * Sets the time zone
     *
     * @param DateTimeZone $timezone
     *
     * @return DateTimeImmutable
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.settimezone.php
     */
    public function setTimezone(DateTimeZone $timezone): DateTimeImmutable
    {
    }

    /**
     * Subtracts an amount of days, months, years, hours, minutes and seconds
     *
     * @param DateInterval $interval
     *
     * @return DateTimeImmutable
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimeimmutable.sub.php
     */
    public function sub(DateInterval $interval): DateTimeImmutable
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
     * Africa time zones.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.datetimezone.php#datetimezone.constants
     */
    const AFRICA = 1;

    /**
     * All time zones.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.datetimezone.php#datetimezone.constants
     */
    const ALL = 2047;

    /**
     * All time zones including backwards compatible.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.datetimezone.php#datetimezone.constants
     */
    const ALL_WITH_BC = 4095;

    /**
     * America time zones.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.datetimezone.php#datetimezone.constants
     */
    const AMERICA = 2;

    /**
     * Antarctica time zones.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.datetimezone.php#datetimezone.constants
     */
    const ANTARCTICA = 4;

    /**
     * Arctic time zones.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.datetimezone.php#datetimezone.constants
     */
    const ARCTIC = 8;

    /**
     * Asia time zones.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.datetimezone.php#datetimezone.constants
     */
    const ASIA = 16;

    /**
     * Atlantic time zones.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.datetimezone.php#datetimezone.constants
     */
    const ATLANTIC = 32;

    /**
     * Australia time zones.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.datetimezone.php#datetimezone.constants
     */
    const AUSTRALIA = 64;

    /**
     * Europe time zones.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.datetimezone.php#datetimezone.constants
     */
    const EUROPE = 128;

    /**
     * Indian time zones.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.datetimezone.php#datetimezone.constants
     */
    const INDIAN = 256;

    /**
     * Pacific time zones.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.datetimezone.php#datetimezone.constants
     */
    const PACIFIC = 512;

    /**
     * Time zones per country.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.datetimezone.php#datetimezone.constants
     */
    const PER_COUNTRY = 4096;

    /**
     * UTC time zones.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.datetimezone.php#datetimezone.constants
     */
    const UTC = 1024;

    /**
     * Creates new DateTimeZone object
     *
     * @param string $timezone One of the supported timezone names
     * or an offset value (+0200).
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimezone.construct.php
     */
    public function __construct(string $timezone)
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
     * @return array Array containing location information about timezone or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimezone.getlocation.php
     */
    public function getLocation(): array
    {
    }

    /**
     * Returns the name of the timezone
     *
     * @return string One of the timezone names in the
     * list of timezones.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimezone.getname.php
     */
    public function getName(): string
    {
    }

    /**
     * Returns the timezone offset from GMT
     *
     * @param DateTime $datetime DateTime that contains the date/time to compute the offset from.
     *
     * @return int Returns time zone offset in seconds on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimezone.getoffset.php
     */
    public function getOffset(DateTime $datetime): int
    {
    }

    /**
     * Returns all transitions for the timezone
     *
     * @param int $timestamp_begin Begin timestamp.
     * @param int $timestamp_end End timestamp.
     *
     * @return array Returns numerically indexed array containing associative array with all
     * transitions on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimezone.gettransitions.php
     */
    public function getTransitions(int $timestamp_begin = null, int $timestamp_end = null): array
    {
    }

    /**
     * Returns associative array containing dst, offset and the timezone name
     *
     * @return array Returns array on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimezone.listabbreviations.php
     */
    public static function listAbbreviations(): array
    {
    }

    /**
     * Returns a numerically indexed array containing all defined timezone identifiers
     *
     * @param int|null $what One of <code>DateTimeZone</code> class constants.
     * @param string|null $country A two-letter ISO 3166-1 compatible country code.
     *
     * @return array Returns array on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/datetimezone.listidentifiers.php
     */
    public static function listIdentifiers(int $what = DateTimeZone::ALL, string $country = null): array
    {
    }
}

/**
 * Validate a Gregorian date
 *
 * @param int $month The month is between 1 and 12 inclusive.
 * @param int $day The day is within the allowed number of days for the given
 * <code>month</code>. Leap <code>year</code>s
 * are taken into consideration.
 * @param int $year The year is between 1 and 32767 inclusive.
 *
 * @return bool Returns <code>TRUE</code> if the date given is valid; otherwise returns <code>FALSE</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.checkdate.php
 */
function checkdate(int $month, int $day, int $year): bool
{
}

/**
 * Format a local time/date
 *
 * @param string $format The format of the outputted date <code>string</code>. See the formatting
 * options below. There are also several
 * predefined date constants
 * that may be used instead, so for example <code>DATE_RSS</code>
 * contains the format string <code>'D, d M Y H:i:s'</code>.
 * @param int|null $timestamp The optional <code>timestamp</code> parameter is an
 * <code>integer</code> Unix timestamp that defaults to the current
 * local time if a <code>timestamp</code> is not given. In other
 * words, it defaults to the value of <code>time</code>.
 *
 * @return string Returns a formatted date string. If a non-numeric value is used for
 * <code>timestamp</code>, <code>FALSE</code> is returned and an
 * <code>E_WARNING</code> level error is emitted.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.date.php
 */
function date(string $format, int $timestamp = /* time() */ null): string
{
}

/**
 * Adds an amount of days, months, years, hours, minutes and seconds to a
 * DateTime object
 *
 * @param DateInterval $interval A <code>DateInterval</code> object
 * @param mixed $interval
 *
 * @return DateTime Returns the <code>DateTime</code> object for method chaining or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.add.php
 */
function date_add(DateInterval $interval, $interval): DateTime
{
}

/**
 * Returns new DateTime object
 *
 * @param string|null $time A date/time string. Valid formats are explained in Date and Time Formats.
 * @param DateTimeZone|null $timezone A <code>DateTimeZone</code> object representing the
 * timezone of <code>$time</code>.
 *
 * @return DateTime Returns a new DateTime instance.
 * Procedural style returns <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.construct.php
 */
function date_create(string $time = "now", DateTimeZone $timezone = null): DateTime
{
}

/**
 * Parses a time string according to a specified format
 *
 * @param string $format The format that the passed in <code>string</code> should be in. See the
 * formatting options below. In most cases, the same letters as for the
 * <code>date</code> can be used.
 * @param string $time String representing the time.
 * @param DateTimeZone $timezone A <code>DateTimeZone</code> object representing the
 * desired time zone.
 *
 * @return DateTime Returns a new DateTime instance or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.createfromformat.php
 */
function date_create_from_format(string $format, string $time, DateTimeZone $timezone = null): DateTime
{
}

/**
 * Returns new DateTimeImmutable object
 *
 * @param string|null $time
 * @param DateTimeZone|null $timezone
 *
 * @return DateTimeImmutable
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetimeimmutable.construct.php
 */
function date_create_immutable(string $time = "now", DateTimeZone $timezone = null): DateTimeImmutable
{
}

/**
 * Parses a time string according to a specified format
 *
 * @param string $format
 * @param string $time
 * @param DateTimeZone $timezone
 *
 * @return DateTimeImmutable
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetimeimmutable.createfromformat.php
 */
function date_create_immutable_from_format(string $format, string $time, DateTimeZone $timezone = null): DateTimeImmutable
{
}

/**
 * Sets the date
 *
 * @param int $year Year of the date.
 * @param int $month Month of the date.
 * @param int $day Day of the date.
 * @param mixed $day
 *
 * @return DateTime Returns the <code>DateTime</code> object for method chaining or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.setdate.php
 */
function date_date_set(int $year, int $month, int $day, $day): DateTime
{
}

/**
 * Gets the default timezone used by all date/time functions in a script
 *
 * @return string Returns a <code>string</code>.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.date-default-timezone-get.php
 */
function date_default_timezone_get(): string
{
}

/**
 * Sets the default timezone used by all date/time functions in a script
 *
 * @param string $timezone_identifier The timezone identifier, like <code>UTC</code> or
 * <code>Europe/Lisbon</code>. The list of valid identifiers is
 * available in the .
 *
 * @return bool This function returns <code>FALSE</code> if the
 * <code>timezone_identifier</code> isn't valid, or <code>TRUE</code>
 * otherwise.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.date-default-timezone-set.php
 */
function date_default_timezone_set(string $timezone_identifier): bool
{
}

/**
 * Returns the difference between two DateTime objects
 *
 * @param DateTimeInterface $datetime2
 * @param bool|null $absolute Should the interval be forced to be positive?
 * @param mixed $absolute
 *
 * @return DateInterval The <code>DateInterval</code> object representing the
 * difference between the two dates or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.diff.php
 */
function date_diff(DateTimeInterface $datetime2, bool $absolute = false, $absolute = null): DateInterval
{
}

/**
 * Returns date formatted according to given format
 *
 * @param string $format Format accepted by <code>date</code>.
 * @param mixed $format
 *
 * @return string Returns the formatted date string on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.format.php
 */
function date_format(string $format, $format): string
{
}

/**
 * Returns the warnings and errors
 *
 * @return array Returns array containing info about warnings and errors.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.getlasterrors.php
 */
function date_get_last_errors(): array
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
 * @param int $year Year of the date.
 * @param int $week Week of the date.
 * @param int|null $day Offset from the first day of the week.
 * @param mixed $day
 *
 * @return DateTime Returns the <code>DateTime</code> object for method chaining or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.setisodate.php
 */
function date_isodate_set(int $year, int $week, int $day = 1, $day = null): DateTime
{
}

/**
 * Alters the timestamp
 *
 * @param string $modify A date/time string. Valid formats are explained in Date and Time Formats.
 * @param mixed $modify
 *
 * @return DateTime Returns the <code>DateTime</code> object for method chaining or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.modify.php
 */
function date_modify(string $modify, $modify): DateTime
{
}

/**
 * Returns the timezone offset
 *
 * @param mixed $object
 *
 * @return int Returns the timezone offset in seconds from UTC on success
 * or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.getoffset.php
 */
function date_offset_get($object): int
{
}

/**
 * Returns associative array with detailed info about given date
 *
 * @param string $date Date in format accepted by <code>strtotime</code>.
 *
 * @return array Returns <code>array</code> with information about the parsed date
 * on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.date-parse.php
 */
function date_parse(string $date): array
{
}

/**
 * Get info about given date formatted according to the specified format
 *
 * @param string $format Format accepted by <code>DateTime::createFromFormat</code>.
 * @param string $date String representing the date.
 *
 * @return array Returns associative array with detailed info about given date.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.date-parse-from-format.php
 */
function date_parse_from_format(string $format, string $date): array
{
}

/**
 * Subtracts an amount of days, months, years, hours, minutes and seconds from
 * a DateTime object
 *
 * @param DateInterval $interval A <code>DateInterval</code> object
 * @param mixed $interval
 *
 * @return DateTime Returns the <code>DateTime</code> object for method chaining or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.sub.php
 */
function date_sub(DateInterval $interval, $interval): DateTime
{
}

/**
 * Returns an array with information about sunset/sunrise and twilight begin/end
 *
 * @param int $time Timestamp.
 * @param float $latitude Latitude in degrees.
 * @param float $longitude Longitude in degrees.
 *
 * @return array Returns array on success or <code>FALSE</code> on failure.
 * The structure of the array is detailed in the following list:
 * <ul>
 * <li>
 * <code><code>sunrise</code></code>
 * The time of the sunrise (zenith angle = 90°35').
 * </li>
 * <li>
 * <code><code>sunset</code></code>
 * The time of the sunset (zenith angle = 90°35').
 * </li>
 * <li>
 * <code><code>transit</code></code>
 * The time when the sun is at its zenith, i.e. has reached its topmost
 * point.
 * </li>
 * <li>
 * <code><code>civil_twilight_begin</code></code>
 * The start of the civil dawn (zenith angle = 96°). It ends at <code>sunrise</code>.
 * </li>
 * <li>
 * <code><code>civil_twilight_end</code></code>
 * The end of the civil dusk (zenith angle = 96°). It starts at <code>sunset</code>.
 * </li>
 * <li>
 * <code><code>nautical_twilight_begin</code></code>
 * The start of the nautical dawn (zenith angle = 102°). It ends at
 * <code>civil_twilight_begin</code>.
 * </li>
 * <li>
 * <code><code>nautical_twilight_end</code></code>
 * The end of the nautical dusk (zenith angle = 102°). It starts at
 * <code>civil_twilight_end</code>.
 * </li>
 * <li>
 * <code><code>astronomical_twilight_begin</code></code>
 * The start of the astronomical dawn (zenith angle = 108°). It ends at
 * <code>nautical_twilight_begin</code>.
 * </li>
 * <li>
 * <code><code>astronomical_twilight_end</code></code>
 * The end of the astronomical dusk (zenith angle = 108°). It starts at
 * <code>nautical_twilight_end</code>.
 * </li>
 * </ul>
 * The values of the array elements are either UNIX timestamps, <code>FALSE</code> if the
 * sun is below the respective zenith for the whole day, or <code>TRUE</code> if the sun is
 * above the respective zenith for the whole day.
 *
 * @since PHP 5 >= 5.1.2, PHP 7
 *
 * @link http://www.php.net/manual/en/function.date-sun-info.php
 */
function date_sun_info(int $time, float $latitude, float $longitude): array
{
}

/**
 * Returns time of sunrise for a given day and location
 *
 * @param int $timestamp The <code>timestamp</code> of the day from which the sunrise
 * time is taken.
 * @param int|null $format <table>
 * <title><code>format</code> constants</title>
 * <thead>
 * <tr>
 * <td>constant</td><td>description</td><td>example</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>SUNFUNCS_RET_STRING</td><td>returns the result as <code>string</code></td><td>16:46</td>
 * </tr>
 * <tr>
 * <td>SUNFUNCS_RET_DOUBLE</td><td>returns the result as <code>float</code></td><td>16.78243132</td>
 * </tr>
 * <tr>
 * <td>SUNFUNCS_RET_TIMESTAMP</td><td>returns the result as <code>integer</code> (timestamp)</td><td>1095034606</td>
 * </tr>
 * </tbody>
 * </table>
 * @param float|null $latitude Defaults to North, pass in a negative value for South.
 * See also: date.default_latitude
 * @param float|null $longitude Defaults to East, pass in a negative value for West.
 * See also: date.default_longitude
 * @param float|null $zenith <code>zenith</code> is the angle between the center of the sun
 * and a line perpendicular to earth's surface. It defaults to
 * date.sunrise_zenith
 * <table>
 * <title>Common <code>zenith</code> angles</title>
 * <thead>
 * <tr>
 * <td>Angle</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>90°50'</td><td>Sunrise: the point where the sun becomes visible.</td>
 * </tr>
 * <tr>
 * <td>96°</td><td>Civil twilight: conventionally used to signify the start of dawn.</td>
 * </tr>
 * <tr>
 * <td>102°</td><td>Nautical twilight: the point at which the horizon starts being visible at sea.</td>
 * </tr>
 * <tr>
 * <td>108°</td><td>Astronomical twilight: the point at which the sun starts being the source of any illumination.</td>
 * </tr>
 * </tbody>
 * </table>
 * @param float|null $gmt_offset
 *
 * @return mixed Returns the sunrise time in a specified <code>format</code> on
 * success or <code>FALSE</code> on failure. One potential reason for failure is that the
 * sun does not rise at all, which happens inside the polar circles for part of
 * the year.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.date-sunrise.php
 */
function date_sunrise(int $timestamp, int $format = SUNFUNCS_RET_STRING, float $latitude = /* ini_get("date.default_latitude") */ null, float $longitude = /* ini_get("date.default_longitude") */ null, float $zenith = /* ini_get("date.sunrise_zenith") */ null, float $gmt_offset = 0)
{
}

/**
 * Returns time of sunset for a given day and location
 *
 * @param int $timestamp The <code>timestamp</code> of the day from which the sunset
 * time is taken.
 * @param int|null $format <table>
 * <title><code>format</code> constants</title>
 * <thead>
 * <tr>
 * <td>constant</td><td>description</td><td>example</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>SUNFUNCS_RET_STRING</td><td>returns the result as <code>string</code></td><td>16:46</td>
 * </tr>
 * <tr>
 * <td>SUNFUNCS_RET_DOUBLE</td><td>returns the result as <code>float</code></td><td>16.78243132</td>
 * </tr>
 * <tr>
 * <td>SUNFUNCS_RET_TIMESTAMP</td><td>returns the result as <code>integer</code> (timestamp)</td><td>1095034606</td>
 * </tr>
 * </tbody>
 * </table>
 * @param float|null $latitude Defaults to North, pass in a negative value for South.
 * See also: date.default_latitude
 * @param float|null $longitude Defaults to East, pass in a negative value for West.
 * See also: date.default_longitude
 * @param float|null $zenith <code>zenith</code> is the angle between the center of the sun
 * and a line perpendicular to earth's surface. It defaults to
 * date.sunset_zenith
 * <table>
 * <title>Common <code>zenith</code> angles</title>
 * <thead>
 * <tr>
 * <td>Angle</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>90°50'</td><td>Sunset: the point where the sun becomes invisible.</td>
 * </tr>
 * <tr>
 * <td>96°</td><td>Civil twilight: conventionally used to signify the end of dusk.</td>
 * </tr>
 * <tr>
 * <td>102°</td><td>Nautical twilight: the point at which the horizon ends being visible at sea.</td>
 * </tr>
 * <tr>
 * <td>108°</td><td>Astronomical twilight: the point at which the sun ends being the source of any illumination.</td>
 * </tr>
 * </tbody>
 * </table>
 * @param float|null $gmt_offset
 *
 * @return mixed Returns the sunset time in a specified <code>format</code> on
 * success or <code>FALSE</code> on failure. One potential reason for failure is that the
 * sun does not set at all, which happens inside the polar circles for part of
 * the year.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.date-sunset.php
 */
function date_sunset(int $timestamp, int $format = SUNFUNCS_RET_STRING, float $latitude = /* ini_get("date.default_latitude") */ null, float $longitude = /* ini_get("date.default_longitude") */ null, float $zenith = /* ini_get("date.sunset_zenith") */ null, float $gmt_offset = 0)
{
}

/**
 * Sets the time
 *
 * @param int $hour Hour of the time.
 * @param int $minute Minute of the time.
 * @param int|null $second Second of the time.
 * @param int|null $microseconds Microsecond of the time.
 *
 * @return DateTime Returns the <code>DateTime</code> object for method chaining or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.settime.php
 */
function date_time_set(int $hour, int $minute, int $second = 0, int $microseconds = 0): DateTime
{
}

/**
 * Gets the Unix timestamp
 *
 * @param mixed $object
 *
 * @return int Returns the Unix timestamp representing the date.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.gettimestamp.php
 */
function date_timestamp_get($object): int
{
}

/**
 * Sets the date and time based on an Unix timestamp
 *
 * @param int $unixtimestamp Unix timestamp representing the date.
 * @param mixed $unixtimestamp
 *
 * @return DateTime Returns the <code>DateTime</code> object for method chaining or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.settimestamp.php
 */
function date_timestamp_set(int $unixtimestamp, $unixtimestamp): DateTime
{
}

/**
 * Return time zone relative to given DateTime
 *
 * @param mixed $object
 *
 * @return DateTimeZone Returns a <code>DateTimeZone</code> object on success
 * or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.gettimezone.php
 */
function date_timezone_get($object): DateTimeZone
{
}

/**
 * Sets the time zone for the DateTime object
 *
 * @param DateTimeZone $timezone A <code>DateTimeZone</code> object representing the
 * desired time zone.
 * @param mixed $timezone
 *
 * @return DateTime Returns the <code>DateTime</code> object for method chaining or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetime.settimezone.php
 */
function date_timezone_set(DateTimeZone $timezone, $timezone): DateTime
{
}

/**
 * Get date/time information
 *
 * @param int|null $timestamp The optional <code>timestamp</code> parameter is an
 * <code>integer</code> Unix timestamp that defaults to the current
 * local time if a <code>timestamp</code> is not given. In other
 * words, it defaults to the value of <code>time</code>.
 *
 * @return array Returns an associative <code>array</code> of information related to
 * the <code>timestamp</code>. Elements from the returned
 * associative array are as follows:
 * <table>
 * <title>Key elements of the returned associative array</title>
 * <thead>
 * <tr>
 * <td>Key</td><td>Description</td><td>Example returned values</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td><code>"seconds"</code></td><td>Numeric representation of seconds</td><td><code>0</code> to <code>59</code></td>
 * </tr>
 * <tr>
 * <td><code>"minutes"</code></td><td>Numeric representation of minutes</td><td><code>0</code> to <code>59</code></td>
 * </tr>
 * <tr>
 * <td><code>"hours"</code></td><td>Numeric representation of hours</td><td><code>0</code> to <code>23</code></td>
 * </tr>
 * <tr>
 * <td><code>"mday"</code></td><td>Numeric representation of the day of the month</td><td><code>1</code> to <code>31</code></td>
 * </tr>
 * <tr>
 * <td><code>"wday"</code></td><td>Numeric representation of the day of the week</td><td><code>0</code> (for Sunday) through <code>6</code> (for Saturday)</td>
 * </tr>
 * <tr>
 * <td><code>"mon"</code></td><td>Numeric representation of a month</td><td><code>1</code> through <code>12</code></td>
 * </tr>
 * <tr>
 * <td><code>"year"</code></td><td>A full numeric representation of a year, 4 digits</td><td>Examples: <code>1999</code> or <code>2003</code></td>
 * </tr>
 * <tr>
 * <td><code>"yday"</code></td><td>Numeric representation of the day of the year</td><td><code>0</code> through <code>365</code></td>
 * </tr>
 * <tr>
 * <td><code>"weekday"</code></td><td>A full textual representation of the day of the week</td><td><code>Sunday</code> through <code>Saturday</code></td>
 * </tr>
 * <tr>
 * <td><code>"month"</code></td><td>A full textual representation of a month, such as January or March</td><td><code>January</code> through <code>December</code></td>
 * </tr>
 * <tr>
 * <td><code>0</code></td><td>
 * Seconds since the Unix Epoch, similar to the values returned by
 * <code>time</code> and used by <code>date</code>.
 * </td><td>
 * System Dependent, typically <code>-2147483648</code> through
 * <code>2147483647</code>.
 * </td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.getdate.php
 */
function getdate(int $timestamp = /* time() */ null): array
{
}

/**
 * Format a GMT/UTC date/time
 *
 * @param string $format The format of the outputted date <code>string</code>. See the formatting
 * options for the <code>date</code> function.
 * @param int|null $timestamp The optional <code>timestamp</code> parameter is an
 * <code>integer</code> Unix timestamp that defaults to the current
 * local time if a <code>timestamp</code> is not given. In other
 * words, it defaults to the value of <code>time</code>.
 *
 * @return string Returns a formatted date string. If a non-numeric value is used for
 * <code>timestamp</code>, <code>FALSE</code> is returned and an
 * <code>E_WARNING</code> level error is emitted.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmdate.php
 */
function gmdate(string $format, int $timestamp = /* time() */ null): string
{
}

/**
 * Get Unix timestamp for a GMT date
 *
 * @param int|null $hour The number of the hour relative to the start of the day determined by
 * <code>month</code>, <code>day</code> and <code>year</code>.
 * Negative values reference the hour before midnight of the day in question.
 * Values greater than 23 reference the appropriate hour in the following day(s).
 * @param int|null $minute The number of the minute relative to the start of the <code>hour</code>.
 * Negative values reference the minute in the previous hour.
 * Values greater than 59 reference the appropriate minute in the following hour(s).
 * @param int|null $second The number of seconds relative to the start of the <code>minute</code>.
 * Negative values reference the second in the previous minute.
 * Values greater than 59 reference the appropriate second in the following minute(s).
 * @param int|null $month The number of the month relative to the end of the previous year.
 * Values 1 to 12 reference the normal calendar months of the year in question.
 * Values less than 1 (including negative values) reference the months in the previous year in reverse order, so 0 is December, -1 is November, etc.
 * Values greater than 12 reference the appropriate month in the following year(s).
 * @param int|null $day The number of the day relative to the end of the previous month.
 * Values 1 to 28, 29, 30 or 31 (depending upon the month) reference the normal days in the relevant month.
 * Values less than 1 (including negative values) reference the days in the previous month, so 0 is the last day of the previous month, -1 is the day before that, etc.
 * Values greater than the number of days in the relevant month reference the appropriate day in the following month(s).
 * @param int|null $year The year
 *
 * @return int Returns a <code>integer</code> Unix timestamp.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmmktime.php
 */
function gmmktime(int $hour = /* gmdate("H") */ null, int $minute = /* gmdate("i") */ null, int $second = /* gmdate("s") */ null, int $month = /* gmdate("n") */ null, int $day = /* gmdate("j") */ null, int $year = /* gmdate("Y") */ null): int
{
}

/**
 * Format a GMT/UTC time/date according to locale settings
 *
 * @param string $format See description in <code>strftime</code>.
 * @param int|null $timestamp The optional <code>timestamp</code> parameter is an
 * <code>integer</code> Unix timestamp that defaults to the current
 * local time if a <code>timestamp</code> is not given. In other
 * words, it defaults to the value of <code>time</code>.
 *
 * @return string Returns a string formatted according to the given format string
 * using the given <code>timestamp</code> or the current
 * local time if no timestamp is given. Month and weekday names and
 * other language dependent strings respect the current locale set
 * with <code>setlocale</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmstrftime.php
 */
function gmstrftime(string $format, int $timestamp = /* time() */ null): string
{
}

/**
 * Format a local time/date as integer
 *
 * @param string $format <table>
 * <title>The following characters are recognized in the
 * <code>format</code> parameter string</title>
 * <thead>
 * <tr>
 * <td><code>format</code> character</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td><code>B</code></td><td>Swatch Beat/Internet Time</td>
 * </tr>
 * <tr>
 * <td><code>d</code></td><td>Day of the month</td>
 * </tr>
 * <tr>
 * <td><code>h</code></td><td>Hour (12 hour format)</td>
 * </tr>
 * <tr>
 * <td><code>H</code></td><td>Hour (24 hour format)</td>
 * </tr>
 * <tr>
 * <td><code>i</code></td><td>Minutes</td>
 * </tr>
 * <tr>
 * <td><code>I</code> (uppercase i)</td><td>returns <code>1</code> if DST is activated,
 * <code>0</code> otherwise</td>
 * </tr>
 * <tr>
 * <td><code>L</code> (uppercase l)</td><td>returns <code>1</code> for leap year,
 * <code>0</code> otherwise</td>
 * </tr>
 * <tr>
 * <td><code>m</code></td><td>Month number</td>
 * </tr>
 * <tr>
 * <td><code>s</code></td><td>Seconds</td>
 * </tr>
 * <tr>
 * <td><code>t</code></td><td>Days in current month</td>
 * </tr>
 * <tr>
 * <td><code>U</code></td><td>Seconds since the Unix Epoch - January 1 1970 00:00:00 UTC -
 * this is the same as <code>time</code></td>
 * </tr>
 * <tr>
 * <td><code>w</code></td><td>Day of the week (<code>0</code> on Sunday)</td>
 * </tr>
 * <tr>
 * <td><code>W</code></td><td>ISO-8601 week number of year, weeks starting on
 * Monday</td>
 * </tr>
 * <tr>
 * <td><code>y</code></td><td>Year (1 or 2 digits - check note below)</td>
 * </tr>
 * <tr>
 * <td><code>Y</code></td><td>Year (4 digits)</td>
 * </tr>
 * <tr>
 * <td><code>z</code></td><td>Day of the year</td>
 * </tr>
 * <tr>
 * <td><code>Z</code></td><td>Timezone offset in seconds</td>
 * </tr>
 * </tbody>
 * </table>
 * @param int|null $timestamp The optional <code>timestamp</code> parameter is an
 * <code>integer</code> Unix timestamp that defaults to the current
 * local time if a <code>timestamp</code> is not given. In other
 * words, it defaults to the value of <code>time</code>.
 *
 * @return int Returns an <code>integer</code>.
 * As <code>idate</code> always returns an <code>integer</code> and
 * as they can't start with a "0", <code>idate</code> may return
 * fewer digits than you would expect. See the example below.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.idate.php
 */
function idate(string $format, int $timestamp = /* time() */ null): int
{
}

/**
 * Get the local time
 *
 * @param int|null $timestamp The optional <code>timestamp</code> parameter is an
 * <code>integer</code> Unix timestamp that defaults to the current
 * local time if a <code>timestamp</code> is not given. In other
 * words, it defaults to the value of <code>time</code>.
 * @param bool|null $is_associative If set to <code>FALSE</code> or not supplied then the array is returned as a regular,
 * numerically indexed array. If the argument is set to <code>TRUE</code> then
 * <code>localtime</code> returns an associative array containing
 * all the different elements of the structure returned by the C
 * function call to localtime. The names of the different keys of
 * the associative array are as follows:
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.localtime.php
 */
function localtime(int $timestamp = /* time() */ null, bool $is_associative = false): array
{
}

/**
 * Get Unix timestamp for a date
 *
 * @param int|null $hour The number of the hour relative to the start of the day determined by
 * <code>month</code>, <code>day</code> and <code>year</code>.
 * Negative values reference the hour before midnight of the day in question.
 * Values greater than 23 reference the appropriate hour in the following day(s).
 * @param int|null $minute The number of the minute relative to the start of the <code>hour</code>.
 * Negative values reference the minute in the previous hour.
 * Values greater than 59 reference the appropriate minute in the following hour(s).
 * @param int|null $second The number of seconds relative to the start of the <code>minute</code>.
 * Negative values reference the second in the previous minute.
 * Values greater than 59 reference the appropriate second in the following minute(s).
 * @param int|null $month The number of the month relative to the end of the previous year.
 * Values 1 to 12 reference the normal calendar months of the year in question.
 * Values less than 1 (including negative values) reference the months in the previous year in reverse order, so 0 is December, -1 is November, etc.
 * Values greater than 12 reference the appropriate month in the following year(s).
 * @param int|null $day The number of the day relative to the end of the previous month.
 * Values 1 to 28, 29, 30 or 31 (depending upon the month) reference the normal days in the relevant month.
 * Values less than 1 (including negative values) reference the days in the previous month, so 0 is the last day of the previous month, -1 is the day before that, etc.
 * Values greater than the number of days in the relevant month reference the appropriate day in the following month(s).
 * @param int|null $year The number of the year, may be a two or four digit value,
 * with values between 0-69 mapping to 2000-2069 and 70-100 to
 * 1970-2000. On systems where time_t is a 32bit signed integer, as
 * most common today, the valid range for <code>year</code>
 * is somewhere between 1901 and 2038. However, before PHP 5.1.0 this
 * range was limited from 1970 to 2038 on some systems (e.g. Windows).
 *
 * @return int <code>mktime</code> returns the Unix timestamp of the arguments
 * given.
 * If the arguments are invalid, the function returns <code>FALSE</code> (before PHP 5.1
 * it returned <code>-1</code>).
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mktime.php
 */
function mktime(int $hour = /* date("H") */ null, int $minute = /* date("i") */ null, int $second = /* date("s") */ null, int $month = /* date("n") */ null, int $day = /* date("j") */ null, int $year = /* date("Y") */ null): int
{
}

/**
 * Format a local time/date according to locale settings
 *
 * @param string $format <table>
 * <title>The following characters are recognized in the
 * <code>format</code> parameter string</title>
 * <thead>
 * <tr>
 * <td><code>format</code></td><td>Description</td><td>Example returned values</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td align="center"><code>Day</code></td><td>---</td><td>---</td>
 * </tr>
 * <tr>
 * <td><code>%a</code></td><td>An abbreviated textual representation of the day</td><td><code>Sun</code> through <code>Sat</code></td>
 * </tr>
 * <tr>
 * <td><code>%A</code></td><td>A full textual representation of the day</td><td><code>Sunday</code> through <code>Saturday</code></td>
 * </tr>
 * <tr>
 * <td><code>%d</code></td><td>Two-digit day of the month (with leading zeros)</td><td><code>01</code> to <code>31</code></td>
 * </tr>
 * <tr>
 * <td><code>%e</code></td><td>
 * Day of the month, with a space preceding single digits. Not
 * implemented as described on Windows. See below for more information.
 * </td><td><code> 1</code> to <code>31</code></td>
 * </tr>
 * <tr>
 * <td><code>%j</code></td><td>Day of the year, 3 digits with leading zeros</td><td><code>001</code> to <code>366</code></td>
 * </tr>
 * <tr>
 * <td><code>%u</code></td><td>ISO-8601 numeric representation of the day of the week</td><td><code>1</code> (for Monday) through <code>7</code> (for Sunday)</td>
 * </tr>
 * <tr>
 * <td><code>%w</code></td><td>Numeric representation of the day of the week</td><td><code>0</code> (for Sunday) through <code>6</code> (for Saturday)</td>
 * </tr>
 * <tr>
 * <td align="center"><code>Week</code></td><td>---</td><td>---</td>
 * </tr>
 * <tr>
 * <td><code>%U</code></td><td>Week number of the given year, starting with the first
 * Sunday as the first week</td><td><code>13</code> (for the 13th full week of the year)</td>
 * </tr>
 * <tr>
 * <td><code>%V</code></td><td>ISO-8601:1988 week number of the given year, starting with
 * the first week of the year with at least 4 weekdays, with Monday
 * being the start of the week</td><td><code>01</code> through <code>53</code> (where 53
 * accounts for an overlapping week)</td>
 * </tr>
 * <tr>
 * <td><code>%W</code></td><td>A numeric representation of the week of the year, starting
 * with the first Monday as the first week</td><td><code>46</code> (for the 46th week of the year beginning
 * with a Monday)</td>
 * </tr>
 * <tr>
 * <td align="center"><code>Month</code></td><td>---</td><td>---</td>
 * </tr>
 * <tr>
 * <td><code>%b</code></td><td>Abbreviated month name, based on the locale</td><td><code>Jan</code> through <code>Dec</code></td>
 * </tr>
 * <tr>
 * <td><code>%B</code></td><td>Full month name, based on the locale</td><td><code>January</code> through <code>December</code></td>
 * </tr>
 * <tr>
 * <td><code>%h</code></td><td>Abbreviated month name, based on the locale (an alias of %b)</td><td><code>Jan</code> through <code>Dec</code></td>
 * </tr>
 * <tr>
 * <td><code>%m</code></td><td>Two digit representation of the month</td><td><code>01</code> (for January) through <code>12</code> (for December)</td>
 * </tr>
 * <tr>
 * <td align="center"><code>Year</code></td><td>---</td><td>---</td>
 * </tr>
 * <tr>
 * <td><code>%C</code></td><td>Two digit representation of the century (year divided by 100, truncated to an integer)</td><td><code>19</code> for the 20th Century</td>
 * </tr>
 * <tr>
 * <td><code>%g</code></td><td>Two digit representation of the year going by ISO-8601:1988 standards (see %V)</td><td>Example: <code>09</code> for the week of January 6, 2009</td>
 * </tr>
 * <tr>
 * <td><code>%G</code></td><td>The full four-digit version of %g</td><td>Example: <code>2008</code> for the week of January 3, 2009</td>
 * </tr>
 * <tr>
 * <td><code>%y</code></td><td>Two digit representation of the year</td><td>Example: <code>09</code> for 2009, <code>79</code> for 1979</td>
 * </tr>
 * <tr>
 * <td><code>%Y</code></td><td>Four digit representation for the year</td><td>Example: <code>2038</code></td>
 * </tr>
 * <tr>
 * <td align="center"><code>Time</code></td><td>---</td><td>---</td>
 * </tr>
 * <tr>
 * <td><code>%H</code></td><td>Two digit representation of the hour in 24-hour format</td><td><code>00</code> through <code>23</code></td>
 * </tr>
 * <tr>
 * <td><code>%k</code></td><td>Hour in 24-hour format, with a space preceding single digits</td><td><code> 0</code> through <code>23</code></td>
 * </tr>
 * <tr>
 * <td><code>%I</code></td><td>Two digit representation of the hour in 12-hour format</td><td><code>01</code> through <code>12</code></td>
 * </tr>
 * <tr>
 * <td><code>%l (lower-case 'L')</code></td><td>Hour in 12-hour format, with a space preceding single digits</td><td><code> 1</code> through <code>12</code></td>
 * </tr>
 * <tr>
 * <td><code>%M</code></td><td>Two digit representation of the minute</td><td><code>00</code> through <code>59</code></td>
 * </tr>
 * <tr>
 * <td><code>%p</code></td><td>UPPER-CASE 'AM' or 'PM' based on the given time</td><td>Example: <code>AM</code> for 00:31, <code>PM</code> for 22:23</td>
 * </tr>
 * <tr>
 * <td><code>%P</code></td><td>lower-case 'am' or 'pm' based on the given time</td><td>Example: <code>am</code> for 00:31, <code>pm</code> for 22:23</td>
 * </tr>
 * <tr>
 * <td><code>%r</code></td><td>Same as "%I:%M:%S %p"</td><td>Example: <code>09:34:17 PM</code> for 21:34:17</td>
 * </tr>
 * <tr>
 * <td><code>%R</code></td><td>Same as "%H:%M"</td><td>Example: <code>00:35</code> for 12:35 AM, <code>16:44</code> for 4:44 PM</td>
 * </tr>
 * <tr>
 * <td><code>%S</code></td><td>Two digit representation of the second</td><td><code>00</code> through <code>59</code></td>
 * </tr>
 * <tr>
 * <td><code>%T</code></td><td>Same as "%H:%M:%S"</td><td>Example: <code>21:34:17</code> for 09:34:17 PM</td>
 * </tr>
 * <tr>
 * <td><code>%X</code></td><td>Preferred time representation based on locale, without the date</td><td>Example: <code>03:59:16</code> or <code>15:59:16</code></td>
 * </tr>
 * <tr>
 * <td><code>%z</code></td><td>The time zone offset. Not implemented as described on
 * Windows. See below for more information.</td><td>Example: <code>-0500</code> for US Eastern Time</td>
 * </tr>
 * <tr>
 * <td><code>%Z</code></td><td>The time zone abbreviation. Not implemented as described on
 * Windows. See below for more information.</td><td>Example: <code>EST</code> for Eastern Time</td>
 * </tr>
 * <tr>
 * <td align="center"><code>Time and Date Stamps</code></td><td>---</td><td>---</td>
 * </tr>
 * <tr>
 * <td><code>%c</code></td><td>Preferred date and time stamp based on locale</td><td>Example: <code>Tue Feb 5 00:45:10 2009</code> for
 * February 5, 2009 at 12:45:10 AM</td>
 * </tr>
 * <tr>
 * <td><code>%D</code></td><td>Same as "%m/%d/%y"</td><td>Example: <code>02/05/09</code> for February 5, 2009</td>
 * </tr>
 * <tr>
 * <td><code>%F</code></td><td>Same as "%Y-%m-%d" (commonly used in database datestamps)</td><td>Example: <code>2009-02-05</code> for February 5, 2009</td>
 * </tr>
 * <tr>
 * <td><code>%s</code></td><td>Unix Epoch Time timestamp (same as the <code>time</code>
 * function)</td><td>Example: <code>305815200</code> for September 10, 1979 08:40:00 AM</td>
 * </tr>
 * <tr>
 * <td><code>%x</code></td><td>Preferred date representation based on locale, without the time</td><td>Example: <code>02/05/09</code> for February 5, 2009</td>
 * </tr>
 * <tr>
 * <td align="center"><code>Miscellaneous</code></td><td>---</td><td>---</td>
 * </tr>
 * <tr>
 * <td><code>%n</code></td><td>A newline character ("\n")</td><td>---</td>
 * </tr>
 * <tr>
 * <td><code>%t</code></td><td>A Tab character ("\t")</td><td>---</td>
 * </tr>
 * <tr>
 * <td><code>%%</code></td><td>A literal percentage character ("%")</td><td>---</td>
 * </tr>
 * </tbody>
 * </table>
 * @param int|null $timestamp The optional <code>timestamp</code> parameter is an
 * <code>integer</code> Unix timestamp that defaults to the current
 * local time if a <code>timestamp</code> is not given. In other
 * words, it defaults to the value of <code>time</code>.
 *
 * @return string Returns a string formatted according <code>format</code>
 * using the given <code>timestamp</code> or the current
 * local time if no timestamp is given. Month and weekday names and
 * other language-dependent strings respect the current locale set
 * with <code>setlocale</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.strftime.php
 */
function strftime(string $format, int $timestamp = /* time() */ null): string
{
}

/**
 * Parse about any English textual datetime description into a Unix timestamp
 *
 * @param string $time A date/time string. Valid formats are explained in Date and Time Formats.
 * @param int|null $now The timestamp which is used as a base for the calculation of relative
 * dates.
 *
 * @return int Returns a timestamp on success, <code>FALSE</code> otherwise. Previous to PHP 5.1.0,
 * this function would return <code>-1</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.strtotime.php
 */
function strtotime(string $time, int $now = /* time() */ null): int
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
function time(): int
{
}

/**
 * Returns associative array containing dst, offset and the timezone name
 *
 * @return array Returns array on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetimezone.listabbreviations.php
 */
function timezone_abbreviations_list(): array
{
}

/**
 * Returns a numerically indexed array containing all defined timezone identifiers
 *
 * @param int|null $what One of <code>DateTimeZone</code> class constants.
 * @param string|null $country A two-letter ISO 3166-1 compatible country code.
 *
 * @return array Returns array on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetimezone.listidentifiers.php
 */
function timezone_identifiers_list(int $what = DateTimeZone::ALL, string $country = null): array
{
}

/**
 * Returns location information for a timezone
 *
 * @param mixed $object
 *
 * @return array Array containing location information about timezone or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetimezone.getlocation.php
 */
function timezone_location_get($object): array
{
}

/**
 * Returns the timezone name from abbreviation
 *
 * @param string $abbr Time zone abbreviation.
 * @param int|null $gmtOffset Offset from GMT in seconds. Defaults to -1 which means that first found
 * time zone corresponding to <code>abbr</code> is returned.
 * Otherwise exact offset is searched and only if not found then the first
 * time zone with any offset is returned.
 * @param int|null $isdst Daylight saving time indicator. Defaults to -1, which means that
 * whether the time zone has daylight saving or not is not taken into
 * consideration when searching. If this is set to 1, then the
 * <code>gmtOffset</code> is assumed to be an offset with
 * daylight saving in effect; if 0, then <code>gmtOffset</code>
 * is assumed to be an offset without daylight saving in effect. If
 * <code>abbr</code> doesn't exist then the time zone is
 * searched solely by the <code>gmtOffset</code> and
 * <code>isdst</code>.
 *
 * @return string Returns time zone name on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.3, PHP 7
 *
 * @link http://www.php.net/manual/en/function.timezone-name-from-abbr.php
 */
function timezone_name_from_abbr(string $abbr, int $gmtOffset = -1, int $isdst = -1): string
{
}

/**
 * Returns the name of the timezone
 *
 * @param mixed $object
 *
 * @return string One of the timezone names in the
 * list of timezones.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetimezone.getname.php
 */
function timezone_name_get($object): string
{
}

/**
 * Returns the timezone offset from GMT
 *
 * @param DateTimeZone $datetime DateTime that contains the date/time to compute the offset from.
 * @param DateTimeInterface $datetime
 *
 * @return int Returns time zone offset in seconds on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetimezone.getoffset.php
 */
function timezone_offset_get(DateTimeZone $datetime, DateTimeInterface $datetime): int
{
}

/**
 * Creates new DateTimeZone object
 *
 * @param string $timezone One of the supported timezone names
 * or an offset value (+0200).
 *
 * @return DateTimeZone Returns <code>DateTimeZone</code> on success.
 * Procedural style returns <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetimezone.construct.php
 */
function timezone_open(string $timezone): DateTimeZone
{
}

/**
 * Returns all transitions for the timezone
 *
 * @param int $timestamp_begin Begin timestamp.
 * @param int $timestamp_end End timestamp.
 * @param mixed $timestamp_end
 *
 * @return array Returns numerically indexed array containing associative array with all
 * transitions on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/datetimezone.gettransitions.php
 */
function timezone_transitions_get(int $timestamp_begin, int $timestamp_end = null, $timestamp_end = null): array
{
}

/**
 * Gets the version of the timezonedb
 *
 * @return string Returns a <code>string</code>.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.timezone-version-get.php
 */
function timezone_version_get(): string
{
}
