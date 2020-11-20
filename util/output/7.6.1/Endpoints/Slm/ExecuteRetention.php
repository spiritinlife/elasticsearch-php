<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\Slm;

use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class ExecuteRetention
 * Elasticsearch API name slm.execute_retention
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\Slm
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ExecuteRetention extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_slm/_execute_retention";
    }

    public function getParamWhitelist(): array
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }
}
