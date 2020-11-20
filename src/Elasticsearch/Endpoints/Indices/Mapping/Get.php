<?php

declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\Indices\Mapping;

use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class Get
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\Indices\Mapping
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Get extends AbstractEndpoint
{
    /**
     * @return string
     */
    public function getURI()
    {
        $index = $this->index;
        $type = $this->type;
        $uri   = "/_mapping";

        if (isset($index) === true && isset($type) === true) {
            $uri = "/$index/_mapping/$type";
        } elseif (isset($type) === true) {
            $uri = "/_mapping/$type";
        } elseif (isset($index) === true) {
            $uri = "/$index/_mapping";
        }

        return $uri;
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'wildcard_expansion',
            'local',
            'include_type_name'
        );
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'GET';
    }
}
