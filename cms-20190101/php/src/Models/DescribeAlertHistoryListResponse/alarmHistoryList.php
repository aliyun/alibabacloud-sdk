<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponse\alarmHistoryList\alarmHistory;
use AlibabaCloud\Tea\Model;

class alarmHistoryList extends Model
{
    /**
     * @description AlarmHistory
     *
     * @var array
     */
    public $alarmHistory;
    protected $_name = [
        'alarmHistory' => 'AlarmHistory',
    ];

    public function validate()
    {
        Model::validateRequired('alarmHistory', $this->alarmHistory, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmHistory) {
            $res['AlarmHistory'] = [];
            if (null !== $this->alarmHistory && \is_array($this->alarmHistory)) {
                $n = 0;
                foreach ($this->alarmHistory as $item) {
                    $res['AlarmHistory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarmHistoryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmHistory'])) {
            if (!empty($map['AlarmHistory'])) {
                $model->alarmHistory = [];
                $n                   = 0;
                foreach ($map['AlarmHistory'] as $item) {
                    $model->alarmHistory[$n++] = null !== $item ? alarmHistory::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
