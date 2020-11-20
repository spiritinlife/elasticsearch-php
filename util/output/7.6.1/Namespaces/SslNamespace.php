<?php
declare(strict_types = 1);

namespace Elasticsearch6\Namespaces;

use Elasticsearch6\Namespaces\AbstractNamespace;

/**
 * Class SslNamespace
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Namespaces
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class SslNamespace extends AbstractNamespace
{

    /**
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-ssl.html
     */
    public function certificates(array $params = [])
    {

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Ssl\Certificates');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
}
