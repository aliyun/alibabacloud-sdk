<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnClientCertsResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnClientCertsResponse\sslVpnClientCertKeys\sslVpnClientCertKey;
use AlibabaCloud\Tea\Model;

class sslVpnClientCertKeys extends Model
{
    /**
     * @var array
     */
    public $sslVpnClientCertKey;
    protected $_name = [
        'sslVpnClientCertKey' => 'SslVpnClientCertKey',
    ];

    public function validate()
    {
        Model::validateRequired('sslVpnClientCertKey', $this->sslVpnClientCertKey, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sslVpnClientCertKey) {
            $res['SslVpnClientCertKey'] = [];
            if (null !== $this->sslVpnClientCertKey && \is_array($this->sslVpnClientCertKey)) {
                $n = 0;
                foreach ($this->sslVpnClientCertKey as $item) {
                    $res['SslVpnClientCertKey'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sslVpnClientCertKeys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SslVpnClientCertKey'])) {
            if (!empty($map['SslVpnClientCertKey'])) {
                $model->sslVpnClientCertKey = [];
                $n                          = 0;
                foreach ($map['SslVpnClientCertKey'] as $item) {
                    $model->sslVpnClientCertKey[$n++] = null !== $item ? sslVpnClientCertKey::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
