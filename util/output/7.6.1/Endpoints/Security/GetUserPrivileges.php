<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Security;

use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class GetUserPrivileges
 * Elasticsearch API name security.get_user_privileges
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Security
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetUserPrivileges extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_security/user/_privileges";
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
}
