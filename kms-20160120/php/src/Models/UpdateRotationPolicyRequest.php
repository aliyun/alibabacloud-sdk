<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class UpdateRotationPolicyRequest extends Model
{
    /**
     * @description KeyId
     *
     * @var string
     */
    public $keyId;

    /**
     * @description EnableAutomaticRotation
     *
     * @var bool
     */
    public $enableAutomaticRotation;

    /**
     * @description RotationInterval
     *
     * @var string
     */
    public $rotationInterval;
    protected $_name = [
        'keyId'                   => 'KeyId',
        'enableAutomaticRotation' => 'EnableAutomaticRotation',
        'rotationInterval'        => 'RotationInterval',
    ];

    public function validate()
    {
        Model::validateRequired('keyId', $this->keyId, true);
        Model::validateRequired('enableAutomaticRotation', $this->enableAutomaticRotation, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->enableAutomaticRotation) {
            $res['EnableAutomaticRotation'] = $this->enableAutomaticRotation;
        }
        if (null !== $this->rotationInterval) {
            $res['RotationInterval'] = $this->rotationInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRotationPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['EnableAutomaticRotation'])) {
            $model->enableAutomaticRotation = $map['EnableAutomaticRotation'];
        }
        if (isset($map['RotationInterval'])) {
            $model->rotationInterval = $map['RotationInterval'];
        }

        return $model;
    }
}
