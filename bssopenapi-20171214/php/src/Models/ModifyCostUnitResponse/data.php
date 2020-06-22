<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyCostUnitResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description ownerUid
     *
     * @var int
     */
    public $ownerUid;

    /**
     * @description unitId
     *
     * @var int
     */
    public $unitId;

    /**
     * @description isSuccess
     *
     * @var bool
     */
    public $isSuccess;
    protected $_name = [
        'ownerUid'  => 'OwnerUid',
        'unitId'    => 'UnitId',
        'isSuccess' => 'IsSuccess',
    ];

    public function validate()
    {
        Model::validateRequired('ownerUid', $this->ownerUid, true);
        Model::validateRequired('unitId', $this->unitId, true);
        Model::validateRequired('isSuccess', $this->isSuccess, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }
        if (null !== $this->unitId) {
            $res['UnitId'] = $this->unitId;
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
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['UnitId'])) {
            $model->unitId = $map['UnitId'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }

        return $model;
    }
}
