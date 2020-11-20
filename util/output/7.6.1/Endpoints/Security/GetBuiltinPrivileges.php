<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\Security;

use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class GetBuiltinPrivileges
 * Elasticsearch API name security.get_builtin_privileges
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\Security
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetBuiltinPrivileges extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_security/privilege/_builtin";
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
