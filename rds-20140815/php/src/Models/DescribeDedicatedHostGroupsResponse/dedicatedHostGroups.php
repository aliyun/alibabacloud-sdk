<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostGroupsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostGroupsResponse\dedicatedHostGroups\dedicatedHostGroups;

class dedicatedHostGroups extends Model {
    protected $_name = [
        'dedicatedHostGroups' => 'DedicatedHostGroups',
    ];
    public function validate() {
        Model::validateRequired('dedicatedHostGroups', $this->dedicatedHostGroups, true);
    }
    public function toMap() {
        $res = [];
        $res['DedicatedHostGroups'] = [];
        if(null !== $this->dedicatedHostGroups && is_array($this->dedicatedHostGroups)){
            $n = 0;
            foreach($this->dedicatedHostGroups as $item){
                $res['DedicatedHostGroups'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return dedicatedHostGroups
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DedicatedHostGroups'])){
            if(!empty($map['DedicatedHostGroups'])){
                $model->dedicatedHostGroups = [];
                $n = 0;
                foreach($map['DedicatedHostGroups'] as $item) {
                    $model->dedicatedHostGroups[$n++] = null !== $item ? dedicatedHostGroups::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description DedicatedHostGroups
     * @var array
     */
    public $dedicatedHostGroups;

}
