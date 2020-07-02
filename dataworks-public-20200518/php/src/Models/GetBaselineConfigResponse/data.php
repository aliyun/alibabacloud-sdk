<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineConfigResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description baselineId
     *
     * @var int
     */
    public $baselineId;

    /**
     * @description priority
     *
     * @var int
     */
    public $priority;

    /**
     * @description baselineName
     *
     * @var string
     */
    public $baselineName;

    /**
     * @description owner
     *
     * @var string
     */
    public $owner;

    /**
     * @description projectId
     *
     * @var int
     */
    public $projectId;

    /**
     * @description useFlag
     *
     * @var bool
     */
    public $useFlag;

    /**
     * @description baselineType
     *
     * @var string
     */
    public $baselineType;

    /**
     * @description expHour
     *
     * @var int
     */
    public $expHour;

    /**
     * @description expMinu
     *
     * @var int
     */
    public $expMinu;

    /**
     * @description slaHour
     *
     * @var int
     */
    public $slaHour;

    /**
     * @description slaMinu
     *
     * @var int
     */
    public $slaMinu;

    /**
     * @description hourExpDetail
     *
     * @var string
     */
    public $hourExpDetail;

    /**
     * @description hourSlaDetail
     *
     * @var string
     */
    public $hourSlaDetail;

    /**
     * @description isDefault
     *
     * @var bool
     */
    public $isDefault;
    protected $_name = [
        'baselineId'    => 'BaselineId',
        'priority'      => 'Priority',
        'baselineName'  => 'BaselineName',
        'owner'         => 'Owner',
        'projectId'     => 'ProjectId',
        'useFlag'       => 'UseFlag',
        'baselineType'  => 'BaselineType',
        'expHour'       => 'ExpHour',
        'expMinu'       => 'ExpMinu',
        'slaHour'       => 'SlaHour',
        'slaMinu'       => 'SlaMinu',
        'hourExpDetail' => 'HourExpDetail',
        'hourSlaDetail' => 'HourSlaDetail',
        'isDefault'     => 'IsDefault',
    ];

    public function validate()
    {
        Model::validateRequired('baselineId', $this->baselineId, true);
        Model::validateRequired('priority', $this->priority, true);
        Model::validateRequired('baselineName', $this->baselineName, true);
        Model::validateRequired('owner', $this->owner, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('useFlag', $this->useFlag, true);
        Model::validateRequired('baselineType', $this->baselineType, true);
        Model::validateRequired('expHour', $this->expHour, true);
        Model::validateRequired('expMinu', $this->expMinu, true);
        Model::validateRequired('slaHour', $this->slaHour, true);
        Model::validateRequired('slaMinu', $this->slaMinu, true);
        Model::validateRequired('hourExpDetail', $this->hourExpDetail, true);
        Model::validateRequired('hourSlaDetail', $this->hourSlaDetail, true);
        Model::validateRequired('isDefault', $this->isDefault, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->useFlag) {
            $res['UseFlag'] = $this->useFlag;
        }
        if (null !== $this->baselineType) {
            $res['BaselineType'] = $this->baselineType;
        }
        if (null !== $this->expHour) {
            $res['ExpHour'] = $this->expHour;
        }
        if (null !== $this->expMinu) {
            $res['ExpMinu'] = $this->expMinu;
        }
        if (null !== $this->slaHour) {
            $res['SlaHour'] = $this->slaHour;
        }
        if (null !== $this->slaMinu) {
            $res['SlaMinu'] = $this->slaMinu;
        }
        if (null !== $this->hourExpDetail) {
            $res['HourExpDetail'] = $this->hourExpDetail;
        }
        if (null !== $this->hourSlaDetail) {
            $res['HourSlaDetail'] = $this->hourSlaDetail;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['UseFlag'])) {
            $model->useFlag = $map['UseFlag'];
        }
        if (isset($map['BaselineType'])) {
            $model->baselineType = $map['BaselineType'];
        }
        if (isset($map['ExpHour'])) {
            $model->expHour = $map['ExpHour'];
        }
        if (isset($map['ExpMinu'])) {
            $model->expMinu = $map['ExpMinu'];
        }
        if (isset($map['SlaHour'])) {
            $model->slaHour = $map['SlaHour'];
        }
        if (isset($map['SlaMinu'])) {
            $model->slaMinu = $map['SlaMinu'];
        }
        if (isset($map['HourExpDetail'])) {
            $model->hourExpDetail = $map['HourExpDetail'];
        }
        if (isset($map['HourSlaDetail'])) {
            $model->hourSlaDetail = $map['HourSlaDetail'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        return $model;
    }
}
