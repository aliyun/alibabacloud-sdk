<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTagsResponse;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTagsResponse\items\tagInfos;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description TagInfos
     *
     * @var array
     */
    public $tagInfos;
    protected $_name = [
        'tagInfos' => 'TagInfos',
    ];

    public function validate()
    {
        Model::validateRequired('tagInfos', $this->tagInfos, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagInfos) {
            $res['TagInfos'] = [];
            if (null !== $this->tagInfos && \is_array($this->tagInfos)) {
                $n = 0;
                foreach ($this->tagInfos as $item) {
                    $res['TagInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagInfos'])) {
            if (!empty($map['TagInfos'])) {
                $model->tagInfos = [];
                $n               = 0;
                foreach ($map['TagInfos'] as $item) {
                    $model->tagInfos[$n++] = null !== $item ? tagInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
