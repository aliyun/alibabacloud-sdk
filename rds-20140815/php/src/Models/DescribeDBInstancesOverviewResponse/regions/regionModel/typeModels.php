<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesOverviewResponse\regions\regionModel;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesOverviewResponse\regions\regionModel\typeModels\typeModel;

class typeModels extends Model {
    protected $_name = [
        'typeModel' => 'TypeModel',
    ];
    public function validate() {
        Model::validateRequired('typeModel', $this->typeModel, true);
    }
    public function toMap() {
        $res = [];
        $res['TypeModel'] = [];
        if(null !== $this->typeModel && is_array($this->typeModel)){
            $n = 0;
            foreach($this->typeModel as $item){
                $res['TypeModel'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return typeModels
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TypeModel'])){
            if(!empty($map['TypeModel'])){
                $model->typeModel = [];
                $n = 0;
                foreach($map['TypeModel'] as $item) {
                    $model->typeModel[$n++] = null !== $item ? typeModel::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description TypeModel
     * @var array
     */
    public $typeModel;

}
