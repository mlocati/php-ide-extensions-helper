<?php
// Start of extension: imagick
// - parsed on POSIX with PHP 7.0.28 (extension version 3.4.3)
// - parsed on Windows with PHP 7.0.28 (extension version 3.4.3)

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
     * mixed|null $files
     */
    public function __construct($files = null)
    {
    }

    public function __tostring()
    {
    }

    /**
     * mixed $radius
     * mixed $sigma
     * mixed|null $CHANNEL
     */
    public function adaptiveblurimage($radius, $sigma, $CHANNEL = null)
    {
    }

    /**
     * mixed $columns
     * mixed $rows
     * mixed|null $bestfit
     * mixed|null $legacy
     */
    public function adaptiveresizeimage($columns, $rows, $bestfit = null, $legacy = null)
    {
    }

    /**
     * mixed $radius
     * mixed $sigma
     * mixed|null $CHANNEL
     */
    public function adaptivesharpenimage($radius, $sigma, $CHANNEL = null)
    {
    }

    /**
     * mixed $width
     * mixed $height
     * mixed $offset
     */
    public function adaptivethresholdimage($width, $height, $offset)
    {
    }

    /**
     * Imagick $Imagick
     */
    public function addimage($Imagick)
    {
    }

    /**
     * mixed $NOISE
     * mixed|null $CHANNEL
     */
    public function addnoiseimage($NOISE, $CHANNEL = null)
    {
    }

    /**
     * ImagickDraw $ImagickDraw
     */
    public function affinetransformimage($ImagickDraw)
    {
    }

    /**
     * mixed $server_name
     */
    public function animateimages($server_name)
    {
    }

    /**
     * ImagickDraw $ImagickDraw
     * mixed $x
     * mixed $y
     * mixed $angle
     * mixed $text
     */
    public function annotateimage($ImagickDraw, $x, $y, $angle, $text)
    {
    }

    /**
     * mixed $stack
     */
    public function appendimages($stack)
    {
    }

    /**
     * mixed $CHANNEL
     */
    public function autogammaimage($CHANNEL)
    {
    }

    /**
     * mixed|null $CHANNEL
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
     * mixed $color
     */
    public function blackthresholdimage($color)
    {
    }

    /**
     * mixed|null $factor
     */
    public function blueshiftimage($factor = null)
    {
    }

    /**
     * mixed $radius
     * mixed $sigma
     * mixed|null $CHANNELTYPE
     */
    public function blurimage($radius, $sigma, $CHANNELTYPE = null)
    {
    }

    /**
     * mixed $color
     * mixed $width
     * mixed $height
     */
    public function borderimage($color, $width, $height)
    {
    }

    /**
     * mixed $brightness
     * mixed $contrast
     * mixed|null $CHANNEL
     */
    public function brightnesscontrastimage($brightness, $contrast, $CHANNEL = null)
    {
    }

    /**
     * mixed $orig_width
     * mixed $orig_height
     * mixed $desired_width
     * mixed $desired_height
     * mixed|null $legacy
     */
    public static function calculatecrop($orig_width, $orig_height, $desired_width, $desired_height, $legacy = null)
    {
    }

    /**
     * mixed $radius
     * mixed $sigma
     */
    public function charcoalimage($radius, $sigma)
    {
    }

    /**
     * mixed $width
     * mixed $height
     * mixed $x
     * mixed $y
     */
    public function chopimage($width, $height, $x, $y)
    {
    }

    /**
     * mixed|null $CHANNEL
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
     * mixed $pathname
     * mixed $inside
     */
    public function clipimagepath($pathname, $inside)
    {
    }

    /**
     * mixed $pathname
     * mixed $inside
     */
    public function clippathimage($pathname, $inside)
    {
    }

    public function clone()
    {
    }

    /**
     * Imagick $Imagick
     * mixed|null $CHANNELTYPE
     */
    public function clutimage($Imagick, $CHANNELTYPE = null)
    {
    }

    public function coalesceimages()
    {
    }

    /**
     * mixed $antialias
     */
    public function colordecisionlistimage($antialias)
    {
    }

    /**
     * mixed $fill_color
     * mixed $fuzz
     * mixed $border_color
     * mixed $y
     * mixed $x
     */
    public function colorfloodfillimage($fill_color, $fuzz, $border_color, $y, $x)
    {
    }

    /**
     * mixed $colorize_color
     * mixed $opacity
     * mixed|null $legacy
     */
    public function colorizeimage($colorize_color, $opacity, $legacy = null)
    {
    }

    /**
     * mixed $color_matrix
     */
    public function colormatriximage($color_matrix)
    {
    }

    public function combineimages()
    {
    }

    /**
     * mixed $comment
     */
    public function commentimage($comment)
    {
    }

    /**
     * Imagick $Imagick
     * mixed $CHANNEL
     * mixed $METRIC
     */
    public function compareimagechannels($Imagick, $CHANNEL, $METRIC)
    {
    }

    /**
     * mixed $LAYER
     */
    public function compareimagelayers($LAYER)
    {
    }

    /**
     * Imagick $Imagick
     * mixed $METRIC
     */
    public function compareimages($Imagick, $METRIC)
    {
    }

    /**
     * Imagick $Imagick
     * mixed $COMPOSITE
     * mixed $x
     * mixed $y
     * mixed|null $CHANNELTYPE
     */
    public function compositeimage($Imagick, $COMPOSITE, $x, $y, $CHANNELTYPE = null)
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * Imagick $Imagick
     * mixed $COMPOSITE
     * mixed $GRAVITY
     */
    public function compositeimagegravity($Imagick, $COMPOSITE, $GRAVITY)
    {
    }

    /**
     * mixed $sharpen
     */
    public function contrastimage($sharpen)
    {
    }

    /**
     * mixed $blackPoint
     * mixed $whitePoint
     * mixed|null $CHANNEL
     */
    public function contraststretchimage($blackPoint, $whitePoint, $CHANNEL = null)
    {
    }

    /**
     * mixed $kernel
     * mixed|null $CHANNEL
     */
    public function convolveimage($kernel, $CHANNEL = null)
    {
    }

    /**
     * Count all elements in an array, or something in an object
     *
     * mixed|null $mode
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
     * mixed $width
     * mixed $height
     * mixed $x
     * mixed $y
     */
    public function cropimage($width, $height, $x, $y)
    {
    }

    /**
     * mixed $width
     * mixed $height
     * mixed|null $legacy
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
     * mixed $displace
     */
    public function cyclecolormapimage($displace)
    {
    }

    /**
     * mixed $passphrase
     */
    public function decipherimage($passphrase)
    {
    }

    public function deconstructimages()
    {
    }

    /**
     * mixed $artifact
     */
    public function deleteimageartifact($artifact)
    {
    }

    /**
     * mixed $name
     */
    public function deleteimageproperty($name)
    {
    }

    /**
     * mixed $threshold
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
     * mixed $serverName
     */
    public function displayimage($serverName)
    {
    }

    /**
     * mixed $serverName
     */
    public function displayimages($serverName)
    {
    }

    /**
     * mixed $method
     * mixed $arguments
     * mixed $bestfit
     */
    public function distortimage($method, $arguments, $bestfit)
    {
    }

    /**
     * ImagickDraw $ImagickDraw
     */
    public function drawimage($ImagickDraw)
    {
    }

    /**
     * mixed $radius
     */
    public function edgeimage($radius)
    {
    }

    /**
     * mixed $radius
     * mixed $sigma
     */
    public function embossimage($radius, $sigma)
    {
    }

    /**
     * mixed $passphrase
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
     * mixed $EVALUATE
     * mixed $constant
     * mixed|null $CHANNEL
     */
    public function evaluateimage($EVALUATE, $constant, $CHANNEL = null)
    {
    }

    /**
     * mixed $EVALUATE
     */
    public function evaluateimages($EVALUATE)
    {
    }

    /**
     * mixed $x
     * mixed $y
     * mixed $width
     * mixed $height
     * mixed $map
     * mixed $STORAGE
     */
    public function exportimagepixels($x, $y, $width, $height, $map, $STORAGE)
    {
    }

    /**
     * mixed $width
     * mixed $height
     * mixed $x
     * mixed $y
     */
    public function extentimage($width, $height, $x, $y)
    {
    }

    /**
     * ImagickKernel $ImagickKernel
     * mixed|null $CHANNEL
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
     * mixed $fill
     * mixed $fuzz
     * mixed $bordercolor
     * mixed $x
     * mixed $y
     * mixed $invert
     * mixed|null $CHANNEL
     */
    public function floodfillpaintimage($fill, $fuzz, $bordercolor, $x, $y, $invert, $CHANNEL = null)
    {
    }

    public function flopimage()
    {
    }

    /**
     * mixed $magnitude
     */
    public function forwardfouriertransformimage($magnitude)
    {
    }

    /**
     * mixed $color
     * mixed $width
     * mixed $height
     * mixed $innerBevel
     * mixed $outerBevel
     */
    public function frameimage($color, $width, $height, $innerBevel, $outerBevel)
    {
    }

    /**
     * mixed $FUNCTION
     * mixed $arguments
     */
    public function functionimage($FUNCTION, $arguments)
    {
    }

    /**
     * mixed $expression
     * mixed|null $CHANNEL
     */
    public function fximage($expression, $CHANNEL = null)
    {
    }

    /**
     * mixed $gamma
     * mixed|null $CHANNEL
     */
    public function gammaimage($gamma, $CHANNEL = null)
    {
    }

    /**
     * mixed $radius
     * mixed $sigma
     * mixed|null $CHANNEL
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
     * mixed|null $pattern
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
     * mixed $artifact
     */
    public function getimageartifact($artifact)
    {
    }

    /**
     * mixed $key
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
     * mixed $CHANNEL
     */
    public function getimagechanneldepth($CHANNEL)
    {
    }

    /**
     * Imagick $Imagick
     * mixed $CHANNEL
     * mixed $METRIC
     */
    public function getimagechanneldistortion($Imagick, $CHANNEL, $METRIC)
    {
    }

    /**
     * Imagick $Imagick
     * mixed|null $METRICTYPE
     * mixed|null $CHANNEL
     */
    public function getimagechanneldistortions($Imagick, $METRICTYPE = null, $CHANNEL = null)
    {
    }

    /**
     * mixed $CHANNEL
     */
    public function getimagechannelextrema($CHANNEL)
    {
    }

    /**
     * mixed|null $CHANNEL
     */
    public function getimagechannelkurtosis($CHANNEL = null)
    {
    }

    /**
     * mixed $CHANNEL
     */
    public function getimagechannelmean($CHANNEL)
    {
    }

    /**
     * mixed $CHANNEL
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
     * mixed $index
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
     * Imagick $Imagick
     * mixed $METRIC
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
     * mixed $x
     * mixed $y
     */
    public function getimagepixelcolor($x, $y)
    {
    }

    /**
     * mixed $name
     */
    public function getimageprofile($name)
    {
    }

    /**
     * mixed|null $pattern
     * mixed|null $values
     */
    public function getimageprofiles($pattern = null, $values = null)
    {
    }

    /**
     * mixed|null $pattern
     * mixed|null $values
     */
    public function getimageproperties($pattern = null, $values = null)
    {
    }

    /**
     * mixed $name
     */
    public function getimageproperty($name)
    {
    }

    public function getimageredprimary()
    {
    }

    /**
     * mixed $width
     * mixed $height
     * mixed $x
     * mixed $y
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
     * mixed $key
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
     * mixed $x
     * mixed $y
     * mixed $columns
     * mixed $rows
     * mixed $modify
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
     * mixed $key
     */
    public static function getregistry($key)
    {
    }

    public static function getreleasedate()
    {
    }

    /**
     * mixed $resource_type
     */
    public static function getresource($resource_type)
    {
    }

    /**
     * mixed $resource_type
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
     * Imagick $Imagick
     * mixed|null $CHANNEL
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
     * mixed $embedText
     */
    public function identifyformat($embedText)
    {
    }

    /**
     * mixed|null $appendRawOutput
     */
    public function identifyimage($appendRawOutput = null)
    {
    }

    /**
     * mixed $radius
     */
    public function implodeimage($radius)
    {
    }

    /**
     * mixed $x
     * mixed $y
     * mixed $width
     * mixed $height
     * mixed $map
     * mixed $storage
     * mixed $PIXEL
     */
    public function importimagepixels($x, $y, $width, $height, $map, $storage, $PIXEL)
    {
    }

    /**
     * mixed $complement
     * mixed $magnitude
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
     * mixed $label
     */
    public function labelimage($label)
    {
    }

    /**
     * mixed $blackPoint
     * mixed $gamma
     * mixed $whitePoint
     * mixed|null $CHANNEL
     */
    public function levelimage($blackPoint, $gamma, $whitePoint, $CHANNEL = null)
    {
    }

    /**
     * mixed $blackPoint
     * mixed $whitePoint
     */
    public function linearstretchimage($blackPoint, $whitePoint)
    {
    }

    /**
     * mixed $columns
     * mixed $rows
     * mixed $delta_x
     * mixed $rigidity
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
     * mixed $radius
     * mixed $strength
     */
    public function localcontrastimage($radius, $strength)
    {
    }

    public function magnifyimage()
    {
    }

    /**
     * Imagick $Imagick
     * mixed $dither
     */
    public function mapimage($Imagick, $dither)
    {
    }

    /**
     * mixed $alpha
     * mixed $fuzz
     * mixed $color
     * mixed $x
     * mixed $y
     */
    public function mattefloodfillimage($alpha, $fuzz, $color, $x, $y)
    {
    }

    /**
     * mixed $radius
     */
    public function medianfilterimage($radius)
    {
    }

    /**
     * mixed $LAYERMETHOD
     */
    public function mergeimagelayers($LAYERMETHOD)
    {
    }

    public function minifyimage()
    {
    }

    /**
     * mixed $brightness
     * mixed $saturation
     * mixed $hue
     */
    public function modulateimage($brightness, $saturation, $hue)
    {
    }

    /**
     * ImagickDraw $ImagickDraw
     * mixed $tileGeometry
     * mixed $thumbnailGeometry
     * mixed $MONTAGEMODE
     * mixed $frame
     */
    public function montageimage($ImagickDraw, $tileGeometry, $thumbnailGeometry, $MONTAGEMODE, $frame)
    {
    }

    /**
     * mixed $frames
     */
    public function morphimages($frames)
    {
    }

    /**
     * mixed $morphologyMethod
     * mixed $iterations
     * ImagickKernel $ImagickKernel
     * mixed|null $CHANNEL
     */
    public function morphology($morphologyMethod, $iterations, $ImagickKernel, $CHANNEL = null)
    {
    }

    public function mosaicimages()
    {
    }

    /**
     * mixed $radius
     * mixed $sigma
     * mixed $angle
     * mixed|null $CHANNEL
     */
    public function motionblurimage($radius, $sigma, $angle, $CHANNEL = null)
    {
    }

    /**
     * mixed $gray
     * mixed|null $CHANNEL
     */
    public function negateimage($gray, $CHANNEL = null)
    {
    }

    /**
     * mixed $columns
     * mixed $rows
     * mixed $background_color
     * mixed|null $format
     */
    public function newimage($columns, $rows, $background_color, $format = null)
    {
    }

    /**
     * mixed $columns
     * mixed $rows
     * mixed $pseudoString
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
     * mixed|null $CHANNEL
     */
    public function normalizeimage($CHANNEL = null)
    {
    }

    /**
     * mixed $radius
     */
    public function oilpaintimage($radius)
    {
    }

    /**
     * mixed $target
     * mixed $fill
     * mixed $fuzz
     * mixed $invert
     * mixed|null $CHANNEL
     */
    public function opaquepaintimage($target, $fill, $fuzz, $invert, $CHANNEL = null)
    {
    }

    public function optimizeimagelayers()
    {
    }

    /**
     * mixed $threshold_map
     * mixed|null $CHANNEL
     */
    public function orderedposterizeimage($threshold_map, $CHANNEL = null)
    {
    }

    /**
     * mixed $CHANNEL
     * mixed $fill
     * mixed $fuzz
     * mixed $bordercolor
     * mixed $x
     * mixed $y
     */
    public function paintfloodfillimage($CHANNEL, $fill, $fuzz, $bordercolor, $x, $y)
    {
    }

    /**
     * mixed $target_color
     * mixed $fill_color
     * mixed $fuzz
     * mixed|null $CHANNEL
     */
    public function paintopaqueimage($target_color, $fill_color, $fuzz, $CHANNEL = null)
    {
    }

    /**
     * mixed $target_color
     * mixed $alpha
     * mixed $fuzz
     */
    public function painttransparentimage($target_color, $alpha, $fuzz)
    {
    }

    /**
     * mixed $filename
     */
    public function pingimage($filename)
    {
    }

    /**
     * mixed $imageContents
     */
    public function pingimageblob($imageContents)
    {
    }

    /**
     * mixed $fp
     */
    public function pingimagefile($fp)
    {
    }

    /**
     * ImagickDraw $ImagickDraw
     * mixed $angle
     */
    public function polaroidimage($ImagickDraw, $angle)
    {
    }

    /**
     * mixed $levels
     * mixed $dither
     */
    public function posterizeimage($levels, $dither)
    {
    }

    /**
     * mixed $PREVIEW
     */
    public function previewimages($PREVIEW)
    {
    }

    public function previousimage()
    {
    }

    /**
     * mixed $name
     * mixed $profile
     */
    public function profileimage($name, $profile)
    {
    }

    /**
     * mixed $numColors
     * mixed $COLORSPACE
     * mixed $treeDepth
     * mixed $dither
     * mixed $measureError
     */
    public function quantizeimage($numColors, $COLORSPACE, $treeDepth, $dither, $measureError)
    {
    }

    /**
     * mixed $numColors
     * mixed $COLORSPACE
     * mixed $treeDepth
     * mixed $dither
     * mixed $measureError
     */
    public function quantizeimages($numColors, $COLORSPACE, $treeDepth, $dither, $measureError)
    {
    }

    /**
     * ImagickDraw $ImagickDraw
     * mixed $text
     * mixed|null $multiline
     */
    public function queryfontmetrics($ImagickDraw, $text, $multiline = null)
    {
    }

    /**
     * mixed $pattern
     */
    public static function queryfonts($pattern)
    {
    }

    /**
     * mixed $pattern
     */
    public static function queryformats($pattern)
    {
    }

    /**
     * mixed $angle
     * mixed|null $CHANNEL
     */
    public function radialblurimage($angle, $CHANNEL = null)
    {
    }

    /**
     * mixed $width
     * mixed $height
     * mixed $x
     * mixed $y
     * mixed $raise
     */
    public function raiseimage($width, $height, $x, $y, $raise)
    {
    }

    /**
     * mixed $low
     * mixed $high
     * mixed|null $CHANNELTYPE
     */
    public function randomthresholdimage($low, $high, $CHANNELTYPE = null)
    {
    }

    /**
     * mixed $filename
     */
    public function readimage($filename)
    {
    }

    /**
     * mixed $imageContents
     * mixed|null $filename
     */
    public function readimageblob($imageContents, $filename = null)
    {
    }

    /**
     * mixed $fp
     */
    public function readimagefile($fp)
    {
    }

    /**
     * mixed $filenames
     */
    public function readimages($filenames)
    {
    }

    /**
     * mixed $matrix
     */
    public function recolorimage($matrix)
    {
    }

    /**
     * mixed $radius
     */
    public function reducenoiseimage($radius)
    {
    }

    /**
     * Imagick $Imagick
     * mixed $DITHER
     */
    public function remapimage($Imagick, $DITHER)
    {
    }

    public function removeimage()
    {
    }

    /**
     * mixed $name
     */
    public function removeimageprofile($name)
    {
    }

    /**
     * mixed $xResolution
     * mixed $yResolution
     * mixed $FILTER
     * mixed $blur
     */
    public function resampleimage($xResolution, $yResolution, $FILTER, $blur)
    {
    }

    /**
     * mixed $page
     */
    public function resetimagepage($page)
    {
    }

    public function resetiterator()
    {
    }

    /**
     * mixed $x
     * mixed $y
     * mixed|null $filter
     * mixed|null $blur
     * mixed|null $bestfit
     * mixed|null $legacy
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
     * mixed $x
     * mixed $y
     */
    public function rollimage($x, $y)
    {
    }

    /**
     * mixed $color
     * mixed $degrees
     */
    public function rotateimage($color, $degrees)
    {
    }

    /**
     * mixed $angle
     * mixed|null $CHANNEL
     */
    public function rotationalblurimage($angle, $CHANNEL = null)
    {
    }

    /**
     * mixed $xRounding
     * mixed $yRounding
     * mixed|null $strokeWidth
     * mixed|null $displace
     * mixed|null $sizeCorrection
     */
    public function roundcorners($xRounding, $yRounding, $strokeWidth = null, $displace = null, $sizeCorrection = null)
    {
    }

    /**
     * mixed $xRounding
     * mixed $yRounding
     * mixed|null $strokeWidth
     * mixed|null $displace
     * mixed|null $sizeCorrection
     */
    public function roundcornersimage($xRounding, $yRounding, $strokeWidth = null, $displace = null, $sizeCorrection = null)
    {
    }

    /**
     * mixed $columns
     * mixed $rows
     */
    public function sampleimage($columns, $rows)
    {
    }

    /**
     * mixed $width
     * mixed $height
     * mixed|null $bestfit
     * mixed|null $legacy
     */
    public function scaleimage($width, $height, $bestfit = null, $legacy = null)
    {
    }

    /**
     * mixed $COLORSPACE
     * mixed $cluster_threshold
     * mixed $smooth_threshold
     * mixed|null $verbose
     */
    public function segmentimage($COLORSPACE, $cluster_threshold, $smooth_threshold, $verbose = null)
    {
    }

    /**
     * mixed $radius
     * mixed $sigma
     * mixed $threshold
     * mixed $CHANNEL
     */
    public function selectiveblurimage($radius, $sigma, $threshold, $CHANNEL)
    {
    }

    /**
     * mixed $CHANNEL
     */
    public function separateimagechannel($CHANNEL)
    {
    }

    /**
     * mixed $threshold
     */
    public function sepiatoneimage($threshold)
    {
    }

    /**
     * mixed $antialias
     */
    public function setantialias($antialias)
    {
    }

    /**
     * mixed $color
     */
    public function setbackgroundcolor($color)
    {
    }

    /**
     * mixed $COLORSPACE
     */
    public function setcolorspace($COLORSPACE)
    {
    }

    /**
     * mixed $compression
     */
    public function setcompression($compression)
    {
    }

    /**
     * mixed $compressionquality
     */
    public function setcompressionquality($compressionquality)
    {
    }

    /**
     * mixed $filename
     */
    public function setfilename($filename)
    {
    }

    public function setfirstiterator()
    {
    }

    /**
     * mixed $font
     */
    public function setfont($font)
    {
    }

    /**
     * mixed $format
     */
    public function setformat($format)
    {
    }

    /**
     * mixed $GRAVITY
     */
    public function setgravity($GRAVITY)
    {
    }

    /**
     * Imagick $Imagick
     */
    public function setimage($Imagick)
    {
    }

    /**
     * mixed $ALPHACHANNELTYPE
     */
    public function setimagealphachannel($ALPHACHANNELTYPE)
    {
    }

    /**
     * mixed $artifact
     * mixed $value
     */
    public function setimageartifact($artifact, $value)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function setimageattribute($key, $value)
    {
    }

    /**
     * mixed $color
     */
    public function setimagebackgroundcolor($color)
    {
    }

    /**
     * mixed $bias
     */
    public function setimagebias($bias)
    {
    }

    /**
     * mixed $bias
     */
    public function setimagebiasquantum($bias)
    {
    }

    /**
     * mixed $x
     * mixed $y
     */
    public function setimageblueprimary($x, $y)
    {
    }

    /**
     * mixed $color
     */
    public function setimagebordercolor($color)
    {
    }

    /**
     * mixed $CHANNEL
     * mixed $depth
     */
    public function setimagechanneldepth($CHANNEL, $depth)
    {
    }

    /**
     * Imagick $Imagick
     */
    public function setimageclipmask($Imagick)
    {
    }

    /**
     * mixed $index
     * mixed $color
     */
    public function setimagecolormapcolor($index, $color)
    {
    }

    /**
     * mixed $COLORSPACE
     */
    public function setimagecolorspace($COLORSPACE)
    {
    }

    /**
     * mixed $COMPOSITE
     */
    public function setimagecompose($COMPOSITE)
    {
    }

    /**
     * mixed $COMPRESSION
     */
    public function setimagecompression($COMPRESSION)
    {
    }

    /**
     * mixed $quality
     */
    public function setimagecompressionquality($quality)
    {
    }

    /**
     * mixed $delay
     */
    public function setimagedelay($delay)
    {
    }

    /**
     * mixed $depth
     */
    public function setimagedepth($depth)
    {
    }

    /**
     * mixed $DISPOSETYPE
     */
    public function setimagedispose($DISPOSETYPE)
    {
    }

    /**
     * mixed $columns
     * mixed $rows
     */
    public function setimageextent($columns, $rows)
    {
    }

    /**
     * mixed $filename
     */
    public function setimagefilename($filename)
    {
    }

    /**
     * mixed $imageFormat
     */
    public function setimageformat($imageFormat)
    {
    }

    /**
     * mixed $gamma
     */
    public function setimagegamma($gamma)
    {
    }

    /**
     * mixed $GRAVITY
     */
    public function setimagegravity($GRAVITY)
    {
    }

    /**
     * mixed $x
     * mixed $y
     */
    public function setimagegreenprimary($x, $y)
    {
    }

    /**
     * mixed $index
     */
    public function setimageindex($index)
    {
    }

    /**
     * mixed $INTERLACE
     */
    public function setimageinterlacescheme($INTERLACE)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * mixed $INTERPOLATE
     */
    public function setimageinterpolatemethod($INTERPOLATE)
    {
    }

    /**
     * mixed $iterations
     */
    public function setimageiterations($iterations)
    {
    }

    /**
     * mixed $enable
     */
    public function setimagematte($enable)
    {
    }

    /**
     * mixed $color
     */
    public function setimagemattecolor($color)
    {
    }

    /**
     * mixed $opacity
     */
    public function setimageopacity($opacity)
    {
    }

    /**
     * mixed $ORIENTATION
     */
    public function setimageorientation($ORIENTATION)
    {
    }

    /**
     * mixed $width
     * mixed $height
     * mixed $x
     * mixed $y
     */
    public function setimagepage($width, $height, $x, $y)
    {
    }

    /**
     * mixed $name
     * mixed $profile
     */
    public function setimageprofile($name, $profile)
    {
    }

    /**
     * mixed $filename
     */
    public function setimageprogressmonitor($filename)
    {
    }

    /**
     * mixed $name
     * mixed $value
     */
    public function setimageproperty($name, $value)
    {
    }

    /**
     * mixed $x
     * mixed $y
     */
    public function setimageredprimary($x, $y)
    {
    }

    /**
     * mixed $RENDERINGINTENT
     */
    public function setimagerenderingintent($RENDERINGINTENT)
    {
    }

    /**
     * mixed $xResolution
     * mixed $yResolution
     */
    public function setimageresolution($xResolution, $yResolution)
    {
    }

    /**
     * mixed $scene
     */
    public function setimagescene($scene)
    {
    }

    /**
     * mixed $ticksPerSecond
     */
    public function setimagetickspersecond($ticksPerSecond)
    {
    }

    /**
     * mixed $IMGTYPE
     */
    public function setimagetype($IMGTYPE)
    {
    }

    /**
     * mixed $RESOLUTION
     */
    public function setimageunits($RESOLUTION)
    {
    }

    /**
     * mixed $VIRTUALPIXELMETHOD
     */
    public function setimagevirtualpixelmethod($VIRTUALPIXELMETHOD)
    {
    }

    /**
     * mixed $x
     * mixed $y
     */
    public function setimagewhitepoint($x, $y)
    {
    }

    /**
     * mixed $INTERLACE
     */
    public function setinterlacescheme($INTERLACE)
    {
    }

    /**
     * mixed $index
     */
    public function setiteratorindex($index)
    {
    }

    public function setlastiterator()
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function setoption($key, $value)
    {
    }

    /**
     * mixed $width
     * mixed $height
     * mixed $x
     * mixed $y
     */
    public function setpage($width, $height, $x, $y)
    {
    }

    /**
     * mixed $pointsize
     */
    public function setpointsize($pointsize)
    {
    }

    /**
     * mixed $callback
     */
    public function setprogressmonitor($callback)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public static function setregistry($key, $value)
    {
    }

    /**
     * mixed $xResolution
     * mixed $yResolution
     */
    public function setresolution($xResolution, $yResolution)
    {
    }

    /**
     * mixed $RESOURCETYPE
     * mixed $limit
     */
    public static function setresourcelimit($RESOURCETYPE, $limit)
    {
    }

    /**
     * mixed $factors
     */
    public function setsamplingfactors($factors)
    {
    }

    /**
     * mixed $columns
     * mixed $rows
     */
    public function setsize($columns, $rows)
    {
    }

    /**
     * mixed $columns
     * mixed $rows
     * mixed $offset
     */
    public function setsizeoffset($columns, $rows, $offset)
    {
    }

    /**
     * Set the type of a variable
     *
     * mixed $IMGTYPE
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
     * mixed $gray
     * mixed $azimuth
     * mixed $elevation
     */
    public function shadeimage($gray, $azimuth, $elevation)
    {
    }

    /**
     * mixed $opacity
     * mixed $sigma
     * mixed $x
     * mixed $y
     */
    public function shadowimage($opacity, $sigma, $x, $y)
    {
    }

    /**
     * mixed $radius
     * mixed $sigma
     * mixed|null $CHANNEL
     */
    public function sharpenimage($radius, $sigma, $CHANNEL = null)
    {
    }

    /**
     * mixed $columns
     * mixed $rows
     */
    public function shaveimage($columns, $rows)
    {
    }

    /**
     * mixed $color
     * mixed $xShear
     * mixed $yShear
     */
    public function shearimage($color, $xShear, $yShear)
    {
    }

    /**
     * mixed $sharpen
     * mixed $contrast
     * mixed $midpoint
     * mixed|null $CHANNEL
     */
    public function sigmoidalcontrastimage($sharpen, $contrast, $midpoint, $CHANNEL = null)
    {
    }

    /**
     * Imagick $Imagick
     * mixed|null $offset
     * mixed|null $similarity
     * mixed|null $similarity_threshold
     * mixed|null $metric
     */
    public function similarityimage($Imagick, &$offset = null, &$similarity = null, &$similarity_threshold = null, &$metric = null)
    {
    }

    /**
     * mixed $radius
     * mixed $sigma
     * mixed $angle
     */
    public function sketchimage($radius, $sigma, $angle)
    {
    }

    /**
     * mixed $stack
     * mixed $offset
     */
    public function smushimages($stack, $offset)
    {
    }

    /**
     * mixed $threshold
     */
    public function solarizeimage($threshold)
    {
    }

    /**
     * mixed $SPARSE_METHOD
     * mixed $arguments
     * mixed|null $CHANNEL
     */
    public function sparsecolorimage($SPARSE_METHOD, $arguments, $CHANNEL = null)
    {
    }

    /**
     * mixed $width
     * mixed $height
     * mixed $x
     * mixed $y
     */
    public function spliceimage($width, $height, $x, $y)
    {
    }

    /**
     * mixed $radius
     */
    public function spreadimage($radius)
    {
    }

    /**
     * mixed $type
     * mixed $width
     * mixed $height
     * mixed|null $CHANNEL
     */
    public function statisticimage($type, $width, $height, $CHANNEL = null)
    {
    }

    /**
     * Imagick $Imagick
     * mixed $offset
     */
    public function steganoimage($Imagick, $offset)
    {
    }

    /**
     * Imagick $Imagick
     */
    public function stereoimage($Imagick)
    {
    }

    public function stripimage()
    {
    }

    /**
     * Imagick $Imagick
     * mixed|null $offset
     * mixed|null $similarity
     * mixed|null $similarity_threshold
     * mixed|null $metric
     */
    public function subimagematch($Imagick, &$offset = null, &$similarity = null, &$similarity_threshold = null, &$metric = null)
    {
    }

    /**
     * mixed $degrees
     */
    public function swirlimage($degrees)
    {
    }

    /**
     * Imagick $Imagick
     */
    public function textureimage($Imagick)
    {
    }

    /**
     * mixed $threshold
     * mixed|null $CHANNELTYPE
     */
    public function thresholdimage($threshold, $CHANNELTYPE = null)
    {
    }

    /**
     * mixed $width
     * mixed $height
     * mixed|null $bestfit
     * mixed|null $fill
     * mixed|null $legacy
     */
    public function thumbnailimage($width, $height, $bestfit = null, $fill = null, $legacy = null)
    {
    }

    /**
     * mixed $tint_color
     * mixed $opacity
     * mixed|null $legacy
     */
    public function tintimage($tint_color, $opacity, $legacy = null)
    {
    }

    /**
     * mixed $crop
     * mixed $geometry
     */
    public function transformimage($crop, $geometry)
    {
    }

    /**
     * mixed $COLORSPACE
     */
    public function transformimagecolorspace($COLORSPACE)
    {
    }

    /**
     * mixed $target
     * mixed $alpha
     * mixed $fuzz
     * mixed $invert
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
     * mixed $fuzz
     */
    public function trimimage($fuzz)
    {
    }

    public function uniqueimagecolors()
    {
    }

    /**
     * mixed $radius
     * mixed $sigma
     * mixed $amount
     * mixed $threshold
     * mixed|null $CHANNEL
     */
    public function unsharpmaskimage($radius, $sigma, $amount, $threshold, $CHANNEL = null)
    {
    }

    public function valid()
    {
    }

    /**
     * mixed $blackPoint
     * mixed $whitePoint
     * mixed $x
     * mixed $y
     */
    public function vignetteimage($blackPoint, $whitePoint, $x, $y)
    {
    }

    /**
     * mixed $amplitude
     * mixed $waveLenght
     */
    public function waveimage($amplitude, $waveLenght)
    {
    }

    /**
     * mixed $color
     */
    public function whitethresholdimage($color)
    {
    }

    /**
     * mixed|null $filename
     */
    public function writeimage($filename = null)
    {
    }

    /**
     * mixed $handle
     * mixed|null $format
     */
    public function writeimagefile($handle, $format = null)
    {
    }

    /**
     * mixed $filename
     * mixed $adjoin
     */
    public function writeimages($filename, $adjoin)
    {
    }

    /**
     * mixed $handle
     * mixed|null $format
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
     * mixed $affineMatrix
     */
    public function affine($affineMatrix)
    {
    }

    /**
     * mixed $x
     * mixed $y
     * mixed $text
     */
    public function annotation($x, $y, $text)
    {
    }

    /**
     * mixed $sx
     * mixed $sy
     * mixed $ex
     * mixed $ey
     * mixed $sd
     * mixed $ed
     */
    public function arc($sx, $sy, $ex, $ey, $sd, $ed)
    {
    }

    /**
     * mixed $coordinateArray
     */
    public function bezier($coordinateArray)
    {
    }

    /**
     * mixed $ox
     * mixed $oy
     * mixed $px
     * mixed $py
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
     * mixed $x
     * mixed $y
     * mixed $PAINTMETHOD
     */
    public function color($x, $y, $PAINTMETHOD)
    {
    }

    /**
     * mixed $comment
     */
    public function comment($comment)
    {
    }

    /**
     * mixed $COMPOSE
     * mixed $x
     * mixed $y
     * mixed $width
     * mixed $height
     * Imagick $Imagick
     */
    public function composite($COMPOSE, $x, $y, $width, $height, $Imagick)
    {
    }

    public function destroy()
    {
    }

    /**
     * mixed $ox
     * mixed $oy
     * mixed $px
     * mixed $py
     * mixed $start
     * mixed $end
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
     * mixed $sx
     * mixed $sy
     * mixed $ex
     * mixed $ey
     */
    public function line($sx, $sy, $ex, $ey)
    {
    }

    /**
     * mixed $x
     * mixed $y
     * mixed $METHOD
     */
    public function matte($x, $y, $METHOD)
    {
    }

    public function pathclose()
    {
    }

    /**
     * mixed $x1
     * mixed $y1
     * mixed $x2
     * mixed $y2
     * mixed $x
     * mixed $y
     */
    public function pathcurvetoabsolute($x1, $y1, $x2, $y2, $x, $y)
    {
    }

    /**
     * mixed $x1
     * mixed $y1
     * mixed $x
     * mixed $y
     */
    public function pathcurvetoquadraticbezierabsolute($x1, $y1, $x, $y)
    {
    }

    /**
     * mixed $x1
     * mixed $y1
     * mixed $x
     * mixed $y
     */
    public function pathcurvetoquadraticbezierrelative($x1, $y1, $x, $y)
    {
    }

    /**
     * mixed $x
     * mixed $y
     */
    public function pathcurvetoquadraticbeziersmoothabsolute($x, $y)
    {
    }

    /**
     * mixed $x
     * mixed $y
     */
    public function pathcurvetoquadraticbeziersmoothrelative($x, $y)
    {
    }

    /**
     * mixed $x1
     * mixed $y1
     * mixed $x2
     * mixed $y2
     * mixed $x
     * mixed $y
     */
    public function pathcurvetorelative($x1, $y1, $x2, $y2, $x, $y)
    {
    }

    /**
     * mixed $x1
     * mixed $y1
     * mixed $x
     * mixed $y
     */
    public function pathcurvetosmoothabsolute($x1, $y1, $x, $y)
    {
    }

    /**
     * mixed $x1
     * mixed $y1
     * mixed $x
     * mixed $y
     */
    public function pathcurvetosmoothrelative($x1, $y1, $x, $y)
    {
    }

    /**
     * mixed $rx
     * mixed $ry
     * mixed $xAxisRotation
     * mixed $largeArc
     * mixed $sweep
     * mixed $x
     * mixed $y
     */
    public function pathellipticarcabsolute($rx, $ry, $xAxisRotation, $largeArc, $sweep, $x, $y)
    {
    }

    /**
     * mixed $rx
     * mixed $ry
     * mixed $xAxisRotation
     * mixed $largeArc
     * mixed $sweep
     * mixed $x
     * mixed $y
     */
    public function pathellipticarcrelative($rx, $ry, $xAxisRotation, $largeArc, $sweep, $x, $y)
    {
    }

    public function pathfinish()
    {
    }

    /**
     * mixed $x
     * mixed $y
     */
    public function pathlinetoabsolute($x, $y)
    {
    }

    /**
     * mixed $y
     */
    public function pathlinetohorizontalabsolute($y)
    {
    }

    /**
     * mixed $x
     */
    public function pathlinetohorizontalrelative($x)
    {
    }

    /**
     * mixed $x
     * mixed $y
     */
    public function pathlinetorelative($x, $y)
    {
    }

    /**
     * mixed $y
     */
    public function pathlinetoverticalabsolute($y)
    {
    }

    /**
     * mixed $x
     */
    public function pathlinetoverticalrelative($x)
    {
    }

    /**
     * mixed $x
     * mixed $y
     */
    public function pathmovetoabsolute($x, $y)
    {
    }

    /**
     * mixed $x
     * mixed $y
     */
    public function pathmovetorelative($x, $y)
    {
    }

    public function pathstart()
    {
    }

    /**
     * mixed $x
     * mixed $y
     */
    public function point($x, $y)
    {
    }

    /**
     * mixed $coordinates
     */
    public function polygon($coordinates)
    {
    }

    /**
     * mixed $coordinateArray
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
     * mixed $clipMask
     */
    public function pushclippath($clipMask)
    {
    }

    public function pushdefs()
    {
    }

    /**
     * mixed $pattern_id
     * mixed $x
     * mixed $y
     * mixed $width
     * mixed $height
     */
    public function pushpattern($pattern_id, $x, $y, $width, $height)
    {
    }

    /**
     * mixed $x1
     * mixed $y1
     * mixed $x2
     * mixed $y2
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
     * mixed $degrees
     */
    public function rotate($degrees)
    {
    }

    /**
     * mixed $x1
     * mixed $y1
     * mixed $x2
     * mixed $y2
     * mixed $rx
     * mixed $ry
     */
    public function roundrectangle($x1, $y1, $x2, $y2, $rx, $ry)
    {
    }

    /**
     * mixed $x
     * mixed $y
     */
    public function scale($x, $y)
    {
    }

    /**
     * mixed $bordercolor
     */
    public function setbordercolor($bordercolor)
    {
    }

    /**
     * mixed $clipMask
     */
    public function setclippath($clipMask)
    {
    }

    /**
     * mixed $FILLRULE
     */
    public function setcliprule($FILLRULE)
    {
    }

    /**
     * mixed $PATHUNITS
     */
    public function setclipunits($PATHUNITS)
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * mixed $density
     */
    public function setdensity($density)
    {
    }

    /**
     * mixed $alpha
     */
    public function setfillalpha($alpha)
    {
    }

    /**
     * mixed $color
     */
    public function setfillcolor($color)
    {
    }

    /**
     * mixed $fillOpacity
     */
    public function setfillopacity($fillOpacity)
    {
    }

    /**
     * mixed $url
     */
    public function setfillpatternurl($url)
    {
    }

    /**
     * mixed $FILLRULE
     */
    public function setfillrule($FILLRULE)
    {
    }

    /**
     * mixed $font
     */
    public function setfont($font)
    {
    }

    /**
     * mixed $fontfamily
     */
    public function setfontfamily($fontfamily)
    {
    }

    /**
     * mixed $x
     * mixed $y
     */
    public function setfontresolution($x, $y)
    {
    }

    /**
     * mixed $pointsize
     */
    public function setfontsize($pointsize)
    {
    }

    /**
     * mixed $STRETCH
     */
    public function setfontstretch($STRETCH)
    {
    }

    /**
     * mixed $STYLE
     */
    public function setfontstyle($STYLE)
    {
    }

    /**
     * mixed $weight
     */
    public function setfontweight($weight)
    {
    }

    /**
     * mixed $GRAVITY
     */
    public function setgravity($GRAVITY)
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * mixed $opacity
     */
    public function setopacity($opacity)
    {
    }

    /**
     * mixed $x_resolution
     * mixed $y_resolution
     */
    public function setresolution($x_resolution, $y_resolution)
    {
    }

    /**
     * mixed $alpha
     */
    public function setstrokealpha($alpha)
    {
    }

    /**
     * mixed $antialias
     */
    public function setstrokeantialias($antialias)
    {
    }

    /**
     * mixed $color
     */
    public function setstrokecolor($color)
    {
    }

    /**
     * mixed $dashArray
     */
    public function setstrokedasharray($dashArray)
    {
    }

    /**
     * mixed $offset
     */
    public function setstrokedashoffset($offset)
    {
    }

    /**
     * mixed $LINECAP
     */
    public function setstrokelinecap($LINECAP)
    {
    }

    /**
     * mixed $LINEJOIN
     */
    public function setstrokelinejoin($LINEJOIN)
    {
    }

    /**
     * mixed $miterLimit
     */
    public function setstrokemiterlimit($miterLimit)
    {
    }

    /**
     * mixed $strokeOpacity
     */
    public function setstrokeopacity($strokeOpacity)
    {
    }

    /**
     * mixed $url
     */
    public function setstrokepatternurl($url)
    {
    }

    /**
     * mixed $width
     */
    public function setstrokewidth($width)
    {
    }

    /**
     * mixed $ALIGN
     */
    public function settextalignment($ALIGN)
    {
    }

    /**
     * mixed $antialias
     */
    public function settextantialias($antialias)
    {
    }

    /**
     * mixed $DECORATION
     */
    public function settextdecoration($DECORATION)
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * mixed $direction
     */
    public function settextdirection($direction)
    {
    }

    /**
     * mixed $encoding
     */
    public function settextencoding($encoding)
    {
    }

    /**
     * mixed $spacing
     */
    public function settextinterlinespacing($spacing)
    {
    }

    /**
     * mixed $spacing
     */
    public function settextinterwordspacing($spacing)
    {
    }

    /**
     * mixed $kerning
     */
    public function settextkerning($kerning)
    {
    }

    /**
     * mixed $color
     */
    public function settextundercolor($color)
    {
    }

    /**
     * mixed $xml
     */
    public function setvectorgraphics($xml)
    {
    }

    /**
     * mixed $sx
     * mixed $sy
     * mixed $ex
     * mixed $ey
     */
    public function setviewbox($sx, $sy, $ex, $ey)
    {
    }

    /**
     * mixed $degrees
     */
    public function skewx($degrees)
    {
    }

    /**
     * mixed $degrees
     */
    public function skewy($degrees)
    {
    }

    /**
     * mixed $x
     * mixed $y
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
     * ImagickKernel $ImagickKernel
     */
    public function addkernel($ImagickKernel)
    {
    }

    public function addunitykernel()
    {
    }

    /**
     * mixed $kerneltype
     * mixed $paramstring
     */
    public static function frombuiltin($kerneltype, $paramstring)
    {
    }

    /**
     * mixed $array
     * mixed|null $array
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
     * mixed|null $color
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
     * mixed|null $normalized
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
     * mixed $color
     */
    public function getcolorvalue($color)
    {
    }

    /**
     * mixed $color
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
     * mixed $color
     * mixed|null $fuzz
     */
    public function ispixelsimilar($color, $fuzz = null)
    {
    }

    /**
     * mixed $color
     * mixed|null $fuzz
     */
    public function ispixelsimilarquantum($color, $fuzz = null)
    {
    }

    /**
     * mixed $color
     * mixed|null $fuzz
     */
    public function issimilar($color, $fuzz = null)
    {
    }

    /**
     * mixed $color
     */
    public function setcolor($color)
    {
    }

    /**
     * mixed $colorCount
     */
    public function setcolorcount($colorCount)
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     *
     * ImagickPixel $srcPixel
     */
    public function setcolorfrompixel($srcPixel)
    {
    }

    /**
     * mixed $color
     * mixed $value
     */
    public function setcolorvalue($color, $value)
    {
    }

    /**
     * mixed $color_value
     */
    public function setcolorvaluequantum($color_value)
    {
    }

    /**
     * mixed $hue
     * mixed $saturation
     * mixed $luminosity
     */
    public function sethsl($hue, $saturation, $luminosity)
    {
    }

    /**
     * mixed $index
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
     * Imagick $Imagick
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
     * Imagick $Imagick
     */
    public static function getpixeliterator($Imagick)
    {
    }

    /**
     * Imagick $Imagick
     * mixed $x
     * mixed $y
     * mixed $columns
     * mixed $rows
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
     * mixed $row
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
