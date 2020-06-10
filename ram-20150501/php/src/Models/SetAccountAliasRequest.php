<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class SetAccountAliasRequest extends Model
{
    /**
     * @description AccountAlias
     *
     * @var string
     */
    public $accountAlias;
    protected $_name = [
        'accountAlias' => 'AccountAlias',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountAlias) {
            $res['AccountAlias'] = $this->accountAlias;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetAccountAliasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountAlias'])) {
            $model->accountAlias = $map['AccountAlias'];
        }

        return $model;
    }
}
