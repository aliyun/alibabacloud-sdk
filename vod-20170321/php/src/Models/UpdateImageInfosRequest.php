<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateImageInfosRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceRealOwnerId' => 'ResourceRealOwnerId',
        'updateContent' => 'UpdateContent',
    ];
    public function validate() {
        Model::validateRequired('updateContent', $this->updateContent, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ResourceRealOwnerId'] = $this->resourceRealOwnerId;
        $res['UpdateContent'] = $this->updateContent;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateImageInfosRequest
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
        if(isset($map['ResourceRealOwnerId'])){
            $model->resourceRealOwnerId = $map['ResourceRealOwnerId'];
        }
        if(isset($map['UpdateContent'])){
            $model->updateContent = $map['UpdateContent'];
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
     * @description resourceRealOwnerId
     * @var integer
     */
    public $resourceRealOwnerId;

    /**
     * @description updateContent
     * @var string
     */
    public $updateContent;

}
