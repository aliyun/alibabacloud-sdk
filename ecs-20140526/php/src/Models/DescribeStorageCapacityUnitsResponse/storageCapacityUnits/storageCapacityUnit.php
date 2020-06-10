<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageCapacityUnitsResponse\storageCapacityUnits;

use AlibabaCloud\Tea\Model;

class storageCapacityUnit extends Model
{
    /**
     * @description regionNo
     *
     * @var string
     */
    public $regionId;

    /**
     * @description resourceId
     *
     * @var string
     */
    public $storageCapacityUnitId;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description capacity
     *
     * @var int
     */
    public $capacity;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description createUtcTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description expireUtcTime
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description startUtcTime
     *
     * @var string
     */
    public $startTime;

    /**
     * @description description
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'regionId'              => 'RegionId',
        'storageCapacityUnitId' => 'StorageCapacityUnitId',
        'name'                  => 'Name',
        'capacity'              => 'Capacity',
        'status'                => 'Status',
        'creationTime'          => 'CreationTime',
        'expiredTime'           => 'ExpiredTime',
        'startTime'             => 'StartTime',
        'description'           => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('storageCapacityUnitId', $this->storageCapacityUnitId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('capacity', $this->capacity, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('expiredTime', $this->expiredTime, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('description', $this->description, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->storageCapacityUnitId) {
            $res['StorageCapacityUnitId'] = $this->storageCapacityUnitId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageCapacityUnit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StorageCapacityUnitId'])) {
            $model->storageCapacityUnitId = $map['StorageCapacityUnitId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
