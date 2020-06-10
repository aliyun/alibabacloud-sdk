<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficControlsResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficControlsResponse\apiTrafficControls\apiTrafficControlItem;
use AlibabaCloud\Tea\Model;

class apiTrafficControls extends Model
{
    /**
     * @description ApiTrafficControlItem
     *
     * @var array
     */
    public $apiTrafficControlItem;
    protected $_name = [
        'apiTrafficControlItem' => 'ApiTrafficControlItem',
    ];

    public function validate()
    {
        Model::validateRequired('apiTrafficControlItem', $this->apiTrafficControlItem, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiTrafficControlItem) {
            $res['ApiTrafficControlItem'] = [];
            if (null !== $this->apiTrafficControlItem && \is_array($this->apiTrafficControlItem)) {
                $n = 0;
                foreach ($this->apiTrafficControlItem as $item) {
                    $res['ApiTrafficControlItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiTrafficControls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiTrafficControlItem'])) {
            if (!empty($map['ApiTrafficControlItem'])) {
                $model->apiTrafficControlItem = [];
                $n                            = 0;
                foreach ($map['ApiTrafficControlItem'] as $item) {
                    $model->apiTrafficControlItem[$n++] = null !== $item ? apiTrafficControlItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
