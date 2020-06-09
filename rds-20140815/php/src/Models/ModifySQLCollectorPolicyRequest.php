<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifySQLCollectorPolicyRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'accessKeyId' => 'AccessKeyId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'SQLCollectorStatus' => 'SQLCollectorStatus',
        'ownerAccount' => 'OwnerAccount',
        'resourceGroupId' => 'ResourceGroupId',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('SQLCollectorStatus', $this->SQLCollectorStatus, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['SQLCollectorStatus'] = $this->SQLCollectorStatus;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['ResourceGroupId'] = $this->resourceGroupId;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifySQLCollectorPolicyRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
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
        if(isset($map['SQLCollectorStatus'])){
            $model->SQLCollectorStatus = $map['SQLCollectorStatus'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['ResourceGroupId'])){
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description appKey
     * @var string
     */
    public $accessKeyId;

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
     * @description sqlCollectorStatus
     * @var string
     */
    public $SQLCollectorStatus;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

    /**
     * @description resourceGroupId
     * @var string
     */
    public $resourceGroupId;

}
