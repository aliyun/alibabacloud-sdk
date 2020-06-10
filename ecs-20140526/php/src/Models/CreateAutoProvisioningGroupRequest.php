<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest\launchTemplateConfig;
use AlibabaCloud\Tea\Model;

class CreateAutoProvisioningGroupRequest extends Model
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
     * @description fleetName
     *
     * @var string
     */
    public $autoProvisioningGroupName;

    /**
     * @description typeStr
     *
     * @var string
     */
    public $autoProvisioningGroupType;

    /**
     * @description spotAllocationStrategy
     *
     * @var string
     */
    public $spotAllocationStrategy;

    /**
     * @description spotInstanceInterruptionBehavior
     *
     * @var string
     */
    public $spotInstanceInterruptionBehavior;

    /**
     * @description spotInstancePoolsToUseCount
     *
     * @var int
     */
    public $spotInstancePoolsToUseCount;

    /**
     * @description onDemandAllocationStrategy
     *
     * @var string
     */
    public $payAsYouGoAllocationStrategy;

    /**
     * @description excessCapacityTerminationPolicyStr
     *
     * @var string
     */
    public $excessCapacityTerminationPolicy;

    /**
     * @description validFromStr
     *
     * @var string
     */
    public $validFrom;

    /**
     * @description validUntilStr
     *
     * @var string
     */
    public $validUntil;

    /**
     * @description terminateInstancesWithExpiration
     *
     * @var bool
     */
    public $terminateInstancesWithExpiration;

    /**
     * @description terminateInstances
     *
     * @var bool
     */
    public $terminateInstances;

    /**
     * @description maxSpotPrice
     *
     * @var float
     */
    public $maxSpotPrice;

    /**
     * @description totalTargetCapacity
     *
     * @var string
     */
    public $totalTargetCapacity;

    /**
     * @description onDemandTargetCapacity
     *
     * @var string
     */
    public $payAsYouGoTargetCapacity;

    /**
     * @description spotTargetCapacity
     *
     * @var string
     */
    public $spotTargetCapacity;

    /**
     * @description defaultTargetCapacityTypeStr
     *
     * @var string
     */
    public $defaultTargetCapacityType;

    /**
     * @description launchTemplateId
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @description launchTemplateVersion
     *
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @description launchTemplateConfigs
     *
     * @var array
     */
    public $launchTemplateConfig;

    /**
     * @description description
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'ownerId'                          => 'OwnerId',
        'resourceOwnerAccount'             => 'ResourceOwnerAccount',
        'resourceOwnerId'                  => 'ResourceOwnerId',
        'ownerAccount'                     => 'OwnerAccount',
        'regionId'                         => 'RegionId',
        'resourceGroupId'                  => 'ResourceGroupId',
        'autoProvisioningGroupName'        => 'AutoProvisioningGroupName',
        'autoProvisioningGroupType'        => 'AutoProvisioningGroupType',
        'spotAllocationStrategy'           => 'SpotAllocationStrategy',
        'spotInstanceInterruptionBehavior' => 'SpotInstanceInterruptionBehavior',
        'spotInstancePoolsToUseCount'      => 'SpotInstancePoolsToUseCount',
        'payAsYouGoAllocationStrategy'     => 'PayAsYouGoAllocationStrategy',
        'excessCapacityTerminationPolicy'  => 'ExcessCapacityTerminationPolicy',
        'validFrom'                        => 'ValidFrom',
        'validUntil'                       => 'ValidUntil',
        'terminateInstancesWithExpiration' => 'TerminateInstancesWithExpiration',
        'terminateInstances'               => 'TerminateInstances',
        'maxSpotPrice'                     => 'MaxSpotPrice',
        'totalTargetCapacity'              => 'TotalTargetCapacity',
        'payAsYouGoTargetCapacity'         => 'PayAsYouGoTargetCapacity',
        'spotTargetCapacity'               => 'SpotTargetCapacity',
        'defaultTargetCapacityType'        => 'DefaultTargetCapacityType',
        'launchTemplateId'                 => 'LaunchTemplateId',
        'launchTemplateVersion'            => 'LaunchTemplateVersion',
        'launchTemplateConfig'             => 'LaunchTemplateConfig',
        'description'                      => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('totalTargetCapacity', $this->totalTargetCapacity, true);
        Model::validateRequired('launchTemplateId', $this->launchTemplateId, true);
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
        if (null !== $this->autoProvisioningGroupName) {
            $res['AutoProvisioningGroupName'] = $this->autoProvisioningGroupName;
        }
        if (null !== $this->autoProvisioningGroupType) {
            $res['AutoProvisioningGroupType'] = $this->autoProvisioningGroupType;
        }
        if (null !== $this->spotAllocationStrategy) {
            $res['SpotAllocationStrategy'] = $this->spotAllocationStrategy;
        }
        if (null !== $this->spotInstanceInterruptionBehavior) {
            $res['SpotInstanceInterruptionBehavior'] = $this->spotInstanceInterruptionBehavior;
        }
        if (null !== $this->spotInstancePoolsToUseCount) {
            $res['SpotInstancePoolsToUseCount'] = $this->spotInstancePoolsToUseCount;
        }
        if (null !== $this->payAsYouGoAllocationStrategy) {
            $res['PayAsYouGoAllocationStrategy'] = $this->payAsYouGoAllocationStrategy;
        }
        if (null !== $this->excessCapacityTerminationPolicy) {
            $res['ExcessCapacityTerminationPolicy'] = $this->excessCapacityTerminationPolicy;
        }
        if (null !== $this->validFrom) {
            $res['ValidFrom'] = $this->validFrom;
        }
        if (null !== $this->validUntil) {
            $res['ValidUntil'] = $this->validUntil;
        }
        if (null !== $this->terminateInstancesWithExpiration) {
            $res['TerminateInstancesWithExpiration'] = $this->terminateInstancesWithExpiration;
        }
        if (null !== $this->terminateInstances) {
            $res['TerminateInstances'] = $this->terminateInstances;
        }
        if (null !== $this->maxSpotPrice) {
            $res['MaxSpotPrice'] = $this->maxSpotPrice;
        }
        if (null !== $this->totalTargetCapacity) {
            $res['TotalTargetCapacity'] = $this->totalTargetCapacity;
        }
        if (null !== $this->payAsYouGoTargetCapacity) {
            $res['PayAsYouGoTargetCapacity'] = $this->payAsYouGoTargetCapacity;
        }
        if (null !== $this->spotTargetCapacity) {
            $res['SpotTargetCapacity'] = $this->spotTargetCapacity;
        }
        if (null !== $this->defaultTargetCapacityType) {
            $res['DefaultTargetCapacityType'] = $this->defaultTargetCapacityType;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }
        if (null !== $this->launchTemplateConfig) {
            $res['LaunchTemplateConfig'] = [];
            if (null !== $this->launchTemplateConfig && \is_array($this->launchTemplateConfig)) {
                $n = 0;
                foreach ($this->launchTemplateConfig as $item) {
                    $res['LaunchTemplateConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAutoProvisioningGroupRequest
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
        if (isset($map['AutoProvisioningGroupName'])) {
            $model->autoProvisioningGroupName = $map['AutoProvisioningGroupName'];
        }
        if (isset($map['AutoProvisioningGroupType'])) {
            $model->autoProvisioningGroupType = $map['AutoProvisioningGroupType'];
        }
        if (isset($map['SpotAllocationStrategy'])) {
            $model->spotAllocationStrategy = $map['SpotAllocationStrategy'];
        }
        if (isset($map['SpotInstanceInterruptionBehavior'])) {
            $model->spotInstanceInterruptionBehavior = $map['SpotInstanceInterruptionBehavior'];
        }
        if (isset($map['SpotInstancePoolsToUseCount'])) {
            $model->spotInstancePoolsToUseCount = $map['SpotInstancePoolsToUseCount'];
        }
        if (isset($map['PayAsYouGoAllocationStrategy'])) {
            $model->payAsYouGoAllocationStrategy = $map['PayAsYouGoAllocationStrategy'];
        }
        if (isset($map['ExcessCapacityTerminationPolicy'])) {
            $model->excessCapacityTerminationPolicy = $map['ExcessCapacityTerminationPolicy'];
        }
        if (isset($map['ValidFrom'])) {
            $model->validFrom = $map['ValidFrom'];
        }
        if (isset($map['ValidUntil'])) {
            $model->validUntil = $map['ValidUntil'];
        }
        if (isset($map['TerminateInstancesWithExpiration'])) {
            $model->terminateInstancesWithExpiration = $map['TerminateInstancesWithExpiration'];
        }
        if (isset($map['TerminateInstances'])) {
            $model->terminateInstances = $map['TerminateInstances'];
        }
        if (isset($map['MaxSpotPrice'])) {
            $model->maxSpotPrice = $map['MaxSpotPrice'];
        }
        if (isset($map['TotalTargetCapacity'])) {
            $model->totalTargetCapacity = $map['TotalTargetCapacity'];
        }
        if (isset($map['PayAsYouGoTargetCapacity'])) {
            $model->payAsYouGoTargetCapacity = $map['PayAsYouGoTargetCapacity'];
        }
        if (isset($map['SpotTargetCapacity'])) {
            $model->spotTargetCapacity = $map['SpotTargetCapacity'];
        }
        if (isset($map['DefaultTargetCapacityType'])) {
            $model->defaultTargetCapacityType = $map['DefaultTargetCapacityType'];
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }
        if (isset($map['LaunchTemplateConfig'])) {
            if (!empty($map['LaunchTemplateConfig'])) {
                $model->launchTemplateConfig = [];
                $n                           = 0;
                foreach ($map['LaunchTemplateConfig'] as $item) {
                    $model->launchTemplateConfig[$n++] = null !== $item ? launchTemplateConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
