<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountTargetsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountTargetsResponse\mountTargets\mountTarget;

class mountTargets extends Model {
    protected $_name = [
        'mountTarget' => 'MountTarget',
    ];
    public function validate() {
        Model::validateRequired('mountTarget', $this->mountTarget, true);
    }
    public function toMap() {
        $res = [];
        $res['MountTarget'] = [];
        if(null !== $this->mountTarget && is_array($this->mountTarget)){
            $n = 0;
            foreach($this->mountTarget as $item){
                $res['MountTarget'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return mountTargets
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['MountTarget'])){
            if(!empty($map['MountTarget'])){
                $model->mountTarget = [];
                $n = 0;
                foreach($map['MountTarget'] as $item) {
                    $model->mountTarget[$n++] = null !== $item ? mountTarget::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description MountTarget
     * @var array
     */
    public $mountTarget;

}
