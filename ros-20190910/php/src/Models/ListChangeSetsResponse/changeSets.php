<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListChangeSetsResponse;

use AlibabaCloud\Tea\Model;

class changeSets extends Model
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
    protected $_name = [
        'changeSetId'     => 'ChangeSetId',
        'changeSetName'   => 'ChangeSetName',
        'changeSetType'   => 'ChangeSetType',
        'createTime'      => 'CreateTime',
        'description'     => 'Description',
        'executionStatus' => 'ExecutionStatus',
        'regionId'        => 'RegionId',
        'stackId'         => 'StackId',
        'stackName'       => 'StackName',
        'status'          => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('changeSetId', $this->changeSetId, true);
        Model::validateRequired('changeSetName', $this->changeSetName, true);
        Model::validateRequired('changeSetType', $this->changeSetType, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('executionStatus', $this->executionStatus, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('stackName', $this->stackName, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res                    = [];
        $res['ChangeSetId']     = $this->changeSetId;
        $res['ChangeSetName']   = $this->changeSetName;
        $res['ChangeSetType']   = $this->changeSetType;
        $res['CreateTime']      = $this->createTime;
        $res['Description']     = $this->description;
        $res['ExecutionStatus'] = $this->executionStatus;
        $res['RegionId']        = $this->regionId;
        $res['StackId']         = $this->stackId;
        $res['StackName']       = $this->stackName;
        $res['Status']          = $this->status;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeSets
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
        if (isset($map['ExecutionStatus'])) {
            $model->executionStatus = $map['ExecutionStatus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        return $model;
    }
}
