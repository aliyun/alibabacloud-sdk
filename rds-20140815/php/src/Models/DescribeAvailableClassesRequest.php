<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeAvailableClassesRequest extends Model
{
    /**
     * @description resourceOwnerId
     *
     * @var int
     */
    public $resourceOwnerId;

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

    /**
     * @description chargeType
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description engine
     *
     * @var string
     */
    public $engine;

    /**
     * @description version
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description dbInstanceId
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description orderType
     *
     * @var string
     */
    public $orderType;

    /**
     * @description storageType
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description category
     *
     * @var string
     */
    public $category;
    protected $_name = [
        'resourceOwnerId'       => 'ResourceOwnerId',
        'regionId'              => 'RegionId',
        'zoneId'                => 'ZoneId',
        'instanceChargeType'    => 'InstanceChargeType',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'DBInstanceId'          => 'DBInstanceId',
        'orderType'             => 'OrderType',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'category'              => 'Category',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('instanceChargeType', $this->instanceChargeType, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('engineVersion', $this->engineVersion, true);
        Model::validateRequired('DBInstanceStorageType', $this->DBInstanceStorageType, true);
        Model::validateRequired('category', $this->category, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAvailableClassesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        return $model;
    }
}
