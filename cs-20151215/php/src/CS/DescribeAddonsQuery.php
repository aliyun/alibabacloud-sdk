<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\CS;

use AlibabaCloud\Tea\Model;

class DescribeAddonsQuery extends Model
{
    /**
     * @description region
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'region' => 'region',
    ];

    public function toMap()
    {
        $res           = [];
        $res['region'] = $this->region;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAddonsQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        return $model;
    }
}
