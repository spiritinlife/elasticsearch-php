<?php
declare(strict_types = 1);

namespace Elasticsearch7\Namespaces;

use Elasticsearch7\Namespaces\AbstractNamespace;

/**
 * Class MigrationNamespace
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Namespaces
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class MigrationNamespace extends AbstractNamespace
{

    /**
     * $params['index'] = (string) Index pattern
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see http://www.elastic.co/guide/en/elasticsearch/reference/current/migration-api-deprecation.html
     */
    public function deprecations(array $params = [])
    {
        $index = $this->extractArgument($params, 'index');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Migration\Deprecations');
        $endpoint->setParams($params);
        $endpoint->setIndex($index);

        return $this->performRequest($endpoint);
    }
}
