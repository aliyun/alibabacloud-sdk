<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponse\items\items;

class items extends Model {
    protected $_name = [
        'items' => 'Items',
    ];
    public function validate() {
        Model::validateRequired('items', $this->items, true);
    }
    public function toMap() {
        $res = [];
        $res['Items'] = [];
        if(null !== $this->items && is_array($this->items)){
            $n = 0;
            foreach($this->items as $item){
                $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return items
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Items'])){
            if(!empty($map['Items'])){
                $model->items = [];
                $n = 0;
                foreach($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Items
     * @var array
     */
    public $items;

}
