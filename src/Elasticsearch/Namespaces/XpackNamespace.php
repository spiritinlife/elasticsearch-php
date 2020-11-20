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

namespace Elasticsearch7\Namespaces;

use Elasticsearch7\Namespaces\AbstractNamespace;

/**
 * Class XpackNamespace
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 */
class XpackNamespace extends AbstractNamespace
{

    /**
     * $params['categories']        = (list) Comma-separated list of info categories. Can be any of: build, license, features
     * $params['accept_enterprise'] = (boolean) If an enterprise license is installed, return the type and mode as 'enterprise' (default: false)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/info-api.html
     */
    public function info(array $params = [])
    {

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Xpack\Info');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['master_timeout'] = (time) Specify timeout for watch write operation
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/usage-api.html
     */
    public function usage(array $params = [])
    {

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Xpack\Usage');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
}
