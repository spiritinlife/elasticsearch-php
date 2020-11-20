<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints;

use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class Info
 * Elasticsearch API name info
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Info extends AbstractEndpoint
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
        return 'GET';
    }
}
