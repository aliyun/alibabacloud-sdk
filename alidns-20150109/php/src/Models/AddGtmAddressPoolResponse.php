<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class AddGtmAddressPoolResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'addrPoolId' => 'AddrPoolId',
        'monitorConfigId' => 'MonitorConfigId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('addrPoolId', $this->addrPoolId, true);
        Model::validateRequired('monitorConfigId', $this->monitorConfigId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AddrPoolId'] = $this->addrPoolId;
        $res['MonitorConfigId'] = $this->monitorConfigId;
        return $res;
    }
    /**
     * @param array $map
     * @return AddGtmAddressPoolResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AddrPoolId'])){
            $model->addrPoolId = $map['AddrPoolId'];
        }
        if(isset($map['MonitorConfigId'])){
            $model->monitorConfigId = $map['MonitorConfigId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module.id
     * @var string
     */
    public $addrPoolId;

    /**
     * @description module.monitorConfigId
     * @var string
     */
    public $monitorConfigId;

}
