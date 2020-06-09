<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeRegionsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeRegionsResponse\regions\region;

class regions extends Model {
    protected $_name = [
        'region' => 'Region',
    ];
    public function validate() {
        Model::validateRequired('region', $this->region, true);
    }
    public function toMap() {
        $res = [];
        $res['Region'] = [];
        if(null !== $this->region && is_array($this->region)){
            $n = 0;
            foreach($this->region as $item){
                $res['Region'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return regions
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Region'])){
            if(!empty($map['Region'])){
                $model->region = [];
                $n = 0;
                foreach($map['Region'] as $item) {
                    $model->region[$n++] = null !== $item ? region::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Region
     * @var array
     */
    public $region;

}
