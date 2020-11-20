<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Ilm;

use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class Start
 * Elasticsearch API name ilm.start
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Ilm
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Start extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_ilm/start";
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
