<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyResponse\lines;
use AlibabaCloud\Tea\Model;

class DescribeGtmAccessStrategyResponse extends Model
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
    public $strategyId;

    /**
     * @description module.name
     *
     * @var string
     */
    public $strategyName;

    /**
     * @description module.defaultAddrPoolId
     *
     * @var string
     */
    public $defultAddrPoolId;

    /**
     * @description module.defaultAddrPoolName
     *
     * @var string
     */
    public $defaultAddrPoolName;

    /**
     * @description module.failoverAddrPoolId
     *
     * @var string
     */
    public $failoverAddrPoolId;

    /**
     * @description module.failoverAddrPoolName
     *
     * @var string
     */
    public $failoverAddrPoolName;

    /**
     * @description module.strategyMode
     *
     * @var string
     */
    public $strategyMode;

    /**
     * @description module.accessMode
     *
     * @var string
     */
    public $accessMode;

    /**
     * @description module.accessStatus
     *
     * @var string
     */
    public $accessStatus;

    /**
     * @description module.instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description module.defaultAddrPoolStatus
     *
     * @var string
     */
    public $defaultAddrPoolStatus;

    /**
     * @description module.failoverAddrPoolStatus
     *
     * @var string
     */
    public $failoverAddrPoolStatus;

    /**
     * @description module.defaultAddrPoolMonitorStatus
     *
     * @var string
     */
    public $defaultAddrPoolMonitorStatus;

    /**
     * @description module.failoverAddrPoolMonitorStatus
     *
     * @var string
     */
    public $failoverAddrPoolMonitorStatus;

    /**
     * @description module.lines
     *
     * @var lines
     */
    public $lines;
    protected $_name = [
        'requestId'                     => 'RequestId',
        'strategyId'                    => 'StrategyId',
        'strategyName'                  => 'StrategyName',
        'defultAddrPoolId'              => 'DefultAddrPoolId',
        'defaultAddrPoolName'           => 'DefaultAddrPoolName',
        'failoverAddrPoolId'            => 'FailoverAddrPoolId',
        'failoverAddrPoolName'          => 'FailoverAddrPoolName',
        'strategyMode'                  => 'StrategyMode',
        'accessMode'                    => 'AccessMode',
        'accessStatus'                  => 'AccessStatus',
        'instanceId'                    => 'InstanceId',
        'defaultAddrPoolStatus'         => 'DefaultAddrPoolStatus',
        'failoverAddrPoolStatus'        => 'FailoverAddrPoolStatus',
        'defaultAddrPoolMonitorStatus'  => 'DefaultAddrPoolMonitorStatus',
        'failoverAddrPoolMonitorStatus' => 'FailoverAddrPoolMonitorStatus',
        'lines'                         => 'Lines',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('strategyId', $this->strategyId, true);
        Model::validateRequired('strategyName', $this->strategyName, true);
        Model::validateRequired('defultAddrPoolId', $this->defultAddrPoolId, true);
        Model::validateRequired('defaultAddrPoolName', $this->defaultAddrPoolName, true);
        Model::validateRequired('failoverAddrPoolId', $this->failoverAddrPoolId, true);
        Model::validateRequired('failoverAddrPoolName', $this->failoverAddrPoolName, true);
        Model::validateRequired('strategyMode', $this->strategyMode, true);
        Model::validateRequired('accessMode', $this->accessMode, true);
        Model::validateRequired('accessStatus', $this->accessStatus, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('defaultAddrPoolStatus', $this->defaultAddrPoolStatus, true);
        Model::validateRequired('failoverAddrPoolStatus', $this->failoverAddrPoolStatus, true);
        Model::validateRequired('defaultAddrPoolMonitorStatus', $this->defaultAddrPoolMonitorStatus, true);
        Model::validateRequired('failoverAddrPoolMonitorStatus', $this->failoverAddrPoolMonitorStatus, true);
        Model::validateRequired('lines', $this->lines, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
        if (null !== $this->defultAddrPoolId) {
            $res['DefultAddrPoolId'] = $this->defultAddrPoolId;
        }
        if (null !== $this->defaultAddrPoolName) {
            $res['DefaultAddrPoolName'] = $this->defaultAddrPoolName;
        }
        if (null !== $this->failoverAddrPoolId) {
            $res['FailoverAddrPoolId'] = $this->failoverAddrPoolId;
        }
        if (null !== $this->failoverAddrPoolName) {
            $res['FailoverAddrPoolName'] = $this->failoverAddrPoolName;
        }
        if (null !== $this->strategyMode) {
            $res['StrategyMode'] = $this->strategyMode;
        }
        if (null !== $this->accessMode) {
            $res['AccessMode'] = $this->accessMode;
        }
        if (null !== $this->accessStatus) {
            $res['AccessStatus'] = $this->accessStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->defaultAddrPoolStatus) {
            $res['DefaultAddrPoolStatus'] = $this->defaultAddrPoolStatus;
        }
        if (null !== $this->failoverAddrPoolStatus) {
            $res['FailoverAddrPoolStatus'] = $this->failoverAddrPoolStatus;
        }
        if (null !== $this->defaultAddrPoolMonitorStatus) {
            $res['DefaultAddrPoolMonitorStatus'] = $this->defaultAddrPoolMonitorStatus;
        }
        if (null !== $this->failoverAddrPoolMonitorStatus) {
            $res['FailoverAddrPoolMonitorStatus'] = $this->failoverAddrPoolMonitorStatus;
        }
        if (null !== $this->lines) {
            $res['Lines'] = null !== $this->lines ? $this->lines->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmAccessStrategyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
        if (isset($map['DefultAddrPoolId'])) {
            $model->defultAddrPoolId = $map['DefultAddrPoolId'];
        }
        if (isset($map['DefaultAddrPoolName'])) {
            $model->defaultAddrPoolName = $map['DefaultAddrPoolName'];
        }
        if (isset($map['FailoverAddrPoolId'])) {
            $model->failoverAddrPoolId = $map['FailoverAddrPoolId'];
        }
        if (isset($map['FailoverAddrPoolName'])) {
            $model->failoverAddrPoolName = $map['FailoverAddrPoolName'];
        }
        if (isset($map['StrategyMode'])) {
            $model->strategyMode = $map['StrategyMode'];
        }
        if (isset($map['AccessMode'])) {
            $model->accessMode = $map['AccessMode'];
        }
        if (isset($map['AccessStatus'])) {
            $model->accessStatus = $map['AccessStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DefaultAddrPoolStatus'])) {
            $model->defaultAddrPoolStatus = $map['DefaultAddrPoolStatus'];
        }
        if (isset($map['FailoverAddrPoolStatus'])) {
            $model->failoverAddrPoolStatus = $map['FailoverAddrPoolStatus'];
        }
        if (isset($map['DefaultAddrPoolMonitorStatus'])) {
            $model->defaultAddrPoolMonitorStatus = $map['DefaultAddrPoolMonitorStatus'];
        }
        if (isset($map['FailoverAddrPoolMonitorStatus'])) {
            $model->failoverAddrPoolMonitorStatus = $map['FailoverAddrPoolMonitorStatus'];
        }
        if (isset($map['Lines'])) {
            $model->lines = lines::fromMap($map['Lines']);
        }

        return $model;
    }
}
