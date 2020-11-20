<?php

declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\Indices\Template;

use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class AbstractTemplateEndpoint
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\Indices\Template
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
abstract class AbstractTemplateEndpoint extends AbstractEndpoint
{
    /** @var  string */
    protected $name;

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
