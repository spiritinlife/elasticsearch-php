<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\License;

use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class PostStartBasic
 * Elasticsearch API name license.post_start_basic
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\License
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class PostStartBasic extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_license/start_basic";
    }

    public function getParamWhitelist(): array
    {
        return [
            'acknowledge'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }
}
