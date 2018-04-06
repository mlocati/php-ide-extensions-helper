<?php
// Start of extension: redis
// - parsed on POSIX with PHP 7.2.3 (extension version 4.0.0)

class Redis
{
    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    /**
     * @param mixed $key
     */
    public function _prefix($key)
    {
    }

    /**
     * @param mixed $value
     */
    public function _serialize($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function _unserialize($value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function append($key, $value)
    {
    }

    /**
     * @param mixed $password
     */
    public function auth($password)
    {
    }

    public function bgrewriteaof()
    {
    }

    public function bgSave()
    {
    }

    /**
     * @param mixed $key
     */
    public function bitcount($key)
    {
    }

    /**
     * @param mixed $operation
     * @param mixed $ret_key
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function bitop($operation, $ret_key, $key, ...$other_keys)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $bit
     * @param mixed|null $start
     * @param mixed|null $end
     */
    public function bitpos($key, $bit, $start = null, $end = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $timeout_or_key
     * @param mixed $extra_args
     */
    public function blPop($key, $timeout_or_key, ...$extra_args)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $timeout_or_key
     * @param mixed $extra_args
     */
    public function brPop($key, $timeout_or_key, ...$extra_args)
    {
    }

    /**
     * @param mixed $src
     * @param mixed $dst
     * @param mixed $timeout
     */
    public function brpoplpush($src, $dst, $timeout)
    {
    }

    public function clearLastError()
    {
    }

    /**
     * @param mixed $cmd
     * @param mixed $args
     */
    public function client($cmd, ...$args)
    {
    }

    public function close()
    {
    }

    /**
     * @param mixed $args
     */
    public function command(...$args)
    {
    }

    /**
     * @param mixed $cmd
     * @param mixed $key
     * @param mixed|null $value
     */
    public function config($cmd, $key, $value = null)
    {
    }

    /**
     * @param mixed $host
     * @param mixed $port
     * @param mixed|null $timeout
     * @param mixed|null $retry_interval
     */
    public function connect($host, $port, $timeout = null, $retry_interval = null)
    {
    }

    public function dbSize()
    {
    }

    /**
     * @param mixed $key
     */
    public function debug($key)
    {
    }

    /**
     * @param mixed $key
     */
    public function decr($key)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function decrBy($key, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function del($key, ...$other_keys)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function delete($key, ...$other_keys)
    {
    }

    public function discard()
    {
    }

    /**
     * @param mixed $key
     */
    public function dump($key)
    {
    }

    /**
     * @param mixed $msg
     */
    public function echo($msg)
    {
    }

    /**
     * @param mixed $script
     * @param mixed|null $args
     * @param mixed|null $num_keys
     */
    public function eval($script, $args = null, $num_keys = null)
    {
    }

    /**
     * @param mixed $script_sha
     * @param mixed|null $args
     * @param mixed|null $num_keys
     */
    public function evalsha($script_sha, $args = null, $num_keys = null)
    {
    }

    /**
     * @param mixed $script
     * @param mixed|null $args
     * @param mixed|null $num_keys
     */
    public function evaluate($script, $args = null, $num_keys = null)
    {
    }

    /**
     * @param mixed $script_sha
     * @param mixed|null $args
     * @param mixed|null $num_keys
     */
    public function evaluateSha($script_sha, $args = null, $num_keys = null)
    {
    }

    public function exec()
    {
    }

    /**
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function exists($key, ...$other_keys)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $timeout
     */
    public function expire($key, $timeout)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $timestamp
     */
    public function expireAt($key, $timestamp)
    {
    }

    public function flushAll()
    {
    }

    public function flushDB()
    {
    }

    /**
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
     * @param mixed $key
     * @param mixed $src
     * @param mixed $dst
     * @param mixed|null $unit
     */
    public function geodist($key, $src, $dst, $unit = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     * @param mixed $other_members
     */
    public function geohash($key, $member, ...$other_members)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     * @param mixed $other_members
     */
    public function geopos($key, $member, ...$other_members)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $lng
     * @param mixed $lan
     * @param mixed $radius
     * @param mixed $unit
     * @param array[]|null $opts
     */
    public function georadius($key, $lng, $lan, $radius, $unit, $opts = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     * @param mixed $radius
     * @param mixed $unit
     * @param array[]|null $opts
     */
    public function georadiusbymember($key, $member, $radius, $unit, $opts = null)
    {
    }

    /**
     * @param mixed $key
     */
    public function get($key)
    {
    }

    public function getAuth()
    {
    }

    /**
     * @param mixed $key
     * @param mixed $offset
     */
    public function getBit($key, $offset)
    {
    }

    public function getDBNum()
    {
    }

    public function getHost()
    {
    }

    /**
     * @param mixed $pattern
     */
    public function getKeys($pattern)
    {
    }

    public function getLastError()
    {
    }

    public function getMode()
    {
    }

    /**
     * @param array[] $keys
     */
    public function getMultiple($keys)
    {
    }

    /**
     * @param mixed $option
     */
    public function getOption($option)
    {
    }

    public function getPersistentID()
    {
    }

    public function getPort()
    {
    }

    /**
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     */
    public function getRange($key, $start, $end)
    {
    }

    public function getReadTimeout()
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function getSet($key, $value)
    {
    }

    public function getTimeout()
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     * @param mixed $other_members
     */
    public function hDel($key, $member, ...$other_members)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     */
    public function hExists($key, $member)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     */
    public function hGet($key, $member)
    {
    }

    /**
     * @param mixed $key
     */
    public function hGetAll($key)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     * @param mixed $value
     */
    public function hIncrBy($key, $member, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     * @param mixed $value
     */
    public function hIncrByFloat($key, $member, $value)
    {
    }

    /**
     * @param mixed $key
     */
    public function hKeys($key)
    {
    }

    /**
     * @param mixed $key
     */
    public function hLen($key)
    {
    }

    /**
     * @param mixed $key
     * @param array[] $keys
     */
    public function hMget($key, $keys)
    {
    }

    /**
     * @param mixed $key
     * @param array[] $pairs
     */
    public function hMset($key, $pairs)
    {
    }

    /**
     * @param mixed $str_key
     * @param mixed $i_iterator
     * @param mixed|null $str_pattern
     * @param mixed|null $i_count
     */
    public function hscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     * @param mixed $value
     */
    public function hSet($key, $member, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     * @param mixed $value
     */
    public function hSetNx($key, $member, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     */
    public function hStrLen($key, $member)
    {
    }

    /**
     * @param mixed $key
     */
    public function hVals($key)
    {
    }

    /**
     * @param mixed $key
     */
    public function incr($key)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function incrBy($key, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function incrByFloat($key, $value)
    {
    }

    /**
     * @param mixed|null $option
     */
    public function info($option = null)
    {
    }

    public function isConnected()
    {
    }

    /**
     * @param mixed $pattern
     */
    public function keys($pattern)
    {
    }

    public function lastSave()
    {
    }

    /**
     * @param mixed $key
     * @param mixed $index
     */
    public function lGet($key, $index)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     */
    public function lGetRange($key, $start, $end)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $index
     */
    public function lindex($key, $index)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $position
     * @param mixed $pivot
     * @param mixed $value
     */
    public function lInsert($key, $position, $pivot, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $start
     * @param mixed $stop
     */
    public function listTrim($key, $start, $stop)
    {
    }

    /**
     * @param mixed $key
     */
    public function lLen($key)
    {
    }

    /**
     * @param mixed $key
     */
    public function lPop($key)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function lPush($key, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function lPushx($key, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     */
    public function lrange($key, $start, $end)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     * @param mixed $count
     */
    public function lrem($key, $value, $count)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     * @param mixed $count
     */
    public function lRemove($key, $value, $count)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $index
     * @param mixed $value
     */
    public function lSet($key, $index, $value)
    {
    }

    /**
     * @param mixed $key
     */
    public function lSize($key)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $start
     * @param mixed $stop
     */
    public function ltrim($key, $start, $stop)
    {
    }

    /**
     * @param array[] $keys
     */
    public function mget($keys)
    {
    }

    /**
     * @param mixed $host
     * @param mixed $port
     * @param mixed $key
     * @param mixed $db
     * @param mixed $timeout
     * @param mixed|null $copy
     * @param mixed|null $replace
     */
    public function migrate($host, $port, $key, $db, $timeout, $copy = null, $replace = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $dbindex
     */
    public function move($key, $dbindex)
    {
    }

    /**
     * @param array[] $pairs
     */
    public function mset($pairs)
    {
    }

    /**
     * @param array[] $pairs
     */
    public function msetnx($pairs)
    {
    }

    public function multi()
    {
    }

    /**
     * @param mixed $field
     * @param mixed $key
     */
    public function object($field, $key)
    {
    }

    /**
     * @param mixed $host
     * @param mixed $port
     * @param mixed|null $timeout
     * @param mixed|null $retry_interval
     */
    public function open($host, $port, $timeout = null, $retry_interval = null)
    {
    }

    /**
     * @param mixed $host
     * @param mixed $port
     * @param mixed|null $timeout
     */
    public function pconnect($host, $port, $timeout = null)
    {
    }

    /**
     * @param mixed $key
     */
    public function persist($key)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $timestamp
     */
    public function pexpire($key, $timestamp)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $timestamp
     */
    public function pexpireAt($key, $timestamp)
    {
    }

    /**
     * @param mixed $key
     * @param array[] $elements
     */
    public function pfadd($key, $elements)
    {
    }

    /**
     * @param mixed $key
     */
    public function pfcount($key)
    {
    }

    /**
     * @param mixed $dstkey
     * @param array[] $keys
     */
    public function pfmerge($dstkey, $keys)
    {
    }

    public function ping()
    {
    }

    public function pipeline()
    {
    }

    /**
     * @param mixed $host
     * @param mixed $port
     * @param mixed|null $timeout
     */
    public function popen($host, $port, $timeout = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $expire
     * @param mixed $value
     */
    public function psetex($key, $expire, $value)
    {
    }

    /**
     * @param array[] $patterns
     */
    public function psubscribe($patterns)
    {
    }

    /**
     * @param mixed $key
     */
    public function pttl($key)
    {
    }

    /**
     * @param mixed $channel
     * @param mixed $message
     */
    public function publish($channel, $message)
    {
    }

    /**
     * @param mixed $cmd
     * @param mixed $args
     */
    public function pubsub($cmd, ...$args)
    {
    }

    /**
     * @param mixed $pattern
     * @param mixed $other_patterns
     */
    public function punsubscribe($pattern, ...$other_patterns)
    {
    }

    public function randomKey()
    {
    }

    /**
     * @param mixed $cmd
     * @param mixed $args
     */
    public function rawcommand($cmd, ...$args)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $newkey
     */
    public function rename($key, $newkey)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $newkey
     */
    public function renameKey($key, $newkey)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $newkey
     */
    public function renameNx($key, $newkey)
    {
    }

    /**
     * @param mixed $ttl
     * @param mixed $key
     * @param mixed $value
     */
    public function restore($ttl, $key, $value)
    {
    }

    public function role()
    {
    }

    /**
     * @param mixed $key
     */
    public function rPop($key)
    {
    }

    /**
     * @param mixed $src
     * @param mixed $dst
     */
    public function rpoplpush($src, $dst)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function rPush($key, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function rPushx($key, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function sAdd($key, $value)
    {
    }

    /**
     * @param mixed $key
     * @param array[] $options
     */
    public function sAddArray($key, $options)
    {
    }

    public function save()
    {
    }

    /**
     * @param mixed $i_iterator
     * @param mixed|null $str_pattern
     * @param mixed|null $i_count
     */
    public function scan(&$i_iterator, $str_pattern = null, $i_count = null)
    {
    }

    /**
     * @param mixed $key
     */
    public function scard($key)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function sContains($key, $value)
    {
    }

    /**
     * @param mixed $cmd
     * @param mixed $args
     */
    public function script($cmd, ...$args)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function sDiff($key, ...$other_keys)
    {
    }

    /**
     * @param mixed $dst
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function sDiffStore($dst, $key, ...$other_keys)
    {
    }

    /**
     * @param mixed $dbindex
     */
    public function select($dbindex)
    {
    }

    /**
     * @param mixed $msg
     */
    public function sendEcho($msg)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $timeout
     * @param mixed|null $opt
     */
    public function set($key, $value, $timeout = null, $opt = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $offset
     * @param mixed $value
     */
    public function setBit($key, $offset, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $expire
     * @param mixed $value
     */
    public function setex($key, $expire, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function setnx($key, $value)
    {
    }

    /**
     * @param mixed $option
     * @param mixed $value
     */
    public function setOption($option, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $offset
     * @param mixed $value
     */
    public function setRange($key, $offset, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $timeout
     */
    public function setTimeout($key, $timeout)
    {
    }

    /**
     * @param mixed $key
     */
    public function sGetMembers($key)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function sInter($key, ...$other_keys)
    {
    }

    /**
     * @param mixed $dst
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function sInterStore($dst, $key, ...$other_keys)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function sismember($key, $value)
    {
    }

    /**
     * @param mixed|null $host
     * @param mixed|null $port
     */
    public function slaveof($host = null, $port = null)
    {
    }

    /**
     * @param mixed $arg
     * @param mixed|null $option
     */
    public function slowlog($arg, $option = null)
    {
    }

    /**
     * @param mixed $key
     */
    public function sMembers($key)
    {
    }

    /**
     * @param mixed $src
     * @param mixed $dst
     * @param mixed $value
     */
    public function sMove($src, $dst, $value)
    {
    }

    /**
     * @param mixed $key
     * @param array[]|null $options
     */
    public function sort($key, $options = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed|null $pattern
     * @param mixed|null $get
     * @param mixed|null $start
     * @param mixed|null $end
     * @param mixed|null $getList
     */
    public function sortAsc($key, $pattern = null, $get = null, $start = null, $end = null, $getList = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed|null $pattern
     * @param mixed|null $get
     * @param mixed|null $start
     * @param mixed|null $end
     * @param mixed|null $getList
     */
    public function sortAscAlpha($key, $pattern = null, $get = null, $start = null, $end = null, $getList = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed|null $pattern
     * @param mixed|null $get
     * @param mixed|null $start
     * @param mixed|null $end
     * @param mixed|null $getList
     */
    public function sortDesc($key, $pattern = null, $get = null, $start = null, $end = null, $getList = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed|null $pattern
     * @param mixed|null $get
     * @param mixed|null $start
     * @param mixed|null $end
     * @param mixed|null $getList
     */
    public function sortDescAlpha($key, $pattern = null, $get = null, $start = null, $end = null, $getList = null)
    {
    }

    /**
     * @param mixed $key
     */
    public function sPop($key)
    {
    }

    /**
     * @param mixed $key
     * @param mixed|null $count
     */
    public function sRandMember($key, $count = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function srem($key, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function sRemove($key, $value)
    {
    }

    /**
     * @param mixed $str_key
     * @param mixed $i_iterator
     * @param mixed|null $str_pattern
     * @param mixed|null $i_count
     */
    public function sscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }

    /**
     * @param mixed $key
     */
    public function sSize($key)
    {
    }

    /**
     * @param mixed $key
     */
    public function strlen($key)
    {
    }

    /**
     * @param array[] $channels
     */
    public function subscribe($channels)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     */
    public function substr($key, $start, $end)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function sUnion($key, ...$other_keys)
    {
    }

    /**
     * @param mixed $dst
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function sUnionStore($dst, $key, ...$other_keys)
    {
    }

    /**
     * @param mixed $srcdb
     * @param mixed $dstdb
     */
    public function swapdb($srcdb, $dstdb)
    {
    }

    public function time()
    {
    }

    /**
     * @param mixed $key
     */
    public function ttl($key)
    {
    }

    /**
     * @param mixed $key
     */
    public function type($key)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function unlink($key, ...$other_keys)
    {
    }

    /**
     * @param mixed $channel
     * @param mixed $other_channels
     */
    public function unsubscribe($channel, ...$other_channels)
    {
    }

    public function unwatch()
    {
    }

    /**
     * @param mixed $numslaves
     * @param mixed $timeout
     */
    public function wait($numslaves, $timeout)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function watch($key, ...$other_keys)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $score
     * @param mixed $value
     */
    public function zAdd($key, $score, $value)
    {
    }

    /**
     * @param mixed $key
     */
    public function zCard($key)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     */
    public function zCount($key, $min, $max)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     * @param mixed $other_members
     */
    public function zDelete($key, $member, ...$other_members)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     */
    public function zDeleteRangeByRank($key, $start, $end)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     */
    public function zDeleteRangeByScore($key, $min, $max)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     * @param mixed $member
     */
    public function zIncrBy($key, $value, $member)
    {
    }

    /**
     * @param mixed $key
     * @param array[] $keys
     * @param array[]|null $weights
     * @param mixed|null $aggregate
     */
    public function zInter($key, $keys, $weights = null, $aggregate = null)
    {
    }

    /**
     * @param mixed $key
     * @param array[] $keys
     * @param array[]|null $weights
     * @param mixed|null $aggregate
     */
    public function zinterstore($key, $keys, $weights = null, $aggregate = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     */
    public function zLexCount($key, $min, $max)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     * @param mixed|null $scores
     */
    public function zRange($key, $start, $end, $scores = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     * @param mixed|null $offset
     * @param mixed|null $limit
     */
    public function zRangeByLex($key, $min, $max, $offset = null, $limit = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     * @param array[]|null $options
     */
    public function zRangeByScore($key, $start, $end, $options = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     */
    public function zRank($key, $member)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     * @param mixed $other_members
     */
    public function zRem($key, $member, ...$other_members)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     * @param mixed $other_members
     */
    public function zRemove($key, $member, ...$other_members)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     */
    public function zRemoveRangeByScore($key, $min, $max)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     */
    public function zRemRangeByLex($key, $min, $max)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     */
    public function zRemRangeByRank($key, $min, $max)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     */
    public function zRemRangeByScore($key, $min, $max)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     * @param mixed|null $scores
     */
    public function zReverseRange($key, $start, $end, $scores = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     * @param mixed|null $scores
     */
    public function zRevRange($key, $start, $end, $scores = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     * @param mixed|null $offset
     * @param mixed|null $limit
     */
    public function zRevRangeByLex($key, $min, $max, $offset = null, $limit = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     * @param array[]|null $options
     */
    public function zRevRangeByScore($key, $start, $end, $options = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     */
    public function zRevRank($key, $member)
    {
    }

    /**
     * @param mixed $str_key
     * @param mixed $i_iterator
     * @param mixed|null $str_pattern
     * @param mixed|null $i_count
     */
    public function zscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     */
    public function zScore($key, $member)
    {
    }

    /**
     * @param mixed $key
     */
    public function zSize($key)
    {
    }

    /**
     * @param mixed $key
     * @param array[] $keys
     * @param array[]|null $weights
     * @param mixed|null $aggregate
     */
    public function zUnion($key, $keys, $weights = null, $aggregate = null)
    {
    }

    /**
     * @param mixed $key
     * @param array[] $keys
     * @param array[]|null $weights
     * @param mixed|null $aggregate
     */
    public function zunionstore($key, $keys, $weights = null, $aggregate = null)
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

    /**
     * @param mixed $name_or_hosts
     * @param array[]|null $options
     */
    public function __construct($name_or_hosts, $options = null)
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

    /**
     * @param mixed $host
     */
    public function _instance($host)
    {
    }

    /**
     * @param mixed|null $callable
     */
    public function _rehash($callable = null)
    {
    }

    /**
     * @param mixed $key
     */
    public function _target($key)
    {
    }

    public function bgsave()
    {
    }

    /**
     * @param mixed $keys
     */
    public function del($keys)
    {
    }

    /**
     * @param mixed $keys
     */
    public function delete($keys)
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

    /**
     * @param mixed $keys
     */
    public function getMultiple($keys)
    {
    }

    /**
     * @param mixed $opt
     */
    public function getOption($opt)
    {
    }

    public function info()
    {
    }

    /**
     * @param mixed $pattern
     */
    public function keys($pattern)
    {
    }

    /**
     * @param mixed $keys
     */
    public function mget($keys)
    {
    }

    /**
     * @param mixed $pairs
     */
    public function mset($pairs)
    {
    }

    /**
     * @param mixed $host
     * @param mixed|null $mode
     */
    public function multi($host, $mode = null)
    {
    }

    public function ping()
    {
    }

    public function save()
    {
    }

    /**
     * @param mixed $index
     */
    public function select($index)
    {
    }

    /**
     * @param mixed $opt
     * @param mixed $value
     */
    public function setOption($opt, $value)
    {
    }

    public function unlink()
    {
    }

    public function unwatch()
    {
    }
}

class RedisCluster
{
    /**
     * @param mixed $name
     * @param array[]|null $seeds
     * @param mixed|null $timeout
     * @param mixed|null $read_timeout
     * @param mixed|null $persistent
     */
    public function __construct($name, $seeds = null, $timeout = null, $read_timeout = null, $persistent = null)
    {
    }

    public function _masters()
    {
    }

    /**
     * @param mixed $key
     */
    public function _prefix($key)
    {
    }

    public function _redir()
    {
    }

    /**
     * @param mixed $value
     */
    public function _serialize($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function _unserialize($value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function append($key, $value)
    {
    }

    /**
     * @param mixed $key_or_address
     */
    public function bgrewriteaof($key_or_address)
    {
    }

    /**
     * @param mixed $key_or_address
     */
    public function bgsave($key_or_address)
    {
    }

    /**
     * @param mixed $key
     */
    public function bitcount($key)
    {
    }

    /**
     * @param mixed $operation
     * @param mixed $ret_key
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function bitop($operation, $ret_key, $key, ...$other_keys)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $bit
     * @param mixed|null $start
     * @param mixed|null $end
     */
    public function bitpos($key, $bit, $start = null, $end = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $timeout_or_key
     * @param mixed $extra_args
     */
    public function blpop($key, $timeout_or_key, ...$extra_args)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $timeout_or_key
     * @param mixed $extra_args
     */
    public function brpop($key, $timeout_or_key, ...$extra_args)
    {
    }

    /**
     * @param mixed $src
     * @param mixed $dst
     * @param mixed $timeout
     */
    public function brpoplpush($src, $dst, $timeout)
    {
    }

    public function clearlasterror()
    {
    }

    /**
     * @param mixed $key_or_address
     * @param mixed|null $arg
     * @param mixed $other_args
     */
    public function client($key_or_address, $arg = null, ...$other_args)
    {
    }

    public function close()
    {
    }

    /**
     * @param mixed $key_or_address
     * @param mixed|null $arg
     * @param mixed $other_args
     */
    public function cluster($key_or_address, $arg = null, ...$other_args)
    {
    }

    /**
     * @param mixed $args
     */
    public function command(...$args)
    {
    }

    /**
     * @param mixed $key_or_address
     * @param mixed|null $arg
     * @param mixed $other_args
     */
    public function config($key_or_address, $arg = null, ...$other_args)
    {
    }

    /**
     * @param mixed $key_or_address
     */
    public function dbsize($key_or_address)
    {
    }

    /**
     * @param mixed $key
     */
    public function decr($key)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function decrby($key, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function del($key, ...$other_keys)
    {
    }

    public function discard()
    {
    }

    /**
     * @param mixed $key
     */
    public function dump($key)
    {
    }

    /**
     * @param mixed $msg
     */
    public function echo($msg)
    {
    }

    /**
     * @param mixed $script
     * @param mixed|null $args
     * @param mixed|null $num_keys
     */
    public function eval($script, $args = null, $num_keys = null)
    {
    }

    /**
     * @param mixed $script_sha
     * @param mixed|null $args
     * @param mixed|null $num_keys
     */
    public function evalsha($script_sha, $args = null, $num_keys = null)
    {
    }

    public function exec()
    {
    }

    /**
     * @param mixed $key
     */
    public function exists($key)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $timeout
     */
    public function expire($key, $timeout)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $timestamp
     */
    public function expireat($key, $timestamp)
    {
    }

    /**
     * @param mixed $key_or_address
     */
    public function flushall($key_or_address)
    {
    }

    /**
     * @param mixed $key_or_address
     */
    public function flushdb($key_or_address)
    {
    }

    /**
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
     * @param mixed $key
     * @param mixed $src
     * @param mixed $dst
     * @param mixed|null $unit
     */
    public function geodist($key, $src, $dst, $unit = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     * @param mixed $other_members
     */
    public function geohash($key, $member, ...$other_members)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     * @param mixed $other_members
     */
    public function geopos($key, $member, ...$other_members)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $lng
     * @param mixed $lan
     * @param mixed $radius
     * @param mixed $unit
     * @param array[]|null $opts
     */
    public function georadius($key, $lng, $lan, $radius, $unit, $opts = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     * @param mixed $radius
     * @param mixed $unit
     * @param array[]|null $opts
     */
    public function georadiusbymember($key, $member, $radius, $unit, $opts = null)
    {
    }

    /**
     * @param mixed $key
     */
    public function get($key)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $offset
     */
    public function getbit($key, $offset)
    {
    }

    public function getlasterror()
    {
    }

    public function getmode()
    {
    }

    /**
     * @param mixed $option
     */
    public function getoption($option)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     */
    public function getrange($key, $start, $end)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function getset($key, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     * @param mixed $other_members
     */
    public function hdel($key, $member, ...$other_members)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     */
    public function hexists($key, $member)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     */
    public function hget($key, $member)
    {
    }

    /**
     * @param mixed $key
     */
    public function hgetall($key)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     * @param mixed $value
     */
    public function hincrby($key, $member, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     * @param mixed $value
     */
    public function hincrbyfloat($key, $member, $value)
    {
    }

    /**
     * @param mixed $key
     */
    public function hkeys($key)
    {
    }

    /**
     * @param mixed $key
     */
    public function hlen($key)
    {
    }

    /**
     * @param mixed $key
     * @param array[] $keys
     */
    public function hmget($key, $keys)
    {
    }

    /**
     * @param mixed $key
     * @param array[] $pairs
     */
    public function hmset($key, $pairs)
    {
    }

    /**
     * @param mixed $str_key
     * @param mixed $i_iterator
     * @param mixed|null $str_pattern
     * @param mixed|null $i_count
     */
    public function hscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     * @param mixed $value
     */
    public function hset($key, $member, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     * @param mixed $value
     */
    public function hsetnx($key, $member, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     */
    public function hstrlen($key, $member)
    {
    }

    /**
     * @param mixed $key
     */
    public function hvals($key)
    {
    }

    /**
     * @param mixed $key
     */
    public function incr($key)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function incrby($key, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function incrbyfloat($key, $value)
    {
    }

    /**
     * @param mixed $key_or_address
     * @param mixed|null $option
     */
    public function info($key_or_address, $option = null)
    {
    }

    /**
     * @param mixed $pattern
     */
    public function keys($pattern)
    {
    }

    /**
     * @param mixed $key_or_address
     */
    public function lastsave($key_or_address)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $index
     */
    public function lget($key, $index)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $index
     */
    public function lindex($key, $index)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $position
     * @param mixed $pivot
     * @param mixed $value
     */
    public function linsert($key, $position, $pivot, $value)
    {
    }

    /**
     * @param mixed $key
     */
    public function llen($key)
    {
    }

    /**
     * @param mixed $key
     */
    public function lpop($key)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function lpush($key, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function lpushx($key, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     */
    public function lrange($key, $start, $end)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function lrem($key, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $index
     * @param mixed $value
     */
    public function lset($key, $index, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $start
     * @param mixed $stop
     */
    public function ltrim($key, $start, $stop)
    {
    }

    /**
     * @param array[] $keys
     */
    public function mget($keys)
    {
    }

    /**
     * @param array[] $pairs
     */
    public function mset($pairs)
    {
    }

    /**
     * @param array[] $pairs
     */
    public function msetnx($pairs)
    {
    }

    public function multi()
    {
    }

    /**
     * @param mixed $field
     * @param mixed $key
     */
    public function object($field, $key)
    {
    }

    /**
     * @param mixed $key
     */
    public function persist($key)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $timestamp
     */
    public function pexpire($key, $timestamp)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $timestamp
     */
    public function pexpireat($key, $timestamp)
    {
    }

    /**
     * @param mixed $key
     * @param array[] $elements
     */
    public function pfadd($key, $elements)
    {
    }

    /**
     * @param mixed $key
     */
    public function pfcount($key)
    {
    }

    /**
     * @param mixed $dstkey
     * @param array[] $keys
     */
    public function pfmerge($dstkey, $keys)
    {
    }

    /**
     * @param mixed $key_or_address
     */
    public function ping($key_or_address)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $expire
     * @param mixed $value
     */
    public function psetex($key, $expire, $value)
    {
    }

    /**
     * @param array[] $patterns
     */
    public function psubscribe($patterns)
    {
    }

    /**
     * @param mixed $key
     */
    public function pttl($key)
    {
    }

    /**
     * @param mixed $channel
     * @param mixed $message
     */
    public function publish($channel, $message)
    {
    }

    /**
     * @param mixed $key_or_address
     * @param mixed|null $arg
     * @param mixed $other_args
     */
    public function pubsub($key_or_address, $arg = null, ...$other_args)
    {
    }

    /**
     * @param mixed $pattern
     * @param mixed $other_patterns
     */
    public function punsubscribe($pattern, ...$other_patterns)
    {
    }

    /**
     * @param mixed $key_or_address
     */
    public function randomkey($key_or_address)
    {
    }

    /**
     * @param mixed $cmd
     * @param mixed $args
     */
    public function rawcommand($cmd, ...$args)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $newkey
     */
    public function rename($key, $newkey)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $newkey
     */
    public function renamenx($key, $newkey)
    {
    }

    /**
     * @param mixed $ttl
     * @param mixed $key
     * @param mixed $value
     */
    public function restore($ttl, $key, $value)
    {
    }

    public function role()
    {
    }

    /**
     * @param mixed $key
     */
    public function rpop($key)
    {
    }

    /**
     * @param mixed $src
     * @param mixed $dst
     */
    public function rpoplpush($src, $dst)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function rpush($key, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function rpushx($key, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function sadd($key, $value)
    {
    }

    /**
     * @param mixed $key
     * @param array[] $options
     */
    public function saddarray($key, $options)
    {
    }

    /**
     * @param mixed $key_or_address
     */
    public function save($key_or_address)
    {
    }

    /**
     * @param mixed $i_iterator
     * @param mixed $str_node
     * @param mixed|null $str_pattern
     * @param mixed|null $i_count
     */
    public function scan(&$i_iterator, $str_node, $str_pattern = null, $i_count = null)
    {
    }

    /**
     * @param mixed $key
     */
    public function scard($key)
    {
    }

    /**
     * @param mixed $key_or_address
     * @param mixed|null $arg
     * @param mixed $other_args
     */
    public function script($key_or_address, $arg = null, ...$other_args)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function sdiff($key, ...$other_keys)
    {
    }

    /**
     * @param mixed $dst
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function sdiffstore($dst, $key, ...$other_keys)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $timeout
     * @param mixed|null $opt
     */
    public function set($key, $value, $timeout = null, $opt = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $offset
     * @param mixed $value
     */
    public function setbit($key, $offset, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $expire
     * @param mixed $value
     */
    public function setex($key, $expire, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function setnx($key, $value)
    {
    }

    /**
     * @param mixed $option
     * @param mixed $value
     */
    public function setoption($option, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $offset
     * @param mixed $value
     */
    public function setrange($key, $offset, $value)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function sinter($key, ...$other_keys)
    {
    }

    /**
     * @param mixed $dst
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function sinterstore($dst, $key, ...$other_keys)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function sismember($key, $value)
    {
    }

    /**
     * @param mixed $key_or_address
     * @param mixed|null $arg
     * @param mixed $other_args
     */
    public function slowlog($key_or_address, $arg = null, ...$other_args)
    {
    }

    /**
     * @param mixed $key
     */
    public function smembers($key)
    {
    }

    /**
     * @param mixed $src
     * @param mixed $dst
     * @param mixed $value
     */
    public function smove($src, $dst, $value)
    {
    }

    /**
     * @param mixed $key
     * @param array[]|null $options
     */
    public function sort($key, $options = null)
    {
    }

    /**
     * @param mixed $key
     */
    public function spop($key)
    {
    }

    /**
     * @param mixed $key
     * @param mixed|null $count
     */
    public function srandmember($key, $count = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function srem($key, $value)
    {
    }

    /**
     * @param mixed $str_key
     * @param mixed $i_iterator
     * @param mixed|null $str_pattern
     * @param mixed|null $i_count
     */
    public function sscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }

    /**
     * @param mixed $key
     */
    public function strlen($key)
    {
    }

    /**
     * @param array[] $channels
     */
    public function subscribe($channels)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function sunion($key, ...$other_keys)
    {
    }

    /**
     * @param mixed $dst
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function sunionstore($dst, $key, ...$other_keys)
    {
    }

    public function time()
    {
    }

    /**
     * @param mixed $key
     */
    public function ttl($key)
    {
    }

    /**
     * @param mixed $key
     */
    public function type($key)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function unlink($key, ...$other_keys)
    {
    }

    /**
     * @param mixed $channel
     * @param mixed $other_channels
     */
    public function unsubscribe($channel, ...$other_channels)
    {
    }

    public function unwatch()
    {
    }

    /**
     * @param mixed $key
     * @param mixed $other_keys
     */
    public function watch($key, ...$other_keys)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $score
     * @param mixed $value
     */
    public function zadd($key, $score, $value)
    {
    }

    /**
     * @param mixed $key
     */
    public function zcard($key)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     */
    public function zcount($key, $min, $max)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $value
     * @param mixed $member
     */
    public function zincrby($key, $value, $member)
    {
    }

    /**
     * @param mixed $key
     * @param array[] $keys
     * @param array[]|null $weights
     * @param mixed|null $aggregate
     */
    public function zinterstore($key, $keys, $weights = null, $aggregate = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     */
    public function zlexcount($key, $min, $max)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     * @param mixed|null $scores
     */
    public function zrange($key, $start, $end, $scores = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     * @param mixed|null $offset
     * @param mixed|null $limit
     */
    public function zrangebylex($key, $min, $max, $offset = null, $limit = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     * @param array[]|null $options
     */
    public function zrangebyscore($key, $start, $end, $options = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     */
    public function zrank($key, $member)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     * @param mixed $other_members
     */
    public function zrem($key, $member, ...$other_members)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     */
    public function zremrangebylex($key, $min, $max)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     */
    public function zremrangebyrank($key, $min, $max)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     */
    public function zremrangebyscore($key, $min, $max)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     * @param mixed|null $scores
     */
    public function zrevrange($key, $start, $end, $scores = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     * @param mixed|null $offset
     * @param mixed|null $limit
     */
    public function zrevrangebylex($key, $min, $max, $offset = null, $limit = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $start
     * @param mixed $end
     * @param array[]|null $options
     */
    public function zrevrangebyscore($key, $start, $end, $options = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     */
    public function zrevrank($key, $member)
    {
    }

    /**
     * @param mixed $str_key
     * @param mixed $i_iterator
     * @param mixed|null $str_pattern
     * @param mixed|null $i_count
     */
    public function zscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }

    /**
     * @param mixed $key
     * @param mixed $member
     */
    public function zscore($key, $member)
    {
    }

    /**
     * @param mixed $key
     * @param array[] $keys
     * @param array[]|null $weights
     * @param mixed|null $aggregate
     */
    public function zunionstore($key, $keys, $weights = null, $aggregate = null)
    {
    }
}

class RedisClusterException extends Exception
{
}

class RedisException extends Exception
{
}
