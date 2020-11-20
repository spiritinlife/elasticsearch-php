<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Ccr;

use Elasticsearch7\Common\Exceptions\RuntimeException;
use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class PauseFollow
 * Elasticsearch API name ccr.pause_follow
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Ccr
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class PauseFollow extends AbstractEndpoint
{

    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_ccr/pause_follow";
        }
        throw new RuntimeException('Missing parameter for the endpoint ccr.pause_follow');
    }

    public function getParamWhitelist(): array
    {
        return [];
    }

    public function getMethod(): string
    {
        return 'POST';
    }
}
