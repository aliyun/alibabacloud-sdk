<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListTagResourcesResponse;

use AlibabaCloud\Tea\Model;

class tagResources extends Model
{
    /**
     * @description ResourceId
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description ResourceType
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description TagKey
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description TagValue
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'tagKey'       => 'TagKey',
        'tagValue'     => 'TagValue',
    ];

    public function validate()
    {
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('tagKey', $this->tagKey, true);
        Model::validateRequired('tagValue', $this->tagValue, true);
    }

    public function toMap()
    {
        $res                 = [];
        $res['ResourceId']   = $this->resourceId;
        $res['ResourceType'] = $this->resourceType;
        $res['TagKey']       = $this->tagKey;
        $res['TagValue']     = $this->tagValue;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
