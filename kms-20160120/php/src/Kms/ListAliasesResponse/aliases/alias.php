<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms\ListAliasesResponse\aliases;

use AlibabaCloud\Tea\Model;

class alias extends Model
{
    /**
     * @description keyId
     *
     * @var string
     */
    public $keyId;
    /**
     * @description AliasName
     *
     * @var string
     */
    public $aliasName;
    /**
     * @description AliasArn
     *
     * @var string
     */
    public $aliasArn;
    protected $_name = [
        'keyId'     => 'KeyId',
        'aliasName' => 'AliasName',
        'aliasArn'  => 'AliasArn',
    ];

    public function validate()
    {
        Model::validateRequired('keyId', $this->keyId, true);
        Model::validateRequired('aliasName', $this->aliasName, true);
        Model::validateRequired('aliasArn', $this->aliasArn, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['KeyId']     = $this->keyId;
        $res['AliasName'] = $this->aliasName;
        $res['AliasArn']  = $this->aliasArn;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alias
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
        if (isset($map['AliasArn'])) {
            $model->aliasArn = $map['AliasArn'];
        }

        return $model;
    }
}
