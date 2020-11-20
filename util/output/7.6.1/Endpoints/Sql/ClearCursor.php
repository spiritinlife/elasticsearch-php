<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\Sql;

use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class ClearCursor
 * Elasticsearch API name sql.clear_cursor
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\Sql
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ClearCursor extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_sql/close";
    }

    public function getParamWhitelist(): array
    {
        return [];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setBody($body): ClearCursor
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}
