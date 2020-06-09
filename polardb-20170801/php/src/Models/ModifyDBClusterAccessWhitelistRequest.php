<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterAccessWhitelistRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'ownerAccount' => 'OwnerAccount',
        'DBClusterId' => 'DBClusterId',
        'securityIps' => 'SecurityIps',
        'DBClusterIPArrayName' => 'DBClusterIPArrayName',
        'DBClusterIPArrayAttribute' => 'DBClusterIPArrayAttribute',
        'whiteListType' => 'WhiteListType',
        'securityGroupIds' => 'SecurityGroupIds',
        'modifyMode' => 'ModifyMode',
    ];
    public function validate() {
        Model::validateRequired('DBClusterId', $this->DBClusterId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['DBClusterId'] = $this->DBClusterId;
        $res['SecurityIps'] = $this->securityIps;
        $res['DBClusterIPArrayName'] = $this->DBClusterIPArrayName;
        $res['DBClusterIPArrayAttribute'] = $this->DBClusterIPArrayAttribute;
        $res['WhiteListType'] = $this->whiteListType;
        $res['SecurityGroupIds'] = $this->securityGroupIds;
        $res['ModifyMode'] = $this->modifyMode;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyDBClusterAccessWhitelistRequest
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
        if(isset($map['DBClusterId'])){
            $model->DBClusterId = $map['DBClusterId'];
        }
        if(isset($map['SecurityIps'])){
            $model->securityIps = $map['SecurityIps'];
        }
        if(isset($map['DBClusterIPArrayName'])){
            $model->DBClusterIPArrayName = $map['DBClusterIPArrayName'];
        }
        if(isset($map['DBClusterIPArrayAttribute'])){
            $model->DBClusterIPArrayAttribute = $map['DBClusterIPArrayAttribute'];
        }
        if(isset($map['WhiteListType'])){
            $model->whiteListType = $map['WhiteListType'];
        }
        if(isset($map['SecurityGroupIds'])){
            $model->securityGroupIds = $map['SecurityGroupIds'];
        }
        if(isset($map['ModifyMode'])){
            $model->modifyMode = $map['ModifyMode'];
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
     * @description securityIps
     * @var string
     */
    public $securityIps;

    /**
     * @description groupName
     * @var string
     */
    public $DBClusterIPArrayName;

    /**
     * @description groupAttribute
     * @var string
     */
    public $DBClusterIPArrayAttribute;

    /**
     * @description whitelistType
     * @var string
     */
    public $whiteListType;

    /**
     * @description securityGroupIds
     * @var string
     */
    public $securityGroupIds;

    /**
     * @description modifyMode
     * @var string
     */
    public $modifyMode;

}
