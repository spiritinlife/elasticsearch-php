<?php

declare(strict_types = 1);

namespace Elasticsearch6\Common\Exceptions;

/**
 * BadRequest400Exception, thrown on 400 conflict http error
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Common\Exceptions
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class BadRequest400Exception extends \Exception implements ElasticsearchException
{
}
