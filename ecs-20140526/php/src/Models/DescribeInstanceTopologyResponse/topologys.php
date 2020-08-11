<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTopologyResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTopologyResponse\topologys\topology;
use AlibabaCloud\Tea\Model;

class topologys extends Model
{
    /**
     * @var array
     */
    public $topology;
    protected $_name = [
        'topology' => 'Topology',
    ];

    public function validate()
    {
        Model::validateRequired('topology', $this->topology, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topology) {
            $res['Topology'] = [];
            if (null !== $this->topology && \is_array($this->topology)) {
                $n = 0;
                foreach ($this->topology as $item) {
                    $res['Topology'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topologys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Topology'])) {
            if (!empty($map['Topology'])) {
                $model->topology = [];
                $n               = 0;
                foreach ($map['Topology'] as $item) {
                    $model->topology[$n++] = null !== $item ? topology::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
