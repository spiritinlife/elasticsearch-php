<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\Security;

use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class Authenticate
 * Elasticsearch API name security.authenticate
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\Security
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Authenticate extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_security/_authenticate";
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
