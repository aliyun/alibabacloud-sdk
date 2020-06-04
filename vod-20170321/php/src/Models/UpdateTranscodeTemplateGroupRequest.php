<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateTranscodeTemplateGroupRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'name' => 'Name',
        'transcodeTemplateList' => 'TranscodeTemplateList',
        'locked' => 'Locked',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
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
        $res['Name'] = $this->name;
        $res['TranscodeTemplateList'] = $this->transcodeTemplateList;
        $res['Locked'] = $this->locked;
        $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateTranscodeTemplateGroupRequest
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
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['TranscodeTemplateList'])){
            $model->transcodeTemplateList = $map['TranscodeTemplateList'];
        }
        if(isset($map['Locked'])){
            $model->locked = $map['Locked'];
        }
        if(isset($map['TranscodeTemplateGroupId'])){
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
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
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description transcodeTemplateList
     * @var string
     */
    public $transcodeTemplateList;

    /**
     * @description locked
     * @var string
     */
    public $locked;

    /**
     * @description transcodeTemplateGroupId
     * @var string
     */
    public $transcodeTemplateGroupId;

}
