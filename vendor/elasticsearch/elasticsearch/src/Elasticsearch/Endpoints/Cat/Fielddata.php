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

namespace Elasticsearch\Endpoints\Cat;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Fielddata
 * Elasticsearch API name cat.fielddata
 *
 * NOTE: this file is autogenerated using util/GenerateEndpoints.php
 * and Elasticsearch 7.14.0-SNAPSHOT (0c2e2f790af0e57b13ad6bf883541a4fea9651d4)
 */
class Fielddata extends AbstractEndpoint
{
    protected $fields;

    public function getURI(): string
    {
        $fields = $this->fields ?? null;

        if (isset($fields)) {
            return "/_cat/fielddata/$fields";
        }
        return "/_cat/fielddata";
    }

    public function getParamWhitelist(): array
    {
        return [
            'format',
            'bytes',
            'h',
            'help',
            's',
            'v',
            'fields'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function setFields($fields): Fielddata
    {
        if (isset($fields) !== true) {
            return $this;
        }
        if (is_array($fields) === true) {
            $fields = implode(",", $fields);
        }
        $this->fields = $fields;

        return $this;
    }
}
