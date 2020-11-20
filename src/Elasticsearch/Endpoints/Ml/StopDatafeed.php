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

namespace Elasticsearch7\Endpoints\Ml;

use Elasticsearch7\Common\Exceptions\RuntimeException;
use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class StopDatafeed
 * Elasticsearch API name ml.stop_datafeed
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 */
class StopDatafeed extends AbstractEndpoint
{
    protected $datafeed_id;

    public function getURI(): string
    {
        $datafeed_id = $this->datafeed_id ?? null;

        if (isset($datafeed_id)) {
            return "/_ml/datafeeds/$datafeed_id/_stop";
        }
        throw new RuntimeException('Missing parameter for the endpoint ml.stop_datafeed');
    }

    public function getParamWhitelist(): array
    {
        return [
            'allow_no_datafeeds',
            'force',
            'timeout'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setDatafeedId($datafeed_id): StopDatafeed
    {
        if (isset($datafeed_id) !== true) {
            return $this;
        }
        $this->datafeed_id = $datafeed_id;

        return $this;
    }
}
