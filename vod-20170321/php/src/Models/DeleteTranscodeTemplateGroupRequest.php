<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteTranscodeTemplateGroupRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'transcodeTemplateIds' => 'TranscodeTemplateIds',
        'forceDelGroup' => 'ForceDelGroup',
    ];
    public function validate() {
        Model::validateRequired('transcodeTemplateGroupId', $this->transcodeTemplateGroupId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        $res['TranscodeTemplateIds'] = $this->transcodeTemplateIds;
        $res['ForceDelGroup'] = $this->forceDelGroup;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteTranscodeTemplateGroupRequest
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
        if(isset($map['TranscodeTemplateGroupId'])){
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }
        if(isset($map['TranscodeTemplateIds'])){
            $model->transcodeTemplateIds = $map['TranscodeTemplateIds'];
        }
        if(isset($map['ForceDelGroup'])){
            $model->forceDelGroup = $map['ForceDelGroup'];
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
     * @description transcodeTemplateGroupId
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @description transcodeTemplateIdList
     * @var string
     */
    public $transcodeTemplateIds;

    /**
     * @description forceDelGroup
     * @var string
     */
    public $forceDelGroup;

}
