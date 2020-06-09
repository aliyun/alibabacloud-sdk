<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesOverviewResponse\regions\regionModel\typeModels;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesOverviewResponse\regions\regionModel\typeModels\typeModel\instanceModels;

class typeModel extends Model {
    protected $_name = [
        'instanceDateType' => 'InstanceDateType',
        'count' => 'Count',
        'instanceModels' => 'InstanceModels',
    ];
    public function validate() {
        Model::validateRequired('instanceDateType', $this->instanceDateType, true);
        Model::validateRequired('count', $this->count, true);
        Model::validateRequired('instanceModels', $this->instanceModels, true);
    }
    public function toMap() {
        $res = [];
        $res['InstanceDateType'] = $this->instanceDateType;
        $res['Count'] = $this->count;
        $res['InstanceModels'] = null !== $this->instanceModels ? $this->instanceModels->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return typeModel
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['InstanceDateType'])){
            $model->instanceDateType = $map['InstanceDateType'];
        }
        if(isset($map['Count'])){
            $model->count = $map['Count'];
        }
        if(isset($map['InstanceModels'])){
            $model->instanceModels = instanceModels::fromMap($map['InstanceModels']);
        }
        return $model;
    }
    /**
     * @description instanceDateType
     * @var string
     */
    public $instanceDateType;

    /**
     * @description count
     * @var integer
     */
    public $count;

    /**
     * @description instanceModels
     * @var instanceModels
     */
    public $instanceModels;

}
