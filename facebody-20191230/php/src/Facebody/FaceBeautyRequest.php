<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class FaceBeautyRequest extends Model
{
    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageURL;
    /**
     * @description sharp
     *
     * @var float
     */
    public $sharp;
    /**
     * @description smooth
     *
     * @var float
     */
    public $smooth;
    /**
     * @description white
     *
     * @var float
     */
    public $white;
    protected $_name = [
        'imageURL' => 'ImageURL',
        'sharp'    => 'Sharp',
        'smooth'   => 'Smooth',
        'white'    => 'White',
    ];

    public function validate()
    {
        Model::validateRequired('imageURL', $this->imageURL, true);
        Model::validateRequired('sharp', $this->sharp, true);
        Model::validateRequired('smooth', $this->smooth, true);
        Model::validateRequired('white', $this->white, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['ImageURL'] = $this->imageURL;
        $res['Sharp']    = $this->sharp;
        $res['Smooth']   = $this->smooth;
        $res['White']    = $this->white;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FaceBeautyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['Sharp'])) {
            $model->sharp = $map['Sharp'];
        }
        if (isset($map['Smooth'])) {
            $model->smooth = $map['Smooth'];
        }
        if (isset($map['White'])) {
            $model->white = $map['White'];
        }

        return $model;
    }
}
