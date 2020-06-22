<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResponse\data;

use AlibabaCloud\Tea\Model;

class costUnitDtoList extends Model
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
     * @description unitId
     *
     * @var int
     */
    public $unitId;

    /**
     * @description unitName
     *
     * @var string
     */
    public $unitName;
    protected $_name = [
        'ownerUid'     => 'OwnerUid',
        'parentUnitId' => 'ParentUnitId',
        'unitId'       => 'UnitId',
        'unitName'     => 'UnitName',
    ];

    public function validate()
    {
        Model::validateRequired('ownerUid', $this->ownerUid, true);
        Model::validateRequired('parentUnitId', $this->parentUnitId, true);
        Model::validateRequired('unitId', $this->unitId, true);
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
        if (null !== $this->unitId) {
            $res['UnitId'] = $this->unitId;
        }
        if (null !== $this->unitName) {
            $res['UnitName'] = $this->unitName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return costUnitDtoList
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
        if (isset($map['UnitId'])) {
            $model->unitId = $map['UnitId'];
        }
        if (isset($map['UnitName'])) {
            $model->unitName = $map['UnitName'];
        }

        return $model;
    }
}
