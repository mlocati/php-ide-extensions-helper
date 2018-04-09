<?php
// Start of extension: imagick
// - parsed on POSIX with PHP 5.6.34 (extension version 3.4.3)

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
     * The Imagick constructor
     *
     * @param mixed|null $files
     *
     * @link http://www.php.net/manual/en/imagick.construct.php
     */
    public function __construct($files = null)
    {
    }

    /**
     * Returns the image as a string
     *
     * @return string
     *
     * @link http://www.php.net/manual/en/imagick.tostring.php
     */
    public function __tostring()
    {
    }

    /**
     * Adds adaptive blur filter to image
     *
     * @param mixed $radius
     * @param mixed $sigma
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.adaptiveblurimage.php
     */
    public function adaptiveblurimage($radius, $sigma, $CHANNEL = null)
    {
    }

    /**
     * Adaptively resize image with data dependent triangulation
     *
     * @param mixed $columns
     * @param mixed $rows
     * @param mixed|null $bestfit
     * @param mixed|null $legacy
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.adaptiveresizeimage.php
     */
    public function adaptiveresizeimage($columns, $rows, $bestfit = null, $legacy = null)
    {
    }

    /**
     * Adaptively sharpen the image
     *
     * @param mixed $radius
     * @param mixed $sigma
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.adaptivesharpenimage.php
     */
    public function adaptivesharpenimage($radius, $sigma, $CHANNEL = null)
    {
    }

    /**
     * Selects a threshold for each pixel based on a range of intensity
     *
     * @param mixed $width
     * @param mixed $height
     * @param mixed $offset
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.adaptivethresholdimage.php
     */
    public function adaptivethresholdimage($width, $height, $offset)
    {
    }

    /**
     * Adds new image to Imagick object image list
     *
     * @param Imagick $Imagick
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.addimage.php
     */
    public function addimage(Imagick $Imagick)
    {
    }

    /**
     * Adds random noise to the image
     *
     * @param mixed $NOISE
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.addnoiseimage.php
     */
    public function addnoiseimage($NOISE, $CHANNEL = null)
    {
    }

    /**
     * Transforms an image
     *
     * @param ImagickDraw $ImagickDraw
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.affinetransformimage.php
     */
    public function affinetransformimage(ImagickDraw $ImagickDraw)
    {
    }

    /**
     * Animates an image or images
     *
     * @param mixed $server_name
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.animateimages.php
     */
    public function animateimages($server_name)
    {
    }

    /**
     * Annotates an image with text
     *
     * @param ImagickDraw $ImagickDraw
     * @param mixed $x
     * @param mixed $y
     * @param mixed $angle
     * @param mixed $text
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.annotateimage.php
     */
    public function annotateimage(ImagickDraw $ImagickDraw, $x, $y, $angle, $text)
    {
    }

    /**
     * Append a set of images
     *
     * @param mixed $stack
     *
     * @return Imagick
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.appendimages.php
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
     * Description
     *
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.autolevelimage.php
     */
    public function autolevelimage($CHANNEL = null)
    {
    }

    /**
     * Average a set of images
     *
     * @return Imagick
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.averageimages.php
     */
    public function averageimages()
    {
    }

    /**
     * Forces all pixels below the threshold into black
     *
     * @param mixed $color
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.blackthresholdimage.php
     */
    public function blackthresholdimage($color)
    {
    }

    /**
     * Description
     *
     * @param mixed|null $factor
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.blueshiftimage.php
     */
    public function blueshiftimage($factor = null)
    {
    }

    /**
     * Adds blur filter to image
     *
     * @param mixed $radius
     * @param mixed $sigma
     * @param mixed|null $CHANNELTYPE
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.blurimage.php
     */
    public function blurimage($radius, $sigma, $CHANNELTYPE = null)
    {
    }

    /**
     * Surrounds the image with a border
     *
     * @param mixed $color
     * @param mixed $width
     * @param mixed $height
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.borderimage.php
     */
    public function borderimage($color, $width, $height)
    {
    }

    /**
     * Description
     *
     * @param mixed $brightness
     * @param mixed $contrast
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.brightnesscontrastimage.php
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
     * Simulates a charcoal drawing
     *
     * @param mixed $radius
     * @param mixed $sigma
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.charcoalimage.php
     */
    public function charcoalimage($radius, $sigma)
    {
    }

    /**
     * Removes a region of an image and trims
     *
     * @param mixed $width
     * @param mixed $height
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.chopimage.php
     */
    public function chopimage($width, $height, $x, $y)
    {
    }

    /**
     * Description
     *
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.clampimage.php
     */
    public function clampimage($CHANNEL = null)
    {
    }

    /**
     * Clears all resources associated to Imagick object
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.clear.php
     */
    public function clear()
    {
    }

    /**
     * Clips along the first path from the 8BIM profile
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.clipimage.php
     */
    public function clipimage()
    {
    }

    /**
     * Description
     *
     * @param mixed $pathname
     * @param mixed $inside
     *
     * @return void
     *
     * @link http://www.php.net/manual/en/imagick.clipimagepath.php
     */
    public function clipimagepath($pathname, $inside)
    {
    }

    /**
     * Clips along the named paths from the 8BIM profile
     *
     * @param mixed $pathname
     * @param mixed $inside
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.clippathimage.php
     */
    public function clippathimage($pathname, $inside)
    {
    }

    /**
     * Makes an exact copy of the Imagick object
     *
     * @return Imagick
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.clone.php
     */
    public function clone()
    {
    }

    /**
     * Replaces colors in the image
     *
     * @param Imagick $Imagick
     * @param mixed|null $CHANNELTYPE
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.clutimage.php
     */
    public function clutimage(Imagick $Imagick, $CHANNELTYPE = null)
    {
    }

    /**
     * Composites a set of images
     *
     * @return Imagick
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.coalesceimages.php
     */
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
     * Changes the color value of any pixel that matches target
     *
     * @param mixed $fill_color
     * @param mixed $fuzz
     * @param mixed $border_color
     * @param mixed $y
     * @param mixed $x
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.colorfloodfillimage.php
     */
    public function colorfloodfillimage($fill_color, $fuzz, $border_color, $y, $x)
    {
    }

    /**
     * Blends the fill color with the image
     *
     * @param mixed $colorize_color
     * @param mixed $opacity
     * @param mixed|null $legacy
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.colorizeimage.php
     */
    public function colorizeimage($colorize_color, $opacity, $legacy = null)
    {
    }

    /**
     * Description
     *
     * @param mixed $color_matrix
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.colormatriximage.php
     */
    public function colormatriximage($color_matrix)
    {
    }

    /**
     * Combines one or more images into a single image
     *
     * @return Imagick
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.combineimages.php
     */
    public function combineimages()
    {
    }

    /**
     * Adds a comment to your image
     *
     * @param mixed $comment
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.commentimage.php
     */
    public function commentimage($comment)
    {
    }

    /**
     * Returns the difference in one or more images
     *
     * @param Imagick $Imagick
     * @param mixed $CHANNEL
     * @param mixed $METRIC
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.compareimagechannels.php
     */
    public function compareimagechannels(Imagick $Imagick, $CHANNEL, $METRIC)
    {
    }

    /**
     * Returns the maximum bounding region between images
     *
     * @param mixed $LAYER
     *
     * @return Imagick
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.compareimagelayers.php
     */
    public function compareimagelayers($LAYER)
    {
    }

    /**
     * Compares an image to a reconstructed image
     *
     * @param Imagick $Imagick
     * @param mixed $METRIC
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.compareimages.php
     */
    public function compareimages(Imagick $Imagick, $METRIC)
    {
    }

    /**
     * Composite one image onto another
     *
     * @param Imagick $Imagick
     * @param mixed $COMPOSITE
     * @param mixed $x
     * @param mixed $y
     * @param mixed|null $CHANNELTYPE
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.compositeimage.php
     */
    public function compositeimage(Imagick $Imagick, $COMPOSITE, $x, $y, $CHANNELTYPE = null)
    {
    }

    /**
     * Change the contrast of the image
     *
     * @param mixed $sharpen
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.contrastimage.php
     */
    public function contrastimage($sharpen)
    {
    }

    /**
     * Enhances the contrast of a color image
     *
     * @param mixed $blackPoint
     * @param mixed $whitePoint
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.contraststretchimage.php
     */
    public function contraststretchimage($blackPoint, $whitePoint, $CHANNEL = null)
    {
    }

    /**
     * Applies a custom convolution kernel to the image
     *
     * @param mixed $kernel
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.convolveimage.php
     */
    public function convolveimage($kernel, $CHANNEL = null)
    {
    }

    /**
     * Get the number of images
     *
     * @param mixed|null $mode
     *
     * @return int
     *
     * @link http://www.php.net/manual/en/imagick.count.php
     */
    public function count($mode = null)
    {
    }

    /**
     * Extracts a region of the image
     *
     * @param mixed $width
     * @param mixed $height
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.cropimage.php
     */
    public function cropimage($width, $height, $x, $y)
    {
    }

    /**
     * Creates a crop thumbnail
     *
     * @param mixed $width
     * @param mixed $height
     * @param mixed|null $legacy
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.cropthumbnailimage.php
     */
    public function cropthumbnailimage($width, $height, $legacy = null)
    {
    }

    /**
     * Returns a reference to the current Imagick object
     *
     * @return Imagick
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.current.php
     */
    public function current()
    {
    }

    /**
     * Displaces an image's colormap
     *
     * @param mixed $displace
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.cyclecolormapimage.php
     */
    public function cyclecolormapimage($displace)
    {
    }

    /**
     * Deciphers an image
     *
     * @param mixed $passphrase
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.decipherimage.php
     */
    public function decipherimage($passphrase)
    {
    }

    /**
     * Returns certain pixel differences between images
     *
     * @return Imagick
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.deconstructimages.php
     */
    public function deconstructimages()
    {
    }

    /**
     * Delete image artifact
     *
     * @param mixed $artifact
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.deleteimageartifact.php
     */
    public function deleteimageartifact($artifact)
    {
    }

    /**
     * Description
     *
     * @param mixed $name
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.deleteimageproperty.php
     */
    public function deleteimageproperty($name)
    {
    }

    /**
     * Removes skew from the image
     *
     * @param mixed $threshold
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.deskewimage.php
     */
    public function deskewimage($threshold)
    {
    }

    /**
     * Reduces the speckle noise in an image
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.despeckleimage.php
     */
    public function despeckleimage()
    {
    }

    /**
     * Destroys the Imagick object
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.destroy.php
     */
    public function destroy()
    {
    }

    /**
     * Displays an image
     *
     * @param mixed $serverName
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.displayimage.php
     */
    public function displayimage($serverName)
    {
    }

    /**
     * Displays an image or image sequence
     *
     * @param mixed $serverName
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.displayimages.php
     */
    public function displayimages($serverName)
    {
    }

    /**
     * Distorts an image using various distortion methods
     *
     * @param mixed $method
     * @param mixed $arguments
     * @param mixed $bestfit
     *
     * @return bool
     *
     * @since PECL imagick 2.0.1
     *
     * @link http://www.php.net/manual/en/imagick.distortimage.php
     */
    public function distortimage($method, $arguments, $bestfit)
    {
    }

    /**
     * Renders the ImagickDraw object on the current image
     *
     * @param ImagickDraw $ImagickDraw
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.drawimage.php
     */
    public function drawimage(ImagickDraw $ImagickDraw)
    {
    }

    /**
     * Enhance edges within the image
     *
     * @param mixed $radius
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.edgeimage.php
     */
    public function edgeimage($radius)
    {
    }

    /**
     * Returns a grayscale image with a three-dimensional effect
     *
     * @param mixed $radius
     * @param mixed $sigma
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.embossimage.php
     */
    public function embossimage($radius, $sigma)
    {
    }

    /**
     * Enciphers an image
     *
     * @param mixed $passphrase
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.encipherimage.php
     */
    public function encipherimage($passphrase)
    {
    }

    /**
     * Improves the quality of a noisy image
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.enhanceimage.php
     */
    public function enhanceimage()
    {
    }

    /**
     * Equalizes the image histogram
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.equalizeimage.php
     */
    public function equalizeimage()
    {
    }

    /**
     * Applies an expression to an image
     *
     * @param mixed $EVALUATE
     * @param mixed $constant
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.evaluateimage.php
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
     * Exports raw image pixels
     *
     * @param mixed $x
     * @param mixed $y
     * @param mixed $width
     * @param mixed $height
     * @param mixed $map
     * @param mixed $STORAGE
     *
     * @return array
     *
     * @link http://www.php.net/manual/en/imagick.exportimagepixels.php
     */
    public function exportimagepixels($x, $y, $width, $height, $map, $STORAGE)
    {
    }

    /**
     * Set image size
     *
     * @param mixed $width
     * @param mixed $height
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.extentimage.php
     */
    public function extentimage($width, $height, $x, $y)
    {
    }

    /**
     * Description
     *
     * @param ImagickKernel $ImagickKernel
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.filter.php
     */
    public function filter(ImagickKernel $ImagickKernel, $CHANNEL = null)
    {
    }

    /**
     * Merges a sequence of images
     *
     * @return Imagick
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.flattenimages.php
     */
    public function flattenimages()
    {
    }

    /**
     * Creates a vertical mirror image
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.flipimage.php
     */
    public function flipimage()
    {
    }

    /**
     * Changes the color value of any pixel that matches target
     *
     * @param mixed $fill
     * @param mixed $fuzz
     * @param mixed $bordercolor
     * @param mixed $x
     * @param mixed $y
     * @param mixed $invert
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.floodfillpaintimage.php
     */
    public function floodfillpaintimage($fill, $fuzz, $bordercolor, $x, $y, $invert, $CHANNEL = null)
    {
    }

    /**
     * Creates a horizontal mirror image
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.flopimage.php
     */
    public function flopimage()
    {
    }

    /**
     * Description
     *
     * @param mixed $magnitude
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.forwardfouriertransformimage.php
     */
    public function forwardfouriertransformimage($magnitude)
    {
    }

    /**
     * Adds a simulated three-dimensional border
     *
     * @param mixed $color
     * @param mixed $width
     * @param mixed $height
     * @param mixed $innerBevel
     * @param mixed $outerBevel
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.frameimage.php
     */
    public function frameimage($color, $width, $height, $innerBevel, $outerBevel)
    {
    }

    /**
     * Applies a function on the image
     *
     * @param mixed $FUNCTION
     * @param mixed $arguments
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.functionimage.php
     */
    public function functionimage($FUNCTION, $arguments)
    {
    }

    /**
     * Evaluate expression for each pixel in the image
     *
     * @param mixed $expression
     * @param mixed|null $CHANNEL
     *
     * @return Imagick
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.fximage.php
     */
    public function fximage($expression, $CHANNEL = null)
    {
    }

    /**
     * Gamma-corrects an image
     *
     * @param mixed $gamma
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.gammaimage.php
     */
    public function gammaimage($gamma, $CHANNEL = null)
    {
    }

    /**
     * Blurs an image
     *
     * @param mixed $radius
     * @param mixed $sigma
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.gaussianblurimage.php
     */
    public function gaussianblurimage($radius, $sigma, $CHANNEL = null)
    {
    }

    public function getantialias()
    {
    }

    /**
     * Gets the colorspace
     *
     * @return int
     *
     * @link http://www.php.net/manual/en/imagick.getcolorspace.php
     */
    public function getcolorspace()
    {
    }

    /**
     * Gets the object compression type
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getcompression.php
     */
    public function getcompression()
    {
    }

    /**
     * Gets the object compression quality
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getcompressionquality.php
     */
    public function getcompressionquality()
    {
    }

    /**
     * @param mixed|null $pattern
     */
    public static function getconfigureoptions($pattern = null)
    {
    }

    /**
     * Returns the ImageMagick API copyright as a string
     *
     * @return string
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getcopyright.php
     */
    public static function getcopyright()
    {
    }

    public static function getfeatures()
    {
    }

    /**
     * The filename associated with an image sequence
     *
     * @return string
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getfilename.php
     */
    public function getfilename()
    {
    }

    /**
     * Gets font
     *
     * @return string
     *
     * @since PECL imagick 2.1.0
     *
     * @link http://www.php.net/manual/en/imagick.getfont.php
     */
    public function getfont()
    {
    }

    /**
     * Returns the format of the Imagick object
     *
     * @return string
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getformat.php
     */
    public function getformat()
    {
    }

    /**
     * Gets the gravity
     *
     * @return int
     *
     * @link http://www.php.net/manual/en/imagick.getgravity.php
     */
    public function getgravity()
    {
    }

    public static function gethdrienabled()
    {
    }

    /**
     * Returns the ImageMagick home URL
     *
     * @return string
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.gethomeurl.php
     */
    public static function gethomeurl()
    {
    }

    /**
     * Returns a new Imagick object
     *
     * @return Imagick
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimage.php
     */
    public function getimage()
    {
    }

    /**
     * Gets the image alpha channel
     *
     * @return int
     *
     * @link http://www.php.net/manual/en/imagick.getimagealphachannel.php
     */
    public function getimagealphachannel()
    {
    }

    /**
     * Get image artifact
     *
     * @param mixed $artifact
     *
     * @return string
     *
     * @link http://www.php.net/manual/en/imagick.getimageartifact.php
     */
    public function getimageartifact($artifact)
    {
    }

    /**
     * Description
     *
     * @param mixed $key
     *
     * @return string
     *
     * @link http://www.php.net/manual/en/imagick.getimageattribute.php
     */
    public function getimageattribute($key)
    {
    }

    /**
     * Returns the image background color
     *
     * @return ImagickPixel
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagebackgroundcolor.php
     */
    public function getimagebackgroundcolor()
    {
    }

    /**
     * Returns the image sequence as a blob
     *
     * @return string
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageblob.php
     */
    public function getimageblob()
    {
    }

    /**
     * Returns the chromaticy blue primary point
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageblueprimary.php
     */
    public function getimageblueprimary()
    {
    }

    /**
     * Returns the image border color
     *
     * @return ImagickPixel
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagebordercolor.php
     */
    public function getimagebordercolor()
    {
    }

    /**
     * Gets the depth for a particular image channel
     *
     * @param mixed $CHANNEL
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagechanneldepth.php
     */
    public function getimagechanneldepth($CHANNEL)
    {
    }

    /**
     * Compares image channels of an image to a reconstructed image
     *
     * @param Imagick $Imagick
     * @param mixed $CHANNEL
     * @param mixed $METRIC
     *
     * @return float
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagechanneldistortion.php
     */
    public function getimagechanneldistortion(Imagick $Imagick, $CHANNEL, $METRIC)
    {
    }

    /**
     * Gets channel distortions
     *
     * @param Imagick $Imagick
     * @param mixed|null $METRICTYPE
     * @param mixed|null $CHANNEL
     *
     * @return float
     *
     * @link http://www.php.net/manual/en/imagick.getimagechanneldistortions.php
     */
    public function getimagechanneldistortions(Imagick $Imagick, $METRICTYPE = null, $CHANNEL = null)
    {
    }

    /**
     * Gets the extrema for one or more image channels
     *
     * @param mixed $CHANNEL
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagechannelextrema.php
     */
    public function getimagechannelextrema($CHANNEL)
    {
    }

    /**
     * The getImageChannelKurtosis purpose
     *
     * @param mixed|null $CHANNEL
     *
     * @return array
     *
     * @link http://www.php.net/manual/en/imagick.getimagechannelkurtosis.php
     */
    public function getimagechannelkurtosis($CHANNEL = null)
    {
    }

    /**
     * Gets the mean and standard deviation
     *
     * @param mixed $CHANNEL
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagechannelmean.php
     */
    public function getimagechannelmean($CHANNEL)
    {
    }

    /**
     * Gets channel range
     *
     * @param mixed $CHANNEL
     *
     * @return array
     *
     * @since PECL imagick 2.2.1
     *
     * @link http://www.php.net/manual/en/imagick.getimagechannelrange.php
     */
    public function getimagechannelrange($CHANNEL)
    {
    }

    /**
     * Returns statistics for each channel in the image
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagechannelstatistics.php
     */
    public function getimagechannelstatistics()
    {
    }

    /**
     * Gets image clip mask
     *
     * @return Imagick
     *
     * @link http://www.php.net/manual/en/imagick.getimageclipmask.php
     */
    public function getimageclipmask()
    {
    }

    /**
     * Returns the color of the specified colormap index
     *
     * @param mixed $index
     *
     * @return ImagickPixel
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagecolormapcolor.php
     */
    public function getimagecolormapcolor($index)
    {
    }

    /**
     * Gets the number of unique colors in the image
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagecolors.php
     */
    public function getimagecolors()
    {
    }

    /**
     * Gets the image colorspace
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagecolorspace.php
     */
    public function getimagecolorspace()
    {
    }

    /**
     * Returns the composite operator associated with the image
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagecompose.php
     */
    public function getimagecompose()
    {
    }

    /**
     * Gets the current image's compression type
     *
     * @return int
     *
     * @since PECL imagick 2.2.2
     *
     * @link http://www.php.net/manual/en/imagick.getimagecompression.php
     */
    public function getimagecompression()
    {
    }

    /**
     * Gets the current image's compression quality
     *
     * @return int
     *
     * @since PECL imagick 2.2.2
     *
     * @link http://www.php.net/manual/en/imagick.getimagecompressionquality.php
     */
    public function getimagecompressionquality()
    {
    }

    /**
     * Gets the image delay
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagedelay.php
     */
    public function getimagedelay()
    {
    }

    /**
     * Gets the image depth
     *
     * @return int
     *
     * @link http://www.php.net/manual/en/imagick.getimagedepth.php
     */
    public function getimagedepth()
    {
    }

    /**
     * Gets the image disposal method
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagedispose.php
     */
    public function getimagedispose()
    {
    }

    /**
     * Compares an image to a reconstructed image
     *
     * @param Imagick $Imagick
     * @param mixed $METRIC
     *
     * @return float
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagedistortion.php
     */
    public function getimagedistortion(Imagick $Imagick, $METRIC)
    {
    }

    /**
     * Gets the extrema for the image
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageextrema.php
     */
    public function getimageextrema()
    {
    }

    /**
     * Returns the filename of a particular image in a sequence
     *
     * @return string
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagefilename.php
     */
    public function getimagefilename()
    {
    }

    /**
     * Returns the format of a particular image in a sequence
     *
     * @return string
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageformat.php
     */
    public function getimageformat()
    {
    }

    /**
     * Gets the image gamma
     *
     * @return float
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagegamma.php
     */
    public function getimagegamma()
    {
    }

    /**
     * Gets the width and height as an associative array
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagegeometry.php
     */
    public function getimagegeometry()
    {
    }

    /**
     * Gets the image gravity
     *
     * @return int
     *
     * @link http://www.php.net/manual/en/imagick.getimagegravity.php
     */
    public function getimagegravity()
    {
    }

    /**
     * Returns the chromaticy green primary point
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagegreenprimary.php
     */
    public function getimagegreenprimary()
    {
    }

    /**
     * Returns the image height
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageheight.php
     */
    public function getimageheight()
    {
    }

    /**
     * Gets the image histogram
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagehistogram.php
     */
    public function getimagehistogram()
    {
    }

    /**
     * Gets the index of the current active image
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageindex.php
     */
    public function getimageindex()
    {
    }

    /**
     * Gets the image interlace scheme
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageinterlacescheme.php
     */
    public function getimageinterlacescheme()
    {
    }

    /**
     * Returns the interpolation method
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageinterpolatemethod.php
     */
    public function getimageinterpolatemethod()
    {
    }

    /**
     * Gets the image iterations
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageiterations.php
     */
    public function getimageiterations()
    {
    }

    /**
     * Returns the image length in bytes
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagelength.php
     */
    public function getimagelength()
    {
    }

    /**
     * Return if the image has a matte channel
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagematte.php
     */
    public function getimagematte()
    {
    }

    /**
     * Returns the image matte color
     *
     * @return ImagickPixel
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagemattecolor.php
     */
    public function getimagemattecolor()
    {
    }

    /**
     * Description
     *
     * @return string
     *
     * @link http://www.php.net/manual/en/imagick.getimagemimetype.php
     */
    public function getimagemimetype()
    {
    }

    /**
     * Gets the image orientation
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageorientation.php
     */
    public function getimageorientation()
    {
    }

    /**
     * Returns the page geometry
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagepage.php
     */
    public function getimagepage()
    {
    }

    /**
     * Returns the color of the specified pixel
     *
     * @param mixed $x
     * @param mixed $y
     *
     * @return ImagickPixel
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagepixelcolor.php
     */
    public function getimagepixelcolor($x, $y)
    {
    }

    /**
     * Returns the named image profile
     *
     * @param mixed $name
     *
     * @return string
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageprofile.php
     */
    public function getimageprofile($name)
    {
    }

    /**
     * Returns the image profiles
     *
     * @param mixed|null $pattern
     * @param mixed|null $values
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageprofiles.php
     */
    public function getimageprofiles($pattern = null, $values = null)
    {
    }

    /**
     * Returns the image properties
     *
     * @param mixed|null $pattern
     * @param mixed|null $values
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageproperties.php
     */
    public function getimageproperties($pattern = null, $values = null)
    {
    }

    /**
     * Returns the named image property
     *
     * @param mixed $name
     *
     * @return string
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageproperty.php
     */
    public function getimageproperty($name)
    {
    }

    /**
     * Returns the chromaticity red primary point
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageredprimary.php
     */
    public function getimageredprimary()
    {
    }

    /**
     * Extracts a region of the image
     *
     * @param mixed $width
     * @param mixed $height
     * @param mixed $x
     * @param mixed $y
     *
     * @return Imagick
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageregion.php
     */
    public function getimageregion($width, $height, $x, $y)
    {
    }

    /**
     * Gets the image rendering intent
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagerenderingintent.php
     */
    public function getimagerenderingintent()
    {
    }

    /**
     * Gets the image X and Y resolution
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageresolution.php
     */
    public function getimageresolution()
    {
    }

    /**
     * Returns all image sequences as a blob
     *
     * @return string
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagesblob.php
     */
    public function getimagesblob()
    {
    }

    /**
     * Gets the image scene
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagescene.php
     */
    public function getimagescene()
    {
    }

    /**
     * Generates an SHA-256 message digest
     *
     * @return string
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagesignature.php
     */
    public function getimagesignature()
    {
    }

    /**
     * Returns the image length in bytes
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagesize.php
     */
    public function getimagesize()
    {
    }

    /**
     * Gets the image ticks-per-second
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagetickspersecond.php
     */
    public function getimagetickspersecond()
    {
    }

    /**
     * Gets the image total ink density
     *
     * @return float
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagetotalinkdensity.php
     */
    public function getimagetotalinkdensity()
    {
    }

    /**
     * Gets the potential image type
     *
     * @return int
     *
     * @link http://www.php.net/manual/en/imagick.getimagetype.php
     */
    public function getimagetype()
    {
    }

    /**
     * Gets the image units of resolution
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimageunits.php
     */
    public function getimageunits()
    {
    }

    /**
     * Returns the virtual pixel method
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagevirtualpixelmethod.php
     */
    public function getimagevirtualpixelmethod()
    {
    }

    /**
     * Returns the chromaticity white point
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagewhitepoint.php
     */
    public function getimagewhitepoint()
    {
    }

    /**
     * Returns the image width
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getimagewidth.php
     */
    public function getimagewidth()
    {
    }

    /**
     * Gets the object interlace scheme
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getinterlacescheme.php
     */
    public function getinterlacescheme()
    {
    }

    /**
     * Gets the index of the current active image
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getiteratorindex.php
     */
    public function getiteratorindex()
    {
    }

    /**
     * Returns the number of images in the object
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getnumberimages.php
     */
    public function getnumberimages()
    {
    }

    /**
     * Returns a value associated with the specified key
     *
     * @param mixed $key
     *
     * @return string
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getoption.php
     */
    public function getoption($key)
    {
    }

    /**
     * Returns the ImageMagick package name
     *
     * @return string
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getpackagename.php
     */
    public static function getpackagename()
    {
    }

    /**
     * Returns the page geometry
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getpage.php
     */
    public function getpage()
    {
    }

    /**
     * Returns a MagickPixelIterator
     *
     * @return ImagickPixelIterator
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getpixeliterator.php
     */
    public function getpixeliterator()
    {
    }

    /**
     * Get an ImagickPixelIterator for an image section
     *
     * @param mixed $x
     * @param mixed $y
     * @param mixed $columns
     * @param mixed $rows
     * @param mixed $modify
     *
     * @return ImagickPixelIterator
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getpixelregioniterator.php
     */
    public function getpixelregioniterator($x, $y, $columns, $rows, $modify)
    {
    }

    /**
     * Gets point size
     *
     * @return float
     *
     * @link http://www.php.net/manual/en/imagick.getpointsize.php
     */
    public function getpointsize()
    {
    }

    /**
     * Description
     *
     * @return int
     *
     * @link http://www.php.net/manual/en/imagick.getquantum.php
     */
    public static function getquantum()
    {
    }

    /**
     * Gets the quantum depth
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getquantumdepth.php
     */
    public static function getquantumdepth()
    {
    }

    /**
     * Returns the Imagick quantum range
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getquantumrange.php
     */
    public static function getquantumrange()
    {
    }

    /**
     * Description
     *
     * @param mixed $key
     *
     * @return string
     *
     * @link http://www.php.net/manual/en/imagick.getregistry.php
     */
    public static function getregistry($key)
    {
    }

    /**
     * Returns the ImageMagick release date
     *
     * @return string
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getreleasedate.php
     */
    public static function getreleasedate()
    {
    }

    /**
     * Returns the specified resource's memory usage
     *
     * @param mixed $resource_type
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getresource.php
     */
    public static function getresource($resource_type)
    {
    }

    /**
     * Returns the specified resource limit
     *
     * @param mixed $resource_type
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getresourcelimit.php
     */
    public static function getresourcelimit($resource_type)
    {
    }

    /**
     * Gets the horizontal and vertical sampling factor
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getsamplingfactors.php
     */
    public function getsamplingfactors()
    {
    }

    /**
     * Returns the size associated with the Imagick object
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getsize.php
     */
    public function getsize()
    {
    }

    /**
     * Returns the size offset
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getsizeoffset.php
     */
    public function getsizeoffset()
    {
    }

    /**
     * Returns the ImageMagick API version
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.getversion.php
     */
    public static function getversion()
    {
    }

    /**
     * Replaces colors in the image
     *
     * @param Imagick $Imagick
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.haldclutimage.php
     */
    public function haldclutimage(Imagick $Imagick, $CHANNEL = null)
    {
    }

    /**
     * Checks if the object has more images
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.hasnextimage.php
     */
    public function hasnextimage()
    {
    }

    /**
     * Checks if the object has a previous image
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.haspreviousimage.php
     */
    public function haspreviousimage()
    {
    }

    /**
     * Description
     *
     * @param mixed $embedText
     *
     * @return string
     *
     * @link http://www.php.net/manual/en/imagick.identifyformat.php
     */
    public function identifyformat($embedText)
    {
    }

    /**
     * Identifies an image and fetches attributes
     *
     * @param mixed|null $appendRawOutput
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.identifyimage.php
     */
    public function identifyimage($appendRawOutput = null)
    {
    }

    /**
     * Creates a new image as a copy
     *
     * @param mixed $radius
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.implodeimage.php
     */
    public function implodeimage($radius)
    {
    }

    /**
     * Imports image pixels
     *
     * @param mixed $x
     * @param mixed $y
     * @param mixed $width
     * @param mixed $height
     * @param mixed $map
     * @param mixed $storage
     * @param mixed $PIXEL
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.importimagepixels.php
     */
    public function importimagepixels($x, $y, $width, $height, $map, $storage, $PIXEL)
    {
    }

    /**
     * Description
     *
     * @param mixed $complement
     * @param mixed $magnitude
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.inversefouriertransformimage.php
     */
    public function inversefouriertransformimage($complement, $magnitude)
    {
    }

    public function key()
    {
    }

    /**
     * Adds a label to an image
     *
     * @param mixed $label
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.labelimage.php
     */
    public function labelimage($label)
    {
    }

    /**
     * Adjusts the levels of an image
     *
     * @param mixed $blackPoint
     * @param mixed $gamma
     * @param mixed $whitePoint
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.levelimage.php
     */
    public function levelimage($blackPoint, $gamma, $whitePoint, $CHANNEL = null)
    {
    }

    /**
     * Stretches with saturation the image intensity
     *
     * @param mixed $blackPoint
     * @param mixed $whitePoint
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.linearstretchimage.php
     */
    public function linearstretchimage($blackPoint, $whitePoint)
    {
    }

    /**
     * Animates an image or images
     *
     * @param mixed $columns
     * @param mixed $rows
     * @param mixed $delta_x
     * @param mixed $rigidity
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.liquidrescaleimage.php
     */
    public function liquidrescaleimage($columns, $rows, $delta_x, $rigidity)
    {
    }

    /**
     * Description
     *
     * @return array
     *
     * @link http://www.php.net/manual/en/imagick.listregistry.php
     */
    public static function listregistry()
    {
    }

    /**
     * Scales an image proportionally 2x
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.magnifyimage.php
     */
    public function magnifyimage()
    {
    }

    /**
     * Replaces the colors of an image with the closest color from a reference image
     *
     * @param Imagick $Imagick
     * @param mixed $dither
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.mapimage.php
     */
    public function mapimage(Imagick $Imagick, $dither)
    {
    }

    /**
     * Changes the transparency value of a color
     *
     * @param mixed $alpha
     * @param mixed $fuzz
     * @param mixed $color
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.mattefloodfillimage.php
     */
    public function mattefloodfillimage($alpha, $fuzz, $color, $x, $y)
    {
    }

    /**
     * Applies a digital filter
     *
     * @param mixed $radius
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.medianfilterimage.php
     */
    public function medianfilterimage($radius)
    {
    }

    /**
     * Merges image layers
     *
     * @param mixed $LAYERMETHOD
     *
     * @return Imagick
     *
     * @since PECL imagick 2.1.0
     *
     * @link http://www.php.net/manual/en/imagick.mergeimagelayers.php
     */
    public function mergeimagelayers($LAYERMETHOD)
    {
    }

    /**
     * Scales an image proportionally to half its size
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.minifyimage.php
     */
    public function minifyimage()
    {
    }

    /**
     * Control the brightness, saturation, and hue
     *
     * @param mixed $brightness
     * @param mixed $saturation
     * @param mixed $hue
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.modulateimage.php
     */
    public function modulateimage($brightness, $saturation, $hue)
    {
    }

    /**
     * Creates a composite image
     *
     * @param ImagickDraw $ImagickDraw
     * @param mixed $tileGeometry
     * @param mixed $thumbnailGeometry
     * @param mixed $MONTAGEMODE
     * @param mixed $frame
     *
     * @return Imagick
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.montageimage.php
     */
    public function montageimage(ImagickDraw $ImagickDraw, $tileGeometry, $thumbnailGeometry, $MONTAGEMODE, $frame)
    {
    }

    /**
     * Method morphs a set of images
     *
     * @param mixed $frames
     *
     * @return Imagick
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.morphimages.php
     */
    public function morphimages($frames)
    {
    }

    /**
     * Description
     *
     * @param mixed $morphologyMethod
     * @param mixed $iterations
     * @param ImagickKernel $ImagickKernel
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.morphology.php
     */
    public function morphology($morphologyMethod, $iterations, ImagickKernel $ImagickKernel, $CHANNEL = null)
    {
    }

    /**
     * Forms a mosaic from images
     *
     * @return Imagick
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.mosaicimages.php
     */
    public function mosaicimages()
    {
    }

    /**
     * Simulates motion blur
     *
     * @param mixed $radius
     * @param mixed $sigma
     * @param mixed $angle
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.motionblurimage.php
     */
    public function motionblurimage($radius, $sigma, $angle, $CHANNEL = null)
    {
    }

    /**
     * Negates the colors in the reference image
     *
     * @param mixed $gray
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.negateimage.php
     */
    public function negateimage($gray, $CHANNEL = null)
    {
    }

    /**
     * Creates a new image
     *
     * @param mixed $columns
     * @param mixed $rows
     * @param mixed $background_color
     * @param mixed|null $format
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.newimage.php
     */
    public function newimage($columns, $rows, $background_color, $format = null)
    {
    }

    /**
     * Creates a new image
     *
     * @param mixed $columns
     * @param mixed $rows
     * @param mixed $pseudoString
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.newpseudoimage.php
     */
    public function newpseudoimage($columns, $rows, $pseudoString)
    {
    }

    public function next()
    {
    }

    /**
     * Moves to the next image
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.nextimage.php
     */
    public function nextimage()
    {
    }

    /**
     * Enhances the contrast of a color image
     *
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.normalizeimage.php
     */
    public function normalizeimage($CHANNEL = null)
    {
    }

    /**
     * Simulates an oil painting
     *
     * @param mixed $radius
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.oilpaintimage.php
     */
    public function oilpaintimage($radius)
    {
    }

    /**
     * Changes the color value of any pixel that matches target
     *
     * @param mixed $target
     * @param mixed $fill
     * @param mixed $fuzz
     * @param mixed $invert
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.opaquepaintimage.php
     */
    public function opaquepaintimage($target, $fill, $fuzz, $invert, $CHANNEL = null)
    {
    }

    /**
     * Removes repeated portions of images to optimize
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.optimizeimagelayers.php
     */
    public function optimizeimagelayers()
    {
    }

    /**
     * Performs an ordered dither
     *
     * @param mixed $threshold_map
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @since PECL imagick 2.2.2
     *
     * @link http://www.php.net/manual/en/imagick.orderedposterizeimage.php
     */
    public function orderedposterizeimage($threshold_map, $CHANNEL = null)
    {
    }

    /**
     * Changes the color value of any pixel that matches target
     *
     * @param mixed $CHANNEL
     * @param mixed $fill
     * @param mixed $fuzz
     * @param mixed $bordercolor
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.1.0
     *
     * @link http://www.php.net/manual/en/imagick.paintfloodfillimage.php
     */
    public function paintfloodfillimage($CHANNEL, $fill, $fuzz, $bordercolor, $x, $y)
    {
    }

    /**
     * Change any pixel that matches color
     *
     * @param mixed $target_color
     * @param mixed $fill_color
     * @param mixed $fuzz
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.paintopaqueimage.php
     */
    public function paintopaqueimage($target_color, $fill_color, $fuzz, $CHANNEL = null)
    {
    }

    /**
     * Changes any pixel that matches color with the color defined by fill
     *
     * @param mixed $target_color
     * @param mixed $alpha
     * @param mixed $fuzz
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.painttransparentimage.php
     */
    public function painttransparentimage($target_color, $alpha, $fuzz)
    {
    }

    /**
     * Fetch basic attributes about the image
     *
     * @param mixed $filename
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.pingimage.php
     */
    public function pingimage($filename)
    {
    }

    /**
     * Quickly fetch attributes
     *
     * @param mixed $imageContents
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.pingimageblob.php
     */
    public function pingimageblob($imageContents)
    {
    }

    /**
     * Get basic image attributes in a lightweight manner
     *
     * @param mixed $fp
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.pingimagefile.php
     */
    public function pingimagefile($fp)
    {
    }

    /**
     * Simulates a Polaroid picture
     *
     * @param ImagickDraw $ImagickDraw
     * @param mixed $angle
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.polaroidimage.php
     */
    public function polaroidimage(ImagickDraw $ImagickDraw, $angle)
    {
    }

    /**
     * Reduces the image to a limited number of color level
     *
     * @param mixed $levels
     * @param mixed $dither
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.posterizeimage.php
     */
    public function posterizeimage($levels, $dither)
    {
    }

    /**
     * Quickly pin-point appropriate parameters for image processing
     *
     * @param mixed $PREVIEW
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.previewimages.php
     */
    public function previewimages($PREVIEW)
    {
    }

    /**
     * Move to the previous image in the object
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.previousimage.php
     */
    public function previousimage()
    {
    }

    /**
     * Adds or removes a profile from an image
     *
     * @param mixed $name
     * @param mixed $profile
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.profileimage.php
     */
    public function profileimage($name, $profile)
    {
    }

    /**
     * Analyzes the colors within a reference image
     *
     * @param mixed $numColors
     * @param mixed $COLORSPACE
     * @param mixed $treeDepth
     * @param mixed $dither
     * @param mixed $measureError
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.quantizeimage.php
     */
    public function quantizeimage($numColors, $COLORSPACE, $treeDepth, $dither, $measureError)
    {
    }

    /**
     * Analyzes the colors within a sequence of images
     *
     * @param mixed $numColors
     * @param mixed $COLORSPACE
     * @param mixed $treeDepth
     * @param mixed $dither
     * @param mixed $measureError
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.quantizeimages.php
     */
    public function quantizeimages($numColors, $COLORSPACE, $treeDepth, $dither, $measureError)
    {
    }

    /**
     * Returns an array representing the font metrics
     *
     * @param ImagickDraw $ImagickDraw
     * @param mixed $text
     * @param mixed|null $multiline
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.queryfontmetrics.php
     */
    public function queryfontmetrics(ImagickDraw $ImagickDraw, $text, $multiline = null)
    {
    }

    /**
     * Returns the configured fonts
     *
     * @param mixed $pattern
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.queryfonts.php
     */
    public static function queryfonts($pattern)
    {
    }

    /**
     * Returns formats supported by Imagick
     *
     * @param mixed $pattern
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.queryformats.php
     */
    public static function queryformats($pattern)
    {
    }

    /**
     * Radial blurs an image
     *
     * @param mixed $angle
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.radialblurimage.php
     */
    public function radialblurimage($angle, $CHANNEL = null)
    {
    }

    /**
     * Creates a simulated 3d button-like effect
     *
     * @param mixed $width
     * @param mixed $height
     * @param mixed $x
     * @param mixed $y
     * @param mixed $raise
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.raiseimage.php
     */
    public function raiseimage($width, $height, $x, $y, $raise)
    {
    }

    /**
     * Creates a high-contrast, two-color image
     *
     * @param mixed $low
     * @param mixed $high
     * @param mixed|null $CHANNELTYPE
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.randomthresholdimage.php
     */
    public function randomthresholdimage($low, $high, $CHANNELTYPE = null)
    {
    }

    /**
     * Reads image from filename
     *
     * @param mixed $filename
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.readimage.php
     */
    public function readimage($filename)
    {
    }

    /**
     * Reads image from a binary string
     *
     * @param mixed $imageContents
     * @param mixed|null $filename
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.readimageblob.php
     */
    public function readimageblob($imageContents, $filename = null)
    {
    }

    /**
     * Reads image from open filehandle
     *
     * @param mixed $fp
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.readimagefile.php
     */
    public function readimagefile($fp)
    {
    }

    /**
     * Description
     *
     * @param mixed $filenames
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.readimages.php
     */
    public function readimages($filenames)
    {
    }

    /**
     * Recolors image
     *
     * @param mixed $matrix
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.recolorimage.php
     */
    public function recolorimage($matrix)
    {
    }

    /**
     * Smooths the contours of an image
     *
     * @param mixed $radius
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.reducenoiseimage.php
     */
    public function reducenoiseimage($radius)
    {
    }

    /**
     * Remaps image colors
     *
     * @param Imagick $Imagick
     * @param mixed $DITHER
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.remapimage.php
     */
    public function remapimage(Imagick $Imagick, $DITHER)
    {
    }

    /**
     * Removes an image from the image list
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.removeimage.php
     */
    public function removeimage()
    {
    }

    /**
     * Removes the named image profile and returns it
     *
     * @param mixed $name
     *
     * @return string
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.removeimageprofile.php
     */
    public function removeimageprofile($name)
    {
    }

    /**
     * Resample image to desired resolution
     *
     * @param mixed $xResolution
     * @param mixed $yResolution
     * @param mixed $FILTER
     * @param mixed $blur
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.resampleimage.php
     */
    public function resampleimage($xResolution, $yResolution, $FILTER, $blur)
    {
    }

    /**
     * Reset image page
     *
     * @param mixed $page
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.resetimagepage.php
     */
    public function resetimagepage($page)
    {
    }

    public function resetiterator()
    {
    }

    /**
     * Scales an image
     *
     * @param mixed $x
     * @param mixed $y
     * @param mixed|null $filter
     * @param mixed|null $blur
     * @param mixed|null $bestfit
     * @param mixed|null $legacy
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.resizeimage.php
     */
    public function resizeimage($x, $y, $filter = null, $blur = null, $bestfit = null, $legacy = null)
    {
    }

    public function rewind()
    {
    }

    /**
     * Offsets an image
     *
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.rollimage.php
     */
    public function rollimage($x, $y)
    {
    }

    /**
     * Rotates an image
     *
     * @param mixed $color
     * @param mixed $degrees
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.rotateimage.php
     */
    public function rotateimage($color, $degrees)
    {
    }

    /**
     * Description
     *
     * @param mixed $angle
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.rotationalblurimage.php
     */
    public function rotationalblurimage($angle, $CHANNEL = null)
    {
    }

    /**
     * Rounds image corners
     *
     * @param mixed $xRounding
     * @param mixed $yRounding
     * @param mixed|null $strokeWidth
     * @param mixed|null $displace
     * @param mixed|null $sizeCorrection
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.roundcorners.php
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
     * Scales an image with pixel sampling
     *
     * @param mixed $columns
     * @param mixed $rows
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.sampleimage.php
     */
    public function sampleimage($columns, $rows)
    {
    }

    /**
     * Scales the size of an image
     *
     * @param mixed $width
     * @param mixed $height
     * @param mixed|null $bestfit
     * @param mixed|null $legacy
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.scaleimage.php
     */
    public function scaleimage($width, $height, $bestfit = null, $legacy = null)
    {
    }

    /**
     * Segments an image
     *
     * @param mixed $COLORSPACE
     * @param mixed $cluster_threshold
     * @param mixed $smooth_threshold
     * @param mixed|null $verbose
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.segmentimage.php
     */
    public function segmentimage($COLORSPACE, $cluster_threshold, $smooth_threshold, $verbose = null)
    {
    }

    /**
     * Description
     *
     * @param mixed $radius
     * @param mixed $sigma
     * @param mixed $threshold
     * @param mixed $CHANNEL
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.selectiveblurimage.php
     */
    public function selectiveblurimage($radius, $sigma, $threshold, $CHANNEL)
    {
    }

    /**
     * Separates a channel from the image
     *
     * @param mixed $CHANNEL
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.separateimagechannel.php
     */
    public function separateimagechannel($CHANNEL)
    {
    }

    /**
     * Sepia tones an image
     *
     * @param mixed $threshold
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.sepiatoneimage.php
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
     * Sets the object's default background color
     *
     * @param mixed $color
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setbackgroundcolor.php
     */
    public function setbackgroundcolor($color)
    {
    }

    /**
     * Set colorspace
     *
     * @param mixed $COLORSPACE
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.setcolorspace.php
     */
    public function setcolorspace($COLORSPACE)
    {
    }

    /**
     * Sets the object's default compression type
     *
     * @param mixed $compression
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setcompression.php
     */
    public function setcompression($compression)
    {
    }

    /**
     * Sets the object's default compression quality
     *
     * @param mixed $compressionquality
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.setcompressionquality.php
     */
    public function setcompressionquality($compressionquality)
    {
    }

    /**
     * Sets the filename before you read or write the image
     *
     * @param mixed $filename
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setfilename.php
     */
    public function setfilename($filename)
    {
    }

    /**
     * Sets the Imagick iterator to the first image
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setfirstiterator.php
     */
    public function setfirstiterator()
    {
    }

    /**
     * Sets font
     *
     * @param mixed $font
     *
     * @return bool
     *
     * @since PECL imagick 2.1.0
     *
     * @link http://www.php.net/manual/en/imagick.setfont.php
     */
    public function setfont($font)
    {
    }

    /**
     * Sets the format of the Imagick object
     *
     * @param mixed $format
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setformat.php
     */
    public function setformat($format)
    {
    }

    /**
     * Sets the gravity
     *
     * @param mixed $GRAVITY
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.setgravity.php
     */
    public function setgravity($GRAVITY)
    {
    }

    /**
     * Replaces image in the object
     *
     * @param Imagick $Imagick
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimage.php
     */
    public function setimage(Imagick $Imagick)
    {
    }

    /**
     * Sets image alpha channel
     *
     * @param mixed $ALPHACHANNELTYPE
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.setimagealphachannel.php
     */
    public function setimagealphachannel($ALPHACHANNELTYPE)
    {
    }

    /**
     * Set image artifact
     *
     * @param mixed $artifact
     * @param mixed $value
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.setimageartifact.php
     */
    public function setimageartifact($artifact, $value)
    {
    }

    /**
     * Description
     *
     * @param mixed $key
     * @param mixed $value
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.setimageattribute.php
     */
    public function setimageattribute($key, $value)
    {
    }

    /**
     * Sets the image background color
     *
     * @param mixed $color
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagebackgroundcolor.php
     */
    public function setimagebackgroundcolor($color)
    {
    }

    /**
     * Sets the image bias for any method that convolves an image
     *
     * @param mixed $bias
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagebias.php
     */
    public function setimagebias($bias)
    {
    }

    /**
     * Description
     *
     * @param mixed $bias
     *
     * @return void
     *
     * @link http://www.php.net/manual/en/imagick.setimagebiasquantum.php
     */
    public function setimagebiasquantum($bias)
    {
    }

    /**
     * Sets the image chromaticity blue primary point
     *
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageblueprimary.php
     */
    public function setimageblueprimary($x, $y)
    {
    }

    /**
     * Sets the image border color
     *
     * @param mixed $color
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagebordercolor.php
     */
    public function setimagebordercolor($color)
    {
    }

    /**
     * Sets the depth of a particular image channel
     *
     * @param mixed $CHANNEL
     * @param mixed $depth
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagechanneldepth.php
     */
    public function setimagechanneldepth($CHANNEL, $depth)
    {
    }

    /**
     * Sets image clip mask
     *
     * @param Imagick $Imagick
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.setimageclipmask.php
     */
    public function setimageclipmask(Imagick $Imagick)
    {
    }

    /**
     * Sets the color of the specified colormap index
     *
     * @param mixed $index
     * @param mixed $color
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagecolormapcolor.php
     */
    public function setimagecolormapcolor($index, $color)
    {
    }

    /**
     * Sets the image colorspace
     *
     * @param mixed $COLORSPACE
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagecolorspace.php
     */
    public function setimagecolorspace($COLORSPACE)
    {
    }

    /**
     * Sets the image composite operator
     *
     * @param mixed $COMPOSITE
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagecompose.php
     */
    public function setimagecompose($COMPOSITE)
    {
    }

    /**
     * Sets the image compression
     *
     * @param mixed $COMPRESSION
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagecompression.php
     */
    public function setimagecompression($COMPRESSION)
    {
    }

    /**
     * Sets the image compression quality
     *
     * @param mixed $quality
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.setimagecompressionquality.php
     */
    public function setimagecompressionquality($quality)
    {
    }

    /**
     * Sets the image delay
     *
     * @param mixed $delay
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagedelay.php
     */
    public function setimagedelay($delay)
    {
    }

    /**
     * Sets the image depth
     *
     * @param mixed $depth
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagedepth.php
     */
    public function setimagedepth($depth)
    {
    }

    /**
     * Sets the image disposal method
     *
     * @param mixed $DISPOSETYPE
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagedispose.php
     */
    public function setimagedispose($DISPOSETYPE)
    {
    }

    /**
     * Sets the image size
     *
     * @param mixed $columns
     * @param mixed $rows
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageextent.php
     */
    public function setimageextent($columns, $rows)
    {
    }

    /**
     * Sets the filename of a particular image
     *
     * @param mixed $filename
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagefilename.php
     */
    public function setimagefilename($filename)
    {
    }

    /**
     * Sets the format of a particular image
     *
     * @param mixed $imageFormat
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageformat.php
     */
    public function setimageformat($imageFormat)
    {
    }

    /**
     * Sets the image gamma
     *
     * @param mixed $gamma
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagegamma.php
     */
    public function setimagegamma($gamma)
    {
    }

    /**
     * Sets the image gravity
     *
     * @param mixed $GRAVITY
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.setimagegravity.php
     */
    public function setimagegravity($GRAVITY)
    {
    }

    /**
     * Sets the image chromaticity green primary point
     *
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagegreenprimary.php
     */
    public function setimagegreenprimary($x, $y)
    {
    }

    /**
     * Set the iterator position
     *
     * @param mixed $index
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageindex.php
     */
    public function setimageindex($index)
    {
    }

    /**
     * Sets the image compression
     *
     * @param mixed $INTERLACE
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageinterlacescheme.php
     */
    public function setimageinterlacescheme($INTERLACE)
    {
    }

    /**
     * Sets the image interpolate pixel method
     *
     * @param mixed $INTERPOLATE
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageinterpolatemethod.php
     */
    public function setimageinterpolatemethod($INTERPOLATE)
    {
    }

    /**
     * Sets the image iterations
     *
     * @param mixed $iterations
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageiterations.php
     */
    public function setimageiterations($iterations)
    {
    }

    /**
     * Sets the image matte channel
     *
     * @param mixed $enable
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagematte.php
     */
    public function setimagematte($enable)
    {
    }

    /**
     * Sets the image matte color
     *
     * @param mixed $color
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagemattecolor.php
     */
    public function setimagemattecolor($color)
    {
    }

    /**
     * Sets the image opacity level
     *
     * @param mixed $opacity
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageopacity.php
     */
    public function setimageopacity($opacity)
    {
    }

    /**
     * Sets the image orientation
     *
     * @param mixed $ORIENTATION
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageorientation.php
     */
    public function setimageorientation($ORIENTATION)
    {
    }

    /**
     * Sets the page geometry of the image
     *
     * @param mixed $width
     * @param mixed $height
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagepage.php
     */
    public function setimagepage($width, $height, $x, $y)
    {
    }

    /**
     * Adds a named profile to the Imagick object
     *
     * @param mixed $name
     * @param mixed $profile
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageprofile.php
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
     * Sets an image property
     *
     * @param mixed $name
     * @param mixed $value
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageproperty.php
     */
    public function setimageproperty($name, $value)
    {
    }

    /**
     * Sets the image chromaticity red primary point
     *
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageredprimary.php
     */
    public function setimageredprimary($x, $y)
    {
    }

    /**
     * Sets the image rendering intent
     *
     * @param mixed $RENDERINGINTENT
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagerenderingintent.php
     */
    public function setimagerenderingintent($RENDERINGINTENT)
    {
    }

    /**
     * Sets the image resolution
     *
     * @param mixed $xResolution
     * @param mixed $yResolution
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageresolution.php
     */
    public function setimageresolution($xResolution, $yResolution)
    {
    }

    /**
     * Sets the image scene
     *
     * @param mixed $scene
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagescene.php
     */
    public function setimagescene($scene)
    {
    }

    /**
     * Sets the image ticks-per-second
     *
     * @param mixed $ticksPerSecond
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagetickspersecond.php
     */
    public function setimagetickspersecond($ticksPerSecond)
    {
    }

    /**
     * Sets the image type
     *
     * @param mixed $IMGTYPE
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagetype.php
     */
    public function setimagetype($IMGTYPE)
    {
    }

    /**
     * Sets the image units of resolution
     *
     * @param mixed $RESOLUTION
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageunits.php
     */
    public function setimageunits($RESOLUTION)
    {
    }

    /**
     * Sets the image virtual pixel method
     *
     * @param mixed $VIRTUALPIXELMETHOD
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagevirtualpixelmethod.php
     */
    public function setimagevirtualpixelmethod($VIRTUALPIXELMETHOD)
    {
    }

    /**
     * Sets the image chromaticity white point
     *
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimagewhitepoint.php
     */
    public function setimagewhitepoint($x, $y)
    {
    }

    /**
     * Sets the image compression
     *
     * @param mixed $INTERLACE
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setinterlacescheme.php
     */
    public function setinterlacescheme($INTERLACE)
    {
    }

    /**
     * Set the iterator position
     *
     * @param mixed $index
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setiteratorindex.php
     */
    public function setiteratorindex($index)
    {
    }

    /**
     * Sets the Imagick iterator to the last image
     *
     * @return bool
     *
     * @since PECL imagick 2.0.1
     *
     * @link http://www.php.net/manual/en/imagick.setlastiterator.php
     */
    public function setlastiterator()
    {
    }

    /**
     * Set an option
     *
     * @param mixed $key
     * @param mixed $value
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setoption.php
     */
    public function setoption($key, $value)
    {
    }

    /**
     * Sets the page geometry of the Imagick object
     *
     * @param mixed $width
     * @param mixed $height
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setpage.php
     */
    public function setpage($width, $height, $x, $y)
    {
    }

    /**
     * Sets point size
     *
     * @param mixed $pointsize
     *
     * @return bool
     *
     * @since PECL imagick 2.1.0
     *
     * @link http://www.php.net/manual/en/imagick.setpointsize.php
     */
    public function setpointsize($pointsize)
    {
    }

    /**
     * Description
     *
     * @param mixed $callback
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.setprogressmonitor.php
     */
    public function setprogressmonitor($callback)
    {
    }

    /**
     * Description
     *
     * @param mixed $key
     * @param mixed $value
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.setregistry.php
     */
    public static function setregistry($key, $value)
    {
    }

    /**
     * Sets the image resolution
     *
     * @param mixed $xResolution
     * @param mixed $yResolution
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setresolution.php
     */
    public function setresolution($xResolution, $yResolution)
    {
    }

    /**
     * Sets the limit for a particular resource in megabytes
     *
     * @param mixed $RESOURCETYPE
     * @param mixed $limit
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setresourcelimit.php
     */
    public static function setresourcelimit($RESOURCETYPE, $limit)
    {
    }

    /**
     * Sets the image sampling factors
     *
     * @param mixed $factors
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setsamplingfactors.php
     */
    public function setsamplingfactors($factors)
    {
    }

    /**
     * Sets the size of the Imagick object
     *
     * @param mixed $columns
     * @param mixed $rows
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setsize.php
     */
    public function setsize($columns, $rows)
    {
    }

    /**
     * Sets the size and offset of the Imagick object
     *
     * @param mixed $columns
     * @param mixed $rows
     * @param mixed $offset
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setsizeoffset.php
     */
    public function setsizeoffset($columns, $rows, $offset)
    {
    }

    /**
     * Sets the image type attribute
     *
     * @param mixed $IMGTYPE
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.settype.php
     */
    public function settype($IMGTYPE)
    {
    }

    /**
     * Creates a 3D effect
     *
     * @param mixed $gray
     * @param mixed $azimuth
     * @param mixed $elevation
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.shadeimage.php
     */
    public function shadeimage($gray, $azimuth, $elevation)
    {
    }

    /**
     * Simulates an image shadow
     *
     * @param mixed $opacity
     * @param mixed $sigma
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.shadowimage.php
     */
    public function shadowimage($opacity, $sigma, $x, $y)
    {
    }

    /**
     * Sharpens an image
     *
     * @param mixed $radius
     * @param mixed $sigma
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.sharpenimage.php
     */
    public function sharpenimage($radius, $sigma, $CHANNEL = null)
    {
    }

    /**
     * Shaves pixels from the image edges
     *
     * @param mixed $columns
     * @param mixed $rows
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.shaveimage.php
     */
    public function shaveimage($columns, $rows)
    {
    }

    /**
     * Creating a parallelogram
     *
     * @param mixed $color
     * @param mixed $xShear
     * @param mixed $yShear
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.shearimage.php
     */
    public function shearimage($color, $xShear, $yShear)
    {
    }

    /**
     * Adjusts the contrast of an image
     *
     * @param mixed $sharpen
     * @param mixed $contrast
     * @param mixed $midpoint
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.sigmoidalcontrastimage.php
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
    public function similarityimage(Imagick $Imagick, &$offset = null, &$similarity = null, &$similarity_threshold = null, &$metric = null)
    {
    }

    /**
     * Simulates a pencil sketch
     *
     * @param mixed $radius
     * @param mixed $sigma
     * @param mixed $angle
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.sketchimage.php
     */
    public function sketchimage($radius, $sigma, $angle)
    {
    }

    /**
     * Description
     *
     * @param mixed $stack
     * @param mixed $offset
     *
     * @return Imagick
     *
     * @link http://www.php.net/manual/en/imagick.smushimages.php
     */
    public function smushimages($stack, $offset)
    {
    }

    /**
     * Applies a solarizing effect to the image
     *
     * @param mixed $threshold
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.solarizeimage.php
     */
    public function solarizeimage($threshold)
    {
    }

    /**
     * Interpolates colors
     *
     * @param mixed $SPARSE_METHOD
     * @param mixed $arguments
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.sparsecolorimage.php
     */
    public function sparsecolorimage($SPARSE_METHOD, $arguments, $CHANNEL = null)
    {
    }

    /**
     * Splices a solid color into the image
     *
     * @param mixed $width
     * @param mixed $height
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.spliceimage.php
     */
    public function spliceimage($width, $height, $x, $y)
    {
    }

    /**
     * Randomly displaces each pixel in a block
     *
     * @param mixed $radius
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.spreadimage.php
     */
    public function spreadimage($radius)
    {
    }

    /**
     * Description
     *
     * @param mixed $type
     * @param mixed $width
     * @param mixed $height
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.statisticimage.php
     */
    public function statisticimage($type, $width, $height, $CHANNEL = null)
    {
    }

    /**
     * Hides a digital watermark within the image
     *
     * @param Imagick $Imagick
     * @param mixed $offset
     *
     * @return Imagick
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.steganoimage.php
     */
    public function steganoimage(Imagick $Imagick, $offset)
    {
    }

    /**
     * Composites two images
     *
     * @param Imagick $Imagick
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.stereoimage.php
     */
    public function stereoimage(Imagick $Imagick)
    {
    }

    /**
     * Strips an image of all profiles and comments
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.stripimage.php
     */
    public function stripimage()
    {
    }

    /**
     * Description
     *
     * @param Imagick $Imagick
     * @param mixed|null $offset
     * @param mixed|null $similarity
     * @param mixed|null $similarity_threshold
     * @param mixed|null $metric
     *
     * @return Imagick
     *
     * @link http://www.php.net/manual/en/imagick.subimagematch.php
     */
    public function subimagematch(Imagick $Imagick, &$offset = null, &$similarity = null, &$similarity_threshold = null, &$metric = null)
    {
    }

    /**
     * Swirls the pixels about the center of the image
     *
     * @param mixed $degrees
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.swirlimage.php
     */
    public function swirlimage($degrees)
    {
    }

    /**
     * Repeatedly tiles the texture image
     *
     * @param Imagick $Imagick
     *
     * @return Imagick
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.textureimage.php
     */
    public function textureimage(Imagick $Imagick)
    {
    }

    /**
     * Changes the value of individual pixels based on a threshold
     *
     * @param mixed $threshold
     * @param mixed|null $CHANNELTYPE
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.thresholdimage.php
     */
    public function thresholdimage($threshold, $CHANNELTYPE = null)
    {
    }

    /**
     * Changes the size of an image
     *
     * @param mixed $width
     * @param mixed $height
     * @param mixed|null $bestfit
     * @param mixed|null $fill
     * @param mixed|null $legacy
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.thumbnailimage.php
     */
    public function thumbnailimage($width, $height, $bestfit = null, $fill = null, $legacy = null)
    {
    }

    /**
     * Applies a color vector to each pixel in the image
     *
     * @param mixed $tint_color
     * @param mixed $opacity
     * @param mixed|null $legacy
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.tintimage.php
     */
    public function tintimage($tint_color, $opacity, $legacy = null)
    {
    }

    /**
     * Convenience method for setting crop size and the image geometry
     *
     * @param mixed $crop
     * @param mixed $geometry
     *
     * @return Imagick
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.transformimage.php
     */
    public function transformimage($crop, $geometry)
    {
    }

    /**
     * Transforms an image to a new colorspace
     *
     * @param mixed $COLORSPACE
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.transformimagecolorspace.php
     */
    public function transformimagecolorspace($COLORSPACE)
    {
    }

    /**
     * Paints pixels transparent
     *
     * @param mixed $target
     * @param mixed $alpha
     * @param mixed $fuzz
     * @param mixed $invert
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.transparentpaintimage.php
     */
    public function transparentpaintimage($target, $alpha, $fuzz, $invert)
    {
    }

    /**
     * Creates a vertical mirror image
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.transposeimage.php
     */
    public function transposeimage()
    {
    }

    /**
     * Creates a horizontal mirror image
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.transverseimage.php
     */
    public function transverseimage()
    {
    }

    /**
     * Remove edges from the image
     *
     * @param mixed $fuzz
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.trimimage.php
     */
    public function trimimage($fuzz)
    {
    }

    /**
     * Discards all but one of any pixel color
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.uniqueimagecolors.php
     */
    public function uniqueimagecolors()
    {
    }

    /**
     * Sharpens an image
     *
     * @param mixed $radius
     * @param mixed $sigma
     * @param mixed $amount
     * @param mixed $threshold
     * @param mixed|null $CHANNEL
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.unsharpmaskimage.php
     */
    public function unsharpmaskimage($radius, $sigma, $amount, $threshold, $CHANNEL = null)
    {
    }

    /**
     * Checks if the current item is valid
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.valid.php
     */
    public function valid()
    {
    }

    /**
     * Adds vignette filter to the image
     *
     * @param mixed $blackPoint
     * @param mixed $whitePoint
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.vignetteimage.php
     */
    public function vignetteimage($blackPoint, $whitePoint, $x, $y)
    {
    }

    /**
     * Applies wave filter to the image
     *
     * @param mixed $amplitude
     * @param mixed $waveLenght
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.waveimage.php
     */
    public function waveimage($amplitude, $waveLenght)
    {
    }

    /**
     * Force all pixels above the threshold into white
     *
     * @param mixed $color
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.whitethresholdimage.php
     */
    public function whitethresholdimage($color)
    {
    }

    /**
     * Writes an image to the specified filename
     *
     * @param mixed|null $filename
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.writeimage.php
     */
    public function writeimage($filename = null)
    {
    }

    /**
     * Writes an image to a filehandle
     *
     * @param mixed $handle
     * @param mixed|null $format
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.writeimagefile.php
     */
    public function writeimagefile($handle, $format = null)
    {
    }

    /**
     * Writes an image or image sequence
     *
     * @param mixed $filename
     * @param mixed $adjoin
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.writeimages.php
     */
    public function writeimages($filename, $adjoin)
    {
    }

    /**
     * Writes frames to a filehandle
     *
     * @param mixed $handle
     * @param mixed|null $format
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagick.writeimagesfile.php
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
     * @param mixed $affineMatrix
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.affine.php
     */
    public function affine($affineMatrix)
    {
    }

    /**
     * Draws text on the image
     *
     * @param mixed $x
     * @param mixed $y
     * @param mixed $text
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.annotation.php
     */
    public function annotation($x, $y, $text)
    {
    }

    /**
     * Draws an arc
     *
     * @param mixed $sx
     * @param mixed $sy
     * @param mixed $ex
     * @param mixed $ey
     * @param mixed $sd
     * @param mixed $ed
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.arc.php
     */
    public function arc($sx, $sy, $ex, $ey, $sd, $ed)
    {
    }

    /**
     * Draws a bezier curve
     *
     * @param mixed $coordinateArray
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.bezier.php
     */
    public function bezier($coordinateArray)
    {
    }

    /**
     * Draws a circle
     *
     * @param mixed $ox
     * @param mixed $oy
     * @param mixed $px
     * @param mixed $py
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.circle.php
     */
    public function circle($ox, $oy, $px, $py)
    {
    }

    /**
     * Clears the ImagickDraw
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.clear.php
     */
    public function clear()
    {
    }

    /**
     * Makes an exact copy of the specified ImagickDraw object
     *
     * @return ImagickDraw
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.clone.php
     */
    public function clone()
    {
    }

    /**
     * Draws color on image
     *
     * @param mixed $x
     * @param mixed $y
     * @param mixed $PAINTMETHOD
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.color.php
     */
    public function color($x, $y, $PAINTMETHOD)
    {
    }

    /**
     * Adds a comment
     *
     * @param mixed $comment
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.comment.php
     */
    public function comment($comment)
    {
    }

    /**
     * Composites an image onto the current image
     *
     * @param mixed $COMPOSE
     * @param mixed $x
     * @param mixed $y
     * @param mixed $width
     * @param mixed $height
     * @param Imagick $Imagick
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.composite.php
     */
    public function composite($COMPOSE, $x, $y, $width, $height, Imagick $Imagick)
    {
    }

    /**
     * Frees all associated resources
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.destroy.php
     */
    public function destroy()
    {
    }

    /**
     * Draws an ellipse on the image
     *
     * @param mixed $ox
     * @param mixed $oy
     * @param mixed $px
     * @param mixed $py
     * @param mixed $start
     * @param mixed $end
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.ellipse.php
     */
    public function ellipse($ox, $oy, $px, $py, $start, $end)
    {
    }

    public function getbordercolor()
    {
    }

    /**
     * Obtains the current clipping path ID
     *
     * @return string
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getclippath.php
     */
    public function getclippath()
    {
    }

    /**
     * Returns the current polygon fill rule
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getcliprule.php
     */
    public function getcliprule()
    {
    }

    /**
     * Returns the interpretation of clip path units
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getclipunits.php
     */
    public function getclipunits()
    {
    }

    /**
     * Returns the fill color
     *
     * @return ImagickPixel
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getfillcolor.php
     */
    public function getfillcolor()
    {
    }

    /**
     * Returns the opacity used when drawing
     *
     * @return float
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getfillopacity.php
     */
    public function getfillopacity()
    {
    }

    /**
     * Returns the fill rule
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getfillrule.php
     */
    public function getfillrule()
    {
    }

    /**
     * Returns the font
     *
     * @return string
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getfont.php
     */
    public function getfont()
    {
    }

    /**
     * Returns the font family
     *
     * @return string
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getfontfamily.php
     */
    public function getfontfamily()
    {
    }

    public function getfontresolution()
    {
    }

    /**
     * Returns the font pointsize
     *
     * @return float
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getfontsize.php
     */
    public function getfontsize()
    {
    }

    /**
     * Description
     *
     * @return int
     *
     * @link http://www.php.net/manual/en/imagickdraw.getfontstretch.php
     */
    public function getfontstretch()
    {
    }

    /**
     * Returns the font style
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getfontstyle.php
     */
    public function getfontstyle()
    {
    }

    /**
     * Returns the font weight
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getfontweight.php
     */
    public function getfontweight()
    {
    }

    /**
     * Returns the text placement gravity
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getgravity.php
     */
    public function getgravity()
    {
    }

    /**
     * Returns the current stroke antialias setting
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getstrokeantialias.php
     */
    public function getstrokeantialias()
    {
    }

    /**
     * Returns the color used for stroking object outlines
     *
     * @return ImagickPixel
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getstrokecolor.php
     */
    public function getstrokecolor()
    {
    }

    /**
     * Returns an array representing the pattern of dashes and gaps used to stroke paths
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getstrokedasharray.php
     */
    public function getstrokedasharray()
    {
    }

    /**
     * Returns the offset into the dash pattern to start the dash
     *
     * @return float
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getstrokedashoffset.php
     */
    public function getstrokedashoffset()
    {
    }

    /**
     * Returns the shape to be used at the end of open subpaths when they are stroked
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getstrokelinecap.php
     */
    public function getstrokelinecap()
    {
    }

    /**
     * Returns the shape to be used at the corners of paths when they are stroked
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getstrokelinejoin.php
     */
    public function getstrokelinejoin()
    {
    }

    /**
     * Returns the stroke miter limit
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getstrokemiterlimit.php
     */
    public function getstrokemiterlimit()
    {
    }

    /**
     * Returns the opacity of stroked object outlines
     *
     * @return float
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getstrokeopacity.php
     */
    public function getstrokeopacity()
    {
    }

    /**
     * Returns the width of the stroke used to draw object outlines
     *
     * @return float
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getstrokewidth.php
     */
    public function getstrokewidth()
    {
    }

    /**
     * Returns the text alignment
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.gettextalignment.php
     */
    public function gettextalignment()
    {
    }

    /**
     * Returns the current text antialias setting
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.gettextantialias.php
     */
    public function gettextantialias()
    {
    }

    /**
     * Returns the text decoration
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.gettextdecoration.php
     */
    public function gettextdecoration()
    {
    }

    /**
     * Returns the code set used for text annotations
     *
     * @return string
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.gettextencoding.php
     */
    public function gettextencoding()
    {
    }

    /**
     * Description
     *
     * @return float
     *
     * @link http://www.php.net/manual/en/imagickdraw.gettextinterlinespacing.php
     */
    public function gettextinterlinespacing()
    {
    }

    /**
     * Description
     *
     * @return float
     *
     * @link http://www.php.net/manual/en/imagickdraw.gettextinterwordspacing.php
     */
    public function gettextinterwordspacing()
    {
    }

    /**
     * Description
     *
     * @return float
     *
     * @link http://www.php.net/manual/en/imagickdraw.gettextkerning.php
     */
    public function gettextkerning()
    {
    }

    /**
     * Returns the text under color
     *
     * @return ImagickPixel
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.gettextundercolor.php
     */
    public function gettextundercolor()
    {
    }

    /**
     * Returns a string containing vector graphics
     *
     * @return string
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.getvectorgraphics.php
     */
    public function getvectorgraphics()
    {
    }

    /**
     * Draws a line
     *
     * @param mixed $sx
     * @param mixed $sy
     * @param mixed $ex
     * @param mixed $ey
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.line.php
     */
    public function line($sx, $sy, $ex, $ey)
    {
    }

    /**
     * Paints on the image's opacity channel
     *
     * @param mixed $x
     * @param mixed $y
     * @param mixed $METHOD
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.matte.php
     */
    public function matte($x, $y, $METHOD)
    {
    }

    /**
     * Adds a path element to the current path
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathclose.php
     */
    public function pathclose()
    {
    }

    /**
     * Draws a cubic Bezier curve
     *
     * @param mixed $x1
     * @param mixed $y1
     * @param mixed $x2
     * @param mixed $y2
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathcurvetoabsolute.php
     */
    public function pathcurvetoabsolute($x1, $y1, $x2, $y2, $x, $y)
    {
    }

    /**
     * Draws a quadratic Bezier curve
     *
     * @param mixed $x1
     * @param mixed $y1
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathcurvetoquadraticbezierabsolute.php
     */
    public function pathcurvetoquadraticbezierabsolute($x1, $y1, $x, $y)
    {
    }

    /**
     * Draws a quadratic Bezier curve
     *
     * @param mixed $x1
     * @param mixed $y1
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathcurvetoquadraticbezierrelative.php
     */
    public function pathcurvetoquadraticbezierrelative($x1, $y1, $x, $y)
    {
    }

    /**
     * Draws a quadratic Bezier curve
     *
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathcurvetoquadraticbeziersmoothabsolute.php
     */
    public function pathcurvetoquadraticbeziersmoothabsolute($x, $y)
    {
    }

    /**
     * Draws a quadratic Bezier curve
     *
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathcurvetoquadraticbeziersmoothrelative.php
     */
    public function pathcurvetoquadraticbeziersmoothrelative($x, $y)
    {
    }

    /**
     * Draws a cubic Bezier curve
     *
     * @param mixed $x1
     * @param mixed $y1
     * @param mixed $x2
     * @param mixed $y2
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathcurvetorelative.php
     */
    public function pathcurvetorelative($x1, $y1, $x2, $y2, $x, $y)
    {
    }

    /**
     * Draws a cubic Bezier curve
     *
     * @param mixed $x1
     * @param mixed $y1
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathcurvetosmoothabsolute.php
     */
    public function pathcurvetosmoothabsolute($x1, $y1, $x, $y)
    {
    }

    /**
     * Draws a cubic Bezier curve
     *
     * @param mixed $x1
     * @param mixed $y1
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathcurvetosmoothrelative.php
     */
    public function pathcurvetosmoothrelative($x1, $y1, $x, $y)
    {
    }

    /**
     * Draws an elliptical arc
     *
     * @param mixed $rx
     * @param mixed $ry
     * @param mixed $xAxisRotation
     * @param mixed $largeArc
     * @param mixed $sweep
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathellipticarcabsolute.php
     */
    public function pathellipticarcabsolute($rx, $ry, $xAxisRotation, $largeArc, $sweep, $x, $y)
    {
    }

    /**
     * Draws an elliptical arc
     *
     * @param mixed $rx
     * @param mixed $ry
     * @param mixed $xAxisRotation
     * @param mixed $largeArc
     * @param mixed $sweep
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathellipticarcrelative.php
     */
    public function pathellipticarcrelative($rx, $ry, $xAxisRotation, $largeArc, $sweep, $x, $y)
    {
    }

    /**
     * Terminates the current path
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathfinish.php
     */
    public function pathfinish()
    {
    }

    /**
     * Draws a line path
     *
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathlinetoabsolute.php
     */
    public function pathlinetoabsolute($x, $y)
    {
    }

    /**
     * Draws a horizontal line path
     *
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathlinetohorizontalabsolute.php
     */
    public function pathlinetohorizontalabsolute($y)
    {
    }

    /**
     * Draws a horizontal line
     *
     * @param mixed $x
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathlinetohorizontalrelative.php
     */
    public function pathlinetohorizontalrelative($x)
    {
    }

    /**
     * Draws a line path
     *
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathlinetorelative.php
     */
    public function pathlinetorelative($x, $y)
    {
    }

    /**
     * Draws a vertical line
     *
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathlinetoverticalabsolute.php
     */
    public function pathlinetoverticalabsolute($y)
    {
    }

    /**
     * Draws a vertical line path
     *
     * @param mixed $x
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathlinetoverticalrelative.php
     */
    public function pathlinetoverticalrelative($x)
    {
    }

    /**
     * Starts a new sub-path
     *
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathmovetoabsolute.php
     */
    public function pathmovetoabsolute($x, $y)
    {
    }

    /**
     * Starts a new sub-path
     *
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathmovetorelative.php
     */
    public function pathmovetorelative($x, $y)
    {
    }

    /**
     * Declares the start of a path drawing list
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pathstart.php
     */
    public function pathstart()
    {
    }

    /**
     * Draws a point
     *
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.point.php
     */
    public function point($x, $y)
    {
    }

    /**
     * Draws a polygon
     *
     * @param mixed $coordinates
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.polygon.php
     */
    public function polygon($coordinates)
    {
    }

    /**
     * Draws a polyline
     *
     * @param mixed $coordinateArray
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.polyline.php
     */
    public function polyline($coordinateArray)
    {
    }

    /**
     * Destroys the current ImagickDraw in the stack, and returns to the previously pushed ImagickDraw
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pop.php
     */
    public function pop()
    {
    }

    /**
     * Terminates a clip path definition
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.popclippath.php
     */
    public function popclippath()
    {
    }

    /**
     * Terminates a definition list
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.popdefs.php
     */
    public function popdefs()
    {
    }

    /**
     * Terminates a pattern definition
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.poppattern.php
     */
    public function poppattern()
    {
    }

    /**
     * Clones the current ImagickDraw and pushes it to the stack
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.push.php
     */
    public function push()
    {
    }

    /**
     * Starts a clip path definition
     *
     * @param mixed $clipMask
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pushclippath.php
     */
    public function pushclippath($clipMask)
    {
    }

    /**
     * Indicates that following commands create named elements for early processing
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pushdefs.php
     */
    public function pushdefs()
    {
    }

    /**
     * Indicates that subsequent commands up to a ImagickDraw::opPattern() command comprise the definition of a named pattern
     *
     * @param mixed $pattern_id
     * @param mixed $x
     * @param mixed $y
     * @param mixed $width
     * @param mixed $height
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.pushpattern.php
     */
    public function pushpattern($pattern_id, $x, $y, $width, $height)
    {
    }

    /**
     * Draws a rectangle
     *
     * @param mixed $x1
     * @param mixed $y1
     * @param mixed $x2
     * @param mixed $y2
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.rectangle.php
     */
    public function rectangle($x1, $y1, $x2, $y2)
    {
    }

    /**
     * Renders all preceding drawing commands onto the image
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.render.php
     */
    public function render()
    {
    }

    /**
     * Description
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagickdraw.resetvectorgraphics.php
     */
    public function resetvectorgraphics()
    {
    }

    /**
     * Applies the specified rotation to the current coordinate space
     *
     * @param mixed $degrees
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.rotate.php
     */
    public function rotate($degrees)
    {
    }

    /**
     * Draws a rounded rectangle
     *
     * @param mixed $x1
     * @param mixed $y1
     * @param mixed $x2
     * @param mixed $y2
     * @param mixed $rx
     * @param mixed $ry
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.roundrectangle.php
     */
    public function roundrectangle($x1, $y1, $x2, $y2, $rx, $ry)
    {
    }

    /**
     * Adjusts the scaling factor
     *
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.scale.php
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
     * Associates a named clipping path with the image
     *
     * @param mixed $clipMask
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setclippath.php
     */
    public function setclippath($clipMask)
    {
    }

    /**
     * Set the polygon fill rule to be used by the clipping path
     *
     * @param mixed $FILLRULE
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setcliprule.php
     */
    public function setcliprule($FILLRULE)
    {
    }

    /**
     * Sets the interpretation of clip path units
     *
     * @param mixed $PATHUNITS
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setclipunits.php
     */
    public function setclipunits($PATHUNITS)
    {
    }

    /**
     * Sets the opacity to use when drawing using the fill color or fill texture
     *
     * @param mixed $alpha
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfillalpha.php
     */
    public function setfillalpha($alpha)
    {
    }

    /**
     * Sets the fill color to be used for drawing filled objects
     *
     * @param mixed $color
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfillcolor.php
     */
    public function setfillcolor($color)
    {
    }

    /**
     * Sets the opacity to use when drawing using the fill color or fill texture
     *
     * @param mixed $fillOpacity
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfillopacity.php
     */
    public function setfillopacity($fillOpacity)
    {
    }

    /**
     * Sets the URL to use as a fill pattern for filling objects
     *
     * @param mixed $url
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfillpatternurl.php
     */
    public function setfillpatternurl($url)
    {
    }

    /**
     * Sets the fill rule to use while drawing polygons
     *
     * @param mixed $FILLRULE
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfillrule.php
     */
    public function setfillrule($FILLRULE)
    {
    }

    /**
     * Sets the fully-specified font to use when annotating with text
     *
     * @param mixed $font
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfont.php
     */
    public function setfont($font)
    {
    }

    /**
     * Sets the font family to use when annotating with text
     *
     * @param mixed $fontfamily
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfontfamily.php
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
     * Sets the font pointsize to use when annotating with text
     *
     * @param mixed $pointsize
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfontsize.php
     */
    public function setfontsize($pointsize)
    {
    }

    /**
     * Sets the font stretch to use when annotating with text
     *
     * @param mixed $STRETCH
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfontstretch.php
     */
    public function setfontstretch($STRETCH)
    {
    }

    /**
     * Sets the font style to use when annotating with text
     *
     * @param mixed $STYLE
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfontstyle.php
     */
    public function setfontstyle($STYLE)
    {
    }

    /**
     * Sets the font weight
     *
     * @param mixed $weight
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfontweight.php
     */
    public function setfontweight($weight)
    {
    }

    /**
     * Sets the text placement gravity
     *
     * @param mixed $GRAVITY
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setgravity.php
     */
    public function setgravity($GRAVITY)
    {
    }

    /**
     * Description
     *
     * @param mixed $x_resolution
     * @param mixed $y_resolution
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagickdraw.setresolution.php
     */
    public function setresolution($x_resolution, $y_resolution)
    {
    }

    /**
     * Specifies the opacity of stroked object outlines
     *
     * @param mixed $alpha
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokealpha.php
     */
    public function setstrokealpha($alpha)
    {
    }

    /**
     * Controls whether stroked outlines are antialiased
     *
     * @param mixed $antialias
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokeantialias.php
     */
    public function setstrokeantialias($antialias)
    {
    }

    /**
     * Sets the color used for stroking object outlines
     *
     * @param mixed $color
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokecolor.php
     */
    public function setstrokecolor($color)
    {
    }

    /**
     * Specifies the pattern of dashes and gaps used to stroke paths
     *
     * @param mixed $dashArray
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokedasharray.php
     */
    public function setstrokedasharray($dashArray)
    {
    }

    /**
     * Specifies the offset into the dash pattern to start the dash
     *
     * @param mixed $offset
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokedashoffset.php
     */
    public function setstrokedashoffset($offset)
    {
    }

    /**
     * Specifies the shape to be used at the end of open subpaths when they are stroked
     *
     * @param mixed $LINECAP
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokelinecap.php
     */
    public function setstrokelinecap($LINECAP)
    {
    }

    /**
     * Specifies the shape to be used at the corners of paths when they are stroked
     *
     * @param mixed $LINEJOIN
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokelinejoin.php
     */
    public function setstrokelinejoin($LINEJOIN)
    {
    }

    /**
     * Specifies the miter limit
     *
     * @param mixed $miterLimit
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokemiterlimit.php
     */
    public function setstrokemiterlimit($miterLimit)
    {
    }

    /**
     * Specifies the opacity of stroked object outlines
     *
     * @param mixed $strokeOpacity
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokeopacity.php
     */
    public function setstrokeopacity($strokeOpacity)
    {
    }

    /**
     * Sets the pattern used for stroking object outlines
     *
     * @param mixed $url
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokepatternurl.php
     */
    public function setstrokepatternurl($url)
    {
    }

    /**
     * Sets the width of the stroke used to draw object outlines
     *
     * @param mixed $width
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setstrokewidth.php
     */
    public function setstrokewidth($width)
    {
    }

    /**
     * Specifies a text alignment
     *
     * @param mixed $ALIGN
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.settextalignment.php
     */
    public function settextalignment($ALIGN)
    {
    }

    /**
     * Controls whether text is antialiased
     *
     * @param mixed $antialias
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.settextantialias.php
     */
    public function settextantialias($antialias)
    {
    }

    /**
     * Specifies a decoration
     *
     * @param mixed $DECORATION
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.settextdecoration.php
     */
    public function settextdecoration($DECORATION)
    {
    }

    /**
     * Specifies the text code set
     *
     * @param mixed $encoding
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.settextencoding.php
     */
    public function settextencoding($encoding)
    {
    }

    /**
     * Description
     *
     * @param mixed $spacing
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagickdraw.settextinterlinespacing.php
     */
    public function settextinterlinespacing($spacing)
    {
    }

    /**
     * Description
     *
     * @param mixed $spacing
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagickdraw.settextinterwordspacing.php
     */
    public function settextinterwordspacing($spacing)
    {
    }

    /**
     * Description
     *
     * @param mixed $kerning
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagickdraw.settextkerning.php
     */
    public function settextkerning($kerning)
    {
    }

    /**
     * Specifies the color of a background rectangle
     *
     * @param mixed $color
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.settextundercolor.php
     */
    public function settextundercolor($color)
    {
    }

    /**
     * Sets the vector graphics
     *
     * @param mixed $xml
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setvectorgraphics.php
     */
    public function setvectorgraphics($xml)
    {
    }

    /**
     * Sets the overall canvas size
     *
     * @param mixed $sx
     * @param mixed $sy
     * @param mixed $ex
     * @param mixed $ey
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setviewbox.php
     */
    public function setviewbox($sx, $sy, $ex, $ey)
    {
    }

    /**
     * Skews the current coordinate system in the horizontal direction
     *
     * @param mixed $degrees
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.skewx.php
     */
    public function skewx($degrees)
    {
    }

    /**
     * Skews the current coordinate system in the vertical direction
     *
     * @param mixed $degrees
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.skewy.php
     */
    public function skewy($degrees)
    {
    }

    /**
     * Applies a translation to the current coordinate system
     *
     * @param mixed $x
     * @param mixed $y
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.translate.php
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
     * @param mixed $kerneltype
     * @param mixed $paramstring
     *
     * @return ImagickKernel
     *
     * @since PECL imagick >= 3.3.0
     *
     * @link http://www.php.net/manual/en/imagickkernel.frombuiltin.php
     */
    public static function frombuiltin($kerneltype, $paramstring)
    {
    }

    /**
     * Description
     *
     * @param mixed $array
     * @param mixed|null $array
     *
     * @return ImagickKernel
     *
     * @since PECL imagick >= 3.3.0
     *
     * @link http://www.php.net/manual/en/imagickkernel.frommatrix.php
     */
    public static function frommatrix($array, $array = null)
    {
    }

    /**
     * Description
     *
     * @return array
     *
     * @since PECL imagick >= 3.3.0
     *
     * @link http://www.php.net/manual/en/imagickkernel.getmatrix.php
     */
    public function getmatrix()
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
     * The ImagickPixel constructor
     *
     * @param mixed|null $color
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
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.clear.php
     */
    public function clear()
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
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.destroy.php
     */
    public function destroy()
    {
    }

    /**
     * Returns the color
     *
     * @param mixed|null $normalized
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.getcolor.php
     */
    public function getcolor($normalized = null)
    {
    }

    /**
     * Returns the color as a string
     *
     * @return string
     *
     * @since PECL imagick 2.1.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.getcolorasstring.php
     */
    public function getcolorasstring()
    {
    }

    /**
     * Returns the color count associated with this color
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.getcolorcount.php
     */
    public function getcolorcount()
    {
    }

    /**
     * Description
     *
     * @return array
     *
     * @link http://www.php.net/manual/en/imagickpixel.getcolorquantum.php
     */
    public function getcolorquantum()
    {
    }

    /**
     * Gets the normalized value of the provided color channel
     *
     * @param mixed $color
     *
     * @return float
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.getcolorvalue.php
     */
    public function getcolorvalue($color)
    {
    }

    /**
     * Description
     *
     * @param mixed $color
     *
     * @return float
     *
     * @link http://www.php.net/manual/en/imagickpixel.getcolorvaluequantum.php
     */
    public function getcolorvaluequantum($color)
    {
    }

    /**
     * Returns the normalized HSL color of the ImagickPixel object
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.gethsl.php
     */
    public function gethsl()
    {
    }

    /**
     * Description
     *
     * @return int
     *
     * @link http://www.php.net/manual/en/imagickpixel.getindex.php
     */
    public function getindex()
    {
    }

    /**
     * Check the distance between this color and another
     *
     * @param mixed $color
     * @param mixed|null $fuzz
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagickpixel.ispixelsimilar.php
     */
    public function ispixelsimilar($color, $fuzz = null)
    {
    }

    /**
     * Description
     *
     * @param mixed $color
     * @param mixed|null $fuzz
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagickpixel.ispixelsimilarquantum.php
     */
    public function ispixelsimilarquantum($color, $fuzz = null)
    {
    }

    /**
     * Check the distance between this color and another
     *
     * @param mixed $color
     * @param mixed|null $fuzz
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.issimilar.php
     */
    public function issimilar($color, $fuzz = null)
    {
    }

    /**
     * Sets the color
     *
     * @param mixed $color
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.setcolor.php
     */
    public function setcolor($color)
    {
    }

    /**
     * Description
     *
     * @param mixed $colorCount
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagickpixel.setcolorcount.php
     */
    public function setcolorcount($colorCount)
    {
    }

    /**
     * Sets the normalized value of one of the channels
     *
     * @param mixed $color
     * @param mixed $value
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.setcolorvalue.php
     */
    public function setcolorvalue($color, $value)
    {
    }

    /**
     * Description
     *
     * @param mixed $color_value
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagickpixel.setcolorvaluequantum.php
     */
    public function setcolorvaluequantum($color_value)
    {
    }

    /**
     * Sets the normalized HSL color
     *
     * @param mixed $hue
     * @param mixed $saturation
     * @param mixed $luminosity
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.sethsl.php
     */
    public function sethsl($hue, $saturation, $luminosity)
    {
    }

    /**
     * Description
     *
     * @param mixed $index
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagickpixel.setindex.php
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
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.clear.php
     */
    public function clear()
    {
    }

    public function current()
    {
    }

    /**
     * Deallocates resources associated with a PixelIterator
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.destroy.php
     */
    public function destroy()
    {
    }

    /**
     * Returns the current row of ImagickPixel objects
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.getcurrentiteratorrow.php
     */
    public function getcurrentiteratorrow()
    {
    }

    /**
     * Returns the current pixel iterator row
     *
     * @return int
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.getiteratorrow.php
     */
    public function getiteratorrow()
    {
    }

    /**
     * Returns the next row of the pixel iterator
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.getnextiteratorrow.php
     */
    public function getnextiteratorrow()
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
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.getpreviousiteratorrow.php
     */
    public function getpreviousiteratorrow()
    {
    }

    public function key()
    {
    }

    /**
     * Returns a new pixel iterator
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.newpixeliterator.php
     */
    public function newpixeliterator()
    {
    }

    /**
     * Returns a new pixel iterator
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.newpixelregioniterator.php
     */
    public function newpixelregioniterator()
    {
    }

    public function next()
    {
    }

    /**
     * Resets the pixel iterator
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.resetiterator.php
     */
    public function resetiterator()
    {
    }

    public function rewind()
    {
    }

    /**
     * Sets the pixel iterator to the first pixel row
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.setiteratorfirstrow.php
     */
    public function setiteratorfirstrow()
    {
    }

    /**
     * Sets the pixel iterator to the last pixel row
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.setiteratorlastrow.php
     */
    public function setiteratorlastrow()
    {
    }

    /**
     * Set the pixel iterator row
     *
     * @param mixed $row
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.setiteratorrow.php
     */
    public function setiteratorrow($row)
    {
    }

    /**
     * Syncs the pixel iterator
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.synciterator.php
     */
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
