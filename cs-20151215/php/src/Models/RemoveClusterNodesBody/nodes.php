<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215\Models\RemoveClusterNodesBody;

use AlibabaCloud\Tea\Model;

class nodes extends Model {
    protected $_name = [
        'nodeName' => 'node_name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['node_name'] = $this->nodeName;
        return $res;
    }
    /**
     * @param array $map
     * @return nodes
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['node_name'])){
            $model->nodeName = $map['node_name'];
        }
        return $model;
    }
    /**
     * @description node_name
     * @var string
     */
    public $nodeName;

}
