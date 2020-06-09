<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorConfigResponse\ispCityNodes;

class DescribeGtmMonitorConfigResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'monitorConfigId' => 'MonitorConfigId',
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'updateTime' => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
        'protocolType' => 'ProtocolType',
        'interval' => 'Interval',
        'evaluationCount' => 'EvaluationCount',
        'timeout' => 'Timeout',
        'monitorExtendInfo' => 'MonitorExtendInfo',
        'ispCityNodes' => 'IspCityNodes',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('monitorConfigId', $this->monitorConfigId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createTimestamp', $this->createTimestamp, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('updateTimestamp', $this->updateTimestamp, true);
        Model::validateRequired('protocolType', $this->protocolType, true);
        Model::validateRequired('interval', $this->interval, true);
        Model::validateRequired('evaluationCount', $this->evaluationCount, true);
        Model::validateRequired('timeout', $this->timeout, true);
        Model::validateRequired('monitorExtendInfo', $this->monitorExtendInfo, true);
        Model::validateRequired('ispCityNodes', $this->ispCityNodes, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['MonitorConfigId'] = $this->monitorConfigId;
        $res['CreateTime'] = $this->createTime;
        $res['CreateTimestamp'] = $this->createTimestamp;
        $res['UpdateTime'] = $this->updateTime;
        $res['UpdateTimestamp'] = $this->updateTimestamp;
        $res['ProtocolType'] = $this->protocolType;
        $res['Interval'] = $this->interval;
        $res['EvaluationCount'] = $this->evaluationCount;
        $res['Timeout'] = $this->timeout;
        $res['MonitorExtendInfo'] = $this->monitorExtendInfo;
        $res['IspCityNodes'] = null !== $this->ispCityNodes ? $this->ispCityNodes->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeGtmMonitorConfigResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['MonitorConfigId'])){
            $model->monitorConfigId = $map['MonitorConfigId'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['CreateTimestamp'])){
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if(isset($map['UpdateTime'])){
            $model->updateTime = $map['UpdateTime'];
        }
        if(isset($map['UpdateTimestamp'])){
            $model->updateTimestamp = $map['UpdateTimestamp'];
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
        if(isset($map['IspCityNodes'])){
            $model->ispCityNodes = ispCityNodes::fromMap($map['IspCityNodes']);
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
    public $monitorConfigId;

    /**
     * @description module.createTime
     * @var string
     */
    public $createTime;

    /**
     * @description module.createTimestamp
     * @var integer
     */
    public $createTimestamp;

    /**
     * @description module.updateTime
     * @var string
     */
    public $updateTime;

    /**
     * @description module.updateTimestamp
     * @var integer
     */
    public $updateTimestamp;

    /**
     * @description module.protocol
     * @var string
     */
    public $protocolType;

    /**
     * @description module.interval
     * @var integer
     */
    public $interval;

    /**
     * @description module.evaluationCount
     * @var integer
     */
    public $evaluationCount;

    /**
     * @description module.timeout
     * @var integer
     */
    public $timeout;

    /**
     * @description module.extend
     * @var string
     */
    public $monitorExtendInfo;

    /**
     * @description module.nodes
     * @var ispCityNodes
     */
    public $ispCityNodes;

}
