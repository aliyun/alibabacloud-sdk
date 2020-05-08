<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentVehicleResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @description originImageUrl
     *
     * @var string
     */
    public $originImageURL;

    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageURL;
    protected $_name = [
        'originImageURL' => 'OriginImageURL',
        'imageURL'       => 'ImageURL',
    ];

    public function validate()
    {
        Model::validateRequired('originImageURL', $this->originImageURL, true);
        Model::validateRequired('imageURL', $this->imageURL, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['OriginImageURL'] = $this->originImageURL;
        $res['ImageURL']       = $this->imageURL;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginImageURL'])) {
            $model->originImageURL = $map['OriginImageURL'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        return $model;
    }
}
