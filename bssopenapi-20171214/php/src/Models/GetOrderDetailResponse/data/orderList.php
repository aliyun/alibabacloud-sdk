<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponse\data;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponse\data\orderList\order;
use AlibabaCloud\Tea\Model;

class orderList extends Model
{
    /**
     * @description Order
     *
     * @var array
     */
    public $order;
    protected $_name = [
        'order' => 'Order',
    ];

    public function validate()
    {
        Model::validateRequired('order', $this->order, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->order) {
            $res['Order'] = [];
            if (null !== $this->order && \is_array($this->order)) {
                $n = 0;
                foreach ($this->order as $item) {
                    $res['Order'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Order'])) {
            if (!empty($map['Order'])) {
                $model->order = [];
                $n            = 0;
                foreach ($map['Order'] as $item) {
                    $model->order[$n++] = null !== $item ? order::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
