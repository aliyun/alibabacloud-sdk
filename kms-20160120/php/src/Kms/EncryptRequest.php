<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class EncryptRequest extends Model
{
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
     * @description encryptionContext
     *
     * @var array
     */
    public $encryptionContext;
    protected $_name = [
        'keyId'             => 'KeyId',
        'plaintext'         => 'Plaintext',
        'encryptionContext' => 'EncryptionContext',
    ];

    public function validate()
    {
        Model::validateRequired('keyId', $this->keyId, true);
        Model::validateRequired('plaintext', $this->plaintext, true);
    }

    public function toMap()
    {
        $res                      = [];
        $res['KeyId']             = $this->keyId;
        $res['Plaintext']         = $this->plaintext;
        $res['EncryptionContext'] = $this->encryptionContext;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EncryptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['Plaintext'])) {
            $model->plaintext = $map['Plaintext'];
        }
        if (isset($map['EncryptionContext'])) {
            $model->encryptionContext = $map['EncryptionContext'];
        }

        return $model;
    }
}
