<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\CS;

use AlibabaCloud\Tea\Model;

class DescribeClustersRequest extends Model
{
    /**
     * @description query
     *
     * @var DescribeClustersQuery
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
     * @return DescribeClustersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['query'])) {
            $model->query = DescribeClustersQuery::fromMap($map['query']);
        }
        if (isset($map['headers'])) {
            $model->headers = $map['headers'];
        }

        return $model;
    }
}
