<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\Slm;

use Elasticsearch6\Common\Exceptions\RuntimeException;
use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class DeleteLifecycle
 * Elasticsearch API name slm.delete_lifecycle
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\Slm
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteLifecycle extends AbstractEndpoint
{
    protected $policy_id;

    public function getURI(): string
    {
        $policy_id = $this->policy_id ?? null;

        if (isset($policy_id)) {
            return "/_slm/policy/$policy_id";
        }
        throw new RuntimeException('Missing parameter for the endpoint slm.delete_lifecycle');
    }

    public function getParamWhitelist(): array
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function setPolicyId($policy_id): DeleteLifecycle
    {
        if (isset($policy_id) !== true) {
            return $this;
        }
        $this->policy_id = $policy_id;

        return $this;
    }
}
