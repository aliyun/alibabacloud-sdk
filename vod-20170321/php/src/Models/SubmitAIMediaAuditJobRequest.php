<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitAIMediaAuditJobRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'mediaId' => 'MediaId',
        'templateId' => 'TemplateId',
        'userData' => 'UserData',
        'mediaType' => 'MediaType',
    ];
    public function validate() {
        Model::validateRequired('mediaId', $this->mediaId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['MediaId'] = $this->mediaId;
        $res['TemplateId'] = $this->templateId;
        $res['UserData'] = $this->userData;
        $res['MediaType'] = $this->mediaType;
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitAIMediaAuditJobRequest
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
        if(isset($map['MediaId'])){
            $model->mediaId = $map['MediaId'];
        }
        if(isset($map['TemplateId'])){
            $model->templateId = $map['TemplateId'];
        }
        if(isset($map['UserData'])){
            $model->userData = $map['UserData'];
        }
        if(isset($map['MediaType'])){
            $model->mediaType = $map['MediaType'];
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
     * @description mediaId
     * @var string
     */
    public $mediaId;

    /**
     * @description templateId
     * @var string
     */
    public $templateId;

    /**
     * @description userData
     * @var string
     */
    public $userData;

    /**
     * @description mediaType
     * @var string
     */
    public $mediaType;

}
