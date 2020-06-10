<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\OpenPlatform\V20191219\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeFileUploadResponse extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'bucket' => 'Bucket',
        'encodedPolicy' => 'EncodedPolicy',
        'endpoint' => 'Endpoint',
        'objectKey' => 'ObjectKey',
        'requestId' => 'RequestId',
        'signature' => 'Signature',
        'useAccelerate' => 'UseAccelerate',
    ];
    public function validate() {
        Model::validateRequired('accessKeyId', $this->accessKeyId, true);
        Model::validateRequired('bucket', $this->bucket, true);
        Model::validateRequired('encodedPolicy', $this->encodedPolicy, true);
        Model::validateRequired('endpoint', $this->endpoint, true);
        Model::validateRequired('objectKey', $this->objectKey, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('signature', $this->signature, true);
        Model::validateRequired('useAccelerate', $this->useAccelerate, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->encodedPolicy) {
            $res['EncodedPolicy'] = $this->encodedPolicy;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->useAccelerate) {
            $res['UseAccelerate'] = $this->useAccelerate;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AuthorizeFileUploadResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['Bucket'])){
            $model->bucket = $map['Bucket'];
        }
        if(isset($map['EncodedPolicy'])){
            $model->encodedPolicy = $map['EncodedPolicy'];
        }
        if(isset($map['Endpoint'])){
            $model->endpoint = $map['Endpoint'];
        }
        if(isset($map['ObjectKey'])){
            $model->objectKey = $map['ObjectKey'];
        }
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Signature'])){
            $model->signature = $map['Signature'];
        }
        if(isset($map['UseAccelerate'])){
            $model->useAccelerate = $map['UseAccelerate'];
        }
        return $model;
    }
    /**
     * @description data.accessKeyId
     * @var string
     */
    public $accessKeyId;

    /**
     * @description data.bucket
     * @var string
     */
    public $bucket;

    /**
     * @description data.encodedPolicy
     * @var string
     */
    public $encodedPolicy;

    /**
     * @description data.endpoint
     * @var string
     */
    public $endpoint;

    /**
     * @description data.objectKey
     * @var string
     */
    public $objectKey;

    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.signature
     * @var string
     */
    public $signature;

    /**
     * @description data.useAccelerate
     * @var bool
     */
    public $useAccelerate;

}
