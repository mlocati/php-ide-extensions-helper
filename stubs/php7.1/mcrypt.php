<?php
// Start of extension: mcrypt
// - parsed on POSIX with PHP 7.1.16 (extension version 7.1.16)
// - parsed on Windows with PHP 7.1.16 (extension version 7.1.16)

/**
 * @var string
 */
const MCRYPT_3DES = 'tripledes';

/**
 * @var string
 */
const MCRYPT_ARCFOUR = 'arcfour';

/**
 * @var string
 */
const MCRYPT_ARCFOUR_IV = 'arcfour-iv';

/**
 * @var string
 */
const MCRYPT_BLOWFISH = 'blowfish';

/**
 * @var string
 */
const MCRYPT_BLOWFISH_COMPAT = 'blowfish-compat';

/**
 * @var string
 */
const MCRYPT_CAST_128 = 'cast-128';

/**
 * @var string
 */
const MCRYPT_CAST_256 = 'cast-256';

/**
 * @var string
 */
const MCRYPT_CRYPT = 'crypt';

/**
 * @link http://www.php.net/manual/en/mcrypt.constants.php#constant.mcrypt-decrypt
 *
 * @var int
 */
const MCRYPT_DECRYPT = 1;

/**
 * @var string
 */
const MCRYPT_DES = 'des';

/**
 * @link http://www.php.net/manual/en/mcrypt.constants.php#constant.mcrypt-dev-random
 *
 * @var int
 */
const MCRYPT_DEV_RANDOM = 0;

/**
 * @link http://www.php.net/manual/en/mcrypt.constants.php#constant.mcrypt-dev-urandom
 *
 * @var int
 */
const MCRYPT_DEV_URANDOM = 1;

/**
 * @link http://www.php.net/manual/en/mcrypt.constants.php#constant.mcrypt-encrypt
 *
 * @var int
 */
const MCRYPT_ENCRYPT = 0;

/**
 * @var string
 */
const MCRYPT_ENIGNA = 'crypt';

/**
 * @var string
 */
const MCRYPT_GOST = 'gost';

/**
 * @var string
 */
const MCRYPT_IDEA = 'idea';

/**
 * @var string
 */
const MCRYPT_LOKI97 = 'loki97';

/**
 * @var string
 */
const MCRYPT_MARS = 'mars';

/**
 * @var string
 */
const MCRYPT_MODE_CBC = 'cbc';

/**
 * @var string
 */
const MCRYPT_MODE_CFB = 'cfb';

/**
 * @var string
 */
const MCRYPT_MODE_ECB = 'ecb';

/**
 * @var string
 */
const MCRYPT_MODE_NOFB = 'nofb';

/**
 * @var string
 */
const MCRYPT_MODE_OFB = 'ofb';

/**
 * @var string
 */
const MCRYPT_MODE_STREAM = 'stream';

/**
 * @var string
 */
const MCRYPT_PANAMA = 'panama';

/**
 * @link http://www.php.net/manual/en/mcrypt.constants.php#constant.mcrypt-rand
 *
 * @var int
 */
const MCRYPT_RAND = 2;

/**
 * @var string
 */
const MCRYPT_RC2 = 'rc2';

/**
 * @var string
 */
const MCRYPT_RC6 = 'rc6';

/**
 * @var string
 */
const MCRYPT_RIJNDAEL_128 = 'rijndael-128';

/**
 * @var string
 */
const MCRYPT_RIJNDAEL_192 = 'rijndael-192';

/**
 * @var string
 */
const MCRYPT_RIJNDAEL_256 = 'rijndael-256';

/**
 * @var string
 */
const MCRYPT_SAFER128 = 'safer-sk128';

/**
 * @var string
 */
const MCRYPT_SAFER64 = 'safer-sk64';

/**
 * @var string
 */
const MCRYPT_SAFERPLUS = 'saferplus';

/**
 * @var string
 */
const MCRYPT_SERPENT = 'serpent';

/**
 * @var string
 */
const MCRYPT_SKIPJACK = 'skipjack';

/**
 * @var string
 */
const MCRYPT_THREEWAY = 'threeway';

/**
 * @var string
 */
const MCRYPT_TRIPLEDES = 'tripledes';

/**
 * @var string
 */
const MCRYPT_TWOFISH = 'twofish';

/**
 * @var string
 */
const MCRYPT_WAKE = 'wake';

/**
 * @var string
 */
const MCRYPT_XTEA = 'xtea';

/**
 * Creates an initialization vector (IV) from a random source
 *
 * @param int $size The size of the IV.
 * @param int|null $source The source of the IV. The source can be
 * <code>MCRYPT_RAND</code> (system random number generator),
 * <code>MCRYPT_DEV_RANDOM</code> (read data from
 * <code>/dev/random</code>) and
 * <code>MCRYPT_DEV_URANDOM</code> (read data from
 * <code>/dev/urandom</code>). Prior to 5.3.0,
 * <code>MCRYPT_RAND</code> was the only one supported on Windows.
 *
 * @return string Returns the initialization vector, or <code>FALSE</code> on error.
 *
 * @since PHP 4, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-create-iv.php
 */
function mcrypt_create_iv(int $size, int $source = MCRYPT_DEV_URANDOM): string
{
}

/**
 * Decrypts crypttext with given parameters
 *
 * @param string $cipher One of the <code>MCRYPT_ciphername</code> constants, or the name of the algorithm as string.
 * @param string $key The key with which the data was encrypted. If the provided key size is
 * not supported by the cipher, the function will emit a warning and return <code>FALSE</code>
 * @param string $data The data that will be decrypted with the given <code>cipher</code>
 * and <code>mode</code>. If the size of the data is not n * blocksize,
 * the data will be padded with '<code>\0</code>'.
 * @param string $mode One of the <code>MCRYPT_MODE_modename</code> constants, or one of the following strings: "ecb", "cbc", "cfb", "ofb", "nofb" or "stream".
 * @param string $iv Used for the initialization in CBC, CFB, OFB modes, and in some algorithms in STREAM mode. If the provided IV size is not supported by the chaining mode or no IV was provided, but the chaining mode requires one, the function will emit a warning and return <code>FALSE</code>.
 *
 * @return string Returns the decrypted data as a string or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-decrypt.php
 */
function mcrypt_decrypt(string $cipher, string $key, string $data, string $mode, string $iv): string
{
}

/**
 * Returns the name of the opened algorithm
 *
 * @param resource $td The encryption descriptor.
 *
 * @return string Returns the name of the opened algorithm as a string.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-enc-get-algorithms-name.php
 */
function mcrypt_enc_get_algorithms_name($td): string
{
}

/**
 * Returns the blocksize of the opened algorithm
 *
 * @param resource $td The encryption descriptor.
 *
 * @return int Returns the block size of the specified algorithm in bytes.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-enc-get-block-size.php
 */
function mcrypt_enc_get_block_size($td): int
{
}

/**
 * Returns the size of the IV of the opened algorithm
 *
 * @param resource $td The encryption descriptor.
 *
 * @return int Returns the size of the IV, or 0 if the IV is ignored by the algorithm.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-enc-get-iv-size.php
 */
function mcrypt_enc_get_iv_size($td): int
{
}

/**
 * Returns the maximum supported keysize of the opened mode
 *
 * @param resource $td The encryption descriptor.
 *
 * @return int Returns the maximum supported key size of the algorithm in bytes.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-enc-get-key-size.php
 */
function mcrypt_enc_get_key_size($td): int
{
}

/**
 * Returns the name of the opened mode
 *
 * @param resource $td The encryption descriptor.
 *
 * @return string Returns the name as a string.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-enc-get-modes-name.php
 */
function mcrypt_enc_get_modes_name($td): string
{
}

/**
 * Returns an array with the supported keysizes of the opened algorithm
 *
 * @param resource $td The encryption descriptor.
 *
 * @return array Returns an array with the key sizes supported by the algorithm
 * specified by the encryption descriptor. If it returns an empty
 * array then all key sizes between 1 and
 * <code>mcrypt_enc_get_key_size</code> are supported by the
 * algorithm.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-enc-get-supported-key-sizes.php
 */
function mcrypt_enc_get_supported_key_sizes($td): array
{
}

/**
 * Checks whether the algorithm of the opened mode is a block algorithm
 *
 * @param resource $td The encryption descriptor.
 *
 * @return bool Returns <code>TRUE</code> if the algorithm is a block algorithm or <code>FALSE</code> if it is
 * a stream one.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-enc-is-block-algorithm.php
 */
function mcrypt_enc_is_block_algorithm($td): bool
{
}

/**
 * Checks whether the encryption of the opened mode works on blocks
 *
 * @param resource $td The encryption descriptor.
 *
 * @return bool Returns <code>TRUE</code> if the mode is for use with block algorithms, otherwise it
 * returns <code>FALSE</code>.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-enc-is-block-algorithm-mode.php
 */
function mcrypt_enc_is_block_algorithm_mode($td): bool
{
}

/**
 * Checks whether the opened mode outputs blocks
 *
 * @param resource $td The encryption descriptor.
 *
 * @return bool Returns <code>TRUE</code> if the mode outputs blocks of bytes,
 * or <code>FALSE</code> if it outputs just bytes.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-enc-is-block-mode.php
 */
function mcrypt_enc_is_block_mode($td): bool
{
}

/**
 * Runs a self test on the opened module
 *
 * @param resource $td The encryption descriptor.
 *
 * @return int If the self test succeeds it returns <code>FALSE</code>. In case of an error, it
 * returns <code>TRUE</code>.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-enc-self-test.php
 */
function mcrypt_enc_self_test($td): int
{
}

/**
 * Encrypts plaintext with given parameters
 *
 * @param string $cipher One of the <code>MCRYPT_ciphername</code> constants, or the name of the algorithm as string.
 * @param string $key The key with which the data will be encrypted. If the provided key size is
 * not supported by the cipher, the function will emit a warning and return <code>FALSE</code>
 * @param string $data The data that will be encrypted with the given <code>cipher</code>
 * and <code>mode</code>. If the size of the data is not n * blocksize,
 * the data will be padded with '<code>\0</code>'.
 * @param string $mode One of the <code>MCRYPT_MODE_modename</code> constants, or one of the following strings: "ecb", "cbc", "cfb", "ofb", "nofb" or "stream".
 * @param string $iv Used for the initialization in CBC, CFB, OFB modes, and in some algorithms in STREAM mode. If the provided IV size is not supported by the chaining mode or no IV was provided, but the chaining mode requires one, the function will emit a warning and return <code>FALSE</code>.
 *
 * @return string Returns the encrypted data as a string or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-encrypt.php
 */
function mcrypt_encrypt(string $cipher, string $key, string $data, string $mode, string $iv): string
{
}

/**
 * This function encrypts data
 *
 * @param resource $td The encryption descriptor.
 * @param string $data The data to encrypt.
 *
 * @return string Returns the encrypted data.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-generic.php
 */
function mcrypt_generic($td, string $data): string
{
}

/**
 * This function deinitializes an encryption module
 *
 * @param resource $td The encryption descriptor.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-generic-deinit.php
 */
function mcrypt_generic_deinit($td): bool
{
}

/**
 * This function initializes all buffers needed for encryption
 *
 * @param resource $td The encryption descriptor.
 * @param string $key The maximum length of the key should be the one obtained by calling
 * <code>mcrypt_enc_get_key_size</code> and every value smaller
 * than this is legal.
 * @param string $iv The IV should normally have the size of the algorithms block size, but
 * you must obtain the size by calling
 * <code>mcrypt_enc_get_iv_size</code>. IV is ignored in ECB. IV
 * MUST exist in CFB, CBC, STREAM, nOFB and OFB modes. It needs to be
 * random and unique (but not secret). The same IV must be used for
 * encryption/decryption. If you do not want to use it you should set it
 * to zeros, but this is not recommended.
 *
 * @return int The function returns a negative value on error: -3 when the key length
 * was incorrect, -4 when there was a memory allocation problem and any
 * other return value is an unknown error. If an error occurs a warning will
 * be displayed accordingly. <code>FALSE</code> is returned if incorrect parameters
 * were passed.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-generic-init.php
 */
function mcrypt_generic_init($td, string $key, string $iv): int
{
}

/**
 * Gets the block size of the specified cipher
 *
 * @param int $cipher One of the <code>MCRYPT_ciphername</code> constants, or the name of the algorithm as string.
 * @param mixed $module
 *
 * @return int Returns the algorithm block size in bytes or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-get-block-size.php
 */
function mcrypt_get_block_size(int $cipher, $module): int
{
}

/**
 * Gets the name of the specified cipher
 *
 * @param int $cipher One of the <code>MCRYPT_ciphername</code> constants, or the name of the algorithm as string.
 *
 * @return string This function returns the name of the cipher or <code>FALSE</code> if the cipher does
 * not exist.
 *
 * @since PHP 4, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-get-cipher-name.php
 */
function mcrypt_get_cipher_name(int $cipher): string
{
}

/**
 * Returns the size of the IV belonging to a specific cipher/mode combination
 *
 * @param string $cipher One of the <code>MCRYPT_ciphername</code> constants, or the name of the algorithm as string.
 * @param string $mode One of the <code>MCRYPT_MODE_modename</code> constants, or one of the following strings: "ecb", "cbc", "cfb", "ofb", "nofb" or "stream".
 *
 * @return int Returns the size of the Initialization Vector (IV) in bytes. On error the
 * function returns <code>FALSE</code>. If the IV is ignored in the specified cipher/mode
 * combination zero is returned.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-get-iv-size.php
 */
function mcrypt_get_iv_size(string $cipher, string $mode): int
{
}

/**
 * Gets the key size of the specified cipher
 *
 * @param int $cipher One of the <code>MCRYPT_ciphername</code> constants, or the name of the algorithm as string.
 * @param mixed $module
 *
 * @return int Returns the maximum supported key size of the algorithm in bytes
 * or <code>FALSE</code> on failure.
 *
 * @since PHP 4, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-get-key-size.php
 */
function mcrypt_get_key_size(int $cipher, $module): int
{
}

/**
 * Gets an array of all supported ciphers
 *
 * @param string|null $lib_dir Specifies the directory where all algorithms are located. If not
 * specified, the value of the <code>mcrypt.algorithms_dir</code>
 * <code>php.ini</code> directive is used.
 *
 * @return array Returns an array with all the supported algorithms.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-list-algorithms.php
 */
function mcrypt_list_algorithms(string $lib_dir = /* ini_get("mcrypt.algorithms_dir") */ null): array
{
}

/**
 * Gets an array of all supported modes
 *
 * @param string|null $lib_dir Specifies the directory where all modes are located. If not
 * specified, the value of the <code>mcrypt.modes_dir</code>
 * <code>php.ini</code> directive is used.
 *
 * @return array Returns an array with all the supported modes.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-list-modes.php
 */
function mcrypt_list_modes(string $lib_dir = /* ini_get("mcrypt.modes_dir") */ null): array
{
}

/**
 * Closes the mcrypt module
 *
 * @param resource $td The encryption descriptor.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-module-close.php
 */
function mcrypt_module_close($td): bool
{
}

/**
 * Returns the blocksize of the specified algorithm
 *
 * @param string $algorithm The algorithm name.
 * @param string $lib_dir This optional parameter can contain the location where the mode module
 * is on the system.
 *
 * @return int Returns the block size of the algorithm specified in bytes.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-module-get-algo-block-size.php
 */
function mcrypt_module_get_algo_block_size(string $algorithm, string $lib_dir = null): int
{
}

/**
 * Returns the maximum supported keysize of the opened mode
 *
 * @param string $algorithm The algorithm name.
 * @param string $lib_dir This optional parameter can contain the location where the mode module
 * is on the system.
 *
 * @return int This function returns the maximum supported key size of the
 * algorithm specified in bytes.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-module-get-algo-key-size.php
 */
function mcrypt_module_get_algo_key_size(string $algorithm, string $lib_dir = null): int
{
}

/**
 * Returns an array with the supported keysizes of the opened algorithm
 *
 * @param string $algorithm The algorithm to be used.
 * @param string $lib_dir The optional <code>lib_dir</code> parameter can contain the
 * location where the algorithm module is on the system.
 *
 * @return array Returns an array with the key sizes supported by the specified algorithm.
 * If it returns an empty array then all key sizes between 1 and
 * <code>mcrypt_module_get_algo_key_size</code> are supported by the
 * algorithm.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-module-get-supported-key-sizes.php
 */
function mcrypt_module_get_supported_key_sizes(string $algorithm, string $lib_dir = null): array
{
}

/**
 * This function checks whether the specified algorithm is a block algorithm
 *
 * @param string $algorithm The algorithm to check.
 * @param string $lib_dir The optional <code>lib_dir</code> parameter can contain the
 * location where the algorithm module is on the system.
 *
 * @return bool This function returns <code>TRUE</code> if the specified algorithm is a block
 * algorithm, or <code>FALSE</code> if it is a stream one.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-module-is-block-algorithm.php
 */
function mcrypt_module_is_block_algorithm(string $algorithm, string $lib_dir = null): bool
{
}

/**
 * Returns if the specified module is a block algorithm or not
 *
 * @param string $mode The mode to check.
 * @param string $lib_dir The optional <code>lib_dir</code> parameter can contain the
 * location where the algorithm module is on the system.
 *
 * @return bool This function returns <code>TRUE</code> if the mode is for use with block
 * algorithms, otherwise it returns <code>FALSE</code>. (e.g. <code>FALSE</code> for stream, and
 * <code>TRUE</code> for cbc, cfb, ofb).
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-module-is-block-algorithm-mode.php
 */
function mcrypt_module_is_block_algorithm_mode(string $mode, string $lib_dir = null): bool
{
}

/**
 * Returns if the specified mode outputs blocks or not
 *
 * @param string $mode One of the <code>MCRYPT_MODE_modename</code> constants, or one of the following strings: "ecb", "cbc", "cfb", "ofb", "nofb" or "stream".
 * @param string $lib_dir The optional <code>lib_dir</code> parameter can contain the
 * location where the algorithm module is on the system.
 *
 * @return bool This function returns <code>TRUE</code> if the mode outputs blocks of bytes or
 * <code>FALSE</code> if it outputs just bytes. (e.g. <code>TRUE</code> for cbc and ecb, and
 * <code>FALSE</code> for cfb and stream).
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-module-is-block-mode.php
 */
function mcrypt_module_is_block_mode(string $mode, string $lib_dir = null): bool
{
}

/**
 * Opens the module of the algorithm and the mode to be used
 *
 * @param string $algorithm One of the <code>MCRYPT_ciphername</code> constants, or the name of the algorithm as string.
 * @param string $algorithm_directory The <code>algorithm_directory</code> parameter is used to locate
 * the encryption module. When you supply a directory name, it is used. When
 * you set it to an empty string (<code>""</code>), the value set by the
 * <code>mcrypt.algorithms_dir</code> <code>php.ini</code> directive is used. When
 * it is not set, the default directory that is used is the one that was compiled
 * into libmcrypt (usually <code>/usr/local/lib/libmcrypt</code>).
 * @param string $mode One of the <code>MCRYPT_MODE_modename</code> constants, or one of the following strings: "ecb", "cbc", "cfb", "ofb", "nofb" or "stream".
 * @param string $mode_directory The <code>mode_directory</code> parameter is used to locate
 * the encryption module. When you supply a directory name, it is used. When
 * you set it to an empty string (<code>""</code>), the value set by the
 * <code>mcrypt.modes_dir</code> <code>php.ini</code> directive is used. When
 * it is not set, the default directory that is used is the one that was compiled-in
 * into libmcrypt (usually <code>/usr/local/lib/libmcrypt</code>).
 *
 * @return resource Normally it returns an encryption descriptor, or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-module-open.php
 */
function mcrypt_module_open(string $algorithm, string $algorithm_directory, string $mode, string $mode_directory)
{
}

/**
 * This function runs a self test on the specified module
 *
 * @param string $algorithm One of the <code>MCRYPT_ciphername</code> constants, or the name of the algorithm as string.
 * @param string $lib_dir The optional <code>lib_dir</code> parameter can contain the
 * location where the algorithm module is on the system.
 *
 * @return bool The function returns <code>TRUE</code> if the self test succeeds, or <code>FALSE</code> when it
 * fails.
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mcrypt-module-self-test.php
 */
function mcrypt_module_self_test(string $algorithm, string $lib_dir = null): bool
{
}

/**
 * Decrypts data
 *
 * @param resource $td An encryption descriptor returned by
 * <code>mcrypt_module_open</code>
 * @param string $data Encrypted data.
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @deprecated
 *
 * @link http://www.php.net/manual/en/function.mdecrypt-generic.php
 */
function mdecrypt_generic($td, string $data): string
{
}
