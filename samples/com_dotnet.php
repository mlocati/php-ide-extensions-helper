<?php
// Documentation generated automatically for extension com_dotnet v7.1.4 with PHP v7.1.4

// This file doesn't do anything: it's only useful to help editors autocompletion features
return;
/*
 * INI entries:
 * com.allow_dcom = '0'
 * com.autoregister_verbose = '0'
 * com.autoregister_typelib = '0'
 * com.autoregister_casesensitive = '1'
 * com.code_page = ''
 * com.typelib_file = ''
 */
const CLSCTX_ALL = 23;
const CLSCTX_INPROC_HANDLER = 2;
const CLSCTX_INPROC_SERVER = 1;
const CLSCTX_LOCAL_SERVER = 4;
const CLSCTX_REMOTE_SERVER = 16;
const CLSCTX_SERVER = 21;
const CP_ACP = 0;
const CP_MACCP = 2;
const CP_OEMCP = 1;
const CP_SYMBOL = 42;
const CP_THREAD_ACP = 3;
const CP_UTF7 = 65000;
const CP_UTF8 = 65001;
const DISP_E_BADINDEX = -1;
const DISP_E_DIVBYZERO = -1;
const DISP_E_OVERFLOW = -1;
const MK_E_UNAVAILABLE = -1;
const NORM_IGNORECASE = 1;
const NORM_IGNOREKANATYPE = 65536;
const NORM_IGNORENONSPACE = 2;
const NORM_IGNORESYMBOLS = 4;
const NORM_IGNOREWIDTH = 131072;
const VARCMP_EQ = 1;
const VARCMP_GT = 2;
const VARCMP_LT = 0;
const VARCMP_NULL = 3;
const VT_ARRAY = 8192;
const VT_BOOL = 11;
const VT_BSTR = 8;
const VT_BYREF = 16384;
const VT_CY = 6;
const VT_DATE = 7;
const VT_DECIMAL = 14;
const VT_DISPATCH = 9;
const VT_EMPTY = 0;
const VT_ERROR = 10;
const VT_I1 = 16;
const VT_I2 = 2;
const VT_I4 = 3;
const VT_INT = 22;
const VT_NULL = 1;
const VT_R4 = 4;
const VT_R8 = 5;
const VT_UI1 = 17;
const VT_UI2 = 18;
const VT_UI4 = 19;
const VT_UINT = 23;
const VT_UNKNOWN = 13;
const VT_VARIANT = 12;
class com extends variant
{
}
final class com_exception extends Exception
{
    protected $code = 0;
    protected $file;
    protected $line;
    protected $message = '';
    public function __construct($message = null, $code = null, $previous = null)
    {
    }
    public function __toString()
    {
    }
    public function __wakeup()
    {
    }
    final public function getCode()
    {
    }
    final public function getFile()
    {
    }
    final public function getLine()
    {
    }
    final public function getMessage()
    {
    }
    final public function getPrevious()
    {
    }
    final public function getTrace()
    {
    }
    final public function getTraceAsString()
    {
    }
    final private function __clone()
    {
    }
}
final class com_safearray_proxy
{
}
final class COMPersistHelper
{
    public function __construct()
    {
    }
    public function GetCurFileName()
    {
    }
    public function GetMaxStreamSize()
    {
    }
    public function InitNew()
    {
    }
    public function LoadFromFile()
    {
    }
    public function LoadFromStream()
    {
    }
    public function SaveToFile()
    {
    }
    public function SaveToStream()
    {
    }
}
class dotnet extends variant
{
}
class variant
{
}
function variant_set($variant, $value)
{
}
function variant_add($left, $right)
{
}
function variant_cat($left, $right)
{
}
function variant_sub($left, $right)
{
}
function variant_mul($left, $right)
{
}
function variant_and($left, $right)
{
}
function variant_div($left, $right)
{
}
function variant_eqv($left, $right)
{
}
function variant_idiv($left, $right)
{
}
function variant_imp($left, $right)
{
}
function variant_mod($left, $right)
{
}
function variant_or($left, $right)
{
}
function variant_pow($left, $right)
{
}
function variant_xor($left, $right)
{
}
function variant_abs($left)
{
}
function variant_fix($left)
{
}
function variant_int($left)
{
}
function variant_neg($left)
{
}
function variant_not($left)
{
}
function variant_round($left, $decimals)
{
}
function variant_cmp($left, $right, $lcid = null, $flags = null)
{
}
function variant_date_to_timestamp($variant)
{
}
function variant_date_from_timestamp($timestamp)
{
}
function variant_get_type($variant)
{
}
function variant_set_type($variant, $type)
{
}
function variant_cast($variant, $type)
{
}
function com_create_guid()
{
}
function com_event_sink($comobject, $sinkobject, $sinkinterface = null)
{
}
function com_print_typeinfo($comobject, $dispinterface = null, $wantsink = null)
{
}
function com_message_pump($timeoutms = null)
{
}
function com_load_typelib($typelib_name, $case_insensitive = null)
{
}
function com_get_active_object($progid, $code_page = null)
{
}