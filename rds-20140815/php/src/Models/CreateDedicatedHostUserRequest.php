<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDedicatedHostUserRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'dedicatedHostName' => 'DedicatedHostName',
        'userName' => 'UserName',
        'userPassword' => 'UserPassword',
        'regionId' => 'RegionId',
    ];
    public function validate() {
        Model::validateRequired('dedicatedHostName', $this->dedicatedHostName, true);
        Model::validateRequired('userName', $this->userName, true);
        Model::validateRequired('userPassword', $this->userPassword, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DedicatedHostName'] = $this->dedicatedHostName;
        $res['UserName'] = $this->userName;
        $res['UserPassword'] = $this->userPassword;
        $res['RegionId'] = $this->regionId;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateDedicatedHostUserRequest
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
        if(isset($map['DedicatedHostName'])){
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }
        if(isset($map['UserName'])){
            $model->userName = $map['UserName'];
        }
        if(isset($map['UserPassword'])){
            $model->userPassword = $map['UserPassword'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
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
     * @description dedicatedHostName
     * @var string
     */
    public $dedicatedHostName;

    /**
     * @description userName
     * @var string
     */
    public $userName;

    /**
     * @description userPassword
     * @var string
     */
    public $userPassword;

    /**
     * @description regionId
     * @var string
     */
    public $regionId;

}
