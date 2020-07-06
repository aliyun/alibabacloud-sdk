<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class ListTagResourcesQuery extends Model
{
    /**
     * @description next_token
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description resource_ids
     *
     * @var string
     */
    public $resourceIds;

    /**
     * @description tags
     *
     * @var string
     */
    public $tags;

    /**
     * @description resource_type
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'nextToken'    => 'next_token',
        'resourceIds'  => 'resource_ids',
        'tags'         => 'tags',
        'resourceType' => 'resource_type',
    ];

    public function validate()
    {
        Model::validateRequired('resourceType', $this->resourceType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['next_token'] = $this->nextToken;
        }
        if (null !== $this->resourceIds) {
            $res['resource_ids'] = $this->resourceIds;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        if (null !== $this->resourceType) {
            $res['resource_type'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagResourcesQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['next_token'])) {
            $model->nextToken = $map['next_token'];
        }
        if (isset($map['resource_ids'])) {
            $model->resourceIds = $map['resource_ids'];
        }
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }
        if (isset($map['resource_type'])) {
            $model->resourceType = $map['resource_type'];
        }

        return $model;
    }
}
