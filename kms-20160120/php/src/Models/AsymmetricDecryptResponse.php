<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class AsymmetricDecryptResponse extends Model
{
    /**
     * @description plaintext
     *
     * @var string
     */
    public $plaintext;

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
     * @description keyVersionId
     *
     * @var string
     */
    public $keyVersionId;
    protected $_name = [
        'plaintext'    => 'Plaintext',
        'keyId'        => 'KeyId',
        'requestId'    => 'RequestId',
        'keyVersionId' => 'KeyVersionId',
    ];

    public function validate()
    {
        Model::validateRequired('plaintext', $this->plaintext, true);
        Model::validateRequired('keyId', $this->keyId, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('keyVersionId', $this->keyVersionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->plaintext) {
            $res['Plaintext'] = $this->plaintext;
        }
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->keyVersionId) {
            $res['KeyVersionId'] = $this->keyVersionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsymmetricDecryptResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Plaintext'])) {
            $model->plaintext = $map['Plaintext'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
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
