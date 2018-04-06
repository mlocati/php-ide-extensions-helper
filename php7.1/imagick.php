<?php
// Start of extension: imagick
// - parsed on POSIX with PHP 7.1.15 (extension version 3.4.3)
// - parsed on Windows with PHP 7.1.15 (extension version 3.4.3)

/**
 * The Imagick class has the ability to hold and operate on multiple
 *    images simultaneously. This is achieved through an internal stack. There
 *    is always an internal pointer that points at the current image. Some
 *    functions operate on all images in the Imagick class, but most operate
 *    only on the current image in the internal stack. As a convention, method
 *    names can contain the word Image to denote they affect only the current
 *    image in the stack.
 *
 * @since PECL imagick 2.0.0
 *
 * @link http://www.php.net/manual/en/class.imagick.php
 */
class Imagick implements Countable, Iterator
{
    /**
     * @param mixed|null $files
     */
    public function __construct($files = null)
    {
    }

    public function __tostring()
    {
    }

    /**
     * @param mixed $radius
     * @param mixed $sigma
     * @param mixed|null $CHANNEL
     */
    public function adaptiveblurimage($radius, $sigma, $CHANNEL = null)
    {
    }

    /**
     * @param mixed $columns
     * @param mixed $rows
     * @param mixed|null $bestfit
     * @param mixed|null $legacy
     */
    public function adaptiveresizeimage($columns, $rows, $bestfit = null, $legacy = null)
    {
    }

    /**
     * @param mixed $radius
     * @param mixed $sigma
     * @param mixed|null $CHANNEL
     */
    public function adaptivesharpenimage($radius, $sigma, $CHANNEL = null)
    {
    }

    /**
     * @param mixed $width
     * @param mixed $height
     * @param mixed $offset
     */
    public function adaptivethresholdimage($width, $height, $offset)
    {
    }

    /**
     * @param Imagick $Imagick
     */
    public function addimage($Imagick)
    {
    }

    /**
     * @param mixed $NOISE
     * @param mixed|null $CHANNEL
     */
    public function addnoiseimage($NOISE, $CHANNEL = null)
    {
    }

    /**
     * @param ImagickDraw $ImagickDraw
     */
    public function affinetransformimage($ImagickDraw)
    {
    }

    /**
     * @param mixed $server_name
     */
    public function animateimages($server_name)
    {
    }

    /**
     * @param ImagickDraw $ImagickDraw
     * @param mixed $x
     * @param mixed $y
     * @param mixed $angle
     * @param mixed $text
     */
    public function annotateimage($ImagickDraw, $x, $y, $angle, $text)
    {
    }

    /**
     * @param mixed $stack
     */
    public function appendimages($stack)
    {
    }

    /**
     * @param mixed $CHANNEL
     */
    public function autogammaimage($CHANNEL)
    {
    }

    /**
     * @param mixed|null $CHANNEL
     */
    public function autolevelimage($CHANNEL = null)
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     */
    public function autoorient()
    {
    }

    public function averageimages()
    {
    }

    /**
     * @param mixed $color
     */
    public function blackthresholdimage($color)
    {
    }

    /**
     * @param mixed|null $factor
     */
    public function blueshiftimage($factor = null)
    {
    }

    /**
     * @param mixed $radius
     * @param mixed $sigma
     * @param mixed|null $CHANNELTYPE
     */
    public function blurimage($radius, $sigma, $CHANNELTYPE = null)
    {
    }

    /**
     * @param mixed $color
     * @param mixed $width
     * @param mixed $height
     */
    public function borderimage($color, $width, $height)
    {
    }

    /**
     * @param mixed $brightness
     * @param mixed $contrast
     * @param mixed|null $CHANNEL
     */
    public function brightnesscontrastimage($brightness, $contrast, $CHANNEL = null)
    {
    }

    /**
     * @param mixed $orig_width
     * @param mixed $orig_height
     * @param mixed $desired_width
     * @param mixed $desired_height
     * @param mixed|null $legacy
     */
    public static function calculatecrop($orig_width, $orig_height, $desired_width, $desired_height, $legacy = null)
    {
    }

    /**
     * @param mixed $radius
     * @param mixed $sigma
     */
    public function charcoalimage($radius, $sigma)
    {
    }

    /**
     * @param mixed $width
     * @param mixed $height
     * @param mixed $x
     * @param mixed $y
     */
    public function chopimage($width, $height, $x, $y)
    {
    }

    /**
     * @param mixed|null $CHANNEL
     */
    public function clampimage($CHANNEL = null)
    {
    }

    public function clear()
    {
    }

    public function clipimage()
    {
    }

    /**
     * @param mixed $pathname
     * @param mixed $inside
     */
    public function clipimagepath($pathname, $inside)
    {
    }

    /**
     * @param mixed $pathname
     * @param mixed $inside
     */
    public function clippathimage($pathname, $inside)
    {
    }

    public function clone()
    {
    }

    /**
     * @param Imagick $Imagick
     * @param mixed|null $CHANNELTYPE
     */
    public function clutimage($Imagick, $CHANNELTYPE = null)
    {
    }

    public function coalesceimages()
    {
    }

    /**
     * @param mixed $antialias
     */
    public function colordecisionlistimage($antialias)
    {
    }

    /**
     * @param mixed $fill_color
     * @param mixed $fuzz
     * @param mixed $border_color
     * @param mixed $y
     * @param mixed $x
     */
    public function colorfloodfillimage($fill_color, $fuzz, $border_color, $y, $x)
    {
    }

    /**
     * @param mixed $colorize_color
     * @param mixed $opacity
     * @param mixed|null $legacy
     */
    public function colorizeimage($colorize_color, $opacity, $legacy = null)
    {
    }

    /**
     * @param mixed $color_matrix
     */
    public function colormatriximage($color_matrix)
    {
    }

    public function combineimages()
    {
    }

    /**
     * @param mixed $comment
     */
    public function commentimage($comment)
    {
    }

    /**
     * @param Imagick $Imagick
     * @param mixed $CHANNEL
     * @param mixed $METRIC
     */
    public function compareimagechannels($Imagick, $CHANNEL, $METRIC)
    {
    }

    /**
     * @param mixed $LAYER
     */
    public function compareimagelayers($LAYER)
    {
    }

    /**
     * @param Imagick $Imagick
     * @param mixed $METRIC
     */
    public function compareimages($Imagick, $METRIC)
    {
    }

    /**
     * @param Imagick $Imagick
     * @param mixed $COMPOSITE
     * @param mixed $x
     * @param mixed $y
     * @param mixed|null $CHANNELTYPE
     */
    public function compositeimage($Imagick, $COMPOSITE, $x, $y, $CHANNELTYPE = null)
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @param Imagick $Imagick
     * @param mixed $COMPOSITE
     * @param mixed $GRAVITY
     */
    public function compositeimagegravity($Imagick, $COMPOSITE, $GRAVITY)
    {
    }

    /**
     * @param mixed $sharpen
     */
    public function contrastimage($sharpen)
    {
    }

    /**
     * @param mixed $blackPoint
     * @param mixed $whitePoint
     * @param mixed|null $CHANNEL
     */
    public function contraststretchimage($blackPoint, $whitePoint, $CHANNEL = null)
    {
    }

    /**
     * @param mixed $kernel
     * @param mixed|null $CHANNEL
     */
    public function convolveimage($kernel, $CHANNEL = null)
    {
    }

    /**
     * Count all elements in an array, or something in an object
     *
     * @param mixed|null $mode
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.count.php
     */
    public function count($mode = null): int
    {
    }

    /**
     * @param mixed $width
     * @param mixed $height
     * @param mixed $x
     * @param mixed $y
     */
    public function cropimage($width, $height, $x, $y)
    {
    }

    /**
     * @param mixed $width
     * @param mixed $height
     * @param mixed|null $legacy
     */
    public function cropthumbnailimage($width, $height, $legacy = null)
    {
    }

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    /**
     * @param mixed $displace
     */
    public function cyclecolormapimage($displace)
    {
    }

    /**
     * @param mixed $passphrase
     */
    public function decipherimage($passphrase)
    {
    }

    public function deconstructimages()
    {
    }

    /**
     * @param mixed $artifact
     */
    public function deleteimageartifact($artifact)
    {
    }

    /**
     * @param mixed $name
     */
    public function deleteimageproperty($name)
    {
    }

    /**
     * @param mixed $threshold
     */
    public function deskewimage($threshold)
    {
    }

    public function despeckleimage()
    {
    }

    public function destroy()
    {
    }

    /**
     * @param mixed $serverName
     */
    public function displayimage($serverName)
    {
    }

    /**
     * @param mixed $serverName
     */
    public function displayimages($serverName)
    {
    }

    /**
     * @param mixed $method
     * @param mixed $arguments
     * @param mixed $bestfit
     */
    public function distortimage($method, $arguments, $bestfit)
    {
    }

    /**
     * @param ImagickDraw $ImagickDraw
     */
    public function drawimage($ImagickDraw)
    {
    }

    /**
     * @param mixed $radius
     */
    public function edgeimage($radius)
    {
    }

    /**
     * @param mixed $radius
     * @param mixed $sigma
     */
    public function embossimage($radius, $sigma)
    {
    }

    /**
     * @param mixed $passphrase
     */
    public function encipherimage($passphrase)
    {
    }

    public function enhanceimage()
    {
    }

    public function equalizeimage()
    {
    }

    /**
     * @param mixed $EVALUATE
     * @param mixed $constant
     * @param mixed|null $CHANNEL
     */
    public function evaluateimage($EVALUATE, $constant, $CHANNEL = null)
    {
    }

    /**
     * @param mixed $EVALUATE
     */
    public function evaluateimages($EVALUATE)
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     * @param mixed $width
     * @param mixed $height
     * @param mixed $map
     * @param mixed $STORAGE
     */
    public function exportimagepixels($x, $y, $width, $height, $map, $STORAGE)
    {
    }

    /**
     * @param mixed $width
     * @param mixed $height
     * @param mixed $x
     * @param mixed $y
     */
    public function extentimage($width, $height, $x, $y)
    {
    }

    /**
     * @param ImagickKernel $ImagickKernel
     * @param mixed|null $CHANNEL
     */
    public function filter($ImagickKernel, $CHANNEL = null)
    {
    }

    public function flattenimages()
    {
    }

    public function flipimage()
    {
    }

    /**
     * @param mixed $fill
     * @param mixed $fuzz
     * @param mixed $bordercolor
     * @param mixed $x
     * @param mixed $y
     * @param mixed $invert
     * @param mixed|null $CHANNEL
     */
    public function floodfillpaintimage($fill, $fuzz, $bordercolor, $x, $y, $invert, $CHANNEL = null)
    {
    }

    public function flopimage()
    {
    }

    /**
     * @param mixed $magnitude
     */
    public function forwardfouriertransformimage($magnitude)
    {
    }

    /**
     * @param mixed $color
     * @param mixed $width
     * @param mixed $height
     * @param mixed $innerBevel
     * @param mixed $outerBevel
     */
    public function frameimage($color, $width, $height, $innerBevel, $outerBevel)
    {
    }

    /**
     * @param mixed $FUNCTION
     * @param mixed $arguments
     */
    public function functionimage($FUNCTION, $arguments)
    {
    }

    /**
     * @param mixed $expression
     * @param mixed|null $CHANNEL
     */
    public function fximage($expression, $CHANNEL = null)
    {
    }

    /**
     * @param mixed $gamma
     * @param mixed|null $CHANNEL
     */
    public function gammaimage($gamma, $CHANNEL = null)
    {
    }

    /**
     * @param mixed $radius
     * @param mixed $sigma
     * @param mixed|null $CHANNEL
     */
    public function gaussianblurimage($radius, $sigma, $CHANNEL = null)
    {
    }

    public function getantialias()
    {
    }

    public function getcolorspace()
    {
    }

    public function getcompression()
    {
    }

    public function getcompressionquality()
    {
    }

    /**
     * @param mixed|null $pattern
     */
    public static function getconfigureoptions($pattern = null)
    {
    }

    public static function getcopyright()
    {
    }

    public static function getfeatures()
    {
    }

    public function getfilename()
    {
    }

    public function getfont()
    {
    }

    public function getformat()
    {
    }

    public function getgravity()
    {
    }

    public static function gethdrienabled()
    {
    }

    public static function gethomeurl()
    {
    }

    public function getimage()
    {
    }

    public function getimagealphachannel()
    {
    }

    /**
     * @param mixed $artifact
     */
    public function getimageartifact($artifact)
    {
    }

    /**
     * @param mixed $key
     */
    public function getimageattribute($key)
    {
    }

    public function getimagebackgroundcolor()
    {
    }

    public function getimageblob()
    {
    }

    public function getimageblueprimary()
    {
    }

    public function getimagebordercolor()
    {
    }

    /**
     * @param mixed $CHANNEL
     */
    public function getimagechanneldepth($CHANNEL)
    {
    }

    /**
     * @param Imagick $Imagick
     * @param mixed $CHANNEL
     * @param mixed $METRIC
     */
    public function getimagechanneldistortion($Imagick, $CHANNEL, $METRIC)
    {
    }

    /**
     * @param Imagick $Imagick
     * @param mixed|null $METRICTYPE
     * @param mixed|null $CHANNEL
     */
    public function getimagechanneldistortions($Imagick, $METRICTYPE = null, $CHANNEL = null)
    {
    }

    /**
     * @param mixed $CHANNEL
     */
    public function getimagechannelextrema($CHANNEL)
    {
    }

    /**
     * @param mixed|null $CHANNEL
     */
    public function getimagechannelkurtosis($CHANNEL = null)
    {
    }

    /**
     * @param mixed $CHANNEL
     */
    public function getimagechannelmean($CHANNEL)
    {
    }

    /**
     * @param mixed $CHANNEL
     */
    public function getimagechannelrange($CHANNEL)
    {
    }

    public function getimagechannelstatistics()
    {
    }

    public function getimageclipmask()
    {
    }

    /**
     * @param mixed $index
     */
    public function getimagecolormapcolor($index)
    {
    }

    public function getimagecolors()
    {
    }

    public function getimagecolorspace()
    {
    }

    public function getimagecompose()
    {
    }

    public function getimagecompression()
    {
    }

    public function getimagecompressionquality()
    {
    }

    public function getimagedelay()
    {
    }

    public function getimagedepth()
    {
    }

    public function getimagedispose()
    {
    }

    /**
     * @param Imagick $Imagick
     * @param mixed $METRIC
     */
    public function getimagedistortion($Imagick, $METRIC)
    {
    }

    public function getimageextrema()
    {
    }

    public function getimagefilename()
    {
    }

    public function getimageformat()
    {
    }

    public function getimagegamma()
    {
    }

    public function getimagegeometry()
    {
    }

    public function getimagegravity()
    {
    }

    public function getimagegreenprimary()
    {
    }

    public function getimageheight()
    {
    }

    public function getimagehistogram()
    {
    }

    public function getimageindex()
    {
    }

    public function getimageinterlacescheme()
    {
    }

    public function getimageinterpolatemethod()
    {
    }

    public function getimageiterations()
    {
    }

    public function getimagelength()
    {
    }

    public function getimagematte()
    {
    }

    public function getimagemattecolor()
    {
    }

    public function getimagemimetype()
    {
    }

    public function getimageorientation()
    {
    }

    public function getimagepage()
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     */
    public function getimagepixelcolor($x, $y)
    {
    }

    /**
     * @param mixed $name
     */
    public function getimageprofile($name)
    {
    }

    /**
     * @param mixed|null $pattern
     * @param mixed|null $values
     */
    public function getimageprofiles($pattern = null, $values = null)
    {
    }

    /**
     * @param mixed|null $pattern
     * @param mixed|null $values
     */
    public function getimageproperties($pattern = null, $values = null)
    {
    }

    /**
     * @param mixed $name
     */
    public function getimageproperty($name)
    {
    }

    public function getimageredprimary()
    {
    }

    /**
     * @param mixed $width
     * @param mixed $height
     * @param mixed $x
     * @param mixed $y
     */
    public function getimageregion($width, $height, $x, $y)
    {
    }

    public function getimagerenderingintent()
    {
    }

    public function getimageresolution()
    {
    }

    public function getimagesblob()
    {
    }

    public function getimagescene()
    {
    }

    public function getimagesignature()
    {
    }

    /**
     * Get the size of an image
     *
     * @return array
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.getimagesize.php
     */
    public function getimagesize(): array
    {
    }

    public function getimagetickspersecond()
    {
    }

    public function getimagetotalinkdensity()
    {
    }

    public function getimagetype()
    {
    }

    public function getimageunits()
    {
    }

    public function getimagevirtualpixelmethod()
    {
    }

    public function getimagewhitepoint()
    {
    }

    public function getimagewidth()
    {
    }

    public function getinterlacescheme()
    {
    }

    public function getiteratorindex()
    {
    }

    public function getnumberimages()
    {
    }

    /**
     * @param mixed $key
     */
    public function getoption($key)
    {
    }

    public static function getpackagename()
    {
    }

    public function getpage()
    {
    }

    public function getpixeliterator()
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     * @param mixed $columns
     * @param mixed $rows
     * @param mixed $modify
     */
    public function getpixelregioniterator($x, $y, $columns, $rows, $modify)
    {
    }

    public function getpointsize()
    {
    }

    public static function getquantum()
    {
    }

    public static function getquantumdepth()
    {
    }

    public static function getquantumrange()
    {
    }

    /**
     * @param mixed $key
     */
    public static function getregistry($key)
    {
    }

    public static function getreleasedate()
    {
    }

    /**
     * @param mixed $resource_type
     */
    public static function getresource($resource_type)
    {
    }

    /**
     * @param mixed $resource_type
     */
    public static function getresourcelimit($resource_type)
    {
    }

    public function getsamplingfactors()
    {
    }

    public function getsize()
    {
    }

    public function getsizeoffset()
    {
    }

    public static function getversion()
    {
    }

    /**
     * @param Imagick $Imagick
     * @param mixed|null $CHANNEL
     */
    public function haldclutimage($Imagick, $CHANNEL = null)
    {
    }

    public function hasnextimage()
    {
    }

    public function haspreviousimage()
    {
    }

    /**
     * @param mixed $embedText
     */
    public function identifyformat($embedText)
    {
    }

    /**
     * @param mixed|null $appendRawOutput
     */
    public function identifyimage($appendRawOutput = null)
    {
    }

    /**
     * @param mixed $radius
     */
    public function implodeimage($radius)
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     * @param mixed $width
     * @param mixed $height
     * @param mixed $map
     * @param mixed $storage
     * @param mixed $PIXEL
     */
    public function importimagepixels($x, $y, $width, $height, $map, $storage, $PIXEL)
    {
    }

    /**
     * @param mixed $complement
     * @param mixed $magnitude
     */
    public function inversefouriertransformimage($complement, $magnitude)
    {
    }

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * @param mixed $label
     */
    public function labelimage($label)
    {
    }

    /**
     * @param mixed $blackPoint
     * @param mixed $gamma
     * @param mixed $whitePoint
     * @param mixed|null $CHANNEL
     */
    public function levelimage($blackPoint, $gamma, $whitePoint, $CHANNEL = null)
    {
    }

    /**
     * @param mixed $blackPoint
     * @param mixed $whitePoint
     */
    public function linearstretchimage($blackPoint, $whitePoint)
    {
    }

    /**
     * @param mixed $columns
     * @param mixed $rows
     * @param mixed $delta_x
     * @param mixed $rigidity
     */
    public function liquidrescaleimage($columns, $rows, $delta_x, $rigidity)
    {
    }

    public static function listregistry()
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

    public function magnifyimage()
    {
    }

    /**
     * @param Imagick $Imagick
     * @param mixed $dither
     */
    public function mapimage($Imagick, $dither)
    {
    }

    /**
     * @param mixed $alpha
     * @param mixed $fuzz
     * @param mixed $color
     * @param mixed $x
     * @param mixed $y
     */
    public function mattefloodfillimage($alpha, $fuzz, $color, $x, $y)
    {
    }

    /**
     * @param mixed $radius
     */
    public function medianfilterimage($radius)
    {
    }

    /**
     * @param mixed $LAYERMETHOD
     */
    public function mergeimagelayers($LAYERMETHOD)
    {
    }

    public function minifyimage()
    {
    }

    /**
     * @param mixed $brightness
     * @param mixed $saturation
     * @param mixed $hue
     */
    public function modulateimage($brightness, $saturation, $hue)
    {
    }

    /**
     * @param ImagickDraw $ImagickDraw
     * @param mixed $tileGeometry
     * @param mixed $thumbnailGeometry
     * @param mixed $MONTAGEMODE
     * @param mixed $frame
     */
    public function montageimage($ImagickDraw, $tileGeometry, $thumbnailGeometry, $MONTAGEMODE, $frame)
    {
    }

    /**
     * @param mixed $frames
     */
    public function morphimages($frames)
    {
    }

    /**
     * @param mixed $morphologyMethod
     * @param mixed $iterations
     * @param ImagickKernel $ImagickKernel
     * @param mixed|null $CHANNEL
     */
    public function morphology($morphologyMethod, $iterations, $ImagickKernel, $CHANNEL = null)
    {
    }

    public function mosaicimages()
    {
    }

    /**
     * @param mixed $radius
     * @param mixed $sigma
     * @param mixed $angle
     * @param mixed|null $CHANNEL
     */
    public function motionblurimage($radius, $sigma, $angle, $CHANNEL = null)
    {
    }

    /**
     * @param mixed $gray
     * @param mixed|null $CHANNEL
     */
    public function negateimage($gray, $CHANNEL = null)
    {
    }

    /**
     * @param mixed $columns
     * @param mixed $rows
     * @param mixed $background_color
     * @param mixed|null $format
     */
    public function newimage($columns, $rows, $background_color, $format = null)
    {
    }

    /**
     * @param mixed $columns
     * @param mixed $rows
     * @param mixed $pseudoString
     */
    public function newpseudoimage($columns, $rows, $pseudoString)
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    public function nextimage()
    {
    }

    /**
     * @param mixed|null $CHANNEL
     */
    public function normalizeimage($CHANNEL = null)
    {
    }

    /**
     * @param mixed $radius
     */
    public function oilpaintimage($radius)
    {
    }

    /**
     * @param mixed $target
     * @param mixed $fill
     * @param mixed $fuzz
     * @param mixed $invert
     * @param mixed|null $CHANNEL
     */
    public function opaquepaintimage($target, $fill, $fuzz, $invert, $CHANNEL = null)
    {
    }

    public function optimizeimagelayers()
    {
    }

    /**
     * @param mixed $threshold_map
     * @param mixed|null $CHANNEL
     */
    public function orderedposterizeimage($threshold_map, $CHANNEL = null)
    {
    }

    /**
     * @param mixed $CHANNEL
     * @param mixed $fill
     * @param mixed $fuzz
     * @param mixed $bordercolor
     * @param mixed $x
     * @param mixed $y
     */
    public function paintfloodfillimage($CHANNEL, $fill, $fuzz, $bordercolor, $x, $y)
    {
    }

    /**
     * @param mixed $target_color
     * @param mixed $fill_color
     * @param mixed $fuzz
     * @param mixed|null $CHANNEL
     */
    public function paintopaqueimage($target_color, $fill_color, $fuzz, $CHANNEL = null)
    {
    }

    /**
     * @param mixed $target_color
     * @param mixed $alpha
     * @param mixed $fuzz
     */
    public function painttransparentimage($target_color, $alpha, $fuzz)
    {
    }

    /**
     * @param mixed $filename
     */
    public function pingimage($filename)
    {
    }

    /**
     * @param mixed $imageContents
     */
    public function pingimageblob($imageContents)
    {
    }

    /**
     * @param mixed $fp
     */
    public function pingimagefile($fp)
    {
    }

    /**
     * @param ImagickDraw $ImagickDraw
     * @param mixed $angle
     */
    public function polaroidimage($ImagickDraw, $angle)
    {
    }

    /**
     * @param mixed $levels
     * @param mixed $dither
     */
    public function posterizeimage($levels, $dither)
    {
    }

    /**
     * @param mixed $PREVIEW
     */
    public function previewimages($PREVIEW)
    {
    }

    public function previousimage()
    {
    }

    /**
     * @param mixed $name
     * @param mixed $profile
     */
    public function profileimage($name, $profile)
    {
    }

    /**
     * @param mixed $numColors
     * @param mixed $COLORSPACE
     * @param mixed $treeDepth
     * @param mixed $dither
     * @param mixed $measureError
     */
    public function quantizeimage($numColors, $COLORSPACE, $treeDepth, $dither, $measureError)
    {
    }

    /**
     * @param mixed $numColors
     * @param mixed $COLORSPACE
     * @param mixed $treeDepth
     * @param mixed $dither
     * @param mixed $measureError
     */
    public function quantizeimages($numColors, $COLORSPACE, $treeDepth, $dither, $measureError)
    {
    }

    /**
     * @param ImagickDraw $ImagickDraw
     * @param mixed $text
     * @param mixed|null $multiline
     */
    public function queryfontmetrics($ImagickDraw, $text, $multiline = null)
    {
    }

    /**
     * @param mixed $pattern
     */
    public static function queryfonts($pattern)
    {
    }

    /**
     * @param mixed $pattern
     */
    public static function queryformats($pattern)
    {
    }

    /**
     * @param mixed $angle
     * @param mixed|null $CHANNEL
     */
    public function radialblurimage($angle, $CHANNEL = null)
    {
    }

    /**
     * @param mixed $width
     * @param mixed $height
     * @param mixed $x
     * @param mixed $y
     * @param mixed $raise
     */
    public function raiseimage($width, $height, $x, $y, $raise)
    {
    }

    /**
     * @param mixed $low
     * @param mixed $high
     * @param mixed|null $CHANNELTYPE
     */
    public function randomthresholdimage($low, $high, $CHANNELTYPE = null)
    {
    }

    /**
     * @param mixed $filename
     */
    public function readimage($filename)
    {
    }

    /**
     * @param mixed $imageContents
     * @param mixed|null $filename
     */
    public function readimageblob($imageContents, $filename = null)
    {
    }

    /**
     * @param mixed $fp
     */
    public function readimagefile($fp)
    {
    }

    /**
     * @param mixed $filenames
     */
    public function readimages($filenames)
    {
    }

    /**
     * @param mixed $matrix
     */
    public function recolorimage($matrix)
    {
    }

    /**
     * @param mixed $radius
     */
    public function reducenoiseimage($radius)
    {
    }

    /**
     * @param Imagick $Imagick
     * @param mixed $DITHER
     */
    public function remapimage($Imagick, $DITHER)
    {
    }

    public function removeimage()
    {
    }

    /**
     * @param mixed $name
     */
    public function removeimageprofile($name)
    {
    }

    /**
     * @param mixed $xResolution
     * @param mixed $yResolution
     * @param mixed $FILTER
     * @param mixed $blur
     */
    public function resampleimage($xResolution, $yResolution, $FILTER, $blur)
    {
    }

    /**
     * @param mixed $page
     */
    public function resetimagepage($page)
    {
    }

    public function resetiterator()
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     * @param mixed|null $filter
     * @param mixed|null $blur
     * @param mixed|null $bestfit
     * @param mixed|null $legacy
     */
    public function resizeimage($x, $y, $filter = null, $blur = null, $bestfit = null, $legacy = null)
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     */
    public function rollimage($x, $y)
    {
    }

    /**
     * @param mixed $color
     * @param mixed $degrees
     */
    public function rotateimage($color, $degrees)
    {
    }

    /**
     * @param mixed $angle
     * @param mixed|null $CHANNEL
     */
    public function rotationalblurimage($angle, $CHANNEL = null)
    {
    }

    /**
     * @param mixed $xRounding
     * @param mixed $yRounding
     * @param mixed|null $strokeWidth
     * @param mixed|null $displace
     * @param mixed|null $sizeCorrection
     */
    public function roundcorners($xRounding, $yRounding, $strokeWidth = null, $displace = null, $sizeCorrection = null)
    {
    }

    /**
     * @param mixed $xRounding
     * @param mixed $yRounding
     * @param mixed|null $strokeWidth
     * @param mixed|null $displace
     * @param mixed|null $sizeCorrection
     */
    public function roundcornersimage($xRounding, $yRounding, $strokeWidth = null, $displace = null, $sizeCorrection = null)
    {
    }

    /**
     * @param mixed $columns
     * @param mixed $rows
     */
    public function sampleimage($columns, $rows)
    {
    }

    /**
     * @param mixed $width
     * @param mixed $height
     * @param mixed|null $bestfit
     * @param mixed|null $legacy
     */
    public function scaleimage($width, $height, $bestfit = null, $legacy = null)
    {
    }

    /**
     * @param mixed $COLORSPACE
     * @param mixed $cluster_threshold
     * @param mixed $smooth_threshold
     * @param mixed|null $verbose
     */
    public function segmentimage($COLORSPACE, $cluster_threshold, $smooth_threshold, $verbose = null)
    {
    }

    /**
     * @param mixed $radius
     * @param mixed $sigma
     * @param mixed $threshold
     * @param mixed $CHANNEL
     */
    public function selectiveblurimage($radius, $sigma, $threshold, $CHANNEL)
    {
    }

    /**
     * @param mixed $CHANNEL
     */
    public function separateimagechannel($CHANNEL)
    {
    }

    /**
     * @param mixed $threshold
     */
    public function sepiatoneimage($threshold)
    {
    }

    /**
     * @param mixed $antialias
     */
    public function setantialias($antialias)
    {
    }

    /**
     * @param mixed $color
     */
    public function setbackgroundcolor($color)
    {
    }

    /**
     * @param mixed $COLORSPACE
     */
    public function setcolorspace($COLORSPACE)
    {
    }

    /**
     * @param mixed $compression
     */
    public function setcompression($compression)
    {
    }

    /**
     * @param mixed $compressionquality
     */
    public function setcompressionquality($compressionquality)
    {
    }

    /**
     * @param mixed $filename
     */
    public function setfilename($filename)
    {
    }

    public function setfirstiterator()
    {
    }

    /**
     * @param mixed $font
     */
    public function setfont($font)
    {
    }

    /**
     * @param mixed $format
     */
    public function setformat($format)
    {
    }

    /**
     * @param mixed $GRAVITY
     */
    public function setgravity($GRAVITY)
    {
    }

    /**
     * @param Imagick $Imagick
     */
    public function setimage($Imagick)
    {
    }

    /**
     * @param mixed $ALPHACHANNELTYPE
     */
    public function setimagealphachannel($ALPHACHANNELTYPE)
    {
    }

    /**
     * @param mixed $artifact
     * @param mixed $value
     */
    public function setimageartifact($artifact, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function setimageattribute($key, $value)
    {
    }

    /**
     * @param mixed $color
     */
    public function setimagebackgroundcolor($color)
    {
    }

    /**
     * @param mixed $bias
     */
    public function setimagebias($bias)
    {
    }

    /**
     * @param mixed $bias
     */
    public function setimagebiasquantum($bias)
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     */
    public function setimageblueprimary($x, $y)
    {
    }

    /**
     * @param mixed $color
     */
    public function setimagebordercolor($color)
    {
    }

    /**
     * @param mixed $CHANNEL
     * @param mixed $depth
     */
    public function setimagechanneldepth($CHANNEL, $depth)
    {
    }

    /**
     * @param Imagick $Imagick
     */
    public function setimageclipmask($Imagick)
    {
    }

    /**
     * @param mixed $index
     * @param mixed $color
     */
    public function setimagecolormapcolor($index, $color)
    {
    }

    /**
     * @param mixed $COLORSPACE
     */
    public function setimagecolorspace($COLORSPACE)
    {
    }

    /**
     * @param mixed $COMPOSITE
     */
    public function setimagecompose($COMPOSITE)
    {
    }

    /**
     * @param mixed $COMPRESSION
     */
    public function setimagecompression($COMPRESSION)
    {
    }

    /**
     * @param mixed $quality
     */
    public function setimagecompressionquality($quality)
    {
    }

    /**
     * @param mixed $delay
     */
    public function setimagedelay($delay)
    {
    }

    /**
     * @param mixed $depth
     */
    public function setimagedepth($depth)
    {
    }

    /**
     * @param mixed $DISPOSETYPE
     */
    public function setimagedispose($DISPOSETYPE)
    {
    }

    /**
     * @param mixed $columns
     * @param mixed $rows
     */
    public function setimageextent($columns, $rows)
    {
    }

    /**
     * @param mixed $filename
     */
    public function setimagefilename($filename)
    {
    }

    /**
     * @param mixed $imageFormat
     */
    public function setimageformat($imageFormat)
    {
    }

    /**
     * @param mixed $gamma
     */
    public function setimagegamma($gamma)
    {
    }

    /**
     * @param mixed $GRAVITY
     */
    public function setimagegravity($GRAVITY)
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     */
    public function setimagegreenprimary($x, $y)
    {
    }

    /**
     * @param mixed $index
     */
    public function setimageindex($index)
    {
    }

    /**
     * @param mixed $INTERLACE
     */
    public function setimageinterlacescheme($INTERLACE)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $INTERPOLATE
     */
    public function setimageinterpolatemethod($INTERPOLATE)
    {
    }

    /**
     * @param mixed $iterations
     */
    public function setimageiterations($iterations)
    {
    }

    /**
     * @param mixed $enable
     */
    public function setimagematte($enable)
    {
    }

    /**
     * @param mixed $color
     */
    public function setimagemattecolor($color)
    {
    }

    /**
     * @param mixed $opacity
     */
    public function setimageopacity($opacity)
    {
    }

    /**
     * @param mixed $ORIENTATION
     */
    public function setimageorientation($ORIENTATION)
    {
    }

    /**
     * @param mixed $width
     * @param mixed $height
     * @param mixed $x
     * @param mixed $y
     */
    public function setimagepage($width, $height, $x, $y)
    {
    }

    /**
     * @param mixed $name
     * @param mixed $profile
     */
    public function setimageprofile($name, $profile)
    {
    }

    /**
     * @param mixed $filename
     */
    public function setimageprogressmonitor($filename)
    {
    }

    /**
     * @param mixed $name
     * @param mixed $value
     */
    public function setimageproperty($name, $value)
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     */
    public function setimageredprimary($x, $y)
    {
    }

    /**
     * @param mixed $RENDERINGINTENT
     */
    public function setimagerenderingintent($RENDERINGINTENT)
    {
    }

    /**
     * @param mixed $xResolution
     * @param mixed $yResolution
     */
    public function setimageresolution($xResolution, $yResolution)
    {
    }

    /**
     * @param mixed $scene
     */
    public function setimagescene($scene)
    {
    }

    /**
     * @param mixed $ticksPerSecond
     */
    public function setimagetickspersecond($ticksPerSecond)
    {
    }

    /**
     * @param mixed $IMGTYPE
     */
    public function setimagetype($IMGTYPE)
    {
    }

    /**
     * @param mixed $RESOLUTION
     */
    public function setimageunits($RESOLUTION)
    {
    }

    /**
     * @param mixed $VIRTUALPIXELMETHOD
     */
    public function setimagevirtualpixelmethod($VIRTUALPIXELMETHOD)
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     */
    public function setimagewhitepoint($x, $y)
    {
    }

    /**
     * @param mixed $INTERLACE
     */
    public function setinterlacescheme($INTERLACE)
    {
    }

    /**
     * @param mixed $index
     */
    public function setiteratorindex($index)
    {
    }

    public function setlastiterator()
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function setoption($key, $value)
    {
    }

    /**
     * @param mixed $width
     * @param mixed $height
     * @param mixed $x
     * @param mixed $y
     */
    public function setpage($width, $height, $x, $y)
    {
    }

    /**
     * @param mixed $pointsize
     */
    public function setpointsize($pointsize)
    {
    }

    /**
     * @param mixed $callback
     */
    public function setprogressmonitor($callback)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public static function setregistry($key, $value)
    {
    }

    /**
     * @param mixed $xResolution
     * @param mixed $yResolution
     */
    public function setresolution($xResolution, $yResolution)
    {
    }

    /**
     * @param mixed $RESOURCETYPE
     * @param mixed $limit
     */
    public static function setresourcelimit($RESOURCETYPE, $limit)
    {
    }

    /**
     * @param mixed $factors
     */
    public function setsamplingfactors($factors)
    {
    }

    /**
     * @param mixed $columns
     * @param mixed $rows
     */
    public function setsize($columns, $rows)
    {
    }

    /**
     * @param mixed $columns
     * @param mixed $rows
     * @param mixed $offset
     */
    public function setsizeoffset($columns, $rows, $offset)
    {
    }

    /**
     * Set the type of a variable
     *
     * @param mixed $IMGTYPE
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.settype.php
     */
    public function settype($IMGTYPE): bool
    {
    }

    /**
     * @param mixed $gray
     * @param mixed $azimuth
     * @param mixed $elevation
     */
    public function shadeimage($gray, $azimuth, $elevation)
    {
    }

    /**
     * @param mixed $opacity
     * @param mixed $sigma
     * @param mixed $x
     * @param mixed $y
     */
    public function shadowimage($opacity, $sigma, $x, $y)
    {
    }

    /**
     * @param mixed $radius
     * @param mixed $sigma
     * @param mixed|null $CHANNEL
     */
    public function sharpenimage($radius, $sigma, $CHANNEL = null)
    {
    }

    /**
     * @param mixed $columns
     * @param mixed $rows
     */
    public function shaveimage($columns, $rows)
    {
    }

    /**
     * @param mixed $color
     * @param mixed $xShear
     * @param mixed $yShear
     */
    public function shearimage($color, $xShear, $yShear)
    {
    }

    /**
     * @param mixed $sharpen
     * @param mixed $contrast
     * @param mixed $midpoint
     * @param mixed|null $CHANNEL
     */
    public function sigmoidalcontrastimage($sharpen, $contrast, $midpoint, $CHANNEL = null)
    {
    }

    /**
     * @param Imagick $Imagick
     * @param mixed|null $offset
     * @param mixed|null $similarity
     * @param mixed|null $similarity_threshold
     * @param mixed|null $metric
     */
    public function similarityimage($Imagick, &$offset = null, &$similarity = null, &$similarity_threshold = null, &$metric = null)
    {
    }

    /**
     * @param mixed $radius
     * @param mixed $sigma
     * @param mixed $angle
     */
    public function sketchimage($radius, $sigma, $angle)
    {
    }

    /**
     * @param mixed $stack
     * @param mixed $offset
     */
    public function smushimages($stack, $offset)
    {
    }

    /**
     * @param mixed $threshold
     */
    public function solarizeimage($threshold)
    {
    }

    /**
     * @param mixed $SPARSE_METHOD
     * @param mixed $arguments
     * @param mixed|null $CHANNEL
     */
    public function sparsecolorimage($SPARSE_METHOD, $arguments, $CHANNEL = null)
    {
    }

    /**
     * @param mixed $width
     * @param mixed $height
     * @param mixed $x
     * @param mixed $y
     */
    public function spliceimage($width, $height, $x, $y)
    {
    }

    /**
     * @param mixed $radius
     */
    public function spreadimage($radius)
    {
    }

    /**
     * @param mixed $type
     * @param mixed $width
     * @param mixed $height
     * @param mixed|null $CHANNEL
     */
    public function statisticimage($type, $width, $height, $CHANNEL = null)
    {
    }

    /**
     * @param Imagick $Imagick
     * @param mixed $offset
     */
    public function steganoimage($Imagick, $offset)
    {
    }

    /**
     * @param Imagick $Imagick
     */
    public function stereoimage($Imagick)
    {
    }

    public function stripimage()
    {
    }

    /**
     * @param Imagick $Imagick
     * @param mixed|null $offset
     * @param mixed|null $similarity
     * @param mixed|null $similarity_threshold
     * @param mixed|null $metric
     */
    public function subimagematch($Imagick, &$offset = null, &$similarity = null, &$similarity_threshold = null, &$metric = null)
    {
    }

    /**
     * @param mixed $degrees
     */
    public function swirlimage($degrees)
    {
    }

    /**
     * @param Imagick $Imagick
     */
    public function textureimage($Imagick)
    {
    }

    /**
     * @param mixed $threshold
     * @param mixed|null $CHANNELTYPE
     */
    public function thresholdimage($threshold, $CHANNELTYPE = null)
    {
    }

    /**
     * @param mixed $width
     * @param mixed $height
     * @param mixed|null $bestfit
     * @param mixed|null $fill
     * @param mixed|null $legacy
     */
    public function thumbnailimage($width, $height, $bestfit = null, $fill = null, $legacy = null)
    {
    }

    /**
     * @param mixed $tint_color
     * @param mixed $opacity
     * @param mixed|null $legacy
     */
    public function tintimage($tint_color, $opacity, $legacy = null)
    {
    }

    /**
     * @param mixed $crop
     * @param mixed $geometry
     */
    public function transformimage($crop, $geometry)
    {
    }

    /**
     * @param mixed $COLORSPACE
     */
    public function transformimagecolorspace($COLORSPACE)
    {
    }

    /**
     * @param mixed $target
     * @param mixed $alpha
     * @param mixed $fuzz
     * @param mixed $invert
     */
    public function transparentpaintimage($target, $alpha, $fuzz, $invert)
    {
    }

    public function transposeimage()
    {
    }

    public function transverseimage()
    {
    }

    /**
     * @param mixed $fuzz
     */
    public function trimimage($fuzz)
    {
    }

    public function uniqueimagecolors()
    {
    }

    /**
     * @param mixed $radius
     * @param mixed $sigma
     * @param mixed $amount
     * @param mixed $threshold
     * @param mixed|null $CHANNEL
     */
    public function unsharpmaskimage($radius, $sigma, $amount, $threshold, $CHANNEL = null)
    {
    }

    public function valid()
    {
    }

    /**
     * @param mixed $blackPoint
     * @param mixed $whitePoint
     * @param mixed $x
     * @param mixed $y
     */
    public function vignetteimage($blackPoint, $whitePoint, $x, $y)
    {
    }

    /**
     * @param mixed $amplitude
     * @param mixed $waveLenght
     */
    public function waveimage($amplitude, $waveLenght)
    {
    }

    /**
     * @param mixed $color
     */
    public function whitethresholdimage($color)
    {
    }

    /**
     * @param mixed|null $filename
     */
    public function writeimage($filename = null)
    {
    }

    /**
     * @param mixed $handle
     * @param mixed|null $format
     */
    public function writeimagefile($handle, $format = null)
    {
    }

    /**
     * @param mixed $filename
     * @param mixed $adjoin
     */
    public function writeimages($filename, $adjoin)
    {
    }

    /**
     * @param mixed $handle
     * @param mixed|null $format
     */
    public function writeimagesfile($handle, $format = null)
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
    public function __construct()
    {
    }

    /**
     * @param mixed $affineMatrix
     */
    public function affine($affineMatrix)
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     * @param mixed $text
     */
    public function annotation($x, $y, $text)
    {
    }

    /**
     * @param mixed $sx
     * @param mixed $sy
     * @param mixed $ex
     * @param mixed $ey
     * @param mixed $sd
     * @param mixed $ed
     */
    public function arc($sx, $sy, $ex, $ey, $sd, $ed)
    {
    }

    /**
     * @param mixed $coordinateArray
     */
    public function bezier($coordinateArray)
    {
    }

    /**
     * @param mixed $ox
     * @param mixed $oy
     * @param mixed $px
     * @param mixed $py
     */
    public function circle($ox, $oy, $px, $py)
    {
    }

    public function clear()
    {
    }

    public function clone()
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     * @param mixed $PAINTMETHOD
     */
    public function color($x, $y, $PAINTMETHOD)
    {
    }

    /**
     * @param mixed $comment
     */
    public function comment($comment)
    {
    }

    /**
     * @param mixed $COMPOSE
     * @param mixed $x
     * @param mixed $y
     * @param mixed $width
     * @param mixed $height
     * @param Imagick $Imagick
     */
    public function composite($COMPOSE, $x, $y, $width, $height, $Imagick)
    {
    }

    public function destroy()
    {
    }

    /**
     * @param mixed $ox
     * @param mixed $oy
     * @param mixed $px
     * @param mixed $py
     * @param mixed $start
     * @param mixed $end
     */
    public function ellipse($ox, $oy, $px, $py, $start, $end)
    {
    }

    public function getbordercolor()
    {
    }

    public function getclippath()
    {
    }

    public function getcliprule()
    {
    }

    public function getclipunits()
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     */
    public function getdensity()
    {
    }

    public function getfillcolor()
    {
    }

    public function getfillopacity()
    {
    }

    public function getfillrule()
    {
    }

    public function getfont()
    {
    }

    public function getfontfamily()
    {
    }

    public function getfontresolution()
    {
    }

    public function getfontsize()
    {
    }

    public function getfontstretch()
    {
    }

    public function getfontstyle()
    {
    }

    public function getfontweight()
    {
    }

    public function getgravity()
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     */
    public function getopacity()
    {
    }

    public function getstrokeantialias()
    {
    }

    public function getstrokecolor()
    {
    }

    public function getstrokedasharray()
    {
    }

    public function getstrokedashoffset()
    {
    }

    public function getstrokelinecap()
    {
    }

    public function getstrokelinejoin()
    {
    }

    public function getstrokemiterlimit()
    {
    }

    public function getstrokeopacity()
    {
    }

    public function getstrokewidth()
    {
    }

    public function gettextalignment()
    {
    }

    public function gettextantialias()
    {
    }

    public function gettextdecoration()
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     */
    public function gettextdirection()
    {
    }

    public function gettextencoding()
    {
    }

    public function gettextinterlinespacing()
    {
    }

    public function gettextinterwordspacing()
    {
    }

    public function gettextkerning()
    {
    }

    public function gettextundercolor()
    {
    }

    public function getvectorgraphics()
    {
    }

    /**
     * @param mixed $sx
     * @param mixed $sy
     * @param mixed $ex
     * @param mixed $ey
     */
    public function line($sx, $sy, $ex, $ey)
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     * @param mixed $METHOD
     */
    public function matte($x, $y, $METHOD)
    {
    }

    public function pathclose()
    {
    }

    /**
     * @param mixed $x1
     * @param mixed $y1
     * @param mixed $x2
     * @param mixed $y2
     * @param mixed $x
     * @param mixed $y
     */
    public function pathcurvetoabsolute($x1, $y1, $x2, $y2, $x, $y)
    {
    }

    /**
     * @param mixed $x1
     * @param mixed $y1
     * @param mixed $x
     * @param mixed $y
     */
    public function pathcurvetoquadraticbezierabsolute($x1, $y1, $x, $y)
    {
    }

    /**
     * @param mixed $x1
     * @param mixed $y1
     * @param mixed $x
     * @param mixed $y
     */
    public function pathcurvetoquadraticbezierrelative($x1, $y1, $x, $y)
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     */
    public function pathcurvetoquadraticbeziersmoothabsolute($x, $y)
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     */
    public function pathcurvetoquadraticbeziersmoothrelative($x, $y)
    {
    }

    /**
     * @param mixed $x1
     * @param mixed $y1
     * @param mixed $x2
     * @param mixed $y2
     * @param mixed $x
     * @param mixed $y
     */
    public function pathcurvetorelative($x1, $y1, $x2, $y2, $x, $y)
    {
    }

    /**
     * @param mixed $x1
     * @param mixed $y1
     * @param mixed $x
     * @param mixed $y
     */
    public function pathcurvetosmoothabsolute($x1, $y1, $x, $y)
    {
    }

    /**
     * @param mixed $x1
     * @param mixed $y1
     * @param mixed $x
     * @param mixed $y
     */
    public function pathcurvetosmoothrelative($x1, $y1, $x, $y)
    {
    }

    /**
     * @param mixed $rx
     * @param mixed $ry
     * @param mixed $xAxisRotation
     * @param mixed $largeArc
     * @param mixed $sweep
     * @param mixed $x
     * @param mixed $y
     */
    public function pathellipticarcabsolute($rx, $ry, $xAxisRotation, $largeArc, $sweep, $x, $y)
    {
    }

    /**
     * @param mixed $rx
     * @param mixed $ry
     * @param mixed $xAxisRotation
     * @param mixed $largeArc
     * @param mixed $sweep
     * @param mixed $x
     * @param mixed $y
     */
    public function pathellipticarcrelative($rx, $ry, $xAxisRotation, $largeArc, $sweep, $x, $y)
    {
    }

    public function pathfinish()
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     */
    public function pathlinetoabsolute($x, $y)
    {
    }

    /**
     * @param mixed $y
     */
    public function pathlinetohorizontalabsolute($y)
    {
    }

    /**
     * @param mixed $x
     */
    public function pathlinetohorizontalrelative($x)
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     */
    public function pathlinetorelative($x, $y)
    {
    }

    /**
     * @param mixed $y
     */
    public function pathlinetoverticalabsolute($y)
    {
    }

    /**
     * @param mixed $x
     */
    public function pathlinetoverticalrelative($x)
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     */
    public function pathmovetoabsolute($x, $y)
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     */
    public function pathmovetorelative($x, $y)
    {
    }

    public function pathstart()
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     */
    public function point($x, $y)
    {
    }

    /**
     * @param mixed $coordinates
     */
    public function polygon($coordinates)
    {
    }

    /**
     * @param mixed $coordinateArray
     */
    public function polyline($coordinateArray)
    {
    }

    public function pop()
    {
    }

    public function popclippath()
    {
    }

    public function popdefs()
    {
    }

    public function poppattern()
    {
    }

    public function push()
    {
    }

    /**
     * @param mixed $clipMask
     */
    public function pushclippath($clipMask)
    {
    }

    public function pushdefs()
    {
    }

    /**
     * @param mixed $pattern_id
     * @param mixed $x
     * @param mixed $y
     * @param mixed $width
     * @param mixed $height
     */
    public function pushpattern($pattern_id, $x, $y, $width, $height)
    {
    }

    /**
     * @param mixed $x1
     * @param mixed $y1
     * @param mixed $x2
     * @param mixed $y2
     */
    public function rectangle($x1, $y1, $x2, $y2)
    {
    }

    public function render()
    {
    }

    public function resetvectorgraphics()
    {
    }

    /**
     * @param mixed $degrees
     */
    public function rotate($degrees)
    {
    }

    /**
     * @param mixed $x1
     * @param mixed $y1
     * @param mixed $x2
     * @param mixed $y2
     * @param mixed $rx
     * @param mixed $ry
     */
    public function roundrectangle($x1, $y1, $x2, $y2, $rx, $ry)
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     */
    public function scale($x, $y)
    {
    }

    /**
     * @param mixed $bordercolor
     */
    public function setbordercolor($bordercolor)
    {
    }

    /**
     * @param mixed $clipMask
     */
    public function setclippath($clipMask)
    {
    }

    /**
     * @param mixed $FILLRULE
     */
    public function setcliprule($FILLRULE)
    {
    }

    /**
     * @param mixed $PATHUNITS
     */
    public function setclipunits($PATHUNITS)
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
     * @param mixed $alpha
     */
    public function setfillalpha($alpha)
    {
    }

    /**
     * @param mixed $color
     */
    public function setfillcolor($color)
    {
    }

    /**
     * @param mixed $fillOpacity
     */
    public function setfillopacity($fillOpacity)
    {
    }

    /**
     * @param mixed $url
     */
    public function setfillpatternurl($url)
    {
    }

    /**
     * @param mixed $FILLRULE
     */
    public function setfillrule($FILLRULE)
    {
    }

    /**
     * @param mixed $font
     */
    public function setfont($font)
    {
    }

    /**
     * @param mixed $fontfamily
     */
    public function setfontfamily($fontfamily)
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
     * @param mixed $pointsize
     */
    public function setfontsize($pointsize)
    {
    }

    /**
     * @param mixed $STRETCH
     */
    public function setfontstretch($STRETCH)
    {
    }

    /**
     * @param mixed $STYLE
     */
    public function setfontstyle($STYLE)
    {
    }

    /**
     * @param mixed $weight
     */
    public function setfontweight($weight)
    {
    }

    /**
     * @param mixed $GRAVITY
     */
    public function setgravity($GRAVITY)
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
     * @param mixed $x_resolution
     * @param mixed $y_resolution
     */
    public function setresolution($x_resolution, $y_resolution)
    {
    }

    /**
     * @param mixed $alpha
     */
    public function setstrokealpha($alpha)
    {
    }

    /**
     * @param mixed $antialias
     */
    public function setstrokeantialias($antialias)
    {
    }

    /**
     * @param mixed $color
     */
    public function setstrokecolor($color)
    {
    }

    /**
     * @param mixed $dashArray
     */
    public function setstrokedasharray($dashArray)
    {
    }

    /**
     * @param mixed $offset
     */
    public function setstrokedashoffset($offset)
    {
    }

    /**
     * @param mixed $LINECAP
     */
    public function setstrokelinecap($LINECAP)
    {
    }

    /**
     * @param mixed $LINEJOIN
     */
    public function setstrokelinejoin($LINEJOIN)
    {
    }

    /**
     * @param mixed $miterLimit
     */
    public function setstrokemiterlimit($miterLimit)
    {
    }

    /**
     * @param mixed $strokeOpacity
     */
    public function setstrokeopacity($strokeOpacity)
    {
    }

    /**
     * @param mixed $url
     */
    public function setstrokepatternurl($url)
    {
    }

    /**
     * @param mixed $width
     */
    public function setstrokewidth($width)
    {
    }

    /**
     * @param mixed $ALIGN
     */
    public function settextalignment($ALIGN)
    {
    }

    /**
     * @param mixed $antialias
     */
    public function settextantialias($antialias)
    {
    }

    /**
     * @param mixed $DECORATION
     */
    public function settextdecoration($DECORATION)
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
     * @param mixed $encoding
     */
    public function settextencoding($encoding)
    {
    }

    /**
     * @param mixed $spacing
     */
    public function settextinterlinespacing($spacing)
    {
    }

    /**
     * @param mixed $spacing
     */
    public function settextinterwordspacing($spacing)
    {
    }

    /**
     * @param mixed $kerning
     */
    public function settextkerning($kerning)
    {
    }

    /**
     * @param mixed $color
     */
    public function settextundercolor($color)
    {
    }

    /**
     * @param mixed $xml
     */
    public function setvectorgraphics($xml)
    {
    }

    /**
     * @param mixed $sx
     * @param mixed $sy
     * @param mixed $ex
     * @param mixed $ey
     */
    public function setviewbox($sx, $sy, $ex, $ey)
    {
    }

    /**
     * @param mixed $degrees
     */
    public function skewx($degrees)
    {
    }

    /**
     * @param mixed $degrees
     */
    public function skewy($degrees)
    {
    }

    /**
     * @param mixed $x
     * @param mixed $y
     */
    public function translate($x, $y)
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
     * @param ImagickKernel $ImagickKernel
     */
    public function addkernel($ImagickKernel)
    {
    }

    public function addunitykernel()
    {
    }

    /**
     * @param mixed $kerneltype
     * @param mixed $paramstring
     */
    public static function frombuiltin($kerneltype, $paramstring)
    {
    }

    /**
     * @param mixed $array
     * @param mixed|null $array
     */
    public static function frommatrix($array, $array = null)
    {
    }

    public function getmatrix()
    {
    }

    public function scale()
    {
    }

    public function separate()
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
     * @param mixed|null $color
     */
    public function __construct($color = null)
    {
    }

    public function clear()
    {
    }

    public function clone()
    {
    }

    public function destroy()
    {
    }

    /**
     * @param mixed|null $normalized
     */
    public function getcolor($normalized = null)
    {
    }

    public function getcolorasstring()
    {
    }

    public function getcolorcount()
    {
    }

    public function getcolorquantum()
    {
    }

    /**
     * @param mixed $color
     */
    public function getcolorvalue($color)
    {
    }

    /**
     * @param mixed $color
     */
    public function getcolorvaluequantum($color)
    {
    }

    public function gethsl()
    {
    }

    public function getindex()
    {
    }

    /**
     * @param mixed $color
     * @param mixed|null $fuzz
     */
    public function ispixelsimilar($color, $fuzz = null)
    {
    }

    /**
     * @param mixed $color
     * @param mixed|null $fuzz
     */
    public function ispixelsimilarquantum($color, $fuzz = null)
    {
    }

    /**
     * @param mixed $color
     * @param mixed|null $fuzz
     */
    public function issimilar($color, $fuzz = null)
    {
    }

    /**
     * @param mixed $color
     */
    public function setcolor($color)
    {
    }

    /**
     * @param mixed $colorCount
     */
    public function setcolorcount($colorCount)
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * @param ImagickPixel $srcPixel
     */
    public function setcolorfrompixel($srcPixel)
    {
    }

    /**
     * @param mixed $color
     * @param mixed $value
     */
    public function setcolorvalue($color, $value)
    {
    }

    /**
     * @param mixed $color_value
     */
    public function setcolorvaluequantum($color_value)
    {
    }

    /**
     * @param mixed $hue
     * @param mixed $saturation
     * @param mixed $luminosity
     */
    public function sethsl($hue, $saturation, $luminosity)
    {
    }

    /**
     * @param mixed $index
     */
    public function setindex($index)
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
     * @param Imagick $Imagick
     */
    public function __construct($Imagick)
    {
    }

    public function clear()
    {
    }

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    public function destroy()
    {
    }

    public function getcurrentiteratorrow()
    {
    }

    public function getiteratorrow()
    {
    }

    public function getnextiteratorrow()
    {
    }

    /**
     * @param Imagick $Imagick
     */
    public static function getpixeliterator($Imagick)
    {
    }

    /**
     * @param Imagick $Imagick
     * @param mixed $x
     * @param mixed $y
     * @param mixed $columns
     * @param mixed $rows
     */
    public static function getpixelregioniterator($Imagick, $x, $y, $columns, $rows)
    {
    }

    public function getpreviousiteratorrow()
    {
    }

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    public function newpixeliterator()
    {
    }

    public function newpixelregioniterator()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    public function resetiterator()
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    public function setiteratorfirstrow()
    {
    }

    public function setiteratorlastrow()
    {
    }

    /**
     * @param mixed $row
     */
    public function setiteratorrow($row)
    {
    }

    public function synciterator()
    {
    }

    public function valid()
    {
    }
}

class ImagickPixelIteratorException extends Exception
{
}
