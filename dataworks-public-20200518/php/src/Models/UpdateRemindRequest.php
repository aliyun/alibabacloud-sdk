<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateRemindRequest extends Model
{
    /**
     * @description remindId
     *
     * @var int
     */
    public $remindId;

    /**
     * @description remindName
     *
     * @var string
     */
    public $remindName;

    /**
     * @description dndEnd
     *
     * @var string
     */
    public $dndEnd;

    /**
     * @description remindUnit
     *
     * @var string
     */
    public $remindUnit;

    /**
     * @description nodeIds
     *
     * @var string
     */
    public $nodeIds;

    /**
     * @description baselineIds
     *
     * @var string
     */
    public $baselineIds;

    /**
     * @description projectId
     *
     * @var int
     */
    public $projectId;

    /**
     * @description bizProcessIds
     *
     * @var string
     */
    public $bizProcessIds;

    /**
     * @description remindType
     *
     * @var string
     */
    public $remindType;

    /**
     * @description maxAlertTimes
     *
     * @var int
     */
    public $maxAlertTimes;

    /**
     * @description alertInterval
     *
     * @var int
     */
    public $alertInterval;

    /**
     * @description detail
     *
     * @var string
     */
    public $detail;

    /**
     * @description alertUnit
     *
     * @var string
     */
    public $alertUnit;

    /**
     * @description alertMethods
     *
     * @var string
     */
    public $alertMethods;

    /**
     * @description alertTargets
     *
     * @var string
     */
    public $alertTargets;

    /**
     * @description useFlag
     *
     * @var bool
     */
    public $useFlag;

    /**
     * @description robotUrls
     *
     * @var string
     */
    public $robotUrls;
    protected $_name = [
        'remindId'      => 'RemindId',
        'remindName'    => 'RemindName',
        'dndEnd'        => 'DndEnd',
        'remindUnit'    => 'RemindUnit',
        'nodeIds'       => 'NodeIds',
        'baselineIds'   => 'BaselineIds',
        'projectId'     => 'ProjectId',
        'bizProcessIds' => 'BizProcessIds',
        'remindType'    => 'RemindType',
        'maxAlertTimes' => 'MaxAlertTimes',
        'alertInterval' => 'AlertInterval',
        'detail'        => 'Detail',
        'alertUnit'     => 'AlertUnit',
        'alertMethods'  => 'AlertMethods',
        'alertTargets'  => 'AlertTargets',
        'useFlag'       => 'UseFlag',
        'robotUrls'     => 'RobotUrls',
    ];

    public function validate()
    {
        Model::validateRequired('remindId', $this->remindId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remindId) {
            $res['RemindId'] = $this->remindId;
        }
        if (null !== $this->remindName) {
            $res['RemindName'] = $this->remindName;
        }
        if (null !== $this->dndEnd) {
            $res['DndEnd'] = $this->dndEnd;
        }
        if (null !== $this->remindUnit) {
            $res['RemindUnit'] = $this->remindUnit;
        }
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }
        if (null !== $this->baselineIds) {
            $res['BaselineIds'] = $this->baselineIds;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->bizProcessIds) {
            $res['BizProcessIds'] = $this->bizProcessIds;
        }
        if (null !== $this->remindType) {
            $res['RemindType'] = $this->remindType;
        }
        if (null !== $this->maxAlertTimes) {
            $res['MaxAlertTimes'] = $this->maxAlertTimes;
        }
        if (null !== $this->alertInterval) {
            $res['AlertInterval'] = $this->alertInterval;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->alertUnit) {
            $res['AlertUnit'] = $this->alertUnit;
        }
        if (null !== $this->alertMethods) {
            $res['AlertMethods'] = $this->alertMethods;
        }
        if (null !== $this->alertTargets) {
            $res['AlertTargets'] = $this->alertTargets;
        }
        if (null !== $this->useFlag) {
            $res['UseFlag'] = $this->useFlag;
        }
        if (null !== $this->robotUrls) {
            $res['RobotUrls'] = $this->robotUrls;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRemindRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemindId'])) {
            $model->remindId = $map['RemindId'];
        }
        if (isset($map['RemindName'])) {
            $model->remindName = $map['RemindName'];
        }
        if (isset($map['DndEnd'])) {
            $model->dndEnd = $map['DndEnd'];
        }
        if (isset($map['RemindUnit'])) {
            $model->remindUnit = $map['RemindUnit'];
        }
        if (isset($map['NodeIds'])) {
            $model->nodeIds = $map['NodeIds'];
        }
        if (isset($map['BaselineIds'])) {
            $model->baselineIds = $map['BaselineIds'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['BizProcessIds'])) {
            $model->bizProcessIds = $map['BizProcessIds'];
        }
        if (isset($map['RemindType'])) {
            $model->remindType = $map['RemindType'];
        }
        if (isset($map['MaxAlertTimes'])) {
            $model->maxAlertTimes = $map['MaxAlertTimes'];
        }
        if (isset($map['AlertInterval'])) {
            $model->alertInterval = $map['AlertInterval'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['AlertUnit'])) {
            $model->alertUnit = $map['AlertUnit'];
        }
        if (isset($map['AlertMethods'])) {
            $model->alertMethods = $map['AlertMethods'];
        }
        if (isset($map['AlertTargets'])) {
            $model->alertTargets = $map['AlertTargets'];
        }
        if (isset($map['UseFlag'])) {
            $model->useFlag = $map['UseFlag'];
        }
        if (isset($map['RobotUrls'])) {
            $model->robotUrls = $map['RobotUrls'];
        }

        return $model;
    }
}
