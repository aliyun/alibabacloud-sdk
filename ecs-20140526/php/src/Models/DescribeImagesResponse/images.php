<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponse\images\image;
use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @description Image
     *
     * @var array
     */
    public $image;
    protected $_name = [
        'image' => 'Image',
    ];

    public function validate()
    {
        Model::validateRequired('image', $this->image, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->image) {
            $res['Image'] = [];
            if (null !== $this->image && \is_array($this->image)) {
                $n = 0;
                foreach ($this->image as $item) {
                    $res['Image'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return images
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Image'])) {
            if (!empty($map['Image'])) {
                $model->image = [];
                $n            = 0;
                foreach ($map['Image'] as $item) {
                    $model->image[$n++] = null !== $item ? image::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
