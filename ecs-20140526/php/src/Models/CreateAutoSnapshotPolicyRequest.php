<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoSnapshotPolicyRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateAutoSnapshotPolicyRequest extends Model
{
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
     * @var array
     */
    public $tag;
    protected $_name = [
        'regionId'                     => 'regionId',
        'autoSnapshotPolicyName'       => 'autoSnapshotPolicyName',
        'timePoints'                   => 'timePoints',
        'repeatWeekdays'               => 'repeatWeekdays',
        'retentionDays'                => 'retentionDays',
        'enableCrossRegionCopy'        => 'EnableCrossRegionCopy',
        'targetCopyRegions'            => 'TargetCopyRegions',
        'copiedSnapshotsRetentionDays' => 'CopiedSnapshotsRetentionDays',
        'tag'                          => 'Tag',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('timePoints', $this->timePoints, true);
        Model::validateRequired('repeatWeekdays', $this->repeatWeekdays, true);
        Model::validateRequired('retentionDays', $this->retentionDays, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAutoSnapshotPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
