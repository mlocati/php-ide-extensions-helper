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
     * @var string
     */
    const DEFAULT_PING_SERVLET = 'admin/ping';

    /**
     * @var string
     */
    const DEFAULT_SEARCH_SERVLET = 'select';

    /**
     * @var string
     */
    const DEFAULT_SYSTEM_SERVLET = 'admin/system';

    /**
     * @var string
     */
    const DEFAULT_TERMS_SERVLET = 'terms';

    /**
     * @var string
     */
    const DEFAULT_THREADS_SERVLET = 'admin/threads';

    /**
     * @var string
     */
    const DEFAULT_UPDATE_SERVLET = 'update';

    /**
     * @var int
     */
    const PING_SERVLET_TYPE = 8;

    /**
     * @var int
     */
    const SEARCH_SERVLET_TYPE = 1;

    /**
     * @var int
     */
    const SYSTEM_SERVLET_TYPE = 32;

    /**
     * @var int
     */
    const TERMS_SERVLET_TYPE = 16;

    /**
     * @var int
     */
    const THREADS_SERVLET_TYPE = 4;

    /**
     * @var int
     */
    const UPDATE_SERVLET_TYPE = 2;

    /**
     * @var int
     */
    private $_hashtable_index = 0;

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
     * @param SolrInputDocument $doc The SolrInputDocument instance.
     * @param bool|null $overwrite Whether to overwrite existing document or not. If <code>FALSE</code> there will be duplicates (several documents with the same ID).
     * @param int|null $commitWithin Number of milliseconds within which to auto commit this document. Available since Solr 1.4 . Default (0) means disabled.
     *
     * @return SolrUpdateResponse Returns a <code>SolrUpdateResponse</code> object or throws an Exception on failure.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclient.adddocument.php
     */
    public function &addDocument(SolrInputDocument &$doc, $overwrite = true, $commitWithin = 0)
    {
    }

    /**
     * Adds a collection of SolrInputDocument instances to the index
     *
     * @param array $docs An array containing the collection of SolrInputDocument instances. This array must be an actual variable.
     * @param bool|null $overwrite Whether to overwrite existing documents or not. If <code>FALSE</code> there will be duplicates (several documents with the same ID).
     * @param int|null $commitWithin Number of milliseconds within which to auto commit this document. Available since Solr 1.4 . Default (0) means disabled.
     *
     * @return void Returns a <code>SolrUpdateResponse</code> object or throws an exception on failure.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclient.adddocuments.php
     */
    public function &addDocuments(array &$docs, $overwrite = true, $commitWithin = 0)
    {
    }

    /**
     * Finalizes all add/deletes made to the index
     *
     * @param bool|null $softCommit This will refresh the 'view' of the index in a more performant manner, but without "on-disk" guarantees. (Solr4.0+)
     * @param bool|null $waitSearcher block until a new searcher is opened and registered as the main query searcher, making the changes visible.
     * @param bool|null $expungeDeletes Merge segments with deletes away. (Solr1.4+)
     *
     * @return SolrUpdateResponse Returns a <code>SolrUpdateResponse</code> object on success or throws an exception on failure.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclient.commit.php
     */
    public function &commit($softCommit = false, $waitSearcher = true, $expungeDeletes = false)
    {
    }

    /**
     * Delete by Id
     *
     * @param string $id The value of the uniqueKey field declared in the schema
     *
     * @return SolrUpdateResponse Returns a <code>SolrUpdateResponse</code> on success and throws an exception on failure.
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
     * @param array $ids An array of IDs representing the uniqueKey field declared in the schema for each document to be deleted. This must be an actual php variable.
     *
     * @return SolrUpdateResponse Returns a <code>SolrUpdateResponse</code> on success and throws an exception on failure.
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
     * @param array $queries The array of queries. This must be an actual php variable.
     *
     * @return SolrUpdateResponse Returns a SolrUpdateResponse on success and throws a SolrClientException on failure.
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
     * @param string $query The query
     *
     * @return SolrUpdateResponse Returns a <code>SolrUpdateResponse</code> on success and throws an exception on failure.
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
     * @param string $id Document ID
     *
     * @return SolrQueryResponse <code>SolrQueryResponse</code>
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
     * @param array $ids Document ids
     *
     * @return SolrQueryResponse <code>SolrQueryResponse</code>
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
     * @return string Returns a string on success and null if there is nothing to return.
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
     * @return array Returns an array containing all the options for the SolrClient object set internally.
     *
     * @since PECL solr >= 0.9.6
     *
     * @link http://www.php.net/manual/en/solrclient.getoptions.php
     */
    public function getOptions()
    {
    }

    /**
     * Defragments the index
     *
     * @param int|null $maxSegments Optimizes down to at most this number of segments. Since Solr 1.3
     * @param bool|null $softCommit This will refresh the 'view' of the index in a more performant manner, but without "on-disk" guarantees. (Solr4.0+)
     * @param bool|null $waitSearcher Block until a new searcher is opened and registered as the main query searcher, making the changes visible.
     *
     * @return SolrUpdateResponse Returns a SolrUpdateResponse on success or throws an exception on failure.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclient.optimize.php
     */
    public function &optimize($maxSegments = 1, $softCommit = true, $waitSearcher = true)
    {
    }

    /**
     * Checks if Solr server is still up
     *
     * @return SolrPingResponse Returns a <code>SolrPingResponse</code> object on success and throws an exception on failure.
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
     * @param SolrParams $query A <code>SolrParams</code> object. It is recommended to use <code>SolrQuery</code> for advanced queries.
     *
     * @return SolrQueryResponse Returns a <code>SolrQueryResponse</code> object on success and throws an exception on failure.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclient.query.php
     */
    public function &query(SolrParams &$query)
    {
    }

    /**
     * Sends a raw update request
     *
     * @param string $raw_request An XML string with the raw request to the server.
     *
     * @return SolrUpdateResponse Returns a <code>SolrUpdateResponse</code> on success. Throws an exception on failure.
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
     * @return SolrUpdateResponse Returns a SolrUpdateResponse on success or throws a SolrClientException on failure.
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
     * @param string $responseWriter One of the following:
     *
     * @return void No value is returned.
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
     * @param int $type One of the following :
     * @param string $value The new value for the servlet
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @return void Returns a <code>SolrGenericResponse</code> object on success.
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
     * @return void Returns a SolrGenericResponse object.
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
     * @return array Returns an array containing internal information where the error was thrown. Used only for debugging by extension developers.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrclientexception.getinternalinfo.php
     */
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
     * @var string
     */
    const NULLPOLICY_COLLAPSE = 'collapse';

    /**
     * @var string
     */
    const NULLPOLICY_EXPAND = 'expand';

    /**
     * @var string
     */
    const NULLPOLICY_IGNORE = 'ignore';

    /**
     * @var int
     */
    protected $_hashtable_index = 0;

    /**
     * Constructor
     *
     * @param string $field The field name to collapse on.
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
     * @param string $fieldName
     *
     * @return SolrCollapseFunction <code>SolrCollapseFunction</code>
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
     * @param string $hint Currently there is only one hint available "top_fc", which stands for top level FieldCache
     *
     * @return SolrCollapseFunction <code>SolrCollapseFunction</code>
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
     * @param string $max
     *
     * @return SolrCollapseFunction <code>SolrCollapseFunction</code>
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
     * @param string $min
     *
     * @return SolrCollapseFunction <code>SolrCollapseFunction</code>
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
     * @param string $nullPolicy
     *
     * @return SolrCollapseFunction <code>SolrCollapseFunction</code>
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrcollapsefunction.setnullpolicy.php
     */
    public function setNullPolicy($nullPolicy)
    {
    }

    /**
     * Sets the initial size of the collapse data structures when collapsing on a numeric field only
     *
     * @param int $size
     *
     * @return SolrCollapseFunction <code>SolrCollapseFunction</code>
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
     * @param mixed $q
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.construct.php
     */
    public function __construct($q = null)
    {
    }

    /**
     * Adds a Phrase Bigram Field (pf2 parameter)
     *
     * @param string $field
     * @param string $boost
     * @param string $slop
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.addbigramphrasefield.php
     */
    public function addBigramPhraseField($field, $boost, $slop = null)
    {
    }

    /**
     * Adds a boost query field with value and optional boost (bq parameter)
     *
     * @param string $field
     * @param string $value
     * @param string $boost
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.addboostquery.php
     */
    public function addBoostQuery($field, $value, $boost = null)
    {
    }

    /**
     * Adds a Phrase Field (pf parameter)
     *
     * @param string $field field name
     * @param string $boost
     * @param string $slop
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.addphrasefield.php
     */
    public function addPhraseField($field, $boost, $slop = null)
    {
    }

    /**
     * Add a query field with optional boost (qf parameter)
     *
     * @param string $field field name
     * @param string $boost Boost value. Boosts documents with matching terms.
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.addqueryfield.php
     */
    public function addQueryField($field, $boost = null)
    {
    }

    /**
     * Adds a Trigram Phrase Field (pf3 parameter)
     *
     * @param string $field Field Name
     * @param string $boost Field Boost
     * @param string $slop Field Slop
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.addtrigramphrasefield.php
     */
    public function addTrigramPhraseField($field, $boost, $slop = null)
    {
    }

    /**
     * Adds a field to User Fields Parameter (uf)
     *
     * @param string $field Field Name
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.adduserfield.php
     */
    public function addUserField($field)
    {
    }

    /**
     * Removes phrase bigram field (pf2 parameter)
     *
     * @param string $field The Field Name
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.removebigramphrasefield.php
     */
    public function removeBigramPhraseField($field)
    {
    }

    /**
     * Removes a boost query partial by field name (bq)
     *
     * @param string $field Field Name
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.removeboostquery.php
     */
    public function removeBoostQuery($field)
    {
    }

    /**
     * Removes a Phrase Field (pf parameter)
     *
     * @param string $field Field Name
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.removephrasefield.php
     */
    public function removePhraseField($field)
    {
    }

    /**
     * Removes a Query Field (qf parameter)
     *
     * @param string $field Field Name
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.removequeryfield.php
     */
    public function removeQueryField($field)
    {
    }

    /**
     * Removes a Trigram Phrase Field (pf3 parameter)
     *
     * @param string $field Field Name
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.removetrigramphrasefield.php
     */
    public function removeTrigramPhraseField($field)
    {
    }

    /**
     * Removes a field from The User Fields Parameter (uf)
     *
     * @param string $field Field Name
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.removeuserfield.php
     */
    public function removeUserField($field)
    {
    }

    /**
     * Sets Bigram Phrase Fields and their boosts (and slops) using pf2 parameter
     *
     * @param string $fields Fields boosts (slops)
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.setbigramphrasefields.php
     */
    public function setBigramPhraseFields($fields)
    {
    }

    /**
     * Sets Bigram Phrase Slop (ps2 parameter)
     *
     * @param string $slop
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.setbigramphraseslop.php
     */
    public function setBigramPhraseSlop($slop)
    {
    }

    /**
     * Sets a Boost Function (bf parameter)
     *
     * @param string $function
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.setboostfunction.php
     */
    public function setBoostFunction($function)
    {
    }

    /**
     * Directly Sets Boost Query Parameter (bq)
     *
     * @param string $q query
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.setboostquery.php
     */
    public function setBoostQuery($q)
    {
    }

    /**
     * Set Minimum "Should" Match (mm)
     *
     * @param string $value Minimum match value/expression
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.setminimummatch.php
     */
    public function setMinimumMatch($value)
    {
    }

    /**
     * Sets Phrase Fields and their boosts (and slops) using pf2 parameter
     *
     * @param string $fields Fields, boosts [, slops]
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.setphrasefields.php
     */
    public function setPhraseFields($fields)
    {
    }

    /**
     * Sets the default slop on phrase queries (ps parameter)
     *
     * @param string $slop
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.setphraseslop.php
     */
    public function setPhraseSlop($slop)
    {
    }

    /**
     * Set Query Alternate (q.alt parameter)
     *
     * @param string $q Query String
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.setqueryalt.php
     */
    public function setQueryAlt($q)
    {
    }

    /**
     * Specifies the amount of slop permitted on phrase queries explicitly included in the user's query string (qf parameter)
     *
     * @param string $slop Amount of slop
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.setqueryphraseslop.php
     */
    public function setQueryPhraseSlop($slop)
    {
    }

    /**
     * Sets Tie Breaker parameter (tie parameter)
     *
     * @param string $tieBreaker The <code>tie</code> parameter specifies a float value (which should be something much less than 1) to use as tiebreaker in DisMax queries.
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.settiebreaker.php
     */
    public function setTieBreaker($tieBreaker)
    {
    }

    /**
     * Directly Sets Trigram Phrase Fields (pf3 parameter)
     *
     * @param string $fields Trigram Phrase Fields
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.settrigramphrasefields.php
     */
    public function setTrigramPhraseFields($fields)
    {
    }

    /**
     * Sets Trigram Phrase Slop (ps3 parameter)
     *
     * @param string $slop Phrase slop
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.settrigramphraseslop.php
     */
    public function setTrigramPhraseSlop($slop)
    {
    }

    /**
     * Sets User Fields parameter (uf)
     *
     * @param string $fields Fields names separated by space
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.setuserfields.php
     */
    public function setUserFields($fields)
    {
    }

    /**
     * Switch QueryParser to be DisMax Query Parser
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
     *
     * @link http://www.php.net/manual/en/solrdismaxquery.usedismaxqueryparser.php
     */
    public function useDisMaxQueryParser()
    {
    }

    /**
     * Switch QueryParser to be EDisMax
     *
     * @return SolrDisMaxQuery <code>SolrDisMaxQuery</code>
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
     * @var int
     */
    const SORT_ASC = 1;

    /**
     * @var int
     */
    const SORT_DEFAULT = 1;

    /**
     * @var int
     */
    const SORT_DESC = 2;

    /**
     * @var int
     */
    const SORT_FIELD_BOOST_VALUE = 4;

    /**
     * @var int
     */
    const SORT_FIELD_NAME = 1;

    /**
     * @var int
     */
    const SORT_FIELD_VALUE_COUNT = 2;

    /**
     * @var int
     */
    private $_hashtable_index = 0;

    /**
     * Creates a copy of a SolrDocument object
     *
     * @return void None.
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
     * @param string $fieldName The name of the field.
     *
     * @return SolrDocumentField Returns a SolrDocumentField instance.
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
     * @param string $fieldName Name of the field.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @param string $fieldName Name of the field.
     * @param string $fieldValue Field value.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @param string $fieldName The name of the field.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @param string $fieldName The name of the field
     * @param string $fieldValue The value of the field.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @return SolrDocumentField Returns the field
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
     * @param string $fieldName Name of the field
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @param string $fieldName The name of the field.
     *
     * @return bool Returns <code>TRUE</code> if the field is present and <code>FALSE</code> if it does not.
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
    public function getChildDocuments()
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
     * @param string $fieldName Name of the field.
     *
     * @return SolrDocumentField Returns a SolrDocumentField on success and <code>FALSE</code> on failure.
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
     * @return int Returns an integer on success and <code>FALSE</code> on failure.
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
     * @return array Returns an array containing the names of the fields in this document.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.getfieldnames.php
     */
    public function getFieldNames()
    {
    }

    /**
     * Returns a SolrInputDocument equivalent of the object
     *
     * @return SolrInputDocument Returns a SolrInputDocument on success and <code>NULL</code> on failure.
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
     * @return string Returns the current key.
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
     * @param SolrDocument $sourceDoc The source document.
     * @param bool|null $overwrite If this is <code>TRUE</code> then fields with the same name in the destination document will be overwritten.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.merge.php
     */
    public function merge(SolrDocument &$sourceDoc, $overwrite = true)
    {
    }

    /**
     * Moves the internal pointer to the next field
     *
     * @return void This method has no return value.
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
     * @param string $fieldName The name of the field.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @param string $fieldName The name of the field.
     *
     * @return SolrDocumentField Returns a SolrDocumentField object.
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
     * @param string $fieldName The name of the field.
     * @param string $fieldValue The value for this field.
     *
     * @return void Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @param string $fieldName The name of the field.
     *
     * @return void No return value.
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
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @return void This method has no return value.
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
     * @return string Returns a string representing the serialized Solr document.
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
     * @param int $sortOrderBy The sort criteria.
     * @param int|null $sortDirection The sort direction.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.sort.php
     */
    public function sort($sortOrderBy, $sortDirection = SolrDocument::SORT_ASC)
    {
    }

    /**
     * Returns an array representation of the document
     *
     * @return array Returns an array representation of the document.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrdocument.toarray.php
     */
    public function toArray()
    {
    }

    /**
     * Custom serialization of SolrDocument objects
     *
     * @param string $serialized An XML representation of the document.
     *
     * @return void None.
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
     * @return bool Returns <code>TRUE</code> on success and <code>FALSE</code> if the current position is no longer valid.
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
     * @var int
     */
    public $boost = 0;

    /**
     * @var string
     */
    public $name = ' ';

    /**
     * @var mixed
     */
    public $values;

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
     * @var string
     */
    protected $sourcefile = '/tmp/pear/temp/solr/src/php5/solr_functions_helpers.c';

    /**
     * @var int
     */
    protected $sourceline = 107;

    /**
     * @var string
     */
    protected $zif_name = 'solr_exception_register_class_properties';

    /**
     * Returns internal information where the Exception was thrown
     *
     * @return array Returns an array containing internal information where the error was thrown. Used only for debugging by extension developers.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrexception.getinternalinfo.php
     */
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
     * @return array Returns an array containing internal information where the error was thrown. Used only for debugging by extension developers.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrillegalargumentexception.getinternalinfo.php
     */
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
    /**
     * Returns internal information where the Exception was thrown
     *
     * @return array Returns an array containing internal information where the error was thrown. Used only for debugging by extension developers.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrillegaloperationexception.getinternalinfo.php
     */
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
    /**
     * @var int
     */
    const SORT_ASC = 1;

    /**
     * @var int
     */
    const SORT_DEFAULT = 1;

    /**
     * @var int
     */
    const SORT_DESC = 2;

    /**
     * @var int
     */
    const SORT_FIELD_BOOST_VALUE = 4;

    /**
     * @var int
     */
    const SORT_FIELD_NAME = 1;

    /**
     * @var int
     */
    const SORT_FIELD_VALUE_COUNT = 2;

    /**
     * @var int
     */
    private $_hashtable_index = 0;

    /**
     * Creates a copy of a SolrDocument
     *
     * @return void Creates a new SolrInputDocument instance.
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
     * @param SolrInputDocument $child A <code>SolrInputDocument</code> object.
     *
     * @return void
     *
     * @since PECL solr >= 2.3.0
     *
     * @link http://www.php.net/manual/en/solrinputdocument.addchilddocument.php
     */
    public function addChildDocument(SolrInputDocument &$child)
    {
    }

    /**
     * Adds an array of child documents
     *
     * @param array $docs An <code>array</code> of <code>SolrInputDocument</code> objects.
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
     * @param string $fieldName The name of the field
     * @param string $fieldValue The value for the field.
     * @param float|null $fieldBoostValue The index time boost for the field. Though this cannot be negative, you can still pass values less than 1.0 but they must be greater than zero.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.addfield.php
     */
    public function addField($fieldName, $fieldValue, $fieldBoostValue = 0.0)
    {
    }

    /**
     * Resets the input document
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @param string $fieldName The name of the field.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @param string $fieldName Name of the field.
     *
     * @return bool Returns <code>TRUE</code> if the field was found and <code>FALSE</code> if it was not found.
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
     * @return float Returns the boost value on success and <code>FALSE</code> on failure.
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
    public function getChildDocuments()
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
     * @param string $fieldName The name of the field.
     *
     * @return SolrDocumentField Returns a SolrDocumentField object on success and <code>FALSE</code> on failure.
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
     * @param string $fieldName The name of the field.
     *
     * @return float Returns the boost value for the field or <code>FALSE</code> if there was an error.
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
     * @return int Returns an integer on success or <code>FALSE</code> on failure.
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
     * @return array Returns an array on success and <code>FALSE</code> on failure.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.getfieldnames.php
     */
    public function getFieldNames()
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
     * @param SolrInputDocument $sourceDoc The source document.
     * @param bool|null $overwrite If this is <code>TRUE</code> it will replace matching fields in the destination document.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure. In the future, this will be modified to return the number of fields in the new document.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.merge.php
     */
    public function merge(SolrInputDocument &$sourceDoc, $overwrite = true)
    {
    }

    /**
     * This is an alias of SolrInputDocument::clear
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @param float $documentBoostValue The index-time boost value for this document.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @param string $fieldName The name of the field.
     * @param float $fieldBoostValue The index time boost value.
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
     * @param int $sortOrderBy The sort criteria
     * @param int|null $sortDirection The sort direction
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.sort.php
     */
    public function sort($sortOrderBy, $sortDirection = SolrInputDocument::SORT_ASC)
    {
    }

    /**
     * Returns an array representation of the input document
     *
     * @return array Returns an array containing the fields. It returns <code>FALSE</code> on failure.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrinputdocument.toarray.php
     */
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
     * @return array Returns an array.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrobject.getpropertynames.php
     */
    public function getPropertyNames()
    {
    }

    /**
     * Checks if the property exists
     *
     * @param string $property_name The name of the property.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
     * @param string $property_name Name of the property.
     *
     * @return mixed Returns the property value.
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
     * @param string $property_name The name of the property.
     * @param string $property_value The new value.
     *
     * @return void None.
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
     * @param string $property_name The name of the property.
     *
     * @return void Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
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
    /**
     * @var int
     */
    protected $_hashtable_index = 0;

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
     * @param string $name The name of the parameter
     * @param string $value The value of the parameter
     *
     * @return SolrParams Returns a SolrParams instance on success
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
     * @param string $name Name of parameter
     * @param string $value Value of parameter
     *
     * @return SolrParams Returns a SolrParam object on success and <code>FALSE</code> on failure.
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
     * @param string $param_name Then name of the parameter
     *
     * @return mixed Returns an array or string depending on the type of parameter
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
     * @param string $param_name The name of the parameter
     *
     * @return mixed Returns a string or an array depending on the type of the parameter
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
     * @return array Returns an array of non URL-encoded parameters
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrparams.getparams.php
     */
    public function getParams()
    {
    }

    /**
     * Returns an array of URL-encoded parameters
     *
     * @return array Returns an array on URL-encoded parameters
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrparams.getpreparedparams.php
     */
    public function getPreparedParams()
    {
    }

    /**
     * Used for custom serialization
     *
     * @return string Used for custom serialization
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
     * @param string $name Then name of the parameter
     * @param string $value The parameter value
     *
     * @return void Returns an instance of the SolrParams object on success
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
     * @param string $name Name of the parameter
     * @param string $value Value of the parameter
     *
     * @return SolrParams Returns a SolrParam object on success and <code>FALSE</code> on value.
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
     * @param bool|null $url_encode Whether to return URL-encoded values
     *
     * @return string Returns a string on success and <code>FALSE</code> on failure.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrparams.tostring.php
     */
    public function toString($url_encode = false)
    {
    }

    /**
     * Used for custom serialization
     *
     * @param string $serialized The serialized representation of the object
     *
     * @return void None
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
     * @return string Returns an empty string.
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
     * @var int
     */
    const FACET_SORT_COUNT = 1;

    /**
     * @var int
     */
    const FACET_SORT_INDEX = 0;

    /**
     * @var int
     */
    const ORDER_ASC = 0;

    /**
     * @var int
     */
    const ORDER_DESC = 1;

    /**
     * @var int
     */
    const TERMS_SORT_COUNT = 1;

    /**
     * @var int
     */
    const TERMS_SORT_INDEX = 0;

    /**
     * Constructor
     *
     * @param mixed $q
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
     * @param string $fq
     *
     * @return SolrQuery <code>SolrQuery</code>
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
     * @param string $field field name
     * @param string $order Order ASC/DESC, utilizes SolrQuery::ORDER_* constants.
     *
     * @return SolrQuery <code>SolrQuery</code>
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
     * @param string $dateField The name of the date field.
     *
     * @return SolrQuery Returns a SolrQuery object.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.addfacetdatefield.php
     */
    public function &addFacetDateField($dateField)
    {
    }

    /**
     * Adds another facet.date.other parameter
     *
     * @param string $value The value to use.
     * @param string $field_override The field name for the override.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
     * @param string $field The name of the field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.addfacetfield.php
     */
    public function &addFacetField($field)
    {
    }

    /**
     * Adds a facet query
     *
     * @param string $facetQuery The facet query
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.addfacetquery.php
     */
    public function &addFacetQuery($facetQuery)
    {
    }

    /**
     * Specifies which fields to return in the result
     *
     * @param string $field The name of the field
     *
     * @return SolrQuery Returns the current SolrQuery object
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
     * @param string $fq The filter query
     *
     * @return SolrQuery Returns the current SolrQuery object.
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
     * @param string $value
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
     * @param string $value
     *
     * @return SolrQuery <code>SolrQuery</code>
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
     * @param string $value
     *
     * @return SolrQuery <code>SolrQuery</code>
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
     * @param string $field Field name
     * @param int $order Order ASC/DESC, utilizes SolrQuery::ORDER_* constants
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
     * @param string $field Name of the field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.addhighlightfield.php
     */
    public function &addHighlightField($field)
    {
    }

    /**
     * Sets a field to use for similarity
     *
     * @param string $field The name of the field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.addmltfield.php
     */
    public function &addMltField($field)
    {
    }

    /**
     * Maps to mlt.qf
     *
     * @param string $field The name of the field
     * @param float $boost Its boost value
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
     * @param string $field The name of the field
     * @param int|null $order The sort direction. This should be either SolrQuery::ORDER_ASC or SolrQuery::ORDER_DESC.
     *
     * @return SolrQuery Returns the current SolrQuery object.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.addsortfield.php
     */
    public function &addSortField($field, $order = SolrQuery::ORDER_DESC)
    {
    }

    /**
     * Requests a return of sub results for values within the given facet
     *
     * @param string $field The name of the field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.addstatsfacet.php
     */
    public function &addStatsFacet($field)
    {
    }

    /**
     * Maps to stats.field parameter
     *
     * @param string $field The name of the field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.addstatsfield.php
     */
    public function &addStatsField($field)
    {
    }

    /**
     * Collapses the result set to a single document per group
     *
     * @param SolrCollapseFunction $collapseFunction
     *
     * @return SolrQuery Returns the current <code>SolrQuery</code> object
     *
     * @link http://www.php.net/manual/en/solrquery.collapse.php
     */
    public function &collapse(SolrCollapseFunction &$collapseFunction)
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
    public function getExpandFilterQueries()
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
    public function getExpandQuery()
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
    public function getExpandSortFields()
    {
    }

    /**
     * Returns the value of the facet parameter
     *
     * @return bool Returns a boolean on success and <code>NULL</code> if not set
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
     * @param string $field_override The name of the field
     *
     * @return string Returns a string on success and <code>NULL</code> if not set
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
     * @return array Returns all the facet.date fields as an array or <code>NULL</code> if none was set
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfacetdatefields.php
     */
    public function getFacetDateFields()
    {
    }

    /**
     * Returns the value of the facet.date.gap parameter
     *
     * @param string $field_override The name of the field
     *
     * @return string Returns a string on success and <code>NULL</code> if not set
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
     * @param string $field_override The name of the field
     *
     * @return string Returns a string on success and <code>NULL</code> if not set
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
     * @param string $field_override The name of the field
     *
     * @return array Returns a string on success and <code>NULL</code> if not set.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfacetdateother.php
     */
    public function getFacetDateOther($field_override = null)
    {
    }

    /**
     * Returns the lower bound for the first date range for all date faceting on this field
     *
     * @param string $field_override The name of the field
     *
     * @return string Returns a string on success and <code>NULL</code> if not set
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
     * @return array Returns an array of all the fields and <code>NULL</code> if none was set
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfacetfields.php
     */
    public function getFacetFields()
    {
    }

    /**
     * Returns the maximum number of constraint counts that should be returned for the facet fields
     *
     * @param string $field_override The name of the field to override for
     *
     * @return int Returns an integer on success and <code>NULL</code> if not set
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
     * @param string $field_override The name of the field
     *
     * @return string Returns a string on success and <code>NULL</code> if not set
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
     * @param string $field_override The name of the field
     *
     * @return int Returns an integer on success and <code>NULL</code> if not set
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
     * @param string $field_override The name of the field
     *
     * @return bool Returns a boolean on success and <code>NULL</code> if not set
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
     * @param string $field_override The name of the field to override for.
     *
     * @return int Returns an integer on success and <code>NULL</code> if not set
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
     * @param string $field_override The name of the field
     *
     * @return string Returns a string on success and <code>NULL</code> if not set.
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
     * @return array Returns an array on success and <code>NULL</code> if not set.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfacetqueries.php
     */
    public function getFacetQueries()
    {
    }

    /**
     * Returns the facet sort type
     *
     * @param string $field_override The name of the field
     *
     * @return int Returns an integer (SolrQuery::FACET_SORT_INDEX or SolrQuery::FACET_SORT_COUNT) on success or <code>NULL</code> if not set.
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
     * @return array Returns an array on success and <code>NULL</code> if not set.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfields.php
     */
    public function getFields()
    {
    }

    /**
     * Returns an array of filter queries
     *
     * @return array Returns an array on success and <code>NULL</code> if not set.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getfilterqueries.php
     */
    public function getFilterQueries()
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
    public function getGroupFields()
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
    public function getGroupFunctions()
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
     * @return array <code>array</code>
     *
     * @since PECL solr >= 2.2.0
     *
     * @link http://www.php.net/manual/en/solrquery.getgroupqueries.php
     */
    public function getGroupQueries()
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
    public function getGroupSortFields()
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
     * @return bool Returns a boolean on success and <code>NULL</code> if not set.
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
     * @param string $field_override The name of the field
     *
     * @return string Returns a string on success and <code>NULL</code> if not set.
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
     * @return array Returns an array on success and <code>NULL</code> if not set.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.gethighlightfields.php
     */
    public function getHighlightFields()
    {
    }

    /**
     * Returns the formatter for the highlighted output
     *
     * @param string $field_override The name of the field
     *
     * @return string Returns a string on success and <code>NULL</code> if not set.
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
     * @param string $field_override The name of the field
     *
     * @return string Returns a string on success and <code>NULL</code> if not set.
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
     * @param string $field_override The name of the field
     *
     * @return int Returns an integer on success or <code>NULL</code> if not set.
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
     * @return bool Returns a boolean on success and <code>NULL</code> if not set.
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
     * @param string $field_override The name of the field
     *
     * @return int Returns an integer on success and <code>NULL</code> if not set.
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
     * @return int Returns an integer on success and <code>NULL</code> if not set.
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
     * @param string $field_override The name of the field
     *
     * @return bool Returns a boolean on success and <code>NULL</code> if not set.
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
     * @return int Returns an integer on success and <code>NULL</code> if not set.
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
     * @return string Returns a string on success and <code>NULL</code> if not set.
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
     * @return float Returns a double on success and <code>NULL</code> if not set.
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
     * @return bool Returns a boolean on success and <code>NULL</code> if not set.
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
     * @param string $field_override The name of the field
     *
     * @return string Returns a string on success and <code>NULL</code> if not set.
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
     * @param string $field_override The name of the field
     *
     * @return string Returns a string on success and <code>NULL</code> if not set.
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
     * @param string $field_override The name of the field
     *
     * @return int Returns an integer on success and <code>NULL</code> if not set.
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
     * @return bool Returns a boolean on success and <code>NULL</code> if not set.
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
     * @return bool Returns a boolean on success and <code>NULL</code> if not set.
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
     * @return bool Returns a boolean on success and <code>NULL</code> if not set.
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
     * @return int Returns an integer on success and <code>NULL</code> if not set.
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
     * @return array Returns an array on success and <code>NULL</code> if not set.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getmltfields.php
     */
    public function getMltFields()
    {
    }

    /**
     * Returns the maximum number of query terms that will be included in any generated query
     *
     * @return int Returns an integer on success and <code>NULL</code> if not set.
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
     * @return int Returns an integer on success and <code>NULL</code> if not set.
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
     * @return int Returns an integer on success and <code>NULL</code> if not set.
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
     * @return int Returns an integer on success and <code>NULL</code> if not set.
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
     * @return int Returns an integer on success and <code>NULL</code> if not set.
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
     * @return int Returns an integer on success and <code>NULL</code> if not set.
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
     * @return array Returns an array on success and <code>NULL</code> if not set.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getmltqueryfields.php
     */
    public function getMltQueryFields()
    {
    }

    /**
     * Returns the main query
     *
     * @return string Returns a string on success and <code>NULL</code> if not set.
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
     * @return int Returns an integer on success and <code>NULL</code> if not set.
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
     * @return array Returns an array on success and <code>NULL</code> if none of the parameters was set.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getsortfields.php
     */
    public function getSortFields()
    {
    }

    /**
     * Returns the offset in the complete result set
     *
     * @return int Returns an integer on success and <code>NULL</code> if not set.
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
     * @return bool Returns a boolean on success and <code>NULL</code> if not set.
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
     * @return array Returns an array on success and <code>NULL</code> if not set.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getstatsfacets.php
     */
    public function getStatsFacets()
    {
    }

    /**
     * Returns all the statistics fields
     *
     * @return array Returns an array on success and <code>NULL</code> if not set.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.getstatsfields.php
     */
    public function getStatsFields()
    {
    }

    /**
     * Returns whether or not the TermsComponent is enabled
     *
     * @return bool Returns a boolean on success and <code>NULL</code> if not set.
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
     * @return string Returns a string on success and <code>NULL</code> if not set.
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
     * @return bool Returns a boolean on success and <code>NULL</code> if not set.
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
     * @return bool Returns a boolean on success and <code>NULL</code> if not set.
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
     * @return int Returns an integer on success and <code>NULL</code> if not set.
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
     * @return string Returns a string on success and <code>NULL</code> if not set.
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
     * @return int Returns an integer on success and <code>NULL</code> if not set.
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
     * @return int Returns an integer on success and <code>NULL</code> if not set.
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
     * @return string Returns a string on success and <code>NULL</code> if not set.
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
     * @return bool Returns a boolean on success and <code>NULL</code> if not set.
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
     * @return int Returns an integer on success and <code>NULL</code> if not set.
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
     * @return string Returns a string on success and <code>NULL</code> if not set.
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
     * @return int Returns and integer on success and <code>NULL</code> if it is not set.
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
     * @param string $fq
     *
     * @return SolrQuery <code>SolrQuery</code>
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
     * @param string $field field name
     *
     * @return SolrQuery <code>SolrQuery</code>
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
     * @param string $field The name of the date field to remove
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.removefacetdatefield.php
     */
    public function &removeFacetDateField($field)
    {
    }

    /**
     * Removes one of the facet.date.other parameters
     *
     * @param string $value The value
     * @param string $field_override The name of the field.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
     * @param string $field The name of the field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.removefacetfield.php
     */
    public function &removeFacetField($field)
    {
    }

    /**
     * Removes one of the facet.query parameters
     *
     * @param string $value The value
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
     * @param string $field Name of the field.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
     * @param string $fq The filter query to remove
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
     * @param string $field The name of the field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.removehighlightfield.php
     */
    public function &removeHighlightField($field)
    {
    }

    /**
     * Removes one of the moreLikeThis fields
     *
     * @param string $field Name of the field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.removemltfield.php
     */
    public function &removeMltField($field)
    {
    }

    /**
     * Removes one of the moreLikeThis query fields
     *
     * @param string $queryField The query field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.removemltqueryfield.php
     */
    public function &removeMltQueryField($queryField)
    {
    }

    /**
     * Removes one of the sort fields
     *
     * @param string $field The name of the field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
     * @param string $value The value
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
     * @param string $field The name of the field.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.removestatsfield.php
     */
    public function &removeStatsField($field)
    {
    }

    /**
     * Toggles the echoHandler parameter
     *
     * @param bool $flag <code>TRUE</code> or <code>FALSE</code>
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
     * @param string $type The type of parameters to include
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
     * @param bool $value Bool flag
     *
     * @return SolrQuery <code>SolrQuery</code>
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
     * @param string $q
     *
     * @return SolrQuery <code>SolrQuery</code>
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
     * @param int $value
     *
     * @return SolrQuery <code>SolrQuery</code>
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
     * @param string $query The Lucene query to identify a set of documents
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setexplainother.php
     */
    public function &setExplainOther($query)
    {
    }

    /**
     * Maps to the facet parameter. Enables or disables facetting
     *
     * @param bool $flag
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacet.php
     */
    public function &setFacet($flag)
    {
    }

    /**
     * Maps to facet.date.end
     *
     * @param string $value See facet.date.end
     * @param string $field_override Name of the field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
     * @param string $value See facet.date.gap
     * @param string $field_override The name of the field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
     * @param bool $value See facet.date.hardend
     * @param string $field_override The name of the field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
     * @param string $value See facet.date.start
     * @param string $field_override The name of the field.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
     * @param int $frequency
     * @param string $field_override The name of the field.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacetenumcachemindefaultfrequency.php
     */
    public function &setFacetEnumCacheMinDefaultFrequency($frequency, $field_override = null)
    {
    }

    /**
     * Maps to facet.limit
     *
     * @param int $limit The maximum number of constraint counts
     * @param string $field_override The name of the field.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacetlimit.php
     */
    public function &setFacetLimit($limit, $field_override = null)
    {
    }

    /**
     * Specifies the type of algorithm to use when faceting a field
     *
     * @param string $method The method to use.
     * @param string $field_override The name of the field.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacetmethod.php
     */
    public function &setFacetMethod($method, $field_override = null)
    {
    }

    /**
     * Maps to facet.mincount
     *
     * @param int $mincount The minimum count
     * @param string $field_override The name of the field.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacetmincount.php
     */
    public function &setFacetMinCount($mincount, $field_override = null)
    {
    }

    /**
     * Maps to facet.missing
     *
     * @param bool $flag <code>TRUE</code> turns this feature on. <code>FALSE</code> disables it.
     * @param string $field_override The name of the field.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacetmissing.php
     */
    public function &setFacetMissing($flag, $field_override = null)
    {
    }

    /**
     * Sets the offset into the list of constraints to allow for pagination
     *
     * @param int $offset The offset
     * @param string $field_override The name of the field.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacetoffset.php
     */
    public function &setFacetOffset($offset, $field_override = null)
    {
    }

    /**
     * Specifies a string prefix with which to limits the terms on which to facet
     *
     * @param string $prefix The prefix string
     * @param string $field_override The name of the field.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacetprefix.php
     */
    public function &setFacetPrefix($prefix, $field_override = null)
    {
    }

    /**
     * Determines the ordering of the facet field constraints
     *
     * @param int $facetSort Use SolrQuery::FACET_SORT_INDEX for sorting by index order or SolrQuery::FACET_SORT_COUNT for sorting by count.
     * @param string $field_override The name of the field.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setfacetsort.php
     */
    public function &setFacetSort($facetSort, $field_override = null)
    {
    }

    /**
     * Enable/Disable result grouping (group parameter)
     *
     * @param bool $value
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
     * @param int $percent
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
     * @param bool $value
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
     * @param string $value
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
     * @param int $value
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
     * @param string $value
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
     * @param bool $value
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
     * @param int $value
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
     * @param bool $value
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
     * @param bool $flag Enable or disable highlighting
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlight.php
     */
    public function &setHighlight($flag)
    {
    }

    /**
     * Specifies the backup field to use
     *
     * @param string $field The name of the backup field
     * @param string $field_override The name of the field we are overriding this setting for.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightalternatefield.php
     */
    public function &setHighlightAlternateField($field, $field_override = null)
    {
    }

    /**
     * Specify a formatter for the highlight output
     *
     * @param string $formatter Currently the only legal value is "simple"
     * @param string $field_override The name of the field.
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightformatter.php
     */
    public function &setHighlightFormatter($formatter, $field_override = null)
    {
    }

    /**
     * Sets a text snippet generator for highlighted text
     *
     * @param string $fragmenter The standard fragmenter is gap. Another option is regex, which tries to create fragments that resembles a certain regular expression
     * @param string $field_override The name of the field.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightfragmenter.php
     */
    public function &setHighlightFragmenter($fragmenter, $field_override = null)
    {
    }

    /**
     * The size of fragments to consider for highlighting
     *
     * @param int $size The size, in characters, of fragments to consider for highlighting
     * @param string $field_override The name of the field.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightfragsize.php
     */
    public function &setHighlightFragsize($size, $field_override = null)
    {
    }

    /**
     * Use SpanScorer to highlight phrase terms
     *
     * @param bool $flag Whether or not to use SpanScorer to highlight phrase terms only when they appear within the query phrase in the document.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlighthighlightmultiterm.php
     */
    public function &setHighlightHighlightMultiTerm($flag)
    {
    }

    /**
     * Sets the maximum number of characters of the field to return
     *
     * @param int $fieldLength The length of the field
     * @param string $field_override The name of the field.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightmaxalternatefieldlength.php
     */
    public function &setHighlightMaxAlternateFieldLength($fieldLength, $field_override = null)
    {
    }

    /**
     * Specifies the number of characters into a document to look for suitable snippets
     *
     * @param int $value The number of characters into a document to look for suitable snippets
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
     * @param bool $flag
     * @param string $field_override The name of the field.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightmergecontiguous.php
     */
    public function &setHighlightMergeContiguous($flag, $field_override = null)
    {
    }

    /**
     * Specify the maximum number of characters to analyze
     *
     * @param int $maxAnalyzedChars The maximum number of characters to analyze from a field when using the regex fragmenter
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightregexmaxanalyzedchars.php
     */
    public function &setHighlightRegexMaxAnalyzedChars($maxAnalyzedChars)
    {
    }

    /**
     * Specify the regular expression for fragmenting
     *
     * @param string $value The regular expression for fragmenting. This could be used to extract sentences
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
     * @param float $factor The factor by which the regex fragmenter can stray from the ideal fragment size
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightregexslop.php
     */
    public function &setHighlightRegexSlop($factor)
    {
    }

    /**
     * Require field matching during highlighting
     *
     * @param bool $flag <code>TRUE</code> or <code>FALSE</code>
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightrequirefieldmatch.php
     */
    public function &setHighlightRequireFieldMatch($flag)
    {
    }

    /**
     * Sets the text which appears after a highlighted term
     *
     * @param string $simplePost Sets the text which appears after a highlighted term
     * @param string $field_override The name of the field.
     *
     * @return SolrQuery
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightsimplepost.php
     */
    public function &setHighlightSimplePost($simplePost, $field_override = null)
    {
    }

    /**
     * Sets the text which appears before a highlighted term
     *
     * @param string $simplePre The text which appears before a highlighted term
     * @param string $field_override The name of the field.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightsimplepre.php
     */
    public function &setHighlightSimplePre($simplePre, $field_override = null)
    {
    }

    /**
     * Sets the maximum number of highlighted snippets to generate per field
     *
     * @param int $value The maximum number of highlighted snippets to generate per field
     * @param string $field_override The name of the field.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
     * @param bool $flag
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.sethighlightusephrasehighlighter.php
     */
    public function &setHighlightUsePhraseHighlighter($flag)
    {
    }

    /**
     * Enables or disables moreLikeThis
     *
     * @param bool $flag <code>TRUE</code> enables it and <code>FALSE</code> turns it off.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setmlt.php
     */
    public function &setMlt($flag)
    {
    }

    /**
     * Set if the query will be boosted by the interesting term relevance
     *
     * @param bool $flag
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setmltboost.php
     */
    public function &setMltBoost($flag)
    {
    }

    /**
     * Set the number of similar documents to return for each result
     *
     * @param int $count The number of similar documents to return for each result
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setmltcount.php
     */
    public function &setMltCount($count)
    {
    }

    /**
     * Sets the maximum number of query terms included
     *
     * @param int $value The maximum number of query terms that will be included in any generated query
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
     * @param int $value The maximum number of tokens to parse
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
     * @param int $maxWordLength The maximum word length above which words will be ignored
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setmltmaxwordlength.php
     */
    public function &setMltMaxWordLength($maxWordLength)
    {
    }

    /**
     * Sets the mltMinDoc frequency
     *
     * @param int $minDocFrequency Sets the frequency at which words will be ignored which do not occur in at least this many docs.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setmltmindocfrequency.php
     */
    public function &setMltMinDocFrequency($minDocFrequency)
    {
    }

    /**
     * Sets the frequency below which terms will be ignored in the source docs
     *
     * @param int $minTermFrequency The frequency below which terms will be ignored in the source docs
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setmltmintermfrequency.php
     */
    public function &setMltMinTermFrequency($minTermFrequency)
    {
    }

    /**
     * Sets the minimum word length
     *
     * @param int $minWordLength The minimum word length below which words will be ignored
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setmltminwordlength.php
     */
    public function &setMltMinWordLength($minWordLength)
    {
    }

    /**
     * Exclude the header from the returned results
     *
     * @param bool $flag <code>TRUE</code> excludes the header from the result.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
     * @param string $query The search query
     *
     * @return SolrQuery Returns the current SolrQuery object
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setquery.php
     */
    public function &setQuery($query)
    {
    }

    /**
     * Specifies the maximum number of rows to return in the result
     *
     * @param int $rows The maximum number of rows to return
     *
     * @return SolrQuery Returns the current SolrQuery object.
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
     * @param bool $flag Whether to show debug info. <code>TRUE</code> or <code>FALSE</code>
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
     * @param int $start The number of rows to skip.
     *
     * @return SolrQuery Returns the current SolrQuery object.
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
     * @param bool $flag <code>TRUE</code> turns on the stats component and <code>FALSE</code> disables it.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setstats.php
     */
    public function &setStats($flag)
    {
    }

    /**
     * Enables or disables the TermsComponent
     *
     * @param bool $flag <code>TRUE</code> enables it. <code>FALSE</code> turns it off
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.setterms.php
     */
    public function &setTerms($flag)
    {
    }

    /**
     * Sets the name of the field to get the Terms from
     *
     * @param string $fieldname The field name
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermsfield.php
     */
    public function &setTermsField($fieldname)
    {
    }

    /**
     * Include the lower bound term in the result set
     *
     * @param bool $flag Include the lower bound term in the result set
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermsincludelowerbound.php
     */
    public function &setTermsIncludeLowerBound($flag)
    {
    }

    /**
     * Include the upper bound term in the result set
     *
     * @param bool $flag <code>TRUE</code> or <code>FALSE</code>
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermsincludeupperbound.php
     */
    public function &setTermsIncludeUpperBound($flag)
    {
    }

    /**
     * Sets the maximum number of terms to return
     *
     * @param int $limit The maximum number of terms to return. All the terms will be returned if the limit is negative.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermslimit.php
     */
    public function &setTermsLimit($limit)
    {
    }

    /**
     * Specifies the Term to start from
     *
     * @param string $lowerBound The lower bound Term
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermslowerbound.php
     */
    public function &setTermsLowerBound($lowerBound)
    {
    }

    /**
     * Sets the maximum document frequency
     *
     * @param int $frequency The maximum document frequency.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermsmaxcount.php
     */
    public function &setTermsMaxCount($frequency)
    {
    }

    /**
     * Sets the minimum document frequency
     *
     * @param int $frequency The minimum frequency
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermsmincount.php
     */
    public function &setTermsMinCount($frequency)
    {
    }

    /**
     * Restrict matches to terms that start with the prefix
     *
     * @param string $prefix Restrict matches to terms that start with the prefix
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermsprefix.php
     */
    public function &setTermsPrefix($prefix)
    {
    }

    /**
     * Return the raw characters of the indexed term
     *
     * @param bool $flag
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermsreturnraw.php
     */
    public function &setTermsReturnRaw($flag)
    {
    }

    /**
     * Specifies how to sort the returned terms
     *
     * @param int $sortType SolrQuery::TERMS_SORT_INDEX or SolrQuery::TERMS_SORT_COUNT
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermssort.php
     */
    public function &setTermsSort($sortType)
    {
    }

    /**
     * Sets the term to stop at
     *
     * @param string $upperBound The term to stop at
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrquery.settermsupperbound.php
     */
    public function &setTermsUpperBound($upperBound)
    {
    }

    /**
     * The time allowed for search to finish
     *
     * @param int $timeAllowed The time allowed for a search to finish.
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
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
    /**
     * @var int
     */
    const PARSE_SOLR_DOC = 1;

    /**
     * @var int
     */
    const PARSE_SOLR_OBJ = 0;

    /**
     * @var string
     */
    protected $http_digested_response = ' ';

    /**
     * @var string
     */
    protected $http_raw_request = ' ';

    /**
     * @var string
     */
    protected $http_raw_request_headers = ' ';

    /**
     * @var string
     */
    protected $http_raw_response = ' ';

    /**
     * @var string
     */
    protected $http_raw_response_headers = ' ';

    /**
     * @var string
     */
    protected $http_request_url = ' ';

    /**
     * @var int
     */
    protected $http_status = 0;

    /**
     * @var string
     */
    protected $http_status_message = ' ';

    /**
     * @var int
     */
    protected $parser_mode = 0;

    /**
     * @var string
     */
    protected $response_writer = ' ';

    /**
     * @var bool
     */
    protected $success = false;

    public function getArrayResponse()
    {
    }

    /**
     * Returns the XML response as serialized PHP data
     *
     * @return string Returns the XML response as serialized PHP data
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
     * @return int Returns the HTTP status of the response.
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
     * @return string Returns more details on the HTTP status
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
     * @return string Returns the raw request sent to the Solr server
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
     * @return string Returns the raw request headers sent to the Solr server
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
     * @return string Returns the raw response from the server.
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
     * @return string Returns the raw response headers from the server.
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
     * @return string Returns the full URL the request was sent to
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
     * @return SolrObject Returns a SolrObject representing the XML response from the server
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
     * @param int|null $parser_mode SolrResponse::PARSE_SOLR_DOC parses documents in SolrDocument instances. SolrResponse::PARSE_SOLR_OBJ parses document into SolrObjects.
     *
     * @return bool Returns <code>TRUE</code> on success or <code>FALSE</code> on failure.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrresponse.setparsemode.php
     */
    public function setParseMode($parser_mode = 0)
    {
    }

    /**
     * Was the request a success
     *
     * @return bool Returns <code>TRUE</code> if it was successful and <code>FALSE</code> if it was not.
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
     * @return array Returns an array containing internal information where the error was thrown. Used only for debugging by extension developers.
     *
     * @since PECL solr >= 1.1.0, >=2.0.0
     *
     * @link http://www.php.net/manual/en/solrserverexception.getinternalinfo.php
     */
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
     * @param string $xmlresponse The XML response string from the Solr server.
     * @param int|null $parse_mode Use SolrResponse::PARSE_SOLR_OBJ or SolrResponse::PARSE_SOLR_DOC
     *
     * @return SolrObject Returns the SolrObject representing the XML response.
     * If the parse_mode parameter is set to SolrResponse::PARSE_SOLR_OBJ Solr documents will be parses as SolrObject instances.
     * If it is set to SolrResponse::PARSE_SOLR_DOC, they will be parsed as SolrDocument instances.
     *
     * @since PECL solr >= 0.9.2
     *
     * @link http://www.php.net/manual/en/solrutils.digestxmlresponse.php
     */
    public static function digestXmlResponse($xmlresponse, $parse_mode = 0)
    {
    }

    /**
     * Escapes a lucene query string
     *
     * @param string $str This is the query string to be escaped.
     *
     * @return string Returns the escaped string or <code>FALSE</code> on failure.
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
     * @return string The current version of the Apache Solr extension.
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
     * @param string $str The lucene phrase.
     *
     * @return string Returns the phrase contained in double quotes.
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
 * @return string It returns a string on success and <code>FALSE</code> on failure.
 *
 * @since PECL solr >= 0.9.1
 *
 * @link http://www.php.net/manual/en/function.solr-get-version.php
 */
function solr_get_version()
{
}
