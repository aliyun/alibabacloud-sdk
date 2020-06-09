<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigResponse\instances\instance;

class instances extends Model {
    protected $_name = [
        'instance' => 'Instance',
    ];
    public function validate() {
        Model::validateRequired('instance', $this->instance, true);
    }
    public function toMap() {
        $res = [];
        $res['Instance'] = [];
        if(null !== $this->instance && is_array($this->instance)){
            $n = 0;
            foreach($this->instance as $item){
                $res['Instance'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return instances
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Instance'])){
            if(!empty($map['Instance'])){
                $model->instance = [];
                $n = 0;
                foreach($map['Instance'] as $item) {
                    $model->instance[$n++] = null !== $item ? instance::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Instance
     * @var array
     */
    public $instance;

}
