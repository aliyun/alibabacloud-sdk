<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6GatewaysResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6GatewaysResponse\ipv6Gateways\ipv6Gateway;
use AlibabaCloud\Tea\Model;

class ipv6Gateways extends Model
{
    /**
     * @var array
     */
    public $ipv6Gateway;
    protected $_name = [
        'ipv6Gateway' => 'Ipv6Gateway',
    ];

    public function validate()
    {
        Model::validateRequired('ipv6Gateway', $this->ipv6Gateway, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6Gateway) {
            $res['Ipv6Gateway'] = [];
            if (null !== $this->ipv6Gateway && \is_array($this->ipv6Gateway)) {
                $n = 0;
                foreach ($this->ipv6Gateway as $item) {
                    $res['Ipv6Gateway'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6Gateways
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6Gateway'])) {
            if (!empty($map['Ipv6Gateway'])) {
                $model->ipv6Gateway = [];
                $n                  = 0;
                foreach ($map['Ipv6Gateway'] as $item) {
                    $model->ipv6Gateway[$n++] = null !== $item ? ipv6Gateway::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
