<?php
// Start of extension: curl
// - parsed on POSIX with PHP 7.2.3 (extension version 7.2.3)
// - parsed on Windows with PHP 7.2.4 (extension version 7.2.4)

/**
 * @var int
 */
const CURL_FNMATCHFUNC_FAIL = 2;

/**
 * @var int
 */
const CURL_FNMATCHFUNC_MATCH = 0;

/**
 * @var int
 */
const CURL_FNMATCHFUNC_NOMATCH = 1;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-http-version-1-0
 *
 * @var int
 */
const CURL_HTTP_VERSION_1_0 = 1;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-http-version-1-1
 *
 * @var int
 */
const CURL_HTTP_VERSION_1_1 = 2;

/**
 * Available since PHP 7.0.7 and cURL 7.43.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-http-version-2
 *
 * @var int
 */
const CURL_HTTP_VERSION_2 = 3;

/**
 * @var int
 */
const CURL_HTTP_VERSION_2_0 = 3;

/**
 * Available since PHP 7.0.7 and cURL 7.49.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-http-version-2-prior-knowledge
 *
 * @var int
 */
const CURL_HTTP_VERSION_2_PRIOR_KNOWLEDGE = 5;

/**
 * Available since PHP 7.0.7 and cURL 7.47.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-http-version-2tls
 *
 * @var int
 */
const CURL_HTTP_VERSION_2TLS = 4;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-http-version-none
 *
 * @var int
 */
const CURL_HTTP_VERSION_NONE = 0;

/**
 * @var int
 */
const CURL_IPRESOLVE_V4 = 1;

/**
 * @var int
 */
const CURL_IPRESOLVE_V6 = 2;

/**
 * @var int
 */
const CURL_IPRESOLVE_WHATEVER = 0;

/**
 * @var int
 */
const CURL_LOCK_DATA_COOKIE = 2;

/**
 * @var int
 */
const CURL_LOCK_DATA_DNS = 3;

/**
 * @var int
 */
const CURL_LOCK_DATA_SSL_SESSION = 4;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-netrc-ignored
 *
 * @var int
 */
const CURL_NETRC_IGNORED = 0;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-netrc-optional
 *
 * @var int
 */
const CURL_NETRC_OPTIONAL = 1;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-netrc-required
 *
 * @var int
 */
const CURL_NETRC_REQUIRED = 2;

/**
 * Available since PHP 7.1.0 and cURL 7.44.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-push-deny
 *
 * @var int
 */
const CURL_PUSH_DENY = 1;

/**
 * Available since PHP 7.1.0 and cURL 7.44.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-push-ok
 *
 * @var int
 */
const CURL_PUSH_OK = 0;

/**
 * @var int
 */
const CURL_READFUNC_PAUSE = 268435457;

/**
 * Available since PHP 7.0.7 and cURL 7.18.2
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-redir-post-301
 *
 * @var int
 */
const CURL_REDIR_POST_301 = 1;

/**
 * Available since PHP 7.0.7 and cURL 7.18.2
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-redir-post-302
 *
 * @var int
 */
const CURL_REDIR_POST_302 = 2;

/**
 * Available since PHP 7.0.7 and cURL 7.25.1
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-redir-post-303
 *
 * @var int
 */
const CURL_REDIR_POST_303 = 4;

/**
 * Available since PHP 7.0.7 and cURL 7.18.2
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-redir-post-all
 *
 * @var int
 */
const CURL_REDIR_POST_ALL = 7;

/**
 * @var int
 */
const CURL_RTSPREQ_ANNOUNCE = 3;

/**
 * @var int
 */
const CURL_RTSPREQ_DESCRIBE = 2;

/**
 * @var int
 */
const CURL_RTSPREQ_GET_PARAMETER = 8;

/**
 * @var int
 */
const CURL_RTSPREQ_OPTIONS = 1;

/**
 * @var int
 */
const CURL_RTSPREQ_PAUSE = 6;

/**
 * @var int
 */
const CURL_RTSPREQ_PLAY = 5;

/**
 * @var int
 */
const CURL_RTSPREQ_RECEIVE = 11;

/**
 * @var int
 */
const CURL_RTSPREQ_RECORD = 10;

/**
 * @var int
 */
const CURL_RTSPREQ_SET_PARAMETER = 9;

/**
 * @var int
 */
const CURL_RTSPREQ_SETUP = 4;

/**
 * @var int
 */
const CURL_RTSPREQ_TEARDOWN = 7;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-sslversion-default
 *
 * @var int
 */
const CURL_SSLVERSION_DEFAULT = 0;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-sslversion-sslv2
 *
 * @var int
 */
const CURL_SSLVERSION_SSLv2 = 2;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-sslversion-sslv3
 *
 * @var int
 */
const CURL_SSLVERSION_SSLv3 = 3;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-sslversion-tlsv1
 *
 * @var int
 */
const CURL_SSLVERSION_TLSv1 = 1;

/**
 * Available since PHP 5.5.19 and 5.6.3
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-sslversion-tlsv1-0
 *
 * @var int
 */
const CURL_SSLVERSION_TLSv1_0 = 4;

/**
 * Available since PHP 5.5.19 and 5.6.3
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-sslversion-tlsv1-1
 *
 * @var int
 */
const CURL_SSLVERSION_TLSv1_1 = 5;

/**
 * Available since PHP 5.5.19 and 5.6.3
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-sslversion-tlsv1-2
 *
 * @var int
 */
const CURL_SSLVERSION_TLSv1_2 = 6;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-timecond-ifmodsince
 *
 * @var int
 */
const CURL_TIMECOND_IFMODSINCE = 1;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-timecond-ifunmodsince
 *
 * @var int
 */
const CURL_TIMECOND_IFUNMODSINCE = 2;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-timecond-lastmod
 *
 * @var int
 */
const CURL_TIMECOND_LASTMOD = 3;

/**
 * @var int
 */
const CURL_TIMECOND_NONE = 0;

/**
 * @var int
 */
const CURL_TLSAUTH_SRP = 1;

/**
 * Available since PHP 5.5.24 and 5.6.8 and cURL 7.33.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-version-http2
 *
 * @var int
 */
const CURL_VERSION_HTTP2 = 65536;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-version-ipv6
 *
 * @var int
 */
const CURL_VERSION_IPV6 = 1;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-version-kerberos4
 *
 * @var int
 */
const CURL_VERSION_KERBEROS4 = 2;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-version-libz
 *
 * @var int
 */
const CURL_VERSION_LIBZ = 8;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curl-version-ssl
 *
 * @var int
 */
const CURL_VERSION_SSL = 4;

/**
 * @var int
 */
const CURL_WRITEFUNC_PAUSE = 268435457;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlauth-any
 *
 * @var int
 */
const CURLAUTH_ANY = -17;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlauth-anysafe
 *
 * @var int
 */
const CURLAUTH_ANYSAFE = -18;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlauth-basic
 *
 * @var int
 */
const CURLAUTH_BASIC = 1;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlauth-digest
 *
 * @var int
 */
const CURLAUTH_DIGEST = 2;

/**
 * @var int
 */
const CURLAUTH_DIGEST_IE = 16;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlauth-gssnegotiate
 *
 * @var int
 */
const CURLAUTH_GSSNEGOTIATE = 4;

/**
 * Available since PHP 7.0.7 and cURL 7.38.0.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlauth-negotiate
 *
 * @var int
 */
const CURLAUTH_NEGOTIATE = 4;

/**
 * @var int
 */
const CURLAUTH_NONE = 0;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlauth-ntlm
 *
 * @var int
 */
const CURLAUTH_NTLM = 8;

/**
 * Available since PHP 7.0.7 and cURL 7.22.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlauth-ntlm-wb
 *
 * @var int
 */
const CURLAUTH_NTLM_WB = 32;

/**
 * @var float
 */
const CURLAUTH_ONLY = 2147483648;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-aborted-by-callback
 *
 * @var int
 */
const CURLE_ABORTED_BY_CALLBACK = 42;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-bad-calling-order
 *
 * @var int
 */
const CURLE_BAD_CALLING_ORDER = 44;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-bad-content-encoding
 *
 * @var int
 */
const CURLE_BAD_CONTENT_ENCODING = 61;

/**
 * @var int
 */
const CURLE_BAD_DOWNLOAD_RESUME = 36;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-bad-function-argument
 *
 * @var int
 */
const CURLE_BAD_FUNCTION_ARGUMENT = 43;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-bad-password-entered
 *
 * @var int
 */
const CURLE_BAD_PASSWORD_ENTERED = 46;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-couldnt-connect
 *
 * @var int
 */
const CURLE_COULDNT_CONNECT = 7;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-couldnt-resolve-host
 *
 * @var int
 */
const CURLE_COULDNT_RESOLVE_HOST = 6;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-couldnt-resolve-proxy
 *
 * @var int
 */
const CURLE_COULDNT_RESOLVE_PROXY = 5;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-failed-init
 *
 * @var int
 */
const CURLE_FAILED_INIT = 2;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-file-couldnt-read-file
 *
 * @var int
 */
const CURLE_FILE_COULDNT_READ_FILE = 37;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-filesize-exceeded
 *
 * @var int
 */
const CURLE_FILESIZE_EXCEEDED = 63;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ftp-access-denied
 *
 * @var int
 */
const CURLE_FTP_ACCESS_DENIED = 9;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ftp-bad-download-resume
 *
 * @var int
 */
const CURLE_FTP_BAD_DOWNLOAD_RESUME = 36;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ftp-cant-get-host
 *
 * @var int
 */
const CURLE_FTP_CANT_GET_HOST = 15;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ftp-cant-reconnect
 *
 * @var int
 */
const CURLE_FTP_CANT_RECONNECT = 16;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ftp-couldnt-get-size
 *
 * @var int
 */
const CURLE_FTP_COULDNT_GET_SIZE = 32;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ftp-couldnt-retr-file
 *
 * @var int
 */
const CURLE_FTP_COULDNT_RETR_FILE = 19;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ftp-couldnt-set-ascii
 *
 * @var int
 */
const CURLE_FTP_COULDNT_SET_ASCII = 29;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ftp-couldnt-set-binary
 *
 * @var int
 */
const CURLE_FTP_COULDNT_SET_BINARY = 17;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ftp-couldnt-stor-file
 *
 * @var int
 */
const CURLE_FTP_COULDNT_STOR_FILE = 25;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ftp-couldnt-use-rest
 *
 * @var int
 */
const CURLE_FTP_COULDNT_USE_REST = 31;

/**
 * @var int
 */
const CURLE_FTP_PARTIAL_FILE = 18;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ftp-port-failed
 *
 * @var int
 */
const CURLE_FTP_PORT_FAILED = 30;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ftp-quote-error
 *
 * @var int
 */
const CURLE_FTP_QUOTE_ERROR = 21;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ftp-ssl-failed
 *
 * @var int
 */
const CURLE_FTP_SSL_FAILED = 64;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ftp-user-password-incorrect
 *
 * @var int
 */
const CURLE_FTP_USER_PASSWORD_INCORRECT = 10;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ftp-weird-227-format
 *
 * @var int
 */
const CURLE_FTP_WEIRD_227_FORMAT = 14;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ftp-weird-pass-reply
 *
 * @var int
 */
const CURLE_FTP_WEIRD_PASS_REPLY = 11;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ftp-weird-pasv-reply
 *
 * @var int
 */
const CURLE_FTP_WEIRD_PASV_REPLY = 13;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ftp-weird-server-reply
 *
 * @var int
 */
const CURLE_FTP_WEIRD_SERVER_REPLY = 8;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ftp-weird-user-reply
 *
 * @var int
 */
const CURLE_FTP_WEIRD_USER_REPLY = 12;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ftp-write-error
 *
 * @var int
 */
const CURLE_FTP_WRITE_ERROR = 20;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-function-not-found
 *
 * @var int
 */
const CURLE_FUNCTION_NOT_FOUND = 41;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-got-nothing
 *
 * @var int
 */
const CURLE_GOT_NOTHING = 52;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-http-not-found
 *
 * @var int
 */
const CURLE_HTTP_NOT_FOUND = 22;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-http-port-failed
 *
 * @var int
 */
const CURLE_HTTP_PORT_FAILED = 45;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-http-post-error
 *
 * @var int
 */
const CURLE_HTTP_POST_ERROR = 34;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-http-range-error
 *
 * @var int
 */
const CURLE_HTTP_RANGE_ERROR = 33;

/**
 * @var int
 */
const CURLE_HTTP_RETURNED_ERROR = 22;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ldap-cannot-bind
 *
 * @var int
 */
const CURLE_LDAP_CANNOT_BIND = 38;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ldap-invalid-url
 *
 * @var int
 */
const CURLE_LDAP_INVALID_URL = 62;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ldap-search-failed
 *
 * @var int
 */
const CURLE_LDAP_SEARCH_FAILED = 39;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-library-not-found
 *
 * @var int
 */
const CURLE_LIBRARY_NOT_FOUND = 40;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-malformat-user
 *
 * @var int
 */
const CURLE_MALFORMAT_USER = 24;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-obsolete
 *
 * @var int
 */
const CURLE_OBSOLETE = 50;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ok
 *
 * @var int
 */
const CURLE_OK = 0;

/**
 * @var int
 */
const CURLE_OPERATION_TIMEDOUT = 28;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-operation-timeouted
 *
 * @var int
 */
const CURLE_OPERATION_TIMEOUTED = 28;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-out-of-memory
 *
 * @var int
 */
const CURLE_OUT_OF_MEMORY = 27;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-partial-file
 *
 * @var int
 */
const CURLE_PARTIAL_FILE = 18;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-read-error
 *
 * @var int
 */
const CURLE_READ_ERROR = 26;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-recv-error
 *
 * @var int
 */
const CURLE_RECV_ERROR = 56;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-send-error
 *
 * @var int
 */
const CURLE_SEND_ERROR = 55;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-share-in-use
 *
 * @var int
 */
const CURLE_SHARE_IN_USE = 57;

/**
 * Available since PHP 5.3.0 and cURL 7.16.1.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ssh
 *
 * @var int
 */
const CURLE_SSH = 79;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ssl-cacert
 *
 * @var int
 */
const CURLE_SSL_CACERT = 60;

/**
 * @var int
 */
const CURLE_SSL_CACERT_BADFILE = 77;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ssl-certproblem
 *
 * @var int
 */
const CURLE_SSL_CERTPROBLEM = 58;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ssl-cipher
 *
 * @var int
 */
const CURLE_SSL_CIPHER = 59;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ssl-connect-error
 *
 * @var int
 */
const CURLE_SSL_CONNECT_ERROR = 35;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ssl-engine-notfound
 *
 * @var int
 */
const CURLE_SSL_ENGINE_NOTFOUND = 53;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ssl-engine-setfailed
 *
 * @var int
 */
const CURLE_SSL_ENGINE_SETFAILED = 54;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-ssl-peer-certificate
 *
 * @var int
 */
const CURLE_SSL_PEER_CERTIFICATE = 51;

/**
 * @var int
 */
const CURLE_SSL_PINNEDPUBKEYNOTMATCH = 90;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-telnet-option-syntax
 *
 * @var int
 */
const CURLE_TELNET_OPTION_SYNTAX = 49;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-too-many-redirects
 *
 * @var int
 */
const CURLE_TOO_MANY_REDIRECTS = 47;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-unknown-telnet-option
 *
 * @var int
 */
const CURLE_UNKNOWN_TELNET_OPTION = 48;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-unsupported-protocol
 *
 * @var int
 */
const CURLE_UNSUPPORTED_PROTOCOL = 1;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-url-malformat
 *
 * @var int
 */
const CURLE_URL_MALFORMAT = 3;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-url-malformat-user
 *
 * @var int
 */
const CURLE_URL_MALFORMAT_USER = 4;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curle-write-error
 *
 * @var int
 */
const CURLE_WRITE_ERROR = 23;

/**
 * Available since PHP 7.0.7 and cURL 7.19.3
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlftp-create-dir
 *
 * @var int
 */
const CURLFTP_CREATE_DIR = 1;

/**
 * Available since PHP 7.0.7 and cURL 7.19.3
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlftp-create-dir-none
 *
 * @var int
 */
const CURLFTP_CREATE_DIR_NONE = 0;

/**
 * Available since PHP 7.0.7 and cURL 7.19.3
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlftp-create-dir-retry
 *
 * @var int
 */
const CURLFTP_CREATE_DIR_RETRY = 2;

/**
 * Available since PHP 5.1.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlftpauth-default
 *
 * @var int
 */
const CURLFTPAUTH_DEFAULT = 0;

/**
 * Available since PHP 5.1.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlftpauth-ssl
 *
 * @var int
 */
const CURLFTPAUTH_SSL = 1;

/**
 * Available since PHP 5.1.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlftpauth-tls
 *
 * @var int
 */
const CURLFTPAUTH_TLS = 2;

/**
 * @var int
 */
const CURLFTPMETHOD_MULTICWD = 1;

/**
 * @var int
 */
const CURLFTPMETHOD_NOCWD = 2;

/**
 * @var int
 */
const CURLFTPMETHOD_SINGLECWD = 3;

/**
 * Available since PHP 5.2.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlftpssl-all
 *
 * @var int
 */
const CURLFTPSSL_ALL = 3;

/**
 * @var int
 */
const CURLFTPSSL_CCC_ACTIVE = 2;

/**
 * @var int
 */
const CURLFTPSSL_CCC_NONE = 0;

/**
 * @var int
 */
const CURLFTPSSL_CCC_PASSIVE = 1;

/**
 * Available since PHP 5.2.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlftpssl-control
 *
 * @var int
 */
const CURLFTPSSL_CONTROL = 2;

/**
 * Available since PHP 5.2.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlftpssl-none
 *
 * @var int
 */
const CURLFTPSSL_NONE = 0;

/**
 * Available since PHP 5.2.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlftpssl-try
 *
 * @var int
 */
const CURLFTPSSL_TRY = 1;

/**
 * @var int
 */
const CURLGSSAPI_DELEGATION_FLAG = 2;

/**
 * @var int
 */
const CURLGSSAPI_DELEGATION_POLICY_FLAG = 1;

/**
 * Available since PHP 7.0.7 and cURL 7.37.0.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlheader-separate
 *
 * @var int
 */
const CURLHEADER_SEPARATE = 1;

/**
 * Available since PHP 7.0.7 and cURL 7.37.0.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlheader-unified
 *
 * @var int
 */
const CURLHEADER_UNIFIED = 0;

/**
 * @var int
 */
const CURLINFO_APPCONNECT_TIME = 3145761;

/**
 * @var int
 */
const CURLINFO_CERTINFO = 4194338;

/**
 * @var int
 */
const CURLINFO_CONDITION_UNMET = 2097187;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-connect-time
 *
 * @var int
 */
const CURLINFO_CONNECT_TIME = 3145733;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-content-length-download
 *
 * @var int
 */
const CURLINFO_CONTENT_LENGTH_DOWNLOAD = 3145743;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-content-length-upload
 *
 * @var int
 */
const CURLINFO_CONTENT_LENGTH_UPLOAD = 3145744;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-content-type
 *
 * @var int
 */
const CURLINFO_CONTENT_TYPE = 1048594;

/**
 * @var int
 */
const CURLINFO_COOKIELIST = 4194332;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-effective-url
 *
 * @var int
 */
const CURLINFO_EFFECTIVE_URL = 1048577;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-filetime
 *
 * @var int
 */
const CURLINFO_FILETIME = 2097166;

/**
 * @var int
 */
const CURLINFO_FTP_ENTRY_PATH = 1048606;

/**
 * Available since PHP 5.1.3
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-header-out
 *
 * @var int
 */
const CURLINFO_HEADER_OUT = 2;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-header-size
 *
 * @var int
 */
const CURLINFO_HEADER_SIZE = 2097163;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-http-code
 *
 * @var int
 */
const CURLINFO_HTTP_CODE = 2097154;

/**
 * @var int
 */
const CURLINFO_HTTP_CONNECTCODE = 2097174;

/**
 * @var int
 */
const CURLINFO_HTTPAUTH_AVAIL = 2097175;

/**
 * @var int
 */
const CURLINFO_LASTONE = 49;

/**
 * Available since PHP 5.4.7
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-local-ip
 *
 * @var int
 */
const CURLINFO_LOCAL_IP = 1048617;

/**
 * Available since PHP 5.4.7
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-local-port
 *
 * @var int
 */
const CURLINFO_LOCAL_PORT = 2097194;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-namelookup-time
 *
 * @var int
 */
const CURLINFO_NAMELOOKUP_TIME = 3145732;

/**
 * @var int
 */
const CURLINFO_NUM_CONNECTS = 2097178;

/**
 * @var int
 */
const CURLINFO_OS_ERRNO = 2097177;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-pretransfer-time
 *
 * @var int
 */
const CURLINFO_PRETRANSFER_TIME = 3145734;

/**
 * Available since PHP 5.4.7
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-primary-ip
 *
 * @var int
 */
const CURLINFO_PRIMARY_IP = 1048608;

/**
 * Available since PHP 5.4.7
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-primary-port
 *
 * @var int
 */
const CURLINFO_PRIMARY_PORT = 2097192;

/**
 * Available since PHP 5.2.4
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-private
 *
 * @var int
 */
const CURLINFO_PRIVATE = 1048597;

/**
 * @var int
 */
const CURLINFO_PROXYAUTH_AVAIL = 2097176;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-redirect-count
 *
 * @var int
 */
const CURLINFO_REDIRECT_COUNT = 2097172;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-redirect-time
 *
 * @var int
 */
const CURLINFO_REDIRECT_TIME = 3145747;

/**
 * Available since PHP 5.3.7
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-redirect-url
 *
 * @var int
 */
const CURLINFO_REDIRECT_URL = 1048607;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-request-size
 *
 * @var int
 */
const CURLINFO_REQUEST_SIZE = 2097164;

/**
 * @var int
 */
const CURLINFO_RESPONSE_CODE = 2097154;

/**
 * @var int
 */
const CURLINFO_RTSP_CLIENT_CSEQ = 2097189;

/**
 * @var int
 */
const CURLINFO_RTSP_CSEQ_RECV = 2097191;

/**
 * @var int
 */
const CURLINFO_RTSP_SERVER_CSEQ = 2097190;

/**
 * @var int
 */
const CURLINFO_RTSP_SESSION_ID = 1048612;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-size-download
 *
 * @var int
 */
const CURLINFO_SIZE_DOWNLOAD = 3145736;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-size-upload
 *
 * @var int
 */
const CURLINFO_SIZE_UPLOAD = 3145735;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-speed-download
 *
 * @var int
 */
const CURLINFO_SPEED_DOWNLOAD = 3145737;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-speed-upload
 *
 * @var int
 */
const CURLINFO_SPEED_UPLOAD = 3145738;

/**
 * @var int
 */
const CURLINFO_SSL_ENGINES = 4194331;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-ssl-verifyresult
 *
 * @var int
 */
const CURLINFO_SSL_VERIFYRESULT = 2097165;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-starttransfer-time
 *
 * @var int
 */
const CURLINFO_STARTTRANSFER_TIME = 3145745;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlinfo-total-time
 *
 * @var int
 */
const CURLINFO_TOTAL_TIME = 3145731;

/**
 * @var int
 */
const CURLM_ADDED_ALREADY = 7;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlm-bad-easy-handle
 *
 * @var int
 */
const CURLM_BAD_EASY_HANDLE = 2;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlm-bad-handle
 *
 * @var int
 */
const CURLM_BAD_HANDLE = 1;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlm-call-multi-perform
 *
 * @var int
 */
const CURLM_CALL_MULTI_PERFORM = -1;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlm-internal-error
 *
 * @var int
 */
const CURLM_INTERNAL_ERROR = 4;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlm-ok
 *
 * @var int
 */
const CURLM_OK = 0;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlm-out-of-memory
 *
 * @var int
 */
const CURLM_OUT_OF_MEMORY = 3;

/**
 * Available since PHP 7.0.7 and cURL 7.30.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlmopt-chunk-length-penalty-size
 *
 * @var int
 */
const CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE = 30010;

/**
 * Available since PHP 7.0.7 and cURL 7.30.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlmopt-content-length-penalty-size
 *
 * @var int
 */
const CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE = 30009;

/**
 * Available since PHP 7.0.7 and cURL 7.30.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlmopt-max-host-connections
 *
 * @var int
 */
const CURLMOPT_MAX_HOST_CONNECTIONS = 7;

/**
 * Available since PHP 7.0.7 and cURL 7.30.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlmopt-max-pipeline-length
 *
 * @var int
 */
const CURLMOPT_MAX_PIPELINE_LENGTH = 8;

/**
 * Available since PHP 7.0.7 and cURL 7.30.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlmopt-max-total-connections
 *
 * @var int
 */
const CURLMOPT_MAX_TOTAL_CONNECTIONS = 13;

/**
 * Available since PHP 5.5.0 and cURL 7.16.3.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlmopt-maxconnects
 *
 * @var int
 */
const CURLMOPT_MAXCONNECTS = 6;

/**
 * Available since PHP 5.5.0 and cURL 7.16.0.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlmopt-pipelining
 *
 * @var int
 */
const CURLMOPT_PIPELINING = 3;

/**
 * Available since PHP 7.1.0 and cURL 7.44.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlmopt-pushfunction
 *
 * @var int
 */
const CURLMOPT_PUSHFUNCTION = 20014;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlmsg-done
 *
 * @var int
 */
const CURLMSG_DONE = 1;

/**
 * @var int
 */
const CURLOPT_ACCEPT_ENCODING = 10102;

/**
 * @var int
 */
const CURLOPT_ACCEPTTIMEOUT_MS = 212;

/**
 * @var int
 */
const CURLOPT_ADDRESS_SCOPE = 171;

/**
 * @var int
 */
const CURLOPT_APPEND = 50;

/**
 * Available since PHP 5.1.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-autoreferer
 *
 * @var int
 */
const CURLOPT_AUTOREFERER = 58;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-binarytransfer
 *
 * @var int
 */
const CURLOPT_BINARYTRANSFER = 19914;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-buffersize
 *
 * @var int
 */
const CURLOPT_BUFFERSIZE = 98;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-cainfo
 *
 * @var int
 */
const CURLOPT_CAINFO = 10065;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-capath
 *
 * @var int
 */
const CURLOPT_CAPATH = 10097;

/**
 * @var int
 */
const CURLOPT_CERTINFO = 172;

/**
 * @var int
 */
const CURLOPT_CONNECT_ONLY = 141;

/**
 * Available since PHP 7.0.7 and cURL 7.49.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-connect-to
 *
 * @var int
 */
const CURLOPT_CONNECT_TO = 10243;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-connecttimeout
 *
 * @var int
 */
const CURLOPT_CONNECTTIMEOUT = 78;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-connecttimeout-ms
 *
 * @var int
 */
const CURLOPT_CONNECTTIMEOUT_MS = 156;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-cookie
 *
 * @var int
 */
const CURLOPT_COOKIE = 10022;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-cookiefile
 *
 * @var int
 */
const CURLOPT_COOKIEFILE = 10031;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-cookiejar
 *
 * @var int
 */
const CURLOPT_COOKIEJAR = 10082;

/**
 * @var int
 */
const CURLOPT_COOKIELIST = 10135;

/**
 * Available since PHP 5.1.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-cookiesession
 *
 * @var int
 */
const CURLOPT_COOKIESESSION = 96;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-crlf
 *
 * @var int
 */
const CURLOPT_CRLF = 27;

/**
 * @var int
 */
const CURLOPT_CRLFILE = 10169;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-customrequest
 *
 * @var int
 */
const CURLOPT_CUSTOMREQUEST = 10036;

/**
 * Available since PHP 7.0.7 and cURL 7.45.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-default-protocol
 *
 * @var int
 */
const CURLOPT_DEFAULT_PROTOCOL = 10238;

/**
 * @var int
 */
const CURLOPT_DIRLISTONLY = 48;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-dns-cache-timeout
 *
 * @var int
 */
const CURLOPT_DNS_CACHE_TIMEOUT = 92;

/**
 * Available since PHP 7.0.7 and cURL 7.33.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-dns-interface
 *
 * @var int
 */
const CURLOPT_DNS_INTERFACE = 10221;

/**
 * Available since PHP 7.0.7 and cURL 7.33.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-dns-local-ip4
 *
 * @var int
 */
const CURLOPT_DNS_LOCAL_IP4 = 10222;

/**
 * Available since PHP 7.0.7 and cURL 7.33.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-dns-local-ip6
 *
 * @var int
 */
const CURLOPT_DNS_LOCAL_IP6 = 10223;

/**
 * @var int
 */
const CURLOPT_DNS_SERVERS = 10211;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-dns-use-global-cache
 *
 * @var int
 */
const CURLOPT_DNS_USE_GLOBAL_CACHE = 91;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-egdsocket
 *
 * @var int
 */
const CURLOPT_EGDSOCKET = 10077;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-encoding
 *
 * @var int
 */
const CURLOPT_ENCODING = 10102;

/**
 * Available since PHP 7.0.7 and cURL 7.36.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-expect-100-timeout-ms
 *
 * @var int
 */
const CURLOPT_EXPECT_100_TIMEOUT_MS = 227;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-failonerror
 *
 * @var int
 */
const CURLOPT_FAILONERROR = 45;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-file
 *
 * @var int
 */
const CURLOPT_FILE = 10001;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-filetime
 *
 * @var int
 */
const CURLOPT_FILETIME = 69;

/**
 * @var int
 */
const CURLOPT_FNMATCH_FUNCTION = 20200;

/**
 * This constant is not available when open_basedir
 * or safe_mode are enabled.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-followlocation
 *
 * @var int
 */
const CURLOPT_FOLLOWLOCATION = 52;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-forbid-reuse
 *
 * @var int
 */
const CURLOPT_FORBID_REUSE = 75;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-fresh-connect
 *
 * @var int
 */
const CURLOPT_FRESH_CONNECT = 74;

/**
 * @var int
 */
const CURLOPT_FTP_ACCOUNT = 10134;

/**
 * @var int
 */
const CURLOPT_FTP_ALTERNATIVE_TO_USER = 10147;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-ftp-create-missing-dirs
 *
 * @var int
 */
const CURLOPT_FTP_CREATE_MISSING_DIRS = 110;

/**
 * @var int
 */
const CURLOPT_FTP_FILEMETHOD = 138;

/**
 * @var int
 */
const CURLOPT_FTP_RESPONSE_TIMEOUT = 112;

/**
 * @var int
 */
const CURLOPT_FTP_SKIP_PASV_IP = 137;

/**
 * Available since PHP 5.2.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-ftp-ssl
 *
 * @var int
 */
const CURLOPT_FTP_SSL = 119;

/**
 * @var int
 */
const CURLOPT_FTP_SSL_CCC = 154;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-ftp-use-eprt
 *
 * @var int
 */
const CURLOPT_FTP_USE_EPRT = 106;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-ftp-use-epsv
 *
 * @var int
 */
const CURLOPT_FTP_USE_EPSV = 85;

/**
 * @var int
 */
const CURLOPT_FTP_USE_PRET = 188;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-ftpappend
 *
 * @var int
 */
const CURLOPT_FTPAPPEND = 50;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-ftplistonly
 *
 * @var int
 */
const CURLOPT_FTPLISTONLY = 48;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-ftpport
 *
 * @var int
 */
const CURLOPT_FTPPORT = 10017;

/**
 * Available since PHP 5.1.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-ftpsslauth
 *
 * @var int
 */
const CURLOPT_FTPSSLAUTH = 129;

/**
 * @var int
 */
const CURLOPT_GSSAPI_DELEGATION = 210;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-header
 *
 * @var int
 */
const CURLOPT_HEADER = 42;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-headerfunction
 *
 * @var int
 */
const CURLOPT_HEADERFUNCTION = 20079;

/**
 * Available since PHP 7.0.7 and cURL 7.37.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-headeropt
 *
 * @var int
 */
const CURLOPT_HEADEROPT = 229;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-http200aliases
 *
 * @var int
 */
const CURLOPT_HTTP200ALIASES = 10104;

/**
 * @var int
 */
const CURLOPT_HTTP_CONTENT_DECODING = 158;

/**
 * @var int
 */
const CURLOPT_HTTP_TRANSFER_DECODING = 157;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-http-version
 *
 * @var int
 */
const CURLOPT_HTTP_VERSION = 84;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-httpauth
 *
 * @var int
 */
const CURLOPT_HTTPAUTH = 107;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-httpget
 *
 * @var int
 */
const CURLOPT_HTTPGET = 80;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-httpheader
 *
 * @var int
 */
const CURLOPT_HTTPHEADER = 10023;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-httpproxytunnel
 *
 * @var int
 */
const CURLOPT_HTTPPROXYTUNNEL = 61;

/**
 * @var int
 */
const CURLOPT_IGNORE_CONTENT_LENGTH = 136;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-infile
 *
 * @var int
 */
const CURLOPT_INFILE = 10009;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-infilesize
 *
 * @var int
 */
const CURLOPT_INFILESIZE = 14;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-interface
 *
 * @var int
 */
const CURLOPT_INTERFACE = 10062;

/**
 * @var int
 */
const CURLOPT_IPRESOLVE = 113;

/**
 * @var int
 */
const CURLOPT_ISSUERCERT = 10170;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-keypasswd
 *
 * @var int
 */
const CURLOPT_KEYPASSWD = 10026;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-krb4level
 *
 * @var int
 */
const CURLOPT_KRB4LEVEL = 10063;

/**
 * @var int
 */
const CURLOPT_KRBLEVEL = 10063;

/**
 * @var int
 */
const CURLOPT_LOCALPORT = 139;

/**
 * @var int
 */
const CURLOPT_LOCALPORTRANGE = 140;

/**
 * Available since PHP 7.0.7 and cURL 7.34.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-login-options
 *
 * @var int
 */
const CURLOPT_LOGIN_OPTIONS = 10224;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-low-speed-limit
 *
 * @var int
 */
const CURLOPT_LOW_SPEED_LIMIT = 19;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-low-speed-time
 *
 * @var int
 */
const CURLOPT_LOW_SPEED_TIME = 20;

/**
 * @var int
 */
const CURLOPT_MAIL_AUTH = 10217;

/**
 * @var int
 */
const CURLOPT_MAIL_FROM = 10186;

/**
 * @var int
 */
const CURLOPT_MAIL_RCPT = 10187;

/**
 * Available since PHP 5.4.0 and cURL 7.15.5
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-max-recv-speed-large
 *
 * @var int
 */
const CURLOPT_MAX_RECV_SPEED_LARGE = 30146;

/**
 * Available since PHP 5.4.0 and cURL 7.15.5
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-max-send-speed-large
 *
 * @var int
 */
const CURLOPT_MAX_SEND_SPEED_LARGE = 30145;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-maxconnects
 *
 * @var int
 */
const CURLOPT_MAXCONNECTS = 71;

/**
 * @var int
 */
const CURLOPT_MAXFILESIZE = 114;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-maxredirs
 *
 * @var int
 */
const CURLOPT_MAXREDIRS = 68;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-netrc
 *
 * @var int
 */
const CURLOPT_NETRC = 51;

/**
 * @var int
 */
const CURLOPT_NETRC_FILE = 10118;

/**
 * @var int
 */
const CURLOPT_NEW_DIRECTORY_PERMS = 160;

/**
 * @var int
 */
const CURLOPT_NEW_FILE_PERMS = 159;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-nobody
 *
 * @var int
 */
const CURLOPT_NOBODY = 44;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-noprogress
 *
 * @var int
 */
const CURLOPT_NOPROGRESS = 43;

/**
 * @var int
 */
const CURLOPT_NOPROXY = 10177;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-nosignal
 *
 * @var int
 */
const CURLOPT_NOSIGNAL = 99;

/**
 * @var int
 */
const CURLOPT_PASSWORD = 10174;

/**
 * Available since PHP 7.0.7 and cURL 7.42.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-path-as-is
 *
 * @var int
 */
const CURLOPT_PATH_AS_IS = 234;

/**
 * Available since PHP 7.0.7 and cURL 7.39.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-pinnedpublickey
 *
 * @var int
 */
const CURLOPT_PINNEDPUBLICKEY = 10230;

/**
 * Available since PHP 7.0.7 and cURL 7.43.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-pipewait
 *
 * @var int
 */
const CURLOPT_PIPEWAIT = 237;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-port
 *
 * @var int
 */
const CURLOPT_PORT = 3;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-post
 *
 * @var int
 */
const CURLOPT_POST = 47;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-postfields
 *
 * @var int
 */
const CURLOPT_POSTFIELDS = 10015;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-postquote
 *
 * @var int
 */
const CURLOPT_POSTQUOTE = 10039;

/**
 * @var int
 */
const CURLOPT_POSTREDIR = 161;

/**
 * @var int
 */
const CURLOPT_PREQUOTE = 10093;

/**
 * Available since PHP 5.2.4
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-private
 *
 * @var int
 */
const CURLOPT_PRIVATE = 10103;

/**
 * Available since PHP 5.3.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-progressfunction
 *
 * @var int
 */
const CURLOPT_PROGRESSFUNCTION = 20056;

/**
 * @var int
 */
const CURLOPT_PROTOCOLS = 181;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-proxy
 *
 * @var int
 */
const CURLOPT_PROXY = 10004;

/**
 * Available since PHP 7.0.7 and cURL 7.43.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-proxy-service-name
 *
 * @var int
 */
const CURLOPT_PROXY_SERVICE_NAME = 10235;

/**
 * @var int
 */
const CURLOPT_PROXY_TRANSFER_MODE = 166;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-proxyauth
 *
 * @var int
 */
const CURLOPT_PROXYAUTH = 111;

/**
 * Available since PHP 7.0.7 and cURL 7.37.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-proxyheader
 *
 * @var int
 */
const CURLOPT_PROXYHEADER = 10228;

/**
 * @var int
 */
const CURLOPT_PROXYPASSWORD = 10176;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-proxyport
 *
 * @var int
 */
const CURLOPT_PROXYPORT = 59;

/**
 * Available as of cURL 7.10.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-proxytype
 *
 * @var int
 */
const CURLOPT_PROXYTYPE = 101;

/**
 * @var int
 */
const CURLOPT_PROXYUSERNAME = 10175;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-proxyuserpwd
 *
 * @var int
 */
const CURLOPT_PROXYUSERPWD = 10006;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-put
 *
 * @var int
 */
const CURLOPT_PUT = 54;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-quote
 *
 * @var int
 */
const CURLOPT_QUOTE = 10028;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-random-file
 *
 * @var int
 */
const CURLOPT_RANDOM_FILE = 10076;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-range
 *
 * @var int
 */
const CURLOPT_RANGE = 10007;

/**
 * @var int
 */
const CURLOPT_READDATA = 10009;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-readfunction
 *
 * @var int
 */
const CURLOPT_READFUNCTION = 20012;

/**
 * @var int
 */
const CURLOPT_REDIR_PROTOCOLS = 182;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-referer
 *
 * @var int
 */
const CURLOPT_REFERER = 10016;

/**
 * @var int
 */
const CURLOPT_RESOLVE = 10203;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-resume-from
 *
 * @var int
 */
const CURLOPT_RESUME_FROM = 21;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-returntransfer
 *
 * @var int
 */
const CURLOPT_RETURNTRANSFER = 19913;

/**
 * @var int
 */
const CURLOPT_RTSP_CLIENT_CSEQ = 193;

/**
 * @var int
 */
const CURLOPT_RTSP_REQUEST = 189;

/**
 * @var int
 */
const CURLOPT_RTSP_SERVER_CSEQ = 194;

/**
 * @var int
 */
const CURLOPT_RTSP_SESSION_ID = 10190;

/**
 * @var int
 */
const CURLOPT_RTSP_STREAM_URI = 10191;

/**
 * @var int
 */
const CURLOPT_RTSP_TRANSPORT = 10192;

/**
 * @var int
 */
const CURLOPT_SAFE_UPLOAD = -1;

/**
 * Available since PHP 7.0.7 and cURL 7.31.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-sasl-ir
 *
 * @var int
 */
const CURLOPT_SASL_IR = 218;

/**
 * Available since PHP 7.0.7 and cURL 7.43.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-service-name
 *
 * @var int
 */
const CURLOPT_SERVICE_NAME = 10236;

/**
 * @var int
 */
const CURLOPT_SHARE = 10100;

/**
 * @var int
 */
const CURLOPT_SOCKS5_GSSAPI_NEC = 180;

/**
 * @var int
 */
const CURLOPT_SOCKS5_GSSAPI_SERVICE = 10179;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-ssh-auth-types
 *
 * @var int
 */
const CURLOPT_SSH_AUTH_TYPES = 151;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-ssh-host-public-key-md5
 *
 * @var int
 */
const CURLOPT_SSH_HOST_PUBLIC_KEY_MD5 = 10162;

/**
 * @var int
 */
const CURLOPT_SSH_KNOWNHOSTS = 10183;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-ssh-private-keyfile
 *
 * @var int
 */
const CURLOPT_SSH_PRIVATE_KEYFILE = 10153;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-ssh-public-keyfile
 *
 * @var int
 */
const CURLOPT_SSH_PUBLIC_KEYFILE = 10152;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-ssl-cipher-list
 *
 * @var int
 */
const CURLOPT_SSL_CIPHER_LIST = 10083;

/**
 * Available since PHP 7.0.7 and cURL 7.36.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-ssl-enable-alpn
 *
 * @var int
 */
const CURLOPT_SSL_ENABLE_ALPN = 226;

/**
 * Available since PHP 7.0.7 and cURL 7.36.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-ssl-enable-npn
 *
 * @var int
 */
const CURLOPT_SSL_ENABLE_NPN = 225;

/**
 * Available since PHP 7.0.7 and cURL 7.42.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-ssl-falsestart
 *
 * @var int
 */
const CURLOPT_SSL_FALSESTART = 233;

/**
 * Available since PHP 5.5.0 and cURL 7.25.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-ssl-options
 *
 * @var int
 */
const CURLOPT_SSL_OPTIONS = 216;

/**
 * @var int
 */
const CURLOPT_SSL_SESSIONID_CACHE = 150;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-ssl-verifyhost
 *
 * @var int
 */
const CURLOPT_SSL_VERIFYHOST = 81;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-ssl-verifypeer
 *
 * @var int
 */
const CURLOPT_SSL_VERIFYPEER = 64;

/**
 * Available since PHP 7.0.7 and cURL 7.41.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-verifystatus
 *
 * @var int
 */
const CURLOPT_SSL_VERIFYSTATUS = 232;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-sslcert
 *
 * @var int
 */
const CURLOPT_SSLCERT = 10025;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-sslcertpasswd
 *
 * @var int
 */
const CURLOPT_SSLCERTPASSWD = 10026;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-sslcerttype
 *
 * @var int
 */
const CURLOPT_SSLCERTTYPE = 10086;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-sslengine
 *
 * @var int
 */
const CURLOPT_SSLENGINE = 10089;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-sslengine-default
 *
 * @var int
 */
const CURLOPT_SSLENGINE_DEFAULT = 90;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-sslkey
 *
 * @var int
 */
const CURLOPT_SSLKEY = 10087;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-sslkeypasswd
 *
 * @var int
 */
const CURLOPT_SSLKEYPASSWD = 10026;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-sslkeytype
 *
 * @var int
 */
const CURLOPT_SSLKEYTYPE = 10088;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-sslversion
 *
 * @var int
 */
const CURLOPT_SSLVERSION = 32;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-stderr
 *
 * @var int
 */
const CURLOPT_STDERR = 10037;

/**
 * Available since PHP 7.0.7 and cURL 7.46.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-stream-weight
 *
 * @var int
 */
const CURLOPT_STREAM_WEIGHT = 239;

/**
 * Available since PHP 7.0.7 and cURL 7.49.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-tcp-fastopen
 *
 * @var int
 */
const CURLOPT_TCP_FASTOPEN = 244;

/**
 * @var int
 */
const CURLOPT_TCP_KEEPALIVE = 213;

/**
 * @var int
 */
const CURLOPT_TCP_KEEPIDLE = 214;

/**
 * @var int
 */
const CURLOPT_TCP_KEEPINTVL = 215;

/**
 * Available since PHP 5.2.1
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-tcp-nodelay
 *
 * @var int
 */
const CURLOPT_TCP_NODELAY = 121;

/**
 * @var int
 */
const CURLOPT_TELNETOPTIONS = 10070;

/**
 * @var int
 */
const CURLOPT_TFTP_BLKSIZE = 178;

/**
 * Available since PHP 7.0.7 and cURL 7.48.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-tftp-no-options
 *
 * @var int
 */
const CURLOPT_TFTP_NO_OPTIONS = 242;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-timecondition
 *
 * @var int
 */
const CURLOPT_TIMECONDITION = 33;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-timeout
 *
 * @var int
 */
const CURLOPT_TIMEOUT = 13;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-timeout-ms
 *
 * @var int
 */
const CURLOPT_TIMEOUT_MS = 155;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-timevalue
 *
 * @var int
 */
const CURLOPT_TIMEVALUE = 34;

/**
 * @var int
 */
const CURLOPT_TLSAUTH_PASSWORD = 10205;

/**
 * @var int
 */
const CURLOPT_TLSAUTH_TYPE = 10206;

/**
 * @var int
 */
const CURLOPT_TLSAUTH_USERNAME = 10204;

/**
 * @var int
 */
const CURLOPT_TRANSFER_ENCODING = 207;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-transfertext
 *
 * @var int
 */
const CURLOPT_TRANSFERTEXT = 53;

/**
 * Available since PHP 7.0.7 and cURL 7.40.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curloptunix-socket-path
 *
 * @var int
 */
const CURLOPT_UNIX_SOCKET_PATH = 10231;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-unrestricted-auth
 *
 * @var int
 */
const CURLOPT_UNRESTRICTED_AUTH = 105;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-upload
 *
 * @var int
 */
const CURLOPT_UPLOAD = 46;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-url
 *
 * @var int
 */
const CURLOPT_URL = 10002;

/**
 * @var int
 */
const CURLOPT_USE_SSL = 119;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-useragent
 *
 * @var int
 */
const CURLOPT_USERAGENT = 10018;

/**
 * Available since PHP 5.5.0 and cURL 7.19.1
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-username
 *
 * @var int
 */
const CURLOPT_USERNAME = 10173;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-userpwd
 *
 * @var int
 */
const CURLOPT_USERPWD = 10005;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-verbose
 *
 * @var int
 */
const CURLOPT_VERBOSE = 41;

/**
 * @var int
 */
const CURLOPT_WILDCARDMATCH = 197;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-writefunction
 *
 * @var int
 */
const CURLOPT_WRITEFUNCTION = 20011;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-writeheader
 *
 * @var int
 */
const CURLOPT_WRITEHEADER = 10029;

/**
 * Available since PHP 7.0.7 and cURL 7.33.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlopt-xoauth2-bearer
 *
 * @var int
 */
const CURLOPT_XOAUTH2_BEARER = 10220;

/**
 * Available since PHP 5.5.0 and cURL 7.18.0.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlpause-all
 *
 * @var int
 */
const CURLPAUSE_ALL = 5;

/**
 * Available since PHP 5.5.0 and cURL 7.18.0.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlpause-cont
 *
 * @var int
 */
const CURLPAUSE_CONT = 0;

/**
 * Available since PHP 5.5.0 and cURL 7.18.0.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlpause-recv
 *
 * @var int
 */
const CURLPAUSE_RECV = 1;

/**
 * Available since PHP 5.5.0 and cURL 7.18.0.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlpause-recv-cont
 *
 * @var int
 */
const CURLPAUSE_RECV_CONT = 0;

/**
 * Available since PHP 5.5.0 and cURL 7.18.0.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlpause-send
 *
 * @var int
 */
const CURLPAUSE_SEND = 4;

/**
 * Available since PHP 5.5.0 and cURL 7.18.0.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlpause-send-cont
 *
 * @var int
 */
const CURLPAUSE_SEND_CONT = 0;

/**
 * Available since PHP 7.0.0 and cURL 7.43.0.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlpipe-http1
 *
 * @var int
 */
const CURLPIPE_HTTP1 = 1;

/**
 * Available since PHP 7.0.0 and cURL 7.43.0.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlpipe-multiplex
 *
 * @var int
 */
const CURLPIPE_MULTIPLEX = 2;

/**
 * Available since PHP 7.0.0 and cURL 7.43.0.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlpipe-nothing
 *
 * @var int
 */
const CURLPIPE_NOTHING = 0;

/**
 * @var int
 */
const CURLPROTO_ALL = -1;

/**
 * @var int
 */
const CURLPROTO_DICT = 512;

/**
 * @var int
 */
const CURLPROTO_FILE = 1024;

/**
 * @var int
 */
const CURLPROTO_FTP = 4;

/**
 * @var int
 */
const CURLPROTO_FTPS = 8;

/**
 * @var int
 */
const CURLPROTO_GOPHER = 33554432;

/**
 * @var int
 */
const CURLPROTO_HTTP = 1;

/**
 * @var int
 */
const CURLPROTO_HTTPS = 2;

/**
 * @var int
 */
const CURLPROTO_IMAP = 4096;

/**
 * @var int
 */
const CURLPROTO_IMAPS = 8192;

/**
 * @var int
 */
const CURLPROTO_LDAP = 128;

/**
 * @var int
 */
const CURLPROTO_LDAPS = 256;

/**
 * @var int
 */
const CURLPROTO_POP3 = 16384;

/**
 * @var int
 */
const CURLPROTO_POP3S = 32768;

/**
 * @var int
 */
const CURLPROTO_RTMP = 524288;

/**
 * @var int
 */
const CURLPROTO_RTMPE = 2097152;

/**
 * @var int
 */
const CURLPROTO_RTMPS = 8388608;

/**
 * @var int
 */
const CURLPROTO_RTMPT = 1048576;

/**
 * @var int
 */
const CURLPROTO_RTMPTE = 4194304;

/**
 * @var int
 */
const CURLPROTO_RTMPTS = 16777216;

/**
 * @var int
 */
const CURLPROTO_RTSP = 262144;

/**
 * @var int
 */
const CURLPROTO_SCP = 16;

/**
 * @var int
 */
const CURLPROTO_SFTP = 32;

/**
 * Available since PHP 7.0.7 and cURL 7.40.0.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlproto-smb
 *
 * @var int
 */
const CURLPROTO_SMB = 67108864;

/**
 * Available since PHP 7.0.7 and cURL 7.40.0.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlproto-smbs
 *
 * @var int
 */
const CURLPROTO_SMBS = 134217728;

/**
 * @var int
 */
const CURLPROTO_SMTP = 65536;

/**
 * @var int
 */
const CURLPROTO_SMTPS = 131072;

/**
 * @var int
 */
const CURLPROTO_TELNET = 64;

/**
 * @var int
 */
const CURLPROTO_TFTP = 2048;

/**
 * Available since cURL 7.10.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlproxy-http
 *
 * @var int
 */
const CURLPROXY_HTTP = 0;

/**
 * Available since PHP 7.0.7 and cURL 7.19.3
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlproxy-http-1-0
 *
 * @var int
 */
const CURLPROXY_HTTP_1_0 = 1;

/**
 * Available since PHP 5.2.10 and cURL 7.10.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlproxy-socks4
 *
 * @var int
 */
const CURLPROXY_SOCKS4 = 4;

/**
 * Available since PHP 5.5.23 and PHP 5.6.7 and cURL 7.18.0.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlproxy-socks4a
 *
 * @var int
 */
const CURLPROXY_SOCKS4A = 6;

/**
 * Available since cURL 7.10.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlproxy-socks5
 *
 * @var int
 */
const CURLPROXY_SOCKS5 = 5;

/**
 * Available since PHP 5.5.23 and PHP 5.6.7 and cURL 7.18.0.
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlproxy-socks5-hostname
 *
 * @var int
 */
const CURLPROXY_SOCKS5_HOSTNAME = 7;

/**
 * @var int
 */
const CURLSHOPT_NONE = 0;

/**
 * @var int
 */
const CURLSHOPT_SHARE = 1;

/**
 * @var int
 */
const CURLSHOPT_UNSHARE = 2;

/**
 * Available since PHP 7.0.7 and cURL 7.28.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlssh-auth-agent
 *
 * @var int
 */
const CURLSSH_AUTH_AGENT = 16;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlssh-auth-any
 *
 * @var int
 */
const CURLSSH_AUTH_ANY = -1;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlssh-auth-default
 *
 * @var int
 */
const CURLSSH_AUTH_DEFAULT = -1;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlssh-auth-host
 *
 * @var int
 */
const CURLSSH_AUTH_HOST = 4;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlssh-auth-keyboard
 *
 * @var int
 */
const CURLSSH_AUTH_KEYBOARD = 8;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlssh-auth-none
 *
 * @var int
 */
const CURLSSH_AUTH_NONE = 0;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlssh-auth-password
 *
 * @var int
 */
const CURLSSH_AUTH_PASSWORD = 2;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlssh-auth-publickey
 *
 * @var int
 */
const CURLSSH_AUTH_PUBLICKEY = 1;

/**
 * Available since PHP 5.5.0 and cURL 7.25.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlsslopt-allow-beast
 *
 * @var int
 */
const CURLSSLOPT_ALLOW_BEAST = 1;

/**
 * Available since PHP 7.0.7 and cURL 7.44.0
 *
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlsslopt-no-revoke
 *
 * @var int
 */
const CURLSSLOPT_NO_REVOKE = 2;

/**
 * @var int
 */
const CURLUSESSL_ALL = 3;

/**
 * @var int
 */
const CURLUSESSL_CONTROL = 2;

/**
 * @var int
 */
const CURLUSESSL_NONE = 0;

/**
 * @var int
 */
const CURLUSESSL_TRY = 1;

/**
 * @link http://www.php.net/manual/en/curl.constants.php#constant.curlversion-now
 *
 * @var int
 */
const CURLVERSION_NOW = 3;

/**
 * <code>CURLFile</code> should be used to upload a file with
 * <code>CURLOPT_POSTFIELDS</code>.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.curlfile.php
 */
class CURLFile
{
    /**
     * Create a CURLFile object
     *
     * @param mixed $filename
     * @param mixed|null $mimetype
     * @param mixed|null $postname
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/curlfile.construct.php
     */
    public function __construct($filename, $mimetype = null, $postname = null)
    {
    }

    /**
     * Unserialization handler
     *
     * @return void
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/curlfile.wakeup.php
     */
    public function __wakeup()
    {
    }

    /**
     * Get file name
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/curlfile.getfilename.php
     */
    public function getFilename(): string
    {
    }

    /**
     * Get MIME type
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/curlfile.getmimetype.php
     */
    public function getMimeType(): string
    {
    }

    /**
     * Get file name for POST
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/curlfile.getpostfilename.php
     */
    public function getPostFilename(): string
    {
    }

    /**
     * Set MIME type
     *
     * @param mixed $name
     *
     * @return void
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/curlfile.setmimetype.php
     */
    public function setMimeType($name)
    {
    }

    /**
     * Set file name for POST
     *
     * @param mixed $name
     *
     * @return void
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/curlfile.setpostfilename.php
     */
    public function setPostFilename($name)
    {
    }
}

/**
 * Close a cURL session
 *
 * @param mixed $ch
 *
 * @return void
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-close.php
 */
function curl_close($ch)
{
}

/**
 * Copy a cURL handle along with all of its preferences
 *
 * @param mixed $ch
 *
 * @return resource
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-copy-handle.php
 */
function curl_copy_handle($ch)
{
}

/**
 * Return the last error number
 *
 * @param mixed $ch
 *
 * @return int
 *
 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-errno.php
 */
function curl_errno($ch): int
{
}

/**
 * Return a string containing the last error for the current session
 *
 * @param mixed $ch
 *
 * @return string
 *
 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-error.php
 */
function curl_error($ch): string
{
}

/**
 * URL encodes the given string
 *
 * @param mixed $ch
 * @param mixed $str
 *
 * @return string
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-escape.php
 */
function curl_escape($ch, $str): string
{
}

/**
 * Perform a cURL session
 *
 * @param mixed $ch
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-exec.php
 */
function curl_exec($ch)
{
}

/**
 * Create a CURLFile object
 *
 * @param mixed $filename
 * @param mixed|null $mimetype
 * @param mixed|null $postname
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/curlfile.construct.php
 */
function curl_file_create($filename, $mimetype = null, $postname = null)
{
}

/**
 * Get information regarding a specific transfer
 *
 * @param mixed $ch
 * @param mixed|null $option
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-getinfo.php
 */
function curl_getinfo($ch, $option = null)
{
}

/**
 * Initialize a cURL session
 *
 * @param mixed|null $url
 *
 * @return resource
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-init.php
 */
function curl_init($url = null)
{
}

/**
 * Add a normal cURL handle to a cURL multi handle
 *
 * @param mixed $mh
 * @param mixed $ch
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-multi-add-handle.php
 */
function curl_multi_add_handle($mh, $ch): int
{
}

/**
 * Close a set of cURL handles
 *
 * @param mixed $mh
 *
 * @return void
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-multi-close.php
 */
function curl_multi_close($mh)
{
}

/**
 * Return the last multi curl error number
 *
 * @param mixed $mh
 *
 * @return int
 *
 * @since PHP 7 >= 7.1.0
 *
 * @link http://www.php.net/manual/en/function.curl-multi-errno.php
 */
function curl_multi_errno($mh): int
{
}

/**
 * Run the sub-connections of the current cURL handle
 *
 * @param mixed $mh
 * @param mixed|null $still_running
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-multi-exec.php
 */
function curl_multi_exec($mh, &$still_running = null): int
{
}

/**
 * Return the content of a cURL handle if <code>CURLOPT_RETURNTRANSFER</code> is set
 *
 * @param mixed $ch
 *
 * @return string
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-multi-getcontent.php
 */
function curl_multi_getcontent($ch): string
{
}

/**
 * Get information about the current transfers
 *
 * @param mixed $mh
 * @param mixed|null $msgs_in_queue
 *
 * @return array
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-multi-info-read.php
 */
function curl_multi_info_read($mh, &$msgs_in_queue = null): array
{
}

/**
 * Returns a new cURL multi handle
 *
 * @return resource
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-multi-init.php
 */
function curl_multi_init()
{
}

/**
 * Remove a multi handle from a set of cURL handles
 *
 * @param mixed $mh
 * @param mixed $ch
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-multi-remove-handle.php
 */
function curl_multi_remove_handle($mh, $ch): int
{
}

/**
 * Wait for activity on any curl_multi connection
 *
 * @param mixed $mh
 * @param mixed|null $timeout
 *
 * @return int
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-multi-select.php
 */
function curl_multi_select($mh, $timeout = null): int
{
}

/**
 * Set an option for the cURL multi handle
 *
 * @param mixed $sh
 * @param mixed $option
 * @param mixed $value
 *
 * @return bool
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-multi-setopt.php
 */
function curl_multi_setopt($sh, $option, $value): bool
{
}

/**
 * Return string describing error code
 *
 * @param mixed $errornum
 *
 * @return string
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-multi-strerror.php
 */
function curl_multi_strerror($errornum): string
{
}

/**
 * Pause and unpause a connection
 *
 * @param mixed $ch
 * @param mixed $bitmask
 *
 * @return int
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-pause.php
 */
function curl_pause($ch, $bitmask): int
{
}

/**
 * Reset all options of a libcurl session handle
 *
 * @param mixed $ch
 *
 * @return void
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-reset.php
 */
function curl_reset($ch)
{
}

/**
 * Set an option for a cURL transfer
 *
 * @param mixed $ch
 * @param mixed $option
 * @param mixed $value
 *
 * @return bool
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-setopt.php
 */
function curl_setopt($ch, $option, $value): bool
{
}

/**
 * Set multiple options for a cURL transfer
 *
 * @param mixed $ch
 * @param array[] $options
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.3, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-setopt-array.php
 */
function curl_setopt_array($ch, $options): bool
{
}

/**
 * Close a cURL share handle
 *
 * @param mixed $sh
 *
 * @return void
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-share-close.php
 */
function curl_share_close($sh)
{
}

/**
 * Return the last share curl error number
 *
 * @param mixed $sh
 *
 * @return int
 *
 * @since PHP 7 >= 7.1.0
 *
 * @link http://www.php.net/manual/en/function.curl-share-errno.php
 */
function curl_share_errno($sh): int
{
}

/**
 * Initialize a cURL share handle
 *
 * @return resource
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-share-init.php
 */
function curl_share_init()
{
}

/**
 * Set an option for a cURL share handle
 *
 * @param mixed $sh
 * @param mixed $option
 * @param mixed $value
 *
 * @return bool
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-share-setopt.php
 */
function curl_share_setopt($sh, $option, $value): bool
{
}

/**
 * Return string describing the given error code
 *
 * @param mixed $errornum
 *
 * @return string
 *
 * @since PHP 7 >= 7.1.0
 *
 * @link http://www.php.net/manual/en/function.curl-share-strerror.php
 */
function curl_share_strerror($errornum): string
{
}

/**
 * Return string describing the given error code
 *
 * @param mixed $errornum
 *
 * @return string
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-strerror.php
 */
function curl_strerror($errornum): string
{
}

/**
 * Decodes the given URL encoded string
 *
 * @param mixed $ch
 * @param mixed $str
 *
 * @return string
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-unescape.php
 */
function curl_unescape($ch, $str): string
{
}

/**
 * Gets cURL version information
 *
 * @param mixed|null $version
 *
 * @return array
 *
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.curl-version.php
 */
function curl_version($version = null): array
{
}
