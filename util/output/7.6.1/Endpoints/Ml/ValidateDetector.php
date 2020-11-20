<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Ml;

use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class ValidateDetector
 * Elasticsearch API name ml.validate_detector
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ValidateDetector extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_ml/anomaly_detectors/_validate/detector";
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

    public function setBody($body): ValidateDetector
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}
