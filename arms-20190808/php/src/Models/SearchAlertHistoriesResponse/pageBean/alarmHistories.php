<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertHistoriesResponse\pageBean;

use AlibabaCloud\Tea\Model;

class alarmHistories extends Model
{
    /**
     * @description id
     *
     * @var int
     */
    public $id;

    /**
     * @description strategyId
     *
     * @var string
     */
    public $strategyId;

    /**
     * @description tenant
     *
     * @var string
     */
    public $userId;

    /**
     * @description target
     *
     * @var string
     */
    public $target;

    /**
     * @description phones
     *
     * @var string
     */
    public $phones;

    /**
     * @description emails
     *
     * @var string
     */
    public $emails;

    /**
     * @description alarmTime
     *
     * @var int
     */
    public $alarmTime;

    /**
     * @description alarmType
     *
     * @var int
     */
    public $alarmType;

    /**
     * @description alarmResponseCode
     *
     * @var int
     */
    public $alarmResponseCode;

    /**
     * @description alarmContent
     *
     * @var string
     */
    public $alarmContent;

    /**
     * @description alarmSources
     *
     * @var string
     */
    public $alarmSources;
    protected $_name = [
        'id'                => 'Id',
        'strategyId'        => 'StrategyId',
        'userId'            => 'UserId',
        'target'            => 'Target',
        'phones'            => 'Phones',
        'emails'            => 'Emails',
        'alarmTime'         => 'AlarmTime',
        'alarmType'         => 'AlarmType',
        'alarmResponseCode' => 'AlarmResponseCode',
        'alarmContent'      => 'AlarmContent',
        'alarmSources'      => 'AlarmSources',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('strategyId', $this->strategyId, true);
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('target', $this->target, true);
        Model::validateRequired('phones', $this->phones, true);
        Model::validateRequired('emails', $this->emails, true);
        Model::validateRequired('alarmTime', $this->alarmTime, true);
        Model::validateRequired('alarmType', $this->alarmType, true);
        Model::validateRequired('alarmResponseCode', $this->alarmResponseCode, true);
        Model::validateRequired('alarmContent', $this->alarmContent, true);
        Model::validateRequired('alarmSources', $this->alarmSources, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->phones) {
            $res['Phones'] = $this->phones;
        }
        if (null !== $this->emails) {
            $res['Emails'] = $this->emails;
        }
        if (null !== $this->alarmTime) {
            $res['AlarmTime'] = $this->alarmTime;
        }
        if (null !== $this->alarmType) {
            $res['AlarmType'] = $this->alarmType;
        }
        if (null !== $this->alarmResponseCode) {
            $res['AlarmResponseCode'] = $this->alarmResponseCode;
        }
        if (null !== $this->alarmContent) {
            $res['AlarmContent'] = $this->alarmContent;
        }
        if (null !== $this->alarmSources) {
            $res['AlarmSources'] = $this->alarmSources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarmHistories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Phones'])) {
            $model->phones = $map['Phones'];
        }
        if (isset($map['Emails'])) {
            $model->emails = $map['Emails'];
        }
        if (isset($map['AlarmTime'])) {
            $model->alarmTime = $map['AlarmTime'];
        }
        if (isset($map['AlarmType'])) {
            $model->alarmType = $map['AlarmType'];
        }
        if (isset($map['AlarmResponseCode'])) {
            $model->alarmResponseCode = $map['AlarmResponseCode'];
        }
        if (isset($map['AlarmContent'])) {
            $model->alarmContent = $map['AlarmContent'];
        }
        if (isset($map['AlarmSources'])) {
            $model->alarmSources = $map['AlarmSources'];
        }

        return $model;
    }
}
