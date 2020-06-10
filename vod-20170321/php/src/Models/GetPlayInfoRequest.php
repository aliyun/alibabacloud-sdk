<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetPlayInfoRequest extends Model
{
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
     * @description videoId
     *
     * @var string
     */
    public $videoId;

    /**
     * @description formats
     *
     * @var string
     */
    public $formats;

    /**
     * @description authTimeout
     *
     * @var int
     */
    public $authTimeout;

    /**
     * @description outputType
     *
     * @var string
     */
    public $outputType;

    /**
     * @description streamType
     *
     * @var string
     */
    public $streamType;

    /**
     * @description reAuthInfo
     *
     * @var string
     */
    public $reAuthInfo;

    /**
     * @description definition
     *
     * @var string
     */
    public $definition;

    /**
     * @description resultType
     *
     * @var string
     */
    public $resultType;

    /**
     * @description playConfig
     *
     * @var string
     */
    public $playConfig;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'videoId'              => 'VideoId',
        'formats'              => 'Formats',
        'authTimeout'          => 'AuthTimeout',
        'outputType'           => 'OutputType',
        'streamType'           => 'StreamType',
        'reAuthInfo'           => 'ReAuthInfo',
        'definition'           => 'Definition',
        'resultType'           => 'ResultType',
        'playConfig'           => 'PlayConfig',
    ];

    public function validate()
    {
        Model::validateRequired('videoId', $this->videoId, true);
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->formats) {
            $res['Formats'] = $this->formats;
        }
        if (null !== $this->authTimeout) {
            $res['AuthTimeout'] = $this->authTimeout;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->reAuthInfo) {
            $res['ReAuthInfo'] = $this->reAuthInfo;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }
        if (null !== $this->playConfig) {
            $res['PlayConfig'] = $this->playConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPlayInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Formats'])) {
            $model->formats = $map['Formats'];
        }
        if (isset($map['AuthTimeout'])) {
            $model->authTimeout = $map['AuthTimeout'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['ReAuthInfo'])) {
            $model->reAuthInfo = $map['ReAuthInfo'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }
        if (isset($map['PlayConfig'])) {
            $model->playConfig = $map['PlayConfig'];
        }

        return $model;
    }
}
