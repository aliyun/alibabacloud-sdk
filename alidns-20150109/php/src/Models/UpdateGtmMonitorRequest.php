<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmMonitorRequest\ispCityNode;

class UpdateGtmMonitorRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'monitorConfigId' => 'MonitorConfigId',
        'protocolType' => 'ProtocolType',
        'interval' => 'Interval',
        'evaluationCount' => 'EvaluationCount',
        'timeout' => 'Timeout',
        'monitorExtendInfo' => 'MonitorExtendInfo',
        'ispCityNode' => 'IspCityNode',
    ];
    public function validate() {
        Model::validateRequired('monitorConfigId', $this->monitorConfigId, true);
        Model::validateRequired('protocolType', $this->protocolType, true);
        Model::validateRequired('monitorExtendInfo', $this->monitorExtendInfo, true);
        Model::validateRequired('ispCityNode', $this->ispCityNode, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['MonitorConfigId'] = $this->monitorConfigId;
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
     * @return UpdateGtmMonitorRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['MonitorConfigId'])){
            $model->monitorConfigId = $map['MonitorConfigId'];
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
     * @description monitorConfigId
     * @var string
     */
    public $monitorConfigId;

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
