<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class CreateAccountRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'ownerAccount' => 'OwnerAccount',
        'DBClusterId' => 'DBClusterId',
        'accountName' => 'AccountName',
        'accountPassword' => 'AccountPassword',
        'accountType' => 'AccountType',
        'accountDescription' => 'AccountDescription',
        'DBName' => 'DBName',
        'accountPrivilege' => 'AccountPrivilege',
    ];
    public function validate() {
        Model::validateRequired('DBClusterId', $this->DBClusterId, true);
        Model::validateRequired('accountName', $this->accountName, true);
        Model::validateRequired('accountPassword', $this->accountPassword, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['DBClusterId'] = $this->DBClusterId;
        $res['AccountName'] = $this->accountName;
        $res['AccountPassword'] = $this->accountPassword;
        $res['AccountType'] = $this->accountType;
        $res['AccountDescription'] = $this->accountDescription;
        $res['DBName'] = $this->DBName;
        $res['AccountPrivilege'] = $this->accountPrivilege;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateAccountRequest
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
        if(isset($map['AccountName'])){
            $model->accountName = $map['AccountName'];
        }
        if(isset($map['AccountPassword'])){
            $model->accountPassword = $map['AccountPassword'];
        }
        if(isset($map['AccountType'])){
            $model->accountType = $map['AccountType'];
        }
        if(isset($map['AccountDescription'])){
            $model->accountDescription = $map['AccountDescription'];
        }
        if(isset($map['DBName'])){
            $model->DBName = $map['DBName'];
        }
        if(isset($map['AccountPrivilege'])){
            $model->accountPrivilege = $map['AccountPrivilege'];
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
     * @description accountName
     * @var string
     */
    public $accountName;

    /**
     * @description accountPassword
     * @var string
     */
    public $accountPassword;

    /**
     * @description accountType
     * @var string
     */
    public $accountType;

    /**
     * @description accountDescription
     * @var string
     */
    public $accountDescription;

    /**
     * @description dbName
     * @var string
     */
    public $DBName;

    /**
     * @description accountPrivilege
     * @var string
     */
    public $accountPrivilege;

}
