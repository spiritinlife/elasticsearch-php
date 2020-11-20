<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints;

use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class Ping
 * Elasticsearch API name ping
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Ping extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/";
    }

    public function getParamWhitelist(): array
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return 'HEAD';
    }
}
