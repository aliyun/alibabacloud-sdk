<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Goodstech\V20191230\Models\ClassifyCommodityResponse;

use AlibabaCloud\SDK\Goodstech\V20191230\Models\ClassifyCommodityResponse\data\categories;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description categoryList
     *
     * @var array
     */
    public $categories;
    protected $_name = [
        'categories' => 'Categories',
    ];

    public function validate()
    {
        Model::validateRequired('categories', $this->categories, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['Categories'] = [];
        if (null !== $this->categories && \is_array($this->categories)) {
            $n = 0;
            foreach ($this->categories as $item) {
                $res['Categories'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = [];
                $n                 = 0;
                foreach ($map['Categories'] as $item) {
                    $model->categories[$n++] = null !== $item ? categories::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
