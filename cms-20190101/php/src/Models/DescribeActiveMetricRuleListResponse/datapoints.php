<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponse\datapoints\alarm;
use AlibabaCloud\Tea\Model;

class datapoints extends Model
{
    /**
     * @description Alarm
     *
     * @var array
     */
    public $alarm;
    protected $_name = [
        'alarm' => 'Alarm',
    ];

    public function validate()
    {
        Model::validateRequired('alarm', $this->alarm, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarm) {
            $res['Alarm'] = [];
            if (null !== $this->alarm && \is_array($this->alarm)) {
                $n = 0;
                foreach ($this->alarm as $item) {
                    $res['Alarm'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datapoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alarm'])) {
            if (!empty($map['Alarm'])) {
                $model->alarm = [];
                $n            = 0;
                foreach ($map['Alarm'] as $item) {
                    $model->alarm[$n++] = null !== $item ? alarm::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
