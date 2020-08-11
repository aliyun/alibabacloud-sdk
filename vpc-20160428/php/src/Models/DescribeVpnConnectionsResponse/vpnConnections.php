<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponse\vpnConnections\vpnConnection;
use AlibabaCloud\Tea\Model;

class vpnConnections extends Model
{
    /**
     * @var array
     */
    public $vpnConnection;
    protected $_name = [
        'vpnConnection' => 'VpnConnection',
    ];

    public function validate()
    {
        Model::validateRequired('vpnConnection', $this->vpnConnection, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpnConnection) {
            $res['VpnConnection'] = [];
            if (null !== $this->vpnConnection && \is_array($this->vpnConnection)) {
                $n = 0;
                foreach ($this->vpnConnection as $item) {
                    $res['VpnConnection'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpnConnections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpnConnection'])) {
            if (!empty($map['VpnConnection'])) {
                $model->vpnConnection = [];
                $n                    = 0;
                foreach ($map['VpnConnection'] as $item) {
                    $model->vpnConnection[$n++] = null !== $item ? vpnConnection::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
