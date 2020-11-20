<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Ccr;

use Elasticsearch7\Common\Exceptions\RuntimeException;
use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class DeleteAutoFollowPattern
 * Elasticsearch API name ccr.delete_auto_follow_pattern
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Ccr
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteAutoFollowPattern extends AbstractEndpoint
{
    protected $name;

    public function getURI(): string
    {
        $name = $this->name ?? null;

        if (isset($name)) {
            return "/_ccr/auto_follow/$name";
        }
        throw new RuntimeException('Missing parameter for the endpoint ccr.delete_auto_follow_pattern');
    }

    public function getParamWhitelist(): array
    {
        return [];
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function setName($name): DeleteAutoFollowPattern
    {
        if (isset($name) !== true) {
            return $this;
        }
        $this->name = $name;

        return $this;
    }
}
