<?php
// Start of extension: test
// - parsed on POSIX with PHP 7.2.3 (extension version 0.1.0)

trait _ZendTestTrait
{
    public function testMethod()
    {
    }
}

interface _ZendTestInterface
{
}

class _ZendTestClass implements _ZendTestInterface
{
}

function zend_create_unterminated_string()
{
}

function zend_leak_bytes()
{
}

/**
 * @param mixed $variable
 */
function zend_leak_variable($variable)
{
}

/**
 * @param mixed $str
 */
function zend_terminate_string(&$str)
{
}

/**
 * @return array
 */
function zend_test_array_return(): array
{
}

/**
 * @return array
 */
function zend_test_nullable_array_return(): array
{
}
