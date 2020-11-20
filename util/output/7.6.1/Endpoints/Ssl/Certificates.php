<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\Ssl;

use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class Certificates
 * Elasticsearch API name ssl.certificates
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\Ssl
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Certificates extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_ssl/certificates";
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
