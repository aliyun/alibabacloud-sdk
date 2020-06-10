<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifySignatureRequest extends Model
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
     * @description secretKeyId
     *
     * @var string
     */
    public $signatureId;

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
        'signatureId'     => 'SignatureId',
        'signatureName'   => 'SignatureName',
        'signatureKey'    => 'SignatureKey',
        'signatureSecret' => 'SignatureSecret',
    ];

    public function validate()
    {
        Model::validateRequired('signatureId', $this->signatureId, true);
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
        if (null !== $this->signatureId) {
            $res['SignatureId'] = $this->signatureId;
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
     * @return ModifySignatureRequest
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
        if (isset($map['SignatureId'])) {
            $model->signatureId = $map['SignatureId'];
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
