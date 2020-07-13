<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetHDMAliyunResourceSyncResultRequest extends Model
{
    /**
     * @description Uid
     *
     * @var string
     */
    public $uid;

    /**
     * @description accessKey
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description signature
     *
     * @var string
     */
    public $signature;

    /**
     * @description timestamp
     *
     * @var string
     */
    public $timestamp;

    /**
     * @description __context
     *
     * @var string
     */
    public $context;

    /**
     * @description __skipAuth
     *
     * @var string
     */
    public $skipAuth;

    /**
     * @description UserId
     *
     * @var string
     */
    public $userId;

    /**
     * @description TaskId
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'uid'       => 'Uid',
        'accessKey' => 'accessKey',
        'signature' => 'signature',
        'timestamp' => 'timestamp',
        'context'   => '__context',
        'skipAuth'  => 'skipAuth',
        'userId'    => 'UserId',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->accessKey) {
            $res['accessKey'] = $this->accessKey;
        }
        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
        }
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }
        if (null !== $this->context) {
            $res['__context'] = $this->context;
        }
        if (null !== $this->skipAuth) {
            $res['skipAuth'] = $this->skipAuth;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHDMAliyunResourceSyncResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['accessKey'])) {
            $model->accessKey = $map['accessKey'];
        }
        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }
        if (isset($map['__context'])) {
            $model->context = $map['__context'];
        }
        if (isset($map['skipAuth'])) {
            $model->skipAuth = $map['skipAuth'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
