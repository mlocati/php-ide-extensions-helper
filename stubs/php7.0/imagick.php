<?php
// Start of extension: imagick
// - parsed on POSIX with PHP 7.0.29 (extension version 3.4.3)
// - parsed on Windows with PHP 7.0.29 (extension version 3.4.3)

/**
 * The Imagick class has the ability to hold and operate on multiple
 * images simultaneously. This is achieved through an internal stack. There
 * is always an internal pointer that points at the current image. Some
 * functions operate on all images in the Imagick class, but most operate
 * only on the current image in the internal stack. As a convention, method
 * names can contain the word Image to denote they affect only the current
 * image in the stack.
 *
 * @since PECL imagick 2.0.0
 *
 * @link http://www.php.net/manual/en/class.imagick.php
 */
class Imagick implements Countable, Iterator
{
    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.align-center
     */
    const ALIGN_CENTER = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.align-left
     */
    const ALIGN_LEFT = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.align-right
     */
    const ALIGN_RIGHT = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.align-undefined
     */
    const ALIGN_UNDEFINED = 0;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.8 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.alphachannel-activate
     */
    const ALPHACHANNEL_ACTIVATE = 1;

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @var int
     */
    const ALPHACHANNEL_ASSOCIATE = 13;

    /**
     * @var int
     */
    const ALPHACHANNEL_BACKGROUND = 2;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.alphachannel-copy
     */
    const ALPHACHANNEL_COPY = 3;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.8 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.alphachannel-deactivate
     */
    const ALPHACHANNEL_DEACTIVATE = 4;

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @var int
     */
    const ALPHACHANNEL_DISSOCIATE = 14;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.alphachannel-extract
     */
    const ALPHACHANNEL_EXTRACT = 5;

    /**
     * @var int
     */
    const ALPHACHANNEL_FLATTEN = 11;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.alphachannel-opaque
     */
    const ALPHACHANNEL_OPAQUE = 6;

    /**
     * @var int
     */
    const ALPHACHANNEL_REMOVE = 12;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.8 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.alphachannel-reset
     */
    const ALPHACHANNEL_RESET = 7;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.8 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.alphachannel-set
     */
    const ALPHACHANNEL_SET = 8;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.alphachannel-shape
     */
    const ALPHACHANNEL_SHAPE = 9;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.alphachannel-transparent
     */
    const ALPHACHANNEL_TRANSPARENT = 10;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.alphachannel-undefined
     */
    const ALPHACHANNEL_UNDEFINED = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.channel-all
     */
    const CHANNEL_ALL = 134217727;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.channel-alpha
     */
    const CHANNEL_ALPHA = 8;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.channel-black
     */
    const CHANNEL_BLACK = 32;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.channel-blue
     */
    const CHANNEL_BLUE = 4;

    /**
     * @var int
     */
    const CHANNEL_COMPOSITES = 47;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.channel-cyan
     */
    const CHANNEL_CYAN = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.channel-default
     */
    const CHANNEL_DEFAULT = 134217719;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.channel-gray
     */
    const CHANNEL_GRAY = 1;

    /**
     * @var int
     */
    const CHANNEL_GRAY_CHANNELS = 128;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.channel-green
     */
    const CHANNEL_GREEN = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.channel-index
     */
    const CHANNEL_INDEX = 32;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.channel-magenta
     */
    const CHANNEL_MAGENTA = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.channel-matte
     */
    const CHANNEL_MATTE = 8;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.channel-opacity
     */
    const CHANNEL_OPACITY = 8;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.channel-red
     */
    const CHANNEL_RED = 1;

    /**
     * @var int
     */
    const CHANNEL_RGBA = 15;

    /**
     * @var int
     */
    const CHANNEL_RGBS = 128;

    /**
     * @var int
     */
    const CHANNEL_SYNC = 256;

    /**
     * @var int
     */
    const CHANNEL_TRUEALPHA = 64;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.channel-undefined
     */
    const CHANNEL_UNDEFINED = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.channel-yellow
     */
    const CHANNEL_YELLOW = 4;

    /**
     * Color's alpha
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.color-alpha
     */
    const COLOR_ALPHA = 19;

    /**
     * Black color
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.color-black
     */
    const COLOR_BLACK = 11;

    /**
     * Blue color
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.color-blue
     */
    const COLOR_BLUE = 12;

    /**
     * Cyan color
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.color-cyan
     */
    const COLOR_CYAN = 13;

    /**
     * Color's fuzz
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.color-fuzz
     */
    const COLOR_FUZZ = 20;

    /**
     * Green color
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.color-green
     */
    const COLOR_GREEN = 14;

    /**
     * Magenta color
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.color-magenta
     */
    const COLOR_MAGENTA = 17;

    /**
     * Color's opacity
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.color-opacity
     */
    const COLOR_OPACITY = 18;

    /**
     * Red color
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.color-red
     */
    const COLOR_RED = 15;

    /**
     * Yellow color
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.color-yellow
     */
    const COLOR_YELLOW = 16;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.2 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.colorspace-cmy
     */
    const COLORSPACE_CMY = 22;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.colorspace-cmyk
     */
    const COLORSPACE_CMYK = 12;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.colorspace-gray
     */
    const COLORSPACE_GRAY = 2;

    /**
     * @var int
     */
    const COLORSPACE_HCL = 24;

    /**
     * @var int
     */
    const COLORSPACE_HCLP = 32;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.colorspace-hsb
     */
    const COLORSPACE_HSB = 14;

    /**
     * @var int
     */
    const COLORSPACE_HSI = 30;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.colorspace-hsl
     */
    const COLORSPACE_HSL = 15;

    /**
     * @var int
     */
    const COLORSPACE_HSV = 31;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.colorspace-hwb
     */
    const COLORSPACE_HWB = 16;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.colorspace-lab
     */
    const COLORSPACE_LAB = 5;

    /**
     * @var int
     */
    const COLORSPACE_LCH = 25;

    /**
     * @var int
     */
    const COLORSPACE_LCHAB = 27;

    /**
     * @var int
     */
    const COLORSPACE_LCHUV = 28;

    /**
     * @var int
     */
    const COLORSPACE_LMS = 26;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.colorspace-log
     */
    const COLORSPACE_LOG = 21;

    /**
     * @var int
     */
    const COLORSPACE_LUV = 23;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.colorspace-ohta
     */
    const COLORSPACE_OHTA = 4;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.colorspace-rec601luma
     */
    const COLORSPACE_REC601LUMA = 17;

    /**
     * @var int
     */
    const COLORSPACE_REC601YCBCR = 18;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.colorspace-rec709luma
     */
    const COLORSPACE_REC709LUMA = 19;

    /**
     * @var int
     */
    const COLORSPACE_REC709YCBCR = 20;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.colorspace-rgb
     */
    const COLORSPACE_RGB = 1;

    /**
     * @var int
     */
    const COLORSPACE_SCRGB = 29;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.colorspace-srgb
     */
    const COLORSPACE_SRGB = 13;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.colorspace-transparent
     */
    const COLORSPACE_TRANSPARENT = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.colorspace-undefined
     */
    const COLORSPACE_UNDEFINED = 0;

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @var int
     */
    const COLORSPACE_XYY = 34;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.colorspace-xyz
     */
    const COLORSPACE_XYZ = 6;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.colorspace-ycbcr
     */
    const COLORSPACE_YCBCR = 7;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.colorspace-ycc
     */
    const COLORSPACE_YCC = 8;

    /**
     * @var int
     */
    const COLORSPACE_YDBDR = 33;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.colorspace-yiq
     */
    const COLORSPACE_YIQ = 9;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.colorspace-ypbpr
     */
    const COLORSPACE_YPBPR = 10;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.colorspace-yuv
     */
    const COLORSPACE_YUV = 11;

    /**
     * The result of image + image
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-add
     */
    const COMPOSITE_ADD = 2;

    /**
     * The result is the same shape as image, with composite image obscuring image where the image shapes overlap
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-atop
     */
    const COMPOSITE_ATOP = 3;

    /**
     * Blends the image
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-blend
     */
    const COMPOSITE_BLEND = 4;

    /**
     * @var int
     */
    const COMPOSITE_BLUR = 57;

    /**
     * The same as COMPOSITE_MULTIPLY, except the source is converted to grayscale first.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-bumpmap
     */
    const COMPOSITE_BUMPMAP = 5;

    /**
     * @var int
     */
    const COMPOSITE_CHANGEMASK = 6;

    /**
     * Makes the target image transparent
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-clear
     */
    const COMPOSITE_CLEAR = 7;

    /**
     * Darkens the destination image to reflect the source image
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-colorburn
     */
    const COMPOSITE_COLORBURN = 8;

    /**
     * Brightens the destination image to reflect the source image
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-colordodge
     */
    const COMPOSITE_COLORDODGE = 9;

    /**
     * Colorizes the target image using the composite image
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-colorize
     */
    const COMPOSITE_COLORIZE = 10;

    /**
     * Copies the source image on the target image
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-copy
     */
    const COMPOSITE_COPY = 13;

    /**
     * Copies black from the source to target
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-copyblack
     */
    const COMPOSITE_COPYBLACK = 11;

    /**
     * Copies blue from the source to target
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-copyblue
     */
    const COMPOSITE_COPYBLUE = 12;

    /**
     * Copies cyan from the source to target
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-copycyan
     */
    const COMPOSITE_COPYCYAN = 14;

    /**
     * Copies green from the source to target
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-copygreen
     */
    const COMPOSITE_COPYGREEN = 15;

    /**
     * Copies magenta from the source to target
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-copymagenta
     */
    const COMPOSITE_COPYMAGENTA = 16;

    /**
     * Copies opacity from the source to target
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-copyopacity
     */
    const COMPOSITE_COPYOPACITY = 17;

    /**
     * Copies red from the source to target
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-copyred
     */
    const COMPOSITE_COPYRED = 18;

    /**
     * Copies yellow from the source to target
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-copyyellow
     */
    const COMPOSITE_COPYYELLOW = 19;

    /**
     * Darkens the target image
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-darken
     */
    const COMPOSITE_DARKEN = 20;

    /**
     * @var int
     */
    const COMPOSITE_DARKENINTENSITY = 66;

    /**
     * The default composite operator
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-default
     */
    const COMPOSITE_DEFAULT = 40;

    /**
     * Subtracts the darker of the two constituent colors from the lighter
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-difference
     */
    const COMPOSITE_DIFFERENCE = 26;

    /**
     * Shifts target image pixels as defined by the source
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-displace
     */
    const COMPOSITE_DISPLACE = 27;

    /**
     * Dissolves the source in to the target
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-dissolve
     */
    const COMPOSITE_DISSOLVE = 28;

    /**
     * @var int
     */
    const COMPOSITE_DISTORT = 56;

    /**
     * @var int
     */
    const COMPOSITE_DIVIDE = 55;

    /**
     * @var int
     */
    const COMPOSITE_DIVIDEDST = 55;

    /**
     * @var int
     */
    const COMPOSITE_DIVIDESRC = 64;

    /**
     * The target is left untouched
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-dst
     */
    const COMPOSITE_DST = 22;

    /**
     * The part of the destination lying inside of the source is composited over the source and replaces the destination
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-dstatop
     */
    const COMPOSITE_DSTATOP = 21;

    /**
     * The parts inside the source replace the target
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-dstin
     */
    const COMPOSITE_DSTIN = 23;

    /**
     * The parts outside the source replace the target
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-dstout
     */
    const COMPOSITE_DSTOUT = 24;

    /**
     * Target replaces the source
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-dstover
     */
    const COMPOSITE_DSTOVER = 25;

    /**
     * Produces an effect similar to that of imagick::COMPOSITE_DIFFERENCE, but appears as lower contrast
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-exclusion
     */
    const COMPOSITE_EXCLUSION = 29;

    /**
     * Multiplies or screens the colors, dependent on the source color value
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-hardlight
     */
    const COMPOSITE_HARDLIGHT = 30;

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @var int
     */
    const COMPOSITE_HARDMIX = 68;

    /**
     * Modifies the hue of the target as defined by source
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-hue
     */
    const COMPOSITE_HUE = 31;

    /**
     * Composites source into the target
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-in
     */
    const COMPOSITE_IN = 32;

    /**
     * Lightens the target as defined by source
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-lighten
     */
    const COMPOSITE_LIGHTEN = 33;

    /**
     * @var int
     */
    const COMPOSITE_LIGHTENINTENSITY = 67;

    /**
     * @var int
     */
    const COMPOSITE_LINEARBURN = 62;

    /**
     * @var int
     */
    const COMPOSITE_LINEARDODGE = 61;

    /**
     * @var int
     */
    const COMPOSITE_LINEARLIGHT = 34;

    /**
     * Luminizes the target as defined by source
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-luminize
     */
    const COMPOSITE_LUMINIZE = 35;

    /**
     * @var int
     */
    const COMPOSITE_MATHEMATICS = 63;

    /**
     * Subtracts the source from the target
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-minus
     */
    const COMPOSITE_MINUS = 36;

    /**
     * @var int
     */
    const COMPOSITE_MINUSDST = 36;

    /**
     * @var int
     */
    const COMPOSITE_MINUSSRC = 65;

    /**
     * Modulates the target brightness, saturation and hue as defined by source
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-modulate
     */
    const COMPOSITE_MODULATE = 37;

    /**
     * @var int
     */
    const COMPOSITE_MODULUSADD = 2;

    /**
     * @var int
     */
    const COMPOSITE_MODULUSSUBTRACT = 52;

    /**
     * Multiplies the target to the source
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-multiply
     */
    const COMPOSITE_MULTIPLY = 38;

    /**
     * No composite operator defined
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-no
     */
    const COMPOSITE_NO = 1;

    /**
     * Composites outer parts of the source on the target
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-out
     */
    const COMPOSITE_OUT = 39;

    /**
     * Composites source over the target
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-over
     */
    const COMPOSITE_OVER = 40;

    /**
     * Overlays the source on the target
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-overlay
     */
    const COMPOSITE_OVERLAY = 41;

    /**
     * @var int
     */
    const COMPOSITE_PEGTOPLIGHT = 58;

    /**
     * @var int
     */
    const COMPOSITE_PINLIGHT = 60;

    /**
     * Adds the source to the target
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-plus
     */
    const COMPOSITE_PLUS = 42;

    /**
     * Replaces the target with the source
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-replace
     */
    const COMPOSITE_REPLACE = 43;

    /**
     * Saturates the target as defined by the source
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-saturate
     */
    const COMPOSITE_SATURATE = 44;

    /**
     * The source and destination are complemented and then multiplied and then replace the destination
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-screen
     */
    const COMPOSITE_SCREEN = 45;

    /**
     * Darkens or lightens the colors, dependent on the source
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-softlight
     */
    const COMPOSITE_SOFTLIGHT = 46;

    /**
     * The source is copied to the destination
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-src
     */
    const COMPOSITE_SRC = 48;

    /**
     * The part of the source lying inside of the destination is composited onto the destination
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-srcatop
     */
    const COMPOSITE_SRCATOP = 47;

    /**
     * The part of the source lying inside of the destination replaces the destination
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-srcin
     */
    const COMPOSITE_SRCIN = 49;

    /**
     * The part of the source lying outside of the destination replaces the destination
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-srcout
     */
    const COMPOSITE_SRCOUT = 50;

    /**
     * The source replaces the destination
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-srcover
     */
    const COMPOSITE_SRCOVER = 51;

    /**
     * Subtract the colors in the source image from the destination image
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-subtract
     */
    const COMPOSITE_SUBTRACT = 52;

    /**
     * The source is composited on the target as defined by source threshold
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-threshold
     */
    const COMPOSITE_THRESHOLD = 53;

    /**
     * Undefined composite operator
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-undefined
     */
    const COMPOSITE_UNDEFINED = 0;

    /**
     * @var int
     */
    const COMPOSITE_VIVIDLIGHT = 59;

    /**
     * The part of the source that lies outside of the destination is combined with the part of the destination that lies outside of the source
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.composite-xor
     */
    const COMPOSITE_XOR = 54;

    /**
     * @var int
     */
    const COMPRESSION_B44 = 17;

    /**
     * @var int
     */
    const COMPRESSION_B44A = 18;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.compression-bzip
     */
    const COMPRESSION_BZIP = 2;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.0 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.compression-dxt1
     */
    const COMPRESSION_DXT1 = 3;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.0 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.compression-dxt3
     */
    const COMPRESSION_DXT3 = 4;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.0 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.compression-dxt5
     */
    const COMPRESSION_DXT5 = 5;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.compression-fax
     */
    const COMPRESSION_FAX = 6;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.compression-group4
     */
    const COMPRESSION_GROUP4 = 7;

    /**
     * @var int
     */
    const COMPRESSION_JBIG1 = 20;

    /**
     * @var int
     */
    const COMPRESSION_JBIG2 = 21;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.compression-jpeg
     */
    const COMPRESSION_JPEG = 8;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.compression-jpeg2000
     */
    const COMPRESSION_JPEG2000 = 9;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.compression-losslessjpeg
     */
    const COMPRESSION_LOSSLESSJPEG = 10;

    /**
     * @var int
     */
    const COMPRESSION_LZMA = 19;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.compression-lzw
     */
    const COMPRESSION_LZW = 11;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.compression-no
     */
    const COMPRESSION_NO = 1;

    /**
     * @var int
     */
    const COMPRESSION_PIZ = 15;

    /**
     * @var int
     */
    const COMPRESSION_PXR24 = 16;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.compression-rle
     */
    const COMPRESSION_RLE = 12;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.compression-undefined
     */
    const COMPRESSION_UNDEFINED = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.compression-zip
     */
    const COMPRESSION_ZIP = 13;

    /**
     * @var int
     */
    const COMPRESSION_ZIPS = 14;

    /**
     * @var int
     */
    const DECORATION_LINETHROUGH = 4;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.decoration-linetrough
     */
    const DECORATION_LINETROUGH = 4;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.decoration-no
     */
    const DECORATION_NO = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.decoration-overline
     */
    const DECORATION_OVERLINE = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.decoration-underline
     */
    const DECORATION_UNDERLINE = 2;

    /**
     * @var int
     */
    const DIRECTION_LEFT_TO_RIGHT = 2;

    /**
     * @var int
     */
    const DIRECTION_RIGHT_TO_LEFT = 1;

    /**
     * Dispose background
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.dispose-background
     */
    const DISPOSE_BACKGROUND = 2;

    /**
     * No dispose type defined
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.dispose-none
     */
    const DISPOSE_NONE = 1;

    /**
     * Dispose previous
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.dispose-previous
     */
    const DISPOSE_PREVIOUS = 3;

    /**
     * Undefined dispose type
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.dispose-undefined
     */
    const DISPOSE_UNDEFINED = 0;

    /**
     * Unrecognized dispose type
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.dispose-unrecognized
     */
    const DISPOSE_UNRECOGNIZED = 0;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.distortion-affine
     */
    const DISTORTION_AFFINE = 1;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.distortion-affineprojection
     */
    const DISTORTION_AFFINEPROJECTION = 2;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.distortion-arc
     */
    const DISTORTION_ARC = 9;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.distortion-barrel
     */
    const DISTORTION_BARREL = 14;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.distortion-barrelinverse
     */
    const DISTORTION_BARRELINVERSE = 15;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.distortion-bilinear
     */
    const DISTORTION_BILINEAR = 6;

    /**
     * @var int
     */
    const DISTORTION_BILINEARFORWARD = 6;

    /**
     * @var int
     */
    const DISTORTION_BILINEARREVERSE = 7;

    /**
     * @var int
     */
    const DISTORTION_CYLINDER2PLANE = 12;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.distortion-depolar
     */
    const DISTORTION_DEPOLAR = 11;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.distortion-perspective
     */
    const DISTORTION_PERSPECTIVE = 4;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.distortion-perspectiveprojection
     */
    const DISTORTION_PERSPECTIVEPROJECTION = 5;

    /**
     * @var int
     */
    const DISTORTION_PLANE2CYLINDER = 13;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.distortion-polar
     */
    const DISTORTION_POLAR = 10;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.distortion-polynomial
     */
    const DISTORTION_POLYNOMIAL = 8;

    /**
     * @var int
     */
    const DISTORTION_RESIZE = 17;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.distortion-scalerotatetranslate
     */
    const DISTORTION_SCALEROTATETRANSLATE = 3;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.distortion-sentinel
     */
    const DISTORTION_SENTINEL = 18;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.distortion-shepards
     */
    const DISTORTION_SHEPARDS = 16;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.distortion-undefined
     */
    const DISTORTION_UNDEFINED = 0;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.dithermethod-floydsteinberg
     */
    const DITHERMETHOD_FLOYDSTEINBERG = 3;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.dithermethod-no
     */
    const DITHERMETHOD_NO = 1;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.dithermethod-riemersma
     */
    const DITHERMETHOD_RIEMERSMA = 2;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.dithermethod-undefined
     */
    const DITHERMETHOD_UNDEFINED = 0;

    /**
     * @var int
     */
    const EVALUATE_ABS = 28;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-add
     */
    const EVALUATE_ADD = 1;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-addmodulus
     */
    const EVALUATE_ADDMODULUS = 26;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-and
     */
    const EVALUATE_AND = 2;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-cosine
     */
    const EVALUATE_COSINE = 24;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-divide
     */
    const EVALUATE_DIVIDE = 3;

    /**
     * @var int
     */
    const EVALUATE_EXPONENTIAL = 29;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-gaussiannoise
     */
    const EVALUATE_GAUSSIANNOISE = 18;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-impulsenoise
     */
    const EVALUATE_IMPULSENOISE = 19;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-laplaciannoise
     */
    const EVALUATE_LAPLACIANNOISE = 20;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-leftshift
     */
    const EVALUATE_LEFTSHIFT = 4;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-log
     */
    const EVALUATE_LOG = 14;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-max
     */
    const EVALUATE_MAX = 5;

    /**
     * @var int
     */
    const EVALUATE_MEAN = 27;

    /**
     * @var int
     */
    const EVALUATE_MEDIAN = 30;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-min
     */
    const EVALUATE_MIN = 6;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-multiplicativenoise
     */
    const EVALUATE_MULTIPLICATIVENOISE = 21;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-multiply
     */
    const EVALUATE_MULTIPLY = 7;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-or
     */
    const EVALUATE_OR = 8;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-poissonnoise
     */
    const EVALUATE_POISSONNOISE = 22;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-pow
     */
    const EVALUATE_POW = 13;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-rightshift
     */
    const EVALUATE_RIGHTSHIFT = 9;

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @var int
     */
    const EVALUATE_ROOT_MEAN_SQUARE = 32;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-set
     */
    const EVALUATE_SET = 10;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-sine
     */
    const EVALUATE_SINE = 25;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-subtract
     */
    const EVALUATE_SUBTRACT = 11;

    /**
     * @var int
     */
    const EVALUATE_SUM = 31;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-threshold
     */
    const EVALUATE_THRESHOLD = 15;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-thresholdblack
     */
    const EVALUATE_THRESHOLDBLACK = 16;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-thresholdwhite
     */
    const EVALUATE_THRESHOLDWHITE = 17;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-undefined
     */
    const EVALUATE_UNDEFINED = 0;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-uniformnoise
     */
    const EVALUATE_UNIFORMNOISE = 23;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.evaluate-xor
     */
    const EVALUATE_XOR = 12;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.fillrule-evenodd
     */
    const FILLRULE_EVENODD = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.fillrule-nonzero
     */
    const FILLRULE_NONZERO = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.fillrule-undefined
     */
    const FILLRULE_UNDEFINED = 0;

    /**
     * @var int
     */
    const FILTER_BARTLETT = 20;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.filter-bessel
     */
    const FILTER_BESSEL = 13;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.filter-blackman
     */
    const FILTER_BLACKMAN = 7;

    /**
     * @var int
     */
    const FILTER_BOHMAN = 19;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.filter-box
     */
    const FILTER_BOX = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.filter-catrom
     */
    const FILTER_CATROM = 11;

    /**
     * @var int
     */
    const FILTER_COSINE = 28;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.filter-cubic
     */
    const FILTER_CUBIC = 10;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.filter-gaussian
     */
    const FILTER_GAUSSIAN = 8;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.filter-hamming
     */
    const FILTER_HAMMING = 6;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.filter-hanning
     */
    const FILTER_HANNING = 5;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.filter-hermite
     */
    const FILTER_HERMITE = 4;

    /**
     * @var int
     */
    const FILTER_JINC = 13;

    /**
     * @var int
     */
    const FILTER_KAISER = 16;

    /**
     * @var int
     */
    const FILTER_LAGRANGE = 21;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.filter-lanczos
     */
    const FILTER_LANCZOS = 22;

    /**
     * @var int
     */
    const FILTER_LANCZOS2 = 24;

    /**
     * @var int
     */
    const FILTER_LANCZOS2SHARP = 25;

    /**
     * @var int
     */
    const FILTER_LANCZOSRADIUS = 30;

    /**
     * @var int
     */
    const FILTER_LANCZOSSHARP = 23;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.filter-mitchell
     */
    const FILTER_MITCHELL = 12;

    /**
     * @var int
     */
    const FILTER_PARZEN = 18;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.filter-point
     */
    const FILTER_POINT = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.filter-quadratic
     */
    const FILTER_QUADRATIC = 9;

    /**
     * @var int
     */
    const FILTER_ROBIDOUX = 26;

    /**
     * @var int
     */
    const FILTER_ROBIDOUXSHARP = 27;

    /**
     * @var int
     */
    const FILTER_SENTINEL = 31;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.filter-sinc
     */
    const FILTER_SINC = 14;

    /**
     * @var int
     */
    const FILTER_SINCFAST = 15;

    /**
     * @var int
     */
    const FILTER_SPLINE = 29;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.filter-triangle
     */
    const FILTER_TRIANGLE = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.filter-undefined
     */
    const FILTER_UNDEFINED = 0;

    /**
     * @var int
     */
    const FILTER_WELSH = 17;

    /**
     * @var int
     */
    const FUNCTION_ARCSIN = 3;

    /**
     * @var int
     */
    const FUNCTION_ARCTAN = 4;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.9 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.function-polynomial
     */
    const FUNCTION_POLYNOMIAL = 1;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.9 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.function-sinusoid
     */
    const FUNCTION_SINUSOID = 2;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.9 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.function-undefined
     */
    const FUNCTION_UNDEFINED = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.gravity-center
     */
    const GRAVITY_CENTER = 5;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.gravity-east
     */
    const GRAVITY_EAST = 6;

    /**
     * @var int
     */
    const GRAVITY_FORGET = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.gravity-north
     */
    const GRAVITY_NORTH = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.gravity-northeast
     */
    const GRAVITY_NORTHEAST = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.gravity-northwest
     */
    const GRAVITY_NORTHWEST = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.gravity-south
     */
    const GRAVITY_SOUTH = 8;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.gravity-southeast
     */
    const GRAVITY_SOUTHEAST = 9;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.gravity-southwest
     */
    const GRAVITY_SOUTHWEST = 7;

    /**
     * @var int
     */
    const GRAVITY_STATIC = 10;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.gravity-west
     */
    const GRAVITY_WEST = 4;

    /**
     * @var int
     */
    const IMAGICK_EXTNUM = 30403;

    /**
     * @var string
     */
    const IMAGICK_EXTVER = '3.4.3';

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.imgtype-bilevel
     */
    const IMGTYPE_BILEVEL = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.imgtype-colorseparation
     */
    const IMGTYPE_COLORSEPARATION = 8;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.imgtype-colorseparationmatte
     */
    const IMGTYPE_COLORSEPARATIONMATTE = 9;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.imgtype-grayscale
     */
    const IMGTYPE_GRAYSCALE = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.imgtype-grayscalematte
     */
    const IMGTYPE_GRAYSCALEMATTE = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.imgtype-optimize
     */
    const IMGTYPE_OPTIMIZE = 10;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.imgtype-palette
     */
    const IMGTYPE_PALETTE = 4;

    /**
     * @var int
     */
    const IMGTYPE_PALETTEBILEVELMATTE = 11;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.imgtype-palettematte
     */
    const IMGTYPE_PALETTEMATTE = 5;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.imgtype-truecolor
     */
    const IMGTYPE_TRUECOLOR = 6;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.imgtype-truecolormatte
     */
    const IMGTYPE_TRUECOLORMATTE = 7;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.imgtype-undefined
     */
    const IMGTYPE_UNDEFINED = 0;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.4 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.interlace-gif
     */
    const INTERLACE_GIF = 5;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.interlace-jpeg
     */
    const INTERLACE_JPEG = 6;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.interlace-line
     */
    const INTERLACE_LINE = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.interlace-no
     */
    const INTERLACE_NO = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.interlace-partition
     */
    const INTERLACE_PARTITION = 4;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.interlace-plane
     */
    const INTERLACE_PLANE = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.interlace-png
     */
    const INTERLACE_PNG = 7;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.interlace-undefined
     */
    const INTERLACE_UNDEFINED = 0;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.interpolate-average
     */
    const INTERPOLATE_AVERAGE = 1;

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @var int
     */
    const INTERPOLATE_AVERAGE_16 = 10;

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @var int
     */
    const INTERPOLATE_AVERAGE_9 = 9;

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @var int
     */
    const INTERPOLATE_BACKGROUND_COLOR = 12;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.interpolate-bicubic
     */
    const INTERPOLATE_BICUBIC = 2;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.interpolate-bilinear
     */
    const INTERPOLATE_BILINEAR = 3;

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @var int
     */
    const INTERPOLATE_BLEND = 11;

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @var int
     */
    const INTERPOLATE_CATROM = 13;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.interpolate-filter
     */
    const INTERPOLATE_FILTER = 4;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.interpolate-integer
     */
    const INTERPOLATE_INTEGER = 5;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.interpolate-mesh
     */
    const INTERPOLATE_MESH = 6;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.interpolate-nearestneighbor
     */
    const INTERPOLATE_NEARESTNEIGHBOR = 7;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.4 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.interpolate-spline
     */
    const INTERPOLATE_SPLINE = 8;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.interpolate-undefined
     */
    const INTERPOLATE_UNDEFINED = 0;

    /**
     * @var int
     */
    const KERNEL_BINOMIAL = 37;

    /**
     * @var int
     */
    const KERNEL_BLUR = 5;

    /**
     * @var int
     */
    const KERNEL_CHEBYSHEV = 32;

    /**
     * @var int
     */
    const KERNEL_COMET = 6;

    /**
     * @var int
     */
    const KERNEL_COMPASS = 12;

    /**
     * @var int
     */
    const KERNEL_CONVEX_HULL = 29;

    /**
     * @var int
     */
    const KERNEL_CORNERS = 24;

    /**
     * @var int
     */
    const KERNEL_CROSS = 20;

    /**
     * @var int
     */
    const KERNEL_DIAGONALS = 25;

    /**
     * @var int
     */
    const KERNEL_DIAMOND = 14;

    /**
     * @var int
     */
    const KERNEL_DIFFERENCE_OF_GAUSSIANS = 3;

    /**
     * @var int
     */
    const KERNEL_DISK = 18;

    /**
     * @var int
     */
    const KERNEL_EDGES = 23;

    /**
     * @var int
     */
    const KERNEL_EUCLIDEAN = 35;

    /**
     * @var int
     */
    const KERNEL_FREI_CHEN = 9;

    /**
     * @var int
     */
    const KERNEL_GAUSSIAN = 2;

    /**
     * @var int
     */
    const KERNEL_KIRSCH = 13;

    /**
     * @var int
     */
    const KERNEL_LAPLACIAN = 7;

    /**
     * @var int
     */
    const KERNEL_LAPLACIAN_OF_GAUSSIANS = 4;

    /**
     * @var int
     */
    const KERNEL_LINE_ENDS = 26;

    /**
     * @var int
     */
    const KERNEL_LINE_JUNCTIONS = 27;

    /**
     * @var int
     */
    const KERNEL_MANHATTAN = 33;

    /**
     * @var int
     */
    const KERNEL_OCTAGON = 17;

    /**
     * @var int
     */
    const KERNEL_OCTAGONAL = 34;

    /**
     * @var int
     */
    const KERNEL_PEAKS = 22;

    /**
     * @var int
     */
    const KERNEL_PLUS = 19;

    /**
     * @var int
     */
    const KERNEL_PREWITT = 11;

    /**
     * @var int
     */
    const KERNEL_RECTANGLE = 16;

    /**
     * @var int
     */
    const KERNEL_RIDGES = 28;

    /**
     * @var int
     */
    const KERNEL_RING = 21;

    /**
     * @var int
     */
    const KERNEL_ROBERTS = 10;

    /**
     * @var int
     */
    const KERNEL_SKELETON = 31;

    /**
     * @var int
     */
    const KERNEL_SOBEL = 8;

    /**
     * @var int
     */
    const KERNEL_SQUARE = 15;

    /**
     * @var int
     */
    const KERNEL_THIN_SE = 30;

    /**
     * @var int
     */
    const KERNEL_UNITY = 1;

    /**
     * @var int
     */
    const KERNEL_USER_DEFINED = 36;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.layermethod-coalesce
     */
    const LAYERMETHOD_COALESCE = 1;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.layermethod-compareany
     */
    const LAYERMETHOD_COMPAREANY = 2;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.layermethod-compareclear
     */
    const LAYERMETHOD_COMPARECLEAR = 3;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.layermethod-compareoverlay
     */
    const LAYERMETHOD_COMPAREOVERLAY = 4;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.layermethod-composite
     */
    const LAYERMETHOD_COMPOSITE = 12;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.layermethod-dispose
     */
    const LAYERMETHOD_DISPOSE = 5;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.7 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.layermethod-flatten
     */
    const LAYERMETHOD_FLATTEN = 14;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.7 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.layermethod-merge
     */
    const LAYERMETHOD_MERGE = 13;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.7 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.layermethod-mosaic
     */
    const LAYERMETHOD_MOSAIC = 15;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.layermethod-optimize
     */
    const LAYERMETHOD_OPTIMIZE = 6;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.layermethod-optimizeimage
     */
    const LAYERMETHOD_OPTIMIZEIMAGE = 7;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.layermethod-optimizeplus
     */
    const LAYERMETHOD_OPTIMIZEPLUS = 8;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.layermethod-optimizetrans
     */
    const LAYERMETHOD_OPTIMIZETRANS = 9;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.layermethod-removedups
     */
    const LAYERMETHOD_REMOVEDUPS = 10;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.layermethod-removezero
     */
    const LAYERMETHOD_REMOVEZERO = 11;

    /**
     * @var int
     */
    const LAYERMETHOD_TRIMBOUNDS = 16;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.layermethod-undefined
     */
    const LAYERMETHOD_UNDEFINED = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.linecap-butt
     */
    const LINECAP_BUTT = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.linecap-round
     */
    const LINECAP_ROUND = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.linecap-square
     */
    const LINECAP_SQUARE = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.linecap-undefined
     */
    const LINECAP_UNDEFINED = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.linejoin-bevel
     */
    const LINEJOIN_BEVEL = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.linejoin-miter
     */
    const LINEJOIN_MITER = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.linejoin-round
     */
    const LINEJOIN_ROUND = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.linejoin-undefined
     */
    const LINEJOIN_UNDEFINED = 0;

    /**
     * @var int
     */
    const METRIC_ABSOLUTEERRORMETRIC = 1;

    /**
     * @var int
     */
    const METRIC_FUZZERROR = 9;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.metric-meanabsoluteerror
     */
    const METRIC_MEANABSOLUTEERROR = 2;

    /**
     * @var int
     */
    const METRIC_MEANERRORPERPIXELMETRIC = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.metric-meansquareerror
     */
    const METRIC_MEANSQUAREERROR = 4;

    /**
     * @var int
     */
    const METRIC_NORMALIZEDCROSSCORRELATIONERRORMETRIC = 8;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.metric-peakabsoluteerror
     */
    const METRIC_PEAKABSOLUTEERROR = 5;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.metric-peaksignaltonoiseratio
     */
    const METRIC_PEAKSIGNALTONOISERATIO = 6;

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @var int
     */
    const METRIC_PERCEPTUALHASH_ERROR = 255;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.metric-rootmeansquarederror
     */
    const METRIC_ROOTMEANSQUAREDERROR = 7;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.metric-undefined
     */
    const METRIC_UNDEFINED = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.montagemode-concatenate
     */
    const MONTAGEMODE_CONCATENATE = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.montagemode-frame
     */
    const MONTAGEMODE_FRAME = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.montagemode-unframe
     */
    const MONTAGEMODE_UNFRAME = 2;

    /**
     * @var int
     */
    const MORPHOLOGY_BOTTOM_HAT = 17;

    /**
     * @var int
     */
    const MORPHOLOGY_CLOSE = 9;

    /**
     * @var int
     */
    const MORPHOLOGY_CLOSE_INTENSITY = 11;

    /**
     * @var int
     */
    const MORPHOLOGY_CONVOLVE = 1;

    /**
     * @var int
     */
    const MORPHOLOGY_CORRELATE = 2;

    /**
     * @var int
     */
    const MORPHOLOGY_DILATE = 4;

    /**
     * @var int
     */
    const MORPHOLOGY_DILATE_INTENSITY = 6;

    /**
     * @var int
     */
    const MORPHOLOGY_DISTANCE = 7;

    /**
     * @var int
     */
    const MORPHOLOGY_EDGE = 15;

    /**
     * @var int
     */
    const MORPHOLOGY_EDGE_IN = 13;

    /**
     * @var int
     */
    const MORPHOLOGY_EDGE_OUT = 14;

    /**
     * @var int
     */
    const MORPHOLOGY_ERODE = 3;

    /**
     * @var int
     */
    const MORPHOLOGY_ERODE_INTENSITY = 5;

    /**
     * @var int
     */
    const MORPHOLOGY_HIT_AND_MISS = 18;

    /**
     * @var int
     */
    const MORPHOLOGY_ITERATIVE = 22;

    /**
     * @var int
     */
    const MORPHOLOGY_OPEN = 8;

    /**
     * @var int
     */
    const MORPHOLOGY_OPEN_INTENSITY = 10;

    /**
     * @var int
     */
    const MORPHOLOGY_SMOOTH = 12;

    /**
     * @var int
     */
    const MORPHOLOGY_THICKEN = 20;

    /**
     * @var int
     */
    const MORPHOLOGY_THINNING = 19;

    /**
     * @var int
     */
    const MORPHOLOGY_TOP_HAT = 16;

    /**
     * @var int
     */
    const MORPHOLOGY_VORONOI = 21;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.noise-gaussian
     */
    const NOISE_GAUSSIAN = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.noise-impulse
     */
    const NOISE_IMPULSE = 4;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.noise-laplacian
     */
    const NOISE_LAPLACIAN = 5;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.noise-multiplicativegaussian
     */
    const NOISE_MULTIPLICATIVEGAUSSIAN = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.noise-poisson
     */
    const NOISE_POISSON = 6;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.noise-random
     */
    const NOISE_RANDOM = 7;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.noise-uniform
     */
    const NOISE_UNIFORM = 1;

    /**
     * @var int
     */
    const NORMALIZE_KERNEL_CORRELATE = 65536;

    /**
     * @var int
     */
    const NORMALIZE_KERNEL_NONE = 0;

    /**
     * @var int
     */
    const NORMALIZE_KERNEL_PERCENT = 4096;

    /**
     * @var int
     */
    const NORMALIZE_KERNEL_VALUE = 8192;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.orientation-bottomleft
     */
    const ORIENTATION_BOTTOMLEFT = 4;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.orientation-bottomright
     */
    const ORIENTATION_BOTTOMRIGHT = 3;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.orientation-leftbottom
     */
    const ORIENTATION_LEFTBOTTOM = 8;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.orientation-lefttop
     */
    const ORIENTATION_LEFTTOP = 5;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.orientation-rightbottom
     */
    const ORIENTATION_RIGHTBOTTOM = 7;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.orientation-righttop
     */
    const ORIENTATION_RIGHTTOP = 6;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.orientation-topleft
     */
    const ORIENTATION_TOPLEFT = 1;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.orientation-topright
     */
    const ORIENTATION_TOPRIGHT = 2;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.orientation-undefined
     */
    const ORIENTATION_UNDEFINED = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.paint-filltoborder
     */
    const PAINT_FILLTOBORDER = 4;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.paint-floodfill
     */
    const PAINT_FLOODFILL = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.paint-point
     */
    const PAINT_POINT = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.paint-replace
     */
    const PAINT_REPLACE = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.paint-reset
     */
    const PAINT_RESET = 5;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.pathunits-objectboundingbox
     */
    const PATHUNITS_OBJECTBOUNDINGBOX = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.pathunits-undefined
     */
    const PATHUNITS_UNDEFINED = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.pathunits-userspace
     */
    const PATHUNITS_USERSPACE = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.pathunits-userspaceonuse
     */
    const PATHUNITS_USERSPACEONUSE = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.pixel-char
     */
    const PIXEL_CHAR = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.pixel-double
     */
    const PIXEL_DOUBLE = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.pixel-float
     */
    const PIXEL_FLOAT = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.pixel-integer
     */
    const PIXEL_INTEGER = 4;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.pixel-long
     */
    const PIXEL_LONG = 5;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.pixel-quantum
     */
    const PIXEL_QUANTUM = 6;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.pixel-short
     */
    const PIXEL_SHORT = 7;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-addnoise
     */
    const PREVIEW_ADDNOISE = 14;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-blur
     */
    const PREVIEW_BLUR = 16;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-brightness
     */
    const PREVIEW_BRIGHTNESS = 6;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-charcoaldrawing
     */
    const PREVIEW_CHARCOALDRAWING = 28;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-despeckle
     */
    const PREVIEW_DESPECKLE = 12;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-dull
     */
    const PREVIEW_DULL = 9;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-edgedetect
     */
    const PREVIEW_EDGEDETECT = 18;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-gamma
     */
    const PREVIEW_GAMMA = 7;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-grayscale
     */
    const PREVIEW_GRAYSCALE = 10;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-hue
     */
    const PREVIEW_HUE = 4;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-implode
     */
    const PREVIEW_IMPLODE = 25;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-jpeg
     */
    const PREVIEW_JPEG = 29;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-oilpaint
     */
    const PREVIEW_OILPAINT = 27;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-quantize
     */
    const PREVIEW_QUANTIZE = 11;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-raise
     */
    const PREVIEW_RAISE = 22;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-reducenoise
     */
    const PREVIEW_REDUCENOISE = 13;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-roll
     */
    const PREVIEW_ROLL = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-rotate
     */
    const PREVIEW_ROTATE = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-saturation
     */
    const PREVIEW_SATURATION = 5;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-segment
     */
    const PREVIEW_SEGMENT = 23;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-shade
     */
    const PREVIEW_SHADE = 21;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-sharpen
     */
    const PREVIEW_SHARPEN = 15;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-shear
     */
    const PREVIEW_SHEAR = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-solarize
     */
    const PREVIEW_SOLARIZE = 20;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-spiff
     */
    const PREVIEW_SPIFF = 8;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-spread
     */
    const PREVIEW_SPREAD = 19;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-swirl
     */
    const PREVIEW_SWIRL = 24;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-threshold
     */
    const PREVIEW_THRESHOLD = 17;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-undefined
     */
    const PREVIEW_UNDEFINED = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.preview-wave
     */
    const PREVIEW_WAVE = 26;

    /**
     * @var int
     */
    const QUANTUM_RANGE = 65535;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.renderingintent-absolute
     */
    const RENDERINGINTENT_ABSOLUTE = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.renderingintent-perceptual
     */
    const RENDERINGINTENT_PERCEPTUAL = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.renderingintent-relative
     */
    const RENDERINGINTENT_RELATIVE = 4;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.renderingintent-saturation
     */
    const RENDERINGINTENT_SATURATION = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.renderingintent-undefined
     */
    const RENDERINGINTENT_UNDEFINED = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.resolution-pixelspercentimeter
     */
    const RESOLUTION_PIXELSPERCENTIMETER = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.resolution-pixelsperinch
     */
    const RESOLUTION_PIXELSPERINCH = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.resolution-undefined
     */
    const RESOLUTION_UNDEFINED = 0;

    /**
     * Set the maximum width * height of an image that can reside in the pixel cache memory.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.resourcetype-area
     */
    const RESOURCETYPE_AREA = 1;

    /**
     * Set maximum amount of disk space in bytes permitted for use by the pixel cache.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.resourcetype-disk
     */
    const RESOURCETYPE_DISK = 2;

    /**
     * Set maximum number of open pixel cache files.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.resourcetype-file
     */
    const RESOURCETYPE_FILE = 3;

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @var int
     */
    const RESOURCETYPE_HEIGHT = 10;

    /**
     * Set maximum amount of memory map in bytes to allocate for the pixel cache.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.resourcetype-map
     */
    const RESOURCETYPE_MAP = 4;

    /**
     * Set maximum amount of memory in bytes to allocate for the pixel cache from the heap.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.resourcetype-memory
     */
    const RESOURCETYPE_MEMORY = 5;

    /**
     * Set maximum parallel threads.
     * This constant is available if Imagick has been compiled against ImageMagick version 6.7.8 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.resourcetype-thread
     */
    const RESOURCETYPE_THREAD = 6;

    /**
     * @var int
     */
    const RESOURCETYPE_THROTTLE = 8;

    /**
     * @var int
     */
    const RESOURCETYPE_TIME = 7;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.resourcetype-undefined
     */
    const RESOURCETYPE_UNDEFINED = 0;

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @var int
     */
    const RESOURCETYPE_WIDTH = 9;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.sparsecolormethod-barycentric
     */
    const SPARSECOLORMETHOD_BARYCENTRIC = 1;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.sparsecolormethod-bilinear
     */
    const SPARSECOLORMETHOD_BILINEAR = 7;

    /**
     * @var int
     */
    const SPARSECOLORMETHOD_INVERSE = 19;

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @var int
     */
    const SPARSECOLORMETHOD_MANHATTAN = 20;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.sparsecolormethod-polynomial
     */
    const SPARSECOLORMETHOD_POLYNOMIAL = 8;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.sparsecolormethod-spepards
     */
    const SPARSECOLORMETHOD_SPEPARDS = 16;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.sparsecolormethod-undefined
     */
    const SPARSECOLORMETHOD_UNDEFINED = 0;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.sparsecolormethod-voronoi
     */
    const SPARSECOLORMETHOD_VORONOI = 18;

    /**
     * @var int
     */
    const STATISTIC_GRADIENT = 1;

    /**
     * @var int
     */
    const STATISTIC_MAXIMUM = 2;

    /**
     * @var int
     */
    const STATISTIC_MEAN = 3;

    /**
     * @var int
     */
    const STATISTIC_MEDIAN = 4;

    /**
     * @var int
     */
    const STATISTIC_MINIMUM = 5;

    /**
     * @var int
     */
    const STATISTIC_MODE = 6;

    /**
     * @var int
     */
    const STATISTIC_NONPEAK = 7;

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @var int
     */
    const STATISTIC_ROOT_MEAN_SQUARE = 9;

    /**
     * @var int
     */
    const STATISTIC_STANDARD_DEVIATION = 8;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.stretch-any
     */
    const STRETCH_ANY = 10;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.stretch-condensed
     */
    const STRETCH_CONDENSED = 4;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.stretch-expanded
     */
    const STRETCH_EXPANDED = 7;

    /**
     * @var int
     */
    const STRETCH_EXTRACONDENSED = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.stretch-extraexpanded
     */
    const STRETCH_EXTRAEXPANDED = 8;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.stretch-normal
     */
    const STRETCH_NORMAL = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.stretch-semicondensed
     */
    const STRETCH_SEMICONDENSED = 5;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.stretch-semiexpanded
     */
    const STRETCH_SEMIEXPANDED = 6;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.stretch-ultracondensed
     */
    const STRETCH_ULTRACONDENSED = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.stretch-ultraexpanded
     */
    const STRETCH_ULTRAEXPANDED = 9;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.style-any
     */
    const STYLE_ANY = 4;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.style-italic
     */
    const STYLE_ITALIC = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.style-normal
     */
    const STYLE_NORMAL = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.style-oblique
     */
    const STYLE_OBLIQUE = 3;

    /**
     * @var int
     */
    const USE_ZEND_MM = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.virtualpixelmethod-background
     */
    const VIRTUALPIXELMETHOD_BACKGROUND = 1;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.2 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.virtualpixelmethod-black
     */
    const VIRTUALPIXELMETHOD_BLACK = 10;

    /**
     * @var int
     */
    const VIRTUALPIXELMETHOD_CHECKERTILE = 17;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.virtualpixelmethod-constant
     */
    const VIRTUALPIXELMETHOD_CONSTANT = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.virtualpixelmethod-edge
     */
    const VIRTUALPIXELMETHOD_EDGE = 4;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.2 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.virtualpixelmethod-gray
     */
    const VIRTUALPIXELMETHOD_GRAY = 11;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.3 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.virtualpixelmethod-horizontaltile
     */
    const VIRTUALPIXELMETHOD_HORIZONTALTILE = 13;

    /**
     * @var int
     */
    const VIRTUALPIXELMETHOD_HORIZONTALTILEEDGE = 15;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.2 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.virtualpixelmethod-mask
     */
    const VIRTUALPIXELMETHOD_MASK = 9;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.virtualpixelmethod-mirror
     */
    const VIRTUALPIXELMETHOD_MIRROR = 5;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.virtualpixelmethod-tile
     */
    const VIRTUALPIXELMETHOD_TILE = 7;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.virtualpixelmethod-transparent
     */
    const VIRTUALPIXELMETHOD_TRANSPARENT = 8;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.virtualpixelmethod-undefined
     */
    const VIRTUALPIXELMETHOD_UNDEFINED = 0;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.3 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.virtualpixelmethod-verticaltile
     */
    const VIRTUALPIXELMETHOD_VERTICALTILE = 14;

    /**
     * @var int
     */
    const VIRTUALPIXELMETHOD_VERTICALTILEEDGE = 16;

    /**
     * This constant is available if Imagick has been compiled against ImageMagick version 6.4.2 or higher.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/imagick.constants.php#imagick.constants.virtualpixelmethod-white
     */
    const VIRTUALPIXELMETHOD_WHITE = 12;

    /**
     * The Imagick constructor
     *
     * @param mixed $files
     *
     * @link http://www.php.net/manual/en/imagick.construct.php
     */
    public function __construct($files = null)
    {
    }

    /**
     * Returns the image as a string
     *
     * @return string Returns the string content on success or an empty string on failure.
     *
     * @link http://www.php.net/manual/en/imagick.tostring.php
     */
    public function __tostring(): string
    {
    }

    /**
     * Adds adaptive blur filter to image
     *
     * @param float $radius The radius of the Gaussian, in pixels, not counting the center pixel.
     * Provide a value of 0 and the radius will be chosen automagically.
     * @param float $sigma The standard deviation of the Gaussian, in pixels.
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <code>Imagick::CHANNEL_DEFAULT</code>. Refer to this list of channel constants
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.adaptiveblurimage.php
     */
    public function adaptiveblurimage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Adaptively resize image with data dependent triangulation
     *
     * @param int $columns The number of columns in the scaled image.
     * @param int $rows The number of rows in the scaled image.
     * @param bool|null $bestfit Whether to fit the image inside a bounding box.
     * @param bool|null $legacy
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.adaptiveresizeimage.php
     */
    public function adaptiveresizeimage(int $columns, int $rows, bool $bestfit = false, bool $legacy = false): bool
    {
    }

    /**
     * Adaptively sharpen the image
     *
     * @param float $radius The radius of the Gaussian, in pixels, not counting the center pixel. Use 0 for auto-select.
     * @param float $sigma The standard deviation of the Gaussian, in pixels.
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <code>Imagick::CHANNEL_DEFAULT</code>. Refer to this list of channel constants
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.adaptivesharpenimage.php
     */
    public function adaptivesharpenimage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Selects a threshold for each pixel based on a range of intensity
     *
     * @param int $width Width of the local neighborhood.
     * @param int $height Height of the local neighborhood.
     * @param int $offset The mean offset
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.adaptivethresholdimage.php
     */
    public function adaptivethresholdimage(int $width, int $height, int $offset): bool
    {
    }

    /**
     * Adds new image to Imagick object image list
     *
     * @param Imagick $source The source Imagick object
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.addimage.php
     */
    public function addimage(Imagick $source): bool
    {
    }

    /**
     * Adds random noise to the image
     *
     * @param int $noise_type The type of the noise. Refer to this list of
     * noise constants.
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <code>Imagick::CHANNEL_DEFAULT</code>. Refer to this list of channel constants
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.addnoiseimage.php
     */
    public function addnoiseimage(int $noise_type, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Transforms an image
     *
     * @param ImagickDraw $matrix The affine matrix
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.affinetransformimage.php
     */
    public function affinetransformimage(ImagickDraw $matrix): bool
    {
    }

    /**
     * Animates an image or images
     *
     * @param string $x_server X server address
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.animateimages.php
     */
    public function animateimages(string $x_server): bool
    {
    }

    /**
     * Annotates an image with text
     *
     * @param ImagickDraw $draw_settings The ImagickDraw object that contains settings for drawing the text
     * @param float $x Horizontal offset in pixels to the left of text
     * @param float $y Vertical offset in pixels to the baseline of text
     * @param float $angle The angle at which to write the text
     * @param string $text The string to draw
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.annotateimage.php
     */
    public function annotateimage(ImagickDraw $draw_settings, float $x, float $y, float $angle, string $text): bool
    {
    }

    /**
     * Append a set of images
     *
     * @param bool|null $stack Whether to stack the images vertically.
     * By default (or if <code>FALSE</code> is specified) images are stacked left-to-right.
     * If <code>stack</code> is <code>TRUE</code>, images are stacked top-to-bottom.
     *
     * @return Imagick Returns Imagick instance on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.appendimages.php
     */
    public function appendimages(bool $stack = false): Imagick
    {
    }

    /**
     * @param mixed $CHANNEL
     */
    public function autogammaimage($CHANNEL)
    {
    }

    /**
     * Description
     *
     * @param int|null $channel Which channel should the auto-levelling should be done on.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.autolevelimage.php
     */
    public function autolevelimage(int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     */
    public function autoorient()
    {
    }

    /**
     * Average a set of images
     *
     * @return Imagick Returns a new Imagick object on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.averageimages.php
     */
    public function averageimages(): Imagick
    {
    }

    /**
     * Forces all pixels below the threshold into black
     *
     * @param mixed $threshold The threshold below which everything turns black
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.blackthresholdimage.php
     */
    public function blackthresholdimage($threshold): bool
    {
    }

    /**
     * Description
     *
     * @param float|null $factor
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.blueshiftimage.php
     */
    public function blueshiftimage(float $factor = 1.5): bool
    {
    }

    /**
     * Adds blur filter to image
     *
     * @param float $radius Blur radius
     * @param float $sigma Standard deviation
     * @param int $channel The Channeltype
     * constant. When not supplied, all channels are blurred.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.blurimage.php
     */
    public function blurimage(float $radius, float $sigma, int $channel = null): bool
    {
    }

    /**
     * Surrounds the image with a border
     *
     * @param mixed $bordercolor ImagickPixel object or a string containing the border color
     * @param int $width Border width
     * @param int $height Border height
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.borderimage.php
     */
    public function borderimage($bordercolor, int $width, int $height): bool
    {
    }

    /**
     * Description
     *
     * @param float $brightness
     * @param float $contrast
     * @param int|null $channel
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.brightnesscontrastimage.php
     */
    public function brightnesscontrastimage(float $brightness, float $contrast, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * @param mixed $orig_width
     * @param mixed $orig_height
     * @param mixed $desired_width
     * @param mixed $desired_height
     * @param mixed $legacy
     */
    public static function calculatecrop($orig_width, $orig_height, $desired_width, $desired_height, $legacy = null)
    {
    }

    /**
     * Simulates a charcoal drawing
     *
     * @param float $radius The radius of the Gaussian, in pixels, not counting the center pixel
     * @param float $sigma The standard deviation of the Gaussian, in pixels
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.charcoalimage.php
     */
    public function charcoalimage(float $radius, float $sigma): bool
    {
    }

    /**
     * Removes a region of an image and trims
     *
     * @param int $width Width of the chopped area
     * @param int $height Height of the chopped area
     * @param int $x X origo of the chopped area
     * @param int $y Y origo of the chopped area
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.chopimage.php
     */
    public function chopimage(int $width, int $height, int $x, int $y): bool
    {
    }

    /**
     * Description
     *
     * @param int|null $channel
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/imagick.clampimage.php
     */
    public function clampimage(int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Clears all resources associated to Imagick object
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.clear.php
     */
    public function clear(): bool
    {
    }

    /**
     * Clips along the first path from the 8BIM profile
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.clipimage.php
     */
    public function clipimage(): bool
    {
    }

    /**
     * Description
     *
     * @param string $pathname
     * @param string $inside
     *
     * @return void
     *
     * @link http://www.php.net/manual/en/imagick.clipimagepath.php
     */
    public function clipimagepath(string $pathname, string $inside)
    {
    }

    /**
     * Clips along the named paths from the 8BIM profile
     *
     * @param string $pathname The name of the path
     * @param bool $inside If <code>TRUE</code> later operations take effect inside clipping path.
     * Otherwise later operations take effect outside clipping path.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.clippathimage.php
     */
    public function clippathimage(string $pathname, bool $inside): bool
    {
    }

    /**
     * Makes an exact copy of the Imagick object
     *
     * @return Imagick A copy of the Imagick object is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.clone.php
     */
    public function clone(): Imagick
    {
    }

    /**
     * Replaces colors in the image
     *
     * @param Imagick $lookup_table Imagick object containing the color lookup table
     * @param int|null $channel The Channeltype
     * constant. When not supplied, default channels are replaced.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.clutimage.php
     */
    public function clutimage(Imagick $lookup_table, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Composites a set of images
     *
     * @return Imagick Returns a new Imagick object on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.coalesceimages.php
     */
    public function coalesceimages(): Imagick
    {
    }

    /**
     * @param mixed $antialias
     */
    public function colordecisionlistimage($antialias)
    {
    }

    /**
     * Changes the color value of any pixel that matches target
     *
     * @param mixed $fill ImagickPixel object containing the fill color
     * @param float $fuzz The amount of fuzz. For example, set fuzz to 10 and the color red at
     * intensities of 100 and 102 respectively are now interpreted as the
     * same color for the purposes of the floodfill.
     * @param mixed $bordercolor ImagickPixel object containing the border color
     * @param int $x X start position of the floodfill
     * @param int $y Y start position of the floodfill
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.colorfloodfillimage.php
     */
    public function colorfloodfillimage($fill, float $fuzz, $bordercolor, int $x, int $y): bool
    {
    }

    /**
     * Blends the fill color with the image
     *
     * @param mixed $colorize ImagickPixel object or a string containing the colorize color
     * @param mixed $opacity ImagickPixel object or an float containing the opacity value.
     * 1.0 is fully opaque and 0.0 is fully transparent.
     * @param bool|null $legacy
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.colorizeimage.php
     */
    public function colorizeimage($colorize, $opacity, bool $legacy = false): bool
    {
    }

    /**
     * Description
     *
     * @param array|null $color_matrix
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.colormatriximage.php
     */
    public function colormatriximage(array $color_matrix = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Combines one or more images into a single image
     *
     * @return Imagick Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.combineimages.php
     */
    public function combineimages(): Imagick
    {
    }

    /**
     * Adds a comment to your image
     *
     * @param string $comment The comment to add
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.commentimage.php
     */
    public function commentimage(string $comment): bool
    {
    }

    /**
     * Returns the difference in one or more images
     *
     * @param Imagick $image Imagick object containing the image to compare.
     * @param int $channelType Provide any channel constant that is valid for your channel mode. To
     * apply to more than one channel, combine channeltype constants using
     * bitwise operators. Refer to this
     * list of channel constants.
     * @param int $metricType One of the metric type constants.
     *
     * @return array Array consisting of <code>new_wand</code> and
     * <code>distortion</code>.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.compareimagechannels.php
     */
    public function compareimagechannels(Imagick $image, int $channelType, int $metricType): array
    {
    }

    /**
     * Returns the maximum bounding region between images
     *
     * @param int $method One of the layer method constants.
     *
     * @return Imagick Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.compareimagelayers.php
     */
    public function compareimagelayers(int $method): Imagick
    {
    }

    /**
     * Compares an image to a reconstructed image
     *
     * @param Imagick $compare An image to compare to.
     * @param int $metric Provide a valid metric type constant. Refer to this
     * list of metric constants.
     *
     * @return array Returns an array containing a reconstructed image and the difference between images.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.compareimages.php
     */
    public function compareimages(Imagick $compare, int $metric): array
    {
    }

    /**
     * Composite one image onto another
     *
     * @param Imagick $composite_object Imagick object which holds the composite image
     * @param int $composite
     * @param int $x The column offset of the composited image
     * @param int $y The row offset of the composited image
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To
     * apply to more than one channel, combine channeltype constants using
     * bitwise operators. Refer to this list of channel constants.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.compositeimage.php
     */
    public function compositeimage(Imagick $composite_object, int $composite, int $x, int $y, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @param Imagick $Imagick
     * @param mixed $COMPOSITE
     * @param mixed $GRAVITY
     */
    public function compositeimagegravity(Imagick $Imagick, $COMPOSITE, $GRAVITY)
    {
    }

    /**
     * Change the contrast of the image
     *
     * @param bool $sharpen The sharpen value
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.contrastimage.php
     */
    public function contrastimage(bool $sharpen): bool
    {
    }

    /**
     * Enhances the contrast of a color image
     *
     * @param float $black_point The black point.
     * @param float $white_point The white point.
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To
     * apply to more than one channel, combine channeltype constants using
     * bitwise operators. <code>Imagick::CHANNEL_ALL</code>. Refer to this
     * list of channel constants.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.contraststretchimage.php
     */
    public function contraststretchimage(float $black_point, float $white_point, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Applies a custom convolution kernel to the image
     *
     * @param array $kernel The convolution kernel
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To
     * apply to more than one channel, combine channeltype constants using
     * bitwise operators. Refer to this
     * list of channel constants.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.convolveimage.php
     */
    public function convolveimage(array $kernel, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Get the number of images
     *
     * @param int|null $mode An unused argument. Currently there is a non-particularly well defined feature in PHP where calling count() on a countable object might (or might not) require this method to accept a parameter. This parameter is here to be conformant with the interface of countable, even though the param is not used.
     *
     * @return int Returns the number of images.
     *
     * @link http://www.php.net/manual/en/imagick.count.php
     */
    public function count(int $mode = 0): int
    {
    }

    /**
     * Extracts a region of the image
     *
     * @param int $width The width of the crop
     * @param int $height The height of the crop
     * @param int $x The X coordinate of the cropped region's top left corner
     * @param int $y The Y coordinate of the cropped region's top left corner
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.cropimage.php
     */
    public function cropimage(int $width, int $height, int $x, int $y): bool
    {
    }

    /**
     * Creates a crop thumbnail
     *
     * @param int $width The width of the thumbnail
     * @param int $height The Height of the thumbnail
     * @param bool|null $legacy
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.cropthumbnailimage.php
     */
    public function cropthumbnailimage(int $width, int $height, bool $legacy = false): bool
    {
    }

    /**
     * Returns a reference to the current Imagick object
     *
     * @return Imagick Returns self on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.current.php
     */
    public function current(): Imagick
    {
    }

    /**
     * Displaces an image's colormap
     *
     * @param int $displace The amount to displace the colormap.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.cyclecolormapimage.php
     */
    public function cyclecolormapimage(int $displace): bool
    {
    }

    /**
     * Deciphers an image
     *
     * @param string $passphrase The passphrase
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.decipherimage.php
     */
    public function decipherimage(string $passphrase): bool
    {
    }

    /**
     * Returns certain pixel differences between images
     *
     * @return Imagick Returns a new Imagick object on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.deconstructimages.php
     */
    public function deconstructimages(): Imagick
    {
    }

    /**
     * Delete image artifact
     *
     * @param string $artifact The name of the artifact to delete
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.deleteimageartifact.php
     */
    public function deleteimageartifact(string $artifact): bool
    {
    }

    /**
     * Description
     *
     * @param string $name The name of the property to delete.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.deleteimageproperty.php
     */
    public function deleteimageproperty(string $name): bool
    {
    }

    /**
     * Removes skew from the image
     *
     * @param float $threshold Deskew threshold
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.deskewimage.php
     */
    public function deskewimage(float $threshold): bool
    {
    }

    /**
     * Reduces the speckle noise in an image
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.despeckleimage.php
     */
    public function despeckleimage(): bool
    {
    }

    /**
     * Destroys the Imagick object
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.destroy.php
     */
    public function destroy(): bool
    {
    }

    /**
     * Displays an image
     *
     * @param string $servername The X server name
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.displayimage.php
     */
    public function displayimage(string $servername): bool
    {
    }

    /**
     * Displays an image or image sequence
     *
     * @param string $servername The X server name
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.displayimages.php
     */
    public function displayimages(string $servername): bool
    {
    }

    /**
     * Distorts an image using various distortion methods
     *
     * @param int $method The method of image distortion. See distortion constants
     * @param array $arguments The arguments for this distortion method
     * @param bool $bestfit Attempt to resize destination to fit distorted source
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.1
     *
     * @link http://www.php.net/manual/en/imagick.distortimage.php
     */
    public function distortimage(int $method, array $arguments, bool $bestfit): bool
    {
    }

    /**
     * Renders the ImagickDraw object on the current image
     *
     * @param ImagickDraw $draw The drawing operations to render on the image.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.drawimage.php
     */
    public function drawimage(ImagickDraw $draw): bool
    {
    }

    /**
     * Enhance edges within the image
     *
     * @param float $radius The radius of the operation.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.edgeimage.php
     */
    public function edgeimage(float $radius): bool
    {
    }

    /**
     * Returns a grayscale image with a three-dimensional effect
     *
     * @param float $radius The radius of the effect
     * @param float $sigma The sigma of the effect
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.embossimage.php
     */
    public function embossimage(float $radius, float $sigma): bool
    {
    }

    /**
     * Enciphers an image
     *
     * @param string $passphrase The passphrase
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.encipherimage.php
     */
    public function encipherimage(string $passphrase): bool
    {
    }

    /**
     * Improves the quality of a noisy image
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.enhanceimage.php
     */
    public function enhanceimage(): bool
    {
    }

    /**
     * Equalizes the image histogram
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.equalizeimage.php
     */
    public function equalizeimage(): bool
    {
    }

    /**
     * Applies an expression to an image
     *
     * @param int $op The evaluation operator
     * @param float $constant The value of the operator
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To
     * apply to more than one channel, combine channeltype constants using
     * bitwise operators. Refer to this
     * list of channel constants.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.evaluateimage.php
     */
    public function evaluateimage(int $op, float $constant, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * @param mixed $EVALUATE
     */
    public function evaluateimages($EVALUATE)
    {
    }

    /**
     * Exports raw image pixels
     *
     * @param int $x X-coordinate of the exported area
     * @param int $y Y-coordinate of the exported area
     * @param int $width Width of the exported aread
     * @param int $height Height of the exported area
     * @param string $map Ordering of the exported pixels. For example <code>"RGB"</code>.
     * Valid characters for the map are R, G, B, A, O, C, Y, M, K, I and P.
     * @param int $STORAGE Refer to this list of pixel type constants
     *
     * @return array Returns an array containing the pixels values.
     *
     * @link http://www.php.net/manual/en/imagick.exportimagepixels.php
     */
    public function exportimagepixels(int $x, int $y, int $width, int $height, string $map, int $STORAGE): array
    {
    }

    /**
     * Set image size
     *
     * @param int $width The new width
     * @param int $height The new height
     * @param int $x X position for the new size
     * @param int $y Y position for the new size
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.extentimage.php
     */
    public function extentimage(int $width, int $height, int $x, int $y): bool
    {
    }

    /**
     * Description
     *
     * @param ImagickKernel $ImagickKernel An instance of ImagickKernel that represents either a single kernel or a linked series of kernels.
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <code>Imagick::CHANNEL_DEFAULT</code>. Refer to this list of channel constants
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.filter.php
     */
    public function filter(ImagickKernel $ImagickKernel, int $channel = Imagick::CHANNEL_UNDEFINED): bool
    {
    }

    /**
     * Merges a sequence of images
     *
     * @return Imagick Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.flattenimages.php
     */
    public function flattenimages(): Imagick
    {
    }

    /**
     * Creates a vertical mirror image
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.flipimage.php
     */
    public function flipimage(): bool
    {
    }

    /**
     * Changes the color value of any pixel that matches target
     *
     * @param mixed $fill ImagickPixel object or a string containing the fill color
     * @param float $fuzz The amount of fuzz. For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color.
     * @param mixed $target ImagickPixel object or a string containing the target color to paint
     * @param int $x X start position of the floodfill
     * @param int $y Y start position of the floodfill
     * @param bool $invert If <code>TRUE</code> paints any pixel that does not match the target color.
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <code>Imagick::CHANNEL_DEFAULT</code>. Refer to this list of channel constants
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.floodfillpaintimage.php
     */
    public function floodfillpaintimage($fill, float $fuzz, $target, int $x, int $y, bool $invert, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Creates a horizontal mirror image
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.flopimage.php
     */
    public function flopimage(): bool
    {
    }

    /**
     * Description
     *
     * @param bool $magnitude If true, return as magnitude / phase pair otherwise a real / imaginary image pair.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.forwardfouriertransformimage.php
     */
    public function forwardfouriertransformimage(bool $magnitude): bool
    {
    }

    /**
     * Adds a simulated three-dimensional border
     *
     * @param mixed $matte_color ImagickPixel object or a string representing the matte color
     * @param int $width The width of the border
     * @param int $height The height of the border
     * @param int $inner_bevel The inner bevel width
     * @param int $outer_bevel The outer bevel width
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.frameimage.php
     */
    public function frameimage($matte_color, int $width, int $height, int $inner_bevel, int $outer_bevel): bool
    {
    }

    /**
     * Applies a function on the image
     *
     * @param int $function Refer to this list of function constants
     * @param array $arguments Array of arguments to pass to this function.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.functionimage.php
     */
    public function functionimage(int $function, array $arguments): bool
    {
    }

    /**
     * Evaluate expression for each pixel in the image
     *
     * @param string $expression The expression.
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To
     * apply to more than one channel, combine channeltype constants using
     * bitwise operators. Refer to this
     * list of channel constants.
     *
     * @return Imagick Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.fximage.php
     */
    public function fximage(string $expression, int $channel = Imagick::CHANNEL_DEFAULT): Imagick
    {
    }

    /**
     * Gamma-corrects an image
     *
     * @param float $gamma The amount of gamma-correction.
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To
     * apply to more than one channel, combine channeltype constants using
     * bitwise operators. Refer to this
     * list of channel constants.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.gammaimage.php
     */
    public function gammaimage(float $gamma, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Blurs an image
     *
     * @param float $radius The radius of the Gaussian, in pixels, not counting the center pixel.
     * @param float $sigma The standard deviation of the Gaussian, in pixels.
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To
     * apply to more than one channel, combine channeltype constants using
     * bitwise operators. Refer to this
     * list of channel constants.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.gaussianblurimage.php
     */
    public function gaussianblurimage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    public function getantialias()
    {
    }

    /**
     * Gets the colorspace
     *
     * @return int Returns an integer which can be compared against COLORSPACE constants.
     *
     * @link http://www.php.net/manual/en/imagick.getcolorspace.php
     */
    public function getcolorspace(): int
    {
    }

    /**
     * Gets the object compression type
     *
     * @return int Returns the compression constant
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getcompression.php
     */
    public function getcompression(): int
    {
    }

    /**
     * Gets the object compression quality
     *
     * @return int Returns integer describing the compression quality
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getcompressionquality.php
     */
    public function getcompressionquality(): int
    {
    }

    /**
     * @param mixed $pattern
     */
    public static function getconfigureoptions($pattern = null)
    {
    }

    /**
     * Returns the ImageMagick API copyright as a string
     *
     * @return string Returns a string containing the copyright notice of Imagemagick and
     * Magickwand C API.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getcopyright.php
     */
    public static function getcopyright(): string
    {
    }

    public static function getfeatures()
    {
    }

    /**
     * The filename associated with an image sequence
     *
     * @return string Returns a string on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getfilename.php
     */
    public function getfilename(): string
    {
    }

    /**
     * Gets font
     *
     * @return string Returns the string containing the font name or <code>FALSE</code> if not font is set.
     *
     * @since PECL imagick 2.1.0
     *
     * @link http://www.php.net/manual/en/imagick.getfont.php
     */
    public function getfont(): string
    {
    }

    /**
     * Returns the format of the Imagick object
     *
     * @return string Returns the format of the image.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getformat.php
     */
    public function getformat(): string
    {
    }

    /**
     * Gets the gravity
     *
     * @return int Returns the gravity property. Refer to the list of
     * gravity constants.
     *
     * @link http://www.php.net/manual/en/imagick.getgravity.php
     */
    public function getgravity(): int
    {
    }

    public static function gethdrienabled()
    {
    }

    /**
     * Returns the ImageMagick home URL
     *
     * @return string Returns a link to the imagemagick homepage.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.gethomeurl.php
     */
    public static function gethomeurl(): string
    {
    }

    /**
     * Returns a new Imagick object
     *
     * @return Imagick Returns a new Imagick object with the current image sequence.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimage.php
     */
    public function getimage(): Imagick
    {
    }

    /**
     * Gets the image alpha channel
     *
     * @return int Returns a constant defining the current alpha channel value. Refer to this
     * list of alpha channel constants.
     *
     * @link http://www.php.net/manual/en/imagick.getimagealphachannel.php
     */
    public function getimagealphachannel(): int
    {
    }

    /**
     * Get image artifact
     *
     * @param string $artifact The name of the artifact
     *
     * @return string Returns the artifact value on success.
     *
     * @link http://www.php.net/manual/en/imagick.getimageartifact.php
     */
    public function getimageartifact(string $artifact): string
    {
    }

    /**
     * Description
     *
     * @param string $key The key of the attribute to get.
     *
     * @return string
     *
     * @link http://www.php.net/manual/en/imagick.getimageattribute.php
     */
    public function getimageattribute(string $key): string
    {
    }

    /**
     * Returns the image background color
     *
     * @return ImagickPixel Returns an ImagickPixel set to the background color of the image.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagebackgroundcolor.php
     */
    public function getimagebackgroundcolor(): ImagickPixel
    {
    }

    /**
     * Returns the image sequence as a blob
     *
     * @return string Returns a string containing the image.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageblob.php
     */
    public function getimageblob(): string
    {
    }

    /**
     * Returns the chromaticy blue primary point
     *
     * @return array Array consisting of "x" and "y" coordinates of point.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageblueprimary.php
     */
    public function getimageblueprimary(): array
    {
    }

    /**
     * Returns the image border color
     *
     * @return ImagickPixel Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagebordercolor.php
     */
    public function getimagebordercolor(): ImagickPixel
    {
    }

    /**
     * Gets the depth for a particular image channel
     *
     * @param int $channel Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <code>Imagick::CHANNEL_DEFAULT</code>. Refer to this list of channel constants
     *
     * @return int Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagechanneldepth.php
     */
    public function getimagechanneldepth(int $channel): int
    {
    }

    /**
     * Compares image channels of an image to a reconstructed image
     *
     * @param Imagick $reference Imagick object to compare to.
     * @param int $channel Provide any channel constant that is valid for your channel mode. To
     * apply to more than one channel, combine channeltype constants using
     * bitwise operators. Refer to this
     * list of channel constants.
     * @param int $metric One of the metric type constants.
     *
     * @return float Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagechanneldistortion.php
     */
    public function getimagechanneldistortion(Imagick $reference, int $channel, int $metric): float
    {
    }

    /**
     * Gets channel distortions
     *
     * @param Imagick $reference Imagick object containing the reference image
     * @param int $metric Refer to this list of metric type constants.
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <code>Imagick::CHANNEL_DEFAULT</code>. Refer to this list of channel constants
     *
     * @return float Returns a double describing the channel distortion.
     *
     * @link http://www.php.net/manual/en/imagick.getimagechanneldistortions.php
     */
    public function getimagechanneldistortions(Imagick $reference, int $metric = null, int $channel = Imagick::CHANNEL_DEFAULT): float
    {
    }

    /**
     * Gets the extrema for one or more image channels
     *
     * @param int $channel Provide any channel constant that is valid for your channel mode. To
     * apply to more than one channel, combine channeltype constants using
     * bitwise operators. Refer to this
     * list of channel constants.
     *
     * @return array Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagechannelextrema.php
     */
    public function getimagechannelextrema(int $channel): array
    {
    }

    /**
     * The getImageChannelKurtosis purpose
     *
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <code>Imagick::CHANNEL_DEFAULT</code>. Refer to this list of channel constants
     *
     * @return array Returns an array with <code>kurtosis</code> and <code>skewness</code>
     * members.
     *
     * @link http://www.php.net/manual/en/imagick.getimagechannelkurtosis.php
     */
    public function getimagechannelkurtosis(int $channel = Imagick::CHANNEL_DEFAULT): array
    {
    }

    /**
     * Gets the mean and standard deviation
     *
     * @param int $channel Provide any channel constant that is valid for your channel mode. To
     * apply to more than one channel, combine channeltype constants using
     * bitwise operators. Refer to this
     * list of channel constants.
     *
     * @return array Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagechannelmean.php
     */
    public function getimagechannelmean(int $channel): array
    {
    }

    /**
     * Gets channel range
     *
     * @param int $channel Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <code>Imagick::CHANNEL_DEFAULT</code>. Refer to this list of channel constants
     *
     * @return array Returns an array containing minima and maxima values of the channel(s).
     *
     * @since PECL imagick 2.2.1
     *
     * @link http://www.php.net/manual/en/imagick.getimagechannelrange.php
     */
    public function getimagechannelrange(int $channel): array
    {
    }

    /**
     * Returns statistics for each channel in the image
     *
     * @return array Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagechannelstatistics.php
     */
    public function getimagechannelstatistics(): array
    {
    }

    /**
     * Gets image clip mask
     *
     * @return Imagick Returns an Imagick object containing the clip mask.
     *
     * @link http://www.php.net/manual/en/imagick.getimageclipmask.php
     */
    public function getimageclipmask(): Imagick
    {
    }

    /**
     * Returns the color of the specified colormap index
     *
     * @param int $index The offset into the image colormap.
     *
     * @return ImagickPixel Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagecolormapcolor.php
     */
    public function getimagecolormapcolor(int $index): ImagickPixel
    {
    }

    /**
     * Gets the number of unique colors in the image
     *
     * @return int Returns an <code>integer</code>, the number of unique colors in the image.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagecolors.php
     */
    public function getimagecolors(): int
    {
    }

    /**
     * Gets the image colorspace
     *
     * @return int Returns an integer which can be compared against COLORSPACE constants.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagecolorspace.php
     */
    public function getimagecolorspace(): int
    {
    }

    /**
     * Returns the composite operator associated with the image
     *
     * @return int Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagecompose.php
     */
    public function getimagecompose(): int
    {
    }

    /**
     * Gets the current image's compression type
     *
     * @return int Returns the compression constant
     *
     * @since PECL imagick 2.2.2
     *
     * @link http://www.php.net/manual/en/imagick.getimagecompression.php
     */
    public function getimagecompression(): int
    {
    }

    /**
     * Gets the current image's compression quality
     *
     * @return int Returns integer describing the images compression quality
     *
     * @since PECL imagick 2.2.2
     *
     * @link http://www.php.net/manual/en/imagick.getimagecompressionquality.php
     */
    public function getimagecompressionquality(): int
    {
    }

    /**
     * Gets the image delay
     *
     * @return int Returns the image delay.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagedelay.php
     */
    public function getimagedelay(): int
    {
    }

    /**
     * Gets the image depth
     *
     * @return int The image depth.
     *
     * @link http://www.php.net/manual/en/imagick.getimagedepth.php
     */
    public function getimagedepth(): int
    {
    }

    /**
     * Gets the image disposal method
     *
     * @return int Returns the dispose method on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagedispose.php
     */
    public function getimagedispose(): int
    {
    }

    /**
     * Compares an image to a reconstructed image
     *
     * @param Imagick $reference Imagick object to compare to.
     * @param int $metric One of the metric type constants.
     *
     * @return float Returns the distortion metric used on the image (or the best guess
     * thereof).
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagedistortion.php
     */
    public function getimagedistortion(Imagick $reference, int $metric): float
    {
    }

    /**
     * Gets the extrema for the image
     *
     * @return array Returns an associative array with the keys "min" and "max".
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageextrema.php
     */
    public function getimageextrema(): array
    {
    }

    /**
     * Returns the filename of a particular image in a sequence
     *
     * @return string Returns a string with the filename of the image.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagefilename.php
     */
    public function getimagefilename(): string
    {
    }

    /**
     * Returns the format of a particular image in a sequence
     *
     * @return string Returns a string containing the image format on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageformat.php
     */
    public function getimageformat(): string
    {
    }

    /**
     * Gets the image gamma
     *
     * @return float Returns the image gamma on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagegamma.php
     */
    public function getimagegamma(): float
    {
    }

    /**
     * Gets the width and height as an associative array
     *
     * @return array Returns an array with the width/height of the image.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagegeometry.php
     */
    public function getimagegeometry(): array
    {
    }

    /**
     * Gets the image gravity
     *
     * @return int Returns the images gravity property. Refer to the list of
     * gravity constants.
     *
     * @link http://www.php.net/manual/en/imagick.getimagegravity.php
     */
    public function getimagegravity(): int
    {
    }

    /**
     * Returns the chromaticy green primary point
     *
     * @return array Returns an array with the keys "x" and "y" on success, throws an
     * ImagickException on failure.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagegreenprimary.php
     */
    public function getimagegreenprimary(): array
    {
    }

    /**
     * Returns the image height
     *
     * @return int Returns the image height in pixels.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageheight.php
     */
    public function getimageheight(): int
    {
    }

    /**
     * Gets the image histogram
     *
     * @return array Returns the image histogram as an array of ImagickPixel objects.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagehistogram.php
     */
    public function getimagehistogram(): array
    {
    }

    /**
     * Gets the index of the current active image
     *
     * @return int Returns an integer containing the index of the image in the stack.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageindex.php
     */
    public function getimageindex(): int
    {
    }

    /**
     * Gets the image interlace scheme
     *
     * @return int Returns the interlace scheme as an integer on success.
     * Throw an
     * <code>ImagickException</code> on error.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageinterlacescheme.php
     */
    public function getimageinterlacescheme(): int
    {
    }

    /**
     * Returns the interpolation method
     *
     * @return int Returns the interpolate method on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageinterpolatemethod.php
     */
    public function getimageinterpolatemethod(): int
    {
    }

    /**
     * Gets the image iterations
     *
     * @return int Returns the image iterations as an integer.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageiterations.php
     */
    public function getimageiterations(): int
    {
    }

    /**
     * Returns the image length in bytes
     *
     * @return int Returns an int containing the current image size.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagelength.php
     */
    public function getimagelength(): int
    {
    }

    /**
     * Return if the image has a matte channel
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagematte.php
     */
    public function getimagematte(): bool
    {
    }

    /**
     * Returns the image matte color
     *
     * @return ImagickPixel Returns ImagickPixel object on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagemattecolor.php
     */
    public function getimagemattecolor(): ImagickPixel
    {
    }

    /**
     * Description
     *
     * @return string
     *
     * @link http://www.php.net/manual/en/imagick.getimagemimetype.php
     */
    public function getimagemimetype(): string
    {
    }

    /**
     * Gets the image orientation
     *
     * @return int Returns an int on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageorientation.php
     */
    public function getimageorientation(): int
    {
    }

    /**
     * Returns the page geometry
     *
     * @return array Returns the page geometry associated with the image in an array with the
     * keys "width", "height", "x", and "y".
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagepage.php
     */
    public function getimagepage(): array
    {
    }

    /**
     * Returns the color of the specified pixel
     *
     * @param int $x The x-coordinate of the pixel
     * @param int $y The y-coordinate of the pixel
     *
     * @return ImagickPixel Returns an ImagickPixel instance for the color at the coordinates given.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagepixelcolor.php
     */
    public function getimagepixelcolor(int $x, int $y): ImagickPixel
    {
    }

    /**
     * Returns the named image profile
     *
     * @param string $name The name of the profile to return.
     *
     * @return string Returns a string containing the image profile.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageprofile.php
     */
    public function getimageprofile(string $name): string
    {
    }

    /**
     * Returns the image profiles
     *
     * @param string|null $pattern The pattern for profile names.
     * @param bool|null $include_values Whether to return only profile names. If <code>FALSE</code> then only profile names will be returned.
     *
     * @return array Returns an array containing the image profiles or profile names.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageprofiles.php
     */
    public function getimageprofiles(string $pattern = "*", bool $include_values = true): array
    {
    }

    /**
     * Returns the image properties
     *
     * @param string|null $pattern The pattern for property names.
     * @param bool|null $include_values Whether to return only property names. If <code>FALSE</code> then only property names will be returned.
     *
     * @return array Returns an array containing the image properties or property names.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageproperties.php
     */
    public function getimageproperties(string $pattern = "*", bool $include_values = true): array
    {
    }

    /**
     * Returns the named image property
     *
     * @param string $name name of the property (for example Exif:DateTime)
     *
     * @return string Returns a string containing the image property, false if a
     * property with the given name does not exist.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageproperty.php
     */
    public function getimageproperty(string $name): string
    {
    }

    /**
     * Returns the chromaticity red primary point
     *
     * @return array Returns the chromaticity red primary point as an array with the keys "x"
     * and "y".
     * Throw an
     * <code>ImagickException</code> on error.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageredprimary.php
     */
    public function getimageredprimary(): array
    {
    }

    /**
     * Extracts a region of the image
     *
     * @param int $width The width of the extracted region.
     * @param int $height The height of the extracted region.
     * @param int $x X-coordinate of the top-left corner of the extracted region.
     * @param int $y Y-coordinate of the top-left corner of the extracted region.
     *
     * @return Imagick Extracts a region of the image and returns it as a new wand.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageregion.php
     */
    public function getimageregion(int $width, int $height, int $x, int $y): Imagick
    {
    }

    /**
     * Gets the image rendering intent
     *
     * @return int Returns the image rendering intent.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagerenderingintent.php
     */
    public function getimagerenderingintent(): int
    {
    }

    /**
     * Gets the image X and Y resolution
     *
     * @return array Returns the resolution as an array.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageresolution.php
     */
    public function getimageresolution(): array
    {
    }

    /**
     * Returns all image sequences as a blob
     *
     * @return string Returns a string containing the images. On failure, throws
     * ImagickException.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagesblob.php
     */
    public function getimagesblob(): string
    {
    }

    /**
     * Gets the image scene
     *
     * @return int Returns the image scene.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagescene.php
     */
    public function getimagescene(): int
    {
    }

    /**
     * Generates an SHA-256 message digest
     *
     * @return string Returns a string containing the SHA-256 hash of the file.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagesignature.php
     */
    public function getimagesignature(): string
    {
    }

    /**
     * Returns the image length in bytes
     *
     * @return int Returns an int containing the current image size.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagesize.php
     */
    public function getimagesize(): int
    {
    }

    /**
     * Gets the image ticks-per-second
     *
     * @return int Returns the image ticks-per-second.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagetickspersecond.php
     */
    public function getimagetickspersecond(): int
    {
    }

    /**
     * Gets the image total ink density
     *
     * @return float Returns the image total ink density of the image.
     * Throw an
     * <code>ImagickException</code> on error.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagetotalinkdensity.php
     */
    public function getimagetotalinkdensity(): float
    {
    }

    /**
     * Gets the potential image type
     *
     * @return int Returns the potential image type.
     * <ul>
     * <code>imagick::IMGTYPE_UNDEFINED</code>
     * <code>imagick::IMGTYPE_BILEVEL</code>
     * <code>imagick::IMGTYPE_GRAYSCALE</code>
     * <code>imagick::IMGTYPE_GRAYSCALEMATTE</code>
     * <code>imagick::IMGTYPE_PALETTE</code>
     * <code>imagick::IMGTYPE_PALETTEMATTE</code>
     * <code>imagick::IMGTYPE_TRUECOLOR</code>
     * <code>imagick::IMGTYPE_TRUECOLORMATTE</code>
     * <code>imagick::IMGTYPE_COLORSEPARATION</code>
     * <code>imagick::IMGTYPE_COLORSEPARATIONMATTE</code>
     * <code>imagick::IMGTYPE_OPTIMIZE</code>
     * </ul>
     *
     * @link http://www.php.net/manual/en/imagick.getimagetype.php
     */
    public function getimagetype(): int
    {
    }

    /**
     * Gets the image units of resolution
     *
     * @return int Returns the image units of resolution.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageunits.php
     */
    public function getimageunits(): int
    {
    }

    /**
     * Returns the virtual pixel method
     *
     * @return int Returns the virtual pixel method on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagevirtualpixelmethod.php
     */
    public function getimagevirtualpixelmethod(): int
    {
    }

    /**
     * Returns the chromaticity white point
     *
     * @return array Returns the chromaticity white point as an associative array with the keys
     * "x" and "y".
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagewhitepoint.php
     */
    public function getimagewhitepoint(): array
    {
    }

    /**
     * Returns the image width
     *
     * @return int Returns the image width.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagewidth.php
     */
    public function getimagewidth(): int
    {
    }

    /**
     * Gets the object interlace scheme
     *
     * @return int Gets the wand interlace
     * scheme.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getinterlacescheme.php
     */
    public function getinterlacescheme(): int
    {
    }

    /**
     * Gets the index of the current active image
     *
     * @return int Returns an integer containing the index of the image in the stack.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getiteratorindex.php
     */
    public function getiteratorindex(): int
    {
    }

    /**
     * Returns the number of images in the object
     *
     * @return int Returns the number of images associated with Imagick object.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getnumberimages.php
     */
    public function getnumberimages(): int
    {
    }

    /**
     * Returns a value associated with the specified key
     *
     * @param string $key The name of the option
     *
     * @return string Returns a value associated with a wand and the specified key.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getoption.php
     */
    public function getoption(string $key): string
    {
    }

    /**
     * Returns the ImageMagick package name
     *
     * @return string Returns the ImageMagick package name as a string.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getpackagename.php
     */
    public static function getpackagename(): string
    {
    }

    /**
     * Returns the page geometry
     *
     * @return array Returns the page geometry associated with the Imagick object in
     * an associative array with the keys "width", "height", "x", and "y",
     * throwing ImagickException on error.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getpage.php
     */
    public function getpage(): array
    {
    }

    /**
     * Returns a MagickPixelIterator
     *
     * @return ImagickPixelIterator Returns an ImagickPixelIterator on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getpixeliterator.php
     */
    public function getpixeliterator(): ImagickPixelIterator
    {
    }

    /**
     * Get an ImagickPixelIterator for an image section
     *
     * @param int $x The x-coordinate of the region.
     * @param int $y The y-coordinate of the region.
     * @param int $columns The width of the region.
     * @param int $rows The height of the region.
     * @param mixed $modify
     *
     * @return ImagickPixelIterator Returns an ImagickPixelIterator for an image section.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getpixelregioniterator.php
     */
    public function getpixelregioniterator(int $x, int $y, int $columns, int $rows, $modify): ImagickPixelIterator
    {
    }

    /**
     * Gets point size
     *
     * @return float Returns a <code>float</code> containing the point size.
     *
     * @link http://www.php.net/manual/en/imagick.getpointsize.php
     */
    public function getpointsize(): float
    {
    }

    /**
     * Description
     *
     * @return int
     *
     * @link http://www.php.net/manual/en/imagick.getquantum.php
     */
    public static function getquantum(): int
    {
    }

    /**
     * Gets the quantum depth
     *
     * @return array Returns the Imagick quantum depth as a string.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getquantumdepth.php
     */
    public static function getquantumdepth(): array
    {
    }

    /**
     * Returns the Imagick quantum range
     *
     * @return array Returns an associative array containing the quantum range as an
     * <code>integer</code> (<code>"quantumRangeLong"</code>) and as a
     * <code>string</code> (<code>"quantumRangeString"</code>).
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getquantumrange.php
     */
    public static function getquantumrange(): array
    {
    }

    /**
     * Description
     *
     * @param string $key The entry to get.
     *
     * @return string
     *
     * @link http://www.php.net/manual/en/imagick.getregistry.php
     */
    public static function getregistry(string $key): string
    {
    }

    /**
     * Returns the ImageMagick release date
     *
     * @return string Returns the ImageMagick release date as a string.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getreleasedate.php
     */
    public static function getreleasedate(): string
    {
    }

    /**
     * Returns the specified resource's memory usage
     *
     * @param int $type Refer to the list of resourcetype constants.
     *
     * @return int Returns the specified resource's memory usage in megabytes.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getresource.php
     */
    public static function getresource(int $type): int
    {
    }

    /**
     * Returns the specified resource limit
     *
     * @param int $type Refer to the list of resourcetype constants.
     *
     * @return int Returns the specified resource limit in megabytes.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getresourcelimit.php
     */
    public static function getresourcelimit(int $type): int
    {
    }

    /**
     * Gets the horizontal and vertical sampling factor
     *
     * @return array Returns an associative array with the horizontal and vertical sampling
     * factors of the image.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getsamplingfactors.php
     */
    public function getsamplingfactors(): array
    {
    }

    /**
     * Returns the size associated with the Imagick object
     *
     * @return array Returns the size associated with the Imagick object as an array with the
     * keys "columns" and "rows".
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getsize.php
     */
    public function getsize(): array
    {
    }

    /**
     * Returns the size offset
     *
     * @return int Returns the size offset associated with the Imagick object.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getsizeoffset.php
     */
    public function getsizeoffset(): int
    {
    }

    /**
     * Returns the ImageMagick API version
     *
     * @return array Returns the ImageMagick API version as a string and as a number.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getversion.php
     */
    public static function getversion(): array
    {
    }

    /**
     * Replaces colors in the image
     *
     * @param Imagick $clut Imagick object containing the Hald lookup image.
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <code>Imagick::CHANNEL_DEFAULT</code>. Refer to this list of channel constants
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.haldclutimage.php
     */
    public function haldclutimage(Imagick $clut, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Checks if the object has more images
     *
     * @return bool Returns <code>TRUE</code> if the object has more images when traversing the list in the
     * forward direction, returns <code>FALSE</code> if there are none.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.hasnextimage.php
     */
    public function hasnextimage(): bool
    {
    }

    /**
     * Checks if the object has a previous image
     *
     * @return bool Returns <code>TRUE</code> if the object has more images when traversing the list in the
     * reverse direction, returns <code>FALSE</code> if there are none.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.haspreviousimage.php
     */
    public function haspreviousimage(): bool
    {
    }

    /**
     * Description
     *
     * @param string $embedText A string containing formatting sequences e.g. "Trim box: %@ number of unique colors: %k".
     *
     * @return string Returns format or <code>FALSE</code> on failure.
     *
     * @link http://www.php.net/manual/en/imagick.identifyformat.php
     */
    public function identifyformat(string $embedText): string
    {
    }

    /**
     * Identifies an image and fetches attributes
     *
     * @param bool|null $appendRawOutput If <code>TRUE</code> then the raw output is appended to the array.
     *
     * @return array Identifies an image and returns the attributes. Attributes include
     * the image width, height, size, and others.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.identifyimage.php
     */
    public function identifyimage(bool $appendRawOutput = false): array
    {
    }

    /**
     * Creates a new image as a copy
     *
     * @param float $radius The radius of the implode
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.implodeimage.php
     */
    public function implodeimage(float $radius): bool
    {
    }

    /**
     * Imports image pixels
     *
     * @param int $x The image x position
     * @param int $y The image y position
     * @param int $width The image width
     * @param int $height The image height
     * @param string $map Map of pixel ordering as a string. This can be for example <code>RGB</code>.
     * The value can be any combination or order of R = red, G = green, B = blue, A = alpha (0 is transparent),
     * O = opacity (0 is opaque), C = cyan, Y = yellow, M = magenta, K = black, I = intensity (for grayscale), P = pad.
     * @param int $storage The pixel storage method.
     * Refer to this list of pixel constants.
     * @param array $pixels The array of pixels
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.importimagepixels.php
     */
    public function importimagepixels(int $x, int $y, int $width, int $height, string $map, int $storage, array $pixels): bool
    {
    }

    /**
     * Description
     *
     * @param Imagick $complement The second image to combine with this one to form either the magnitude / phase or real / imaginary image pair.
     * @param bool $magnitude If true, combine as magnitude / phase pair otherwise a real / imaginary image pair.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.inversefouriertransformimage.php
     */
    public function inversefouriertransformimage(Imagick $complement, bool $magnitude): bool
    {
    }

    public function key()
    {
    }

    /**
     * Adds a label to an image
     *
     * @param string $label The label to add
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.labelimage.php
     */
    public function labelimage(string $label): bool
    {
    }

    /**
     * Adjusts the levels of an image
     *
     * @param float $blackPoint The image black point
     * @param float $gamma The gamma value
     * @param float $whitePoint The image white point
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To
     * apply to more than one channel, combine channeltype constants using
     * bitwise operators. Refer to this
     * list of channel constants.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.levelimage.php
     */
    public function levelimage(float $blackPoint, float $gamma, float $whitePoint, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Stretches with saturation the image intensity
     *
     * @param float $blackPoint The image black point
     * @param float $whitePoint The image white point
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.linearstretchimage.php
     */
    public function linearstretchimage(float $blackPoint, float $whitePoint): bool
    {
    }

    /**
     * Animates an image or images
     *
     * @param int $width The width of the target size
     * @param int $height The height of the target size
     * @param float $delta_x How much the seam can traverse on x-axis.
     * Passing 0 causes the seams to be straight.
     * @param float $rigidity Introduces a bias for non-straight seams. This parameter is
     * typically 0.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.liquidrescaleimage.php
     */
    public function liquidrescaleimage(int $width, int $height, float $delta_x, float $rigidity): bool
    {
    }

    /**
     * Description
     *
     * @return array An array containing the key/values from the registry.
     *
     * @link http://www.php.net/manual/en/imagick.listregistry.php
     */
    public static function listregistry(): array
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @param mixed $radius
     * @param mixed $strength
     */
    public function localcontrastimage($radius, $strength)
    {
    }

    /**
     * Scales an image proportionally 2x
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.magnifyimage.php
     */
    public function magnifyimage(): bool
    {
    }

    /**
     * Replaces the colors of an image with the closest color from a reference image
     *
     * @param Imagick $map
     * @param bool $dither
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.mapimage.php
     */
    public function mapimage(Imagick $map, bool $dither): bool
    {
    }

    /**
     * Changes the transparency value of a color
     *
     * @param float $alpha The level of transparency: 1.0 is fully opaque and 0.0 is fully
     * transparent.
     * @param float $fuzz The fuzz member of image defines how much tolerance is acceptable to
     * consider two colors as the same.
     * @param mixed $bordercolor An <code>ImagickPixel</code> object or string representing the border color.
     * @param int $x The starting x coordinate of the operation.
     * @param int $y The starting y coordinate of the operation.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.mattefloodfillimage.php
     */
    public function mattefloodfillimage(float $alpha, float $fuzz, $bordercolor, int $x, int $y): bool
    {
    }

    /**
     * Applies a digital filter
     *
     * @param float $radius The radius of the pixel neighborhood.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.medianfilterimage.php
     */
    public function medianfilterimage(float $radius): bool
    {
    }

    /**
     * Merges image layers
     *
     * @param int $layer_method One of the <code>Imagick::LAYERMETHOD_*</code> constants
     *
     * @return Imagick Returns an Imagick object containing the merged image.
     *
     * @since PECL imagick 2.1.0
     *
     * @link http://www.php.net/manual/en/imagick.mergeimagelayers.php
     */
    public function mergeimagelayers(int $layer_method): Imagick
    {
    }

    /**
     * Scales an image proportionally to half its size
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.minifyimage.php
     */
    public function minifyimage(): bool
    {
    }

    /**
     * Control the brightness, saturation, and hue
     *
     * @param float $brightness
     * @param float $saturation
     * @param float $hue
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.modulateimage.php
     */
    public function modulateimage(float $brightness, float $saturation, float $hue): bool
    {
    }

    /**
     * Creates a composite image
     *
     * @param ImagickDraw $draw The font name, size, and color are obtained from this object.
     * @param string $tile_geometry The number of tiles per row and page (e.g. 6x4+0+0).
     * @param string $thumbnail_geometry Preferred image size and border size of each thumbnail
     * (e.g. 120x120+4+3&gt;).
     * @param int $mode Thumbnail framing mode, see Montage Mode constants.
     * @param string $frame Surround the image with an ornamental border (e.g. 15x15+3+3). The
     * frame color is that of the thumbnail's matte color.
     *
     * @return Imagick Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.montageimage.php
     */
    public function montageimage(ImagickDraw $draw, string $tile_geometry, string $thumbnail_geometry, int $mode, string $frame): Imagick
    {
    }

    /**
     * Method morphs a set of images
     *
     * @param int $number_frames The number of in-between images to generate.
     *
     * @return Imagick This method returns a new Imagick object on success.
     * Throw an
     * <code>ImagickException</code> on error.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.morphimages.php
     */
    public function morphimages(int $number_frames): Imagick
    {
    }

    /**
     * Description
     *
     * @param int $morphologyMethod Which morphology method to use one of the \Imagick::MORPHOLOGY_* constants.
     * @param int $iterations The number of iteration to apply the morphology function. A value of -1 means loop until no change found. How this is applied may depend on the morphology method. Typically this is a value of 1.
     * @param ImagickKernel $ImagickKernel
     * @param int|null $channel
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.morphology.php
     */
    public function morphology(int $morphologyMethod, int $iterations, ImagickKernel $ImagickKernel, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Forms a mosaic from images
     *
     * @return Imagick Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.mosaicimages.php
     */
    public function mosaicimages(): Imagick
    {
    }

    /**
     * Simulates motion blur
     *
     * @param float $radius The radius of the Gaussian, in pixels, not counting the center pixel.
     * @param float $sigma The standard deviation of the Gaussian, in pixels.
     * @param float $angle Apply the effect along this angle.
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To
     * apply to more than one channel, combine channeltype constants using
     * bitwise operators. Refer to this
     * list of channel constants.
     * The channel argument affects only if Imagick is compiled against ImageMagick version
     * 6.4.4 or greater.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.motionblurimage.php
     */
    public function motionblurimage(float $radius, float $sigma, float $angle, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Negates the colors in the reference image
     *
     * @param bool $gray Whether to only negate grayscale pixels within the image.
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To
     * apply to more than one channel, combine channeltype constants using
     * bitwise operators. Refer to this
     * list of channel constants.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.negateimage.php
     */
    public function negateimage(bool $gray, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Creates a new image
     *
     * @param int $cols Columns in the new image
     * @param int $rows Rows in the new image
     * @param mixed $background The background color used for this image
     * @param string $format Image format. This parameter was added in Imagick version 2.0.1.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.newimage.php
     */
    public function newimage(int $cols, int $rows, $background, string $format = null): bool
    {
    }

    /**
     * Creates a new image
     *
     * @param int $columns columns in the new image
     * @param int $rows rows in the new image
     * @param string $pseudoString string containing pseudo image definition.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.newpseudoimage.php
     */
    public function newpseudoimage(int $columns, int $rows, string $pseudoString): bool
    {
    }

    public function next()
    {
    }

    /**
     * Moves to the next image
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.nextimage.php
     */
    public function nextimage(): bool
    {
    }

    /**
     * Enhances the contrast of a color image
     *
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To
     * apply to more than one channel, combine channeltype constants using
     * bitwise operators. Refer to this
     * list of channel constants.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.normalizeimage.php
     */
    public function normalizeimage(int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Simulates an oil painting
     *
     * @param float $radius The radius of the circular neighborhood.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.oilpaintimage.php
     */
    public function oilpaintimage(float $radius): bool
    {
    }

    /**
     * Changes the color value of any pixel that matches target
     *
     * @param mixed $target ImagickPixel object or a string containing the color to change
     * @param mixed $fill The replacement color
     * @param float $fuzz The amount of fuzz. For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color.
     * @param bool $invert If <code>TRUE</code> paints any pixel that does not match the target color.
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <code>Imagick::CHANNEL_DEFAULT</code>. Refer to this list of channel constants
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.opaquepaintimage.php
     */
    public function opaquepaintimage($target, $fill, float $fuzz, bool $invert, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Removes repeated portions of images to optimize
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.optimizeimagelayers.php
     */
    public function optimizeimagelayers(): bool
    {
    }

    /**
     * Performs an ordered dither
     *
     * @param string $threshold_map A string containing the name of the threshold dither map to use
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To
     * apply to more than one channel, combine channeltype constants using
     * bitwise operators. Refer to this
     * list of channel constants.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.2.2
     *
     * @link http://www.php.net/manual/en/imagick.orderedposterizeimage.php
     */
    public function orderedposterizeimage(string $threshold_map, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Changes the color value of any pixel that matches target
     *
     * @param mixed $fill ImagickPixel object or a string containing the fill color
     * @param float $fuzz The amount of fuzz. For example, set fuzz to 10 and the color red at
     * intensities of 100 and 102 respectively are now interpreted as the
     * same color for the purposes of the floodfill.
     * @param mixed $bordercolor ImagickPixel object or a string containing the border color
     * @param int $x X start position of the floodfill
     * @param int $y Y start position of the floodfill
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <code>Imagick::CHANNEL_DEFAULT</code>. Refer to this list of channel constants
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.1.0
     *
     * @link http://www.php.net/manual/en/imagick.paintfloodfillimage.php
     */
    public function paintfloodfillimage($fill, float $fuzz, $bordercolor, int $x, int $y, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Change any pixel that matches color
     *
     * @param mixed $target Change this target color to the fill color within the image. An
     * ImagickPixel object or a string representing the target color.
     * @param mixed $fill An ImagickPixel object or a string representing the fill color.
     * @param float $fuzz The fuzz member of image defines how much tolerance is acceptable to
     * consider two colors as the same.
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To
     * apply to more than one channel, combine channeltype constants using
     * bitwise operators. Refer to this
     * list of channel constants.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.paintopaqueimage.php
     */
    public function paintopaqueimage($target, $fill, float $fuzz, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Changes any pixel that matches color with the color defined by fill
     *
     * @param mixed $target Change this target color to specified opacity value within the image.
     * @param float $alpha The level of transparency: 1.0 is fully opaque and 0.0 is fully
     * transparent.
     * @param float $fuzz The fuzz member of image defines how much tolerance is acceptable to
     * consider two colors as the same.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.painttransparentimage.php
     */
    public function painttransparentimage($target, float $alpha, float $fuzz): bool
    {
    }

    /**
     * Fetch basic attributes about the image
     *
     * @param string $filename The filename to read the information from.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.pingimage.php
     */
    public function pingimage(string $filename): bool
    {
    }

    /**
     * Quickly fetch attributes
     *
     * @param string $image A string containing the image.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.pingimageblob.php
     */
    public function pingimageblob(string $image): bool
    {
    }

    /**
     * Get basic image attributes in a lightweight manner
     *
     * @param resource $filehandle An open filehandle to the image.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.pingimagefile.php
     */
    public function pingimagefile($filehandle): bool
    {
    }

    /**
     * Simulates a Polaroid picture
     *
     * @param ImagickDraw $properties The polaroid properties
     * @param float $angle The polaroid angle
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.polaroidimage.php
     */
    public function polaroidimage(ImagickDraw $properties, float $angle): bool
    {
    }

    /**
     * Reduces the image to a limited number of color level
     *
     * @param int $levels
     * @param bool $dither
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.posterizeimage.php
     */
    public function posterizeimage(int $levels, bool $dither): bool
    {
    }

    /**
     * Quickly pin-point appropriate parameters for image processing
     *
     * @param int $preview Preview type. See Preview type constants
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.previewimages.php
     */
    public function previewimages(int $preview): bool
    {
    }

    /**
     * Move to the previous image in the object
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.previousimage.php
     */
    public function previousimage(): bool
    {
    }

    /**
     * Adds or removes a profile from an image
     *
     * @param string $name
     * @param string $profile
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.profileimage.php
     */
    public function profileimage(string $name, string $profile): bool
    {
    }

    /**
     * Analyzes the colors within a reference image
     *
     * @param int $numberColors
     * @param int $colorspace
     * @param int $treedepth
     * @param bool $dither
     * @param bool $measureError
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.quantizeimage.php
     */
    public function quantizeimage(int $numberColors, int $colorspace, int $treedepth, bool $dither, bool $measureError): bool
    {
    }

    /**
     * Analyzes the colors within a sequence of images
     *
     * @param int $numberColors
     * @param int $colorspace
     * @param int $treedepth
     * @param bool $dither
     * @param bool $measureError
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.quantizeimages.php
     */
    public function quantizeimages(int $numberColors, int $colorspace, int $treedepth, bool $dither, bool $measureError): bool
    {
    }

    /**
     * Returns an array representing the font metrics
     *
     * @param ImagickDraw $properties ImagickDraw object containing font properties
     * @param string $text The text
     * @param bool $multiline Multiline parameter. If left empty it is autodetected
     *
     * @return array Returns a multi-dimensional array representing the font metrics.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.queryfontmetrics.php
     */
    public function queryfontmetrics(ImagickDraw $properties, string $text, bool $multiline = null): array
    {
    }

    /**
     * Returns the configured fonts
     *
     * @param string|null $pattern The query pattern
     *
     * @return array Returns an array containing the configured fonts.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.queryfonts.php
     */
    public static function queryfonts(string $pattern = "*"): array
    {
    }

    /**
     * Returns formats supported by Imagick
     *
     * @param string|null $pattern
     *
     * @return array Returns an array containing the formats supported by Imagick.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.queryformats.php
     */
    public static function queryformats(string $pattern = "*"): array
    {
    }

    /**
     * Radial blurs an image
     *
     * @param float $angle
     * @param int|null $channel
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.radialblurimage.php
     */
    public function radialblurimage(float $angle, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Creates a simulated 3d button-like effect
     *
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     * @param bool $raise
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.raiseimage.php
     */
    public function raiseimage(int $width, int $height, int $x, int $y, bool $raise): bool
    {
    }

    /**
     * Creates a high-contrast, two-color image
     *
     * @param float $low The low point
     * @param float $high The high point
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To
     * apply to more than one channel, combine channeltype constants using
     * bitwise operators. Refer to this
     * list of channel constants.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.randomthresholdimage.php
     */
    public function randomthresholdimage(float $low, float $high, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Reads image from filename
     *
     * @param string $filename
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.readimage.php
     */
    public function readimage(string $filename): bool
    {
    }

    /**
     * Reads image from a binary string
     *
     * @param string $image
     * @param string $filename
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.readimageblob.php
     */
    public function readimageblob(string $image, string $filename = null): bool
    {
    }

    /**
     * Reads image from open filehandle
     *
     * @param resource $filehandle
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.readimagefile.php
     */
    public function readimagefile($filehandle): bool
    {
    }

    /**
     * Description
     *
     * @param array $filenames
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.readimages.php
     */
    public function readimages(array $filenames): bool
    {
    }

    /**
     * Recolors image
     *
     * @param array $matrix The matrix containing the color values
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.recolorimage.php
     */
    public function recolorimage(array $matrix): bool
    {
    }

    /**
     * Smooths the contours of an image
     *
     * @param float $radius
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.reducenoiseimage.php
     */
    public function reducenoiseimage(float $radius): bool
    {
    }

    /**
     * Remaps image colors
     *
     * @param Imagick $replacement An Imagick object containing the replacement colors
     * @param int $DITHER Refer to this list of dither method constants
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.remapimage.php
     */
    public function remapimage(Imagick $replacement, int $DITHER): bool
    {
    }

    /**
     * Removes an image from the image list
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.removeimage.php
     */
    public function removeimage(): bool
    {
    }

    /**
     * Removes the named image profile and returns it
     *
     * @param string $name
     *
     * @return string Returns a string containing the profile of the image.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.removeimageprofile.php
     */
    public function removeimageprofile(string $name): string
    {
    }

    /**
     * Resample image to desired resolution
     *
     * @param float $x_resolution
     * @param float $y_resolution
     * @param int $filter
     * @param float $blur
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.resampleimage.php
     */
    public function resampleimage(float $x_resolution, float $y_resolution, int $filter, float $blur): bool
    {
    }

    /**
     * Reset image page
     *
     * @param string $page The page definition. For example <code>7168x5147+0+0</code>
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.resetimagepage.php
     */
    public function resetimagepage(string $page): bool
    {
    }

    public function resetiterator()
    {
    }

    /**
     * Scales an image
     *
     * @param int $columns Width of the image
     * @param int $rows Height of the image
     * @param int $filter Refer to the list of filter constants.
     * @param float $blur The blur factor where &gt; 1 is blurry, &lt; 1 is sharp.
     * @param bool|null $bestfit Optional fit parameter.
     * @param bool|null $legacy
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.resizeimage.php
     */
    public function resizeimage(int $columns, int $rows, int $filter = null, float $blur = null, bool $bestfit = false, bool $legacy = false): bool
    {
    }

    public function rewind()
    {
    }

    /**
     * Offsets an image
     *
     * @param int $x The X offset.
     * @param int $y The Y offset.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.rollimage.php
     */
    public function rollimage(int $x, int $y): bool
    {
    }

    /**
     * Rotates an image
     *
     * @param mixed $background The background color
     * @param float $degrees Rotation angle, in degrees. The rotation angle is interpreted as the
     * number of degrees to rotate the image clockwise.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.rotateimage.php
     */
    public function rotateimage($background, float $degrees): bool
    {
    }

    /**
     * Description
     *
     * @param float $angle The angle to apply the blur over.
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <code>Imagick::CHANNEL_DEFAULT</code>. Refer to this list of channel constants
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.rotationalblurimage.php
     */
    public function rotationalblurimage(float $angle, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Rounds image corners
     *
     * @param float $x_rounding x rounding
     * @param float $y_rounding y rounding
     * @param float|null $stroke_width stroke width
     * @param float|null $displace image displace
     * @param float|null $size_correction size correction
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.roundcorners.php
     */
    public function roundcorners(float $x_rounding, float $y_rounding, float $stroke_width = 10, float $displace = 5, float $size_correction = -6): bool
    {
    }

    /**
     * @param mixed $xRounding
     * @param mixed $yRounding
     * @param mixed $strokeWidth
     * @param mixed $displace
     * @param mixed $sizeCorrection
     */
    public function roundcornersimage($xRounding, $yRounding, $strokeWidth = null, $displace = null, $sizeCorrection = null)
    {
    }

    /**
     * Scales an image with pixel sampling
     *
     * @param int $columns
     * @param int $rows
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.sampleimage.php
     */
    public function sampleimage(int $columns, int $rows): bool
    {
    }

    /**
     * Scales the size of an image
     *
     * @param int $cols
     * @param int $rows
     * @param bool|null $bestfit
     * @param bool|null $legacy
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.scaleimage.php
     */
    public function scaleimage(int $cols, int $rows, bool $bestfit = false, bool $legacy = false): bool
    {
    }

    /**
     * Segments an image
     *
     * @param int $COLORSPACE One of the COLORSPACE constants.
     * @param float $cluster_threshold A percentage describing minimum number of pixels
     * contained in hexedra before it is considered valid.
     * @param float $smooth_threshold Eliminates noise from the histogram.
     * @param bool|null $verbose Whether to output detailed information about recognised classes.
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.segmentimage.php
     */
    public function segmentimage(int $COLORSPACE, float $cluster_threshold, float $smooth_threshold, bool $verbose = false): bool
    {
    }

    /**
     * Description
     *
     * @param float $radius
     * @param float $sigma
     * @param float $threshold
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <code>Imagick::CHANNEL_DEFAULT</code>. Refer to this list of channel constants
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.selectiveblurimage.php
     */
    public function selectiveblurimage(float $radius, float $sigma, float $threshold, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Separates a channel from the image
     *
     * @param int $channel Which 'channel' to return. For colorspaces other than RGB, you can still use the CHANNEL_RED, CHANNEL_GREEN, CHANNEL_BLUE constants to indicate the 1st, 2nd and 3rd channels.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.separateimagechannel.php
     */
    public function separateimagechannel(int $channel): bool
    {
    }

    /**
     * Sepia tones an image
     *
     * @param float $threshold
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.sepiatoneimage.php
     */
    public function sepiatoneimage(float $threshold): bool
    {
    }

    /**
     * @param mixed $antialias
     */
    public function setantialias($antialias)
    {
    }

    /**
     * Sets the object's default background color
     *
     * @param mixed $background
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setbackgroundcolor.php
     */
    public function setbackgroundcolor($background): bool
    {
    }

    /**
     * Set colorspace
     *
     * @param int $COLORSPACE One of the COLORSPACE constants
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.setcolorspace.php
     */
    public function setcolorspace(int $COLORSPACE): bool
    {
    }

    /**
     * Sets the object's default compression type
     *
     * @param int $compression The compression type. See the Imagick::COMPRESSION_* constants.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setcompression.php
     */
    public function setcompression(int $compression): bool
    {
    }

    /**
     * Sets the object's default compression quality
     *
     * @param int $quality
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.setcompressionquality.php
     */
    public function setcompressionquality(int $quality): bool
    {
    }

    /**
     * Sets the filename before you read or write the image
     *
     * @param string $filename
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setfilename.php
     */
    public function setfilename(string $filename): bool
    {
    }

    /**
     * Sets the Imagick iterator to the first image
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setfirstiterator.php
     */
    public function setfirstiterator(): bool
    {
    }

    /**
     * Sets font
     *
     * @param string $font Font name or a filename
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.1.0
     *
     * @link http://www.php.net/manual/en/imagick.setfont.php
     */
    public function setfont(string $font): bool
    {
    }

    /**
     * Sets the format of the Imagick object
     *
     * @param string $format
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setformat.php
     */
    public function setformat(string $format): bool
    {
    }

    /**
     * Sets the gravity
     *
     * @param int $gravity The gravity property. Refer to the list of
     * gravity constants.
     *
     * @return bool No value is returned.
     *
     * @link http://www.php.net/manual/en/imagick.setgravity.php
     */
    public function setgravity(int $gravity): bool
    {
    }

    /**
     * Replaces image in the object
     *
     * @param Imagick $replace The replace Imagick object
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimage.php
     */
    public function setimage(Imagick $replace): bool
    {
    }

    /**
     * Sets image alpha channel
     *
     * @param int $mode One of the <code>Imagick::ALPHACHANNEL_*</code> constants
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.setimagealphachannel.php
     */
    public function setimagealphachannel(int $mode): bool
    {
    }

    /**
     * Set image artifact
     *
     * @param string $artifact The name of the artifact
     * @param string $value The value of the artifact
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.setimageartifact.php
     */
    public function setimageartifact(string $artifact, string $value): bool
    {
    }

    /**
     * Description
     *
     * @param string $key
     * @param string $value
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.setimageattribute.php
     */
    public function setimageattribute(string $key, string $value): bool
    {
    }

    /**
     * Sets the image background color
     *
     * @param mixed $background
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagebackgroundcolor.php
     */
    public function setimagebackgroundcolor($background): bool
    {
    }

    /**
     * Sets the image bias for any method that convolves an image
     *
     * @param float $bias
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagebias.php
     */
    public function setimagebias(float $bias): bool
    {
    }

    /**
     * Description
     *
     * @param string $bias
     *
     * @return void
     *
     * @link http://www.php.net/manual/en/imagick.setimagebiasquantum.php
     */
    public function setimagebiasquantum(string $bias)
    {
    }

    /**
     * Sets the image chromaticity blue primary point
     *
     * @param float $x
     * @param float $y
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageblueprimary.php
     */
    public function setimageblueprimary(float $x, float $y): bool
    {
    }

    /**
     * Sets the image border color
     *
     * @param mixed $border The border color
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagebordercolor.php
     */
    public function setimagebordercolor($border): bool
    {
    }

    /**
     * Sets the depth of a particular image channel
     *
     * @param int $channel
     * @param int $depth
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagechanneldepth.php
     */
    public function setimagechanneldepth(int $channel, int $depth): bool
    {
    }

    /**
     * Sets image clip mask
     *
     * @param Imagick $clip_mask The Imagick object containing the clip mask
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.setimageclipmask.php
     */
    public function setimageclipmask(Imagick $clip_mask): bool
    {
    }

    /**
     * Sets the color of the specified colormap index
     *
     * @param int $index
     * @param ImagickPixel $color
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagecolormapcolor.php
     */
    public function setimagecolormapcolor(int $index, ImagickPixel $color): bool
    {
    }

    /**
     * Sets the image colorspace
     *
     * @param int $colorspace One of the COLORSPACE constants
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagecolorspace.php
     */
    public function setimagecolorspace(int $colorspace): bool
    {
    }

    /**
     * Sets the image composite operator
     *
     * @param int $compose
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagecompose.php
     */
    public function setimagecompose(int $compose): bool
    {
    }

    /**
     * Sets the image compression
     *
     * @param int $compression One of the <code>COMPRESSION</code> constants
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagecompression.php
     */
    public function setimagecompression(int $compression): bool
    {
    }

    /**
     * Sets the image compression quality
     *
     * @param int $quality The image compression quality as an integer
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.setimagecompressionquality.php
     */
    public function setimagecompressionquality(int $quality): bool
    {
    }

    /**
     * Sets the image delay
     *
     * @param int $delay The amount of time expressed in 'ticks' that the image should be
     * displayed for. For animated GIFs there are 100 ticks per second, so a
     * value of 20 would be 20/100 of a second aka 1/5th of a second.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagedelay.php
     */
    public function setimagedelay(int $delay): bool
    {
    }

    /**
     * Sets the image depth
     *
     * @param int $depth
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagedepth.php
     */
    public function setimagedepth(int $depth): bool
    {
    }

    /**
     * Sets the image disposal method
     *
     * @param int $dispose
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagedispose.php
     */
    public function setimagedispose(int $dispose): bool
    {
    }

    /**
     * Sets the image size
     *
     * @param int $columns
     * @param int $rows
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageextent.php
     */
    public function setimageextent(int $columns, int $rows): bool
    {
    }

    /**
     * Sets the filename of a particular image
     *
     * @param string $filename
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagefilename.php
     */
    public function setimagefilename(string $filename): bool
    {
    }

    /**
     * Sets the format of a particular image
     *
     * @param string $format String presentation of the image format. Format support
     * depends on the ImageMagick installation.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageformat.php
     */
    public function setimageformat(string $format): bool
    {
    }

    /**
     * Sets the image gamma
     *
     * @param float $gamma
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagegamma.php
     */
    public function setimagegamma(float $gamma): bool
    {
    }

    /**
     * Sets the image gravity
     *
     * @param int $gravity The gravity property. Refer to the list of
     * gravity constants.
     *
     * @return bool No value is returned.
     *
     * @link http://www.php.net/manual/en/imagick.setimagegravity.php
     */
    public function setimagegravity(int $gravity): bool
    {
    }

    /**
     * Sets the image chromaticity green primary point
     *
     * @param float $x
     * @param float $y
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagegreenprimary.php
     */
    public function setimagegreenprimary(float $x, float $y): bool
    {
    }

    /**
     * Set the iterator position
     *
     * @param int $index The position to set the iterator to
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageindex.php
     */
    public function setimageindex(int $index): bool
    {
    }

    /**
     * Sets the image compression
     *
     * @param int $interlace_scheme
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageinterlacescheme.php
     */
    public function setimageinterlacescheme(int $interlace_scheme): bool
    {
    }

    /**
     * Sets the image interpolate pixel method
     *
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param int $method The method is one of the <code>Imagick::INTERPOLATE_*</code> constants
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageinterpolatemethod.php
     */
    public function setimageinterpolatemethod(int $method): bool
    {
    }

    /**
     * Sets the image iterations
     *
     * @param int $iterations The number of iterations the image should loop over. Set to '0' to loop
     * continuously.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageiterations.php
     */
    public function setimageiterations(int $iterations): bool
    {
    }

    /**
     * Sets the image matte channel
     *
     * @param bool $matte True activates the matte channel and false disables it.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagematte.php
     */
    public function setimagematte(bool $matte): bool
    {
    }

    /**
     * Sets the image matte color
     *
     * @param mixed $matte
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagemattecolor.php
     */
    public function setimagemattecolor($matte): bool
    {
    }

    /**
     * Sets the image opacity level
     *
     * @param float $opacity The level of transparency: 1.0 is fully opaque and 0.0 is fully
     * transparent.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageopacity.php
     */
    public function setimageopacity(float $opacity): bool
    {
    }

    /**
     * Sets the image orientation
     *
     * @param int $orientation One of the orientation constants
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageorientation.php
     */
    public function setimageorientation(int $orientation): bool
    {
    }

    /**
     * Sets the page geometry of the image
     *
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagepage.php
     */
    public function setimagepage(int $width, int $height, int $x, int $y): bool
    {
    }

    /**
     * Adds a named profile to the Imagick object
     *
     * @param string $name
     * @param string $profile
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageprofile.php
     */
    public function setimageprofile(string $name, string $profile): bool
    {
    }

    /**
     * @param mixed $filename
     */
    public function setimageprogressmonitor($filename)
    {
    }

    /**
     * Sets an image property
     *
     * @param string $name
     * @param string $value
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageproperty.php
     */
    public function setimageproperty(string $name, string $value): bool
    {
    }

    /**
     * Sets the image chromaticity red primary point
     *
     * @param float $x
     * @param float $y
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageredprimary.php
     */
    public function setimageredprimary(float $x, float $y): bool
    {
    }

    /**
     * Sets the image rendering intent
     *
     * @param int $rendering_intent
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagerenderingintent.php
     */
    public function setimagerenderingintent(int $rendering_intent): bool
    {
    }

    /**
     * Sets the image resolution
     *
     * @param float $x_resolution
     * @param float $y_resolution
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageresolution.php
     */
    public function setimageresolution(float $x_resolution, float $y_resolution): bool
    {
    }

    /**
     * Sets the image scene
     *
     * @param int $scene
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagescene.php
     */
    public function setimagescene(int $scene): bool
    {
    }

    /**
     * Sets the image ticks-per-second
     *
     * @param int $ticks_per_second The duration for which an image should be displayed expressed in ticks
     * per second.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagetickspersecond.php
     */
    public function setimagetickspersecond(int $ticks_per_second): bool
    {
    }

    /**
     * Sets the image type
     *
     * @param int $image_type
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagetype.php
     */
    public function setimagetype(int $image_type): bool
    {
    }

    /**
     * Sets the image units of resolution
     *
     * @param int $units
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageunits.php
     */
    public function setimageunits(int $units): bool
    {
    }

    /**
     * Sets the image virtual pixel method
     *
     * @param int $method
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagevirtualpixelmethod.php
     */
    public function setimagevirtualpixelmethod(int $method): bool
    {
    }

    /**
     * Sets the image chromaticity white point
     *
     * @param float $x
     * @param float $y
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagewhitepoint.php
     */
    public function setimagewhitepoint(float $x, float $y): bool
    {
    }

    /**
     * Sets the image compression
     *
     * @param int $interlace_scheme
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setinterlacescheme.php
     */
    public function setinterlacescheme(int $interlace_scheme): bool
    {
    }

    /**
     * Set the iterator position
     *
     * @param int $index The position to set the iterator to
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setiteratorindex.php
     */
    public function setiteratorindex(int $index): bool
    {
    }

    /**
     * Sets the Imagick iterator to the last image
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.1
     *
     * @link http://www.php.net/manual/en/imagick.setlastiterator.php
     */
    public function setlastiterator(): bool
    {
    }

    /**
     * Set an option
     *
     * @param string $key
     * @param string $value
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setoption.php
     */
    public function setoption(string $key, string $value): bool
    {
    }

    /**
     * Sets the page geometry of the Imagick object
     *
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setpage.php
     */
    public function setpage(int $width, int $height, int $x, int $y): bool
    {
    }

    /**
     * Sets point size
     *
     * @param float $point_size Point size
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.1.0
     *
     * @link http://www.php.net/manual/en/imagick.setpointsize.php
     */
    public function setpointsize(float $point_size): bool
    {
    }

    /**
     * Description
     *
     * @param callable $callback The progress function to call. It should return true if image processing should continue, or false if it should be cancelled. The offset parameter indicates the progress and the span parameter indicates the total amount of work needed to be done.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.setprogressmonitor.php
     */
    public function setprogressmonitor(callable $callback): bool
    {
    }

    /**
     * Description
     *
     * @param string $key
     * @param string $value
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.setregistry.php
     */
    public static function setregistry(string $key, string $value): bool
    {
    }

    /**
     * Sets the image resolution
     *
     * @param float $x_resolution The horizontal resolution.
     * @param float $y_resolution The vertical resolution.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setresolution.php
     */
    public function setresolution(float $x_resolution, float $y_resolution): bool
    {
    }

    /**
     * Sets the limit for a particular resource in megabytes
     *
     * @param int $type Refer to the list of resourcetype constants.
     * @param int $limit The resource limit. The unit depends on the type of the resource being limited.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setresourcelimit.php
     */
    public static function setresourcelimit(int $type, int $limit): bool
    {
    }

    /**
     * Sets the image sampling factors
     *
     * @param array $factors
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setsamplingfactors.php
     */
    public function setsamplingfactors(array $factors): bool
    {
    }

    /**
     * Sets the size of the Imagick object
     *
     * @param int $columns
     * @param int $rows
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setsize.php
     */
    public function setsize(int $columns, int $rows): bool
    {
    }

    /**
     * Sets the size and offset of the Imagick object
     *
     * @param int $columns The width in pixels.
     * @param int $rows The height in pixels.
     * @param int $offset The image offset.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setsizeoffset.php
     */
    public function setsizeoffset(int $columns, int $rows, int $offset): bool
    {
    }

    /**
     * Sets the image type attribute
     *
     * @param int $image_type
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.settype.php
     */
    public function settype(int $image_type): bool
    {
    }

    /**
     * Creates a 3D effect
     *
     * @param bool $gray A value other than zero shades the intensity of each pixel.
     * @param float $azimuth Defines the light source direction.
     * @param float $elevation Defines the light source direction.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.shadeimage.php
     */
    public function shadeimage(bool $gray, float $azimuth, float $elevation): bool
    {
    }

    /**
     * Simulates an image shadow
     *
     * @param float $opacity
     * @param float $sigma
     * @param int $x
     * @param int $y
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.shadowimage.php
     */
    public function shadowimage(float $opacity, float $sigma, int $x, int $y): bool
    {
    }

    /**
     * Sharpens an image
     *
     * @param float $radius
     * @param float $sigma
     * @param int|null $channel
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.sharpenimage.php
     */
    public function sharpenimage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Shaves pixels from the image edges
     *
     * @param int $columns
     * @param int $rows
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.shaveimage.php
     */
    public function shaveimage(int $columns, int $rows): bool
    {
    }

    /**
     * Creating a parallelogram
     *
     * @param mixed $background The background color
     * @param float $x_shear The number of degrees to shear on the x axis
     * @param float $y_shear The number of degrees to shear on the y axis
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.shearimage.php
     */
    public function shearimage($background, float $x_shear, float $y_shear): bool
    {
    }

    /**
     * Adjusts the contrast of an image
     *
     * @param bool $sharpen If true increase the contrast, if false decrease the contrast.
     * @param float $alpha The amount of contrast to apply. 1 is very little, 5 is a significant amount, 20 is extreme.
     * @param float $beta Where the midpoint of the gradient will be. This value should be in the range 0 to 1 - mutliplied by the quantum value for ImageMagick.
     * @param int|null $channel Which color channels the contrast will be applied to.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.sigmoidalcontrastimage.php
     */
    public function sigmoidalcontrastimage(bool $sharpen, float $alpha, float $beta, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * @param Imagick $Imagick
     * @param mixed $offset
     * @param mixed $similarity
     * @param mixed $similarity_threshold
     * @param mixed $metric
     */
    public function similarityimage(Imagick $Imagick, &$offset = null, &$similarity = null, &$similarity_threshold = null, &$metric = null)
    {
    }

    /**
     * Simulates a pencil sketch
     *
     * @param float $radius The radius of the Gaussian, in pixels, not counting the center pixel
     * @param float $sigma The standard deviation of the Gaussian, in pixels.
     * @param float $angle Apply the effect along this angle.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.sketchimage.php
     */
    public function sketchimage(float $radius, float $sigma, float $angle): bool
    {
    }

    /**
     * Description
     *
     * @param bool $stack
     * @param int $offset
     *
     * @return Imagick The new smushed image.
     *
     * @link http://www.php.net/manual/en/imagick.smushimages.php
     */
    public function smushimages(bool $stack, int $offset): Imagick
    {
    }

    /**
     * Applies a solarizing effect to the image
     *
     * @param int $threshold
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.solarizeimage.php
     */
    public function solarizeimage(int $threshold): bool
    {
    }

    /**
     * Interpolates colors
     *
     * @param int $SPARSE_METHOD Refer to this list of sparse method constants
     * @param array $arguments An array containing the coordinates.
     * The array is in format <code>array(1,1, 2,45)</code>
     * @param int|null $channel Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <code>Imagick::CHANNEL_DEFAULT</code>. Refer to this list of channel constants
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.sparsecolorimage.php
     */
    public function sparsecolorimage(int $SPARSE_METHOD, array $arguments, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Splices a solid color into the image
     *
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.spliceimage.php
     */
    public function spliceimage(int $width, int $height, int $x, int $y): bool
    {
    }

    /**
     * Randomly displaces each pixel in a block
     *
     * @param float $radius
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.spreadimage.php
     */
    public function spreadimage(float $radius): bool
    {
    }

    /**
     * Description
     *
     * @param int $type
     * @param int $width
     * @param int $height
     * @param int|null $channel
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.statisticimage.php
     */
    public function statisticimage(int $type, int $width, int $height, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Hides a digital watermark within the image
     *
     * @param Imagick $watermark_wand
     * @param int $offset
     *
     * @return Imagick Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.steganoimage.php
     */
    public function steganoimage(Imagick $watermark_wand, int $offset): Imagick
    {
    }

    /**
     * Composites two images
     *
     * @param Imagick $offset_wand
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.stereoimage.php
     */
    public function stereoimage(Imagick $offset_wand): bool
    {
    }

    /**
     * Strips an image of all profiles and comments
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.stripimage.php
     */
    public function stripimage(): bool
    {
    }

    /**
     * Description
     *
     * @param Imagick $Imagick
     * @param array $offset
     * @param float $similarity A new image that displays the amount of similarity at each pixel.
     * @param mixed $similarity_threshold
     * @param mixed $metric
     *
     * @return Imagick
     *
     * @link http://www.php.net/manual/en/imagick.subimagematch.php
     */
    public function subimagematch(Imagick $Imagick, array &$offset = null, float &$similarity = null, &$similarity_threshold = null, &$metric = null): Imagick
    {
    }

    /**
     * Swirls the pixels about the center of the image
     *
     * @param float $degrees
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.swirlimage.php
     */
    public function swirlimage(float $degrees): bool
    {
    }

    /**
     * Repeatedly tiles the texture image
     *
     * @param Imagick $texture_wand Imagick object to use as texture image
     *
     * @return Imagick Returns a new Imagick object that has the repeated texture applied.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.textureimage.php
     */
    public function textureimage(Imagick $texture_wand): Imagick
    {
    }

    /**
     * Changes the value of individual pixels based on a threshold
     *
     * @param float $threshold
     * @param int|null $channel
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.thresholdimage.php
     */
    public function thresholdimage(float $threshold, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Changes the size of an image
     *
     * @param int $columns Image width
     * @param int $rows Image height
     * @param bool|null $bestfit Whether to force maximum values
     * @param bool|null $fill
     * @param bool|null $legacy
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.thumbnailimage.php
     */
    public function thumbnailimage(int $columns, int $rows, bool $bestfit = false, bool $fill = false, bool $legacy = false): bool
    {
    }

    /**
     * Applies a color vector to each pixel in the image
     *
     * @param mixed $tint
     * @param mixed $opacity
     * @param bool|null $legacy
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.tintimage.php
     */
    public function tintimage($tint, $opacity, bool $legacy = false): bool
    {
    }

    /**
     * Convenience method for setting crop size and the image geometry
     *
     * @param string $crop A crop geometry string. This geometry defines a subregion of the image to crop.
     * @param string $geometry An image geometry string. This geometry defines the final size of the image.
     *
     * @return Imagick Returns an Imagick object containing the transformed image.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.transformimage.php
     */
    public function transformimage(string $crop, string $geometry): Imagick
    {
    }

    /**
     * Transforms an image to a new colorspace
     *
     * @param int $colorspace The colorspace the image should be transformed to, one of the COLORSPACE constants e.g. Imagick::COLORSPACE_CMYK.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.transformimagecolorspace.php
     */
    public function transformimagecolorspace(int $colorspace): bool
    {
    }

    /**
     * Paints pixels transparent
     *
     * @param mixed $target The target color to paint
     * @param float $alpha The level of transparency: 1.0 is fully opaque and 0.0 is fully transparent.
     * @param float $fuzz The amount of fuzz. For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color.
     * @param bool $invert If <code>TRUE</code> paints any pixel that does not match the target color.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.transparentpaintimage.php
     */
    public function transparentpaintimage($target, float $alpha, float $fuzz, bool $invert): bool
    {
    }

    /**
     * Creates a vertical mirror image
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.transposeimage.php
     */
    public function transposeimage(): bool
    {
    }

    /**
     * Creates a horizontal mirror image
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.transverseimage.php
     */
    public function transverseimage(): bool
    {
    }

    /**
     * Remove edges from the image
     *
     * @param float $fuzz By default target must match a particular pixel color exactly.
     * However, in many cases two colors may differ by a small amount.
     * The fuzz member of image defines how much tolerance is acceptable
     * to consider two colors as the same. This parameter represents the variation
     * on the quantum range.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.trimimage.php
     */
    public function trimimage(float $fuzz): bool
    {
    }

    /**
     * Discards all but one of any pixel color
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.uniqueimagecolors.php
     */
    public function uniqueimagecolors(): bool
    {
    }

    /**
     * Sharpens an image
     *
     * @param float $radius
     * @param float $sigma
     * @param float $amount
     * @param float $threshold
     * @param int|null $channel
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.unsharpmaskimage.php
     */
    public function unsharpmaskimage(float $radius, float $sigma, float $amount, float $threshold, int $channel = Imagick::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * Checks if the current item is valid
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.valid.php
     */
    public function valid(): bool
    {
    }

    /**
     * Adds vignette filter to the image
     *
     * @param float $blackPoint The black point.
     * @param float $whitePoint The white point
     * @param int $x X offset of the ellipse
     * @param int $y Y offset of the ellipse
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.vignetteimage.php
     */
    public function vignetteimage(float $blackPoint, float $whitePoint, int $x, int $y): bool
    {
    }

    /**
     * Applies wave filter to the image
     *
     * @param float $amplitude The amplitude of the wave.
     * @param float $length The length of the wave.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.waveimage.php
     */
    public function waveimage(float $amplitude, float $length): bool
    {
    }

    /**
     * Force all pixels above the threshold into white
     *
     * @param mixed $threshold
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.whitethresholdimage.php
     */
    public function whitethresholdimage($threshold): bool
    {
    }

    /**
     * Writes an image to the specified filename
     *
     * @param string|null $filename Filename where to write the image. The extension of the filename
     * defines the type of the file.
     * Format can be forced regardless of file extension using format: prefix,
     * for example "jpg:test.png".
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.writeimage.php
     */
    public function writeimage(string $filename = null): bool
    {
    }

    /**
     * Writes an image to a filehandle
     *
     * @param resource $filehandle Filehandle where to write the image
     * @param string $format
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.writeimagefile.php
     */
    public function writeimagefile($filehandle, string $format = null): bool
    {
    }

    /**
     * Writes an image or image sequence
     *
     * @param string $filename
     * @param bool $adjoin
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.writeimages.php
     */
    public function writeimages(string $filename, bool $adjoin): bool
    {
    }

    /**
     * Writes frames to a filehandle
     *
     * @param resource $filehandle Filehandle where to write the images
     * @param string $format
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagick.writeimagesfile.php
     */
    public function writeimagesfile($filehandle, string $format = null): bool
    {
    }
}

/**
 * @since PECL imagick 2.0.0
 *
 * @link http://www.php.net/manual/en/class.imagickdraw.php
 */
class ImagickDraw
{
    /**
     * The ImagickDraw constructor
     *
     * @link http://www.php.net/manual/en/imagickdraw.construct.php
     */
    public function __construct()
    {
    }

    /**
     * Adjusts the current affine transformation matrix
     *
     * @param array $affine Affine matrix parameters
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.affine.php
     */
    public function affine(array $affine): bool
    {
    }

    /**
     * Draws text on the image
     *
     * @param float $x The x coordinate where text is drawn
     * @param float $y The y coordinate where text is drawn
     * @param string $text The text to draw on the image
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.annotation.php
     */
    public function annotation(float $x, float $y, string $text): bool
    {
    }

    /**
     * Draws an arc
     *
     * @param float $sx Starting x ordinate of bounding rectangle
     * @param float $sy starting y ordinate of bounding rectangle
     * @param float $ex ending x ordinate of bounding rectangle
     * @param float $ey ending y ordinate of bounding rectangle
     * @param float $sd starting degrees of rotation
     * @param float $ed ending degrees of rotation
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.arc.php
     */
    public function arc(float $sx, float $sy, float $ex, float $ey, float $sd, float $ed): bool
    {
    }

    /**
     * Draws a bezier curve
     *
     * @param array $coordinates Multidimensional array like array( array( 'x' =&gt; 1, 'y' =&gt; 2 ),
     * array( 'x' =&gt; 3, 'y' =&gt; 4 ) )
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.bezier.php
     */
    public function bezier(array $coordinates): bool
    {
    }

    /**
     * Draws a circle
     *
     * @param float $ox origin x coordinate
     * @param float $oy origin y coordinate
     * @param float $px perimeter x coordinate
     * @param float $py perimeter y coordinate
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.circle.php
     */
    public function circle(float $ox, float $oy, float $px, float $py): bool
    {
    }

    /**
     * Clears the ImagickDraw
     *
     * @return bool Returns an ImagickDraw object.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.clear.php
     */
    public function clear(): bool
    {
    }

    /**
     * Makes an exact copy of the specified ImagickDraw object
     *
     * @return ImagickDraw What the function returns, first on success, then on failure. See
     * also the &return.success; entity
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.clone.php
     */
    public function clone(): ImagickDraw
    {
    }

    /**
     * Draws color on image
     *
     * @param float $x x coordinate of the paint
     * @param float $y y coordinate of the paint
     * @param int $paintMethod one of the PAINT_ constants
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.color.php
     */
    public function color(float $x, float $y, int $paintMethod): bool
    {
    }

    /**
     * Adds a comment
     *
     * @param string $comment The comment string to add to vector output stream
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.comment.php
     */
    public function comment(string $comment): bool
    {
    }

    /**
     * Composites an image onto the current image
     *
     * @param int $compose composition operator. One of COMPOSITE_ constants
     * @param float $x x coordinate of the top left corner
     * @param float $y y coordinate of the top left corner
     * @param float $width width of the composition image
     * @param float $height height of the composition image
     * @param Imagick $compositeWand the Imagick object where composition image is taken from
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.composite.php
     */
    public function composite(int $compose, float $x, float $y, float $width, float $height, Imagick $compositeWand): bool
    {
    }

    /**
     * Frees all associated resources
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.destroy.php
     */
    public function destroy(): bool
    {
    }

    /**
     * Draws an ellipse on the image
     *
     * @param float $ox
     * @param float $oy
     * @param float $rx
     * @param float $ry
     * @param float $start
     * @param float $end
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.ellipse.php
     */
    public function ellipse(float $ox, float $oy, float $rx, float $ry, float $start, float $end): bool
    {
    }

    public function getbordercolor()
    {
    }

    /**
     * Obtains the current clipping path ID
     *
     * @return string Returns a string containing the clip path ID or false if no clip path exists.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getclippath.php
     */
    public function getclippath(): string
    {
    }

    /**
     * Returns the current polygon fill rule
     *
     * @return int Returns one of the FILLRULE_ constants.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getcliprule.php
     */
    public function getcliprule(): int
    {
    }

    /**
     * Returns the interpretation of clip path units
     *
     * @return int Returns an int on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getclipunits.php
     */
    public function getclipunits(): int
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     */
    public function getdensity()
    {
    }

    /**
     * Returns the fill color
     *
     * @return ImagickPixel Returns an ImagickPixel object.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getfillcolor.php
     */
    public function getfillcolor(): ImagickPixel
    {
    }

    /**
     * Returns the opacity used when drawing
     *
     * @return float The opacity.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getfillopacity.php
     */
    public function getfillopacity(): float
    {
    }

    /**
     * Returns the fill rule
     *
     * @return int Returns a FILLRULE_ constant
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getfillrule.php
     */
    public function getfillrule(): int
    {
    }

    /**
     * Returns the font
     *
     * @return string Returns a string on success and false if no font is set.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getfont.php
     */
    public function getfont(): string
    {
    }

    /**
     * Returns the font family
     *
     * @return string Returns the font family currently selected or false if font family is not set.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getfontfamily.php
     */
    public function getfontfamily(): string
    {
    }

    public function getfontresolution()
    {
    }

    /**
     * Returns the font pointsize
     *
     * @return float Returns the font size associated with the current ImagickDraw object.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getfontsize.php
     */
    public function getfontsize(): float
    {
    }

    /**
     * Description
     *
     * @return int
     *
     * @link http://www.php.net/manual/en/imagickdraw.getfontstretch.php
     */
    public function getfontstretch(): int
    {
    }

    /**
     * Returns the font style
     *
     * @return int Returns the font style constant (STYLE_) associated with the ImagickDraw object
     * or 0 if no style is set.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getfontstyle.php
     */
    public function getfontstyle(): int
    {
    }

    /**
     * Returns the font weight
     *
     * @return int Returns an int on success and 0 if no weight is set.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getfontweight.php
     */
    public function getfontweight(): int
    {
    }

    /**
     * Returns the text placement gravity
     *
     * @return int Returns a GRAVITY_ constant on success and 0 if no gravity is set.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getgravity.php
     */
    public function getgravity(): int
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     */
    public function getopacity()
    {
    }

    /**
     * Returns the current stroke antialias setting
     *
     * @return bool Returns <code>TRUE</code> if antialiasing is on and false if it is off.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getstrokeantialias.php
     */
    public function getstrokeantialias(): bool
    {
    }

    /**
     * Returns the color used for stroking object outlines
     *
     * @return ImagickPixel Returns an ImagickPixel object which describes the color.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getstrokecolor.php
     */
    public function getstrokecolor(): ImagickPixel
    {
    }

    /**
     * Returns an array representing the pattern of dashes and gaps used to stroke paths
     *
     * @return array Returns an array on success and empty array if not set.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getstrokedasharray.php
     */
    public function getstrokedasharray(): array
    {
    }

    /**
     * Returns the offset into the dash pattern to start the dash
     *
     * @return float Returns a float representing the offset and 0 if it's not set.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getstrokedashoffset.php
     */
    public function getstrokedashoffset(): float
    {
    }

    /**
     * Returns the shape to be used at the end of open subpaths when they are stroked
     *
     * @return int Returns one of the LINECAP_ constants or 0 if stroke linecap is not set.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getstrokelinecap.php
     */
    public function getstrokelinecap(): int
    {
    }

    /**
     * Returns the shape to be used at the corners of paths when they are stroked
     *
     * @return int Returns one of the LINEJOIN_ constants or 0 if stroke line join is not set.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getstrokelinejoin.php
     */
    public function getstrokelinejoin(): int
    {
    }

    /**
     * Returns the stroke miter limit
     *
     * @return int Returns an int describing the miter limit
     * and 0 if no miter limit is set.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getstrokemiterlimit.php
     */
    public function getstrokemiterlimit(): int
    {
    }

    /**
     * Returns the opacity of stroked object outlines
     *
     * @return float Returns a double describing the opacity.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getstrokeopacity.php
     */
    public function getstrokeopacity(): float
    {
    }

    /**
     * Returns the width of the stroke used to draw object outlines
     *
     * @return float Returns a double describing the stroke width.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getstrokewidth.php
     */
    public function getstrokewidth(): float
    {
    }

    /**
     * Returns the text alignment
     *
     * @return int Returns one of the ALIGN_ constants and 0 if no align is set.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.gettextalignment.php
     */
    public function gettextalignment(): int
    {
    }

    /**
     * Returns the current text antialias setting
     *
     * @return bool Returns <code>TRUE</code> if text is antialiased and false if not.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.gettextantialias.php
     */
    public function gettextantialias(): bool
    {
    }

    /**
     * Returns the text decoration
     *
     * @return int Returns one of the DECORATION_ constants
     * and 0 if no decoration is set.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.gettextdecoration.php
     */
    public function gettextdecoration(): int
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     */
    public function gettextdirection()
    {
    }

    /**
     * Returns the code set used for text annotations
     *
     * @return string Returns a string specifying the code set
     * or false if text encoding is not set.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.gettextencoding.php
     */
    public function gettextencoding(): string
    {
    }

    /**
     * Description
     *
     * @return float
     *
     * @link http://www.php.net/manual/en/imagickdraw.gettextinterlinespacing.php
     */
    public function gettextinterlinespacing(): float
    {
    }

    /**
     * Description
     *
     * @return float
     *
     * @link http://www.php.net/manual/en/imagickdraw.gettextinterwordspacing.php
     */
    public function gettextinterwordspacing(): float
    {
    }

    /**
     * Description
     *
     * @return float
     *
     * @link http://www.php.net/manual/en/imagickdraw.gettextkerning.php
     */
    public function gettextkerning(): float
    {
    }

    /**
     * Returns the text under color
     *
     * @return ImagickPixel Returns an ImagickPixel object describing the color.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.gettextundercolor.php
     */
    public function gettextundercolor(): ImagickPixel
    {
    }

    /**
     * Returns a string containing vector graphics
     *
     * @return string Returns a string containing the vector graphics.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getvectorgraphics.php
     */
    public function getvectorgraphics(): string
    {
    }

    /**
     * Draws a line
     *
     * @param float $sx starting x coordinate
     * @param float $sy starting y coordinate
     * @param float $ex ending x coordinate
     * @param float $ey ending y coordinate
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.line.php
     */
    public function line(float $sx, float $sy, float $ex, float $ey): bool
    {
    }

    /**
     * Paints on the image's opacity channel
     *
     * @param float $x x coordinate of the matte
     * @param float $y y coordinate of the matte
     * @param int $paintMethod PAINT_ constant
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.matte.php
     */
    public function matte(float $x, float $y, int $paintMethod): bool
    {
    }

    /**
     * Adds a path element to the current path
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathclose.php
     */
    public function pathclose(): bool
    {
    }

    /**
     * Draws a cubic Bezier curve
     *
     * @param float $x1 x coordinate of the first control point
     * @param float $y1 y coordinate of the first control point
     * @param float $x2 x coordinate of the second control point
     * @param float $y2 y coordinate of the first control point
     * @param float $x x coordinate of the curve end
     * @param float $y y coordinate of the curve end
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathcurvetoabsolute.php
     */
    public function pathcurvetoabsolute(float $x1, float $y1, float $x2, float $y2, float $x, float $y): bool
    {
    }

    /**
     * Draws a quadratic Bezier curve
     *
     * @param float $x1 x coordinate of the control point
     * @param float $y1 y coordinate of the control point
     * @param float $x x coordinate of the end point
     * @param float $y y coordinate of the end point
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathcurvetoquadraticbezierabsolute.php
     */
    public function pathcurvetoquadraticbezierabsolute(float $x1, float $y1, float $x, float $y): bool
    {
    }

    /**
     * Draws a quadratic Bezier curve
     *
     * @param float $x1 starting x coordinate
     * @param float $y1 starting y coordinate
     * @param float $x ending x coordinate
     * @param float $y ending y coordinate
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathcurvetoquadraticbezierrelative.php
     */
    public function pathcurvetoquadraticbezierrelative(float $x1, float $y1, float $x, float $y): bool
    {
    }

    /**
     * Draws a quadratic Bezier curve
     *
     * @param float $x ending x coordinate
     * @param float $y ending y coordinate
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathcurvetoquadraticbeziersmoothabsolute.php
     */
    public function pathcurvetoquadraticbeziersmoothabsolute(float $x, float $y): bool
    {
    }

    /**
     * Draws a quadratic Bezier curve
     *
     * @param float $x ending x coordinate
     * @param float $y ending y coordinate
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathcurvetoquadraticbeziersmoothrelative.php
     */
    public function pathcurvetoquadraticbeziersmoothrelative(float $x, float $y): bool
    {
    }

    /**
     * Draws a cubic Bezier curve
     *
     * @param float $x1 x coordinate of starting control point
     * @param float $y1 y coordinate of starting control point
     * @param float $x2 x coordinate of ending control point
     * @param float $y2 y coordinate of ending control point
     * @param float $x ending x coordinate
     * @param float $y ending y coordinate
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathcurvetorelative.php
     */
    public function pathcurvetorelative(float $x1, float $y1, float $x2, float $y2, float $x, float $y): bool
    {
    }

    /**
     * Draws a cubic Bezier curve
     *
     * @param float $x2 x coordinate of the second control point
     * @param float $y2 y coordinate of the second control point
     * @param float $x x coordinate of the ending point
     * @param float $y y coordinate of the ending point
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathcurvetosmoothabsolute.php
     */
    public function pathcurvetosmoothabsolute(float $x2, float $y2, float $x, float $y): bool
    {
    }

    /**
     * Draws a cubic Bezier curve
     *
     * @param float $x2 x coordinate of the second control point
     * @param float $y2 y coordinate of the second control point
     * @param float $x x coordinate of the ending point
     * @param float $y y coordinate of the ending point
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathcurvetosmoothrelative.php
     */
    public function pathcurvetosmoothrelative(float $x2, float $y2, float $x, float $y): bool
    {
    }

    /**
     * Draws an elliptical arc
     *
     * @param float $rx x radius
     * @param float $ry y radius
     * @param float $x_axis_rotation x axis rotation
     * @param bool $large_arc_flag large arc flag
     * @param bool $sweep_flag sweep flag
     * @param float $x x coordinate
     * @param float $y y coordinate
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathellipticarcabsolute.php
     */
    public function pathellipticarcabsolute(float $rx, float $ry, float $x_axis_rotation, bool $large_arc_flag, bool $sweep_flag, float $x, float $y): bool
    {
    }

    /**
     * Draws an elliptical arc
     *
     * @param float $rx x radius
     * @param float $ry y radius
     * @param float $x_axis_rotation x axis rotation
     * @param bool $large_arc_flag large arc flag
     * @param bool $sweep_flag sweep flag
     * @param float $x x coordinate
     * @param float $y y coordinate
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathellipticarcrelative.php
     */
    public function pathellipticarcrelative(float $rx, float $ry, float $x_axis_rotation, bool $large_arc_flag, bool $sweep_flag, float $x, float $y): bool
    {
    }

    /**
     * Terminates the current path
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathfinish.php
     */
    public function pathfinish(): bool
    {
    }

    /**
     * Draws a line path
     *
     * @param float $x starting x coordinate
     * @param float $y ending x coordinate
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathlinetoabsolute.php
     */
    public function pathlinetoabsolute(float $x, float $y): bool
    {
    }

    /**
     * Draws a horizontal line path
     *
     * @param float $x x coordinate
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathlinetohorizontalabsolute.php
     */
    public function pathlinetohorizontalabsolute(float $x): bool
    {
    }

    /**
     * Draws a horizontal line
     *
     * @param float $x x coordinate
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathlinetohorizontalrelative.php
     */
    public function pathlinetohorizontalrelative(float $x): bool
    {
    }

    /**
     * Draws a line path
     *
     * @param float $x starting x coordinate
     * @param float $y starting y coordinate
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathlinetorelative.php
     */
    public function pathlinetorelative(float $x, float $y): bool
    {
    }

    /**
     * Draws a vertical line
     *
     * @param float $y y coordinate
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathlinetoverticalabsolute.php
     */
    public function pathlinetoverticalabsolute(float $y): bool
    {
    }

    /**
     * Draws a vertical line path
     *
     * @param float $y y coordinate
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathlinetoverticalrelative.php
     */
    public function pathlinetoverticalrelative(float $y): bool
    {
    }

    /**
     * Starts a new sub-path
     *
     * @param float $x x coordinate of the starting point
     * @param float $y y coordinate of the starting point
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathmovetoabsolute.php
     */
    public function pathmovetoabsolute(float $x, float $y): bool
    {
    }

    /**
     * Starts a new sub-path
     *
     * @param float $x target x coordinate
     * @param float $y target y coordinate
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathmovetorelative.php
     */
    public function pathmovetorelative(float $x, float $y): bool
    {
    }

    /**
     * Declares the start of a path drawing list
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathstart.php
     */
    public function pathstart(): bool
    {
    }

    /**
     * Draws a point
     *
     * @param float $x point's x coordinate
     * @param float $y point's y coordinate
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.point.php
     */
    public function point(float $x, float $y): bool
    {
    }

    /**
     * Draws a polygon
     *
     * @param array $coordinates multidimensional array like array( array( 'x' =&gt; 3, 'y' =&gt; 4 ), array( 'x' =&gt; 2, 'y' =&gt; 6 ) );
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.polygon.php
     */
    public function polygon(array $coordinates): bool
    {
    }

    /**
     * Draws a polyline
     *
     * @param array $coordinates array of x and y coordinates: array( array( 'x' =&gt; 4, 'y' =&gt; 6 ), array( 'x' =&gt; 8, 'y' =&gt; 10 ) )
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.polyline.php
     */
    public function polyline(array $coordinates): bool
    {
    }

    /**
     * Destroys the current ImagickDraw in the stack, and returns to the previously pushed ImagickDraw
     *
     * @return bool Returns <code>TRUE</code> on success and false on failure.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pop.php
     */
    public function pop(): bool
    {
    }

    /**
     * Terminates a clip path definition
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.popclippath.php
     */
    public function popclippath(): bool
    {
    }

    /**
     * Terminates a definition list
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.popdefs.php
     */
    public function popdefs(): bool
    {
    }

    /**
     * Terminates a pattern definition
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.poppattern.php
     */
    public function poppattern(): bool
    {
    }

    /**
     * Clones the current ImagickDraw and pushes it to the stack
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.push.php
     */
    public function push(): bool
    {
    }

    /**
     * Starts a clip path definition
     *
     * @param string $clip_mask_id Clip mask Id
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pushclippath.php
     */
    public function pushclippath(string $clip_mask_id): bool
    {
    }

    /**
     * Indicates that following commands create named elements for early processing
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pushdefs.php
     */
    public function pushdefs(): bool
    {
    }

    /**
     * Indicates that subsequent commands up to a ImagickDraw::opPattern() command comprise the definition of a named pattern
     *
     * @param string $pattern_id the pattern Id
     * @param float $x x coordinate of the top-left corner
     * @param float $y y coordinate of the top-left corner
     * @param float $width width of the pattern
     * @param float $height height of the pattern
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pushpattern.php
     */
    public function pushpattern(string $pattern_id, float $x, float $y, float $width, float $height): bool
    {
    }

    /**
     * Draws a rectangle
     *
     * @param float $x1 x coordinate of the top left corner
     * @param float $y1 y coordinate of the top left corner
     * @param float $x2 x coordinate of the bottom right corner
     * @param float $y2 y coordinate of the bottom right corner
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.rectangle.php
     */
    public function rectangle(float $x1, float $y1, float $x2, float $y2): bool
    {
    }

    /**
     * Renders all preceding drawing commands onto the image
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.render.php
     */
    public function render(): bool
    {
    }

    /**
     * Description
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagickdraw.resetvectorgraphics.php
     */
    public function resetvectorgraphics(): bool
    {
    }

    /**
     * Applies the specified rotation to the current coordinate space
     *
     * @param float $degrees degrees to rotate
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.rotate.php
     */
    public function rotate(float $degrees): bool
    {
    }

    /**
     * Draws a rounded rectangle
     *
     * @param float $x1 x coordinate of the top left corner
     * @param float $y1 y coordinate of the top left corner
     * @param float $x2 x coordinate of the bottom right
     * @param float $y2 y coordinate of the bottom right
     * @param float $rx x rounding
     * @param float $ry y rounding
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.roundrectangle.php
     */
    public function roundrectangle(float $x1, float $y1, float $x2, float $y2, float $rx, float $ry): bool
    {
    }

    /**
     * Adjusts the scaling factor
     *
     * @param float $x horizontal factor
     * @param float $y vertical factor
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.scale.php
     */
    public function scale(float $x, float $y): bool
    {
    }

    /**
     * @param mixed $bordercolor
     */
    public function setbordercolor($bordercolor)
    {
    }

    /**
     * Associates a named clipping path with the image
     *
     * @param string $clip_mask the clipping path name
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setclippath.php
     */
    public function setclippath(string $clip_mask): bool
    {
    }

    /**
     * Set the polygon fill rule to be used by the clipping path
     *
     * @param int $fill_rule FILLRULE_ constant
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setcliprule.php
     */
    public function setcliprule(int $fill_rule): bool
    {
    }

    /**
     * Sets the interpretation of clip path units
     *
     * @param int $clip_units the number of clip units
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setclipunits.php
     */
    public function setclipunits(int $clip_units): bool
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @param mixed $density
     */
    public function setdensity($density)
    {
    }

    /**
     * Sets the opacity to use when drawing using the fill color or fill texture
     *
     * @param float $opacity fill alpha
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfillalpha.php
     */
    public function setfillalpha(float $opacity): bool
    {
    }

    /**
     * Sets the fill color to be used for drawing filled objects
     *
     * @param ImagickPixel $fill_pixel ImagickPixel to use to set the color
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfillcolor.php
     */
    public function setfillcolor(ImagickPixel $fill_pixel): bool
    {
    }

    /**
     * Sets the opacity to use when drawing using the fill color or fill texture
     *
     * @param float $fillOpacity the fill opacity
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfillopacity.php
     */
    public function setfillopacity(float $fillOpacity): bool
    {
    }

    /**
     * Sets the URL to use as a fill pattern for filling objects
     *
     * @param string $fill_url URL to use to obtain fill pattern.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfillpatternurl.php
     */
    public function setfillpatternurl(string $fill_url): bool
    {
    }

    /**
     * Sets the fill rule to use while drawing polygons
     *
     * @param int $fill_rule FILLRULE_ constant
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfillrule.php
     */
    public function setfillrule(int $fill_rule): bool
    {
    }

    /**
     * Sets the fully-specified font to use when annotating with text
     *
     * @param string $font_name
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfont.php
     */
    public function setfont(string $font_name): bool
    {
    }

    /**
     * Sets the font family to use when annotating with text
     *
     * @param string $font_family the font family
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfontfamily.php
     */
    public function setfontfamily(string $font_family): bool
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     */
    public function setfontresolution($x, $y)
    {
    }

    /**
     * Sets the font pointsize to use when annotating with text
     *
     * @param float $pointsize the point size
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfontsize.php
     */
    public function setfontsize(float $pointsize): bool
    {
    }

    /**
     * Sets the font stretch to use when annotating with text
     *
     * @param int $fontStretch STRETCH_ constant
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfontstretch.php
     */
    public function setfontstretch(int $fontStretch): bool
    {
    }

    /**
     * Sets the font style to use when annotating with text
     *
     * @param int $style STYLETYPE_ constant
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfontstyle.php
     */
    public function setfontstyle(int $style): bool
    {
    }

    /**
     * Sets the font weight
     *
     * @param int $font_weight
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfontweight.php
     */
    public function setfontweight(int $font_weight): bool
    {
    }

    /**
     * Sets the text placement gravity
     *
     * @param int $gravity GRAVITY_ constant
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setgravity.php
     */
    public function setgravity(int $gravity): bool
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @param mixed $opacity
     */
    public function setopacity($opacity)
    {
    }

    /**
     * Description
     *
     * @param float $x_resolution
     * @param float $y_resolution
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagickdraw.setresolution.php
     */
    public function setresolution(float $x_resolution, float $y_resolution): bool
    {
    }

    /**
     * Specifies the opacity of stroked object outlines
     *
     * @param float $opacity opacity
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokealpha.php
     */
    public function setstrokealpha(float $opacity): bool
    {
    }

    /**
     * Controls whether stroked outlines are antialiased
     *
     * @param bool $stroke_antialias the antialias setting
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokeantialias.php
     */
    public function setstrokeantialias(bool $stroke_antialias): bool
    {
    }

    /**
     * Sets the color used for stroking object outlines
     *
     * @param ImagickPixel $stroke_pixel the stroke color
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokecolor.php
     */
    public function setstrokecolor(ImagickPixel $stroke_pixel): bool
    {
    }

    /**
     * Specifies the pattern of dashes and gaps used to stroke paths
     *
     * @param array $dashArray array of floats
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokedasharray.php
     */
    public function setstrokedasharray(array $dashArray): bool
    {
    }

    /**
     * Specifies the offset into the dash pattern to start the dash
     *
     * @param float $dash_offset dash offset
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokedashoffset.php
     */
    public function setstrokedashoffset(float $dash_offset): bool
    {
    }

    /**
     * Specifies the shape to be used at the end of open subpaths when they are stroked
     *
     * @param int $linecap LINECAP_ constant
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokelinecap.php
     */
    public function setstrokelinecap(int $linecap): bool
    {
    }

    /**
     * Specifies the shape to be used at the corners of paths when they are stroked
     *
     * @param int $linejoin LINEJOIN_ constant
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokelinejoin.php
     */
    public function setstrokelinejoin(int $linejoin): bool
    {
    }

    /**
     * Specifies the miter limit
     *
     * @param int $miterlimit the miter limit
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokemiterlimit.php
     */
    public function setstrokemiterlimit(int $miterlimit): bool
    {
    }

    /**
     * Specifies the opacity of stroked object outlines
     *
     * @param float $stroke_opacity stroke opacity. 1.0 is fully opaque
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokeopacity.php
     */
    public function setstrokeopacity(float $stroke_opacity): bool
    {
    }

    /**
     * Sets the pattern used for stroking object outlines
     *
     * @param string $stroke_url stroke URL
     *
     * @return bool imagick.imagickdraw.return.success;
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokepatternurl.php
     */
    public function setstrokepatternurl(string $stroke_url): bool
    {
    }

    /**
     * Sets the width of the stroke used to draw object outlines
     *
     * @param float $stroke_width stroke width
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokewidth.php
     */
    public function setstrokewidth(float $stroke_width): bool
    {
    }

    /**
     * Specifies a text alignment
     *
     * @param int $alignment ALIGN_ constant
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.settextalignment.php
     */
    public function settextalignment(int $alignment): bool
    {
    }

    /**
     * Controls whether text is antialiased
     *
     * @param bool $antiAlias
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.settextantialias.php
     */
    public function settextantialias(bool $antiAlias): bool
    {
    }

    /**
     * Specifies a decoration
     *
     * @param int $decoration DECORATION_ constant
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.settextdecoration.php
     */
    public function settextdecoration(int $decoration): bool
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @param mixed $direction
     */
    public function settextdirection($direction)
    {
    }

    /**
     * Specifies the text code set
     *
     * @param string $encoding the encoding name
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.settextencoding.php
     */
    public function settextencoding(string $encoding): bool
    {
    }

    /**
     * Description
     *
     * @param float $spacing
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagickdraw.settextinterlinespacing.php
     */
    public function settextinterlinespacing(float $spacing): bool
    {
    }

    /**
     * Description
     *
     * @param float $spacing
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagickdraw.settextinterwordspacing.php
     */
    public function settextinterwordspacing(float $spacing): bool
    {
    }

    /**
     * Description
     *
     * @param float $kerning
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagickdraw.settextkerning.php
     */
    public function settextkerning(float $kerning): bool
    {
    }

    /**
     * Specifies the color of a background rectangle
     *
     * @param ImagickPixel $under_color the under color
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.settextundercolor.php
     */
    public function settextundercolor(ImagickPixel $under_color): bool
    {
    }

    /**
     * Sets the vector graphics
     *
     * @param string $xml xml containing the vector graphics
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setvectorgraphics.php
     */
    public function setvectorgraphics(string $xml): bool
    {
    }

    /**
     * Sets the overall canvas size
     *
     * @param int $x1 left x coordinate
     * @param int $y1 left y coordinate
     * @param int $x2 right x coordinate
     * @param int $y2 right y coordinate
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setviewbox.php
     */
    public function setviewbox(int $x1, int $y1, int $x2, int $y2): bool
    {
    }

    /**
     * Skews the current coordinate system in the horizontal direction
     *
     * @param float $degrees degrees to skew
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.skewx.php
     */
    public function skewx(float $degrees): bool
    {
    }

    /**
     * Skews the current coordinate system in the vertical direction
     *
     * @param float $degrees degrees to skew
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.skewy.php
     */
    public function skewy(float $degrees): bool
    {
    }

    /**
     * Applies a translation to the current coordinate system
     *
     * @param float $x horizontal translation
     * @param float $y vertical translation
     *
     * @return bool No value is returned.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.translate.php
     */
    public function translate(float $x, float $y): bool
    {
    }
}

class ImagickDrawException extends Exception
{
}

class ImagickException extends Exception
{
}

/**
 * @since PECL imagick >= 3.3.0
 *
 * @link http://www.php.net/manual/en/class.imagickkernel.php
 */
class ImagickKernel
{
    private function __construct()
    {
    }

    /**
     * Description
     *
     * @param ImagickKernel $ImagickKernel
     *
     * @return void
     *
     * @since PECL imagick >= 3.3.0
     *
     * @link http://www.php.net/manual/en/imagickkernel.addkernel.php
     */
    public function addkernel(ImagickKernel $ImagickKernel)
    {
    }

    /**
     * Description
     *
     * @return void
     *
     * @since PECL imagick >= 3.3.0
     *
     * @link http://www.php.net/manual/en/imagickkernel.addunitykernel.php
     */
    public function addunitykernel()
    {
    }

    /**
     * Description
     *
     * @param int $kernelType
     * @param string $kernelString A string that describes the parameters e.g. "4,2.5"
     *
     * @return ImagickKernel
     *
     * @since PECL imagick >= 3.3.0
     *
     * @link http://www.php.net/manual/en/imagickkernel.frombuiltin.php
     */
    public static function frombuiltin(int $kernelType, string $kernelString): ImagickKernel
    {
    }

    /**
     * Description
     *
     * @param array $matrix
     * @param array $origin
     *
     * @return ImagickKernel The generated ImagickKernel.
     *
     * @since PECL imagick >= 3.3.0
     *
     * @link http://www.php.net/manual/en/imagickkernel.frommatrix.php
     */
    public static function frommatrix(array $matrix, array $origin = null): ImagickKernel
    {
    }

    /**
     * Description
     *
     * @return array A matrix (2d array) of the values that represent the kernel.
     *
     * @since PECL imagick >= 3.3.0
     *
     * @link http://www.php.net/manual/en/imagickkernel.getmatrix.php
     */
    public function getmatrix(): array
    {
    }

    /**
     * Description
     *
     * @return void
     *
     * @since PECL imagick >= 3.3.0
     *
     * @link http://www.php.net/manual/en/imagickkernel.scale.php
     */
    public function scale()
    {
    }

    /**
     * Description
     *
     * @return array
     *
     * @since PECL imagick >= 3.3.0
     *
     * @link http://www.php.net/manual/en/imagickkernel.separate.php
     */
    public function separate(): array
    {
    }
}

/**
 * @link http://www.php.net/manual/en/class.imagickkernelexception.php
 */
class ImagickKernelException extends Exception
{
}

/**
 * @since PECL imagick 2.0.0
 *
 * @link http://www.php.net/manual/en/class.imagickpixel.php
 */
class ImagickPixel
{
    /**
     * The ImagickPixel constructor
     *
     * @param mixed $color
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.construct.php
     */
    public function __construct($color = null)
    {
    }

    /**
     * Clears resources associated with this object
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.clear.php
     */
    public function clear(): bool
    {
    }

    /**
     * @since PECL imagick 2.1.0
     */
    public function clone()
    {
    }

    /**
     * Deallocates resources associated with this object
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.destroy.php
     */
    public function destroy(): bool
    {
    }

    /**
     * Returns the color
     *
     * @param int|null $normalized Normalize the color values
     *
     * @return array An array of channel values, each normalized if <code>TRUE</code> is given as param. Throws
     * ImagickPixelException on error.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.getcolor.php
     */
    public function getcolor(int $normalized = 0): array
    {
    }

    /**
     * Returns the color as a string
     *
     * @return string Returns the color of the ImagickPixel object as a string.
     *
     * @since PECL imagick 2.1.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.getcolorasstring.php
     */
    public function getcolorasstring(): string
    {
    }

    /**
     * Returns the color count associated with this color
     *
     * @return int Returns the color count as an integer on success, throws
     * ImagickPixelException on failure.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.getcolorcount.php
     */
    public function getcolorcount(): int
    {
    }

    /**
     * Description
     *
     * @return array Returns an array with keys <code>"r"</code>, <code>"g"</code>,
     * <code>"b"</code>, <code>"a"</code>.
     *
     * @link http://www.php.net/manual/en/imagickpixel.getcolorquantum.php
     */
    public function getcolorquantum(): array
    {
    }

    /**
     * Gets the normalized value of the provided color channel
     *
     * @param int $color The color to get the value of, specified as one of the Imagick color
     * constants. This can be one of the RGB colors, CMYK colors, alpha and
     * opacity e.g (Imagick::COLOR_BLUE, Imagick::COLOR_MAGENTA).
     *
     * @return float The value of the channel, as a normalized floating-point number, throwing
     * ImagickPixelException on error.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.getcolorvalue.php
     */
    public function getcolorvalue(int $color): float
    {
    }

    /**
     * Description
     *
     * @param int $color
     *
     * @return float The quantum value of the color element. Float if ImageMagick was compiled with HDRI, otherwise an int.
     *
     * @link http://www.php.net/manual/en/imagickpixel.getcolorvaluequantum.php
     */
    public function getcolorvaluequantum(int $color): float
    {
    }

    /**
     * Returns the normalized HSL color of the ImagickPixel object
     *
     * @return array Returns the HSL value in an array with the keys "hue",
     * "saturation", and "luminosity". Throws ImagickPixelException on failure.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.gethsl.php
     */
    public function gethsl(): array
    {
    }

    /**
     * Description
     *
     * @return int
     *
     * @link http://www.php.net/manual/en/imagickpixel.getindex.php
     */
    public function getindex(): int
    {
    }

    /**
     * Check the distance between this color and another
     *
     * @param ImagickPixel $color The ImagickPixel object to compare this object against.
     * @param float $fuzz The maximum distance within which to consider these colors as similar.
     * The theoretical maximum for this value is the square root of three
     * (1.732).
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagickpixel.ispixelsimilar.php
     */
    public function ispixelsimilar(ImagickPixel $color, float $fuzz = null): bool
    {
    }

    /**
     * Description
     *
     * @param string $color
     * @param string $fuzz
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagickpixel.ispixelsimilarquantum.php
     */
    public function ispixelsimilarquantum(string $color, string $fuzz = null): bool
    {
    }

    /**
     * Check the distance between this color and another
     *
     * @param ImagickPixel $color The ImagickPixel object to compare this object against.
     * @param float $fuzz The maximum distance within which to consider these colors as similar.
     * The theoretical maximum for this value is the square root of three
     * (1.732).
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.issimilar.php
     */
    public function issimilar(ImagickPixel $color, float $fuzz = null): bool
    {
    }

    /**
     * Sets the color
     *
     * @param string $color The color definition to use in order to initialise the
     * ImagickPixel object.
     *
     * @return bool Returns <code>TRUE</code> if the specified color was set, <code>FALSE</code> otherwise.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.setcolor.php
     */
    public function setcolor(string $color): bool
    {
    }

    /**
     * Description
     *
     * @param int $colorCount
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagickpixel.setcolorcount.php
     */
    public function setcolorcount(int $colorCount): bool
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @param ImagickPixel $srcPixel
     */
    public function setcolorfrompixel(ImagickPixel $srcPixel)
    {
    }

    /**
     * Sets the normalized value of one of the channels
     *
     * @param int $color One of the Imagick color constants e.g. \Imagick::COLOR_GREEN or \Imagick::COLOR_ALPHA.
     * @param float $value The value to set this channel to, ranging from 0 to 1.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.setcolorvalue.php
     */
    public function setcolorvalue(int $color, float $value): bool
    {
    }

    /**
     * Description
     *
     * @param int $color Which color element to set e.g. \Imagick::COLOR_GREEN.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagickpixel.setcolorvaluequantum.php
     */
    public function setcolorvaluequantum(int $color): bool
    {
    }

    /**
     * Sets the normalized HSL color
     *
     * @param float $hue The normalized value for hue, described as a fractional arc
     * (between 0 and 1) of the hue circle, where the zero value is
     * red.
     * @param float $saturation The normalized value for saturation, with 1 as full saturation.
     * @param float $luminosity The normalized value for luminosity, on a scale from black at
     * 0 to white at 1, with the full HS value at 0.5 luminosity.
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.sethsl.php
     */
    public function sethsl(float $hue, float $saturation, float $luminosity): bool
    {
    }

    /**
     * Description
     *
     * @param int $index
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @link http://www.php.net/manual/en/imagickpixel.setindex.php
     */
    public function setindex(int $index): bool
    {
    }
}

class ImagickPixelException extends Exception
{
}

/**
 * @since PECL imagick 2.0.0
 *
 * @link http://www.php.net/manual/en/class.imagickpixeliterator.php
 */
class ImagickPixelIterator implements Iterator
{
    /**
     * The ImagickPixelIterator constructor
     *
     * @param Imagick $Imagick
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.construct.php
     */
    public function __construct(Imagick $Imagick)
    {
    }

    /**
     * Clear resources associated with a PixelIterator
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.clear.php
     */
    public function clear(): bool
    {
    }

    public function current()
    {
    }

    /**
     * Deallocates resources associated with a PixelIterator
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.destroy.php
     */
    public function destroy(): bool
    {
    }

    /**
     * Returns the current row of ImagickPixel objects
     *
     * @return array Returns a row as an array of ImagickPixel objects that can themselves be iterated.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.getcurrentiteratorrow.php
     */
    public function getcurrentiteratorrow(): array
    {
    }

    /**
     * Returns the current pixel iterator row
     *
     * @return int Returns the integer offset of the row, throwing
     * ImagickPixelIteratorException on error.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.getiteratorrow.php
     */
    public function getiteratorrow(): int
    {
    }

    /**
     * Returns the next row of the pixel iterator
     *
     * @return array Returns the next row as an array of ImagickPixel objects, throwing
     * ImagickPixelIteratorException on error.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.getnextiteratorrow.php
     */
    public function getnextiteratorrow(): array
    {
    }

    /**
     * @param Imagick $Imagick
     */
    public static function getpixeliterator(Imagick $Imagick)
    {
    }

    /**
     * @param Imagick $Imagick
     * @param mixed $x
     * @param mixed $y
     * @param mixed $columns
     * @param mixed $rows
     */
    public static function getpixelregioniterator(Imagick $Imagick, $x, $y, $columns, $rows)
    {
    }

    /**
     * Returns the previous row
     *
     * @return array Returns the previous row as an array of ImagickPixelWand objects from the
     * ImagickPixelIterator, throwing ImagickPixelIteratorException on error.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.getpreviousiteratorrow.php
     */
    public function getpreviousiteratorrow(): array
    {
    }

    public function key()
    {
    }

    /**
     * Returns a new pixel iterator
     *
     * @return bool Returns <code>TRUE</code> on success. Throwing ImagickPixelIteratorException.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.newpixeliterator.php
     */
    public function newpixeliterator(): bool
    {
    }

    /**
     * Returns a new pixel iterator
     *
     * @return bool Returns a new ImagickPixelIterator on success; on failure, throws
     * ImagickPixelIteratorException.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.newpixelregioniterator.php
     */
    public function newpixelregioniterator(): bool
    {
    }

    public function next()
    {
    }

    /**
     * Resets the pixel iterator
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.resetiterator.php
     */
    public function resetiterator(): bool
    {
    }

    public function rewind()
    {
    }

    /**
     * Sets the pixel iterator to the first pixel row
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.setiteratorfirstrow.php
     */
    public function setiteratorfirstrow(): bool
    {
    }

    /**
     * Sets the pixel iterator to the last pixel row
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.setiteratorlastrow.php
     */
    public function setiteratorlastrow(): bool
    {
    }

    /**
     * Set the pixel iterator row
     *
     * @param int $row
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.setiteratorrow.php
     */
    public function setiteratorrow(int $row): bool
    {
    }

    /**
     * Syncs the pixel iterator
     *
     * @return bool Returns <code>TRUE</code> on success.
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.synciterator.php
     */
    public function synciterator(): bool
    {
    }

    public function valid()
    {
    }
}

class ImagickPixelIteratorException extends Exception
{
}
