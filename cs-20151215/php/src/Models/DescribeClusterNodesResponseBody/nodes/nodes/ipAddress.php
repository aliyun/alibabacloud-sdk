<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesResponseBody\nodes\nodes;

use AlibabaCloud\Tea\Model;

class ipAddress extends Model
{
    /**
     * @description ip
     *
     * @var array
     */
    public $ip;
    protected $_name = [
        'ip' => 'ip',
    ];

    public function validate()
    {
        Model::validateRequired('ip', $this->ip, true);
    }

    public function toMap()
    {
        $res       = [];
        $res['ip'] = [];
        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipAddress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ip'])) {
            if (!empty($map['ip'])) {
                $model->ip = [];
                $model->ip = $map['ip'];
            }
        }

        return $model;
    }
}
