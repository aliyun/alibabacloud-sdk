<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigResponse\instances\instance\addrPools;

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
    public $name;
    protected $_name = [
        'addrPoolId' => 'AddrPoolId',
        'name'       => 'Name',
    ];

    public function validate()
    {
        Model::validateRequired('addrPoolId', $this->addrPoolId, true);
        Model::validateRequired('name', $this->name, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addrPoolId) {
            $res['AddrPoolId'] = $this->addrPoolId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
