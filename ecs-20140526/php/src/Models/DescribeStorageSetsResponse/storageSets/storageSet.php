<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageSetsResponse\storageSets;

use AlibabaCloud\Tea\Model;

class storageSet extends Model
{
    /**
     * @description storageSetId
     *
     * @var string
     */
    public $storageSetId;

    /**
     * @description createTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description storageSetName
     *
     * @var string
     */
    public $storageSetName;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description maxPartition
     *
     * @var int
     */
    public $storageSetPartitionNumber;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description zoneId
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'storageSetId'              => 'StorageSetId',
        'creationTime'              => 'CreationTime',
        'storageSetName'            => 'StorageSetName',
        'description'               => 'Description',
        'storageSetPartitionNumber' => 'StorageSetPartitionNumber',
        'regionId'                  => 'RegionId',
        'zoneId'                    => 'ZoneId',
    ];

    public function validate()
    {
        Model::validateRequired('storageSetId', $this->storageSetId, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('storageSetName', $this->storageSetName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('storageSetPartitionNumber', $this->storageSetPartitionNumber, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageSetId) {
            $res['StorageSetId'] = $this->storageSetId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->storageSetName) {
            $res['StorageSetName'] = $this->storageSetName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->storageSetPartitionNumber) {
            $res['StorageSetPartitionNumber'] = $this->storageSetPartitionNumber;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageSetId'])) {
            $model->storageSetId = $map['StorageSetId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['StorageSetName'])) {
            $model->storageSetName = $map['StorageSetName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['StorageSetPartitionNumber'])) {
            $model->storageSetPartitionNumber = $map['StorageSetPartitionNumber'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
