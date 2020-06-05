<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponse\groups\group;

class groups extends Model {
    protected $_name = [
        'group' => 'Group',
    ];
    public function validate() {
        Model::validateRequired('group', $this->group, true);
    }
    public function toMap() {
        $res = [];
        $res['Group'] = [];
        if(null !== $this->group && is_array($this->group)){
            $n = 0;
            foreach($this->group as $item){
                $res['Group'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return groups
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Group'])){
            if(!empty($map['Group'])){
                $model->group = [];
                $n = 0;
                foreach($map['Group'] as $item) {
                    $model->group[$n++] = null !== $item ? group::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Group
     * @var array
     */
    public $group;

}
