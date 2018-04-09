<?php
// Start of extension: mcrypt
// - parsed on POSIX with PHP 5.6.34
// - parsed on Windows with PHP 5.6.34

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
 * Encrypts/decrypts data in CBC mode
 *
 * @param mixed $cipher
 * @param mixed $key
 * @param mixed $data
 * @param mixed $mode
 * @param mixed $iv
 *
 * @return string
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated as of PHP 5.5.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-cbc.php
 */
function mcrypt_cbc($cipher, $key, $data, $mode, $iv)
{
}

/**
 * Encrypts/decrypts data in CFB mode
 *
 * @param mixed $cipher
 * @param mixed $key
 * @param mixed $data
 * @param mixed $mode
 * @param mixed $iv
 *
 * @return string
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated as of PHP 5.5.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-cfb.php
 */
function mcrypt_cfb($cipher, $key, $data, $mode, $iv)
{
}

/**
 * Creates an initialization vector (IV) from a random source
 *
 * @param mixed $size
 * @param mixed|null $source
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-create-iv.php
 */
function mcrypt_create_iv($size, $source = null)
{
}

/**
 * Decrypts crypttext with given parameters
 *
 * @param mixed $cipher
 * @param mixed $key
 * @param mixed $data
 * @param mixed $mode
 * @param mixed $iv
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-decrypt.php
 */
function mcrypt_decrypt($cipher, $key, $data, $mode, $iv)
{
}

/**
 * Deprecated: Encrypts/decrypts data in ECB mode
 *
 * @param mixed $cipher
 * @param mixed $key
 * @param mixed $data
 * @param mixed $mode
 * @param mixed $iv
 *
 * @return string
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated as of PHP 5.5.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-ecb.php
 */
function mcrypt_ecb($cipher, $key, $data, $mode, $iv)
{
}

/**
 * Returns the name of the opened algorithm
 *
 * @param mixed $td
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-enc-get-algorithms-name.php
 */
function mcrypt_enc_get_algorithms_name($td)
{
}

/**
 * Returns the blocksize of the opened algorithm
 *
 * @param mixed $td
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-enc-get-block-size.php
 */
function mcrypt_enc_get_block_size($td)
{
}

/**
 * Returns the size of the IV of the opened algorithm
 *
 * @param mixed $td
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-enc-get-iv-size.php
 */
function mcrypt_enc_get_iv_size($td)
{
}

/**
 * Returns the maximum supported keysize of the opened mode
 *
 * @param mixed $td
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-enc-get-key-size.php
 */
function mcrypt_enc_get_key_size($td)
{
}

/**
 * Returns the name of the opened mode
 *
 * @param mixed $td
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-enc-get-modes-name.php
 */
function mcrypt_enc_get_modes_name($td)
{
}

/**
 * Returns an array with the supported keysizes of the opened algorithm
 *
 * @param mixed $td
 *
 * @return array
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-enc-get-supported-key-sizes.php
 */
function mcrypt_enc_get_supported_key_sizes($td)
{
}

/**
 * Checks whether the algorithm of the opened mode is a block algorithm
 *
 * @param mixed $td
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-enc-is-block-algorithm.php
 */
function mcrypt_enc_is_block_algorithm($td)
{
}

/**
 * Checks whether the encryption of the opened mode works on blocks
 *
 * @param mixed $td
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-enc-is-block-algorithm-mode.php
 */
function mcrypt_enc_is_block_algorithm_mode($td)
{
}

/**
 * Checks whether the opened mode outputs blocks
 *
 * @param mixed $td
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-enc-is-block-mode.php
 */
function mcrypt_enc_is_block_mode($td)
{
}

/**
 * Runs a self test on the opened module
 *
 * @param mixed $td
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-enc-self-test.php
 */
function mcrypt_enc_self_test($td)
{
}

/**
 * Encrypts plaintext with given parameters
 *
 * @param mixed $cipher
 * @param mixed $key
 * @param mixed $data
 * @param mixed $mode
 * @param mixed $iv
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-encrypt.php
 */
function mcrypt_encrypt($cipher, $key, $data, $mode, $iv)
{
}

/**
 * This function encrypts data
 *
 * @param mixed $td
 * @param mixed $data
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-generic.php
 */
function mcrypt_generic($td, $data)
{
}

/**
 * This function deinitializes an encryption module
 *
 * @param mixed $td
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-generic-deinit.php
 */
function mcrypt_generic_deinit($td)
{
}

/**
 * This function terminates encryption
 *
 * @param mixed $td
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5
 *
 * @deprecated as of PHP 5.2.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-generic-end.php
 */
function mcrypt_generic_end($td)
{
}

/**
 * This function initializes all buffers needed for encryption
 *
 * @param mixed $td
 * @param mixed $key
 * @param mixed $iv
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-generic-init.php
 */
function mcrypt_generic_init($td, $key, $iv)
{
}

/**
 * Gets the block size of the specified cipher
 *
 * @param mixed $cipher
 * @param mixed $module
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-get-block-size.php
 */
function mcrypt_get_block_size($cipher, $module)
{
}

/**
 * Gets the name of the specified cipher
 *
 * @param mixed $cipher
 *
 * @return string
 *
 * @since PHP 4, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-get-cipher-name.php
 */
function mcrypt_get_cipher_name($cipher)
{
}

/**
 * Returns the size of the IV belonging to a specific cipher/mode combination
 *
 * @param mixed $cipher
 * @param mixed $module
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-get-iv-size.php
 */
function mcrypt_get_iv_size($cipher, $module)
{
}

/**
 * Gets the key size of the specified cipher
 *
 * @param mixed $cipher
 * @param mixed $module
 *
 * @return int
 *
 * @since PHP 4, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-get-key-size.php
 */
function mcrypt_get_key_size($cipher, $module)
{
}

/**
 * Gets an array of all supported ciphers
 *
 * @param mixed|null $lib_dir
 *
 * @return array
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-list-algorithms.php
 */
function mcrypt_list_algorithms($lib_dir = null)
{
}

/**
 * Gets an array of all supported modes
 *
 * @param mixed|null $lib_dir
 *
 * @return array
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-list-modes.php
 */
function mcrypt_list_modes($lib_dir = null)
{
}

/**
 * Closes the mcrypt module
 *
 * @param mixed $td
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-module-close.php
 */
function mcrypt_module_close($td)
{
}

/**
 * Returns the blocksize of the specified algorithm
 *
 * @param mixed $algorithm
 * @param mixed|null $lib_dir
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-module-get-algo-block-size.php
 */
function mcrypt_module_get_algo_block_size($algorithm, $lib_dir = null)
{
}

/**
 * Returns the maximum supported keysize of the opened mode
 *
 * @param mixed $algorithm
 * @param mixed|null $lib_dir
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-module-get-algo-key-size.php
 */
function mcrypt_module_get_algo_key_size($algorithm, $lib_dir = null)
{
}

/**
 * Returns an array with the supported keysizes of the opened algorithm
 *
 * @param mixed $algorithm
 * @param mixed|null $lib_dir
 *
 * @return array
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-module-get-supported-key-sizes.php
 */
function mcrypt_module_get_supported_key_sizes($algorithm, $lib_dir = null)
{
}

/**
 * This function checks whether the specified algorithm is a block algorithm
 *
 * @param mixed $algorithm
 * @param mixed|null $lib_dir
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-module-is-block-algorithm.php
 */
function mcrypt_module_is_block_algorithm($algorithm, $lib_dir = null)
{
}

/**
 * Returns if the specified module is a block algorithm or not
 *
 * @param mixed $mode
 * @param mixed|null $lib_dir
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-module-is-block-algorithm-mode.php
 */
function mcrypt_module_is_block_algorithm_mode($mode, $lib_dir = null)
{
}

/**
 * Returns if the specified mode outputs blocks or not
 *
 * @param mixed $mode
 * @param mixed|null $lib_dir
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-module-is-block-mode.php
 */
function mcrypt_module_is_block_mode($mode, $lib_dir = null)
{
}

/**
 * Opens the module of the algorithm and the mode to be used
 *
 * @param mixed $cipher
 * @param mixed $cipher_directory
 * @param mixed $mode
 * @param mixed $mode_directory
 *
 * @return resource
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-module-open.php
 */
function mcrypt_module_open($cipher, $cipher_directory, $mode, $mode_directory)
{
}

/**
 * This function runs a self test on the specified module
 *
 * @param mixed $algorithm
 * @param mixed|null $lib_dir
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-module-self-test.php
 */
function mcrypt_module_self_test($algorithm, $lib_dir = null)
{
}

/**
 * Encrypts/decrypts data in OFB mode
 *
 * @param mixed $cipher
 * @param mixed $key
 * @param mixed $data
 * @param mixed $mode
 * @param mixed $iv
 *
 * @return string
 *
 * @since PHP 4, PHP 5
 *
 * @deprecated as of PHP 5.5.0
 *
 * @link http://www.php.net/manual/en/function.mcrypt-ofb.php
 */
function mcrypt_ofb($cipher, $key, $data, $mode, $iv)
{
}

/**
 * Decrypts data
 *
 * @param mixed $td
 * @param mixed $data
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
 *
 * @link http://www.php.net/manual/en/function.mdecrypt-generic.php
 */
function mdecrypt_generic($td, $data)
{
}
