<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponse\materialList\material;

use AlibabaCloud\Tea\Model;

class sprites extends Model {
    protected $_name = [
        'sprite' => 'Sprite',
    ];
    public function validate() {
        Model::validateRequired('sprite', $this->sprite, true);
    }
    public function toMap() {
        $res = [];
        $res['Sprite'] = [];
        if(null !== $this->sprite){
            $res['Sprite'] = $this->sprite;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return sprites
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Sprite'])){
            if(!empty($map['Sprite'])){
                $model->sprite = [];
                $model->sprite = $map['Sprite'];
            }
        }
        return $model;
    }
    /**
     * @description Sprite
     * @var array
     */
    public $sprite;

}
