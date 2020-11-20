<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\License;

use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class Delete
 * Elasticsearch API name license.delete
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\License
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Delete extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_license";
    }

    public function getParamWhitelist(): array
    {
        return [];
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }
}
