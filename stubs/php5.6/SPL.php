<?php
// Start of extension: SPL
// - parsed on POSIX with PHP 5.6.34 (extension version 0.2)
// - parsed on Windows with PHP 5.6.34 (extension version 0.2)

/**
 * Classes implementing <code>Countable</code> can be used with the
 * <code>count</code> function.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/class.countable.php
 */
interface Countable
{
    /**
     * Count elements of an object
     *
     * @return int The custom count as an <code>integer</code>.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/countable.count.php
     */
    public function count();
}

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
     * @return Iterator The inner iterator for the current entry.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/outeriterator.getinneriterator.php
     */
    public function getInnerIterator();
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
     * @return RecursiveIterator An iterator for the current entry.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiterator.getchildren.php
     */
    public function getChildren();

    /**
     * Returns if an iterator can be created for the current entry
     *
     * @return bool Returns <code>TRUE</code> if the current entry can be iterated over, otherwise returns <code>FALSE</code>.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiterator.haschildren.php
     */
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
     * Seeks to a position
     *
     * @param int $position The position to seek to.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/seekableiterator.seek.php
     */
    public function seek($position);
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
     * @param SplSubject $subject The <code>SplSubject</code> notifying the observer of an update.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobserver.update.php
     */
    public function update(SplSubject $subject);
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
     * @param SplObserver $observer The <code>SplObserver</code> to attach.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splsubject.attach.php
     */
    public function attach(SplObserver $observer);

    /**
     * Detach an observer
     *
     * @param SplObserver $observer The <code>SplObserver</code> to detach.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splsubject.detach.php
     */
    public function detach(SplObserver $observer);

    /**
     * Notify an observer
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splsubject.notify.php
     */
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
     * @param Iterator $iterator The iterator to append.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/appenditerator.append.php
     */
    public function append(Iterator $iterator)
    {
    }

    /**
     * Gets the current value
     *
     * @return mixed The current value if it is valid or <code>NULL</code> otherwise.
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
     * @return ArrayIterator Returns an <code>ArrayIterator</code> containing
     * the appended iterators.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/appenditerator.getarrayiterator.php
     */
    public function getArrayIterator()
    {
    }

    /**
     * Gets the inner iterator
     *
     * @return Iterator The current inner iterator, or <code>NULL</code> if there is not one.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/appenditerator.getinneriterator.php
     */
    public function getInnerIterator()
    {
    }

    /**
     * Gets an index of iterators
     *
     * @return int Returns an <code>integer</code>, which is the zero-based index
     * of the current inner iterator.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/appenditerator.getiteratorindex.php
     */
    public function getIteratorIndex()
    {
    }

    /**
     * Gets the current key
     *
     * @return mixed The current key if it is valid or <code>NULL</code> otherwise.
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
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/appenditerator.next.php
     */
    public function next()
    {
    }

    /**
     * Rewinds the Iterator
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/appenditerator.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * Checks validity of the current element
     *
     * @return bool Returns <code>TRUE</code> if the current iteration is valid, <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/appenditerator.valid.php
     */
    public function valid()
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
     * @param mixed $array
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.construct.php
     */
    public function __construct($array = null)
    {
    }

    /**
     * Append an element
     *
     * @param mixed $value The value to append.
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.append.php
     */
    public function append($value)
    {
    }

    /**
     * Sort array by values
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.asort.php
     */
    public function asort()
    {
    }

    /**
     * Count elements
     *
     * @return int The number of elements or public properties in the associated
     * <code>array</code> or <code>object</code>, respectively.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.count.php
     */
    public function count()
    {
    }

    /**
     * Return current array entry
     *
     * @return mixed The current <code>array</code> entry.
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
     * @return array A copy of the <code>array</code>, or array of public properties
     * if ArrayIterator refers to an <code>object</code>.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.getarraycopy.php
     */
    public function getArrayCopy()
    {
    }

    /**
     * Get flags
     *
     * @return void The current flags.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.getflags.php
     */
    public function getFlags()
    {
    }

    /**
     * Return current array key
     *
     * @return mixed The current <code>array</code> key.
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
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.ksort.php
     */
    public function ksort()
    {
    }

    /**
     * Sort an array naturally, case insensitive
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.natcasesort.php
     */
    public function natcasesort()
    {
    }

    /**
     * Sort an array naturally
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.natsort.php
     */
    public function natsort()
    {
    }

    /**
     * Move to next entry
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.next.php
     */
    public function next()
    {
    }

    /**
     * Check if offset exists
     *
     * @param string $index The offset being checked.
     *
     * @return void <code>TRUE</code> if the offset exists, otherwise <code>FALSE</code>
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.offsetexists.php
     */
    public function offsetExists($index)
    {
    }

    /**
     * Get value for an offset
     *
     * @param string $index The offset to get the value from.
     *
     * @return mixed The value at offset <code>index</code>.
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
     * @param string $index The index to set for.
     * @param string $newval The new value to store at the index.
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.offsetset.php
     */
    public function offsetSet($index, $newval)
    {
    }

    /**
     * Unset value for an offset
     *
     * @param string $index The offset to unset.
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.offsetunset.php
     */
    public function offsetUnset($index)
    {
    }

    /**
     * Rewind array back to the start
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * Seek to position
     *
     * @param int $position The position to seek to.
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.seek.php
     */
    public function seek($position)
    {
    }

    /**
     * Serialize
     *
     * @return string The serialized <code>ArrayIterator</code>.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.serialize.php
     */
    public function serialize()
    {
    }

    /**
     * Set behaviour flags
     *
     * @param string $flags A bitmask as follows:
     * <ul>
     * <li>
     * 0 = Properties of the object have their normal functionality
     * when accessed as list (var_dump, foreach, etc.).
     * </li>
     * <li>
     * 1 = Array indices can be accessed as properties in read/write.
     * </li>
     * </ul>
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.setflags.php
     */
    public function setFlags($flags)
    {
    }

    /**
     * Sort with a user-defined comparison function and maintain index association
     *
     * @param callable $cmp_function The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
     * Note that before PHP 7.0.0 this integer had to be in the range from -2147483648 to 2147483647.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.uasort.php
     */
    public function uasort(callable $cmp_function)
    {
    }

    /**
     * Sort by keys using a user-defined comparison function
     *
     * @param callable $cmp_function The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
     * Note that before PHP 7.0.0 this integer had to be in the range from -2147483648 to 2147483647.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.uksort.php
     */
    public function uksort(callable $cmp_function)
    {
    }

    /**
     * Unserialize
     *
     * @param string $serialized The serialized ArrayIterator object to be unserialized.
     *
     * @return string The <code>ArrayIterator</code>.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.unserialize.php
     */
    public function unserialize($serialized)
    {
    }

    /**
     * Check whether array contains more entries
     *
     * @return bool Returns <code>TRUE</code> if the iterator is valid, otherwise <code>FALSE</code>
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayiterator.valid.php
     */
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
     * Entries can be accessed as properties (read and write).
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.arrayobject.php#arrayobject.constants
     */
    const ARRAY_AS_PROPS = 2;

    /**
     * Properties of the object have their normal functionality when accessed as list (var_dump, foreach, etc.).
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.arrayobject.php#arrayobject.constants
     */
    const STD_PROP_LIST = 1;

    /**
     * Construct a new array object
     *
     * @param mixed|null $input The <code>input</code> parameter accepts an
     * <code>array</code> or an <code>Object</code>.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.construct.php
     */
    public function __construct($input = /* array() */ null)
    {
    }

    /**
     * Appends the value
     *
     * @param mixed $value The value being appended.
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.append.php
     */
    public function append($value)
    {
    }

    /**
     * Sort the entries by value
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.asort.php
     */
    public function asort()
    {
    }

    /**
     * Get the number of public properties in the ArrayObject
     *
     * @return int The number of public properties in the <code>ArrayObject</code>.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.count.php
     */
    public function count()
    {
    }

    /**
     * Exchange the array for another one
     *
     * @param mixed $input The new <code>array</code> or <code>object</code> to exchange with the current array.
     *
     * @return array Returns the old <code>array</code>.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.exchangearray.php
     */
    public function exchangeArray($input)
    {
    }

    /**
     * Creates a copy of the ArrayObject
     *
     * @return array Returns a copy of the array. When the <code>ArrayObject</code> refers to an object,
     * an array of the public properties of that object will be returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.getarraycopy.php
     */
    public function getArrayCopy()
    {
    }

    /**
     * Gets the behavior flags
     *
     * @return int Returns the behavior flags of the ArrayObject.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.getflags.php
     */
    public function getFlags()
    {
    }

    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return ArrayIterator An iterator from an <code>ArrayObject</code>.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.getiterator.php
     */
    public function getIterator()
    {
    }

    /**
     * Gets the iterator classname for the ArrayObject
     *
     * @return string Returns the iterator class name that is used to iterate over this object.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.getiteratorclass.php
     */
    public function getIteratorClass()
    {
    }

    /**
     * Sort the entries by key
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.ksort.php
     */
    public function ksort()
    {
    }

    /**
     * Sort an array using a case insensitive "natural order" algorithm
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.natcasesort.php
     */
    public function natcasesort()
    {
    }

    /**
     * Sort entries using a "natural order" algorithm
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.natsort.php
     */
    public function natsort()
    {
    }

    /**
     * Returns whether the requested index exists
     *
     * @param mixed $index The index being checked.
     *
     * @return bool <code>TRUE</code> if the requested index exists, otherwise <code>FALSE</code>
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.offsetexists.php
     */
    public function offsetExists($index)
    {
    }

    /**
     * Returns the value at the specified index
     *
     * @param mixed $index The index with the value.
     *
     * @return mixed The value at the specified index or <code>NULL</code>.
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
     * @param mixed $index The index being set.
     * @param mixed $newval The new value for the <code>index</code>.
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.offsetset.php
     */
    public function offsetSet($index, $newval)
    {
    }

    /**
     * Unsets the value at the specified index
     *
     * @param mixed $index The index being unset.
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.offsetunset.php
     */
    public function offsetUnset($index)
    {
    }

    /**
     * Serialize an ArrayObject
     *
     * @return string The serialized representation of the <code>ArrayObject</code>.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.serialize.php
     */
    public function serialize()
    {
    }

    /**
     * Sets the behavior flags
     *
     * @param int $flags The new ArrayObject behavior.
     * It takes on either a bitmask, or named constants. Using named
     * constants is strongly encouraged to ensure compatibility for future
     * versions.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.setflags.php
     */
    public function setFlags($flags)
    {
    }

    /**
     * Sets the iterator classname for the ArrayObject
     *
     * @param string $iterator_class The classname of the array iterator to use when iterating over this object.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.setiteratorclass.php
     */
    public function setIteratorClass($iterator_class)
    {
    }

    /**
     * Sort the entries with a user-defined comparison function and maintain key association
     *
     * @param callable $cmp_function Function <code>cmp_function</code> should accept two
     * parameters which will be filled by pairs of entries.
     * The comparison function must return an integer less than, equal
     * to, or greater than zero if the first argument is considered to
     * be respectively less than, equal to, or greater than the
     * second.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.uasort.php
     */
    public function uasort(callable $cmp_function)
    {
    }

    /**
     * Sort the entries by keys using a user-defined comparison function
     *
     * @param callable $cmp_function The callback comparison function.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.uksort.php
     */
    public function uksort(callable $cmp_function)
    {
    }

    /**
     * Unserialize an ArrayObject
     *
     * @param string $serialized The serialized <code>ArrayObject</code>.
     *
     * @return void The unserialized <code>ArrayObject</code>.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/arrayobject.unserialize.php
     */
    public function unserialize($serialized)
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
     * Convert every element to string.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.cachingiterator.php#cachingiterator.constants
     */
    const CALL_TOSTRING = 1;

    /**
     * Don't throw exception in accessing children.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.cachingiterator.php#cachingiterator.constants
     */
    const CATCH_GET_CHILD = 16;

    /**
     * Cache all read data.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.cachingiterator.php#cachingiterator.constants
     */
    const FULL_CACHE = 256;

    /**
     * Use current for
     * conversion to string.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.cachingiterator.php#cachingiterator.constants
     */
    const TOSTRING_USE_CURRENT = 4;

    /**
     * Use inner
     * for conversion to string.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.cachingiterator.php#cachingiterator.constants
     */
    const TOSTRING_USE_INNER = 8;

    /**
     * Use key for conversion to
     * string.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.cachingiterator.php#cachingiterator.constants
     */
    const TOSTRING_USE_KEY = 2;

    /**
     * Construct a new CachingIterator object for the iterator
     *
     * @param Iterator $iterator
     * @param mixed $flags
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
     * @return void The <code>string</code> representation of the current element.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.tostring.php
     */
    public function __toString()
    {
    }

    /**
     * The number of elements in the iterator
     *
     * @return int The count of the elements iterated over.
     *
     * @since PHP 5 >= 5.2.2, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.count.php
     */
    public function count()
    {
    }

    /**
     * Return the current element
     *
     * @return void Mixed
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.current.php
     */
    public function current()
    {
    }

    /**
     * Retrieve the contents of the cache
     *
     * @return array An <code>array</code> containing the cache items.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.getcache.php
     */
    public function getCache()
    {
    }

    /**
     * Get flags used
     *
     * @return int Description...
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.getflags.php
     */
    public function getFlags()
    {
    }

    /**
     * Returns the inner iterator
     *
     * @return Iterator Returns an object implementing the Iterator interface.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.getinneriterator.php
     */
    public function getInnerIterator()
    {
    }

    /**
     * Check whether the inner iterator has a valid next element
     *
     * @return void Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.hasnext.php
     */
    public function hasNext()
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
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.next.php
     */
    public function next()
    {
    }

    /**
     * The offsetExists purpose
     *
     * @param string $index The index being checked.
     *
     * @return void Returns <code>TRUE</code> if an entry referenced by the offset exists, <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.offsetexists.php
     */
    public function offsetExists($index)
    {
    }

    /**
     * The offsetGet purpose
     *
     * @param string $index Description...
     *
     * @return void Description...
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.offsetget.php
     */
    public function offsetGet($index)
    {
    }

    /**
     * The offsetSet purpose
     *
     * @param string $index The index of the element to be set.
     * @param string $newval The new value for the <code>index</code>.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.offsetset.php
     */
    public function offsetSet($index, $newval)
    {
    }

    /**
     * The offsetUnset purpose
     *
     * @param string $index The index of the element to be unset.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.offsetunset.php
     */
    public function offsetUnset($index)
    {
    }

    /**
     * Rewind the iterator
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * The setFlags purpose
     *
     * @param int $flags Bitmask of the flags to set.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.setflags.php
     */
    public function setFlags($flags)
    {
    }

    /**
     * Check whether the current element is valid
     *
     * @return void Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/cachingiterator.valid.php
     */
    public function valid()
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
     * @param Iterator $iterator The iterator to be filtered.
     * @param callable $callback The callback, which should return <code>TRUE</code> to accept the current item
     * or <code>FALSE</code> otherwise.
     * See Examples.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/callbackfilteriterator.construct.php
     */
    public function __construct(Iterator $iterator, callable $callback)
    {
    }

    /**
     * Calls the callback with the current value, the current key and the inner iterator as arguments
     *
     * @return string Returns <code>TRUE</code> to accept the current item, or <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/callbackfilteriterator.accept.php
     */
    public function accept()
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
     * @param string $path The path of the directory to traverse.
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
     * @return string Returns the file name of the current <code>DirectoryIterator</code> item.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.tostring.php
     */
    public function __toString()
    {
    }

    /**
     * Return the current DirectoryIterator item
     *
     * @return DirectoryIterator The current <code>DirectoryIterator</code> item.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.current.php
     */
    public function current()
    {
    }

    /**
     * Get base name of current DirectoryIterator item
     *
     * @param string $suffix If the base name ends in <code>suffix</code>,
     * this will be cut.
     *
     * @return string The base name of the current <code>DirectoryIterator</code> item.
     *
     * @since PHP 5 >= 5.2.2, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.getbasename.php
     */
    public function getBasename($suffix = null)
    {
    }

    /**
     * Gets the file extension
     *
     * @return string Returns a <code>string</code> containing the file extension, or an
     * empty <code>string</code> if the file has no extension.
     *
     * @since PHP 5 >= 5.3.6, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.getextension.php
     */
    public function getExtension()
    {
    }

    /**
     * Return file name of current DirectoryIterator item
     *
     * @return string Returns the file name of the current <code>DirectoryIterator</code> item.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.getfilename.php
     */
    public function getFilename()
    {
    }

    /**
     * Determine if current DirectoryIterator item is '.' or '..'
     *
     * @return bool <code>TRUE</code> if the entry is <code>.</code> or <code>..</code>,
     * otherwise <code>FALSE</code>
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.isdot.php
     */
    public function isDot()
    {
    }

    /**
     * Return the key for the current DirectoryIterator item
     *
     * @return string The key for the current <code>DirectoryIterator</code> item.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.key.php
     */
    public function key()
    {
    }

    /**
     * Move forward to next DirectoryIterator item
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.next.php
     */
    public function next()
    {
    }

    /**
     * Rewind the DirectoryIterator back to the start
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * Seek to a DirectoryIterator item
     *
     * @param int $position The zero-based numeric position to seek to.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.seek.php
     */
    public function seek($position)
    {
    }

    /**
     * Check whether current DirectoryIterator position is a valid file
     *
     * @return bool Returns <code>TRUE</code> if the position is valid, otherwise <code>FALSE</code>
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/directoryiterator.valid.php
     */
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
     * The current() method
     *
     * @return mixed No value is returned.
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
     * @return mixed No value is returned.
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
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/emptyiterator.next.php
     */
    public function next()
    {
    }

    /**
     * The rewind() method
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/emptyiterator.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * The valid() method
     *
     * @return bool <code>FALSE</code>
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/emptyiterator.valid.php
     */
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
     * Makes <code>FilesystemIterator::current</code> return an <code>SplFileInfo</code> instance.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.filesystemiterator.php#filesystemiterator.constants
     */
    const CURRENT_AS_FILEINFO = 0;

    /**
     * Makes <code>FilesystemIterator::current</code> return the pathname.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.filesystemiterator.php#filesystemiterator.constants
     */
    const CURRENT_AS_PATHNAME = 32;

    /**
     * Makes <code>FilesystemIterator::current</code> return $this (the FilesystemIterator).
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.filesystemiterator.php#filesystemiterator.constants
     */
    const CURRENT_AS_SELF = 16;

    /**
     * Masks <code>FilesystemIterator::current</code>
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.filesystemiterator.php#filesystemiterator.constants
     */
    const CURRENT_MODE_MASK = 240;

    /**
     * Makes <code>RecursiveDirectoryIterator::hasChildren</code> follow symlinks.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.filesystemiterator.php#filesystemiterator.constants
     */
    const FOLLOW_SYMLINKS = 512;

    /**
     * Makes <code>FilesystemIterator::key</code> return the filename.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.filesystemiterator.php#filesystemiterator.constants
     */
    const KEY_AS_FILENAME = 256;

    /**
     * Makes <code>FilesystemIterator::key</code> return the pathname.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.filesystemiterator.php#filesystemiterator.constants
     */
    const KEY_AS_PATHNAME = 0;

    /**
     * Masks <code>FilesystemIterator::key</code>
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.filesystemiterator.php#filesystemiterator.constants
     */
    const KEY_MODE_MASK = 3840;

    /**
     * Same as <code>FilesystemIterator::KEY_AS_FILENAME | FilesystemIterator::CURRENT_AS_FILEINFO</code>.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.filesystemiterator.php#filesystemiterator.constants
     */
    const NEW_CURRENT_AND_KEY = 256;

    /**
     * @var int
     */
    const OTHER_MODE_MASK = 12288;

    /**
     * Skips dot files (<code>.</code> and <code>..</code>).
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.filesystemiterator.php#filesystemiterator.constants
     */
    const SKIP_DOTS = 4096;

    /**
     * Makes paths use Unix-style forward slash irrespective of system default.
     * Note that the <code>path</code> that is passed to the
     * constructor is not modified.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.filesystemiterator.php#filesystemiterator.constants
     */
    const UNIX_PATHS = 8192;

    /**
     * Constructs a new filesystem iterator
     *
     * @param mixed $path
     * @param mixed $flags
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
     * @return mixed The filename, file information, or $this depending on the set flags.
     * See the FilesystemIterator constants.
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
     * @return int The integer value of the set flags.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filesystemiterator.getflags.php
     */
    public function getFlags()
    {
    }

    /**
     * Retrieve the key for the current file
     *
     * @return string Returns the pathname or filename depending on the set flags.
     * See the FilesystemIterator constants.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filesystemiterator.key.php
     */
    public function key()
    {
    }

    /**
     * Move to the next file
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filesystemiterator.next.php
     */
    public function next()
    {
    }

    /**
     * Rewinds back to the beginning
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filesystemiterator.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * Sets handling flags
     *
     * @param int $flags The handling flags to set.
     * See the FilesystemIterator constants.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filesystemiterator.setflags.php
     */
    public function setFlags($flags = null)
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
     * @return bool <code>TRUE</code> if the current element is acceptable, otherwise <code>FALSE</code>.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filteriterator.accept.php
     */
    abstract public function accept();

    /**
     * Get the current element value
     *
     * @return mixed The current element value.
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
     * @return Iterator The inner iterator.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filteriterator.getinneriterator.php
     */
    public function getInnerIterator()
    {
    }

    /**
     * Get the current key
     *
     * @return mixed The current key.
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
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filteriterator.next.php
     */
    public function next()
    {
    }

    /**
     * Rewind the iterator
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filteriterator.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * Check whether the current element is valid
     *
     * @return bool <code>TRUE</code> if the current element is valid, otherwise <code>FALSE</code>
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/filteriterator.valid.php
     */
    public function valid()
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
     * @param mixed $flags
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
     * @return int The number of returned directories and files, as an
     * <code>integer</code>.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/globiterator.count.php
     */
    public function count()
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
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/infiniteiterator.next.php
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
     * @return mixed The value of the current element.
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
     * @return Traversable The inner iterator as passed to <code>IteratorIterator::__construct</code>.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/iteratoriterator.getinneriterator.php
     */
    public function getInnerIterator()
    {
    }

    /**
     * Get the key of the current element
     *
     * @return mixed The key of the current element.
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
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/iteratoriterator.next.php
     */
    public function next()
    {
    }

    /**
     * Rewind to the first element
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/iteratoriterator.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * Checks if the iterator is valid
     *
     * @return bool Returns <code>TRUE</code> if the iterator is valid, otherwise <code>FALSE</code>
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/iteratoriterator.valid.php
     */
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
     * @param mixed $offset
     * @param mixed $count
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
     * @return mixed Returns the current element or <code>NULL</code> if there is none.
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
     * @return Iterator The inner iterator passed to <code>LimitIterator::__construct</code>.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/limititerator.getinneriterator.php
     */
    public function getInnerIterator()
    {
    }

    /**
     * Return the current position
     *
     * @return int The current position.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/limititerator.getposition.php
     */
    public function getPosition()
    {
    }

    /**
     * Get current key
     *
     * @return mixed Returns the key for the current item.
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
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/limititerator.next.php
     */
    public function next()
    {
    }

    /**
     * Rewind the iterator to the specified starting offset
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/limititerator.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * Seek to the given position
     *
     * @param int $position The position to seek to.
     *
     * @return int Returns the offset position after seeking.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/limititerator.seek.php
     */
    public function seek($position)
    {
    }

    /**
     * Check whether the current element is valid
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/limititerator.valid.php
     */
    public function valid()
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
     * Keys are created from sub iterators associated information.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.multipleiterator.php#multipleiterator.constants
     */
    const MIT_KEYS_ASSOC = 2;

    /**
     * Keys are created from the sub iterators position.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.multipleiterator.php#multipleiterator.constants
     */
    const MIT_KEYS_NUMERIC = 0;

    /**
     * Require all sub iterators to be valid in iteration.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.multipleiterator.php#multipleiterator.constants
     */
    const MIT_NEED_ALL = 1;

    /**
     * Do not require all sub iterators to be valid in iteration.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.multipleiterator.php#multipleiterator.constants
     */
    const MIT_NEED_ANY = 0;

    /**
     * Constructs a new MultipleIterator
     *
     * @param int|null $flags The flags to set, according to the
     * Flag Constants.
     * <ul>
     * <li>
     * <code>MultipleIterator::MIT_NEED_ALL</code> or <code>MultipleIterator::MIT_NEED_ANY</code>
     * </li>
     * <li>
     * <code>MultipleIterator::MIT_KEYS_NUMERIC</code> or <code>MultipleIterator::MIT_KEYS_ASSOC</code>
     * </li>
     * </ul>
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.construct.php
     */
    public function __construct($flags = MultipleIterator::MIT_NEED_ALL|MultipleIterator::MIT_KEYS_NUMERIC)
    {
    }

    /**
     * Attaches iterator information
     *
     * @param Iterator $iterator The new iterator to attach.
     * @param string $infos The associative information for the Iterator, which must be an
     * <code>integer</code>, a <code>string</code>, or <code>NULL</code>.
     *
     * @return void Description...
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.attachiterator.php
     */
    public function attachIterator(Iterator $iterator, $infos = null)
    {
    }

    /**
     * Checks if an iterator is attached
     *
     * @param Iterator $iterator The iterator to check.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.containsiterator.php
     */
    public function containsIterator(Iterator $iterator)
    {
    }

    /**
     * Gets the number of attached iterator instances
     *
     * @return int The number of attached iterator instances (as an <code>integer</code>).
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.countiterators.php
     */
    public function countIterators()
    {
    }

    /**
     * Gets the registered iterator instances
     *
     * @return array An <code>array</code> containing the current values of each attached iterator,
     * or <code>FALSE</code> if no iterators are attached.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.current.php
     */
    public function current()
    {
    }

    /**
     * Detaches an iterator
     *
     * @param Iterator $iterator The iterator to detach.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.detachiterator.php
     */
    public function detachIterator(Iterator $iterator)
    {
    }

    /**
     * Gets the flag information
     *
     * @return int Information about the flags, as an <code>integer</code>.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.getflags.php
     */
    public function getFlags()
    {
    }

    /**
     * Gets the registered iterator instances
     *
     * @return array An <code>array</code> of all registered iterator instances,
     * or <code>FALSE</code> if no sub iterator is attached.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.key.php
     */
    public function key()
    {
    }

    /**
     * Moves all attached iterator instances forward
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.next.php
     */
    public function next()
    {
    }

    /**
     * Rewinds all attached iterator instances
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * Sets flags
     *
     * @param int $flags The flags to set, according to the
     * Flag Constants
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.setflags.php
     */
    public function setFlags($flags)
    {
    }

    /**
     * Checks the validity of sub iterators
     *
     * @return bool Returns <code>TRUE</code> if one or all sub iterators are valid depending on flags,
     * otherwise <code>FALSE</code>
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/multipleiterator.valid.php
     */
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
     * @return mixed The current value.
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
     * @return iterator The inner iterator, as passed to <code>NoRewindIterator::__construct</code>.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/norewinditerator.getinneriterator.php
     */
    public function getInnerIterator()
    {
    }

    /**
     * Get the current key
     *
     * @return mixed The current key.
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
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/norewinditerator.next.php
     */
    public function next()
    {
    }

    /**
     * Prevents the rewind operation on the inner iterator
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/norewinditerator.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * Validates the iterator
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/norewinditerator.valid.php
     */
    public function valid()
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
     * @return bool <code>TRUE</code> if the current element is acceptable, otherwise <code>FALSE</code>.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/parentiterator.accept.php
     */
    public function accept()
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
     * Treat only arrays (not objects) as having children for recursive iteration.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.recursivearrayiterator.php#recursivearrayiterator.constants
     */
    const CHILD_ARRAYS_ONLY = 4;

    /**
     * Returns an iterator for the current entry if it is an <code>array</code> or an <code>object</code>
     *
     * @return RecursiveArrayIterator An iterator for the current entry, if it is an <code>array</code> or <code>object</code>.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivearrayiterator.getchildren.php
     */
    public function getChildren()
    {
    }

    /**
     * Returns whether current entry is an array or an object
     *
     * @return bool Returns <code>TRUE</code> if the current entry is an <code>array</code> or an <code>object</code>,
     * otherwise <code>FALSE</code> is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivearrayiterator.haschildren.php
     */
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
     * Construct
     *
     * @param Iterator $iterator
     * @param mixed $flags
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
     * @return RecursiveCachingIterator The inner iterator's children, as a RecursiveCachingIterator.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivecachingiterator.getchildren.php
     */
    public function getChildren()
    {
    }

    /**
     * Check whether the current element of the inner iterator has children
     *
     * @return bool <code>TRUE</code> if the inner iterator has children, otherwise <code>FALSE</code>
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivecachingiterator.haschildren.php
     */
    public function hasChildren()
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
     * @param RecursiveIterator $iterator The recursive iterator to be filtered.
     * @param string $callback The callback, which should return <code>TRUE</code> to accept the current item
     * or <code>FALSE</code> otherwise.
     * See Examples.
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
     * @return RecursiveCallbackFilterIterator Returns a <code>RecursiveCallbackFilterIterator</code> containing
     * the children.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivecallbackfilteriterator.getchildren.php
     */
    public function getChildren()
    {
    }

    /**
     * Check whether the inner iterator's current element has children
     *
     * @return bool Returns <code>TRUE</code> if the current element has children, <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivecallbackfilteriterator.haschildren.php
     */
    public function hasChildren()
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
     * @param mixed $flags
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
     * @return mixed The filename, file information, or $this depending on the set flags.
     * See the FilesystemIterator
     * constants.
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
     * @return string The sub path.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivedirectoryiterator.getsubpath.php
     */
    public function getSubPath()
    {
    }

    /**
     * Get sub path and name
     *
     * @return string The sub path (sub directory) and filename.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivedirectoryiterator.getsubpathname.php
     */
    public function getSubPathname()
    {
    }

    /**
     * Returns whether current entry is a directory and not '.' or '..'
     *
     * @param bool|null $allow_links <!-- FIXME -->
     *
     * @return bool Returns whether the current entry is a directory, but not '.' or '..'
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivedirectoryiterator.haschildren.php
     */
    public function hasChildren($allow_links = false)
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
     * @return RecursiveFilterIterator Returns a <code>RecursiveFilterIterator</code> containing the inner iterator's children.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivefilteriterator.getchildren.php
     */
    public function getChildren()
    {
    }

    /**
     * Check whether the inner iterator's current element has children
     *
     * @return bool <code>TRUE</code> if the inner iterator has children, otherwise <code>FALSE</code>
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivefilteriterator.haschildren.php
     */
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
     * @var int
     *
     * @link http://www.php.net/manual/en/class.recursiveiteratoriterator.php#recursiveiteratoriterator.constants
     */
    const CATCH_GET_CHILD = 16;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.recursiveiteratoriterator.php#recursiveiteratoriterator.constants
     */
    const CHILD_FIRST = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.recursiveiteratoriterator.php#recursiveiteratoriterator.constants
     */
    const LEAVES_ONLY = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.recursiveiteratoriterator.php#recursiveiteratoriterator.constants
     */
    const SELF_FIRST = 1;

    /**
     * Construct a RecursiveIteratorIterator
     *
     * @param Traversable $iterator
     * @param mixed $mode
     * @param mixed $flags
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
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.beginchildren.php
     */
    public function beginChildren()
    {
    }

    /**
     * Begin Iteration
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.beginiteration.php
     */
    public function beginIteration()
    {
    }

    /**
     * Get children
     *
     * @return RecursiveIterator A <code>RecursiveIterator</code>.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.callgetchildren.php
     */
    public function callGetChildren()
    {
    }

    /**
     * Has children
     *
     * @return bool <code>TRUE</code> if the element has children, otherwise <code>FALSE</code>
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.callhaschildren.php
     */
    public function callHasChildren()
    {
    }

    /**
     * Access the current element value
     *
     * @return mixed The current elements value.
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
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.endchildren.php
     */
    public function endChildren()
    {
    }

    /**
     * End Iteration
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.enditeration.php
     */
    public function endIteration()
    {
    }

    /**
     * Get the current depth of the recursive iteration
     *
     * @return int The current depth of the recursive iteration.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.getdepth.php
     */
    public function getDepth()
    {
    }

    /**
     * Get inner iterator
     *
     * @return iterator The current active sub iterator.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.getinneriterator.php
     */
    public function getInnerIterator()
    {
    }

    /**
     * Get max depth
     *
     * @return mixed The maximum accepted depth, or <code>FALSE</code> if any depth is allowed.
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
     * @param int $level
     *
     * @return RecursiveIterator The current active sub iterator.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.getsubiterator.php
     */
    public function getSubIterator($level = null)
    {
    }

    /**
     * Access the current key
     *
     * @return mixed The current key.
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
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.next.php
     */
    public function next()
    {
    }

    /**
     * Next element
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.nextelement.php
     */
    public function nextElement()
    {
    }

    /**
     * Rewind the iterator to the first element of the top level inner iterator
     *
     * @return void No value is returned.
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * Set max depth
     *
     * @param int|null $max_depth The maximum allowed depth. <code>-1</code> is used
     * for any depth.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.setmaxdepth.php
     */
    public function setMaxDepth($max_depth = -1)
    {
    }

    /**
     * Check whether the current position is valid
     *
     * @return bool <code>TRUE</code> if the current position is valid, otherwise <code>FALSE</code>
     *
     * @since PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveiteratoriterator.valid.php
     */
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
     * Creates a new RecursiveRegexIterator
     *
     * @param RecursiveIterator $iterator The recursive iterator to apply this regex filter to.
     * @param string $regex The regular expression to match.
     * @param int|null $mode Operation mode, see <code>RegexIterator::setMode</code> for a list
     * of modes.
     * @param int|null $flags Special flags, see <code>RegexIterator::setFlags</code> for a list
     * of available flags.
     * @param int|null $preg_flags The regular expression flags. These flags depend on the operation mode parameter:
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveregexiterator.construct.php
     */
    public function __construct(RecursiveIterator $iterator, $regex, $mode = self::MATCH, $flags = 0, $preg_flags = 0)
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
     * @return RecursiveRegexIterator An iterator for the current entry, if it can be iterated over by the inner iterator.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveregexiterator.getchildren.php
     */
    public function getChildren()
    {
    }

    /**
     * Returns whether an iterator can be obtained for the current entry
     *
     * @return bool Returns <code>TRUE</code> if an iterator can be obtained for the current entry, otherwise returns <code>FALSE</code>.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursiveregexiterator.haschildren.php
     */
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
     * @var int
     *
     * @link http://www.php.net/manual/en/class.recursivetreeiterator.php#recursivetreeiterator.constants
     */
    const BYPASS_CURRENT = 4;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.recursivetreeiterator.php#recursivetreeiterator.constants
     */
    const BYPASS_KEY = 8;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.recursivetreeiterator.php#recursivetreeiterator.constants
     */
    const PREFIX_END_HAS_NEXT = 3;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.recursivetreeiterator.php#recursivetreeiterator.constants
     */
    const PREFIX_END_LAST = 4;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.recursivetreeiterator.php#recursivetreeiterator.constants
     */
    const PREFIX_LEFT = 0;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.recursivetreeiterator.php#recursivetreeiterator.constants
     */
    const PREFIX_MID_HAS_NEXT = 1;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.recursivetreeiterator.php#recursivetreeiterator.constants
     */
    const PREFIX_MID_LAST = 2;

    /**
     * @var int
     *
     * @link http://www.php.net/manual/en/class.recursivetreeiterator.php#recursivetreeiterator.constants
     */
    const PREFIX_RIGHT = 5;

    /**
     * Construct a RecursiveTreeIterator
     *
     * @param Traversable $iterator
     * @param mixed $flags
     * @param mixed $caching_it_flags
     * @param mixed $mode
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
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.beginchildren.php
     */
    public function beginChildren()
    {
    }

    /**
     * Begin iteration
     *
     * @return RecursiveIterator A <code>RecursiveIterator</code>.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.beginiteration.php
     */
    public function beginIteration()
    {
    }

    /**
     * Get children
     *
     * @return RecursiveIterator A <code>RecursiveIterator</code>.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.callgetchildren.php
     */
    public function callGetChildren()
    {
    }

    /**
     * Has children
     *
     * @return bool <code>TRUE</code> if there are children, otherwise <code>FALSE</code>
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.callhaschildren.php
     */
    public function callHasChildren()
    {
    }

    /**
     * Get current element
     *
     * @return string Returns the current element prefixed and postfixed.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.current.php
     */
    public function current()
    {
    }

    /**
     * End children
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.endchildren.php
     */
    public function endChildren()
    {
    }

    /**
     * End iteration
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.enditeration.php
     */
    public function endIteration()
    {
    }

    /**
     * Get current entry
     *
     * @return string Returns the part of the tree built for the current element.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.getentry.php
     */
    public function getEntry()
    {
    }

    /**
     * Get the postfix
     *
     * @return string Returns the string to place after the current element.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.getpostfix.php
     */
    public function getPostfix()
    {
    }

    /**
     * Get the prefix
     *
     * @return string Returns the string to place in front of current element
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.getprefix.php
     */
    public function getPrefix()
    {
    }

    /**
     * Get the key of the current element
     *
     * @return string Returns the current key prefixed and postfixed.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.key.php
     */
    public function key()
    {
    }

    /**
     * Move to next element
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.next.php
     */
    public function next()
    {
    }

    /**
     * Next element
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.nextelement.php
     */
    public function nextElement()
    {
    }

    /**
     * Rewind iterator
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * Set postfix
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.5.3, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.setpostfix.php
     */
    public function setPostfix()
    {
    }

    /**
     * Set a part of the prefix
     *
     * @param int $part One of the RecursiveTreeIterator::PREFIX_* constants.
     * @param string $value The value to assign to the part of the prefix specified in <code>part</code>.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.setprefixpart.php
     */
    public function setPrefixPart($part, $value)
    {
    }

    /**
     * Check validity
     *
     * @return bool <code>TRUE</code> if the current position is valid, otherwise <code>FALSE</code>
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/recursivetreeiterator.valid.php
     */
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
     * Return all matches for the current entry
     * (see <code>preg_match_all</code>).
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.regexiterator.php#regexiterator.constants
     */
    const ALL_MATCHES = 2;

    /**
     * Return the first match for the current entry
     * (see <code>preg_match</code>).
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.regexiterator.php#regexiterator.constants
     */
    const GET_MATCH = 1;

    /**
     * @var int
     */
    const INVERT_MATCH = 2;

    /**
     * Only execute match (filter) for the current entry
     * (see <code>preg_match</code>).
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.regexiterator.php#regexiterator.constants
     */
    const MATCH = 0;

    /**
     * Replace the current entry
     * (see <code>preg_replace</code>; Not fully implemented yet)
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.regexiterator.php#regexiterator.constants
     */
    const REPLACE = 4;

    /**
     * Returns the split values for the current entry (see <code>preg_split</code>).
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.regexiterator.php#regexiterator.constants
     */
    const SPLIT = 3;

    /**
     * Special flag: Match the entry key instead of the entry value.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.regexiterator.php#regexiterator.constants
     */
    const USE_KEY = 1;

    /**
     * @var mixed
     */
    public $replacement;

    /**
     * Create a new RegexIterator
     *
     * @param Iterator $iterator The iterator to apply this regex filter to.
     * @param string $regex The regular expression to match.
     * @param int|null $mode Operation mode, see <code>RegexIterator::setMode</code> for a list
     * of modes.
     * @param int|null $flags Special flags, see <code>RegexIterator::setFlags</code> for a list
     * of available flags.
     * @param int|null $preg_flags The regular expression flags. These flags depend on the operation mode parameter:
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/regexiterator.construct.php
     */
    public function __construct(Iterator $iterator, $regex, $mode = self::MATCH, $flags = 0, $preg_flags = 0)
    {
    }

    /**
     * Get accept status
     *
     * @return bool <code>TRUE</code> if a match, <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/regexiterator.accept.php
     */
    public function accept()
    {
    }

    /**
     * Get flags
     *
     * @return int Returns the set flags.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/regexiterator.getflags.php
     */
    public function getFlags()
    {
    }

    /**
     * Returns operation mode
     *
     * @return int Returns the operation mode.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/regexiterator.getmode.php
     */
    public function getMode()
    {
    }

    /**
     * Returns the regular expression flags
     *
     * @return int Returns a bitmask of the regular expression flags.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/regexiterator.getpregflags.php
     */
    public function getPregFlags()
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
    public function getRegex()
    {
    }

    /**
     * Sets the flags
     *
     * @param int $flags The flags to set, a bitmask of class constants.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/regexiterator.setflags.php
     */
    public function setFlags($flags)
    {
    }

    /**
     * Sets the operation mode
     *
     * @param int $mode The operation mode.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/regexiterator.setmode.php
     */
    public function setMode($mode)
    {
    }

    /**
     * Sets the regular expression flags
     *
     * @param int $preg_flags The regular expression flags. See <code>RegexIterator::__construct</code>
     * for an overview of available flags.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/regexiterator.setpregflags.php
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
     * @param mixed $index The index where the new value is to be inserted.
     * @param mixed $newval The new value for the <code>index</code>.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.add.php
     */
    public function add($index, $newval)
    {
    }

    /**
     * Peeks at the node from the beginning of the doubly linked list
     *
     * @return mixed The value of the first node.
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
     * @return int Returns the number of elements in the doubly linked list.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.count.php
     */
    public function count()
    {
    }

    /**
     * Return current array entry
     *
     * @return mixed The current node value.
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
     * @return int Returns the different modes and flags that affect the iteration.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.getiteratormode.php
     */
    public function getIteratorMode()
    {
    }

    /**
     * Checks whether the doubly linked list is empty
     *
     * @return bool Returns whether the doubly linked list is empty.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.isempty.php
     */
    public function isEmpty()
    {
    }

    /**
     * Return current node index
     *
     * @return mixed The current node index.
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
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.next.php
     */
    public function next()
    {
    }

    /**
     * Returns whether the requested $index exists
     *
     * @param mixed $index The index being checked.
     *
     * @return bool <code>TRUE</code> if the requested <code>index</code> exists, otherwise <code>FALSE</code>
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.offsetexists.php
     */
    public function offsetExists($index)
    {
    }

    /**
     * Returns the value at the specified $index
     *
     * @param mixed $index The index with the value.
     *
     * @return mixed The value at the specified <code>index</code>.
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
     * @param mixed $index The index being set.
     * @param mixed $newval The new value for the <code>index</code>.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.offsetset.php
     */
    public function offsetSet($index, $newval)
    {
    }

    /**
     * Unsets the value at the specified $index
     *
     * @param mixed $index The index being unset.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.offsetunset.php
     */
    public function offsetUnset($index)
    {
    }

    /**
     * Pops a node from the end of the doubly linked list
     *
     * @return mixed The value of the popped node.
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
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.prev.php
     */
    public function prev()
    {
    }

    /**
     * Pushes an element at the end of the doubly linked list
     *
     * @param mixed $value The value to push.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.push.php
     */
    public function push($value)
    {
    }

    /**
     * Rewind iterator back to the start
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * Serializes the storage
     *
     * @return string The serialized string.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.serialize.php
     */
    public function serialize()
    {
    }

    /**
     * Sets the mode of iteration
     *
     * @param int $mode There are two orthogonal sets of modes that can be set:
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.setiteratormode.php
     */
    public function setIteratorMode($mode)
    {
    }

    /**
     * Shifts a node from the beginning of the doubly linked list
     *
     * @return mixed The value of the shifted node.
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
     * @return mixed The value of the last node.
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
     * @param string $serialized The serialized string.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.unserialize.php
     */
    public function unserialize($serialized)
    {
    }

    /**
     * Prepends the doubly linked list with an element
     *
     * @param mixed $value The value to unshift.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.unshift.php
     */
    public function unshift($value)
    {
    }

    /**
     * Check whether the doubly linked list contains more nodes
     *
     * @return bool Returns <code>TRUE</code> if the doubly linked list contains any more nodes, <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/spldoublylinkedlist.valid.php
     */
    public function valid()
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
     * @return void Returns the path to the file.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.tostring.php
     */
    public function __toString()
    {
    }

    final public function _bad_state_ex()
    {
    }

    /**
     * Gets last access time of the file
     *
     * @return int Returns the time the file was last accessed.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getatime.php
     */
    public function getATime()
    {
    }

    /**
     * Gets the base name of the file
     *
     * @param string $suffix Optional suffix to omit from the base name returned.
     *
     * @return string Returns the base name without path information.
     *
     * @since PHP 5 >= 5.2.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getbasename.php
     */
    public function getBasename($suffix = null)
    {
    }

    /**
     * Gets the inode change time
     *
     * @return int The last change time, in a Unix timestamp.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getctime.php
     */
    public function getCTime()
    {
    }

    /**
     * Gets the file extension
     *
     * @return string Returns a <code>string</code> containing the file extension, or an
     * empty <code>string</code> if the file has no extension.
     *
     * @since PHP 5 >= 5.3.6, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getextension.php
     */
    public function getExtension()
    {
    }

    /**
     * Gets an SplFileInfo object for the file
     *
     * @param string $class_name Name of an <code>SplFileInfo</code> derived class to use.
     *
     * @return SplFileInfo An <code>SplFileInfo</code> object created for the file.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getfileinfo.php
     */
    public function getFileInfo($class_name = null)
    {
    }

    /**
     * Gets the filename
     *
     * @return string The filename.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getfilename.php
     */
    public function getFilename()
    {
    }

    /**
     * Gets the file group
     *
     * @return int The group id in numerical format.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getgroup.php
     */
    public function getGroup()
    {
    }

    /**
     * Gets the inode for the file
     *
     * @return int Returns the inode number for the filesystem object.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getinode.php
     */
    public function getInode()
    {
    }

    /**
     * Gets the target of a link
     *
     * @return string Returns the target of the filesystem link.
     *
     * @since PHP 5 >= 5.2.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getlinktarget.php
     */
    public function getLinkTarget()
    {
    }

    /**
     * Gets the last modified time
     *
     * @return int Returns the last modified time for the file, in a Unix timestamp.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getmtime.php
     */
    public function getMTime()
    {
    }

    /**
     * Gets the owner of the file
     *
     * @return int The owner id in numerical format.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getowner.php
     */
    public function getOwner()
    {
    }

    /**
     * Gets the path without filename
     *
     * @return string Returns the path to the file.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getpath.php
     */
    public function getPath()
    {
    }

    /**
     * Gets an SplFileInfo object for the path
     *
     * @param string $class_name Name of an <code>SplFileInfo</code> derived class to use.
     *
     * @return SplFileInfo Returns an <code>SplFileInfo</code> object for the parent path of the file.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getpathinfo.php
     */
    public function getPathInfo($class_name = null)
    {
    }

    /**
     * Gets the path to the file
     *
     * @return string The path to the file.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getpathname.php
     */
    public function getPathname()
    {
    }

    /**
     * Gets file permissions
     *
     * @return int Returns the file permissions.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getperms.php
     */
    public function getPerms()
    {
    }

    /**
     * Gets absolute path to file
     *
     * @return string Returns the path to the file, or <code>FALSE</code> if the file does not exist.
     *
     * @since PHP 5 >= 5.2.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getrealpath.php
     */
    public function getRealPath()
    {
    }

    /**
     * Gets file size
     *
     * @return int The filesize in bytes.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.getsize.php
     */
    public function getSize()
    {
    }

    /**
     * Gets file type
     *
     * @return string A <code>string</code> representing the type of the entry.
     * May be one of <code>file</code>, <code>link</code>,
     * or <code>dir</code>
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.gettype.php
     */
    public function getType()
    {
    }

    /**
     * Tells if the file is a directory
     *
     * @return bool Returns <code>TRUE</code> if a directory, <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.isdir.php
     */
    public function isDir()
    {
    }

    /**
     * Tells if the file is executable
     *
     * @return bool Returns <code>TRUE</code> if executable, <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.isexecutable.php
     */
    public function isExecutable()
    {
    }

    /**
     * Tells if the object references a regular file
     *
     * @return bool Returns <code>TRUE</code> if the file exists and is a regular file (not a link), <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.isfile.php
     */
    public function isFile()
    {
    }

    /**
     * Tells if the file is a link
     *
     * @return bool Returns <code>TRUE</code> if the file is a link, <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.islink.php
     */
    public function isLink()
    {
    }

    /**
     * Tells if file is readable
     *
     * @return bool Returns <code>TRUE</code> if readable, <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.isreadable.php
     */
    public function isReadable()
    {
    }

    /**
     * Tells if the entry is writable
     *
     * @return bool Returns <code>TRUE</code> if writable, <code>FALSE</code> otherwise;
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.iswritable.php
     */
    public function isWritable()
    {
    }

    /**
     * Gets an SplFileObject object for the file
     *
     * @param string|null $open_mode The mode for opening the file. See the <code>fopen</code>
     * documentation for descriptions of possible modes. The default
     * is read only.
     * @param bool|null $use_include_path When set to <code>TRUE</code>, the filename is also
     * searched for within the include_path
     * @param resource|null $context Refer to the context
     * section of the manual for a description of <code>contexts</code>.
     *
     * @return SplFileObject The opened file as an <code>SplFileObject</code> <code>object</code>.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.openfile.php
     */
    public function openFile($open_mode = "r", $use_include_path = false, $context = null)
    {
    }

    /**
     * Sets the class used with <code>SplFileInfo::openFile</code>
     *
     * @param string|null $class_name The class name to use when <code>SplFileInfo::openFile</code>
     * is called.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.setfileclass.php
     */
    public function setFileClass($class_name = "SplFileObject")
    {
    }

    /**
     * Sets the class used with <code>SplFileInfo::getFileInfo</code> and <code>SplFileInfo::getPathInfo</code>
     *
     * @param string|null $class_name The class name to use when
     * <code>SplFileInfo::getFileInfo</code> and
     * <code>SplFileInfo::getPathInfo</code> are called.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileinfo.setinfoclass.php
     */
    public function setInfoClass($class_name = "SplFileInfo")
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
     * Drop newlines at the end of a line.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.splfileobject.php#splfileobject.constants
     */
    const DROP_NEW_LINE = 1;

    /**
     * Read on rewind/next.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.splfileobject.php#splfileobject.constants
     */
    const READ_AHEAD = 2;

    /**
     * Read lines as CSV rows.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.splfileobject.php#splfileobject.constants
     */
    const READ_CSV = 8;

    /**
     * Skips empty lines in the file. This requires the <code>READ_AHEAD</code> flag be enabled, to work as expected.
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.splfileobject.php#splfileobject.constants
     */
    const SKIP_EMPTY = 4;

    /**
     * Construct a new file object
     *
     * @param string $filename The file to read.
     * @param string|null $open_mode The mode in which to open the file. See <code>fopen</code> for a list of allowed modes.
     * @param bool|null $use_include_path Whether to search in the include_path for <code>filename</code>.
     * @param resource $context A valid context resource created with <code>stream_context_create</code>.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.construct.php
     */
    public function __construct($filename, $open_mode = "r", $use_include_path = false, $context = null)
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
    public function __toString()
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
     * @return bool Returns <code>TRUE</code> if file is at EOF, <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.eof.php
     */
    public function eof()
    {
    }

    /**
     * Flushes the output to the file
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fflush.php
     */
    public function fflush()
    {
    }

    /**
     * Gets character from file
     *
     * @return string Returns a string containing a single character read from the file or <code>FALSE</code> on EOF.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fgetc.php
     */
    public function fgetc()
    {
    }

    /**
     * Gets line from file and parse as CSV fields
     *
     * @param string|null $delimiter The field delimiter (one character only). Defaults as a comma or the value set using <code>SplFileObject::setCsvControl</code>.
     * @param string|null $enclosure The field enclosure character (one character only). Defaults as a double quotation mark or the value set using <code>SplFileObject::setCsvControl</code>.
     * @param string|null $escape The escape character (one character only). Defaults as a backslash (<code>\</code>) or the value set using <code>SplFileObject::setCsvControl</code>.
     *
     * @return array Returns an indexed array containing the fields read, or <code>FALSE</code> on error.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fgetcsv.php
     */
    public function fgetcsv($delimiter = ",", $enclosure = "\"", $escape = "\\")
    {
    }

    /**
     * Gets line from file
     *
     * @return string Returns a string containing the next line from the file, or <code>FALSE</code> on error.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fgets.php
     */
    public function fgets()
    {
    }

    /**
     * Gets line from file and strip HTML tags
     *
     * @param string $allowable_tags Optional parameter to specify tags which should not be stripped.
     *
     * @return string Returns a string containing the next line of the file with HTML and PHP
     * code stripped, or <code>FALSE</code> on error.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fgetss.php
     */
    public function fgetss($allowable_tags = null)
    {
    }

    /**
     * Portable file locking
     *
     * @param int $operation <code>operation</code> is one of the following:
     * <ul>
     * <code>LOCK_SH</code> to acquire a shared lock (reader).
     * <code>LOCK_EX</code> to acquire an exclusive lock (writer).
     * <code>LOCK_UN</code> to release a lock (shared or exclusive).
     * <code>LOCK_NB</code> to not block while locking.
     * </ul>
     * @param int $wouldblock Set to <code>TRUE</code> if the lock would block (EWOULDBLOCK errno condition).
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.flock.php
     */
    public function flock($operation, &$wouldblock = null)
    {
    }

    /**
     * Output all remaining data on a file pointer
     *
     * @return int Returns the number of characters read from <code>handle</code>
     * and passed through to the output.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fpassthru.php
     */
    public function fpassthru()
    {
    }

    /**
     * Write a field array as a CSV line
     *
     * @param array $fields An array of values.
     * @param string|null $delimiter The optional <code>delimiter</code> parameter sets the field
     * delimiter (one character only).
     * @param string|null $enclosure The optional <code>enclosure</code> parameter sets the field
     * enclosure (one character only).
     * @param string|null $escape The optional <code>escape</code> parameter sets the
     * escape character (one character only).
     *
     * @return int Returns the length of the written string or <code>FALSE</code> on failure.
     * Returns <code>FALSE</code>, and does not write the CSV line to the file, if the
     * <code>delimiter</code> or <code>enclosure</code>
     * parameter is not a single character.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fputcsv.php
     */
    public function fputcsv(array $fields, $delimiter = ",", $enclosure = '"', $escape = "\\")
    {
    }

    /**
     * Read from file
     *
     * @param int $length The number of bytes to read.
     *
     * @return string Returns the string read from the file or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.5.11, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fread.php
     */
    public function fread($length)
    {
    }

    /**
     * Parses input from file according to a format
     *
     * @param string $format The specified format as described in the <code>sprintf</code> documentation.
     * @param mixed $vars The optional assigned values.
     *
     * @return mixed If only one parameter is passed to this method, the values parsed will be
     * returned as an array. Otherwise, if optional parameters are passed, the
     * function will return the number of assigned values. The optional
     * parameters must be passed by reference.
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
     * @param int $offset The offset. A negative value can be used to move backwards through the file which
     * is useful when SEEK_END is used as the <code>whence</code> value.
     * @param int|null $whence <code>whence</code> values are:
     * <ul>
     * <li><code>SEEK_SET</code> - Set position equal to <code>offset</code> bytes.</li>
     * <li><code>SEEK_CUR</code> - Set position to current location plus <code>offset</code>.</li>
     * <li><code>SEEK_END</code> - Set position to end-of-file plus <code>offset</code>.</li>
     * </ul>
     *
     * @return int Returns 0 if the seek was successful, -1 otherwise. Note that seeking
     * past EOF is not considered an error.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fseek.php
     */
    public function fseek($offset, $whence = SEEK_SET)
    {
    }

    /**
     * Gets information about the file
     *
     * @return array Returns an array with the statistics of the file; the format of the array
     * is described in detail on the <code>stat</code> manual page.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fstat.php
     */
    public function fstat()
    {
    }

    /**
     * Return current file position
     *
     * @return int Returns the position of the file pointer as an integer, or <code>FALSE</code> on error.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.ftell.php
     */
    public function ftell()
    {
    }

    /**
     * Truncates the file to a given length
     *
     * @param int $size The size to truncate to.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.ftruncate.php
     */
    public function ftruncate($size)
    {
    }

    /**
     * Write to file
     *
     * @param string $str The string to be written to the file.
     * @param int $length If the <code>length</code> argument is given, writing will
     * stop after <code>length</code> bytes have been written or
     * the end of <code>string</code> is reached, whichever comes
     * first.
     *
     * @return int Returns the number of bytes written, or 0 on error.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.fwrite.php
     */
    public function fwrite($str, $length = null)
    {
    }

    /**
     * No purpose
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.getchildren.php
     */
    public function getChildren()
    {
    }

    /**
     * Get the delimiter, enclosure and escape character for CSV
     *
     * @return array Returns an indexed array containing the delimiter, enclosure and escape character.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.getcsvcontrol.php
     */
    public function getCsvControl()
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
     * @return int Returns an <code>integer</code> representing the flags.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.getflags.php
     */
    public function getFlags()
    {
    }

    /**
     * Get maximum line length
     *
     * @return int Returns the maximum line length if one has been set with
     * <code>SplFileObject::setMaxLineLen</code>, default is <code>0</code>.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.getmaxlinelen.php
     */
    public function getMaxLineLen()
    {
    }

    /**
     * SplFileObject does not have children
     *
     * @return bool Returns <code>FALSE</code>
     *
     * @since PHP 5 >= 5.1.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.haschildren.php
     */
    public function hasChildren()
    {
    }

    /**
     * Get line number
     *
     * @return int Returns the current line number.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.key.php
     */
    public function key()
    {
    }

    /**
     * Read next line
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.next.php
     */
    public function next()
    {
    }

    /**
     * Rewind the file to the first line
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * Seek to specified line
     *
     * @param int $line_pos The zero-based line number to seek to.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.seek.php
     */
    public function seek($line_pos)
    {
    }

    /**
     * Set the delimiter, enclosure and escape character for CSV
     *
     * @param string|null $delimiter The field delimiter (one character only).
     * @param string|null $enclosure The field enclosure character (one character only).
     * @param string|null $escape The field escape character (one character only).
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.2.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.setcsvcontrol.php
     */
    public function setCsvControl($delimiter = ",", $enclosure = "\"", $escape = "\\")
    {
    }

    /**
     * Sets flags for the SplFileObject
     *
     * @param int $flags Bit mask of the flags to set. See
     * SplFileObject constants
     * for the available flags.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.setflags.php
     */
    public function setFlags($flags)
    {
    }

    /**
     * Set maximum line length
     *
     * @param int $max_len The maximum length of a line.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.setmaxlinelen.php
     */
    public function setMaxLineLen($max_len)
    {
    }

    /**
     * Not at EOF
     *
     * @return bool Returns <code>TRUE</code> if not reached EOF, <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfileobject.valid.php
     */
    public function valid()
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
     * @param int|null $size The size of the fixed array.
     * This expects a number between <code>0</code> and <code>PHP_INT_MAX</code>.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.construct.php
     */
    public function __construct($size = 0)
    {
    }

    /**
     * Reinitialises the array after being unserialised
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.5.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.wakeup.php
     */
    public function __wakeup()
    {
    }

    /**
     * Returns the size of the array
     *
     * @return int Returns the size of the array.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.count.php
     */
    public function count()
    {
    }

    /**
     * Return current array entry
     *
     * @return mixed The current element value.
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
     * @param array $array The array to import.
     * @param bool|null $save_indexes Try to save the numeric indexes used in the original array.
     *
     * @return SplFixedArray Returns an instance of <code>SplFixedArray</code>
     * containing the array content.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.fromarray.php
     */
    public static function fromArray(array $array, $save_indexes = true)
    {
    }

    /**
     * Gets the size of the array
     *
     * @return int Returns the size of the array, as an <code>integer</code>.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.getsize.php
     */
    public function getSize()
    {
    }

    /**
     * Return current array index
     *
     * @return int The current array index.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.key.php
     */
    public function key()
    {
    }

    /**
     * Move to next entry
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.next.php
     */
    public function next()
    {
    }

    /**
     * Returns whether the requested index exists
     *
     * @param int $index The index being checked.
     *
     * @return bool <code>TRUE</code> if the requested <code>index</code> exists, otherwise <code>FALSE</code>
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.offsetexists.php
     */
    public function offsetExists($index)
    {
    }

    /**
     * Returns the value at the specified index
     *
     * @param int $index The index with the value.
     *
     * @return mixed The value at the specified <code>index</code>.
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
     * @param int $index The index being set.
     * @param mixed $newval The new value for the <code>index</code>.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.offsetset.php
     */
    public function offsetSet($index, $newval)
    {
    }

    /**
     * Unsets the value at the specified $index
     *
     * @param int $index The index being unset.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.offsetunset.php
     */
    public function offsetUnset($index)
    {
    }

    /**
     * Rewind iterator back to the start
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * Change the size of an array
     *
     * @param int $size The new array size. This should be a value between <code>0</code> and <code>PHP_INT_MAX</code>.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.setsize.php
     */
    public function setSize($size)
    {
    }

    /**
     * Returns a PHP array from the fixed array
     *
     * @return array Returns a PHP <code>array</code>, similar to the fixed array.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.toarray.php
     */
    public function toArray()
    {
    }

    /**
     * Check whether the array contains more elements
     *
     * @return bool Returns <code>TRUE</code> if the array contains any more elements, <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splfixedarray.valid.php
     */
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
    /**
     * Compare elements in order to place them correctly in the heap while sifting up
     *
     * @return int Result of the comparison, positive integer if <code>value1</code> is greater than <code>value2</code>, 0 if they are equal, negative integer otherwise.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splheap.compare.php
     */
    abstract protected function compare();

    /**
     * Counts the number of elements in the heap
     *
     * @return int Returns the number of elements in the heap.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splheap.count.php
     */
    public function count()
    {
    }

    /**
     * Return current node pointed by the iterator
     *
     * @return mixed The current node value.
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
     * @return mixed The value of the extracted node.
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
     * @param mixed $value The value to insert.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splheap.insert.php
     */
    public function insert($value)
    {
    }

    /**
     * Checks whether the heap is empty
     *
     * @return bool Returns whether the heap is empty.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splheap.isempty.php
     */
    public function isEmpty()
    {
    }

    /**
     * Return current node index
     *
     * @return mixed The current node index.
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
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splheap.next.php
     */
    public function next()
    {
    }

    /**
     * Recover from the corrupted state and allow further actions on the heap
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splheap.recoverfromcorruption.php
     */
    public function recoverFromCorruption()
    {
    }

    /**
     * Rewind iterator back to the start (no-op)
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splheap.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * Peeks at the node from the top of the heap
     *
     * @return mixed The value of the node on the top.
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
     * @return bool Returns <code>TRUE</code> if the heap contains any more nodes, <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splheap.valid.php
     */
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
     * Compare elements in order to place them correctly in the heap while sifting up
     *
     * @param mixed $value1 The value of the first node being compared.
     * @param mixed $value2 The value of the second node being compared.
     *
     * @return int Result of the comparison, positive integer if <code>value1</code> is greater than <code>value2</code>, 0 if they are equal, negative integer otherwise.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splmaxheap.compare.php
     */
    protected function compare($value1, $value2)
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
     * @param mixed $value1 The value of the first node being compared.
     * @param mixed $value2 The value of the second node being compared.
     *
     * @return int Result of the comparison, positive integer if <code>value1</code> is lower than <code>value2</code>, 0 if they are equal, negative integer otherwise.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splminheap.compare.php
     */
    protected function compare($value1, $value2)
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
     * @param SplObjectStorage $storage The storage you want to import.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.addall.php
     */
    public function addAll(SplObjectStorage $storage)
    {
    }

    /**
     * Adds an object in the storage
     *
     * @param mixed $object The <code>object</code> to add.
     * @param mixed|null $data The data to associate with the <code>object</code>.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.attach.php
     */
    public function attach($object, $data = null)
    {
    }

    /**
     * Checks if the storage contains a specific object
     *
     * @param mixed $object The <code>object</code> to look for.
     *
     * @return bool Returns <code>TRUE</code> if the <code>object</code> is in the storage, <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.contains.php
     */
    public function contains($object)
    {
    }

    /**
     * Returns the number of objects in the storage
     *
     * @return int The number of objects in the storage.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.count.php
     */
    public function count()
    {
    }

    /**
     * Returns the current storage entry
     *
     * @return mixed The <code>object</code> at the current iterator position.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.current.php
     */
    public function current()
    {
    }

    /**
     * Removes an <code>object</code> from the storage
     *
     * @param mixed $object The <code>object</code> to remove.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.detach.php
     */
    public function detach($object)
    {
    }

    /**
     * Calculate a unique identifier for the contained objects
     *
     * @param mixed $object The object whose identifier is to be calculated.
     *
     * @return string A <code>string</code> with the calculated identifier.
     *
     * @since PHP 5 >= 5.4.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.gethash.php
     */
    public function getHash($object)
    {
    }

    /**
     * Returns the data associated with the current iterator entry
     *
     * @return mixed The data associated with the current iterator position.
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
     * @return int The index corresponding to the position of the iterator.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.key.php
     */
    public function key()
    {
    }

    /**
     * Move to the next entry
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.next.php
     */
    public function next()
    {
    }

    /**
     * Checks whether an object exists in the storage
     *
     * @param mixed $object The <code>object</code> to look for.
     *
     * @return bool Returns <code>TRUE</code> if the <code>object</code> exists in the storage,
     * and <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.offsetexists.php
     */
    public function offsetExists($object)
    {
    }

    /**
     * Returns the data associated with an <code>object</code>
     *
     * @param mixed $object The <code>object</code> to look for.
     *
     * @return mixed The data previously associated with the <code>object</code> in the storage.
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
     * @param mixed $object The <code>object</code> to associate data with.
     * @param mixed|null $data The data to associate with the <code>object</code>.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.offsetset.php
     */
    public function offsetSet($object, $data = null)
    {
    }

    /**
     * Removes an object from the storage
     *
     * @param mixed $object The <code>object</code> to remove.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.offsetunset.php
     */
    public function offsetUnset($object)
    {
    }

    /**
     * Removes objects contained in another storage from the current storage
     *
     * @param SplObjectStorage $storage The storage containing the elements to remove.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.removeall.php
     */
    public function removeAll(SplObjectStorage $storage)
    {
    }

    /**
     * Removes all objects except for those contained in another storage from the current storage
     *
     * @param SplObjectStorage $storage The storage containing the elements to retain in the current storage.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.6, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.removeallexcept.php
     */
    public function removeAllExcept(SplObjectStorage $storage)
    {
    }

    /**
     * Rewind the iterator to the first storage element
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * Serializes the storage
     *
     * @return string A string representing the storage.
     *
     * @since PHP 5 >= 5.2.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.serialize.php
     */
    public function serialize()
    {
    }

    /**
     * Sets the data associated with the current iterator entry
     *
     * @param mixed $data The data to associate with the current iterator entry.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.setinfo.php
     */
    public function setInfo($data)
    {
    }

    /**
     * Unserializes a storage from its string representation
     *
     * @param string $serialized The serialized representation of a storage.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.2.2, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.unserialize.php
     */
    public function unserialize($serialized)
    {
    }

    /**
     * Returns if the current iterator entry is valid
     *
     * @return bool Returns <code>TRUE</code> if the iterator entry is valid, <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.1.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splobjectstorage.valid.php
     */
    public function valid()
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
     * @param mixed $priority1 The priority of the first node being compared.
     * @param mixed $priority2 The priority of the second node being compared.
     *
     * @return int Result of the comparison, positive integer if <code>priority1</code> is greater than <code>priority2</code>, 0 if they are equal, negative integer otherwise.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.compare.php
     */
    public function compare($priority1, $priority2)
    {
    }

    /**
     * Counts the number of elements in the queue
     *
     * @return int Returns the number of elements in the queue.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.count.php
     */
    public function count()
    {
    }

    /**
     * Return current node pointed by the iterator
     *
     * @return mixed The value or priority (or both) of the current node, depending on the extract flag.
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
     * @return mixed The value or priority (or both) of the extracted node, depending on the extract flag.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.extract.php
     */
    public function extract()
    {
    }

    /**
     * Inserts an element in the queue by sifting it up
     *
     * @param mixed $value The value to insert.
     * @param mixed $priority The associated priority.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.insert.php
     */
    public function insert($value, $priority)
    {
    }

    /**
     * Checks whether the queue is empty
     *
     * @return bool Returns whether the queue is empty.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.isempty.php
     */
    public function isEmpty()
    {
    }

    /**
     * Return current node index
     *
     * @return mixed The current node index.
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
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.next.php
     */
    public function next()
    {
    }

    /**
     * Recover from the corrupted state and allow further actions on the queue
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.recoverfromcorruption.php
     */
    public function recoverFromCorruption()
    {
    }

    /**
     * Rewind iterator back to the start (no-op)
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * Sets the mode of extraction
     *
     * @param int $flags Defines what is extracted by <code>SplPriorityQueue::current</code>,
     * <code>SplPriorityQueue::top</code> and
     * <code>SplPriorityQueue::extract</code>.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.setextractflags.php
     */
    public function setExtractFlags($flags)
    {
    }

    /**
     * Peeks at the node from the top of the queue
     *
     * @return mixed The value or priority (or both) of the top node, depending on the extract flag.
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
     * @return bool Returns <code>TRUE</code> if the queue contains any more nodes, <code>FALSE</code> otherwise.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splpriorityqueue.valid.php
     */
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
    /**
     * Dequeues a node from the queue
     *
     * @return mixed The value of the dequeued node.
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
     * @param mixed $value The value to enqueue.
     *
     * @return void No value is returned.
     *
     * @since PHP 5 >= 5.3.0, PHP 7
     *
     * @link http://www.php.net/manual/en/splqueue.enqueue.php
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
     * Construct a new temporary file object
     *
     * @param mixed $max_memory
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
 * @param mixed $class An object (class instance) or a string (class or interface name).
 * @param bool|null $autoload Whether to allow this function to load the class automatically through
 * the <code>__autoload</code> magic method.
 *
 * @return array An array on success, or <code>FALSE</code> on error.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.class-implements.php
 */
function class_implements($class, $autoload = true)
{
}

/**
 * Return the parent classes of the given class
 *
 * @param mixed $class An object (class instance) or a string (class name).
 * @param bool|null $autoload Whether to allow this function to load the class automatically through
 * the <code>__autoload</code> magic method.
 *
 * @return array An array on success, or <code>FALSE</code> on error.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.class-parents.php
 */
function class_parents($class, $autoload = true)
{
}

/**
 * Return the traits used by the given class
 *
 * @param mixed $class An object (class instance) or a string (class name).
 * @param bool|null $autoload Whether to allow this function to load the class automatically through
 * the <code>__autoload</code> magic method.
 *
 * @return array An array on success, or <code>FALSE</code> on error.
 *
 * @since PHP 5 >= 5.4.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.class-uses.php
 */
function class_uses($class, $autoload = true)
{
}

/**
 * Call a function for every element in an iterator
 *
 * @param Traversable $iterator The class to iterate over.
 * @param callable $function The callback function to call on every element.
 * <blockquote>
 * The function must return <code>TRUE</code> in order to
 * continue iterating over the <code>iterator</code>.
 * </blockquote>
 * @param array|null $args Arguments to pass to the callback function.
 *
 * @return int Returns the iteration count.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iterator-apply.php
 */
function iterator_apply(Traversable $iterator, callable $function, array $args = null)
{
}

/**
 * Count the elements in an iterator
 *
 * @param Traversable $iterator The iterator being counted.
 *
 * @return int The number of elements in <code>iterator</code>.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iterator-count.php
 */
function iterator_count(Traversable $iterator)
{
}

/**
 * Copy the iterator into an array
 *
 * @param Traversable $iterator The iterator being copied.
 * @param bool|null $use_keys Whether to use the iterator element keys as index.
 *
 * @return array An <code>array</code> containing the elements of the <code>iterator</code>.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.iterator-to-array.php
 */
function iterator_to_array(Traversable $iterator, $use_keys = true)
{
}

/**
 * Default implementation for __autoload()
 *
 * @param string $class_name The lowercased name of the class (and namespace) being instantiated.
 * @param string|null $file_extensions By default it checks all include paths to
 * contain filenames built up by the lowercase class name appended by the
 * filename extensions .inc and .php.
 *
 * @return void No value is returned.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.spl-autoload.php
 */
function spl_autoload($class_name, $file_extensions = /* spl_autoload_extensions() */ null)
{
}

/**
 * Try all registered __autoload() functions to load the requested class
 *
 * @param string $class_name The class name being searched.
 *
 * @return void No value is returned.
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
 * @param string $file_extensions When calling without an argument, it simply returns the current list
 * of extensions each separated by comma. To modify the list of file
 * extensions, simply invoke the functions with the new list of file
 * extensions to use in a single string with each extensions separated
 * by comma.
 *
 * @return string A comma delimited list of default file extensions for
 * <code>spl_autoload</code>.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.spl-autoload-extensions.php
 */
function spl_autoload_extensions($file_extensions = null)
{
}

/**
 * Return all registered __autoload() functions
 *
 * @return array An <code>array</code> of all registered __autoload functions.
 * If the autoload queue is not activated then the return value is <code>FALSE</code>.
 * If no function is registered the return value will be an empty array.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.spl-autoload-functions.php
 */
function spl_autoload_functions()
{
}

/**
 * Register given function as __autoload() implementation
 *
 * @param callable $autoload_function The autoload function being registered.
 * If no parameter is provided, then the default implementation of
 * <code>spl_autoload</code> will be registered.
 * @param bool|null $throw This parameter specifies whether
 * <code>spl_autoload_register</code> should throw
 * exceptions when the <code>autoload_function</code>
 * cannot be registered.
 * @param bool|null $prepend If true, <code>spl_autoload_register</code> will prepend
 * the autoloader on the autoload queue instead of appending it.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.spl-autoload-register.php
 */
function spl_autoload_register(callable $autoload_function = null, $throw = true, $prepend = false)
{
}

/**
 * Unregister given function as __autoload() implementation
 *
 * @param mixed $autoload_function The autoload function being unregistered.
 *
 * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
 *
 * @since PHP 5 >= 5.1.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.spl-autoload-unregister.php
 */
function spl_autoload_unregister($autoload_function)
{
}

/**
 * Return available SPL classes
 *
 * @return array Returns an <code>array</code> containing the currently available SPL classes.
 *
 * @since PHP 5, PHP 7
 *
 * @link http://www.php.net/manual/en/function.spl-classes.php
 */
function spl_classes()
{
}

/**
 * Return hash id for given object
 *
 * @param mixed $obj
 *
 * @return string A string that is unique for each currently existing object and is always
 * the same for each object.
 *
 * @since PHP 5 >= 5.2.0, PHP 7
 *
 * @link http://www.php.net/manual/en/function.spl-object-hash.php
 */
function spl_object_hash($obj)
{
}
