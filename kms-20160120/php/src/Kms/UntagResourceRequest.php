<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class UntagResourceRequest extends Model
{
    /**
     * @description keyId
     *
     * @var string
     */
    public $keyId;

    /**
     * @description tagKeys
     *
     * @var string
     */
    public $tagKeys;

    /**
     * @description SecretName
     *
     * @var string
     */
    public $secretName;
    protected $_name = [
        'keyId'      => 'KeyId',
        'tagKeys'    => 'TagKeys',
        'secretName' => 'SecretName',
    ];

    public function validate()
    {
        Model::validateRequired('tagKeys', $this->tagKeys, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['KeyId']      = $this->keyId;
        $res['TagKeys']    = $this->tagKeys;
        $res['SecretName'] = $this->secretName;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UntagResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['TagKeys'])) {
            $model->tagKeys = $map['TagKeys'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        return $model;
    }
}
