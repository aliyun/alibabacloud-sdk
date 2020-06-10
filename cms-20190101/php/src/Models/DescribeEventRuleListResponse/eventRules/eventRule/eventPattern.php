<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponse\eventRules\eventRule;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponse\eventRules\eventRule\eventPattern\eventPattern;
use AlibabaCloud\Tea\Model;

class eventPattern extends Model
{
    /**
     * @description EventPattern
     *
     * @var array
     */
    public $eventPattern;
    protected $_name = [
        'eventPattern' => 'EventPattern',
    ];

    public function validate()
    {
        Model::validateRequired('eventPattern', $this->eventPattern, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventPattern) {
            $res['EventPattern'] = [];
            if (null !== $this->eventPattern && \is_array($this->eventPattern)) {
                $n = 0;
                foreach ($this->eventPattern as $item) {
                    $res['EventPattern'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventPattern
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventPattern'])) {
            if (!empty($map['EventPattern'])) {
                $model->eventPattern = [];
                $n                   = 0;
                foreach ($map['EventPattern'] as $item) {
                    $model->eventPattern[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
