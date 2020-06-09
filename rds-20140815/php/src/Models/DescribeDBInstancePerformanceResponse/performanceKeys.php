<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancePerformanceResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancePerformanceResponse\performanceKeys\performanceKey;

class performanceKeys extends Model {
    protected $_name = [
        'performanceKey' => 'PerformanceKey',
    ];
    public function validate() {
        Model::validateRequired('performanceKey', $this->performanceKey, true);
    }
    public function toMap() {
        $res = [];
        $res['PerformanceKey'] = [];
        if(null !== $this->performanceKey && is_array($this->performanceKey)){
            $n = 0;
            foreach($this->performanceKey as $item){
                $res['PerformanceKey'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['PerformanceKey'])){
            if(!empty($map['PerformanceKey'])){
                $model->performanceKey = [];
                $n = 0;
                foreach($map['PerformanceKey'] as $item) {
                    $model->performanceKey[$n++] = null !== $item ? performanceKey::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description PerformanceKey
     * @var array
     */
    public $performanceKey;

}
