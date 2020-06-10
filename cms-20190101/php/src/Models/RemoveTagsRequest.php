<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\RemoveTagsRequest\tag;
use AlibabaCloud\Tea\Model;

class RemoveTagsRequest extends Model
{
    /**
     * @description tags
     *
     * @var array
     */
    public $tag;

    /**
     * @description groupIdList
     *
     * @var array
     */
    public $groupIds;
    protected $_name = [
        'tag'      => 'Tag',
        'groupIds' => 'GroupIds',
    ];

    public function validate()
    {
        Model::validateRequired('groupIds', $this->groupIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->groupIds) {
            $res['GroupIds'] = [];
            if (null !== $this->groupIds) {
                $res['GroupIds'] = $this->groupIds;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GroupIds'])) {
            if (!empty($map['GroupIds'])) {
                $model->groupIds = [];
                $model->groupIds = $map['GroupIds'];
            }
        }

        return $model;
    }
}
