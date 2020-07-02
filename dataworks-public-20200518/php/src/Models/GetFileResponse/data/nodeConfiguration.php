<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponse\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponse\data\nodeConfiguration\inputList;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponse\data\nodeConfiguration\outputList;
use AlibabaCloud\Tea\Model;

class nodeConfiguration extends Model
{
    /**
     * @description taskRerunTime
     *
     * @var int
     */
    public $taskRerunTime;

    /**
     * @description taskRerunIntervalMillis
     *
     * @var int
     */
    public $taskRerunIntervalMillis;

    /**
     * @description reRunAble
     *
     * @var string
     */
    public $rerunMode;

    /**
     * @description isStop
     *
     * @var bool
     */
    public $stop;

    /**
     * @description paraValue
     *
     * @var string
     */
    public $paraValue;

    /**
     * @description startEffectDate
     *
     * @var int
     */
    public $startEffectDate;

    /**
     * @description endEffectDate
     *
     * @var int
     */
    public $endEffectDate;

    /**
     * @description cronExpress
     *
     * @var string
     */
    public $cronExpress;

    /**
     * @description cycleType
     *
     * @var string
     */
    public $cycleType;

    /**
     * @description dependentType
     *
     * @var string
     */
    public $dependentType;

    /**
     * @description dependentDataNode
     *
     * @var string
     */
    public $dependentNodeIdList;

    /**
     * @description inputList
     *
     * @var array
     */
    public $inputList;

    /**
     * @description outputList
     *
     * @var array
     */
    public $outputList;
    protected $_name = [
        'taskRerunTime'           => 'TaskRerunTime',
        'taskRerunIntervalMillis' => 'TaskRerunIntervalMillis',
        'rerunMode'               => 'RerunMode',
        'stop'                    => 'Stop',
        'paraValue'               => 'ParaValue',
        'startEffectDate'         => 'StartEffectDate',
        'endEffectDate'           => 'EndEffectDate',
        'cronExpress'             => 'CronExpress',
        'cycleType'               => 'CycleType',
        'dependentType'           => 'DependentType',
        'dependentNodeIdList'     => 'DependentNodeIdList',
        'inputList'               => 'InputList',
        'outputList'              => 'OutputList',
    ];

    public function validate()
    {
        Model::validateRequired('taskRerunTime', $this->taskRerunTime, true);
        Model::validateRequired('taskRerunIntervalMillis', $this->taskRerunIntervalMillis, true);
        Model::validateRequired('rerunMode', $this->rerunMode, true);
        Model::validateRequired('stop', $this->stop, true);
        Model::validateRequired('paraValue', $this->paraValue, true);
        Model::validateRequired('startEffectDate', $this->startEffectDate, true);
        Model::validateRequired('endEffectDate', $this->endEffectDate, true);
        Model::validateRequired('cronExpress', $this->cronExpress, true);
        Model::validateRequired('cycleType', $this->cycleType, true);
        Model::validateRequired('dependentType', $this->dependentType, true);
        Model::validateRequired('dependentNodeIdList', $this->dependentNodeIdList, true);
        Model::validateRequired('inputList', $this->inputList, true);
        Model::validateRequired('outputList', $this->outputList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskRerunTime) {
            $res['TaskRerunTime'] = $this->taskRerunTime;
        }
        if (null !== $this->taskRerunIntervalMillis) {
            $res['TaskRerunIntervalMillis'] = $this->taskRerunIntervalMillis;
        }
        if (null !== $this->rerunMode) {
            $res['RerunMode'] = $this->rerunMode;
        }
        if (null !== $this->stop) {
            $res['Stop'] = $this->stop;
        }
        if (null !== $this->paraValue) {
            $res['ParaValue'] = $this->paraValue;
        }
        if (null !== $this->startEffectDate) {
            $res['StartEffectDate'] = $this->startEffectDate;
        }
        if (null !== $this->endEffectDate) {
            $res['EndEffectDate'] = $this->endEffectDate;
        }
        if (null !== $this->cronExpress) {
            $res['CronExpress'] = $this->cronExpress;
        }
        if (null !== $this->cycleType) {
            $res['CycleType'] = $this->cycleType;
        }
        if (null !== $this->dependentType) {
            $res['DependentType'] = $this->dependentType;
        }
        if (null !== $this->dependentNodeIdList) {
            $res['DependentNodeIdList'] = $this->dependentNodeIdList;
        }
        if (null !== $this->inputList) {
            $res['InputList'] = [];
            if (null !== $this->inputList && \is_array($this->inputList)) {
                $n = 0;
                foreach ($this->inputList as $item) {
                    $res['InputList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->outputList) {
            $res['OutputList'] = [];
            if (null !== $this->outputList && \is_array($this->outputList)) {
                $n = 0;
                foreach ($this->outputList as $item) {
                    $res['OutputList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskRerunTime'])) {
            $model->taskRerunTime = $map['TaskRerunTime'];
        }
        if (isset($map['TaskRerunIntervalMillis'])) {
            $model->taskRerunIntervalMillis = $map['TaskRerunIntervalMillis'];
        }
        if (isset($map['RerunMode'])) {
            $model->rerunMode = $map['RerunMode'];
        }
        if (isset($map['Stop'])) {
            $model->stop = $map['Stop'];
        }
        if (isset($map['ParaValue'])) {
            $model->paraValue = $map['ParaValue'];
        }
        if (isset($map['StartEffectDate'])) {
            $model->startEffectDate = $map['StartEffectDate'];
        }
        if (isset($map['EndEffectDate'])) {
            $model->endEffectDate = $map['EndEffectDate'];
        }
        if (isset($map['CronExpress'])) {
            $model->cronExpress = $map['CronExpress'];
        }
        if (isset($map['CycleType'])) {
            $model->cycleType = $map['CycleType'];
        }
        if (isset($map['DependentType'])) {
            $model->dependentType = $map['DependentType'];
        }
        if (isset($map['DependentNodeIdList'])) {
            $model->dependentNodeIdList = $map['DependentNodeIdList'];
        }
        if (isset($map['InputList'])) {
            if (!empty($map['InputList'])) {
                $model->inputList = [];
                $n                = 0;
                foreach ($map['InputList'] as $item) {
                    $model->inputList[$n++] = null !== $item ? inputList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OutputList'])) {
            if (!empty($map['OutputList'])) {
                $model->outputList = [];
                $n                 = 0;
                foreach ($map['OutputList'] as $item) {
                    $model->outputList[$n++] = null !== $item ? outputList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
