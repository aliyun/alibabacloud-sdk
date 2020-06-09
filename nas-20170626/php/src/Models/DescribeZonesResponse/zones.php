<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponse\zones\zone;

class zones extends Model {
    protected $_name = [
        'zone' => 'Zone',
    ];
    public function validate() {
        Model::validateRequired('zone', $this->zone, true);
    }
    public function toMap() {
        $res = [];
        $res['Zone'] = [];
        if(null !== $this->zone && is_array($this->zone)){
            $n = 0;
            foreach($this->zone as $item){
                $res['Zone'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return zones
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Zone'])){
            if(!empty($map['Zone'])){
                $model->zone = [];
                $n = 0;
                foreach($map['Zone'] as $item) {
                    $model->zone[$n++] = null !== $item ? zone::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Zone
     * @var array
     */
    public $zone;

}
