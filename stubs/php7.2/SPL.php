<?php
// Start of extension: SPL
// - parsed on POSIX with PHP 7.2.3 (extension version 7.2.3)
// - parsed on Windows with PHP 7.2.4 (extension version 7.2.4)

/**
 * Classes implementing <code>OuterIterator</code> can be used to iterate
 * over iterators.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.outeriterator.php
 */
interface OuterIterator extends Iterator
{
    /**
     * Returns the inner iterator for the current entry
     *
     * @return Iterator
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/outeriterator.getinneriterator.php
     */
    public function getInnerIterator(): Iterator;
}

/**
 * Classes implementing <code>RecursiveIterator</code> can be used to iterate
 * over iterators recursively.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.recursiveiterator.php
 */
interface RecursiveIterator extends Iterator
{
    /**
     * Returns an iterator for the current entry
     *
     * @return RecursiveIterator
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiterator.getchildren.php
     */
    public function getChildren(): RecursiveIterator;

    /**
     * Returns if an iterator can be created for the current entry
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiterator.haschildren.php
     */
    public function hasChildren(): bool;
}

/**
 * The Seekable iterator.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.seekableiterator.php
 */
interface SeekableIterator extends Iterator
{
    /**
     * Seeks to a position
     *
     * @param mixed $position
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/seekableiterator.seek.php
     */
    public function seek($position): void;
}

/**
 * The <code>SplObserver</code> interface is used alongside
 * <code>SplSubject</code> to implement the Observer Design Pattern.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.splobserver.php
 */
interface SplObserver
{
    /**
     * Receive update from subject
     *
     * @param SplSubject $SplSubject
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobserver.update.php
     */
    public function update(SplSubject $SplSubject): void;
}

/**
 * The <code>SplSubject</code> interface is used alongside
 * <code>SplObserver</code> to implement the Observer Design Pattern.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.splsubject.php
 */
interface SplSubject
{
    /**
     * Attach an SplObserver
     *
     * @param SplObserver $SplObserver
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splsubject.attach.php
     */
    public function attach(SplObserver $SplObserver): void;

    /**
     * Detach an observer
     *
     * @param SplObserver $SplObserver
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splsubject.detach.php
     */
    public function detach(SplObserver $SplObserver): void;

    /**
     * Notify an observer
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splsubject.notify.php
     */
    public function notify(): void;
}

/**
 * An Iterator that iterates over several iterators one after the other.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.appenditerator.php
 */
class AppendIterator extends IteratorIterator
{
    /**
     * Constructs an AppendIterator
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/appenditerator.construct.php
     */
    public function __construct()
    {
    }

    /**
     * Appends an iterator
     *
     * @param Iterator $iterator
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/appenditerator.append.php
     */
    public function append(Iterator $iterator): void
    {
    }

    /**
     * Gets the current value
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/appenditerator.current.php
     */
    public function current()
    {
    }

    /**
     * Gets the ArrayIterator
     *
     * @return ArrayIterator
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/appenditerator.getarrayiterator.php
     */
    public function getArrayIterator(): ArrayIterator
    {
    }

    /**
     * Gets the inner iterator
     *
     * @return Iterator
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/appenditerator.getinneriterator.php
     */
    public function getInnerIterator(): Iterator
    {
    }

    /**
     * Gets an index of iterators
     *
     * @return int
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/appenditerator.getiteratorindex.php
     */
    public function getIteratorIndex(): int
    {
    }

    /**
     * Gets the current key
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/appenditerator.key.php
     */
    public function key()
    {
    }

    /**
     * Moves to the next element
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/appenditerator.next.php
     */
    public function next(): void
    {
    }

    /**
     * Rewinds the Iterator
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/appenditerator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * Checks validity of the current element
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/appenditerator.valid.php
     */
    public function valid(): bool
    {
    }
}

/**
 * This iterator allows to unset and modify values and keys while iterating
 * over Arrays and Objects.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.arrayiterator.php
 */
class ArrayIterator implements ArrayAccess, Countable, SeekableIterator, Serializable
{
    /**
     * @var int
     */
    const ARRAY_AS_PROPS = 2;

    /**
     * @var int
     */
    const STD_PROP_LIST = 1;

    /**
     * Construct an ArrayIterator
     *
     * @param mixed|null $array
     * @param mixed|null $ar_flags
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.construct.php
     */
    public function __construct($array = null, $ar_flags = null)
    {
    }

    /**
     * Append an element
     *
     * @param mixed $value
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.append.php
     */
    public function append($value): void
    {
    }

    /**
     * Sort array by values
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.asort.php
     */
    public function asort(): void
    {
    }

    /**
     * Count elements
     *
     * @return int
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.count.php
     */
    public function count(): int
    {
    }

    /**
     * Return current array entry
     *
     * @return mixed
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.current.php
     */
    public function current()
    {
    }

    /**
     * Get array copy
     *
     * @return array
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.getarraycopy.php
     */
    public function getArrayCopy(): array
    {
    }

    /**
     * Get flags
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.getflags.php
     */
    public function getFlags(): void
    {
    }

    /**
     * Return current array key
     *
     * @return mixed
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.key.php
     */
    public function key()
    {
    }

    /**
     * Sort array by keys
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.ksort.php
     */
    public function ksort(): void
    {
    }

    /**
     * Sort an array naturally, case insensitive
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.natcasesort.php
     */
    public function natcasesort(): void
    {
    }

    /**
     * Sort an array naturally
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.natsort.php
     */
    public function natsort(): void
    {
    }

    /**
     * Move to next entry
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * Check if offset exists
     *
     * @param mixed $index
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.offsetexists.php
     */
    public function offsetExists($index): void
    {
    }

    /**
     * Get value for an offset
     *
     * @param mixed $index
     *
     * @return mixed
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.offsetget.php
     */
    public function offsetGet($index)
    {
    }

    /**
     * Set value for an offset
     *
     * @param mixed $index
     * @param mixed $newval
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.offsetset.php
     */
    public function offsetSet($index, $newval): void
    {
    }

    /**
     * Unset value for an offset
     *
     * @param mixed $index
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.offsetunset.php
     */
    public function offsetUnset($index): void
    {
    }

    /**
     * Rewind array back to the start
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * Seek to position
     *
     * @param mixed $position
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.seek.php
     */
    public function seek($position): void
    {
    }

    /**
     * Serialize
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.serialize.php
     */
    public function serialize(): string
    {
    }

    /**
     * Set behaviour flags
     *
     * @param mixed $flags
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.setflags.php
     */
    public function setFlags($flags): void
    {
    }

    /**
     * Sort with a user-defined comparison function and maintain index association
     *
     * @param mixed $cmp_function
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.uasort.php
     */
    public function uasort($cmp_function): void
    {
    }

    /**
     * Sort by keys using a user-defined comparison function
     *
     * @param mixed $cmp_function
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.uksort.php
     */
    public function uksort($cmp_function): void
    {
    }

    /**
     * Unserialize
     *
     * @param mixed $serialized
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.unserialize.php
     */
    public function unserialize($serialized): string
    {
    }

    /**
     * Check whether array contains more entries
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.valid.php
     */
    public function valid(): bool
    {
    }
}

/**
 * This class allows objects to work as arrays.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.arrayobject.php
 */
class ArrayObject implements ArrayAccess, Countable, IteratorAggregate, Serializable
{
    /**
     * @var int
     */
    const ARRAY_AS_PROPS = 2;

    /**
     * @var int
     */
    const STD_PROP_LIST = 1;

    /**
     * Construct a new array object
     *
     * @param mixed|null $array
     * @param mixed|null $ar_flags
     * @param mixed|null $iterator_class
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.construct.php
     */
    public function __construct($array = null, $ar_flags = null, $iterator_class = null)
    {
    }

    /**
     * Appends the value
     *
     * @param mixed $value
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.append.php
     */
    public function append($value): void
    {
    }

    /**
     * Sort the entries by value
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.asort.php
     */
    public function asort(): void
    {
    }

    /**
     * Get the number of public properties in the ArrayObject
     *
     * @return int
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.count.php
     */
    public function count(): int
    {
    }

    /**
     * Exchange the array for another one
     *
     * @param mixed $array
     *
     * @return array
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.exchangearray.php
     */
    public function exchangeArray($array): array
    {
    }

    /**
     * Creates a copy of the ArrayObject
     *
     * @return array
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.getarraycopy.php
     */
    public function getArrayCopy(): array
    {
    }

    /**
     * Gets the behavior flags
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.getflags.php
     */
    public function getFlags(): int
    {
    }

    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return ArrayIterator
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.getiterator.php
     */
    public function getIterator(): ArrayIterator
    {
    }

    /**
     * Gets the iterator classname for the ArrayObject
     *
     * @return string
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.getiteratorclass.php
     */
    public function getIteratorClass(): string
    {
    }

    /**
     * Sort the entries by key
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.ksort.php
     */
    public function ksort(): void
    {
    }

    /**
     * Sort an array using a case insensitive "natural order" algorithm
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.natcasesort.php
     */
    public function natcasesort(): void
    {
    }

    /**
     * Sort entries using a "natural order" algorithm
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.natsort.php
     */
    public function natsort(): void
    {
    }

    /**
     * Returns whether the requested index exists
     *
     * @param mixed $index
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.offsetexists.php
     */
    public function offsetExists($index): bool
    {
    }

    /**
     * Returns the value at the specified index
     *
     * @param mixed $index
     *
     * @return mixed
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.offsetget.php
     */
    public function offsetGet($index)
    {
    }

    /**
     * Sets the value at the specified index to newval
     *
     * @param mixed $index
     * @param mixed $newval
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.offsetset.php
     */
    public function offsetSet($index, $newval): void
    {
    }

    /**
     * Unsets the value at the specified index
     *
     * @param mixed $index
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.offsetunset.php
     */
    public function offsetUnset($index): void
    {
    }

    /**
     * Serialize an ArrayObject
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.serialize.php
     */
    public function serialize(): string
    {
    }

    /**
     * Sets the behavior flags
     *
     * @param mixed $flags
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.setflags.php
     */
    public function setFlags($flags): void
    {
    }

    /**
     * Sets the iterator classname for the ArrayObject
     *
     * @param mixed $iteratorClass
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.setiteratorclass.php
     */
    public function setIteratorClass($iteratorClass): void
    {
    }

    /**
     * Sort the entries with a user-defined comparison function and maintain key association
     *
     * @param mixed $cmp_function
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.uasort.php
     */
    public function uasort($cmp_function): void
    {
    }

    /**
     * Sort the entries by keys using a user-defined comparison function
     *
     * @param mixed $cmp_function
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.uksort.php
     */
    public function uksort($cmp_function): void
    {
    }

    /**
     * Unserialize an ArrayObject
     *
     * @param mixed $serialized
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.unserialize.php
     */
    public function unserialize($serialized): void
    {
    }
}

/**
 * Exception thrown if a callback refers to an undefined function or if some
 * arguments are missing.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.php#class.badfunctioncallexception
 */
class BadFunctionCallException extends LogicException
{
}

/**
 * Exception thrown if a callback refers to an undefined method or if some
 * arguments are missing.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.php#class.badmethodcallexception
 */
class BadMethodCallException extends BadFunctionCallException
{
}

/**
 * This object supports cached iteration over another iterator.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.cachingiterator.php
 */
class CachingIterator extends IteratorIterator implements ArrayAccess, Countable
{
    /**
     * @var int
     */
    const CALL_TOSTRING = 1;

    /**
     * @var int
     */
    const CATCH_GET_CHILD = 16;

    /**
     * @var int
     */
    const FULL_CACHE = 256;

    /**
     * @var int
     */
    const TOSTRING_USE_CURRENT = 4;

    /**
     * @var int
     */
    const TOSTRING_USE_INNER = 8;

    /**
     * @var int
     */
    const TOSTRING_USE_KEY = 2;

    /**
     * Construct a new CachingIterator object for the iterator
     *
     * @param Iterator $iterator
     * @param mixed|null $flags
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.construct.php
     */
    public function __construct(Iterator $iterator, $flags = null)
    {
    }

    /**
     * Return the string representation of the current element
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.tostring.php
     */
    public function __toString(): void
    {
    }

    /**
     * The number of elements in the iterator
     *
     * @return int
     *
     * @since PHP 5 >= 5.2.2, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.count.php
     */
    public function count(): int
    {
    }

    /**
     * Return the current element
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.current.php
     */
    public function current(): void
    {
    }

    /**
     * Retrieve the contents of the cache
     *
     * @return array
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.getcache.php
     */
    public function getCache(): array
    {
    }

    /**
     * Get flags used
     *
     * @return int
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.getflags.php
     */
    public function getFlags(): int
    {
    }

    /**
     * Returns the inner iterator
     *
     * @return Iterator
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.getinneriterator.php
     */
    public function getInnerIterator(): Iterator
    {
    }

    /**
     * Check whether the inner iterator has a valid next element
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.hasnext.php
     */
    public function hasNext(): void
    {
    }

    /**
     * Return the key for the current element
     *
     * @return mixed
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.key.php
     */
    public function key()
    {
    }

    /**
     * Move the iterator forward
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * The offsetExists purpose
     *
     * @param mixed $index
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.offsetexists.php
     */
    public function offsetExists($index): void
    {
    }

    /**
     * The offsetGet purpose
     *
     * @param mixed $index
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.offsetget.php
     */
    public function offsetGet($index): void
    {
    }

    /**
     * The offsetSet purpose
     *
     * @param mixed $index
     * @param mixed $newval
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.offsetset.php
     */
    public function offsetSet($index, $newval): void
    {
    }

    /**
     * The offsetUnset purpose
     *
     * @param mixed $index
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.offsetunset.php
     */
    public function offsetUnset($index): void
    {
    }

    /**
     * Rewind the iterator
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * The setFlags purpose
     *
     * @param mixed $flags
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.setflags.php
     */
    public function setFlags($flags): void
    {
    }

    /**
     * Check whether the current element is valid
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.valid.php
     */
    public function valid(): void
    {
    }
}

/**
 * The callback should accept up to three arguments:
 * the current item, the current key and the iterator, respectively.
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.callbackfilteriterator.php
 */
class CallbackFilterIterator extends FilterIterator
{
    /**
     * Create a filtered iterator from another iterator
     *
     * @param Iterator $iterator
     * @param mixed $callback
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/callbackfilteriterator.construct.php
     */
    public function __construct(Iterator $iterator, $callback)
    {
    }

    /**
     * Calls the callback with the current value, the current key and the inner iterator as arguments
     *
     * @return string
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/callbackfilteriterator.accept.php
     */
    public function accept(): string
    {
    }
}

/**
 * The DirectoryIterator class provides a simple interface for viewing
 * the contents of filesystem directories.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.directoryiterator.php
 */
class DirectoryIterator extends SplFileInfo implements SeekableIterator
{
    /**
     * Constructs a new directory iterator from a path
     *
     * @param mixed $path
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.construct.php
     */
    public function __construct($path)
    {
    }

    /**
     * Get file name as a string
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * Return the current DirectoryIterator item
     *
     * @return DirectoryIterator
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.current.php
     */
    public function current(): DirectoryIterator
    {
    }

    /**
     * Get base name of current DirectoryIterator item
     *
     * @param mixed|null $suffix
     *
     * @return string
     *
     * @since PHP 5 >= 5.2.2, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.getbasename.php
     */
    public function getBasename($suffix = null): string
    {
    }

    /**
     * Gets the file extension
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.6, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.getextension.php
     */
    public function getExtension(): string
    {
    }

    /**
     * Return file name of current DirectoryIterator item
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.getfilename.php
     */
    public function getFilename(): string
    {
    }

    /**
     * Determine if current DirectoryIterator item is '.' or '..'
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.isdot.php
     */
    public function isDot(): bool
    {
    }

    /**
     * Return the key for the current DirectoryIterator item
     *
     * @return string
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.key.php
     */
    public function key(): string
    {
    }

    /**
     * Move forward to next DirectoryIterator item
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * Rewind the DirectoryIterator back to the start
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * Seek to a DirectoryIterator item
     *
     * @param mixed $position
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.seek.php
     */
    public function seek($position): void
    {
    }

    /**
     * Check whether current DirectoryIterator position is a valid file
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.valid.php
     */
    public function valid(): bool
    {
    }
}

/**
 * Exception thrown if a value does not adhere to a defined valid data domain.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.php#class.domainexception
 */
class DomainException extends LogicException
{
}

/**
 * The EmptyIterator class for an empty iterator.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.emptyiterator.php
 */
class EmptyIterator implements Iterator
{
    /**
     * The current() method
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/emptyiterator.current.php
     */
    public function current()
    {
    }

    /**
     * The key() method
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/emptyiterator.key.php
     */
    public function key()
    {
    }

    /**
     * The next() method
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/emptyiterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * The rewind() method
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/emptyiterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * The valid() method
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/emptyiterator.valid.php
     */
    public function valid(): bool
    {
    }
}

/**
 * The Filesystem iterator
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.filesystemiterator.php
 */
class FilesystemIterator extends DirectoryIterator
{
    /**
     * @var int
     */
    const CURRENT_AS_FILEINFO = 0;

    /**
     * @var int
     */
    const CURRENT_AS_PATHNAME = 32;

    /**
     * @var int
     */
    const CURRENT_AS_SELF = 16;

    /**
     * @var int
     */
    const CURRENT_MODE_MASK = 240;

    /**
     * @var int
     */
    const FOLLOW_SYMLINKS = 512;

    /**
     * @var int
     */
    const KEY_AS_FILENAME = 256;

    /**
     * @var int
     */
    const KEY_AS_PATHNAME = 0;

    /**
     * @var int
     */
    const KEY_MODE_MASK = 3840;

    /**
     * @var int
     */
    const NEW_CURRENT_AND_KEY = 256;

    /**
     * @var int
     */
    const OTHER_MODE_MASK = 12288;

    /**
     * @var int
     */
    const SKIP_DOTS = 4096;

    /**
     * @var int
     */
    const UNIX_PATHS = 8192;

    /**
     * Constructs a new filesystem iterator
     *
     * @param mixed $path
     * @param mixed|null $flags
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filesystemiterator.construct.php
     */
    public function __construct($path, $flags = null)
    {
    }

    /**
     * The current file
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filesystemiterator.current.php
     */
    public function current()
    {
    }

    /**
     * Get the handling flags
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filesystemiterator.getflags.php
     */
    public function getFlags(): int
    {
    }

    /**
     * Retrieve the key for the current file
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filesystemiterator.key.php
     */
    public function key(): string
    {
    }

    /**
     * Move to the next file
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filesystemiterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * Rewinds back to the beginning
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filesystemiterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * Sets handling flags
     *
     * @param mixed|null $flags
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filesystemiterator.setflags.php
     */
    public function setFlags($flags = null): void
    {
    }
}

/**
 * This abstract iterator filters out unwanted values. This class should be extended to
 * implement custom iterator filters. The <code>FilterIterator::accept</code>
 * must be implemented in the subclass.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.filteriterator.php
 */
abstract class FilterIterator extends IteratorIterator
{
    /**
     * Construct a filterIterator
     *
     * @param Iterator $iterator
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filteriterator.construct.php
     */
    public function __construct(Iterator $iterator)
    {
    }

    /**
     * Check whether the current element of the iterator is acceptable
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filteriterator.accept.php
     */
    abstract public function accept(): bool;

    /**
     * Get the current element value
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filteriterator.current.php
     */
    public function current()
    {
    }

    /**
     * Get the inner iterator
     *
     * @return Iterator
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filteriterator.getinneriterator.php
     */
    public function getInnerIterator(): Iterator
    {
    }

    /**
     * Get the current key
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filteriterator.key.php
     */
    public function key()
    {
    }

    /**
     * Move the iterator forward
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filteriterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * Rewind the iterator
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filteriterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * Check whether the current element is valid
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filteriterator.valid.php
     */
    public function valid(): bool
    {
    }
}

/**
 * Iterates through a file system in a similar fashion to
 * <code>glob</code>.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.globiterator.php
 */
class GlobIterator extends FilesystemIterator implements Countable
{
    /**
     * Construct a directory using glob
     *
     * @param mixed $path
     * @param mixed|null $flags
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/globiterator.construct.php
     */
    public function __construct($path, $flags = null)
    {
    }

    /**
     * Get the number of directories and files
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/globiterator.count.php
     */
    public function count(): int
    {
    }
}

/**
 * The <code>InfiniteIterator</code> allows one to
 * infinitely iterate over an iterator without having to manually
 * rewind the iterator upon reaching its end.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.infiniteiterator.php
 */
class InfiniteIterator extends IteratorIterator
{
    /**
     * Constructs an InfiniteIterator
     *
     * @param Iterator $iterator
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/infiniteiterator.construct.php
     */
    public function __construct(Iterator $iterator)
    {
    }

    /**
     * Moves the inner Iterator forward or rewinds it
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/infiniteiterator.next.php
     */
    public function next(): void
    {
    }
}

/**
 * Exception thrown if an argument is not of the expected type.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.php#class.invalidargumentexception
 */
class InvalidArgumentException extends LogicException
{
}

/**
 * This iterator wrapper allows the conversion of anything that is
 * Traversable into an Iterator.
 * It is important to understand that most classes that do not implement
 * Iterators have reasons as most likely they do not allow the full
 * Iterator feature set. If so, techniques should be provided to prevent
 * misuse, otherwise expect exceptions or fatal errors.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.iteratoriterator.php
 */
class IteratorIterator implements OuterIterator
{
    /**
     * Create an iterator from anything that is traversable
     *
     * @param Traversable $iterator
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/iteratoriterator.construct.php
     */
    public function __construct(Traversable $iterator)
    {
    }

    /**
     * Get the current value
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/iteratoriterator.current.php
     */
    public function current()
    {
    }

    /**
     * Get the inner iterator
     *
     * @return Traversable
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/iteratoriterator.getinneriterator.php
     */
    public function getInnerIterator(): Traversable
    {
    }

    /**
     * Get the key of the current element
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/iteratoriterator.key.php
     */
    public function key()
    {
    }

    /**
     * Forward to the next element
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/iteratoriterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * Rewind to the first element
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/iteratoriterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * Checks if the iterator is valid
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/iteratoriterator.valid.php
     */
    public function valid(): bool
    {
    }
}

/**
 * Exception thrown if a length is invalid.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.php#class.lengthexception
 */
class LengthException extends LogicException
{
}

/**
 * The <code>LimitIterator</code> class allows iteration over
 * a limited subset of items in an <code>Iterator</code>.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.limititerator.php
 */
class LimitIterator extends IteratorIterator
{
    /**
     * Construct a LimitIterator
     *
     * @param Iterator $iterator
     * @param mixed|null $offset
     * @param mixed|null $count
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/limititerator.construct.php
     */
    public function __construct(Iterator $iterator, $offset = null, $count = null)
    {
    }

    /**
     * Get current element
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/limititerator.current.php
     */
    public function current()
    {
    }

    /**
     * Get inner iterator
     *
     * @return Iterator
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/limititerator.getinneriterator.php
     */
    public function getInnerIterator(): Iterator
    {
    }

    /**
     * Return the current position
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/limititerator.getposition.php
     */
    public function getPosition(): int
    {
    }

    /**
     * Get current key
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/limititerator.key.php
     */
    public function key()
    {
    }

    /**
     * Move the iterator forward
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/limititerator.next.php
     */
    public function next(): void
    {
    }

    /**
     * Rewind the iterator to the specified starting offset
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/limititerator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * Seek to the given position
     *
     * @param mixed $position
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/limititerator.seek.php
     */
    public function seek($position): int
    {
    }

    /**
     * Check whether the current element is valid
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/limititerator.valid.php
     */
    public function valid(): bool
    {
    }
}

/**
 * Exception that represents error in the program logic. This kind of
 * exception should lead directly to a fix in your code.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.php#class.logicexception
 */
class LogicException extends Exception
{
}

/**
 * An Iterator that sequentially iterates over all attached iterators
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.multipleiterator.php
 */
class MultipleIterator implements Iterator
{
    /**
     * @var int
     */
    const MIT_KEYS_ASSOC = 2;

    /**
     * @var int
     */
    const MIT_KEYS_NUMERIC = 0;

    /**
     * @var int
     */
    const MIT_NEED_ALL = 1;

    /**
     * @var int
     */
    const MIT_NEED_ANY = 0;

    /**
     * Constructs a new MultipleIterator
     *
     * @param mixed $flags
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.construct.php
     */
    public function __construct($flags)
    {
    }

    /**
     * Attaches iterator information
     *
     * @param Iterator $iterator
     * @param mixed|null $infos
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.attachiterator.php
     */
    public function attachIterator(Iterator $iterator, $infos = null): void
    {
    }

    /**
     * Checks if an iterator is attached
     *
     * @param Iterator $iterator
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.containsiterator.php
     */
    public function containsIterator(Iterator $iterator): bool
    {
    }

    /**
     * Gets the number of attached iterator instances
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.countiterators.php
     */
    public function countIterators(): int
    {
    }

    /**
     * Gets the registered iterator instances
     *
     * @return array
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.current.php
     */
    public function current(): array
    {
    }

    /**
     * Detaches an iterator
     *
     * @param Iterator $iterator
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.detachiterator.php
     */
    public function detachIterator(Iterator $iterator): void
    {
    }

    /**
     * Gets the flag information
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.getflags.php
     */
    public function getFlags(): int
    {
    }

    /**
     * Gets the registered iterator instances
     *
     * @return array
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.key.php
     */
    public function key(): array
    {
    }

    /**
     * Moves all attached iterator instances forward
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * Rewinds all attached iterator instances
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * Sets flags
     *
     * @param mixed $flags
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.setflags.php
     */
    public function setFlags($flags): void
    {
    }

    /**
     * Checks the validity of sub iterators
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.valid.php
     */
    public function valid(): bool
    {
    }
}

/**
 * This iterator cannot be rewound.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.norewinditerator.php
 */
class NoRewindIterator extends IteratorIterator
{
    /**
     * Construct a NoRewindIterator
     *
     * @param Iterator $iterator
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/norewinditerator.construct.php
     */
    public function __construct(Iterator $iterator)
    {
    }

    /**
     * Get the current value
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/norewinditerator.current.php
     */
    public function current()
    {
    }

    /**
     * Get the inner iterator
     *
     * @return iterator
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/norewinditerator.getinneriterator.php
     */
    public function getInnerIterator(): iterator
    {
    }

    /**
     * Get the current key
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/norewinditerator.key.php
     */
    public function key()
    {
    }

    /**
     * Forward to the next element
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/norewinditerator.next.php
     */
    public function next(): void
    {
    }

    /**
     * Prevents the rewind operation on the inner iterator
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/norewinditerator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * Validates the iterator
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/norewinditerator.valid.php
     */
    public function valid(): bool
    {
    }
}

/**
 * Exception thrown if a value is not a valid key. This represents errors
 * that cannot be detected at compile time.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.php#class.outofboundsexception
 */
class OutOfBoundsException extends RuntimeException
{
}

/**
 * Exception thrown when an illegal index was requested. This represents
 * errors that should be detected at compile time.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.php#class.outofrangeexception
 */
class OutOfRangeException extends LogicException
{
}

/**
 * Exception thrown when adding an element to a full container.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.php#class.overflowexception
 */
class OverflowException extends RuntimeException
{
}

/**
 * This extended <code>FilterIterator</code> allows a recursive
 * iteration using <code>RecursiveIteratorIterator</code> that only
 * shows those elements which have children.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.parentiterator.php
 */
class ParentIterator extends RecursiveFilterIterator
{
    /**
     * Constructs a ParentIterator
     *
     * @param RecursiveIterator $iterator
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/parentiterator.construct.php
     */
    public function __construct(RecursiveIterator $iterator)
    {
    }

    /**
     * Determines acceptability
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/parentiterator.accept.php
     */
    public function accept(): bool
    {
    }
}

/**
 * Exception thrown to indicate range errors during program execution.
 * Normally this means there was an arithmetic error other than
 * under/overflow. This is the runtime version of
 * <code>DomainException</code>.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.php#class.rangeexception
 */
class RangeException extends RuntimeException
{
}

/**
 * This iterator allows to unset and modify values and keys while iterating over Arrays and Objects
 * in the same way as the <code>ArrayIterator</code>. Additionally it is possible to iterate
 * over the current iterator entry.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.recursivearrayiterator.php
 */
class RecursiveArrayIterator extends ArrayIterator implements RecursiveIterator
{
    /**
     * @var int
     */
    const CHILD_ARRAYS_ONLY = 4;

    /**
     * Returns an iterator for the current entry if it is an <code>array</code> or an <code>object</code>
     *
     * @return RecursiveArrayIterator
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivearrayiterator.getchildren.php
     */
    public function getChildren(): RecursiveArrayIterator
    {
    }

    /**
     * Returns whether current entry is an array or an object
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivearrayiterator.haschildren.php
     */
    public function hasChildren(): bool
    {
    }
}

/**
 * ...
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.recursivecachingiterator.php
 */
class RecursiveCachingIterator extends CachingIterator implements RecursiveIterator
{
    /**
     * Construct
     *
     * @param Iterator $iterator
     * @param mixed|null $flags
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivecachingiterator.construct.php
     */
    public function __construct(Iterator $iterator, $flags = null)
    {
    }

    /**
     * Return the inner iterator's children as a RecursiveCachingIterator
     *
     * @return RecursiveCachingIterator
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivecachingiterator.getchildren.php
     */
    public function getChildren(): RecursiveCachingIterator
    {
    }

    /**
     * Check whether the current element of the inner iterator has children
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivecachingiterator.haschildren.php
     */
    public function hasChildren(): bool
    {
    }
}

/**
 * The callback should accept up to three arguments:
 * the current item, the current key and the iterator, respectively.
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.recursivecallbackfilteriterator.php
 */
class RecursiveCallbackFilterIterator extends CallbackFilterIterator implements RecursiveIterator
{
    /**
     * Create a RecursiveCallbackFilterIterator from a RecursiveIterator
     *
     * @param RecursiveIterator $iterator
     * @param mixed $callback
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivecallbackfilteriterator.construct.php
     */
    public function __construct(RecursiveIterator $iterator, $callback)
    {
    }

    /**
     * Return the inner iterator's children contained in a RecursiveCallbackFilterIterator
     *
     * @return RecursiveCallbackFilterIterator
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivecallbackfilteriterator.getchildren.php
     */
    public function getChildren(): RecursiveCallbackFilterIterator
    {
    }

    /**
     * Check whether the inner iterator's current element has children
     *
     * @return bool
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivecallbackfilteriterator.haschildren.php
     */
    public function hasChildren(): bool
    {
    }
}

/**
 * The <code>RecursiveDirectoryIterator</code> provides
 * an interface for iterating recursively over filesystem directories.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.recursivedirectoryiterator.php
 */
class RecursiveDirectoryIterator extends FilesystemIterator implements RecursiveIterator
{
    /**
     * Constructs a RecursiveDirectoryIterator
     *
     * @param mixed $path
     * @param mixed|null $flags
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivedirectoryiterator.construct.php
     */
    public function __construct($path, $flags = null)
    {
    }

    /**
     * Returns an iterator for the current entry if it is a directory
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivedirectoryiterator.getchildren.php
     */
    public function getChildren()
    {
    }

    /**
     * Get sub path
     *
     * @return string
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivedirectoryiterator.getsubpath.php
     */
    public function getSubPath(): string
    {
    }

    /**
     * Get sub path and name
     *
     * @return string
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivedirectoryiterator.getsubpathname.php
     */
    public function getSubPathname(): string
    {
    }

    /**
     * Returns whether current entry is a directory and not '.' or '..'
     *
     * @param mixed|null $allow_links
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivedirectoryiterator.haschildren.php
     */
    public function hasChildren($allow_links = null): bool
    {
    }
}

/**
 * This abstract iterator filters out unwanted values for a <code>RecursiveIterator</code>.
 * This class should be extended to implement custom filters.
 * The <code>RecursiveFilterIterator::accept</code> must be implemented in the subclass.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.recursivefilteriterator.php
 */
abstract class RecursiveFilterIterator extends FilterIterator implements RecursiveIterator
{
    /**
     * Create a RecursiveFilterIterator from a RecursiveIterator
     *
     * @param RecursiveIterator $iterator
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivefilteriterator.construct.php
     */
    public function __construct(RecursiveIterator $iterator)
    {
    }

    /**
     * Return the inner iterator's children contained in a RecursiveFilterIterator
     *
     * @return RecursiveFilterIterator
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivefilteriterator.getchildren.php
     */
    public function getChildren(): RecursiveFilterIterator
    {
    }

    /**
     * Check whether the inner iterator's current element has children
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivefilteriterator.haschildren.php
     */
    public function hasChildren(): bool
    {
    }
}

/**
 * Can be used to iterate through recursive iterators.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.recursiveiteratoriterator.php
 */
class RecursiveIteratorIterator implements OuterIterator
{
    /**
     * @var int
     */
    const CATCH_GET_CHILD = 16;

    /**
     * @var int
     */
    const CHILD_FIRST = 2;

    /**
     * @var int
     */
    const LEAVES_ONLY = 0;

    /**
     * @var int
     */
    const SELF_FIRST = 1;

    /**
     * Construct a RecursiveIteratorIterator
     *
     * @param Traversable $iterator
     * @param mixed|null $mode
     * @param mixed|null $flags
     *
     * @since PHP 5 >= 5.1.3, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.construct.php
     */
    public function __construct(Traversable $iterator, $mode = null, $flags = null)
    {
    }

    /**
     * Begin children
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.beginchildren.php
     */
    public function beginChildren(): void
    {
    }

    /**
     * Begin Iteration
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.beginiteration.php
     */
    public function beginIteration(): void
    {
    }

    /**
     * Get children
     *
     * @return RecursiveIterator
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.callgetchildren.php
     */
    public function callGetChildren(): RecursiveIterator
    {
    }

    /**
     * Has children
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.callhaschildren.php
     */
    public function callHasChildren(): bool
    {
    }

    /**
     * Access the current element value
     *
     * @return mixed
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.current.php
     */
    public function current()
    {
    }

    /**
     * End children
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.endchildren.php
     */
    public function endChildren(): void
    {
    }

    /**
     * End Iteration
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.enditeration.php
     */
    public function endIteration(): void
    {
    }

    /**
     * Get the current depth of the recursive iteration
     *
     * @return int
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.getdepth.php
     */
    public function getDepth(): int
    {
    }

    /**
     * Get inner iterator
     *
     * @return iterator
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.getinneriterator.php
     */
    public function getInnerIterator(): iterator
    {
    }

    /**
     * Get max depth
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.getmaxdepth.php
     */
    public function getMaxDepth()
    {
    }

    /**
     * The current active sub iterator
     *
     * @param mixed|null $level
     *
     * @return RecursiveIterator
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.getsubiterator.php
     */
    public function getSubIterator($level = null): RecursiveIterator
    {
    }

    /**
     * Access the current key
     *
     * @return mixed
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.key.php
     */
    public function key()
    {
    }

    /**
     * Move forward to the next element
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * Next element
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.nextelement.php
     */
    public function nextElement(): void
    {
    }

    /**
     * Rewind the iterator to the first element of the top level inner iterator
     *
     * @return void
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * Set max depth
     *
     * @param mixed|null $max_depth
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.setmaxdepth.php
     */
    public function setMaxDepth($max_depth = null): void
    {
    }

    /**
     * Check whether the current position is valid
     *
     * @return bool
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.valid.php
     */
    public function valid(): bool
    {
    }
}

/**
 * This recursive iterator can filter another recursive iterator via a regular expression.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.recursiveregexiterator.php
 */
class RecursiveRegexIterator extends RegexIterator implements RecursiveIterator
{
    /**
     * Creates a new RecursiveRegexIterator
     *
     * @param RecursiveIterator $iterator
     * @param mixed $regex
     * @param mixed|null $mode
     * @param mixed|null $flags
     * @param mixed|null $preg_flags
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveregexiterator.construct.php
     */
    public function __construct(RecursiveIterator $iterator, $regex, $mode = null, $flags = null, $preg_flags = null)
    {
    }

    /**
     * @since PHP 5 >= 5.2.0, PHP 7
     */
    public function accept()
    {
    }

    /**
     * Returns an iterator for the current entry
     *
     * @return RecursiveRegexIterator
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveregexiterator.getchildren.php
     */
    public function getChildren(): RecursiveRegexIterator
    {
    }

    /**
     * Returns whether an iterator can be obtained for the current entry
     *
     * @return bool
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveregexiterator.haschildren.php
     */
    public function hasChildren(): bool
    {
    }
}

/**
 * Allows iterating over a <code>RecursiveIterator</code> to generate an ASCII graphic tree.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.recursivetreeiterator.php
 */
class RecursiveTreeIterator extends RecursiveIteratorIterator
{
    /**
     * @var int
     */
    const BYPASS_CURRENT = 4;

    /**
     * @var int
     */
    const BYPASS_KEY = 8;

    /**
     * @var int
     */
    const PREFIX_END_HAS_NEXT = 3;

    /**
     * @var int
     */
    const PREFIX_END_LAST = 4;

    /**
     * @var int
     */
    const PREFIX_LEFT = 0;

    /**
     * @var int
     */
    const PREFIX_MID_HAS_NEXT = 1;

    /**
     * @var int
     */
    const PREFIX_MID_LAST = 2;

    /**
     * @var int
     */
    const PREFIX_RIGHT = 5;

    /**
     * Construct a RecursiveTreeIterator
     *
     * @param Traversable $iterator
     * @param mixed|null $flags
     * @param mixed|null $caching_it_flags
     * @param mixed|null $mode
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.construct.php
     */
    public function __construct(Traversable $iterator, $flags = null, $caching_it_flags = null, $mode = null)
    {
    }

    /**
     * Begin children
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.beginchildren.php
     */
    public function beginChildren(): void
    {
    }

    /**
     * Begin iteration
     *
     * @return RecursiveIterator
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.beginiteration.php
     */
    public function beginIteration(): RecursiveIterator
    {
    }

    /**
     * Get children
     *
     * @return RecursiveIterator
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.callgetchildren.php
     */
    public function callGetChildren(): RecursiveIterator
    {
    }

    /**
     * Has children
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.callhaschildren.php
     */
    public function callHasChildren(): bool
    {
    }

    /**
     * Get current element
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.current.php
     */
    public function current(): string
    {
    }

    /**
     * End children
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.endchildren.php
     */
    public function endChildren(): void
    {
    }

    /**
     * End iteration
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.enditeration.php
     */
    public function endIteration(): void
    {
    }

    /**
     * Get current entry
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.getentry.php
     */
    public function getEntry(): string
    {
    }

    /**
     * Get the postfix
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.getpostfix.php
     */
    public function getPostfix(): string
    {
    }

    /**
     * Get the prefix
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.getprefix.php
     */
    public function getPrefix(): string
    {
    }

    /**
     * Get the key of the current element
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.key.php
     */
    public function key(): string
    {
    }

    /**
     * Move to next element
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * Next element
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.nextelement.php
     */
    public function nextElement(): void
    {
    }

    /**
     * Rewind iterator
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * Set postfix
     *
     * @return void
     *
     * @since PHP 5 >= 5.5.3, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.setpostfix.php
     */
    public function setPostfix(): void
    {
    }

    /**
     * Set a part of the prefix
     *
     * @param mixed $part
     * @param mixed $value
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.setprefixpart.php
     */
    public function setPrefixPart($part, $value): void
    {
    }

    /**
     * Check validity
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.valid.php
     */
    public function valid(): bool
    {
    }
}

/**
 * This iterator can be used to filter another iterator based on a regular expression.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.regexiterator.php
 */
class RegexIterator extends FilterIterator
{
    /**
     * @var int
     */
    const ALL_MATCHES = 2;

    /**
     * @var int
     */
    const GET_MATCH = 1;

    /**
     * @var int
     */
    const INVERT_MATCH = 2;

    /**
     * @var int
     */
    const MATCH = 0;

    /**
     * @var int
     */
    const REPLACE = 4;

    /**
     * @var int
     */
    const SPLIT = 3;

    /**
     * @var int
     */
    const USE_KEY = 1;

    /**
     * @var mixed
     */
    public $replacement;

    /**
     * Create a new RegexIterator
     *
     * @param Iterator $iterator
     * @param mixed $regex
     * @param mixed|null $mode
     * @param mixed|null $flags
     * @param mixed|null $preg_flags
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/regexiterator.construct.php
     */
    public function __construct(Iterator $iterator, $regex, $mode = null, $flags = null, $preg_flags = null)
    {
    }

    /**
     * Get accept status
     *
     * @return bool
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/regexiterator.accept.php
     */
    public function accept(): bool
    {
    }

    /**
     * Get flags
     *
     * @return int
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/regexiterator.getflags.php
     */
    public function getFlags(): int
    {
    }

    /**
     * Returns operation mode
     *
     * @return int
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/regexiterator.getmode.php
     */
    public function getMode(): int
    {
    }

    /**
     * Returns the regular expression flags
     *
     * @return int
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/regexiterator.getpregflags.php
     */
    public function getPregFlags(): int
    {
    }

    /**
     * Returns current regular expression
     *
     * @return string
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/regexiterator.getregex.php
     */
    public function getRegex(): string
    {
    }

    /**
     * Sets the flags
     *
     * @param mixed $flags
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/regexiterator.setflags.php
     */
    public function setFlags($flags): void
    {
    }

    /**
     * Sets the operation mode
     *
     * @param mixed $mode
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/regexiterator.setmode.php
     */
    public function setMode($mode): void
    {
    }

    /**
     * Sets the regular expression flags
     *
     * @param mixed $preg_flags
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/regexiterator.setpregflags.php
     */
    public function setPregFlags($preg_flags): void
    {
    }
}

/**
 * Exception thrown if an error which can only be found on runtime occurs.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.php#class.runtimeexception
 */
class RuntimeException extends Exception
{
}

/**
 * The SplDoublyLinkedList class provides the main functionalities of a doubly linked list.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.spldoublylinkedlist.php
 */
class SplDoublyLinkedList implements ArrayAccess, Countable, Iterator, Serializable
{
    /**
     * @var int
     */
    const IT_MODE_DELETE = 1;

    /**
     * @var int
     */
    const IT_MODE_FIFO = 0;

    /**
     * @var int
     */
    const IT_MODE_KEEP = 0;

    /**
     * @var int
     */
    const IT_MODE_LIFO = 2;

    /**
     * Add/insert a new value at the specified index
     *
     * @param mixed $index
     * @param mixed $newval
     *
     * @return void
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.add.php
     */
    public function add($index, $newval): void
    {
    }

    /**
     * Peeks at the node from the beginning of the doubly linked list
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.bottom.php
     */
    public function bottom()
    {
    }

    /**
     * Counts the number of elements in the doubly linked list
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.count.php
     */
    public function count(): int
    {
    }

    /**
     * Return current array entry
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.current.php
     */
    public function current()
    {
    }

    /**
     * Returns the mode of iteration
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.getiteratormode.php
     */
    public function getIteratorMode(): int
    {
    }

    /**
     * Checks whether the doubly linked list is empty
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.isempty.php
     */
    public function isEmpty(): bool
    {
    }

    /**
     * Return current node index
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.key.php
     */
    public function key()
    {
    }

    /**
     * Move to next entry
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.next.php
     */
    public function next(): void
    {
    }

    /**
     * Returns whether the requested $index exists
     *
     * @param mixed $index
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.offsetexists.php
     */
    public function offsetExists($index): bool
    {
    }

    /**
     * Returns the value at the specified $index
     *
     * @param mixed $index
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.offsetget.php
     */
    public function offsetGet($index)
    {
    }

    /**
     * Sets the value at the specified $index to $newval
     *
     * @param mixed $index
     * @param mixed $newval
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.offsetset.php
     */
    public function offsetSet($index, $newval): void
    {
    }

    /**
     * Unsets the value at the specified $index
     *
     * @param mixed $index
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.offsetunset.php
     */
    public function offsetUnset($index): void
    {
    }

    /**
     * Pops a node from the end of the doubly linked list
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.pop.php
     */
    public function pop()
    {
    }

    /**
     * Move to previous entry
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.prev.php
     */
    public function prev(): void
    {
    }

    /**
     * Pushes an element at the end of the doubly linked list
     *
     * @param mixed $value
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.push.php
     */
    public function push($value): void
    {
    }

    /**
     * Rewind iterator back to the start
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * Serializes the storage
     *
     * @return string
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.serialize.php
     */
    public function serialize(): string
    {
    }

    /**
     * Sets the mode of iteration
     *
     * @param mixed $flags
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.setiteratormode.php
     */
    public function setIteratorMode($flags): void
    {
    }

    /**
     * Shifts a node from the beginning of the doubly linked list
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.shift.php
     */
    public function shift()
    {
    }

    /**
     * Peeks at the node from the end of the doubly linked list
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.top.php
     */
    public function top()
    {
    }

    /**
     * Unserializes the storage
     *
     * @param mixed $serialized
     *
     * @return void
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.unserialize.php
     */
    public function unserialize($serialized): void
    {
    }

    /**
     * Prepends the doubly linked list with an element
     *
     * @param mixed $value
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.unshift.php
     */
    public function unshift($value): void
    {
    }

    /**
     * Check whether the doubly linked list contains more nodes
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.valid.php
     */
    public function valid(): bool
    {
    }
}

/**
 * The SplFileInfo class offers a high-level object oriented interface to
 * information for an individual file.
 *
 * @since PHP 5 >= 5.1.2, PHP 7
 *
 * @link http://www.php.net/manual/en/class.splfileinfo.php
 */
class SplFileInfo
{
    /**
     * Construct a new SplFileInfo object
     *
     * @param mixed $file_name
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.construct.php
     */
    public function __construct($file_name)
    {
    }

    /**
     * Returns the path to the file as a string
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.tostring.php
     */
    public function __toString(): void
    {
    }

    final public function _bad_state_ex()
    {
    }

    /**
     * Gets last access time of the file
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getatime.php
     */
    public function getATime(): int
    {
    }

    /**
     * Gets the base name of the file
     *
     * @param mixed|null $suffix
     *
     * @return string
     *
     * @since PHP 5 >= 5.2.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getbasename.php
     */
    public function getBasename($suffix = null): string
    {
    }

    /**
     * Gets the inode change time
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getctime.php
     */
    public function getCTime(): int
    {
    }

    /**
     * Gets the file extension
     *
     * @return string
     *
     * @since PHP 5 >= 5.3.6, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getextension.php
     */
    public function getExtension(): string
    {
    }

    /**
     * Gets an SplFileInfo object for the file
     *
     * @param mixed|null $class_name
     *
     * @return SplFileInfo
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getfileinfo.php
     */
    public function getFileInfo($class_name = null): SplFileInfo
    {
    }

    /**
     * Gets the filename
     *
     * @return string
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getfilename.php
     */
    public function getFilename(): string
    {
    }

    /**
     * Gets the file group
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getgroup.php
     */
    public function getGroup(): int
    {
    }

    /**
     * Gets the inode for the file
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getinode.php
     */
    public function getInode(): int
    {
    }

    /**
     * Gets the target of a link
     *
     * @return string
     *
     * @since PHP 5 >= 5.2.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getlinktarget.php
     */
    public function getLinkTarget(): string
    {
    }

    /**
     * Gets the last modified time
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getmtime.php
     */
    public function getMTime(): int
    {
    }

    /**
     * Gets the owner of the file
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getowner.php
     */
    public function getOwner(): int
    {
    }

    /**
     * Gets the path without filename
     *
     * @return string
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getpath.php
     */
    public function getPath(): string
    {
    }

    /**
     * Gets an SplFileInfo object for the path
     *
     * @param mixed|null $class_name
     *
     * @return SplFileInfo
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getpathinfo.php
     */
    public function getPathInfo($class_name = null): SplFileInfo
    {
    }

    /**
     * Gets the path to the file
     *
     * @return string
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getpathname.php
     */
    public function getPathname(): string
    {
    }

    /**
     * Gets file permissions
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getperms.php
     */
    public function getPerms(): int
    {
    }

    /**
     * Gets absolute path to file
     *
     * @return string
     *
     * @since PHP 5 >= 5.2.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getrealpath.php
     */
    public function getRealPath(): string
    {
    }

    /**
     * Gets file size
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getsize.php
     */
    public function getSize(): int
    {
    }

    /**
     * Gets file type
     *
     * @return string
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.gettype.php
     */
    public function getType(): string
    {
    }

    /**
     * Tells if the file is a directory
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.isdir.php
     */
    public function isDir(): bool
    {
    }

    /**
     * Tells if the file is executable
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.isexecutable.php
     */
    public function isExecutable(): bool
    {
    }

    /**
     * Tells if the object references a regular file
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.isfile.php
     */
    public function isFile(): bool
    {
    }

    /**
     * Tells if the file is a link
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.islink.php
     */
    public function isLink(): bool
    {
    }

    /**
     * Tells if file is readable
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.isreadable.php
     */
    public function isReadable(): bool
    {
    }

    /**
     * Tells if the entry is writable
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.iswritable.php
     */
    public function isWritable(): bool
    {
    }

    /**
     * Gets an SplFileObject object for the file
     *
     * @param mixed|null $open_mode
     * @param mixed|null $use_include_path
     * @param mixed|null $context
     *
     * @return SplFileObject
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.openfile.php
     */
    public function openFile($open_mode = null, $use_include_path = null, $context = null): SplFileObject
    {
    }

    /**
     * Sets the class used with <code>SplFileInfo::openFile</code>
     *
     * @param mixed|null $class_name
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.setfileclass.php
     */
    public function setFileClass($class_name = null): void
    {
    }

    /**
     * Sets the class used with <code>SplFileInfo::getFileInfo</code> and <code>SplFileInfo::getPathInfo</code>
     *
     * @param mixed|null $class_name
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.setinfoclass.php
     */
    public function setInfoClass($class_name = null): void
    {
    }
}

/**
 * The SplFileObject class offers an object oriented interface for a file.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.splfileobject.php
 */
class SplFileObject extends SplFileInfo implements RecursiveIterator, SeekableIterator
{
    /**
     * @var int
     */
    const DROP_NEW_LINE = 1;

    /**
     * @var int
     */
    const READ_AHEAD = 2;

    /**
     * @var int
     */
    const READ_CSV = 8;

    /**
     * @var int
     */
    const SKIP_EMPTY = 4;

    /**
     * Construct a new file object
     *
     * @param mixed $file_name
     * @param mixed|null $open_mode
     * @param mixed|null $use_include_path
     * @param mixed|null $context
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.construct.php
     */
    public function __construct($file_name, $open_mode = null, $use_include_path = null, $context = null)
    {
    }

    /**
     * Alias of <code>SplFileObject::current</code>
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.tostring.php
     */
    public function __toString(): void
    {
    }

    /**
     * Retrieve current line of file
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.current.php
     */
    public function current()
    {
    }

    /**
     * Reached end of file
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.eof.php
     */
    public function eof(): bool
    {
    }

    /**
     * Flushes the output to the file
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fflush.php
     */
    public function fflush(): bool
    {
    }

    /**
     * Gets character from file
     *
     * @return string
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fgetc.php
     */
    public function fgetc(): string
    {
    }

    /**
     * Gets line from file and parse as CSV fields
     *
     * @param mixed|null $delimiter
     * @param mixed|null $enclosure
     * @param mixed|null $escape
     *
     * @return array
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fgetcsv.php
     */
    public function fgetcsv($delimiter = null, $enclosure = null, $escape = null): array
    {
    }

    /**
     * Gets line from file
     *
     * @return string
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fgets.php
     */
    public function fgets(): string
    {
    }

    /**
     * Gets line from file and strip HTML tags
     *
     * @param mixed|null $allowable_tags
     *
     * @return string
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fgetss.php
     */
    public function fgetss($allowable_tags = null): string
    {
    }

    /**
     * Portable file locking
     *
     * @param mixed $operation
     * @param mixed|null $wouldblock
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.flock.php
     */
    public function flock($operation, &$wouldblock = null): bool
    {
    }

    /**
     * Output all remaining data on a file pointer
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fpassthru.php
     */
    public function fpassthru(): int
    {
    }

    /**
     * Write a field array as a CSV line
     *
     * @param mixed $fields
     * @param mixed|null $delimiter
     * @param mixed|null $enclosure
     * @param mixed|null $escape
     *
     * @return int
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fputcsv.php
     */
    public function fputcsv($fields, $delimiter = null, $enclosure = null, $escape = null): int
    {
    }

    /**
     * Read from file
     *
     * @param mixed $length
     *
     * @return string
     *
     * @since PHP 5 >= 5.5.11, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fread.php
     */
    public function fread($length): string
    {
    }

    /**
     * Parses input from file according to a format
     *
     * @param mixed $format
     * @param mixed $vars
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fscanf.php
     */
    public function fscanf($format, &...$vars)
    {
    }

    /**
     * Seek to a position
     *
     * @param mixed $pos
     * @param mixed|null $whence
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fseek.php
     */
    public function fseek($pos, $whence = null): int
    {
    }

    /**
     * Gets information about the file
     *
     * @return array
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fstat.php
     */
    public function fstat(): array
    {
    }

    /**
     * Return current file position
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.ftell.php
     */
    public function ftell(): int
    {
    }

    /**
     * Truncates the file to a given length
     *
     * @param mixed $size
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.ftruncate.php
     */
    public function ftruncate($size): bool
    {
    }

    /**
     * Write to file
     *
     * @param mixed $str
     * @param mixed|null $length
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fwrite.php
     */
    public function fwrite($str, $length = null): int
    {
    }

    /**
     * No purpose
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.getchildren.php
     */
    public function getChildren(): void
    {
    }

    /**
     * Get the delimiter, enclosure and escape character for CSV
     *
     * @return array
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.getcsvcontrol.php
     */
    public function getCsvControl(): array
    {
    }

    /**
     * Alias of <code>SplFileObject::fgets</code>
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.getcurrentline.php
     */
    public function getCurrentLine()
    {
    }

    /**
     * Gets flags for the SplFileObject
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.getflags.php
     */
    public function getFlags(): int
    {
    }

    /**
     * Get maximum line length
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.getmaxlinelen.php
     */
    public function getMaxLineLen(): int
    {
    }

    /**
     * SplFileObject does not have children
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.haschildren.php
     */
    public function hasChildren(): bool
    {
    }

    /**
     * Get line number
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.key.php
     */
    public function key(): int
    {
    }

    /**
     * Read next line
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.next.php
     */
    public function next(): void
    {
    }

    /**
     * Rewind the file to the first line
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * Seek to specified line
     *
     * @param mixed $line_pos
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.seek.php
     */
    public function seek($line_pos): void
    {
    }

    /**
     * Set the delimiter, enclosure and escape character for CSV
     *
     * @param mixed|null $delimiter
     * @param mixed|null $enclosure
     * @param mixed|null $escape
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.setcsvcontrol.php
     */
    public function setCsvControl($delimiter = null, $enclosure = null, $escape = null): void
    {
    }

    /**
     * Sets flags for the SplFileObject
     *
     * @param mixed $flags
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.setflags.php
     */
    public function setFlags($flags): void
    {
    }

    /**
     * Set maximum line length
     *
     * @param mixed $max_len
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.setmaxlinelen.php
     */
    public function setMaxLineLen($max_len): void
    {
    }

    /**
     * Not at EOF
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.valid.php
     */
    public function valid(): bool
    {
    }
}

/**
 * The SplFixedArray class provides the main functionalities of array. The
 * main differences between a SplFixedArray and a normal PHP array is that
 * the SplFixedArray is of fixed length and allows only integers within
 * the range as indexes. The advantage is that it allows a faster array
 * implementation.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.splfixedarray.php
 */
class SplFixedArray implements ArrayAccess, Countable, Iterator
{
    /**
     * Constructs a new fixed array
     *
     * @param mixed|null $size
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.construct.php
     */
    public function __construct($size = null)
    {
    }

    /**
     * Reinitialises the array after being unserialised
     *
     * @return void
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.wakeup.php
     */
    public function __wakeup(): void
    {
    }

    /**
     * Returns the size of the array
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.count.php
     */
    public function count(): int
    {
    }

    /**
     * Return current array entry
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.current.php
     */
    public function current()
    {
    }

    /**
     * Import a PHP array in a <code>SplFixedArray</code> instance
     *
     * @param mixed $data
     * @param mixed|null $save_indexes
     *
     * @return SplFixedArray
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.fromarray.php
     */
    public static function fromArray($data, $save_indexes = null): SplFixedArray
    {
    }

    /**
     * Gets the size of the array
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.getsize.php
     */
    public function getSize(): int
    {
    }

    /**
     * Return current array index
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.key.php
     */
    public function key(): int
    {
    }

    /**
     * Move to next entry
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.next.php
     */
    public function next(): void
    {
    }

    /**
     * Returns whether the requested index exists
     *
     * @param mixed $index
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.offsetexists.php
     */
    public function offsetExists($index): bool
    {
    }

    /**
     * Returns the value at the specified index
     *
     * @param mixed $index
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.offsetget.php
     */
    public function offsetGet($index)
    {
    }

    /**
     * Sets a new value at a specified index
     *
     * @param mixed $index
     * @param mixed $newval
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.offsetset.php
     */
    public function offsetSet($index, $newval): void
    {
    }

    /**
     * Unsets the value at the specified $index
     *
     * @param mixed $index
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.offsetunset.php
     */
    public function offsetUnset($index): void
    {
    }

    /**
     * Rewind iterator back to the start
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * Change the size of an array
     *
     * @param mixed $value
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.setsize.php
     */
    public function setSize($value): bool
    {
    }

    /**
     * Returns a PHP array from the fixed array
     *
     * @return array
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.toarray.php
     */
    public function toArray(): array
    {
    }

    /**
     * Check whether the array contains more elements
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.valid.php
     */
    public function valid(): bool
    {
    }
}

/**
 * The SplHeap class provides the main functionalities of a Heap.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.splheap.php
 */
abstract class SplHeap implements Countable, Iterator
{
    /**
     * Compare elements in order to place them correctly in the heap while sifting up
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splheap.compare.php
     */
    abstract protected function compare(): int;

    /**
     * Counts the number of elements in the heap
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splheap.count.php
     */
    public function count(): int
    {
    }

    /**
     * Return current node pointed by the iterator
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splheap.current.php
     */
    public function current()
    {
    }

    /**
     * Extracts a node from top of the heap and sift up
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splheap.extract.php
     */
    public function extract()
    {
    }

    /**
     * Inserts an element in the heap by sifting it up
     *
     * @param mixed $value
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splheap.insert.php
     */
    public function insert($value): void
    {
    }

    /**
     * Tells if the heap is in a corrupted state
     *
     * @return bool
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/splheap.iscorrupted.php
     */
    public function isCorrupted(): bool
    {
    }

    /**
     * Checks whether the heap is empty
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splheap.isempty.php
     */
    public function isEmpty(): bool
    {
    }

    /**
     * Return current node index
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splheap.key.php
     */
    public function key()
    {
    }

    /**
     * Move to the next node
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splheap.next.php
     */
    public function next(): void
    {
    }

    /**
     * Recover from the corrupted state and allow further actions on the heap
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splheap.recoverfromcorruption.php
     */
    public function recoverFromCorruption(): void
    {
    }

    /**
     * Rewind iterator back to the start (no-op)
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splheap.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * Peeks at the node from the top of the heap
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splheap.top.php
     */
    public function top()
    {
    }

    /**
     * Check whether the heap contains more nodes
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splheap.valid.php
     */
    public function valid(): bool
    {
    }
}

/**
 * The SplMaxHeap class provides the main functionalities of a heap, keeping the maximum on the top.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.splmaxheap.php
 */
class SplMaxHeap extends SplHeap
{
    /**
     * Compare elements in order to place them correctly in the heap while sifting up
     *
     * @param mixed $a
     * @param mixed $b
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splmaxheap.compare.php
     */
    protected function compare($a, $b): int
    {
    }
}

/**
 * The SplMinHeap class provides the main functionalities of a heap, keeping the minimum on the top.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.splminheap.php
 */
class SplMinHeap extends SplHeap
{
    /**
     * Compare elements in order to place them correctly in the heap while sifting up
     *
     * @param mixed $a
     * @param mixed $b
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splminheap.compare.php
     */
    protected function compare($a, $b): int
    {
    }
}

/**
 * The SplObjectStorage class provides a map from objects to data or, by
 * ignoring data, an object set. This dual purpose can be useful in many
 * cases involving the need to uniquely identify objects.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.splobjectstorage.php
 */
class SplObjectStorage implements ArrayAccess, Countable, Iterator, Serializable
{
    /**
     * Adds all objects from another storage
     *
     * @param mixed $object
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.addall.php
     */
    public function addAll($object): void
    {
    }

    /**
     * Adds an object in the storage
     *
     * @param mixed $object
     * @param mixed|null $inf
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.attach.php
     */
    public function attach($object, $inf = null): void
    {
    }

    /**
     * Checks if the storage contains a specific object
     *
     * @param mixed $object
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.contains.php
     */
    public function contains($object): bool
    {
    }

    /**
     * Returns the number of objects in the storage
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.count.php
     */
    public function count(): int
    {
    }

    /**
     * Returns the current storage entry
     *
     * @return object
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.current.php
     */
    public function current(): object
    {
    }

    /**
     * Removes an <code>object</code> from the storage
     *
     * @param mixed $object
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.detach.php
     */
    public function detach($object): void
    {
    }

    /**
     * Calculate a unique identifier for the contained objects
     *
     * @param mixed $object
     *
     * @return string
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.gethash.php
     */
    public function getHash($object): string
    {
    }

    /**
     * Returns the data associated with the current iterator entry
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.getinfo.php
     */
    public function getInfo()
    {
    }

    /**
     * Returns the index at which the iterator currently is
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.key.php
     */
    public function key(): int
    {
    }

    /**
     * Move to the next entry
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.next.php
     */
    public function next(): void
    {
    }

    /**
     * Checks whether an object exists in the storage
     *
     * @param mixed $object
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.offsetexists.php
     */
    public function offsetExists($object): bool
    {
    }

    /**
     * Returns the data associated with an <code>object</code>
     *
     * @param mixed $object
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.offsetget.php
     */
    public function offsetGet($object)
    {
    }

    /**
     * Associates data to an object in the storage
     *
     * @param mixed $object
     * @param mixed|null $inf
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.offsetset.php
     */
    public function offsetSet($object, $inf = null): void
    {
    }

    /**
     * Removes an object from the storage
     *
     * @param mixed $object
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.offsetunset.php
     */
    public function offsetUnset($object): void
    {
    }

    /**
     * Removes objects contained in another storage from the current storage
     *
     * @param mixed $object
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.removeall.php
     */
    public function removeAll($object): void
    {
    }

    /**
     * Removes all objects except for those contained in another storage from the current storage
     *
     * @param mixed $object
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.6, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.removeallexcept.php
     */
    public function removeAllExcept($object): void
    {
    }

    /**
     * Rewind the iterator to the first storage element
     *
     * @return void
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * Serializes the storage
     *
     * @return string
     *
     * @since PHP 5 >= 5.2.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.serialize.php
     */
    public function serialize(): string
    {
    }

    /**
     * Sets the data associated with the current iterator entry
     *
     * @param mixed $info
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.setinfo.php
     */
    public function setInfo($info): void
    {
    }

    /**
     * Unserializes a storage from its string representation
     *
     * @param mixed $serialized
     *
     * @return void
     *
     * @since PHP 5 >= 5.2.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.unserialize.php
     */
    public function unserialize($serialized): void
    {
    }

    /**
     * Returns if the current iterator entry is valid
     *
     * @return bool
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.valid.php
     */
    public function valid(): bool
    {
    }
}

/**
 * The SplPriorityQueue class provides the main functionalities of a
 * prioritized queue, implemented using a max heap.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.splpriorityqueue.php
 */
class SplPriorityQueue implements Countable, Iterator
{
    /**
     * @var int
     */
    const EXTR_BOTH = 3;

    /**
     * @var int
     */
    const EXTR_DATA = 1;

    /**
     * @var int
     */
    const EXTR_PRIORITY = 2;

    /**
     * Compare priorities in order to place elements correctly in the heap while sifting up
     *
     * @param mixed $a
     * @param mixed $b
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.compare.php
     */
    public function compare($a, $b): int
    {
    }

    /**
     * Counts the number of elements in the queue
     *
     * @return int
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.count.php
     */
    public function count(): int
    {
    }

    /**
     * Return current node pointed by the iterator
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.current.php
     */
    public function current()
    {
    }

    /**
     * Extracts a node from top of the heap and shift up
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.extract.php
     */
    public function extract()
    {
    }

    /**
     * Get the flags of extraction
     *
     * @return int
     *
     * @since PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.getextractflags.php
     */
    public function getExtractFlags(): int
    {
    }

    /**
     * Inserts an element in the queue by sifting it up
     *
     * @param mixed $value
     * @param mixed $priority
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.insert.php
     */
    public function insert($value, $priority): void
    {
    }

    /**
     * Tells if the priority queue is in a corrupted state
     *
     * @return bool
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.iscorrupted.php
     */
    public function isCorrupted(): bool
    {
    }

    /**
     * Checks whether the queue is empty
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.isempty.php
     */
    public function isEmpty(): bool
    {
    }

    /**
     * Return current node index
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.key.php
     */
    public function key()
    {
    }

    /**
     * Move to the next node
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.next.php
     */
    public function next(): void
    {
    }

    /**
     * Recover from the corrupted state and allow further actions on the queue
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.recoverfromcorruption.php
     */
    public function recoverFromCorruption(): void
    {
    }

    /**
     * Rewind iterator back to the start (no-op)
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * Sets the mode of extraction
     *
     * @param mixed $flags
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.setextractflags.php
     */
    public function setExtractFlags($flags): void
    {
    }

    /**
     * Peeks at the node from the top of the queue
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.top.php
     */
    public function top()
    {
    }

    /**
     * Check whether the queue contains more nodes
     *
     * @return bool
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.valid.php
     */
    public function valid(): bool
    {
    }
}

/**
 * The SplQueue class provides the main functionalities of a queue implemented using a doubly linked list.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.splqueue.php
 */
class SplQueue extends SplDoublyLinkedList
{
    /**
     * Dequeues a node from the queue
     *
     * @return mixed
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splqueue.dequeue.php
     */
    public function dequeue()
    {
    }

    /**
     * Adds an element to the queue
     *
     * @param mixed $value
     *
     * @return void
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splqueue.enqueue.php
     */
    public function enqueue($value): void
    {
    }
}

/**
 * The SplStack class provides the main functionalities of a stack implemented using a doubly linked list.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.splstack.php
 */
class SplStack extends SplDoublyLinkedList
{
}

/**
 * The SplTempFileObject class offers an object oriented interface for a temporary file.
 *
 * @since PHP 5 >= 5.1.2, PHP 7
 *
 * @link http://www.php.net/manual/en/class.spltempfileobject.php
 */
class SplTempFileObject extends SplFileObject
{
    /**
     * Construct a new temporary file object
     *
     * @param mixed|null $max_memory
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/spltempfileobject.construct.php
     */
    public function __construct($max_memory = null)
    {
    }
}

/**
 * Exception thrown when performing an invalid operation on an empty
 * container, such as removing an element.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.php#class.underflowexception
 */
class UnderflowException extends RuntimeException
{
}

/**
 * Exception thrown if a value does not match with a set of values. Typically
 * this happens when a function calls another function and expects the return
 * value to be of a certain type or value not including arithmetic or buffer
 * related errors.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.php#class.unexpectedvalueexception
 */
class UnexpectedValueException extends RuntimeException
{
}

/**
 * Return the interfaces which are implemented by the given class or interface
 *
 * @param mixed $what
 * @param mixed|null $autoload
 *
 * @return array
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.class-implements.php
 */
function class_implements($what, $autoload = null): array
{
}

/**
 * Return the parent classes of the given class
 *
 * @param mixed $instance
 * @param mixed|null $autoload
 *
 * @return array
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.class-parents.php
 */
function class_parents($instance, $autoload = null): array
{
}

/**
 * Return the traits used by the given class
 *
 * @param mixed $what
 * @param mixed|null $autoload
 *
 * @return array
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.class-uses.php
 */
function class_uses($what, $autoload = null): array
{
}

/**
 * Call a function for every element in an iterator
 *
 * @param Traversable $iterator
 * @param mixed $function
 * @param array|null $args
 *
 * @return int
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iterator-apply.php
 */
function iterator_apply(Traversable $iterator, $function, array $args = null): int
{
}

/**
 * Count the elements in an iterator
 *
 * @param Traversable $iterator
 *
 * @return int
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iterator-count.php
 */
function iterator_count(Traversable $iterator): int
{
}

/**
 * Copy the iterator into an array
 *
 * @param Traversable $iterator
 * @param mixed|null $use_keys
 *
 * @return array
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iterator-to-array.php
 */
function iterator_to_array(Traversable $iterator, $use_keys = null): array
{
}

/**
 * Default implementation for __autoload()
 *
 * @param mixed $class_name
 * @param mixed|null $file_extensions
 *
 * @return void
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.spl-autoload.php
 */
function spl_autoload($class_name, $file_extensions = null): void
{
}

/**
 * Try all registered __autoload() functions to load the requested class
 *
 * @param mixed $class_name
 *
 * @return void
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.spl-autoload-call.php
 */
function spl_autoload_call($class_name): void
{
}

/**
 * Register and return default file extensions for spl_autoload
 *
 * @param mixed|null $file_extensions
 *
 * @return string
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.spl-autoload-extensions.php
 */
function spl_autoload_extensions($file_extensions = null): string
{
}

/**
 * Return all registered __autoload() functions
 *
 * @return array
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.spl-autoload-functions.php
 */
function spl_autoload_functions(): array
{
}

/**
 * Register given function as __autoload() implementation
 *
 * @param mixed|null $autoload_function
 * @param mixed|null $throw
 * @param mixed|null $prepend
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.spl-autoload-register.php
 */
function spl_autoload_register($autoload_function = null, $throw = null, $prepend = null): bool
{
}

/**
 * Unregister given function as __autoload() implementation
 *
 * @param mixed $autoload_function
 *
 * @return bool
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.spl-autoload-unregister.php
 */
function spl_autoload_unregister($autoload_function): bool
{
}

/**
 * Return available SPL classes
 *
 * @return array
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.spl-classes.php
 */
function spl_classes(): array
{
}

/**
 * Return hash id for given object
 *
 * @param mixed $obj
 *
 * @return string
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.spl-object-hash.php
 */
function spl_object_hash($obj): string
{
}

/**
 * Return the integer object handle for given object
 *
 * @param mixed $obj
 *
 * @return int
 *
 * @since PHP 7 >= 7.2.0
 *
 * @link http://www.php.net/manual/en/function.spl-object-id.php
 */
function spl_object_id($obj): int
{
}
