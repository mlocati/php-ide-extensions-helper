<?php
// Start of extension: bcmath
// - parsed on POSIX with PHP 7.0.28 (extension version 7.0.28)
// - parsed on Windows with PHP 7.0.28 (extension version 7.0.28)

/**
 * Add two arbitrary precision numbers
 *
 * @param string $left_operand The left operand, as a string.
 * @param string $right_operand The right operand, as a string.
 * @param int|null $scale This optional parameter is used to set the number
 * of digits after the decimal place in the result. If omitted, it will default to the scale set
 * globally with the <code>bcscale</code> function, or fallback to <code>0</code> if
 * this has not been set.
 *
 * @return string The sum of the two operands, as a string.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bcadd.php
 */
function bcadd(string $left_operand, string $right_operand, int $scale = 0): string
{
}

/**
 * Compare two arbitrary precision numbers
 *
 * @param string $left_operand The left operand, as a string.
 * @param string $right_operand The right operand, as a string.
 * @param int|null $scale The optional <code>scale</code> parameter is used to set the
 * number of digits after the decimal place which will be used in the
 * comparison.
 *
 * @return int Returns 0 if the two operands are equal, 1 if the
 * <code>left_operand</code> is larger than the
 * <code>right_operand</code>, -1 otherwise.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bccomp.php
 */
function bccomp(string $left_operand, string $right_operand, int $scale = 0): int
{
}

/**
 * Divide two arbitrary precision numbers
 *
 * @param string $dividend The dividend, as a string.
 * @param string $divisor The divisor, as a string.
 * @param int|null $scale This optional parameter is used to set the number
 * of digits after the decimal place in the result. If omitted, it will default to the scale set
 * globally with the <code>bcscale</code> function, or fallback to <code>0</code> if
 * this has not been set.
 *
 * @return string Returns the result of the division as a string, or <code>NULL</code> if
 * <code>divisor</code> is <code>0</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bcdiv.php
 */
function bcdiv(string $dividend, string $divisor, int $scale = 0): string
{
}

/**
 * Get modulus of an arbitrary precision number
 *
 * @param string $dividend The dividend, as a string.
 * @param string $modulus The modulus, as a string.
 *
 * @return string Returns the modulus as a string, or <code>NULL</code> if
 * <code>modulus</code> is <code>0</code>.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bcmod.php
 */
function bcmod(string $dividend, string $modulus): string
{
}

/**
 * Multiply two arbitrary precision numbers
 *
 * @param string $left_operand The left operand, as a string.
 * @param string $right_operand The right operand, as a string.
 * @param int|null $scale This optional parameter is used to set the number
 * of digits after the decimal place in the result. If omitted, it will default to the scale set
 * globally with the <code>bcscale</code> function, or fallback to <code>0</code> if
 * this has not been set.
 *
 * @return string Returns the result as a string.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bcmul.php
 */
function bcmul(string $left_operand, string $right_operand, int $scale = 0): string
{
}

/**
 * Raise an arbitrary precision number to another
 *
 * @param string $base The base, as a string.
 * @param string $exponent The exponent, as a string. If the exponent is non-integral, it is truncated.
 * The valid range of the exponent is platform specific, but is at least
 * <code>-2147483648</code> to <code>2147483647</code>.
 * @param int|null $scale This optional parameter is used to set the number
 * of digits after the decimal place in the result. If omitted, it will default to the scale set
 * globally with the <code>bcscale</code> function, or fallback to <code>0</code> if
 * this has not been set.
 *
 * @return string Returns the result as a string.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bcpow.php
 */
function bcpow(string $base, string $exponent, int $scale = 0): string
{
}

/**
 * Raise an arbitrary precision number to another, reduced by a specified modulus
 *
 * @param string $base The base, as an integral string (i.e. the scale has to be zero).
 * @param string $exponent The exponent, as an non-negative, integral string (i.e. the scale has to be zero).
 * @param string $modulus The modulus, as an integral string (i.e. the scale has to be zero).
 * @param int|null $scale This optional parameter is used to set the number
 * of digits after the decimal place in the result. If omitted, it will default to the scale set
 * globally with the <code>bcscale</code> function, or fallback to <code>0</code> if
 * this has not been set.
 *
 * @return string Returns the result as a string, or <code>NULL</code> if <code>modulus</code>
 * is <code>0</code> or <code>exponent</code> is negative.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bcpowmod.php
 */
function bcpowmod(string $base, string $exponent, string $modulus, int $scale = 0): string
{
}

/**
 * Set default scale parameter for all bc math functions
 *
 * @param int $scale The scale factor.
 *
 * @return int Returns the old scale.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bcscale.php
 */
function bcscale(int $scale): int
{
}

/**
 * Get the square root of an arbitrary precision number
 *
 * @param string $operand The operand, as a string.
 * @param int|null $scale This optional parameter is used to set the number
 * of digits after the decimal place in the result. If omitted, it will default to the scale set
 * globally with the <code>bcscale</code> function, or fallback to <code>0</code> if
 * this has not been set.
 *
 * @return string Returns the square root as a string, or <code>NULL</code> if
 * <code>operand</code> is negative.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bcsqrt.php
 */
function bcsqrt(string $operand, int $scale = 0): string
{
}

/**
 * Subtract one arbitrary precision number from another
 *
 * @param string $left_operand The left operand, as a string.
 * @param string $right_operand The right operand, as a string.
 * @param int|null $scale This optional parameter is used to set the number
 * of digits after the decimal place in the result. If omitted, it will default to the scale set
 * globally with the <code>bcscale</code> function, or fallback to <code>0</code> if
 * this has not been set.
 *
 * @return string The result of the subtraction, as a string.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.bcsub.php
 */
function bcsub(string $left_operand, string $right_operand, int $scale = 0): string
{
}
