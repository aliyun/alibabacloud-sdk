<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\UpdateContainerGroupRequest\initContainer;

use AlibabaCloud\Tea\Model;

class port extends Model
{
    /**
     * @description port
     *
     * @var int
     */
    public $port;
    /**
     * @description protocol
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'port'     => 'Port',
        'protocol' => 'Protocol',
    ];

    public function validate()
    {
        Model::validateRequired('protocol', $this->protocol, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['Port']     = $this->port;
        $res['Protocol'] = $this->protocol;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return port
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
