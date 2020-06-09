<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostsResponse\dedicatedHosts\dedicatedHosts;

class dedicatedHosts extends Model {
    protected $_name = [
        'dedicatedHosts' => 'DedicatedHosts',
    ];
    public function validate() {
        Model::validateRequired('dedicatedHosts', $this->dedicatedHosts, true);
    }
    public function toMap() {
        $res = [];
        $res['DedicatedHosts'] = [];
        if(null !== $this->dedicatedHosts && is_array($this->dedicatedHosts)){
            $n = 0;
            foreach($this->dedicatedHosts as $item){
                $res['DedicatedHosts'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return dedicatedHosts
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DedicatedHosts'])){
            if(!empty($map['DedicatedHosts'])){
                $model->dedicatedHosts = [];
                $n = 0;
                foreach($map['DedicatedHosts'] as $item) {
                    $model->dedicatedHosts[$n++] = null !== $item ? dedicatedHosts::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description DedicatedHosts
     * @var array
     */
    public $dedicatedHosts;

}
