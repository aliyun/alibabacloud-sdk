<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SubscribeBillToOSSRequest extends Model
{
    /**
     * @description subscribeBucket
     *
     * @var string
     */
    public $subscribeBucket;

    /**
     * @description subscribeType
     *
     * @var string
     */
    public $subscribeType;

    /**
     * @description multAccountRelSubscribe
     *
     * @var string
     */
    public $multAccountRelSubscribe;

    /**
     * @description bucketOwnerId
     *
     * @var int
     */
    public $bucketOwnerId;
    protected $_name = [
        'subscribeBucket'         => 'SubscribeBucket',
        'subscribeType'           => 'SubscribeType',
        'multAccountRelSubscribe' => 'MultAccountRelSubscribe',
        'bucketOwnerId'           => 'BucketOwnerId',
    ];

    public function validate()
    {
        Model::validateRequired('subscribeBucket', $this->subscribeBucket, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subscribeBucket) {
            $res['SubscribeBucket'] = $this->subscribeBucket;
        }
        if (null !== $this->subscribeType) {
            $res['SubscribeType'] = $this->subscribeType;
        }
        if (null !== $this->multAccountRelSubscribe) {
            $res['MultAccountRelSubscribe'] = $this->multAccountRelSubscribe;
        }
        if (null !== $this->bucketOwnerId) {
            $res['BucketOwnerId'] = $this->bucketOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubscribeBillToOSSRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubscribeBucket'])) {
            $model->subscribeBucket = $map['SubscribeBucket'];
        }
        if (isset($map['SubscribeType'])) {
            $model->subscribeType = $map['SubscribeType'];
        }
        if (isset($map['MultAccountRelSubscribe'])) {
            $model->multAccountRelSubscribe = $map['MultAccountRelSubscribe'];
        }
        if (isset($map['BucketOwnerId'])) {
            $model->bucketOwnerId = $map['BucketOwnerId'];
        }

        return $model;
    }
}
