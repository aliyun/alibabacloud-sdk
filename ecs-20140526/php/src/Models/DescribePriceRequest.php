<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceRequest\dataDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceRequest\systemDisk;
use AlibabaCloud\Tea\Model;

class DescribePriceRequest extends Model
{
    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description resourceOwnerAccount
     *
     * @var string
     */
    public $resourceOwnerAccount;

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
     * @description resourceType
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description imageId
     *
     * @var string
     */
    public $imageId;

    /**
     * @description instanceType
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description ioOptimized
     *
     * @var string
     */
    public $ioOptimized;

    /**
     * @description networkType
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description internetChargeType
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description internetMaxBandwidthOut
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description SystemDisk
     *
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @description DataDisk
     *
     * @var array
     */
    public $dataDisk;

    /**
     * @description period
     *
     * @var int
     */
    public $period;

    /**
     * @description priceUnit
     *
     * @var string
     */
    public $priceUnit;

    /**
     * @description amount
     *
     * @var int
     */
    public $amount;

    /**
     * @description offeringType
     *
     * @var string
     */
    public $offeringType;

    /**
     * @description instanceAmount
     *
     * @var int
     */
    public $instanceAmount;

    /**
     * @description scope
     *
     * @var string
     */
    public $scope;

    /**
     * @description platform
     *
     * @var string
     */
    public $platform;

    /**
     * @description capacity
     *
     * @var int
     */
    public $capacity;
    protected $_name = [
        'ownerId'                 => 'OwnerId',
        'ownerAccount'            => 'OwnerAccount',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'regionId'                => 'RegionId',
        'resourceType'            => 'ResourceType',
        'imageId'                 => 'ImageId',
        'instanceType'            => 'InstanceType',
        'ioOptimized'             => 'IoOptimized',
        'instanceNetworkType'     => 'InstanceNetworkType',
        'internetChargeType'      => 'InternetChargeType',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'systemDisk'              => 'SystemDisk',
        'dataDisk'                => 'DataDisk',
        'period'                  => 'Period',
        'priceUnit'               => 'PriceUnit',
        'amount'                  => 'Amount',
        'offeringType'            => 'OfferingType',
        'instanceAmount'          => 'InstanceAmount',
        'scope'                   => 'Scope',
        'platform'                => 'Platform',
        'capacity'                => 'Capacity',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('systemDisk', $this->systemDisk, true);
        Model::validateRequired('dataDisk', $this->dataDisk, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->dataDisk) {
            $res['DataDisk'] = [];
            if (null !== $this->dataDisk && \is_array($this->dataDisk)) {
                $n = 0;
                foreach ($this->dataDisk as $item) {
                    $res['DataDisk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->priceUnit) {
            $res['PriceUnit'] = $this->priceUnit;
        }
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->offeringType) {
            $res['OfferingType'] = $this->offeringType;
        }
        if (null !== $this->instanceAmount) {
            $res['InstanceAmount'] = $this->instanceAmount;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['DataDisk'])) {
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n               = 0;
                foreach ($map['DataDisk'] as $item) {
                    $model->dataDisk[$n++] = null !== $item ? dataDisk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PriceUnit'])) {
            $model->priceUnit = $map['PriceUnit'];
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['OfferingType'])) {
            $model->offeringType = $map['OfferingType'];
        }
        if (isset($map['InstanceAmount'])) {
            $model->instanceAmount = $map['InstanceAmount'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        return $model;
    }
}
