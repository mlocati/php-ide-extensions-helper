<?php
// Documentation generated automatically for extension SPL v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
// No INI entries
// No constants defined
interface Countable
{
    public function count();
}
interface OuterIterator extends Iterator, Traversable
{
    public function getInnerIterator();
}
interface RecursiveIterator extends Iterator, Traversable
{
    public function getChildren();
    public function hasChildren();
}
interface SeekableIterator extends Iterator, Traversable
{
    public function seek($position);
}
interface SplObserver
{
    public function update(SplSubject $SplSubject);
}
interface SplSubject
{
    public function attach(SplObserver $SplObserver);
    public function detach(SplObserver $SplObserver);
    public function notify();
}
class AppendIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator
{
    public function __construct()
    {
    }
    public function append(Iterator $iterator)
    {
    }
    public function current()
    {
    }
    public function getArrayIterator()
    {
    }
    public function getInnerIterator()
    {
    }
    public function getIteratorIndex()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function rewind()
    {
    }
    public function valid()
    {
    }
}
class ArrayIterator implements Iterator, Traversable, ArrayAccess, SeekableIterator, Serializable, Countable
{
    const ARRAY_AS_PROPS = 2;
    const STD_PROP_LIST = 1;
    public function __construct($array = null, $ar_flags = null, $iterator_class = null)
    {
    }
    public function append($value)
    {
    }
    public function asort()
    {
    }
    public function count()
    {
    }
    public function current()
    {
    }
    public function getArrayCopy()
    {
    }
    public function getFlags()
    {
    }
    public function key()
    {
    }
    public function ksort()
    {
    }
    public function natcasesort()
    {
    }
    public function natsort()
    {
    }
    public function next()
    {
    }
    public function offsetExists($index)
    {
    }
    public function offsetGet($index)
    {
    }
    public function offsetSet($index, $newval)
    {
    }
    public function offsetUnset($index)
    {
    }
    public function rewind()
    {
    }
    public function seek($position)
    {
    }
    public function serialize()
    {
    }
    public function setFlags($flags)
    {
    }
    public function uasort($cmp_function)
    {
    }
    public function uksort($cmp_function)
    {
    }
    public function unserialize($serialized)
    {
    }
    public function valid()
    {
    }
}
class ArrayObject implements IteratorAggregate, Traversable, ArrayAccess, Serializable, Countable
{
    const ARRAY_AS_PROPS = 2;
    const STD_PROP_LIST = 1;
    public function __construct($array = null, $ar_flags = null, $iterator_class = null)
    {
    }
    public function append($value)
    {
    }
    public function asort()
    {
    }
    public function count()
    {
    }
    public function exchangeArray($array)
    {
    }
    public function getArrayCopy()
    {
    }
    public function getFlags()
    {
    }
    public function getIterator()
    {
    }
    public function getIteratorClass()
    {
    }
    public function ksort()
    {
    }
    public function natcasesort()
    {
    }
    public function natsort()
    {
    }
    public function offsetExists($index)
    {
    }
    public function offsetGet($index)
    {
    }
    public function offsetSet($index, $newval)
    {
    }
    public function offsetUnset($index)
    {
    }
    public function serialize()
    {
    }
    public function setFlags($flags)
    {
    }
    public function setIteratorClass($iteratorClass)
    {
    }
    public function uasort($cmp_function)
    {
    }
    public function uksort($cmp_function)
    {
    }
    public function unserialize($serialized)
    {
    }
}
class BadFunctionCallException extends LogicException
{
}
class BadMethodCallException extends BadFunctionCallException
{
}
class CachingIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator, ArrayAccess, Countable
{
    const CALL_TOSTRING = 1;
    const CATCH_GET_CHILD = 16;
    const FULL_CACHE = 256;
    const TOSTRING_USE_CURRENT = 4;
    const TOSTRING_USE_INNER = 8;
    const TOSTRING_USE_KEY = 2;
    public function __construct(Iterator $iterator, $flags = null)
    {
    }
    public function __toString()
    {
    }
    public function count()
    {
    }
    public function current()
    {
    }
    public function getCache()
    {
    }
    public function getFlags()
    {
    }
    public function getInnerIterator()
    {
    }
    public function hasNext()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function offsetExists($index)
    {
    }
    public function offsetGet($index)
    {
    }
    public function offsetSet($index, $newval)
    {
    }
    public function offsetUnset($index)
    {
    }
    public function rewind()
    {
    }
    public function setFlags($flags)
    {
    }
    public function valid()
    {
    }
}
class CallbackFilterIterator extends FilterIterator implements Iterator, Traversable, OuterIterator
{
    public function __construct(Iterator $iterator, $callback)
    {
    }
    public function accept()
    {
    }
}
class DirectoryIterator extends SplFileInfo implements Iterator, Traversable, SeekableIterator
{
    public function __construct($path)
    {
    }
    public function __toString()
    {
    }
    public function current()
    {
    }
    public function getBasename($suffix = null)
    {
    }
    public function getExtension()
    {
    }
    public function getFilename()
    {
    }
    public function isDot()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function rewind()
    {
    }
    public function seek($position)
    {
    }
    public function valid()
    {
    }
}
class DomainException extends LogicException
{
}
class EmptyIterator implements Iterator, Traversable
{
    public function current()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function rewind()
    {
    }
    public function valid()
    {
    }
}
class FilesystemIterator extends DirectoryIterator implements SeekableIterator, Traversable, Iterator
{
    const CURRENT_AS_FILEINFO = 0;
    const CURRENT_AS_PATHNAME = 32;
    const CURRENT_AS_SELF = 16;
    const CURRENT_MODE_MASK = 240;
    const FOLLOW_SYMLINKS = 512;
    const KEY_AS_FILENAME = 256;
    const KEY_AS_PATHNAME = 0;
    const KEY_MODE_MASK = 3840;
    const NEW_CURRENT_AND_KEY = 256;
    const OTHER_MODE_MASK = 12288;
    const SKIP_DOTS = 4096;
    const UNIX_PATHS = 8192;
    public function __construct($path, $flags = null)
    {
    }
    public function current()
    {
    }
    public function getFlags()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function rewind()
    {
    }
    public function setFlags($flags = null)
    {
    }
}
abstract class FilterIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator
{
    public function __construct(Iterator $iterator)
    {
    }
    public abstract function accept();
    public function current()
    {
    }
    public function getInnerIterator()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function rewind()
    {
    }
    public function valid()
    {
    }
}
class GlobIterator extends FilesystemIterator implements Iterator, Traversable, SeekableIterator, Countable
{
    const CURRENT_AS_FILEINFO = 0;
    const CURRENT_AS_PATHNAME = 32;
    const CURRENT_AS_SELF = 16;
    const CURRENT_MODE_MASK = 240;
    const FOLLOW_SYMLINKS = 512;
    const KEY_AS_FILENAME = 256;
    const KEY_AS_PATHNAME = 0;
    const KEY_MODE_MASK = 3840;
    const NEW_CURRENT_AND_KEY = 256;
    const OTHER_MODE_MASK = 12288;
    const SKIP_DOTS = 4096;
    const UNIX_PATHS = 8192;
    public function __construct($path, $flags = null)
    {
    }
    public function count()
    {
    }
}
class InfiniteIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator
{
    public function __construct(Iterator $iterator)
    {
    }
    public function next()
    {
    }
}
class InvalidArgumentException extends LogicException
{
}
class IteratorIterator implements Iterator, Traversable, OuterIterator
{
    public function __construct(Traversable $iterator)
    {
    }
    public function current()
    {
    }
    public function getInnerIterator()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function rewind()
    {
    }
    public function valid()
    {
    }
}
class LengthException extends LogicException
{
}
class LimitIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator
{
    public function __construct(Iterator $iterator, $offset = null, $count = null)
    {
    }
    public function current()
    {
    }
    public function getInnerIterator()
    {
    }
    public function getPosition()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function rewind()
    {
    }
    public function seek($position)
    {
    }
    public function valid()
    {
    }
}
class LogicException extends Exception
{
}
class MultipleIterator implements Iterator, Traversable
{
    const MIT_KEYS_ASSOC = 2;
    const MIT_KEYS_NUMERIC = 0;
    const MIT_NEED_ALL = 1;
    const MIT_NEED_ANY = 0;
    public function __construct($flags)
    {
    }
    public function attachIterator(Iterator $iterator, $infos = null)
    {
    }
    public function containsIterator(Iterator $iterator)
    {
    }
    public function countIterators()
    {
    }
    public function current()
    {
    }
    public function detachIterator(Iterator $iterator)
    {
    }
    public function getFlags()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function rewind()
    {
    }
    public function setFlags($flags)
    {
    }
    public function valid()
    {
    }
}
class NoRewindIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator
{
    public function __construct(Iterator $iterator)
    {
    }
    public function current()
    {
    }
    public function getInnerIterator()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function rewind()
    {
    }
    public function valid()
    {
    }
}
class OutOfBoundsException extends RuntimeException
{
}
class OutOfRangeException extends LogicException
{
}
class OverflowException extends RuntimeException
{
}
class ParentIterator extends RecursiveFilterIterator implements RecursiveIterator, OuterIterator, Traversable, Iterator
{
    public function __construct(RecursiveIterator $iterator)
    {
    }
    public function accept()
    {
    }
}
class RangeException extends RuntimeException
{
}
class RecursiveArrayIterator extends ArrayIterator implements Countable, Serializable, SeekableIterator, ArrayAccess, Traversable, Iterator, RecursiveIterator
{
    const CHILD_ARRAYS_ONLY = 4;
    public function getChildren()
    {
    }
    public function hasChildren()
    {
    }
}
class RecursiveCachingIterator extends CachingIterator implements Countable, ArrayAccess, Iterator, Traversable, OuterIterator, RecursiveIterator
{
    const CALL_TOSTRING = 1;
    const CATCH_GET_CHILD = 16;
    const FULL_CACHE = 256;
    const TOSTRING_USE_CURRENT = 4;
    const TOSTRING_USE_INNER = 8;
    const TOSTRING_USE_KEY = 2;
    public function __construct(Iterator $iterator, $flags = null)
    {
    }
    public function getChildren()
    {
    }
    public function hasChildren()
    {
    }
}
class RecursiveCallbackFilterIterator extends CallbackFilterIterator implements OuterIterator, Traversable, Iterator, RecursiveIterator
{
    public function __construct(RecursiveIterator $iterator, $callback)
    {
    }
    public function getChildren()
    {
    }
    public function hasChildren()
    {
    }
}
class RecursiveDirectoryIterator extends FilesystemIterator implements Iterator, Traversable, SeekableIterator, RecursiveIterator
{
    const CURRENT_AS_FILEINFO = 0;
    const CURRENT_AS_PATHNAME = 32;
    const CURRENT_AS_SELF = 16;
    const CURRENT_MODE_MASK = 240;
    const FOLLOW_SYMLINKS = 512;
    const KEY_AS_FILENAME = 256;
    const KEY_AS_PATHNAME = 0;
    const KEY_MODE_MASK = 3840;
    const NEW_CURRENT_AND_KEY = 256;
    const OTHER_MODE_MASK = 12288;
    const SKIP_DOTS = 4096;
    const UNIX_PATHS = 8192;
    public function __construct($path, $flags = null)
    {
    }
    public function getChildren()
    {
    }
    public function getSubPath()
    {
    }
    public function getSubPathname()
    {
    }
    public function hasChildren($allow_links = null)
    {
    }
}
abstract class RecursiveFilterIterator extends FilterIterator implements Iterator, Traversable, OuterIterator, RecursiveIterator
{
    public function __construct(RecursiveIterator $iterator)
    {
    }
    public function getChildren()
    {
    }
    public function hasChildren()
    {
    }
}
class RecursiveIteratorIterator implements Iterator, Traversable, OuterIterator
{
    const CATCH_GET_CHILD = 16;
    const CHILD_FIRST = 2;
    const LEAVES_ONLY = 0;
    const SELF_FIRST = 1;
    public function __construct(Traversable $iterator, $mode = null, $flags = null)
    {
    }
    public function beginChildren()
    {
    }
    public function beginIteration()
    {
    }
    public function callGetChildren()
    {
    }
    public function callHasChildren()
    {
    }
    public function current()
    {
    }
    public function endChildren()
    {
    }
    public function endIteration()
    {
    }
    public function getDepth()
    {
    }
    public function getInnerIterator()
    {
    }
    public function getMaxDepth()
    {
    }
    public function getSubIterator($level = null)
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function nextElement()
    {
    }
    public function rewind()
    {
    }
    public function setMaxDepth($max_depth = null)
    {
    }
    public function valid()
    {
    }
}
class RecursiveRegexIterator extends RegexIterator implements OuterIterator, Traversable, Iterator, RecursiveIterator
{
    const ALL_MATCHES = 2;
    const GET_MATCH = 1;
    const INVERT_MATCH = 2;
    const MATCH = 0;
    const REPLACE = 4;
    const SPLIT = 3;
    const USE_KEY = 1;
    public function __construct(RecursiveIterator $iterator, $regex, $mode = null, $flags = null, $preg_flags = null)
    {
    }
    public function accept()
    {
    }
    public function getChildren()
    {
    }
    public function hasChildren()
    {
    }
}
class RecursiveTreeIterator extends RecursiveIteratorIterator implements OuterIterator, Traversable, Iterator
{
    const BYPASS_CURRENT = 4;
    const BYPASS_KEY = 8;
    const CATCH_GET_CHILD = 16;
    const CHILD_FIRST = 2;
    const LEAVES_ONLY = 0;
    const PREFIX_END_HAS_NEXT = 3;
    const PREFIX_END_LAST = 4;
    const PREFIX_LEFT = 0;
    const PREFIX_MID_HAS_NEXT = 1;
    const PREFIX_MID_LAST = 2;
    const PREFIX_RIGHT = 5;
    const SELF_FIRST = 1;
    public function __construct(Traversable $iterator, $flags = null, $caching_it_flags = null, $mode = null)
    {
    }
    public function beginChildren()
    {
    }
    public function beginIteration()
    {
    }
    public function callGetChildren()
    {
    }
    public function callHasChildren()
    {
    }
    public function current()
    {
    }
    public function endChildren()
    {
    }
    public function endIteration()
    {
    }
    public function getEntry()
    {
    }
    public function getPostfix()
    {
    }
    public function getPrefix()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function nextElement()
    {
    }
    public function rewind()
    {
    }
    public function setPostfix()
    {
    }
    public function setPrefixPart($part, $value)
    {
    }
    public function valid()
    {
    }
}
class RegexIterator extends FilterIterator implements Iterator, Traversable, OuterIterator
{
    const ALL_MATCHES = 2;
    const GET_MATCH = 1;
    const INVERT_MATCH = 2;
    const MATCH = 0;
    const REPLACE = 4;
    const SPLIT = 3;
    const USE_KEY = 1;
    public $replacement;
    public function __construct(Iterator $iterator, $regex, $mode = null, $flags = null, $preg_flags = null)
    {
    }
    public function accept()
    {
    }
    public function getFlags()
    {
    }
    public function getMode()
    {
    }
    public function getPregFlags()
    {
    }
    public function getRegex()
    {
    }
    public function setFlags($flags)
    {
    }
    public function setMode($mode)
    {
    }
    public function setPregFlags($preg_flags)
    {
    }
}
class RuntimeException extends Exception
{
}
class SplDoublyLinkedList implements Iterator, Traversable, Countable, ArrayAccess, Serializable
{
    const IT_MODE_DELETE = 1;
    const IT_MODE_FIFO = 0;
    const IT_MODE_KEEP = 0;
    const IT_MODE_LIFO = 2;
    public function add($index, $newval)
    {
    }
    public function bottom()
    {
    }
    public function count()
    {
    }
    public function current()
    {
    }
    public function getIteratorMode()
    {
    }
    public function isEmpty()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function offsetExists($index)
    {
    }
    public function offsetGet($index)
    {
    }
    public function offsetSet($index, $newval)
    {
    }
    public function offsetUnset($index)
    {
    }
    public function pop()
    {
    }
    public function prev()
    {
    }
    public function push($value)
    {
    }
    public function rewind()
    {
    }
    public function serialize()
    {
    }
    public function setIteratorMode($flags)
    {
    }
    public function shift()
    {
    }
    public function top()
    {
    }
    public function unserialize($serialized)
    {
    }
    public function unshift($value)
    {
    }
    public function valid()
    {
    }
}
class SplFileInfo
{
    public function __construct($file_name)
    {
    }
    public function __toString()
    {
    }
    final public function _bad_state_ex()
    {
    }
    public function getATime()
    {
    }
    public function getBasename($suffix = null)
    {
    }
    public function getCTime()
    {
    }
    public function getExtension()
    {
    }
    public function getFileInfo($class_name = null)
    {
    }
    public function getFilename()
    {
    }
    public function getGroup()
    {
    }
    public function getInode()
    {
    }
    public function getLinkTarget()
    {
    }
    public function getMTime()
    {
    }
    public function getOwner()
    {
    }
    public function getPath()
    {
    }
    public function getPathInfo($class_name = null)
    {
    }
    public function getPathname()
    {
    }
    public function getPerms()
    {
    }
    public function getRealPath()
    {
    }
    public function getSize()
    {
    }
    public function getType()
    {
    }
    public function isDir()
    {
    }
    public function isExecutable()
    {
    }
    public function isFile()
    {
    }
    public function isLink()
    {
    }
    public function isReadable()
    {
    }
    public function isWritable()
    {
    }
    public function openFile($open_mode = null, $use_include_path = null, $context = null)
    {
    }
    public function setFileClass($class_name = null)
    {
    }
    public function setInfoClass($class_name = null)
    {
    }
}
class SplFileObject extends SplFileInfo implements RecursiveIterator, Traversable, Iterator, SeekableIterator
{
    const DROP_NEW_LINE = 1;
    const READ_AHEAD = 2;
    const READ_CSV = 8;
    const SKIP_EMPTY = 4;
    public function __construct($file_name, $open_mode = null, $use_include_path = null, $context = null)
    {
    }
    public function __toString()
    {
    }
    public function current()
    {
    }
    public function eof()
    {
    }
    public function fflush()
    {
    }
    public function fgetc()
    {
    }
    public function fgetcsv($delimiter = null, $enclosure = null, $escape = null)
    {
    }
    public function fgets()
    {
    }
    public function fgetss($allowable_tags = null)
    {
    }
    public function flock($operation, &$wouldblock = null)
    {
    }
    public function fpassthru()
    {
    }
    public function fputcsv($fields, $delimiter = null, $enclosure = null, $escape = null)
    {
    }
    public function fread($length)
    {
    }
    public function fscanf($format, ...&$vars)
    {
    }
    public function fseek($pos, $whence = null)
    {
    }
    public function fstat()
    {
    }
    public function ftell()
    {
    }
    public function ftruncate($size)
    {
    }
    public function fwrite($str, $length = null)
    {
    }
    public function getChildren()
    {
    }
    public function getCsvControl()
    {
    }
    public function getCurrentLine()
    {
    }
    public function getFlags()
    {
    }
    public function getMaxLineLen()
    {
    }
    public function hasChildren()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function rewind()
    {
    }
    public function seek($line_pos)
    {
    }
    public function setCsvControl($delimiter = null, $enclosure = null, $escape = null)
    {
    }
    public function setFlags($flags)
    {
    }
    public function setMaxLineLen($max_len)
    {
    }
    public function valid()
    {
    }
}
class SplFixedArray implements Iterator, Traversable, ArrayAccess, Countable
{
    public static function fromArray($data, $save_indexes = null)
    {
    }
    public function __construct($size = null)
    {
    }
    public function __wakeup()
    {
    }
    public function count()
    {
    }
    public function current()
    {
    }
    public function getSize()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function offsetExists($index)
    {
    }
    public function offsetGet($index)
    {
    }
    public function offsetSet($index, $newval)
    {
    }
    public function offsetUnset($index)
    {
    }
    public function rewind()
    {
    }
    public function setSize($value)
    {
    }
    public function toArray()
    {
    }
    public function valid()
    {
    }
}
abstract class SplHeap implements Iterator, Traversable, Countable
{
    protected abstract function compare();
    public function count()
    {
    }
    public function current()
    {
    }
    public function extract()
    {
    }
    public function insert($value)
    {
    }
    public function isCorrupted()
    {
    }
    public function isEmpty()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function recoverFromCorruption()
    {
    }
    public function rewind()
    {
    }
    public function top()
    {
    }
    public function valid()
    {
    }
}
class SplMaxHeap extends SplHeap implements Countable, Traversable, Iterator
{
    protected function compare($a, $b)
    {
    }
}
class SplMinHeap extends SplHeap implements Countable, Traversable, Iterator
{
    protected function compare($a, $b)
    {
    }
}
class SplObjectStorage implements Countable, Iterator, Traversable, Serializable, ArrayAccess
{
    public function addAll($object)
    {
    }
    public function attach($object, $inf = null)
    {
    }
    public function contains($object)
    {
    }
    public function count()
    {
    }
    public function current()
    {
    }
    public function detach($object)
    {
    }
    public function getHash($object)
    {
    }
    public function getInfo()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function offsetExists($object)
    {
    }
    public function offsetGet($object)
    {
    }
    public function offsetSet($object, $inf = null)
    {
    }
    public function offsetUnset($object)
    {
    }
    public function removeAll($object)
    {
    }
    public function removeAllExcept($object)
    {
    }
    public function rewind()
    {
    }
    public function serialize()
    {
    }
    public function setInfo($info)
    {
    }
    public function unserialize($serialized)
    {
    }
    public function valid()
    {
    }
}
class SplPriorityQueue implements Iterator, Traversable, Countable
{
    const EXTR_BOTH = 3;
    const EXTR_DATA = 1;
    const EXTR_PRIORITY = 2;
    public function compare($a, $b)
    {
    }
    public function count()
    {
    }
    public function current()
    {
    }
    public function extract()
    {
    }
    public function getExtractFlags()
    {
    }
    public function insert($value, $priority)
    {
    }
    public function isCorrupted()
    {
    }
    public function isEmpty()
    {
    }
    public function key()
    {
    }
    public function next()
    {
    }
    public function recoverFromCorruption()
    {
    }
    public function rewind()
    {
    }
    public function setExtractFlags($flags)
    {
    }
    public function top()
    {
    }
    public function valid()
    {
    }
}
class SplQueue extends SplDoublyLinkedList implements Serializable, ArrayAccess, Countable, Traversable, Iterator
{
    const IT_MODE_DELETE = 1;
    const IT_MODE_FIFO = 0;
    const IT_MODE_KEEP = 0;
    const IT_MODE_LIFO = 2;
    public function dequeue()
    {
    }
    public function enqueue($value)
    {
    }
}
class SplStack extends SplDoublyLinkedList implements Serializable, ArrayAccess, Countable, Traversable, Iterator
{
    const IT_MODE_DELETE = 1;
    const IT_MODE_FIFO = 0;
    const IT_MODE_KEEP = 0;
    const IT_MODE_LIFO = 2;
}
class SplTempFileObject extends SplFileObject implements SeekableIterator, Iterator, Traversable, RecursiveIterator
{
    const DROP_NEW_LINE = 1;
    const READ_AHEAD = 2;
    const READ_CSV = 8;
    const SKIP_EMPTY = 4;
    public function __construct($max_memory = null)
    {
    }
}
class UnderflowException extends RuntimeException
{
}
class UnexpectedValueException extends RuntimeException
{
}
function spl_classes()
{
}
function spl_autoload($class_name, $file_extensions = null)
{
}
function spl_autoload_extensions($file_extensions = null)
{
}
function spl_autoload_register($autoload_function = null, $throw = null, $prepend = null)
{
}
function spl_autoload_unregister($autoload_function)
{
}
function spl_autoload_functions()
{
}
function spl_autoload_call($class_name)
{
}
function class_parents($instance, $autoload = null)
{
}
function class_implements($what, $autoload = null)
{
}
function class_uses($what, $autoload = null)
{
}
function spl_object_hash($obj)
{
}
function iterator_to_array(Traversable $iterator, $use_keys = null)
{
}
function iterator_count(Traversable $iterator)
{
}
function iterator_apply(Traversable $iterator, $function, array $args = null)
{
}