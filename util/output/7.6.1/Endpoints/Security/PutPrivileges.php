<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Security;

use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class PutPrivileges
 * Elasticsearch API name security.put_privileges
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Security
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class PutPrivileges extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_security/privilege/";
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

    public function setBody($body): PutPrivileges
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}
