<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Sql;

use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class Translate
 * Elasticsearch API name sql.translate
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Sql
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Translate extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_sql/translate";
    }

    public function getParamWhitelist(): array
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return isset($this->body) ? 'POST' : 'GET';
    }

    public function setBody($body): Translate
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}
