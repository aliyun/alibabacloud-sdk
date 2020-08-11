<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewaysResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewaysResponse\vpnGateways\vpnGateway;
use AlibabaCloud\Tea\Model;

class vpnGateways extends Model
{
    /**
     * @var array
     */
    public $vpnGateway;
    protected $_name = [
        'vpnGateway' => 'VpnGateway',
    ];

    public function validate()
    {
        Model::validateRequired('vpnGateway', $this->vpnGateway, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpnGateway) {
            $res['VpnGateway'] = [];
            if (null !== $this->vpnGateway && \is_array($this->vpnGateway)) {
                $n = 0;
                foreach ($this->vpnGateway as $item) {
                    $res['VpnGateway'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpnGateways
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpnGateway'])) {
            if (!empty($map['VpnGateway'])) {
                $model->vpnGateway = [];
                $n                 = 0;
                foreach ($map['VpnGateway'] as $item) {
                    $model->vpnGateway[$n++] = null !== $item ? vpnGateway::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
