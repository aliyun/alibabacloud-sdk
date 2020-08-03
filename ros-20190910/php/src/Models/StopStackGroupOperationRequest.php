<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class StopStackGroupOperationRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $operationId;
    protected $_name = [
        'regionId'    => 'RegionId',
        'operationId' => 'OperationId',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('operationId', $this->operationId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopStackGroupOperationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }

        return $model;
    }
}
