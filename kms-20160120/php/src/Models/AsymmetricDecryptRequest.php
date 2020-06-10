<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class AsymmetricDecryptRequest extends Model
{
    /**
     * @description CiphertextBlob
     *
     * @var string
     */
    public $ciphertextBlob;

    /**
     * @description KeyId
     *
     * @var string
     */
    public $keyId;

    /**
     * @description KeyVersionId
     *
     * @var string
     */
    public $keyVersionId;

    /**
     * @description Algorithm
     *
     * @var string
     */
    public $algorithm;
    protected $_name = [
        'ciphertextBlob' => 'CiphertextBlob',
        'keyId'          => 'KeyId',
        'keyVersionId'   => 'KeyVersionId',
        'algorithm'      => 'Algorithm',
    ];

    public function validate()
    {
        Model::validateRequired('ciphertextBlob', $this->ciphertextBlob, true);
        Model::validateRequired('keyId', $this->keyId, true);
        Model::validateRequired('keyVersionId', $this->keyVersionId, true);
        Model::validateRequired('algorithm', $this->algorithm, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ciphertextBlob) {
            $res['CiphertextBlob'] = $this->ciphertextBlob;
        }
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->keyVersionId) {
            $res['KeyVersionId'] = $this->keyVersionId;
        }
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsymmetricDecryptRequest
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
        if (isset($map['KeyVersionId'])) {
            $model->keyVersionId = $map['KeyVersionId'];
        }
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }

        return $model;
    }
}
