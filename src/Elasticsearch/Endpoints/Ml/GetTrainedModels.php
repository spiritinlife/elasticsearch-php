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

namespace Elasticsearch6\Endpoints\Ml;

use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class GetTrainedModels
 * Elasticsearch API name ml.get_trained_models
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 */
class GetTrainedModels extends AbstractEndpoint
{
    protected $model_id;

    public function getURI(): string
    {
        $model_id = $this->model_id ?? null;

        if (isset($model_id)) {
            return "/_ml/inference/$model_id";
        }
        return "/_ml/inference";
    }

    public function getParamWhitelist(): array
    {
        return [
            'allow_no_match',
            'include_model_definition',
            'decompress_definition',
            'from',
            'size',
            'tags',
            'for_export'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function setModelId($model_id): GetTrainedModels
    {
        if (isset($model_id) !== true) {
            return $this;
        }
        $this->model_id = $model_id;

        return $this;
    }
}
