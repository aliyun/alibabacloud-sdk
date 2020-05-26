<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetChangeSetResponse\parameters;
use AlibabaCloud\Tea\Model;

class GetChangeSetResponse extends Model
{
    /**
     * @description ChangeSetId
     *
     * @var string
     */
    public $changeSetId;

    /**
     * @description ChangeSetName
     *
     * @var string
     */
    public $changeSetName;

    /**
     * @description ChangeSetType
     *
     * @var string
     */
    public $changeSetType;

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
     * @description ExecutionStatus
     *
     * @var string
     */
    public $executionStatus;

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
     * @description TemplateBody
     *
     * @var string
     */
    public $templateBody;

    /**
     * @description TimeoutInMinutes
     *
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @description Parameters
     *
     * @var array
     */
    public $parameters;

    /**
     * @description Changes
     *
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
        Model::validateRequired('parameters', $this->parameters, true);
        Model::validateRequired('changes', $this->changes, true);
    }

    public function toMap()
    {
        $res                     = [];
        $res['ChangeSetId']      = $this->changeSetId;
        $res['ChangeSetName']    = $this->changeSetName;
        $res['ChangeSetType']    = $this->changeSetType;
        $res['CreateTime']       = $this->createTime;
        $res['Description']      = $this->description;
        $res['DisableRollback']  = $this->disableRollback;
        $res['ExecutionStatus']  = $this->executionStatus;
        $res['RegionId']         = $this->regionId;
        $res['RequestId']        = $this->requestId;
        $res['StackId']          = $this->stackId;
        $res['StackName']        = $this->stackName;
        $res['Status']           = $this->status;
        $res['TemplateBody']     = $this->templateBody;
        $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        $res['Parameters']       = [];
        if (null !== $this->parameters && \is_array($this->parameters)) {
            $n = 0;
            foreach ($this->parameters as $item) {
                $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Changes'] = [];
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
                $model->changes = [];
                $model->changes = $map['Changes'];
            }
        }

        return $model;
    }
}
