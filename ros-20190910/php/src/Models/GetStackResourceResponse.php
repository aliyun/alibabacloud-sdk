<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackResourceResponse extends Model
{
    /**
     * @description CreateTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Description
     *
     * @var string
     */
    public $description;

    /**
     * @description LogicalResourceId
     *
     * @var string
     */
    public $logicalResourceId;

    /**
     * @description Metadata
     *
     * @var array
     */
    public $metadata;

    /**
     * @description PhysicalResourceId
     *
     * @var string
     */
    public $physicalResourceId;

    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description ResourceType
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description StackId
     *
     * @var string
     */
    public $stackId;

    /**
     * @description StackName
     *
     * @var string
     */
    public $stackName;

    /**
     * @description Status
     *
     * @var string
     */
    public $status;

    /**
     * @description StatusReason
     *
     * @var string
     */
    public $statusReason;

    /**
     * @description UpdateTime
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description ResourceDriftStatus
     *
     * @var string
     */
    public $resourceDriftStatus;

    /**
     * @description DriftDetectionTime
     *
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @description ResourceAttributes
     *
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
        $res                        = [];
        $res['CreateTime']          = $this->createTime;
        $res['Description']         = $this->description;
        $res['LogicalResourceId']   = $this->logicalResourceId;
        $res['Metadata']            = $this->metadata;
        $res['PhysicalResourceId']  = $this->physicalResourceId;
        $res['RequestId']           = $this->requestId;
        $res['ResourceType']        = $this->resourceType;
        $res['StackId']             = $this->stackId;
        $res['StackName']           = $this->stackName;
        $res['Status']              = $this->status;
        $res['StatusReason']        = $this->statusReason;
        $res['UpdateTime']          = $this->updateTime;
        $res['ResourceDriftStatus'] = $this->resourceDriftStatus;
        $res['DriftDetectionTime']  = $this->driftDetectionTime;
        $res['ResourceAttributes']  = [];
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
                $model->resourceAttributes = [];
                $model->resourceAttributes = $map['ResourceAttributes'];
            }
        }

        return $model;
    }
}
