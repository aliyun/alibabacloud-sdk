<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\CS;

use AlibabaCloud\Tea\Model;

class DescribeAddonsRequest extends Model
{
    /**
     * @description query
     *
     * @var DescribeAddonsQuery
     */
    public $query;
    /**
     * @description headers
     *
     * @var array
     */
    public $headers;
    protected $_name = [
        'query'   => 'query',
        'headers' => 'headers',
    ];

    public function validate()
    {
        Model::validateRequired('query', $this->query, true);
    }

    public function toMap()
    {
        $res            = [];
        $res['query']   = null !== $this->query ? $this->query->toMap() : null;
        $res['headers'] = $this->headers;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAddonsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['query'])) {
            $model->query = DescribeAddonsQuery::fromMap($map['query']);
        }
        if (isset($map['headers'])) {
            $model->headers = $map['headers'];
        }

        return $model;
    }
}
