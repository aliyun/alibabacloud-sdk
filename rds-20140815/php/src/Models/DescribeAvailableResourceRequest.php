<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeAvailableResourceRequest extends Model {
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId' => 'RegionId',
        'zoneId' => 'ZoneId',
        'instanceChargeType' => 'InstanceChargeType',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'DBInstanceClass' => 'DBInstanceClass',
        'orderType' => 'OrderType',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'category' => 'Category',
        'dispenseMode' => 'DispenseMode',
    ];
    public function validate() {
        Model::validateRequired('instanceChargeType', $this->instanceChargeType, true);
    }
    public function toMap() {
        $res = [];
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['RegionId'] = $this->regionId;
        $res['ZoneId'] = $this->zoneId;
        $res['InstanceChargeType'] = $this->instanceChargeType;
        $res['Engine'] = $this->engine;
        $res['EngineVersion'] = $this->engineVersion;
        $res['DBInstanceClass'] = $this->DBInstanceClass;
        $res['OrderType'] = $this->orderType;
        $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        $res['Category'] = $this->category;
        $res['DispenseMode'] = $this->dispenseMode;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeAvailableResourceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['ZoneId'])){
            $model->zoneId = $map['ZoneId'];
        }
        if(isset($map['InstanceChargeType'])){
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
        }
        if(isset($map['EngineVersion'])){
            $model->engineVersion = $map['EngineVersion'];
        }
        if(isset($map['DBInstanceClass'])){
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if(isset($map['OrderType'])){
            $model->orderType = $map['OrderType'];
        }
        if(isset($map['DBInstanceStorageType'])){
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if(isset($map['Category'])){
            $model->category = $map['Category'];
        }
        if(isset($map['DispenseMode'])){
            $model->dispenseMode = $map['DispenseMode'];
        }
        return $model;
    }
    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description zoneId
     * @var string
     */
    public $zoneId;

    /**
     * @description chargeType
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description engine
     * @var string
     */
    public $engine;

    /**
     * @description version
     * @var string
     */
    public $engineVersion;

    /**
     * @description dbInstanceClass
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description orderType
     * @var string
     */
    public $orderType;

    /**
     * @description storageType
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description category
     * @var string
     */
    public $category;

    /**
     * @description dispenseMode
     * @var integer
     */
    public $dispenseMode;

}
