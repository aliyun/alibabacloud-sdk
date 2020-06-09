<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterMigrationRequest extends Model {
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'ownerAccount' => 'OwnerAccount',
        'DBClusterId' => 'DBClusterId',
        'sourceRDSDBInstanceId' => 'SourceRDSDBInstanceId',
        'newMasterInstanceId' => 'NewMasterInstanceId',
        'swapConnectionString' => 'SwapConnectionString',
    ];
    public function validate() {
        Model::validateRequired('DBClusterId', $this->DBClusterId, true);
        Model::validateRequired('sourceRDSDBInstanceId', $this->sourceRDSDBInstanceId, true);
        Model::validateRequired('newMasterInstanceId', $this->newMasterInstanceId, true);
    }
    public function toMap() {
        $res = [];
        $res['SecurityToken'] = $this->securityToken;
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['DBClusterId'] = $this->DBClusterId;
        $res['SourceRDSDBInstanceId'] = $this->sourceRDSDBInstanceId;
        $res['NewMasterInstanceId'] = $this->newMasterInstanceId;
        $res['SwapConnectionString'] = $this->swapConnectionString;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyDBClusterMigrationRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SecurityToken'])){
            $model->securityToken = $map['SecurityToken'];
        }
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
        if(isset($map['DBClusterId'])){
            $model->DBClusterId = $map['DBClusterId'];
        }
        if(isset($map['SourceRDSDBInstanceId'])){
            $model->sourceRDSDBInstanceId = $map['SourceRDSDBInstanceId'];
        }
        if(isset($map['NewMasterInstanceId'])){
            $model->newMasterInstanceId = $map['NewMasterInstanceId'];
        }
        if(isset($map['SwapConnectionString'])){
            $model->swapConnectionString = $map['SwapConnectionString'];
        }
        return $model;
    }
    /**
     * @description stsSecurityToken
     * @var string
     */
    public $securityToken;

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
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

    /**
     * @description dbClusterId
     * @var string
     */
    public $DBClusterId;

    /**
     * @description sourceDBInstanceId
     * @var string
     */
    public $sourceRDSDBInstanceId;

    /**
     * @description newMasterInstanceId
     * @var string
     */
    public $newMasterInstanceId;

    /**
     * @description swapConnectionString
     * @var string
     */
    public $swapConnectionString;

}
