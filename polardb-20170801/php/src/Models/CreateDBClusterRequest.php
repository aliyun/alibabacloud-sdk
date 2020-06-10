<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class CreateDBClusterRequest extends Model
{
    /**
     * @description stsAccessKeyId
     *
     * @var string
     */
    public $accessKeyId;

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
     * @description zoneId
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description dbType
     *
     * @var string
     */
    public $DBType;

    /**
     * @description dbVersion
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @description dbInstanceClass
     *
     * @var string
     */
    public $DBNodeClass;

    /**
     * @description clusterNetworkType
     *
     * @var string
     */
    public $clusterNetworkType;

    /**
     * @description dbClusterDescription
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description payType
     *
     * @var string
     */
    public $payType;

    /**
     * @description autoRenew
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description period
     *
     * @var string
     */
    public $period;

    /**
     * @description usedTime
     *
     * @var string
     */
    public $usedTime;

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
     * @description creationOption
     *
     * @var string
     */
    public $creationOption;

    /**
     * @description sourceResourceId
     *
     * @var string
     */
    public $sourceResourceId;

    /**
     * @description cloneDataPoint
     *
     * @var string
     */
    public $cloneDataPoint;

    /**
     * @description token
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description securityIPList
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @description tdeStatus
     *
     * @var bool
     */
    public $TDEStatus;

    /**
     * @description gdnId
     *
     * @var string
     */
    public $GDNId;

    /**
     * @description creationCategory
     *
     * @var string
     */
    public $creationCategory;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'zoneId'               => 'ZoneId',
        'DBType'               => 'DBType',
        'DBVersion'            => 'DBVersion',
        'DBNodeClass'          => 'DBNodeClass',
        'clusterNetworkType'   => 'ClusterNetworkType',
        'DBClusterDescription' => 'DBClusterDescription',
        'payType'              => 'PayType',
        'autoRenew'            => 'AutoRenew',
        'period'               => 'Period',
        'usedTime'             => 'UsedTime',
        'VPCId'                => 'VPCId',
        'VSwitchId'            => 'VSwitchId',
        'creationOption'       => 'CreationOption',
        'sourceResourceId'     => 'SourceResourceId',
        'cloneDataPoint'       => 'CloneDataPoint',
        'clientToken'          => 'ClientToken',
        'resourceGroupId'      => 'ResourceGroupId',
        'securityIPList'       => 'SecurityIPList',
        'TDEStatus'            => 'TDEStatus',
        'GDNId'                => 'GDNId',
        'creationCategory'     => 'CreationCategory',
    ];

    public function validate()
    {
        Model::validateRequired('DBType', $this->DBType, true);
        Model::validateRequired('DBVersion', $this->DBVersion, true);
        Model::validateRequired('DBNodeClass', $this->DBNodeClass, true);
        Model::validateRequired('payType', $this->payType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
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
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }
        if (null !== $this->clusterNetworkType) {
            $res['ClusterNetworkType'] = $this->clusterNetworkType;
        }
        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->creationOption) {
            $res['CreationOption'] = $this->creationOption;
        }
        if (null !== $this->sourceResourceId) {
            $res['SourceResourceId'] = $this->sourceResourceId;
        }
        if (null !== $this->cloneDataPoint) {
            $res['CloneDataPoint'] = $this->cloneDataPoint;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->TDEStatus) {
            $res['TDEStatus'] = $this->TDEStatus;
        }
        if (null !== $this->GDNId) {
            $res['GDNId'] = $this->GDNId;
        }
        if (null !== $this->creationCategory) {
            $res['CreationCategory'] = $this->creationCategory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if (isset($map['ClusterNetworkType'])) {
            $model->clusterNetworkType = $map['ClusterNetworkType'];
        }
        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['CreationOption'])) {
            $model->creationOption = $map['CreationOption'];
        }
        if (isset($map['SourceResourceId'])) {
            $model->sourceResourceId = $map['SourceResourceId'];
        }
        if (isset($map['CloneDataPoint'])) {
            $model->cloneDataPoint = $map['CloneDataPoint'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['TDEStatus'])) {
            $model->TDEStatus = $map['TDEStatus'];
        }
        if (isset($map['GDNId'])) {
            $model->GDNId = $map['GDNId'];
        }
        if (isset($map['CreationCategory'])) {
            $model->creationCategory = $map['CreationCategory'];
        }

        return $model;
    }
}
