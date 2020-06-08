<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBProxyRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'configDBProxyService' => 'ConfigDBProxyService',
        'DBProxyInstanceNum' => 'DBProxyInstanceNum',
        'regionId' => 'RegionId',
        'instanceNetworkType' => 'InstanceNetworkType',
        'VPCId' => 'VPCId',
        'VSwitchId' => 'VSwitchId',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('configDBProxyService', $this->configDBProxyService, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['ConfigDBProxyService'] = $this->configDBProxyService;
        $res['DBProxyInstanceNum'] = $this->DBProxyInstanceNum;
        $res['RegionId'] = $this->regionId;
        $res['InstanceNetworkType'] = $this->instanceNetworkType;
        $res['VPCId'] = $this->VPCId;
        $res['VSwitchId'] = $this->VSwitchId;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyDBProxyRequest
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
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['ConfigDBProxyService'])){
            $model->configDBProxyService = $map['ConfigDBProxyService'];
        }
        if(isset($map['DBProxyInstanceNum'])){
            $model->DBProxyInstanceNum = $map['DBProxyInstanceNum'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['InstanceNetworkType'])){
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if(isset($map['VPCId'])){
            $model->VPCId = $map['VPCId'];
        }
        if(isset($map['VSwitchId'])){
            $model->VSwitchId = $map['VSwitchId'];
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
     * @description dbInstanceId
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description configDBProxyService
     * @var string
     */
    public $configDBProxyService;

    /**
     * @description dbProxyInstanceNum
     * @var string
     */
    public $DBProxyInstanceNum;

    /**
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description instanceNetworkType
     * @var string
     */
    public $instanceNetworkType;

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

}
