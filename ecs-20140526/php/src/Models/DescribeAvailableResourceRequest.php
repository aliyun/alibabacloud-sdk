<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeAvailableResourceRequest extends Model
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
     * @description regionNo
     *
     * @var string
     */
    public $regionId;

    /**
     * @description instanceChargeType
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description spotStrategy
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description spotDuration
     *
     * @var int
     */
    public $spotDuration;

    /**
     * @description destinationResource
     *
     * @var string
     */
    public $destinationResource;

    /**
     * @description zoneId
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description ioOptimized
     *
     * @var string
     */
    public $ioOptimized;

    /**
     * @description dedicatedHostId
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description instanceType
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description systemDiskCategory
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description dataDiskCategory
     *
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @description networkCategory
     *
     * @var string
     */
    public $networkCategory;

    /**
     * @description cpu
     *
     * @var int
     */
    public $cores;

    /**
     * @description mem
     *
     * @var float
     */
    public $memory;

    /**
     * @description resourceType
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description scope
     *
     * @var string
     */
    public $scope;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'instanceChargeType'   => 'InstanceChargeType',
        'spotStrategy'         => 'SpotStrategy',
        'spotDuration'         => 'SpotDuration',
        'destinationResource'  => 'DestinationResource',
        'zoneId'               => 'ZoneId',
        'ioOptimized'          => 'IoOptimized',
        'dedicatedHostId'      => 'DedicatedHostId',
        'instanceType'         => 'InstanceType',
        'systemDiskCategory'   => 'SystemDiskCategory',
        'dataDiskCategory'     => 'DataDiskCategory',
        'networkCategory'      => 'NetworkCategory',
        'cores'                => 'Cores',
        'memory'               => 'Memory',
        'resourceType'         => 'ResourceType',
        'scope'                => 'Scope',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('destinationResource', $this->destinationResource, true);
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
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }
        if (null !== $this->destinationResource) {
            $res['DestinationResource'] = $this->destinationResource;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->dataDiskCategory) {
            $res['DataDiskCategory'] = $this->dataDiskCategory;
        }
        if (null !== $this->networkCategory) {
            $res['NetworkCategory'] = $this->networkCategory;
        }
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAvailableResourceRequest
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
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }
        if (isset($map['DestinationResource'])) {
            $model->destinationResource = $map['DestinationResource'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['DataDiskCategory'])) {
            $model->dataDiskCategory = $map['DataDiskCategory'];
        }
        if (isset($map['NetworkCategory'])) {
            $model->networkCategory = $map['NetworkCategory'];
        }
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
