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

namespace Elasticsearch6\Endpoints\Security;

use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class ChangePassword
 * Elasticsearch API name security.change_password
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 */
class ChangePassword extends AbstractEndpoint
{
    protected $username;

    public function getURI(): string
    {
        $username = $this->username ?? null;

        if (isset($username)) {
            return "/_security/user/$username/_password";
        }
        return "/_security/user/_password";
    }

    public function getParamWhitelist(): array
    {
        return [
            'refresh'
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function setBody($body): ChangePassword
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }

    public function setUsername($username): ChangePassword
    {
        if (isset($username) !== true) {
            return $this;
        }
        $this->username = $username;

        return $this;
    }
}
