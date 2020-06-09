<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorConfigResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorConfigResponse\ispCityNodes\ispCityNode;

class ispCityNodes extends Model {
    protected $_name = [
        'ispCityNode' => 'IspCityNode',
    ];
    public function validate() {
        Model::validateRequired('ispCityNode', $this->ispCityNode, true);
    }
    public function toMap() {
        $res = [];
        $res['IspCityNode'] = [];
        if(null !== $this->ispCityNode && is_array($this->ispCityNode)){
            $n = 0;
            foreach($this->ispCityNode as $item){
                $res['IspCityNode'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ispCityNodes
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['IspCityNode'])){
            if(!empty($map['IspCityNode'])){
                $model->ispCityNode = [];
                $n = 0;
                foreach($map['IspCityNode'] as $item) {
                    $model->ispCityNode[$n++] = null !== $item ? ispCityNode::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description IspCityNode
     * @var array
     */
    public $ispCityNode;

}
