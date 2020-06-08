<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableDedicatedHostClassesResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableDedicatedHostClassesResponse\hostClasses\hostClasses;

class hostClasses extends Model {
    protected $_name = [
        'hostClasses' => 'HostClasses',
    ];
    public function validate() {
        Model::validateRequired('hostClasses', $this->hostClasses, true);
    }
    public function toMap() {
        $res = [];
        $res['HostClasses'] = [];
        if(null !== $this->hostClasses && is_array($this->hostClasses)){
            $n = 0;
            foreach($this->hostClasses as $item){
                $res['HostClasses'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return hostClasses
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['HostClasses'])){
            if(!empty($map['HostClasses'])){
                $model->hostClasses = [];
                $n = 0;
                foreach($map['HostClasses'] as $item) {
                    $model->hostClasses[$n++] = null !== $item ? hostClasses::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description HostClasses
     * @var array
     */
    public $hostClasses;

}
