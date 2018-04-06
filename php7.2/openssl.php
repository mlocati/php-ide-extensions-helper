<?php
// Start of extension: openssl
// - parsed on POSIX with PHP 7.2.3 (extension version 7.2.3)
// - parsed on Windows with PHP 7.2.4 (extension version 7.2.4)

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.signature-algos
 *
 * @var int
 */
const OPENSSL_ALGO_MD4 = 3;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.signature-algos
 *
 * @var int
 */
const OPENSSL_ALGO_MD5 = 2;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.signature-algos
 *
 * @var int
 */
const OPENSSL_ALGO_RMD160 = 10;

/**
 * Used as default algorithm by <code>openssl_sign</code> and
 * <code>openssl_verify</code>.
 *
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.signature-algos
 *
 * @var int
 */
const OPENSSL_ALGO_SHA1 = 1;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.signature-algos
 *
 * @var int
 */
const OPENSSL_ALGO_SHA224 = 6;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.signature-algos
 *
 * @var int
 */
const OPENSSL_ALGO_SHA256 = 7;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.signature-algos
 *
 * @var int
 */
const OPENSSL_ALGO_SHA384 = 8;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.signature-algos
 *
 * @var int
 */
const OPENSSL_ALGO_SHA512 = 9;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.ciphers
 *
 * @var int
 */
const OPENSSL_CIPHER_3DES = 4;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.ciphers
 *
 * @var int
 */
const OPENSSL_CIPHER_AES_128_CBC = 5;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.ciphers
 *
 * @var int
 */
const OPENSSL_CIPHER_AES_192_CBC = 6;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.ciphers
 *
 * @var int
 */
const OPENSSL_CIPHER_AES_256_CBC = 7;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.ciphers
 *
 * @var int
 */
const OPENSSL_CIPHER_DES = 3;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.ciphers
 *
 * @var int
 */
const OPENSSL_CIPHER_RC2_128 = 1;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.ciphers
 *
 * @var int
 */
const OPENSSL_CIPHER_RC2_40 = 0;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.ciphers
 *
 * @var int
 */
const OPENSSL_CIPHER_RC2_64 = 2;

/**
 * @var string
 */
const OPENSSL_DEFAULT_STREAM_CIPHERS = 'ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-AES256-GCM-SHA384:DHE-RSA-AES128-GCM-SHA256:DHE-DSS-AES128-GCM-SHA256:kEDH+AESGCM:ECDHE-RSA-AES128-SHA256:ECDHE-ECDSA-AES128-SHA256:ECDHE-RSA-AES128-SHA:ECDHE-ECDSA-AES128-SHA:ECDHE-RSA-AES256-SHA384:ECDHE-ECDSA-AES256-SHA384:ECDHE-RSA-AES256-SHA:ECDHE-ECDSA-AES256-SHA:DHE-RSA-AES128-SHA256:DHE-RSA-AES128-SHA:DHE-DSS-AES128-SHA256:DHE-RSA-AES256-SHA256:DHE-DSS-AES256-SHA:DHE-RSA-AES256-SHA:AES128-GCM-SHA256:AES256-GCM-SHA384:AES128:AES256:HIGH:!SSLv2:!aNULL:!eNULL:!EXPORT:!DES:!MD5:!RC4:!ADH';

/**
 * @var int
 */
const OPENSSL_DONT_ZERO_PAD_KEY = 4;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.key-types
 *
 * @var int
 */
const OPENSSL_KEYTYPE_DH = 2;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.key-types
 *
 * @var int
 */
const OPENSSL_KEYTYPE_DSA = 1;

/**
 * This constant is only available when PHP is compiled with OpenSSL 0.9.8+.
 *
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.key-types
 *
 * @var int
 */
const OPENSSL_KEYTYPE_EC = 3;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.key-types
 *
 * @var int
 */
const OPENSSL_KEYTYPE_RSA = 0;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.padding
 *
 * @var int
 */
const OPENSSL_NO_PADDING = 3;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.padding
 *
 * @var int
 */
const OPENSSL_PKCS1_OAEP_PADDING = 4;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.padding
 *
 * @var int
 */
const OPENSSL_PKCS1_PADDING = 1;

/**
 * @var int
 */
const OPENSSL_RAW_DATA = 1;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.padding
 *
 * @var int
 */
const OPENSSL_SSLV23_PADDING = 2;

/**
 * Whether SNI support is available or not.
 *
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.constsni
 *
 * @var int
 */
const OPENSSL_TLSEXT_SERVER_NAME = 1;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.constversion
 *
 * @var int
 */
const OPENSSL_VERSION_NUMBER = 269484143;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.constversion
 *
 * @var string
 */
const OPENSSL_VERSION_TEXT = 'OpenSSL 1.1.0f  25 May 2017';

/**
 * @var int
 */
const OPENSSL_ZERO_PADDING = 2;

/**
 * Normally the input message is converted to "canonical" format
 * which is effectively using <code>CR</code> and <code>LF</code>
 * as end of line: as required by the S/MIME specification. When this
 * option is present, no translation occurs. This is useful when
 * handling binary data which may not be in MIME format.
 *
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.pkcs7.flags
 *
 * @var int
 */
const PKCS7_BINARY = 128;

/**
 * When signing a message, use cleartext signing with the MIME
 * type <code>"multipart/signed"</code>. This is the default
 * if you do not specify any <code>flags</code> to
 * <code>openssl_pkcs7_sign</code>.
 * If you turn this option off, the message will be signed using
 * opaque signing, which is more resistant to translation by mail relays
 * but cannot be read by mail agents that do not support S/MIME.
 *
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.pkcs7.flags
 *
 * @var int
 */
const PKCS7_DETACHED = 64;

/**
 * Normally when a message is signed, a set of attributes are
 * included which include the signing time and the supported symmetric
 * algorithms. With this option they are not included.
 *
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.pkcs7.flags
 *
 * @var int
 */
const PKCS7_NOATTR = 256;

/**
 * When signing a message the signer's certificate is normally
 * included - with this option it is excluded. This will reduce the
 * size of the signed message but the verifier must have a copy of the
 * signers certificate available locally (passed using the
 * <code>extracerts</code> to
 * <code>openssl_pkcs7_verify</code> for example).
 *
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.pkcs7.flags
 *
 * @var int
 */
const PKCS7_NOCERTS = 2;

/**
 * Do not chain verification of signers certificates: that is
 * don't use the certificates in the signed message as untrusted CAs.
 *
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.pkcs7.flags
 *
 * @var int
 */
const PKCS7_NOCHAIN = 8;

/**
 * When verifying a message, certificates (if
 * any) included in the message are normally searched for the
 * signing certificate. With this option only the
 * certificates specified in the <code>extracerts</code>
 * parameter of <code>openssl_pkcs7_verify</code> are
 * used. The supplied certificates can still be used as
 * untrusted CAs however.
 *
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.pkcs7.flags
 *
 * @var int
 */
const PKCS7_NOINTERN = 16;

/**
 * Don't try and verify the signatures on a message
 *
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.pkcs7.flags
 *
 * @var int
 */
const PKCS7_NOSIGS = 4;

/**
 * Do not verify the signers certificate of a signed
 * message.
 *
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.pkcs7.flags
 *
 * @var int
 */
const PKCS7_NOVERIFY = 32;

/**
 * Adds text/plain content type headers to encrypted/signed
 * message. If decrypting or verifying, it strips those headers from
 * the output - if the decrypted or verified message is not of MIME type
 * text/plain then an error will occur.
 *
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.pkcs7.flags
 *
 * @var int
 */
const PKCS7_TEXT = 1;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.purpose-check
 *
 * @var int
 */
const X509_PURPOSE_ANY = 7;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.purpose-check
 *
 * @var int
 */
const X509_PURPOSE_CRL_SIGN = 6;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.purpose-check
 *
 * @var int
 */
const X509_PURPOSE_NS_SSL_SERVER = 3;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.purpose-check
 *
 * @var int
 */
const X509_PURPOSE_SMIME_ENCRYPT = 5;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.purpose-check
 *
 * @var int
 */
const X509_PURPOSE_SMIME_SIGN = 4;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.purpose-check
 *
 * @var int
 */
const X509_PURPOSE_SSL_CLIENT = 1;

/**
 * @link http://www.php.net/manual/en/openssl.constants.php#openssl.purpose-check
 *
 * @var int
 */
const X509_PURPOSE_SSL_SERVER = 2;

/**
 * Gets the cipher iv length
 *
 * @param mixed $method
 *
 * @return int
 *
 * @since PHP 5 >= 5.3.3, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-cipher-iv-length.php
 */
function openssl_cipher_iv_length($method): int
{
}

/**
 * Exports a CSR as a string
 *
 * @param mixed $csr
 * @param mixed $out
 * @param mixed|null $notext
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-csr-export.php
 */
function openssl_csr_export($csr, &$out, $notext = null): bool
{
}

/**
 * Exports a CSR to a file
 *
 * @param mixed $csr
 * @param mixed $outfilename
 * @param mixed|null $notext
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-csr-export-to-file.php
 */
function openssl_csr_export_to_file($csr, $outfilename, $notext = null): bool
{
}

/**
 * Returns the public key of a CSR
 *
 * @param mixed $csr
 *
 * @return resource
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-csr-get-public-key.php
 */
function openssl_csr_get_public_key($csr)
{
}

/**
 * Returns the subject of a CSR
 *
 * @param mixed $csr
 *
 * @return array
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-csr-get-subject.php
 */
function openssl_csr_get_subject($csr): array
{
}

/**
 * Generates a CSR
 *
 * @param mixed $dn
 * @param mixed $privkey
 * @param mixed|null $configargs
 * @param mixed|null $extraattribs
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-csr-new.php
 */
function openssl_csr_new($dn, &$privkey, $configargs = null, $extraattribs = null)
{
}

/**
 * Sign a CSR with another certificate (or itself) and generate a certificate
 *
 * @param mixed $csr
 * @param mixed $x509
 * @param mixed $priv_key
 * @param mixed $days
 * @param mixed|null $config_args
 * @param mixed|null $serial
 *
 * @return resource
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-csr-sign.php
 */
function openssl_csr_sign($csr, $x509, $priv_key, $days, $config_args = null, $serial = null)
{
}

/**
 * Decrypts data
 *
 * @param mixed $data
 * @param mixed $method
 * @param mixed $password
 * @param mixed|null $options
 * @param mixed|null $iv
 * @param mixed|null $tag
 * @param mixed|null $aad
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-decrypt.php
 */
function openssl_decrypt($data, $method, $password, $options = null, $iv = null, $tag = null, $aad = null): string
{
}

/**
 * Computes shared secret for public value of remote DH public key and local DH key
 *
 * @param mixed $pub_key
 * @param mixed $dh_key
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-dh-compute-key.php
 */
function openssl_dh_compute_key($pub_key, $dh_key): string
{
}

/**
 * Computes a digest
 *
 * @param mixed $data
 * @param mixed $method
 * @param mixed|null $raw_output
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-digest.php
 */
function openssl_digest($data, $method, $raw_output = null): string
{
}

/**
 * Encrypts data
 *
 * @param mixed $data
 * @param mixed $method
 * @param mixed $password
 * @param mixed|null $options
 * @param mixed|null $iv
 * @param mixed|null $tag
 * @param mixed|null $aad
 * @param mixed|null $tag_length
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-encrypt.php
 */
function openssl_encrypt($data, $method, $password, $options = null, $iv = null, &$tag = null, $aad = null, $tag_length = null): string
{
}

/**
 * Return openSSL error message
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-error-string.php
 */
function openssl_error_string(): string
{
}

/**
 * Free key resource
 *
 * @param mixed $key
 *
 * @return void
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-free-key.php
 */
function openssl_free_key($key)
{
}

/**
 * Retrieve the available certificate locations
 *
 * @return array
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-get-cert-locations.php
 */
function openssl_get_cert_locations(): array
{
}

/**
 * Gets available cipher methods
 *
 * @param mixed|null $aliases
 *
 * @return array
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-get-cipher-methods.php
 */
function openssl_get_cipher_methods($aliases = null): array
{
}

/**
 * Gets list of available curve names for ECC
 *
 * @return array
 *
 * @since PHP 7 >= 7.1.0
 *
 * @link http://www.php.net/manual/en/function.openssl-get-curve-names.php
 */
function openssl_get_curve_names(): array
{
}

/**
 * Gets available digest methods
 *
 * @param mixed|null $aliases
 *
 * @return array
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-get-md-methods.php
 */
function openssl_get_md_methods($aliases = null): array
{
}

/**
 * Alias of <code>openssl_pkey_get_private</code>
 *
 * @param mixed $key
 * @param mixed|null $passphrase
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-get-privatekey.php
 */
function openssl_get_privatekey($key, $passphrase = null)
{
}

/**
 * Alias of <code>openssl_pkey_get_public</code>
 *
 * @param mixed $cert
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-get-publickey.php
 */
function openssl_get_publickey($cert)
{
}

/**
 * Open sealed data
 *
 * @param mixed $data
 * @param mixed $opendata
 * @param mixed $ekey
 * @param mixed $privkey
 * @param mixed|null $method
 * @param mixed|null $iv
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-open.php
 */
function openssl_open($data, &$opendata, $ekey, $privkey, $method = null, $iv = null): bool
{
}

/**
 * Generates a PKCS5 v2 PBKDF2 string
 *
 * @param mixed $password
 * @param mixed $salt
 * @param mixed $key_length
 * @param mixed $iterations
 * @param mixed|null $digest_algorithm
 *
 * @return string
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pbkdf2.php
 */
function openssl_pbkdf2($password, $salt, $key_length, $iterations, $digest_algorithm = null): string
{
}

/**
 * Exports a PKCS#12 Compatible Certificate Store File to variable
 *
 * @param mixed $x509
 * @param mixed $out
 * @param mixed $priv_key
 * @param mixed $pass
 * @param mixed $args
 *
 * @return bool
 *
 * @since PHP 5 >= 5.2.2, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkcs12-export.php
 */
function openssl_pkcs12_export($x509, &$out, $priv_key, $pass, $args): bool
{
}

/**
 * Exports a PKCS#12 Compatible Certificate Store File
 *
 * @param mixed $x509
 * @param mixed $filename
 * @param mixed $priv_key
 * @param mixed $pass
 * @param mixed|null $args
 *
 * @return bool
 *
 * @since PHP 5 >= 5.2.2, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkcs12-export-to-file.php
 */
function openssl_pkcs12_export_to_file($x509, $filename, $priv_key, $pass, $args = null): bool
{
}

/**
 * Parse a PKCS#12 Certificate Store into an array
 *
 * @param mixed $PKCS12
 * @param mixed $certs
 * @param mixed $pass
 *
 * @return bool
 *
 * @since PHP 5 >= 5.2.2, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkcs12-read.php
 */
function openssl_pkcs12_read($PKCS12, &$certs, $pass): bool
{
}

/**
 * Decrypts an S/MIME encrypted message
 *
 * @param mixed $infilename
 * @param mixed $outfilename
 * @param mixed $recipcert
 * @param mixed|null $recipkey
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkcs7-decrypt.php
 */
function openssl_pkcs7_decrypt($infilename, $outfilename, $recipcert, $recipkey = null): bool
{
}

/**
 * Encrypt an S/MIME message
 *
 * @param mixed $infile
 * @param mixed $outfile
 * @param mixed $recipcerts
 * @param mixed $headers
 * @param mixed|null $flags
 * @param mixed|null $cipher
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkcs7-encrypt.php
 */
function openssl_pkcs7_encrypt($infile, $outfile, $recipcerts, $headers, $flags = null, $cipher = null): bool
{
}

/**
 * Export the PKCS7 file to an array of PEM certificates
 *
 * @param mixed $infilename
 * @param mixed $certs
 *
 * @return bool
 *
 * @since PHP 7 >= 7.2.0
 *
 * @link http://www.php.net/manual/en/function.openssl-pkcs7-read.php
 */
function openssl_pkcs7_read($infilename, &$certs): bool
{
}

/**
 * Sign an S/MIME message
 *
 * @param mixed $infile
 * @param mixed $outfile
 * @param mixed $signcert
 * @param mixed $signkey
 * @param mixed $headers
 * @param mixed|null $flags
 * @param mixed|null $extracertsfilename
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkcs7-sign.php
 */
function openssl_pkcs7_sign($infile, $outfile, $signcert, $signkey, $headers, $flags = null, $extracertsfilename = null): bool
{
}

/**
 * Verifies the signature of an S/MIME signed message
 *
 * @param mixed $filename
 * @param mixed $flags
 * @param mixed|null $signerscerts
 * @param mixed|null $cainfo
 * @param mixed|null $extracerts
 * @param mixed|null $content
 * @param mixed|null $pk7
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkcs7-verify.php
 */
function openssl_pkcs7_verify($filename, $flags, $signerscerts = null, $cainfo = null, $extracerts = null, $content = null, $pk7 = null)
{
}

/**
 * Gets an exportable representation of a key into a string
 *
 * @param mixed $key
 * @param mixed $out
 * @param mixed|null $passphrase
 * @param mixed|null $config_args
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkey-export.php
 */
function openssl_pkey_export($key, &$out, $passphrase = null, $config_args = null): bool
{
}

/**
 * Gets an exportable representation of a key into a file
 *
 * @param mixed $key
 * @param mixed $outfilename
 * @param mixed|null $passphrase
 * @param mixed|null $config_args
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkey-export-to-file.php
 */
function openssl_pkey_export_to_file($key, $outfilename, $passphrase = null, $config_args = null): bool
{
}

/**
 * Frees a private key
 *
 * @param mixed $key
 *
 * @return void
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkey-free.php
 */
function openssl_pkey_free($key)
{
}

/**
 * Returns an array with the key details
 *
 * @param mixed $key
 *
 * @return array
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkey-get-details.php
 */
function openssl_pkey_get_details($key): array
{
}

/**
 * Get a private key
 *
 * @param mixed $key
 * @param mixed|null $passphrase
 *
 * @return resource
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkey-get-private.php
 */
function openssl_pkey_get_private($key, $passphrase = null)
{
}

/**
 * Extract public key from certificate and prepare it for use
 *
 * @param mixed $cert
 *
 * @return resource
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkey-get-public.php
 */
function openssl_pkey_get_public($cert)
{
}

/**
 * Generates a new private key
 *
 * @param mixed|null $configargs
 *
 * @return resource
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkey-new.php
 */
function openssl_pkey_new($configargs = null)
{
}

/**
 * Decrypts data with private key
 *
 * @param mixed $data
 * @param mixed $crypted
 * @param mixed $key
 * @param mixed|null $padding
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-private-decrypt.php
 */
function openssl_private_decrypt($data, &$crypted, $key, $padding = null): bool
{
}

/**
 * Encrypts data with private key
 *
 * @param mixed $data
 * @param mixed $crypted
 * @param mixed $key
 * @param mixed|null $padding
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-private-encrypt.php
 */
function openssl_private_encrypt($data, &$crypted, $key, $padding = null): bool
{
}

/**
 * Decrypts data with public key
 *
 * @param mixed $data
 * @param mixed $crypted
 * @param mixed $key
 * @param mixed|null $padding
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-public-decrypt.php
 */
function openssl_public_decrypt($data, &$crypted, $key, $padding = null): bool
{
}

/**
 * Encrypts data with public key
 *
 * @param mixed $data
 * @param mixed $crypted
 * @param mixed $key
 * @param mixed|null $padding
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-public-encrypt.php
 */
function openssl_public_encrypt($data, &$crypted, $key, $padding = null): bool
{
}

/**
 * Generate a pseudo-random string of bytes
 *
 * @param mixed $length
 * @param mixed|null $result_is_strong
 *
 * @return string
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-random-pseudo-bytes.php
 */
function openssl_random_pseudo_bytes($length, &$result_is_strong = null): string
{
}

/**
 * Seal (encrypt) data
 *
 * @param mixed $data
 * @param mixed $sealdata
 * @param mixed $ekeys
 * @param mixed $pubkeys
 * @param mixed|null $method
 * @param mixed|null $iv
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-seal.php
 */
function openssl_seal($data, &$sealdata, &$ekeys, $pubkeys, $method = null, &$iv = null): int
{
}

/**
 * Generate signature
 *
 * @param mixed $data
 * @param mixed $signature
 * @param mixed $key
 * @param mixed|null $method
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-sign.php
 */
function openssl_sign($data, &$signature, $key, $method = null): bool
{
}

/**
 * Exports a valid PEM formatted public key signed public key and challenge
 *
 * @param mixed $spki
 *
 * @return string
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-spki-export.php
 */
function openssl_spki_export($spki): string
{
}

/**
 * Exports the challenge assoicated with a signed public key and challenge
 *
 * @param mixed $spki
 *
 * @return string
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-spki-export-challenge.php
 */
function openssl_spki_export_challenge($spki): string
{
}

/**
 * Generate a new signed public key and challenge
 *
 * @param mixed $privkey
 * @param mixed $challenge
 * @param mixed|null $algo
 *
 * @return string
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-spki-new.php
 */
function openssl_spki_new($privkey, $challenge, $algo = null): string
{
}

/**
 * Verifies a signed public key and challenge
 *
 * @param mixed $spki
 *
 * @return string
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-spki-verify.php
 */
function openssl_spki_verify($spki): string
{
}

/**
 * Verify signature
 *
 * @param mixed $data
 * @param mixed $signature
 * @param mixed $key
 * @param mixed|null $method
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-verify.php
 */
function openssl_verify($data, $signature, $key, $method = null): int
{
}

/**
 * Checks if a private key corresponds to a certificate
 *
 * @param mixed $cert
 * @param mixed $key
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-x509-check-private-key.php
 */
function openssl_x509_check_private_key($cert, $key): bool
{
}

/**
 * Verifies if a certificate can be used for a particular purpose
 *
 * @param mixed $x509cert
 * @param mixed $purpose
 * @param mixed $cainfo
 * @param mixed|null $untrustedfile
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-x509-checkpurpose.php
 */
function openssl_x509_checkpurpose($x509cert, $purpose, $cainfo, $untrustedfile = null): int
{
}

/**
 * Exports a certificate as a string
 *
 * @param mixed $x509
 * @param mixed $out
 * @param mixed|null $notext
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-x509-export.php
 */
function openssl_x509_export($x509, &$out, $notext = null): bool
{
}

/**
 * Exports a certificate to file
 *
 * @param mixed $x509
 * @param mixed $outfilename
 * @param mixed|null $notext
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-x509-export-to-file.php
 */
function openssl_x509_export_to_file($x509, $outfilename, $notext = null): bool
{
}

/**
 * Calculates the fingerprint, or digest, of a given X.509 certificate
 *
 * @param mixed $x509
 * @param mixed|null $method
 * @param mixed|null $raw_output
 *
 * @return string
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-x509-fingerprint.php
 */
function openssl_x509_fingerprint($x509, $method = null, $raw_output = null): string
{
}

/**
 * Free certificate resource
 *
 * @param mixed $x509
 *
 * @return void
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-x509-free.php
 */
function openssl_x509_free($x509)
{
}

/**
 * Parse an X509 certificate and return the information as an array
 *
 * @param mixed $x509
 * @param mixed $shortname
 *
 * @return array
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-x509-parse.php
 */
function openssl_x509_parse($x509, $shortname): array
{
}

/**
 * Parse an X.509 certificate and return a resource identifier for
 * it
 *
 * @param mixed $cert
 *
 * @return resource
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-x509-read.php
 */
function openssl_x509_read($cert)
{
}
