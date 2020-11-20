<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\Cat;

use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class Health
 * Elasticsearch API name cat.health
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\Cat
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Health extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_cat/health";
    }

    public function getParamWhitelist(): array
    {
        return [
            'format',
            'h',
            'help',
            's',
            'time',
            'ts',
            'v'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
