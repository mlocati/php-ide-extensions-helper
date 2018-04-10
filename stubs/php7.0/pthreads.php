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
     * Determine whether an object has been marked as garbage
     *
     * @return bool
     *
     * @since PECL pthreads >= 2.0.8
     *
     * @link http://www.php.net/manual/en/collectable.isgarbage.php
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
     * the class of the Worker
     *
     * @var mixed
     *
     * @link http://www.php.net/manual/en/class.pool.php#pool.props
     */
    protected $class;

    /**
     * the arguments for constructor of new Workers
     *
     * @var mixed
     *
     * @link http://www.php.net/manual/en/class.pool.php#pool.props
     */
    protected $ctor;

    /**
     * offset in workers of the last Worker used
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.pool.php#pool.props
     */
    protected $last = 0;

    /**
     * maximum number of Workers this Pool can use
     *
     * @var int
     *
     * @link http://www.php.net/manual/en/class.pool.php#pool.props
     */
    protected $size = 1;

    /**
     * references to Workers
     *
     * @var mixed
     *
     * @link http://www.php.net/manual/en/class.pool.php#pool.props
     */
    protected $workers;

    /**
     * Creates a new Pool of Workers
     *
     * @param int $size
     * @param string|null $class
     * @param array|null $ctor
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/pool.construct.php
     */
    public function __construct(int $size, string $class = null, array $ctor = null)
    {
    }

    /**
     * Collect references to completed tasks
     *
     * @param Closure $collector A Callable collector that returns a boolean on whether the task can be
     * collected or not. Only in rare cases should a custom collector need to
     * be used.
     *
     * @return int The number of remaining tasks in the pool to be collected.
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/pool.collect.php
     */
    public function collect(Closure $collector): int
    {
    }

    /**
     * Resize the Pool
     *
     * @param int $size The maximum number of Workers this Pool can create
     *
     * @return void void
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/pool.resize.php
     */
    public function resize(int $size)
    {
    }

    /**
     * Shutdown all workers
     *
     * @return void No value is returned.
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
     * @param Threaded $task
     *
     * @return int the identifier of the Worker executing the object
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/pool.submit.php
     */
    public function submit(Threaded $task): int
    {
    }

    /**
     * Submits a task to a specific worker for execution
     *
     * @param int $worker The worker to stack the task onto, indexed from <code>0</code>.
     * @param Threaded $task The task for execution.
     *
     * @return int The identifier of the worker that accepted the task.
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/pool.submitTo.php
     */
    public function submitTo(int $worker, Threaded $task): int
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
     * Identification
     *
     * @return int A numeric identity
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/thread.getcreatorid.php
     */
    public function getCreatorId(): int
    {
    }

    /**
     * Identification
     *
     * @return Thread An object representing the currently executing Thread
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/thread.getcurrentthread.php
     */
    public static function getCurrentThread(): Thread
    {
    }

    /**
     * Identification
     *
     * @return int A numeric identity
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/thread.getcurrentthreadid.php
     */
    public static function getCurrentThreadId(): int
    {
    }

    /**
     * Identification
     *
     * @return int A numeric identity
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/thread.getthreadid.php
     */
    public function getThreadId(): int
    {
    }

    /**
     * State Detection
     *
     * @return bool A boolean indication of state
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/thread.isjoined.php
     */
    public function isJoined(): bool
    {
    }

    /**
     * State Detection
     *
     * @return bool boolean indication of state
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/thread.isstarted.php
     */
    public function isStarted(): bool
    {
    }

    /**
     * Synchronization
     *
     * @return bool A boolean indication of success
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/thread.join.php
     */
    public function join(): bool
    {
    }

    /**
     * Execution
     *
     * @param int|null $options An optional mask of inheritance constants, by default PTHREADS_INHERIT_ALL
     *
     * @return bool A boolean indication of success
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/thread.start.php
     */
    public function start(int $options = null): bool
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
     * Manipulation
     *
     * @param int $size The number of items to fetch
     * @param bool $preserve Preserve the keys of members, by default false
     *
     * @return array An array of items from the objects property table
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/threaded.chunk.php
     */
    public function chunk(int $size, bool $preserve = null): array
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
    public function count(): int
    {
    }

    public function delRef()
    {
    }

    /**
     * Runtime Manipulation
     *
     * @param string $class The class to extend
     *
     * @return bool A boolean indication of success
     *
     * @since PECL pthreads >= 2.0.8
     *
     * @link http://www.php.net/manual/en/threaded.extend.php
     */
    public static function extend(string $class): bool
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

    /**
     * State Detection
     *
     * @return bool A boolean indication of state
     * <blockquote>
     * A object is considered running while executing the run method
     * </blockquote>
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/thread.isrunning.php
     */
    public function isRunning(): bool
    {
    }

    /**
     * State Detection
     *
     * @return bool A boolean indication of state
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/threaded.isterminated.php
     */
    public function isTerminated(): bool
    {
    }

    /**
     * Manipulation
     *
     * @param mixed $from The data to merge
     * @param bool $overwrite Overwrite existing keys, by default true
     *
     * @return bool A boolean indication of success
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/threaded.merge.php
     */
    public function merge($from, bool $overwrite = null): bool
    {
    }

    /**
     * Synchronization
     *
     * @return bool A boolean indication of success
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/threaded.notify.php
     */
    public function notify(): bool
    {
    }

    /**
     * Synchronization
     *
     * @return bool A boolean indication of success
     *
     * @since PECL pthreads >= 3.0.0
     *
     * @link http://www.php.net/manual/en/threaded.notifyone.php
     */
    public function notifyOne(): bool
    {
    }

    /**
     * Manipulation
     *
     * @return bool The last item from the objects property table
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/threaded.pop.php
     */
    public function pop(): bool
    {
    }

    /**
     * Execution
     *
     * @return void The methods return value, if used, will be ignored
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
     * @return mixed The first item from the objects property table
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
     * @param Closure $block The block of code to execute
     *
     * @return mixed The return value from the block
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/threaded.synchronized.php
     */
    public function synchronized(Closure $block)
    {
    }

    /**
     * Synchronization
     *
     * @param int|null $timeout An optional timeout in microseconds
     *
     * @return bool A boolean indication of success
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/threaded.wait.php
     */
    public function wait(int $timeout = null): bool
    {
    }
}

/**
 * The <code>Volatile</code> class is new to pthreads v3. Its
 * introduction is a consequence of the new immutability semantics of
 * <code>Threaded</code> members of <code>Threaded</code>
 * classes. The <code>Volatile</code> class enables for mutability
 * of its <code>Threaded</code> members, and is also used to store
 * PHP arrays in <code>Threaded</code> contexts.
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
     * Collect references to completed tasks
     *
     * @param Closure $collector A Callable collector that returns a boolean on whether the task can be
     * collected or not. Only in rare cases should a custom collector need to
     * be used.
     *
     * @return int The number of remaining tasks on the worker's stack to be collected.
     *
     * @since PECL pthreads >= 3.0.0
     *
     * @link http://www.php.net/manual/en/worker.collect.php
     */
    public function collect(Closure $collector = null): int
    {
    }

    /**
     * @param Collectable $collectable
     */
    public function collector(Collectable $collectable)
    {
    }

    /**
     * Gets the remaining stack size
     *
     * @return int Returns the number of tasks currently waiting to be executed by the worker
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/worker.getstacked.php
     */
    public function getStacked(): int
    {
    }

    /**
     * State Detection
     *
     * @return bool Returns whether the worker has been shutdown or not.
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/worker.isshutdown.php
     */
    public function isShutdown(): bool
    {
    }

    /**
     * Shutdown the worker
     *
     * @return bool Whether the worker was successfully shutdown or not.
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/worker.shutdown.php
     */
    public function shutdown(): bool
    {
    }

    /**
     * Stacking work
     *
     * @param Threaded $work A <code>Threaded</code> object to be executed by the worker.
     *
     * @return int The new size of the stack.
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/worker.stack.php
     */
    public function stack(Threaded $work): int
    {
    }

    /**
     * Unstacking work
     *
     * @return int The new size of the stack.
     *
     * @since PECL pthreads >= 2.0.0
     *
     * @link http://www.php.net/manual/en/worker.unstack.php
     */
    public function unstack(): int
    {
    }
}

/**
 * @param mixed $timeout
 */
function pthreads_no_sleeping($timeout)
{
}
