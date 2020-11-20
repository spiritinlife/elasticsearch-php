<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\Ml;

use Elasticsearch6\Common\Exceptions\RuntimeException;
use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class StopDataFrameAnalytics
 * Elasticsearch API name ml.stop_data_frame_analytics
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class StopDataFrameAnalytics extends AbstractEndpoint
{

    public function getURI(): string
    {
        $id = $this->id ?? null;

        if (isset($id)) {
            return "/_ml/data_frame/analytics/$id/_stop";
        }
        throw new RuntimeException('Missing parameter for the endpoint ml.stop_data_frame_analytics');
    }

    public function getParamWhitelist(): array
    {
        return [
            'allow_no_match',
            'force',
            'timeout'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setBody($body): StopDataFrameAnalytics
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }

    public function setId($id): StopDataFrameAnalytics
    {
        if (isset($id) !== true) {
            return $this;
        }
        $this->id = $id;

        return $this;
    }
}
