<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ModifyAutoSnapshotPolicyRequest extends Model {
    protected $_name = [
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'autoSnapshotPolicyName' => 'AutoSnapshotPolicyName',
        'repeatWeekdays' => 'RepeatWeekdays',
        'retentionDays' => 'RetentionDays',
        'timePoints' => 'TimePoints',
    ];
    public function validate() {
        Model::validateRequired('autoSnapshotPolicyId', $this->autoSnapshotPolicyId, true);
    }
    public function toMap() {
        $res = [];
        $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        $res['AutoSnapshotPolicyName'] = $this->autoSnapshotPolicyName;
        $res['RepeatWeekdays'] = $this->repeatWeekdays;
        $res['RetentionDays'] = $this->retentionDays;
        $res['TimePoints'] = $this->timePoints;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyAutoSnapshotPolicyRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AutoSnapshotPolicyId'])){
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        if(isset($map['AutoSnapshotPolicyName'])){
            $model->autoSnapshotPolicyName = $map['AutoSnapshotPolicyName'];
        }
        if(isset($map['RepeatWeekdays'])){
            $model->repeatWeekdays = $map['RepeatWeekdays'];
        }
        if(isset($map['RetentionDays'])){
            $model->retentionDays = $map['RetentionDays'];
        }
        if(isset($map['TimePoints'])){
            $model->timePoints = $map['TimePoints'];
        }
        return $model;
    }
    /**
     * @description autoSnapshotPolicyId
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description autoSnapshotPolicyName
     * @var string
     */
    public $autoSnapshotPolicyName;

    /**
     * @description repeatWeekdays
     * @var string
     */
    public $repeatWeekdays;

    /**
     * @description retentionDays
     * @var integer
     */
    public $retentionDays;

    /**
     * @description timePoints
     * @var string
     */
    public $timePoints;

}
