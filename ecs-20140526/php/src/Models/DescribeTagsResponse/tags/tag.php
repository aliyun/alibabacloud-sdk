<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTagsResponse\tags;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTagsResponse\tags\tag\resourceTypeCount;
use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @var string
     */
    public $tagKey;

    /**
     * @var string
     */
    public $tagValue;

    /**
     * @var resourceTypeCount
     */
    public $resourceTypeCount;
    protected $_name = [
        'tagKey'            => 'TagKey',
        'tagValue'          => 'TagValue',
        'resourceTypeCount' => 'ResourceTypeCount',
    ];

    public function validate()
    {
        Model::validateRequired('tagKey', $this->tagKey, true);
        Model::validateRequired('tagValue', $this->tagValue, true);
        Model::validateRequired('resourceTypeCount', $this->resourceTypeCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }
        if (null !== $this->resourceTypeCount) {
            $res['ResourceTypeCount'] = null !== $this->resourceTypeCount ? $this->resourceTypeCount->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }
        if (isset($map['ResourceTypeCount'])) {
            $model->resourceTypeCount = resourceTypeCount::fromMap($map['ResourceTypeCount']);
        }

        return $model;
    }
}
