<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UploadMediaByURLRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'uploadURLs' => 'UploadURLs',
        'templateGroupId' => 'TemplateGroupId',
        'storageLocation' => 'StorageLocation',
        'uploadMetadatas' => 'UploadMetadatas',
        'priority' => 'Priority',
        'messageCallback' => 'MessageCallback',
        'userData' => 'UserData',
        'appId' => 'AppId',
        'workflowId' => 'WorkflowId',
    ];
    public function validate() {
        Model::validateRequired('uploadURLs', $this->uploadURLs, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['UploadURLs'] = $this->uploadURLs;
        $res['TemplateGroupId'] = $this->templateGroupId;
        $res['StorageLocation'] = $this->storageLocation;
        $res['UploadMetadatas'] = $this->uploadMetadatas;
        $res['Priority'] = $this->priority;
        $res['MessageCallback'] = $this->messageCallback;
        $res['UserData'] = $this->userData;
        $res['AppId'] = $this->appId;
        $res['WorkflowId'] = $this->workflowId;
        return $res;
    }
    /**
     * @param array $map
     * @return UploadMediaByURLRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['UploadURLs'])){
            $model->uploadURLs = $map['UploadURLs'];
        }
        if(isset($map['TemplateGroupId'])){
            $model->templateGroupId = $map['TemplateGroupId'];
        }
        if(isset($map['StorageLocation'])){
            $model->storageLocation = $map['StorageLocation'];
        }
        if(isset($map['UploadMetadatas'])){
            $model->uploadMetadatas = $map['UploadMetadatas'];
        }
        if(isset($map['Priority'])){
            $model->priority = $map['Priority'];
        }
        if(isset($map['MessageCallback'])){
            $model->messageCallback = $map['MessageCallback'];
        }
        if(isset($map['UserData'])){
            $model->userData = $map['UserData'];
        }
        if(isset($map['AppId'])){
            $model->appId = $map['AppId'];
        }
        if(isset($map['WorkflowId'])){
            $model->workflowId = $map['WorkflowId'];
        }
        return $model;
    }
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
     * @description uploadURLs
     * @var string
     */
    public $uploadURLs;

    /**
     * @description templateGroupId
     * @var string
     */
    public $templateGroupId;

    /**
     * @description storageLocation
     * @var string
     */
    public $storageLocation;

    /**
     * @description uploadMetadatas
     * @var string
     */
    public $uploadMetadatas;

    /**
     * @description priority
     * @var string
     */
    public $priority;

    /**
     * @description messageCallback
     * @var string
     */
    public $messageCallback;

    /**
     * @description userData
     * @var string
     */
    public $userData;

    /**
     * @description appId
     * @var string
     */
    public $appId;

    /**
     * @description workflowId
     * @var string
     */
    public $workflowId;

}
