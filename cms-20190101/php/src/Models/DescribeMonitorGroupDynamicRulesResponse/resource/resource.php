<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupDynamicRulesResponse\resource;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupDynamicRulesResponse\resource\resource\filters;
use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description groupId
     *
     * @var int
     */
    public $groupId;

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
     * @var filters
     */
    public $filters;
    protected $_name = [
        'groupId'        => 'GroupId',
        'category'       => 'Category',
        'filterRelation' => 'FilterRelation',
        'filters'        => 'Filters',
    ];

    public function validate()
    {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('filterRelation', $this->filterRelation, true);
        Model::validateRequired('filters', $this->filters, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->filterRelation) {
            $res['FilterRelation'] = $this->filterRelation;
        }
        if (null !== $this->filters) {
            $res['Filters'] = null !== $this->filters ? $this->filters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['FilterRelation'])) {
            $model->filterRelation = $map['FilterRelation'];
        }
        if (isset($map['Filters'])) {
            $model->filters = filters::fromMap($map['Filters']);
        }

        return $model;
    }
}
