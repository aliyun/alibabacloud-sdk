<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeStorageCapacityUnitsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $capacity;

    /**
     * @var array
     */
    public $storageCapacityUnitId;

    /**
     * @var array
     */
    public $status;

    /**
     * @var string
     */
    public $allocationType;
    protected $_name = [
        'regionId'              => 'RegionId',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'name'                  => 'Name',
        'capacity'              => 'Capacity',
        'storageCapacityUnitId' => 'StorageCapacityUnitId',
        'status'                => 'Status',
        'allocationType'        => 'AllocationType',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->storageCapacityUnitId) {
            $res['StorageCapacityUnitId'] = $this->storageCapacityUnitId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->allocationType) {
            $res['AllocationType'] = $this->allocationType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStorageCapacityUnitsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['StorageCapacityUnitId'])) {
            if (!empty($map['StorageCapacityUnitId'])) {
                $model->storageCapacityUnitId = $map['StorageCapacityUnitId'];
            }
        }
        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = $map['Status'];
            }
        }
        if (isset($map['AllocationType'])) {
            $model->allocationType = $map['AllocationType'];
        }

        return $model;
    }
}
