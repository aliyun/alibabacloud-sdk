<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsByApiResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsByApiResponse\trafficControlItems\trafficControlItem;
use AlibabaCloud\Tea\Model;

class trafficControlItems extends Model
{
    /**
     * @description TrafficControlItem
     *
     * @var array
     */
    public $trafficControlItem;
    protected $_name = [
        'trafficControlItem' => 'TrafficControlItem',
    ];

    public function validate()
    {
        Model::validateRequired('trafficControlItem', $this->trafficControlItem, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trafficControlItem) {
            $res['TrafficControlItem'] = [];
            if (null !== $this->trafficControlItem && \is_array($this->trafficControlItem)) {
                $n = 0;
                foreach ($this->trafficControlItem as $item) {
                    $res['TrafficControlItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficControlItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrafficControlItem'])) {
            if (!empty($map['TrafficControlItem'])) {
                $model->trafficControlItem = [];
                $n                         = 0;
                foreach ($map['TrafficControlItem'] as $item) {
                    $model->trafficControlItem[$n++] = null !== $item ? trafficControlItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
