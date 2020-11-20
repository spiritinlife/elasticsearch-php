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

namespace Elasticsearch7\Tests;

use Elasticsearch7\Endpoints\AbstractEndpoint;
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
            ['\Elasticsearch7\Endpoints\MTermVectors'],
            ['\Elasticsearch7\Endpoints\Tasks\Get'],
            ['\Elasticsearch7\Endpoints\Tasks\Cancel'],
            ['\Elasticsearch7\Endpoints\Tasks\TasksList'],
            ['\Elasticsearch7\Endpoints\Ping'],
            ['\Elasticsearch7\Endpoints\ScriptsPainlessExecute'],
            ['\Elasticsearch7\Endpoints\DeleteByQuery'],
            ['\Elasticsearch7\Endpoints\Scroll'],
            ['\Elasticsearch7\Endpoints\Explain'],
            ['\Elasticsearch7\Endpoints\Get'],
            ['\Elasticsearch7\Endpoints\UpdateByQueryRethrottle'],
            ['\Elasticsearch7\Endpoints\Delete'],
            ['\Elasticsearch7\Endpoints\SearchShards'],
            ['\Elasticsearch7\Endpoints\Mget'],
            ['\Elasticsearch7\Endpoints\Source\Get'],
            ['\Elasticsearch7\Endpoints\Source\Exists'],
            ['\Elasticsearch7\Endpoints\Bulk'],
            ['\Elasticsearch7\Endpoints\Cluster\PendingTasks'],
            ['\Elasticsearch7\Endpoints\Cluster\Health'],
            ['\Elasticsearch7\Endpoints\Cluster\Settings\Get'],
            ['\Elasticsearch7\Endpoints\Cluster\Settings\Put'],
            ['\Elasticsearch7\Endpoints\Cluster\Reroute'],
            ['\Elasticsearch7\Endpoints\Cluster\State'],
            ['\Elasticsearch7\Endpoints\Cluster\RemoteInfo'],
            ['\Elasticsearch7\Endpoints\Cluster\Stats'],
            ['\Elasticsearch7\Endpoints\Cluster\AllocationExplain'],
            ['\Elasticsearch7\Endpoints\Cluster\Nodes\HotThreads'],
            ['\Elasticsearch7\Endpoints\Cluster\Nodes\Info'],
            ['\Elasticsearch7\Endpoints\Cluster\Nodes\ReloadSecureSettings'],
            ['\Elasticsearch7\Endpoints\Cluster\Nodes\Stats'],
            ['\Elasticsearch7\Endpoints\Cluster\Nodes\Usage'],
            ['\Elasticsearch7\Endpoints\ClearScroll'],
            ['\Elasticsearch7\Endpoints\Script\Get'],
            ['\Elasticsearch7\Endpoints\Script\Delete'],
            ['\Elasticsearch7\Endpoints\Script\Put'],
            ['\Elasticsearch7\Endpoints\Exists'],
            ['\Elasticsearch7\Endpoints\Index'],
            ['\Elasticsearch7\Endpoints\UpdateByQuery'],
            ['\Elasticsearch7\Endpoints\Ingest\Pipeline\Get'],
            ['\Elasticsearch7\Endpoints\Ingest\Pipeline\Delete'],
            ['\Elasticsearch7\Endpoints\Ingest\Pipeline\Put'],
            ['\Elasticsearch7\Endpoints\Ingest\Pipeline\ProcessorGrok'],
            ['\Elasticsearch7\Endpoints\Ingest\Simulate'],
            ['\Elasticsearch7\Endpoints\SearchTemplate'],
            ['\Elasticsearch7\Endpoints\FieldCaps'],
            ['\Elasticsearch7\Endpoints\Snapshot\Get'],
            ['\Elasticsearch7\Endpoints\Snapshot\Delete'],
            ['\Elasticsearch7\Endpoints\Snapshot\Restore'],
            ['\Elasticsearch7\Endpoints\Snapshot\Create'],
            ['\Elasticsearch7\Endpoints\Snapshot\Status'],
            ['\Elasticsearch7\Endpoints\Snapshot\Repository\Verify'],
            ['\Elasticsearch7\Endpoints\Snapshot\Repository\Get'],
            ['\Elasticsearch7\Endpoints\Snapshot\Repository\Delete'],
            ['\Elasticsearch7\Endpoints\Snapshot\Repository\Create'],
            ['\Elasticsearch7\Endpoints\Count'],
            ['\Elasticsearch7\Endpoints\Create'],
            ['\Elasticsearch7\Endpoints\Info'],
            ['\Elasticsearch7\Endpoints\Indices\Type\Exists'],
            ['\Elasticsearch7\Endpoints\Indices\ForceMerge'],
            ['\Elasticsearch7\Endpoints\Indices\Flush'],
            ['\Elasticsearch7\Endpoints\Indices\Analyze'],
            ['\Elasticsearch7\Endpoints\Indices\Rollover'],
            ['\Elasticsearch7\Endpoints\Indices\Get'],
            ['\Elasticsearch7\Endpoints\Indices\Template\Get'],
            ['\Elasticsearch7\Endpoints\Indices\Template\Delete'],
            ['\Elasticsearch7\Endpoints\Indices\Template\Exists'],
            ['\Elasticsearch7\Endpoints\Indices\Template\Put'],
            ['\Elasticsearch7\Endpoints\Indices\Delete'],
            ['\Elasticsearch7\Endpoints\Indices\FlushSynced'],
            ['\Elasticsearch7\Endpoints\Indices\Refresh'],
            ['\Elasticsearch7\Endpoints\Indices\Exists'],
            ['\Elasticsearch7\Endpoints\Indices\Cache\Clear'],
            ['\Elasticsearch7\Endpoints\Indices\Settings\Get'],
            ['\Elasticsearch7\Endpoints\Indices\Settings\Put'],
            ['\Elasticsearch7\Endpoints\Indices\Create'],
            ['\Elasticsearch7\Endpoints\Indices\Close'],
            ['\Elasticsearch7\Endpoints\Indices\ShardStores'],
            ['\Elasticsearch7\Endpoints\Indices\Stats'],
            ['\Elasticsearch7\Endpoints\Indices\Validate\Query'],
            ['\Elasticsearch7\Endpoints\Indices\Alias\Get'],
            ['\Elasticsearch7\Endpoints\Indices\Alias\Delete'],
            ['\Elasticsearch7\Endpoints\Indices\Alias\Exists'],
            ['\Elasticsearch7\Endpoints\Indices\Alias\Put'],
            ['\Elasticsearch7\Endpoints\Indices\Open'],
            ['\Elasticsearch7\Endpoints\Indices\Segments'],
            ['\Elasticsearch7\Endpoints\Indices\Upgrade\Get'],
            ['\Elasticsearch7\Endpoints\Indices\Upgrade\Post'],
            ['\Elasticsearch7\Endpoints\Indices\Aliases\Update'],
            ['\Elasticsearch7\Endpoints\Indices\Recovery'],
            ['\Elasticsearch7\Endpoints\Indices\Shrink'],
            ['\Elasticsearch7\Endpoints\Indices\Split'],
            ['\Elasticsearch7\Endpoints\Indices\Mapping\Get'],
            ['\Elasticsearch7\Endpoints\Indices\Mapping\Put'],
            ['\Elasticsearch7\Endpoints\Indices\Mapping\GetField'],
            ['\Elasticsearch7\Endpoints\Reindex'],
            ['\Elasticsearch7\Endpoints\DeleteByQueryRethrottle'],
            ['\Elasticsearch7\Endpoints\MsearchTemplate'],
            ['\Elasticsearch7\Endpoints\TermVectors'],
            ['\Elasticsearch7\Endpoints\AbstractEndpoint'],
            ['\Elasticsearch7\Endpoints\RenderSearchTemplate'],
            ['\Elasticsearch7\Endpoints\Update'],
            ['\Elasticsearch7\Endpoints\Search'],
            ['\Elasticsearch7\Endpoints\ReindexRethrottle'],
            ['\Elasticsearch7\Endpoints\RankEval'],
            ['\Elasticsearch7\Endpoints\Msearch'],
            ['\Elasticsearch7\Endpoints\Cat\ThreadPool'],
            ['\Elasticsearch7\Endpoints\Cat\Fielddata'],
            ['\Elasticsearch7\Endpoints\Cat\Master'],
            ['\Elasticsearch7\Endpoints\Cat\NodeAttrs'],
            ['\Elasticsearch7\Endpoints\Cat\Aliases'],
            ['\Elasticsearch7\Endpoints\Cat\PendingTasks'],
            ['\Elasticsearch7\Endpoints\Cat\Templates'],
            ['\Elasticsearch7\Endpoints\Cat\Allocation'],
            ['\Elasticsearch7\Endpoints\Cat\Plugins'],
            ['\Elasticsearch7\Endpoints\Cat\Health'],
            ['\Elasticsearch7\Endpoints\Cat\Count'],
            ['\Elasticsearch7\Endpoints\Cat\Shards'],
            ['\Elasticsearch7\Endpoints\Cat\Repositories'],
            ['\Elasticsearch7\Endpoints\Cat\Nodes'],
            ['\Elasticsearch7\Endpoints\Cat\Tasks'],
            ['\Elasticsearch7\Endpoints\Cat\Segments'],
            ['\Elasticsearch7\Endpoints\Cat\Help'],
            ['\Elasticsearch7\Endpoints\Cat\Recovery'],
            ['\Elasticsearch7\Endpoints\Cat\Snapshots'],
            ['\Elasticsearch7\Endpoints\Cat\Indices']
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
