<?php
// Start of extension: solr
// - parsed on POSIX with PHP 7.1.15 (extension version 2.4.0)

/**
 * @link http://www.php.net/manual/en/solr.constants.php#constant.solr-extension-version
 *
 * @var string
 */
const SOLR_EXTENSION_VERSION = '2.4.0';

/**
 * @link http://www.php.net/manual/en/solr.constants.php#constant.solr-major-version
 *
 * @var int
 */
const SOLR_MAJOR_VERSION = 2;

/**
 * @link http://www.php.net/manual/en/solr.constants.php#constant.solr-minor-version
 *
 * @var int
 */
const SOLR_MINOR_VERSION = 4;

/**
 * @link http://www.php.net/manual/en/solr.constants.php#constant.solr-patch-version
 *
 * @var int
 */
const SOLR_PATCH_VERSION = 0;

/**
 * Used to send requests to a Solr server. Currently, cloning and serialization of SolrClient instances is not supported.
 *
 * @since PECL solr >= 0.9.2
 *
 * @link http://www.php.net/manual/en/class.solrclient.php
 */
class SolrClient
{
    public function __clone()
    {
    }

    /**
     * @param array[] $clientOptions
     */
    public function __construct($clientOptions)
    {
    }

    public function __destruct()
    {
    }

    public function __sleep()
    {
    }

    public function __wakeup()
    {
    }

    /**
     * @param SolrInputDocument $doc
     * @param mixed|null $overwrite
     * @param mixed|null $commitWithin
     */
    public function &addDocument(&$doc, $overwrite = null, $commitWithin = null)
    {
    }

    /**
     * @param array[] $docs
     * @param mixed|null $overwrite
     * @param mixed|null $commitWithin
     */
    public function &addDocuments(&$docs, $overwrite = null, $commitWithin = null)
    {
    }

    /**
     * @param mixed|null $softCommit
     * @param mixed|null $waitSearcher
     * @param mixed|null $expungeDeletes
     */
    public function &commit($softCommit = null, $waitSearcher = null, $expungeDeletes = null)
    {
    }

    /**
     * @param mixed $id
     */
    public function &deleteById($id)
    {
    }

    /**
     * @param array[] $ids
     */
    public function &deleteByIds($ids)
    {
    }

    /**
     * @param array[] $queries
     */
    public function &deleteByQueries($queries)
    {
    }

    /**
     * @param mixed $query
     */
    public function &deleteByQuery($query)
    {
    }

    /**
     * @param mixed $id
     */
    public function &getById($id)
    {
    }

    /**
     * @param array[] $ids
     */
    public function &getByIds($ids)
    {
    }

    public function getDebug()
    {
    }

    public function getOptions()
    {
    }

    /**
     * @param mixed|null $maxSegments
     * @param mixed|null $softCommit
     * @param mixed|null $waitSearcher
     */
    public function &optimize($maxSegments = null, $softCommit = null, $waitSearcher = null)
    {
    }

    public function &ping()
    {
    }

    /**
     * @param SolrParams $query
     */
    public function &query(&$query)
    {
    }

    /**
     * @param mixed $raw_request
     */
    public function &request($raw_request)
    {
    }

    public function &rollback()
    {
    }

    /**
     * @param mixed $responseWriter
     */
    public function &setResponseWriter($responseWriter)
    {
    }

    /**
     * @param mixed $type
     * @param mixed $value
     */
    public function setServlet($type, $value)
    {
    }

    /**
     * Execute an external program and display the output
     *
     * @return string
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.system.php
     */
    public function &system(): string
    {
    }

    public function &threads()
    {
    }
}

/**
 * An exception thrown when there is an error while making a request to the server from the client.
 *
 * @since PECL solr >= 0.9.2
 *
 * @link http://www.php.net/manual/en/class.solrclientexception.php
 */
class SolrClientException extends SolrException
{
    public function getInternalInfo()
    {
    }
}

/**
 * @since PECL solr >= 2.2.0
 *
 * @link http://www.php.net/manual/en/class.solrcollapsefunction.php
 */
class SolrCollapseFunction
{
    /**
     * @param mixed|null $field
     */
    public function __construct($field = null)
    {
    }

    public function __destruct()
    {
    }

    public function __sleep()
    {
    }

    public function __toString()
    {
    }

    public function __wakeup()
    {
    }

    public function getField()
    {
    }

    public function getHint()
    {
    }

    public function getMax()
    {
    }

    public function getMin()
    {
    }

    public function getNullPolicy()
    {
    }

    public function getSize()
    {
    }

    /**
     * @param mixed $fieldName
     */
    public function setField($fieldName)
    {
    }

    /**
     * @param mixed $hint
     */
    public function setHint($hint)
    {
    }

    /**
     * @param mixed $max
     */
    public function setMax($max)
    {
    }

    /**
     * @param mixed $min
     */
    public function setMin($min)
    {
    }

    /**
     * @param mixed $policy
     */
    public function setNullPolicy($policy)
    {
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
    }
}

/**
 * @link http://www.php.net/manual/en/class.solrdismaxquery.php
 */
class SolrDisMaxQuery extends SolrQuery
{
    /**
     * @param mixed|null $q
     */
    public function __construct($q = null)
    {
    }

    /**
     * @param mixed $field
     * @param mixed $boost
     * @param mixed|null $slop
     */
    public function addBigramPhraseField($field, $boost, $slop = null)
    {
    }

    /**
     * @param mixed $field
     * @param mixed $value
     * @param mixed|null $boost
     */
    public function addBoostQuery($field, $value, $boost = null)
    {
    }

    /**
     * @param mixed $field
     * @param mixed $boost
     * @param mixed|null $slop
     */
    public function addPhraseField($field, $boost, $slop = null)
    {
    }

    /**
     * @param mixed $field
     * @param mixed|null $boost
     */
    public function addQueryField($field, $boost = null)
    {
    }

    /**
     * @param mixed $field
     * @param mixed $boost
     * @param mixed|null $slop
     */
    public function addTrigramPhraseField($field, $boost, $slop = null)
    {
    }

    /**
     * @param mixed $field
     */
    public function addUserField($field)
    {
    }

    /**
     * @param mixed $field
     */
    public function removeBigramPhraseField($field)
    {
    }

    /**
     * @param mixed $field
     */
    public function removeBoostQuery($field)
    {
    }

    /**
     * @param mixed $field
     */
    public function removePhraseField($field)
    {
    }

    /**
     * @param mixed $field
     */
    public function removeQueryField($field)
    {
    }

    /**
     * @param mixed $field
     */
    public function removeTrigramPhraseField($field)
    {
    }

    /**
     * @param mixed $field
     */
    public function removeUserField($field)
    {
    }

    /**
     * @param mixed $fields
     */
    public function setBigramPhraseFields($fields)
    {
    }

    /**
     * @param mixed $slop
     */
    public function setBigramPhraseSlop($slop)
    {
    }

    /**
     * @param mixed $function
     */
    public function setBoostFunction($function)
    {
    }

    /**
     * @param mixed $q
     */
    public function setBoostQuery($q)
    {
    }

    /**
     * @param mixed $value
     */
    public function setMinimumMatch($value)
    {
    }

    /**
     * @param mixed $fields
     */
    public function setPhraseFields($fields)
    {
    }

    /**
     * @param mixed $slop
     */
    public function setPhraseSlop($slop)
    {
    }

    /**
     * @param mixed $q
     */
    public function setQueryAlt($q)
    {
    }

    /**
     * @param mixed $slop
     */
    public function setQueryPhraseSlop($slop)
    {
    }

    /**
     * @param mixed $tieBreaker
     */
    public function setTieBreaker($tieBreaker)
    {
    }

    /**
     * @param mixed $fields
     */
    public function setTrigramPhraseFields($fields)
    {
    }

    /**
     * @param mixed $slop
     */
    public function setTrigramPhraseSlop($slop)
    {
    }

    /**
     * @param mixed $fields
     */
    public function setUserFields($fields)
    {
    }

    public function useDisMaxQueryParser()
    {
    }

    public function useEDisMaxQueryParser()
    {
    }
}

/**
 * Represents a Solr document retrieved from a query response.
 *
 * @since PECL solr >= 0.9.2
 *
 * @link http://www.php.net/manual/en/class.solrdocument.php
 */
final class SolrDocument implements ArrayAccess, Iterator, Serializable
{
    public function __clone()
    {
    }

    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    /**
     * @param mixed $fieldName
     */
    public function __get($fieldName)
    {
    }

    /**
     * @param mixed $fieldName
     */
    public function __isset($fieldName)
    {
    }

    /**
     * @param mixed $fieldName
     * @param mixed $fieldValue
     */
    public function __set($fieldName, $fieldValue)
    {
    }

    /**
     * @param mixed $fieldName
     */
    public function __unset($fieldName)
    {
    }

    /**
     * @param mixed $fieldName
     * @param mixed $fieldValue
     */
    public function addField($fieldName, $fieldValue)
    {
    }

    public function clear()
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
    public function &current()
    {
    }

    /**
     * @param mixed $fieldName
     */
    public function deleteField($fieldName)
    {
    }

    /**
     * @param mixed $fieldName
     */
    public function fieldExists($fieldName)
    {
    }

    public function getChildDocuments()
    {
    }

    public function getChildDocumentsCount()
    {
    }

    /**
     * @param mixed $fieldName
     */
    public function getField($fieldName)
    {
    }

    public function getFieldCount()
    {
    }

    public function getFieldNames()
    {
    }

    public function &getInputDocument()
    {
    }

    public function hasChildDocuments()
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
     * @param SolrDocument $sourceDoc
     * @param mixed|null $overwrite
     */
    public function merge(&$sourceDoc, $overwrite = null)
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
     * @param mixed $fieldName
     */
    public function offsetExists($fieldName)
    {
    }

    /**
     * @param mixed $fieldName
     */
    public function offsetGet($fieldName)
    {
    }

    /**
     * @param mixed $fieldName
     * @param mixed $fieldValue
     */
    public function offsetSet($fieldName, $fieldValue)
    {
    }

    /**
     * @param mixed $fieldName
     */
    public function offsetUnset($fieldName)
    {
    }

    /**
     * Set the internal pointer of an array to its first element
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.reset.php
     */
    public function reset()
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
     * Sort an array
     *
     * @param mixed $sortOrderBy
     * @param mixed|null $sortDirection
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.sort.php
     */
    public function sort($sortOrderBy, $sortDirection = null): bool
    {
    }

    public function toArray()
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
 * This represents a field in a Solr document. All its properties are read-only.
 *
 * @since PECL solr >= 0.9.2
 *
 * @link http://www.php.net/manual/en/class.solrdocumentfield.php
 */
final class SolrDocumentField
{
    public function __construct()
    {
    }

    public function __destruct()
    {
    }
}

/**
 * This is the base class for all exception thrown by the Solr extension classes.
 *
 * @since PECL solr >= 0.9.2
 *
 * @link http://www.php.net/manual/en/class.solrexception.php
 */
class SolrException extends Exception
{
    public function getInternalInfo()
    {
    }
}

/**
 * Represents a response from the solr server.
 *
 * @since PECL solr >= 0.9.2
 *
 * @link http://www.php.net/manual/en/class.solrgenericresponse.php
 */
final class SolrGenericResponse extends SolrResponse
{
    public function __construct()
    {
    }

    public function __destruct()
    {
    }
}

/**
 * This object is thrown when an illegal or invalid argument is passed to a method.
 *
 * @since PECL solr >= 0.9.2
 *
 * @link http://www.php.net/manual/en/class.solrillegalargumentexception.php
 */
class SolrIllegalArgumentException extends SolrException
{
    public function getInternalInfo()
    {
    }
}

/**
 * This object is thrown when an illegal or unsupported operation is performed on an object.
 *
 * @since PECL solr >= 0.9.2
 *
 * @link http://www.php.net/manual/en/class.solrillegaloperationexception.php
 */
class SolrIllegalOperationException extends SolrException
{
    public function getInternalInfo()
    {
    }
}

/**
 * This class represents a Solr document that is about to be submitted to the Solr index.
 *
 * @since PECL solr >= 0.9.2
 *
 * @link http://www.php.net/manual/en/class.solrinputdocument.php
 */
final class SolrInputDocument
{
    public function __clone()
    {
    }

    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    public function __sleep()
    {
    }

    public function __wakeup()
    {
    }

    /**
     * @param SolrInputDocument $child
     */
    public function addChildDocument(&$child)
    {
    }

    /**
     * @param array[] $docs
     */
    public function &addChildDocuments(&$docs)
    {
    }

    /**
     * @param mixed $fieldName
     * @param mixed $fieldValue
     * @param mixed|null $fieldBoostValue
     */
    public function addField($fieldName, $fieldValue, $fieldBoostValue = null)
    {
    }

    public function clear()
    {
    }

    /**
     * @param mixed $fieldName
     */
    public function deleteField($fieldName)
    {
    }

    /**
     * @param mixed $fieldName
     */
    public function fieldExists($fieldName)
    {
    }

    public function getBoost()
    {
    }

    public function getChildDocuments()
    {
    }

    public function getChildDocumentsCount()
    {
    }

    /**
     * @param mixed $fieldName
     */
    public function getField($fieldName)
    {
    }

    /**
     * @param mixed $fieldName
     */
    public function getFieldBoost($fieldName)
    {
    }

    public function getFieldCount()
    {
    }

    public function getFieldNames()
    {
    }

    public function hasChildDocuments()
    {
    }

    /**
     * @param SolrInputDocument $sourceDoc
     * @param mixed|null $overwrite
     */
    public function merge(&$sourceDoc, $overwrite = null)
    {
    }

    /**
     * Set the internal pointer of an array to its first element
     *
     * @return mixed
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.reset.php
     */
    public function reset()
    {
    }

    /**
     * @param mixed $documentBoostValue
     */
    public function setBoost($documentBoostValue)
    {
    }

    /**
     * @param mixed $fieldName
     * @param mixed $fieldBoostValue
     */
    public function setFieldBoost($fieldName, $fieldBoostValue)
    {
    }

    /**
     * Sort an array
     *
     * @param mixed $sortOrderBy
     * @param mixed|null $sortDirection
     *
     * @return bool
     *
     * @since PHP 4, PHP 5, PHP 7
     *
     * @link http://www.php.net/manual/en/function.sort.php
     */
    public function sort($sortOrderBy, $sortDirection = null): bool
    {
    }

    public function toArray()
    {
    }
}

/**
 * @link http://www.php.net/manual/en/class.solrmissingmandatoryparameterexception.php
 */
class SolrMissingMandatoryParameterException extends SolrException
{
}

/**
 * Represents a collection of name-value pairs sent to the Solr server during a request.
 *
 * @since PECL solr >= 0.9.2
 *
 * @link http://www.php.net/manual/en/class.solrmodifiableparams.php
 */
class SolrModifiableParams extends SolrParams
{
    public function __construct()
    {
    }

    public function __destruct()
    {
    }
}

/**
 * This is an object whose properties can also by accessed using the array syntax. All its properties are read-only.
 *
 * @since PECL solr >= 0.9.2
 *
 * @link http://www.php.net/manual/en/class.solrobject.php
 */
final class SolrObject implements ArrayAccess
{
    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    public function getPropertyNames()
    {
    }

    /**
     * @param mixed $property_name
     */
    public function offsetExists($property_name)
    {
    }

    /**
     * @param mixed $property_name
     */
    public function offsetGet($property_name)
    {
    }

    /**
     * @param mixed $property_name
     * @param mixed $property_value
     */
    public function offsetSet($property_name, $property_value)
    {
    }

    /**
     * @param mixed $property_name
     */
    public function offsetUnset($property_name)
    {
    }
}

/**
 * Represents a collection of name-value pairs sent to the Solr server during a request.
 *
 * @since PECL solr >= 0.9.2
 *
 * @link http://www.php.net/manual/en/class.solrparams.php
 */
abstract class SolrParams implements Serializable
{
    public function __clone()
    {
    }

    public function __toString()
    {
    }

    /**
     * @param mixed $name
     * @param mixed $value
     */
    public function &add($name, $value)
    {
    }

    /**
     * @param mixed $name
     * @param mixed $value
     */
    public function &addParam($name, $value)
    {
    }

    /**
     * @param mixed $param_name
     */
    public function get($param_name)
    {
    }

    /**
     * @param mixed $param_name
     */
    public function getParam($param_name)
    {
    }

    public function getParams()
    {
    }

    public function getPreparedParams()
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
     * @param mixed $name
     * @param mixed $value
     */
    public function &set($name, $value)
    {
    }

    /**
     * @param mixed $name
     * @param mixed $value
     */
    public function &setParam($name, $value)
    {
    }

    /**
     * @param mixed|null $url_encode
     */
    public function toString($url_encode = null)
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
 * Represents a response to a ping request to the server
 *
 * @since PECL solr >= 0.9.2
 *
 * @link http://www.php.net/manual/en/class.solrpingresponse.php
 */
final class SolrPingResponse extends SolrResponse
{
    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    public function getResponse()
    {
    }
}

/**
 * Represents a collection of name-value pairs sent to the Solr server during a request.
 *
 * @since PECL solr >= 0.9.2
 *
 * @link http://www.php.net/manual/en/class.solrquery.php
 */
class SolrQuery extends SolrModifiableParams
{
    /**
     * @param mixed|null $q
     */
    public function __construct($q = null)
    {
    }

    public function __destruct()
    {
    }

    /**
     * @param mixed $fq
     */
    public function &addExpandFilterQuery($fq)
    {
    }

    /**
     * @param mixed $field
     * @param mixed|null $order
     */
    public function &addExpandSortField($field, $order = null)
    {
    }

    /**
     * @param mixed $value
     */
    public function &addFacetDateField($value)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &addFacetDateOther($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     */
    public function &addFacetField($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &addFacetQuery($value)
    {
    }

    /**
     * @param mixed $field
     */
    public function &addField($field)
    {
    }

    /**
     * @param mixed $fq
     */
    public function &addFilterQuery($fq)
    {
    }

    /**
     * @param mixed $value
     */
    public function &addGroupField($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &addGroupFunction($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &addGroupQuery($value)
    {
    }

    /**
     * @param mixed $field
     * @param mixed|null $order
     */
    public function &addGroupSortField($field, $order = null)
    {
    }

    /**
     * @param mixed $value
     */
    public function &addHighlightField($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &addMltField($value)
    {
    }

    /**
     * @param mixed $field
     * @param mixed $boost
     */
    public function &addMltQueryField($field, $boost)
    {
    }

    /**
     * @param mixed $field
     * @param mixed|null $order
     */
    public function &addSortField($field, $order = null)
    {
    }

    /**
     * @param mixed $value
     */
    public function &addStatsFacet($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &addStatsField($value)
    {
    }

    /**
     * @param SolrCollapseFunction $collapseFunction
     */
    public function &collapse(&$collapseFunction)
    {
    }

    public function getExpand()
    {
    }

    public function getExpandFilterQueries()
    {
    }

    public function getExpandQuery()
    {
    }

    public function getExpandRows()
    {
    }

    public function getExpandSortFields()
    {
    }

    public function getFacet()
    {
    }

    /**
     * @param mixed|null $field_override
     */
    public function getFacetDateEnd($field_override = null)
    {
    }

    public function getFacetDateFields()
    {
    }

    /**
     * @param mixed|null $field_override
     */
    public function getFacetDateGap($field_override = null)
    {
    }

    /**
     * @param mixed|null $field_override
     */
    public function getFacetDateHardEnd($field_override = null)
    {
    }

    /**
     * @param mixed|null $field_override
     */
    public function getFacetDateOther($field_override = null)
    {
    }

    /**
     * @param mixed|null $field_override
     */
    public function getFacetDateStart($field_override = null)
    {
    }

    public function getFacetFields()
    {
    }

    /**
     * @param mixed|null $field_override
     */
    public function getFacetLimit($field_override = null)
    {
    }

    /**
     * @param mixed|null $field_override
     */
    public function getFacetMethod($field_override = null)
    {
    }

    /**
     * @param mixed|null $field_override
     */
    public function getFacetMinCount($field_override = null)
    {
    }

    /**
     * @param mixed|null $field_override
     */
    public function getFacetMissing($field_override = null)
    {
    }

    /**
     * @param mixed|null $field_override
     */
    public function getFacetOffset($field_override = null)
    {
    }

    /**
     * @param mixed|null $field_override
     */
    public function getFacetPrefix($field_override = null)
    {
    }

    public function getFacetQueries()
    {
    }

    /**
     * @param mixed|null $field_override
     */
    public function getFacetSort($field_override = null)
    {
    }

    public function getFields()
    {
    }

    public function getFilterQueries()
    {
    }

    public function getGroup()
    {
    }

    public function getGroupCachePercent()
    {
    }

    public function getGroupFacet()
    {
    }

    public function getGroupFields()
    {
    }

    public function getGroupFormat()
    {
    }

    public function getGroupFunctions()
    {
    }

    public function getGroupLimit()
    {
    }

    public function getGroupMain()
    {
    }

    public function getGroupNGroups()
    {
    }

    public function getGroupOffset()
    {
    }

    public function getGroupQueries()
    {
    }

    public function getGroupSortFields()
    {
    }

    public function getGroupTruncate()
    {
    }

    public function getHighlight()
    {
    }

    /**
     * @param mixed|null $field_override
     */
    public function getHighlightAlternateField($field_override = null)
    {
    }

    public function getHighlightFields()
    {
    }

    /**
     * @param mixed|null $field_override
     */
    public function getHighlightFormatter($field_override = null)
    {
    }

    /**
     * @param mixed|null $field_override
     */
    public function getHighlightFragmenter($field_override = null)
    {
    }

    /**
     * @param mixed|null $field_override
     */
    public function getHighlightFragsize($field_override = null)
    {
    }

    public function getHighlightHighlightMultiTerm()
    {
    }

    /**
     * @param mixed|null $field_override
     */
    public function getHighlightMaxAlternateFieldLength($field_override = null)
    {
    }

    public function getHighlightMaxAnalyzedChars()
    {
    }

    /**
     * @param mixed|null $field_override
     */
    public function getHighlightMergeContiguous($field_override = null)
    {
    }

    public function getHighlightRegexMaxAnalyzedChars()
    {
    }

    public function getHighlightRegexPattern()
    {
    }

    public function getHighlightRegexSlop()
    {
    }

    public function getHighlightRequireFieldMatch()
    {
    }

    /**
     * @param mixed|null $field_override
     */
    public function getHighlightSimplePost($field_override = null)
    {
    }

    /**
     * @param mixed|null $field_override
     */
    public function getHighlightSimplePre($field_override = null)
    {
    }

    /**
     * @param mixed|null $field_override
     */
    public function getHighlightSnippets($field_override = null)
    {
    }

    public function getHighlightUsePhraseHighlighter()
    {
    }

    public function getMlt()
    {
    }

    public function getMltBoost()
    {
    }

    public function getMltCount()
    {
    }

    public function getMltFields()
    {
    }

    public function getMltMaxNumQueryTerms()
    {
    }

    public function getMltMaxNumTokens()
    {
    }

    public function getMltMaxWordLength()
    {
    }

    public function getMltMinDocFrequency()
    {
    }

    public function getMltMinTermFrequency()
    {
    }

    public function getMltMinWordLength()
    {
    }

    public function getMltQueryFields()
    {
    }

    public function getQuery()
    {
    }

    public function getRows()
    {
    }

    public function getSortFields()
    {
    }

    public function getStart()
    {
    }

    public function getStats()
    {
    }

    public function getStatsFacets()
    {
    }

    public function getStatsFields()
    {
    }

    public function getTerms()
    {
    }

    public function getTermsField()
    {
    }

    public function getTermsIncludeLowerBound()
    {
    }

    public function getTermsIncludeUpperBound()
    {
    }

    public function getTermsLimit()
    {
    }

    public function getTermsLowerBound()
    {
    }

    public function getTermsMaxCount()
    {
    }

    public function getTermsMinCount()
    {
    }

    public function getTermsPrefix()
    {
    }

    public function getTermsReturnRaw()
    {
    }

    public function getTermsSort()
    {
    }

    public function getTermsUpperBound()
    {
    }

    public function getTimeAllowed()
    {
    }

    /**
     * @param mixed $fq
     */
    public function &removeExpandFilterQuery($fq)
    {
    }

    /**
     * @param mixed $field
     */
    public function &removeExpandSortField($field)
    {
    }

    /**
     * @param mixed $value
     */
    public function &removeFacetDateField($value)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &removeFacetDateOther($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     */
    public function &removeFacetField($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &removeFacetQuery($value)
    {
    }

    /**
     * @param mixed $field
     */
    public function &removeField($field)
    {
    }

    /**
     * @param mixed $fq
     */
    public function &removeFilterQuery($fq)
    {
    }

    /**
     * @param mixed $value
     */
    public function &removeHighlightField($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &removeMltField($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &removeMltQueryField($value)
    {
    }

    /**
     * @param mixed $field
     */
    public function &removeSortField($field)
    {
    }

    /**
     * @param mixed $value
     */
    public function &removeStatsFacet($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &removeStatsField($value)
    {
    }

    /**
     * @param mixed $flag
     */
    public function &setEchoHandler($flag)
    {
    }

    /**
     * @param mixed $type
     */
    public function &setEchoParams($type)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setExpand($value)
    {
    }

    /**
     * @param mixed $q
     */
    public function &setExpandQuery($q)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setExpandRows($value)
    {
    }

    /**
     * @param mixed $flag
     */
    public function &setExplainOther($flag)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setFacet($value)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &setFacetDateEnd($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &setFacetDateGap($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &setFacetDateHardEnd($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &setFacetDateStart($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &setFacetEnumCacheMinDefaultFrequency($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &setFacetLimit($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &setFacetMethod($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &setFacetMinCount($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &setFacetMissing($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &setFacetOffset($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &setFacetPrefix($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &setFacetSort($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setGroup($value)
    {
    }

    /**
     * @param mixed $percent
     */
    public function &setGroupCachePercent($percent)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setGroupFacet($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setGroupFormat($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setGroupLimit($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setGroupMain($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setGroupNGroups($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setGroupOffset($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setGroupTruncate($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setHighlight($value)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &setHighlightAlternateField($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &setHighlightFormatter($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &setHighlightFragmenter($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &setHighlightFragsize($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setHighlightHighlightMultiTerm($value)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &setHighlightMaxAlternateFieldLength($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setHighlightMaxAnalyzedChars($value)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &setHighlightMergeContiguous($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setHighlightRegexMaxAnalyzedChars($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setHighlightRegexPattern($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setHighlightRegexSlop($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setHighlightRequireFieldMatch($value)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &setHighlightSimplePost($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &setHighlightSimplePre($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $field_override
     */
    public function &setHighlightSnippets($value, $field_override = null)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setHighlightUsePhraseHighlighter($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setMlt($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setMltBoost($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setMltCount($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setMltMaxNumQueryTerms($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setMltMaxNumTokens($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setMltMaxWordLength($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setMltMinDocFrequency($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setMltMinTermFrequency($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setMltMinWordLength($value)
    {
    }

    /**
     * @param mixed $flag
     */
    public function &setOmitHeader($flag)
    {
    }

    /**
     * @param mixed $q
     */
    public function &setQuery($q)
    {
    }

    /**
     * @param mixed $rows
     */
    public function &setRows($rows)
    {
    }

    /**
     * @param mixed $flag
     */
    public function &setShowDebugInfo($flag)
    {
    }

    /**
     * @param mixed $start
     */
    public function &setStart($start)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setStats($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setTerms($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setTermsField($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setTermsIncludeLowerBound($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setTermsIncludeUpperBound($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setTermsLimit($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setTermsLowerBound($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setTermsMaxCount($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setTermsMinCount($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setTermsPrefix($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setTermsReturnRaw($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setTermsSort($value)
    {
    }

    /**
     * @param mixed $value
     */
    public function &setTermsUpperBound($value)
    {
    }

    /**
     * @param mixed $timeAllowed
     */
    public function &setTimeAllowed($timeAllowed)
    {
    }
}

/**
 * Represents a response to a query request.
 *
 * @since PECL solr >= 0.9.2
 *
 * @link http://www.php.net/manual/en/class.solrqueryresponse.php
 */
final class SolrQueryResponse extends SolrResponse
{
    public function __construct()
    {
    }

    public function __destruct()
    {
    }
}

/**
 * Represents a response from the Solr server.
 *
 * @since PECL solr >= 0.9.2
 *
 * @link http://www.php.net/manual/en/class.solrresponse.php
 */
abstract class SolrResponse
{
    public function getArrayResponse()
    {
    }

    public function getDigestedResponse()
    {
    }

    public function getHttpStatus()
    {
    }

    public function getHttpStatusMessage()
    {
    }

    public function getRawRequest()
    {
    }

    public function getRawRequestHeaders()
    {
    }

    public function getRawResponse()
    {
    }

    public function getRawResponseHeaders()
    {
    }

    public function getRequestUrl()
    {
    }

    public function getResponse()
    {
    }

    /**
     * @param mixed|null $parser_mode
     */
    public function setParseMode($parser_mode = null)
    {
    }

    public function success()
    {
    }
}

/**
 * An exception thrown when there is an error produced by the Solr Server itself.
 *
 * @since PECL Solr >= 1.1.0, >=2.0.0
 *
 * @link http://www.php.net/manual/en/class.solrserverexception.php
 */
class SolrServerException extends SolrException
{
    public function getInternalInfo()
    {
    }
}

/**
 * Represents a response to an update request.
 *
 * @since PECL solr >= 0.9.2
 *
 * @link http://www.php.net/manual/en/class.solrupdateresponse.php
 */
final class SolrUpdateResponse extends SolrResponse
{
    public function __construct()
    {
    }

    public function __destruct()
    {
    }
}

/**
 * Contains utility methods for retrieving the current extension version and preparing query phrases.
 *
 * @since PECL solr >= 0.9.2
 *
 * @link http://www.php.net/manual/en/class.solrutils.php
 */
abstract class SolrUtils
{
    /**
     * @param mixed $jsonResponse
     */
    public static function digestJsonResponse($jsonResponse)
    {
    }

    /**
     * @param mixed $xmlresponse
     * @param mixed|null $parse_mode
     */
    public static function digestXmlResponse($xmlresponse, $parse_mode = null)
    {
    }

    /**
     * @param mixed $str
     */
    public static function escapeQueryChars($str)
    {
    }

    public static function getSolrStats()
    {
    }

    public static function getSolrVersion()
    {
    }

    /**
     * @param mixed $str
     */
    public static function queryPhrase($str)
    {
    }
}

/**
 * Returns the current version of the Apache Solr extension
 *
 * @return string
 *
 * @since PECL solr >= 0.9.1
 *
 * @link http://www.php.net/manual/en/function.solr-get-version.php
 */
function solr_get_version(): string
{
}
