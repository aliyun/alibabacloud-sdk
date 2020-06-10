<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponse\autoProvisioningGroupHistories;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponse\autoProvisioningGroupHistories\autoProvisioningGroupHistory\activityDetails;
use AlibabaCloud\Tea\Model;

class autoProvisioningGroupHistory extends Model
{
    /**
     * @description taskId
     *
     * @var string
     */
    public $taskId;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description lastEventTime
     *
     * @var string
     */
    public $lastEventTime;

    /**
     * @description startTime
     *
     * @var string
     */
    public $startTime;

    /**
     * @description activityDetails
     *
     * @var activityDetails
     */
    public $activityDetails;
    protected $_name = [
        'taskId'          => 'TaskId',
        'status'          => 'Status',
        'lastEventTime'   => 'LastEventTime',
        'startTime'       => 'StartTime',
        'activityDetails' => 'ActivityDetails',
    ];

    public function validate()
    {
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('lastEventTime', $this->lastEventTime, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('activityDetails', $this->activityDetails, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->lastEventTime) {
            $res['LastEventTime'] = $this->lastEventTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->activityDetails) {
            $res['ActivityDetails'] = null !== $this->activityDetails ? $this->activityDetails->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoProvisioningGroupHistory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['LastEventTime'])) {
            $model->lastEventTime = $map['LastEventTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ActivityDetails'])) {
            $model->activityDetails = activityDetails::fromMap($map['ActivityDetails']);
        }

        return $model;
    }
}
