<?php

declare(strict_types = 1);

namespace Elasticsearch6\Endpoints;

use Elasticsearch6\Common\Exceptions\InvalidArgumentException;
use Elasticsearch6\Common\Exceptions;

/**
 * Class FieldCaps
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class FieldCaps extends AbstractEndpoint
{
    /**
     * @param array $body
     *
     * @throws \Elasticsearch6\Common\Exceptions\InvalidArgumentException
     * @return $this
     */
    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }

        $this->body = $body;
        return $this;
    }

    /**
     * @return string
     */
    public function getURI()
    {
        $index = $this->index;

        if (isset($index) === true) {
            return "/$index/_field_caps";
        } else {
            return "/_field_caps";
        }
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'fields',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards'
        );
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return isset($this->body) ? 'POST' : 'GET';
    }
}
