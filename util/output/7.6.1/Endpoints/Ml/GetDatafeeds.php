<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\Ml;

use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class GetDatafeeds
 * Elasticsearch API name ml.get_datafeeds
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetDatafeeds extends AbstractEndpoint
{
    protected $datafeed_id;

    public function getURI(): string
    {
        $datafeed_id = $this->datafeed_id ?? null;

        if (isset($datafeed_id)) {
            return "/_ml/datafeeds/$datafeed_id";
        }
        return "/_ml/datafeeds";
    }

    public function getParamWhitelist(): array
    {
        return [
            'allow_no_datafeeds'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function setDatafeedId($datafeed_id): GetDatafeeds
    {
        if (isset($datafeed_id) !== true) {
            return $this;
        }
        $this->datafeed_id = $datafeed_id;

        return $this;
    }
}
