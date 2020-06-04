<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\securityContext\sysctl;

class securityContext extends Model {
    protected $_name = [
        'sysctl' => 'Sysctl',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['Sysctl'] = [];
        if(null !== $this->sysctl && is_array($this->sysctl)){
            $n = 0;
            foreach($this->sysctl as $item){
                $res['Sysctl'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return securityContext
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Sysctl'])){
            if(!empty($map['Sysctl'])){
                $model->sysctl = [];
                $n = 0;
                foreach($map['Sysctl'] as $item) {
                    $model->sysctl[$n++] = null !== $item ? sysctl::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description PodSecurityContextSysctls
     * @var array
     */
    public $sysctl;

}
