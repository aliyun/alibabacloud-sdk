<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class UpdateKeyDescriptionRequest extends Model
{
    /**
     * @description keyId
     *
     * @var string
     */
    public $keyId;

    /**
     * @description desc
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'keyId'       => 'KeyId',
        'description' => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('keyId', $this->keyId, true);
        Model::validateRequired('description', $this->description, true);
    }

    public function toMap()
    {
        $res                = [];
        $res['KeyId']       = $this->keyId;
        $res['Description'] = $this->description;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateKeyDescriptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
