<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class DeleteAccessKeyRequest extends Model
{
    /**
     * @description UserName
     *
     * @var string
     */
    public $userName;

    /**
     * @description UserAccessKeyId
     *
     * @var string
     */
    public $userAccessKeyId;
    protected $_name = [
        'userName'        => 'UserName',
        'userAccessKeyId' => 'UserAccessKeyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userAccessKeyId) {
            $res['UserAccessKeyId'] = $this->userAccessKeyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAccessKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserAccessKeyId'])) {
            $model->userAccessKeyId = $map['UserAccessKeyId'];
        }

        return $model;
    }
}
