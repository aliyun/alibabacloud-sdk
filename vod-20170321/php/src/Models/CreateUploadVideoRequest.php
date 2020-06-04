<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadVideoRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'coverURL' => 'CoverURL',
        'description' => 'Description',
        'fileName' => 'FileName',
        'fileSize' => 'FileSize',
        'IP' => 'IP',
        'title' => 'Title',
        'cateId' => 'CateId',
        'tags' => 'Tags',
        'transcodeMode' => 'TranscodeMode',
        'userData' => 'UserData',
        'templateGroupId' => 'TemplateGroupId',
        'workflowId' => 'WorkflowId',
        'storageLocation' => 'StorageLocation',
        'customMediaInfo' => 'CustomMediaInfo',
        'appId' => 'AppId',
    ];
    public function validate() {
        Model::validateRequired('fileName', $this->fileName, true);
        Model::validateRequired('title', $this->title, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['CoverURL'] = $this->coverURL;
        $res['Description'] = $this->description;
        $res['FileName'] = $this->fileName;
        $res['FileSize'] = $this->fileSize;
        $res['IP'] = $this->IP;
        $res['Title'] = $this->title;
        $res['CateId'] = $this->cateId;
        $res['Tags'] = $this->tags;
        $res['TranscodeMode'] = $this->transcodeMode;
        $res['UserData'] = $this->userData;
        $res['TemplateGroupId'] = $this->templateGroupId;
        $res['WorkflowId'] = $this->workflowId;
        $res['StorageLocation'] = $this->storageLocation;
        $res['CustomMediaInfo'] = $this->customMediaInfo;
        $res['AppId'] = $this->appId;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateUploadVideoRequest
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
        if(isset($map['CoverURL'])){
            $model->coverURL = $map['CoverURL'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['FileName'])){
            $model->fileName = $map['FileName'];
        }
        if(isset($map['FileSize'])){
            $model->fileSize = $map['FileSize'];
        }
        if(isset($map['IP'])){
            $model->IP = $map['IP'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['CateId'])){
            $model->cateId = $map['CateId'];
        }
        if(isset($map['Tags'])){
            $model->tags = $map['Tags'];
        }
        if(isset($map['TranscodeMode'])){
            $model->transcodeMode = $map['TranscodeMode'];
        }
        if(isset($map['UserData'])){
            $model->userData = $map['UserData'];
        }
        if(isset($map['TemplateGroupId'])){
            $model->templateGroupId = $map['TemplateGroupId'];
        }
        if(isset($map['WorkflowId'])){
            $model->workflowId = $map['WorkflowId'];
        }
        if(isset($map['StorageLocation'])){
            $model->storageLocation = $map['StorageLocation'];
        }
        if(isset($map['CustomMediaInfo'])){
            $model->customMediaInfo = $map['CustomMediaInfo'];
        }
        if(isset($map['AppId'])){
            $model->appId = $map['AppId'];
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
     * @description coverUrl
     * @var string
     */
    public $coverURL;

    /**
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description fileName
     * @var string
     */
    public $fileName;

    /**
     * @description fileSize
     * @var integer
     */
    public $fileSize;

    /**
     * @description createIp
     * @var string
     */
    public $IP;

    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description cateId
     * @var integer
     */
    public $cateId;

    /**
     * @description tags
     * @var string
     */
    public $tags;

    /**
     * @description transcodeMode
     * @var string
     */
    public $transcodeMode;

    /**
     * @description userData
     * @var string
     */
    public $userData;

    /**
     * @description templateGroupId
     * @var string
     */
    public $templateGroupId;

    /**
     * @description workflowId
     * @var string
     */
    public $workflowId;

    /**
     * @description storageLocation
     * @var string
     */
    public $storageLocation;

    /**
     * @description customMediaInfo
     * @var string
     */
    public $customMediaInfo;

    /**
     * @description appId
     * @var string
     */
    public $appId;

}
