<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostResponse\dedicateHostList\dedicateHostList;

class dedicateHostList extends Model {
    protected $_name = [
        'dedicateHostList' => 'DedicateHostList',
    ];
    public function validate() {
        Model::validateRequired('dedicateHostList', $this->dedicateHostList, true);
    }
    public function toMap() {
        $res = [];
        $res['DedicateHostList'] = [];
        if(null !== $this->dedicateHostList && is_array($this->dedicateHostList)){
            $n = 0;
            foreach($this->dedicateHostList as $item){
                $res['DedicateHostList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return dedicateHostList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DedicateHostList'])){
            if(!empty($map['DedicateHostList'])){
                $model->dedicateHostList = [];
                $n = 0;
                foreach($map['DedicateHostList'] as $item) {
                    $model->dedicateHostList[$n++] = null !== $item ? dedicateHostList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description DedicateHostList
     * @var array
     */
    public $dedicateHostList;

}
