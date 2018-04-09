<?php
// Start of extension: sockets
// - parsed on POSIX with PHP 7.1.15 (extension version 7.1.15)

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
 * support the <code>SO_REUSEPORT</code> socket option: this
 * includes Mac OS X and FreeBSD, but does not include Linux or Windows.
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
 * Added in PHP 5.2.7.
 *
 * @link http://www.php.net/manual/en/sockets.constants.php#constant.tcp-nodelay
 *
 * @var int
 */
const TCP_NODELAY = 1;

/**
 * Accepts a connection on a socket
 *
 * @param resource $socket A valid socket resource created with <code>socket_create</code>.
 *
 * @return resource Returns a new socket resource on success, or <code>FALSE</code> on error. The actual
 * error code can be retrieved by calling
 * <code>socket_last_error</code>. This error code may be passed to
 * <code>socket_strerror</code> to get a textual explanation of the
 * error.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-accept.php
 */
function socket_accept($socket)
{
}

/**
 * Binds a name to a socket
 *
 * @param resource $socket A valid socket resource created with <code>socket_create</code>.
 * @param string $address If the socket is of the <code>AF_INET</code> family, the
 * <code>address</code> is an IP in dotted-quad notation
 * (e.g. <code>127.0.0.1</code>).
 * @param int|null $port The <code>port</code> parameter is only used when
 * binding an <code>AF_INET</code> socket, and designates
 * the port on which to listen for connections.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 * The error code can be retrieved with <code>socket_last_error</code>.
 * This code may be passed to <code>socket_strerror</code> to get a
 * textual explanation of the error.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-bind.php
 */
function socket_bind($socket, string $address, int $port = 0): bool
{
}

/**
 * Clears the error on the socket or the last error code
 *
 * @param resource $socket A valid socket resource created with <code>socket_create</code>.
 *
 * @return void No value is returned.
 *
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-clear-error.php
 */
function socket_clear_error($socket = null): void
{
}

/**
 * Closes a socket resource
 *
 * @param resource $socket A valid socket resource created with <code>socket_create</code>
 * or <code>socket_accept</code>.
 *
 * @return void No value is returned.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-close.php
 */
function socket_close($socket): void
{
}

/**
 * Calculate message buffer size
 *
 * @param int $level
 * @param int $type
 *
 * @return int
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-cmsg-space.php
 */
function socket_cmsg_space(int $level, int $type): int
{
}

/**
 * Initiates a connection on a socket
 *
 * @param resource $socket
 * @param string $address The <code>address</code> parameter is either an IPv4 address
 * in dotted-quad notation (e.g. <code>127.0.0.1</code>) if
 * <code>socket</code> is <code>AF_INET</code>, a valid
 * IPv6 address (e.g. <code>::1</code>) if IPv6 support is enabled and
 * <code>socket</code> is <code>AF_INET6</code>
 * or the pathname of a Unix domain socket, if the socket family is
 * <code>AF_UNIX</code>.
 * @param int|null $port The <code>port</code> parameter is only used and is mandatory
 * when connecting to an <code>AF_INET</code> or an
 * <code>AF_INET6</code> socket, and designates
 * the port on the remote host to which a connection should be made.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure. The error code can be retrieved with
 * <code>socket_last_error</code>. This code may be passed to
 * <code>socket_strerror</code> to get a textual explanation of the
 * error.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-connect.php
 */
function socket_connect($socket, string $address, int $port = 0): bool
{
}

/**
 * Create a socket (endpoint for communication)
 *
 * @param int $domain The <code>domain</code> parameter specifies the protocol
 * family to be used by the socket.
 * @param int $type The <code>type</code> parameter selects the type of communication
 * to be used by the socket.
 * @param int $protocol The <code>protocol</code> parameter sets the specific
 * protocol within the specified <code>domain</code> to be used
 * when communicating on the returned socket. The proper value can be
 * retrieved by name by using <code>getprotobyname</code>. If
 * the desired protocol is TCP, or UDP the corresponding constants
 * <code>SOL_TCP</code>, and <code>SOL_UDP</code>
 * can also be used.
 *
 * @return resource <code>socket_create</code> returns a socket resource on success,
 * or <code>FALSE</code> on error. The actual error code can be retrieved by calling
 * <code>socket_last_error</code>. This error code may be passed to
 * <code>socket_strerror</code> to get a textual explanation of the
 * error.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-create.php
 */
function socket_create(int $domain, int $type, int $protocol)
{
}

/**
 * Opens a socket on port to accept connections
 *
 * @param int $port The port on which to listen on all interfaces.
 * @param int|null $backlog The <code>backlog</code> parameter defines the maximum length
 * the queue of pending connections may grow to.
 * <code>SOMAXCONN</code> may be passed as
 * <code>backlog</code> parameter, see
 * <code>socket_listen</code> for more information.
 *
 * @return resource <code>socket_create_listen</code> returns a new socket resource
 * on success or <code>FALSE</code> on error. The error code can be retrieved with
 * <code>socket_last_error</code>. This code may be passed to
 * <code>socket_strerror</code> to get a textual explanation of the
 * error.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-create-listen.php
 */
function socket_create_listen(int $port, int $backlog = 128)
{
}

/**
 * Creates a pair of indistinguishable sockets and stores them in an array
 *
 * @param int $domain The <code>domain</code> parameter specifies the protocol
 * family to be used by the socket. See <code>socket_create</code>
 * for the full list.
 * @param int $type The <code>type</code> parameter selects the type of communication
 * to be used by the socket. See <code>socket_create</code> for the
 * full list.
 * @param int $protocol The <code>protocol</code> parameter sets the specific
 * protocol within the specified <code>domain</code> to be used
 * when communicating on the returned socket. The proper value can be retrieved by
 * name by using <code>getprotobyname</code>. If
 * the desired protocol is TCP, or UDP the corresponding constants
 * <code>SOL_TCP</code>, and <code>SOL_UDP</code>
 * can also be used.
 * @param array $fd Reference to an array in which the two socket resources will be inserted.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-create-pair.php
 */
function socket_create_pair(int $domain, int $type, int $protocol, array &$fd): bool
{
}

/**
 * Export a socket extension resource into a stream that encapsulates a socket
 *
 * @param resource $socket
 *
 * @return resource Return resource or <code>FALSE</code> on failure.
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
 * @param resource $socket A valid socket resource created with <code>socket_create</code>
 * or <code>socket_accept</code>.
 * @param int $level The <code>level</code> parameter specifies the protocol
 * level at which the option resides. For example, to retrieve options at
 * the socket level, a <code>level</code> parameter of
 * <code>SOL_SOCKET</code> would be used. Other levels, such as
 * <code>TCP</code>, can be used by
 * specifying the protocol number of that level. Protocol numbers can be
 * found by using the <code>getprotobyname</code> function.
 * @param int $optname Reports whether the <code>socket</code> lingers on
 * <code>socket_close</code> if data is present. By default,
 * when the socket is closed, it attempts to send all unsent data.
 * In the case of a connection-oriented socket,
 * <code>socket_close</code> will wait for its peer to
 * acknowledge the data.
 *
 * @return mixed Returns the value of the given option, or <code>FALSE</code> on errors.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-get-option.php
 */
function socket_get_option($socket, int $level, int $optname)
{
}

/**
 * Alias of <code>socket_get_option</code>
 *
 * @param mixed $socket
 * @param mixed $level
 * @param mixed $optname
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
 * @param resource $socket A valid socket resource created with <code>socket_create</code>
 * or <code>socket_accept</code>.
 * @param string $address If the given socket is of type <code>AF_INET</code> or
 * <code>AF_INET6</code>, <code>socket_getpeername</code>
 * will return the peers (remote) <code>IP address</code> in
 * appropriate notation (e.g. <code>127.0.0.1</code> or
 * <code>fe80::1</code>) in the <code>address</code>
 * parameter and, if the optional <code>port</code> parameter is
 * present, also the associated port.
 * @param int $port If given, this will hold the port associated to
 * <code>address</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure. <code>socket_getpeername</code> may also return
 * <code>FALSE</code> if the socket type is not any of <code>AF_INET</code>,
 * <code>AF_INET6</code>, or <code>AF_UNIX</code>, in which
 * case the last socket error code is <code>not</code> updated.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-getpeername.php
 */
function socket_getpeername($socket, string &$address, int &$port = null): bool
{
}

/**
 * Queries the local side of the given socket which may either result in host/port or in a Unix filesystem path, dependent on its type
 *
 * @param resource $socket A valid socket resource created with <code>socket_create</code>
 * or <code>socket_accept</code>.
 * @param string $addr If the given socket is of type <code>AF_INET</code>
 * or <code>AF_INET6</code>, <code>socket_getsockname</code>
 * will return the local <code>IP address</code> in appropriate notation (e.g.
 * <code>127.0.0.1</code> or <code>fe80::1</code>) in the
 * <code>address</code> parameter and, if the optional
 * <code>port</code> parameter is present, also the associated port.
 * @param int $port If provided, this will hold the associated port.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure. <code>socket_getsockname</code> may also return
 * <code>FALSE</code> if the socket type is not any of <code>AF_INET</code>,
 * <code>AF_INET6</code>, or <code>AF_UNIX</code>, in which
 * case the last socket error code is <code>not</code> updated.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-getsockname.php
 */
function socket_getsockname($socket, string &$addr, int &$port = null): bool
{
}

/**
 * Import a stream
 *
 * @param resource $stream The stream resource to import.
 *
 * @return resource Returns <code>FALSE</code> or <code>NULL</code> on failure.
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
 * @param resource $socket A valid socket resource created with <code>socket_create</code>.
 *
 * @return int This function returns a socket error code.
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
 * @param resource $socket A valid socket resource created with <code>socket_create</code>.
 * @param int|null $backlog A maximum of <code>backlog</code> incoming connections will be
 * queued for processing. If a connection request arrives with the queue
 * full the client may receive an error with an indication of
 * <code>ECONNREFUSED</code>, or, if the underlying protocol supports
 * retransmission, the request may be ignored so that retries may succeed.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure. The error code can be retrieved with
 * <code>socket_last_error</code>. This code may be passed to
 * <code>socket_strerror</code> to get a textual explanation of the
 * error.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-listen.php
 */
function socket_listen($socket, int $backlog = 0): bool
{
}

/**
 * Reads a maximum of length bytes from a socket
 *
 * @param resource $socket A valid socket resource created with <code>socket_create</code>
 * or <code>socket_accept</code>.
 * @param int $length The maximum number of bytes read is specified by the
 * <code>length</code> parameter. Otherwise you can use
 * <code>\r</code>, <code>\n</code>,
 * or <code>\0</code> to end reading (depending on the <code>type</code>
 * parameter, see below).
 * @param int|null $type Optional <code>type</code> parameter is a named constant:
 * <ul>
 * <code>PHP_BINARY_READ</code> (Default) - use the system
 * <code>recv()</code> function. Safe for reading binary data.
 * <code>PHP_NORMAL_READ</code> - reading stops at
 * <code>\n</code> or <code>\r</code>.
 * </ul>
 *
 * @return string <code>socket_read</code> returns the data as a string on success,
 * or <code>FALSE</code> on error (including if the remote host has closed the
 * connection). The error code can be retrieved with
 * <code>socket_last_error</code>. This code may be passed to
 * <code>socket_strerror</code> to get a textual representation of
 * the error.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-read.php
 */
function socket_read($socket, int $length, int $type = PHP_BINARY_READ): string
{
}

/**
 * Receives data from a connected socket
 *
 * @param resource $socket The <code>socket</code> must be a socket resource previously
 * created by socket_create().
 * @param string $buf The data received will be fetched to the variable specified with
 * <code>buf</code>. If an error occurs, if the
 * connection is reset, or if no data is
 * available, <code>buf</code> will be set to <code>NULL</code>.
 * @param int $len Up to <code>len</code> bytes will be fetched from remote host.
 * @param int $flags The value of <code>flags</code> can be any combination of
 * the following flags, joined with the binary OR (<code>|</code>)
 * operator.
 *
 * @return int <code>socket_recv</code> returns the number of bytes received,
 * or <code>FALSE</code> if there was an error. The actual error code can be retrieved by
 * calling <code>socket_last_error</code>. This error code may be
 * passed to <code>socket_strerror</code> to get a textual explanation
 * of the error.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-recv.php
 */
function socket_recv($socket, string &$buf, int $len, int $flags): int
{
}

/**
 * Receives data from a socket whether or not it is connection-oriented
 *
 * @param resource $socket The <code>socket</code> must be a socket resource previously
 * created by socket_create().
 * @param string $buf The data received will be fetched to the variable specified with
 * <code>buf</code>.
 * @param int $len Up to <code>len</code> bytes will be fetched from remote host.
 * @param int $flags The value of <code>flags</code> can be any combination of
 * the following flags, joined with the binary OR (<code>|</code>)
 * operator.
 * @param string $name If the socket is of the type <code>AF_UNIX</code> type,
 * <code>name</code> is the path to the file. Else, for
 * unconnected sockets, <code>name</code> is the IP address of,
 * the remote host, or <code>NULL</code> if the socket is connection-oriented.
 * @param int $port This argument only applies to <code>AF_INET</code> and
 * <code>AF_INET6</code> sockets, and specifies the remote port
 * from which the data is received. If the socket is connection-oriented,
 * <code>port</code> will be <code>NULL</code>.
 *
 * @return int <code>socket_recvfrom</code> returns the number of bytes received,
 * or <code>FALSE</code> if there was an error. The actual error code can be retrieved by
 * calling <code>socket_last_error</code>. This error code may be
 * passed to <code>socket_strerror</code> to get a textual explanation
 * of the error.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-recvfrom.php
 */
function socket_recvfrom($socket, string &$buf, int $len, int $flags, string &$name, int &$port = null): int
{
}

/**
 * Read a message
 *
 * @param resource $socket
 * @param string $message
 * @param int|null $flags
 *
 * @return int
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-recvmsg.php
 */
function socket_recvmsg($socket, string &$message, int $flags = 0): int
{
}

/**
 * Runs the select() system call on the given arrays of sockets with a specified timeout
 *
 * @param array $read The sockets listed in the <code>read</code> array will be
 * watched to see if characters become available for reading (more
 * precisely, to see if a read will not block - in particular, a socket
 * resource is also ready on end-of-file, in which case a
 * <code>socket_read</code> will return a zero length string).
 * @param array $write The sockets listed in the <code>write</code> array will be
 * watched to see if a write will not block.
 * @param array $except The sockets listed in the <code>except</code> array will be
 * watched for exceptions.
 * @param int $tv_sec The <code>tv_sec</code> and <code>tv_usec</code>
 * together form the <code>timeout</code> parameter. The
 * <code>timeout</code> is an upper bound on the amount of time
 * elapsed before <code>socket_select</code> return.
 * <code>tv_sec</code> may be zero , causing
 * <code>socket_select</code> to return immediately. This is useful
 * for polling. If <code>tv_sec</code> is <code>NULL</code> (no timeout),
 * <code>socket_select</code> can block indefinitely.
 * @param int|null $tv_usec
 *
 * @return int On success <code>socket_select</code> returns the number of
 * socket resources contained in the modified arrays, which may be zero if
 * the timeout expires before anything interesting happens. On error <code>FALSE</code>
 * is returned. The error code can be retrieved with
 * <code>socket_last_error</code>.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-select.php
 */
function socket_select(array &$read, array &$write, array &$except, int $tv_sec, int $tv_usec = 0): int
{
}

/**
 * Sends data to a connected socket
 *
 * @param resource $socket A valid socket resource created with <code>socket_create</code>
 * or <code>socket_accept</code>.
 * @param string $buf A buffer containing the data that will be sent to the remote host.
 * @param int $len The number of bytes that will be sent to the remote host from
 * <code>buf</code>.
 * @param int $flags The value of <code>flags</code> can be any combination of
 * the following flags, joined with the binary OR (<code>|</code>)
 * operator.
 * <table>
 * <title>Possible values for <code>flags</code></title>
 * <tbody>
 * <tr>
 * <td><code>MSG_OOB</code></td><td>
 * Send OOB (out-of-band) data.
 * </td>
 * </tr>
 * <tr>
 * <td><code>MSG_EOR</code></td><td>
 * Indicate a record mark. The sent data completes the record.
 * </td>
 * </tr>
 * <tr>
 * <td><code>MSG_EOF</code></td><td>
 * Close the sender side of the socket and include an appropriate
 * notification of this at the end of the sent data. The sent data
 * completes the transaction.
 * </td>
 * </tr>
 * <tr>
 * <td><code>MSG_DONTROUTE</code></td><td>
 * Bypass routing, use direct interface.
 * </td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @return int <code>socket_send</code> returns the number of bytes sent, or <code>FALSE</code> on error.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-send.php
 */
function socket_send($socket, string $buf, int $len, int $flags): int
{
}

/**
 * Send a message
 *
 * @param resource $socket
 * @param array $message
 * @param int|null $flags
 *
 * @return int Returns the number of bytes sent, or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.5.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-sendmsg.php
 */
function socket_sendmsg($socket, array $message, int $flags = 0): int
{
}

/**
 * Sends a message to a socket, whether it is connected or not
 *
 * @param resource $socket A valid socket resource created using <code>socket_create</code>.
 * @param string $buf The sent data will be taken from buffer <code>buf</code>.
 * @param int $len <code>len</code> bytes from <code>buf</code> will be
 * sent.
 * @param int $flags The value of <code>flags</code> can be any combination of
 * the following flags, joined with the binary OR (<code>|</code>)
 * operator.
 * <table>
 * <title>Possible values for <code>flags</code></title>
 * <tbody>
 * <tr>
 * <td><code>MSG_OOB</code></td><td>
 * Send OOB (out-of-band) data.
 * </td>
 * </tr>
 * <tr>
 * <td><code>MSG_EOR</code></td><td>
 * Indicate a record mark. The sent data completes the record.
 * </td>
 * </tr>
 * <tr>
 * <td><code>MSG_EOF</code></td><td>
 * Close the sender side of the socket and include an appropriate
 * notification of this at the end of the sent data. The sent data
 * completes the transaction.
 * </td>
 * </tr>
 * <tr>
 * <td><code>MSG_DONTROUTE</code></td><td>
 * Bypass routing, use direct interface.
 * </td>
 * </tr>
 * </tbody>
 * </table>
 * @param string $addr IP address of the remote host.
 * @param int|null $port <code>port</code> is the remote port number at which the data
 * will be sent.
 *
 * @return int <code>socket_sendto</code> returns the number of bytes sent to the
 * remote host, or <code>FALSE</code> if an error occurred.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-sendto.php
 */
function socket_sendto($socket, string $buf, int $len, int $flags, string $addr, int $port = 0): int
{
}

/**
 * Sets blocking mode on a socket resource
 *
 * @param resource $socket A valid socket resource created with <code>socket_create</code>
 * or <code>socket_accept</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
 * @param resource $socket A valid socket resource created with <code>socket_create</code>
 * or <code>socket_accept</code>.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
 * @param resource $socket A valid socket resource created with <code>socket_create</code>
 * or <code>socket_accept</code>.
 * @param int $level The <code>level</code> parameter specifies the protocol
 * level at which the option resides. For example, to retrieve options at
 * the socket level, a <code>level</code> parameter of
 * <code>SOL_SOCKET</code> would be used. Other levels, such as
 * TCP, can be used by specifying the protocol number of that level.
 * Protocol numbers can be found by using the
 * <code>getprotobyname</code> function.
 * @param int $optname The available socket options are the same as those for the
 * <code>socket_get_option</code> function.
 * @param mixed $optval The option value.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-set-option.php
 */
function socket_set_option($socket, int $level, int $optname, $optval): bool
{
}

/**
 * Alias of <code>socket_set_option</code>
 *
 * @param mixed $socket
 * @param mixed $level
 * @param mixed $optname
 * @param mixed $optval
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
 * @param resource $socket A valid socket resource created with <code>socket_create</code>.
 * @param int|null $how The value of <code>how</code> can be one of the following:
 * <table>
 * <title>possible values for <code>how</code></title>
 * <tbody>
 * <tr>
 * <td><code>0</code></td><td>
 * Shutdown socket reading
 * </td>
 * </tr>
 * <tr>
 * <td><code>1</code></td><td>
 * Shutdown socket writing
 * </td>
 * </tr>
 * <tr>
 * <td><code>2</code></td><td>
 * Shutdown socket reading and writing
 * </td>
 * </tr>
 * </tbody>
 * </table>
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-shutdown.php
 */
function socket_shutdown($socket, int $how = 2): bool
{
}

/**
 * Return a string describing a socket error
 *
 * @param int $errno A valid socket error number, likely produced by
 * <code>socket_last_error</code>.
 *
 * @return string Returns the error message associated with the <code>errno</code>
 * parameter.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-strerror.php
 */
function socket_strerror(int $errno): string
{
}

/**
 * Write to a socket
 *
 * @param resource $socket
 * @param string $buffer The buffer to be written.
 * @param int|null $length The optional parameter <code>length</code> can specify an
 * alternate length of bytes written to the socket. If this length is
 * greater than the buffer length, it is silently truncated to the length
 * of the buffer.
 *
 * @return int Returns the number of bytes successfully written to the socket or <code>FALSE</code> on failure.
 * The error code can be retrieved with
 * <code>socket_last_error</code>. This code may be passed to
 * <code>socket_strerror</code> to get a textual explanation of the
 * error.
 *
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.socket-write.php
 */
function socket_write($socket, string $buffer, int $length = 0): int
{
}
