<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsResponseBody\componentGroups;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsResponseBody\standardComponents;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsResponseBody\standardComponents\addonName;

class DescribeAddonsResponseBody extends Model {
    protected $_name = [
        'componentGroups' => 'ComponentGroups',
        'standardComponents' => 'StandardComponents',
    ];
    public function validate() {
        Model::validateRequired('componentGroups', $this->componentGroups, true);
        Model::validateRequired('standardComponents', $this->standardComponents, true);
    }
    public function toMap() {
        $res = [];
        $res['ComponentGroups'] = [];
        if(null !== $this->componentGroups && is_array($this->componentGroups)){
            $n = 0;
            foreach($this->componentGroups as $item){
                $res['ComponentGroups'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['StandardComponents'] = null !== $this->standardComponents ? $this->standardComponents->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeAddonsResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ComponentGroups'])){
            if(!empty($map['ComponentGroups'])){
                $model->componentGroups = [];
                $n = 0;
                foreach($map['ComponentGroups'] as $item) {
                    $model->componentGroups[$n++] = null !== $item ? componentGroups::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['StandardComponents'])){
            $model->standardComponents = standardComponents::fromMap($map['StandardComponents']);
        }
        return $model;
    }
    /**
     * @description ComponentGroups
     * @var array
     */
    public $componentGroups;

    /**
     * @description StandardComponents
     * @var standardComponents
     */
    public $standardComponents;

}
