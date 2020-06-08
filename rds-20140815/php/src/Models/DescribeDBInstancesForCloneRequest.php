<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstancesForCloneRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'clientToken' => 'ClientToken',
        'proxyId' => 'proxyId',
        'engine' => 'Engine',
        'zoneId' => 'ZoneId',
        'DBInstanceStatus' => 'DBInstanceStatus',
        'expired' => 'Expired',
        'searchKey' => 'SearchKey',
        'DBInstanceId' => 'DBInstanceId',
        'DBInstanceType' => 'DBInstanceType',
        'regionId' => 'RegionId',
        'pageSize' => 'PageSize',
        'pageNumber' => 'PageNumber',
        'instanceNetworkType' => 'InstanceNetworkType',
        'vpcId' => 'VpcId',
        'VSwitchId' => 'VSwitchId',
        'DBInstanceClass' => 'DBInstanceClass',
        'engineVersion' => 'EngineVersion',
        'nodeType' => 'NodeType',
        'payType' => 'PayType',
        'connectionMode' => 'ConnectionMode',
        'ownerAccount' => 'OwnerAccount',
        'currentInstanceId' => 'CurrentInstanceId',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ClientToken'] = $this->clientToken;
        $res['proxyId'] = $this->proxyId;
        $res['Engine'] = $this->engine;
        $res['ZoneId'] = $this->zoneId;
        $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        $res['Expired'] = $this->expired;
        $res['SearchKey'] = $this->searchKey;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['DBInstanceType'] = $this->DBInstanceType;
        $res['RegionId'] = $this->regionId;
        $res['PageSize'] = $this->pageSize;
        $res['PageNumber'] = $this->pageNumber;
        $res['InstanceNetworkType'] = $this->instanceNetworkType;
        $res['VpcId'] = $this->vpcId;
        $res['VSwitchId'] = $this->VSwitchId;
        $res['DBInstanceClass'] = $this->DBInstanceClass;
        $res['EngineVersion'] = $this->engineVersion;
        $res['NodeType'] = $this->nodeType;
        $res['PayType'] = $this->payType;
        $res['ConnectionMode'] = $this->connectionMode;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['CurrentInstanceId'] = $this->currentInstanceId;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDBInstancesForCloneRequest
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
        if(isset($map['ClientToken'])){
            $model->clientToken = $map['ClientToken'];
        }
        if(isset($map['proxyId'])){
            $model->proxyId = $map['proxyId'];
        }
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
        }
        if(isset($map['ZoneId'])){
            $model->zoneId = $map['ZoneId'];
        }
        if(isset($map['DBInstanceStatus'])){
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if(isset($map['Expired'])){
            $model->expired = $map['Expired'];
        }
        if(isset($map['SearchKey'])){
            $model->searchKey = $map['SearchKey'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['DBInstanceType'])){
            $model->DBInstanceType = $map['DBInstanceType'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['InstanceNetworkType'])){
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if(isset($map['VpcId'])){
            $model->vpcId = $map['VpcId'];
        }
        if(isset($map['VSwitchId'])){
            $model->VSwitchId = $map['VSwitchId'];
        }
        if(isset($map['DBInstanceClass'])){
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if(isset($map['EngineVersion'])){
            $model->engineVersion = $map['EngineVersion'];
        }
        if(isset($map['NodeType'])){
            $model->nodeType = $map['NodeType'];
        }
        if(isset($map['PayType'])){
            $model->payType = $map['PayType'];
        }
        if(isset($map['ConnectionMode'])){
            $model->connectionMode = $map['ConnectionMode'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['CurrentInstanceId'])){
            $model->currentInstanceId = $map['CurrentInstanceId'];
        }
        return $model;
    }
    /**
     * @description appKey
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
     * @description token
     * @var string
     */
    public $clientToken;

    /**
     * @description proxyId
     * @var string
     */
    public $proxyId;

    /**
     * @description dbType
     * @var string
     */
    public $engine;

    /**
     * @description zoneId
     * @var string
     */
    public $zoneId;

    /**
     * @description dbInstanceStatusDesc
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description expired
     * @var string
     */
    public $expired;

    /**
     * @description description
     * @var string
     */
    public $searchKey;

    /**
     * @description dbInstanceId
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description instanceUsedType
     * @var string
     */
    public $DBInstanceType;

    /**
     * @description region
     * @var string
     */
    public $regionId;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description page
     * @var integer
     */
    public $pageNumber;

    /**
     * @description instanceNetworkType
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description vpcId
     * @var string
     */
    public $vpcId;

    /**
     * @description vswitchId
     * @var string
     */
    public $VSwitchId;

    /**
     * @description dbInstanceClass
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description engineVersion
     * @var string
     */
    public $engineVersion;

    /**
     * @description nodeType
     * @var string
     */
    public $nodeType;

    /**
     * @description chargeType
     * @var string
     */
    public $payType;

    /**
     * @description connectionMode
     * @var string
     */
    public $connectionMode;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

    /**
     * @description currentDbInstanceId
     * @var string
     */
    public $currentInstanceId;

}
