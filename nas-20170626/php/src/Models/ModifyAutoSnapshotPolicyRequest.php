<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ModifyAutoSnapshotPolicyRequest extends Model
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
     * @description timePoints
     *
     * @var string
     */
    public $timePoints;
    protected $_name = [
        'autoSnapshotPolicyId'   => 'AutoSnapshotPolicyId',
        'autoSnapshotPolicyName' => 'AutoSnapshotPolicyName',
        'repeatWeekdays'         => 'RepeatWeekdays',
        'retentionDays'          => 'RetentionDays',
        'timePoints'             => 'TimePoints',
    ];

    public function validate()
    {
        Model::validateRequired('autoSnapshotPolicyId', $this->autoSnapshotPolicyId, true);
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
        if (null !== $this->repeatWeekdays) {
            $res['RepeatWeekdays'] = $this->repeatWeekdays;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->timePoints) {
            $res['TimePoints'] = $this->timePoints;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAutoSnapshotPolicyRequest
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
        if (isset($map['RepeatWeekdays'])) {
            $model->repeatWeekdays = $map['RepeatWeekdays'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['TimePoints'])) {
            $model->timePoints = $map['TimePoints'];
        }

        return $model;
    }
}
