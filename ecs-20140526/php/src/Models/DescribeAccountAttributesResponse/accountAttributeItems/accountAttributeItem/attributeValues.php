<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponse\accountAttributeItems\accountAttributeItem;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponse\accountAttributeItems\accountAttributeItem\attributeValues\valueItem;
use AlibabaCloud\Tea\Model;

class attributeValues extends Model
{
    /**
     * @var array
     */
    public $valueItem;
    protected $_name = [
        'valueItem' => 'ValueItem',
    ];

    public function validate()
    {
        Model::validateRequired('valueItem', $this->valueItem, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->valueItem) {
            $res['ValueItem'] = [];
            if (null !== $this->valueItem && \is_array($this->valueItem)) {
                $n = 0;
                foreach ($this->valueItem as $item) {
                    $res['ValueItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attributeValues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ValueItem'])) {
            if (!empty($map['ValueItem'])) {
                $model->valueItem = [];
                $n                = 0;
                foreach ($map['ValueItem'] as $item) {
                    $model->valueItem[$n++] = null !== $item ? valueItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
