<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTaskAttributeResponse\operationProgressSet\operationProgress;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTaskAttributeResponse\operationProgressSet\operationProgress\relatedItemSet\relatedItem;
use AlibabaCloud\Tea\Model;

class relatedItemSet extends Model
{
    /**
     * @description RelatedItem
     *
     * @var array
     */
    public $relatedItem;
    protected $_name = [
        'relatedItem' => 'RelatedItem',
    ];

    public function validate()
    {
        Model::validateRequired('relatedItem', $this->relatedItem, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relatedItem) {
            $res['RelatedItem'] = [];
            if (null !== $this->relatedItem && \is_array($this->relatedItem)) {
                $n = 0;
                foreach ($this->relatedItem as $item) {
                    $res['RelatedItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relatedItemSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RelatedItem'])) {
            if (!empty($map['RelatedItem'])) {
                $model->relatedItem = [];
                $n                  = 0;
                foreach ($map['RelatedItem'] as $item) {
                    $model->relatedItem[$n++] = null !== $item ? relatedItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
