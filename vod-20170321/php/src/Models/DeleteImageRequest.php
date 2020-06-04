<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteImageRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'deleteImageType' => 'DeleteImageType',
        'imageURLs' => 'ImageURLs',
        'imageIds' => 'ImageIds',
        'videoId' => 'VideoId',
        'imageType' => 'ImageType',
    ];
    public function validate() {
        Model::validateRequired('deleteImageType', $this->deleteImageType, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DeleteImageType'] = $this->deleteImageType;
        $res['ImageURLs'] = $this->imageURLs;
        $res['ImageIds'] = $this->imageIds;
        $res['VideoId'] = $this->videoId;
        $res['ImageType'] = $this->imageType;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteImageRequest
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
        if(isset($map['DeleteImageType'])){
            $model->deleteImageType = $map['DeleteImageType'];
        }
        if(isset($map['ImageURLs'])){
            $model->imageURLs = $map['ImageURLs'];
        }
        if(isset($map['ImageIds'])){
            $model->imageIds = $map['ImageIds'];
        }
        if(isset($map['VideoId'])){
            $model->videoId = $map['VideoId'];
        }
        if(isset($map['ImageType'])){
            $model->imageType = $map['ImageType'];
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
     * @description deleteImageType
     * @var string
     */
    public $deleteImageType;

    /**
     * @description imageURLs
     * @var string
     */
    public $imageURLs;

    /**
     * @description imageIds
     * @var string
     */
    public $imageIds;

    /**
     * @description videoId
     * @var string
     */
    public $videoId;

    /**
     * @description imageType
     * @var string
     */
    public $imageType;

}
