<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Ml;

use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class SetUpgradeMode
 * Elasticsearch API name ml.set_upgrade_mode
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class SetUpgradeMode extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_ml/set_upgrade_mode";
    }

    public function getParamWhitelist(): array
    {
        return [
            'enabled',
            'timeout'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }
}
