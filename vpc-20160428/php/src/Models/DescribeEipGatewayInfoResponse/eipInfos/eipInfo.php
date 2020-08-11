<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipGatewayInfoResponse\eipInfos;

use AlibabaCloud\Tea\Model;

class eipInfo extends Model
{
    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $ipGw;

    /**
     * @var string
     */
    public $ipMask;
    protected $_name = [
        'ip'     => 'Ip',
        'ipGw'   => 'IpGw',
        'ipMask' => 'IpMask',
    ];

    public function validate()
    {
        Model::validateRequired('ip', $this->ip, true);
        Model::validateRequired('ipGw', $this->ipGw, true);
        Model::validateRequired('ipMask', $this->ipMask, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->ipGw) {
            $res['IpGw'] = $this->ipGw;
        }
        if (null !== $this->ipMask) {
            $res['IpMask'] = $this->ipMask;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['IpGw'])) {
            $model->ipGw = $map['IpGw'];
        }
        if (isset($map['IpMask'])) {
            $model->ipMask = $map['IpMask'];
        }

        return $model;
    }
}
