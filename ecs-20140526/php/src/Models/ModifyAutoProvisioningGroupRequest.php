<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyAutoProvisioningGroupRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $autoProvisioningGroupId;

    /**
     * @var string
     */
    public $excessCapacityTerminationPolicy;

    /**
     * @var string
     */
    public $defaultTargetCapacityType;

    /**
     * @var bool
     */
    public $terminateInstancesWithExpiration;

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
    public $autoProvisioningGroupName;
    protected $_name = [
        'regionId'                         => 'RegionId',
        'autoProvisioningGroupId'          => 'AutoProvisioningGroupId',
        'excessCapacityTerminationPolicy'  => 'ExcessCapacityTerminationPolicy',
        'defaultTargetCapacityType'        => 'DefaultTargetCapacityType',
        'terminateInstancesWithExpiration' => 'TerminateInstancesWithExpiration',
        'maxSpotPrice'                     => 'MaxSpotPrice',
        'totalTargetCapacity'              => 'TotalTargetCapacity',
        'payAsYouGoTargetCapacity'         => 'PayAsYouGoTargetCapacity',
        'spotTargetCapacity'               => 'SpotTargetCapacity',
        'autoProvisioningGroupName'        => 'AutoProvisioningGroupName',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->autoProvisioningGroupId) {
            $res['AutoProvisioningGroupId'] = $this->autoProvisioningGroupId;
        }
        if (null !== $this->excessCapacityTerminationPolicy) {
            $res['ExcessCapacityTerminationPolicy'] = $this->excessCapacityTerminationPolicy;
        }
        if (null !== $this->defaultTargetCapacityType) {
            $res['DefaultTargetCapacityType'] = $this->defaultTargetCapacityType;
        }
        if (null !== $this->terminateInstancesWithExpiration) {
            $res['TerminateInstancesWithExpiration'] = $this->terminateInstancesWithExpiration;
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
        if (null !== $this->autoProvisioningGroupName) {
            $res['AutoProvisioningGroupName'] = $this->autoProvisioningGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAutoProvisioningGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AutoProvisioningGroupId'])) {
            $model->autoProvisioningGroupId = $map['AutoProvisioningGroupId'];
        }
        if (isset($map['ExcessCapacityTerminationPolicy'])) {
            $model->excessCapacityTerminationPolicy = $map['ExcessCapacityTerminationPolicy'];
        }
        if (isset($map['DefaultTargetCapacityType'])) {
            $model->defaultTargetCapacityType = $map['DefaultTargetCapacityType'];
        }
        if (isset($map['TerminateInstancesWithExpiration'])) {
            $model->terminateInstancesWithExpiration = $map['TerminateInstancesWithExpiration'];
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
        if (isset($map['AutoProvisioningGroupName'])) {
            $model->autoProvisioningGroupName = $map['AutoProvisioningGroupName'];
        }

        return $model;
    }
}
