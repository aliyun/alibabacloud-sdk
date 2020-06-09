<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanResponse\faultAddrPools;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanResponse\faultAddrPools\faultAddrPool\addrs;

class faultAddrPool extends Model {
    protected $_name = [
        'addrPoolId' => 'AddrPoolId',
        'addrPoolName' => 'AddrPoolName',
        'instanceId' => 'InstanceId',
        'addrs' => 'Addrs',
    ];
    public function validate() {
        Model::validateRequired('addrPoolId', $this->addrPoolId, true);
        Model::validateRequired('addrPoolName', $this->addrPoolName, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('addrs', $this->addrs, true);
    }
    public function toMap() {
        $res = [];
        $res['AddrPoolId'] = $this->addrPoolId;
        $res['AddrPoolName'] = $this->addrPoolName;
        $res['InstanceId'] = $this->instanceId;
        $res['Addrs'] = null !== $this->addrs ? $this->addrs->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return faultAddrPool
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AddrPoolId'])){
            $model->addrPoolId = $map['AddrPoolId'];
        }
        if(isset($map['AddrPoolName'])){
            $model->addrPoolName = $map['AddrPoolName'];
        }
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        if(isset($map['Addrs'])){
            $model->addrs = addrs::fromMap($map['Addrs']);
        }
        return $model;
    }
    /**
     * @description id
     * @var string
     */
    public $addrPoolId;

    /**
     * @description name
     * @var string
     */
    public $addrPoolName;

    /**
     * @description instanceId
     * @var string
     */
    public $instanceId;

    /**
     * @description poolAddrList
     * @var addrs
     */
    public $addrs;

}
