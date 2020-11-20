<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Enrich;

use Elasticsearch7\Common\Exceptions\RuntimeException;
use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class PutPolicy
 * Elasticsearch API name enrich.put_policy
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Enrich
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class PutPolicy extends AbstractEndpoint
{
    protected $name;

    public function getURI(): string
    {
        $name = $this->name ?? null;

        if (isset($name)) {
            return "/_enrich/policy/$name";
        }
        throw new RuntimeException('Missing parameter for the endpoint enrich.put_policy');
    }

    public function getParamWhitelist(): array
    {
        return [];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function setBody($body): PutPolicy
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }

    public function setName($name): PutPolicy
    {
        if (isset($name) !== true) {
            return $this;
        }
        $this->name = $name;

        return $this;
    }
}
