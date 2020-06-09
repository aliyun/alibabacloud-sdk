<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanResponse\faultAddrPools\faultAddrPool;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanResponse\faultAddrPools\faultAddrPool\addrs\addr;

class addrs extends Model {
    protected $_name = [
        'addr' => 'Addr',
    ];
    public function validate() {
        Model::validateRequired('addr', $this->addr, true);
    }
    public function toMap() {
        $res = [];
        $res['Addr'] = [];
        if(null !== $this->addr && is_array($this->addr)){
            $n = 0;
            foreach($this->addr as $item){
                $res['Addr'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return addrs
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Addr'])){
            if(!empty($map['Addr'])){
                $model->addr = [];
                $n = 0;
                foreach($map['Addr'] as $item) {
                    $model->addr[$n++] = null !== $item ? addr::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Addr
     * @var array
     */
    public $addr;

}
