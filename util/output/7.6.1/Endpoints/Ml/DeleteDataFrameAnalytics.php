<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Ml;

use Elasticsearch7\Common\Exceptions\RuntimeException;
use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class DeleteDataFrameAnalytics
 * Elasticsearch API name ml.delete_data_frame_analytics
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteDataFrameAnalytics extends AbstractEndpoint
{

    public function getURI(): string
    {
        $id = $this->id ?? null;

        if (isset($id)) {
            return "/_ml/data_frame/analytics/$id";
        }
        throw new RuntimeException('Missing parameter for the endpoint ml.delete_data_frame_analytics');
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

    public function setId($id): DeleteDataFrameAnalytics
    {
        if (isset($id) !== true) {
            return $this;
        }
        $this->id = $id;

        return $this;
    }
}
