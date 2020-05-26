<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\TagResourcesRequest\tag;
use AlibabaCloud\Tea\Model;

class TagResourcesRequest extends Model
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
     * @description Tags
     *
     * @var array
     */
    public $tag;
    protected $_name = [
        'regionId'     => 'RegionId',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'tag'          => 'Tag',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('tag', $this->tag, true);
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
        $res['Tag']          = [];
        if (null !== $this->tag && \is_array($this->tag)) {
            $n = 0;
            foreach ($this->tag as $item) {
                $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TagResourcesRequest
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
