<?php
// Start of extension: solr
// - parsed on POSIX with PHP 5.6.34 (extension version 2.4.0)

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
    /**
     * @since PECL solr >= 0.9.2
     */
    public function __clone()
    {
    }

    /**
     * Constructor for the SolrClient object
     *
     * @param array $clientOptions
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclient.construct.php
     */
    public function __construct(array $clientOptions)
    {
    }

    /**
     * Destructor for SolrClient
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclient.destruct.php
     */
    public function __destruct()
    {
    }

    /**
     * @since PECL solr >= 0.9.2
     */
    public function __sleep()
    {
    }

    /**
     * @since PECL solr >= 0.9.2
     */
    public function __wakeup()
    {
    }

    /**
     * Adds a document to the index
     *
     * @param SolrInputDocument $doc
     * @param mixed|null $overwrite
     * @param mixed|null $commitWithin
     *
     * @return SolrUpdateResponse
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclient.adddocument.php
     */
    public function &addDocument(&$doc, $overwrite = null, $commitWithin = null)
    {
    }

    /**
     * Adds a collection of SolrInputDocument instances to the index
     *
     * @param array $docs
     * @param mixed|null $overwrite
     * @param mixed|null $commitWithin
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclient.adddocuments.php
     */
    public function &addDocuments(array &$docs, $overwrite = null, $commitWithin = null)
    {
    }

    /**
     * Finalizes all add/deletes made to the index
     *
     * @param mixed|null $softCommit
     * @param mixed|null $waitSearcher
     * @param mixed|null $expungeDeletes
     *
     * @return SolrUpdateResponse
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclient.commit.php
     */
    public function &commit($softCommit = null, $waitSearcher = null, $expungeDeletes = null)
    {
    }

    /**
     * Delete by Id
     *
     * @param mixed $id
     *
     * @return SolrUpdateResponse
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclient.deletebyid.php
     */
    public function &deleteById($id)
    {
    }

    /**
     * Deletes by Ids
     *
     * @param array $ids
     *
     * @return SolrUpdateResponse
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclient.deletebyids.php
     */
    public function &deleteByIds(array $ids)
    {
    }

    /**
     * Removes all documents matching any of the queries
     *
     * @param array $queries
     *
     * @return SolrUpdateResponse
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclient.deletebyqueries.php
     */
    public function &deleteByQueries(array $queries)
    {
    }

    /**
     * Deletes all documents matching the given query
     *
     * @param mixed $query
     *
     * @return SolrUpdateResponse
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclient.deletebyquery.php
     */
    public function &deleteByQuery($query)
    {
    }

    /**
     * Get Document By Id. Utilizes Solr Realtime Get (RTG)
     *
     * @param mixed $id
     *
     * @return SolrQueryResponse
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrclient.getbyid.php
     */
    public function &getById($id)
    {
    }

    /**
     * Get Documents by their Ids. Utilizes Solr Realtime Get (RTG)
     *
     * @param array $ids
     *
     * @return SolrQueryResponse
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrclient.getbyids.php
     */
    public function &getByIds(array $ids)
    {
    }

    /**
     * Returns the debug data for the last connection attempt
     *
     * @return string
     *
     * @since PECL solr >= 0.9.7
     *
     * @link http://www.php.net/manual/en/solrclient.getdebug.php
     */
    public function getDebug()
    {
    }

    /**
     * Returns the client options set internally
     *
     * @return array
     *
     * @since PECL solr >= 0.9.6
     *
     * @link http://www.php.net/manual/en/solrclient.getoptions.php
     */
    public function getOptions(): array
    {
    }

    /**
     * Defragments the index
     *
     * @param mixed|null $maxSegments
     * @param mixed|null $softCommit
     * @param mixed|null $waitSearcher
     *
     * @return SolrUpdateResponse
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclient.optimize.php
     */
    public function &optimize($maxSegments = null, $softCommit = null, $waitSearcher = null)
    {
    }

    /**
     * Checks if Solr server is still up
     *
     * @return SolrPingResponse
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclient.ping.php
     */
    public function &ping()
    {
    }

    /**
     * Sends a query to the server
     *
     * @param SolrParams $query
     *
     * @return SolrQueryResponse
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclient.query.php
     */
    public function &query(&$query)
    {
    }

    /**
     * Sends a raw update request
     *
     * @param mixed $raw_request
     *
     * @return SolrUpdateResponse
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclient.request.php
     */
    public function &request($raw_request)
    {
    }

    /**
     * Rollbacks all add/deletes made to the index since the last commit
     *
     * @return SolrUpdateResponse
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclient.rollback.php
     */
    public function &rollback()
    {
    }

    /**
     * Sets the response writer used to prepare the response from Solr
     *
     * @param mixed $responseWriter
     *
     * @return void
     *
     * @since PECL solr >= 0.9.11
     *
     * @link http://www.php.net/manual/en/solrclient.setresponsewriter.php
     */
    public function &setResponseWriter($responseWriter)
    {
    }

    /**
     * Changes the specified servlet type to a new value
     *
     * @param mixed $type
     * @param mixed $value
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclient.setservlet.php
     */
    public function setServlet($type, $value)
    {
    }

    /**
     * Retrieve Solr Server information
     *
     * @return void
     *
     * @since PECL solr >= 2.0.0
     *
     * @link http://www.php.net/manual/en/solrclient.system.php
     */
    public function &system()
    {
    }

    /**
     * Checks the threads status
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclient.threads.php
     */
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
    /**
     * Returns internal information where the Exception was thrown
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclientexception.getinternalinfo.php
     */
    public function getInternalInfo(): array
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
     * Constructor
     *
     * @param mixed|null $field
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrcollapsefunction.construct.php
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

    /**
     * Returns a string representing the constructed collapse function
     *
     * @return string
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrcollapsefunction.tostring.php
     */
    public function __toString()
    {
    }

    public function __wakeup()
    {
    }

    /**
     * Returns the field that is being collapsed on
     *
     * @return string
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrcollapsefunction.getfield.php
     */
    public function getField()
    {
    }

    /**
     * Returns collapse hint
     *
     * @return string
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrcollapsefunction.gethint.php
     */
    public function getHint()
    {
    }

    /**
     * Returns max parameter
     *
     * @return string
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrcollapsefunction.getmax.php
     */
    public function getMax()
    {
    }

    /**
     * Returns min parameter
     *
     * @return string
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrcollapsefunction.getmin.php
     */
    public function getMin()
    {
    }

    /**
     * Returns null policy
     *
     * @return string
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrcollapsefunction.getnullpolicy.php
     */
    public function getNullPolicy()
    {
    }

    /**
     * Returns size parameter
     *
     * @return int
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrcollapsefunction.getsize.php
     */
    public function getSize()
    {
    }

    /**
     * Sets the field to collapse on
     *
     * @param mixed $fieldName
     *
     * @return SolrCollapseFunction
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrcollapsefunction.setfield.php
     */
    public function setField($fieldName)
    {
    }

    /**
     * Sets collapse hint
     *
     * @param mixed $hint
     *
     * @return SolrCollapseFunction
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrcollapsefunction.sethint.php
     */
    public function setHint($hint)
    {
    }

    /**
     * Selects the group heads by the max value of a numeric field or function query
     *
     * @param mixed $max
     *
     * @return SolrCollapseFunction
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrcollapsefunction.setmax.php
     */
    public function setMax($max)
    {
    }

    /**
     * Sets the initial size of the collapse data structures when collapsing on a numeric field only
     *
     * @param mixed $min
     *
     * @return SolrCollapseFunction
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrcollapsefunction.setmin.php
     */
    public function setMin($min)
    {
    }

    /**
     * Sets the NULL Policy
     *
     * @param mixed $policy
     *
     * @return SolrCollapseFunction
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrcollapsefunction.setnullpolicy.php
     */
    public function setNullPolicy($policy)
    {
    }

    /**
     * Sets the initial size of the collapse data structures when collapsing on a numeric field only
     *
     * @param mixed $size
     *
     * @return SolrCollapseFunction
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrcollapsefunction.setsize.php
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
     * Class Constructor
     *
     * @param mixed|null $q
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.construct.php
     */
    public function __construct($q = null)
    {
    }

    /**
     * Adds a Phrase Bigram Field (pf2 parameter)
     *
     * @param mixed $field
     * @param mixed $boost
     * @param mixed|null $slop
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.addbigramphrasefield.php
     */
    public function addBigramPhraseField($field, $boost, $slop = null)
    {
    }

    /**
     * Adds a boost query field with value and optional boost (bq parameter)
     *
     * @param mixed $field
     * @param mixed $value
     * @param mixed|null $boost
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.addboostquery.php
     */
    public function addBoostQuery($field, $value, $boost = null)
    {
    }

    /**
     * Adds a Phrase Field (pf parameter)
     *
     * @param mixed $field
     * @param mixed $boost
     * @param mixed|null $slop
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.addphrasefield.php
     */
    public function addPhraseField($field, $boost, $slop = null)
    {
    }

    /**
     * Add a query field with optional boost (qf parameter)
     *
     * @param mixed $field
     * @param mixed|null $boost
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.addqueryfield.php
     */
    public function addQueryField($field, $boost = null)
    {
    }

    /**
     * Adds a Trigram Phrase Field (pf3 parameter)
     *
     * @param mixed $field
     * @param mixed $boost
     * @param mixed|null $slop
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.addtrigramphrasefield.php
     */
    public function addTrigramPhraseField($field, $boost, $slop = null)
    {
    }

    /**
     * Adds a field to User Fields Parameter (uf)
     *
     * @param mixed $field
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.adduserfield.php
     */
    public function addUserField($field)
    {
    }

    /**
     * Removes phrase bigram field (pf2 parameter)
     *
     * @param mixed $field
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.removebigramphrasefield.php
     */
    public function removeBigramPhraseField($field)
    {
    }

    /**
     * Removes a boost query partial by field name (bq)
     *
     * @param mixed $field
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.removeboostquery.php
     */
    public function removeBoostQuery($field)
    {
    }

    /**
     * Removes a Phrase Field (pf parameter)
     *
     * @param mixed $field
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.removephrasefield.php
     */
    public function removePhraseField($field)
    {
    }

    /**
     * Removes a Query Field (qf parameter)
     *
     * @param mixed $field
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.removequeryfield.php
     */
    public function removeQueryField($field)
    {
    }

    /**
     * Removes a Trigram Phrase Field (pf3 parameter)
     *
     * @param mixed $field
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.removetrigramphrasefield.php
     */
    public function removeTrigramPhraseField($field)
    {
    }

    /**
     * Removes a field from The User Fields Parameter (uf)
     *
     * @param mixed $field
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.removeuserfield.php
     */
    public function removeUserField($field)
    {
    }

    /**
     * Sets Bigram Phrase Fields and their boosts (and slops) using pf2 parameter
     *
     * @param mixed $fields
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.setbigramphrasefields.php
     */
    public function setBigramPhraseFields($fields)
    {
    }

    /**
     * Sets Bigram Phrase Slop (ps2 parameter)
     *
     * @param mixed $slop
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.setbigramphraseslop.php
     */
    public function setBigramPhraseSlop($slop)
    {
    }

    /**
     * Sets a Boost Function (bf parameter)
     *
     * @param mixed $function
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.setboostfunction.php
     */
    public function setBoostFunction($function)
    {
    }

    /**
     * Directly Sets Boost Query Parameter (bq)
     *
     * @param mixed $q
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.setboostquery.php
     */
    public function setBoostQuery($q)
    {
    }

    /**
     * Set Minimum "Should" Match (mm)
     *
     * @param mixed $value
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.setminimummatch.php
     */
    public function setMinimumMatch($value)
    {
    }

    /**
     * Sets Phrase Fields and their boosts (and slops) using pf2 parameter
     *
     * @param mixed $fields
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.setphrasefields.php
     */
    public function setPhraseFields($fields)
    {
    }

    /**
     * Sets the default slop on phrase queries (ps parameter)
     *
     * @param mixed $slop
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.setphraseslop.php
     */
    public function setPhraseSlop($slop)
    {
    }

    /**
     * Set Query Alternate (q.alt parameter)
     *
     * @param mixed $q
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.setqueryalt.php
     */
    public function setQueryAlt($q)
    {
    }

    /**
     * Specifies the amount of slop permitted on phrase queries explicitly included in the user's query string (qf parameter)
     *
     * @param mixed $slop
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.setqueryphraseslop.php
     */
    public function setQueryPhraseSlop($slop)
    {
    }

    /**
     * Sets Tie Breaker parameter (tie parameter)
     *
     * @param mixed $tieBreaker
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.settiebreaker.php
     */
    public function setTieBreaker($tieBreaker)
    {
    }

    /**
     * Directly Sets Trigram Phrase Fields (pf3 parameter)
     *
     * @param mixed $fields
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.settrigramphrasefields.php
     */
    public function setTrigramPhraseFields($fields)
    {
    }

    /**
     * Sets Trigram Phrase Slop (ps3 parameter)
     *
     * @param mixed $slop
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.settrigramphraseslop.php
     */
    public function setTrigramPhraseSlop($slop)
    {
    }

    /**
     * Sets User Fields parameter (uf)
     *
     * @param mixed $fields
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.setuserfields.php
     */
    public function setUserFields($fields)
    {
    }

    /**
     * Switch QueryParser to be DisMax Query Parser
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.usedismaxqueryparser.php
     */
    public function useDisMaxQueryParser()
    {
    }

    /**
     * Switch QueryParser to be EDisMax
     *
     * @return SolrDisMaxQuery
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.useedismaxqueryparser.php
     */
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
    /**
     * Creates a copy of a SolrDocument object
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.clone.php
     */
    public function __clone()
    {
    }

    /**
     * Constructor
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.construct.php
     */
    public function __construct()
    {
    }

    /**
     * Destructor
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.destruct.php
     */
    public function __destruct()
    {
    }

    /**
     * Access the field as a property
     *
     * @param mixed $fieldName
     *
     * @return SolrDocumentField
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.get.php
     */
    public function __get($fieldName)
    {
    }

    /**
     * Checks if a field exists
     *
     * @param mixed $fieldName
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.isset.php
     */
    public function __isset($fieldName)
    {
    }

    /**
     * Adds another field to the document
     *
     * @param mixed $fieldName
     * @param mixed $fieldValue
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.set.php
     */
    public function __set($fieldName, $fieldValue)
    {
    }

    /**
     * Removes a field from the document
     *
     * @param mixed $fieldName
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.unset.php
     */
    public function __unset($fieldName)
    {
    }

    /**
     * Adds a field to the document
     *
     * @param mixed $fieldName
     * @param mixed $fieldValue
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.addfield.php
     */
    public function addField($fieldName, $fieldValue)
    {
    }

    /**
     * Drops all the fields in the document
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.clear.php
     */
    public function clear()
    {
    }

    /**
     * Retrieves the current field
     *
     * @return SolrDocumentField
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.current.php
     */
    public function &current()
    {
    }

    /**
     * Removes a field from the document
     *
     * @param mixed $fieldName
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.deletefield.php
     */
    public function deleteField($fieldName)
    {
    }

    /**
     * Checks if a field exists in the document
     *
     * @param mixed $fieldName
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.fieldexists.php
     */
    public function fieldExists($fieldName)
    {
    }

    /**
     * Returns an array of child documents (SolrDocument)
     *
     * @return array
     *
     * @since PECL solr >= 2.3.0
     *
     * @link http://www.php.net/manual/en/solrdocument.getchilddocuments.php
     */
    public function getChildDocuments(): array
    {
    }

    /**
     * Returns the number of child documents
     *
     * @return int
     *
     * @since PECL solr >= 2.3.0
     *
     * @link http://www.php.net/manual/en/solrdocument.getchilddocumentscount.php
     */
    public function getChildDocumentsCount()
    {
    }

    /**
     * Retrieves a field by name
     *
     * @param mixed $fieldName
     *
     * @return SolrDocumentField
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.getfield.php
     */
    public function getField($fieldName)
    {
    }

    /**
     * Returns the number of fields in this document
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.getfieldcount.php
     */
    public function getFieldCount()
    {
    }

    /**
     * Returns an array of fields names in the document
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.getfieldnames.php
     */
    public function getFieldNames(): array
    {
    }

    /**
     * Returns a SolrInputDocument equivalent of the object
     *
     * @return SolrInputDocument
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.getinputdocument.php
     */
    public function &getInputDocument()
    {
    }

    /**
     * Checks whether the document has any child documents
     *
     * @return bool
     *
     * @since PECL solr >= 2.3.0
     *
     * @link http://www.php.net/manual/en/solrdocument.haschilddocuments.php
     */
    public function hasChildDocuments()
    {
    }

    /**
     * Retrieves the current key
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.key.php
     */
    public function key()
    {
    }

    /**
     * Merges source to the current SolrDocument
     *
     * @param SolrDocument $sourceDoc
     * @param mixed|null $overwrite
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.merge.php
     */
    public function merge(&$sourceDoc, $overwrite = null)
    {
    }

    /**
     * Moves the internal pointer to the next field
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.next.php
     */
    public function next()
    {
    }

    /**
     * Checks if a particular field exists
     *
     * @param mixed $fieldName
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.offsetexists.php
     */
    public function offsetExists($fieldName)
    {
    }

    /**
     * Retrieves a field
     *
     * @param mixed $fieldName
     *
     * @return SolrDocumentField
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.offsetget.php
     */
    public function offsetGet($fieldName)
    {
    }

    /**
     * Adds a field to the document
     *
     * @param mixed $fieldName
     * @param mixed $fieldValue
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.offsetset.php
     */
    public function offsetSet($fieldName, $fieldValue)
    {
    }

    /**
     * Removes a field
     *
     * @param mixed $fieldName
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.offsetunset.php
     */
    public function offsetUnset($fieldName)
    {
    }

    /**
     * This is an alias to SolrDocument::clear()
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.reset.php
     */
    public function reset()
    {
    }

    /**
     * Resets the internal pointer to the beginning
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.rewind.php
     */
    public function rewind()
    {
    }

    /**
     * Used for custom serialization
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.serialize.php
     */
    public function serialize()
    {
    }

    /**
     * Sorts the fields in the document
     *
     * @param mixed $sortOrderBy
     * @param mixed|null $sortDirection
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.sort.php
     */
    public function sort($sortOrderBy, $sortDirection = null)
    {
    }

    /**
     * Returns an array representation of the document
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.toarray.php
     */
    public function toArray(): array
    {
    }

    /**
     * Custom serialization of SolrDocument objects
     *
     * @param mixed $serialized
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.unserialize.php
     */
    public function unserialize($serialized)
    {
    }

    /**
     * Checks if the current position internally is still valid
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.valid.php
     */
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
    /**
     * Constructor
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocumentfield.construct.php
     */
    public function __construct()
    {
    }

    /**
     * Destructor
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocumentfield.destruct.php
     */
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
    /**
     * Returns internal information where the Exception was thrown
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrexception.getinternalinfo.php
     */
    public function getInternalInfo(): array
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
    /**
     * Constructor
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrgenericresponse.construct.php
     */
    public function __construct()
    {
    }

    /**
     * Destructor
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrgenericresponse.destruct.php
     */
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
    /**
     * Returns internal information where the Exception was thrown
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrillegalargumentexception.getinternalinfo.php
     */
    public function getInternalInfo(): array
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
    /**
     * Returns internal information where the Exception was thrown
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrillegaloperationexception.getinternalinfo.php
     */
    public function getInternalInfo(): array
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
    /**
     * Creates a copy of a SolrDocument
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.clone.php
     */
    public function __clone()
    {
    }

    /**
     * Constructor
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.construct.php
     */
    public function __construct()
    {
    }

    /**
     * Destructor
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.destruct.php
     */
    public function __destruct()
    {
    }

    /**
     * @since PECL solr >= 0.9.2
     */
    public function __sleep()
    {
    }

    /**
     * @since PECL solr >= 0.9.2
     */
    public function __wakeup()
    {
    }

    /**
     * Adds a child document for block indexing
     *
     * @param SolrInputDocument $child
     *
     * @return void
     *
     * @since PECL solr >= 2.3.0
     *
     * @link http://www.php.net/manual/en/solrinputdocument.addchilddocument.php
     */
    public function addChildDocument(&$child)
    {
    }

    /**
     * Adds an array of child documents
     *
     * @param array $docs
     *
     * @return void
     *
     * @since PECL solr >= 2.3.0
     *
     * @link http://www.php.net/manual/en/solrinputdocument.addchilddocuments.php
     */
    public function &addChildDocuments(array &$docs)
    {
    }

    /**
     * Adds a field to the document
     *
     * @param mixed $fieldName
     * @param mixed $fieldValue
     * @param mixed|null $fieldBoostValue
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.addfield.php
     */
    public function addField($fieldName, $fieldValue, $fieldBoostValue = null)
    {
    }

    /**
     * Resets the input document
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.clear.php
     */
    public function clear()
    {
    }

    /**
     * Removes a field from the document
     *
     * @param mixed $fieldName
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.deletefield.php
     */
    public function deleteField($fieldName)
    {
    }

    /**
     * Checks if a field exists
     *
     * @param mixed $fieldName
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.fieldexists.php
     */
    public function fieldExists($fieldName)
    {
    }

    /**
     * Retrieves the current boost value for the document
     *
     * @return float
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.getboost.php
     */
    public function getBoost()
    {
    }

    /**
     * Returns an array of child documents (SolrInputDocument)
     *
     * @return array
     *
     * @since PECL solr >= 2.3.0
     *
     * @link http://www.php.net/manual/en/solrinputdocument.getchilddocuments.php
     */
    public function getChildDocuments(): array
    {
    }

    /**
     * Returns the number of child documents
     *
     * @return int
     *
     * @since PECL solr >= 2.3.0
     *
     * @link http://www.php.net/manual/en/solrinputdocument.getchilddocumentscount.php
     */
    public function getChildDocumentsCount()
    {
    }

    /**
     * Retrieves a field by name
     *
     * @param mixed $fieldName
     *
     * @return SolrDocumentField
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.getfield.php
     */
    public function getField($fieldName)
    {
    }

    /**
     * Retrieves the boost value for a particular field
     *
     * @param mixed $fieldName
     *
     * @return float
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.getfieldboost.php
     */
    public function getFieldBoost($fieldName)
    {
    }

    /**
     * Returns the number of fields in the document
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.getfieldcount.php
     */
    public function getFieldCount()
    {
    }

    /**
     * Returns an array containing all the fields in the document
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.getfieldnames.php
     */
    public function getFieldNames(): array
    {
    }

    /**
     * Returns true if the document has any child documents
     *
     * @return bool
     *
     * @since PECL solr >= 2.3.0
     *
     * @link http://www.php.net/manual/en/solrinputdocument.haschilddocuments.php
     */
    public function hasChildDocuments()
    {
    }

    /**
     * Merges one input document into another
     *
     * @param SolrInputDocument $sourceDoc
     * @param mixed|null $overwrite
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.merge.php
     */
    public function merge(&$sourceDoc, $overwrite = null)
    {
    }

    /**
     * This is an alias of SolrInputDocument::clear
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.reset.php
     */
    public function reset()
    {
    }

    /**
     * Sets the boost value for this document
     *
     * @param mixed $documentBoostValue
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.setboost.php
     */
    public function setBoost($documentBoostValue)
    {
    }

    /**
     * Sets the index-time boost value for a field
     *
     * @param mixed $fieldName
     * @param mixed $fieldBoostValue
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.setfieldboost.php
     */
    public function setFieldBoost($fieldName, $fieldBoostValue)
    {
    }

    /**
     * Sorts the fields within the document
     *
     * @param mixed $sortOrderBy
     * @param mixed|null $sortDirection
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.sort.php
     */
    public function sort($sortOrderBy, $sortDirection = null)
    {
    }

    /**
     * Returns an array representation of the input document
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.toarray.php
     */
    public function toArray(): array
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
    /**
     * Constructor
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrmodifiableparams.construct.php
     */
    public function __construct()
    {
    }

    /**
     * Destructor
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrmodifiableparams.destruct.php
     */
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
    /**
     * Creates Solr object
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrobject.construct.php
     */
    public function __construct()
    {
    }

    /**
     * Destructor
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrobject.destruct.php
     */
    public function __destruct()
    {
    }

    /**
     * Returns an array of all the names of the properties
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrobject.getpropertynames.php
     */
    public function getPropertyNames(): array
    {
    }

    /**
     * Checks if the property exists
     *
     * @param mixed $property_name
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrobject.offsetexists.php
     */
    public function offsetExists($property_name)
    {
    }

    /**
     * Used to retrieve a property
     *
     * @param mixed $property_name
     *
     * @return mixed
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrobject.offsetget.php
     */
    public function offsetGet($property_name)
    {
    }

    /**
     * Sets the value for a property
     *
     * @param mixed $property_name
     * @param mixed $property_value
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrobject.offsetset.php
     */
    public function offsetSet($property_name, $property_value)
    {
    }

    /**
     * Unsets the value for the property
     *
     * @param mixed $property_name
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrobject.offsetunset.php
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

    /**
     * @since PECL solr >= 0.9.2
     */
    public function __toString()
    {
    }

    /**
     * This is an alias for SolrParams::addParam
     *
     * @param mixed $name
     * @param mixed $value
     *
     * @return SolrParams
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrparams.add.php
     */
    public function &add($name, $value)
    {
    }

    /**
     * Adds a parameter to the object
     *
     * @param mixed $name
     * @param mixed $value
     *
     * @return SolrParams
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrparams.addparam.php
     */
    public function &addParam($name, $value)
    {
    }

    /**
     * This is an alias for SolrParams::getParam
     *
     * @param mixed $param_name
     *
     * @return mixed
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrparams.get.php
     */
    public function get($param_name)
    {
    }

    /**
     * Returns a parameter value
     *
     * @param mixed $param_name
     *
     * @return mixed
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrparams.getparam.php
     */
    public function getParam($param_name)
    {
    }

    /**
     * Returns an array of non URL-encoded parameters
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrparams.getparams.php
     */
    public function getParams(): array
    {
    }

    /**
     * Returns an array of URL-encoded parameters
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrparams.getpreparedparams.php
     */
    public function getPreparedParams(): array
    {
    }

    /**
     * Used for custom serialization
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrparams.serialize.php
     */
    public function serialize()
    {
    }

    /**
     * An alias of SolrParams::setParam
     *
     * @param mixed $name
     * @param mixed $value
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrparams.set.php
     */
    public function &set($name, $value)
    {
    }

    /**
     * Sets the parameter to the specified value
     *
     * @param mixed $name
     * @param mixed $value
     *
     * @return SolrParams
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrparams.setparam.php
     */
    public function &setParam($name, $value)
    {
    }

    /**
     * Returns all the name-value pair parameters in the object
     *
     * @param mixed|null $url_encode
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrparams.tostring.php
     */
    public function toString($url_encode = null)
    {
    }

    /**
     * Used for custom serialization
     *
     * @param mixed $serialized
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrparams.unserialize.php
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
    /**
     * Constructor
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrpingresponse.construct.php
     */
    public function __construct()
    {
    }

    /**
     * Destructor
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrpingresponse.destruct.php
     */
    public function __destruct()
    {
    }

    /**
     * Returns the response from the server
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrpingresponse.getresponse.php
     */
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
     * Constructor
     *
     * @param mixed|null $q
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.construct.php
     */
    public function __construct($q = null)
    {
    }

    /**
     * Destructor
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.destruct.php
     */
    public function __destruct()
    {
    }

    /**
     * Overrides main filter query, determines which documents to include in the main group
     *
     * @param mixed $fq
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.addexpandfilterquery.php
     */
    public function &addExpandFilterQuery($fq)
    {
    }

    /**
     * Orders the documents within the expanded groups (expand.sort parameter)
     *
     * @param mixed $field
     * @param mixed|null $order
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.addexpandsortfield.php
     */
    public function &addExpandSortField($field, $order = null)
    {
    }

    /**
     * Maps to facet.date
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.addfacetdatefield.php
     */
    public function &addFacetDateField($value)
    {
    }

    /**
     * Adds another facet.date.other parameter
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.addfacetdateother.php
     */
    public function &addFacetDateOther($value, $field_override = null)
    {
    }

    /**
     * Adds another field to the facet
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.addfacetfield.php
     */
    public function &addFacetField($value)
    {
    }

    /**
     * Adds a facet query
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.addfacetquery.php
     */
    public function &addFacetQuery($value)
    {
    }

    /**
     * Specifies which fields to return in the result
     *
     * @param mixed $field
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.addfield.php
     */
    public function &addField($field)
    {
    }

    /**
     * Specifies a filter query
     *
     * @param mixed $fq
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.addfilterquery.php
     */
    public function &addFilterQuery($fq)
    {
    }

    /**
     * Add a field to be used to group results
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.addgroupfield.php
     */
    public function &addGroupField($value)
    {
    }

    /**
     * Allows grouping results based on the unique values of a function query (group.func parameter)
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.addgroupfunction.php
     */
    public function &addGroupFunction($value)
    {
    }

    /**
     * Allows grouping of documents that match the given query
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.addgroupquery.php
     */
    public function &addGroupQuery($value)
    {
    }

    /**
     * Add a group sort field (group.sort parameter)
     *
     * @param mixed $field
     * @param mixed|null $order
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.addgroupsortfield.php
     */
    public function &addGroupSortField($field, $order = null)
    {
    }

    /**
     * Maps to hl.fl
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.addhighlightfield.php
     */
    public function &addHighlightField($value)
    {
    }

    /**
     * Sets a field to use for similarity
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.addmltfield.php
     */
    public function &addMltField($value)
    {
    }

    /**
     * Maps to mlt.qf
     *
     * @param mixed $field
     * @param mixed $boost
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.addmltqueryfield.php
     */
    public function &addMltQueryField($field, $boost)
    {
    }

    /**
     * Used to control how the results should be sorted
     *
     * @param mixed $field
     * @param mixed|null $order
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.addsortfield.php
     */
    public function &addSortField($field, $order = null)
    {
    }

    /**
     * Requests a return of sub results for values within the given facet
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.addstatsfacet.php
     */
    public function &addStatsFacet($value)
    {
    }

    /**
     * Maps to stats.field parameter
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.addstatsfield.php
     */
    public function &addStatsField($value)
    {
    }

    /**
     * Collapses the result set to a single document per group
     *
     * @param SolrCollapseFunction $collapseFunction
     *
     * @return SolrQuery
     *
     * @link http://www.php.net/manual/en/solrquery.collapse.php
     */
    public function &collapse(&$collapseFunction)
    {
    }

    /**
     * Returns true if group expanding is enabled
     *
     * @return bool
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.getexpand.php
     */
    public function getExpand()
    {
    }

    /**
     * Returns the expand filter queries
     *
     * @return array
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.getexpandfilterqueries.php
     */
    public function getExpandFilterQueries(): array
    {
    }

    /**
     * Returns the expand query expand.q parameter
     *
     * @return array
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.getexpandquery.php
     */
    public function getExpandQuery(): array
    {
    }

    /**
     * Returns The number of rows to display in each group (expand.rows)
     *
     * @return int
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.getexpandrows.php
     */
    public function getExpandRows()
    {
    }

    /**
     * Returns an array of fields
     *
     * @return array
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.getexpandsortfields.php
     */
    public function getExpandSortFields(): array
    {
    }

    /**
     * Returns the value of the facet parameter
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfacet.php
     */
    public function getFacet()
    {
    }

    /**
     * Returns the value for the facet.date.end parameter
     *
     * @param mixed|null $field_override
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfacetdateend.php
     */
    public function getFacetDateEnd($field_override = null)
    {
    }

    /**
     * Returns all the facet.date fields
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfacetdatefields.php
     */
    public function getFacetDateFields(): array
    {
    }

    /**
     * Returns the value of the facet.date.gap parameter
     *
     * @param mixed|null $field_override
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfacetdategap.php
     */
    public function getFacetDateGap($field_override = null)
    {
    }

    /**
     * Returns the value of the facet.date.hardend parameter
     *
     * @param mixed|null $field_override
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfacetdatehardend.php
     */
    public function getFacetDateHardEnd($field_override = null)
    {
    }

    /**
     * Returns the value for the facet.date.other parameter
     *
     * @param mixed|null $field_override
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfacetdateother.php
     */
    public function getFacetDateOther($field_override = null): array
    {
    }

    /**
     * Returns the lower bound for the first date range for all date faceting on this field
     *
     * @param mixed|null $field_override
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfacetdatestart.php
     */
    public function getFacetDateStart($field_override = null)
    {
    }

    /**
     * Returns all the facet fields
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfacetfields.php
     */
    public function getFacetFields(): array
    {
    }

    /**
     * Returns the maximum number of constraint counts that should be returned for the facet fields
     *
     * @param mixed|null $field_override
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfacetlimit.php
     */
    public function getFacetLimit($field_override = null)
    {
    }

    /**
     * Returns the value of the facet.method parameter
     *
     * @param mixed|null $field_override
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfacetmethod.php
     */
    public function getFacetMethod($field_override = null)
    {
    }

    /**
     * Returns the minimum counts for facet fields should be included in the response
     *
     * @param mixed|null $field_override
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfacetmincount.php
     */
    public function getFacetMinCount($field_override = null)
    {
    }

    /**
     * Returns the current state of the facet.missing parameter
     *
     * @param mixed|null $field_override
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfacetmissing.php
     */
    public function getFacetMissing($field_override = null)
    {
    }

    /**
     * Returns an offset into the list of constraints to be used for pagination
     *
     * @param mixed|null $field_override
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfacetoffset.php
     */
    public function getFacetOffset($field_override = null)
    {
    }

    /**
     * Returns the facet prefix
     *
     * @param mixed|null $field_override
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfacetprefix.php
     */
    public function getFacetPrefix($field_override = null)
    {
    }

    /**
     * Returns all the facet queries
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfacetqueries.php
     */
    public function getFacetQueries(): array
    {
    }

    /**
     * Returns the facet sort type
     *
     * @param mixed|null $field_override
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfacetsort.php
     */
    public function getFacetSort($field_override = null)
    {
    }

    /**
     * Returns the list of fields that will be returned in the response
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfields.php
     */
    public function getFields(): array
    {
    }

    /**
     * Returns an array of filter queries
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfilterqueries.php
     */
    public function getFilterQueries(): array
    {
    }

    /**
     * Returns true if grouping is enabled
     *
     * @return bool
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.getgroup.php
     */
    public function getGroup()
    {
    }

    /**
     * Returns group cache percent value
     *
     * @return int
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.getgroupcachepercent.php
     */
    public function getGroupCachePercent()
    {
    }

    /**
     * Returns the group.facet parameter value
     *
     * @return bool
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.getgroupfacet.php
     */
    public function getGroupFacet()
    {
    }

    /**
     * Returns group fields (group.field parameter values)
     *
     * @return array
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.getgroupfields.php
     */
    public function getGroupFields(): array
    {
    }

    /**
     * Returns the group.format value
     *
     * @return string
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.getgroupformat.php
     */
    public function getGroupFormat()
    {
    }

    /**
     * Returns group functions (group.func parameter values)
     *
     * @return array
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.getgroupfunctions.php
     */
    public function getGroupFunctions(): array
    {
    }

    /**
     * Returns the group.limit value
     *
     * @return int
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.getgrouplimit.php
     */
    public function getGroupLimit()
    {
    }

    /**
     * Returns the group.main value
     *
     * @return bool
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.getgroupmain.php
     */
    public function getGroupMain()
    {
    }

    /**
     * Returns the group.ngroups value
     *
     * @return bool
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.getgroupngroups.php
     */
    public function getGroupNGroups()
    {
    }

    /**
     * Returns the group.offset value
     *
     * @return int
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.getgroupoffset.php
     */
    public function getGroupOffset()
    {
    }

    /**
     * Returns all the group.query parameter values
     *
     * @return array
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.getgroupqueries.php
     */
    public function getGroupQueries(): array
    {
    }

    /**
     * Returns the group.sort value
     *
     * @return array
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.getgroupsortfields.php
     */
    public function getGroupSortFields(): array
    {
    }

    /**
     * Returns the group.truncate value
     *
     * @return bool
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.getgrouptruncate.php
     */
    public function getGroupTruncate()
    {
    }

    /**
     * Returns the state of the hl parameter
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gethighlight.php
     */
    public function getHighlight()
    {
    }

    /**
     * Returns the highlight field to use as backup or default
     *
     * @param mixed|null $field_override
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gethighlightalternatefield.php
     */
    public function getHighlightAlternateField($field_override = null)
    {
    }

    /**
     * Returns all the fields that Solr should generate highlighted snippets for
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gethighlightfields.php
     */
    public function getHighlightFields(): array
    {
    }

    /**
     * Returns the formatter for the highlighted output
     *
     * @param mixed|null $field_override
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gethighlightformatter.php
     */
    public function getHighlightFormatter($field_override = null)
    {
    }

    /**
     * Returns the text snippet generator for highlighted text
     *
     * @param mixed|null $field_override
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gethighlightfragmenter.php
     */
    public function getHighlightFragmenter($field_override = null)
    {
    }

    /**
     * Returns the number of characters of fragments to consider for highlighting
     *
     * @param mixed|null $field_override
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gethighlightfragsize.php
     */
    public function getHighlightFragsize($field_override = null)
    {
    }

    /**
     * Returns whether or not to enable highlighting for range/wildcard/fuzzy/prefix queries
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gethighlighthighlightmultiterm.php
     */
    public function getHighlightHighlightMultiTerm()
    {
    }

    /**
     * Returns the maximum number of characters of the field to return
     *
     * @param mixed|null $field_override
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gethighlightmaxalternatefieldlength.php
     */
    public function getHighlightMaxAlternateFieldLength($field_override = null)
    {
    }

    /**
     * Returns the maximum number of characters into a document to look for suitable snippets
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gethighlightmaxanalyzedchars.php
     */
    public function getHighlightMaxAnalyzedChars()
    {
    }

    /**
     * Returns whether or not the collapse contiguous fragments into a single fragment
     *
     * @param mixed|null $field_override
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gethighlightmergecontiguous.php
     */
    public function getHighlightMergeContiguous($field_override = null)
    {
    }

    /**
     * Returns the maximum number of characters from a field when using the regex fragmenter
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gethighlightregexmaxanalyzedchars.php
     */
    public function getHighlightRegexMaxAnalyzedChars()
    {
    }

    /**
     * Returns the regular expression for fragmenting
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gethighlightregexpattern.php
     */
    public function getHighlightRegexPattern()
    {
    }

    /**
     * Returns the deviation factor from the ideal fragment size
     *
     * @return float
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gethighlightregexslop.php
     */
    public function getHighlightRegexSlop()
    {
    }

    /**
     * Returns if a field will only be highlighted if the query matched in this particular field
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gethighlightrequirefieldmatch.php
     */
    public function getHighlightRequireFieldMatch()
    {
    }

    /**
     * Returns the text which appears after a highlighted term
     *
     * @param mixed|null $field_override
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gethighlightsimplepost.php
     */
    public function getHighlightSimplePost($field_override = null)
    {
    }

    /**
     * Returns the text which appears before a highlighted term
     *
     * @param mixed|null $field_override
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gethighlightsimplepre.php
     */
    public function getHighlightSimplePre($field_override = null)
    {
    }

    /**
     * Returns the maximum number of highlighted snippets to generate per field
     *
     * @param mixed|null $field_override
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gethighlightsnippets.php
     */
    public function getHighlightSnippets($field_override = null)
    {
    }

    /**
     * Returns the state of the hl.usePhraseHighlighter parameter
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gethighlightusephrasehighlighter.php
     */
    public function getHighlightUsePhraseHighlighter()
    {
    }

    /**
     * Returns whether or not MoreLikeThis results should be enabled
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getmlt.php
     */
    public function getMlt()
    {
    }

    /**
     * Returns whether or not the query will be boosted by the interesting term relevance
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getmltboost.php
     */
    public function getMltBoost()
    {
    }

    /**
     * Returns the number of similar documents to return for each result
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getmltcount.php
     */
    public function getMltCount()
    {
    }

    /**
     * Returns all the fields to use for similarity
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getmltfields.php
     */
    public function getMltFields(): array
    {
    }

    /**
     * Returns the maximum number of query terms that will be included in any generated query
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getmltmaxnumqueryterms.php
     */
    public function getMltMaxNumQueryTerms()
    {
    }

    /**
     * Returns the maximum number of tokens to parse in each document field that is not stored with TermVector support
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getmltmaxnumtokens.php
     */
    public function getMltMaxNumTokens()
    {
    }

    /**
     * Returns the maximum word length above which words will be ignored
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getmltmaxwordlength.php
     */
    public function getMltMaxWordLength()
    {
    }

    /**
     * Returns the treshold frequency at which words will be ignored which do not occur in at least this many docs
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getmltmindocfrequency.php
     */
    public function getMltMinDocFrequency()
    {
    }

    /**
     * Returns the frequency below which terms will be ignored in the source document
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getmltmintermfrequency.php
     */
    public function getMltMinTermFrequency()
    {
    }

    /**
     * Returns the minimum word length below which words will be ignored
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getmltminwordlength.php
     */
    public function getMltMinWordLength()
    {
    }

    /**
     * Returns the query fields and their boosts
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getmltqueryfields.php
     */
    public function getMltQueryFields(): array
    {
    }

    /**
     * Returns the main query
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getquery.php
     */
    public function getQuery()
    {
    }

    /**
     * Returns the maximum number of documents
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getrows.php
     */
    public function getRows()
    {
    }

    /**
     * Returns all the sort fields
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getsortfields.php
     */
    public function getSortFields(): array
    {
    }

    /**
     * Returns the offset in the complete result set
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getstart.php
     */
    public function getStart()
    {
    }

    /**
     * Returns whether or not stats is enabled
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getstats.php
     */
    public function getStats()
    {
    }

    /**
     * Returns all the stats facets that were set
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getstatsfacets.php
     */
    public function getStatsFacets(): array
    {
    }

    /**
     * Returns all the statistics fields
     *
     * @return array
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getstatsfields.php
     */
    public function getStatsFields(): array
    {
    }

    /**
     * Returns whether or not the TermsComponent is enabled
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getterms.php
     */
    public function getTerms()
    {
    }

    /**
     * Returns the field from which the terms are retrieved
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gettermsfield.php
     */
    public function getTermsField()
    {
    }

    /**
     * Returns whether or not to include the lower bound in the result set
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gettermsincludelowerbound.php
     */
    public function getTermsIncludeLowerBound()
    {
    }

    /**
     * Returns whether or not to include the upper bound term in the result set
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gettermsincludeupperbound.php
     */
    public function getTermsIncludeUpperBound()
    {
    }

    /**
     * Returns the maximum number of terms Solr should return
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gettermslimit.php
     */
    public function getTermsLimit()
    {
    }

    /**
     * Returns the term to start at
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gettermslowerbound.php
     */
    public function getTermsLowerBound()
    {
    }

    /**
     * Returns the maximum document frequency
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gettermsmaxcount.php
     */
    public function getTermsMaxCount()
    {
    }

    /**
     * Returns the minimum document frequency to return in order to be included
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gettermsmincount.php
     */
    public function getTermsMinCount()
    {
    }

    /**
     * Returns the term prefix
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gettermsprefix.php
     */
    public function getTermsPrefix()
    {
    }

    /**
     * Whether or not to return raw characters
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gettermsreturnraw.php
     */
    public function getTermsReturnRaw()
    {
    }

    /**
     * Returns an integer indicating how terms are sorted
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gettermssort.php
     */
    public function getTermsSort()
    {
    }

    /**
     * Returns the term to stop at
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gettermsupperbound.php
     */
    public function getTermsUpperBound()
    {
    }

    /**
     * Returns the time in milliseconds allowed for the query to finish
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gettimeallowed.php
     */
    public function getTimeAllowed()
    {
    }

    /**
     * Removes an expand filter query
     *
     * @param mixed $fq
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.removeexpandfilterquery.php
     */
    public function &removeExpandFilterQuery($fq)
    {
    }

    /**
     * Removes an expand sort field from the expand.sort parameter
     *
     * @param mixed $field
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.removeexpandsortfield.php
     */
    public function &removeExpandSortField($field)
    {
    }

    /**
     * Removes one of the facet date fields
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.removefacetdatefield.php
     */
    public function &removeFacetDateField($value)
    {
    }

    /**
     * Removes one of the facet.date.other parameters
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.removefacetdateother.php
     */
    public function &removeFacetDateOther($value, $field_override = null)
    {
    }

    /**
     * Removes one of the facet.date parameters
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.removefacetfield.php
     */
    public function &removeFacetField($value)
    {
    }

    /**
     * Removes one of the facet.query parameters
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.removefacetquery.php
     */
    public function &removeFacetQuery($value)
    {
    }

    /**
     * Removes a field from the list of fields
     *
     * @param mixed $field
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.removefield.php
     */
    public function &removeField($field)
    {
    }

    /**
     * Removes a filter query
     *
     * @param mixed $fq
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.removefilterquery.php
     */
    public function &removeFilterQuery($fq)
    {
    }

    /**
     * Removes one of the fields used for highlighting
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.removehighlightfield.php
     */
    public function &removeHighlightField($value)
    {
    }

    /**
     * Removes one of the moreLikeThis fields
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.removemltfield.php
     */
    public function &removeMltField($value)
    {
    }

    /**
     * Removes one of the moreLikeThis query fields
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.removemltqueryfield.php
     */
    public function &removeMltQueryField($value)
    {
    }

    /**
     * Removes one of the sort fields
     *
     * @param mixed $field
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.removesortfield.php
     */
    public function &removeSortField($field)
    {
    }

    /**
     * Removes one of the stats.facet parameters
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.removestatsfacet.php
     */
    public function &removeStatsFacet($value)
    {
    }

    /**
     * Removes one of the stats.field parameters
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.removestatsfield.php
     */
    public function &removeStatsField($value)
    {
    }

    /**
     * Toggles the echoHandler parameter
     *
     * @param mixed $flag
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setechohandler.php
     */
    public function &setEchoHandler($flag)
    {
    }

    /**
     * Determines what kind of parameters to include in the response
     *
     * @param mixed $type
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setechoparams.php
     */
    public function &setEchoParams($type)
    {
    }

    /**
     * Enables/Disables the Expand Component
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.setexpand.php
     */
    public function &setExpand($value)
    {
    }

    /**
     * Sets the expand.q parameter
     *
     * @param mixed $q
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.setexpandquery.php
     */
    public function &setExpandQuery($q)
    {
    }

    /**
     * Sets the number of rows to display in each group (expand.rows). Server Default 5
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.setexpandrows.php
     */
    public function &setExpandRows($value)
    {
    }

    /**
     * Sets the explainOther common query parameter
     *
     * @param mixed $flag
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setexplainother.php
     */
    public function &setExplainOther($flag)
    {
    }

    /**
     * Maps to the facet parameter. Enables or disables facetting
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacet.php
     */
    public function &setFacet($value)
    {
    }

    /**
     * Maps to facet.date.end
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacetdateend.php
     */
    public function &setFacetDateEnd($value, $field_override = null)
    {
    }

    /**
     * Maps to facet.date.gap
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacetdategap.php
     */
    public function &setFacetDateGap($value, $field_override = null)
    {
    }

    /**
     * Maps to facet.date.hardend
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacetdatehardend.php
     */
    public function &setFacetDateHardEnd($value, $field_override = null)
    {
    }

    /**
     * Maps to facet.date.start
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacetdatestart.php
     */
    public function &setFacetDateStart($value, $field_override = null)
    {
    }

    /**
     * Sets the minimum document frequency used for determining term count
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacetenumcachemindefaultfrequency.php
     */
    public function &setFacetEnumCacheMinDefaultFrequency($value, $field_override = null)
    {
    }

    /**
     * Maps to facet.limit
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacetlimit.php
     */
    public function &setFacetLimit($value, $field_override = null)
    {
    }

    /**
     * Specifies the type of algorithm to use when faceting a field
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacetmethod.php
     */
    public function &setFacetMethod($value, $field_override = null)
    {
    }

    /**
     * Maps to facet.mincount
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacetmincount.php
     */
    public function &setFacetMinCount($value, $field_override = null)
    {
    }

    /**
     * Maps to facet.missing
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacetmissing.php
     */
    public function &setFacetMissing($value, $field_override = null)
    {
    }

    /**
     * Sets the offset into the list of constraints to allow for pagination
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacetoffset.php
     */
    public function &setFacetOffset($value, $field_override = null)
    {
    }

    /**
     * Specifies a string prefix with which to limits the terms on which to facet
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacetprefix.php
     */
    public function &setFacetPrefix($value, $field_override = null)
    {
    }

    /**
     * Determines the ordering of the facet field constraints
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacetsort.php
     */
    public function &setFacetSort($value, $field_override = null)
    {
    }

    /**
     * Enable/Disable result grouping (group parameter)
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.setgroup.php
     */
    public function &setGroup($value)
    {
    }

    /**
     * Enables caching for result grouping
     *
     * @param mixed $percent
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.setgroupcachepercent.php
     */
    public function &setGroupCachePercent($percent)
    {
    }

    /**
     * Sets group.facet parameter
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.setgroupfacet.php
     */
    public function &setGroupFacet($value)
    {
    }

    /**
     * Sets the group format, result structure (group.format parameter)
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.setgroupformat.php
     */
    public function &setGroupFormat($value)
    {
    }

    /**
     * Specifies the number of results to return for each group. The server default value is 1
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.setgrouplimit.php
     */
    public function &setGroupLimit($value)
    {
    }

    /**
     * If true, the result of the first field grouping command is used as the main result list in the response, using group.format=simple
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.setgroupmain.php
     */
    public function &setGroupMain($value)
    {
    }

    /**
     * If true, Solr includes the number of groups that have matched the query in the results
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.setgroupngroups.php
     */
    public function &setGroupNGroups($value)
    {
    }

    /**
     * Sets the group.offset parameter
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.setgroupoffset.php
     */
    public function &setGroupOffset($value)
    {
    }

    /**
     * If true, facet counts are based on the most relevant document of each group matching the query
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.setgrouptruncate.php
     */
    public function &setGroupTruncate($value)
    {
    }

    /**
     * Enables or disables highlighting
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlight.php
     */
    public function &setHighlight($value)
    {
    }

    /**
     * Specifies the backup field to use
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightalternatefield.php
     */
    public function &setHighlightAlternateField($value, $field_override = null)
    {
    }

    /**
     * Specify a formatter for the highlight output
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightformatter.php
     */
    public function &setHighlightFormatter($value, $field_override = null)
    {
    }

    /**
     * Sets a text snippet generator for highlighted text
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightfragmenter.php
     */
    public function &setHighlightFragmenter($value, $field_override = null)
    {
    }

    /**
     * The size of fragments to consider for highlighting
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightfragsize.php
     */
    public function &setHighlightFragsize($value, $field_override = null)
    {
    }

    /**
     * Use SpanScorer to highlight phrase terms
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlighthighlightmultiterm.php
     */
    public function &setHighlightHighlightMultiTerm($value)
    {
    }

    /**
     * Sets the maximum number of characters of the field to return
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightmaxalternatefieldlength.php
     */
    public function &setHighlightMaxAlternateFieldLength($value, $field_override = null)
    {
    }

    /**
     * Specifies the number of characters into a document to look for suitable snippets
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightmaxanalyzedchars.php
     */
    public function &setHighlightMaxAnalyzedChars($value)
    {
    }

    /**
     * Whether or not to collapse contiguous fragments into a single fragment
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightmergecontiguous.php
     */
    public function &setHighlightMergeContiguous($value, $field_override = null)
    {
    }

    /**
     * Specify the maximum number of characters to analyze
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightregexmaxanalyzedchars.php
     */
    public function &setHighlightRegexMaxAnalyzedChars($value)
    {
    }

    /**
     * Specify the regular expression for fragmenting
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightregexpattern.php
     */
    public function &setHighlightRegexPattern($value)
    {
    }

    /**
     * Sets the factor by which the regex fragmenter can stray from the ideal fragment size
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightregexslop.php
     */
    public function &setHighlightRegexSlop($value)
    {
    }

    /**
     * Require field matching during highlighting
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightrequirefieldmatch.php
     */
    public function &setHighlightRequireFieldMatch($value)
    {
    }

    /**
     * Sets the text which appears after a highlighted term
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightsimplepost.php
     */
    public function &setHighlightSimplePost($value, $field_override = null)
    {
    }

    /**
     * Sets the text which appears before a highlighted term
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightsimplepre.php
     */
    public function &setHighlightSimplePre($value, $field_override = null)
    {
    }

    /**
     * Sets the maximum number of highlighted snippets to generate per field
     *
     * @param mixed $value
     * @param mixed|null $field_override
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightsnippets.php
     */
    public function &setHighlightSnippets($value, $field_override = null)
    {
    }

    /**
     * Whether to highlight phrase terms only when they appear within the query phrase
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightusephrasehighlighter.php
     */
    public function &setHighlightUsePhraseHighlighter($value)
    {
    }

    /**
     * Enables or disables moreLikeThis
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setmlt.php
     */
    public function &setMlt($value)
    {
    }

    /**
     * Set if the query will be boosted by the interesting term relevance
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setmltboost.php
     */
    public function &setMltBoost($value)
    {
    }

    /**
     * Set the number of similar documents to return for each result
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setmltcount.php
     */
    public function &setMltCount($value)
    {
    }

    /**
     * Sets the maximum number of query terms included
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setmltmaxnumqueryterms.php
     */
    public function &setMltMaxNumQueryTerms($value)
    {
    }

    /**
     * Specifies the maximum number of tokens to parse
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setmltmaxnumtokens.php
     */
    public function &setMltMaxNumTokens($value)
    {
    }

    /**
     * Sets the maximum word length
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setmltmaxwordlength.php
     */
    public function &setMltMaxWordLength($value)
    {
    }

    /**
     * Sets the mltMinDoc frequency
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setmltmindocfrequency.php
     */
    public function &setMltMinDocFrequency($value)
    {
    }

    /**
     * Sets the frequency below which terms will be ignored in the source docs
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setmltmintermfrequency.php
     */
    public function &setMltMinTermFrequency($value)
    {
    }

    /**
     * Sets the minimum word length
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setmltminwordlength.php
     */
    public function &setMltMinWordLength($value)
    {
    }

    /**
     * Exclude the header from the returned results
     *
     * @param mixed $flag
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setomitheader.php
     */
    public function &setOmitHeader($flag)
    {
    }

    /**
     * Sets the search query
     *
     * @param mixed $q
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setquery.php
     */
    public function &setQuery($q)
    {
    }

    /**
     * Specifies the maximum number of rows to return in the result
     *
     * @param mixed $rows
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setrows.php
     */
    public function &setRows($rows)
    {
    }

    /**
     * Flag to show debug information
     *
     * @param mixed $flag
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setshowdebuginfo.php
     */
    public function &setShowDebugInfo($flag)
    {
    }

    /**
     * Specifies the number of rows to skip
     *
     * @param mixed $start
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setstart.php
     */
    public function &setStart($start)
    {
    }

    /**
     * Enables or disables the Stats component
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setstats.php
     */
    public function &setStats($value)
    {
    }

    /**
     * Enables or disables the TermsComponent
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setterms.php
     */
    public function &setTerms($value)
    {
    }

    /**
     * Sets the name of the field to get the Terms from
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermsfield.php
     */
    public function &setTermsField($value)
    {
    }

    /**
     * Include the lower bound term in the result set
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermsincludelowerbound.php
     */
    public function &setTermsIncludeLowerBound($value)
    {
    }

    /**
     * Include the upper bound term in the result set
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermsincludeupperbound.php
     */
    public function &setTermsIncludeUpperBound($value)
    {
    }

    /**
     * Sets the maximum number of terms to return
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermslimit.php
     */
    public function &setTermsLimit($value)
    {
    }

    /**
     * Specifies the Term to start from
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermslowerbound.php
     */
    public function &setTermsLowerBound($value)
    {
    }

    /**
     * Sets the maximum document frequency
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermsmaxcount.php
     */
    public function &setTermsMaxCount($value)
    {
    }

    /**
     * Sets the minimum document frequency
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermsmincount.php
     */
    public function &setTermsMinCount($value)
    {
    }

    /**
     * Restrict matches to terms that start with the prefix
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermsprefix.php
     */
    public function &setTermsPrefix($value)
    {
    }

    /**
     * Return the raw characters of the indexed term
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermsreturnraw.php
     */
    public function &setTermsReturnRaw($value)
    {
    }

    /**
     * Specifies how to sort the returned terms
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermssort.php
     */
    public function &setTermsSort($value)
    {
    }

    /**
     * Sets the term to stop at
     *
     * @param mixed $value
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermsupperbound.php
     */
    public function &setTermsUpperBound($value)
    {
    }

    /**
     * The time allowed for search to finish
     *
     * @param mixed $timeAllowed
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settimeallowed.php
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
    /**
     * Constructor
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrqueryresponse.construct.php
     */
    public function __construct()
    {
    }

    /**
     * Destructor
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrqueryresponse.destruct.php
     */
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

    /**
     * Returns the XML response as serialized PHP data
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrresponse.getdigestedresponse.php
     */
    public function getDigestedResponse()
    {
    }

    /**
     * Returns the HTTP status of the response
     *
     * @return int
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrresponse.gethttpstatus.php
     */
    public function getHttpStatus()
    {
    }

    /**
     * Returns more details on the HTTP status
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrresponse.gethttpstatusmessage.php
     */
    public function getHttpStatusMessage()
    {
    }

    /**
     * Returns the raw request sent to the Solr server
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrresponse.getrawrequest.php
     */
    public function getRawRequest()
    {
    }

    /**
     * Returns the raw request headers sent to the Solr server
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrresponse.getrawrequestheaders.php
     */
    public function getRawRequestHeaders()
    {
    }

    /**
     * Returns the raw response from the server
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrresponse.getrawresponse.php
     */
    public function getRawResponse()
    {
    }

    /**
     * Returns the raw response headers from the server
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrresponse.getrawresponseheaders.php
     */
    public function getRawResponseHeaders()
    {
    }

    /**
     * Returns the full URL the request was sent to
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrresponse.getrequesturl.php
     */
    public function getRequestUrl()
    {
    }

    /**
     * Returns a SolrObject representing the XML response from the server
     *
     * @return SolrObject
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrresponse.getresponse.php
     */
    public function getResponse()
    {
    }

    /**
     * Sets the parse mode
     *
     * @param mixed|null $parser_mode
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrresponse.setparsemode.php
     */
    public function setParseMode($parser_mode = null)
    {
    }

    /**
     * Was the request a success
     *
     * @return bool
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrresponse.success.php
     */
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
    /**
     * Returns internal information where the Exception was thrown
     *
     * @return array
     *
     * @since PECL solr >= 1.1.0, >=2.0.0
     *
     * @link http://www.php.net/manual/en/solrserverexception.getinternalinfo.php
     */
    public function getInternalInfo(): array
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
    /**
     * Constructor
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrupdateresponse.construct.php
     */
    public function __construct()
    {
    }

    /**
     * Destructor
     *
     * @return void
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrupdateresponse.destruct.php
     */
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
     * Parses an response XML string into a SolrObject
     *
     * @param mixed $xmlresponse
     * @param mixed|null $parse_mode
     *
     * @return SolrObject
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrutils.digestxmlresponse.php
     */
    public static function digestXmlResponse($xmlresponse, $parse_mode = null)
    {
    }

    /**
     * Escapes a lucene query string
     *
     * @param mixed $str
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrutils.escapequerychars.php
     */
    public static function escapeQueryChars($str)
    {
    }

    public static function getSolrStats()
    {
    }

    /**
     * Returns the current version of the Solr extension
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrutils.getsolrversion.php
     */
    public static function getSolrVersion()
    {
    }

    /**
     * Prepares a phrase from an unescaped lucene string
     *
     * @param mixed $str
     *
     * @return string
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrutils.queryphrase.php
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
function solr_get_version()
{
}
