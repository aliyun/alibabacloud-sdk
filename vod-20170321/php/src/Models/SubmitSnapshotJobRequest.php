<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitSnapshotJobRequest extends Model
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
     * @description mediaId
     *
     * @var string
     */
    public $videoId;

    /**
     * @description time
     *
     * @var int
     */
    public $specifiedOffsetTime;

    /**
     * @description width
     *
     * @var string
     */
    public $width;

    /**
     * @description height
     *
     * @var string
     */
    public $height;

    /**
     * @description num
     *
     * @var int
     */
    public $count;

    /**
     * @description interval
     *
     * @var int
     */
    public $interval;

    /**
     * @description spriteConfig
     *
     * @var string
     */
    public $spriteSnapshotConfig;

    /**
     * @description snapshotTemplateId
     *
     * @var string
     */
    public $snapshotTemplateId;

    /**
     * @description userData
     *
     * @var string
     */
    public $userData;

    /**
     * @description fileUrl
     *
     * @var string
     */
    public $fileUrl;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'videoId'              => 'VideoId',
        'specifiedOffsetTime'  => 'SpecifiedOffsetTime',
        'width'                => 'Width',
        'height'               => 'Height',
        'count'                => 'Count',
        'interval'             => 'Interval',
        'spriteSnapshotConfig' => 'SpriteSnapshotConfig',
        'snapshotTemplateId'   => 'SnapshotTemplateId',
        'userData'             => 'UserData',
        'fileUrl'              => 'FileUrl',
    ];

    public function validate()
    {
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
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->specifiedOffsetTime) {
            $res['SpecifiedOffsetTime'] = $this->specifiedOffsetTime;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->spriteSnapshotConfig) {
            $res['SpriteSnapshotConfig'] = $this->spriteSnapshotConfig;
        }
        if (null !== $this->snapshotTemplateId) {
            $res['SnapshotTemplateId'] = $this->snapshotTemplateId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSnapshotJobRequest
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
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['SpecifiedOffsetTime'])) {
            $model->specifiedOffsetTime = $map['SpecifiedOffsetTime'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['SpriteSnapshotConfig'])) {
            $model->spriteSnapshotConfig = $map['SpriteSnapshotConfig'];
        }
        if (isset($map['SnapshotTemplateId'])) {
            $model->snapshotTemplateId = $map['SnapshotTemplateId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        return $model;
    }
}
