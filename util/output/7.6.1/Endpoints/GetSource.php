<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints;

use Elasticsearch7\Common\Exceptions\RuntimeException;
use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class GetSource
 * Elasticsearch API name get_source
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetSource extends AbstractEndpoint
{

    public function getURI(): string
    {
        if (isset($this->id) !== true) {
            throw new RuntimeException(
                'id is required for get_source'
            );
        }
        $id = $this->id;
        if (isset($this->index) !== true) {
            throw new RuntimeException(
                'index is required for get_source'
            );
        }
        $index = $this->index;
        $type = $this->type ?? null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($type)) {
            return "/$index/$type/$id/_source";
        }
        return "/$index/_source/$id";
    }

    public function getParamWhitelist(): array
    {
        return [
            'preference',
            'realtime',
            'refresh',
            'routing',
            '_source',
            '_source_excludes',
            '_source_includes',
            'version',
            'version_type'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function setId($id): GetSource
    {
        if (isset($id) !== true) {
            return $this;
        }
        $this->id = $id;

        return $this;
    }
}
