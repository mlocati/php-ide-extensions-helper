<?php
// Start of extension: gmp
// - parsed on POSIX with PHP 7.1.15 (extension version 7.1.15)
// - parsed on Windows with PHP 7.1.15 (extension version 7.1.15)

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
const GMP_MPIR_VERSION = '3.0.0';

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
 * @param mixed $a
 *
 * @return GMP
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-abs.php
 */
function gmp_abs($a)
{
}

/**
 * Add numbers
 *
 * @param mixed $a
 * @param mixed $b
 *
 * @return GMP
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-add.php
 */
function gmp_add($a, $b)
{
}

/**
 * Bitwise AND
 *
 * @param mixed $a
 * @param mixed $b
 *
 * @return GMP
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-and.php
 */
function gmp_and($a, $b)
{
}

/**
 * Clear bit
 *
 * @param mixed $a
 * @param mixed $index
 *
 * @return void
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-clrbit.php
 */
function gmp_clrbit($a, $index)
{
}

/**
 * Compare numbers
 *
 * @param mixed $a
 * @param mixed $b
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-cmp.php
 */
function gmp_cmp($a, $b): int
{
}

/**
 * Calculates one's complement
 *
 * @param mixed $a
 *
 * @return GMP
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-com.php
 */
function gmp_com($a)
{
}

/**
 * Alias of <code>gmp_div_q</code>
 *
 * @param mixed $a
 * @param mixed $b
 * @param mixed|null $round
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
 * @param mixed $a
 * @param mixed $b
 * @param mixed|null $round
 *
 * @return GMP
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-div-q.php
 */
function gmp_div_q($a, $b, $round = null)
{
}

/**
 * Divide numbers and get quotient and remainder
 *
 * @param mixed $a
 * @param mixed $b
 * @param mixed|null $round
 *
 * @return array
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-div-qr.php
 */
function gmp_div_qr($a, $b, $round = null): array
{
}

/**
 * Remainder of the division of numbers
 *
 * @param mixed $a
 * @param mixed $b
 * @param mixed|null $round
 *
 * @return GMP
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-div-r.php
 */
function gmp_div_r($a, $b, $round = null)
{
}

/**
 * Exact division of numbers
 *
 * @param mixed $a
 * @param mixed $b
 *
 * @return GMP
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-divexact.php
 */
function gmp_divexact($a, $b)
{
}

/**
 * Export to a binary string
 *
 * @param mixed $gmpnumber
 * @param mixed|null $word_size
 * @param mixed|null $options
 *
 * @return string
 *
 * @since PHP 5 >= 5.6.1, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-export.php
 */
function gmp_export($gmpnumber, $word_size = null, $options = null): string
{
}

/**
 * Factorial
 *
 * @param mixed $a
 *
 * @return GMP
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
 * @param mixed $a
 * @param mixed $b
 *
 * @return GMP
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-gcd.php
 */
function gmp_gcd($a, $b)
{
}

/**
 * Calculate GCD and multipliers
 *
 * @param mixed $a
 * @param mixed $b
 *
 * @return array
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-gcdext.php
 */
function gmp_gcdext($a, $b): array
{
}

/**
 * Hamming distance
 *
 * @param mixed $a
 * @param mixed $b
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-hamdist.php
 */
function gmp_hamdist($a, $b): int
{
}

/**
 * Import from a binary string
 *
 * @param mixed $data
 * @param mixed|null $word_size
 * @param mixed|null $options
 *
 * @return GMP
 *
 * @since PHP 5 >= 5.6.1, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-import.php
 */
function gmp_import($data, $word_size = null, $options = null)
{
}

/**
 * Create GMP number
 *
 * @param mixed $number
 * @param mixed|null $base
 *
 * @return GMP
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-init.php
 */
function gmp_init($number, $base = null)
{
}

/**
 * Convert GMP number to integer
 *
 * @param mixed $gmpnumber
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-intval.php
 */
function gmp_intval($gmpnumber): int
{
}

/**
 * Inverse by modulo
 *
 * @param mixed $a
 * @param mixed $b
 *
 * @return GMP
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-invert.php
 */
function gmp_invert($a, $b)
{
}

/**
 * Jacobi symbol
 *
 * @param mixed $a
 * @param mixed $b
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-jacobi.php
 */
function gmp_jacobi($a, $b): int
{
}

/**
 * Legendre symbol
 *
 * @param mixed $a
 * @param mixed $b
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-legendre.php
 */
function gmp_legendre($a, $b): int
{
}

/**
 * Modulo operation
 *
 * @param mixed $a
 * @param mixed $b
 *
 * @return GMP
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-mod.php
 */
function gmp_mod($a, $b)
{
}

/**
 * Multiply numbers
 *
 * @param mixed $a
 * @param mixed $b
 *
 * @return GMP
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-mul.php
 */
function gmp_mul($a, $b)
{
}

/**
 * Negate number
 *
 * @param mixed $a
 *
 * @return GMP
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-neg.php
 */
function gmp_neg($a)
{
}

/**
 * Find next prime number
 *
 * @param mixed $a
 *
 * @return GMP
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
 * @param mixed $a
 * @param mixed $b
 *
 * @return GMP
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-or.php
 */
function gmp_or($a, $b)
{
}

/**
 * Perfect square check
 *
 * @param mixed $a
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-perfect-square.php
 */
function gmp_perfect_square($a): bool
{
}

/**
 * Population count
 *
 * @param mixed $a
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-popcount.php
 */
function gmp_popcount($a): int
{
}

/**
 * Raise number into power
 *
 * @param mixed $base
 * @param mixed $exp
 *
 * @return GMP
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-pow.php
 */
function gmp_pow($base, $exp)
{
}

/**
 * Raise number into power with modulo
 *
 * @param mixed $base
 * @param mixed $exp
 * @param mixed $mod
 *
 * @return GMP
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-powm.php
 */
function gmp_powm($base, $exp, $mod)
{
}

/**
 * Check if number is "probably prime"
 *
 * @param mixed $a
 * @param mixed|null $reps
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-prob-prime.php
 */
function gmp_prob_prime($a, $reps = null): int
{
}

/**
 * Random number
 *
 * @param mixed|null $limiter
 *
 * @return GMP
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @deprecated as of PHP 7.2.0
 *
 * @link http://www.php.net/manual/en/function.gmp-random.php
 */
function gmp_random($limiter = null)
{
}

/**
 * Random number
 *
 * @param mixed $bits
 *
 * @return GMP
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
 * @param mixed $min
 * @param mixed $max
 *
 * @return GMP
 *
 * @since PHP 5 >= 5.6.3, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-random-range.php
 */
function gmp_random_range($min, $max)
{
}

/**
 * Sets the RNG seed
 *
 * @param mixed $seed
 *
 * @return void
 *
 * @since PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-random-seed.php
 */
function gmp_random_seed($seed)
{
}

/**
 * Take the integer part of nth root
 *
 * @param mixed $a
 * @param mixed $nth
 *
 * @return GMP
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-root.php
 */
function gmp_root($a, $nth)
{
}

/**
 * Take the integer part and remainder of nth root
 *
 * @param mixed $a
 * @param mixed $nth
 *
 * @return array
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-rootrem.php
 */
function gmp_rootrem($a, $nth): array
{
}

/**
 * Scan for 0
 *
 * @param mixed $a
 * @param mixed $start
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-scan0.php
 */
function gmp_scan0($a, $start): int
{
}

/**
 * Scan for 1
 *
 * @param mixed $a
 * @param mixed $start
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-scan1.php
 */
function gmp_scan1($a, $start): int
{
}

/**
 * Set bit
 *
 * @param mixed $a
 * @param mixed $index
 * @param mixed|null $set_clear
 *
 * @return void
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-setbit.php
 */
function gmp_setbit($a, $index, $set_clear = null)
{
}

/**
 * Sign of number
 *
 * @param mixed $a
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-sign.php
 */
function gmp_sign($a): int
{
}

/**
 * Calculate square root
 *
 * @param mixed $a
 *
 * @return GMP
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-sqrt.php
 */
function gmp_sqrt($a)
{
}

/**
 * Square root with remainder
 *
 * @param mixed $a
 *
 * @return array
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-sqrtrem.php
 */
function gmp_sqrtrem($a): array
{
}

/**
 * Convert GMP number to string
 *
 * @param mixed $gmpnumber
 * @param mixed|null $base
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-strval.php
 */
function gmp_strval($gmpnumber, $base = null): string
{
}

/**
 * Subtract numbers
 *
 * @param mixed $a
 * @param mixed $b
 *
 * @return GMP
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-sub.php
 */
function gmp_sub($a, $b)
{
}

/**
 * Tests if a bit is set
 *
 * @param mixed $a
 * @param mixed $index
 *
 * @return bool
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-testbit.php
 */
function gmp_testbit($a, $index): bool
{
}

/**
 * Bitwise XOR
 *
 * @param mixed $a
 * @param mixed $b
 *
 * @return GMP
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.gmp-xor.php
 */
function gmp_xor($a, $b)
{
}
