<?php
// Start of extension: pthreads
// - parsed on POSIX with PHP 5.6.34 (extension version 2.0.10)
// - parsed on Windows with PHP 5.6.34 (extension version 2.0.10)

/**
 * @var int
 */
const PTHREADS_ALLOW_GLOBALS = 16777216;

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
class Collectable extends Threaded
{
    public function isGarbage()
    {
    }

    public function setGarbage()
    {
    }
}

/**
 * The static methods contained in the Cond class provide direct access to Posix Condition Variables.
 *
 * @since PECL pthreads < 3.0.0
 *
 * @link http://www.php.net/manual/en/class.cond.php
 */
class Cond
{
    final public function __construct()
    {
    }

    /**
     * @param mixed $condition
     */
    final public static function broadcast($condition)
    {
    }

    final public static function create()
    {
    }

    /**
     * @param mixed $condition
     */
    final public static function destroy($condition)
    {
    }

    /**
     * @param mixed $condition
     */
    final public static function signal($condition)
    {
    }

    /**
     * @param mixed $condition
     * @param mixed $mutex
     * @param mixed|null $timeout
     */
    final public static function wait($condition, $mutex, $timeout = null)
    {
    }
}

/**
 * The static methods contained in the Mutex class provide direct access to Posix Mutex functionality.
 *
 * @since PECL pthreads < 3.0.0
 *
 * @link http://www.php.net/manual/en/class.mutex.php
 */
class Mutex
{
    final public function __construct()
    {
    }

    /**
     * @param mixed|null $lock
     */
    final public static function create($lock = null)
    {
    }

    /**
     * @param mixed $mutex
     */
    final public static function destroy($mutex)
    {
    }

    /**
     * @param mixed $mutex
     */
    final public static function lock($mutex)
    {
    }

    /**
     * @param mixed $mutex
     */
    final public static function trylock($mutex)
    {
    }

    /**
     * @param mixed $mutex
     * @param mixed|null $destroy
     */
    final public static function unlock($mutex, $destroy = null)
    {
    }
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
     * @param mixed $size
     * @param mixed|null $class
     * @param mixed|null $ctor
     */
    public function __construct($size, $class = null, $ctor = null)
    {
    }

    /**
     * @param mixed $collector
     */
    public function collect($collector)
    {
    }

    /**
     * @param mixed $size
     */
    public function resize($size)
    {
    }

    public function shutdown()
    {
    }

    /**
     * @param mixed $task
     */
    public function submit($task)
    {
    }

    /**
     * @param mixed $worker
     * @param mixed $task
     */
    public function submitTo($worker, $task)
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
    public function detach()
    {
    }

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

    /**
     * @param mixed $block
     * @param mixed|null $args
     */
    public static function globally($block, $args = null)
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

    public function kill()
    {
    }

    /**
     * @param mixed|null $options
     */
    public function start($options = null)
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
class Threaded implements Countable, Traversable
{
    /**
     * @param mixed $size
     * @param mixed|null $preserve
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
    public function count()
    {
    }

    /**
     * @param mixed $class
     */
    public static function extend($class)
    {
    }

    /**
     * @param Closure $run
     * @param Closure|null $construct
     * @param mixed|null $args
     */
    public static function from($run, $construct = null, $args = null)
    {
    }

    public function getTerminationInfo()
    {
    }

    public function isRunning()
    {
    }

    public function isTerminated()
    {
    }

    public function isWaiting()
    {
    }

    public function lock()
    {
    }

    /**
     * @param mixed $from
     * @param mixed|null $overwrite
     */
    public function merge($from, $overwrite = null)
    {
    }

    public function notify()
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
     * @param mixed $function
     */
    public function synchronized($function)
    {
    }

    public function unlock()
    {
    }

    /**
     * @param mixed|null $timeout
     */
    public function wait($timeout = null)
    {
    }
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
    public function getStacked()
    {
    }

    public function isShutdown()
    {
    }

    public function isWorking()
    {
    }

    public function shutdown()
    {
    }

    /**
     * @param mixed $work
     */
    public function stack(&$work)
    {
    }

    /**
     * @param mixed|null $work
     */
    public function unstack(&$work = null)
    {
    }
}
