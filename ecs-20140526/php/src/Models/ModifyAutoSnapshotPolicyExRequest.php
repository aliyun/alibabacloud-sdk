<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyAutoSnapshotPolicyExRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $autoSnapshotPolicyId;

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
    protected $_name = [
        'regionId'                     => 'regionId',
        'autoSnapshotPolicyId'         => 'autoSnapshotPolicyId',
        'autoSnapshotPolicyName'       => 'autoSnapshotPolicyName',
        'timePoints'                   => 'timePoints',
        'repeatWeekdays'               => 'repeatWeekdays',
        'retentionDays'                => 'retentionDays',
        'enableCrossRegionCopy'        => 'EnableCrossRegionCopy',
        'targetCopyRegions'            => 'TargetCopyRegions',
        'copiedSnapshotsRetentionDays' => 'CopiedSnapshotsRetentionDays',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('autoSnapshotPolicyId', $this->autoSnapshotPolicyId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->autoSnapshotPolicyId) {
            $res['autoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }
        if (null !== $this->autoSnapshotPolicyName) {
            $res['autoSnapshotPolicyName'] = $this->autoSnapshotPolicyName;
        }
        if (null !== $this->timePoints) {
            $res['timePoints'] = $this->timePoints;
        }
        if (null !== $this->repeatWeekdays) {
            $res['repeatWeekdays'] = $this->repeatWeekdays;
        }
        if (null !== $this->retentionDays) {
            $res['retentionDays'] = $this->retentionDays;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAutoSnapshotPolicyExRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['autoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['autoSnapshotPolicyId'];
        }
        if (isset($map['autoSnapshotPolicyName'])) {
            $model->autoSnapshotPolicyName = $map['autoSnapshotPolicyName'];
        }
        if (isset($map['timePoints'])) {
            $model->timePoints = $map['timePoints'];
        }
        if (isset($map['repeatWeekdays'])) {
            $model->repeatWeekdays = $map['repeatWeekdays'];
        }
        if (isset($map['retentionDays'])) {
            $model->retentionDays = $map['retentionDays'];
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

        return $model;
    }
}
