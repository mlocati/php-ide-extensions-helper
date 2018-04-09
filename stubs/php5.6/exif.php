<?php
// Start of extension: exif
// - parsed on POSIX with PHP 5.6.34 (extension version 1.4 $Id: 1c8772f76be691b7b3f77ca31eb788a2abbcefe5 $)

/**
 * This constant have a value of <code>1</code> if the
 * mbstring is enabled, otherwise
 * the value is <code>0</code>.
 *
 * @link http://www.php.net/manual/en/exif.constants.php#constant.exif-use-mbstring
 *
 * @var int
 */
const EXIF_USE_MBSTRING = 1;

/**
 * Determine the type of an image
 *
 * @param mixed $imagefile
 *
 * @return int
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.exif-imagetype.php
 */
function exif_imagetype($imagefile)
{
}

/**
 * Reads the <code>EXIF</code> headers from an image file
 *
 * @param mixed $filename
 * @param mixed|null $sections_needed
 * @param mixed|null $sub_arrays
 * @param mixed|null $read_thumbnail
 *
 * @return array
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.exif-read-data.php
 */
function exif_read_data($filename, $sections_needed = null, $sub_arrays = null, $read_thumbnail = null): array
{
}

/**
 * Get the header name for an index
 *
 * @param mixed $index
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.exif-tagname.php
 */
function exif_tagname($index)
{
}

/**
 * Retrieve the embedded thumbnail of an image
 *
 * @param mixed $filename
 * @param mixed|null $width
 * @param mixed|null $height
 * @param mixed|null $imagetype
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.exif-thumbnail.php
 */
function exif_thumbnail($filename, &$width = null, &$height = null, &$imagetype = null)
{
}

/**
 * Alias of <code>exif_read_data</code>
 *
 * @param mixed $filename
 * @param mixed|null $sections_needed
 * @param mixed|null $sub_arrays
 * @param mixed|null $read_thumbnail
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.read-exif-data.php
 */
function read_exif_data($filename, $sections_needed = null, $sub_arrays = null, $read_thumbnail = null)
{
}
