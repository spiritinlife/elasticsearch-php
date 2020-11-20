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

namespace Elasticsearch6\Tests;

use Elasticsearch6\Endpoints\AbstractEndpoint;
use Throwable;

/**
 * Class BackwardCompatibleTest
 *
 * @subpackage Tests
 */
class BackwardCompatibleTest extends \PHPUnit\Framework\TestCase
{
    /**
     * List of endpoints in elasticsearch-php 7.2 branch
     */
    public function getClasses()
    {
        return [
            ['\Elasticsearch6\Endpoints\MTermVectors'],
            ['\Elasticsearch6\Endpoints\Tasks\Get'],
            ['\Elasticsearch6\Endpoints\Tasks\Cancel'],
            ['\Elasticsearch6\Endpoints\Tasks\TasksList'],
            ['\Elasticsearch6\Endpoints\Ping'],
            ['\Elasticsearch6\Endpoints\ScriptsPainlessExecute'],
            ['\Elasticsearch6\Endpoints\DeleteByQuery'],
            ['\Elasticsearch6\Endpoints\Scroll'],
            ['\Elasticsearch6\Endpoints\Explain'],
            ['\Elasticsearch6\Endpoints\Get'],
            ['\Elasticsearch6\Endpoints\UpdateByQueryRethrottle'],
            ['\Elasticsearch6\Endpoints\Delete'],
            ['\Elasticsearch6\Endpoints\SearchShards'],
            ['\Elasticsearch6\Endpoints\Mget'],
            ['\Elasticsearch6\Endpoints\Source\Get'],
            ['\Elasticsearch6\Endpoints\Source\Exists'],
            ['\Elasticsearch6\Endpoints\Bulk'],
            ['\Elasticsearch6\Endpoints\Cluster\PendingTasks'],
            ['\Elasticsearch6\Endpoints\Cluster\Health'],
            ['\Elasticsearch6\Endpoints\Cluster\Settings\Get'],
            ['\Elasticsearch6\Endpoints\Cluster\Settings\Put'],
            ['\Elasticsearch6\Endpoints\Cluster\Reroute'],
            ['\Elasticsearch6\Endpoints\Cluster\State'],
            ['\Elasticsearch6\Endpoints\Cluster\RemoteInfo'],
            ['\Elasticsearch6\Endpoints\Cluster\Stats'],
            ['\Elasticsearch6\Endpoints\Cluster\AllocationExplain'],
            ['\Elasticsearch6\Endpoints\Cluster\Nodes\HotThreads'],
            ['\Elasticsearch6\Endpoints\Cluster\Nodes\Info'],
            ['\Elasticsearch6\Endpoints\Cluster\Nodes\ReloadSecureSettings'],
            ['\Elasticsearch6\Endpoints\Cluster\Nodes\Stats'],
            ['\Elasticsearch6\Endpoints\Cluster\Nodes\Usage'],
            ['\Elasticsearch6\Endpoints\ClearScroll'],
            ['\Elasticsearch6\Endpoints\Script\Get'],
            ['\Elasticsearch6\Endpoints\Script\Delete'],
            ['\Elasticsearch6\Endpoints\Script\Put'],
            ['\Elasticsearch6\Endpoints\Exists'],
            ['\Elasticsearch6\Endpoints\Index'],
            ['\Elasticsearch6\Endpoints\UpdateByQuery'],
            ['\Elasticsearch6\Endpoints\Ingest\Pipeline\Get'],
            ['\Elasticsearch6\Endpoints\Ingest\Pipeline\Delete'],
            ['\Elasticsearch6\Endpoints\Ingest\Pipeline\Put'],
            ['\Elasticsearch6\Endpoints\Ingest\Pipeline\ProcessorGrok'],
            ['\Elasticsearch6\Endpoints\Ingest\Simulate'],
            ['\Elasticsearch6\Endpoints\SearchTemplate'],
            ['\Elasticsearch6\Endpoints\FieldCaps'],
            ['\Elasticsearch6\Endpoints\Snapshot\Get'],
            ['\Elasticsearch6\Endpoints\Snapshot\Delete'],
            ['\Elasticsearch6\Endpoints\Snapshot\Restore'],
            ['\Elasticsearch6\Endpoints\Snapshot\Create'],
            ['\Elasticsearch6\Endpoints\Snapshot\Status'],
            ['\Elasticsearch6\Endpoints\Snapshot\Repository\Verify'],
            ['\Elasticsearch6\Endpoints\Snapshot\Repository\Get'],
            ['\Elasticsearch6\Endpoints\Snapshot\Repository\Delete'],
            ['\Elasticsearch6\Endpoints\Snapshot\Repository\Create'],
            ['\Elasticsearch6\Endpoints\Count'],
            ['\Elasticsearch6\Endpoints\Create'],
            ['\Elasticsearch6\Endpoints\Info'],
            ['\Elasticsearch6\Endpoints\Indices\Type\Exists'],
            ['\Elasticsearch6\Endpoints\Indices\ForceMerge'],
            ['\Elasticsearch6\Endpoints\Indices\Flush'],
            ['\Elasticsearch6\Endpoints\Indices\Analyze'],
            ['\Elasticsearch6\Endpoints\Indices\Rollover'],
            ['\Elasticsearch6\Endpoints\Indices\Get'],
            ['\Elasticsearch6\Endpoints\Indices\Template\Get'],
            ['\Elasticsearch6\Endpoints\Indices\Template\Delete'],
            ['\Elasticsearch6\Endpoints\Indices\Template\Exists'],
            ['\Elasticsearch6\Endpoints\Indices\Template\Put'],
            ['\Elasticsearch6\Endpoints\Indices\Delete'],
            ['\Elasticsearch6\Endpoints\Indices\FlushSynced'],
            ['\Elasticsearch6\Endpoints\Indices\Refresh'],
            ['\Elasticsearch6\Endpoints\Indices\Exists'],
            ['\Elasticsearch6\Endpoints\Indices\Cache\Clear'],
            ['\Elasticsearch6\Endpoints\Indices\Settings\Get'],
            ['\Elasticsearch6\Endpoints\Indices\Settings\Put'],
            ['\Elasticsearch6\Endpoints\Indices\Create'],
            ['\Elasticsearch6\Endpoints\Indices\Close'],
            ['\Elasticsearch6\Endpoints\Indices\ShardStores'],
            ['\Elasticsearch6\Endpoints\Indices\Stats'],
            ['\Elasticsearch6\Endpoints\Indices\Validate\Query'],
            ['\Elasticsearch6\Endpoints\Indices\Alias\Get'],
            ['\Elasticsearch6\Endpoints\Indices\Alias\Delete'],
            ['\Elasticsearch6\Endpoints\Indices\Alias\Exists'],
            ['\Elasticsearch6\Endpoints\Indices\Alias\Put'],
            ['\Elasticsearch6\Endpoints\Indices\Open'],
            ['\Elasticsearch6\Endpoints\Indices\Segments'],
            ['\Elasticsearch6\Endpoints\Indices\Upgrade\Get'],
            ['\Elasticsearch6\Endpoints\Indices\Upgrade\Post'],
            ['\Elasticsearch6\Endpoints\Indices\Aliases\Update'],
            ['\Elasticsearch6\Endpoints\Indices\Recovery'],
            ['\Elasticsearch6\Endpoints\Indices\Shrink'],
            ['\Elasticsearch6\Endpoints\Indices\Split'],
            ['\Elasticsearch6\Endpoints\Indices\Mapping\Get'],
            ['\Elasticsearch6\Endpoints\Indices\Mapping\Put'],
            ['\Elasticsearch6\Endpoints\Indices\Mapping\GetField'],
            ['\Elasticsearch6\Endpoints\Reindex'],
            ['\Elasticsearch6\Endpoints\DeleteByQueryRethrottle'],
            ['\Elasticsearch6\Endpoints\MsearchTemplate'],
            ['\Elasticsearch6\Endpoints\TermVectors'],
            ['\Elasticsearch6\Endpoints\AbstractEndpoint'],
            ['\Elasticsearch6\Endpoints\RenderSearchTemplate'],
            ['\Elasticsearch6\Endpoints\Update'],
            ['\Elasticsearch6\Endpoints\Search'],
            ['\Elasticsearch6\Endpoints\ReindexRethrottle'],
            ['\Elasticsearch6\Endpoints\RankEval'],
            ['\Elasticsearch6\Endpoints\Msearch'],
            ['\Elasticsearch6\Endpoints\Cat\ThreadPool'],
            ['\Elasticsearch6\Endpoints\Cat\Fielddata'],
            ['\Elasticsearch6\Endpoints\Cat\Master'],
            ['\Elasticsearch6\Endpoints\Cat\NodeAttrs'],
            ['\Elasticsearch6\Endpoints\Cat\Aliases'],
            ['\Elasticsearch6\Endpoints\Cat\PendingTasks'],
            ['\Elasticsearch6\Endpoints\Cat\Templates'],
            ['\Elasticsearch6\Endpoints\Cat\Allocation'],
            ['\Elasticsearch6\Endpoints\Cat\Plugins'],
            ['\Elasticsearch6\Endpoints\Cat\Health'],
            ['\Elasticsearch6\Endpoints\Cat\Count'],
            ['\Elasticsearch6\Endpoints\Cat\Shards'],
            ['\Elasticsearch6\Endpoints\Cat\Repositories'],
            ['\Elasticsearch6\Endpoints\Cat\Nodes'],
            ['\Elasticsearch6\Endpoints\Cat\Tasks'],
            ['\Elasticsearch6\Endpoints\Cat\Segments'],
            ['\Elasticsearch6\Endpoints\Cat\Help'],
            ['\Elasticsearch6\Endpoints\Cat\Recovery'],
            ['\Elasticsearch6\Endpoints\Cat\Snapshots'],
            ['\Elasticsearch6\Endpoints\Cat\Indices']
        ];
    }

    /**
     * @dataProvider getClasses
     */
    public function testOldClassNamespacesPreviousTo74($class)
    {
        $this->assertTrue(class_exists($class), sprintf("Class %s does not exist", $class));
    }
}
