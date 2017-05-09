<?php
// Documentation generated automatically for extension sockets v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
// No INI entries
const AF_INET = 2;
const AF_INET6 = 23;
const AF_UNIX = 1;
const IPPROTO_IP = 0;
const IPPROTO_IPV6 = 41;
const IPV6_HOPLIMIT = 21;
const IPV6_MULTICAST_HOPS = 10;
const IPV6_MULTICAST_IF = 9;
const IPV6_MULTICAST_LOOP = 11;
const IPV6_PKTINFO = 19;
const IPV6_RECVHOPLIMIT = 21;
const IPV6_RECVPKTINFO = 19;
const IPV6_RECVTCLASS = 40;
const IPV6_TCLASS = 39;
const IPV6_UNICAST_HOPS = 4;
const IPV6_V6ONLY = 27;
const IP_MULTICAST_IF = 9;
const IP_MULTICAST_LOOP = 11;
const IP_MULTICAST_TTL = 10;
const MCAST_BLOCK_SOURCE = 43;
const MCAST_JOIN_GROUP = 41;
const MCAST_JOIN_SOURCE_GROUP = 45;
const MCAST_LEAVE_GROUP = 42;
const MCAST_LEAVE_SOURCE_GROUP = 46;
const MCAST_UNBLOCK_SOURCE = 44;
const MSG_CTRUNC = 512;
const MSG_DONTROUTE = 4;
const MSG_OOB = 1;
const MSG_PEEK = 2;
const MSG_TRUNC = 256;
const MSG_WAITALL = 8;
const PHP_BINARY_READ = 2;
const PHP_NORMAL_READ = 1;
const SOCKET_EACCES = 10013;
const SOCKET_EADDRINUSE = 10048;
const SOCKET_EADDRNOTAVAIL = 10049;
const SOCKET_EAFNOSUPPORT = 10047;
const SOCKET_EALREADY = 10037;
const SOCKET_EBADF = 10009;
const SOCKET_ECONNABORTED = 10053;
const SOCKET_ECONNREFUSED = 10061;
const SOCKET_ECONNRESET = 10054;
const SOCKET_EDESTADDRREQ = 10039;
const SOCKET_EDISCON = 10101;
const SOCKET_EDQUOT = 10069;
const SOCKET_EFAULT = 10014;
const SOCKET_EHOSTDOWN = 10064;
const SOCKET_EHOSTUNREACH = 10065;
const SOCKET_EINPROGRESS = 10036;
const SOCKET_EINTR = 10004;
const SOCKET_EINVAL = 10022;
const SOCKET_EISCONN = 10056;
const SOCKET_ELOOP = 10062;
const SOCKET_EMFILE = 10024;
const SOCKET_EMSGSIZE = 10040;
const SOCKET_ENAMETOOLONG = 10063;
const SOCKET_ENETDOWN = 10050;
const SOCKET_ENETRESET = 10052;
const SOCKET_ENETUNREACH = 10051;
const SOCKET_ENOBUFS = 10055;
const SOCKET_ENOPROTOOPT = 10042;
const SOCKET_ENOTCONN = 10057;
const SOCKET_ENOTEMPTY = 10066;
const SOCKET_ENOTSOCK = 10038;
const SOCKET_EOPNOTSUPP = 10045;
const SOCKET_EPFNOSUPPORT = 10046;
const SOCKET_EPROCLIM = 10067;
const SOCKET_EPROTONOSUPPORT = 10043;
const SOCKET_EPROTOTYPE = 10041;
const SOCKET_EREMOTE = 10071;
const SOCKET_ESHUTDOWN = 10058;
const SOCKET_ESOCKTNOSUPPORT = 10044;
const SOCKET_ESTALE = 10070;
const SOCKET_ETIMEDOUT = 10060;
const SOCKET_ETOOMANYREFS = 10059;
const SOCKET_EUSERS = 10068;
const SOCKET_EWOULDBLOCK = 10035;
const SOCKET_HOST_NOT_FOUND = 11001;
const SOCKET_NOTINITIALISED = 10093;
const SOCKET_NO_ADDRESS = 11004;
const SOCKET_NO_DATA = 11004;
const SOCKET_NO_RECOVERY = 11003;
const SOCKET_SYSNOTREADY = 10091;
const SOCKET_TRY_AGAIN = 11002;
const SOCKET_VERNOTSUPPORTED = 10092;
const SOCK_DGRAM = 2;
const SOCK_RAW = 3;
const SOCK_RDM = 4;
const SOCK_SEQPACKET = 5;
const SOCK_STREAM = 1;
const SOL_SOCKET = 65535;
const SOL_TCP = 6;
const SOL_UDP = 17;
const SOMAXCONN = 2147483647;
const SO_BROADCAST = 32;
const SO_DEBUG = 1;
const SO_DONTROUTE = 16;
const SO_ERROR = 4103;
const SO_KEEPALIVE = 8;
const SO_LINGER = 128;
const SO_OOBINLINE = 256;
const SO_RCVBUF = 4098;
const SO_RCVLOWAT = 4100;
const SO_RCVTIMEO = 4102;
const SO_REUSEADDR = 4;
const SO_SNDBUF = 4097;
const SO_SNDLOWAT = 4099;
const SO_SNDTIMEO = 4101;
const SO_TYPE = 4104;
const TCP_NODELAY = 1;
// No classes defined
function socket_select(&$read_fds, &$write_fds, &$except_fds, $tv_sec, $tv_usec = null)
{
}
function socket_create($domain, $type, $protocol)
{
}
function socket_create_listen($port, $backlog = null)
{
}
function socket_create_pair($domain, $type, $protocol, &$fd)
{
}
function socket_accept($socket)
{
}
function socket_set_nonblock($socket)
{
}
function socket_set_block($socket)
{
}
function socket_listen($socket, $backlog = null)
{
}
function socket_close($socket)
{
}
function socket_write($socket, $buf, $length = null)
{
}
function socket_read($socket, $length, $type = null)
{
}
function socket_getsockname($socket, &$addr, &$port = null)
{
}
function socket_getpeername($socket, &$addr, &$port = null)
{
}
function socket_connect($socket, $addr, $port = null)
{
}
function socket_strerror($errno)
{
}
function socket_bind($socket, $addr, $port = null)
{
}
function socket_recv($socket, &$buf, $len, $flags)
{
}
function socket_send($socket, $buf, $len, $flags)
{
}
function socket_recvfrom($socket, &$buf, $len, $flags, &$name, &$port = null)
{
}
function socket_sendto($socket, $buf, $len, $flags, $addr, $port = null)
{
}
function socket_get_option($socket, $level, $optname)
{
}
function socket_set_option($socket, $level, $optname, $optval)
{
}
function socket_shutdown($socket, $how = null)
{
}
function socket_last_error($socket = null)
{
}
function socket_clear_error($socket = null)
{
}
function socket_import_stream($stream)
{
}
function socket_export_stream($socket)
{
}
function socket_sendmsg($socket, $msghdr, $flags)
{
}
function socket_recvmsg($socket, &$msghdr, $flags)
{
}
function socket_cmsg_space($level, $type)
{
}
function socket_getopt($socket, $level, $optname)
{
}
function socket_setopt($socket, $level, $optname, $optval)
{
}