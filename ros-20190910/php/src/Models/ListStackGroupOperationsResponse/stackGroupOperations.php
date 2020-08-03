<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationsResponse;

use AlibabaCloud\Tea\Model;

class stackGroupOperations extends Model
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
    protected $_name = [
        'stackGroupName'       => 'StackGroupName',
        'stackGroupId'         => 'StackGroupId',
        'operationId'          => 'OperationId',
        'operationDescription' => 'OperationDescription',
        'createTime'           => 'CreateTime',
        'endTime'              => 'EndTime',
        'action'               => 'Action',
        'status'               => 'Status',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackGroupOperations
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

        return $model;
    }
}
