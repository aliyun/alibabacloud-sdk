<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponse\pageBean\alertRules;

use AlibabaCloud\Tea\Model;

class alarmContext extends Model
{
    /**
     * @description content
     *
     * @var string
     */
    public $alarmContentTemplate;

    /**
     * @description subTitle
     *
     * @var string
     */
    public $alarmContentSubTitle;
    protected $_name = [
        'alarmContentTemplate' => 'AlarmContentTemplate',
        'alarmContentSubTitle' => 'AlarmContentSubTitle',
    ];

    public function validate()
    {
        Model::validateRequired('alarmContentTemplate', $this->alarmContentTemplate, true);
        Model::validateRequired('alarmContentSubTitle', $this->alarmContentSubTitle, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmContentTemplate) {
            $res['AlarmContentTemplate'] = $this->alarmContentTemplate;
        }
        if (null !== $this->alarmContentSubTitle) {
            $res['AlarmContentSubTitle'] = $this->alarmContentSubTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarmContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmContentTemplate'])) {
            $model->alarmContentTemplate = $map['AlarmContentTemplate'];
        }
        if (isset($map['AlarmContentSubTitle'])) {
            $model->alarmContentSubTitle = $map['AlarmContentSubTitle'];
        }

        return $model;
    }
}
