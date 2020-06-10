<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyAvailableConfigResponse\addrPools;

use AlibabaCloud\Tea\Model;

class addrPool extends Model
{
    /**
     * @description id
     *
     * @var string
     */
    public $addrPoolId;

    /**
     * @description name
     *
     * @var string
     */
    public $addrPoolName;
    protected $_name = [
        'addrPoolId'   => 'AddrPoolId',
        'addrPoolName' => 'AddrPoolName',
    ];

    public function validate()
    {
        Model::validateRequired('addrPoolId', $this->addrPoolId, true);
        Model::validateRequired('addrPoolName', $this->addrPoolName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addrPoolId) {
            $res['AddrPoolId'] = $this->addrPoolId;
        }
        if (null !== $this->addrPoolName) {
            $res['AddrPoolName'] = $this->addrPoolName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addrPool
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddrPoolId'])) {
            $model->addrPoolId = $map['AddrPoolId'];
        }
        if (isset($map['AddrPoolName'])) {
            $model->addrPoolName = $map['AddrPoolName'];
        }

        return $model;
    }
}
