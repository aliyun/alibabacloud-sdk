<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class FaceBeautyAdvanceRequest extends Model
{
    /**
     * @description ImageURLObject
     *
     * @var Stream
     */
    public $imageURLObject;
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
        'imageURLObject' => 'ImageURLObject',
        'sharp'          => 'Sharp',
        'smooth'         => 'Smooth',
        'white'          => 'White',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
        Model::validateRequired('sharp', $this->sharp, true);
        Model::validateRequired('smooth', $this->smooth, true);
        Model::validateRequired('white', $this->white, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['ImageURLObject'] = $this->imageURLObject;
        $res['Sharp']          = $this->sharp;
        $res['Smooth']         = $this->smooth;
        $res['White']          = $this->white;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FaceBeautyAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
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
