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

namespace Elasticsearch\Endpoints\Security;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ClearCachedRealms
 * Elasticsearch API name security.clear_cached_realms
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 */
class ClearCachedRealms extends AbstractEndpoint
{
    protected $realms;

    public function getURI(): string
    {
        $realms = $this->realms ?? null;

        if (isset($realms)) {
            return "/_security/realm/$realms/_clear_cache";
        }
        throw new RuntimeException('Missing parameter for the endpoint security.clear_cached_realms');
    }

    public function getParamWhitelist(): array
    {
        return [
            'usernames'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setRealms($realms): ClearCachedRealms
    {
        if (isset($realms) !== true) {
            return $this;
        }
        if (is_array($realms) === true) {
            $realms = implode(",", $realms);
        }
        $this->realms = $realms;

        return $this;
    }
}
