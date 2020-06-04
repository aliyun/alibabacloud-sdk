<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadAttachedMediaRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'title' => 'Title',
        'businessType' => 'BusinessType',
        'mediaExt' => 'MediaExt',
        'fileName' => 'FileName',
        'fileSize' => 'FileSize',
        'tags' => 'Tags',
        'cateId' => 'CateId',
        'storageLocation' => 'StorageLocation',
        'description' => 'Description',
        'userData' => 'UserData',
        'cateIds' => 'CateIds',
        'appId' => 'AppId',
        'icon' => 'Icon',
    ];
    public function validate() {
        Model::validateRequired('businessType', $this->businessType, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['Title'] = $this->title;
        $res['BusinessType'] = $this->businessType;
        $res['MediaExt'] = $this->mediaExt;
        $res['FileName'] = $this->fileName;
        $res['FileSize'] = $this->fileSize;
        $res['Tags'] = $this->tags;
        $res['CateId'] = $this->cateId;
        $res['StorageLocation'] = $this->storageLocation;
        $res['Description'] = $this->description;
        $res['UserData'] = $this->userData;
        $res['CateIds'] = $this->cateIds;
        $res['AppId'] = $this->appId;
        $res['Icon'] = $this->icon;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateUploadAttachedMediaRequest
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
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['BusinessType'])){
            $model->businessType = $map['BusinessType'];
        }
        if(isset($map['MediaExt'])){
            $model->mediaExt = $map['MediaExt'];
        }
        if(isset($map['FileName'])){
            $model->fileName = $map['FileName'];
        }
        if(isset($map['FileSize'])){
            $model->fileSize = $map['FileSize'];
        }
        if(isset($map['Tags'])){
            $model->tags = $map['Tags'];
        }
        if(isset($map['CateId'])){
            $model->cateId = $map['CateId'];
        }
        if(isset($map['StorageLocation'])){
            $model->storageLocation = $map['StorageLocation'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['UserData'])){
            $model->userData = $map['UserData'];
        }
        if(isset($map['CateIds'])){
            $model->cateIds = $map['CateIds'];
        }
        if(isset($map['AppId'])){
            $model->appId = $map['AppId'];
        }
        if(isset($map['Icon'])){
            $model->icon = $map['Icon'];
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
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description mediaType
     * @var string
     */
    public $businessType;

    /**
     * @description mediaExt
     * @var string
     */
    public $mediaExt;

    /**
     * @description originalFileName
     * @var string
     */
    public $fileName;

    /**
     * @description fileSize
     * @var string
     */
    public $fileSize;

    /**
     * @description tags
     * @var string
     */
    public $tags;

    /**
     * @description cateId
     * @var integer
     */
    public $cateId;

    /**
     * @description storageLocation
     * @var string
     */
    public $storageLocation;

    /**
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description userData
     * @var string
     */
    public $userData;

    /**
     * @description cateIds
     * @var string
     */
    public $cateIds;

    /**
     * @description appId
     * @var string
     */
    public $appId;

    /**
     * @description icon
     * @var string
     */
    public $icon;

}
