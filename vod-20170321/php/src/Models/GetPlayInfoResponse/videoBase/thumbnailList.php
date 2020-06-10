<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponse\videoBase;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponse\videoBase\thumbnailList\thumbnail;
use AlibabaCloud\Tea\Model;

class thumbnailList extends Model
{
    /**
     * @description Thumbnail
     *
     * @var array
     */
    public $thumbnail;
    protected $_name = [
        'thumbnail' => 'Thumbnail',
    ];

    public function validate()
    {
        Model::validateRequired('thumbnail', $this->thumbnail, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->thumbnail) {
            $res['Thumbnail'] = [];
            if (null !== $this->thumbnail && \is_array($this->thumbnail)) {
                $n = 0;
                foreach ($this->thumbnail as $item) {
                    $res['Thumbnail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return thumbnailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Thumbnail'])) {
            if (!empty($map['Thumbnail'])) {
                $model->thumbnail = [];
                $n                = 0;
                foreach ($map['Thumbnail'] as $item) {
                    $model->thumbnail[$n++] = null !== $item ? thumbnail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
