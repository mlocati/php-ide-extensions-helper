<?php
// Documentation generated automatically for extension mcrypt v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
/*
 * INI entries:
 * mcrypt.algorithms_dir = null
 * mcrypt.modes_dir = null
 */
const MCRYPT_3DES = 'tripledes';
const MCRYPT_ARCFOUR = 'arcfour';
const MCRYPT_ARCFOUR_IV = 'arcfour-iv';
const MCRYPT_BLOWFISH = 'blowfish';
const MCRYPT_BLOWFISH_COMPAT = 'blowfish-compat';
const MCRYPT_CAST_128 = 'cast-128';
const MCRYPT_CAST_256 = 'cast-256';
const MCRYPT_CRYPT = 'crypt';
const MCRYPT_DECRYPT = 1;
const MCRYPT_DES = 'des';
const MCRYPT_DEV_RANDOM = 0;
const MCRYPT_DEV_URANDOM = 1;
const MCRYPT_ENCRYPT = 0;
const MCRYPT_ENIGNA = 'crypt';
const MCRYPT_GOST = 'gost';
const MCRYPT_IDEA = 'idea';
const MCRYPT_LOKI97 = 'loki97';
const MCRYPT_MARS = 'mars';
const MCRYPT_MODE_CBC = 'cbc';
const MCRYPT_MODE_CFB = 'cfb';
const MCRYPT_MODE_ECB = 'ecb';
const MCRYPT_MODE_NOFB = 'nofb';
const MCRYPT_MODE_OFB = 'ofb';
const MCRYPT_MODE_STREAM = 'stream';
const MCRYPT_PANAMA = 'panama';
const MCRYPT_RAND = 2;
const MCRYPT_RC2 = 'rc2';
const MCRYPT_RC6 = 'rc6';
const MCRYPT_RIJNDAEL_128 = 'rijndael-128';
const MCRYPT_RIJNDAEL_192 = 'rijndael-192';
const MCRYPT_RIJNDAEL_256 = 'rijndael-256';
const MCRYPT_SAFER128 = 'safer-sk128';
const MCRYPT_SAFER64 = 'safer-sk64';
const MCRYPT_SAFERPLUS = 'saferplus';
const MCRYPT_SERPENT = 'serpent';
const MCRYPT_SKIPJACK = 'skipjack';
const MCRYPT_THREEWAY = 'threeway';
const MCRYPT_TRIPLEDES = 'tripledes';
const MCRYPT_TWOFISH = 'twofish';
const MCRYPT_WAKE = 'wake';
const MCRYPT_XTEA = 'xtea';
// No classes defined
function mcrypt_get_key_size($cipher, $module)
{
}
function mcrypt_get_block_size($cipher, $module)
{
}
function mcrypt_get_cipher_name($cipher)
{
}
function mcrypt_create_iv($size, $source = null)
{
}
function mcrypt_list_algorithms($lib_dir = null)
{
}
function mcrypt_list_modes($lib_dir = null)
{
}
function mcrypt_get_iv_size($cipher, $module)
{
}
function mcrypt_encrypt($cipher, $key, $data, $mode, $iv)
{
}
function mcrypt_decrypt($cipher, $key, $data, $mode, $iv)
{
}
function mcrypt_module_open($cipher, $cipher_directory, $mode, $mode_directory)
{
}
function mcrypt_generic_init($td, $key, $iv)
{
}
function mcrypt_generic($td, $data)
{
}
function mdecrypt_generic($td, $data)
{
}
function mcrypt_generic_deinit($td)
{
}
function mcrypt_enc_self_test($td)
{
}
function mcrypt_enc_is_block_algorithm_mode($td)
{
}
function mcrypt_enc_is_block_algorithm($td)
{
}
function mcrypt_enc_is_block_mode($td)
{
}
function mcrypt_enc_get_block_size($td)
{
}
function mcrypt_enc_get_key_size($td)
{
}
function mcrypt_enc_get_supported_key_sizes($td)
{
}
function mcrypt_enc_get_iv_size($td)
{
}
function mcrypt_enc_get_algorithms_name($td)
{
}
function mcrypt_enc_get_modes_name($td)
{
}
function mcrypt_module_self_test($algorithm, $lib_dir = null)
{
}
function mcrypt_module_is_block_algorithm_mode($mode, $lib_dir = null)
{
}
function mcrypt_module_is_block_algorithm($algorithm, $lib_dir = null)
{
}
function mcrypt_module_is_block_mode($mode, $lib_dir = null)
{
}
function mcrypt_module_get_algo_block_size($algorithm, $lib_dir = null)
{
}
function mcrypt_module_get_algo_key_size($algorithm, $lib_dir = null)
{
}
function mcrypt_module_get_supported_key_sizes($algorithm, $lib_dir = null)
{
}
function mcrypt_module_close($td)
{
}