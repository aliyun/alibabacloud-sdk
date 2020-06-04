<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponse\priceInfo\price;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponse\priceInfo\price\detailInfos\detailInfo;

class detailInfos extends Model {
    protected $_name = [
        'detailInfo' => 'DetailInfo',
    ];
    public function validate() {
        Model::validateRequired('detailInfo', $this->detailInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['DetailInfo'] = [];
        if(null !== $this->detailInfo && is_array($this->detailInfo)){
            $n = 0;
            foreach($this->detailInfo as $item){
                $res['DetailInfo'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return detailInfos
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DetailInfo'])){
            if(!empty($map['DetailInfo'])){
                $model->detailInfo = [];
                $n = 0;
                foreach($map['DetailInfo'] as $item) {
                    $model->detailInfo[$n++] = null !== $item ? detailInfo::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description DetailInfo
     * @var array
     */
    public $detailInfo;

}
