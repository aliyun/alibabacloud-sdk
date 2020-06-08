<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDedicatedHostAccountRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'dedicatedHostId' => 'DedicatedHostId',
        'accountName' => 'AccountName',
        'accountPassword' => 'AccountPassword',
        'regionId' => 'RegionId',
    ];
    public function validate() {
        Model::validateRequired('dedicatedHostId', $this->dedicatedHostId, true);
        Model::validateRequired('accountName', $this->accountName, true);
        Model::validateRequired('accountPassword', $this->accountPassword, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DedicatedHostId'] = $this->dedicatedHostId;
        $res['AccountName'] = $this->accountName;
        $res['AccountPassword'] = $this->accountPassword;
        $res['RegionId'] = $this->regionId;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateDedicatedHostAccountRequest
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
        if(isset($map['DedicatedHostId'])){
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if(isset($map['AccountName'])){
            $model->accountName = $map['AccountName'];
        }
        if(isset($map['AccountPassword'])){
            $model->accountPassword = $map['AccountPassword'];
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
     * @description DedicatedHostId
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description AccountName
     * @var string
     */
    public $accountName;

    /**
     * @description AccountPassword
     * @var string
     */
    public $accountPassword;

    /**
     * @description RegionId
     * @var string
     */
    public $regionId;

}
