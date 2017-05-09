<?php
// Documentation generated automatically for extension hash v1.0 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
// No INI entries
const HASH_HMAC = 1;
const MHASH_ADLER32 = 18;
const MHASH_CRC32 = 0;
const MHASH_CRC32B = 9;
const MHASH_FNV132 = 29;
const MHASH_FNV164 = 31;
const MHASH_FNV1A32 = 30;
const MHASH_FNV1A64 = 32;
const MHASH_GOST = 8;
const MHASH_HAVAL128 = 13;
const MHASH_HAVAL160 = 12;
const MHASH_HAVAL192 = 11;
const MHASH_HAVAL224 = 10;
const MHASH_HAVAL256 = 3;
const MHASH_JOAAT = 33;
const MHASH_MD2 = 28;
const MHASH_MD4 = 16;
const MHASH_MD5 = 1;
const MHASH_RIPEMD128 = 23;
const MHASH_RIPEMD160 = 5;
const MHASH_RIPEMD256 = 24;
const MHASH_RIPEMD320 = 25;
const MHASH_SHA1 = 2;
const MHASH_SHA224 = 19;
const MHASH_SHA256 = 17;
const MHASH_SHA384 = 21;
const MHASH_SHA512 = 20;
const MHASH_SNEFRU256 = 27;
const MHASH_TIGER = 7;
const MHASH_TIGER128 = 14;
const MHASH_TIGER160 = 15;
const MHASH_WHIRLPOOL = 22;
// No classes defined
function hash($algo, $data, $raw_output = null)
{
}
function hash_file($algo, $filename, $raw_output = null)
{
}
function hash_hmac($algo, $data, $key, $raw_output = null)
{
}
function hash_hmac_file($algo, $filename, $key, $raw_output = null)
{
}
function hash_init($algo, $options = null, $key = null)
{
}
function hash_update($context, $data)
{
}
function hash_update_stream($context, $handle, $length = null)
{
}
function hash_update_file($context, $filename, $context = null)
{
}
function hash_final($context, $raw_output = null)
{
}
function hash_copy($context)
{
}
function hash_algos()
{
}
function hash_pbkdf2($algo, $password, $salt, $iterations, $length = null, $raw_output = null)
{
}
function hash_equals($known_string, $user_string)
{
}
function hash_hkdf($ikm, $algo, $length = null, $string = null, $salt = null)
{
}
function mhash_keygen_s2k($hash, $input_password, $salt, $bytes)
{
}
function mhash_get_block_size($hash)
{
}
function mhash_get_hash_name($hash)
{
}
function mhash_count()
{
}
function mhash($hash, $data, $key = null)
{
}