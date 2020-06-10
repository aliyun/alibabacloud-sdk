<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationsResponse\invocations;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationsResponse\invocations\invocation\invokeInstances;
use AlibabaCloud\Tea\Model;

class invocation extends Model
{
    /**
     * @description taskId
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description createTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description commandId
     *
     * @var string
     */
    public $commandId;

    /**
     * @description commandType
     *
     * @var string
     */
    public $commandType;

    /**
     * @description commandName
     *
     * @var string
     */
    public $commandName;

    /**
     * @description commandContent
     *
     * @var string
     */
    public $commandContent;

    /**
     * @description frequency
     *
     * @var string
     */
    public $frequency;

    /**
     * @description timed
     *
     * @var bool
     */
    public $timed;

    /**
     * @description status
     *
     * @var string
     */
    public $invokeStatus;

    /**
     * @description status2
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description parameters
     *
     * @var string
     */
    public $parameters;

    /**
     * @description itemLists
     *
     * @var invokeInstances
     */
    public $invokeInstances;
    protected $_name = [
        'invokeId'         => 'InvokeId',
        'creationTime'     => 'CreationTime',
        'commandId'        => 'CommandId',
        'commandType'      => 'CommandType',
        'commandName'      => 'CommandName',
        'commandContent'   => 'CommandContent',
        'frequency'        => 'Frequency',
        'timed'            => 'Timed',
        'invokeStatus'     => 'InvokeStatus',
        'invocationStatus' => 'InvocationStatus',
        'parameters'       => 'Parameters',
        'invokeInstances'  => 'InvokeInstances',
    ];

    public function validate()
    {
        Model::validateRequired('invokeId', $this->invokeId, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('commandId', $this->commandId, true);
        Model::validateRequired('commandType', $this->commandType, true);
        Model::validateRequired('commandName', $this->commandName, true);
        Model::validateRequired('commandContent', $this->commandContent, true);
        Model::validateRequired('frequency', $this->frequency, true);
        Model::validateRequired('timed', $this->timed, true);
        Model::validateRequired('invokeStatus', $this->invokeStatus, true);
        Model::validateRequired('invocationStatus', $this->invocationStatus, true);
        Model::validateRequired('parameters', $this->parameters, true);
        Model::validateRequired('invokeInstances', $this->invokeInstances, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }
        if (null !== $this->commandType) {
            $res['CommandType'] = $this->commandType;
        }
        if (null !== $this->commandName) {
            $res['CommandName'] = $this->commandName;
        }
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }
        if (null !== $this->timed) {
            $res['Timed'] = $this->timed;
        }
        if (null !== $this->invokeStatus) {
            $res['InvokeStatus'] = $this->invokeStatus;
        }
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->invokeInstances) {
            $res['InvokeInstances'] = null !== $this->invokeInstances ? $this->invokeInstances->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invocation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }
        if (isset($map['CommandType'])) {
            $model->commandType = $map['CommandType'];
        }
        if (isset($map['CommandName'])) {
            $model->commandName = $map['CommandName'];
        }
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }
        if (isset($map['Timed'])) {
            $model->timed = $map['Timed'];
        }
        if (isset($map['InvokeStatus'])) {
            $model->invokeStatus = $map['InvokeStatus'];
        }
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['InvokeInstances'])) {
            $model->invokeInstances = invokeInstances::fromMap($map['InvokeInstances']);
        }

        return $model;
    }
}
