<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeIdentityCardResponse\data\frontResult\faceRectangle;

use AlibabaCloud\Tea\Model;

class size extends Model
{
    /**
     * @description height
     *
     * @var float
     */
    public $height;

    /**
     * @description width
     *
     * @var float
     */
    public $width;
    protected $_name = [
        'height' => 'Height',
        'width'  => 'Width',
    ];

    public function validate()
    {
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('width', $this->width, true);
    }

    public function toMap()
    {
        $res           = [];
        $res['Height'] = $this->height;
        $res['Width']  = $this->width;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return size
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
