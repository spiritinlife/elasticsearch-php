<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\Ccr;

use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class Stats
 * Elasticsearch API name ccr.stats
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\Ccr
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Stats extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_ccr/stats";
    }

    public function getParamWhitelist(): array
    {
        return [];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
