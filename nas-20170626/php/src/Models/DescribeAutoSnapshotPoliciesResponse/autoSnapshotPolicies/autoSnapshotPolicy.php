<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotPoliciesResponse\autoSnapshotPolicies;

use AlibabaCloud\Tea\Model;

class autoSnapshotPolicy extends Model
{
    /**
     * @description autoSnapshotPolicyId
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description autoSnapshotPolicyName
     *
     * @var string
     */
    public $autoSnapshotPolicyName;

    /**
     * @description createTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description fileSystemNums
     *
     * @var int
     */
    public $fileSystemNums;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description repeatWeekdays
     *
     * @var string
     */
    public $repeatWeekdays;

    /**
     * @description retentionDays
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description timePoints
     *
     * @var string
     */
    public $timePoints;
    protected $_name = [
        'autoSnapshotPolicyId'   => 'AutoSnapshotPolicyId',
        'autoSnapshotPolicyName' => 'AutoSnapshotPolicyName',
        'createTime'             => 'CreateTime',
        'fileSystemNums'         => 'FileSystemNums',
        'regionId'               => 'RegionId',
        'repeatWeekdays'         => 'RepeatWeekdays',
        'retentionDays'          => 'RetentionDays',
        'status'                 => 'Status',
        'timePoints'             => 'TimePoints',
    ];

    public function validate()
    {
        Model::validateRequired('autoSnapshotPolicyId', $this->autoSnapshotPolicyId, true);
        Model::validateRequired('autoSnapshotPolicyName', $this->autoSnapshotPolicyName, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('fileSystemNums', $this->fileSystemNums, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('repeatWeekdays', $this->repeatWeekdays, true);
        Model::validateRequired('retentionDays', $this->retentionDays, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('timePoints', $this->timePoints, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }
        if (null !== $this->autoSnapshotPolicyName) {
            $res['AutoSnapshotPolicyName'] = $this->autoSnapshotPolicyName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->fileSystemNums) {
            $res['FileSystemNums'] = $this->fileSystemNums;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repeatWeekdays) {
            $res['RepeatWeekdays'] = $this->repeatWeekdays;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timePoints) {
            $res['TimePoints'] = $this->timePoints;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoSnapshotPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        if (isset($map['AutoSnapshotPolicyName'])) {
            $model->autoSnapshotPolicyName = $map['AutoSnapshotPolicyName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FileSystemNums'])) {
            $model->fileSystemNums = $map['FileSystemNums'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepeatWeekdays'])) {
            $model->repeatWeekdays = $map['RepeatWeekdays'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimePoints'])) {
            $model->timePoints = $map['TimePoints'];
        }

        return $model;
    }
}
