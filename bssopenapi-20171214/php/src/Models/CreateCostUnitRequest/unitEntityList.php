<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateCostUnitRequest;

use AlibabaCloud\Tea\Model;

class unitEntityList extends Model
{
    /**
     * @description ownerUid
     *
     * @var int
     */
    public $ownerUid;

    /**
     * @description parentUnitId
     *
     * @var int
     */
    public $parentUnitId;

    /**
     * @description unitName
     *
     * @var string
     */
    public $unitName;
    protected $_name = [
        'ownerUid'     => 'OwnerUid',
        'parentUnitId' => 'ParentUnitId',
        'unitName'     => 'UnitName',
    ];

    public function validate()
    {
        Model::validateRequired('ownerUid', $this->ownerUid, true);
        Model::validateRequired('parentUnitId', $this->parentUnitId, true);
        Model::validateRequired('unitName', $this->unitName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }
        if (null !== $this->parentUnitId) {
            $res['ParentUnitId'] = $this->parentUnitId;
        }
        if (null !== $this->unitName) {
            $res['UnitName'] = $this->unitName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return unitEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['ParentUnitId'])) {
            $model->parentUnitId = $map['ParentUnitId'];
        }
        if (isset($map['UnitName'])) {
            $model->unitName = $map['UnitName'];
        }

        return $model;
    }
}
