<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppAttributesResponse\apps\appAttribute;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppAttributesResponse\apps\appAttribute\tags\tagInfo;
use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description TagInfo
     *
     * @var array
     */
    public $tagInfo;
    protected $_name = [
        'tagInfo' => 'TagInfo',
    ];

    public function validate()
    {
        Model::validateRequired('tagInfo', $this->tagInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagInfo) {
            $res['TagInfo'] = [];
            if (null !== $this->tagInfo && \is_array($this->tagInfo)) {
                $n = 0;
                foreach ($this->tagInfo as $item) {
                    $res['TagInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagInfo'])) {
            if (!empty($map['TagInfo'])) {
                $model->tagInfo = [];
                $n              = 0;
                foreach ($map['TagInfo'] as $item) {
                    $model->tagInfo[$n++] = null !== $item ? tagInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
