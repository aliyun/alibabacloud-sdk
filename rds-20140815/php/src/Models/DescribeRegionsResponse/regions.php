<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRegionsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRegionsResponse\regions\RDSRegion;

class regions extends Model {
    protected $_name = [
        'RDSRegion' => 'RDSRegion',
    ];
    public function validate() {
        Model::validateRequired('RDSRegion', $this->RDSRegion, true);
    }
    public function toMap() {
        $res = [];
        $res['RDSRegion'] = [];
        if(null !== $this->RDSRegion && is_array($this->RDSRegion)){
            $n = 0;
            foreach($this->RDSRegion as $item){
                $res['RDSRegion'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['RDSRegion'])){
            if(!empty($map['RDSRegion'])){
                $model->RDSRegion = [];
                $n = 0;
                foreach($map['RDSRegion'] as $item) {
                    $model->RDSRegion[$n++] = null !== $item ? RDSRegion::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description RDSRegion
     * @var array
     */
    public $RDSRegion;

}
