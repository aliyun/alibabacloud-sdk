<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DeleteClusterNodesBody extends Model
{
    /**
     * @description release_node
     *
     * @var string
     */
    public $releaseNode;

    /**
     * @description nodes
     *
     * @var array
     */
    public $nodes;
    protected $_name = [
        'releaseNode' => 'release_node',
        'nodes'       => 'nodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->releaseNode) {
            $res['release_node'] = $this->releaseNode;
        }
        if (null !== $this->nodes) {
            $res['nodes'] = [];
            if (null !== $this->nodes) {
                $res['nodes'] = $this->nodes;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteClusterNodesBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['release_node'])) {
            $model->releaseNode = $map['release_node'];
        }
        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = [];
                $model->nodes = $map['nodes'];
            }
        }

        return $model;
    }
}
