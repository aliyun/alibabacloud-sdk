<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetInventoryResponse\data;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @description buyerId
     *
     * @var string
     */
    public $buyerId;

    /**
     * @description commodityCode
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description currentInventory
     *
     * @var string
     */
    public $currentInventory;

    /**
     * @description gmtValidEndTime
     *
     * @var string
     */
    public $validEndTime;

    /**
     * @description gmtValidStartTime
     *
     * @var string
     */
    public $validStartTime;

    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description inventoryId
     *
     * @var string
     */
    public $inventoryId;
    protected $_name = [
        'buyerId'          => 'BuyerId',
        'commodityCode'    => 'CommodityCode',
        'currentInventory' => 'CurrentInventory',
        'validEndTime'     => 'ValidEndTime',
        'validStartTime'   => 'ValidStartTime',
        'instanceId'       => 'InstanceId',
        'inventoryId'      => 'InventoryId',
    ];

    public function validate()
    {
        Model::validateRequired('buyerId', $this->buyerId, true);
        Model::validateRequired('commodityCode', $this->commodityCode, true);
        Model::validateRequired('currentInventory', $this->currentInventory, true);
        Model::validateRequired('validEndTime', $this->validEndTime, true);
        Model::validateRequired('validStartTime', $this->validStartTime, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('inventoryId', $this->inventoryId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyerId) {
            $res['BuyerId'] = $this->buyerId;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->currentInventory) {
            $res['CurrentInventory'] = $this->currentInventory;
        }
        if (null !== $this->validEndTime) {
            $res['ValidEndTime'] = $this->validEndTime;
        }
        if (null !== $this->validStartTime) {
            $res['ValidStartTime'] = $this->validStartTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->inventoryId) {
            $res['InventoryId'] = $this->inventoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuyerId'])) {
            $model->buyerId = $map['BuyerId'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CurrentInventory'])) {
            $model->currentInventory = $map['CurrentInventory'];
        }
        if (isset($map['ValidEndTime'])) {
            $model->validEndTime = $map['ValidEndTime'];
        }
        if (isset($map['ValidStartTime'])) {
            $model->validStartTime = $map['ValidStartTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InventoryId'])) {
            $model->inventoryId = $map['InventoryId'];
        }

        return $model;
    }
}
