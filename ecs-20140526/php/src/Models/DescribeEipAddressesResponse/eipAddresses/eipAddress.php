<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEipAddressesResponse\eipAddresses;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEipAddressesResponse\eipAddresses\eipAddress\operationLocks;
use AlibabaCloud\Tea\Model;

class eipAddress extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $allocationId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $eipBandwidth;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $allocationTime;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var operationLocks
     */
    public $operationLocks;
    protected $_name = [
        'regionId'           => 'RegionId',
        'ipAddress'          => 'IpAddress',
        'allocationId'       => 'AllocationId',
        'status'             => 'Status',
        'instanceId'         => 'InstanceId',
        'bandwidth'          => 'Bandwidth',
        'eipBandwidth'       => 'EipBandwidth',
        'internetChargeType' => 'InternetChargeType',
        'allocationTime'     => 'AllocationTime',
        'instanceType'       => 'InstanceType',
        'chargeType'         => 'ChargeType',
        'expiredTime'        => 'ExpiredTime',
        'operationLocks'     => 'OperationLocks',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('ipAddress', $this->ipAddress, true);
        Model::validateRequired('allocationId', $this->allocationId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('bandwidth', $this->bandwidth, true);
        Model::validateRequired('eipBandwidth', $this->eipBandwidth, true);
        Model::validateRequired('internetChargeType', $this->internetChargeType, true);
        Model::validateRequired('allocationTime', $this->allocationTime, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('chargeType', $this->chargeType, true);
        Model::validateRequired('expiredTime', $this->expiredTime, true);
        Model::validateRequired('operationLocks', $this->operationLocks, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->eipBandwidth) {
            $res['EipBandwidth'] = $this->eipBandwidth;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->allocationTime) {
            $res['AllocationTime'] = $this->allocationTime;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipAddress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['EipBandwidth'])) {
            $model->eipBandwidth = $map['EipBandwidth'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['AllocationTime'])) {
            $model->allocationTime = $map['AllocationTime'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['OperationLocks'])) {
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }

        return $model;
    }
}
