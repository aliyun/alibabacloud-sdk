<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLReportsResponse\items\item;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLReportsResponse\items\item\latencyTopNItems\latencyTopNItem;

class latencyTopNItems extends Model {
    protected $_name = [
        'latencyTopNItem' => 'LatencyTopNItem',
    ];
    public function validate() {
        Model::validateRequired('latencyTopNItem', $this->latencyTopNItem, true);
    }
    public function toMap() {
        $res = [];
        $res['LatencyTopNItem'] = [];
        if(null !== $this->latencyTopNItem && is_array($this->latencyTopNItem)){
            $n = 0;
            foreach($this->latencyTopNItem as $item){
                $res['LatencyTopNItem'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return latencyTopNItems
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['LatencyTopNItem'])){
            if(!empty($map['LatencyTopNItem'])){
                $model->latencyTopNItem = [];
                $n = 0;
                foreach($map['LatencyTopNItem'] as $item) {
                    $model->latencyTopNItem[$n++] = null !== $item ? latencyTopNItem::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description LatencyTopNItem
     * @var array
     */
    public $latencyTopNItem;

}
