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
     * mixed $key
     */
    public function _prefix($key)
    {
    }

    /**
     * mixed $value
     */
    public function _serialize($value)
    {
    }

    /**
     * mixed $value
     */
    public function _unserialize($value)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function append($key, $value)
    {
    }

    /**
     * mixed $password
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
     * mixed $key
     */
    public function bitcount($key)
    {
    }

    /**
     * mixed $operation
     * mixed $ret_key
     * mixed $key
     * mixed $other_keys
     */
    public function bitop($operation, $ret_key, $key, ...$other_keys)
    {
    }

    /**
     * mixed $key
     * mixed $bit
     * mixed|null $start
     * mixed|null $end
     */
    public function bitpos($key, $bit, $start = null, $end = null)
    {
    }

    /**
     * mixed $key
     * mixed $timeout_or_key
     * mixed $extra_args
     */
    public function blPop($key, $timeout_or_key, ...$extra_args)
    {
    }

    /**
     * mixed $key
     * mixed $timeout_or_key
     * mixed $extra_args
     */
    public function brPop($key, $timeout_or_key, ...$extra_args)
    {
    }

    /**
     * mixed $src
     * mixed $dst
     * mixed $timeout
     */
    public function brpoplpush($src, $dst, $timeout)
    {
    }

    public function clearLastError()
    {
    }

    /**
     * mixed $cmd
     * mixed $args
     */
    public function client($cmd, ...$args)
    {
    }

    public function close()
    {
    }

    /**
     * mixed $args
     */
    public function command(...$args)
    {
    }

    /**
     * mixed $cmd
     * mixed $key
     * mixed|null $value
     */
    public function config($cmd, $key, $value = null)
    {
    }

    /**
     * mixed $host
     * mixed $port
     * mixed|null $timeout
     * mixed|null $retry_interval
     */
    public function connect($host, $port, $timeout = null, $retry_interval = null)
    {
    }

    public function dbSize()
    {
    }

    /**
     * mixed $key
     */
    public function debug($key)
    {
    }

    /**
     * mixed $key
     */
    public function decr($key)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function decrBy($key, $value)
    {
    }

    /**
     * mixed $key
     * mixed $other_keys
     */
    public function del($key, ...$other_keys)
    {
    }

    /**
     * See <code>unlink</code> or <code>unset</code>
     *
     * mixed $key
     * mixed $other_keys
     *
     * @since None
     *
     * @link http://www.php.net/manual/en/function.delete.php
     */
    public function delete($key, ...$other_keys)
    {
    }

    public function discard()
    {
    }

    /**
     * mixed $key
     */
    public function dump($key)
    {
    }

    /**
     * Output one or more strings
     *
     * mixed $msg
     *
     * @return void
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.echo.php
     */
    public function echo($msg)
    {
    }

    /**
     * Evaluate a string as PHP code
     *
     * mixed $script
     * mixed|null $args
     * mixed|null $num_keys
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.eval.php
     */
    public function eval($script, $args = null, $num_keys = null)
    {
    }

    /**
     * mixed $script_sha
     * mixed|null $args
     * mixed|null $num_keys
     */
    public function evalsha($script_sha, $args = null, $num_keys = null)
    {
    }

    /**
     * mixed $script
     * mixed|null $args
     * mixed|null $num_keys
     */
    public function evaluate($script, $args = null, $num_keys = null)
    {
    }

    /**
     * mixed $script_sha
     * mixed|null $args
     * mixed|null $num_keys
     */
    public function evaluateSha($script_sha, $args = null, $num_keys = null)
    {
    }

    /**
     * Execute an external program
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.exec.php
     */
    public function exec(): string
    {
    }

    /**
     * mixed $key
     * mixed $other_keys
     */
    public function exists($key, ...$other_keys)
    {
    }

    /**
     * mixed $key
     * mixed $timeout
     */
    public function expire($key, $timeout)
    {
    }

    /**
     * mixed $key
     * mixed $timestamp
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
     * mixed $key
     * mixed $lng
     * mixed $lat
     * mixed $member
     * mixed $other_triples
     */
    public function geoadd($key, $lng, $lat, $member, ...$other_triples)
    {
    }

    /**
     * mixed $key
     * mixed $src
     * mixed $dst
     * mixed|null $unit
     */
    public function geodist($key, $src, $dst, $unit = null)
    {
    }

    /**
     * mixed $key
     * mixed $member
     * mixed $other_members
     */
    public function geohash($key, $member, ...$other_members)
    {
    }

    /**
     * mixed $key
     * mixed $member
     * mixed $other_members
     */
    public function geopos($key, $member, ...$other_members)
    {
    }

    /**
     * mixed $key
     * mixed $lng
     * mixed $lan
     * mixed $radius
     * mixed $unit
     * array[]|null $opts
     */
    public function georadius($key, $lng, $lan, $radius, $unit, $opts = null)
    {
    }

    /**
     * mixed $key
     * mixed $member
     * mixed $radius
     * mixed $unit
     * array[]|null $opts
     */
    public function georadiusbymember($key, $member, $radius, $unit, $opts = null)
    {
    }

    /**
     * mixed $key
     */
    public function get($key)
    {
    }

    public function getAuth()
    {
    }

    /**
     * mixed $key
     * mixed $offset
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
     * mixed $pattern
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
     * array[] $keys
     */
    public function getMultiple($keys)
    {
    }

    /**
     * mixed $option
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
     * mixed $key
     * mixed $start
     * mixed $end
     */
    public function getRange($key, $start, $end)
    {
    }

    public function getReadTimeout()
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function getSet($key, $value)
    {
    }

    public function getTimeout()
    {
    }

    /**
     * mixed $key
     * mixed $member
     * mixed $other_members
     */
    public function hDel($key, $member, ...$other_members)
    {
    }

    /**
     * mixed $key
     * mixed $member
     */
    public function hExists($key, $member)
    {
    }

    /**
     * mixed $key
     * mixed $member
     */
    public function hGet($key, $member)
    {
    }

    /**
     * mixed $key
     */
    public function hGetAll($key)
    {
    }

    /**
     * mixed $key
     * mixed $member
     * mixed $value
     */
    public function hIncrBy($key, $member, $value)
    {
    }

    /**
     * mixed $key
     * mixed $member
     * mixed $value
     */
    public function hIncrByFloat($key, $member, $value)
    {
    }

    /**
     * mixed $key
     */
    public function hKeys($key)
    {
    }

    /**
     * mixed $key
     */
    public function hLen($key)
    {
    }

    /**
     * mixed $key
     * array[] $keys
     */
    public function hMget($key, $keys)
    {
    }

    /**
     * mixed $key
     * array[] $pairs
     */
    public function hMset($key, $pairs)
    {
    }

    /**
     * mixed $str_key
     * mixed $i_iterator
     * mixed|null $str_pattern
     * mixed|null $i_count
     */
    public function hscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }

    /**
     * mixed $key
     * mixed $member
     * mixed $value
     */
    public function hSet($key, $member, $value)
    {
    }

    /**
     * mixed $key
     * mixed $member
     * mixed $value
     */
    public function hSetNx($key, $member, $value)
    {
    }

    /**
     * mixed $key
     * mixed $member
     */
    public function hStrLen($key, $member)
    {
    }

    /**
     * mixed $key
     */
    public function hVals($key)
    {
    }

    /**
     * mixed $key
     */
    public function incr($key)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function incrBy($key, $value)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function incrByFloat($key, $value)
    {
    }

    /**
     * mixed|null $option
     */
    public function info($option = null)
    {
    }

    public function isConnected()
    {
    }

    /**
     * mixed $pattern
     */
    public function keys($pattern)
    {
    }

    public function lastSave()
    {
    }

    /**
     * mixed $key
     * mixed $index
     */
    public function lGet($key, $index)
    {
    }

    /**
     * mixed $key
     * mixed $start
     * mixed $end
     */
    public function lGetRange($key, $start, $end)
    {
    }

    /**
     * mixed $key
     * mixed $index
     */
    public function lindex($key, $index)
    {
    }

    /**
     * mixed $key
     * mixed $position
     * mixed $pivot
     * mixed $value
     */
    public function lInsert($key, $position, $pivot, $value)
    {
    }

    /**
     * mixed $key
     * mixed $start
     * mixed $stop
     */
    public function listTrim($key, $start, $stop)
    {
    }

    /**
     * mixed $key
     */
    public function lLen($key)
    {
    }

    /**
     * mixed $key
     */
    public function lPop($key)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function lPush($key, $value)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function lPushx($key, $value)
    {
    }

    /**
     * mixed $key
     * mixed $start
     * mixed $end
     */
    public function lrange($key, $start, $end)
    {
    }

    /**
     * mixed $key
     * mixed $value
     * mixed $count
     */
    public function lrem($key, $value, $count)
    {
    }

    /**
     * mixed $key
     * mixed $value
     * mixed $count
     */
    public function lRemove($key, $value, $count)
    {
    }

    /**
     * mixed $key
     * mixed $index
     * mixed $value
     */
    public function lSet($key, $index, $value)
    {
    }

    /**
     * mixed $key
     */
    public function lSize($key)
    {
    }

    /**
     * Strip whitespace (or other characters) from the beginning of a string
     *
     * mixed $key
     * mixed $start
     * mixed $stop
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.ltrim.php
     */
    public function ltrim($key, $start, $stop): string
    {
    }

    /**
     * array[] $keys
     */
    public function mget($keys)
    {
    }

    /**
     * mixed $host
     * mixed $port
     * mixed $key
     * mixed $db
     * mixed $timeout
     * mixed|null $copy
     * mixed|null $replace
     */
    public function migrate($host, $port, $key, $db, $timeout, $copy = null, $replace = null)
    {
    }

    /**
     * mixed $key
     * mixed $dbindex
     */
    public function move($key, $dbindex)
    {
    }

    /**
     * array[] $pairs
     */
    public function mset($pairs)
    {
    }

    /**
     * array[] $pairs
     */
    public function msetnx($pairs)
    {
    }

    public function multi()
    {
    }

    /**
     * mixed $field
     * mixed $key
     */
    public function object($field, $key)
    {
    }

    /**
     * mixed $host
     * mixed $port
     * mixed|null $timeout
     * mixed|null $retry_interval
     */
    public function open($host, $port, $timeout = null, $retry_interval = null)
    {
    }

    /**
     * mixed $host
     * mixed $port
     * mixed|null $timeout
     */
    public function pconnect($host, $port, $timeout = null)
    {
    }

    /**
     * mixed $key
     */
    public function persist($key)
    {
    }

    /**
     * mixed $key
     * mixed $timestamp
     */
    public function pexpire($key, $timestamp)
    {
    }

    /**
     * mixed $key
     * mixed $timestamp
     */
    public function pexpireAt($key, $timestamp)
    {
    }

    /**
     * mixed $key
     * array[] $elements
     */
    public function pfadd($key, $elements)
    {
    }

    /**
     * mixed $key
     */
    public function pfcount($key)
    {
    }

    /**
     * mixed $dstkey
     * array[] $keys
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
     * Opens process file pointer
     *
     * mixed $host
     * mixed $port
     * mixed|null $timeout
     *
     * @return resource
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.popen.php
     */
    public function popen($host, $port, $timeout = null)
    {
    }

    /**
     * mixed $key
     * mixed $expire
     * mixed $value
     */
    public function psetex($key, $expire, $value)
    {
    }

    /**
     * array[] $patterns
     */
    public function psubscribe($patterns)
    {
    }

    /**
     * mixed $key
     */
    public function pttl($key)
    {
    }

    /**
     * mixed $channel
     * mixed $message
     */
    public function publish($channel, $message)
    {
    }

    /**
     * mixed $cmd
     * mixed $args
     */
    public function pubsub($cmd, ...$args)
    {
    }

    /**
     * mixed $pattern
     * mixed $other_patterns
     */
    public function punsubscribe($pattern, ...$other_patterns)
    {
    }

    public function randomKey()
    {
    }

    /**
     * mixed $cmd
     * mixed $args
     */
    public function rawcommand($cmd, ...$args)
    {
    }

    /**
     * Renames a file or directory
     *
     * mixed $key
     * mixed $newkey
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rename.php
     */
    public function rename($key, $newkey): bool
    {
    }

    /**
     * mixed $key
     * mixed $newkey
     */
    public function renameKey($key, $newkey)
    {
    }

    /**
     * mixed $key
     * mixed $newkey
     */
    public function renameNx($key, $newkey)
    {
    }

    /**
     * mixed $ttl
     * mixed $key
     * mixed $value
     */
    public function restore($ttl, $key, $value)
    {
    }

    public function role()
    {
    }

    /**
     * mixed $key
     */
    public function rPop($key)
    {
    }

    /**
     * mixed $src
     * mixed $dst
     */
    public function rpoplpush($src, $dst)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function rPush($key, $value)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function rPushx($key, $value)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function sAdd($key, $value)
    {
    }

    /**
     * mixed $key
     * array[] $options
     */
    public function sAddArray($key, $options)
    {
    }

    public function save()
    {
    }

    /**
     * mixed $i_iterator
     * mixed|null $str_pattern
     * mixed|null $i_count
     */
    public function scan(&$i_iterator, $str_pattern = null, $i_count = null)
    {
    }

    /**
     * mixed $key
     */
    public function scard($key)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function sContains($key, $value)
    {
    }

    /**
     * mixed $cmd
     * mixed $args
     */
    public function script($cmd, ...$args)
    {
    }

    /**
     * mixed $key
     * mixed $other_keys
     */
    public function sDiff($key, ...$other_keys)
    {
    }

    /**
     * mixed $dst
     * mixed $key
     * mixed $other_keys
     */
    public function sDiffStore($dst, $key, ...$other_keys)
    {
    }

    /**
     * mixed $dbindex
     */
    public function select($dbindex)
    {
    }

    /**
     * mixed $msg
     */
    public function sendEcho($msg)
    {
    }

    /**
     * mixed $key
     * mixed $value
     * mixed|null $timeout
     * mixed|null $opt
     */
    public function set($key, $value, $timeout = null, $opt = null)
    {
    }

    /**
     * mixed $key
     * mixed $offset
     * mixed $value
     */
    public function setBit($key, $offset, $value)
    {
    }

    /**
     * mixed $key
     * mixed $expire
     * mixed $value
     */
    public function setex($key, $expire, $value)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function setnx($key, $value)
    {
    }

    /**
     * mixed $option
     * mixed $value
     */
    public function setOption($option, $value)
    {
    }

    /**
     * mixed $key
     * mixed $offset
     * mixed $value
     */
    public function setRange($key, $offset, $value)
    {
    }

    /**
     * mixed $key
     * mixed $timeout
     */
    public function setTimeout($key, $timeout)
    {
    }

    /**
     * mixed $key
     */
    public function sGetMembers($key)
    {
    }

    /**
     * mixed $key
     * mixed $other_keys
     */
    public function sInter($key, ...$other_keys)
    {
    }

    /**
     * mixed $dst
     * mixed $key
     * mixed $other_keys
     */
    public function sInterStore($dst, $key, ...$other_keys)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function sismember($key, $value)
    {
    }

    /**
     * mixed|null $host
     * mixed|null $port
     */
    public function slaveof($host = null, $port = null)
    {
    }

    /**
     * mixed $arg
     * mixed|null $option
     */
    public function slowlog($arg, $option = null)
    {
    }

    /**
     * mixed $key
     */
    public function sMembers($key)
    {
    }

    /**
     * mixed $src
     * mixed $dst
     * mixed $value
     */
    public function sMove($src, $dst, $value)
    {
    }

    /**
     * Sort an array
     *
     * mixed $key
     * array[]|null $options
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.sort.php
     */
    public function sort($key, $options = null): bool
    {
    }

    /**
     * mixed $key
     * mixed|null $pattern
     * mixed|null $get
     * mixed|null $start
     * mixed|null $end
     * mixed|null $getList
     */
    public function sortAsc($key, $pattern = null, $get = null, $start = null, $end = null, $getList = null)
    {
    }

    /**
     * mixed $key
     * mixed|null $pattern
     * mixed|null $get
     * mixed|null $start
     * mixed|null $end
     * mixed|null $getList
     */
    public function sortAscAlpha($key, $pattern = null, $get = null, $start = null, $end = null, $getList = null)
    {
    }

    /**
     * mixed $key
     * mixed|null $pattern
     * mixed|null $get
     * mixed|null $start
     * mixed|null $end
     * mixed|null $getList
     */
    public function sortDesc($key, $pattern = null, $get = null, $start = null, $end = null, $getList = null)
    {
    }

    /**
     * mixed $key
     * mixed|null $pattern
     * mixed|null $get
     * mixed|null $start
     * mixed|null $end
     * mixed|null $getList
     */
    public function sortDescAlpha($key, $pattern = null, $get = null, $start = null, $end = null, $getList = null)
    {
    }

    /**
     * mixed $key
     */
    public function sPop($key)
    {
    }

    /**
     * mixed $key
     * mixed|null $count
     */
    public function sRandMember($key, $count = null)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function srem($key, $value)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function sRemove($key, $value)
    {
    }

    /**
     * mixed $str_key
     * mixed $i_iterator
     * mixed|null $str_pattern
     * mixed|null $i_count
     */
    public function sscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }

    /**
     * mixed $key
     */
    public function sSize($key)
    {
    }

    /**
     * Get string length
     *
     * mixed $key
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.strlen.php
     */
    public function strlen($key): int
    {
    }

    /**
     * array[] $channels
     */
    public function subscribe($channels)
    {
    }

    /**
     * Return part of a string
     *
     * mixed $key
     * mixed $start
     * mixed $end
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.substr.php
     */
    public function substr($key, $start, $end): string
    {
    }

    /**
     * mixed $key
     * mixed $other_keys
     */
    public function sUnion($key, ...$other_keys)
    {
    }

    /**
     * mixed $dst
     * mixed $key
     * mixed $other_keys
     */
    public function sUnionStore($dst, $key, ...$other_keys)
    {
    }

    /**
     * mixed $srcdb
     * mixed $dstdb
     */
    public function swapdb($srcdb, $dstdb)
    {
    }

    /**
     * Return current Unix timestamp
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.time.php
     */
    public function time(): int
    {
    }

    /**
     * mixed $key
     */
    public function ttl($key)
    {
    }

    /**
     * mixed $key
     */
    public function type($key)
    {
    }

    /**
     * Deletes a file
     *
     * mixed $key
     * mixed $other_keys
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.unlink.php
     */
    public function unlink($key, ...$other_keys): bool
    {
    }

    /**
     * mixed $channel
     * mixed $other_channels
     */
    public function unsubscribe($channel, ...$other_channels)
    {
    }

    public function unwatch()
    {
    }

    /**
     * mixed $numslaves
     * mixed $timeout
     */
    public function wait($numslaves, $timeout)
    {
    }

    /**
     * mixed $key
     * mixed $other_keys
     */
    public function watch($key, ...$other_keys)
    {
    }

    /**
     * mixed $key
     * mixed $score
     * mixed $value
     */
    public function zAdd($key, $score, $value)
    {
    }

    /**
     * mixed $key
     */
    public function zCard($key)
    {
    }

    /**
     * mixed $key
     * mixed $min
     * mixed $max
     */
    public function zCount($key, $min, $max)
    {
    }

    /**
     * mixed $key
     * mixed $member
     * mixed $other_members
     */
    public function zDelete($key, $member, ...$other_members)
    {
    }

    /**
     * mixed $key
     * mixed $start
     * mixed $end
     */
    public function zDeleteRangeByRank($key, $start, $end)
    {
    }

    /**
     * mixed $key
     * mixed $min
     * mixed $max
     */
    public function zDeleteRangeByScore($key, $min, $max)
    {
    }

    /**
     * mixed $key
     * mixed $value
     * mixed $member
     */
    public function zIncrBy($key, $value, $member)
    {
    }

    /**
     * mixed $key
     * array[] $keys
     * array[]|null $weights
     * mixed|null $aggregate
     */
    public function zInter($key, $keys, $weights = null, $aggregate = null)
    {
    }

    /**
     * mixed $key
     * array[] $keys
     * array[]|null $weights
     * mixed|null $aggregate
     */
    public function zinterstore($key, $keys, $weights = null, $aggregate = null)
    {
    }

    /**
     * mixed $key
     * mixed $min
     * mixed $max
     */
    public function zLexCount($key, $min, $max)
    {
    }

    /**
     * mixed $key
     * mixed $start
     * mixed $end
     * mixed|null $scores
     */
    public function zRange($key, $start, $end, $scores = null)
    {
    }

    /**
     * mixed $key
     * mixed $min
     * mixed $max
     * mixed|null $offset
     * mixed|null $limit
     */
    public function zRangeByLex($key, $min, $max, $offset = null, $limit = null)
    {
    }

    /**
     * mixed $key
     * mixed $start
     * mixed $end
     * array[]|null $options
     */
    public function zRangeByScore($key, $start, $end, $options = null)
    {
    }

    /**
     * mixed $key
     * mixed $member
     */
    public function zRank($key, $member)
    {
    }

    /**
     * mixed $key
     * mixed $member
     * mixed $other_members
     */
    public function zRem($key, $member, ...$other_members)
    {
    }

    /**
     * mixed $key
     * mixed $member
     * mixed $other_members
     */
    public function zRemove($key, $member, ...$other_members)
    {
    }

    /**
     * mixed $key
     * mixed $min
     * mixed $max
     */
    public function zRemoveRangeByScore($key, $min, $max)
    {
    }

    /**
     * mixed $key
     * mixed $min
     * mixed $max
     */
    public function zRemRangeByLex($key, $min, $max)
    {
    }

    /**
     * mixed $key
     * mixed $min
     * mixed $max
     */
    public function zRemRangeByRank($key, $min, $max)
    {
    }

    /**
     * mixed $key
     * mixed $min
     * mixed $max
     */
    public function zRemRangeByScore($key, $min, $max)
    {
    }

    /**
     * mixed $key
     * mixed $start
     * mixed $end
     * mixed|null $scores
     */
    public function zReverseRange($key, $start, $end, $scores = null)
    {
    }

    /**
     * mixed $key
     * mixed $start
     * mixed $end
     * mixed|null $scores
     */
    public function zRevRange($key, $start, $end, $scores = null)
    {
    }

    /**
     * mixed $key
     * mixed $min
     * mixed $max
     * mixed|null $offset
     * mixed|null $limit
     */
    public function zRevRangeByLex($key, $min, $max, $offset = null, $limit = null)
    {
    }

    /**
     * mixed $key
     * mixed $start
     * mixed $end
     * array[]|null $options
     */
    public function zRevRangeByScore($key, $start, $end, $options = null)
    {
    }

    /**
     * mixed $key
     * mixed $member
     */
    public function zRevRank($key, $member)
    {
    }

    /**
     * mixed $str_key
     * mixed $i_iterator
     * mixed|null $str_pattern
     * mixed|null $i_count
     */
    public function zscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }

    /**
     * mixed $key
     * mixed $member
     */
    public function zScore($key, $member)
    {
    }

    /**
     * mixed $key
     */
    public function zSize($key)
    {
    }

    /**
     * mixed $key
     * array[] $keys
     * array[]|null $weights
     * mixed|null $aggregate
     */
    public function zUnion($key, $keys, $weights = null, $aggregate = null)
    {
    }

    /**
     * mixed $key
     * array[] $keys
     * array[]|null $weights
     * mixed|null $aggregate
     */
    public function zunionstore($key, $keys, $weights = null, $aggregate = null)
    {
    }
}

class RedisArray
{
    /**
     * mixed $function_name
     * mixed $arguments
     */
    public function __call($function_name, $arguments)
    {
    }

    /**
     * mixed $name_or_hosts
     * array[]|null $options
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
     * mixed $host
     */
    public function _instance($host)
    {
    }

    /**
     * mixed|null $callable
     */
    public function _rehash($callable = null)
    {
    }

    /**
     * mixed $key
     */
    public function _target($key)
    {
    }

    public function bgsave()
    {
    }

    /**
     * mixed $keys
     */
    public function del($keys)
    {
    }

    /**
     * See <code>unlink</code> or <code>unset</code>
     *
     * mixed $keys
     *
     * @since None
     *
     * @link http://www.php.net/manual/en/function.delete.php
     */
    public function delete($keys)
    {
    }

    public function discard()
    {
    }

    /**
     * Execute an external program
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.exec.php
     */
    public function exec(): string
    {
    }

    public function flushall()
    {
    }

    public function flushdb()
    {
    }

    /**
     * mixed $keys
     */
    public function getMultiple($keys)
    {
    }

    /**
     * mixed $opt
     */
    public function getOption($opt)
    {
    }

    public function info()
    {
    }

    /**
     * mixed $pattern
     */
    public function keys($pattern)
    {
    }

    /**
     * mixed $keys
     */
    public function mget($keys)
    {
    }

    /**
     * mixed $pairs
     */
    public function mset($pairs)
    {
    }

    /**
     * mixed $host
     * mixed|null $mode
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
     * mixed $index
     */
    public function select($index)
    {
    }

    /**
     * mixed $opt
     * mixed $value
     */
    public function setOption($opt, $value)
    {
    }

    /**
     * Deletes a file
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.unlink.php
     */
    public function unlink(): bool
    {
    }

    public function unwatch()
    {
    }
}

class RedisCluster
{
    /**
     * mixed $name
     * array[]|null $seeds
     * mixed|null $timeout
     * mixed|null $read_timeout
     * mixed|null $persistent
     */
    public function __construct($name, $seeds = null, $timeout = null, $read_timeout = null, $persistent = null)
    {
    }

    public function _masters()
    {
    }

    /**
     * mixed $key
     */
    public function _prefix($key)
    {
    }

    public function _redir()
    {
    }

    /**
     * mixed $value
     */
    public function _serialize($value)
    {
    }

    /**
     * mixed $value
     */
    public function _unserialize($value)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function append($key, $value)
    {
    }

    /**
     * mixed $key_or_address
     */
    public function bgrewriteaof($key_or_address)
    {
    }

    /**
     * mixed $key_or_address
     */
    public function bgsave($key_or_address)
    {
    }

    /**
     * mixed $key
     */
    public function bitcount($key)
    {
    }

    /**
     * mixed $operation
     * mixed $ret_key
     * mixed $key
     * mixed $other_keys
     */
    public function bitop($operation, $ret_key, $key, ...$other_keys)
    {
    }

    /**
     * mixed $key
     * mixed $bit
     * mixed|null $start
     * mixed|null $end
     */
    public function bitpos($key, $bit, $start = null, $end = null)
    {
    }

    /**
     * mixed $key
     * mixed $timeout_or_key
     * mixed $extra_args
     */
    public function blpop($key, $timeout_or_key, ...$extra_args)
    {
    }

    /**
     * mixed $key
     * mixed $timeout_or_key
     * mixed $extra_args
     */
    public function brpop($key, $timeout_or_key, ...$extra_args)
    {
    }

    /**
     * mixed $src
     * mixed $dst
     * mixed $timeout
     */
    public function brpoplpush($src, $dst, $timeout)
    {
    }

    public function clearlasterror()
    {
    }

    /**
     * mixed $key_or_address
     * mixed|null $arg
     * mixed $other_args
     */
    public function client($key_or_address, $arg = null, ...$other_args)
    {
    }

    public function close()
    {
    }

    /**
     * mixed $key_or_address
     * mixed|null $arg
     * mixed $other_args
     */
    public function cluster($key_or_address, $arg = null, ...$other_args)
    {
    }

    /**
     * mixed $args
     */
    public function command(...$args)
    {
    }

    /**
     * mixed $key_or_address
     * mixed|null $arg
     * mixed $other_args
     */
    public function config($key_or_address, $arg = null, ...$other_args)
    {
    }

    /**
     * mixed $key_or_address
     */
    public function dbsize($key_or_address)
    {
    }

    /**
     * mixed $key
     */
    public function decr($key)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function decrby($key, $value)
    {
    }

    /**
     * mixed $key
     * mixed $other_keys
     */
    public function del($key, ...$other_keys)
    {
    }

    public function discard()
    {
    }

    /**
     * mixed $key
     */
    public function dump($key)
    {
    }

    /**
     * Output one or more strings
     *
     * mixed $msg
     *
     * @return void
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.echo.php
     */
    public function echo($msg)
    {
    }

    /**
     * Evaluate a string as PHP code
     *
     * mixed $script
     * mixed|null $args
     * mixed|null $num_keys
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.eval.php
     */
    public function eval($script, $args = null, $num_keys = null)
    {
    }

    /**
     * mixed $script_sha
     * mixed|null $args
     * mixed|null $num_keys
     */
    public function evalsha($script_sha, $args = null, $num_keys = null)
    {
    }

    /**
     * Execute an external program
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.exec.php
     */
    public function exec(): string
    {
    }

    /**
     * mixed $key
     */
    public function exists($key)
    {
    }

    /**
     * mixed $key
     * mixed $timeout
     */
    public function expire($key, $timeout)
    {
    }

    /**
     * mixed $key
     * mixed $timestamp
     */
    public function expireat($key, $timestamp)
    {
    }

    /**
     * mixed $key_or_address
     */
    public function flushall($key_or_address)
    {
    }

    /**
     * mixed $key_or_address
     */
    public function flushdb($key_or_address)
    {
    }

    /**
     * mixed $key
     * mixed $lng
     * mixed $lat
     * mixed $member
     * mixed $other_triples
     */
    public function geoadd($key, $lng, $lat, $member, ...$other_triples)
    {
    }

    /**
     * mixed $key
     * mixed $src
     * mixed $dst
     * mixed|null $unit
     */
    public function geodist($key, $src, $dst, $unit = null)
    {
    }

    /**
     * mixed $key
     * mixed $member
     * mixed $other_members
     */
    public function geohash($key, $member, ...$other_members)
    {
    }

    /**
     * mixed $key
     * mixed $member
     * mixed $other_members
     */
    public function geopos($key, $member, ...$other_members)
    {
    }

    /**
     * mixed $key
     * mixed $lng
     * mixed $lan
     * mixed $radius
     * mixed $unit
     * array[]|null $opts
     */
    public function georadius($key, $lng, $lan, $radius, $unit, $opts = null)
    {
    }

    /**
     * mixed $key
     * mixed $member
     * mixed $radius
     * mixed $unit
     * array[]|null $opts
     */
    public function georadiusbymember($key, $member, $radius, $unit, $opts = null)
    {
    }

    /**
     * mixed $key
     */
    public function get($key)
    {
    }

    /**
     * mixed $key
     * mixed $offset
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
     * mixed $option
     */
    public function getoption($option)
    {
    }

    /**
     * mixed $key
     * mixed $start
     * mixed $end
     */
    public function getrange($key, $start, $end)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function getset($key, $value)
    {
    }

    /**
     * mixed $key
     * mixed $member
     * mixed $other_members
     */
    public function hdel($key, $member, ...$other_members)
    {
    }

    /**
     * mixed $key
     * mixed $member
     */
    public function hexists($key, $member)
    {
    }

    /**
     * mixed $key
     * mixed $member
     */
    public function hget($key, $member)
    {
    }

    /**
     * mixed $key
     */
    public function hgetall($key)
    {
    }

    /**
     * mixed $key
     * mixed $member
     * mixed $value
     */
    public function hincrby($key, $member, $value)
    {
    }

    /**
     * mixed $key
     * mixed $member
     * mixed $value
     */
    public function hincrbyfloat($key, $member, $value)
    {
    }

    /**
     * mixed $key
     */
    public function hkeys($key)
    {
    }

    /**
     * mixed $key
     */
    public function hlen($key)
    {
    }

    /**
     * mixed $key
     * array[] $keys
     */
    public function hmget($key, $keys)
    {
    }

    /**
     * mixed $key
     * array[] $pairs
     */
    public function hmset($key, $pairs)
    {
    }

    /**
     * mixed $str_key
     * mixed $i_iterator
     * mixed|null $str_pattern
     * mixed|null $i_count
     */
    public function hscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }

    /**
     * mixed $key
     * mixed $member
     * mixed $value
     */
    public function hset($key, $member, $value)
    {
    }

    /**
     * mixed $key
     * mixed $member
     * mixed $value
     */
    public function hsetnx($key, $member, $value)
    {
    }

    /**
     * mixed $key
     * mixed $member
     */
    public function hstrlen($key, $member)
    {
    }

    /**
     * mixed $key
     */
    public function hvals($key)
    {
    }

    /**
     * mixed $key
     */
    public function incr($key)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function incrby($key, $value)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function incrbyfloat($key, $value)
    {
    }

    /**
     * mixed $key_or_address
     * mixed|null $option
     */
    public function info($key_or_address, $option = null)
    {
    }

    /**
     * mixed $pattern
     */
    public function keys($pattern)
    {
    }

    /**
     * mixed $key_or_address
     */
    public function lastsave($key_or_address)
    {
    }

    /**
     * mixed $key
     * mixed $index
     */
    public function lget($key, $index)
    {
    }

    /**
     * mixed $key
     * mixed $index
     */
    public function lindex($key, $index)
    {
    }

    /**
     * mixed $key
     * mixed $position
     * mixed $pivot
     * mixed $value
     */
    public function linsert($key, $position, $pivot, $value)
    {
    }

    /**
     * mixed $key
     */
    public function llen($key)
    {
    }

    /**
     * mixed $key
     */
    public function lpop($key)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function lpush($key, $value)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function lpushx($key, $value)
    {
    }

    /**
     * mixed $key
     * mixed $start
     * mixed $end
     */
    public function lrange($key, $start, $end)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function lrem($key, $value)
    {
    }

    /**
     * mixed $key
     * mixed $index
     * mixed $value
     */
    public function lset($key, $index, $value)
    {
    }

    /**
     * Strip whitespace (or other characters) from the beginning of a string
     *
     * mixed $key
     * mixed $start
     * mixed $stop
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.ltrim.php
     */
    public function ltrim($key, $start, $stop): string
    {
    }

    /**
     * array[] $keys
     */
    public function mget($keys)
    {
    }

    /**
     * array[] $pairs
     */
    public function mset($pairs)
    {
    }

    /**
     * array[] $pairs
     */
    public function msetnx($pairs)
    {
    }

    public function multi()
    {
    }

    /**
     * mixed $field
     * mixed $key
     */
    public function object($field, $key)
    {
    }

    /**
     * mixed $key
     */
    public function persist($key)
    {
    }

    /**
     * mixed $key
     * mixed $timestamp
     */
    public function pexpire($key, $timestamp)
    {
    }

    /**
     * mixed $key
     * mixed $timestamp
     */
    public function pexpireat($key, $timestamp)
    {
    }

    /**
     * mixed $key
     * array[] $elements
     */
    public function pfadd($key, $elements)
    {
    }

    /**
     * mixed $key
     */
    public function pfcount($key)
    {
    }

    /**
     * mixed $dstkey
     * array[] $keys
     */
    public function pfmerge($dstkey, $keys)
    {
    }

    /**
     * mixed $key_or_address
     */
    public function ping($key_or_address)
    {
    }

    /**
     * mixed $key
     * mixed $expire
     * mixed $value
     */
    public function psetex($key, $expire, $value)
    {
    }

    /**
     * array[] $patterns
     */
    public function psubscribe($patterns)
    {
    }

    /**
     * mixed $key
     */
    public function pttl($key)
    {
    }

    /**
     * mixed $channel
     * mixed $message
     */
    public function publish($channel, $message)
    {
    }

    /**
     * mixed $key_or_address
     * mixed|null $arg
     * mixed $other_args
     */
    public function pubsub($key_or_address, $arg = null, ...$other_args)
    {
    }

    /**
     * mixed $pattern
     * mixed $other_patterns
     */
    public function punsubscribe($pattern, ...$other_patterns)
    {
    }

    /**
     * mixed $key_or_address
     */
    public function randomkey($key_or_address)
    {
    }

    /**
     * mixed $cmd
     * mixed $args
     */
    public function rawcommand($cmd, ...$args)
    {
    }

    /**
     * Renames a file or directory
     *
     * mixed $key
     * mixed $newkey
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rename.php
     */
    public function rename($key, $newkey): bool
    {
    }

    /**
     * mixed $key
     * mixed $newkey
     */
    public function renamenx($key, $newkey)
    {
    }

    /**
     * mixed $ttl
     * mixed $key
     * mixed $value
     */
    public function restore($ttl, $key, $value)
    {
    }

    public function role()
    {
    }

    /**
     * mixed $key
     */
    public function rpop($key)
    {
    }

    /**
     * mixed $src
     * mixed $dst
     */
    public function rpoplpush($src, $dst)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function rpush($key, $value)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function rpushx($key, $value)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function sadd($key, $value)
    {
    }

    /**
     * mixed $key
     * array[] $options
     */
    public function saddarray($key, $options)
    {
    }

    /**
     * mixed $key_or_address
     */
    public function save($key_or_address)
    {
    }

    /**
     * mixed $i_iterator
     * mixed $str_node
     * mixed|null $str_pattern
     * mixed|null $i_count
     */
    public function scan(&$i_iterator, $str_node, $str_pattern = null, $i_count = null)
    {
    }

    /**
     * mixed $key
     */
    public function scard($key)
    {
    }

    /**
     * mixed $key_or_address
     * mixed|null $arg
     * mixed $other_args
     */
    public function script($key_or_address, $arg = null, ...$other_args)
    {
    }

    /**
     * mixed $key
     * mixed $other_keys
     */
    public function sdiff($key, ...$other_keys)
    {
    }

    /**
     * mixed $dst
     * mixed $key
     * mixed $other_keys
     */
    public function sdiffstore($dst, $key, ...$other_keys)
    {
    }

    /**
     * mixed $key
     * mixed $value
     * mixed|null $timeout
     * mixed|null $opt
     */
    public function set($key, $value, $timeout = null, $opt = null)
    {
    }

    /**
     * mixed $key
     * mixed $offset
     * mixed $value
     */
    public function setbit($key, $offset, $value)
    {
    }

    /**
     * mixed $key
     * mixed $expire
     * mixed $value
     */
    public function setex($key, $expire, $value)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function setnx($key, $value)
    {
    }

    /**
     * mixed $option
     * mixed $value
     */
    public function setoption($option, $value)
    {
    }

    /**
     * mixed $key
     * mixed $offset
     * mixed $value
     */
    public function setrange($key, $offset, $value)
    {
    }

    /**
     * mixed $key
     * mixed $other_keys
     */
    public function sinter($key, ...$other_keys)
    {
    }

    /**
     * mixed $dst
     * mixed $key
     * mixed $other_keys
     */
    public function sinterstore($dst, $key, ...$other_keys)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function sismember($key, $value)
    {
    }

    /**
     * mixed $key_or_address
     * mixed|null $arg
     * mixed $other_args
     */
    public function slowlog($key_or_address, $arg = null, ...$other_args)
    {
    }

    /**
     * mixed $key
     */
    public function smembers($key)
    {
    }

    /**
     * mixed $src
     * mixed $dst
     * mixed $value
     */
    public function smove($src, $dst, $value)
    {
    }

    /**
     * Sort an array
     *
     * mixed $key
     * array[]|null $options
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.sort.php
     */
    public function sort($key, $options = null): bool
    {
    }

    /**
     * mixed $key
     */
    public function spop($key)
    {
    }

    /**
     * mixed $key
     * mixed|null $count
     */
    public function srandmember($key, $count = null)
    {
    }

    /**
     * mixed $key
     * mixed $value
     */
    public function srem($key, $value)
    {
    }

    /**
     * mixed $str_key
     * mixed $i_iterator
     * mixed|null $str_pattern
     * mixed|null $i_count
     */
    public function sscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }

    /**
     * Get string length
     *
     * mixed $key
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.strlen.php
     */
    public function strlen($key): int
    {
    }

    /**
     * array[] $channels
     */
    public function subscribe($channels)
    {
    }

    /**
     * mixed $key
     * mixed $other_keys
     */
    public function sunion($key, ...$other_keys)
    {
    }

    /**
     * mixed $dst
     * mixed $key
     * mixed $other_keys
     */
    public function sunionstore($dst, $key, ...$other_keys)
    {
    }

    /**
     * Return current Unix timestamp
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.time.php
     */
    public function time(): int
    {
    }

    /**
     * mixed $key
     */
    public function ttl($key)
    {
    }

    /**
     * mixed $key
     */
    public function type($key)
    {
    }

    /**
     * Deletes a file
     *
     * mixed $key
     * mixed $other_keys
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.unlink.php
     */
    public function unlink($key, ...$other_keys): bool
    {
    }

    /**
     * mixed $channel
     * mixed $other_channels
     */
    public function unsubscribe($channel, ...$other_channels)
    {
    }

    public function unwatch()
    {
    }

    /**
     * mixed $key
     * mixed $other_keys
     */
    public function watch($key, ...$other_keys)
    {
    }

    /**
     * mixed $key
     * mixed $score
     * mixed $value
     */
    public function zadd($key, $score, $value)
    {
    }

    /**
     * mixed $key
     */
    public function zcard($key)
    {
    }

    /**
     * mixed $key
     * mixed $min
     * mixed $max
     */
    public function zcount($key, $min, $max)
    {
    }

    /**
     * mixed $key
     * mixed $value
     * mixed $member
     */
    public function zincrby($key, $value, $member)
    {
    }

    /**
     * mixed $key
     * array[] $keys
     * array[]|null $weights
     * mixed|null $aggregate
     */
    public function zinterstore($key, $keys, $weights = null, $aggregate = null)
    {
    }

    /**
     * mixed $key
     * mixed $min
     * mixed $max
     */
    public function zlexcount($key, $min, $max)
    {
    }

    /**
     * mixed $key
     * mixed $start
     * mixed $end
     * mixed|null $scores
     */
    public function zrange($key, $start, $end, $scores = null)
    {
    }

    /**
     * mixed $key
     * mixed $min
     * mixed $max
     * mixed|null $offset
     * mixed|null $limit
     */
    public function zrangebylex($key, $min, $max, $offset = null, $limit = null)
    {
    }

    /**
     * mixed $key
     * mixed $start
     * mixed $end
     * array[]|null $options
     */
    public function zrangebyscore($key, $start, $end, $options = null)
    {
    }

    /**
     * mixed $key
     * mixed $member
     */
    public function zrank($key, $member)
    {
    }

    /**
     * mixed $key
     * mixed $member
     * mixed $other_members
     */
    public function zrem($key, $member, ...$other_members)
    {
    }

    /**
     * mixed $key
     * mixed $min
     * mixed $max
     */
    public function zremrangebylex($key, $min, $max)
    {
    }

    /**
     * mixed $key
     * mixed $min
     * mixed $max
     */
    public function zremrangebyrank($key, $min, $max)
    {
    }

    /**
     * mixed $key
     * mixed $min
     * mixed $max
     */
    public function zremrangebyscore($key, $min, $max)
    {
    }

    /**
     * mixed $key
     * mixed $start
     * mixed $end
     * mixed|null $scores
     */
    public function zrevrange($key, $start, $end, $scores = null)
    {
    }

    /**
     * mixed $key
     * mixed $min
     * mixed $max
     * mixed|null $offset
     * mixed|null $limit
     */
    public function zrevrangebylex($key, $min, $max, $offset = null, $limit = null)
    {
    }

    /**
     * mixed $key
     * mixed $start
     * mixed $end
     * array[]|null $options
     */
    public function zrevrangebyscore($key, $start, $end, $options = null)
    {
    }

    /**
     * mixed $key
     * mixed $member
     */
    public function zrevrank($key, $member)
    {
    }

    /**
     * mixed $str_key
     * mixed $i_iterator
     * mixed|null $str_pattern
     * mixed|null $i_count
     */
    public function zscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
    }

    /**
     * mixed $key
     * mixed $member
     */
    public function zscore($key, $member)
    {
    }

    /**
     * mixed $key
     * array[] $keys
     * array[]|null $weights
     * mixed|null $aggregate
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
