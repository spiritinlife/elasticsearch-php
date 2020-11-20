<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Cat;

use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class Help
 * Elasticsearch API name cat.help
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Cat
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Help extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_cat";
    }

    public function getParamWhitelist(): array
    {
        return [
            'help',
            's'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
