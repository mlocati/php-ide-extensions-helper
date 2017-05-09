<?php
// Documentation generated automatically for extension gd v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
/*
 * INI entries:
 * gd.jpeg_ignore_warning = '1'
 */
const GD_BUNDLED = 1;
const GD_EXTRA_VERSION = '';
const GD_MAJOR_VERSION = 2;
const GD_MINOR_VERSION = 0;
const GD_RELEASE_VERSION = 35;
const GD_VERSION = '2.0.35';
const IMG_AFFINE_ROTATE = 2;
const IMG_AFFINE_SCALE = 1;
const IMG_AFFINE_SHEAR_HORIZONTAL = 3;
const IMG_AFFINE_SHEAR_VERTICAL = 4;
const IMG_AFFINE_TRANSLATE = 0;
const IMG_ARC_CHORD = 1;
const IMG_ARC_EDGED = 4;
const IMG_ARC_NOFILL = 2;
const IMG_ARC_PIE = 0;
const IMG_ARC_ROUNDED = 0;
const IMG_BELL = 1;
const IMG_BESSEL = 2;
const IMG_BICUBIC = 4;
const IMG_BICUBIC_FIXED = 5;
const IMG_BILINEAR_FIXED = 3;
const IMG_BLACKMAN = 6;
const IMG_BOX = 7;
const IMG_BSPLINE = 8;
const IMG_CATMULLROM = 9;
const IMG_COLOR_BRUSHED = -3;
const IMG_COLOR_STYLED = -2;
const IMG_COLOR_STYLEDBRUSHED = -4;
const IMG_COLOR_TILED = -5;
const IMG_COLOR_TRANSPARENT = -6;
const IMG_CROP_BLACK = 2;
const IMG_CROP_DEFAULT = 0;
const IMG_CROP_SIDES = 4;
const IMG_CROP_THRESHOLD = 5;
const IMG_CROP_TRANSPARENT = 1;
const IMG_CROP_WHITE = 3;
const IMG_EFFECT_ALPHABLEND = 1;
const IMG_EFFECT_NORMAL = 2;
const IMG_EFFECT_OVERLAY = 3;
const IMG_EFFECT_REPLACE = 0;
const IMG_FILTER_BRIGHTNESS = 2;
const IMG_FILTER_COLORIZE = 4;
const IMG_FILTER_CONTRAST = 3;
const IMG_FILTER_EDGEDETECT = 5;
const IMG_FILTER_EMBOSS = 6;
const IMG_FILTER_GAUSSIAN_BLUR = 7;
const IMG_FILTER_GRAYSCALE = 1;
const IMG_FILTER_MEAN_REMOVAL = 9;
const IMG_FILTER_NEGATE = 0;
const IMG_FILTER_PIXELATE = 11;
const IMG_FILTER_SELECTIVE_BLUR = 8;
const IMG_FILTER_SMOOTH = 10;
const IMG_FLIP_BOTH = 3;
const IMG_FLIP_HORIZONTAL = 1;
const IMG_FLIP_VERTICAL = 2;
const IMG_GAUSSIAN = 10;
const IMG_GD2_COMPRESSED = 2;
const IMG_GD2_RAW = 1;
const IMG_GENERALIZED_CUBIC = 11;
const IMG_GIF = 1;
const IMG_HAMMING = 13;
const IMG_HANNING = 14;
const IMG_HERMITE = 12;
const IMG_JPEG = 2;
const IMG_JPG = 2;
const IMG_MITCHELL = 15;
const IMG_NEAREST_NEIGHBOUR = 16;
const IMG_PNG = 4;
const IMG_POWER = 17;
const IMG_QUADRATIC = 18;
const IMG_SINC = 19;
const IMG_TRIANGLE = 20;
const IMG_WBMP = 8;
const IMG_WEBP = 32;
const IMG_WEIGHTED4 = 21;
const IMG_XPM = 16;
const PNG_ALL_FILTERS = 248;
const PNG_FILTER_AVG = 64;
const PNG_FILTER_NONE = 8;
const PNG_FILTER_PAETH = 128;
const PNG_FILTER_SUB = 16;
const PNG_FILTER_UP = 32;
const PNG_NO_FILTER = 0;
// No classes defined
function gd_info()
{
}
function imagearc($im, $cx, $cy, $w, $h, $s, $e, $col)
{
}
function imageellipse($im, $cx, $cy, $w, $h, $color)
{
}
function imagechar($im, $font, $x, $y, $c, $col)
{
}
function imagecharup($im, $font, $x, $y, $c, $col)
{
}
function imagecolorat($im, $x, $y)
{
}
function imagecolorallocate($im, $red, $green, $blue)
{
}
function imagepalettecopy($dst, $src)
{
}
function imagecreatefromstring($image)
{
}
function imagecolorclosest($im, $red, $green, $blue)
{
}
function imagecolorclosesthwb($im, $red, $green, $blue)
{
}
function imagecolordeallocate($im, $index)
{
}
function imagecolorresolve($im, $red, $green, $blue)
{
}
function imagecolorexact($im, $red, $green, $blue)
{
}
function imagecolorset($im, $color, $red, $green, $blue, $alpha = null)
{
}
function imagecolortransparent($im, $col = null)
{
}
function imagecolorstotal($im)
{
}
function imagecolorsforindex($im, $index)
{
}
function imagecopy($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h)
{
}
function imagecopymerge($src_im, $dst_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct)
{
}
function imagecopymergegray($src_im, $dst_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct)
{
}
function imagecopyresized($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h)
{
}
function imagecreate($x_size, $y_size)
{
}
function imagecreatetruecolor($x_size, $y_size)
{
}
function imageistruecolor($im)
{
}
function imagetruecolortopalette($im, $ditherFlag, $colorsWanted)
{
}
function imagepalettetotruecolor($im)
{
}
function imagesetthickness($im, $thickness)
{
}
function imagefilledarc($im, $cx, $cy, $w, $h, $s, $e, $col, $style)
{
}
function imagefilledellipse($im, $cx, $cy, $w, $h, $color)
{
}
function imagealphablending($im, $blend)
{
}
function imagesavealpha($im, $save)
{
}
function imagecolorallocatealpha($im, $red, $green, $blue, $alpha)
{
}
function imagecolorresolvealpha($im, $red, $green, $blue, $alpha)
{
}
function imagecolorclosestalpha($im, $red, $green, $blue, $alpha)
{
}
function imagecolorexactalpha($im, $red, $green, $blue, $alpha)
{
}
function imagecopyresampled($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h)
{
}
function imagegrabwindow($handle, $client_area = null)
{
}
function imagegrabscreen()
{
}
function imagerotate($im, $angle, $bgdcolor, $ignoretransparent = null)
{
}
function imageflip($im, $mode)
{
}
function imageantialias($im, $on)
{
}
function imagecrop($im, $rect)
{
}
function imagecropauto($im, $mode = null, $threshold = null, $color = null)
{
}
function imagescale($im, $new_width, $new_height = null, $mode = null)
{
}
function imageaffine($im, $affine, $clip = null)
{
}
function imageaffinematrixconcat($m1, $m2)
{
}
function imageaffinematrixget($type, $options = null)
{
}
function imagesetinterpolation($im, $method)
{
}
function imagesettile($im, $tile)
{
}
function imagesetbrush($im, $brush)
{
}
function imagesetstyle($im, $styles)
{
}
function imagecreatefrompng($filename)
{
}
function imagecreatefromwebp($filename)
{
}
function imagecreatefromgif($filename)
{
}
function imagecreatefromjpeg($filename)
{
}
function imagecreatefromwbmp($filename)
{
}
function imagecreatefromxbm($filename)
{
}
function imagecreatefromxpm($filename)
{
}
function imagecreatefromgd($filename)
{
}
function imagecreatefromgd2($filename)
{
}
function imagecreatefromgd2part($filename, $srcX, $srcY, $width, $height)
{
}
function imagepng($im, $to = null, $quality = null, $filters = null)
{
}
function imagewebp($im, $to = null)
{
}
function imagegif($im, $to = null)
{
}
function imagejpeg($im, $to = null, $quality = null)
{
}
function imagewbmp($im, $to = null, $foreground = null)
{
}
function imagegd($im, $to = null)
{
}
function imagegd2($im, $to = null, $chunk_size = null, $type = null)
{
}
function imagedestroy($im)
{
}
function imagegammacorrect($im, $inputgamma, $outputgamma)
{
}
function imagefill($im, $x, $y, $col)
{
}
function imagefilledpolygon($im, $points, $num_pos, $col)
{
}
function imagefilledrectangle($im, $x1, $y1, $x2, $y2, $col)
{
}
function imagefilltoborder($im, $x, $y, $border, $col)
{
}
function imagefontwidth($font)
{
}
function imagefontheight($font)
{
}
function imageinterlace($im, $interlace = null)
{
}
function imageline($im, $x1, $y1, $x2, $y2, $col)
{
}
function imageloadfont($filename)
{
}
function imagepolygon($im, $points, $num_pos, $col)
{
}
function imagerectangle($im, $x1, $y1, $x2, $y2, $col)
{
}
function imagesetpixel($im, $x, $y, $col)
{
}
function imagestring($im, $font, $x, $y, $str, $col)
{
}
function imagestringup($im, $font, $x, $y, $str, $col)
{
}
function imagesx($im)
{
}
function imagesy($im)
{
}
function imagedashedline($im, $x1, $y1, $x2, $y2, $col)
{
}
function imagettfbbox($size, $angle, $font_file, $text)
{
}
function imagettftext($im, $size, $angle, $x, $y, $col, $font_file, $text)
{
}
function imageftbbox($size, $angle, $font_file, $text, $extrainfo = null)
{
}
function imagefttext($im, $size, $angle, $x, $y, $col, $font_file, $text, $extrainfo = null)
{
}
function imagetypes()
{
}
function jpeg2wbmp($f_org, $f_dest, $d_height, $d_width, $d_threshold)
{
}
function png2wbmp($f_org, $f_dest, $d_height, $d_width, $d_threshold)
{
}
function image2wbmp($im, $filename = null, $threshold = null)
{
}
function imagelayereffect($im, $effect)
{
}
function imagexbm($im, $filename, $foreground = null)
{
}
function imagecolormatch($im1, $im2)
{
}
function imagefilter($im, $filtertype, $arg1 = null, $arg2 = null, $arg3 = null, $arg4 = null)
{
}
function imageconvolution($im, $matrix3x3, $div, $offset)
{
}