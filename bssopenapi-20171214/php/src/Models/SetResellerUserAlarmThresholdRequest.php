<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SetResellerUserAlarmThresholdRequest extends Model
{
    /**
     * @description alarmType
     *
     * @var string
     */
    public $alarmType;

    /**
     * @description alarmThresholds
     *
     * @var string
     */
    public $alarmThresholds;
    protected $_name = [
        'alarmType'       => 'AlarmType',
        'alarmThresholds' => 'AlarmThresholds',
    ];

    public function validate()
    {
        Model::validateRequired('alarmType', $this->alarmType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmType) {
            $res['AlarmType'] = $this->alarmType;
        }
        if (null !== $this->alarmThresholds) {
            $res['AlarmThresholds'] = $this->alarmThresholds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetResellerUserAlarmThresholdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmType'])) {
            $model->alarmType = $map['AlarmType'];
        }
        if (isset($map['AlarmThresholds'])) {
            $model->alarmThresholds = $map['AlarmThresholds'];
        }

        return $model;
    }
}
