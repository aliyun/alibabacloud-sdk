<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiLatencyDataResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiLatencyDataResponse\callLatencys\monitorItem;
use AlibabaCloud\Tea\Model;

class callLatencys extends Model
{
    /**
     * @description MonitorItem
     *
     * @var array
     */
    public $monitorItem;
    protected $_name = [
        'monitorItem' => 'MonitorItem',
    ];

    public function validate()
    {
        Model::validateRequired('monitorItem', $this->monitorItem, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->monitorItem) {
            $res['MonitorItem'] = [];
            if (null !== $this->monitorItem && \is_array($this->monitorItem)) {
                $n = 0;
                foreach ($this->monitorItem as $item) {
                    $res['MonitorItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callLatencys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MonitorItem'])) {
            if (!empty($map['MonitorItem'])) {
                $model->monitorItem = [];
                $n                  = 0;
                foreach ($map['MonitorItem'] as $item) {
                    $model->monitorItem[$n++] = null !== $item ? monitorItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
