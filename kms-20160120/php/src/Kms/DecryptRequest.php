<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class DecryptRequest extends Model
{
    /**
     * @description ciphertextBlob
     *
     * @var string
     */
    public $ciphertextBlob;
    /**
     * @description encryptionContext
     *
     * @var array
     */
    public $encryptionContext;
    protected $_name = [
        'ciphertextBlob'    => 'CiphertextBlob',
        'encryptionContext' => 'EncryptionContext',
    ];

    public function validate()
    {
        Model::validateRequired('ciphertextBlob', $this->ciphertextBlob, true);
    }

    public function toMap()
    {
        $res                      = [];
        $res['CiphertextBlob']    = $this->ciphertextBlob;
        $res['EncryptionContext'] = $this->encryptionContext;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DecryptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CiphertextBlob'])) {
            $model->ciphertextBlob = $map['CiphertextBlob'];
        }
        if (isset($map['EncryptionContext'])) {
            $model->encryptionContext = $map['EncryptionContext'];
        }

        return $model;
    }
}
