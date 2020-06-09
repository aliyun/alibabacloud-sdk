<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterSSLResponse\items;

class DescribeDBClusterSSLResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'items' => 'Items',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('items', $this->items, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
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
     * @return DescribeDBClusterSSLResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
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
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.certList
     * @var array
     */
    public $items;

}
