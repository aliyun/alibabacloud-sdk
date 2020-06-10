<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppsResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppsResponse\apps\appItem;
use AlibabaCloud\Tea\Model;

class apps extends Model
{
    /**
     * @description AppItem
     *
     * @var array
     */
    public $appItem;
    protected $_name = [
        'appItem' => 'AppItem',
    ];

    public function validate()
    {
        Model::validateRequired('appItem', $this->appItem, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appItem) {
            $res['AppItem'] = [];
            if (null !== $this->appItem && \is_array($this->appItem)) {
                $n = 0;
                foreach ($this->appItem as $item) {
                    $res['AppItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppItem'])) {
            if (!empty($map['AppItem'])) {
                $model->appItem = [];
                $n              = 0;
                foreach ($map['AppItem'] as $item) {
                    $model->appItem[$n++] = null !== $item ? appItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
