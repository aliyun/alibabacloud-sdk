<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class DeleteCostUnitRequest extends Model
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
    protected $_name = [
        'ownerUid' => 'OwnerUid',
        'unitId'   => 'UnitId',
    ];

    public function validate()
    {
        Model::validateRequired('ownerUid', $this->ownerUid, true);
        Model::validateRequired('unitId', $this->unitId, true);
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCostUnitRequest
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

        return $model;
    }
}
