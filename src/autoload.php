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

/**
 * File required since elasticsearch-php 7.4.1 for aliasing
 * to the previous endpoint class names.
 *
 * @see https://github.com/elastic/elasticsearch-php/issues/967
 *
 * NOTE: This file will be removed with elasticsearch-php 8.0.0
 */

$classesToAlias = [
    '\Elasticsearch7\Endpoints\Nodes\HotThreads' => '\Elasticsearch7\Endpoints\Cluster\Nodes\HotThreads',
    '\Elasticsearch7\Endpoints\Nodes\Info' => '\Elasticsearch7\Endpoints\Cluster\Nodes\Info',
    '\Elasticsearch7\Endpoints\Nodes\ReloadSecureSettings' => '\Elasticsearch7\Endpoints\Cluster\Nodes\ReloadSecureSettings',
    '\Elasticsearch7\Endpoints\Nodes\Stats' => '\Elasticsearch7\Endpoints\Cluster\Nodes\Stats',
    '\Elasticsearch7\Endpoints\Nodes\Usage' => '\Elasticsearch7\Endpoints\Cluster\Nodes\Usage',
    '\Elasticsearch7\Endpoints\Cluster\GetSettings' => '\Elasticsearch7\Endpoints\Cluster\Settings\Get',
    '\Elasticsearch7\Endpoints\Cluster\PutSettings' => '\Elasticsearch7\Endpoints\Cluster\Settings\Put',
    '\Elasticsearch7\Endpoints\Indices\DeleteAlias' => '\Elasticsearch7\Endpoints\Indices\Alias\Delete',
    '\Elasticsearch7\Endpoints\Indices\ExistsAlias' => '\Elasticsearch7\Endpoints\Indices\Alias\Exists',
    '\Elasticsearch7\Endpoints\Indices\GetAlias' => '\Elasticsearch7\Endpoints\Indices\Alias\Get',
    '\Elasticsearch7\Endpoints\Indices\PutAlias' => '\Elasticsearch7\Endpoints\Indices\Alias\Put',
    '\Elasticsearch7\Endpoints\Indices\UpdateAliases' => '\Elasticsearch7\Endpoints\Indices\Aliases\Update',
    '\Elasticsearch7\Endpoints\Indices\ClearCache' => '\Elasticsearch7\Endpoints\Indices\Cache\Clear',
    '\Elasticsearch7\Endpoints\Indices\GetMapping' => '\Elasticsearch7\Endpoints\Indices\Mapping\Get',
    '\Elasticsearch7\Endpoints\Indices\GetFieldMapping' => '\Elasticsearch7\Endpoints\Indices\Mapping\GetField',
    '\Elasticsearch7\Endpoints\Indices\PutMapping' => '\Elasticsearch7\Endpoints\Indices\Mapping\Put',
    '\Elasticsearch7\Endpoints\Indices\GetSettings' => '\Elasticsearch7\Endpoints\Indices\Settings\Get',
    '\Elasticsearch7\Endpoints\Indices\PutSettings' => '\Elasticsearch7\Endpoints\Indices\Settings\Put',
    '\Elasticsearch7\Endpoints\Indices\GetTemplate' => '\Elasticsearch7\Endpoints\Indices\Template\Get',
    '\Elasticsearch7\Endpoints\Indices\PutTemplate' => '\Elasticsearch7\Endpoints\Indices\Template\Put',
    '\Elasticsearch7\Endpoints\Indices\ExistsTemplate' => '\Elasticsearch7\Endpoints\Indices\Template\Exists',
    '\Elasticsearch7\Endpoints\Indices\DeleteTemplate' => '\Elasticsearch7\Endpoints\Indices\Template\Delete',
    '\Elasticsearch7\Endpoints\Indices\ExistsType' => '\Elasticsearch7\Endpoints\Indices\Type\Exists',
    '\Elasticsearch7\Endpoints\Indices\GetUpgrade' => '\Elasticsearch7\Endpoints\Indices\Upgrade\Get',
    '\Elasticsearch7\Endpoints\Indices\Upgrade' => '\Elasticsearch7\Endpoints\Indices\Upgrade\Post',
    '\Elasticsearch7\Endpoints\Indices\ValidateQuery' => '\Elasticsearch7\Endpoints\Indices\Validate\Query',
    '\Elasticsearch7\Endpoints\Ingest\DeletePipeline' => '\Elasticsearch7\Endpoints\Ingest\Pipeline\Delete',
    '\Elasticsearch7\Endpoints\Ingest\GetPipeline' => '\Elasticsearch7\Endpoints\Ingest\Pipeline\Get',
    '\Elasticsearch7\Endpoints\Ingest\PutPipeline' => '\Elasticsearch7\Endpoints\Ingest\Pipeline\Put',
    '\Elasticsearch7\Endpoints\Ingest\ProcessorGrok' => '\Elasticsearch7\Endpoints\Ingest\Pipeline\ProcessorGrok',
    '\Elasticsearch7\Endpoints\GetScript' => '\Elasticsearch7\Endpoints\Script\Get',
    '\Elasticsearch7\Endpoints\PutScript' => '\Elasticsearch7\Endpoints\Script\Put',
    '\Elasticsearch7\Endpoints\DeleteScript' => '\Elasticsearch7\Endpoints\Script\Delete',
    '\Elasticsearch7\Endpoints\Snapshot\CreateRepository' => '\Elasticsearch7\Endpoints\Snapshot\Repository\Create',
    '\Elasticsearch7\Endpoints\Snapshot\DeleteRepository' => '\Elasticsearch7\Endpoints\Snapshot\Repository\Delete',
    '\Elasticsearch7\Endpoints\Snapshot\GetRepository' => '\Elasticsearch7\Endpoints\Snapshot\Repository\Get',
    '\Elasticsearch7\Endpoints\Snapshot\VerifyRepository' => '\Elasticsearch7\Endpoints\Snapshot\Repository\Verify',
    '\Elasticsearch7\Endpoints\GetSource' => '\Elasticsearch7\Endpoints\Source\Get',
    '\Elasticsearch7\Endpoints\ExistsSource' => '\Elasticsearch7\Endpoints\Source\Exists',
    '\Elasticsearch7\Endpoints\Tasks\ListTasks' => '\Elasticsearch7\Endpoints\Tasks\TasksList',
];

foreach ($classesToAlias as $original => $alias) {
    if (!class_exists($alias, false)) {
        class_alias($original, $alias);
    }
}
