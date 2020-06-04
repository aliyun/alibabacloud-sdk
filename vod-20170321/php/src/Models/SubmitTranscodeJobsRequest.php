<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitTranscodeJobsRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'videoId' => 'VideoId',
        'templateGroupId' => 'TemplateGroupId',
        'pipelineId' => 'PipelineId',
        'encryptConfig' => 'EncryptConfig',
        'overrideParams' => 'OverrideParams',
        'priority' => 'Priority',
        'userData' => 'UserData',
        'fileUrl' => 'FileUrl',
    ];
    public function validate() {
        Model::validateRequired('templateGroupId', $this->templateGroupId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['VideoId'] = $this->videoId;
        $res['TemplateGroupId'] = $this->templateGroupId;
        $res['PipelineId'] = $this->pipelineId;
        $res['EncryptConfig'] = $this->encryptConfig;
        $res['OverrideParams'] = $this->overrideParams;
        $res['Priority'] = $this->priority;
        $res['UserData'] = $this->userData;
        $res['FileUrl'] = $this->fileUrl;
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitTranscodeJobsRequest
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
        if(isset($map['VideoId'])){
            $model->videoId = $map['VideoId'];
        }
        if(isset($map['TemplateGroupId'])){
            $model->templateGroupId = $map['TemplateGroupId'];
        }
        if(isset($map['PipelineId'])){
            $model->pipelineId = $map['PipelineId'];
        }
        if(isset($map['EncryptConfig'])){
            $model->encryptConfig = $map['EncryptConfig'];
        }
        if(isset($map['OverrideParams'])){
            $model->overrideParams = $map['OverrideParams'];
        }
        if(isset($map['Priority'])){
            $model->priority = $map['Priority'];
        }
        if(isset($map['UserData'])){
            $model->userData = $map['UserData'];
        }
        if(isset($map['FileUrl'])){
            $model->fileUrl = $map['FileUrl'];
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
     * @description mediaId
     * @var string
     */
    public $videoId;

    /**
     * @description groupId
     * @var string
     */
    public $templateGroupId;

    /**
     * @description pipelineId
     * @var string
     */
    public $pipelineId;

    /**
     * @description encryptConfig
     * @var string
     */
    public $encryptConfig;

    /**
     * @description overrideParams
     * @var string
     */
    public $overrideParams;

    /**
     * @description priority
     * @var string
     */
    public $priority;

    /**
     * @description userData
     * @var string
     */
    public $userData;

    /**
     * @description fileUrl
     * @var string
     */
    public $fileUrl;

}
