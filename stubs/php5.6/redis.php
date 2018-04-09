<?php
// Start of extension: redis
// - parsed on POSIX with PHP 5.6.34 (extension version 4.0.0)
// - parsed on Windows with PHP 5.6.34 (extension version 2.2.7)

class Redis
{
    /**
     * @var string
     */
    const AFTER = 'after';

    /**
     * @var int
     */
    const ATOMIC = 0;

    /**
     * @var string
     */
    const BEFORE = 'before';

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const COMPRESSION_NONE = 0;

    /**
     * @var int
     */
    const MULTI = 1;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const OPT_COMPRESSION = 7;

    /**
     * @var int
     */
    const OPT_PREFIX = 2;

    /**
     * @var int
     */
    const OPT_READ_TIMEOUT = 3;

    /**
     * @var int
     */
    const OPT_SCAN = 4;

    /**
     * @var int
     */
    const OPT_SERIALIZER = 1;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const OPT_TCP_KEEPALIVE = 6;

    /**
     * @var int
     */
    const PIPELINE = 2;

    /**
     * @var int
     */
    const REDIS_HASH = 5;

    /**
     * @var int
     */
    const REDIS_LIST = 3;

    /**
     * @var int
     */
    const REDIS_NOT_FOUND = 0;

    /**
     * @var int
     */
    const REDIS_SET = 2;

    /**
     * @var int
     */
    const REDIS_STRING = 1;

    /**
     * @var int
     */
    const REDIS_ZSET = 4;

    /**
     * @var int
     */
    const SCAN_NORETRY = 0;

    /**
     * @var int
     */
    const SCAN_RETRY = 1;

    /**
     * @var int
     */
    const SERIALIZER_NONE = 0;

    /**
     * @var int
     */
    const SERIALIZER_PHP = 1;

    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    public function _prefix()
    {
    }

    public function _serialize()
    {
    }

    public function _unserialize()
    {
    }

    public function append()
    {
    }

    public function auth()
    {
    }

    public function bgrewriteaof()
    {
    }

    public function bgSave()
    {
    }

    public function bitcount()
    {
    }

    public function bitop()
    {
    }

    public function bitpos()
    {
    }

    public function blPop()
    {
    }

    public function brPop()
    {
    }

    public function brpoplpush()
    {
    }

    public function clearLastError()
    {
    }

    public function client()
    {
    }

    public function close()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $args
     */
    public function command(...$args)
    {
    }

    public function config()
    {
    }

    public function connect()
    {
    }

    public function dbSize()
    {
    }

    public function debug()
    {
    }

    public function decr()
    {
    }

    public function decrBy()
    {
    }

    public function del()
    {
    }

    public function delete()
    {
    }

    public function discard()
    {
    }

    public function dump()
    {
    }

    public function echo()
    {
    }

    public function eval()
    {
    }

    public function evalsha()
    {
    }

    public function evaluate()
    {
    }

    public function evaluateSha()
    {
    }

    public function exec()
    {
    }

    public function exists()
    {
    }

    public function expire()
    {
    }

    public function expireAt()
    {
    }

    public function flushAll()
    {
    }

    public function flushDB()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $lng
     * @param mixed $lat
     * @param mixed $member
     * @param mixed $other_triples
     */
    public function geoadd($key, $lng, $lat, $member, ...$other_triples)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $src
     * @param mixed $dst
     * @param mixed $unit
     */
    public function geodist($key, $src, $dst, $unit = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $member
     * @param mixed $other_members
     */
    public function geohash($key, $member, ...$other_members)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $member
     * @param mixed $other_members
     */
    public function geopos($key, $member, ...$other_members)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $lng
     * @param mixed $lan
     * @param mixed $radius
     * @param mixed $unit
     * @param array $opts
     */
    public function georadius($key, $lng, $lan, $radius, $unit, array $opts = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $member
     * @param mixed $radius
     * @param mixed $unit
     * @param array $opts
     */
    public function georadiusbymember($key, $member, $radius, $unit, array $opts = null)
    {
    }

    public function get()
    {
    }

    public function getAuth()
    {
    }

    public function getBit()
    {
    }

    public function getDBNum()
    {
    }

    public function getHost()
    {
    }

    public function getKeys()
    {
    }

    public function getLastError()
    {
    }

    public function getMode()
    {
    }

    public function getMultiple()
    {
    }

    public function getOption()
    {
    }

    public function getPersistentID()
    {
    }

    public function getPort()
    {
    }

    public function getRange()
    {
    }

    public function getReadTimeout()
    {
    }

    public function getSet()
    {
    }

    public function getTimeout()
    {
    }

    public function hDel()
    {
    }

    public function hExists()
    {
    }

    public function hGet()
    {
    }

    public function hGetAll()
    {
    }

    public function hIncrBy()
    {
    }

    public function hIncrByFloat()
    {
    }

    public function hKeys()
    {
    }

    public function hLen()
    {
    }

    public function hMget()
    {
    }

    public function hMset()
    {
    }

    /**
     * @param mixed $str_key
     * @param mixed $i_iterator
     * @param mixed $str_pattern
     * @param mixed $i_count
     */
    public function hscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }

    public function hSet()
    {
    }

    public function hSetNx()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $member
     */
    public function hStrLen($key, $member)
    {
    }

    public function hVals()
    {
    }

    public function incr()
    {
    }

    public function incrBy()
    {
    }

    public function incrByFloat()
    {
    }

    public function info()
    {
    }

    public function isConnected()
    {
    }

    public function keys()
    {
    }

    public function lastSave()
    {
    }

    public function lGet()
    {
    }

    public function lGetRange()
    {
    }

    public function lindex()
    {
    }

    public function lInsert()
    {
    }

    public function listTrim()
    {
    }

    public function lLen()
    {
    }

    public function lPop()
    {
    }

    public function lPush()
    {
    }

    public function lPushx()
    {
    }

    public function lrange()
    {
    }

    public function lrem()
    {
    }

    public function lRemove()
    {
    }

    public function lSet()
    {
    }

    public function lSize()
    {
    }

    public function ltrim()
    {
    }

    public function mget()
    {
    }

    public function migrate()
    {
    }

    public function move()
    {
    }

    public function mset()
    {
    }

    public function msetnx()
    {
    }

    public function multi()
    {
    }

    public function object()
    {
    }

    public function open()
    {
    }

    public function pconnect()
    {
    }

    public function persist()
    {
    }

    public function pexpire()
    {
    }

    public function pexpireAt()
    {
    }

    public function pfadd()
    {
    }

    public function pfcount()
    {
    }

    public function pfmerge()
    {
    }

    public function ping()
    {
    }

    public function pipeline()
    {
    }

    public function popen()
    {
    }

    public function psetex()
    {
    }

    public function psubscribe()
    {
    }

    public function pttl()
    {
    }

    public function publish()
    {
    }

    public function pubsub()
    {
    }

    public function punsubscribe()
    {
    }

    public function randomKey()
    {
    }

    public function rawCommand()
    {
    }

    public function rename()
    {
    }

    public function renameKey()
    {
    }

    public function renameNx()
    {
    }

    /**
     * WARNING: this may be available on Windows but not on POSIX
     */
    public function resetStat()
    {
    }

    public function restore()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     */
    public function role()
    {
    }

    public function rPop()
    {
    }

    public function rpoplpush()
    {
    }

    public function rPush()
    {
    }

    public function rPushx()
    {
    }

    public function sAdd()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param array $options
     */
    public function sAddArray($key, array $options)
    {
    }

    public function save()
    {
    }

    /**
     * @param mixed $i_iterator
     * @param mixed $str_pattern
     * @param mixed $i_count
     */
    public function scan(&$i_iterator, $str_pattern = null, $i_count = null)
    {
    }

    public function scard()
    {
    }

    public function sContains()
    {
    }

    public function script()
    {
    }

    public function sDiff()
    {
    }

    public function sDiffStore()
    {
    }

    public function select()
    {
    }

    public function sendEcho()
    {
    }

    public function set()
    {
    }

    public function setBit()
    {
    }

    public function setex()
    {
    }

    public function setnx()
    {
    }

    public function setOption()
    {
    }

    public function setRange()
    {
    }

    public function setTimeout()
    {
    }

    public function sGetMembers()
    {
    }

    public function sInter()
    {
    }

    public function sInterStore()
    {
    }

    public function sismember()
    {
    }

    public function slaveof()
    {
    }

    public function slowlog()
    {
    }

    public function sMembers()
    {
    }

    public function sMove()
    {
    }

    public function sort()
    {
    }

    public function sortAsc()
    {
    }

    public function sortAscAlpha()
    {
    }

    public function sortDesc()
    {
    }

    public function sortDescAlpha()
    {
    }

    public function sPop()
    {
    }

    public function sRandMember()
    {
    }

    public function srem()
    {
    }

    public function sRemove()
    {
    }

    /**
     * @param mixed $str_key
     * @param mixed $i_iterator
     * @param mixed $str_pattern
     * @param mixed $i_count
     */
    public function sscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }

    public function sSize()
    {
    }

    public function strlen()
    {
    }

    public function subscribe()
    {
    }

    public function substr()
    {
    }

    public function sUnion()
    {
    }

    public function sUnionStore()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $srcdb
     * @param mixed $dstdb
     */
    public function swapdb($srcdb, $dstdb)
    {
    }

    public function time()
    {
    }

    public function ttl()
    {
    }

    public function type()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function unlink($key, ...$other_keys)
    {
    }

    public function unsubscribe()
    {
    }

    public function unwatch()
    {
    }

    public function wait()
    {
    }

    public function watch()
    {
    }

    public function zAdd()
    {
    }

    public function zCard()
    {
    }

    public function zCount()
    {
    }

    public function zDelete()
    {
    }

    public function zDeleteRangeByRank()
    {
    }

    public function zDeleteRangeByScore()
    {
    }

    public function zIncrBy()
    {
    }

    public function zInter()
    {
    }

    public function zinterstore()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     */
    public function zLexCount($key, $min, $max)
    {
    }

    public function zRange()
    {
    }

    public function zRangeByLex()
    {
    }

    public function zRangeByScore()
    {
    }

    public function zRank()
    {
    }

    public function zRem()
    {
    }

    public function zRemove()
    {
    }

    public function zRemoveRangeByScore()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     */
    public function zRemRangeByLex($key, $min, $max)
    {
    }

    public function zRemRangeByRank()
    {
    }

    public function zRemRangeByScore()
    {
    }

    public function zReverseRange()
    {
    }

    public function zrevrange()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     * @param mixed $offset
     * @param mixed $limit
     */
    public function zRevRangeByLex($key, $min, $max, $offset = null, $limit = null)
    {
    }

    public function zRevRangeByScore()
    {
    }

    public function zRevRank()
    {
    }

    /**
     * @param mixed $str_key
     * @param mixed $i_iterator
     * @param mixed $str_pattern
     * @param mixed $i_count
     */
    public function zscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }

    public function zScore()
    {
    }

    public function zSize()
    {
    }

    public function zUnion()
    {
    }

    public function zunionstore()
    {
    }
}

class RedisArray
{
    /**
     * @param mixed $function_name
     * @param mixed $arguments
     */
    public function __call($function_name, $arguments)
    {
    }

    public function __construct()
    {
    }

    public function _distributor()
    {
    }

    public function _function()
    {
    }

    public function _hosts()
    {
    }

    public function _instance()
    {
    }

    public function _rehash()
    {
    }

    public function _target()
    {
    }

    public function bgsave()
    {
    }

    public function del()
    {
    }

    public function delete()
    {
    }

    public function discard()
    {
    }

    public function exec()
    {
    }

    public function flushall()
    {
    }

    public function flushdb()
    {
    }

    public function getMultiple()
    {
    }

    public function getOption()
    {
    }

    public function info()
    {
    }

    public function keys()
    {
    }

    public function mget()
    {
    }

    public function mset()
    {
    }

    public function multi()
    {
    }

    public function ping()
    {
    }

    public function save()
    {
    }

    public function select()
    {
    }

    public function setOption()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     */
    public function unlink()
    {
    }

    public function unwatch()
    {
    }
}

/**
 * WARNING: this may be available on POSIX but not on Windows
 */
class RedisCluster
{
    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var string
     */
    const AFTER = 'after';

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const ATOMIC = 0;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var string
     */
    const BEFORE = 'before';

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const COMPRESSION_NONE = 0;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const FAILOVER_DISTRIBUTE = 2;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const FAILOVER_DISTRIBUTE_SLAVES = 3;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const FAILOVER_ERROR = 1;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const FAILOVER_NONE = 0;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const MULTI = 1;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const OPT_COMPRESSION = 7;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const OPT_PREFIX = 2;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const OPT_READ_TIMEOUT = 3;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const OPT_SCAN = 4;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const OPT_SERIALIZER = 1;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const OPT_SLAVE_FAILOVER = 5;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const OPT_TCP_KEEPALIVE = 6;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const REDIS_HASH = 5;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const REDIS_LIST = 3;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const REDIS_NOT_FOUND = 0;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const REDIS_SET = 2;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const REDIS_STRING = 1;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const REDIS_ZSET = 4;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const SCAN_NORETRY = 0;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const SCAN_RETRY = 1;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const SERIALIZER_NONE = 0;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @var int
     */
    const SERIALIZER_PHP = 1;

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $name
     * @param array $seeds
     * @param mixed $timeout
     * @param mixed $read_timeout
     * @param mixed $persistent
     */
    public function __construct($name, array $seeds = null, $timeout = null, $read_timeout = null, $persistent = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     */
    public function _masters()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function _prefix($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     */
    public function _redir()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $value
     */
    public function _serialize($value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $value
     */
    public function _unserialize($value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $value
     */
    public function append($key, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key_or_address
     */
    public function bgrewriteaof($key_or_address)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key_or_address
     */
    public function bgsave($key_or_address)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function bitcount($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $operation
     * @param mixed $ret_key
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function bitop($operation, $ret_key, $key, ...$other_keys)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $bit
     * @param mixed $start
     * @param mixed $end
     */
    public function bitpos($key, $bit, $start = null, $end = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $timeout_or_key
     * @param mixed $extra_args
     */
    public function blpop($key, $timeout_or_key, ...$extra_args)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $timeout_or_key
     * @param mixed $extra_args
     */
    public function brpop($key, $timeout_or_key, ...$extra_args)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $src
     * @param mixed $dst
     * @param mixed $timeout
     */
    public function brpoplpush($src, $dst, $timeout)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     */
    public function clearlasterror()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key_or_address
     * @param mixed $arg
     * @param mixed $other_args
     */
    public function client($key_or_address, $arg = null, ...$other_args)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     */
    public function close()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key_or_address
     * @param mixed $arg
     * @param mixed $other_args
     */
    public function cluster($key_or_address, $arg = null, ...$other_args)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $args
     */
    public function command(...$args)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key_or_address
     * @param mixed $arg
     * @param mixed $other_args
     */
    public function config($key_or_address, $arg = null, ...$other_args)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key_or_address
     */
    public function dbsize($key_or_address)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function decr($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $value
     */
    public function decrby($key, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function del($key, ...$other_keys)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     */
    public function discard()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function dump($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $msg
     */
    public function echo($msg)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $script
     * @param mixed $args
     * @param mixed $num_keys
     */
    public function eval($script, $args = null, $num_keys = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $script_sha
     * @param mixed $args
     * @param mixed $num_keys
     */
    public function evalsha($script_sha, $args = null, $num_keys = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     */
    public function exec()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function exists($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $timeout
     */
    public function expire($key, $timeout)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $timestamp
     */
    public function expireat($key, $timestamp)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key_or_address
     */
    public function flushall($key_or_address)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key_or_address
     */
    public function flushdb($key_or_address)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $lng
     * @param mixed $lat
     * @param mixed $member
     * @param mixed $other_triples
     */
    public function geoadd($key, $lng, $lat, $member, ...$other_triples)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $src
     * @param mixed $dst
     * @param mixed $unit
     */
    public function geodist($key, $src, $dst, $unit = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $member
     * @param mixed $other_members
     */
    public function geohash($key, $member, ...$other_members)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $member
     * @param mixed $other_members
     */
    public function geopos($key, $member, ...$other_members)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $lng
     * @param mixed $lan
     * @param mixed $radius
     * @param mixed $unit
     * @param array $opts
     */
    public function georadius($key, $lng, $lan, $radius, $unit, array $opts = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $member
     * @param mixed $radius
     * @param mixed $unit
     * @param array $opts
     */
    public function georadiusbymember($key, $member, $radius, $unit, array $opts = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function get($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $offset
     */
    public function getbit($key, $offset)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     */
    public function getlasterror()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     */
    public function getmode()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $option
     */
    public function getoption($option)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     */
    public function getrange($key, $start, $end)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $value
     */
    public function getset($key, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $member
     * @param mixed $other_members
     */
    public function hdel($key, $member, ...$other_members)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $member
     */
    public function hexists($key, $member)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $member
     */
    public function hget($key, $member)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function hgetall($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $member
     * @param mixed $value
     */
    public function hincrby($key, $member, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $member
     * @param mixed $value
     */
    public function hincrbyfloat($key, $member, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function hkeys($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function hlen($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param array $keys
     */
    public function hmget($key, array $keys)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param array $pairs
     */
    public function hmset($key, array $pairs)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $str_key
     * @param mixed $i_iterator
     * @param mixed $str_pattern
     * @param mixed $i_count
     */
    public function hscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $member
     * @param mixed $value
     */
    public function hset($key, $member, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $member
     * @param mixed $value
     */
    public function hsetnx($key, $member, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $member
     */
    public function hstrlen($key, $member)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function hvals($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function incr($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $value
     */
    public function incrby($key, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $value
     */
    public function incrbyfloat($key, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key_or_address
     * @param mixed $option
     */
    public function info($key_or_address, $option = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $pattern
     */
    public function keys($pattern)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key_or_address
     */
    public function lastsave($key_or_address)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $index
     */
    public function lget($key, $index)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $index
     */
    public function lindex($key, $index)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $position
     * @param mixed $pivot
     * @param mixed $value
     */
    public function linsert($key, $position, $pivot, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function llen($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function lpop($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $value
     */
    public function lpush($key, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $value
     */
    public function lpushx($key, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     */
    public function lrange($key, $start, $end)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $value
     */
    public function lrem($key, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $index
     * @param mixed $value
     */
    public function lset($key, $index, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $start
     * @param mixed $stop
     */
    public function ltrim($key, $start, $stop)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param array $keys
     */
    public function mget(array $keys)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param array $pairs
     */
    public function mset(array $pairs)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param array $pairs
     */
    public function msetnx(array $pairs)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     */
    public function multi()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $field
     * @param mixed $key
     */
    public function object($field, $key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function persist($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $timestamp
     */
    public function pexpire($key, $timestamp)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $timestamp
     */
    public function pexpireat($key, $timestamp)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param array $elements
     */
    public function pfadd($key, array $elements)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function pfcount($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $dstkey
     * @param array $keys
     */
    public function pfmerge($dstkey, array $keys)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key_or_address
     */
    public function ping($key_or_address)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $expire
     * @param mixed $value
     */
    public function psetex($key, $expire, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param array $patterns
     */
    public function psubscribe(array $patterns)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function pttl($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $channel
     * @param mixed $message
     */
    public function publish($channel, $message)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key_or_address
     * @param mixed $arg
     * @param mixed $other_args
     */
    public function pubsub($key_or_address, $arg = null, ...$other_args)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $pattern
     * @param mixed $other_patterns
     */
    public function punsubscribe($pattern, ...$other_patterns)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key_or_address
     */
    public function randomkey($key_or_address)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $cmd
     * @param mixed $args
     */
    public function rawcommand($cmd, ...$args)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $newkey
     */
    public function rename($key, $newkey)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $newkey
     */
    public function renamenx($key, $newkey)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $ttl
     * @param mixed $key
     * @param mixed $value
     */
    public function restore($ttl, $key, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     */
    public function role()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function rpop($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $src
     * @param mixed $dst
     */
    public function rpoplpush($src, $dst)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $value
     */
    public function rpush($key, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $value
     */
    public function rpushx($key, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $value
     */
    public function sadd($key, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param array $options
     */
    public function saddarray($key, array $options)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key_or_address
     */
    public function save($key_or_address)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $i_iterator
     * @param mixed $str_node
     * @param mixed $str_pattern
     * @param mixed $i_count
     */
    public function scan(&$i_iterator, $str_node, $str_pattern = null, $i_count = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function scard($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key_or_address
     * @param mixed $arg
     * @param mixed $other_args
     */
    public function script($key_or_address, $arg = null, ...$other_args)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function sdiff($key, ...$other_keys)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $dst
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function sdiffstore($dst, $key, ...$other_keys)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $value
     * @param mixed $timeout
     * @param mixed $opt
     */
    public function set($key, $value, $timeout = null, $opt = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $offset
     * @param mixed $value
     */
    public function setbit($key, $offset, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $expire
     * @param mixed $value
     */
    public function setex($key, $expire, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $value
     */
    public function setnx($key, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $option
     * @param mixed $value
     */
    public function setoption($option, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $offset
     * @param mixed $value
     */
    public function setrange($key, $offset, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function sinter($key, ...$other_keys)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $dst
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function sinterstore($dst, $key, ...$other_keys)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $value
     */
    public function sismember($key, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key_or_address
     * @param mixed $arg
     * @param mixed $other_args
     */
    public function slowlog($key_or_address, $arg = null, ...$other_args)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function smembers($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $src
     * @param mixed $dst
     * @param mixed $value
     */
    public function smove($src, $dst, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param array $options
     */
    public function sort($key, array $options = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function spop($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $count
     */
    public function srandmember($key, $count = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $value
     */
    public function srem($key, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $str_key
     * @param mixed $i_iterator
     * @param mixed $str_pattern
     * @param mixed $i_count
     */
    public function sscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function strlen($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param array $channels
     */
    public function subscribe(array $channels)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function sunion($key, ...$other_keys)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $dst
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function sunionstore($dst, $key, ...$other_keys)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     */
    public function time()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function ttl($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function type($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function unlink($key, ...$other_keys)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $channel
     * @param mixed $other_channels
     */
    public function unsubscribe($channel, ...$other_channels)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     */
    public function unwatch()
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function watch($key, ...$other_keys)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $score
     * @param mixed $value
     */
    public function zadd($key, $score, $value)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     */
    public function zcard($key)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     */
    public function zcount($key, $min, $max)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $value
     * @param mixed $member
     */
    public function zincrby($key, $value, $member)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param array $keys
     * @param array|null $weights
     * @param mixed $aggregate
     */
    public function zinterstore($key, array $keys, array $weights = null, $aggregate = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     */
    public function zlexcount($key, $min, $max)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     * @param mixed $scores
     */
    public function zrange($key, $start, $end, $scores = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     * @param mixed $offset
     * @param mixed $limit
     */
    public function zrangebylex($key, $min, $max, $offset = null, $limit = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     * @param array $options
     */
    public function zrangebyscore($key, $start, $end, array $options = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $member
     */
    public function zrank($key, $member)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $member
     * @param mixed $other_members
     */
    public function zrem($key, $member, ...$other_members)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     */
    public function zremrangebylex($key, $min, $max)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     */
    public function zremrangebyrank($key, $min, $max)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     */
    public function zremrangebyscore($key, $min, $max)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     * @param mixed $scores
     */
    public function zrevrange($key, $start, $end, $scores = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     * @param mixed $offset
     * @param mixed $limit
     */
    public function zrevrangebylex($key, $min, $max, $offset = null, $limit = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     * @param array $options
     */
    public function zrevrangebyscore($key, $start, $end, array $options = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $member
     */
    public function zrevrank($key, $member)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $str_key
     * @param mixed $i_iterator
     * @param mixed $str_pattern
     * @param mixed $i_count
     */
    public function zscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param mixed $member
     */
    public function zscore($key, $member)
    {
    }

    /**
     * WARNING: this may be available on POSIX but not on Windows
     *
     * @param mixed $key
     * @param array $keys
     * @param array|null $weights
     * @param mixed $aggregate
     */
    public function zunionstore($key, array $keys, array $weights = null, $aggregate = null)
    {
    }
}

/**
 * WARNING: this may be available on POSIX but not on Windows
 */
class RedisClusterException extends Exception
{
}

class RedisException extends RuntimeException
{
}
