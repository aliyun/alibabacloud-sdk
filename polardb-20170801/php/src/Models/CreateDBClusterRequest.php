<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class CreateDBClusterRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'ownerAccount' => 'OwnerAccount',
        'zoneId' => 'ZoneId',
        'DBType' => 'DBType',
        'DBVersion' => 'DBVersion',
        'DBNodeClass' => 'DBNodeClass',
        'clusterNetworkType' => 'ClusterNetworkType',
        'DBClusterDescription' => 'DBClusterDescription',
        'payType' => 'PayType',
        'autoRenew' => 'AutoRenew',
        'period' => 'Period',
        'usedTime' => 'UsedTime',
        'VPCId' => 'VPCId',
        'VSwitchId' => 'VSwitchId',
        'creationOption' => 'CreationOption',
        'sourceResourceId' => 'SourceResourceId',
        'cloneDataPoint' => 'CloneDataPoint',
        'clientToken' => 'ClientToken',
        'resourceGroupId' => 'ResourceGroupId',
        'securityIPList' => 'SecurityIPList',
        'TDEStatus' => 'TDEStatus',
        'GDNId' => 'GDNId',
        'creationCategory' => 'CreationCategory',
    ];
    public function validate() {
        Model::validateRequired('DBType', $this->DBType, true);
        Model::validateRequired('DBVersion', $this->DBVersion, true);
        Model::validateRequired('DBNodeClass', $this->DBNodeClass, true);
        Model::validateRequired('payType', $this->payType, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['ZoneId'] = $this->zoneId;
        $res['DBType'] = $this->DBType;
        $res['DBVersion'] = $this->DBVersion;
        $res['DBNodeClass'] = $this->DBNodeClass;
        $res['ClusterNetworkType'] = $this->clusterNetworkType;
        $res['DBClusterDescription'] = $this->DBClusterDescription;
        $res['PayType'] = $this->payType;
        $res['AutoRenew'] = $this->autoRenew;
        $res['Period'] = $this->period;
        $res['UsedTime'] = $this->usedTime;
        $res['VPCId'] = $this->VPCId;
        $res['VSwitchId'] = $this->VSwitchId;
        $res['CreationOption'] = $this->creationOption;
        $res['SourceResourceId'] = $this->sourceResourceId;
        $res['CloneDataPoint'] = $this->cloneDataPoint;
        $res['ClientToken'] = $this->clientToken;
        $res['ResourceGroupId'] = $this->resourceGroupId;
        $res['SecurityIPList'] = $this->securityIPList;
        $res['TDEStatus'] = $this->TDEStatus;
        $res['GDNId'] = $this->GDNId;
        $res['CreationCategory'] = $this->creationCategory;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateDBClusterRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['ZoneId'])){
            $model->zoneId = $map['ZoneId'];
        }
        if(isset($map['DBType'])){
            $model->DBType = $map['DBType'];
        }
        if(isset($map['DBVersion'])){
            $model->DBVersion = $map['DBVersion'];
        }
        if(isset($map['DBNodeClass'])){
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if(isset($map['ClusterNetworkType'])){
            $model->clusterNetworkType = $map['ClusterNetworkType'];
        }
        if(isset($map['DBClusterDescription'])){
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if(isset($map['PayType'])){
            $model->payType = $map['PayType'];
        }
        if(isset($map['AutoRenew'])){
            $model->autoRenew = $map['AutoRenew'];
        }
        if(isset($map['Period'])){
            $model->period = $map['Period'];
        }
        if(isset($map['UsedTime'])){
            $model->usedTime = $map['UsedTime'];
        }
        if(isset($map['VPCId'])){
            $model->VPCId = $map['VPCId'];
        }
        if(isset($map['VSwitchId'])){
            $model->VSwitchId = $map['VSwitchId'];
        }
        if(isset($map['CreationOption'])){
            $model->creationOption = $map['CreationOption'];
        }
        if(isset($map['SourceResourceId'])){
            $model->sourceResourceId = $map['SourceResourceId'];
        }
        if(isset($map['CloneDataPoint'])){
            $model->cloneDataPoint = $map['CloneDataPoint'];
        }
        if(isset($map['ClientToken'])){
            $model->clientToken = $map['ClientToken'];
        }
        if(isset($map['ResourceGroupId'])){
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if(isset($map['SecurityIPList'])){
            $model->securityIPList = $map['SecurityIPList'];
        }
        if(isset($map['TDEStatus'])){
            $model->TDEStatus = $map['TDEStatus'];
        }
        if(isset($map['GDNId'])){
            $model->GDNId = $map['GDNId'];
        }
        if(isset($map['CreationCategory'])){
            $model->creationCategory = $map['CreationCategory'];
        }
        return $model;
    }
    /**
     * @description stsAccessKeyId
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

    /**
     * @description zoneId
     * @var string
     */
    public $zoneId;

    /**
     * @description dbType
     * @var string
     */
    public $DBType;

    /**
     * @description dbVersion
     * @var string
     */
    public $DBVersion;

    /**
     * @description dbInstanceClass
     * @var string
     */
    public $DBNodeClass;

    /**
     * @description clusterNetworkType
     * @var string
     */
    public $clusterNetworkType;

    /**
     * @description dbClusterDescription
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description payType
     * @var string
     */
    public $payType;

    /**
     * @description autoRenew
     * @var bool
     */
    public $autoRenew;

    /**
     * @description period
     * @var string
     */
    public $period;

    /**
     * @description usedTime
     * @var string
     */
    public $usedTime;

    /**
     * @description vpcId
     * @var string
     */
    public $VPCId;

    /**
     * @description vswitchId
     * @var string
     */
    public $VSwitchId;

    /**
     * @description creationOption
     * @var string
     */
    public $creationOption;

    /**
     * @description sourceResourceId
     * @var string
     */
    public $sourceResourceId;

    /**
     * @description cloneDataPoint
     * @var string
     */
    public $cloneDataPoint;

    /**
     * @description token
     * @var string
     */
    public $clientToken;

    /**
     * @description resourceGroupId
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description securityIPList
     * @var string
     */
    public $securityIPList;

    /**
     * @description tdeStatus
     * @var bool
     */
    public $TDEStatus;

    /**
     * @description gdnId
     * @var string
     */
    public $GDNId;

    /**
     * @description creationCategory
     * @var string
     */
    public $creationCategory;

}
