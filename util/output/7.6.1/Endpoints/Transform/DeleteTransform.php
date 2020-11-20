<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Transform;

use Elasticsearch7\Common\Exceptions\RuntimeException;
use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class DeleteTransform
 * Elasticsearch API name transform.delete_transform
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Transform
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteTransform extends AbstractEndpoint
{
    protected $transform_id;

    public function getURI(): string
    {
        $transform_id = $this->transform_id ?? null;

        if (isset($transform_id)) {
            return "/_transform/$transform_id";
        }
        throw new RuntimeException('Missing parameter for the endpoint transform.delete_transform');
    }

    public function getParamWhitelist(): array
    {
        return [
            'force'
        ];
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function setTransformId($transform_id): DeleteTransform
    {
        if (isset($transform_id) !== true) {
            return $this;
        }
        $this->transform_id = $transform_id;

        return $this;
    }
}
