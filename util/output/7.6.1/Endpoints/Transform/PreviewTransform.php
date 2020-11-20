<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\Transform;

use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class PreviewTransform
 * Elasticsearch API name transform.preview_transform
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\Transform
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class PreviewTransform extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_transform/_preview";
    }

    public function getParamWhitelist(): array
    {
        return [];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setBody($body): PreviewTransform
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}
