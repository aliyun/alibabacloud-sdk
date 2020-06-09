<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'resourceType' => 'ResourceType',
        'all' => 'All',
        'resourceId' => 'ResourceId',
        'tagKey' => 'TagKey',
    ];
    public function validate() {
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['ResourceType'] = $this->resourceType;
        $res['All'] = $this->all;
        $res['ResourceId'] = [];
        if(null !== $this->resourceId){
            $res['ResourceId'] = $this->resourceId;
        }
        $res['TagKey'] = [];
        if(null !== $this->tagKey){
            $res['TagKey'] = $this->tagKey;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UntagResourcesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['ResourceType'])){
            $model->resourceType = $map['ResourceType'];
        }
        if(isset($map['All'])){
            $model->all = $map['All'];
        }
        if(isset($map['ResourceId'])){
            if(!empty($map['ResourceId'])){
                $model->resourceId = [];
                $model->resourceId = $map['ResourceId'];
            }
        }
        if(isset($map['TagKey'])){
            if(!empty($map['TagKey'])){
                $model->tagKey = [];
                $model->tagKey = $map['TagKey'];
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
     * @description all
     * @var bool
     */
    public $all;

    /**
     * @description resourceIds
     * @var array
     */
    public $resourceId;

    /**
     * @description tagKeys
     * @var array
     */
    public $tagKey;

}
