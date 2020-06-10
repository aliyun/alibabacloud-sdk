<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20150901\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourceTypesQuery extends Model
{
    /**
     * @description SupportStatus
     *
     * @var string
     */
    public $supportStatus;
    protected $_name = [
        'supportStatus' => 'SupportStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportStatus) {
            $res['SupportStatus'] = $this->supportStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceTypesQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportStatus'])) {
            $model->supportStatus = $map['SupportStatus'];
        }

        return $model;
    }
}
