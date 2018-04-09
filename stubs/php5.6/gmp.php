<?php
// Start of extension: gmp
// - parsed on POSIX with PHP 5.6.34
// - parsed on Windows with PHP 5.6.34

/**
 * @link http://www.php.net/manual/en/gmp.constants.php#constant.gmp-big-endian
 *
 * @var int
 */
const GMP_BIG_ENDIAN = 8;

/**
 * @link http://www.php.net/manual/en/gmp.constants.php#constant.gmp-little-endian
 *
 * @var int
 */
const GMP_LITTLE_ENDIAN = 4;

/**
 * @link http://www.php.net/manual/en/gmp.constants.php#constant.gmp-lsw-first
 *
 * @var int
 */
const GMP_LSW_FIRST = 2;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var string
 */
const GMP_MPIR_VERSION = '2.7.2';

/**
 * @link http://www.php.net/manual/en/gmp.constants.php#constant.gmp-msw-first
 *
 * @var int
 */
const GMP_MSW_FIRST = 1;

/**
 * @link http://www.php.net/manual/en/gmp.constants.php#constant.gmp-native-endian
 *
 * @var int
 */
const GMP_NATIVE_ENDIAN = 16;

/**
 * @link http://www.php.net/manual/en/gmp.constants.php#constant.gmp-round-minusinf
 *
 * @var int
 */
const GMP_ROUND_MINUSINF = 2;

/**
 * @link http://www.php.net/manual/en/gmp.constants.php#constant.gmp-round-plusinf
 *
 * @var int
 */
const GMP_ROUND_PLUSINF = 1;

/**
 * @link http://www.php.net/manual/en/gmp.constants.php#constant.gmp-round-zero
 *
 * @var int
 */
const GMP_ROUND_ZERO = 0;

/**
 * The GMP library version
 *
 * @link http://www.php.net/manual/en/gmp.constants.php#constant.gmp-version
 *
 * @var string
 */
const GMP_VERSION = '6.0.0';

/**
 * A GMP number. These objects support overloaded
 * arithmetic,
 * bitwise and
 * comparison operators.
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.gmp.php
 */
class GMP
{
}

/**
 * Absolute value
 *
 * @param GMP $a Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 *
 * @return GMP Returns the absolute value of <code>a</code>, as a GMP number.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-abs.php
 */
function gmp_abs(GMP $a)
{
}

/**
 * Add numbers
 *
 * @param GMP $a The first summand (augent).
 * @param GMP $b The second summand (addend).
 *
 * @return GMP A GMP number representing the sum of the arguments.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-add.php
 */
function gmp_add(GMP $a, GMP $b)
{
}

/**
 * Bitwise AND
 *
 * @param GMP $a Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 * @param GMP $b Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 *
 * @return GMP A GMP number representing the bitwise <code>AND</code> comparison.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-and.php
 */
function gmp_and(GMP $a, GMP $b)
{
}

/**
 * Clear bit
 *
 * @param GMP $a Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 * @param int $index The index of the bit to clear. Index 0 represents the least significant bit.
 *
 * @return void A GMP number <code>resource</code> in PHP 5.5 and earlier, or a <code>GMP</code> object in PHP 5.6 and later.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-clrbit.php
 */
function gmp_clrbit(GMP $a, $index)
{
}

/**
 * Compare numbers
 *
 * @param GMP $a Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 * @param GMP $b Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 *
 * @return int Returns a positive value if <code>a &gt; b</code>, zero if
 * <code>a = b</code> and a negative value if <code>a &lt;
 * b</code>.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-cmp.php
 */
function gmp_cmp(GMP $a, GMP $b)
{
}

/**
 * Calculates one's complement
 *
 * @param GMP $a Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 *
 * @return GMP Returns the one's complement of <code>a</code>, as a GMP number.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-com.php
 */
function gmp_com(GMP $a)
{
}

/**
 * Alias of <code>gmp_div_q</code>
 *
 * @param mixed $a
 * @param mixed $b
 * @param mixed $round
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-div.php
 */
function gmp_div($a, $b, $round = null)
{
}

/**
 * Divide numbers
 *
 * @param GMP $a The number being divided.
 * @param GMP $b The number that <code>a</code> is being divided by.
 * @param int|null $round The result rounding is defined by the
 * <code>round</code>, which can have the following
 * values:
 * <ul>
 * <code>GMP_ROUND_ZERO</code>: The result is truncated
 * towards 0.
 * <code>GMP_ROUND_PLUSINF</code>: The result is
 * rounded towards <code>+infinity</code>.
 * <code>GMP_ROUND_MINUSINF</code>: The result is
 * rounded towards <code>-infinity</code>.
 * </ul>
 *
 * @return GMP A GMP number <code>resource</code> in PHP 5.5 and earlier, or a <code>GMP</code> object in PHP 5.6 and later.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-div-q.php
 */
function gmp_div_q(GMP $a, GMP $b, $round = GMP_ROUND_ZERO)
{
}

/**
 * Divide numbers and get quotient and remainder
 *
 * @param GMP $n The number being divided.
 * @param GMP $d The number that <code>n</code> is being divided by.
 * @param int|null $round See the <code>gmp_div_q</code> function for description
 * of the <code>round</code> argument.
 *
 * @return array Returns an <code>array</code>, with the first
 * element being <code>[n/d]</code> (the integer result of the
 * division) and the second being <code>(n - [n/d] * d)</code>
 * (the remainder of the division).
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-div-qr.php
 */
function gmp_div_qr(GMP $n, GMP $d, $round = GMP_ROUND_ZERO)
{
}

/**
 * Remainder of the division of numbers
 *
 * @param GMP $n The number being divided.
 * @param GMP $d The number that <code>n</code> is being divided by.
 * @param int|null $round See the <code>gmp_div_q</code> function for description
 * of the <code>round</code> argument.
 *
 * @return GMP The remainder, as a GMP number.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-div-r.php
 */
function gmp_div_r(GMP $n, GMP $d, $round = GMP_ROUND_ZERO)
{
}

/**
 * Exact division of numbers
 *
 * @param GMP $n The number being divided.
 * @param GMP $d The number that <code>a</code> is being divided by.
 *
 * @return GMP A GMP number <code>resource</code> in PHP 5.5 and earlier, or a <code>GMP</code> object in PHP 5.6 and later.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-divexact.php
 */
function gmp_divexact(GMP $n, GMP $d)
{
}

/**
 * Export to a binary string
 *
 * @param GMP $gmpnumber The GMP number being exported
 * @param int|null $word_size Default value is 1. The number of bytes in each chunk of binary data. This is mainly used in conjunction with the options parameter.
 * @param int|null $options Default value is GMP_MSW_FIRST | GMP_NATIVE_ENDIAN.
 *
 * @return string Returns a string or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.6.1, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-export.php
 */
function gmp_export(GMP $gmpnumber, $word_size = 1, $options = GMP_MSW_FIRST | GMP_NATIVE_ENDIAN)
{
}

/**
 * Factorial
 *
 * @param mixed $a The factorial number.
 *
 * @return GMP A GMP number <code>resource</code> in PHP 5.5 and earlier, or a <code>GMP</code> object in PHP 5.6 and later.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-fact.php
 */
function gmp_fact($a)
{
}

/**
 * Calculate GCD
 *
 * @param GMP $a Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 * @param GMP $b Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 *
 * @return GMP A positive GMP number that divides into both
 * <code>a</code> and <code>b</code>.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-gcd.php
 */
function gmp_gcd(GMP $a, GMP $b)
{
}

/**
 * Calculate GCD and multipliers
 *
 * @param GMP $a Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 * @param GMP $b Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 *
 * @return array An <code>array</code> of GMP numbers.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-gcdext.php
 */
function gmp_gcdext(GMP $a, GMP $b)
{
}

/**
 * Hamming distance
 *
 * @param GMP $a Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 * @param GMP $b Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 *
 * @return int A GMP number <code>resource</code> in PHP 5.5 and earlier, or a <code>GMP</code> object in PHP 5.6 and later.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-hamdist.php
 */
function gmp_hamdist(GMP $a, GMP $b)
{
}

/**
 * Import from a binary string
 *
 * @param string $data The binary string being imported
 * @param int|null $word_size Default value is 1. The number of bytes in each chunk of binary data. This is mainly used in conjunction with the options parameter.
 * @param int|null $options Default value is GMP_MSW_FIRST | GMP_NATIVE_ENDIAN.
 *
 * @return GMP Returns a GMP number or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.6.1, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-import.php
 */
function gmp_import($data, $word_size = 1, $options = GMP_MSW_FIRST | GMP_NATIVE_ENDIAN)
{
}

/**
 * Create GMP number
 *
 * @param mixed $number An integer or a string. The string representation can be decimal,
 * hexadecimal or octal.
 * @param int|null $base The base.
 *
 * @return GMP A GMP number <code>resource</code> in PHP 5.5 and earlier, or a <code>GMP</code> object in PHP 5.6 and later.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-init.php
 */
function gmp_init($number, $base = 0)
{
}

/**
 * Convert GMP number to integer
 *
 * @param GMP $gmpnumber Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 *
 * @return int The <code>integer</code> value of <code>gmpnumber</code>.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-intval.php
 */
function gmp_intval(GMP $gmpnumber)
{
}

/**
 * Inverse by modulo
 *
 * @param GMP $a Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 * @param GMP $b Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 *
 * @return GMP A GMP number on success or <code>FALSE</code> if an inverse does not exist.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-invert.php
 */
function gmp_invert(GMP $a, GMP $b)
{
}

/**
 * Jacobi symbol
 *
 * @param GMP $a Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 * @param GMP $p Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 *
 * @return int A GMP number <code>resource</code> in PHP 5.5 and earlier, or a <code>GMP</code> object in PHP 5.6 and later.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-jacobi.php
 */
function gmp_jacobi(GMP $a, GMP $p)
{
}

/**
 * Legendre symbol
 *
 * @param GMP $a Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 * @param GMP $p Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 *
 * @return int A GMP number <code>resource</code> in PHP 5.5 and earlier, or a <code>GMP</code> object in PHP 5.6 and later.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-legendre.php
 */
function gmp_legendre(GMP $a, GMP $p)
{
}

/**
 * Modulo operation
 *
 * @param GMP $n Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 * @param GMP $d The modulo that is being evaluated.
 *
 * @return GMP A GMP number <code>resource</code> in PHP 5.5 and earlier, or a <code>GMP</code> object in PHP 5.6 and later.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-mod.php
 */
function gmp_mod(GMP $n, GMP $d)
{
}

/**
 * Multiply numbers
 *
 * @param GMP $a A number that will be multiplied by <code>b</code>.
 * @param GMP $b A number that will be multiplied by <code>a</code>.
 *
 * @return GMP A GMP number <code>resource</code> in PHP 5.5 and earlier, or a <code>GMP</code> object in PHP 5.6 and later.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-mul.php
 */
function gmp_mul(GMP $a, GMP $b)
{
}

/**
 * Negate number
 *
 * @param GMP $a Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 *
 * @return GMP Returns -<code>a</code>, as a GMP number.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-neg.php
 */
function gmp_neg(GMP $a)
{
}

/**
 * Find next prime number
 *
 * @param int $a Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 *
 * @return GMP Return the next prime number greater than <code>a</code>,
 * as a GMP number.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-nextprime.php
 */
function gmp_nextprime($a)
{
}

/**
 * Bitwise OR
 *
 * @param GMP $a Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 * @param GMP $b Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 *
 * @return GMP A GMP number <code>resource</code> in PHP 5.5 and earlier, or a <code>GMP</code> object in PHP 5.6 and later.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-or.php
 */
function gmp_or(GMP $a, GMP $b)
{
}

/**
 * Perfect square check
 *
 * @param GMP $a The number being checked as a perfect square.
 *
 * @return bool Returns <code>TRUE</code> if <code>a</code> is a perfect square,
 * <code>FALSE</code> otherwise.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-perfect-square.php
 */
function gmp_perfect_square(GMP $a)
{
}

/**
 * Population count
 *
 * @param GMP $a Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 *
 * @return int The population count of <code>a</code>, as an <code>integer</code>.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-popcount.php
 */
function gmp_popcount(GMP $a)
{
}

/**
 * Raise number into power
 *
 * @param GMP $base The base number.
 * @param int $exp The positive power to raise the <code>base</code>.
 *
 * @return GMP The new (raised) number, as a GMP number. The case of
 * <code>0^0</code> yields 1.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-pow.php
 */
function gmp_pow(GMP $base, $exp)
{
}

/**
 * Raise number into power with modulo
 *
 * @param GMP $base The base number.
 * @param GMP $exp The positive power to raise the <code>base</code>.
 * @param GMP $mod The modulo.
 *
 * @return GMP The new (raised) number, as a GMP number.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-powm.php
 */
function gmp_powm(GMP $base, GMP $exp, GMP $mod)
{
}

/**
 * Check if number is "probably prime"
 *
 * @param GMP $a The number being checked as a prime.
 * @param int|null $reps Reasonable values
 * of <code>reps</code> vary from 5 to 10 (default being
 * 10); a higher value lowers the probability for a non-prime to
 * pass as a "probable" prime.
 *
 * @return int If this function returns 0, <code>a</code> is
 * definitely not prime. If it returns 1, then
 * <code>a</code> is "probably" prime. If it returns 2,
 * then <code>a</code> is surely prime.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-prob-prime.php
 */
function gmp_prob_prime(GMP $a, $reps = 10)
{
}

/**
 * Random number
 *
 * @param int|null $limiter The limiter.
 *
 * @return GMP A random GMP number.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @deprecated as of PHP 7.2.0
 *
 * @link http://www.php.net/manual/en/function.gmp-random.php
 */
function gmp_random($limiter = 20)
{
}

/**
 * Random number
 *
 * @param int $bits The number of bits.
 *
 * @return GMP A random GMP number.
 *
 * @since PHP 5 >= 5.6.3, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-random-bits.php
 */
function gmp_random_bits($bits)
{
}

/**
 * Random number
 *
 * @param GMP $min A GMP number representing the lower bound for the random number
 * @param GMP $max A GMP number representing the upper bound for the random number
 *
 * @return GMP A random GMP number.
 *
 * @since PHP 5 >= 5.6.3, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-random-range.php
 */
function gmp_random_range(GMP $min, GMP $max)
{
}

/**
 * Take the integer part of nth root
 *
 * @param GMP $a Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 * @param int $nth The positive root to take of <code>a</code>.
 *
 * @return GMP The integer component of the resultant root, as a GMP number.
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-root.php
 */
function gmp_root(GMP $a, $nth)
{
}

/**
 * Take the integer part and remainder of nth root
 *
 * @param GMP $a Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 * @param int $nth The positive root to take of <code>a</code>.
 *
 * @return array A two element array, where the first element is the integer component of
 * the root, and the second element is the remainder, both represented as GMP
 * numbers.
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-rootrem.php
 */
function gmp_rootrem(GMP $a, $nth)
{
}

/**
 * Scan for 0
 *
 * @param GMP $a The number to scan.
 * @param int $start The starting bit.
 *
 * @return int Returns the index of the found bit, as an <code>integer</code>. The
 * index starts from 0.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-scan0.php
 */
function gmp_scan0(GMP $a, $start)
{
}

/**
 * Scan for 1
 *
 * @param GMP $a The number to scan.
 * @param int $start The starting bit.
 *
 * @return int Returns the index of the found bit, as an <code>integer</code>.
 * If no set bit is found, -1 is returned.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-scan1.php
 */
function gmp_scan1(GMP $a, $start)
{
}

/**
 * Set bit
 *
 * @param GMP $a The value to modify.
 * @param int $index The index of the bit to set. Index 0 represents the least significant bit.
 * @param bool|null $bit_on True to set the bit (set it to 1/on); false to clear the bit (set it to 0/off).
 *
 * @return void A GMP number <code>resource</code> in PHP 5.5 and earlier, or a <code>GMP</code> object in PHP 5.6 and later.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-setbit.php
 */
function gmp_setbit(GMP $a, $index, $bit_on = true)
{
}

/**
 * Sign of number
 *
 * @param GMP $a Either a GMP number <code>resource</code> in PHP 5.5 and earlier,
 * a <code>GMP</code> object in PHP 5.6 and later, or a numeric
 * string provided that it is possible to convert the latter to an
 * <code>integer</code>.
 *
 * @return int Returns 1 if <code>a</code> is positive,
 * -1 if <code>a</code> is negative,
 * and 0 if <code>a</code> is zero.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-sign.php
 */
function gmp_sign(GMP $a)
{
}

/**
 * Calculate square root
 *
 * @param GMP $a Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 *
 * @return GMP The integer portion of the square root, as a GMP number.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-sqrt.php
 */
function gmp_sqrt(GMP $a)
{
}

/**
 * Square root with remainder
 *
 * @param GMP $a The number being square rooted.
 *
 * @return array Returns array where first element is the integer square root of
 * <code>a</code> and the second is the remainder
 * (i.e., the difference between <code>a</code> and the
 * first element squared).
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-sqrtrem.php
 */
function gmp_sqrtrem(GMP $a)
{
}

/**
 * Convert GMP number to string
 *
 * @param GMP $gmpnumber The GMP number that will be converted to a string.
 * @param int|null $base The base of the returned number. The default base is 10.
 * Allowed values for the base are from 2 to 62 and -2 to -36.
 *
 * @return string The number, as a <code>string</code>.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-strval.php
 */
function gmp_strval(GMP $gmpnumber, $base = 10)
{
}

/**
 * Subtract numbers
 *
 * @param GMP $a The number being subtracted from.
 * @param GMP $b The number subtracted from <code>a</code>.
 *
 * @return GMP A GMP number <code>resource</code> in PHP 5.5 and earlier, or a <code>GMP</code> object in PHP 5.6 and later.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-sub.php
 */
function gmp_sub(GMP $a, GMP $b)
{
}

/**
 * Tests if a bit is set
 *
 * @param GMP $a Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 * @param int $index The bit to test
 *
 * @return bool Returns <code>TRUE</code> if the bit is set in resource <code>$a</code>,
 * otherwise <code>FALSE</code>.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-testbit.php
 */
function gmp_testbit(GMP $a, $index)
{
}

/**
 * Bitwise XOR
 *
 * @param GMP $a Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 * @param GMP $b Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a <code>GMP</code> object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 *
 * @return GMP A GMP number <code>resource</code> in PHP 5.5 and earlier, or a <code>GMP</code> object in PHP 5.6 and later.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-xor.php
 */
function gmp_xor(GMP $a, GMP $b)
{
}
