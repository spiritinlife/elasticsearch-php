<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Indices;

use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class ForceMerge
 * Elasticsearch API name indices.forcemerge
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ForceMerge extends AbstractEndpoint
{

    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_forcemerge";
        }
        return "/_forcemerge";
    }

    public function getParamWhitelist(): array
    {
        return [
            'flush',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'max_num_segments',
            'only_expunge_deletes'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }
}
