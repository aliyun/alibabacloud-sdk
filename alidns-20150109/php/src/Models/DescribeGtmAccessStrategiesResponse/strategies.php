<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategiesResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategiesResponse\strategies\strategy;

class strategies extends Model {
    protected $_name = [
        'strategy' => 'Strategy',
    ];
    public function validate() {
        Model::validateRequired('strategy', $this->strategy, true);
    }
    public function toMap() {
        $res = [];
        $res['Strategy'] = [];
        if(null !== $this->strategy && is_array($this->strategy)){
            $n = 0;
            foreach($this->strategy as $item){
                $res['Strategy'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return strategies
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Strategy'])){
            if(!empty($map['Strategy'])){
                $model->strategy = [];
                $n = 0;
                foreach($map['Strategy'] as $item) {
                    $model->strategy[$n++] = null !== $item ? strategy::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Strategy
     * @var array
     */
    public $strategy;

}
