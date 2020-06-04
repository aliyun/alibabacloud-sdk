<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponse\priceInfo;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponse\priceInfo\spotPrices\spotPrice;

class spotPrices extends Model {
    protected $_name = [
        'spotPrice' => 'SpotPrice',
    ];
    public function validate() {
        Model::validateRequired('spotPrice', $this->spotPrice, true);
    }
    public function toMap() {
        $res = [];
        $res['SpotPrice'] = [];
        if(null !== $this->spotPrice && is_array($this->spotPrice)){
            $n = 0;
            foreach($this->spotPrice as $item){
                $res['SpotPrice'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return spotPrices
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SpotPrice'])){
            if(!empty($map['SpotPrice'])){
                $model->spotPrice = [];
                $n = 0;
                foreach($map['SpotPrice'] as $item) {
                    $model->spotPrice[$n++] = null !== $item ? spotPrice::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description SpotPrice
     * @var array
     */
    public $spotPrice;

}
