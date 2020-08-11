<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyExResponse\autoSnapshotPolicies;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyExResponse\autoSnapshotPolicies\autoSnapshotPolicy\tags;
use AlibabaCloud\Tea\Model;

class autoSnapshotPolicy extends Model
{
    /**
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $autoSnapshotPolicyName;

    /**
     * @var string
     */
    public $timePoints;

    /**
     * @var string
     */
    public $repeatWeekdays;

    /**
     * @var int
     */
    public $retentionDays;

    /**
     * @var int
     */
    public $diskNums;

    /**
     * @var int
     */
    public $volumeNums;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $enableCrossRegionCopy;

    /**
     * @var string
     */
    public $targetCopyRegions;

    /**
     * @var int
     */
    public $copiedSnapshotsRetentionDays;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'autoSnapshotPolicyId'         => 'AutoSnapshotPolicyId',
        'regionId'                     => 'RegionId',
        'autoSnapshotPolicyName'       => 'AutoSnapshotPolicyName',
        'timePoints'                   => 'TimePoints',
        'repeatWeekdays'               => 'RepeatWeekdays',
        'retentionDays'                => 'RetentionDays',
        'diskNums'                     => 'DiskNums',
        'volumeNums'                   => 'VolumeNums',
        'creationTime'                 => 'CreationTime',
        'status'                       => 'Status',
        'enableCrossRegionCopy'        => 'EnableCrossRegionCopy',
        'targetCopyRegions'            => 'TargetCopyRegions',
        'copiedSnapshotsRetentionDays' => 'CopiedSnapshotsRetentionDays',
        'tags'                         => 'Tags',
    ];

    public function validate()
    {
        Model::validateRequired('autoSnapshotPolicyId', $this->autoSnapshotPolicyId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('autoSnapshotPolicyName', $this->autoSnapshotPolicyName, true);
        Model::validateRequired('timePoints', $this->timePoints, true);
        Model::validateRequired('repeatWeekdays', $this->repeatWeekdays, true);
        Model::validateRequired('retentionDays', $this->retentionDays, true);
        Model::validateRequired('diskNums', $this->diskNums, true);
        Model::validateRequired('volumeNums', $this->volumeNums, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('enableCrossRegionCopy', $this->enableCrossRegionCopy, true);
        Model::validateRequired('targetCopyRegions', $this->targetCopyRegions, true);
        Model::validateRequired('copiedSnapshotsRetentionDays', $this->copiedSnapshotsRetentionDays, true);
        Model::validateRequired('tags', $this->tags, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->autoSnapshotPolicyName) {
            $res['AutoSnapshotPolicyName'] = $this->autoSnapshotPolicyName;
        }
        if (null !== $this->timePoints) {
            $res['TimePoints'] = $this->timePoints;
        }
        if (null !== $this->repeatWeekdays) {
            $res['RepeatWeekdays'] = $this->repeatWeekdays;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->diskNums) {
            $res['DiskNums'] = $this->diskNums;
        }
        if (null !== $this->volumeNums) {
            $res['VolumeNums'] = $this->volumeNums;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->enableCrossRegionCopy) {
            $res['EnableCrossRegionCopy'] = $this->enableCrossRegionCopy;
        }
        if (null !== $this->targetCopyRegions) {
            $res['TargetCopyRegions'] = $this->targetCopyRegions;
        }
        if (null !== $this->copiedSnapshotsRetentionDays) {
            $res['CopiedSnapshotsRetentionDays'] = $this->copiedSnapshotsRetentionDays;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AutoSnapshotPolicyName'])) {
            $model->autoSnapshotPolicyName = $map['AutoSnapshotPolicyName'];
        }
        if (isset($map['TimePoints'])) {
            $model->timePoints = $map['TimePoints'];
        }
        if (isset($map['RepeatWeekdays'])) {
            $model->repeatWeekdays = $map['RepeatWeekdays'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['DiskNums'])) {
            $model->diskNums = $map['DiskNums'];
        }
        if (isset($map['VolumeNums'])) {
            $model->volumeNums = $map['VolumeNums'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['EnableCrossRegionCopy'])) {
            $model->enableCrossRegionCopy = $map['EnableCrossRegionCopy'];
        }
        if (isset($map['TargetCopyRegions'])) {
            $model->targetCopyRegions = $map['TargetCopyRegions'];
        }
        if (isset($map['CopiedSnapshotsRetentionDays'])) {
            $model->copiedSnapshotsRetentionDays = $map['CopiedSnapshotsRetentionDays'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
