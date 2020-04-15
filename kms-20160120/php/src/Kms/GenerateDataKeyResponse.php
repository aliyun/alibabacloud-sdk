<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class GenerateDataKeyResponse extends Model
{
    /**
     * @description ciphertextBlob
     *
     * @var string
     */
    public $ciphertextBlob;
    /**
     * @description keyId
     *
     * @var string
     */
    public $keyId;
    /**
     * @description plaintext
     *
     * @var string
     */
    public $plaintext;
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;
    /**
     * @description keyVersionId
     *
     * @var string
     */
    public $keyVersionId;
    protected $_name = [
        'ciphertextBlob' => 'CiphertextBlob',
        'keyId'          => 'KeyId',
        'plaintext'      => 'Plaintext',
        'requestId'      => 'RequestId',
        'keyVersionId'   => 'KeyVersionId',
    ];

    public function validate()
    {
        Model::validateRequired('ciphertextBlob', $this->ciphertextBlob, true);
        Model::validateRequired('keyId', $this->keyId, true);
        Model::validateRequired('plaintext', $this->plaintext, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('keyVersionId', $this->keyVersionId, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['CiphertextBlob'] = $this->ciphertextBlob;
        $res['KeyId']          = $this->keyId;
        $res['Plaintext']      = $this->plaintext;
        $res['RequestId']      = $this->requestId;
        $res['KeyVersionId']   = $this->keyVersionId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateDataKeyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CiphertextBlob'])) {
            $model->ciphertextBlob = $map['CiphertextBlob'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['Plaintext'])) {
            $model->plaintext = $map['Plaintext'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['KeyVersionId'])) {
            $model->keyVersionId = $map['KeyVersionId'];
        }

        return $model;
    }
}
