<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnServersResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnServersResponse\sslVpnServers\sslVpnServer;
use AlibabaCloud\Tea\Model;

class sslVpnServers extends Model
{
    /**
     * @var array
     */
    public $sslVpnServer;
    protected $_name = [
        'sslVpnServer' => 'SslVpnServer',
    ];

    public function validate()
    {
        Model::validateRequired('sslVpnServer', $this->sslVpnServer, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sslVpnServer) {
            $res['SslVpnServer'] = [];
            if (null !== $this->sslVpnServer && \is_array($this->sslVpnServer)) {
                $n = 0;
                foreach ($this->sslVpnServer as $item) {
                    $res['SslVpnServer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sslVpnServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SslVpnServer'])) {
            if (!empty($map['SslVpnServer'])) {
                $model->sslVpnServer = [];
                $n                   = 0;
                foreach ($map['SslVpnServer'] as $item) {
                    $model->sslVpnServer[$n++] = null !== $item ? sslVpnServer::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
