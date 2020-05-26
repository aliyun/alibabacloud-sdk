<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20150901\Models;

use AlibabaCloud\Tea\Model;

class DeleteStackRequest extends Model
{
    /**
     * @description headers
     *
     * @var array
     */
    public $headers;

    /**
     * @description query
     *
     * @var DeleteStackQuery
     */
    public $query;
    protected $_name = [
        'headers' => 'headers',
        'query'   => 'query',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res            = [];
        $res['headers'] = $this->headers;
        $res['query']   = null !== $this->query ? $this->query->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteStackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['headers'])) {
            $model->headers = $map['headers'];
        }
        if (isset($map['query'])) {
            $model->query = DeleteStackQuery::fromMap($map['query']);
        }

        return $model;
    }
}
