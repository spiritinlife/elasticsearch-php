<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\Ml;

use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class Validate
 * Elasticsearch API name ml.validate
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Validate extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_ml/anomaly_detectors/_validate";
    }

    public function getParamWhitelist(): array
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setBody($body): Validate
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}
