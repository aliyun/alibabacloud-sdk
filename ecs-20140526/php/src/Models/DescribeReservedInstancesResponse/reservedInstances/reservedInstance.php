<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstancesResponse\reservedInstances;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstancesResponse\reservedInstances\reservedInstance\operationLocks;
use AlibabaCloud\Tea\Model;

class reservedInstance extends Model
{
    /**
     * @var string
     */
    public $reservedInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $reservedInstanceName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $offeringType;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var int
     */
    public $instanceAmount;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $allocationStatus;

    /**
     * @var operationLocks
     */
    public $operationLocks;
    protected $_name = [
        'reservedInstanceId'   => 'ReservedInstanceId',
        'regionId'             => 'RegionId',
        'zoneId'               => 'ZoneId',
        'reservedInstanceName' => 'ReservedInstanceName',
        'description'          => 'Description',
        'instanceType'         => 'InstanceType',
        'scope'                => 'Scope',
        'offeringType'         => 'OfferingType',
        'platform'             => 'Platform',
        'instanceAmount'       => 'InstanceAmount',
        'status'               => 'Status',
        'creationTime'         => 'CreationTime',
        'expiredTime'          => 'ExpiredTime',
        'startTime'            => 'StartTime',
        'resourceGroupId'      => 'ResourceGroupId',
        'allocationStatus'     => 'AllocationStatus',
        'operationLocks'       => 'OperationLocks',
    ];

    public function validate()
    {
        Model::validateRequired('reservedInstanceId', $this->reservedInstanceId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('reservedInstanceName', $this->reservedInstanceName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('scope', $this->scope, true);
        Model::validateRequired('offeringType', $this->offeringType, true);
        Model::validateRequired('platform', $this->platform, true);
        Model::validateRequired('instanceAmount', $this->instanceAmount, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('expiredTime', $this->expiredTime, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('allocationStatus', $this->allocationStatus, true);
        Model::validateRequired('operationLocks', $this->operationLocks, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reservedInstanceId) {
            $res['ReservedInstanceId'] = $this->reservedInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->reservedInstanceName) {
            $res['ReservedInstanceName'] = $this->reservedInstanceName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->offeringType) {
            $res['OfferingType'] = $this->offeringType;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->instanceAmount) {
            $res['InstanceAmount'] = $this->instanceAmount;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->allocationStatus) {
            $res['AllocationStatus'] = $this->allocationStatus;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reservedInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReservedInstanceId'])) {
            $model->reservedInstanceId = $map['ReservedInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ReservedInstanceName'])) {
            $model->reservedInstanceName = $map['ReservedInstanceName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['OfferingType'])) {
            $model->offeringType = $map['OfferingType'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['InstanceAmount'])) {
            $model->instanceAmount = $map['InstanceAmount'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['AllocationStatus'])) {
            $model->allocationStatus = $map['AllocationStatus'];
        }
        if (isset($map['OperationLocks'])) {
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }

        return $model;
    }
}
