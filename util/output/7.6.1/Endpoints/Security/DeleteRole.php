<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\Security;

use Elasticsearch6\Common\Exceptions\RuntimeException;
use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class DeleteRole
 * Elasticsearch API name security.delete_role
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\Security
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteRole extends AbstractEndpoint
{
    protected $name;

    public function getURI(): string
    {
        $name = $this->name ?? null;

        if (isset($name)) {
            return "/_security/role/$name";
        }
        throw new RuntimeException('Missing parameter for the endpoint security.delete_role');
    }

    public function getParamWhitelist(): array
    {
        return [
            'refresh'
        ];
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function setName($name): DeleteRole
    {
        if (isset($name) !== true) {
            return $this;
        }
        $this->name = $name;

        return $this;
    }
}
