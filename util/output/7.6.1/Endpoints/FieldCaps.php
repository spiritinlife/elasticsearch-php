<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints;

use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class FieldCaps
 * Elasticsearch API name field_caps
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class FieldCaps extends AbstractEndpoint
{

    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_field_caps";
        }
        return "/_field_caps";
    }

    public function getParamWhitelist(): array
    {
        return [
            'fields',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'include_unmapped'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
