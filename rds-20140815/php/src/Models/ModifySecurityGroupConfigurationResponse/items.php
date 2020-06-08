<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\ModifySecurityGroupConfigurationResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\ModifySecurityGroupConfigurationResponse\items\ecsSecurityGroupRelation;

class items extends Model {
    protected $_name = [
        'ecsSecurityGroupRelation' => 'EcsSecurityGroupRelation',
    ];
    public function validate() {
        Model::validateRequired('ecsSecurityGroupRelation', $this->ecsSecurityGroupRelation, true);
    }
    public function toMap() {
        $res = [];
        $res['EcsSecurityGroupRelation'] = [];
        if(null !== $this->ecsSecurityGroupRelation && is_array($this->ecsSecurityGroupRelation)){
            $n = 0;
            foreach($this->ecsSecurityGroupRelation as $item){
                $res['EcsSecurityGroupRelation'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return items
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['EcsSecurityGroupRelation'])){
            if(!empty($map['EcsSecurityGroupRelation'])){
                $model->ecsSecurityGroupRelation = [];
                $n = 0;
                foreach($map['EcsSecurityGroupRelation'] as $item) {
                    $model->ecsSecurityGroupRelation[$n++] = null !== $item ? ecsSecurityGroupRelation::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description EcsSecurityGroupRelation
     * @var array
     */
    public $ecsSecurityGroupRelation;

}
