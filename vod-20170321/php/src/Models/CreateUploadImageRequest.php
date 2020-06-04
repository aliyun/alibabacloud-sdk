<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadImageRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'title' => 'Title',
        'imageType' => 'ImageType',
        'imageExt' => 'ImageExt',
        'originalFileName' => 'OriginalFileName',
        'tags' => 'Tags',
        'storageLocation' => 'StorageLocation',
        'cateId' => 'CateId',
        'userData' => 'UserData',
        'description' => 'Description',
        'appId' => 'AppId',
    ];
    public function validate() {
        Model::validateRequired('imageType', $this->imageType, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['Title'] = $this->title;
        $res['ImageType'] = $this->imageType;
        $res['ImageExt'] = $this->imageExt;
        $res['OriginalFileName'] = $this->originalFileName;
        $res['Tags'] = $this->tags;
        $res['StorageLocation'] = $this->storageLocation;
        $res['CateId'] = $this->cateId;
        $res['UserData'] = $this->userData;
        $res['Description'] = $this->description;
        $res['AppId'] = $this->appId;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateUploadImageRequest
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
        if(isset($map['ImageType'])){
            $model->imageType = $map['ImageType'];
        }
        if(isset($map['ImageExt'])){
            $model->imageExt = $map['ImageExt'];
        }
        if(isset($map['OriginalFileName'])){
            $model->originalFileName = $map['OriginalFileName'];
        }
        if(isset($map['Tags'])){
            $model->tags = $map['Tags'];
        }
        if(isset($map['StorageLocation'])){
            $model->storageLocation = $map['StorageLocation'];
        }
        if(isset($map['CateId'])){
            $model->cateId = $map['CateId'];
        }
        if(isset($map['UserData'])){
            $model->userData = $map['UserData'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['AppId'])){
            $model->appId = $map['AppId'];
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
     * @description imageType
     * @var string
     */
    public $imageType;

    /**
     * @description imageExt
     * @var string
     */
    public $imageExt;

    /**
     * @description originalFileName
     * @var string
     */
    public $originalFileName;

    /**
     * @description tags
     * @var string
     */
    public $tags;

    /**
     * @description storageLocation
     * @var string
     */
    public $storageLocation;

    /**
     * @description cateId
     * @var integer
     */
    public $cateId;

    /**
     * @description userData
     * @var string
     */
    public $userData;

    /**
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description appId
     * @var string
     */
    public $appId;

}
