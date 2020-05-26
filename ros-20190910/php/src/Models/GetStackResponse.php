<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponse\parameters;
use AlibabaCloud\Tea\Model;

class GetStackResponse extends Model
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
     * @description DisableRollback
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

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
     * @description TemplateDescription
     *
     * @var string
     */
    public $templateDescription;

    /**
     * @description TimeoutInMinutes
     *
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @description UpdateTime
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description ParentStackId
     *
     * @var string
     */
    public $parentStackId;

    /**
     * @description StackDriftStatus
     *
     * @var string
     */
    public $stackDriftStatus;

    /**
     * @description DriftDetectionTime
     *
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @description RoleName
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description DeletionProtection
     *
     * @var string
     */
    public $deletionProtection;

    /**
     * @description RootStackId
     *
     * @var string
     */
    public $rootStackId;

    /**
     * @description Parameters
     *
     * @var array
     */
    public $parameters;

    /**
     * @description Outputs
     *
     * @var array
     */
    public $outputs;

    /**
     * @description NotificationURLs
     *
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
        Model::validateRequired('parameters', $this->parameters, true);
        Model::validateRequired('outputs', $this->outputs, true);
        Model::validateRequired('notificationURLs', $this->notificationURLs, true);
    }

    public function toMap()
    {
        $res                        = [];
        $res['CreateTime']          = $this->createTime;
        $res['Description']         = $this->description;
        $res['DisableRollback']     = $this->disableRollback;
        $res['RegionId']            = $this->regionId;
        $res['RequestId']           = $this->requestId;
        $res['StackId']             = $this->stackId;
        $res['StackName']           = $this->stackName;
        $res['Status']              = $this->status;
        $res['StatusReason']        = $this->statusReason;
        $res['TemplateDescription'] = $this->templateDescription;
        $res['TimeoutInMinutes']    = $this->timeoutInMinutes;
        $res['UpdateTime']          = $this->updateTime;
        $res['ParentStackId']       = $this->parentStackId;
        $res['StackDriftStatus']    = $this->stackDriftStatus;
        $res['DriftDetectionTime']  = $this->driftDetectionTime;
        $res['RamRoleName']         = $this->ramRoleName;
        $res['DeletionProtection']  = $this->deletionProtection;
        $res['RootStackId']         = $this->rootStackId;
        $res['Parameters']          = [];
        if (null !== $this->parameters && \is_array($this->parameters)) {
            $n = 0;
            foreach ($this->parameters as $item) {
                $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Outputs'] = [];
        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }
        $res['NotificationURLs'] = [];
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
                $model->outputs = [];
                $model->outputs = $map['Outputs'];
            }
        }
        if (isset($map['NotificationURLs'])) {
            if (!empty($map['NotificationURLs'])) {
                $model->notificationURLs = [];
                $model->notificationURLs = $map['NotificationURLs'];
            }
        }

        return $model;
    }
}
