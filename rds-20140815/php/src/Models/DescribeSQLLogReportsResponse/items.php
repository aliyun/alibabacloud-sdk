<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportsResponse\items\item;

class items extends Model {
    protected $_name = [
        'item' => 'Item',
    ];
    public function validate() {
        Model::validateRequired('item', $this->item, true);
    }
    public function toMap() {
        $res = [];
        $res['Item'] = [];
        if(null !== $this->item && is_array($this->item)){
            $n = 0;
            foreach($this->item as $item){
                $res['Item'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['Item'])){
            if(!empty($map['Item'])){
                $model->item = [];
                $n = 0;
                foreach($map['Item'] as $item) {
                    $model->item[$n++] = null !== $item ? item::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Item
     * @var array
     */
    public $item;

}
