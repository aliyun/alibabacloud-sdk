<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentCommodityResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageURL;
    protected $_name = [
        'imageURL' => 'ImageURL',
    ];

    public function validate()
    {
        Model::validateRequired('imageURL', $this->imageURL, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['ImageURL'] = $this->imageURL;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        return $model;
    }
}
