<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Tasks;

use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class ListTasks
 * Elasticsearch API name tasks.list
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Tasks
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ListTasks extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_tasks";
    }

    public function getParamWhitelist(): array
    {
        return [
            'nodes',
            'actions',
            'detailed',
            'parent_task_id',
            'wait_for_completion',
            'group_by',
            'timeout'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
