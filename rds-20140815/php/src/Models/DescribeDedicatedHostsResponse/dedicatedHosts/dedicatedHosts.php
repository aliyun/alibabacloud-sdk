<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostsResponse\dedicatedHosts;

use AlibabaCloud\Tea\Model;

class dedicatedHosts extends Model
{
    /**
     * @description hostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @description hostStatus
     *
     * @var string
     */
    public $hostStatus;

    /**
     * @description instanceNumber
     *
     * @var string
     */
    public $instanceNumber;

    /**
     * @description cpuAllocationRatio
     *
     * @var string
     */
    public $CPUAllocationRatio;

    /**
     * @description memAllocationRatio
     *
     * @var string
     */
    public $memAllocationRatio;

    /**
     * @description diskAllocationRatio
     *
     * @var string
     */
    public $diskAllocationRatio;

    /**
     * @description vpcId
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description vswitchId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description zoneId
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description ipAddress
     *
     * @var string
     */
    public $IPAddress;

    /**
     * @description hostClass
     *
     * @var string
     */
    public $hostClass;

    /**
     * @description createdTime
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description dedicatedHostId
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description allocationStatus
     *
     * @var string
     */
    public $allocationStatus;

    /**
     * @description endTime
     *
     * @var string
     */
    public $endTime;

    /**
     * @description hostType
     *
     * @var string
     */
    public $hostType;

    /**
     * @description bastionInstanceId
     *
     * @var string
     */
    public $bastionInstanceId;

    /**
     * @description openPermission
     *
     * @var string
     */
    public $openPermission;

    /**
     * @description userAccount
     *
     * @var string
     */
    public $accountName;

    /**
     * @description hostCPU
     *
     * @var string
     */
    public $hostCPU;

    /**
     * @description hostMem
     *
     * @var string
     */
    public $hostMem;

    /**
     * @description hostStorage
     *
     * @var string
     */
    public $hostStorage;

    /**
     * @description cpuUsed
     *
     * @var string
     */
    public $cpuUsed;

    /**
     * @description memoryUsed
     *
     * @var string
     */
    public $memoryUsed;

    /**
     * @description storageUsed
     *
     * @var string
     */
    public $storageUsed;

    /**
     * @description imageCategory
     *
     * @var string
     */
    public $imageCategory;
    protected $_name = [
        'hostName'            => 'HostName',
        'hostStatus'          => 'HostStatus',
        'instanceNumber'      => 'InstanceNumber',
        'CPUAllocationRatio'  => 'CPUAllocationRatio',
        'memAllocationRatio'  => 'MemAllocationRatio',
        'diskAllocationRatio' => 'DiskAllocationRatio',
        'VPCId'               => 'VPCId',
        'VSwitchId'           => 'VSwitchId',
        'zoneId'              => 'ZoneId',
        'IPAddress'           => 'IPAddress',
        'hostClass'           => 'HostClass',
        'createdTime'         => 'CreatedTime',
        'dedicatedHostId'     => 'DedicatedHostId',
        'allocationStatus'    => 'AllocationStatus',
        'endTime'             => 'EndTime',
        'hostType'            => 'HostType',
        'bastionInstanceId'   => 'BastionInstanceId',
        'openPermission'      => 'OpenPermission',
        'accountName'         => 'AccountName',
        'hostCPU'             => 'HostCPU',
        'hostMem'             => 'HostMem',
        'hostStorage'         => 'HostStorage',
        'cpuUsed'             => 'CpuUsed',
        'memoryUsed'          => 'MemoryUsed',
        'storageUsed'         => 'StorageUsed',
        'imageCategory'       => 'ImageCategory',
    ];

    public function validate()
    {
        Model::validateRequired('hostName', $this->hostName, true);
        Model::validateRequired('hostStatus', $this->hostStatus, true);
        Model::validateRequired('instanceNumber', $this->instanceNumber, true);
        Model::validateRequired('CPUAllocationRatio', $this->CPUAllocationRatio, true);
        Model::validateRequired('memAllocationRatio', $this->memAllocationRatio, true);
        Model::validateRequired('diskAllocationRatio', $this->diskAllocationRatio, true);
        Model::validateRequired('VPCId', $this->VPCId, true);
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('IPAddress', $this->IPAddress, true);
        Model::validateRequired('hostClass', $this->hostClass, true);
        Model::validateRequired('createdTime', $this->createdTime, true);
        Model::validateRequired('dedicatedHostId', $this->dedicatedHostId, true);
        Model::validateRequired('allocationStatus', $this->allocationStatus, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('hostType', $this->hostType, true);
        Model::validateRequired('bastionInstanceId', $this->bastionInstanceId, true);
        Model::validateRequired('openPermission', $this->openPermission, true);
        Model::validateRequired('accountName', $this->accountName, true);
        Model::validateRequired('hostCPU', $this->hostCPU, true);
        Model::validateRequired('hostMem', $this->hostMem, true);
        Model::validateRequired('hostStorage', $this->hostStorage, true);
        Model::validateRequired('cpuUsed', $this->cpuUsed, true);
        Model::validateRequired('memoryUsed', $this->memoryUsed, true);
        Model::validateRequired('storageUsed', $this->storageUsed, true);
        Model::validateRequired('imageCategory', $this->imageCategory, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->hostStatus) {
            $res['HostStatus'] = $this->hostStatus;
        }
        if (null !== $this->instanceNumber) {
            $res['InstanceNumber'] = $this->instanceNumber;
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
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }
        if (null !== $this->hostClass) {
            $res['HostClass'] = $this->hostClass;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->allocationStatus) {
            $res['AllocationStatus'] = $this->allocationStatus;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->hostType) {
            $res['HostType'] = $this->hostType;
        }
        if (null !== $this->bastionInstanceId) {
            $res['BastionInstanceId'] = $this->bastionInstanceId;
        }
        if (null !== $this->openPermission) {
            $res['OpenPermission'] = $this->openPermission;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
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
        if (null !== $this->cpuUsed) {
            $res['CpuUsed'] = $this->cpuUsed;
        }
        if (null !== $this->memoryUsed) {
            $res['MemoryUsed'] = $this->memoryUsed;
        }
        if (null !== $this->storageUsed) {
            $res['StorageUsed'] = $this->storageUsed;
        }
        if (null !== $this->imageCategory) {
            $res['ImageCategory'] = $this->imageCategory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHosts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['HostStatus'])) {
            $model->hostStatus = $map['HostStatus'];
        }
        if (isset($map['InstanceNumber'])) {
            $model->instanceNumber = $map['InstanceNumber'];
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
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }
        if (isset($map['HostClass'])) {
            $model->hostClass = $map['HostClass'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['AllocationStatus'])) {
            $model->allocationStatus = $map['AllocationStatus'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['HostType'])) {
            $model->hostType = $map['HostType'];
        }
        if (isset($map['BastionInstanceId'])) {
            $model->bastionInstanceId = $map['BastionInstanceId'];
        }
        if (isset($map['OpenPermission'])) {
            $model->openPermission = $map['OpenPermission'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
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
        if (isset($map['CpuUsed'])) {
            $model->cpuUsed = $map['CpuUsed'];
        }
        if (isset($map['MemoryUsed'])) {
            $model->memoryUsed = $map['MemoryUsed'];
        }
        if (isset($map['StorageUsed'])) {
            $model->storageUsed = $map['StorageUsed'];
        }
        if (isset($map['ImageCategory'])) {
            $model->imageCategory = $map['ImageCategory'];
        }

        return $model;
    }
}
