<?php

declare(strict_types = 1);

namespace Elasticsearch6\Namespaces;

use Elasticsearch6\Common\Exceptions\Missing404Exception;
use Elasticsearch6\Common\Exceptions\RoutingMissingException;
use Elasticsearch6\Endpoints\AbstractEndpoint;
use Elasticsearch6\Transport;
use GuzzleHttp\Ring\Future\FutureArrayInterface;

/**
 * Trait AbstractNamespace
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Namespaces
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
trait BooleanRequestWrapper
{
    /**
     * Perform Request
     *
     * @param  AbstractEndpoint $endpoint The Endpoint to perform this request against
     *
     * @throws Missing404Exception
     * @throws RoutingMissingException
     */
    public static function performRequest(AbstractEndpoint $endpoint, Transport $transport)
    {
        try {
            $response = $transport->performRequest(
                $endpoint->getMethod(),
                $endpoint->getURI(),
                $endpoint->getParams(),
                $endpoint->getBody(),
                $endpoint->getOptions()
            );

            $response = $transport->resultOrFuture($response, $endpoint->getOptions());
            if (!($response instanceof FutureArrayInterface)) {
                if ($response['status'] === 200) {
                    return true;
                } else {
                    return false;
                }
            } else {
                // async mode, can't easily resolve this...punt to user
                return $response;
            }
        } catch (Missing404Exception $exception) {
            return false;
        } catch (RoutingMissingException $exception) {
            return false;
        }
    }
}
