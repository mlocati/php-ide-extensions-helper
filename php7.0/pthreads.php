<?php
// Start of extension: pthreads
// - parsed on POSIX with PHP 7.0.28 (extension version 3.1.6)

/**
 * Allow new Threads to send headers to standard output (normally prohibited)
 *
 * @link http://www.php.net/manual/en/pthreads.constants.php#constant.pthreads-allow-headers
 *
 * @var int
 */
const PTHREADS_ALLOW_HEADERS = 268435456;

/**
 * The default options for all Threads, causes pthreads to copy the environment when new Threads are started
 *
 * @link http://www.php.net/manual/en/pthreads.constants.php#constant.pthreads-inherit-all
 *
 * @var int
 */
const PTHREADS_INHERIT_ALL = 1118481;

/**
 * Inherit user declared classes when new Threads are started
 *
 * @link http://www.php.net/manual/en/pthreads.constants.php#constant.pthreads-inherit-classes
 *
 * @var int
 */
const PTHREADS_INHERIT_CLASSES = 4096;

/**
 * Inherit all comments when new Threads are started
 *
 * @link http://www.php.net/manual/en/pthreads.constants.php#constant.pthreads-inherit-comments
 *
 * @var int
 */
const PTHREADS_INHERIT_COMMENTS = 1048576;

/**
 * Inherit user declared constants when new Threads are started
 *
 * @link http://www.php.net/manual/en/pthreads.constants.php#constant.pthreads-inherit-constants
 *
 * @var int
 */
const PTHREADS_INHERIT_CONSTANTS = 16;

/**
 * Inherit user declared functions when new Threads are started
 *
 * @link http://www.php.net/manual/en/pthreads.constants.php#constant.pthreads-inherit-functions
 *
 * @var int
 */
const PTHREADS_INHERIT_FUNCTIONS = 256;

/**
 * Inherit included file information when new Threads are started
 *
 * @link http://www.php.net/manual/en/pthreads.constants.php#constant.pthreads-inherit-includes
 *
 * @var int
 */
const PTHREADS_INHERIT_INCLUDES = 65536;

/**
 * Inherit INI entries when new Threads are started
 *
 * @link http://www.php.net/manual/en/pthreads.constants.php#constant.pthreads-inherit-ini
 *
 * @var int
 */
const PTHREADS_INHERIT_INI = 1;

/**
 * Do not inherit anything when new Threads are started
 *
 * @link http://www.php.net/manual/en/pthreads.constants.php#constant.pthreads-inherit-none
 *
 * @var int
 */
const PTHREADS_INHERIT_NONE = 0;

/**
 * Represents a garbage-collectable object.
 *
 * @since PECL pthreads >= 2.0.8
 *
 * @link http://www.php.net/manual/en/class.collectable.php
 */
interface Collectable
{
    /**
     * @return bool
     */
    public function isGarbage(): bool;
}

/**
 * A Pool is a container for, and controller of, an adjustable number of Workers.
 *
 * @since PECL pthreads >= 2.0.0
 *
 * @link http://www.php.net/manual/en/class.pool.php
 */
class Pool
{
    /**
     * int $size
     * string|null $class
     * array[]|null $ctor
     */
    public function __construct(int $size, string $class = null, $ctor = null)
    {
    }

    /**
     * Closure $collector
     */
    public function collect($collector)
    {
    }

    /**
     * int $size
     */
    public function resize(int $size)
    {
    }

    public function shutdown()
    {
    }

    /**
     * Threaded $task
     */
    public function submit($task)
    {
    }

    /**
     * int $worker
     * Threaded $task
     */
    public function submitTo(int $worker, $task)
    {
    }
}

/**
 * When the start method of a Thread is invoked, the run method code will be executed in separate Thread, in parallel.
 *
 * @since PECL pthreads >= 2.0.0
 *
 * @link http://www.php.net/manual/en/class.thread.php
 */
class Thread extends Threaded
{
    public function getCreatorId()
    {
    }

    public static function getCurrentThread()
    {
    }

    public static function getCurrentThreadId()
    {
    }

    public function getThreadId()
    {
    }

    public function isJoined()
    {
    }

    public function isStarted()
    {
    }

    /**
     * Alias of <code>implode</code>
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.join.php
     */
    public function join()
    {
    }

    /**
     * int|null $options
     */
    public function start(int $options = null)
    {
    }
}

/**
 * Threaded objects form the basis of pthreads ability to execute user code in parallel; they expose synchronization methods and various useful interfaces.
 *
 * @since PECL pthreads >= 2.0.0
 *
 * @link http://www.php.net/manual/en/class.threaded.php
 */
class Threaded implements Collectable, Traversable
{
    public function addRef()
    {
    }

    /**
     * mixed $size
     * mixed|null $preserve
     */
    public function chunk($size, $preserve = null)
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

    public function delRef()
    {
    }

    /**
     * mixed $class
     */
    public static function extend($class)
    {
    }

    public function getRefCount()
    {
    }

    /**
     * @return bool
     */
    public function isGarbage(): bool
    {
    }

    public function isRunning()
    {
    }

    public function isTerminated()
    {
    }

    /**
     * mixed $from
     * mixed|null $overwrite
     */
    public function merge($from, $overwrite = null)
    {
    }

    public function notify()
    {
    }

    public function notifyOne()
    {
    }

    public function pop()
    {
    }

    public function run()
    {
    }

    public function shift()
    {
    }

    /**
     * mixed $function
     */
    public function synchronized($function)
    {
    }

    /**
     * int|null $timeout
     */
    public function wait(int $timeout = null)
    {
    }
}

/**
 * The <code>Volatile</code> class is new to pthreads v3. Its
 *     introduction is a consequence of the new immutability semantics of
 *     <code>Threaded</code> members of <code>Threaded</code>
 *     classes. The <code>Volatile</code> class enables for mutability
 *     of its <code>Threaded</code> members, and is also used to store
 *     PHP arrays in <code>Threaded</code> contexts.
 *
 * @since PECL pthreads >= 3.0.0
 *
 * @link http://www.php.net/manual/en/class.volatile.php
 */
class Volatile extends Threaded
{
}

/**
 * Worker Threads have a persistent context, as such should be used over Threads in most cases.
 *
 * @since PECL pthreads >= 2.0.0
 *
 * @link http://www.php.net/manual/en/class.worker.php
 */
class Worker extends Thread
{
    /**
     * Closure|null $function
     */
    public function collect($function = null)
    {
    }

    /**
     * Collectable $collectable
     */
    public function collector($collectable)
    {
    }

    public function getStacked()
    {
    }

    public function isShutdown()
    {
    }

    public function shutdown()
    {
    }

    /**
     * Threaded $work
     */
    public function stack($work)
    {
    }

    public function unstack()
    {
    }
}

/**
 * mixed $timeout
 */
function pthreads_no_sleeping($timeout)
{
}
