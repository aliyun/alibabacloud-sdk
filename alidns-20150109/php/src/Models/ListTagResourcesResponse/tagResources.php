<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ListTagResourcesResponse;

use AlibabaCloud\Tea\Model;

class tagResources extends Model {
    protected $_name = [
        'tagKey' => 'TagKey',
        'tagValue' => 'TagValue',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
    ];
    public function validate() {
        Model::validateRequired('tagKey', $this->tagKey, true);
        Model::validateRequired('tagValue', $this->tagValue, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
    }
    public function toMap() {
        $res = [];
        $res['TagKey'] = $this->tagKey;
        $res['TagValue'] = $this->tagValue;
        $res['ResourceId'] = $this->resourceId;
        $res['ResourceType'] = $this->resourceType;
        return $res;
    }
    /**
     * @param array $map
     * @return tagResources
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TagKey'])){
            $model->tagKey = $map['TagKey'];
        }
        if(isset($map['TagValue'])){
            $model->tagValue = $map['TagValue'];
        }
        if(isset($map['ResourceId'])){
            $model->resourceId = $map['ResourceId'];
        }
        if(isset($map['ResourceType'])){
            $model->resourceType = $map['ResourceType'];
        }
        return $model;
    }
    /**
     * @description keyName
     * @var string
     */
    public $tagKey;

    /**
     * @description valueName
     * @var string
     */
    public $tagValue;

    /**
     * @description resourceId
     * @var string
     */
    public $resourceId;

    /**
     * @description resourceType
     * @var string
     */
    public $resourceType;

}
