<?php
/**
 * Elasticsearch PHP client
 *
 * @link      https://github.com/elastic/elasticsearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1
 *
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */

declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Monitoring;

use Elasticsearch7\Common\Exceptions\InvalidArgumentException;
use Elasticsearch7\Endpoints\AbstractEndpoint;
use Elasticsearch7\Serializers\SerializerInterface;
use Traversable;

/**
 * Class Bulk
 * Elasticsearch API name monitoring.bulk
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 */
class Bulk extends AbstractEndpoint
{

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function getURI(): string
    {
        $type = $this->type ?? null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($type)) {
            return "/_monitoring/$type/bulk";
        }
        return "/_monitoring/bulk";
    }

    public function getParamWhitelist(): array
    {
        return [
            'system_id',
            'system_api_version',
            'interval'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }
    
    public function setBody($body): Bulk
    {
        if (isset($body) !== true) {
            return $this;
        }
        if (is_array($body) === true || $body instanceof Traversable) {
            foreach ($body as $item) {
                $this->body .= $this->serializer->serialize($item) . "\n";
            }
        } elseif (is_string($body)) {
            $this->body = $body;
            if (substr($body, -1) != "\n") {
                $this->body .= "\n";
            }
        } else {
            throw new InvalidArgumentException("Body must be an array, traversable object or string");
        }
        return $this;
    }
}
