<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmAddressPoolRequest\addr;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmAddressPoolRequest\ispCityNode;

class AddGtmAddressPoolRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'type' => 'Type',
        'minAvailableAddrNum' => 'MinAvailableAddrNum',
        'addr' => 'Addr',
        'monitorStatus' => 'MonitorStatus',
        'protocolType' => 'ProtocolType',
        'interval' => 'Interval',
        'evaluationCount' => 'EvaluationCount',
        'timeout' => 'Timeout',
        'monitorExtendInfo' => 'MonitorExtendInfo',
        'ispCityNode' => 'IspCityNode',
    ];
    public function validate() {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('minAvailableAddrNum', $this->minAvailableAddrNum, true);
        Model::validateRequired('addr', $this->addr, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['InstanceId'] = $this->instanceId;
        $res['Name'] = $this->name;
        $res['Type'] = $this->type;
        $res['MinAvailableAddrNum'] = $this->minAvailableAddrNum;
        $res['Addr'] = [];
        if(null !== $this->addr && is_array($this->addr)){
            $n = 0;
            foreach($this->addr as $item){
                $res['Addr'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['MonitorStatus'] = $this->monitorStatus;
        $res['ProtocolType'] = $this->protocolType;
        $res['Interval'] = $this->interval;
        $res['EvaluationCount'] = $this->evaluationCount;
        $res['Timeout'] = $this->timeout;
        $res['MonitorExtendInfo'] = $this->monitorExtendInfo;
        $res['IspCityNode'] = [];
        if(null !== $this->ispCityNode && is_array($this->ispCityNode)){
            $n = 0;
            foreach($this->ispCityNode as $item){
                $res['IspCityNode'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddGtmAddressPoolRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['MinAvailableAddrNum'])){
            $model->minAvailableAddrNum = $map['MinAvailableAddrNum'];
        }
        if(isset($map['Addr'])){
            if(!empty($map['Addr'])){
                $model->addr = [];
                $n = 0;
                foreach($map['Addr'] as $item) {
                    $model->addr[$n++] = null !== $item ? addr::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['MonitorStatus'])){
            $model->monitorStatus = $map['MonitorStatus'];
        }
        if(isset($map['ProtocolType'])){
            $model->protocolType = $map['ProtocolType'];
        }
        if(isset($map['Interval'])){
            $model->interval = $map['Interval'];
        }
        if(isset($map['EvaluationCount'])){
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if(isset($map['Timeout'])){
            $model->timeout = $map['Timeout'];
        }
        if(isset($map['MonitorExtendInfo'])){
            $model->monitorExtendInfo = $map['MonitorExtendInfo'];
        }
        if(isset($map['IspCityNode'])){
            if(!empty($map['IspCityNode'])){
                $model->ispCityNode = [];
                $n = 0;
                foreach($map['IspCityNode'] as $item) {
                    $model->ispCityNode[$n++] = null !== $item ? ispCityNode::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description instanceId
     * @var string
     */
    public $instanceId;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description minAvailableAddrNum
     * @var integer
     */
    public $minAvailableAddrNum;

    /**
     * @description poolAddrList
     * @var array
     */
    public $addr;

    /**
     * @description monitorStatus
     * @var string
     */
    public $monitorStatus;

    /**
     * @description protocol
     * @var string
     */
    public $protocolType;

    /**
     * @description interval
     * @var integer
     */
    public $interval;

    /**
     * @description evaluationCount
     * @var integer
     */
    public $evaluationCount;

    /**
     * @description timeout
     * @var integer
     */
    public $timeout;

    /**
     * @description extend
     * @var string
     */
    public $monitorExtendInfo;

    /**
     * @description nodes
     * @var array
     */
    public $ispCityNode;

}
