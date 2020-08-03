<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetChangeSetResponse\parameters;
use AlibabaCloud\Tea\Model;

class GetChangeSetResponse extends Model
{
    /**
     * @var string
     */
    public $changeSetId;

    /**
     * @var string
     */
    public $changeSetName;

    /**
     * @var string
     */
    public $changeSetType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $disableRollback;

    /**
     * @var string
     */
    public $executionStatus;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $stackName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var array
     */
    public $parameters;

    /**
     * @var array
     */
    public $changes;
    protected $_name = [
        'changeSetId'      => 'ChangeSetId',
        'changeSetName'    => 'ChangeSetName',
        'changeSetType'    => 'ChangeSetType',
        'createTime'       => 'CreateTime',
        'description'      => 'Description',
        'disableRollback'  => 'DisableRollback',
        'executionStatus'  => 'ExecutionStatus',
        'regionId'         => 'RegionId',
        'requestId'        => 'RequestId',
        'stackId'          => 'StackId',
        'stackName'        => 'StackName',
        'status'           => 'Status',
        'templateBody'     => 'TemplateBody',
        'timeoutInMinutes' => 'TimeoutInMinutes',
        'statusReason'     => 'StatusReason',
        'parameters'       => 'Parameters',
        'changes'          => 'Changes',
    ];

    public function validate()
    {
        Model::validateRequired('changeSetId', $this->changeSetId, true);
        Model::validateRequired('changeSetName', $this->changeSetName, true);
        Model::validateRequired('changeSetType', $this->changeSetType, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('disableRollback', $this->disableRollback, true);
        Model::validateRequired('executionStatus', $this->executionStatus, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('stackName', $this->stackName, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('templateBody', $this->templateBody, true);
        Model::validateRequired('timeoutInMinutes', $this->timeoutInMinutes, true);
        Model::validateRequired('statusReason', $this->statusReason, true);
        Model::validateRequired('parameters', $this->parameters, true);
        Model::validateRequired('changes', $this->changes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeSetId) {
            $res['ChangeSetId'] = $this->changeSetId;
        }
        if (null !== $this->changeSetName) {
            $res['ChangeSetName'] = $this->changeSetName;
        }
        if (null !== $this->changeSetType) {
            $res['ChangeSetType'] = $this->changeSetType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->disableRollback) {
            $res['DisableRollback'] = $this->disableRollback;
        }
        if (null !== $this->executionStatus) {
            $res['ExecutionStatus'] = $this->executionStatus;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->changes) {
            $res['Changes'] = $this->changes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetChangeSetResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeSetId'])) {
            $model->changeSetId = $map['ChangeSetId'];
        }
        if (isset($map['ChangeSetName'])) {
            $model->changeSetName = $map['ChangeSetName'];
        }
        if (isset($map['ChangeSetType'])) {
            $model->changeSetType = $map['ChangeSetType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisableRollback'])) {
            $model->disableRollback = $map['DisableRollback'];
        }
        if (isset($map['ExecutionStatus'])) {
            $model->executionStatus = $map['ExecutionStatus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Changes'])) {
            if (!empty($map['Changes'])) {
                $model->changes = $map['Changes'];
            }
        }

        return $model;
    }
}
