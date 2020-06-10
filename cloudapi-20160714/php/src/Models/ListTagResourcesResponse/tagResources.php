<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ListTagResourcesResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ListTagResourcesResponse\tagResources\tagResource;
use AlibabaCloud\Tea\Model;

class tagResources extends Model
{
    /**
     * @description TagResource
     *
     * @var array
     */
    public $tagResource;
    protected $_name = [
        'tagResource' => 'TagResource',
    ];

    public function validate()
    {
        Model::validateRequired('tagResource', $this->tagResource, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagResource) {
            $res['TagResource'] = [];
            if (null !== $this->tagResource && \is_array($this->tagResource)) {
                $n = 0;
                foreach ($this->tagResource as $item) {
                    $res['TagResource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

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
        if (isset($map['TagResource'])) {
            if (!empty($map['TagResource'])) {
                $model->tagResource = [];
                $n                  = 0;
                foreach ($map['TagResource'] as $item) {
                    $model->tagResource[$n++] = null !== $item ? tagResource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
