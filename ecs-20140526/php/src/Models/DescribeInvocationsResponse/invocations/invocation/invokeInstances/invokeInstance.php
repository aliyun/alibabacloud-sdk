<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationsResponse\invocations\invocation\invokeInstances;

use AlibabaCloud\Tea\Model;

class invokeInstance extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $repeats;

    /**
     * @var string
     */
    public $instanceInvokeStatus;

    /**
     * @var string
     */
    public $invocationStatus;

    /**
     * @var string
     */
    public $output;

    /**
     * @var int
     */
    public $exitCode;

    /**
     * @var int
     */
    public $dropped;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorInfo;

    /**
     * @var string
     */
    public $creationTime;

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
    public $finishTime;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'instanceId'           => 'InstanceId',
        'repeats'              => 'Repeats',
        'instanceInvokeStatus' => 'InstanceInvokeStatus',
        'invocationStatus'     => 'InvocationStatus',
        'output'               => 'Output',
        'exitCode'             => 'ExitCode',
        'dropped'              => 'Dropped',
        'errorCode'            => 'ErrorCode',
        'errorInfo'            => 'ErrorInfo',
        'creationTime'         => 'CreationTime',
        'startTime'            => 'StartTime',
        'stopTime'             => 'StopTime',
        'finishTime'           => 'FinishTime',
        'updateTime'           => 'UpdateTime',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('repeats', $this->repeats, true);
        Model::validateRequired('instanceInvokeStatus', $this->instanceInvokeStatus, true);
        Model::validateRequired('invocationStatus', $this->invocationStatus, true);
        Model::validateRequired('output', $this->output, true);
        Model::validateRequired('exitCode', $this->exitCode, true);
        Model::validateRequired('dropped', $this->dropped, true);
        Model::validateRequired('errorCode', $this->errorCode, true);
        Model::validateRequired('errorInfo', $this->errorInfo, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('stopTime', $this->stopTime, true);
        Model::validateRequired('finishTime', $this->finishTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->repeats) {
            $res['Repeats'] = $this->repeats;
        }
        if (null !== $this->instanceInvokeStatus) {
            $res['InstanceInvokeStatus'] = $this->instanceInvokeStatus;
        }
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->exitCode) {
            $res['ExitCode'] = $this->exitCode;
        }
        if (null !== $this->dropped) {
            $res['Dropped'] = $this->dropped;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = $this->errorInfo;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invokeInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Repeats'])) {
            $model->repeats = $map['Repeats'];
        }
        if (isset($map['InstanceInvokeStatus'])) {
            $model->instanceInvokeStatus = $map['InstanceInvokeStatus'];
        }
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['ExitCode'])) {
            $model->exitCode = $map['ExitCode'];
        }
        if (isset($map['Dropped'])) {
            $model->dropped = $map['Dropped'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = $map['ErrorInfo'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
