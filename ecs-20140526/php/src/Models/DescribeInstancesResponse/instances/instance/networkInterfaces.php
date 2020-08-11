<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance\networkInterfaces\networkInterface;
use AlibabaCloud\Tea\Model;

class networkInterfaces extends Model
{
    /**
     * @var array
     */
    public $networkInterface;
    protected $_name = [
        'networkInterface' => 'NetworkInterface',
    ];

    public function validate()
    {
        Model::validateRequired('networkInterface', $this->networkInterface, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInterface) {
            $res['NetworkInterface'] = [];
            if (null !== $this->networkInterface && \is_array($this->networkInterface)) {
                $n = 0;
                foreach ($this->networkInterface as $item) {
                    $res['NetworkInterface'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInterfaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInterface'])) {
            if (!empty($map['NetworkInterface'])) {
                $model->networkInterface = [];
                $n                       = 0;
                foreach ($map['NetworkInterface'] as $item) {
                    $model->networkInterface[$n++] = null !== $item ? networkInterface::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
