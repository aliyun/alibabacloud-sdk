<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterSceneRunningStatusResponse;

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
    public $jmeterVersion;

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
     * @description plan
     *
     * @var string
     */
    public $plan;

    /**
     * @description steps
     *
     * @var int
     */
    public $steps;
    protected $_name = [
        'name'                   => 'Name',
        'pool'                   => 'Pool',
        'jmeterVersion'          => 'JmeterVersion',
        'concurrency'            => 'Concurrency',
        'rampUp'                 => 'RampUp',
        'holdFor'                => 'HoldFor',
        'useIterations'          => 'UseIterations',
        'iterations'             => 'Iterations',
        'maxConcurrencyPerAgent' => 'MaxConcurrencyPerAgent',
        'specifyAgentCount'      => 'SpecifyAgentCount',
        'agentCount'             => 'AgentCount',
        'splitCsv'               => 'SplitCsv',
        'testFile'               => 'TestFile',
        'plan'                   => 'Plan',
        'steps'                  => 'Steps',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('pool', $this->pool, true);
        Model::validateRequired('jmeterVersion', $this->jmeterVersion, true);
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
        Model::validateRequired('plan', $this->plan, true);
        Model::validateRequired('steps', $this->steps, true);
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
        if (null !== $this->jmeterVersion) {
            $res['JmeterVersion'] = $this->jmeterVersion;
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
        if (null !== $this->plan) {
            $res['Plan'] = $this->plan;
        }
        if (null !== $this->steps) {
            $res['Steps'] = $this->steps;
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
        if (isset($map['JmeterVersion'])) {
            $model->jmeterVersion = $map['JmeterVersion'];
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
        if (isset($map['Plan'])) {
            $model->plan = $map['Plan'];
        }
        if (isset($map['Steps'])) {
            $model->steps = $map['Steps'];
        }

        return $model;
    }
}
