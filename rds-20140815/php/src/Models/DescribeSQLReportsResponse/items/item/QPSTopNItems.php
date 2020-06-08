<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLReportsResponse\items\item;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLReportsResponse\items\item\QPSTopNItems\QPSTopNItem;

class QPSTopNItems extends Model {
    protected $_name = [
        'QPSTopNItem' => 'QPSTopNItem',
    ];
    public function validate() {
        Model::validateRequired('QPSTopNItem', $this->QPSTopNItem, true);
    }
    public function toMap() {
        $res = [];
        $res['QPSTopNItem'] = [];
        if(null !== $this->QPSTopNItem && is_array($this->QPSTopNItem)){
            $n = 0;
            foreach($this->QPSTopNItem as $item){
                $res['QPSTopNItem'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QPSTopNItems
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['QPSTopNItem'])){
            if(!empty($map['QPSTopNItem'])){
                $model->QPSTopNItem = [];
                $n = 0;
                foreach($map['QPSTopNItem'] as $item) {
                    $model->QPSTopNItem[$n++] = null !== $item ? QPSTopNItem::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description QPSTopNItem
     * @var array
     */
    public $QPSTopNItem;

}
