<?php
declare(strict_types = 1);

namespace Elasticsearch7\Namespaces;

use Elasticsearch7\Namespaces\AbstractNamespace;

/**
 * Class EnrichNamespace
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Namespaces
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class EnrichNamespace extends AbstractNamespace
{

    /**
     * $params['name'] = (string) The name of the enrich policy
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function deletePolicy(array $params = [])
    {
        $name = $this->extractArgument($params, 'name');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Enrich\DeletePolicy');
        $endpoint->setParams($params);
        $endpoint->setName($name);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['name']                = (string) The name of the enrich policy
     * $params['wait_for_completion'] = (boolean) Should the request should block until the execution is complete. (Default = true)
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function executePolicy(array $params = [])
    {
        $name = $this->extractArgument($params, 'name');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Enrich\ExecutePolicy');
        $endpoint->setParams($params);
        $endpoint->setName($name);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['name'] = (list) A comma-separated list of enrich policy names
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function getPolicy(array $params = [])
    {
        $name = $this->extractArgument($params, 'name');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Enrich\GetPolicy');
        $endpoint->setParams($params);
        $endpoint->setName($name);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['name'] = (string) The name of the enrich policy
     * $params['body'] = (array) The enrich policy to register (Required)
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function putPolicy(array $params = [])
    {
        $name = $this->extractArgument($params, 'name');
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Enrich\PutPolicy');
        $endpoint->setParams($params);
        $endpoint->setName($name);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    public function stats(array $params = [])
    {

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Enrich\Stats');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
}
