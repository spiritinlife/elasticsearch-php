<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Xpack;

use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class Info
 * Elasticsearch API name xpack.info
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Xpack
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Info extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_xpack";
    }

    public function getParamWhitelist(): array
    {
        return [
            'categories'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
