<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone;

class availableZones extends Model {
    protected $_name = [
        'availableZone' => 'AvailableZone',
    ];
    public function validate() {
        Model::validateRequired('availableZone', $this->availableZone, true);
    }
    public function toMap() {
        $res = [];
        $res['AvailableZone'] = [];
        if(null !== $this->availableZone && is_array($this->availableZone)){
            $n = 0;
            foreach($this->availableZone as $item){
                $res['AvailableZone'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return availableZones
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AvailableZone'])){
            if(!empty($map['AvailableZone'])){
                $model->availableZone = [];
                $n = 0;
                foreach($map['AvailableZone'] as $item) {
                    $model->availableZone[$n++] = null !== $item ? availableZone::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description AvailableZone
     * @var array
     */
    public $availableZone;

}
