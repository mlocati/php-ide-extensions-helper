<?php
// Start of extension: hash
// - parsed on POSIX with PHP 7.0.28 (extension version 1.0)
// - parsed on Windows with PHP 7.0.28 (extension version 1.0)

/**
 * Optional flag for <code>hash_init</code>.
 *      Indicates that the HMAC digest-keying algorithm should be
 *      applied to the current hashing context.
 *
 * @link http://www.php.net/manual/en/hash.constants.php#constant.hash-hmac
 *
 * @var int
 */
const HASH_HMAC = 1;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_ADLER32 = 18;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_CRC32 = 0;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_CRC32B = 9;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_FNV132 = 29;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_FNV164 = 31;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_FNV1A32 = 30;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_FNV1A64 = 32;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_GOST = 8;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_HAVAL128 = 13;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_HAVAL160 = 12;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_HAVAL192 = 11;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_HAVAL224 = 10;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_HAVAL256 = 3;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_JOAAT = 33;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_MD2 = 28;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_MD4 = 16;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_MD5 = 1;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_RIPEMD128 = 23;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_RIPEMD160 = 5;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_RIPEMD256 = 24;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_RIPEMD320 = 25;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_SHA1 = 2;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_SHA224 = 19;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_SHA256 = 17;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_SHA384 = 21;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_SHA512 = 20;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_SNEFRU256 = 27;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_TIGER = 7;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_TIGER128 = 14;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_TIGER160 = 15;

/**
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @var int
 */
const MHASH_WHIRLPOOL = 22;

/**
 * Generate a hash value (message digest)
 *
 * mixed $algo
 * mixed $data
 * mixed|null $raw_output
 *
 * @return string
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
 *
 * @link http://www.php.net/manual/en/function.hash.php
 */
function hash($algo, $data, $raw_output = null): string
{
}

/**
 * Return a list of registered hashing algorithms
 *
 * @return array
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
 *
 * @link http://www.php.net/manual/en/function.hash-algos.php
 */
function hash_algos(): array
{
}

/**
 * Copy hashing context
 *
 * mixed $context
 *
 * @return HashContext
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.hash-copy.php
 */
function hash_copy($context)
{
}

/**
 * Timing attack safe string comparison
 *
 * mixed $known_string
 * mixed $user_string
 *
 * @return bool
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.hash-equals.php
 */
function hash_equals($known_string, $user_string): bool
{
}

/**
 * Generate a hash value using the contents of a given file
 *
 * mixed $algo
 * mixed $filename
 * mixed|null $raw_output
 *
 * @return string
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
 *
 * @link http://www.php.net/manual/en/function.hash-file.php
 */
function hash_file($algo, $filename, $raw_output = null): string
{
}

/**
 * Finalize an incremental hash and return resulting digest
 *
 * mixed $context
 * mixed|null $raw_output
 *
 * @return string
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
 *
 * @link http://www.php.net/manual/en/function.hash-final.php
 */
function hash_final($context, $raw_output = null): string
{
}

/**
 * Generate a keyed hash value using the HMAC method
 *
 * mixed $algo
 * mixed $data
 * mixed $key
 * mixed|null $raw_output
 *
 * @return string
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
 *
 * @link http://www.php.net/manual/en/function.hash-hmac.php
 */
function hash_hmac($algo, $data, $key, $raw_output = null): string
{
}

/**
 * Generate a keyed hash value using the HMAC method and the contents of a given file
 *
 * mixed $algo
 * mixed $filename
 * mixed $key
 * mixed|null $raw_output
 *
 * @return string
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
 *
 * @link http://www.php.net/manual/en/function.hash-hmac-file.php
 */
function hash_hmac_file($algo, $filename, $key, $raw_output = null): string
{
}

/**
 * Initialize an incremental hashing context
 *
 * mixed $algo
 * mixed|null $options
 * mixed|null $key
 *
 * @return HashContext
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
 *
 * @link http://www.php.net/manual/en/function.hash-init.php
 */
function hash_init($algo, $options = null, $key = null)
{
}

/**
 * Generate a PBKDF2 key derivation of a supplied password
 *
 * mixed $algo
 * mixed $password
 * mixed $salt
 * mixed $iterations
 * mixed|null $length
 * mixed|null $raw_output
 *
 * @return string
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.hash-pbkdf2.php
 */
function hash_pbkdf2($algo, $password, $salt, $iterations, $length = null, $raw_output = null): string
{
}

/**
 * Pump data into an active hashing context
 *
 * mixed $context
 * mixed $data
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
 *
 * @link http://www.php.net/manual/en/function.hash-update.php
 */
function hash_update($context, $data): bool
{
}

/**
 * Pump data into an active hashing context from a file
 *
 * mixed $context
 * mixed $filename
 * mixed|null $context
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
 *
 * @link http://www.php.net/manual/en/function.hash-update-file.php
 */
function hash_update_file($context, $filename, $context = null): bool
{
}

/**
 * Pump data into an active hashing context from an open stream
 *
 * mixed $context
 * mixed $handle
 * mixed|null $length
 *
 * @return int
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
 *
 * @link http://www.php.net/manual/en/function.hash-update-stream.php
 */
function hash_update_stream($context, $handle, $length = null): int
{
}

/**
 * Computes hash
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * mixed $hash
 * mixed $data
 * mixed|null $key
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mhash.php
 */
function mhash($hash, $data, $key = null): string
{
}

/**
 * Gets the highest available hash ID
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mhash-count.php
 */
function mhash_count(): int
{
}

/**
 * Gets the block size of the specified hash
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * mixed $hash
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mhash-get-block-size.php
 */
function mhash_get_block_size($hash): int
{
}

/**
 * Gets the name of the specified hash
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * mixed $hash
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mhash-get-hash-name.php
 */
function mhash_get_hash_name($hash): string
{
}

/**
 * Generates a key
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * mixed $hash
 * mixed $input_password
 * mixed $salt
 * mixed $bytes
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mhash-keygen-s2k.php
 */
function mhash_keygen_s2k($hash, $input_password, $salt, $bytes): string
{
}
