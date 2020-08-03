<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponse\parameters;
use AlibabaCloud\Tea\Model;

class GetStackResponse extends Model
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
     * @var bool
     */
    public $disableRollback;

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
    public $statusReason;

    /**
     * @var string
     */
    public $templateDescription;

    /**
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $parentStackId;

    /**
     * @var string
     */
    public $stackDriftStatus;

    /**
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var string
     */
    public $deletionProtection;

    /**
     * @var string
     */
    public $rootStackId;

    /**
     * @var string
     */
    public $stackType;

    /**
     * @var array
     */
    public $parameters;

    /**
     * @var array
     */
    public $outputs;

    /**
     * @var array
     */
    public $notificationURLs;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'description'         => 'Description',
        'disableRollback'     => 'DisableRollback',
        'regionId'            => 'RegionId',
        'requestId'           => 'RequestId',
        'stackId'             => 'StackId',
        'stackName'           => 'StackName',
        'status'              => 'Status',
        'statusReason'        => 'StatusReason',
        'templateDescription' => 'TemplateDescription',
        'timeoutInMinutes'    => 'TimeoutInMinutes',
        'updateTime'          => 'UpdateTime',
        'parentStackId'       => 'ParentStackId',
        'stackDriftStatus'    => 'StackDriftStatus',
        'driftDetectionTime'  => 'DriftDetectionTime',
        'ramRoleName'         => 'RamRoleName',
        'deletionProtection'  => 'DeletionProtection',
        'rootStackId'         => 'RootStackId',
        'stackType'           => 'StackType',
        'parameters'          => 'Parameters',
        'outputs'             => 'Outputs',
        'notificationURLs'    => 'NotificationURLs',
    ];

    public function validate()
    {
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('disableRollback', $this->disableRollback, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('stackName', $this->stackName, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('statusReason', $this->statusReason, true);
        Model::validateRequired('templateDescription', $this->templateDescription, true);
        Model::validateRequired('timeoutInMinutes', $this->timeoutInMinutes, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('parentStackId', $this->parentStackId, true);
        Model::validateRequired('stackDriftStatus', $this->stackDriftStatus, true);
        Model::validateRequired('driftDetectionTime', $this->driftDetectionTime, true);
        Model::validateRequired('ramRoleName', $this->ramRoleName, true);
        Model::validateRequired('deletionProtection', $this->deletionProtection, true);
        Model::validateRequired('rootStackId', $this->rootStackId, true);
        Model::validateRequired('stackType', $this->stackType, true);
        Model::validateRequired('parameters', $this->parameters, true);
        Model::validateRequired('outputs', $this->outputs, true);
        Model::validateRequired('notificationURLs', $this->notificationURLs, true);
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
        if (null !== $this->disableRollback) {
            $res['DisableRollback'] = $this->disableRollback;
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
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }
        if (null !== $this->templateDescription) {
            $res['TemplateDescription'] = $this->templateDescription;
        }
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->parentStackId) {
            $res['ParentStackId'] = $this->parentStackId;
        }
        if (null !== $this->stackDriftStatus) {
            $res['StackDriftStatus'] = $this->stackDriftStatus;
        }
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->rootStackId) {
            $res['RootStackId'] = $this->rootStackId;
        }
        if (null !== $this->stackType) {
            $res['StackType'] = $this->stackType;
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
        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }
        if (null !== $this->notificationURLs) {
            $res['NotificationURLs'] = $this->notificationURLs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackResponse
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
        if (isset($map['DisableRollback'])) {
            $model->disableRollback = $map['DisableRollback'];
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
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }
        if (isset($map['TemplateDescription'])) {
            $model->templateDescription = $map['TemplateDescription'];
        }
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ParentStackId'])) {
            $model->parentStackId = $map['ParentStackId'];
        }
        if (isset($map['StackDriftStatus'])) {
            $model->stackDriftStatus = $map['StackDriftStatus'];
        }
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['RootStackId'])) {
            $model->rootStackId = $map['RootStackId'];
        }
        if (isset($map['StackType'])) {
            $model->stackType = $map['StackType'];
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
        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = $map['Outputs'];
            }
        }
        if (isset($map['NotificationURLs'])) {
            if (!empty($map['NotificationURLs'])) {
                $model->notificationURLs = $map['NotificationURLs'];
            }
        }

        return $model;
    }
}
