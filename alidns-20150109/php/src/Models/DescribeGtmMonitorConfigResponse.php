<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorConfigResponse\ispCityNodes;
use AlibabaCloud\Tea\Model;

class DescribeGtmMonitorConfigResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module.id
     *
     * @var string
     */
    public $monitorConfigId;

    /**
     * @description module.createTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description module.createTimestamp
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description module.updateTime
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description module.updateTimestamp
     *
     * @var int
     */
    public $updateTimestamp;

    /**
     * @description module.protocol
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description module.interval
     *
     * @var int
     */
    public $interval;

    /**
     * @description module.evaluationCount
     *
     * @var int
     */
    public $evaluationCount;

    /**
     * @description module.timeout
     *
     * @var int
     */
    public $timeout;

    /**
     * @description module.extend
     *
     * @var string
     */
    public $monitorExtendInfo;

    /**
     * @description module.nodes
     *
     * @var ispCityNodes
     */
    public $ispCityNodes;
    protected $_name = [
        'requestId'         => 'RequestId',
        'monitorConfigId'   => 'MonitorConfigId',
        'createTime'        => 'CreateTime',
        'createTimestamp'   => 'CreateTimestamp',
        'updateTime'        => 'UpdateTime',
        'updateTimestamp'   => 'UpdateTimestamp',
        'protocolType'      => 'ProtocolType',
        'interval'          => 'Interval',
        'evaluationCount'   => 'EvaluationCount',
        'timeout'           => 'Timeout',
        'monitorExtendInfo' => 'MonitorExtendInfo',
        'ispCityNodes'      => 'IspCityNodes',
    ];

    public function validate()
    {
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

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->monitorConfigId) {
            $res['MonitorConfigId'] = $this->monitorConfigId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->monitorExtendInfo) {
            $res['MonitorExtendInfo'] = $this->monitorExtendInfo;
        }
        if (null !== $this->ispCityNodes) {
            $res['IspCityNodes'] = null !== $this->ispCityNodes ? $this->ispCityNodes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmMonitorConfigResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MonitorConfigId'])) {
            $model->monitorConfigId = $map['MonitorConfigId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['MonitorExtendInfo'])) {
            $model->monitorExtendInfo = $map['MonitorExtendInfo'];
        }
        if (isset($map['IspCityNodes'])) {
            $model->ispCityNodes = ispCityNodes::fromMap($map['IspCityNodes']);
        }

        return $model;
    }
}
