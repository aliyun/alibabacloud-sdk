<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class PurchaseReservedInstancesOfferingRequest extends Model
{
    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;

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
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description izNo
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description riName
     *
     * @var string
     */
    public $reservedInstanceName;

    /**
     * @description instanceType
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description scope
     *
     * @var string
     */
    public $scope;

    /**
     * @description instanceAmount
     *
     * @var int
     */
    public $instanceAmount;

    /**
     * @description offeringType
     *
     * @var string
     */
    public $offeringType;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description platform
     *
     * @var string
     */
    public $platform;

    /**
     * @description period
     *
     * @var int
     */
    public $period;

    /**
     * @description periodUnit
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'zoneId'               => 'ZoneId',
        'reservedInstanceName' => 'ReservedInstanceName',
        'instanceType'         => 'InstanceType',
        'scope'                => 'Scope',
        'instanceAmount'       => 'InstanceAmount',
        'offeringType'         => 'OfferingType',
        'description'          => 'Description',
        'platform'             => 'Platform',
        'period'               => 'Period',
        'periodUnit'           => 'PeriodUnit',
        'clientToken'          => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->reservedInstanceName) {
            $res['ReservedInstanceName'] = $this->reservedInstanceName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->instanceAmount) {
            $res['InstanceAmount'] = $this->instanceAmount;
        }
        if (null !== $this->offeringType) {
            $res['OfferingType'] = $this->offeringType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PurchaseReservedInstancesOfferingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ReservedInstanceName'])) {
            $model->reservedInstanceName = $map['ReservedInstanceName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['InstanceAmount'])) {
            $model->instanceAmount = $map['InstanceAmount'];
        }
        if (isset($map['OfferingType'])) {
            $model->offeringType = $map['OfferingType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
