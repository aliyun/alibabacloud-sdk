<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeInstancesRequest extends Model
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
     * @description regionNo
     *
     * @var string
     */
    public $regionId;

    /**
     * @description vpcInstanceId
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description vswInstanceId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description izNo
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description ecsNetworkType
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description groupNo
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description ecsInstanceIds
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description pageNo
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description ecsInnerIps
     *
     * @var string
     */
    public $innerIpAddresses;

    /**
     * @description ecsPrivateIps
     *
     * @var string
     */
    public $privateIpAddresses;

    /**
     * @description ecsPublicIps
     *
     * @var string
     */
    public $publicIpAddresses;

    /**
     * @description eipAddresses
     *
     * @var string
     */
    public $eipAddresses;

    /**
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description instanceChargeType
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description internetChargeType
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description instanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description imageId
     *
     * @var string
     */
    public $imageId;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description lockReason
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description deviceAvailable
     *
     * @var bool
     */
    public $deviceAvailable;

    /**
     * @description ioOptimized
     *
     * @var bool
     */
    public $ioOptimized;

    /**
     * @description needSaleCycle
     *
     * @var bool
     */
    public $needSaleCycle;

    /**
     * @description tagKeyValueParams
     *
     * @var array
     */
    public $tag;

    /**
     * @description instanceType
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description instanceTypeFamily
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description keyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description hpcClusterId
     *
     * @var string
     */
    public $hpcClusterId;

    /**
     * @description ecsRdmaIps
     *
     * @var string
     */
    public $rdmaIpAddresses;

    /**
     * @description dryRun
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description additionalAttributes
     *
     * @var array
     */
    public $additionalAttributes;

    /**
     * @description httpEndpoint
     *
     * @var string
     */
    public $httpEndpoint;

    /**
     * @description httpTokens
     *
     * @var string
     */
    public $httpTokens;

    /**
     * @description httpPutResponseHopLimit
     *
     * @var int
     */
    public $httpPutResponseHopLimit;
    protected $_name = [
        'ownerId'                 => 'OwnerId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'regionId'                => 'RegionId',
        'vpcId'                   => 'VpcId',
        'VSwitchId'               => 'VSwitchId',
        'zoneId'                  => 'ZoneId',
        'instanceNetworkType'     => 'InstanceNetworkType',
        'securityGroupId'         => 'SecurityGroupId',
        'instanceIds'             => 'InstanceIds',
        'pageNumber'              => 'PageNumber',
        'pageSize'                => 'PageSize',
        'innerIpAddresses'        => 'InnerIpAddresses',
        'privateIpAddresses'      => 'PrivateIpAddresses',
        'publicIpAddresses'       => 'PublicIpAddresses',
        'eipAddresses'            => 'EipAddresses',
        'ownerAccount'            => 'OwnerAccount',
        'instanceChargeType'      => 'InstanceChargeType',
        'internetChargeType'      => 'InternetChargeType',
        'instanceName'            => 'InstanceName',
        'imageId'                 => 'ImageId',
        'status'                  => 'Status',
        'lockReason'              => 'LockReason',
        'deviceAvailable'         => 'DeviceAvailable',
        'ioOptimized'             => 'IoOptimized',
        'needSaleCycle'           => 'NeedSaleCycle',
        'tag'                     => 'Tag',
        'instanceType'            => 'InstanceType',
        'instanceTypeFamily'      => 'InstanceTypeFamily',
        'keyPairName'             => 'KeyPairName',
        'resourceGroupId'         => 'ResourceGroupId',
        'hpcClusterId'            => 'HpcClusterId',
        'rdmaIpAddresses'         => 'RdmaIpAddresses',
        'dryRun'                  => 'DryRun',
        'additionalAttributes'    => 'AdditionalAttributes',
        'httpEndpoint'            => 'HttpEndpoint',
        'httpTokens'              => 'HttpTokens',
        'httpPutResponseHopLimit' => 'HttpPutResponseHopLimit',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->innerIpAddresses) {
            $res['InnerIpAddresses'] = $this->innerIpAddresses;
        }
        if (null !== $this->privateIpAddresses) {
            $res['PrivateIpAddresses'] = $this->privateIpAddresses;
        }
        if (null !== $this->publicIpAddresses) {
            $res['PublicIpAddresses'] = $this->publicIpAddresses;
        }
        if (null !== $this->eipAddresses) {
            $res['EipAddresses'] = $this->eipAddresses;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->deviceAvailable) {
            $res['DeviceAvailable'] = $this->deviceAvailable;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->needSaleCycle) {
            $res['NeedSaleCycle'] = $this->needSaleCycle;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->hpcClusterId) {
            $res['HpcClusterId'] = $this->hpcClusterId;
        }
        if (null !== $this->rdmaIpAddresses) {
            $res['RdmaIpAddresses'] = $this->rdmaIpAddresses;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->additionalAttributes) {
            $res['AdditionalAttributes'] = [];
            if (null !== $this->additionalAttributes) {
                $res['AdditionalAttributes'] = $this->additionalAttributes;
            }
        }
        if (null !== $this->httpEndpoint) {
            $res['HttpEndpoint'] = $this->httpEndpoint;
        }
        if (null !== $this->httpTokens) {
            $res['HttpTokens'] = $this->httpTokens;
        }
        if (null !== $this->httpPutResponseHopLimit) {
            $res['HttpPutResponseHopLimit'] = $this->httpPutResponseHopLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstancesRequest
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['InnerIpAddresses'])) {
            $model->innerIpAddresses = $map['InnerIpAddresses'];
        }
        if (isset($map['PrivateIpAddresses'])) {
            $model->privateIpAddresses = $map['PrivateIpAddresses'];
        }
        if (isset($map['PublicIpAddresses'])) {
            $model->publicIpAddresses = $map['PublicIpAddresses'];
        }
        if (isset($map['EipAddresses'])) {
            $model->eipAddresses = $map['EipAddresses'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['DeviceAvailable'])) {
            $model->deviceAvailable = $map['DeviceAvailable'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['NeedSaleCycle'])) {
            $model->needSaleCycle = $map['NeedSaleCycle'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['HpcClusterId'])) {
            $model->hpcClusterId = $map['HpcClusterId'];
        }
        if (isset($map['RdmaIpAddresses'])) {
            $model->rdmaIpAddresses = $map['RdmaIpAddresses'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['AdditionalAttributes'])) {
            if (!empty($map['AdditionalAttributes'])) {
                $model->additionalAttributes = [];
                $model->additionalAttributes = $map['AdditionalAttributes'];
            }
        }
        if (isset($map['HttpEndpoint'])) {
            $model->httpEndpoint = $map['HttpEndpoint'];
        }
        if (isset($map['HttpTokens'])) {
            $model->httpTokens = $map['HttpTokens'];
        }
        if (isset($map['HttpPutResponseHopLimit'])) {
            $model->httpPutResponseHopLimit = $map['HttpPutResponseHopLimit'];
        }

        return $model;
    }
}
