<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class AsymmetricVerifyRequest extends Model
{
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
    /**
     * @description Digest
     *
     * @var string
     */
    public $digest;
    /**
     * @description Value
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'keyId'        => 'KeyId',
        'keyVersionId' => 'KeyVersionId',
        'algorithm'    => 'Algorithm',
        'digest'       => 'Digest',
        'value'        => 'Value',
    ];

    public function validate()
    {
        Model::validateRequired('keyId', $this->keyId, true);
        Model::validateRequired('keyVersionId', $this->keyVersionId, true);
        Model::validateRequired('algorithm', $this->algorithm, true);
        Model::validateRequired('digest', $this->digest, true);
        Model::validateRequired('value', $this->value, true);
    }

    public function toMap()
    {
        $res                 = [];
        $res['KeyId']        = $this->keyId;
        $res['KeyVersionId'] = $this->keyVersionId;
        $res['Algorithm']    = $this->algorithm;
        $res['Digest']       = $this->digest;
        $res['Value']        = $this->value;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsymmetricVerifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['KeyVersionId'])) {
            $model->keyVersionId = $map['KeyVersionId'];
        }
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
