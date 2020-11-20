<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Transform;

use Elasticsearch7\Common\Exceptions\RuntimeException;
use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class StopTransform
 * Elasticsearch API name transform.stop_transform
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Transform
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class StopTransform extends AbstractEndpoint
{
    protected $transform_id;

    public function getURI(): string
    {
        $transform_id = $this->transform_id ?? null;

        if (isset($transform_id)) {
            return "/_transform/$transform_id/_stop";
        }
        throw new RuntimeException('Missing parameter for the endpoint transform.stop_transform');
    }

    public function getParamWhitelist(): array
    {
        return [
            'force',
            'wait_for_completion',
            'timeout',
            'allow_no_match',
            'wait_for_checkpoint'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setTransformId($transform_id): StopTransform
    {
        if (isset($transform_id) !== true) {
            return $this;
        }
        $this->transform_id = $transform_id;

        return $this;
    }
}
