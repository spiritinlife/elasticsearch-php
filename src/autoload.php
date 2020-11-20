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
    '\Elasticsearch6\Endpoints\Nodes\HotThreads' => '\Elasticsearch6\Endpoints\Cluster\Nodes\HotThreads',
    '\Elasticsearch6\Endpoints\Nodes\Info' => '\Elasticsearch6\Endpoints\Cluster\Nodes\Info',
    '\Elasticsearch6\Endpoints\Nodes\ReloadSecureSettings' => '\Elasticsearch6\Endpoints\Cluster\Nodes\ReloadSecureSettings',
    '\Elasticsearch6\Endpoints\Nodes\Stats' => '\Elasticsearch6\Endpoints\Cluster\Nodes\Stats',
    '\Elasticsearch6\Endpoints\Nodes\Usage' => '\Elasticsearch6\Endpoints\Cluster\Nodes\Usage',
    '\Elasticsearch6\Endpoints\Cluster\GetSettings' => '\Elasticsearch6\Endpoints\Cluster\Settings\Get',
    '\Elasticsearch6\Endpoints\Cluster\PutSettings' => '\Elasticsearch6\Endpoints\Cluster\Settings\Put',
    '\Elasticsearch6\Endpoints\Indices\DeleteAlias' => '\Elasticsearch6\Endpoints\Indices\Alias\Delete',
    '\Elasticsearch6\Endpoints\Indices\ExistsAlias' => '\Elasticsearch6\Endpoints\Indices\Alias\Exists',
    '\Elasticsearch6\Endpoints\Indices\GetAlias' => '\Elasticsearch6\Endpoints\Indices\Alias\Get',
    '\Elasticsearch6\Endpoints\Indices\PutAlias' => '\Elasticsearch6\Endpoints\Indices\Alias\Put',
    '\Elasticsearch6\Endpoints\Indices\UpdateAliases' => '\Elasticsearch6\Endpoints\Indices\Aliases\Update',
    '\Elasticsearch6\Endpoints\Indices\ClearCache' => '\Elasticsearch6\Endpoints\Indices\Cache\Clear',
    '\Elasticsearch6\Endpoints\Indices\GetMapping' => '\Elasticsearch6\Endpoints\Indices\Mapping\Get',
    '\Elasticsearch6\Endpoints\Indices\GetFieldMapping' => '\Elasticsearch6\Endpoints\Indices\Mapping\GetField',
    '\Elasticsearch6\Endpoints\Indices\PutMapping' => '\Elasticsearch6\Endpoints\Indices\Mapping\Put',
    '\Elasticsearch6\Endpoints\Indices\GetSettings' => '\Elasticsearch6\Endpoints\Indices\Settings\Get',
    '\Elasticsearch6\Endpoints\Indices\PutSettings' => '\Elasticsearch6\Endpoints\Indices\Settings\Put',
    '\Elasticsearch6\Endpoints\Indices\GetTemplate' => '\Elasticsearch6\Endpoints\Indices\Template\Get',
    '\Elasticsearch6\Endpoints\Indices\PutTemplate' => '\Elasticsearch6\Endpoints\Indices\Template\Put',
    '\Elasticsearch6\Endpoints\Indices\ExistsTemplate' => '\Elasticsearch6\Endpoints\Indices\Template\Exists',
    '\Elasticsearch6\Endpoints\Indices\DeleteTemplate' => '\Elasticsearch6\Endpoints\Indices\Template\Delete',
    '\Elasticsearch6\Endpoints\Indices\ExistsType' => '\Elasticsearch6\Endpoints\Indices\Type\Exists',
    '\Elasticsearch6\Endpoints\Indices\GetUpgrade' => '\Elasticsearch6\Endpoints\Indices\Upgrade\Get',
    '\Elasticsearch6\Endpoints\Indices\Upgrade' => '\Elasticsearch6\Endpoints\Indices\Upgrade\Post',
    '\Elasticsearch6\Endpoints\Indices\ValidateQuery' => '\Elasticsearch6\Endpoints\Indices\Validate\Query',
    '\Elasticsearch6\Endpoints\Ingest\DeletePipeline' => '\Elasticsearch6\Endpoints\Ingest\Pipeline\Delete',
    '\Elasticsearch6\Endpoints\Ingest\GetPipeline' => '\Elasticsearch6\Endpoints\Ingest\Pipeline\Get',
    '\Elasticsearch6\Endpoints\Ingest\PutPipeline' => '\Elasticsearch6\Endpoints\Ingest\Pipeline\Put',
    '\Elasticsearch6\Endpoints\Ingest\ProcessorGrok' => '\Elasticsearch6\Endpoints\Ingest\Pipeline\ProcessorGrok',
    '\Elasticsearch6\Endpoints\GetScript' => '\Elasticsearch6\Endpoints\Script\Get',
    '\Elasticsearch6\Endpoints\PutScript' => '\Elasticsearch6\Endpoints\Script\Put',
    '\Elasticsearch6\Endpoints\DeleteScript' => '\Elasticsearch6\Endpoints\Script\Delete',
    '\Elasticsearch6\Endpoints\Snapshot\CreateRepository' => '\Elasticsearch6\Endpoints\Snapshot\Repository\Create',
    '\Elasticsearch6\Endpoints\Snapshot\DeleteRepository' => '\Elasticsearch6\Endpoints\Snapshot\Repository\Delete',
    '\Elasticsearch6\Endpoints\Snapshot\GetRepository' => '\Elasticsearch6\Endpoints\Snapshot\Repository\Get',
    '\Elasticsearch6\Endpoints\Snapshot\VerifyRepository' => '\Elasticsearch6\Endpoints\Snapshot\Repository\Verify',
    '\Elasticsearch6\Endpoints\GetSource' => '\Elasticsearch6\Endpoints\Source\Get',
    '\Elasticsearch6\Endpoints\ExistsSource' => '\Elasticsearch6\Endpoints\Source\Exists',
    '\Elasticsearch6\Endpoints\Tasks\ListTasks' => '\Elasticsearch6\Endpoints\Tasks\TasksList',
];

foreach ($classesToAlias as $original => $alias) {
    if (!class_exists($alias, false)) {
        class_alias($original, $alias);
    }
}
