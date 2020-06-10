<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateRouterInterfaceRequest extends Model
{
    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description role
     *
     * @var string
     */
    public $role;

    /**
     * @description oppositeRegionId
     *
     * @var string
     */
    public $oppositeRegionId;

    /**
     * @description spec
     *
     * @var string
     */
    public $spec;

    /**
     * @description routerType
     *
     * @var string
     */
    public $routerType;

    /**
     * @description routerId
     *
     * @var string
     */
    public $routerId;

    /**
     * @description oppositeInterfaceId
     *
     * @var string
     */
    public $oppositeInterfaceId;

    /**
     * @description oppositeRouterId
     *
     * @var string
     */
    public $oppositeRouterId;

    /**
     * @description oppositeRouterType
     *
     * @var string
     */
    public $oppositeRouterType;

    /**
     * @description oppositeInterfaceOwnerId
     *
     * @var string
     */
    public $oppositeInterfaceOwnerId;

    /**
     * @description healthCheckSourceIp
     *
     * @var string
     */
    public $healthCheckSourceIp;

    /**
     * @description healthCheckTargetIp
     *
     * @var string
     */
    public $healthCheckTargetIp;

    /**
     * @description accessPointId
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @description oppositeAccessPointId
     *
     * @var string
     */
    public $oppositeAccessPointId;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description period
     *
     * @var int
     */
    public $period;

    /**
     * @description instanceChargeType
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description autoPay
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description pricingCycle
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description token
     *
     * @var string
     */
    public $clientToken;

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
     * @description userCidr
     *
     * @var string
     */
    public $userCidr;
    protected $_name = [
        'regionId'                 => 'RegionId',
        'role'                     => 'Role',
        'oppositeRegionId'         => 'OppositeRegionId',
        'spec'                     => 'Spec',
        'routerType'               => 'RouterType',
        'routerId'                 => 'RouterId',
        'oppositeInterfaceId'      => 'OppositeInterfaceId',
        'oppositeRouterId'         => 'OppositeRouterId',
        'oppositeRouterType'       => 'OppositeRouterType',
        'oppositeInterfaceOwnerId' => 'OppositeInterfaceOwnerId',
        'healthCheckSourceIp'      => 'HealthCheckSourceIp',
        'healthCheckTargetIp'      => 'HealthCheckTargetIp',
        'accessPointId'            => 'AccessPointId',
        'oppositeAccessPointId'    => 'OppositeAccessPointId',
        'description'              => 'Description',
        'name'                     => 'Name',
        'period'                   => 'Period',
        'instanceChargeType'       => 'InstanceChargeType',
        'autoPay'                  => 'AutoPay',
        'pricingCycle'             => 'PricingCycle',
        'clientToken'              => 'ClientToken',
        'ownerId'                  => 'OwnerId',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'resourceOwnerId'          => 'ResourceOwnerId',
        'ownerAccount'             => 'OwnerAccount',
        'userCidr'                 => 'UserCidr',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('role', $this->role, true);
        Model::validateRequired('oppositeRegionId', $this->oppositeRegionId, true);
        Model::validateRequired('spec', $this->spec, true);
        Model::validateRequired('routerType', $this->routerType, true);
        Model::validateRequired('routerId', $this->routerId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->oppositeRegionId) {
            $res['OppositeRegionId'] = $this->oppositeRegionId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->routerType) {
            $res['RouterType'] = $this->routerType;
        }
        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }
        if (null !== $this->oppositeInterfaceId) {
            $res['OppositeInterfaceId'] = $this->oppositeInterfaceId;
        }
        if (null !== $this->oppositeRouterId) {
            $res['OppositeRouterId'] = $this->oppositeRouterId;
        }
        if (null !== $this->oppositeRouterType) {
            $res['OppositeRouterType'] = $this->oppositeRouterType;
        }
        if (null !== $this->oppositeInterfaceOwnerId) {
            $res['OppositeInterfaceOwnerId'] = $this->oppositeInterfaceOwnerId;
        }
        if (null !== $this->healthCheckSourceIp) {
            $res['HealthCheckSourceIp'] = $this->healthCheckSourceIp;
        }
        if (null !== $this->healthCheckTargetIp) {
            $res['HealthCheckTargetIp'] = $this->healthCheckTargetIp;
        }
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->oppositeAccessPointId) {
            $res['OppositeAccessPointId'] = $this->oppositeAccessPointId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
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
        if (null !== $this->userCidr) {
            $res['UserCidr'] = $this->userCidr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRouterInterfaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['OppositeRegionId'])) {
            $model->oppositeRegionId = $map['OppositeRegionId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['RouterType'])) {
            $model->routerType = $map['RouterType'];
        }
        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }
        if (isset($map['OppositeInterfaceId'])) {
            $model->oppositeInterfaceId = $map['OppositeInterfaceId'];
        }
        if (isset($map['OppositeRouterId'])) {
            $model->oppositeRouterId = $map['OppositeRouterId'];
        }
        if (isset($map['OppositeRouterType'])) {
            $model->oppositeRouterType = $map['OppositeRouterType'];
        }
        if (isset($map['OppositeInterfaceOwnerId'])) {
            $model->oppositeInterfaceOwnerId = $map['OppositeInterfaceOwnerId'];
        }
        if (isset($map['HealthCheckSourceIp'])) {
            $model->healthCheckSourceIp = $map['HealthCheckSourceIp'];
        }
        if (isset($map['HealthCheckTargetIp'])) {
            $model->healthCheckTargetIp = $map['HealthCheckTargetIp'];
        }
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['OppositeAccessPointId'])) {
            $model->oppositeAccessPointId = $map['OppositeAccessPointId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
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
        if (isset($map['UserCidr'])) {
            $model->userCidr = $map['UserCidr'];
        }

        return $model;
    }
}
