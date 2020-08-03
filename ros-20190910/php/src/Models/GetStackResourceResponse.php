<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackResourceResponse extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $logicalResourceId;

    /**
     * @var array
     */
    public $metadata;

    /**
     * @var string
     */
    public $physicalResourceId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceType;

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
    public $statusReason;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $resourceDriftStatus;

    /**
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @var array
     */
    public $resourceAttributes;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'description'         => 'Description',
        'logicalResourceId'   => 'LogicalResourceId',
        'metadata'            => 'Metadata',
        'physicalResourceId'  => 'PhysicalResourceId',
        'requestId'           => 'RequestId',
        'resourceType'        => 'ResourceType',
        'stackId'             => 'StackId',
        'stackName'           => 'StackName',
        'status'              => 'Status',
        'statusReason'        => 'StatusReason',
        'updateTime'          => 'UpdateTime',
        'resourceDriftStatus' => 'ResourceDriftStatus',
        'driftDetectionTime'  => 'DriftDetectionTime',
        'resourceAttributes'  => 'ResourceAttributes',
    ];

    public function validate()
    {
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('logicalResourceId', $this->logicalResourceId, true);
        Model::validateRequired('metadata', $this->metadata, true);
        Model::validateRequired('physicalResourceId', $this->physicalResourceId, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('stackName', $this->stackName, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('statusReason', $this->statusReason, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('resourceDriftStatus', $this->resourceDriftStatus, true);
        Model::validateRequired('driftDetectionTime', $this->driftDetectionTime, true);
        Model::validateRequired('resourceAttributes', $this->resourceAttributes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->physicalResourceId) {
            $res['PhysicalResourceId'] = $this->physicalResourceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->resourceDriftStatus) {
            $res['ResourceDriftStatus'] = $this->resourceDriftStatus;
        }
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }
        if (null !== $this->resourceAttributes) {
            $res['ResourceAttributes'] = $this->resourceAttributes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackResourceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['PhysicalResourceId'])) {
            $model->physicalResourceId = $map['PhysicalResourceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
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
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ResourceDriftStatus'])) {
            $model->resourceDriftStatus = $map['ResourceDriftStatus'];
        }
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }
        if (isset($map['ResourceAttributes'])) {
            if (!empty($map['ResourceAttributes'])) {
                $model->resourceAttributes = $map['ResourceAttributes'];
            }
        }

        return $model;
    }
}
