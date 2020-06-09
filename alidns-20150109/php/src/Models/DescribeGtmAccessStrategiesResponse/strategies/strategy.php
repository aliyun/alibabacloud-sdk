<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategiesResponse\strategies;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategiesResponse\strategies\strategy\lines;

class strategy extends Model {
    protected $_name = [
        'strategyId' => 'StrategyId',
        'strategyName' => 'StrategyName',
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'defaultAddrPoolId' => 'DefaultAddrPoolId',
        'defaultAddrPoolName' => 'DefaultAddrPoolName',
        'failoverAddrPoolId' => 'FailoverAddrPoolId',
        'failoverAddrPoolName' => 'FailoverAddrPoolName',
        'accessMode' => 'AccessMode',
        'accessStatus' => 'AccessStatus',
        'strategyMode' => 'StrategyMode',
        'instanceId' => 'InstanceId',
        'defaultAddrPoolStatus' => 'DefaultAddrPoolStatus',
        'failoverAddrPoolStatus' => 'FailoverAddrPoolStatus',
        'defaultAddrPoolMonitorStatus' => 'DefaultAddrPoolMonitorStatus',
        'failoverAddrPoolMonitorStatus' => 'FailoverAddrPoolMonitorStatus',
        'lines' => 'Lines',
    ];
    public function validate() {
        Model::validateRequired('strategyId', $this->strategyId, true);
        Model::validateRequired('strategyName', $this->strategyName, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createTimestamp', $this->createTimestamp, true);
        Model::validateRequired('defaultAddrPoolId', $this->defaultAddrPoolId, true);
        Model::validateRequired('defaultAddrPoolName', $this->defaultAddrPoolName, true);
        Model::validateRequired('failoverAddrPoolId', $this->failoverAddrPoolId, true);
        Model::validateRequired('failoverAddrPoolName', $this->failoverAddrPoolName, true);
        Model::validateRequired('accessMode', $this->accessMode, true);
        Model::validateRequired('accessStatus', $this->accessStatus, true);
        Model::validateRequired('strategyMode', $this->strategyMode, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('defaultAddrPoolStatus', $this->defaultAddrPoolStatus, true);
        Model::validateRequired('failoverAddrPoolStatus', $this->failoverAddrPoolStatus, true);
        Model::validateRequired('defaultAddrPoolMonitorStatus', $this->defaultAddrPoolMonitorStatus, true);
        Model::validateRequired('failoverAddrPoolMonitorStatus', $this->failoverAddrPoolMonitorStatus, true);
        Model::validateRequired('lines', $this->lines, true);
    }
    public function toMap() {
        $res = [];
        $res['StrategyId'] = $this->strategyId;
        $res['StrategyName'] = $this->strategyName;
        $res['CreateTime'] = $this->createTime;
        $res['CreateTimestamp'] = $this->createTimestamp;
        $res['DefaultAddrPoolId'] = $this->defaultAddrPoolId;
        $res['DefaultAddrPoolName'] = $this->defaultAddrPoolName;
        $res['FailoverAddrPoolId'] = $this->failoverAddrPoolId;
        $res['FailoverAddrPoolName'] = $this->failoverAddrPoolName;
        $res['AccessMode'] = $this->accessMode;
        $res['AccessStatus'] = $this->accessStatus;
        $res['StrategyMode'] = $this->strategyMode;
        $res['InstanceId'] = $this->instanceId;
        $res['DefaultAddrPoolStatus'] = $this->defaultAddrPoolStatus;
        $res['FailoverAddrPoolStatus'] = $this->failoverAddrPoolStatus;
        $res['DefaultAddrPoolMonitorStatus'] = $this->defaultAddrPoolMonitorStatus;
        $res['FailoverAddrPoolMonitorStatus'] = $this->failoverAddrPoolMonitorStatus;
        $res['Lines'] = null !== $this->lines ? $this->lines->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return strategy
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['StrategyId'])){
            $model->strategyId = $map['StrategyId'];
        }
        if(isset($map['StrategyName'])){
            $model->strategyName = $map['StrategyName'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['CreateTimestamp'])){
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if(isset($map['DefaultAddrPoolId'])){
            $model->defaultAddrPoolId = $map['DefaultAddrPoolId'];
        }
        if(isset($map['DefaultAddrPoolName'])){
            $model->defaultAddrPoolName = $map['DefaultAddrPoolName'];
        }
        if(isset($map['FailoverAddrPoolId'])){
            $model->failoverAddrPoolId = $map['FailoverAddrPoolId'];
        }
        if(isset($map['FailoverAddrPoolName'])){
            $model->failoverAddrPoolName = $map['FailoverAddrPoolName'];
        }
        if(isset($map['AccessMode'])){
            $model->accessMode = $map['AccessMode'];
        }
        if(isset($map['AccessStatus'])){
            $model->accessStatus = $map['AccessStatus'];
        }
        if(isset($map['StrategyMode'])){
            $model->strategyMode = $map['StrategyMode'];
        }
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        if(isset($map['DefaultAddrPoolStatus'])){
            $model->defaultAddrPoolStatus = $map['DefaultAddrPoolStatus'];
        }
        if(isset($map['FailoverAddrPoolStatus'])){
            $model->failoverAddrPoolStatus = $map['FailoverAddrPoolStatus'];
        }
        if(isset($map['DefaultAddrPoolMonitorStatus'])){
            $model->defaultAddrPoolMonitorStatus = $map['DefaultAddrPoolMonitorStatus'];
        }
        if(isset($map['FailoverAddrPoolMonitorStatus'])){
            $model->failoverAddrPoolMonitorStatus = $map['FailoverAddrPoolMonitorStatus'];
        }
        if(isset($map['Lines'])){
            $model->lines = lines::fromMap($map['Lines']);
        }
        return $model;
    }
    /**
     * @description id
     * @var string
     */
    public $strategyId;

    /**
     * @description name
     * @var string
     */
    public $strategyName;

    /**
     * @description createTime
     * @var string
     */
    public $createTime;

    /**
     * @description createTimestamp
     * @var integer
     */
    public $createTimestamp;

    /**
     * @description defaultAddrPoolId
     * @var string
     */
    public $defaultAddrPoolId;

    /**
     * @description defaultAddrPoolName
     * @var string
     */
    public $defaultAddrPoolName;

    /**
     * @description failoverAddrPoolId
     * @var string
     */
    public $failoverAddrPoolId;

    /**
     * @description failoverAddrPoolName
     * @var string
     */
    public $failoverAddrPoolName;

    /**
     * @description accessMode
     * @var string
     */
    public $accessMode;

    /**
     * @description accessStatus
     * @var string
     */
    public $accessStatus;

    /**
     * @description strategyMode
     * @var string
     */
    public $strategyMode;

    /**
     * @description instanceId
     * @var string
     */
    public $instanceId;

    /**
     * @description defaultAddrPoolStatus
     * @var string
     */
    public $defaultAddrPoolStatus;

    /**
     * @description failoverAddrPoolStatus
     * @var string
     */
    public $failoverAddrPoolStatus;

    /**
     * @description defaultAddrPoolMonitorStatus
     * @var string
     */
    public $defaultAddrPoolMonitorStatus;

    /**
     * @description failoverAddrPoolMonitorStatus
     * @var string
     */
    public $failoverAddrPoolMonitorStatus;

    /**
     * @description lines
     * @var lines
     */
    public $lines;

}
