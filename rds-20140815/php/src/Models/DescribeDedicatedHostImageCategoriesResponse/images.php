<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostImageCategoriesResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostImageCategoriesResponse\images\images;

class images extends Model {
    protected $_name = [
        'images' => 'Images',
    ];
    public function validate() {
        Model::validateRequired('images', $this->images, true);
    }
    public function toMap() {
        $res = [];
        $res['Images'] = [];
        if(null !== $this->images && is_array($this->images)){
            $n = 0;
            foreach($this->images as $item){
                $res['Images'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return images
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Images'])){
            if(!empty($map['Images'])){
                $model->images = [];
                $n = 0;
                foreach($map['Images'] as $item) {
                    $model->images[$n++] = null !== $item ? images::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Images
     * @var array
     */
    public $images;

}
