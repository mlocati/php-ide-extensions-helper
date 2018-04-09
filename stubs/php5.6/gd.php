<?php
// Start of extension: gd
// - parsed on POSIX with PHP 5.6.34
// - parsed on Windows with PHP 5.6.34

/**
 * When the bundled version of GD is used this is 1 otherwise
 * its set to 0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.gd-bundled
 *
 * @var int
 */
const GD_BUNDLED = 1;

/**
 * The GD "extra" version (beta/rc..) PHP was compiled against.
 * (Available as of PHP 5.2.4)
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.gd-extra-version
 *
 * @var string
 */
const GD_EXTRA_VERSION = '';

/**
 * The GD major version PHP was compiled against.
 * (Available as of PHP 5.2.4)
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.gd-major-version
 *
 * @var int
 */
const GD_MAJOR_VERSION = 2;

/**
 * The GD minor version PHP was compiled against.
 * (Available as of PHP 5.2.4)
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.gd-minor-version
 *
 * @var int
 */
const GD_MINOR_VERSION = 0;

/**
 * The GD release version PHP was compiled against.
 * (Available as of PHP 5.2.4)
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.gd-release-version
 *
 * @var int
 */
const GD_RELEASE_VERSION = 35;

/**
 * The GD version PHP was compiled against.
 * (Available as of PHP 5.2.4)
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.gd-version
 *
 * @var string
 */
const GD_VERSION = '2.0.35';

/**
 * An affine transformation type constant used by the <code>imageaffinematrixget</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-affine-rotate
 *
 * @var int
 */
const IMG_AFFINE_ROTATE = 2;

/**
 * An affine transformation type constant used by the <code>imageaffinematrixget</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-affine-scale
 *
 * @var int
 */
const IMG_AFFINE_SCALE = 1;

/**
 * An affine transformation type constant used by the <code>imageaffinematrixget</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-affine-shear-horizontal
 *
 * @var int
 */
const IMG_AFFINE_SHEAR_HORIZONTAL = 3;

/**
 * An affine transformation type constant used by the <code>imageaffinematrixget</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-affine-shear-vertical
 *
 * @var int
 */
const IMG_AFFINE_SHEAR_VERTICAL = 4;

/**
 * An affine transformation type constant used by the <code>imageaffinematrixget</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-affine-translate
 *
 * @var int
 */
const IMG_AFFINE_TRANSLATE = 0;

/**
 * A style constant used by the <code>imagefilledarc</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-arc-chord
 *
 * @var int
 */
const IMG_ARC_CHORD = 1;

/**
 * A style constant used by the <code>imagefilledarc</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-arc-edged
 *
 * @var int
 */
const IMG_ARC_EDGED = 4;

/**
 * A style constant used by the <code>imagefilledarc</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-arc-nofill
 *
 * @var int
 */
const IMG_ARC_NOFILL = 2;

/**
 * A style constant used by the <code>imagefilledarc</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-arc-pie
 *
 * @var int
 */
const IMG_ARC_PIE = 0;

/**
 * A style constant used by the <code>imagefilledarc</code> function.
 * <blockquote>
 * This constant has the same value as <code>IMG_ARC_PIE</code>
 * </blockquote>
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-arc-rounded
 *
 * @var int
 */
const IMG_ARC_ROUNDED = 0;

/**
 * Used together with <code>imagesetinterpolation</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-bell
 *
 * @var int
 */
const IMG_BELL = 1;

/**
 * Used together with <code>imagesetinterpolation</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-bessel
 *
 * @var int
 */
const IMG_BESSEL = 2;

/**
 * Used together with <code>imagesetinterpolation</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-bicubic
 *
 * @var int
 */
const IMG_BICUBIC = 4;

/**
 * Used together with <code>imagesetinterpolation</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-bicubic-fixed
 *
 * @var int
 */
const IMG_BICUBIC_FIXED = 5;

/**
 * Used together with <code>imagesetinterpolation</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-bilinear-fixed
 *
 * @var int
 */
const IMG_BILINEAR_FIXED = 3;

/**
 * Used together with <code>imagesetinterpolation</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-blackman
 *
 * @var int
 */
const IMG_BLACKMAN = 6;

/**
 * Used together with <code>imagesetinterpolation</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-box
 *
 * @var int
 */
const IMG_BOX = 7;

/**
 * Used together with <code>imagesetinterpolation</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-bspline
 *
 * @var int
 */
const IMG_BSPLINE = 8;

/**
 * Used together with <code>imagesetinterpolation</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-catmullrom
 *
 * @var int
 */
const IMG_CATMULLROM = 9;

/**
 * Special color option which can be used instead of a color allocated with
 * <code>imagecolorallocate</code> or
 * <code>imagecolorallocatealpha</code>.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-color-brushed
 *
 * @var int
 */
const IMG_COLOR_BRUSHED = -3;

/**
 * Special color option which can be used instead of a color allocated with
 * <code>imagecolorallocate</code> or
 * <code>imagecolorallocatealpha</code>.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-color-styled
 *
 * @var int
 */
const IMG_COLOR_STYLED = -2;

/**
 * Special color option which can be used instead of a color allocated with
 * <code>imagecolorallocate</code> or
 * <code>imagecolorallocatealpha</code>.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-color-styledbrushed
 *
 * @var int
 */
const IMG_COLOR_STYLEDBRUSHED = -4;

/**
 * Special color option which can be used instead of a color allocated with
 * <code>imagecolorallocate</code> or
 * <code>imagecolorallocatealpha</code>.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-color-tiled
 *
 * @var int
 */
const IMG_COLOR_TILED = -5;

/**
 * Special color option which can be used instead of a color allocated with
 * <code>imagecolorallocate</code> or
 * <code>imagecolorallocatealpha</code>.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-color-transparent
 *
 * @var int
 */
const IMG_COLOR_TRANSPARENT = -6;

/**
 * @var int
 */
const IMG_CROP_BLACK = 2;

/**
 * @var int
 */
const IMG_CROP_DEFAULT = 0;

/**
 * @var int
 */
const IMG_CROP_SIDES = 4;

/**
 * @var int
 */
const IMG_CROP_THRESHOLD = 5;

/**
 * @var int
 */
const IMG_CROP_TRANSPARENT = 1;

/**
 * @var int
 */
const IMG_CROP_WHITE = 3;

/**
 * Alpha blending effect used by the <code>imagelayereffect</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-effect-alphablend
 *
 * @var int
 */
const IMG_EFFECT_ALPHABLEND = 1;

/**
 * Alpha blending effect used by the <code>imagelayereffect</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-effect-normal
 *
 * @var int
 */
const IMG_EFFECT_NORMAL = 2;

/**
 * Alpha blending effect used by the <code>imagelayereffect</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-effect-overlay
 *
 * @var int
 */
const IMG_EFFECT_OVERLAY = 3;

/**
 * Alpha blending effect used by the <code>imagelayereffect</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-effect-replace
 *
 * @var int
 */
const IMG_EFFECT_REPLACE = 0;

/**
 * Special GD filter used by the <code>imagefilter</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-filter-brightness
 *
 * @var int
 */
const IMG_FILTER_BRIGHTNESS = 2;

/**
 * Special GD filter used by the <code>imagefilter</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-filter-colorize
 *
 * @var int
 */
const IMG_FILTER_COLORIZE = 4;

/**
 * Special GD filter used by the <code>imagefilter</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-filter-contrast
 *
 * @var int
 */
const IMG_FILTER_CONTRAST = 3;

/**
 * Special GD filter used by the <code>imagefilter</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-filter-edgedetect
 *
 * @var int
 */
const IMG_FILTER_EDGEDETECT = 5;

/**
 * Special GD filter used by the <code>imagefilter</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-filter-emboss
 *
 * @var int
 */
const IMG_FILTER_EMBOSS = 6;

/**
 * Special GD filter used by the <code>imagefilter</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-filter-gaussian-blur
 *
 * @var int
 */
const IMG_FILTER_GAUSSIAN_BLUR = 7;

/**
 * Special GD filter used by the <code>imagefilter</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-filter-grayscale
 *
 * @var int
 */
const IMG_FILTER_GRAYSCALE = 1;

/**
 * Special GD filter used by the <code>imagefilter</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-filter-mean-removal
 *
 * @var int
 */
const IMG_FILTER_MEAN_REMOVAL = 9;

/**
 * Special GD filter used by the <code>imagefilter</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-filter-negate
 *
 * @var int
 */
const IMG_FILTER_NEGATE = 0;

/**
 * Special GD filter used by the <code>imagefilter</code> function.
 * (Available as of PHP 5.3.0)
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-filter-pixelate
 *
 * @var int
 */
const IMG_FILTER_PIXELATE = 11;

/**
 * Special GD filter used by the <code>imagefilter</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-filter-selective-blur
 *
 * @var int
 */
const IMG_FILTER_SELECTIVE_BLUR = 8;

/**
 * Special GD filter used by the <code>imagefilter</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-filter-smooth
 *
 * @var int
 */
const IMG_FILTER_SMOOTH = 10;

/**
 * Used together with <code>imageflip</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-flip-both
 *
 * @var int
 */
const IMG_FLIP_BOTH = 3;

/**
 * Used together with <code>imageflip</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-flip-horizontal
 *
 * @var int
 */
const IMG_FLIP_HORIZONTAL = 1;

/**
 * Used together with <code>imageflip</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-flip-vertical
 *
 * @var int
 */
const IMG_FLIP_VERTICAL = 2;

/**
 * Used together with <code>imagesetinterpolation</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-gaussian
 *
 * @var int
 */
const IMG_GAUSSIAN = 10;

/**
 * A type constant used by the <code>imagegd2</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-gd2-compressed
 *
 * @var int
 */
const IMG_GD2_COMPRESSED = 2;

/**
 * A type constant used by the <code>imagegd2</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-gd2-raw
 *
 * @var int
 */
const IMG_GD2_RAW = 1;

/**
 * Used together with <code>imagesetinterpolation</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-generalized-cubic
 *
 * @var int
 */
const IMG_GENERALIZED_CUBIC = 11;

/**
 * Used as a return value by <code>imagetypes</code>
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-gif
 *
 * @var int
 */
const IMG_GIF = 1;

/**
 * Used together with <code>imagesetinterpolation</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-hamming
 *
 * @var int
 */
const IMG_HAMMING = 13;

/**
 * Used together with <code>imagesetinterpolation</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-hanning
 *
 * @var int
 */
const IMG_HANNING = 14;

/**
 * Used together with <code>imagesetinterpolation</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-hermite
 *
 * @var int
 */
const IMG_HERMITE = 12;

/**
 * Used as a return value by <code>imagetypes</code>
 * <blockquote>
 * This constant has the same value as <code>IMG_JPG</code>
 * </blockquote>
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-jpeg
 *
 * @var int
 */
const IMG_JPEG = 2;

/**
 * Used as a return value by <code>imagetypes</code>
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-jpg
 *
 * @var int
 */
const IMG_JPG = 2;

/**
 * Used together with <code>imagesetinterpolation</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-mitchell
 *
 * @var int
 */
const IMG_MITCHELL = 15;

/**
 * Used together with <code>imagesetinterpolation</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-nearest-neighbour
 *
 * @var int
 */
const IMG_NEAREST_NEIGHBOUR = 16;

/**
 * Used as a return value by <code>imagetypes</code>
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-png
 *
 * @var int
 */
const IMG_PNG = 4;

/**
 * Used together with <code>imagesetinterpolation</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-power
 *
 * @var int
 */
const IMG_POWER = 17;

/**
 * Used together with <code>imagesetinterpolation</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-quadratic
 *
 * @var int
 */
const IMG_QUADRATIC = 18;

/**
 * Used together with <code>imagesetinterpolation</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-sinc
 *
 * @var int
 */
const IMG_SINC = 19;

/**
 * Used together with <code>imagesetinterpolation</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-triangle
 *
 * @var int
 */
const IMG_TRIANGLE = 20;

/**
 * Used as a return value by <code>imagetypes</code>
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-wbmp
 *
 * @var int
 */
const IMG_WBMP = 8;

/**
 * Used as a return value by <code>imagetypes</code>
 * Available as of PHP 5.6.25 and PHP 7.0.10, respectively.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-webp
 *
 * @var int
 */
const IMG_WEBP = 32;

/**
 * Used together with <code>imagesetinterpolation</code>, available as of PHP 5.5.0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-weighted4
 *
 * @var int
 */
const IMG_WEIGHTED4 = 21;

/**
 * Used as a return value by <code>imagetypes</code>
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-xpm
 *
 * @var int
 */
const IMG_XPM = 16;

/**
 * A special PNG filter, used by the <code>imagepng</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.png-all-filters
 *
 * @var int
 */
const PNG_ALL_FILTERS = 248;

/**
 * A special PNG filter, used by the <code>imagepng</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.png-filter-avg
 *
 * @var int
 */
const PNG_FILTER_AVG = 64;

/**
 * A special PNG filter, used by the <code>imagepng</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.png-filter-none
 *
 * @var int
 */
const PNG_FILTER_NONE = 8;

/**
 * A special PNG filter, used by the <code>imagepng</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.png-filter-paeth
 *
 * @var int
 */
const PNG_FILTER_PAETH = 128;

/**
 * A special PNG filter, used by the <code>imagepng</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.png-filter-sub
 *
 * @var int
 */
const PNG_FILTER_SUB = 16;

/**
 * A special PNG filter, used by the <code>imagepng</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.png-filter-up
 *
 * @var int
 */
const PNG_FILTER_UP = 32;

/**
 * A special PNG filter, used by the <code>imagepng</code> function.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.png-no-filter
 *
 * @var int
 */
const PNG_NO_FILTER = 0;

/**
 * Retrieve information about the currently installed GD library
 *
 * @return array Returns an associative array.
 * <table>
 * <title>Elements of array returned by <code>gd_info</code></title>
 * <thead>
 * <tr>
 * <td>Attribute</td><td>Meaning</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>GD Version</td><td><code>string</code> value describing the installed
 * <code>libgd</code> version.</td>
 * </tr>
 * <tr>
 * <td>FreeType Support</td><td><code>boolean</code> value. <code>TRUE</code>
 * if FreeType Support is installed.</td>
 * </tr>
 * <tr>
 * <td>FreeType Linkage</td><td><code>string</code> value describing the way in which
 * FreeType was linked. Expected values are: 'with freetype',
 * 'with TTF library', and 'with unknown library'. This element will
 * only be defined if <code>FreeType Support</code> evaluated to
 * <code>TRUE</code>.</td>
 * </tr>
 * <tr>
 * <td>T1Lib Support</td><td><code>boolean</code> value. <code>TRUE</code>
 * if <code>T1Lib</code> support is included.</td>
 * </tr>
 * <tr>
 * <td>GIF Read Support</td><td><code>boolean</code> value. <code>TRUE</code>
 * if support for <code>reading</code> <code>GIF</code>
 * images is included.</td>
 * </tr>
 * <tr>
 * <td>GIF Create Support</td><td><code>boolean</code> value. <code>TRUE</code>
 * if support for <code>creating</code> <code>GIF</code>
 * images is included.</td>
 * </tr>
 * <tr>
 * <td>JPEG Support</td><td><code>boolean</code> value. <code>TRUE</code>
 * if <code>JPEG</code> support is included.</td>
 * </tr>
 * <tr>
 * <td>PNG Support</td><td><code>boolean</code> value. <code>TRUE</code>
 * if <code>PNG</code> support is included.</td>
 * </tr>
 * <tr>
 * <td>WBMP Support</td><td><code>boolean</code> value. <code>TRUE</code>
 * if <code>WBMP</code> support is included.</td>
 * </tr>
 * <tr>
 * <td>XBM Support</td><td><code>boolean</code> value. <code>TRUE</code>
 * if <code>XBM</code> support is included.</td>
 * </tr>
 * <tr>
 * <td>WebP Support</td><td><code>boolean</code> value. <code>TRUE</code>
 * if <code>WebP</code> support is included.</td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gd-info.php
 */
function gd_info()
{
}

/**
 * Output image to browser or file
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param string $filename Path to the saved file. If not given, the raw image stream will be
 * output directly.
 * @param int $threshold Threshold value, between 0 and 255 (inclusive).
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.image2wbmp.php
 */
function image2wbmp($image, $filename = null, $threshold = null)
{
}

/**
 * Return an image containing the affine transformed src image, using an optional clipping area
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param array $affine Array with keys 0 to 5.
 * @param array $clip Array with keys "x", "y", "width" and "height".
 *
 * @return resource Return affined image resource on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageaffine.php
 */
function imageaffine($image, array $affine, array $clip = null)
{
}

/**
 * Concatenate two affine transformation matrices
 *
 * @param array $m1 An affine transformation matrix (an array with keys
 * <code>0</code> to <code>5</code> and float values).
 * @param array $m2 An affine transformation matrix (an array with keys
 * <code>0</code> to <code>5</code> and float values).
 *
 * @return array An affine transformation matrix (an array with keys
 * <code>0</code> to <code>5</code> and float values)
 * or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageaffinematrixconcat.php
 */
function imageaffinematrixconcat(array $m1, array $m2)
{
}

/**
 * Get an affine transformation matrix
 *
 * @param int $type One of the <code>IMG_AFFINE_*</code> constants.
 * @param mixed $options If <code>type</code> is <code>IMG_AFFINE_TRANSLATE</code>
 * or <code>IMG_AFFINE_SCALE</code>,
 * <code>options</code> has to be an <code>array</code> with keys <code>x</code>
 * and <code>y</code>, both having <code>float</code> values.
 *
 * @return array An affine transformation matrix (an array with keys
 * <code>0</code> to <code>5</code> and float values)
 * or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageaffinematrixget.php
 */
function imageaffinematrixget($type, $options = null)
{
}

/**
 * Set the blending mode for an image
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param bool $blendmode Whether to enable the blending mode or not. On true color images
 * the default value is <code>TRUE</code> otherwise the default value is <code>FALSE</code>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagealphablending.php
 */
function imagealphablending($image, $blendmode)
{
}

/**
 * Should antialias functions be used or not
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param bool $enabled Whether to enable antialiasing or not.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageantialias.php
 */
function imageantialias($image, $enabled)
{
}

/**
 * Draws an arc
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $cx x-coordinate of the center.
 * @param int $cy y-coordinate of the center.
 * @param int $width The arc width.
 * @param int $height The arc height.
 * @param int $start The arc start angle, in degrees.
 * @param int $end The arc end angle, in degrees.
 * 0° is located at the three-o'clock position, and the arc is drawn
 * clockwise.
 * @param int $color A color identifier created with <code>imagecolorallocate</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagearc.php
 */
function imagearc($image, $cx, $cy, $width, $height, $start, $end, $color)
{
}

/**
 * Draw a character horizontally
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $font Can be 1, 2, 3, 4, 5 for built-in
 * fonts in latin2 encoding (where higher numbers corresponding to larger fonts) or any of your
 * own font identifiers registered with <code>imageloadfont</code>.
 * @param int $x x-coordinate of the start.
 * @param int $y y-coordinate of the start.
 * @param string $c The character to draw.
 * @param int $color A color identifier created with <code>imagecolorallocate</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagechar.php
 */
function imagechar($image, $font, $x, $y, $c, $color)
{
}

/**
 * Draw a character vertically
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $font Can be 1, 2, 3, 4, 5 for built-in
 * fonts in latin2 encoding (where higher numbers corresponding to larger fonts) or any of your
 * own font identifiers registered with <code>imageloadfont</code>.
 * @param int $x x-coordinate of the start.
 * @param int $y y-coordinate of the start.
 * @param string $c The character to draw.
 * @param int $color A color identifier created with <code>imagecolorallocate</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecharup.php
 */
function imagecharup($image, $font, $x, $y, $c, $color)
{
}

/**
 * Allocate a color for an image
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $red Value of red component.
 * @param int $green Value of green component.
 * @param int $blue Value of blue component.
 *
 * @return int A color identifier or <code>FALSE</code> if the allocation failed.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorallocate.php
 */
function imagecolorallocate($image, $red, $green, $blue)
{
}

/**
 * Allocate a color for an image
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $red Value of red component.
 * @param int $green Value of green component.
 * @param int $blue Value of blue component.
 * @param int $alpha A value between <code>0</code> and <code>127</code>.
 * <code>0</code> indicates completely opaque while
 * <code>127</code> indicates completely transparent.
 *
 * @return int A color identifier or <code>FALSE</code> if the allocation failed.
 *
 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorallocatealpha.php
 */
function imagecolorallocatealpha($image, $red, $green, $blue, $alpha)
{
}

/**
 * Get the index of the color of a pixel
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $x x-coordinate of the point.
 * @param int $y y-coordinate of the point.
 *
 * @return int Returns the index of the color or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorat.php
 */
function imagecolorat($image, $x, $y)
{
}

/**
 * Get the index of the closest color to the specified color
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $red Value of red component.
 * @param int $green Value of green component.
 * @param int $blue Value of blue component.
 *
 * @return int Returns the index of the closest color, in the palette of the image, to
 * the specified one
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorclosest.php
 */
function imagecolorclosest($image, $red, $green, $blue)
{
}

/**
 * Get the index of the closest color to the specified color + alpha
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $red Value of red component.
 * @param int $green Value of green component.
 * @param int $blue Value of blue component.
 * @param int $alpha A value between <code>0</code> and <code>127</code>.
 * <code>0</code> indicates completely opaque while
 * <code>127</code> indicates completely transparent.
 *
 * @return int Returns the index of the closest color in the palette.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorclosestalpha.php
 */
function imagecolorclosestalpha($image, $red, $green, $blue, $alpha)
{
}

/**
 * Get the index of the color which has the hue, white and blackness
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $red Value of red component.
 * @param int $green Value of green component.
 * @param int $blue Value of blue component.
 *
 * @return int Returns an integer with the index of the color which has
 * the hue, white and blackness nearest the given color.
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorclosesthwb.php
 */
function imagecolorclosesthwb($image, $red, $green, $blue)
{
}

/**
 * De-allocate a color for an image
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $color The color identifier.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolordeallocate.php
 */
function imagecolordeallocate($image, $color)
{
}

/**
 * Get the index of the specified color
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $red Value of red component.
 * @param int $green Value of green component.
 * @param int $blue Value of blue component.
 *
 * @return int Returns the index of the specified color in the palette, or -1 if the
 * color does not exist.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorexact.php
 */
function imagecolorexact($image, $red, $green, $blue)
{
}

/**
 * Get the index of the specified color + alpha
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $red Value of red component.
 * @param int $green Value of green component.
 * @param int $blue Value of blue component.
 * @param int $alpha A value between <code>0</code> and <code>127</code>.
 * <code>0</code> indicates completely opaque while
 * <code>127</code> indicates completely transparent.
 *
 * @return int Returns the index of the specified color+alpha in the palette of the
 * image, or -1 if the color does not exist in the image's palette.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorexactalpha.php
 */
function imagecolorexactalpha($image, $red, $green, $blue, $alpha)
{
}

/**
 * Makes the colors of the palette version of an image more closely match the true color version
 *
 * @param resource $image1 A truecolor image link resource.
 * @param resource $image2 A palette image link resource pointing to an image that has the same
 * size as <code>image1</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolormatch.php
 */
function imagecolormatch($image1, $image2)
{
}

/**
 * Get the index of the specified color or its closest possible alternative
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $red Value of red component.
 * @param int $green Value of green component.
 * @param int $blue Value of blue component.
 *
 * @return int Returns a color index.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorresolve.php
 */
function imagecolorresolve($image, $red, $green, $blue)
{
}

/**
 * Get the index of the specified color + alpha or its closest possible alternative
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $red Value of red component.
 * @param int $green Value of green component.
 * @param int $blue Value of blue component.
 * @param int $alpha A value between <code>0</code> and <code>127</code>.
 * <code>0</code> indicates completely opaque while
 * <code>127</code> indicates completely transparent.
 *
 * @return int Returns a color index.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorresolvealpha.php
 */
function imagecolorresolvealpha($image, $red, $green, $blue, $alpha)
{
}

/**
 * Set the color for the specified palette index
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $index An index in the palette.
 * @param int $red Value of red component.
 * @param int $green Value of green component.
 * @param int $blue Value of blue component.
 * @param int|null $alpha Value of alpha component.
 *
 * @return void No value is returned.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorset.php
 */
function imagecolorset($image, $index, $red, $green, $blue, $alpha = 0)
{
}

/**
 * Get the colors for an index
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $index The color index.
 *
 * @return array Returns an associative array with red, green, blue and alpha keys that
 * contain the appropriate values for the specified color index.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorsforindex.php
 */
function imagecolorsforindex($image, $index)
{
}

/**
 * Find out the number of colors in an image's palette
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 *
 * @return int Returns the number of colors in the specified image's palette or 0 for
 * truecolor images.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorstotal.php
 */
function imagecolorstotal($image)
{
}

/**
 * Define a color as transparent
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $color A color identifier created with <code>imagecolorallocate</code>.
 *
 * @return int The identifier of the new (or current, if none is specified)
 * transparent color is returned. If <code>color</code>
 * is not specified, and the image has no transparent color, the
 * returned identifier will be -1.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolortransparent.php
 */
function imagecolortransparent($image, $color = null)
{
}

/**
 * Apply a 3x3 convolution matrix, using coefficient and offset
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param array $matrix A 3x3 matrix: an array of three arrays of three floats.
 * @param float $div The divisor of the result of the convolution, used for normalization.
 * @param float $offset Color offset.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageconvolution.php
 */
function imageconvolution($image, array $matrix, $div, $offset)
{
}

/**
 * Copy part of an image
 *
 * @param resource $dst_im Destination image link resource.
 * @param resource $src_im Source image link resource.
 * @param int $dst_x x-coordinate of destination point.
 * @param int $dst_y y-coordinate of destination point.
 * @param int $src_x x-coordinate of source point.
 * @param int $src_y y-coordinate of source point.
 * @param int $src_w Source width.
 * @param int $src_h Source height.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecopy.php
 */
function imagecopy($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h)
{
}

/**
 * Copy and merge part of an image
 *
 * @param resource $dst_im Destination image link resource.
 * @param resource $src_im Source image link resource.
 * @param int $dst_x x-coordinate of destination point.
 * @param int $dst_y y-coordinate of destination point.
 * @param int $src_x x-coordinate of source point.
 * @param int $src_y y-coordinate of source point.
 * @param int $src_w Source width.
 * @param int $src_h Source height.
 * @param int $pct The two images will be merged according to <code>pct</code>
 * which can range from 0 to 100. When <code>pct</code> = 0,
 * no action is taken, when 100 this function behaves identically
 * to <code>imagecopy</code> for pallete images, except for
 * ignoring alpha components, while it implements alpha transparency
 * for true colour images.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecopymerge.php
 */
function imagecopymerge($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct)
{
}

/**
 * Copy and merge part of an image with gray scale
 *
 * @param resource $dst_im Destination image link resource.
 * @param resource $src_im Source image link resource.
 * @param int $dst_x x-coordinate of destination point.
 * @param int $dst_y y-coordinate of destination point.
 * @param int $src_x x-coordinate of source point.
 * @param int $src_y y-coordinate of source point.
 * @param int $src_w Source width.
 * @param int $src_h Source height.
 * @param int $pct The <code>src_im</code> will be changed to grayscale according
 * to <code>pct</code> where 0 is fully grayscale and 100 is
 * unchanged. When <code>pct</code> = 100 this function behaves
 * identically to <code>imagecopy</code> for pallete images, except for
 * ignoring alpha components, while
 * it implements alpha transparency for true colour images.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecopymergegray.php
 */
function imagecopymergegray($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct)
{
}

/**
 * Copy and resize part of an image with resampling
 *
 * @param resource $dst_image Destination image link resource.
 * @param resource $src_image Source image link resource.
 * @param int $dst_x x-coordinate of destination point.
 * @param int $dst_y y-coordinate of destination point.
 * @param int $src_x x-coordinate of source point.
 * @param int $src_y y-coordinate of source point.
 * @param int $dst_w Destination width.
 * @param int $dst_h Destination height.
 * @param int $src_w Source width.
 * @param int $src_h Source height.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecopyresampled.php
 */
function imagecopyresampled($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h)
{
}

/**
 * Copy and resize part of an image
 *
 * @param resource $dst_image Destination image link resource.
 * @param resource $src_image Source image link resource.
 * @param int $dst_x x-coordinate of destination point.
 * @param int $dst_y y-coordinate of destination point.
 * @param int $src_x x-coordinate of source point.
 * @param int $src_y y-coordinate of source point.
 * @param int $dst_w Destination width.
 * @param int $dst_h Destination height.
 * @param int $src_w Source width.
 * @param int $src_h Source height.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecopyresized.php
 */
function imagecopyresized($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h)
{
}

/**
 * Create a new palette based image
 *
 * @param int $width The image width.
 * @param int $height The image height.
 *
 * @return resource Returns an image resource identifier on success, <code>FALSE</code> on errors.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecreate.php
 */
function imagecreate($width, $height)
{
}

/**
 * Create a new image from GD file or URL
 *
 * @param string $filename Path to the GD file.
 *
 * @return resource Returns an image resource identifier on success, <code>FALSE</code> on errors.
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecreatefromgd.php
 */
function imagecreatefromgd($filename)
{
}

/**
 * Create a new image from GD2 file or URL
 *
 * @param string $filename Path to the GD2 image.
 *
 * @return resource Returns an image resource identifier on success, <code>FALSE</code> on errors.
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecreatefromgd2.php
 */
function imagecreatefromgd2($filename)
{
}

/**
 * Create a new image from a given part of GD2 file or URL
 *
 * @param string $filename Path to the GD2 image.
 * @param int $srcX x-coordinate of source point.
 * @param int $srcY y-coordinate of source point.
 * @param int $width Source width.
 * @param int $height Source height.
 *
 * @return resource Returns an image resource identifier on success, <code>FALSE</code> on errors.
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecreatefromgd2part.php
 */
function imagecreatefromgd2part($filename, $srcX, $srcY, $width, $height)
{
}

/**
 * Create a new image from file or URL
 *
 * @param string $filename Path to the GIF image.
 *
 * @return resource Returns an image resource identifier on success, <code>FALSE</code> on errors.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecreatefromgif.php
 */
function imagecreatefromgif($filename)
{
}

/**
 * Create a new image from file or URL
 *
 * @param string $filename Path to the JPEG image.
 *
 * @return resource Returns an image resource identifier on success, <code>FALSE</code> on errors.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecreatefromjpeg.php
 */
function imagecreatefromjpeg($filename)
{
}

/**
 * Create a new image from file or URL
 *
 * @param string $filename Path to the PNG image.
 *
 * @return resource Returns an image resource identifier on success, <code>FALSE</code> on errors.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecreatefrompng.php
 */
function imagecreatefrompng($filename)
{
}

/**
 * Create a new image from the image stream in the string
 *
 * @param string $image A string containing the image data.
 *
 * @return resource An image resource will be returned on success. <code>FALSE</code> is returned if
 * the image type is unsupported, the data is not in a recognised format,
 * or the image is corrupt and cannot be loaded.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecreatefromstring.php
 */
function imagecreatefromstring($image)
{
}

/**
 * Create a new image from file or URL
 *
 * @param string $filename Path to the WBMP image.
 *
 * @return resource Returns an image resource identifier on success, <code>FALSE</code> on errors.
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecreatefromwbmp.php
 */
function imagecreatefromwbmp($filename)
{
}

/**
 * Create a new image from file or URL
 *
 * @param string $filename Path to the WebP image.
 *
 * @return resource Returns an image resource identifier on success, <code>FALSE</code> on errors.
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecreatefromwebp.php
 */
function imagecreatefromwebp($filename)
{
}

/**
 * Create a new image from file or URL
 *
 * @param string $filename Path to the XBM image.
 *
 * @return resource Returns an image resource identifier on success, <code>FALSE</code> on errors.
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecreatefromxbm.php
 */
function imagecreatefromxbm($filename)
{
}

/**
 * Create a new image from file or URL
 *
 * @param string $filename Path to the XPM image.
 *
 * @return resource Returns an image resource identifier on success, <code>FALSE</code> on errors.
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecreatefromxpm.php
 */
function imagecreatefromxpm($filename)
{
}

/**
 * Create a new true color image
 *
 * @param int $width Image width.
 * @param int $height Image height.
 *
 * @return resource Returns an image resource identifier on success, <code>FALSE</code> on errors.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecreatetruecolor.php
 */
function imagecreatetruecolor($width, $height)
{
}

/**
 * Crop an image to the given rectangle
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param array $rect The cropping rectangle as <code>array</code> with keys
 * <code>x</code>, <code>y</code>, <code>width</code> and
 * <code>height</code>.
 *
 * @return resource Return cropped image resource on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecrop.php
 */
function imagecrop($image, array $rect)
{
}

/**
 * Crop an image automatically using one of the available modes
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int|null $mode One of the following constants:
 * @param float|null $threshold Specifies the tolerance in percent to be used while comparing the image
 * color and the color to crop. The method used to calculate the color
 * difference is based on the color distance in the RGB(a) cube.
 * @param int|null $color Either an RGB color value or a palette index.
 *
 * @return resource Returns a cropped image resource on success or <code>FALSE</code> on failure.
 * If no cropping would occur, or the complete image would be cropped, that is
 * treated as failure, i.e. <code>imagecrop</code> returns <code>FALSE</code>.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecropauto.php
 */
function imagecropauto($image, $mode = -1, $threshold = .5, $color = -1)
{
}

/**
 * Draw a dashed line
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $x1 Upper left x coordinate.
 * @param int $y1 Upper left y coordinate 0, 0 is the top left corner of the image.
 * @param int $x2 Bottom right x coordinate.
 * @param int $y2 Bottom right y coordinate.
 * @param int $color The fill color. A color identifier created with <code>imagecolorallocate</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagedashedline.php
 */
function imagedashedline($image, $x1, $y1, $x2, $y2, $color)
{
}

/**
 * Destroy an image
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagedestroy.php
 */
function imagedestroy($image)
{
}

/**
 * Draw an ellipse
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $cx x-coordinate of the center.
 * @param int $cy y-coordinate of the center.
 * @param int $width The ellipse width.
 * @param int $height The ellipse height.
 * @param int $color The color of the ellipse. A color identifier created with <code>imagecolorallocate</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageellipse.php
 */
function imageellipse($image, $cx, $cy, $width, $height, $color)
{
}

/**
 * Flood fill
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $x x-coordinate of start point.
 * @param int $y y-coordinate of start point.
 * @param int $color The fill color. A color identifier created with <code>imagecolorallocate</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagefill.php
 */
function imagefill($image, $x, $y, $color)
{
}

/**
 * Draw a partial arc and fill it
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $cx x-coordinate of the center.
 * @param int $cy y-coordinate of the center.
 * @param int $width The arc width.
 * @param int $height The arc height.
 * @param int $start The arc start angle, in degrees.
 * @param int $end The arc end angle, in degrees.
 * 0° is located at the three-o'clock position, and the arc is drawn
 * clockwise.
 * @param int $color A color identifier created with <code>imagecolorallocate</code>.
 * @param int $style A bitwise OR of the following possibilities:
 * <orderedlist>
 * <code>IMG_ARC_PIE</code>
 * <code>IMG_ARC_CHORD</code>
 * <code>IMG_ARC_NOFILL</code>
 * <code>IMG_ARC_EDGED</code>
 * </orderedlist>
 * <code>IMG_ARC_PIE</code> and <code>IMG_ARC_CHORD</code> are
 * mutually exclusive; <code>IMG_ARC_CHORD</code> just
 * connects the starting and ending angles with a straight line, while
 * <code>IMG_ARC_PIE</code> produces a rounded edge.
 * <code>IMG_ARC_NOFILL</code> indicates that the arc
 * or chord should be outlined, not filled. <code>IMG_ARC_EDGED</code>,
 * used together with <code>IMG_ARC_NOFILL</code>, indicates that the
 * beginning and ending angles should be connected to the center - this is a
 * good way to outline (rather than fill) a 'pie slice'.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagefilledarc.php
 */
function imagefilledarc($image, $cx, $cy, $width, $height, $start, $end, $color, $style)
{
}

/**
 * Draw a filled ellipse
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $cx x-coordinate of the center.
 * @param int $cy y-coordinate of the center.
 * @param int $width The ellipse width.
 * @param int $height The ellipse height.
 * @param int $color The fill color. A color identifier created with <code>imagecolorallocate</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagefilledellipse.php
 */
function imagefilledellipse($image, $cx, $cy, $width, $height, $color)
{
}

/**
 * Draw a filled polygon
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param array $points An array containing the <code>x</code> and <code>y</code>
 * coordinates of the polygons vertices consecutively.
 * @param int $num_points Total number of vertices, which must be at least 3.
 * @param int $color A color identifier created with <code>imagecolorallocate</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagefilledpolygon.php
 */
function imagefilledpolygon($image, array $points, $num_points, $color)
{
}

/**
 * Draw a filled rectangle
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $x1 x-coordinate for point 1.
 * @param int $y1 y-coordinate for point 1.
 * @param int $x2 x-coordinate for point 2.
 * @param int $y2 y-coordinate for point 2.
 * @param int $color The fill color. A color identifier created with <code>imagecolorallocate</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagefilledrectangle.php
 */
function imagefilledrectangle($image, $x1, $y1, $x2, $y2, $color)
{
}

/**
 * Flood fill to specific color
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $x x-coordinate of start.
 * @param int $y y-coordinate of start.
 * @param int $border The border color. A color identifier created with <code>imagecolorallocate</code>.
 * @param int $color The fill color. A color identifier created with <code>imagecolorallocate</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagefilltoborder.php
 */
function imagefilltoborder($image, $x, $y, $border, $color)
{
}

/**
 * Applies a filter to an image
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $filtertype <code>filtertype</code> can be one of the following:
 * <ul>
 * <code>IMG_FILTER_NEGATE</code>: Reverses all colors of
 * the image.
 * <code>IMG_FILTER_GRAYSCALE</code>: Converts the image into
 * grayscale by changing the red, green and blue components to their
 * weighted sum using the same coefficients as the REC.601 luma (Y')
 * calculation. The alpha components are retained. For palette images the
 * result may differ due to palette limitations.
 * <code>IMG_FILTER_BRIGHTNESS</code>: Changes the brightness
 * of the image. Use <code>arg1</code> to set the level of
 * brightness. The range for the brightness is -255 to 255.
 * <code>IMG_FILTER_CONTRAST</code>: Changes the contrast of
 * the image. Use <code>arg1</code> to set the level of
 * contrast.
 * <code>IMG_FILTER_COLORIZE</code>: Like
 * <code>IMG_FILTER_GRAYSCALE</code>, except you can specify the
 * color. Use <code>arg1</code>, <code>arg2</code> and
 * <code>arg3</code> in the form of
 * <code>red</code>, <code>green</code>,
 * <code>blue</code> and <code>arg4</code> for the
 * <code>alpha</code> channel. The range for each color is 0 to 255.
 * <code>IMG_FILTER_EDGEDETECT</code>: Uses edge detection to
 * highlight the edges in the image.
 * <code>IMG_FILTER_EMBOSS</code>: Embosses the image.
 * <code>IMG_FILTER_GAUSSIAN_BLUR</code>: Blurs the image using
 * the Gaussian method.
 * <code>IMG_FILTER_SELECTIVE_BLUR</code>: Blurs the image.
 * <code>IMG_FILTER_MEAN_REMOVAL</code>: Uses mean removal to
 * achieve a "sketchy" effect.
 * <code>IMG_FILTER_SMOOTH</code>: Makes the image smoother.
 * Use <code>arg1</code> to set the level of smoothness.
 * <code>IMG_FILTER_PIXELATE</code>: Applies pixelation effect
 * to the image, use <code>arg1</code> to set the block size
 * and <code>arg2</code> to set the pixelation effect mode.
 * </ul>
 * @param int $arg1 <ul>
 * <code>IMG_FILTER_BRIGHTNESS</code>: Brightness level.
 * <code>IMG_FILTER_CONTRAST</code>: Contrast level.
 * <code>IMG_FILTER_COLORIZE</code>: Value of red component.
 * <code>IMG_FILTER_SMOOTH</code>: Smoothness level.
 * <code>IMG_FILTER_PIXELATE</code>: Block size in pixels.
 * </ul>
 * @param int $arg2 <ul>
 * <code>IMG_FILTER_COLORIZE</code>: Value of green component.
 * <code>IMG_FILTER_PIXELATE</code>: Whether to use advanced pixelation
 * effect or not (defaults to <code>FALSE</code>).
 * </ul>
 * @param int $arg3 <ul>
 * <code>IMG_FILTER_COLORIZE</code>: Value of blue component.
 * </ul>
 * @param int $arg4 <ul>
 * <code>IMG_FILTER_COLORIZE</code>: Alpha channel, A value
 * between 0 and 127. 0 indicates completely opaque while 127 indicates
 * completely transparent.
 * </ul>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagefilter.php
 */
function imagefilter($image, $filtertype, $arg1 = null, $arg2 = null, $arg3 = null, $arg4 = null)
{
}

/**
 * Flips an image using a given mode
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $mode Flip mode, this can be one of the <code>IMG_FLIP_*</code> constants:
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageflip.php
 */
function imageflip($image, $mode)
{
}

/**
 * Get font height
 *
 * @param int $font Can be 1, 2, 3, 4, 5 for built-in
 * fonts in latin2 encoding (where higher numbers corresponding to larger fonts) or any of your
 * own font identifiers registered with <code>imageloadfont</code>.
 *
 * @return int Returns the pixel height of the font.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagefontheight.php
 */
function imagefontheight($font)
{
}

/**
 * Get font width
 *
 * @param int $font Can be 1, 2, 3, 4, 5 for built-in
 * fonts in latin2 encoding (where higher numbers corresponding to larger fonts) or any of your
 * own font identifiers registered with <code>imageloadfont</code>.
 *
 * @return int Returns the pixel width of the font.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagefontwidth.php
 */
function imagefontwidth($font)
{
}

/**
 * Give the bounding box of a text using fonts via freetype2
 *
 * @param float $size The font size in points.
 * @param float $angle Angle in degrees in which <code>text</code> will be
 * measured.
 * @param string $fontfile The name of the TrueType font file (can be a URL). Depending on
 * which version of the GD library that PHP is using, it may attempt to
 * search for files that do not begin with a leading '/' by appending
 * '.ttf' to the filename and searching along a library-defined font path.
 * @param string $text The string to be measured.
 * @param array $extrainfo <table>
 * <title>Possible array indexes for <code>extrainfo</code></title>
 * <thead>
 * <tr>
 * <td>Key</td><td>Type</td><td>Meaning</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td><code>linespacing</code></td><td><code>float</code></td><td>Defines drawing linespacing</td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @return array <code>imageftbbox</code> returns an array with 8
 * elements representing four points making the bounding box of the
 * text:
 * <table>
 * <tbody>
 * <tr>
 * <td>0</td><td>lower left corner, X position</td>
 * </tr>
 * <tr>
 * <td>1</td><td>lower left corner, Y position</td>
 * </tr>
 * <tr>
 * <td>2</td><td>lower right corner, X position</td>
 * </tr>
 * <tr>
 * <td>3</td><td>lower right corner, Y position</td>
 * </tr>
 * <tr>
 * <td>4</td><td>upper right corner, X position</td>
 * </tr>
 * <tr>
 * <td>5</td><td>upper right corner, Y position</td>
 * </tr>
 * <tr>
 * <td>6</td><td>upper left corner, X position</td>
 * </tr>
 * <tr>
 * <td>7</td><td>upper left corner, Y position</td>
 * </tr>
 * </tbody>
 * </table>
 * The points are relative to the <code>text</code> regardless of the
 * <code>angle</code>, so "upper left" means in the top left-hand
 * corner seeing the text horizontally.
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageftbbox.php
 */
function imageftbbox($size, $angle, $fontfile, $text, array $extrainfo = null)
{
}

/**
 * Write text to the image using fonts using FreeType 2
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param float $size The font size to use in points.
 * @param float $angle The angle in degrees, with 0 degrees being left-to-right reading text.
 * Higher values represent a counter-clockwise rotation. For example, a
 * value of 90 would result in bottom-to-top reading text.
 * @param int $x The coordinates given by <code>x</code> and
 * <code>y</code> will define the basepoint of the first
 * character (roughly the lower-left corner of the character). This
 * is different from the <code>imagestring</code>, where
 * <code>x</code> and <code>y</code> define the
 * upper-left corner of the first character. For example, "top left"
 * is 0, 0.
 * @param int $y The y-ordinate. This sets the position of the fonts baseline, not the
 * very bottom of the character.
 * @param int $color The index of the desired color for the text, see
 * <code>imagecolorexact</code>.
 * @param string $fontfile The path to the TrueType font you wish to use.
 * @param string $text Text to be inserted into image.
 * @param array $extrainfo <table>
 * <title>Possible array indexes for <code>extrainfo</code></title>
 * <thead>
 * <tr>
 * <td>Key</td><td>Type</td><td>Meaning</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td><code>linespacing</code></td><td><code>float</code></td><td>Defines drawing linespacing</td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @return array This function returns an array defining the four points of the box, starting in the lower left and moving counter-clockwise:
 * <table>
 * <tbody>
 * <tr>
 * <td>0</td><td>lower left x-coordinate</td>
 * </tr>
 * <tr>
 * <td>1</td><td>lower left y-coordinate</td>
 * </tr>
 * <tr>
 * <td>2</td><td>lower right x-coordinate</td>
 * </tr>
 * <tr>
 * <td>3</td><td>lower right y-coordinate</td>
 * </tr>
 * <tr>
 * <td>4</td><td>upper right x-coordinate</td>
 * </tr>
 * <tr>
 * <td>5</td><td>upper right y-coordinate</td>
 * </tr>
 * <tr>
 * <td>6</td><td>upper left x-coordinate</td>
 * </tr>
 * <tr>
 * <td>7</td><td>upper left y-coordinate</td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagefttext.php
 */
function imagefttext($image, $size, $angle, $x, $y, $color, $fontfile, $text, array $extrainfo = null)
{
}

/**
 * Apply a gamma correction to a GD image
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param float $inputgamma The input gamma.
 * @param float $outputgamma The output gamma.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagegammacorrect.php
 */
function imagegammacorrect($image, $inputgamma, $outputgamma)
{
}

/**
 * Output GD image to browser or file
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param mixed|null $to The path or an open stream resource (which is automatically being closed after this function returns) to save the file to. If not set or <code>NULL</code>, the raw image stream will be outputted directly.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagegd.php
 */
function imagegd($image, $to = null)
{
}

/**
 * Output GD2 image to browser or file
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param mixed|null $to The path or an open stream resource (which is automatically being closed after this function returns) to save the file to. If not set or <code>NULL</code>, the raw image stream will be outputted directly.
 * @param int|null $chunk_size Chunk size.
 * @param int|null $type Either <code>IMG_GD2_RAW</code> or
 * <code>IMG_GD2_COMPRESSED</code>. Default is
 * <code>IMG_GD2_RAW</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagegd2.php
 */
function imagegd2($image, $to = null, $chunk_size = 128, $type = IMG_GD2_RAW)
{
}

/**
 * Output image to browser or file
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param mixed $to The path or an open stream resource (which is automatically being closed after this function returns) to save the file to. If not set or <code>NULL</code>, the raw image stream will be outputted directly.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagegif.php
 */
function imagegif($image, $to = null)
{
}

/**
 * Captures the whole screen
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @return resource Returns an image resource identifier on success, <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.2, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagegrabscreen.php
 */
function imagegrabscreen()
{
}

/**
 * Captures a window
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @param int $window_handle The HWND window ID.
 * @param int|null $client_area Include the client area of the application window.
 *
 * @return resource Returns an image resource identifier on success, <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.2, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagegrabwindow.php
 */
function imagegrabwindow($window_handle, $client_area = 0)
{
}

/**
 * Enable or disable interlace
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int|null $interlace If non-zero, the image will be interlaced, else the interlace bit is
 * turned off.
 *
 * @return int Returns 1 if the interlace bit is set for the image, 0 otherwise.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageinterlace.php
 */
function imageinterlace($image, $interlace = 0)
{
}

/**
 * Finds whether an image is a truecolor image
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 *
 * @return bool Returns <code>TRUE</code> if the <code>image</code> is truecolor, <code>FALSE</code>
 * otherwise.
 *
 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageistruecolor.php
 */
function imageistruecolor($image)
{
}

/**
 * Output image to browser or file
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param mixed $to The path or an open stream resource (which is automatically being closed after this function returns) to save the file to. If not set or <code>NULL</code>, the raw image stream will be outputted directly.
 * @param int $quality <code>quality</code> is optional, and ranges from 0 (worst
 * quality, smaller file) to 100 (best quality, biggest file). The
 * default is the default IJG quality value (about 75).
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagejpeg.php
 */
function imagejpeg($image, $to = null, $quality = null)
{
}

/**
 * Set the alpha blending flag to use layering effects
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $effect One of the following constants:
 * <ul>
 * <li>
 * <code><code>IMG_EFFECT_REPLACE</code></code>
 * Use pixel replacement (equivalent of passing <code>TRUE</code> to
 * <code>imagealphablending</code>)
 * </li>
 * <li>
 * <code><code>IMG_EFFECT_ALPHABLEND</code></code>
 * Use normal pixel blending (equivalent of passing <code>FALSE</code> to
 * <code>imagealphablending</code>)
 * </li>
 * <li>
 * <code><code>IMG_EFFECT_NORMAL</code></code>
 * Same as <code>IMG_EFFECT_ALPHABLEND</code>.
 * </li>
 * <li>
 * <code><code>IMG_EFFECT_OVERLAY</code></code>
 * Overlay has the effect that black background pixels will remain
 * black, white background pixels will remain white, but grey
 * background pixels will take the colour of the foreground pixel.
 * </li>
 * <li>
 * <code><code>IMG_EFFECT_MULTIPLY</code></code>
 * Overlays with a multiply effect.
 * </li>
 * </ul>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagelayereffect.php
 */
function imagelayereffect($image, $effect)
{
}

/**
 * Draw a line
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $x1 x-coordinate for first point.
 * @param int $y1 y-coordinate for first point.
 * @param int $x2 x-coordinate for second point.
 * @param int $y2 y-coordinate for second point.
 * @param int $color The line color. A color identifier created with <code>imagecolorallocate</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageline.php
 */
function imageline($image, $x1, $y1, $x2, $y2, $color)
{
}

/**
 * Load a new font
 *
 * @param string $file The font file format is currently binary and architecture
 * dependent. This means you should generate the font files on the
 * same type of CPU as the machine you are running PHP on.
 *
 * @return int The font identifier which is always bigger than 5 to avoid conflicts with
 * built-in fonts or <code>FALSE</code> on errors.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageloadfont.php
 */
function imageloadfont($file)
{
}

/**
 * Copy the palette from one image to another
 *
 * @param resource $destination The destination image resource.
 * @param resource $source The source image resource.
 *
 * @return void No value is returned.
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagepalettecopy.php
 */
function imagepalettecopy($destination, $source)
{
}

/**
 * Converts a palette based image to true color
 *
 * @param resource $src
 *
 * @return bool Returns <code>TRUE</code> if the convertion was complete, or if the source image already
 * is a true color image, otherwise <code>FALSE</code> is returned.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagepalettetotruecolor.php
 */
function imagepalettetotruecolor($src)
{
}

/**
 * Output a PNG image to either the browser or a file
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param mixed $to The path or an open stream resource (which is automatically being closed after this function returns) to save the file to. If not set or <code>NULL</code>, the raw image stream will be outputted directly.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagepng.php
 */
function imagepng($image, $to = null)
{
}

/**
 * Draws a polygon
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param array $points An array containing the polygon's vertices, e.g.:
 * <table>
 * <tbody>
 * <tr>
 * <td>points[0]</td><td>= x0</td>
 * </tr>
 * <tr>
 * <td>points[1]</td><td>= y0</td>
 * </tr>
 * <tr>
 * <td>points[2]</td><td>= x1</td>
 * </tr>
 * <tr>
 * <td>points[3]</td><td>= y1</td>
 * </tr>
 * </tbody>
 * </table>
 * @param int $num_points Total number of points (vertices).
 * @param int $color A color identifier created with <code>imagecolorallocate</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagepolygon.php
 */
function imagepolygon($image, array $points, $num_points, $color)
{
}

/**
 * Draw a rectangle
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $x1 Upper left x coordinate.
 * @param int $y1 Upper left y coordinate
 * 0, 0 is the top left corner of the image.
 * @param int $x2 Bottom right x coordinate.
 * @param int $y2 Bottom right y coordinate.
 * @param int $color A color identifier created with <code>imagecolorallocate</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagerectangle.php
 */
function imagerectangle($image, $x1, $y1, $x2, $y2, $color)
{
}

/**
 * Rotate an image with a given angle
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param float $angle Rotation angle, in degrees. The rotation angle is interpreted as the
 * number of degrees to rotate the image anticlockwise.
 * @param int $bgd_color Specifies the color of the uncovered zone after the rotation
 * @param int|null $ignore_transparent If set and non-zero, transparent colors are ignored (otherwise kept).
 *
 * @return resource Returns an image resource for the rotated image, or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagerotate.php
 */
function imagerotate($image, $angle, $bgd_color, $ignore_transparent = 0)
{
}

/**
 * Set the flag to save full alpha channel information (as opposed to single-color transparency) when saving PNG images
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param bool $saveflag Whether to save the alpha channel or not. Default to <code>FALSE</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagesavealpha.php
 */
function imagesavealpha($image, $saveflag)
{
}

/**
 * Scale an image using the given new width and height
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $new_width The width to scale the image to.
 * @param int|null $new_height The height to scale the image to. If omitted or negative, the aspect
 * ratio will be preserved.
 * @param int|null $mode One of <code>IMG_NEAREST_NEIGHBOUR</code>,
 * <code>IMG_BILINEAR_FIXED</code>,
 * <code>IMG_BICUBIC</code>,
 * <code>IMG_BICUBIC_FIXED</code> or anything else (will use two
 * pass).
 * <blockquote>
 * <code>IMG_WEIGHTED4</code> is not yet supported.
 * </blockquote>
 *
 * @return resource Return the scaled image resource on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagescale.php
 */
function imagescale($image, $new_width, $new_height = -1, $mode = IMG_BILINEAR_FIXED)
{
}

/**
 * Set the brush image for line drawing
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param resource $brush An image resource.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagesetbrush.php
 */
function imagesetbrush($image, $brush)
{
}

/**
 * Set the interpolation method
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int|null $method The interpolation method, which can be one of the following:
 * <ul>
 * <code>IMG_BELL</code>: Bell filter.
 * <code>IMG_BESSEL</code>: Bessel filter.
 * <code>IMG_BICUBIC</code>: Bicubic interpolation.
 * <code>IMG_BICUBIC_FIXED</code>: Fixed point implementation of the bicubic interpolation.
 * <code>IMG_BILINEAR_FIXED</code>: Fixed point implementation of the bilinear interpolation (<code>default (also on image creation)</code>).
 * <code>IMG_BLACKMAN</code>: Blackman window function.
 * <code>IMG_BOX</code>: Box blur filter.
 * <code>IMG_BSPLINE</code>: Spline interpolation.
 * <code>IMG_CATMULLROM</code>: Cubic Hermite spline interpolation.
 * <code>IMG_GAUSSIAN</code>: Gaussian function.
 * <code>IMG_GENERALIZED_CUBIC</code>: Generalized cubic spline fractal interpolation.
 * <code>IMG_HERMITE</code>: Hermite interpolation.
 * <code>IMG_HAMMING</code>: Hamming filter.
 * <code>IMG_HANNING</code>: Hanning filter.
 * <code>IMG_MITCHELL</code>: Mitchell filter.
 * <code>IMG_POWER</code>: Power interpolation.
 * <code>IMG_QUADRATIC</code>: Inverse quadratic interpolation.
 * <code>IMG_SINC</code>: Sinc function.
 * <code>IMG_NEAREST_NEIGHBOUR</code>: Nearest neighbour interpolation.
 * <code>IMG_WEIGHTED4</code>: Weighting filter.
 * <code>IMG_TRIANGLE</code>: Triangle interpolation.
 * </ul>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagesetinterpolation.php
 */
function imagesetinterpolation($image, $method = IMG_BILINEAR_FIXED)
{
}

/**
 * Set a single pixel
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $x x-coordinate.
 * @param int $y y-coordinate.
 * @param int $color A color identifier created with <code>imagecolorallocate</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagesetpixel.php
 */
function imagesetpixel($image, $x, $y, $color)
{
}

/**
 * Set the style for line drawing
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param array $style An array of pixel colors. You can use the
 * <code>IMG_COLOR_TRANSPARENT</code> constant to add a
 * transparent pixel.
 * Note that <code>style</code> must not be an empty <code>array</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagesetstyle.php
 */
function imagesetstyle($image, array $style)
{
}

/**
 * Set the thickness for line drawing
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $thickness Thickness, in pixels.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagesetthickness.php
 */
function imagesetthickness($image, $thickness)
{
}

/**
 * Set the tile image for filling
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param resource $tile The image resource to be used as a tile.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagesettile.php
 */
function imagesettile($image, $tile)
{
}

/**
 * Draw a string horizontally
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $font Can be 1, 2, 3, 4, 5 for built-in
 * fonts in latin2 encoding (where higher numbers corresponding to larger fonts) or any of your
 * own font identifiers registered with <code>imageloadfont</code>.
 * @param int $x x-coordinate of the upper left corner.
 * @param int $y y-coordinate of the upper left corner.
 * @param string $string The string to be written.
 * @param int $color A color identifier created with <code>imagecolorallocate</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagestring.php
 */
function imagestring($image, $font, $x, $y, $string, $color)
{
}

/**
 * Draw a string vertically
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param int $font Can be 1, 2, 3, 4, 5 for built-in
 * fonts in latin2 encoding (where higher numbers corresponding to larger fonts) or any of your
 * own font identifiers registered with <code>imageloadfont</code>.
 * @param int $x x-coordinate of the bottom left corner.
 * @param int $y y-coordinate of the bottom left corner.
 * @param string $string The string to be written.
 * @param int $color A color identifier created with <code>imagecolorallocate</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagestringup.php
 */
function imagestringup($image, $font, $x, $y, $string, $color)
{
}

/**
 * Get image width
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 *
 * @return int Return the width of the <code>image</code> or <code>FALSE</code> on
 * errors.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagesx.php
 */
function imagesx($image)
{
}

/**
 * Get image height
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 *
 * @return int Return the height of the <code>image</code> or <code>FALSE</code> on
 * errors.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagesy.php
 */
function imagesy($image)
{
}

/**
 * Convert a true color image to a palette image
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param bool $dither Indicates if the image should be dithered - if it is <code>TRUE</code> then
 * dithering will be used which will result in a more speckled image but
 * with better color approximation.
 * @param int $ncolors Sets the maximum number of colors that should be retained in the palette.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagetruecolortopalette.php
 */
function imagetruecolortopalette($image, $dither, $ncolors)
{
}

/**
 * Give the bounding box of a text using TrueType fonts
 *
 * @param float $size The font size in points.
 * @param float $angle Angle in degrees in which <code>text</code> will be measured.
 * @param string $fontfile The path to the TrueType font you wish to use.
 * @param string $text The string to be measured.
 *
 * @return array <code>imagettfbbox</code> returns an array with 8
 * elements representing four points making the bounding box of the
 * text on success and <code>FALSE</code> on error.
 * <table>
 * <thead>
 * <tr>
 * <td>key</td><td>contents</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>0</td><td>lower left corner, X position</td>
 * </tr>
 * <tr>
 * <td>1</td><td>lower left corner, Y position</td>
 * </tr>
 * <tr>
 * <td>2</td><td>lower right corner, X position</td>
 * </tr>
 * <tr>
 * <td>3</td><td>lower right corner, Y position</td>
 * </tr>
 * <tr>
 * <td>4</td><td>upper right corner, X position</td>
 * </tr>
 * <tr>
 * <td>5</td><td>upper right corner, Y position</td>
 * </tr>
 * <tr>
 * <td>6</td><td>upper left corner, X position</td>
 * </tr>
 * <tr>
 * <td>7</td><td>upper left corner, Y position</td>
 * </tr>
 * </tbody>
 * </table>
 * The points are relative to the <code>text</code> regardless of the
 * <code>angle</code>, so "upper left" means in the top left-hand
 * corner seeing the text horizontally.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagettfbbox.php
 */
function imagettfbbox($size, $angle, $fontfile, $text)
{
}

/**
 * Write text to the image using TrueType fonts
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param float $size The font size in points.
 * @param float $angle The angle in degrees, with 0 degrees being left-to-right reading text.
 * Higher values represent a counter-clockwise rotation. For example, a
 * value of 90 would result in bottom-to-top reading text.
 * @param int $x The coordinates given by <code>x</code> and
 * <code>y</code> will define the basepoint of the first
 * character (roughly the lower-left corner of the character). This
 * is different from the <code>imagestring</code>, where
 * <code>x</code> and <code>y</code> define the
 * upper-left corner of the first character. For example, "top left"
 * is 0, 0.
 * @param int $y The y-ordinate. This sets the position of the fonts baseline, not the
 * very bottom of the character.
 * @param int $color The color index. Using the negative of a color index has the effect of
 * turning off antialiasing. See <code>imagecolorallocate</code>.
 * @param string $fontfile The path to the TrueType font you wish to use.
 * @param string $text The text string in UTF-8 encoding.
 *
 * @return array Returns an array with 8 elements representing four points making the
 * bounding box of the text. The order of the points is lower left, lower
 * right, upper right, upper left. The points are relative to the text
 * regardless of the angle, so "upper left" means in the top left-hand
 * corner when you see the text horizontally.
 * Returns <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagettftext.php
 */
function imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text)
{
}

/**
 * Return the image types supported by this PHP build
 *
 * @return int Returns a bit-field corresponding to the image formats supported by the
 * version of GD linked into PHP. The following bits are returned,
 * <code>IMG_BMP</code> |
 * <code>IMG_GIF</code> | <code>IMG_JPG</code> |
 * <code>IMG_PNG</code> | <code>IMG_WBMP</code> |
 * <code>IMG_XPM</code> | <code>IMG_WEBP</code>.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagetypes.php
 */
function imagetypes()
{
}

/**
 * Output image to browser or file
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param mixed $to The path or an open stream resource (which is automatically being closed after this function returns) to save the file to. If not set or <code>NULL</code>, the raw image stream will be outputted directly.
 * @param int $foreground You can set the foreground color with this parameter by setting an
 * identifier obtained from <code>imagecolorallocate</code>.
 * The default foreground color is black.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagewbmp.php
 */
function imagewbmp($image, $to = null, $foreground = null)
{
}

/**
 * Output a WebP image to browser or file
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param mixed|null $to The path or an open stream resource (which is automatically being closed after this function returns) to save the file to. If not set or <code>NULL</code>, the raw image stream will be outputted directly.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagewebp.php
 */
function imagewebp($image, $to = null)
{
}

/**
 * Output an XBM image to browser or file
 *
 * @param resource $image An image resource, returned by one of the image creation functions,
 * such as <code>imagecreatetruecolor</code>.
 * @param string $filename The path to save the file to. If not set or <code>NULL</code>, the raw image stream will be outputted directly.
 * @param int $foreground You can set the foreground color with this parameter by setting an
 * identifier obtained from <code>imagecolorallocate</code>.
 * The default foreground color is black. All other colors are treated as
 * background.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagexbm.php
 */
function imagexbm($image, $filename, $foreground = null)
{
}

/**
 * Convert JPEG image file to WBMP image file
 *
 * @param string $jpegname Path to JPEG file.
 * @param string $wbmpname Path to destination WBMP file.
 * @param int $dest_height Destination image height.
 * @param int $dest_width Destination image width.
 * @param int $threshold Threshold value, between 0 and 8 (inclusive).
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.jpeg2wbmp.php
 */
function jpeg2wbmp($jpegname, $wbmpname, $dest_height, $dest_width, $threshold)
{
}

/**
 * Convert PNG image file to WBMP image file
 *
 * @param string $pngname Path to PNG file.
 * @param string $wbmpname Path to destination WBMP file.
 * @param int $dest_height Destination image height.
 * @param int $dest_width Destination image width.
 * @param int $threshold Threshold value, between 0 and 8 (inclusive).
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.png2wbmp.php
 */
function png2wbmp($pngname, $wbmpname, $dest_height, $dest_width, $threshold)
{
}
