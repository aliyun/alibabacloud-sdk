<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifySQLCollectorRetentionRequest extends Model {
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'ownerAccount' => 'OwnerAccount',
        'DBInstanceId' => 'DBInstanceId',
        'configValue' => 'ConfigValue',
        'resourceGroupId' => 'ResourceGroupId',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('configValue', $this->configValue, true);
    }
    public function toMap() {
        $res = [];
        $res['SecurityToken'] = $this->securityToken;
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['ConfigValue'] = $this->configValue;
        $res['ResourceGroupId'] = $this->resourceGroupId;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifySQLCollectorRetentionRequest
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
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['ConfigValue'])){
            $model->configValue = $map['ConfigValue'];
        }
        if(isset($map['ResourceGroupId'])){
            $model->resourceGroupId = $map['ResourceGroupId'];
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
     * @description dbInstanceId
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description configValue
     * @var string
     */
    public $configValue;

    /**
     * @description resourceGroupId
     * @var string
     */
    public $resourceGroupId;

}
