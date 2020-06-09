<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterPerformanceResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterPerformanceResponse\performanceKeys\performanceItem;

class performanceKeys extends Model {
    protected $_name = [
        'performanceItem' => 'PerformanceItem',
    ];
    public function validate() {
        Model::validateRequired('performanceItem', $this->performanceItem, true);
    }
    public function toMap() {
        $res = [];
        $res['PerformanceItem'] = [];
        if(null !== $this->performanceItem && is_array($this->performanceItem)){
            $n = 0;
            foreach($this->performanceItem as $item){
                $res['PerformanceItem'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return performanceKeys
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PerformanceItem'])){
            if(!empty($map['PerformanceItem'])){
                $model->performanceItem = [];
                $n = 0;
                foreach($map['PerformanceItem'] as $item) {
                    $model->performanceItem[$n++] = null !== $item ? performanceItem::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description PerformanceItem
     * @var array
     */
    public $performanceItem;

}
