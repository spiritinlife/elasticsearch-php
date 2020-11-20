<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Indices;

use Elasticsearch7\Common\Exceptions\RuntimeException;
use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class Exists
 * Elasticsearch API name indices.exists
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Exists extends AbstractEndpoint
{

    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index";
        }
        throw new RuntimeException('Missing parameter for the endpoint indices.exists');
    }

    public function getParamWhitelist(): array
    {
        return [
            'local',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'flat_settings',
            'include_defaults'
        ];
    }

    public function getMethod(): string
    {
        return 'HEAD';
    }
}
