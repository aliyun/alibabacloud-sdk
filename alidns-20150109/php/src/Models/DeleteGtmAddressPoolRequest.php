<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DeleteGtmAddressPoolRequest extends Model
{
    /**
     * @description lang
     *
     * @var string
     */
    public $lang;

    /**
     * @description addrPoolId
     *
     * @var string
     */
    public $addrPoolId;
    protected $_name = [
        'lang'       => 'Lang',
        'addrPoolId' => 'AddrPoolId',
    ];

    public function validate()
    {
        Model::validateRequired('addrPoolId', $this->addrPoolId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->addrPoolId) {
            $res['AddrPoolId'] = $this->addrPoolId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteGtmAddressPoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['AddrPoolId'])) {
            $model->addrPoolId = $map['AddrPoolId'];
        }

        return $model;
    }
}
