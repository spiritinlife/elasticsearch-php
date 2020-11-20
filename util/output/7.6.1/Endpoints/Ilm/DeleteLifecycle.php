<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\Ilm;

use Elasticsearch6\Common\Exceptions\RuntimeException;
use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class DeleteLifecycle
 * Elasticsearch API name ilm.delete_lifecycle
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\Ilm
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteLifecycle extends AbstractEndpoint
{
    protected $policy;

    public function getURI(): string
    {
        $policy = $this->policy ?? null;

        if (isset($policy)) {
            return "/_ilm/policy/$policy";
        }
        throw new RuntimeException('Missing parameter for the endpoint ilm.delete_lifecycle');
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

    public function setPolicy($policy): DeleteLifecycle
    {
        if (isset($policy) !== true) {
            return $this;
        }
        $this->policy = $policy;

        return $this;
    }
}
