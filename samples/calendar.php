<?php
// Documentation generated automatically for extension calendar v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
// No INI entries
const CAL_DOW_DAYNO = 0;
const CAL_DOW_LONG = 1;
const CAL_DOW_SHORT = 2;
const CAL_EASTER_ALWAYS_GREGORIAN = 2;
const CAL_EASTER_ALWAYS_JULIAN = 3;
const CAL_EASTER_DEFAULT = 0;
const CAL_EASTER_ROMAN = 1;
const CAL_FRENCH = 3;
const CAL_GREGORIAN = 0;
const CAL_JEWISH = 2;
const CAL_JEWISH_ADD_ALAFIM = 4;
const CAL_JEWISH_ADD_ALAFIM_GERESH = 2;
const CAL_JEWISH_ADD_GERESHAYIM = 8;
const CAL_JULIAN = 1;
const CAL_MONTH_FRENCH = 5;
const CAL_MONTH_GREGORIAN_LONG = 1;
const CAL_MONTH_GREGORIAN_SHORT = 0;
const CAL_MONTH_JEWISH = 4;
const CAL_MONTH_JULIAN_LONG = 3;
const CAL_MONTH_JULIAN_SHORT = 2;
const CAL_NUM_CALS = 4;
// No classes defined
function jdtogregorian($juliandaycount)
{
}
function gregoriantojd($month, $day, $year)
{
}
function jdtojulian($juliandaycount)
{
}
function juliantojd($month, $day, $year)
{
}
function jdtojewish($juliandaycount, $hebrew = null, $fl = null)
{
}
function jewishtojd($month, $day, $year)
{
}
function jdtofrench($juliandaycount)
{
}
function frenchtojd($month, $day, $year)
{
}
function jddayofweek($juliandaycount, $mode = null)
{
}
function jdmonthname($juliandaycount, $mode)
{
}
function easter_date($year = null)
{
}
function easter_days($year = null, $method = null)
{
}
function unixtojd($timestamp = null)
{
}
function jdtounix($jday)
{
}
function cal_to_jd($calendar, $month, $day, $year)
{
}
function cal_from_jd($jd, $calendar)
{
}
function cal_days_in_month($calendar, $month, $year)
{
}
function cal_info($calendar = null)
{
}