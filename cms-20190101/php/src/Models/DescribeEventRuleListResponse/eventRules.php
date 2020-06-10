<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponse\eventRules\eventRule;
use AlibabaCloud\Tea\Model;

class eventRules extends Model
{
    /**
     * @description EventRule
     *
     * @var array
     */
    public $eventRule;
    protected $_name = [
        'eventRule' => 'EventRule',
    ];

    public function validate()
    {
        Model::validateRequired('eventRule', $this->eventRule, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventRule) {
            $res['EventRule'] = [];
            if (null !== $this->eventRule && \is_array($this->eventRule)) {
                $n = 0;
                foreach ($this->eventRule as $item) {
                    $res['EventRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventRule'])) {
            if (!empty($map['EventRule'])) {
                $model->eventRule = [];
                $n                = 0;
                foreach ($map['EventRule'] as $item) {
                    $model->eventRule[$n++] = null !== $item ? eventRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
