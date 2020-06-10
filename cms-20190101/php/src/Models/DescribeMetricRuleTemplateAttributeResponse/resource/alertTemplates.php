<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponse\resource;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponse\resource\alertTemplates\alertTemplate;
use AlibabaCloud\Tea\Model;

class alertTemplates extends Model
{
    /**
     * @description AlertTemplate
     *
     * @var array
     */
    public $alertTemplate;
    protected $_name = [
        'alertTemplate' => 'AlertTemplate',
    ];

    public function validate()
    {
        Model::validateRequired('alertTemplate', $this->alertTemplate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertTemplate) {
            $res['AlertTemplate'] = [];
            if (null !== $this->alertTemplate && \is_array($this->alertTemplate)) {
                $n = 0;
                foreach ($this->alertTemplate as $item) {
                    $res['AlertTemplate'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertTemplates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertTemplate'])) {
            if (!empty($map['AlertTemplate'])) {
                $model->alertTemplate = [];
                $n                    = 0;
                foreach ($map['AlertTemplate'] as $item) {
                    $model->alertTemplate[$n++] = null !== $item ? alertTemplate::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
