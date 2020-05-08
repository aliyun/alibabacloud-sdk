<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListKeysResponse\keys;

use AlibabaCloud\Tea\Model;

class key extends Model
{
    /**
     * @description keyId
     *
     * @var string
     */
    public $keyId;

    /**
     * @description KeyArn
     *
     * @var string
     */
    public $keyArn;
    protected $_name = [
        'keyId'  => 'KeyId',
        'keyArn' => 'KeyArn',
    ];

    public function validate()
    {
        Model::validateRequired('keyId', $this->keyId, true);
        Model::validateRequired('keyArn', $this->keyArn, true);
    }

    public function toMap()
    {
        $res           = [];
        $res['KeyId']  = $this->keyId;
        $res['KeyArn'] = $this->keyArn;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return key
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['KeyArn'])) {
            $model->keyArn = $map['KeyArn'];
        }

        return $model;
    }
}
