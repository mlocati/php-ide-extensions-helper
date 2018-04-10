<?php
// Start of extension: hash
// - parsed on POSIX with PHP 7.1.16 (extension version 1.0)
// - parsed on Windows with PHP 7.1.16 (extension version 1.0)

/**
 * Optional flag for <code>hash_init</code>.
 * Indicates that the HMAC digest-keying algorithm should be
 * applied to the current hashing context.
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
 * @param string $algo Name of selected hashing algorithm (e.g. "md5", "sha256", "haval160,4", etc..)
 * @param string $data Message to be hashed.
 * @param bool|null $raw_output When set to <code>TRUE</code>, outputs raw binary data.
 * <code>FALSE</code> outputs lowercase hexits.
 *
 * @return string Returns a string containing the calculated message digest as lowercase hexits
 * unless <code>raw_output</code> is set to true in which case the raw
 * binary representation of the message digest is returned.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
 *
 * @link http://www.php.net/manual/en/function.hash.php
 */
function hash(string $algo, string $data, bool $raw_output = false): string
{
}

/**
 * Return a list of registered hashing algorithms
 *
 * @return array Returns a numerically indexed array containing the list of supported
 * hashing algorithms.
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
 * @param HashContext $context Hashing context returned by <code>hash_init</code>.
 *
 * @return HashContext Returns a copy of Hashing Context.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.hash-copy.php
 */
function hash_copy(HashContext $context): HashContext
{
}

/**
 * Timing attack safe string comparison
 *
 * @param string $known_string The <code>string</code> of known length to compare against
 * @param string $user_string The user-supplied string
 *
 * @return bool Returns <code>TRUE</code> when the two strings are equal, <code>FALSE</code> otherwise.
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.hash-equals.php
 */
function hash_equals(string $known_string, string $user_string): bool
{
}

/**
 * Generate a hash value using the contents of a given file
 *
 * @param string $algo Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..)
 * @param string $filename URL describing location of file to be hashed; Supports fopen wrappers.
 * @param bool|null $raw_output When set to <code>TRUE</code>, outputs raw binary data.
 * <code>FALSE</code> outputs lowercase hexits.
 *
 * @return string Returns a string containing the calculated message digest as lowercase hexits
 * unless <code>raw_output</code> is set to true in which case the raw
 * binary representation of the message digest is returned.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
 *
 * @link http://www.php.net/manual/en/function.hash-file.php
 */
function hash_file(string $algo, string $filename, bool $raw_output = false): string
{
}

/**
 * Finalize an incremental hash and return resulting digest
 *
 * @param HashContext $context Hashing context returned by <code>hash_init</code>.
 * @param bool|null $raw_output When set to <code>TRUE</code>, outputs raw binary data.
 * <code>FALSE</code> outputs lowercase hexits.
 *
 * @return string Returns a string containing the calculated message digest as lowercase hexits
 * unless <code>raw_output</code> is set to true in which case the raw
 * binary representation of the message digest is returned.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
 *
 * @link http://www.php.net/manual/en/function.hash-final.php
 */
function hash_final(HashContext $context, bool $raw_output = false): string
{
}

/**
 * Generate a HKDF key derivation of a supplied key input
 *
 * @param string $algo Name of selected hashing algorithm (i.e. "sha256", "sha512", "haval160,4", etc..)
 * See <code>hash_algos</code> for a list of supported algorithms.
 * <blockquote>
 * Non-cryptographic hash functions are not allowed.
 * </blockquote>
 * @param string $ikm Input keying material (raw binary). Cannot be empty.
 * @param int|null $length Desired output length in bytes.
 * Cannot be greater than 255 times the chosen hash function size.
 * @param string|null $info Application/context-specific info string.
 * @param string|null $salt Salt to use during derivation.
 *
 * @return string Returns a string containing a raw binary representation of the derived key
 * (also known as output keying material - OKM); or <code>FALSE</code> on failure.
 *
 * @since PHP 7 >= 7.1.2
 *
 * @link http://www.php.net/manual/en/function.hash-hkdf.php
 */
function hash_hkdf(string $algo, string $ikm, int $length = 0, string $info = '', string $salt = ''): string
{
}

/**
 * Generate a keyed hash value using the HMAC method
 *
 * @param string $algo Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..) See <code>hash_hmac_algos</code> for a list of supported algorithms.
 * @param string $data Message to be hashed.
 * @param string $key Shared secret key used for generating the HMAC variant of the message digest.
 * @param bool|null $raw_output When set to <code>TRUE</code>, outputs raw binary data.
 * <code>FALSE</code> outputs lowercase hexits.
 *
 * @return string Returns a string containing the calculated message digest as lowercase hexits
 * unless <code>raw_output</code> is set to true in which case the raw
 * binary representation of the message digest is returned.
 * Returns <code>FALSE</code> when <code>algo</code> is unknown or is a
 * non-cryptographic hash function.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
 *
 * @link http://www.php.net/manual/en/function.hash-hmac.php
 */
function hash_hmac(string $algo, string $data, string $key, bool $raw_output = false): string
{
}

/**
 * Generate a keyed hash value using the HMAC method and the contents of a given file
 *
 * @param string $algo Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..) See <code>hash_hmac_algos</code> for a list of supported algorithms.
 * @param string $filename URL describing location of file to be hashed; Supports fopen wrappers.
 * @param string $key Shared secret key used for generating the HMAC variant of the message digest.
 * @param bool|null $raw_output When set to <code>TRUE</code>, outputs raw binary data.
 * <code>FALSE</code> outputs lowercase hexits.
 *
 * @return string Returns a string containing the calculated message digest as lowercase hexits
 * unless <code>raw_output</code> is set to true in which case the raw
 * binary representation of the message digest is returned.
 * Returns <code>FALSE</code> when <code>algo</code> is unknown or is a
 * non-cryptographic hash function, or if the file
 * <code>filename</code> cannot be read.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
 *
 * @link http://www.php.net/manual/en/function.hash-hmac-file.php
 */
function hash_hmac_file(string $algo, string $filename, string $key, bool $raw_output = false): string
{
}

/**
 * Initialize an incremental hashing context
 *
 * @param string $algo Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..). For a list of supported algorithms see <code>hash_algos</code>.
 * @param int|null $options Optional settings for hash generation, currently supports only one option:
 * <code>HASH_HMAC</code>. When specified, the <code>key</code>
 * <code>must</code> be specified.
 * @param string|null $key When <code>HASH_HMAC</code> is specified for <code>options</code>,
 * a shared secret key to be used with the HMAC hashing method must be supplied in this
 * parameter.
 *
 * @return HashContext Returns a Hashing Context for use with <code>hash_update</code>,
 * <code>hash_update_stream</code>, <code>hash_update_file</code>,
 * and <code>hash_final</code>.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
 *
 * @link http://www.php.net/manual/en/function.hash-init.php
 */
function hash_init(string $algo, int $options = 0, string $key = null): HashContext
{
}

/**
 * Generate a PBKDF2 key derivation of a supplied password
 *
 * @param string $algo Name of selected hashing algorithm (i.e. <code>md5</code>,
 * <code>sha256</code>, <code>haval160,4</code>, etc..) See
 * <code>hash_algos</code> for a list of supported algorithms.
 * @param string $password The password to use for the derivation.
 * @param string $salt The salt to use for the derivation. This value should be generated randomly.
 * @param int $iterations The number of internal iterations to perform for the derivation.
 * @param int|null $length The length of the output string. If <code>raw_output</code>
 * is <code>TRUE</code> this corresponds to the byte-length of the derived key, if
 * <code>raw_output</code> is <code>FALSE</code> this corresponds to twice the
 * byte-length of the derived key (as every byte of the key is returned as
 * two hexits).
 * @param bool|null $raw_output When set to <code>TRUE</code>, outputs raw binary data. <code>FALSE</code> outputs lowercase
 * hexits.
 *
 * @return string Returns a string containing the derived key as lowercase hexits unless
 * <code>raw_output</code> is set to <code>TRUE</code> in which case the raw
 * binary representation of the derived key is returned.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.hash-pbkdf2.php
 */
function hash_pbkdf2(string $algo, string $password, string $salt, int $iterations, int $length = 0, bool $raw_output = false): string
{
}

/**
 * Pump data into an active hashing context
 *
 * @param HashContext $context Hashing context returned by <code>hash_init</code>.
 * @param string $data Message to be included in the hash digest.
 *
 * @return bool Returns <code>TRUE</code>.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
 *
 * @link http://www.php.net/manual/en/function.hash-update.php
 */
function hash_update(HashContext $context, string $data): bool
{
}

/**
 * Pump data into an active hashing context from a file
 *
 * @param HashContext $hcontext Hashing context returned by <code>hash_init</code>.
 * @param string $filename URL describing location of file to be hashed; Supports fopen wrappers.
 * @param resource|null $scontext Stream context as returned by <code>stream_context_create</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
 *
 * @link http://www.php.net/manual/en/function.hash-update-file.php
 */
function hash_update_file(HashContext $hcontext, string $filename, $scontext = null): bool
{
}

/**
 * Pump data into an active hashing context from an open stream
 *
 * @param HashContext $context Hashing context returned by <code>hash_init</code>.
 * @param resource $handle Open file handle as returned by any stream creation function.
 * @param int|null $length Maximum number of characters to copy from <code>handle</code>
 * into the hashing context.
 *
 * @return int Actual number of bytes added to the hashing context from <code>handle</code>.
 *
 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
 *
 * @link http://www.php.net/manual/en/function.hash-update-stream.php
 */
function hash_update_stream(HashContext $context, $handle, int $length = -1): int
{
}

/**
 * Computes hash
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @param int $hash The hash ID. One of the <code>MHASH_hashname</code> constants.
 * @param string $data The user input, as a string.
 * @param string $key If specified, the function will return the resulting HMAC instead.
 * HMAC is keyed hashing for message authentication, or simply a message
 * digest that depends on the specified key. Not all algorithms
 * supported in mhash can be used in HMAC mode.
 *
 * @return string Returns the resulting hash (also called digest) or HMAC as a string, or
 * <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mhash.php
 */
function mhash(int $hash, string $data, string $key = null): string
{
}

/**
 * Gets the highest available hash ID
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @return int Returns the highest available hash ID. Hashes are numbered from 0 to this
 * hash ID.
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
 * @param int $hash The hash ID. One of the <code>MHASH_hashname</code> constants.
 *
 * @return int Returns the size in bytes or <code>FALSE</code>, if the <code>hash</code>
 * does not exist.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mhash-get-block-size.php
 */
function mhash_get_block_size(int $hash): int
{
}

/**
 * Gets the name of the specified hash
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @param int $hash The hash ID. One of the <code>MHASH_hashname</code> constants.
 *
 * @return string Returns the name of the hash or <code>FALSE</code>, if the hash does not exist.
 *
 * @since PHP 4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mhash-get-hash-name.php
 */
function mhash_get_hash_name(int $hash): string
{
}

/**
 * Generates a key
 *
 * WARNING: this may be available on Windows but not on POSIX
 *
 * @param int $hash The hash ID used to create the key.
 * One of the <code>MHASH_hashname</code> constants.
 * @param string $password An user supplied password.
 * @param string $salt Must be different and random enough for every key you generate in
 * order to create different keys. Because <code>salt</code>
 * must be known when you check the keys, it is a good idea to append
 * the key to it. Salt has a fixed length of 8 bytes and will be padded
 * with zeros if you supply less bytes.
 * @param int $bytes The key length, in bytes.
 *
 * @return string Returns the generated key as a string, or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.mhash-keygen-s2k.php
 */
function mhash_keygen_s2k(int $hash, string $password, string $salt, int $bytes): string
{
}
