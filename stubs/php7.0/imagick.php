<?php
// Start of extension: imagick
// - parsed on POSIX with PHP 7.0.28 (extension version 3.4.3)
// - parsed on Windows with PHP 7.0.28 (extension version 3.4.3)

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
    public function __tostring(): string
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
    public function adaptiveblurimage($radius, $sigma, $CHANNEL = null): bool
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
    public function adaptiveresizeimage($columns, $rows, $bestfit = null, $legacy = null): bool
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
    public function adaptivesharpenimage($radius, $sigma, $CHANNEL = null): bool
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
    public function adaptivethresholdimage($width, $height, $offset): bool
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
    public function addimage($Imagick): bool
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
    public function addnoiseimage($NOISE, $CHANNEL = null): bool
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
    public function affinetransformimage($ImagickDraw): bool
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
    public function animateimages($server_name): bool
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
    public function annotateimage($ImagickDraw, $x, $y, $angle, $text): bool
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
    public function autolevelimage($CHANNEL = null): bool
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
    public function blackthresholdimage($color): bool
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
    public function blueshiftimage($factor = null): bool
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
    public function blurimage($radius, $sigma, $CHANNELTYPE = null): bool
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
    public function borderimage($color, $width, $height): bool
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
    public function brightnesscontrastimage($brightness, $contrast, $CHANNEL = null): bool
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
    public function charcoalimage($radius, $sigma): bool
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
    public function chopimage($width, $height, $x, $y): bool
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
    public function clampimage($CHANNEL = null): bool
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
    public function clear(): bool
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
    public function clipimage(): bool
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
    public function clippathimage($pathname, $inside): bool
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
    public function clutimage($Imagick, $CHANNELTYPE = null): bool
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
    public function colorfloodfillimage($fill_color, $fuzz, $border_color, $y, $x): bool
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
    public function colorizeimage($colorize_color, $opacity, $legacy = null): bool
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
    public function colormatriximage($color_matrix): bool
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
    public function commentimage($comment): bool
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
    public function compareimagechannels($Imagick, $CHANNEL, $METRIC): array
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
    public function compareimages($Imagick, $METRIC): array
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
    public function compositeimage($Imagick, $COMPOSITE, $x, $y, $CHANNELTYPE = null): bool
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
    public function contrastimage($sharpen): bool
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
    public function contraststretchimage($blackPoint, $whitePoint, $CHANNEL = null): bool
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
    public function convolveimage($kernel, $CHANNEL = null): bool
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
    public function count($mode = null): int
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
    public function cropimage($width, $height, $x, $y): bool
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
    public function cropthumbnailimage($width, $height, $legacy = null): bool
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
    public function cyclecolormapimage($displace): bool
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
    public function decipherimage($passphrase): bool
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
    public function deleteimageartifact($artifact): bool
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
    public function deleteimageproperty($name): bool
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
    public function deskewimage($threshold): bool
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
    public function despeckleimage(): bool
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
    public function destroy(): bool
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
    public function displayimage($serverName): bool
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
    public function displayimages($serverName): bool
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
    public function distortimage($method, $arguments, $bestfit): bool
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
    public function drawimage($ImagickDraw): bool
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
    public function edgeimage($radius): bool
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
    public function embossimage($radius, $sigma): bool
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
    public function encipherimage($passphrase): bool
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
    public function enhanceimage(): bool
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
    public function equalizeimage(): bool
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
    public function evaluateimage($EVALUATE, $constant, $CHANNEL = null): bool
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
    public function exportimagepixels($x, $y, $width, $height, $map, $STORAGE): array
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
    public function extentimage($width, $height, $x, $y): bool
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
    public function filter($ImagickKernel, $CHANNEL = null): bool
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
    public function flipimage(): bool
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
    public function floodfillpaintimage($fill, $fuzz, $bordercolor, $x, $y, $invert, $CHANNEL = null): bool
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
    public function flopimage(): bool
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
    public function forwardfouriertransformimage($magnitude): bool
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
    public function frameimage($color, $width, $height, $innerBevel, $outerBevel): bool
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
    public function functionimage($FUNCTION, $arguments): bool
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
    public function gammaimage($gamma, $CHANNEL = null): bool
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
    public function gaussianblurimage($radius, $sigma, $CHANNEL = null): bool
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
    public function getcolorspace(): int
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
    public function getcompression(): int
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
    public function getcompressionquality(): int
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
    public static function getcopyright(): string
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
    public function getfilename(): string
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
    public function getfont(): string
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
    public function getformat(): string
    {
    }

    /**
     * Gets the gravity
     *
     * @return int
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
     * @return string
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
    public function getimagealphachannel(): int
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
    public function getimageartifact($artifact): string
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
    public function getimageattribute($key): string
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
    public function getimageblob(): string
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
    public function getimageblueprimary(): array
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
    public function getimagechanneldepth($CHANNEL): int
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
    public function getimagechanneldistortion($Imagick, $CHANNEL, $METRIC): float
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
    public function getimagechanneldistortions($Imagick, $METRICTYPE = null, $CHANNEL = null): float
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
    public function getimagechannelextrema($CHANNEL): array
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
    public function getimagechannelkurtosis($CHANNEL = null): array
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
    public function getimagechannelmean($CHANNEL): array
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
    public function getimagechannelrange($CHANNEL): array
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
    public function getimagechannelstatistics(): array
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
    public function getimagecolors(): int
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
    public function getimagecolorspace(): int
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
    public function getimagecompose(): int
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
    public function getimagecompression(): int
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
    public function getimagecompressionquality(): int
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
    public function getimagedelay(): int
    {
    }

    /**
     * Gets the image depth
     *
     * @return int
     *
     * @link http://www.php.net/manual/en/imagick.getimagedepth.php
     */
    public function getimagedepth(): int
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
    public function getimagedispose(): int
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
    public function getimagedistortion($Imagick, $METRIC): float
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
    public function getimageextrema(): array
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
    public function getimagefilename(): string
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
    public function getimageformat(): string
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
    public function getimagegamma(): float
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
    public function getimagegeometry(): array
    {
    }

    /**
     * Gets the image gravity
     *
     * @return int
     *
     * @link http://www.php.net/manual/en/imagick.getimagegravity.php
     */
    public function getimagegravity(): int
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
    public function getimagegreenprimary(): array
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
    public function getimageheight(): int
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
    public function getimagehistogram(): array
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
    public function getimageindex(): int
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
    public function getimageinterlacescheme(): int
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
    public function getimageinterpolatemethod(): int
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
    public function getimageiterations(): int
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
    public function getimagelength(): int
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
    public function getimagematte(): bool
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
    public function getimagemimetype(): string
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
    public function getimageorientation(): int
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
    public function getimagepage(): array
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
    public function getimageprofile($name): string
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
    public function getimageprofiles($pattern = null, $values = null): array
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
    public function getimageproperties($pattern = null, $values = null): array
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
    public function getimageproperty($name): string
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
    public function getimageredprimary(): array
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
    public function getimagerenderingintent(): int
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
    public function getimageresolution(): array
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
    public function getimagesblob(): string
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
    public function getimagescene(): int
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
    public function getimagesignature(): string
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
    public function getimagesize(): int
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
    public function getimagetickspersecond(): int
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
    public function getimagetotalinkdensity(): float
    {
    }

    /**
     * Gets the potential image type
     *
     * @return int
     *
     * @link http://www.php.net/manual/en/imagick.getimagetype.php
     */
    public function getimagetype(): int
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
    public function getimageunits(): int
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
    public function getimagevirtualpixelmethod(): int
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
    public function getimagewhitepoint(): array
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
    public function getimagewidth(): int
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
    public function getinterlacescheme(): int
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
    public function getiteratorindex(): int
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
    public function getnumberimages(): int
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
    public function getoption($key): string
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
    public static function getpackagename(): string
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
    public function getpage(): array
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
     * @return array
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
     * @return array
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
     * @param mixed $key
     *
     * @return string
     *
     * @link http://www.php.net/manual/en/imagick.getregistry.php
     */
    public static function getregistry($key): string
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
    public static function getreleasedate(): string
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
    public static function getresource($resource_type): int
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
    public static function getresourcelimit($resource_type): int
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
    public function getsamplingfactors(): array
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
    public function getsize(): array
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
    public function getsizeoffset(): int
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
    public static function getversion(): array
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
    public function haldclutimage($Imagick, $CHANNEL = null): bool
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
    public function hasnextimage(): bool
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
    public function haspreviousimage(): bool
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
    public function identifyformat($embedText): string
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
    public function identifyimage($appendRawOutput = null): array
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
    public function implodeimage($radius): bool
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
    public function importimagepixels($x, $y, $width, $height, $map, $storage, $PIXEL): bool
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
    public function inversefouriertransformimage($complement, $magnitude): bool
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
    public function labelimage($label): bool
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
    public function levelimage($blackPoint, $gamma, $whitePoint, $CHANNEL = null): bool
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
    public function linearstretchimage($blackPoint, $whitePoint): bool
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
    public function liquidrescaleimage($columns, $rows, $delta_x, $rigidity): bool
    {
    }

    /**
     * Description
     *
     * @return array
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
     * @return bool
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
     * @param Imagick $Imagick
     * @param mixed $dither
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.mapimage.php
     */
    public function mapimage($Imagick, $dither): bool
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
    public function mattefloodfillimage($alpha, $fuzz, $color, $x, $y): bool
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
    public function medianfilterimage($radius): bool
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
    public function minifyimage(): bool
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
    public function modulateimage($brightness, $saturation, $hue): bool
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
    public function montageimage($ImagickDraw, $tileGeometry, $thumbnailGeometry, $MONTAGEMODE, $frame)
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
    public function morphology($morphologyMethod, $iterations, $ImagickKernel, $CHANNEL = null): bool
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
    public function motionblurimage($radius, $sigma, $angle, $CHANNEL = null): bool
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
    public function negateimage($gray, $CHANNEL = null): bool
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
    public function newimage($columns, $rows, $background_color, $format = null): bool
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
    public function newpseudoimage($columns, $rows, $pseudoString): bool
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
    public function nextimage(): bool
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
    public function normalizeimage($CHANNEL = null): bool
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
    public function oilpaintimage($radius): bool
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
    public function opaquepaintimage($target, $fill, $fuzz, $invert, $CHANNEL = null): bool
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
    public function optimizeimagelayers(): bool
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
    public function orderedposterizeimage($threshold_map, $CHANNEL = null): bool
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
    public function paintfloodfillimage($CHANNEL, $fill, $fuzz, $bordercolor, $x, $y): bool
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
    public function paintopaqueimage($target_color, $fill_color, $fuzz, $CHANNEL = null): bool
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
    public function painttransparentimage($target_color, $alpha, $fuzz): bool
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
    public function pingimage($filename): bool
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
    public function pingimageblob($imageContents): bool
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
    public function pingimagefile($fp): bool
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
    public function polaroidimage($ImagickDraw, $angle): bool
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
    public function posterizeimage($levels, $dither): bool
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
    public function previewimages($PREVIEW): bool
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
    public function previousimage(): bool
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
    public function profileimage($name, $profile): bool
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
    public function quantizeimage($numColors, $COLORSPACE, $treeDepth, $dither, $measureError): bool
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
    public function quantizeimages($numColors, $COLORSPACE, $treeDepth, $dither, $measureError): bool
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
    public function queryfontmetrics($ImagickDraw, $text, $multiline = null): array
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
    public static function queryfonts($pattern): array
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
    public static function queryformats($pattern): array
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
    public function radialblurimage($angle, $CHANNEL = null): bool
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
    public function raiseimage($width, $height, $x, $y, $raise): bool
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
    public function randomthresholdimage($low, $high, $CHANNELTYPE = null): bool
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
    public function readimage($filename): bool
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
    public function readimageblob($imageContents, $filename = null): bool
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
    public function readimagefile($fp): bool
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
    public function readimages($filenames): bool
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
    public function recolorimage($matrix): bool
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
    public function reducenoiseimage($radius): bool
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
    public function remapimage($Imagick, $DITHER): bool
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
    public function removeimage(): bool
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
    public function removeimageprofile($name): string
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
    public function resampleimage($xResolution, $yResolution, $FILTER, $blur): bool
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
    public function resetimagepage($page): bool
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
    public function resizeimage($x, $y, $filter = null, $blur = null, $bestfit = null, $legacy = null): bool
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
    public function rollimage($x, $y): bool
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
    public function rotateimage($color, $degrees): bool
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
    public function rotationalblurimage($angle, $CHANNEL = null): bool
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
    public function roundcorners($xRounding, $yRounding, $strokeWidth = null, $displace = null, $sizeCorrection = null): bool
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
    public function sampleimage($columns, $rows): bool
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
    public function scaleimage($width, $height, $bestfit = null, $legacy = null): bool
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
    public function segmentimage($COLORSPACE, $cluster_threshold, $smooth_threshold, $verbose = null): bool
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
    public function selectiveblurimage($radius, $sigma, $threshold, $CHANNEL): bool
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
    public function separateimagechannel($CHANNEL): bool
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
    public function sepiatoneimage($threshold): bool
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
    public function setbackgroundcolor($color): bool
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
    public function setcolorspace($COLORSPACE): bool
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
    public function setcompression($compression): bool
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
    public function setcompressionquality($compressionquality): bool
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
    public function setfilename($filename): bool
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
    public function setfirstiterator(): bool
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
    public function setfont($font): bool
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
    public function setformat($format): bool
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
    public function setgravity($GRAVITY): bool
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
    public function setimage($Imagick): bool
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
    public function setimagealphachannel($ALPHACHANNELTYPE): bool
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
    public function setimageartifact($artifact, $value): bool
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
    public function setimageattribute($key, $value): bool
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
    public function setimagebackgroundcolor($color): bool
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
    public function setimagebias($bias): bool
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
    public function setimageblueprimary($x, $y): bool
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
    public function setimagebordercolor($color): bool
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
    public function setimagechanneldepth($CHANNEL, $depth): bool
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
    public function setimageclipmask($Imagick): bool
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
    public function setimagecolormapcolor($index, $color): bool
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
    public function setimagecolorspace($COLORSPACE): bool
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
    public function setimagecompose($COMPOSITE): bool
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
    public function setimagecompression($COMPRESSION): bool
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
    public function setimagecompressionquality($quality): bool
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
    public function setimagedelay($delay): bool
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
    public function setimagedepth($depth): bool
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
    public function setimagedispose($DISPOSETYPE): bool
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
    public function setimageextent($columns, $rows): bool
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
    public function setimagefilename($filename): bool
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
    public function setimageformat($imageFormat): bool
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
    public function setimagegamma($gamma): bool
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
    public function setimagegravity($GRAVITY): bool
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
    public function setimagegreenprimary($x, $y): bool
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
    public function setimageindex($index): bool
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
    public function setimageinterlacescheme($INTERLACE): bool
    {
    }

    /**
     * Sets the image interpolate pixel method
     *
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $INTERPOLATE
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagick.setimageinterpolatemethod.php
     */
    public function setimageinterpolatemethod($INTERPOLATE): bool
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
    public function setimageiterations($iterations): bool
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
    public function setimagematte($enable): bool
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
    public function setimagemattecolor($color): bool
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
    public function setimageopacity($opacity): bool
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
    public function setimageorientation($ORIENTATION): bool
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
    public function setimagepage($width, $height, $x, $y): bool
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
    public function setimageprofile($name, $profile): bool
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
    public function setimageproperty($name, $value): bool
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
    public function setimageredprimary($x, $y): bool
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
    public function setimagerenderingintent($RENDERINGINTENT): bool
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
    public function setimageresolution($xResolution, $yResolution): bool
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
    public function setimagescene($scene): bool
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
    public function setimagetickspersecond($ticksPerSecond): bool
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
    public function setimagetype($IMGTYPE): bool
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
    public function setimageunits($RESOLUTION): bool
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
    public function setimagevirtualpixelmethod($VIRTUALPIXELMETHOD): bool
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
    public function setimagewhitepoint($x, $y): bool
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
    public function setinterlacescheme($INTERLACE): bool
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
    public function setiteratorindex($index): bool
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
    public function setlastiterator(): bool
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
    public function setoption($key, $value): bool
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
    public function setpage($width, $height, $x, $y): bool
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
    public function setpointsize($pointsize): bool
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
    public function setprogressmonitor($callback): bool
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
    public static function setregistry($key, $value): bool
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
    public function setresolution($xResolution, $yResolution): bool
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
    public static function setresourcelimit($RESOURCETYPE, $limit): bool
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
    public function setsamplingfactors($factors): bool
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
    public function setsize($columns, $rows): bool
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
    public function setsizeoffset($columns, $rows, $offset): bool
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
    public function settype($IMGTYPE): bool
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
    public function shadeimage($gray, $azimuth, $elevation): bool
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
    public function shadowimage($opacity, $sigma, $x, $y): bool
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
    public function sharpenimage($radius, $sigma, $CHANNEL = null): bool
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
    public function shaveimage($columns, $rows): bool
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
    public function shearimage($color, $xShear, $yShear): bool
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
    public function sigmoidalcontrastimage($sharpen, $contrast, $midpoint, $CHANNEL = null): bool
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
    public function sketchimage($radius, $sigma, $angle): bool
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
    public function solarizeimage($threshold): bool
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
    public function sparsecolorimage($SPARSE_METHOD, $arguments, $CHANNEL = null): bool
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
    public function spliceimage($width, $height, $x, $y): bool
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
    public function spreadimage($radius): bool
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
    public function statisticimage($type, $width, $height, $CHANNEL = null): bool
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
    public function steganoimage($Imagick, $offset)
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
    public function stereoimage($Imagick): bool
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
    public function stripimage(): bool
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
    public function subimagematch($Imagick, &$offset = null, &$similarity = null, &$similarity_threshold = null, &$metric = null)
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
    public function swirlimage($degrees): bool
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
    public function textureimage($Imagick)
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
    public function thresholdimage($threshold, $CHANNELTYPE = null): bool
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
    public function thumbnailimage($width, $height, $bestfit = null, $fill = null, $legacy = null): bool
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
    public function tintimage($tint_color, $opacity, $legacy = null): bool
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
    public function transformimagecolorspace($COLORSPACE): bool
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
    public function transparentpaintimage($target, $alpha, $fuzz, $invert): bool
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
    public function transposeimage(): bool
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
    public function transverseimage(): bool
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
    public function trimimage($fuzz): bool
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
    public function uniqueimagecolors(): bool
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
    public function unsharpmaskimage($radius, $sigma, $amount, $threshold, $CHANNEL = null): bool
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
    public function valid(): bool
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
    public function vignetteimage($blackPoint, $whitePoint, $x, $y): bool
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
    public function waveimage($amplitude, $waveLenght): bool
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
    public function whitethresholdimage($color): bool
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
    public function writeimage($filename = null): bool
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
    public function writeimagefile($handle, $format = null): bool
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
    public function writeimages($filename, $adjoin): bool
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
    public function writeimagesfile($handle, $format = null): bool
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
    public function affine($affineMatrix): bool
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
    public function annotation($x, $y, $text): bool
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
    public function arc($sx, $sy, $ex, $ey, $sd, $ed): bool
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
    public function bezier($coordinateArray): bool
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
    public function circle($ox, $oy, $px, $py): bool
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
    public function clear(): bool
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
    public function color($x, $y, $PAINTMETHOD): bool
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
    public function comment($comment): bool
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
    public function composite($COMPOSE, $x, $y, $width, $height, $Imagick): bool
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
    public function destroy(): bool
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
    public function ellipse($ox, $oy, $px, $py, $start, $end): bool
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
    public function getclippath(): string
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
    public function getcliprule(): int
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
    public function getfillopacity(): float
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
    public function getfillrule(): int
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
    public function getfont(): string
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
    public function getfontfamily(): string
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
     * @return int
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
     * @return int
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
     * @return int
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
     * @return bool
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
    public function getstrokedasharray(): array
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
    public function getstrokedashoffset(): float
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
    public function getstrokelinecap(): int
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
    public function getstrokelinejoin(): int
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
    public function getstrokemiterlimit(): int
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
    public function getstrokeopacity(): float
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
    public function getstrokewidth(): float
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
    public function gettextalignment(): int
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
    public function gettextantialias(): bool
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
     * @return string
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
    public function getvectorgraphics(): string
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
    public function line($sx, $sy, $ex, $ey): bool
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
    public function matte($x, $y, $METHOD): bool
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
    public function pathclose(): bool
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
    public function pathcurvetoabsolute($x1, $y1, $x2, $y2, $x, $y): bool
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
    public function pathcurvetoquadraticbezierabsolute($x1, $y1, $x, $y): bool
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
    public function pathcurvetoquadraticbezierrelative($x1, $y1, $x, $y): bool
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
    public function pathcurvetoquadraticbeziersmoothabsolute($x, $y): bool
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
    public function pathcurvetoquadraticbeziersmoothrelative($x, $y): bool
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
    public function pathcurvetorelative($x1, $y1, $x2, $y2, $x, $y): bool
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
    public function pathcurvetosmoothabsolute($x1, $y1, $x, $y): bool
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
    public function pathcurvetosmoothrelative($x1, $y1, $x, $y): bool
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
    public function pathellipticarcabsolute($rx, $ry, $xAxisRotation, $largeArc, $sweep, $x, $y): bool
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
    public function pathellipticarcrelative($rx, $ry, $xAxisRotation, $largeArc, $sweep, $x, $y): bool
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
    public function pathfinish(): bool
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
    public function pathlinetoabsolute($x, $y): bool
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
    public function pathlinetohorizontalabsolute($y): bool
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
    public function pathlinetohorizontalrelative($x): bool
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
    public function pathlinetorelative($x, $y): bool
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
    public function pathlinetoverticalabsolute($y): bool
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
    public function pathlinetoverticalrelative($x): bool
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
    public function pathmovetoabsolute($x, $y): bool
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
    public function pathmovetorelative($x, $y): bool
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
    public function pathstart(): bool
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
    public function point($x, $y): bool
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
    public function polygon($coordinates): bool
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
    public function polyline($coordinateArray): bool
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
    public function pop(): bool
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
    public function popclippath(): bool
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
    public function popdefs(): bool
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
    public function poppattern(): bool
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
    public function push(): bool
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
    public function pushclippath($clipMask): bool
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
    public function pushdefs(): bool
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
    public function pushpattern($pattern_id, $x, $y, $width, $height): bool
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
    public function rectangle($x1, $y1, $x2, $y2): bool
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
    public function render(): bool
    {
    }

    /**
     * Description
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagickdraw.resetvectorgraphics.php
     */
    public function resetvectorgraphics(): bool
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
    public function rotate($degrees): bool
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
    public function roundrectangle($x1, $y1, $x2, $y2, $rx, $ry): bool
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
    public function scale($x, $y): bool
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
    public function setclippath($clipMask): bool
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
    public function setcliprule($FILLRULE): bool
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
    public function setclipunits($PATHUNITS): bool
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
     * @param mixed $alpha
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.setfillalpha.php
     */
    public function setfillalpha($alpha): bool
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
    public function setfillcolor($color): bool
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
    public function setfillopacity($fillOpacity): bool
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
    public function setfillpatternurl($url): bool
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
    public function setfillrule($FILLRULE): bool
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
    public function setfont($font): bool
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
    public function setfontfamily($fontfamily): bool
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
    public function setfontsize($pointsize): bool
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
    public function setfontstretch($STRETCH): bool
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
    public function setfontstyle($STYLE): bool
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
    public function setfontweight($weight): bool
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
    public function setgravity($GRAVITY): bool
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
     * @param mixed $x_resolution
     * @param mixed $y_resolution
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagickdraw.setresolution.php
     */
    public function setresolution($x_resolution, $y_resolution): bool
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
    public function setstrokealpha($alpha): bool
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
    public function setstrokeantialias($antialias): bool
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
    public function setstrokecolor($color): bool
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
    public function setstrokedasharray($dashArray): bool
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
    public function setstrokedashoffset($offset): bool
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
    public function setstrokelinecap($LINECAP): bool
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
    public function setstrokelinejoin($LINEJOIN): bool
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
    public function setstrokemiterlimit($miterLimit): bool
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
    public function setstrokeopacity($strokeOpacity): bool
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
    public function setstrokepatternurl($url): bool
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
    public function setstrokewidth($width): bool
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
    public function settextalignment($ALIGN): bool
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
    public function settextantialias($antialias): bool
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
    public function settextdecoration($DECORATION): bool
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
     * @param mixed $encoding
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickdraw.settextencoding.php
     */
    public function settextencoding($encoding): bool
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
    public function settextinterlinespacing($spacing): bool
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
    public function settextinterwordspacing($spacing): bool
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
    public function settextkerning($kerning): bool
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
    public function settextundercolor($color): bool
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
    public function setvectorgraphics($xml): bool
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
    public function setviewbox($sx, $sy, $ex, $ey): bool
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
    public function skewx($degrees): bool
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
    public function skewy($degrees): bool
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
    public function translate($x, $y): bool
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
    public function addkernel($ImagickKernel)
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
     * @return bool
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
     * @param mixed|null $normalized
     *
     * @return array
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixel.getcolor.php
     */
    public function getcolor($normalized = null): array
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
    public function getcolorasstring(): string
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
    public function getcolorcount(): int
    {
    }

    /**
     * Description
     *
     * @return array
     *
     * @link http://www.php.net/manual/en/imagickpixel.getcolorquantum.php
     */
    public function getcolorquantum(): array
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
    public function getcolorvalue($color): float
    {
    }

    /**
     * Description
     *
     * @param mixed $color
     *
     * @return number
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
     * @param mixed $color
     * @param mixed|null $fuzz
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/imagickpixel.ispixelsimilar.php
     */
    public function ispixelsimilar($color, $fuzz = null): bool
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
    public function ispixelsimilarquantum($color, $fuzz = null): bool
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
    public function issimilar($color, $fuzz = null): bool
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
    public function setcolor($color): bool
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
    public function setcolorcount($colorCount): bool
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
    public function setcolorvalue($color, $value): bool
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
    public function setcolorvaluequantum($color_value): bool
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
    public function sethsl($hue, $saturation, $luminosity): bool
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
    public function setindex($index): bool
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
    public function __construct($Imagick)
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
    public function clear(): bool
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
    public function destroy(): bool
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
    public function getcurrentiteratorrow(): array
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
    public function getiteratorrow(): int
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
    public function getnextiteratorrow(): array
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

    /**
     * Returns the previous row
     *
     * @return array
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
     * @return bool
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
     * @return bool
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
     * @return bool
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
     * @return bool
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
     * @return bool
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
     * @param mixed $row
     *
     * @return bool
     *
     * @since PECL imagick 2.0.0
     *
     * @link http://www.php.net/manual/en/imagickpixeliterator.setiteratorrow.php
     */
    public function setiteratorrow($row): bool
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
