<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class CancelUpdateStackRequest extends Model
{
    /**
     * @description StackId
     *
     * @var string
     */
    public $stackId;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description CancelType
     *
     * @var string
     */
    public $cancelType;
    protected $_name = [
        'stackId'    => 'StackId',
        'regionId'   => 'RegionId',
        'cancelType' => 'CancelType',
    ];

    public function validate()
    {
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['StackId']    = $this->stackId;
        $res['RegionId']   = $this->regionId;
        $res['CancelType'] = $this->cancelType;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelUpdateStackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['CancelType'])) {
            $model->cancelType = $map['CancelType'];
        }

        return $model;
    }
}
