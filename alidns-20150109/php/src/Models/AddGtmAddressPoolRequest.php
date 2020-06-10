<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmAddressPoolRequest\addr;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmAddressPoolRequest\ispCityNode;
use AlibabaCloud\Tea\Model;

class AddGtmAddressPoolRequest extends Model
{
    /**
     * @description lang
     *
     * @var string
     */
    public $lang;

    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description minAvailableAddrNum
     *
     * @var int
     */
    public $minAvailableAddrNum;

    /**
     * @description poolAddrList
     *
     * @var array
     */
    public $addr;

    /**
     * @description monitorStatus
     *
     * @var string
     */
    public $monitorStatus;

    /**
     * @description protocol
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description interval
     *
     * @var int
     */
    public $interval;

    /**
     * @description evaluationCount
     *
     * @var int
     */
    public $evaluationCount;

    /**
     * @description timeout
     *
     * @var int
     */
    public $timeout;

    /**
     * @description extend
     *
     * @var string
     */
    public $monitorExtendInfo;

    /**
     * @description nodes
     *
     * @var array
     */
    public $ispCityNode;
    protected $_name = [
        'lang'                => 'Lang',
        'instanceId'          => 'InstanceId',
        'name'                => 'Name',
        'type'                => 'Type',
        'minAvailableAddrNum' => 'MinAvailableAddrNum',
        'addr'                => 'Addr',
        'monitorStatus'       => 'MonitorStatus',
        'protocolType'        => 'ProtocolType',
        'interval'            => 'Interval',
        'evaluationCount'     => 'EvaluationCount',
        'timeout'             => 'Timeout',
        'monitorExtendInfo'   => 'MonitorExtendInfo',
        'ispCityNode'         => 'IspCityNode',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('minAvailableAddrNum', $this->minAvailableAddrNum, true);
        Model::validateRequired('addr', $this->addr, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->minAvailableAddrNum) {
            $res['MinAvailableAddrNum'] = $this->minAvailableAddrNum;
        }
        if (null !== $this->addr) {
            $res['Addr'] = [];
            if (null !== $this->addr && \is_array($this->addr)) {
                $n = 0;
                foreach ($this->addr as $item) {
                    $res['Addr'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->monitorStatus) {
            $res['MonitorStatus'] = $this->monitorStatus;
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
        if (null !== $this->ispCityNode) {
            $res['IspCityNode'] = [];
            if (null !== $this->ispCityNode && \is_array($this->ispCityNode)) {
                $n = 0;
                foreach ($this->ispCityNode as $item) {
                    $res['IspCityNode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddGtmAddressPoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['MinAvailableAddrNum'])) {
            $model->minAvailableAddrNum = $map['MinAvailableAddrNum'];
        }
        if (isset($map['Addr'])) {
            if (!empty($map['Addr'])) {
                $model->addr = [];
                $n           = 0;
                foreach ($map['Addr'] as $item) {
                    $model->addr[$n++] = null !== $item ? addr::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MonitorStatus'])) {
            $model->monitorStatus = $map['MonitorStatus'];
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
        if (isset($map['IspCityNode'])) {
            if (!empty($map['IspCityNode'])) {
                $model->ispCityNode = [];
                $n                  = 0;
                foreach ($map['IspCityNode'] as $item) {
                    $model->ispCityNode[$n++] = null !== $item ? ispCityNode::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
