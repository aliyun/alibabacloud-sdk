<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class UpdateSecretRequest extends Model
{
    /**
     * @description SecretName
     *
     * @var string
     */
    public $secretName;

    /**
     * @description Description
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'secretName'  => 'SecretName',
        'description' => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('secretName', $this->secretName, true);
    }

    public function toMap()
    {
        $res                = [];
        $res['SecretName']  = $this->secretName;
        $res['Description'] = $this->description;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSecretRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
