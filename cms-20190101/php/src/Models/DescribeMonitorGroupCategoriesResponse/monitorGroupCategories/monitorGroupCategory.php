<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupCategoriesResponse\monitorGroupCategories;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupCategoriesResponse\monitorGroupCategories\monitorGroupCategory\categoryItem;
use AlibabaCloud\Tea\Model;

class monitorGroupCategory extends Model
{
    /**
     * @description CategoryItem
     *
     * @var array
     */
    public $categoryItem;
    protected $_name = [
        'categoryItem' => 'CategoryItem',
    ];

    public function validate()
    {
        Model::validateRequired('categoryItem', $this->categoryItem, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryItem) {
            $res['CategoryItem'] = [];
            if (null !== $this->categoryItem && \is_array($this->categoryItem)) {
                $n = 0;
                foreach ($this->categoryItem as $item) {
                    $res['CategoryItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorGroupCategory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryItem'])) {
            if (!empty($map['CategoryItem'])) {
                $model->categoryItem = [];
                $n                   = 0;
                foreach ($map['CategoryItem'] as $item) {
                    $model->categoryItem[$n++] = null !== $item ? categoryItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
