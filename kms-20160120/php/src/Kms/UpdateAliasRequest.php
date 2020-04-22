<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class UpdateAliasRequest extends Model
{
    /**
     * @description keyId
     *
     * @var string
     */
    public $keyId;

    /**
     * @description aliasName
     *
     * @var string
     */
    public $aliasName;
    protected $_name = [
        'keyId'     => 'KeyId',
        'aliasName' => 'AliasName',
    ];

    public function validate()
    {
        Model::validateRequired('keyId', $this->keyId, true);
        Model::validateRequired('aliasName', $this->aliasName, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['KeyId']     = $this->keyId;
        $res['AliasName'] = $this->aliasName;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAliasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        return $model;
    }
}
