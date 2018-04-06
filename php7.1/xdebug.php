<?php
// Start of extension: xdebug
// - parsed on POSIX with PHP 7.1.15 (extension version 2.6.0)
// - parsed on Windows with PHP 7.1.15 (extension version 2.6.0)

/**
 * @var int
 */
const XDEBUG_CC_BRANCH_CHECK = 4;

/**
 * @var int
 */
const XDEBUG_CC_DEAD_CODE = 2;

/**
 * @var int
 */
const XDEBUG_CC_UNUSED = 1;

/**
 * @var int
 */
const XDEBUG_FILTER_CODE_COVERAGE = 512;

/**
 * @var int
 */
const XDEBUG_FILTER_NONE = 0;

/**
 * @var int
 */
const XDEBUG_FILTER_TRACING = 256;

/**
 * @var int
 */
const XDEBUG_NAMESPACE_BLACKLIST = 18;

/**
 * @var int
 */
const XDEBUG_NAMESPACE_WHITELIST = 17;

/**
 * @var int
 */
const XDEBUG_PATH_BLACKLIST = 2;

/**
 * @var int
 */
const XDEBUG_PATH_WHITELIST = 1;

/**
 * @var int
 */
const XDEBUG_STACK_NO_DESC = 1;

/**
 * @var int
 */
const XDEBUG_TRACE_APPEND = 1;

/**
 * @var int
 */
const XDEBUG_TRACE_COMPUTERIZED = 2;

/**
 * @var int
 */
const XDEBUG_TRACE_HTML = 4;

/**
 * @var int
 */
const XDEBUG_TRACE_NAKED_FILENAME = 8;

function xdebug_break()
{
}

/**
 * mixed|null $depth
 */
function xdebug_call_class($depth = null)
{
}

/**
 * mixed|null $depth
 */
function xdebug_call_file($depth = null)
{
}

/**
 * mixed|null $depth
 */
function xdebug_call_function($depth = null)
{
}

/**
 * mixed|null $depth
 */
function xdebug_call_line($depth = null)
{
}

function xdebug_clear_aggr_profiling_data()
{
}

function xdebug_code_coverage_started()
{
}

/**
 * mixed $var
 */
function xdebug_debug_zval($var)
{
}

/**
 * mixed $var
 */
function xdebug_debug_zval_stdout($var)
{
}

function xdebug_disable()
{
}

/**
 * mixed|null $prefix
 */
function xdebug_dump_aggr_profiling_data($prefix = null)
{
}

function xdebug_dump_superglobals()
{
}

function xdebug_enable()
{
}

function xdebug_get_code_coverage()
{
}

/**
 * mixed|null $clear
 */
function xdebug_get_collected_errors($clear = null)
{
}

function xdebug_get_declared_vars()
{
}

function xdebug_get_formatted_function_stack()
{
}

function xdebug_get_function_count()
{
}

function xdebug_get_function_stack()
{
}

function xdebug_get_gc_run_count()
{
}

function xdebug_get_gc_total_collected_roots()
{
}

function xdebug_get_gcstats_filename()
{
}

function xdebug_get_headers()
{
}

/**
 * mixed|null $clear
 */
function xdebug_get_monitored_functions($clear = null)
{
}

function xdebug_get_profiler_filename()
{
}

function xdebug_get_stack_depth()
{
}

function xdebug_get_tracefile_name()
{
}

function xdebug_is_debugger_active()
{
}

function xdebug_is_enabled()
{
}

function xdebug_memory_usage()
{
}

function xdebug_peak_memory_usage()
{
}

/**
 * mixed|null $message
 * mixed|null $options
 */
function xdebug_print_function_stack($message = null, $options = null)
{
}

/**
 * mixed $filter_group
 * mixed $filter_type
 * mixed $array_of_filters
 */
function xdebug_set_filter($filter_group, $filter_type, $array_of_filters)
{
}

/**
 * mixed|null $options
 */
function xdebug_start_code_coverage($options = null)
{
}

function xdebug_start_error_collection()
{
}

/**
 * mixed $functions_to_monitor
 */
function xdebug_start_function_monitor($functions_to_monitor)
{
}

/**
 * mixed|null $fname
 */
function xdebug_start_gcstats($fname = null)
{
}

/**
 * mixed|null $fname
 * mixed|null $options
 */
function xdebug_start_trace($fname = null, $options = null)
{
}

/**
 * mixed|null $cleanup
 */
function xdebug_stop_code_coverage($cleanup = null)
{
}

function xdebug_stop_error_collection()
{
}

function xdebug_stop_function_monitor()
{
}

function xdebug_stop_gcstats()
{
}

function xdebug_stop_trace()
{
}

function xdebug_time_index()
{
}

/**
 * mixed $var
 */
function xdebug_var_dump($var)
{
}
