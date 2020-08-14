<?php
/**
 * Elasticsearch PHP client
 *
 * @link      https://github.com/elastic/elasticsearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1 
 * 
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */

declare(strict_types = 1);

namespace Elasticsearch\Namespaces;

use Elasticsearch\Namespaces\AbstractNamespace;

/**
 * Class GraphNamespace
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 */
class GraphNamespace extends AbstractNamespace
{

    /**
     * $params['index']   = (list) A comma-separated list of index names to search; use `_all` or empty string to perform the operation on all indices (Required)
     * $params['type']    = DEPRECATED (list) A comma-separated list of document types to search; leave empty to perform the operation on all types
     * $params['routing'] = (string) Specific routing value
     * $params['timeout'] = (time) Explicit operation timeout
     * $params['body']    = (array) Graph Query DSL
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/graph-explore-api.html
     */
    public function explore(array $params = [])
    {
        $index = $this->extractArgument($params, 'index');
        $type = $this->extractArgument($params, 'type');
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Graph\Explore');
        $endpoint->setParams($params);
        $endpoint->setIndex($index);
        $endpoint->setType($type);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
}
