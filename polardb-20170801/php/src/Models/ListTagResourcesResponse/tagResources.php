<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models\ListTagResourcesResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\ListTagResourcesResponse\tagResources\tagResource;

class tagResources extends Model {
    protected $_name = [
        'tagResource' => 'TagResource',
    ];
    public function validate() {
        Model::validateRequired('tagResource', $this->tagResource, true);
    }
    public function toMap() {
        $res = [];
        $res['TagResource'] = [];
        if(null !== $this->tagResource && is_array($this->tagResource)){
            $n = 0;
            foreach($this->tagResource as $item){
                $res['TagResource'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return tagResources
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TagResource'])){
            if(!empty($map['TagResource'])){
                $model->tagResource = [];
                $n = 0;
                foreach($map['TagResource'] as $item) {
                    $model->tagResource[$n++] = null !== $item ? tagResource::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description TagResource
     * @var array
     */
    public $tagResource;

}
