<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class CreateDatabaseRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'ownerAccount' => 'OwnerAccount',
        'DBClusterId' => 'DBClusterId',
        'DBName' => 'DBName',
        'characterSetName' => 'CharacterSetName',
        'DBDescription' => 'DBDescription',
        'accountName' => 'AccountName',
        'accountPrivilege' => 'AccountPrivilege',
        'collate' => 'Collate',
        'ctype' => 'Ctype',
    ];
    public function validate() {
        Model::validateRequired('DBClusterId', $this->DBClusterId, true);
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('characterSetName', $this->characterSetName, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['DBClusterId'] = $this->DBClusterId;
        $res['DBName'] = $this->DBName;
        $res['CharacterSetName'] = $this->characterSetName;
        $res['DBDescription'] = $this->DBDescription;
        $res['AccountName'] = $this->accountName;
        $res['AccountPrivilege'] = $this->accountPrivilege;
        $res['Collate'] = $this->collate;
        $res['Ctype'] = $this->ctype;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateDatabaseRequest
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
        if(isset($map['DBName'])){
            $model->DBName = $map['DBName'];
        }
        if(isset($map['CharacterSetName'])){
            $model->characterSetName = $map['CharacterSetName'];
        }
        if(isset($map['DBDescription'])){
            $model->DBDescription = $map['DBDescription'];
        }
        if(isset($map['AccountName'])){
            $model->accountName = $map['AccountName'];
        }
        if(isset($map['AccountPrivilege'])){
            $model->accountPrivilege = $map['AccountPrivilege'];
        }
        if(isset($map['Collate'])){
            $model->collate = $map['Collate'];
        }
        if(isset($map['Ctype'])){
            $model->ctype = $map['Ctype'];
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
     * @description dbName
     * @var string
     */
    public $DBName;

    /**
     * @description characterSetName
     * @var string
     */
    public $characterSetName;

    /**
     * @description dbDescription
     * @var string
     */
    public $DBDescription;

    /**
     * @description accountName
     * @var string
     */
    public $accountName;

    /**
     * @description accountPrivilege
     * @var string
     */
    public $accountPrivilege;

    /**
     * @description collate
     * @var string
     */
    public $collate;

    /**
     * @description ctype
     * @var string
     */
    public $ctype;

}
