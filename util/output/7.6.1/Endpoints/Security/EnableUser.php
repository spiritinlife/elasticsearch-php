<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Security;

use Elasticsearch7\Common\Exceptions\RuntimeException;
use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class EnableUser
 * Elasticsearch API name security.enable_user
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Security
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class EnableUser extends AbstractEndpoint
{
    protected $username;

    public function getURI(): string
    {
        $username = $this->username ?? null;

        if (isset($username)) {
            return "/_security/user/$username/_enable";
        }
        throw new RuntimeException('Missing parameter for the endpoint security.enable_user');
    }

    public function getParamWhitelist(): array
    {
        return [
            'refresh'
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function setUsername($username): EnableUser
    {
        if (isset($username) !== true) {
            return $this;
        }
        $this->username = $username;

        return $this;
    }
}
