<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class GenerateDataKeyWithoutPlaintextRequest extends Model
{
    /**
     * @description keyId
     *
     * @var string
     */
    public $keyId;

    /**
     * @description keySpec
     *
     * @var string
     */
    public $keySpec;

    /**
     * @description bytesNumber
     *
     * @var int
     */
    public $numberOfBytes;

    /**
     * @description encryptionContext
     *
     * @var array
     */
    public $encryptionContext;
    protected $_name = [
        'keyId'             => 'KeyId',
        'keySpec'           => 'KeySpec',
        'numberOfBytes'     => 'NumberOfBytes',
        'encryptionContext' => 'EncryptionContext',
    ];

    public function validate()
    {
        Model::validateRequired('keyId', $this->keyId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->keySpec) {
            $res['KeySpec'] = $this->keySpec;
        }
        if (null !== $this->numberOfBytes) {
            $res['NumberOfBytes'] = $this->numberOfBytes;
        }
        if (null !== $this->encryptionContext) {
            $res['EncryptionContext'] = $this->encryptionContext;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateDataKeyWithoutPlaintextRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['KeySpec'])) {
            $model->keySpec = $map['KeySpec'];
        }
        if (isset($map['NumberOfBytes'])) {
            $model->numberOfBytes = $map['NumberOfBytes'];
        }
        if (isset($map['EncryptionContext'])) {
            $model->encryptionContext = $map['EncryptionContext'];
        }

        return $model;
    }
}
