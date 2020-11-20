<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Ingest;

use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class ProcessorGrok
 * Elasticsearch API name ingest.processor_grok
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Ingest
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ProcessorGrok extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_ingest/processor/grok";
    }

    public function getParamWhitelist(): array
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
