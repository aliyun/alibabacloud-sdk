<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutMonitorGroupDynamicRuleRequest;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutMonitorGroupDynamicRuleRequest\groupRules\filters;
use AlibabaCloud\Tea\Model;

class groupRules extends Model
{
    /**
     * @description category
     *
     * @var string
     */
    public $category;

    /**
     * @description filterRelation
     *
     * @var string
     */
    public $filterRelation;

    /**
     * @description filters
     *
     * @var array
     */
    public $filters;
    protected $_name = [
        'category'       => 'Category',
        'filterRelation' => 'FilterRelation',
        'filters'        => 'Filters',
    ];

    public function validate()
    {
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('filterRelation', $this->filterRelation, true);
        Model::validateRequired('filters', $this->filters, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->filterRelation) {
            $res['FilterRelation'] = $this->filterRelation;
        }
        if (null !== $this->filters) {
            $res['Filters'] = [];
            if (null !== $this->filters && \is_array($this->filters)) {
                $n = 0;
                foreach ($this->filters as $item) {
                    $res['Filters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['FilterRelation'])) {
            $model->filterRelation = $map['FilterRelation'];
        }
        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n              = 0;
                foreach ($map['Filters'] as $item) {
                    $model->filters[$n++] = null !== $item ? filters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
