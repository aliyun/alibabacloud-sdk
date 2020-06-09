<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodePerformanceResponse\performanceKeys\performanceItem;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodePerformanceResponse\performanceKeys\performanceItem\points\performanceItemValue;

class points extends Model {
    protected $_name = [
        'performanceItemValue' => 'PerformanceItemValue',
    ];
    public function validate() {
        Model::validateRequired('performanceItemValue', $this->performanceItemValue, true);
    }
    public function toMap() {
        $res = [];
        $res['PerformanceItemValue'] = [];
        if(null !== $this->performanceItemValue && is_array($this->performanceItemValue)){
            $n = 0;
            foreach($this->performanceItemValue as $item){
                $res['PerformanceItemValue'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return points
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PerformanceItemValue'])){
            if(!empty($map['PerformanceItemValue'])){
                $model->performanceItemValue = [];
                $n = 0;
                foreach($map['PerformanceItemValue'] as $item) {
                    $model->performanceItemValue[$n++] = null !== $item ? performanceItemValue::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description PerformanceItemValue
     * @var array
     */
    public $performanceItemValue;

}
