<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description ResourceIds
     *
     * @var array
     */
    public $resourceId;

    /**
     * @description ResourceType
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description TagKeys
     *
     * @var array
     */
    public $tagKey;

    /**
     * @description All
     *
     * @var bool
     */
    public $all;
    protected $_name = [
        'regionId'     => 'RegionId',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'tagKey'       => 'TagKey',
        'all'          => 'All',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['RegionId']   = $this->regionId;
        $res['ResourceId'] = [];
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        $res['ResourceType'] = $this->resourceType;
        $res['TagKey']       = [];
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        $res['All'] = $this->all;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UntagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = [];
                $model->resourceId = $map['ResourceId'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKey'])) {
            if (!empty($map['TagKey'])) {
                $model->tagKey = [];
                $model->tagKey = $map['TagKey'];
            }
        }
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }

        return $model;
    }
}
