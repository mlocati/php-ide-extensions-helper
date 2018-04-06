<?php
// Start of extension: SPL
// - parsed on POSIX with PHP 7.0.28 (extension version 7.0.28)
// - parsed on Windows with PHP 7.0.28 (extension version 7.0.28)

/**
 * Classes implementing <code>Countable</code> can be used with the
 *     <code>count</code> function.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.countable.php
 */
interface Countable
{
    /**
     * Count all elements in an array, or something in an object
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.count.php
     */
    public function count(): int;
}

/**
 * Classes implementing <code>OuterIterator</code> can be used to iterate
 *     over iterators.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.outeriterator.php
 */
interface OuterIterator extends Iterator
{
    public function getInnerIterator();
}

/**
 * Classes implementing <code>RecursiveIterator</code> can be used to iterate
 *     over iterators recursively.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.recursiveiterator.php
 */
interface RecursiveIterator extends Iterator
{
    public function getChildren();

    public function hasChildren();
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
     * @param mixed $position
     */
    public function seek($position);
}

/**
 * The <code>SplObserver</code> interface is used alongside
 *     <code>SplSubject</code> to implement the Observer Design Pattern.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.splobserver.php
 */
interface SplObserver
{
    /**
     * @param SplSubject $SplSubject
     */
    public function update($SplSubject);
}

/**
 * The <code>SplSubject</code> interface is used alongside
 *     <code>SplObserver</code> to implement the Observer Design Pattern.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.splsubject.php
 */
interface SplSubject
{
    /**
     * @param SplObserver $SplObserver
     */
    public function attach($SplObserver);

    /**
     * @param SplObserver $SplObserver
     */
    public function detach($SplObserver);

    public function notify();
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
    public function __construct()
    {
    }

    /**
     * @param Iterator $iterator
     */
    public function append($iterator)
    {
    }

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
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

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    public function valid()
    {
    }
}

/**
 * This iterator allows to unset and modify values and keys while iterating
 *     over Arrays and Objects.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.arrayiterator.php
 */
class ArrayIterator implements ArrayAccess, Countable, SeekableIterator, Serializable
{
    /**
     * @param mixed|null $array
     * @param mixed|null $ar_flags
     * @param mixed|null $iterator_class
     */
    public function __construct($array = null, $ar_flags = null, $iterator_class = null)
    {
    }

    /**
     * @param mixed $value
     */
    public function append($value)
    {
    }

    /**
     * Sort an array and maintain index association
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.asort.php
     */
    public function asort(): bool
    {
    }

    /**
     * Count all elements in an array, or something in an object
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.count.php
     */
    public function count(): int
    {
    }

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    public function getArrayCopy()
    {
    }

    public function getFlags()
    {
    }

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Sort an array by key
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.ksort.php
     */
    public function ksort(): bool
    {
    }

    /**
     * Sort an array using a case insensitive "natural order" algorithm
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.natcasesort.php
     */
    public function natcasesort(): bool
    {
    }

    /**
     * Sort an array using a "natural order" algorithm
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.natsort.php
     */
    public function natsort(): bool
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    /**
     * @param mixed $index
     */
    public function offsetExists($index)
    {
    }

    /**
     * @param mixed $index
     */
    public function offsetGet($index)
    {
    }

    /**
     * @param mixed $index
     * @param mixed $newval
     */
    public function offsetSet($index, $newval)
    {
    }

    /**
     * @param mixed $index
     */
    public function offsetUnset($index)
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    /**
     * @param mixed $position
     */
    public function seek($position)
    {
    }

    /**
     * Generates a storable representation of a value
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.serialize.php
     */
    public function serialize(): string
    {
    }

    /**
     * @param mixed $flags
     */
    public function setFlags($flags)
    {
    }

    /**
     * Sort an array with a user-defined comparison function and maintain index association
     *
     * @param mixed $cmp_function
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.uasort.php
     */
    public function uasort($cmp_function): bool
    {
    }

    /**
     * Sort an array by keys using a user-defined comparison function
     *
     * @param mixed $cmp_function
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.uksort.php
     */
    public function uksort($cmp_function): bool
    {
    }

    /**
     * Creates a PHP value from a stored representation
     *
     * @param mixed $serialized
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.unserialize.php
     */
    public function unserialize($serialized)
    {
    }

    public function valid()
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
     * @param mixed|null $array
     * @param mixed|null $ar_flags
     * @param mixed|null $iterator_class
     */
    public function __construct($array = null, $ar_flags = null, $iterator_class = null)
    {
    }

    /**
     * @param mixed $value
     */
    public function append($value)
    {
    }

    /**
     * Sort an array and maintain index association
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.asort.php
     */
    public function asort(): bool
    {
    }

    /**
     * Count all elements in an array, or something in an object
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.count.php
     */
    public function count(): int
    {
    }

    /**
     * @param mixed $array
     */
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

    /**
     * Sort an array by key
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.ksort.php
     */
    public function ksort(): bool
    {
    }

    /**
     * Sort an array using a case insensitive "natural order" algorithm
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.natcasesort.php
     */
    public function natcasesort(): bool
    {
    }

    /**
     * Sort an array using a "natural order" algorithm
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.natsort.php
     */
    public function natsort(): bool
    {
    }

    /**
     * @param mixed $index
     */
    public function offsetExists($index)
    {
    }

    /**
     * @param mixed $index
     */
    public function offsetGet($index)
    {
    }

    /**
     * @param mixed $index
     * @param mixed $newval
     */
    public function offsetSet($index, $newval)
    {
    }

    /**
     * @param mixed $index
     */
    public function offsetUnset($index)
    {
    }

    /**
     * Generates a storable representation of a value
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.serialize.php
     */
    public function serialize(): string
    {
    }

    /**
     * @param mixed $flags
     */
    public function setFlags($flags)
    {
    }

    /**
     * @param mixed $iteratorClass
     */
    public function setIteratorClass($iteratorClass)
    {
    }

    /**
     * Sort an array with a user-defined comparison function and maintain index association
     *
     * @param mixed $cmp_function
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.uasort.php
     */
    public function uasort($cmp_function): bool
    {
    }

    /**
     * Sort an array by keys using a user-defined comparison function
     *
     * @param mixed $cmp_function
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.uksort.php
     */
    public function uksort($cmp_function): bool
    {
    }

    /**
     * Creates a PHP value from a stored representation
     *
     * @param mixed $serialized
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.unserialize.php
     */
    public function unserialize($serialized)
    {
    }
}

/**
 * Exception thrown if a callback refers to an undefined function or if some
 *     arguments are missing.
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
 *     arguments are missing.
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
     * @param Iterator $iterator
     * @param mixed|null $flags
     */
    public function __construct($iterator, $flags = null)
    {
    }

    public function __toString()
    {
    }

    /**
     * Count all elements in an array, or something in an object
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.count.php
     */
    public function count(): int
    {
    }

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
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

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    /**
     * @param mixed $index
     */
    public function offsetExists($index)
    {
    }

    /**
     * @param mixed $index
     */
    public function offsetGet($index)
    {
    }

    /**
     * @param mixed $index
     * @param mixed $newval
     */
    public function offsetSet($index, $newval)
    {
    }

    /**
     * @param mixed $index
     */
    public function offsetUnset($index)
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    /**
     * @param mixed $flags
     */
    public function setFlags($flags)
    {
    }

    public function valid()
    {
    }
}

/**
 * The callback should accept up to three arguments:
 *     the current item, the current key and the iterator, respectively.
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.callbackfilteriterator.php
 */
class CallbackFilterIterator extends FilterIterator
{
    /**
     * @param Iterator $iterator
     * @param mixed $callback
     */
    public function __construct($iterator, $callback)
    {
    }

    public function accept()
    {
    }
}

/**
 * The DirectoryIterator class provides a simple interface for viewing
 *     the contents of filesystem directories.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.directoryiterator.php
 */
class DirectoryIterator extends SplFileInfo implements SeekableIterator
{
    /**
     * @param mixed $path
     */
    public function __construct($path)
    {
    }

    public function __toString()
    {
    }

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    /**
     * @param mixed|null $suffix
     */
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

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    /**
     * @param mixed $position
     */
    public function seek($position)
    {
    }

    public function valid()
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
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    public function valid()
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
     * @param mixed $path
     * @param mixed|null $flags
     */
    public function __construct($path, $flags = null)
    {
    }

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    public function getFlags()
    {
    }

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    /**
     * @param mixed|null $flags
     */
    public function setFlags($flags = null)
    {
    }
}

/**
 * This abstract iterator filters out unwanted values. This class should be extended to
 *     implement custom iterator filters. The <code>FilterIterator::accept</code>
 *     must be implemented in the subclass.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.filteriterator.php
 */
abstract class FilterIterator extends IteratorIterator
{
    /**
     * @param Iterator $iterator
     */
    public function __construct($iterator)
    {
    }

    abstract public function accept();

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    public function getInnerIterator()
    {
    }

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    public function valid()
    {
    }
}

/**
 * Iterates through a file system in a similar fashion to 
 *     <code>glob</code>.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.globiterator.php
 */
class GlobIterator extends FilesystemIterator implements Countable
{
    /**
     * @param mixed $path
     * @param mixed|null $flags
     */
    public function __construct($path, $flags = null)
    {
    }

    /**
     * Count all elements in an array, or something in an object
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.count.php
     */
    public function count(): int
    {
    }
}

/**
 * The <code>InfiniteIterator</code> allows one to
 *     infinitely iterate over an iterator without having to manually
 *     rewind the iterator upon reaching its end.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.infiniteiterator.php
 */
class InfiniteIterator extends IteratorIterator
{
    /**
     * @param Iterator $iterator
     */
    public function __construct($iterator)
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
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
 *     Traversable into an Iterator.
 *     It is important to understand that most classes that do not implement
 *     Iterators have reasons as most likely they do not allow the full
 *     Iterator feature set. If so, techniques should be provided to prevent
 *     misuse, otherwise expect exceptions or fatal errors.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.iteratoriterator.php
 */
class IteratorIterator implements OuterIterator
{
    /**
     * @param Traversable $iterator
     */
    public function __construct($iterator)
    {
    }

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    public function getInnerIterator()
    {
    }

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    public function valid()
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
 *     a limited subset of items in an <code>Iterator</code>.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.limititerator.php
 */
class LimitIterator extends IteratorIterator
{
    /**
     * @param Iterator $iterator
     * @param mixed|null $offset
     * @param mixed|null $count
     */
    public function __construct($iterator, $offset = null, $count = null)
    {
    }

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    public function getInnerIterator()
    {
    }

    public function getPosition()
    {
    }

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    /**
     * @param mixed $position
     */
    public function seek($position)
    {
    }

    public function valid()
    {
    }
}

/**
 * Exception that represents error in the program logic. This kind of
 *     exception should lead directly to a fix in your code.
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
     * @param mixed $flags
     */
    public function __construct($flags)
    {
    }

    /**
     * @param Iterator $iterator
     * @param mixed|null $infos
     */
    public function attachIterator($iterator, $infos = null)
    {
    }

    /**
     * @param Iterator $iterator
     */
    public function containsIterator($iterator)
    {
    }

    public function countIterators()
    {
    }

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    /**
     * @param Iterator $iterator
     */
    public function detachIterator($iterator)
    {
    }

    public function getFlags()
    {
    }

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    /**
     * @param mixed $flags
     */
    public function setFlags($flags)
    {
    }

    public function valid()
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
     * @param Iterator $iterator
     */
    public function __construct($iterator)
    {
    }

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    public function getInnerIterator()
    {
    }

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    public function valid()
    {
    }
}

/**
 * Exception thrown if a value is not a valid key. This represents errors
 *     that cannot be detected at compile time.
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
 *     errors that should be detected at compile time.
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
 *     iteration using <code>RecursiveIteratorIterator</code> that only
 *     shows those elements which have children.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.parentiterator.php
 */
class ParentIterator extends RecursiveFilterIterator
{
    /**
     * @param RecursiveIterator $iterator
     */
    public function __construct($iterator)
    {
    }

    public function accept()
    {
    }
}

/**
 * Exception thrown to indicate range errors during program execution.
 *     Normally this means there was an arithmetic error other than
 *     under/overflow. This is the runtime version of
 *     <code>DomainException</code>.
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
 *     in the same way as the <code>ArrayIterator</code>. Additionally it is possible to iterate
 *     over the current iterator entry.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.recursivearrayiterator.php
 */
class RecursiveArrayIterator extends ArrayIterator implements RecursiveIterator
{
    public function getChildren()
    {
    }

    public function hasChildren()
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
     * @param Iterator $iterator
     * @param mixed|null $flags
     */
    public function __construct($iterator, $flags = null)
    {
    }

    public function getChildren()
    {
    }

    public function hasChildren()
    {
    }
}

/**
 * The callback should accept up to three arguments:
 *     the current item, the current key and the iterator, respectively.
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.recursivecallbackfilteriterator.php
 */
class RecursiveCallbackFilterIterator extends CallbackFilterIterator implements RecursiveIterator
{
    /**
     * @param RecursiveIterator $iterator
     * @param mixed $callback
     */
    public function __construct($iterator, $callback)
    {
    }

    public function getChildren()
    {
    }

    public function hasChildren()
    {
    }
}

/**
 * The <code>RecursiveDirectoryIterator</code> provides
 *     an interface for iterating recursively over filesystem directories.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/class.recursivedirectoryiterator.php
 */
class RecursiveDirectoryIterator extends FilesystemIterator implements RecursiveIterator
{
    /**
     * @param mixed $path
     * @param mixed|null $flags
     */
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

    /**
     * @param mixed|null $allow_links
     */
    public function hasChildren($allow_links = null)
    {
    }
}

/**
 * This abstract iterator filters out unwanted values for a <code>RecursiveIterator</code>.
 *     This class should be extended to implement custom filters. 
 *     The <code>RecursiveFilterIterator::accept</code> must be implemented in the subclass.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.recursivefilteriterator.php
 */
abstract class RecursiveFilterIterator extends FilterIterator implements RecursiveIterator
{
    /**
     * @param RecursiveIterator $iterator
     */
    public function __construct($iterator)
    {
    }

    public function getChildren()
    {
    }

    public function hasChildren()
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
     * @param Traversable $iterator
     * @param mixed|null $mode
     * @param mixed|null $flags
     */
    public function __construct($iterator, $mode = null, $flags = null)
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

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
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

    /**
     * @param mixed|null $level
     */
    public function getSubIterator($level = null)
    {
    }

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    public function nextElement()
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    /**
     * @param mixed|null $max_depth
     */
    public function setMaxDepth($max_depth = null)
    {
    }

    public function valid()
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
     * @param RecursiveIterator $iterator
     * @param mixed $regex
     * @param mixed|null $mode
     * @param mixed|null $flags
     * @param mixed|null $preg_flags
     */
    public function __construct($iterator, $regex, $mode = null, $flags = null, $preg_flags = null)
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
     * @param Traversable $iterator
     * @param mixed|null $flags
     * @param mixed|null $caching_it_flags
     * @param mixed|null $mode
     */
    public function __construct($iterator, $flags = null, $caching_it_flags = null, $mode = null)
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

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
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

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    public function nextElement()
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    public function setPostfix()
    {
    }

    /**
     * @param mixed $part
     * @param mixed $value
     */
    public function setPrefixPart($part, $value)
    {
    }

    public function valid()
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
     * @param Iterator $iterator
     * @param mixed $regex
     * @param mixed|null $mode
     * @param mixed|null $flags
     * @param mixed|null $preg_flags
     */
    public function __construct($iterator, $regex, $mode = null, $flags = null, $preg_flags = null)
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

    /**
     * @param mixed $flags
     */
    public function setFlags($flags)
    {
    }

    /**
     * @param mixed $mode
     */
    public function setMode($mode)
    {
    }

    /**
     * @param mixed $preg_flags
     */
    public function setPregFlags($preg_flags)
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
     * @param mixed $index
     * @param mixed $newval
     */
    public function add($index, $newval)
    {
    }

    public function bottom()
    {
    }

    /**
     * Count all elements in an array, or something in an object
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.count.php
     */
    public function count(): int
    {
    }

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    public function getIteratorMode()
    {
    }

    public function isEmpty()
    {
    }

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    /**
     * @param mixed $index
     */
    public function offsetExists($index)
    {
    }

    /**
     * @param mixed $index
     */
    public function offsetGet($index)
    {
    }

    /**
     * @param mixed $index
     * @param mixed $newval
     */
    public function offsetSet($index, $newval)
    {
    }

    /**
     * @param mixed $index
     */
    public function offsetUnset($index)
    {
    }

    public function pop()
    {
    }

    /**
     * Rewind the internal array pointer
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.prev.php
     */
    public function prev()
    {
    }

    /**
     * @param mixed $value
     */
    public function push($value)
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    /**
     * Generates a storable representation of a value
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.serialize.php
     */
    public function serialize(): string
    {
    }

    /**
     * @param mixed $flags
     */
    public function setIteratorMode($flags)
    {
    }

    public function shift()
    {
    }

    public function top()
    {
    }

    /**
     * Creates a PHP value from a stored representation
     *
     * @param mixed $serialized
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.unserialize.php
     */
    public function unserialize($serialized)
    {
    }

    /**
     * @param mixed $value
     */
    public function unshift($value)
    {
    }

    public function valid()
    {
    }
}

/**
 * The SplFileInfo class offers a high-level object oriented interface to
 *     information for an individual file.
 *
 * @since PHP 5 >= 5.1.2, PHP 7
 *
 * @link http://www.php.net/manual/en/class.splfileinfo.php
 */
class SplFileInfo
{
    /**
     * @param mixed $file_name
     */
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

    /**
     * @param mixed|null $suffix
     */
    public function getBasename($suffix = null)
    {
    }

    public function getCTime()
    {
    }

    public function getExtension()
    {
    }

    /**
     * @param mixed|null $class_name
     */
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

    /**
     * @param mixed|null $class_name
     */
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

    /**
     * Get the type of a variable
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.gettype.php
     */
    public function getType(): string
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

    /**
     * @param mixed|null $open_mode
     * @param mixed|null $use_include_path
     * @param mixed|null $context
     */
    public function openFile($open_mode = null, $use_include_path = null, $context = null)
    {
    }

    /**
     * @param mixed|null $class_name
     */
    public function setFileClass($class_name = null)
    {
    }

    /**
     * @param mixed|null $class_name
     */
    public function setInfoClass($class_name = null)
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
     * @param mixed $file_name
     * @param mixed|null $open_mode
     * @param mixed|null $use_include_path
     * @param mixed|null $context
     */
    public function __construct($file_name, $open_mode = null, $use_include_path = null, $context = null)
    {
    }

    public function __toString()
    {
    }

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    public function eof()
    {
    }

    /**
     * Flushes the output to a file
     *
     * @return bool
     *
     * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.fflush.php
     */
    public function fflush(): bool
    {
    }

    /**
     * Gets character from file pointer
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.fgetc.php
     */
    public function fgetc(): string
    {
    }

    /**
     * Gets line from file pointer and parse for CSV fields
     *
     * @param mixed|null $delimiter
     * @param mixed|null $enclosure
     * @param mixed|null $escape
     *
     * @return array
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.fgetcsv.php
     */
    public function fgetcsv($delimiter = null, $enclosure = null, $escape = null): array
    {
    }

    /**
     * Gets line from file pointer
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.fgets.php
     */
    public function fgets(): string
    {
    }

    /**
     * Gets line from file pointer and strip HTML tags
     *
     * @param mixed|null $allowable_tags
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.fgetss.php
     */
    public function fgetss($allowable_tags = null): string
    {
    }

    /**
     * Portable advisory file locking
     *
     * @param mixed $operation
     * @param mixed|null $wouldblock
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.flock.php
     */
    public function flock($operation, &$wouldblock = null): bool
    {
    }

    /**
     * Output all remaining data on a file pointer
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.fpassthru.php
     */
    public function fpassthru(): int
    {
    }

    /**
     * Format line as CSV and write to file pointer
     *
     * @param mixed $fields
     * @param mixed|null $delimiter
     * @param mixed|null $enclosure
     * @param mixed|null $escape
     *
     * @return int
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/function.fputcsv.php
     */
    public function fputcsv($fields, $delimiter = null, $enclosure = null, $escape = null): int
    {
    }

    /**
     * Binary-safe file read
     *
     * @param mixed $length
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.fread.php
     */
    public function fread($length): string
    {
    }

    /**
     * Parses input from a file according to a format
     *
     * @param mixed $format
     * @param mixed $vars
     *
     * @return mixed
     *
     * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.fscanf.php
     */
    public function fscanf($format, &...$vars)
    {
    }

    /**
     * Seeks on a file pointer
     *
     * @param mixed $pos
     * @param mixed|null $whence
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.fseek.php
     */
    public function fseek($pos, $whence = null): int
    {
    }

    /**
     * Gets information about a file using an open file pointer
     *
     * @return array
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.fstat.php
     */
    public function fstat(): array
    {
    }

    /**
     * Returns the current position of the file read/write pointer
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.ftell.php
     */
    public function ftell(): int
    {
    }

    /**
     * Truncates a file to a given length
     *
     * @param mixed $size
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.ftruncate.php
     */
    public function ftruncate($size): bool
    {
    }

    /**
     * Binary-safe file write
     *
     * @param mixed $str
     * @param mixed|null $length
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.fwrite.php
     */
    public function fwrite($str, $length = null): int
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

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    /**
     * @param mixed $line_pos
     */
    public function seek($line_pos)
    {
    }

    /**
     * @param mixed|null $delimiter
     * @param mixed|null $enclosure
     * @param mixed|null $escape
     */
    public function setCsvControl($delimiter = null, $enclosure = null, $escape = null)
    {
    }

    /**
     * @param mixed $flags
     */
    public function setFlags($flags)
    {
    }

    /**
     * @param mixed $max_len
     */
    public function setMaxLineLen($max_len)
    {
    }

    public function valid()
    {
    }
}

/**
 * The SplFixedArray class provides the main functionalities of array. The 
 *     main differences between a SplFixedArray and a normal PHP array is that 
 *     the SplFixedArray is of fixed length and allows only integers within 
 *     the range as indexes. The advantage is that it allows a faster array
 *     implementation.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.splfixedarray.php
 */
class SplFixedArray implements ArrayAccess, Countable, Iterator
{
    /**
     * @param mixed|null $size
     */
    public function __construct($size = null)
    {
    }

    public function __wakeup()
    {
    }

    /**
     * Count all elements in an array, or something in an object
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.count.php
     */
    public function count(): int
    {
    }

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    /**
     * @param mixed $data
     * @param mixed|null $save_indexes
     */
    public static function fromArray($data, $save_indexes = null)
    {
    }

    public function getSize()
    {
    }

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    /**
     * @param mixed $index
     */
    public function offsetExists($index)
    {
    }

    /**
     * @param mixed $index
     */
    public function offsetGet($index)
    {
    }

    /**
     * @param mixed $index
     * @param mixed $newval
     */
    public function offsetSet($index, $newval)
    {
    }

    /**
     * @param mixed $index
     */
    public function offsetUnset($index)
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    /**
     * @param mixed $value
     */
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

/**
 * The SplHeap class provides the main functionalities of a Heap.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.splheap.php
 */
abstract class SplHeap implements Countable, Iterator
{
    abstract protected function compare();

    /**
     * Count all elements in an array, or something in an object
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.count.php
     */
    public function count(): int
    {
    }

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    /**
     * Import variables into the current symbol table from an array
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.extract.php
     */
    public function extract(): int
    {
    }

    /**
     * @param mixed $value
     */
    public function insert($value)
    {
    }

    public function isCorrupted()
    {
    }

    public function isEmpty()
    {
    }

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    public function recoverFromCorruption()
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    public function top()
    {
    }

    public function valid()
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
     * @param mixed $a
     * @param mixed $b
     */
    protected function compare($a, $b)
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
     * @param mixed $a
     * @param mixed $b
     */
    protected function compare($a, $b)
    {
    }
}

/**
 * The SplObjectStorage class provides a map from objects to data or, by
 *     ignoring data, an object set. This dual purpose can be useful in many
 *     cases involving the need to uniquely identify objects.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.splobjectstorage.php
 */
class SplObjectStorage implements ArrayAccess, Countable, Iterator, Serializable
{
    /**
     * @param mixed $object
     */
    public function addAll($object)
    {
    }

    /**
     * @param mixed $object
     * @param mixed|null $inf
     */
    public function attach($object, $inf = null)
    {
    }

    /**
     * @param mixed $object
     */
    public function contains($object)
    {
    }

    /**
     * Count all elements in an array, or something in an object
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.count.php
     */
    public function count(): int
    {
    }

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    /**
     * @param mixed $object
     */
    public function detach($object)
    {
    }

    /**
     * @param mixed $object
     */
    public function getHash($object)
    {
    }

    public function getInfo()
    {
    }

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    /**
     * @param mixed $object
     */
    public function offsetExists($object)
    {
    }

    /**
     * @param mixed $object
     */
    public function offsetGet($object)
    {
    }

    /**
     * @param mixed $object
     * @param mixed|null $inf
     */
    public function offsetSet($object, $inf = null)
    {
    }

    /**
     * @param mixed $object
     */
    public function offsetUnset($object)
    {
    }

    /**
     * @param mixed $object
     */
    public function removeAll($object)
    {
    }

    /**
     * @param mixed $object
     */
    public function removeAllExcept($object)
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    /**
     * Generates a storable representation of a value
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.serialize.php
     */
    public function serialize(): string
    {
    }

    /**
     * @param mixed $info
     */
    public function setInfo($info)
    {
    }

    /**
     * Creates a PHP value from a stored representation
     *
     * @param mixed $serialized
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.unserialize.php
     */
    public function unserialize($serialized)
    {
    }

    public function valid()
    {
    }
}

/**
 * The SplPriorityQueue class provides the main functionalities of a 
 *     prioritized queue, implemented using a max heap.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.splpriorityqueue.php
 */
class SplPriorityQueue implements Countable, Iterator
{
    /**
     * @param mixed $a
     * @param mixed $b
     */
    public function compare($a, $b)
    {
    }

    /**
     * Count all elements in an array, or something in an object
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.count.php
     */
    public function count(): int
    {
    }

    /**
     * Return the current element in an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.current.php
     */
    public function current()
    {
    }

    /**
     * Import variables into the current symbol table from an array
     *
     * @return int
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.extract.php
     */
    public function extract(): int
    {
    }

    public function getExtractFlags()
    {
    }

    /**
     * @param mixed $value
     * @param mixed $priority
     */
    public function insert($value, $priority)
    {
    }

    public function isCorrupted()
    {
    }

    public function isEmpty()
    {
    }

    /**
     * Fetch a key from an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.key.php
     */
    public function key()
    {
    }

    /**
     * Advance the internal pointer of an array
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.next.php
     */
    public function next()
    {
    }

    public function recoverFromCorruption()
    {
    }

    /**
     * Rewind the position of a file pointer
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.rewind.php
     */
    public function rewind(): bool
    {
    }

    /**
     * @param mixed $flags
     */
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

/**
 * The SplQueue class provides the main functionalities of a queue implemented using a doubly linked list.
 *
 * @since PHP 5 >= 5.3.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.splqueue.php
 */
class SplQueue extends SplDoublyLinkedList
{
    public function dequeue()
    {
    }

    /**
     * @param mixed $value
     */
    public function enqueue($value)
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
     * @param mixed|null $max_memory
     */
    public function __construct($max_memory = null)
    {
    }
}

/**
 * Exception thrown when performing an invalid operation on an empty
 *     container, such as removing an element.
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
 *     this happens when a function calls another function and expects the return
 *     value to be of a certain type or value not including arithmetic or buffer
 *     related errors.
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
 * @param array[]|null $args
 *
 * @return int
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iterator-apply.php
 */
function iterator_apply($iterator, $function, $args = null): int
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
function iterator_count($iterator): int
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
function iterator_to_array($iterator, $use_keys = null): array
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
function spl_autoload($class_name, $file_extensions = null)
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
function spl_autoload_call($class_name)
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
