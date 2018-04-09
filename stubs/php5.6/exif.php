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
 * @param string $filename
 *
 * @return int When a correct signature is found, the appropriate constant value will be
 * returned otherwise the return value is <code>FALSE</code>. The return value is the
 * same value that <code>getimagesize</code> returns in index 2 but
 * <code>exif_imagetype</code> is much faster.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.exif-imagetype.php
 */
function exif_imagetype($filename)
{
}

/**
 * Reads the <code>EXIF</code> headers from an image file
 *
 * @param mixed $stream The location of the image file. This can either be a path to the file
 * (stream wrappers are also supported as usual)
 * or a stream <code>resource</code>.
 * @param string|null $sections Is a comma separated list of sections that need to be present in file
 * to produce a result <code>array</code>. If none of the requested
 * sections could be found the return value is <code>FALSE</code>.
 * <table>
 * <tbody>
 * <tr>
 * <td>FILE</td><td>FileName, FileSize, FileDateTime, SectionsFound</td>
 * </tr>
 * <tr>
 * <td>COMPUTED</td><td>
 * html, Width, Height, IsColor, and more if available. Height and
 * Width are computed the same way <code>getimagesize</code>
 * does so their values must not be part of any header returned.
 * Also, <code>html</code> is a height/width text string to be used inside normal
 * <code>HTML</code>.
 * </td>
 * </tr>
 * <tr>
 * <td>ANY_TAG</td><td>Any information that has a Tag e.g. <code>IFD0</code>, <code>EXIF</code>, ...</td>
 * </tr>
 * <tr>
 * <td>IFD0</td><td>
 * All tagged data of IFD0. In normal imagefiles this contains
 * image size and so forth.
 * </td>
 * </tr>
 * <tr>
 * <td>THUMBNAIL</td><td>
 * A file is supposed to contain a thumbnail if it has a second <code>IFD</code>.
 * All tagged information about the embedded thumbnail is stored in
 * this section.
 * </td>
 * </tr>
 * <tr>
 * <td>COMMENT</td><td>Comment headers of JPEG images.</td>
 * </tr>
 * <tr>
 * <td>EXIF</td><td>
 * The EXIF section is a sub section of <code>IFD0</code>. It contains
 * more detailed information about an image. Most of these entries
 * are digital camera related.
 * </td>
 * </tr>
 * </tbody>
 * </table>
 * @param bool|null $arrays Specifies whether or not each section becomes an array. The
 * <code>sections</code> <code>COMPUTED</code>,
 * <code>THUMBNAIL</code>, and <code>COMMENT</code>
 * always become arrays as they may contain values whose names conflict
 * with other sections.
 * @param bool|null $thumbnail When set to <code>TRUE</code> the thumbnail itself is read. Otherwise, only the
 * tagged data is read.
 *
 * @return array It returns an associative <code>array</code> where the array indexes are
 * the header names and the array values are the values associated with
 * those headers. If no data can be returned,
 * <code>exif_read_data</code> will return <code>FALSE</code>.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.exif-read-data.php
 */
function exif_read_data($stream, $sections = null, $arrays = false, $thumbnail = false)
{
}

/**
 * Get the header name for an index
 *
 * @param int $index The Tag ID for which a Tag Name will be looked up.
 *
 * @return string Returns the header name, or <code>FALSE</code> if <code>index</code> is
 * not a defined EXIF tag id.
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
 * @param mixed $stream The location of the image file. This can either be a path to the file
 * or a stream <code>resource</code>.
 * @param int $width The return width of the returned thumbnail.
 * @param int $height The returned height of the returned thumbnail.
 * @param int $imagetype The returned image type of the returned thumbnail. This is either
 * <code>TIFF</code> or <code>JPEG</code>.
 *
 * @return string Returns the embedded thumbnail, or <code>FALSE</code> if the image contains no
 * thumbnail.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.exif-thumbnail.php
 */
function exif_thumbnail($stream, &$width = null, &$height = null, &$imagetype = null)
{
}

/**
 * Alias of <code>exif_read_data</code>
 *
 * @param mixed $filename
 * @param mixed $sections_needed
 * @param mixed $sub_arrays
 * @param mixed $read_thumbnail
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.read-exif-data.php
 */
function read_exif_data($filename, $sections_needed = null, $sub_arrays = null, $read_thumbnail = null)
{
}
