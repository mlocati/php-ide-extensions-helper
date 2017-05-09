<?php
// Documentation generated automatically for extension redis v3.1.2 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
/*
 * INI entries:
 * redis.arrays.names = ''
 * redis.arrays.hosts = ''
 * redis.arrays.previous = ''
 * redis.arrays.functions = ''
 * redis.arrays.index = ''
 * redis.arrays.autorehash = ''
 * redis.clusters.seeds = ''
 * redis.clusters.timeout = ''
 * redis.clusters.read_timeout = ''
 */
// No constants defined
class Redis
{
    const AFTER = 'after';
    const ATOMIC = 0;
    const BEFORE = 'before';
    const MULTI = 1;
    const OPT_PREFIX = 2;
    const OPT_READ_TIMEOUT = 3;
    const OPT_SCAN = 4;
    const OPT_SERIALIZER = 1;
    const PIPELINE = 2;
    const REDIS_HASH = 5;
    const REDIS_LIST = 3;
    const REDIS_NOT_FOUND = 0;
    const REDIS_SET = 2;
    const REDIS_STRING = 1;
    const REDIS_ZSET = 4;
    const SCAN_NORETRY = 0;
    const SCAN_RETRY = 1;
    const SERIALIZER_NONE = 0;
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
    public function command()
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
    public function geoadd()
    {
    }
    public function geodist()
    {
    }
    public function geohash()
    {
    }
    public function geopos()
    {
    }
    public function georadius()
    {
    }
    public function georadiusbymember()
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
    public function hscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }
    public function hSet()
    {
    }
    public function hSetNx()
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
    public function rawcommand()
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
    public function restore()
    {
    }
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
    public function sAddArray()
    {
    }
    public function save()
    {
    }
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
    public function time()
    {
    }
    public function ttl()
    {
    }
    public function type()
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
    public function zLexCount()
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
    public function zRemRangeByLex()
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
    public function zRevRange()
    {
    }
    public function zRevRangeByLex()
    {
    }
    public function zRevRangeByScore()
    {
    }
    public function zRevRank()
    {
    }
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
    public function unwatch()
    {
    }
}
class RedisCluster
{
    const AFTER = 'after';
    const ATOMIC = 0;
    const BEFORE = 'before';
    const FAILOVER_DISTRIBUTE = 2;
    const FAILOVER_DISTRIBUTE_SLAVES = 3;
    const FAILOVER_ERROR = 1;
    const FAILOVER_NONE = 0;
    const MULTI = 1;
    const OPT_PREFIX = 2;
    const OPT_READ_TIMEOUT = 3;
    const OPT_SCAN = 4;
    const OPT_SERIALIZER = 1;
    const OPT_SLAVE_FAILOVER = 5;
    const REDIS_HASH = 5;
    const REDIS_LIST = 3;
    const REDIS_NOT_FOUND = 0;
    const REDIS_SET = 2;
    const REDIS_STRING = 1;
    const REDIS_ZSET = 4;
    const SCAN_NORETRY = 0;
    const SCAN_RETRY = 1;
    const SERIALIZER_NONE = 0;
    const SERIALIZER_PHP = 1;
    public function __construct()
    {
    }
    public function _masters()
    {
    }
    public function _prefix()
    {
    }
    public function _redir()
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
    public function bgrewriteaof()
    {
    }
    public function bgsave()
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
    public function blpop()
    {
    }
    public function brpop()
    {
    }
    public function brpoplpush()
    {
    }
    public function clearlasterror()
    {
    }
    public function client()
    {
    }
    public function close()
    {
    }
    public function cluster()
    {
    }
    public function command()
    {
    }
    public function config()
    {
    }
    public function dbsize()
    {
    }
    public function decr()
    {
    }
    public function decrby()
    {
    }
    public function del()
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
    public function exec()
    {
    }
    public function exists()
    {
    }
    public function expire()
    {
    }
    public function expireat()
    {
    }
    public function flushall()
    {
    }
    public function flushdb()
    {
    }
    public function geoadd()
    {
    }
    public function geodist()
    {
    }
    public function geohash()
    {
    }
    public function geopos()
    {
    }
    public function georadius()
    {
    }
    public function georadiusbymember()
    {
    }
    public function get()
    {
    }
    public function getbit()
    {
    }
    public function getlasterror()
    {
    }
    public function getmode()
    {
    }
    public function getoption()
    {
    }
    public function getrange()
    {
    }
    public function getset()
    {
    }
    public function hdel()
    {
    }
    public function hexists()
    {
    }
    public function hget()
    {
    }
    public function hgetall()
    {
    }
    public function hincrby()
    {
    }
    public function hincrbyfloat()
    {
    }
    public function hkeys()
    {
    }
    public function hlen()
    {
    }
    public function hmget()
    {
    }
    public function hmset()
    {
    }
    public function hscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }
    public function hset()
    {
    }
    public function hsetnx()
    {
    }
    public function hvals()
    {
    }
    public function incr()
    {
    }
    public function incrby()
    {
    }
    public function incrbyfloat()
    {
    }
    public function info()
    {
    }
    public function keys()
    {
    }
    public function lastsave()
    {
    }
    public function lget()
    {
    }
    public function lindex()
    {
    }
    public function linsert()
    {
    }
    public function llen()
    {
    }
    public function lpop()
    {
    }
    public function lpush()
    {
    }
    public function lpushx()
    {
    }
    public function lrange()
    {
    }
    public function lrem()
    {
    }
    public function lset()
    {
    }
    public function ltrim()
    {
    }
    public function mget()
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
    public function persist()
    {
    }
    public function pexpire()
    {
    }
    public function pexpireat()
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
    public function randomkey()
    {
    }
    public function rawcommand()
    {
    }
    public function rename()
    {
    }
    public function renamenx()
    {
    }
    public function restore()
    {
    }
    public function role()
    {
    }
    public function rpop()
    {
    }
    public function rpoplpush()
    {
    }
    public function rpush()
    {
    }
    public function rpushx()
    {
    }
    public function sadd()
    {
    }
    public function saddarray()
    {
    }
    public function save()
    {
    }
    public function scan(&$i_iterator, $str_node, $str_pattern = null, $i_count = null)
    {
    }
    public function scard()
    {
    }
    public function script()
    {
    }
    public function sdiff()
    {
    }
    public function sdiffstore()
    {
    }
    public function set()
    {
    }
    public function setbit()
    {
    }
    public function setex()
    {
    }
    public function setnx()
    {
    }
    public function setoption()
    {
    }
    public function setrange()
    {
    }
    public function sinter()
    {
    }
    public function sinterstore()
    {
    }
    public function sismember()
    {
    }
    public function slowlog()
    {
    }
    public function smembers()
    {
    }
    public function smove()
    {
    }
    public function sort()
    {
    }
    public function spop()
    {
    }
    public function srandmember()
    {
    }
    public function srem()
    {
    }
    public function sscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }
    public function strlen()
    {
    }
    public function subscribe()
    {
    }
    public function sunion()
    {
    }
    public function sunionstore()
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
    public function unsubscribe()
    {
    }
    public function unwatch()
    {
    }
    public function watch()
    {
    }
    public function zadd()
    {
    }
    public function zcard()
    {
    }
    public function zcount()
    {
    }
    public function zincrby()
    {
    }
    public function zinterstore()
    {
    }
    public function zlexcount()
    {
    }
    public function zrange()
    {
    }
    public function zrangebylex()
    {
    }
    public function zrangebyscore()
    {
    }
    public function zrank()
    {
    }
    public function zrem()
    {
    }
    public function zremrangebylex()
    {
    }
    public function zremrangebyrank()
    {
    }
    public function zremrangebyscore()
    {
    }
    public function zrevrange()
    {
    }
    public function zrevrangebylex()
    {
    }
    public function zrevrangebyscore()
    {
    }
    public function zrevrank()
    {
    }
    public function zscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }
    public function zscore()
    {
    }
    public function zunionstore()
    {
    }
}
class RedisClusterException extends RuntimeException
{
    protected $code = 0;
    protected $file;
    protected $line;
    protected $message = '';
    public function __construct($message = null, $code = null, $previous = null)
    {
    }
    public function __toString()
    {
    }
    public function __wakeup()
    {
    }
    final public function getCode()
    {
    }
    final public function getFile()
    {
    }
    final public function getLine()
    {
    }
    final public function getMessage()
    {
    }
    final public function getPrevious()
    {
    }
    final public function getTrace()
    {
    }
    final public function getTraceAsString()
    {
    }
    final private function __clone()
    {
    }
}
class RedisException extends RuntimeException
{
    protected $code = 0;
    protected $file;
    protected $line;
    protected $message = '';
    public function __construct($message = null, $code = null, $previous = null)
    {
    }
    public function __toString()
    {
    }
    public function __wakeup()
    {
    }
    final public function getCode()
    {
    }
    final public function getFile()
    {
    }
    final public function getLine()
    {
    }
    final public function getMessage()
    {
    }
    final public function getPrevious()
    {
    }
    final public function getTrace()
    {
    }
    final public function getTraceAsString()
    {
    }
    final private function __clone()
    {
    }
}
// No functions defined