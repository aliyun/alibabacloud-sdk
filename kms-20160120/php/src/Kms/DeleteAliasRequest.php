<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class DeleteAliasRequest extends Model
{
    /**
     * @description aliasName
     *
     * @var string
     */
    public $aliasName;
    protected $_name = [
        'aliasName' => 'AliasName',
    ];

    public function validate()
    {
        Model::validateRequired('aliasName', $this->aliasName, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['AliasName'] = $this->aliasName;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAliasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        return $model;
    }
}
