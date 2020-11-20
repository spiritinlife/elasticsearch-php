<?php

declare(strict_types = 1);

namespace Elasticsearch6\Common\Exceptions\Curl;

use Elasticsearch6\Common\Exceptions\ElasticsearchException;
use Elasticsearch6\Common\Exceptions\TransportException;

/**
 * Class OperationTimeoutException
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Common\Exceptions\Curl
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
  */
class OperationTimeoutException extends TransportException implements ElasticsearchException
{
}
