<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponse\invocation\invocationResults;

use AlibabaCloud\Tea\Model;

class invocationResult extends Model
{
    /**
     * @var string
     */
    public $commandId;

    /**
     * @var string
     */
    public $invokeId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $stopTime;

    /**
     * @var string
     */
    public $finishedTime;

    /**
     * @var int
     */
    public $repeats;

    /**
     * @var string
     */
    public $output;

    /**
     * @var int
     */
    public $dropped;

    /**
     * @var string
     */
    public $invokeRecordStatus;

    /**
     * @var string
     */
    public $invocationStatus;

    /**
     * @var int
     */
    public $exitCode;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorInfo;
    protected $_name = [
        'commandId'          => 'CommandId',
        'invokeId'           => 'InvokeId',
        'instanceId'         => 'InstanceId',
        'startTime'          => 'StartTime',
        'stopTime'           => 'StopTime',
        'finishedTime'       => 'FinishedTime',
        'repeats'            => 'Repeats',
        'output'             => 'Output',
        'dropped'            => 'Dropped',
        'invokeRecordStatus' => 'InvokeRecordStatus',
        'invocationStatus'   => 'InvocationStatus',
        'exitCode'           => 'ExitCode',
        'errorCode'          => 'ErrorCode',
        'errorInfo'          => 'ErrorInfo',
    ];

    public function validate()
    {
        Model::validateRequired('commandId', $this->commandId, true);
        Model::validateRequired('invokeId', $this->invokeId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('stopTime', $this->stopTime, true);
        Model::validateRequired('finishedTime', $this->finishedTime, true);
        Model::validateRequired('repeats', $this->repeats, true);
        Model::validateRequired('output', $this->output, true);
        Model::validateRequired('dropped', $this->dropped, true);
        Model::validateRequired('invokeRecordStatus', $this->invokeRecordStatus, true);
        Model::validateRequired('invocationStatus', $this->invocationStatus, true);
        Model::validateRequired('exitCode', $this->exitCode, true);
        Model::validateRequired('errorCode', $this->errorCode, true);
        Model::validateRequired('errorInfo', $this->errorInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }
        if (null !== $this->repeats) {
            $res['Repeats'] = $this->repeats;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->dropped) {
            $res['Dropped'] = $this->dropped;
        }
        if (null !== $this->invokeRecordStatus) {
            $res['InvokeRecordStatus'] = $this->invokeRecordStatus;
        }
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->exitCode) {
            $res['ExitCode'] = $this->exitCode;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = $this->errorInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invocationResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }
        if (isset($map['Repeats'])) {
            $model->repeats = $map['Repeats'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['Dropped'])) {
            $model->dropped = $map['Dropped'];
        }
        if (isset($map['InvokeRecordStatus'])) {
            $model->invokeRecordStatus = $map['InvokeRecordStatus'];
        }
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['ExitCode'])) {
            $model->exitCode = $map['ExitCode'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = $map['ErrorInfo'];
        }

        return $model;
    }
}
