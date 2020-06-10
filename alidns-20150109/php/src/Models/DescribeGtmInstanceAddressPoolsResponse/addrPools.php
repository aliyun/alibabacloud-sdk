<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceAddressPoolsResponse;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceAddressPoolsResponse\addrPools\addrPool;
use AlibabaCloud\Tea\Model;

class addrPools extends Model
{
    /**
     * @description AddrPool
     *
     * @var array
     */
    public $addrPool;
    protected $_name = [
        'addrPool' => 'AddrPool',
    ];

    public function validate()
    {
        Model::validateRequired('addrPool', $this->addrPool, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addrPool) {
            $res['AddrPool'] = [];
            if (null !== $this->addrPool && \is_array($this->addrPool)) {
                $n = 0;
                foreach ($this->addrPool as $item) {
                    $res['AddrPool'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addrPools
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddrPool'])) {
            if (!empty($map['AddrPool'])) {
                $model->addrPool = [];
                $n               = 0;
                foreach ($map['AddrPool'] as $item) {
                    $model->addrPool[$n++] = null !== $item ? addrPool::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
