<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\AllocateDedicatedHostsRequest;

use AlibabaCloud\Tea\Model;

class networkAttributes extends Model
{
    /**
     * @description slbUdpTimeout
     *
     * @var int
     */
    public $slbUdpTimeout;

    /**
     * @description udpTimeout
     *
     * @var int
     */
    public $udpTimeout;
    protected $_name = [
        'slbUdpTimeout' => 'SlbUdpTimeout',
        'udpTimeout'    => 'UdpTimeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slbUdpTimeout) {
            $res['SlbUdpTimeout'] = $this->slbUdpTimeout;
        }
        if (null !== $this->udpTimeout) {
            $res['UdpTimeout'] = $this->udpTimeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlbUdpTimeout'])) {
            $model->slbUdpTimeout = $map['SlbUdpTimeout'];
        }
        if (isset($map['UdpTimeout'])) {
            $model->udpTimeout = $map['UdpTimeout'];
        }

        return $model;
    }
}
