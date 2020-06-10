<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigResponse\instances;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigResponse\instances\instance\addrPools;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description instanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description addrPools
     *
     * @var addrPools
     */
    public $addrPools;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'addrPools'    => 'AddrPools',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('addrPools', $this->addrPools, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->addrPools) {
            $res['AddrPools'] = null !== $this->addrPools ? $this->addrPools->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['AddrPools'])) {
            $model->addrPools = addrPools::fromMap($map['AddrPools']);
        }

        return $model;
    }
}
