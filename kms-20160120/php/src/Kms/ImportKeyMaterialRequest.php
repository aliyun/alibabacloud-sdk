<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class ImportKeyMaterialRequest extends Model
{
    /**
     * @description keyId
     *
     * @var string
     */
    public $keyId;

    /**
     * @description encryptedKeyMaterial
     *
     * @var string
     */
    public $encryptedKeyMaterial;

    /**
     * @description importToken
     *
     * @var string
     */
    public $importToken;

    /**
     * @description keyMaterialExpireUnix
     *
     * @var int
     */
    public $keyMaterialExpireUnix;
    protected $_name = [
        'keyId'                 => 'KeyId',
        'encryptedKeyMaterial'  => 'EncryptedKeyMaterial',
        'importToken'           => 'ImportToken',
        'keyMaterialExpireUnix' => 'KeyMaterialExpireUnix',
    ];

    public function validate()
    {
        Model::validateRequired('keyId', $this->keyId, true);
        Model::validateRequired('encryptedKeyMaterial', $this->encryptedKeyMaterial, true);
        Model::validateRequired('importToken', $this->importToken, true);
        Model::validateRequired('keyMaterialExpireUnix', $this->keyMaterialExpireUnix, true);
    }

    public function toMap()
    {
        $res                          = [];
        $res['KeyId']                 = $this->keyId;
        $res['EncryptedKeyMaterial']  = $this->encryptedKeyMaterial;
        $res['ImportToken']           = $this->importToken;
        $res['KeyMaterialExpireUnix'] = $this->keyMaterialExpireUnix;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportKeyMaterialRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['EncryptedKeyMaterial'])) {
            $model->encryptedKeyMaterial = $map['EncryptedKeyMaterial'];
        }
        if (isset($map['ImportToken'])) {
            $model->importToken = $map['ImportToken'];
        }
        if (isset($map['KeyMaterialExpireUnix'])) {
            $model->keyMaterialExpireUnix = $map['KeyMaterialExpireUnix'];
        }

        return $model;
    }
}
