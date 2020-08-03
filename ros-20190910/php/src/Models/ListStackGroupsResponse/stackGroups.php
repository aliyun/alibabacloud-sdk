<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupsResponse;

use AlibabaCloud\Tea\Model;

class stackGroups extends Model
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
    public $status;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @var string
     */
    public $stackGroupDriftStatus;
    protected $_name = [
        'stackGroupName'        => 'StackGroupName',
        'stackGroupId'          => 'StackGroupId',
        'status'                => 'Status',
        'description'           => 'Description',
        'driftDetectionTime'    => 'DriftDetectionTime',
        'stackGroupDriftStatus' => 'StackGroupDriftStatus',
    ];

    public function validate()
    {
        Model::validateRequired('stackGroupName', $this->stackGroupName, true);
        Model::validateRequired('stackGroupId', $this->stackGroupId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('driftDetectionTime', $this->driftDetectionTime, true);
        Model::validateRequired('stackGroupDriftStatus', $this->stackGroupDriftStatus, true);
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }
        if (null !== $this->stackGroupDriftStatus) {
            $res['StackGroupDriftStatus'] = $this->stackGroupDriftStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackGroups
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }
        if (isset($map['StackGroupDriftStatus'])) {
            $model->stackGroupDriftStatus = $map['StackGroupDriftStatus'];
        }

        return $model;
    }
}
