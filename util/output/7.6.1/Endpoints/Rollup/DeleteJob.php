<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Rollup;

use Elasticsearch7\Common\Exceptions\RuntimeException;
use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class DeleteJob
 * Elasticsearch API name rollup.delete_job
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Rollup
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteJob extends AbstractEndpoint
{

    public function getURI(): string
    {
        $id = $this->id ?? null;

        if (isset($id)) {
            return "/_rollup/job/$id";
        }
        throw new RuntimeException('Missing parameter for the endpoint rollup.delete_job');
    }

    public function getParamWhitelist(): array
    {
        return [];
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function setId($id): DeleteJob
    {
        if (isset($id) !== true) {
            return $this;
        }
        $this->id = $id;

        return $this;
    }
}
