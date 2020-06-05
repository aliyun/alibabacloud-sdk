<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponse\roles\role;

class roles extends Model {
    protected $_name = [
        'role' => 'Role',
    ];
    public function validate() {
        Model::validateRequired('role', $this->role, true);
    }
    public function toMap() {
        $res = [];
        $res['Role'] = [];
        if(null !== $this->role && is_array($this->role)){
            $n = 0;
            foreach($this->role as $item){
                $res['Role'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return roles
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Role'])){
            if(!empty($map['Role'])){
                $model->role = [];
                $n = 0;
                foreach($map['Role'] as $item) {
                    $model->role[$n++] = null !== $item ? role::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Role
     * @var array
     */
    public $role;

}
