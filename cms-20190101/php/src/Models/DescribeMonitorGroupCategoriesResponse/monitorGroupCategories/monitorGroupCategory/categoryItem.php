<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupCategoriesResponse\monitorGroupCategories\monitorGroupCategory;

use AlibabaCloud\Tea\Model;

class categoryItem extends Model
{
    /**
     * @description category
     *
     * @var string
     */
    public $category;

    /**
     * @description count
     *
     * @var int
     */
    public $count;
    protected $_name = [
        'category' => 'Category',
        'count'    => 'Count',
    ];

    public function validate()
    {
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('count', $this->count, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return categoryItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
