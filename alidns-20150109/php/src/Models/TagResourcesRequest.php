<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\TagResourcesRequest\tag;

class TagResourcesRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'resourceType' => 'ResourceType',
        'tag' => 'Tag',
        'resourceId' => 'ResourceId',
    ];
    public function validate() {
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('tag', $this->tag, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['ResourceType'] = $this->resourceType;
        $res['Tag'] = [];
        if(null !== $this->tag && is_array($this->tag)){
            $n = 0;
            foreach($this->tag as $item){
                $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['ResourceId'] = [];
        if(null !== $this->resourceId){
            $res['ResourceId'] = $this->resourceId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return TagResourcesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['ResourceType'])){
            $model->resourceType = $map['ResourceType'];
        }
        if(isset($map['Tag'])){
            if(!empty($map['Tag'])){
                $model->tag = [];
                $n = 0;
                foreach($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['ResourceId'])){
            if(!empty($map['ResourceId'])){
                $model->resourceId = [];
                $model->resourceId = $map['ResourceId'];
            }
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description resourceType
     * @var string
     */
    public $resourceType;

    /**
     * @description tags
     * @var array
     */
    public $tag;

    /**
     * @description resourceIds
     * @var array
     */
    public $resourceId;

}
