<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateStorageSetRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $storageSetName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $maxPartitionNumber;
    protected $_name = [
        'clientToken'        => 'ClientToken',
        'regionId'           => 'RegionId',
        'zoneId'             => 'ZoneId',
        'storageSetName'     => 'StorageSetName',
        'description'        => 'Description',
        'maxPartitionNumber' => 'MaxPartitionNumber',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->storageSetName) {
            $res['StorageSetName'] = $this->storageSetName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->maxPartitionNumber) {
            $res['MaxPartitionNumber'] = $this->maxPartitionNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStorageSetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['StorageSetName'])) {
            $model->storageSetName = $map['StorageSetName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MaxPartitionNumber'])) {
            $model->maxPartitionNumber = $map['MaxPartitionNumber'];
        }

        return $model;
    }
}
