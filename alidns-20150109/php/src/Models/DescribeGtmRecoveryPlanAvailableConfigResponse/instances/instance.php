<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigResponse\instances;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigResponse\instances\instance\addrPools;

class instance extends Model {
    protected $_name = [
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'addrPools' => 'AddrPools',
    ];
    public function validate() {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('addrPools', $this->addrPools, true);
    }
    public function toMap() {
        $res = [];
        $res['InstanceId'] = $this->instanceId;
        $res['InstanceName'] = $this->instanceName;
        $res['AddrPools'] = null !== $this->addrPools ? $this->addrPools->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return instance
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        if(isset($map['InstanceName'])){
            $model->instanceName = $map['InstanceName'];
        }
        if(isset($map['AddrPools'])){
            $model->addrPools = addrPools::fromMap($map['AddrPools']);
        }
        return $model;
    }
    /**
     * @description instanceId
     * @var string
     */
    public $instanceId;

    /**
     * @description instanceName
     * @var string
     */
    public $instanceName;

    /**
     * @description addrPools
     * @var addrPools
     */
    public $addrPools;

}
