<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponse;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponse\stackGroupOperation\operationPreferences;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponse\stackGroupOperation\stackGroupDriftDetectionDetail;
use AlibabaCloud\Tea\Model;

class stackGroupOperation extends Model
{
    /**
     * @var string
     */
    public $stackGroupName;

    /**
     * @var string
     */
    public $stackGroupId;

    /**
     * @var string
     */
    public $operationId;

    /**
     * @var string
     */
    public $operationDescription;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $retainStacks;

    /**
     * @var string
     */
    public $administratorRoleName;

    /**
     * @var string
     */
    public $executionRoleName;

    /**
     * @var operationPreferences
     */
    public $operationPreferences;

    /**
     * @var stackGroupDriftDetectionDetail
     */
    public $stackGroupDriftDetectionDetail;
    protected $_name = [
        'stackGroupName'                 => 'StackGroupName',
        'stackGroupId'                   => 'StackGroupId',
        'operationId'                    => 'OperationId',
        'operationDescription'           => 'OperationDescription',
        'createTime'                     => 'CreateTime',
        'endTime'                        => 'EndTime',
        'action'                         => 'Action',
        'status'                         => 'Status',
        'retainStacks'                   => 'RetainStacks',
        'administratorRoleName'          => 'AdministratorRoleName',
        'executionRoleName'              => 'ExecutionRoleName',
        'operationPreferences'           => 'OperationPreferences',
        'stackGroupDriftDetectionDetail' => 'StackGroupDriftDetectionDetail',
    ];

    public function validate()
    {
        Model::validateRequired('stackGroupName', $this->stackGroupName, true);
        Model::validateRequired('stackGroupId', $this->stackGroupId, true);
        Model::validateRequired('operationId', $this->operationId, true);
        Model::validateRequired('operationDescription', $this->operationDescription, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('action', $this->action, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('retainStacks', $this->retainStacks, true);
        Model::validateRequired('administratorRoleName', $this->administratorRoleName, true);
        Model::validateRequired('executionRoleName', $this->executionRoleName, true);
        Model::validateRequired('operationPreferences', $this->operationPreferences, true);
        Model::validateRequired('stackGroupDriftDetectionDetail', $this->stackGroupDriftDetectionDetail, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->stackGroupId) {
            $res['StackGroupId'] = $this->stackGroupId;
        }
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->operationDescription) {
            $res['OperationDescription'] = $this->operationDescription;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->retainStacks) {
            $res['RetainStacks'] = $this->retainStacks;
        }
        if (null !== $this->administratorRoleName) {
            $res['AdministratorRoleName'] = $this->administratorRoleName;
        }
        if (null !== $this->executionRoleName) {
            $res['ExecutionRoleName'] = $this->executionRoleName;
        }
        if (null !== $this->operationPreferences) {
            $res['OperationPreferences'] = null !== $this->operationPreferences ? $this->operationPreferences->toMap() : null;
        }
        if (null !== $this->stackGroupDriftDetectionDetail) {
            $res['StackGroupDriftDetectionDetail'] = null !== $this->stackGroupDriftDetectionDetail ? $this->stackGroupDriftDetectionDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackGroupOperation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['StackGroupId'])) {
            $model->stackGroupId = $map['StackGroupId'];
        }
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['OperationDescription'])) {
            $model->operationDescription = $map['OperationDescription'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RetainStacks'])) {
            $model->retainStacks = $map['RetainStacks'];
        }
        if (isset($map['AdministratorRoleName'])) {
            $model->administratorRoleName = $map['AdministratorRoleName'];
        }
        if (isset($map['ExecutionRoleName'])) {
            $model->executionRoleName = $map['ExecutionRoleName'];
        }
        if (isset($map['OperationPreferences'])) {
            $model->operationPreferences = operationPreferences::fromMap($map['OperationPreferences']);
        }
        if (isset($map['StackGroupDriftDetectionDetail'])) {
            $model->stackGroupDriftDetectionDetail = stackGroupDriftDetectionDetail::fromMap($map['StackGroupDriftDetectionDetail']);
        }

        return $model;
    }
}
