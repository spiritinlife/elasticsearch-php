<?php
/**
 * User: zach
 * Date: 01/20/2014
 * Time: 14:34:49 pm
 */

namespace Elasticsearch\Endpoints\Cluster\Nodes;

use Elasticsearch\Endpoints\AbstractEndpoint;
use Elasticsearch\Common\Exceptions;

/**
 * Class Hotthreads
 *
 * @category Elasticsearch
 * @package Elasticsearch\Endpoints\Cluster\Nodes
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */

class HotThreads extends AbstractEndpoint
{
    // A comma-separated list of node IDs or names to limit the returned information; use `_local` to return information from the node you&#039;re connecting to, leave empty to get information from all nodes
    private $node_id;


    /**
     * @param $node_id
     *
     * @return $this
     */
    public function setNodeID($node_id)
    {
        if (isset($node_id) !== true) {
            return $this;
        }

        $this->node_id = $node_id;
        return $this;
    }


    /**
     * @return string
     */
    protected function getURI()
    {
        $node_id = $this->node_id;
        $uri   = "/_cluster/nodes/hotthreads";

        if (isset($node_id) === true) {
            $uri = "/_cluster/nodes/$node_id/hotthreads";
        }

        return $uri;
    }


    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return array(
            'interval',
            'snapshots',
            'threads',
            'type',
        );
    }


    /**
     * @return string
     */
    protected function getMethod()
    {
        return 'GET';
    }
}