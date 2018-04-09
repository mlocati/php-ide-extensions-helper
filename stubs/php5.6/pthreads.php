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
    /**
     * Determine whether an object has been marked as garbage
     *
     * @return bool
     *
     * @since PECL pthreads >= 2.0.8
     *
     * @link http://www.php.net/manual/en/collectable.isgarbage.php
     */
    public function isGarbage()
    {
    }

    /**
     * Mark an object as garbage
     *
     * @return void
     *
     * @since PECL pthreads < 3.0.0
     *
     * @link http://www.php.net/manual/en/collectable.setgarbage.php
     */
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
     * Broadcast a Condition
     *
     * @param mixed $condition
     *
     * @return bool
     *
     * @since PECL pthreads < 3.0.0
     *
     * @link http://www.php.net/manual/en/cond.broadcast.php
     */
    final public static function broadcast($condition)
    {
    }

    /**
     * Create a Condition
     *
     * @return int
     *
     * @since PECL pthreads < 3.0.0
     *
     * @link http://www.php.net/manual/en/cond.create.php
     */
    final public static function create()
    {
    }

    /**
     * Destroy a Condition
     *
     * @param mixed $condition
     *
     * @return bool
     *
     * @since PECL pthreads < 3.0.0
     *
     * @link http://www.php.net/manual/en/cond.destroy.php
     */
    final public static function destroy($condition)
    {
    }

    /**
     * Signal a Condition
     *
     * @param mixed $condition
     *
     * @return bool
     *
     * @since PECL pthreads < 3.0.0
     *
     * @link http://www.php.net/manual/en/cond.signal.php
     */
    final public static function signal($condition)
    {
    }

    /**
     * Wait for Condition
     *
     * @param mixed $condition
     * @param mixed $mutex
     * @param mixed|null $timeout
     *
     * @return bool
     *
     * @since PECL pthreads < 3.0.0
     *
     * @link http://www.php.net/manual/en/cond.wait.php
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
    /**
     * @since PECL pthreads < 3.0.0
     */
    final public function __construct()
    {
    }

    /**
     * Create a Mutex
     *
     * @param mixed|null $lock
     *
     * @return int
     *
     * @since PECL pthreads < 3.0.0
     *
     * @link http://www.php.net/manual/en/mutex.create.php
     */
    final public static function create($lock = null)
    {
    }

    /**
     * Destroy Mutex
     *
     * @param mixed $mutex
     *
     * @return bool
     *
     * @since PECL pthreads < 3.0.0
     *
     * @link http://www.php.net/manual/en/mutex.destroy.php
     */
    final public static function destroy($mutex)
    {
    }

    /**
     * Acquire Mutex
     *
     * @param mixed $mutex
     *
     * @return bool
     *
     * @since PECL pthreads < 3.0.0
     *
     * @link http://www.php.net/manual/en/mutex.lock.php
     */
    final public static function lock($mutex)
    {
    }

    /**
     * Attempt to Acquire Mutex
     *
     * @param mixed $mutex
     *
     * @return bool
     *
     * @since PECL pthreads < 3.0.0
     *
     * @link http://www.php.net/manual/en/mutex.trylock.php
     */
    final public static function trylock($mutex)
    {
    }

    /**
     * Release Mutex
     *
     * @param mixed $mutex
     * @param mixed|null $destroy
     *
     * @return bool
     *
     * @since PECL pthreads < 3.0.0
     *
     * @link http://www.php.net/manual/en/mutex.unlock.php
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
     * Creates a new Pool of Workers
     *
     * @param mixed $size
     * @param mixed|null $class
     * @param mixed|null $ctor
     *
     * @return Pool
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/pool.construct.php
     */
    public function __construct($size, $class = null, $ctor = null)
    {
    }

    /**
     * Collect references to completed tasks
     *
     * @param mixed $collector
     *
     * @return int
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/pool.collect.php
     */
    public function collect($collector)
    {
    }

    /**
     * Resize the Pool
     *
     * @param mixed $size
     *
     * @return void
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/pool.resize.php
     */
    public function resize($size)
    {
    }

    /**
     * Shutdown all workers
     *
     * @return void
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/pool.shutdown.php
     */
    public function shutdown()
    {
    }

    /**
     * Submits an object for execution
     *
     * @param mixed $task
     *
     * @return int
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/pool.submit.php
     */
    public function submit($task)
    {
    }

    /**
     * Submits a task to a specific worker for execution
     *
     * @param mixed $worker
     * @param mixed $task
     *
     * @return int
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/pool.submitTo.php
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
    /**
     * Execution
     *
     * @return void
     *
     * @since PECL pthreads < 3.0.0
     *
     * @link http://www.php.net/manual/en/thread.detach.php
     */
    public function detach()
    {
    }

    /**
     * Identification
     *
     * @return int
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/thread.getcreatorid.php
     */
    public function getCreatorId()
    {
    }

    /**
     * Identification
     *
     * @return Thread
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/thread.getcurrentthread.php
     */
    public static function getCurrentThread()
    {
    }

    /**
     * Identification
     *
     * @return int
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/thread.getcurrentthreadid.php
     */
    public static function getCurrentThreadId()
    {
    }

    /**
     * Identification
     *
     * @return int
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/thread.getthreadid.php
     */
    public function getThreadId()
    {
    }

    /**
     * Execution
     *
     * @param mixed $block
     * @param mixed|null $args
     *
     * @return mixed
     *
     * @since PECL pthreads < 3.0.0
     *
     * @link http://www.php.net/manual/en/thread.globally.php
     */
    public static function globally($block, $args = null)
    {
    }

    /**
     * State Detection
     *
     * @return bool
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/thread.isjoined.php
     */
    public function isJoined()
    {
    }

    /**
     * State Detection
     *
     * @return bool
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/thread.isstarted.php
     */
    public function isStarted()
    {
    }

    /**
     * Synchronization
     *
     * @return bool
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/thread.join.php
     */
    public function join()
    {
    }

    /**
     * Execution
     *
     * @return void
     *
     * @since PECL pthreads < 3.0.0
     *
     * @link http://www.php.net/manual/en/thread.kill.php
     */
    public function kill()
    {
    }

    /**
     * Execution
     *
     * @param mixed|null $options
     *
     * @return bool
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/thread.start.php
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
     * Manipulation
     *
     * @param mixed $size
     * @param mixed|null $preserve
     *
     * @return array
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/threaded.chunk.php
     */
    public function chunk($size, $preserve = null)
    {
    }

    /**
     * Manipulation
     *
     * @return int
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/threaded.count.php
     */
    public function count()
    {
    }

    /**
     * Runtime Manipulation
     *
     * @param mixed $class
     *
     * @return bool
     *
     * @since PECL pthreads >= 2.0.8
     *
     * @link http://www.php.net/manual/en/threaded.extend.php
     */
    public static function extend($class)
    {
    }

    /**
     * Creation
     *
     * @param Closure $run
     * @param Closure|null $construct
     * @param mixed|null $args
     *
     * @return Threaded
     *
     * @since PECL pthreads >= 2.0.9
     *
     * @link http://www.php.net/manual/en/threaded.from.php
     */
    public static function from(Closure $run, Closure $construct = null, $args = null)
    {
    }

    /**
     * Error Detection
     *
     * @return array
     *
     * @since PECL pthreads < 3.0.0
     *
     * @link http://www.php.net/manual/en/threaded.getterminationinfo.php
     */
    public function getTerminationInfo()
    {
    }

    /**
     * State Detection
     *
     * @return bool
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/thread.isrunning.php
     */
    public function isRunning()
    {
    }

    /**
     * State Detection
     *
     * @return bool
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/threaded.isterminated.php
     */
    public function isTerminated()
    {
    }

    /**
     * State Detection
     *
     * @return bool
     *
     * @since PECL pthreads < 3.0.0
     *
     * @link http://www.php.net/manual/en/threaded.iswaiting.php
     */
    public function isWaiting()
    {
    }

    /**
     * Synchronization
     *
     * @return bool
     *
     * @since PECL pthreads < 3.0.0
     *
     * @link http://www.php.net/manual/en/threaded.lock.php
     */
    public function lock()
    {
    }

    /**
     * Manipulation
     *
     * @param mixed $from
     * @param mixed|null $overwrite
     *
     * @return bool
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/threaded.merge.php
     */
    public function merge($from, $overwrite = null)
    {
    }

    /**
     * Synchronization
     *
     * @return bool
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/threaded.notify.php
     */
    public function notify()
    {
    }

    /**
     * Manipulation
     *
     * @return bool
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/threaded.pop.php
     */
    public function pop()
    {
    }

    /**
     * Execution
     *
     * @return void
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/threaded.run.php
     */
    public function run()
    {
    }

    /**
     * Manipulation
     *
     * @return mixed
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/threaded.shift.php
     */
    public function shift()
    {
    }

    /**
     * Synchronization
     *
     * @param mixed $function
     *
     * @return mixed
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/threaded.synchronized.php
     */
    public function synchronized($function)
    {
    }

    /**
     * Synchronization
     *
     * @return bool
     *
     * @since PECL pthreads < 3.0.0
     *
     * @link http://www.php.net/manual/en/threaded.unlock.php
     */
    public function unlock()
    {
    }

    /**
     * Synchronization
     *
     * @param mixed|null $timeout
     *
     * @return bool
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/threaded.wait.php
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
    /**
     * Gets the remaining stack size
     *
     * @return int
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/worker.getstacked.php
     */
    public function getStacked()
    {
    }

    /**
     * State Detection
     *
     * @return bool
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/worker.isshutdown.php
     */
    public function isShutdown()
    {
    }

    /**
     * State Detection
     *
     * @return bool
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/worker.isworking.php
     */
    public function isWorking()
    {
    }

    /**
     * Shutdown the worker
     *
     * @return bool
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/worker.shutdown.php
     */
    public function shutdown()
    {
    }

    /**
     * Stacking work
     *
     * @param mixed $work
     *
     * @return int
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/worker.stack.php
     */
    public function stack(&$work)
    {
    }

    /**
     * Unstacking work
     *
     * @param mixed|null $work
     *
     * @return int
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/worker.unstack.php
     */
    public function unstack(&$work = null)
    {
    }
}
