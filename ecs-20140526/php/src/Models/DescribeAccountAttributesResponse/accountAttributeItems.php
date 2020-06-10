<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponse\accountAttributeItems\accountAttributeItem;
use AlibabaCloud\Tea\Model;

class accountAttributeItems extends Model
{
    /**
     * @description AccountAttributeItem
     *
     * @var array
     */
    public $accountAttributeItem;
    protected $_name = [
        'accountAttributeItem' => 'AccountAttributeItem',
    ];

    public function validate()
    {
        Model::validateRequired('accountAttributeItem', $this->accountAttributeItem, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountAttributeItem) {
            $res['AccountAttributeItem'] = [];
            if (null !== $this->accountAttributeItem && \is_array($this->accountAttributeItem)) {
                $n = 0;
                foreach ($this->accountAttributeItem as $item) {
                    $res['AccountAttributeItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountAttributeItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountAttributeItem'])) {
            if (!empty($map['AccountAttributeItem'])) {
                $model->accountAttributeItem = [];
                $n                           = 0;
                foreach ($map['AccountAttributeItem'] as $item) {
                    $model->accountAttributeItem[$n++] = null !== $item ? accountAttributeItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
