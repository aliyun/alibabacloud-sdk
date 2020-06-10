<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesResponseBody\nodes;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesResponseBody\page;
use AlibabaCloud\Tea\Model;

class DescribeClusterNodesResponseBody extends Model
{
    /**
     * @description nodes
     *
     * @var array
     */
    public $nodes;

    /**
     * @description page
     *
     * @var page
     */
    public $page;
    protected $_name = [
        'nodes' => 'nodes',
        'page'  => 'page',
    ];

    public function validate()
    {
        Model::validateRequired('nodes', $this->nodes, true);
        Model::validateRequired('page', $this->page, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodes) {
            $res['nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->page) {
            $res['page'] = null !== $this->page ? $this->page->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterNodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['page'])) {
            $model->page = page::fromMap($map['page']);
        }

        return $model;
    }
}
