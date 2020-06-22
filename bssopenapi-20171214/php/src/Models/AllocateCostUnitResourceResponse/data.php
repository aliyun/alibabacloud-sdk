<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AllocateCostUnitResourceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description ownerUid
     *
     * @var int
     */
    public $toUnitUserId;

    /**
     * @description unitId
     *
     * @var int
     */
    public $toUnitId;

    /**
     * @description isSuccess
     *
     * @var bool
     */
    public $isSuccess;
    protected $_name = [
        'toUnitUserId' => 'ToUnitUserId',
        'toUnitId'     => 'ToUnitId',
        'isSuccess'    => 'IsSuccess',
    ];

    public function validate()
    {
        Model::validateRequired('toUnitUserId', $this->toUnitUserId, true);
        Model::validateRequired('toUnitId', $this->toUnitId, true);
        Model::validateRequired('isSuccess', $this->isSuccess, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->toUnitUserId) {
            $res['ToUnitUserId'] = $this->toUnitUserId;
        }
        if (null !== $this->toUnitId) {
            $res['ToUnitId'] = $this->toUnitId;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ToUnitUserId'])) {
            $model->toUnitUserId = $map['ToUnitUserId'];
        }
        if (isset($map['ToUnitId'])) {
            $model->toUnitId = $map['ToUnitId'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }

        return $model;
    }
}
