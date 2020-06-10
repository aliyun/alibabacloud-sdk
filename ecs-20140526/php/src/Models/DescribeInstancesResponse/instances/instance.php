<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance\cpuOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance\dedicatedHostAttribute;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance\dedicatedInstanceAttribute;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance\ecsCapacityReservationAttr;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance\eipAddress;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance\innerIpAddress;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance\metadataOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance\networkInterfaces;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance\operationLocks;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance\publicIpAddress;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance\rdmaIpAddress;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance\securityGroupIds;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance\tags;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance\vpcAttributes;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description instanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description imageId
     *
     * @var string
     */
    public $imageId;

    /**
     * @description osName
     *
     * @var string
     */
    public $OSName;

    /**
     * @description osNameEn
     *
     * @var string
     */
    public $OSNameEn;

    /**
     * @description osType
     *
     * @var string
     */
    public $OSType;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description zoneId
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description zoneNo
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description instanceType
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description cores
     *
     * @var int
     */
    public $cpu;

    /**
     * @description mem
     *
     * @var int
     */
    public $memory;

    /**
     * @description hostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @description deploymentSetId
     *
     * @var string
     */
    public $deploymentSetId;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description serialNumber
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @description internetChargeType
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description internetMaxBandwidthIn
     *
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @description internetMaxBandwidthOut
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description vlanId
     *
     * @var string
     */
    public $vlanId;

    /**
     * @description creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description startTime
     *
     * @var string
     */
    public $startTime;

    /**
     * @description instanceNetWorkType
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description instanceChargeType
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description saleCycle
     *
     * @var string
     */
    public $saleCycle;

    /**
     * @description expiredTime
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description autoReleaseTime
     *
     * @var string
     */
    public $autoReleaseTime;

    /**
     * @description ioOptimized
     *
     * @var bool
     */
    public $ioOptimized;

    /**
     * @description deviceAvailable
     *
     * @var bool
     */
    public $deviceAvailable;

    /**
     * @description instanceTypeFamily
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description localStorageCapacity
     *
     * @var int
     */
    public $localStorageCapacity;

    /**
     * @description localStorageAmount
     *
     * @var int
     */
    public $localStorageAmount;

    /**
     * @description gpuAmount
     *
     * @var int
     */
    public $GPUAmount;

    /**
     * @description gpuSpec
     *
     * @var string
     */
    public $GPUSpec;

    /**
     * @description spotStrategy
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description spotPriceLimit
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description keyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description recyclable
     *
     * @var bool
     */
    public $recyclable;

    /**
     * @description hpcClusterId
     *
     * @var string
     */
    public $hpcClusterId;

    /**
     * @description stopBehavior
     *
     * @var string
     */
    public $stoppedMode;

    /**
     * @description creditSpecification
     *
     * @var string
     */
    public $creditSpecification;

    /**
     * @description deletionProtection
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description eniList
     *
     * @var networkInterfaces
     */
    public $networkInterfaces;

    /**
     * @description operationLockTypes
     *
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @description tags
     *
     * @var tags
     */
    public $tags;

    /**
     * @description vpcAttribute
     *
     * @var vpcAttributes
     */
    public $vpcAttributes;

    /**
     * @description eipAddress
     *
     * @var eipAddress
     */
    public $eipAddress;

    /**
     * @description dedicatedHostAttribute
     *
     * @var dedicatedHostAttribute
     */
    public $dedicatedHostAttribute;

    /**
     * @description ecsCapacityReservationAttr
     *
     * @var ecsCapacityReservationAttr
     */
    public $ecsCapacityReservationAttr;

    /**
     * @description dedicatedInstanceAttribute
     *
     * @var dedicatedInstanceAttribute
     */
    public $dedicatedInstanceAttribute;

    /**
     * @description cpuOptions
     *
     * @var cpuOptions
     */
    public $cpuOptions;

    /**
     * @description ecsMetaOptionModel
     *
     * @var metadataOptions
     */
    public $metadataOptions;

    /**
     * @description securityGroupIds
     *
     * @var securityGroupIds
     */
    public $securityGroupIds;

    /**
     * @description publicIpAddress
     *
     * @var publicIpAddress
     */
    public $publicIpAddress;

    /**
     * @description innerIpAddress
     *
     * @var innerIpAddress
     */
    public $innerIpAddress;

    /**
     * @description rdmaIpAddress
     *
     * @var rdmaIpAddress
     */
    public $rdmaIpAddress;
    protected $_name = [
        'instanceId'                 => 'InstanceId',
        'instanceName'               => 'InstanceName',
        'description'                => 'Description',
        'imageId'                    => 'ImageId',
        'OSName'                     => 'OSName',
        'OSNameEn'                   => 'OSNameEn',
        'OSType'                     => 'OSType',
        'regionId'                   => 'RegionId',
        'zoneId'                     => 'ZoneId',
        'clusterId'                  => 'ClusterId',
        'instanceType'               => 'InstanceType',
        'cpu'                        => 'Cpu',
        'memory'                     => 'Memory',
        'hostName'                   => 'HostName',
        'deploymentSetId'            => 'DeploymentSetId',
        'status'                     => 'Status',
        'serialNumber'               => 'SerialNumber',
        'internetChargeType'         => 'InternetChargeType',
        'internetMaxBandwidthIn'     => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut'    => 'InternetMaxBandwidthOut',
        'vlanId'                     => 'VlanId',
        'creationTime'               => 'CreationTime',
        'startTime'                  => 'StartTime',
        'instanceNetworkType'        => 'InstanceNetworkType',
        'instanceChargeType'         => 'InstanceChargeType',
        'saleCycle'                  => 'SaleCycle',
        'expiredTime'                => 'ExpiredTime',
        'autoReleaseTime'            => 'AutoReleaseTime',
        'ioOptimized'                => 'IoOptimized',
        'deviceAvailable'            => 'DeviceAvailable',
        'instanceTypeFamily'         => 'InstanceTypeFamily',
        'localStorageCapacity'       => 'LocalStorageCapacity',
        'localStorageAmount'         => 'LocalStorageAmount',
        'GPUAmount'                  => 'GPUAmount',
        'GPUSpec'                    => 'GPUSpec',
        'spotStrategy'               => 'SpotStrategy',
        'spotPriceLimit'             => 'SpotPriceLimit',
        'resourceGroupId'            => 'ResourceGroupId',
        'keyPairName'                => 'KeyPairName',
        'recyclable'                 => 'Recyclable',
        'hpcClusterId'               => 'HpcClusterId',
        'stoppedMode'                => 'StoppedMode',
        'creditSpecification'        => 'CreditSpecification',
        'deletionProtection'         => 'DeletionProtection',
        'networkInterfaces'          => 'NetworkInterfaces',
        'operationLocks'             => 'OperationLocks',
        'tags'                       => 'Tags',
        'vpcAttributes'              => 'VpcAttributes',
        'eipAddress'                 => 'EipAddress',
        'dedicatedHostAttribute'     => 'DedicatedHostAttribute',
        'ecsCapacityReservationAttr' => 'EcsCapacityReservationAttr',
        'dedicatedInstanceAttribute' => 'DedicatedInstanceAttribute',
        'cpuOptions'                 => 'CpuOptions',
        'metadataOptions'            => 'MetadataOptions',
        'securityGroupIds'           => 'SecurityGroupIds',
        'publicIpAddress'            => 'PublicIpAddress',
        'innerIpAddress'             => 'InnerIpAddress',
        'rdmaIpAddress'              => 'RdmaIpAddress',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('OSName', $this->OSName, true);
        Model::validateRequired('OSNameEn', $this->OSNameEn, true);
        Model::validateRequired('OSType', $this->OSType, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('clusterId', $this->clusterId, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('cpu', $this->cpu, true);
        Model::validateRequired('memory', $this->memory, true);
        Model::validateRequired('hostName', $this->hostName, true);
        Model::validateRequired('deploymentSetId', $this->deploymentSetId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('serialNumber', $this->serialNumber, true);
        Model::validateRequired('internetChargeType', $this->internetChargeType, true);
        Model::validateRequired('internetMaxBandwidthIn', $this->internetMaxBandwidthIn, true);
        Model::validateRequired('internetMaxBandwidthOut', $this->internetMaxBandwidthOut, true);
        Model::validateRequired('vlanId', $this->vlanId, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('instanceNetworkType', $this->instanceNetworkType, true);
        Model::validateRequired('instanceChargeType', $this->instanceChargeType, true);
        Model::validateRequired('saleCycle', $this->saleCycle, true);
        Model::validateRequired('expiredTime', $this->expiredTime, true);
        Model::validateRequired('autoReleaseTime', $this->autoReleaseTime, true);
        Model::validateRequired('ioOptimized', $this->ioOptimized, true);
        Model::validateRequired('deviceAvailable', $this->deviceAvailable, true);
        Model::validateRequired('instanceTypeFamily', $this->instanceTypeFamily, true);
        Model::validateRequired('localStorageCapacity', $this->localStorageCapacity, true);
        Model::validateRequired('localStorageAmount', $this->localStorageAmount, true);
        Model::validateRequired('GPUAmount', $this->GPUAmount, true);
        Model::validateRequired('GPUSpec', $this->GPUSpec, true);
        Model::validateRequired('spotStrategy', $this->spotStrategy, true);
        Model::validateRequired('spotPriceLimit', $this->spotPriceLimit, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('keyPairName', $this->keyPairName, true);
        Model::validateRequired('recyclable', $this->recyclable, true);
        Model::validateRequired('hpcClusterId', $this->hpcClusterId, true);
        Model::validateRequired('stoppedMode', $this->stoppedMode, true);
        Model::validateRequired('creditSpecification', $this->creditSpecification, true);
        Model::validateRequired('deletionProtection', $this->deletionProtection, true);
        Model::validateRequired('networkInterfaces', $this->networkInterfaces, true);
        Model::validateRequired('operationLocks', $this->operationLocks, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('vpcAttributes', $this->vpcAttributes, true);
        Model::validateRequired('eipAddress', $this->eipAddress, true);
        Model::validateRequired('dedicatedHostAttribute', $this->dedicatedHostAttribute, true);
        Model::validateRequired('ecsCapacityReservationAttr', $this->ecsCapacityReservationAttr, true);
        Model::validateRequired('dedicatedInstanceAttribute', $this->dedicatedInstanceAttribute, true);
        Model::validateRequired('cpuOptions', $this->cpuOptions, true);
        Model::validateRequired('metadataOptions', $this->metadataOptions, true);
        Model::validateRequired('securityGroupIds', $this->securityGroupIds, true);
        Model::validateRequired('publicIpAddress', $this->publicIpAddress, true);
        Model::validateRequired('innerIpAddress', $this->innerIpAddress, true);
        Model::validateRequired('rdmaIpAddress', $this->rdmaIpAddress, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->OSName) {
            $res['OSName'] = $this->OSName;
        }
        if (null !== $this->OSNameEn) {
            $res['OSNameEn'] = $this->OSNameEn;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->internetMaxBandwidthIn) {
            $res['InternetMaxBandwidthIn'] = $this->internetMaxBandwidthIn;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->saleCycle) {
            $res['SaleCycle'] = $this->saleCycle;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->autoReleaseTime) {
            $res['AutoReleaseTime'] = $this->autoReleaseTime;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->deviceAvailable) {
            $res['DeviceAvailable'] = $this->deviceAvailable;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->localStorageCapacity) {
            $res['LocalStorageCapacity'] = $this->localStorageCapacity;
        }
        if (null !== $this->localStorageAmount) {
            $res['LocalStorageAmount'] = $this->localStorageAmount;
        }
        if (null !== $this->GPUAmount) {
            $res['GPUAmount'] = $this->GPUAmount;
        }
        if (null !== $this->GPUSpec) {
            $res['GPUSpec'] = $this->GPUSpec;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->recyclable) {
            $res['Recyclable'] = $this->recyclable;
        }
        if (null !== $this->hpcClusterId) {
            $res['HpcClusterId'] = $this->hpcClusterId;
        }
        if (null !== $this->stoppedMode) {
            $res['StoppedMode'] = $this->stoppedMode;
        }
        if (null !== $this->creditSpecification) {
            $res['CreditSpecification'] = $this->creditSpecification;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->networkInterfaces) {
            $res['NetworkInterfaces'] = null !== $this->networkInterfaces ? $this->networkInterfaces->toMap() : null;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vpcAttributes) {
            $res['VpcAttributes'] = null !== $this->vpcAttributes ? $this->vpcAttributes->toMap() : null;
        }
        if (null !== $this->eipAddress) {
            $res['EipAddress'] = null !== $this->eipAddress ? $this->eipAddress->toMap() : null;
        }
        if (null !== $this->dedicatedHostAttribute) {
            $res['DedicatedHostAttribute'] = null !== $this->dedicatedHostAttribute ? $this->dedicatedHostAttribute->toMap() : null;
        }
        if (null !== $this->ecsCapacityReservationAttr) {
            $res['EcsCapacityReservationAttr'] = null !== $this->ecsCapacityReservationAttr ? $this->ecsCapacityReservationAttr->toMap() : null;
        }
        if (null !== $this->dedicatedInstanceAttribute) {
            $res['DedicatedInstanceAttribute'] = null !== $this->dedicatedInstanceAttribute ? $this->dedicatedInstanceAttribute->toMap() : null;
        }
        if (null !== $this->cpuOptions) {
            $res['CpuOptions'] = null !== $this->cpuOptions ? $this->cpuOptions->toMap() : null;
        }
        if (null !== $this->metadataOptions) {
            $res['MetadataOptions'] = null !== $this->metadataOptions ? $this->metadataOptions->toMap() : null;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = null !== $this->securityGroupIds ? $this->securityGroupIds->toMap() : null;
        }
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = null !== $this->publicIpAddress ? $this->publicIpAddress->toMap() : null;
        }
        if (null !== $this->innerIpAddress) {
            $res['InnerIpAddress'] = null !== $this->innerIpAddress ? $this->innerIpAddress->toMap() : null;
        }
        if (null !== $this->rdmaIpAddress) {
            $res['RdmaIpAddress'] = null !== $this->rdmaIpAddress ? $this->rdmaIpAddress->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['OSName'])) {
            $model->OSName = $map['OSName'];
        }
        if (isset($map['OSNameEn'])) {
            $model->OSNameEn = $map['OSNameEn'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['InternetMaxBandwidthIn'])) {
            $model->internetMaxBandwidthIn = $map['InternetMaxBandwidthIn'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['SaleCycle'])) {
            $model->saleCycle = $map['SaleCycle'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['AutoReleaseTime'])) {
            $model->autoReleaseTime = $map['AutoReleaseTime'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['DeviceAvailable'])) {
            $model->deviceAvailable = $map['DeviceAvailable'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['LocalStorageCapacity'])) {
            $model->localStorageCapacity = $map['LocalStorageCapacity'];
        }
        if (isset($map['LocalStorageAmount'])) {
            $model->localStorageAmount = $map['LocalStorageAmount'];
        }
        if (isset($map['GPUAmount'])) {
            $model->GPUAmount = $map['GPUAmount'];
        }
        if (isset($map['GPUSpec'])) {
            $model->GPUSpec = $map['GPUSpec'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['Recyclable'])) {
            $model->recyclable = $map['Recyclable'];
        }
        if (isset($map['HpcClusterId'])) {
            $model->hpcClusterId = $map['HpcClusterId'];
        }
        if (isset($map['StoppedMode'])) {
            $model->stoppedMode = $map['StoppedMode'];
        }
        if (isset($map['CreditSpecification'])) {
            $model->creditSpecification = $map['CreditSpecification'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['NetworkInterfaces'])) {
            $model->networkInterfaces = networkInterfaces::fromMap($map['NetworkInterfaces']);
        }
        if (isset($map['OperationLocks'])) {
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VpcAttributes'])) {
            $model->vpcAttributes = vpcAttributes::fromMap($map['VpcAttributes']);
        }
        if (isset($map['EipAddress'])) {
            $model->eipAddress = eipAddress::fromMap($map['EipAddress']);
        }
        if (isset($map['DedicatedHostAttribute'])) {
            $model->dedicatedHostAttribute = dedicatedHostAttribute::fromMap($map['DedicatedHostAttribute']);
        }
        if (isset($map['EcsCapacityReservationAttr'])) {
            $model->ecsCapacityReservationAttr = ecsCapacityReservationAttr::fromMap($map['EcsCapacityReservationAttr']);
        }
        if (isset($map['DedicatedInstanceAttribute'])) {
            $model->dedicatedInstanceAttribute = dedicatedInstanceAttribute::fromMap($map['DedicatedInstanceAttribute']);
        }
        if (isset($map['CpuOptions'])) {
            $model->cpuOptions = cpuOptions::fromMap($map['CpuOptions']);
        }
        if (isset($map['MetadataOptions'])) {
            $model->metadataOptions = metadataOptions::fromMap($map['MetadataOptions']);
        }
        if (isset($map['SecurityGroupIds'])) {
            $model->securityGroupIds = securityGroupIds::fromMap($map['SecurityGroupIds']);
        }
        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = publicIpAddress::fromMap($map['PublicIpAddress']);
        }
        if (isset($map['InnerIpAddress'])) {
            $model->innerIpAddress = innerIpAddress::fromMap($map['InnerIpAddress']);
        }
        if (isset($map['RdmaIpAddress'])) {
            $model->rdmaIpAddress = rdmaIpAddress::fromMap($map['RdmaIpAddress']);
        }

        return $model;
    }
}
