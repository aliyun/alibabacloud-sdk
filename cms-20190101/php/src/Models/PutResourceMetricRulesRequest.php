<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesRequest\rules;
use AlibabaCloud\Tea\Model;

class PutResourceMetricRulesRequest extends Model
{
    /**
     * @description alarms
     *
     * @var array
     */
    public $rules;
    protected $_name = [
        'rules' => 'Rules',
    ];

    public function validate()
    {
        Model::validateRequired('rules', $this->rules, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutResourceMetricRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n            = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
