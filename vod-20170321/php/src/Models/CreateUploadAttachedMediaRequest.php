<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadAttachedMediaRequest extends Model
{
    /**
     * @description appKey
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     *
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description title
     *
     * @var string
     */
    public $title;

    /**
     * @description mediaType
     *
     * @var string
     */
    public $businessType;

    /**
     * @description mediaExt
     *
     * @var string
     */
    public $mediaExt;

    /**
     * @description originalFileName
     *
     * @var string
     */
    public $fileName;

    /**
     * @description fileSize
     *
     * @var string
     */
    public $fileSize;

    /**
     * @description tags
     *
     * @var string
     */
    public $tags;

    /**
     * @description cateId
     *
     * @var int
     */
    public $cateId;

    /**
     * @description storageLocation
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description userData
     *
     * @var string
     */
    public $userData;

    /**
     * @description cateIds
     *
     * @var string
     */
    public $cateIds;

    /**
     * @description appId
     *
     * @var string
     */
    public $appId;

    /**
     * @description icon
     *
     * @var string
     */
    public $icon;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'title'                => 'Title',
        'businessType'         => 'BusinessType',
        'mediaExt'             => 'MediaExt',
        'fileName'             => 'FileName',
        'fileSize'             => 'FileSize',
        'tags'                 => 'Tags',
        'cateId'               => 'CateId',
        'storageLocation'      => 'StorageLocation',
        'description'          => 'Description',
        'userData'             => 'UserData',
        'cateIds'              => 'CateIds',
        'appId'                => 'AppId',
        'icon'                 => 'Icon',
    ];

    public function validate()
    {
        Model::validateRequired('businessType', $this->businessType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->mediaExt) {
            $res['MediaExt'] = $this->mediaExt;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->cateIds) {
            $res['CateIds'] = $this->cateIds;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUploadAttachedMediaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['MediaExt'])) {
            $model->mediaExt = $map['MediaExt'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['CateIds'])) {
            $model->cateIds = $map['CateIds'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }

        return $model;
    }
}
