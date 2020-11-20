<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\Watcher;

use Elasticsearch6\Common\Exceptions\RuntimeException;
use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class GetWatch
 * Elasticsearch API name watcher.get_watch
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\Watcher
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetWatch extends AbstractEndpoint
{

    public function getURI(): string
    {
        $id = $this->id ?? null;

        if (isset($id)) {
            return "/_watcher/watch/$id";
        }
        throw new RuntimeException('Missing parameter for the endpoint watcher.get_watch');
    }

    public function getParamWhitelist(): array
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function setId($id): GetWatch
    {
        if (isset($id) !== true) {
            return $this;
        }
        $this->id = $id;

        return $this;
    }
}
