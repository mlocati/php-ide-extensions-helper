<?php
// Start of extension: openssl
// - parsed on POSIX with PHP 7.2.4 (extension version 7.2.4)
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
 * @param string $method The cipher method, see <code>openssl_get_cipher_methods</code> for a list of potential values.
 *
 * @return int Returns the cipher length on success, or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.3, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-cipher-iv-length.php
 */
function openssl_cipher_iv_length(string $method): int
{
}

/**
 * Exports a CSR as a string
 *
 * @param mixed $csr See CSR parameters for a list of valid values.
 * @param string $out on success, this string will contain the PEM encoded CSR
 * @param bool|null $notext The optional parameter <code>notext</code> affects
 * the verbosity of the output; if it is <code>FALSE</code>, then additional human-readable
 * information is included in the output. The default value of
 * <code>notext</code> is <code>TRUE</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-csr-export.php
 */
function openssl_csr_export($csr, string &$out, bool $notext = true): bool
{
}

/**
 * Exports a CSR to a file
 *
 * @param mixed $csr See CSR parameters for a list of valid values.
 * @param string $outfilename Path to the output file.
 * @param bool|null $notext The optional parameter <code>notext</code> affects
 * the verbosity of the output; if it is <code>FALSE</code>, then additional human-readable
 * information is included in the output. The default value of
 * <code>notext</code> is <code>TRUE</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-csr-export-to-file.php
 */
function openssl_csr_export_to_file($csr, string $outfilename, bool $notext = true): bool
{
}

/**
 * Returns the public key of a CSR
 *
 * @param mixed $csr See CSR parameters for a list of valid values.
 * @param bool|null $use_shortnames This parameter is ignored
 *
 * @return resource Returns a positive key resource identifier on success, or FALSE on error.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-csr-get-public-key.php
 */
function openssl_csr_get_public_key($csr, bool $use_shortnames = true)
{
}

/**
 * Returns the subject of a CSR
 *
 * @param mixed $csr See CSR parameters for a list of valid values.
 * @param bool|null $use_shortnames <code>shortnames</code> controls how the data is indexed in the
 * array - if <code>shortnames</code> is <code>TRUE</code> (the default) then
 * fields will be indexed with the short name form, otherwise, the long name
 * form will be used - e.g.: CN is the shortname form of commonName.
 *
 * @return array Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-csr-get-subject.php
 */
function openssl_csr_get_subject($csr, bool $use_shortnames = true): array
{
}

/**
 * Generates a CSR
 *
 * @param array $dn The Distinguished Name or subject fields to be used in the certificate.
 * @param resource $privkey <code>privkey</code> should be set to a private key that was
 * previously generated by <code>openssl_pkey_new</code> (or
 * otherwise obtained from the other openssl_pkey family of functions).
 * The corresponding public portion of the key will be used to sign the
 * CSR.
 * @param array $configargs By default, the information in your system <code>openssl.conf</code>
 * is used to initialize the request; you can specify a configuration file
 * section by setting the <code>config_section_section</code> key of
 * <code>configargs</code>. You can also specify an alternative
 * openssl configuration file by setting the value of the
 * <code>config</code> key to the path of the file you want to use.
 * The following keys, if present in <code>configargs</code>
 * behave as their equivalents in the <code>openssl.conf</code>, as
 * listed in the table below.
 * <table>
 * <title>Configuration overrides</title>
 * <thead>
 * <tr>
 * <td><code>configargs</code> key</td><td>type</td><td><code>openssl.conf</code> equivalent</td><td>description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>digest_alg</td><td><code>string</code></td><td>default_md</td><td>Digest method or signature hash, usually one of <code>openssl_get_md_methods</code></td>
 * </tr>
 * <tr>
 * <td>x509_extensions</td><td><code>string</code></td><td>x509_extensions</td><td>Selects which extensions should be used when creating an x509
 * certificate</td>
 * </tr>
 * <tr>
 * <td>req_extensions</td><td><code>string</code></td><td>req_extensions</td><td>Selects which extensions should be used when creating a CSR</td>
 * </tr>
 * <tr>
 * <td>private_key_bits</td><td><code>integer</code></td><td>default_bits</td><td>Specifies how many bits should be used to generate a private
 * key</td>
 * </tr>
 * <tr>
 * <td>private_key_type</td><td><code>integer</code></td><td>none</td><td>Specifies the type of private key to create. This can be one
 * of <code>OPENSSL_KEYTYPE_DSA</code>,
 * <code>OPENSSL_KEYTYPE_DH</code>,
 * <code>OPENSSL_KEYTYPE_RSA</code> or
 * <code>OPENSSL_KEYTYPE_EC</code>.
 * The default value is <code>OPENSSL_KEYTYPE_RSA</code>.
 * </td>
 * </tr>
 * <tr>
 * <td>encrypt_key</td><td><code>boolean</code></td><td>encrypt_key</td><td>Should an exported key (with passphrase) be encrypted?</td>
 * </tr>
 * <tr>
 * <td>encrypt_key_cipher</td><td><code>integer</code></td><td>none</td><td>
 * One of cipher constants.
 * </td>
 * </tr>
 * <tr>
 * <td>curve_name</td><td><code>string</code></td><td>none</td><td>
 * PHP 7.1+, One of <code>openssl_get_curve_names</code>.
 * </td>
 * </tr>
 * <tr>
 * <td>config</td><td><code>string</code></td><td>N/A</td><td>
 * Path to your own alternative openssl.conf file.
 * </td>
 * </tr>
 * </tbody>
 * </table>
 * @param array $extraattribs <code>extraattribs</code> is used to specify additional
 * configuration options for the CSR. Both <code>dn</code> and
 * <code>extraattribs</code> are associative arrays whose keys are
 * converted to OIDs and applied to the relevant part of the request.
 *
 * @return mixed Returns the CSR or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-csr-new.php
 */
function openssl_csr_new(array $dn, &$privkey, array $configargs = null, array $extraattribs = null)
{
}

/**
 * Sign a CSR with another certificate (or itself) and generate a certificate
 *
 * @param mixed $csr A CSR previously generated by <code>openssl_csr_new</code>.
 * It can also be the path to a PEM encoded CSR when specified as
 * <code>file://path/to/csr</code> or an exported string generated
 * by <code>openssl_csr_export</code>.
 * @param mixed $cacert The generated certificate will be signed by <code>cacert</code>.
 * If <code>cacert</code> is <code>NULL</code>, the generated certificate
 * will be a self-signed certificate.
 * @param mixed $priv_key <code>priv_key</code> is the private key that corresponds to
 * <code>cacert</code>.
 * @param int $days <code>days</code> specifies the length of time for which the
 * generated certificate will be valid, in days.
 * @param array $configargs You can finetune the CSR signing by <code>configargs</code>.
 * See <code>openssl_csr_new</code> for more information about
 * <code>configargs</code>.
 * @param int|null $serial An optional the serial number of issued certificate. If not specified
 * it will default to 0.
 *
 * @return resource Returns an x509 certificate resource on success, <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-csr-sign.php
 */
function openssl_csr_sign($csr, $cacert, $priv_key, int $days, array $configargs = null, int $serial = 0)
{
}

/**
 * Decrypts data
 *
 * @param string $data The encrypted message to be decrypted.
 * @param string $method The cipher method. For a list of available cipher methods, use
 * <code>openssl_get_cipher_methods</code>.
 * @param string $key The key.
 * @param int|null $options <code>options</code> can be one of
 * <code>OPENSSL_RAW_DATA</code>,
 * <code>OPENSSL_ZERO_PADDING</code>.
 * @param string|null $iv A non-NULL Initialization Vector.
 * @param string|null $tag The authentication tag in AEAD cipher mode. If it is incorrect, the authentication fails and the function returns <code>FALSE</code>.
 * @param string|null $aad Additional authentication data.
 *
 * @return string The decrypted string on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-decrypt.php
 */
function openssl_decrypt(string $data, string $method, string $key, int $options = 0, string $iv = "", string $tag = "", string $aad = ""): string
{
}

/**
 * Computes shared secret for public value of remote DH public key and local DH key
 *
 * @param string $pub_key DH Public key of the remote party.
 * @param resource $dh_key A local DH private key, corresponding to the public key to be shared with the remote party.
 *
 * @return string Returns shared secret on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-dh-compute-key.php
 */
function openssl_dh_compute_key(string $pub_key, $dh_key): string
{
}

/**
 * Computes a digest
 *
 * @param string $data The data.
 * @param string $method The digest method to use, e.g. "sha256", see <code>openssl_get_md_methods</code> for a list of available digest methods.
 * @param bool|null $raw_output Setting to <code>TRUE</code> will return as raw output data, otherwise the return
 * value is binhex encoded.
 *
 * @return string Returns the digested hash value on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-digest.php
 */
function openssl_digest(string $data, string $method, bool $raw_output = false): string
{
}

/**
 * Encrypts data
 *
 * @param string $data The plaintext message data to be encrypted.
 * @param string $method The cipher method. For a list of available cipher methods, use <code>openssl_get_cipher_methods</code>.
 * @param string $key The key.
 * @param int|null $options <code>options</code> is a bitwise disjunction of the flags
 * <code>OPENSSL_RAW_DATA</code> and
 * <code>OPENSSL_ZERO_PADDING</code>.
 * @param string|null $iv A non-NULL Initialization Vector.
 * @param string|null $tag The authentication tag passed by reference when using AEAD cipher mode (GCM or CCM).
 * @param string|null $aad Additional authentication data.
 * @param int|null $tag_length The length of the authentication <code>tag</code>. Its value can be between 4 and 16 for GCM mode.
 *
 * @return string Returns the encrypted string on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-encrypt.php
 */
function openssl_encrypt(string $data, string $method, string $key, int $options = 0, string $iv = "", string &$tag = null, string $aad = "", int $tag_length = 16): string
{
}

/**
 * Return openSSL error message
 *
 * @return string Returns an error message string, or <code>FALSE</code> if there are no more error
 * messages to return.
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
 * @param resource $key_identifier
 *
 * @return void No value is returned.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-free-key.php
 */
function openssl_free_key($key_identifier): void
{
}

/**
 * Retrieve the available certificate locations
 *
 * @return array Returns an array with the available certificate locations.
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
 * @param bool|null $aliases Set to <code>TRUE</code> if cipher aliases should be included within the
 * returned <code>array</code>.
 *
 * @return array An <code>array</code> of available cipher methods.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-get-cipher-methods.php
 */
function openssl_get_cipher_methods(bool $aliases = false): array
{
}

/**
 * Gets list of available curve names for ECC
 *
 * @return array An <code>array</code> of available curve names.
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
 * @param bool|null $aliases Set to <code>TRUE</code> if digest aliases should be included within the
 * returned <code>array</code>.
 *
 * @return array An <code>array</code> of available digest methods.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-get-md-methods.php
 */
function openssl_get_md_methods(bool $aliases = false): array
{
}

/**
 * Alias of <code>openssl_pkey_get_private</code>
 *
 * @param mixed $key
 * @param mixed $passphrase
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
 * @param string $sealed_data
 * @param string $open_data If the call is successful the opened data is returned in this
 * parameter.
 * @param string $env_key
 * @param mixed $priv_key_id
 * @param string|null $method The cipher method.
 * @param string $iv The initialization vector.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-open.php
 */
function openssl_open(string $sealed_data, string &$open_data, string $env_key, $priv_key_id, string $method = "RC4", string $iv = null): bool
{
}

/**
 * Generates a PKCS5 v2 PBKDF2 string
 *
 * @param string $password Password from which the derived key is generated.
 * @param string $salt PBKDF2 recommends a crytographic salt of at least 64 bits (8 bytes).
 * @param int $key_length Length of desired output key.
 * @param int $iterations The number of iterations desired. NIST
 * recommends at least 10,000.
 * @param string|null $digest_algorithm Optional hash or digest algorithm from <code>openssl_get_md_methods</code>. Defaults to SHA-1.
 *
 * @return string Returns raw binary string or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pbkdf2.php
 */
function openssl_pbkdf2(string $password, string $salt, int $key_length, int $iterations, string $digest_algorithm = "sha1"): string
{
}

/**
 * Exports a PKCS#12 Compatible Certificate Store File to variable
 *
 * @param mixed $x509 See Key/Certificate parameters for a list of valid values.
 * @param string $out On success, this will hold the PKCS#12.
 * @param mixed $priv_key Private key component of PKCS#12 file.
 * See Public/Private Key parameters for a list of valid values.
 * @param string $pass Encryption password for unlocking the PKCS#12 file.
 * @param array $args Optional array, other keys will be ignored.
 * <table>
 * <thead>
 * <tr>
 * <td>Key</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td><code>"extracerts"</code></td><td>array of extra certificates or a single certificate to be included in the PKCS#12 file.</td>
 * </tr>
 * <tr>
 * <td><code>"friendlyname"</code></td><td>string to be used for the supplied certificate and key</td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.2, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkcs12-export.php
 */
function openssl_pkcs12_export($x509, string &$out, $priv_key, string $pass, array $args = null): bool
{
}

/**
 * Exports a PKCS#12 Compatible Certificate Store File
 *
 * @param mixed $x509 See Key/Certificate parameters for a list of valid values.
 * @param string $filename Path to the output file.
 * @param mixed $priv_key Private key component of PKCS#12 file.
 * See Public/Private Key parameters for a list of valid values.
 * @param string $pass Encryption password for unlocking the PKCS#12 file.
 * @param array $args Optional array, other keys will be ignored.
 * <table>
 * <thead>
 * <tr>
 * <td>Key</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td><code>"extracerts"</code></td><td>array of extra certificates or a single certificate to be included in the PKCS#12 file.</td>
 * </tr>
 * <tr>
 * <td><code>"friendlyname"</code></td><td>string to be used for the supplied certificate and key</td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.2, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkcs12-export-to-file.php
 */
function openssl_pkcs12_export_to_file($x509, string $filename, $priv_key, string $pass, array $args = null): bool
{
}

/**
 * Parse a PKCS#12 Certificate Store into an array
 *
 * @param string $pkcs12 The certificate store contents, not its file name.
 * @param array $certs On success, this will hold the Certificate Store Data.
 * @param string $pass Encryption password for unlocking the PKCS#12 file.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.2.2, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkcs12-read.php
 */
function openssl_pkcs12_read(string $pkcs12, array &$certs, string $pass): bool
{
}

/**
 * Decrypts an S/MIME encrypted message
 *
 * @param string $infilename
 * @param string $outfilename The decrypted message is written to the file specified by
 * <code>outfilename</code>.
 * @param mixed $recipcert
 * @param mixed $recipkey
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkcs7-decrypt.php
 */
function openssl_pkcs7_decrypt(string $infilename, string $outfilename, $recipcert, $recipkey = null): bool
{
}

/**
 * Encrypt an S/MIME message
 *
 * @param string $infile
 * @param string $outfile
 * @param mixed $recipcerts Either a lone X.509 certificate, or an array of X.509 certificates.
 * @param array $headers <code>headers</code> is an array of headers that
 * will be prepended to the data after it has been encrypted.
 * @param int|null $flags <code>flags</code> can be used to specify options that affect
 * the encoding process - see PKCS7
 * constants.
 * @param int|null $cipherid One of cipher constants.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkcs7-encrypt.php
 */
function openssl_pkcs7_encrypt(string $infile, string $outfile, $recipcerts, array $headers, int $flags = 0, int $cipherid = OPENSSL_CIPHER_RC2_40): bool
{
}

/**
 * Export the PKCS7 file to an array of PEM certificates
 *
 * @param string $infilename
 * @param array $certs
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 7 >= 7.2.0
 *
 * @link http://www.php.net/manual/en/function.openssl-pkcs7-read.php
 */
function openssl_pkcs7_read(string $infilename, array &$certs): bool
{
}

/**
 * Sign an S/MIME message
 *
 * @param string $infilename The input file you are intending to digitally sign.
 * @param string $outfilename The file which the digital signature will be written to.
 * @param mixed $signcert The X.509 certificate used to digitally sign infilename.
 * See Key/Certificate parameters for a list of valid values.
 * @param mixed $privkey <code>privkey</code> is the private key corresponding to signcert.
 * See Public/Private Key parameters for a list of valid values.
 * @param array $headers <code>headers</code> is an array of headers that
 * will be prepended to the data after it has been signed (see
 * <code>openssl_pkcs7_encrypt</code> for more information about
 * the format of this parameter).
 * @param int|null $flags <code>flags</code> can be used to alter the output - see PKCS7 constants.
 * @param string $extracerts <code>extracerts</code> specifies the name of a file containing
 * a bunch of extra certificates to include in the signature which can for
 * example be used to help the recipient to verify the certificate that you used.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkcs7-sign.php
 */
function openssl_pkcs7_sign(string $infilename, string $outfilename, $signcert, $privkey, array $headers, int $flags = PKCS7_DETACHED, string $extracerts = null): bool
{
}

/**
 * Verifies the signature of an S/MIME signed message
 *
 * @param string $filename Path to the message.
 * @param int $flags <code>flags</code> can be used to affect how the signature is
 * verified - see PKCS7 constants
 * for more information.
 * @param string $outfilename If the <code>outfilename</code> is specified, it should be a
 * string holding the name of a file into which the certificates of the
 * persons that signed the messages will be stored in PEM format.
 * @param array $cainfo If the <code>cainfo</code> is specified, it should hold
 * information about the trusted CA certificates to use in the verification
 * process - see certificate
 * verification for more information about this parameter.
 * @param string $extracerts If the <code>extracerts</code> is specified, it is the filename
 * of a file containing a bunch of certificates to use as untrusted CAs.
 * @param string $content You can specify a filename with <code>content</code> that will
 * be filled with the verified data, but with the signature information
 * stripped.
 * @param string $p7bfilename
 *
 * @return mixed Returns <code>TRUE</code> if the signature is verified, <code>FALSE</code> if it is not correct
 * (the message has been tampered with, or the signing certificate is invalid),
 * or -1 on error.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkcs7-verify.php
 */
function openssl_pkcs7_verify(string $filename, int $flags, string $outfilename = null, array $cainfo = null, string $extracerts = null, string $content = null, string $p7bfilename = null)
{
}

/**
 * Gets an exportable representation of a key into a string
 *
 * @param mixed $key
 * @param string $out
 * @param string $passphrase The key is optionally protected by <code>passphrase</code>.
 * @param array $configargs <code>configargs</code> can be used to fine-tune the export
 * process by specifying and/or overriding options for the openssl
 * configuration file. See <code>openssl_csr_new</code> for more
 * information about <code>configargs</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkey-export.php
 */
function openssl_pkey_export($key, string &$out, string $passphrase = null, array $configargs = null): bool
{
}

/**
 * Gets an exportable representation of a key into a file
 *
 * @param mixed $key
 * @param string $outfilename Path to the output file.
 * @param string $passphrase The key can be optionally protected by a
 * <code>passphrase</code>.
 * @param array $configargs <code>configargs</code> can be used to fine-tune the export
 * process by specifying and/or overriding options for the openssl
 * configuration file. See <code>openssl_csr_new</code> for more
 * information about <code>configargs</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkey-export-to-file.php
 */
function openssl_pkey_export_to_file($key, string $outfilename, string $passphrase = null, array $configargs = null): bool
{
}

/**
 * Frees a private key
 *
 * @param resource $key Resource holding the key.
 *
 * @return void No value is returned.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkey-free.php
 */
function openssl_pkey_free($key): void
{
}

/**
 * Returns an array with the key details
 *
 * @param resource $key Resource holding the key.
 *
 * @return array Returns an array with the key details in success or <code>FALSE</code> in failure.
 * Returned array has indexes <code>bits</code> (number of bits),
 * <code>key</code> (string representation of the public key) and
 * <code>type</code> (type of the key which is one of
 * <code>OPENSSL_KEYTYPE_RSA</code>,
 * <code>OPENSSL_KEYTYPE_DSA</code>,
 * <code>OPENSSL_KEYTYPE_DH</code>,
 * <code>OPENSSL_KEYTYPE_EC</code> or -1 meaning unknown).
 * Depending on the key type used, additional details may be returned. Note that
 * some elements may not always be available.
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
 * @param mixed $key <code>key</code> can be one of the following:
 * <orderedlist>
 * a string having the format
 * <code>file://path/to/file.pem</code>. The named file must
 * contain a PEM encoded certificate/private key (it may contain both).
 * A PEM formatted private key.
 * </orderedlist>
 * @param string|null $passphrase The optional parameter <code>passphrase</code> must be used
 * if the specified key is encrypted (protected by a passphrase).
 *
 * @return resource Returns a positive key resource identifier on success, or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkey-get-private.php
 */
function openssl_pkey_get_private($key, string $passphrase = "")
{
}

/**
 * Extract public key from certificate and prepare it for use
 *
 * @param mixed $certificate <code>certificate</code> can be one of the following:
 * <orderedlist>
 * an X.509 certificate resource
 * a string having the format
 * <code>file://path/to/file.pem</code>. The named file must
 * contain a PEM encoded certificate/public key (it may contain both).
 * A PEM formatted public key.
 * </orderedlist>
 *
 * @return resource Returns a positive key resource identifier on success, or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkey-get-public.php
 */
function openssl_pkey_get_public($certificate)
{
}

/**
 * Generates a new private key
 *
 * @param array $configargs You can finetune the key generation (such as specifying the number of
 * bits) using <code>configargs</code>. See
 * <code>openssl_csr_new</code> for more information about
 * <code>configargs</code>.
 *
 * @return resource Returns a resource identifier for the pkey on success, or <code>FALSE</code> on
 * error.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-pkey-new.php
 */
function openssl_pkey_new(array $configargs = null)
{
}

/**
 * Decrypts data with private key
 *
 * @param string $data
 * @param string $decrypted
 * @param mixed $key <code>key</code> must be the private key corresponding that
 * was used to encrypt the data.
 * @param int|null $padding <code>padding</code> can be one of
 * <code>OPENSSL_PKCS1_PADDING</code>,
 * <code>OPENSSL_SSLV23_PADDING</code>,
 * <code>OPENSSL_PKCS1_OAEP_PADDING</code>,
 * <code>OPENSSL_NO_PADDING</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-private-decrypt.php
 */
function openssl_private_decrypt(string $data, string &$decrypted, $key, int $padding = OPENSSL_PKCS1_PADDING): bool
{
}

/**
 * Encrypts data with private key
 *
 * @param string $data
 * @param string $crypted
 * @param mixed $key
 * @param int|null $padding <code>padding</code> can be one of
 * <code>OPENSSL_PKCS1_PADDING</code>,
 * <code>OPENSSL_NO_PADDING</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-private-encrypt.php
 */
function openssl_private_encrypt(string $data, string &$crypted, $key, int $padding = OPENSSL_PKCS1_PADDING): bool
{
}

/**
 * Decrypts data with public key
 *
 * @param string $data
 * @param string $decrypted
 * @param mixed $key <code>key</code> must be the public key corresponding that
 * was used to encrypt the data.
 * @param int|null $padding <code>padding</code> can be one of
 * <code>OPENSSL_PKCS1_PADDING</code>,
 * <code>OPENSSL_NO_PADDING</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-public-decrypt.php
 */
function openssl_public_decrypt(string $data, string &$decrypted, $key, int $padding = OPENSSL_PKCS1_PADDING): bool
{
}

/**
 * Encrypts data with public key
 *
 * @param string $data
 * @param string $crypted This will hold the result of the encryption.
 * @param mixed $key The public key.
 * @param int|null $padding <code>padding</code> can be one of
 * <code>OPENSSL_PKCS1_PADDING</code>,
 * <code>OPENSSL_SSLV23_PADDING</code>,
 * <code>OPENSSL_PKCS1_OAEP_PADDING</code>,
 * <code>OPENSSL_NO_PADDING</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-public-encrypt.php
 */
function openssl_public_encrypt(string $data, string &$crypted, $key, int $padding = OPENSSL_PKCS1_PADDING): bool
{
}

/**
 * Generate a pseudo-random string of bytes
 *
 * @param int $length The length of the desired string of bytes. Must be a positive integer. PHP will
 * try to cast this parameter to a non-null integer to use it.
 * @param bool $crypto_strong If passed into the function, this will hold a <code>boolean</code> value that determines
 * if the algorithm used was "cryptographically strong", e.g., safe for usage with GPG,
 * passwords, etc. <code>TRUE</code> if it did, otherwise <code>FALSE</code>
 *
 * @return string Returns the generated <code>string</code> of bytes on success, or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-random-pseudo-bytes.php
 */
function openssl_random_pseudo_bytes(int $length, bool &$crypto_strong = null): string
{
}

/**
 * Seal (encrypt) data
 *
 * @param string $data The data to seal.
 * @param string $sealed_data The sealed data.
 * @param array $env_keys Array of encrypted keys.
 * @param array $pub_key_ids Array of public key resource identifiers.
 * @param string|null $method The cipher method.
 * @param string $iv The initialization vector.
 *
 * @return int Returns the length of the sealed data on success, or <code>FALSE</code> on error.
 * If successful the sealed data is returned in
 * <code>sealed_data</code>, and the envelope keys in
 * <code>env_keys</code>.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-seal.php
 */
function openssl_seal(string $data, string &$sealed_data, array &$env_keys, array $pub_key_ids, string $method = "RC4", string &$iv = null): int
{
}

/**
 * Generate signature
 *
 * @param string $data The string of data you wish to sign
 * @param string $signature If the call was successful the signature is returned in
 * <code>signature</code>.
 * @param mixed $priv_key_id <code>resource</code> - a key, returned by <code>openssl_get_privatekey</code>
 * @param mixed|null $signature_alg <code>int</code> - one of these Signature Algorithms.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-sign.php
 */
function openssl_sign(string $data, string &$signature, $priv_key_id, $signature_alg = OPENSSL_ALGO_SHA1): bool
{
}

/**
 * Exports a valid PEM formatted public key signed public key and challenge
 *
 * @param string $spkac Expects a valid signed public key and challenge
 *
 * @return string Returns the associated PEM formatted public key or NULL on failure.
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-spki-export.php
 */
function openssl_spki_export(string $spkac): string
{
}

/**
 * Exports the challenge assoicated with a signed public key and challenge
 *
 * @param string $spkac Expects a valid signed public key and challenge
 *
 * @return string Returns the associated challenge string or NULL on failure.
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-spki-export-challenge.php
 */
function openssl_spki_export_challenge(string $spkac): string
{
}

/**
 * Generate a new signed public key and challenge
 *
 * @param resource $privkey <code>privkey</code> should be set to a private key that was
 * previously generated by <code>openssl_pkey_new</code> (or
 * otherwise obtained from the other openssl_pkey family of functions).
 * The corresponding public portion of the key will be used to sign the
 * CSR.
 * @param string $challenge The challenge associated to associate with the SPKAC
 * @param int|null $algorithm The digest algorithm. See openssl_get_md_method().
 *
 * @return string Returns a signed public key and challenge string or NULL on failure.
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-spki-new.php
 */
function openssl_spki_new($privkey, string $challenge, int $algorithm = 0): string
{
}

/**
 * Verifies a signed public key and challenge
 *
 * @param string $spkac Expects a valid signed public key and challenge
 *
 * @return string Returns a boolean on success or failure.
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-spki-verify.php
 */
function openssl_spki_verify(string $spkac): string
{
}

/**
 * Verify signature
 *
 * @param string $data The string of data used to generate the signature previously
 * @param string $signature A raw binary string, generated by <code>openssl_sign</code> or similar means
 * @param mixed $pub_key_id <code>resource</code> - a key, returned by <code>openssl_get_publickey</code>
 * @param mixed|null $signature_alg <code>int</code> - one of these Signature Algorithms.
 *
 * @return int Returns 1 if the signature is correct, 0 if it is incorrect, and
 * -1 on error.
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-verify.php
 */
function openssl_verify(string $data, string $signature, $pub_key_id, $signature_alg = OPENSSL_ALGO_SHA1): int
{
}

/**
 * Checks if a private key corresponds to a certificate
 *
 * @param mixed $cert The certificate.
 * @param mixed $key The private key.
 *
 * @return bool Returns <code>TRUE</code> if <code>key</code> is the private key that
 * corresponds to <code>cert</code>, or <code>FALSE</code> otherwise.
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
 * @param mixed $x509cert The examined certificate.
 * @param int $purpose <table>
 * <title><code>openssl_x509_checkpurpose</code> purposes</title>
 * <thead>
 * <tr>
 * <td>Constant</td><td>Description</td>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>X509_PURPOSE_SSL_CLIENT</td><td>Can the certificate be used for the client side of an SSL
 * connection?</td>
 * </tr>
 * <tr>
 * <td>X509_PURPOSE_SSL_SERVER</td><td>Can the certificate be used for the server side of an SSL
 * connection?</td>
 * </tr>
 * <tr>
 * <td>X509_PURPOSE_NS_SSL_SERVER</td><td>Can the cert be used for Netscape SSL server?</td>
 * </tr>
 * <tr>
 * <td>X509_PURPOSE_SMIME_SIGN</td><td>Can the cert be used to sign S/MIME email?</td>
 * </tr>
 * <tr>
 * <td>X509_PURPOSE_SMIME_ENCRYPT</td><td>Can the cert be used to encrypt S/MIME email?</td>
 * </tr>
 * <tr>
 * <td>X509_PURPOSE_CRL_SIGN</td><td>Can the cert be used to sign a certificate revocation list
 * (CRL)?</td>
 * </tr>
 * <tr>
 * <td>X509_PURPOSE_ANY</td><td>Can the cert be used for Any/All purposes?</td>
 * </tr>
 * </tbody>
 * </table>
 * These options are not bitfields - you may specify one only!
 * @param array|null $cainfo <code>cainfo</code> should be an array of trusted CA files/dirs
 * as described in Certificate
 * Verification.
 * @param string $untrustedfile If specified, this should be the name of a PEM encoded file holding
 * certificates that can be used to help verify the certificate, although
 * no trust is placed in the certificates that come from that file.
 *
 * @return int Returns <code>TRUE</code> if the certificate can be used for the intended purpose,
 * <code>FALSE</code> if it cannot, or -1 on error.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-x509-checkpurpose.php
 */
function openssl_x509_checkpurpose($x509cert, int $purpose, array $cainfo = /* array() */ null, string $untrustedfile = null): int
{
}

/**
 * Exports a certificate as a string
 *
 * @param mixed $x509 See Key/Certificate parameters for a list of valid values.
 * @param string $output On success, this will hold the PEM.
 * @param bool|null $notext The optional parameter <code>notext</code> affects
 * the verbosity of the output; if it is <code>FALSE</code>, then additional human-readable
 * information is included in the output. The default value of
 * <code>notext</code> is <code>TRUE</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-x509-export.php
 */
function openssl_x509_export($x509, string &$output, bool $notext = true): bool
{
}

/**
 * Exports a certificate to file
 *
 * @param mixed $x509 See Key/Certificate parameters for a list of valid values.
 * @param string $outfilename Path to the output file.
 * @param bool|null $notext The optional parameter <code>notext</code> affects
 * the verbosity of the output; if it is <code>FALSE</code>, then additional human-readable
 * information is included in the output. The default value of
 * <code>notext</code> is <code>TRUE</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-x509-export-to-file.php
 */
function openssl_x509_export_to_file($x509, string $outfilename, bool $notext = true): bool
{
}

/**
 * Calculates the fingerprint, or digest, of a given X.509 certificate
 *
 * @param mixed $x509 See Key/Certificate parameters for a list of valid values.
 * @param string|null $hash_algorithm The digest method or hash algorithm to use, e.g. "sha256", one of <code>openssl_get_md_methods</code>.
 * @param bool|null $raw_output When set to <code>TRUE</code>, outputs raw binary data. <code>FALSE</code> outputs lowercase hexits.
 *
 * @return string Returns a string containing the calculated certificate fingerprint as lowercase hexits unless <code>raw_output</code> is set to <code>TRUE</code> in which case the raw binary representation of the message digest is returned.
 * Returns <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.6.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-x509-fingerprint.php
 */
function openssl_x509_fingerprint($x509, string $hash_algorithm = "sha1", bool $raw_output = false): string
{
}

/**
 * Free certificate resource
 *
 * @param resource $x509cert
 *
 * @return void No value is returned.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-x509-free.php
 */
function openssl_x509_free($x509cert): void
{
}

/**
 * Parse an X509 certificate and return the information as an array
 *
 * @param mixed $x509cert
 * @param bool|null $shortnames <code>shortnames</code> controls how the data is indexed in the
 * array - if <code>shortnames</code> is <code>TRUE</code> (the default) then
 * fields will be indexed with the short name form, otherwise, the long name
 * form will be used - e.g.: CN is the shortname form of commonName.
 *
 * @return array <code>The structure of the returned data is (deliberately) not
 * yet documented, as it is still subject to change.</code>
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-x509-parse.php
 */
function openssl_x509_parse($x509cert, bool $shortnames = true): array
{
}

/**
 * Parse an X.509 certificate and return a resource identifier for
 * it
 *
 * @param mixed $x509certdata X509 certificate. See Key/Certificate parameters for a list of valid values.
 *
 * @return resource Returns a resource identifier on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.openssl-x509-read.php
 */
function openssl_x509_read($x509certdata)
{
}
