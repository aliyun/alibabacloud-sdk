<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponse;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponse\DBProxyConnectStringItems\DBProxyConnectStringItems;
use AlibabaCloud\Tea\Model;

class DBProxyConnectStringItems extends Model
{
    /**
     * @description DBProxyConnectStringItems
     *
     * @var array
     */
    public $DBProxyConnectStringItems;
    protected $_name = [
        'DBProxyConnectStringItems' => 'DBProxyConnectStringItems',
    ];

    public function validate()
    {
        Model::validateRequired('DBProxyConnectStringItems', $this->DBProxyConnectStringItems, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBProxyConnectStringItems) {
            $res['DBProxyConnectStringItems'] = [];
            if (null !== $this->DBProxyConnectStringItems && \is_array($this->DBProxyConnectStringItems)) {
                $n = 0;
                foreach ($this->DBProxyConnectStringItems as $item) {
                    $res['DBProxyConnectStringItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBProxyConnectStringItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBProxyConnectStringItems'])) {
            if (!empty($map['DBProxyConnectStringItems'])) {
                $model->DBProxyConnectStringItems = [];
                $n                                = 0;
                foreach ($map['DBProxyConnectStringItems'] as $item) {
                    $model->DBProxyConnectStringItems[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
