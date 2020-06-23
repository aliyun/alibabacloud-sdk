<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponse\pageBean;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponse\pageBean\alertRules\alarmContext;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponse\pageBean\alertRules\alertRule;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponse\pageBean\alertRules\metricParam;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponse\pageBean\alertRules\notice;
use AlibabaCloud\Tea\Model;

class alertRules extends Model
{
    /**
     * @description title
     *
     * @var string
     */
    public $alertTitle;

    /**
     * @description alertLevel
     *
     * @var string
     */
    public $alertLevel;

    /**
     * @description alertType
     *
     * @var int
     */
    public $alertType;

    /**
     * @description alertVersion
     *
     * @var int
     */
    public $alertVersion;

    /**
     * @description config
     *
     * @var string
     */
    public $config;

    /**
     * @description contactGroupIds
     *
     * @var string
     */
    public $contactGroupIdList;

    /**
     * @description created
     *
     * @var int
     */
    public $createTime;

    /**
     * @description id
     *
     * @var int
     */
    public $id;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description taskId
     *
     * @var int
     */
    public $taskId;

    /**
     * @description taskStatus
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description updated
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description userId
     *
     * @var string
     */
    public $userId;

    /**
     * @description alarmContext
     *
     * @var alarmContext
     */
    public $alarmContext;

    /**
     * @description alertRule
     *
     * @var alertRule
     */
    public $alertRule;

    /**
     * @description metricParam
     *
     * @var metricParam
     */
    public $metricParam;

    /**
     * @description notice
     *
     * @var notice
     */
    public $notice;

    /**
     * @description alertWay
     *
     * @var array
     */
    public $alertWays;
    protected $_name = [
        'alertTitle'         => 'AlertTitle',
        'alertLevel'         => 'AlertLevel',
        'alertType'          => 'AlertType',
        'alertVersion'       => 'AlertVersion',
        'config'             => 'Config',
        'contactGroupIdList' => 'ContactGroupIdList',
        'createTime'         => 'CreateTime',
        'id'                 => 'Id',
        'regionId'           => 'RegionId',
        'status'             => 'Status',
        'taskId'             => 'TaskId',
        'taskStatus'         => 'TaskStatus',
        'updateTime'         => 'UpdateTime',
        'userId'             => 'UserId',
        'alarmContext'       => 'AlarmContext',
        'alertRule'          => 'AlertRule',
        'metricParam'        => 'MetricParam',
        'notice'             => 'Notice',
        'alertWays'          => 'AlertWays',
    ];

    public function validate()
    {
        Model::validateRequired('alertTitle', $this->alertTitle, true);
        Model::validateRequired('alertLevel', $this->alertLevel, true);
        Model::validateRequired('alertType', $this->alertType, true);
        Model::validateRequired('alertVersion', $this->alertVersion, true);
        Model::validateRequired('config', $this->config, true);
        Model::validateRequired('contactGroupIdList', $this->contactGroupIdList, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('taskStatus', $this->taskStatus, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('alarmContext', $this->alarmContext, true);
        Model::validateRequired('alertRule', $this->alertRule, true);
        Model::validateRequired('metricParam', $this->metricParam, true);
        Model::validateRequired('notice', $this->notice, true);
        Model::validateRequired('alertWays', $this->alertWays, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertTitle) {
            $res['AlertTitle'] = $this->alertTitle;
        }
        if (null !== $this->alertLevel) {
            $res['AlertLevel'] = $this->alertLevel;
        }
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->alertVersion) {
            $res['AlertVersion'] = $this->alertVersion;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->contactGroupIdList) {
            $res['ContactGroupIdList'] = $this->contactGroupIdList;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->alarmContext) {
            $res['AlarmContext'] = null !== $this->alarmContext ? $this->alarmContext->toMap() : null;
        }
        if (null !== $this->alertRule) {
            $res['AlertRule'] = null !== $this->alertRule ? $this->alertRule->toMap() : null;
        }
        if (null !== $this->metricParam) {
            $res['MetricParam'] = null !== $this->metricParam ? $this->metricParam->toMap() : null;
        }
        if (null !== $this->notice) {
            $res['Notice'] = null !== $this->notice ? $this->notice->toMap() : null;
        }
        if (null !== $this->alertWays) {
            $res['AlertWays'] = [];
            if (null !== $this->alertWays) {
                $res['AlertWays'] = $this->alertWays;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertTitle'])) {
            $model->alertTitle = $map['AlertTitle'];
        }
        if (isset($map['AlertLevel'])) {
            $model->alertLevel = $map['AlertLevel'];
        }
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['AlertVersion'])) {
            $model->alertVersion = $map['AlertVersion'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['ContactGroupIdList'])) {
            $model->contactGroupIdList = $map['ContactGroupIdList'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['AlarmContext'])) {
            $model->alarmContext = alarmContext::fromMap($map['AlarmContext']);
        }
        if (isset($map['AlertRule'])) {
            $model->alertRule = alertRule::fromMap($map['AlertRule']);
        }
        if (isset($map['MetricParam'])) {
            $model->metricParam = metricParam::fromMap($map['MetricParam']);
        }
        if (isset($map['Notice'])) {
            $model->notice = notice::fromMap($map['Notice']);
        }
        if (isset($map['AlertWays'])) {
            if (!empty($map['AlertWays'])) {
                $model->alertWays = [];
                $model->alertWays = $map['AlertWays'];
            }
        }

        return $model;
    }
}
