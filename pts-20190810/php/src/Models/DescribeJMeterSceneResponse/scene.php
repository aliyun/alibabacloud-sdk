<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterSceneResponse;

use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterSceneResponse\scene\condition;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterSceneResponse\scene\plan;
use AlibabaCloud\Tea\Model;

class scene extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description pool
     *
     * @var string
     */
    public $pool;

    /**
     * @description jmeterVersion
     *
     * @var string
     */
    public $JMeterVersion;

    /**
     * @description concurrency
     *
     * @var int
     */
    public $concurrency;

    /**
     * @description rampUp
     *
     * @var int
     */
    public $rampUp;

    /**
     * @description holdFor
     *
     * @var int
     */
    public $holdFor;

    /**
     * @description useIterations
     *
     * @var bool
     */
    public $useIterations;

    /**
     * @description iterations
     *
     * @var int
     */
    public $iterations;

    /**
     * @description maxConcurrencyPerAgent
     *
     * @var int
     */
    public $maxConcurrencyPerAgent;

    /**
     * @description specifyAgentCount
     *
     * @var bool
     */
    public $specifyAgentCount;

    /**
     * @description agentCount
     *
     * @var int
     */
    public $agentCount;

    /**
     * @description splitCsv
     *
     * @var bool
     */
    public $splitCsv;

    /**
     * @description testFile
     *
     * @var string
     */
    public $testFile;

    /**
     * @description fileList
     *
     * @var string
     */
    public $fileList;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description vpcId
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description securityGroupId
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description vSwitchId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description sceneId
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description conditionSatisfiedExactly
     *
     * @var bool
     */
    public $conditionSatisfiedExactly;

    /**
     * @description syncTimerType
     *
     * @var string
     */
    public $syncTimerType;

    /**
     * @description steps
     *
     * @var int
     */
    public $steps;

    /**
     * @description constantThroughputTimerType
     *
     * @var string
     */
    public $constantThroughputTimerType;

    /**
     * @description condition
     *
     * @var array
     */
    public $condition;

    /**
     * @description plan
     *
     * @var plan
     */
    public $plan;
    protected $_name = [
        'name'                        => 'Name',
        'pool'                        => 'Pool',
        'JMeterVersion'               => 'JMeterVersion',
        'concurrency'                 => 'Concurrency',
        'rampUp'                      => 'RampUp',
        'holdFor'                     => 'HoldFor',
        'useIterations'               => 'UseIterations',
        'iterations'                  => 'Iterations',
        'maxConcurrencyPerAgent'      => 'MaxConcurrencyPerAgent',
        'specifyAgentCount'           => 'SpecifyAgentCount',
        'agentCount'                  => 'AgentCount',
        'splitCsv'                    => 'SplitCsv',
        'testFile'                    => 'TestFile',
        'fileList'                    => 'FileList',
        'regionId'                    => 'RegionId',
        'vpcId'                       => 'VpcId',
        'securityGroupId'             => 'SecurityGroupId',
        'VSwitchId'                   => 'VSwitchId',
        'sceneId'                     => 'SceneId',
        'conditionSatisfiedExactly'   => 'ConditionSatisfiedExactly',
        'syncTimerType'               => 'SyncTimerType',
        'steps'                       => 'Steps',
        'constantThroughputTimerType' => 'ConstantThroughputTimerType',
        'condition'                   => 'Condition',
        'plan'                        => 'Plan',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('pool', $this->pool, true);
        Model::validateRequired('JMeterVersion', $this->JMeterVersion, true);
        Model::validateRequired('concurrency', $this->concurrency, true);
        Model::validateRequired('rampUp', $this->rampUp, true);
        Model::validateRequired('holdFor', $this->holdFor, true);
        Model::validateRequired('useIterations', $this->useIterations, true);
        Model::validateRequired('iterations', $this->iterations, true);
        Model::validateRequired('maxConcurrencyPerAgent', $this->maxConcurrencyPerAgent, true);
        Model::validateRequired('specifyAgentCount', $this->specifyAgentCount, true);
        Model::validateRequired('agentCount', $this->agentCount, true);
        Model::validateRequired('splitCsv', $this->splitCsv, true);
        Model::validateRequired('testFile', $this->testFile, true);
        Model::validateRequired('fileList', $this->fileList, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('securityGroupId', $this->securityGroupId, true);
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
        Model::validateRequired('sceneId', $this->sceneId, true);
        Model::validateRequired('conditionSatisfiedExactly', $this->conditionSatisfiedExactly, true);
        Model::validateRequired('syncTimerType', $this->syncTimerType, true);
        Model::validateRequired('steps', $this->steps, true);
        Model::validateRequired('constantThroughputTimerType', $this->constantThroughputTimerType, true);
        Model::validateRequired('condition', $this->condition, true);
        Model::validateRequired('plan', $this->plan, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pool) {
            $res['Pool'] = $this->pool;
        }
        if (null !== $this->JMeterVersion) {
            $res['JMeterVersion'] = $this->JMeterVersion;
        }
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }
        if (null !== $this->rampUp) {
            $res['RampUp'] = $this->rampUp;
        }
        if (null !== $this->holdFor) {
            $res['HoldFor'] = $this->holdFor;
        }
        if (null !== $this->useIterations) {
            $res['UseIterations'] = $this->useIterations;
        }
        if (null !== $this->iterations) {
            $res['Iterations'] = $this->iterations;
        }
        if (null !== $this->maxConcurrencyPerAgent) {
            $res['MaxConcurrencyPerAgent'] = $this->maxConcurrencyPerAgent;
        }
        if (null !== $this->specifyAgentCount) {
            $res['SpecifyAgentCount'] = $this->specifyAgentCount;
        }
        if (null !== $this->agentCount) {
            $res['AgentCount'] = $this->agentCount;
        }
        if (null !== $this->splitCsv) {
            $res['SplitCsv'] = $this->splitCsv;
        }
        if (null !== $this->testFile) {
            $res['TestFile'] = $this->testFile;
        }
        if (null !== $this->fileList) {
            $res['FileList'] = $this->fileList;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->conditionSatisfiedExactly) {
            $res['ConditionSatisfiedExactly'] = $this->conditionSatisfiedExactly;
        }
        if (null !== $this->syncTimerType) {
            $res['SyncTimerType'] = $this->syncTimerType;
        }
        if (null !== $this->steps) {
            $res['Steps'] = $this->steps;
        }
        if (null !== $this->constantThroughputTimerType) {
            $res['ConstantThroughputTimerType'] = $this->constantThroughputTimerType;
        }
        if (null !== $this->condition) {
            $res['Condition'] = [];
            if (null !== $this->condition && \is_array($this->condition)) {
                $n = 0;
                foreach ($this->condition as $item) {
                    $res['Condition'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->plan) {
            $res['Plan'] = null !== $this->plan ? $this->plan->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scene
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Pool'])) {
            $model->pool = $map['Pool'];
        }
        if (isset($map['JMeterVersion'])) {
            $model->JMeterVersion = $map['JMeterVersion'];
        }
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }
        if (isset($map['RampUp'])) {
            $model->rampUp = $map['RampUp'];
        }
        if (isset($map['HoldFor'])) {
            $model->holdFor = $map['HoldFor'];
        }
        if (isset($map['UseIterations'])) {
            $model->useIterations = $map['UseIterations'];
        }
        if (isset($map['Iterations'])) {
            $model->iterations = $map['Iterations'];
        }
        if (isset($map['MaxConcurrencyPerAgent'])) {
            $model->maxConcurrencyPerAgent = $map['MaxConcurrencyPerAgent'];
        }
        if (isset($map['SpecifyAgentCount'])) {
            $model->specifyAgentCount = $map['SpecifyAgentCount'];
        }
        if (isset($map['AgentCount'])) {
            $model->agentCount = $map['AgentCount'];
        }
        if (isset($map['SplitCsv'])) {
            $model->splitCsv = $map['SplitCsv'];
        }
        if (isset($map['TestFile'])) {
            $model->testFile = $map['TestFile'];
        }
        if (isset($map['FileList'])) {
            $model->fileList = $map['FileList'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['ConditionSatisfiedExactly'])) {
            $model->conditionSatisfiedExactly = $map['ConditionSatisfiedExactly'];
        }
        if (isset($map['SyncTimerType'])) {
            $model->syncTimerType = $map['SyncTimerType'];
        }
        if (isset($map['Steps'])) {
            $model->steps = $map['Steps'];
        }
        if (isset($map['ConstantThroughputTimerType'])) {
            $model->constantThroughputTimerType = $map['ConstantThroughputTimerType'];
        }
        if (isset($map['Condition'])) {
            if (!empty($map['Condition'])) {
                $model->condition = [];
                $n                = 0;
                foreach ($map['Condition'] as $item) {
                    $model->condition[$n++] = null !== $item ? condition::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Plan'])) {
            $model->plan = plan::fromMap($map['Plan']);
        }

        return $model;
    }
}
