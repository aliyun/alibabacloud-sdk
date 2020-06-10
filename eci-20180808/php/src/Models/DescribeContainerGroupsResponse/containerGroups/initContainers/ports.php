<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\initContainers;

use AlibabaCloud\Tea\Model;

class ports extends Model
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
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('protocol', $this->protocol, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ports
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
