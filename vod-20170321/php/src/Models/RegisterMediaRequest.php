<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class RegisterMediaRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'registerMetadatas' => 'RegisterMetadatas',
        'templateGroupId' => 'TemplateGroupId',
        'userData' => 'UserData',
        'workflowId' => 'WorkflowId',
    ];
    public function validate() {
        Model::validateRequired('registerMetadatas', $this->registerMetadatas, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['RegisterMetadatas'] = $this->registerMetadatas;
        $res['TemplateGroupId'] = $this->templateGroupId;
        $res['UserData'] = $this->userData;
        $res['WorkflowId'] = $this->workflowId;
        return $res;
    }
    /**
     * @param array $map
     * @return RegisterMediaRequest
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
        if(isset($map['RegisterMetadatas'])){
            $model->registerMetadatas = $map['RegisterMetadatas'];
        }
        if(isset($map['TemplateGroupId'])){
            $model->templateGroupId = $map['TemplateGroupId'];
        }
        if(isset($map['UserData'])){
            $model->userData = $map['UserData'];
        }
        if(isset($map['WorkflowId'])){
            $model->workflowId = $map['WorkflowId'];
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
     * @description registerMetadatas
     * @var string
     */
    public $registerMetadatas;

    /**
     * @description templateGroupId
     * @var string
     */
    public $templateGroupId;

    /**
     * @description userData
     * @var string
     */
    public $userData;

    /**
     * @description workflowId
     * @var string
     */
    public $workflowId;

}
