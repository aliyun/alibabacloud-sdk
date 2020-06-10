<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateListResponse\templates\template;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateListResponse\templates\template\applyHistories\applyHistory;
use AlibabaCloud\Tea\Model;

class applyHistories extends Model
{
    /**
     * @description ApplyHistory
     *
     * @var array
     */
    public $applyHistory;
    protected $_name = [
        'applyHistory' => 'ApplyHistory',
    ];

    public function validate()
    {
        Model::validateRequired('applyHistory', $this->applyHistory, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyHistory) {
            $res['ApplyHistory'] = [];
            if (null !== $this->applyHistory && \is_array($this->applyHistory)) {
                $n = 0;
                foreach ($this->applyHistory as $item) {
                    $res['ApplyHistory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applyHistories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyHistory'])) {
            if (!empty($map['ApplyHistory'])) {
                $model->applyHistory = [];
                $n                   = 0;
                foreach ($map['ApplyHistory'] as $item) {
                    $model->applyHistory[$n++] = null !== $item ? applyHistory::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
