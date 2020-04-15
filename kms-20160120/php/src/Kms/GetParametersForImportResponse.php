<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class GetParametersForImportResponse extends Model
{
    /**
     * @description keyId
     *
     * @var string
     */
    public $keyId;
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;
    /**
     * @description importToken
     *
     * @var string
     */
    public $importToken;
    /**
     * @description publicKey
     *
     * @var string
     */
    public $publicKey;
    /**
     * @description tokenExpireTime
     *
     * @var string
     */
    public $tokenExpireTime;
    protected $_name = [
        'keyId'           => 'KeyId',
        'requestId'       => 'RequestId',
        'importToken'     => 'ImportToken',
        'publicKey'       => 'PublicKey',
        'tokenExpireTime' => 'TokenExpireTime',
    ];

    public function validate()
    {
        Model::validateRequired('keyId', $this->keyId, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('importToken', $this->importToken, true);
        Model::validateRequired('publicKey', $this->publicKey, true);
        Model::validateRequired('tokenExpireTime', $this->tokenExpireTime, true);
    }

    public function toMap()
    {
        $res                    = [];
        $res['KeyId']           = $this->keyId;
        $res['RequestId']       = $this->requestId;
        $res['ImportToken']     = $this->importToken;
        $res['PublicKey']       = $this->publicKey;
        $res['TokenExpireTime'] = $this->tokenExpireTime;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetParametersForImportResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ImportToken'])) {
            $model->importToken = $map['ImportToken'];
        }
        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }
        if (isset($map['TokenExpireTime'])) {
            $model->tokenExpireTime = $map['TokenExpireTime'];
        }

        return $model;
    }
}
