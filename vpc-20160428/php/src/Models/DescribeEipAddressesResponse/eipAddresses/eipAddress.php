<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponse\eipAddresses;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponse\eipAddresses\eipAddress\availableRegions;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponse\eipAddresses\eipAddress\operationLocks;
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
    public $privateIpAddress;

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
    public $instanceRegionId;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $HDMonitorStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ISP;

    /**
     * @var string
     */
    public $descritpion;

    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @var string
     */
    public $bandwidthPackageType;

    /**
     * @var string
     */
    public $bandwidthPackageBandwidth;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $hasReservationData;

    /**
     * @var string
     */
    public $reservationBandwidth;

    /**
     * @var string
     */
    public $reservationInternetChargeType;

    /**
     * @var string
     */
    public $reservationActiveTime;

    /**
     * @var string
     */
    public $reservationOrderType;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var bool
     */
    public $secondLimited;

    /**
     * @var string
     */
    public $segmentInstanceId;

    /**
     * @var string
     */
    public $netmode;

    /**
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @var availableRegions
     */
    public $availableRegions;
    protected $_name = [
        'regionId'                      => 'RegionId',
        'ipAddress'                     => 'IpAddress',
        'privateIpAddress'              => 'PrivateIpAddress',
        'allocationId'                  => 'AllocationId',
        'status'                        => 'Status',
        'instanceId'                    => 'InstanceId',
        'bandwidth'                     => 'Bandwidth',
        'eipBandwidth'                  => 'EipBandwidth',
        'internetChargeType'            => 'InternetChargeType',
        'allocationTime'                => 'AllocationTime',
        'instanceType'                  => 'InstanceType',
        'instanceRegionId'              => 'InstanceRegionId',
        'chargeType'                    => 'ChargeType',
        'expiredTime'                   => 'ExpiredTime',
        'HDMonitorStatus'               => 'HDMonitorStatus',
        'name'                          => 'Name',
        'ISP'                           => 'ISP',
        'descritpion'                   => 'Descritpion',
        'bandwidthPackageId'            => 'BandwidthPackageId',
        'bandwidthPackageType'          => 'BandwidthPackageType',
        'bandwidthPackageBandwidth'     => 'BandwidthPackageBandwidth',
        'resourceGroupId'               => 'ResourceGroupId',
        'hasReservationData'            => 'HasReservationData',
        'reservationBandwidth'          => 'ReservationBandwidth',
        'reservationInternetChargeType' => 'ReservationInternetChargeType',
        'reservationActiveTime'         => 'ReservationActiveTime',
        'reservationOrderType'          => 'ReservationOrderType',
        'mode'                          => 'Mode',
        'deletionProtection'            => 'DeletionProtection',
        'secondLimited'                 => 'SecondLimited',
        'segmentInstanceId'             => 'SegmentInstanceId',
        'netmode'                       => 'Netmode',
        'operationLocks'                => 'OperationLocks',
        'availableRegions'              => 'AvailableRegions',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('ipAddress', $this->ipAddress, true);
        Model::validateRequired('privateIpAddress', $this->privateIpAddress, true);
        Model::validateRequired('allocationId', $this->allocationId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('bandwidth', $this->bandwidth, true);
        Model::validateRequired('eipBandwidth', $this->eipBandwidth, true);
        Model::validateRequired('internetChargeType', $this->internetChargeType, true);
        Model::validateRequired('allocationTime', $this->allocationTime, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('instanceRegionId', $this->instanceRegionId, true);
        Model::validateRequired('chargeType', $this->chargeType, true);
        Model::validateRequired('expiredTime', $this->expiredTime, true);
        Model::validateRequired('HDMonitorStatus', $this->HDMonitorStatus, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('ISP', $this->ISP, true);
        Model::validateRequired('descritpion', $this->descritpion, true);
        Model::validateRequired('bandwidthPackageId', $this->bandwidthPackageId, true);
        Model::validateRequired('bandwidthPackageType', $this->bandwidthPackageType, true);
        Model::validateRequired('bandwidthPackageBandwidth', $this->bandwidthPackageBandwidth, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('hasReservationData', $this->hasReservationData, true);
        Model::validateRequired('reservationBandwidth', $this->reservationBandwidth, true);
        Model::validateRequired('reservationInternetChargeType', $this->reservationInternetChargeType, true);
        Model::validateRequired('reservationActiveTime', $this->reservationActiveTime, true);
        Model::validateRequired('reservationOrderType', $this->reservationOrderType, true);
        Model::validateRequired('mode', $this->mode, true);
        Model::validateRequired('deletionProtection', $this->deletionProtection, true);
        Model::validateRequired('secondLimited', $this->secondLimited, true);
        Model::validateRequired('segmentInstanceId', $this->segmentInstanceId, true);
        Model::validateRequired('netmode', $this->netmode, true);
        Model::validateRequired('operationLocks', $this->operationLocks, true);
        Model::validateRequired('availableRegions', $this->availableRegions, true);
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
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
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
        if (null !== $this->instanceRegionId) {
            $res['InstanceRegionId'] = $this->instanceRegionId;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->HDMonitorStatus) {
            $res['HDMonitorStatus'] = $this->HDMonitorStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->descritpion) {
            $res['Descritpion'] = $this->descritpion;
        }
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->bandwidthPackageType) {
            $res['BandwidthPackageType'] = $this->bandwidthPackageType;
        }
        if (null !== $this->bandwidthPackageBandwidth) {
            $res['BandwidthPackageBandwidth'] = $this->bandwidthPackageBandwidth;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->hasReservationData) {
            $res['HasReservationData'] = $this->hasReservationData;
        }
        if (null !== $this->reservationBandwidth) {
            $res['ReservationBandwidth'] = $this->reservationBandwidth;
        }
        if (null !== $this->reservationInternetChargeType) {
            $res['ReservationInternetChargeType'] = $this->reservationInternetChargeType;
        }
        if (null !== $this->reservationActiveTime) {
            $res['ReservationActiveTime'] = $this->reservationActiveTime;
        }
        if (null !== $this->reservationOrderType) {
            $res['ReservationOrderType'] = $this->reservationOrderType;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->secondLimited) {
            $res['SecondLimited'] = $this->secondLimited;
        }
        if (null !== $this->segmentInstanceId) {
            $res['SegmentInstanceId'] = $this->segmentInstanceId;
        }
        if (null !== $this->netmode) {
            $res['Netmode'] = $this->netmode;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
        }
        if (null !== $this->availableRegions) {
            $res['AvailableRegions'] = null !== $this->availableRegions ? $this->availableRegions->toMap() : null;
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
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
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
        if (isset($map['InstanceRegionId'])) {
            $model->instanceRegionId = $map['InstanceRegionId'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['HDMonitorStatus'])) {
            $model->HDMonitorStatus = $map['HDMonitorStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['Descritpion'])) {
            $model->descritpion = $map['Descritpion'];
        }
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['BandwidthPackageType'])) {
            $model->bandwidthPackageType = $map['BandwidthPackageType'];
        }
        if (isset($map['BandwidthPackageBandwidth'])) {
            $model->bandwidthPackageBandwidth = $map['BandwidthPackageBandwidth'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['HasReservationData'])) {
            $model->hasReservationData = $map['HasReservationData'];
        }
        if (isset($map['ReservationBandwidth'])) {
            $model->reservationBandwidth = $map['ReservationBandwidth'];
        }
        if (isset($map['ReservationInternetChargeType'])) {
            $model->reservationInternetChargeType = $map['ReservationInternetChargeType'];
        }
        if (isset($map['ReservationActiveTime'])) {
            $model->reservationActiveTime = $map['ReservationActiveTime'];
        }
        if (isset($map['ReservationOrderType'])) {
            $model->reservationOrderType = $map['ReservationOrderType'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['SecondLimited'])) {
            $model->secondLimited = $map['SecondLimited'];
        }
        if (isset($map['SegmentInstanceId'])) {
            $model->segmentInstanceId = $map['SegmentInstanceId'];
        }
        if (isset($map['Netmode'])) {
            $model->netmode = $map['Netmode'];
        }
        if (isset($map['OperationLocks'])) {
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }
        if (isset($map['AvailableRegions'])) {
            $model->availableRegions = availableRegions::fromMap($map['AvailableRegions']);
        }

        return $model;
    }
}
