<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitSnapshotJobRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'videoId' => 'VideoId',
        'specifiedOffsetTime' => 'SpecifiedOffsetTime',
        'width' => 'Width',
        'height' => 'Height',
        'count' => 'Count',
        'interval' => 'Interval',
        'spriteSnapshotConfig' => 'SpriteSnapshotConfig',
        'snapshotTemplateId' => 'SnapshotTemplateId',
        'userData' => 'UserData',
        'fileUrl' => 'FileUrl',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['VideoId'] = $this->videoId;
        $res['SpecifiedOffsetTime'] = $this->specifiedOffsetTime;
        $res['Width'] = $this->width;
        $res['Height'] = $this->height;
        $res['Count'] = $this->count;
        $res['Interval'] = $this->interval;
        $res['SpriteSnapshotConfig'] = $this->spriteSnapshotConfig;
        $res['SnapshotTemplateId'] = $this->snapshotTemplateId;
        $res['UserData'] = $this->userData;
        $res['FileUrl'] = $this->fileUrl;
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitSnapshotJobRequest
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
        if(isset($map['SpecifiedOffsetTime'])){
            $model->specifiedOffsetTime = $map['SpecifiedOffsetTime'];
        }
        if(isset($map['Width'])){
            $model->width = $map['Width'];
        }
        if(isset($map['Height'])){
            $model->height = $map['Height'];
        }
        if(isset($map['Count'])){
            $model->count = $map['Count'];
        }
        if(isset($map['Interval'])){
            $model->interval = $map['Interval'];
        }
        if(isset($map['SpriteSnapshotConfig'])){
            $model->spriteSnapshotConfig = $map['SpriteSnapshotConfig'];
        }
        if(isset($map['SnapshotTemplateId'])){
            $model->snapshotTemplateId = $map['SnapshotTemplateId'];
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
     * @description time
     * @var integer
     */
    public $specifiedOffsetTime;

    /**
     * @description width
     * @var string
     */
    public $width;

    /**
     * @description height
     * @var string
     */
    public $height;

    /**
     * @description num
     * @var integer
     */
    public $count;

    /**
     * @description interval
     * @var integer
     */
    public $interval;

    /**
     * @description spriteConfig
     * @var string
     */
    public $spriteSnapshotConfig;

    /**
     * @description snapshotTemplateId
     * @var string
     */
    public $snapshotTemplateId;

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
