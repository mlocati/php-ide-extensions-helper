<?php
// Start of extension: sockets
// - parsed on POSIX with PHP 7.2.3 (extension version 7.2.3)

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.af-inet
 *
 * @var int
 */
const AF_INET = 2;

/**
 * Only available if compiled with IPv6 support.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.af-inet6
 *
 * @var int
 */
const AF_INET6 = 10;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.af-unix
 *
 * @var int
 */
const AF_UNIX = 1;

/**
 * @var int
 */
const AI_ADDRCONFIG = 32;

/**
 * @var int
 */
const AI_ALL = 16;

/**
 * @var int
 */
const AI_CANONIDN = 128;

/**
 * @var int
 */
const AI_CANONNAME = 2;

/**
 * @var int
 */
const AI_IDN = 64;

/**
 * @var int
 */
const AI_IDN_ALLOW_UNASSIGNED = 256;

/**
 * @var int
 */
const AI_IDN_USE_STD3_ASCII_RULES = 512;

/**
 * @var int
 */
const AI_NUMERICHOST = 4;

/**
 * @var int
 */
const AI_NUMERICSERV = 1024;

/**
 * @var int
 */
const AI_PASSIVE = 1;

/**
 * @var int
 */
const AI_V4MAPPED = 8;

/**
 * @var int
 */
const IP_MULTICAST_IF = 32;

/**
 * @var int
 */
const IP_MULTICAST_LOOP = 34;

/**
 * @var int
 */
const IP_MULTICAST_TTL = 33;

/**
 * @var int
 */
const IPPROTO_IP = 0;

/**
 * @var int
 */
const IPPROTO_IPV6 = 41;

/**
 * @var int
 */
const IPV6_HOPLIMIT = 52;

/**
 * @var int
 */
const IPV6_MULTICAST_HOPS = 18;

/**
 * @var int
 */
const IPV6_MULTICAST_IF = 17;

/**
 * @var int
 */
const IPV6_MULTICAST_LOOP = 19;

/**
 * @var int
 */
const IPV6_PKTINFO = 50;

/**
 * @var int
 */
const IPV6_RECVHOPLIMIT = 51;

/**
 * @var int
 */
const IPV6_RECVPKTINFO = 49;

/**
 * @var int
 */
const IPV6_RECVTCLASS = 66;

/**
 * @var int
 */
const IPV6_TCLASS = 67;

/**
 * @var int
 */
const IPV6_UNICAST_HOPS = 16;

/**
 * @var int
 */
const IPV6_V6ONLY = 26;

/**
 * @var int
 */
const MCAST_BLOCK_SOURCE = 43;

/**
 * @var int
 */
const MCAST_JOIN_GROUP = 42;

/**
 * @var int
 */
const MCAST_JOIN_SOURCE_GROUP = 46;

/**
 * @var int
 */
const MCAST_LEAVE_GROUP = 45;

/**
 * @var int
 */
const MCAST_LEAVE_SOURCE_GROUP = 47;

/**
 * @var int
 */
const MCAST_UNBLOCK_SOURCE = 44;

/**
 * @var int
 */
const MSG_CMSG_CLOEXEC = 1073741824;

/**
 * @var int
 */
const MSG_CONFIRM = 2048;

/**
 * @var int
 */
const MSG_CTRUNC = 8;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.msg-dontroute
 *
 * @var int
 */
const MSG_DONTROUTE = 4;

/**
 * @var int
 */
const MSG_DONTWAIT = 64;

/**
 * Not available on Windows platforms.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.msg-eof
 *
 * @var int
 */
const MSG_EOF = 512;

/**
 * Not available on Windows platforms.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.msg-eor
 *
 * @var int
 */
const MSG_EOR = 128;

/**
 * @var int
 */
const MSG_ERRQUEUE = 8192;

/**
 * @var int
 */
const MSG_MORE = 32768;

/**
 * @var int
 */
const MSG_NOSIGNAL = 16384;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.msg-oob
 *
 * @var int
 */
const MSG_OOB = 1;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.msg-peek
 *
 * @var int
 */
const MSG_PEEK = 2;

/**
 * @var int
 */
const MSG_TRUNC = 32;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.msg-waitall
 *
 * @var int
 */
const MSG_WAITALL = 256;

/**
 * @var int
 */
const MSG_WAITFORONE = 65536;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.php-binary-read
 *
 * @var int
 */
const PHP_BINARY_READ = 2;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.php-normal-read
 *
 * @var int
 */
const PHP_NORMAL_READ = 1;

/**
 * @var int
 */
const SCM_CREDENTIALS = 2;

/**
 * @var int
 */
const SCM_RIGHTS = 1;

/**
 * @var int
 */
const SO_BINDTODEVICE = 25;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.so-broadcast
 *
 * @var int
 */
const SO_BROADCAST = 6;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.so-debug
 *
 * @var int
 */
const SO_DEBUG = 1;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.so-dontroute
 *
 * @var int
 */
const SO_DONTROUTE = 5;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.so-error
 *
 * @var int
 */
const SO_ERROR = 4;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.so-keepalive
 *
 * @var int
 */
const SO_KEEPALIVE = 9;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.so-linger
 *
 * @var int
 */
const SO_LINGER = 13;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.so-oobinline
 *
 * @var int
 */
const SO_OOBINLINE = 10;

/**
 * @var int
 */
const SO_PASSCRED = 16;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.so-rcvbuf
 *
 * @var int
 */
const SO_RCVBUF = 8;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.so-rcvlowat
 *
 * @var int
 */
const SO_RCVLOWAT = 18;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.so-rcvtimeo
 *
 * @var int
 */
const SO_RCVTIMEO = 20;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.so-reuseaddr
 *
 * @var int
 */
const SO_REUSEADDR = 2;

/**
 * This constant is only available in PHP 5.4.10 or later on platforms that
 *      support the <code>SO_REUSEPORT</code> socket option: this
 *      includes Mac OS X and FreeBSD, but does not include Linux or Windows.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.so-reuseport
 *
 * @var int
 */
const SO_REUSEPORT = 15;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.so-sndbuf
 *
 * @var int
 */
const SO_SNDBUF = 7;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.so-sndlowat
 *
 * @var int
 */
const SO_SNDLOWAT = 19;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.so-sndtimeo
 *
 * @var int
 */
const SO_SNDTIMEO = 21;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.so-type
 *
 * @var int
 */
const SO_TYPE = 3;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.sock-dgram
 *
 * @var int
 */
const SOCK_DGRAM = 2;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.sock-raw
 *
 * @var int
 */
const SOCK_RAW = 3;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.sock-rdm
 *
 * @var int
 */
const SOCK_RDM = 4;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.sock-seqpacket
 *
 * @var int
 */
const SOCK_SEQPACKET = 5;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.sock-stream
 *
 * @var int
 */
const SOCK_STREAM = 1;

/**
 * Arg list too long.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-e2big
 *
 * @var int
 */
const SOCKET_E2BIG = 7;

/**
 * Permission denied.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eacces
 *
 * @var int
 */
const SOCKET_EACCES = 13;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eaddrinuse
 *
 * @var int
 */
const SOCKET_EADDRINUSE = 98;

/**
 * Cannot assign requested address.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eaddrnotavail
 *
 * @var int
 */
const SOCKET_EADDRNOTAVAIL = 99;

/**
 * Advertise error.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eadv
 *
 * @var int
 */
const SOCKET_EADV = 68;

/**
 * Address family not supported by protocol.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eafnosupport
 *
 * @var int
 */
const SOCKET_EAFNOSUPPORT = 97;

/**
 * Try again.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eagain
 *
 * @var int
 */
const SOCKET_EAGAIN = 11;

/**
 * Operation already in progress.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-ealready
 *
 * @var int
 */
const SOCKET_EALREADY = 114;

/**
 * Invalid exchange.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-ebade
 *
 * @var int
 */
const SOCKET_EBADE = 52;

/**
 * Bad file number.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-ebadf
 *
 * @var int
 */
const SOCKET_EBADF = 9;

/**
 * File descriptor in bad state.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-ebadfd
 *
 * @var int
 */
const SOCKET_EBADFD = 77;

/**
 * Not a data message.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-ebadmsg
 *
 * @var int
 */
const SOCKET_EBADMSG = 74;

/**
 * Invalid request descriptor.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-ebadr
 *
 * @var int
 */
const SOCKET_EBADR = 53;

/**
 * Invalid request code.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-ebadrqc
 *
 * @var int
 */
const SOCKET_EBADRQC = 56;

/**
 * Invalid slot.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-ebadslt
 *
 * @var int
 */
const SOCKET_EBADSLT = 57;

/**
 * Device or resource busy.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-ebusy
 *
 * @var int
 */
const SOCKET_EBUSY = 16;

/**
 * Channel number out of range.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-echrng
 *
 * @var int
 */
const SOCKET_ECHRNG = 44;

/**
 * Communication error on send.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-ecomm
 *
 * @var int
 */
const SOCKET_ECOMM = 70;

/**
 * Software caused connection abort.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-econnaborted
 *
 * @var int
 */
const SOCKET_ECONNABORTED = 103;

/**
 * Connection refused.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-econnrefused
 *
 * @var int
 */
const SOCKET_ECONNREFUSED = 111;

/**
 * Connection reset by peer.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-econnreset
 *
 * @var int
 */
const SOCKET_ECONNRESET = 104;

/**
 * Destination address required.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-edestaddrreq
 *
 * @var int
 */
const SOCKET_EDESTADDRREQ = 89;

/**
 * Quota exceeded.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-edquot
 *
 * @var int
 */
const SOCKET_EDQUOT = 122;

/**
 * File exists.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eexist
 *
 * @var int
 */
const SOCKET_EEXIST = 17;

/**
 * Bad address.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-efault
 *
 * @var int
 */
const SOCKET_EFAULT = 14;

/**
 * Host is down.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-ehostdown
 *
 * @var int
 */
const SOCKET_EHOSTDOWN = 112;

/**
 * No route to host.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-ehostunreach
 *
 * @var int
 */
const SOCKET_EHOSTUNREACH = 113;

/**
 * Identifier removed.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eidrm
 *
 * @var int
 */
const SOCKET_EIDRM = 43;

/**
 * Operation now in progress.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-einprogress
 *
 * @var int
 */
const SOCKET_EINPROGRESS = 115;

/**
 * Interrupted system call.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eintr
 *
 * @var int
 */
const SOCKET_EINTR = 4;

/**
 * Invalid argument.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-einval
 *
 * @var int
 */
const SOCKET_EINVAL = 22;

/**
 * I/O error.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eio
 *
 * @var int
 */
const SOCKET_EIO = 5;

/**
 * Transport endpoint is already connected.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eisconn
 *
 * @var int
 */
const SOCKET_EISCONN = 106;

/**
 * Is a directory.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eisdir
 *
 * @var int
 */
const SOCKET_EISDIR = 21;

/**
 * Is a named type file.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eisnam
 *
 * @var int
 */
const SOCKET_EISNAM = 120;

/**
 * Level 2 halted.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-el2hlt
 *
 * @var int
 */
const SOCKET_EL2HLT = 51;

/**
 * Level 2 not synchronized.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-el2nsync
 *
 * @var int
 */
const SOCKET_EL2NSYNC = 45;

/**
 * Level 3 halted.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-el3hlt
 *
 * @var int
 */
const SOCKET_EL3HLT = 46;

/**
 * Level 3 reset.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-el3rst
 *
 * @var int
 */
const SOCKET_EL3RST = 47;

/**
 * Link number out of range.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-elnrng
 *
 * @var int
 */
const SOCKET_ELNRNG = 48;

/**
 * Too many symbolic links encountered.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eloop
 *
 * @var int
 */
const SOCKET_ELOOP = 40;

/**
 * Wrong medium type.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-emediumtype
 *
 * @var int
 */
const SOCKET_EMEDIUMTYPE = 124;

/**
 * Too many open files.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-emfile
 *
 * @var int
 */
const SOCKET_EMFILE = 24;

/**
 * Too many links.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-emlink
 *
 * @var int
 */
const SOCKET_EMLINK = 31;

/**
 * Message too long.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-emsgsize
 *
 * @var int
 */
const SOCKET_EMSGSIZE = 90;

/**
 * Multihop attempted.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-emultihop
 *
 * @var int
 */
const SOCKET_EMULTIHOP = 72;

/**
 * File name too long.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enametoolong
 *
 * @var int
 */
const SOCKET_ENAMETOOLONG = 36;

/**
 * Network is down.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enetdown
 *
 * @var int
 */
const SOCKET_ENETDOWN = 100;

/**
 * Network dropped connection because of reset.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enetreset
 *
 * @var int
 */
const SOCKET_ENETRESET = 102;

/**
 * Network is unreachable.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enetunreach
 *
 * @var int
 */
const SOCKET_ENETUNREACH = 101;

/**
 * File table overflow.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enfile
 *
 * @var int
 */
const SOCKET_ENFILE = 23;

/**
 * No anode.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enoano
 *
 * @var int
 */
const SOCKET_ENOANO = 55;

/**
 * No buffer space available.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enobufs
 *
 * @var int
 */
const SOCKET_ENOBUFS = 105;

/**
 * No CSI structure available.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enocsi
 *
 * @var int
 */
const SOCKET_ENOCSI = 50;

/**
 * No data available.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enodata
 *
 * @var int
 */
const SOCKET_ENODATA = 61;

/**
 * No such device.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enodev
 *
 * @var int
 */
const SOCKET_ENODEV = 19;

/**
 * No such file or directory.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enoent
 *
 * @var int
 */
const SOCKET_ENOENT = 2;

/**
 * No record locks available.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enolck
 *
 * @var int
 */
const SOCKET_ENOLCK = 37;

/**
 * Link has been severed.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enolink
 *
 * @var int
 */
const SOCKET_ENOLINK = 67;

/**
 * No medium found.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enomedium
 *
 * @var int
 */
const SOCKET_ENOMEDIUM = 123;

/**
 * Out of memory.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enomem
 *
 * @var int
 */
const SOCKET_ENOMEM = 12;

/**
 * No message of desired type.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enomsg
 *
 * @var int
 */
const SOCKET_ENOMSG = 42;

/**
 * Machine is not on the network.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enonet
 *
 * @var int
 */
const SOCKET_ENONET = 64;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enoprotoopt
 *
 * @var int
 */
const SOCKET_ENOPROTOOPT = 92;

/**
 * No space left on device.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enospc
 *
 * @var int
 */
const SOCKET_ENOSPC = 28;

/**
 * Out of streams resources.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enosr
 *
 * @var int
 */
const SOCKET_ENOSR = 63;

/**
 * Device not a stream.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enostr
 *
 * @var int
 */
const SOCKET_ENOSTR = 60;

/**
 * Function not implemented.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enosys
 *
 * @var int
 */
const SOCKET_ENOSYS = 38;

/**
 * Block device required.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enotblk
 *
 * @var int
 */
const SOCKET_ENOTBLK = 15;

/**
 * Transport endpoint is not connected.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enotconn
 *
 * @var int
 */
const SOCKET_ENOTCONN = 107;

/**
 * Not a directory.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enotdir
 *
 * @var int
 */
const SOCKET_ENOTDIR = 20;

/**
 * Directory not empty.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enotempty
 *
 * @var int
 */
const SOCKET_ENOTEMPTY = 39;

/**
 * Socket operation on non-socket.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enotsock
 *
 * @var int
 */
const SOCKET_ENOTSOCK = 88;

/**
 * Not a typewriter.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enotty
 *
 * @var int
 */
const SOCKET_ENOTTY = 25;

/**
 * Name not unique on network.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enotuniq
 *
 * @var int
 */
const SOCKET_ENOTUNIQ = 76;

/**
 * No such device or address.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-enxio
 *
 * @var int
 */
const SOCKET_ENXIO = 6;

/**
 * Operation not supported on transport endpoint.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eopnotsupp
 *
 * @var int
 */
const SOCKET_EOPNOTSUPP = 95;

/**
 * Operation not permitted.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eperm
 *
 * @var int
 */
const SOCKET_EPERM = 1;

/**
 * Protocol family not supported.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-epfnosupport
 *
 * @var int
 */
const SOCKET_EPFNOSUPPORT = 96;

/**
 * Broken pipe.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-epipe
 *
 * @var int
 */
const SOCKET_EPIPE = 32;

/**
 * Protocol error.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eproto
 *
 * @var int
 */
const SOCKET_EPROTO = 71;

/**
 * Protocol not supported.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eprotonosupport
 *
 * @var int
 */
const SOCKET_EPROTONOSUPPORT = 93;

/**
 * Protocol wrong type for socket.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eprototype
 *
 * @var int
 */
const SOCKET_EPROTOTYPE = 91;

/**
 * Remote address changed.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eremchg
 *
 * @var int
 */
const SOCKET_EREMCHG = 78;

/**
 * Object is remote.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eremote
 *
 * @var int
 */
const SOCKET_EREMOTE = 66;

/**
 * Remote I/O error.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eremoteio
 *
 * @var int
 */
const SOCKET_EREMOTEIO = 121;

/**
 * Interrupted system call should be restarted.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-erestart
 *
 * @var int
 */
const SOCKET_ERESTART = 85;

/**
 * Read-only file system.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-erofs
 *
 * @var int
 */
const SOCKET_EROFS = 30;

/**
 * Cannot send after transport endpoint shutdown.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eshutdown
 *
 * @var int
 */
const SOCKET_ESHUTDOWN = 108;

/**
 * Socket type not supported.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-esocktnosupport
 *
 * @var int
 */
const SOCKET_ESOCKTNOSUPPORT = 94;

/**
 * Illegal seek.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-espipe
 *
 * @var int
 */
const SOCKET_ESPIPE = 29;

/**
 * Srmount error.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-esrmnt
 *
 * @var int
 */
const SOCKET_ESRMNT = 69;

/**
 * Streams pipe error.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-estrpipe
 *
 * @var int
 */
const SOCKET_ESTRPIPE = 86;

/**
 * Timer expired.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-etime
 *
 * @var int
 */
const SOCKET_ETIME = 62;

/**
 * Connection timed out.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-etimedout
 *
 * @var int
 */
const SOCKET_ETIMEDOUT = 110;

/**
 * Too many references: cannot splice.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-etoomanyrefs
 *
 * @var int
 */
const SOCKET_ETOOMANYREFS = 109;

/**
 * Protocol driver not attached.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eunatch
 *
 * @var int
 */
const SOCKET_EUNATCH = 49;

/**
 * Too many users.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-eusers
 *
 * @var int
 */
const SOCKET_EUSERS = 87;

/**
 * Operation would block.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-ewouldblock
 *
 * @var int
 */
const SOCKET_EWOULDBLOCK = 11;

/**
 * Cross-device link.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-exdev
 *
 * @var int
 */
const SOCKET_EXDEV = 18;

/**
 * Exchange full.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.socket-exfull
 *
 * @var int
 */
const SOCKET_EXFULL = 54;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.sol-socket
 *
 * @var int
 */
const SOL_SOCKET = 1;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.sol-tcp
 *
 * @var int
 */
const SOL_TCP = 6;

/**
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.sol-udp
 *
 * @var int
 */
const SOL_UDP = 17;

/**
 * @var int
 */
const SOMAXCONN = 128;

/**
 * Used to disable Nagle TCP algorithm.
 *      Added in PHP 5.2.7.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.tcp-nodelay
 *
 * @var int
 */
const TCP_NODELAY = 1;

/**
 * Accepts a connection on a socket
 *
 * mixed $socket
 *
 * @return resource
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-accept.php
 */
function socket_accept($socket)
{
}

/**
 * Create and bind to a socket from a given addrinfo
 *
 * mixed $addr
 *
 * @return resource
 *
 * @since PHP 7 >= 7.2.0
 *
 * @link http://www.php.net/manual/en/function.socket-addrinfo-bind.php
 */
function socket_addrinfo_bind($addr)
{
}

/**
 * Create and connect to a socket from a given addrinfo
 *
 * mixed $addr
 *
 * @return resource
 *
 * @since PHP 7 >= 7.2.0
 *
 * @link http://www.php.net/manual/en/function.socket-addrinfo-connect.php
 */
function socket_addrinfo_connect($addr)
{
}

/**
 * Get information about addrinfo
 *
 * mixed $addr
 *
 * @return array
 *
 * @since PHP 7 >= 7.2.0
 *
 * @link http://www.php.net/manual/en/function.socket-addrinfo-explain.php
 */
function socket_addrinfo_explain($addr): array
{
}

/**
 * Get array with contents of getaddrinfo about the given hostname
 *
 * mixed $host
 * mixed|null $service
 * mixed|null $hints
 *
 * @return array
 *
 * @since PHP 7 >= 7.2.0
 *
 * @link http://www.php.net/manual/en/function.socket-addrinfo-lookup.php
 */
function socket_addrinfo_lookup($host, $service = null, $hints = null): array
{
}

/**
 * Binds a name to a socket
 *
 * mixed $socket
 * mixed $addr
 * mixed|null $port
 *
 * @return bool
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-bind.php
 */
function socket_bind($socket, $addr, $port = null): bool
{
}

/**
 * Clears the error on the socket or the last error code
 *
 * mixed|null $socket
 *
 * @return void
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-clear-error.php
 */
function socket_clear_error($socket = null)
{
}

/**
 * Closes a socket resource
 *
 * mixed $socket
 *
 * @return void
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-close.php
 */
function socket_close($socket)
{
}

/**
 * Calculate message buffer size
 *
 * mixed $level
 * mixed $type
 *
 * @return int
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-cmsg-space.php
 */
function socket_cmsg_space($level, $type): int
{
}

/**
 * Initiates a connection on a socket
 *
 * mixed $socket
 * mixed $addr
 * mixed|null $port
 *
 * @return bool
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-connect.php
 */
function socket_connect($socket, $addr, $port = null): bool
{
}

/**
 * Create a socket (endpoint for communication)
 *
 * mixed $domain
 * mixed $type
 * mixed $protocol
 *
 * @return resource
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-create.php
 */
function socket_create($domain, $type, $protocol)
{
}

/**
 * Opens a socket on port to accept connections
 *
 * mixed $port
 * mixed|null $backlog
 *
 * @return resource
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-create-listen.php
 */
function socket_create_listen($port, $backlog = null)
{
}

/**
 * Creates a pair of indistinguishable sockets and stores them in an array
 *
 * mixed $domain
 * mixed $type
 * mixed $protocol
 * mixed $fd
 *
 * @return bool
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-create-pair.php
 */
function socket_create_pair($domain, $type, $protocol, &$fd): bool
{
}

/**
 * Export a socket extension resource into a stream that encapsulates a socket
 *
 * mixed $socket
 *
 * @return resource
 *
 * @since PHP 7 >= 7.0.7
 *
 * @link http://www.php.net/manual/en/function.socket-export-stream.php
 */
function socket_export_stream($socket)
{
}

/**
 * Gets socket options for the socket
 *
 * mixed $socket
 * mixed $level
 * mixed $optname
 *
 * @return mixed
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-get-option.php
 */
function socket_get_option($socket, $level, $optname)
{
}

/**
 * Alias of <code>socket_get_option</code>
 *
 * mixed $socket
 * mixed $level
 * mixed $optname
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-getopt.php
 */
function socket_getopt($socket, $level, $optname)
{
}

/**
 * Queries the remote side of the given socket which may either result in host/port or in a Unix filesystem path, dependent on its type
 *
 * mixed $socket
 * mixed $addr
 * mixed|null $port
 *
 * @return bool
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-getpeername.php
 */
function socket_getpeername($socket, &$addr, &$port = null): bool
{
}

/**
 * Queries the local side of the given socket which may either result in host/port or in a Unix filesystem path, dependent on its type
 *
 * mixed $socket
 * mixed $addr
 * mixed|null $port
 *
 * @return bool
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-getsockname.php
 */
function socket_getsockname($socket, &$addr, &$port = null): bool
{
}

/**
 * Import a stream
 *
 * mixed $stream
 *
 * @return resource
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-import-stream.php
 */
function socket_import_stream($stream)
{
}

/**
 * Returns the last error on the socket
 *
 * mixed|null $socket
 *
 * @return int
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-last-error.php
 */
function socket_last_error($socket = null): int
{
}

/**
 * Listens for a connection on a socket
 *
 * mixed $socket
 * mixed|null $backlog
 *
 * @return bool
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-listen.php
 */
function socket_listen($socket, $backlog = null): bool
{
}

/**
 * Reads a maximum of length bytes from a socket
 *
 * mixed $socket
 * mixed $length
 * mixed|null $type
 *
 * @return string
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-read.php
 */
function socket_read($socket, $length, $type = null): string
{
}

/**
 * Receives data from a connected socket
 *
 * mixed $socket
 * mixed $buf
 * mixed $len
 * mixed $flags
 *
 * @return int
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-recv.php
 */
function socket_recv($socket, &$buf, $len, $flags): int
{
}

/**
 * Receives data from a socket whether or not it is connection-oriented
 *
 * mixed $socket
 * mixed $buf
 * mixed $len
 * mixed $flags
 * mixed $name
 * mixed|null $port
 *
 * @return int
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-recvfrom.php
 */
function socket_recvfrom($socket, &$buf, $len, $flags, &$name, &$port = null): int
{
}

/**
 * Read a message
 *
 * mixed $socket
 * mixed $msghdr
 * mixed $flags
 *
 * @return int
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-recvmsg.php
 */
function socket_recvmsg($socket, &$msghdr, $flags): int
{
}

/**
 * Runs the select() system call on the given arrays of sockets with a specified timeout
 *
 * mixed $read_fds
 * mixed $write_fds
 * mixed $except_fds
 * mixed $tv_sec
 * mixed|null $tv_usec
 *
 * @return int
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-select.php
 */
function socket_select(&$read_fds, &$write_fds, &$except_fds, $tv_sec, $tv_usec = null): int
{
}

/**
 * Sends data to a connected socket
 *
 * mixed $socket
 * mixed $buf
 * mixed $len
 * mixed $flags
 *
 * @return int
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-send.php
 */
function socket_send($socket, $buf, $len, $flags): int
{
}

/**
 * Send a message
 *
 * mixed $socket
 * mixed $msghdr
 * mixed $flags
 *
 * @return int
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-sendmsg.php
 */
function socket_sendmsg($socket, $msghdr, $flags): int
{
}

/**
 * Sends a message to a socket, whether it is connected or not
 *
 * mixed $socket
 * mixed $buf
 * mixed $len
 * mixed $flags
 * mixed $addr
 * mixed|null $port
 *
 * @return int
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-sendto.php
 */
function socket_sendto($socket, $buf, $len, $flags, $addr, $port = null): int
{
}

/**
 * Sets blocking mode on a socket resource
 *
 * mixed $socket
 *
 * @return bool
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-set-block.php
 */
function socket_set_block($socket): bool
{
}

/**
 * Sets nonblocking mode for file descriptor fd
 *
 * mixed $socket
 *
 * @return bool
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-set-nonblock.php
 */
function socket_set_nonblock($socket): bool
{
}

/**
 * Sets socket options for the socket
 *
 * mixed $socket
 * mixed $level
 * mixed $optname
 * mixed $optval
 *
 * @return bool
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-set-option.php
 */
function socket_set_option($socket, $level, $optname, $optval): bool
{
}

/**
 * Alias of <code>socket_set_option</code>
 *
 * mixed $socket
 * mixed $level
 * mixed $optname
 * mixed $optval
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-setopt.php
 */
function socket_setopt($socket, $level, $optname, $optval)
{
}

/**
 * Shuts down a socket for receiving, sending, or both
 *
 * mixed $socket
 * mixed|null $how
 *
 * @return bool
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-shutdown.php
 */
function socket_shutdown($socket, $how = null): bool
{
}

/**
 * Return a string describing a socket error
 *
 * mixed $errno
 *
 * @return string
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-strerror.php
 */
function socket_strerror($errno): string
{
}

/**
 * Write to a socket
 *
 * mixed $socket
 * mixed $buf
 * mixed|null $length
 *
 * @return int
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-write.php
 */
function socket_write($socket, $buf, $length = null): int
{
}
