<?php
namespace DrupalConnect\Connection;

class Request extends \Zend_Http_Client
{
    const ENDPOINT_NODE_RESOURCE_RETRIEVE = 'node/'; // example node/1.json
    const ENDPOINT_NODE_RESOURCE_INDEX = 'node';

    const ENDPOINT_VIEWS_RESOURCE_RETRIEVE = 'views/'; // example views/article_recent.json

    const ENDPOINT_FILE_RESOURCE_RETRIEVE = 'file/'; // example node/1.json
    const ENDPOINT_FILE_RESOURCE_INDEX = 'file';

    const ENDPOINT_FILE_TAXAONOMY_VOCABULARY_RETRIEVE = 'taxonomy_vocabulary/'; // example taxonomy_vocabulary/1.json
    const ENDPOINT_FILE_TAXAONOMY_VOCABULARY_INDEX = 'taxonomy_vocabulary';

    const ENDPOINT_FILE_TAXAONOMY_TERM_RESOURCE_RETRIEVE = 'taxonomy_term/'; // example taxonomy_term/1.json
    const ENDPOINT_FILE_TAXAONOMY_TERM_RESOURCE_INDEX = 'taxonomy_term';

    public function __construct()
    {
        parent::__construct(null, array(
            'adapter' => 'Zend_Http_Client_Adapter_Curl')
        );
    }
}
