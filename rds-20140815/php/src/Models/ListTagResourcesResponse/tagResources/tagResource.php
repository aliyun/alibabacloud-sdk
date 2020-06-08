<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\ListTagResourcesResponse\tagResources;

use AlibabaCloud\Tea\Model;

class tagResource extends Model {
    protected $_name = [
        'tagKey' => 'TagKey',
        'tagValue' => 'TagValue',
        'resourceType' => 'ResourceType',
        'resourceId' => 'ResourceId',
    ];
    public function validate() {
        Model::validateRequired('tagKey', $this->tagKey, true);
        Model::validateRequired('tagValue', $this->tagValue, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
    }
    public function toMap() {
        $res = [];
        $res['TagKey'] = $this->tagKey;
        $res['TagValue'] = $this->tagValue;
        $res['ResourceType'] = $this->resourceType;
        $res['ResourceId'] = $this->resourceId;
        return $res;
    }
    /**
     * @param array $map
     * @return tagResource
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TagKey'])){
            $model->tagKey = $map['TagKey'];
        }
        if(isset($map['TagValue'])){
            $model->tagValue = $map['TagValue'];
        }
        if(isset($map['ResourceType'])){
            $model->resourceType = $map['ResourceType'];
        }
        if(isset($map['ResourceId'])){
            $model->resourceId = $map['ResourceId'];
        }
        return $model;
    }
    /**
     * @description key
     * @var string
     */
    public $tagKey;

    /**
     * @description value
     * @var string
     */
    public $tagValue;

    /**
     * @description resourceType
     * @var string
     */
    public $resourceType;

    /**
     * @description resourceId
     * @var string
     */
    public $resourceId;

}
