<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\UpdateContainerGroupRequest\container\livenessProbe;

use AlibabaCloud\Tea\Model;

class tcpSocket extends Model
{
    /**
     * @description livenessProbeTcpSocketPort
     *
     * @var int
     */
    public $port;
    protected $_name = [
        'port' => 'Port',
    ];

    public function toMap()
    {
        $res         = [];
        $res['Port'] = $this->port;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tcpSocket
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
