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
 * Class DeleteModelSnapshot
 * Elasticsearch API name ml.delete_model_snapshot
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 */
class DeleteModelSnapshot extends AbstractEndpoint
{
    protected $job_id;
    protected $snapshot_id;

    public function getURI(): string
    {
        $job_id = $this->job_id ?? null;
        $snapshot_id = $this->snapshot_id ?? null;

        if (isset($job_id) && isset($snapshot_id)) {
            return "/_ml/anomaly_detectors/$job_id/model_snapshots/$snapshot_id";
        }
        throw new RuntimeException('Missing parameter for the endpoint ml.delete_model_snapshot');
    }

    public function getParamWhitelist(): array
    {
        return [];
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function setJobId($job_id): DeleteModelSnapshot
    {
        if (isset($job_id) !== true) {
            return $this;
        }
        $this->job_id = $job_id;

        return $this;
    }

    public function setSnapshotId($snapshot_id): DeleteModelSnapshot
    {
        if (isset($snapshot_id) !== true) {
            return $this;
        }
        $this->snapshot_id = $snapshot_id;

        return $this;
    }
}
