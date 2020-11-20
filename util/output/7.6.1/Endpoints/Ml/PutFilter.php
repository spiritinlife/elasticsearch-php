<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Ml;

use Elasticsearch7\Common\Exceptions\RuntimeException;
use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class PutFilter
 * Elasticsearch API name ml.put_filter
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class PutFilter extends AbstractEndpoint
{
    protected $filter_id;

    public function getURI(): string
    {
        $filter_id = $this->filter_id ?? null;

        if (isset($filter_id)) {
            return "/_ml/filters/$filter_id";
        }
        throw new RuntimeException('Missing parameter for the endpoint ml.put_filter');
    }

    public function getParamWhitelist(): array
    {
        return [];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function setBody($body): PutFilter
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }

    public function setFilterId($filter_id): PutFilter
    {
        if (isset($filter_id) !== true) {
            return $this;
        }
        $this->filter_id = $filter_id;

        return $this;
    }
}
