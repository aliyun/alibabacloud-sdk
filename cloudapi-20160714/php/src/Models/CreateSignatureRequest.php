<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateSignatureRequest extends Model
{
    /**
     * @description securityToken
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description accessKeyId
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description secretKeyName
     *
     * @var string
     */
    public $signatureName;

    /**
     * @description secretKey
     *
     * @var string
     */
    public $signatureKey;

    /**
     * @description secretValue
     *
     * @var string
     */
    public $signatureSecret;
    protected $_name = [
        'securityToken'   => 'SecurityToken',
        'accessKeyId'     => 'AccessKeyId',
        'signatureName'   => 'SignatureName',
        'signatureKey'    => 'SignatureKey',
        'signatureSecret' => 'SignatureSecret',
    ];

    public function validate()
    {
        Model::validateRequired('signatureName', $this->signatureName, true);
        Model::validateRequired('signatureKey', $this->signatureKey, true);
        Model::validateRequired('signatureSecret', $this->signatureSecret, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->signatureName) {
            $res['SignatureName'] = $this->signatureName;
        }
        if (null !== $this->signatureKey) {
            $res['SignatureKey'] = $this->signatureKey;
        }
        if (null !== $this->signatureSecret) {
            $res['SignatureSecret'] = $this->signatureSecret;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSignatureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['SignatureName'])) {
            $model->signatureName = $map['SignatureName'];
        }
        if (isset($map['SignatureKey'])) {
            $model->signatureKey = $map['SignatureKey'];
        }
        if (isset($map['SignatureSecret'])) {
            $model->signatureSecret = $map['SignatureSecret'];
        }

        return $model;
    }
}
