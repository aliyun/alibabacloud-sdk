<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesResponseBody\nodes\nodes;
use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description nodes
     *
     * @var array
     */
    public $nodes;
    protected $_name = [
        'nodes' => 'nodes',
    ];

    public function validate()
    {
        Model::validateRequired('nodes', $this->nodes, true);
    }

    public function toMap()
    {
        $res          = [];
        $res['nodes'] = [];
        if (null !== $this->nodes && \is_array($this->nodes)) {
            $n = 0;
            foreach ($this->nodes as $item) {
                $res['nodes'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
