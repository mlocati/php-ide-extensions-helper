<?php
// Start of extension: exif
// - parsed on POSIX with PHP 7.0.28 (extension version 7.0.28)

/**
 * This constant have a value of <code>1</code> if the 
 *       mbstring is enabled, otherwise 
 *       the value is <code>0</code>.
 *
 * @link http://www.php.net/manual/en/exif.constants.php#constant.exif-use-mbstring
 *
 * @var int
 */
const EXIF_USE_MBSTRING = 1;

/**
 * Determine the type of an image
 *
 * mixed $imagefile
 *
 * @return int
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.exif-imagetype.php
 */
function exif_imagetype($imagefile): int
{
}

/**
 * Reads the <code>EXIF</code> headers from an image file
 *
 * mixed $filename
 * mixed|null $sections_needed
 * mixed|null $sub_arrays
 * mixed|null $read_thumbnail
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
 * mixed $index
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.exif-tagname.php
 */
function exif_tagname($index): string
{
}

/**
 * Retrieve the embedded thumbnail of an image
 *
 * mixed $filename
 * mixed|null $width
 * mixed|null $height
 * mixed|null $imagetype
 *
 * @return string
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.exif-thumbnail.php
 */
function exif_thumbnail($filename, &$width = null, &$height = null, &$imagetype = null): string
{
}

/**
 * Alias of <code>exif_read_data</code>
 *
 * mixed $filename
 * mixed|null $sections_needed
 * mixed|null $sub_arrays
 * mixed|null $read_thumbnail
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.read-exif-data.php
 */
function read_exif_data($filename, $sections_needed = null, $sub_arrays = null, $read_thumbnail = null)
{
}
