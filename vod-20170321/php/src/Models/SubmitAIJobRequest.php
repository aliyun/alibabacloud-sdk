<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitAIJobRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ownerAccount' => 'OwnerAccount',
        'mediaId' => 'MediaId',
        'types' => 'Types',
        'config' => 'Config',
        'userData' => 'UserData',
        'input' => 'Input',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['MediaId'] = $this->mediaId;
        $res['Types'] = $this->types;
        $res['Config'] = $this->config;
        $res['UserData'] = $this->userData;
        $res['Input'] = $this->input;
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitAIJobRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['MediaId'])){
            $model->mediaId = $map['MediaId'];
        }
        if(isset($map['Types'])){
            $model->types = $map['Types'];
        }
        if(isset($map['Config'])){
            $model->config = $map['Config'];
        }
        if(isset($map['UserData'])){
            $model->userData = $map['UserData'];
        }
        if(isset($map['Input'])){
            $model->input = $map['Input'];
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
     * @var string
     */
    public $ownerId;

    /**
     * @description resourceOwnerId
     * @var string
     */
    public $resourceOwnerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

    /**
     * @description mediaId
     * @var string
     */
    public $mediaId;

    /**
     * @description types
     * @var string
     */
    public $types;

    /**
     * @description config
     * @var string
     */
    public $config;

    /**
     * @description userData
     * @var string
     */
    public $userData;

    /**
     * @description input
     * @var string
     */
    public $input;

}
