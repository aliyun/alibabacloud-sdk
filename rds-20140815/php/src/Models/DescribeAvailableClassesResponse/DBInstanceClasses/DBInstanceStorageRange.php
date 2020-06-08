<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableClassesResponse\DBInstanceClasses;

use AlibabaCloud\Tea\Model;

class DBInstanceStorageRange extends Model {
    protected $_name = [
        'maxValue' => 'MaxValue',
        'minValue' => 'MinValue',
        'step' => 'Step',
    ];
    public function validate() {
        Model::validateRequired('maxValue', $this->maxValue, true);
        Model::validateRequired('minValue', $this->minValue, true);
        Model::validateRequired('step', $this->step, true);
    }
    public function toMap() {
        $res = [];
        $res['MaxValue'] = $this->maxValue;
        $res['MinValue'] = $this->minValue;
        $res['Step'] = $this->step;
        return $res;
    }
    /**
     * @param array $map
     * @return DBInstanceStorageRange
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['MaxValue'])){
            $model->maxValue = $map['MaxValue'];
        }
        if(isset($map['MinValue'])){
            $model->minValue = $map['MinValue'];
        }
        if(isset($map['Step'])){
            $model->step = $map['Step'];
        }
        return $model;
    }
    /**
     * @description max
     * @var integer
     */
    public $maxValue;

    /**
     * @description min
     * @var integer
     */
    public $minValue;

    /**
     * @description step
     * @var integer
     */
    public $step;

}
