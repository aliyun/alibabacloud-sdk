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
     * @var nodes
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
        $res          = [];
        $res['nodes'] = null !== $this->nodes ? $this->nodes->toMap() : null;
        $res['page']  = null !== $this->page ? $this->page->toMap() : null;

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
            $model->nodes = nodes::fromMap($map['nodes']);
        }
        if (isset($map['page'])) {
            $model->page = page::fromMap($map['page']);
        }

        return $model;
    }
}
