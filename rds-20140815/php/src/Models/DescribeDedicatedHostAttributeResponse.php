<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostAttributeResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.dedicatedHostGroupId
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description data.dedicatedHostId
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description data.regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description data.zoneId
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description data.vpcId
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description data.vswitchId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description data.ipAddress
     *
     * @var string
     */
    public $IPAddress;

    /**
     * @description data.hostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @description data.hostStatus
     *
     * @var string
     */
    public $hostStatus;

    /**
     * @description data.hostClass
     *
     * @var string
     */
    public $hostClass;

    /**
     * @description data.hostCPU
     *
     * @var int
     */
    public $hostCPU;

    /**
     * @description data.hostMem
     *
     * @var int
     */
    public $hostMem;

    /**
     * @description data.hostStorage
     *
     * @var int
     */
    public $hostStorage;

    /**
     * @description data.cpuAllocationRatio
     *
     * @var string
     */
    public $CPUAllocationRatio;

    /**
     * @description data.memAllocationRatio
     *
     * @var string
     */
    public $memAllocationRatio;

    /**
     * @description data.diskAllocationRatio
     *
     * @var string
     */
    public $diskAllocationRatio;

    /**
     * @description data.instanceNumber
     *
     * @var int
     */
    public $instanceNumber;

    /**
     * @description data.instanceNumberMaster
     *
     * @var int
     */
    public $instanceNumberMaster;

    /**
     * @description data.instanceNumberSlave
     *
     * @var int
     */
    public $instanceNumberSlave;

    /**
     * @description data.instanceNumberROMaster
     *
     * @var int
     */
    public $instanceNumberROMaster;

    /**
     * @description data.instanceNumberROSlave
     *
     * @var int
     */
    public $instanceNumberROSlave;

    /**
     * @description data.createdTime
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description data.expiredTime
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description data.autoRenew
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @description data.allocationStatus
     *
     * @var string
     */
    public $allocationStatus;

    /**
     * @description data.cpuUsed
     *
     * @var string
     */
    public $cpuUsed;

    /**
     * @description data.memoryUsed
     *
     * @var string
     */
    public $memoryUsed;

    /**
     * @description data.storageUsed
     *
     * @var string
     */
    public $storageUsed;

    /**
     * @description data.hostType
     *
     * @var string
     */
    public $hostType;

    /**
     * @description data.userAccount
     *
     * @var string
     */
    public $accountName;

    /**
     * @description data.openPermission
     *
     * @var string
     */
    public $openPermission;

    /**
     * @description data.imageCategory
     *
     * @var string
     */
    public $imageCategory;
    protected $_name = [
        'requestId'              => 'RequestId',
        'dedicatedHostGroupId'   => 'DedicatedHostGroupId',
        'dedicatedHostId'        => 'DedicatedHostId',
        'regionId'               => 'RegionId',
        'zoneId'                 => 'ZoneId',
        'VPCId'                  => 'VPCId',
        'VSwitchId'              => 'VSwitchId',
        'IPAddress'              => 'IPAddress',
        'hostName'               => 'HostName',
        'hostStatus'             => 'HostStatus',
        'hostClass'              => 'HostClass',
        'hostCPU'                => 'HostCPU',
        'hostMem'                => 'HostMem',
        'hostStorage'            => 'HostStorage',
        'CPUAllocationRatio'     => 'CPUAllocationRatio',
        'memAllocationRatio'     => 'MemAllocationRatio',
        'diskAllocationRatio'    => 'DiskAllocationRatio',
        'instanceNumber'         => 'InstanceNumber',
        'instanceNumberMaster'   => 'InstanceNumberMaster',
        'instanceNumberSlave'    => 'InstanceNumberSlave',
        'instanceNumberROMaster' => 'InstanceNumberROMaster',
        'instanceNumberROSlave'  => 'InstanceNumberROSlave',
        'createdTime'            => 'CreatedTime',
        'expiredTime'            => 'ExpiredTime',
        'autoRenew'              => 'AutoRenew',
        'allocationStatus'       => 'AllocationStatus',
        'cpuUsed'                => 'CpuUsed',
        'memoryUsed'             => 'MemoryUsed',
        'storageUsed'            => 'StorageUsed',
        'hostType'               => 'HostType',
        'accountName'            => 'AccountName',
        'openPermission'         => 'OpenPermission',
        'imageCategory'          => 'ImageCategory',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('dedicatedHostGroupId', $this->dedicatedHostGroupId, true);
        Model::validateRequired('dedicatedHostId', $this->dedicatedHostId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('VPCId', $this->VPCId, true);
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
        Model::validateRequired('IPAddress', $this->IPAddress, true);
        Model::validateRequired('hostName', $this->hostName, true);
        Model::validateRequired('hostStatus', $this->hostStatus, true);
        Model::validateRequired('hostClass', $this->hostClass, true);
        Model::validateRequired('hostCPU', $this->hostCPU, true);
        Model::validateRequired('hostMem', $this->hostMem, true);
        Model::validateRequired('hostStorage', $this->hostStorage, true);
        Model::validateRequired('CPUAllocationRatio', $this->CPUAllocationRatio, true);
        Model::validateRequired('memAllocationRatio', $this->memAllocationRatio, true);
        Model::validateRequired('diskAllocationRatio', $this->diskAllocationRatio, true);
        Model::validateRequired('instanceNumber', $this->instanceNumber, true);
        Model::validateRequired('instanceNumberMaster', $this->instanceNumberMaster, true);
        Model::validateRequired('instanceNumberSlave', $this->instanceNumberSlave, true);
        Model::validateRequired('instanceNumberROMaster', $this->instanceNumberROMaster, true);
        Model::validateRequired('instanceNumberROSlave', $this->instanceNumberROSlave, true);
        Model::validateRequired('createdTime', $this->createdTime, true);
        Model::validateRequired('expiredTime', $this->expiredTime, true);
        Model::validateRequired('autoRenew', $this->autoRenew, true);
        Model::validateRequired('allocationStatus', $this->allocationStatus, true);
        Model::validateRequired('cpuUsed', $this->cpuUsed, true);
        Model::validateRequired('memoryUsed', $this->memoryUsed, true);
        Model::validateRequired('storageUsed', $this->storageUsed, true);
        Model::validateRequired('hostType', $this->hostType, true);
        Model::validateRequired('accountName', $this->accountName, true);
        Model::validateRequired('openPermission', $this->openPermission, true);
        Model::validateRequired('imageCategory', $this->imageCategory, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->hostStatus) {
            $res['HostStatus'] = $this->hostStatus;
        }
        if (null !== $this->hostClass) {
            $res['HostClass'] = $this->hostClass;
        }
        if (null !== $this->hostCPU) {
            $res['HostCPU'] = $this->hostCPU;
        }
        if (null !== $this->hostMem) {
            $res['HostMem'] = $this->hostMem;
        }
        if (null !== $this->hostStorage) {
            $res['HostStorage'] = $this->hostStorage;
        }
        if (null !== $this->CPUAllocationRatio) {
            $res['CPUAllocationRatio'] = $this->CPUAllocationRatio;
        }
        if (null !== $this->memAllocationRatio) {
            $res['MemAllocationRatio'] = $this->memAllocationRatio;
        }
        if (null !== $this->diskAllocationRatio) {
            $res['DiskAllocationRatio'] = $this->diskAllocationRatio;
        }
        if (null !== $this->instanceNumber) {
            $res['InstanceNumber'] = $this->instanceNumber;
        }
        if (null !== $this->instanceNumberMaster) {
            $res['InstanceNumberMaster'] = $this->instanceNumberMaster;
        }
        if (null !== $this->instanceNumberSlave) {
            $res['InstanceNumberSlave'] = $this->instanceNumberSlave;
        }
        if (null !== $this->instanceNumberROMaster) {
            $res['InstanceNumberROMaster'] = $this->instanceNumberROMaster;
        }
        if (null !== $this->instanceNumberROSlave) {
            $res['InstanceNumberROSlave'] = $this->instanceNumberROSlave;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->allocationStatus) {
            $res['AllocationStatus'] = $this->allocationStatus;
        }
        if (null !== $this->cpuUsed) {
            $res['CpuUsed'] = $this->cpuUsed;
        }
        if (null !== $this->memoryUsed) {
            $res['MemoryUsed'] = $this->memoryUsed;
        }
        if (null !== $this->storageUsed) {
            $res['StorageUsed'] = $this->storageUsed;
        }
        if (null !== $this->hostType) {
            $res['HostType'] = $this->hostType;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->openPermission) {
            $res['OpenPermission'] = $this->openPermission;
        }
        if (null !== $this->imageCategory) {
            $res['ImageCategory'] = $this->imageCategory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedHostAttributeResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['HostStatus'])) {
            $model->hostStatus = $map['HostStatus'];
        }
        if (isset($map['HostClass'])) {
            $model->hostClass = $map['HostClass'];
        }
        if (isset($map['HostCPU'])) {
            $model->hostCPU = $map['HostCPU'];
        }
        if (isset($map['HostMem'])) {
            $model->hostMem = $map['HostMem'];
        }
        if (isset($map['HostStorage'])) {
            $model->hostStorage = $map['HostStorage'];
        }
        if (isset($map['CPUAllocationRatio'])) {
            $model->CPUAllocationRatio = $map['CPUAllocationRatio'];
        }
        if (isset($map['MemAllocationRatio'])) {
            $model->memAllocationRatio = $map['MemAllocationRatio'];
        }
        if (isset($map['DiskAllocationRatio'])) {
            $model->diskAllocationRatio = $map['DiskAllocationRatio'];
        }
        if (isset($map['InstanceNumber'])) {
            $model->instanceNumber = $map['InstanceNumber'];
        }
        if (isset($map['InstanceNumberMaster'])) {
            $model->instanceNumberMaster = $map['InstanceNumberMaster'];
        }
        if (isset($map['InstanceNumberSlave'])) {
            $model->instanceNumberSlave = $map['InstanceNumberSlave'];
        }
        if (isset($map['InstanceNumberROMaster'])) {
            $model->instanceNumberROMaster = $map['InstanceNumberROMaster'];
        }
        if (isset($map['InstanceNumberROSlave'])) {
            $model->instanceNumberROSlave = $map['InstanceNumberROSlave'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AllocationStatus'])) {
            $model->allocationStatus = $map['AllocationStatus'];
        }
        if (isset($map['CpuUsed'])) {
            $model->cpuUsed = $map['CpuUsed'];
        }
        if (isset($map['MemoryUsed'])) {
            $model->memoryUsed = $map['MemoryUsed'];
        }
        if (isset($map['StorageUsed'])) {
            $model->storageUsed = $map['StorageUsed'];
        }
        if (isset($map['HostType'])) {
            $model->hostType = $map['HostType'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['OpenPermission'])) {
            $model->openPermission = $map['OpenPermission'];
        }
        if (isset($map['ImageCategory'])) {
            $model->imageCategory = $map['ImageCategory'];
        }

        return $model;
    }
}
