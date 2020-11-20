<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\Ilm;

use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class GetLifecycle
 * Elasticsearch API name ilm.get_lifecycle
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\Ilm
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetLifecycle extends AbstractEndpoint
{
    protected $policy;

    public function getURI(): string
    {
        $policy = $this->policy ?? null;

        if (isset($policy)) {
            return "/_ilm/policy/$policy";
        }
        return "/_ilm/policy";
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

    public function setPolicy($policy): GetLifecycle
    {
        if (isset($policy) !== true) {
            return $this;
        }
        $this->policy = $policy;

        return $this;
    }
}
