<?php
// Start of extension: gd
// - parsed on POSIX with PHP 7.0.28 (extension version 7.0.28)
// - parsed on Windows with PHP 7.0.28 (extension version 7.0.28)

/**
 * When the bundled version of GD is used this is 1 otherwise 
 *      its set to 0.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.gd-bundled
 *
 * @var int
 */
const GD_BUNDLED = 1;

/**
 * The GD "extra" version (beta/rc..) PHP was compiled against.
 *      (Available as of PHP 5.2.4)
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.gd-extra-version
 *
 * @var string
 */
const GD_EXTRA_VERSION = '';

/**
 * The GD major version PHP was compiled against.
 *      (Available as of PHP 5.2.4)
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.gd-major-version
 *
 * @var int
 */
const GD_MAJOR_VERSION = 2;

/**
 * The GD minor version PHP was compiled against.
 *      (Available as of PHP 5.2.4)
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.gd-minor-version
 *
 * @var int
 */
const GD_MINOR_VERSION = 0;

/**
 * The GD release version PHP was compiled against.
 *      (Available as of PHP 5.2.4)
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.gd-release-version
 *
 * @var int
 */
const GD_RELEASE_VERSION = 35;

/**
 * The GD version PHP was compiled against.
 *      (Available as of PHP 5.2.4)
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
 *
 *
 *     <blockquote>
 *      
 *       This constant has the same value as <code>IMG_ARC_PIE</code>
 *      
 *     </blockquote>
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
 *     <code>imagecolorallocate</code> or
 *     <code>imagecolorallocatealpha</code>.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-color-brushed
 *
 * @var int
 */
const IMG_COLOR_BRUSHED = -3;

/**
 * Special color option which can be used instead of a color allocated with
 *     <code>imagecolorallocate</code> or
 *     <code>imagecolorallocatealpha</code>.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-color-styled
 *
 * @var int
 */
const IMG_COLOR_STYLED = -2;

/**
 * Special color option which can be used instead of a color allocated with
 *     <code>imagecolorallocate</code> or
 *     <code>imagecolorallocatealpha</code>.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-color-styledbrushed
 *
 * @var int
 */
const IMG_COLOR_STYLEDBRUSHED = -4;

/**
 * Special color option which can be used instead of a color allocated with
 *     <code>imagecolorallocate</code> or
 *     <code>imagecolorallocatealpha</code>.
 *
 * @link http://www.php.net/manual/en/image.constants.php#constant.img-color-tiled
 *
 * @var int
 */
const IMG_COLOR_TILED = -5;

/**
 * Special color option which can be used instead of a color allocated with
 *     <code>imagecolorallocate</code> or
 *     <code>imagecolorallocatealpha</code>.
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
 *
 *
 *     
 *      (Available as of PHP 5.3.0)
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
 *
 *
 *     <blockquote>
 *      
 *       This constant has the same value as <code>IMG_JPG</code>
 *      
 *     </blockquote>
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
 *
 *
 *     
 *      Available as of PHP 5.6.25 and PHP 7.0.10, respectively.
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
 * @return array
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gd-info.php
 */
function gd_info(): array
{
}

/**
 * Output image to browser or file
 *
 * mixed $im
 * mixed|null $filename
 * mixed|null $threshold
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.image2wbmp.php
 */
function image2wbmp($im, $filename = null, $threshold = null): bool
{
}

/**
 * Return an image containing the affine transformed src image, using an optional clipping area
 *
 * mixed $im
 * mixed $affine
 * mixed|null $clip
 *
 * @return resource
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageaffine.php
 */
function imageaffine($im, $affine, $clip = null)
{
}

/**
 * Concatenate two affine transformation matrices
 *
 * mixed $m1
 * mixed $m2
 *
 * @return array
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageaffinematrixconcat.php
 */
function imageaffinematrixconcat($m1, $m2): array
{
}

/**
 * Get an affine transformation matrix
 *
 * mixed $type
 * mixed|null $options
 *
 * @return array
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageaffinematrixget.php
 */
function imageaffinematrixget($type, $options = null): array
{
}

/**
 * Set the blending mode for an image
 *
 * mixed $im
 * mixed $blend
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagealphablending.php
 */
function imagealphablending($im, $blend): bool
{
}

/**
 * Should antialias functions be used or not
 *
 * mixed $im
 * mixed $on
 *
 * @return bool
 *
 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageantialias.php
 */
function imageantialias($im, $on): bool
{
}

/**
 * Draws an arc
 *
 * mixed $im
 * mixed $cx
 * mixed $cy
 * mixed $w
 * mixed $h
 * mixed $s
 * mixed $e
 * mixed $col
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagearc.php
 */
function imagearc($im, $cx, $cy, $w, $h, $s, $e, $col): bool
{
}

/**
 * Draw a character horizontally
 *
 * mixed $im
 * mixed $font
 * mixed $x
 * mixed $y
 * mixed $c
 * mixed $col
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagechar.php
 */
function imagechar($im, $font, $x, $y, $c, $col): bool
{
}

/**
 * Draw a character vertically
 *
 * mixed $im
 * mixed $font
 * mixed $x
 * mixed $y
 * mixed $c
 * mixed $col
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecharup.php
 */
function imagecharup($im, $font, $x, $y, $c, $col): bool
{
}

/**
 * Allocate a color for an image
 *
 * mixed $im
 * mixed $red
 * mixed $green
 * mixed $blue
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorallocate.php
 */
function imagecolorallocate($im, $red, $green, $blue): int
{
}

/**
 * Allocate a color for an image
 *
 * mixed $im
 * mixed $red
 * mixed $green
 * mixed $blue
 * mixed $alpha
 *
 * @return int
 *
 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorallocatealpha.php
 */
function imagecolorallocatealpha($im, $red, $green, $blue, $alpha): int
{
}

/**
 * Get the index of the color of a pixel
 *
 * mixed $im
 * mixed $x
 * mixed $y
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorat.php
 */
function imagecolorat($im, $x, $y): int
{
}

/**
 * Get the index of the closest color to the specified color
 *
 * mixed $im
 * mixed $red
 * mixed $green
 * mixed $blue
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorclosest.php
 */
function imagecolorclosest($im, $red, $green, $blue): int
{
}

/**
 * Get the index of the closest color to the specified color + alpha
 *
 * mixed $im
 * mixed $red
 * mixed $green
 * mixed $blue
 * mixed $alpha
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorclosestalpha.php
 */
function imagecolorclosestalpha($im, $red, $green, $blue, $alpha): int
{
}

/**
 * Get the index of the color which has the hue, white and blackness
 *
 * mixed $im
 * mixed $red
 * mixed $green
 * mixed $blue
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorclosesthwb.php
 */
function imagecolorclosesthwb($im, $red, $green, $blue): int
{
}

/**
 * De-allocate a color for an image
 *
 * mixed $im
 * mixed $index
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolordeallocate.php
 */
function imagecolordeallocate($im, $index): bool
{
}

/**
 * Get the index of the specified color
 *
 * mixed $im
 * mixed $red
 * mixed $green
 * mixed $blue
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorexact.php
 */
function imagecolorexact($im, $red, $green, $blue): int
{
}

/**
 * Get the index of the specified color + alpha
 *
 * mixed $im
 * mixed $red
 * mixed $green
 * mixed $blue
 * mixed $alpha
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorexactalpha.php
 */
function imagecolorexactalpha($im, $red, $green, $blue, $alpha): int
{
}

/**
 * Makes the colors of the palette version of an image more closely match the true color version
 *
 * mixed $im1
 * mixed $im2
 *
 * @return bool
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolormatch.php
 */
function imagecolormatch($im1, $im2): bool
{
}

/**
 * Get the index of the specified color or its closest possible alternative
 *
 * mixed $im
 * mixed $red
 * mixed $green
 * mixed $blue
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorresolve.php
 */
function imagecolorresolve($im, $red, $green, $blue): int
{
}

/**
 * Get the index of the specified color + alpha or its closest possible alternative
 *
 * mixed $im
 * mixed $red
 * mixed $green
 * mixed $blue
 * mixed $alpha
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorresolvealpha.php
 */
function imagecolorresolvealpha($im, $red, $green, $blue, $alpha): int
{
}

/**
 * Set the color for the specified palette index
 *
 * mixed $im
 * mixed $color
 * mixed $red
 * mixed $green
 * mixed $blue
 * mixed|null $alpha
 *
 * @return void
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorset.php
 */
function imagecolorset($im, $color, $red, $green, $blue, $alpha = null)
{
}

/**
 * Get the colors for an index
 *
 * mixed $im
 * mixed $index
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorsforindex.php
 */
function imagecolorsforindex($im, $index): array
{
}

/**
 * Find out the number of colors in an image's palette
 *
 * mixed $im
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolorstotal.php
 */
function imagecolorstotal($im): int
{
}

/**
 * Define a color as transparent
 *
 * mixed $im
 * mixed|null $col
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecolortransparent.php
 */
function imagecolortransparent($im, $col = null): int
{
}

/**
 * Apply a 3x3 convolution matrix, using coefficient and offset
 *
 * mixed $im
 * mixed $matrix3x3
 * mixed $div
 * mixed $offset
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageconvolution.php
 */
function imageconvolution($im, $matrix3x3, $div, $offset): bool
{
}

/**
 * Copy part of an image
 *
 * mixed $dst_im
 * mixed $src_im
 * mixed $dst_x
 * mixed $dst_y
 * mixed $src_x
 * mixed $src_y
 * mixed $src_w
 * mixed $src_h
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecopy.php
 */
function imagecopy($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h): bool
{
}

/**
 * Copy and merge part of an image
 *
 * mixed $src_im
 * mixed $dst_im
 * mixed $dst_x
 * mixed $dst_y
 * mixed $src_x
 * mixed $src_y
 * mixed $src_w
 * mixed $src_h
 * mixed $pct
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecopymerge.php
 */
function imagecopymerge($src_im, $dst_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct): bool
{
}

/**
 * Copy and merge part of an image with gray scale
 *
 * mixed $src_im
 * mixed $dst_im
 * mixed $dst_x
 * mixed $dst_y
 * mixed $src_x
 * mixed $src_y
 * mixed $src_w
 * mixed $src_h
 * mixed $pct
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecopymergegray.php
 */
function imagecopymergegray($src_im, $dst_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct): bool
{
}

/**
 * Copy and resize part of an image with resampling
 *
 * mixed $dst_im
 * mixed $src_im
 * mixed $dst_x
 * mixed $dst_y
 * mixed $src_x
 * mixed $src_y
 * mixed $dst_w
 * mixed $dst_h
 * mixed $src_w
 * mixed $src_h
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecopyresampled.php
 */
function imagecopyresampled($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h): bool
{
}

/**
 * Copy and resize part of an image
 *
 * mixed $dst_im
 * mixed $src_im
 * mixed $dst_x
 * mixed $dst_y
 * mixed $src_x
 * mixed $src_y
 * mixed $dst_w
 * mixed $dst_h
 * mixed $src_w
 * mixed $src_h
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecopyresized.php
 */
function imagecopyresized($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h): bool
{
}

/**
 * Create a new palette based image
 *
 * mixed $x_size
 * mixed $y_size
 *
 * @return resource
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecreate.php
 */
function imagecreate($x_size, $y_size)
{
}

/**
 * Create a new image from GD file or URL
 *
 * mixed $filename
 *
 * @return resource
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
 * mixed $filename
 *
 * @return resource
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
 * mixed $filename
 * mixed $srcX
 * mixed $srcY
 * mixed $width
 * mixed $height
 *
 * @return resource
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
 * mixed $filename
 *
 * @return resource
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
 * mixed $filename
 *
 * @return resource
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
 * mixed $filename
 *
 * @return resource
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
 * mixed $image
 *
 * @return resource
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
 * mixed $filename
 *
 * @return resource
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
 * mixed $filename
 *
 * @return resource
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
 * mixed $filename
 *
 * @return resource
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
 * mixed $filename
 *
 * @return resource
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
 * mixed $x_size
 * mixed $y_size
 *
 * @return resource
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecreatetruecolor.php
 */
function imagecreatetruecolor($x_size, $y_size)
{
}

/**
 * Crop an image to the given rectangle
 *
 * mixed $im
 * mixed $rect
 *
 * @return resource
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecrop.php
 */
function imagecrop($im, $rect)
{
}

/**
 * Crop an image automatically using one of the available modes
 *
 * mixed $im
 * mixed|null $mode
 * mixed|null $threshold
 * mixed|null $color
 *
 * @return resource
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagecropauto.php
 */
function imagecropauto($im, $mode = null, $threshold = null, $color = null)
{
}

/**
 * Draw a dashed line
 *
 * mixed $im
 * mixed $x1
 * mixed $y1
 * mixed $x2
 * mixed $y2
 * mixed $col
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagedashedline.php
 */
function imagedashedline($im, $x1, $y1, $x2, $y2, $col): bool
{
}

/**
 * Destroy an image
 *
 * mixed $im
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagedestroy.php
 */
function imagedestroy($im): bool
{
}

/**
 * Draw an ellipse
 *
 * mixed $im
 * mixed $cx
 * mixed $cy
 * mixed $w
 * mixed $h
 * mixed $color
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageellipse.php
 */
function imageellipse($im, $cx, $cy, $w, $h, $color): bool
{
}

/**
 * Flood fill
 *
 * mixed $im
 * mixed $x
 * mixed $y
 * mixed $col
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagefill.php
 */
function imagefill($im, $x, $y, $col): bool
{
}

/**
 * Draw a partial arc and fill it
 *
 * mixed $im
 * mixed $cx
 * mixed $cy
 * mixed $w
 * mixed $h
 * mixed $s
 * mixed $e
 * mixed $col
 * mixed $style
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagefilledarc.php
 */
function imagefilledarc($im, $cx, $cy, $w, $h, $s, $e, $col, $style): bool
{
}

/**
 * Draw a filled ellipse
 *
 * mixed $im
 * mixed $cx
 * mixed $cy
 * mixed $w
 * mixed $h
 * mixed $color
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagefilledellipse.php
 */
function imagefilledellipse($im, $cx, $cy, $w, $h, $color): bool
{
}

/**
 * Draw a filled polygon
 *
 * mixed $im
 * mixed $points
 * mixed $num_pos
 * mixed $col
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagefilledpolygon.php
 */
function imagefilledpolygon($im, $points, $num_pos, $col): bool
{
}

/**
 * Draw a filled rectangle
 *
 * mixed $im
 * mixed $x1
 * mixed $y1
 * mixed $x2
 * mixed $y2
 * mixed $col
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagefilledrectangle.php
 */
function imagefilledrectangle($im, $x1, $y1, $x2, $y2, $col): bool
{
}

/**
 * Flood fill to specific color
 *
 * mixed $im
 * mixed $x
 * mixed $y
 * mixed $border
 * mixed $col
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagefilltoborder.php
 */
function imagefilltoborder($im, $x, $y, $border, $col): bool
{
}

/**
 * Applies a filter to an image
 *
 * mixed $im
 * mixed $filtertype
 * mixed|null $arg1
 * mixed|null $arg2
 * mixed|null $arg3
 * mixed|null $arg4
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagefilter.php
 */
function imagefilter($im, $filtertype, $arg1 = null, $arg2 = null, $arg3 = null, $arg4 = null): bool
{
}

/**
 * Flips an image using a given mode
 *
 * mixed $im
 * mixed $mode
 *
 * @return bool
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageflip.php
 */
function imageflip($im, $mode): bool
{
}

/**
 * Get font height
 *
 * mixed $font
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagefontheight.php
 */
function imagefontheight($font): int
{
}

/**
 * Get font width
 *
 * mixed $font
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagefontwidth.php
 */
function imagefontwidth($font): int
{
}

/**
 * Give the bounding box of a text using fonts via freetype2
 *
 * mixed $size
 * mixed $angle
 * mixed $font_file
 * mixed $text
 * mixed|null $extrainfo
 *
 * @return array
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageftbbox.php
 */
function imageftbbox($size, $angle, $font_file, $text, $extrainfo = null): array
{
}

/**
 * Write text to the image using fonts using FreeType 2
 *
 * mixed $im
 * mixed $size
 * mixed $angle
 * mixed $x
 * mixed $y
 * mixed $col
 * mixed $font_file
 * mixed $text
 * mixed|null $extrainfo
 *
 * @return array
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagefttext.php
 */
function imagefttext($im, $size, $angle, $x, $y, $col, $font_file, $text, $extrainfo = null): array
{
}

/**
 * Apply a gamma correction to a GD image
 *
 * mixed $im
 * mixed $inputgamma
 * mixed $outputgamma
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagegammacorrect.php
 */
function imagegammacorrect($im, $inputgamma, $outputgamma): bool
{
}

/**
 * Output GD image to browser or file
 *
 * mixed $im
 * mixed|null $filename
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagegd.php
 */
function imagegd($im, $filename = null): bool
{
}

/**
 * Output GD2 image to browser or file
 *
 * mixed $im
 * mixed|null $filename
 * mixed|null $chunk_size
 * mixed|null $type
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagegd2.php
 */
function imagegd2($im, $filename = null, $chunk_size = null, $type = null): bool
{
}

/**
 * Output image to browser or file
 *
 * mixed $im
 * mixed|null $filename
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagegif.php
 */
function imagegif($im, $filename = null): bool
{
}

/**
 * Captures the whole screen
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @return resource
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
 * mixed $handle
 * mixed|null $client_area
 *
 * @return resource
 *
 * @since PHP 5 >= 5.2.2, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagegrabwindow.php
 */
function imagegrabwindow($handle, $client_area = null)
{
}

/**
 * Enable or disable interlace
 *
 * mixed $im
 * mixed|null $interlace
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageinterlace.php
 */
function imageinterlace($im, $interlace = null): int
{
}

/**
 * Finds whether an image is a truecolor image
 *
 * mixed $im
 *
 * @return bool
 *
 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageistruecolor.php
 */
function imageistruecolor($im): bool
{
}

/**
 * Output image to browser or file
 *
 * mixed $im
 * mixed|null $filename
 * mixed|null $quality
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagejpeg.php
 */
function imagejpeg($im, $filename = null, $quality = null): bool
{
}

/**
 * Set the alpha blending flag to use layering effects
 *
 * mixed $im
 * mixed $effect
 *
 * @return bool
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagelayereffect.php
 */
function imagelayereffect($im, $effect): bool
{
}

/**
 * Draw a line
 *
 * mixed $im
 * mixed $x1
 * mixed $y1
 * mixed $x2
 * mixed $y2
 * mixed $col
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageline.php
 */
function imageline($im, $x1, $y1, $x2, $y2, $col): bool
{
}

/**
 * Load a new font
 *
 * mixed $filename
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imageloadfont.php
 */
function imageloadfont($filename): int
{
}

/**
 * Copy the palette from one image to another
 *
 * mixed $dst
 * mixed $src
 *
 * @return void
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagepalettecopy.php
 */
function imagepalettecopy($dst, $src)
{
}

/**
 * Converts a palette based image to true color
 *
 * mixed $im
 *
 * @return bool
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagepalettetotruecolor.php
 */
function imagepalettetotruecolor($im): bool
{
}

/**
 * Output a PNG image to either the browser or a file
 *
 * mixed $im
 * mixed|null $filename
 * mixed|null $quality
 * mixed|null $filters
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagepng.php
 */
function imagepng($im, $filename = null, $quality = null, $filters = null): bool
{
}

/**
 * Draws a polygon
 *
 * mixed $im
 * mixed $points
 * mixed $num_pos
 * mixed $col
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagepolygon.php
 */
function imagepolygon($im, $points, $num_pos, $col): bool
{
}

/**
 * Draw a rectangle
 *
 * mixed $im
 * mixed $x1
 * mixed $y1
 * mixed $x2
 * mixed $y2
 * mixed $col
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagerectangle.php
 */
function imagerectangle($im, $x1, $y1, $x2, $y2, $col): bool
{
}

/**
 * Rotate an image with a given angle
 *
 * mixed $im
 * mixed $angle
 * mixed $bgdcolor
 * mixed|null $ignoretransparent
 *
 * @return resource
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagerotate.php
 */
function imagerotate($im, $angle, $bgdcolor, $ignoretransparent = null)
{
}

/**
 * Set the flag to save full alpha channel information (as opposed to single-color transparency) when saving PNG images
 *
 * mixed $im
 * mixed $save
 *
 * @return bool
 *
 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagesavealpha.php
 */
function imagesavealpha($im, $save): bool
{
}

/**
 * Scale an image using the given new width and height
 *
 * mixed $im
 * mixed $new_width
 * mixed|null $new_height
 * mixed|null $mode
 *
 * @return resource
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagescale.php
 */
function imagescale($im, $new_width, $new_height = null, $mode = null)
{
}

/**
 * Set the brush image for line drawing
 *
 * mixed $im
 * mixed $brush
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagesetbrush.php
 */
function imagesetbrush($im, $brush): bool
{
}

/**
 * Set the interpolation method
 *
 * mixed $im
 * mixed $method
 *
 * @return bool
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagesetinterpolation.php
 */
function imagesetinterpolation($im, $method): bool
{
}

/**
 * Set a single pixel
 *
 * mixed $im
 * mixed $x
 * mixed $y
 * mixed $col
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagesetpixel.php
 */
function imagesetpixel($im, $x, $y, $col): bool
{
}

/**
 * Set the style for line drawing
 *
 * mixed $im
 * mixed $styles
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagesetstyle.php
 */
function imagesetstyle($im, $styles): bool
{
}

/**
 * Set the thickness for line drawing
 *
 * mixed $im
 * mixed $thickness
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagesetthickness.php
 */
function imagesetthickness($im, $thickness): bool
{
}

/**
 * Set the tile image for filling
 *
 * mixed $im
 * mixed $tile
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagesettile.php
 */
function imagesettile($im, $tile): bool
{
}

/**
 * Draw a string horizontally
 *
 * mixed $im
 * mixed $font
 * mixed $x
 * mixed $y
 * mixed $str
 * mixed $col
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagestring.php
 */
function imagestring($im, $font, $x, $y, $str, $col): bool
{
}

/**
 * Draw a string vertically
 *
 * mixed $im
 * mixed $font
 * mixed $x
 * mixed $y
 * mixed $str
 * mixed $col
 *
 * @return bool
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagestringup.php
 */
function imagestringup($im, $font, $x, $y, $str, $col): bool
{
}

/**
 * Get image width
 *
 * mixed $im
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagesx.php
 */
function imagesx($im): int
{
}

/**
 * Get image height
 *
 * mixed $im
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagesy.php
 */
function imagesy($im): int
{
}

/**
 * Convert a true color image to a palette image
 *
 * mixed $im
 * mixed $ditherFlag
 * mixed $colorsWanted
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagetruecolortopalette.php
 */
function imagetruecolortopalette($im, $ditherFlag, $colorsWanted): bool
{
}

/**
 * Give the bounding box of a text using TrueType fonts
 *
 * mixed $size
 * mixed $angle
 * mixed $font_file
 * mixed $text
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagettfbbox.php
 */
function imagettfbbox($size, $angle, $font_file, $text): array
{
}

/**
 * Write text to the image using TrueType fonts
 *
 * mixed $im
 * mixed $size
 * mixed $angle
 * mixed $x
 * mixed $y
 * mixed $col
 * mixed $font_file
 * mixed $text
 *
 * @return array
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagettftext.php
 */
function imagettftext($im, $size, $angle, $x, $y, $col, $font_file, $text): array
{
}

/**
 * Return the image types supported by this PHP build
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagetypes.php
 */
function imagetypes(): int
{
}

/**
 * Output image to browser or file
 *
 * mixed $im
 * mixed|null $filename
 * mixed|null $foreground
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagewbmp.php
 */
function imagewbmp($im, $filename = null, $foreground = null): bool
{
}

/**
 * Output a WebP image to browser or file
 *
 * mixed $im
 * mixed|null $filename
 * mixed|null $quality
 *
 * @return bool
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagewebp.php
 */
function imagewebp($im, $filename = null, $quality = null): bool
{
}

/**
 * Output an XBM image to browser or file
 *
 * mixed $im
 * mixed $filename
 * mixed|null $foreground
 *
 * @return bool
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.imagexbm.php
 */
function imagexbm($im, $filename, $foreground = null): bool
{
}

/**
 * Convert JPEG image file to WBMP image file
 *
 * mixed $f_org
 * mixed $f_dest
 * mixed $d_height
 * mixed $d_width
 * mixed $d_threshold
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.jpeg2wbmp.php
 */
function jpeg2wbmp($f_org, $f_dest, $d_height, $d_width, $d_threshold): bool
{
}

/**
 * Convert PNG image file to WBMP image file
 *
 * mixed $f_org
 * mixed $f_dest
 * mixed $d_height
 * mixed $d_width
 * mixed $d_threshold
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.png2wbmp.php
 */
function png2wbmp($f_org, $f_dest, $d_height, $d_width, $d_threshold): bool
{
}
