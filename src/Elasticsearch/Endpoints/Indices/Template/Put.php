<?php

declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\Indices\Template;

use Elasticsearch6\Endpoints\AbstractEndpoint;
use Elasticsearch6\Common\Exceptions;

/**
 * Class Put
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\Indices\Template
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Put extends AbstractEndpoint
{
    /**
     * The name of the template
     *
     * @var string
     */
    private $name;

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
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        if (isset($name) !== true) {
            return $this;
        }

        $this->name = $name;

        return $this;
    }

    /**
     * @throws \Elasticsearch6\Common\Exceptions\RuntimeException
     * @return string
     */
    public function getURI()
    {
        if (isset($this->name) !== true) {
            throw new Exceptions\RuntimeException(
                'name is required for Put'
            );
        }
        $name = $this->name;
        $uri   = "/_template/$name";

        if (isset($name) === true) {
            $uri = "/_template/$name";
        }

        return $uri;
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'order',
            'timeout',
            'master_timeout',
            'flat_settings',
            'create',
            'include_type_name'
        );
    }

    /**
     * @return array
     * @throws \Elasticsearch6\Common\Exceptions\RuntimeException
     */
    public function getBody()
    {
        if (isset($this->body) !== true) {
            throw new Exceptions\RuntimeException('Body is required for Put Template');
        }

        return $this->body;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'PUT';
    }
}
