<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\CS\V20151215\Models\RemoveClusterNodesBody\nodes;

class RemoveClusterNodesBody extends Model {
    protected $_name = [
        'releaseNode' => 'release_node',
        'drainNode' => 'drain_node',
        'nodes' => 'nodes',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['release_node'] = $this->releaseNode;
        $res['drain_node'] = $this->drainNode;
        $res['nodes'] = [];
        if(null !== $this->nodes && is_array($this->nodes)){
            $n = 0;
            foreach($this->nodes as $item){
                $res['nodes'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return RemoveClusterNodesBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['release_node'])){
            $model->releaseNode = $map['release_node'];
        }
        if(isset($map['drain_node'])){
            $model->drainNode = $map['drain_node'];
        }
        if(isset($map['nodes'])){
            if(!empty($map['nodes'])){
                $model->nodes = [];
                $n = 0;
                foreach($map['nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description release_node
     * @var bool
     */
    public $releaseNode;

    /**
     * @description drain_node
     * @var bool
     */
    public $drainNode;

    /**
     * @description nodes
     * @var array
     */
    public $nodes;

}
