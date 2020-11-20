<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Slm;

use Elasticsearch7\Common\Exceptions\RuntimeException;
use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class ExecuteLifecycle
 * Elasticsearch API name slm.execute_lifecycle
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Slm
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ExecuteLifecycle extends AbstractEndpoint
{
    protected $policy_id;

    public function getURI(): string
    {
        $policy_id = $this->policy_id ?? null;

        if (isset($policy_id)) {
            return "/_slm/policy/$policy_id/_execute";
        }
        throw new RuntimeException('Missing parameter for the endpoint slm.execute_lifecycle');
    }

    public function getParamWhitelist(): array
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function setPolicyId($policy_id): ExecuteLifecycle
    {
        if (isset($policy_id) !== true) {
            return $this;
        }
        $this->policy_id = $policy_id;

        return $this;
    }
}
