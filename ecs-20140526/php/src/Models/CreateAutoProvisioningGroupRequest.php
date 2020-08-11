<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest\launchTemplateConfig;
use AlibabaCloud\Tea\Model;

class CreateAutoProvisioningGroupRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $autoProvisioningGroupName;

    /**
     * @var string
     */
    public $autoProvisioningGroupType;

    /**
     * @var string
     */
    public $spotAllocationStrategy;

    /**
     * @var string
     */
    public $spotInstanceInterruptionBehavior;

    /**
     * @var int
     */
    public $spotInstancePoolsToUseCount;

    /**
     * @var string
     */
    public $payAsYouGoAllocationStrategy;

    /**
     * @var string
     */
    public $excessCapacityTerminationPolicy;

    /**
     * @var string
     */
    public $validFrom;

    /**
     * @var string
     */
    public $validUntil;

    /**
     * @var bool
     */
    public $terminateInstancesWithExpiration;

    /**
     * @var bool
     */
    public $terminateInstances;

    /**
     * @var float
     */
    public $maxSpotPrice;

    /**
     * @var string
     */
    public $totalTargetCapacity;

    /**
     * @var string
     */
    public $payAsYouGoTargetCapacity;

    /**
     * @var string
     */
    public $spotTargetCapacity;

    /**
     * @var string
     */
    public $defaultTargetCapacityType;

    /**
     * @var string
     */
    public $launchTemplateId;

    /**
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @var array
     */
    public $launchTemplateConfig;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
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
